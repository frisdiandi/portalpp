-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2020 at 09:00 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalppj`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuntabilitas`
--

CREATE TABLE `akuntabilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akuntabilitas`
--

INSERT INTO `akuntabilitas` (`id`, `judul`, `file`, `opd`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Realisasi Anggaran Triwulan I', '5f5985efdf103_Realisasi-anggaran-triwulan-I.pdf', '-', '2019', NULL, NULL),
(2, 'Realisasi Pajak & Retribusi Daerah Triwulan I', '5f598673c253c_Realisasi-Pajak-dan-Retribusi-Daerah-triwulan-I.pdf', '-', '2019', NULL, NULL),
(3, 'Realisasi Pajak Restaurant & Hotel', '5f5986a566855_Realisasi-pajak-restaurant-dan-Hotel.pdf', '-', '2019', NULL, NULL),
(4, 'Laporan Realisasi Penyerapan Anggaran', '5f5986d9a9cc2_Laporan-Realisasi-Penyerapan-Anggaran.docx', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(5, 'Laporan Keuangan Audited 2018', '5f598712ae2b9_LK-AUDITED-2018.pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(6, 'Realisasi Pajak dan Retribusi Daerah', '5f5987463c098_Realisasi-Pajak-dan-Retribusi-Daerah.pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(7, 'Realisasi Pajak Restaurant dan Hotel', '5f59876671d48_Realisasi-Pajak-Restaurant-dan-Hotel (1).pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(8, 'Realisasi Pelaporan Aset Penambahan Barang Modal', '5f598b3d9bd34_Realisasi-Pelaporan-Aset-Penambahan-Barang-Modal.pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(9, 'LRA RSUD 2019', '5f598b5e0c055_LRA-2019.pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(10, 'Laporan Realisasi s.d Juni 2019', '5f598b777b7c6_Laporan-Realisasi-s.d-Juni-2019.pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL),
(11, 'Pendapatan Juni 2019', '5f598b90917d2_Pendapatan-Juni-2019 (1).pdf', 'BADAN PENGELOLA KEUANGAN DAERAH', '2019', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cpnsd`
--

CREATE TABLE `cpnsd` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpnsd`
--

INSERT INTO `cpnsd` (`id`, `judul`, `tanggal`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Pengumuman Hasil Seleksi Kompetensi Dasar (SKD) CPNS Formasi 2019 Kota Padang Panjang', '2020-03-22', '5e96889495ee8_[Pemko Padang Panjang] Pengumuman Hasil SKD.pdf', NULL, NULL),
(2, 'Surat dan Berita Acara Penundaan Pelaksanaan Seleksi Kompetensi Bidang (SKB) CPNS Formasi 2019', '2020-03-22', '5e968924eb24d_Surat Menpan dan Berita Acara BKN - Penundaan SKB.pdf', NULL, NULL),
(3, 'Pengumuman Jadwal,Tempat,dan Tata Tertib Pelaksanaan SKB CPNS 2019 Pemko Padang Panjang', '2020-08-18', '5f3bc27a9852d_Pengumuman Jadwal, Tempat dan Tata Tertib Pelaksanaan SKB CPNS 2019 Pemko Padang Panjang.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ensiklopedia`
--

CREATE TABLE `ensiklopedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap`
--

CREATE TABLE `gap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gap`
--

INSERT INTO `gap` (`id`, `judul`, `opd`, `kategori`, `file`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'GAP Bappeda', 'd413b447-4097-4af6-8b9d-1279a5893495', 'GAP', '5ef2cb26015b1_GAP Bappeda.pdf', '2021', NULL, NULL),
(2, 'GAP BKPSDM', '66e44058-535c-4b76-8a83-34cd93855309', 'GAP', '5ef2cb6c22e62_GAP BKPSDM.pdf', '2021', NULL, NULL),
(3, 'GAP BPBP Kesbangpol', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', 'GAP', '5ef2cb8b8f195_GAP BPBD Kesbangpol.pdf', '2021', NULL, NULL),
(4, 'GAP BPKD', 'c7c05db9-0618-43ac-a767-84c8c864584c', 'GAP', '5ef2cba4694a5_GAP BPKD.pdf', '2021', NULL, NULL),
(5, 'GAP Camat Barat', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', 'GAP', '5ef2cbbf5c65b_GAP Camat Barat.pdf', '2021', NULL, NULL),
(6, 'GAP Kecamatan Timur', 'b4717f26-b680-42c6-9a39-d81e1a1ba1db', 'GAP', '5ef2cbdc160fe_GAP Camat Timur.pdf', '2021', NULL, NULL),
(7, 'GAP Dinas Capil', '72323aaa-23ef-4264-abc7-3df196edc23d', 'GAP', '5ef2cbf65c97b_GAP Dinas Capil.pdf', '2021', NULL, NULL),
(8, 'GAP Dinas Kesehatan', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', 'GAP', '5ef2cc1dd9ee8_GAP dinas kesehatan.pdf', '2021', NULL, NULL),
(9, 'GAP Dinas Kominfo', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', 'GAP', '5ef2cc3e36859_GAP Dinas Kominfo.pdf', '2021', NULL, NULL),
(10, 'GAP Dinas Pangan Pertanian', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', 'GAP', '5ef2cc6638fd8_GAP Dinas Pangan Pertanian.pdf', '2021', NULL, NULL),
(11, 'GAP Pariwisata Pemuda dan Olahraga', '918b0d49-af11-4d91-8d3a-d763e9c31499', 'GAP', '5ef2cca0d459d_GAP Dinas Pariwisata Pemuda dan Olahraga.pdf', '2021', NULL, NULL),
(12, 'GAP Dinas Pendidikan', '07627d72-c264-4728-a489-12b5ae3126bb', 'GAP', '5ef2ccbf801d2_GAP Dinas Pendidikan.pdf', '2021', NULL, NULL),
(13, 'GAP Perhubungan', '54a2497d-1b95-4224-b1a7-b9794e40f837', 'GAP', '5ef2ccd2d5cd6_GAP Dinas Perhubungan.pdf', '2021', NULL, NULL),
(14, 'GAP Perindag KOP', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', 'GAP', '5ef2ccf4acb94_GAP Dinas Perindag KOP.pdf', '2021', NULL, NULL),
(15, 'GAP Perkim LH', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', 'GAP', '5ef2cd0a914d6_GAP Dinas Perkim LH.pdf', '2021', NULL, NULL),
(16, 'GAP Perpustakaan dan Kearsipan', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', 'GAP', '5ef2cd2a576d1_GAP Dinas Perpustakaan dan Kearsipan.pdf', '2021', NULL, NULL),
(17, 'GAP Dinas PU', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', 'GAP', '5ef2cd4924d83_GAP Dinas PU.pdf', '2021', NULL, NULL),
(18, 'GAP Dinas Sosial PPKBPPPA', '23a4f5c7-badf-4245-87e4-f301a0d324d7', 'GAP', '5ef2cd68e5767_GAP Dinas Sosial PPKBPPPA.pdf', '2021', NULL, NULL),
(19, 'GAP Inspektorat', '425a25ff-1628-41f8-bc9e-b37796626922', 'GAP', '5ef2cd838e171_GAP Inspektorat.pdf', '2021', NULL, NULL),
(20, 'GAP RSUD', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', 'GAP', '5ef2cd9728383_GAP RSUD.pdf', '2021', NULL, NULL),
(21, 'GAP Satpol PP Damkar', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', 'GAP', '5ef2cdbd2be8b_GAP Satpol PP Damkar.pdf', '2021', NULL, NULL),
(22, 'GAP Sekretariat Daerah', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', 'GAP', '5ef2cdd83a0a9_GAP Sekretariat Daerah.pdf', '2021', NULL, NULL),
(23, 'GAP Sekretariat DPRD', '61f7c332-b41a-4a96-bff3-07390e0d3c16', 'GAP', '5ef2cdeb280d8_GAP Sekretariat DPRD.pdf', '2021', NULL, NULL),
(24, 'GBS Bappeda', 'd413b447-4097-4af6-8b9d-1279a5893495', 'GBS', '5ef2d5a85ad4c_GBS Bappeda.pdf', '2021', NULL, NULL),
(25, 'GBS BKPSDM', '66e44058-535c-4b76-8a83-34cd93855309', 'GBS', '5ef2d5ce94147_GBS BKPSDM.pdf', '2021', NULL, NULL),
(26, 'GBS BPBD Kesbangpol', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', 'GBS', '5ef2d7f03fce4_GBS BPBD Kesbangpol.pdf', '2021', NULL, NULL),
(27, 'GBS BPKD', '66e44058-535c-4b76-8a83-34cd93855309\r\n', 'GBS', '5ef2d820a33bc_GBS BPKD.pdf', '2021', NULL, NULL),
(28, 'GBS PP Camat Barat', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', 'GBS', '5ef2d83e436d0_GBS Camat PP Barat.pdf', '2021', NULL, NULL),
(29, 'GBS PP Camat Timur', 'b4717f26-b680-42c6-9a39-d81e1a1ba1db', 'GBS', '5ef2d85094541_GBS Camat PP Timur.pdf', '2021', NULL, NULL),
(31, 'GBS Dinas Kesehatan', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', 'GBS', '5ef2d87f05780_GBS Dinas kesehatan.pdf', '2021', NULL, NULL),
(32, 'GBS Dinas Kominfo', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', 'GBS', '5ef2d94a1bd0f_GBS Dinas Kominfo.pdf', '2021', NULL, NULL),
(33, 'GBS Dinas Lingkungan  Hidup', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', 'GBS', '5ef2d96b65877_GBS Dinas Lingkungan Hidup.pdf', '2021', NULL, NULL),
(34, 'GBS Dinas Pariwisata', '918b0d49-af11-4d91-8d3a-d763e9c31499', 'GBS', '5ef2d990a7c9e_GBS Dinas Pariwisata.pdf', '2021', NULL, NULL),
(35, 'GBS Dinas Pendidikan', '07627d72-c264-4728-a489-12b5ae3126bb', 'GBS', '5ef2d9b3dd759_GBS Dinas Pendidikan.pdf', '2021', NULL, NULL),
(36, 'GBS Dinas Perhubungan', '54a2497d-1b95-4224-b1a7-b9794e40f837', 'GBS', '5ef2d9d402cee_GBS Dinas Perhubungan.pdf', '2021', NULL, NULL),
(37, 'GBS Dinas Perindagkop', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', 'GBS', '5ef2d9fb5a6c3_GBS Dinas PerindagKop.pdf', '2021', NULL, NULL),
(38, 'GBS Dinas Perpustakaan Arsip', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', 'GBS', '5ef2da1d6955e_GBS Dinas Perpustakaan Arsip.pdf', '2021', NULL, NULL),
(39, 'Dinas PU', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', 'GBS', '5ef2da36bcb85_GBS Dinas PU.pdf', '2021', NULL, NULL),
(40, 'GBS Dinas Sosial PPKBPPPA', '23a4f5c7-badf-4245-87e4-f301a0d324d7', 'GBS', '5ef2da4e724c0_GBS Dinas Sosial PPKBPPPA.pdf', '2021', NULL, NULL),
(41, 'GBS Inspektorat', '425a25ff-1628-41f8-bc9e-b37796626922', 'GBS', '5ef2da6edc3b3_GBS Inspektorat.pdf', '2021', NULL, NULL),
(42, 'GBS Pangan dan Pertanian', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', 'GBS', '5ef2da926f525_GBS Pangan dan Pertanian.pdf', '2021', NULL, NULL),
(43, 'GBS RSUD', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', 'GBS', '5ef2db027c3c9_GBS RSUD.pdf', '2021', NULL, NULL),
(44, 'GBS Satpol PP Damkar', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', 'GBS', '5ef2db247396f_GBS Satpol PP Damkar.pdf', '2021', NULL, NULL),
(45, 'GBS Sekretariat Daerah', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', 'GBS', '5ef2db3c46aef_GBS Sekretariat Daaerah.pdf', '2021', NULL, NULL),
(46, 'GBS Sekretariat DPRD', '61f7c332-b41a-4a96-bff3-07390e0d3c16', 'GBS', '5ef2db55d1ee4_GBS Sekretariat DPRD.pdf', '2021', NULL, NULL),
(47, 'GBS Dinas Kependudukan Capil', '72323aaa-23ef-4264-abc7-3df196edc23d', 'GBS', '5ef2e3284991a_GBS Dinas Kependudukan Capil.pdf', '2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geografis`
--

CREATE TABLE `geografis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `geografis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geografis`
--

INSERT INTO `geografis` (`id`, `geografis`, `created_at`, `updated_at`) VALUES
(1, 'Secara Geografis luas wilayah Kota Padang Panjang adalah 2.300 Ha atau sekitar 0.05% dari luas Provinsi Sumatera Barat. Secara geografis Padang Panjang terletak antara 100^ 20 dan 100^ Bujur Timur serta 0^ dan 0 32 Lintang selatan. Secara detailnya batas-batas Kota Padang Panjang antara lain :\r\n\r\nSebelah Barat Berbatasan dengan Kecamatan X Koto\r\nSebelah Timur Berbatasan dengan Kecamatan Batipuah\r\nSebelah Selatan berbatasan dengan Kecamatan X Koto\r\nSebelah Utara Berbatasan Dengan Kecamatan Kecamatan X Koto', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grafis`
--

CREATE TABLE `grafis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grafis`
--

INSERT INTO `grafis` (`id`, `desc`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '<p>Infografis Pariwisata</p>', '5e9565036bb33_PARIWISATA.jpg', NULL, NULL),
(2, '<p>Dinas Sosial</p>', '5e968d035a054_TINGKAT-KEMISKINAN.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungi`
--

CREATE TABLE `kunjungi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kunjungi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lambang`
--

CREATE TABLE `lambang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lambang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lambang`
--

INSERT INTO `lambang` (`id`, `lambang`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Tulisan PADANG PANJANG menunjukkan Kota Padang Panjang sebagai Daerah Otonomi. </span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Bintang Bersegi-lima melambangkan Ketuhanan Yang Maha Esa. </span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Tigabuah Gunung melambangkan bahwa Kota Padang Panjang dikelilingi oleh tiga buah gunung. </span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Garis Putih melambangkan bahwa Kota Padang Panjang sering diselimuti awan.</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Rumah Gadang melambangkan bahwa Kota Padang Panjang adalah suatu kota yang menjunjung tinggi kehidupan bermusyawarah dan mufakat dengan landasan Adat Basandi Syara&rsquo;, Syara&rsquo; Basandi Kitabullah untuk mencapai kemakmuran dan kesejahteraan. </span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Masjid melambangkan kehidupan masyarakat Kota Padang Panjang yang bernuansa Islami.</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Kitab terkembang melambangkan bahwa Kota Padang Panjang adalah Kota Pendidikan. </span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Setangkai Padi dan Kapas melambangkan Proklamasi Kemerdekaan Tijuhbelas Bulan Delapan dan Kemakmuran. Tulisan KOTA SERAMBI MEKAH melambangkan julukan Padang Panjang dengan ciri khas Islami. </span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Georgia,serif;\">Lukisan Pita dengan warna Merah Putih melambangkan Padang Panjang bagian dari Negara Kesatuan Repunlik Indonesia dan sebagai Kota Perjuangan.</span></span></li>\r\n</ul>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_06_054945_kota', 1),
(5, '2020_04_06_055006_grafis', 1),
(6, '2020_04_06_055017_video', 1),
(7, '2020_04_06_055028_visimisi', 1),
(8, '2020_04_06_055051_kunjungi', 1),
(9, '2020_04_06_055108_walikota', 1),
(10, '2020_04_06_055319_gap', 1),
(11, '2020_04_06_055340_gender', 1),
(12, '2020_04_06_055528_ensiklopedia', 1),
(13, '2020_04_06_055541_sakip', 1),
(14, '2020_04_06_061314_poster', 1),
(15, '2020_04_06_061332_rencana', 1),
(16, '2020_04_06_061352_pengelolaan', 1),
(17, '2020_04_06_061411_akuntabilitas', 1),
(18, '2020_04_06_061432_kegiatan', 1),
(19, '2020_04_06_062048_sejarah', 1),
(20, '2020_04_06_062137_lambang', 1),
(21, '2020_04_06_062151_geografis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id` varchar(60) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `opd`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
('a1af066c-879a-4c82-ad5f-62a4b98ea115', 'DINAS KOMUNIKASI DAN INFORMATIKA KOTA PADANG PANJANG', 'Jl. M. Yamin, SH No 2, Kelurahan Pasar Usang, Kecamatan Padang Panjang Barat, Kota Padang Panjang. Kode Pos : 27116', '0752 (82815)', 'diskominfo@padangpanjang.go.id', '2019-05-08 00:21:52', '2019-05-09 02:51:16'),
('ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', 'BPBD KESBANGPOL', 'JL. KH AHMAD DAHLAN NO.5 PADANG PANJANG', '0752 (82847)', 'NAJ@JDJFHEO', '2019-05-09 02:55:39', '2019-05-09 02:55:39'),
('f348a7c6-c319-4aa4-b65e-841797dad6d0', 'DINAS KESEHATAN', '-', '-', 'FVSVD@JVJDDV', '2019-05-09 02:57:30', '2019-05-09 02:57:30'),
('425a25ff-1628-41f8-bc9e-b37796626922', 'INSPEKTORAT DAERAH', '-', '-', 'SFG@MGK', '2019-05-09 02:58:15', '2019-05-09 02:58:15'),
('07627d72-c264-4728-a489-12b5ae3126bb', 'DINAS PENDIDIKAN, PEMUDA & OLAHRAGA', '-', '-', 'CCS@BFB', '2019-05-09 02:59:08', '2019-05-09 02:59:08'),
('c2645ae2-1805-43cb-96ee-527b2c1be6fe', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', '-', '-', 'GD@FGJH', '2019-05-09 02:59:45', '2019-05-09 02:59:45'),
('23a4f5c7-badf-4245-87e4-f301a0d324d7', 'DINAS SOSIAL PPKBPPPA', '-', '-', 'FFA@GFH', '2019-05-09 03:00:07', '2019-05-09 03:00:07'),
('b8e45ab6-a7fa-4147-aba2-fca4df78e444', 'DINAS PANGAN DAN PERTANIAN', '-', '-', 'DX@XGZ', '2019-05-09 03:00:24', '2019-05-09 03:00:24'),
('8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', 'DINAS PERUMAHAN, PERMUKIMAN DAN LINGKUNGAN HIDUP', '-', '-', 'XF@HFGH', '2019-05-09 03:01:24', '2019-05-09 03:01:24'),
('72323aaa-23ef-4264-abc7-3df196edc23d', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', '-', '-', 'FCGHD@JHFG', '2019-05-09 03:01:39', '2019-05-09 03:01:39'),
('0c6f7fa3-1c54-43cb-aca2-4fd17602f569', 'DINAS PERDAGKOP DAN UKM', '-', '-', 'CXFG@JHFGJ', '2019-05-09 03:01:54', '2019-05-09 03:01:54'),
('66e44058-535c-4b76-8a83-34cd93855309', 'DINAS PENANAMAN MODAL & PELAYANAN TERPADU SATU PINTU', '-', '-', 'GDFHD@HFHF', '2019-05-09 03:02:25', '2019-05-09 03:02:25'),
('a233c8e4-5b9f-4596-94d1-16c8aada61fa', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', '-', '-', 'CFS@HFGH', '2019-05-09 03:02:40', '2019-05-09 03:02:40'),
('918b0d49-af11-4d91-8d3a-d763e9c31499', 'DINAS PARIWISATA', '-', '-', 'GSDG@FDG', '2019-05-09 03:02:59', '2019-05-09 03:02:59'),
('54a2497d-1b95-4224-b1a7-b9794e40f837', 'DINAS PERHUBUNGAN', '-', '-', 'VDF@HFG', '2019-05-09 03:03:17', '2019-05-09 03:03:17'),
('d413b447-4097-4af6-8b9d-1279a5893495', 'BAPPEDA', '-', '-', 'HFHF@GDG', '2019-05-09 03:03:40', '2019-05-09 03:03:40'),
('89ab2e7e-c406-4975-a2eb-befd7d2993f5', 'SATPOL PP DAMKAR', '-', '-', 'CFHD@GHF', '2019-05-09 03:04:04', '2019-05-09 03:04:04'),
('839546d7-5aea-471c-bbe0-b6c62d93b3bd', 'KOMISI PEMILIHAN UMUM', '-', '-', 'CGFVSD@DFD', '2019-05-09 03:04:37', '2019-05-09 03:04:37'),
('b4717f26-b680-42c6-9a39-d81e1a1ba1db', 'KECAMATAN PADANG PANJANG TIMUR', '-', '-', 'FSFA@JGH', '2019-05-09 03:04:52', '2019-05-09 03:04:52'),
('acb6d8c0-e67f-47aa-bb3a-dd164b342acb', 'KECAMATAN PADANG PANJANG BARAT', '-', '-', 'VDSG@DGD', '2019-05-09 03:05:08', '2019-05-09 03:05:08'),
('0fc00050-3fcf-437e-8cab-82e1d6c70b12', 'RUMAH SAKIT UMUM DAERAH', '-', '-', 'BFH@fdgvd', '2019-05-09 03:05:26', '2019-05-09 03:05:26'),
('df27a40b-47bb-4f64-8300-40679d1dfff2', 'UPTD INSTALASI FARMASI', '-', '-', 'DFS@DGD', '2019-05-09 03:06:08', '2019-05-09 03:06:08'),
('a3a18131-8db0-4932-8fae-55811a23d59d', 'UPTD RUMAH POTONG HEWAN', '-', '-', 'GFGHD@GFHF', '2019-05-09 03:07:20', '2019-05-09 03:07:20'),
('5a1eb28a-c118-487b-85ff-14cfd587d183', 'UPTD KULIT', '-', '-', 'BF@XFH', '2019-05-09 03:07:47', '2019-05-09 03:07:47'),
('741b1949-a2a7-46ab-b5db-fcd860e51123', 'UPTD PUSKESWAN', '-', '-', 'CSF@DGFD', '2019-05-09 03:08:04', '2019-05-09 03:08:04'),
('86b9769d-569a-4c77-9e54-e97ef7628425', 'UPTD PENGELOLAAN DANA BERGULIR', '-', '-', 'DGD@WSD', '2019-05-09 03:08:25', '2019-05-09 03:08:25'),
('89730a3b-0844-400c-85ab-5bbc59d78216', 'UPTD PENGUJIAN KENDARAAN BERMOTOR', '-', '-', 'DAS@FDGHF', '2019-05-09 03:08:53', '2019-05-09 03:08:53'),
('9b8ac5a9-b7bb-45d4-afef-70688418ea6a', 'UPTD BALAI BENIH IKAN', '-', '-', 'CS@WSF', '2019-05-09 03:09:19', '2019-05-09 03:09:19'),
('b9c37993-5982-47ea-8db3-f1fbdaea257f', 'UPTD METROLOGI LEGAL', 'JL. SUTAN SYAHRIR NO. 124 KELURAHAN SILAING BAWAH PADANG PANJANG', '-', 'DFS@FGC', '2019-05-09 03:10:38', '2019-05-09 03:10:38'),
('c8ffd4b8-6439-4416-a77a-bfb153d1dbe4', 'UPTD PENGELOLAAN PASAR', '-', '0752 (82243)', 'DG@FGDH', '2019-05-09 03:11:01', '2019-05-09 03:11:29'),
('886e2b65-50ab-4ca9-aa9b-5b0f29793f78', 'UPTD PUSKESMAS KEBUN SIKOLOS', '-', '-', 'DSFA@SFGS', '2019-05-09 03:11:57', '2019-05-09 03:11:57'),
('73efa61c-cf46-4226-a4e0-277974974158', 'UPTD PUSKESMAS BUKIT SURUNGAN', '-', '-', 'CS@GD', '2019-05-09 03:12:23', '2019-05-09 03:12:23'),
('80d06b4c-0181-4c44-85d3-a548f08fafe8', 'UPTD PUSKESMAS GUNUNG', '-', '-', 'CS@FD', '2019-05-09 03:12:47', '2019-05-09 03:12:47'),
('d21f9acf-8764-46be-a70b-24f927514617', 'UPTD PUSKESMAS KOTO KATIK', '-', '-', 'FSF@GDG', '2019-05-09 03:13:19', '2019-05-09 03:13:19'),
('b18b017e-2ce4-4ca7-b936-6dbd716d250a', 'BAGIAN ORGANISASI SEKRETARIAT DAERAH', '-', '-', 'DS@HF', '2019-05-09 03:14:33', '2019-05-09 03:14:33'),
('4701572a-c3a7-4ba3-8635-4360e3c574cc', 'BAGIAN PEMERINTAHAN SEKRETARIAT DAERAH', '-', '-', 'CSFA@FGS', '2019-05-09 03:14:51', '2019-05-09 03:14:51'),
('c869aa46-4bf5-4789-b752-c8b05baf58d7', 'BAGIAN HUKUM DAN HAM SEKRETARIAT DAERAH', '-', '-', 'DA@fs', '2019-05-09 03:15:15', '2019-05-09 03:15:15'),
('33eef7e4-d6a9-4191-8660-1d158ed571bb', 'BAGIAN PEREKONOMIAN SEKRETARIAT DAERAH', '-', '-', 'CZDS@FSF', '2019-05-09 03:16:46', '2019-05-09 03:16:46'),
('6cf4fd9f-caa8-4225-b20d-d85d0d87809a', 'BAGIAN PENGENDALIAN PEMBANGUNAN SETDAKO', '-', '-', 'CS@BBF', '2019-05-09 03:17:13', '2019-05-09 03:17:13'),
('2f618e0b-4819-426f-bb41-90c318497032', 'BAGIAN KESEJAHTERAAN RAKYAT SETDAKO', '-', '-', 'CSFS@FDFGD', '2019-05-09 03:17:30', '2019-05-09 03:17:30'),
('07aff8ea-4c2f-4e82-88be-870d107e4839', 'BAGIAN UMUM SETDAKO', '-', '-', 'FS@FG', '2019-05-09 03:17:44', '2019-05-09 03:17:44'),
('fc8160c7-93d3-4680-a765-f0124d47d6c8', 'BAGIAN PERENCANAAN & ANGGARAN SETDAKO', '-', '-', 'CSF@GDG', '2019-05-09 03:17:59', '2019-05-09 03:17:59'),
('64f85352-3fd8-4d2c-9a02-65191ff3d64a', 'BAGIAN PROTOKOL DAN DOKUMENTASI SETDAKO', '-', '-', 'ADA@FHF', '2019-05-09 03:18:16', '2019-05-09 03:18:16'),
('376fbea0-a68a-4b4c-a9e8-042485ed2892', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'Bdndzfsf', '12145', 'DFS@HG', '2019-05-09 02:45:00', '2019-05-10 07:08:17'),
('c7c05db9-0618-43ac-a767-84c8c864584c', 'BADAN PENGELOLA KEUANGAN DAERAH', '-', '-', 'XAS@FHB', '2019-05-10 07:44:47', '2019-05-10 07:44:47'),
('61f7c332-b41a-4a96-bff3-07390e0d3c16', 'SEKRETARIAT DPRD', '-', '-', 'GDG@FHF', '2019-05-09 03:19:22', '2019-05-10 08:32:03'),
('e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', 'SEKRETARIAT DAERAH', '-', '-', 'setdako@padangpanjang.go.id', '2019-05-12 03:27:27', '2019-05-12 03:27:27'),
('c186138c-0830-4da8-a91a-71c7ab038176', 'PEMERINTAH KOTA PADANG PANJANG', '-', '-', 'setdako@padangpanjang.go.id', '2019-05-12 03:28:21', '2019-05-12 03:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengelolaan`
--

CREATE TABLE `pengelolaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelolaan`
--

INSERT INTO `pengelolaan` (`id`, `judul`, `file`, `opd`, `tahun`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'APBD KOTA PADANG PANJANG', '5ee99df2801ee_APBD 2020 KOTA PADANG PANJANG.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(2, 'APBD KOTA PADANG PANJANG', '5ee99e26505de_APBD 2020 KOTA PADANG PANJANG_1.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(3, 'APBD PERGESERAN I', '5ee99e5ed5cb8_APBD 2020 PERGESERAN I.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(4, 'APBD PERGESERAN I_1', '5ee99e71efd15_APBD 2020 PERGESERAN I_1.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(5, 'APBD PERGESERAN I_2', '5ee99e825a8e5_APBD 2020 PERGESERAN I_2.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(6, 'APBD PERGESERAN II', '5ee99e94cc2e6_APBD 2020 PERGESERAN II.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(7, 'APBD PERGESERAN II_1', '5ee99ea8256b8_APBD 2020 PERGESERAN II_1.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(8, 'APBD PERGESERAN III', '5ee99ebb2546b_APBD 2020 PERGESERAN III.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(9, 'APBD PERGESERAN III_1', '5ee99ed00ccd8_APBD 2020 PERGESERAN III_1.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(10, 'APBD PERGESERAN IV', '5ee99ee0ae946_APBD 2020 PERGESERAN IV.rar', 'BADAN PENGELOLA KEUANGAN DAERAH', '2020', 'Pengelolaan Anggaran', NULL, NULL),
(11, 'LRA Triwulan I', '5f588796d2f50_LAPORAN-REALISASI-ANGGARAN-TRIWULAN-1 (1).pdf', 'SATPOL PP DAMKAR', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(12, 'LRA (Bulan APRIL)', '5f5982e5dccb4_LRA-APRIL-2019 (1).pdf', 'SATPOL PP DAMKAR', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(13, 'LRA (Bulan MARET)', '5f5983291eeb8_LRA-BULAN-MARET-2019.pdf', 'SATPOL PP DAMKAR', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(14, 'LRA Triwulan III', '5f59838dd36d6_REALISASI-TRIWULAN-III-Bappeda.zip', 'BAPPEDA', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(15, 'LRA Triwulan II', '5f598530a0185_LRA-Triwulan-II-2019-Bappeda.zip', 'BAPPEDA', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(16, 'LRA Triwulan I', '5f59855ac8dcc_LRA-Bappeda-Jan-Maret-2019.zip', 'BAPPEDA', '2019', 'Pengelolaan Anggaran', NULL, NULL),
(17, 'Ringkasan Penjabaran APBD', '5f598cdeb155e_Ringkasan-Penjabaran-APBD-2019.pdf', '-', '2019', 'Pengelolaan Anggaran', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE `poster` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `judul`, `file`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'POSTER ANGGARAN TAHUN 2019 DINAS PERHUBUNGAN', '5f5884978256f_POSTER-ANGGARAN-TAHUN-2019-DINAS-PERHUBUNGAN.pdf', '2019', NULL, NULL),
(2, 'POSTER ANGGARAN 2019 BPBD KESBANGPOL', '5f5885845c93d_POSTER-ANGGARAN-2019-BPBD-KESBANGPOL.pdf', '2019', NULL, NULL),
(3, 'POSTER ANGGARAN TAHUN 2020 DINAS KOMUNIKASI DAN INFORMATIKA', '5f58878ae3754_kominfo.jpeg', '2020', NULL, NULL),
(4, 'POSTER ANGGARAN TAHUN 2020 DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', '5f5887e01fa0c_capil.jpeg', '2020', NULL, NULL),
(5, 'POSTER ANGGARAN TAHUN 2020 DINAS  PERDAGANGAN, KOPERASI, USAHA KECIL DAN MENENGAH', '5f58880e371b5_perdagkop.jpeg', '2020', NULL, NULL),
(6, 'POSTER ANGGARAN TAHUN 2020 SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN', '5f58882b6d692_pol pp.jpeg', '2020', NULL, NULL),
(7, 'POSTER ANGGARAN TAHUN 2020 DINAS PANGAN DAN PERTANIAN', '5f5888403768d_pertanian_page-0001.jpg', '2020', NULL, NULL),
(8, 'POSTER ANGGARAN 2019 DINAS PARIWISATA', '5f58985840152_POSTER-ANGGARAN-2019-DINAS-PARIWISATA.pdf', '2019', NULL, NULL),
(9, 'POSTER ANGGARAN TAHUN 2019 BAPPEDA', '5f58986d5b29a_POSTER-ANGGARAN-TAHUN-2019-BAPPEDA.pdf', '2019', NULL, NULL),
(10, 'POSTER ANGGARAN TAHUN 2019 BKPSDM', '5f5898cac8f4b_POSTER-ANGGARAN-TAHUN-2019-BKPSDM.pdf', '2019', NULL, NULL),
(11, 'POSTER ANGGARAN TAHUN 2019 DINAS KESEHATAN', '5f5898e67e26a_POSTER-ANGGARAN-TAHUN-2019-DINAS-KESEHATAN.pdf', '2019', NULL, NULL),
(12, 'POSTER ANGGARAN TAHUN 2019 DINAS PANGAN DAN PERTANIAN', '5f5898f998025_POSTER-ANGGARAN-TAHUN-2019-DINAS-PANGAN-DAN-PERTANIAN.pdf', '2019', NULL, NULL),
(13, 'POSTER ANGGARAN TAHUN 2019 DINAS PERDAGKOP', '5f589932646af_POSTER-ANGGARAN-TAHUN-2019-DINAS-PERDAGKOP.pdf', '2019', NULL, NULL),
(14, 'POSTER ANGGARAN TAHUN 2019 DINAS PERKIM-LH', '5f5899532dd8a_POSTER-ANGGARAN-TAHUN-2019-DINAS-PERKIM-LH.pdf', '2019', NULL, NULL),
(15, 'POSTER ANGGARAN TAHUN 2019 DINAS PERPUSTAKAAN DAN KEARSIPAN', '5f589971a8a58_POSTER-ANGGARAN-TAHUN-2019-DINAS-PERPUSTAKAAN-DAN-KEARSIPAN.pdf', '2019', NULL, NULL),
(16, 'POSTER ANGGARAN TAHUN 2019 DINAS PUPR', '5f58998d9be5f_POSTER-ANGGARAN-TAHUN-2019-DINAS-PUPR.pdf', '2019', NULL, NULL),
(17, 'POSTER ANGGARAN TAHUN 2019 DINAS SOSIAL PENGENDALIAN PENDUDUK KELUARGA BERENCANA PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', '5f5899acc1702_POSTER-ANGGARAN-TAHUN-2019-DINAS-SOSIAL-PENGENDALIAN-PENDUDUK-KELUARGA-BERENCANA-PEMBERDAYAAN-PEREMPUAN-DAN-PERLINDUNGAN-ANAK.pdf', '2019', NULL, NULL),
(18, 'POSTER ANGGARAN TAHUN 2019 DISDIKPORA', '5f5899cbcd196_POSTER-ANGGARAN-TAHUN-2019-DISDIKPORA.pdf', '2019', NULL, NULL),
(19, 'POSTER ANGGARAN TAHUN 2019 DISKOMINFO', '5f5899ea5957d_POSTER-ANGGARAN-TAHUN-2019-DISKOMINFO.pdf', '2019', NULL, NULL),
(20, 'POSTER ANGGARAN TAHUN 2019 DPMPTSP', '5f589a055148e_POSTER-ANGGARAN-TAHUN-2019-DPMPTSP.pdf', '2019', NULL, NULL),
(21, 'POSTER ANGGARAN TAHUN 2019 INSPEKTORAT', '5f589a1aa71a0_POSTER-ANGGARAN-TAHUN-2019-INSPEKTORAT.pdf', '2019', NULL, NULL),
(22, 'POSTER ANGGARAN TAHUN 2019 KECAMATAN PADANG PANJANG BARAT', '5f589a30102ba_POSTER-ANGGARAN-TAHUN-2019-KECAMATAN-PADANG-PANJANG-BARAT-1.pdf', '2019', NULL, NULL),
(23, 'POSTER ANGGARAN TAHUN 2019 KECAMATAN PADANG PANJANG TIMUR', '5f589a4f5af8b_POSTER-ANGGARAN-TAHUN-2019-KECAMATAN-PADANG-PANJANG-TIMUR.pdf', '2019', NULL, NULL),
(24, 'POSTER ANGGARAN TAHUN 2019 SATPOL PP DAMKAR', '5f589a696eee0_POSTER-ANGGARAN-TAHUN-2019-SATPOL-PP-DAMKAR.pdf', '2019', NULL, NULL),
(25, 'POSTER ANGGARAN TAHUN 2019 SEKRETARIAT DPRD', '5f589a7ce99a3_POSTER-ANGGARAN-TAHUN-2019-SEKRETARIAT-DPRD.pdf', '2019', NULL, NULL),
(26, 'POSTER ANGGARAN TAHUN 2019 SEKRETARIAT DAERAH', '5f589a93168f3_POSTER-ANGGARAN-TAHUN-2019-SEKRETARIAT-DAERAH.pdf', '2019', NULL, NULL),
(27, 'POSTER ANGGARAN TAHUN 2019 BPKD', '5f589aa7b51d0_POSTER-ANGGARAN-TAHUN-2019-BPKD-.pdf', '2019', NULL, NULL),
(28, 'POSTER ANGGARAN TAHUN 2019 DISDUKCAPIL', '5f589abc438d4_POSTER-ANGGARAN-TAHUN-2019-BPKD-.pdf', '2019', NULL, NULL),
(29, 'POSTER ANGGARAN TAHUN 2019 RUMAH SAKIT UMUM DAERAH', '5f589ad6c4da3_POSTER-ANGGARAN-TAHUN-2019-RUMAH-SAKIT-UMUM-DAERAH.pdf', '2019', NULL, NULL),
(31, 'POSTER ANGGARAN PERUBAHAN KELURAHAN BALAI-BALAI TAHUN 2019', '5f589af85246c_POSTER-ANGGARAN-PERUBAHAN-KEL.-BALAI-BALAI-2019-1-3.pdf', '2019', NULL, NULL),
(32, 'POSTER ANGGARAN PERUBAHAN KELURAHAN BUKIT SURUNGAN TAHUN 2019', '5f589b11c201d_POSTER-ANGGARAN-PERUBAHAN-KEL.-BUKIT-SURUNGAN-2019-1.pdf', '2019', NULL, NULL),
(33, 'POSTER ANGGARAN PERUBAHAN KELURAHAN KAMPUNG MANGGIS TAHUN 2019', '5f589b4173c29_POSTER-ANGGARAN-PERUBAHAN-KEL.-KAMPUNG-MANGGIS-2019-1.pdf', '2019', NULL, NULL),
(34, 'POSTER ANGGARAN PERUBAHAN KELURAHAN PASAR BARU TAHUN 2019', '5f589b51706a8_POSTER-ANGGARAN-PERUBAHAN-KEL.-PASAR-BARU-2019-1.pdf', '2019', NULL, NULL),
(35, 'POSTER ANGGARAN PERUBAHAN KELURAHAN SILAING ATAS TAHUN 2019', '5f589b6643416_POSTER-ANGGARAN-PERUBAHAN-KEL.-SILAING-ATAS-2019-1.pdf', '2019', NULL, NULL),
(36, 'POSTER ANGGARAN PERUBAHAN KELURAHAN SILAING BAWAH TAHUN 2019', '5f589b7a98126_POSTER-ANGGARAN-PERUBAHAN-KEL.-SILAING-BAWAH-2019-1.pdf', '2019', NULL, NULL),
(37, 'POSTER ANGGARAN PERUBAHAN KELURAHAN TANAH HITAM TAHUN 2019', '5f589b8da5105_POSTER-ANGGARAN-PERUBAHAN-KEL.-TANAH-HITAM-2019-1 (3).pdf', '2019', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rencana`
--

CREATE TABLE `rencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rencana`
--

INSERT INTO `rencana` (`id`, `judul`, `file`, `tahun`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'RKPD', '5f589c3c79b85_5ee99ee0ae946_APBD 2020 PERGESERAN IV.rar', '2019', 'Perencanaan Pembangunan', NULL, NULL),
(2, 'RPJMD', '5f589c84a8501_RPJMD-2018-2023.pdf', '2010-2023', 'Perencanaan Pembangunan', NULL, NULL),
(3, 'RPJPD', '5f589c9d13ae9_RPJPD-2005-2025 (2).zip', '2005-2025', 'Perencanaan Pembangunan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sakip`
--

CREATE TABLE `sakip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sakip`
--

INSERT INTO `sakip` (`id`, `judul`, `instansi`, `file`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'IKU', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f336961ed8ac_iku_bappeda-18.pdf', '2018', NULL, NULL),
(2, 'PK', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3371274bdf5_pk_bappeda-18.pdf', '2018', NULL, NULL),
(3, 'RAK', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f33719bd4348_rencana-aksi_bappeda-18.pdf', '2018', NULL, NULL),
(4, 'RENJA', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3371c3e3029_renja_bappeda-18.pdf', '2018', NULL, NULL),
(5, 'LKjIP', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f339879aeff7_Lkjip-2018-bappeda.pdf', '2018', NULL, NULL),
(6, 'PK', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f33989349935_pk_bappeda-18.pdf', '2019', NULL, NULL),
(7, 'RAK', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3398ae9b15c_rencana-aksi-bappeda.pdf', '2019', NULL, NULL),
(8, 'RENJA', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3398c1e91b9_renja-2019.pdf', '2019', NULL, NULL),
(9, 'IKU', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3398d77a0a1_iku_bappeda-19.pdf', '2019', NULL, NULL),
(10, 'RENSTRA', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f3398fca9c48_Renstra-BAPPEDA-2018-2023 (1).pdf', '2018-2023', NULL, NULL),
(11, 'IKU', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339b25d811d_iku_bkpsdm-2018.pdf', '2018', NULL, NULL),
(12, 'RENJA', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339b5162e51_renja_bkpsdm-2018.pdf', '2018', NULL, NULL),
(13, 'RENSTRA', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339b7242284_renstra_bkpsdm-2018.pdf', '2018', NULL, NULL),
(14, 'LKjIP', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339b9ca69b5_lkjip_bkpsdm.pdf', '2018', NULL, NULL),
(15, 'RAK', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339bcddd515_rencana-aksi_bkpsdm.pdf', '2019', NULL, NULL),
(16, 'RENJA', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339c19ec3d9_renja_bkpsdm.pdf', '2019', NULL, NULL),
(17, 'RENSTRA', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339c52efb2e_renstra_bkpsdm.pdf', '2019', NULL, NULL),
(18, 'PK', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339e55aed5e_pk_bkpsdm.pdf', '2019', NULL, NULL),
(19, 'IKU', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f339ed8db2cb_iku_bpbd-2018.pdf', '2018', NULL, NULL),
(20, 'IKU', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', '5f339f0c3fb8b_iku_bpbd-19.pdf', '2019', NULL, NULL),
(21, 'RKT', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', '5f339f23eb536_rkt_bpbd-19.pdf', '2019', NULL, NULL),
(22, 'IKU', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a00e3880b_iku_bpkd-19.pdf', '2018', NULL, NULL),
(23, 'PK', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a064b9bd8_pk_bpkd-2018.pdf', '2018', NULL, NULL),
(24, 'RENSTRA', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a08817375_renstra_bpkd-2018.pdf', '2018', NULL, NULL),
(25, 'IKU', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a0a57df43_iku_bpkd-19.pdf', '2019', NULL, NULL),
(26, 'LKjIP', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a0c89c3dc_iku_bpkd-19.pdf', '2018', NULL, NULL),
(27, 'PK', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a11918fc3_pk_bpkd-19.pdf', '2019', NULL, NULL),
(28, 'RKT', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a14a50779_rencana-kinerja-tahunan_bpkd-19.pdf', '2019', NULL, NULL),
(29, 'RENJA', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a16c4e312_renja_bpkd-19.pdf', '2019', NULL, NULL),
(30, 'RENSTRA', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f33a1843a762_renstra_bpkd-19.docx', '2019', NULL, NULL),
(40, 'IKU', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', '5f33a46946e69_iku_bpbd-2018.pdf', '2018', NULL, NULL),
(43, 'RENJA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ebbae1e26_Renja_cabar-2018.xls', '2018', NULL, NULL),
(44, 'RENSTRA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ebf2ea49b_RENSTRA_cabar-2018.zip', '2018', NULL, NULL),
(45, 'LKjIP', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ec21baa88_LKjIP_cabar-2018.doc', '2018', NULL, NULL),
(46, 'PK', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ec4caf9e6_Perjanjian-kinerja_cabar-2018.xlsx', '2018', NULL, NULL),
(47, 'RKT', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ec7804902_Rencana-Kinerja-Tahunan_cabar-2019.xls', '2019', NULL, NULL),
(48, 'RENSTRA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34eca5361bd_RENSTRA_cabar-2019.doc', '2019', NULL, NULL),
(49, 'TABEL RENSTRA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f34ecbf4e4ca_tabel-renstra-4.1_cabar-2019 (1).xlsx', '2019', NULL, NULL),
(50, 'IKU', 'b4717f26-b680-42c6-9a39-d81e1a1ba1db', '5f34ed12cab39_iku_catim-2018.pdf', '2018', NULL, NULL),
(51, 'RENSTRA', 'b4717f26-b680-42c6-9a39-d81e1a1ba1db', '5f34ed2d17ab6_renstra_catim-2018 (1).pdf', '2018', NULL, NULL),
(52, 'IKU', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34ee65599d1_iku_dinsos-2018.pdf', '2018', NULL, NULL),
(53, 'RAK', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34eea865aaf_rencana-aksi_dinsos-2018.pdf', '2018', NULL, NULL),
(54, 'RENSTRA', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34eec7f3569_renstra_dinsos-2018.pdf', '2018', NULL, NULL),
(55, 'IKU', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34eeefd3446_iku_dinsos-19.pdf', '2019', NULL, NULL),
(56, 'LKjIP', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34ef06aa792_lkjip_dinsos-18.pdf', '2018', NULL, NULL),
(57, 'RAK', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34ef1d041cc_rencana-aksi_dinsos-19.pdf', '2019', NULL, NULL),
(58, 'RENJA', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34ef35b7619_renja_dinsos-19.pdf', '2019', NULL, NULL),
(59, 'RENSTRA', '23a4f5c7-badf-4245-87e4-f301a0d324d7', '5f34ef4de5a5a_renstra_dinsos-19.pdf', '2019', NULL, NULL),
(60, 'IKU', '07627d72-c264-4728-a489-12b5ae3126bb', '5f34ef70922cf_iku_disdikpora-2018.pdf', '2018', NULL, NULL),
(61, 'RENSTRA', '07627d72-c264-4728-a489-12b5ae3126bb', '5f34ef9028859_renstra_disdikpora-2018.pdf', '2018', NULL, NULL),
(62, 'IKU', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34efe16ffaa_iku_capil-2018.pdf', '2018', NULL, NULL),
(63, 'RENJA', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f01e6a92b_renja_capil-2018.pdf', '2018', NULL, NULL),
(64, 'RENSTRA', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f08db7d4e_renstra_capil-2018.pdf', '2018', NULL, NULL),
(66, 'IKU', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f1d41fc5a_iku.pdf', '2019', NULL, NULL),
(67, 'LKjIP', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f1f285c20_LKjIP.pdf', '2018', NULL, NULL),
(68, 'PK', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f233cf886_PK.pdf', '2019', NULL, NULL),
(69, 'RAK', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f252ebc95_REncana-Aksi.pdf', '2019', NULL, NULL),
(70, 'RENSTRA', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f2689787a_renstra.pdf', '2019', NULL, NULL),
(71, 'RKT', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f34f2d2a5bd7_renstra (1).pdf', '2019', NULL, NULL),
(72, 'RAK', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f34f30353fa2_rencana-aksi_dishub (1).pdf', '2019', NULL, NULL),
(73, 'RENJA', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f38f06593_renja_diskominfo-2018.pdf', '2018', NULL, NULL),
(74, 'RENSTRA', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f3a796716_renstra_diskominfo-2018.pdf', '2018', NULL, NULL),
(75, 'IKU', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f3d01c37f_iku_kmfo.pdf', '2019', NULL, NULL),
(76, 'LKjIP', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f3fa2cc9c_lkjip_kmfo.pdf', '2018', NULL, NULL),
(77, 'PK', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f41279c0e_pk-2019_kmfo.pdf', '2019', NULL, NULL),
(78, 'RENJA', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f43280e50_renja-kominfo_kmfo.pdf', '2019', NULL, NULL),
(79, 'RKT', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f45df3c06_rkt_kmfo.pdf', '2019', NULL, NULL),
(80, 'RAK', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f47d4de55_rencana-aksi_kominfo-2019.pdf', '2019', NULL, NULL),
(81, 'RENSTRA', 'a1af066c-879a-4c82-ad5f-62a4b98ea115', '5f34f4950ab39_Renstra_kominfo-2019.pdf', '2019', NULL, NULL),
(82, 'PK', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f62fe0f37_pk_dispangtan-2018.pdf', '2018', NULL, NULL),
(83, 'RAK', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f654c42e8_rencana-aksi_dispangtan-2018.pdf', '2018', NULL, NULL),
(84, 'RENSTRA', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f68105fc9_renstra_dispangtan-2018 (1).pdf', '2018', NULL, NULL),
(85, 'IKU', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f6e3c3d08_iku_pertanian-2019.pdf', '2019', NULL, NULL),
(86, 'LKjIP', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f7117ae20_Lkjip_pertanian-2018 (1).pdf', '2018', NULL, NULL),
(87, 'PK', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f74996efc_pk_pertanian-2019.pdf', '2019', NULL, NULL),
(88, 'RAK', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f8a3c7fea_rencana-aksi_pertanian-2019.pdf', '2019', NULL, NULL),
(89, 'RKT', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f8c5d207e_rencana-kinerja-tahunan_pertanian-2019.pdf', '2019', NULL, NULL),
(90, 'RENSTRA', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f34f8ee8bf00_renstra_pertanian-2019 (1).pdf', '2019', NULL, NULL),
(91, 'IKU', '918b0d49-af11-4d91-8d3a-d763e9c31499', '5f34f955c133a_iku_dispar-2018.pdf', '2018', NULL, NULL),
(92, 'RKT', '918b0d49-af11-4d91-8d3a-d763e9c31499', '5f34f9975e8d8_rkt_dispar-2018.pdf', '2018', NULL, NULL),
(93, 'LAKIP', '918b0d49-af11-4d91-8d3a-d763e9c31499', '5f34f9b8c78e2_lakip_dispar-18.docx', '2018', NULL, NULL),
(94, 'RENSTRA', '918b0d49-af11-4d91-8d3a-d763e9c31499', '5f34f9e609e82_renstra_dispar-19.docx', '2019', NULL, NULL),
(96, 'IKU', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fac2d5016_iku_perkim.pdf', '2019', NULL, NULL),
(97, 'LKjIP', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fb24a0a57_Lkjip_perkim.pdf', '2018', NULL, NULL),
(98, 'PK', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fb7ba4acf_pk-perkim-lh_perkim.pdf', '2019', NULL, NULL),
(99, 'RAK', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fbac9df40_rencana-aksi_perkim.pdf', '2019', NULL, NULL),
(100, 'RENJA', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fbd17f2dd_renja_perkim.pdf', '2019', NULL, NULL),
(101, 'RENSTRA', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fbfc7cf2a_renstra_perkim-2019.pdf', '2019', NULL, NULL),
(102, 'RKT', '8497d1ab-2dab-4dbd-9e4e-16ff0ca741f5', '5f34fc19b6454_rkt_perkim.pdf', '2019', NULL, NULL),
(103, 'IKU', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f34fdddabba2_iku_dispupr-2018.pdf', '2018', NULL, NULL),
(104, 'RENSTRA', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f34fdfc03af4_renstra_dispupr-2018.pdf', '2018', NULL, NULL),
(105, 'PK', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f34fe1325b4b_PK-2019_pupr.pdf', '2019', NULL, NULL),
(106, 'IKU', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34fe8445cec_iku_dkk-2018.pdf', '2018', NULL, NULL),
(107, 'RENJA', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34feb0058ed_renja_dkk-2018.pdf', '2018', NULL, NULL),
(108, 'RENSTRA', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34fece6d1f2_renstra_dkk-2018.pdf', '2018', NULL, NULL),
(109, 'IKU', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34feed18100_IKU_dkk-2019.pdf', '2019', NULL, NULL),
(110, 'LKjIP', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34ff027bd4e_LKjIP_dkk-2018.pdf', '2018', NULL, NULL),
(111, 'PK', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34ff20720b1_Perjanjian-Kinerja_dkk-2019.pdf', '2019', NULL, NULL),
(112, 'RAK', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34ff4476a36_Rencana-Aksi_dkk-2019.pdf', '2019', NULL, NULL),
(113, 'RENJA', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34ff841184d_renja_dkk-2019.pdf', '2019', NULL, NULL),
(114, 'RENSTRA', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f34ffa870d34_renstra_dkk-2019.pdf', '2019', NULL, NULL),
(115, 'RENJA', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f34ffec1ddfc_renja_dpk.doc', '2019', NULL, NULL),
(116, 'RENSTRA', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f35002612657_renstra_dpk.docx', '2019', NULL, NULL),
(117, 'RKT', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f35004170a8c_rkt_dpk.xlsx', '2019', NULL, NULL),
(118, 'IKU', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f3ca9cc96_iku_dpkukm-2018.pdf', '2018', NULL, NULL),
(119, 'RENSTRA', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f3f57ec91_renstra_dpkukm-2018.pdf', '2018', NULL, NULL),
(120, 'IKU', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f40b8d829_iku_perdakop-2019.pdf', '2019', NULL, NULL),
(121, 'LKjIP', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f4280555b_lkjip_perdakop-2018.pdf', '2018', NULL, NULL),
(122, 'PK', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f4749a6b4_pk_perdakop-2019.pdf', '2019', NULL, NULL),
(123, 'RENJA', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f48933133_renja_perdakop-2019.pdf', '2019', NULL, NULL),
(124, 'RAK', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f4a2635d1_rencana-aksi_dpkukm-2019.pdf', '2019', NULL, NULL),
(125, 'RENSTRA', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f4c366344_renstra_dpkukm-2019.pdf', '2019', NULL, NULL),
(126, 'RKT', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f35f4db109ca_rkt_dpkukm-2019.pdf', '2019', NULL, NULL),
(127, 'IKU', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f35f51f11133_iku_dprd-2018.pdf', '2018', NULL, NULL),
(128, 'LKjIP', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f35f53ccb363_LKjIP_dprd-2018.pdf', '2018', NULL, NULL),
(129, 'PK', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f35f55cb4757_PK_dprd-2018.pdf', '2018', NULL, NULL),
(130, 'RENJA', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f35f57968c79_renja_dprd-2018.pdf', '2018', NULL, NULL),
(131, 'RENSTRA', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f35f595e1357_renstra_dprd-2018.pdf', '2018', NULL, NULL),
(133, 'IKU', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f6277c1bf_iku_insp-18.docx', '2019', NULL, NULL),
(134, 'IKU', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f644ecf89_iku_insp-18.pdf', '2019', NULL, NULL),
(135, 'LKjIP', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f6bf3b0f5_LkjiP_insp-18.docx', '2018', NULL, NULL),
(136, 'PK', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f6e2beb8a_pk-2019_insp-18.pdf', '2019', NULL, NULL),
(137, 'RAK', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f72c51e3d_rencana-aksi_insp-18.pdf', '2019', NULL, NULL),
(138, 'RAK', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f811339c5_rencana-aksi_insp-18.xls', '2019', NULL, NULL),
(139, 'RENJA', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f85a16c8e_renja_insp-18.docx', '2019', NULL, NULL),
(140, 'RENSTRA', '425a25ff-1628-41f8-bc9e-b37796626922', '5f35f88490ef1_renstra_insp-18.docx', '2019', NULL, NULL),
(141, 'IKU', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35f9d645b4a_IKU_kota-2018.pdf', '2018', NULL, NULL),
(142, 'RPJMD', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fa046d613_RPJMD_kota-2018.pdf', '2018', NULL, NULL),
(143, 'PK', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fa36b8980_PK_kota-2018.pdf', '2018', NULL, NULL),
(144, 'IKU', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fa8de06e4_IKU_kota.pdf', '2019', NULL, NULL),
(145, 'LAKIP', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fab14044f_lakip_kota.pdf', '2018', NULL, NULL),
(146, 'PK', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35facd183b8_pk-2019_kota.pdf', '2019', NULL, NULL),
(147, 'PK PERUBAHAN', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fb132fc2a_pk-perubahan-2018_kota.pdf', '2019', NULL, NULL),
(148, 'RPJMD', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fb516f621_rpjmd-2018-2023_kota.pdf', '2019', NULL, NULL),
(149, 'TABEL RPJMD', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f35fb6b579cb_tabel-rpjmd_kota.pdf', '2019', NULL, NULL),
(150, 'PK', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35fbca21c0c_pk_rsud-2018.pdf', '2018', NULL, NULL),
(151, 'RENJA', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35fc2890868_renja_rsud-2018.pdf', '2018', NULL, NULL),
(152, 'RENSTRA', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35fc45326f5_renstra_rsud-2018.pdf', '2018', NULL, NULL),
(153, 'IKU', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35fe6882fc9_iku_rsud.pdf', '2019', NULL, NULL),
(154, 'PK Ess III', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35fe842e538_pk-ess-III_rsud.pdf', '2019', NULL, NULL),
(155, 'RAK', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35feab814af_rencana-aksi_rsud.pdf', '2019', NULL, NULL),
(156, 'RENSTRA', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35ff04dc9e9_renstra_rsud.pdf', '2019', NULL, NULL),
(157, 'LKjIP', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35ff3b3faa9_lkjip_rsud-2018.pdf', '2018', NULL, NULL),
(158, 'RKT', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f35ffb72dbcf_rkt_rsud-2019.pdf', '2019', NULL, NULL),
(159, 'IKU', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f36008f192f3_iku_polpp-2018.pdf', '2018', NULL, NULL),
(160, 'RENJA', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3600b948fb1_renja_polpp-2018.pdf', '2018', NULL, NULL),
(161, 'RENSTRA', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3600d3b9a03_renstra_polpp-2018.pdf', '2018', NULL, NULL),
(162, 'IKU', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3600f9e44e9_iku_polpp.pdf', '2019', NULL, NULL),
(163, 'LKjIP', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f36020816a64_lkjip_polpp.pdf', '2018', NULL, NULL),
(164, 'PK', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f360225e44ca_pk_polpp.pdf', '2019', NULL, NULL),
(165, 'RKT', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3602a5c64f8_rencana-jinerja-tahunan_polpp.pdf', '2019', NULL, NULL),
(166, 'RENJA', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3602c4406bc_renja_polpp.pdf', '2019', NULL, NULL),
(167, 'RENSTRA', '89ab2e7e-c406-4975-a2eb-befd7d2993f5', '5f3602de984e9_renstra_polpp-2018.pdf', '2019', NULL, NULL),
(168, 'IKU', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f36034057598_iku_setdako-2018.pdf', '2018', NULL, NULL),
(169, 'LKjIP', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f360366d963c_lkjip_setdako-2018.pdf', '2018', NULL, NULL),
(170, 'RENJA', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f360487bec57_renja_setdako-2018.pdf', '2018', NULL, NULL),
(171, 'RENSTRA', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f3605063af37_renstra_setdako-2018.pdf', '2018', NULL, NULL),
(172, 'IKU', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f36052642884_iku-2018-2023_setdako.pdf', '2019', NULL, NULL),
(173, 'RAK', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f36053d40351_rencana-aksi_setdako.pdf', '2019', NULL, NULL),
(174, 'RENJA', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f360561ecd1b_renja_setdako.pdf', '2019', NULL, NULL),
(175, 'cascading', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4368f42f477_cascading.pdf', '2019', NULL, NULL),
(176, 'IKU BKPSDM', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f43690f51ce2_IKU BKPSDM 2020.pdf', '2020', NULL, NULL),
(177, 'LAKIP BKPSDM', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4369289d5c7_LAKIP BKPSDM...pdf', '2019', NULL, NULL),
(178, 'Perjanjian Kinerja Eselon III, IV 2019', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f436945b34dc_Perjanjian Kinerja Eselon III, IV 2019.pdf', '2019', NULL, NULL),
(179, 'Rencana Aksi 2019', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f436962ba0f5_Rencana Aksi 2019.pdf', '2019', NULL, NULL),
(180, 'RENSTRA BKPSDM', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f436993d0dd9_RENSTRA BKPSDM.pdf', '2018-2023', NULL, NULL),
(181, 'RKT 2020', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4369ac98f6c_RKT 2020.pdf', '2020', NULL, NULL),
(182, 'cascading', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436a1714edc_CASCADING.xlsx', '2020', NULL, NULL),
(183, 'RENSTRA 2020 BAB 1-8', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436a45e3b07_RENSTRA 2020 BAB 1-8.pdf', '2020', NULL, NULL),
(184, 'TABEL SEMUA OK', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436b2283fd8_TABEL SEMUA OK.xlsx', '-', NULL, NULL),
(185, 'LKjIP', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436b54ed97d_LKjIP.pdf', '-', NULL, NULL),
(186, 'RENCANA AKSI 2020', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436b67a9759_RENCANA AKSI 2020.pdf', '2020', NULL, NULL),
(187, 'SK IKU DISDIKPORA 2020', '07627d72-c264-4728-a489-12b5ae3126bb', '5f436b793f411_SK IKU DISDIKPORA 2020.pdf', '2020', NULL, NULL),
(188, 'NARASI RENSTRA', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436bb267b6f_NARASI RENSTRA.pdf', '2018-2023', NULL, NULL),
(189, 'Tabel Rencana _ Program Kegiatan Dinas capil 14062019', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436bd5f369c_Tabel Rencana _ Program Kegiatan Dinas capil 14062019.pdf', '2018-2023', NULL, NULL),
(190, 'Cascading', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436bf8dc923_CASCADING.pdf', '2018-2023', NULL, NULL),
(191, 'IKI', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436c21ab37e_IKI.pdf', '2020', NULL, NULL),
(192, 'IKU', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436c5e562ca_IKU.pdf', '2018-2023', NULL, NULL),
(193, 'LKjIP', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436c7dc6f0c_LKjIP.pdf', '2019', NULL, NULL),
(194, 'PK', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436cac3fa9d_PK 2020.PDF', '2020', NULL, NULL),
(195, 'PK PERUBAHAN', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436cc0ac179_PK PERUBAHAN 2019.PDF', '2019', NULL, NULL),
(196, 'Rencana Aksi 2019', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436ced6e4a7_RENCANA AKSI 2019.pdf', '2019', NULL, NULL),
(197, 'RENCANA AKSI 2020', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436cfd6f97c_RENCANA AKSI 2020.pdf', '2020', NULL, NULL),
(198, 'Rencana Kinerja Tahunan', '72323aaa-23ef-4264-abc7-3df196edc23d', '5f436d1800802_RENCANA KINERJA TAHUNAN 2019.pdf', '2019', NULL, NULL),
(199, 'Cascading', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436d710fd47_CASCADING.pdf', '-', NULL, NULL),
(200, 'IKI', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436da01f00b_IKI.pdf', '2020', NULL, NULL),
(201, 'IKU', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436dd7c9b85_IKU.pdf', '2017-2018', NULL, NULL),
(202, 'LKjIP', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436e2a60f61_LKjIP.pdf', '2019', NULL, NULL),
(203, 'PK', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436e8e4d8c9_PK 2020.pdf', '2020', NULL, NULL),
(204, 'RENSTRA', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436eca82b8f_RENSTRA.pdf', '2018-2023', NULL, NULL),
(205, 'RKT DAN RENCANA AKSI', 'c2645ae2-1805-43cb-96ee-527b2c1be6fe', '5f436f0324c77_RKT DAN RENCANA AKSI.pdf', '2020', NULL, NULL),
(206, 'RENSTRA', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436f593ef59_Renstra.pdf', '-', NULL, NULL),
(207, 'TABEL RENSTRA', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436f7b868e8_Tabel Renstra.pdf', '-', NULL, NULL),
(208, 'CASCADING DPK 2020', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436f93399fb_CASCADING DPK 2020.pdf', '2020', NULL, NULL),
(209, 'IKI', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436fb107a79_IKI.pdf', '2020', NULL, NULL),
(210, 'IKU', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436fc7a5bc8_IKU 2018-2023.pdf', '2018-2023', NULL, NULL),
(211, 'LKjIP', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436fd96eb9a_LKjIP 2019.pdf', '2019', NULL, NULL),
(212, 'Perjanjian Kinerja', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f436fef2ad3e_PERJANJIAN KINERJA 2019.pdf', '2019', NULL, NULL),
(213, 'Perjanjian Kinerja', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f4370012f907_PERJANJIAN KINERJA 2020.pdf', '2020', NULL, NULL),
(214, 'Rencana Aksi Kinerja Sasaran 2019', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f437017310dd_Rencana Aksi Kinerja Sasaran 2019.pdf', '2019', NULL, NULL),
(215, 'Rencana Aksi Kinerja Sasaran 2020', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f437028ea924_Rencana Aksi Kinerja Sasaran 2020.pdf', '2020', NULL, NULL),
(216, 'Rencana Kinerja Tahunan', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f43703f07902_Rencana Kinerja Tahunan 2019.pdf', '2019', NULL, NULL),
(217, 'RKT 2020', 'a233c8e4-5b9f-4596-94d1-16c8aada61fa', '5f4370527c5b0_RKT TAHUN 2020.pdf', '2020', NULL, NULL),
(218, 'Cascading', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f43708ad9bf4_CASCADING DPRD 2020.pdf', '2020', NULL, NULL),
(219, 'IKI SET.DPRD', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4370b57d158_IKI SET.DPRD.pdf', '2020', NULL, NULL),
(220, 'IKU', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4370c766044_IKU  2018- 2023 SETWAN.pdf', '2018-2023', NULL, NULL),
(221, 'LKjIP', 'e0d55ad3-c2ad-4f7e-8a1e-53d956c282bc', '5f4370db3a935_LKJIP 2019.pdf', '2019', NULL, NULL),
(222, 'Perjanjian Kinerja', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4370f49b219_PERJANJIAN KINERJA 2020.pdf', '2020', NULL, NULL),
(223, 'Perjanjian Kinerja Perubahan', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f43712144e10_PERJANJIAN KINERJA PERUBAHAN  2019.pdf', '2019', NULL, NULL),
(224, 'Rencana Aksi', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4371877b485_RENCANA AKSI Tahun  2020.pdf', '2020', NULL, NULL),
(225, 'RENSTRA SEKWAN', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4371b57201c_RENSTRA SEKWAN.pdf', '2018-2023', NULL, NULL),
(226, 'RKT 2020', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4371c9b76dd_RKT  2020.pdf', '2020', NULL, NULL),
(227, 'SK IKI', '61f7c332-b41a-4a96-bff3-07390e0d3c16', '5f4371dec1f19_SK IKI 2020.pdf', '2020', NULL, NULL),
(228, 'Cascading DPP 2018-2023 Dispangtan ok', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f43726014f35_Cascading DPP 2018-2023 Dispangtan ok.xls', '2018-2023', NULL, NULL),
(229, 'IKU', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4472d22f676_IKU.pdf', '2018-2023', NULL, NULL),
(230, 'LKjIP', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4472e6d0e62_LKjIP 2019.pdf', '2019', NULL, NULL),
(231, 'PK ESELON 3 DAN 4 2020', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f44730634f8b_PK ESELON 3 DAN 4 2020.pdf', '2020', NULL, NULL),
(232, 'PK', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f44731d4bbd3_PK Tahun 2019.pdf', '2019', NULL, NULL),
(233, 'Rencana Aksi 2019', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4473319a683_Rencana Aksi 2019(1).pdf', '2019', NULL, NULL),
(234, 'RENCANA AKSI 2020', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4473420f2aa_Rencana Aksi 2020.pdf', '2020', NULL, NULL),
(235, 'Renstra Dinas pangan dan Pertanian', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4473613459e_Renstra Dinas pangan dan Pertanian.pdf', '2018-2023', NULL, NULL),
(236, 'RKT', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f4473767f63f_RKT 2019.pdf', '2019', NULL, NULL),
(237, 'RKT DPP', 'b8e45ab6-a7fa-4147-aba2-fca4df78e444', '5f44738720c48_RKT DPP 2020.pdf', '2020', NULL, NULL),
(238, 'Cascading', '425a25ff-1628-41f8-bc9e-b37796626922', '5f4473aa9338d_cascading itko 2019.pdf', '2019', NULL, NULL),
(239, 'IKU', '425a25ff-1628-41f8-bc9e-b37796626922', '5f4475f3b4fcb_IKU 2019.pdf', '2019', NULL, NULL),
(240, 'LKjIP', '425a25ff-1628-41f8-bc9e-b37796626922', '5f44760722c90_LKJiP 2019 iTKO.pdf', '2019', NULL, NULL),
(241, 'Perjanjian Kinerja', '425a25ff-1628-41f8-bc9e-b37796626922', '5f44761f1f3ac_Perjanjian Kinerja 2019.pdf', '2019', NULL, NULL),
(242, 'RENCANA AKSI 2020', '425a25ff-1628-41f8-bc9e-b37796626922', '5f447630700c7_Rencana Aksi 2020.pdf', '2020', NULL, NULL),
(243, 'RENJA', '425a25ff-1628-41f8-bc9e-b37796626922', '5f4476465321f_Renja 2019 Itko.pdf', '2019', NULL, NULL),
(244, 'RENSTRA', '425a25ff-1628-41f8-bc9e-b37796626922', '5f44765b32b56_RENSTRA 2018-2023 OK.pdf', '2018-2023', NULL, NULL),
(245, 'RKT', '425a25ff-1628-41f8-bc9e-b37796626922', '5f44766c644eb_RKT 2020.pdf', '2020', NULL, NULL),
(246, 'Cascading', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478878bff4_CAS CEDING (2).pdf', '2019-2023', NULL, NULL),
(247, 'LKjIP', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478a00319d_LKJip Lengkap.pdf', '2019', NULL, NULL),
(248, 'Persentase SAKIP 2020', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478baa374f_persentasi SAKIP 2020 print a.pptx', '2020', NULL, NULL),
(249, 'PK', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478cf9db2b_PK 2020 (2).pdf', '2020', NULL, NULL),
(250, 'PK PERUBAHAN', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478e4244a7_PK Perubahan 2019.pdf', '2019', NULL, NULL),
(251, 'Rencana Aksi', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f4478f73c459_RENCANA AKSI 2020.pdf', '2020', NULL, NULL),
(252, 'RKT 2020', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f44790b97d21_RKT 2020.pdf', '2020', NULL, NULL),
(253, 'RKT DAN RENCANA AKSI Dinas Perdagangan Kop UKM 2020', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f447927c3c20_RKT DAN RENCANA AKSI Dinas Perdagangan Kop UKM 2020.pdf', '2020', NULL, NULL),
(254, 'SK Penetapan IKU', '0c6f7fa3-1c54-43cb-aca2-4fd17602f569', '5f44794d6b97d_SK Penetapan IKU 2019 1.pdf', '2019', NULL, NULL),
(255, 'Cascading', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f4479aba2771_Cascading.pdf', '2019', NULL, NULL),
(256, 'IKU', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f4479cb1508a_IKU.pdf', '2019-2023', NULL, NULL),
(257, 'Indikator Kinerja Individu', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f4479fb93dbf_Indikator Kinerja Individu.pdf', '2020', NULL, NULL),
(258, 'LKjIP', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a0eeb502_LKJiP 2019 refisi.pdf', '2019', NULL, NULL),
(259, 'PK Es 3 dan 4 2020', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a320403c_PK Es 3 dan 4 2020.pdf', '2020', NULL, NULL),
(260, 'RENCANA AKSI 2020', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a3f2123e_Rencana Aksi 2020.pdf', '2020', NULL, NULL),
(261, 'RENSTRA', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a5e25651_Renstra 2018-2023.pdf', '2018-2023', NULL, NULL),
(262, 'RKT 2020', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a710f516_RKT 2020.pdf', '2020', NULL, NULL),
(263, 'SK IKI-dikonversi', 'f348a7c6-c319-4aa4-b65e-841797dad6d0', '5f447a8d0d522_SK IKI-dikonversi.pdf', '2020', NULL, NULL),
(264, 'Cascading', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447ab34237b_CASSCADING DISHUB.pdf', '2020', NULL, NULL),
(265, 'IKU', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447ad5b2157_IKU dishub.pdf', '2018-2023', NULL, NULL),
(266, 'LKjIP', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447aee7d71d_Lakjip 2019 dishub.pdf', '2019', NULL, NULL),
(267, 'lamp RKT dan Renc Aksi 2020 dishub', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447b04a3477_lamp RKT dan Renc Aksi 2020 dishub.pdf', '2020', NULL, NULL),
(268, 'Perjanjian Kinerja', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447b17b848a_Perjanjian Kinerja 2020 ok.pdf', '2020', NULL, NULL),
(269, 'PK PERUBAHAN', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447b35bb74f_PK perubahan 2019.pdf', '2019', NULL, NULL),
(270, 'RENJA', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447b51151ec_Renja Dishub 2020.pdf', '2020', NULL, NULL),
(271, 'RENSTRA', '54a2497d-1b95-4224-b1a7-b9794e40f837', '5f447b74330d7_renstra komplit.pdf', '2018-2023', NULL, NULL),
(272, 'Cascading', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447bbc363be_CASSCADING.pdf', '2019-2023', NULL, NULL),
(273, 'IKI', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447bd11250e_IKI BAPPEDA 2020.pdf', '2020', NULL, NULL),
(274, 'LKjIP', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447be3e5a9b_LKjIP BAPPEDA 2019.pdf', '2019', NULL, NULL),
(275, 'PK PERUBAHAN', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447bf8a2f4f_PK 2019 Perubahan.pdf', '2019', NULL, NULL),
(276, 'PK', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447c0b35399_PK 2020.pdf', '2020', NULL, NULL),
(277, 'Rencana Aksi', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447c1ead845_RENCANA AKSI BAPPEDA 2020.pdf', '2020', NULL, NULL),
(278, 'RENSTRA', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447c3b970dd_RENSTRA BAPPEDA 2018-2023.pdf', '2018-2023', NULL, NULL),
(279, 'RKT', 'd413b447-4097-4af6-8b9d-1279a5893495', '5f447c4b4e2d0_RKT BAPPEDA 2020.pdf', '2020', NULL, NULL),
(280, 'RENSTRA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447d08d00cd_01. Renstra 2018 - 2023.pdf', '2018-2023', NULL, NULL),
(281, 'RENSTRA', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447d1bf3aee_01. RENSTRA 2019.pdf', '2019', NULL, NULL),
(282, 'PERJANJIAN KINERJA PERUBAHAN 2019 KANTOR CAMAT PPB', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447d5fce874_02. PERJANJIAN KINERJA PERUBAHAN 2019 KANTOR CAMAT PPB.pdf', '2019', NULL, NULL),
(283, 'PERJANJIAN KINERJA PERUBAHAN 2019 KCPB', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447d8152075_02. PERJANJIAN KINERJA PERUBAHAN 2019 KCPB.pdf', '2019', NULL, NULL),
(284, 'Perjanjian Kinerja', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447d8f4076d_03. PERJANJIAN KINERJA 2020.pdf', '2020', NULL, NULL),
(285, '04. Rencana Aksi Kinerja Sasaran 2020', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447db5a512d_04. Rencana Aksi Kinerja Sasaran 2020.pdf', '2020', NULL, NULL),
(286, 'Rencana Kinerja Tahunan', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447dd284271_05. Rencana Kinerja Tahunan 2020.pdf', '2020', NULL, NULL),
(287, 'IKU', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447dea50ca1_06. IKU 2020.pdf', '2020', NULL, NULL),
(288, 'Cascading Renstra', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447dfcc211f_07. Cashcading Renstra 2018 - 2023.pdf', '2018-2023', NULL, NULL),
(289, '08. Presentasi SAKIP 2020', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447e1630343_08. Presentasi SAKIP 2020.pdf', '2020', NULL, NULL),
(290, 'SK INDIKATOR KINERJA INDIVIDU (IKI)', 'acb6d8c0-e67f-47aa-bb3a-dd164b342acb', '5f447e2ff1518_09. SK INDIKATOR KINERJA INDIVIDU (IKI).pdf', '2020', NULL, NULL),
(291, 'IKU', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447e9bb2a19_IKU.pdf', '2019-2023', NULL, NULL),
(292, 'Indikator  Kinerja  Individu-dikonversi', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447ed259f3d_Indikator  Kinerja  Individu-dikonversi.pdf', '2019', NULL, NULL),
(293, 'LKjIP', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447efd9f1f3_LKj IP BPKD 2019 (1) ok.pdf', '2019', NULL, NULL),
(294, 'PERJANJIAN KINERJA 2019 BARU-dikonversi', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447f21e0a8f_PERJANJIAN KINERJA 2019 BARU-dikonversi.pdf', '2019', NULL, NULL),
(295, 'Perjanjian Kinerja', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447f364fe7f_PERJANJIAN KINERJA 2020 (1).pdf', '2020', NULL, NULL),
(296, 'RENSTRA', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447f55cc9d9_Renstra .pdf', '2019-2023', NULL, NULL),
(297, 'RKT dan RENCANA AKSI 2020', 'c7c05db9-0618-43ac-a767-84c8c864584c', '5f447f6e33bce_RKT dan RENCANA AKSI 2020.pdf', '2020', NULL, NULL),
(298, 'Cascading', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f44853918d1d_cascading.pdf', '2019', NULL, NULL),
(299, 'IKU', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f44854c3f719_IKU BKPSDM 2020.pdf', '2020', NULL, NULL),
(300, 'LAKIP', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f44856aa9c4e_LAKIP BKPSDM...pdf', '2019', NULL, NULL),
(301, 'Perjanjian Kinerja Eselon III, IV 2019', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4485a74c245_Perjanjian Kinerja Eselon III, IV 2019.pdf', '2019', NULL, NULL),
(302, 'Rencana Aksi 2019', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4485c09ebdd_Rencana Aksi 2019.pdf', '2019', NULL, NULL),
(303, 'RENSTRA', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4485e86eb7e_RENSTRA BKPSDM.pdf', '2018-2023', NULL, NULL),
(304, 'RKT', '376fbea0-a68a-4b4c-a9e8-042485ed2892', '5f4485fc47538_RKT 2020.pdf', '2020', NULL, NULL),
(305, 'RENSTRA', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f44867a9bb3a_1. RENSTRA RSUD KOTA PADANG PANJANG.pdf', '2018-2023', NULL, NULL),
(306, 'SK IKU 2019 ok RSUD KOTA PADANG PANJANG', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4486afc412d_2. SK IKU 2019 ok RSUD KOTA PADANG PANJANG.pdf', '2019', NULL, NULL),
(307, 'Rencana Kinerja Tahunan', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4486f6a3727_3. RENCANA KINERJA TAHUNAN TAHUN 2020.pdf', '2020', NULL, NULL),
(308, 'PERJANJIAN KINERJA RSUD KOTA PADANG PANJANG TAHUN 2020', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4487205dc13_4. PERJANJIAN KINERJA RSUD KOTA PADANG PANJANG TAHUN 2020.pdf', '2020', NULL, NULL),
(309, 'LKjIP', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4487956686d_6. LKjIP 2019 RSUD KOTA PADANG PANJANG.pdf', '2019', NULL, NULL),
(310, 'Cascading', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4487b68e817_7. Casscading RSUD.pdf', '2018-2023', NULL, NULL),
(311, 'Persentase Direktur SAKIP', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4488a2585bc_8. Presentasi Direktur SAKIP.ppt', '-', NULL, NULL),
(312, 'RENCANA AKSI KINERJA RSUD KOTA PADANG PANJANG', '0fc00050-3fcf-437e-8cab-82e1d6c70b12', '5f4488c66e8f4_RENCANA AKSI KINERJA RSUD KOTA PADANG PANJANG.pdf', '2020', NULL, NULL),
(313, 'Cascading', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', '5f448ad94f0ac_CASCADING.pdf', '2020', NULL, NULL),
(314, 'Rencana Aksi', 'ba6a319c-bf6e-4a9e-a26e-68e262f8d67c', '5f448af2ae90a_RENCANA AKSI.pdf', '2020', NULL, NULL),
(315, 'PK PERUBAHAN', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f448b1bbc098_PK KOTA PERUBAHAN 2019.pdf', '2019', NULL, NULL),
(316, 'IKU', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f448b4164c51_IKU KOTA.pdf', '2018-2023', NULL, NULL),
(317, 'LKjIP', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f448b53c058c_LkjiP.pdf', '2020', NULL, NULL),
(318, 'PK 2020', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f448b6df24ed_PK KOTA 2020.pdf', '2020', NULL, NULL),
(319, 'RPJMD', 'c186138c-0830-4da8-a91a-71c7ab038176', '5f448b92eff75_RPJMD.pdf', '2018-2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"text-align: center;\"><strong><span style=\"font-family:Georgia,serif;\">SEJARAH LAHIRNYA KOTA PADANG PANJANG</span></strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Setelah Proklamasi Kemerdekaan Republik Indonesia, untuk menjalankan roda pemerintahan, Padang Panjang dijadikan suatu&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kawedanan\" rel=\"noopener noreferrer\" target=\"_blank\">kewedanaan</a>&nbsp;yang wilayahnya meliputi Padang Panjang, Batipuh dan X Koto yang berkedudukan di Padang Panjang.</span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Pada masa agresi militer Belanda, Kota Padang Panjang pernah menjadi pusat pemerintahan sementara Sumatera Tengah setelah Kota Padang dikuasai Belanda pada pada tahun 1947.</span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Berdasarkan Ketetapan Ketua PDRI tanggal 1 Januari 1950 tentang Pembagian Propinsi juga sekaligus ditetapkan pula pembagian Kabupaten dan Kota antara lain Bapituh dan X Koto kedalam wilayah Kabupaten Tanah Datar, sehingga Padang Panjang hanya merupakan tempat kedudukan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kawedanan\" rel=\"noopener noreferrer\" target=\"_blank\">Wedana</a>&nbsp;yang mengkoordinir Kecamatan X Koto.</span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Kemudian berdasarkan UU No. 8 tahun 1956 tentang Pembentukan Daerah Otonom Kota Kecil di lingkungan Propinsi Sumatera Tengah, maka lahir secara resmi Kota Kecil Padang Panjang.</span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Kota Padang Panjang sebagai pemerintahan daerah terbentuk pada tanggal 23 Maret 1956. Selanjutnya, barulah setahun kemudian, berdasarkan Undang-undang nomor 1 tahun 1957, status kota ini sejajar dengan daerah kabupaten dan kota lainnya di Indonesia.</span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-family:Georgia,serif;\"><span style=\"font-size:14px;\">Pada tahun 1957 dilantik Walikota pertama dan sebagai Daerah Otonom sesuai Peraturan Daerah Nomor 34/K/DPRD-1957 dibentuk 4 (empat) Resort, dan dimana masing-masing Resort dengan Keputusan DPRD Peralihan Kota Praja Nomor 12/K/DPRD-PP/57 membawahi 4 jorong sebagai berikut :</span></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:400px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align: center;\">No</td>\r\n			<td style=\"text-align: center;\">Kelurahan</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align: center;\">Resort Bukit Surungan</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">1</td>\r\n			<td>Sigando</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">2</td>\r\n			<td>Gantiang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">3</td>\r\n			<td>Ekor Lubuk&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">4</td>\r\n			<td>Ngalau</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:400px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align: center;\">No</td>\r\n			<td style=\"text-align: center;\">Kelurahan</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align: center;\">Resort Pasar</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">1</td>\r\n			<td>Balai-Balai</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">2</td>\r\n			<td>Bukit Surungan</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">3</td>\r\n			<td>Pasar Baru</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">4</td>\r\n			<td>Tanah Hitam</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align: center;\">No</td>\r\n			<td style=\"text-align: center;\">Keluarahan</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align: center;\">Resort Lareh Nan Panjang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">1</td>\r\n			<td>Koto Katiak</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">2</td>\r\n			<td>Koto Panjang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">3</td>\r\n			<td>Tanah Oak Lambiak</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">4</td>\r\n			<td>Guguk Malintang</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>No</td>\r\n			<td>Kelurahan</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align: center;\">Resort Bukit Surungan</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">1</td>\r\n			<td>kampung Manggis</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">2</td>\r\n			<td>Pasar Usang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">3</td>\r\n			<td>Silaing Atas</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">4</td>\r\n			<td>Silaing Bawah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Kemudian berdasarkan Undang-undang Nomor 18 Tahun 1965 istilah kota praja diganti menjadi kotamadya dan berdasarkan peraturan menteri nomor 44 tahun 1980 dan peraturan pemerintah nomor 16 tahun 1982 tentang susunan dan tata kerja pemerintahan kelurahan, maka&nbsp;<strong><em>resort</em>&nbsp;</strong>diganti menjadi kecamatan dan&nbsp;<strong><em>jorong</em>&nbsp;</strong>diganti menjadi kelurahan dan berdasarkan peraturan pemerintah nomor 13 tahun 1982 Kota Padang Panjang dibagi atas dua kecamatan yakni Kecamatan Padang Panjang Barat dan Kecamatan Padang Panjang Timur, dengan secara keseluruhan 16 kelurahan.</p>\r\n\r\n<p style=\"text-align: justify;\">Kemudian dalam rangka Pembinaan Kehidupan Nagari sebagai kesatuan masyarakat Hukum Adat, maka berdasarkan Mubes LKAAM tahun 1966 di Kota Padang Panjang terdapat 3 KAN, yaitu:</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align: center;\">No</td>\r\n			<td style=\"text-align: center;\">KAN</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">1</td>\r\n			<td>Gunuang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">2</td>\r\n			<td>Lareh Nan Panjang</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align: center;\">3</td>\r\n			<td>Bukit Surungan</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align: justify;\">Sedangkan Resort Pasar, karena sebagian besar penduduknya pendatang tidak dibentuk KAN.</p>\r\n\r\n<h3 style=\"text-align: justify;\"><strong>PENETAPAN HARI JADI KOTA PADANG PANJANG</strong></h3>\r\n\r\n<p style=\"text-align: justify;\">Hari Jadi Kota Padang Panjang yang selama ini diperingati tanggal 23 Maret setiap tahunnya, sesuai dengan tanggal pengundangan dari Undang-undang Nomor 8 Tahun 1956 tentang Pembentukan Daerah Otonom Kota Kecil dalam Lingkungan Daerah Propinsi Sumatera Tengah, ternyata masih banyak masyarakat / warga Kota Padang Panjang yang belum dapat menerima atau mengakui Hari Jadi dimaksud. Hal ini disebabkan karena dalam sejarah perkembangannya, Padang Panjang sebetulnya sudah ada sejak beberapa ratus tahun yang lalu.</p>\r\n\r\n<p style=\"text-align: justify;\">Terhadap penetapan Hari Jadi Kota Padang Panjang tersebut di atas, beberapa tahun terakhir ini masyarakat / warga Kota Padang Panjang mengusulkan kepada Pemerintah Kota Padang Panjang untuk meninjau kembali melalui suatu kajian sejarah yang melibatkan Tokoh Masyarakat, Sejarawan atau kalangan Akademisi serta&nbsp;<em>Stake Holders</em>&nbsp;lainnya di lingkungan Pemerintah Kota Padang Panjang. Atas usul masyarakat inilah Pemerintah Kota Padang Panjang pada tahun 2002 yang lalu membentuk Badan Kajian Sejarah dan Perjuangan Bangsa (BKSPB) Kota Padang Panjang yang ditetapkan dengan Keputusan Walikota Padang Panjang Nomor 227 Tahun 2002 yang antara lain bertugas meninjau dan mengkaji ulang Hari Jadi Kota Padang Panjang berdasarkan sejarah atau&nbsp;<em>historis</em>&nbsp;dan perkembangan yang telah ada beberapa ratus tahun yang lalu.</p>\r\n\r\n<p style=\"text-align: justify;\">Hasil kegiatan BKSPB Kota Padang Panjang terhadap Hari Jadi Kota Padang Panjang dimaksud sesuai dengan tahapannya telah disempurnakan melalui Kegiatan Seminar Sehari yang diadakan pada tanggal 12 Maret 2003. Pada saat itu disepakati bahwa penetapan Hari Jadi Kota Padang Panjang adalah tanggal 1 Desember 1790, dan untuk pertama kalinya diperingati pada tanggal 1 Desember 2004 dan dilanjutkan pada tahun-tahun berikutnya. Untuk lebih menguatkan legalitas atau dasar hukum dari penetapan Hari Jadi Kota PadangpPanjang tanggal 1 Desember 1790 ditetapkan dengan suatu Peraturan Daerah yaitu Peraturan Daerah Kota Padang Panjang Nomor 17 Tahun 2004 tentang Penetapan Hari Jadi Kota Padang Panjang.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Kiki Permata Sari', NULL, NULL, '$2y$10$xnYJnO/QLvEbpnHiErTituBMoPIFSOjNOBH8oV6UIpJiMelwO57SS', 'permata95', 'superadmin', NULL, NULL, NULL),
(4, 'portal papa', NULL, NULL, '$2y$10$.0Hb0O6MJlhPMBLTFlYNFeTSMsgsg4C9c0XoUqv5WzQT6Hi7kODqK', 'admin001', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`, `created_at`, `updated_at`) VALUES
(1, '7iHa4WC1tWE', NULL, NULL),
(2, '0HXw8ehX1aI', NULL, NULL),
(4, 'zQEY8R1Qa38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visimisi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visimisi`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify;\"><strong><b>UNTUK KEJAYAAN PADANG PANJANG YANG BERMARWAH DAN BERMARTABAT</b></strong></p>\r\n\r\n<p style=\"text-align: justify;\">Visi Walikota dan Wakil Walikota 2018-2023 di atas merupakan Komitmen politik yang hendak diwujudkan dan sekaligus sebuah gambaran cita-cita untuk bergerak bersama seluruh masyarakat Kota Padang Panjang, pemerintahannya menjunjung amanah membangun negeri, rakyatnya berpartisipasi dalam pembangunan demi kejayaan Padang Panjang. Penjabaran dari arti Visi Jangka Menengah Kota Padang Panjang di atas adalah :</p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\"><strong><b>Untuk Kejayaan Padang Panjang</b></strong><br />\r\n	Artinya menciptakan kondisi atau keadaan yang mantap, mapan, lebih menguntungkan, lebih berkemaslahatan, lebih membahagiakan dan semakin bermakna bagi seluruh warga Padang Panjang Kota Serambi Mekkah yang berfalsafah&nbsp;<em><i><strong>Adat Basandi Syarak, Syarak Basandi Kitabullah</strong></i></em>.<br />\r\n	Kejayaan Padang Panjang berarti sebuah hasil dari proses perubahan yang menggambarkan kesejahteraan dan kemandirian masyarakat. Kejayaan Padang Panjang ditandai dengan Tingkat perekonomian yang tinggi, kualitas SDM yang baik dan reformasi birokrasi yang berjalan baik.</li>\r\n	<li style=\"text-align: justify;\"><strong><b>Bermarwah</b></strong><br />\r\n	Istilah Marwah&nbsp;adalah istilah yang menunjuk pada kehormatan diri, yang memiliki arti kemuliaan&nbsp;dan kewibawaan. Sehingga, dengan visi&nbsp;<strong><em>&lsquo;Menjadikan Kota Padang Panjang sebagai Kota Bermarwah&rsquo;</em>&nbsp;</strong>diharapkan dapat terwujud suatu kondisi kemuliaan bagi Kota Padang Panjang&nbsp;dan seluruh masyarakatnya. Bermarwah berkaitan dengan Sumber Daya Manusia kota Padang Panjang yang ditandai dengan SDM yang berkualitas, masyarakat yang agamis, religi dan berbudaya.</li>\r\n	<li style=\"text-align: justify;\"><strong><b>Bermartabat</b></strong><br />\r\n	Kota yang bermartabat dapat diwujudkan melalui Kota yang yang aman, tertib, bersih dan asri, dimana masyarakat Kota Padang Panjang adalah masyarakat yang mandiri, makmur, sejahtera dan memiliki keunggulan-keunggulan dan berdaya-saing tinggi untuk dapat menempatkan diri sebagai kota yang terkemuka dengan berbagai prestasi di berbagai bidang.Bermartabat ditandai dengan kota yang aman dan tertib, kota yang peduli lingkungan, meningkatnya kesejahteraan masyarakat, meningkatnya partisipasi masyarakat, dan terlaksananya reformasi birokrasi</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify; margin-left: 40px;\"><strong><b>Misi 1:</b></strong>&nbsp;<strong><b>Meningkatkan Pertumbuhan Ekonomi Unggulan Daerah Berbasis Pembangunan Berkelanjutan</b></strong><br />\r\n<br />\r\nPembangunan diprioritaskan pada peningkatan kemampuan perekonomian daerah dengan struktur perekonomian yang kokoh berlandaskan keunggulan kompetitif yang berbasis pada potensi ekonomi lokal, berorientasi pada ekonomi kerakyatan yang menggunakan pendekatan pemanfaatan potensi unggulan daerah dalam menggerakkan perekonomian daerah dalam rangka menciptakan pembangunan ekonomi secara merata sehingga dapat menemukan momentumnya di tengah arus ekonomi global.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong><b>Misi 2:</b></strong>&nbsp;<strong><b>Meningkatkan Pemerataan dan Kualitas daya Saing SDM masyarakat yang Berakhlak dan Berbudaya.</b></strong></p>\r\n\r\n<p style=\"margin-left: 40px;\">Pembangunan diprioritaskan pada peningkatan kualitas sumberdaya manusia yang memiliki tingkat pendidikan dan derajat kesehatan yang tinggi.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong><b>Misi 3:</b></strong>&nbsp;<strong><b>Meningkatkan Tata Kelola Pemerintahan Yang Responsif, Inovatif dan Partisipatif</b></strong></p>\r\n\r\n<p style=\"margin-left: 40px;\">Penyelenggaraan pemerintahan diprioritaskan pada peningkatan penyelenggaraan teknis pemerintahan yang berdasarkan prinsip akuntabilitas, terkontrol, responsive, professional, efisien dan efektif, transparan, visioner dan partisipatif serta supremasi hukum dengan menerapkan prinsip-prinsip tata kelola pemerintahan yang baik (<em><i>good governance</i></em>) sehingga mampu memberikan pelayanan yang prima kepada masyarakat.</p>\r\n\r\n<p style=\"margin-left: 40px; text-align: justify;\"><strong><b>&nbsp;</b></strong></p>\r\n\r\n<p style=\"margin-left: 40px; text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `walikota`
--

CREATE TABLE `walikota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `walikota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuntabilitas`
--
ALTER TABLE `akuntabilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpnsd`
--
ALTER TABLE `cpnsd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ensiklopedia`
--
ALTER TABLE `ensiklopedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap`
--
ALTER TABLE `gap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geografis`
--
ALTER TABLE `geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grafis`
--
ALTER TABLE `grafis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungi`
--
ALTER TABLE `kunjungi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lambang`
--
ALTER TABLE `lambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengelolaan`
--
ALTER TABLE `pengelolaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencana`
--
ALTER TABLE `rencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sakip`
--
ALTER TABLE `sakip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walikota`
--
ALTER TABLE `walikota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuntabilitas`
--
ALTER TABLE `akuntabilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cpnsd`
--
ALTER TABLE `cpnsd`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ensiklopedia`
--
ALTER TABLE `ensiklopedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap`
--
ALTER TABLE `gap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geografis`
--
ALTER TABLE `geografis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grafis`
--
ALTER TABLE `grafis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungi`
--
ALTER TABLE `kunjungi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lambang`
--
ALTER TABLE `lambang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengelolaan`
--
ALTER TABLE `pengelolaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rencana`
--
ALTER TABLE `rencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sakip`
--
ALTER TABLE `sakip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walikota`
--
ALTER TABLE `walikota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
