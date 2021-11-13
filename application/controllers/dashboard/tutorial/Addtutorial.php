<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addtutorial extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Tutorial');

		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/tutorial/addtutorial');
		$this->load->view('dashboard/foother');
	}

	public function tutorial_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_tutorial();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/tutorial/addtutorial/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/tutorial/addtutorial/');
		}
	}
}
