-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 03:44 PM
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
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_zaidan@gmail.com|127.0.0.1', 'i:3;', 1747560566),
('laravel_cache_zaidan@gmail.com|127.0.0.1:timer', 'i:1747560566;', 1747560566);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_kampus`
--

CREATE TABLE `data_kampus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_berdiri` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `akreditas` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_01_074605_create_data_kampus_table', 1),
(5, '2025_05_16_132906_create_visimisi_kampus_table', 1),
(6, '2025_05_17_150634_create_universities_table', 1),
(7, '2025_05_18_084724_add_tipe_to_universities_table', 2),
(8, '2025_05_18_114626_add_row_column_to_universities_table', 3),
(9, '2025_05_18_160817_create_subjects_table', 4),
(10, '2025_05_18_160905_create_subject_university_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('siplyvWdr8QXqN3sTEjOzVxM8R2Ycx14Qsnr8yFR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibW15dUpsMXRZTHNaTmVvRFBkU1ViZGtDdmJyQ0JwSmtlck9hcWdLRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly90dWJlcy1wd2wudGVzdC9tb2R1bGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747660278),
('Xplj08hacwxMeRJxoSGghli5gSOy7tvhdwLGoepL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVd2NEg4Y3FsTEpjMFVOUWgzY1RuNWZVdlgySlRVTVhqd2w0R2N6NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly90dWJlcy1wd2wudGVzdC9tb2R1bGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747650602);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Business', '2025-05-18 09:13:01', '2025-05-18 09:13:01'),
(2, 'Engineering', '2025-05-18 09:13:01', '2025-05-18 09:13:01'),
(3, 'Computer Science', '2025-05-18 09:13:01', '2025-05-18 09:13:01'),
(4, 'Health', '2025-05-18 21:14:10', '2025-05-18 21:14:10'),
(5, 'Math and Logic', '2025-05-18 21:14:10', '2025-05-18 21:14:10'),
(6, 'Language Learning', '2025-05-18 21:14:10', '2025-05-18 21:14:10'),
(7, 'Social Science', '2025-05-18 21:14:10', '2025-05-18 21:14:10'),
(8, 'Personal Development', '2025-05-18 21:14:10', '2025-05-18 21:14:10'),
(9, 'Data Science', '2025-05-18 21:17:46', '2025-05-18 21:17:46');

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

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `ranking` varchar(255) DEFAULT NULL,
  `application_deadline` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `row` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `degree`, `tipe`, `ranking`, `application_deadline`, `image_path`, `row`) VALUES
(1, 'University of Illinois Urbana-Champaign', 'Master of Science in Management (iMSM)', 'bachelor', '#12 in Top Public Universities in the U.S. (U.S. News & World Report, 2023)', 'Application due June 5, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/1Rp5a6TiZD2LO4n6MHsMtS/78e1f67bd7784a40ddae53db3389a054/IllinoisGies.jpg?auto=format%2Ccompress&dpr=1', 1),
(2, 'University of Huddersfield', 'MSc Management', 'master', 'AACSB accredited, Business School of the Year 2023 (THE Awards), top in the UK in the global Times Higher Education Young University Rankings 2024', 'Application due September 10, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5bvCtypTxR2uVK6aH7HS0k/0e98a5efb8aaed315766914559c8c4e0/200x400_logo__1_.jpg?auto=format%2Ccompress&dpr=1', 0),
(3, 'University of Michigan', 'Master of Applied Data Science', 'master', '#1 Public Research University in the U.S. (QS World Rankings, 2022)', 'Application due June 1, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/7EM0x2VEDTvYABQqQXiIem/6ce5b3f131a225cbf1a6b0aa24af8df6/University_of_Michigan_Horizontal_Logo.png?auto=format%2Ccompress&dpr=1', 0),
(4, 'University of Pittsburgh', 'Master of Data Science', 'master', 'A highly-ranked, Carnegie R1 public research institution', 'Application due August 18, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/3DZlvCCGVWluFtfeXoCgFO/e0e068904fbabadd01c00c3165f54f68/900x200_px_SCI_Logo.png?auto=format%2Ccompress&dpr=1', 0),
(5, 'Northeastern University', 'Master of Science in Data Analytics Engineering', 'master', 'Ranked in the top 40 of the U.S. News Best Graduate Schools in Engineering', 'Application due July 25, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2UqKAdajxMiAKGLdOgYCrc/f09facd5960e7697c6398f672c7c14dc/Captura_de_pantalla_2023-08-30_a_la_s__11.29.07_a.m..png?auto=format%2Ccompress&dpr=1', 0),
(6, 'University of Colorado Boulder', 'Master of Science in Data Science', 'master', '#38 University in the World (Academic Ranking of World Universities, 2019)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 2),
(7, 'University of Illinois Urbana-Champaign', 'Master of Business Administration (iMBA)', 'master', '#12 in Top Public Universities in the U.S. (U.S. News & World Report, 2023)', 'Application due June 5, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/1Rp5a6TiZD2LO4n6MHsMtS/78e1f67bd7784a40ddae53db3389a054/IllinoisGies.jpg?auto=format%2Ccompress&dpr=1', 1),
(8, 'University of Colorado Boulder', 'Master of Science in Computer Science', 'master', 'Ranked #98 in the Best Global Universities (US News & World Report, 2025)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 1),
(9, 'University of Colorado Boulder', 'Master of Science in Data Science', 'master', '#38 University in the World (Academic Ranking of World Universities, 2019)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 2),
(11, 'University of North Texas', 'Bachelor of Applied Arts and Sciences', 'master', 'Ranked #25 for online Bachelorâ€™s programs (U.S. News & World Report, 2025)', 'Application due June 16, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/HL1NahIE4QwHd9xvhxvtx/8293d49ce1609a5c858719fb183f6229/UNT_COURSERA_BAAS_Logo.png?auto=format%2Ccompress&dpr=1', 1),
(12, 'University of Colorado Boulder', 'Master of Science in Data Science', 'master', '#38 University in the World (Academic Ranking of World Universities, 2019)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 0),
(13, 'University of Colorado Boulder', 'Master of Engineering in Engineering Management', 'master', 'Top 20 Engineering School (U.S. News Engineering Schools ranking, 2025)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 2),
(14, 'Illinois Tech', 'Master of Business Administration', 'master', '#20 in the U.S. for high earnings and economic mobility (NYT college ranking tool, 2023)', 'Application due June 7, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5JUClhmEcjBngRNT8Jp4A8/718fded3686a7003bdd2aeb70a772c49/e52950db-1fef-454d-82a6-a40667359c0a.png?auto=format%2Ccompress&dpr=1', 0),
(15, 'University of Illinois Urbana-Champaign', 'Master of Science in Management (iMSM)', 'master', '#12 in Top Public Universities in the U.S. (U.S. News & World Report, 2023)', 'Application due June 5, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/1Rp5a6TiZD2LO4n6MHsMtS/78e1f67bd7784a40ddae53db3389a054/IllinoisGies.jpg?auto=format%2Ccompress&dpr=1', 3),
(16, 'University of Colorado Boulder', 'Master of Science in Data Science', 'master', '#38 University in the World (Academic Ranking of World Universities, 2019)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 3),
(17, 'University of London', 'Master of Science in Cyber Security', 'master', '#34 in the UK (The Times and Sunday Times Good University Guide 2025)', 'Application due September 8, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5ASJDg3lEJwiQ2i3baLYbD/f64e9ef7e44f9cc4bb38b8bc2c9659b0/UoL_Royal_Holloway_logo.png?auto=format%2Ccompress&dpr=1', 3),
(18, 'University of Illinois Urbana-Champaign', 'Master of Science in Management (iMSM)', 'master', '#12 in Top Public Universities in the U.S. (U.S. News & World Report, 2023)', 'Application due June 5, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/1Rp5a6TiZD2LO4n6MHsMtS/78e1f67bd7784a40ddae53db3389a054/IllinoisGies.jpg?auto=format%2Ccompress&dpr=1', 0),
(19, 'University of Huddersfield', 'MSc Management', 'master', 'AACSB accredited, Business School of the Year 2023 (THE Awards), top in the UK in the global Times Higher Education Young University Rankings 2024', 'Application due September 10, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5bvCtypTxR2uVK6aH7HS0k/0e98a5efb8aaed315766914559c8c4e0/200x400_logo__1_.jpg?auto=format%2Ccompress&dpr=1', 0),
(20, 'University of Michigan', 'Master of Applied Data Science', 'master', '#1 Public Research University in the U.S. (QS World Rankings, 2022)', 'Application due June 1, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/7EM0x2VEDTvYABQqQXiIem/6ce5b3f131a225cbf1a6b0aa24af8df6/University_of_Michigan_Horizontal_Logo.png?auto=format%2Ccompress&dpr=1', 0),
(21, 'Northeastern University', 'Master of Science in Data Analytics Engineering', 'master', 'Ranked in the top 40 of the U.S. News Best Graduate Schools in Engineering', 'Application due July 25, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2UqKAdajxMiAKGLdOgYCrc/f09facd5960e7697c6398f672c7c14dc/Captura_de_pantalla_2023-08-30_a_la_s__11.29.07_a.m..png?auto=format%2Ccompress&dpr=1', 0),
(22, 'University of Colorado Boulder', 'Master of Science in Data Science', 'master', '#38 University in the World (Academic Ranking of World Universities, 2019)', 'Application due June 13, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/QYnQLOD2XH1JdEAJt7zFY/982c1e09539e87e4cf637c57eb4142dd/CU-Boulder.jpg?auto=format%2Ccompress&dpr=1', 0),
(24, 'University of Colorado Boulder', 'Master of Engineering in Engineering Management', 'master', 'Top 20 Engineering School (U.S. News Engineering Schools ranking, 2025)', 'Application due June 12, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2IPmuma57uM5ek16lRQAbT/061735e29e1ac3b2b6741fdee4753dec/CUBoulder_360x360.png?auto=format%2Ccompress&dpr=1&fm=avif&fit=fill&w=48&h=48', 4),
(25, 'University of Michigan', 'Master of Public Health', 'master', '#4 School of Public Health (U.S. News & World Report, 2021)', 'Application due June 29, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/60SA8pGxPXMmJf4n7umK1H/ccec31bbe2358210bf8391dcba6cd2f1/umich.png?auto=format%2Ccompress&dpr=1&fm=avif&fit=fill&w=48&h=48', 0),
(26, 'University of Illinois', 'Master of Business Administration (iMBA)', 'master', '#12 in Top Public Universities in the U.S. (U.S. News & World Report, 2023)', 'Application due June 5, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/1FEh4ZoSeNYJ44HxicpwgE/7e94d0f48196b2f1284c90168dd1104b/CenterILblock-ISQUAREOrangeBackgrnd__1_.png?auto=format%2Ccompress&dpr=1&fm=avif&fit=fill&w', 4),
(27, 'HEC Paris', 'MSc in Innovation and Entrepreneurship', 'master', '#1 Business School in Europe (Financial Times, 2022)', 'Application due June 1, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2TGd4ZOjIp0SJOb63J2QQj/7a96187ecd3de0afcc7b2759af1341b8/HEC_logo-96.jpg?auto=format%2Ccompress&dpr=1&fm=avif&fit=fill&w=48&h=48', 0),
(28, 'Universidad de los Andes', 'MaestrÃ­a en IngenierÃ­a de Software', 'master', 'Universidad No. 5 de Latinoamérica (QS Ranking 2024)', 'Application due June 17, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2vpThGDM4ephvaJehcYKGs/a8f07a48746d89d7114e7a99b16dba76/uniandessquare.png?auto=format%2Ccompress&dpr=1&fm=avif&fit=fill&w=48&h=48', 0),
(35, 'Indian Institute of Technology Guwahati', 'Bachelor of Science in Data Science & AI', 'bachelor', 'Named as one of the world’s top universities for the study of Data Science (QS World University Rankings by Subject 2024)', 'Application due May 29, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/IHNuNEKZnmjtOs3g6uX9h/c0038feefd8e96515ab88ee67e1bb59f/Square_logo_for_partner_landing_page.png?auto=format%2Ccompress&dpr=1', 0),
(36, 'University of London ', 'Bachelor of Science in Marketing', 'bachelor', 'Ranked #34 in the UK (The Times and Sunday Times Good University Guide 2025)', 'Application due September 7, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5ASJDg3lEJwiQ2i3baLYbD/f64e9ef7e44f9cc4bb38b8bc2c9659b0/UoL_Royal_Holloway_logo.png?auto=format%2Ccompress&dpr=1', 5),
(37, 'University of London', 'Bachelor of Science in Business Administration', 'bachelor', 'Ranked #34 in the UK (The Times and Sunday Times Good University Guide 2025)', 'Application due September 7, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5ASJDg3lEJwiQ2i3baLYbD/f64e9ef7e44f9cc4bb38b8bc2c9659b0/UoL_Royal_Holloway_logo.png?auto=format%2Ccompress&dpr=1', 5),
(39, 'Georgetown University', 'Bachelor of Arts in Liberal Studies', 'bachelor', 'Ranked #24 in the National University rankings (US News & World Report, 2025)', 'Application due June 14, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/249FlRfDx2yviQr9UUz57n/e25a8f5dd17ed44212698529e3e88760/Georgetown_SCS_MonotoneLogo.png?auto=format%2Ccompress&dpr=1', 5),
(40, 'University of North Texas', 'Bachelor of Science in General Business', 'bachelor', 'Ranked #25 for online Bachelor’s programs (U.S. News & World Report, 2025)', 'Application due June 15, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/HL1NahIE4QwHd9xvhxvtx/8293d49ce1609a5c858719fb183f6229/UNT_COURSERA_BAAS_Logo.png?auto=format%2Ccompress&dpr=1', 0),
(41, 'Illinois Tech', 'Bachelor of Information Technology', 'bachelor', 'Bachelor of Information Technology', 'Application due June 6, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5JUClhmEcjBngRNT8Jp4A8/718fded3686a7003bdd2aeb70a772c49/e52950db-1fef-454d-82a6-a40667359c0a.png?auto=format%2Ccompress&dpr=1', 0),
(42, 'Indian Statistical Institute', 'Postgraduate Diploma in Applied Statistics ', 'diploma', 'ISI is a renowned institution where eminent scientists lead high-impact national projects ', 'Application due July 25, 2025', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/5R2a5JvlUUjaCx88o6ieGr/f34781a19154cb1de019183c8d2377db/Webp.net-resizeimage.png?auto=format%2Ccompress&dpr=1', 0);

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
(1, 'asas', 'asas@gmail.com', NULL, '$2y$12$VslxWwYRNIjsS52GhviEFO6CwgZoozeFHGz1TkfZIFUUM36CBAhD6', NULL, '2025-05-18 02:29:10', '2025-05-18 02:29:10'),
(2, 'jojo', 'jojo@gmail.com', NULL, '$2y$12$wDBUQsQsKColSyjjBRTms.oTrDKJjK0OGeouOwDKI2NPmvZGlrwDO', NULL, '2025-05-18 02:30:02', '2025-05-18 02:30:02'),
(3, 'huhahhuah', 'sanjoaayeaeae@gmail.com', NULL, '$2y$12$afc9KrLY27Kcsj/5ZVPd6.RSIgbiPWZob1GcpEq4z1Lpu2pZf0xOm', NULL, '2025-05-18 02:38:49', '2025-05-18 02:38:49'),
(4, 'jossas', 'sanjoaayasaeaeae@gmail.com', NULL, '$2y$12$DBiSA0hGx3woeoZhXQ.ThO2shmBduv2nSQplV804RGDGShD3WCpIK', NULL, '2025-05-18 02:41:23', '2025-05-18 02:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi_kampus`
--

CREATE TABLE `visimisi_kampus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `data_kampus`
--
ALTER TABLE `data_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `subject_university`
--
ALTER TABLE `subject_university`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_university_university_id_foreign` (`university_id`),
  ADD KEY `subject_university_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisi_kampus`
--
ALTER TABLE `visimisi_kampus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kampus`
--
ALTER TABLE `data_kampus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject_university`
--
ALTER TABLE `subject_university`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi_kampus`
--
ALTER TABLE `visimisi_kampus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
