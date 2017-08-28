<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function view_artikel()
	{
		$id = $this->uri->segment(3);
		if(is_numeric($id)){
			$query = $this->db->query("SELECT a.`id`, a.`judul`, a.`isi`, a.`created_date`, a.`updated`, k.`nama` kategori, f.`file_name` foto FROM tbl_artikel a
				LEFT JOIN tbl_kategori k
				ON a.`id_kategori` = k.`id`
				LEFT JOIN tbl_foto f
				ON f.`id_rev` = a.`id` AND f.`id_kategori` = a.`id_kategori`
				WHERE a.`id` = '$id' AND a.`deleted` = '0'
			");
			$data = $query->result();
			$this->load->view('admin/artikel/view',  array('data' => $data[0]));
		}
	}

	public function create_artikel()
	{
		$query = $this->db->query("select * from tbl_kategori where deleted = '0'");
		$kategori = $query->result();

		$this->load->view('admin/artikel/insert', array('kategori' => $kategori));
	}

	public funtion create_post()
	{

	}

	public function edit_artikel()
	{
		$this->load->view('admin/artikel/edit');
	}

	public function artikel3()
	{
		$query = $this->db->query("SELECT a.`id`, a.`judul`, a.`isi`, a.`created_date`, a.`updated`, k.`nama` kategori, f.`file_name` foto FROM tbl_artikel a
			LEFT JOIN tbl_kategori k
			ON a.`id_kategori` = k.`id`
			LEFT JOIN tbl_foto f
			ON f.`id_rev` = a.`id` AND f.`id_kategori` = a.`id_kategori`
			WHERE a.`id_user` = '1' AND a.`deleted` = '0'
		");
		$data = $query->result();
		$this->load->view('admin/artikel/index',  array('list' => $data));
	}



}
