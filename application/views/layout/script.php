<!-- Libs JS -->
<script
	src="<?= base_url() ?>template/dist/libs/apexcharts/dist/apexcharts.min.js?1692870487"
	defer></script>
<script
	src="<?= base_url() ?>template/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487"
	defer></script>

<script src="<?= base_url() ?>template/dist/libs/dropzone/dist/dropzone-min.js?1692870487" defer></script>
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

<!-- sort data  -->
<script>
	document.addEventListener("DOMContentLoaded", function() {
		const list = new List('table-default', {
			sortClass: 'table-sort',
			listClass: 'table-tbody',
			valueNames: ['sort-no', 'sort-nama', 'sort-npm', 'sort-jenkel', 'sort-kelas', 'sort-jur', 'sort-tanggal', 'sort-alamat', 'sort-seksi', 'sort-kode', 'sort-jenis', 'sort-tingkat', 'sort-jumlah', 'sort-kurun', 'sort-format', 'sort-metode', 'sort-retensi', 'sort-simpan']
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
		entriesInput.value = "8";
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


<!-- Edit Mahasiswa  -->
<script>
	document.querySelectorAll('.btn-mhs').forEach(button => {
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


<!-- Edit Vital -->
<script>
	// Handle the Edit Vital button clicks
	document.querySelectorAll('.btn-vital').forEach(button => {
		button.addEventListener('click', function() {
			// Parse the data-vital attribute
			const data = JSON.parse(this.getAttribute('data-vital'));

			// Populate the modal fields
			document.getElementById('edit-id').value = data.id;
			document.getElementById('edit-seksi').value = data.seksi;
			document.getElementById('edit-kode_klasifikasi').value = data.kode_klasifikasi;
			document.getElementById('edit-jenis_arsip').value = data.jenis_arsip;
			document.getElementById('edit-tingkat_perkembangan').value = data.tingkat_perkembangan;
			document.getElementById('edit-jumlah').value = data.jumlah;
			document.getElementById('edit-kurun_waktu').value = data.kurun_waktu;
			document.getElementById('edit-format_media').value = data.format_media;
			document.getElementById('edit-metode_perlindungan').value = data.metode_perlindungan;
			document.getElementById('edit-retensi').value = data.retensi;
			document.getElementById('edit-lokasi_simpan').value = data.lokasi_simpan;

			// Show the modal
			const modal = new bootstrap.Modal(document.getElementById('modal-vital'));
			modal.show();
		});
	});

	// Handle modal hidden event to clean up
	document.getElementById('modal-vital').addEventListener('hidden.bs.modal', function() {
		// Remove any leftover backdrop
		document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());

		// Ensure the modal-open class is removed from the body
		document.body.classList.remove('modal-open');
	});
</script>


<!-- update daftar  -->
<script>
	document.querySelectorAll('.btn-daftar').forEach(button => {
		button.addEventListener('click', function() {
			const data = JSON.parse(this.getAttribute('data-edit'));

			// Mengisi nilai-nilai form
			document.getElementById('edit-id').value = data.daftar_id;
			document.getElementById('edit-kode_klasifikasi').value = data.kode_klasifikasi;
			document.getElementById('edit-indek').value = data.indek;
			document.getElementById('edit-no_item').value = data.no_item;
			document.getElementById('edit-uraian').value = data.uraian;
			document.getElementById('edit-tanggal').value = data.tanggal;
			document.getElementById('edit-jumlah').value = data.jumlah;
			document.getElementById('edit-tingkat_perkembangan').value = data.tingkat_perkembangan;
			document.getElementById('edit-keamanan').value = data.keamanan;
			document.getElementById('edit-lokasi').value = data.lokasi;

			// Menampilkan file yang sudah ada sebelumnya
			const filePreview = document.getElementById('edit-file-preview');
			filePreview.innerHTML = ''; // Clear previous file preview

			if (data.file && data.file !== '[]') {
				const files = JSON.parse(data.file); // Decode array of file names
				files.forEach(file => {
					const fileLink = document.createElement('a');
					fileLink.href = 'uploads/' + file; // Link untuk mengakses file
					fileLink.target = '_blank';
					fileLink.innerText = file;
					filePreview.appendChild(fileLink);
					filePreview.appendChild(document.createElement('br'));
				});
			}

			// Menampilkan modal
			const modal = new bootstrap.Modal(document.getElementById('modal-daftar'));
			modal.show();
		});
	});
</script>


<!-- Edit  -->
<script>
	document.querySelectorAll('.btn-user').forEach(button => {
		button.addEventListener('click', function() {
			// Ambil data dari atribut data-vital
			const data = JSON.parse(this.getAttribute('data-user'));

			// Isi data ke dalam modal edit
			document.getElementById('edit-user_id').value = data.user_id;
			document.getElementById('edit-nama').value = data.nama;
			document.getElementById('edit-username').value = data.username;
			document.getElementById('edit-password').value = data.password;
			document.getElementById('edit-level').value = data.level;

			// Tampilkan modal edit
			const modal = new bootstrap.Modal(document.getElementById('modal-user'));
			modal.show();
		});
	});
</script>

<!-- <script>
	document.querySelectorAll('.btn-info').forEach(button => {
		button.addEventListener('click', function() {
			// Ambil data dari atribut data-mahasiswa
			const data = JSON.parse(this.getAttribute('data-vital'));

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
</script> -->


<!-- Hapus data Mahasiswa -->
<script>
	document.querySelectorAll('.btn-mhs').forEach(button => {
		button.addEventListener('click', function() {
			const id = this.getAttribute('data-id-mhs'); // Ambil ID dari tombol
			const confirmDelete = document.getElementById('confirm-delete');
			confirmDelete.setAttribute('href', '<?= site_url('mahasiswa/hapus/'); ?>' + id); // Atur URL
		});
	});
</script>

<!-- Hapus data Vital -->
<script>
	document.querySelectorAll('.btn-vital').forEach(button => {
		button.addEventListener('click', function() {
			const id = this.getAttribute('data-id-vital'); // Ambil ID dari tombol
			const confirmDelete = document.getElementById('confirm-delete');
			confirmDelete.setAttribute('href', '<?= site_url('vital/hapus/'); ?>' + id); // Atur URL
		});
	});
</script>

<!-- Hapus data User -->
<script>
	document.querySelectorAll('.btn-user').forEach(button => {
		button.addEventListener('click', function() {
			const id = this.getAttribute('data-id-user'); // Ambil ID dari tombol
			const confirmDelete = document.getElementById('confirm-delete');
			confirmDelete.setAttribute('href', '<?= site_url('user/hapus/'); ?>' + id); // Atur URL
		});
	});
</script>

<!-- Hapus data daftar -->
<script>
	document.querySelectorAll('.btn-daftar').forEach(button => {
		button.addEventListener('click', function() {
			const id = this.getAttribute('data-id-daftar'); // Ambil ID dari tombol
			const confirmDelete = document.getElementById('confirm-delete');
			confirmDelete.setAttribute('href', '<?= site_url('daftar/hapus/'); ?>' + id); // Atur URL
		});
	});
</script>



<script>
	document.addEventListener('DOMContentLoaded', function() {
		<?php if ($this->session->flashdata('success')): ?>
			var successModal = new bootstrap.Modal(document.getElementById('modal-success'));
			successModal.show();
		<?php endif; ?>
	});
</script>


</body>

</html>
