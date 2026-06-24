<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$id = $_GET['id'];

$conn->query(
"UPDATE appointments
SET status='Cancelled'
WHERE appointment_id=$id"
);

header("Location: admin.php");

?>