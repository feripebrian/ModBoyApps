<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data = array(
			'title'		=>	'ModBoyApps | Dashboard',
			'log_user'	=>	$this->konten_model->log_user_show(),
		);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/foother');
	}
}
