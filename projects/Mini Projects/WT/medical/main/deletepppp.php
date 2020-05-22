<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result ="DELETE FROM purchases WHERE transaction_id= $id";
	$result=$db->query($sql);
?>