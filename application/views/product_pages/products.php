
<html>
	<head>
		<title>Products Page</title>
	</head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



		<style type="text/css">
		.sidebar {
			border:	solid gray 2px;
			width: 100%;
			padding-left: 10px;
			margin-bottom: 20px


		}

		.sm-9-padding {
			padding-left: 0px;
		}

		.main-products {
			border: solid gray 2px;
			width: 100%;
			text-align: center;
			
		}

		.row {
			padding: 0px;
		}


		.row h2 {
			display: inline-block;
		}

		.sidebar-search {
			margin: 10px 5px 20px 0px;
			width: 70%;
			display: inline-block;

		}

		.sidebar ul {
			padding-left: 20px;
		}

		.sidebar ul li {
			margin: 5px 0 5px 0;
		}

		li {
			list-style-type: none;
		}

		.div-nav {
			display: inline-block;
			text-align: right;
		}

		.top-nav {
			margin-left: 300px;

		}

		.top-nav li {
			display: inline;
			
			border-left: solid gray 1px;
		}

		.top-nav li a {
			margin: 0px 15px 0px 15px;

		}

		.sorted h4 {
			display: inline-block;
		}

		select {
			margin-right: 20px
		}

		.product-box {
			display: inline-block;
		}

		.image {
			width: 18%;
			min-width: 150px;
			min-height: 150px;
			background-color: gray;
			margin: 5px;
			display: inline-block;
			position: relative;
			max-height: 150px;
		
		}

		.bott-nav {
			margin: 15px; 
			display: inline-block;

		}

		.bott-nav li {
			padding: 0 20px 5px 20px;
			display: inline-block;
			border-left: solid gray 2px;


		}

		.left-align {
			text-align: left;
			padding-left: 0px;
			margin-left: 5px
		}

		.overlay {
	
			text-align: right;
			vertical-align: bottom;
			background-color: lightblue;
			position: absolute;
			bottom: 0;
			width: 100%;



		}
		.overlay h5 {
			margin: 0px;


		}




		</style>
	<body>
		<div class='container'>
		<?php $this->load->view('product_pages/partials/products_header'); ?>
			<div class='row'>	
				<div class='col-sm-3'>
					<div class='sidebar'>
						<form action='' method='post'>
							<div class='form-group'>
								<input type='text' class='form-control sidebar-search' placeholder='product name' />
							<!-- 	<input type='submit' value='search' /> -->
								<button type="button" class="btn btn-default" aria-label="Left Align">
  									<span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
								</button>
							</div>
						</form>
						<h4>Categories</h4>
						<ul>
							<li><a href='/listproducts'>T-shirts (30)</a></li>
							<li><a href='/listproducts'>Shorts (25)</a></li>
							<li><a href='/listproducts'>Belts (7)</a></li>
							<li><a href='/listproducts'>Socks (12)</a></li>
							<li><a href='/listproducts'>Show All</a></li>
						</ul>
					</div>
				</div>
				<div class='col-sm-9 sm-9-padding'>
					<div class='main-products'>
						<div class='row left-align'>
							<h2>Tshirts (page 2)</h2>
							<div class='div-nav'>
								<ul class='top-nav '>
									<li><a href=''>first</a></li>
									<li><a href=''>prev</a></li>
									<li><a href=''>2</a></li>
									<li><a href=''>next</a></li>
								</ul>
							</div>
						</div>
						<div class='row text-right sorted'>
							<form action='/listproducts/sortedBy' method='post'>
								<h4>Sorted By</h4>
								<select name='option'>
									<option value='price'>Price</option>
									<option value='popular'>Most Popular</option>
								</select>
								<input type='submit' value='update'>
							</form>
						</div>
						<div class='row'>
<?php 
foreach ($products as $index) { 
?>
						  <div class="col-sm-3">
						    <a href="/description/index/<?=$index['id']?>" class="thumbnail">

						      <img  class='image' src=<?= $index['img_arr'][0]; ?> alt="image">
						      <div class="caption">
						        <p> <?= $index['price'];  ?></p>
						        <p> <?= $index['name'];  ?></p>
						      </div>
						    </a>
						  </div>
<?php  
}
?>
							<div class='product-box'>
								<div class='image'>
										<div class='overlay'>
										<h5>$19.00</h5>
									</div>
								</div>
								<a href=''><p text-center>Black Belt</p></a>
							</div>
							<div class='product-box'>
								<div class='image'>
										<div class='overlay'>
										<h5>$19.00</h5>
									</div>
								</div>
								<a href=''><p text-center>Black Belt</p></a>
							</div>
							
						<div class='row text-center'>
							<ul class='bott-nav'>
								<li><a href=''>1</a></li>
								<li><a href=''>2</a></li>
								<li><a href=''>3</a></li>
								<li><a href=''>4</a></li>
								<li><a href=''>5</a></li>
								<li><a href=''>6</a></li>
								<li><a href=''>7</a></li>
								<li><a href=''>next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->

	</body>
</html>

