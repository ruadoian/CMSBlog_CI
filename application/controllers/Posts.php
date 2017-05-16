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
		
		$data['categories'] = $this->Posts_model->get_categories();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create',$data);
			$this->load->view('templates/footer');	
		}else{
			//Upload Image
			$config['upload_path'] 		= './assets/images/posts';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size'] 		= '2048';
			//$config['max_width'] 		= '1200';
			//$config['max_height'] 		= '1200';

			$this->load->library('upload', $config);
					
				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					//var_dump($errors);
					$post_image = 'noimage.jpg';
				}else{
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
			$this->Posts_model->create_posts($post_image);
			redirect('posts');
		}		
	}

	public function delete($id){
		$this->Posts_model->delete_posts($id);
		redirect('posts');
	}

	public function edit($id){
		$data['post'] = $this->Posts_model->edit_posts($id);
		$data['categories'] = $this->Posts_model->get_categories();
		
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




