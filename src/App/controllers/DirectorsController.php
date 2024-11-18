<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\DatabaseInterface;

class DirectorsController extends BaseController
{
    private DatabaseInterface $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function getList(): void
    {
        $directors = $this->db->queryAll("SELECT * FROM director");
        $this->response($directors);
    }

    public function getById(int $id): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid director ID'], 400);
            return;
        }

        $director = $this->db->query("SELECT * FROM director WHERE directorId = :id", ['id' => $id]);

        if (!$director) {
            $this->response(['error' => 'Director not found'], 404);
            return;
        }

        $this->response($director);
    }

    public function add(array $data): void
    {
        if (empty($data['name'])) {
            $this->response(['error' => 'Director name is required'], 400);
            return;
        }

        $this->db->insert('director', ['name' => $data['name']]);
        $this->response(['message' => 'Director added'], 201);
    }

    public function update(int $id, array $data): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid director ID'], 400);
            return;
        }

        $this->db->update('director', ['name' => $data['name']], $id, 'directorId');
        $this->response(['message' => 'Director updated']);
    }

    public function delete(int $id): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid director ID'], 400);
            return;
        }

        $this->db->delete('director', $id, 'directorId');
        $this->response(['message' => 'Director deleted']);
    }
}
