<?php


class Category_model extends CI_Model{

	public function create_category(){
		//$query = $this->db->get_where("posts", "id = $id");
		//return $query->row_array();

		//$this->db->order_by('name');
		/*echo $category_name;
		$query = $this->db->get_where("categories","name = $category_name");
		return $query->row_array();
		die();
*/
		$data = array(
			'name' => $this->input->post('category_name')
			);
		$this->db->insert('categories',$data);
	}

	public function get_category($id){
		$query = $this->db->get_where('categories', array("id" => $id));
		return $query->row();
	}
}