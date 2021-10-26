<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{

	public function index()
	{
	}

	public function views_game()
	{
		$this->load->view('views_game');
	}

	public function views_apps()
	{
		$this->load->view('views_apps');
	}
}
