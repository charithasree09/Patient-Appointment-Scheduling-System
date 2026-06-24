<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$id = $_GET['id'];

$result = $conn->query(
"SELECT * FROM appointments WHERE appointment_id=$id"
);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Appointment Success</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
text-align:center;
padding:50px;
}

.card{
background:white;
padding:30px;
width:500px;
margin:auto;
border-radius:10px;
box-shadow:0 0 10px gray;
}

h1{
color:green;
}

</style>

</head>
<body>

<div class="card">

<h1>Appointment Booked Successfully</h1>

<h3>Patient Name:
<?php echo $row['patient_name']; ?>
</h3>

<h3>Department:
<?php echo $row['department']; ?>
</h3>

<h3>Queue Number:
<?php echo $row['queue_number']; ?>
</h3>

<br>

<br><br>

<a href="queue.php">
    View Queue
</a>

<br><br>

<a href="delete.php?id=<?php echo $row['appointment_id']; ?>">
    <button style="
        padding:10px 20px;
        background:red;
        color:white;
        border:none;
        border-radius:5px;
        cursor:pointer;">
        Cancel Appointment
    </button>
</a>

</div>

</body>
</html>