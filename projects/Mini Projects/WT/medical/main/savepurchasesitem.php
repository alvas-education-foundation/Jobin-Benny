<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$result = $db->query("SELECT * FROM products WHERE product_code= $b");
for($i=0; $row = $result->fetch_assoc(); $i++){
$asasa=$row['price'];
}

//edit qty
$sql = "UPDATE products 
        SET qty=qty+?
		WHERE product_code=?";
$q = $db->query($sql);

$d=$asasa*$c;
// query
$sql = "INSERT INTO purchases_item (name,qty,cost,invoice) VALUES ('".$b."',".$c.",'".$d."','".$a."')";
$q = $db->query($sql);
header("location:  purchasesportal.php?iv=$a");


?>