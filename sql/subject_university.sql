-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 03:46 PM
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
-- Database: `tubes-pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_university`
--

CREATE TABLE `subject_university` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_university`
--

INSERT INTO `subject_university` (`id`, `university_id`, `subject_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 1),
(4, 1, 3),
(5, 2, 1),
(6, 2, 2),
(7, 3, 9),
(8, 27, 3),
(9, 39, 7),
(10, 39, 1),
(11, 13, 1),
(12, 39, 1),
(13, 36, 1),
(14, 37, 1),
(15, 39, 1),
(16, 40, 1),
(17, 11, 1),
(18, 7, 1),
(19, 15, 1),
(20, 2, 1),
(21, 13, 1),
(22, 28, 1),
(23, 35, 3),
(24, 13, 3),
(25, 8, 3),
(26, 5, 3),
(27, 17, 3),
(28, 35, 9),
(29, 20, 9),
(30, 21, 9),
(31, 9, 9),
(32, 20, 9),
(33, 28, 9),
(34, 25, 4),
(35, 35, 5),
(36, 11, 5),
(37, 8, 5),
(38, 41, 5),
(39, 17, 5),
(40, 28, 5),
(41, 8, 5),
(42, 24, 2),
(43, 5, 2),
(44, 39, 7),
(45, 25, 7),
(46, 39, 6),
(47, 11, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_university`
--
ALTER TABLE `subject_university`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_university_university_id_foreign` (`university_id`),
  ADD KEY `subject_university_subject_id_foreign` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_university`
--
ALTER TABLE `subject_university`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject_university`
--
ALTER TABLE `subject_university`
  ADD CONSTRAINT `subject_university_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_university_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
