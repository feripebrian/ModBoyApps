<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listemulatorkategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Emulator Kategori');
		$data = array(
			'emulator_kategori'    => $this->konten_model->emulator_kategori()
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator_kategori/listemulatorkategori', $data);
		$this->load->view('dashboard/foother');
	}


	function emulator_kategori_hapus($id)
	{
		$where = array('id_kategori' => $id);
		$this->konten_model->hapus_emulator_kategori($where, 'emulator_kategori');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/emulator_kategori/listemulatorkategori/');
	}
}
