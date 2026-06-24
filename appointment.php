<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$patient_name = $_POST['patient_name'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$appointment_date = $_POST['appointment_date'];
$symptoms = $_POST['symptoms'];

$result = $conn->query("SELECT MAX(queue_number) as last_queue FROM appointments");

$row = $result->fetch_assoc();

$queue_number = $row['last_queue'] + 1;

if($queue_number == NULL){
    $queue_number = 1;
}

$sql = "INSERT INTO appointments
(patient_name, phone, department, appointment_date, symptoms, queue_number)
VALUES
('$patient_name','$phone','$department','$appointment_date','$symptoms','$queue_number')";

if($conn->query($sql) === TRUE){

    header("Location: success.php?id=".$conn->insert_id);
    exit();

}else{

    echo "Error: ".$conn->error;
}

?>