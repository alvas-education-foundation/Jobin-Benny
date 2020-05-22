<?php
	include('../connect.php');
	$id=$_GET['id'];
	$c=$_GET['invoice'];
	$qty=$_GET['qty'];
	$wapak=$_GET['code'];
	//edit qty
	$sql = "UPDATE products 
			SET qty=qty-?
			WHERE product_code=?";
	$q=$db->query($sql);

	$sql ="DELETE FROM purchases_item WHERE id= $id";
	$result=$db->query($sql);
	header("location: purchasesportal.php?iv=$c");
?>