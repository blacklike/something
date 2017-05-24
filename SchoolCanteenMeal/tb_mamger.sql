/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-23 20:16:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_mamger
-- ----------------------------
DROP TABLE IF EXISTS `tb_mamger`;
CREATE TABLE `tb_mamger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `fuze` varchar(100) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `isUser` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_mamger
-- ----------------------------
INSERT INTO `tb_mamger` VALUES ('1', '123', '123', null, null, '', null, 'admin');
INSERT INTO `tb_mamger` VALUES ('2', 'wer', 'wer', null, null, '', null, 'user');
INSERT INTO `tb_mamger` VALUES ('3', 'wang', 'wang', null, null, '234@qq.com', null, 'user');
INSERT INTO `tb_mamger` VALUES ('4', 'ye', 'ye', 'ye', '', 'yeye@163.com', '', 'admin');
