<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'user_id' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);

				// Set flashdata for success login
				$this->session->set_flashdata('modal', [
					'type' => 'success',
					'title' => 'Login Berhasil',
					'message' => 'Selamat, login berhasil.'
				]);

				redirect('mahasiswa'); // Redirect to the main page after login
			} else {
				// Set flashdata for failed login
				$this->session->set_flashdata('modal', [
					'type' => 'error',
					'title' => 'Login Gagal',
					'message' => 'Username atau password yang Anda masukkan salah.'
				]);

				redirect('login'); // Redirect back to login page
			}
		}
	}

	public function logout()
	{
		$params = array('user_id', 'level');
		$this->session->unset_userdata($params);

		// Set flashdata for logout success
		$this->session->set_flashdata('modal', [
			'type' => 'success',
			'title' => 'Logout Berhasil',
			'message' => 'Anda telah berhasil logout.'
		]);

		// Arahkan pengguna ke halaman login
		redirect('login');
	}
}
