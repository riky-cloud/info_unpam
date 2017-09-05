<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(empty($_SESSION['id'])){
			redirect(base_url('login'));
		}
		$this->load->model('Mod_foto');
		$this->load->model('Mod_kategori');
	}

	public function index()
	{
		$this->load->view('admin/foto/index',  array('list' => $this->Mod_foto->getList()));
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
		// $new_name 						= $_FILES["foto"]["name"].'_'.time();
		$new_name 						= time();

		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		print_r($_FILES['foto']);
		$config['file_name'] 	= $new_name;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('result', '<h3>gagal upload foto.</h3>');
		}else{
			$data = array('upload_data' => $this->upload->data());
			$data = array(
				'file_name' 	=> $new_name,
				'keterangan' 	=> $_POST['keterangan'],
				'created_date' 	=> date("Y-m-d G:i:sa"),
				'updated' 		=> date("Y-m-d G:i:sa"),
				'deleted' 		=> '0',
			);
			$insert = $this->db->insert('tbl_foto', $data);
			if($insert){
				$this->session->set_flashdata('result', '<h3>berhasil di input</h3>');
				redirect(base_url('admin/foto'));
			} else {
				$this->session->set_flashdata('result', '<h3>gagal insert ke database</h3>');
				redirect(base_url('admin/foto'));
			}
		}

	}

	public function edit()
	{
		$id = $this->uri->segment(4);
		if(is_numeric($id) and (!empty($id))){
			$data = $this->Mod_foto->detail($id);
			$this->load->view('admin/foto/edit', array('detail' => $data[0]));
		}
	}

	public function update_post()
	{
		if(empty($_FILES["foto"])){

			$data = array(
				'keterangan' 	=> $_POST['keterangan'],
				'updated' 		=> date("Y-m-d G:i:sa"),
				'deleted' 		=> $_POST['status'],
			);

			$this->db->set($data);
			$this->db->where('id', $_POST['id']);
			$update = $this->db->update('tbl_foto', $data);
			if($update){
				$this->session->set_flashdata('result', '<h3>berhasil di input3</h3>');
				redirect(base_url('admin/foto/edit/'.$_POST['id']));
			} else {
				$this->session->set_flashdata('result', '<h3>gagal insert ke database3</h3>');
				redirect(base_url('admin/foto/edit/'.$_POST['id']));
			}

		} else {
			$config['upload_path']          = './assets/images/';
			$config['allowed_types']        = 'gif|jpg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('result', '<h3>gagal upload foto.</h3>');
			}else{
				$data_foto = array('upload_data' => $this->upload->data());
				$data = array(
					'file_name' 	=> $data_foto['upload_data']['file_name'],
					'keterangan' 	=> $_POST['keterangan'],
					'created_date' 	=> date("Y-m-d G:i:sa"),
					'updated' 		=> date("Y-m-d G:i:sa"),
					'deleted' 		=> $_POST['status'],
				);
				// print_r($data_foto);
				$this->db->set($data);
				$this->db->where('id', $_POST['id']);
				$update = $this->db->update('tbl_foto', $data);
				if($update){
					$this->session->set_flashdata('result', '<h3>berhasil di input</h3>');
					redirect(base_url('admin/foto/edit/'.$_POST['id']));
				} else {
					$this->session->set_flashdata('result', '<h3>gagal insert ke database</h3>');
					redirect(base_url('admin/foto/edit/'.$_POST['id']));
				}
			}
		}


	}

	public function edit_post()
	{

	}




}
