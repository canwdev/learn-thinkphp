# Host: 127.0.0.1  (Version 5.5.53)
# Date: 2018-09-11 22:20:28
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tp_admin"
#

DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '管理员名称',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员密码（MD5）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tp_admin"
#

/*!40000 ALTER TABLE `tp_admin` DISABLE KEYS */;
INSERT INTO `tp_admin` VALUES (1,'aaa','bbb'),(2,'aaa','bbb'),(3,'2','3');
/*!40000 ALTER TABLE `tp_admin` ENABLE KEYS */;
