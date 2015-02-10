<?php

?>

<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<style type="text/css">
	.navbar{
		background-color: #950001;
		color: #FFFFFF;
	}

	.navbar-default .navbar-brand {
		color: #FFFFFF;
	}

	.navbar-default {
		color: #FFFFFF;
	}

	.navbar-nav li a {
		color: #FFFFFF ;
	}
	.link{
		color: #FFFFFF !important;
	}

	.status {
		background-color: #B5D6A7;
		border:	2px solid black;
		padding:5px;
		margin-left: 15px;
		margin-right: 160px;
	}

	.totals {
		border:	2px solid black;
		padding:5px;
		width:250px;


	}

	table {
		margin-top: 10px;
		box-shadow: 0px 10px 25px -5px;
	}

	.orderfilter {
		margin-left:15%
	}
	</style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		      </button>
		      <a class="navbar-brand" href="#">Dashboard</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav link">
		        <li class="active"><a href="#">Orders<span class="sr-only">(current)</span></a></li>
		        <li class="link"><a class="link" href="#">Products</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		            <li class="link"><a href="/admin/logoff/">Logoff</a></li>
		          </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	
