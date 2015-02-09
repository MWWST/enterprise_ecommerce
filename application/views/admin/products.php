
		<div class="col-sm-4">
		 <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
    </div><!-- /input-group -->
		</div>
		<div class="col-sm-4 col-sm-offset-4 text-right">
			<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Product</button>

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
		 			<th>Picture</th>
		 			<th>ID</th>
		 			<th>Name</th>
		 			<th>Inventory Count</th>
		 			<th>Quantity Sold</th>
		 			<th>Action</th>
		 		</thead>
		 		<?php  

		 			
		 			// krsort($all_products);
		 			// var_dump($all_products);
		 			foreach ($all_products as $key => $value) 
		 					{ ?>
					<?="<tr>";
					if($value['image_link'])
						{echo "<td><img src='".$value['image_link']."'width='150px'></td>";
						}
					else 
						{echo "<td><img src='/uploads/default_product.png' width='150px'></td>";
						}
		 			echo "<td>".$value['id']."</td>";
		 			echo"<td>".$value['name']."</td>";
		 			echo"<td>".$value['inventory_count']."</td>";
		 			echo"<td>".$value['quant_sold']."</td>";
		 			echo"<td><a href='/edit/id'>Edit</a> | <a href='/delete/id'>Delete</a></td>
	 			</tr>";

} ?>

		
		 		<!-- 
	 			<tr>
		 			<td><img src=""></td>
		 			<td>2</td>
		 			<td>Hats</td>
		 			<td>99</td>
		 			<td>47</td>
		 			<td><a href="/edit/id">Edit</a> | <a href="/delete/id">Delete</a></td>
	 			</tr>
	 			<tr>
		 			<td><img src=""></td>
		 			<td>3</td>
		 			<td>Mugs</td>
		 			<td>14</td>
		 			<td>980</td>
		 			<td><a href="/edit/id">Edit</a> | <a href="/delete/id">Delete</a></td>
	 			</tr>
	 			<tr>
		 			<td><img src=""></td>
		 			<td>4</td>
		 			<td>Pants</td>
		 			<td>74</td>
		 			<td>16</td>
		 			<td><a href="/edit/id">Edit</a> | <a href="/delete/id">Delete</a></td>
	 			</tr> -->

			</table>
		 </div>
		
		 <div class="row">
			<div class="col-sm-12 col-sm-offset-4">
				<?php echo $pagination;?>
			 	<nav>
				  <ul class="pagination">
				    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
				    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				    <li class="disabled"><a href="#">2 </a></li>
				    <li class="disabled"><a href="#">3 </a></li>
				    <li class="disabled"><a href="#">4 </a></li>
				    <li class="disabled"><a href="#">5 </a></li>
				    <li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
				  </ul>
				</nav>
			</div>
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
				      </div>
				      <div class="modal-body">
				       <form action="/upload/do_upload" method="post" enctype="multipart/form-data">
						  <div class="form-group">
						    <label for="product_name">Name</label>
						    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
						  </div>
						  <div class="form-group">
						    <label for="Description">Description</label>
						    <textarea class="form-control" name="product_description" id="product_description"> </textarea>
						  </div>
						   <div class="form-group">
						    <label for="category">Category</label>
						    <select class="form-control">
						    	<?php foreach ($categories as $key1 => $category_info) {
		 			 			
					    echo "<option value='".$category_info['id']."'>".$category_info['category']."</option>"; } ?>
		
						  <!--   We will add the category id's and titles from db shortly. -->
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="product_name">or add new cateogry</label>
						    <input type="text" class="form-control" id="add_category" name="add_category" placeholder="Enter category name">
						  </div>
						   <div class="form-group">
						    <label for="product_price">Product Price</label>
						    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter price">
						  </div>
						  <div class="form-group">
						    <label for="inventory_quantity">Inventory Quantity</label>
						    <input type="text" class="form-control" id="inventory_quantity" name="inventory_quantity" placeholder="Enter category name">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputFile">File input</label>
						    <input type="file" name="userfile">
						    <p class="help-block">Fancy image features with ajax here</p>
						  </div>	
						
				      </div>
				      <div class="modal-footer">
				          <button class="btn btn-danger">Cancel</button> 
						  <button class="btn btn-primary">Preview</button>
						  <button type="submit" class="btn btn-success">Create</button>
						  <input type="hidden" name="add_product" value="new_product"</input>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
		 	</div>
	 	</div>
 	</div>
 	

</body>
</html>