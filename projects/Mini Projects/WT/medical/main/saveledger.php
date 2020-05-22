<?php
session_start();
include('../connect.php');
$a = date("m/d/Y");
$b = $_POST['name'];
$c = $_POST['invoice'];
$d = $_POST['tot'];
$e = $_POST['amount'];
$f = $_POST['remarks'];


$results = $db->query("SELECT sum(amount) FROM collection WHERE name= $b");
for($i=0; $rows = $results->fetch_assoc(); $i++){
$sdsdd=$rows['sum(amount)'];
if($sdsdd==''){
$dsdsd=0;
}
if($sdsdd!=''){
$dsdsd=$rows['sum(amount)'];
}
}				
$b1=$d-$dsdsd;
$balance=$b1-$e;

$sql = "INSERT INTO collection (date,name,invoice,amount,remarks,balance) VALUES ($a,$b,$c,$e,$f,$balance)";
$q = $db->query($sql);

$sqla = "UPDATE sales 
        SET balance=?, due_date=?
		WHERE invoice_number=?";
$qa = $db->query($sqla);


header("location: customer_ledger.php.?cname=$b");

?>