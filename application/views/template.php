<!DOCTYPE html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Dashboard - Tabler - Premium and Open Source dashboard template with
		responsive and high quality UI.</title>
	<!-- CSS files -->
	<link href="<?= base_url() ?>template/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
	<link
		href="<?= base_url() ?>template/dist/css/tabler-payments.min.css?1692870487"
		rel="stylesheet" />
	<link
		href="<?= base_url() ?>template/dist/css/tabler-vendors.min.css?1692870487"
		rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/demo.min.css?1692870487" rel="stylesheet" />
	<style>
		@import url("https://rsms.me/inter/inter.css");

		:root {
			--tblr-font-sans-serif: "Inter Var", -apple-system, BlinkMacSystemFont,
				San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}

		body {
			font-feature-settings: "cv03", "cv04", "cv11";
		}
	</style>
</head>

<body>
	<script src="<?= base_url() ?>template/dist/js/demo-theme.min.js?1692870487"></script>
	<div class="page">
		<!-- Sidebar -->
		<aside
			class="navbar navbar-vertical navbar-expand-lg"
			data-bs-theme="light">
			<div class="container-fluid">
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#sidebar-menu"
					aria-controls="sidebar-menu"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h1 class="navbar-brand navbar-brand-autodark">
					<a href=".">
						<img
							src="<?= base_url() ?>template/static/gundar.png"
							width="200"
							height="70"
							alt="Tabler"
							class="navbar-image" />
					</a>
				</h1>
				<div class="navbar-nav flex-row d-lg-none">
					<div class="nav-item d-none d-lg-flex me-3">
						<div class="btn-list">
							<a
								href="https://github.com/tabler/tabler"
								class="btn"
								target="_blank"
								rel="noreferrer">
								<!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
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
									<path
										d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
								</svg>
								Source code
							</a>
							<a
								href="https://github.com/sponsors/codecalm"
								class="btn"
								target="_blank"
								rel="noreferrer">
								<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
								<svg
									xmlns="http://www.w3.org/2000/svg"
									class="icon text-pink"
									width="24"
									height="24"
									viewBox="0 0 24 24"
									stroke-width="2"
									stroke="currentColor"
									fill="none"
									stroke-linecap="round"
									stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path
										d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
								</svg>
								Sponsor
							</a>
						</div>
					</div>
					<div class="d-none d-lg-flex">
						<a
							href="?theme=dark"
							class="nav-link px-0 hide-theme-dark"
							title="Enable dark mode"
							data-bs-toggle="tooltip"
							data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
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
								<path
									d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
							</svg>
						</a>
						<a
							href="?theme=light"
							class="nav-link px-0 hide-theme-light"
							title="Enable light mode"
							data-bs-toggle="tooltip"
							data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
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
								<path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
								<path
									d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
							</svg>
						</a>
					</div>
					<div class="nav-item dropdown">
						<a
							href="#"
							class="nav-link d-flex lh-1 text-reset p-0"
							data-bs-toggle="dropdown"
							aria-label="Open user menu">
							<div class="d-none d-xl-block ps-2">
								<div>Aurelio Abi Nugroho</div>
								<div class="mt-1 small text-secondary">Divisi Development</div>
							</div>
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="sidebar-menu">
					<ul class="navbar-nav pt-lg-3">
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('mahasiswa') ?>">
								<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
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
										<path d="M5 12l-2 0l9 -9l9 9l-2 0" />
										<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
										<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
									</svg>
								</span>
								<span class="nav-link-title"> Mahasiswa </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('asisten') ?>">
								<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
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
										<path d="M9 11l3 3l8 -8" />
										<path
											d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
									</svg>
								</span>
								<span class="nav-link-title"> Calon Asisten </span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#navbar-help"
								data-bs-toggle="dropdown"
								data-bs-auto-close="false"
								role="button"
								aria-expanded="false">
								<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
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
										<path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
										<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
										<path d="M15 15l3.35 3.35" />
										<path d="M9 15l-3.35 3.35" />
										<path d="M5.65 5.65l3.35 3.35" />
										<path d="M18.35 5.65l-3.35 3.35" />
									</svg>
								</span>
								<span class="nav-link-title"> Help </span>
							</a>
							<div class="dropdown-menu">
								<a
									class="dropdown-item"
									href="https://tabler.io/docs"
									target="_blank"
									rel="noopener">
									Documentation
								</a>
								<a class="dropdown-item" href="./changelog.html">
									Changelog
								</a>
								<a
									class="dropdown-item"
									href="https://github.com/tabler/tabler"
									target="_blank"
									rel="noopener">
									Source code
								</a>
								<a
									class="dropdown-item text-pink"
									href="https://github.com/sponsors/codecalm"
									target="_blank"
									rel="noopener">
									<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon icon-inline me-1"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
									</svg>
									Sponsor project!
								</a>
							</div>
						</li>
						<div class="empty">
							<div class="empty-action">
								<a href="<?= base_url('auth/logout') ?>" class="btn btn-sm btn-red btn-pill w-100">
									<!-- Download SVG icon from http://tabler-icons.io/i/search -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
										<path d="M9 12h12l-3 -3" />
										<path d="M18 15l3 -3" />
									</svg>
									Log Out
								</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</aside>
		<!-- Navbar -->
		<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
			<div class="container-xl">
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbar-menu"
					aria-controls="navbar-menu"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-nav flex-row order-md-last">
					<div class="d-none d-md-flex">
						<a
							href="?theme=dark"
							class="nav-link px-0 hide-theme-dark"
							title="Enable dark mode"
							data-bs-toggle="tooltip"
							data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
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
								<path
									d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
							</svg>
						</a>
						<a
							href="?theme=light"
							class="nav-link px-0 hide-theme-light"
							title="Enable light mode"
							data-bs-toggle="tooltip"
							data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
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
								<path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
								<path
									d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
							</svg>
						</a>
					</div>
					<div class="nav-item dropdown">
						<a
							href="#"
							class="nav-link d-flex lh-1 text-reset p-0"
							data-bs-toggle="dropdown"
							aria-label="Open user menu">
							<div class="d-none d-xl-block ps-2">
								<div>Aurelio Abi Nugroho</div>
								<div class="mt-1 small text-secondary">Divisi Development</div>
							</div>
						</a>
						<!-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
							<a href="#" class="dropdown-item">Status</a>
							<a href="<?= base_url() ?>template/profile.html" class="dropdown-item">Profile</a>
							<a href="#" class="dropdown-item">Feedback</a>
							<div class="dropdown-divider"></div>
							<a href="<?= base_url() ?>template/settings.html" class="dropdown-item">Settings</a>
							<a href="<?= base_url() ?>template/sign-in.html" class="dropdown-item">Logout</a>
						</div> -->
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div>
						<form action="<?= base_url() ?>template/" method="get" autocomplete="off" novalidate>
							<div class="input-icon">
								<span class="input-icon-addon">
									<!-- Download SVG icon from http://tabler-icons.io/i/search -->
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
										<path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
										<path d="M21 21l-6 -6" />
									</svg>
								</span>
								<input
									type="text"
									value=""
									class="form-control"
									placeholder="Search…"
									aria-label="Search in website" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<div class="page-wrapper">
			<!-- Page header -->
			<?php echo $contents ?>

			<footer class="footer footer-transparent d-print-none">
				<div class="container-xl">
					<div class="row text-center align-items-center flex-row-reverse">
						<div class="col-lg-auto ms-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item"><a
										href="https://tabler.io/docs"
										target="_blank"
										class="link-secondary"
										rel="noopener">Documentation</a></li>
								<li class="list-inline-item"><a href="<?= base_url() ?>template/license.html" class="link-secondary">License</a></li>
								<li class="list-inline-item"><a
										href="https://github.com/tabler/tabler"
										target="_blank"
										class="link-secondary"
										rel="noopener">Source code</a></li>
								<li class="list-inline-item">
									<a
										href="https://github.com/sponsors/codecalm"
										target="_blank"
										class="link-secondary"
										rel="noopener">
										<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
										<svg
											xmlns="http://www.w3.org/2000/svg"
											class="icon text-pink icon-filled icon-inline"
											width="24"
											height="24"
											viewBox="0 0 24 24"
											stroke-width="2"
											stroke="currentColor"
											fill="none"
											stroke-linecap="round"
											stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path
												d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
										</svg>
										Sponsor
									</a>
								</li>
							</ul>
						</div>
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									Copyright &copy; 2023
									<a href="." class="link-secondary">Tabler</a>. All rights
									reserved.
								</li>
								<li class="list-inline-item">
									<a
										href="<?= base_url() ?>template/changelog.html"
										class="link-secondary"
										rel="noopener">
										v1.0.0-beta20
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Modal Update -->
	<div
		class="modal modal-blur fade"
		id="modal-edit"
		tabindex="-1"
		role="dialog"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
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


	<!-- Tambah data Mahasiswa  -->
	<div
		class="modal modal-blur fade"
		id="modal-tambah"
		tabindex="-1"
		role="dialog"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
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
							<input type="text" name="nama_lengkap" class="form-control" required />
						</div>
						<div class="mb-3">
							<label class="form-label">NPM</label>
							<input type="text" name="npm" class="form-control" required />
						</div>
						<div class="mb-3">
							<label class="form-label">Jenis Kelamin</label>
							<select name="jenis_kelamin" class="form-select" required>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Kelas</label>
							<input type="text" name="kelas" class="form-control" required />
						</div>
						<div class="mb-3">
							<label class="form-label">Jurusan</label>
							<input type="text" name="jurusan" class="form-control" required />
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Lahir</label>
							<input type="date" name="tanggal_lahir" class="form-control" required />
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<textarea name="alamat" class="form-control" rows="3" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
							Cancel
						</button>
						<button type="submit" class="btn btn-primary">
							Tambah
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


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
	<!-- Libs JS -->
	<script
		src="<?= base_url() ?>template/dist/libs/apexcharts/dist/apexcharts.min.js?1692870487"
		defer></script>
	<script
		src="<?= base_url() ?>template/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487"
		defer></script>
	<script
		src="<?= base_url() ?>template/dist/libs/jsvectormap/dist/maps/world.js?1692870487"
		defer></script>
	<script
		src="<?= base_url() ?>template/dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487"
		defer></script>
	<script src="<?= base_url() ?>template/dist/libs/list.js/dist/list.min.js?1692870487" defer></script>
	<!-- Tabler Core -->
	<script src="<?= base_url() ?>template/dist/js/tabler.min.js?1692870487" defer></script>
	<script src="<?= base_url() ?>template/dist/js/demo.min.js?1692870487" defer></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const list = new List('table-default', {
				sortClass: 'table-sort',
				listClass: 'table-tbody',
				valueNames: ['sort-no', 'sort-nama', 'sort-npm', 'sort-jenkel', 'sort-kelas', 'sort-jur', 'sort-tanggal', 'sort-alamat']
			});
		})
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const entriesInput = document.querySelector("#entries");
			const table = document.querySelector("#table-default");
			const rows = table.querySelectorAll("tbody tr");

			function updateTableRows() {
				const value = parseInt(entriesInput.value, 10);
				if (isNaN(value) || value <= 0) {
					rows.forEach(row => (row.style.display = "none")); // Sembunyikan semua jika input tidak valid
				} else {
					rows.forEach((row, index) => {
						row.style.display = index < value ? "" : "none"; // Tampilkan sesuai jumlah input
					});
				}
			}

			entriesInput.addEventListener("input", updateTableRows);

			// Set default tampilan awal (5 baris)
			entriesInput.value = "10";
			updateTableRows();
		});
	</script>



	<script>
		function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i, j, txtValue, matchFound;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTableMain");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, skipping the header row
			for (i = 1; i < tr.length; i++) { // Start at 1 to skip header
				td = tr[i].getElementsByTagName("td");
				matchFound = false; // Reset the flag

				// Loop through all td elements in the row
				for (j = 0; j < td.length; j++) {
					if (td[j]) {
						txtValue = td[j].textContent || td[j].innerText;
						if (txtValue.toUpperCase().indexOf(filter) > -1) {
							matchFound = true; // Mark as matched
							break; // No need to check further columns in this row
						}
					}
				}

				// Show or hide the row based on matchFound flag
				if (matchFound) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	</script>
	<script>
		document.querySelectorAll('.btn-info').forEach(button => {
			button.addEventListener('click', function() {
				// Ambil data dari atribut data-mahasiswa
				const data = JSON.parse(this.getAttribute('data-mahasiswa'));

				// Isi data ke dalam modal edit
				document.getElementById('edit-id').value = data.id;
				document.getElementById('edit-nama').value = data.nama_lengkap;
				document.getElementById('edit-npm').value = data.npm;
				document.getElementById('edit-jenis-kelamin').value = data.jenis_kelamin;
				document.getElementById('edit-kelas').value = data.kelas;
				document.getElementById('edit-jurusan').value = data.jurusan;
				document.getElementById('edit-tanggal-lahir').value = data.tanggal_lahir;
				document.getElementById('edit-alamat').value = data.alamat;

				// Tampilkan modal edit
				const modal = new bootstrap.Modal(document.getElementById('modal-edit'));
				modal.show();
			});
		});
	</script>


	<script>
		document.querySelectorAll('.btn-delete').forEach(button => {
			button.addEventListener('click', function() {
				const id = this.getAttribute('data-id'); // Ambil ID dari tombol
				const confirmDelete = document.getElementById('confirm-delete');
				confirmDelete.setAttribute('href', '<?= site_url('mahasiswa/hapus/'); ?>' + id); // Atur URL
			});
		});
	</script>

</body>

</html>
