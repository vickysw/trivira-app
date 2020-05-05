-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 01:49 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triviadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `que_Id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`que_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_Id`, `question`, `created_on`, `updated_on`) VALUES
(1, 'What is your name ?', '2020-05-05 14:48:51', NULL),
(2, 'Who is the best cricketer in the world?', '2020-05-05 14:49:11', NULL),
(3, 'What are the colors in the Indian national flag?', '2020-05-05 14:49:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `answer_Id` int(11) NOT NULL AUTO_INCREMENT,
  `que_Id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`answer_Id`, `que_Id`, `answer`, `created_on`, `updated_on`) VALUES
(1, 1, 'Vanraj', '2020-05-05 17:09:34', NULL),
(2, 2, 'Virat Kolli', '2020-05-05 17:09:34', NULL),
(3, 3, 'White,Orange,Green', '2020-05-05 17:09:34', NULL),
(4, 1, 'vipul', '2020-05-05 17:21:51', NULL),
(5, 2, 'Virat Kolli', '2020-05-05 17:21:51', NULL),
(6, 3, 'White,Orange', '2020-05-05 17:21:51', NULL),
(7, 1, 'vipul', '2020-05-05 19:17:21', NULL),
(8, 2, 'Virat Kolli', '2020-05-05 19:17:21', NULL),
(9, 3, 'White,Orange', '2020-05-05 19:17:21', NULL),
(10, 1, 'James', '2020-05-05 19:17:57', NULL),
(11, 2, 'Sachin Tendulkar', '2020-05-05 19:17:57', NULL),
(12, 3, 'Yellow', '2020-05-05 19:17:57', NULL),
(13, 1, 'carry', '2020-05-05 19:18:19', NULL),
(14, 2, 'Jacques Kallis', '2020-05-05 19:18:19', NULL),
(15, 3, 'White,Yellow', '2020-05-05 19:18:19', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
