-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2025 at 03:31 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `daftar_id` int(10) NOT NULL,
  `kode_klasifikasi` varchar(50) NOT NULL,
  `indek` enum('Ahli Waris','Akte Tanah') NOT NULL,
  `no_item` int(20) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `tingkat_perkembangan` enum('asli/copy','asli & copy') NOT NULL,
  `keamanan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`daftar_id`, `kode_klasifikasi`, `indek`, `no_item`, `uraian`, `tanggal`, `jumlah`, `tingkat_perkembangan`, `keamanan`, `lokasi`, `file`) VALUES
(3, 'KL003', 'Akte Tanah', 103, 'Akte Tanah C', '2023-03-10', '12', 'asli & copy', 'Biasa', 'Rak B1', 'web_arsip8.docx'),
(6, 'KL006', 'Ahli Waris', 106, 'Dokumen Ahli Waris F', '2024-02-14', NULL, 'asli/copy', 'Rahasia', 'Rak A4', 'file6.pdf'),
(23, 'KB.05.01.01', 'Ahli Waris', 23, '132as', '2025-01-06', '10', 'asli/copy', 'sad', 'asdas', 'web_arsip.docx'),
(24, 'dasdasd', 'Akte Tanah', 1212, 'asd', '2025-01-06', 'dasdas', 'asli/copy', 'dasdas', 'dsadas', 'web_arsip1.docx'),
(25, 'fgs', 'Ahli Waris', 121, 'sadasd', '2025-01-06', 'dasd1', 'asli/copy', 'asdasd', 'asdasd', 'web_arsip2.docx'),
(26, '312312', 'Ahli Waris', 123, 'saddasd', '2025-01-06', 'dasdasdas', 'asli/copy', 'dasda', 'sdasdasd', 'web_arsip3.docx'),
(27, 'KB.05.01.01', 'Ahli Waris', 1212, 'sda', '2025-01-06', '3123', 'asli/copy', 'sdasdas', 'dsdasd', 'web_arsip5.docx');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `npm` char(8) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama_lengkap`, `npm`, `jenis_kelamin`, `kelas`, `jurusan`, `tanggal_lahir`, `alamat`) VALUES
(1, 'Aurelio', '12345678', 'Perempuan', 'A', 'Teknik Informatika', '2025-01-04', 'Jl. Contoh No. 1'),
(2, 'User', '87654321', 'Laki-laki', 'B', 'Sistem Informasi', '2001-02-02', 'Jl. Contoh No. 2'),
(4, 'aa', 'a', 'Laki-laki', 'a', 'a', '2222-02-12', 'd'),
(6, 'sdasd', 'dasdasda', 'Laki-laki', 'asdasd', 'asdasdas', '2025-01-06', 'dasdasd'),
(7, 'dasdasd', 'asdasdsa', 'Laki-laki', 'asdasda', 'sdasdasd', '2025-01-06', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `pinjam_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `kode_klasifikasi` varchar(50) NOT NULL,
  `arsip_pinjam` varchar(50) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_kembali` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:petugas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aurelio Abi Nugroho', 1),
(2, 'asdsa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asd', 0),
(3, 'abi', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abi', 0),
(4, 'asdsda', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdasd', 0),
(5, 'dasda', 'c7a9f84bb5ac28e434238294999c298637e77cce', 'sad', 0),
(8, 'asd', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vital`
--

CREATE TABLE `vital` (
  `vital_id` int(11) NOT NULL,
  `seksi` varchar(100) DEFAULT NULL,
  `kode_klasifikasi` varchar(50) DEFAULT NULL,
  `jenis_arsip` varchar(255) DEFAULT NULL,
  `tingkat_perkembangan` enum('asli/copy','asli & copy') DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kurun_waktu` date DEFAULT NULL,
  `format_media` enum('Kertas','File','Kertas & File') DEFAULT NULL,
  `metode_perlindungan` varchar(255) DEFAULT NULL,
  `retensi` varchar(50) DEFAULT NULL,
  `lokasi_simpan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vital`
--

INSERT INTO `vital` (`vital_id`, `seksi`, `kode_klasifikasi`, `jenis_arsip`, `tingkat_perkembangan`, `jumlah`, `kurun_waktu`, `format_media`, `metode_perlindungan`, `retensi`, `lokasi_simpan`) VALUES
(28, 'sdasdas', 'dsadasd', 'asdasdas', 'asli/copy', 0, '2025-01-06', 'Kertas', 'das', 'dasd', 'dasd'),
(32, 'sdfsd', 'fdsfsdf', 'sdfsdfsdf', 'asli/copy', 2, '2025-01-06', 'Kertas & File', 'fsdfs', 'dfdsfsdf', 'sfdfsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`daftar_id`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`pinjam_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vital`
--
ALTER TABLE `vital`
  ADD PRIMARY KEY (`vital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `daftar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `pinjam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vital`
--
ALTER TABLE `vital`
  MODIFY `vital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
