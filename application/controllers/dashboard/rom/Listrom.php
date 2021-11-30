<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listrom extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}
	public function index()
	{
		$title = array('title' => 'ModBoyApps | List rom');
		$data = array(
			'rom'    => $this->konten_model->rom(),
			'emulator_kategori'	=> $this->konten_model->emulator_kategori(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/rom/listrom', $data);
		$this->load->view('dashboard/foother');
	}

	function rom_hapus($id)
	{
		$where = array('id_post' => $id);
		$this->konten_model->hapus_rom($where, 'post');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/rom/listrom/');
	}
}
