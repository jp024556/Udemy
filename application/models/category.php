<?php
	class category extends CI_Model{

		# Function to fetch category from database
		public function get_category(){
			$q = $this->db->get('category');
			$result = $q->result();
			// Returning fetched categories
			return $result;
		}

		# Function to edit category
		public function edit_category($cat_id, $cat_name){
			$this->db->set('cat_name', $cat_name); //value that used to update column  
			$this->db->where('cat_id', $cat_id); //which row want to upgrade  
			$this->db->update('category');  //table name
		}

		# Function to fetch category by id
		public function get_categoryById($id){
			$q = $this->db->where('cat_id', $id)->get('category');
			$result = $q->result();
			// Returning fetched categories
			return $result;
		}

		# Function to delete category by id
		public function remove_category($id){
		  $this->db->where('cat_id', $id);
		  $this->db->delete('category');
		}

		# Function to add category
		function add_category($data){ 
		  $this->db->insert('category', $data);
		 }
	}
?>