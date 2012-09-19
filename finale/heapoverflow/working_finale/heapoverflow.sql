-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2011 at 05:59 PM
-- Server version: 5.5.18
-- PHP Version: 5.3.8

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=56 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `tpc_id`, `usr_id`, `answer`, `created`, `vote`) VALUES
(2, 1, 14, 'kai grafo opos sti c as poume?', '2011-12-26 03:00:00', -9),
(7, 1, 20, 'fffffg', '2011-12-28 15:06:26', 11),
(10, 1, 14, 'here lies the truth', '2011-12-28 15:37:36', 1),
(11, 11, 14, 'here lies the truth', '2011-12-28 16:46:21', -25),
(12, 11, 14, 'here lies the truth', '2011-12-28 16:47:06', -2),
(17, 3, 20, 'here lies the truth', '2011-12-28 17:51:35', 1),
(18, 11, 20, 'here lies the truth', '2011-12-28 18:01:23', 1),
(19, 3, 20, 'here lies the truth', '2011-12-28 18:01:56', 1),
(20, 11, 20, 'here lies the truthxx', '2011-12-28 18:02:01', 1),
(21, 11, 20, 'here lies the truthdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2011-12-28 18:47:44', 0),
(22, 2, 20, 'here lies the truth <?php echo 1?>', '2011-12-28 23:11:56', 1),
(23, 1, 20, 'here lies the truth', '2011-12-29 14:05:55', 0),
(24, 1, 20, 'here lies the truth', '2011-12-29 14:07:19', 0),
(25, 3, 20, 'here lies the truth', '2011-12-29 14:07:40', 1),
(26, 2, 20, 'here lies the truth', '2011-12-29 14:11:44', 1),
(27, 11, 20, 'here lies the truth', '2011-12-29 14:13:28', 0),
(28, 1, 20, 'here lies the truth', '2011-12-29 14:15:22', 0),
(29, 1, 20, 'here lies the truth', '2011-12-29 14:23:49', 0),
(30, 11, 20, 'here lies the truth', '2011-12-29 14:28:43', 0),
(33, 11, 22, 'test1', '2011-12-29 16:31:03', 2),
(39, 28, 32, 'here lies the truth', '2011-12-29 18:41:33', 2),
(40, 17, 32, '			17here lies the truth017d', '2011-12-29 18:41:38', 2),
(42, 17, 32, 'here lies the truth', '2011-12-29 18:41:44', 2),
(43, 6, 20, 'here lies the truth e?', '2011-12-29 20:01:36', 0),
(44, 6, 20, 'here lies the truth', '2011-12-29 20:01:42', 0),
(45, 32, 20, 'here lies the truth', '2011-12-29 23:57:51', 0),
(46, 32, 20, 'here lies the truth', '2011-12-29 23:58:35', 0),
(48, 6, 20, 'here lies the truth', '2011-12-30 00:31:03', 0),
(49, 6, 20, 'test', '2011-12-30 00:31:07', 0),
(50, 47, 20, 'here lies the truth', '2011-12-30 01:09:36', 0),
(51, 51, 20, 'here lies the truthx', '2011-12-30 01:27:02', 0),
(52, 54, 37, 'here lies the truthss', '2011-12-30 01:29:23', 0),
(53, 1, 20, 'here lies the truth', '2011-12-30 01:32:22', 0),
(54, 1000, 20, 'here lies the truthxaxa1000', '2011-12-30 02:00:38', 0),
(55, 55, 22, 'here lies the truth', '2011-12-30 13:55:25', 1);

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
(20, 2),
(20, 5),
(20, 7),
(20, 10),
(20, 11),
(20, 12),
(20, 17),
(20, 20),
(20, 33),
(20, 39),
(20, 40),
(20, 42),
(20, 55),
(22, 11),
(22, 19),
(22, 25),
(22, 39),
(22, 40),
(22, 42),
(32, 18),
(32, 22),
(32, 26),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=63 ;

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
(17, 'dfsfsd12211   g', 20, 'vdsfs', '2011-12-29 14:10:59'),
(28, 'dsds', 31, 'dsd', '2011-12-29 18:16:26'),
(29, 'ds', 32, 'ds', '2011-12-29 18:30:09'),
(30, 'sasasa', 1, 'sasa', '2011-12-29 20:04:52'),
(31, '44', 20, 'test', '2011-12-29 23:56:34'),
(32, 'sasa', 20, 'sasa', '2011-12-29 23:57:13'),
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
(49, 'tetetet', 20, 'tetete', '2011-12-30 01:22:17'),
(50, 'dsdsds', 20, 'dsdsd', '2011-12-30 01:22:46'),
(51, 'cggfbhjl', 20, 'jknlkm;l', '2011-12-30 01:26:46'),
(52, 'dsdsds', 20, 'dsdsds', '2011-12-30 01:27:27'),
(53, 'asdasdsa', 20, 'dsadsadas', '2011-12-30 01:27:35'),
(54, 'sdasdsssx', 37, 'teafasd', '2011-12-30 02:01:48'),
(55, 'teast', 22, 'test1 says', '2011-12-30 13:54:22'),
(56, 'sasa', 20, 'sasa', '2011-12-30 15:07:28'),
(57, 'dasdas', 20, 'pesdas', '2011-12-30 15:29:53'),
(58, 'dsds', 20, 'dsds1261', '2011-12-30 15:36:29'),
(59, 'dsdsdsds', 20, 'dsdsds', '2011-12-30 15:36:36'),
(60, 'dsda', 20, 'dcascsdfs', '2011-12-30 15:36:42'),
(61, 'dasd ad asd s', 20, 'adsad dsd s', '2011-12-30 15:36:49'),
(62, 's dsad asd as ', 20, 'dsd a asd asasd as', '2011-12-30 15:36:58');

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
(28, 4),
(30, 3),
(32, 3),
(45, 3),
(45, 6),
(48, 1),
(49, 3),
(50, 3),
(52, 3),
(52, 6),
(53, 2),
(53, 4),
(53, 5),
(54, 1),
(54, 2),
(54, 7),
(55, 3),
(55, 4),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `admin`) VALUES
(14, 'pitsa', 'e7cba8963f1c01e73f447bb9a679f092', 'pitsa.rev@gmail.com', b'1'),
(15, 'thomai', 'pitsa', 'pitspiatois', b'1'),
(20, 'li9i', '16093487e35e95f2213103028e486330', 'alejandro.rev@gmail.com', b'1'),
(21, 'pitsa2', 'eb33b81a061e82bcdc17d56a589f4148', 'pitsa2', b'0'),
(22, 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1', b'0'),
(23, 'test2', 'ad0234829205b9033196ba818f7a872b', 'test2', b'0'),
(31, '<html>test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.org', b'0'),
(32, '<html>1', '098f6bcd4621d373cade4e832627b4f6', 'test1@tyezst.org', b'0'),
(37, 'pest', 'fc3a4fb327706ca2220500871d60b94b', 'pest@pest.org', b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
