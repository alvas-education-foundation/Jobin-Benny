<?php
	include('../connect.php');
	$id=$_GET['id'];
	$c=$_GET['invoice'];
	$sdsd=$_GET['dle'];
	$qty=$_GET['qty'];
	$wapak=$_GET['code'];
	//edit qty
	$sql = "UPDATE products 
			SET qty=qty+?
			WHERE product_id=?";
	$q = $db->prepare($sql);
	$q->execute(array($qty,$wapak));

	$sql ="DELETE FROM sales_order WHERE transaction_id= $id";
	$result=$db->query($sql);
	header("location: sales.php?id=$sdsd&invoice=$c");
?>