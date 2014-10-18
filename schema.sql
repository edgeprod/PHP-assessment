-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2014 at 12:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skills-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `text` (`text`),
  KEY `created` (`created`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `text`, `answer`, `created`) VALUES
(1, 'MVC Principles', 'Explain MVC principles, and why they are important?', 'The views  in MVC never talks directly to models and vice verse. It separates the each component with respect to their functionality.', '2014-09-25 22:30:16'),
(2, 'Unit Testing', 'What constitutes a good unit test?', 'Platform independent,automatic run enabled,easy to read and maintain', '2014-09-25 22:30:37'),
(3, 'Roadblocks', 'You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?', 'First of all I will understand the existing code base,clean it, write documentation and tests for it. Then I will start further development. So that if new members join the team, it would be easier for them to start working.', '2014-09-25 22:32:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
