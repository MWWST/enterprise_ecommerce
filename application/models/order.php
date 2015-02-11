<?php class Order extends CI_Model {

	public function retreive_orders() {
		return $this->db->query("SELECT * FROM orders")->result_array();
	}

	public function get_orders($start_row,$limit){
			return $this->db->query("SELECT orders.id as order_id,orders.status,orders.total,orders.shipping_cost,
			orders.grand_total,orders.shipping_address_id,orders.billing_address_id,
			orders.shipping_method,orders.created_at,orders.updated_at,orders.billings_id,
			saddress.id as shipping_address_id,saddress.street1 as shipping_street1,saddress.street2 
			as shipping_street2,saddress.city as shipping_city,saddress.state as shipping_state,
			saddress.zip as shipping_zip,baddress.id as billing_address_id,
			baddress.street1 as billing_street1,baddress.street2 as billing_street2,
			baddress.city as billing_city,baddress.state as billing_state,baddress.zip as billing_zip
			FROM orders
			LEFT JOIN addresses as saddress ON saddress.id = orders.shipping_address_id
			LEFT JOIN addresses as baddress on baddress.id =orders.billing_address_id
			ORDER BY orders.id DESC limit $start_row, $limit")->result_array();
		}

}
?>