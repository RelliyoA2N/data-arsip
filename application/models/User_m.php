<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get_user_data($username)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->row();
	}

	public function register($data)
	{
		$this->db->insert('user', $data);
		return $this->db->affected_rows() > 0;
	}

	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function get_all_user()
	{
		return $this->db->get('user')->result_array();
	}

	public function insert_user($data)
	{
		return $this->db->insert('user', $data);
	}

	public function get_user_by_id($id)
	{
		return $this->db->get_where('user', ['user_id' => $id])->row_array();
	}

	public function update_user($id, $data)
	{
		$this->db->where('user_id', $id);
		return $this->db->update('user', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->delete('user');
	}
}
