<?php 

class Posts extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Posts_model');
	}

	public function index(){
		
		$data['title'] = 'Latest Post';
		//$this->load->model('Posts_model');

		$data['posts'] = $this->Posts_model->get_posts(); 

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer'); 	
	}

	public function view($slug = NULL){
		//$this->load->model('Posts_model');
		$data['post'] = $this->Posts_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}
}