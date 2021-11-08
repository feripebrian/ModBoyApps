<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Show extends CI_Controller
{

	public function index()
	{
	}

	public function apps($url)
	{
		$title = array(
			'title'            => 'ModBoyApk | Game Kategori',
			'meta'			=> $this->konten_model->meta_show(),
			'slide'            => $this->konten_model->slide_front(),

		);
		$data = array(
			'game'			=> $this->konten_model->game_judul(),
			'gamesearch'	=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'show'			=> $this->konten_model->show($url),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('view', $data);
		$this->load->view('foother');
	}
}
