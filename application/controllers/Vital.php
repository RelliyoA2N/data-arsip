<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vital extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vital_model');
	}

	public function index()
	{
		check_not_login();
		$data['vital'] = $this->Vital_model->get_all_vital();
		$this->load->view('layout/style');
		$this->load->view('layout/navbar');
		$this->load->view('arsip/vital', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}


	public function filter_by_year($year)
	{
		// Validasi input tahun
		if (!is_numeric($year) || strlen($year) != 4) {
			show_error('Tahun tidak valid', 400);
		}

		$data['results'] = $this->Vital_model->get_data_by_year($year); // Ambil data berdasarkan tahun
		$data['year'] = $year; // Simpan tahun untuk ditampilkan

		// Load view dengan data
		$this->load->view('layout/style');
		$this->load->view('layout/navbar');
		$this->load->view('arsip/kurun_waktu', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}


	public function tambah()
	{
		if ($this->input->post()) {
			$data = [
				'seksi' => $this->input->post('seksi'),
				'kode_klasifikasi' => $this->input->post('kode_klasifikasi'),
				'jenis_arsip' => $this->input->post('jenis_arsip'),
				'tingkat_perkembangan' => $this->input->post('tingkat_perkembangan'),
				'jumlah' => $this->input->post('jumlah'),
				'kurun_waktu' => $this->input->post('kurun_waktu'),
				'format_media' => $this->input->post('format_media'),
				'metode_perlindungan' => $this->input->post('metode_perlindungan'),
				'retensi' => $this->input->post('retensi'),
				'lokasi_simpan' => $this->input->post('lokasi_simpan'),
			];
			$this->Vital_model->insert_vital($data);

			// Set flashdata for success notification
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Ditambahkan',
				'message' => 'Data arsip vital telah berhasil ditambahkan.'
			]);
			redirect('vital');
		}
		$this->load->view('vital/tambah');
	}


	public function edit($id = null)
	{
		if ($this->input->post()) {
			// Tangkap data dari form edit
			$data = [
				'seksi' => $this->input->post('seksi'),
				'kode_klasifikasi' => $this->input->post('kode_klasifikasi'),
				'jenis_arsip' => $this->input->post('jenis_arsip'),
				'tingkat_perkembangan' => $this->input->post('tingkat_perkembangan'),
				'jumlah' => $this->input->post('jumlah'),
				'kurun_waktu' => $this->input->post('kurun_waktu'),
				'format_media' => $this->input->post('format_media'),
				'metode_perlindungan' => $this->input->post('metode_perlindungan'),
				'retensi' => $this->input->post('retensi'),
				'lokasi_simpan' => $this->input->post('lokasi_simpan'),
			];

			$id = $this->input->post('id'); // Ambil ID dari input hidden
			$this->Vital_model->update_vital($id, $data); // Update data

			// Set flashdata for success notification
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Diperbarui',
				'message' => 'Data arsip vital telah berhasil diperbarui.'
			]);
			redirect('vital'); // Kembali ke halaman daftar
		} else {
			show_404(); // Jika bukan POST, tampilkan 404
		}
	}


	public function hapus($id)
	{
		if ($id) {
			$this->Vital_model->delete_vital($id); // Hapus data

			// Set flashdata for success notification
			$this->session->set_flashdata('modal', [
				'type' => 'success',
				'title' => 'Data Dihapus',
				'message' => 'Data arsip vital telah berhasil dihapus.'
			]);
			redirect('vital'); // Kembali ke halaman utama
		} else {
			show_404(); // Tampilkan 404 jika ID tidak valid
		}
	}
}
