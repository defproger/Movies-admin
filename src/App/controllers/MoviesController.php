<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\DatabaseInterface;

class MoviesController extends BaseController
{
    private DatabaseInterface $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function getList(): void
    {
        $movies = $this->db->queryAll(
            "SELECT movie.movieId, movie.name, movie.description, movie.releaseDate, director.name as director 
             FROM movie 
             LEFT JOIN director ON movie.directorId = director.directorId"
        );
        $this->response($movies);
    }

    public function getById(int $id): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid movie ID'], 400);
            return;
        }

        $movie = $this->db->query(
            "SELECT * FROM movie WHERE movieId = :id",
            ['id' => $id]
        );

        if (!$movie) {
            $this->response(['error' => 'Movie not found'], 404);
            return;
        }

        $this->response($movie);
    }

    public function add(array $data): void
    {
        if (empty($data['name']) || empty($data['directorId']) || empty($data['releaseDate'])) {
            $this->response(['error' => 'Missing required fields'], 400);
            return;
        }

        $this->db->insert('movie', [
            'name' => $data['name'],
            'description' => $data['description'] ?? '',
            'directorId' => (int)$data['directorId'],
            'releaseDate' => $data['releaseDate']
        ]);

        $this->response(['message' => 'Movie added'], 201);
    }

    public function update(int $id, array $data): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid movie ID'], 400);
            return;
        }

        $this->db->update('movie', [
            'name' => $data['name'] ?? '',
            'description' => $data['description'] ?? '',
            'directorId' => $data['directorId'] ?? null,
            'releaseDate' => $data['releaseDate'] ?? null
        ], $id, 'movieId');

        $this->response(['message' => 'Movie updated']);
    }

    public function delete(int $id): void
    {
        if ($id <= 0) {
            $this->response(['error' => 'Invalid movie ID'], 400);
            return;
        }

        $this->db->delete('movie', $id, 'movieId');
        $this->response(['message' => 'Movie deleted']);
    }
}
