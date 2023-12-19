-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 02:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispakbayi`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'dafa@da.fa', NULL, '2023-12-13 11:10:12', 0),
(2, '::1', 'dafahan', NULL, '2023-12-13 11:10:22', 0),
(3, '::1', 'dafa@da.fa', 1, '2023-12-13 11:10:48', 0),
(4, '::1', 'dafa@da.fa', 1, '2023-12-13 11:11:22', 1),
(5, '::1', 'admin', NULL, '2023-12-16 09:15:33', 0),
(6, '::1', 'admin', NULL, '2023-12-16 09:15:39', 0),
(7, '::1', 'Dafahan', NULL, '2023-12-16 09:16:51', 0),
(8, '::1', 'Dafahan', NULL, '2023-12-16 09:16:58', 0),
(9, '::1', 'dafa@da.fa', NULL, '2023-12-16 09:17:12', 0),
(10, '::1', 'Dafahan', NULL, '2023-12-16 09:17:37', 0),
(11, '::1', 'Dafahan', NULL, '2023-12-16 09:17:47', 0),
(12, '::1', 'admin', NULL, '2023-12-16 09:18:34', 0),
(13, '::1', 'admin', NULL, '2023-12-16 09:19:05', 0),
(14, '::1', 'admin@ad.min', 2, '2023-12-16 10:35:32', 1),
(15, '::1', '1k', NULL, '2023-12-16 10:46:21', 0),
(16, '::1', 'admin@ad.min', 2, '2023-12-16 10:52:22', 1),
(17, '::1', 'admin@ad.min', 3, '2023-12-16 11:08:49', 1),
(18, '::1', 'admin', NULL, '2023-12-16 11:29:40', 0),
(19, '::1', 'admin@ad.min', 6, '2023-12-16 11:29:45', 1),
(20, '::1', 'admin', NULL, '2023-12-19 02:54:57', 0),
(21, '::1', 'admin', NULL, '2023-12-19 02:55:04', 0),
(22, '::1', 'admin', NULL, '2023-12-19 02:55:10', 0),
(23, '::1', 'admin', NULL, '2023-12-19 02:55:14', 0),
(24, '::1', 'admin@ad.min', 6, '2023-12-19 02:55:19', 1),
(25, '::1', 'admin', NULL, '2023-12-19 04:55:20', 0),
(26, '::1', 'admin', NULL, '2023-12-19 04:55:29', 0),
(27, '::1', 'admin', NULL, '2023-12-19 04:55:38', 0),
(28, '::1', 'admin', NULL, '2023-12-19 04:55:51', 0),
(29, '::1', 'admin@ad.min', 6, '2023-12-19 04:56:05', 1),
(30, '::1', 'admin@ad.min', 6, '2023-12-19 05:28:09', 1),
(31, '::1', 'user@us.er', 8, '2023-12-19 05:32:26', 1),
(32, '::1', 'user@us.er', 8, '2023-12-19 05:32:55', 1),
(33, '::1', 'fikri@fik.ri', 9, '2023-12-19 05:35:55', 1),
(34, '::1', 'fikri@fik.ri', 9, '2023-12-19 05:37:47', 1),
(35, '::1', 'admin', NULL, '2023-12-19 13:43:32', 0),
(36, '::1', 'admin@ad.min', 6, '2023-12-19 13:43:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `tanggal` date NOT NULL,
  `id_penyakit` int NOT NULL,
  `gejala` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `id_user`, `tanggal`, `id_penyakit`, `gejala`) VALUES
(1, 7, '2023-12-30', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`) VALUES
(1, 'Mual dan muntah terus menerus'),
(2, 'Nyeri perut bagian atas'),
(3, 'Berat badan turun'),
(4, 'Lidah mengering dan kotor'),
(5, 'Kenaikan suhu badan'),
(6, 'Gangguan penglihatan'),
(7, 'Dehidrasi'),
(8, 'Kesadaran menurun'),
(9, 'Sesak nafas'),
(10, 'Mual dan muntah'),
(11, 'Sakit kepala'),
(12, 'Nyeri pada tulang panggul'),
(13, 'Flek atau pendarahan berwarna coklat dan bergelembung seperti busa'),
(14, 'Keluar cairan berbentuk gelembung mirip buah anggur'),
(15, 'Tidak ada tanda-tandanya janin'),
(16, 'Gelisah'),
(17, 'Rahim yang tampak lebih besar dari usia kandungan'),
(18, 'Pendarahan tanpa nyeri'),
(19, 'Pendarahan berulang-ulang'),
(20, 'Pendarahan keluar banyak'),
(21, 'Pendarahan di trimester akhir'),
(22, 'Pendarahan yang disertai nyeri'),
(23, 'Kontraksi berlangsung cepat'),
(24, 'Darah berwarna merah kehitaman'),
(25, 'Kurang bergeraknya bayi yang berada dalam kandungan'),
(26, 'Rahim terasa sakit'),
(27, 'Nyeri punggung'),
(28, 'Sakit dan rasa terbakar saat berkemih'),
(29, 'Sering berkemih, tapi air seni yang keluar hanya sedikit'),
(30, 'Cairan urine keruh'),
(31, 'Sakit perut bagian bawah'),
(32, 'Demam'),
(33, 'Nyeri pada bagian kandungan kemih'),
(34, 'Kulit, bibir dan wajah terlihat pucat'),
(35, 'Mudah lelah dan lesu'),
(36, 'Detak jantung tidak teratur'),
(37, 'Rambut rontok'),
(38, 'Tantrum');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1702465659, 1),
(2, '2017-11-20-223112', 'App\\Database\\Migrations\\CreateAuthTables', 'default', 'App', 1702725321, 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode` int NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode`, `nama`) VALUES
(1, 'Hiperemesis Gravidarum'),
(2, 'Molahidatidosa (Hamil Anggur)'),
(3, 'Plasenta Previa'),
(4, 'Solusio Plasenta'),
(5, 'Infeksi Saluran Kemih'),
(6, 'Anemia');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int NOT NULL,
  `rule` varchar(50) NOT NULL,
  `penyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `rule`, `penyakit`) VALUES
(1, '1,2,3,4,5,6,7,8', '1'),
(2, '10,12,13,14,15,16,17', '2'),
(3, '18,19,20,21', '3'),
(4, '22,23,24,25,26,27', '4'),
(5, '28,29,30,31,32,33', '5'),
(6, '9,11,34,35,36,373', '6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `umur` int NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `umur`, `alamat`) VALUES
(6, 'admin@ad.min', 'admin', '$2y$10$xxJ0mqmWDge2vA/D1EdOmOMvF1GIiyt5SF6U2fmhJFCBy4f/shWWS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-16 11:29:07', '2023-12-16 11:29:07', NULL, 1, 'admin'),
(7, 'pasien@user.com', 'pasien', '$2y$10$2Sl7EhYw8cfCBCCFQi2UB.EJhz91u2Nhlm0GMxPiF4Ugj7VDuXlVG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-16 11:43:41', '2023-12-16 12:11:05', '2023-12-16 12:11:05', 22, 'Metro'),
(8, 'user@us.er', 'user', '$2y$10$4c6T.MN8m8MgElD19ftXPuYnuS7JeB7xJ/CQPdGpLXH5myvoQSGvm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-19 05:31:23', '2023-12-19 05:31:23', NULL, 1, 'JL.Bangka'),
(9, 'fikri@fik.ri', 'fikri', '$2y$10$1yEF0kM6Likv54yPOSCTcuOBoNBHDj1rPbDMvIS7hcIfv4WDh3mH6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-19 05:34:54', '2023-12-19 05:34:54', NULL, 20, 'Natar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
