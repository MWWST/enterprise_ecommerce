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




	public function get_products($start_row,$limit){

		return $this->db->query("SELECT products.id as product_id,products.name,products.description,products.price,products.inventory_count,products.quant_sold,products.image_link,
			categories_have_products.products_id,categories_have_products.categories_id 
		FROM products
		LEFT JOIN categories_have_products ON products.id  = categories_have_products.products_id
		 ORDER BY products.id DESC limit $start_row, $limit")->result_array();
	}


}
?>
