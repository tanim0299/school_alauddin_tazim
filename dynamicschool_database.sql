-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 01:57 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicschool_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(20) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p><font color=\"#212529\" face=\"Bangla, sans-serif\"><span style=\"font-size: 16px;\">à¦«à§‡à¦¨à§€ à¦œà§‡à¦²à¦¾à¦° à¦¦à¦¾à¦—à¦¨à¦­à§‚à¦žà¦¾ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦¸à§à¦¬à¦¨à¦¾à¦®à¦§à¦¨à§à¦¯ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œà¥¤ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦‰à¦šà§à¦š à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦¸à§à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à¦¾à¦° à¦®à¦¾à¦¨à¦¸à§‡ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦°à¦‡ à¦•à§ƒà¦¤à¦¿ à¦¸à¦¨à§à¦¤à¦¾à¦¨ à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿà§€ à¦“ à¦¶à¦¿à¦•à§à¦·à¦¾à¦¨à§à¦°à¦¾à¦—à§€ à¦†à¦¬à¦¦à§à¦² à¦†à¦‰à§Ÿà¦¾à¦² à¦®à¦¿à¦¨à§à¦Ÿà§ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦•à¦²à§‡à¦œà¥¤ à¦¤à¦¾à¦à¦° à¦¸à§à¦¨à§‡à¦¨à¦­à¦¾à¦œà¦¨ à¦›à§‹à¦Ÿ à¦­à¦¾à¦‡ à¦‡à¦•à¦¬à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨ à¦¦à§à¦°à¦¾à¦°à§‹à¦—à§à¦¯ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦°à§‡ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à§Ÿà§‡ à¦¸à§à¦•à§à¦² à¦œà§€à¦¬à¦¨à§‡à¦° à¦—à¦¨à§à¦¡à¦¿ à¦ªà¦¾à¦° à¦¹à¦“à§Ÿà¦¾à¦° à¦ªà§‚à¦°à§à¦¬à§‡à¦‡ à¦®à§ƒà¦¤à§à¦¯à§ à¦¬à¦°à¦£ à¦•à¦°à§‡à¦¨à¥¤ à¦¤à¦¾à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦•à§‡ à¦…à¦®à¦²à¦¿à¦¨ à¦•à¦°à§‡ à¦°à¦¾à¦–à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¤à¦¿à¦¨à¦¿ à¦à¦‡ à¦•à¦²à§‡à¦œ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦²à¦—à§à¦¨ à¦¥à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦²à¦•à§à¦·à§à¦¯ à¦›à¦¿à¦²à§‹ à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦†à¦²à§‹ à¦›à§œà¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦à¦¬à¦‚ à¦à¦‡ à¦•à¦¾à¦œà¦Ÿà¦¿ à¦¸à¦ à¦¿à¦• à¦­à¦¾à¦¬à§‡à¦‡ à¦ªà¦¾à¦²à¦¨ à¦•à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤aaaaaa</span></font></p><p><font color=\"#212529\" face=\"Bangla, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font><br></p>', '2022-07-24 06:35:09', '2022-07-24 06:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_charter`
--

CREATE TABLE `citizen_charter` (
  `id` int(200) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citizen_charter`
--

INSERT INTO `citizen_charter` (`id`, `title`, `image`) VALUES
(1, 'CR7', '534960289.png');

-- --------------------------------------------------------

--
-- Table structure for table `create_admin`
--

CREATE TABLE `create_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `admin_type` varchar(100) DEFAULT NULL,
  `password_recover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_admin`
--

INSERT INTO `create_admin` (`id`, `username`, `mail`, `phone`, `adress`, `type`, `password`, `confirm_password`, `image`, `admin_type`, `password_recover`) VALUES
(1, 'SBIT', 'info@sbit.com.bd', '01840241895', 'FENI', 1, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '1.png', 'developer', '123');

-- --------------------------------------------------------

--
-- Table structure for table `exam_rules`
--

CREATE TABLE `exam_rules` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_rules`
--

INSERT INTO `exam_rules` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<ul><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">No folder is allowed in the Exam Hall- one board is sufficient to write on.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Students must carry their pen, eraser, sharpener (all is needed to write) in their hands or in a transparent plastic pencil box/bag.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Students are not to borrow anything from anybody during the examination.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Talking inside the exam hall is forbidden. The student may be asked to leave the room at the teacherâ€™s discretion.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">When the examination starts, the student must write his/her name only on the question paper. No other writing is permitted.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Students must write their name, class and subject on the front page and on alternate pages. Students must also number their pages. They must mark the answer correctly.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">An unmarked answer will not be corrected or marked.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">The math rough work should be done on the right side of the answer script after drawing a 1.5-inch margin.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Students must not read the question paper before the bell rings to start the exam. The question paper will be placed upside down on their desks during this time. They must not write anything after the bell rings to end the exam.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">Any student arriving later than half an hour of the scheduled exam time will not be permitted extra time.</li><li style=\"padding: 0px; margin: 0px 0px 0.6em 1.3em;\">No student may leave the exam hall 15 minutes before the allotted time.</li></ul>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(200) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `title`, `image`) VALUES
(1, 'tiles', '1599658203.png');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<div style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">à¦›à¦¬à¦¿à¦° à¦®à¦¤ à¦—à§à¦°à¦¾à¦®à¦Ÿà¦¿à¦° à¦¤à¦¿à¦¨à¦•à§à¦² à¦˜à¦¿à¦°à§‡à¦‡ à¦®à¦¾à¦à¦¾à¦°à§€ à¦¸à§à¦°à§‹à¦¤à¦¸à§à¦¬à¦¿à¦¨à§€ à¦¨à¦¦à§€ à¦†à¦° à¦–à¦¾à¦²à¥¤ à¦ªà¦¶à§à¦šà¦¿à¦®à§‡ à¦­à¦¾à¦°à¦¤à§‡à¦° à¦ªà¦¾à¦¹à¦¾à¦¡à¦¼ à¦¥à§‡à¦•à§‡ à¦¨à§‡à¦®à§‡ à¦†à¦¸à¦¾ à¦šà¦¿à¦²à¦¨à¦¿à¦¯à¦¼à¦¾ à¦¨à¦¦à§€à¦° à¦¶à¦¾à¦¨à§à¦¤ à¦¸à§à¦°à§‹à¦¤à¦§à¦¾à¦°à¦¾à¥¤ à¦¬à¦°à§à¦·à¦¾à¦¯à¦¼ à¦«à§à¦²à§‡ à¦«à§‡à¦à¦ªà§‡ à¦‰à¦ à§‡ à¦¦à§-à¦•à§à¦² à¦­à¦¾à¦¸à¦¿à¦¯à¦¼à§‡ à¦¬à¦¾à¦˜à¦—à§‹à¦²à¦¾ à¦¹à¦¾à¦¤à¦°\" \"à¦¤à§à¦‡à¦¯à¦¼à¦¾ à¦¹à¦¾à¦¤à¦°\" \"à¦•à¦‡à¦šà§à¦›à¦¾ à¦¹à¦¾à¦¤à¦°\" à¦†à¦° \"à¦¬à¦¡à¦¼ à¦¹à¦¾à¦¤à¦°\" à¦¨à¦¾à¦®à§‡à¦° à¦®à¦¾à¦  à¦—à§à¦²à§‹à¦•à§‡ à¦ªà¦²à¦¿à¦¤à§‡ à¦­à¦°à§‡ à¦¦à§‡à¦¯à¦¼à¥¤ à¦¸à§‡ à¦ªà¦²à¦¿à¦¤à§‡ à¦¸à§‹à¦¨à¦¾à¦²à§€ à¦«à¦¸à¦² à¦«à¦²à§‡, à¦«à¦²à§‡ à¦¹à¦°à§‡à¦• à¦°à¦•à¦®à§‡à¦° à¦°à¦•à¦¿ à¦¶à¦¿à¦·à§à¦¯à¥¤ à¦—à§‡à¦°à¦¸à§à¦¥à§‡à¦° à¦˜à¦°à§‡ à¦¸à¦¾à¦°à¦¾ à¦¬à¦›à¦°à§‡à¦° à¦–à§‹à¦°à¦¾à¦• à¦¥à¦¾à¦•à§‡à¥¤ à¦šà¦¿à¦ªà¦¨à¦¿à¦¯à¦¼à¦¾ à¦¨à¦¦à§€, à¦—à¦¤à¦¿à¦¯à¦¼à¦¾ à¦–à¦¾à¦² à¦†à¦° à¦§à§‹à¦ªà¦¾à¦‡ à¦‰à¦¡à¦¼à¦¿à¦° à¦•à§à¦®à§‡ à¦®à¦¾à¦› à¦§à¦°à§‡ à¦¹à¦¾à¦¸à¦¿ à¦–à§à¦¶à¦¿à¦¤à§‡ à¦¬à¦¸à¦¬à¦¾à¦¸ à¦•à¦°à§‡ à¦†à¦¸à¦›à§‡ à¦—à¦¾à¦à¦“à¦¯à¦¼à§‡à¦° à¦¬à¦¾à¦¸à¦¿à¦¨à§à¦¦à¦¾à¦°à¦¾à¥¤ à¦¬à¦°à§à¦·à¦¾à¦¯à¦¼ à¦¨à¦¦à§€ à¦–à¦¾à¦² à¦†à¦° à¦®à¦¾à¦  à¦—à§à¦²à§‹ à¦ªà¦¾à¦¨à¦¿à¦¤à§‡ à¦¥à¦‡ à¦à¦‡ à¦•à¦°à¦¤à§‹à¥¤ à¦¨à¦¦à§€à¦¤à§‡ à¦šà¦²à¦¤à§‹ à¦ªà¦¾à¦² à¦¤à§‹à¦²à¦¾ à¦¨à§Œà¦•à¦¾; à¦¸à¦¾à¦®à§à¦ªà¦¾à¦¨à§‡à¦° à¦®à¦¾à¦à¦¿ à¦—à¦¾à¦‡à¦¤à§‹ à¦­à¦¾à¦Ÿà¦¿à¦¯à¦¼à¦¾à¦²à§€ à¦—à¦¾à¦¨à¥¤ à¦à¦®à¦¨à¦¿ à¦à¦• à¦¸à¦®à¦¯à¦¼ à¦¸à§‡à¦‡ à¦—à¦¾à¦¨à§‡à¦° à¦†à¦¸à¦° à¦¬à¦¸à¦¤à§‹ à¦®à¦¾à¦à§‡ à¦®à¦¾à¦à§‡à¥¤&nbsp;&nbsp;à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à§à¦¡à¦¼à§‹à¦°à¦¾ à¦°à¦¾à¦¤à§‡ à¦ªà§à¦à¦¥à¦¿ à¦ªà¦¡à¦¼à¦¤à§‹, à¦¬à¦¾à¦¡à¦¼à¦¾à¦¤à§‡ à¦¤à¦¨à§‡ à¦®à§à¦–à¦° à¦¥à¦¾à¦•à¦¤à§‹ à¦—à§‹à¦Ÿà¦¾ à¦—à§à¦°à¦¾à¦®à¥¤ à¦¹à¦¿à¦¨à§à¦¦à§ à¦®à§à¦¸à¦²à¦¿à¦® à¦®à¦¿à¦²à§‡ à¦®à¦¿à¦¶à§‡ à¦¬à¦¸à¦¬à¦¾à¦¸ à¦•à¦°à§‡ â€à¦†à¦¸à¦›à§‡ â€à¦¯à§à¦—à§‡à¦° à¦ªà¦° à¦¯à§à¦—à¥¤</div><div style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\"><br style=\"padding: 0px; margin: 0px;\"></div><div style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">à¦…à¦¨à¦¾à¦¬à¦¿à¦² à¦à¦• à¦®à¦¾à¦à§‡ à¦•à§‹à¦¨ à¦•à¦¿à¦›à§à¦°à¦‡ à¦•à¦®à¦¤à¦¿ à¦›à¦¿à¦² à¦¨à¦¾à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ (à¦ªà§à¦°à¦¾à¦‡à¦®à¦¾à¦°à§€ à¦¸à§à¦•à§à¦²) à¦ªà¦¾à¦¸ à¦•à¦°à§‡ à¦¦à§à¦°à¦¦à§à¦°à¦¾à¦¨à§à¦¤à§‡ à¦ªà¦¡à¦¼à¦¾à¦° à¦†à¦®à§‡à¦°à¦‡ à¦ªà§à¦°à¦¾à¦¥à¦®à¦¿à¦• à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à¦¯à¦¼à§‡à¦° à¦¶à¦¿à¦•à§à¦·à¦• à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¤à¦¾à¦œà§à¦² à¦‡à¦¸à¦²à¦¾à¦®à§‡à¦° à¦¬à¦¡à¦¼ à¦›à§‡à¦²à§‡ à¦®à¦¹à¦¿à¦‰à¦¦à§à¦¦à¦¿à¦¨ à¦ªà§à¦°à¦¾à¦‡à¦®à¦¾à¦°à§€ à¦ªà¦¾à¦¸ à¦•à¦°à§‡ à¦¹à¦¾à¦‡ à¦¸à§à¦•à§à¦²à§‡ à¦•à§‹à¦¥à¦¾à¦¯à¦¼ à¦ªà¦¡à¦¼à¦¬à§‡ à¦à¦®à¦¨à¥¤ à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦†à¦¬à¦¾à¦² à¦¬à§ƒà¦¦à§à¦§ à¦¬à¦¨à¦¿à¦¤à¦¾ à¦¸à¦¬à¦¾à¦‡ à¦¤à¦¾à¦•à§‡ à¦¤à¦¾à¦œà§ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¬à¦²à§‡ à¦¸à¦®à§à¦¬à§‹à¦§à¦¨ à¦•à¦°à¦¤à§‹à¥¤ à¦¤à¦¿à¦¨à¦¿ à¦¹à¦² à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦à¦• à¦°à¦¾à¦¤à§‡ à¦¸à§à¦¬à¦ªà§à¦¨ à¦›à¦¿à¦²à§‡à¦¨, à¦¤à¦¾à¦°à¦‡ à¦˜à¦¨à¦¿à¦·à§à¦Ÿ à¦¬à¦¨à§à¦§à§ à¦¨à§à¦°à§à¦œà§à¦œà¦¾à¦®à¦¾à¦¨ à¦ªà¦¾à¦Ÿà§‹à¦¯à¦¼à¦¾à¦°à§€à¦•à§‡à¥¤ à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦®à¦¾à¦¨à§à¦· à¦¨à§à¦°à§à¦œà§à¦œà¦¾à¦®à¦¾à¦¨ à¦ªà¦¾à¦Ÿà§‹à¦¯à¦¼à¦¾à¦°à§€à¦•à§‡ à¦¡à¦¿à¦ªà¦Ÿà¦¿ à¦¬à¦²à§‡ à¦¡à¦¾à¦•à¦¤à§‹à¥¤ à¦¤à¦¿à¦¨à¦¿ à¦¤à§Žà¦•à¦¾à¦²à§‡ à¦®à§‡à¦Ÿà§à¦°à¦¿à¦• à¦ªà¦¾à¦¸ à¦•à¦°à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¿à¦¤ à¦®à¦¾à¦¨à§à¦· à¦›à¦¿à¦²à§‡à¦¨à¥¤ à¦¤à¦¾à¦œà§ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦°à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦†à¦° à¦à¦•à¦¾à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦°à¦‡à¦² à¦¨à¦¾à¥¤ à¦¸à§‡ à¦¸à§à¦¬à¦ªà§à¦¨ à¦¹à¦¯à¦¼à§‡ à¦—à§‡à¦² à¦—à§‹à¦Ÿà¦¾ à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¬à¦¾à¦¸à§€à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¥¤ à¦¯à§‡ à¦¸à§à¦¬à¦ªà§à¦¨ à¦†à¦° à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¬à¦¾à¦¸à§€à¦•à§‡ à¦˜à§à¦®à¦¾à¦¤à§‡ à¦¦à¦¿à¦² à¦¨à¦¾à¥¤ à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦² à¦¬à¦¾à¦¨à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¦‡à¥¤ à¦­à¦¾à¦°à¦¤à§‡à¦° à¦ªà§à¦°à¦¯à¦¼à¦¾à¦¤ à¦°à¦¾à¦·à§à¦Ÿà§à¦°à¦ªà¦¤à¦¿ à¦.à¦ªà¦¿.à¦œà§‡ à¦†à¦¬à¦¦à§à¦² à¦•à¦¾à¦²à¦¾à¦®à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦¤à¦¤à§à¦¤à§à¦¬à§‡à¦° à¦®à¦¤à¥¤ \"à¦¸à§à¦¬à¦ªà§à¦¨ à¦¸à§‡à¦Ÿà¦¾ à¦¨à¦¯à¦¼à¥¤ à¦¯à¦¾ à¦¤à§à¦®à¦¿ à¦˜à§à¦®à¦¿à¦¯à¦¼à§‡ à¦¦à§‡à¦–à¥¤ à¦¸à§à¦¬à¦ªà§à¦¨ à¦¸à§‡à¦Ÿà¦¾ à¦¯à¦¾ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦˜à§à¦®à¦¾à¦¤à§‡ à¦¦à§‡à¦¯à¦¼ à¦¨à¦¾â€à¥¤ à¦¤à¦¾à¦œà§ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦°à§‡à¦° à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦² à¦¬à¦¾à¦¨à¦¾à¦¨à§‹à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¦Ÿà¦¾ à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¬à¦¾à¦¸à§€à¦° à¦®à¦¨à§‡ à¦¦à§ƒà¦¢à¦¼ à¦ªà§à¦°à¦¤à§à¦¯à¦¯à¦¼à§‡ à¦à¦• à¦®à¦¾à¦¤à§à¦° à¦²à¦•à§à¦·à§à¦¯ à¦“ à¦‰à¦¦à§à¦¦à§‡à¦¶à§à¦¯ à¦¹à¦¯à¦¼à§‡ à¦—à§‡à¦²à¥¤ à¦à¦®à¦¨à¦¿ à¦¸à¦®à¦¯à¦¼ à¦à¦•à¦¦à¦¿à¦¨ à¦•à¦¾à¦²à§€à¦° à¦¹à¦¾à¦Ÿà§‡ à¦®à¦¾à¦¹à¦¬à§à¦° à¦›à§‹à¦¬à¦¹à¦¾à¦¨ à¦­à§‚à¦à¦‡à¦¯à¦¼à¦¾ (à¦•à¦¾à¦²à¦¾ à¦®à¦¿à¦¯à¦¼à¦¾) à¦¨à§à¦°à§à¦² à¦•à¦°à¦¿à¦® à¦®à¦œà§à¦®à¦¦à¦¾à¦°à¦•à§‡ à¦¡à§‡à¦•à§‡ à¦¬à¦²à§‡ \"à¦“ à¦¨à§à¦°à§à¦² à¦•à¦°à¦¿à¦®, à¦¬à¦¾à¦šà§à¦šà§à¦° à¦¬à¦¾à¦ª (à¦ªà§à¦°à¦¯à¦¼à¦¾à¦¤ à¦†à¦®à¦¿à¦° à¦¹à§‹à¦¸à§‡à¦¨ à¦®à§‡à¦®à§à¦¬à¦¾à¦°) à¦•à¦¿à¦¯à¦¼à¦¾ à¦•à¦¯à¦¼ à¦¤à¦¾à¦œà§ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¬à¦²à§‡ à¦¹à¦¾à¦‡ à¦¸à§à¦•à§à¦² à¦•à¦‡à¦°à¦¬à¦¾à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦¦à§‡à¦‡à¦–à¦›à§‡à¥¤ à¦¨à§à¦°à§à¦² à¦•à¦°à¦¿à¦® à¦¬à¦²à§‡ à¦¹à¦—à¦²à§‡à¦°à§‡ à¦°à¦¾à¦‡à¦šà§à¦›à¦¾ à¦¡à¦¾à¦•à§‡à¦¨ à¦¨à¦¾à¥¤ à¦¯à§‡à¦‡ à¦•à¦¥à¦¾ à¦¸à§‡à¦‡ à¦•à¦¾à¦œ à§§à§¯à§¬à§® à¦¸à¦¾à¦²à§‡à¦° à¦à¦• à¦•à¦¨à¦•à¦¨à§‡ à¦¶à§€à¦¤à§‡à¦° à¦°à¦¾à¦¤à§‡ à¦¸à§à¦•à§à¦² à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦° à¦ªà§à¦°à¦¥à¦® à¦¸à¦¤à§à¦¯ à¦¹à¦¯à¦¼ à¦ªà§à¦°à¦¾à¦‡à¦®à¦¾à¦°à§€ à¦¸à§à¦•à§à¦²à§‡à¦° à¦®à¦¾à¦ à§‡à¥¤ à¦¸à¦¿à¦¦à§à¦§à¦¾à¦¨à§à¦¤ à¦¹à¦¯à¦¼ à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦² à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à¦¬à§‡à¦‡à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦Ÿà¦¾à¦•à¦¾ à¦•à¦¡à¦¼à¦¿ à¦œà¦®à¦¿ à¦˜à¦° à¦¦à¦°à¦œà¦¾à¦° à¦¬à¦¨à§à¦¦à§‹à¦¬à¦¸à§à¦¤ à¦•à¦¿ à¦­à¦¾à¦¬à§‡ à¦¹à¦¬à§‡? à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¬à¦¾à¦¸à§€à¦° à¦à¦•à¦¤à¦¾à¦° à¦¶à¦•à§à¦¤à¦¿ à¦¸à¦¬ à¦•à¦¿à¦›à§à¦•à§‡à¦‡ à¦¸à¦®à§à¦­à¦¬ à¦•à¦°à§‡ à¦›à¦¿à¦²à¥¤ à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦°à§‡à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦à¦•à¦¾à¦•à¦¾à¦° à¦¹à¦¯à¦¼à§‡ à¦¸à¦°à§à¦¬ à¦ªà§à¦°à¦¥à¦® à¦¯à¦¿à¦¨à¦¿ à¦¸à¦¹à¦¾à¦¯à¦¼à¦¤à¦¾à¦° à¦¹à¦¾à¦¤ à¦¬à¦¾à¦¡à¦¼à¦¾à¦²à§‡à¦¨ à¦¤à¦¿à¦¨à¦¿ à¦¹à¦šà§à¦›à§‡à¦¨ à¦•à§à¦®à¦¿à¦²à¦¾à¦° à¦šà§Œà¦¦à§à¦¦ à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¤à§Žà¦•à¦¾à¦²à§€à¦¨ à¦à¦®.à¦à¦².à¦. à¦ªà§à¦°à¦¯à¦¼à¦¾à¦¤ à¦œà¦¨à¦¾à¦¬ à¦†à¦®à¦¿à¦¨à§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦šà§Œà¦§à§à¦°à§€à¥¤ à¦¤à¦¿à¦¨à¦¿ à¦à¦• à¦¹à¦¾à¦œà¦¾à¦° à¦à¦• à¦Ÿà¦¾à¦•à¦¾ à¦šà¦¾à¦à¦¦à¦¾ à¦¦à¦¿à¦¯à¦¼à§‡ à¦¸à§à¦•à§à¦² à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¸à¦¹à¦¾à¦¯à¦¼à¦¤à¦¾à¦° à¦¹à¦¾à¦¤ à¦¬à¦¾à¦¡à¦¼à¦¾à¦¨à¥¤ à¦¸à§à¦•à§à¦²à¦Ÿà¦¿à¦° à¦ªà§à¦°à¦¥à¦® à¦¨à¦¾à¦® à¦•à¦°à¦¨ à¦•à¦°à¦¾ à¦¹à¦¯à¦¼ à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° \"à¦†à¦®à¦¿à¦¨à¦¿à¦¯à¦¼à¦¾ à¦œà§à¦¨à¦¿à¦¯à¦¼à¦° à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦²\" à¦¹à¦¿à¦¸à§‡à¦¬à§‡à¥¤ à¦¦à¦•à§à¦·à¦¿à¦¨ à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦°à§‡à¦° à¦—à¦¨à§à¦¯à¦®à¦¾à¦¨à§à¦¯ à¦¬à§à¦¯à¦•à§à¦¤à¦¿à¦¬à¦°à§à¦— à¦¸à¦¹ à¦†à¦ªà¦¾à¦®à¦° à¦œà¦¨à¦—à¦¨ à¦¤à¦¾à¦¦à§‡à¦° à¦›à§‡à¦²à§‡ à¦®à§‡à¦¯à¦¼à§‡à¦¦à§‡à¦° à¦‰à¦šà§à¦š à¦¶à¦¿à¦•à§à¦·à¦¾à¦¯à¦¼ à¦¶à¦¿à¦•à§à¦·à¦¿à¦¤ à¦•à¦°à¦¤à§‡ à¦à¦• à¦¦à§à¦°à§à¦¨à¦¿à¦¬à¦¾à¦° à¦†à¦•à¦¾à¦™à§à¦–à¦¾ à¦†à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦¨à¦¿à¦¯à¦¼à§‡ à¦¦à¦²à¦®à¦¤ à¦¨à¦¿à¦°à§à¦¬à¦¿à¦¶à§‡à¦·à§‡ à¦à¦¾à¦à¦ªà¦¿à¦¯à¦¼à§‡ à¦ªà¦¡à¦¼à¦²à§‹ à¦¸à§à¦•à§à¦² à¦¤à§ˆà¦°à§€à¦° à¦•à¦¾à¦œà§‡à¥¤ à¦•à§‡à¦‰ à¦¬à¦¾à¦à¦¶ à¦à¦¾à¦¡à¦¼à§‡à¦° à¦¬à¦¾à¦à¦¶ à¦¦à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨, à¦•à§‡à¦‰ à¦¦à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨ à¦—à¦¾à¦›à¥¤ à¦…à¦¨à§‡à¦•à§‡ à¦¨à¦—à¦¦ à¦Ÿà¦¾à¦•à¦¾ à¦•à¦¡à¦¼à¦¿ à¦¦à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦—à§ƒà¦¹à¦¸à§à¦¥ à¦¦à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨ à¦§à¦¾à¦¨à¥¤ à¦à¦®à¦¨à¦“ à¦˜à¦Ÿà¦¨à¦¾ à¦†à¦›à§‡ à¦˜à¦°à§‡ à¦§à¦¾à¦¨ à¦¨à¦¾ à¦¥à¦¾à¦•à¦²à§‡ à¦¸à§à¦•à§à¦² à¦•à¦®à¦¿à¦Ÿà¦¿à¦° à¦²à§‹à¦• à¦œà¦¨ à¦®à¦¾à¦ à§‡à¦° à¦ªà¦¾à¦•à¦¾ à¦§à¦¾à¦¨ à¦•à§‡à¦Ÿà§‡ à¦®à¦¾à¦¡à¦¼à¦¾à¦‡ à¦•à¦°à§‡ à¦§à¦¾à¦¨ à¦¨à¦¿à¦¯à¦¼à§‡ à¦—à§‡à¦›à§‡à¦¨à¥¤ à¦¸à§à¦•à§à¦² à¦¨à¦¿à¦°à§à¦®à¦¾à¦¨à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦—à§à¦°à¦¾à¦®à¦¬à¦¾à¦¸à§€à¦° à¦…à¦¦à¦®à§à¦¯ à¦†à¦•à¦¾à¦™à§à¦–à¦¾à¦° à¦¶à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¸à¦¬ à¦…à¦¸à¦®à§à¦­à¦¬ à¦¸à¦®à§à¦­à¦¬ à¦¹à¦¯à¦¼à§‡ à¦¤à§ˆà¦°à§€ à¦¹à¦¯à¦¼à§‡ à¦—à§‡à¦›à§‡ â€œà¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦†à¦®à¦¿à¦¨à¦¿à¦¯à¦¼à¦¾ à¦œà§à¦¨à¦¿à¦¯à¦¼à¦° à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦²\"à¥¤ à¦à¦•à¦œà¦¨ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦¸à¦®à¦—à§à¦° à¦à¦²à¦¾à¦•à¦¾à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¦•à§‡ à¦›à§à¦à¦¯à¦¼à§‡ à¦¯à¦¾à¦¯à¦¼à¥¤ à¦¸à¦®à¦—à§à¦° à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¦•à§‡ à¦¦à§‹à¦²à¦¾ à¦¦à§‡à¦¯à¦¼à¥¤</div><div style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\"><br style=\"padding: 0px; margin: 0px;\"></div><div style=\"padding: 0px; margin: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">à¦¤à¦¾à¦°à¦‡ à¦œà§à¦¬à¦²à¦¨à§à¦¤ à¦ªà§à¦°à¦®à¦¾à¦¨ à¦†à¦œà¦•à§‡à¦° à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à¦¯à¦¼ â€œà¦­à§à¦°à¦¾à¦¤à§ƒà¦¤à§à¦¬à§‡à¦° à¦¬à¦¨à§à¦§à¦¨à§‡ à¦¥à¦¾à¦•à¦¬à§‹, à¦†à¦œà§€à¦¬à¦¨â€ à¦ à¦¶à§à¦²à§‹à¦—à¦¾à¦¨à§‡ à¦®à§à¦–à¦°à¦¿à¦¤ à¦¥à¦¾à¦•à§à¦• à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¬à¦¾à¦¸à§€à¦° à¦†à¦—à¦¾à¦®à§€ à¦ªà¦¥à¦šà¦²à¦¾à¥¤</div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infrastucture`
--

CREATE TABLE `infrastucture` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrastucture`
--

INSERT INTO `infrastucture` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">In terms of infrastructure, IMGC is one of the best colleges in the country matching international standards. It is one of the few colleges in the University of Delhi which has&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">upgraded its</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">classrooms&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">to facilitate teaching through modern tools and techniques. The College has&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">centrally air conditioned&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">classrooms with Wi-Fi enabled LCD projectors, tutorial rooms, library, a state-of-the-art seminar room and&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">a fully</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">equipped auditorium&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">with seating capacity of over 750 persons. The College takes pride in being a&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">differently-abled friendly campus&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">with new ramps, lifts and special washrooms added to the building. Also, the College has various facilities to address the reading, hearing and understanding requirements of various students. The IMGC library is an empowering unit with a&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">Resource Centre for Visually Challenged&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">possessing an array of audio-visual aids to assist in the process of self actualization. The College is endowed with&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">renovated hostels, medical support systems</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">(along with physiotherapy centre), modern gymnasium, swimming pool, a</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">huge parking facility (available to both students and faculty), air conditioned sports complex and playground&nbsp;</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">of international standards. A complete smoke and vehicle free zone, the College provides an eco-friendly environment to its students with the latest initiatives of&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">solar heating,</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">&nbsp;</span><span style=\"padding: 0px; margin: 0px 0px 5px; text-align: justify; font-weight: 700; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">rainwater harvesting, paper recycling and other green initiatives</span><span style=\"padding: 0px; margin: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: latoregular; font-size: 15px;\">. The College has taken measures to address the need for vigilance and security. The campus is CCTV-enabled to cater to the safety requirements of a well endowed and equipped campus receiving a huge footfall.</span>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(100) NOT NULL,
  `sl` int(100) DEFAULT NULL,
  `main_menu_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `sl`, `main_menu_name`, `icon`, `status`) VALUES
(9, 1, 'Admin Information', 'fa fa-user', 1),
(15, 2, 'Website Settings', 'fa fa-gears', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision`
--

CREATE TABLE `mission_vision` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission_vision`
--

INSERT INTO `mission_vision` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify; color: rgb(51, 51, 51);\"><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦«à§‡à¦¨à§€</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦œà§‡à¦²à¦¾à¦°</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;à¦«à§à¦²à¦—à¦¾à¦œà§€&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦°</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¸à§à¦¬à¦¨à¦¾à¦®à¦§à¦¨à§à¦¯</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Poppins, sans-serif; color: rgb(0, 0, 0);\">à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦²</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¥¤</span><span style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\"><font face=\"SutonnyMJ\" style=\"padding: 0px; margin: 0px;\">&nbsp;</font></span><span style=\"padding: 0px; margin: 0px; font-family: Poppins, sans-serif; color: rgb(0, 0, 0);\">à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦² à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦¦à§à¦°à¦·à§à¦Ÿà¦¾ à¦›à¦¿à¦²à§‡à¦¨ à¦ªà§à¦°à¦¯à¦¼à¦¾à¦¤ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¤à¦¾à¦œà§à¦² à¦‡à¦¸à¦²à¦¾à¦®à¥¤ à¦à¦–à¦¾à¦¨à§‡ à¦à¦•à¦Ÿà¦¿ à¦•à¦¥à¦¾ à¦‰à¦²à§à¦²à§‡à¦– à¦¨à¦¾ à¦•à¦°à¦²à§‡à¦‡ à¦¨à¦¯à¦¼à¥¤ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¤à¦¾à¦œà§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦›à¦¿à¦²à§‡à¦¨ à¦à¦• à¦®à¦¹à¦¾à¦¨ à¦¶à¦¿à¦•à§à¦·à¦• à¦“ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦…à¦¨à§à¦¤à¦ªà§à¦°à¦¾à¦£ à¦à¦• à¦®à¦¹à§Ž à¦¬à§à¦¯à¦•à§à¦¤à¦¿à¥¤ à¦­à¦¾à¦°à¦¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦¬à§‡à¦¶ à¦•à¦¯à¦¼à§‡à¦•à¦Ÿà¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¯à¦¼ à¦®à¦¾à¦·à§à¦Ÿà¦¾à¦° à¦¤à¦¾à¦œà§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦›à¦¿à¦²à§‡à¦¨ à¦…à¦—à§à¦° à¦¸à§ˆà¦¨à¦¿à¦•à¥¤</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦²à¦—à§à¦¨</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¥à§‡à¦•à§‡à¦‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦à¦‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦°</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦²à¦•à§à¦·à§à¦¯</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦›à¦¿à¦²à§‹</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¶à¦¿à¦•à§à¦·à¦¾à¦°</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦†à¦²à§‹</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦›à§œà¦¿à§Ÿà§‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¦à§‡à¦“à§Ÿà¦¾</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦à¦¬à¦‚</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦à¦‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦•à¦¾à¦œà¦Ÿà¦¿</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¸à¦ à¦¿à¦•</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦­à¦¾à¦¬à§‡à¦‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦ªà¦¾à¦²à¦¨</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦•à¦°à§‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦¯à¦¾à¦šà§à¦›à§‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦à¦‡</span><span style=\"padding: 0px; margin: 0px; font-family: SutonnyMJ; color: rgb(0, 0, 0);\">&nbsp;</span><span style=\"padding: 0px; margin: 0px; font-family: Vrinda, &quot;sans-serif&quot;; color: rgb(0, 0, 0);\">à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤</span><br style=\"padding: 0px; margin: 0px;\"></p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">\"à¦†à¦¨à¦¨à§à¦¦à¦ªà§à¦° à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à¦¯à¦¼\" à¦†à¦¨à¦¨à§à¦¦ à¦ªà§à¦°à§‡à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨ à¦¸à§Œà¦§à¥¤ à§¦à§§/à§¦à§§/à§§à§¯à§­à§© à¦¸à¦¾à¦²à§‡ à¦¨à¦¬à¦® à¦¶à§à¦°à§‡à¦£à§€ à¦šà¦¾à¦²à§ à¦•à¦°à¦¾ à¦¹à¦¯à¦¼à¥¤ à§§à§¯à§­à§ª à¦¸à¦¾à¦²à§‡ à¦ªà§à¦¨à¦¾à¦‚à¦— à¦¹à¦¾à¦‡à¦¸à§à¦•à§à¦² à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦¸à§à¦¬à§€à¦•à§ƒà¦¤à¦¿ à¦²à¦¾à¦­ à¦•à¦°à§‡à¥¤ à§§à§¯à§­à§« à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¥à¦® à¦à¦¸.à¦à¦¸.à¦¸à¦¿. à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦…à¦‚à¦¶ à¦—à§à¦°à¦¹à¦£ à¦•à¦°à§‡à¥¤&nbsp;à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦¸à¦ à¦¿à¦• à¦¬à¦¿à¦¦à§à¦¯à¦¾ à¦…à¦°à§à¦œà¦¨ à¦•à¦°à¦¬à§‡ à¦“ à¦‰à¦¨à§à¦¨à¦¤ à¦¨à§ˆà¦¤à¦¿à¦•à¦¤à¦¾ à¦“ à¦®à§‚à¦²à§à¦¯à¦¬à§‹à¦§ à¦—à¦ à¦¨ à¦•à¦°à§‡ à¦œà¦¾à¦¤à¦¿à¦° à¦œà¦¨à¦• à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨à§‡à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦—à§œà¦¾à¦° à¦²à¦•à§à¦·à§à¦¯à§‡ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦¨à¦¿à§Ÿà§‹à¦œà¦¿à¦¤ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯à§‡ à¦ªà§à¦°à¦¸à§à¦¤à§à¦¤ à¦¹à¦¬à§‡ -à¦à¦‡ à¦²à¦•à§à¦·à§à¦¯à§‡ à¦à¦‡ à¦•à¦²à§‡à¦œà§‡à¦° à¦¬à¦¿à¦œà§à¦ž à¦¶à¦¿à¦•à§à¦·à¦• à¦®à¦¨à§à¦¡à¦²à§€, à¦…à¦«à¦¿à¦¸ à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦à¦¬à¦‚ à¦…à¦«à¦¿à¦¸ à¦¸à¦¹à¦¾à§Ÿà¦•à¦—à¦£ à¦¨à¦¿à¦°à¦²à¦¸à¦­à¦¾à¦¬à§‡ à¦ªà§à¦°à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦šà¦¾à¦²à¦¿à§Ÿà§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¦¨à¥¤ à¦à¦‡ à¦•à¦²à§‡à¦œ à¦¥à§‡à¦•à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦—à§à¦°à¦¹à¦£ à¦•à¦°à§‡ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦¦à§‡à¦¶ à¦“ à¦¦à¦¶à§‡à¦° à¦¸à§‡à¦¬à¦¾à§Ÿ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦‰à§Žà¦¸à¦°à§à¦— à¦•à¦°à¦¬à§‡ à¦ à¦®à¦¾à¦¨à¦¸à§‡ à¦¤à¦¾à¦¦à§‡à¦°à¦•à§‡ à¦—à¦ à¦¨ à¦•à¦°à¦¾à¦‡ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦à¦•à¦®à¦¾à¦¤à§à¦° à¦²à¦•à§à¦·à§à¦¯ à¦“ à¦‰à¦¦à§à¦¦à§‡à¦¶à§à¦¯ à¥¤&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules_regulation`
--

CREATE TABLE `rules_regulation` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules_regulation`
--

INSERT INTO `rules_regulation` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">1. Students are expected to come to the college in neat, clean and simple clothes. They must conform to the high standards of modesty maintained by the institutions. They should not wear gaudy dresses.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">2. All men students are expected to wear pants and shirts-bush shirts or slack shirts. Tshirts are not allowed. Women students are strictly not permitted to wear skirts, leggings, jeans, frocks and high tops.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">3. Students should not bring discredit to the college or to themselves. Insubordination and rude behavior of any kind inside or outside the college will be severely dealt with.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">4. Students should be regular and punctual in attending the classes and all activities connected with the college. No student is allowed to enter the classroom or leave the class room during class hours without the permission of the principal. They are not permitted to go out during lunch break.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">5. The students should stand up and wish the teacher when he/she enters the class. They should take their seats only after the teacher takes his/her seat or instructs the students to do so.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">6. They should wish all the teachers irrespective of their departments.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">7. Strict silence should be maintained during class hours in the Classrooms, Library, Laboratory, Examination halls and in the College premises.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">8. Use of books, magazines and other materials not approved by the principal will not be permitted in the college campus.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">9. All lost property should be brought to the college office.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">10. Students are expected to take care of the college property and help in keeping the premises neat and clean. Disfiguring of walls, doors or breaking the furniture is a breach of discipline and will not be tolerated.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">11. Students are forbidden from organizing any meeting in the college premises or collecting money for any purpose without the permission of the principal.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">12. Students are not permitted to entertain the visitors in the college during the working hours. They are strictly forbidden from receiving personal phone calls or letters.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">13. Student should not enter the office room, staff room or computer lab without permission.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">14. Monthly tests and model examinations are part of curriculum and student should be sincere in taking these tests. They should not indulge in any kind of malpractice during examinations or tests.</p><p style=\"padding: 0px; margin-right: 0px; margin-left: 0px; color: rgb(33, 37, 41); font-family: &quot;Baloo Chettan 2&quot;, AdorshoLipi, cursive; text-align: justify;\">15. Eve-teasing is strictly prohibited &amp; eve-teasers will be dismissed from the college. According to TamilNadu eve-teasing ordinance of 1998 whoever commits or participated or abets in eve-teasing, in or within the premises of any educational institutions, is liable for imprisonment for term which may extend to one year or shall we liable to a fine which may extend to RS.10000/- or both.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(100) NOT NULL,
  `sl` int(100) DEFAULT NULL,
  `main_menu` int(100) DEFAULT NULL,
  `link_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `sl`, `main_menu`, `link_name`, `route_name`, `status`) VALUES
(4, 1, 9, 'Create Admin', '../create_admin/create_admin.php', 1),
(5, 2, 9, 'Manage Admin', '../create_admin/view_admin.php', 1),
(6, 3, 15, 'About Us', '../website_settings/about_us.php', 1),
(7, 4, 15, 'Exam Rules', '../website_settings/exam_rules.php', 1),
(8, 6, 15, 'Mission Vision', '../website_settings/mission_vision.php', 1),
(9, 5, 15, 'History', '../website_settings/history.php', 1),
(10, 7, 15, 'Infrastucture', '../website_settings/infrastucture.php', 1),
(11, 8, 15, 'Rules Regulation', '../website_settings/rules_regulation.php', 1),
(12, 9, 15, 'Citizen charter', '../website_settings/cityzen_charter.php', 1),
(13, 10, 15, 'Student Info', '../website_settings/student_info.php', 1),
(14, 11, 15, 'Yearly Work Plan', '../website_settings/yearly_work.php', 1),
(15, 12, 15, 'FEES', '../website_settings/fees.php', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizen_charter`
--
ALTER TABLE `citizen_charter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_admin`
--
ALTER TABLE `create_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_rules`
--
ALTER TABLE `exam_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastucture`
--
ALTER TABLE `infrastucture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules_regulation`
--
ALTER TABLE `rules_regulation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`main_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizen_charter`
--
ALTER TABLE `citizen_charter`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_admin`
--
ALTER TABLE `create_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_rules`
--
ALTER TABLE `exam_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infrastucture`
--
ALTER TABLE `infrastucture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rules_regulation`
--
ALTER TABLE `rules_regulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `test` FOREIGN KEY (`main_menu`) REFERENCES `main_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
