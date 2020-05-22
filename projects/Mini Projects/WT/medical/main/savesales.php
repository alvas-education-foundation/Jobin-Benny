<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$z."','".$f."','".$cname."')";
$q = $db->query($sql);
header("location: preview.php?invoice=$c&amt=$e");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$z."','".$f."','".$cname."')";
$q = $db->query($sql);
header("location: preview.php?invoice=$c&amt=$e");
exit();
}
// query



?>