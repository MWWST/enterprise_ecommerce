
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
		 	<table class="table table-striped">
		 		<thead>
		 			<th>Order ID</th>
		 			<th>Name</th>
		 			<th>Date</th>
		 			<th>Address</th>
		 			<th>Total</th>
		 			<th>Status</th>
		 		</thead>
		 		<tr>
		 			<td><a href="/orders/show/id">100</a></td>
		 			<td>Bob</td>
		 			<td>1/6/2015</td>
		 			<td>1982 Zanker Rod, San Jose CA 97112</td>
		 			<td>149.99</td>
		 			<td>
		 				<select>
			 				<option>Shipped</option>
			 				<option>Order in Progress</option>
			 				<option>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr>
	 			<tr>
		 			<td><a href="">99</a></td>
		 			<td>Stacey</td>
		 			<td>1/5/2015</td>
		 			<td>555 Stevens Creek, San Jose CA 97112</td>
		 			<td>1049.99</td>
		 			<td>
		 				<select>
			 				<option>Shipped</option>
			 				<option>Order in Progress</option>
			 				<option>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr><tr>
		 			<td><a href="">98</a></td>
		 			<td>Rhonda</td>
		 			<td>1/1/2015</td>
		 			<td>6074 Dover Lane, Grand Rapids, MI</td>
		 			<td>99.99</td>
		 			<td>
		 				<select>
			 				<option>Shipped</option>
			 				<option>Order in Progress</option>
			 				<option>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr><tr>
		 			<td><a href="">98</a></td>
		 			<td>Tawanda</td>
		 			<td>1/1/2015</td>
		 			<td>4390 Alberata, Naples FL 99988</td>
		 			<td>79.89</td>
		 			<td>
		 				<select>
			 				<option>Shipped</option>
			 				<option>Order in Progress</option>
			 				<option>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr><tr>
		 			<td><a href="">98</a></td>
		 			<td>Gerald</td>
		 			<td>1/1/2015</td>
		 			<td>PO Box 1245 Tracverse City, MI 49684</td>
		 			<td>949.99</td>
		 			<td>
		 				<select>
			 				<option>Shipped</option>
			 				<option>Order in Progress</option>
			 				<option>Cancelled</option>
		 				</select>
		 			</td>
	 			</tr>
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