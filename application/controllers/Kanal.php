<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kanal extends CI_Controller {

	function __construct() {
		parent::__construct();
		// if(empty($_SESSION['id'])){
		// 	redirect(base_url('login'));
		// }
		$this->load->model('Mod_artikel');
	}

	public function index($kanal)
	{

		$data['list'] = $this->Mod_artikel->getListKanal($kanal);
		$this->load->view('front/home/index', $data);
	}

	public function detail()
	{
		$kanal = (string)$this->uri->segment(3);
		echo $kanal;
		// $data['detail'] = $this->Mod_artikel->detail($id);
		// if(empty($data['detail'])) {
		// 	redirect(base_url('404'));
		// }
		//
		// $this->load->view('front/detail/index', $data);
	}


}
