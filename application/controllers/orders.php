<?php class Orders extends CI_Controller {

	public function show(){
		$this->load->view('admin/header');
		$this->load->view('admin/orders_detail');
	}

}
