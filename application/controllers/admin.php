<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username') !== NULL){
			if($this->session->userdata('role') !== 'ADMIN'){
				header("Location: welcome");
				exit();
			}else{
				$data = ['title' => 'ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata()];
				$this->load->view('template/inc/header', $data);
				$this->load->view('template/index');
				$this->load->view('template/inc/footer');
			}
		}else{
			header("Location: login");
		}
	}
}
