-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 01:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 'Alice, very much pleased at having.', 'Laborum nihil a ad sed aut.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(2, 'I\'m not looking for eggs, as it was.', 'Nesciunt aperiam qui error asperiores iste.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(3, 'I must sugar my hair.\" As a duck with.', 'Vero eaque aut exercitationem id.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(4, 'ALL RETURNED FROM HIM TO YOU,\"\' said.', 'Nulla sunt qui tempora eum nihil reprehenderit.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(5, 'T!\' said the Mock Turtle, and to.', 'Vero neque aut quo.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(6, 'Father William replied to his ear.', 'Ullam et dolorem vel illum eos quis.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(7, 'I know!\' exclaimed Alice, who had not.', 'Et sunt inventore expedita.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(8, 'He looked anxiously round, to make it.', 'Voluptatem similique in voluptas dolore et.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(9, 'I\'ve finished.\' So they sat down again.', 'Aut odit molestiae quod qui aut debitis illo.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(10, 'Alice looked up, but it was only a.', 'Dicta adipisci facere minima quasi et.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(11, 'Miss, this here ought to eat or drink.', 'Enim molestiae nemo dolorem perspiciatis.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(12, 'Majesty,\' said Alice sharply, for she.', 'Quod esse voluptas labore omnis eos et soluta.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(13, 'Gryphon added \'Come, let\'s hear some.', 'Necessitatibus sint pariatur quia nam in.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(14, 'And yet I wish you wouldn\'t squeeze.', 'Est et eveniet assumenda quae laborum.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(15, 'Come on!\' \'Everybody says \"come on!\".', 'Vel molestiae ea autem et inventore id.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(16, 'Alice, who always took a great crowd.', 'Molestiae deleniti et soluta quia sit aut quia.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(17, 'King put on your shoes and stockings.', 'Omnis et qui qui est dignissimos incidunt.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(18, 'After a while, finding that nothing.', 'Est enim eius minima dolores.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(19, 'I was sent for.\' \'You ought to eat her.', 'Optio aspernatur in soluta minus voluptatibus.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(20, 'Dormouse, who was gently brushing away.', 'Molestiae vero recusandae voluptatum.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(21, 'Knave of Hearts, who only bowed and.', 'Atque ut corrupti quisquam molestias et ut.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(22, 'King: \'leave out that it was a good.', 'Eius porro explicabo est possimus.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(23, 'Hatter. \'He won\'t stand beating. Now.', 'Veritatis ut temporibus eum eos provident eum.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(24, 'Majesty,\' said the King, \'that saves a.', 'Provident quaerat qui magni perspiciatis qui.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(25, 'ME.\' \'You!\' said the Duchess; \'and.', 'Explicabo est laborum incidunt dolores ipsa.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(26, 'I only wish people knew that: then.', 'Ut nesciunt ea ullam nisi aut sint.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(27, 'Dormouse shook itself, and began an.', 'Ut non explicabo illum est nobis.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(28, 'The King\'s argument was, that her.', 'Facilis modi vel cum quae asperiores dignissimos.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(29, 'I think--\' (she was so long since she.', 'Qui dolorem natus accusamus similique.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(30, 'Come on!\' So they began running when.', 'Facilis voluptatem beatae eos nulla.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(31, 'Pigeon. \'I\'m NOT a serpent!\' said.', 'Nobis quam sint possimus suscipit non omnis est.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(32, 'I meant,\' the King had said that day.', 'Ea velit ipsam iste unde sed.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(33, 'No, it\'ll never do to come before.', 'Id suscipit delectus est eos.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(34, 'Dinah my dear! Let this be a grin, and.', 'Perferendis quia ut eius ipsam ut eum et qui.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(35, 'I BEG your pardon!\' cried Alice in a.', 'Dolorum non unde deleniti.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(36, 'I\'M a Duchess,\' she said to herself.', 'Nam omnis deserunt voluptate earum.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(37, 'However, on the OUTSIDE.\' He unfolded.', 'Sed aut ut ea itaque error omnis.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(38, 'Alice as he spoke, and the moon, and.', 'Tempore occaecati amet nisi nemo.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(39, 'If I or she should chance to be done.', 'Ut fugit cupiditate ducimus.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(40, 'Miss, this here ought to go on. \'And.', 'Est enim omnis quas rerum rerum consequatur.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(41, 'I say again!\' repeated the Pigeon.', 'Repudiandae ullam ea et quo non sit.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(42, 'King. \'When did you manage on the.', 'Est reprehenderit consequatur quo deleniti.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(43, 'YOU must cross-examine THIS witness.\'.', 'Molestiae odit qui dolore vel non.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(44, 'Rabbit was still in sight, and no one.', 'Dolorem eos quo doloremque tenetur.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(45, 'Elsie, Lacie, and Tillie; and they.', 'Debitis autem voluptates aut et delectus.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(46, 'Magpie began wrapping itself up very.', 'Quis ut minus alias at est iste ut.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(47, 'Hatter. Alice felt that there was no.', 'Et distinctio nam commodi autem dolores et.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(48, 'They had a VERY turn-up nose, much.', 'Et qui iste accusamus ab adipisci earum eum.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(49, 'I\'m doubtful about the temper of your.', 'Placeat ipsum beatae qui molestias.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(50, 'She went in search of her head on her.', 'Aut quos modi eum et est in quia.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(51, 'dept of eee', 'bsc in eee', '2022-01-13 22:34:02', '2022-01-13 22:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `dpays`
--

CREATE TABLE `dpays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dpays`
--

INSERT INTO `dpays` (`id`, `department_id`, `semester_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 51, 1, 50000, '2022-01-13 22:34:02', '2022-01-13 22:34:33'),
(2, 51, 2, 10000, '2022-01-13 22:34:02', '2022-01-13 22:34:43'),
(3, 51, 3, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02'),
(4, 51, 4, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02'),
(5, 51, 5, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02'),
(6, 51, 6, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02'),
(7, 51, 7, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02'),
(8, 51, 8, NULL, '2022-01-13 22:34:02', '2022-01-13 22:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `student_id`, `semester_id`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 2, 16, 15, '2022-01-14 04:37:53', '2022-01-14 04:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(387, '2014_10_12_000000_create_users_table', 1),
(388, '2014_10_12_100000_create_password_resets_table', 1),
(389, '2019_08_19_000000_create_failed_jobs_table', 1),
(390, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(391, '2021_12_22_161514_create_departments_table', 1),
(392, '2021_12_27_061203_create_students_table', 1),
(393, '2021_12_27_061938_create_semesters_table', 1),
(394, '2021_12_27_062028_create_enrollments_table', 1),
(395, '2021_12_27_062044_create_payments_table', 1),
(396, '2021_12_28_150517_create_admins_table', 1),
(397, '2021_12_29_102609_create_session_table', 1),
(398, '2021_12_30_164520_create_sessions_table', 1),
(399, '2022_01_08_180514_create_statuses_table', 1),
(400, '2022_01_09_145101_create_transactions_table', 1),
(401, '2022_01_10_173356_create_dpays_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Queen?\' said.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(2, 'Alas! it was.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(3, 'Heads below!\'.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(4, 'Footman, and.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(5, 'She had just.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(6, 'English coast.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(7, 'Just then she.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(8, 'Alice laughed.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(9, 'Alice loudly.', '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(10, 'Dodo replied.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(11, 'Alice thought.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(12, 'Lory, as soon.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(13, 'King, looking.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(14, 'KNOW IT TO BE.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(15, 'And she began.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(16, 'Mouse to tell.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(17, 'Alice laughed.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(18, 'Alice\'s first.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(19, 'After a time.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(20, 'I say again!\'.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(21, 'I hadn\'t gone.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(22, 'Gryphon added.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(23, 'All the time.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(24, 'White Rabbit.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(25, 'Alice replied.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(26, 'Gryphon, and.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(27, 'Mouse, do you.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(28, 'Dormouse, who.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(29, 'I\'ve offended.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(30, 'Everything is.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(31, 'I\'ll come up.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(32, 'Pigeon; \'but.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(33, 'Her listeners.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(34, 'Alice: \'she\'s.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(35, 'I mean what I.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(36, 'Alice had got.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(37, 'And the moral.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(38, 'WAS a curious.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(39, 'Just at this.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(40, 'ALICE\'S RIGHT.', '2022-01-10 23:53:12', '2022-01-10 23:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'There seemed.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(2, 'Alice dodged.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(3, 'I don\'t want.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(4, 'King, who had.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(5, 'Alice; \'all I.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(6, 'CHAPTER VIII.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(7, 'Cat. \'Do you.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(8, 'Cat; and this.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(9, 'Dodo replied.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(10, 'So she set to.', '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(11, 'Alice and all.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(12, 'I think?\' \'I.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(13, 'Alice, as she.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(14, 'While she was.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(15, 'Gryphon: and.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(16, 'Queen\'s voice.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(17, 'Five, who had.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(18, 'King, rubbing.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(19, 'I know?\' said.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(20, 'English coast.', '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(21, 'Alice\'s, and.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(22, 'But here, to.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(23, 'Dodo suddenly.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(24, 'She did it at.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(25, 'Hatter asked.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(26, 'Gryphon as if.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(27, 'Table doesn\'t.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(28, 'CHAPTER VIII.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(29, 'Time as well.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(30, 'However, the.', '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(31, 'Mouse did not.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(32, 'WOULD always.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(33, 'Coils.\' \'What.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(34, 'It sounded an.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(35, 'I don\'t care.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(36, 'Alice hastily.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(37, 'Alice looked.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(38, 'And so it was.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(39, 'Tortoise, if.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(40, 'I ought to be.', '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(41, 'He only does.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(42, 'Alice, as she.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(43, 'Queen shouted.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(44, 'Alice called.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(45, 'Caterpillar\'s.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(46, 'WOULD go with.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(47, 'YOUR temper!\'.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(48, 'Duchess; \'and.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(49, 'Sir, With no.', '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(50, 'DON\'T know,\'.', '2022-01-10 23:53:12', '2022-01-10 23:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `class_roll` int(11) NOT NULL,
  `exam_roll` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `ad_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `batch`, `class_roll`, `exam_roll`, `department_id`, `user_id`, `admission_date`, `ad_session`, `full_name`, `present_address`, `permanent_address`, `phone`, `gender`, `blood`, `dob`, `nationality`, `religion`, `fathers_name`, `fathers_contact`, `mothers_name`, `mothers_contact`, `emergency_c_name`, `emergency_number`, `emergency_address`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 5, 2, 3, NULL, NULL, NULL, 'Jaycee Murray', '8482 Octavia Bridge\nWest Marlenport, MI 50492-4083', '39090 Enid Meadows\nLaurinebury, FL 48276', '714-403-0202', 'Male', 'A+', '1990-11-01', 'bangladeshi', 'Muslim', 'Prof. Alivia Smith', '608-651-9124', 'Ansel Macejkovic', NULL, 'Dr. Abbey Goldner V', '828.545.2584', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(2, 8, 6, 7, 6, 6, NULL, NULL, NULL, 'Renee Hodkiewicz', '901 Nathanael Camp\nWest Domenickmouth, SC 87579', '5112 Brekke Circles\nWintheiserbury, WV 90082', '831-623-3906', 'Male', 'A+', '1994-02-05', 'bangladeshi', 'Muslim', 'Meghan Rowe', '719.337.8686', 'Mrs. Reba Jenkins III', NULL, 'Bailee Larkin', '980.591.7393', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(3, 9, 7, 8, 3, 3, NULL, NULL, NULL, 'Dr. Rodrigo Klein', '5477 McCullough Extension Apt. 181\nPort Karlchester, OH 69307-8824', '88198 Berge Knolls Suite 891\nEast Stevie, MT 66046-1691', '859.978.6586', 'Male', 'A+', '1993-05-13', 'bangladeshi', 'Muslim', 'Colleen Kshlerin', '(520) 542-8347', 'Abigail Fritsch', NULL, 'Amir Reinger', '260-517-2003', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(4, 9, 1, 8, 6, 6, NULL, NULL, NULL, 'Barry Streich', '1465 Abby Bridge\nNorth Yasminville, KS 77837', '515 Robbie Forks\nEsmeraldamouth, IN 31414', '680.924.0555', 'Male', 'A+', '1990-06-05', 'bangladeshi', 'Muslim', 'Roxane Hahn', '360.598.9441', 'Laron Wiza', NULL, 'Prof. Anais Fay', '(331) 808-0305', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(5, 6, 3, 2, 3, 9, NULL, NULL, NULL, 'Sim Welch', '6144 Rolfson Village Suite 040\nTravonberg, CT 50563', '54906 Rippin Tunnel\nAverybury, DE 97191', '860.648.2091', 'Male', 'A+', '1977-09-21', 'bangladeshi', 'Muslim', 'Amber Stehr', '1-520-314-9461', 'Bill Wilkinson DVM', NULL, 'Chelsea Borer PhD', '915.272.0645', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(6, 3, 0, 7, 2, 0, NULL, NULL, NULL, 'Rosanna Schinner II', '9896 Kreiger Grove\nO\'Konmouth, IL 48675-9374', '49057 Hoyt Rest Suite 118\nNorth Osbornetown, AR 32705', '(678) 551-0705', 'Male', 'A+', '2013-02-10', 'bangladeshi', 'Muslim', 'Torrance Conn', '+14758605749', 'Jerry DuBuque', NULL, 'Martine Orn', '+1 (442) 205-4499', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(7, 6, 8, 2, 0, 5, NULL, NULL, NULL, 'Mckenzie Metz', '279 Krajcik Courts\nBaileymouth, TX 12698', '81682 O\'Hara Extensions Suite 698\nSchummfurt, KS 30891-9381', '+1 (228) 264-1502', 'Male', 'A+', '2016-02-25', 'bangladeshi', 'Muslim', 'Judd Turcotte II', '913.301.2703', 'Carmen Von', NULL, 'Clifford Rice', '815-906-0338', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(8, 3, 7, 1, 8, 9, NULL, NULL, NULL, 'Oleta Sauer', '64442 Robel Forges Suite 777\nVeumport, NC 86410', '345 Zion Mission Apt. 616\nCharlesshire, CO 49638', '(313) 916-8402', 'Male', 'A+', '2007-12-13', 'bangladeshi', 'Muslim', 'Jaclyn Schinner', '251-219-8788', 'Tanya Huel', NULL, 'Katarina Berge', '(914) 750-0186', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(9, 4, 9, 5, 3, 1, NULL, NULL, NULL, 'Dr. Jaylen Kuphal IV', '143 Sophia Street\nNew Magnus, MN 60904-3923', '88747 Cartwright Cove\nKodyview, KY 10740-6487', '1-314-229-7225', 'Male', 'A+', '2007-09-12', 'bangladeshi', 'Muslim', 'Miss Isabelle Johnston DDS', '614.450.0178', 'Kendrick Hauck', NULL, 'Buford Ernser', '+1-404-714-2568', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(10, 7, 0, 3, 0, 3, NULL, NULL, NULL, 'Miss Vernice Bashirian', '1199 Willms Circles Suite 037\nSouth Marctown, PA 74303', '724 Bogan Mill\nNorth Jailyn, OR 11289-2465', '225-441-7248', 'Male', 'A+', '2005-11-10', 'bangladeshi', 'Muslim', 'Prof. Houston Beier V', '(534) 713-5358', 'Mr. Zion White', NULL, 'Meghan Oberbrunner V', '+1-618-234-9954', NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(11, 4, 2, 5, 1, 2, NULL, NULL, NULL, 'Mr. Baron Beatty', '8794 Weber Road\nLake Consuelofurt, NE 49778-1102', '148 Hagenes Neck Apt. 240\nJoeyfurt, MI 82472-3066', '+1-817-729-4827', 'Male', 'A+', '1990-05-15', 'bangladeshi', 'Muslim', 'Norma Nolan', '1-520-436-7944', 'Bertram Corkery', NULL, 'Rodolfo Hauck', '(628) 213-4029', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(12, 8, 7, 8, 0, 0, NULL, NULL, NULL, 'Karine Klocko Sr.', '40549 Alfonso Shoal Suite 127\nEast Luella, OK 72576-8558', '396 Sipes Keys\nPort Corineborough, OH 73618-8777', '304.219.3520', 'Male', 'A+', '1973-02-27', 'bangladeshi', 'Muslim', 'Mariana Rempel', '(954) 230-2376', 'Tomasa Zboncak', NULL, 'Noble Wolff', '934-559-5112', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(13, 8, 4, 3, 0, 0, NULL, NULL, NULL, 'Prof. Kaya Cronin', '1592 Kuhn Rue Apt. 209\nEast Princessberg, LA 30289-1336', '18839 Suzanne Hills Apt. 028\nEast Liamouth, OK 15164-7086', '+18082586461', 'Male', 'A+', '1993-12-29', 'bangladeshi', 'Muslim', 'Cheyanne Considine', '+1-925-387-1441', 'Maurice Mills', NULL, 'Dr. Nathen Botsford MD', '+15204303974', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(14, 2, 5, 8, 5, 3, NULL, NULL, NULL, 'Prof. Lazaro Hills', '7458 Yost Extensions\nNorth Felicita, WI 96916-5819', '264 Turner Mountain Suite 770\nBartonland, VT 09984-6654', '+1-640-463-7702', 'Male', 'A+', '1982-01-09', 'bangladeshi', 'Muslim', 'Prof. Clyde Bernhard IV', '+1 (520) 596-4104', 'Lavada Wolff', NULL, 'Ruthie Franecki PhD', '419-336-1935', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(15, 3, 7, 5, 9, 2, NULL, NULL, NULL, 'Miracle Marks', '18985 Noah Valley\nLakinmouth, MD 13600-5582', '1716 Nyah Valley Apt. 044\nMargaretechester, KS 80893-8659', '+14342517805', 'Male', 'A+', '1999-06-01', 'bangladeshi', 'Muslim', 'Christiana Abshire IV', '380.571.6204', 'Humberto Dicki', NULL, 'Horace Abbott Jr.', '646-834-9165', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(16, 7, 1, 2, 9, 3, NULL, NULL, NULL, 'Dr. Ashlynn Adams', '34780 Dibbert Stream\nWest Gilbert, WA 79093', '611 Rosetta Forks\nEast Eliseview, OK 46510-2042', '1-872-897-5412', 'Male', 'A+', '1978-02-05', 'bangladeshi', 'Muslim', 'Jacques Hyatt', '1-805-517-1353', 'Damaris Powlowski', NULL, 'Maryam Flatley', '+17312494110', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(17, 0, 3, 7, 6, 3, NULL, NULL, NULL, 'Lucie Nienow Jr.', '857 Vicente Avenue Suite 436\nGoodwinhaven, NE 52518', '352 Schmitt Radial\nWest Daisha, RI 60089', '1-601-328-3802', 'Male', 'A+', '2002-06-27', 'bangladeshi', 'Muslim', 'Effie Towne', '541-316-0688', 'Nickolas Bayer', NULL, 'Carolina Deckow', '+15646842016', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(18, 0, 8, 2, 9, 5, NULL, NULL, NULL, 'Dandre Mitchell', '21597 McDermott Flat\nSouth Carmella, RI 10085-6508', '289 Casper Street Suite 947\nD\'Amorefurt, NH 53208-3251', '1-463-579-5373', 'Male', 'A+', '1991-02-28', 'bangladeshi', 'Muslim', 'Cicero Renner Sr.', '+1 (802) 701-7961', 'Mr. Arden Ondricka', NULL, 'Dr. Anastacio Johns III', '1-813-591-2875', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(19, 3, 0, 5, 8, 5, NULL, NULL, NULL, 'Dr. Krystal Marvin DVM', '1938 Alivia Terrace\nLenoreville, SD 87870-6999', '89959 Bryce Road Apt. 444\nEast Mauricio, IL 96063', '+1 (484) 486-2166', 'Male', 'A+', '1982-11-11', 'bangladeshi', 'Muslim', 'Warren Hudson', '817.748.1995', 'Saul Sauer', NULL, 'Prof. Shyann Hoeger I', '515-600-3101', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(20, 4, 3, 5, 5, 4, NULL, NULL, NULL, 'Mabelle Borer', '708 Roberts Inlet\nWest Justus, WA 44208-4765', '41026 Blanda Place\nNorth Sunnymouth, UT 85087', '+1-657-301-1778', 'Male', 'A+', '1985-11-11', 'bangladeshi', 'Muslim', 'Stone Murazik V', '(816) 212-9671', 'Uriah Gottlieb', NULL, 'Prof. Estella Towne DDS', '404-456-5896', NULL, '2022-01-10 23:53:07', '2022-01-10 23:53:07'),
(21, 2, 1, 8, 2, 4, NULL, NULL, NULL, 'Yvonne Dach', '9531 Ward Circles\nGeorgianaland, AR 05924', '45894 Norberto Manors\nNorth Mertieshire, SC 85427', '323.649.6306', 'Male', 'A+', '2011-11-17', 'bangladeshi', 'Muslim', 'Gerardo Jerde', '606-215-4174', 'Emmitt Pouros I', NULL, 'Freeda Schimmel', '1-229-782-7566', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(22, 3, 5, 8, 2, 7, NULL, NULL, NULL, 'Sid Balistreri', '17761 Magdalena Junction Apt. 837\nLefflerview, AR 11199-0659', '646 Lind Fork\nEast Katrineberg, KY 00252', '(678) 987-0461', 'Male', 'A+', '2014-11-24', 'bangladeshi', 'Muslim', 'Jasen Johnson', '(325) 721-3713', 'Ed Marks', NULL, 'Vita Kshlerin III', '660-481-8802', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(23, 4, 9, 3, 0, 4, NULL, NULL, NULL, 'Otha Gislason', '33974 Imogene Bypass\nWest Whitneyfort, RI 88688', '59114 Rosenbaum Villages\nLake Fridabury, IN 52098', '+17029780717', 'Male', 'A+', '1980-10-15', 'bangladeshi', 'Muslim', 'Brennon Hyatt', '+1-352-316-9821', 'Dr. Ines Braun Jr.', NULL, 'Dasia Douglas', '1-281-226-2303', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(24, 9, 4, 4, 7, 7, NULL, NULL, NULL, 'Terence Labadie', '57803 Torphy Street\nTreutelmouth, MI 46250-8311', '183 Laurie Road\nEast Cade, SD 42884', '+1-715-536-1616', 'Male', 'A+', '1993-02-25', 'bangladeshi', 'Muslim', 'Jalen Willms', '+1-530-812-8574', 'Tamara Kuhlman', NULL, 'Mr. Maverick Goldner', '+12484694184', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(25, 2, 7, 3, 1, 8, NULL, NULL, NULL, 'Elmira Rippin', '9204 Heller Corners Suite 784\nLake Tatyanashire, AZ 33803', '48410 Dicki Divide Suite 313\nBarbarashire, FL 59504', '1-936-896-0394', 'Male', 'A+', '1988-08-17', 'bangladeshi', 'Muslim', 'Prof. Nils Leuschke PhD', '+1-614-866-4083', 'Cyril Toy III', NULL, 'Bridie Hills', '(820) 345-4929', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(26, 5, 6, 4, 3, 5, NULL, NULL, NULL, 'Mr. Reyes VonRueden', '28436 Adolphus Spurs\nElissabury, MT 32555-7670', '46136 Elmira Wells Apt. 590\nPort Reggie, VA 80072', '718.782.6360', 'Male', 'A+', '1984-11-01', 'bangladeshi', 'Muslim', 'Prof. Henri Ratke', '+1-586-872-4848', 'Seamus Schuppe', NULL, 'Ms. Elnora Powlowski', '(813) 960-1498', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(27, 8, 7, 4, 3, 7, NULL, NULL, NULL, 'Garnet Steuber', '39989 Nader Pines\nAmirshire, UT 87706', '60661 Kohler Avenue Apt. 724\nSchadenside, HI 26337', '+1.872.852.3935', 'Male', 'A+', '2000-07-20', 'bangladeshi', 'Muslim', 'Alycia Mills V', '+1.934.815.1679', 'Cielo Beier', NULL, 'Isaac Schoen', '+1-662-763-1027', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(28, 5, 0, 1, 4, 0, NULL, NULL, NULL, 'Estevan Trantow', '886 Katarina Mill Suite 864\nBoyleport, MO 36453', '3870 Marshall Plaza\nAnnahaven, DC 31270-1352', '1-564-691-3101', 'Male', 'A+', '1991-02-24', 'bangladeshi', 'Muslim', 'Carmela Stoltenberg I', '+1-216-258-0323', 'Flavio Bauch PhD', NULL, 'Tomasa Pagac', '860-458-4188', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(29, 5, 1, 7, 9, 6, NULL, NULL, NULL, 'Lemuel Dietrich I', '768 Hettinger Station\nPort Arneview, AR 64598-0276', '38911 Jovanny Court\nZitaburgh, WA 03431', '+1 (385) 557-4980', 'Male', 'A+', '2016-11-09', 'bangladeshi', 'Muslim', 'Robyn Kreiger', '+1-234-225-0919', 'Allan Spinka', NULL, 'Eleanore Greenfelder', '507.614.8430', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(30, 5, 9, 8, 9, 5, NULL, NULL, NULL, 'Camille Ferry', '13742 Ashleigh Summit\nWest Ashleefort, KY 59426-5169', '1183 Dusty Track\nPrestonborough, DE 80688', '(682) 391-4623', 'Male', 'A+', '1972-09-03', 'bangladeshi', 'Muslim', 'Lola Pfannerstill', '+15869621409', 'Ottilie Weissnat', NULL, 'Letha Gerlach', '1-757-506-6066', NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(31, 2, 2, 2, 4, 1, NULL, NULL, NULL, 'Lester White', '74922 Frank Divide Apt. 911\nEvertberg, TN 85868', '817 Prohaska Manor Suite 805\nFeeneyberg, AK 15585', '+16605217237', 'Male', 'A+', '2018-10-19', 'bangladeshi', 'Muslim', 'Everette Wiegand Sr.', '920.497.8943', 'Cristal Hermiston', NULL, 'Dulce Aufderhar', '318.329.5871', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(32, 7, 6, 6, 6, 2, NULL, NULL, NULL, 'Tyshawn Spinka I', '336 Kutch Springs Suite 225\nZemlakhaven, AZ 53607', '8235 Anderson Island\nAliatown, LA 06907', '1-272-662-8991', 'Male', 'A+', '1970-07-28', 'bangladeshi', 'Muslim', 'Bret Corwin', '+1 (564) 673-7539', 'Elias Streich', NULL, 'Prof. Ophelia Leuschke IV', '818-255-9843', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(33, 6, 5, 1, 8, 9, NULL, NULL, NULL, 'Zelma Abernathy', '387 Ritchie Highway\nWest Columbusville, KS 56367', '9596 Spinka Field\nSouth Natasha, MO 32944', '+1-409-244-1593', 'Male', 'A+', '2012-03-21', 'bangladeshi', 'Muslim', 'Tressa Larson', '+1-276-547-8397', 'Harmon Wehner III', NULL, 'Lynn Goodwin', '+1-575-447-5032', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(34, 8, 8, 0, 6, 2, NULL, NULL, NULL, 'Tyshawn Feest MD', '983 Kristoffer Isle\nSouth Reuben, IN 92630', '37290 Fadel Causeway\nNorth Elinoreborough, FL 49117-1928', '484.706.3303', 'Male', 'A+', '2008-06-16', 'bangladeshi', 'Muslim', 'Brian Bergnaum', '+1-779-449-8284', 'Selena Wilkinson', NULL, 'Mrs. Elsa Bode', '+12483510494', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(35, 8, 3, 5, 3, 7, NULL, NULL, NULL, 'Miss Mckayla Jenkins Jr.', '633 Vivian Mills Apt. 507\nNew Brennan, MS 42352', '30648 Mertz Extension\nSouth Laurenport, NC 17245-9838', '+1 (828) 959-6287', 'Male', 'A+', '1997-05-06', 'bangladeshi', 'Muslim', 'Prof. Ansel Robel DDS', '+1 (985) 329-6952', 'Dr. Armand Haley III', NULL, 'Alden Eichmann', '320-692-7687', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(36, 2, 3, 2, 3, 5, NULL, NULL, NULL, 'Mr. Alessandro Satterfield', '68746 Rosa Field\nPort Rainamouth, IA 57018', '6870 Collier Circle Apt. 532\nNew Jeanmouth, WI 55278', '+1.773.365.2290', 'Male', 'A+', '2006-09-09', 'bangladeshi', 'Muslim', 'Dakota Fahey PhD', '(551) 480-6804', 'Clint Jacobson IV', NULL, 'Adelbert Jakubowski Jr.', '+1 (445) 690-1172', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(37, 0, 2, 5, 5, 2, NULL, NULL, NULL, 'Pinkie Tremblay', '8713 Collins Rapids\nSouth Norbertostad, NE 45684', '559 Schmidt Ford\nSouth Quinn, IA 01004', '904.908.7962', 'Male', 'A+', '2017-10-28', 'bangladeshi', 'Muslim', 'Dr. Rodger Brown PhD', '(828) 285-1020', 'Miss Josephine Williamson', NULL, 'Mack Larson', '+17028929771', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(38, 3, 9, 3, 9, 9, NULL, NULL, NULL, 'Domenic Kovacek', '966 Swaniawski Summit\nSouth Vivabury, AK 27775', '8794 Sienna Highway\nLouveniaville, VT 72032', '1-332-335-1120', 'Male', 'A+', '2020-09-08', 'bangladeshi', 'Muslim', 'Vance Schultz', '1-812-281-0144', 'Juanita Stoltenberg', NULL, 'Dr. Brain Fahey DDS', '(551) 833-1201', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(39, 1, 0, 8, 7, 8, NULL, NULL, NULL, 'Chaya Bradtke IV', '66979 Salma Square\nPort Velmaview, ME 38626-2034', '35311 Carroll Parkways Apt. 757\nPort Amari, AR 88815', '(971) 740-2134', 'Male', 'A+', '1994-12-24', 'bangladeshi', 'Muslim', 'Prof. Molly Leannon', '(818) 989-9418', 'Wava McClure', NULL, 'Pamela Stroman', '1-283-586-4371', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(40, 5, 0, 1, 0, 3, NULL, NULL, NULL, 'Greyson Sporer IV', '55238 Heathcote Circles\nBuckridgeborough, OK 68073', '676 Nienow Freeway Apt. 794\nEast Herminachester, WY 35891-3625', '(231) 847-6269', 'Male', 'A+', '1992-01-03', 'bangladeshi', 'Muslim', 'Lempi Oberbrunner', '650-760-9406', 'Prof. Sven Keeling PhD', NULL, 'Alexie Hintz', '+1-220-584-8373', NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(41, 7, 3, 3, 4, 8, NULL, NULL, NULL, 'Dr. Freddy Mitchell IV', '61505 Schoen Meadows Suite 440\nLake Bethel, IA 76818-9950', '1688 Predovic Mountains\nDareport, AL 24917-7362', '1-608-825-5871', 'Male', 'A+', '2005-11-19', 'bangladeshi', 'Muslim', 'Abbie Littel', '+1 (520) 939-6091', 'Reece Nolan', NULL, 'Cruz Brown', '(308) 854-5336', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(42, 4, 3, 7, 7, 9, NULL, NULL, NULL, 'Mckenzie Frami', '436 Laurianne Keys Apt. 585\nTrompmouth, NM 56068-7556', '49067 Hamill Run Suite 890\nEast Marlonland, OH 24722', '857-612-6668', 'Male', 'A+', '1976-04-11', 'bangladeshi', 'Muslim', 'Emilio Yost', '862.504.1613', 'Edmond Parker', NULL, 'Cordell Zboncak', '+1-838-940-8588', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(43, 7, 7, 4, 0, 6, NULL, NULL, NULL, 'Melvina Ledner', '12331 Lehner Shoal\nSouth Amari, RI 14785-9767', '1158 Connelly Dale Apt. 455\nEast Marge, WV 83175', '+1.563.212.8766', 'Male', 'A+', '2010-12-17', 'bangladeshi', 'Muslim', 'Ila D\'Amore', '818-201-6837', 'Monroe Stroman II', NULL, 'Edgardo Kovacek', '678-519-9970', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(44, 7, 4, 7, 9, 7, NULL, NULL, NULL, 'Dariana Kshlerin', '52411 Considine Villages Suite 743\nRickeyland, DC 68097-0602', '8934 Tyrel Keys\nHeaneyview, NY 18851', '541.478.8166', 'Male', 'A+', '1970-01-10', 'bangladeshi', 'Muslim', 'Roslyn Hill', '+1.689.609.7762', 'Koby Rutherford', NULL, 'Assunta Lang', '1-458-779-0106', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(45, 9, 9, 4, 0, 9, NULL, NULL, NULL, 'Lee Schuppe', '530 Brooke Avenue Suite 994\nTillmanview, HI 84091', '46183 Malvina Pine\nNorth Alexandriaton, NE 04217-3896', '+1-561-676-0155', 'Male', 'A+', '1989-01-28', 'bangladeshi', 'Muslim', 'Joey Wuckert', '518-637-6736', 'Adele Ziemann', NULL, 'Chaya Hansen', '763-869-3933', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(46, 4, 7, 0, 9, 2, NULL, NULL, NULL, 'Kenton Ziemann', '670 Easter Way Suite 503\nRyanstad, NE 73457', '621 McGlynn Ports\nAlexandrestad, KS 79837', '+1 (774) 515-8156', 'Male', 'A+', '1975-04-22', 'bangladeshi', 'Muslim', 'Eino Conroy', '+1-539-415-6092', 'Tyson Prosacco Sr.', NULL, 'Easter Flatley', '+1-818-345-9796', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(47, 6, 7, 7, 0, 0, NULL, NULL, NULL, 'Braden Crooks', '87797 Parisian Land Apt. 002\nRomaguerafort, NY 86178-9923', '999 Kilback Isle\nEloisetown, ND 08573', '364-513-4799', 'Male', 'A+', '2018-09-25', 'bangladeshi', 'Muslim', 'Arlie Kohler DDS', '+1 (352) 277-6633', 'Delilah Kozey', NULL, 'Berniece Mraz', '+1-720-902-7940', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(48, 5, 1, 8, 5, 8, NULL, NULL, NULL, 'Demond Windler', '313 Lera Mall Apt. 913\nWhiteland, IA 43840', '610 Lenore Cove Apt. 223\nVedaland, TX 86011-6360', '1-934-254-2593', 'Male', 'A+', '1976-05-20', 'bangladeshi', 'Muslim', 'Emmalee Kulas I', '(737) 748-5546', 'Zack Pagac', NULL, 'Sharon Brakus', '959.934.1116', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(49, 8, 1, 5, 4, 3, NULL, NULL, NULL, 'Jed McLaughlin', '776 Lexie Mountain Suite 679\nBauchfort, MD 66836-7195', '969 Nels Springs Apt. 752\nLaviniafort, WA 97825-9881', '504.395.3751', 'Male', 'A+', '1993-05-21', 'bangladeshi', 'Muslim', 'Mrs. Daija Boyer', '+1 (940) 201-7155', 'Emory Baumbach', NULL, 'Minerva Ferry', '520.894.2834', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(50, 8, 3, 7, 0, 3, NULL, NULL, NULL, 'Fernando Prohaska', '79836 Brennon Springs\nParkerchester, CA 64151-4877', '50139 Maymie Drives\nEast Patriciaville, ID 93195-8950', '1-469-674-7181', 'Male', 'A+', '1999-02-13', 'bangladeshi', 'Muslim', 'Keven Torphy', '+1-857-417-2582', 'Mr. Ayden Moen', NULL, 'Mrs. Hailee Batz', '830-469-0084', NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payslip` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `student_id`, `session_id`, `semester_id`, `details`, `amount`, `payslip`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 3, 'Alice looked.', 2, 0, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(2, 6, 0, 7, 'WHAT things?\'.', 4, 7, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(3, 6, 8, 6, 'GAVE HER ONE.', 6, 9, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(4, 4, 6, 9, 'AT ALL. Soup.', 1, 4, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(5, 0, 7, 4, 'THE KING AND.', 2, 2, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(6, 5, 5, 0, 'Duchess; \'and.', 3, 1, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(7, 0, 9, 4, 'Alice led the.', 3, 1, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(8, 6, 9, 3, 'Alice got up.', 1, 8, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(9, 3, 3, 9, 'Duchess: \'and.', 7, 0, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(10, 4, 0, 7, 'I shall have.', 5, 5, NULL, '2022-01-10 23:51:51', '2022-01-10 23:51:51'),
(11, 1, 8, 0, 'Latitude was.', 7, 9, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(12, 8, 7, 3, 'KNOW IT TO BE.', 2, 9, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(13, 2, 9, 6, 'Alice noticed.', 6, 4, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(14, 1, 5, 1, 'Alice watched.', 5, 2, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(15, 0, 4, 5, 'Alice, as she.', 3, 1, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(16, 4, 5, 0, 'And the moral.', 6, 5, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(17, 4, 4, 3, 'What happened.', 0, 0, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(18, 9, 5, 1, 'So she tucked.', 9, 7, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(19, 9, 4, 1, 'And so it was.', 4, 5, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(20, 6, 9, 4, 'I think that.', 3, 0, NULL, '2022-01-10 23:53:08', '2022-01-10 23:53:08'),
(21, 8, 4, 6, 'Alice had got.', 8, 5, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(22, 4, 6, 2, 'I shall have.', 0, 7, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(23, 0, 8, 2, 'I\'ll have you.', 1, 8, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(24, 1, 7, 3, 'Alice went on.', 5, 1, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(25, 3, 0, 6, 'I think that.', 4, 6, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(26, 7, 9, 6, 'King repeated.', 2, 5, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(27, 2, 6, 1, 'He trusts to.', 0, 2, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(28, 4, 3, 9, 'Alice had no.', 3, 1, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(29, 0, 2, 7, 'Gryphon, and.', 2, 9, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(30, 0, 8, 8, 'However, this.', 9, 8, NULL, '2022-01-10 23:53:10', '2022-01-10 23:53:10'),
(31, 8, 1, 3, 'OUTSIDE.\' He.', 7, 6, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(32, 9, 6, 2, 'Alice said to.', 8, 8, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(33, 4, 3, 3, 'She generally.', 1, 3, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(34, 4, 0, 1, 'THE VOICE OF.', 6, 4, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(35, 9, 5, 3, 'King, and he.', 1, 4, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(36, 4, 4, 1, 'I would talk.', 5, 6, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(37, 3, 1, 8, 'White Rabbit.', 7, 3, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(38, 3, 2, 8, 'QUITE as much.', 1, 7, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(39, 0, 6, 4, 'Alice, with a.', 5, 6, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(40, 5, 5, 7, 'And pour the.', 4, 2, NULL, '2022-01-10 23:53:11', '2022-01-10 23:53:11'),
(41, 5, 9, 7, 'The jury all.', 9, 2, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(42, 6, 8, 2, 'Alice called.', 1, 0, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(43, 6, 7, 2, 'Cat. \'I said.', 2, 4, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(44, 7, 3, 7, 'Queen. \'Their.', 6, 9, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(45, 0, 7, 6, 'VERY tired of.', 3, 6, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(46, 4, 9, 2, 'I shan\'t grow.', 2, 8, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(47, 7, 8, 7, 'Alice, \'when.', 8, 9, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(48, 5, 0, 4, 'Alice was so.', 0, 1, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(49, 4, 5, 8, 'Let me think.', 2, 3, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(50, 4, 2, 0, 'Bill had left.', 5, 7, NULL, '2022-01-10 23:53:12', '2022-01-10 23:53:12'),
(51, 4, 20, 20, 'Library Fees', 100, 9597, NULL, '2022-01-11 05:20:42', '2022-01-11 05:20:42'),
(52, 4, 2, 22, 'Admission Fees', 90000, 1212, NULL, '2022-01-11 05:21:46', '2022-01-11 05:21:46'),
(53, 1, 2, 3, 'Semester Fees', 100, 55452, NULL, '2022-01-13 22:43:06', '2022-01-13 22:43:06'),
(54, 2, 6, 4, 'Library Fees', 10, 1215, NULL, '2022-01-14 04:44:17', '2022-01-14 04:44:17');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpays`
--
ALTER TABLE `dpays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `dpays`
--
ALTER TABLE `dpays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
