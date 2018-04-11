<?php
class Make_course extends CI_Model{
	# Function to insert new course to database
	public function insert_course($data){
		$this->db->insert('course', $data);
	}

	public function get_course(){
		$q = $this->db->get('course');
			$result = $q->result();
			// Returning fetched courses
			return $result;
	}

	public function get_courseById($id){
		$q = $this->db->where('course_id', $id)->get('course');
			$result = $q->result();
			// Returning fetched courses
			return $result;
	}

	public function update_course($update, $id){
		$this->db->where('course_id', $id);
		$this->db->update('course', $update);
	}

	# Function to delete course by id
		public function remove_course($id){
		  $this->db->where('course_id', $id);
		  $this->db->delete('course');
		}
}
?>