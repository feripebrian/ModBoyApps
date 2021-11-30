<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listtutorial extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}
	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Tutorial');
		$data = array(
			'tutorial'	=> $this->konten_model->tutorial_show(),
			'kategori'	=> $this->konten_model->meta_show(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/tutorial/listtutorial', $data);
		$this->load->view('dashboard/foother');
	}

	function tutorial_hapus($id)
	{
		$where = array('id_post' => $id);
		$this->konten_model->hapus_kategori($where, 'post');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/tutorial/listtutorial/');
	}
}
