<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Show extends CI_Controller
{

	public function index()
	{
	}

	public function apps($id_post)
	{
		$title = array(
			'title'            => 'ModBoyApk | Game Kategori',
			'slide'            => $this->konten_model->slide_front(),

		);
		$data = array(
			'game'			=> $this->konten_model->game_judul(),
			'gamesearch'	=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'show'			=> $this->konten_model->show($id_post),
		);
		$this->load->view('header', $title);
		$this->load->view('view', $data);
		$this->load->view('foother');
	}
}
