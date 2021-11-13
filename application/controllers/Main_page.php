<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_page extends CI_Controller
{

	public function index()
	{
		$meta = $this->konten_model->meta_home();
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
			'game'			=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('main_page', $data);
		$this->load->view('foother');
	}
}
