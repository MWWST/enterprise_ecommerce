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
			$this->load->library('form_validation');
			$this->form_validation->set_rules('add_category','add_category','is_unique[categories.category]');
			if ($this->form_validation->run() == FALSE)
			{
				echo validation_errors();
			}

			else {
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
				redirect('/dashboard/products');
				// echo $this->db->insert_id();
				// var_dump($this->input->post());
			}
		}
	}

	function edit_product(){
			// $this->load->library('form_validation');
			// $this->form_validation->set_rules('add_category','add_category','is_unique[categories.category]');
			// if ($this->form_validation->run() == FALSE)
			// {
			// 	echo validation_errors();
			// }

			// else {
		    if(isset($_FILES['userfile']) && $_FILES['userfile']['size'] > 0){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);
				$this->upload_config['upload_path'] = realpath(dirname(__FILE__)). '/uploads/';
						if (! $this->upload->do_upload()) {
							$error = array('error' => $this->upload->display_errors());
							var_dump($error);
						}
						else
						{
							$this->output->enable_profiler();
							$data = $this->upload->data();
							$imagepath= $data['full_path'];
							$imagedata = array('image_link'=>$imagepath);
							// var_dump($data);
							$this->load->Model('product');

							// if ($this->input->post('product_action') && $this->input->post('product_action') =='edit_product' && 
							// 	strlen($this->input->post('add_category')>1)) {
								$update=$this->product->update_products_category_and_image($this->input->post(),$imagedata);
								redirect('/dashboard/products');
							}
						}
			else {
				$this->load->Model('product');
				$update=$this->product->update_products_category($this->input->post());
				redirect('/dashboard/products');
			}

				// 	echo "update";
				// }

				// var_dump($this->input->post());
				// var_dump($this->upload->data());
		// }
				// $added=$this->product->create($this->input->post(),$data);
				// redirect('/dashboard/products');
			}
				// echo $this->db->insert_id();
				// var_dump($this->input->post());
				// $updated=$this->product->update_products($this->input->post());				
				// var_dump($this->input->post());
	}


?>