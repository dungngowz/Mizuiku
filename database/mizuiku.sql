-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2019 lúc 08:24 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dev_mizuiku`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Article REF ID',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Category ID',
  `title` varchar(255) NOT NULL COMMENT 'Title of article',
  `slug` varchar(255) NOT NULL COMMENT 'Slug',
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL COMMENT 'Content of article',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `language` varchar(10) NOT NULL COMMENT 'Language',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Created At',
  `created_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Created User ID',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Parent ID',
  `type` varchar(255) NOT NULL COMMENT 'Article Type',
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `created_user_id` bigint(20) UNSIGNED NOT NULL,
  `updated_user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `ref_id`, `parent_id`, `type`, `title`, `slug`, `priority`, `language`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_user_id`, `updated_user_id`, `deleted_user_id`) VALUES
(1, 1, NULL, 'news', 'Tin tức môi trường', 'environmental-news', 0, 'vi', 1, '2019-12-02 09:38:16', '2019-12-02 09:38:51', NULL, 1, 1, NULL),
(2, 1, NULL, 'news', 'Environmental news', 'environmental-news-1', 0, 'en', 1, '2019-12-02 09:39:06', '2019-12-02 09:39:06', NULL, 1, 1, NULL),
(3, 3, NULL, 'news', 'Tin tức chương trình', 'tin-tuc-chuong-trinh', 1, 'vi', 1, '2019-12-02 09:39:21', '2019-12-02 10:24:47', NULL, 1, 1, NULL),
(4, 3, NULL, 'news', 'Program news', 'program-news', 0, 'en', 1, '2019-12-02 09:39:35', '2019-12-02 09:39:35', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `language` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Created User ID',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `phone`, `email`, `content`, `ip`, `language`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`, `deleted_at`, `deleted_user_id`) VALUES
(1, 'asd12', NULL, 'thinhtn36@gmail.com', 'asd', '127.0.0.2', 'vi', '2019-01-16 04:19:57', 2, '2019-01-18 02:37:57', 2, NULL, NULL),
(2, 'Hưng', NULL, 'hungdinh2407@gmail.com', 'test', '172.20.0.2', 'vi', '2019-04-12 16:25:12', 2, '2019-04-12 16:25:12', 2, NULL, NULL),
(3, 'Hưng', NULL, 'hungdinh2407@gmail.com', 'test 1', '172.20.0.2', 'vi', '2019-04-12 16:25:43', 2, '2019-04-12 16:25:43', 2, NULL, NULL),
(4, 'Hưng', NULL, 'hungdinh2407@gmail.com', 'test 2', '172.20.0.2', 'vi', '2019-04-12 17:00:43', 2, '2019-04-12 17:00:43', 2, NULL, NULL),
(5, 'asd', NULL, 'dung.ngowz@gmail.com', 'asd', '172.20.0.2', 'vi', '2019-04-19 11:12:50', NULL, '2019-04-19 11:12:50', NULL, NULL, NULL),
(6, 'asd', NULL, 'dung.ngowz@gmail.com', 'asdasd', '172.20.0.2', 'vi', '2019-04-19 11:13:43', NULL, '2019-04-19 11:13:43', NULL, NULL, NULL),
(7, 'Nam', NULL, '123@gmail.com', 'test', '172.20.0.2', 'vi', '2019-04-19 16:50:02', 33, '2019-04-19 16:50:02', 33, NULL, NULL),
(8, 'admin', NULL, 'tnhieu52th@gmail.com', '123', '172.20.0.2', 'vi', '2019-04-22 09:36:51', NULL, '2019-04-22 09:36:51', NULL, NULL, NULL),
(9, 'dasdas', NULL, 'hungcd1@kokotachi.com', 'asdas', '172.20.0.2', 'vi', '2019-04-25 09:23:55', NULL, '2019-04-25 09:23:55', NULL, NULL, NULL),
(10, 'N H Đăng', NULL, 'haidang009@gmail.com', 'This is test', '172.20.0.2', 'vi', '2019-05-07 09:05:59', NULL, '2019-05-07 09:05:59', NULL, NULL, NULL),
(11, 'Dang', NULL, 'haidang009@gmail.com', 'Test', '172.20.0.2', 'vi', '2019-05-07 11:38:42', NULL, '2019-05-07 11:38:42', NULL, NULL, NULL),
(12, 'Dang', NULL, 'haidang009@gmail.com', 'Test2', '172.20.0.2', 'vi', '2019-05-07 12:01:02', NULL, '2019-05-07 12:01:02', NULL, NULL, NULL),
(13, 'Dang', NULL, 'haidang009@gmail.com', 'Test from IPhone simulator', '172.20.0.2', 'vi', '2019-05-07 13:09:45', NULL, '2019-05-07 13:09:45', NULL, NULL, NULL),
(14, 'Cù Đình Hưng', NULL, 'hungdinh2407@gmail.com', 'test', '172.20.0.2', 'vi', '2019-08-05 15:20:14', NULL, '2019-08-05 15:20:14', NULL, NULL, NULL),
(15, 'Dinh HUng', NULL, 'hungdinh2407@gmail.com', 'test', '172.20.0.2', 'vi', '2019-08-05 15:20:40', NULL, '2019-08-05 15:20:40', NULL, NULL, NULL),
(16, 'Ádsad', NULL, 'dgdf@gmail.com', 'Sádfsd', '172.20.0.2', 'vi', '2019-08-06 13:46:09', NULL, '2019-08-06 13:46:09', NULL, NULL, NULL),
(17, 'Ádasdasd', NULL, 'sdfsdf@gmail.com', 'Ádasd', '172.20.0.2', 'vi', '2019-08-06 13:49:19', NULL, '2019-08-06 13:49:19', NULL, NULL, NULL),
(18, 'Ádasd', NULL, 'dfg@gmail.com', 'Ádasd', '172.20.0.2', 'vi', '2019-08-06 13:50:44', NULL, '2019-08-06 13:50:44', NULL, NULL, NULL),
(19, 'Dfgdf', NULL, 'fg@gmail.com', 'Ádasdad', '172.20.0.2', 'vi', '2019-08-06 13:54:02', NULL, '2019-08-06 13:54:02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `programs_timeline`
--

CREATE TABLE `programs_timeline` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `language` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Created User ID',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `keywords` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `og_title` text DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_type` text DEFAULT NULL,
  `og_url` text DEFAULT NULL,
  `og_image` text DEFAULT NULL,
  `language` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_user_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ZA9uaFSkQ2b4aqLTyXSaxOGXhcKTRDJs.EPG9eJE.hozF5k2.lET.', NULL, '2019-12-01 19:49:07', '2019-12-01 19:49:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_user_id` (`created_user_id`),
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `article_ref_id` (`ref_id`) USING BTREE;

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `category_ref_id` (`ref_id`),
  ADD KEY `create_user_id` (`created_user_id`) USING BTREE,
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `programs_timeline`
--
ALTER TABLE `programs_timeline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_ref_id` (`ref_id`);

--
-- Chỉ mục cho bảng `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `programs_timeline`
--
ALTER TABLE `programs_timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT cho bảng `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_ibfk_2` FOREIGN KEY (`updated_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_ibfk_3` FOREIGN KEY (`deleted_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
