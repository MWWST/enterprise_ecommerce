<?php class User extends CI_Model {

public function login($email){

		return $this->db->query("SELECT * FROM users WHERE email =?", array($email))->row_array();
	}

public function logoff(){
		session_destroy();
		redirect('/');
}

}

?>