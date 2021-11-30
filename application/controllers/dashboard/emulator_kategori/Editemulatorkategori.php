<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editemulatorkategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Kategori');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/kategori/editkategori');
		$this->load->view('dashboard/foother');
	}

	public function emulator_kategori_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Emulator Kategori');
		$data = array(
			'emulator_kategori_edit'    => $this->konten_model->emulator_kategori_edit($id)
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator_kategori/editemulatorkategori', $data);
		$this->load->view('dashboard/foother');
	}


	function emulator_kategori_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_emulator_kategori($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/emulator_kategori/editemulatorkategori/emulator_kategori_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/emulator_kategori/editemulatorkategori/emulator_kategori_edit/' . $id);
		}
	}
}
