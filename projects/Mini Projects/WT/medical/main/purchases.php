<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savepur.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Purchase</h4></center>
<hr>
<div style="text-align:left;">
<div id="ac">
<span>Date: <br></span><input type="date" style="width:265px; height:30px;" name="date" placeholder="MM/DD/YYYY" /><br>
<span>Invoice Number: </span><input type="text" style="width:265px; height:30px;" name="iv" /><br>
<span>Supplier : </span>
<select name="supplier" style="width:265px; height:30px;">
	<?php
	include('../connect.php');
	$sql ="SELECT * FROM supliers";
		$result=$db->query($sql);
		for($i=0; $row = $result->fetch_assoc(); $i++){
	?>
		<option><?php echo $row['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Remarks:<br> </span><input type="text" style="width:265px; height:30px;" name="remarks" /><br>
<span>&nbsp;</span><input id="btn" type="submit" value="save" />
</div>
</div>
</form>