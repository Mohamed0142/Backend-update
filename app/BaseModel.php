<?php

declare(strict_types=1);

namespace School\App;

use PDO;

abstract class BaseModel
{
    protected ?PDO $pdo = null;

    protected function getDB(): PDO
    {
        if (is_null($this->pdo)) {
            $this->pdo = new PDO($_ENV['DSN']);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }
}