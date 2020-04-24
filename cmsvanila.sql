-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 08:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsvanila`
--

-- --------------------------------------------------------

--
-- Table structure for table `choosecourses`
--

CREATE TABLE `choosecourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fees` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classTime` time NOT NULL,
  `classDay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseType`, `batch`, `classTime`, `classDay`, `fees`, `status`, `uid`, `created_at`, `updated_at`) VALUES
(3, 'Model Test', 'SSC', '14:00:00', 'Sunday & Tuesday', 3100, 1, 1, '2020-04-16 17:42:05', '2020-04-20 09:21:56'),
(6, 'Regular', 'SSC', '14:00:00', 'Sunday & Tuesday', 3900, 1, 1, '2020-04-20 09:22:52', '2020-04-20 09:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regid` bigint(20) NOT NULL,
  `ustatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `uname`, `uemail`, `upassword`, `utype`, `regid`, `ustatus`, `created_at`, `updated_at`) VALUES
(1, 'Md. Amzad Hossain Jacky', 'jacky@gmail.com', '1', 'admin', 1, 1, '2020-04-12 20:04:04', '2020-04-21 18:43:57'),
(4, 'Rajdeep', 'rajdeep@gmail.com', '1', 'student', 5, 1, '2020-04-14 10:46:53', '2020-04-18 01:59:03'),
(5, 'Riyad Hasan', 'riyad@gmail.com', '1', 'teacher', 7, 1, '2020-04-14 12:17:36', '2020-04-22 19:22:56'),
(6, 'Khalid Hasan', 'khalid@gmail.com', '1', 'student', 8, 1, '2020-04-15 11:08:45', '2020-04-18 03:08:49'),
(13, 'Kamal Hossain', 'kamal@gmail.com', '1', 'student', 15, 0, '2020-04-22 19:24:35', '2020-04-23 08:20:00'),
(15, 'Jahid Hasan', 'jahid@gmail.com', '1', 'teacher', 17, 1, '2020-04-23 04:46:49', '2020-04-23 04:48:12'),
(16, 'Salma Rahman', 'salma@gmail.com', '1', 'teacher', 18, 1, '2020-04-23 04:48:01', '2020-04-23 04:48:11');

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
(1, '2020_04_12_195443_create_logins_table', 1),
(2, '2020_04_14_144019_create_registrations_table', 1),
(10, '2020_04_15_200529_create_courses_table', 2),
(11, '2020_04_15_200601_create_choosecourses_table', 2),
(12, '2020_04_15_200719_create_notes_table', 2),
(13, '2020_04_15_200736_create_notices_table', 2),
(14, '2020_04_15_200847_create_results_table', 2),
(17, '2020_04_24_064042_create_salaries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `topic`, `details`, `uid`, `created_at`, `updated_at`) VALUES
(1, 'class cancel', 'tomorrow at 4/25/2020 class cancel. makeup class will be  held later.', 1, '2020-04-23 20:24:27', '2020-04-23 20:24:27'),
(2, 'Rivew Class', 'Review class continues as per routine.', 1, '2020-04-23 20:26:57', '2020-04-23 20:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salaryStatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `password`, `phone`, `institution`, `parentName`, `parentEmail`, `parentPhone`, `qualification`, `salaryStatus`, `created_at`, `updated_at`) VALUES
(1, 'Md. Amzad Hossain Jacky', 'jacky@gmail.com', '1', '01684069494', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-13 18:00:00', '2020-04-21 18:43:57'),
(5, 'Rajdeep', 'rajdeep@gmail.com', '1', '01729924669', 'B Chowdhury Jacky', 'Khali Sarkar', 'khali@gamil.com', '01729924699', NULL, NULL, '2020-04-14 10:46:53', '2020-04-14 10:46:53'),
(7, 'Riyad Hasan', 'riyad@gmail.com', '1', '01729924666', NULL, NULL, NULL, NULL, 'Bsc. Engineer in CSE', 1, '2020-04-14 12:17:36', '2020-04-24 00:44:51'),
(8, 'Khalid Hasan', 'khalid@gmail.com', '1', '01720089370', 'Cantonment', 'Malek Hasan', 'malek@gmail.com', '01729924667', NULL, NULL, '2020-04-15 11:08:45', '2020-04-15 11:08:45'),
(15, 'Kamal Hossain', 'kamal@gmail.com', '1', '01729924777', 'Rohotomolla High school', 'Hazi Kaseh', 'kashem@gmail.com', '01729924234', NULL, NULL, '2020-04-22 19:24:35', '2020-04-22 19:24:35'),
(17, 'Jahid Hasan', 'jahid@gmail.com', '1', '01729924677', NULL, NULL, NULL, NULL, 'Bsc. Computer Science', 1, '2020-04-23 04:46:49', '2020-04-24 00:44:57'),
(18, 'Salma Rahman', 'salma@gmail.com', '1', '01729924345', NULL, NULL, NULL, NULL, 'Bsc. Software Engineering', 1, '2020-04-23 04:48:01', '2020-04-24 00:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` double(8,2) NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `examName`, `examType`, `marks`, `cid`, `sid`, `created_at`, `updated_at`) VALUES
(1, 'Quiz 1', 'Quiz', 20.00, 6, 5, '2020-04-23 22:18:05', '2020-04-23 22:18:05'),
(3, 'Quiz 1', 'Written', 13.00, 3, 5, '2020-04-23 22:56:39', '2020-04-23 22:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tid` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `tid`, `amount`, `created_at`, `updated_at`) VALUES
(1, 18, 23000, '2020-04-24 00:44:19', '2020-04-24 00:44:19'),
(2, 7, 25000, '2020-04-24 00:44:51', '2020-04-24 00:44:51'),
(3, 17, 30000, '2020-04-24 00:44:57', '2020-04-24 00:44:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choosecourses`
--
ALTER TABLE `choosecourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choosecourses_cid_foreign` (`cid`),
  ADD KEY `choosecourses_uid_foreign` (`uid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_uid_foreign` (`uid`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_cid_foreign` (`cid`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_uid_foreign` (`uid`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_cid_foreign` (`cid`),
  ADD KEY `results_sid_foreign` (`sid`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_tid_foreign` (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choosecourses`
--
ALTER TABLE `choosecourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choosecourses`
--
ALTER TABLE `choosecourses`
  ADD CONSTRAINT `choosecourses_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `choosecourses_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_sid_foreign` FOREIGN KEY (`sid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_tid_foreign` FOREIGN KEY (`tid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
