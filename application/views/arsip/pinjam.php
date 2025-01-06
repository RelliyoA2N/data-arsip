<!-- Page header -->
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle"> Data </div>
				<h2 class="page-title"> Pinjaman Arsip </h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">
					<a
						href="#"
						class="btn btn-primary d-none d-sm-inline-block"
						data-bs-toggle="modal"
						data-bs-target="#modal-tambah-vital">
						<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
						<svg
							xmlns="http://www.w3.org/2000/svg"
							class="icon"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							stroke-width="2"
							stroke="currentColor"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M12 5l0 14" />
							<path d="M5 12l14 0" />
						</svg>
						Tambah Data
					</a>
					<a
						class="btn btn-primary d-sm-none btn-icon"
						data-bs-toggle="modal"
						data-bs-target="#modal-tambah-vital"
						aria-label="Create new report">
						<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
						<svg
							xmlns="http://www.w3.org/2000/svg"
							class="icon"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							stroke-width="2"
							stroke="currentColor"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M12 5l0 14" />
							<path d="M5 12l14 0" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page body -->
<div class="page-body">
	<div class="container-xl">
		<div class="row row-deck row-cards">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Vital</h3>
					</div>
					<div class="card-body border-bottom py-3">
						<div class="d-flex">
							<div class="text-secondary">
								Show
								<div for="entries" class="mx-2 d-inline-block">
									<input
										type="text"
										class="form-control form-control-sm"
										size="3"
										id="entries"
										aria-label="Invoices count" />
								</div>
								entries
							</div>
							<div class="ms-auto text-muted">
								Search:
								<div class="ms-2 d-inline-block">
									<input type="text" id="myInput" onkeyup="myFunction()" class="form-control form-control-sm">
								</div>
							</div>
						</div>
					</div>
					<div id="table-default" class="table-responsive">
						<table class="table table-bordered" id="myTableMain">
							<thead>
								<tr>
									<th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
									<th><button class="table-sort" data-sort="sort-no">No</button></th>
									<th><button class="table-sort" data-sort="sort-seksi">Nama</button></th>
									<th><button class="table-sort" data-sort="sort-kode">Unit Kerja</button></th>
									<th><button class="table-sort" data-sort="sort-jenis">Kode Klasifikasi</button></th>
									<th><button class="table-sort" data-sort="sort-tingkat">Arsip Yang Dipinjam</button></th>
									<th><button class="table-sort" data-sort="sort-jumlah">Jumlah</button></th>
									<th><button class="table-sort" data-sort="sort-kurun">Tanggal Pinjam</button></th>
									<th><button class="table-sort" data-sort="sort-format">Tanggal Pengembalian</button></th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody class="table-tbody">
								<?php if (!empty($pinjam)): ?>
									<?php foreach ($pinjam as $i => $pinjam): ?>
										<tr>
											<td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
											<td class="sort-no text-center"><?= $i + 1; ?></td>
											<td class="sort-seksi"><?= $pinjam['nama']; ?></td>
											<td class="sort-kode"><?= $pinjam['unit_kerja']; ?></td>
											<td class="sort-jenis"><?= $pinjam['kode_klasifikasi']; ?></td>
											<td class="sort-tingkat text-center"><?= $pinjam['arsip_pinjam']; ?></td>
											<td class="sort-jumlah"><?= $pinjam['jumlah']; ?></td>
											<td class="sort-kurun text-center"><?= date('d-m-Y', strtotime($pinjam['tanggal_pinjam'])); ?></td>
											<td class="sort-format"><?= date('d-m-Y', strtotime($pinjam['tanggal_kembali'])); ?></td>
											<td class="text-center">
												<!-- Tombol Update -->
												<a
													class="btn btn-sm btn-pill btn-info btn-mhs"
													data-mahasiswa='<?= json_encode($pinjam, JSON_HEX_APOS); ?>'>
													Update
												</a>
												<!-- Tombol Delete -->
												<a
													class="btn btn-sm btn-pill btn-red btn-delete btn-mhs"
													data-id-mhs="<?= $pinjam['vital_id']; ?>"
													data-bs-toggle="modal"
													data-bs-target="#modal-danger-mhs">
													Delete
												</a>
												<!-- Tombol Update -->
												<!-- <a
													class="btn btn-sm btn-pill btn-info btn-vital"
													data-bs-toggle="modal"
													data-bs-target="#modal-vital"
													data-vital='<?= json_encode($pinjam, JSON_HEX_APOS); ?>'>
													Update
												</a> -->
												<!-- Tombol Delete -->
												<!-- <a
													class="btn btn-sm btn-pill btn-red btn-delete btn-vital mt-2"
													data-id-vital="<?= $pinjam['vital_id']; ?>"
													data-bs-toggle="modal"
													data-bs-target="#modal-danger">
													Delete
												</a> -->
											</td>
										</tr>
									<?php endforeach; ?>
								<?php else: ?>
									<tr>
										<td colspan="12" class="text-center">Tidak ada data arsip vital</td>
									</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
					<div class="card-footer d-flex align-items-center">
						<p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of
							<span>16</span> entries
						</p>
						<ul class="pagination m-0 ms-auto">
							<li class="page-item disabled">
								<a
									class="page-link"
									href="#"
									tabindex="-1"
									aria-disabled="true">
									<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M15 6l-6 6l6 6" />
									</svg>
									prev
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item">
								<a class="page-link" href="#">
									next
									<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M9 6l6 6l-6 6" />
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Update Data Vital-->
<div
	class="modal modal-blur fade"
	id="modal-vital"
	tabindex="-1"
	role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data Vital</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<form action="<?= site_url('vital/edit'); ?>" method="post">
				<input type="hidden" name="id" id="edit-id" />
				<div class="modal-body">
					<div class="row row-cards">
						<div class="col-sm-6 col-md-7">
							<div class="mb-3">
								<label class="form-label">Seksi</label>
								<input type="text" name="seksi" id="edit-seksi" class="form-control" placeholder="Seksi">
							</div>
						</div>
						<div class="col-sm-6 col-md-5">
							<div class="mb-3">
								<label class="form-label">Kode Klasifikasi</label>
								<input type="text" name="kode_klasifikasi" id="edit-kode_klasifikasi" class="form-control" placeholder="Kode Klasifikasi">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="mb-3">
								<label class="form-label">Jenis Arsip</label>
								<input type="text" name="jenis_arsip" id="edit-jenis_arsip" class="form-control" placeholder="Jenis Arsip">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="mb-3">
								<label class="form-label">Tingkat Perkembangan</label>
								<select name="tingkat_perkembangan" id="edit-tingkat_perkembangan" class="form-select" required>
									<option value="asli/copy">asli/copy</option>
									<option value="asli & copy">asli & copy</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="mb-3">
								<label class="form-label">Jumlah</label>
								<input type="text" name="jumlah" id="edit-jumlah" class="form-control" placeholder="Jumlah">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="mb-3">
								<label class="form-label">Kurun Waktu</label>
								<input type="test" name="kurun_waktu" id="edit-kurun_waktu" class="form-control" placeholder="Kurun Waktu">
							</div>
						</div>
						<div class="col-md-5">
							<div class="mb-3">
								<label class="form-label">Format/Media</label>
								<select name="format_media" id="edit-format_media" class="form-select" required>
									<option value="Kertas">Kertas</option>
									<option value="File">File</option>
									<option value="Kertas & File">Kertas & File</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="mb-3">
								<label class="form-label">Metode Perlindungan</label>
								<input type="text" name="metode_perlindungan" id="edit-metode_perlindungan" class="form-control" placeholder="Metode Perlindungan">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="mb-3">
								<label class="form-label">Retensi</label>
								<input type="test" name="retensi" id="edit-retensi" class="form-control" placeholder="Retensi">
							</div>
						</div>
						<div class="col-sm-6 col-md-5">
							<div class="mb-3">
								<label class="form-label">Lokasi Simpan</label>
								<input type="test" name="lokasi_simpan" id="edit-lokasi_simpan" class="form-control" placeholder="Lokasi Simpan">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
						Cancel
					</button>
					<button type="submit" class="btn btn-primary">
						Update
					</button>
				</div>
			</form>
		</div>
	</div>
</div>



<!-- Tambah data Vital  -->
<div
	class="modal modal-blur fade"
	id="modal-tambah-vital"
	tabindex="-1"
	role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Vital</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<form action="<?= site_url('vital/tambah'); ?>" method="post">
				<div class="modal-body">
					<div class="row row-cards">
						<div class="col-sm-6 col-md-7">
							<div class="mb-3">
								<label class="form-label">Seksi</label>
								<input type="text" name="seksi" class="form-control" placeholder="Seksi">
							</div>
						</div>
						<div class="col-sm-6 col-md-5">
							<div class="mb-3">
								<label class="form-label">Kode Klasifikasi</label>
								<input type="text" name="kode_klasifikasi" class="form-control" placeholder="Kode Klasifikasi">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="mb-3">
								<label class="form-label">Jenis Arsip</label>
								<input type="text" name="jenis_arsip" class="form-control" placeholder="Jenis Arsip">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="mb-3">
								<label class="form-label">Tingkat Perkembangan</label>
								<select name="tingkat_perkembangan" class="form-select" required>
									<option value="asli/copy">asli/copy</option>
									<option value="asli & copy">asli & copy</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="mb-3">
								<label class="form-label">Jumlah</label>
								<input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="mb-3">
								<label class="form-label">Kurun Waktu</label>
								<input type="test" name="kurun_waktu" class="form-control" placeholder="Kurun Waktu">
							</div>
						</div>
						<div class="col-md-5">
							<div class="mb-3">
								<label class="form-label">Format/Media</label>
								<select name="format_media" class="form-select" required>
									<option value="Kertas">Kertas</option>
									<option value="File">File</option>
									<option value="Kertas & File">Kertas & File</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="mb-3">
								<label class="form-label">Metode Perlindungan</label>
								<input type="text" name="metode_perlindungan" class="form-control" placeholder="Metode Perlindungan">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="mb-3">
								<label class="form-label">Retensi</label>
								<input type="test" name="retensi" class="form-control" placeholder="Retensi">
							</div>
						</div>
						<div class="col-sm-6 col-md-5">
							<div class="mb-3">
								<label class="form-label">Lokasi Simpan</label>
								<input type="test" name="lokasi_simpan" class="form-control" placeholder="Lokasi Simpan">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
						Cancel
					</button>
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal Delete -->
<div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-status bg-danger"></div>
			<div class="modal-body text-center py-4">
				<svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none" />
					<path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
					<path d="M12 9v4" />
					<path d="M12 17h.01" />
				</svg>
				<h3>Are you sure?</h3>
				<div class="text-secondary">Do you really want to delete this data? This action cannot be undone.</div>
			</div>
			<div class="modal-footer">
				<div class="w-100">
					<div class="row">
						<div class="col"><button type="button" class="btn w-100" data-bs-dismiss="modal">
								Cancel
							</button></div>
						<div class="col">
							<a href="#" id="confirm-delete" class="btn btn-danger w-100">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
