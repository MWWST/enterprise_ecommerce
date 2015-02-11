<?php 
// var_dump($products);

 ?>
<html>
<head>
	<title>Shopping Cart</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<style type="text/css">
		.table-header {
			background-color: gray;
		}

		.slash {
			display: inline-block;
		}

		.trash {
			display: inline-block;
		}
	</style>

<body>
	<div class='container'>
	<?php $this->load->view('product_pages/partials/products_header'); ?>
	<div class='row'>
		<div class='col-sm-12'>

			<table class="table table-striped table-bordered">
		 		<thead class='table-header'>
		 			<th>Item</th>
		 			<th>Price</th>
		 			<th>Quantity</th>
		 			<th>Total</th>
		 		</thead>
<?php 
foreach ($products as $index) {
?>
		 		<tr>
		 			<td> <?= $index['name'];  ?></td>
		 			<td> $<?= $index['price'];  ?></td>
		 			<td> <?=  $this->session->userdata['order'][$index['id']];  ?> 
		 				<form class='trash' action='/cart/trash' method='post'>
			 				<button type="submit" class="btn btn-default" >
	  							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</button>
							<input type='hidden' name='quant' value='<?= $this->session->userdata['order'][$index['id']]?>' />
							<input type='hidden' name='id' value='<?= $index['id'] ?>' />
						</form>
					</td>
		 			<td> <?= $index['price'] * $this->session->userdata['order'][$index['id']];  ?></td>
	 			</tr>
<?php 
}

 ?>
<!-- 	 			<tr>
		 			<td>TV</td>
		 			<td>449.99</td>
		 			<td>1</td>
		 			<td>$449.99</td>
	 			</tr>
	 			<tr>
	 				<td>Computer</td>
		 			<td>449.99</td>
		 			<td>1</td>
		 			<td>$1200.99</td>
		 		</tr> -->
			</table>
		</div>
		<div class='col-sm-8'>

			<h2>Shipping Information</h2>
				<form action='' method='post'>
					<div class='form-horizontal'>
					
					  <div class="form-group">
					    <label for="ship-first" class="col-sm-2 control-label">First Name:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-first'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-last" class="col-sm-2 control-label">Last Name:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-last'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-address1" class="col-sm-2 control-label">Address:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-address1'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-address2" class="col-sm-2 control-label">Address2:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-address2'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-city" class="col-sm-2 control-label">City:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-city'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-state" class="col-sm-2 control-label">State:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-state'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="ship-zip" class="col-sm-2 control-label">Zipcode:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='ship-zip'>
					    </div>
					  </div>
					<h2>Billing Information</h2>
					<div class="checkbox">
    					<label>
      						<input type="checkbox" name='shipping-same'> Same as Shipping
    					</label>
  					</div>
					  <div class="form-group">
					    <label for="bill-first" class="col-sm-2 control-label">First Name:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-first'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-last" class="col-sm-2 control-label">Last Name:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-last'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-address1" class="col-sm-2 control-label">Address:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-address1'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-address2" class="col-sm-2 control-label">Address2:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-address2'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-city" class="col-sm-2 control-label">City:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-city'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-state" class="col-sm-2 control-label">State:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-state'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-zip" class="col-sm-2 control-label">Zipcode:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='bill-zip'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="card-num" class="col-sm-2 control-label">Card:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='card-num'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="sec-code" class="col-sm-2 control-label">Security Code:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='sec-code'>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="card-num" class="col-sm-2 control-label">Card:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='card-num'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="sec-code" class="col-sm-2 control-label">Security Code:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name='sec-code'>
					    </div>
					  </div>
					</div> <!-- end of form-horizontal -->
					<div class="row">
					  <div class="col-sm-2">
					  	<label for="expire" class="col-sm-2 control-label">Expiration:</label>
					  </div>

					  <div class="col-sm-2">
					    <input type="text" class="form-control" placeholder="(month)">
					  </div>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" placeholder="(year)">
					  </div>
					</div>
				</form>



					 




<!-- 					<div class='form-inline'>
						<div class="form-group">
						    <label for="expire">Expiration:</label>
						    <input type="text" class="form-control" name='exp-month' placeholder='(mm)'>
					   	</div>
					   <div class='form-group'>
						    <label for="expire">/</label>
						    <input type="text" class="form-control" name='exp-year' placeholder='(year)'>
					   </div>
					</div>
 -->




<!-- 			  <form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div> -->












			 </form>




		</div>

	</div>
	</div> <!-- end of container -->

</body>
</html>
