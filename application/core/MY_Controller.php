<?php

class MY_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('category_model');
		$this->load->model('posts_model');//used in index to get the categories via post_model
	}
}