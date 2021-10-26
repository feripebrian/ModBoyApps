<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editkategori extends CI_Controller
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

	public function kategori_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Kategori');
		$data = array(
			'kategori_edit'	=> $this->konten_model->kategori_edit($id)
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/kategori/editkategori', $data);
		$this->load->view('dashboard/foother');
	}


	function kategori_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_kategori($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/kategori/editkategori/kategori_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/kategori/editkategori/kategori_edit/' . $id);
		}
	}
}
