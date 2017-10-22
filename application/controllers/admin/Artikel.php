<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(empty($_SESSION['id'])){
			redirect(base_url('login'));
		}
		$this->load->model('Mod_artikel');
		$this->load->model('Mod_kategori');
		$this->load->library('cache_method');

	}

	public function index()
	{
		$this->load->view('admin/artikel/index',  array('list' => $this->Mod_artikel->getList($_SESSION['id'])));
	}

	public function view()
	{
		$id = $this->uri->segment(4);
		if(is_numeric($id)){
			$data = $this->Mod_artikel->detail($id);
			$this->load->view('admin/artikel/view',  array('data' => $data[0]));
		}
	}

	public function create()
	{
		$kategori = $this->Mod_kategori->getList();
		$this->load->view('admin/artikel/insert', array('kategori' => $kategori));
	}

	public function create_post()
	{
		$data = array(
			'id_kategori' 	=> $_POST['id_kategori'],
			'id_user' 		=> $_SESSION['id'],
			'id_foto' 		=> $_POST['id_foto'],
			'judul' 		=> $_POST['judul'],
			'isi' 			=> $_POST['isi'],
			'created_date' 	=> date("Y-m-d G:i:sa"),
			'updated' 		=> date("Y-m-d G:i:sa"),
			'deleted' 		=> '0',
		);
		$insert = $this->db->insert('tbl_artikel', $data);
		if($insert){
			$this->cache_method->clearCache(array('list-terkini'));
			$this->session->set_flashdata('result', '<h3>berhasil di input</h3>');
			redirect(base_url('admin/artikel'));
		} else {
			$this->session->set_flashdata('result', '<h3>gagal insert ke database</h3>');
			redirect(base_url('admin/artikel'));
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(4);
		if(is_numeric($id) and (!empty($id))){
			$data = $this->Mod_artikel->detail($id);
			$kategori = $this->Mod_kategori->getList();
			$this->load->view('admin/artikel/edit', array('kategori' => $kategori, 'detail' => $data[0]));
		}
	}

	public function update_post()
	{
		$data = array(
			'id_kategori' 	=> $_POST['id_kategori'],
			'id_user' 		=> $_SESSION['id'],
			'id_foto' 		=> $_POST['id_foto'],
			'judul' 		=> $_POST['judul'],
			'isi' 			=> $_POST['isi'],
			'created_date' 	=> date("Y-m-d G:i:sa"),
			'updated' 		=> date("Y-m-d G:i:sa"),
			'deleted' 		=> '0',
		);
		$this->db->set($data);
		$this->db->where('id', $_POST['id']);
		$update = $this->db->update('tbl_artikel', $data);
		if($update){
			$this->cache_method->clearCache(array('list-terkini'));
			$this->session->set_flashdata('result', '<h4>berhasil di update</h4>');
			redirect(base_url('admin/artikel'));
		} else {
			$this->session->set_flashdata('result', '<h4>gagal update ke database</h4>');
			redirect(base_url('admin/artikel'));
		}
	}

	public function edit_post()
	{

	}




}
