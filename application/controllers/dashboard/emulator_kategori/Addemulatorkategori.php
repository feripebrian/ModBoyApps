<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addemulatorkategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Emulator Kategori');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator_kategori/addemulatorkategori');
		$this->load->view('dashboard/foother');
	}

	public function emulator_kategori_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_emulator_kategori();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/emulator_kategori/addemulatorkategori/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/emulator_kategori/addemulatorkategori/');
		}
	}
}
