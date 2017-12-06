<?php
class Users extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	// array $user_input
	public function cek_user($user_input)
	{
		$response = $this->db->get_where('users', 
			array(
				'username' => $user_input['username'],
				'password' => $user_input['password']
			));
		return $response->result();
	}

	public function input($users){
		if ($this->db->insert('users',$users)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}