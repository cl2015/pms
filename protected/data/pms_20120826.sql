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

 Date: 08/26/2012 11:28:50 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `committees`
-- ----------------------------
DROP TABLE IF EXISTS `committees`;
CREATE TABLE `committees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '名称',
  `gender` varchar(256) DEFAULT NULL COMMENT '名称',
  `date_of_bitrh` varchar(256) DEFAULT NULL COMMENT '分数',
  `educational_background` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL COMMENT '职称',
  `position` varchar(256) DEFAULT NULL COMMENT '职务',
  `specialty` varchar(256) DEFAULT NULL COMMENT '专业',
  `organization` varchar(256) DEFAULT NULL COMMENT '工作单位',
  `contact` varchar(256) DEFAULT NULL COMMENT '联系方式',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `conferences`
-- ----------------------------
DROP TABLE IF EXISTS `conferences`;
CREATE TABLE `conferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '名称',
  `organizer` varchar(256) DEFAULT NULL COMMENT '主办单位',
  `undertaker` varchar(256) DEFAULT NULL COMMENT '承办单位',
  `conference_time` varchar(256) DEFAULT NULL COMMENT '时间',
  `address` varchar(256) DEFAULT NULL,
  `member` varchar(256) DEFAULT NULL COMMENT '我方参会人员',
  `category` varchar(256) DEFAULT NULL COMMENT '类别',
  `detail` varchar(256) DEFAULT NULL COMMENT '详情',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `conferences`
-- ----------------------------
BEGIN;
INSERT INTO `conferences` VALUES ('3', '学术会议', '主办单位', '承办单位', '时间', '地点', '我方参会人员 ', '国内', '详情', '1', '2012-08-26 09:09:35', '1', '2012-08-26 09:09:35');
COMMIT;

-- ----------------------------
--  Table structure for `equipments`
-- ----------------------------
DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '名称',
  `price` varchar(256) DEFAULT NULL COMMENT '价格',
  `enable_time` varchar(256) DEFAULT NULL COMMENT '启用时间',
  `current_status` varchar(256) DEFAULT NULL COMMENT '目前状态',
  `performance` varchar(256) DEFAULT NULL COMMENT '主要性能指标',
  `level` varchar(256) DEFAULT NULL COMMENT '设备水平',
  `effect` varchar(256) DEFAULT NULL COMMENT '发挥作用',
  `borrow` varchar(256) DEFAULT NULL COMMENT '对外借用情况',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `honors`
-- ----------------------------
DROP TABLE IF EXISTS `honors`;
CREATE TABLE `honors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(512) DEFAULT NULL,
  `level` varchar(64) DEFAULT NULL,
  `winner` varchar(64) DEFAULT NULL,
  `bonus_time` varchar(64) DEFAULT NULL,
  `certificate_location` varchar(64) DEFAULT NULL,
  `detail` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `honors`
-- ----------------------------
BEGIN;
INSERT INTO `honors` VALUES ('1', '奖励1', '级别1', '获奖人1', '2012-09-10', '北京', null, '1', '2012-08-24 17:43:57', '1', '2012-08-24 17:43:57');
COMMIT;

-- ----------------------------
--  Table structure for `laboratories`
-- ----------------------------
DROP TABLE IF EXISTS `laboratories`;
CREATE TABLE `laboratories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '实验室名称',
  `director` varchar(32) DEFAULT NULL COMMENT '主任姓名',
  `dependent` varchar(256) DEFAULT NULL COMMENT '依托单位',
  `phone` varchar(256) DEFAULT NULL,
  `copyright` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `laboratories`
-- ----------------------------
BEGIN;
INSERT INTO `laboratories` VALUES ('1', '第一个实验室', '李贺', '普瑞明特', '62149482', 'cranelee@gmail.com', '1', '2012-08-20 21:58:22', '1', '2012-08-20 21:58:22');
COMMIT;

-- ----------------------------
--  Table structure for `lecture_categories`
-- ----------------------------
DROP TABLE IF EXISTS `lecture_categories`;
CREATE TABLE `lecture_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255',
  `name` varchar(512) DEFAULT NULL,
  `score` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `lecture_categories`
-- ----------------------------
BEGIN;
INSERT INTO `lecture_categories` VALUES ('1', '255', '1', '1', '1', '2012-08-26 09:34:13', '1', '2012-08-26 09:34:13'), ('2', '1', '2', '2', '1', '2012-08-26 09:34:50', '1', '2012-08-26 09:34:50');
COMMIT;

-- ----------------------------
--  Table structure for `lectures`
-- ----------------------------
DROP TABLE IF EXISTS `lectures`;
CREATE TABLE `lectures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(512) DEFAULT NULL,
  `holding_time` varchar(64) DEFAULT NULL,
  `speaker` varchar(64) DEFAULT NULL,
  `organization` varchar(128) DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `effect` varchar(128) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `lectures`
-- ----------------------------
BEGIN;
INSERT INTO `lectures` VALUES ('1', '讲座1', '2012-9-19', '金', '所在单位', '类别', '作用', '1', '2012-08-24 17:49:16', '1', '2012-08-24 17:49:16');
COMMIT;

-- ----------------------------
--  Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255',
  `research_direction` varchar(256) DEFAULT NULL,
  `research_unit` varchar(256) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `english_name` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(64) DEFAULT NULL,
  `gender` varchar(64) DEFAULT NULL,
  `qualification` varchar(64) DEFAULT NULL,
  `degree` varchar(64) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL,
  `area_of_expertise` varchar(64) DEFAULT NULL,
  `phd_mentor` varchar(256) DEFAULT NULL,
  `master_mentor` varchar(256) DEFAULT NULL,
  `enter_date` varchar(64) DEFAULT NULL,
  `out_date` varchar(64) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `members`
-- ----------------------------
BEGIN;
INSERT INTO `members` VALUES ('1', '255', '研究方向1', '研究单元1', '人员1', 'renyuan1', '19880910', '男', '博士', '博士', '博士', '导弹发射', '我的博导', '', '2010-09-10', '2012-08-08', '1', '2012-08-24 17:57:30', '1', '2012-08-24 17:57:30');
COMMIT;

-- ----------------------------
--  Table structure for `paper_categories`
-- ----------------------------
DROP TABLE IF EXISTS `paper_categories`;
CREATE TABLE `paper_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  `name` varchar(256) DEFAULT NULL COMMENT '论著类别名称',
  `score` varchar(256) DEFAULT NULL COMMENT '分数',
  `remark` text COMMENT '备注',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `paper_categories`
-- ----------------------------
BEGIN;
INSERT INTO `paper_categories` VALUES ('1', '255', '第一个论著类别', '100', '这是第一个论著类别，排序很低只有255，分值是100分。', '1', '2012-08-20 22:10:50', '1', '2012-08-20 22:10:50'), ('2', '1', '论著类别2', '2', '2', '1', '2012-08-22 17:32:33', '1', '2012-08-22 17:32:33');
COMMIT;

-- ----------------------------
--  Table structure for `papers`
-- ----------------------------
DROP TABLE IF EXISTS `papers`;
CREATE TABLE `papers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(512) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `post_time` varchar(64) DEFAULT NULL,
  `periodical_info` varchar(64) DEFAULT NULL,
  `paper_category` varchar(256) DEFAULT NULL,
  `research_direction` varchar(256) DEFAULT NULL,
  `detail` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `papers`
-- ----------------------------
BEGIN;
INSERT INTO `papers` VALUES ('1', '1', '2', '22', '2', '论著类别2', '研究方向1', '111', '1', '2012-08-26 09:54:38', '1', '2012-08-26 09:54:38');
COMMIT;

-- ----------------------------
--  Table structure for `patents`
-- ----------------------------
DROP TABLE IF EXISTS `patents`;
CREATE TABLE `patents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(512) DEFAULT NULL,
  `inventor` varchar(128) DEFAULT NULL,
  `accept_time` varchar(64) DEFAULT NULL,
  `authorized_time` varchar(64) DEFAULT NULL,
  `is_sale` varchar(64) DEFAULT NULL,
  `detail` varchar(256) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
INSERT INTO `projects` VALUES ('1', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, '', '0', '2012-08-16 17:12:01', '1', '2012-08-20 23:47:49'), ('2', '25', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, '', '1', '2012-08-16 17:15:59', '1', '2012-08-22 17:38:23'), ('3', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, '', '1', '2012-08-22 17:47:43', '1', '2012-08-22 17:47:43'), ('4', '255', '第一个课题类别', '', '', '', '', '', null, null, null, null, null, null, null, '', '1', '2012-08-22 17:47:50', '1', '2012-08-22 17:47:50'), ('5', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('6', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('7', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('8', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('9', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('10', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('11', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('12', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('13', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('14', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('15', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('16', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('17', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('18', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('19', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('20', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('21', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('22', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('23', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('24', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('25', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('26', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('27', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('28', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('29', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null), ('30', '255', '第一个课题类别', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `research_directions`
-- ----------------------------
DROP TABLE IF EXISTS `research_directions`;
CREATE TABLE `research_directions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  `name` varchar(256) DEFAULT NULL COMMENT '研究方向名称',
  `code` varchar(256) DEFAULT NULL COMMENT '代号',
  `academic_leader` varchar(256) DEFAULT NULL COMMENT '学术 负责人',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `research_directions`
-- ----------------------------
BEGIN;
INSERT INTO `research_directions` VALUES ('1', '255', '研究方向1', '研究方向代号1', '学术带头人1', '1', '2012-08-22 17:05:25', '1', '2012-08-22 17:05:25');
COMMIT;

-- ----------------------------
--  Table structure for `research_units`
-- ----------------------------
DROP TABLE IF EXISTS `research_units`;
CREATE TABLE `research_units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  `name` varchar(256) DEFAULT NULL COMMENT '研究单元名称',
  `code` varchar(256) DEFAULT NULL COMMENT '研究单元代号',
  `owner` varchar(256) DEFAULT NULL COMMENT '研究单元负责人',
  `director` varchar(32) DEFAULT NULL COMMENT '主任姓名',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `research_units`
-- ----------------------------
BEGIN;
INSERT INTO `research_units` VALUES ('1', '255', '研究单元1', '代号单元1', '负责人1', null, '1', '2012-08-24 17:55:59', '1', '2012-08-24 17:55:59');
COMMIT;

-- ----------------------------
--  Table structure for `standards`
-- ----------------------------
DROP TABLE IF EXISTS `standards`;
CREATE TABLE `standards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `code` varchar(256) DEFAULT NULL,
  `completed_by` varchar(256) DEFAULT NULL,
  `publish_time` varchar(256) DEFAULT NULL,
  `category` varchar(64) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `standards`
-- ----------------------------
BEGIN;
INSERT INTO `standards` VALUES ('1', '标准1', '标准号1', '完成单位1', '2012-01-10', '国际标准', '1', '2012-08-26 11:27:31', '1', '2012-08-26 11:27:31');
COMMIT;

-- ----------------------------
--  Table structure for `subject_categories`
-- ----------------------------
DROP TABLE IF EXISTS `subject_categories`;
CREATE TABLE `subject_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  `name` varchar(256) DEFAULT NULL COMMENT '课题类别名称',
  `unit_in_charge` varchar(256) DEFAULT NULL COMMENT '主管单位',
  `score` varchar(256) DEFAULT NULL COMMENT '分数',
  `remark` text COMMENT '备注',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `subject_categories`
-- ----------------------------
BEGIN;
INSERT INTO `subject_categories` VALUES ('1', '255', '第一个课题类别', '第一个主管单位', '98', '这是第一个课题类别', '1', '2012-08-20 23:42:52', '1', '2012-08-20 23:42:52');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '用户名称',
  `password` varchar(128) DEFAULT NULL COMMENT '用户密码',
  `role` varchar(256) DEFAULT NULL COMMENT '身份',
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'admin', 'admin', 'admin', '1', '2012-08-16 16:59:49', '1', '2012-08-16 16:59:51'), ('2', 'editor', 'editor', 'editor', '1', '2012-08-20 23:53:58', '1', '2012-08-20 23:53:58'), ('3', 'user', 'user', 'user', '1', '2012-08-21 00:01:43', '1', '2012-08-21 00:01:43');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
