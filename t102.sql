-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th8 27, 2023 lúc 11:33 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `t102`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `use` text NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `use`, `price`, `image`, `status`, `type_id`, `created_at`, `updated_at`) VALUES
(19, 'Jasmine', 'Decorate', 12.00, 'Arabian-jasmine.webp', 'new', 8, '2023-08-12 16:40:22', '2023-08-12 16:40:22'),
(20, 'Blue Lechenaultia', 'Decorate', 15.00, '2.jpg', 'new', 8, '2023-08-12 16:49:08', '2023-08-12 16:49:08'),
(22, 'Lisianthus', 'Decorate', 24.00, '3.jpg', 'new', 8, '2023-08-12 17:04:26', '2023-08-12 17:04:26'),
(23, 'Echeveria Secunda', 'Decorate', 28.00, '4.webp', 'new', 12, '2023-08-12 17:09:15', '2023-08-12 17:09:15'),
(24, 'Cactus', 'Decorate', 9.00, '5.jpg', 'new', 9, '2023-08-12 17:11:40', '2023-08-12 17:11:40'),
(25, 'Bonsai', 'Decorate', 39.99, '6.jpg', 'top', 8, '2023-08-12 17:13:05', '2023-08-12 17:13:05'),
(26, 'Echeveria Cabolya', 'Decorate', 22.00, '7.webp', 'top', 12, '2023-08-12 17:15:06', '2023-08-12 17:15:06'),
(27, 'Sensational Snake Plant', 'Decorate', 67.99, '8.jpg', 'top', 9, '2023-08-12 17:16:20', '2023-08-12 17:18:22'),
(28, 'The Sill Pink', 'Decorate', 12.49, '9.webp', 'top', 10, '2023-08-12 17:18:52', '2023-08-12 17:18:52'),
(29, 'Orchid', 'Decorate', 69.99, '10.jpg', 'top', 10, '2023-08-12 17:19:22', '2023-08-12 17:19:22'),
(30, 'Bromeliad', 'Decorate', 22.45, '11.jpg', 'sale', 10, '2023-08-12 17:19:49', '2023-08-12 17:19:49'),
(31, 'Haworthia', 'Decorate', 25.00, '12.jpg', 'sale', 12, '2023-08-12 17:20:55', '2023-08-12 17:20:55'),
(32, 'Gymnosperms', 'Decorate', 12.56, '13.webp', 'sale', 9, '2023-08-12 17:24:36', '2023-08-12 17:24:36'),
(33, 'Astrantia', 'Decorate', 6.89, '14.jpg', 'top products', 11, '2023-08-12 17:26:11', '2023-08-12 17:26:11'),
(34, 'Allium', 'Decorate', 99.99, '15.jpg', 'top products', 11, '2023-08-12 17:26:54', '2023-08-12 17:26:54'),
(35, 'Aster', 'Decorate', 9.79, '16.webp', 'top products', 11, '2023-08-12 17:28:23', '2023-08-12 17:28:23'),
(36, 'Calendula', 'Decorate', 25.00, '17.jpg', 'top products', 13, '2023-08-12 17:28:55', '2023-08-12 17:28:55'),
(37, 'Angelica', 'Decorate', 21.49, '18.webp', 'top products', 13, '2023-08-12 17:29:33', '2023-08-12 17:29:33'),
(38, 'Agrimony', 'Decorate', 68.34, '19.jpg', 'top products', 13, '2023-08-12 17:30:00', '2023-08-12 17:30:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `quanity` int(11) NOT NULL DEFAULT 0,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `accessory_id`, `quanity`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 2, '2023-08-10 01:11:34', '2023-08-10 01:11:34'),
(2, 4, 1, 3, '2023-08-10 01:33:46', '2023-08-10 01:33:46'),
(3, 9, 1, 3, '2023-08-10 01:39:23', '2023-08-10 01:39:23'),
(14, 3, 1, 5, '2023-08-11 07:12:55', '2023-08-11 07:13:32'),
(15, 3, 1, 6, '2023-08-11 08:04:32', '2023-08-11 08:04:32'),
(16, 3, 1, 6, '2023-08-11 08:04:41', '2023-08-11 08:04:41'),
(23, 4, 3, 10, '2023-08-12 10:58:37', '2023-08-12 13:55:10'),
(26, 3, 3, 15, '2023-08-12 13:14:14', '2023-08-12 13:14:14'),
(27, 5, 2, 10, '2023-08-12 13:50:39', '2023-08-12 13:50:39'),
(32, 19, 2, 10, '2023-08-13 04:26:57', '2023-08-13 04:26:57'),
(39, 19, 3, 10, '2023-08-13 05:33:11', '2023-08-13 05:33:11'),
(41, 20, 1, 21, '2023-08-25 02:16:08', '2023-08-25 02:16:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'Flowering', '2023-08-12 16:20:47', '2023-08-12 16:20:47'),
(9, 'Non-flowering', '2023-08-12 16:21:01', '2023-08-12 16:21:16'),
(10, 'Indoors', '2023-08-12 16:22:02', '2023-08-12 16:22:02'),
(11, 'Outdoors', '2023-08-12 16:22:14', '2023-08-12 16:22:14'),
(12, 'Succulents', '2023-08-12 16:22:29', '2023-08-12 16:22:29'),
(13, 'Medicinal', '2023-08-12 16:22:50', '2023-08-12 16:22:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_09_102116_create_blogs_table', 1),
(6, '2023_08_10_005205_create_tags_table', 1),
(7, '2023_08_10_011930_create_role_table', 1),
(8, '2023_08_10_012709_create_categories_table', 2),
(9, '2023_08_10_021516_create_accessories_table', 3),
(10, '2023_08_10_021957_create_types_table', 3),
(11, '2023_08_10_074651_create_carts_table', 4),
(12, '2023_08_11_012110_create_products_table', 5),
(13, '2023_08_11_091817_create_watch_lists_table', 5),
(14, '2023_08_11_094444_create_orders_table', 6),
(15, '2023_08_11_094508_create_order_items_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `bill` double(8,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `bill`, `status`, `created_at`, `updated_at`, `Address`, `phone`, `name`, `email`) VALUES
(1, 5, 140.00, 'Pending', '2023-08-11 03:50:39', '2023-08-11 03:50:39', 'Ha Noi', '000222555', 'dung', ''),
(2, 5, 40.00, 'Pending', '2023-08-11 04:05:10', '2023-08-11 04:05:10', 'Ha noi', '555555', 'Dung', 'User@gmail.com'),
(3, 5, 40.00, 'Pending', '2023-08-11 04:06:01', '2023-08-11 04:06:01', 'Ha noi', '555555', 'Dung', 'User@gmail.com'),
(4, 17, 48.00, 'Pending', '2023-08-13 04:16:52', '2023-08-13 04:16:52', 'sadasda@gmail.com', '0862442297', 'Đặng Đạt', 'daangvandat09@gmail.com'),
(5, 10, 24.00, 'Pending', '2023-08-13 04:27:33', '2023-08-13 04:27:33', 'Bi@gmail.com', '0836293729', 'Y', 'bi@gmail.com'),
(6, 19, 22.00, 'Pending', '2023-08-13 04:33:16', '2023-08-13 04:33:16', 'ha noi', '032366565', 'dunng', 'hg234678@gmail.com'),
(7, 19, 22.00, 'Pending', '2023-08-13 04:33:19', '2023-08-13 04:33:19', 'ha noi', '032366565', 'dunng', 'hg234678@gmail.com'),
(8, 19, 9.00, 'Pending', '2023-08-13 04:35:48', '2023-08-13 04:35:48', 'ha noi', '02223324455', 'dunng', 'hg234678@gmail.com'),
(9, 17, 60.00, 'Pending', '2023-08-13 05:01:10', '2023-08-13 05:01:10', '1231', '0862442297', 'Đặng Đạt', 'daangvandat09@gmail.com'),
(10, 17, 0.00, 'Pending', '2023-08-13 05:02:41', '2023-08-13 05:02:41', '1231', '0862442297', 'Đặng Đạt', 'daangvandat09@gmail.com'),
(11, 10, 60.00, 'Pending', '2023-08-13 05:36:41', '2023-08-13 05:36:41', 'bhjbf', '0123456789', 'bi', 'bi@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `accessory_id`, `quantity`, `price`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 20.00, 1, '2023-08-11 03:50:39', '2023-08-11 03:50:39'),
(2, 4, 1, 30.00, 1, '2023-08-11 03:50:39', '2023-08-11 03:50:39'),
(3, 10, 1, 50.00, 1, '2023-08-11 03:50:39', '2023-08-11 03:50:39'),
(4, 3, 2, 20.00, 2, '2023-08-11 04:05:10', '2023-08-11 04:05:10'),
(5, 19, 1, 12.00, 4, '2023-08-13 04:16:54', '2023-08-13 04:16:54'),
(6, 19, 1, 12.00, 4, '2023-08-13 04:16:55', '2023-08-13 04:16:55'),
(7, 19, 1, 12.00, 4, '2023-08-13 04:16:56', '2023-08-13 04:16:56'),
(8, 19, 1, 12.00, 4, '2023-08-13 04:16:57', '2023-08-13 04:16:57'),
(9, 26, 1, 22.00, 6, '2023-08-13 04:33:17', '2023-08-13 04:33:17'),
(10, 24, 1, 9.00, 8, '2023-08-13 04:35:49', '2023-08-13 04:35:49'),
(11, 19, 2, 12.00, 9, '2023-08-13 05:01:11', '2023-08-13 05:01:11'),
(12, 19, 2, 12.00, 9, '2023-08-13 05:01:12', '2023-08-13 05:01:12'),
(13, 19, 1, 12.00, 9, '2023-08-13 05:01:13', '2023-08-13 05:01:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pesticides', NULL, NULL),
(2, 'shovel', NULL, NULL),
(3, 'pots', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'User', 'User@gmail.com', NULL, 0, '$2y$10$.ozIpvb1u12cAD0KX/z.JeXDb7zsJ/YZ9Ja4/mkeXHk1Xa693FDR6', NULL, '2023-08-10 18:25:24', '2023-08-12 06:54:46'),
(6, 'Dat', 'dangvandat09@gmail.com', NULL, 0, '222222', NULL, '2023-08-11 07:58:31', '2023-08-12 10:06:23'),
(7, 'Đạt', 'datttth2209060@fpt.edu.vn', NULL, 0, '$2y$10$QyAaVA9OFOXG3XHbKMun8Oq80Q2L3KMzunwV1EQHBQjsAKzs55JgO', NULL, '2023-08-12 01:56:19', '2023-08-12 01:56:19'),
(8, 'Hoang Nguyen Duy', 'nguyenduyhoang@gmail.com', NULL, 0, '$2y$10$5X.8.4TEbs505p.MbNuUWOH01nVVKgKVGGExA.Ny1TsTLotWVblIq', NULL, '2023-08-12 02:04:13', '2023-08-12 02:04:13'),
(9, 'Đạt', 'dattt1104@gmail.com', NULL, 0, '$2y$10$6gpnDWN9d7DieU8N42RzguFVXQkjpxd55Lw8df.8Z5TYHaVP5Lgby', NULL, '2023-08-12 04:08:50', '2023-08-12 04:08:50'),
(10, 'bi@gmail.com', 'bi@gmail.com', NULL, 0, '$2y$10$D0wXh/mWLfilObOqBhc5C.Fy/fe7C30wM6LkFSCjlKMD46qo6qTMK', NULL, '2023-08-12 04:12:47', '2023-08-12 04:12:47'),
(11, 'Admin2@gmail.com', 'Admin2@gmail.com', NULL, 1, '$2y$10$6r9Xi8Khkfc9D0OLpU.FfuZeCx82iCcRiZdcwXe03.c8ZmQPsR1E6', NULL, '2023-08-12 04:29:01', '2023-08-12 18:01:50'),
(12, 'dang tuan giang', 'giangbe291@gmail.com', NULL, 1, '$2y$10$aVt5ENostmvxQbFJAFVhhO7ehejLwtZ9xSFRfytJ4GMFhT.OcLTzS', NULL, '2023-08-12 07:13:02', '2023-08-12 07:13:02'),
(13, 'Dat', 'dangvandat029@gmail.com', NULL, 0, '$2y$10$9./RvnC/SxZWn4sxZ5jMCOCWeTK9lvHkCShu3xbw86kdHaKiwlGGG', NULL, '2023-08-12 10:11:01', '2023-08-12 10:11:01'),
(15, 'eqweqweqewq', 'dangvandat091@gmail.com', NULL, 1, '$2y$10$9l5XPv7Ux.TW83FGQzN9eufXIj9liJp3WvnTq24Q6NQx1/G4t5Z6S', NULL, '2023-08-12 13:13:17', '2023-08-12 13:13:17'),
(16, 'User23', 'User22@gmail.com', NULL, 0, '$2y$10$UwTRAa6Gu8oUxpn6ndt/lOfBvkFiahDMtCb3wgjPRptpUi.4X3cHa', NULL, '2023-08-12 17:43:13', '2023-08-12 17:59:36'),
(17, 'Đặng Đạt', 'daangvandat09@gmail.com', NULL, 0, '$2y$10$c3TBnyjChruz0hEEcRYdX.3P7bZgiXhONclCj3TgIAGKTomqgZeA2', NULL, '2023-08-12 23:51:02', '2023-08-12 23:51:02'),
(18, 'Đặng Đạt', 'daad9@gmail.com', NULL, 0, '$2y$10$dw4jjUwm/mMy3vTuiL032.me/yOj6bOrblZ247.Pra5BERsXMly9O', NULL, '2023-08-13 00:24:48', '2023-08-13 00:24:48'),
(19, 'dung', 'hg234678@gmail.com', NULL, 1, '$2y$10$SPWPjah6LRF29.QvU0iDHOZE72wCE5lMysOhSikFxo7lzf5D8/qey', NULL, '2023-08-13 04:29:04', '2023-08-13 04:29:04'),
(20, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$Rzq1UQVQ55waCOCrzR7tQefqgMvydqlrugiTLZGT8GFWUXV1tyuxy', NULL, '2023-08-23 18:04:55', '2023-08-23 18:04:55'),
(21, 'taytuu123', 'abc@gmail.com', NULL, 0, '$2y$10$zcm0/GT6zWb.nBAknkG91exVFEuaZPGLCmFxgzhYyALXqpbcHAFWm', NULL, '2023-08-24 20:52:47', '2023-08-24 20:52:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `watch_lists`
--

CREATE TABLE `watch_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `token` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `watch_lists`
--

INSERT INTO `watch_lists` (`id`, `accessory_id`, `customer_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 4, 15, 15, '2023-08-12 13:17:15', '2023-08-12 13:17:15'),
(2, 5, 10, 10, '2023-08-12 13:50:46', '2023-08-12 13:50:46'),
(4, 20, 19, 19, '2023-08-13 04:37:49', '2023-08-13 04:37:49'),
(5, 19, 10, 10, '2023-08-13 05:33:36', '2023-08-13 05:33:36'),
(7, 19, 21, 21, '2023-08-25 02:22:22', '2023-08-25 02:22:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessory_id` (`accessory_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key 1` (`customer_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `watch_lists`
--
ALTER TABLE `watch_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `watch_lists`
--
ALTER TABLE `watch_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `foreign key 1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
