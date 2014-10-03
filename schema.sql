-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2014 at 05:10 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `text`, `answer`, `created`) VALUES
(1, 'MVC Principles', 'Explain MVC principles, and why they are important?', 'Model, view, controller and they''re important because they separate logic and view clearly and we can reuse code simply', '2014-09-25 22:30:16'),
(2, 'Unit Testing', 'What constitutes a good unit test?', 'Cover all test cases and pass all our logic thinking as expect', '2014-09-25 22:30:37'),
(3, 'Roadblocks', 'You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?', 'step1: try to do that code work\r\nstep2: debug\r\nstep3: read comment and ask revalant people', '2014-09-25 22:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`), ADD KEY `text` (`text`), ADD KEY `created` (`created`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
