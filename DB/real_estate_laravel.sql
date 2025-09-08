-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 27, 2025 at 08:54 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `photo`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Morshedul Arefin', 'admin@gmail.com', 'admin_1745033547.jpg', '$2y$12$zmOPg93IS5..NdhYAExppO4GQd3An3fM4kYBrvxwwRQq/1NTluKNy', '', '2025-04-18 07:07:42', '2025-04-19 18:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=pending, 1=active, 2=suspended',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `photo`, `password`, `company`, `designation`, `biography`, `phone`, `address`, `country`, `state`, `city`, `zip`, `website`, `facebook`, `twitter`, `linkedin`, `instagram`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kian Douglas', 'agent@gmail.com', 'agent_1745249872.jpg', '$2y$12$WyPzklOf1lh5FXfY2c5jzOpgz5zfLEocyFDKyleECdFBy4dIfG9s.', 'Silverwoods', 'Billing and posting clerk', 'Lorem ipsum dolor sit amet, ex eum suscipiantur comprehensam, euismod gubergren adolescens an sit. In graecis propriae appareat vis, ne sea veritus periculis laboramus, et ius cibo soluta consequat. In duo qualisque urbanitas deterruisset, cum ne elaboraret scribentur. Eum cetero singulis appellantur no. Mea ad sonet senserit, an his primis eripuit.\r\n\r\nPri ex dico mutat molestie, ius ne aliquam persecuti, his an adolescens neglegentur. Mazim cotidieque mel id. Ut mediocrem deseruisse vix, vocent laboramus cum ea. Autem semper intellegebat no vel.', '(03) 5381 2166', '48 Commercial Street,', 'Australia', 'Vic', 'Kyneton', '3444', 'https://www.pcstylist.com.au', '#', '#', '#', '#', '', '1', '2025-04-21 05:06:03', '2025-04-26 00:40:16'),
(2, 'Ricky Fern', 'ricky@gmail.com', 'agent_1745559762.jpg', '$2y$12$RSBtFjK1JeYnNA4xhdhFR.oKh9nTABaJGzeFkMgYL6PqmAxiyOBSK', 'National Auto Parts', 'Real Estate Agent', 'Lorem ipsum dolor sit amet, ex eum suscipiantur comprehensam, euismod gubergren adolescens an sit. In graecis propriae appareat vis, ne sea veritus periculis laboramus, et ius cibo soluta consequat. In duo qualisque urbanitas deterruisset, cum ne elaboraret scribentur. Eum cetero singulis appellantur no. Mea ad sonet senserit, an his primis eripuit.\r\n\r\nPri ex dico mutat molestie, ius ne aliquam persecuti, his an adolescens neglegentur. Mazim cotidieque mel id. Ut mediocrem deseruisse vix, vocent laboramus cum ea. Autem semper intellegebat no vel.', '603-440-6537', '3298 Grasselli Street', 'USA', 'NH', 'Merrimack', '03054', 'https://wesleyblog.com', '#', '#', '#', '#', NULL, '1', '2025-04-24 23:42:42', '2025-04-24 23:42:42'),
(4, 'Terry Chin', 'terry@gmail.com', 'agent_1745645476.jpg', '$2y$12$XdVWnuXaa552zdq6jX3o8ON6/P7/UeHHFTFkJhn/Ziq.QSZ/VUXIa', 'World Radio', 'Remote Estate Specialist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-04-25 23:31:16', '2025-04-25 23:31:16'),
(5, 'Kevin Beltran', 'kevin@gmail.com', 'agent_1745646356.jpg', '$2y$12$2OR004sCbLcrqUg6XJiesOPt8c4sRJRAR9qB6pqfOyY7F0UyzQKF.', 'Fresh Start', 'Department Head', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-04-25 23:45:57', '2025-04-25 23:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Free Wifi', '2025-04-22 23:15:53', '2025-04-22 23:15:53'),
(2, 'Swimming Pool', '2025-04-22 23:15:59', '2025-04-22 23:15:59'),
(3, 'Breakfast', '2025-04-22 23:16:04', '2025-04-22 23:16:04'),
(4, 'Car Parking', '2025-04-22 23:16:13', '2025-04-22 23:16:13'),
(5, 'Air Conditioning', '2025-04-22 23:16:19', '2025-04-22 23:16:19'),
(6, 'Gym', '2025-04-22 23:16:29', '2025-04-22 23:16:29'),
(7, 'Fitness Center', '2025-04-22 23:16:34', '2025-04-22 23:16:34'),
(10, 'Fireplace', '2025-04-26 11:57:31', '2025-04-26 11:57:35');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How to buy a property?', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '2025-04-26 18:55:14', '2025-04-26 18:55:14'),
(2, 'What a real estate agent do?', 'Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.', '2025-04-26 18:55:35', '2025-04-26 18:55:35'),
(3, 'What is a mortgage?', 'Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.', '2025-04-26 18:55:58', '2025-04-26 18:55:58'),
(4, 'What is a home inspection?', 'Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.', '2025-04-26 18:56:14', '2025-04-26 18:56:14'),
(5, 'What is property tax and how you can calculate that?', 'Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.', '2025-04-26 18:56:34', '2025-04-26 18:56:34');

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_properties` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `photo`, `total_properties`, `created_at`, `updated_at`) VALUES
(1, 'Boston', 'boston', 'location_1745660703.jpg', 0, '2025-04-22 06:10:58', '2025-04-26 03:45:03'),
(2, 'California', 'california', 'location_1745323883.jpg', 0, '2025-04-22 06:11:23', '2025-04-22 06:11:23'),
(3, 'Chicago', 'chicago', 'location_1745323949.jpg', 0, '2025-04-22 06:12:29', '2025-04-22 06:12:29'),
(4, 'Dallas', 'dallas', 'location_1745323966.jpg', 0, '2025-04-22 06:12:46', '2025-04-22 06:12:46'),
(5, 'Denver', 'denver', 'location_1745323978.jpg', 0, '2025-04-22 06:12:58', '2025-04-22 06:12:58'),
(6, 'New York', 'newyork', 'location_1745323993.jpg', 0, '2025-04-22 06:13:13', '2025-04-22 06:13:13'),
(7, 'San Diago', 'sandiago', 'location_1745324006.jpg', 0, '2025-04-22 06:13:26', '2025-04-22 06:13:26'),
(8, 'Washington', 'washington', 'location_1745324017.jpg', 0, '2025-04-22 06:13:37', '2025-04-22 06:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `agent_id` bigint UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `agent_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'I want to talk to you', 'Hello, I want to talk to you about one subject. So please give me a time when you are available. Thanks!', '2025-04-26 13:30:17', '2025-04-26 13:30:17'),
(4, 2, 1, 'I want to create a new website like this', 'I want to create real estate website with advanced features.', '2025-04-26 14:42:32', '2025-04-26 14:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `message_replies`
--

CREATE TABLE `message_replies` (
  `id` bigint UNSIGNED NOT NULL,
  `message_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `agent_id` bigint UNSIGNED NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_replies`
--

INSERT INTO `message_replies` (`id`, `message_id`, `user_id`, `agent_id`, `sender`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'Customer', 'Are you there? Please give me a response. I am waiting for you.', '2025-04-26 14:04:31', '2025-04-26 14:04:31'),
(2, 1, 2, 1, 'Agent', 'Ok. Give me some times.', '2025-04-26 14:04:31', '2025-04-26 14:04:31'),
(6, 1, 2, 1, 'Agent', 'Is this ok?', '2025-04-26 14:35:39', '2025-04-26 14:35:39'),
(7, 4, 2, 1, 'Agent', 'Ok, you can ask me.', '2025-04-26 14:43:18', '2025-04-26 14:43:18'),
(8, 4, 2, 1, 'Customer', 'I have a sample website lile: http://www.abcrealestate.com', '2025-04-26 14:43:56', '2025-04-26 14:43:56');

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
(4, '2025_04_18_114235_create_admins_table', 1),
(5, '2025_04_21_105109_create_agents_table', 2),
(6, '2025_04_22_064336_create_packages_table', 3),
(7, '2025_04_22_115300_create_locations_table', 4),
(8, '2025_04_22_133541_create_types_table', 5),
(9, '2025_04_23_051059_create_amenities_table', 6),
(10, '2025_04_23_063225_create_orders_table', 7),
(11, '2025_04_25_151549_create_properties_table', 8),
(12, '2025_04_26_024237_create_property_photos_table', 9),
(13, '2025_04_26_030750_create_property_videos_table', 10),
(14, '2025_04_26_183818_create_wishlists_table', 11),
(15, '2025_04_26_191137_create_messages_table', 12),
(16, '2025_04_26_191304_create_message_replies_table', 13),
(17, '2025_04_26_205305_create_testimonials_table', 14),
(18, '2025_04_27_000459_create_posts_table', 15),
(19, '2025_04_27_004729_create_faqs_table', 16),
(20, '2025_04_27_060552_create_subscribers_table', 17),
(21, '2025_04_27_065103_create_pages_table', 18),
(22, '2025_04_27_081237_create_settings_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `agent_id` int NOT NULL,
  `package_id` int NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currently_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `agent_id`, `package_id`, `invoice_no`, `transaction_id`, `payment_method`, `paid_amount`, `purchase_date`, `expire_date`, `status`, `currently_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'INV-1-1745432026', '0EU42667TS6353708', 'PayPal', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 06:12:55', '2025-04-23 12:24:16'),
(2, 1, 3, 'INV-1-1745432127', '02P885743D025641A', 'PayPal', '49', '2025-04-23', '2025-06-22', 'Completed', 0, '2025-04-23 06:14:02', '2025-04-23 12:24:16'),
(7, 1, 1, 'INV-1-1745432201', 'cs_test_a1oMEOqZKsN8cMhnhwaDJH5dffPeTRtRYGzQjKGipdDrdDwabvGxIrGIJ7', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 12:16:41', '2025-04-23 12:24:16'),
(8, 1, 1, 'INV-1-1745432556', 'cs_test_a1Q28OyXjDNqga5S5TGXSD2GuseyNKs0M0ibHRhD7caiFwRUMZhlHAjPyD', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 12:22:36', '2025-04-23 12:24:16'),
(9, 1, 1, 'INV-1-1745432656', 'cs_test_a1G2I34wmcjYQpG3cQogzuzc7R8GLuPSqJj8FA6sBwiQGVNJt70UqGpYZm', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 1, '2025-04-23 12:24:16', '2025-04-23 12:24:16'),
(10, 2, 2, 'INV-2-1745586823', 'cs_test_a1m5ApTREmiKCMAwUMbQ6UtjRsStnRgytNV6mV5b4j5tVQ7Hznj8d0cLoA', 'Stripe', '19', '2025-04-25', '2025-05-25', 'Completed', 1, '2025-04-25 07:13:43', '2025-04-25 07:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int DEFAULT NULL,
  `allowed_days` int DEFAULT NULL,
  `allowed_properties` int DEFAULT NULL,
  `allowed_featured_properties` int DEFAULT NULL,
  `allowed_photos` int DEFAULT NULL,
  `allowed_videos` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `allowed_days`, `allowed_properties`, `allowed_featured_properties`, `allowed_photos`, `allowed_videos`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 9, 15, 5, 2, 5, 5, '2025-04-22 01:02:18', '2025-04-26 10:21:18'),
(2, 'Standard', 19, 30, 15, 5, 10, 10, '2025-04-22 01:03:28', '2025-04-26 04:28:07'),
(3, 'Gold', 49, 60, -1, 15, -1, -1, '2025-04-22 01:04:09', '2025-04-22 01:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `terms_content` text COLLATE utf8mb4_unicode_ci,
  `privacy_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `terms_content`, `privacy_content`, `created_at`, `updated_at`) VALUES
(1, '<h1>Heading 1</h1>\r\n<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.</p>\r\n<h2>Heading 2</h2>\r\n<p>Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.</p>\r\n<h3>Heading 3</h3>\r\n<p>Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>\r\n<h4>Heading 4</h4>\r\n<p>Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.</p>\r\n<h5>Heading 5</h5>\r\n<p>Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.</p>', '<h1>Heading 1</h1>\r\n<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.</p>\r\n<h2>Heading 2</h2>\r\n<p>Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.</p>\r\n<h3>Heading 3</h3>\r\n<p>Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>\r\n<h4>Heading 4</h4>\r\n<p>Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.</p>\r\n<h5>Heading 5</h5>\r\n<p>Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.</p>', NULL, '2025-04-27 01:07:53');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `short_description`, `description`, `photo`, `total_views`, `created_at`, `updated_at`) VALUES
(1, 'Maximizing Your Property Investment: Tips for Success', 'maximizing-your-property-investment', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745712928.jpg', 4, '2025-04-26 18:15:28', '2025-04-26 18:41:58'),
(2, 'The Insider\'s Guide to Finding Your Dream Home and Land', 'find-your-dream-home', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745712977.jpg', 2, '2025-04-26 18:16:17', '2025-04-26 18:42:05'),
(3, 'The Rise of the Sustainable Housing: Think Why It Matters', 'rise-of-sustainable-housing', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713013.jpg', 0, '2025-04-26 18:16:53', '2025-04-26 18:16:53'),
(4, 'The Top 10 Most Popular Real Estate Markets of the Year', 'top-most-popular-real-estate-markets', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713049.jpg', 0, '2025-04-26 18:17:29', '2025-04-26 18:17:29'),
(5, 'The Benefits of Working with a Good Real Estate Agent', 'benefits-of-working-with-good-agent', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713080.jpg', 11, '2025-04-26 18:18:00', '2025-04-26 18:41:40'),
(6, 'The Impact of Interest Rates on the Real Estate Market', 'impact-of-interest-rates-on-market', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713110.jpg', 3, '2025-04-26 18:18:30', '2025-04-26 18:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `agent_id` int NOT NULL,
  `location_id` int NOT NULL,
  `type_id` int NOT NULL,
  `amenities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL,
  `featured_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` int DEFAULT NULL,
  `bathroom` int DEFAULT NULL,
  `size` int DEFAULT NULL,
  `floor` int DEFAULT NULL,
  `garage` int DEFAULT NULL,
  `balcony` int DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `built_year` int DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `is_featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `location_id`, `type_id`, `amenities`, `name`, `slug`, `description`, `price`, `featured_photo`, `purpose`, `bedroom`, `bathroom`, `size`, `floor`, `garage`, `balcony`, `address`, `built_year`, `map`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 5, '1,3,6,7', 'Sea Side Property', 'sea-side-property', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 56000, 'property_f_photo_1745634234.jpg', 'Sale', 4, 5, 3000, 4, 2, 5, '937 Jamajo Blvd, Orlando FL 32803', 1980, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.2542091435403!2d-97.90512175238419!3d38.06450160184029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1671347381733!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border: 0\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'No', 'Active', '2025-04-25 13:43:01', '2025-04-25 23:03:42'),
(7, 2, 4, 1, '4,5,7', 'Modern Villa', 'modern-villa', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 124000, 'property_f_photo_1745645709.jpg', 'Rent', 5, 8, 3000, 2, 1, 1, '2226 Michigan Avenue Waynesburg, PA 15370', 2020, NULL, 'Yes', 'Active', '2025-04-25 23:35:09', '2025-04-25 23:40:24'),
(8, 2, 1, 1, '2,3,6', 'Cabin in New York', 'cabin-new-york', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 99000, 'property_f_photo_1745645923.jpg', 'Sale', 4, 2, 5000, 2, 2, 6, '2349 Hinkle Lake Road Waltham, MA 02154', 2014, NULL, 'No', 'Active', '2025-04-25 23:38:43', '2025-04-26 01:14:03'),
(9, 1, 7, 1, '4,5,7', 'Nice Condo in Sand Diego', 'nice-condo-in-san-diego', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 78000, 'property_f_photo_1745646160.jpg', 'Sale', 4, 3, 2300, 2, 2, 1, '4744 Havanna Street Winston Salem, NC 27107', 2011, NULL, 'Yes', 'Active', '2025-04-25 23:42:40', '2025-04-25 23:44:30'),
(10, 1, 1, 5, '1,6', 'Villa in Boston', 'villa-in-boston', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 233999, 'property_f_photo_1745646253.jpg', 'Rent', 7, 4, 6000, 3, 4, 8, '2438 Caldwell Road Rochester, NY 14613', 2007, NULL, 'Yes', 'Active', '2025-04-25 23:44:13', '2025-04-26 01:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `property_photos`
--

CREATE TABLE `property_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_photos`
--

INSERT INTO `property_photos` (`id`, `property_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'property_photo_1745635519.jpg', '2025-04-25 20:45:19', '2025-04-25 20:45:19'),
(2, 1, 'property_photo_1745635624.jpg', '2025-04-25 20:47:04', '2025-04-25 20:47:04'),
(3, 1, 'property_photo_1745635636.jpg', '2025-04-25 20:47:16', '2025-04-25 20:47:16'),
(13, 7, 'property_photo_1745645742.jpg', '2025-04-25 23:35:42', '2025-04-25 23:35:42'),
(14, 7, 'property_photo_1745645749.jpg', '2025-04-25 23:35:49', '2025-04-25 23:35:49'),
(15, 8, 'property_photo_1745645951.jpg', '2025-04-25 23:39:11', '2025-04-25 23:39:11'),
(16, 8, 'property_photo_1745645957.jpg', '2025-04-25 23:39:17', '2025-04-25 23:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `property_videos`
--

CREATE TABLE `property_videos` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` bigint UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_videos`
--

INSERT INTO `property_videos` (`id`, `property_id`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 'wuhz3WJfFsw', '2025-04-25 21:11:00', '2025-04-25 21:11:00'),
(2, 1, 't1jH2pFSRp8', '2025-04-25 21:11:33', '2025-04-25 21:11:33'),
(3, 1, 'pPl3ZZdTP3g', '2025-04-25 21:11:58', '2025-04-25 21:11:58'),
(7, 7, 'FX_aiXBJwY8', '2025-04-25 23:36:19', '2025-04-25 23:36:19'),
(8, 7, 'bmjde13aGeg', '2025-04-25 23:36:30', '2025-04-25 23:36:30');

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
('OdAT2uXz6hvayXasRyRPqtHNDbD9T3zqnLeapims', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicmlnNG1aMWxSRUtiUHp1eVVqaWVzZzlSOFBxNlU3ZlZOcmUyeWRXTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjUyOiJsb2dpbl9hZ2VudF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1745744052);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `banner`, `footer_address`, `footer_email`, `footer_phone`, `footer_facebook`, `footer_twitter`, `footer_linkedin`, `footer_instagram`, `footer_copyright`, `created_at`, `updated_at`) VALUES
(1, 'logo_1745742469.png', 'favicon_1745742706.png', 'banner_1745743308.jpg', '34 Antiger Lane, USA, 12937', 'contact@mywebsite.com', '122-222-1212', '#', '#', '#', '#', 'Copyright 2025, YourWebsite. All Rights Reserved.', NULL, '2025-04-27 02:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1@gmail.com', '', 1, '2025-04-27 00:08:24', '2025-04-27 00:10:08'),
(3, 'test2@gmail.com', '', 1, '2025-04-27 00:12:43', '2025-04-27 00:13:13'),
(4, 'test3@gmail.com', 'a08bcd20f0b6e3fdd718f941c8cda75ee613544db1b9d551f7137d7343a54b3f', 1, '2025-04-27 00:13:01', '2025-04-27 00:28:13'),
(5, 'test4@gmail.com', NULL, 0, '2025-04-27 00:28:06', '2025-04-27 00:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Robert Krol', 'CEO, AAA Company', 'testimonial_1745701177.jpg', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '2025-04-26 14:59:37', '2025-04-26 14:59:37'),
(2, 'Sal Harvey', 'Director, BBB Company', 'testimonial_1745701233.jpg', 'Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque.', '2025-04-26 15:00:33', '2025-04-26 15:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', '2025-04-22 07:42:34', '2025-04-22 07:42:34'),
(2, 'Bungalow', '2025-04-22 07:42:45', '2025-04-22 07:42:45'),
(3, 'Cabin', '2025-04-22 07:42:55', '2025-04-22 07:42:55'),
(4, 'Cottage', '2025-04-22 07:43:03', '2025-04-22 07:43:03'),
(5, 'Villa', '2025-04-22 07:43:11', '2025-04-22 07:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=pending, 1=active, 2=suspended',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Smith Cooper', 'smith@gmail.com', 'user_1745146600.jpg', '$2y$12$rKfT/zi/ag/ZshXNvh3D.eIGJcwJU0ZAW.bPh84KloYrL3GL6pUGW', '', '1', '2025-04-18 20:31:03', '2025-04-20 04:56:40'),
(3, 'David', 'david@gmail.com', 'user_1745556312.jpg', '$2y$12$L4PXkkzwQFFiBhtEJ1v3..1Dgej0w2LbkVrMOy.hQn.cGn/NxEK4K', '', '1', '2025-04-18 20:33:17', '2025-04-24 22:45:12'),
(4, 'John Green', 'john@gmail.com', NULL, '$2y$12$Xh5EvDKwMVBk1d5ZTK8X7O4MWuVD0icHZCJEo9w2bL6bkkSNkLIgy', '', '1', '2025-04-20 04:29:00', '2025-04-20 04:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `property_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(2, 2, 10, '2025-04-26 12:54:04', '2025-04-26 12:54:04'),
(3, 2, 7, '2025-04-26 12:57:43', '2025-04-26 12:57:43'),
(4, 2, 9, '2025-04-26 12:57:47', '2025-04-26 12:57:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amenities_name_unique` (`name`);

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
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
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_name_unique` (`name`),
  ADD UNIQUE KEY `locations_slug_unique` (`slug`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `message_replies`
--
ALTER TABLE `message_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_replies_message_id_foreign` (`message_id`),
  ADD KEY `message_replies_user_id_foreign` (`user_id`),
  ADD KEY `message_replies_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_slug_unique` (`slug`);

--
-- Indexes for table `property_photos`
--
ALTER TABLE `property_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_photos_property_id_foreign` (`property_id`);

--
-- Indexes for table `property_videos`
--
ALTER TABLE `property_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_videos_property_id_foreign` (`property_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wishlists_user_id_property_id_unique` (`user_id`,`property_id`),
  ADD KEY `wishlists_property_id_foreign` (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_replies`
--
ALTER TABLE `message_replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `property_photos`
--
ALTER TABLE `property_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `property_videos`
--
ALTER TABLE `property_videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_replies`
--
ALTER TABLE `message_replies`
  ADD CONSTRAINT `message_replies_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_replies_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_photos`
--
ALTER TABLE `property_photos`
  ADD CONSTRAINT `property_photos_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_videos`
--
ALTER TABLE `property_videos`
  ADD CONSTRAINT `property_videos_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
