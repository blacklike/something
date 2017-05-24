/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-23 20:16:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `teacher_id` char(10) NOT NULL,
  `commodity_id` char(10) NOT NULL,
  `commdity_name` varchar(255) NOT NULL,
  `shop_number` char(8) NOT NULL,
  `shop_sum` char(10) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `commdity_id` (`commodity_id`),
  KEY `commdity_name` (`commdity_name`),
  KEY `teacher_id` (`teacher_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------

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

-- ----------------------------
-- Table structure for tb_img
-- ----------------------------
DROP TABLE IF EXISTS `tb_img`;
CREATE TABLE `tb_img` (
  `img` varchar(500) NOT NULL,
  `name` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_img
-- ----------------------------

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

-- ----------------------------
-- Table structure for tb_shop
-- ----------------------------
DROP TABLE IF EXISTS `tb_shop`;
CREATE TABLE `tb_shop` (
  `A` int(100) NOT NULL AUTO_INCREMENT,
  `B` varchar(100) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` float(100,0) NOT NULL,
  `E` char(100) DEFAULT NULL,
  PRIMARY KEY (`A`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_shop
-- ----------------------------
INSERT INTO `tb_shop` VALUES ('1', '10KG古钱五常稻乡小镇清水香米', '包', '99', '1003010450');
INSERT INTO `tb_shop` VALUES ('2', '10KG北大荒五常稻花香米', '包', '150', '1003010449');
INSERT INTO `tb_shop` VALUES ('3', '10KG金龙鱼优质东北米', '包', '73', '1003010294');
INSERT INTO `tb_shop` VALUES ('4', '10KG福临门东北大米', '包', '73', '1003010164');
INSERT INTO `tb_shop` VALUES ('5', '5L金龙鱼特香纯正花生油', '壶', '110', '1001012004');
INSERT INTO `tb_shop` VALUES ('6', '5L多力葵花籽油', '壶', '85', '1001019011');
INSERT INTO `tb_shop` VALUES ('7', '5L金龙鱼葵花籽油', '壶', '80', '1001019005');
INSERT INTO `tb_shop` VALUES ('8', '5.436L鲁花压榨一级花生油', '壶', '160', '1001012025');
INSERT INTO `tb_shop` VALUES ('9', '1.6L金龙鱼山茶油', '瓶', '128', '1001020001');
INSERT INTO `tb_shop` VALUES ('10', '750ML*2瓶欧丽薇兰橄榄油', '盒', '238', '1001017086');
INSERT INTO `tb_shop` VALUES ('11', '750ML多力特级初榨橄榄油（优选）', '瓶', '89', '1001017074');
INSERT INTO `tb_shop` VALUES ('12', '5L多力黄金3益葵花籽油', '壶', '100', '1001019014');
INSERT INTO `tb_shop` VALUES ('13', '5L金龙鱼植物甾醇玉米油', '壶', '97', '1001018013');
INSERT INTO `tb_shop` VALUES ('14', '5L西王玉米胚芽油（甾醇）', '壶', '90', '1001018017');
INSERT INTO `tb_shop` VALUES ('15', '5L多力芥花油', '壶', '84', '1001021007');
INSERT INTO `tb_shop` VALUES ('16', '5L九三牌非转基因玉米油', '壶', '77', '1001018047');
INSERT INTO `tb_shop` VALUES ('17', '5L金龙鱼AE纯香菜籽油', '壶', '57', '1001014021');
INSERT INTO `tb_shop` VALUES ('18', '5L金龙鱼菜籽色拉油', '壶', '46', '1001014008');
INSERT INTO `tb_shop` VALUES ('19', '中华（硬）', '条', '450', '1081011078');
INSERT INTO `tb_shop` VALUES ('20', '利群（软长嘴）', '条', '360', '1081010009');
INSERT INTO `tb_shop` VALUES ('21', '长嘴利群', '条', '220', '1081011062');
INSERT INTO `tb_shop` VALUES ('22', '利群（软红长嘴）', '条', '220', '1081011089');
INSERT INTO `tb_shop` VALUES ('23', '500ML 52度新品五粮液', '瓶', '758', '1071010075');
INSERT INTO `tb_shop` VALUES ('24', '500ML 52度剑南春酒', '瓶', '410', '1071010006');
INSERT INTO `tb_shop` VALUES ('25', '480ML 52度洋河蓝色经典海之蓝', '瓶', '228', '1071010210');
INSERT INTO `tb_shop` VALUES ('26', '480ML 42度洋河蓝色经典海之蓝', '瓶', '208', '1071010208');
INSERT INTO `tb_shop` VALUES ('27', '500ML*6会稽山纯正五年绍兴酒', '箱', '112', '1074010354');
INSERT INTO `tb_shop` VALUES ('28', '500ML会稽山纯正三年陈', '箱', '106', '1074010189');
INSERT INTO `tb_shop` VALUES ('29', '750ML 11.5度威龙金版橡木桶干红葡萄酒', '箱', '528', '1070210313');
INSERT INTO `tb_shop` VALUES ('30', '750ML长城窖藏橡木桶干红葡萄酒', '箱', '408', '1070210348');
INSERT INTO `tb_shop` VALUES ('31', '750ML长城优级解百纳干红葡萄酒', '箱', '210', '1070210342');
INSERT INTO `tb_shop` VALUES ('32', '750ML王朝2000庄园干红', '箱', '187', '1070210107');
INSERT INTO `tb_shop` VALUES ('33', '250ML*12圣牧有机纯牛奶（环保）', '提', '78', '1050101081');
INSERT INTO `tb_shop` VALUES ('34', '205G*12伊利安慕希希腊酸奶', '提', '66', '1050103228');
INSERT INTO `tb_shop` VALUES ('35', '250ML*12包蒙牛特仑苏纯牛奶', '提', '65', '1050101038');
INSERT INTO `tb_shop` VALUES ('36', '79099水之密语凝润柔肤沐浴露600ML', '瓶', '62', '');
INSERT INTO `tb_shop` VALUES ('37', '600ML水之密语净澄水活洗发露（控油）', '瓶', '68', '');
INSERT INTO `tb_shop` VALUES ('38', '600ML水之密语净澄水活护发素', '瓶', '68', '');
INSERT INTO `tb_shop` VALUES ('39', 'V4028 180G维达蓝色经典卫生卷纸', '提', '33', '2321012239');
INSERT INTO `tb_shop` VALUES ('40', 'R120C10星之恋干湿两用120抽*10包抽抽纸', '提', '29', '2322011247');
INSERT INTO `tb_shop` VALUES ('41', '1.9L海天草菇老抽', '瓶', '26', '1151012085');
INSERT INTO `tb_shop` VALUES ('42', '1.9L海天金标生抽王', '瓶', '24', '1151012083');
INSERT INTO `tb_shop` VALUES ('43', '908G皇冠丹麦曲奇饼干罐装', '盒', '128', '1203011062');
INSERT INTO `tb_shop` VALUES ('44', '200G绿盛牛肉干礼盒', '盒', '78', '1172010202');
INSERT INTO `tb_shop` VALUES ('45', '1000G红飞（一级）新疆薄皮核桃', '包', '87', '1162092001');
INSERT INTO `tb_shop` VALUES ('46', '1000G特级新疆红枣', '袋', '70', '');
INSERT INTO `tb_shop` VALUES ('47', '1000G新疆枣夹核桃', '袋', '70', '');
INSERT INTO `tb_shop` VALUES ('48', '1000G一级新疆红枣', '袋', '40', '');
INSERT INTO `tb_shop` VALUES ('49', '1000g咸干花生', '箱', '22', '1*15');
INSERT INTO `tb_shop` VALUES ('50', '1203g北美风尚进口坚果', '箱', '120', '1*6');
INSERT INTO `tb_shop` VALUES ('51', '1768g北美领秀进口坚果', '箱', '180', '1*6');
INSERT INTO `tb_shop` VALUES ('52', '2033g北美尚品进口坚果', '箱', '270', '1*4');

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
