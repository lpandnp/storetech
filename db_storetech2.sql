/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : db_storetech

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-01-09 13:52:20
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_score
-- ----------------------------
INSERT INTO `tb_score` VALUES ('1', '1', '3', 'ดี', 'ปู', 'ใช้งาน', '2019-01-08 15:50:44');
INSERT INTO `tb_score` VALUES ('2', '2', '3', 'ดีมาก', 'pnatthaphon', 'ใช้งาน', '2019-01-08 21:33:51');
INSERT INTO `tb_score` VALUES ('3', '1', '5', 'dddddd', 'lookpoo', 'ใช้งาน', '2019-01-08 21:34:20');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_store
-- ----------------------------
INSERT INTO `tb_store` VALUES ('1', 'อมรแอร์', '84 ถนน รามคำแหง แขวงหัวหมาก เขต บางกะปิ กรุงเทพมหานคร 10240', '023143936', '08012019154703_p1.jpg', '13.750414, 100.608762', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.8678952649173!2d100.60821442912044!3d13.750411102066295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e2333dc0885%3A0xbf11b66d0b7944d6!2z4Lit4Lih4Lij4LmB4Lit4Lij4LmM!5e0!3m2!1sen!2sth!4v1546937915452\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'lp', '12345678', '2019-01-08 15:47:03', 'ใช้งาน');
INSERT INTO `tb_store` VALUES ('2', 'ProPit ศูนย์ซ่อมช่วงล่างรถยนต์    ', '1/40/5-6 ซ.งามวงศ์วาน23 บางเขน เมือง Chang Wat Nonthaburi 11000', '0841885855', '08012019170703_p1.jpg', '13.860479,100.5353608', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.4106425177238!2d100.53535682915816!3d13.86048099939232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDUxJzM3LjciTiAxMDDCsDMyJzA5LjMiRQ!5e0!3m2!1sen!2sth!4v1546938683977\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'np', '12345678', '2019-01-08 17:07:03', 'ใช้งาน');
INSERT INTO `tb_store` VALUES ('3', 'เพชรสยาม', 'ตำบลหัวหิน อำเภอ หัวหิน ประจวบคีรีขันธ์ 77110', '0863311284', '08012019170028_p1.jpg', '12.584302,99.9510728', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d973.4922225858646!2d99.95107282915707!3d12.584301999444438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDM1JzAzLjUiTiA5OcKwNTcnMDUuOCJF!5e0!3m2!1sen!2sth!4v1546941336806\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'nampaii', '12345678', '2019-01-08 17:00:28', 'ใช้งาน');
INSERT INTO `tb_store` VALUES ('4', 'Hyper Garage อู่ซ่อมรถ พระราม9', '16 ซอย 62, ถนน พระราม 9 ตัดใหม่ แขวง สวนหลวง เขต สวนหลวง กรุงเทพมหานคร 10250', '0840844020', '08012019171739_p1.jpg', '13.7400963,100.6338175', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6419279012816!2d100.63327223252993!3d13.740115613905012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61cf0aebe6c5%3A0xc607b1bd0fb3b2ea!2zSHlwZXIgR2FyYWdlIOC4reC4ueC5iOC4i-C5iOC4reC4oeC4o-C4liDguJ7guKPguLDguKPguLLguKE5!5e0!3m2!1sen!2sth!4v1546942640131\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'lookpoo', '12345678', '2019-01-08 17:17:39', 'ใช้งาน');
INSERT INTO `tb_store` VALUES ('5', 'ส.ไดนาโม', 'ถนนเพชรเกษม ตำบลหัวหิน อำเภอ หัวหิน ประจวบคีรีขันธ์ 77110', '032515085', '08012019172752_p1.png', '12.5780351,99.9520649', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3894.063947784402!2d99.95206490037442!3d12.578035096858676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fdaa53eb0159b3%3A0x57eea4b1b8ebfa71!2sSo+Dynamo!5e0!3m2!1sen!2sth!4v1546943061727\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'pnat', '12345678', '2019-01-08 17:27:52', 'ใช้งาน');

-- ----------------------------
-- Table structure for tb_storetype
-- ----------------------------
DROP TABLE IF EXISTS `tb_storetype`;
CREATE TABLE `tb_storetype` (
  `storetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `typedetail_id` int(11) NOT NULL,
  PRIMARY KEY (`storetype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_storetype
-- ----------------------------
INSERT INTO `tb_storetype` VALUES ('1', '1', '2');
INSERT INTO `tb_storetype` VALUES ('6', '2', '1');
INSERT INTO `tb_storetype` VALUES ('3', '3', '8');
INSERT INTO `tb_storetype` VALUES ('4', '4', '1');
INSERT INTO `tb_storetype` VALUES ('5', '5', '2');

-- ----------------------------
-- Table structure for tb_store_copy
-- ----------------------------
DROP TABLE IF EXISTS `tb_store_copy`;
CREATE TABLE `tb_store_copy` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_store_copy
-- ----------------------------

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
INSERT INTO `tb_type` VALUES ('1', 'รถยนต์', '08012019150215_p1.png');
INSERT INTO `tb_type` VALUES ('2', 'รถจักรยานยนต์', '08012019150202_p1.png');
INSERT INTO `tb_type` VALUES ('3', 'ไฟฟ้า', '08012019150537_p1.jpg');
INSERT INTO `tb_type` VALUES ('4', 'ประปา', '08012019150550_p1.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_typedetail
-- ----------------------------
INSERT INTO `tb_typedetail` VALUES ('1', '1', 'ซ่อมช่วงล่าง เบรค-คลัตช์ น้ำมันเครื่อง เกียร์', '08012019151305_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('2', '1', 'ซ่อมไดนาโมและชาร์จ ซ่อมแอร์รถ เปลี่ยนแบตเตอรี่ ', '08012019151327_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('3', '1', 'ซ่อมระบบหม้อน้ำรถยนต์ เครื่องยนต์', '08012019151351_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('4', '1', 'เคาะพ่นสี ทำสี', '08012019151439_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('5', '1', 'บริการล้าง อัด ฉีด', '08012019151507_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('6', '1', 'บริการรถลาก', '08012019151525_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('7', '2', 'ปะ เปลี่ยนยาง', '08012019151556_p1.jpg');
INSERT INTO `tb_typedetail` VALUES ('8', '1', 'ประดับยนต์', '08012019162524_p1.jpg');
