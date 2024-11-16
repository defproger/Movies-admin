<?php

use App\Controllers\UserController;
use App\Services\MySQLDatabase;

$db = MySQLDatabase::getInstance();
$userController = new UserController($db);

$router->setPath('/api');

$router->post('/register', function ($matches, $get, $post) use ($userController) {
    $userController->register($post);
});

$router->post('/login', function ($matches, $get, $post) use ($userController) {
    $userController->login($post);
});
