<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap_model extends CI_Model
{

	function game()
	{
		return $this->db->order_by('date_update', 'desc')->where('status', 1)->where('kategori', 1)->get('post')->result_array();
	}
	function apk()
	{
		return $this->db->order_by('date_update', 'desc')->where('status', 1)->where('kategori', 2)->get('post')->result_array();
	}
	function tutorial()
	{
		return $this->db->order_by('date_update', 'desc')->where('status', 1)->where('kategori', 3)->get('post')->result_array();
	}
	function emulator()
	{
		return $this->db->order_by('date_update', 'desc')->where('status', 1)->where('kategori', 5)->get('post')->result_array();
	}
	function rom()
	{
		return $this->db->order_by('date_update', 'desc')->where('status', 1)->where('kategori', 7)->get('post')->result_array();
	}
}
