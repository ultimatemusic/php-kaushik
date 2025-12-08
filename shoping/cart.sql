-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2025 at 09:32 PM
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
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_QTY` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_QTY`, `product_price`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(22, '14', '4', '2500', '1', 'Pending', '2025-11-23 02:17:53', '2025-11-23 02:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(12, 'Home Decor', '2025-11-22 23:36:04', '2025-11-22 23:36:04'),
(13, 'Personalized Gifting', '2025-11-22 23:36:15', '2025-11-22 23:36:15'),
(14, 'Dining & Kitchen', '2025-11-22 23:36:31', '2025-11-22 23:36:31'),
(15, 'Fashion & Lifestyle', '2025-11-22 23:38:41', '2025-11-22 23:38:41'),
(16, 'Spiritual & Festive', '2025-11-22 23:39:04', '2025-11-22 23:39:04'),
(17, 'Stationery', '2025-11-22 23:39:13', '2025-11-22 23:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(9, 'chauhan kaushik', 'kaushik2004@gmail.com', 'hello', 'hello world', '2025-11-23 02:55:55', '2025-11-23 02:55:55');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2025_11_2_000000_create_users_table', 2),
(5, '2025_11_09_040954_create_category_table', 3),
(6, '2025_11_09_041037_create_subcategory_table', 4),
(7, '2025_11_10_065730_create__product_table', 5),
(8, '2025_11_10_071139_create__contact_us_table', 6),
(9, '2025_11_10_080736_create_contact_us_table', 7),
(10, '2025_11_11_041228_create_cart_table', 8),
(11, '2025_11_11_050819_create_cart_table', 9),
(12, '2025_11_26_052357_create_feedback_table', 10),
(13, '2025_11_27_071157_create__o_t_pverification_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(10, 12, 'Wall Art & Mirrors', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(11, 12, 'Clocks', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(12, 12, 'Entrance Decor', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(13, 12, 'Wall Art & Paintings', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(14, 12, 'Organizers', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(15, 12, 'Wall Hangings', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(16, 12, 'Magnets', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(17, 12, 'Lighting', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(18, 13, 'Hoop Art', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(19, 13, 'Digital Art & Frames', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(20, 14, 'Tableware', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(21, 14, 'Serveware', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(22, 15, 'Bags & Accessories', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(23, 15, 'Jewelry', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(24, 15, 'Footwear', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(25, 15, 'Storage & Organizers', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(26, 16, 'Wall Art', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(27, 16, 'Pooja Essentials', '2025-11-23 05:18:13', '2025-11-23 05:18:13'),
(28, 17, 'Reading Accessories', '2025-11-23 05:18:13', '2025-11-23 05:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chauhan', 'kaushik2004@gmail.com', '+91 8866131292', '$2y$10$xi7v9Gjn.dyRi4f4QEiUFepSZkQCjlNkwQwyBc7RkdLYEUDK.DQda', NULL, '2025-11-09 00:12:25', '2025-11-24 21:45:17'),
(6, 'kaushik chauhan', 'kaushikchauhan@gmail.com', '8866131292', '$2y$10$WYrQ9N7qwIim6EnT0QOttOvKkgtvK5cbll5nhvwxRGdE1BysDf/pe', NULL, '2025-11-09 06:07:33', '2025-11-09 06:08:29'),
(8, 'meet tukadiya', 'meettukadiaya@gmail.com', '1234567890', '$2y$10$mxXzOBcBrAp34UsAERg2mOzD9HdqRUoCvkGcnsxhp75BFYC90oFf2', NULL, '2025-11-13 00:20:25', '2025-11-13 00:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `_o_t_pverification`
--

CREATE TABLE `_o_t_pverification` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_product`
--

CREATE TABLE `_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `QTY` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_product`
--

INSERT INTO `_product` (`id`, `product_name`, `description`, `price`, `category_id`, `subcategory_id`, `QTY`, `product_image`, `created_at`, `updated_at`) VALUES
(12, 'Royal Kutch Lippan Mirror', 'Round mirror frame with white clay work (Lippan) and small mirrors on a mud-colored background.', 1800, 12, 10, 10, '1763877039_7331.jpg', '2025-11-23 00:20:39', '2025-11-23 00:20:39'),
(13, '\'Laadki\' Custom Hoop Art', 'Embroidery hoop showing a girl\'s back profile with a floral braid, customized with a name.', 1200, 13, 18, 10, '1763877085_3806.webp', '2025-11-23 00:21:25', '2025-11-23 00:21:25'),
(14, 'Azure Ocean Resin Clock', 'Ocean-themed wall clock with real sand texture, blue waves, and gold Roman numerals.', 2500, 12, 11, 10, '1763877128_6738.jpg', '2025-11-23 00:22:08', '2025-11-23 00:22:08'),
(15, 'Floral Bliss Nameplate', 'Wooden nameplate with floral hand-painting and calligraphy text', 1500, 12, 12, 10, '1763877317_5794.jpg', '2025-11-23 00:25:17', '2025-11-23 00:25:17'),
(16, 'Tribal Tales Tote Bag', 'Canvas tote bag painted with a Warli art village scene in black and white.', 550, 15, 22, 10, '1763877364_2013.jpg', '2025-11-23 00:26:04', '2025-11-23 00:26:04'),
(17, 'Earthy Terracotta Choker', 'Terracotta (clay) necklace set painted in earthy reds and blacks with a thread tassel.', 450, 15, 23, 10, '1763877456_4503.jpg', '2025-11-23 00:27:36', '2025-11-23 00:27:36'),
(18, 'Zen Dot Mandala Hanging', 'MDF board with a colorful Dot Mandala design in bright yellows and teals', 1299, 16, 26, 10, '1763877501_4587.jpg', '2025-11-23 00:28:21', '2025-11-23 00:28:21'),
(19, 'Desi Kitsched Kettle', 'Aluminum kettle hand-painted with vibrant truck art motifs', 1299, 14, 21, 50, '1763877538_7060.jpg', '2025-11-23 00:28:58', '2025-11-23 00:28:58'),
(20, 'Gold Flake Resin Bookmark', 'Resin bookmark with gold flakes and a silk tassel.', 250, 17, 28, 10, '1763877571_1013.jpg', '2025-11-23 00:29:31', '2025-11-23 00:29:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_o_t_pverification`
--
ALTER TABLE `_o_t_pverification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_product`
--
ALTER TABLE `_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_product_category_id_foreign` (`category_id`),
  ADD KEY `_product_subcategory_id_foreign` (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_o_t_pverification`
--
ALTER TABLE `_o_t_pverification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_product`
--
ALTER TABLE `_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `_product`
--
ALTER TABLE `_product`
  ADD CONSTRAINT `_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `_product_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
