-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 03:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rusunawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(7, 'Air PDAM', '2021-05-30 23:01:30', '2021-06-25 14:54:06'),
(11, 'Keamanan 24 Jam', '2021-05-30 23:03:05', '2021-05-30 23:03:05'),
(13, 'Dekat Sarana Ibadah', '2021-05-30 23:03:41', '2021-05-30 23:03:41'),
(14, 'Dekat Sarana Pendidikan', '2021-05-30 23:04:05', '2021-05-30 23:04:05'),
(15, 'Dekat Kantor Pemerintahan', '2021-05-30 23:04:19', '2021-05-30 23:04:19'),
(16, 'Dekat Kantor Polsek', '2021-05-30 23:04:30', '2021-05-30 23:04:56'),
(17, 'Dekat Bandara SAMS', '2021-05-30 23:04:38', '2021-05-30 23:05:09'),
(19, 'Dekat Pasar Sepinggan', '2021-05-30 23:06:00', '2021-05-30 23:06:00'),
(24, 'Dekat Tempat Wisata', '2021-06-01 20:05:13', '2021-06-01 20:05:13'),
(26, 'Dekat Taman', '2021-06-02 15:54:47', '2021-06-02 15:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_gedung`
--

CREATE TABLE `fasilitas_gedung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_gedung`
--

INSERT INTO `fasilitas_gedung` (`id`, `gedung_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(219, 108, 7, '2021-06-22 05:26:10', '2021-06-22 05:26:10'),
(220, 104, 7, '2021-06-22 05:53:43', '2021-06-22 05:53:43'),
(221, 104, 11, '2021-06-22 05:53:43', '2021-06-22 05:53:43'),
(222, 104, 13, '2021-06-22 05:53:43', '2021-06-22 05:53:43'),
(223, 104, 14, '2021-06-22 05:53:43', '2021-06-22 05:53:43'),
(224, 96, 7, '2021-06-22 05:54:49', '2021-06-22 05:54:49'),
(225, 96, 11, '2021-06-22 05:54:49', '2021-06-22 05:54:49'),
(226, 96, 13, '2021-06-22 05:54:49', '2021-06-22 05:54:49'),
(227, 96, 24, '2021-06-22 05:54:49', '2021-06-22 05:54:49'),
(228, 97, 7, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(229, 97, 11, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(230, 97, 13, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(231, 97, 14, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(232, 97, 15, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(233, 97, 16, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(234, 97, 17, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(235, 97, 19, '2021-06-22 05:56:02', '2021-06-22 05:56:02'),
(236, 98, 7, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(237, 98, 11, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(238, 98, 13, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(239, 98, 14, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(240, 98, 15, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(241, 98, 16, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(242, 98, 17, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(243, 98, 19, '2021-06-22 05:56:26', '2021-06-22 05:56:26'),
(244, 99, 7, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(245, 99, 11, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(246, 99, 13, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(247, 99, 14, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(248, 99, 15, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(249, 99, 16, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(250, 99, 17, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(251, 99, 19, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(252, 99, 26, '2021-06-22 05:57:03', '2021-06-22 05:57:03'),
(253, 100, 7, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(254, 100, 11, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(255, 100, 13, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(256, 100, 14, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(257, 100, 15, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(258, 100, 16, '2021-06-22 05:57:36', '2021-06-22 05:57:36'),
(259, 100, 17, '2021-06-22 05:57:37', '2021-06-22 05:57:37'),
(260, 100, 19, '2021-06-22 05:57:37', '2021-06-22 05:57:37'),
(261, 100, 26, '2021-06-22 05:57:37', '2021-06-22 05:57:37'),
(262, 101, 7, '2021-06-22 05:58:10', '2021-06-22 05:58:10'),
(263, 101, 11, '2021-06-22 05:58:10', '2021-06-22 05:58:10'),
(264, 101, 13, '2021-06-22 05:58:10', '2021-06-22 05:58:10'),
(265, 101, 14, '2021-06-22 05:58:10', '2021-06-22 05:58:10'),
(266, 102, 7, '2021-06-22 05:58:37', '2021-06-22 05:58:37'),
(267, 102, 11, '2021-06-22 05:58:37', '2021-06-22 05:58:37'),
(268, 102, 13, '2021-06-22 05:58:37', '2021-06-22 05:58:37'),
(269, 102, 14, '2021-06-22 05:58:37', '2021-06-22 05:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gedung_id`, `nama`, `created_at`, `updated_at`) VALUES
(211, 104, 'public/foto-gedung/v30sMjsXEWkE4wFIYQpja6eSlH2I4yQ0s89cZBgl.jpg', '2021-06-25 13:27:31', '2021-06-25 13:27:31'),
(212, 104, 'public/foto-gedung/dmpDS1fNlkM9CWkxokWaDRJ55dUZEMZzhSQs9W8S.jpg', '2021-06-25 13:27:32', '2021-06-25 13:27:32'),
(213, 104, 'public/foto-gedung/gEHYNGXCEKXoGaADP2vVMgIuTEv6GIsk1cSantLl.jpg', '2021-06-25 13:27:34', '2021-06-25 13:27:34'),
(214, 104, 'public/foto-gedung/9pFRUdFqLi3kdn8SzWUZFvLRBx4UMXiZL5qjwoj4.jpg', '2021-06-25 13:27:35', '2021-06-25 13:27:35'),
(215, 96, 'public/foto-gedung/g2rtbfRNDjALHhtvh7VyVr9QjT1ZdrXIDo6AhroV.jpg', '2021-06-25 13:28:06', '2021-06-25 13:28:06'),
(216, 97, 'public/foto-gedung/xKlVfhc2ZPt4PhgZmlRpbiOp7RgJJjARqw2SrUD3.jpg', '2021-06-25 13:29:10', '2021-06-25 13:29:10'),
(217, 97, 'public/foto-gedung/P7UQcx1Mx9WxMatCM9XWUWMGZ0F53o5m3nLLpDM0.jpg', '2021-06-25 13:29:12', '2021-06-25 13:29:12'),
(218, 97, 'public/foto-gedung/YAP2mIQlvd44ALFIqGFDNSafLR52bIPw2Tp7URRB.jpg', '2021-06-25 13:29:13', '2021-06-25 13:29:13'),
(219, 98, 'public/foto-gedung/Kip1jA6b5uFI9gu4yWK87ukwmUiLYlolpptVXSEs.jpg', '2021-06-25 13:29:37', '2021-06-25 13:29:37'),
(220, 98, 'public/foto-gedung/mezzeyLGiTdjvCKVd8Z0d3i8z1HJULtVAfmWhF42.jpg', '2021-06-25 13:29:39', '2021-06-25 13:29:39'),
(221, 99, 'public/foto-gedung/40iKEaEyC9BukMepbIY7lvUbYTvBankDsqA7Nkbz.jpg', '2021-06-25 13:30:34', '2021-06-25 13:30:34'),
(222, 99, 'public/foto-gedung/fK6lHG6Pvf46r0oLh3Dxi7bHqh4xcuvwHy21uRwQ.jpg', '2021-06-25 13:30:36', '2021-06-25 13:30:36'),
(223, 99, 'public/foto-gedung/kXBZTfKD8p4WAS6CZ9jkLLabZU5DrQASlEsOjfuU.jpg', '2021-06-25 13:30:37', '2021-06-25 13:30:37'),
(224, 99, 'public/foto-gedung/2l3zJIT8qZ3bcKOd5lH7EsirwM6wKt3YHdjPWWfm.jpg', '2021-06-25 13:30:39', '2021-06-25 13:30:39'),
(225, 100, 'public/foto-gedung/S6qlv82G88t7DuumuZja6hsO58yNXzrkmnEaANHn.jpg', '2021-06-25 13:31:08', '2021-06-25 13:31:08'),
(226, 100, 'public/foto-gedung/mfS1FoE3b6cadxLDpV5lc4SI6tEPukUr02gzw5Km.jpg', '2021-06-25 13:31:10', '2021-06-25 13:31:10'),
(227, 101, 'public/foto-gedung/pLNFE4sfsghzWQwZJC3PC9hkLOFQetxLpO3EISA0.jpg', '2021-06-25 13:31:37', '2021-06-25 13:31:37'),
(228, 101, 'public/foto-gedung/uvSyuuqxPwiiaTKG1QfbQaRAlqCIbJ2hQ2Ueto75.jpg', '2021-06-25 13:31:38', '2021-06-25 13:31:38'),
(229, 101, 'public/foto-gedung/RYdWsxOy5MOh2D5JfwT6rdeRgo6zqi2nhGuc4dqM.jpg', '2021-06-25 13:31:40', '2021-06-25 13:31:40'),
(232, 108, 'public/foto-gedung/gp4cj5GvaUiVR7ZDdjUpezf2Y4X3bIqAYJTrmpzJ.jpg', '2021-06-25 14:10:22', '2021-06-25 14:10:22'),
(233, 108, 'public/foto-gedung/0ZadFEn7c0PoNNywoeSBoTgFIXHyekLapAYVFTV5.jpg', '2021-06-25 14:10:22', '2021-06-25 14:10:22'),
(234, 102, 'public/foto-gedung/I0c7ZxjbqJVklM5jWYUYJnIqgpAyYt7Bhfwh0jjD.jpg', '2021-06-25 14:10:40', '2021-06-25 14:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `gedungs`
--

CREATE TABLE `gedungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Balikpapan Kota','Balikpapan Timur','Balikpapan Barat','Balikpapan Selatan','Balikpapan Utara','Balikpapan Tengah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` year(4) NOT NULL,
  `jumlah_lantai` int(11) NOT NULL,
  `id_api` int(11) NOT NULL,
  `link_gmaps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedungs`
--

INSERT INTO `gedungs` (`id`, `nama`, `slug`, `alamat`, `kecamatan`, `tahun_pembuatan`, `jumlah_lantai`, `id_api`, `link_gmaps`, `created_at`, `updated_at`) VALUES
(96, 'Rusunawa Manggar', 'rusunawa-manggar', 'Jl. Persatuan, Manggar Baru, Balikpapan Timur, Kota Balikpapan, Kalimantan Timur 76117', 'Balikpapan Timur', 2011, 4, 5, 'https://goo.gl/maps/1Dxg3xW3wZV1ibir6', '2021-06-02 16:23:01', '2021-06-25 01:42:26'),
(97, 'Rusunawa Perusda 1', 'rusunawa-perusda-1', 'Jl. Safir VI Sepinggan, Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76116', 'Balikpapan Selatan', 2011, 5, 8, 'https://goo.gl/maps/2MN8ZvnFcEFzJcbY7', '2021-06-02 16:24:13', '2021-06-25 01:43:05'),
(98, 'Rusunawa Perusda 2', 'rusunawa-perusda-2', 'Jl. Safir VI Sepinggan, Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76116', 'Balikpapan Selatan', 2011, 5, 9, 'https://goo.gl/maps/2MN8ZvnFcEFzJcbY7', '2021-06-02 16:24:53', '2021-06-25 01:43:16'),
(99, 'Rusunawa Sepinggan 1', 'rusunawa-sepinggan-1', 'Jl. Sepinggan Baru RT. 033, Kel. Sepinggan, Kec. Balikpapan Selatan, Kota Balikpapan', 'Balikpapan Selatan', 2009, 4, 2, 'https://goo.gl/maps/oSTVSBYExSFiscf67', '2021-06-02 16:26:40', '2021-06-25 15:08:47'),
(100, 'Rusunawa Sepinggan 2', 'rusunawa-sepinggan-2', 'Jl. Taman Sepinggan, Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76116', 'Balikpapan Selatan', 2010, 3, 3, 'https://goo.gl/maps/oSTVSBYExSFiscf67', '2021-06-02 16:27:36', '2021-06-25 01:41:58'),
(101, 'Rusunawa Siaga', 'rusunawa-siaga', 'Damai, Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76114', 'Balikpapan Kota', 2010, 5, 4, 'https://goo.gl/maps/Na3xa5bXEeKpZ7hy9', '2021-06-02 16:28:59', '2021-06-25 01:42:17'),
(102, 'Rusunawa Somber', 'rusunawa-somber', 'Komp. Industri Tahu Tempe Somber, Margo Mulyo, Balikpapan Barat, Kota Balikpapan, Kalimantan Timur 76125', 'Balikpapan Barat', 2010, 5, 7, 'https://goo.gl/maps/3bK9DKyPEGFhsEmQ8', '2021-06-02 16:30:49', '2021-06-25 01:42:52'),
(104, 'Rusunawa Kilometer 7', 'rusunawa-kilometer-7', 'Jl. Soekarno Hatta Km. 7, Graha Indah, Balikpapan Utara, Kota Balikpapan, 76136', 'Balikpapan Utara', 2011, 5, 6, 'https://goo.gl/maps/uQ7Ppk1uGCUngSBb7', '2021-06-02 18:31:18', '2021-06-25 01:42:43'),
(108, 'Rusunawa Damai Beriman', 'rusunawa-damai-beriman', 'Jl. Ruhui Rahayu (Belakang Kantor Dinas Pekerjaan Umum), Balikpapan Kota, Kota Balikpapan, Kalimantan Timur', 'Balikpapan Kota', 2009, 2, 1, 'https://goo.gl/maps/Fo3wzi1YGme6jUSZA', '2021-06-17 19:53:07', '2021-06-25 14:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `lantai` int(11) NOT NULL,
  `detail_keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_keluhan` enum('Baru','Diproses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_05_24_011924_create_settings_table', 1),
(5, '2021_05_27_051200_create_fasilitas_table', 1),
(6, '2021_05_28_025135_create_gedungs_table', 1),
(7, '2021_05_28_031631_create_fasilitas_gedung_table', 1),
(8, '2021_05_30_084446_create_galleries_table', 1),
(9, '2021_06_04_022943_create_persyaratans_table', 1),
(10, '2021_06_06_021519_create_keluhans_table', 1),
(11, '2021_06_15_023503_create_pendaftarans_table', 1);

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
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` enum('Menikah','Belum Menikah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tempat_tinggal` enum('Menyewa','Mengontrak','Menumpang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `lantai` int(11) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tempat_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tempat_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_tetap` int(11) NOT NULL,
  `penghasilan_tambahan` int(11) DEFAULT NULL,
  `no_ktp_pasangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pasangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_pasangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_pasangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pengikut` int(11) DEFAULT NULL,
  `pengikut_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hubungan_1` enum('Suami/Istri','Anak','Lainnya') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengikut_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hubungan_2` enum('Anak','Lainnya') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengikut_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hubungan_3` enum('Anak','Lainnya') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_surat_nikah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pendaftaran` enum('Baru','Diproses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratans`
--

CREATE TABLE `persyaratans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persyaratans`
--

INSERT INTO `persyaratans` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Persyaratan', '<h3>Syarat Mendaftar Rusunawa</h3>\r\n<ol>\r\n<li>&nbsp;Penduduk Kota Balikpapan yang dibuktikan dengan Kartu Tanda Penduduk (KTP) dan sudah berdomisili minimal 2 (dua) tahun di Kota Balikpapan.</li>\r\n<li>Kelompok Masyarakat Berpenghasilan Rendah (MBR) berdasarkan ketentuan yang berlaku.</li>\r\n<li>Berstatus telah menikah dengan ketentuan hanya mempunyai anak 2 (dua) orang yang berumur maksimal 9 (sembilan) tahun atau berstatus belum menikah khusus untuk penghuni Rusunawa Sepinggan 2.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h3>Cara Mendaftar Rusunawa</h3>\r\n<ol>\r\n<li>Isi formulir pada halaman <a title=\"pendaftaran\" href=\"../../../pendaftaran\" target=\"_blank\" rel=\"noopener\"><strong>Pendaftaran Rusunawa</strong></a></li>\r\n<li>Download <strong>berkas pendaftaran</strong> (berkas akan muncul setelah mengisi formulir).</li>\r\n<li>Print berkas pendaftaran pada kertas F4/Legal.</li>\r\n<li>Lengkapi seluruh tanda tangan dan materai pada berkas pendaftaran.</li>\r\n<li>Bawa <strong>berkas pendaftaran</strong> beserta <strong>berkas pendukung</strong> menggunakan stopmap hijau ke kantor UPTD Rusunawa</li>\r\n<li>Adapun <strong>berkas pendukung</strong> terdiri dari:\r\n<ol>\r\n<li>Fotokopi KTP</li>\r\n<li>Fotokopi KK</li>\r\n<li>Fotokopi Surat Nikah (jika berstatus menikah)</li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h3>Biaya Rusunawa</h3>\r\n<ol>\r\n<li>Biaya sewa dapat dilihat pada <a title=\"rusunawa\" href=\"../../../rusunawa\" target=\"_blank\" rel=\"noopener\"><strong>Halaman Rusunawa</strong></a>.</li>\r\n<li>Biaya sewa belum termasuk biaya pemakaian listrik dan air.</li>\r\n<li>Pembayaran uang sewa sebelum tanggal 10 (sepuluh) di tiap bulannya.</li>\r\n<li>Pembayaran uang jaminan sewa ke rekening UPT Rusunawa dengan nomor rekening 0031452431 bank BPD Kaltim.</li>\r\n<li>Uang jaminan sewa sebesar 3 bulan harga sewa sesuai unit hunian.</li>\r\n<li>Uang jaminan sewa dibayar sekali dimuka, dan akan dikembalikan sesuai ketentuan setelah masa sewa selesai dan tidak diperpanjang.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h3>Tata Tertib Rusunawa</h3>\r\n<ol>\r\n<li>Penghuni adalah penyewa yang ditetapkan berdasarkan perjanjian sewa.</li>\r\n<li>Tempat penghunian hanya diperkenankan dihuni maksimum 4 orang atau 2 orang dewasa dan 2 anak dibawah umur 10 tahun.</li>\r\n<li>Melaporkan perubahan anggota penghuni (pindah/ masuk) dalam waktu maksimum 2 x 24 jam kepada pengelola.</li>\r\n<li>Menciptakan keamanan dan estetika (kebersihan dan kerapihan) tempat dan lingkungan hunian.</li>\r\n<li>Apabila meninggalkan tempat, listrik sebaiknya dipadamkan, pastikan kran air dan gas tertutup.</li>\r\n<li>Menjaga suara radio dan televisi jangan sampai mengganggu tetangga.</li>\r\n<li>Bagi penghuni Rusunawa yang meninggalkan/mengosongkan tempat hunian untuk sementara harus melaporkan kepada Ketua Lingkungan dan Badan Pengelola.</li>\r\n<li>Menjalin hubungan kekeluargaan antara sesama penghuni dan menjaga kebersihan lingkungan Rusunawa.</li>\r\n<li>Pengerjaan peralatan, perbaikan/renovasi yang bersifat umum, harus seijin tetangga/penghuni lain dan Badan Pengelola.</li>\r\n<li>Saling menjaga dan menginformasikan kepada pengelola, jika mengetahui adanya kegiatan atau transaksi atau memakai dan/atau penyalahgunaan narkotika dan obat &mdash; obat terlarang, yang dilarang oleh peraturan perundang-undangan.</li>\r\n<li>Perjanjian penghunian dibuat jangka waktu satu tahun dan bisa diperpanjang sebanyak-banyaknya tiga kali.</li>\r\n<li>Penghuni/tamu penghuni yang membawa kendaraan menempatkan pada tempat parkir/lokasi yang telah ditetapkan.</li>\r\n<li>Tidak diperbolehkan memanfaatkan ruang terbuka untuk meletakkan dan menumpuk barang atau sejenisnya.</li>\r\n<li>Bersedia mematuhi ketentuan yang ditetapkan oleh pengelola.</li>\r\n<li>Dilarang berbuat onar dan tindakan tercela lainnya.</li>\r\n<li>Penghuni Rusunawa tidak diperkenankan membawa tamu (wanita/pria) ke dalam satuan rusunawa untuk diinapkan, kecuali telah mendapat izin dari pengelola, dengan memperlihatkan surat bukti diri yang bersangkutan.</li>\r\n<li>Penghuni satuan Rusunawa dilarang melakukan perbuatan zina di dalam satuan Rusunawa dan jika diketahui oleh pengelola, maka penghuni bersedia untuk dikeluarkan dari daftar penghuni satuan Rumah Susun Sederhana Sewa setelah memenuhi kewajiban.</li>\r\n<li>Penghuni satuan Rusunawa tidak boleh mengalihkan hak sewa kepada pihak lain, atau menyewakan kembali kepada pihak lain.</li>\r\n<li>Satuan Rusunawa tidak boleh dialih fungsikan menjadi gudang atau tempat penumpukan barang sejenisnya.</li>\r\n</ol>', '2021-06-03 19:11:38', '2021-06-25 14:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'telepon', '(0542) 42150', NULL, '2021-06-01 09:21:16'),
(2, 'nama_kantor', 'UPTD Rusunawa Dinas Perumahan dan Permukiman Kota Balikpapan', '2021-05-30 16:20:56', '2021-06-01 09:22:28'),
(3, 'alamat_kantor', 'Rusunawa Sepinggan 1 Lt. 1 (Jl. Sepinggan Baru RT. 033, Kel. Sepinggan, Kec. Balikpapan Selatan, Kota Balikpapan)', '2021-05-30 16:21:32', '2021-06-25 15:09:06'),
(4, 'jam_kerja_senin_sampai_kamis', '07.30 - 16.00', '2021-05-30 16:21:45', '2021-05-30 16:21:45'),
(5, 'jam_kerja_jumat', '07.30 - 11.30', '2021-05-30 16:21:57', '2021-06-25 14:57:26'),
(6, 'google_maps', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.473895774323!2d116.9051437!3d-1.2502486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38f08f607348a1e!2sRusunawa%20Sepinggan!5e0!3m2!1sen!2sid!4v1622420562621!5m2!1sen!2sid', '2021-05-30 16:22:59', '2021-06-03 22:31:20'),
(7, 'email', 'rusunawa_balikpapan@ymail.com', NULL, '2021-06-25 15:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 2,
  `foto_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `foto_profil`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 1, NULL, NULL, '$2y$10$ZA6rqrv/Q4Zmv/JVSB7IKOT53RQIx7eEXqcVRZqwnt.u4/ABPnBbu', NULL, NULL, NULL),
(11, 'Pengelola', 'pengelola@gmail.com', 2, NULL, NULL, '$2y$10$Muj7UikoieVJJSeUEKJj6ebSNcJfObVAyk3HeTwxVMNFbNz8PeZZS', NULL, '2021-06-25 15:04:24', '2021-06-25 15:04:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_gedung_gedung_id_foreign` (`gedung_id`),
  ADD KEY `fasilitas_gedung_fasilitas_id_foreign` (`fasilitas_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persyaratans`
--
ALTER TABLE `persyaratans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persyaratans`
--
ALTER TABLE `persyaratans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  ADD CONSTRAINT `fasilitas_gedung_fasilitas_id_foreign` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fasilitas_gedung_gedung_id_foreign` FOREIGN KEY (`gedung_id`) REFERENCES `gedungs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
