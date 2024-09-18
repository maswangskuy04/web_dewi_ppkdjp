-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2024 at 01:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dewi_ppkdjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gelombangs`
--

CREATE TABLE `gelombangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelombangs`
--

INSERT INTO `gelombangs` (`id`, `nama_gelombang`, `aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Angkatan I', 0, '2024-09-17 08:23:56', '2024-09-17 08:24:34', NULL),
(2, 'Angkatan II', 0, '2024-09-17 08:24:02', '2024-09-17 08:24:34', NULL),
(3, 'Angkatan III', 1, '2024-09-17 08:24:08', '2024-09-17 08:24:35', NULL),
(4, 'Angkatan IV', 0, '2024-09-17 08:24:16', '2024-09-17 08:24:34', NULL),
(5, 'Angkatan V', 0, '2024-09-17 08:24:23', '2024-09-17 08:24:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` tinyint NOT NULL DEFAULT '0',
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
  `id` bigint UNSIGNED NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', '2024-09-17 08:21:24', '2024-09-17 08:21:24', NULL),
(2, 'Admin Aplikasi', '2024-09-17 08:21:38', '2024-09-17 08:21:38', NULL),
(3, 'PIC Jurusan', '2024-09-17 08:21:45', '2024-09-17 08:21:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `id_jurusan` bigint UNSIGNED NOT NULL,
  `id_gelombang` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_keluarga` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` enum('Sd','Smp','Smak','Diploma','Sarjana') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivitas_saat_ini` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_pelatihans`
--

INSERT INTO `peserta_pelatihans` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 16, 3, 'Mas Haridin', '3171092387462892', '3171892789257438', 'Laki-Laki', 'Jomokerto', '2024-09-20', 'Smak', 'Suzuran', '088288736899', 'haridinngawi@gmail.com', 'Santai dulu gak seeh', 2, '2024-09-17 08:28:37', '2024-09-17 09:45:55', NULL),
(2, 15, 3, 'Lupa nama', '7890267526738765', '2679297579752789', 'Perempuan', 'Ngawi', '2024-09-14', 'Diploma', 'Housen', '082779072780', 'apaya@gmail.com', 'Ngojol', 0, '2024-09-17 08:31:06', '2024-09-17 08:31:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jSD0LQ2u4scPsnZSr24OkrYjwstVlVQxwTlH2wEM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjhaeXM0cWYwNXFiRjA1ejRzV0MzeFJYR3c1Z0oyY21INWdOb1JCeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wZXNlcnRhLXBlbGF0aWhhbi8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1726592099);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `id_level` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Mahadewi', 'mahadewi@gmail.com', '$2y$12$baq0W3ufWtzvmMeOxbZcN.Rk/B8wRnAjdrKUH9U7yNpKE6DhwdrX6', 'hPobqrCcES', '2024-09-17 08:20:02', '2024-09-17 08:20:02', NULL),
(2, 2, 'Ambatudin', 'ambatudin@gmail.com', '$2y$12$bKOxnIzAWN8GkZYyNgD5oOP4ZVe/UpXqOXNgQwHKPezWD08fSLffa', NULL, '2024-09-17 08:22:45', '2024-09-17 08:22:45', NULL),
(3, 3, 'Ambatuprak', 'ambatuprak@gmail.com', '$2y$12$ZsjxjMD2b9kRIxIukxr8E.AQgZY9PkfcVmV4Cl2xomvpfkFXZrBTW', NULL, '2024-09-17 08:23:13', '2024-09-17 08:23:13', NULL),
(4, 3, 'Ambacika', 'ambacika@gmail.com', '$2y$12$0h8q3XI110WH8sWKmAq9ke6uNbZfC8eENL1E.EwLGTQ9tWMt17DrK', NULL, '2024-09-17 08:23:38', '2024-09-17 08:23:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_jurusan`
--

CREATE TABLE `user_jurusan` (
  `id` bigint UNSIGNED NOT NULL,
  `id_jurusan` bigint UNSIGNED NOT NULL,
  `id_level` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_jurusan`
--

INSERT INTO `user_jurusan` (`id`, `id_jurusan`, `id_level`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 16, 3, 3, '2024-09-17 08:25:05', '2024-09-17 08:25:05', NULL),
(2, 15, 3, 4, '2024-09-17 08:25:18', '2024-09-17 08:25:18', NULL);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gelombangs`
--
ALTER TABLE `gelombangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_pelatihans`
--
ALTER TABLE `peserta_pelatihans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
