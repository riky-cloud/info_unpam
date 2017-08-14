<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('front/home/index');
	}
	
	public function list()
	{
		$query = $this->db->query("SELECT a.`id`, a.`judul`, a.`isi`, a.`created_date`, a.`updated`, k.`nama` kategori, f.`file_name` foto FROM tbl_artikel a
			LEFT JOIN tbl_kategori k
			ON a.`id_kategori` = k.`id`
			LEFT JOIN tbl_foto f
			ON f.`id_rev` = a.`id` AND f.`id_kategori` = a.`id_kategori`
			WHERE a.`id_user` = '1' AND a.`deleted` = '0'
		");
		$data = $query->result();
		print_r($data);
		//$this->load->view('front/home/index', array('list' => $data));
	}
	
	public function test_query()
	{
		$query = $this->db->query("select * from tbl_user");
		$data = $query->result();
		print_r($data);
		// $this->load->view('welcome_message');
	}
}
