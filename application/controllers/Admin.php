<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home/index');
	}

	public function artikel()
	{
		$this->load->view('admin/artikel/index');
	}

}
