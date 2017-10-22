<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mod_artikel');
		$this->load->library('cache_method');
	}

	public function index()
	{
		$data['list'] = $this->cache_method->get('Mod_artikel', 'getListAll', 'list-terkini','', true);
		$this->load->view('front/home/index', $data);
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
