<?php

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');


$MedicineName = $_POST['MedicineName'];
$MedicineMFG = $_POST['MedicineMFG'];
$MedicineEXP = $_POST['MedicineEXP'];
$MedicinePrice = $_POST['MedicinePrice'];
$PatientID = $_POST['PatientID'];
$SupplierID = $_POST['SupplierID'];
$s = " insert into medicine values ('$PatientID', '$MedicineName', '$MedicineEXP', '$MedicineEXP', '$MedicinePrice', '$SupplierID') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
