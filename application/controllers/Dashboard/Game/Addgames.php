<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addgames extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Game');
		$data = array(
			'kategori_game'	=> $this->konten_model->kategori_game(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/game/addgames', $data);
		$this->load->view('dashboard/foother');
	}

	public function game_add()
	{
		if ($this->input->post('submit')) {
			$this->konten_model->tambah_game();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/game/addgames/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/game/addgames/');
		}
	}
}
