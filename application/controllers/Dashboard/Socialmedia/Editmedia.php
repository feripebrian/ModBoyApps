<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editmedia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit Social Media');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/socialmedia/editmedia');
		$this->load->view('dashboard/foother');
	}

	public function media_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Social Media');
		$data = array(
			'media_edit'    => $this->konten_model->media_edit($id)
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/socialmedia/editmedia', $data);
		$this->load->view('dashboard/foother');
	}


	function media_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_media($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/socialmedia/editmedia/media_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/socialmedia/editmedia/media_edit/' . $id);
		}
	}
}
