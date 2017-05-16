<?php

class Categories extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$this->load->model('category_model');
		$this->load->model('posts_model');//used in index to get the categories via post_model
	}

	public function index(){
		$data['title'] = 'Categories';

		$data['categories'] = $this->posts_model->get_categories();

		$this->load->view('templates/header');
		$this->load->view('categories/index',$data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Create Category Post';
		$this->form_validation->set_rules('category_name' , 'Name', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('categories/create',$data);
			$this->load->view('templates/footer');
		}else{
			$this->category_model->create_category();
			redirect('categories');
		}
	}

	public function posts($id){
		$data['title'] = $this->category_model->get_category($id)->name; 
		$data['posts'] = $this->posts_model->get_posts_by_category($id);

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');

	}
}