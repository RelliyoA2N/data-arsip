<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	public function get_all_mahasiswa()
	{
		return $this->db->get('data_mahasiswa')->result_array();
	}

	public function insert_mahasiswa($data)
	{
		return $this->db->insert('data_mahasiswa', $data);
	}

	public function get_mahasiswa_by_id($id)
	{
		return $this->db->get_where('data_mahasiswa', ['id' => $id])->row_array();
	}

	public function update_mahasiswa($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('data_mahasiswa', $data);
	}

	public function delete_mahasiswa($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('data_mahasiswa');
	}
}
