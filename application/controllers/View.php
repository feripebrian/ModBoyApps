<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{

	public function index()
	{
	}

	public function views_game()
	{
		$title = array(
			'meta'			=> $this->konten_model->meta_show(),
			'title'			=> 'ModBoyApk | Aplikasi',
			'slide'			=> $this->konten_model->slide_front(),
		);
		$data = array(
			'game'			=> $this->konten_model->game_judul(),
			'gamesearch'	=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_game', $data);
		$this->load->view('foother');
	}

	public function views_apps()
	{
		$title = array(
			'meta'			=> $this->konten_model->meta_show(),
			'title'			=> 'ModBoyApk | Aplikasi',
			'slide'			=> $this->konten_model->slide_front(),
		);
		$data = array(
			'app'			=> $this->konten_model->app_judul(),
			'appsearch'		=> $this->konten_model->app_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'game'			=> $this->konten_model->game_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_apps', $data);
		$this->load->view('foother');
	}
}
