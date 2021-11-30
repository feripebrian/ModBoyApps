<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model('Sitemap_model', 'sitemap');
	}

	public function index()
	{

		$game 		= $this->sitemap->game();
		$apk 		= $this->sitemap->apk();
		$tutorial 	= $this->sitemap->tutorial();
		$emulator 	= $this->sitemap->emulator();
		$rom 		= $this->sitemap->rom();

		$data = [
			'game'   	=> $game,
			'apk'   	=> $apk,
			'tutorial'	=> $tutorial,
			'emulator'	=> $emulator,
			'rom'		=> $rom,
		];

		$this->load->view('dashboard/sitemap/index', $data);
	}
	public function sit()
	{
		$title = array('title' => 'ModBoyApps | Sitemap');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/sitemap/sitemap');
		$this->load->view('dashboard/foother');
	}
}
