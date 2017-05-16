<?php

class Posts_model extends CI_Model{

	public function get_posts($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('posts.id','DESC');
			$this->db->join('categories','categories.id = posts.category_id');
			$query = $this->db->get('posts');
			
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('posts.slug' => $slug));			
		return $query->row_array();
	}

	public function create_posts($post_image){
		$slug = url_title($this->input->post('title'));
		
		$data = array(
			'title' => $this->input->post('title'),
			'slug' 	=> $slug,
			'body'	=> $this->input->post('body'),
			'category_id' => $this->input->post('category_id'),
			'post_image' => $post_image
			);

		return $this->db->insert('posts',$data);
	}

	public function delete_posts($id){
		$this->db->where('id',$id);
		$this->db->delete('posts');
		return true;
	}

	public function edit_posts($id){
		$query = $this->db->get_where("posts", "id = $id");
		return $query->row_array();
	}

	public function update_posts($id){
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body')
			);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts',$data);
	}

	public function get_categories(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
		//echo "CATEGORIES";
	}

	public function get_posts_by_category($category_id){
		$this->db->order_by('posts.id','DESC');
		$this->db->join('categories','categories.id = posts.category_id');
		$query = $this->db->get_where('posts', array('posts.category_id'=>$category_id));
		return $query->result_array();
	}

}