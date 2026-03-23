<?php
include("../config/db.php");

$roll = $_POST['roll'];
$pass = $_POST['password'];

$q = $conn->query("SELECT * FROM students WHERE roll_no='$roll' AND password='$pass'");

if($q->num_rows > 0){
  echo json_encode(["status"=>"success"]);
}else{
  echo json_encode(["status"=>"error"]);
}
?>
