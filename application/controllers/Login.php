<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// error_reporting(0);
		$this->load->view('admin/login/index');
	}

	public function post()
	{
		$email 		= $this->db->escape($_POST['email']);
		$password 	= $this->db->escape(md5($_POST['pass']));

		$query = $this->db->query("select * from tbl_user where email = $email and password = $password and deleted = '0'");
		$user = $query->result();
		if(empty($user)) {
			$this->session->set_flashdata('result_login', 'email dan database tidak ditemukan.');
			redirect(base_url('login'));
		} else {
			$data = $user[0];
			$this->session->set_flashdata('result_login', 'selamat datang.');
			$set_session = array(
				'name'  	=> $data->nama,
				'email'  	=> $data->email,
				'id'  		=> $data->id,
        'level'  	=> $data->level,
        'logged_in' => TRUE
			);
			$this->session->set_userdata($set_session);
			redirect(base_url('admin'));
		}

	}
}
