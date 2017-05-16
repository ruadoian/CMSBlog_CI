<?php

class Comments extends CI_Controller{
	

	function __construct(){
		parent::__construct();

		$this->load->model('comments_model');
		$this->load->model('Posts_model');
	}

	public function create($post_id){
		$slug = $this->input->post('slug');
		$data['post'] = $this->Posts_model->get_posts($slug);

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/view',$data);
			$this->load->view('templates/footer');
		}else{
			$this->comments_model->create_comment($post_id);
			redirect('posts/'.$slug);
		}

	}
}