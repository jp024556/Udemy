<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View_course extends CI_Controller{

	public function index(){

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
		
		$this->load->model('make_course');
		$courses = $this->make_course->get_course();
		$data = ['title' => 'View Course | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'courses' => $courses];
		$this->load->view('template/inc/header', $data);
		$this->load->view('template/view_course');
		$this->load->view('template/inc/footer');
	}

	public function e_id($course_id = NULL){
		$this->load->model('make_course');
		$course = $this->make_course->get_courseById($course_id);
		$this->load->model('category');
		$cat = $this->category->get_category();
		$this->load->model('subcategory');
		$sub_cat = $this->subcategory->get_subcategory();
		$data = ['title' => 'View Course | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'course' => $course, 'cat' => $cat, 'sub_cat' => $sub_cat];
		$this->load->view('template/inc/header', $data);
		$this->load->view('template/add_course');
		$this->load->view('template/inc/footer');
	}

		public function edit($course_id = NULL){
			$course_title = $this->input->post('course_title');
			$course_intro = $this->input->post('course_intro');
			$course_category = $this->input->post('course_category');
			$course_subcategory = $this->input->post('course_subcategory');
			$course_description = $this->input->post('course_description');
			$course_req = $this->input->post('course_req');
			$course_aud = $this->input->post('course_aud');
			$course_get = $this->input->post('course_get');
			$course_price = $this->input->post('course_price');
			if(($course_title && $course_intro && $course_category && $course_subcategory && $course_description && $course_req && $course_aud && $course_get && $course_price) != NULL){


						$update = [
							'course_title' => $course_title,
							'course_demo' => $course_intro,
							'cat_id' => $course_category,
							'sub_cat_id' => $course_subcategory,
							'course_desc' => $course_description,
							'course_req' => $course_req,
							'course_aud' => $course_aud,
							'course_get' => $course_get,
							'course_price' => $course_price
						];


						$this->load->model('make_course');
						$this->make_course->update_course($update, $course_id);
						$course = $this->make_course->get_courseById($course_id);
						$this->load->model('category');
						$cat = $this->category->get_category();
						$this->load->model('subcategory');
						$sub_cat = $this->subcategory->get_subcategory();


						$data = ['title' => 'Add Course | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat' => $cat, 'sub_cat' => $sub_cat, 'course' => $course];
						$this->session->set_flashdata('msg', '<div class="alert alert-info">Course updated successfully.</div>');
						$this->load->view('template/inc/header', $data);
						$this->load->view('template/add_course');
						$this->load->view('template/inc/footer');
			}else{
				$msg = '<div class="alert alert-danger">Any fields cannot be empty!</div>';
				$this->session->set_flashdata('msg', $msg);
				redirect("add_course");
			}
	}

	public function r_id($course_id = NULL){
		$this->load->model('make_course');
		$this->make_course->remove_course($course_id);
		$this->session->set_flashdata('msg', '<div class=" col-md-6 offset-md-3 alert alert-danger">Course deleted successfully.</div>');
		redirect('view_course');
	}

}
?>