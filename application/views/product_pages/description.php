 


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
		width: 330px;
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
<?php var_dump($product) ?>
	<div class='container'>
	<?php $this->load->view('product_pages/partials/products_header'); ?>
		<div class='row'>
			<div class='col-sm-12 borders'>
				<div class='top-text'>

					<a href="<?= '/description/index' ?>">Go Back</a>
					<h2> <?= $product['name'];  ?></h2>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-4 borders'>
				<div class = 'main-img'>
					<img class='main-img' src=<?= "{$product['img_arr'][0]}";  ?> alt="image">
				</div>
				<div class='small-imgs'>
					<a href='' class = 'sm-square'>
					</a>
					<a href='' class = 'sm-square'>
					</a>
					<a href='' class = 'sm-square'>
					</a>
					<a href='' class = 'sm-square'>
					</a>
					<a href='' class = 'sm-square'>
					</a>
				</div>
			</div>
			<div class='col-sm-8 borders'>
				<div class='description'>
					<p>
<?=
$product['description'];

  ?>

					</p>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-12 borders'> 
				<div class='price text-right'>
					<form action='/description/test/<?=$product['id']?>' method='post'>
						<select name='quant'>
							<option value="<?=$product['qty'][0][0];  ?>">
								<?= $product['qty'][0][1];  ?>
							</option>
							<option value="<?=$product['qty'][1][0];  ?>">
								<?= $product['qty'][1][1];  ?>
							</option>
							<option value="<?=$product['qty'][2][0];  ?>">
								<?= $product['qty'][2][1];  ?>
							</option>
						</select>
						<input type='submit' value='Buy'>
					</form>
				</div>
			</div>
			<div class='col-sm-12 borders'>
				<h3>Similar Items</h3>
				<div class='similar-items'>
					
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>					
					<div class='sim-items'>
						<a href='' class='bott-img'>
						</a>
						<p><a href=''>Black Belt</a></p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end of container -->

</body>
</html>