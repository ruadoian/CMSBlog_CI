<?php 

class Comments_model extends CI_Model{

	public function create_comment($post_id){
		$data = array(
			'id' => $post_id,
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'body' => $this->input->post('body')
			);

		return $this->db->insert('comments',$data);
	}
	

}