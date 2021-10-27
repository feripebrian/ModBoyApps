<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listslide extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Slide');
		$data = array(
			'slide'    => $this->konten_model->slide_show()
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/slide/listslide', $data);
		$this->load->view('dashboard/foother');
	}

	function slide_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_slide($where, 'slide');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/slide/listslide/');
	}
}
