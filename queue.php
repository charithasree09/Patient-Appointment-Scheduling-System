<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

$result = $conn->query(
"SELECT * FROM appointments ORDER BY queue_number"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Queue List</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:30px;
}

table{
width:100%;
background:white;
border-collapse:collapse;
}

th,td{
padding:12px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#0b6b61;
color:white;
}

</style>

</head>

<body>

<h1>Patient Queue</h1>

<table>

<tr>
<th>Queue No</th>
<th>Patient Name</th>
<th>Department</th>
<th>Status</th>
</tr>

<?php

while($row=$result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['queue_number']."</td>";

echo "<td>".$row['patient_name']."</td>";

echo "<td>".$row['department']."</td>";

echo "<td>".$row['status']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>