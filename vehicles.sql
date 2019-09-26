-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2019 at 03:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicles`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'Honda', '2019-09-25 03:01:35', '2019-09-25 03:01:35'),
(7, 'Toyota', '2019-09-25 03:01:27', '2019-09-25 03:01:27'),
(6, 'Sazuki', '2019-09-25 03:01:12', '2019-09-25 03:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `company_id`, `product_id`, `model`, `price`, `image`, `availability`, `created_at`, `updated_at`) VALUES
(16, 8, 28, 'fnh422', 768665, '1569398875.jpg', '2', '2019-09-25 03:07:55', '2019-09-25 03:07:55'),
(15, 8, 27, 'bgd856', 45654, '1569398838.jpg', '9', '2019-09-25 03:07:18', '2019-09-25 03:07:18'),
(14, 8, 26, 'bgd856', 235235, '1569398811.jpg', '3', '2019-09-25 03:06:51', '2019-09-25 03:06:51'),
(11, 6, 19, 'cvd123', 4343, '1569398731.jpg', '5', '2019-09-25 03:05:31', '2019-09-25 03:05:31'),
(10, 6, 18, 'saf123', 4343, '1569398702.jpg', '3', '2019-09-25 03:05:02', '2019-09-25 03:05:02'),
(12, 6, 20, 'hkd542', 242342, '1569398760.jpg', '2', '2019-09-25 03:06:00', '2019-09-25 03:06:00'),
(13, 6, 22, 'fgb34', 43534, '1569398784.png', '6', '2019-09-25 03:06:24', '2019-09-25 03:06:24'),
(17, 7, 23, 'hkd542', 4343, '1569398902.jpg', '5', '2019-09-25 03:08:22', '2019-09-25 03:08:22'),
(18, 7, 24, 'hkd542', 4343, '1569398939.png', '2', '2019-09-25 03:08:59', '2019-09-25 03:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_20_113531_create_companies_table', 2),
(5, '2019_09_20_143243_add_role_to_users', 3),
(6, '2019_09_23_130832_create_products_table', 4),
(7, '2019_09_23_155607_create_details_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `company_id`, `name`, `created_at`, `updated_at`) VALUES
(24, 7, 'toyota product2', '2019-09-25 03:03:26', '2019-09-25 03:03:26'),
(23, 7, 'toyota product1', '2019-09-25 03:03:16', '2019-09-25 03:03:16'),
(29, 7, 'toyota product3', '2019-09-25 04:38:05', '2019-09-25 04:38:05'),
(22, 6, 'sazuki product3', '2019-09-25 03:03:05', '2019-09-25 03:03:05'),
(20, 6, 'sazuki product2', '2019-09-25 03:02:29', '2019-09-25 03:02:29'),
(19, 6, 'sazuki product1', '2019-09-25 03:02:16', '2019-09-25 03:02:16'),
(18, 6, 'sazuki product', '2019-09-25 03:01:57', '2019-09-25 03:01:57'),
(26, 8, 'honda product1', '2019-09-25 03:03:51', '2019-09-25 03:03:51'),
(27, 8, 'honda product2', '2019-09-25 03:04:04', '2019-09-25 03:04:04'),
(28, 8, 'honda product3', '2019-09-25 03:04:15', '2019-09-25 03:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'test User', 'user@site.com', 'customer', NULL, '$2y$10$Fs6h9kACc7BAVW/1PEdOx.3Tn2o0G1w/n.zOb2yjG4RDFb6v4UkLC', NULL, '2019-09-23 05:09:29', '2019-09-23 05:09:29'),
(6, 'test vendor', 'vendor@site.com', 'vendor', NULL, '$2y$10$hqTrqX9L18ctdc.YSGomguEkCgYaFWVXFIgZmKuY5ktKz0SKK/y32', NULL, '2019-09-23 05:09:01', '2019-09-23 05:09:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
