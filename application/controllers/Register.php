<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_m');
	}

	public function index()
	{
		check_already_login();
		$this->load->view('register');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);

		// Validasi input
		if (!empty($post['username']) && !empty($post['password']) && !empty($post['nama'])) {
			// Periksa apakah username sudah terdaftar
			$existing_user = $this->user_m->get_user_data($post['username']);
			if ($existing_user) {
				// Username sudah terdaftar
				$this->session->set_flashdata('modal', [
					'type' => 'error',
					'title' => 'Pendaftaran Gagal',
					'message' => 'Username sudah terdaftar, gunakan username lain.'
				]);
				redirect('register');
			} else {
				// Masukkan data user baru
				$data = [
					'username' => $post['username'],
					'password' => sha1($post['password']), // Enkripsi password
					'nama' => $post['nama']
				];

				$this->db->insert('user', $data);

				// Pesan sukses
				$this->session->set_flashdata('modal', [
					'type' => 'success',
					'title' => 'Pendaftaran Berhasil',
					'message' => 'Pendaftaran berhasil. Silakan login.'
				]);
				redirect('login');
			}
		} else {
			// Pesan error jika input tidak lengkap
			$this->session->set_flashdata('modal', [
				'type' => 'error',
				'title' => 'Pendaftaran Gagal',
				'message' => 'Harap isi semua data.'
			]);
			redirect('register');
		}
	}
}
