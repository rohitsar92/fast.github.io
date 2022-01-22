<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('haf/header');
		$this->load->view('admin/home/pageone');
		//$this->load->view('haf/footer');
	}

	public function uploada(){
        //$this->load->model('Test_model');
        $this->load->library('upload');

        //print_r($this->input->post('file'));exit;
		$config['upload_path']          = './public/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
         $config['encrypt_name']        = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // $images = array();
        // $ImageCount = count($_FILES['image_name']['name']);
        // for($i = 0; $i < $ImageCount; $i++){
        //     $_FILES['file']['name']       = $_FILES['image_name']['name'][$i];
        //     $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
        //     $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
        //     $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
        //     $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];
        if ($this->upload->do_upload('images')) {
        	
        	print_r($data = $this->upload->data());exit;
            $data = $this->upload->data();
            $uploadImgData[$i]['image_name'] = $data['file_name'];
            if(!empty($uploadImgData)){
            // Insert files data into the database
            $this->Test_model->point($uploadImgData);              
        }else{
            print_r($this->upload->display_errors());
        }
        }else{

        	print_r($this->upload->display_errors());
        }
	}
 }

