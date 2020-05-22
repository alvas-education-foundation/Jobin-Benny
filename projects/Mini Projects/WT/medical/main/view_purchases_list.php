<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="25%"> Name </th>
			<th width="3%"> Qty </th>
			<th width="8%"> Cost </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$id=$_GET['iv'];
				$result = $db->query("SELECT * FROM purchases_item WHERE invoice= $id");
				for($i=0; $row = $result->fetch_assoc(); $i++){
			?>
			<tr class="record">
			<td><?php
			$rrrrrrr=$row['name'];
			$resultss = $db->query("SELECT * FROM products WHERE product_code= $rrrrrrr");
			for($i=0; $rowss = $resultss->fetch_assoc(); $i++){
			echo $rowss['product_name'];
			}
			?></td>
			<td><?php echo $row['qty']; ?></td>
			<td>
			<?php
			$dfdf=$row['cost'];
			echo formatMoney($dfdf, true);
			?>
			</td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="2"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
				<td><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$sdsd=$_GET['iv'];
				$resultas = $db->query("SELECT sum(cost) FROM purchases_item WHERE invoice= $sdsd");
				for($i=0; $rowas = $resultas->fetch_assoc(); $i++){
				$fgfg=$rowas['sum(cost)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
			</tr>
		
	</tbody>
</table>