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

		$post 		= $this->sitemap->apk();
		$tutorial 	= $this->sitemap->tutorial();

		$data = [
			'post'   	=> $post,
			'tutorial'	=> $tutorial
		];

		$this->load->view('dashboard/sitemap/index', $data);
	}
}
