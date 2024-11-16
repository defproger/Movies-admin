<?php

use App\Controllers\UserController;
use App\Services\MySQLDatabase;
use App\Services\View;

$db = MySQLDatabase::getInstance();
$userController = new UserController($db);
$view = new View();

$router->get('/', function () use ($userController) {
    if ($userController->isAuthenticated()) {
        header('Location: /dashboard');
    } else {
        header('Location: /login');
    }
});

$router->get('/register', function () use ($view) {
    $view->display('auth/register');
});

$router->get('/login', function () use ($view) {
    $view->display('auth/login');
});

$router->get('/logout', function () use ($userController) {
    $userController->logout();
});

$router->get('/dashboard', function () use ($userController, $view) {
    $user = $userController->isAuthenticated();
    if ($user) {
        $view->display('dashboard', ['user' => $user]);
    } else {
        header('Location: /login');
        exit();
    }
});
