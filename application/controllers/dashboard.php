<?php


class Dashboard extends CI_Controller {

		public function orders(){
		//validate that logged in user is an administrator before we show them the page
			$loginemail = $this->session->userdata('user_email');  // need a constructor for this we are repeating each time 
			  													//to ensure the user is authenticated and has the correct access level
			$this->load->model('user');
			$logged_in = $this->user->login($loginemail);
			// var_dump($logged_in);
				if ($logged_in){
					if ($loginemail == $logged_in['email'] && $logged_in['access_level']==1  && $this->session->userdata('is_logged_in')==TRUE)
					{
						$this->load->view('admin/header');
						$this->load->view('admin/orders');
					}
					else {
						echo "no login for you";
						var_dump($this->session->all_userdata());
					}	
				}
			}


		public function order_details(){
			$loginemail = $this->session->userdata('user_email');
			$this->load->model('user');
			$logged_in = $this->user->login($loginemail);
			if ($logged_in){
					if ($loginemail == $logged_in['email'] && $logged_in['access_level']==1  && $this->session->userdata('is_logged_in')==TRUE)
					{
			$this->load->view('admin/header');
			$this->load->view('admin/orders_detail');
		}
			else {
					echo "no login for you";
					var_dump($this->session->all_userdata());
				}	
			}

		}

			public function products(){
			$loginemail = $this->session->userdata('user_email');
			$this->load->model('user');
			$logged_in = $this->user->login($loginemail);
			if ($logged_in){
					if ($loginemail == $logged_in['email'] && $logged_in['access_level']==1  && $this->session->userdata('is_logged_in')==TRUE)
					{
				
				$start_row = $this->uri->segment(3);
				$per_page = 4;

				if(trim($start_row) == ''){
						$start_row =0;
						}

				$this->load->model('product');

				$all_products=$this->product->retrieve();
				$categories=$this->product->retreive_categories();
				$relations=$this->product->get_category_relations();
				// echo $last_added;
				$total_rows= count($all_products);
				$this->load->library('pagination');
				$config['base_url'] = base_url() . 'dashboard/products';
				$config['total_rows'] = $total_rows;
				$config['per_page'] = 4; 		
				$this->pagination->initialize($config); 
				
				$this->view_data['categories'] = $categories;
				$this->view_data['pagination'] = $this->pagination->create_links();
				$this->view_data['all_products']=$this->product->get_products($start_row,$per_page);
				$this->load->view('admin/header');
				// $this->load->view('admin/products',array('product'=>$all_products));
				$this->load->view('admin/products',$this->view_data);
			}
				else {
					echo "no login for you";
					var_dump($this->session->all_userdata());
				}	
			}
				
		}

	}
?>