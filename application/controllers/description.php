<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Description extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('items');
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
		// var_dump($products);
		// die();

		$this->load->view('product_pages/products', $products);
	}

	private function image_split($str) {
		return explode(",", $str);
		//string 

	}



	//formats the buy button
	private function quant($num, $price) {
		return array(
			$num,
			"($num) " .'$'.number_format((float)$price * $num, 2,'.','')
			);
	}




	//view of specific item
	public function description_page($id) {

		//get the product info based on id
		$item = $this->items->by_id($id);
		$img_arr = explode(",", $item['image_link']);
		var_dump($img_arr);
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

	public function test($id) {
		var_dump($id);
		var_dump($this->input->post() );
		//add to the cart!

	}

	public function sortedby() {
		// echo 'hello';
		// var_dump($this->input->post());
		if ($this->input->post('option') == 'price')
		{
			// echo 'sort by price';
			$list = $this->items->price();
			$price = array('products' =>$list);
			$this->load->view('product_pages/products', $price);

		}
		else
		{
			$list = $this->items->popular();
			$popular = array('products' =>$list);
			$this->load->view('product_pages/products', $popular);

		}
		// echo 'hello get_products function';

	}
}

//end of main controller