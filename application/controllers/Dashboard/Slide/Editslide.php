<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editslide extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Slide');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/slide/editslide');
		$this->load->view('dashboard/foother');
	}

	public function slide_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit slide');
		$data = array(
			'slide_edit'    => $this->konten_model->slide_edit($id)
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/slide/editslide', $data);
		$this->load->view('dashboard/foother');
	}


	function slide_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_slide($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/slide/editslide/slide_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/slide/editslide/slide_edit/' . $id);
		}
	}
}
