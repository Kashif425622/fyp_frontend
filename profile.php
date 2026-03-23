<?php
include("../config/db.php");

$roll = $_GET['roll'];
$q = $conn->query("SELECT * FROM students WHERE roll_no='$roll'");
echo json_encode($q->fetch_assoc());
?>
