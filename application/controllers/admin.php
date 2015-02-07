<?php

class Admin extends CI_Controller {


	public function loginpage(){
		$this->load->view('admin/header');
		$this->load->view('admin/login');
	}

	public function authenticate(){
		$this->load->view('admin/header');
		var_dump($this->input->post());
	}

}


?>