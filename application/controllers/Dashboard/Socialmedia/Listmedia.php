<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listmedia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Social Media');
		$data = array(
			'media'    => $this->konten_model->media_show()
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/socialmedia/listmedia', $data);
		$this->load->view('dashboard/foother');
	}

	function media_hapus($id)
	{
		$where = array('id' => $id);
		$this->konten_model->hapus_slide($where, 'socialmedia');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/socialmedia/listmedia/');
	}
}
