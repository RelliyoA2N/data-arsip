<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vital_model extends CI_Model
{
	public function get_all_vital()
	{
		return $this->db->get('vital')->result_array();
	}

	public function insert_vital($data)
	{
		return $this->db->insert('vital', $data);
	}

	public function get_vital_by_id($id)
	{
		return $this->db->get_where('vital', ['vital_id' => $id])->row_array();
	}

	public function update_vital($id, $data)
	{
		$this->db->where('vital_id', $id);
		return $this->db->update('vital', $data);
	}

	public function delete_vital($id)
	{
		$this->db->where('vital_id', $id);
		return $this->db->delete('vital');
	}

	public function get_data_by_year($year) {
        $this->db->select('*');
        $this->db->from('daftar'); // Pastikan tabel yang diambil benar
        $this->db->where('YEAR(tanggal)', $year); // Ganti dengan kolom yang sesuai
        $query = $this->db->get();
        return $query->result_array(); // Pastikan kembalian dalam bentuk array
    }
}
