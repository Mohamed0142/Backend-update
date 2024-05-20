<?php

declare(strict_types=1);

namespace School\Models;
use School\App\BaseModel;
class AppointmentModel extends BaseModel
{
        public function insert($data)
    {
        $colors = [
            $data['color_1'],
            $data['color_2'],
            $data['color_3'],
            $data['color_4'],
        ];

        // Ensure 'nail_biting' is set and has a valid value
        $nail_biting = isset($data['nail_biting']) ? (int) $data['nail_biting'] : 0;

        $sql = "INSERT INTO afspraak (colors, phone_number, email, date, nail_biting, massage, nail_repair)";
        $sql .= "VALUES (:colors, :phone_number, :email, :date, :nail_biting, :massage, :nail_repair)";

        $conn = $this->getDB();

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':colors', implode(', ', $colors));
        $stmt->bindParam(':phone_number', $data['phone_number']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':date', $data['appointment_date']);
        $stmt->bindValue(':nail_biting', $nail_biting);
        $stmt->bindValue(':massage', isset($data['massage']) ? (int) $data['massage'] : 0);
        $stmt->bindValue(':nail_repair', isset($data['nail_repair']) ? (int) $data['nail_repair'] : 0);
        
        return $stmt->execute();
    }


    public function getAll()
    {
        $sql = "SELECT * FROM afspraak";

        $conn = $this->getDB();

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}