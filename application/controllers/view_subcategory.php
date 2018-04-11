<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_subcategory extends CI_Controller {

	public function index()
	{
		### Checking Required privellege ###
		if($this->session->userdata('username') !== NULL){
			if($this->session->userdata('role') !== 'ADMIN'){
				header("Location: welcome");
				exit();
			}
		}else{
			header('Location: login');
			exit();
		}
		### End Checking Required privellege ###

		// Loading model View_category
		$this->load->model('subcategory');
		// Storing result
		$sub_cat = $this->subcategory->get_subcategory();
		$this->load->model('category');
		$cat = $this->category->get_category();
		$data = ['title' => 'View SubCategory | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'sub_cat' => $sub_cat, 'cat' => $cat];
		$this->load->view('template/inc/header', $data);
		$this->load->view('template/view_subcategory');
		$this->load->view('template/inc/footer');
	}

	public function e_subcat_id($sub_cat_id = NULL){

		### Checking Required privellege ###
		if($this->session->userdata('username') !== NULL){
			if($this->session->userdata('role') !== 'ADMIN'){
				header("Location: welcome");
				exit();
			}
		}else{
			header('Location: login');
			exit();
		}
		### End Checking Required privellege ###

		if($sub_cat_id != NULL){
			$this->load->model('subcategory');
			$sub_cat = $this->subcategory->get_subCategoryById($sub_cat_id);
			$data = ['title' => 'Edit SubCategory | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'sub_cat_id' => $sub_cat[0]->sub_cat_id, 'sub_cat_name' => $sub_cat[0]->sub_cat_name];
			$this->load->view('template/inc/header', $data);
			$this->load->view('template/view_subcategory');
			$this->load->view('template/inc/footer');
		}else{
			$sub_cat_id = $this->input->post('id');
			$sub_cat_name = $this->input->post('sub_cat_name');
			$this->load->model('subcategory');
			$this->subcategory->edit_subcategory($sub_cat_id, $sub_cat_name);
			$this->session->set_flashdata('msg', '<div class="alert alert-success">SubCategory updated successfully.</div>');
			redirect("view_subcategory");
		}
	}

	public function r_id($id = NULL){

		### Checking Required privellege ###
		if($this->session->userdata('username') !== NULL){
			if($this->session->userdata('role') !== 'ADMIN'){
				header("Location: welcome");
				exit();
			}
		}else{
			header('Location: login');
			exit();
		}
		### End Checking Required privellege ###
		
		// Loading model category
			$this->load->model('subcategory');
			$this->subcategory->remove_subcategory($id);
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">SubCategory deleted successfully.</div>');
			redirect("view_subcategory");
	}
}
