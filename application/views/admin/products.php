
		<div class="col-sm-4">
		 <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
    </div><!-- /input-group -->
		</div>
		<div class="col-sm-4 col-sm-offset-4 text-right">
			<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New Product</button>

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
		 		// var_dump($all_products);
		 			foreach ($all_products as $key => $value) 
		 				// var_dump($relations);
		 					{ ?>
					<?="<tr>";
					if($value['image_link'])
						{echo "<td><img src='".$value['image_link']."'width='150px'></td>";
						}
					else 
						{echo "<td><img src='/uploads/default_product.png' width='150px'></td>";
						}
		 			echo "<td id='id'>".$value['product_id']."</td>";
		 			echo"<td class='product_names' id='prod_name'>".$value['name']."</td>";
		 			echo"<td>".$value['inventory_count']."</td>";
		 			echo"<td>".$value['quant_sold']."</td>";
		 			echo"<td><button id ='edit'class='btn btn-primary btn-sm edit' data-toggle='modal' data-target='#myModal' 
		 			data-desc='".$value['description']."'data-productid='".$value['product_id']."'
		 			data-prodname='".$value['name']."' data-cat='".$value['categories_id']."'
		 			data-price='".$value['price']."' data-inv='".$value['inventory_count']."'>Edit</button>  <button id ='delete' class='btn btn-danger btn-sm deleteme' data-toggle='modal' data-target='#deleteModal' data-productid='".$value['product_id']."'>Delete</button></td>
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
				<!-- Add and Edit Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
				      </div>
				      <div class="modal-body">
				       <form id="modal_form" action="/upload/do_upload" method="post" enctype="multipart/form-data">
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
						    <select class="form-control" id="catselect" name="category"><option>Please Select</option>
						    	<?php foreach ($categories as $key1 => $category_info) {
		 			 			
					    echo "<option id='cat' class='category_select' value='".$category_info['id']."'>".$category_info['category']."</option>"; } ?>
		
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
						    <input type="text" class="form-control" id="inventory_quantity" name="inventory_quantity" placeholder="Enter quantity">
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
						  <button type="submit" id="modalbtn" class="btn btn-success">Create</button>
						  <input type="hidden" id="productaction" name="product_action" value="new_product"</input>
				          <input type="hidden" id="modal_productid" class="productid" name="producid"</input>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
		 	</div>
	 	</div>
 	</div>

 	<!-- DELETE Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
	      </div>
	      <div class="modal-body">
	        Are you sure you want to delete this product?
	      </div>
	      <div class="modal-footer">
	      	<!-- <form id="delete_product" action="/product/delete"> -->
	       <a id="delete_link" href=""> <button type="submit" class="btn btn-danger">Delete Product</button></a>
	      </div>
	    </div>
	  </div>
	</div>
<script>
$('.edit').click(function () {
    var productid = $(this).data('productid');
    var name = $(this).data('prodname');
    var desc = $(this).data('desc');
    var category = $(this).data('cat');
    var price = $(this).data('price');
    var inventory = $(this).data('inv');
    $('#myModalLabel').html("Edit This Product");
    $('#product_name').val(name);
    $('#product_description').val(desc);
    $('#catselect').val(category);
    $('#product_price').val(price);
    $('#inventory_quantity').attr('value', inventory);
    $('#modalbtn').html("Edit");
    $('#modal_form').attr('action','/upload/edit_product');
    $('#productaction').val("edit_product");
    $('#modal_productid').val($(this).data('productid'));

    console.log(productid);
    console.log(name);
    console.log(desc);
    console.log(price);
    console.log(inventory);
    console.log(category);

});
    
$('.deleteme').click(function(){
	var deleteid = "/products/delete/" + $(this).data('productid');
	// console.log(deleteid);
	$('#delete_link').attr('href',deleteid);

});
    
</script>

</body>
</html>