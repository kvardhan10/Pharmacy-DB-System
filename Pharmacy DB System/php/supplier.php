<?php

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');

$rows=$con->query("SELECT max(SupplierID) from suppliers");
if ($rows->num_rows > 0) {
  while ($row = $rows->fetch_assoc()) {
  $id = max($row) + 1;
}}

$SupplierName = $_POST['SupplierName'];
$SupplierSP = $_POST['SupplierSP'];

$s = " insert into suppliers values ('$id', '$SupplierName', '$SupplierSP') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>
