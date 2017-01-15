-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 06:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cooperative`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardmembers`
--

CREATE TABLE IF NOT EXISTS `boardmembers` (
  `id` int(10) unsigned NOT NULL,
  `boardmember_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boardmembers`
--

INSERT INTO `boardmembers` (`id`, `boardmember_name`, `picture_name`, `priority`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'board1.jpg', 1, 'CEO', NULL, NULL),
(2, 'Lorem ipsum', 'board2.jpg', 2, 'CTO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(10) unsigned NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `file_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AI.pdf', 'AI Note', NULL, NULL),
(2, 'contact.docx', 'Contact Page', NULL, NULL),
(3, 'git.txt', 'Git Tutorials', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2016-12-01 09:34:52', '2016-12-01 09:34:52'),
(2, 'News', '2016-12-01 09:35:03', '2016-12-01 09:35:03'),
(3, 'Notice', '2016-12-01 09:35:10', '2016-12-01 09:35:10'),
(4, 'Scheme', '2016-12-10 22:59:38', '2016-12-10 22:59:38'),
(5, 'About', '2016-12-01 09:35:19', '2016-12-01 09:35:19'),
(6, 'Contact', '2016-12-01 09:35:29', '2016-12-01 09:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_25_073435_create_nav_bars_table', 1),
(4, '2016_11_25_073443_create_sub_nav_bars_table', 1),
(13, '2016_11_25_122809_create_menus_table', 2),
(14, '2016_11_25_123033_create_submenus_table', 2),
(15, '2016_11_27_141939_create_news_table', 2),
(16, '2016_11_27_141958_create_notices_table', 2),
(17, '2016_11_28_091033_create_schemes_table', 2),
(18, '2016_11_30_122506_create_themes_table', 2),
(19, '2016_12_01_154906_create_schemedetails_table', 3),
(20, '2016_12_09_094707_create_sliders_table', 4),
(22, '2016_12_09_100628_create_boardmembers_table', 5),
(23, '2016_12_09_103133_create_teammembers_table', 6),
(24, '2016_12_10_034201_create_downloads_table', 7),
(25, '2016_12_10_074302_create_quicklinks_table', 8),
(26, '2016_12_10_105231_create_sayings_table', 9),
(31, '2016_12_10_125524_create_services_table', 10),
(32, '2016_12_10_125537_create_schemes_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_body`, `created_at`, `updated_at`) VALUES
(1, 'News 1', 'News BodyGoes Here In This Title Section Such That It Becomes So Long Enough To Make It Compressable....News Heading Goes Here In This Title Section Such That It Becomes So Long Enough To Make It Compressable....News Heading Goes Here In This Title Section Such That It Becomes So Long Enough To Make It Compressable...', '2016-12-01 19:34:57', '2016-12-01 19:34:57'),
(2, 'News Heading', 'News 2', '2016-12-01 19:35:12', '2016-12-01 19:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(10) unsigned NOT NULL,
  `notice_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notice_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_body`, `created_at`, `updated_at`) VALUES
(1, 'Notice1', 'Notification on something', '2016-12-01 19:35:27', '2016-12-01 19:35:27'),
(2, 'Notice 2', 'NOtice 2', '2016-12-01 19:35:37', '2016-12-01 19:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quicklinks`
--

CREATE TABLE IF NOT EXISTS `quicklinks` (
  `id` int(10) unsigned NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quicklinks`
--

INSERT INTO `quicklinks` (`id`, `link`, `description`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'www.google.com', 'Google', 2, NULL, NULL),
(2, 'www.ku.edu.np', 'KU', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sayings`
--

CREATE TABLE IF NOT EXISTS `sayings` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sayings`
--

INSERT INTO `sayings` (`id`, `name`, `rank`, `quotation`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'Salin Pasakhala', 'Chairman', 'An early separation may sometime lead to success', 'chairman.jpg', NULL, NULL),
(2, 'Sabin Pasakhala', 'MD', 'Always challenge yourself', 'md.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE IF NOT EXISTS `schemes` (
  `id` int(10) unsigned NOT NULL,
  `service_id` int(11) NOT NULL,
  `home` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scheme_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scheme_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `service_id`, `home`, `scheme_name`, `interest`, `scheme_body`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'Daily Saving', '15%', 'This is the description of daily saving', NULL, NULL),
(2, 2, '1', 'Child Saving', '3%', 'This is the body of child saving', NULL, NULL),
(3, 1, '1', 'Education Loan', '12', 'This is the education loan body', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Loan', NULL, NULL),
(2, 'Saving', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL,
  `slider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'slider1.jpg', 1, NULL, NULL),
(2, 'slider2.jpg', 2, NULL, NULL),
(3, 'slider3.jpg', 3, NULL, NULL),
(4, 'slider4.jpg', 4, NULL, NULL),
(5, 'slider5.jpg', 5, NULL, NULL),
(6, 'slider6.jpg', 6, NULL, NULL),
(7, 'slider7.jpg', 7, NULL, NULL),
(8, 'slider8.jpg', 8, NULL, NULL),
(9, 'slider9.jpg', 9, NULL, NULL),
(10, 'slider10.jpg', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE IF NOT EXISTS `submenus` (
  `id` int(10) unsigned NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE IF NOT EXISTS `teammembers` (
  `id` int(10) unsigned NOT NULL,
  `teammember_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`id`, `teammember_name`, `picture_name`, `priority`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'Sabin Pasakhala', 'team1.jpg', 1, 'Main Tech', NULL, NULL),
(2, 'Saln Pasakhala', 'team2.jpg', 2, 'Khale', NULL, NULL),
(3, 'Sabin Pasakhala', 'team1.jpg', 3, 'Main Tech', NULL, NULL),
(4, 'Saln Pasakhala', 'team2.jpg', 4, 'Khale', NULL, NULL),
(5, 'Sabin Pasakhala', 'team1.jpg', 1, 'Main Tech', NULL, NULL),
(6, 'Saln Pasakhala', 'team2.jpg', 2, 'Khale', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(10) unsigned NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, '#cecece', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@yahoo.com', '$2y$10$2M0eTVaaa3lOuTGkGPy1ve.zAg8jEJOj.KWoXSqv4iZI55WDpjZNe', 'ibDUKW73zpbwJdlrMu05bJr3DDWcHIq6R40NGxlMeCElQ6qnmHDyKBLBCaGk', '2016-11-25 09:08:16', '2016-12-10 23:00:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boardmembers`
--
ALTER TABLE `boardmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `quicklinks`
--
ALTER TABLE `quicklinks`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `quicklinks_priority_unique` (`priority`);

--
-- Indexes for table `sayings`
--
ALTER TABLE `sayings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boardmembers`
--
ALTER TABLE `boardmembers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quicklinks`
--
ALTER TABLE `quicklinks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sayings`
--
ALTER TABLE `sayings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
