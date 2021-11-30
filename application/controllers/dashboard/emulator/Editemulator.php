<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editemulator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit emulator');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator/editemulator');
		$this->load->view('dashboard/foother');
	}

	public function emulator_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Game');
		$data = array(
			'kategori_emulator'    => $this->konten_model->emulator_kat(),
			'emulator_edit'    => $this->konten_model->emulator_edit($id),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/emulator/editemulator', $data);
		$this->load->view('dashboard/foother');
	}


	function emulator_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_emulator($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/emulator/editemulator/emulator_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/emulator/editemulator/emulator_edit/' . $id);
		}
	}
}
