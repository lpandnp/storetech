/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : db_storetech

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-01-06 15:51:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_fullname` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_tel` varchar(10) DEFAULT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', '2', '2', '2', 'admin', 'admin');

-- ----------------------------
-- Table structure for tb_score
-- ----------------------------
DROP TABLE IF EXISTS `tb_score`;
CREATE TABLE `tb_score` (
  `score_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `score_rating` int(11) DEFAULT NULL,
  `score_detail` text,
  `score_by` varchar(150) DEFAULT NULL,
  `score_status` varchar(50) DEFAULT NULL,
  `score_date` datetime DEFAULT NULL,
  PRIMARY KEY (`score_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_score
-- ----------------------------
INSERT INTO `tb_score` VALUES ('2', '4', '5', 'hhhhhhhhhh', '4', 'ใช้งาน', '2019-01-05 16:27:38');

-- ----------------------------
-- Table structure for tb_store
-- ----------------------------
DROP TABLE IF EXISTS `tb_store`;
CREATE TABLE `tb_store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(50) DEFAULT NULL,
  `store_address` text,
  `store_tel` varchar(10) DEFAULT NULL,
  `store_picture` varchar(255) DEFAULT NULL,
  `store_gps` text,
  `store_map` text,
  `store_username` varchar(50) DEFAULT NULL,
  `store_password` varchar(50) DEFAULT NULL,
  `store_date` datetime DEFAULT NULL,
  `store_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_store
-- ----------------------------
INSERT INTO `tb_store` VALUES ('4', 'เพชรสยาม', 'ชะอำ เพชรบุรี', '0855264647', '_p1.png', '1', '', 'lp', '12345678', '2019-01-05 15:27:46', '1');
INSERT INTO `tb_store` VALUES ('3', '1', '1', '1', '1', '1', '', '1', '1', '2019-01-05 15:12:20', '1');
INSERT INTO `tb_store` VALUES ('5', 'เพชรสยาม', 'ชะอำ เพชรบุรี', '0958199384', '05012019152858_p1.png', '1', '', 'np', '12345678', '2019-01-05 15:28:58', '1');
INSERT INTO `tb_store` VALUES ('6', '1234', 'ชะอำ เพชรบุรี', '0958199384', '05012019161633_p1.jpg', '13.720666, 100.585318', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.9634357055805!2d100.58467702915806!3d13.727303299397708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e4db5ef0ca9%3A0x303d538b2ab4c14!2sConsulate+of+Jordan!5e0!3m2!1sen!2sth!4v1546763573499\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.963672514992!2d100.58500962307585!3d13.727245976305312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e4db5ef0ca9%3A0x303d538b2ab4c14!2sConsulate+of+Jordan!5e0!3m2!1sen!2sth!4v1546763643672\" width=\"300\" height=\"300\" frameborder=\"0\" style=\"border:0\" <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.963672514992!2d100.58500962307585!3d13.727245976305312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e4db5ef0ca9%3A0x303d538b2ab4c14!2sConsulate+of+Jordan!5e0!3m2!1sen!2sth!4v1546763643672\" width=\"200\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'lookpoo', '12345678', '2019-01-05 16:16:33', 'ใช้งาน');
INSERT INTO `tb_store` VALUES ('7', 'กลการ', 'pnat', '0958199384', null, '13.720666, 100.585318', 'allowfullscreen></iframe>', 'lookpoo', '', '2019-01-06 13:59:25', 'สมัครสมาชิก');
INSERT INTO `tb_store` VALUES ('8', 'เพชรสยาม', 'ชะอำ เพชรบุรี', '0808697348', null, null, null, 'NPP', '12345', '2019-01-06 14:01:48', 'สมัครสมาชิก');

-- ----------------------------
-- Table structure for tb_storetype
-- ----------------------------
DROP TABLE IF EXISTS `tb_storetype`;
CREATE TABLE `tb_storetype` (
  `storetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `typedetail_id` int(11) NOT NULL,
  PRIMARY KEY (`storetype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_storetype
-- ----------------------------
INSERT INTO `tb_storetype` VALUES ('2', '6', '3');
INSERT INTO `tb_storetype` VALUES ('3', '3', '3');
INSERT INTO `tb_storetype` VALUES ('4', '3', '3');

-- ----------------------------
-- Table structure for tb_type
-- ----------------------------
DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE `tb_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL,
  `type_picture` text,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_type
-- ----------------------------
INSERT INTO `tb_type` VALUES ('3', 'ช่างซ่อมรถ', '05012019153432_p1.png');
INSERT INTO `tb_type` VALUES ('4', 'ช่างซ่อมไฟฟ้า', '05012019164823_p1.jpg');

-- ----------------------------
-- Table structure for tb_typedetail
-- ----------------------------
DROP TABLE IF EXISTS `tb_typedetail`;
CREATE TABLE `tb_typedetail` (
  `typedetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `typedetail_name` varchar(50) DEFAULT NULL,
  `typedetail_picture` text,
  PRIMARY KEY (`typedetail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_typedetail
-- ----------------------------
INSERT INTO `tb_typedetail` VALUES ('4', '3', 'แอร์', '05012019170416_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('3', '4', 'ล้าง อัด ฉีด', '05012019153841_p1.jpg');
