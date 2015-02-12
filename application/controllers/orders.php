<?php class Orders extends CI_Controller {

	public function show($id){
		$this->load->model('order');
		$order=$this->order->get_orders_by_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/orders_detail',array('order'=>$order));

	}

	public function create(){
		$this->load->mode('order');
		$this->order->create_order();
	}

}
