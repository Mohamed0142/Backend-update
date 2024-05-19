<?php

declare(strict_types=1);

namespace School\Models;
use School\App\BaseModel;
class AppointmentModel extends BaseModel
{

    public function insert
    (
        string $color_1,
        string $color_2,
        string $color_3,
        string $color_4,
        string $phone_number,
        string $email,
        string $appointment_date,
        string $nail_biting,
        string $massage,
        string $nail_repair,
    ): void

    {
        $sql = 'INSERT INTO afspraak (color_1, color_2, color_3, color_4, phone_number, email, appointment_date, nail_biting, massage, nail_repair) VALUES (:color_1, :color_2, :color_3, :color_4, :phone_number, :email, :appointment_date, :nail_biting, :massage, :nail_repair)';
        $conn = $this->getDB();
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'color_1' => $color_1,
            'color_2' => $color_2,
            'color_3' => $color_3,
            'color_4' => $color_4,
            'phone_number' => $phone_number,
            'email' => $email,
            'appointment_date' => $appointment_date,
            'nail_biting' => $nail_biting,
            'massage' => $massage,
            'nail_repair' => $nail_repair,
        ]);
    } 
}