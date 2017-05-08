<?php 

class Posts extends CI_Controller{

	
	public function index(){
		
		$data['title'] = 'Latest Post';
		$this->load->model('Posts_model');

		$data['posts'] = $this->Posts_model->get_posts(); 

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer'); 	
	}

	public function view($slug = NULL){
		$data['posts'] = $this->post_model->get_posts($slug);

		if(empty($data['posts'])){
			show_404();
		}

		$data['title'] = $data['posts']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');

	}
}