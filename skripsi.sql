-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 03:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggarans`
--

CREATE TABLE `anggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` double(12,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggarans`
--

INSERT INTO `anggarans` (`id`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 100000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, 200000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, 300000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(4, 400000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(5, 500000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(6, 600000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(7, 700000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(8, 800000.000, '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(9, 900000.000, '2022-09-21 05:18:41', '2022-09-21 05:18:41'),
(10, 1000000.000, '2022-09-21 05:18:41', '2022-09-21 05:18:41');

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
-- Table structure for table `kode_rekenings`
--

CREATE TABLE `kode_rekenings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_rekenings`
--

INSERT INTO `kode_rekenings` (`id`, `kode_rekening`, `created_at`, `updated_at`) VALUES
(1, '4.02.01.2.06.09', '2022-09-21 05:18:41', '2022-09-21 05:18:41'),
(2, '5.1.02.04.01.0001', '2022-09-21 05:18:41', '2022-09-21 05:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aceh-Banda Aceh', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, 'Aceh-Langsa', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, 'Aceh-Lhokseumawe', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(4, 'Aceh-Sabang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(5, 'Aceh-Subulussalam', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(6, 'Bali-Denpasar', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(7, 'Bangka-Belitung Pangkalpinang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(8, 'Banten-Cilegon', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(9, 'Banten-Serang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(10, 'Banten-Tangerang Selatan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(11, 'Banten-Tangerang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(12, 'Bengkulu', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(13, 'Yogyakarta', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(14, 'Gorontalo', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(15, 'Jakarta Barat', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(16, 'Jakarta Pusat', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(17, 'Jakarta Selatan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(18, 'Jakarta Timur', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(19, 'Jakarta Utara', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(20, 'Jambi-Sungai Penuh', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(21, 'Jambi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(22, 'Jawa Barat-Bandung', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(23, 'Jawa Barat-Bekasi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(24, 'Jawa Barat-Bogor', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(25, 'Jawa Barat-Cimahi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(26, 'Jawa Barat-Cirebon', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(27, 'Jawa Barat-Depok', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(28, 'Jawa Barat-Sukabumi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(29, 'Jawa Barat-Tasikmalaya', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(30, 'Jawa Barat-Banjar', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(31, 'Jawa Tengah-Magelang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(32, 'Jawa Tengah-Pekalongan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(33, 'Jawa Tengah-Salatiga', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(34, 'Jawa Tengah-Semarang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(35, 'Jawa Tengah-Surakarta', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(36, 'Jawa Tengah-Tegal', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(37, 'Jawa Timur-Batu', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(38, 'Jawa Timur-Blitar', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(39, 'Jawa Timur-Kediri', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(40, 'Jawa Timur-Madiun', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(41, 'Jawa Timur-Malang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(42, 'Jawa Timur-Mojokerto', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(43, 'Jawa Timur-Pasuruan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(44, 'Jawa Timur-Probolinggo', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(45, 'Jawa Timur-Surabaya', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(46, 'Kalimantan Barat-Pontianak', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(47, 'Kalimantan Barat-Singkawang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(48, 'Kalimantan Selatan-Banjarbaru', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(49, 'Kalimantan Selatan-Banjarmasin', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(50, 'Kalimantan Tengah-Palangka Raya', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(51, 'Kalimantan Timur-Balikpapan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(52, 'Kalimantan Timur-Bontang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(53, 'Kalimantan Timur-Samarinda', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(54, 'Kalimantan Utara-Tarakan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(55, 'Kepulauan Riau-Batam', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(56, 'Kepulauan Riau-Tanjungpinang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(57, 'Bandar Lampung', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(58, 'Lampung-Metro', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(59, 'Maluku Utara-Ternate', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(60, 'Maluku Utara-Tidore Kepulauan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(61, 'Maluku-Ambon', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(62, 'Maluku-Tual', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(63, 'Nusa Tenggara Barat-Bima', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(64, 'Nusa Tenggara Barat-Mataram', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(65, 'Nusa Tenggara Timur-Kupang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(66, 'Papua Barat-Sorong', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(67, 'Papua-Jayapura', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(68, 'Riau-Dumai', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(69, 'Riau-Pekanbaru', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(70, 'Sulawesi Selatan-Makassar', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(71, 'Sulawesi Selatan-Palopo', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(72, 'Sulawesi Selatan-Parepare', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(73, 'Sulawesi Tengah-Palu', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(74, 'Sulawesi Tenggara-Baubau', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(75, 'Sulawesi Tenggara-Kendari', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(76, 'Sulawesi Utara-Bitung', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(77, 'Sulawesi Utara-Kotamobagu', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(78, 'Sulawesi Utara-Manado', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(79, 'Sulawesi Utara-Tomohon', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(80, 'Sumatra Barat-Bukittinggi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(81, 'Sumatra Barat-Padang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(82, 'Sumatra Barat-Padang Panjang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(83, 'Sumatra Barat-Pariaman', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(84, 'Sumatra Barat-Payakumbuh', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(85, 'Sumatra Barat-Sawahlunto', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(86, 'Sumatra Barat-Solok', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(87, 'Sumatra Selatan-Lubuklinggau', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(88, 'Sumatra Selatan-Pagar Alam', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(89, 'Sumatra Selatan-Palembang', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(90, 'Sumatra Selatan-Prabumulih', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(91, 'Sumatra Utara-Binjai', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(92, 'Sumatra Utara-Gunungsitoli', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(93, 'Sumatra Utara-Medan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(94, 'Sumatra Utara-Padangsidimpuan', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(95, 'Sumatra Utara-Pematangsiantar', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(96, 'Sumatra Utara-Sibolga', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(97, 'Sumatra Utara-Tanjungbalai', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(98, 'Sumatra Utara-Tebing Tinggi', '2022-09-21 05:18:40', '2022-09-21 05:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `locations_spt`
--

CREATE TABLE `locations_spt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spt_id` int(11) NOT NULL,
  `locations_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations_spt`
--

INSERT INTO `locations_spt` (`id`, `spt_id`, `locations_id`, `created_at`, `updated_at`) VALUES
(1, 1, 9, NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_16_162756_create_permission_tables', 1),
(6, '2022_09_16_183145_create_spts_table', 1),
(7, '2022_09_16_183153_create_sppds_table', 1),
(8, '2022_09_16_183157_create_nppds_table', 1),
(9, '2022_09_16_183431_create_spt_users_table', 1),
(10, '2022_09_16_183527_create_anggarans_table', 1),
(11, '2022_09_16_183536_create_locations_table', 1),
(12, '2022_09_16_183544_create_transports_table', 1),
(13, '2022_09_16_183553_create_pejabats_table', 1),
(14, '2022_09_16_183610_create_locations_spt_table', 1),
(15, '2022_09_16_183621_create_spt_transports_table', 1),
(16, '2022_09_16_183640_create_kode_rekenings_table', 1),
(17, '2022_09_16_183649_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nppds`
--

CREATE TABLE `nppds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran_id` int(11) NOT NULL,
  `spt_id` int(11) NOT NULL,
  `prihal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nppds`
--

INSERT INTO `nppds` (`id`, `kepada`, `dari`, `anggaran_id`, `spt_id`, `prihal`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Bapak Sekretaris DPRD Kab. Tangerang', 'PPTK Penyelenggara Rapat dan Koordinasi SKPD', 3, 1, 'Permohonan Biaya Perjalanan Dinas', 0, NULL, '2022-09-21 05:21:22', '2022-09-21 05:21:22');

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
-- Table structure for table `pejabats`
--

CREATE TABLE `pejabats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pejabats`
--

INSERT INTO `pejabats` (`id`, `name`, `nip`, `pangkat`, `jabatan`, `golongan`, `created_at`, `updated_at`) VALUES
(1, 'H. Ridwan SH, MBA, MM', '19661289478128', 'Pembina Utama Muda', 'Sekretaris DPRD', 'IV/c', '2022-09-21 05:18:41', '2022-09-21 05:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read role', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, 'create role', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, 'update role', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(4, 'delete role', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(5, 'read sppd', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(6, 'create sppd', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(7, 'update sppd', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(8, 'delete sppd', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(9, 'read report', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(10, 'create report', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(11, 'update report', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(12, 'delete report', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `spt_id` int(11) NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, 'sekwan', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, 'pegawai', 'web', '2022-09-21 05:18:40', '2022-09-21 05:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 2),
(5, 3),
(6, 2),
(7, 2),
(8, 2),
(9, 3),
(10, 3),
(11, 3),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sppds`
--

CREATE TABLE `sppds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tempat_berangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_anggaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sppds`
--

INSERT INTO `sppds` (`id`, `nomor`, `spt_id`, `user_id`, `tempat_berangkat`, `instansi`, `mata_anggaran`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '001/SPPD/PNS/setwan/2022', 1, 1, 'Kantor Sekretariat DPRD Kab. Tangerang', 'Sekretariat DPRD Kab. Tangerang', 'APBD 2022', '-', '2022-09-21 05:21:55', '2022-09-21 05:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `spts`
--

CREATE TABLE `spts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat_id` int(11) NOT NULL,
  `kode_rekenings_id` int(11) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spts`
--

INSERT INTO `spts` (`id`, `nomor`, `tujuan`, `pejabat_id`, `kode_rekenings_id`, `tgl_pergi`, `tgl_pulang`, `created_at`, `updated_at`) VALUES
(1, '001/622.96/um/2891 - setwan/2022', 'Monitoring Program Vaksinasi', 1, 2, '2022-09-22', '2022-09-24', '2022-09-21 05:20:49', '2022-09-21 05:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `spt_transports`
--

CREATE TABLE `spt_transports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spt_id` int(11) NOT NULL,
  `transports_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spt_transports`
--

INSERT INTO `spt_transports` (`id`, `spt_id`, `transports_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spt_users`
--

CREATE TABLE `spt_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spt_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spt_users`
--

INSERT INTO `spt_users` (`id`, `spt_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 1, 5, NULL, NULL),
(4, 1, 6, NULL, NULL),
(10, 1, 7, NULL, NULL),
(11, 1, 8, NULL, NULL),
(12, 1, 9, NULL, NULL),
(13, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kendaraan Dinas', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, 'Kendaraan Pribadi', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, 'Travel', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(4, 'Bus', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(5, 'Kereta Api', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(6, 'Kapal Feri', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(7, 'Pesawat', '2022-09-21 05:18:40', '2022-09-21 05:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `image`, `email`, `jenis_kelamin`, `pangkat`, `jabatan`, `golongan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1855201369', 'Fitriana Pramitasari', NULL, NULL, 'P', 'Pembina Tingkat II', 'TU & Kepegawaian', 'IV/b', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(2, '1855201360', 'Hj. Risma Sugianto', NULL, NULL, 'P', 'Pembina Tingkat I', 'TU & Kepegawaian', 'IV/a', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(3, '1855201361', 'H. Ridwan SH, MBA, MM', NULL, NULL, 'L', 'Pembina Tingkat Muda', 'Sekretaris DPRD', 'IV/c', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(4, '1855201362', 'Drs. Dodi Mulyanto', NULL, NULL, 'L', 'Pembina Tingkat I', 'Kabag Penganggaran & Pengawasan', 'IV/b', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(5, '1855201363', 'Drs. Sugeng Dalu', NULL, NULL, 'L', 'Pembina Tingkat II', 'Kabag Umum', 'IV/b', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(6, '1855201364', 'Maman Abdurrahman', NULL, NULL, 'L', 'Pembina Tingkat II', 'Kabag Persidangan & Per-UU', 'IV/b', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(7, '1855201365', 'Bambang Pamungkas', NULL, NULL, 'L', 'Pembina Tingkat II', 'Kasubag AKD', 'III/d', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(8, '1855201366', 'Lili Pali', NULL, NULL, 'L', 'Pembina Tingkat II', 'Kasubag RT & Perlengkapan', 'IV/c', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(9, '1855201367', 'Jajang Mulyana', NULL, NULL, 'L', 'Pembina Tingkat II', 'Kasubag Akutansi & Pelaporan', 'IV/c', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40'),
(10, '1855201368', 'Rohit Hidayat', NULL, NULL, 'L', 'Pembina Tingkat II', 'Pelaksana', 'IV/c', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NUmIrG10LG', '2022-09-21 05:18:40', '2022-09-21 05:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggarans`
--
ALTER TABLE `anggarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kode_rekenings`
--
ALTER TABLE `kode_rekenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations_spt`
--
ALTER TABLE `locations_spt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nppds`
--
ALTER TABLE `nppds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pejabats`
--
ALTER TABLE `pejabats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sppds`
--
ALTER TABLE `sppds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spts`
--
ALTER TABLE `spts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spt_transports`
--
ALTER TABLE `spt_transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spt_users`
--
ALTER TABLE `spt_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggarans`
--
ALTER TABLE `anggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_rekenings`
--
ALTER TABLE `kode_rekenings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `locations_spt`
--
ALTER TABLE `locations_spt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nppds`
--
ALTER TABLE `nppds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sppds`
--
ALTER TABLE `sppds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spts`
--
ALTER TABLE `spts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spt_transports`
--
ALTER TABLE `spt_transports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spt_users`
--
ALTER TABLE `spt_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
