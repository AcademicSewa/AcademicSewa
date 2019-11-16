-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 07:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminposts`
--

CREATE TABLE `adminposts` (
  `id` int(11) NOT NULL,
  `title` varchar(520) NOT NULL,
  `message` varchar(520) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminposts`
--

INSERT INTO `adminposts` (`id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Notes', 'will be publish soon', '2019-05-22 05:27:34', '2019-05-22 05:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'iris rokka', 'nancyprati@gmail.com', '123', '2019-05-22 11:47:08', '2019-05-22 11:47:08'),
(2, 'iris rokka', 'nancyprati@gmail.com', '123', '2019-05-22 11:47:29', '2019-05-22 11:47:29'),
(3, 'iris rokka', 'nancyprati@gmail.com', 'dfgh', '2019-05-22 11:47:39', '2019-05-22 11:47:39'),
(4, 'pria', 'pa8247@gmail.com', 'qqqq', '2019-05-22 11:51:07', '2019-05-22 11:51:07'),
(5, 'Priya', 'pa8247@gmail.com', 'ppfsidhfjhsakdk', '2019-05-26 01:03:52', '2019-05-26 01:03:52'),
(6, 'djks', 'pa8247@gmail.com', 'jfkldsmfd', '2019-05-26 02:48:23', '2019-05-26 02:48:23'),
(7, 'jkk', 'piyush@gmail.com', 'kjkl', '2019-05-26 02:49:15', '2019-05-26 02:49:15'),
(8, 'khjkj', 'prem@gmail.com', 'kjhjk', '2019-05-26 02:58:49', '2019-05-26 02:58:49'),
(9, 'iris', 'pa8247@gmail.com', 'nzkM', '2019-05-26 03:14:54', '2019-05-26 03:14:54'),
(10, 'iris', 'pa8247@gmail.com', 'nzkM', '2019-05-26 03:15:50', '2019-05-26 03:15:50'),
(11, 'Priya', 'piyush@gmail.com', 'jkshdfkjh', '2019-11-07 01:17:33', '2019-11-07 01:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `admin` tinyint(250) DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iris', 'nancyprati@gmail.com', NULL, '$2y$10$1TFwm8pqbZ5EGqX5DiO9NeH8KqASHYG.70oQMwwXQ0vXMiA8inTuS', 1, NULL, '2019-05-22 02:52:52', '2019-05-22 02:52:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminposts`
--
ALTER TABLE `adminposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `adminposts`
--
ALTER TABLE `adminposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
