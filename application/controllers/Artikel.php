<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('front/home/index');
	}

	public function test_query()
	{
		$query = $this->db->query("select * from tbl_user");
		$data = $query->result();
		print_r($data);
		// $this->load->view('welcome_message');
	}
}
