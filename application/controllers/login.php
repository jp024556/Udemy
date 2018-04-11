<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		### Checking if user already loggedin ###
		if($this->session->userdata('username') !== NULL){
			header('Location: welcome');
			exit();
		}
		### End Checking if user already loggedin ###

		# Checking whether user hit Login button or just fetching login-page
		if(!isset($_POST['submit'])){
			// If user fetches login-page
			$this->load->view("template/login-page");
		}else{
			// If user hits Login button
			$this->load->model('validate');
			$username = $this->input->post('username');
			$password = $this->input->post('pwd');
			
			// Validating user login
			if($result = $this->validate->validate_user($username, $password)){
				// Setting session variables
				$session_data = [
					'id' => $result[0]->id,
					'username' => $result[0]->uname,
					'email' => $result[0]->email,
					'role' => $result[0]->role,
					'fname' => $result[0]->fname,
					'lname' => $result[0]->lname
				];
				$this->session->set_userdata($session_data);
				header("Location: admin");
				exit();
			}else{
				echo "Login failed !";
			}
		}
	}
}
