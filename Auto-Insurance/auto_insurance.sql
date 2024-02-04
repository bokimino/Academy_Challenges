-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 09:03 PM
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
-- Database: `auto_insurance`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_02_104439_create_vehicles_table', 1),
(6, '2024_02_04_115254_add_role_to_users', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Regular User', 'user@example.com', NULL, '$2y$12$vhonAeCDx54k.qfkBQZpa.jf1.PIXKjkzCgWXUIuoh2KB6IWTSbtG', NULL, '2024-02-04 11:11:19', '2024-02-04 11:11:19', 'user'),
(2, 'Admin User', 'admin@example.com', NULL, '$2y$12$vEgvsEZmjqT9XJ5psM7sWueR1HWP5kz1f2UFFBlQn2UM.4i0S/mFe', NULL, '2024-02-04 11:11:19', '2024-02-04 11:11:19', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `insurance_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand`, `model`, `plate_number`, `insurance_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BMW', 'SUV', 'pw-780-rlu', '2024-08-23', '0000-00-00 00:00:00', '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(2, 'Audi', 'Sedan', 'qb-089-hgs', '2024-07-20', '2024-02-04 13:55:03', '2024-02-02 11:49:21', '2024-02-04 13:55:03'),
(3, 'Toyota', 'SUV', 'yr-079-uvk', '2024-11-02', '2024-02-04 14:03:04', '2024-02-02 11:49:21', '2024-02-04 14:03:04'),
(4, 'Chevrolet', 'SUV', 'te-152-nra', '2024-11-26', '2024-02-04 13:59:33', '2024-02-02 11:49:21', '2024-02-04 13:59:33'),
(5, 'BMW', 'Coupe', 'dz-906-lnp', '2024-07-04', '2024-02-04 16:59:04', '2024-02-02 11:49:21', '2024-02-04 16:59:04'),
(6, 'BMW', 'Convertible', 'iw-566-usu', '2024-06-19', '2024-02-04 18:29:59', '2024-02-02 11:49:21', '2024-02-04 18:29:59'),
(7, 'BMW', 'Truck', 'wa-138-gsl', '2024-09-21', '2024-02-04 18:30:02', '2024-02-02 11:49:21', '2024-02-04 18:30:02'),
(8, 'Honda', 'Truck', 'iw-808-qku', '2024-11-11', '2024-02-04 18:30:03', '2024-02-02 11:49:21', '2024-02-04 18:30:03'),
(9, 'Mercedes-Benz', 'Sedan', 'ur-184-sfo', '2024-11-09', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(10, 'Audi', 'Convertible', 'ih-165-fyj', '2024-04-20', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(11, 'Audi', 'Truck', 'ps-411-qvh', '2024-07-10', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(12, 'Audi', 'Convertible', 'mg-127-mbm', '2024-10-13', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(13, 'Audi', 'SUV', 'ru-682-elc', '2024-03-14', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(14, 'Audi', 'Sedan', 'xz-886-rja', '2024-02-27', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(15, 'Chevrolet', 'Convertible', 'el-998-bje', '2024-08-07', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(16, 'Chevrolet', 'Coupe', 'ni-306-hdj', '2024-02-08', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(17, 'Audi', 'Coupe', 'tx-959-wkt', '2024-02-29', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(18, 'Mercedes-Benz', 'Coupe', 'hy-924-syj', '2024-05-05', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(19, 'Mercedes-Benz', 'Coupe', 'ey-611-uja', '2024-08-27', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(20, 'Audi', 'Convertible', 'iv-167-zxe', '2024-07-04', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(21, 'Ford', 'Convertible', 'yf-756-uaz', '2024-09-07', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(22, 'Honda', 'SUV', 'gk-741-ame', '2024-11-12', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(23, 'Chevrolet', 'Sedan', 'vj-593-eef', '2024-09-14', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(24, 'BMW', 'Sedan', 'jr-306-waz', '2024-10-17', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(25, 'Ford', 'Convertible', 'ld-263-dco', '2024-09-17', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(26, 'Chevrolet', 'Sedan', 'jj-547-hjp', '2024-04-13', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(27, 'Mercedes-Benz', 'SUV', 'nt-362-mwa', '2024-08-12', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(28, 'Toyota', 'Coupe', 'ga-914-jiv', '2025-01-14', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(29, 'Honda', 'Coupe', 'fd-290-hlm', '2024-06-12', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(30, 'Mercedes-Benz', 'Coupe', 'iv-660-cov', '2024-10-30', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(31, 'Chevrolet', 'Sedan', 'yz-432-ucq', '2024-10-16', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(32, 'Toyota', 'SUV', 'jn-380-eug', '2024-07-28', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(33, 'Honda', 'Coupe', 'ni-208-zwc', '2024-04-04', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(34, 'Toyota', 'Truck', 'vr-841-imy', '2024-08-22', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(35, 'Audi', 'SUV', 'bz-785-fkm', '2024-05-08', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(36, 'Audi', 'Truck', 'qk-208-gno', '2024-02-09', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(37, 'Honda', 'Truck', 'fq-895-tba', '2024-07-06', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(38, 'Audi', 'Coupe', 'dc-055-jap', '2025-01-15', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(39, 'Honda', 'Truck', 'vw-977-qxz', '2025-01-14', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(40, 'BMW', 'Truck', 'lc-703-rfi', '2024-10-26', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(41, 'Chevrolet', 'SUV', 'pb-734-dxc', '2024-11-16', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(42, 'Ford', 'Convertible', 'lb-148-fnu', '2024-02-12', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(43, 'Chevrolet', 'Truck', 'gm-978-uva', '2024-08-25', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(44, 'Toyota', 'Convertible', 'hi-207-qqp', '2024-11-09', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(45, 'Mercedes-Benz', 'Convertible', 'fu-982-biz', '2024-09-19', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(46, 'Mercedes-Benz', 'Coupe', 'ti-309-ntl', '2024-05-27', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(47, 'Mercedes-Benz', 'SUV', 'rx-230-soz', '2024-04-19', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(48, 'BMW', 'Coupe', 'ei-879-tzf', '2024-04-21', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(49, 'Chevrolet', 'Convertible', 'mu-496-xuc', '2024-04-04', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(50, 'Audi', 'SUV', 'yk-304-jlb', '2024-11-03', NULL, '2024-02-02 11:49:21', '2024-02-02 11:49:21'),
(51, 'Toyota', 'Camry', 'ABC123', '2023-12-31', NULL, '2024-02-04 08:26:32', '2024-02-04 08:26:32'),
(52, 'ASD', 'dsa', '12312312312', '2222-02-22', NULL, '2024-02-04 15:16:36', '2024-02-04 15:16:36'),
(53, 'Rolls Royce', 'Royce 5', '18912383828', '2022-12-12', NULL, '2024-02-04 15:45:10', '2024-02-04 15:45:10'),
(54, 'Bla', 'Bla', '123123', '2222-10-10', NULL, '2024-02-04 15:48:07', '2024-02-04 15:48:07'),
(55, '1', '1', '1', '2222-11-11', '2024-02-04 18:00:07', '2024-02-04 17:16:02', '2024-02-04 18:00:07');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
