<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller for the list of descriptions
class Cart extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('items');
	}

	public function index() {

		//if cart is 0 or userdata('order') is false 
		if (!$this->session->userdata('order'))
		{
			$products = array('products'=>array());

			// $this->session->set_userdata('order', array());
		}
		else
		{
			$orders = $this->session->userdata('order');
			$ids = array();
			foreach ($orders as $key => $value) {
				$ids[] = $key;
				$idStr = implode(',',$ids);
				$list = $this->items->cart_items($idStr);
				$products = array('products' => $list);
			}
		}
		$this->load->view('/product_pages/carts',$products);
	}

	//removes the item from session based on the id and also
	//updates the shopping cart number
	public function trash() {
		$id = $this->input->post('id');
		$quant = $this->input->post('quant');

		//update the card data
		$cartTotal = $this->session->userdata('cart');
		$cartTotal -=$quant;

		$this->session->set_userdata('cart', $cartTotal);
		$order = $this->session->userdata('order');
		// var_dump($order);
		unset($order[$id]);

		$this->session->set_userdata('order', $order);

		//go back to view
		redirect('cart/index');
	}

	public function pay() {
		require_once(APPPATH.'/config/stripeconfig.php');

			$token  = $_POST['stripeToken'];
			var_dump($token);

	  		$customer = Stripe_Customer::create(array(
	      	'email' => 'customer@example.com',
	      	'card'  => $token
	  		));

	  		var_dump($customer);
	  		var_dump($this->input->post());

	  		die();

		// var_dump($this->input->post());
		$this->load->library("form_validation");

		$this->form_validation->set_rules("ship-first", "Shipping First Name", "required|min_length[2]|alpha");
		$this->form_validation->set_rules("ship-last", "Shipping Last Name", "required|min_length[2]|alpha");
		$this->form_validation->set_rules("ship-address1", "Shipping Address", "required");
		$this->form_validation->set_rules("ship-city", "Shipping City", "required|min_length[2]");
		$this->form_validation->set_rules("ship-state", "Shipping State", "required|min_length[2]");
		$this->form_validation->set_rules("ship-zip", "Shipping Zipcode", "required|min_length[5]|numeric");

		if($this->input->post('shipping-same')) {
			$this->form_validation->set_rules("bill-first", "Shipping First Name", "required|min_length[2]|alpha");
			$this->form_validation->set_rules("bill-last", "Shipping Last Name", "required|min_length[2]|alpha");
			$this->form_validation->set_rules("bill-address1", "Shipping Address", "required");
			$this->form_validation->set_rules("bill-city", "Shipping City", "required|min_length[2]");
			$this->form_validation->set_rules("bill-state", "Shipping State", "required|min_length[2]");
			$this->form_validation->set_rules("bill-zip", "Shipping Zipcode", "required|min_length[5]|numeric");
				
		}

			$this->form_validation->set_rules("card-num", "Card Number", "required|min_length[16]|numeric");
			$this->form_validation->set_rules("sec-code", "Security Code", "required|min_length[3]|numeric");
			$this->form_validation->set_rules("card-month", "Expiration Month", "required|min_length[2]|numeric");
			$this->form_validation->set_rules("card-year", "Expiration Year", "required|min_length[2]|numeric");

	

		if($this->form_validation->run() === FALSE)
		{

			$errors = $this->view_data['errors'] = validation_errors();
			// $this->session->userdata('errors') = $errors;
			$this->session->set_userdata(array('errors' => $errors));
			// var_dump($this->session->userdata('errors'));
			// die();

		}
		else
		{
			//valid data
			$data = $this->input->post();
			date_default_timezone_set('America/Los_Angeles');
			$date = date('Y-m-d h:i:s');

			var_dump($data);

			// $userArray = array(
			// 	"first" => $data['first'],
			// 	"last" => $data['last'],
			// 	"email" => $data['email'],
			// 	"password" => md5($data['password']),
			// 	"created_at" => $date,
			// 	"updated_at" => $date
			// 	);

			// $addUser = $this->login->newUser($userArray);
			// $success_string = "<p class='green'>Hello {$data['first']}. Registration successful. Please login!</p>";
			// $this->session->set_userdata(array('reg_success' => $success_string));

		}
		
		redirect('cart/index');





	}



}
