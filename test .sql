-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2021 at 02:35 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `body` text,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `body`, `users_id`) VALUES
(1, 'Semester One', ' Semester One is officially starting on the 3rd of May 2022.', 4),
(4, 'Semester One', ' Semester One will officially end on the 3rd of September 2022.', 0),
(5, 'COVID Guidelines', 'Kindly adhere to the SOPS and take care.', 8),
(11, 'Graduation ', 'The 29th Graduation ceremony will take place on 28/05/22.', 8),
(12, 'Culture Day', 'This is scheduled to take place on 1st Feb', 8),
(13, 'MUST at 25', 'The Silver Jubilee will be celebrated on 23/09/24', 8),
(14, 'Semester One', ' Semester One will officially end on the 3rd of September 2022.', 0),
(15, 'Semester One', ' Semester One will officially end on the 3rd of September 2022.', 0),
(16, 'COVID Guidelines', 'Kindly adhere to the SOPS and take care.', 8),
(17, 'Extra Lesson', 'Dear students,prepare for an extra lesson at 4pm.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_comments` varchar(100) DEFAULT NULL,
  `posts_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`posts_id`,`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_comments`, `posts_id`, `users_id`) VALUES
(1, 'hellppp', 1, 4),
(2, 'dead', 1, 4),
(3, 'hahaha', 2, 7),
(4, 'lord', 4, 7),
(5, '', 0, 8),
(6, 'hellppp', 8, 8),
(7, 'nahahah', 0, 8),
(8, 'fas', 0, 7),
(9, 'opopopo', 0, 7),
(10, 'NOOOOOO', 8, 8),
(11, 'kil', 7, 8),
(12, '', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipient` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `body` text,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `recipient`, `title`, `body`, `users_id`) VALUES
(1, 'cotildah@must.ac.ug', 'Missed Paper', '\r\nDear sir,Missed my end of sem paper for calculus1.', 4),
(2, 'cotildah@must.ac.ug', 'Internship Concern', 'I\'m requesting for change of an internship supervisor.', 4),
(8, 'annah@.must.ac.ug', 'Research Concern', 'I\'m requesting for change of a research supervisor.', 7),
(10, 'isophel@must.ac.ug', 'Missing Marks', '\r\nDear sir,I\'m missing marks for System Administration-midsem.', 4),
(11, 'atukwatsetracy2@gmail.com', 'MissingMarks', ' . logic . 56 . 3 . 2 . logic . lo ', 12),
(12, 'cotildah@must.ac.ug', 'MissingMarks', ' . Networking . 2018/BCS/021/PS . 3 . 1 . Networking . Logic ', 12);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` varchar(100) DEFAULT NULL,
  `complaints_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`complaints_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `reply`, `complaints_id`, `lecturer_id`) VALUES
(1, 'Dear Annah,Got your complaint and allocated the correct marks in the system.', 1, 8),
(2, 'The missed paper can be done when next offered.', 2, 8),
(3, 'Considering to change your internship supervisor within the shortest time possible.', 8, 8),
(4, 'Consider collecting the required data before starting on your project.', 9, 8),
(5, '\r\nConsidering to change your research supervisor within the shortest time possible.', 8, 6),
(6, 'Sorry! I can\'t trace your marks for the end of paper examination.', 2, 8),
(7, 'Sorry! I can\'t trace your marks for the end of paper examination.', 1, 8),
(19, 'Sorry! I can\'t trace your marks for the end of paper examination.', 1, 8),
(20, 'Sorry! I can\'t trace your marks for the end of paper examination.', 1, 8),
(21, 'Sorry! I can\'t trace your marks for the end of paper examination.', 8, 8),
(22, 'Kindly give me your view in time', 2, 9),
(23, '', 10, 13),
(24, 'Kindly clear the fees in time', 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `users_id`) VALUES
(1, '2018bit020@std.must.ac.ug', 'll', 4),
(2, 'sir@must.ac.ug', 'd41d8cd98f00b204e9800998ecf8427e', 5),
(3, 'smoove@std.must.ac.ug', '5b54c0a045f179bcbbbc9abcb8b5cd4c', 6),
(4, 'didi@std.must.ac.ug', 'f9e012396be65db022bd11de9308a9b40e04e492cc4ee8636c09fb83df4aa27b', 7),
(5, 'doo@must.ac.ug', 'f9e012396be65db022bd11de9308a9b40e04e492cc4ee8636c09fb83df4aa27b', 8),
(6, 'cotildah@must.ac.ug', '3a89b0efad1403f22fc0cc93b30c5e62235f144345b90c572c6c608aef067014', 9),
(7, '2018bcs024@std.must.ac.ug', 'a852382cdc33da64e68ac98235f8103c37c37bde8ededbc18a68300b3fe42262', 10),
(8, '2018bcs022@std.must.ac.ug', '1a0c1c2a528309066164e550f797a15588649163d183056ccb2210fa6616e3d5', 11),
(9, '2018bcs005@std.must.ac.ug', 'b677c275f4f3c7a1c10a13f07cb671969de7775dbba49bdbac422fb395f08e30', 12),
(10, 'isophel@must.ac.ug', 'c410bffa0f9b1862a321f8042e707ae2500a79212a1d23caff475e131ced64b0', 13),
(11, 'annah@must.ac.ug', 'f8bb1880ec989ac81ed0ba6459fc4f6d35e43b9ba1ca5f78ebd640a6228eec71', 14);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

DROP TABLE IF EXISTS `login_logs`;
CREATE TABLE IF NOT EXISTS `login_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(256) NOT NULL,
  `uni` varchar(256) NOT NULL,
  `whenn` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `names`, `uni`, `whenn`) VALUES
(8, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 18:30:59'),
(9, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-07 19:50:50'),
(10, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 08:20:51'),
(11, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 08:21:32'),
(12, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 08:52:58'),
(13, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 08:53:26'),
(14, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 09:00:23'),
(15, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 09:25:16'),
(16, 'code maestro', '2018bit020@std.must.ac.ug', '2021-11-08 14:50:56'),
(17, 'lalala lalalala', 'smoove@std.must.ac.ug', '2021-11-08 15:17:41'),
(18, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 07:01:21'),
(19, '? ?', 'doo@must.ac.ug', '2021-11-09 07:21:06'),
(20, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 07:29:32'),
(21, '? ?', 'doo@must.ac.ug', '2021-11-09 07:29:51'),
(22, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:06:41'),
(23, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:11:57'),
(24, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:13:10'),
(25, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:14:43'),
(26, '? ?', 'doo@must.ac.ug', '2021-11-09 08:25:34'),
(27, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:30:54'),
(28, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 08:42:01'),
(29, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 10:06:42'),
(30, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 10:17:19'),
(31, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 10:29:49'),
(32, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 12:40:58'),
(33, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 13:21:24'),
(34, '? ?', 'doo@must.ac.ug', '2021-11-09 14:03:32'),
(35, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 16:29:03'),
(36, '? ?', 'doo@must.ac.ug', '2021-11-09 16:41:17'),
(37, '? ?', 'doo@must.ac.ug', '2021-11-09 19:48:27'),
(38, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 20:39:50'),
(39, '? ?', 'doo@must.ac.ug', '2021-11-09 21:01:42'),
(40, '? ?', 'doo@must.ac.ug', '2021-11-09 21:03:26'),
(41, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 21:07:54'),
(42, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 21:09:26'),
(43, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-09 21:30:10'),
(44, '? ?', 'doo@must.ac.ug', '2021-11-10 06:24:02'),
(45, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-10 08:16:35'),
(46, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-10 10:57:11'),
(47, '? ?', 'doo@must.ac.ug', '2021-11-10 14:15:08'),
(48, '? ?', 'doo@must.ac.ug', '2021-11-10 14:42:36'),
(49, '? ?', 'doo@must.ac.ug', '2021-11-10 15:50:32'),
(50, '? ?', 'doo@must.ac.ug', '2021-11-10 15:53:41'),
(51, '? ?', 'doo@must.ac.ug', '2021-11-10 15:54:50'),
(52, '? ?', 'doo@must.ac.ug', '2021-11-10 16:10:36'),
(53, '? ?', 'doo@must.ac.ug', '2021-11-10 16:24:30'),
(54, '? ?', 'doo@must.ac.ug', '2021-11-10 16:26:15'),
(55, '? ?', 'doo@must.ac.ug', '2021-11-10 16:27:42'),
(56, '? ?', 'doo@must.ac.ug', '2021-11-10 16:38:04'),
(57, '? ?', 'doo@must.ac.ug', '2021-11-10 16:40:08'),
(58, '? ?', 'doo@must.ac.ug', '2021-11-10 16:41:55'),
(59, '? ?', 'doo@must.ac.ug', '2021-11-10 16:43:50'),
(60, '? ?', 'doo@must.ac.ug', '2021-11-10 19:16:10'),
(61, '? ?', 'doo@must.ac.ug', '2021-11-10 19:22:07'),
(62, '? ?', 'doo@must.ac.ug', '2021-11-10 19:27:47'),
(63, '? ?', 'doo@must.ac.ug', '2021-11-10 19:31:53'),
(64, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-10 20:41:52'),
(65, '? ?', 'doo@must.ac.ug', '2021-11-10 21:10:38'),
(66, '? ?', 'doo@must.ac.ug', '2021-11-10 21:16:24'),
(67, '? ?', 'doo@must.ac.ug', '2021-11-10 21:19:04'),
(68, '? ?', 'doo@must.ac.ug', '2021-11-11 05:28:14'),
(69, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-11 05:31:25'),
(70, '? ?', 'doo@must.ac.ug', '2021-11-11 06:02:22'),
(71, '? ?', 'doo@must.ac.ug', '2021-11-11 06:05:04'),
(72, '? ?', 'doo@must.ac.ug', '2021-11-11 07:18:36'),
(73, '? ?', 'doo@must.ac.ug', '2021-11-11 07:59:10'),
(74, '? ?', 'doo@must.ac.ug', '2021-11-11 08:01:34'),
(75, '? ?', 'doo@must.ac.ug', '2021-11-11 09:33:19'),
(76, 'didi dididi', 'didi@std.must.ac.ug', '2021-11-11 11:12:24'),
(77, '? ?', 'doo@must.ac.ug', '2021-11-11 14:24:19'),
(78, '? ?', 'doo@must.ac.ug', '2021-11-11 14:41:49'),
(79, '? ?', 'doo@must.ac.ug', '2021-11-11 15:05:40'),
(80, '? ?', 'doo@must.ac.ug', '2021-11-11 15:07:51'),
(81, '? ?', 'doo@must.ac.ug', '2021-11-11 15:08:18'),
(82, '? ?', 'doo@must.ac.ug', '2021-11-11 15:09:08'),
(83, '? ?', 'doo@must.ac.ug', '2021-11-11 15:12:21'),
(84, '? ?', 'doo@must.ac.ug', '2021-11-11 16:24:16'),
(85, 'Cotildah Tukamushaba', 'cotildah@must.ac.ug', '2021-12-07 20:15:29'),
(86, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-07 20:53:13'),
(87, 'Cotildah Tukamushaba', 'cotildah@must.ac.ug', '2021-12-07 22:06:02'),
(88, 'Isophel Natwijuka', 'isophel@must.ac.ug', '2021-12-07 22:22:52'),
(89, 'Annah Umuhoza', 'annah@must.ac.ug', '2021-12-07 22:27:19'),
(90, 'Cotildah Tukamushaba', 'cotildah@must.ac.ug', '2021-12-08 08:59:23'),
(91, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-08 09:03:13'),
(92, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-09 11:31:26'),
(93, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-17 06:55:54'),
(94, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-17 07:39:55'),
(95, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-17 08:02:01'),
(96, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-19 08:18:25'),
(97, 'Mackline Natamba', '2018bcs005@std.must.ac.ug', '2021-12-19 08:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `users_id`, `genre`) VALUES
(1, 4, 'Bitch where were when i was working'),
(2, 7, ' New Complaint : MARKS  '),
(3, 7, ' New Comment : hahaha on your post'),
(4, 7, ' New Comment : lord on your post'),
(5, 8, ' New Comment :  on your post'),
(6, 8, ' New nnouncement : doja'),
(7, 8, ' New Comment :  on your post'),
(8, 8, ' New Comment :  on your post'),
(9, 8, ' New nnouncement : why are you like this'),
(10, 8, ' New Comment :  on your post'),
(11, 8, ' New Comment :  on your post'),
(12, 8, ' New Comment :  on your post'),
(13, 8, ' New Comment :  on your post'),
(14, 8, ' New nnouncement : hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii'),
(15, 8, ' New Comment :  on your post'),
(16, 8, ' New Comment : hellppp on your post'),
(17, 8, ' New Comment : nahahah on your post'),
(18, 8, ' New nnouncement : MAFIA'),
(19, 7, ' New Comment : fas on your post'),
(20, 7, ' New Comment : opopopo on your post'),
(21, 7, ' New Complaint : KJFHS '),
(22, 8, ' New nnouncement : CANCEL'),
(23, 0, ' New Comment :  on your post'),
(24, 8, ' New nnouncement : Math'),
(25, 8, ' New Comment : NOOOOOO on your post'),
(26, 8, ' New Comment : kil on your post'),
(27, 8, ' New Comment :  on your post'),
(28, 8, ' New Comment :  on your post'),
(29, 8, ' New Comment :  on your post'),
(30, 8, ' New Comment :  on your post'),
(31, 8, ' New Comment :  on your post'),
(32, 8, ' New Comment :  on your post'),
(33, 8, ' New Comment :  on your post'),
(34, 8, ' New Comment :  on your post'),
(35, 8, ' New Comment :  on your post'),
(36, 8, ' New Comment :  on your post'),
(37, 8, ' New Comment :  on your post'),
(38, 8, ' New Comment :  on your post'),
(39, 8, ' New Comment :  on your post'),
(40, 9, ' New nnouncement : Extra Lesson'),
(41, 9, ' New Comment : Kindly give me your view in time on your post'),
(42, 13, ' New Comment :  on your post'),
(43, 13, ' New Comment : Kindly clear the fees in time on your post'),
(44, 12, ' New Complaint :  '),
(45, 12, ' New Complaint :  ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(45) DEFAULT NULL,
  `image_url` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `image_url`, `users_id`) VALUES
(2, 'Basketball match BCS1 vs BCS2', 'redbull.jpg', 4),
(11, 'Interuniversity Sports Match', 'redbull.jpg', 7),
(12, 'Trending News', 'Screenshot (23).png', 8),
(13, 'Hello!Here is a new article to read.', 'STUDENT SCHEDULING AN APPOINTMENT.png', 8),
(14, 'Re-Opening of Semester One', 'Screenshot (23).png', 8),
(15, 'Adjustment of Semester Two', 'COUNSELLOR RESPONDING.png', 8),
(16, 'Inter-Faculty Sports Match', 'redbull.jpg', 7),
(17, 'COVID-19 Basic Guidelines', 'STUDENT SCHEDULING AN APPOINTMENT.png', 8),
(18, 'Exhibitions at MUST', '1.JPG', 12),
(19, 'National Prayer Day', '3.JPG', 12),
(20, 'Sports Gala', '2.JPG', 12),
(21, 'Seminar', '5.JPG', 12);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`) VALUES
(4, 'code', 'maestro'),
(5, '', ''),
(6, 'lalala', 'lalalala'),
(7, 'didi', 'dididi'),
(8, '?', '?'),
(9, 'Cotildah', 'Tukamushaba'),
(10, 'Peninah', 'Bwiiza'),
(11, 'Moses', 'Ashaba'),
(12, 'Mackline', 'Natamba'),
(13, 'Isophel', 'Natwijuka'),
(14, 'Annah', 'Umuhoza');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
