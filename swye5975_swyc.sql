-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2025 at 10:23 AM
-- Server version: 10.11.14-MariaDB-cll-lve
-- PHP Version: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swye5975_swyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('377a3510d4e16635d29740eab33747e35180ffb8', 'i:1;', 1752809032),
('377a3510d4e16635d29740eab33747e35180ffb8:timer', 'i:1752809032;', 1752809032),
('521946b72662c1bffb8777f5557edc20a29160bd', 'i:5;', 1756885445),
('521946b72662c1bffb8777f5557edc20a29160bd:timer', 'i:1756885445;', 1756885445),
('7181e3f0773d000856f30fdbd75160b437ccfc47', 'i:1;', 1753146852),
('7181e3f0773d000856f30fdbd75160b437ccfc47:timer', 'i:1753146852;', 1753146852),
('9dbd62bb59f339c834fb8241ba274641c64a51ae', 'i:1;', 1758004149),
('9dbd62bb59f339c834fb8241ba274641c64a51ae:timer', 'i:1758004149;', 1758004149),
('ab978292b2e2ff7b1c6a5f0f70e5535f82c8fc0d', 'i:1;', 1752810289),
('ab978292b2e2ff7b1c6a5f0f70e5535f82c8fc0d:timer', 'i:1752810289;', 1752810289),
('cbca9d8f0fd311623355b7ea248d7d0d3bb21d86', 'i:1;', 1752804732),
('cbca9d8f0fd311623355b7ea248d7d0d3bb21d86:timer', 'i:1752804732;', 1752804732),
('fa95acc55644c7d886853f66c0f0f88753b60dc1', 'i:1;', 1758078940),
('fa95acc55644c7d886853f66c0f0f88753b60dc1:timer', 'i:1758078940;', 1758078940);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_identitas`
--

CREATE TABLE `dokumen_identitas` (
  `id` int(11) NOT NULL,
  `jenis_identitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen_identitas`
--

INSERT INTO `dokumen_identitas` (`id`, `jenis_identitas`) VALUES
(2, 'KTP'),
(3, 'KTM'),
(4, 'SIM'),
(5, 'PASPOR'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kekerasan`
--

CREATE TABLE `kekerasan` (
  `id` int(11) NOT NULL,
  `tipe_kekerasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kekerasan`
--

INSERT INTO `kekerasan` (`id`, `tipe_kekerasan`) VALUES
(1, 'Kekerasan Fisik'),
(2, 'Kekerasan Seksual'),
(3, 'Kekerasan Psikis'),
(4, 'Perundungan'),
(6, 'Diskriminasi dan Intoleranasi'),
(14, 'Kebijakan yang Mengandung Kekerasan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` varchar(32) NOT NULL,
  `kode_laporan` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `no_identitas` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `email` text NOT NULL,
  `universitas` int(3) DEFAULT NULL,
  `no_hp` text NOT NULL,
  `jenis_identitas` text NOT NULL,
  `upload_identitas` text DEFAULT NULL,
  `tanggal_kejadian` text NOT NULL,
  `kronologi_kejadian` text NOT NULL,
  `upload_bukti` text DEFAULT NULL,
  `lokasi_kejadian` text NOT NULL,
  `jenis_kekerasan` text NOT NULL,
  `status_laporan` text NOT NULL,
  `tgl_batas_proses` datetime DEFAULT NULL,
  `deskripsi_laporan` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `kode_laporan`, `nama`, `no_identitas`, `jenis_kelamin`, `email`, `universitas`, `no_hp`, `jenis_identitas`, `upload_identitas`, `tanggal_kejadian`, `kronologi_kejadian`, `upload_bukti`, `lokasi_kejadian`, `jenis_kekerasan`, `status_laporan`, `tgl_batas_proses`, `deskripsi_laporan`, `created_at`, `updated_at`) VALUES
('6WUjrpmb3O', 'REP-2509160001', 'wahyu', '987987987', 'Laki-laki', 'wahyupramusinto@gmail.com', NULL, '08128741888', '2', '/home/swye5975/public_html/public/uploads/identitas1758004037-Revitalisasi Satuan Pendidikan Dukung Kenyamanan Pembelajaran di Kelas.jpeg', '2025-09-09', 'pada saat saya pulang sekolah saya dibully.....', '/home/swye5975/public_html/public/uploads/bukti1758004037-Pembelajaran Bermutu Tujuan Akhir Revitalisasi Satuan Pendidikan.jpeg', 'Kelas', '1', 'Diterima', '2025-09-23 00:00:00', NULL, '2025-09-16 06:27:17', '2025-09-16 06:27:17'),
('jrX8Ep9EQA', 'REP-2507220001', 'nama', '123', 'Perempuan', 'wahyupramusinto@gmail.com', NULL, '1', '2', NULL, '2025-07-22', 'kronologi_kejadian', '/home/swye5975/public_html/public/uploads/bukti1753146762-ilustrasi-siswa-belajar-bersama.jpg', 'lokasi_kejadian', '6', 'Diterima', '2025-07-29 00:00:00', NULL, '2025-07-22 01:12:42', '2025-07-22 01:12:42'),
('Uk4akGTLP7', 'REP-2509170001', 'wahyu pramusinto', '6876876876', 'Laki-laki', 'wahyupramusinto@gmail.com', NULL, '081297419994', '2', '/home/swye5975/public_html/public/uploads/identitas1758078803-Revitalisasi Satuan Pendidikan Dukung Kenyamanan Pembelajaran di Kelas.jpeg', '2025-09-16', 'pada saat pulang sekolah saya mengalami kekerasan....', '/home/swye5975/public_html/public/uploads/bukti1758078803-Revitalisasi Satuan Pendidikan Dukung Kenyamanan Pembelajaran di Kelas.jpeg', 'Ruang Kelas', '3', 'Diterima', '2025-09-24 00:00:00', NULL, '2025-09-17 03:13:23', '2025-09-17 03:13:23'),
('Xd0Qbsd1oS', 'REP-2507250001', 'Mei', '2171500859', 'Perempuan', 'memeymeliani4@gmail.com', NULL, '085591413072', '6', '/home/swye5975/public_html/public/uploads/identitas1753427642-Screenshot_20250725_140924_Samsung Internet.jpg', '2025-07-24', 'Contoh..', '/home/swye5975/public_html/public/uploads/bukti1753427642-Screenshot_20250725_140924_Samsung Internet.jpg', 'Kampus', '14', 'Diterima', '2025-08-01 00:00:00', NULL, '2025-07-25 07:14:02', '2025-07-25 07:14:02'),
('xHibK7wVl2', 'REP-2507180001', 'Mawar', '081543543', 'Laki-laki', 'wahyupramusinto@gmail.com', NULL, '081276437676', '2', NULL, '2025-07-01', 'pada suatu hari saya dicakar kucing', '/home/swye5975/public_html/public/uploads/bukti1752810119-mpls-ramah-2025 (4).jpeg', 'Ruang Kelas', '1', 'Dalam penanganan', '2025-07-25 00:00:00', NULL, '2025-07-18 03:41:59', '2025-07-22 01:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_log`
--

CREATE TABLE `laporan_log` (
  `id` int(11) NOT NULL,
  `kode_laporan` varchar(255) DEFAULT NULL,
  `tanggal_diubah` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_laporan` text DEFAULT NULL,
  `deskripsi_laporan` text DEFAULT NULL,
  `upload_file` text DEFAULT NULL,
  `tgl_batas_proses` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_log`
--

INSERT INTO `laporan_log` (`id`, `kode_laporan`, `tanggal_diubah`, `status_laporan`, `deskripsi_laporan`, `upload_file`, `tgl_batas_proses`, `created_at`, `updated_at`) VALUES
(1, 'REP-2507180001', '2025-07-17 20:41:59', 'Diterima', 'Laporan Masuk ke Sistem', NULL, '2025-07-25', '2025-07-18 03:41:59', '2025-07-18 03:41:59'),
(2, 'REP-2507220001', '2025-07-21 18:12:42', 'Diterima', 'Laporan Masuk ke Sistem', NULL, '2025-07-29', '2025-07-22 01:12:42', '2025-07-22 01:12:42'),
(3, 'REP-2507180001', '2025-07-22 01:15:40', 'Sedang diverifikasi', 'apa ini', '/home/swye5975/public_html/public/uploads/logs1753146940-ilustrasi-siswa-belajar-bersama.jpg', '2025-07-21', '2025-07-22 01:15:40', '2025-07-22 01:15:40'),
(4, 'REP-2507180001', '2025-07-22 01:19:07', 'Dalam penanganan', 'ditangani', NULL, '2025-07-24', '2025-07-22 01:19:07', '2025-07-22 01:19:07'),
(5, 'REP-2507250001', '2025-07-25 00:14:02', 'Diterima', 'Laporan Masuk ke Sistem', NULL, '2025-08-01', '2025-07-25 07:14:02', '2025-07-25 07:14:02'),
(6, 'REP-2509160001', '2025-09-15 23:27:17', 'Diterima', 'Laporan Masuk ke Sistem', NULL, '2025-09-23', '2025-09-16 06:27:17', '2025-09-16 06:27:17'),
(7, 'REP-2509170001', '2025-09-16 20:13:23', 'Diterima', 'Laporan Masuk ke Sistem', NULL, '2025-09-24', '2025-09-17 03:13:23', '2025-09-17 03:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0acza6xGPPIjNr4YG4vUgKBDOZwhLm9uIduDr65a', NULL, '43.167.232.38', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXo0WTVRTFFUWGRUUnZnc0dOanlDQTdwdkNoMktWc0dxVlR3VnFiUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758033392),
('0rVA0f7uIAkEuip1XUXGyrU1mhehIApduEHgBQUQ', NULL, '94.191.43.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczQ1MGtxMXc0T1FlNUs3eHlXVWd3S2ZLQjhRRVpNWWpUbVJEVnVhbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758073085),
('3FccUmtBFwDjeZP2LAL4cWBb0rvZsI1sibQvOL0p', NULL, '91.134.91.17', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Safari/605.1.61', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY05OQTJmckhiYXYyODloYlRqWTFjaWJLWnVFd25WZTFMcko0anphNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758059893),
('5BiVfwcIhxnyJIi0cL8pCvspTXAQORRjfWNKYfTz', NULL, '132.232.165.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnFGR1NCREpzUGVrVk1NRkFndFprZHJibk1LWGNTVHVZT1Rpb0RkbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758046022),
('7rvQaVfAUTMks8Sb2gW07JNd7MKznQeEVB16gai8', NULL, '51.195.183.25', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjdhdDVESkpxVzFBQ0tFRjJjTG9UUmxyQXBCYzlnQ0g5WjdESkw4eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758073541),
('cCEorolMl1g6wXzsDOeQGDLmKGnJiWCvnMhgs67i', NULL, '80.85.246.217', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0RsZzc2b3RJZnNyMXpSaFZzSDZZcWVKQWQwcG5WSndJUThTaXhkNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758025113),
('djAGQolOTMmwByUJpSqLMyIaIk3WVftGk46RRCB1', 1, '182.3.51.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT2p0emx1cmFrd1Zrd0VDZ3BGbGFYMkVGRUhiMDZQcjViNFZESnZxeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20vbGFwb3Jhbi9mb3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1758004659),
('E5BZAi335ydS5NVYUwBsfKyvwHPt4SC8oIZJu8c0', NULL, '217.113.194.56', 'Mozilla/5.0 (compatible; Barkrowler/0.9; +https://babbar.tech/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTJuN2RDMkF0QlNIRFV4bkxhOE1Sc1hPSGJkeUMxSDZxRDJHdVVWWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758018774),
('eunJowTXcmW9oAkhi7SfHWKHOVMIZpHbNkPKVVpX', NULL, '128.199.182.55', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA667479) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.3389.98 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUFBS01VYmpCT3FnYmtGOXN3OVdFVmlpR0Rib2ZGczRlU3dWdm9JdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbWFpbC5zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758028649),
('eV7s7bME8qLiEVqw9aTKgUr2SNGTHWrpNa1Lgw0A', NULL, '43.130.150.80', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzlSNFU3NzY2QkFUaFRPZURlMEdUeG1EVzBIelR3d2pkWFFYZ0ZaYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758013864),
('hgIH6use96unfQ8YTbQvoqAuEhGQ25Zogndt7aJn', NULL, '172.172.30.70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4240.193 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoialRiNE5mRFZDczVGc1NxdEROeEx3Rkp6a05aRTRJa3ZDbk1CenVhaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758075997),
('hoBl5bvNyHB9H1CuOEI6CqUFpWuCM8BSr64CSicc', NULL, '43.131.45.213', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclhXZWRhVXNZUEpvRHhjTzZqelpnQXVyZWtnMXVDUkk2WU8zQnl1ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly93d3cuc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758076419),
('J4h8NaIX2IHq6oRcmkY5iidWgCfIXPMbUn164nAp', NULL, '182.3.45.85', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3VlMVRUa3VOTWdWc3d0YWZsbjdqTUVac1NUUmpNMDFvZUQ5dlppNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20vbGFwb3Jhbi9zdGF0dXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1757998759),
('J7FwikKUYkcKBmvLokDYs09b6DF1LDW2EXHQWSkQ', 1, '101.255.11.228', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibUNsWTNTY0w0b2ZUdGpZa0pLTFRHMHpuMHBpMFFBN3M4aDFsVElEdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1758079217),
('ortK1lLUPl63PGpvEKSRoAjt2DCdZftgVCWfjDQp', NULL, '43.153.67.21', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUpiSUZ4OVNGc2dyUVR2OVFaR1hlMHM0RTVEZ0IyQ2dGTnh0OUVWbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758075072),
('OYMWoBwYVuzy1GbzGS4doixavVowDk5R9XKThdTa', NULL, '44.193.254.10', 'Mozilla/5.0 (X11; Linux x86_64; rv:104.0) Gecko/20100101 Firefox/104.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXRUYWlxRVZiYXJHeXZab2o3aUU3UFgyeklxSWJFajVBZ2dwVm94byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly93d3cuc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758035302),
('p9uFpzAfmkZob1q8hw6rap1Of8PKZQMt199gDRTp', NULL, '117.33.163.216', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjhMcTFRaFA2NzVveVVLVWVoR1RWSFJRY25VSTE5d1IzVlJXWlB2USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly93d3cuc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758031608),
('qNbnmOfdLVpjDovo1k9p2vaGpPxLwQlapkeObZUV', NULL, '3.140.182.19', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmRUNTZ0ZXF1TFJBMFdOSEptQnRFaldUREJteUJ5Z3lXRUdERXJwSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758012766),
('rLUic4ztrEhoKFNFdCswOo9zvcvJyaG1qQZ9mfbL', NULL, '47.128.34.159', 'Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; Bytespider; spider-feedback@bytedance.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0RrSzlEaW9BT3dwTGdBUUpGdWhoWU5Hck5pTkNJUllNZnJqQnlvYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbWFpbC5zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758005596),
('RzFdCZ4mzi83jY79pgRewMK837cw4YG3wbYl8pDg', NULL, '80.85.245.145', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTJpT3ZScVo1MHNaMTdlS3lubTJWVUtvS2dDYkFuR3hlT283SkdlRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758035249),
('SmXKz7mx4wWAAw9bAJ7DPZgk0VCepHJJ3abX1HCN', NULL, '3.140.182.19', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamFKUExCakNlTlg3Nld4WWF0SUJKSDJleE1CT2FxOUdRQ2JjZVlKUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758012766),
('tprB0951bdrVm1JJjO31lP085UxdU2ugV2KKTBpe', NULL, '203.33.203.148', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHlMV2hoa2YxS1JWendmcktYNFQ1VzdTbkpWV0lVYkltRlFoNGZwSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly93d3cuc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758059375),
('uWoyaoOydUfhjSDVw5mmSCbx94FmT3NVwOcigSc5', NULL, '206.189.157.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUtIQm9OYUU0NXZxeHdEVEhYSXhNUFJxMjRQVTN6YVNZdmF1enFTdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758055155),
('wVpvP2aaPomeIeJWsHhTGLeiynEJ6qVmsSEIqG2O', NULL, '128.199.182.55', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3NOMWZ0OXA2ajRlbEl6bks3cXVyZGFPdkhlVWxUTXlIeTlQMHZBMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vbWFpbC5zd3ljYnVkaWx1aHVyLmNvbS8/cmVzdF9yb3V0ZT0lMkZ3cCUyRnYyJTJGdXNlcnMlMkYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758028650),
('xIqjiQTfpIT9zlkQV7BI1c2VaNAJeARQFrx8EsWn', NULL, '173.252.167.70', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidThCb24xSmVQTWxhWVB3NjBocGpPVXQwT3dwRU5IelZhUkptWW9PdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758045069),
('xTmnu4XUTB1sdHxysDgqgjAqnaFVaFmQRYD8ivLv', NULL, '43.153.62.161', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1lQbVFoWnM4QzJUZ0hqMEM2NUpuSUl2aTBMWjAzS01SVWlyVUVhaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly93d3cuc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758015145),
('YmNgGfDwVRyHg2PfwmIIX8aPt5cKkUHEv9s5jmIf', NULL, '128.199.182.55', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibE5lTDAxZE9GRTJaNG1VU1Y5ZlhnUGp1MHpHczgxd3BoeGJyNDF4bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbWFpbC5zd3ljYnVkaWx1aHVyLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758028648),
('yzEMeANLlvia2WHWIOp5HnU7whkFsA4U8KMwK8YA', NULL, '182.3.51.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienRjdXdDUGVQcG9lYnl4MmRKbFJZZ2ZoeVVZb1FOS2x5c3RRNk9JOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vc3d5Y2J1ZGlsdWh1ci5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758003505);

-- --------------------------------------------------------

--
-- Table structure for table `status_template`
--

CREATE TABLE `status_template` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deskripsi_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_template`
--

INSERT INTO `status_template` (`id`, `status`, `deskripsi_status`) VALUES
(2, 'Diterima', 'Laporan Anda telah diterima dan sedang menunggu penugasan petugas'),
(3, 'Sedang diverifikasi', 'Laporan sedang diverifikasi oleh tim untuk memastikan kelengkapan data'),
(4, 'Dalam penanganan', 'Laporan Anda sedang dalam proses penanganan oleh petugas terkait'),
(5, 'Selesai', 'Laporan Anda telah selesai diproses. Terima kasih atas partisipasi Anda'),
(6, 'Ditutup', 'Laporan telah ditutup. Jika ada pertanyaan lebih lanjut, silakan hubungi kami'),
(7, 'Dibatalkan', 'Laporan telah dibatalkan atas permintaan pengirim'),
(8, 'Diteruskan ke departemen', 'Laporan Anda telah diteruskan ke departemen terkait untuk tindakan lebih lanjut');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(3) DEFAULT NULL,
  `updated_by` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id`, `nama`, `alamat`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Universitas Budi Luhur', NULL, NULL, NULL, NULL, NULL),
(2, 'Universitas Trisakti', NULL, NULL, NULL, NULL, NULL),
(3, 'Universitas Mercubuana', 'jalan meruya', NULL, '2025-02-11 02:54:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `universitas_id` int(3) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `universitas_id`, `last_login`, `last_ip`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@swycbudiluhur.com', NULL, '$2y$12$hdwXEs4JwJbSYVRz51AMKewPkLmRnol8eXUkuSVTHNgRKCxqfbUDa', NULL, 'superadmin', NULL, '2025-09-17 03:14:40', '101.255.11.228', NULL, '2025-09-16 20:14:40'),
(2, 'Universitas Budi Luhur', 'budiluhur@gmail.com', NULL, '$2y$12$cQqwqAun.Pe3wjDr6e8ObeACSZJ/x76s1J5vRzdGCnbMqZwunEKlq', NULL, 'pt', 1, '2025-02-10 03:09:51', '127.0.0.1', NULL, '2025-02-09 20:09:51'),
(7, 'Admin Trisakti', 'trisakti@admin.com', NULL, '$2y$12$Jp1fFBLZa5PCjm6WJMs7oe3/C9J9MQF4SPfd/cWiYG4EsWbnerxra', NULL, 'pt', 2, '2025-02-11 04:14:38', '127.0.0.1', '2025-02-10 21:14:10', '2025-02-10 21:14:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dokumen_identitas`
--
ALTER TABLE `dokumen_identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kekerasan`
--
ALTER TABLE `kekerasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_laporan` (`kode_laporan`);

--
-- Indexes for table `laporan_log`
--
ALTER TABLE `laporan_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kode_laporan` (`kode_laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `status_template`
--
ALTER TABLE `status_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_identitas`
--
ALTER TABLE `dokumen_identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kekerasan`
--
ALTER TABLE `kekerasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `laporan_log`
--
ALTER TABLE `laporan_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_template`
--
ALTER TABLE `status_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_log`
--
ALTER TABLE `laporan_log`
  ADD CONSTRAINT `fk_kode_laporan` FOREIGN KEY (`kode_laporan`) REFERENCES `laporan` (`kode_laporan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
