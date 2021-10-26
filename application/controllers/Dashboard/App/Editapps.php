<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editapps extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Add Apps');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/app/editapps');
		$this->load->view('dashboard/foother');
	}

	public function app_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Apps');
		$data = array(
			'app_edit'    => $this->konten_model->app_edit($id)
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/app/editapps', $data);
		$this->load->view('dashboard/foother');
	}


	function app_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_app($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/app/editapps/app_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/app/editapps/app_edit/' . $id);
		}
	}
}
