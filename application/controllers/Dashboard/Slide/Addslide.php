<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addslide extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add slide');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/slide/addslide');
		$this->load->view('dashboard/foother');
	}

	public function slide_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_slide();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/slide/addslide/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/slide/addslide/');
		}
	}
}
