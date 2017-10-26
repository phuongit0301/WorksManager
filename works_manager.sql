/*
 Navicat Premium Data Transfer

 Source Server         : Works
 Source Server Type    : MySQL
 Source Server Version : 100209
 Source Host           : localhost:3306
 Source Schema         : works_manager

 Target Server Type    : MySQL
 Target Server Version : 100209
 File Encoding         : 65001

 Date: 27/10/2017 02:09:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for works
-- ----------------------------
DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_date` varchar(48) NOT NULL,
  `end_date` varchar(48) NOT NULL,
  `all_day` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of works
-- ----------------------------
BEGIN;
INSERT INTO `works` VALUES (1, 'test', '2017-10-26T05:00:00', '2017-10-26T06:30:00', '0');
INSERT INTO `works` VALUES (2, 'test', '2017-10-26T07:00:00', '2017-10-26T07:30:00', '0');
INSERT INTO `works` VALUES (3, 'test', '2017-10-26T08:00:00', '2017-10-26T08:30:00', '0');
INSERT INTO `works` VALUES (4, 'test', '2017-10-26T13:00:00', '2017-10-26T13:30:00', '0');
INSERT INTO `works` VALUES (5, 'test', '2017-10-27T05:00:00', '2017-10-27T06:30:00', '0');
INSERT INTO `works` VALUES (6, 'test', '2017-10-27T07:00:00', '2017-10-27T07:30:00', '0');
INSERT INTO `works` VALUES (7, 'test', '2017-10-27T08:00:00', '2017-10-27T08:30:00', '0');
INSERT INTO `works` VALUES (8, 'test', '2017-10-27T13:00:00', '2017-10-27T13:30:00', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
