<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    header("Location: appointment.html");
}
else{
    echo "Invalid Login";
}

?>