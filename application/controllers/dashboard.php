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
			$this->load->view('admin/header');
			$this->load->view('admin/products');

		}

	}
?>