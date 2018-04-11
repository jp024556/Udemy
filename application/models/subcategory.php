<?php
	class subcategory extends CI_Model{

		# Function to fetch category from database
		public function get_subcategory(){
			$q = $this->db->get('subcategory');
			$result = $q->result();
			// Returning fetched categories
			return $result;
		}

		# Function to edit subcategory
		public function edit_subcategory($sub_cat_id, $sub_cat_name){
			$this->db->set('sub_cat_name', $sub_cat_name); //value that used to update column  
			$this->db->where('sub_cat_id', $sub_cat_id); //which row want to upgrade  
			$this->db->update('subcategory');  //table name
		}

		# Function to fetch sucategory by id
		public function get_subCategoryById($id){
			$q = $this->db->where('sub_cat_id', $id)->get('subcategory');
			$result = $q->result();
			// Returning fetched categories
			return $result;
		}

		# Function to delete subcategory by id
		public function remove_subCategory($id){
		  $this->db->where('sub_cat_id', $id);
		  $this->db->delete('subcategory');
		}

		# Function to add subcategory
		function add_subcategory($data){ 
		  $this->db->insert('subcategory', $data);
		 }
	}
?>