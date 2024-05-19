<?php

declare(strict_types=1);

use School\App\Router;
use School\Controllers\HomeController;

require_once '../vendor/autoload.php';

$router = new Router;

$router->add(['get'], '/', [HomeController::class, 'index']);

$router->resolve();