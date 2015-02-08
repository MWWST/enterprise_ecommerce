


<html>
<head>
	<title>Product Description</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	<style type="text/css">
/*
	.borders {
		border: red solid 1px;
	}
*/
	.main-img {
		text-align: center;
	}

	.box-img {
		width: 90%;
		height: 300px;
		width: 300px;
		background-color: gray;

	}

	.sm-square {
		width: 55px;
		height: 55px;
		background-color: gray;
		margin: 5px;
		display: inline-block;
	}

	.similar-items {
		text-align: center;
	}

	.sim-items {
		display: inline-block;
	}

	.bott-img {
		width: 130px;
		height: 130px;
		background-color: gray;
		margin: 8px;
		display: inline-block;
	}



	</style>
<body>

	<div class='container'>
	<?php $this->load->view('product_pages/partials/products_header'); ?>
		<div class='row'>
			<div class='col-sm-12 borders'>
				<div class='top-text'>
					<a href=''>Go Back</a>
					<h2>Black Belt for Staff</h2>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-4 borders'>
				<div class = 'main-img'>
					<div class = 'box-img'>
					</div>
				</div>
				<div class='small-imgs'>
					<div class = 'sm-square'>
					</div>
					<div class = 'sm-square'>
					</div>
					<div class = 'sm-square'>
					</div>
					<div class = 'sm-square'>
					</div>
					<div class = 'sm-square'>
					</div>
				</div>
			</div>
			<div class='col-sm-8 borders'>
				<div class='description'>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem 
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-12 borders'> 
				<div class='price text-right'>
					<form action='' method='post'>

						<select>
							<option value='1'>1 ($19.99)</option>
							<option value='2'>2 ($39.99)</option>
							<option value='3'>3 ($59.99)</option>
						</select>
						<input type='submit' value='Buy'>
					</form>
				</div>
			</div>
			<div class='col-sm-12 borders'>
				<h3>Similar Items</h3>
				<div class='similar-items'>
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>					
					<div class='sim-items'>
						<div class='bott-img'>
						</div>
						<p>Black Belt</p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end of container -->

</body>
</html>