<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Setting');
		$data = array(
			'setting' => $this->konten_model->setting(),

		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/setting/setting', $data);
		$this->load->view('dashboard/foother');
	}

	function setiing_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_setting($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/setting/setting/');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/setting/setting/');
		}
	}
}
