-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2025 at 04:52 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
