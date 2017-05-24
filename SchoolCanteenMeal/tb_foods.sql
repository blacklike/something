/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-23 20:16:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_foods
-- ----------------------------
DROP TABLE IF EXISTS `tb_foods`;
CREATE TABLE `tb_foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `foodprice` char(100) NOT NULL,
  `info` varchar(100) DEFAULT NULL,
  `isOnline` varchar(100) NOT NULL,
  `dowmtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_foods
-- ----------------------------
INSERT INTO `tb_foods` VALUES ('1', 'ye', 'asda', '10.8', 'asd', 'online', '2017-05-23 12:29:52');
INSERT INTO `tb_foods` VALUES ('2', '123', '盐水鸭', '10', '好吃', 'online', '2017-05-23 13:47:22');
