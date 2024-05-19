<?php

declare(strict_types=1);

namespace School\Controllers;

use School\App\Response;
use function School\Database\getDB;

class AppointmentController
{

    function __get($id): array
    {
        $conn = getDB();
        $stmt = $conn->prepare('SELECT * FROM afspraak WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    
    public function index(): string
    {
        return Response::render('appointment.php');
    }

    public function create(): string
    {

        $color_1 = $_POST['color_1'];
        $color_2 = $_POST['color_2'];
        $color_3 = $_POST['color_3'];
        $color_4 = $_POST['color_4'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $appointment_date = $_POST['appointment_date'];
        $nail_biting = $_POST['nail_biting'];
        $massage = $_POST['massage']; 
        $nail_repair = $_POST['nail_repair'];

        return '';
    }

}
