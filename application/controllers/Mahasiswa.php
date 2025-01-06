<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		check_not_login();
		$data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();
		$this->load->view('layout/style');
		$this->load->view('layout/navbar');
		$this->load->view('mahasiswa', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'npm' => $this->input->post('npm'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => $this->input->post('kelas'),
				'jurusan' => $this->input->post('jurusan'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat')
			];
			$this->Mahasiswa_model->insert_mahasiswa($data); // Simpan ke database

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Ditambahkan',
				'message' => 'Data mahasiswa baru telah berhasil ditambahkan.'
			]);

			redirect('mahasiswa'); // Kembali ke halaman mahasiswa
		}
		$this->load->view('mahasiswa/tambah');
	}


	public function edit($id = null)
	{
		if ($this->input->post()) {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'npm' => $this->input->post('npm'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => $this->input->post('kelas'),
				'jurusan' => $this->input->post('jurusan'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
			];

			$id = $this->input->post('id'); // Ambil ID dari input hidden
			$this->Mahasiswa_model->update_mahasiswa($id, $data); // Update data

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Diperbarui',
				'message' => 'Data mahasiswa telah berhasil diperbarui.'
			]);

			redirect('mahasiswa'); // Kembali ke halaman daftar mahasiswa
		} else {
			show_404(); // Jika bukan POST, tampilkan 404
		}
	}


	public function hapus($id)
	{
		if ($id) {
			$this->Mahasiswa_model->delete_mahasiswa($id); // Hapus data

			// Set flashdata untuk notifikasi sukses
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Dihapus',
				'message' => 'Data mahasiswa telah berhasil dihapus.'
			]);

			redirect('mahasiswa'); // Kembali ke halaman mahasiswa
		} else {
			show_404(); // Tampilkan 404 jika ID tidak valid
		}
	}
}
