<?php

declare(strict_types=1);

use School\App\Router;
use School\Controllers\AppointmentController;
use School\Controllers\HomeController;

require_once '../vendor/autoload.php';

$router = new Router;


$router->add(['get'], '/', [AppointmentController::class, 'index']);
$router->add(['post'], '/appointment', [AppointmentController::class, 'create']);


$router->resolve();