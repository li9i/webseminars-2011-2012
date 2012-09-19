-- phpMyAdmin SQL Dump
-- version 3.4.9deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2012 at 03:27 AM
-- Server version: 5.1.58
-- PHP Version: 5.3.8-1+b1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heapoverflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpc_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `answer` text COLLATE utf8_bin NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vote` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=114 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `tpc_id`, `usr_id`, `answer`, `created`, `vote`) VALUES
(2, 1, 14, 'kai grafo opos sti c as poume?', '2011-12-26 03:00:00', -9),
(7, 1, 20, 'fffffg', '2011-12-28 15:06:26', 14),
(10, 1, 14, 'here lies the truth', '2011-12-28 15:37:36', 4),
(11, 11, 14, 'here lies the truth', '2011-12-28 16:46:21', -25),
(12, 11, 14, 'here lies the truth', '2011-12-28 16:47:06', -2),
(17, 3, 20, 'here lies the truth', '2011-12-28 17:51:35', 1),
(18, 11, 20, 'here lies the truth', '2011-12-28 18:01:23', 1),
(19, 3, 20, 'here lies the truth', '2011-12-28 18:01:56', 1),
(20, 11, 20, 'here lies the truthxx', '2011-12-28 18:02:01', 1),
(21, 11, 20, 'here lies the truthdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2011-12-28 18:47:44', 0),
(23, 1, 20, 'here lies the truth', '2011-12-29 14:05:55', 3),
(24, 1, 20, 'here lies the truth', '2011-12-29 14:07:19', 0),
(25, 3, 20, 'here lies the truth', '2011-12-29 14:07:40', 1),
(27, 11, 20, 'here lies the truth', '2011-12-29 14:13:28', 0),
(28, 1, 20, 'here lies the truth', '2011-12-29 14:15:22', 0),
(29, 1, 20, 'here lies the truth', '2011-12-29 14:23:49', 0),
(30, 11, 20, 'here lies the truth', '2011-12-29 14:28:43', 0),
(33, 11, 22, 'test1', '2011-12-29 16:31:03', 2),
(43, 6, 20, 'here lies the truth e?', '2011-12-29 20:01:36', 1),
(44, 6, 20, 'here lies the truth', '2011-12-29 20:01:42', 1),
(48, 6, 20, 'here lies the truth', '2011-12-30 00:31:03', -1),
(49, 6, 20, 'test', '2011-12-30 00:31:07', -1),
(50, 47, 20, '????????????', '2011-12-30 01:09:36', 0),
(51, 51, 20, 'here lies the truthx', '2011-12-30 01:27:02', 0),
(52, 54, 37, 'here lies the truthss', '2011-12-30 01:29:23', 1),
(53, 1, 20, 'here lies the truth', '2011-12-30 01:32:22', 0),
(54, 1000, 20, 'here lies the truthxaxa1000', '2011-12-30 02:00:38', 0),
(56, 63, 20, '????????', '2011-12-30 22:05:29', 1),
(58, 1, 20, '???????', '2011-12-30 22:12:19', 0),
(59, 1, 20, '?????? ??? ??? ???? ???;?', '2011-12-31 14:09:53', 0),
(63, 72, 20, 'li9i answer', '2011-12-31 15:48:13', 0),
(68, 63, 14, 'here lies the truth enkflds fds kjsdo gjsdf hgsfoh fsgh ug sfhg jghl jfghjfkgh fjkghlsfja lgjhl fjgh jgh gh jfkfshg jglsfjhg klfhgjklaf jslajor pgjif lf', '2011-12-31 17:07:01', 0),
(69, 63, 14, '??????? ????? ?? ??? ?????????? ?? ?????? ??????????? ?????????? ??? ???? ??? ??????, ?????????????? ??? ??? ??????????????? ???????.\\r\\n??? ?????? ?????? ??? ??? ?? ???????????? ???, ???? ?? ?????????? ? ???????? ??? ??????, ??? ? ???? ??? ????? ???????? ??? ????????? ?? ?????????? ???? ????????,', '2011-12-31 17:07:27', 0),
(70, 63, 14, 'here lies the truth\\r\\ndsadas \\r\\nsd asdas', '2011-12-31 17:07:44', 0),
(71, 63, 14, '??????? ????? ?? ??? ?????????? ?? ?????? ??????????? ?????????? ??? ???? ??? ??????, ?????????????? ??? ??? ??????????????? ???????.\\r\\n??? ?????? ?????? ??? ??? ?? ???????????? ???, ???? ?? ?????????? ? ???????? ??? ??????, ??? ? ???? ??? ????? ???????? ??? ????????? ?? ?????????? ???? ????????,', '2011-12-31 17:08:36', 0),
(72, 63, 14, '??????? ????? ?? ??? ?????????? ?? ?????? ??????????? ?????????? ??? \r\n\r\n???? ??? ??????, ?????????????? ??? ??? ??????????????? ???????.\r\n\r\n??? ?????? ?????? ??? ??? ?? ???????????? ???, ???? ?? ?????????? ? \r\n\r\n???????? ??? ??????, ??? ? ???? ??? ????? ???????? ??? ????????? ?? ?????????? ???? ????????,', '2011-12-31 17:08:58', 0),
(73, 63, 14, 'papa', '2011-12-31 17:09:41', 1),
(74, 47, 20, 'sasa???±???±???±', '2011-12-31 20:21:28', 0),
(75, 1, 20, 'here lies the truth???±', '2011-12-31 20:38:53', 0),
(76, 69, 20, 'xa???±', '2011-12-31 20:43:43', 0),
(77, 69, 20, 'here lies the truthxaxax???±???±???±', '2011-12-31 20:45:16', 0),
(78, 69, 20, '???±???±', '2011-12-31 20:45:22', 0),
(79, 69, 20, 'xa???±???±', '2011-12-31 20:48:45', 0),
(80, 69, 20, '?±???±???±', '2011-12-31 21:07:09', 0),
(81, 69, 20, 'here lies the truth???±', '2011-12-31 21:08:26', 0),
(103, 46, 20, 'ασδ φδ κφδσ [φδσ\r\n\r\nφδφλσδκ κφδσκλ φδσ \r\n\r\nφκλσδφ σδφ', '2012-01-01 18:20:01', -1),
(104, 46, 20, 'here lies the truth<br />\r\n<br />\r\nδσ<br />\r\n<br />\r\nαντε<br />\r\n', '2012-01-01 18:23:47', -1),
(105, 46, 20, 'here lies the truth<br />\r\n<br />\r\nαα', '2012-01-01 18:25:39', 1),
(106, 46, 20, 'here lies the truth\r\n\r\nαα', '2012-01-01 18:29:05', 1),
(107, 46, 45, 'some xss tests <script>alert(1);</script>', '2012-01-07 23:28:40', 1),
(108, 46, 45, 'sql injection? ''"`[]', '2012-01-07 23:29:17', 1),
(110, 89, 14, 'here lies the truth', '2012-01-08 00:02:04', 1),
(111, 69, 20, 'ελληνικα', '2012-01-09 01:16:46', 0),
(112, 91, 20, 'υεσ', '2012-01-09 01:17:30', 0),
(113, 63, 20, 'υρυρ', '2012-01-09 01:20:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `answer_vote`
--

CREATE TABLE IF NOT EXISTS `answer_vote` (
  `usr_id` int(11) NOT NULL,
  `ans_id` int(11) NOT NULL,
  PRIMARY KEY (`usr_id`,`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `answer_vote`
--

INSERT INTO `answer_vote` (`usr_id`, `ans_id`) VALUES
(14, 5),
(14, 11),
(14, 12),
(14, 43),
(14, 44),
(14, 48),
(14, 49),
(14, 56),
(14, 103),
(14, 104),
(14, 105),
(14, 106),
(14, 107),
(14, 108),
(20, 2),
(20, 5),
(20, 7),
(20, 10),
(20, 11),
(20, 12),
(20, 17),
(20, 20),
(20, 33),
(20, 52),
(20, 61),
(20, 62),
(20, 64),
(20, 73),
(20, 110),
(22, 11),
(22, 19),
(22, 25),
(32, 18),
(32, 33);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `descr`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'Πολιτικά'),
(4, 'Μουσική'),
(5, 'Τηλεόραση'),
(6, 'Ταινίες'),
(7, 'ΤΗΜΜΥ'),
(8, 'Ειδήσεις'),
(9, 'Κοσμικά'),
(10, 'Θεσσαλονίκη');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_bin NOT NULL,
  `usr_id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8_bin NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=92 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `question`, `usr_id`, `title`, `created`) VALUES
(1, 'Είμαι αρχάρια στην PHP. \r\nαιδιά ξέρει κανείς, αν εγώ που είμαι παλιά πρέπει...	14	ΕΡΓΑΣΤΗΡΙΟ ΗΛΕΚΤΡΟΝΙΚΗΣ ΙΙ	2011-12-09 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	4	Τι παίζει με τις δηλώσεις Χρυσοχοΐδη?\r\nΜπορεί να κ...	3	ΠΑΣΟΚ - Η επόμενη μέρα	2011-12-15 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	5	Τελικά θα χωρίσουν αυτοί?\r\nΚάτι άκουσα, αλλά δεν ε...	14	Bradjelina	2011-12-03 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	8	Ξέρετε αν θα ξανα ανοίξει το Ruby Tuesday?	3	Ruby Tuesday	2011-11-10 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	6	Ξέρει κανείς γιατί δεν κλείνουν ποτέ τη βεργίνα?\r\n...	3	ΤΗΛΕΚΟΝΤΡΟΛ ΒΕΡΓΙΝΑΣ	2011-12-13 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	3	Ξέρει κανείς αν θα κάνεισυναυλία στην ελλάδα?\r\n14	Adele	2011-12-24 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	1	Είμαι αρχάρια στην PHP. αιδιά ξέρει κανείς, αν εγώ που είμαι παλιά πρέπει...	14	ΕΡΓΑΣΤΗΡΙΟ ΗΛΕΚΤΡΟΝΙΚΗΣ ΙΙ	2011-12-09 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	4	Τι παίζει με τις δηλώσεις Χρυσοχοΐδη?\r\nΜπορεί να κ...	3	ΠΑΣΟΚ - Η επόμενη μέρα	2011-12-15 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	5	Τελικά θα χωρίσουν αυτοί?\r\nΚάτι άκουσα, αλλά δεν ε...	14	Bradjelina	2011-12-03 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	8	Ξέρετε αν θα ξανα ανοίξει το Ruby Tuesday?	3	Ruby Tuesday	2011-11-10 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	6	Ξέρει κανείς γιατί δεν κλείνουν ποτέ τη βεργίνα?\r\n...	3	ΤΗΛΕΚΟΝΤΡΟΛ ΒΕΡΓΙΝΑΣ	2011-12-13 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	3	Ξέρει κανείς αν θα κάνεισυναυλία στην ελλάδα?\r\n14	Adele	2011-12-24 00:00:00\r\n	  Edit	  Inline Edit	  Copy	 Delete	1	Είμαι αρχάρια στην PHP. ', 14, 'Πως ξεκινώ ένα αρχείο PHP;<?php echo 3 ?>', '2011-12-25 21:32:00'),
(2, 'Γεια σας,\r\nθα ήθελα να μου πείτε αυτό που λέει ο τίτλος.\r\nΈχω κολλήσει πολύ άσχημα!!\r\n\r\nΕυχαριστώ! :) <?php echo 5?>', 20, 'Πως κάνω align δύο divs το ένα δίπλα στο άλλο;', '2011-12-22 22:00:00'),
(3, 'Ξέρει κανείς αν θα κάνεισυναυλία στην ελλάδα?\r\n', 14, 'Adele', '2011-12-23 22:00:00'),
(6, 'Ξέρει κανείς γιατί δεν κλείνουν ποτέ τη βεργίνα?\\\\r\\\\n\\\\r\\\\nεμείς μαλάκες είμαστε που πληρώσαμε το τηλεκοντρόλ??s?sa?sa', 20, 'ΤΗΛΕΚΟΝΤΡΟΛ ΒΕΡΓΙΝΑΣ', '2011-12-30 01:54:07'),
(11, 'pitsa', 20, 'pitsa', '2011-12-28 15:24:43'),
(12, 'dasdas12', 20, 'dsadas', '2011-12-28 18:19:55'),
(16, 'asasa', 21, 'asasa', '2011-12-28 19:23:37'),
(29, 'ds', 32, 'ds', '2011-12-29 18:30:09'),
(31, '44', 20, 'test', '2011-12-29 23:56:34'),
(38, 'trtr', 20, 'trtr', '2011-12-30 00:11:32'),
(39, 'atatata', 20, 'atata', '2011-12-30 00:13:06'),
(40, 'sdsdsd', 20, 'dsdsd', '2011-12-30 00:14:05'),
(41, 'dsds', 20, 'dsds', '2011-12-30 00:14:47'),
(42, 'sdsdsds', 20, 'dsdsd', '2011-12-30 00:15:12'),
(43, 'dsdsds', 20, 'dsds', '2011-12-30 00:16:04'),
(44, 'tytytyt22', 20, 'tytyty', '2011-12-30 01:26:15'),
(45, 'asasa', 20, 'asasa', '2011-12-30 00:21:32'),
(46, 'dfs', 20, '\\\\', '2011-12-30 00:22:53'),
(47, 'dsdsdsdsds', 20, 'dsds1261', '2011-12-30 01:09:20'),
(48, 'pest', 37, 'pest', '2011-12-30 01:11:23'),
(50, 'dsdsds', 20, 'dsdsd', '2011-12-30 01:22:46'),
(51, 'cggfbhjl', 20, 'jknlkm;l', '2011-12-30 01:26:46'),
(52, 'dsdsds', 20, 'dsdsds', '2011-12-30 01:27:27'),
(53, 'asdasdsa', 20, 'dsadsadas', '2011-12-30 01:27:35'),
(54, 'sdasdsssx', 37, 'teafasd', '2011-12-30 02:01:48'),
(56, 'sasa', 20, 'sasa', '2011-12-30 15:07:28'),
(57, 'dasdas', 20, 'pesdas', '2011-12-30 15:29:53'),
(58, 'dsds', 20, 'dsds1261', '2011-12-30 15:36:29'),
(59, 'dsdsdsds', 20, 'dsdsds', '2011-12-30 15:36:36'),
(60, 'dsda', 20, 'dcascsdfs', '2011-12-30 15:36:42'),
(61, 'dasd ad asd s', 20, 'adsad dsd s', '2011-12-30 15:36:49'),
(62, 's dsad asd as ', 20, 'dsd a asd asasd as', '2011-12-30 15:36:58'),
(63, 'Τέτοιες μέρες τα ΜΜΕ συνηθίζουν να κάνουν φωτογραφικά αφιερώματα στο έτος που φεύγει, απεικονίζοντας τις πιο χαρακτηριστικές στιγμές.\\r\\nΜια τέτοια λοιπόν και για το πανεπιστήμιό μας, όπως το φαντάστηκε η πολιτική μας ηγεσία, και η δική μας γενιά φοιτητών και καθηγητών το κληροδοτεί στις επόμενες,', 20, 'γφηφη', '2011-12-31 17:11:31'),
(65, 'dsdsd', 20, 'dsds', '2011-12-31 14:44:24'),
(66, 'dsdsds', 20, 'dsdsds', '2011-12-31 14:44:44'),
(67, 'dsdsdsd', 20, 'dsdsds', '2011-12-31 14:44:50'),
(68, ' dfg fdgh fdgdfgfg ', 20, 'vdsf g fg df', '2011-12-31 14:44:57'),
(69, ' ασδ ασδ ασδα', 20, 'δ ασδ ασδ', '2011-12-31 14:45:12'),
(75, 'Τέτοιες μέρες τα ΜΜΕ συνηθίζουν να κάνουν φωτογραφικά αφιερώματα στο \r\n\r\nέτος που φεύγει, απεικονίζοντας τις πιο χαρακτηριστικές στιγμές.\r\nΜια τέτοια λοιπόν και\r\n για το πανεπιστήμιό μας\r\n, όπως το φαντάστηκε η πο\r\nλιτική μας ηγεσία, και η δική μας γενιά φοιτητών και καθηγητών το κληροδοτεί στις επόμενες,', 14, 'dsda', '2011-12-31 17:12:21'),
(85, 'εγω', 20, 'εγω', '2011-12-31 22:23:13'),
(86, 'εγω', 20, 'εγω', '2011-12-31 22:23:32'),
(87, 'χαχαχαχα', 20, 'χαχαχα', '2011-12-31 22:35:49'),
(88, 'τεστtest', 20, 'testτεστ', '2011-12-31 22:48:57'),
(89, 'Είναι ασφαλές να εισάγω αυτό τον τίτλο;', 45, '<script>alert(1);</script><style>body{display: none;}</style> \\''\\"`[]\\\\|', '2012-01-07 23:30:41'),
(90, 'whatever', 20, 'whatever', '2012-01-07 23:38:52'),
(91, 'αααδδδδ', 20, 'τεστ αδδδδ', '2012-01-09 01:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `topic_category`
--

CREATE TABLE IF NOT EXISTS `topic_category` (
  `tpc_id` int(11) NOT NULL DEFAULT '0',
  `ctg_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tpc_id`,`ctg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `topic_category`
--

INSERT INTO `topic_category` (`tpc_id`, `ctg_id`) VALUES
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(1, 1),
(1, 2),
(1, 3),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(3, 4),
(4, 3),
(5, 9),
(6, 7),
(7, 7),
(8, 10),
(10, 3),
(10, 4),
(11, 9),
(12, 4),
(13, 1),
(14, 3),
(16, 4),
(20, 9),
(21, 9),
(22, 1),
(30, 3),
(45, 3),
(45, 6),
(48, 1),
(50, 3),
(52, 3),
(52, 6),
(53, 2),
(53, 4),
(53, 5),
(54, 1),
(54, 2),
(54, 7),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 2),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(72, 1),
(72, 2),
(72, 3),
(76, 1),
(76, 2),
(78, 1),
(88, 3),
(88, 9),
(89, 1),
(89, 5),
(89, 8),
(90, 1),
(90, 11),
(91, 1),
(91, 2),
(91, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `active` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `admin`, `active`) VALUES
(20, 'li9i', '16093487e35e95f2213103028e486330', 'alejandro.rev@gmail.com', b'1', b'1')


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
