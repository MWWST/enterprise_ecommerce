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
		//need the products by item
		//mySQL query with a list of items
		var_dump($this->session->userdata('order'));
		$orders = $this->session->userdata('order');

		$ids = array();
		foreach ($orders as $key => $value) {
			$ids[] = $key;
		}

		$idStr = implode(',',$ids);
		$list = $this->items->cart_items($idStr);
		$products = array('products' => $list);

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

}
