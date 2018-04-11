<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_subcategory extends CI_Controller {

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
		
		if($this->input->post('submit') !== 'Add'){
			// Loading model View_category
			$this->load->model('category');
			// Storing result
			$cat = $this->category->get_category();

			$data = ['title' => 'Add SubCategory | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat' => $cat];
			$this->load->view('template/inc/header', $data);
			$this->load->view('template/add_subcategory');
			$this->load->view('template/inc/footer');
		}
		if($this->input->post('submit') === 'Add'){
			$sub_cat_name = $this->input->post('sub_cat_name');
			$cat_id = $this->input->post('cat_id');
			$data = ['sub_cat_name' => $sub_cat_name, 'cat_id' => $cat_id];
		// Loading model category
			$this->load->model('subcategory');
			$this->subcategory->add_subcategory($data);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">SubCategory added successfully.</div>');
			redirect("add_subcategory");

	}
	}
}