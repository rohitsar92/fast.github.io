<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {

	
	public function index()
	{

		$this->load->view('admin/headerfooter/header');
		$this->load->view('admin/home/pageone');
		$this->load->view('admin/headerfooter/footer');
	}

	function upload(){
		$this->load->library('upload');
		$this->load->model('admin/Admin_login_model');
		$config = array(
			'upload_path' => './public/images',
			'allowed_types' => 'gif|jpg|png',
			// 'width'=>500,
			// 'height'=>200,
			//'max_size' => 26200,
			'encrypt_name'=>true
		);

		$this->load->library('upload', $config);
        $this->upload->initialize($config);

		if ($this->upload->do_upload('image')) {

			// $error = array('error' => $this->upload->display_errors());

			// print_r($error);exit;
			
			$data = $this->upload->data();

			//$this->load->library('image_lib');

			$config2 = array(
				'image_library' => 'gd2',
				'source_image' => './public/images/' . $data['file_name'],
				'create_thumb' => false,
                'maintain_ratio' => true,
				'width' => 75,
				'height' => 50,
				'dynamic_output'=>true,
				'new_image' => './public/images/thumb/' . $data['file_name'],

			);
			$this->load->library('image_lib', $config2);
			$this->image_lib->resize();
			if (!$this->image_lib->resize())
			{
			  var_dump($this->image_lib->display_errors());exit;
			}
			return true;
			//$this->image_lib->clear();

			///upload in database

			// $arr_data['image'] = $data['file_name'];
			// $arr_data['description'] = $this->input->post('text');
			// print_r($arr_data);exit;
			// $result = $this->Admin_login_model->insert_data('home_slider_one',$arr_data);
		}

	}
 }
	
