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
INSERT INTO `questions` (`id`, `name`, `text`, `answer`, `created`) VALUES (1, 'MVC Principles', 'Explain MVC principles, and why they are important?', 'MVC, in simple terms, is an architecture that allows different parts of a system to be loosely coupled (or separated). Views are typically dumb and display data and take user actions. Models represent the data and domain logic in your system. And controllers liaise between the View and the Model, often controlling flow. There are loads of variants on the original Smalltalk MVC pattern and nowadays it seems like every framework is MVC.\r\n\r\nThe advantages are it makes your code less fragile, easier to understand and change and easier to unit test. All because it is separated into different parts.\r\n\r\nlike doing many things in life, it always helpful to be well organized. Models, Views and Controllers are distinctly different pieces of code that helps to provide different functions to your overall project. Because of that, they are kept separate and organized.\r\n\r\nImagine if you were designing a program. You wouldn\'t put all your code into one function, would you? No, you would divide them up into separate smaller functions that solve very specific tasks. Likewise, as programmers, we\'re constantly looking for ways to separate and divide our large applications to smaller bits of pieces. One of these organization design patterns is MVC, where, the model (the data) exists in one section, the view (the UI) exist in one section, and the controller (logic) exists in another section.\r\n\r\nWhat problems does this solve? Well, just as how having separated functions solve the problems of readability, modularity, and coupling, so does MVC. Say if you wanted to change a piece of code, you can tackle it in a smaller subset that is more or less isolated from the larger piece of code. This allows you to add, modify or remove code more effeciently and logically. It also helps in testing, since similar code is sectioned into groups, you may be able to have better coverage of your tests cases. Also very important is that you end up writing a lot less code.', '2014-09-25 22:30:16');
INSERT INTO `questions` (`id`, `name`, `text`, `answer`, `created`) VALUES (2, 'Unit Testing', 'What constitutes a good unit test?', '- Automatic : Invoking of tests as well as checking results for PASS/FAIL should be automatic\r\n\r\n- Thorough: Coverage; Although bugs tend to cluster around certain regions in the code, ensure that you test all key paths and scenarios.. Use tools if you must to know untested regions\r\n\r\n- Repeatable: Tests should produce the same results each time.. every time. Tests should not rely on uncontrollable params.\r\nIndependent: Very important.\r\n\r\n- Tests should test only one thing at a time. Multiple assertions are okay as long as they are all testing one feature/behavior. When a test fails, it should pinpoint the location of the problem.\r\n\r\n- Tests should not rely on each other - Isolated. No assumptions about order of test execution. Ensure \'clean slate\' before each test by using setup/teardown appropriately\r\n\r\n- Professional: In the long run you\'ll have as much test code as production (if not more), therefore follow the same standard of good-design for your test code. Well factored methods-classes with intention-revealing names, No duplication, tests with good names, etc.\r\n\r\n- Good tests also run Fast. any test that takes over half a second to run.. needs to be worked upon. The longer the test suite takes for a run.. the less frequently it will be run. The more changes the dev will try to sneak between runs.. if anything breaks.. it will take longer to figure out which change was the culprit.', '2014-09-25 22:30:37');
INSERT INTO `questions` (`id`, `name`, `text`, `answer`, `created`) VALUES (3, 'Roadblocks', 'You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?', '1. First, ask anyone that works with that function before to understand what it\'s for\r\n2. Setup and run a test myself to know the function flow\r\n3. wrote one draft to map the function and requirements\r\n4. graph function not yet and research information needed to build new function\r\n5. build project', '2014-09-25 22:32:41');
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
