<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function index(){
		$data['main_content'] = 'com_login/login_form';
		$this->load->view('template/index', $data);
	}
	
	function validate_cred(){
		$this->load->model('models_user');
		$query = $this->models_user->validasi();
		
		if ($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => True
			);
			$this->session->set_userdata($data);
			redirect('site/member_area');
		} else {
			$this->index();
		}
	}
	
	function signup(){
		$data['main_content'] = 'com_signup/signup_form';
		$this->load->view('template/index', $data);
	}
	
	function create_member(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Nama Depan', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Nama Belakang', 'trim|requires');
		$this->form_validation->set_rules('email_address', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password', 'Password Konfirmasi', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('com_signup/signup_form');
		} else {
			$this->load->model('models_user');
			if ($query = $this->models_user->buat_akun()){
				$data['main_content'] = 'com_signup/signup_success';
				$this->load->view('template/index', $data);
			} else {
	  			$this->load->view('com_signup/signup_form');
			}
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
}