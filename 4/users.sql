/*
Navicat MySQL Data Transfer

Source Server         : bendi
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-03-21 19:38:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(255) DEFAULT '0' COMMENT '得分',
  `age` int(11) DEFAULT '0' COMMENT '年龄',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '姓名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '88', '24', 'zhangsan');
INSERT INTO `users` VALUES ('2', '90', '32', 'lisi');
INSERT INTO `users` VALUES ('3', '90', '32', 'wangwu');
INSERT INTO `users` VALUES ('4', '100', '28', 'zhaoliu');
