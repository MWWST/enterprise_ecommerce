<?php

class Admin extends CI_Controller {


	public function loginpage(){
		// $this->load->view('admin/header');
		$this->load->view('admin/login');
	}

	public function logoff(){
		$this->session->sess_destroy();
		redirect('/');
	}

	public function authenticate(){
		$this->output->enable_profiler();
		// $this->load->view('admin/header');
		// var_dump($this->input->post());
		$loginemail = $this->input->post('email');
				$password = md5($this->input->post('password'));
				$this->load->model('user');
				$logged_in = $this->user->login($loginemail);
				// var_dump($password);
				if ($logged_in){
					// echo "logged in";
					if ($loginemail == $logged_in['email'] && $password == $logged_in['password'] && $logged_in['access_level']==1){
						$logged_in_user = array(
								'user_id' => $logged_in['id'],
								'user_email' => $logged_in['email'],
								'user_first_name' => $logged_in['first_name'],
								'user_last_name' => $logged_in ['last_name'],
								'is_logged_in'=> true
								);
						// echo "logged in";
							$this->session->set_userdata($logged_in_user);
							// var_dump($this->session->all_userdata());
							redirect('/dashboard/orders');
						}

					else {
					echo "not authenticated"; //flash data errors
					}
				}
				else {
					echo "user not found";
				}
			}
		}


?>