<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users
(fullname,email,password)
VALUES
('$fullname','$email','$password')";

$conn->query($sql);

header("Location: login.html");

?>