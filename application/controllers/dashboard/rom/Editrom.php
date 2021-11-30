<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editrom extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit rom');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/rom/editrom');
		$this->load->view('dashboard/foother');
	}

	public function rom_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Game');
		$data = array(
			'kategori_emulator'	=> $this->konten_model->emulator_kat(),
			'rom_edit'    		=> $this->konten_model->rom_edit($id),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/rom/editrom', $data);
		$this->load->view('dashboard/foother');
	}


	function rom_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_rom($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/rom/editrom/rom_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/rom/editrom/rom_edit/' . $id);
		}
	}
}
