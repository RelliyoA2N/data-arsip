<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
	public function get_all_daftar()
	{
		return $this->db->get('daftar')->result_array();
	}

	public function insert_daftar($data)
	{
		return $this->db->insert('daftar', $data);
	}

	public function get_daftar_by_id($id)
	{
		return $this->db->get_where('daftar', ['daftar_id' => $id])->row_array();
	}

	public function update_daftar($id, $data)
	{
		$this->db->where('daftar_id', $id);
		return $this->db->update('daftar', $data);
	}

	public function delete_daftar($id)
	{
		$this->db->where('daftar_id', $id);
		return $this->db->delete('daftar');
	}
}
