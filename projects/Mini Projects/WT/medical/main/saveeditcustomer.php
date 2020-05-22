<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['memno'];
$e = $_POST['prod_name'];
$f = $_POST['note'];
$g = $_POST['date'];
// query
$sql = "UPDATE customer 
        SET customer_name='".$a."', address='".$b."', contact='".$c."', membership_number='".$d."', prod_name='".$e."', note='".$f."', expected_date='".$g."'
		WHERE customer_id='".$id."'";
$q = $db->query($sql);
header("location: customer.php");

?>