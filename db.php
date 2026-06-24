<?php

$conn = mysqli_connect(
    "db",
    "root",
    "root",
    "patient_appointment"
);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>