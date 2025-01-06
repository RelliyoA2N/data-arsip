<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam_model extends CI_Model
{
	public function get_all_pinjam()
	{
		return $this->db->get('pinjam')->result_array();
	}

	public function insert_pinjam($data)
	{
		return $this->db->insert('pinjam', $data);
	}

	public function get_pinjam_by_id($id)
	{
		return $this->db->get_where('pinjam', ['pinjam_id' => $id])->row_array();
	}

	public function update_pinjam($id, $data)
	{
		$this->db->where('pinjam_id', $id);
		return $this->db->update('pinjam', $data);
	}

	public function delete_pinjam($id)
	{
		$this->db->where('pinjam_id', $id);
		return $this->db->delete('pinjam');
	}
}
