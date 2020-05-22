<?php
	include('../connect.php');
	$id=$_GET['id'];
	$sql ="DELETE FROM sales WHERE transaction_id= $id";
	$result=$db->query($sql);
?>