# Host: localhost  (Version 5.5.53)
# Date: 2018-09-13 16:25:46
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tp_admin"
#

DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `name` varchar(30) DEFAULT NULL COMMENT '管理员名称',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码（MD5）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "tp_admin"
#

/*!40000 ALTER TABLE `tp_admin` DISABLE KEYS */;
INSERT INTO `tp_admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `tp_admin` ENABLE KEYS */;
