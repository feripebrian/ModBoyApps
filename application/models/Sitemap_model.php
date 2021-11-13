<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap_model extends CI_Model
{

	function apk()
	{
		return $this->db->order_by('date_update', 'desc')->get('post')->result_array();
	}
	function tutorial()
	{
		return $this->db->order_by('date_update', 'desc')->get('tutorial')->result_array();
	}
}
