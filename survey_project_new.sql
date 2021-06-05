-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2021 at 03:05 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Body Type', NULL, '2021-05-08 06:26:15', '2021-06-05 01:42:13'),
(2, 'SWEATING', NULL, '2021-05-08 06:27:12', '2021-06-05 01:42:58'),
(3, 'SKIN', NULL, '2021-05-08 06:27:26', '2021-06-05 01:43:26'),
(4, 'Sleep', NULL, '2021-06-05 01:43:51', '2021-06-05 01:43:51'),
(5, 'APPETITE (Hunger)', NULL, '2021-06-05 02:06:49', '2021-06-05 02:06:49'),
(6, 'WEATHER REACTION', NULL, '2021-06-05 02:07:29', '2021-06-05 02:07:29'),
(7, 'Weight', NULL, '2021-06-05 02:07:43', '2021-06-05 02:07:43'),
(8, 'Mental state', NULL, '2021-06-05 02:08:05', '2021-06-05 02:08:05'),
(9, 'Digestion', NULL, '2021-06-05 02:08:17', '2021-06-05 02:08:17'),
(10, 'Bones & Joints', NULL, '2021-06-05 02:08:58', '2021-06-05 02:08:58'),
(11, 'Immunity', NULL, '2021-06-05 02:09:10', '2021-06-05 02:09:10'),
(12, 'HAIR', NULL, '2021-06-05 02:09:22', '2021-06-05 02:09:22'),
(13, 'Stress', NULL, '2021-06-05 02:09:51', '2021-06-05 02:09:51'),
(14, 'Diet', NULL, '2021-06-05 02:10:14', '2021-06-05 02:10:14'),
(15, 'Drinking or Drugs', NULL, '2021-06-05 02:10:27', '2021-06-05 02:10:27'),
(16, 'Sex drive', NULL, '2021-06-05 02:10:45', '2021-06-05 02:10:45'),
(17, 'Control of senses', NULL, '2021-06-05 02:11:01', '2021-06-05 02:11:01'),
(18, 'Speech', NULL, '2021-06-05 02:11:10', '2021-06-05 02:11:10'),
(19, 'Cleanliness', NULL, '2021-06-05 02:11:23', '2021-06-05 02:11:23'),
(20, 'Work', NULL, '2021-06-05 02:11:48', '2021-06-05 02:11:48'),
(21, 'Anger', NULL, '2021-06-05 02:11:58', '2021-06-05 02:11:58'),
(22, 'Desire', NULL, '2021-06-05 02:12:07', '2021-06-05 02:12:07'),
(23, 'Fear', NULL, '2021-06-05 02:12:17', '2021-06-05 02:12:17'),
(24, 'Pride', NULL, '2021-06-05 02:12:24', '2021-06-05 02:12:24'),
(25, 'Depression', NULL, '2021-06-05 02:12:37', '2021-06-05 02:12:37'),
(26, 'Love', NULL, '2021-06-05 02:12:45', '2021-06-05 02:12:45'),
(27, 'Violent', NULL, '2021-06-05 02:13:00', '2021-06-05 02:13:00'),
(28, 'Attaches to money', NULL, '2021-06-05 02:13:11', '2021-06-05 02:13:11'),
(29, 'Contentment', NULL, '2021-06-05 02:13:19', '2021-06-05 02:13:19'),
(30, 'Forgiveness', NULL, '2021-06-05 02:13:31', '2021-06-05 02:13:31'),
(31, 'Concentration', NULL, '2021-06-05 02:13:42', '2021-06-05 02:13:42'),
(32, 'Memory', NULL, '2021-06-05 02:13:52', '2021-06-05 02:13:52'),
(33, 'Willpower', NULL, '2021-06-05 02:14:03', '2021-06-05 02:14:03'),
(34, 'Selfless Service', NULL, '2021-06-05 02:14:16', '2021-06-05 02:14:16'),
(35, 'Honesty', NULL, '2021-06-05 02:14:24', '2021-06-05 02:14:24'),
(36, 'Peace of mind', NULL, '2021-06-05 02:14:51', '2021-06-05 02:14:51'),
(37, 'Creativity', NULL, '2021-06-05 02:14:59', '2021-06-05 02:14:59'),
(38, 'Spiritual Study', NULL, '2021-06-05 02:15:11', '2021-06-05 02:15:11'),
(39, 'Mantra/prayer', NULL, '2021-06-05 02:15:33', '2021-06-05 02:15:33'),
(40, 'Relationship', NULL, '2021-06-05 02:15:41', '2021-06-05 02:15:41'),
(41, 'Meditation', NULL, '2021-06-05 02:15:51', '2021-06-05 02:15:51'),
(42, 'Expresses Joy', NULL, '2021-06-05 02:16:01', '2021-06-05 02:16:01'),
(43, 'Mind Type Questionnaire |Satva|Rajas|Tamas', NULL, '2021-06-05 02:38:18', '2021-06-05 02:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(150) NOT NULL,
  `age` varchar(50) DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `state` int(11) NOT NULL DEFAULT '0',
  `is_login` int(11) NOT NULL DEFAULT '0',
  `restore_id` varchar(300) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `email`, `phone`, `age`, `gender`, `state`, `is_login`, `restore_id`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Varun Kumar', 'varunindian10@gmail.com', '8447725222', '29', 1, 34, 1, NULL, '2021-06-05 09:28:52', '2020-10-01 07:30:59', '2021-06-05 03:58:52'),
(2, 'varun chaturvedi', 'varunindian10@gmail.com', '7503131320', '29', 1, 34, 1, NULL, '2021-05-30 03:34:59', '2020-10-01 08:10:06', '2021-05-30 03:34:59'),
(3, '', '', '9871390813', NULL, 0, 0, 1, NULL, '2021-05-09 09:38:01', '2021-05-09 09:38:01', '2021-05-09 09:38:01'),
(4, NULL, '', '7878787878', NULL, 0, 0, 1, NULL, '2021-05-30 01:50:57', '2021-05-30 01:50:57', '2021-05-30 01:50:57');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_24_062456_create_surveys_table', 2),
(5, '2021_04_24_062533_create_survey_questions_table', 2),
(6, '2021_04_24_062602_create_survey_options_table', 2),
(7, '2021_04_24_062618_create_survey_responses_table', 2),
(8, '2021_05_08_111421_create_categories_table', 3),
(9, '2021_05_08_111607_create_responses_table', 4),
(10, '2021_05_08_112317_add_response_id_to_survey_responses', 5),
(11, '2021_05_08_112729_add_survey_id_to_responses', 6),
(12, '2021_05_08_120638_add_category_id_to_survey_questions', 7),
(13, '2021_05_08_123027_add_file_to_survey_questions', 8),
(14, '2021_05_09_155444_add_is_image_to_survey_questions', 9);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `otp` int(11) NOT NULL,
  `login_attempts` int(11) NOT NULL DEFAULT '0',
  `login_block` int(11) NOT NULL DEFAULT '0',
  `resend` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `login_block_at` timestamp NULL DEFAULT NULL,
  `otp_send_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `c_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_type` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `c_id`, `image`, `p_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '1622286537.jpg', 1, 0, '2021-05-29 05:38:57', '2021-05-29 05:38:57'),
(2, 2, '1622350827.jpg', 1, 0, '2021-05-29 23:30:27', '2021-05-29 23:30:27'),
(3, 2, '1622356629.jpg', 1, 0, '2021-05-30 01:07:09', '2021-05-30 01:07:09'),
(4, 2, '1622357501.jpg', 1, 0, '2021-05-30 01:21:41', '2021-05-30 01:21:41'),
(5, 2, '1622357549.jpg', 1, 0, '2021-05-30 01:22:29', '2021-05-30 01:22:29'),
(6, 2, '1622357580.jpg', 1, 0, '2021-05-30 01:23:00', '2021-05-30 01:23:00'),
(7, 2, '1622358021.png', 1, 0, '2021-05-30 01:30:21', '2021-05-30 01:30:21'),
(8, 2, '1622367079.jpg', 1, 0, '2021-05-30 04:01:19', '2021-05-30 04:01:19'),
(9, 1, '1622885362.png', 1, 0, '2021-06-05 03:59:22', '2021-06-05 03:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `survey_id`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 1, 1, '2021-06-05 04:02:46', '2021-06-05 04:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `type` text,
  `customer_or_cart_id` int(11) DEFAULT NULL,
  `session_code` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `type`, `customer_or_cart_id`, `session_code`, `created_at`, `updated_at`) VALUES
(1, 'customer', 1, '0b74eb6cc0e4ef10576ffcf4cd32a05f', '2021-04-18 13:36:23', '2021-04-18 13:36:23'),
(2, 'customer', 2, 'c881617af0ae19b38dd0546548cd53ad', '2021-04-19 09:22:56', '2021-04-19 09:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `slug`, `name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'ANM', 'ANDAMAN AND NICOBAR ISLANDS', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(2, 'AND', 'ANDHRA PRADESH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(3, 'ARU', 'ARUNACHAL PRADESH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(4, 'ASM', 'ASSAM', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(5, 'BR', 'BIHAR', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(6, 'CHAT', 'CHATTISGARH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(7, 'CHAN', 'CHANDIGARH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(8, 'DAM', 'DAMAN AND DIU', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(9, 'DLI', 'DELHI', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(10, 'DAD', 'DADRA AND NAGAR HAVELI', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(11, 'GO', 'GOA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(12, 'GUJ', 'GUJARAT', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(13, 'HP', 'HIMACHAL PRADESH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(14, 'HR', 'HARYANA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(15, 'JK', 'JAMMU AND KASHMIR', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(16, 'JHA', 'JHARKHAND', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(17, 'KER', 'KERALA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(18, 'KAR', 'KARNATAKA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(19, 'LAK', 'LAKSHADWEEP', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(20, 'MEG', 'MEGHALAYA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(21, 'MH', 'MAHARASHTRA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(22, 'MN', 'MANIPUR', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(23, 'MP', 'MADHYA PRADESH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(24, 'MIZ', 'MIZORAM', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(25, 'NG', 'NAGALAND', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(26, 'OR', 'ORISSA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(27, 'PUB', 'PUNJAB', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(28, 'PON', 'PONDICHERRY', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(29, 'RAJ', 'RAJASTHAN', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(30, 'SIK', 'SIKKIM', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(31, 'TN', 'TAMIL NADU', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(32, 'TRI', 'TRIPURA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(33, 'UK', 'UTTARAKHAND', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(34, 'UP', 'UTTAR PRADESH', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(35, 'WB', 'WEST BENGAL', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1),
(36, 'TEL', 'TELANGANA', '2021-01-05 19:00:59', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `thanks_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `title`, `description`, `start_at`, `end_at`, `status`, `thanks_message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Prakruti', 'Answer according to general trends throughout your life \r\nIf you are struggling choose according to what best reflects your healthiest period of life.', '2021-04-13', '2022-01-07', 1, 'Don’t be afried, Our team also give you proper guideline', NULL, '2021-04-23 18:30:00', '2021-06-05 02:17:24'),
(2, 'Testing', 'Testing', '1970-01-01', '1970-01-01', 1, 'Testing', '2021-05-01 05:36:40', '2021-05-01 05:02:09', '2021-05-01 05:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `survey_options`
--

CREATE TABLE `survey_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_options`
--

INSERT INTO `survey_options` (`id`, `survey_id`, `ques_id`, `option`, `position`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2', 1, 1, NULL, '2021-04-23 18:30:00', '2021-06-05 03:50:53'),
(2, 1, 1, '2.5', 2, 1, NULL, '2021-04-23 18:30:00', '2021-06-05 03:50:58'),
(3, 1, 2, 'No', 1, 1, NULL, '2021-04-23 18:30:00', '2021-06-05 03:48:43'),
(4, 1, 2, 'Yes', 2, 1, NULL, '2021-04-23 18:30:00', '2021-06-05 03:48:47'),
(5, 1, 2, 'Close contact with corona symptoms man', 3, 1, '2021-06-05 03:48:53', '2021-04-23 18:30:00', '2021-06-05 03:48:53'),
(6, 1, 2, 'No, I do not', 4, 1, '2021-06-05 03:48:52', '2021-04-23 18:30:00', '2021-06-05 03:48:52'),
(7, 1, 3, 'Thin', 1, 1, NULL, '2021-04-24 07:00:34', '2021-06-05 03:47:55'),
(8, 1, 3, 'Average', 2, 1, NULL, '2021-04-24 07:00:34', '2021-06-05 03:48:04'),
(9, 1, 3, 'Thick', 3, 1, NULL, '2021-04-24 07:01:16', '2021-06-05 03:48:13'),
(10, 1, 3, 'High temperature ( 102°F + )', 4, 1, '2021-06-05 03:47:49', '2021-04-24 07:01:16', '2021-06-05 03:47:49'),
(11, 1, 4, 'Slender/Thin', 1, 1, NULL, '2021-04-24 07:05:46', '2021-06-05 03:46:57'),
(12, 1, 4, 'Medium built', 2, 1, NULL, '2021-04-24 07:05:46', '2021-06-05 03:47:08'),
(13, 1, 4, 'Short & stocky', 3, 1, NULL, '2021-04-24 07:07:02', '2021-06-05 03:47:17'),
(14, 1, 4, 'Headache', 4, 1, '2021-06-05 03:46:28', '2021-04-24 07:07:02', '2021-06-05 03:46:28'),
(15, 1, 4, 'Sore throat', 5, 1, '2021-06-05 03:46:27', '2021-04-24 07:07:51', '2021-06-05 03:46:27'),
(16, 1, 4, 'Runny nose', 6, 1, '2021-06-05 03:46:24', '2021-04-24 07:07:51', '2021-06-05 03:46:24'),
(17, 1, 4, 'No, I don’t', 7, 1, '2021-06-05 03:46:21', '2021-04-24 07:08:14', '2021-06-05 03:46:21'),
(18, 1, 4, 'test1', 8, 1, '2021-05-02 08:48:03', '2021-05-02 08:13:57', '2021-05-02 08:48:03'),
(19, 1, 4, 'test2', 9, 1, '2021-05-02 08:47:49', '2021-05-02 08:13:57', '2021-05-02 08:47:49'),
(20, 1, 4, 'skdjskds', 8, 1, '2021-05-02 08:49:01', '2021-05-02 08:48:24', '2021-05-02 08:49:01'),
(21, 1, 4, 'skdsl', 9, 1, '2021-05-02 08:48:57', '2021-05-02 08:48:24', '2021-05-02 08:48:58'),
(22, 1, 4, 'sldks', 10, 1, '2021-05-02 08:48:53', '2021-05-02 08:48:44', '2021-05-02 08:48:53'),
(23, 1, 4, 'slds', 11, 1, '2021-05-02 08:48:49', '2021-05-02 08:48:44', '2021-05-02 08:48:49'),
(24, 1, 5, 'Test1', 1, 1, NULL, '2021-05-02 08:54:07', '2021-05-02 08:54:07'),
(25, 1, 5, 'test23', 2, 1, NULL, '2021-05-02 08:54:07', '2021-05-02 08:55:10'),
(26, 1, 5, 'test3', 3, 1, NULL, '2021-05-02 08:54:07', '2021-05-02 08:54:07'),
(27, 1, 68, 'Always', 1, 1, NULL, '2021-06-05 02:56:06', '2021-06-05 02:56:06'),
(28, 1, 68, 'Sometimes', 2, 1, NULL, '2021-06-05 02:56:06', '2021-06-05 02:56:06'),
(29, 1, 68, 'rarely', 3, 1, NULL, '2021-06-05 02:56:06', '2021-06-05 02:56:06'),
(30, 1, 67, 'daily', 1, 1, NULL, '2021-06-05 02:57:16', '2021-06-05 02:57:16'),
(31, 1, 67, 'Occasional', 2, 1, NULL, '2021-06-05 02:57:17', '2021-06-05 02:57:17'),
(32, 1, 67, 'rare', 3, 1, NULL, '2021-06-05 02:57:17', '2021-06-05 02:57:17'),
(33, 1, 66, 'Harmonious', 1, 1, NULL, '2021-06-05 02:58:06', '2021-06-05 02:58:06'),
(34, 1, 66, 'Passionate', 2, 1, NULL, '2021-06-05 02:58:06', '2021-06-05 02:58:06'),
(35, 1, 66, 'Disturbed', 3, 1, NULL, '2021-06-05 02:58:06', '2021-06-05 02:58:06'),
(36, 1, 65, 'Daily', 1, 1, NULL, '2021-06-05 02:59:08', '2021-06-05 02:59:08'),
(37, 1, 65, 'Occasionally', 2, 1, NULL, '2021-06-05 02:59:08', '2021-06-05 02:59:08'),
(38, 1, 65, 'Never', 3, 1, NULL, '2021-06-05 02:59:08', '2021-06-05 02:59:08'),
(39, 1, 64, 'Daily', 1, 1, NULL, '2021-06-05 03:00:01', '2021-06-05 03:00:01'),
(40, 1, 64, 'Occasional', 2, 1, NULL, '2021-06-05 03:00:01', '2021-06-05 03:00:01'),
(41, 1, 64, 'Rare', 3, 1, NULL, '2021-06-05 03:00:01', '2021-06-05 03:00:01'),
(42, 1, 63, 'Genrally', 1, 1, NULL, '2021-06-05 03:01:34', '2021-06-05 03:01:34'),
(43, 1, 63, 'Occasionally', 2, 1, NULL, '2021-06-05 03:01:34', '2021-06-05 03:01:34'),
(44, 1, 63, 'Rarely', 3, 1, NULL, '2021-06-05 03:01:34', '2021-06-05 03:01:34'),
(45, 1, 62, 'Yes', 1, 1, NULL, '2021-06-05 03:02:13', '2021-06-05 03:02:13'),
(46, 1, 62, 'Occasional', 2, 1, NULL, '2021-06-05 03:02:13', '2021-06-05 03:02:13'),
(47, 1, 62, 'Rarely', 3, 1, NULL, '2021-06-05 03:02:13', '2021-06-05 03:02:13'),
(48, 1, 61, 'Always', 1, 1, NULL, '2021-06-05 03:03:11', '2021-06-05 03:03:11'),
(49, 1, 61, 'Mostly', 2, 1, NULL, '2021-06-05 03:03:11', '2021-06-05 03:03:11'),
(50, 1, 61, 'Rare', 3, 1, NULL, '2021-06-05 03:03:11', '2021-06-05 03:03:11'),
(51, 1, 60, 'Frequent', 1, 1, NULL, '2021-06-05 03:03:41', '2021-06-05 03:03:41'),
(52, 1, 60, 'Some', 2, 1, NULL, '2021-06-05 03:03:41', '2021-06-05 03:03:41'),
(53, 1, 60, 'Rare', 3, 1, NULL, '2021-06-05 03:03:41', '2021-06-05 03:03:41'),
(54, 1, 59, 'Strong', 1, 1, NULL, '2021-06-05 03:05:02', '2021-06-05 03:05:02'),
(55, 1, 59, 'Variable', 2, 1, NULL, '2021-06-05 03:05:02', '2021-06-05 03:05:02'),
(56, 1, 59, 'Waek', 3, 1, NULL, '2021-06-05 03:05:02', '2021-06-05 03:05:02'),
(57, 1, 58, 'Good', 1, 1, NULL, '2021-06-05 03:05:51', '2021-06-05 03:05:51'),
(58, 1, 58, 'Moderate', 2, 1, NULL, '2021-06-05 03:05:51', '2021-06-05 03:05:51'),
(59, 1, 58, 'Poor', 3, 1, NULL, '2021-06-05 03:05:51', '2021-06-05 03:05:51'),
(60, 1, 57, 'Good', 1, 1, NULL, '2021-06-05 03:06:28', '2021-06-05 03:06:28'),
(61, 1, 57, 'Moderate', 2, 1, NULL, '2021-06-05 03:06:28', '2021-06-05 03:06:28'),
(62, 1, 57, 'Poor', 3, 1, NULL, '2021-06-05 03:06:28', '2021-06-05 03:06:28'),
(63, 1, 56, 'Easily', 1, 1, NULL, '2021-06-05 03:07:29', '2021-06-05 03:07:29'),
(64, 1, 56, 'With effort', 2, 1, NULL, '2021-06-05 03:07:29', '2021-06-05 03:07:29'),
(65, 1, 56, 'Holds Grudge', 3, 1, NULL, '2021-06-05 03:07:29', '2021-06-05 03:07:29'),
(66, 1, 55, 'Yes', 1, 1, NULL, '2021-06-05 03:08:18', '2021-06-05 03:08:18'),
(67, 1, 55, 'Sometimes', 2, 1, NULL, '2021-06-05 03:08:18', '2021-06-05 03:08:18'),
(68, 1, 55, 'Never', 3, 1, NULL, '2021-06-05 03:08:18', '2021-06-05 03:08:18'),
(69, 1, 54, 'No', 1, 1, NULL, '2021-06-05 03:09:06', '2021-06-05 03:09:06'),
(70, 1, 54, 'Somewhat', 2, 1, NULL, '2021-06-05 03:09:06', '2021-06-05 03:09:06'),
(71, 1, 54, 'Very', 3, 1, NULL, '2021-06-05 03:09:06', '2021-06-05 03:09:06'),
(72, 1, 53, 'Never', 1, 1, NULL, '2021-06-05 03:09:48', '2021-06-05 03:09:48'),
(73, 1, 53, 'Sometimes', 2, 1, NULL, '2021-06-05 03:09:48', '2021-06-05 03:09:48'),
(74, 1, 53, 'Frequent', 3, 1, NULL, '2021-06-05 03:09:48', '2021-06-05 03:09:48'),
(75, 1, 52, 'Gives', 1, 1, NULL, '2021-06-05 03:10:16', '2021-06-05 03:10:16'),
(76, 1, 52, 'Takes', 2, 1, NULL, '2021-06-05 03:10:16', '2021-06-05 03:10:16'),
(77, 1, 52, 'Need', 3, 1, NULL, '2021-06-05 03:10:16', '2021-06-05 03:10:16'),
(78, 1, 51, 'Never', 1, 1, NULL, '2021-06-05 03:10:52', '2021-06-05 03:10:52'),
(79, 1, 51, 'Some', 2, 1, NULL, '2021-06-05 03:10:52', '2021-06-05 03:10:52'),
(80, 1, 51, 'Frequent', 3, 1, NULL, '2021-06-05 03:10:52', '2021-06-05 03:10:52'),
(81, 1, 50, 'Modest', 1, 1, NULL, '2021-06-05 03:11:26', '2021-06-05 03:11:26'),
(82, 1, 50, 'Ego', 2, 1, NULL, '2021-06-05 03:11:26', '2021-06-05 03:11:26'),
(83, 1, 50, 'Vain', 3, 1, NULL, '2021-06-05 03:11:26', '2021-06-05 03:11:26'),
(84, 1, 49, 'Rarely', 1, 1, NULL, '2021-06-05 03:13:27', '2021-06-05 03:13:27'),
(85, 1, 49, 'Sometimes', 2, 1, NULL, '2021-06-05 03:13:27', '2021-06-05 03:13:27'),
(86, 1, 49, 'Frequently', 3, 1, NULL, '2021-06-05 03:13:27', '2021-06-05 03:13:27'),
(87, 1, 48, 'Little', 1, 1, NULL, '2021-06-05 03:14:16', '2021-06-05 03:14:16'),
(88, 1, 48, 'Some', 2, 1, NULL, '2021-06-05 03:14:16', '2021-06-05 03:14:16'),
(89, 1, 48, 'Much', 3, 1, NULL, '2021-06-05 03:14:16', '2021-06-05 03:14:16'),
(90, 1, 47, 'Rare', 1, 1, NULL, '2021-06-05 03:14:52', '2021-06-05 03:14:52'),
(91, 1, 47, 'Some', 2, 1, NULL, '2021-06-05 03:14:52', '2021-06-05 03:14:52'),
(92, 1, 47, 'Frequently', 3, 1, NULL, '2021-06-05 03:14:52', '2021-06-05 03:14:52'),
(93, 1, 46, 'Selfless', 1, 1, NULL, '2021-06-05 03:15:31', '2021-06-05 03:15:31'),
(94, 1, 46, 'Personal', 2, 1, NULL, '2021-06-05 03:15:31', '2021-06-05 03:15:31'),
(95, 1, 46, 'Lazy', 3, 1, NULL, '2021-06-05 03:15:32', '2021-06-05 03:15:32'),
(96, 1, 45, 'High', 1, 1, NULL, '2021-06-05 03:16:03', '2021-06-05 03:16:03'),
(97, 1, 45, 'Moderate', 2, 1, NULL, '2021-06-05 03:16:03', '2021-06-05 03:16:03'),
(98, 1, 45, 'Low', 3, 1, NULL, '2021-06-05 03:16:03', '2021-06-05 03:16:03'),
(99, 1, 44, 'Calm-soft', 1, 1, NULL, '2021-06-05 03:16:40', '2021-06-05 03:16:40'),
(100, 1, 44, 'Agitated', 2, 1, NULL, '2021-06-05 03:16:40', '2021-06-05 03:16:40'),
(101, 1, 44, 'Dull', 3, 1, NULL, '2021-06-05 03:16:41', '2021-06-05 03:16:41'),
(102, 1, 43, 'Good', 1, 1, NULL, '2021-06-05 03:17:22', '2021-06-05 03:17:22'),
(103, 1, 43, 'Moderate', 2, 1, NULL, '2021-06-05 03:17:22', '2021-06-05 03:17:22'),
(104, 1, 43, 'Weak', 3, 1, NULL, '2021-06-05 03:17:22', '2021-06-05 03:17:22'),
(105, 1, 42, 'Low', 1, 1, NULL, '2021-06-05 03:17:50', '2021-06-05 03:17:50'),
(106, 1, 42, 'Medium', 2, 1, NULL, '2021-06-05 03:17:50', '2021-06-05 03:17:50'),
(107, 1, 42, 'High', 3, 1, NULL, '2021-06-05 03:17:50', '2021-06-05 03:17:50'),
(108, 1, 41, 'Little', 1, 1, NULL, '2021-06-05 03:18:25', '2021-06-05 03:18:25'),
(109, 1, 41, 'Moderate', 2, 1, NULL, '2021-06-05 03:18:25', '2021-06-05 03:18:25'),
(110, 1, 41, 'Lots', 3, 1, NULL, '2021-06-05 03:18:25', '2021-06-05 03:18:25'),
(111, 1, 40, 'Never', 1, 1, NULL, '2021-06-05 03:18:59', '2021-06-05 03:18:59'),
(112, 1, 40, 'Some', 2, 1, NULL, '2021-06-05 03:18:59', '2021-06-05 03:18:59'),
(113, 1, 40, 'Frequently', 3, 1, NULL, '2021-06-05 03:18:59', '2021-06-05 03:18:59'),
(114, 1, 39, 'Vegetarian Fresh', 1, 1, NULL, '2021-06-05 03:20:01', '2021-06-05 03:20:01'),
(115, 1, 39, 'Some meat, Process food or Comfort foods', 2, 1, NULL, '2021-06-05 03:20:01', '2021-06-05 03:20:01'),
(116, 1, 39, 'Excess meat, processed foods,or comfort foods', 3, 1, NULL, '2021-06-05 03:20:02', '2021-06-05 03:20:02'),
(117, 1, 38, 'sluggish, foggy, or clouded—distinctly lacking in clarity', 1, 1, NULL, '2021-06-05 03:20:49', '2021-06-05 03:20:49'),
(118, 1, 38, 'uncompromising, or critical of Yourself and others.', 2, 1, NULL, '2021-06-05 03:20:49', '2021-06-05 03:20:49'),
(119, 1, 38, 'spacey, scattered, or indecisive.', 3, 1, NULL, '2021-06-05 03:20:49', '2021-06-05 03:20:49'),
(120, 1, 37, 'Mind is active & gets restless easily', 1, 1, NULL, '2021-06-05 03:21:32', '2021-06-05 03:21:32'),
(121, 1, 37, 'Enjoy learning new things', 2, 1, NULL, '2021-06-05 03:21:32', '2021-06-05 03:21:32'),
(122, 1, 37, 'I prefer slow & relaxed lifestyle', 3, 1, NULL, '2021-06-05 03:21:32', '2021-06-05 03:21:32'),
(123, 1, 36, 'Yes', 1, 1, NULL, '2021-06-05 03:21:59', '2021-06-05 03:21:59'),
(124, 1, 36, 'No', 2, 1, NULL, '2021-06-05 03:21:59', '2021-06-05 03:21:59'),
(125, 1, 35, 'Yes', 1, 1, NULL, '2021-06-05 03:22:14', '2021-06-05 03:22:14'),
(126, 1, 35, 'No', 2, 1, NULL, '2021-06-05 03:22:14', '2021-06-05 03:22:14'),
(127, 1, 34, 'Yes', 1, 1, NULL, '2021-06-05 03:22:34', '2021-06-05 03:22:34'),
(128, 1, 34, 'No', 2, 1, NULL, '2021-06-05 03:22:34', '2021-06-05 03:22:34'),
(129, 1, 33, 'Irregular, sometimes I feel hungry, sometimes not', 1, 1, NULL, '2021-06-05 03:23:57', '2021-06-05 03:23:57'),
(130, 1, 33, 'Strong  & can eat large quantity of food', 2, 1, NULL, '2021-06-05 03:23:57', '2021-06-05 03:23:57'),
(131, 1, 33, 'Medium to low; tendency to eat for comfort & taste', 3, 1, NULL, '2021-06-05 03:23:57', '2021-06-05 03:23:57'),
(132, 1, 32, 'Rough, Dry, tendency to split ends & breakage', 1, 1, NULL, '2021-06-05 03:24:36', '2021-06-05 03:24:36'),
(133, 1, 32, 'Normal, straight & tendency to be brownish or greying', 2, 1, NULL, '2021-06-05 03:24:36', '2021-06-05 03:24:36'),
(134, 1, 32, 'Thick, abundant & oily', 3, 1, NULL, '2021-06-05 03:24:36', '2021-06-05 03:24:36'),
(135, 1, 31, 'Rarely', 1, 1, NULL, '2021-06-05 03:25:08', '2021-06-05 03:25:08'),
(136, 1, 31, 'Frequently', 2, 1, NULL, '2021-06-05 03:25:08', '2021-06-05 03:25:08'),
(137, 1, 30, 'Dull,dry,Wrinkled & dehydrated', 1, 1, NULL, '2021-06-05 03:26:01', '2021-06-05 03:26:01'),
(138, 1, 30, 'Reddish, inflamed & Sometimes itching', 2, 1, NULL, '2021-06-05 03:26:01', '2021-06-05 03:26:01'),
(139, 1, 30, 'Excessive oily, likely to itching & fungal infections', 3, 1, NULL, '2021-06-05 03:26:01', '2021-06-05 03:26:01'),
(140, 1, 29, 'No', 1, 1, NULL, '2021-06-05 03:27:33', '2021-06-05 03:27:33'),
(141, 1, 29, 'Yes', 2, 1, NULL, '2021-06-05 03:27:33', '2021-06-05 03:27:33'),
(142, 1, 28, 'No', 1, 1, NULL, '2021-06-05 03:27:49', '2021-06-05 03:27:49'),
(143, 1, 28, 'Yes', 2, 1, NULL, '2021-06-05 03:27:49', '2021-06-05 03:27:49'),
(144, 1, 27, 'Yes', 1, 1, NULL, '2021-06-05 03:28:12', '2021-06-05 03:28:12'),
(145, 1, 27, 'No', 2, 1, NULL, '2021-06-05 03:28:12', '2021-06-05 03:28:12'),
(146, 1, 26, 'Yes daily', 1, 1, NULL, '2021-06-05 03:29:06', '2021-06-05 03:29:06'),
(147, 1, 26, 'Sometimes', 2, 1, NULL, '2021-06-05 03:29:06', '2021-06-05 03:29:06'),
(148, 1, 26, 'Hardly I wake up', 3, 1, NULL, '2021-06-05 03:29:06', '2021-06-05 03:29:06'),
(149, 1, 25, '5 to 6 hrs', 1, 1, NULL, '2021-06-05 03:29:38', '2021-06-05 03:29:38'),
(150, 1, 25, '6 to 7Hrs', 2, 1, NULL, '2021-06-05 03:29:38', '2021-06-05 03:29:38'),
(151, 1, 25, '7~8 hrs.', 3, 1, NULL, '2021-06-05 03:29:38', '2021-06-05 03:29:38'),
(152, 1, 24, '40~60Min', 1, 1, NULL, '2021-06-05 03:30:18', '2021-06-05 03:30:18'),
(153, 1, 24, 'Greater than 60 Min', 2, 1, NULL, '2021-06-05 03:30:18', '2021-06-05 03:30:18'),
(154, 1, 24, 'Less than 30 min.', 3, 1, NULL, '2021-06-05 03:30:18', '2021-06-05 03:30:18'),
(155, 1, 23, 'Restless &  less refreshed', 1, 1, NULL, '2021-06-05 03:31:16', '2021-06-05 03:31:16'),
(156, 1, 23, 'Difficult to rise even after 7~8 hrs of deep sleep', 2, 1, NULL, '2021-06-05 03:31:16', '2021-06-05 03:31:16'),
(157, 1, 23, 'Fresh & rested', 3, 1, NULL, '2021-06-05 03:31:16', '2021-06-05 03:31:16'),
(158, 1, 21, 'Once every 2~3 days', 1, 1, NULL, '2021-06-05 03:32:02', '2021-06-05 03:32:37'),
(159, 1, 21, 'Need laxative daily', 2, 1, NULL, '2021-06-05 03:32:02', '2021-06-05 03:32:45'),
(160, 1, 21, '1 or 2 times a day', 3, 1, NULL, '2021-06-05 03:32:02', '2021-06-05 03:32:54'),
(161, 1, 21, 'Alternate day', 4, 1, NULL, '2021-06-05 03:33:20', '2021-06-05 03:33:20'),
(162, 1, 21, 'Late in day time', 5, 1, NULL, '2021-06-05 03:33:20', '2021-06-05 03:33:20'),
(163, 1, 22, 'Light; easily interrupted', 1, 1, NULL, '2021-06-05 03:33:57', '2021-06-05 03:33:57'),
(164, 1, 22, 'Moderate & Uninterrupted', 2, 1, NULL, '2021-06-05 03:33:57', '2021-06-05 03:33:57'),
(165, 1, 22, 'Deep , Sound and Prolonged', 3, 1, NULL, '2021-06-05 03:33:57', '2021-06-05 03:33:57'),
(166, 1, 20, 'dry or hard, maybe even tending toward constipation.', 1, 1, NULL, '2021-06-05 03:35:01', '2021-06-05 03:35:01'),
(167, 1, 20, 'soft & rounded & sometimes unformed', 2, 1, NULL, '2021-06-05 03:35:01', '2021-06-05 03:35:01'),
(168, 1, 20, 'sticky or slow, & may also feel incomplete elimination', 3, 1, NULL, '2021-06-05 03:35:02', '2021-06-05 03:35:02'),
(169, 1, 20, 'sometimes excess mucus in stools', 4, 1, NULL, '2021-06-05 03:35:02', '2021-06-05 03:35:02'),
(170, 1, 19, 'Gassy & bloated', 1, 1, NULL, '2021-06-05 03:35:49', '2021-06-05 03:35:49'),
(171, 1, 19, 'Acidity, heatburn, burning sensations, or tightness in belly', 2, 1, NULL, '2021-06-05 03:35:49', '2021-06-05 03:35:49'),
(172, 1, 19, 'Feel heavy after eating', 3, 1, NULL, '2021-06-05 03:35:49', '2021-06-05 03:35:49'),
(173, 1, 18, 'Irregular, sometimes I feel hungry, sometimes not', 1, 1, NULL, '2021-06-05 03:37:02', '2021-06-05 03:37:02'),
(174, 1, 18, 'Strong & can eat large quantity', 2, 1, NULL, '2021-06-05 03:37:02', '2021-06-05 03:37:02'),
(175, 1, 18, 'Medium to low & almost no discomfort when I skip a meal', 3, 1, NULL, '2021-06-05 03:37:02', '2021-06-05 03:37:02'),
(176, 1, 17, 'Constipation & irregular bowel movements', 1, 1, NULL, '2021-06-05 03:37:44', '2021-06-05 03:37:44'),
(177, 1, 17, 'Regular bowel movement', 2, 1, NULL, '2021-06-05 03:37:44', '2021-06-05 03:37:44'),
(178, 1, 17, 'Slow & Sluggish digestion', 3, 1, NULL, '2021-06-05 03:37:44', '2021-06-05 03:37:44'),
(179, 1, 16, 'I am creative & imaginative', 1, 1, NULL, '2021-06-05 03:38:39', '2021-06-05 03:38:39'),
(180, 1, 16, 'Strong intellect , disciplined, wise & stubborn', 2, 1, NULL, '2021-06-05 03:38:39', '2021-06-05 03:38:39'),
(181, 1, 16, 'gentle, loving, or compassionate & focus on the good in the world', 3, 1, NULL, '2021-06-05 03:38:39', '2021-06-05 03:38:39'),
(182, 1, 15, 'Over thinking', 1, 1, NULL, '2021-06-05 03:39:13', '2021-06-05 03:39:13'),
(183, 1, 15, 'Quick implementation', 2, 1, NULL, '2021-06-05 03:39:13', '2021-06-05 03:39:13'),
(184, 1, 15, 'Slow & relaxed implementation', 3, 1, NULL, '2021-06-05 03:39:13', '2021-06-05 03:39:13'),
(185, 1, 14, 'Mind gets restless easily', 1, 1, NULL, '2021-06-05 03:39:51', '2021-06-05 03:39:51'),
(186, 1, 14, 'Get impatient or aggressive easily', 2, 1, NULL, '2021-06-05 03:39:51', '2021-06-05 03:39:51'),
(187, 1, 14, 'Calm in nature &  not easily angered', 3, 1, NULL, '2021-06-05 03:39:51', '2021-06-05 03:39:51'),
(188, 1, 13, 'Quick to learn & quick to forget', 1, 1, NULL, '2021-06-05 03:40:36', '2021-06-05 03:40:36'),
(189, 1, 13, 'Average to learn & never forget', 2, 1, NULL, '2021-06-05 03:40:36', '2021-06-05 03:40:36'),
(190, 1, 13, 'Slow to learn, but don’t forget easily (long term memory is good)', 3, 1, NULL, '2021-06-05 03:40:36', '2021-06-05 03:40:36'),
(191, 1, 12, 'Don’t gain weight easily', 1, 1, NULL, '2021-06-05 03:41:43', '2021-06-05 03:41:43'),
(192, 1, 12, 'I gain & loose weight easily', 2, 1, NULL, '2021-06-05 03:41:43', '2021-06-05 03:41:43'),
(193, 1, 12, 'I gain weight easily but struggle to loose', 3, 1, NULL, '2021-06-05 03:41:43', '2021-06-05 03:41:43'),
(194, 1, 11, 'Enjoy warm, humid weather', 1, 1, NULL, '2021-06-05 03:42:24', '2021-06-05 03:42:24'),
(195, 1, 11, 'Like cool weather, You dislike a warm climate', 2, 1, NULL, '2021-06-05 03:42:24', '2021-06-05 03:42:24'),
(196, 1, 11, 'You like warm and dry', 3, 1, NULL, '2021-06-05 03:42:24', '2021-06-05 03:42:24'),
(197, 1, 10, 'Irregular, sometimes I feel hungry, sometimes not', 1, 1, NULL, '2021-06-05 03:43:05', '2021-06-05 03:43:05'),
(198, 1, 10, 'Strong & sharp; I always feel hungry', 2, 1, NULL, '2021-06-05 03:43:05', '2021-06-05 03:43:05'),
(199, 1, 10, 'Medium to low; tendency to eat for comfort & taste', 3, 1, NULL, '2021-06-05 03:43:05', '2021-06-05 03:43:05'),
(200, 1, 9, 'Light & easily disturbed', 1, 1, NULL, '2021-06-05 03:43:43', '2021-06-05 03:43:43'),
(201, 1, 9, 'Moderate but regular', 2, 1, NULL, '2021-06-05 03:43:43', '2021-06-05 03:43:43'),
(202, 1, 9, 'Deep & sound sleep', 3, 1, NULL, '2021-06-05 03:43:43', '2021-06-05 03:43:43'),
(203, 1, 8, 'Normal to dry, rough, thin', 1, 1, NULL, '2021-06-05 03:44:18', '2021-06-05 03:44:18'),
(204, 1, 8, 'Normal to oily,soft,reddish', 2, 1, NULL, '2021-06-05 03:44:18', '2021-06-05 03:44:18'),
(205, 1, 8, 'Normal to oily,soft,smooth & thick', 3, 1, NULL, '2021-06-05 03:44:18', '2021-06-05 03:44:18'),
(206, 1, 7, 'I sweat little', 1, 1, NULL, '2021-06-05 03:45:04', '2021-06-05 03:45:04'),
(207, 1, 7, 'I sweat very much & easily', 2, 1, NULL, '2021-06-05 03:45:04', '2021-06-05 03:45:04'),
(208, 1, 7, 'I never sweat, unless working hard', 3, 1, NULL, '2021-06-05 03:45:04', '2021-06-05 03:45:04'),
(209, 1, 6, 'No', 1, 1, NULL, '2021-06-05 03:45:27', '2021-06-05 03:45:27'),
(210, 1, 6, 'Yes', 2, 1, NULL, '2021-06-05 03:45:27', '2021-06-05 03:45:27'),
(211, 1, 6, 'No', 1, 1, '2021-06-05 03:45:37', '2021-06-05 03:45:33', '2021-06-05 03:45:37'),
(212, 1, 6, 'Yes', 2, 1, '2021-06-05 03:45:38', '2021-06-05 03:45:33', '2021-06-05 03:45:38'),
(213, 1, 4, 'Tall & Sturdy', 4, 1, NULL, '2021-06-05 03:47:29', '2021-06-05 03:47:29'),
(214, 1, 1, '3', 3, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(215, 1, 1, '3.5', 4, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(216, 1, 1, '4', 5, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(217, 1, 1, '4.5', 6, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(218, 1, 1, '5', 7, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(219, 1, 1, '5.5', 8, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(220, 1, 1, '6', 9, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(221, 1, 1, '6.5', 10, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46'),
(222, 1, 1, '7', 11, 1, NULL, '2021-06-05 03:50:46', '2021-06-05 03:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `is_image` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `q_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>choose one option,2=>choose more than one options',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`id`, `survey_id`, `category_id`, `question`, `description`, `position`, `is_image`, `status`, `q_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Your height is', NULL, 1, 0, 1, '1', NULL, '2021-04-23 18:30:00', '2021-06-05 02:20:25'),
(2, 1, 1, 'Your nose & chin are pointed', NULL, 2, 0, 1, '1', NULL, '2021-04-23 18:30:00', '2021-06-05 02:19:46'),
(3, 1, 1, 'Your bodily features like hair, neck, fingers & lips are?', NULL, 3, 0, 1, '1', NULL, '2021-04-24 06:58:47', '2021-06-05 02:18:59'),
(4, 1, 1, 'Your body frame is (Skeletal)', 'Answer according to general trends throughout your life \r\nIf you are struggling choose according to what best reflects your healthiest period of life.', 1, 0, 1, '1', NULL, '2021-04-24 07:04:12', '2021-06-05 03:55:21'),
(5, 1, 0, 'erew', 'werew', 3, 0, 1, '1', '2021-05-07 20:30:00', '2021-05-01 07:06:13', '2021-05-08 10:14:37'),
(6, 1, 1, 'I have bigger bones, with broad shoulders and hips', NULL, 5, 0, 1, '1', NULL, '2021-06-05 02:21:16', '2021-06-05 02:22:23'),
(7, 1, 2, 'Sweating tendency', NULL, 6, 0, 1, '1', NULL, '2021-06-05 02:21:41', '2021-06-05 02:22:32'),
(8, 1, 3, 'Your skin is', NULL, 7, 0, 1, '1', NULL, '2021-06-05 02:22:02', '2021-06-05 02:22:15'),
(9, 1, 4, 'Your sleep is', NULL, 8, 0, 1, '1', NULL, '2021-06-05 02:23:01', '2021-06-05 02:23:01'),
(10, 1, 5, 'Your appetite is', NULL, 9, 0, 1, '1', NULL, '2021-06-05 02:23:24', '2021-06-05 02:23:24'),
(11, 1, 6, 'You like', NULL, 10, 0, 1, '1', NULL, '2021-06-05 02:23:52', '2021-06-05 02:23:52'),
(12, 1, 7, 'Your weight tendency is', NULL, 11, 0, 1, '1', NULL, '2021-06-05 02:24:22', '2021-06-05 02:24:22'),
(13, 1, 8, 'Learning ability', NULL, 12, 0, 1, '1', NULL, '2021-06-05 02:24:54', '2021-06-05 02:24:54'),
(14, 1, 8, 'Your mind is', NULL, 13, 0, 1, '1', NULL, '2021-06-05 02:25:23', '2021-06-05 02:25:23'),
(15, 1, 8, 'Your natural tendency is', NULL, 14, 0, 1, '1', NULL, '2021-06-05 02:25:51', '2021-06-05 02:25:51'),
(16, 1, 8, 'As a student Your friend & teachers used to say', NULL, 15, 0, 1, '1', NULL, '2021-06-05 02:26:17', '2021-06-05 02:26:17'),
(17, 1, 9, 'I experience more often', 'In this section answer based on how healthy are you feeling currently or in last 30 days\r\nAnswer as honest as possible in order to generate the most personalized recommendations', 16, 0, 1, '1', NULL, '2021-06-05 02:26:57', '2021-06-05 03:53:45'),
(18, 1, 9, 'Your appetite is', NULL, 17, 0, 1, '1', NULL, '2021-06-05 02:27:15', '2021-06-05 02:27:15'),
(19, 1, 9, 'Your digestive tract feeling is', NULL, 18, 0, 1, '1', NULL, '2021-06-05 02:28:07', '2021-06-05 02:28:07'),
(20, 1, 9, 'Your stools have frequently been', NULL, 19, 0, 1, '1', NULL, '2021-06-05 02:28:32', '2021-06-05 02:28:32'),
(21, 1, 9, 'Bowel movement frequency is', NULL, 20, 0, 1, '1', NULL, '2021-06-05 02:28:58', '2021-06-05 02:28:58'),
(22, 1, 4, 'Your sleep Quality is', NULL, 21, 0, 1, '1', NULL, '2021-06-05 02:29:40', '2021-06-05 02:29:40'),
(23, 1, 4, 'When you arise in the morning how do you feel?', NULL, 22, 0, 1, '1', NULL, '2021-06-05 02:29:58', '2021-06-05 02:29:58'),
(24, 1, 4, 'How long does it take to fall asleep?', NULL, 23, 0, 1, '1', NULL, '2021-06-05 02:30:19', '2021-06-05 02:30:19'),
(25, 1, 4, 'How many hours do you sleep each night?', NULL, 24, 0, 1, '1', NULL, '2021-06-05 02:30:47', '2021-06-05 02:30:47'),
(26, 1, 4, 'Do you wake-up in night?', NULL, 25, 0, 1, '1', NULL, '2021-06-05 02:31:05', '2021-06-05 02:31:05'),
(27, 1, 10, 'I feel Crackling sound in joints & sometimes pain but no swelling', NULL, 26, 0, 1, '1', NULL, '2021-06-05 02:31:39', '2021-06-05 02:31:39'),
(28, 1, 10, 'Redness of the joints with burning pain', NULL, 27, 0, 1, '1', NULL, '2021-06-05 02:31:59', '2021-06-05 02:31:59'),
(29, 1, 10, 'Swelling & stiffness of Joints with mild pain?', NULL, 28, 0, 1, '1', NULL, '2021-06-05 02:32:23', '2021-06-05 02:32:23'),
(30, 1, 11, 'Your skin has been', NULL, 29, 0, 1, '1', NULL, '2021-06-05 02:32:53', '2021-06-05 02:32:53'),
(31, 1, 11, 'How often tend to get regular congestion or frequent colds & produce excess mucus', NULL, 30, 0, 1, '1', NULL, '2021-06-05 02:33:10', '2021-06-05 02:33:10'),
(32, 1, 11, 'Your hairs are', NULL, 31, 0, 1, '1', NULL, '2021-06-05 02:33:29', '2021-06-05 02:33:29'),
(33, 1, 5, 'Your appetite is?', NULL, 32, 0, 1, '1', NULL, '2021-06-05 02:33:58', '2021-06-05 02:33:58'),
(34, 1, 13, 'I become anxious & often feel nervousness & loneliness', NULL, 33, 0, 1, '1', NULL, '2021-06-05 02:34:31', '2021-06-05 02:34:31'),
(35, 1, 13, 'I become irritable or impatient & angry & feel  frustrated & jealous', NULL, 34, 0, 1, '1', NULL, '2021-06-05 02:35:11', '2021-06-05 02:35:11'),
(36, 1, 13, 'I feel lethargic & lack of motivation & sometime  become depressed', NULL, 35, 0, 1, '1', NULL, '2021-06-05 02:35:35', '2021-06-05 02:35:35'),
(37, 1, 13, 'Your state of mind is', NULL, 36, 0, 1, '1', NULL, '2021-06-05 02:35:58', '2021-06-05 02:35:58'),
(38, 1, 13, 'Recently I become', NULL, 37, 0, 1, '1', NULL, '2021-06-05 02:36:16', '2021-06-05 02:36:16'),
(39, 1, 43, 'Diet', NULL, 38, 0, 1, '1', NULL, '2021-06-05 02:39:11', '2021-06-05 02:39:42'),
(40, 1, 43, 'Drinking or Drugs', NULL, 39, 0, 1, '1', NULL, '2021-06-05 02:40:09', '2021-06-05 02:40:09'),
(41, 1, 43, 'Sleep', NULL, 40, 0, 1, '1', NULL, '2021-06-05 02:40:28', '2021-06-05 02:40:28'),
(42, 1, 43, 'Sex drive', NULL, 41, 0, 1, '1', NULL, '2021-06-05 02:41:11', '2021-06-05 02:41:11'),
(43, 1, 43, 'Control of senses', NULL, 42, 0, 1, '1', NULL, '2021-06-05 02:41:34', '2021-06-05 02:41:34'),
(44, 1, 43, 'Speech', NULL, 43, 0, 1, '1', NULL, '2021-06-05 02:41:56', '2021-06-05 02:41:56'),
(45, 1, 43, 'Cleanliness', NULL, 44, 0, 1, '1', NULL, '2021-06-05 02:42:42', '2021-06-05 02:42:42'),
(46, 1, 43, 'Work', NULL, 45, 0, 1, '1', NULL, '2021-06-05 02:43:09', '2021-06-05 02:43:09'),
(47, 1, 43, 'Anger', NULL, 46, 0, 1, '1', NULL, '2021-06-05 02:45:07', '2021-06-05 02:45:07'),
(48, 1, 43, 'Desire', NULL, 47, 0, 1, '1', NULL, '2021-06-05 02:45:23', '2021-06-05 02:45:23'),
(49, 1, 43, 'Fear', NULL, 48, 0, 1, '1', NULL, '2021-06-05 02:46:29', '2021-06-05 02:46:29'),
(50, 1, 43, 'Pride', NULL, 49, 0, 1, '1', NULL, '2021-06-05 02:46:55', '2021-06-05 02:46:55'),
(51, 1, 43, 'Depression', NULL, 50, 0, 1, '1', NULL, '2021-06-05 02:47:21', '2021-06-05 02:47:21'),
(52, 1, 43, 'Love', NULL, 51, 0, 1, '1', NULL, '2021-06-05 02:47:39', '2021-06-05 02:47:39'),
(53, 1, 43, 'Violent', NULL, 52, 0, 1, '1', NULL, '2021-06-05 02:48:15', '2021-06-05 02:48:15'),
(54, 1, 43, 'Attaches to money', NULL, 53, 0, 1, '1', NULL, '2021-06-05 02:49:44', '2021-06-05 02:49:44'),
(55, 1, 43, 'Contentment', NULL, 54, 0, 1, '1', NULL, '2021-06-05 02:50:05', '2021-06-05 02:50:05'),
(56, 1, 43, 'Forgiveness', NULL, 55, 0, 1, '1', NULL, '2021-06-05 02:50:35', '2021-06-05 02:50:35'),
(57, 1, 43, 'Concentration', NULL, 56, 0, 1, '1', NULL, '2021-06-05 02:51:06', '2021-06-05 02:51:06'),
(58, 1, 43, 'Memory', NULL, 57, 0, 1, '1', NULL, '2021-06-05 02:51:26', '2021-06-05 02:51:26'),
(59, 1, 43, 'Willpower', NULL, 58, 0, 1, '1', NULL, '2021-06-05 02:51:56', '2021-06-05 02:51:56'),
(60, 1, 43, 'Selfless Service', NULL, 59, 0, 1, '1', NULL, '2021-06-05 02:52:17', '2021-06-05 02:52:17'),
(61, 1, 43, 'Honesty', NULL, 60, 0, 1, '1', NULL, '2021-06-05 02:52:47', '2021-06-05 02:52:47'),
(62, 1, 43, 'Peace of mind', NULL, 61, 0, 1, '1', NULL, '2021-06-05 02:53:15', '2021-06-05 03:04:05'),
(63, 1, 43, 'Creativity', NULL, 62, 0, 1, '1', NULL, '2021-06-05 02:53:40', '2021-06-05 02:53:40'),
(64, 1, 43, 'Spiritual Study', NULL, 63, 0, 1, '1', NULL, '2021-06-05 02:54:00', '2021-06-05 02:54:00'),
(65, 1, 43, 'Mantra/prayer', NULL, 64, 0, 1, '1', NULL, '2021-06-05 02:54:21', '2021-06-05 02:54:21'),
(66, 1, 43, 'Relationship', NULL, 65, 0, 1, '1', NULL, '2021-06-05 02:54:41', '2021-06-05 02:54:41'),
(67, 1, 43, 'Meditation', NULL, 66, 0, 1, '1', NULL, '2021-06-05 02:54:59', '2021-06-05 02:54:59'),
(68, 1, 43, 'Expresses Joy', NULL, 67, 0, 1, '1', NULL, '2021-06-05 02:55:21', '2021-06-05 02:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `response_id` int(10) UNSIGNED NOT NULL,
  `survey_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `options_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `response_id`, `survey_id`, `ques_id`, `options_id`, `customer_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(65, 14, 1, 1, '218', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(66, 14, 1, 4, '12', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(67, 14, 1, 2, '3', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(68, 14, 1, 3, '8', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(69, 14, 1, 6, '209', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(70, 14, 1, 7, '206', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(71, 14, 1, 8, '204', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(72, 14, 1, 9, '201', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(73, 14, 1, 10, '199', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(74, 14, 1, 11, '196', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(75, 14, 1, 12, '192', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(76, 14, 1, 13, '189', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(77, 14, 1, 14, '186', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(78, 14, 1, 15, '183', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(79, 14, 1, 16, '180', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(80, 14, 1, 17, '176', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(81, 14, 1, 18, '175', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(82, 14, 1, 19, '171', 1, 1, NULL, '2021-06-05 04:02:47', '2021-06-05 04:02:47'),
(83, 14, 1, 20, '168', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(84, 14, 1, 21, '161', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(85, 14, 1, 22, '165', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(86, 14, 1, 23, '156', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(87, 14, 1, 24, '153', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(88, 14, 1, 25, '149', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(89, 14, 1, 26, '147', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(90, 14, 1, 27, '145', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(91, 14, 1, 28, '143', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(92, 14, 1, 29, NULL, 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(93, 14, 1, 30, '139', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(94, 14, 1, 31, '136', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(95, 14, 1, 32, '134', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(96, 14, 1, 33, '130', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(97, 14, 1, 34, '128', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(98, 14, 1, 35, '126', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(99, 14, 1, 36, '124', 1, 1, NULL, '2021-06-05 04:02:48', '2021-06-05 04:02:48'),
(100, 14, 1, 37, '122', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(101, 14, 1, 38, '119', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(102, 14, 1, 39, '116', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(103, 14, 1, 40, '112', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(104, 14, 1, 41, '109', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(105, 14, 1, 42, '106', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(106, 14, 1, 43, '103', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(107, 14, 1, 44, '100', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(108, 14, 1, 45, '97', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(109, 14, 1, 46, '94', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(110, 14, 1, 47, '91', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(111, 14, 1, 48, '88', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(112, 14, 1, 49, '85', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(113, 14, 1, 50, '82', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(114, 14, 1, 51, '79', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(115, 14, 1, 52, '76', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(116, 14, 1, 53, '74', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(117, 14, 1, 54, '69', 1, 1, NULL, '2021-06-05 04:02:49', '2021-06-05 04:02:49'),
(118, 14, 1, 55, '67', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(119, 14, 1, 56, '65', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(120, 14, 1, 57, '61', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(121, 14, 1, 58, '58', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(122, 14, 1, 59, '56', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(123, 14, 1, 60, '53', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(124, 14, 1, 61, '49', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(125, 14, 1, 62, '45', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(126, 14, 1, 63, '44', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(127, 14, 1, 64, '40', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(128, 14, 1, 65, '38', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(129, 14, 1, 66, '35', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(130, 14, 1, 67, '30', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50'),
(131, 14, 1, 68, '28', 1, 1, NULL, '2021-06-05 04:02:50', '2021-06-05 04:02:50');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$96RByLIY2Hv925QB6.DJqezup.BZ/MA3ZGbrzZekW1lXiXyICQpOK', NULL, '2021-04-17 06:31:28', '2021-04-17 06:31:28'),
(2, 'varun kumar', 'varunindian10@gmail.com', NULL, '$2y$10$kpgrZhhmW.b2VagTbdwUmeaK2gjLswKwouy5yJGDAydX4as/am9l6', '9s2XuqrmlWnPdQGPExLDaMeoCgOmBQlOyHmIuck4ocGhc9hyWiqR4HVEtFxK', '2021-04-24 05:43:51', '2021-04-24 05:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
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
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_options`
--
ALTER TABLE `survey_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_options`
--
ALTER TABLE `survey_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
