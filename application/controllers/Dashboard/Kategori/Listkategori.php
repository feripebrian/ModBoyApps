<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listkategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Kategori');
		$data = array(
			'kategori'	=> $this->konten_model->kategori_show()
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/kategori/listkategori', $data);
		$this->load->view('dashboard/foother');
	}

	function kategori_hapus($id)
	{
		$where = array('id_kategori' => $id);
		$this->konten_model->hapus_kategori($where, 'kategori');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/kategori/listkategori/');
	}
}
