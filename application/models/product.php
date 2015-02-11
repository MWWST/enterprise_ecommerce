<?php class Product extends CI_Model {
	
	public function create($post,$data){
		
			if (strlen($post['add_category'])>1){
			$this->db->query("INSERT INTO categories (category,created_at) VALUES (? , NOW())",array($post['add_category']));
			$cat_last_insert=$this->db->insert_id();
			
			$this->db->query("INSERT INTO products (name, description, price, inventory_count, image_link, created_at) 
		 	VALUES (?, ?, ?, ?, ?, NOW())", array($post['product_name'],$post['product_description'],
		 	$post['product_price'], $post['inventory_quantity'],$data['upload_data']['full_path']));
			$last_insert=$this->db->insert_id();	


			$this->db->query("INSERT INTO categories_have_products (products_id,categories_id,created_at) VALUES (?,? ,NOW())",
			array($last_insert,$cat_last_insert));  
		}

			elseif ($post['category']) {
			$this->db->query("INSERT INTO products (name, description, price, inventory_count, image_link, created_at) 
		 	VALUES (?, ?, ?, ?, ?, NOW())", array($post['product_name'],$post['product_description'],
		 	$post['product_price'], $post['inventory_quantity'],$data['upload_data']['full_path']));
			$last_insert=$this->db->insert_id();

			$this->db->query("INSERT INTO categories_have_products (products_id,categories_id,created_at) VALUES (?,? ,NOW())",
			array($last_insert,$post['category']));
		}

		else {

			$this->db->query("INSERT INTO products (name, description, price, inventory_count, image_link, created_at) 
		 	VALUES (?, ?, ?, ?, ?, NOW())", array($post['product_name'],$post['product_description'],
		 	$post['product_price'], $post['inventory_quantity'],$data['upload_data']['full_path']));
			$last_insert=$this->db->insert_id();

		}
	}
	

		public function get_category_relations() {
			return $this->db->query("SELECT * FROM categories_have_products");
		}

		public function retrieve(){

			return $this->db->query("SELECT * FROM products 
			LEFT JOIN categories_have_products ON categories_have_products.products_id = products.id
			ORDER BY products.id DESC")->result_array();
		}


		public function retreive_categories(){
			return $this->db->query("SELECT * FROM categories")->result_array();
		}

		public function search_product($search,$start_row,$limit){

			return $this->db->query("SELECT products.id as product_id,products.name,products.description,products.price,products.inventory_count,products.quant_sold,products.image_link,
				categories_have_products.products_id,categories_have_products.categories_id 
				FROM products 
				LEFT JOIN categories_have_products ON products.id  = categories_have_products.products_id
				WHERE products.name LIKE '%".$this->db->escape_like_str($search)."%' 
				ORDER BY products.id DESC LIMIT $start_row,$limit")->result_array();

		}



		public function get_products($start_row,$limit){

			return $this->db->query("SELECT products.id as product_id,products.name,products.description,products.price
				,products.inventory_count,products.quant_sold,products.image_link,
				categories_have_products.products_id,categories_have_products.categories_id 
			FROM products
			LEFT JOIN categories_have_products ON products.id = categories_have_products.products_id
			ORDER BY products.id DESC limit $start_row, $limit")->result_array();
		}

		public function update_products($post){
			$this->load->helper('date');
			$updateData=array('name'=>$post['product_name'],'description'=>$post['product_description'],'price'=>$post['product_price'],'inventory_count'=>$post['inventory_quantity'],'updated_at'=>now());

			$this->db->where('products.id',$post['producid']);
			$this->db->update('products',$updateData);

		}

		// public function update_products_new_cat_insert($post,$data){
		// 	var_dump($data);
		// 	$this->load->helper('date');
		// 	if (strlen($post['add_category'])>1){
		// 	$this->db->query("INSERT INTO categories (category,created_at) VALUES (? , NOW())",array($post['add_category']));
		// 	$cat_last_insert=$this->db->insert_id();

		// 	$updateData=array('name'=>$post['product_name'],'description'=>$post['product_description'],'price'=>$post['product_price'],'inventory_count'=>$post['inventory_quantity'],['image_link']=>$data['upload_data']['full_path'],'updated_at'=>now());

		// 	$this->db->where('products.id',$post['producid']);
		// 	$this->db->update('products',$updateData);

		// 	$this->db->query("INSERT INTO categories_have_products (products_id,categories_id,created_at) VALUES (?,? ,NOW())",
		// 	array($last_insert,$cat_last_insert));  

		// }
	


		public function update_products_category_and_image($post,$data1){
		//update products and category when there is an image 
			$idproduct=$post['producid'];
			$imagelink=$data1['image_link'];
			$this->load->helper('date');
			
		//if adding a new category for the product	
			if (strlen($post['add_category'])>1){
			$this->db->query("INSERT INTO categories (category,created_at) VALUES (? , NOW())",array($post['add_category']));
			$cat_last_insert=$this->db->insert_id();

			$updateData=array('name'=>$post['product_name'],'description'=>$post['product_description'],'price'=>$post['product_price'],'image_link'=>$imagelink,'inventory_count'=>$post['inventory_quantity'],'updated_at'=>now());
			// var_dump($data1);
			$this->db->where('products.id',$post['producid']);
			$this->db->update('products',$updateData);

			$updateCategoryData=array('products_id'=>$post['producid'],'categories_id'=>$cat_last_insert,'updated_at'=>now());
			$this->db->where('categories_have_products.products_id',$post['producid']);
			$this->db->update('categories_have_products',$updateCategoryData);

			//otherwise if we are selecting a different existing category for the product
			}

			elseif (strlen($post['add_category'])<1) {
			$this->load->helper('date');
			$updateData=array('name'=>$post['product_name'],'description'=>$post['product_description'],'price'=>$post['product_price'],'image_link'=>$imagelink,'inventory_count'=>$post['inventory_quantity'],'updated_at'=>now());
			// var_dump($updateData);
			$this->db->where('products.id',$post['producid']);
			$this->db->update('products',$updateData);
	

			$updateCategoryData=array('products_id'=>$post['producid'],'categories_id'=>$post['category'],'updated_at'=>now());
			$this->db->where('categories_have_products.products_id',$post['producid']);
			$this->db->update('categories_have_products',$updateCategoryData);
					
			}	
		}

		// if we are updating a product not changing the image

		public function update_products_category($post) {
			$this->load->helper('date');
			

			$updateData=array('name'=>$post['product_name'],'description'=>$post['product_description'],'price'=>$post['product_price'],'inventory_count'=>$post['inventory_quantity'],'updated_at'=>now());
			// var_dump($data1);
			$this->db->where('products.id',$post['producid']);
			$this->db->update('products',$updateData);


			$updateCategoryData=array('products_id'=>$post['producid'],'categories_id'=>$post['category'],'updated_at'=>now());
			$this->db->where('categories_have_products.products_id',$post['producid']);
			$this->db->update('categories_have_products',$updateCategoryData);
		}

		public function delete_product($id){

			$this->db->where('products_id',$id);
			$this->db->delete('categories_have_products');
			$this->db->where('products.id',$id);
			$this->db->delete('products');


		}



	}


?>
