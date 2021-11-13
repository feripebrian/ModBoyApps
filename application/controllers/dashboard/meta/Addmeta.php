<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addmeta extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Meta');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/meta/addmeta');
		$this->load->view('dashboard/foother');
	}

	public function meta_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_meta();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/meta/addmeta/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/meta/addmeta/');
		}
	}
}
