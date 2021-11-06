<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addmedia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Social Media');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/socialmedia/addmedia');
		$this->load->view('dashboard/foother');
	}

	public function media_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_media();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/socialmedia/addmedia/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/socialmedia/addmedia/');
		}
	}
}
