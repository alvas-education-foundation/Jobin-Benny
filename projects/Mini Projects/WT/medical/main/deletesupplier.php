<?php
	include('../connect.php');
	$id=$_GET['id'];
	$sql ="DELETE FROM supliers WHERE suplier_id= $id";
	$result=$db->query($sql);
?>