<?php

use App\Services\MySQLDatabase;
use App\Controllers\UserController;
use App\Controllers\MoviesController;
use App\Controllers\DirectorsController;

$db = MySQLDatabase::getInstance();

$userController = new UserController($db);
$moviesController = new MoviesController($db);
$directorsController = new DirectorsController($db);

$router->setPath('/api');

$router->post('/register', function ($matches, $get, $post) use ($userController) {
    $userController->register($post);
});

$router->post('/login', function ($matches, $get, $post) use ($userController) {
    $userController->login($post);
});

$router->get('/movies', function () use ($moviesController) {
    $moviesController->getList();
});

$router->get('/movies/(\d+)', function ($matches) use ($moviesController) {
    $moviesController->getById((int)$matches[1]);
});

$router->post('/movies', function ($matches, $get, $post) use ($moviesController) {
    $moviesController->add($post);
});

$router->put('/movies/(\d+)', function ($matches, $get, $post) use ($moviesController) {
    $moviesController->update((int)$matches[1], $post);
});

$router->delete('/movies/(\d+)', function ($matches) use ($moviesController) {
    $moviesController->delete((int)$matches[1]);
});

$router->get('/directors', function () use ($directorsController) {
    $directorsController->getList();
});

$router->get('/directors/(\d+)', function ($matches) use ($directorsController) {
    $directorsController->getById((int)$matches[1]);
});

$router->post('/directors', function ($matches, $get, $post) use ($directorsController) {
    $directorsController->add($post);
});

$router->put('/directors/(\d+)', function ($matches, $get, $post) use ($directorsController) {
    $directorsController->update((int)$matches[1], $post);
});

$router->delete('/directors/(\d+)', function ($matches) use ($directorsController) {
    $directorsController->delete((int)$matches[1]);
});
