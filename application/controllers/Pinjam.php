<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
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
		$this->load->view('arsip/pinjam', $data);
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
			redirect('vital'); // Kembali ke halaman daftar
		} else {
			show_404(); // Jika bukan POST, tampilkan 404
		}
	}



	public function hapus($id)
	{
		if ($id) {
			$this->Vital_model->delete_vital($id); // Hapus data
			redirect('vital'); // Kembali ke halaman utama
		} else {
			show_404(); // Tampilkan 404 jika ID tidak valid
		}
	}
}
