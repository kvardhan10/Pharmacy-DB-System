<?php

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');

$rows=$con->query("SELECT max(DoctorID) from doctor");
if ($rows->num_rows > 0) {
  while ($row = $rows->fetch_assoc()) {
  $id = max($row) + 1;
}}

$DoctorName = $_POST['DoctorName'];
$HospitalID = $_POST['HospitalID'];
$DoctorDOB = $_POST['DoctorDOB'];
$DoctorGender = $_POST['DoctorGender'];
$s = " insert into doctor values ('$id', '$DoctorName', '$HospitalID', '$DoctorDOB', '$DoctorGender') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
