<?php

$conn = new mysqli(
    "db",
    "root",
    "root",
    "patient_appointment"
);

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $result = $conn->query(
    "SELECT * FROM appointments
    WHERE patient_name LIKE '%$search%'"
    );

}else{

    $result = $conn->query(
    "SELECT * FROM appointments"
    );
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
    font-family:Arial;
    padding:30px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #ddd;
    padding:10px;
    text-align:center;
}

th{
    background:#0b6b61;
    color:white;
}

input{
    padding:10px;
}

button{
    padding:10px 15px;
    background:#0b6b61;
    color:white;
    border:none;
}

a{
    color:red;
    text-decoration:none;
    font-weight:bold;
}

</style>

</head>
<body>

<h1>Admin Dashboard</h1>

<form method="GET">

    <input
    type="text"
    name="search"
    placeholder="Search Patient">

    <button type="submit">
        Search
    </button>

</form>

<br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Queue</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['appointment_id']."</td>";

echo "<td>".$row['patient_name']."</td>";

echo "<td>".$row['department']."</td>";

echo "<td>".$row['queue_number']."</td>";

echo "<td>".$row['status']."</td>";

echo "<td>
<a href='delete.php?id=".$row['appointment_id']."'>
Cancel
</a>
</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>