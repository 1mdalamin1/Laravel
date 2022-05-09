-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 02:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
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
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HmGUBXrXElOkyeFr9scwdOIhV6eWD0j9HYF0Bwym9KyZhfOSXmqZy', 'Saver-1340', '017', NULL, NULL, NULL),
(2, 'admin1', 'admin@mail.com', NULL, '$2y$10$HmGUBXrXElOkyeFr9scwdOIhV6eWD0j9HYF0Bwym9KyZhfOSXmqZy', 'Dhaka-1200', '017', NULL, NULL, NULL),
(5, 'Jone Done', 'jone@example.com', NULL, '$2y$10$HmGUBXrXElOkyeFr9scwdOIhV6eWD0j9HYF0Bwym9KyZhfOSXmqZy', NULL, NULL, NULL, '2022-05-04 04:15:04', '2022-05-04 04:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Mobils', NULL, '2022-05-03 23:32:10'),
(2, 'Pc', NULL, NULL),
(3, 'tabs', '2022-05-03 23:37:14', '2022-05-03 23:37:14');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Group Title 1', NULL, NULL),
(2, 'Group Title 2', NULL, NULL),
(3, 'Tanvir', '2022-05-03 04:14:32', '2022-05-03 04:14:32'),
(4, 'Owner', '2022-05-03 04:14:58', '2022-05-03 04:14:58'),
(5, 'Investor', '2022-05-03 04:15:13', '2022-05-03 04:15:13'),
(6, 'Test tostear message', '2022-05-03 04:20:29', '2022-05-03 04:20:29');

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
(1, '2014_10_12_000000_create_admins_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_26_052828_create_users_table', 1),
(6, '2022_04_26_055643_create_groups_table', 1),
(7, '2022_04_26_055653_create_products_table', 1),
(8, '2022_04_26_055708_create_categories_table', 1),
(9, '2022_04_26_055720_create_sale_invoices_table', 1),
(10, '2022_04_26_055733_create_sale_items_table', 1),
(11, '2022_04_26_055753_create_purchase_invoices_table', 1),
(12, '2022_04_26_055802_create_purchase_items_table', 1),
(13, '2022_04_26_055813_create_payments_table', 1),
(14, '2022_04_26_055826_create_receipts_table', 1),
(15, '2022_05_04_100253_add_admin', 2),
(16, '2022_05_06_012739_update_payment_and_receipt_note', 3),
(17, '2022_05_08_021840_add_note_to_sales_and_purchase_table', 4),
(18, '2022_05_08_152507_add_invoice_id_on_payments_and_receipts', 5);

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
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `admin_id`, `user_id`, `purchase_invoice_id`, `amount`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, 100, '2022-05-06', '1598', '2022-05-05 19:11:03', '2022-05-05 19:11:03'),
(4, 5, 1, NULL, 45, '2022-05-02', 'fff', '2022-05-05 19:19:53', '2022-05-05 19:19:53'),
(5, 5, 1, NULL, 55, '2022-05-03', 's', '2022-05-05 19:22:41', '2022-05-05 19:22:41'),
(6, 5, 2, NULL, 75, '2022-05-08', 'Novotheater', '2022-05-07 18:58:40', '2022-05-07 18:58:40'),
(7, 2, 2, NULL, 300, '2022-05-07', 'go to novo', '2022-05-07 19:09:36', '2022-05-07 19:09:36'),
(8, 2, 1, NULL, 500, '2022-05-07', NULL, '2022-05-07 19:11:12', '2022-05-07 19:11:12'),
(9, 2, 3, NULL, 90, '2022-05-08', NULL, '2022-05-08 17:53:11', '2022-05-08 17:53:11'),
(10, 2, 3, NULL, 55, '2022-05-08', NULL, '2022-05-08 18:32:00', '2022-05-08 18:32:00');

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
  `abilities` text COLLATE utf8_unicode_ci,
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
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `cost_price` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `cost_price`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 'Product 1', 'Description 1', 500, 520, NULL, NULL),
(2, 1, 'Product 2', 'Description 2', 89, 100, NULL, NULL),
(4, 3, 'Head Phone', 'Assalamu alaikum mamun boss & brother, your project absolutely awesome . I am learning laravel 7 through your video. Please video series same project Codeigniter MVC. Many many thanks', 3400, 3500, '2022-05-04 00:49:59', '2022-05-04 00:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_invoices`
--

CREATE TABLE `purchase_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `challan_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purchase_invoices`
--

INSERT INTO `purchase_invoices` (`id`, `admin_id`, `user_id`, `challan_no`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '0.9531805', '2022-05-09', 'purchase test', '2022-05-08 18:07:11', '2022-05-08 18:07:11'),
(2, 2, 3, '134', '2022-05-08', 'test', '2022-05-08 18:13:20', '2022-05-08 18:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_invoice_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purchase_items`
--

INSERT INTO `purchase_items` (`id`, `product_id`, `purchase_invoice_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 56, 112, '2022-05-08 18:30:19', '2022-05-08 18:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sale_invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `admin_id`, `user_id`, `sale_invoice_id`, `amount`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, 500, '2022-05-08', 'Back Novo theatar', '2022-05-07 19:05:34', '2022-05-07 19:05:34'),
(2, 5, 2, NULL, 292, '2022-05-07', 'go to novotheater', '2022-05-07 19:06:17', '2022-05-07 19:06:17'),
(3, 2, 2, NULL, 435, '2022-05-07', 'back to novo', '2022-05-07 19:08:52', '2022-05-07 19:08:52'),
(6, 2, 1, NULL, 74, '2022-05-09', NULL, '2022-05-07 19:15:20', '2022-05-07 19:15:20'),
(8, 2, 1, NULL, 55, '2022-05-08', NULL, '2022-05-07 19:17:43', '2022-05-07 19:17:43'),
(9, 2, 1, NULL, 67, '2022-05-05', NULL, '2022-05-07 19:18:04', '2022-05-07 19:18:04'),
(10, 2, 1, 2, 500, '2022-05-08', 'som', '2022-05-08 10:00:59', '2022-05-08 10:00:59'),
(11, 2, 1, 2, 292, '2022-05-06', NULL, '2022-05-08 10:01:28', '2022-05-08 10:01:28'),
(12, 2, 3, NULL, 100, '2022-05-08', NULL, '2022-05-08 17:53:36', '2022-05-08 17:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoices`
--

CREATE TABLE `sale_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `challan_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sale_invoices`
--

INSERT INTO `sale_invoices` (`id`, `admin_id`, `user_id`, `challan_no`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2221', '2022-05-08', 'ff', '2022-05-07 23:10:40', '2022-05-07 23:10:40'),
(2, 2, 1, '415', '2022-05-07', '55', '2022-05-07 23:24:52', '2022-05-07 23:24:52'),
(3, 2, 2, '44', '2022-05-08', 'll', '2022-05-07 23:32:49', '2022-05-07 23:32:49'),
(4, 2, 3, NULL, '2022-05-08', 'ljj', '2022-05-07 23:56:47', '2022-05-07 23:56:47'),
(5, 2, 3, NULL, '2022-05-10', 'test', '2022-05-08 00:09:46', '2022-05-08 00:09:46'),
(6, 2, 3, '142', '2022-05-07', 'da', '2022-05-08 00:10:14', '2022-05-08 00:10:14'),
(7, 2, 1, '123', '2022-05-09', 'teds', '2022-05-08 01:02:44', '2022-05-08 01:02:44'),
(8, 2, 3, '564.505', '2022-05-09', NULL, '2022-05-08 17:52:46', '2022-05-08 17:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `sale_invoice_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sale_items`
--

INSERT INTO `sale_items` (`id`, `product_id`, `sale_invoice_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 11, 520, 520, NULL, NULL),
(2, 2, 2, 14, 100, 100, NULL, NULL),
(3, 4, 2, 1, 788, 1, '2022-05-08 00:55:42', '2022-05-08 00:55:42'),
(4, 1, 2, 2, 56, 112, '2022-05-08 00:56:18', '2022-05-08 00:56:18'),
(5, 1, 2, 1, 999, 999, '2022-05-08 01:02:15', '2022-05-08 01:02:15'),
(6, 4, 7, 1, 3500, 3500, '2022-05-08 01:03:35', '2022-05-08 01:03:35'),
(7, 4, 6, 1, 56, 56, '2022-05-08 05:54:13', '2022-05-08 05:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin_id`, `group_id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Tanvir', 'tanvir@gmail.com', '01489', 'Saver Dhaka', NULL, NULL),
(2, 1, 4, 'Onamica', 'afroza@gmail.com', '564505', 'Manickgong', NULL, '2022-05-03 08:11:42'),
(3, NULL, 5, 'Rajat Chakraborty', 'apurbaseo89@gmail.com', '019024', '1107/A, Baitul Aman, Adabor, Dhaka', '2022-05-03 07:22:26', '2022-05-03 08:07:12'),
(4, NULL, 4, 'Tanvir', '01mdalamin1@gmail.com', '01795815660', 'East Rajation, Savar, Dhaka - 1340.', '2022-05-08 10:52:32', '2022-05-08 10:52:32');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_invoices`
--
ALTER TABLE `purchase_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_invoices`
--
ALTER TABLE `purchase_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
