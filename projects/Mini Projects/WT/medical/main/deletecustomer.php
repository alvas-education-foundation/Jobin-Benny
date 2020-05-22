<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result ="DELETE FROM customer WHERE customer_id= $id";
	$result=$db->query($sql);
?>