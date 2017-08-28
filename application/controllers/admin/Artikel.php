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
			'judul' 		=> $this->db->escape($_POST['judul']),
			'isi' 			=> $this->db->escape($_POST['isi']),
			'created_date' 	=> date("Y-m-d G:i:sa"),
			'updated' 		=> date("Y-m-d G:i:sa"),
			'deleted' 		=> '0',
		);
		$insert = $this->db->insert('tbl_artikel', $data);
		if($insert){
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}

	public function edit()
	{

	}

	public function edit_post()
	{

	}




}
