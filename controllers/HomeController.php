<?php

declare(strict_types=1);

namespace School\Controllers;

use School\App\Response;

class HomeController
{
    public function index(): string
    {
        return Response::render('test.php');
    }
}