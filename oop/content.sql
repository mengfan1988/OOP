/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : pdo

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-08-28 20:02:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `cltime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', '是个打工的双方各公司的公司的', 'mf', '2016-08-17 20:21:30');
INSERT INTO `content` VALUES ('2', '的工地上干豆腐干豆腐干豆腐干', 'lll', '2016-08-17 20:39:56');
INSERT INTO `content` VALUES ('3', '是打算是发顺丰', '艾弗森', '2016-08-28 15:35:41');
INSERT INTO `content` VALUES ('4', '的方式发送到v', '范德萨发', '2016-08-28 15:35:51');
INSERT INTO `content` VALUES ('5', '收到发送到', '的范德萨', '2016-08-28 15:36:00');
