<?php class Order extends CI_Model {

	public function __construct()
	{
		$this->output->enable_profiler();
	}
//We need a constructor for date helper right now i just put it in every function 

	public function retreive_orders() {
		return $this->db->query("SELECT * FROM orders")->result_array();
	}

	public function get_orders($start_row,$limit){
		
			return $this->db->query("SELECT orders.id as order_id,orders.status,orders.total,
			orders.shipping_cost, orders.grand_total,orders.shipping_address_id,orders.billing_address_id,
			orders.shipping_method,orders.created_at,orders.updated_at,orders.billings_id,
			saddress.id as shipping_address_id,saddress.first_name as shipping_first_name,saddress.last_name as shipping_last_name,saddress.street1 as shipping_street1,saddress.street2 
			as shipping_street2,saddress.city as shipping_city,saddress.state as shipping_state,
			saddress.zip as shipping_zip,baddress.id as billing_address_id,baddress.first_name 
			as billing_first_name,baddress.last_name as billing_lastname,
			baddress.street1 as billing_street1,baddress.street2 as billing_street2,
			baddress.city as billing_city,baddress.state as billing_state,baddress.zip as 
			billing_zip,shipping_status.status_code,shipping_status.status_name
			FROM orders
			LEFT JOIN addresses as saddress ON saddress.id = orders.shipping_address_id
			LEFT JOIN addresses as baddress on baddress.id =orders.billing_address_id
			LEFT JOIN shipping_status on shipping_status.status_code = orders.status
			ORDER BY orders.id DESC limit $start_row, $limit")->result_array();
		}


		public function get_orders_by_id($id){
		
			return $this->db->query("SELECT orders.id as order_id,orders.status,orders.total,
			orders.shipping_cost, orders.grand_total,orders.shipping_address_id,orders.billing_address_id,
			orders.shipping_method,orders.created_at,orders.updated_at,orders.billings_id,
			saddress.id as shipping_address_id,saddress.first_name as shipping_first_name,saddress.last_name as shipping_last_name,saddress.street1 as shipping_street1,saddress.street2 
			as shipping_street2,saddress.city as shipping_city,saddress.state as shipping_state,
			saddress.zip as shipping_zip,baddress.id as billing_address_id,baddress.first_name 
			as billing_first_name,baddress.last_name as billing_lastname,
			baddress.street1 as billing_street1,baddress.street2 as billing_street2,
			baddress.city as billing_city,baddress.state as billing_state,baddress.zip as 
			billing_zip,shipping_status.status_code,shipping_status.status_name,
			order_products.products_id as product_ordered_id,order_products.order_product_name,
			order_products.quantity,order_products.order_product_price
			FROM orders
			LEFT JOIN addresses as saddress ON saddress.id = orders.shipping_address_id
			LEFT JOIN addresses as baddress on baddress.id =orders.billing_address_id
			LEFT JOIN shipping_status on shipping_status.id = orders.status
			LEFT JOIN order_products on orders.id =order_products.orders_id
	
			WHERE orders.id =?",array($id))->result_array();
		}

	public function create_order($post,$token){ 
		$this->load->helper('date'); 					
		//so we can use now function
		// same shipping and billing = type 3, shipping = type 1, billing = type 2

		if ($post['shipping-same'] == 'on'){  // if same shipping and billing
			$this->db->query("INSERT INTO addresses (first_name, last_name, street1, street2, 
			city, state, zip, type,token, created_at)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, now())",array($post['ship-first'],$post['ship-last'],
			$post['ship-address1'],$post['ship-address2'],$post['ship-city'],$post['ship-state'],
			$post['ship-zip'],3,$token)); //insert and set type to 3
			$last_shipping_id=$this->db->insert_id();
			$last_billing_id=$this->db->insert_id();

		}
		else {  

		// two inserts, type 1 for shipping, type 2 for billing

			$this->db->query("INSERT INTO addresses (first_name, last_name, street1, street2, 
			city, state, zip, type, created_at)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, now())",array($post['ship-first'],$post['ship-last'],
			$post['ship-address1'],$post['ship-address2'],$post['ship-city'],$post['ship-state'],
			$post['ship-zip'],1,$token)); //shipping
			$last_shipping_id=$this->db->insert_id();

			$this->db->query("INSERT INTO addresses (first_name, last_name, street1, street2, 
			city, state, zip, type, created_at)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, now())",array($post['bill-first'],$post['bill-last'],
			$post['bill-address1'],$post['bill-address2'],$post['bill-city'],$post['bill-state'],
			$post['bill'],2,$token)); //billing
			$last_billing_id=$this->db->insert_id();
		}

		//once address is inserted, 
		//then insert billing information which comes from $token (passed above)

		$this->db->query("INSERT INTO billings (ipn, created_at)
		VALUES (?, now())",array($token));
		$last_billing_insert=$this->db->insert_id();
		
		//now that we have a billings id we can create the order
		//but first we need those address ids
		
		$this->db->query("INSERT INTO orders (status, shipping_address_id, billing_address_id, 
		 billings_id, created_at) VALUES (?, ?, ?, ?, now())",array('1',$last_shipping_id,$last_billing_id,$last_billing_insert));
		$last_order_insert=$this->db->insert_id();
		
		//now that we have an order id we can create the orders_products for each item in the cart
		// var_dump($this->session->userdata('order'));
		$price = 0;
		$total =0;
		$grandtotal=0;
		foreach ($this->session->userdata('order') as $key => $value) {
			
			//or foreach sessiondata as key => value if you want to pass this above
			//set the price from the db using the id (key) from the array
			
			$qprice = $this->db->query('SELECT price FROM products WHERE id = ?',array($key));
			$data = array_shift($qprice->result_array());
			$price=($data['price']);
			
			//get the item name from the db using the id (key) from the array
			
			$qname = $this->db->query('SELECT name FROM products WHERE id = ?',array($key));
			$data = array_shift($qname->result_array());
			$name=($data['name']);
			
			//for now shipping is 9.95 no matter what
			
			$shipping_cost= 9.95;
			// get previous inventory amount
			// get previous inven$this->db->flush_cache();tory amount

			
			$qinvcount = $this->db->query('SELECT inventory_count FROM products WHERE id = ?',array($key));
			$data = array_shift($qinvcount->result_array());
			$inventory=($data['inventory_count']);
			$new_inventory=$inventory-$value;
			
			$qquan = $this->db->query('SELECT quant_sold FROM products WHERE id = ?',array($key));
			$data = array_shift($qquan->result_array());
			$quantsold=($data['quant_sold']);
			
			//now we can insert into the order products
			
			$this->db->query("INSERT INTO order_products(products_id,orders_id,order_product_name,
			order_product_price,quantity,created_at) VALUES(?,?,?,?,?,now())",array($key,$last_order_insert,$name,$price,$value,now()));
	
			//now we need to update the order with the total prices
			$quantitysold=$quantsold+$value;
			$total+=$price*$value;
			$grandtotal+=$price*$value+$shipping_cost;
			
			// echo $this->db->last_query();

			// we have address, billing, order, ordered items,
			// and now we need to update product inventory and quant sold.
			
			$updateProductData=array('quant_sold'=>$quantitysold,'inventory_count'=>$new_inventory,'updated_at'=>now());
			$this->db->where('products.id',$key);
			$this->db->update('products',$updateProductData);

		}
		echo "got here";
			$backtrack_update_orders=array('total'=>$total,'shipping_cost'=>$shipping_cost,'grand_total'=>$grandtotal,'updated_at'=>now());
			$this->db->where('orders.id',$last_order_insert);
			$this->db->update('orders',$backtrack_update_orders);
	}
}

?>