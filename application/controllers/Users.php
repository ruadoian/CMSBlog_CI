<?php

class Users extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$this->load->model('users_model');
	}

	public function register(){
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('username','User Name','required|trim');
		$this->form_validation->set_rules('email','Email Address','required|trim|valid_email|email_unique[users.email]');

		$this->form_validation->set_message('email_unique','This email is already registered');

		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');
		}else{
			$enc_password = md5($this->input->post('password'));
			$this->users_model->register_user($enc_password);
			redirect('post');
		}

	}
}


