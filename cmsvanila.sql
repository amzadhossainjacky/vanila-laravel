-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 11:10 PM
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
  `status` int(11) NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Md. Amzad Hossain Jacky', 'jacky@gmail.com', '1', 'admin', 1, 1, '2020-04-12 20:04:04', '2020-04-13 20:07:00'),
(4, 'Rajdeep', 'rajdeep@gmail.com', '1', 'student', 5, 1, '2020-04-14 10:46:53', '2020-04-14 10:46:53'),
(5, 'Riyad Hasan', 'riyad@gmail.com', '1', 'teacher', 7, 1, '2020-04-14 12:17:36', '2020-04-14 12:17:36'),
(6, 'Khalid Hasan', 'khalid@gmail.com', '1', 'student', 8, 0, '2020-04-15 11:08:45', '2020-04-15 11:08:45');

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
(3, '2020_04_15_200433_create_salarys_table', 2),
(4, '2020_04_15_200529_create_courses_table', 2),
(5, '2020_04_15_200601_create_choosecourses_table', 2),
(6, '2020_04_15_200719_create_notes_table', 2),
(7, '2020_04_15_200736_create_notices_table', 2),
(8, '2020_04_15_200847_create_results_table', 2);

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
(1, 'Md. Amzad Hossain Jacky', 'jacky@gmail.com', '1', '01684069494', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-13 18:00:00', '2020-04-13 18:00:00'),
(5, 'Rajdeep', 'rajdeep@gmail.com', '1', '01729924669', 'B Chowdhury Jacky', 'Khali Sarkar', 'khali@gamil.com', '01729924699', NULL, NULL, '2020-04-14 10:46:53', '2020-04-14 10:46:53'),
(7, 'Riyad Hasan', 'riyad@gmail.com', '1', '01729924666', NULL, NULL, NULL, NULL, 'Bsc. Engineer in CSE', NULL, '2020-04-14 12:17:36', '2020-04-14 12:17:36'),
(8, 'Khalid Hasan', 'khalid@gmail.com', '1', '01720089370', 'Cantonment', 'Malek Hasan', 'malek@gmail.com', '01729924667', NULL, NULL, '2020-04-15 11:08:45', '2020-04-15 11:08:45');

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

-- --------------------------------------------------------

--
-- Table structure for table `salarys`
--

CREATE TABLE `salarys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tid` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `salarys`
--
ALTER TABLE `salarys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salarys_tid_foreign` (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choosecourses`
--
ALTER TABLE `choosecourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salarys`
--
ALTER TABLE `salarys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `salarys`
--
ALTER TABLE `salarys`
  ADD CONSTRAINT `salarys_tid_foreign` FOREIGN KEY (`tid`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
