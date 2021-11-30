<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

	public function index()
	{
		$key = $this->input->post('keyword');
		print_r($key);
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
			'sear'			=> $this->konten_model->search($key),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('search', $data);
		$this->load->view('foother');
	}

	public function searc()
	{

		$key = $this->input->post('keyword');
		print_r($key);
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
			'sear'			=> $this->konten_model->search($key),
			'rom_kat'		=> $this->konten_model->emulator_kategori_front(),
			'kategori_emu'	=> $this->konten_model->emulator_kategori_home(),
			'media'			=> $this->konten_model->media_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('search', $data);
		$this->load->view('foother');
	}
}
