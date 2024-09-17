-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 11:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_ppkd`
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
-- Table structure for table `gelombangs`
--

CREATE TABLE `gelombangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) NOT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelombangs`
--

INSERT INTO `gelombangs` (`id`, `nama_gelombang`, `aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Angkatan I', 0, '2024-09-17 04:40:03', '2024-09-17 07:21:29', NULL),
(2, 'Angkatan II', 0, '2024-09-17 04:40:06', '2024-09-17 07:21:29', NULL),
(3, 'Angkatan III', 1, '2024-09-17 04:40:10', '2024-09-17 07:21:29', NULL);

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
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama_jurusan`, `aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Operator Komputer', 0, NULL, NULL, NULL),
(2, 'Bahasa Inggris', 0, NULL, NULL, NULL),
(3, 'Desain Grafis', 0, NULL, NULL, NULL),
(4, 'Tata Boga', 0, NULL, NULL, NULL),
(5, 'Tata Busana', 0, NULL, NULL, NULL),
(6, 'Tata Graha', 0, NULL, NULL, NULL),
(7, 'Teknik Pendingin', 0, NULL, NULL, NULL),
(8, 'Teknik Komputer', 0, NULL, NULL, NULL),
(9, 'Otomotif Sepeda Motor', 0, NULL, NULL, NULL),
(10, 'Jaringan Komputer', 0, NULL, NULL, NULL),
(11, 'Barista', 0, NULL, NULL, NULL),
(12, 'Bahasa Korea', 0, NULL, NULL, NULL),
(13, 'Makeup Artist', 0, NULL, NULL, NULL),
(14, 'Video Editor', 0, NULL, NULL, NULL),
(15, 'Content Creator', 0, NULL, NULL, NULL),
(16, 'Web Programming', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', '2024-09-17 04:34:18', '2024-09-17 04:34:18', NULL),
(2, 'Admin Pelatihan', '2024-09-17 04:34:23', '2024-09-17 04:34:23', NULL),
(3, 'PIC Jurusan', '2024-09-17 04:34:28', '2024-09-17 04:34:28', NULL),
(4, 'Instruktur', '2024-09-17 05:30:45', '2024-09-17 05:30:45', NULL);

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
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_11_092844_create_levels_table', 1),
(5, '2024_09_11_093651_create_personal_access_tokens_table', 1),
(6, '2024_09_11_094327_create_jurusans_table', 1),
(7, '2024_09_11_143245_create_peserta_pelatihans_table', 1),
(8, '2024_09_11_153947_add_id_level_to_users_table', 1),
(9, '2024_09_12_101547_create_gelombangs_table', 1),
(10, '2024_09_13_075610_add_deleted_at_to_gelombangs_table', 1),
(11, '2024_09_13_091637_add_deleted_at_to_users_table', 1),
(12, '2024_09_13_092619_add_deleted_at_to_levels_table', 1),
(13, '2024_09_13_092837_add_deleted_at_to_peserta_pelatihans_table', 1),
(14, '2024_09_13_092916_add_deleted_at_to_jurusans_table', 1),
(15, '2024_09_16_122921_create_user_jurusan_table', 1),
(16, '2024_09_17_062827_create_add_foreign_to_peserta_pelatihans_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pelatihans`
--

CREATE TABLE `peserta_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_gelombang` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` char(16) NOT NULL,
  `kartu_keluarga` char(16) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aktivitas_saat_ini` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_pelatihans`
--

INSERT INTO `peserta_pelatihans` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 2, 'Officia ratione veli', '81', '96', 'Laki-Laki', 'Incidunt proident', '1984-07-15', 'Exercitationem sed e', 'Accusamus deleniti n', '78', 'lyjulifi@mailinator.com', 'Saepe blanditiis vol', 1, '2024-09-17 05:07:53', '2024-09-17 05:55:17', NULL),
(2, 9, 1, 'Omnis et quo dolor e', '53', '99', 'Perempuan', 'Quo rerum proident', '1997-02-14', 'Perferendis voluptat', 'Rerum eius assumenda', '96', 'fatepyf@mailinator.com', 'Duis dicta sed iusto', 2, '2024-09-17 05:08:14', '2024-09-17 05:53:57', NULL),
(3, 5, 1, 'Proident voluptatem', '4', '12', 'Laki-Laki', 'Omnis dolor aut et p', '2009-10-28', 'Exercitationem minus', 'Culpa amet omnis in', '96', 'mifaruzusy@mailinator.com', 'Non veritatis molest', 3, '2024-09-17 05:50:55', '2024-09-17 05:55:11', NULL);

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
('BMdxxfqFEHuu1MOARTt3gcrYQm5snyZE3CXWX7cJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN1ZGWFZaZmZ1WmVqZ3htZlkxd3ozb2tDYkVEeWExZzBXeDlxUGwxTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1726561037),
('LuRZSXfSzFuYYZwQn1BzSn6jlfojICpyse3h8spf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU24wRkhwbHM0UkNZaGZ3YmlVQ1BOcXVBb3VUNlUzNTN4RjZFTmZYSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wZXNlcnRhLXBlbGF0aWhhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1726566485);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Mahadewi', 'mahadewi@gmail.com', '$2y$12$gCKwx2UtVQM95V8ZY2Pv0.MQ0fTtCrT/a1Zo9t0KC89.g.LsNX3Cu', 'As3C3cCtupi8XUUvjmoYNQNj014hVNupfIWJLJLXe5WUgFwmnZmWDouTQmUd', '2024-09-17 04:30:35', '2024-09-17 04:30:35', NULL),
(2, 3, 'lea', 'lea@gmail.com', '$2y$12$i3HUq60Uu8jQWaU77Tv39eiydxm6UiCohazALBFH3hBFs5X/SgrdG', NULL, '2024-09-17 04:34:47', '2024-09-17 04:34:47', NULL),
(3, 3, 'lele', 'lele@gmail.com', '$2y$12$oEoTyJt3yPueHWa.MGnCRO83FdGuFvek/Cjov.HAK5.Ltk4K1s5o6', NULL, '2024-09-17 04:42:46', '2024-09-17 04:42:46', NULL),
(4, 4, 'Hi Leaa', 'pimpinan@gmail.com', '$2y$12$JZD3bsyZNb9MdZNkalwvteUDvK4bmBHiP6wGANBFfJ2Gl/xN0fs.y', NULL, '2024-09-17 05:58:32', '2024-09-17 05:58:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_jurusan`
--

CREATE TABLE `user_jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_jurusan`
--

INSERT INTO `user_jurusan` (`id`, `id_jurusan`, `id_level`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 16, 3, 2, '2024-09-17 04:41:18', '2024-09-17 04:41:18', NULL),
(3, 15, 3, 3, '2024-09-17 05:55:44', '2024-09-17 05:55:44', NULL),
(4, 2, 3, 2, '2024-09-17 06:11:37', '2024-09-17 06:11:37', NULL);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gelombangs`
--
ALTER TABLE `gelombangs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `peserta_pelatihans`
--
ALTER TABLE `peserta_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peserta_pelatihans_email_unique` (`email`),
  ADD KEY `peserta_pelatihans_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `peserta_pelatihans_id_gelombang_foreign` (`id_gelombang`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_jurusan_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `user_jurusan_id_level_foreign` (`id_level`),
  ADD KEY `user_jurusan_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gelombangs`
--
ALTER TABLE `gelombangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_pelatihans`
--
ALTER TABLE `peserta_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta_pelatihans`
--
ALTER TABLE `peserta_pelatihans`
  ADD CONSTRAINT `peserta_pelatihans_id_gelombang_foreign` FOREIGN KEY (`id_gelombang`) REFERENCES `gelombangs` (`id`),
  ADD CONSTRAINT `peserta_pelatihans_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusans` (`id`);

--
-- Constraints for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD CONSTRAINT `user_jurusan_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusans` (`id`),
  ADD CONSTRAINT `user_jurusan_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `user_jurusan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
