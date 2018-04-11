<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category extends CI_Controller {

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
		
		$data = ['title' => 'Add Category | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata()];
		$this->load->view('template/inc/header', $data);
		$this->load->view('template/add_category');
		$this->load->view('template/inc/footer');
		if($this->input->post('cat_name')){
			$cat_name = $this->input->post('cat_name');
			$data = ['cat_name' => $cat_name];
		// Loading model category
			$this->load->model('category');
			$this->category->add_category($data);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Category added successfully.</div>');
			redirect("add_category");

	}
	}
}
