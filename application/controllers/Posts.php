<?php 

class Posts extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Posts_model');
	}

	public function index(){
		$data['title'] = 'Latest Post';

		$data['posts'] = $this->Posts_model->get_posts(); 

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer'); 	
	}

	public function view($slug = NULL){
		$data['post'] = $this->Posts_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create',$data);
			$this->load->view('templates/footer');	
		}else{
			$this->Posts_model->create_posts();
			redirect('posts');
		}		
	}

	public function delete($id){
		$this->Posts_model->delete_posts($id);
		redirect('posts');
	}

	public function edit($id){
		$data['post'] = $this->Posts_model->edit_posts($id);

		if(empty($data['post'])){
			echo 'empty';
		}

		$data['title'] = "Edit Title";

			$this->load->view('templates/header');
			$this->load->view('posts/edit',$data);
			$this->load->view('templates/footer');	
	}

	public function update(){
		$this->Posts_model->update_posts();
		redirect('posts');
	}	

}




