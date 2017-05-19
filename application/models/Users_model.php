<?php

class Users_model extends CI_Model{
	
	public function register_user($enc_password){
		//$password = $this->input->post('password');
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'zipcode' => $this->input->post('zipcode'),
			'password' => $enc_password,
			);

		//var_dump($data);die();
		$this->db->insert('users',$data);
	}
}