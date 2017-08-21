<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	public function index()
	{
		//$this->load->view('admin/home/index');
	}

	public function view()
	{
		$file = $this->uri->segment(3);
		if($file == null) {
			$file = 'default.jpg';
		}
		$source = base_url('assets/images/'.$file);
		$images = imagecreatefromjpeg($source);

		// Set the content type header - in this case image/jpeg
		header('Content-Type: image/jpeg');

		// Output the image
		return imagejpeg($images, NULL, 100);

		// Free up memory
		imagedestroy($images);
	}

	public function picker()
	{
		$query = $this->db->query("select * from tbl_foto where deleted = '0'");
		$data = $query->result();

		$this->load->view('admin/images/picker', array('foto' => $data));
	}

}
