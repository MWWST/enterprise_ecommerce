<?php class Items extends CI_Model {

	//return single product by id
	public function by_id($id) {
		return $this->db->get_where('products', array('id' => $id) )->row_array();

	}

	//gets all products
	public function get_all() {
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	//gets all products, order by price
	public function price() {
		return $this->db->query("SELECT * FROM products ORDER BY price")->result_array();

	}
	public function popular() {
		return $this->db->query("SELECT * FROM products ORDER BY quant_sold DESC")->result_array();
	}
}
?>