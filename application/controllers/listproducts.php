<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listproducts extends CI_Controller {

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

	//view of all the products
	public function index()
	{
		

		$list = $this->items->get_all();
		foreach ($list as &$index) {

			//creates an array split on ,
			$img_arr = $this->image_split($index['image_link']);
			$index['img_arr'] = $img_arr;
		}

		$products = array('products' => $list);

		// $this->session->sess_destroy();
		// die();
		$this->load->view('product_pages/products', $products);
	}
	

	private function image_split($str) {
		return explode(",", $str);

	}

	public function sortedby() {
		if ($this->input->post('option') == 'price')
		{
			
			$list = $this->items->price();

			foreach ($list as &$index) {
				//creates an array split on ,
				$img_arr = $this->image_split($index['image_link']);
				$index['img_arr'] = $img_arr;
			}

			$products = array('products' => $list);
			// $price = array('products' =>$list);
			$this->load->view('product_pages/products', $products);

		}
		else
		{
			$list = $this->items->popular();

			foreach ($list as &$index) {

				//creates an array split on ,
				$img_arr = $this->image_split($index['image_link']);
				$index['img_arr'] = $img_arr;
			}
			$products = array('products' => $list);
			// $popular = array('products' =>$list);
			$this->load->view('product_pages/products', $products);
		}
	}
}