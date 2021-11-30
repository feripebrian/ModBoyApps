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
			'game'			=> $this->konten_model->game_front(),
			'app'			=> $this->konten_model->app_front(),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
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
			'psx'			=> $this->konten_model->psx_home(),
			'ps2'			=> $this->konten_model->ps2_home(),
			'psp'			=> $this->konten_model->psP_home(),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'show'			=> $this->konten_model->show_tutorial($uri),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('read', $data);
		$this->load->view('foother');
	}
	public function emulator($id, $uri)
	{
		$view = $this->konten_model->show_meta_emulator($id, $uri);
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
			'psx'			=> $this->konten_model->psx_home(),
			'ps2'			=> $this->konten_model->ps2_home(),
			'psp'			=> $this->konten_model->psP_home(),
			'tutorial'		=> $this->konten_model->tutorial_home(),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'emulator_kat'	=> $this->konten_model->emulator_kategori_front(),
			'emulator'		=> $this->konten_model->show_emulator($id, $uri),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('emulator', $data);
		$this->load->view('foother');
	}

	public function rom($id, $uri)
	{
		$view = $this->konten_model->show_meta_rom($id, $uri);
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
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'emulator_kat'	=> $this->konten_model->emulator_kategori_front(),
			'tutorial'		=> $this->konten_model->tutorial_home(),
			'rom'			=> $this->konten_model->show_rom($id, $uri),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('rom', $data);
		$this->load->view('foother');
	}
}
