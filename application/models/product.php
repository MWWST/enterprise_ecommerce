<?php class Product extends CI_Model {
	

	public function create($post,$data){
		$this->db->query("INSERT INTO products (name, description, price, inventory_count, image_link, created_at) 
	 VALUES (?, ?, ?, ?, ?, NOW())", array($post['product_name'],$post['product_description'],
	 	$post['product_price'], $post['inventory_quantity'],$data['upload_data']['full_path']));
	}

	public function retrieve(){

		return $this->db->query("SELECT * FROM products ORDER BY id ASC")->result_array();
	}
}
?>
