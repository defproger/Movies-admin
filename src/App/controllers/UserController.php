<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\DatabaseInterface;

class UserController extends BaseController
{
    private DatabaseInterface $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function register(array $data): void
    {
        $login = trim($data['login']);
        $password = trim($data['password']);

        if (empty($login) || empty($password)) {
            $this->response(['message' => 'All fields are required'], 400);
        }

        $existingUser = $this->db->query('SELECT * FROM users WHERE login = :login', ['login' => $login]);
        if ($existingUser) {
            $this->response(['message' => 'Login already taken'], 400);
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $this->db->insert('users', ['login' => $login, 'password' => $passwordHash]);

        $this->response(['message' => 'Registration successful', 'redirect' => '/login']);
    }

    public function login(array $data): void
    {
        $login = trim($data['login']);
        $password = trim($data['password']);

        if (empty($login) || empty($password)) {
            $this->response(['message' => 'Login and password are required'], 400);
        }

        $user = $this->db->query('SELECT * FROM users WHERE login = :login', ['login' => $login]);
        if (!$user || !password_verify($password, $user['password'])) {
            $this->response(['message' => 'Invalid login or password'], 401);
        }

        $token = bin2hex(random_bytes(16));
        $this->db->update('users', ['hash' => $token], $user['id']);
        setcookie('auth_token', $token, time() + 86400, '/');

        $this->response(['message' => 'Login successful', 'redirect' => '/dashboard']);
    }

    public function isAuthenticated(): array|false
    {
        if (!isset($_COOKIE['auth_token'])) {
            return false;
        }

        $user = $this->db->query('SELECT * FROM users WHERE hash = :hash', ['hash' => $_COOKIE['auth_token']]);
        return $user ?: false;
    }

    public function logout(): void
    {
        if (isset($_COOKIE['auth_token'])) {
            $user = $this->isAuthenticated();
            if ($user) {
                $this->db->update('users', ['hash' => null], $user['id']);
            }
            setcookie('auth_token', '', time() - 3600, '/');
        }
        header('Location: /login');
        exit();
    }
}
