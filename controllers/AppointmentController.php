<?php

declare(strict_types=1);

namespace School\Controllers;

use School\App\Response;
use function School\Database\getDB;

class AppointmentController
{
    
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
        $nail_biting = $_POST['nail_biting'] == 'on' ? 'yes' : 'no';
        $massage = $_POST['massage'] == 'on' ? 'yes' : 'no'; 
        $nail_repair = $_POST['nail_repair'] == 'on' ? 'yes' : 'no';

        return '';
    }

}


