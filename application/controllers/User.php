<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
	}

	public function index()
	{
		check_not_login();
		$data['user'] = $this->User_m->get_all_user();
		$this->load->view('layout/style');
		$this->load->view('layout/navbar');
		$this->load->view('user', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')), // Hash password
				'level' => $this->input->post('level'),
			];

			$this->User_m->insert_user($data); // Simpan ke database

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Ditambahkan',
				'message' => 'Pengguna baru telah berhasil ditambahkan.'
			]);

			redirect('user'); // Kembali ke halaman user
		} else {
			$this->load->view('user/tambah');
		}
	}


	public function edit()
	{
		if ($this->input->post()) {
			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'level' => $this->input->post('level'),
			];

			// Jika password diisi, update dengan hash SHA1
			if (!empty($this->input->post('password'))) {
				$data['password'] = sha1($this->input->post('password'));
			}

			$this->User_m->update_user($this->input->post('user_id'), $data);

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Diperbarui',
				'message' => 'Data pengguna telah berhasil diperbarui.'
			]);

			redirect('user');
		} else {
			show_404(); // Jika bukan POST, tampilkan 404
		}
	}



	public function hapus($id)
	{
		if ($id) {
			$this->User_m->delete_user($id); // Hapus data

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Dihapus',
				'message' => 'Pengguna telah berhasil dihapus.'
			]);

			redirect('user'); // Kembali ke halaman utama
		} else {
			show_404(); // Tampilkan 404 jika ID tidak valid
		}
	}
}
