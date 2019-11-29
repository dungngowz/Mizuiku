-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2019 at 10:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mizuiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Parent ID',
  `type` varchar(255) NOT NULL COMMENT 'Article Type',
  `title` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
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
-- Table structure for table `contacts`
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
-- Dumping data for table `contacts`
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
-- Table structure for table `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `programs_timeline`
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_user_id` (`created_user_id`),
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `article_ref_id` (`ref_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `category_ref_id` (`ref_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `programs_timeline`
--
ALTER TABLE `programs_timeline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_ref_id` (`ref_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs_timeline`
--
ALTER TABLE `programs_timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id`) REFERENCES `articles` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
