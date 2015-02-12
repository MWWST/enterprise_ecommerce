<?php 
// var_dump($products);
// echo phpversion();
require_once(APPPATH.'/config/stripeconfig.php');

// var_dump($this->session->userdata('order'));
// var_dump(key($this->session->userdata('order')));
foreach ($this->session->userdata('order') as $key => $value) {
				var_dump($key);
				var_dump($value);
			}
 ?>
<html>
<head>
	<title>Shopping Cart</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<!-- stripe JS -->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

	<script type="text/javascript">
  	// This identifies your website in the createToken call below
  	Stripe.setPublishableKey('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
	</script>



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

	<script type="text/javascript">
	$(document).ready(function() {
		$('.shipping-same').click(function() {
			if($('.shipping-same').prop('checked')) {

				$('input[name=bill-first]').val($('input[name=ship-first]').val());
				$('input[name=bill-last]').val($('input[name=ship-last').val());
				$('input[name=bill-address1]').val($('input[name=ship-address1]').val());
				$('input[name=bill-address2]').val($('input[name=ship-address2]').val());
				$('input[name=bill-city]').val($('input[name=ship-city]').val());
				$('input[name=bill-state]').val($('input[name=ship-state]').val());
				$('input[name=bill-zip]').val($('input[name=ship-zip]').val());
			}
		})
	})






	</script>

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
		 			<th>Item Total</th>
		 		</thead>
<?php 
foreach ($products as $index) {
?>
		 		<tr>
		 			<td> <?= $index['name'];  ?></td>
		 			<td> $<?= number_format((float)$index['price'],2,'.','');  ?></td>
		 			<td> <?=  $this->session->userdata['order'][$index['id']];  ?> 
		 				<form class='trash' action='/cart/trash' method='post'>
			 				<button type="submit" class="btn btn-default" >
	  							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</button>
							<input type='hidden' name='quant' value='<?= $this->session->userdata['order'][$index['id']]?>' />
							<input type='hidden' name='id' value='<?= $index['id'] ?>' />
						</form>
					</td>
		 			<td> $<?= number_format((float)$index['price'] * $this->session->userdata['order'][$index['id']],2,'.','');  ?></td>
	 			</tr>
<?php 
}

 ?>
			</table>
		</div>
		<div class='col-sm-8'>

<?php 
if($this->session->userdata('errors'))
{
	echo $this->session->userdata('errors');
	$this->session->unset_userdata('errors');
}



 ?>
	<div class='row'>
		<form action='/cart/pay' method='post'>
			<div class='col-sm-6'>
				<h2>Shipping Information</h2>
					<div class='form-horizontal'>
						  <div class="form-group">
						    <label for="ship-first" class="col-sm-4 control-label">First Name:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-first'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-last" class="col-sm-4 control-label">Last Name:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-last'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-address1" class="col-sm-4 control-label">Address:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-address1'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-address2" class="col-sm-4 control-label">Address2:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-address2'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-city" class="col-sm-4 control-label">City:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-city'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-state" class="col-sm-4 control-label">State:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-state'>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="ship-zip" class="col-sm-4 control-label">Zipcode:</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name='ship-zip'>
						    </div>
						  </div>
						  <div class="checkbox">
							<label>
	  							<input class="shipping-same" type="checkbox" name='shipping-same'> Same as Shipping
							</label>
						</div>
					</div>
			</div>
			<div class='col-sm-6'>
				<h2>Billing Information</h2>
				<div class='form-horizontal'>
					  <div class="form-group">
					    <label for="bill-first" class="col-sm-4 control-label">First Name:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-first'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-last" class="col-sm-4 control-label">Last Name:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-last'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-address1" class="col-sm-4 control-label">Address:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-address1'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-address2" class="col-sm-4 control-label">Address2:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-address2'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-city" class="col-sm-4 control-label">City:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-city'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-state" class="col-sm-4 control-label">State:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-state'>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="bill-zip" class="col-sm-4 control-label">Zipcode:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name='bill-zip'>
					    </div>
					  </div>

				</div>
				<div class='text-right'>
					<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          				data-key="<?php echo $stripe['publishable_key']; ?>"
          				data-amount="5000" data-description="Checkout"></script>
          		</div>
			</div> 
			

		</form>
	</div>
	</body>
</html>							


<!-- 								  <div class="form-group">
								    <label for="card-num" class="col-sm-4 control-label">Card:</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" name='card-num' placeholder='no dashes'>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="sec-code" class="col-sm-4 control-label">Security Code:</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" name='sec-code'>
								    </div>
								  </div>
							<div class="row">
							  <div class="col-sm-2">
							  	<label for="expire" class="col-sm-2 control-label">Expiration:</label>
							  </div>
							  <div class="col-sm-3">
							    <input type="text" class="form-control" name='card-month' placeholder="month (ex. 05)">
							  </div>
							  <div class="col-sm-3">
							    <input type="text" class="form-control" name='card-year' placeholder="year (ex. 17)">
							  </div>
							</div>
							<div class="row">
								<div class="col-sm-8 text-right">
									<input class="btn btn-primary" type="submit" value="Pay">
								</div>
							</div> -->
<!-- 					</div>
				</form>





				</div>	
			</div> 




		</div>
	</div>
</div>  -->


