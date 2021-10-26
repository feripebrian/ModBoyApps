<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editgames extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit game');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/game/editgame');
		$this->load->view('dashboard/foother');
	}

	public function game_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Game');
		$data = array(
			'kategori_game'	=> $this->konten_model->kategori_game(),
			'game_edit'    => $this->konten_model->game_edit($id),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/game/editgames', $data);
		$this->load->view('dashboard/foother');
	}


	function game_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_game($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/game/editgames/game_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/game/editgames/game_edit/' . $id);
		}
	}
}
