<?php
class Konten_model extends CI_Model
{


	function log_user_show()
	{
		$data = $this->db->query("SELECT * FROM tb_log ORDER BY DATE & TIME DESC");
		return $data->result_array();
	}

	// ========================================= USER =========================================
	function user_show()
	{
		$data = $this->db->query("SELECT * FROM tb_user ");
		return $data->result_array();
	}

	public function user_akses($id)
	{

		$akses = $this->input->post('akses');
		$result = array();
		foreach ($akses as $key => $val) {
			$result[] = array(
				'id_user'   => $id,
				'akses'     => $akses[$key]
			);
		}
		return $this->db->insert_batch('tb_user_akses', $result);
	}

	function user_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_user where id='$id'");
		return $data->result_array();
	}

	function get_user_access($id_user)
	{
		$acc = array();
		$id = $this->db->escape_str($id_user);
		$query = $this->db->query(" SELECT * FROM tb_user_akses WHERE id_user='$id_user' ");
		$res = $query->result();
		if (count($res) > 0) {
			foreach ($res as $row) {
				$acc[$row->akses] = $row->akses;
			}
		}
		return $acc;
	}

	function set_cb($field, $id = '')
	{
		if ($id == '') {
			$default = '';
		} else {
			$acc = $this->get_user_access($id);
			if (isset($acc[$field])) $default = 'checked';
			else $default = '';
		}
		if ($this->input->post()) $default = '';

		$access = $this->input->post('akses');
		$ret = isset($access[$field]) ? 'checked' : $default;

		return $ret;
	}

	function update_user($id)
	{
		$data = array(
			"nama"      => $this->input->post('nama'),
			"email"     => $this->input->post('email'),
			"password"  => md5($this->input->post('password')),
			"status"    => $this->input->post('status'),
			"foto"      => $this->input->post('foto'),
		);
		$this->db->where('id', $id);
		$this->db->update('tb_user', $data);

		$this->db->where('id_user', $id);
		$this->db->delete('tb_user_akses');

		$akses = $this->input->post('akses');
		if ($akses and is_array($akses)) {
			foreach ($akses as $ac) {
				$d = array();
				$d['id_user'] = $id;
				$d['akses'] = $ac;
				$this->db->insert('tb_user_akses', $d);
			}
		}
	}

	function tambah_user()
	{
		$data = array(
			"nama"      => $this->input->post('nama'),
			"email"     => $this->input->post('email'),
			"username"  => $this->input->post('username'),
			"password"  => md5($this->input->post('password')),
			"status"    => $this->input->post('status'),
			"foto"      => $this->input->post('foto'),
		);
		$this->db->insert('tb_user', $data);
		$akses  = $this->input->post('akses');
		$UID    = $this->db->insert_id();

		if ($akses and is_array($akses)) {
			foreach ($akses as $ac) {
				$d = array();
				$d['id_user'] = $UID;
				$d['akses']   = $ac;
				$this->db->insert('tb_user_akses', $d);
			}
		}
	}

	function tambah_log_user()
	{
		$data = array(
			"nama"          => $this->input->post('nama'),
			"keterangan"    => $this->input->post('keterangan'),
			"id_user"       => $this->input->post('id_user'),
			"email"         => $this->input->post('email'),
			"password"      => md5($this->input->post('password')),
		);
		$this->db->insert('tb_user', $data);
	}

	function hapus_user($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function hapus_user_akses($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KATEGORI =========================================
	function kategori_front()
	{
		$data = $this->db->query("SELECT * FROM kategori;");
		return $data->result_array();
	}
	function kategori_show()
	{
		$data = $this->db->query("SELECT * FROM kategori;");
		return $data->result_array();
	}

	function tambah_kategori()
	{
		$data = array(
			"kategori"	=> $this->input->post('kategori'),
			"gambar"    => $this->input->post('gambar'),
			"status"    => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->insert('kategori', $data);
	}

	function kategori_edit($id)
	{
		$data = $this->db->query("SELECT * FROM kategori where id_kategori='$id'");
		return $data->result_array();
	}

	function update_kategori($id)
	{
		$data = array(
			"kategori"		=> $this->input->post('kategori'),
			"gambar"		=> $this->input->post('gambar'),
			"status"		=> $this->input->post('status'),
			"date_update"	=> date('Y-m-d H:i:s')
		);
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $data);
	}
	function hapus_kategori($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= GAME =========================================
	function game_front()
	{
		$data = $this->db->query("SELECT * FROM post WHERE kategori='1' AND status='1' ORDER BY date_update DESC LIMIT 5;");
		return $data->result_array();
	}
	function game_judul()
	{
		$data = $this->db->query("SELECT judul FROM post WHERE kategori='1' AND status='1';");
		return $data->result_array();
	}

	function game_show()
	{
		$data = $this->db->query("SELECT * FROM post WHERE kategori='1';");
		return $data->result_array();
	}
	function kategori_game()
	{
		$data = $this->db->query("SELECT * FROM kategori WHERE status='1';");
		return $data->result_array();
	}

	function tambah_game()
	{
		$data = array(
			"id_kategori"		=> $this->input->post('id_kategori'),
			"kategori"			=> '1',
			"judul"    			=> $this->input->post('judul'),
			"versi"    			=> $this->input->post('versi'),
			"deskripsi_singkat"	=> $this->input->post('deskripsi_singkat'),
			"deskripsi"			=> $this->input->post('deskripsi'),
			"link"				=> $this->input->post('link'),
			"gambar"			=> $this->input->post('gambar'),
			"status"			=> $this->input->post('status'),
			"date_upload"		=> date('Y-m-d H:i:s'),
			"date_update"		=> date('Y-m-d H:i:s')
		);
		$this->db->insert('post', $data);
	}

	function game_edit($id)
	{
		$data = $this->db->query("SELECT * FROM post where id_post='$id'");
		return $data->result_array();
	}

	function update_game($id)
	{
		$data = array(
			"id_kategori"		=> $this->input->post('id_kategori'),
			"kategori"			=> '1',
			"judul"    			=> $this->input->post('judul'),
			"versi"    			=> $this->input->post('versi'),
			"deskripsi_singkat"	=> $this->input->post('deskripsi_singkat'),
			"deskripsi"			=> $this->input->post('deskripsi'),
			"link"				=> $this->input->post('link'),
			"gambar"			=> $this->input->post('gambar'),
			"status"			=> $this->input->post('status'),
			"date_update"		=> date('Y-m-d H:i:s')
		);
		$this->db->where('id_post', $id);
		$this->db->update('post', $data);
	}
	function hapus_game($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= APPS =========================================
	function app_front()
	{
		$data = $this->db->query("SELECT * FROM post WHERE kategori='2' AND status='1' ORDER BY date_update DESC LIMIT 5;");
		return $data->result_array();
	}
	function app_judul()
	{
		$data = $this->db->query("SELECT judul FROM post WHERE kategori='2' AND status='1';");
		return $data->result_array();
	}
	function app_show()
	{
		$data = $this->db->query("SELECT * FROM post WHERE kategori='2';");
		return $data->result_array();
	}

	function tambah_app()
	{
		$data = array(
			"kategori"			=> '2',
			"judul"    			=> $this->input->post('judul'),
			"versi"    			=> $this->input->post('versi'),
			"deskripsi_singkat"	=> $this->input->post('deskripsi_singkat'),
			"deskripsi"			=> $this->input->post('deskripsi'),
			"link"				=> $this->input->post('link'),
			"gambar"			=> $this->input->post('gambar'),
			"status"			=> $this->input->post('status'),
			"date_upload"		=> date('Y-m-d H:i:s'),
			"date_update"		=> date('Y-m-d H:i:s')
		);
		$this->db->insert('post', $data);
	}

	function app_edit($id)
	{
		$data = $this->db->query("SELECT * FROM post where id_post='$id'");
		return $data->result_array();
	}

	function update_app($id)
	{
		$data = array(
			"kategori"			=> '2',
			"judul"    			=> $this->input->post('judul'),
			"versi"    			=> $this->input->post('versi'),
			"deskripsi_singkat"	=> $this->input->post('deskripsi_singkat'),
			"deskripsi"			=> $this->input->post('deskripsi'),
			"link"				=> $this->input->post('link'),
			"gambar"			=> $this->input->post('gambar'),
			"status"			=> $this->input->post('status'),
			"date_update"		=> date('Y-m-d H:i:s')
		);
		$this->db->where('id_post', $id);
		$this->db->update('post', $data);
	}
	function hapus_app($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= SLIDE =========================================
	function slide_front()
	{
		$data = $this->db->query("SELECT * FROM  slide WHERE status='1';");
		return $data->result_array();
	}
	function slide_show()
	{
		$data = $this->db->query("SELECT * FROM  slide;");
		return $data->result_array();
	}

	function tambah_slide()
	{
		$data = array(
			"slide_pertama"	=> $this->input->post('slide_pertama'),
			"judul"			=> $this->input->post('judul'),
			"deskripsi"		=> $this->input->post('deskripsi'),
			"gambar"		=> $this->input->post('gambar'),
			"status"		=> $this->input->post('status'),
			"date_upload"	=> date('Y-m-d H:i:s'),
		);
		$this->db->insert('slide', $data);
	}

	function slide_edit($id)
	{
		$data = $this->db->query("SELECT * FROM slide where id='$id'");
		return $data->result_array();
	}

	function update_slide($id)
	{
		$data = array(
			"slide_pertama"	=> $this->input->post('slide_pertama'),
			"judul"			=> $this->input->post('judul'),
			"deskripsi"		=> $this->input->post('deskripsi'),
			"gambar"		=> $this->input->post('gambar'),
			"status"		=> $this->input->post('status'),
			"date_update"	=> date('Y-m-d H:i:s'),
		);
		$this->db->where('id', $id);
		$this->db->update('slide', $data);
	}

	function hapus_slide($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= SOCIALMEDIA =========================================
	function media_front()
	{
		$data = $this->db->query("SELECT * FROM  socialmedia WHERE status='1';");
		return $data->result_array();
	}
	function media_show()
	{
		$data = $this->db->query("SELECT * FROM  socialmedia;");
		return $data->result_array();
	}

	function tambah_media()
	{
		$data = array(
			"nama"			=> $this->input->post('nama'),
			"link"			=> $this->input->post('link'),
			"status"		=> $this->input->post('status'),
			"date_upload"	=> date('Y-m-d H:i:s'),
			"date_update"	=> date('Y-m-d H:i:s'),
		);
		$this->db->insert('socialmedia', $data);
	}

	function media_edit($id)
	{
		$data = $this->db->query("SELECT * FROM socialmedia where id='$id'");
		return $data->result_array();
	}

	function update_media($id)
	{
		$data = array(
			"nama"			=> $this->input->post('nama'),
			"link"			=> $this->input->post('link'),
			"status"		=> $this->input->post('status'),
			"date_update"	=> date('Y-m-d H:i:s'),
		);
		$this->db->where('id', $id);
		$this->db->update('socialmedia', $data);
	}

	function hapus_media($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= META =========================================

	function meta_show()
	{
		$data = $this->db->query("SELECT * FROM  meta;");
		return $data->result_array();
	}

	function update_meta($id)
	{
		$data = array(
			"title"			=> $this->input->post('title'),
			"description"	=> $this->input->post('description'),
			"icon_32"		=> $this->input->post('icon_32'),
			"icon_128"		=> $this->input->post('icon_128'),
			"icon_192"		=> $this->input->post('icon_192'),
			"date_update"	=> date('Y-m-d H:i:s'),
		);
		$this->db->where('id', $id);
		$this->db->update('meta', $data);
	}

	// ========================================= Show =========================================
	function show($id_post)
	{
		$data = $this->db->query("SELECT * FROM  post WHERE id_post=$id_post;");
		return $data->result_array();
	}
}
