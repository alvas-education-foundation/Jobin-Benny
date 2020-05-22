<?php
	include('../connect.php');
	$id=$_GET['id'];
	$sql = "DELETE FROM products WHERE product_id= $id";
	$result=$db->query($sql);
?>