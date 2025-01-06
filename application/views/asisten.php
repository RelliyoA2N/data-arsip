<div class="container-xl">
	<div class="row row-deck row-cards">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Calon Asisten</h3>
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
											class="btn btn-sm btn-pill btn-info"
											data-mahasiswa='<?= json_encode($mhs, JSON_HEX_APOS); ?>'>
											Update
										</a>



										<!-- Tombol Delete -->
										<a
											class="btn btn-sm btn-pill btn-red btn-delete"
											data-id="<?= $mhs['id']; ?>"
											data-bs-toggle="modal"
											data-bs-target="#modal-danger">
											Delete
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
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
