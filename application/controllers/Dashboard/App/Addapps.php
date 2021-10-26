<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addapps extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Apps');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/app/addapps');
		$this->load->view('dashboard/foother');
	}

	public function app_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_app();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/app/addapps/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/app/addapps/');
		}
	}
}
