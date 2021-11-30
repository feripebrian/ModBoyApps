<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listapps extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Apps');
		$data = array(
			'app'	=> $this->konten_model->app_show(),
			'kategori'	=> $this->konten_model->meta_show(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/app/listapps', $data);
		$this->load->view('dashboard/foother');
	}
}
