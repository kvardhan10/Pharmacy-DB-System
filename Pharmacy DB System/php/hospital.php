<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');

$rows=$con->query("SELECT max(HospitalID) from hospital");
if ($rows->num_rows > 0) {
  while ($row = $rows->fetch_assoc()) {
  $id = max($row) + 1;
}}

$HospitalName = $_POST['HospitalName'];
$HospitalNumber = $_POST['HospitalNumber'];
$HospitalLocation = $_POST['HospitalLocation'];
$HospitalPincode = $_POST['HospitalPincode'];

$s = " insert into hospital values ('$id', '$HospitalName', '$HospitalLocation', '$HospitalNumber', '$HospitalPincode') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
