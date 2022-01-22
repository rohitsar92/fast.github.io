<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login_model extends CI_Model{

	
	public function getbyusername($username)
	{
		$this->db->where('username',$username);
		$admin = $this->db->get('login')->row_array();

		//print_r($admin);exit;
		return $admin;	
	}

	public function getusername($username)
	{
		$this->db->where('username',$username);
		$admin = $this->db->get('register_users')->row_array();

		//print_r($admin);exit;
		return $admin;	
	}

	public function insert_data($table,$data){
    	$this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function update_data($table,$data){
        // foreach($whr_data as $key=>$value){
        //     $this->db->where($key,$value);
        // }

        $update = $this->db->update($table,$data);
        $this->db->query("UPDATE $table SET id = @num := (@num+1);");
        $this->db->query("ALTER TABLE $table AUTO_INCREMENT = 1;");
        return $update;
    }

    function userget($email){
    	$this->db->select('*');
    	$this->db->from('register_users');
    	$this->db->where('email', $email);
    	// $this->db->where('username', $username);
    	// $this->db->where('password', $password);
    	$query = $this->db->get();
		return $query->row_array();
    }    
}
?>