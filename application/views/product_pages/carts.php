
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
		 		<tr>
		 			<td>Cup</td>
		 			<td>9.99</td>
		 			<td>5</td>
		 			<td>$50.00</td>
	 			</tr>
	 			<tr>
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
		 		</tr>




			</table>
		</div>

	</div>
	</div> <!-- end of container -->

</body>
</html>
