<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editmeta extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit meta');
		$data = array(
			'meta_edit'    => $this->konten_model->meta_show(),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/meta/editmeta',$data);
		$this->load->view('dashboard/foother');
	}


	function meta_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_meta($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/meta/editmeta/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/meta/editmeta');
		}
	}
}
