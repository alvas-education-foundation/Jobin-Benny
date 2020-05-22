<?php
	include('../connect.php');
	$id=$_GET['id'];
	$qty=$_GET['qty'];
	
	$sql ="SELECT * FROM products WHERE product_code= $b";
$result=$db->query($sql);
for($i=0; $row = $result->fetch_assoc(); $i++){
$qty=$row['qty'];
}

	$sql = "UPDATE products 
        SET qty=qty+?
		WHERE product_id=?";

	
	$sql ="DELETE FROM sales_order WHERE transaction_id= $id";
	$result=$db->query($sql);
		header("location: sales_inventory.php");
?>