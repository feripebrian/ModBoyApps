<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$valid->set_rules('username', 'Username', 'required');
		$valid->set_rules('password', 'Password', 'required');
		if ($valid->run()) {
			$this->simple_login->login($username, $password, base_url('dasbor'), base_url('login'));
		}
		$data = array('title' => 'Halaman Login');
		$this->load->view('log/login', $data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('log/login/');
	}
}
