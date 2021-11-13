<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_app extends CI_Controller
{

	public function index()
	{
	}

	public function views_game()
	{
		$meta = $this->konten_model->meta_game();
		foreach ($meta as $met) {
			$title = array(
				'title'		=> $met['title'],
				'deskripsi' => $met['description'],
				'keyword' 	=> $met['keyword'],
				'icon_32' 	=> $met['icon_32'],
				'icon_128' 	=> $met['icon_128'],
				'icon_192' 	=> $met['icon_192'],
				'logo' 		=> $met['logo'],
				'slide'		=> $this->konten_model->slide_front(),
			);
		}

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
		$meta = $this->konten_model->meta_apk();
		foreach ($meta as $met) {
			$title = array(
				'title'		=> $met['title'],
				'deskripsi' => $met['description'],
				'keyword' 	=> $met['keyword'],
				'icon_32' 	=> $met['icon_32'],
				'icon_128' 	=> $met['icon_128'],
				'icon_192' 	=> $met['icon_192'],
				'logo' 		=> $met['logo'],
				'slide'		=> $this->konten_model->slide_front(),
			);
		}
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
	public function views_tutorial()
	{
		$meta = $this->konten_model->meta_tutorial();
		foreach ($meta as $met) {
			$title = array(
				'title'		=> $met['title'],
				'deskripsi' => $met['description'],
				'keyword' 	=> $met['keyword'],
				'icon_32' 	=> $met['icon_32'],
				'icon_128' 	=> $met['icon_128'],
				'icon_192' 	=> $met['icon_192'],
				'logo' 		=> $met['logo'],
				'slide'		=> $this->konten_model->slide_front(),
			);
		}
		$data = array(

			'tutorial'	=> $this->konten_model->tutorial_judul(),
			'game'		=> $this->konten_model->game_front(),
			'kategori'	=> $this->konten_model->kategori_front(),
			'app'		=> $this->konten_model->app_front(),
			'media'		=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_tutorial', $data);
		$this->load->view('foother');
	}
}
