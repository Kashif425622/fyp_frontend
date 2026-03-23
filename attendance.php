<?php
include("../config/db.php");

$id = 1;
$q = $conn->query("SELECT * FROM attendance WHERE student_id=$id");
$data=[];
while($r=$q->fetch_assoc()){ $data[]=$r; }
echo json_encode($data);
?>
