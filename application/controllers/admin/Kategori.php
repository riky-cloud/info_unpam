<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(empty($_SESSION['id'])){
			redirect(base_url('login'));
		}
		$this->load->model('Mod_artikel');
		$this->load->model('Mod_kategori');
	}

	public function index()
	{
		$this->load->view('admin/kategori/index',  array('list' => $this->Mod_kategori->getList()));
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
			'nama' 			=> $_POST['nama'],
			'keterangan' 	=> $_SESSION['keterangan'],
			'created_date' 	=> date("Y-m-d G:i:sa"),
			'updated' 		=> date("Y-m-d G:i:sa"),
			'deleted' 		=> '0',
		);
		$insert = $this->db->insert('tbl_kategori', $data);
		if($insert){
			$this->session->set_flashdata('result', '<h3>berhasil di input</h3>');
			redirect(base_url('admin/kategori'));
		} else {
			$this->session->set_flashdata('result', '<h3>gagal insert ke database</h3>');
			redirect(base_url('admin/kategori'));
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(4);
		if(is_numeric($id) and (!empty($id))){
			$data = $this->Mod_kategori->detail($id);
			$this->load->view('admin/kategori/edit', array('detail' => $data[0]));
		}
	}

	public function update_post()
	{
		$data = array(
			'nama' 			=> $_POST['nama'],
			'keterangan' 	=> $_POST['keterangan'],
			'created_date' 	=> date("Y-m-d G:i:sa"),
			'updated' 		=> date("Y-m-d G:i:sa"),
			'deleted' 		=> $_POST['status'],
		);
		$this->db->set($data);
		$this->db->where('id', $_POST['id']);
		$update = $this->db->update('tbl_kategori', $data);
		if($update){
			$this->session->set_flashdata('result', '<h4>berhasil di update</h4>');
			redirect(base_url('admin/kategori/edit/'.$_POST['id']));
		} else {
			$this->session->set_flashdata('result', '<h4>gagal update ke database</h4>');
			redirect(base_url('admin/kategori/edit/'.$_POST['id']));
		}
	}

	public function edit_post()
	{

	}




}
