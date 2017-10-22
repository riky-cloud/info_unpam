<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(empty($_SESSION['id'])){
			redirect(base_url('login'));
		}
  }

	public function index()
	{
		$this->load->view('admin/home/index');
	}

}
