<?php
namespace School\Models;

use School\App\BaseModel;

$nail_id = $_POST['nail_id'];
$new_title = $_POST['new_title'];

$sql = "UPDATE afspraak SET title='$new_title' WHERE id=$nail_id";

if ($conn->query($sql) === TRUE) {
    echo "afspraak updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

