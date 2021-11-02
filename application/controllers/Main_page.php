<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_page extends CI_Controller
{

	public function index()
	{
		$title = array(
			'title'			=> 'ModBoyApk',
			'slide'			=> $this->konten_model->slide_front(),

		);
		$data = array(
			'game'			=> $this->konten_model->game_front(),
			'kategori'		=> $this->konten_model->kategori_front(),
			'app'			=> $this->konten_model->app_front(),
		);
		$this->load->view('header', $title);
		$this->load->view('main_page', $data);
		$this->load->view('foother');
	}
}
