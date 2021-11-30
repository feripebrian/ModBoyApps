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
			'psx'			=> $this->konten_model->psx_home(),
			'ps2'			=> $this->konten_model->ps2_home(),
			'psp'			=> $this->konten_model->psP_home(),
			'game'			=> $this->konten_model->game_home(),
			'apk'			=> $this->konten_model->apk_home(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'tutorial'		=> $this->konten_model->tutorial_judul(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_tutorial', $data);
		$this->load->view('foother');
	}
	public function views_emulator_kat()
	{
		$meta = $this->konten_model->meta_emulator_kat();
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
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'emulator_kat'	=> $this->konten_model->emulator_kategori_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_emulator_kat', $data);
		$this->load->view('foother');
	}
	public function views_emulator($id)
	{
		$meta = $this->konten_model->meta_emulator();
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
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'emulator'		=> $this->konten_model->emulator_front($id),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_emulator', $data);
		$this->load->view('foother');
	}

	public function views_rom_kat()
	{
		$meta = $this->konten_model->meta_rom_kat();
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
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_rom_kat', $data);
		$this->load->view('foother');
	}

	public function views_rom($id)
	{
		$meta = $this->konten_model->meta_rom();
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

			'rom'			=> $this->konten_model->rom_front($id),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('views_rom', $data);
		$this->load->view('foother');
	}
}
