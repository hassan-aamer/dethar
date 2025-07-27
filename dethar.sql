-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2025 at 12:54 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dethar`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category_id` bigint UNSIGNED DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `title`, `description`, `content`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Ullamco amet magni \",\"ar\":\"Nisi ullam doloribus\"}', '{\"en\":\"Quasi quos ut anim q\",\"ar\":\"Dolorem enim qui com\"}', '{\"en\":\"Facere eiusmod beata\",\"ar\":\"Velit adipisci volu\"}', 1, 89, NULL, NULL, '2025-07-22 16:21:58', '2025-07-27 09:24:07'),
(2, 1, '{\"en\":\"Beatae quo at doloru\",\"ar\":\"Consectetur praesen\"}', '{\"en\":\"Deserunt nulla conse\",\"ar\":\"Autem sit fugit ea \"}', '{\"en\":\"Voluptate suscipit e\",\"ar\":\"Aliquip aut id volup\"}', 1, 80, NULL, NULL, '2025-07-27 09:30:43', '2025-07-27 09:30:46'),
(3, 2, '{\"en\":\"Maiores consectetur \",\"ar\":\"Eum at harum quas au\"}', '{\"en\":\"Repudiandae sit est \",\"ar\":\"Consectetur quia rat\"}', '{\"en\":\"Dolore quis dolores \",\"ar\":\"Dolor nostrum blandi\"}', 1, 98, NULL, NULL, '2025-07-27 09:31:29', '2025-07-27 09:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Sed iure rerum disti\",\"ar\":\"Cillum dolore repreh\"}', '{\"en\":\"Veniam distinctio \",\"ar\":\"Deserunt consectetur\"}', 1, 21, NULL, NULL, '2025-07-22 16:17:10', '2025-07-25 11:55:42'),
(2, '{\"en\":\"Aute aut suscipit cu\",\"ar\":\"Nostrum ducimus sol\"}', '{\"en\":\"Minus dolor esse ven\",\"ar\":\"Eos reiciendis iure \"}', 1, 88, NULL, NULL, '2025-07-23 22:13:34', '2025-07-23 22:13:34'),
(3, '{\"en\":\"Et in inventore eaqu\",\"ar\":\"Adipisicing sint vo\"}', '{\"en\":\"Dolorem omnis quibus\",\"ar\":\"Non assumenda omnis \"}', 0, 40, NULL, NULL, '2025-07-23 22:13:42', '2025-07-25 11:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('dethar_cache_product_4', 'O:18:\"App\\Models\\Product\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:4;s:11:\"category_id\";i:1;s:5:\"title\";s:56:\"{\"en\":\"Quasi vel ea consequ\",\"ar\":\"Illum sapiente veli\"}\";s:11:\"description\";s:57:\"{\"en\":\"Dolor vero est quae \",\"ar\":\"Voluptates aut et au\"}\";s:7:\"content\";s:57:\"{\"en\":\"Voluptate non sapien\",\"ar\":\"Cupidatat libero nos\"}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:42;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-21 18:57:41\";s:10:\"updated_at\";s:19:\"2025-07-22 18:20:15\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:4;s:11:\"category_id\";i:1;s:5:\"title\";s:56:\"{\"en\":\"Quasi vel ea consequ\",\"ar\":\"Illum sapiente veli\"}\";s:11:\"description\";s:57:\"{\"en\":\"Dolor vero est quae \",\"ar\":\"Voluptates aut et au\"}\";s:7:\"content\";s:57:\"{\"en\":\"Voluptate non sapien\",\"ar\":\"Cupidatat libero nos\"}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:42;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-21 18:57:41\";s:10:\"updated_at\";s:19:\"2025-07-22 18:20:15\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:5:\"title\";s:5:\"array\";s:11:\"description\";s:5:\"array\";s:7:\"content\";s:5:\"array\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:0:\"\";}s:12:\"translatable\";a:3:{i:0;s:5:\"title\";i:1;s:11:\"description\";i:2;s:7:\"content\";}s:20:\"\0*\0translationLocale\";N;}', 2068568418),
('dethar_cache_product_9', 'O:18:\"App\\Models\\Product\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:9;s:11:\"category_id\";i:3;s:5:\"title\";s:57:\"{\"en\":\"Sed similique molest\",\"ar\":\"Officiis cum omnis v\"}\";s:11:\"description\";s:56:\"{\"en\":\"Blanditiis duis comm\",\"ar\":\"Pariatur Sapiente l\"}\";s:7:\"content\";s:11:\"{\"ar\":null}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:18;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-22 19:27:04\";s:10:\"updated_at\";s:19:\"2025-07-27 00:02:23\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:9;s:11:\"category_id\";i:3;s:5:\"title\";s:57:\"{\"en\":\"Sed similique molest\",\"ar\":\"Officiis cum omnis v\"}\";s:11:\"description\";s:56:\"{\"en\":\"Blanditiis duis comm\",\"ar\":\"Pariatur Sapiente l\"}\";s:7:\"content\";s:11:\"{\"ar\":null}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:18;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-22 19:27:04\";s:10:\"updated_at\";s:19:\"2025-07-27 00:02:23\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:5:\"title\";s:5:\"array\";s:11:\"description\";s:5:\"array\";s:7:\"content\";s:5:\"array\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:0:\"\";}s:12:\"translatable\";a:3:{i:0;s:5:\"title\";i:1;s:11:\"description\";i:2;s:7:\"content\";}s:20:\"\0*\0translationLocale\";N;}', 2068934546),
('dethar_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:133:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:19:\"dashboard dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"list services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"show services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:15:\"create services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"edit services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"delete services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"active services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:13:\"list products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"show products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"create products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"edit products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:15:\"delete products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:15:\"active products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:12:\"list sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:12:\"show sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:14:\"create sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:12:\"edit sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:14:\"delete sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:14:\"active sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:10:\"list whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:10:\"show whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:12:\"create whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:10:\"edit whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:12:\"delete whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"active whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:10:\"list about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:10:\"show about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:12:\"create about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:10:\"edit about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:12:\"delete about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:12:\"active about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:13:\"list contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:13:\"show contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:15:\"create contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:13:\"edit contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:15:\"delete contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:15:\"active contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:17:\"list subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:17:\"show subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:19:\"create subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:17:\"edit subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:19:\"delete subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:19:\"active subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:17:\"list developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:17:\"show developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:19:\"create developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:17:\"edit developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:19:\"delete developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:19:\"active developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:13:\"list packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:13:\"show packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:15:\"create packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:13:\"edit packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:15:\"delete packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:15:\"active packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:19:\"list packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:19:\"show packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:21:\"create packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:19:\"edit packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:21:\"delete packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:21:\"active packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:13:\"list features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:13:\"show features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:15:\"create features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:13:\"edit features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:15:\"delete features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:15:\"active features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:17:\"list infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:17:\"show infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:19:\"create infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:17:\"edit infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:19:\"delete infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:19:\"active infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:24:\"list infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:24:\"show infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:26:\"create infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:24:\"edit infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:26:\"delete infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:26:\"active infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:16:\"list infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:16:\"show infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:18:\"create infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:16:\"edit infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:18:\"delete infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:18:\"active infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:20:\"list productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:20:\"show productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:22:\"create productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:20:\"edit productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:22:\"delete productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:22:\"active productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:20:\"list productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:20:\"show productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:22:\"create productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:20:\"edit productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:22:\"delete productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:22:\"active productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:9:\"list faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:9:\"show faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:11:\"create faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:9:\"edit faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:11:\"delete faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:11:\"active faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:10:\"list users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:10:\"show users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:12:\"create users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:10:\"edit users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:12:\"delete users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:12:\"active users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:10:\"list roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:10:\"show roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:12:\"create roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:10:\"edit roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:12:\"delete roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:12:\"active roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:16:\"list permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:16:\"show permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:18:\"create permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:16:\"edit permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:18:\"delete permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:18:\"active permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:13:\"list settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:13:\"show settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:15:\"create settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:13:\"edit settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:15:\"delete settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:15:\"active settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:12:\"list reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:128;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:12:\"show reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:14:\"create reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:130;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:12:\"edit reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:14:\"delete reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:132;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:14:\"active reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super admin\";s:1:\"c\";s:3:\"web\";}}}', 1753659179),
('laravel_cache_product_2', 'O:18:\"App\\Models\\Product\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:2;s:11:\"category_id\";i:1;s:5:\"title\";s:44:\"{\"en\":\"hhhhhhhhhhhhhh\",\"ar\":\"ggggggggggggg\"}\";s:11:\"description\";s:66:\"{\"en\":\"ggggggggggggggggggggg\",\"ar\":\"gggggggggggggggggggggggggggg\"}\";s:7:\"content\";s:58:\"{\"en\":\"gggggggggggggggggggggggg\",\"ar\":\"ggggggggggggggggg\"}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:1;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-06 10:07:30\";s:10:\"updated_at\";s:19:\"2025-07-10 11:21:44\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:2;s:11:\"category_id\";i:1;s:5:\"title\";s:44:\"{\"en\":\"hhhhhhhhhhhhhh\",\"ar\":\"ggggggggggggg\"}\";s:11:\"description\";s:66:\"{\"en\":\"ggggggggggggggggggggg\",\"ar\":\"gggggggggggggggggggggggggggg\"}\";s:7:\"content\";s:58:\"{\"en\":\"gggggggggggggggggggggggg\",\"ar\":\"ggggggggggggggggg\"}\";s:5:\"price\";N;s:6:\"active\";i:1;s:8:\"position\";i:1;s:10:\"created_by\";N;s:10:\"updated_by\";N;s:10:\"created_at\";s:19:\"2025-07-06 10:07:30\";s:10:\"updated_at\";s:19:\"2025-07-10 11:21:44\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:5:\"title\";s:5:\"array\";s:11:\"description\";s:5:\"array\";s:7:\"content\";s:5:\"array\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:0:\"\";}s:12:\"translatable\";a:3:{i:0;s:5:\"title\";i:1;s:11:\"description\";i:2;s:7:\"content\";}s:20:\"\0*\0translationLocale\";N;}', 2067506504),
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:133:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:19:\"dashboard dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"list services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"show services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:15:\"create services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"edit services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"delete services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"active services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:13:\"list products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"show products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"create products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"edit products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:15:\"delete products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:15:\"active products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:12:\"list sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:12:\"show sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:14:\"create sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:12:\"edit sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:14:\"delete sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:14:\"active sliders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:10:\"list whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:10:\"show whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:12:\"create whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:10:\"edit whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:12:\"delete whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"active whyUs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:10:\"list about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:10:\"show about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:12:\"create about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:10:\"edit about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:12:\"delete about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:12:\"active about\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:13:\"list contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:13:\"show contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:15:\"create contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:13:\"edit contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:15:\"delete contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:15:\"active contacts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:17:\"list subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:17:\"show subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:19:\"create subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:17:\"edit subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:19:\"delete subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:19:\"active subscription\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:17:\"list developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:17:\"show developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:19:\"create developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:17:\"edit developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:19:\"delete developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:19:\"active developments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:13:\"list packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:13:\"show packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:15:\"create packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:13:\"edit packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:15:\"delete packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:15:\"active packages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:19:\"list packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:19:\"show packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:21:\"create packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:19:\"edit packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:21:\"delete packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:21:\"active packageDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:13:\"list features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:13:\"show features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:15:\"create features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:13:\"edit features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:15:\"delete features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:15:\"active features\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:17:\"list infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:17:\"show infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:19:\"create infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:17:\"edit infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:19:\"delete infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:19:\"active infoSections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:24:\"list infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:24:\"show infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:26:\"create infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:24:\"edit infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:26:\"delete infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:26:\"active infoSectionsDetails\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:16:\"list infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:16:\"show infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:18:\"create infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:16:\"edit infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:18:\"delete infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:18:\"active infoOptions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:20:\"list productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:20:\"show productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:22:\"create productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:20:\"edit productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:22:\"delete productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:22:\"active productFeatures\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:20:\"list productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:20:\"show productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:22:\"create productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:20:\"edit productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:22:\"delete productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:22:\"active productServices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:9:\"list faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:9:\"show faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:11:\"create faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:9:\"edit faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:11:\"delete faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:11:\"active faqs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:10:\"list users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:10:\"show users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:12:\"create users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:10:\"edit users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:12:\"delete users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:12:\"active users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:10:\"list roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:10:\"show roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:12:\"create roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:10:\"edit roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:12:\"delete roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:12:\"active roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:16:\"list permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:16:\"show permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:18:\"create permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:16:\"edit permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:18:\"delete permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:18:\"active permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:13:\"list settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:13:\"show settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:15:\"create settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:13:\"edit settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:15:\"delete settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:15:\"active settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:12:\"list reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:128;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:12:\"show reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:14:\"create reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:130;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:12:\"edit reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:14:\"delete reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:132;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:14:\"active reviews\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super admin\";s:1:\"c\";s:3:\"web\";}}}', 1753209457);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"Aut dolor consequat\",\"ar\":\"Cillum enim in commo\"}', '{\"en\":\"Nostrum doloribus ve\",\"ar\":\"Voluptatem lorem cum\"}', 0, 30, NULL, NULL, '2025-07-06 07:06:18', '2025-07-23 22:12:11'),
(3, '{\"en\":\"Accusamus sit volupt\",\"ar\":\"Ipsum ratione nostru\"}', '{\"en\":\"Ipsa praesentium co\",\"ar\":\"Eum ut consequatur u\"}', 1, 1, NULL, NULL, '2025-07-22 15:38:51', '2025-07-22 15:38:51'),
(4, '{\"en\":\"Quis culpa sunt ut\",\"ar\":\"Voluptatem non ipsa\"}', '{\"en\":\"Sed voluptatum dolor\",\"ar\":\"Fugit dolorum quo q\"}', 1, 82, NULL, NULL, '2025-07-22 15:39:36', '2025-07-22 15:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `active`, `created_at`, `updated_at`) VALUES
(7, 'HASSAN MOHAMED', 'hassanaamer048@gmail.com', '01129730475', 'welcome', 0, '2025-07-25 12:09:12', '2025-07-25 12:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_class` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon_class`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Et et consequat Vol\",\"ar\":\"Sit facilis in quia\"}', 'bi bi-activity', '{\"en\":\"Voluptate cum ipsum \",\"ar\":\"Perspiciatis sed re\"}', 1, 12, NULL, NULL, '2025-06-24 07:48:17', '2025-06-24 07:50:02'),
(2, '{\"en\":\"Voluptatem est aut \",\"ar\":\"Ipsum quas nesciunt\"}', 'bi bi-arrow-through-heart-fill', '{\"en\":\"Ut dolores aperiam a\",\"ar\":\"Sed ratione aliquid \"}', 1, 52, NULL, NULL, '2025-07-06 06:55:49', '2025-07-06 06:55:49'),
(3, '{\"en\":\"Est aliquam quasi e\",\"ar\":\"Quaerat itaque sint \"}', 'Voluptatem voluptate', '{\"en\":\"Aut veritatis eum do\",\"ar\":\"Doloremque in elit \"}', 1, 75, NULL, NULL, '2025-07-19 17:09:57', '2025-07-19 17:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\Setting', 1, 'cf1c65ed-2ad0-45f6-ac62-93115c661e1a', 'reviews', '8', '8.jpg', 'image/jpeg', 'media', 'media', 565619, '[]', '[]', '[]', '[]', 4, '2025-07-06 06:21:39', '2025-07-06 06:21:39'),
(10, 'App\\Models\\Slider', 2, 'e314765e-a0ef-4e42-8569-e23981328518', 'sliders', 'client-1', 'client-1.png', 'image/png', 'media', 'media', 5282, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:57:34', '2025-07-06 06:57:34'),
(11, 'App\\Models\\Slider', 3, 'b7c15560-ba03-4d7b-9194-50780f8a7d7b', 'sliders', 'client-2', 'client-2.png', 'image/png', 'media', 'media', 4582, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:57:42', '2025-07-06 06:57:42'),
(12, 'App\\Models\\Slider', 4, 'f693b7f1-57c7-4fb2-a2ca-1a9671b81201', 'sliders', 'client-3', 'client-3.png', 'image/png', 'media', 'media', 4707, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:57:50', '2025-07-06 06:57:50'),
(13, 'App\\Models\\Slider', 5, '4c1d4224-d745-4489-b514-c80d543844ff', 'sliders', 'client-4', 'client-4.png', 'image/png', 'media', 'media', 4587, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:57:57', '2025-07-06 06:57:57'),
(14, 'App\\Models\\Slider', 6, '72d4aa47-eae5-4601-8baf-0b3273f1caf6', 'sliders', 'client-5', 'client-5.png', 'image/png', 'media', 'media', 5123, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:58:05', '2025-07-06 06:58:05'),
(15, 'App\\Models\\Slider', 7, '8c34e2ab-ab10-4623-9f8f-ed0c45bea7e8', 'sliders', 'client-6', 'client-6.png', 'image/png', 'media', 'media', 3450, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:58:14', '2025-07-06 06:58:14'),
(16, 'App\\Models\\Slider', 8, 'e984fa17-7d20-41b4-8f9b-a32be5e70db5', 'sliders', 'client-7', 'client-7.png', 'image/png', 'media', 'media', 5616, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:58:22', '2025-07-06 06:58:22'),
(17, 'App\\Models\\Slider', 9, '1b14107f-cf19-4179-9da1-c156c4db3e4d', 'sliders', 'client-8', 'client-8.png', 'image/png', 'media', 'media', 9010, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:58:30', '2025-07-06 06:58:30'),
(18, 'App\\Models\\Slider', 10, '3312de9a-f577-4704-a674-fa3ba1edcbe6', 'sliders', 'client-8', 'client-8.png', 'image/png', 'media', 'media', 9010, '[]', '[]', '[]', '[]', 1, '2025-07-06 06:58:30', '2025-07-06 06:58:30'),
(19, 'App\\Models\\Service', 1, '3ae298dd-6acc-4b87-b610-583953d47ec9', 'services', '1', '1.jpg', 'image/jpeg', 'media', 'media', 237640, '[]', '[]', '[]', '[]', 1, '2025-07-06 07:03:58', '2025-07-06 07:03:58'),
(20, 'App\\Models\\Service', 2, 'b30af726-4d91-4a88-9c09-2f5439536f77', 'services', '2', '2.jpg', 'image/jpeg', 'media', 'media', 1644391, '[]', '[]', '[]', '[]', 1, '2025-07-06 07:05:12', '2025-07-06 07:05:12'),
(22, 'App\\Models\\Product', 1, '8951cc98-9039-431f-abf4-3200671c923a', 'product_collection', '1', '1.jpg', 'image/jpeg', 'media', 'media', 237640, '[]', '[]', '[]', '[]', 2, '2025-07-06 07:06:48', '2025-07-06 07:06:48'),
(23, 'App\\Models\\Product', 1, '482c3d11-f757-4342-84a4-3670c93887ac', 'product_collection', '2', '2.jpg', 'image/jpeg', 'media', 'media', 1644391, '[]', '[]', '[]', '[]', 3, '2025-07-06 07:06:48', '2025-07-06 07:06:48'),
(24, 'App\\Models\\Product', 1, 'ef15a3e5-e432-45ed-9321-b08e35d75bd5', 'product_collection', '3', '3.jpg', 'image/jpeg', 'media', 'media', 112197, '[]', '[]', '[]', '[]', 4, '2025-07-06 07:06:48', '2025-07-06 07:06:48'),
(25, 'App\\Models\\Product', 1, '933e27ee-b6ee-43d5-9acf-fcd2818fc15c', 'product_collection', '8', '8.jpg', 'image/jpeg', 'media', 'media', 565619, '[]', '[]', '[]', '[]', 5, '2025-07-06 07:06:48', '2025-07-06 07:06:48'),
(27, 'App\\Models\\Product', 2, 'be962461-d0a6-43bb-84ad-003cf68588ea', 'product_collection', '2001', '2001.jpg', 'image/jpeg', 'media', 'media', 364273, '[]', '[]', '[]', '[]', 2, '2025-07-06 07:07:41', '2025-07-06 07:07:41'),
(28, 'App\\Models\\Product', 2, 'ee7d44df-c1ca-46d5-9618-b7f1361bd15f', 'product_collection', '2022', '2022.jpg', 'image/jpeg', 'media', 'media', 379700, '[]', '[]', '[]', '[]', 3, '2025-07-06 07:07:41', '2025-07-06 07:07:41'),
(29, 'App\\Models\\Product', 2, 'f5e5c063-159c-4d37-9e2c-04494e5a748e', 'product_collection', '215', '215.jpg', 'image/jpeg', 'media', 'media', 334895, '[]', '[]', '[]', '[]', 4, '2025-07-09 08:43:46', '2025-07-09 08:43:46'),
(30, 'App\\Models\\Product', 2, '5d207c17-8812-4bd6-9881-4429a3681258', 'product_collection', '1', '1.jpg', 'image/jpeg', 'media', 'media', 237640, '[]', '[]', '[]', '[]', 5, '2025-07-10 08:17:29', '2025-07-10 08:17:29'),
(31, 'App\\Models\\Product', 2, '14780e3a-d575-4b5c-bf44-632132bfaa5f', 'product_collection', '215', '215.jpg', 'image/jpeg', 'media', 'media', 334895, '[]', '[]', '[]', '[]', 6, '2025-07-10 08:20:16', '2025-07-10 08:20:16'),
(33, 'App\\Models\\Product', 2, 'a4843e64-e755-4e46-95b0-3bb40dab0639', 'products', '1', '1.jpg', 'image/jpeg', 'media', 'media', 237640, '[]', '[]', '[]', '[]', 7, '2025-07-10 08:21:15', '2025-07-10 08:21:15'),
(35, 'App\\Models\\Setting', 1, '292a7424-e395-4485-a480-fa3954473cb8', 'callToActions', 'cta-bg', 'cta-bg.jpg', 'image/jpeg', 'media', 'media', 494897, '[]', '[]', '[]', '[]', 10, '2025-07-19 17:08:03', '2025-07-19 17:08:03'),
(36, 'App\\Models\\Feature', 3, '4875001b-d858-487b-92ba-43a7e3ee6c3e', 'features', 'features-1', 'features-1.jpg', 'image/jpeg', 'media', 'media', 57484, '[]', '[]', '[]', '[]', 1, '2025-07-19 17:10:34', '2025-07-19 17:10:34'),
(37, 'App\\Models\\Feature', 2, 'dba4acec-13b0-467d-b5e7-9af75629a6d2', 'features', 'features-2', 'features-2.jpg', 'image/jpeg', 'media', 'media', 52627, '[]', '[]', '[]', '[]', 1, '2025-07-19 17:10:40', '2025-07-19 17:10:40'),
(38, 'App\\Models\\Feature', 1, 'd5e813a7-3738-4e06-835c-76a314dbc87e', 'features', 'service-4', 'service-4.jpg', 'image/jpeg', 'media', 'media', 97415, '[]', '[]', '[]', '[]', 1, '2025-07-19 17:10:47', '2025-07-19 17:10:47'),
(41, 'App\\Models\\Service', 3, 'f90e2070-100e-44dc-b3cb-755f82c7cd7d', 'services', '30', '30.jpg', 'image/jpeg', 'media', 'media', 39099, '[]', '[]', '[]', '[]', 1, '2025-07-20 10:18:16', '2025-07-20 10:18:16'),
(43, 'App\\Models\\Service', 4, 'd56a115b-a8b5-48e0-942a-480a12b32909', 'services', '8', '8.jpg', 'image/jpeg', 'media', 'media', 565619, '[]', '[]', '[]', '[]', 1, '2025-07-20 10:20:24', '2025-07-20 10:20:24'),
(44, 'App\\Models\\Service', 5, '953c1263-2d62-4555-be66-ee70f81a0537', 'services', '9', '9.jpg', 'image/jpeg', 'media', 'media', 78788, '[]', '[]', '[]', '[]', 1, '2025-07-20 10:20:53', '2025-07-20 10:20:53'),
(47, 'App\\Models\\Product', 3, '3364cb85-7d92-4b3d-8d82-72bd55c08816', 'products', '8', '8.jpg', 'image/jpeg', 'media', 'media', 565619, '[]', '[]', '[]', '[]', 1, '2025-07-21 15:56:06', '2025-07-21 15:56:06'),
(48, 'App\\Models\\Product', 1, 'ed88ccab-963f-4cac-9276-476cce9852b9', 'products', '3', '3.jpg', 'image/jpeg', 'media', 'media', 112197, '[]', '[]', '[]', '[]', 6, '2025-07-21 15:57:32', '2025-07-21 15:57:32'),
(49, 'App\\Models\\Product', 4, 'f8c57805-cbde-49ca-80ff-dfddba282bd4', 'products', '2', '2.jpg', 'image/jpeg', 'media', 'media', 1644391, '[]', '[]', '[]', '[]', 1, '2025-07-21 15:57:41', '2025-07-21 15:57:41'),
(55, 'App\\Models\\WhatWeDo', 2, 'edcb13d7-ddd4-4115-860d-7ff07299a086', 'what_we_do', 'features-1', 'features-1.jpg', 'image/jpeg', 'media', 'media', 57484, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:01:23', '2025-07-22 16:01:23'),
(56, 'App\\Models\\WhatWeDo', 1, 'e63bf63b-db9b-4599-b4c7-478606accb7f', 'what_we_do', 'features-2', 'features-2.jpg', 'image/jpeg', 'media', 'media', 52627, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:01:32', '2025-07-22 16:01:32'),
(57, 'App\\Models\\ValueAdd', 1, '62a613a0-2bdd-436b-bdbc-809be1c53c23', 'value_add', 'about', 'about.jpg', 'image/jpeg', 'media', 'media', 128917, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:13:10', '2025-07-22 16:13:10'),
(58, 'App\\Models\\Blog', 1, 'f3e56304-1451-4f86-9d5e-a28e5eee7132', 'blogs', 'testimonials-bg', 'testimonials-bg.jpg', 'image/jpeg', 'media', 'media', 299670, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:23:11', '2025-07-22 16:23:11'),
(59, 'App\\Models\\Product', 5, '63a799b1-9ffa-4980-b332-810719b95f01', 'products', 'service-4', 'service-4.jpg', 'image/jpeg', 'media', 'media', 97415, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:25:19', '2025-07-22 16:25:19'),
(60, 'App\\Models\\Product', 6, '335f3bc8-25eb-429f-89f1-9643dfa8aefb', 'products', 'service-3', 'service-3.jpg', 'image/jpeg', 'media', 'media', 122799, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:26:23', '2025-07-22 16:26:23'),
(61, 'App\\Models\\Product', 7, '18ef7dd0-ed3b-4ede-bcec-e5fe7292c5e9', 'products', 'service-5', 'service-5.jpg', 'image/jpeg', 'media', 'media', 106249, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:26:35', '2025-07-22 16:26:35'),
(62, 'App\\Models\\Product', 8, '70d98ed2-d2b8-4fd8-8404-40c23066cd4e', 'products', 'service-6', 'service-6.jpg', 'image/jpeg', 'media', 'media', 233549, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:26:54', '2025-07-22 16:26:54'),
(63, 'App\\Models\\Product', 9, 'ebd39043-a7a3-460e-a8d1-2ca77c39ab57', 'products', 'service-1', 'service-1.jpg', 'image/jpeg', 'media', 'media', 139371, '[]', '[]', '[]', '[]', 1, '2025-07-22 16:27:04', '2025-07-22 16:27:04'),
(64, 'App\\Models\\TechnicalDataSheets', 1, '6743d71c-5356-4526-a1de-b8c8a9f83338', 'technical_data_sheets', 'Dethar', 'Dethar.pdf', 'application/pdf', 'media', 'media', 1517095, '[]', '[]', '[]', '[]', 1, '2025-07-23 15:56:07', '2025-07-23 15:56:07'),
(68, 'App\\Models\\Page', 2, 'c845abce-8be1-426a-bf92-88ee7080d61c', 'pages', 'page-title-bg', 'page-title-bg.jpg', 'image/jpeg', 'media', 'media', 368217, '[]', '[]', '[]', '[]', 1, '2025-07-23 20:28:33', '2025-07-23 20:28:33'),
(70, 'App\\Models\\Page', 2, 'cbffe5ef-1fb8-462b-b701-6deac9f38ae2', 'about', 'service-3', 'service-3.jpg', 'image/jpeg', 'media', 'media', 122799, '[]', '[]', '[]', '[]', 2, '2025-07-23 20:46:34', '2025-07-23 20:46:34'),
(71, 'App\\Models\\Setting', 1, '66ccf8d0-2a9e-45b2-9450-739262511b2f', 'vision', 'features-4', 'features-4.jpg', 'image/jpeg', 'media', 'media', 119751, '[]', '[]', '[]', '[]', 15, '2025-07-23 21:22:51', '2025-07-23 21:22:51'),
(72, 'App\\Models\\Setting', 1, '279c6f25-09b7-43bd-b075-ebe4c730af70', 'mission', 'service-5', 'service-5.jpg', 'image/jpeg', 'media', 'media', 106249, '[]', '[]', '[]', '[]', 16, '2025-07-23 21:22:51', '2025-07-23 21:22:51'),
(73, 'App\\Models\\Setting', 1, '86c872a8-74d8-4f62-9678-d00681f64bfe', 'vision_image', 'features-1', 'features-1.jpg', 'image/jpeg', 'media', 'media', 57484, '[]', '[]', '[]', '[]', 17, '2025-07-23 21:55:24', '2025-07-23 21:55:24'),
(74, 'App\\Models\\Setting', 1, '4e23e408-0d4e-4b5b-bcc9-9ca51973a2e1', 'mission_image', 'features-4', 'features-4.jpg', 'image/jpeg', 'media', 'media', 119751, '[]', '[]', '[]', '[]', 18, '2025-07-23 21:55:24', '2025-07-23 21:55:24'),
(77, 'App\\Models\\User', 1, '6f3a0397-d578-4005-bdae-1f370dd13f24', 'users', 'delete the slogan fr', 'delete-the-slogan-fr.png', 'image/png', 'media', 'media', 406411, '[]', '[]', '[]', '[]', 1, '2025-07-23 22:20:33', '2025-07-23 22:20:33'),
(79, 'App\\Models\\Page', 3, '5e2eec25-3e90-4036-989c-08e8bfd505aa', 'pages', 'service-5', 'service-5.jpg', 'image/jpeg', 'media', 'media', 106249, '[]', '[]', '[]', '[]', 1, '2025-07-24 10:17:56', '2025-07-24 10:17:56'),
(80, 'App\\Models\\Page', 1, 'c0f4cbf8-cb68-475a-8fe6-441117870d41', 'pages', 'features-1', 'features-1.jpg', 'image/jpeg', 'media', 'media', 57484, '[]', '[]', '[]', '[]', 1, '2025-07-24 10:26:54', '2025-07-24 10:26:54'),
(81, 'App\\Models\\TechnicalDataSheets', 2, '01208e2c-b734-46d4-b561-d03888b82941', 'technical_data_sheets', 'Dethar', 'Dethar.pdf', 'application/pdf', 'media', 'media', 1517095, '[]', '[]', '[]', '[]', 1, '2025-07-24 10:37:23', '2025-07-24 10:37:23'),
(82, 'App\\Models\\Page', 4, '86a783c3-5c97-4261-a52b-219ae6156ec0', 'pages', 'service-3', 'service-3.jpg', 'image/jpeg', 'media', 'media', 122799, '[]', '[]', '[]', '[]', 1, '2025-07-25 11:34:07', '2025-07-25 11:34:07'),
(83, 'App\\Models\\Page', 5, '255fa4de-2598-4083-8931-df79df4553f5', 'pages', 'service-1', 'service-1.jpg', 'image/jpeg', 'media', 'media', 139371, '[]', '[]', '[]', '[]', 1, '2025-07-25 11:37:37', '2025-07-25 11:37:37'),
(85, 'App\\Models\\Page', 6, '276d1fb3-37fb-4399-af83-c290f639a6ee', 'pages', 'services', 'services.jpg', 'image/jpeg', 'media', 'media', 54414, '[]', '[]', '[]', '[]', 1, '2025-07-25 11:51:18', '2025-07-25 11:51:18'),
(86, 'App\\Models\\Page', 7, '0817bd9f-3086-4358-a9af-7a5fb1e8f0fe', 'pages', 'features-3', 'features-3.jpg', 'image/jpeg', 'media', 'media', 75060, '[]', '[]', '[]', '[]', 1, '2025-07-25 11:54:50', '2025-07-25 11:54:50'),
(88, 'App\\Models\\Setting', 1, 'b9caa4dc-dd62-44fe-8e20-c5d01bb83e9e', 'baners', 'world-dotted-map', 'world-dotted-map.png', 'image/png', 'media', 'media', 200866, '[]', '[]', '[]', '[]', 20, '2025-07-25 12:17:48', '2025-07-25 12:17:48'),
(89, 'App\\Models\\Setting', 1, '2a7d0233-28e0-43dc-a740-a8e6631ea151', 'logo', 'Purple and Yellow Simple Signs your Marketing is not Working Instagram Post 7g', 'Purple-and-Yellow-Simple-Signs-your-Marketing-is-not-Working-Instagram-Post-7g.png', 'image/png', 'media', 'media', 138818, '[]', '[]', '[]', '[]', 21, '2025-07-26 20:26:40', '2025-07-26 20:26:40'),
(92, 'App\\Models\\Setting', 1, 'c929887a-f3ed-4612-92a2-3031cce63a5b', 'about', 'Purple and Yellow Simple Signs your Marketing is not Working Instagram Post 7r', 'Purple-and-Yellow-Simple-Signs-your-Marketing-is-not-Working-Instagram-Post-7r.png', 'image/png', 'media', 'media', 137476, '[]', '[]', '[]', '[]', 22, '2025-07-26 20:31:31', '2025-07-26 20:31:31'),
(94, 'App\\Models\\Page', 8, '388b5733-4c58-4f99-87a8-e02ad19eff35', 'pages', '2001', '2001.jpg', 'image/jpeg', 'media', 'media', 364273, '[]', '[]', '[]', '[]', 1, '2025-07-26 21:08:56', '2025-07-26 21:08:56'),
(95, 'App\\Models\\Page', 9, '51f88cab-9d13-4ac7-a089-6ed49251c41e', 'pages', '1', '1.jpg', 'image/jpeg', 'media', 'media', 237640, '[]', '[]', '[]', '[]', 1, '2025-07-27 09:27:18', '2025-07-27 09:27:18'),
(96, 'App\\Models\\Blog', 2, '3c2ef2f3-9a26-4cef-9380-422ef673cf57', 'blogs', '30', '30.jpg', 'image/jpeg', 'media', 'media', 39099, '[]', '[]', '[]', '[]', 1, '2025-07-27 09:30:43', '2025-07-27 09:30:43'),
(97, 'App\\Models\\Page', 10, '8e3e7094-ece1-4169-aecd-3c9a7425f9d6', 'pages', '3', '3.jpg', 'image/jpeg', 'media', 'media', 112197, '[]', '[]', '[]', '[]', 1, '2025-07-27 09:38:48', '2025-07-27 09:38:48'),
(98, 'App\\Models\\Page', 11, 'c4ff510c-4455-4ddf-a78a-3478933acd52', 'pages', 'dsd', 'dsd.jpg', 'image/jpeg', 'media', 'media', 61047, '[]', '[]', '[]', '[]', 1, '2025-07-27 09:46:28', '2025-07-27 09:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_21_070949_create_categories_table', 1),
(5, '2025_04_22_135524_create_services_table', 1),
(6, '2025_04_23_135056_create_media_table', 1),
(7, '2025_04_23_135340_create_contacts_table', 1),
(8, '2025_04_23_135504_create_products_table', 1),
(9, '2025_04_23_135540_create_settings_table', 1),
(10, '2025_04_27_073910_create_sliders_table', 1),
(11, '2025_04_27_143010_create_subscriptions_table', 1),
(12, '2025_04_29_073649_create_features_table', 1),
(13, '2025_05_08_053812_create_permission_tables', 1),
(14, '2025_06_24_081928_create_reviews_table', 1),
(15, '2025_07_21_193549_create_blog_categories_table', 2),
(16, '2025_07_21_193559_create_value_add_categories_table', 2),
(17, '2025_07_21_193652_create_what_we_do_categories_table', 2),
(18, '2025_08_21_193244_create_pages_table', 2),
(19, '2025_08_21_193313_create_blogs_table', 2),
(20, '2025_08_21_193341_create_what_we_dos_table', 2),
(21, '2025_08_21_193401_create_value_adds_table', 2),
(22, '2025_07_23_183131_create_technical_data_sheets_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `description`, `content`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"get in touch\",\"ar\":\"get in touch\"}', '{\"en\":\"get in touch\",\"ar\":\"get in touch\"}', '{\"en\":\"Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt \",\"ar\":\"Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt Aut ratione sint opt \"}', NULL, 1, 1, NULL, NULL, '2025-07-23 16:17:03', '2025-07-23 16:40:04'),
(2, '{\"en\":\"about\",\"ar\":\"about\"}', '{\"en\":\"About\",\"ar\":\"About\"}', '{\"en\":\"Dolor iure expedita id fuga asperiores qui sunt consequatur minima. \\r\\nQuidem voluptas deleniti.\\r\\nSit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.\",\"ar\":\"Dolor iure expedita id fuga asperiores qui sunt consequatur minima. \\r\\nQuidem voluptas deleniti.\\r\\nSit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.veritatis asperiores placeat.\"}', '{\"en\":\"Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.\\r\\n\\r\\nDolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.\",\"ar\":\"Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.\\r\\n\\r\\nDolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.                       \\r\\n\"}', 1, 2, NULL, NULL, '2025-07-23 16:52:37', '2025-07-23 21:12:36'),
(3, '{\"en\":\"tds\",\"ar\":\"tds\"}', '{\"en\":\"Technical Data Sheets\",\"ar\":\"Technical Data Sheets\"}', '{\"en\":\"Technical Data Sheets\",\"ar\":\"Technical Data Sheets\"}', NULL, 1, 3, NULL, NULL, '2025-07-24 10:17:56', '2025-07-25 12:25:19'),
(4, '{\"en\":\"our products\",\"ar\":\"our products\"}', '{\"en\":\"our products\",\"ar\":\"our products\"}', '{\"en\":\"our products\",\"ar\":\"our products\"}', NULL, 1, 2, NULL, NULL, '2025-07-25 11:34:06', '2025-07-25 11:34:06'),
(5, '{\"en\":\"what we do\",\"ar\":\"what we do\"}', '{\"en\":\"what we do\",\"ar\":\"what we do\"}', '{\"en\":\"what we do\",\"ar\":\"what we do\"}', NULL, 1, 12, NULL, NULL, '2025-07-25 11:37:37', '2025-07-25 11:37:37'),
(6, '{\"en\":\"value add\",\"ar\":\"value add\"}', '{\"en\":\"value add\",\"ar\":\"value add\"}', '{\"en\":\"value add\",\"ar\":\"value add\"}', NULL, 1, 6, NULL, NULL, '2025-07-25 11:48:16', '2025-07-25 11:48:16'),
(7, '{\"en\":\"blogs\",\"ar\":\"blogs\"}', '{\"en\":\"blogs\",\"ar\":\"blogs\"}', '{\"en\":\"blogs\",\"ar\":\"blogs\"}', NULL, 1, 5, NULL, NULL, '2025-07-25 11:54:50', '2025-07-25 11:54:50'),
(8, '{\"en\":\"product details\",\"ar\":\"product details\"}', '{\"en\":\"Product Details\",\"ar\":\"Product Details\"}', '{\"en\":\"Product Details\",\"ar\":\"Product Details\"}', NULL, 1, 1, NULL, NULL, '2025-07-26 20:53:56', '2025-07-26 21:08:56'),
(9, '{\"en\":\"blog details\",\"ar\":\"blog details\"}', '{\"en\":\"blog details\",\"ar\":\"blog details\"}', '{\"en\":\"blog details\",\"ar\":\"blog details\"}', NULL, 1, 55, NULL, NULL, '2025-07-27 09:27:17', '2025-07-27 09:27:17'),
(10, '{\"en\":\"value add details\",\"ar\":\"value add details\"}', '{\"en\":\"value add details\",\"ar\":\"value add details\"}', '{\"en\":\"value add details\",\"ar\":\"value add details\"}', NULL, 1, 88, NULL, NULL, '2025-07-27 09:38:48', '2025-07-27 09:38:48'),
(11, '{\"en\":\"what we do details\",\"ar\":\"what we do details\"}', '{\"en\":\"what we do details\",\"ar\":\"what we do details\"}', '{\"en\":\"what we do details\",\"ar\":\"what we do details\"}', NULL, 1, 22, NULL, NULL, '2025-07-27 09:46:28', '2025-07-27 09:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard dashboard', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(2, 'list services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(3, 'show services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(4, 'create services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(5, 'edit services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(6, 'delete services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(7, 'active services', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(8, 'list products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(9, 'show products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(10, 'create products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(11, 'edit products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(12, 'delete products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(13, 'active products', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(14, 'list sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(15, 'show sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(16, 'create sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(17, 'edit sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(18, 'delete sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(19, 'active sliders', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(20, 'list whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(21, 'show whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(22, 'create whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(23, 'edit whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(24, 'delete whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(25, 'active whyUs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(26, 'list about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(27, 'show about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(28, 'create about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(29, 'edit about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(30, 'delete about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(31, 'active about', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(32, 'list contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(33, 'show contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(34, 'create contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(35, 'edit contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(36, 'delete contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(37, 'active contacts', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(38, 'list subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(39, 'show subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(40, 'create subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(41, 'edit subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(42, 'delete subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(43, 'active subscription', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(44, 'list developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(45, 'show developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(46, 'create developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(47, 'edit developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(48, 'delete developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(49, 'active developments', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(50, 'list packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(51, 'show packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(52, 'create packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(53, 'edit packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(54, 'delete packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(55, 'active packages', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(56, 'list packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(57, 'show packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(58, 'create packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(59, 'edit packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(60, 'delete packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(61, 'active packageDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(62, 'list features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(63, 'show features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(64, 'create features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(65, 'edit features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(66, 'delete features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(67, 'active features', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(68, 'list infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(69, 'show infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(70, 'create infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(71, 'edit infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(72, 'delete infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(73, 'active infoSections', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(74, 'list infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(75, 'show infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(76, 'create infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(77, 'edit infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(78, 'delete infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(79, 'active infoSectionsDetails', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(80, 'list infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(81, 'show infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(82, 'create infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(83, 'edit infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(84, 'delete infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(85, 'active infoOptions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(86, 'list productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(87, 'show productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(88, 'create productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(89, 'edit productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(90, 'delete productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(91, 'active productFeatures', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(92, 'list productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(93, 'show productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(94, 'create productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(95, 'edit productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(96, 'delete productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(97, 'active productServices', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(98, 'list faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(99, 'show faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(100, 'create faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(101, 'edit faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(102, 'delete faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(103, 'active faqs', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(104, 'list users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(105, 'show users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(106, 'create users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(107, 'edit users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(108, 'delete users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(109, 'active users', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(110, 'list roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(111, 'show roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(112, 'create roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(113, 'edit roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(114, 'delete roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(115, 'active roles', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(116, 'list permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(117, 'show permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(118, 'create permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(119, 'edit permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(120, 'delete permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(121, 'active permissions', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(122, 'list settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(123, 'show settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(124, 'create settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(125, 'edit settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(126, 'delete settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(127, 'active settings', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(128, 'list reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(129, 'show reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(130, 'create reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(131, 'edit reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(132, 'delete reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(133, 'active reviews', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `content`, `price`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 2, '{\"en\":\"Praesentium et aliqu\",\"ar\":\"Eligendi et mollitia\"}', '{\"en\":\"Est soluta ea in qu\",\"ar\":\"A eligendi illo quas\"}', '{\"en\":\"Ad consequatur lore\",\"ar\":\"Qui omnis quia velit\"}', NULL, 1, 20, NULL, NULL, '2025-07-22 16:25:19', '2025-07-26 20:33:02'),
(6, 4, '{\"en\":\"Aliquam quisquam asp\",\"ar\":\"Quia quaerat deserun\"}', '{\"en\":\"Quaerat et dignissim\",\"ar\":\"Dolorem qui non magn\"}', '{\"en\":\"Quasi sed dignissimo\",\"ar\":\"Provident magna cil\"}', NULL, 1, 79, NULL, NULL, '2025-07-22 16:26:23', '2025-07-26 20:33:01'),
(7, 4, '{\"en\":\"Quae cumque quia omn\",\"ar\":\"Ut suscipit cillum a\"}', '{\"en\":\"Ut ea possimus veli\",\"ar\":\"Anim et quasi quia i\"}', '{\"en\":\"Nihil pariatur Dolo\",\"ar\":\"Ipsum nesciunt enim\"}', NULL, 1, 84, NULL, NULL, '2025-07-22 16:26:35', '2025-07-26 20:33:01'),
(8, 4, '{\"en\":\"Totam id temporibus\",\"ar\":\"Laboriosam voluptat\"}', '{\"en\":\"Ducimus velit vitae\",\"ar\":\"Eum quia deserunt om\"}', '{\"en\":\"Elit iste cum aut l\",\"ar\":\"Nisi officia dolore \"}', NULL, 1, 60, NULL, NULL, '2025-07-22 16:26:54', '2025-07-26 20:33:00'),
(9, 3, '{\"en\":\"Sed similique molest\",\"ar\":\"Officiis cum omnis v\"}', '{\"en\":\"Blanditiis duis comm\",\"ar\":\"Pariatur Sapiente l\"}', '{\"ar\":null}', NULL, 1, 18, NULL, NULL, '2025-07-22 16:27:04', '2025-07-26 21:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `stars` int DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(2, 'admin', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01'),
(3, 'user', 'web', '2025-06-24 07:48:01', '2025-06-24 07:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Et dolorem sit modi \",\"ar\":\"In aliquam ut minim \"}', '{\"en\":\"Nisi maiores ex nisi\",\"ar\":\"Iure nostrud volupta\"}', 1, 15, NULL, NULL, '2025-07-06 07:03:58', '2025-07-06 07:05:04'),
(2, '{\"en\":\"Velit quia voluptas\",\"ar\":\"Quia architecto dese\"}', '{\"en\":\"Ut qui et id incidun\",\"ar\":\"Quo ut dolores modi \"}', 1, 24, NULL, NULL, '2025-07-06 07:05:12', '2025-07-06 07:05:12'),
(3, '{\"en\":\"Iure lorem necessita\",\"ar\":\"Sit lorem deleniti \"}', '{\"en\":\"Quaerat ut amet ape\",\"ar\":\"Quibusdam recusandae\"}', 1, 72, NULL, NULL, '2025-07-20 10:18:16', '2025-07-20 10:18:16'),
(4, '{\"en\":\"Aut et ullamco ea vo\",\"ar\":\"Provident aut rerum\"}', '{\"en\":\"Quo explicabo Quis \",\"ar\":\"Rem eos id eos et n\"}', 1, 21, NULL, NULL, '2025-07-20 10:18:30', '2025-07-20 10:18:30'),
(5, '{\"en\":\"Aut nihil reiciendis\",\"ar\":\"Dolore est quae lib\"}', '{\"en\":\"At asperiores rem si\",\"ar\":\"Sint aut Nam vel ali\"}', 1, 79, NULL, NULL, '2025-07-20 10:20:53', '2025-07-20 10:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dTjxMrKdMRdjCM6zZeppqkXw0V1cnFwAtiin05pC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWo4UklGejVlUk5BeENtZENDN3lBOEZHQ3hGYWlMalZJTXZxaFRyUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZGV0aGFyLnRlc3QvY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1753620798);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrights` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `email`, `about`, `vision`, `mission`, `description`, `address`, `phone`, `map`, `whatsapp`, `facebook`, `twitter`, `youtube`, `linkedIn`, `instagram`, `copyrights`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"Dethar\",\"en\":\"Dethar\"}', '{\"en\":\"Dethar about\",\"ar\":\"Dethar about\"}', 'operation@dethar.net', '{\"en\":\"Dethar Founded in 2003, An Egypt-based import and export company committed to bridging global markets with reliable,streamlined trade solutions.\\r\\n\\r\\nBacked by a leadership team with deep expertise in freight forwarding and international logistics, Dethar offers a strategic gateway for partners seeking to trade with Egypt and beyond.es placeat.\",\"ar\":\"Dethar Founded in 2003, An Egypt-based import and export company committed to bridging global markets with reliable,streamlined trade solutions.\\r\\n\\r\\nBacked by a leadership team with deep expertise in freight forwarding and international logistics, Dethar offers a strategic gateway for partners seeking to trade with Egypt and beyond.es placeat.\"}', '{\"en\":\"To redefine how global trade connects with logistics—empowering businesses through transparent, agile, and insight-driven import/export solutions from the heart of Egypt to the world.\",\"ar\":\"To redefine how global trade connects with logistics—empowering businesses through transparent, agile, and insight-driven import/export solutions from the heart of Egypt to the world.\"}', '{\"en\":\"At Dethar, we deliver seamless international trade experiences by combining sharp market intelligence, reliable logistics,and client-first service.\\r\\n\\r\\nThrough our integrated partnership with Tact Freight, we manage the full supply chain—ensuring quality, speed, and compliance at every step.\",\"ar\":\"At Dethar, we deliver seamless international trade experiences by combining sharp market intelligence, reliable logistics,and client-first service.\\r\\n\\r\\nThrough our integrated partnership with Tact Freight, we manage the full supply chain—ensuring quality, speed, and compliance at every step.\"}', '{\"ar\":\"Dethar Founded in 2003, An Egypt-based import and export company committed to bridging global markets with reliable, streamlined trade solutions. Backed by a leadership team with deep expertise in freight forwarding and international logistics, Dethar offers a strategic gateway for partners seeking to trade with Egypt and beyond.\",\"en\":\"Dethar Founded in 2003, An Egypt-based import and export company committed to bridging global markets with reliable, streamlined trade solutions. Backed by a leadership team with deep expertise in freight forwarding and international logistics, Dethar offers a strategic gateway for partners seeking to trade with Egypt and beyond.\"}', '{\"ar\":\"الرياض، المملكة العربية السعودية\",\"en\":\"Riyadh, Saudi Arabia\"}', '+20 127 588 8559', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232410.57607948457!2d39.92938505338762!3d24.471065049834053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bdbe5197d220d5%3A0x2e54514fea3b08d9!2z2KfZhNmF2K_ZitmG2Kkg2KfZhNmF2YbZiNix2Kkg2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1751795998766!5m2!1sar!2seg', '+20 127 588 8559', 'www.dethar.net', 'www.dethar.net', 'www.dethar.net', 'www.dethar.net', 'www.dethar.net', '{\"ar\":\"All rights reserved to Dethar © 2025\",\"en\":\"All rights reserved to Dethar © 2025\"}', '2025-06-24 07:48:01', '2025-07-23 22:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"Iusto eaque molestia\",\"ar\":\"Ullam expedita aliqu\"}', 0, 41, NULL, NULL, '2025-07-06 06:57:34', '2025-07-06 06:58:47'),
(3, '{\"en\":\"Dolore id itaque cor\",\"ar\":\"Porro dolor deserunt\"}', 1, 66, NULL, NULL, '2025-07-06 06:57:42', '2025-07-06 06:57:42'),
(4, '{\"en\":\"Rerum dolor perspici\",\"ar\":\"In nostrud id tempor\"}', 1, 47, NULL, NULL, '2025-07-06 06:57:50', '2025-07-06 06:57:50'),
(5, '{\"en\":\"Aut ipsa velit qui \",\"ar\":\"Commodi aut aperiam \"}', 1, 27, NULL, NULL, '2025-07-06 06:57:57', '2025-07-06 06:58:46'),
(6, '{\"en\":\"Nulla ex occaecat qu\",\"ar\":\"Accusamus proident \"}', 1, 13, NULL, NULL, '2025-07-06 06:58:05', '2025-07-06 06:58:45'),
(7, '{\"en\":\"Aut anim eveniet li\",\"ar\":\"Non similique perfer\"}', 1, 50, NULL, NULL, '2025-07-06 06:58:14', '2025-07-06 06:58:45'),
(8, '{\"en\":\"Et vel aut voluptas \",\"ar\":\"Consequuntur non min\"}', 1, 32, NULL, NULL, '2025-07-06 06:58:22', '2025-07-06 06:58:22'),
(9, '{\"en\":\"Dolores dolor repell\",\"ar\":\"Non sit ut reprehend\"}', 1, 93, NULL, NULL, '2025-07-06 06:58:30', '2025-07-06 06:58:44'),
(10, '{\"en\":\"Dolores dolor repellh\",\"ar\":\"Non sit ut reprehendh\"}', 1, 93, NULL, NULL, '2025-07-06 06:58:30', '2025-07-09 08:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `active`, `created_at`, `updated_at`) VALUES
(9, 'hassanaamer048@gmail.com', 1, '2025-07-14 07:25:17', '2025-07-14 07:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `technical_data_sheets`
--

CREATE TABLE `technical_data_sheets` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technical_data_sheets`
--

INSERT INTO `technical_data_sheets` (`id`, `name`, `title`, `description`, `content`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, '{\"en\":\"Qui illum temporibu\",\"ar\":\"Asperiores et minus \"}', '{\"ar\":null}', NULL, 1, 9, NULL, NULL, '2025-07-23 15:55:38', '2025-07-27 09:50:13'),
(2, NULL, '{\"en\":\"Facilis quidem eveni\",\"ar\":\"Autem fugit asperio\"}', '{\"ar\":null}', NULL, 1, 32, NULL, NULL, '2025-07-24 10:37:23', '2025-07-27 09:50:07'),
(3, NULL, '{\"en\":\"Cupidatat doloremque\",\"ar\":\"Dolorem dolorem volu\"}', '{\"en\":\"Duis libero eum natu\",\"ar\":\"Consequatur natus la\"}', NULL, 0, 54, NULL, NULL, '2025-07-24 10:46:41', '2025-07-27 09:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `role`, `active`, `position`, `email`, `email_verified_at`, `password`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"Admin\",\"en\":\"Admin\"}', '{\"ar\":\"Riyadh, Saudi Arabia\",\"en\":\"Riyadh, Saudi Arabia\"}', '0129730475', 'super admin', 1, 1, 'admin@admin.com', NULL, '$2y$12$95eIemAOYCv9Lbv.OWUI1e78ZwTAbrrIjlk2Bmdi/Lh7aA8cIJ6Ye', NULL, NULL, NULL, '2025-06-24 07:48:02', '2025-07-23 22:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `value_adds`
--

CREATE TABLE `value_adds` (
  `id` bigint UNSIGNED NOT NULL,
  `value_add_category_id` bigint UNSIGNED DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_adds`
--

INSERT INTO `value_adds` (`id`, `value_add_category_id`, `title`, `description`, `content`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 3, '{\"en\":\"Dolor voluptates nul\",\"ar\":\"Explicabo Elit lor\"}', '{\"en\":\"Magni fugit suscipi\",\"ar\":\"Saepe numquam et sed\"}', '{\"en\":\"Dolor autem saepe ve\",\"ar\":\"Necessitatibus cillu\"}', 1, 80, NULL, NULL, '2025-07-22 16:11:58', '2025-07-27 09:34:32'),
(2, 4, '{\"en\":\"Soluta deserunt anim\",\"ar\":\"Culpa voluptatem lab\"}', '{\"en\":\"Aspernatur in dolore\",\"ar\":\"Quaerat error iusto \"}', '{\"en\":\"Eligendi aut consequ\",\"ar\":\"Eum eaque est volup\"}', 1, 51, NULL, NULL, '2025-07-27 09:34:42', '2025-07-27 09:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `value_add_categories`
--

CREATE TABLE `value_add_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_add_categories`
--

INSERT INTO `value_add_categories` (`id`, `title`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"Proident aute quibu\",\"ar\":\"Praesentium alias se\"}', '{\"en\":\"Magnam voluptatem do\",\"ar\":\"Ut commodi dolores q\"}', 1, 90, NULL, NULL, '2025-07-22 15:45:47', '2025-07-23 22:12:20'),
(4, '{\"en\":\"At qui aut dolores a\",\"ar\":\"Maxime assumenda mag\"}', '{\"en\":\"Minima elit volupta\",\"ar\":\"Voluptatum accusamus\"}', 1, 4, NULL, NULL, '2025-07-22 15:48:15', '2025-07-23 22:12:20'),
(5, '{\"en\":\"jjjjjjjjjjjjjj\",\"ar\":\"jjjjjjjjjjjj\"}', '{\"en\":\"Aliquip rem sit eum \",\"ar\":\"Atque et excepteur o\"}', 0, 5, NULL, NULL, '2025-07-22 16:07:56', '2025-07-23 22:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `what_we_dos`
--

CREATE TABLE `what_we_dos` (
  `id` bigint UNSIGNED NOT NULL,
  `what_we_do_category_id` bigint UNSIGNED DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_we_dos`
--

INSERT INTO `what_we_dos` (`id`, `what_we_do_category_id`, `title`, `description`, `content`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Adipisicing id occae\",\"ar\":\"Et voluptas consequu\"}', '{\"en\":\"Libero corrupti pla\",\"ar\":\"Velit fugiat et qu\"}', '{\"en\":\"Ut praesentium cupid\",\"ar\":\"Sequi molestias dolo\"}', 1, 56, NULL, NULL, '2025-07-22 15:57:25', '2025-07-26 21:02:48'),
(2, 1, '{\"en\":\"Omnis consectetur au\",\"ar\":\"Debitis sed ipsum t\"}', '{\"en\":\"Cillum dolore aliqui\",\"ar\":\"Eveniet laborum Pr\"}', '{\"en\":\"Molestias consequunt\",\"ar\":\"Quia atque qui non r\"}', 1, 38, NULL, NULL, '2025-07-22 16:01:22', '2025-07-26 21:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `what_we_do_categories`
--

CREATE TABLE `what_we_do_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_we_do_categories`
--

INSERT INTO `what_we_do_categories` (`id`, `title`, `description`, `active`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Aut explicabo Aut a\",\"ar\":\"Et aut esse id sint\"}', '{\"en\":\"Non sint velit quis\",\"ar\":\"Incididunt enim quae\"}', 1, 86, NULL, NULL, '2025-07-22 15:48:59', '2025-07-22 15:57:07'),
(2, '{\"en\":\"Laborum Nihil ea ma\",\"ar\":\"Quae ex ratione aut \"}', '{\"en\":\"Mollit est incididun\",\"ar\":\"Itaque earum ut dolo\"}', 1, 59, NULL, NULL, '2025-07-25 12:05:49', '2025-07-25 12:05:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
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
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_data_sheets`
--
ALTER TABLE `technical_data_sheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `value_adds`
--
ALTER TABLE `value_adds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value_adds_value_add_category_id_foreign` (`value_add_category_id`);

--
-- Indexes for table `value_add_categories`
--
ALTER TABLE `value_add_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `what_we_dos_what_we_do_category_id_foreign` (`what_we_do_category_id`);

--
-- Indexes for table `what_we_do_categories`
--
ALTER TABLE `what_we_do_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `technical_data_sheets`
--
ALTER TABLE `technical_data_sheets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `value_adds`
--
ALTER TABLE `value_adds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `value_add_categories`
--
ALTER TABLE `value_add_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `what_we_do_categories`
--
ALTER TABLE `what_we_do_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `value_adds`
--
ALTER TABLE `value_adds`
  ADD CONSTRAINT `value_adds_value_add_category_id_foreign` FOREIGN KEY (`value_add_category_id`) REFERENCES `value_add_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  ADD CONSTRAINT `what_we_dos_what_we_do_category_id_foreign` FOREIGN KEY (`what_we_do_category_id`) REFERENCES `what_we_do_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
