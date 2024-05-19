<?php

declare(strict_types=1);

namespace School\App;

final class Response
{
    public static function render(string $view, array $args = []): string
    {
        static $twig = null;

        if (is_null($twig)) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . "/views");
            $twig = new \Twig\Environment($loader, [
                'cache' => dirname(__DIR__) . '/cache',
                'debug' => true
            ]);
            $twig->addExtension(new \Twig\Extension\DebugExtension());
        }
        return $twig->render($view, $args);
    }
}