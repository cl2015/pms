/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50527
 Source Host           : localhost
 Source Database       : pms

 Target Server Type    : MySQL
 Target Server Version : 50527
 File Encoding         : utf-8

 Date: 09/24/2012 18:50:21 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `copyright` varchar(255) DEFAULT NULL,
  `pagesize` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `settings`
-- ----------------------------
BEGIN;
INSERT INTO `settings` VALUES ('1', '人因工程重点实验室1', '2', '实验室运行数据管理系统1', '/images/welcome.jpg', '1', '2012-09-24 11:19:16', '1', '2012-09-24 11:29:45');
COMMIT;
ALTER TABLE `pms`.`committees` ADD COLUMN `sort` tinyint(4) UNSIGNED DEFAULT '255' AFTER `name`;
SET FOREIGN_KEY_CHECKS = 1;
