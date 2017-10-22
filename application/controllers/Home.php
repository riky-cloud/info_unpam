<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mod_artikel');
	}

	public function index()
	{
		$data['list'] = $this->Mod_artikel->getListAll();
		$this->load->view('front/home/index', $data);
		// $this->output->cache(60);
		// $this->output->delete_cache('/');
	}

	public function detail()
	{
		$id = (int)$this->uri->segment(3);
		$data['detail'] = $this->Mod_artikel->detail($id);
		if(empty($data['detail'])) {
			redirect(base_url('404'));
		}

		$this->load->view('front/detail/index', $data);
	}


}
