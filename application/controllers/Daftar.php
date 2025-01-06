<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model');
	}

	public function index()
	{
		check_not_login();
		$data['daftar'] = $this->Daftar_model->get_all_daftar();
		$this->load->view('layout/style');
		$this->load->view('layout/navbar');
		$this->load->view('arsip/daftar', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$data = [
				'kode_klasifikasi' => $this->input->post('kode_klasifikasi'),
				'indek' => $this->input->post('indek'),
				'no_item' => $this->input->post('no_item'),
				'uraian' => $this->input->post('uraian'),
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah'),
				'tingkat_perkembangan' => $this->input->post('tingkat_perkembangan'),
				'keamanan' => $this->input->post('keamanan'),
				'lokasi' => $this->input->post('lokasi'),
			];

			// Handle file upload
			if (!empty($_FILES['file']['name'][0])) {
				$this->load->library('upload');
				$files = $_FILES['file'];
				$count = count($_FILES['file']['name']);
				$fileNames = []; // Array untuk menyimpan nama file

				for ($i = 0; $i < $count; $i++) {
					$_FILES['file']['name'] = $files['name'][$i];
					$_FILES['file']['type'] = $files['type'][$i];
					$_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
					$_FILES['file']['error'] = $files['error'][$i];
					$_FILES['file']['size'] = $files['size'][$i];

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';
					$this->upload->initialize($config);

					if ($this->upload->do_upload('file')) {
						$uploadData = $this->upload->data();
						$fileNames[] = $uploadData['file_name']; // Simpan nama file ke array
					}
				}

				// Gabungkan nama file menjadi string
				$data['file'] = implode(',', $fileNames); // Menggunakan koma sebagai pemisah
			} else {
				$data['file'] = ''; // Jika tidak ada file yang diupload
			}

			// Insert data
			if ($this->Daftar_model->insert_daftar($data)) {
				$this->session->set_flashdata('modal', [
					'type' => 'success',
					'title' => 'Data berhasil ditambahkan',
					'message' => 'Data baru telah berhasil ditambahkan ke sistem.',
				]);
			} else {
				$this->session->set_flashdata('modal', [
					'type' => 'error',
					'title' => 'Gagal menambahkan data',
					'message' => 'Terjadi kesalahan saat menambahkan data ke sistem.',
				]);
			}

			redirect('daftar'); // Redirect ke halaman utama
		}

		$this->load->view('daftar/tambah');
	}


	public function edit($id = null)
	{
		if ($id === null && !$this->input->post('id')) {
			show_404();
		}

		$id = $id ?? $this->input->post('id');
		$existing_data = $this->Daftar_model->get_daftar_by_id($id);

		if (!$existing_data) {
			show_404(); // Data tidak ditemukan
		}

		if ($this->input->post()) {
			$data = [
				'kode_klasifikasi' => $this->input->post('kode_klasifikasi'),
				'indek' => $this->input->post('indek'),
				'no_item' => $this->input->post('no_item'),
				'uraian' => $this->input->post('uraian'),
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah'),
				'tingkat_perkembangan' => $this->input->post('tingkat_perkembangan'),
				'keamanan' => $this->input->post('keamanan'),
				'lokasi' => $this->input->post('lokasi'),
			];

			$uploaded_files = [];
			if (!empty($_FILES['file']['name'][0])) {
				$this->load->library('upload');
				$files = $_FILES['file'];
				$count = count($files['name']);

				for ($i = 0; $i < $count; $i++) {
					$_FILES['file']['name'] = $files['name'][$i];
					$_FILES['file']['type'] = $files['type'][$i];
					$_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
					$_FILES['file']['error'] = $files['error'][$i];
					$_FILES['file']['size'] = $files['size'][$i];

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|png|pdf|doc|docx|xls|xlsx';
					$config['max_size'] = 2048;
					$this->upload->initialize($config);

					if ($this->upload->do_upload('file')) {
						$uploaded_files[] = $this->upload->data('file_name');
					}
				}
			}

			if (!empty($uploaded_files)) {
				$data['file'] = $uploaded_files[0]; // Ambil file pertama saja
			} else {
				$data['file'] = $existing_data->file ?? null;
			}
			

			$update = $this->Daftar_model->update_daftar($id, $data);

			if ($update) {
				$this->session->set_flashdata('modal', [
					'type' => 'success',
					'title' => 'Data berhasil diperbarui',
					'message' => 'Data Anda telah berhasil diperbarui di sistem.',
				]);
			} else {
				$this->session->set_flashdata('modal', [
					'type' => 'error',
					'title' => 'Data gagal diperbarui',
					'message' => 'Terjadi kesalahan saat memperbarui data Anda.',
				]);
			}
			redirect('daftar');
		} else {
			show_404();
		}
	}




	// public function hapus($id)
	// {
	// 	if ($id) {
	// 		if ($this->Daftar_model->delete_daftar($id)) { // Hapus data dan cek apakah berhasil
	// 			$this->session->set_flashdata('success', true); // Set flashdata untuk modal
	// 		} else {
	// 			$this->session->set_flashdata('error', true); // Set flashdata untuk error modal
	// 		}
	// 		redirect('daftar'); // Kembali ke halaman utama
	// 	} else {
	// 		show_404(); // Tampilkan 404 jika ID tidak valid
	// 	}
	// }


	public function hapus($id)
	{
		if ($id) {
			if ($this->Daftar_model->delete_daftar($id)) { // Hapus data dan cek apakah berhasil
				$this->session->set_flashdata('modal', [
					'type' => 'success',
					'title' => 'Data berhasil dihapus',
					'message' => 'Data Anda telah berhasil dihapus dari sistem.',
				]);
			} else {
				$this->session->set_flashdata('modal', [
					'type' => 'error',
					'title' => 'Gagal menghapus data',
					'message' => 'Terjadi kesalahan saat menghapus data Anda.',
				]);
			}
			redirect('daftar'); // Kembali ke halaman utama
		} else {
			show_404(); // Tampilkan 404 jika ID tidak valid
		}
	}
}
