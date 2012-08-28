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

 Date: 08/28/2012 19:27:20 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `projects`
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255',
  `category` varchar(256) DEFAULT NULL COMMENT '类别',
  `name` varchar(256) DEFAULT NULL COMMENT '用户名称',
  `owner` varchar(128) DEFAULT NULL COMMENT '负责人',
  `members` varchar(512) DEFAULT NULL COMMENT '参加人',
  `begin_date` varchar(64) DEFAULT NULL,
  `end_date` varchar(64) DEFAULT NULL,
  `total_funding` double DEFAULT NULL,
  `first_funding` double DEFAULT NULL,
  `second_funding` double DEFAULT NULL,
  `third_funding` double DEFAULT NULL,
  `forth_funding` double DEFAULT NULL,
  `fif_funding` double DEFAULT NULL,
  `funding_2014` double DEFAULT NULL,
  `funding_2015` double DEFAULT NULL,
  `funding_2016` double DEFAULT NULL,
  `equipment_funding` double DEFAULT NULL,
  `research_direction` varchar(256) DEFAULT NULL COMMENT '研究方向',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `projects`
-- ----------------------------
BEGIN;
INSERT INTO `projects` VALUES ('1', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, '', '0', '2012-08-16 17:12:01', '1', '2012-08-20 23:47:49'), ('2', '25', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, '', '1', '2012-08-16 17:15:59', '1', '2012-08-22 17:38:23'), ('3', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, '', '1', '2012-08-22 17:47:43', '1', '2012-08-22 17:47:43'), ('4', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, '', '1', '2012-08-22 17:47:50', '1', '2012-08-22 17:47:50'), ('5', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('6', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('7', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('8', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('9', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('10', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('11', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('12', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('13', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('14', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('15', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('16', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('17', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('18', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('19', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('20', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('21', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('22', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('23', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('24', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('25', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('26', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('27', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('28', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('29', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('30', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
