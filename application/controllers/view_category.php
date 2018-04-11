<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_category extends CI_Controller {

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
		$this->load->model('category');
		// Storing result
		$cat = $this->category->get_category();
		$data = ['title' => 'View Category | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat' => $cat];
		$this->load->view('template/inc/header', $data);
		$this->load->view('template/view_category');
		$this->load->view('template/inc/footer');
	}

	public function e_cat_id( $cat_id = NULL ) {

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

		if($cat_id != NULL){
			// Loading model category
			$this->load->model('category');

			// Storing result
			$cat = $this->category->get_categoryById($cat_id);
			$data = ['title' => 'View Category | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat_id' => $cat[0]->cat_id, 'cat_name' => $cat[0]->cat_name];
			$this->load->view('template/inc/header', $data);
			$this->load->view('template/view_category');
			$this->load->view('template/inc/footer');
	}else{
		$cat_id = $this->input->post('id');
		$cat_name = $this->input->post('cat_name');
		$this->load->model('category');
		$this->category->edit_category($cat_id, $cat_name);
		$this->session->set_flashdata('msg', '<div class="alert alert-success">Category updated successfully.</div>');
		redirect("view_category");
		}
	}

	public function r_id( $cat_id = NULL ) {
		
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
			$this->load->model('category');
			$this->category->remove_category($cat_id);
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Category deleted successfully.</div>');
			redirect("view_category");

	}
}
