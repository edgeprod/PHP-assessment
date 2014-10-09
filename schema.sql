-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 10:53 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
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

INSERT INTO `questions` VALUES(1, 'MVC Principles', 'Explain MVC principles, and why they are important?', 'MVC principle is the separation of a software program into 3 parts, known as the Model, the Controller, and the View. MVC is important because it introduces separation of concerns, DRY principle, and as such, helps creating more manageable and scalable code.', '2014-09-25 22:30:16');
INSERT INTO `questions` VALUES(2, 'Unit Testing', 'What constitutes a good unit test?', 'A good unit test has to be:\r\n- Throughout: cover all possible input scenarios of a code unit.\r\n- Consistent: Same input must always produce same output.\r\n- Independent: Tests should not rely on each other.\r\n- Able to be run fully automated.', '2014-09-25 22:30:37');
INSERT INTO `questions` VALUES(3, 'Roadblocks', 'You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?', '1. Identify the entry point of the code (where it starts executing) and see what code/library it pulls in.\r\n2. Run the code with different input, use debugger if available, to see how the program proceeds.\r\n3. Analyze the function of each small potions of the code and rewrite them. Gradually, you will get a feel for the structure of the code and understand how it works.', '2014-09-25 22:32:41');
