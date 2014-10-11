-- MySQL dump 10.13  Distrib 5.5.28, for osx10.6 (i386)
--
-- Host: localhost    Database: interview
-- ------------------------------------------------------
-- Server version	5.5.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'MVC Principles','Explain MVC principles, and why they are important?','','2014-09-25 22:30:16'),(2,'Unit Testing','What constitutes a good unit test?','','2014-09-25 22:30:37'),(3,'Roadblocks','You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?','','2014-09-25 22:32:41');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-25 23:03:41

--
-- Updating data for table `questions`
--

UPDATE `interview`.`questions` SET `answer` = 'MVC Pattern stands for Model-View-Controller Pattern where Model - Model represents an object or JAVA POJO carrying data. It can also have logic to update controller if its data changes. View - View represents the visualization of the data that model contains. Controller - Controller acts on both Model and view. It controls the data flow into model object and updates the view whenever data changes. It keeps View and Model separate. ' WHERE `questions`.`id` = 1;
UPDATE `interview`.`questions` SET `answer` = 'Able to be fully automated Has full control over all the pieces running (Use mocks or stubs to achieve this isolation when needed) Can be run in any order if part of many other tests Runs in memory (no DB or File access, for example) Consistently returns the same result (You always run the same test, so no random numbers, for example. save those for integration or range tests) Runs fast Tests a single logical concept in the system Readable Maintainable Trustworthy (when you see its result, you don’t need to debug the code just to be sure)' WHERE `questions`.`id` = 2;
UPDATE `interview`.`questions` SET `answer` = 'Debug and do line breaks step through the code. Find out the flow of the code, stack trace through to see where the key points are and go from there. ' WHERE `questions`.`id` = 3;

-- Dump completed on 2014-10-11 18:33:41
