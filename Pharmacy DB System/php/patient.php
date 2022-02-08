<?php

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');

$rows=$con->query("SELECT max(PatientID) from patient");
if ($rows->num_rows > 0) {
  while ($row = $rows->fetch_assoc()) {
  $id = max($row) + 1;
}}

$PatientName = $_POST['PatientName'];
$HospitalID = $_POST['HospitalID'];
$DoctorID = $_POST['DoctorID'];
$PatientDOB = $_POST['PatientDOB'];
$PatientGender = $_POST['PatientGender'];
$s = " insert into patient values ('$PatientName','$id', '$HospitalID', '$DoctorID', '$PatientDOB', '$PatientGender') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
