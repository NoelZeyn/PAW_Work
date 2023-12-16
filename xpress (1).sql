-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 06:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'doloribus', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(2, 2, 'voluptas', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(3, 3, 'nemo', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(4, 4, 'vel', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(5, 5, 'optio', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(6, 6, 'minima', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(7, 7, 'eveniet', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(8, 8, 'vel', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(9, 9, 'sunt', '2023-12-15 07:21:37', '2023-12-15 07:21:37'),
(10, 10, 'doloremque', '2023-12-15 07:21:37', '2023-12-15 07:21:37');

--
-- Triggers `categories`
--
DELIMITER $$
CREATE TRIGGER `categories_before_insert` BEFORE INSERT ON `categories` FOR EACH ROW SET NEW.id = IFNULL(NEW.id, NEW.category_id)
$$
DELIMITER ;

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
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `inventory_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`inventory_id`, `product_id`, `stock_quantity`, `created_at`, `updated_at`) VALUES
(1, NULL, 89, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(2, NULL, 70, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(3, NULL, 10, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(4, NULL, 59, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(5, NULL, 95, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(6, NULL, 14, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(7, NULL, 72, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(8, NULL, 61, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(9, NULL, 31, '2023-12-15 07:21:38', '2023-12-15 07:21:38'),
(10, NULL, 61, '2023-12-15 07:21:38', '2023-12-15 07:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_12_14_100837_create_categories_table', 1),
(5, '2023_12_14_100907_create_users_table', 1),
(6, '2023_12_14_100918_create_products_table', 1),
(7, '2023_12_14_100929_create_orders_table', 1),
(8, '2023_12_14_101007_create_reviews_table', 1),
(9, '2023_12_14_101016_create_inventories_table', 1),
(10, '2023_12_14_134018_create_payments_table', 1),
(11, '2023_12_15_100111_create_keranjang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, '2023-12-15 00:27:00', 'delivered', '2023-12-15 00:27:00', '2023-12-15 00:27:00'),
(3, 3, '2023-12-15 00:28:00', 'pending', '2023-12-15 00:28:00', '2023-12-15 00:28:00'),
(4, 2, '2023-12-15 00:29:00', 'completed', '2023-12-15 00:29:00', '2023-12-15 00:29:00'),
(5, 1, '2023-12-15 00:25:00', 'shipped', '2023-12-15 00:25:00', '2023-12-15 00:25:00'),
(6, 3, '2023-12-15 00:26:00', 'shipped', '2023-12-15 00:26:00', '2023-12-15 00:26:00'),
(7, 1, '2023-12-15 00:27:00', 'delivered', '2023-12-15 00:27:00', '2023-12-15 00:27:00'),
(8, 1, '2023-12-15 00:25:00', 'processing', '2023-12-15 00:25:00', '2023-12-15 00:25:00'),
(9, 2, '2023-12-15 00:26:00', 'shipped', '2023-12-15 00:26:00', '2023-12-15 00:26:00'),
(10, 1, '2023-12-15 00:27:00', 'delivered', '2023-12-15 00:27:00', '2023-12-15 00:27:00'),
(11, 3, '2023-12-15 00:28:00', 'pending', '2023-12-15 00:28:00', '2023-12-15 00:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` enum('pending','completed','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'mollitia', 'Sunt temporibus ratione numquam.', 11.00, NULL, '2023-12-15 07:21:42', '2023-12-15 07:21:42'),
(2, 'quaerat', 'Accusantium et sunt possimus dicta.', 82.67, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(3, 'nulla', 'Inventore aspernatur aut sed voluptate ut qui sint.', 41.66, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(4, 'possimus', 'Dolores placeat accusantium labore accusamus aperiam cupiditate.', 37.67, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(5, 'quo', 'Deleniti eum ea sed quae totam aperiam.', 24.65, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(6, 'aut', 'Voluptas voluptates consequatur qui excepturi expedita inventore soluta.', 59.18, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(7, 'modi', 'Aut fugit labore vel sint.', 64.58, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(8, 'quia', 'In ratione architecto ea id consequatur.', 48.86, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(9, 'repellat', 'Magnam ipsa inventore itaque a rerum repellat.', 94.77, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(10, 'ipsam', 'Consequuntur qui ut ullam saepe repellendus.', 43.45, NULL, '2023-12-15 07:21:43', '2023-12-15 07:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `product_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 5, 'Et voluptatem aspernatur doloribus vero optio omnis a sint. Modi quia autem nulla recusandae. Totam voluptatem totam eligendi est. Mollitia quo voluptate tempora illum voluptatem voluptate omnis.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(2, NULL, NULL, 3, 'Sunt qui et voluptatibus quasi. Quisquam et dicta velit corporis a quia. Unde sint deserunt rem blanditiis ut recusandae nemo. Sapiente ipsam nihil et pariatur doloribus eos natus.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(3, NULL, NULL, 4, 'Velit iusto rerum aperiam est dolor aperiam non vitae. Eius commodi dolor totam molestias. Ut consectetur eligendi eum minus unde est et. Natus similique sit dolor sunt voluptatem voluptas debitis. Maxime sunt in temporibus qui dolores.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(4, NULL, NULL, 4, 'Necessitatibus quasi assumenda ea repellat ut praesentium. Magnam a velit eligendi et voluptas. Dolore omnis consequuntur accusamus modi dicta sed.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(5, NULL, NULL, 3, 'Consequatur omnis aliquam ea quas aut maxime. Quod aliquid minima et tenetur doloribus et qui magnam. Esse expedita nesciunt officia expedita et ad eligendi. Veritatis tempore recusandae tempore veritatis nisi perspiciatis.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(6, NULL, NULL, 4, 'Saepe ab velit omnis quo quia aliquam aperiam. Nam enim odit excepturi vero. Rem rerum culpa distinctio.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(7, NULL, NULL, 1, 'Et quae fuga sint ut perspiciatis. Architecto sed nulla maxime maxime quisquam.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(8, NULL, NULL, 4, 'Qui beatae expedita enim dolores quaerat et qui minima. Voluptas repudiandae numquam similique id voluptatibus facilis. Et necessitatibus quis dolorum eum. Laudantium qui ut nihil id itaque autem qui rem. Quas praesentium magnam aspernatur quam.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(9, NULL, NULL, 5, 'Nihil non deleniti quia consequuntur ut ut. Ducimus qui voluptatibus minima ut corrupti consectetur est. Vel eum consequatur qui quibusdam maiores impedit.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(10, NULL, NULL, 4, 'Modi temporibus sunt at quis ut dolores ex. Aspernatur ducimus exercitationem quo qui et quibusdam. Voluptas aut perferendis voluptatem ut nihil.', '2023-12-15 07:21:43', '2023-12-15 07:21:43'),
(11, 1, 1, 5, 'Excellent laptop!', '2023-12-15 00:50:00', '2023-12-15 00:50:00'),
(12, 2, 2, 4, 'Nice and comfortable!', '2023-12-15 00:51:00', '2023-12-15 00:51:00'),
(13, 3, 3, 5, 'Great cookware set!', '2023-12-15 00:52:00', '2023-12-15 00:52:00'),
(14, 4, 4, 3, 'Good smartphone but a bit pricey.', '2023-12-15 00:53:00', '2023-12-15 00:53:00'),
(15, 5, 5, 4, 'Enjoyed reading it!', '2023-12-15 00:54:00', '2023-12-15 00:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', 'hashedpassword123', '2023-12-15 00:55:00', '2023-12-15 00:55:00'),
(2, 'Jane Smith', 'jane@example.com', 'hashedpassword456', '2023-12-15 00:56:00', '2023-12-15 00:56:00'),
(3, 'Bob Johnson', 'bob@example.com', 'hashedpassword789', '2023-12-15 00:57:00', '2023-12-15 00:57:00'),
(4, 'Alice Brown', 'alice@example.com', 'hashedpassword321', '2023-12-15 00:58:00', '2023-12-15 00:58:00'),
(5, 'Eve White', 'eve@example.com', 'hashedpassword654', '2023-12-15 00:59:00', '2023-12-15 00:59:00');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Jaden Runolfsdottir MD', 'rmetz@example.com', NULL, '$2y$12$OLrHP37rv2dYRn8oi60QRepKesY0gvuk0NaTz75rUZOSsKNyuGT0q', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(2, 'Mr. Colton Pacocha', 'keanu.sanford@example.net', NULL, '$2y$12$HurBDhRGHES72S9iwJRo8OwYfB4Ig8dxaoI8ccoxhtP.nI6IAe8hK', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(3, 'Lavina Thiel Jr.', 'fpowlowski@example.net', NULL, '$2y$12$HLbkMJMHCsTrbCoTbH6M5OSIcQ9tlbAf4004Rc4sF4Ne0Ri.rxtAu', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(4, 'Miss Kiara Windler Sr.', 'bauch.aubree@example.com', NULL, '$2y$12$yBBhB3ZOZA8tPaalwpyADezdqexE2bJj8qi1pL8YLIWAMZjoZZMra', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(5, 'Dr. Andre Rohan', 'serenity.weber@example.net', NULL, '$2y$12$3c7PsR0xQdcjInkJzYXI9u4XbXVur0Tt6VLgarteFi1Sd3RjLpGdu', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(6, 'Prof. Annalise Huels', 'stracke.beulah@example.com', NULL, '$2y$12$KMk1iv5yZsEB.2FMOuZiFuQ/VT7W1mcnJwW8Elri8NYrvMiOznMnC', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(7, 'Prof. Dusty Wilderman Sr.', 'green.wendell@example.net', NULL, '$2y$12$EqpKwK3ilxivpEFKCwq/guFeYDSa4UP4mIgeydYTKZuIg7djbLlue', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(8, 'Lula Johns', 'aron.lakin@example.org', NULL, '$2y$12$n9hISUCB57hy0PheniMkzuFslE93CZ2zkHfP0zxjxv83G52qDXhMC', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(9, 'Miss Pearl Oberbrunner', 'jamir93@example.com', NULL, '$2y$12$WMJCjESlIIG3WVrMnvPipuT2hTw32aE4ftSA090tsZPYJkvwBRoQi', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(10, 'Ms. Marcelina Auer', 'zachary68@example.org', NULL, '$2y$12$ZNJRH6LsMNkPGznnQaa4H.Cvgmq2RZKpvCPEXOWm3SZ.ZKInpEC92', NULL, '2023-12-15 07:21:48', '2023-12-15 07:21:48'),
(11, 'John Doe', 'john@example.com', NULL, 'hashedpassword123', 'token123', '2023-12-15 01:00:00', '2023-12-15 01:00:00'),
(12, 'Jane Smith', 'jane@example.com', NULL, 'hashedpassword456', 'token456', '2023-12-15 01:01:00', '2023-12-15 01:01:00'),
(13, 'Bob Johnson', 'bob@example.com', NULL, 'hashedpassword789', 'token789', '2023-12-15 01:02:00', '2023-12-15 01:02:00'),
(14, 'Alice Brown', 'alice@example.com', NULL, 'hashedpassword321', 'token321', '2023-12-15 01:03:00', '2023-12-15 01:03:00'),
(15, 'Eve White', 'eve@example.com', NULL, 'hashedpassword654', 'token654', '2023-12-15 01:04:00', '2023-12-15 01:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `inventories_product_id_foreign` (`product_id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `inventory_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
