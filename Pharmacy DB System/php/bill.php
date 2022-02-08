<?php

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');

$rows=$con->query("SELECT max(BillID) from bill");
if ($rows->num_rows > 0) {
  while ($row = $rows->fetch_assoc()) {
  $id = max($row) + 1;
}}

$PatientID = $_POST['PatientID'];
$DoctorID = $_POST['DoctorID'];
$TotalPrice = $_POST['TotalPrice'];
$PurchaseDate = $_POST['PurchaseDate'];

$s = " insert into bill values ('$id', '$PatientID','$DoctorID','$TotalPrice', '$PurchaseDate') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
