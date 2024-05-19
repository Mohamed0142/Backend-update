<?php

declare(strict_types=1);

namespace School\App;

use Dotenv\Dotenv;

class Router
{
    private array $routes = [];

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
        session_start();
    }

    public function add(array|string $methods, string $route, array $callback): void
    {
        $this->addRoute($methods, $route, $callback);
    }

    private function addRoute(array|string $methods, string $route, array $callback): void
    {
        if (is_array($methods)) {
            foreach ($methods as $method) {
                $this->routes[$method][$route] = $callback;
            }
        } else {
            $this->routes[$methods][$route] = $callback;
        }
    }

    private function run(): string
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($this->routes[$method] as $route => $controllerAndMethod) {
            if (!preg_match("#^[{$route}]+$#", $uri))
                continue;

            [$controller, $method] = $controllerAndMethod;

            if (!class_exists($controller))
                throw new Exception('Class not found');

            if (!method_exists($controller, $method))
                throw new \Exception('Method not found');

            return (new $controller)->$method();
        }
        return 'Route not found';
    }

    public function resolve(): void
    {
        echo $this->run();
    }
}