-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2021 at 12:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_codes`
--

CREATE TABLE `all_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeTypeId` int(11) NOT NULL,
  `codeTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_codes`
--

INSERT INTO `all_codes` (`id`, `codeTypeId`, `codeTitle`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'html', 'html code', NULL, NULL, NULL),
(2, 2, 'html2', 'html2 code', NULL, NULL, NULL),
(3, 3, 'css', 'css code', NULL, NULL, NULL),
(4, 4, 'css2', 'csss2 code', NULL, NULL, NULL),
(5, 5, 'js', 'js code', NULL, NULL, NULL),
(6, 6, 'js2', 'js2 code', NULL, NULL, NULL),
(7, 7, 'html3', 'html3 code', NULL, NULL, NULL),
(8, 7, 'html3-2', 'html3-2 code', NULL, NULL, NULL),
(9, 1, 'html2', 'code 2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code_types`
--

CREATE TABLE `code_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `codeType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code_types`
--

INSERT INTO `code_types` (`id`, `userId`, `codeType`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'html', NULL, NULL, NULL),
(2, 1, 'html2', NULL, NULL, NULL),
(3, 1, 'css', NULL, NULL, NULL),
(4, 1, 'css2', NULL, NULL, NULL),
(5, 1, 'js', NULL, NULL, NULL),
(6, 1, 'js2', NULL, NULL, NULL),
(7, 2, 'html3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code_type__to__all_codes`
--

CREATE TABLE `code_type__to__all_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeType_id` int(11) NOT NULL,
  `allCode_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code_type__to__all_codes`
--

INSERT INTO `code_type__to__all_codes` (`id`, `codeType_id`, `allCode_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 1, 1, NULL, NULL),
(6, 2, 2, NULL, NULL);

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
(4, '2020_10_27_170757_create_code_types_table', 1),
(5, '2020_10_27_170816_create_all_codes_table', 1),
(6, '2021_03_04_112533_create_code_type__to__all_codes_table', 2);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aslam', 'aslam@gmail.com', NULL, '$2y$10$5bJGxOTZp2GooWcA/2fNYOiBAbRcCJFN23bfTFUNmUlveCko40BpO', NULL, '2021-03-01 22:36:15', '2021-03-01 22:36:15', NULL),
(2, 'Aslam2', 'aslam2@gmail.com', NULL, '$2y$10$wQz8H9r4tk.twMiupqkMTOSB5/XpX2lwWD02So4/MRQUVAR4ZKWmm', NULL, '2021-03-04 02:20:29', '2021-03-04 02:20:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_codes`
--
ALTER TABLE `all_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_types`
--
ALTER TABLE `code_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_type__to__all_codes`
--
ALTER TABLE `code_type__to__all_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `all_codes`
--
ALTER TABLE `all_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `code_types`
--
ALTER TABLE `code_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `code_type__to__all_codes`
--
ALTER TABLE `code_type__to__all_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
