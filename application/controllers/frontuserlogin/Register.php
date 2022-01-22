<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('frontuserlogin/Admin_login_model');
    }

	function index(){
		$this->load->view('frontuserlogin/register');
	}

	private function hash_password($password){
         return password_hash($password, PASSWORD_BCRYPT);
       }

	function insertuser(){

		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			"username"=>$username,
			"password"=>$this->hash_password($password),
			"email"=>$email
		);
		$valuealready = $this->Admin_login_model->userget($email);
		if($valuealready['email'] == $email){
			//echo "email is already exists";
			$this->session->set_flashdata('message','email is already exists');
			redirect('frontuserlogin/Register/index','Refresh');
		}else{
			$this->Admin_login_model->insert_data('register_users',$data);
			$this->session->set_flashdata('message','your email is register');
			redirect('frontuserlogin/Register/userlogin','Refresh');
			
		}	
	}

	function userlogin(){
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == true){
			$username = $this->input->post('username');
			$valuealready  = $this->Admin_login_model->getusername($username);
			//print_r($valuealready);
			if(!empty($valuealready) && $valuealready['username'] == $username){

				$data['username'] = $valuealready['username'];
				$password = $this->input->post('password');
				if(password_verify($password, $valuealready['password']) == true){

					$adminArray['valuealready_id'] = $valuealready['id'];
					$adminArray['username'] = $valuealready['username'];
					$this->session->set_userdata('userlogin', $adminArray);

					$this->load->view('admin/headerfooter/header', $data);
					$this->load->view('admin/dashboard');
					$this->load->view('admin/headerfooter/footer');

				}else{
					$this->session->set_flashdata('mess', 'username and password is incorrect');
					$this->load->view('frontuserlogin/Login');
				}
			}else{
				$this->session->set_flashdata('mess', 'username and password is incorrect');
				$this->load->view('frontuserlogin/Login');
			}
		}else{

			$this->load->view('frontuserlogin/Login');

		}
	}

	function userlogout(){

		$this->session->unset_userdata('userlogin');
		redirect(base_url().'frontuserlogin/Register/userlogin','Refresh');


	}
 }

?>