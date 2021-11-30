<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addrom extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add rom');
		$data = array(
			'kategori_emulator'    => $this->konten_model->emulator_kat(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/rom/addrom', $data);
		$this->load->view('dashboard/foother');
	}

	public function rom_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_rom();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/rom/addrom/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/rom/addrom/');
		}
	}
}
