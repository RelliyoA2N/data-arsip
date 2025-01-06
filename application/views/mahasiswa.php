<!-- Page header -->
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle"> Data </div>
				<h2 class="page-title"> Mahasiswa </h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">
					<a
						href="#"
						class="btn btn-primary d-none d-sm-inline-block"
						data-bs-toggle="modal"
						data-bs-target="#modal-tambah">
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
						data-bs-target="#modal-tambah"
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
						<h3 class="card-title">Mahasiswa</h3>
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
									<th><button class="table-sort" data-sort="sort-no">No</button></th>
									<th><button class="table-sort" data-sort="sort-nama">Nama lengkap</button></th>
									<th><button class="table-sort" data-sort="sort-npm">NPM</button></th>
									<th><button class="table-sort" data-sort="sort-jenkel">Jenis Kelamin</button></th>
									<th><button class="table-sort" data-sort="sort-kelas">Kelas</button></th>
									<th><button class="table-sort" data-sort="sort-jur">Jurusan</button></th>
									<th><button class="table-sort" data-sort="sort-tanggal">Tanggal Lahir</button></th>
									<th><button class="table-sort" data-sort="sort-alamat">Alamat</button></th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody class="table-tbody">
								<?php if (!empty($mahasiswa)): ?>
									<?php foreach ($mahasiswa as $i => $mhs): ?>
										<tr>
											<td class="sort-no text-center"><?= $i + 1; ?></td>
											<td class="sort-nama"><?= $mhs['nama_lengkap']; ?></td>
											<td class="sort-npm"><?= $mhs['npm']; ?></td>
											<td class="sort-jenkel"><?= $mhs['jenis_kelamin']; ?></td>
											<td class="sort-kelas text-center"><?= $mhs['kelas']; ?></td>
											<td class="sort-jur"><?= $mhs['jurusan']; ?></td>
											<td class="sort-tanggal text-center"><?= date('d-m-Y', strtotime($mhs['tanggal_lahir'])); ?></td>
											<td class="sort-alamat"><?= $mhs['alamat']; ?></td>
											<td class="text-center">
												<!-- Tombol Update -->
												<a
													class="btn btn-sm btn-pill btn-info btn-mhs"
													data-mahasiswa='<?= json_encode($mhs, JSON_HEX_APOS); ?>'>
													Update
												</a>
												<!-- Tombol Delete -->
												<a
													class="btn btn-sm btn-pill btn-red btn-delete btn-mhs"
													data-id-mhs="<?= $mhs['id']; ?>"
													data-bs-toggle="modal"
													data-bs-target="#modal-danger-mhs">
													Delete
												</a>
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



<!-- Modal Update -->
<div
	class="modal modal-blur fade"
	id="modal-edit"
	tabindex="-1"
	role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data Mahasiswa</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<form action="<?= site_url('mahasiswa/edit'); ?>" method="post">
				<input type="hidden" name="id" id="edit-id" />
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Nama Lengkap</label>
						<input type="text" name="nama_lengkap" id="edit-nama" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">NPM</label>
						<input type="text" name="npm" id="edit-npm" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Jenis Kelamin</label>
						<select name="jenis_kelamin" id="edit-jenis-kelamin" class="form-select" required>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Kelas</label>
						<input type="text" name="kelas" id="edit-kelas" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Jurusan</label>
						<input type="text" name="jurusan" id="edit-jurusan" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" id="edit-tanggal-lahir" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea name="alamat" id="edit-alamat" class="form-control" rows="3" required></textarea>
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


<!-- Modal Update -->
<div
	class="modal modal-blur fade"
	id="modal-tambah"
	tabindex="-1"
	role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Mahasiswa</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<form action="<?= site_url('mahasiswa/tambah'); ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Nama Lengkap</label>
						<input type="text" name="nama_lengkap" id="edit-nama" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">NPM</label>
						<input type="text" name="npm" id="edit-npm" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Jenis Kelamin</label>
						<select name="jenis_kelamin" id="edit-jenis-kelamin" class="form-select" required>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Kelas</label>
						<input type="text" name="kelas" id="edit-kelas" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Jurusan</label>
						<input type="text" name="jurusan" id="edit-jurusan" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" id="edit-tanggal-lahir" class="form-control" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea name="alamat" id="edit-alamat" class="form-control" rows="3" required></textarea>
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
<div class="modal modal-blur fade" id="modal-danger-mhs" tabindex="-1" role="dialog" aria-hidden="true">
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
				<h3>Are you sure?m</h3>
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
