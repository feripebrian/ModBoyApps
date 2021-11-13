<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listmeta extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | List Meta');
		$data = array(
			'meta'    => $this->konten_model->meta_show()
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/meta/listmeta', $data);
		$this->load->view('dashboard/foother');
	}

	function meta_hapus($id)
	{
		$where = array('id_meta' => $id);
		$this->konten_model->hapus_meta($where, 'meta');
		$this->session->set_flashdata('success', 'Data berhasil di hapus');
		redirect('dashboard/meta/listmeta/');
	}
}
