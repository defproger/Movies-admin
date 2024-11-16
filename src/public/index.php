<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Routes\Router;
use App\Services\View;
use App\Helpers\Env;

try {
    Env::load(__DIR__ . '/../.env');
} catch (Exception $e) {
    echo "Failed to load environment variables. Please copy the \".env.example\" file to \".env\".\n";
    echo $e->getMessage();
    exit();
}

$view = new View();
$router = new Router($view);

require_once __DIR__ . '/../App/routes/web.php';
require_once __DIR__ . '/../App/routes/api.php';

$router->resolve();
