<!doctype html>
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
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Sign in with cover - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
	<!-- CSS files -->
	<link href="<?= base_url() ?>template/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
	<link href="<?= base_url() ?>template/dist/css/demo.min.css?1692870487" rel="stylesheet" />
	<style>
		@import url('https://rsms.me/inter/inter.css');

		:root {
			--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}

		body {
			font-feature-settings: "cv03", "cv04", "cv11";
		}
	</style>
</head>

<body class=" d-flex flex-column bg-white">
	<script src="<?= base_url() ?>template/dist/js/demo-theme.min.js?1692870487"></script>
	<div class="row g-0 flex-fill">
		<div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
			<div class="container container-tight my-5 px-lg-5">
				<div class="text-center mb-4">
					<a href="." class="navbar-brand navbar-brand-autodark"><img src="<?= base_url() ?>template/static/gundar.png" height="150" alt=""></a>
				</div>
				<!-- Flash Message -->
				<?php if ($this->session->flashdata('error')): ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						<?= $this->session->flashdata('error'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<?= $this->session->flashdata('success'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>
				<h2 class="h3 text-center mb-3">
					Login to your account
				</h2>
				<!-- End Flash Message -->
				<form action="<?= site_url('login/process') ?>" method="post">
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Enter your username" autofocus autocomplete="off">
					</div>
					<div class="mb-2">
						<label class="form-label">
							Password
						</label>
						<div class="input-group input-group-flat">
							<input type="password" class="form-control" name="password" placeholder="Enter your password" id="myInput" autocomplete="off">
							<span class="input-group-text">
								<a href="#" class="link-secondary" onclick="myFunction()" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
										<path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
									</svg>
								</a>
							</span>
						</div>
					</div>
					<div class="mb-2">
						<label class="form-check">
							<input type="checkbox" class="form-check-input" />
							<span class="form-check-label">Remember me on this device</span>
						</label>
					</div>
					<div class="form-footer">
						<button type="submit" name="login" class="btn btn-primary w-100">Sign in</button>
					</div>
				</form>
				<div class="text-center text-secondary mt-3">
					Don't have account yet? <a href="<?= site_url('register') ?>" tabindex="-1">Register</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
			<!-- Photo -->
			<div class="bg-cover h-100 min-vh-100" style="background-image: url(<?= base_url() ?>template/static/hd.png)"></div>
		</div>


		<div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					<div class="modal-status"></div>
					<div class="modal-body text-center py-4">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
							<path d="M9 12l2 2l4 -4" />
						</svg>
						<h3 id="modal-title"></h3>
						<div class="text-secondary" id="modal-message"></div>
					</div>
					<div class="modal-footer">
						<div class="w-100">
							<div class="row">
								<div class="col">
									<button class="btn w-100 btn-green" data-bs-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- Libs JS -->
	<!-- Tabler Core -->
	<script src="<?= base_url() ?>template/dist/js/tabler.min.js?1692870487" defer></script>
	<script src="<?= base_url() ?>template/dist/js/demo.min.js?1692870487" defer></script>
	<script>
		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
	<script>
		// Function to hide alerts after 5 seconds
		setTimeout(function() {
			const alerts = document.querySelectorAll('.alert');
			alerts.forEach(alert => {
				alert.style.transition = "opacity 0.5s ease-out";
				alert.style.opacity = "0";
				setTimeout(() => alert.remove(), 500); // Remove from DOM after fading
			});
		}, 3000); // 5000ms = 5 seconds
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			<?php if ($this->session->flashdata('modal')): ?>
				const modalData = <?= json_encode($this->session->flashdata('modal')); ?>;
				const modal = document.getElementById('modal-success');

				// Set status warna
				const modalStatus = modal.querySelector('.modal-status');
				modalStatus.className = 'modal-status';
				modalStatus.classList.add(modalData.type === 'success' ? 'bg-success' : 'bg-danger');

				// Set ikon warna
				const icon = modal.querySelector('svg');
				icon.className = 'icon mb-2 icon-lg';
				icon.classList.add(modalData.type === 'success' ? 'text-green' : 'text-red');

				// Set judul dan pesan
				document.getElementById('modal-title').innerText = modalData.title;
				document.getElementById('modal-message').innerText = modalData.message;

				// Tampilkan modal
				const bootstrapModal = new bootstrap.Modal(modal);
				bootstrapModal.show();
			<?php endif; ?>
		});
	</script>

</body>

</html>
