-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 12:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exams`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question` varchar(500) NOT NULL,
  `opta` varchar(50) NOT NULL,
  `optb` varchar(50) NOT NULL,
  `optc` varchar(50) NOT NULL,
  `optd` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `Diff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `opta`, `optb`, `optc`, `optd`, `ans`, `Diff`) VALUES
('Hello', 'a', 'b', 'c', 'd', 'a', 1),
('Hello w', 'aa', 'bb', 'cc', 'dd', 'cc', 1),
('Hello', 'a', 'b', 'c', 'd', 'a', 1),
('Hello w', 'aa', 'bb', 'cc', 'dd', 'cc', 1),
('Hellssss', 'a', 'b', 'c', 'd', 'a', 1),
('Hello ws', 'aaa', 'bbc', 'cc', 'dd', 'aaa', 1),
('Helowsdf a', 'a', 'bb', 'bbbb', 'bbbbb', 'a', 0),
('Helowsdf asdfsd', 's', 'ss', 'sss', 'ssss', 's', 0),
('Helowsdf a', 'a', 'bb', 'bbbb', 'bbbbb', 'a', 0),
('Helowsdf asdfsd', 's', 'ss', 'sss', 'ssss', 's', 0),
('asdfads', 'ad', 'adsf', 'adsfdsaf', 'adsfsdafd', 'ad', 0),
('asdfdsfsdf', 'ss', 'sss', 'sss', 'sss', 'sss', 0),
('asdfads', 'ad', 'adsf', 'adsfdsaf', 'adsfsdafd', 'ad', 0),
('asdfdsfsdf', 'ss', 'sss', 'sss', 'sss', 'sss', 0),
('234234', 'adsfdsaf', 'asdfsdf', 'asddfsadf', 'asdf', 'asdf', 0),
('sd35sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdsdfsd sdfsdfsdfsdf ', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfd', 'sdfdf', 0),
('234234', 'adsfdsaf', 'asdfsdf', 'asddfsadf', 'asdf', 'asdf', 0),
('sd35sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdsdfsd sdfsdfsdfsdf ', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfd', 'sdfdf', 0),
('dasf', 'ADf', 'adf', 'adf', 'adf', 'adf', 0),
('', '', '', '', '', '', 0),
('Enter the question', 'adf', 'adsf', 'asdf', 'sadf', 'adsf', 0),
('Enter the question', 'adf', 'adsf', 'asdf', 'sadf', 'adsf', 0),
('Enter the question', 'adsf', 'adsf', 'asdf', 'asdf', 'adf', 1),
('Enter the question', 'adsf', 'adsf', 'asdf', 'asdf', 'adf', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
