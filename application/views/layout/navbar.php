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
								<div>Aurelio Abi Nugroho<?= $this->fungsi->user_login()->nama ?></div>
								<div class="mt-1 small text-secondary">Divisi Development</div>
							</div>
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="sidebar-menu">
					<ul class="navbar-nav pt-lg-3">
						<li class="nav-item <?= $this->uri->segment(1) == 'mahasiswa' || $this->uri->segment(1) == '' ? 'active bg-secondary-lt' : '' ?>">
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
						<li class="nav-item dropdown <?= $this->uri->segment(1) == 'vital' || $this->uri->segment(1) == 'daftar' || $this->uri->segment(1) == 'pinjam' ? 'active' : '' ?>">
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
								<span class="nav-link-title"> Arsip </span>
							</a>
							<div class="dropdown-menu <?= $this->uri->segment(1) == 'vital' || $this->uri->segment(1) == 'daftar' || $this->uri->segment(1) == 'pinjam' ? 'active show' : '' ?>">
								<a
									class="dropdown-item <?= $this->uri->segment(1) == 'vital' ? 'active' : '' ?>"
									href="<?= site_url('vital') ?>">
									Arsip Vital
								</a>
								<a
									class="dropdown-item <?= $this->uri->segment(1) == 'daftar' ? 'active' : '' ?>"
									href="<?= site_url('daftar') ?>">
									Daftar
								</a>
								<!-- <a
									class="dropdown-item <?= $this->uri->segment(1) == 'pinjam' ? 'active' : '' ?>"
									href="<?= site_url('pinjam') ?>">
									Pinjaman
								</a> -->
							</div>
						</li>
						<?php if ($this->session->userdata('level') == 1) { ?>
							<li class="nav-item <?= $this->uri->segment(1) == 'user' ? 'active bg-secondary-lt' : '' ?>">
								<a class="nav-link" href="<?= site_url('user') ?>">
									<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
										<svg
											xmlns="http://www.w3.org/2000/svg"
											class="icon "
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
									<span class="nav-link-title"> User </span>
								</a>
							</li>
						<?php } ?>
						<div class="empty">
							<div class="empty-action">
								<a href="<?= base_url('login/logout') ?>" class="btn btn-md btn-red btn-pill w-100">
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
								<div><?= $this->fungsi->user_login()->nama ?></div>
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
