/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-23 20:16:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_shopping
-- ----------------------------
DROP TABLE IF EXISTS `tb_shopping`;
CREATE TABLE `tb_shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `foodprice` varchar(100) NOT NULL,
  `isbuy` varchar(100) DEFAULT NULL,
  `ismiss` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_shopping
-- ----------------------------
INSERT INTO `tb_shopping` VALUES ('13', 'wer', 'ye', 'asda', '10.8', 'del', 'miss');
INSERT INTO `tb_shopping` VALUES ('14', 'wer', 'ye', 'asda', '10.8', 'del', 'buy');
INSERT INTO `tb_shopping` VALUES ('15', 'wer', '123', '盐水鸭', '10', 'del', null);
INSERT INTO `tb_shopping` VALUES ('16', 'wer', '123', '盐水鸭', '10', 'del', 'miss');
INSERT INTO `tb_shopping` VALUES ('17', 'wer', '123', '盐水鸭', '10', 'buy', 'miss');
