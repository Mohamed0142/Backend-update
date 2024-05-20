<?php

declare(strict_types=1);

namespace School\Controllers;

use School\App\Response;
use School\Models\AppointmentModel;


class AppointmentController
{
    public function index(): string
    {
        return Response::render('appointment.php');
    }

    public function create(): string
    {
        // Check if all required fields are set
        if (!isset($_POST['color_1'], $_POST['color_2'], $_POST['color_3'], $_POST['color_4'], $_POST['phone_number'], $_POST['email'], $_POST['appointment_date'])) {
            return "Required fields are missing";
        }
    
        // Validate email format
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/@gmail\.com$/", $email)) {
            return "Invalid email address. Please enter a valid Gmail address.";
        }
    
        $data = [
            'color_1' => $_POST['color_1'],
            'color_2' => $_POST['color_2'],
            'color_3' => $_POST['color_3'],
            'color_4' => $_POST['color_4'],
            'phone_number' => $_POST['phone_number'],
            'email' => $_POST['email'],
            'appointment_date' => $_POST['appointment_date'],
            'nail_biting' => isset($_POST['nail_biting']) ? 1 : 0,
            'massage' => isset($_POST['massage']) ? 1 : 0,
            'nail_repair' => isset($_POST['nail_repair']) ? 1 : 0,
        ];
    
        $date = date_create_from_format('Y-m-d', $data['appointment_date']);
        if (!$date) {
            return "Invalid appointment date format";
        }
    
        $appointmentModel = new AppointmentModel;
    
        return $appointmentModel->insert($data) ? header('Location: /show') : Response::render('appointment.php');
    }
    
    
    

    public function show(): string
    {
        $appointmentModel = new AppointmentModel;

        $results = $appointmentModel->getAll();

        return Response::render('appointment.show.php', [
            'results' => $results ?? []
        ]);
    }
}