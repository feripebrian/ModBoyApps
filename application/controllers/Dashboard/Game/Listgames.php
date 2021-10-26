<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listgames extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}
	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Game');
		$data = array(
			'game'	=> $this->konten_model->game_show(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/game/listgames', $data);
		$this->load->view('dashboard/foother');
	}

	function game_hapus($id)
	{
		$where = array('id_post' => $id);
		$this->konten_model->hapus_kategori($where, 'post');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/game/listgames/');
	}
}
