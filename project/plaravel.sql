-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '2022-04-21 07:51:57',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$Hb41lxuXhFmdfufVKzHj0eRyfWpaDAT.dj1GlNQrOUFdiT.riioFK', '2022-04-21 07:51:57', NULL, '2022-04-21 01:52:03', '2022-04-21 01:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Man', 'man', NULL, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(2, 'Woman', 'woman', NULL, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(3, 'Child', 'child', NULL, '2022-04-21 01:52:04', '2022-04-21 01:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'red', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(2, 'Green', 'green', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(3, 'Blue', 'blue', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(4, 'White', 'white', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(5, 'Black', 'black', '2022-04-21 01:52:03', '2022-04-21 01:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '2022-04-21 08:55:17',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Customer', 'customer@mail.com', NULL, '$2y$10$UPQJkHHgS8d5p6sC1Qk.Luec5U1qoAMu82IEObglH6Q1sovQIoKgC', '2022-04-21 08:55:17', NULL, '2022-04-21 03:29:05', '2022-04-21 03:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_15_050638_create_admins_table', 1),
(6, '2022_04_15_064823_create_categories_table', 1),
(7, '2022_04_16_075006_create_sub_categories_table', 1),
(8, '2022_04_18_061459_create_colors_table', 1),
(9, '2022_04_18_061533_create_sizes_table', 1),
(10, '2022_04_18_072259_create_products_table', 1),
(11, '2022_04_19_101646_create_product_sliders_table', 1),
(12, '2022_04_21_082757_create_customers_table', 2),
(13, '2022_04_21_095646_create_carts_table', 3),
(14, '2022_04_22_040402_create_shippings_table', 4),
(15, '2022_04_22_040524_create_payments_table', 4),
(16, '2022_04_22_040550_create_orders_table', 4),
(17, '2022_04_22_040602_create_order_details_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','ongoing','received') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `unique_id`, `shipping_id`, `payment_id`, `customer_id`, `status`, `total`, `created_at`, `updated_at`) VALUES
(1, '443', 1, 1, 1, 'received', 1264, '2022-04-21 23:22:18', '2022-04-22 03:30:22'),
(2, '110', 2, 2, 1, 'pending', 293, '2022-04-22 03:31:54', '2022-04-22 03:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 212.00, 2, '2022-04-21 23:22:18', '2022-04-21 23:22:18'),
(2, 1, 22, 356.00, 2, '2022-04-21 23:22:18', '2022-04-21 23:22:18'),
(3, 1, 25, 696.00, 4, '2022-04-21 23:22:18', '2022-04-21 23:22:18'),
(4, 2, 24, 187.00, 1, '2022-04-22 03:31:54', '2022-04-22 03:31:54'),
(5, 2, 4, 106.00, 1, '2022-04-22 03:31:54', '2022-04-22 03:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` enum('cash','bksh') COLLATE utf8_unicode_ci NOT NULL,
  `total_amnt` double NOT NULL,
  `amount` double DEFAULT NULL,
  `trans_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `total_amnt`, `amount`, `trans_id`, `created_at`, `updated_at`) VALUES
(1, 'cash', 1264, 1264, NULL, '2022-04-21 23:22:18', '2022-04-21 23:22:18'),
(2, 'cash', 293, 293, NULL, '2022-04-22 03:31:54', '2022-04-22 03:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `sell_price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_cat_id`, `color_id`, `size_id`, `name`, `slug`, `image`, `price`, `sell_price`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 3, 3, 'Qui pariatur expedita possimus voluptate quia.', 'enim rerum qui tempora labore nesciunt.', 'storage/product/default.png', 101.00, 151.00, 0, 'Repellendus cum quisquam dicta repudiandae. Magni suscipit voluptatem dignissimos.', '2022-04-21 01:52:05', '2022-04-21 01:52:05'),
(2, 1, 2, 1, 2, 'Ut vitae officia repellat et eos.', 'tanvir', 'storage/product/default.png', 150.00, 177.00, 0, 'Numquam praesentium facere alias qui mollitia. Consequatur laboriosam voluptas quis porro.', '2022-04-21 01:52:05', '2022-04-21 01:52:05'),
(3, 3, 2, 2, 3, 'A tempora est qui sit.', 'facere nostrum et minus voluptas laudantium.', 'storage/product/default.png', 108.00, 140.00, 0, 'Aut dignissimos nesciunt architecto quod debitis fuga magnam. Quis cum dolor quod nostrum.', '2022-04-21 01:52:05', '2022-04-21 01:52:05'),
(4, 1, 2, 1, 1, 'Sit praesentium autem ex ullam eveniet aliquam.', 'corrupti non modi quod in iusto.', 'storage/product/default.png', 181.00, 106.00, 0, 'Alias animi nostrum aut magni hic iure enim. Assumenda autem cupiditate velit.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(5, 2, 2, 2, 2, 'Ipsam perspiciatis similique accusantium in tempore corporis dolorem.', 'nulla eveniet eum tempore est totam iure dolores.', 'storage/product/default.png', 139.00, 134.00, 0, 'Aut totam excepturi magnam modi molestiae minus. Recusandae voluptas sunt ut.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(6, 2, 1, 2, 2, 'Fuga cupiditate officia expedita quidem.', 'voluptas quia sapiente sed dolores reiciendis.', 'storage/product/default.png', 188.00, 124.00, 0, 'Non id earum ut cumque. Officiis omnis qui quod. Ut recusandae dolor et quam maiores et corrupti.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(7, 1, 2, 3, 3, 'In est voluptatibus molestiae consequatur.', 'ab eos quis blanditiis consequatur aliquid maiores tempora.', 'storage/product/default.png', 158.00, 128.00, 0, 'Quia quas consequatur ullam nam. Molestiae similique ut similique. Rerum minima ea sunt mollitia.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(8, 2, 1, 2, 2, 'Et eligendi magni maxime praesentium omnis.', 'et facere odit distinctio rerum cupiditate veniam.', 'storage/product/default.png', 127.00, 195.00, 0, 'Cum qui rem soluta et aut consequatur laborum. Voluptates eaque aut laborum.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(9, 2, 2, 2, 1, 'Sit nulla maxime rem sint.', 'qui quibusdam illum et repellat consequatur.', 'storage/product/default.png', 147.00, 190.00, 0, 'Incidunt dolor ducimus impedit voluptas. Minima quaerat eos qui ea veritatis exercitationem.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(10, 3, 2, 3, 3, 'Eos atque voluptatem facere.', 'necessitatibus odio officiis sit sit sed sapiente itaque.', 'storage/product/default.png', 123.00, 188.00, 0, 'Explicabo ullam natus sed sequi doloribus aliquid est. Dolores vel dolores ad soluta sit et.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(11, 1, 1, 1, 2, 'Quas ipsum error nobis cupiditate nobis perspiciatis quia molestiae.', 'similique ratione distinctio asperiores est in provident minus.', 'storage/product/default.png', 153.00, 167.00, 0, 'Velit ut eaque voluptatibus iste occaecati. Aliquid facere corporis qui occaecati.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(12, 3, 1, 2, 2, 'Odit veritatis qui rerum quis dolores qui.', 'ratione aut aliquid velit deleniti qui.', 'storage/product/default.png', 191.00, 117.00, 0, 'Corporis et qui officiis commodi. Possimus tempora deserunt dolor vel. Quia unde sint cum.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(13, 2, 3, 2, 2, 'Veritatis minus ipsa consequatur ut voluptas.', 'qui fugiat animi modi unde voluptas.', 'storage/product/default.png', 142.00, 200.00, 0, 'Et voluptatum et inventore earum. Nam aut iure aliquid eaque beatae quidem.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(14, 3, 2, 1, 3, 'Voluptatem id aut aut nisi et voluptates reprehenderit in.', 'est debitis fugit laboriosam cum delectus dolorem ducimus delectus.', 'storage/product/default.png', 149.00, 184.00, 0, 'Quam et perferendis tempore ea ut amet praesentium. Voluptatem vel aut nobis sint nemo fuga.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(15, 1, 3, 1, 2, 'Quos ea qui nam et.', 'sapiente aut et aspernatur ut excepturi quis.', 'storage/product/default.png', 118.00, 124.00, 0, 'Iusto possimus harum voluptatibus qui ea rerum est. Omnis repellendus ut et.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(16, 3, 2, 1, 3, 'Sapiente error quaerat odit.', 'nam nihil voluptas voluptas debitis enim dolor.', 'storage/product/default.png', 163.00, 147.00, 0, 'Est beatae tenetur libero cupiditate rem cum. Reprehenderit est soluta maxime voluptatum a et eos.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(17, 1, 3, 1, 2, 'Dolores recusandae nam soluta rerum qui totam.', 'occaecati id dignissimos consectetur cum qui sequi.', 'storage/product/default.png', 102.00, 159.00, 0, 'Ab sed non dolore velit. Iusto voluptatem aperiam ut corrupti.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(18, 2, 3, 2, 3, 'Et incidunt sapiente voluptas.', 'dolor magnam autem a eaque ut in.', 'storage/product/default.png', 110.00, 162.00, 0, 'Eveniet vitae similique illum fuga nam ut. Non repudiandae velit nemo.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(19, 1, 1, 2, 1, 'Est repellat molestiae iure.', 'unde quisquam consequuntur quo qui.', 'storage/product/default.png', 179.00, 152.00, 0, 'Est distinctio impedit praesentium sint. Quaerat beatae sequi voluptatum autem qui nemo.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(20, 2, 2, 2, 1, 'Facilis natus porro temporibus dolor corporis fuga.', 'ea ex facilis laboriosam et maiores rerum et.', 'storage/product/default.png', 156.00, 135.00, 0, 'Sed ipsum odio enim rem dicta. Inventore vitae autem id ut a.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(21, 1, 1, 1, 2, 'Qui ea dolores et est deleniti at sequi dolor.', 'id maxime architecto fugit recusandae.', 'storage/product/default.png', 188.00, 150.00, 0, 'Aut voluptatem libero praesentium vel possimus. Eum necessitatibus omnis sit eum voluptas.', '2022-04-21 01:52:06', '2022-04-21 01:52:06'),
(22, 2, 3, 3, 1, 'Accusamus expedita quisquam perferendis aut nihil.', 'voluptatem quia velit quia tenetur quo.', 'storage/product/default.png', 138.00, 178.00, 0, 'Exercitationem qui sunt odio itaque quo enim deleniti. Vitae aut fugiat quia.', '2022-04-21 01:52:07', '2022-04-21 01:52:07'),
(23, 1, 2, 3, 1, 'Unde repellat tenetur ut id sed consequatur.', 'aliquid error placeat fugit ut porro.', 'storage/product/default.png', 132.00, 110.00, 0, 'Aut ipsa eaque exercitationem iusto quos. Quae modi omnis dolorem ratione.', '2022-04-21 01:52:07', '2022-04-21 01:52:07'),
(24, 1, 3, 2, 3, 'Id id deserunt tempore voluptatem sint ipsam ipsum.', 'non rerum minima qui voluptatem nemo eum natus ab.', 'storage/product/default.png', 127.00, 187.00, 0, 'Quia iusto est neque. Optio commodi tenetur atque eos. Laudantium excepturi sint modi dolores ut.', '2022-04-21 01:52:07', '2022-04-21 01:52:07'),
(25, 2, 2, 2, 1, 'Officiis et impedit a facilis dolorem.', 'saepe ea nihil cum sit et.', 'storage/product/default.png', 182.00, 174.00, 0, 'Quaerat aut et modi quia. Aperiam et omnis eveniet quia ut ut odit rerum.', '2022-04-21 01:52:07', '2022-04-21 01:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_sliders`
--

CREATE TABLE `product_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `phone`, `region`, `city`, `address`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir', 'al-amin@seopage1.net', '017', 'test', 'Dhaka', 'Saver  Dhaka-1340.', 'Please Delivery as soon as possible.', '2022-04-21 23:22:18', '2022-04-21 23:22:18'),
(2, 'Tanvir', 'tanvirdmalamin1@gmail.com', '017', 'test', 'Dhaka', 'Saver  Dhaka-1340.', 'hj', '2022-04-22 03:31:54', '2022-04-22 03:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'XXL', 'xxl', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(2, 'XL', 'xl', '2022-04-21 01:52:03', '2022-04-21 01:52:03'),
(3, 'S', 's', '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(4, 'L', 'l', '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(5, 'M', 'm', '2022-04-21 01:52:04', '2022-04-21 01:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Man Sub cat 1', 'man-sub-cat-1', 1, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(2, 'Man Sub cat 2', 'man-sub-cat-2', 1, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(3, 'Man Sub cat 3', 'man-sub-cat-3', 1, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(4, 'Woman Sub cat 1', 'woman-sub-cat-1', 2, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(5, 'Woman Sub cat 2', 'woman-sub-cat-2', 2, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(6, 'Woman Sub cat 3', 'woman-sub-cat-3', 2, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(7, 'Child Sub cat 1', 'child-sub-cat-1', 3, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(8, 'Child Sub cat 2', 'child-sub-cat-2', 3, '2022-04-21 01:52:04', '2022-04-21 01:52:04'),
(9, 'Child Sub cat 3', 'child-sub-cat-3', 3, '2022-04-21 01:52:04', '2022-04-21 01:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_foreign` (`customer_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_cat_id_foreign` (`sub_cat_id`),
  ADD KEY `products_color_id_foreign` (`color_id`),
  ADD KEY `products_size_id_foreign` (`size_id`);

--
-- Indexes for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sliders_product_id_foreign` (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_sliders`
--
ALTER TABLE `product_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_cat_id_foreign` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD CONSTRAINT `product_sliders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
