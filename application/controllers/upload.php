<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('/admin/upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$this->output->enable_profiler();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload_config['upload_path'] = realpath(dirname(__FILE__)). '/uploads/';

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			// $this->load->view('/admin/upload_form/', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->Model('product');
			$added=$this->product->create($this->input->post(),$data);
			// redirect('/dashboard/products');
			// echo $this->db->insert_id();
			var_dump($this->input->post());
	}
}
}
?>