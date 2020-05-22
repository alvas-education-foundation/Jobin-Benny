<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['code'];
$z = $_POST['gen'];
$b = $_POST['name'];
$c = $_POST['exdate'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $_POST['profit'];
$i = $_POST['date_arrival'];
$j = $_POST['sold'];
// query
$sql = "UPDATE products 
        SET product_code='".$a."', gen_name='".$z."', product_name='".$b."', expiry_date='".$c."', price='".$d."', supplier='".$e."', qty='".$f."', o_price='".$g."', profit='".$h."', date_arrival='".$i."', qty_sold='".$j."'
		WHERE product_id='".$id."'";
$q = $db->query($sql);
header("location: products.php");

?>