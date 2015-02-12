<?php
?>
	<div class="row">

		<div class="col-sm-3">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><?="Order Number: ".$order[0]['order_id'];?></h3>
			  </div>
			  <div class="panel-body">
			   <h5> Customer shipping info:</h5>
			   <?="
			   <p>Name: ".$order[0]['shipping_first_name']." ".$order[0]['shipping_last_name']."</p>
			   <p>Address: ".$order[0]['shipping_street1']." ".$order[0]['shipping_street2']."</p>
			   <p>City: ".$order[0]['shipping_city']."</p>
			   <p>State: ".$order[0]['shipping_state']."</p>
			   <p>Zip: ".$order[0]['shipping_zip']."</p>
			   <h5> Customer billing info:</h5>
			   <p>Name: ".$order[0]['billing_first_name']." ".$order[0]['billing_lastname']."</p>
			   <p>Address: ".$order[0]['billing_street1']." ".$order[0]['billing_street2']."</p>
			   <p>City: ".$order[0]['billing_city']."</p>
			   <p>State: ".$order[0]['billing_state']."</p>
			   <p>Zip: ".$order[0]['billing_zip']."</p>
			  </div>
			</div>
		</div>"?>
		<div class='col-sm-9'>
			<table class='table table-striped'>
		 		<thead>
		 			<th>ID</th>
		 			<th>Item</th>
		 			<th>Price</th>
		 			<th>Quantity</th>
		 			<th>Total</th>
		 		</thead>
		 		<?php foreach ($order as $key => $orderinfo) {
		 			
		 		echo "
		 		<tr>
		 			<td>".$orderinfo['product_ordered_id']."</td>
		 			<td>".$orderinfo['order_product_name']."</td>
		 			<td>".$orderinfo['order_product_price']."</td>
		 			<td>".$orderinfo['quantity']."</td>
		 			<td>".$orderinfo['order_product_price'] * $orderinfo['quantity'] ."</td>
	 			</tr> ";}?>

			</table>
			<div class='row'>
				<div class='col-sm-4 status'>
					Status:<?=$order[0]['status_name'];?>
				</div>
				<div class='col-sm-6 col-sm-offset-2 totals'>
			
					<p>Sub total: $<?=$order[0]['total'];?></p>
					<p>Shipping: $<?=$order[0]['shipping_cost'];?></p>
					<p>Total Price: $<?=$order[0]['grand_total'];?></p>
				</div>
			</div>
	</div>
