<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_course extends CI_Controller{

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
		if($this->input->post('add_course') === NULL){
			$this->load->model('category');
			$cat = $this->category->get_category();
			$this->load->model('subcategory');
			$sub_cat = $this->subcategory->get_subcategory();

			$data = ['title' => 'Add Course | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat' => $cat, 'sub_cat' => $sub_cat];
			$this->load->view('template/inc/header', $data);
			$this->load->view('template/add_course');
			$this->load->view('template/inc/footer');
		}

		if($this->input->post('add_course') === 'add_course'){
			$course_title = $this->input->post('course_title');
			$course_intro = $this->input->post('course_intro');
			$course_category = $this->input->post('course_category');
			$course_subcategory = $this->input->post('course_subcategory');
			$course_description = $this->input->post('course_description');
			$course_req = $this->input->post('course_req');
			$course_aud = $this->input->post('course_aud');
			$course_get = $this->input->post('course_get');
			$course_price = $this->input->post('course_price');
			$course_img_file = $_FILES['course_img']['tmp_name'];
			$course_img_name = $_FILES['course_img']['name'];
			$ext = explode(".", $course_img_name);
			$ext = end($ext);
			$allowed = array('png', 'gif', 'jpg');
			$dest = uniqid().".".$ext;
			$dest1 = FCPATH."assets/course_image/".$dest;
			if(($course_title && $course_intro && $course_category && $course_subcategory && $course_description && $course_req && $course_aud && $course_get && $course_price && $course_img_name) != NULL){
				if(in_array($ext, $allowed)){

					if(move_uploaded_file($course_img_file, $dest1)){

						$insert = [
							'course_title' => $course_title,
							'course_demo' => $course_intro,
							'cat_id' => $course_category,
							'sub_cat_id' => $course_subcategory,
							'course_desc' => $course_description,
							'course_req' => $course_req,
							'course_aud' => $course_aud,
							'course_get' => $course_get,
							'course_price' => $course_price,
							'course_image' => $dest
						];


						$this->load->model('make_course');
						$this->make_course->insert_course($insert);
						$this->load->model('category');
						$cat = $this->category->get_category();
						$this->load->model('subcategory');
						$sub_cat = $this->subcategory->get_subcategory();

						$data = ['title' => 'Add Course | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'cat' => $cat, 'sub_cat' => $sub_cat];
						$this->session->set_flashdata('msg', '<div class="alert alert-info">Course added successfully.</div>');
						$this->load->view('template/inc/header', $data);
						$this->load->view('template/add_course');
						$this->load->view('template/inc/footer');
				}else{
					$msg = '<div class="alert alert-warning">Something went wrong !</div>';
					$this->session->set_flashdata('msg', $msg);
					redirect("add_course");
				}

				}else{
					$msg = '<div class="alert alert-danger">Course image file format <kbd>('.$ext.')</kbd> not supported !</div>';
					$this->session->set_flashdata('msg', $msg);
					redirect("add_course");
				}
			}else{
				$msg = '<div class="alert alert-danger">All fields are required !</div>';
				$this->session->set_flashdata('msg', $msg);
				redirect("add_course");
			}
		}
	}
}
?>