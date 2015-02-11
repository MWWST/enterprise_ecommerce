
		<div class="col-sm-2">
		<input type="search" class="form-control" placeholder="search">
		</div>
		<div class="col-sm-4 col-sm-offset-6">
					<form>
					<select class="form-control">
							<option value="1"><a href="">Show All</a></option>
			 				<option value="2">Shipped</option>
			 				<option value="3">Order in Progress</option>
			 				<option value="4">Cancelled</option>
		 			</select>
		 			<input type="hidden" name="filter" value="status-filter">
	 			</form>
		<!-- 	<div class="dropdown">
			  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Filter by status
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Show All</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Order in Progress</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shipped</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cancelled</a></li>
			  </ul>
			</div> -->
		</div>
		 <div class="col-sm-12 col-md-12 col-md-offset-0">
		 	<?php var_dump($all_orders); ?>
		 	<table class="table table-striped">
		 		<thead>
		 			<th>Order ID</th>
		 			<th>Name</th>
		 			<th>Date</th>
		 			<th>Address</th>
		 			<th>Total</th>
		 			<th>Status</th>
		 		</thead>
		 		<?php foreach ($all_orders as $key => $order) {		 		
		 		echo "<tr><td><a href='".$order['order_id']."'>100</a></td>
		 			<td>".$order['shipping_first_name']."</td>
		 			<td>".$order['created_at']."</td>
		 			<td>".$order['shipping_street1']." ".$order['shipping_street2']." "
		 			.$order['shipping_city']." ".$order['shipping_state']." "
		 			.$order['shipping_zip']."</td>
		 			<td>".$order['grand_total']."</td>
		 			<td>
		 				<select>
			 				<option value=''>Shipped</option>
			 				<option value=''>Order in Progress</option>
			 				<option value=''>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr>";
	 			}?>
			</table>
		 </div>
		
		 <div class="row">
			<div class="col-sm-12 col-sm-offset-4">
			 	<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
			</div>
		 </div>
</body>
</html>