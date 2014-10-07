/*
MySQL Data Transfer
Source Host: localhost
Source Database: interview
Target Host: localhost
Target Database: interview
Date: 10/7/2014 3:36:42 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for questions
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'MVC Principles', 'Explain MVC principles, and why they are important?', '1', '2014-09-25 22:30:16');
INSERT INTO `questions` VALUES ('2', 'Unit Testing', 'What constitutes a good unit test?', '1', '2014-09-25 22:30:37');
INSERT INTO `questions` VALUES ('3', 'Roadblocks', 'You are required to work with a huge chunk of code and you have no idea how it works and there’s no documentation and no tests. What steps do you take?', '1', '2014-09-25 22:32:41');
