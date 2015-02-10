<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller for the list of descriptions
class Description extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('items');

		if($this->session->userdata('cart'))
		{
			$this->session->userdata('cart');
		}
		else 
		{
			$this->session->set_userdata('cart',0);
		}

	}

	//view of specific item
	public function index($id) {

		//get the product info based on id
		$item = $this->items->by_id($id);
		$img_arr = explode(",", $item['image_link']);
		// var_dump($img_arr);
		$item['img_arr'] = $img_arr;
		// var_dump($item);
		// die();

		$qty = array(
					$this->quant(1,$item['price']),
					$this->quant(2,$item['price']),
					$this->quant(3,$item['price']),
					);


		$item['qty'] = $qty;
		$product = array('product' => $item);
		// var_dump($product);
		// die();
		$this->load->view('product_pages/description', $product);

	}


	//formats the buy button
	private function quant($num, $price) {
		return array(
			$num,
			"($num) " .'$'.number_format((float)$price * $num, 2,'.','')
			);
	}



	public function addCart($id) {
		// var_dump($id);
		$quant = $this->input->post('quant');

		$count = $this->session->userdata('cart');
		$this->session->set_userdata('cart',$count + $quant );

		//session for the product and the quanity
		

		$this->index($id);

	}
}

//end of main controller