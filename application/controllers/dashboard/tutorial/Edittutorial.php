<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edittutorial extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$title = array('title' => 'ModBoyApps | Edit Tutorial');
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/tutorial/edittutorial');
		$this->load->view('dashboard/foother');
	}

	public function tutorial_edit($id)
	{
		$title = array('title' => 'ModBoyApps | Edit Tutorial');
		$data = array(
			'tutorial_edit'    => $this->konten_model->tutorial_edit($id),
		);
		$this->load->view('dashboard/header', $title);
		$this->load->view('dashboard/tutorial/edittutorial', $data);
		$this->load->view('dashboard/foother');
	}


	function tutorial_update($id)
	{
		if ($this->input->post('submit')) {
			$this->konten_model->update_tutorial($id);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
			redirect('dashboard/tutorial/edittutorial/tutorial_edit/' . $id);
		} else {
			$this->session->set_flashdata('failed', 'Data gagal di simpan');
			redirect('dashboard/tutorial/edittutorial/tutorial_edit/' . $id);
		}
	}
}
