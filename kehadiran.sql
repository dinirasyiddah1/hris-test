-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 04:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kehadiran`
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
-- Table structure for table `kehadirans`
--

CREATE TABLE `kehadirans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `in` datetime NOT NULL,
  `out` datetime NOT NULL,
  `hour` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deviceid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kehadirans`
--

INSERT INTO `kehadirans` (`id`, `in`, `out`, `hour`, `location`, `deviceid`, `created_at`, `updated_at`) VALUES
(1, '2021-04-23 09:06:22', '2021-04-24 09:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(2, '2021-04-23 08:06:22', '2021-04-24 09:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(3, '2021-04-23 08:06:22', '2021-04-24 09:06:22', 8, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(4, '2021-04-23 08:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(5, '2021-04-23 08:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(6, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 8, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(7, '2021-04-23 08:06:22', '2021-04-24 09:06:22', 8, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(8, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(9, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(10, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(11, '2021-04-23 09:06:22', '2021-04-24 09:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(12, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(13, '2021-04-23 08:06:22', '2021-04-24 08:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(14, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 8, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(15, '2021-04-23 08:06:22', '2021-04-24 09:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(16, '2021-04-23 08:06:22', '2021-04-24 09:06:22', 9, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25'),
(17, '2021-04-23 09:06:22', '2021-04-24 08:06:22', 8, '-0.9339786,100.4305793', 'C112C3FB-3097-42AC-9BF2-45F1EDFFD459', '2021-04-24 01:11:25', '2021-04-24 01:11:25');

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
(4, '2021_04_24_072954_create_kehadirans_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `kehadirans`
--
ALTER TABLE `kehadirans`
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
-- AUTO_INCREMENT for table `kehadirans`
--
ALTER TABLE `kehadirans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
