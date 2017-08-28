<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(empty($_SESSION['id'])){
			redirect(base_url('login'));
		}
		$this->load->model('Mod_artikel');
	}

	public function index()
	{
		$data['list'] = $this->Mod_artikel->getListAll();
		$this->load->view('front/home/index', $data);
	}


}
