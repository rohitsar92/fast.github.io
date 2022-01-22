<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		//echo password_hash('admin', PASSWORD_DEFAULT);

		// $admin = $this->session->userdata('admin');
  //       if (!empty($admin)) {
  //           redirect(base_url().'admin/home');
  //       }

		$this->load->library('form_validation');
		$this->load->view('admin/login/login');

		
	}

	public function authenticate(){
		$this->load->library('form_validation');
		$this->load->model('admin/Admin_login_model');

		
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() == true ) {
			//success
			$username = $this->input->post('username');
			$admin = $this->Admin_login_model->getbyusername($username);
			$data['username'] = $admin['username'];
			//print_r($admin['username']);exit;

			if (!empty($admin)) {
				$password = $this->input->post('password');
				if (password_verify($password, $admin['password']) == true) {
					$adminArray['admin_id'] = $admin['id'];
					$adminArray['username'] = $admin['username'];
					$this->session->set_userdata('admin', $adminArray);
					$this->load->view('admin/headerfooter/header',$data);
					$this->load->view('admin/dashboard');
					$this->load->view('admin/headerfooter/footer');
				}
				else{
					$this->session->set_flashdata('msg', 'username and password is incorrect');
				    redirect(base_url().'admin/login/index');
				}

			}else{
				$this->session->set_flashdata('msg', 'username and password is incorrect');
				redirect(base_url().'admin/login/index');
			}
		} else {
			$this->load->view('admin/login');
			//form error
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		redirect(base_url().'admin/login');
	}
}