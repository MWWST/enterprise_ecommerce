<?php


class Dashboard extends CI_Controller {

		public function orders(){
			$this->load->view('admin/header');
			$this->load->view('admin/orders');
		}


		public function order_details(){
			$this->load->view('admin/header');
			$this->load->view('admin/orders_detail');

		}

			public function products(){
				// function __construct()
				// {
				// 	parent::__construct();
				// 	$this->load->helper(array('form', 'url'));
				// }
				$this->load->view('admin/header');
				$this->load->model('product');
				$all_products=$this->product->retrieve();
				$product['id'] = array('id'=>'id','name'=>'name','description'=>'description','price'=>'price','quant_sold'=>'quant_sold','inventory_count'=>'inventory_count','image_link'=>'image_link');
				$this->load->view('admin/products',array('product'=>$all_products));
				// var_dump($all_products);
				
		}

	}
?>