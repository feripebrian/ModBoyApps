<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{

	public function index()
	{
	}

	public function apps($kategori, $uri)
	{
		$view = $this->konten_model->show_meta_apps($kategori, $uri);
		foreach ($view as $v) {
			$title = array(
				'meta'		=> $this->konten_model->meta_show(),
				'slide'		=> $this->konten_model->slide_front(),
				'title' 	=> $v['title'],
				'deskripsi' => $v['deskripsi'],
				'keyword' 	=> $v['keyword'],
				'icon_32' 	=> $v['icon_32'],
				'logo' 		=> $v['logo'],

			);
		}

		$data = array(
			'game'			=> $this->konten_model->game_judul(),
			'gamesearch'	=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'show'			=> $this->konten_model->show_apk($kategori, $uri),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('view', $data);
		$this->load->view('foother');
	}

	public function tutorial($uri)
	{
		$view = $this->konten_model->show_meta_tutorial($uri);
		foreach ($view as $v) {
			$title = array(
				'meta'		=> $this->konten_model->meta_show(),
				'slide'		=> $this->konten_model->slide_front(),
				'title' 	=> $v['title'],
				'deskripsi' => $v['deskripsi'],
				'keyword' 	=> $v['keyword'],
				'icon_32' 	=> $v['icon_32'],
				'logo' 		=> $v['logo'],
			);
		}
		$data = array(
			'game'			=> $this->konten_model->game_judul(),
			'gamesearch'	=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'show'			=> $this->konten_model->show_tutorial($uri),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('read', $data);
		$this->load->view('foother');
	}
}
