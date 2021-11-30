<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listemulator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}
	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Emulator');
		$data = array(
			'emulator'    		=> $this->konten_model->emulator(),
			'emulator_kategori'	=> $this->konten_model->emulator_kategori(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator/listemulator', $data);
		$this->load->view('dashboard/foother');
	}

	function emulator_hapus($id)
	{
		$where = array('id_post' => $id);
		$this->konten_model->hapus_emulator($where, 'post');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/emulator/listemulator/');
	}
}
