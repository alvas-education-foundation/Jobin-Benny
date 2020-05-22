<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];
// query
$sql = "UPDATE supliers SET suplier_name='".$a."', suplier_address='".$b."', suplier_contact='".$c."', contact_person='".$d."', note='".$e."'
		WHERE suplier_id='".$id."'";
$q = $db->query($sql);
header("location: supplier.php");

?>