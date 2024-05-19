<?php

declare(strict_types=1);

namespace School\Models;
class TestModel
{
public function insert(array $data): bool
{
    // Extract the data from the array
    $columnNames = implode(', ', array_keys($data));
    $columnValues = implode(', ', array_fill(0, count($data), '?'));


    $sql = "INSERT INTO afspraak ($columnNames) VALUES ($columnValues)";
    $statement = $this->pdo->prepare($sql);

    $i = 1;
    foreach ($data as $value) {
        $statement->bindValue($i++, $value);
    }

    // Execute the statement
    return $statement->execute();
}
}