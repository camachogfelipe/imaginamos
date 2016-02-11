/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : adom

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-09-09 19:05:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `core_domains`
-- ----------------------------
DROP TABLE IF EXISTS `core_domains`;
CREATE TABLE `core_domains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(100) NOT NULL,
  `site_id` int(11) NOT NULL,
  `type` enum('park','redirect') NOT NULL DEFAULT 'park',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`domain`),
  KEY `domain` (`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of core_domains
-- ----------------------------

-- ----------------------------
-- Table structure for `core_settings`
-- ----------------------------
DROP TABLE IF EXISTS `core_settings`;
CREATE TABLE `core_settings` (
  `slug` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `default` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`slug`),
  UNIQUE KEY `unique - slug` (`slug`),
  KEY `index - slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Stores settings for the multi-site interface';

-- ----------------------------
-- Records of core_settings
-- ----------------------------
INSERT INTO `core_settings` VALUES ('date_format', 'g:ia -- m/d/y', 'g:ia -- m/d/y');
INSERT INTO `core_settings` VALUES ('lang_direction', 'ltr', 'ltr');
INSERT INTO `core_settings` VALUES ('status_message', 'This site has been disabled by a super-administrator.', 'This site has been disabled by a super-administrator.');

-- ----------------------------
-- Table structure for `core_sites`
-- ----------------------------
DROP TABLE IF EXISTS `core_sites`;
CREATE TABLE `core_sites` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ref` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` int(11) NOT NULL DEFAULT '0',
  `updated_on` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique ref` (`ref`),
  UNIQUE KEY `Unique domain` (`domain`),
  KEY `ref` (`ref`),
  KEY `domain` (`domain`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of core_sites
-- ----------------------------
INSERT INTO `core_sites` VALUES ('1', 'Default Site', 'default', 'mts.local', '1', '1376505779', '0');
INSERT INTO `core_sites` VALUES ('2', 'Intranet', 'intranet', 'intranet.mts.local', '1', '1376523903', '0');

-- ----------------------------
-- Table structure for `core_users`
-- ----------------------------
DROP TABLE IF EXISTS `core_users`;
CREATE TABLE `core_users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `salt` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `group_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `activation_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Super User Information';

-- ----------------------------
-- Records of core_users
-- ----------------------------
INSERT INTO `core_users` VALUES ('1', 'rigo.castro@imaginamos.co', '8b7cad19cb4dcde69c963c1ce9322212f22c435c', '0f32b', '1', '', '1', '', '1376505778', '1376523842', 'rigobcastro', null, 'a26937b7e7adc2071f3ec06eec6b8016889717c5');

-- ----------------------------
-- Table structure for `default_admin_building`
-- ----------------------------
DROP TABLE IF EXISTS `default_admin_building`;
CREATE TABLE `default_admin_building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_admin_building
-- ----------------------------
INSERT INTO `default_admin_building` VALUES ('1', '3', '3');

-- ----------------------------
-- Table structure for `default_areas`
-- ----------------------------
DROP TABLE IF EXISTS `default_areas`;
CREATE TABLE `default_areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_areas
-- ----------------------------
INSERT INTO `default_areas` VALUES ('1', 'asasd', 'asasd');

-- ----------------------------
-- Table structure for `default_areas_users`
-- ----------------------------
DROP TABLE IF EXISTS `default_areas_users`;
CREATE TABLE `default_areas_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_areas_users
-- ----------------------------

-- ----------------------------
-- Table structure for `default_banner`
-- ----------------------------
DROP TABLE IF EXISTS `default_banner`;
CREATE TABLE `default_banner` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_banner
-- ----------------------------
INSERT INTO `default_banner` VALUES ('1', '2013-08-23 21:32:04', '2013-09-04 23:58:04', '2', '1', 'LA RLLK', 'DISCO COMPLETO', 'bd2c22d9c307f0d', 'http://localhost/mts/requirements', '1');
INSERT INTO `default_banner` VALUES ('2', '2013-08-23 21:44:13', '2013-09-04 23:57:20', '2', '2', 'asd', 'asdasd', 'f3c44f44a264a08', 'http://www.google.com.co/', '1');

-- ----------------------------
-- Table structure for `default_blog`
-- ----------------------------
DROP TABLE IF EXISTS `default_blog`;
CREATE TABLE `default_blog` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `intro` longtext COLLATE utf8_unicode_ci,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `parsed` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author_id` int(11) NOT NULL DEFAULT '0',
  `created_on` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL DEFAULT '0',
  `comments_enabled` enum('no','1 day','1 week','2 weeks','1 month','3 months','always') COLLATE utf8_unicode_ci NOT NULL DEFAULT '3 months',
  `status` enum('draft','live') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `type` set('html','markdown','wysiwyg-advanced','wysiwyg-simple') COLLATE utf8_unicode_ci NOT NULL,
  `preview_hash` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_blog
-- ----------------------------
INSERT INTO `default_blog` VALUES ('1', '2013-08-29 21:14:00', '2013-08-29 21:14:00', '2', '1', 'Este es el intro de la nocticia', 'Mi noticia', 'mi-noticia', '0', 'esdta es la noticia completa', '', '', '2', '1377803640', '1377803640', '3 months', 'live', 'wysiwyg-advanced', '', '3a49a2d9dd1200d');
INSERT INTO `default_blog` VALUES ('2', '2013-08-29 22:31:00', '2013-08-29 22:31:00', '2', '2', 'El into de la noticias es este&nbsp;<span style=\"font-size: 13px;\">El into de la noticias es este&nbsp;El into de la noticias es este&nbsp;El into de la noticias es este&nbsp;El into de la noticias es este</span>', 'Otra noticias muy importante', 'otra-noticias-muy-importante', '0', 'El contenido total de la noticia', '', '', '2', '1377808260', '1377808260', '3 months', 'live', 'wysiwyg-advanced', '', 'ec7c64d1853aef8');
INSERT INTO `default_blog` VALUES ('3', '2013-08-30 19:23:00', '2013-08-30 19:23:00', '2', '3', '<span style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;\">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad&nbsp;</span>', 'Ota noticia', 'ota-noticia', '0', '<span style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;\">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>', '', '', '2', '1377883380', '1377883380', '3 months', 'live', 'wysiwyg-advanced', '', '69b50676f93c1e9');
INSERT INTO `default_blog` VALUES ('4', '2013-08-30 19:30:00', '2013-08-30 19:30:00', '2', '4', '<span style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te&nbsp;</span>', 'Ota noticia mas', 'ota-noticia-mas', '0', '<span style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>', '', '', '2', '1377883800', '1377883800', '3 months', 'live', 'wysiwyg-advanced', '', 'bad859c9bd3d3b5');
INSERT INTO `default_blog` VALUES ('5', '2013-09-04 23:22:00', null, '2', '5', 'intro', 'Don oscar', 'don-oscardc', '0', 'Esta es la notcia&nbsp;', '', '', '2', '1378329720', '0', '3 months', 'live', 'wysiwyg-advanced', '', '4bd1cb901f11f70');

-- ----------------------------
-- Table structure for `default_blog_categories`
-- ----------------------------
DROP TABLE IF EXISTS `default_blog_categories`;
CREATE TABLE `default_blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_slug` (`slug`),
  UNIQUE KEY `unique_title` (`title`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_blog_categories
-- ----------------------------

-- ----------------------------
-- Table structure for `default_buildings`
-- ----------------------------
DROP TABLE IF EXISTS `default_buildings`;
CREATE TABLE `default_buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_buildings
-- ----------------------------
INSERT INTO `default_buildings` VALUES ('1', '1', 'edificio', 'edificio');
INSERT INTO `default_buildings` VALUES ('2', '2', 'Lima Edificio', 'lima_edificio');
INSERT INTO `default_buildings` VALUES ('3', '1', 'edificio 2', 'edificio_2');

-- ----------------------------
-- Table structure for `default_charges`
-- ----------------------------
DROP TABLE IF EXISTS `default_charges`;
CREATE TABLE `default_charges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_charges
-- ----------------------------

-- ----------------------------
-- Table structure for `default_cities`
-- ----------------------------
DROP TABLE IF EXISTS `default_cities`;
CREATE TABLE `default_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_cities
-- ----------------------------
INSERT INTO `default_cities` VALUES ('1', '1', 'Bogotá D.C.', 'bogota');
INSERT INTO `default_cities` VALUES ('2', '2', 'Lima', 'lima');

-- ----------------------------
-- Table structure for `default_ci_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `default_ci_sessions`;
CREATE TABLE `default_ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_ci_sessions
-- ----------------------------
INSERT INTO `default_ci_sessions` VALUES ('e228cfcb4a7bbda34a71cc7af94f08e3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', '1376523809', '');
INSERT INTO `default_ci_sessions` VALUES ('8554a462cb43cc2d8781787dc11e723d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', '1376593147', '');
INSERT INTO `default_ci_sessions` VALUES ('89be7e85009ab785c5cd54a8bbcd4378', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', '1377082523', 'a:1:{s:14:\"admin_redirect\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('d5d2b0729e6258b7ef0ee13c2eec3e1e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', '1377000156', '');
INSERT INTO `default_ci_sessions` VALUES ('78d291becb573ff0af8490cd6fdea774', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284978', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('e39346ae74aaf3133283327fab451fe2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377279140', '');
INSERT INTO `default_ci_sessions` VALUES ('278298b1b0d4e53465b5d3d8063f51cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377279231', '');
INSERT INTO `default_ci_sessions` VALUES ('b787852dd37c43097968c00b09ca1dbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377295177', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('a6ce2c02425f65eeaf6c97b7eb2e6c39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284956', '');
INSERT INTO `default_ci_sessions` VALUES ('398c756b866c33e00b4ea4fa0e1901cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284959', '');
INSERT INTO `default_ci_sessions` VALUES ('d6de5dafcdc805ce48d92690ffd4b630', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284959', '');
INSERT INTO `default_ci_sessions` VALUES ('90d22401b7a189f202f25c0d690a5228', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284959', '');
INSERT INTO `default_ci_sessions` VALUES ('8429d975abf6f8c7e623537452c957e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284960', '');
INSERT INTO `default_ci_sessions` VALUES ('8aa5dc5b5216b4736e2e907ba3a4a842', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284960', '');
INSERT INTO `default_ci_sessions` VALUES ('335d8cccc32638dfca69bb1610786bb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284960', '');
INSERT INTO `default_ci_sessions` VALUES ('2e714a2ff7f10e68206bb99e1ee1d73f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377284960', '');
INSERT INTO `default_ci_sessions` VALUES ('9d9856b95a0a9d150b9f4d6f90d76b43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377286169', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('87bed8a044ca05d34252db0a36afed58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377285896', '');
INSERT INTO `default_ci_sessions` VALUES ('4cf8987d8df2ae4caf5a4e29c4f79261', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377286836', '');
INSERT INTO `default_ci_sessions` VALUES ('cd050cd25342caaf728262ce2f5fe20d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287131', '');
INSERT INTO `default_ci_sessions` VALUES ('5c42cd47f791bb8147c4e9267b306007', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287292', '');
INSERT INTO `default_ci_sessions` VALUES ('5c063bbc7dada5eb43d52fb15edbf64f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287435', '');
INSERT INTO `default_ci_sessions` VALUES ('aa94e402b03cf91707b6ce955c332a75', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287472', '');
INSERT INTO `default_ci_sessions` VALUES ('4582075bd16601e533f84699141883b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287529', '');
INSERT INTO `default_ci_sessions` VALUES ('a593ef82afc6a1823d391d8fcba02786', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287545', '');
INSERT INTO `default_ci_sessions` VALUES ('f6ac6d700494b12055fc1cd696f9bf05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287564', '');
INSERT INTO `default_ci_sessions` VALUES ('87d7cb62e9e0e53d6009bed9c931763f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287566', '');
INSERT INTO `default_ci_sessions` VALUES ('649185d8fb8057b40af460c01644674a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287607', '');
INSERT INTO `default_ci_sessions` VALUES ('4e2681874c074c2a7c40b94210178cbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287611', '');
INSERT INTO `default_ci_sessions` VALUES ('45e996452288ddec32fb69ec55c62320', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287619', '');
INSERT INTO `default_ci_sessions` VALUES ('1b5e7c98635b414a42eae26fbb42bf42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287621', '');
INSERT INTO `default_ci_sessions` VALUES ('e6f0e91c7ac2e78e32551836d5aaa9e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287625', '');
INSERT INTO `default_ci_sessions` VALUES ('53215c0191c1aeea37e5273d3a1b0aa1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287627', '');
INSERT INTO `default_ci_sessions` VALUES ('d552fba9b30461d4002957074a73f977', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287859', '');
INSERT INTO `default_ci_sessions` VALUES ('b14ef76361c0ec3709053dbc3ebd44db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377287985', '');
INSERT INTO `default_ci_sessions` VALUES ('e534145d1f7eda2688319ed09bc16953', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288029', '');
INSERT INTO `default_ci_sessions` VALUES ('60cd1cd7ff4ccf94eef0a8677462c0fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288160', '');
INSERT INTO `default_ci_sessions` VALUES ('664a33c11178f2d4792c73a7629ccde6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288208', '');
INSERT INTO `default_ci_sessions` VALUES ('a37184114f6a1513b21ff94732e753c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288258', '');
INSERT INTO `default_ci_sessions` VALUES ('86103f21fc88faad25abc8b93afaa55b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288355', '');
INSERT INTO `default_ci_sessions` VALUES ('e29f3c2971ae3d0a9966afcd7042754f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288357', '');
INSERT INTO `default_ci_sessions` VALUES ('7b7b11fc14df7d50ab9f4f02667f03a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288359', '');
INSERT INTO `default_ci_sessions` VALUES ('377145a11deb371cb59d67bfd8e9dc06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288361', '');
INSERT INTO `default_ci_sessions` VALUES ('c5d33aa533ecbf425cc3347456c47f07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288362', '');
INSERT INTO `default_ci_sessions` VALUES ('0d86f1a2f05448159110410f0fb0d57f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288365', '');
INSERT INTO `default_ci_sessions` VALUES ('89aa2caf4e0115ec979defde7d6880a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288367', '');
INSERT INTO `default_ci_sessions` VALUES ('5dde36c7ec5012a39689f4f143f5f864', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288368', '');
INSERT INTO `default_ci_sessions` VALUES ('ab15ae13d2a432b688212c6afe5a447e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288385', '');
INSERT INTO `default_ci_sessions` VALUES ('51eb106159532b8ee21db885c349e5ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288387', '');
INSERT INTO `default_ci_sessions` VALUES ('e63a4e048c327f2dc9b045a83cd6e763', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288670', '');
INSERT INTO `default_ci_sessions` VALUES ('04b4ddea9c17dce0db9245ff9684c7c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288673', '');
INSERT INTO `default_ci_sessions` VALUES ('797081a3daf9d1562d1e55c8c9146e54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288675', '');
INSERT INTO `default_ci_sessions` VALUES ('cc4c851203f7e471ecb80805e659879e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288832', '');
INSERT INTO `default_ci_sessions` VALUES ('5922676f7b8eabab447b52b65ab4684d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288883', '');
INSERT INTO `default_ci_sessions` VALUES ('fe74ffd5aae9d07556d288191f8a3d00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288885', '');
INSERT INTO `default_ci_sessions` VALUES ('64f3680806a58de9ebcc25bd5d923197', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377288927', '');
INSERT INTO `default_ci_sessions` VALUES ('6dd0886d5e8582d56122fad653f2d19a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377290967', '');
INSERT INTO `default_ci_sessions` VALUES ('8b4ddb768d62ec8d414b985461593898', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377290998', '');
INSERT INTO `default_ci_sessions` VALUES ('eee8f38ebeab48236bc46ef4fdcac7ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377291030', '');
INSERT INTO `default_ci_sessions` VALUES ('969c7990b8aba1aa90b7f5a462461d12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377295214', '');
INSERT INTO `default_ci_sessions` VALUES ('3008ef50c88eb6dac7c74659e007fed3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377520015', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('90e8d58d9b46337d6dd93c64f8981eee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377550946', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('70195d46d614d933f76257b80428897d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377522383', '');
INSERT INTO `default_ci_sessions` VALUES ('242fbfefd443b8c1eaa9e83ca5a23ce6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377522388', '');
INSERT INTO `default_ci_sessions` VALUES ('085131f62e18d1f56852aae3695d8046', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377522642', '');
INSERT INTO `default_ci_sessions` VALUES ('d8e99cc15618f83228fc60471e9ef0f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377522646', '');
INSERT INTO `default_ci_sessions` VALUES ('a2f2181638dba902a83866e7af0379b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377522676', '');
INSERT INTO `default_ci_sessions` VALUES ('49cdb2b98735900ef3771c8ad474d191', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377524771', '');
INSERT INTO `default_ci_sessions` VALUES ('a039fd0384e3e5f072e3e6ed4226613f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377524844', '');
INSERT INTO `default_ci_sessions` VALUES ('c957ea04534df786ff27101811e6ad7a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525067', '');
INSERT INTO `default_ci_sessions` VALUES ('53a288e68b7e0aefc6016508f3a9cbc7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525182', '');
INSERT INTO `default_ci_sessions` VALUES ('4167ff73d788e9f936d168fa9b486329', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525260', '');
INSERT INTO `default_ci_sessions` VALUES ('a9f3bef7e39058ff46e73e8dbdad5e3b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525306', '');
INSERT INTO `default_ci_sessions` VALUES ('15f5ea3f7456a2edc9c4127d413f095e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525309', '');
INSERT INTO `default_ci_sessions` VALUES ('502684a322d553006660d26ffe231bc1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525311', '');
INSERT INTO `default_ci_sessions` VALUES ('8f16e064066a2fb31c58e4f09242cbbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525313', '');
INSERT INTO `default_ci_sessions` VALUES ('d3fd17fc501c715c5beffcd6b84bd067', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525314', '');
INSERT INTO `default_ci_sessions` VALUES ('e1c442b6c5937a01c1ce973227d8276a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525316', '');
INSERT INTO `default_ci_sessions` VALUES ('43477e9a2030cc154aee2d54fd8110f5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525334', '');
INSERT INTO `default_ci_sessions` VALUES ('b37e375c752dede0f039dae6c4946cef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525365', '');
INSERT INTO `default_ci_sessions` VALUES ('64be8fb71bd7da51c8cb4292d134c098', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377525429', '');
INSERT INTO `default_ci_sessions` VALUES ('5f31fb155385963869bb1f35fbc62a41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526113', '');
INSERT INTO `default_ci_sessions` VALUES ('3e0b54b8e466b546db889a7e7e7d4363', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526127', '');
INSERT INTO `default_ci_sessions` VALUES ('6d13d296ae4492c9d830c4a16d5ce63d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526146', '');
INSERT INTO `default_ci_sessions` VALUES ('52533ac2b9b90f577e0ec6adfb396a0a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526237', '');
INSERT INTO `default_ci_sessions` VALUES ('26d0f1c46c603e04a738cca5b5fcb148', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526362', '');
INSERT INTO `default_ci_sessions` VALUES ('4336345bbb89d47521bec543bd901e4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526454', '');
INSERT INTO `default_ci_sessions` VALUES ('b502198fa917bab293dc972a9410f751', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526494', '');
INSERT INTO `default_ci_sessions` VALUES ('7d57f53a60af29d1032631d0c000dab5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526553', '');
INSERT INTO `default_ci_sessions` VALUES ('29a9d86a39c45e640a495ecb99ede25e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526606', '');
INSERT INTO `default_ci_sessions` VALUES ('5daace9d7b01a29aef76b9e55e4b260f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526639', '');
INSERT INTO `default_ci_sessions` VALUES ('ff3cdf84a7d321133e50fe92ed1db27e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526671', '');
INSERT INTO `default_ci_sessions` VALUES ('32d66d67a49735847676d47ee17a4299', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526684', '');
INSERT INTO `default_ci_sessions` VALUES ('dc1d9d65408798cf01f0c63f682da972', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526690', '');
INSERT INTO `default_ci_sessions` VALUES ('d718b1534e055dc404c48aa71d40090c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526692', '');
INSERT INTO `default_ci_sessions` VALUES ('3be1a92d3f52e5f1f4e38d4de5c1e6fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526693', '');
INSERT INTO `default_ci_sessions` VALUES ('16ee560d1ebb8041519da76cb1a5c262', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526695', '');
INSERT INTO `default_ci_sessions` VALUES ('a07484c65ff2b4b67355bec739f92e99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526792', '');
INSERT INTO `default_ci_sessions` VALUES ('c498e7e420efff074a8675ce202af290', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526812', '');
INSERT INTO `default_ci_sessions` VALUES ('64ef7299d85765dbe38a813e763f1c0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377526815', '');
INSERT INTO `default_ci_sessions` VALUES ('007768005fb32d4ac3d4102e4272499e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527027', '');
INSERT INTO `default_ci_sessions` VALUES ('7b7983f551c98354d5fe12bc594930df', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527099', '');
INSERT INTO `default_ci_sessions` VALUES ('b9d44a664324c54068ed3deb1a1f7020', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527101', '');
INSERT INTO `default_ci_sessions` VALUES ('c588cbffed64ec52b6299f2548499bd4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527169', '');
INSERT INTO `default_ci_sessions` VALUES ('6605f22c740df322dfe69b9a0b75c35a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527257', '');
INSERT INTO `default_ci_sessions` VALUES ('629b3d8d3d80075a9795cb47ed85bd9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527437', '');
INSERT INTO `default_ci_sessions` VALUES ('7c26177c0a4aa32b300bf45170cddef9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527636', '');
INSERT INTO `default_ci_sessions` VALUES ('becca14f8d8b6a6e6ce3b39ab2350ca0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377527675', '');
INSERT INTO `default_ci_sessions` VALUES ('c613ec995487a6e9ddc9fa84261e5618', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377541734', '');
INSERT INTO `default_ci_sessions` VALUES ('0bb9a48345e6dc96dfd5f41d273b1dce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377541808', '');
INSERT INTO `default_ci_sessions` VALUES ('11e7233ee73e36c45a59f5152d456b1a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377542571', '');
INSERT INTO `default_ci_sessions` VALUES ('106f54eab692379417b4b63881f3c1aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377542858', '');
INSERT INTO `default_ci_sessions` VALUES ('47f6d1fe2e80cc062f435eecef65566e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543118', '');
INSERT INTO `default_ci_sessions` VALUES ('065ef4146a35a1b7b016f1034f8ef3bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543238', '');
INSERT INTO `default_ci_sessions` VALUES ('32d2ac6a5dae8e419c12d1546fc0134d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543296', '');
INSERT INTO `default_ci_sessions` VALUES ('faf2f63c82ab2e1e66d9c236ed548cb1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543350', '');
INSERT INTO `default_ci_sessions` VALUES ('d84c2556479ee6e084950e9b74f99332', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543411', '');
INSERT INTO `default_ci_sessions` VALUES ('8cdee43f55d30b433efd4f83187815e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377543770', '');
INSERT INTO `default_ci_sessions` VALUES ('df735b43b35c0c320a38c15f30ded01f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544162', '');
INSERT INTO `default_ci_sessions` VALUES ('29e2d6ef3c95b76020800b08f112638d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544546', '');
INSERT INTO `default_ci_sessions` VALUES ('0f1d3c1cc19a427dbb88cf89abaed476', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544587', '');
INSERT INTO `default_ci_sessions` VALUES ('66536ad1712222ae2380a9922cf4a010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544619', '');
INSERT INTO `default_ci_sessions` VALUES ('1f354c9fa1db69ced7cb2197058f3ec8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544687', '');
INSERT INTO `default_ci_sessions` VALUES ('ffcc116c6731226646ee3a9953b41f1b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544726', '');
INSERT INTO `default_ci_sessions` VALUES ('2837ed856c14a53521a0fd7ed772061b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544745', '');
INSERT INTO `default_ci_sessions` VALUES ('17afec8b4c921c791c26939683b2e728', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544747', '');
INSERT INTO `default_ci_sessions` VALUES ('5d7f55ef2325b385af6be37e62fa959c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544760', '');
INSERT INTO `default_ci_sessions` VALUES ('236b94cc45de7e3da474fdf814a0c533', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544791', '');
INSERT INTO `default_ci_sessions` VALUES ('03abae65b1d14c8c5bddc3f2e69ed10e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544819', '');
INSERT INTO `default_ci_sessions` VALUES ('8f3bd084d55f32fdfa20688f299ca309', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544838', '');
INSERT INTO `default_ci_sessions` VALUES ('7a168a9edc501b71045c08eb9fc89dfe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544844', '');
INSERT INTO `default_ci_sessions` VALUES ('9c95b3a69155a7e9b50d54c09c4c2496', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544856', '');
INSERT INTO `default_ci_sessions` VALUES ('af5450e7f675757305dedae82e2e21a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544950', '');
INSERT INTO `default_ci_sessions` VALUES ('1e93c1a5fb248dbe7f9efc595ac103d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377544971', '');
INSERT INTO `default_ci_sessions` VALUES ('6299d85f5e96f8cbbfc22788076238c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377545005', '');
INSERT INTO `default_ci_sessions` VALUES ('f614fa6ae56d78db37b33c203dd71e09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377545021', '');
INSERT INTO `default_ci_sessions` VALUES ('3dea4d44af0aff09f48ad9ccd8cf4410', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377545044', '');
INSERT INTO `default_ci_sessions` VALUES ('1044f38b9fdd44f7577edac8bfa8f5a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377545175', '');
INSERT INTO `default_ci_sessions` VALUES ('1acbf61c409fb7046fc44888927029aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377545335', '');
INSERT INTO `default_ci_sessions` VALUES ('f64279fc217c1d383af4b9efcdd44883', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', '1377550962', '');
INSERT INTO `default_ci_sessions` VALUES ('8507a5fabd19293673e460e1f82145da', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377550976', '');
INSERT INTO `default_ci_sessions` VALUES ('5c1c79652f2cc336e2d3f6557407a79e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377551113', '');
INSERT INTO `default_ci_sessions` VALUES ('643530dca58baab44d988f83cb7117c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377554030', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('cd2b26167dcfc40ef237c097805f645b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377551935', '');
INSERT INTO `default_ci_sessions` VALUES ('2cb11adb637aec7e9693412324071678', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377552016', '');
INSERT INTO `default_ci_sessions` VALUES ('4f922d56611e9f40486fe3d35086ad82', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377552033', '');
INSERT INTO `default_ci_sessions` VALUES ('6e95ab711efc28f8ddbc71b1cb3095c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377552109', '');
INSERT INTO `default_ci_sessions` VALUES ('c9784fd089d3605b5e471e5597a965ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377552223', '');
INSERT INTO `default_ci_sessions` VALUES ('2c8e4bad946fe25cc3185e94bed42a28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377554033', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('06a53099d5f1e099b045f55a16c87335', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616635', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('d9c107e6c4becef6611a8e6b3de3b124', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612058', '');
INSERT INTO `default_ci_sessions` VALUES ('ae9ddaedabd9175d15fb1580748d8857', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612060', '');
INSERT INTO `default_ci_sessions` VALUES ('9c484c8c6f21f390cc1d0df0e8748fb6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612124', '');
INSERT INTO `default_ci_sessions` VALUES ('322bef3ef99e4b099a6d87416b01e2b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612129', '');
INSERT INTO `default_ci_sessions` VALUES ('01f9d43d0e3041a70b31b63de1bf0390', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612246', '');
INSERT INTO `default_ci_sessions` VALUES ('ac739c0f2cb9c4cb961960be8cec981f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612255', '');
INSERT INTO `default_ci_sessions` VALUES ('16cfdd195d543086436d4302b9cabd34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612340', '');
INSERT INTO `default_ci_sessions` VALUES ('9a252ea76e565a1e2db51badab31e1c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612402', '');
INSERT INTO `default_ci_sessions` VALUES ('214f91c9d06948a14b5c5a772dea0450', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377612434', '');
INSERT INTO `default_ci_sessions` VALUES ('f77dace44bddc29885fa5d1172448e9b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377614293', '');
INSERT INTO `default_ci_sessions` VALUES ('7bb4277b813c5b108f57f6e579519c44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377614537', '');
INSERT INTO `default_ci_sessions` VALUES ('b37fcc47ba3c4fde72b3e8f0db053ec9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377614561', '');
INSERT INTO `default_ci_sessions` VALUES ('a5c127213cd9259adfa82d89f2d56a2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377614567', '');
INSERT INTO `default_ci_sessions` VALUES ('3cde8ae203f79d91d9544725cb722ef8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377614585', '');
INSERT INTO `default_ci_sessions` VALUES ('92bf83b2422cfea18a71aa5d462f88b2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616377', '');
INSERT INTO `default_ci_sessions` VALUES ('8e9e6158aad23676a5e83e3596e06e80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616386', '');
INSERT INTO `default_ci_sessions` VALUES ('8de9b40cc4ea761142492d5172a19218', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616437', '');
INSERT INTO `default_ci_sessions` VALUES ('ed391dee88c5a670c1aebc3277f7246c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616444', '');
INSERT INTO `default_ci_sessions` VALUES ('930340210a10107abe1d386db974d06a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616489', '');
INSERT INTO `default_ci_sessions` VALUES ('5e3919cead1481de4144c61e189ad969', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616495', '');
INSERT INTO `default_ci_sessions` VALUES ('d60bddfaa9af569457d58f80cd5134ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616517', '');
INSERT INTO `default_ci_sessions` VALUES ('85600d4e1a404b813f3a1025f654fccb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616522', '');
INSERT INTO `default_ci_sessions` VALUES ('7454af77fc08a6465029ea133bd4239e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616556', '');
INSERT INTO `default_ci_sessions` VALUES ('3bcb243819979fd43402abd434020617', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616588', '');
INSERT INTO `default_ci_sessions` VALUES ('e1428b154bb7aa5cd2c9e92935148472', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616626', '');
INSERT INTO `default_ci_sessions` VALUES ('2db5fdc1decb4bc10b2036e880b14459', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616636', '');
INSERT INTO `default_ci_sessions` VALUES ('1912768845f34a4ae038fdc3cf1a3b4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624837', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('f5d1b9126270afdfd783b98e0213fdea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616637', '');
INSERT INTO `default_ci_sessions` VALUES ('ce3848d7fc9a204652b799130e7355b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616684', '');
INSERT INTO `default_ci_sessions` VALUES ('1592d87f092c6947ddbac53b486f0380', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616689', '');
INSERT INTO `default_ci_sessions` VALUES ('2678af47f3e929924207bc00d61d5ac1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616709', '');
INSERT INTO `default_ci_sessions` VALUES ('e44f94d71022a2240e0ed1e0ea53aee8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616715', '');
INSERT INTO `default_ci_sessions` VALUES ('e57e03b9cb441495502b630ad9755ef3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377616782', '');
INSERT INTO `default_ci_sessions` VALUES ('34690d2321f5aaa7a10332d5d89cb7d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377622645', '');
INSERT INTO `default_ci_sessions` VALUES ('bc369a028564acde57e9f1b461f9ca2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377622660', '');
INSERT INTO `default_ci_sessions` VALUES ('e916b6435d3851f2353be937f45be5c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377622760', '');
INSERT INTO `default_ci_sessions` VALUES ('08bb7ad1c48c230fb17189755abc052f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377623420', '');
INSERT INTO `default_ci_sessions` VALUES ('2f4d99148baecb61a87b5a6f3f1b7235', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377623477', '');
INSERT INTO `default_ci_sessions` VALUES ('4b63ed4af752b3818eb0e5ee3db6d86f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624502', '');
INSERT INTO `default_ci_sessions` VALUES ('5e0f7caece6f0ba294ca91e4208b11f5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624837', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('27164b34bd00a40d5a74c3419fa3ff7e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624837', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('fb16316ba2ec8a33a8a32373f564a63c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624838', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('bc0476dc7408058761eacbfd1f2f6bf3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624838', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('6c5a6d9679585382aae69979e15fc2b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624839', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('ecb140dd6ff3548bf703e97053c389d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624840', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('5513d2fb6edecb0a22df82d02d7406bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624840', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('cfe879889ff8717032735b05191dfa7d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377624841', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('bf706be1019aa611244ae9d5931e05e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377632741', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('1462283be15798d62f1e68f17b07e3a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627053', '');
INSERT INTO `default_ci_sessions` VALUES ('f3682c7f612443d8191cb6cd03dfe8d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627063', '');
INSERT INTO `default_ci_sessions` VALUES ('61664a845ab22f4c02f54b1c79641221', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627172', '');
INSERT INTO `default_ci_sessions` VALUES ('6631a8ebea4041967b330c1f902291bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627180', '');
INSERT INTO `default_ci_sessions` VALUES ('240dc1428d54b429bea089b477fe11c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627182', '');
INSERT INTO `default_ci_sessions` VALUES ('ab904657694223416621c4c416ac4ca3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627183', '');
INSERT INTO `default_ci_sessions` VALUES ('2b75defae47aae6843e1161bf1cf7b2a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627184', '');
INSERT INTO `default_ci_sessions` VALUES ('6d27c0d0f8661f69760dcf9bdb6c2808', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627232', '');
INSERT INTO `default_ci_sessions` VALUES ('b64528e67fbe56830b3164666eec1c97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627284', '');
INSERT INTO `default_ci_sessions` VALUES ('01257c2503e9d3207cca23d6f6a499f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627309', '');
INSERT INTO `default_ci_sessions` VALUES ('7087c6fb1d2daa8a158251b557a56396', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627326', '');
INSERT INTO `default_ci_sessions` VALUES ('d5c9145d488e6a3e3c236ff87f0e75cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627410', '');
INSERT INTO `default_ci_sessions` VALUES ('6ddd81e94eed5227503b6dda3d556dd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627439', '');
INSERT INTO `default_ci_sessions` VALUES ('2465172d04d204de51fbafbf89507f02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627488', '');
INSERT INTO `default_ci_sessions` VALUES ('ed6de595f3743e6e703470b06c75b78b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627518', '');
INSERT INTO `default_ci_sessions` VALUES ('591b8bc6290fa0fb8d7d11cde08841ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627896', '');
INSERT INTO `default_ci_sessions` VALUES ('60c3531e65f5659883f4343ab57564b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627930', '');
INSERT INTO `default_ci_sessions` VALUES ('e930b2bbc37a1ed52eb6a1aacd43c626', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377627998', '');
INSERT INTO `default_ci_sessions` VALUES ('d4600b47e8c9a7eeb9d8cc69194306d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377628052', '');
INSERT INTO `default_ci_sessions` VALUES ('2b387d9f6cacb47bd5a39367bb8a9767', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377628160', '');
INSERT INTO `default_ci_sessions` VALUES ('4c6b9bcd3f6d3cac7169e49ce69aeacb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377628178', '');
INSERT INTO `default_ci_sessions` VALUES ('d08e1cb5000445ce3cefd353c85b6702', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629042', '');
INSERT INTO `default_ci_sessions` VALUES ('d9f1018f70f8bb765d7ec92e96276eb4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629625', '');
INSERT INTO `default_ci_sessions` VALUES ('0b66886be77e158a17cd8485d216e106', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629782', '');
INSERT INTO `default_ci_sessions` VALUES ('2806f5d474aec65880ccc458518e503f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629842', '');
INSERT INTO `default_ci_sessions` VALUES ('34d2bef84d716d5d6e2ac0536e89c5d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629852', '');
INSERT INTO `default_ci_sessions` VALUES ('9e124095c211e0b8fb6cef521061ebc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629904', '');
INSERT INTO `default_ci_sessions` VALUES ('11e76ced8b2c2316af8d269405fc3a40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629908', '');
INSERT INTO `default_ci_sessions` VALUES ('fb5e6ff63176d112cc7ad59273c71bb2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629913', '');
INSERT INTO `default_ci_sessions` VALUES ('d114eedfd787206c30daf118892bbe4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629952', '');
INSERT INTO `default_ci_sessions` VALUES ('265f2aab24488ffc30c74160d6ef7062', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377629962', '');
INSERT INTO `default_ci_sessions` VALUES ('35199c8855e9559a195565fbf7a9d2d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377630214', '');
INSERT INTO `default_ci_sessions` VALUES ('ce86db7e7f10e58b938e508074cb591e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377632741', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('5fb405a5c723fff60cee6268018cd61b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377639761', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('1fd99787a1ed7d1f6c4080ceacd17c25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633256', '');
INSERT INTO `default_ci_sessions` VALUES ('b282c958099dec47d364fcac0ee3a989', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633336', '');
INSERT INTO `default_ci_sessions` VALUES ('039096d6ecf2787c1e609b9cd7d3a504', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633342', '');
INSERT INTO `default_ci_sessions` VALUES ('6bb0f5668aa56c6b7a494f5e88101427', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633359', '');
INSERT INTO `default_ci_sessions` VALUES ('f6ef4a0e46b0d474780f91e49a9fd9b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633390', '');
INSERT INTO `default_ci_sessions` VALUES ('7796e2cf822624ca755200c866c36f7e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633454', '');
INSERT INTO `default_ci_sessions` VALUES ('13737dc6b2b1dfc93c421df7951c3f76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633502', '');
INSERT INTO `default_ci_sessions` VALUES ('0d7c7c7b42389c53c97112e3ecf34efd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633558', '');
INSERT INTO `default_ci_sessions` VALUES ('e1a8ab03e636e26cb3351840bae85197', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377633986', '');
INSERT INTO `default_ci_sessions` VALUES ('d461cc66c39e4a9b53817d0ce3d14ea3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377634025', '');
INSERT INTO `default_ci_sessions` VALUES ('30823ab4388b8b07736a5643e70a2c90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377634167', '');
INSERT INTO `default_ci_sessions` VALUES ('f7a669b7c534da59fe1839784f39f1c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636130', '');
INSERT INTO `default_ci_sessions` VALUES ('69d6b441e7bbd711c543c4eb06fb420d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636140', '');
INSERT INTO `default_ci_sessions` VALUES ('dbefadd5c7a62828a4fd94bb0273dd46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636610', '');
INSERT INTO `default_ci_sessions` VALUES ('ac51566870509f98b7c88f3b6bf52450', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636616', '');
INSERT INTO `default_ci_sessions` VALUES ('1dd3f56a64e387b3956643b4e0b63183', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636617', '');
INSERT INTO `default_ci_sessions` VALUES ('1201608ef0f3941bfb3606bcd5f57e19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636628', '');
INSERT INTO `default_ci_sessions` VALUES ('268305594dc232d1854b48c3e1f61a28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636629', '');
INSERT INTO `default_ci_sessions` VALUES ('89672e8aac9efccebaaff371b2fa7a1e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636634', '');
INSERT INTO `default_ci_sessions` VALUES ('6c1a7dd78f9de72523c854770ca7f8f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636635', '');
INSERT INTO `default_ci_sessions` VALUES ('4aff4163dfeeda87f1f9f38aeceddaa6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636712', '');
INSERT INTO `default_ci_sessions` VALUES ('30da5bfb1489269f322a0a0d95ecf7d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636721', '');
INSERT INTO `default_ci_sessions` VALUES ('154c554a9ec44ba95c25f88747873df4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636725', '');
INSERT INTO `default_ci_sessions` VALUES ('c222eacee7609f45a3ee249fa81ae143', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636727', '');
INSERT INTO `default_ci_sessions` VALUES ('0bbb5b137b267f191964993d41925263', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636728', '');
INSERT INTO `default_ci_sessions` VALUES ('f6416255e47261e812e201da4f462c62', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636756', '');
INSERT INTO `default_ci_sessions` VALUES ('d771f88b213bb30da76f91ea4377d26f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636764', '');
INSERT INTO `default_ci_sessions` VALUES ('0aef458fdcd676c65286f33930b73e3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636883', '');
INSERT INTO `default_ci_sessions` VALUES ('101b1032f4eff15d95c218909918b980', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636891', '');
INSERT INTO `default_ci_sessions` VALUES ('ee0af7f6a27bd2d40555363ac38ddcba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636904', '');
INSERT INTO `default_ci_sessions` VALUES ('d229808fb35718b5d16d7c285f411fa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636909', '');
INSERT INTO `default_ci_sessions` VALUES ('ddb4621d7f9416b5f4aefec9cd6fc823', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636931', '');
INSERT INTO `default_ci_sessions` VALUES ('03eee6ee0c300e0d5becad71c24daa3d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636944', '');
INSERT INTO `default_ci_sessions` VALUES ('dffabd399c1a91860fb4afea25153b47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636950', '');
INSERT INTO `default_ci_sessions` VALUES ('00440ce4bf25261f41a3ab383dccc356', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377636975', '');
INSERT INTO `default_ci_sessions` VALUES ('2d541aeda48e4dd843eeb8fc847ed8af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377637005', '');
INSERT INTO `default_ci_sessions` VALUES ('33570f60ef7cb554604196f703e8241b', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637041', '');
INSERT INTO `default_ci_sessions` VALUES ('da8562932d2e947feff90ee042ae52ba', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', '1377637062', '');
INSERT INTO `default_ci_sessions` VALUES ('ced31103ce268b0543a952c2d111c308', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637064', '');
INSERT INTO `default_ci_sessions` VALUES ('0032fe8f002c7ef9ace79ed370473475', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', '1377637073', '');
INSERT INTO `default_ci_sessions` VALUES ('f4de145473bd9e9e20407f77cb3b33f9', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637201', '');
INSERT INTO `default_ci_sessions` VALUES ('219c5028e18df5cdaeb0262d977db921', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', '1377637229', '');
INSERT INTO `default_ci_sessions` VALUES ('5060ee8cf4771f1cb8a4d836d0a588c8', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637232', '');
INSERT INTO `default_ci_sessions` VALUES ('20cf5d8622b0a4031a888272530b0106', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', '1377637303', '');
INSERT INTO `default_ci_sessions` VALUES ('8b72b2da5e2914986254a072d73bf714', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637325', '');
INSERT INTO `default_ci_sessions` VALUES ('e2d740b0ca5eaa5376478d8bd9102703', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', '1377637340', '');
INSERT INTO `default_ci_sessions` VALUES ('2b79e436d2ee080648a1961284a1ed30', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '1377637502', '');
INSERT INTO `default_ci_sessions` VALUES ('2f41ad01adb195d73b7f443e23c1c696', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637505', '');
INSERT INTO `default_ci_sessions` VALUES ('8971f5653df645c499aaf146287748fa', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '1377637506', '');
INSERT INTO `default_ci_sessions` VALUES ('c452c2af6d21d0803f21e820c89a204a', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637509', '');
INSERT INTO `default_ci_sessions` VALUES ('f425e31244cc884e443a603c689ed55b', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '1377637512', '');
INSERT INTO `default_ci_sessions` VALUES ('1c22aa308a960888e2af4b7c4e6ad4fb', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637515', '');
INSERT INTO `default_ci_sessions` VALUES ('7fd4f52f3be70282e4b57a9ab77bb0a2', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '1377637522', '');
INSERT INTO `default_ci_sessions` VALUES ('f206c62b3c24b9cbca87d3c39d75b607', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377637524', '');
INSERT INTO `default_ci_sessions` VALUES ('c870a8779e684bdd119f8b41836db30c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377637582', '');
INSERT INTO `default_ci_sessions` VALUES ('b0b1ae1af4bd23bbc676e313b7e555cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377638048', '');
INSERT INTO `default_ci_sessions` VALUES ('c9b30cf863a467f3998b361b0c09286b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377638057', '');
INSERT INTO `default_ci_sessions` VALUES ('2083c66681323be448ffecbb5d2583a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377715677', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('594f38759c9d48209529cc88fb4bb52c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694553', '');
INSERT INTO `default_ci_sessions` VALUES ('c3ae432feae0ea283e53ae75cca1fba9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694614', '');
INSERT INTO `default_ci_sessions` VALUES ('fc7c2729a404f2c35022803e618c42e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694653', '');
INSERT INTO `default_ci_sessions` VALUES ('a43b73d1afac9ba4ab0b8287b97c4277', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694721', '');
INSERT INTO `default_ci_sessions` VALUES ('b55bebf45bb38cbdc42b9b0db1c1f8a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694780', '');
INSERT INTO `default_ci_sessions` VALUES ('a2bff4f5a04687993222dd9523b6fb69', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694807', '');
INSERT INTO `default_ci_sessions` VALUES ('cff53af58019eea980948bfd740954a3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377694844', '');
INSERT INTO `default_ci_sessions` VALUES ('922d1a607768eaa0b8fa272fa4ffc3a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377695326', '');
INSERT INTO `default_ci_sessions` VALUES ('4611525a2201e9ef234b93b64cc3d3d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377696775', '');
INSERT INTO `default_ci_sessions` VALUES ('f34d226e2e0b23128db0391e2cef6550', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377696877', '');
INSERT INTO `default_ci_sessions` VALUES ('8efeaae6131858a8f47b1780549673f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697248', '');
INSERT INTO `default_ci_sessions` VALUES ('1d790895a3ac859cfab951dbf327f276', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697423', '');
INSERT INTO `default_ci_sessions` VALUES ('93cf2c3ffd57ae9d8966e66f43c9043d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697483', '');
INSERT INTO `default_ci_sessions` VALUES ('a38574833f61b05203598c371a84a26b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697495', '');
INSERT INTO `default_ci_sessions` VALUES ('f3549f4fdb0b6a206c9ee1d08ca43c4f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697513', '');
INSERT INTO `default_ci_sessions` VALUES ('4ced1a05b66183723253e1468d1d9364', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697523', '');
INSERT INTO `default_ci_sessions` VALUES ('724b5a657e397ba3a7aa4634e5e37828', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377697777', '');
INSERT INTO `default_ci_sessions` VALUES ('14087ea89f94293bbed8de902a622122', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698016', '');
INSERT INTO `default_ci_sessions` VALUES ('47dad7094b9026d703d4ee433213782b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698112', '');
INSERT INTO `default_ci_sessions` VALUES ('0ebd50abd7e508c9dce465314f57397f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698486', '');
INSERT INTO `default_ci_sessions` VALUES ('575698751f32202c0517663785d1409d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698516', '');
INSERT INTO `default_ci_sessions` VALUES ('e96a92e62e54978c4c313e6c594f8f29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698543', '');
INSERT INTO `default_ci_sessions` VALUES ('b04300ada8cc61e548c727455aa3fdcf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698598', '');
INSERT INTO `default_ci_sessions` VALUES ('a4443e2893b9b5a2cd76c354629fae44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698681', '');
INSERT INTO `default_ci_sessions` VALUES ('bf70673ff3e454f6293ec7ce37eb04b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698690', '');
INSERT INTO `default_ci_sessions` VALUES ('758dcc8ad7a4fff858caa14b3c42d1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698748', '');
INSERT INTO `default_ci_sessions` VALUES ('0f5795d73b092862f4a056d94c317701', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698767', '');
INSERT INTO `default_ci_sessions` VALUES ('6099b3a4972ca6c824f7c1ba3162e20d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698774', '');
INSERT INTO `default_ci_sessions` VALUES ('22699b35069e59b9ee24a99e4d2a11e1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698823', '');
INSERT INTO `default_ci_sessions` VALUES ('71e17de6746d0b78d4d32eb84963c9f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698830', '');
INSERT INTO `default_ci_sessions` VALUES ('4475a3781b3ea38de11ce93c0bba7062', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377698960', '');
INSERT INTO `default_ci_sessions` VALUES ('e646a8774e3beeedc2ecf08fd91bbcd1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699324', '');
INSERT INTO `default_ci_sessions` VALUES ('5543d01be42ec5aaf97ffed4e8da27f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699541', '');
INSERT INTO `default_ci_sessions` VALUES ('95c7672df9add3a1b93081eff8dca1b6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699571', '');
INSERT INTO `default_ci_sessions` VALUES ('6d5ff53466c65b518ef26995366dcd3f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699722', '');
INSERT INTO `default_ci_sessions` VALUES ('484ac5883b472a5cf65c6cdc58268058', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699748', '');
INSERT INTO `default_ci_sessions` VALUES ('8163c1109ba51a57837b0544e797f630', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699887', '');
INSERT INTO `default_ci_sessions` VALUES ('56480d169db8291bbadf4c05aa34abaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377699893', '');
INSERT INTO `default_ci_sessions` VALUES ('969668e31b54ca0ddf1f008345b2edeb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', '1377700391', '');
INSERT INTO `default_ci_sessions` VALUES ('badb91b89d18400d3f6f3287fe77f436', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', '1377700731', '');
INSERT INTO `default_ci_sessions` VALUES ('c47db1894bcea1633202e82d07f80033', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377803792', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('1c43d14a0ea302eb8ce3a258ad3528aa', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377795847', '');
INSERT INTO `default_ci_sessions` VALUES ('65a6b9de1a596b032de8ec2fe33653b9', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377809605', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('312aa9c72e33ae17023e692f18882d42', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377808257', '');
INSERT INTO `default_ci_sessions` VALUES ('c3703f6d335824fe321258494a6a6407', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', '1377808563', '');
INSERT INTO `default_ci_sessions` VALUES ('e9ab69caf7d4cdccc0807218b6cdd842', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377889414', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('837a26ab9600d3d392f6bd1d3f1aea0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377879201', '');
INSERT INTO `default_ci_sessions` VALUES ('91d52f3aee1ef6df212752053bb657c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377881734', '');
INSERT INTO `default_ci_sessions` VALUES ('573358eaf45baa87397c2de758b61a2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377881780', '');
INSERT INTO `default_ci_sessions` VALUES ('396135062d40330f819f4112029d3a88', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377881897', '');
INSERT INTO `default_ci_sessions` VALUES ('bd9bc11487010f1487487542cc04af61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882056', '');
INSERT INTO `default_ci_sessions` VALUES ('cae8f26b7f9001b1090af5fd5bb3bfbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882113', '');
INSERT INTO `default_ci_sessions` VALUES ('9bb63638f03961f9f1bf4146c5480c4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882251', '');
INSERT INTO `default_ci_sessions` VALUES ('5def4766d786da3a2b262439e4dd316f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882345', '');
INSERT INTO `default_ci_sessions` VALUES ('2d1f144bab37999031dd83ee2936c46a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882365', '');
INSERT INTO `default_ci_sessions` VALUES ('08df5a61198f3acd9f26614a50fbcb83', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882392', '');
INSERT INTO `default_ci_sessions` VALUES ('01b00870281c12130b2d516d1014a9bc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882490', '');
INSERT INTO `default_ci_sessions` VALUES ('b75d71047717bd8cb28575767bfb4d35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882568', '');
INSERT INTO `default_ci_sessions` VALUES ('cd6cfd47593d09a3412ea1e41c108bdc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882752', '');
INSERT INTO `default_ci_sessions` VALUES ('98b0914d3fc277bc8d1b4897fb3912f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882788', '');
INSERT INTO `default_ci_sessions` VALUES ('ba7b9ef4af0a4aa8665af17a5968efe6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377882813', '');
INSERT INTO `default_ci_sessions` VALUES ('ad37b3ea1f181a858ff078c17a168b8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377883631', '');
INSERT INTO `default_ci_sessions` VALUES ('dbafb62e979b75cafa006c7f061cf967', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377883759', '');
INSERT INTO `default_ci_sessions` VALUES ('77a9fd1c88bbb96b4de62dca5981cdd4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377883877', '');
INSERT INTO `default_ci_sessions` VALUES ('f24519c2c6d67917c302343ac5baf748', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884075', '');
INSERT INTO `default_ci_sessions` VALUES ('6b408f69a45a79eebba6ddfba82d1907', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884103', '');
INSERT INTO `default_ci_sessions` VALUES ('39b60bb02480cb65d797b06e2d66bb45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884150', '');
INSERT INTO `default_ci_sessions` VALUES ('aef603635581d1e59818538859da3fab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884180', '');
INSERT INTO `default_ci_sessions` VALUES ('a395b9cf3f8f4c8dc397cff3438ea855', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884276', '');
INSERT INTO `default_ci_sessions` VALUES ('78a8677fb0ea30730c26af11c947f740', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884311', '');
INSERT INTO `default_ci_sessions` VALUES ('8584677d33d305b0be89abcb049175e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884669', '');
INSERT INTO `default_ci_sessions` VALUES ('f7e3c1ebef70ad62ae28fa52aac511f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884956', '');
INSERT INTO `default_ci_sessions` VALUES ('e01c8e0cbe0f37a8fb2660811367aca9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377884986', '');
INSERT INTO `default_ci_sessions` VALUES ('6399508f9b81c4f32344c6af096c9df9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377885249', '');
INSERT INTO `default_ci_sessions` VALUES ('816c429a0ee49578ab7d4c87df166cda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377886385', '');
INSERT INTO `default_ci_sessions` VALUES ('c17bbddf45394058f217cf1c7b0adf8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377886518', '');
INSERT INTO `default_ci_sessions` VALUES ('2cb4afd54d3fbbf5fab9a065ce15136d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377886718', '');
INSERT INTO `default_ci_sessions` VALUES ('35d183ca1ad1934ed5a61455a5b934c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887165', '');
INSERT INTO `default_ci_sessions` VALUES ('aee1b7910d029bcdf08f36d00b2767b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887204', '');
INSERT INTO `default_ci_sessions` VALUES ('7d64b18284247aff6a243449e2ca4555', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887224', '');
INSERT INTO `default_ci_sessions` VALUES ('26926996b449c5e10288923e3b8985b2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887230', '');
INSERT INTO `default_ci_sessions` VALUES ('8f60df2bc97eba3c38cb567ac31297fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887304', '');
INSERT INTO `default_ci_sessions` VALUES ('3b70b6346073b62449c2d3174d9a608e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377887394', '');
INSERT INTO `default_ci_sessions` VALUES ('956415b477e3266e62c50fec5f387413', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1377889946', 'a:6:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";s:18:\"flash:old:referrer\";s:41:\"blog/2013/08/otra-noticias-muy-importante\";}');
INSERT INTO `default_ci_sessions` VALUES ('c0289739caec25306db4eb3174015334', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378128965', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('ae336a858ff36f85e08f3257d4aaddc9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126497', '');
INSERT INTO `default_ci_sessions` VALUES ('f11f2e22061f89748f71d0e0c52fe1a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126536', '');
INSERT INTO `default_ci_sessions` VALUES ('00dece8c134fb125594a9f25af1e9332', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126580', '');
INSERT INTO `default_ci_sessions` VALUES ('b34984a15a44d8d5424d769495a386ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126782', '');
INSERT INTO `default_ci_sessions` VALUES ('1a9d727883c77894a471af1614d346ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126899', '');
INSERT INTO `default_ci_sessions` VALUES ('00afdac85c90c6c617167f0ce30ebe37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378126917', '');
INSERT INTO `default_ci_sessions` VALUES ('56089d333a3ca185bf1d03de632caa13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148132', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('19b1042d289cb08c6a8e8aa79f3a1a6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157034', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('a8306a85de6d5110d9710006d1befaeb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148831', '');
INSERT INTO `default_ci_sessions` VALUES ('cb73b8a0be7cd440b523a176b7416eec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148843', '');
INSERT INTO `default_ci_sessions` VALUES ('fc3bafc3197abce10bfc8ee510fac9df', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148918', '');
INSERT INTO `default_ci_sessions` VALUES ('b13b2b552aa4e4c7eff59d0dc54057ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148932', '');
INSERT INTO `default_ci_sessions` VALUES ('1b67287c2cff237183d0f3610b24c074', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148971', '');
INSERT INTO `default_ci_sessions` VALUES ('51c53d52667dbcfd6cf226e470143a41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148974', '');
INSERT INTO `default_ci_sessions` VALUES ('a2cf066f1f1f49b696f63e442c62f993', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378148980', '');
INSERT INTO `default_ci_sessions` VALUES ('08ef2447668b026c1881b09a9cb96a4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149072', '');
INSERT INTO `default_ci_sessions` VALUES ('cc9b1b6b79f3b3666ee2728072482a43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149076', '');
INSERT INTO `default_ci_sessions` VALUES ('1c77336a9e9c1e7ba21065fd1f9283f6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149094', '');
INSERT INTO `default_ci_sessions` VALUES ('9aa4fdfaddb8c8bd0c10dfb3f7de6ce0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149645', '');
INSERT INTO `default_ci_sessions` VALUES ('c28f7fd0b7e71bd4f38d1874fcba6759', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149659', '');
INSERT INTO `default_ci_sessions` VALUES ('0da0e69d9f7df6dfdbab0dc137ae06c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149674', '');
INSERT INTO `default_ci_sessions` VALUES ('a619536abe14ccf1ffb9d4087039dca7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149681', '');
INSERT INTO `default_ci_sessions` VALUES ('7211cf78e0c95b0121a88a7e4dee9b45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149792', '');
INSERT INTO `default_ci_sessions` VALUES ('34641a884b5eabb30a54f3835199aa4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149801', '');
INSERT INTO `default_ci_sessions` VALUES ('a2431c99d159868938e9de9b3cde6990', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149804', '');
INSERT INTO `default_ci_sessions` VALUES ('a632fe602c69efc6368b36ebeda7f8a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149819', '');
INSERT INTO `default_ci_sessions` VALUES ('947f7968fe4e647309e721c47830daa9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149834', '');
INSERT INTO `default_ci_sessions` VALUES ('c601e437dff35f60f4663dd5c204b0c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378149907', '');
INSERT INTO `default_ci_sessions` VALUES ('55fe12a1245d2b60698d70a436062253', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150130', '');
INSERT INTO `default_ci_sessions` VALUES ('d44170715636e82d2920e467961f6e8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150194', '');
INSERT INTO `default_ci_sessions` VALUES ('3faf9edc09dafeb8bbf98ad4edae1ef5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150216', '');
INSERT INTO `default_ci_sessions` VALUES ('427998aa16ab0f6bf72a1b02b9530d5d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150241', '');
INSERT INTO `default_ci_sessions` VALUES ('6754feb54f6944c2d5d29432428811ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150374', '');
INSERT INTO `default_ci_sessions` VALUES ('bc2f69c01c30017c0523c087b885d692', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150385', '');
INSERT INTO `default_ci_sessions` VALUES ('2c771f13e9a7191fcb3bec8bb11ed3c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150701', '');
INSERT INTO `default_ci_sessions` VALUES ('e2f07b1a8201c40ed64aee0ece01a21d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150838', '');
INSERT INTO `default_ci_sessions` VALUES ('ddd484d9941e8ff9bfd776eaff02d5f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378150974', '');
INSERT INTO `default_ci_sessions` VALUES ('8a90d44dfd3a59a11a2cf1af0b403b5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378151899', '');
INSERT INTO `default_ci_sessions` VALUES ('bbd3b4491c7412b3814167297f314422', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378151903', '');
INSERT INTO `default_ci_sessions` VALUES ('637dcb9e07279c18d52139d58a68d5af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378151951', '');
INSERT INTO `default_ci_sessions` VALUES ('3106ac8d2563575ffce74f2c8b4639e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152064', '');
INSERT INTO `default_ci_sessions` VALUES ('d46a5f276bae35b8fa497f094e7a977d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152138', '');
INSERT INTO `default_ci_sessions` VALUES ('8f3961fe2e209f6a5897b6d532db38b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152182', '');
INSERT INTO `default_ci_sessions` VALUES ('6be3f1591f941615125b14aabaf71e1d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152306', '');
INSERT INTO `default_ci_sessions` VALUES ('2e23fd2833843fe2b6d8ca7530e44709', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152390', '');
INSERT INTO `default_ci_sessions` VALUES ('5e68048654c62054ea1dac914e2e1d94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152418', '');
INSERT INTO `default_ci_sessions` VALUES ('fb019633f0be73f72ace8761f4ae4337', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152624', '');
INSERT INTO `default_ci_sessions` VALUES ('3d3103ed370d01785ecb9d00c5f74447', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152631', '');
INSERT INTO `default_ci_sessions` VALUES ('730e07363314cf3202e61dd47706eadb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152741', '');
INSERT INTO `default_ci_sessions` VALUES ('4c855d47f2b2fbf79956a6080289942d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378152794', '');
INSERT INTO `default_ci_sessions` VALUES ('dfb52fe2b52e73ea7f16cd838d5e2598', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378153757', '');
INSERT INTO `default_ci_sessions` VALUES ('94f4319bfbd4ce47838b9eb6cac8b6f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378153804', '');
INSERT INTO `default_ci_sessions` VALUES ('ed4ff96dcda0e26249eede852bc94891', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378153895', '');
INSERT INTO `default_ci_sessions` VALUES ('55990a883b94211107821d707b6a21c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154050', '');
INSERT INTO `default_ci_sessions` VALUES ('4fd10105a36f70233efe755287246d7b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154080', '');
INSERT INTO `default_ci_sessions` VALUES ('897d3d0b59c8e330decc8f405001255f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154112', '');
INSERT INTO `default_ci_sessions` VALUES ('ef16d4a2468fbd21ed169a09f817c291', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154222', '');
INSERT INTO `default_ci_sessions` VALUES ('73d26f28b6d6fa10b4c5eb550685e64f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154391', '');
INSERT INTO `default_ci_sessions` VALUES ('7ef47712986b131fa79dc3557d7e752b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154452', '');
INSERT INTO `default_ci_sessions` VALUES ('2322af9da961ad2e49e8793d4fdcb5f7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154529', '');
INSERT INTO `default_ci_sessions` VALUES ('f67ca54e0675696df71c13e11f7eb280', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154658', '');
INSERT INTO `default_ci_sessions` VALUES ('1534aba244112eeadc64dad828453c21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154829', '');
INSERT INTO `default_ci_sessions` VALUES ('83175adc6d4fe714589f4a8ce2edb771', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154864', '');
INSERT INTO `default_ci_sessions` VALUES ('ca4efd6510f5353ef81a23734c5409c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154881', '');
INSERT INTO `default_ci_sessions` VALUES ('cd6976b0c22f925e0e0e5bee5b1b70ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154909', '');
INSERT INTO `default_ci_sessions` VALUES ('d152edf8fd2e3a88738acdb131ba435c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378154993', '');
INSERT INTO `default_ci_sessions` VALUES ('a32152308f615c5f2a15776acf77b5ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378155385', '');
INSERT INTO `default_ci_sessions` VALUES ('2946e8e42ebef8311bf4af47cb442188', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378155496', '');
INSERT INTO `default_ci_sessions` VALUES ('80c9a4d302673ec024cc87c880798af6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378155545', '');
INSERT INTO `default_ci_sessions` VALUES ('446b43807329e1a43d57588d8c5802c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378156924', '');
INSERT INTO `default_ci_sessions` VALUES ('1d155f463f4fbfd24fdb37952543354a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157036', '');
INSERT INTO `default_ci_sessions` VALUES ('6fd3aca14a353e9f3799f1f6ca984751', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157077', '');
INSERT INTO `default_ci_sessions` VALUES ('309484e3fbaa5d9e3769ec66c80167ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157091', '');
INSERT INTO `default_ci_sessions` VALUES ('c6d2f2d2c298d415df1261a69fe62cc9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157099', '');
INSERT INTO `default_ci_sessions` VALUES ('7901c0f9adc0b31a6bc9928d693dcc48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157111', '');
INSERT INTO `default_ci_sessions` VALUES ('68581d290bcbff897e7aa093ccbcde20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157114', '');
INSERT INTO `default_ci_sessions` VALUES ('3464fe61416bd6a6a80f0dcbf83737c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157117', '');
INSERT INTO `default_ci_sessions` VALUES ('123fee366a8246574b2d8e8285db29ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157122', '');
INSERT INTO `default_ci_sessions` VALUES ('ca61cb0cbe84da6448d414f859a7f612', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157133', '');
INSERT INTO `default_ci_sessions` VALUES ('47429034e03119513ecfb6431e67e090', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157164', '');
INSERT INTO `default_ci_sessions` VALUES ('57fb29e3b0ecad57e9db2b3318e634ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378157252', '');
INSERT INTO `default_ci_sessions` VALUES ('31e69baa7c8433d8aecf925357f949ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211713', '');
INSERT INTO `default_ci_sessions` VALUES ('83fef52a31ebb5770b8860ab8db9c83e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211713', '');
INSERT INTO `default_ci_sessions` VALUES ('39c15057cec99a36dd2e7229a30d925c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211714', '');
INSERT INTO `default_ci_sessions` VALUES ('e364b2218004c99096bf3b5794a2a246', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211715', '');
INSERT INTO `default_ci_sessions` VALUES ('47d59a318e4e72ad52afacda28e5b9e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211716', '');
INSERT INTO `default_ci_sessions` VALUES ('e3a0ba170cdeea69c5cf1335c18a2506', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211717', '');
INSERT INTO `default_ci_sessions` VALUES ('8cf0258ddf2e3706a44066ed31f190cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211717', '');
INSERT INTO `default_ci_sessions` VALUES ('4307a44382a3934d322b0753f4be01f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211718', '');
INSERT INTO `default_ci_sessions` VALUES ('79091fe64581f2dca7d47f47894d8430', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211720', '');
INSERT INTO `default_ci_sessions` VALUES ('7dfdc128bab52b93fc7078c62b141a47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211720', '');
INSERT INTO `default_ci_sessions` VALUES ('0692d65e52df860bfeaa74687b803c52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211721', '');
INSERT INTO `default_ci_sessions` VALUES ('d491735932864fc2d4b85cb54e8f5ef0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211721', '');
INSERT INTO `default_ci_sessions` VALUES ('8baf160cea3e50dc114b206741cb3d9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211721', '');
INSERT INTO `default_ci_sessions` VALUES ('d1b5d88195eb1783948731757c59ca6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211722', '');
INSERT INTO `default_ci_sessions` VALUES ('b2d46e1894f7732c14870853704524fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211722', '');
INSERT INTO `default_ci_sessions` VALUES ('bcae1c738697dd73c519c7ec99f14001', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211722', '');
INSERT INTO `default_ci_sessions` VALUES ('085f4356cc694c29352edc0d61756d77', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211723', '');
INSERT INTO `default_ci_sessions` VALUES ('fe98a26a022b494f7b9142c3302d4022', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211723', '');
INSERT INTO `default_ci_sessions` VALUES ('03b689b75474d0284b3061ca4a442bea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211723', '');
INSERT INTO `default_ci_sessions` VALUES ('263a6733145d5348b8da776c004451e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211724', '');
INSERT INTO `default_ci_sessions` VALUES ('cf848a22d3673e0b932fc75fd10c9278', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211724', '');
INSERT INTO `default_ci_sessions` VALUES ('f3afe3c703e92421d37373ae044fc428', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211725', '');
INSERT INTO `default_ci_sessions` VALUES ('40cadc04b344d555fe0f7c4549c4c62d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211725', '');
INSERT INTO `default_ci_sessions` VALUES ('6c908a551fc008c8dcec67d8145a4dea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211725', '');
INSERT INTO `default_ci_sessions` VALUES ('2df4c2ffae4241bf677f57a2a3cdbee7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211726', '');
INSERT INTO `default_ci_sessions` VALUES ('9e3cf9d5a85a0f56c8d26f44334d7c24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211726', '');
INSERT INTO `default_ci_sessions` VALUES ('4e672bd64ac7f1d909846800fa001a67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211726', '');
INSERT INTO `default_ci_sessions` VALUES ('5cf0f87747f2324c705b4ce7188063c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211727', '');
INSERT INTO `default_ci_sessions` VALUES ('8f86ae85220ce4d786c4483720ab375c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211727', '');
INSERT INTO `default_ci_sessions` VALUES ('146bc4f56a3e16d955ac49bf852a3ce1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211727', '');
INSERT INTO `default_ci_sessions` VALUES ('62c8520a56b7fed2a9b16164d367f6c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211728', '');
INSERT INTO `default_ci_sessions` VALUES ('db6c06c1539fd7d7b89f915a2c6f6d99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211728', '');
INSERT INTO `default_ci_sessions` VALUES ('34bc9de779da8cafdf337b85ec7ba406', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211728', '');
INSERT INTO `default_ci_sessions` VALUES ('f16907eebaaf9336c2b919ddaaa35740', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211729', '');
INSERT INTO `default_ci_sessions` VALUES ('4de677edf409df8473625c33cd50bdbf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211729', '');
INSERT INTO `default_ci_sessions` VALUES ('03d704ebbab2d942f0b3989e5795abb6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211730', '');
INSERT INTO `default_ci_sessions` VALUES ('2cdc80fb02cd88e6c00613d90799b4bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211730', '');
INSERT INTO `default_ci_sessions` VALUES ('a06a3a52dcf5996e643743ccb3dacd28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211730', '');
INSERT INTO `default_ci_sessions` VALUES ('f050acca4b08b6b908aa8c3cdf11905c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211730', '');
INSERT INTO `default_ci_sessions` VALUES ('d8b613a226ff1df1bea48a7d1ee0209a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211731', '');
INSERT INTO `default_ci_sessions` VALUES ('6f40d60a035302848f95c68406f97214', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211731', '');
INSERT INTO `default_ci_sessions` VALUES ('463132ef7d5842a6af7bc2837997f255', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211731', '');
INSERT INTO `default_ci_sessions` VALUES ('b0a0659c3cd2f629840d40721e0f2c96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211732', '');
INSERT INTO `default_ci_sessions` VALUES ('58a118503f4cde21059dd79a1d68e344', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211732', '');
INSERT INTO `default_ci_sessions` VALUES ('c36e18eabe69eada755984bdfc2b4de0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211732', '');
INSERT INTO `default_ci_sessions` VALUES ('372f66f0ec19570c98653423e94fdd99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211733', '');
INSERT INTO `default_ci_sessions` VALUES ('51a36eab314160f33bebe2f84264d6c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211733', '');
INSERT INTO `default_ci_sessions` VALUES ('a96f0322d65d407d49bd55f8022a93b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211733', '');
INSERT INTO `default_ci_sessions` VALUES ('7a588c76a914f5632f9f1ba185b3d9ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211734', '');
INSERT INTO `default_ci_sessions` VALUES ('fa0b74bd29aefb5b73a7c58be792de4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211734', '');
INSERT INTO `default_ci_sessions` VALUES ('794222691526a415443f9f123b80264d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211734', '');
INSERT INTO `default_ci_sessions` VALUES ('15248a8246830c70eb016088b773bbb4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211734', '');
INSERT INTO `default_ci_sessions` VALUES ('1df892840d781c823159e22d4cee0322', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211735', '');
INSERT INTO `default_ci_sessions` VALUES ('6f524719a58ae7a405642d9efbd79c0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211735', '');
INSERT INTO `default_ci_sessions` VALUES ('10dd2608f21d901f5ae172a002b4895d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211735', '');
INSERT INTO `default_ci_sessions` VALUES ('52661cf65c69f0c229b6e07bf57fee1e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211736', '');
INSERT INTO `default_ci_sessions` VALUES ('10fc2971f3059a289c732737d7460319', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211736', '');
INSERT INTO `default_ci_sessions` VALUES ('0d58334e0aa394fec331bd8a872647d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211736', '');
INSERT INTO `default_ci_sessions` VALUES ('f16f5a142cd76ced728d8c5f1f33ac8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211737', '');
INSERT INTO `default_ci_sessions` VALUES ('b290feed2cdecc36971697dc33e4009f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211737', '');
INSERT INTO `default_ci_sessions` VALUES ('9297a77431bbca7dbf5f2f7512157fbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211737', '');
INSERT INTO `default_ci_sessions` VALUES ('26e9bf497552bcac2c50cb2e481d65a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211738', '');
INSERT INTO `default_ci_sessions` VALUES ('df1ad1b416c7b6e9323a089675d6f37b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211738', '');
INSERT INTO `default_ci_sessions` VALUES ('f7c73b5fac849d2ae2fb688f80b2dc7f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211738', '');
INSERT INTO `default_ci_sessions` VALUES ('d2140ef3009c2c309da95d44ea053ed4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211739', '');
INSERT INTO `default_ci_sessions` VALUES ('87c6224087e2dda70fda19a9ebdffaf1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211739', '');
INSERT INTO `default_ci_sessions` VALUES ('eabe2383f799c5b3ac4bf6e697450783', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211739', '');
INSERT INTO `default_ci_sessions` VALUES ('d795a6348da1ddc3040e30b58cf403f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211739', '');
INSERT INTO `default_ci_sessions` VALUES ('b1bf094370221a90658ebeb8e523231c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211740', '');
INSERT INTO `default_ci_sessions` VALUES ('cecead9b49ddb4b4652c46d914b16010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211740', '');
INSERT INTO `default_ci_sessions` VALUES ('690dd5fa004ef32114c7f86376182e17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211740', '');
INSERT INTO `default_ci_sessions` VALUES ('33c5b5f68496c82abdf854294c7afd54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211741', '');
INSERT INTO `default_ci_sessions` VALUES ('40ad16eb9c6acedffeb603a26835a9fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211741', '');
INSERT INTO `default_ci_sessions` VALUES ('8c909abbe515ddf260dddc2fa4577007', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211741', '');
INSERT INTO `default_ci_sessions` VALUES ('04570972115db911e3c646f2e783fab9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211742', '');
INSERT INTO `default_ci_sessions` VALUES ('72199b88d18a766ffb50e75cec948bb5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211742', '');
INSERT INTO `default_ci_sessions` VALUES ('6d7a1d080d7d98f59a0bf55b02d12e91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211742', '');
INSERT INTO `default_ci_sessions` VALUES ('ce7365d5f3475dd9a740e23a1efec278', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211742', '');
INSERT INTO `default_ci_sessions` VALUES ('b99614f9dfca343bb52e72cccaecb989', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211743', '');
INSERT INTO `default_ci_sessions` VALUES ('8dca6f1c8dd111691efd15a4bd8ebbc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211743', '');
INSERT INTO `default_ci_sessions` VALUES ('b2ad577a6124b28d42baf672c2694e44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211743', '');
INSERT INTO `default_ci_sessions` VALUES ('98ff2a6dbee222174d099615a560665c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211744', '');
INSERT INTO `default_ci_sessions` VALUES ('de2a05ebbe98c59cfb93474a9043379b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211744', '');
INSERT INTO `default_ci_sessions` VALUES ('e93c84846c6bae844f291097249e724a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211744', '');
INSERT INTO `default_ci_sessions` VALUES ('588256e5844e1f822d6f7f0b6820cde7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211745', '');
INSERT INTO `default_ci_sessions` VALUES ('e2c7957a4141e2c22388927e88da6521', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211745', '');
INSERT INTO `default_ci_sessions` VALUES ('a02f51e6ae80d989bb0b368b3a287f24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211745', '');
INSERT INTO `default_ci_sessions` VALUES ('af1b5c1ff15261153d21407c586fa4e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211745', '');
INSERT INTO `default_ci_sessions` VALUES ('e5c3b47dbbaac5eb268580bc78cdcd94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211746', '');
INSERT INTO `default_ci_sessions` VALUES ('7585fc02bbcb128b20efc5aa4202553c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211746', '');
INSERT INTO `default_ci_sessions` VALUES ('5cb9bc9d7d76cf135c0a45fba784e5ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211746', '');
INSERT INTO `default_ci_sessions` VALUES ('a8f225eae3ffc14326bff1f8f001188f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211747', '');
INSERT INTO `default_ci_sessions` VALUES ('d33162da642068a4476e247f1f758f2d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211747', '');
INSERT INTO `default_ci_sessions` VALUES ('4d3fba440ae38b80040af221074d8912', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211747', '');
INSERT INTO `default_ci_sessions` VALUES ('3b4188fdafee58ad92c7dab1cb281031', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211747', '');
INSERT INTO `default_ci_sessions` VALUES ('77755a95145ed1801a13570dd2cdf86a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211747', '');
INSERT INTO `default_ci_sessions` VALUES ('b76f47586f576258ccd6e5f7f45142a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('8e5620a6b7794f8fae996b5738855a66', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('3f3d81f4b8b7a6298a107b7ba77ca082', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('d8566b5bfe43b64c128fca58370dba9d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('11505909bfef35b13107967d39fde925', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('61481f9e66a877b3470f5dddfa0125af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('1352abcc137783852ad491814ae4bf9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('4fff3460cfea605719970eb07cf0a0e0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211748', '');
INSERT INTO `default_ci_sessions` VALUES ('3f6d8571590632a74558d05738fe1167', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('5998754dc8ec4bc14ffb903f9122b3b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('73b69001810292a899b3d38c0cbe0523', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('435dbf1b0dae72de76c496cc1f85ca4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('b9dba1d1697a468e76b60ab6c04b9a90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('f42418f2971028946618ba8baa478cc8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('25fc231c6f95a2b1b04aa96281b48c5f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('3a152080f4f9eda45d7de06bc531b068', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('0d992ad5ca897958e7e9372a371e0af7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211749', '');
INSERT INTO `default_ci_sessions` VALUES ('863c286104bf95ded89ba1575b7da1a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211750', '');
INSERT INTO `default_ci_sessions` VALUES ('5f64609f90872e89a1adec79ccd5dfe6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211750', '');
INSERT INTO `default_ci_sessions` VALUES ('13687163a6a8a0b7c7e9537e8eae08ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211750', '');
INSERT INTO `default_ci_sessions` VALUES ('b4e8326a0cfed6910f4470f3c945a0ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211751', '');
INSERT INTO `default_ci_sessions` VALUES ('8da58bebc8c0765cba4fe3f6845bd616', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211751', '');
INSERT INTO `default_ci_sessions` VALUES ('ad4f092bf3c5ee3cd64ee7d462eeca97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211751', '');
INSERT INTO `default_ci_sessions` VALUES ('f0ddbe04fb3b0017ddf3f960c4c481e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211752', '');
INSERT INTO `default_ci_sessions` VALUES ('04111c817ecb59780991ccaacc560dc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211752', '');
INSERT INTO `default_ci_sessions` VALUES ('5639bdf8e33ea909b2f865396bb1c189', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211752', '');
INSERT INTO `default_ci_sessions` VALUES ('74066c1bd99bfaa3316f0b863b7b5f87', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211753', '');
INSERT INTO `default_ci_sessions` VALUES ('421c52b66be5ac377cf573d24b4596c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211753', '');
INSERT INTO `default_ci_sessions` VALUES ('280defa19789128ba5301008f6cda977', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211753', '');
INSERT INTO `default_ci_sessions` VALUES ('52c005090b73ae80a4624c590349228d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211753', '');
INSERT INTO `default_ci_sessions` VALUES ('2218ef1d6a7afc602aeddb3352c4d909', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211754', '');
INSERT INTO `default_ci_sessions` VALUES ('f14c7c0bc95e2bbffd2b7e73ca2ef2e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211754', '');
INSERT INTO `default_ci_sessions` VALUES ('b1a908fb70daf7d0b1a81cf31ffdf442', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211754', '');
INSERT INTO `default_ci_sessions` VALUES ('88fb1c24e02b8eef972403a9d782717a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211755', '');
INSERT INTO `default_ci_sessions` VALUES ('b29fbc520cbe2570dbba8765336e2f28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211755', '');
INSERT INTO `default_ci_sessions` VALUES ('e1fd17f796f9e1d5b446a446c7ebf167', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211755', '');
INSERT INTO `default_ci_sessions` VALUES ('078ce91c3f954c8af31ec9a30a25dd6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211756', '');
INSERT INTO `default_ci_sessions` VALUES ('cfe8e49fc69b80c6f6653180030f7d57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211756', '');
INSERT INTO `default_ci_sessions` VALUES ('714bfb133923f0704619ea61ab783a80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211756', '');
INSERT INTO `default_ci_sessions` VALUES ('64e6a9baac74d27c5b301b7847fec4c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211756', '');
INSERT INTO `default_ci_sessions` VALUES ('195a6894db5fd7f5bf81f3f923225d5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211757', '');
INSERT INTO `default_ci_sessions` VALUES ('125f98838575ca47edc53bed56559122', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211757', '');
INSERT INTO `default_ci_sessions` VALUES ('2dbf0ac65d245a32cf55fe5756a443e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211757', '');
INSERT INTO `default_ci_sessions` VALUES ('5d1aeb42e832a222ac538329f5b94f48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211758', '');
INSERT INTO `default_ci_sessions` VALUES ('f52c5a032a9a61a2dcbd45db78b612e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211758', '');
INSERT INTO `default_ci_sessions` VALUES ('59dd323e7923811e724be5cfad7dafbc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211758', '');
INSERT INTO `default_ci_sessions` VALUES ('4eb1a9aa72c2462727c745ff1e0353ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211759', '');
INSERT INTO `default_ci_sessions` VALUES ('27705fceb66bbb7c3a1ef567f9814635', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211759', '');
INSERT INTO `default_ci_sessions` VALUES ('363bdbe6b31b50e96d36fef961c68ce3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211759', '');
INSERT INTO `default_ci_sessions` VALUES ('ccc8707f9a83de6e3ee8230c928f5705', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211759', '');
INSERT INTO `default_ci_sessions` VALUES ('7bb911d54fcc68d9ae1d9253cf7d37e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211760', '');
INSERT INTO `default_ci_sessions` VALUES ('b0bb8d99a32632cf10b710bf53e70739', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211760', '');
INSERT INTO `default_ci_sessions` VALUES ('b732b7368cec7c098a37ff30b61e3dc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211760', '');
INSERT INTO `default_ci_sessions` VALUES ('ce1ea7da959c88285174a223352e718f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211761', '');
INSERT INTO `default_ci_sessions` VALUES ('68e403a78c556a673883125049daa3b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211761', '');
INSERT INTO `default_ci_sessions` VALUES ('227bc88df7c4f4b75924aeacf7f901f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211761', '');
INSERT INTO `default_ci_sessions` VALUES ('1027ef217a2a858d4e76d0628fd312b7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211761', '');
INSERT INTO `default_ci_sessions` VALUES ('bf62374680039a03c9c00053d6d31d94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211762', '');
INSERT INTO `default_ci_sessions` VALUES ('32552b3f674397b8b91e87ebe6c66f67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211762', '');
INSERT INTO `default_ci_sessions` VALUES ('e3065d9a66c072a478b3df6210388a91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211762', '');
INSERT INTO `default_ci_sessions` VALUES ('3c758a49eac6995dd3c55a817a4341db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211763', '');
INSERT INTO `default_ci_sessions` VALUES ('26d1e33bd60221df16ea8ebc68ea5e97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211763', '');
INSERT INTO `default_ci_sessions` VALUES ('51ea843ae55ddd2ca3b6d846ad512d5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211763', '');
INSERT INTO `default_ci_sessions` VALUES ('dca819f4d65b00926f96a73510b1f240', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211764', '');
INSERT INTO `default_ci_sessions` VALUES ('6ec8b69ba5b8e61d7ed8e6fe2e91a225', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211764', '');
INSERT INTO `default_ci_sessions` VALUES ('1490f2d8f3264440c090edd5c61420c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211764', '');
INSERT INTO `default_ci_sessions` VALUES ('c3dbaa424a890b080b058dbffd07b038', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211764', '');
INSERT INTO `default_ci_sessions` VALUES ('e0500f2d96d47054d8bb1b31398a2fb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211765', '');
INSERT INTO `default_ci_sessions` VALUES ('d6571f867bc2fe09d1cdd81f4b56cdf5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211765', '');
INSERT INTO `default_ci_sessions` VALUES ('2304731d83e7441a94996975333dd993', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211765', '');
INSERT INTO `default_ci_sessions` VALUES ('38fd11cb2132bc299b830abc23d1c1cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211766', '');
INSERT INTO `default_ci_sessions` VALUES ('141f185aa1e717d5752e694425e30fa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211766', '');
INSERT INTO `default_ci_sessions` VALUES ('2fdf5d01a683f6f002a5198cf018b701', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211766', '');
INSERT INTO `default_ci_sessions` VALUES ('a396c419ab552306add37fa92326f244', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211767', '');
INSERT INTO `default_ci_sessions` VALUES ('3d800d6fc0a639a68d21b9a458ff23f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211767', '');
INSERT INTO `default_ci_sessions` VALUES ('89a10bfdecbd158c94e42421938278fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211767', '');
INSERT INTO `default_ci_sessions` VALUES ('96f9d41d2256d8332ffcced585fea9d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211767', '');
INSERT INTO `default_ci_sessions` VALUES ('32ac17d02fe1a7227d0bf69e2b6c3c76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211768', '');
INSERT INTO `default_ci_sessions` VALUES ('c134cd309f5d7f5e90c1eb6d0068a671', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211768', '');
INSERT INTO `default_ci_sessions` VALUES ('3d7dc1ef79b1c1d59f534b2a7ba344c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211768', '');
INSERT INTO `default_ci_sessions` VALUES ('04ad70db5b05edfbe69fb8bb1c789eaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211769', '');
INSERT INTO `default_ci_sessions` VALUES ('4a63e1720af85303a913da52f1906077', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211769', '');
INSERT INTO `default_ci_sessions` VALUES ('1aa761a332e33d4ae31ece04f7def0b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211769', '');
INSERT INTO `default_ci_sessions` VALUES ('6e16fc2389e876399ea9bd83413f87a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211769', '');
INSERT INTO `default_ci_sessions` VALUES ('87e8c783ebed5116212b314b332dcc32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211770', '');
INSERT INTO `default_ci_sessions` VALUES ('8597903fb28dab9230ffb2519b9c639e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211770', '');
INSERT INTO `default_ci_sessions` VALUES ('9bf083d29ed73c1dad0f438298a6a764', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211770', '');
INSERT INTO `default_ci_sessions` VALUES ('5055c992710276dc14fc7faacf2a8297', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211771', '');
INSERT INTO `default_ci_sessions` VALUES ('57bff56a7cdf9317a52305c7a7000761', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211771', '');
INSERT INTO `default_ci_sessions` VALUES ('f8137df8de097e2c2f1b3d4ce39ef0dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211771', '');
INSERT INTO `default_ci_sessions` VALUES ('adea60813ff338b581406e1f4e1b9711', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211772', '');
INSERT INTO `default_ci_sessions` VALUES ('187ce52ed8ca214ef7a3b6479d933c79', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211772', '');
INSERT INTO `default_ci_sessions` VALUES ('5f4ac4627e3829c9914fed460e6ffeab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211772', '');
INSERT INTO `default_ci_sessions` VALUES ('edc08deb4714eaed6bfcb0ed907b7df7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211772', '');
INSERT INTO `default_ci_sessions` VALUES ('ac170bf816cd75a3913962fbc82b44bc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211773', '');
INSERT INTO `default_ci_sessions` VALUES ('e59c65198a7f3767f6fd41f53ce8cb6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211773', '');
INSERT INTO `default_ci_sessions` VALUES ('af61e8c31405e236dfa2d86fb95a6498', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211773', '');
INSERT INTO `default_ci_sessions` VALUES ('5437e456011e91a03d704d972f89f4cb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211774', '');
INSERT INTO `default_ci_sessions` VALUES ('4c3871a8642b4f8fd59d70faf19166cb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211774', '');
INSERT INTO `default_ci_sessions` VALUES ('fb2d17dc09c8289c7ec4027b9bb3eb3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211774', '');
INSERT INTO `default_ci_sessions` VALUES ('14cd7076ccf6c87ba196c0151c63be8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211774', '');
INSERT INTO `default_ci_sessions` VALUES ('345e783bd8a116d2a4699d34b176acc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211775', '');
INSERT INTO `default_ci_sessions` VALUES ('9174e61db2f0c3b82018342ef2fee057', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211775', '');
INSERT INTO `default_ci_sessions` VALUES ('1cb25a6eb88568d2800141798e819a9a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211775', '');
INSERT INTO `default_ci_sessions` VALUES ('49e89db882c6fafddfe0a518a0338cdc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211776', '');
INSERT INTO `default_ci_sessions` VALUES ('b2d0696deaa50ba9821d552f13deb0f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211776', '');
INSERT INTO `default_ci_sessions` VALUES ('acfbe146f578dd6ca258a71009ec3e22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211776', '');
INSERT INTO `default_ci_sessions` VALUES ('39e024debec8f50d16a5acbf82418b0d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211776', '');
INSERT INTO `default_ci_sessions` VALUES ('eee02a717bdecad9d4c35bce856bdfb8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211777', '');
INSERT INTO `default_ci_sessions` VALUES ('dc8f96bfd3c880b145b697ef07d83013', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211777', '');
INSERT INTO `default_ci_sessions` VALUES ('a9c6bb508a2489c540508d764192065e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211777', '');
INSERT INTO `default_ci_sessions` VALUES ('7f6cb9645f31696322cbae3b13a17a59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('07f2b076713515ae2b49d086475f36fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('1138eb8e0746ca8109375c0b8b35b313', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('551a22574925a8032ae62813732e33eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('f7aa178c479980bb758635aaab047814', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('389aa2f39a4756745c055c4b1c008883', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('85bfd9d45d7cbd55f716a50e128b2975', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('cffd7fd9fa219f497644cf4856e75893', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('35cb27fd1655af606b182cb8eb54c349', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('e98890a369b378ef1ea15b73891ec9cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211778', '');
INSERT INTO `default_ci_sessions` VALUES ('b647eb754ebed9487c23eb0c9fb83331', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('23edf30d1eb9a8b9e5a5053d3d0630aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('d45e492b25ba3b77995882f7e3dd03bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('d615083e25f4d3d9cc1c94adb22d86a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('11ef3f01e183f4673fc645bdfec87c5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('65979e3b862b65faf9d255bc6a97eb13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('c23829d0031bfd908376cb174b570082', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('3b2e57a21b92e1aa6f59883ee69bf3a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('f74b8970c774086df1cbb7a6340f9b6d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('cca390ce0b02086e6c48146efcb1775c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('a3408cba03bcff908e6c24f857165ec6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211779', '');
INSERT INTO `default_ci_sessions` VALUES ('516461fab3e868d74be547bdae8ceb03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('88baf76c8c648562bc867edb547e60c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('91aadff5d007b61c4a45a751798d4ab6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('535070f132cf37992beac6cf74e55b5d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('08521ffd1272aff61562a916c150ca40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('947ce3c803990a9ce9f8b35f09111818', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('af51765d95d22938319b32d0c51c8c05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211780', '');
INSERT INTO `default_ci_sessions` VALUES ('db955ab8e278c8f3f1c862348e7488b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211781', '');
INSERT INTO `default_ci_sessions` VALUES ('7663c9d24925697464dcddfe08008677', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211781', '');
INSERT INTO `default_ci_sessions` VALUES ('35a04e26e67e1fd91747153181e058b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211781', '');
INSERT INTO `default_ci_sessions` VALUES ('39ce60ead3276a161aa60af9ccfffbef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211781', '');
INSERT INTO `default_ci_sessions` VALUES ('7d150852c99b2fa5eeb27c2934980b37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211782', '');
INSERT INTO `default_ci_sessions` VALUES ('90f38d2ecf1ffcc818e99e39c34da083', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211782', '');
INSERT INTO `default_ci_sessions` VALUES ('4837df29efd6ccc9cab7f2c819bc6e3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211782', '');
INSERT INTO `default_ci_sessions` VALUES ('a121b89c4c886c3e76ef488951ca40ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211783', '');
INSERT INTO `default_ci_sessions` VALUES ('73d03d5ab9eb559abccac65549e44dab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211783', '');
INSERT INTO `default_ci_sessions` VALUES ('84fb3183a38dc8441f46f3b1e9685107', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211783', '');
INSERT INTO `default_ci_sessions` VALUES ('3af042ecc5ae8c8f23fc50e5df108032', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211783', '');
INSERT INTO `default_ci_sessions` VALUES ('1a44d0e143308862b287d5f532f2be2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211784', '');
INSERT INTO `default_ci_sessions` VALUES ('aceb8caef12fd5248f332518c2493eb5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211784', '');
INSERT INTO `default_ci_sessions` VALUES ('178c58287efa8bd03c31449c3b5231f7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211784', '');
INSERT INTO `default_ci_sessions` VALUES ('4814efd09877e12e6cdc104438731e64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211785', '');
INSERT INTO `default_ci_sessions` VALUES ('8499909752632cc7e963ab7a600779b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211785', '');
INSERT INTO `default_ci_sessions` VALUES ('ced083d17764a7faaff3f81355d20369', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211785', '');
INSERT INTO `default_ci_sessions` VALUES ('64da79f28116d65719a6c1c8ce03a53e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211785', '');
INSERT INTO `default_ci_sessions` VALUES ('835dcfffba8e98c5ce9afe0bc8b1cad7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211786', '');
INSERT INTO `default_ci_sessions` VALUES ('6a0f3e4cd4d410db72c12dd87091eef9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211786', '');
INSERT INTO `default_ci_sessions` VALUES ('cf1672da5dde773fa57798efff900bbc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211786', '');
INSERT INTO `default_ci_sessions` VALUES ('fca9ea0e8dec70af831418afe4444dab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211787', '');
INSERT INTO `default_ci_sessions` VALUES ('beb1c6801d0fcebcb793c86edf1d3bac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211787', '');
INSERT INTO `default_ci_sessions` VALUES ('3f0690fc9f997f92bb39c5b806fd8faa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211787', '');
INSERT INTO `default_ci_sessions` VALUES ('d752f482e19230b8c81ace2abecf4543', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211788', '');
INSERT INTO `default_ci_sessions` VALUES ('a130dbec2808969624166fc978b60c56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211788', '');
INSERT INTO `default_ci_sessions` VALUES ('01560e73f75f22dc4b481bb28131dbd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211788', '');
INSERT INTO `default_ci_sessions` VALUES ('207c1684430b7929142630b3ec3b7092', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211788', '');
INSERT INTO `default_ci_sessions` VALUES ('2efe4253d01cf83d9fb00cdef6c300b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211789', '');
INSERT INTO `default_ci_sessions` VALUES ('40e150105c95264ae96d96ed52095e45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211789', '');
INSERT INTO `default_ci_sessions` VALUES ('92de9dbaa5f90263d1057798a26785c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211789', '');
INSERT INTO `default_ci_sessions` VALUES ('9281e401372c0437fe37abb04bb2052c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211790', '');
INSERT INTO `default_ci_sessions` VALUES ('856db68cbf27fce8c883bba2aed6ac27', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211790', '');
INSERT INTO `default_ci_sessions` VALUES ('61c1b0c3daf80b12b40bea100b7d1d87', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211790', '');
INSERT INTO `default_ci_sessions` VALUES ('12f2ba95ff3827baa5d812b1516240a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211790', '');
INSERT INTO `default_ci_sessions` VALUES ('4070209d6d86f17a1fff78df9cdac9b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211791', '');
INSERT INTO `default_ci_sessions` VALUES ('b59013f7733c0c9d8f4bcd97001c2be5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211791', '');
INSERT INTO `default_ci_sessions` VALUES ('038c8922d416882f26117d61acfcefad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211791', '');
INSERT INTO `default_ci_sessions` VALUES ('78e2d5a6dcfe82eeaefcc946c128c0a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211792', '');
INSERT INTO `default_ci_sessions` VALUES ('fe07800bfc0d3c4ca75d17d5f8c02a9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211792', '');
INSERT INTO `default_ci_sessions` VALUES ('115f09328f0b2577dbada468c8b496b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211792', '');
INSERT INTO `default_ci_sessions` VALUES ('74777f18790e7fda302275d53dc0532d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211792', '');
INSERT INTO `default_ci_sessions` VALUES ('6e3c777763cbf342273302df16427b74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211793', '');
INSERT INTO `default_ci_sessions` VALUES ('23ad73a2f02212260c7f21ad8537d610', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211793', '');
INSERT INTO `default_ci_sessions` VALUES ('eebaaa5f286dfb43485b132a68b4d1e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211793', '');
INSERT INTO `default_ci_sessions` VALUES ('cd9968765de60a5f221c071dff085b8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211794', '');
INSERT INTO `default_ci_sessions` VALUES ('9d395c46606a75effdde441050c428c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211794', '');
INSERT INTO `default_ci_sessions` VALUES ('5dbe86c044b9d9e3970a1d10c54fd3a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211794', '');
INSERT INTO `default_ci_sessions` VALUES ('6ae185b8981ac577534592d7d9baaaca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211794', '');
INSERT INTO `default_ci_sessions` VALUES ('4ab6104da9746702c80faa8233a4f7e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211795', '');
INSERT INTO `default_ci_sessions` VALUES ('34ea247a8b2d1728a68eea226f839029', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211795', '');
INSERT INTO `default_ci_sessions` VALUES ('78fde3b427320f9dbfab15d2ea99c939', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211795', '');
INSERT INTO `default_ci_sessions` VALUES ('0a48fa082bfcb817499dde23cb92f5aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211796', '');
INSERT INTO `default_ci_sessions` VALUES ('ec18c08d8228f84c351fa897c2cbf0c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211796', '');
INSERT INTO `default_ci_sessions` VALUES ('4e3183a569cc5159874aba986dcce07e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211796', '');
INSERT INTO `default_ci_sessions` VALUES ('578453ca1c92b9ef3e0d0b8824069351', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211796', '');
INSERT INTO `default_ci_sessions` VALUES ('3121209148c5a06973ca6c4334a22aea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211797', '');
INSERT INTO `default_ci_sessions` VALUES ('3259a26badba73ac49f73c62fd8d0756', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211797', '');
INSERT INTO `default_ci_sessions` VALUES ('5da7e9be004e3c291485b222ef7ba0af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211797', '');
INSERT INTO `default_ci_sessions` VALUES ('91051831969842dada5a655ca363aa32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211798', '');
INSERT INTO `default_ci_sessions` VALUES ('229154aa38380cc6073f086ce1af1c48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211798', '');
INSERT INTO `default_ci_sessions` VALUES ('7371e6758c8939e887b5b253a1d1535f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211798', '');
INSERT INTO `default_ci_sessions` VALUES ('f5db2b35f8ea11f9b277692912ed726f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211798', '');
INSERT INTO `default_ci_sessions` VALUES ('ba40730a754afab6cc1d4d5a4f1cd9ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211799', '');
INSERT INTO `default_ci_sessions` VALUES ('2118f071ab82f241bacdd049fd0642a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211799', '');
INSERT INTO `default_ci_sessions` VALUES ('56a4fa0d7542946188ffea1a2f1cdc81', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211799', '');
INSERT INTO `default_ci_sessions` VALUES ('dd52a141ddd9959e9ad6955e33b5b0f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211800', '');
INSERT INTO `default_ci_sessions` VALUES ('99a4ee2c6a7bcb99375136b2b0ef6757', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211800', '');
INSERT INTO `default_ci_sessions` VALUES ('34934a0b0e20032b358147297a7e1a68', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378211800', '');
INSERT INTO `default_ci_sessions` VALUES ('b53d046931169b994d7a7dcb030ea0d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378215859', '');
INSERT INTO `default_ci_sessions` VALUES ('12feb5a9f56d214f3b0658127f3a30b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378215798', '');
INSERT INTO `default_ci_sessions` VALUES ('7226fba1fd6ad99485a0745d46a8dcd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378213128', '');
INSERT INTO `default_ci_sessions` VALUES ('8f9002f0d164ce9ed769234d976f139b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378212626', '');
INSERT INTO `default_ci_sessions` VALUES ('96dac1eb2a79c589f54434b4cbaed412', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378220371', '');
INSERT INTO `default_ci_sessions` VALUES ('a5a79fb0cb7371c730a8fd147c5fdf7d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378213134', '');
INSERT INTO `default_ci_sessions` VALUES ('074a4a358c0ad4685711cc00cee3f533', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378213155', '');
INSERT INTO `default_ci_sessions` VALUES ('300cf3e596be9dd4270c9ff957beb26b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378216738', '');
INSERT INTO `default_ci_sessions` VALUES ('b0907afaa799f128c2d54b19deeafe1b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378216997', '');
INSERT INTO `default_ci_sessions` VALUES ('a353b43ecf2fa5c535cf784e321dfbfa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217160', '');
INSERT INTO `default_ci_sessions` VALUES ('ad9e70684317fb00d6d6d9de143e4313', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217253', '');
INSERT INTO `default_ci_sessions` VALUES ('c8987438d9219e7535d36a56dc720bd2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217353', '');
INSERT INTO `default_ci_sessions` VALUES ('cce93dd3925eae90987a00df61c607cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217399', '');
INSERT INTO `default_ci_sessions` VALUES ('f7d10c59891d1928e7f7d92c932370b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217608', '');
INSERT INTO `default_ci_sessions` VALUES ('621fe339cf0d4f95562d10051b60d7b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217711', '');
INSERT INTO `default_ci_sessions` VALUES ('9c7fb52376c656668b6af9953e73f5dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217833', '');
INSERT INTO `default_ci_sessions` VALUES ('17b18a4f376fb835612c4ed6e3346a74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217857', '');
INSERT INTO `default_ci_sessions` VALUES ('70db3f777a2a4afa49d417a46e02c299', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378217914', '');
INSERT INTO `default_ci_sessions` VALUES ('1c71709535b866dbdfbab6b751c7fcc6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218022', '');
INSERT INTO `default_ci_sessions` VALUES ('6cf42ae1c980f85f5f6d1099fb9b1763', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218353', '');
INSERT INTO `default_ci_sessions` VALUES ('51924c5455f5dc99d7e4fcda57624728', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218387', '');
INSERT INTO `default_ci_sessions` VALUES ('ac4a38981b68bccc2e635402b921bd6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218437', '');
INSERT INTO `default_ci_sessions` VALUES ('cf182817e408901025aab96afe2824e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218536', '');
INSERT INTO `default_ci_sessions` VALUES ('bc88d439abde781c42f5efbe2bfc98cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218590', '');
INSERT INTO `default_ci_sessions` VALUES ('7e58056efef05b09a4c8be1a71ea8aa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218625', '');
INSERT INTO `default_ci_sessions` VALUES ('51c1470fe75aef27e7db2c55b5d9ab67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218665', '');
INSERT INTO `default_ci_sessions` VALUES ('2327a126574c495693063d132c4cc4ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218696', '');
INSERT INTO `default_ci_sessions` VALUES ('2fe9971a5838b865de719caa6aa6f1e2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218757', '');
INSERT INTO `default_ci_sessions` VALUES ('3a53bd4d142603cc1bfb5319cc4af280', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378218766', '');
INSERT INTO `default_ci_sessions` VALUES ('57b9949c432cdab8db3b9fbb7993a6ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378219517', '');
INSERT INTO `default_ci_sessions` VALUES ('215fc297e298af9fd8a731f085d08f31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378219580', '');
INSERT INTO `default_ci_sessions` VALUES ('1268b23fbc1d08929c06cc232d92379a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378219845', '');
INSERT INTO `default_ci_sessions` VALUES ('281b454cac27bcc5830fb1413346e6b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378220324', '');
INSERT INTO `default_ci_sessions` VALUES ('a22c158bd9079e8b0cf5dfb1d362b15c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222579', '');
INSERT INTO `default_ci_sessions` VALUES ('f0b4b1a2ca5da81a2c1944faa344984c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378220365', '');
INSERT INTO `default_ci_sessions` VALUES ('bcccbaeabf8f6909df1157b15f07eeda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378220798', '');
INSERT INTO `default_ci_sessions` VALUES ('37c21dd08bd6e6103343a26807ca6ac4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378221911', '');
INSERT INTO `default_ci_sessions` VALUES ('a03b81f48e0632d2e7518cb63a5a1474', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222126', '');
INSERT INTO `default_ci_sessions` VALUES ('250ba1387e82f860c2d624f3c061c010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222178', '');
INSERT INTO `default_ci_sessions` VALUES ('7cca5aa6f65d48deb5f5b2fb286d1936', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222249', '');
INSERT INTO `default_ci_sessions` VALUES ('a0183a817978cd333b6819be359276ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222277', '');
INSERT INTO `default_ci_sessions` VALUES ('8e94321bd3ad16729ec1b09384d337c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222322', '');
INSERT INTO `default_ci_sessions` VALUES ('09d887b00337b48f41f5bbae13e8f244', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222386', '');
INSERT INTO `default_ci_sessions` VALUES ('a46b9855d72d496b78301ad41a9c973d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378227375', '');
INSERT INTO `default_ci_sessions` VALUES ('a84aa831ae11c23cf5f90c74b11c4962', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222557', '');
INSERT INTO `default_ci_sessions` VALUES ('451a864d21ffc02b1b0cb4fc7f25c03b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222528', '');
INSERT INTO `default_ci_sessions` VALUES ('de490a2d81e8cc64b4ff777420d33b8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222539', '');
INSERT INTO `default_ci_sessions` VALUES ('970c66551d5510c63ec80b0afd459a7a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378222583', '');
INSERT INTO `default_ci_sessions` VALUES ('30be03c7fc09d7be274b9402547b39d5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378227397', '');
INSERT INTO `default_ci_sessions` VALUES ('eac4cace6a372a4cdaa0689093f430d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378230962', '');
INSERT INTO `default_ci_sessions` VALUES ('72119d6aeb554c2fedad9b419e4d9f05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378227426', '');
INSERT INTO `default_ci_sessions` VALUES ('5f0739085a434099445075022ccbbb12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378227555', '');
INSERT INTO `default_ci_sessions` VALUES ('028fb54f1cc14ee5701c07b47c686061', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378232901', '');
INSERT INTO `default_ci_sessions` VALUES ('44ae804230c418c5e3c280ef415b238c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378230870', '');
INSERT INTO `default_ci_sessions` VALUES ('d91041d4ed42d15957ee191403c4d7c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378241040', '');
INSERT INTO `default_ci_sessions` VALUES ('638a1c718dac3ba4431d1cf824147c9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378231898', '');
INSERT INTO `default_ci_sessions` VALUES ('72e895fe712267cbe65f83a8d00d546a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233009', '');
INSERT INTO `default_ci_sessions` VALUES ('974c763de2c16dc86b77cd60b71d30bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233353', '');
INSERT INTO `default_ci_sessions` VALUES ('853820093f6ee0ad4d4ee9978e6687aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233410', '');
INSERT INTO `default_ci_sessions` VALUES ('b3423477b686e9ea68dffca1f8a1316a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233417', '');
INSERT INTO `default_ci_sessions` VALUES ('78aece587ddea880701be3d8ed5568fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233677', '');
INSERT INTO `default_ci_sessions` VALUES ('2fbd62dcca47fbdd8c97bef499349f79', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233749', '');
INSERT INTO `default_ci_sessions` VALUES ('a71746773de877c08b1bdef3ae6f98d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378233808', '');
INSERT INTO `default_ci_sessions` VALUES ('cc3aa46b141512a396f06ca410b47ba7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234072', '');
INSERT INTO `default_ci_sessions` VALUES ('02693b45e90b7c95fc86781604ec4cb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234170', '');
INSERT INTO `default_ci_sessions` VALUES ('b4e8b4d2925d8d7b54fd6a30188f6f4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234472', '');
INSERT INTO `default_ci_sessions` VALUES ('30f8dbca0e2bb24e2a358d1b3c3cec36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234506', '');
INSERT INTO `default_ci_sessions` VALUES ('d49b261ffaa95ac8d135130afcf8c0d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234716', '');
INSERT INTO `default_ci_sessions` VALUES ('3b5f1b0269f514c08e7ef382209196c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234766', '');
INSERT INTO `default_ci_sessions` VALUES ('26af329185231585cfcb545cd62fe021', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234829', '');
INSERT INTO `default_ci_sessions` VALUES ('cad6de180d0f5781b11088d16afe5a58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234911', '');
INSERT INTO `default_ci_sessions` VALUES ('02f796675ee94d4bc56b5c0047a18d0e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234928', '');
INSERT INTO `default_ci_sessions` VALUES ('a3f678a5db289d56ac846fcd3ce84e96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378234994', '');
INSERT INTO `default_ci_sessions` VALUES ('45d762eb8ebabda575774a4a62ab10d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378235028', '');
INSERT INTO `default_ci_sessions` VALUES ('ae14b50b662f2f9b4c3d19cc66b7097c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378235968', '');
INSERT INTO `default_ci_sessions` VALUES ('5cba2dc9d2d66ef4fbc0acbde29332cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378236047', '');
INSERT INTO `default_ci_sessions` VALUES ('eb8d60a8a413c196bda730d6281dd19b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299830', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('7e10ccb050a9980c31a9d14fd14d4b15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299830', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('ffbfb48d4ef88e10af32064ffeefadf1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299831', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('7f80c071a5079147d52bc4b610354cbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299831', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('b9e42097d3ad702a095f405fade579e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299832', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('b4599c21f8fede4f1b2ef0ff964d8707', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378299832', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('c6ecfc0951f96e819ff946431db2731e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', '1378324448', '');
INSERT INTO `default_ci_sessions` VALUES ('457bf8872488d6258c75ccc3838af301', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378323587', '');
INSERT INTO `default_ci_sessions` VALUES ('e39d7509b3bb0f5ddd6684ba99325acb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378304197', '');
INSERT INTO `default_ci_sessions` VALUES ('1c2a75b333355eaea27248a80b234712', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378307045', '');
INSERT INTO `default_ci_sessions` VALUES ('a6d8d86c9dbc4295c86c1408e7af06e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378307762', '');
INSERT INTO `default_ci_sessions` VALUES ('5f6e67e05eb92306aadf1675270bbe5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378313911', '');
INSERT INTO `default_ci_sessions` VALUES ('79a16527d3da444eeebbea505d1f2d1d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378314273', '');
INSERT INTO `default_ci_sessions` VALUES ('2c09634e332d76a2fdb17f1ae2d86ddc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331908', '');
INSERT INTO `default_ci_sessions` VALUES ('f6f577d2e06a918228f3fd745a8d0dbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331651', '');
INSERT INTO `default_ci_sessions` VALUES ('f3c9199b8d83d00db53a90ef83d3fe32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378324549', '');
INSERT INTO `default_ci_sessions` VALUES ('f6e18f5490e3e4535ce1ade6ee831ad1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378324552', '');
INSERT INTO `default_ci_sessions` VALUES ('fee6a57df07ce54fac885831bcaa48c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378324561', '');
INSERT INTO `default_ci_sessions` VALUES ('2c6f5d3070e064d53c110ef10920b69d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378324617', '');
INSERT INTO `default_ci_sessions` VALUES ('a0a9e873f93e7940b3b183ec30471b2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378326755', '');
INSERT INTO `default_ci_sessions` VALUES ('2d2adf74660d296ce495e5bc46f9e90e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378326877', '');
INSERT INTO `default_ci_sessions` VALUES ('02fd51e72654aa437f6653bc85a75d3b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378329225', '');
INSERT INTO `default_ci_sessions` VALUES ('c733a9c2464210fac58caccb49797d8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378329297', '');
INSERT INTO `default_ci_sessions` VALUES ('f1ba9270f65fe4d4f462c734113c9944', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331642', '');
INSERT INTO `default_ci_sessions` VALUES ('27572cf6c485156252679496cfc824af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331668', '');
INSERT INTO `default_ci_sessions` VALUES ('38d1bbae5bbe40316e304e0cc9371f47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332720', 'a:6:{s:8:\"username\";s:6:\"pajaro\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('b2955ba12316d77eb723dac316413db5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331725', '');
INSERT INTO `default_ci_sessions` VALUES ('8f9dc4bb6d4acb2bb619302aa063d8e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331734', '');
INSERT INTO `default_ci_sessions` VALUES ('09c88ff352512428715f2c244f55e4d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378331964', '');
INSERT INTO `default_ci_sessions` VALUES ('69203adc079adb863a7253681c84bd54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332061', '');
INSERT INTO `default_ci_sessions` VALUES ('59fa14c2c7a59597cb42b88c3e68a1bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332257', '');
INSERT INTO `default_ci_sessions` VALUES ('32b89c91d424a67e315327277860a976', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332283', '');
INSERT INTO `default_ci_sessions` VALUES ('cccb7e6ce137b093a6b1677f11e6e40c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332309', '');
INSERT INTO `default_ci_sessions` VALUES ('2fe2b68dc50685d908a2c8cf4f3921ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', '1378332725', '');
INSERT INTO `default_ci_sessions` VALUES ('1b70f7d9bedcb4fa4836f7ac6cd49b93', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378383689', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('d3eae4d9a1cebdf94ae94ee5402a56af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378383689', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('3e32371c6f93daf577079ff26a5c6358', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378383689', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('fe734acf055c0d3a028aad7f0053667d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384410', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('af08e2a5b1a869088d9d72685046d156', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389322', '');
INSERT INTO `default_ci_sessions` VALUES ('5d266956c99044b61babfab8c3feeef2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378386423', '');
INSERT INTO `default_ci_sessions` VALUES ('eb578e9cdde1a5725cb35d7b040ad2fb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384430', '');
INSERT INTO `default_ci_sessions` VALUES ('796b99c3eb8cfd5cdd1544a0b360c984', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384445', '');
INSERT INTO `default_ci_sessions` VALUES ('66dec2ec345a295031152cc3d1dde45c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384476', '');
INSERT INTO `default_ci_sessions` VALUES ('71abcc6ab261c8fc7ee1e05e56aa1bc0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384487', '');
INSERT INTO `default_ci_sessions` VALUES ('06f99916f7757906c0bbad88cb7628cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384579', '');
INSERT INTO `default_ci_sessions` VALUES ('6e58d2f510b4fb1f933e448784cd3521', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384620', '');
INSERT INTO `default_ci_sessions` VALUES ('d9db8c0aee1192245b63e438c52d6317', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384639', '');
INSERT INTO `default_ci_sessions` VALUES ('e54de895280a99e8657088ed809b6346', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384817', '');
INSERT INTO `default_ci_sessions` VALUES ('a22b7784170c92a946708dd7361bea40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384893', '');
INSERT INTO `default_ci_sessions` VALUES ('d0f912b450de111e6e322488a1319c30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384941', '');
INSERT INTO `default_ci_sessions` VALUES ('15a1b759f708dcfd9826189ae58bf2dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378384976', '');
INSERT INTO `default_ci_sessions` VALUES ('ae7b924b99953f6c0da6395c76d6dfb7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385011', '');
INSERT INTO `default_ci_sessions` VALUES ('deac480376c40861fecdb4280e51ad2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385096', '');
INSERT INTO `default_ci_sessions` VALUES ('79462e9d8d7bcd8b6122a57c876e58fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385147', '');
INSERT INTO `default_ci_sessions` VALUES ('eb4e4b8621df4916dfc7f963e8e121a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385158', '');
INSERT INTO `default_ci_sessions` VALUES ('23ab9178b82176ba5e66e754d47917bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385203', '');
INSERT INTO `default_ci_sessions` VALUES ('ef6859f9d2ec21736d24e6a6dc568f3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385262', '');
INSERT INTO `default_ci_sessions` VALUES ('a7c61e29c7c404a9958d293486acd4b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385329', '');
INSERT INTO `default_ci_sessions` VALUES ('9551753c85421d353ace032825963750', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385376', '');
INSERT INTO `default_ci_sessions` VALUES ('c42ac9f60383adb06dcf8e6828c6cccb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378385443', '');
INSERT INTO `default_ci_sessions` VALUES ('6096fc2caa3884b0aac4032133baf851', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378386497', '');
INSERT INTO `default_ci_sessions` VALUES ('92af390f5a484873d32b9b242afdffe4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378386606', '');
INSERT INTO `default_ci_sessions` VALUES ('54a90ec94a2ed0325f0a70f725f526ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378404073', 'a:6:{s:8:\"username\";s:11:\"Eduardrussy\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('29e86584f2accec473bcb53852dbdae7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389268', '');
INSERT INTO `default_ci_sessions` VALUES ('b5374dc6930441fbb6567bba8d6eb058', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389330', '');
INSERT INTO `default_ci_sessions` VALUES ('2bcb6726defe1ef72dc8c86185f0ec71', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389350', '');
INSERT INTO `default_ci_sessions` VALUES ('879e05dfc91d97b807f313c6b91ed821', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389444', '');
INSERT INTO `default_ci_sessions` VALUES ('e22bf0192fead1b2467cbbb4834a331a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378389814', '');
INSERT INTO `default_ci_sessions` VALUES ('06b01806ecd87aa0ef78506da51152ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378417193', 'a:6:{s:8:\"username\";s:11:\"Eduardrussy\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('edc191b9ac8a495014cf6690912ba4ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378468124', 'a:5:{s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('afe57a9ea02c3cd2c280a0fe8feb262b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378468108', '');
INSERT INTO `default_ci_sessions` VALUES ('8f66d14cea29814aa3278243f8d33bea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378468439', '');
INSERT INTO `default_ci_sessions` VALUES ('4f5adc675fca4eb350890e22d7c2ade0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378470058', '');
INSERT INTO `default_ci_sessions` VALUES ('7e1402e0744770122066dcd3df708cff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378470465', 'a:6:{s:8:\"username\";s:11:\"Eduardrussy\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');
INSERT INTO `default_ci_sessions` VALUES ('81d563c4e276250451a76efcbece7447', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378761540', 'a:7:{s:8:\"username\";s:11:\"Eduardrussy\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";s:17:\"flash:old:success\";s:37:\"El módulo \"olark\" ha sido eliminado.\";}');
INSERT INTO `default_ci_sessions` VALUES ('bbefce9b0a766f36448b039476c890a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378761396', '');
INSERT INTO `default_ci_sessions` VALUES ('c9c2f02e11103cc4b9a26546ec2d85e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378761541', '');
INSERT INTO `default_ci_sessions` VALUES ('f0849462e4fa79d4714a434d9d55d4a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378761700', '');
INSERT INTO `default_ci_sessions` VALUES ('28a550feaad852f642cfbb7a13fb836a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378761821', '');
INSERT INTO `default_ci_sessions` VALUES ('320ba30bfceb940e85ff1d52fe489f06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', '1378764050', 'a:6:{s:8:\"username\";s:11:\"Eduardrussy\";s:5:\"email\";s:26:\"eduard.russy@imaginamos.co\";s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:1:\"2\";s:8:\"group_id\";s:1:\"1\";s:5:\"group\";s:5:\"admin\";}');

-- ----------------------------
-- Table structure for `default_comments`
-- ----------------------------
DROP TABLE IF EXISTS `default_comments`;
CREATE TABLE `default_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `parsed` text COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `entry_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `entry_title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entry_plural` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` int(11) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_comments
-- ----------------------------

-- ----------------------------
-- Table structure for `default_comment_blacklists`
-- ----------------------------
DROP TABLE IF EXISTS `default_comment_blacklists`;
CREATE TABLE `default_comment_blacklists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_comment_blacklists
-- ----------------------------

-- ----------------------------
-- Table structure for `default_contact_log`
-- ----------------------------
DROP TABLE IF EXISTS `default_contact_log`;
CREATE TABLE `default_contact_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `sender_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sender_ip` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sender_os` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sent_at` int(11) NOT NULL DEFAULT '0',
  `attachments` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_contact_log
-- ----------------------------

-- ----------------------------
-- Table structure for `default_countries`
-- ----------------------------
DROP TABLE IF EXISTS `default_countries`;
CREATE TABLE `default_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_countries
-- ----------------------------
INSERT INTO `default_countries` VALUES ('1', 'Colombia', 'colombia');
INSERT INTO `default_countries` VALUES ('2', 'Peru', 'peru');

-- ----------------------------
-- Table structure for `default_customers_types`
-- ----------------------------
DROP TABLE IF EXISTS `default_customers_types`;
CREATE TABLE `default_customers_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_customers_types
-- ----------------------------
INSERT INTO `default_customers_types` VALUES ('1', 'Alianza inmobiliaria', 'alianza-inmobiliaria');
INSERT INTO `default_customers_types` VALUES ('2', 'Cliente directo', 'cliente-directo');

-- ----------------------------
-- Table structure for `default_data_fields`
-- ----------------------------
DROP TABLE IF EXISTS `default_data_fields`;
CREATE TABLE `default_data_fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `field_slug` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `field_namespace` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `field_data` blob,
  `view_options` blob,
  `is_locked` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=333 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_data_fields
-- ----------------------------
INSERT INTO `default_data_fields` VALUES ('1', 'lang:blog:intro_label', 'intro', 'blogs', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B733A363A2273696D706C65223B733A31303A22616C6C6F775F74616773223B733A313A2279223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('2', 'lang:pages:body_label', 'body', 'pages', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B733A383A22616476616E636564223B733A31303A22616C6C6F775F74616773223B733A313A2279223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('3', 'lang:user:first_name_label', 'first_name', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A35303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('4', 'lang:user:last_name_label', 'last_name', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A35303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('5', 'lang:profile_company', 'company', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A3130303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('6', 'lang:profile_bio', 'bio', 'users', 'textarea', 0x613A333A7B733A31323A2264656661756C745F74657874223B4E3B733A31303A22616C6C6F775F74616773223B4E3B733A31323A22636F6E74656E745F74797065223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('7', 'lang:user:lang', 'lang', 'users', 'pyro_lang', 0x613A313A7B733A31323A2266696C7465725F7468656D65223B733A333A22796573223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('8', 'lang:profile_dob', 'dob', 'users', 'datetime', 0x613A353A7B733A383A227573655F74696D65223B733A323A226E6F223B733A31303A2273746172745F64617465223B733A353A222D31303059223B733A383A22656E645F64617465223B4E3B733A373A2273746F72616765223B733A343A22756E6978223B733A31303A22696E7075745F74797065223B733A383A2264726F70646F776E223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('9', 'lang:profile_gender', 'gender', 'users', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A33343A22203A204E6F742054656C6C696E670A6D203A204D616C650A66203A2046656D616C65223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('10', 'lang:profile_phone', 'phone', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A32303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('11', 'lang:profile_mobile', 'mobile', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A32303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('12', 'lang:profile_address_line1', 'address_line1', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B4E3B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('13', 'lang:profile_address_line2', 'address_line2', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B4E3B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('14', 'lang:profile_address_line3', 'address_line3', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B4E3B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('15', 'lang:profile_address_postcode', 'postcode', 'users', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A32303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('16', 'lang:profile_website', 'website', 'users', 'url', null, null, 'no');
INSERT INTO `default_data_fields` VALUES ('22', 'lang:banner:name', 'name', 'banner', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A3130303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('23', 'lang:banner:description', 'description', 'banner', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B733A363A2273696D706C65223B733A31303A22616C6C6F775F74616773223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('24', 'lang:banner:image', 'images', 'banner', 'file', 0x613A323A7B733A363A22666F6C646572223B693A333B733A31333A22616C6C6F7765645F7479706573223B733A31323A226769667C706E677C6A70677C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('25', 'lang:banner:url', 'url', 'banner', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B4E3B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('26', 'lang:banner:state', 'state', 'banner', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A34333A2231203A2041637469766F0A202020202020202020202020202020202020202030203A20496E61637469766F223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('27', 'lang:properties:name', 'name', 'properties', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A3130303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('28', 'lang:properties:country', 'country_id', 'properties', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A393A22636F756E7472696573223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('29', 'lang:properties:city', 'city_id', 'properties', 'city', 0x613A313A7B733A31323A22636F756E7472795F6E616D65223B733A31303A22636F756E7472795F6964223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('30', 'lang:properties:building', 'building_id', 'properties', 'building_entity', 0x613A313A7B733A31353A22636974795F6669656C645F6E616D65223B733A373A22636974795F6964223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('31', 'lang:properties:area', 'area_id', 'properties', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A353A226172656173223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('32', 'lang:properties:price', 'price', 'properties', 'text', 0x613A323A7B733A31303A226D61785F6C656E677468223B693A3130303B733A31333A2264656661756C745F76616C7565223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('33', 'lang:properties:salerental', 'salerental', 'properties', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A34323A2231203A2056656E74610A202020202020202020202020202020202020202032203A20416C7175696C6572223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('34', 'lang:properties:customer', 'customer', 'properties', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A31353A22637573746F6D6572735F7479706573223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('35', 'lang:properties:types', 'properties_types', 'properties', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A32303A2270726F706572746965735F7765625F7479706573223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('36', 'lang:properties:sector', 'sector', 'properties', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A33353A2231203A20756E6F0A202020202020202020202020202020202020202032203A20646F73223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('37', 'lang:properties:description', 'description', 'properties', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B733A363A2273696D706C65223B733A31303A22616C6C6F775F74616773223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('38', 'lang:properties:state', 'state', 'properties', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A34333A2231203A2041637469766F0A202020202020202020202020202020202020202030203A20496E61637469766F223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('39', 'lang:properties:multiple_files_label', 'images', 'properties', 'multiple_images', 0x613A353A7B733A363A22666F6C646572223B693A343B733A31303A227461626C655F6E616D65223B733A32303A2270726F706572746965735F7765625F66696C6573223B733A31383A227265736F757263655F69645F636F6C756D6E223B733A31313A2270726F70657274795F6964223B733A31343A2266696C655F69645F636F6C756D6E223B4E3B733A31363A226D61785F6C696D69745F696D61676573223B693A353B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('132', 'lang:about:description', 'description_about', 'pages', 'textarea', 0x613A333A7B733A31323A2264656661756C745F74657874223B4E3B733A31303A22616C6C6F775F74616773223B4E3B733A31323A22636F6E74656E745F74797065223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('133', 'lang:about:image', 'image_about', 'pages', 'bootstrap_image', 0x613A353A7B733A363A22666F6C646572223B693A31393B733A31323A22726573697A655F7769647468223B4E3B733A31333A22726573697A655F686569676874223B4E3B733A31303A226B6565705F726174696F223B4E3B733A31333A22616C6C6F7765645F7479706573223B733A31323A226A70677C6769667C706E677C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('134', 'lang:about:video', 'video_about', 'pages', 'file', 0x613A323A7B733A363A22666F6C646572223B693A31393B733A31333A22616C6C6F7765645F7479706573223B733A343A226D70347C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('135', 'lang:about:url', 'video_url_about', 'pages', 'video_url', 0x613A333A7B733A31323A22766964656F5F686569677468223B4E3B733A31313A22766964656F5F7769647468223B4E3B733A31343A22766964656F5F6175746F706C6179223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('136', 'lang:about:type_public', 'type_public_about', 'pages', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A38323A2231203A20496D6167656E0A202020202020202020202020202020202020202032203A20566964656F204D70340A202020202020202020202020202020202020202033203A20566964656F20596F7574756265223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('172', 'lang:services:description', 'description_services', 'pages', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B4E3B733A31303A22616C6C6F775F74616773223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('173', 'lang:services:image', 'image_services', 'pages', 'bootstrap_image', 0x613A353A7B733A363A22666F6C646572223B693A32373B733A31323A22726573697A655F7769647468223B4E3B733A31333A22726573697A655F686569676874223B4E3B733A31303A226B6565705F726174696F223B4E3B733A31333A22616C6C6F7765645F7479706573223B733A31323A226A70677C6769667C706E677C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('174', 'lang:services:video', 'video_services', 'pages', 'file', 0x613A323A7B733A363A22666F6C646572223B693A32373B733A31333A22616C6C6F7765645F7479706573223B733A343A226D70347C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('175', 'lang:services:url', 'video_url_services', 'pages', 'video_url', 0x613A333A7B733A31323A22766964656F5F686569677468223B4E3B733A31313A22766964656F5F7769647468223B4E3B733A31343A22766964656F5F6175746F706C6179223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('176', 'lang:services:type_public', 'type_public_services', 'pages', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A38323A2231203A20496D6167656E0A202020202020202020202020202020202020202032203A20566964656F204D70340A202020202020202020202020202020202020202033203A20566964656F20596F7574756265223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('177', 'lang:services:country', 'country_id_services', 'pages', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A393A22636F756E7472696573223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('178', 'lang:services:city', 'city_id_services', 'pages', 'city', 0x613A313A7B733A31323A22636F756E7472795F6E616D65223B733A31393A22636F756E7472795F69645F7365727669636573223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('179', 'lang:testimonies:description', 'description_testimonies', 'pages', 'wysiwyg', 0x613A323A7B733A31313A22656469746F725F74797065223B4E3B733A31303A22616C6C6F775F74616773223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('180', 'lang:testimonies:image', 'image_testimonies', 'pages', 'bootstrap_image', 0x613A353A7B733A363A22666F6C646572223B693A32383B733A31323A22726573697A655F7769647468223B4E3B733A31333A22726573697A655F686569676874223B4E3B733A31303A226B6565705F726174696F223B4E3B733A31333A22616C6C6F7765645F7479706573223B733A31323A226A70677C6769667C706E677C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('181', 'lang:testimonies:video', 'video_testimonies', 'pages', 'file', 0x613A323A7B733A363A22666F6C646572223B693A32383B733A31333A22616C6C6F7765645F7479706573223B733A343A226D70347C223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('182', 'lang:testimonies:url', 'video_url_testimonies', 'pages', 'video_url', 0x613A333A7B733A31323A22766964656F5F686569677468223B4E3B733A31313A22766964656F5F7769647468223B4E3B733A31343A22766964656F5F6175746F706C6179223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('183', 'lang:testimonies:type_public', 'type_public_testimonies', 'pages', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A38323A2231203A20496D6167656E0A202020202020202020202020202020202020202032203A20566964656F204D70340A202020202020202020202020202020202020202033203A20566964656F20596F7574756265223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('184', 'Image', 'image', 'blogs', 'image', 0x613A353A7B733A363A22666F6C646572223B733A313A2231223B733A31323A22726573697A655F7769647468223B733A303A22223B733A31333A22726573697A655F686569676874223B733A303A22223B733A31303A226B6565705F726174696F223B733A333A22796573223B733A31333A22616C6C6F7765645F7479706573223B733A303A22223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('327', 'lang:requirements:country', 'country_id_requirements', 'requirements', 'choice_db', 0x613A383A7B733A31373A2263686F6963655F7461626C655F6E616D65223B733A393A22636F756E7472696573223B733A393A226669656C645F6B6579223B733A323A226964223B733A31313A226669656C645F76616C7565223B733A343A226E616D65223B733A31393A2263686F6963655F77686572655F706172616D73223B4E3B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('328', 'lang:requirements:city', 'city_id_requirements', 'requirements', 'city', 0x613A313A7B733A31323A22636F756E7472795F6E616D65223B733A32333A22636F756E7472795F69645F726571756972656D656E7473223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('329', 'lang:requirements:building', 'building_id_requirements', 'requirements', 'building_entity', 0x613A313A7B733A31353A22636974795F6669656C645F6E616D65223B733A32303A22636974795F69645F726571756972656D656E7473223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('330', 'lang:requirements:office', 'office_id_requirements', 'requirements', 'office', 0x613A313A7B733A31333A226275696C64696E675F6E616D65223B733A32343A226275696C64696E675F69645F726571756972656D656E7473223B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('331', 'lang:requirements:description', 'description_requirements', 'requirements', 'textarea', 0x613A333A7B733A31323A2264656661756C745F74657874223B4E3B733A31303A22616C6C6F775F74616773223B4E3B733A31323A22636F6E74656E745F74797065223B4E3B7D, null, 'no');
INSERT INTO `default_data_fields` VALUES ('332', 'lang:requirements:state', 'state_requirements', 'requirements', 'choice', 0x613A353A7B733A31313A2263686F6963655F64617461223B733A37393A2231203A20456E2070726F6365736F0A202020202020202020202020202020202020202032203A204174656E6469646F0A202020202020202020202020202020202020202033203A204365727261646F223B733A31313A2263686F6963655F74797065223B733A383A2264726F70646F776E223B733A31333A2264656661756C745F76616C7565223B4E3B733A31313A226D696E5F63686F69636573223B4E3B733A31313A226D61785F63686F69636573223B4E3B7D, null, 'no');

-- ----------------------------
-- Table structure for `default_data_field_assignments`
-- ----------------------------
DROP TABLE IF EXISTS `default_data_field_assignments`;
CREATE TABLE `default_data_field_assignments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `is_required` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `is_unique` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `instructions` text COLLATE utf8_unicode_ci,
  `field_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=310 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_data_field_assignments
-- ----------------------------
INSERT INTO `default_data_field_assignments` VALUES ('1', '1', '1', '1', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('2', '1', '2', '2', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('3', '1', '3', '3', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('4', '2', '3', '4', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('5', '3', '3', '5', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('6', '4', '3', '6', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('7', '5', '3', '7', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('8', '6', '3', '8', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('9', '7', '3', '9', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('10', '8', '3', '10', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('11', '9', '3', '11', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('12', '10', '3', '12', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('13', '11', '3', '13', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('14', '12', '3', '14', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('15', '13', '3', '15', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('16', '14', '3', '16', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('22', '1', '5', '22', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('23', '2', '5', '23', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('24', '3', '5', '24', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('25', '4', '5', '25', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('26', '5', '5', '26', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('27', '1', '6', '27', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('28', '2', '6', '28', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('29', '3', '6', '29', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('30', '4', '6', '30', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('31', '5', '6', '31', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('32', '6', '6', '32', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('33', '7', '6', '33', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('34', '8', '6', '34', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('35', '9', '6', '35', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('36', '10', '6', '36', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('37', '11', '6', '37', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('38', '12', '6', '38', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('39', '13', '6', '39', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('132', '1', '21', '132', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('133', '2', '21', '133', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('134', '3', '21', '134', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('135', '4', '21', '135', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('136', '5', '21', '136', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('172', '1', '29', '172', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('173', '2', '29', '173', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('174', '3', '29', '174', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('175', '4', '29', '175', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('176', '5', '29', '176', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('177', '6', '29', '177', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('178', '7', '29', '178', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('179', '1', '30', '179', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('180', '2', '30', '180', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('181', '3', '30', '181', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('182', '4', '30', '182', 'no', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('183', '5', '30', '183', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('184', '2', '1', '184', 'yes', 'no', '', null);
INSERT INTO `default_data_field_assignments` VALUES ('255', '15', '3', '278', 'no', 'no', '', null);
INSERT INTO `default_data_field_assignments` VALUES ('304', '1', '65', '327', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('305', '2', '65', '328', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('306', '3', '65', '329', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('307', '4', '65', '330', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('308', '5', '65', '331', 'yes', 'no', null, null);
INSERT INTO `default_data_field_assignments` VALUES ('309', '6', '65', '332', 'yes', 'no', null, null);

-- ----------------------------
-- Table structure for `default_data_streams`
-- ----------------------------
DROP TABLE IF EXISTS `default_data_streams`;
CREATE TABLE `default_data_streams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stream_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `stream_slug` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `stream_namespace` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stream_prefix` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_options` blob NOT NULL,
  `title_column` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sorting` enum('title','custom') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'title',
  `permissions` text COLLATE utf8_unicode_ci,
  `is_hidden` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `menu_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_data_streams
-- ----------------------------
INSERT INTO `default_data_streams` VALUES ('1', 'lang:blog:blog_title', 'blog', 'blogs', null, null, 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('2', 'Default', 'def_page_fields', 'pages', null, 'A simple page type with a WYSIWYG editor that will get you started adding content.', 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('3', 'lang:user_profile_fields_label', 'profiles', 'users', null, 'Profiles for users module', 0x613A313A7B693A303B733A31323A22646973706C61795F6E616D65223B7D, 'display_name', 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('5', 'lang:banner:title', 'banner', 'banner', null, null, 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, 'name', 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('6', 'lang:properties:title', 'properties_web', 'properties', null, null, 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, 'area_id', 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('21', 'about', 'about', 'pages', 'pages_', 'Simple pagina para los about', 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('29', 'services', 'services', 'pages', 'pages_', 'Simple pagina para los services', 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('30', 'testimonies', 'testimonies', 'pages', 'pages_', 'Simple pagina para los testimonies', 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);
INSERT INTO `default_data_streams` VALUES ('65', 'lang:requirements:title', 'requirements', 'requirements', null, null, 0x613A323A7B693A303B733A323A226964223B693A313B733A373A2263726561746564223B7D, null, 'title', null, 'no', null);

-- ----------------------------
-- Table structure for `default_data_stream_searches`
-- ----------------------------
DROP TABLE IF EXISTS `default_data_stream_searches`;
CREATE TABLE `default_data_stream_searches` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stream_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stream_namespace` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `search_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search_term` text COLLATE utf8_unicode_ci,
  `ip_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_results` int(11) NOT NULL,
  `query_string` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_data_stream_searches
-- ----------------------------

-- ----------------------------
-- Table structure for `default_def_page_fields`
-- ----------------------------
DROP TABLE IF EXISTS `default_def_page_fields`;
CREATE TABLE `default_def_page_fields` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_def_page_fields
-- ----------------------------
INSERT INTO `default_def_page_fields` VALUES ('1', '2013-08-14 13:43:09', null, '1', null, '<p>Welcome to our homepage. We have not quite finished setting up our website yet, but please add us to your bookmarks and come back soon.</p>');
INSERT INTO `default_def_page_fields` VALUES ('2', '2013-08-14 13:43:09', null, '1', null, '<p>To contact us please fill out the form below.</p>\n				{{ contact:form name=\"text|required\" email=\"text|required|valid_email\" subject=\"dropdown|Support|Sales|Feedback|Other\" message=\"textarea\" attachment=\"file|zip\" }}\n					<div><label for=\"name\">Name:</label>{{ name }}</div>\n					<div><label for=\"email\">Email:</label>{{ email }}</div>\n					<div><label for=\"subject\">Subject:</label>{{ subject }}</div>\n					<div><label for=\"message\">Message:</label>{{ message }}</div>\n					<div><label for=\"attachment\">Attach  a zip file:</label>{{ attachment }}</div>\n				{{ /contact:form }}');
INSERT INTO `default_def_page_fields` VALUES ('3', '2013-08-14 13:43:09', null, '1', null, '{{ search:form class=\"search-form\" }} \n		<input name=\"q\" placeholder=\"Search terms...\" />\n	{{ /search:form }}');
INSERT INTO `default_def_page_fields` VALUES ('4', '2013-08-14 13:43:09', null, '1', null, '{{ search:form class=\"search-form\" }} \n		<input name=\"q\" placeholder=\"Search terms...\" />\n	{{ /search:form }}\n\n{{ search:results }}\n\n	{{ total }} results for \"{{ query }}\".\n\n	<hr />\n\n	{{ entries }}\n\n		<article>\n			<h4>{{ singular }}: <a href=\"{{ url }}\">{{ title }}</a></h4>\n			<p>{{ description }}</p>\n		</article>\n\n	{{ /entries }}\n\n        {{ pagination }}\n\n{{ /search:results }}');
INSERT INTO `default_def_page_fields` VALUES ('5', '2013-08-14 13:43:09', null, '1', null, '<p>We cannot find the page you are looking for, please click <a title=\"Home\" href=\"{{ pages:url id=\'1\' }}\">here</a> to go to the homepage.</p>');
INSERT INTO `default_def_page_fields` VALUES ('6', '2013-08-23 22:19:53', '2013-08-23 22:19:59', '2', '1', 'asdasdsadsadsad');

-- ----------------------------
-- Table structure for `default_email_templates`
-- ----------------------------
DROP TABLE IF EXISTS `default_email_templates`;
CREATE TABLE `default_email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_default` int(1) NOT NULL DEFAULT '0',
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_lang` (`slug`,`lang`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_email_templates
-- ----------------------------
INSERT INTO `default_email_templates` VALUES ('1', 'comments', 'Comment Notification', 'Email that is sent to admin when someone creates a comment', 'You have just received a comment from {{ name }}', '<h3>You have received a comment from {{ name }}</h3>\n				<p>\n				<strong>IP Address: {{ sender_ip }}</strong><br/>\n				<strong>Operating System: {{ sender_os }}<br/>\n				<strong>User Agent: {{ sender_agent }}</strong>\n				</p>\n				<p>{{ comment }}</p>\n				<p>View Comment: {{ redirect_url }}</p>', 'en', '1', 'comments');
INSERT INTO `default_email_templates` VALUES ('2', 'contact', 'Contact Notification', 'Template for the contact form', '{{ settings:site_name }} :: {{ subject }}', 'This message was sent via the contact form on with the following details:\n				<hr />\n				IP Address: {{ sender_ip }}\n				OS {{ sender_os }}\n				Agent {{ sender_agent }}\n				<hr />\n				{{ message }}\n\n				{{ name }},\n				\n				{{ email }}', 'en', '1', 'pages');
INSERT INTO `default_email_templates` VALUES ('3', 'registered', 'New User Registered', 'Email sent to the site contact e-mail when a new user registers', '{{ settings:site_name }} :: You have just received a registration from {{ name }}', '<h3>You have received a registration from {{ name }}</h3>\n				<p><strong>IP Address: {{ sender_ip }}</strong><br/>\n				<strong>Operating System: {{ sender_os }}</strong><br/>\n				<strong>User Agent: {{ sender_agent }}</strong>\n				</p>', 'en', '1', 'users');
INSERT INTO `default_email_templates` VALUES ('4', 'activation', 'Activation Email', 'The email which contains the activation code that is sent to a new user', '{{ settings:site_name }} - Account Activation', '<p>Hello {{ user:first_name }},</p>\n				<p>Thank you for registering at {{ settings:site_name }}. Before we can activate your account, please complete the registration process by clicking on the following link:</p>\n				<p><a href=\"{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}\">{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}</a></p>\n				<p>&nbsp;</p>\n				<p>In case your email program does not recognize the above link as, please direct your browser to the following URL and enter the activation code:</p>\n				<p><a href=\"{{ url:site }}users/activate\">{{ url:site }}users/activate</a></p>\n				<p><strong>Activation Code:</strong> {{ activation_code }}</p>', 'en', '1', 'users');
INSERT INTO `default_email_templates` VALUES ('5', 'forgotten_password', 'Forgotten Password Email', 'The email that is sent containing a password reset code', '{{ settings:site_name }} - Forgotten Password', '<p>Hello {{ user:first_name }},</p>\n				<p>It seems you have requested a password reset. Please click this link to complete the reset: <a href=\"{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}\">{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}</a></p>\n				<p>If you did not request a password reset please disregard this message. No further action is necessary.</p>', 'en', '1', 'users');
INSERT INTO `default_email_templates` VALUES ('6', 'new_password', 'New Password Email', 'After a password is reset this email is sent containing the new password', '{{ settings:site_name }} - New Password', '<p>Hello {{ user:first_name }},</p>\n				<p>Your new password is: {{ new_password }}</p>\n				<p>After logging in you may change your password by visiting <a href=\"{{ url:site }}edit-profile\">{{ url:site }}edit-profile</a></p>', 'en', '1', 'users');

-- ----------------------------
-- Table structure for `default_files`
-- ----------------------------
DROP TABLE IF EXISTS `default_files`;
CREATE TABLE `default_files` (
  `id` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `folder_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '1',
  `type` enum('a','v','d','i','o') COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mimetype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `width` int(5) DEFAULT NULL,
  `height` int(5) DEFAULT NULL,
  `filesize` int(11) NOT NULL DEFAULT '0',
  `alt_attribute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_count` int(11) NOT NULL DEFAULT '0',
  `date_added` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_files
-- ----------------------------
INSERT INTO `default_files` VALUES ('3a49a2d9dd1200d', '1', '2', 'i', 'disco.jpg', '1ca28ee8ef2f47395e81d492514849d5.jpg', '{{ url:site }}files/large/1ca28ee8ef2f47395e81d492514849d5.jpg', '', '.jpg', 'image/jpeg', '', '640', '330', '24', '', '0', '1377866103', '0');
INSERT INTO `default_files` VALUES ('41ac07c5266e562', '1', '2', 'i', 'slider-interno.jpg', 'a750de61243159eb35914a100580f587.jpg', '{{ url:site }}files/large/a750de61243159eb35914a100580f587.jpg', '', '.jpg', 'image/jpeg', '', '300', '201', '23', '', '0', '1377808408', '0');
INSERT INTO `default_files` VALUES ('465396a0bc9a0a8', '3', '2', 'i', 'disco.jpg', 'c510121b189cc8f186dd4fe3dad7947d.jpg', '{{ url:site }}files/large/c510121b189cc8f186dd4fe3dad7947d.jpg', '', '.jpg', 'image/jpeg', '', '640', '330', '24', '', '2', '1377279853', '0');
INSERT INTO `default_files` VALUES ('4bd1cb901f11f70', '1', '2', 'i', 'home-diseno-web-marranito.png', '984d4c452065ebb0d3e3b63b52f33f8d.png', '{{ url:site }}files/large/984d4c452065ebb0d3e3b63b52f33f8d.png', '', '.png', 'image/png', '', '180', '180', '17', '', '0', '1378329827', '0');
INSERT INTO `default_files` VALUES ('61d95ae2ab3b097', '27', '2', 'i', 'pantallazo-cms-pyro-1.jpg', 'c17200f67a8a194a2526da4d9208258e.jpg', '{{ url:site }}files/large/c17200f67a8a194a2526da4d9208258e.jpg', '', '.jpg', 'image/jpeg', '', '1280', '1024', '150', '', '4', '1377697770', '0');
INSERT INTO `default_files` VALUES ('69b50676f93c1e9', '1', '2', 'i', 'disco.jpg', '4c5d8f440c28e803064653688ed6f141.jpg', '{{ url:site }}files/large/4c5d8f440c28e803064653688ed6f141.jpg', '', '.jpg', 'image/jpeg', '', '640', '330', '24', '', '0', '1377883603', '0');
INSERT INTO `default_files` VALUES ('6e04b66d9de7391', '4', '2', 'i', '215_screenshot1.jpg', '5a9edc2a7619fc0e45d9eccb924a3bfd.jpg', '{{ url:site }}files/large/5a9edc2a7619fc0e45d9eccb924a3bfd.jpg', '', '.jpg', 'image/jpeg', '', '1920', '1080', '371', '', '0', '1377548115', '0');
INSERT INTO `default_files` VALUES ('743bca5fd508bc5', '19', '2', 'i', 'disco.jpg', '84969a6c04ed57ff932200e50877f01e.jpg', '{{ url:site }}files/large/84969a6c04ed57ff932200e50877f01e.jpg', '', '.jpg', 'image/jpeg', '', '640', '330', '24', '', '14', '1377545813', '0');
INSERT INTO `default_files` VALUES ('7a1e07ac7650e1c', '28', '2', 'i', 'i-cupon-descuento.jpg', 'abec1269f709111742e467b74f76d928.jpg', '{{ url:site }}files/large/abec1269f709111742e467b74f76d928.jpg', '', '.jpg', 'image/jpeg', '', '529', '419', '69', '', '7', '1377632160', '0');
INSERT INTO `default_files` VALUES ('7c88a8f9dc7cdbd', '1', '2', 'i', 'slider-interno.jpg', '990659b330a9ad33c55dcaaebac5ce66.jpg', '{{ url:site }}files/large/990659b330a9ad33c55dcaaebac5ce66.jpg', '', '.jpg', 'image/jpeg', '', '300', '201', '23', '', '0', '1377808043', '0');
INSERT INTO `default_files` VALUES ('885953811cddcd1', '4', '2', 'i', 'crear base.jpg', '1c042a5e152c2d691403767719b0adfc.jpg', '{{ url:site }}files/large/1c042a5e152c2d691403767719b0adfc.jpg', '', '.jpg', 'image/jpeg', '', '1280', '1024', '187', '', '0', '1377548116', '0');
INSERT INTO `default_files` VALUES ('88dd42dc4cdb154', '27', '2', 'i', 'disco.jpg', '2ecacb2be14a6db4d6af273384800b4b.jpg', '{{ url:site }}files/large/2ecacb2be14a6db4d6af273384800b4b.jpg', '', '.jpg', 'image/jpeg', '', '640', '330', '24', '', '12', '1377630967', '0');
INSERT INTO `default_files` VALUES ('93507f3f7ddeb7b', '3', '2', 'i', 'home-diseno-web-marranito.png', 'a146862c6a02e442e932bb24659b3554.png', '{{ url:site }}files/large/a146862c6a02e442e932bb24659b3554.png', '', '.png', 'image/png', '', '180', '180', '17', '', '0', '1377627892', '0');
INSERT INTO `default_files` VALUES ('9517fd0bf8faa65', '28', '2', 'v', 'lena-alwash-medi1-tv-canli-yayinda-fasli-spikerin-zor-anlari.mp4', '1e583c9ddf9e6c0e9b3de66298b345f3.mp4', '{{ url:site }}files/download/9517fd0bf8faa65', '', '.mp4', 'video/mp4', '', '0', '0', '541', '', '0', '1377632160', '0');
INSERT INTO `default_files` VALUES ('974b6312e777b65', '4', '2', 'i', 'cd.jpg', '6904281dbea017d1c2e368a7d47c8a00.jpg', '{{ url:site }}files/large/6904281dbea017d1c2e368a7d47c8a00.jpg', '', '.jpg', 'image/jpeg', '', '960', '523', '130', '', '0', '1377548116', '0');
INSERT INTO `default_files` VALUES ('9f49f2b96dca981', '27', '2', 'i', 'lima_-_collage.jpg', 'a64f4d6ff3fde81da8385405f099db0a.jpg', '{{ url:site }}files/large/a64f4d6ff3fde81da8385405f099db0a.jpg', '', '.jpg', 'image/jpeg', '', '300', '412', '42', '', '2', '1378299461', '0');
INSERT INTO `default_files` VALUES ('a895a9dc30ac8d7', '27', '2', 'v', 'lena-alwash-medi1-tv-canli-yayinda-fasli-spikerin-zor-anlari.mp4', '3a6baf1e48fd0150f2640c0c9af6eea0.mp4', '{{ url:site }}files/download/a895a9dc30ac8d7', '', '.mp4', 'video/mp4', '', '0', '0', '541', '', '0', '1377631558', '0');
INSERT INTO `default_files` VALUES ('ac3ffe6f52ad84c', '4', '2', 'i', 'i-cupon-descuento.jpg', 'ff7de9d7db5ea8591b0d781fcfba4e5d.jpg', '{{ url:site }}files/large/ff7de9d7db5ea8591b0d781fcfba4e5d.jpg', '', '.jpg', 'image/jpeg', '', '529', '419', '73', '', '0', '1377551978', '0');
INSERT INTO `default_files` VALUES ('b4f4647f28d418b', '27', '2', 'v', 'master-en-marketing-en-internet-y-publicidad-digital-mmipd.mp4', 'e97b52d56f60e0433a382241bda4ab8e.mp4', '{{ url:site }}files/download/b4f4647f28d418b', '', '.mp4', 'video/mp4', '', '0', '0', '5961', '', '0', '1377697770', '0');
INSERT INTO `default_files` VALUES ('bad859c9bd3d3b5', '1', '2', 'i', 'portadaimg.png', 'f2afb3cf30626beed617783bfa8ad60c.png', '{{ url:site }}files/large/f2afb3cf30626beed617783bfa8ad60c.png', '', '.png', 'image/png', '', '851', '315', '633', '', '0', '1377883841', '0');
INSERT INTO `default_files` VALUES ('bd2c22d9c307f0d', '3', '2', 'i', 'img-slide2.jpg', '145c120e527c853990527001f35efe83.jpg', '{{ url:site }}files/large/145c120e527c853990527001f35efe83.jpg', '', '.jpg', 'image/jpeg', '', '2000', '450', '166', '', '0', '1378130599', '0');
INSERT INTO `default_files` VALUES ('c00beb82e564c8c', '27', '2', 'i', '215_screenshot1.jpg', 'e619b526ac581d7ed30eefde77e21d05.jpg', '{{ url:site }}files/large/e619b526ac581d7ed30eefde77e21d05.jpg', '', '.jpg', 'image/jpeg', '', '1920', '1080', '709', '', '6', '1377695320', '0');
INSERT INTO `default_files` VALUES ('c292afb89883796', '27', '2', 'v', 'playstation-4-official-trailer-hd.mp4', '8760dc282d8c407b12d9b0cf6a53ee7f.mp4', '{{ url:site }}files/download/c292afb89883796', '', '.mp4', 'video/mp4', '', '0', '0', '1745', '', '0', '1377695320', '0');
INSERT INTO `default_files` VALUES ('c44f7777b9fd737', '19', '2', 'v', 'master-en-marketing-en-internet-y-publicidad-digital-mmipd.mp4', '107590e40dd4620fa67614d2dff61b54.mp4', '{{ url:site }}files/download/c44f7777b9fd737', '', '.mp4', 'video/mp4', '', '0', '0', '5961', '', '0', '1377546098', '0');
INSERT INTO `default_files` VALUES ('d27cd53654903d6', '4', '2', 'i', 'home-diseno-web-marranito.png', '23b5ad6446ef8765c221009781b82a31.png', '{{ url:site }}files/large/23b5ad6446ef8765c221009781b82a31.png', '', '.png', 'image/png', '', '180', '180', '17', '', '0', '1377552010', '0');
INSERT INTO `default_files` VALUES ('ec7c64d1853aef8', '1', '2', 'i', 'include.jpg', 'd2757f9036e965daf7a97a9b1775acf9.jpg', '{{ url:site }}files/large/d2757f9036e965daf7a97a9b1775acf9.jpg', '', '.jpg', 'image/jpeg', '', '1280', '1024', '183', '', '0', '1377866088', '0');
INSERT INTO `default_files` VALUES ('f3c44f44a264a08', '3', '2', 'i', 'img-slide1.jpg', '1b6937855be56b1766c31709a05a1d5f.jpg', '{{ url:site }}files/large/1b6937855be56b1766c31709a05a1d5f.jpg', '', '.jpg', 'image/jpeg', '', '1598', '677', '226', '', '0', '1378130573', '0');

-- ----------------------------
-- Table structure for `default_files_type_files`
-- ----------------------------
DROP TABLE IF EXISTS `default_files_type_files`;
CREATE TABLE `default_files_type_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_file_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_files_type_files
-- ----------------------------

-- ----------------------------
-- Table structure for `default_file_folders`
-- ----------------------------
DROP TABLE IF EXISTS `default_file_folders`;
CREATE TABLE `default_file_folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'local',
  `remote_container` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `date_added` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_file_folders
-- ----------------------------
INSERT INTO `default_file_folders` VALUES ('1', '0', 'safezone', 'safezone', 'local', '', '1377278992', '1377278992', '0');
INSERT INTO `default_file_folders` VALUES ('3', '0', 'banner', 'banner', 'local', '', '1377279007', '1377279007', '0');
INSERT INTO `default_file_folders` VALUES ('4', '0', 'properties', 'Properties', 'local', '', '1377279012', '1377279012', '0');
INSERT INTO `default_file_folders` VALUES ('19', '0', 'about', 'about', 'local', '', '1377545685', '1377545685', '0');
INSERT INTO `default_file_folders` VALUES ('27', '0', 'services', 'services', 'local', '', '1377630936', '1377630936', '0');
INSERT INTO `default_file_folders` VALUES ('28', '0', 'testimonies', 'testimonies', 'local', '', '1377632093', '1377632093', '0');
INSERT INTO `default_file_folders` VALUES ('29', '0', 'noticias', 'noticias', 'local', '', '1377808005', '1377808005', '0');
INSERT INTO `default_file_folders` VALUES ('39', '0', 'work-us', 'work_us', 'local', '', '1378409980', '1378409980', '0');

-- ----------------------------
-- Table structure for `default_groups`
-- ----------------------------
DROP TABLE IF EXISTS `default_groups`;
CREATE TABLE `default_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_groups
-- ----------------------------
INSERT INTO `default_groups` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `default_groups` VALUES ('2', 'user', 'User');
INSERT INTO `default_groups` VALUES ('3', 'building-admin', 'Administradores de edificios');

-- ----------------------------
-- Table structure for `default_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `default_keywords`;
CREATE TABLE `default_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_keywords
-- ----------------------------

-- ----------------------------
-- Table structure for `default_keywords_applied`
-- ----------------------------
DROP TABLE IF EXISTS `default_keywords_applied`;
CREATE TABLE `default_keywords_applied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `keyword_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_keywords_applied
-- ----------------------------

-- ----------------------------
-- Table structure for `default_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `default_migrations`;
CREATE TABLE `default_migrations` (
  `version` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_migrations
-- ----------------------------
INSERT INTO `default_migrations` VALUES ('128');

-- ----------------------------
-- Table structure for `default_modules`
-- ----------------------------
DROP TABLE IF EXISTS `default_modules`;
CREATE TABLE `default_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `skip_xss` tinyint(1) NOT NULL,
  `is_frontend` tinyint(1) NOT NULL,
  `is_backend` tinyint(1) NOT NULL,
  `menu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `installed` tinyint(1) NOT NULL,
  `is_core` tinyint(1) NOT NULL,
  `updated_on` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_modules
-- ----------------------------
INSERT INTO `default_modules` VALUES ('1', 'a:25:{s:2:\"en\";s:8:\"Settings\";s:2:\"ar\";s:18:\"الإعدادات\";s:2:\"br\";s:15:\"Configurações\";s:2:\"pt\";s:15:\"Configurações\";s:2:\"cs\";s:10:\"Nastavení\";s:2:\"da\";s:13:\"Indstillinger\";s:2:\"de\";s:13:\"Einstellungen\";s:2:\"el\";s:18:\"Ρυθμίσεις\";s:2:\"es\";s:15:\"Configuraciones\";s:2:\"fa\";s:14:\"تنظیمات\";s:2:\"fi\";s:9:\"Asetukset\";s:2:\"fr\";s:11:\"Paramètres\";s:2:\"he\";s:12:\"הגדרות\";s:2:\"id\";s:10:\"Pengaturan\";s:2:\"it\";s:12:\"Impostazioni\";s:2:\"lt\";s:10:\"Nustatymai\";s:2:\"nl\";s:12:\"Instellingen\";s:2:\"pl\";s:10:\"Ustawienia\";s:2:\"ru\";s:18:\"Настройки\";s:2:\"sl\";s:10:\"Nastavitve\";s:2:\"tw\";s:12:\"網站設定\";s:2:\"cn\";s:12:\"网站设定\";s:2:\"hu\";s:14:\"Beállítások\";s:2:\"th\";s:21:\"ตั้งค่า\";s:2:\"se\";s:14:\"Inställningar\";}', 'settings', '1.0.0', null, 'a:25:{s:2:\"en\";s:89:\"Allows administrators to update settings like Site Name, messages and email address, etc.\";s:2:\"ar\";s:161:\"تمكن المدراء من تحديث الإعدادات كإسم الموقع، والرسائل وعناوين البريد الإلكتروني، .. إلخ.\";s:2:\"br\";s:120:\"Permite com que administradores e a equipe consigam trocar as configurações do website incluindo o nome e descrição.\";s:2:\"pt\";s:113:\"Permite com que os administradores consigam alterar as configurações do website incluindo o nome e descrição.\";s:2:\"cs\";s:102:\"Umožňuje administrátorům měnit nastavení webu jako jeho jméno, zprávy a emailovou adresu apod.\";s:2:\"da\";s:90:\"Lader administratorer opdatere indstillinger som sidenavn, beskeder og email adresse, etc.\";s:2:\"de\";s:92:\"Erlaubt es Administratoren die Einstellungen der Seite wie Name und Beschreibung zu ändern.\";s:2:\"el\";s:230:\"Επιτρέπει στους διαχειριστές να τροποποιήσουν ρυθμίσεις όπως το Όνομα του Ιστοτόπου, τα μηνύματα και τις διευθύνσεις email, κ.α.\";s:2:\"es\";s:131:\"Permite a los administradores y al personal configurar los detalles del sitio como el nombre del sitio y la descripción del mismo.\";s:2:\"fa\";s:105:\"تنظیمات سایت در این ماژول توسط ادمین هاس سایت انجام می شود\";s:2:\"fi\";s:105:\"Mahdollistaa sivuston asetusten muokkaamisen, kuten sivuston nimen, viestit ja sähköpostiosoitteet yms.\";s:2:\"fr\";s:118:\"Permet aux admistrateurs de modifier les paramètres du site : nom du site, description, messages, adresse email, etc.\";s:2:\"he\";s:116:\"ניהול הגדרות שונות של האתר כגון: שם האתר, הודעות, כתובות דואר וכו\";s:2:\"id\";s:112:\"Memungkinkan administrator untuk dapat memperbaharui pengaturan seperti nama situs, pesan dan alamat email, dsb.\";s:2:\"it\";s:109:\"Permette agli amministratori di aggiornare impostazioni quali Nome del Sito, messaggi e indirizzo email, etc.\";s:2:\"lt\";s:104:\"Leidžia administratoriams keisti puslapio vavadinimą, žinutes, administratoriaus el. pašta ir kitą.\";s:2:\"nl\";s:114:\"Maakt het administratoren en medewerkers mogelijk om websiteinstellingen zoals naam en beschrijving te veranderen.\";s:2:\"pl\";s:103:\"Umożliwia administratorom zmianę ustawień strony jak nazwa strony, opis, e-mail administratora, itd.\";s:2:\"ru\";s:135:\"Управление настройками сайта - Имя сайта, сообщения, почтовые адреса и т.п.\";s:2:\"sl\";s:98:\"Dovoljuje administratorjem posodobitev nastavitev kot je Ime strani, sporočil, email naslova itd.\";s:2:\"tw\";s:99:\"網站管理者可更新的重要網站設定。例如：網站名稱、訊息、電子郵件等。\";s:2:\"cn\";s:99:\"网站管理者可更新的重要网站设定。例如：网站名称、讯息、电子邮件等。\";s:2:\"hu\";s:125:\"Lehetővé teszi az adminok számára a beállítások frissítését, mint a weboldal neve, üzenetek, e-mail címek, stb...\";s:2:\"th\";s:232:\"ให้ผู้ดูแลระบบสามารถปรับปรุงการตั้งค่าเช่นชื่อเว็บไซต์ ข้อความและอีเมล์เป็นต้น\";s:2:\"se\";s:84:\"Administratören kan uppdatera webbplatsens titel, meddelanden och E-postadress etc.\";}', '1', '0', '1', 'settings', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('2', 'a:11:{s:2:\"en\";s:12:\"Streams Core\";s:2:\"pt\";s:14:\"Núcleo Fluxos\";s:2:\"fr\";s:10:\"Noyau Flux\";s:2:\"el\";s:23:\"Πυρήνας Ροών\";s:2:\"se\";s:18:\"Streams grundmodul\";s:2:\"tw\";s:14:\"Streams 核心\";s:2:\"cn\";s:14:\"Streams 核心\";s:2:\"ar\";s:31:\"الجداول الأساسية\";s:2:\"it\";s:12:\"Streams Core\";s:2:\"fa\";s:26:\"هسته استریم ها\";s:2:\"fi\";s:13:\"Striimit ydin\";}', 'streams_core', '1.0.0', null, 'a:11:{s:2:\"en\";s:29:\"Core data module for streams.\";s:2:\"pt\";s:37:\"Módulo central de dados para fluxos.\";s:2:\"fr\";s:32:\"Noyau de données pour les Flux.\";s:2:\"el\";s:113:\"Προγραμματιστικός πυρήνας για την λειτουργία ροών δεδομένων.\";s:2:\"se\";s:50:\"Streams grundmodul för enklare hantering av data.\";s:2:\"tw\";s:29:\"Streams 核心資料模組。\";s:2:\"cn\";s:29:\"Streams 核心资料模组。\";s:2:\"ar\";s:57:\"وحدة البيانات الأساسية للجداول\";s:2:\"it\";s:17:\"Core dello Stream\";s:2:\"fa\";s:48:\"ماژول مرکزی برای استریم ها\";s:2:\"fi\";s:48:\"Ydin datan hallinoiva moduuli striimejä varten.\";}', '1', '0', '0', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('3', 'a:21:{s:2:\"en\";s:15:\"Email Templates\";s:2:\"ar\";s:48:\"قوالب الرسائل الإلكترونية\";s:2:\"br\";s:17:\"Modelos de e-mail\";s:2:\"pt\";s:17:\"Modelos de e-mail\";s:2:\"da\";s:16:\"Email skabeloner\";s:2:\"el\";s:22:\"Δυναμικά email\";s:2:\"es\";s:19:\"Plantillas de email\";s:2:\"fa\";s:26:\"قالب های ایمیل\";s:2:\"fr\";s:17:\"Modèles d\'emails\";s:2:\"he\";s:12:\"תבניות\";s:2:\"id\";s:14:\"Template Email\";s:2:\"lt\";s:22:\"El. laiškų šablonai\";s:2:\"nl\";s:15:\"Email sjablonen\";s:2:\"ru\";s:25:\"Шаблоны почты\";s:2:\"sl\";s:14:\"Email predloge\";s:2:\"tw\";s:12:\"郵件範本\";s:2:\"cn\";s:12:\"邮件范本\";s:2:\"hu\";s:15:\"E-mail sablonok\";s:2:\"fi\";s:25:\"Sähköposti viestipohjat\";s:2:\"th\";s:33:\"แม่แบบอีเมล\";s:2:\"se\";s:12:\"E-postmallar\";}', 'templates', '1.1.0', null, 'a:21:{s:2:\"en\";s:46:\"Create, edit, and save dynamic email templates\";s:2:\"ar\";s:97:\"أنشئ، عدّل واحفظ قوالب البريد الإلكترني الديناميكية.\";s:2:\"br\";s:51:\"Criar, editar e salvar modelos de e-mail dinâmicos\";s:2:\"pt\";s:51:\"Criar, editar e salvar modelos de e-mail dinâmicos\";s:2:\"da\";s:49:\"Opret, redigér og gem dynamiske emailskabeloner.\";s:2:\"el\";s:108:\"Δημιουργήστε, επεξεργαστείτε και αποθηκεύστε δυναμικά email.\";s:2:\"es\";s:54:\"Crear, editar y guardar plantillas de email dinámicas\";s:2:\"fa\";s:92:\"ایحاد، ویرایش و ذخیره ی قالب های ایمیل به صورت پویا\";s:2:\"fr\";s:61:\"Créer, éditer et sauver dynamiquement des modèles d\'emails\";s:2:\"he\";s:54:\"ניהול של תבניות דואר אלקטרוני\";s:2:\"id\";s:55:\"Membuat, mengedit, dan menyimpan template email dinamis\";s:2:\"lt\";s:58:\"Kurk, tvarkyk ir saugok dinaminius el. laiškų šablonus.\";s:2:\"nl\";s:49:\"Maak, bewerk, en beheer dynamische emailsjablonen\";s:2:\"ru\";s:127:\"Создавайте, редактируйте и сохраняйте динамические почтовые шаблоны\";s:2:\"sl\";s:52:\"Ustvari, uredi in shrani spremenljive email predloge\";s:2:\"tw\";s:61:\"新增、編輯與儲存可顯示動態資料的 email 範本\";s:2:\"cn\";s:61:\"新增、编辑与储存可显示动态资料的 email 范本\";s:2:\"hu\";s:63:\"Csináld, szerkeszd és mentsd el a dinamikus e-mail sablonokat\";s:2:\"fi\";s:66:\"Lisää, muokkaa ja tallenna dynaamisia sähköposti viestipohjia.\";s:2:\"th\";s:129:\"การสร้างแก้ไขและบันทึกแม่แบบอีเมลแบบไดนามิก\";s:2:\"se\";s:49:\"Skapa, redigera och spara dynamiska E-postmallar.\";}', '1', '0', '1', 'structure', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('4', 'a:25:{s:2:\"en\";s:7:\"Add-ons\";s:2:\"ar\";s:16:\"الإضافات\";s:2:\"br\";s:12:\"Complementos\";s:2:\"pt\";s:12:\"Complementos\";s:2:\"cs\";s:8:\"Doplňky\";s:2:\"da\";s:7:\"Add-ons\";s:2:\"de\";s:13:\"Erweiterungen\";s:2:\"el\";s:16:\"Πρόσθετα\";s:2:\"es\";s:9:\"Agregados\";s:2:\"fa\";s:17:\"افزونه ها\";s:2:\"fi\";s:9:\"Lisäosat\";s:2:\"fr\";s:10:\"Extensions\";s:2:\"he\";s:12:\"תוספות\";s:2:\"id\";s:7:\"Pengaya\";s:2:\"it\";s:7:\"Add-ons\";s:2:\"lt\";s:7:\"Priedai\";s:2:\"nl\";s:7:\"Add-ons\";s:2:\"pl\";s:12:\"Rozszerzenia\";s:2:\"ru\";s:20:\"Дополнения\";s:2:\"sl\";s:11:\"Razširitve\";s:2:\"tw\";s:12:\"附加模組\";s:2:\"cn\";s:12:\"附加模组\";s:2:\"hu\";s:14:\"Bővítmények\";s:2:\"th\";s:27:\"ส่วนเสริม\";s:2:\"se\";s:8:\"Tillägg\";}', 'addons', '2.0.0', null, 'a:25:{s:2:\"en\";s:59:\"Allows admins to see a list of currently installed modules.\";s:2:\"ar\";s:91:\"تُمكّن المُدراء من معاينة جميع الوحدات المُثبّتة.\";s:2:\"br\";s:75:\"Permite aos administradores ver a lista dos módulos instalados atualmente.\";s:2:\"pt\";s:75:\"Permite aos administradores ver a lista dos módulos instalados atualmente.\";s:2:\"cs\";s:68:\"Umožňuje administrátorům vidět seznam nainstalovaných modulů.\";s:2:\"da\";s:63:\"Lader administratorer se en liste over de installerede moduler.\";s:2:\"de\";s:56:\"Zeigt Administratoren alle aktuell installierten Module.\";s:2:\"el\";s:152:\"Επιτρέπει στους διαχειριστές να προβάλουν μια λίστα των εγκατεστημένων πρόσθετων.\";s:2:\"es\";s:71:\"Permite a los administradores ver una lista de los módulos instalados.\";s:2:\"fa\";s:93:\"مشاهده لیست افزونه ها و مدیریت آنها برای ادمین سایت\";s:2:\"fi\";s:60:\"Listaa järjestelmänvalvojalle käytössä olevat moduulit.\";s:2:\"fr\";s:66:\"Permet aux administrateurs de voir la liste des modules installés\";s:2:\"he\";s:160:\"נותן אופציה למנהל לראות רשימה של המודולים אשר מותקנים כעת באתר או להתקין מודולים נוספים\";s:2:\"id\";s:57:\"Memperlihatkan kepada admin daftar modul yang terinstall.\";s:2:\"it\";s:83:\"Permette agli amministratori di vedere una lista dei moduli attualmente installati.\";s:2:\"lt\";s:75:\"Vartotojai ir svečiai gali komentuoti jūsų naujienas, puslapius ar foto.\";s:2:\"nl\";s:79:\"Stelt admins in staat om een overzicht van geinstalleerde modules te genereren.\";s:2:\"pl\";s:81:\"Umożliwiają administratorowi wgląd do listy obecnie zainstalowanych modułów.\";s:2:\"ru\";s:83:\"Список модулей, которые установлены на сайте.\";s:2:\"sl\";s:65:\"Dovoljuje administratorjem pregled trenutno nameščenih modulov.\";s:2:\"tw\";s:54:\"管理員可以檢視目前已經安裝模組的列表\";s:2:\"cn\";s:54:\"管理员可以检视目前已经安装模组的列表\";s:2:\"hu\";s:79:\"Lehetővé teszi az adminoknak, hogy lássák a telepített modulok listáját.\";s:2:\"th\";s:162:\"ช่วยให้ผู้ดูแลระบบดูรายการของโมดูลที่ติดตั้งในปัจจุบัน\";s:2:\"se\";s:67:\"Gör det möjligt för administratören att se installerade mouler.\";}', '0', '0', '1', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('5', 'a:18:{s:2:\"en\";s:4:\"Blog\";s:2:\"ar\";s:16:\"المدوّنة\";s:2:\"br\";s:4:\"Blog\";s:2:\"pt\";s:4:\"Blog\";s:2:\"el\";s:18:\"Ιστολόγιο\";s:2:\"fa\";s:8:\"بلاگ\";s:2:\"he\";s:8:\"בלוג\";s:2:\"id\";s:4:\"Blog\";s:2:\"lt\";s:6:\"Blogas\";s:2:\"pl\";s:4:\"Blog\";s:2:\"ru\";s:8:\"Блог\";s:2:\"tw\";s:6:\"文章\";s:2:\"cn\";s:6:\"文章\";s:2:\"hu\";s:4:\"Blog\";s:2:\"fi\";s:5:\"Blogi\";s:2:\"th\";s:15:\"บล็อก\";s:2:\"se\";s:5:\"Blogg\";s:2:\"es\";s:8:\"Noticias\";}', 'blog', '2.0.0', null, 'a:25:{s:2:\"en\";s:18:\"Post blog entries.\";s:2:\"ar\";s:48:\"أنشر المقالات على مدوّنتك.\";s:2:\"br\";s:30:\"Escrever publicações de blog\";s:2:\"pt\";s:39:\"Escrever e editar publicações no blog\";s:2:\"cs\";s:49:\"Publikujte nové články a příspěvky na blog.\";s:2:\"da\";s:17:\"Skriv blogindlæg\";s:2:\"de\";s:47:\"Veröffentliche neue Artikel und Blog-Einträge\";s:2:\"sl\";s:23:\"Objavite blog prispevke\";s:2:\"fi\";s:28:\"Kirjoita blogi artikkeleita.\";s:2:\"el\";s:93:\"Δημιουργήστε άρθρα και εγγραφές στο ιστολόγιο σας.\";s:2:\"es\";s:54:\"Escribe entradas para los artículos y blog (web log).\";s:2:\"fa\";s:44:\"مقالات منتشر شده در بلاگ\";s:2:\"fr\";s:34:\"Poster des articles d\'actualités.\";s:2:\"he\";s:19:\"ניהול בלוג\";s:2:\"id\";s:15:\"Post entri blog\";s:2:\"it\";s:36:\"Pubblica notizie e post per il blog.\";s:2:\"lt\";s:40:\"Rašykite naujienas bei blog\'o įrašus.\";s:2:\"nl\";s:41:\"Post nieuwsartikelen en blogs op uw site.\";s:2:\"pl\";s:27:\"Dodawaj nowe wpisy na blogu\";s:2:\"ru\";s:49:\"Управление записями блога.\";s:2:\"tw\";s:42:\"發表新聞訊息、部落格等文章。\";s:2:\"cn\";s:42:\"发表新闻讯息、部落格等文章。\";s:2:\"th\";s:48:\"โพสต์รายการบล็อก\";s:2:\"hu\";s:32:\"Blog bejegyzések létrehozása.\";s:2:\"se\";s:18:\"Inlägg i bloggen.\";}', '1', '1', '1', 'content', '1', '1', '1', '1378420805');
INSERT INTO `default_modules` VALUES ('6', 'a:25:{s:2:\"en\";s:8:\"Comments\";s:2:\"ar\";s:18:\"التعليقات\";s:2:\"br\";s:12:\"Comentários\";s:2:\"pt\";s:12:\"Comentários\";s:2:\"cs\";s:11:\"Komentáře\";s:2:\"da\";s:11:\"Kommentarer\";s:2:\"de\";s:10:\"Kommentare\";s:2:\"el\";s:12:\"Σχόλια\";s:2:\"es\";s:11:\"Comentarios\";s:2:\"fi\";s:9:\"Kommentit\";s:2:\"fr\";s:12:\"Commentaires\";s:2:\"fa\";s:10:\"نظرات\";s:2:\"he\";s:12:\"תגובות\";s:2:\"id\";s:8:\"Komentar\";s:2:\"it\";s:8:\"Commenti\";s:2:\"lt\";s:10:\"Komentarai\";s:2:\"nl\";s:8:\"Reacties\";s:2:\"pl\";s:10:\"Komentarze\";s:2:\"ru\";s:22:\"Комментарии\";s:2:\"sl\";s:10:\"Komentarji\";s:2:\"tw\";s:6:\"回應\";s:2:\"cn\";s:6:\"回应\";s:2:\"hu\";s:16:\"Hozzászólások\";s:2:\"th\";s:33:\"ความคิดเห็น\";s:2:\"se\";s:11:\"Kommentarer\";}', 'comments', '1.1.0', null, 'a:25:{s:2:\"en\";s:76:\"Users and guests can write comments for content like blog, pages and photos.\";s:2:\"ar\";s:152:\"يستطيع الأعضاء والزوّار كتابة التعليقات على المُحتوى كالأخبار، والصفحات والصّوَر.\";s:2:\"br\";s:97:\"Usuários e convidados podem escrever comentários para quase tudo com suporte nativo ao captcha.\";s:2:\"pt\";s:100:\"Utilizadores e convidados podem escrever comentários para quase tudo com suporte nativo ao captcha.\";s:2:\"cs\";s:100:\"Uživatelé a hosté mohou psát komentáře k obsahu, např. neovinkám, stránkám a fotografiím.\";s:2:\"da\";s:83:\"Brugere og besøgende kan skrive kommentarer til indhold som blog, sider og fotoer.\";s:2:\"de\";s:65:\"Benutzer und Gäste können für fast alles Kommentare schreiben.\";s:2:\"el\";s:224:\"Οι χρήστες και οι επισκέπτες μπορούν να αφήνουν σχόλια για περιεχόμενο όπως το ιστολόγιο, τις σελίδες και τις φωτογραφίες.\";s:2:\"es\";s:130:\"Los usuarios y visitantes pueden escribir comentarios en casi todo el contenido con el soporte de un sistema de captcha incluído.\";s:2:\"fa\";s:168:\"کاربران و مهمان ها می توانند نظرات خود را بر روی محتوای سایت در بلاگ و دیگر قسمت ها ارائه دهند\";s:2:\"fi\";s:107:\"Käyttäjät ja vieraat voivat kirjoittaa kommentteja eri sisältöihin kuten uutisiin, sivuihin ja kuviin.\";s:2:\"fr\";s:130:\"Les utilisateurs et les invités peuvent écrire des commentaires pour quasiment tout grâce au générateur de captcha intégré.\";s:2:\"he\";s:94:\"משתמשי האתר יכולים לרשום תגובות למאמרים, תמונות וכו\";s:2:\"id\";s:100:\"Pengguna dan pengunjung dapat menuliskan komentaruntuk setiap konten seperti blog, halaman dan foto.\";s:2:\"it\";s:85:\"Utenti e visitatori possono scrivere commenti ai contenuti quali blog, pagine e foto.\";s:2:\"lt\";s:75:\"Vartotojai ir svečiai gali komentuoti jūsų naujienas, puslapius ar foto.\";s:2:\"nl\";s:52:\"Gebruikers en gasten kunnen reageren op bijna alles.\";s:2:\"pl\";s:93:\"Użytkownicy i goście mogą dodawać komentarze z wbudowanym systemem zabezpieczeń captcha.\";s:2:\"ru\";s:187:\"Пользователи и гости могут добавлять комментарии к новостям, информационным страницам и фотографиям.\";s:2:\"sl\";s:89:\"Uporabniki in obiskovalci lahko vnesejo komentarje na vsebino kot je blok, stra ali slike\";s:2:\"tw\";s:75:\"用戶和訪客可以針對新聞、頁面與照片等內容發表回應。\";s:2:\"cn\";s:75:\"用户和访客可以针对新闻、页面与照片等内容发表回应。\";s:2:\"hu\";s:117:\"A felhasználók és a vendégek hozzászólásokat írhatnak a tartalomhoz (bejegyzésekhez, oldalakhoz, fotókhoz).\";s:2:\"th\";s:240:\"ผู้ใช้งานและผู้เยี่ยมชมสามารถเขียนความคิดเห็นในเนื้อหาของหน้าเว็บบล็อกและภาพถ่าย\";s:2:\"se\";s:98:\"Användare och besökare kan skriva kommentarer till innehåll som blogginlägg, sidor och bilder.\";}', '0', '0', '1', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('7', 'a:25:{s:2:\"en\";s:7:\"Contact\";s:2:\"ar\";s:14:\"الإتصال\";s:2:\"br\";s:7:\"Contato\";s:2:\"pt\";s:8:\"Contacto\";s:2:\"cs\";s:7:\"Kontakt\";s:2:\"da\";s:7:\"Kontakt\";s:2:\"de\";s:7:\"Kontakt\";s:2:\"el\";s:22:\"Επικοινωνία\";s:2:\"es\";s:8:\"Contacto\";s:2:\"fa\";s:18:\"تماس با ما\";s:2:\"fi\";s:13:\"Ota yhteyttä\";s:2:\"fr\";s:7:\"Contact\";s:2:\"he\";s:17:\"יצירת קשר\";s:2:\"id\";s:6:\"Kontak\";s:2:\"it\";s:10:\"Contattaci\";s:2:\"lt\";s:18:\"Kontaktinė formą\";s:2:\"nl\";s:7:\"Contact\";s:2:\"pl\";s:7:\"Kontakt\";s:2:\"ru\";s:27:\"Обратная связь\";s:2:\"sl\";s:7:\"Kontakt\";s:2:\"tw\";s:12:\"聯絡我們\";s:2:\"cn\";s:12:\"联络我们\";s:2:\"hu\";s:9:\"Kapcsolat\";s:2:\"th\";s:18:\"ติดต่อ\";s:2:\"se\";s:7:\"Kontakt\";}', 'contact', '1.0.0', null, 'a:25:{s:2:\"en\";s:112:\"Adds a form to your site that allows visitors to send emails to you without disclosing an email address to them.\";s:2:\"ar\";s:157:\"إضافة استمارة إلى موقعك تُمكّن الزوّار من مراسلتك دون علمهم بعنوان البريد الإلكتروني.\";s:2:\"br\";s:139:\"Adiciona um formulário para o seu site permitir aos visitantes que enviem e-mails para voce sem divulgar um endereço de e-mail para eles.\";s:2:\"pt\";s:116:\"Adiciona um formulário ao seu site que permite aos visitantes enviarem e-mails sem divulgar um endereço de e-mail.\";s:2:\"cs\";s:149:\"Přidá na web kontaktní formulář pro návštěvníky a uživatele, díky kterému vás mohou kontaktovat i bez znalosti vaší e-mailové adresy.\";s:2:\"da\";s:123:\"Tilføjer en formular på din side som tillader besøgende at sende mails til dig, uden at du skal opgive din email-adresse\";s:2:\"de\";s:119:\"Fügt ein Formular hinzu, welches Besuchern erlaubt Emails zu schreiben, ohne die Kontakt Email-Adresse offen zu legen.\";s:2:\"el\";s:273:\"Προσθέτει μια φόρμα στον ιστότοπό σας που επιτρέπει σε επισκέπτες να σας στέλνουν μηνύμα μέσω email χωρίς να τους αποκαλύπτεται η διεύθυνση του email σας.\";s:2:\"fa\";s:239:\"فرم تماس را به سایت اضافه می کند تا مراجعین بتوانند بدون اینکه ایمیل شما را بدانند برای شما پیغام هایی را از طریق ایمیل ارسال نمایند.\";s:2:\"es\";s:156:\"Añade un formulario a tu sitio que permitirá a los visitantes enviarte correos electrónicos a ti sin darles tu dirección de correo directamente a ellos.\";s:2:\"fi\";s:128:\"Luo lomakkeen sivustollesi, josta kävijät voivat lähettää sähköpostia tietämättä vastaanottajan sähköpostiosoitetta.\";s:2:\"fr\";s:122:\"Ajoute un formulaire à votre site qui permet aux visiteurs de vous envoyer un e-mail sans révéler votre adresse e-mail.\";s:2:\"he\";s:155:\"מוסיף תופס יצירת קשר לאתר על מנת לא לחסוף כתובת דואר האלקטרוני של האתר למנועי פרסומות\";s:2:\"id\";s:149:\"Menambahkan formulir ke dalam situs Anda yang memungkinkan pengunjung untuk mengirimkan email kepada Anda tanpa memberikan alamat email kepada mereka\";s:2:\"it\";s:119:\"Aggiunge un modulo al tuo sito che permette ai visitatori di inviarti email senza mostrare loro il tuo indirizzo email.\";s:2:\"lt\";s:124:\"Prideda jūsų puslapyje formą leidžianti lankytojams siūsti jums el. laiškus neatskleidžiant jūsų el. pašto adreso.\";s:2:\"nl\";s:125:\"Voegt een formulier aan de site toe waarmee bezoekers een email kunnen sturen, zonder dat u ze een emailadres hoeft te tonen.\";s:2:\"pl\";s:126:\"Dodaje formularz kontaktowy do Twojej strony, który pozwala użytkownikom wysłanie maila za pomocą formularza kontaktowego.\";s:2:\"ru\";s:234:\"Добавляет форму обратной связи на сайт, через которую посетители могут отправлять вам письма, при этом адрес Email остаётся скрыт.\";s:2:\"sl\";s:113:\"Dodaj obrazec za kontakt da vam lahko obiskovalci pošljejo sporočilo brez da bi jim razkrili vaš email naslov.\";s:2:\"tw\";s:147:\"為您的網站新增「聯絡我們」的功能，對訪客是較為清楚便捷的聯絡方式，也無須您將電子郵件公開在網站上。\";s:2:\"cn\";s:147:\"为您的网站新增“联络我们”的功能，对访客是较为清楚便捷的联络方式，也无须您将电子邮件公开在网站上。\";s:2:\"th\";s:316:\"เพิ่มแบบฟอร์มในเว็บไซต์ของคุณ ช่วยให้ผู้เยี่ยมชมสามารถส่งอีเมลถึงคุณโดยไม่ต้องเปิดเผยที่อยู่อีเมลของพวกเขา\";s:2:\"hu\";s:156:\"Létrehozható vele olyan űrlap, amely lehetővé teszi a látogatók számára, hogy e-mailt küldjenek neked úgy, hogy nem feded fel az e-mail címedet.\";s:2:\"se\";s:53:\"Lägger till ett kontaktformulär till din webbplats.\";}', '0', '0', '0', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('8', 'a:8:{s:2:\"en\";s:7:\"Domains\";s:2:\"el\";s:7:\"Domains\";s:2:\"fr\";s:8:\"Domaines\";s:2:\"se\";s:8:\"Domäner\";s:2:\"it\";s:6:\"Domini\";s:2:\"ar\";s:27:\"أسماء النطاقات\";s:2:\"tw\";s:6:\"網域\";s:2:\"cn\";s:6:\"网域\";}', 'domains', '1.0.0', null, 'a:8:{s:2:\"en\";s:39:\"Create domain aliases for your website.\";s:2:\"el\";s:91:\"Διαχειριστείτε συνώνυμα domain για τον ιστότοπό σας.\";s:2:\"fr\";s:47:\"Créer des alias de domaine pour votre site web\";s:2:\"se\";s:36:\"Skapa domänalias för din webbplats\";s:2:\"it\";s:26:\"Crea alias per il tuo sito\";s:2:\"ar\";s:57:\"أنشئ أسماء نطاقات بديلة لموقعك.\";s:2:\"tw\";s:33:\"為您的網站建立網域別名\";s:2:\"cn\";s:33:\"为您的网站建立网域别名\";}', '0', '0', '1', 'structure', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('9', 'a:24:{s:2:\"en\";s:5:\"Files\";s:2:\"ar\";s:16:\"الملفّات\";s:2:\"br\";s:8:\"Arquivos\";s:2:\"pt\";s:9:\"Ficheiros\";s:2:\"cs\";s:7:\"Soubory\";s:2:\"da\";s:5:\"Filer\";s:2:\"de\";s:7:\"Dateien\";s:2:\"el\";s:12:\"Αρχεία\";s:2:\"es\";s:8:\"Archivos\";s:2:\"fa\";s:13:\"فایل ها\";s:2:\"fi\";s:9:\"Tiedostot\";s:2:\"fr\";s:8:\"Fichiers\";s:2:\"he\";s:10:\"קבצים\";s:2:\"id\";s:4:\"File\";s:2:\"it\";s:4:\"File\";s:2:\"lt\";s:6:\"Failai\";s:2:\"nl\";s:9:\"Bestanden\";s:2:\"ru\";s:10:\"Файлы\";s:2:\"sl\";s:8:\"Datoteke\";s:2:\"tw\";s:6:\"檔案\";s:2:\"cn\";s:6:\"档案\";s:2:\"hu\";s:7:\"Fájlok\";s:2:\"th\";s:12:\"ไฟล์\";s:2:\"se\";s:5:\"Filer\";}', 'files', '2.0.0', null, 'a:24:{s:2:\"en\";s:40:\"Manages files and folders for your site.\";s:2:\"ar\";s:50:\"إدارة ملفات ومجلّدات موقعك.\";s:2:\"br\";s:53:\"Permite gerenciar facilmente os arquivos de seu site.\";s:2:\"pt\";s:59:\"Permite gerir facilmente os ficheiros e pastas do seu site.\";s:2:\"cs\";s:43:\"Spravujte soubory a složky na vašem webu.\";s:2:\"da\";s:41:\"Administrer filer og mapper for dit site.\";s:2:\"de\";s:35:\"Verwalte Dateien und Verzeichnisse.\";s:2:\"el\";s:100:\"Διαχειρίζεται αρχεία και φακέλους για το ιστότοπό σας.\";s:2:\"es\";s:43:\"Administra archivos y carpetas en tu sitio.\";s:2:\"fa\";s:79:\"مدیریت فایل های چند رسانه ای و فولدر ها سایت\";s:2:\"fi\";s:43:\"Hallitse sivustosi tiedostoja ja kansioita.\";s:2:\"fr\";s:46:\"Gérer les fichiers et dossiers de votre site.\";s:2:\"he\";s:47:\"ניהול תיקיות וקבצים שבאתר\";s:2:\"id\";s:42:\"Mengatur file dan folder dalam situs Anda.\";s:2:\"it\";s:38:\"Gestisci file e cartelle del tuo sito.\";s:2:\"lt\";s:28:\"Katalogų ir bylų valdymas.\";s:2:\"nl\";s:41:\"Beheer bestanden en mappen op uw website.\";s:2:\"ru\";s:78:\"Управление файлами и папками вашего сайта.\";s:2:\"sl\";s:38:\"Uredi datoteke in mape na vaši strani\";s:2:\"tw\";s:33:\"管理網站中的檔案與目錄\";s:2:\"cn\";s:33:\"管理网站中的档案与目录\";s:2:\"hu\";s:41:\"Fájlok és mappák kezelése az oldalon.\";s:2:\"th\";s:141:\"บริหารจัดการไฟล์และโฟลเดอร์สำหรับเว็บไซต์ของคุณ\";s:2:\"se\";s:45:\"Hanterar filer och mappar för din webbplats.\";}', '0', '0', '1', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('10', 'a:24:{s:2:\"en\";s:6:\"Groups\";s:2:\"ar\";s:18:\"المجموعات\";s:2:\"br\";s:6:\"Grupos\";s:2:\"pt\";s:6:\"Grupos\";s:2:\"cs\";s:7:\"Skupiny\";s:2:\"da\";s:7:\"Grupper\";s:2:\"de\";s:7:\"Gruppen\";s:2:\"el\";s:12:\"Ομάδες\";s:2:\"es\";s:6:\"Grupos\";s:2:\"fa\";s:13:\"گروه ها\";s:2:\"fi\";s:7:\"Ryhmät\";s:2:\"fr\";s:7:\"Groupes\";s:2:\"he\";s:12:\"קבוצות\";s:2:\"id\";s:4:\"Grup\";s:2:\"it\";s:6:\"Gruppi\";s:2:\"lt\";s:7:\"Grupės\";s:2:\"nl\";s:7:\"Groepen\";s:2:\"ru\";s:12:\"Группы\";s:2:\"sl\";s:7:\"Skupine\";s:2:\"tw\";s:6:\"群組\";s:2:\"cn\";s:6:\"群组\";s:2:\"hu\";s:9:\"Csoportok\";s:2:\"th\";s:15:\"กลุ่ม\";s:2:\"se\";s:7:\"Grupper\";}', 'groups', '1.0.0', null, 'a:24:{s:2:\"en\";s:54:\"Users can be placed into groups to manage permissions.\";s:2:\"ar\";s:100:\"يمكن وضع المستخدمين في مجموعات لتسهيل إدارة صلاحياتهم.\";s:2:\"br\";s:72:\"Usuários podem ser inseridos em grupos para gerenciar suas permissões.\";s:2:\"pt\";s:74:\"Utilizadores podem ser inseridos em grupos para gerir as suas permissões.\";s:2:\"cs\";s:77:\"Uživatelé mohou být rozřazeni do skupin pro lepší správu oprávnění.\";s:2:\"da\";s:49:\"Brugere kan inddeles i grupper for adgangskontrol\";s:2:\"de\";s:85:\"Benutzer können zu Gruppen zusammengefasst werden um diesen Zugriffsrechte zu geben.\";s:2:\"el\";s:168:\"Οι χρήστες μπορούν να τοποθετηθούν σε ομάδες και έτσι να διαχειριστείτε τα δικαιώματά τους.\";s:2:\"es\";s:75:\"Los usuarios podrán ser colocados en grupos para administrar sus permisos.\";s:2:\"fa\";s:149:\"کاربرها می توانند در گروه های ساماندهی شوند تا بتوان اجازه های مختلفی را ایجاد کرد\";s:2:\"fi\";s:84:\"Käyttäjät voidaan liittää ryhmiin, jotta käyttöoikeuksia voidaan hallinnoida.\";s:2:\"fr\";s:82:\"Les utilisateurs peuvent appartenir à des groupes afin de gérer les permissions.\";s:2:\"he\";s:62:\"נותן אפשרות לאסוף משתמשים לקבוצות\";s:2:\"id\";s:68:\"Pengguna dapat dikelompokkan ke dalam grup untuk mengatur perizinan.\";s:2:\"it\";s:69:\"Gli utenti possono essere inseriti in gruppi per gestirne i permessi.\";s:2:\"lt\";s:67:\"Vartotojai gali būti priskirti grupei tam, kad valdyti jų teises.\";s:2:\"nl\";s:73:\"Gebruikers kunnen in groepen geplaatst worden om rechten te kunnen geven.\";s:2:\"ru\";s:134:\"Пользователей можно объединять в группы, для управления правами доступа.\";s:2:\"sl\";s:64:\"Uporabniki so lahko razvrščeni v skupine za urejanje dovoljenj\";s:2:\"tw\";s:45:\"用戶可以依群組分類並管理其權限\";s:2:\"cn\";s:45:\"用户可以依群组分类并管理其权限\";s:2:\"hu\";s:73:\"A felhasználók csoportokba rendezhetőek a jogosultságok kezelésére.\";s:2:\"th\";s:84:\"สามารถวางผู้ใช้ลงในกลุ่มเพื่\";s:2:\"se\";s:76:\"Användare kan delas in i grupper för att hantera roller och behörigheter.\";}', '0', '0', '1', 'users', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('11', 'a:17:{s:2:\"en\";s:8:\"Keywords\";s:2:\"ar\";s:21:\"كلمات البحث\";s:2:\"br\";s:14:\"Palavras-chave\";s:2:\"pt\";s:14:\"Palavras-chave\";s:2:\"da\";s:9:\"Nøgleord\";s:2:\"el\";s:27:\"Λέξεις Κλειδιά\";s:2:\"fa\";s:21:\"کلمات کلیدی\";s:2:\"fr\";s:10:\"Mots-Clés\";s:2:\"id\";s:10:\"Kata Kunci\";s:2:\"nl\";s:14:\"Sleutelwoorden\";s:2:\"tw\";s:6:\"鍵詞\";s:2:\"cn\";s:6:\"键词\";s:2:\"hu\";s:11:\"Kulcsszavak\";s:2:\"fi\";s:10:\"Avainsanat\";s:2:\"sl\";s:15:\"Ključne besede\";s:2:\"th\";s:15:\"คำค้น\";s:2:\"se\";s:9:\"Nyckelord\";}', 'keywords', '1.1.0', null, 'a:17:{s:2:\"en\";s:71:\"Maintain a central list of keywords to label and organize your content.\";s:2:\"ar\";s:124:\"أنشئ مجموعة من كلمات البحث التي تستطيع من خلالها وسم وتنظيم المحتوى.\";s:2:\"br\";s:85:\"Mantém uma lista central de palavras-chave para rotular e organizar o seu conteúdo.\";s:2:\"pt\";s:85:\"Mantém uma lista central de palavras-chave para rotular e organizar o seu conteúdo.\";s:2:\"da\";s:72:\"Vedligehold en central liste af nøgleord for at organisere dit indhold.\";s:2:\"el\";s:181:\"Συντηρεί μια κεντρική λίστα από λέξεις κλειδιά για να οργανώνετε μέσω ετικετών το περιεχόμενό σας.\";s:2:\"fa\";s:110:\"حفظ و نگهداری لیست مرکزی از کلمات کلیدی برای سازماندهی محتوا\";s:2:\"fr\";s:87:\"Maintenir une liste centralisée de Mots-Clés pour libeller et organiser vos contenus.\";s:2:\"id\";s:71:\"Memantau daftar kata kunci untuk melabeli dan mengorganisasikan konten.\";s:2:\"nl\";s:91:\"Beheer een centrale lijst van sleutelwoorden om uw content te categoriseren en organiseren.\";s:2:\"tw\";s:64:\"集中管理可用於標題與內容的鍵詞(keywords)列表。\";s:2:\"cn\";s:64:\"集中管理可用于标题与内容的键词(keywords)列表。\";s:2:\"hu\";s:65:\"Ez egy központi kulcsszó lista a cimkékhez és a tartalmakhoz.\";s:2:\"fi\";s:92:\"Hallinnoi keskitettyä listaa avainsanoista merkitäksesi ja järjestelläksesi sisältöä.\";s:2:\"sl\";s:82:\"Vzdržuj centralni seznam ključnih besed za označevanje in ogranizacijo vsebine.\";s:2:\"th\";s:189:\"ศูนย์กลางการปรับปรุงคำค้นในการติดฉลากและจัดระเบียบเนื้อหาของคุณ\";s:2:\"se\";s:61:\"Hantera nyckelord för att organisera webbplatsens innehåll.\";}', '0', '0', '1', 'data', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('12', 'a:15:{s:2:\"en\";s:11:\"Maintenance\";s:2:\"pt\";s:12:\"Manutenção\";s:2:\"ar\";s:14:\"الصيانة\";s:2:\"el\";s:18:\"Συντήρηση\";s:2:\"hu\";s:13:\"Karbantartás\";s:2:\"fa\";s:15:\"نگه داری\";s:2:\"fi\";s:9:\"Ylläpito\";s:2:\"fr\";s:11:\"Maintenance\";s:2:\"id\";s:12:\"Pemeliharaan\";s:2:\"it\";s:12:\"Manutenzione\";s:2:\"se\";s:10:\"Underhåll\";s:2:\"sl\";s:12:\"Vzdrževanje\";s:2:\"th\";s:39:\"การบำรุงรักษา\";s:2:\"tw\";s:6:\"維護\";s:2:\"cn\";s:6:\"维护\";}', 'maintenance', '1.0.0', null, 'a:15:{s:2:\"en\";s:63:\"Manage the site cache and export information from the database.\";s:2:\"pt\";s:68:\"Gerir o cache do seu site e exportar informações da base de dados.\";s:2:\"ar\";s:81:\"حذف عناصر الذاكرة المخبأة عبر واجهة الإدارة.\";s:2:\"el\";s:142:\"Διαγραφή αντικειμένων προσωρινής αποθήκευσης μέσω της περιοχής διαχείρισης.\";s:2:\"id\";s:60:\"Mengatur cache situs dan mengexport informasi dari database.\";s:2:\"it\";s:65:\"Gestisci la cache del sito e esporta le informazioni dal database\";s:2:\"fa\";s:73:\"مدیریت کش سایت و صدور اطلاعات از دیتابیس\";s:2:\"fr\";s:71:\"Gérer le cache du site et exporter les contenus de la base de données\";s:2:\"fi\";s:59:\"Hallinoi sivuston välimuistia ja vie tietoa tietokannasta.\";s:2:\"hu\";s:66:\"Az oldal gyorsítótár kezelése és az adatbázis exportálása.\";s:2:\"se\";s:76:\"Underhåll webbplatsens cache och exportera data från webbplatsens databas.\";s:2:\"sl\";s:69:\"Upravljaj s predpomnilnikom strani (cache) in izvozi podatke iz baze.\";s:2:\"th\";s:150:\"การจัดการแคชเว็บไซต์และข้อมูลการส่งออกจากฐานข้อมูล\";s:2:\"tw\";s:45:\"經由管理介面手動刪除暫存資料。\";s:2:\"cn\";s:45:\"经由管理介面手动删除暂存资料。\";}', '0', '0', '1', 'data', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('13', 'a:25:{s:2:\"en\";s:10:\"Navigation\";s:2:\"ar\";s:14:\"الروابط\";s:2:\"br\";s:11:\"Navegação\";s:2:\"pt\";s:11:\"Navegação\";s:2:\"cs\";s:8:\"Navigace\";s:2:\"da\";s:10:\"Navigation\";s:2:\"de\";s:10:\"Navigation\";s:2:\"el\";s:16:\"Πλοήγηση\";s:2:\"es\";s:11:\"Navegación\";s:2:\"fa\";s:11:\"منو ها\";s:2:\"fi\";s:10:\"Navigointi\";s:2:\"fr\";s:10:\"Navigation\";s:2:\"he\";s:10:\"ניווט\";s:2:\"id\";s:8:\"Navigasi\";s:2:\"it\";s:11:\"Navigazione\";s:2:\"lt\";s:10:\"Navigacija\";s:2:\"nl\";s:9:\"Navigatie\";s:2:\"pl\";s:9:\"Nawigacja\";s:2:\"ru\";s:18:\"Навигация\";s:2:\"sl\";s:10:\"Navigacija\";s:2:\"tw\";s:12:\"導航選單\";s:2:\"cn\";s:12:\"导航选单\";s:2:\"th\";s:36:\"ตัวช่วยนำทาง\";s:2:\"hu\";s:11:\"Navigáció\";s:2:\"se\";s:10:\"Navigation\";}', 'navigation', '1.1.0', null, 'a:25:{s:2:\"en\";s:78:\"Manage links on navigation menus and all the navigation groups they belong to.\";s:2:\"ar\";s:85:\"إدارة روابط وقوائم ومجموعات الروابط في الموقع.\";s:2:\"br\";s:91:\"Gerenciar links do menu de navegação e todos os grupos de navegação pertencentes a ele.\";s:2:\"pt\";s:93:\"Gerir todos os grupos dos menus de navegação e os links de navegação pertencentes a eles.\";s:2:\"cs\";s:73:\"Správa odkazů v navigaci a všech souvisejících navigačních skupin.\";s:2:\"da\";s:82:\"Håndtér links på navigationsmenuerne og alle navigationsgrupperne de tilhører.\";s:2:\"de\";s:76:\"Verwalte Links in Navigationsmenüs und alle zugehörigen Navigationsgruppen\";s:2:\"el\";s:207:\"Διαχειριστείτε τους συνδέσμους στα μενού πλοήγησης και όλες τις ομάδες συνδέσμων πλοήγησης στις οποίες ανήκουν.\";s:2:\"es\";s:102:\"Administra links en los menús de navegación y en todos los grupos de navegación al cual pertenecen.\";s:2:\"fa\";s:68:\"مدیریت منو ها و گروه های مربوط به آنها\";s:2:\"fi\";s:91:\"Hallitse linkkejä navigointi valikoissa ja kaikkia navigointi ryhmiä, joihin ne kuuluvat.\";s:2:\"fr\";s:97:\"Gérer les liens du menu Navigation et tous les groupes de navigation auxquels ils appartiennent.\";s:2:\"he\";s:73:\"ניהול שלוחות תפריטי ניווט וקבוצות ניווט\";s:2:\"id\";s:73:\"Mengatur tautan pada menu navigasi dan semua pengelompokan grup navigasi.\";s:2:\"it\";s:97:\"Gestisci i collegamenti dei menu di navigazione e tutti i gruppi di navigazione da cui dipendono.\";s:2:\"lt\";s:95:\"Tvarkyk nuorodas navigacijų menių ir visas navigacijų grupes kurioms tos nuorodos priklauso.\";s:2:\"nl\";s:92:\"Beheer koppelingen op de navigatiemenu&apos;s en alle navigatiegroepen waar ze onder vallen.\";s:2:\"pl\";s:95:\"Zarządzaj linkami w menu nawigacji oraz wszystkimi grupami nawigacji do których one należą.\";s:2:\"ru\";s:136:\"Управление ссылками в меню навигации и группах, к которым они принадлежат.\";s:2:\"sl\";s:64:\"Uredi povezave v meniju in vse skupine povezav ki jim pripadajo.\";s:2:\"tw\";s:72:\"管理導航選單中的連結，以及它們所隸屬的導航群組。\";s:2:\"cn\";s:72:\"管理导航选单中的连结，以及它们所隶属的导航群组。\";s:2:\"th\";s:108:\"จัดการการเชื่อมโยงนำทางและกลุ่มนำทาง\";s:2:\"se\";s:33:\"Hantera länkar och länkgrupper.\";s:2:\"hu\";s:100:\"Linkek kezelése a navigációs menükben és a navigációs csoportok kezelése, amikhez tartoznak.\";}', '0', '0', '1', 'structure', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('14', 'a:25:{s:2:\"en\";s:5:\"Pages\";s:2:\"ar\";s:14:\"الصفحات\";s:2:\"br\";s:8:\"Páginas\";s:2:\"pt\";s:8:\"Páginas\";s:2:\"cs\";s:8:\"Stránky\";s:2:\"da\";s:5:\"Sider\";s:2:\"de\";s:6:\"Seiten\";s:2:\"el\";s:14:\"Σελίδες\";s:2:\"es\";s:8:\"Páginas\";s:2:\"fa\";s:14:\"صفحه ها \";s:2:\"fi\";s:5:\"Sivut\";s:2:\"fr\";s:5:\"Pages\";s:2:\"he\";s:8:\"דפים\";s:2:\"id\";s:7:\"Halaman\";s:2:\"it\";s:6:\"Pagine\";s:2:\"lt\";s:9:\"Puslapiai\";s:2:\"nl\";s:13:\"Pagina&apos;s\";s:2:\"pl\";s:6:\"Strony\";s:2:\"ru\";s:16:\"Страницы\";s:2:\"sl\";s:6:\"Strani\";s:2:\"tw\";s:6:\"頁面\";s:2:\"cn\";s:6:\"页面\";s:2:\"hu\";s:7:\"Oldalak\";s:2:\"th\";s:21:\"หน้าเพจ\";s:2:\"se\";s:5:\"Sidor\";}', 'pages', '2.2.0', null, 'a:25:{s:2:\"en\";s:55:\"Add custom pages to the site with any content you want.\";s:2:\"ar\";s:99:\"إضافة صفحات مُخصّصة إلى الموقع تحتوي أية مُحتوى تريده.\";s:2:\"br\";s:82:\"Adicionar páginas personalizadas ao site com qualquer conteúdo que você queira.\";s:2:\"pt\";s:86:\"Adicionar páginas personalizadas ao seu site com qualquer conteúdo que você queira.\";s:2:\"cs\";s:74:\"Přidávejte vlastní stránky na web s jakýmkoliv obsahem budete chtít.\";s:2:\"da\";s:71:\"Tilføj brugerdefinerede sider til dit site med det indhold du ønsker.\";s:2:\"de\";s:49:\"Füge eigene Seiten mit anpassbaren Inhalt hinzu.\";s:2:\"el\";s:152:\"Προσθέστε και επεξεργαστείτε σελίδες στον ιστότοπό σας με ό,τι περιεχόμενο θέλετε.\";s:2:\"es\";s:77:\"Agrega páginas customizadas al sitio con cualquier contenido que tu quieras.\";s:2:\"fa\";s:96:\"ایحاد صفحات جدید و دلخواه با هر محتوایی که دوست دارید\";s:2:\"fi\";s:47:\"Lisää mitä tahansa sisältöä sivustollesi.\";s:2:\"fr\";s:89:\"Permet d\'ajouter sur le site des pages personalisées avec le contenu que vous souhaitez.\";s:2:\"he\";s:35:\"ניהול דפי תוכן האתר\";s:2:\"id\";s:75:\"Menambahkan halaman ke dalam situs dengan konten apapun yang Anda perlukan.\";s:2:\"it\";s:73:\"Aggiungi pagine personalizzate al sito con qualsiesi contenuto tu voglia.\";s:2:\"lt\";s:46:\"Pridėkite nuosavus puslapius betkokio turinio\";s:2:\"nl\";s:70:\"Voeg aangepaste pagina&apos;s met willekeurige inhoud aan de site toe.\";s:2:\"pl\";s:53:\"Dodaj własne strony z dowolną treścią do witryny.\";s:2:\"ru\";s:134:\"Управление информационными страницами сайта, с произвольным содержимым.\";s:2:\"sl\";s:44:\"Dodaj stran s kakršno koli vsebino želite.\";s:2:\"tw\";s:39:\"為您的網站新增自定的頁面。\";s:2:\"cn\";s:39:\"为您的网站新增自定的页面。\";s:2:\"th\";s:168:\"เพิ่มหน้าเว็บที่กำหนดเองไปยังเว็บไซต์ของคุณตามที่ต้องการ\";s:2:\"hu\";s:67:\"Saját oldalak hozzáadása a weboldalhoz, akármilyen tartalommal.\";s:2:\"se\";s:39:\"Lägg till egna sidor till webbplatsen.\";}', '1', '1', '1', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('15', 'a:25:{s:2:\"en\";s:11:\"Permissions\";s:2:\"ar\";s:18:\"الصلاحيات\";s:2:\"br\";s:11:\"Permissões\";s:2:\"pt\";s:11:\"Permissões\";s:2:\"cs\";s:12:\"Oprávnění\";s:2:\"da\";s:14:\"Adgangskontrol\";s:2:\"de\";s:14:\"Zugriffsrechte\";s:2:\"el\";s:20:\"Δικαιώματα\";s:2:\"es\";s:8:\"Permisos\";s:2:\"fa\";s:15:\"اجازه ها\";s:2:\"fi\";s:16:\"Käyttöoikeudet\";s:2:\"fr\";s:11:\"Permissions\";s:2:\"he\";s:12:\"הרשאות\";s:2:\"id\";s:9:\"Perizinan\";s:2:\"it\";s:8:\"Permessi\";s:2:\"lt\";s:7:\"Teisės\";s:2:\"nl\";s:15:\"Toegangsrechten\";s:2:\"pl\";s:11:\"Uprawnienia\";s:2:\"ru\";s:25:\"Права доступа\";s:2:\"sl\";s:10:\"Dovoljenja\";s:2:\"tw\";s:6:\"權限\";s:2:\"cn\";s:6:\"权限\";s:2:\"hu\";s:14:\"Jogosultságok\";s:2:\"th\";s:18:\"สิทธิ์\";s:2:\"se\";s:13:\"Behörigheter\";}', 'permissions', '1.0.0', null, 'a:25:{s:2:\"en\";s:68:\"Control what type of users can see certain sections within the site.\";s:2:\"ar\";s:127:\"التحكم بإعطاء الصلاحيات للمستخدمين للوصول إلى أقسام الموقع المختلفة.\";s:2:\"br\";s:68:\"Controle quais tipos de usuários podem ver certas seções no site.\";s:2:\"pt\";s:75:\"Controle quais os tipos de utilizadores podem ver certas secções no site.\";s:2:\"cs\";s:93:\"Spravujte oprávnění pro jednotlivé typy uživatelů a ke kterým sekcím mají přístup.\";s:2:\"da\";s:72:\"Kontroller hvilken type brugere der kan se bestemte sektioner på sitet.\";s:2:\"de\";s:70:\"Regelt welche Art von Benutzer welche Sektion in der Seite sehen kann.\";s:2:\"el\";s:180:\"Ελέγξτε τα δικαιώματα χρηστών και ομάδων χρηστών όσο αφορά σε διάφορες λειτουργίες του ιστοτόπου.\";s:2:\"es\";s:81:\"Controla que tipo de usuarios pueden ver secciones específicas dentro del sitio.\";s:2:\"fa\";s:59:\"مدیریت اجازه های گروه های کاربری\";s:2:\"fi\";s:72:\"Hallitse minkä tyyppisiin osioihin käyttäjät pääsevät sivustolla.\";s:2:\"fr\";s:104:\"Permet de définir les autorisations des groupes d\'utilisateurs pour afficher les différentes sections.\";s:2:\"he\";s:75:\"ניהול הרשאות כניסה לאיזורים מסוימים באתר\";s:2:\"id\";s:76:\"Mengontrol tipe pengguna mana yang dapat mengakses suatu bagian dalam situs.\";s:2:\"it\";s:78:\"Controlla che tipo di utenti posssono accedere a determinate sezioni del sito.\";s:2:\"lt\";s:72:\"Kontroliuokite kokio tipo varotojai kokią dalį puslapio gali pasiekti.\";s:2:\"nl\";s:71:\"Bepaal welke typen gebruikers toegang hebben tot gedeeltes van de site.\";s:2:\"pl\";s:79:\"Ustaw, którzy użytkownicy mogą mieć dostęp do odpowiednich sekcji witryny.\";s:2:\"ru\";s:209:\"Управление правами доступа, ограничение доступа определённых групп пользователей к произвольным разделам сайта.\";s:2:\"sl\";s:85:\"Uredite dovoljenja kateri tip uporabnika lahko vidi določena področja vaše strani.\";s:2:\"tw\";s:81:\"用來控制不同類別的用戶，設定其瀏覽特定網站內容的權限。\";s:2:\"cn\";s:81:\"用来控制不同类别的用户，设定其浏览特定网站内容的权限。\";s:2:\"hu\";s:129:\"A felhasználók felügyelet alatt tartására, hogy milyen típusú felhasználók, mit láthatnak, mely szakaszain az oldalnak.\";s:2:\"th\";s:117:\"ควบคุมว่าผู้ใช้งานจะเห็นหมวดหมู่ไหนบ้าง\";s:2:\"se\";s:27:\"Hantera gruppbehörigheter.\";}', '0', '0', '1', 'users', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('16', 'a:24:{s:2:\"en\";s:9:\"Redirects\";s:2:\"ar\";s:18:\"التوجيهات\";s:2:\"br\";s:17:\"Redirecionamentos\";s:2:\"pt\";s:17:\"Redirecionamentos\";s:2:\"cs\";s:16:\"Přesměrování\";s:2:\"da\";s:13:\"Omadressering\";s:2:\"el\";s:30:\"Ανακατευθύνσεις\";s:2:\"es\";s:13:\"Redirecciones\";s:2:\"fa\";s:17:\"انتقال ها\";s:2:\"fi\";s:18:\"Uudelleenohjaukset\";s:2:\"fr\";s:12:\"Redirections\";s:2:\"he\";s:12:\"הפניות\";s:2:\"id\";s:8:\"Redirect\";s:2:\"it\";s:11:\"Reindirizzi\";s:2:\"lt\";s:14:\"Peradresavimai\";s:2:\"nl\";s:12:\"Verwijzingen\";s:2:\"ru\";s:30:\"Перенаправления\";s:2:\"sl\";s:12:\"Preusmeritve\";s:2:\"tw\";s:6:\"轉址\";s:2:\"cn\";s:6:\"转址\";s:2:\"hu\";s:17:\"Átirányítások\";s:2:\"pl\";s:14:\"Przekierowania\";s:2:\"th\";s:42:\"เปลี่ยนเส้นทาง\";s:2:\"se\";s:14:\"Omdirigeringar\";}', 'redirects', '1.0.0', null, 'a:24:{s:2:\"en\";s:33:\"Redirect from one URL to another.\";s:2:\"ar\";s:47:\"التوجيه من رابط URL إلى آخر.\";s:2:\"br\";s:39:\"Redirecionamento de uma URL para outra.\";s:2:\"pt\";s:40:\"Redirecionamentos de uma URL para outra.\";s:2:\"cs\";s:43:\"Přesměrujte z jedné adresy URL na jinou.\";s:2:\"da\";s:35:\"Omadresser fra en URL til en anden.\";s:2:\"el\";s:81:\"Ανακατευθείνετε μια διεύθυνση URL σε μια άλλη\";s:2:\"es\";s:34:\"Redireccionar desde una URL a otra\";s:2:\"fa\";s:63:\"انتقال دادن یک صفحه به یک آدرس دیگر\";s:2:\"fi\";s:45:\"Uudelleenohjaa käyttäjän paikasta toiseen.\";s:2:\"fr\";s:34:\"Redirection d\'une URL à un autre.\";s:2:\"he\";s:43:\"הפניות מכתובת אחת לאחרת\";s:2:\"id\";s:40:\"Redirect dari satu URL ke URL yang lain.\";s:2:\"it\";s:35:\"Reindirizza da una URL ad un altra.\";s:2:\"lt\";s:56:\"Peradresuokite puslapį iš vieno adreso (URL) į kitą.\";s:2:\"nl\";s:38:\"Verwijs vanaf een URL naar een andere.\";s:2:\"ru\";s:78:\"Перенаправления с одного адреса на другой.\";s:2:\"sl\";s:44:\"Preusmeritev iz enega URL naslova na drugega\";s:2:\"tw\";s:33:\"將網址轉址、重新定向。\";s:2:\"cn\";s:33:\"将网址转址、重新定向。\";s:2:\"hu\";s:38:\"Egy URL átirányítása egy másikra.\";s:2:\"pl\";s:44:\"Przekierowanie z jednego adresu URL na inny.\";s:2:\"th\";s:123:\"เปลี่ยนเส้นทางจากที่หนึ่งไปยังอีกที่หนึ่ง\";s:2:\"se\";s:38:\"Omdirigera från en URL till en annan.\";}', '0', '0', '1', 'structure', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('17', 'a:9:{s:2:\"en\";s:6:\"Search\";s:2:\"fr\";s:9:\"Recherche\";s:2:\"se\";s:4:\"Sök\";s:2:\"ar\";s:10:\"البحث\";s:2:\"tw\";s:6:\"搜尋\";s:2:\"cn\";s:6:\"搜寻\";s:2:\"it\";s:7:\"Ricerca\";s:2:\"fa\";s:10:\"جستجو\";s:2:\"fi\";s:4:\"Etsi\";}', 'search', '1.0.0', null, 'a:9:{s:2:\"en\";s:72:\"Search through various types of content with this modular search system.\";s:2:\"fr\";s:84:\"Rechercher parmi différents types de contenus avec système de recherche modulaire.\";s:2:\"se\";s:36:\"Sök igenom olika typer av innehåll\";s:2:\"ar\";s:102:\"ابحث في أنواع مختلفة من المحتوى باستخدام نظام البحث هذا.\";s:2:\"tw\";s:63:\"此模組可用以搜尋網站中不同類型的資料內容。\";s:2:\"cn\";s:63:\"此模组可用以搜寻网站中不同类型的资料内容。\";s:2:\"it\";s:71:\"Cerca tra diversi tipi di contenuti con il sistema di reicerca modulare\";s:2:\"fa\";s:115:\"توسط این ماژول می توانید در محتواهای مختلف وبسایت جستجو نمایید.\";s:2:\"fi\";s:76:\"Etsi eri tyypistä sisältöä tällä modulaarisella hakujärjestelmällä.\";}', '0', '0', '0', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('18', 'a:20:{s:2:\"en\";s:7:\"Sitemap\";s:2:\"ar\";s:23:\"خريطة الموقع\";s:2:\"br\";s:12:\"Mapa do Site\";s:2:\"pt\";s:12:\"Mapa do Site\";s:2:\"de\";s:7:\"Sitemap\";s:2:\"el\";s:31:\"Χάρτης Ιστότοπου\";s:2:\"es\";s:14:\"Mapa del Sitio\";s:2:\"fa\";s:17:\"نقشه سایت\";s:2:\"fi\";s:10:\"Sivukartta\";s:2:\"fr\";s:12:\"Plan du site\";s:2:\"id\";s:10:\"Peta Situs\";s:2:\"it\";s:14:\"Mappa del sito\";s:2:\"lt\";s:16:\"Svetainės medis\";s:2:\"nl\";s:7:\"Sitemap\";s:2:\"ru\";s:21:\"Карта сайта\";s:2:\"tw\";s:12:\"網站地圖\";s:2:\"cn\";s:12:\"网站地图\";s:2:\"th\";s:21:\"ไซต์แมพ\";s:2:\"hu\";s:13:\"Oldaltérkép\";s:2:\"se\";s:9:\"Sajtkarta\";}', 'sitemap', '1.3.0', null, 'a:21:{s:2:\"en\";s:87:\"The sitemap module creates an index of all pages and an XML sitemap for search engines.\";s:2:\"ar\";s:120:\"وحدة خريطة الموقع تنشئ فهرساً لجميع الصفحات وملف XML لمحركات البحث.\";s:2:\"br\";s:102:\"O módulo de mapa do site cria um índice de todas as páginas e um sitemap XML para motores de busca.\";s:2:\"pt\";s:102:\"O módulo do mapa do site cria um índice de todas as páginas e um sitemap XML para motores de busca.\";s:2:\"da\";s:86:\"Sitemapmodulet opretter et indeks over alle sider og et XML sitemap til søgemaskiner.\";s:2:\"de\";s:92:\"Die Sitemap Modul erstellt einen Index aller Seiten und eine XML-Sitemap für Suchmaschinen.\";s:2:\"el\";s:190:\"Δημιουργεί έναν κατάλογο όλων των σελίδων και έναν χάρτη σελίδων σε μορφή XML για τις μηχανές αναζήτησης.\";s:2:\"es\";s:111:\"El módulo de mapa crea un índice de todas las páginas y un mapa del sitio XML para los motores de búsqueda.\";s:2:\"fa\";s:150:\"ماژول نقشه سایت یک لیست از همه ی صفحه ها به فرمت فایل XML برای موتور های جستجو می سازد\";s:2:\"fi\";s:82:\"sivukartta moduuli luo hakemisto kaikista sivuista ja XML sivukartta hakukoneille.\";s:2:\"fr\";s:106:\"Le module sitemap crée un index de toutes les pages et un plan de site XML pour les moteurs de recherche.\";s:2:\"id\";s:110:\"Modul peta situs ini membuat indeks dari setiap halaman dan sebuah format XML untuk mempermudah mesin pencari.\";s:2:\"it\";s:104:\"Il modulo mappa del sito crea un indice di tutte le pagine e una sitemap in XML per i motori di ricerca.\";s:2:\"lt\";s:86:\"struktūra modulis sukuria visų puslapių ir XML Sitemap paieškos sistemų indeksas.\";s:2:\"nl\";s:89:\"De sitemap module maakt een index van alle pagina\'s en een XML sitemap voor zoekmachines.\";s:2:\"ru\";s:144:\"Карта модуль создает индекс всех страниц и карта сайта XML для поисковых систем.\";s:2:\"tw\";s:84:\"站點地圖模塊創建一個索引的所有網頁和XML網站地圖搜索引擎。\";s:2:\"cn\";s:84:\"站点地图模块创建一个索引的所有网页和XML网站地图搜索引擎。\";s:2:\"th\";s:202:\"โมดูลไซต์แมพสามารถสร้างดัชนีของหน้าเว็บทั้งหมดสำหรับเครื่องมือค้นหา.\";s:2:\"hu\";s:94:\"Ez a modul indexeli az összes oldalt és egy XML oldaltéképet generál a keresőmotoroknak.\";s:2:\"se\";s:86:\"Sajtkarta, modulen skapar ett index av alla sidor och en XML-sitemap för sökmotorer.\";}', '0', '1', '0', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('19', 'a:6:{s:2:\"en\";s:7:\"Streams\";s:2:\"es\";s:7:\"Streams\";s:2:\"de\";s:7:\"Streams\";s:2:\"el\";s:8:\"Ροές\";s:2:\"lt\";s:7:\"Srautai\";s:2:\"fr\";s:7:\"Streams\";}', 'streams', '2.3.3', null, 'a:6:{s:2:\"en\";s:36:\"Manage, structure, and display data.\";s:2:\"es\";s:41:\"Administra, estructura, y presenta datos.\";s:2:\"de\";s:49:\"Verwalte, strukturiere und veröffentliche Daten.\";s:2:\"el\";s:106:\"Διαχείριση, δόμηση και προβολή πληροφοριών και δεδομένων.\";s:2:\"lt\";N;s:2:\"fr\";s:43:\"Gérer, structurer et afficher des données\";}', '0', '0', '1', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('20', 'a:25:{s:2:\"en\";s:5:\"Users\";s:2:\"ar\";s:20:\"المستخدمون\";s:2:\"br\";s:9:\"Usuários\";s:2:\"pt\";s:12:\"Utilizadores\";s:2:\"cs\";s:11:\"Uživatelé\";s:2:\"da\";s:7:\"Brugere\";s:2:\"de\";s:8:\"Benutzer\";s:2:\"el\";s:14:\"Χρήστες\";s:2:\"es\";s:8:\"Usuarios\";s:2:\"fa\";s:14:\"کاربران\";s:2:\"fi\";s:12:\"Käyttäjät\";s:2:\"fr\";s:12:\"Utilisateurs\";s:2:\"he\";s:14:\"משתמשים\";s:2:\"id\";s:8:\"Pengguna\";s:2:\"it\";s:6:\"Utenti\";s:2:\"lt\";s:10:\"Vartotojai\";s:2:\"nl\";s:10:\"Gebruikers\";s:2:\"pl\";s:12:\"Użytkownicy\";s:2:\"ru\";s:24:\"Пользователи\";s:2:\"sl\";s:10:\"Uporabniki\";s:2:\"tw\";s:6:\"用戶\";s:2:\"cn\";s:6:\"用户\";s:2:\"hu\";s:14:\"Felhasználók\";s:2:\"th\";s:27:\"ผู้ใช้งาน\";s:2:\"se\";s:10:\"Användare\";}', 'users', '1.1.0', null, 'a:25:{s:2:\"en\";s:81:\"Let users register and log in to the site, and manage them via the control panel.\";s:2:\"ar\";s:133:\"تمكين المستخدمين من التسجيل والدخول إلى الموقع، وإدارتهم من لوحة التحكم.\";s:2:\"br\";s:125:\"Permite com que usuários se registrem e entrem no site e também que eles sejam gerenciáveis apartir do painel de controle.\";s:2:\"pt\";s:125:\"Permite com que os utilizadores se registem e entrem no site e também que eles sejam geriveis apartir do painel de controlo.\";s:2:\"cs\";s:103:\"Umožňuje uživatelům se registrovat a přihlašovat a zároveň jejich správu v Kontrolním panelu.\";s:2:\"da\";s:89:\"Lader brugere registrere sig og logge ind på sitet, og håndtér dem via kontrolpanelet.\";s:2:\"de\";s:108:\"Erlaube Benutzern das Registrieren und Einloggen auf der Seite und verwalte sie über die Admin-Oberfläche.\";s:2:\"el\";s:208:\"Παρέχει λειτουργίες εγγραφής και σύνδεσης στους επισκέπτες. Επίσης από εδώ γίνεται η διαχείριση των λογαριασμών.\";s:2:\"es\";s:138:\"Permite el registro de nuevos usuarios quienes podrán loguearse en el sitio. Estos podrán controlarse desde el panel de administración.\";s:2:\"fa\";s:151:\"به کاربر ها امکان ثبت نام و لاگین در سایت را بدهید و آنها را در پنل مدیریت نظارت کنید\";s:2:\"fi\";s:126:\"Antaa käyttäjien rekisteröityä ja kirjautua sisään sivustolle sekä mahdollistaa niiden muokkaamisen hallintapaneelista.\";s:2:\"fr\";s:112:\"Permet aux utilisateurs de s\'enregistrer et de se connecter au site et de les gérer via le panneau de contrôle\";s:2:\"he\";s:62:\"ניהול משתמשים: רישום, הפעלה ומחיקה\";s:2:\"id\";s:102:\"Memungkinkan pengguna untuk mendaftar dan masuk ke dalam situs, dan mengaturnya melalui control panel.\";s:2:\"it\";s:95:\"Fai iscrivere de entrare nel sito gli utenti, e gestiscili attraverso il pannello di controllo.\";s:2:\"lt\";s:106:\"Leidžia vartotojams registruotis ir prisijungti prie puslapio, ir valdyti juos per administravimo panele.\";s:2:\"nl\";s:88:\"Laat gebruikers registreren en inloggen op de site, en beheer ze via het controlepaneel.\";s:2:\"pl\";s:87:\"Pozwól użytkownikom na logowanie się na stronie i zarządzaj nimi za pomocą panelu.\";s:2:\"ru\";s:155:\"Управление зарегистрированными пользователями, активирование новых пользователей.\";s:2:\"sl\";s:96:\"Dovoli uporabnikom za registracijo in prijavo na strani, urejanje le teh preko nadzorne plošče\";s:2:\"tw\";s:87:\"讓用戶可以註冊並登入網站，並且管理者可在控制台內進行管理。\";s:2:\"cn\";s:87:\"让用户可以注册并登入网站，并且管理者可在控制台内进行管理。\";s:2:\"th\";s:210:\"ให้ผู้ใช้ลงทะเบียนและเข้าสู่เว็บไซต์และจัดการกับพวกเขาผ่านทางแผงควบคุม\";s:2:\"hu\";s:120:\"Hogy a felhasználók tudjanak az oldalra regisztrálni és belépni, valamint lehessen őket kezelni a vezérlőpulton.\";s:2:\"se\";s:111:\"Låt dina besökare registrera sig och logga in på webbplatsen. Hantera sedan användarna via kontrollpanelen.\";}', '0', '0', '1', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('21', 'a:25:{s:2:\"en\";s:9:\"Variables\";s:2:\"ar\";s:20:\"المتغيّرات\";s:2:\"br\";s:10:\"Variáveis\";s:2:\"pt\";s:10:\"Variáveis\";s:2:\"cs\";s:10:\"Proměnné\";s:2:\"da\";s:8:\"Variable\";s:2:\"de\";s:9:\"Variablen\";s:2:\"el\";s:20:\"Μεταβλητές\";s:2:\"es\";s:9:\"Variables\";s:2:\"fa\";s:16:\"متغییرها\";s:2:\"fi\";s:9:\"Muuttujat\";s:2:\"fr\";s:9:\"Variables\";s:2:\"he\";s:12:\"משתנים\";s:2:\"id\";s:8:\"Variabel\";s:2:\"it\";s:9:\"Variabili\";s:2:\"lt\";s:10:\"Kintamieji\";s:2:\"nl\";s:10:\"Variabelen\";s:2:\"pl\";s:7:\"Zmienne\";s:2:\"ru\";s:20:\"Переменные\";s:2:\"sl\";s:13:\"Spremenljivke\";s:2:\"tw\";s:12:\"系統變數\";s:2:\"cn\";s:12:\"系统变数\";s:2:\"th\";s:18:\"ตัวแปร\";s:2:\"se\";s:9:\"Variabler\";s:2:\"hu\";s:10:\"Változók\";}', 'variables', '1.0.0', null, 'a:25:{s:2:\"en\";s:59:\"Manage global variables that can be accessed from anywhere.\";s:2:\"ar\";s:97:\"إدارة المُتغيّرات العامة لاستخدامها في أرجاء الموقع.\";s:2:\"br\";s:61:\"Gerencia as variáveis globais acessíveis de qualquer lugar.\";s:2:\"pt\";s:58:\"Gerir as variáveis globais acessíveis de qualquer lugar.\";s:2:\"cs\";s:56:\"Spravujte globální proměnné přístupné odkudkoliv.\";s:2:\"da\";s:51:\"Håndtér globale variable som kan tilgås overalt.\";s:2:\"de\";s:74:\"Verwaltet globale Variablen, auf die von überall zugegriffen werden kann.\";s:2:\"el\";s:129:\"Διαχείριση μεταβλητών που είναι προσβάσιμες από παντού στον ιστότοπο.\";s:2:\"es\";s:50:\"Manage global variables to access from everywhere.\";s:2:\"fa\";s:136:\"مدیریت متغییر های جامع که می توانند در هر جای سایت مورد استفاده قرار بگیرند\";s:2:\"fi\";s:66:\"Hallitse globaali muuttujia, joihin pääsee käsiksi mistä vain.\";s:2:\"fr\";s:92:\"Gérer des variables globales pour pouvoir y accéder depuis n\'importe quel endroit du site.\";s:2:\"he\";s:96:\"ניהול משתנים גלובליים אשר ניתנים להמרה בכל חלקי האתר\";s:2:\"id\";s:59:\"Mengatur variabel global yang dapat diakses dari mana saja.\";s:2:\"it\";s:58:\"Gestisci le variabili globali per accedervi da ogni parte.\";s:2:\"lt\";s:64:\"Globalių kintamujų tvarkymas kurie yra pasiekiami iš bet kur.\";s:2:\"nl\";s:54:\"Beheer globale variabelen die overal beschikbaar zijn.\";s:2:\"pl\";s:86:\"Zarządzaj globalnymi zmiennymi do których masz dostęp z każdego miejsca aplikacji.\";s:2:\"ru\";s:136:\"Управление глобальными переменными, которые доступны в любом месте сайта.\";s:2:\"sl\";s:53:\"Urejanje globalnih spremenljivk za dostop od kjerkoli\";s:2:\"th\";s:148:\"จัดการตัวแปรทั่วไปโดยที่สามารถเข้าถึงได้จากทุกที่.\";s:2:\"tw\";s:45:\"管理此網站內可存取的全局變數。\";s:2:\"cn\";s:45:\"管理此网站内可存取的全局变数。\";s:2:\"hu\";s:62:\"Globális változók kezelése a hozzáféréshez, bárhonnan.\";s:2:\"se\";s:66:\"Hantera globala variabler som kan avändas över hela webbplatsen.\";}', '0', '0', '1', 'data', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('22', 'a:23:{s:2:\"en\";s:7:\"Widgets\";s:2:\"br\";s:7:\"Widgets\";s:2:\"pt\";s:7:\"Widgets\";s:2:\"cs\";s:7:\"Widgety\";s:2:\"da\";s:7:\"Widgets\";s:2:\"de\";s:7:\"Widgets\";s:2:\"el\";s:7:\"Widgets\";s:2:\"es\";s:7:\"Widgets\";s:2:\"fa\";s:13:\"ویجت ها\";s:2:\"fi\";s:9:\"Vimpaimet\";s:2:\"fr\";s:7:\"Widgets\";s:2:\"id\";s:6:\"Widget\";s:2:\"it\";s:7:\"Widgets\";s:2:\"lt\";s:11:\"Papildiniai\";s:2:\"nl\";s:7:\"Widgets\";s:2:\"ru\";s:14:\"Виджеты\";s:2:\"sl\";s:9:\"Vtičniki\";s:2:\"tw\";s:9:\"小組件\";s:2:\"cn\";s:9:\"小组件\";s:2:\"hu\";s:9:\"Widget-ek\";s:2:\"th\";s:21:\"วิดเจ็ต\";s:2:\"se\";s:8:\"Widgetar\";s:2:\"ar\";s:14:\"الودجتس\";}', 'widgets', '1.2.0', null, 'a:23:{s:2:\"en\";s:69:\"Manage small sections of self-contained logic in blocks or \"Widgets\".\";s:2:\"ar\";s:132:\"إدارة أقسام صغيرة من البرمجيات في مساحات الموقع أو ما يُسمّى بالـ\"ودجتس\".\";s:2:\"br\";s:77:\"Gerenciar pequenas seções de conteúdos em bloco conhecidos como \"Widgets\".\";s:2:\"pt\";s:74:\"Gerir pequenas secções de conteúdos em bloco conhecidos como \"Widgets\".\";s:2:\"cs\";s:56:\"Spravujte malé funkční části webu neboli \"Widgety\".\";s:2:\"da\";s:74:\"Håndter små sektioner af selv-opretholdt logik i blokke eller \"Widgets\".\";s:2:\"de\";s:62:\"Verwaltet kleine, eigentständige Bereiche, genannt \"Widgets\".\";s:2:\"el\";s:149:\"Διαχείριση μικρών τμημάτων αυτόνομης προγραμματιστικής λογικής σε πεδία ή \"Widgets\".\";s:2:\"es\";s:75:\"Manejar pequeñas secciones de lógica autocontenida en bloques o \"Widgets\"\";s:2:\"fa\";s:76:\"مدیریت قسمت های کوچکی از سایت به طور مستقل\";s:2:\"fi\";s:81:\"Hallitse pieniä osioita, jotka sisältävät erillisiä lohkoja tai \"Vimpaimia\".\";s:2:\"fr\";s:41:\"Gérer des mini application ou \"Widgets\".\";s:2:\"id\";s:101:\"Mengatur bagian-bagian kecil dari blok-blok yang memuat sesuatu atau dikenal dengan istilah \"Widget\".\";s:2:\"it\";s:70:\"Gestisci piccole sezioni di logica a se stante in blocchi o \"Widgets\".\";s:2:\"lt\";s:43:\"Nedidelių, savarankiškų blokų valdymas.\";s:2:\"nl\";s:75:\"Beheer kleine onderdelen die zelfstandige logica bevatten, ofwel \"Widgets\".\";s:2:\"ru\";s:91:\"Управление небольшими, самостоятельными блоками.\";s:2:\"sl\";s:61:\"Urejanje manjših delov blokov strani ti. Vtičniki (Widgets)\";s:2:\"tw\";s:103:\"可將小段的程式碼透過小組件來管理。即所謂 \"Widgets\"，或稱為小工具、部件。\";s:2:\"cn\";s:103:\"可将小段的程式码透过小组件来管理。即所谓 \"Widgets\"，或称为小工具、部件。\";s:2:\"hu\";s:56:\"Önálló kis logikai tömbök vagy widget-ek kezelése.\";s:2:\"th\";s:152:\"จัดการส่วนเล็ก ๆ ในรูปแบบของตัวเองในบล็อกหรือวิดเจ็ต\";s:2:\"se\";s:83:\"Hantera små sektioner med egen logik och innehåll på olika delar av webbplatsen.\";}', '1', '0', '1', 'content', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('23', 'a:9:{s:2:\"en\";s:7:\"WYSIWYG\";s:2:\"fa\";s:7:\"WYSIWYG\";s:2:\"fr\";s:7:\"WYSIWYG\";s:2:\"pt\";s:7:\"WYSIWYG\";s:2:\"se\";s:15:\"HTML-redigerare\";s:2:\"tw\";s:7:\"WYSIWYG\";s:2:\"cn\";s:7:\"WYSIWYG\";s:2:\"ar\";s:27:\"المحرر الرسومي\";s:2:\"it\";s:7:\"WYSIWYG\";}', 'wysiwyg', '1.0.0', null, 'a:10:{s:2:\"en\";s:60:\"Provides the WYSIWYG editor for PyroCMS powered by CKEditor.\";s:2:\"fa\";s:73:\"ویرایشگر WYSIWYG که توسطCKEditor ارائه شده است. \";s:2:\"fr\";s:63:\"Fournit un éditeur WYSIWYG pour PyroCMS propulsé par CKEditor\";s:2:\"pt\";s:61:\"Fornece o editor WYSIWYG para o PyroCMS, powered by CKEditor.\";s:2:\"el\";s:113:\"Παρέχει τον επεξεργαστή WYSIWYG για το PyroCMS, χρησιμοποιεί το CKEDitor.\";s:2:\"se\";s:37:\"Redigeringsmodul för HTML, CKEditor.\";s:2:\"tw\";s:83:\"提供 PyroCMS 所見即所得（WYSIWYG）編輯器，由 CKEditor 技術提供。\";s:2:\"cn\";s:83:\"提供 PyroCMS 所见即所得（WYSIWYG）编辑器，由 CKEditor 技术提供。\";s:2:\"ar\";s:76:\"توفر المُحرّر الرسومي لـPyroCMS من خلال CKEditor.\";s:2:\"it\";s:57:\"Fornisce l\'editor WYSIWYG per PtroCMS creato con CKEditor\";}', '0', '0', '0', '0', '1', '1', '1', '1377286151');
INSERT INTO `default_modules` VALUES ('48', 'a:2:{s:2:\"en\";s:5:\"about\";s:2:\"es\";s:13:\"Quienes Somos\";}', 'about', '1.0', null, 'a:2:{s:2:\"en\";s:31:\"This is a PyroCMS module about.\";s:2:\"es\";s:50:\"Los administradores prodran ver y crear los about.\";}', '0', '0', '1', 'content', '1', '1', '0', '1378151001');
INSERT INTO `default_modules` VALUES ('25', 'a:2:{s:2:\"en\";s:6:\"Banner\";s:2:\"es\";s:6:\"Banner\";}', 'banner', '1.0', null, 'a:2:{s:2:\"en\";s:32:\"This is a PyroCMS module banner.\";s:2:\"es\";s:34:\"Administrador de banner principal.\";}', '0', '1', '1', 'content', '1', '1', '0', '1377278951');
INSERT INTO `default_modules` VALUES ('26', 'a:2:{s:2:\"en\";s:4:\"home\";s:2:\"es\";s:4:\"home\";}', 'homeajax', '1.0', null, 'a:2:{s:2:\"en\";s:11:\"Home module\";s:2:\"es\";s:11:\"Home module\";}', '0', '1', '0', '0', '1', '1', '0', '1377278951');
INSERT INTO `default_modules` VALUES ('27', 'a:2:{s:2:\"en\";s:3:\"PQR\";s:2:\"es\";s:3:\"PQR\";}', 'pqr', '1.0', null, 'a:2:{s:2:\"en\";s:29:\"This is a PyroCMS module PQR.\";s:2:\"es\";s:78:\"Los administradores prodran ver y reponder a los pqr que generen los usuarios.\";}', '0', '1', '1', '0', '1', '1', '0', '1377278951');
INSERT INTO `default_modules` VALUES ('28', 'a:2:{s:2:\"en\";s:11:\"Propertiees\";s:2:\"es\";s:9:\"Inmuebles\";}', 'properties', '1.0', null, 'a:2:{s:2:\"en\";s:36:\"This is a PyroCMS module properties.\";s:2:\"es\";s:24:\"Directorio de inmuebles.\";}', '0', '1', '1', 'content', '1', '1', '0', '1377278951');
INSERT INTO `default_modules` VALUES ('29', 'a:2:{s:2:\"en\";s:13:\"News from RSS\";s:2:\"es\";s:18:\"Noticias desde RSS\";}', 'rss', '1.0', null, 'a:2:{s:2:\"en\";s:29:\"This is a PyroCMS module Rss.\";s:2:\"es\";s:48:\"Modulo para la creacion y vista de lectores RSS.\";}', '0', '0', '1', '0', '1', '1', '0', '1378420805');
INSERT INTO `default_modules` VALUES ('30', 'a:2:{s:2:\"en\";s:9:\"Safe Zone\";s:2:\"es\";s:11:\"Zona Segura\";}', 'safezone', '1.0', null, 'a:2:{s:2:\"en\";s:11:\"Users Zone.\";s:2:\"es\";s:17:\"Zona de Usuarios.\";}', '0', '0', '1', 'content', '1', '1', '0', '1377278951');
INSERT INTO `default_modules` VALUES ('33', 'a:4:{s:2:\"en\";s:14:\"API Management\";s:2:\"el\";s:24:\"Διαχείριση API\";s:2:\"fr\";s:18:\"Gestionnaire d\'API\";s:2:\"hu\";s:12:\"API Kezelés\";}', 'api', '1.0.0', null, 'a:4:{s:2:\"en\";s:66:\"Set up a RESTful API with API Keys and out in JSON, XML, CSV, etc.\";s:2:\"el\";s:129:\"Ρυθμίσεις για ένα RESTful API με κλειδιά API και αποτελέσματα σε JSON, XML, CSV, κτλ.\";s:2:\"fr\";s:79:\"Paramétrage d\'une API RESTgul avec clés API et export en JSON, XML, CSV, etc.\";s:2:\"hu\";s:159:\"Körültekintően állítsd be az API-t (alkalmazásprogramozási felület) az API Kulcsokkal együtt és küldd JSON-ba, XML-be, CSV-be, vagy bármi egyébbe.\";}', '0', '1', '1', 'utilities', '0', '0', '0', '1378420805');
INSERT INTO `default_modules` VALUES ('34', 'a:2:{s:2:\"en\";s:13:\"Main Entities\";s:2:\"es\";s:21:\"Entidades Principales\";}', 'entities', '1.0', null, 'a:2:{s:2:\"en\";s:34:\"This is a PyroCMS module Entities.\";s:2:\"es\";s:66:\"Los administradores prodran editar todas la entidades principales.\";}', '0', '0', '1', 'content', '1', '1', '0', '1377286165');
INSERT INTO `default_modules` VALUES ('35', 'a:2:{s:2:\"en\";s:11:\"evaluations\";s:2:\"es\";s:12:\"Evaluaciones\";}', 'evaluations', '1.0.5', null, 'a:2:{s:2:\"en\";s:37:\"This is a PyroCMS module evaluations.\";s:2:\"es\";s:23:\"Módulo de evaluaciones\";}', '0', '1', '1', '0', '0', '0', '0', '1377286165');
INSERT INTO `default_modules` VALUES ('57', 'a:2:{s:2:\"en\";s:11:\"testimonies\";s:2:\"es\";s:11:\"Testimonios\";}', 'testimonies', '1.0', null, 'a:2:{s:2:\"en\";s:37:\"This is a PyroCMS module testimonies.\";s:2:\"es\";s:56:\"Los administradores prodran ver y crear los testimonies.\";}', '0', '0', '1', 'content', '1', '1', '0', '1378151030');
INSERT INTO `default_modules` VALUES ('56', 'a:2:{s:2:\"en\";s:8:\"services\";s:2:\"es\";s:9:\"Servicios\";}', 'services', '1.0', null, 'a:2:{s:2:\"en\";s:34:\"This is a PyroCMS module services.\";s:2:\"es\";s:53:\"Los administradores prodran ver y crear los services.\";}', '0', '0', '1', 'content', '1', '1', '0', '1378151030');
INSERT INTO `default_modules` VALUES ('71', 'a:2:{s:2:\"en\";s:12:\"requirements\";s:2:\"es\";s:12:\"Requirements\";}', 'requirements', '1.0', null, 'a:2:{s:2:\"en\";s:38:\"This is a PyroCMS module requirements.\";s:2:\"es\";s:57:\"Los administradores prodran ver y crear los requirements.\";}', '0', '1', '1', 'content', '1', '1', '0', '1378410771');
INSERT INTO `default_modules` VALUES ('76', 'a:2:{s:2:\"en\";s:7:\"work_us\";s:2:\"es\";s:20:\"Trabaje con nosotros\";}', 'work_us', '1.0', null, 'a:1:{s:2:\"en\";s:49:\"Modulo para el formulario de trabaje con nosotros\";}', '0', '1', '1', 'content', '1', '1', '0', '1378420805');

-- ----------------------------
-- Table structure for `default_navigation_groups`
-- ----------------------------
DROP TABLE IF EXISTS `default_navigation_groups`;
CREATE TABLE `default_navigation_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `abbrev` (`abbrev`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_navigation_groups
-- ----------------------------
INSERT INTO `default_navigation_groups` VALUES ('1', 'Header', 'header');
INSERT INTO `default_navigation_groups` VALUES ('2', 'Sidebar', 'sidebar');
INSERT INTO `default_navigation_groups` VALUES ('3', 'Footer', 'footer');

-- ----------------------------
-- Table structure for `default_navigation_links`
-- ----------------------------
DROP TABLE IF EXISTS `default_navigation_links`;
CREATE TABLE `default_navigation_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent` int(11) DEFAULT NULL,
  `link_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uri',
  `page_id` int(11) DEFAULT NULL,
  `module_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `navigation_group_id` int(5) NOT NULL DEFAULT '0',
  `position` int(5) NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restricted_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `navigation_group_id` (`navigation_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_navigation_links
-- ----------------------------
INSERT INTO `default_navigation_links` VALUES ('1', 'Home', null, 'page', '1', '', '', '', '1', '1', null, null, '');
INSERT INTO `default_navigation_links` VALUES ('2', 'Blog', null, 'module', null, 'blog', '', '', '1', '2', null, null, '');
INSERT INTO `default_navigation_links` VALUES ('3', 'Contact', null, 'page', '2', '', '', '', '1', '3', null, null, '');

-- ----------------------------
-- Table structure for `default_offices`
-- ----------------------------
DROP TABLE IF EXISTS `default_offices`;
CREATE TABLE `default_offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_offices
-- ----------------------------
INSERT INTO `default_offices` VALUES ('1', '1', 'Oficina', 'oficina');
INSERT INTO `default_offices` VALUES ('2', '2', 'Oficina Lima', 'oficina_lima');

-- ----------------------------
-- Table structure for `default_offices_users`
-- ----------------------------
DROP TABLE IF EXISTS `default_offices_users`;
CREATE TABLE `default_offices_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_offices_users
-- ----------------------------

-- ----------------------------
-- Table structure for `default_pages`
-- ----------------------------
DROP TABLE IF EXISTS `default_pages`;
CREATE TABLE `default_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `uri` text COLLATE utf8_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `type_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css` text COLLATE utf8_unicode_ci,
  `js` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_robots_no_index` tinyint(1) DEFAULT NULL,
  `meta_robots_no_follow` tinyint(1) DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `rss_enabled` int(1) NOT NULL DEFAULT '0',
  `comments_enabled` int(1) NOT NULL DEFAULT '0',
  `status` enum('draft','live') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `created_on` int(11) NOT NULL DEFAULT '0',
  `updated_on` int(11) NOT NULL DEFAULT '0',
  `restricted_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_home` int(1) NOT NULL DEFAULT '0',
  `strict_uri` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pages
-- ----------------------------
INSERT INTO `default_pages` VALUES ('1', 'home', '', 'Home', 'home', '0', '1', '1', null, null, null, '', null, null, null, '0', '0', 'live', '1376505790', '0', '', '1', '1', '1376505790');
INSERT INTO `default_pages` VALUES ('2', 'contact', '', 'Contact', 'contact', '0', '1', '2', null, null, null, '', null, null, null, '0', '0', 'live', '1376505790', '0', '', '0', '1', '1376505790');
INSERT INTO `default_pages` VALUES ('3', 'search', '', 'Search', 'search', '0', '1', '3', null, null, null, '', null, null, null, '0', '0', 'live', '1376505790', '0', '', '0', '1', '1376505790');
INSERT INTO `default_pages` VALUES ('4', 'results', '', 'Results', 'search/results', '3', '1', '4', null, null, null, '', null, null, null, '0', '0', 'live', '1376505790', '0', '', '0', '0', '1376505790');
INSERT INTO `default_pages` VALUES ('5', '404', '', 'Page missing', '404', '0', '1', '5', null, null, null, '', null, null, null, '0', '0', 'live', '1376505790', '0', '', '0', '1', '1376505790');
INSERT INTO `default_pages` VALUES ('9', 'servicio_1', '', 'servicio 1', 'servicios/servicio_1', '8', '4', '2', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377279179', '1377279486', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('42', 'about-us', '', 'about-us', 'about-us', '0', '17', '1', null, null, null, null, null, null, null, '0', '0', 'live', '1377545686', '0', null, '0', '1', '0');
INSERT INTO `default_pages` VALUES ('43', 'mision', '', 'Misión', 'about-us/mision', '42', '17', '2', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377545732', '1378328434', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('44', 'vision', '', 'Visión', 'about-us/vision', '42', '17', '3', null, null, null, null, null, null, null, '0', '0', 'live', '1377546634', '0', null, '0', '1', '0');
INSERT INTO `default_pages` VALUES ('60', 'servicios', '', 'servicios', 'servicios', '0', '25', '1', null, null, null, null, null, null, null, '0', '0', 'live', '1377630938', '0', null, '0', '1', '0');
INSERT INTO `default_pages` VALUES ('61', 'servicio_1', '', 'Servicio 1', 'servicios/servicio_1', '60', '25', '2', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377630948', '1378328678', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('62', 'testimonios', '', 'testimonios', 'testimonios', '0', '26', '1', null, null, null, null, null, null, null, '0', '0', 'live', '1377632094', '0', null, '0', '1', '0');
INSERT INTO `default_pages` VALUES ('63', 'mi_testimonio', '', 'Mi testimonio', 'testimonios/mi_testimonio', '62', '26', '2', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377632105', '1378325642', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('64', 'neque_porro_quisquam_est_qui_dolorem_ipsum_quia_dolor_sit_amet', '', 'Neque porro quisquam', 'servicios/neque_porro_quisquam_est_qui_dolorem_ipsum_quia_dolor_sit_amet', '60', '25', '3', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377695243', '1378328803', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('65', 'cras_sapien_tellus', '', 'Cras sapien tellus', 'servicios/cras_sapien_tellus', '60', '25', '4', '', '', '', '', '0', '0', '', '0', '0', 'live', '1377697673', '1378328761', '0', '0', '1', '0');
INSERT INTO `default_pages` VALUES ('66', 'resena', '', 'Reseña', 'about-us/resena', '42', '17', '4', null, null, null, null, null, null, null, '0', '0', 'live', '1377889486', '0', null, '0', '1', '0');
INSERT INTO `default_pages` VALUES ('67', 'en_lima', '', 'EN LIMA', 'servicios/en_lima', '60', '25', '5', '', '', '', '', '0', '0', '', '0', '0', 'live', '1378299346', '1378303836', '0', '0', '1', '0');

-- ----------------------------
-- Table structure for `default_pages_about`
-- ----------------------------
DROP TABLE IF EXISTS `default_pages_about`;
CREATE TABLE `default_pages_about` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_about` longtext COLLATE utf8_unicode_ci,
  `image_about` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_about` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url_about` text COLLATE utf8_unicode_ci,
  `type_public_about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pages_about
-- ----------------------------
INSERT INTO `default_pages_about` VALUES ('1', '2013-08-26 23:34:46', null, '2', null, 'about', null, null, null, null);
INSERT INTO `default_pages_about` VALUES ('2', '2013-08-26 23:35:31', '2013-09-05 01:00:34', '2', null, 'Returns your site URL, as specified in your config file. The index.php file (or whatever you have set as your site index_page in your config file) will be added to the URL, as will any URI segments you pass to the function, and the url_suffix as set in your config file.\r\n\r\nYou are encouraged to use this function any time you need to generate a local URL so that your pages become more portable in the event your URL changes.\r\n\r\nSegments can be optionally passed to the function as a string or an array. Here is a string example:\r\n\r\nReturns your site URL, as specified in your config file. The index.php file (or whatever you have set as your site index_page in your config file) will be added to the URL, as will any URI segments you pass to the function, and the url_suffix as set in your config file.\r\n\r\nYou are encouraged to use this function any time you need to generate a local URL so that your pages become more portable in the event your URL changes.\r\n\r\nSegments can be optionally passed to the function as a string or an array. Here is a string example:\r\nReturns your site URL, as specified in your config file. The index.php file (or whatever you have set as your site index_page in your config file) will be added to the URL, as will any URI segments you pass to the function, and the url_suffix as set in your config file.\r\n\r\nYou are encouraged to use this function any time you need to generate a local URL so that your pages become more portable in the event your URL changes.\r\n\r\nSegments can be optionally passed to the function as a string or an array. Here is a string example:\r\nReturns your site URL, as specified in your config file. The index.php file (or whatever you have set as your site index_page in your config file) will be added to the URL, as will any URI segments you pass to the function, and the url_suffix as set in your config file.\r\n\r\nYou are encouraged to use this function any time you need to generate a local URL so that your pages become more portable in the event your URL changes.\r\n\r\nSegments can be optionally passed to the function as a string or an array. Here is a string example:Returns your site URL, as specified in your config file. The index.php file (or whatever you have set as your site index_page in your config file) will be added to the URL, as will any URI segments you pass to the function, and the url_suffix as set in your config file.', '743bca5fd508bc5', 'c44f7777b9fd737', '{\"url\":\"http://www.youtube.com/watch?v=MQTwuxMRJJA\",\"src\":\"//www.youtube.com/embed/MQTwuxMRJJA\"}', '2');
INSERT INTO `default_pages_about` VALUES ('3', '2013-08-26 23:50:34', null, '2', null, null, null, null, null, null);
INSERT INTO `default_pages_about` VALUES ('4', '2013-08-30 23:04:46', null, '2', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `default_pages_services`
-- ----------------------------
DROP TABLE IF EXISTS `default_pages_services`;
CREATE TABLE `default_pages_services` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_services` longtext COLLATE utf8_unicode_ci,
  `image_services` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_services` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url_services` text COLLATE utf8_unicode_ci,
  `type_public_services` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id_services` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id_services` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pages_services
-- ----------------------------
INSERT INTO `default_pages_services` VALUES ('1', '2013-08-27 23:15:37', null, '2', null, 'services', null, null, null, null, null, null);
INSERT INTO `default_pages_services` VALUES ('2', '2013-08-27 23:15:48', '2013-09-05 01:04:38', '2', null, 'Lima es la ciudad capital de la Rep&uacute;blica del Per&uacute;.2 Se encuentra situada en la costa central del pa&iacute;s, a orillas del oc&eacute;ano Pac&iacute;fico, conformando una extensa y populosa &aacute;rea urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y extendida sobre los valles de los r&iacute;os Chill&oacute;n, R&iacute;mac y Lur&iacute;n. En 2007, Lima contaba con m&aacute;s de 7,6 millones de habitantes; mientras que su aglomeraci&oacute;n urbana contaba con m&aacute;s de 8,5 millones de habitantes,3 el 30% de la poblaci&oacute;n peruana, cifras que la convierten en la ciudad m&aacute;s poblada del pa&iacute;s.<br />\r\nEl 18 de enero de 1535, se efectu&oacute; la fundaci&oacute;n espa&ntilde;ola con el nombre de la Ciudad de los Reyes en la regi&oacute;n agr&iacute;cola conocida por los ind&iacute;genas como Limaq, nombre que adquiri&oacute; con el tiempo. Fue la capital del Virreinato del Per&uacute; y la m&aacute;s grande e importante ciudad de Am&eacute;rica del Sur durante el r&eacute;gimen espa&ntilde;ol. Despu&eacute;s de la Independencia pas&oacute; a ser la capital de la Rep&uacute;blica.<br />\r\nEn la actualidad se le considera como el centro pol&iacute;tico, cultural, financiero y comercial del pa&iacute;s. A nivel internacional, la ciudad ocupa el quinto lugar dentro de las ciudades m&aacute;s pobladas de Am&eacute;rica Latina y el Caribe y es una de las treinta aglomeraciones urbanas m&aacute;s pobladas del mundo.4 Por su importancia geoestrat&eacute;gica, ha sido definida como una ciudad global de &laquo;clase beta&raquo;.5<br />\r\nJurisdiccionalmente, la metr&oacute;poli se extiende mayoritariamente dentro de la provincia de Lima y en una porci&oacute;n menor, hacia el oeste, dentro de la provincia constitucional del Callao, donde se encuentran el puerto mar&iacute;timo y el Aeropuerto Internacional Jorge Ch&aacute;vez. Ambas provincias cuentan con autonom&iacute;a regional desde 2002.', '88dd42dc4cdb154', 'a895a9dc30ac8d7', '{\"url\":\"http://www.youtube.com/watch?v=hFO88euRHr4\",\"src\":\"//www.youtube.com/embed/hFO88euRHr4\"}', '1', '1', '1');
INSERT INTO `default_pages_services` VALUES ('3', '2013-08-28 17:07:23', '2013-09-05 01:06:43', '2', null, 'Lima es la ciudad capital de la Rep&uacute;blica del Per&uacute;.2 Se encuentra situada en la costa central del pa&iacute;s, a orillas del oc&eacute;ano Pac&iacute;fico, conformando una extensa y populosa &aacute;rea urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y extendida sobre los valles de los r&iacute;os Chill&oacute;n, R&iacute;mac y Lur&iacute;n. En 2007, Lima contaba con m&aacute;s de 7,6 millones de habitantes; mientras que su aglomeraci&oacute;n urbana contaba con m&aacute;s de 8,5 millones de habitantes,3 el 30% de la poblaci&oacute;n peruana, cifras que la convierten en la ciudad m&aacute;s poblada del pa&iacute;s.<br />\r\nEl 18 de enero de 1535, se efectu&oacute; la fundaci&oacute;n espa&ntilde;ola con el nombre de la Ciudad de los Reyes en la regi&oacute;n agr&iacute;cola conocida por los ind&iacute;genas como Limaq, nombre que adquiri&oacute; con el tiempo. Fue la capital del Virreinato del Per&uacute; y la m&aacute;s grande e importante ciudad de Am&eacute;rica del Sur durante el r&eacute;gimen espa&ntilde;ol. Despu&eacute;s de la Independencia pas&oacute; a ser la capital de la Rep&uacute;blica.<br />\r\nEn la actualidad se le considera como el centro pol&iacute;tico, cultural, financiero y comercial del pa&iacute;s. A nivel internacional, la ciudad ocupa el quinto lugar dentro de las ciudades m&aacute;s pobladas de Am&eacute;rica Latina y el Caribe y es una de las treinta aglomeraciones urbanas m&aacute;s pobladas del mundo.4 Por su importancia geoestrat&eacute;gica, ha sido definida como una ciudad global de &laquo;clase beta&raquo;.5<br />\r\nJurisdiccionalmente, la metr&oacute;poli se extiende mayoritariamente dentro de la provincia de Lima y en una porci&oacute;n menor, hacia el oeste, dentro de la provincia constitucional del Callao, donde se encuentran el puerto mar&iacute;timo y el Aeropuerto Internacional Jorge Ch&aacute;vez. Ambas provincias cuentan con autonom&iacute;a regional desde 2002.', 'c00beb82e564c8c', 'c292afb89883796', null, '2', '1', '1');
INSERT INTO `default_pages_services` VALUES ('4', '2013-08-28 17:47:53', '2013-09-05 01:06:01', '2', null, 'Lima es la ciudad capital de la Rep&uacute;blica del Per&uacute;.2 Se encuentra situada en la costa central del pa&iacute;s, a orillas del oc&eacute;ano Pac&iacute;fico, conformando una extensa y populosa &aacute;rea urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y extendida sobre los valles de los r&iacute;os Chill&oacute;n, R&iacute;mac y Lur&iacute;n. En 2007, Lima contaba con m&aacute;s de 7,6 millones de habitantes; mientras que su aglomeraci&oacute;n urbana contaba con m&aacute;s de 8,5 millones de habitantes,3 el 30% de la poblaci&oacute;n peruana, cifras que la convierten en la ciudad m&aacute;s poblada del pa&iacute;s.<br />\r\nEl 18 de enero de 1535, se efectu&oacute; la fundaci&oacute;n espa&ntilde;ola con el nombre de la Ciudad de los Reyes en la regi&oacute;n agr&iacute;cola conocida por los ind&iacute;genas como Limaq, nombre que adquiri&oacute; con el tiempo. Fue la capital del Virreinato del Per&uacute; y la m&aacute;s grande e importante ciudad de Am&eacute;rica del Sur durante el r&eacute;gimen espa&ntilde;ol. Despu&eacute;s de la Independencia pas&oacute; a ser la capital de la Rep&uacute;blica.<br />\r\nEn la actualidad se le considera como el centro pol&iacute;tico, cultural, financiero y comercial del pa&iacute;s. A nivel internacional, la ciudad ocupa el quinto lugar dentro de las ciudades m&aacute;s pobladas de Am&eacute;rica Latina y el Caribe y es una de las treinta aglomeraciones urbanas m&aacute;s pobladas del mundo.4 Por su importancia geoestrat&eacute;gica, ha sido definida como una ciudad global de &laquo;clase beta&raquo;.5<br />\r\nJurisdiccionalmente, la metr&oacute;poli se extiende mayoritariamente dentro de la provincia de Lima y en una porci&oacute;n menor, hacia el oeste, dentro de la provincia constitucional del Callao, donde se encuentran el puerto mar&iacute;timo y el Aeropuerto Internacional Jorge Ch&aacute;vez. Ambas provincias cuentan con autonom&iacute;a regional desde 2002.', '61d95ae2ab3b097', 'b4f4647f28d418b', '{\"url\":\"http://www.youtube.com/watch?v=oPNVI8wBs8s\",\"src\":\"//www.youtube.com/embed/oPNVI8wBs8s\"}', '3', '1', '1');
INSERT INTO `default_pages_services` VALUES ('5', '2013-09-04 16:55:46', '2013-09-04 18:10:36', '2', null, 'Lima es la ciudad capital de la Rep&uacute;blica del Per&uacute;.2 Se encuentra situada en la costa central del pa&iacute;s, a orillas del oc&eacute;ano Pac&iacute;fico, conformando una extensa y populosa &aacute;rea urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y extendida sobre los valles de los r&iacute;os Chill&oacute;n, R&iacute;mac y Lur&iacute;n. En 2007, Lima contaba con m&aacute;s de 7,6 millones de habitantes; mientras que su aglomeraci&oacute;n urbana contaba con m&aacute;s de 8,5 millones de habitantes,3 el 30% de la poblaci&oacute;n peruana, cifras que la convierten en la ciudad m&aacute;s poblada del pa&iacute;s.<br />\r\nEl 18 de enero de 1535, se efectu&oacute; la fundaci&oacute;n espa&ntilde;ola con el nombre de la Ciudad de los Reyes en la regi&oacute;n agr&iacute;cola conocida por los ind&iacute;genas como Limaq, nombre que adquiri&oacute; con el tiempo. Fue la capital del Virreinato del Per&uacute; y la m&aacute;s grande e importante ciudad de Am&eacute;rica del Sur durante el r&eacute;gimen espa&ntilde;ol. Despu&eacute;s de la Independencia pas&oacute; a ser la capital de la Rep&uacute;blica.<br />\r\nEn la actualidad se le considera como el centro pol&iacute;tico, cultural, financiero y comercial del pa&iacute;s. A nivel internacional, la ciudad ocupa el quinto lugar dentro de las ciudades m&aacute;s pobladas de Am&eacute;rica Latina y el Caribe y es una de las treinta aglomeraciones urbanas m&aacute;s pobladas del mundo.4 Por su importancia geoestrat&eacute;gica, ha sido definida como una ciudad global de &laquo;clase beta&raquo;.5<br />\r\nJurisdiccionalmente, la metr&oacute;poli se extiende mayoritariamente dentro de la provincia de Lima y en una porci&oacute;n menor, hacia el oeste, dentro de la provincia constitucional del Callao, donde se encuentran el puerto mar&iacute;timo y el Aeropuerto Internacional Jorge Ch&aacute;vez. Ambas provincias cuentan con autonom&iacute;a regional desde 2002.', '9f49f2b96dca981', 'dummy', null, '1', '2', '2');

-- ----------------------------
-- Table structure for `default_pages_testimonies`
-- ----------------------------
DROP TABLE IF EXISTS `default_pages_testimonies`;
CREATE TABLE `default_pages_testimonies` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_testimonies` longtext COLLATE utf8_unicode_ci,
  `image_testimonies` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_testimonies` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url_testimonies` text COLLATE utf8_unicode_ci,
  `type_public_testimonies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pages_testimonies
-- ----------------------------
INSERT INTO `default_pages_testimonies` VALUES ('1', '2013-08-27 23:34:54', null, '2', null, 'testimonies', null, null, null, null);
INSERT INTO `default_pages_testimonies` VALUES ('2', '2013-08-27 23:35:05', '2013-09-05 00:14:02', '2', null, 'Mi testimonio<br />\r\n<br />\r\nEduard Russy, Colpatria', '7a1e07ac7650e1c', '9517fd0bf8faa65', '{\"url\":\"http://www.youtube.com/watch?v=AP2_Wrrygq4\",\"src\":\"//www.youtube.com/embed/AP2_Wrrygq4\"}', '2');

-- ----------------------------
-- Table structure for `default_page_types`
-- ----------------------------
DROP TABLE IF EXISTS `default_page_types`;
CREATE TABLE `default_page_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `stream_id` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `css` text COLLATE utf8_unicode_ci,
  `js` text COLLATE utf8_unicode_ci,
  `theme_layout` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `updated_on` int(11) NOT NULL,
  `save_as_files` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n',
  `content_label` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_label` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_page_types
-- ----------------------------
INSERT INTO `default_page_types` VALUES ('1', 'default', 'Default', 'A simple page type with a WYSIWYG editor that will get you started adding content.', '2', null, null, null, '<h2>{{ page:title }}</h2>\n\n{{ body }}', '', '', 'default', '1376505790', 'n', null, null);
INSERT INTO `default_page_types` VALUES ('17', 'about', 'lang:about:about', 'A simple page type about', '21', '', null, '', '<div class=\"lateralbar\">\r\n    {{ widgets:instance id=\"6\"}}\r\n    {{ widgets:instance id=\"7\"}}\r\n</div>\r\n<div class=\"contenidos\">\r\n    <div class=\"fondoblanco mtop\">\r\n        <div class=\"contenidodetalle\">\r\n            <div class=\"headerdetalle\">\r\n                <div class=\"titulodetalle\">\r\n                    <h1>{{title}}</h1>\r\n                </div>		\r\n                <div class=\"cerrardetalle\">\r\n                    <a href=\"#\" class=\"icon-close\"></a>\r\n                </div>\r\n            </div>\r\n            <div class=\"jp-container\">\r\n                <div class=\"imgdetalle\">\r\n                    {{ if type_public_about:key==1 }}\r\n                    {{image_about:img}}\r\n                    {{ endif }}\r\n                    {{ if type_public_about:key==2 }}\r\n                    <video id=\"example_video_1\" class=\"video-js vjs-default-skin\" controls preload=\"none\" width=\"100%\" height=\"310\"\r\n                           poster=\"{{ url:base }}uploads/default/files/video_play.jpg\"\r\n                           data-setup=\"{}\">\r\n                        <source src=\"{{ url:base }}uploads/default/files/{{video_about:fullname}}\" type=\"{{video_about:mimetype}}\" />       \r\n                    </video>\r\n                    {{ endif }}\r\n                    {{ if type_public_about:key==3 }}\r\n                    {{video_url_about}}\r\n                    {{ endif }}\r\n                </div>\r\n                <div class=\"textodetalle\">\r\n                    {{description_about}}     \r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', '', '', 'internas.html', '1377623376', 'n', '', '');
INSERT INTO `default_page_types` VALUES ('25', 'services', 'lang:services:services', 'A simple page type services', '29', null, null, null, '<h2>{{title}}</h2>\n\n{{ body }}', '', '', 'internas.html', '1377630937', 'n', null, null);
INSERT INTO `default_page_types` VALUES ('26', 'testimonies', 'lang:testimonies:testimonies', 'A simple page type testimonies', '30', null, null, null, '<h2>{{title}}</h2>\n\n{{ body }}', '', '', 'internas.html', '1377632094', 'n', null, null);

-- ----------------------------
-- Table structure for `default_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `default_permissions`;
CREATE TABLE `default_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roles` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for `default_pqr`
-- ----------------------------
DROP TABLE IF EXISTS `default_pqr`;
CREATE TABLE `default_pqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pqr_type_id` int(11) NOT NULL,
  `pqr_status_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pqr
-- ----------------------------

-- ----------------------------
-- Table structure for `default_pqr_answer`
-- ----------------------------
DROP TABLE IF EXISTS `default_pqr_answer`;
CREATE TABLE `default_pqr_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pqr_id` int(11) NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pqr_answer
-- ----------------------------

-- ----------------------------
-- Table structure for `default_pqr_status`
-- ----------------------------
DROP TABLE IF EXISTS `default_pqr_status`;
CREATE TABLE `default_pqr_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pqr_status
-- ----------------------------

-- ----------------------------
-- Table structure for `default_pqr_type`
-- ----------------------------
DROP TABLE IF EXISTS `default_pqr_type`;
CREATE TABLE `default_pqr_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_pqr_type
-- ----------------------------

-- ----------------------------
-- Table structure for `default_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `default_profiles`;
CREATE TABLE `default_profiles` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `display_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  `bio` text COLLATE utf8_unicode_ci,
  `dob` int(11) DEFAULT NULL,
  `gender` set('m','f','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_on` int(11) unsigned DEFAULT NULL,
  `asdasdsad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_profiles
-- ----------------------------
INSERT INTO `default_profiles` VALUES ('1', null, null, null, null, '1', 'Rigo B Castro', 'Rigo', 'B Castro', '', 'en', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `default_profiles` VALUES ('2', '2013-08-23 21:25:46', null, '1', '1', '2', 'Eduard Stith Russy Urbano', 'Eduard', 'Russy', 'imaginamos', 'en', 'Makia', '-3600', '', null, null, null, null, null, null, null, '1378332423', null);
INSERT INTO `default_profiles` VALUES ('20', '2013-09-05 01:34:15', null, '2', '2', '3', 'prueba', 'Usuario', 'padilla', null, 'en', null, '0', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `default_profiles` VALUES ('32', '2013-09-05 17:59:33', null, null, '3', '15', 'eduardrussy Russy', 'eduardrussy', 'Russy', null, 'en', null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `default_properties_web`
-- ----------------------------
DROP TABLE IF EXISTS `default_properties_web`;
CREATE TABLE `default_properties_web` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `area_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salerental` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties_types` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_properties_web
-- ----------------------------
INSERT INTO `default_properties_web` VALUES ('1', '2013-08-26 18:53:02', '2013-08-27 00:15:18', '2', '1', 'Eduard Russy', '1', '1', '1', '1', '213123', '1', '1', '1', '1', 'sdgfdgdfgdfgdfg dstfg dfg dfg dfg dg dfg dfgd fgdf fd gdf gdf fdg dfgdfg df gdfg dfgdgf', '1');
INSERT INTO `default_properties_web` VALUES ('2', '2013-08-27 01:19:25', '2013-08-27 01:19:40', '2', '2', 'asdsadsad', '1', '1', '1', '1', '234324', '1', '1', '1', '1', 'asdsadsadsad', '1');
INSERT INTO `default_properties_web` VALUES ('3', '2013-08-27 01:19:58', '2013-08-27 01:20:12', '2', '3', 'asdsadsadsadsa', '1', '1', '1', '1', '34465', '1', '1', '1', '1', 'sz sdfds sdf fg ry erty erg awedw qwe wq edc', '1');

-- ----------------------------
-- Table structure for `default_properties_web_files`
-- ----------------------------
DROP TABLE IF EXISTS `default_properties_web_files`;
CREATE TABLE `default_properties_web_files` (
  `property_id` int(11) NOT NULL,
  `file_id` char(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`property_id`,`file_id`),
  KEY `properties_files_file_sPdY` (`file_id`),
  CONSTRAINT `properties_files_file_sPdY` FOREIGN KEY (`file_id`) REFERENCES `default_files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `properties_files_property_rRFE` FOREIGN KEY (`property_id`) REFERENCES `default_properties_web` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_properties_web_files
-- ----------------------------
INSERT INTO `default_properties_web_files` VALUES ('1', '6e04b66d9de7391');
INSERT INTO `default_properties_web_files` VALUES ('1', '885953811cddcd1');
INSERT INTO `default_properties_web_files` VALUES ('1', '974b6312e777b65');
INSERT INTO `default_properties_web_files` VALUES ('2', 'ac3ffe6f52ad84c');
INSERT INTO `default_properties_web_files` VALUES ('3', 'd27cd53654903d6');

-- ----------------------------
-- Table structure for `default_properties_web_types`
-- ----------------------------
DROP TABLE IF EXISTS `default_properties_web_types`;
CREATE TABLE `default_properties_web_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_properties_web_types
-- ----------------------------
INSERT INTO `default_properties_web_types` VALUES ('1', 'Local', 'local');
INSERT INTO `default_properties_web_types` VALUES ('2', 'Oficina', 'oficina');

-- ----------------------------
-- Table structure for `default_redirects`
-- ----------------------------
DROP TABLE IF EXISTS `default_redirects`;
CREATE TABLE `default_redirects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(3) NOT NULL DEFAULT '302',
  PRIMARY KEY (`id`),
  KEY `from` (`from`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_redirects
-- ----------------------------

-- ----------------------------
-- Table structure for `default_requirements`
-- ----------------------------
DROP TABLE IF EXISTS `default_requirements`;
CREATE TABLE `default_requirements` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `country_id_requirements` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id_requirements` int(11) DEFAULT NULL,
  `building_id_requirements` int(11) DEFAULT NULL,
  `office_id_requirements` int(11) DEFAULT NULL,
  `description_requirements` longtext COLLATE utf8_unicode_ci,
  `state_requirements` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_requirements
-- ----------------------------
INSERT INTO `default_requirements` VALUES ('1', '2013-09-05 17:09:59', null, '14', null, '1', '1', '1', '1', 'asdsadsadasd', null);
INSERT INTO `default_requirements` VALUES ('2', '2013-09-05 17:59:33', null, '15', null, '2', '2', '2', '2', 'Peru Lima', null);

-- ----------------------------
-- Table structure for `default_rss`
-- ----------------------------
DROP TABLE IF EXISTS `default_rss`;
CREATE TABLE `default_rss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_rss
-- ----------------------------
INSERT INTO `default_rss` VALUES ('2', 'CNN', 'http://rss.cnn.com/rss/edition.rss', 'cnn');

-- ----------------------------
-- Table structure for `default_search_index`
-- ----------------------------
DROP TABLE IF EXISTS `default_search_index`;
CREATE TABLE `default_search_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `keywords` text COLLATE utf8_unicode_ci,
  `keyword_hash` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_plural` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_edit_uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_delete_uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`module`,`entry_key`,`entry_id`(190)),
  FULLTEXT KEY `full search` (`title`,`description`,`keywords`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_search_index
-- ----------------------------
INSERT INTO `default_search_index` VALUES ('1', 'Home', '', null, null, 'pages', 'pages:page', 'pages:pages', '1', 'home', 'admin/pages/edit/1', 'admin/pages/delete/1');
INSERT INTO `default_search_index` VALUES ('2', 'Contact', '', null, null, 'pages', 'pages:page', 'pages:pages', '2', 'contact', 'admin/pages/edit/2', 'admin/pages/delete/2');
INSERT INTO `default_search_index` VALUES ('3', 'Search', '', null, null, 'pages', 'pages:page', 'pages:pages', '3', 'search', 'admin/pages/edit/3', 'admin/pages/delete/3');
INSERT INTO `default_search_index` VALUES ('4', 'Results', '', null, null, 'pages', 'pages:page', 'pages:pages', '4', 'search/results', 'admin/pages/edit/4', 'admin/pages/delete/4');
INSERT INTO `default_search_index` VALUES ('5', 'Page missing', '', null, null, 'pages', 'pages:page', 'pages:pages', '5', '404', 'admin/pages/edit/5', 'admin/pages/delete/5');
INSERT INTO `default_search_index` VALUES ('15', 'Mision', '', null, null, 'pages', 'pages:page', 'pages:pages', '21', 'quienes-somos/mision', 'admin/pages/edit/21', 'admin/pages/delete/21');
INSERT INTO `default_search_index` VALUES ('16', 'sdfsdfsdf', '', null, null, 'pages', 'pages:page', 'pages:pages', '22', 'servicios/sdfsdfsdf', 'admin/pages/edit/22', 'admin/pages/delete/22');
INSERT INTO `default_search_index` VALUES ('20', 'Misión', '', null, null, 'pages', 'pages:page', 'pages:pages', '30', 'about-us/mision', 'admin/pages/edit/30', 'admin/pages/delete/30');
INSERT INTO `default_search_index` VALUES ('27', 'Misión', '', null, null, 'pages', 'pages:page', 'pages:pages', '41', 'about-us/mision', 'admin/pages/edit/41', 'admin/pages/delete/41');
INSERT INTO `default_search_index` VALUES ('79', 'Misión', '', null, null, 'pages', 'pages:page', 'pages:pages', '43', 'about-us/mision', 'admin/pages/edit/43', 'admin/pages/delete/43');
INSERT INTO `default_search_index` VALUES ('35', 'loik', '', null, null, 'pages', 'pages:page', 'pages:pages', '47', 'testimonios/loik', 'admin/pages/edit/47', 'admin/pages/delete/47');
INSERT INTO `default_search_index` VALUES ('36', 'Super Estupendo', '', null, null, 'pages', 'pages:page', 'pages:pages', '52', 'testimonios/super_estupendo', 'admin/pages/edit/52', 'admin/pages/delete/52');
INSERT INTO `default_search_index` VALUES ('37', 'Don Sombra', '', null, null, 'pages', 'pages:page', 'pages:pages', '53', 'testimonios/don_sombra', 'admin/pages/edit/53', 'admin/pages/delete/53');
INSERT INTO `default_search_index` VALUES ('39', 'Don oscar me tiene bravo', '', null, null, 'pages', 'pages:page', 'pages:pages', '54', 'testimonios/don_oscar_me_tiene_bravo', 'admin/pages/edit/54', 'admin/pages/delete/54');
INSERT INTO `default_search_index` VALUES ('41', 'Servicio 1', '', null, null, 'pages', 'pages:page', 'pages:pages', '55', 'servicios/servicio_1', 'admin/pages/edit/55', 'admin/pages/delete/55');
INSERT INTO `default_search_index` VALUES ('45', 'Servicio1', '', null, null, 'pages', 'pages:page', 'pages:pages', '57', 'servicios/servicio1', 'admin/pages/edit/57', 'admin/pages/delete/57');
INSERT INTO `default_search_index` VALUES ('46', 'servicio 1', '', null, null, 'pages', 'pages:page', 'pages:pages', '59', 'servicios/servicio_1', 'admin/pages/edit/59', 'admin/pages/delete/59');
INSERT INTO `default_search_index` VALUES ('80', 'Servicio 1', '', null, null, 'pages', 'pages:page', 'pages:pages', '61', 'servicios/servicio_1', 'admin/pages/edit/61', 'admin/pages/delete/61');
INSERT INTO `default_search_index` VALUES ('77', 'Mi testimonio', '', null, null, 'pages', 'pages:page', 'pages:pages', '63', 'testimonios/mi_testimonio', 'admin/pages/edit/63', 'admin/pages/delete/63');
INSERT INTO `default_search_index` VALUES ('84', 'Neque porro quisquam', '', null, null, 'pages', 'pages:page', 'pages:pages', '64', 'servicios/neque_porro_quisquam_est_qui_dolorem_ipsum_quia_dolor_sit_amet', 'admin/pages/edit/64', 'admin/pages/delete/64');
INSERT INTO `default_search_index` VALUES ('83', 'Cras sapien tellus', '', null, null, 'pages', 'pages:page', 'pages:pages', '65', 'servicios/cras_sapien_tellus', 'admin/pages/edit/65', 'admin/pages/delete/65');
INSERT INTO `default_search_index` VALUES ('68', 'Mi noticia', 'esdta es la noticia completa', null, null, 'blog', 'blog:post', 'blog:posts', '1', 'blog/2013/08/mi-noticia', 'admin/blog/edit/1', 'admin/blog/delete/1');
INSERT INTO `default_search_index` VALUES ('67', 'Otra noticias muy importante', 'El contenido total de la noticia', null, null, 'blog', 'blog:post', 'blog:posts', '2', 'blog/2013/08/otra-noticias-muy-importante', 'admin/blog/edit/2', 'admin/blog/delete/2');
INSERT INTO `default_search_index` VALUES ('71', 'Ota noticia', 'orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', null, null, 'blog', 'blog:post', 'blog:posts', '3', 'blog/2013/08/ota-noticia', 'admin/blog/edit/3', 'admin/blog/delete/3');
INSERT INTO `default_search_index` VALUES ('76', 'Ota noticia mas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', null, null, 'blog', 'blog:post', 'blog:posts', '4', 'blog/2013/08/ota-noticia-mas', 'admin/blog/edit/4', 'admin/blog/delete/4');
INSERT INTO `default_search_index` VALUES ('74', 'EN LIMA', '', null, null, 'pages', 'pages:page', 'pages:pages', '67', 'servicios/en_lima', 'admin/pages/edit/67', 'admin/pages/delete/67');
INSERT INTO `default_search_index` VALUES ('85', 'Don oscar', 'Esta es la notcia&nbsp;', null, null, 'blog', 'blog:post', 'blog:posts', '5', 'blog/2013/09/don-oscardc', 'admin/blog/edit/5', 'admin/blog/delete/5');

-- ----------------------------
-- Table structure for `default_settings`
-- ----------------------------
DROP TABLE IF EXISTS `default_settings`;
CREATE TABLE `default_settings` (
  `slug` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` set('text','textarea','password','select','select-multiple','radio','checkbox') COLLATE utf8_unicode_ci NOT NULL,
  `default` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `is_required` int(1) NOT NULL,
  `is_gui` int(1) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`slug`),
  UNIQUE KEY `unique_slug` (`slug`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_settings
-- ----------------------------
INSERT INTO `default_settings` VALUES ('activation_email', 'Activation Email', 'Send out an e-mail with an activation link when a user signs up. Disable this so that admins must manually activate each account.', 'select', '1', '', '0=activate_by_admin|1=activate_by_email|2=no_activation', '0', '1', 'users', '961');
INSERT INTO `default_settings` VALUES ('addons_upload', 'Addons Upload Permissions', 'Keeps mere admins from uploading addons by default', 'text', '0', '1', '', '1', '0', '', '0');
INSERT INTO `default_settings` VALUES ('admin_force_https', 'Force HTTPS for Control Panel?', 'Allow only the HTTPS protocol when using the Control Panel?', 'radio', '0', '', '1=Yes|0=No', '1', '1', '', '0');
INSERT INTO `default_settings` VALUES ('admin_theme', 'Control Panel Theme', 'Select the theme for the control panel.', '', '', 'pyrocms', 'func:get_themes', '1', '0', '', '0');
INSERT INTO `default_settings` VALUES ('akismet_api_key', 'Akismet API Key', 'Akismet is a spam-blocker from the WordPress team. It keeps spam under control without forcing users to get past human-checking CAPTCHA forms.', 'text', '', '', '', '0', '1', 'integration', '981');
INSERT INTO `default_settings` VALUES ('api_enabled', 'API Enabled', 'Allow API access to all modules which have an API controller.', 'select', '0', '0', '0=Disabled|1=Enabled', '0', '0', 'api', '0');
INSERT INTO `default_settings` VALUES ('api_user_keys', 'API User Keys', 'Allow users to sign up for API keys (if the API is Enabled).', 'select', '0', '0', '0=Disabled|1=Enabled', '0', '0', 'api', '0');
INSERT INTO `default_settings` VALUES ('auto_username', 'Auto Username', 'Create the username automatically, meaning users can skip making one on registration.', 'radio', '1', '', '1=Enabled|0=Disabled', '0', '1', 'users', '964');
INSERT INTO `default_settings` VALUES ('cdn_domain', 'CDN Domain', 'CDN domains allow you to offload static content to various edge servers, like Amazon CloudFront or MaxCDN.', 'text', '', '', '', '0', '1', 'integration', '1000');
INSERT INTO `default_settings` VALUES ('ckeditor_config', 'CKEditor Config', 'You can find a list of valid configuration items in <a target=\"_blank\" href=\"http://docs.cksource.com/ckeditor_api/symbols/CKEDITOR.config.html\">CKEditor\'s documentation.</a>', 'textarea', '', '{{# this is a wysiwyg-simple editor customized for the blog module (it allows images to be inserted) #}}\r\n$(\'textarea#intro.wysiwyg-simple\').ckeditor({\r\n	toolbar: [\r\n		[\'pyroimages\'],\r\n		[\'Bold\', \'Italic\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\', \'Unlink\']\r\n	  ],\r\n	extraPlugins: \'pyroimages\',\r\n	width: \'99%\',\r\n	height: 100,\r\n	dialog_backgroundCoverColor: \'#000\',\r\n	defaultLanguage: \'{{ helper:config item=\"default_language\" }}\',\r\n	language: \'{{ global:current_language }}\'\r\n});\r\n\r\n{{# this is the config for all wysiwyg-simple textareas #}}\r\n$(\'textarea.wysiwyg-simple\').ckeditor({\r\n	toolbar: [\r\n		[\'Bold\', \'Italic\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\', \'Unlink\']\r\n	  ],\r\n	width: \'99%\',\r\n	height: 100,\r\n	dialog_backgroundCoverColor: \'#000\',\r\n	defaultLanguage: \'{{ helper:config item=\"default_language\" }}\',\r\n	language: \'{{ global:current_language }}\'\r\n});\r\n\r\n{{# and this is the advanced editor #}}\r\n$(\'textarea.wysiwyg-advanced\').ckeditor({\r\n	toolbar: [\r\n		[\'Maximize\'],\r\n		[\'pyroimages\', \'pyrofiles\'],\r\n		[\'Cut\',\'Copy\',\'Paste\',\'PasteFromWord\'],\r\n		[\'Undo\',\'Redo\',\'-\',\'Find\',\'Replace\'],\r\n		[\'Link\',\'Unlink\'],\r\n		[\'Table\',\'HorizontalRule\',\'SpecialChar\'],\r\n		[\'Bold\',\'Italic\',\'StrikeThrough\'],\r\n		[\'JustifyLeft\',\'JustifyCenter\',\'JustifyRight\',\'JustifyBlock\',\'-\',\'BidiLtr\',\'BidiRtl\'],\r\n		[\'Format\', \'FontSize\', \'Subscript\',\'Superscript\', \'NumberedList\',\'BulletedList\',\'Outdent\',\'Indent\',\'Blockquote\'],\r\n		[\'ShowBlocks\', \'RemoveFormat\', \'Source\']\r\n	],\r\n	extraPlugins: \'pyroimages,pyrofiles\',\r\n	width: \'99%\',\r\n	height: 400,\r\n	dialog_backgroundCoverColor: \'#000\',\r\n	removePlugins: \'elementspath\',\r\n	defaultLanguage: \'{{ helper:config item=\"default_language\" }}\',\r\n	language: \'{{ global:current_language }}\'\r\n});', '', '1', '1', 'wysiwyg', '993');
INSERT INTO `default_settings` VALUES ('comment_markdown', 'Allow Markdown', 'Do you want to allow visitors to post comments using Markdown?', 'select', '0', '0', '0=Text Only|1=Allow Markdown', '1', '1', 'comments', '965');
INSERT INTO `default_settings` VALUES ('comment_order', 'Comment Order', 'Sort order in which to display comments.', 'select', 'ASC', 'ASC', 'ASC=Oldest First|DESC=Newest First', '1', '1', 'comments', '966');
INSERT INTO `default_settings` VALUES ('contact_email', 'Contact E-mail', 'All e-mails from users, guests and the site will go to this e-mail address.', 'text', 'rigo.castro@imaginamos.co', '', '', '1', '1', 'email', '979');
INSERT INTO `default_settings` VALUES ('currency', 'Currency', 'The currency symbol for use on products, services, etc.', 'text', '&pound;', '', '', '1', '1', '', '994');
INSERT INTO `default_settings` VALUES ('dashboard_rss', 'Dashboard RSS Feed', 'Link to an RSS feed that will be displayed on the dashboard.', 'text', 'https://www.pyrocms.com/blog/rss/all.rss', '', '', '0', '1', '', '990');
INSERT INTO `default_settings` VALUES ('dashboard_rss_count', 'Dashboard RSS Items', 'How many RSS items would you like to display on the dashboard?', 'text', '5', '5', '', '1', '1', '', '989');
INSERT INTO `default_settings` VALUES ('date_format', 'Date Format', 'How should dates be displayed across the website and control panel? Using the <a target=\"_blank\" href=\"http://php.net/manual/en/function.date.php\">date format</a> from PHP - OR - Using the format of <a target=\"_blank\" href=\"http://php.net/manual/en/function.strftime.php\">strings formatted as date</a> from PHP.', 'text', 'F j, Y', '', '', '1', '1', '', '995');
INSERT INTO `default_settings` VALUES ('default_theme', 'Default Theme', 'Select the theme you want users to see by default.', '', 'default', 'adom', 'func:get_themes', '1', '0', '', '0');
INSERT INTO `default_settings` VALUES ('enable_comments', 'Enable Comments', 'Enable comments.', 'radio', '1', '1', '1=Enabled|0=Disabled', '1', '1', 'comments', '968');
INSERT INTO `default_settings` VALUES ('enable_profiles', 'Enable profiles', 'Allow users to add and edit profiles.', 'radio', '1', '', '1=Enabled|0=Disabled', '1', '1', 'users', '963');
INSERT INTO `default_settings` VALUES ('enable_registration', 'Enable user registration', 'Allow users to register in your site.', 'radio', '1', '', '1=Enabled|0=Disabled', '0', '1', 'users', '961');
INSERT INTO `default_settings` VALUES ('files_cache', 'Files Cache', 'When outputting an image via site.com/files what shall we set the cache expiration for?', 'select', '480', '480', '0=no-cache|1=1-minute|60=1-hour|180=3-hour|480=8-hour|1440=1-day|43200=30-days', '1', '1', 'files', '986');
INSERT INTO `default_settings` VALUES ('files_cf_api_key', 'Rackspace Cloud Files API Key', 'You also must provide your Cloud Files API Key. You will find it at the same location as your Username in your Rackspace account.', 'text', '', '', '', '0', '1', 'files', '989');
INSERT INTO `default_settings` VALUES ('files_cf_username', 'Rackspace Cloud Files Username', 'To enable cloud file storage in your Rackspace Cloud Files account please enter your Cloud Files Username. <a href=\"https://manage.rackspacecloud.com/APIAccess.do\">Find your credentials</a>', 'text', '', '', '', '0', '1', 'files', '990');
INSERT INTO `default_settings` VALUES ('files_enabled_providers', 'Enabled File Storage Providers', 'Which file storage providers do you want to enable? (If you enable a cloud provider you must provide valid auth keys below', 'checkbox', '0', '0', 'amazon-s3=Amazon S3|rackspace-cf=Rackspace Cloud Files', '0', '1', 'files', '994');
INSERT INTO `default_settings` VALUES ('files_s3_access_key', 'Amazon S3 Access Key', 'To enable cloud file storage in your Amazon S3 account provide your Access Key. <a href=\"https://aws-portal.amazon.com/gp/aws/securityCredentials#access_credentials\">Find your credentials</a>', 'text', '', '', '', '0', '1', 'files', '993');
INSERT INTO `default_settings` VALUES ('files_s3_geographic_location', 'Amazon S3 Geographic Location', 'Either US or EU. If you change this you must also change the S3 URL.', 'radio', 'US', 'US', 'US=United States|EU=Europe', '1', '1', 'files', '991');
INSERT INTO `default_settings` VALUES ('files_s3_secret_key', 'Amazon S3 Secret Key', 'You also must provide your Amazon S3 Secret Key. You will find it at the same location as your Access Key in your Amazon account.', 'text', '', '', '', '0', '1', 'files', '992');
INSERT INTO `default_settings` VALUES ('files_s3_url', 'Amazon S3 URL', 'Change this if using one of Amazon\'s EU locations or a custom domain.', 'text', 'http://{{ bucket }}.s3.amazonaws.com/', 'http://{{ bucket }}.s3.amazonaws.com/', '', '0', '1', 'files', '991');
INSERT INTO `default_settings` VALUES ('files_upload_limit', 'Filesize Limit', 'Maximum filesize to allow when uploading. Specify the size in MB. Example: 5', 'text', '5', '5', '', '1', '1', 'files', '987');
INSERT INTO `default_settings` VALUES ('frontend_enabled', 'Site Status', 'Use this option to the user-facing part of the site on or off. Useful when you want to take the site down for maintenance.', 'radio', '1', '', '1=Open|0=Closed', '1', '1', '', '988');
INSERT INTO `default_settings` VALUES ('ga_email', 'Google Analytic E-mail', 'E-mail address used for Google Analytics, we need this to show the graph on the dashboard.', 'text', '', '', '', '0', '1', 'integration', '983');
INSERT INTO `default_settings` VALUES ('ga_password', 'Google Analytic Password', 'This is also needed to show the graph on the dashboard. You will need to allow access to Google to get this to work. See <a href=\"https://accounts.google.com/b/0/IssuedAuthSubTokens?hl=en_US\" target=\"_blank\">Authorized Access to your Google Account</a>', 'password', '', '', '', '0', '1', 'integration', '982');
INSERT INTO `default_settings` VALUES ('ga_profile', 'Google Analytic Profile ID', 'Profile ID for this website in Google Analytics', 'text', '', '', '', '0', '1', 'integration', '984');
INSERT INTO `default_settings` VALUES ('ga_tracking', 'Google Tracking Code', 'Enter your Google Analytic Tracking Code to activate Google Analytics view data capturing. E.g: UA-19483569-6', 'text', '', '', '', '0', '1', 'integration', '985');
INSERT INTO `default_settings` VALUES ('mail_line_endings', 'Email Line Endings', 'Change from the standard \\r\\n line ending to PHP_EOL for some email servers.', 'select', '1', '1', '0=PHP_EOL|1=\\r\\n', '0', '1', 'email', '972');
INSERT INTO `default_settings` VALUES ('mail_protocol', 'Mail Protocol', 'Select desired email protocol.', 'select', 'mail', 'mail', 'mail=Mail|sendmail=Sendmail|smtp=SMTP', '1', '1', 'email', '977');
INSERT INTO `default_settings` VALUES ('mail_sendmail_path', 'Sendmail Path', 'Path to server sendmail binary.', 'text', '', '', '', '0', '1', 'email', '972');
INSERT INTO `default_settings` VALUES ('mail_smtp_host', 'SMTP Host Name', 'The host name of your smtp server.', 'text', '', '', '', '0', '1', 'email', '976');
INSERT INTO `default_settings` VALUES ('mail_smtp_pass', 'SMTP password', 'SMTP password.', 'password', '', '', '', '0', '1', 'email', '975');
INSERT INTO `default_settings` VALUES ('mail_smtp_port', 'SMTP Port', 'SMTP port number.', 'text', '', '', '', '0', '1', 'email', '974');
INSERT INTO `default_settings` VALUES ('mail_smtp_user', 'SMTP User Name', 'SMTP user name.', 'text', '', '', '', '0', '1', 'email', '973');
INSERT INTO `default_settings` VALUES ('meta_topic', 'Meta Topic', 'Two or three words describing this type of company/website.', 'text', 'Content Management', 'Add your slogan here', '', '0', '1', '', '998');
INSERT INTO `default_settings` VALUES ('moderate_comments', 'Moderate Comments', 'Force comments to be approved before they appear on the site.', 'radio', '1', '1', '1=Enabled|0=Disabled', '1', '1', 'comments', '967');
INSERT INTO `default_settings` VALUES ('profile_visibility', 'Profile Visibility', 'Specify who can view user profiles on the public site', 'select', 'public', '', 'public=profile_public|owner=profile_owner|hidden=profile_hidden|member=profile_member', '0', '1', 'users', '960');
INSERT INTO `default_settings` VALUES ('records_per_page', 'Records Per Page', 'How many records should we show per page in the admin section?', 'select', '25', '', '10=10|25=25|50=50|100=100', '1', '1', '', '992');
INSERT INTO `default_settings` VALUES ('registered_email', 'User Registered Email', 'Send a notification email to the contact e-mail when someone registers.', 'radio', '1', '', '1=Enabled|0=Disabled', '0', '1', 'users', '962');
INSERT INTO `default_settings` VALUES ('rss_feed_items', 'Feed item count', 'How many items should we show in RSS/blog feeds?', 'select', '25', '', '10=10|25=25|50=50|100=100', '1', '1', '', '991');
INSERT INTO `default_settings` VALUES ('server_email', 'Server E-mail', 'All e-mails to users will come from this e-mail address.', 'text', 'admin@localhost', '', '', '1', '1', 'email', '978');
INSERT INTO `default_settings` VALUES ('site_lang', 'Site Language', 'The native language of the website, used to choose templates of e-mail notifications, contact form, and other features that should not depend on the language of a user.', 'select', 'en', 'es', 'func:get_supported_lang', '1', '1', '', '997');
INSERT INTO `default_settings` VALUES ('site_name', 'Site Name', 'The name of the website for page titles and for use around the site.', 'text', 'Un-named Website', '', '', '1', '1', '', '1000');
INSERT INTO `default_settings` VALUES ('site_public_lang', 'Public Languages', 'Which are the languages really supported and offered on the front-end of your website?', 'checkbox', 'en', 'en,es', 'func:get_supported_lang', '1', '1', '', '996');
INSERT INTO `default_settings` VALUES ('site_slogan', 'Site Slogan', 'The slogan of the website for page titles and for use around the site', 'text', '', 'Add your slogan here', '', '0', '1', '', '999');
INSERT INTO `default_settings` VALUES ('unavailable_message', 'Unavailable Message', 'When the site is turned off or there is a major problem, this message will show to users.', 'textarea', 'Sorry, this website is currently unavailable.', '', '', '0', '1', '', '987');
INSERT INTO `default_settings` VALUES ('work_us_setting', 'work_us Setting', 'A Yes or No option for the work_us module', 'select', '1', '1', '1=Yes|0=No', '1', '1', 'work_us', '0');

-- ----------------------------
-- Table structure for `default_theme_options`
-- ----------------------------
DROP TABLE IF EXISTS `default_theme_options`;
CREATE TABLE `default_theme_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` set('text','textarea','password','select','select-multiple','radio','checkbox','colour-picker') COLLATE utf8_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `is_required` int(1) NOT NULL,
  `theme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_theme_options
-- ----------------------------
INSERT INTO `default_theme_options` VALUES ('1', 'show_breadcrumbs', 'Show Breadcrumbs', 'Would you like to display breadcrumbs?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'default');
INSERT INTO `default_theme_options` VALUES ('2', 'layout', 'Layout', 'Which type of layout shall we use?', 'select', '2 column', '2 column', '2 column=Two Column|full-width=Full Width|full-width-home=Full Width Home Page', '1', 'default');
INSERT INTO `default_theme_options` VALUES ('3', 'pyrocms_recent_comments', 'Recent Comments', 'Would you like to display recent comments on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'pyrocms');
INSERT INTO `default_theme_options` VALUES ('4', 'pyrocms_news_feed', 'News Feed', 'Would you like to display the news feed on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'pyrocms');
INSERT INTO `default_theme_options` VALUES ('5', 'pyrocms_quick_links', 'Quick Links', 'Would you like to display quick links on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'pyrocms');
INSERT INTO `default_theme_options` VALUES ('6', 'pyrocms_analytics_graph', 'Analytics Graph', 'Would you like to display the graph on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'pyrocms');
INSERT INTO `default_theme_options` VALUES ('7', 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', '1', 'base');
INSERT INTO `default_theme_options` VALUES ('8', 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'base');
INSERT INTO `default_theme_options` VALUES ('9', 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', '1', 'base');
INSERT INTO `default_theme_options` VALUES ('10', 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'base');
INSERT INTO `default_theme_options` VALUES ('11', 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', '1', 'mts');
INSERT INTO `default_theme_options` VALUES ('12', 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'mts');
INSERT INTO `default_theme_options` VALUES ('13', 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', '1', 'mts');
INSERT INTO `default_theme_options` VALUES ('14', 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'mts');
INSERT INTO `default_theme_options` VALUES ('15', 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', '1', 'adom');
INSERT INTO `default_theme_options` VALUES ('16', 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'adom');
INSERT INTO `default_theme_options` VALUES ('17', 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', '1', 'adom');
INSERT INTO `default_theme_options` VALUES ('18', 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', '1', 'adom');

-- ----------------------------
-- Table structure for `default_type_files`
-- ----------------------------
DROP TABLE IF EXISTS `default_type_files`;
CREATE TABLE `default_type_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_type_files
-- ----------------------------

-- ----------------------------
-- Table structure for `default_users`
-- ----------------------------
DROP TABLE IF EXISTS `default_users`;
CREATE TABLE `default_users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `salt` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `group_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `activation_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Registered User Information';

-- ----------------------------
-- Records of default_users
-- ----------------------------
INSERT INTO `default_users` VALUES ('1', 'rigo.castro@imaginamos.co', '8b7cad19cb4dcde69c963c1ce9322212f22c435c', '0f32b', '1', '', '1', '', '1376505778', '1377278650', 'rigobcastro', null, 'a26937b7e7adc2071f3ec06eec6b8016889717c5');
INSERT INTO `default_users` VALUES ('2', 'eduard.russy@imaginamos.co', '5b75c3aecb413e7105f1d7d954954f03f955e947', '4d0049', '1', '127.0.0.1', '1', null, '1377278746', '1378762427', 'Eduardrussy', null, '6ff718a8d65b5a91dde029f9c7b40fa1d06ee77a');
INSERT INTO `default_users` VALUES ('3', 'oscar@imaginamos.com', '5d399352b752f2fec2a8c1b0edfa1b7c5f008dab', '0db357', '3', '127.0.0.1', '1', null, '1378330455', '1378330455', 'prueba_admin', null, null);
INSERT INTO `default_users` VALUES ('15', 'eduardrussy@gmail.com', 'e5dd8ff144423c695e63e76fa1a842b3cc1c8934', '694920', '2', '127.0.0.1', '0', 'a272eeddbaf5bd8e99c36a320fd4ea13684bc7c8', '1378389573', '1378389573', 'eduardrussy1', null, null);

-- ----------------------------
-- Table structure for `default_variables`
-- ----------------------------
DROP TABLE IF EXISTS `default_variables`;
CREATE TABLE `default_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_variables
-- ----------------------------

-- ----------------------------
-- Table structure for `default_widgets`
-- ----------------------------
DROP TABLE IF EXISTS `default_widgets`;
CREATE TABLE `default_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `version` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `enabled` int(1) NOT NULL DEFAULT '1',
  `order` int(10) NOT NULL DEFAULT '0',
  `updated_on` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_widgets
-- ----------------------------
INSERT INTO `default_widgets` VALUES ('1', 'google_maps', 'a:10:{s:2:\"en\";s:11:\"Google Maps\";s:2:\"el\";s:19:\"Χάρτης Google\";s:2:\"nl\";s:11:\"Google Maps\";s:2:\"br\";s:11:\"Google Maps\";s:2:\"pt\";s:11:\"Google Maps\";s:2:\"ru\";s:17:\"Карты Google\";s:2:\"id\";s:11:\"Google Maps\";s:2:\"fi\";s:11:\"Google Maps\";s:2:\"fr\";s:11:\"Google Maps\";s:2:\"fa\";s:17:\"نقشه گوگل\";}', 'a:10:{s:2:\"en\";s:32:\"Display Google Maps on your site\";s:2:\"el\";s:78:\"Προβάλετε έναν Χάρτη Google στον ιστότοπό σας\";s:2:\"nl\";s:27:\"Toon Google Maps in uw site\";s:2:\"br\";s:34:\"Mostra mapas do Google no seu site\";s:2:\"pt\";s:34:\"Mostra mapas do Google no seu site\";s:2:\"ru\";s:80:\"Выводит карты Google на страницах вашего сайта\";s:2:\"id\";s:37:\"Menampilkan Google Maps di Situs Anda\";s:2:\"fi\";s:39:\"Näytä Google Maps kartta sivustollasi\";s:2:\"fr\";s:42:\"Publiez un plan Google Maps sur votre site\";s:2:\"fa\";s:59:\"نمایش داده نقشه گوگل بر روی سایت \";}', 'Gregory Athons', 'http://www.gregathons.com', '1.0.0', '1', '1', '1377291489');
INSERT INTO `default_widgets` VALUES ('2', 'html', 's:4:\"HTML\";', 'a:10:{s:2:\"en\";s:28:\"Create blocks of custom HTML\";s:2:\"el\";s:80:\"Δημιουργήστε περιοχές με δικό σας κώδικα HTML\";s:2:\"br\";s:41:\"Permite criar blocos de HTML customizados\";s:2:\"pt\";s:41:\"Permite criar blocos de HTML customizados\";s:2:\"nl\";s:30:\"Maak blokken met maatwerk HTML\";s:2:\"ru\";s:83:\"Создание HTML-блоков с произвольным содержимым\";s:2:\"id\";s:24:\"Membuat blok HTML apapun\";s:2:\"fi\";s:32:\"Luo lohkoja omasta HTML koodista\";s:2:\"fr\";s:36:\"Créez des blocs HTML personnalisés\";s:2:\"fa\";s:58:\"ایجاد قسمت ها به صورت اچ تی ام ال\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', '1', '2', '1377291489');
INSERT INTO `default_widgets` VALUES ('3', 'login', 'a:10:{s:2:\"en\";s:5:\"Login\";s:2:\"el\";s:14:\"Σύνδεση\";s:2:\"nl\";s:5:\"Login\";s:2:\"br\";s:5:\"Login\";s:2:\"pt\";s:5:\"Login\";s:2:\"ru\";s:22:\"Вход на сайт\";s:2:\"id\";s:5:\"Login\";s:2:\"fi\";s:13:\"Kirjautuminen\";s:2:\"fr\";s:9:\"Connexion\";s:2:\"fa\";s:10:\"لاگین\";}', 'a:10:{s:2:\"en\";s:36:\"Display a simple login form anywhere\";s:2:\"el\";s:96:\"Προβάλετε μια απλή φόρμα σύνδεσης χρήστη οπουδήποτε\";s:2:\"br\";s:69:\"Permite colocar um formulário de login em qualquer lugar do seu site\";s:2:\"pt\";s:69:\"Permite colocar um formulário de login em qualquer lugar do seu site\";s:2:\"nl\";s:32:\"Toon overal een simpele loginbox\";s:2:\"ru\";s:72:\"Выводит простую форму для входа на сайт\";s:2:\"id\";s:32:\"Menampilkan form login sederhana\";s:2:\"fi\";s:52:\"Näytä yksinkertainen kirjautumislomake missä vain\";s:2:\"fr\";s:54:\"Affichez un formulaire de connexion où vous souhaitez\";s:2:\"fa\";s:70:\"نمایش یک لاگین ساده در هر قسمتی از سایت\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', '1', '3', '1377291489');
INSERT INTO `default_widgets` VALUES ('4', 'navigation', 'a:10:{s:2:\"en\";s:10:\"Navigation\";s:2:\"el\";s:16:\"Πλοήγηση\";s:2:\"nl\";s:9:\"Navigatie\";s:2:\"br\";s:11:\"Navegação\";s:2:\"pt\";s:11:\"Navegação\";s:2:\"ru\";s:18:\"Навигация\";s:2:\"id\";s:8:\"Navigasi\";s:2:\"fi\";s:10:\"Navigaatio\";s:2:\"fr\";s:10:\"Navigation\";s:2:\"fa\";s:10:\"منوها\";}', 'a:10:{s:2:\"en\";s:40:\"Display a navigation group with a widget\";s:2:\"el\";s:100:\"Προβάλετε μια ομάδα στοιχείων πλοήγησης στον ιστότοπο\";s:2:\"nl\";s:38:\"Toon een navigatiegroep met een widget\";s:2:\"br\";s:62:\"Exibe um grupo de links de navegação como widget em seu site\";s:2:\"pt\";s:62:\"Exibe um grupo de links de navegação como widget no seu site\";s:2:\"ru\";s:88:\"Отображает навигационную группу внутри виджета\";s:2:\"id\";s:44:\"Menampilkan grup navigasi menggunakan widget\";s:2:\"fi\";s:37:\"Näytä widgetillä navigaatio ryhmä\";s:2:\"fr\";s:47:\"Affichez un groupe de navigation dans un widget\";s:2:\"fa\";s:71:\"نمایش گروهی از منوها با استفاده از ویجت\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.2.0', '1', '4', '1377291489');
INSERT INTO `default_widgets` VALUES ('5', 'rss_feed', 'a:10:{s:2:\"en\";s:8:\"RSS Feed\";s:2:\"el\";s:24:\"Τροφοδοσία RSS\";s:2:\"nl\";s:8:\"RSS Feed\";s:2:\"br\";s:8:\"Feed RSS\";s:2:\"pt\";s:8:\"Feed RSS\";s:2:\"ru\";s:31:\"Лента новостей RSS\";s:2:\"id\";s:8:\"RSS Feed\";s:2:\"fi\";s:10:\"RSS Syöte\";s:2:\"fr\";s:8:\"Flux RSS\";s:2:\"fa\";s:19:\"خبر خوان RSS\";}', 'a:10:{s:2:\"en\";s:41:\"Display parsed RSS feeds on your websites\";s:2:\"el\";s:82:\"Προβάλετε τα περιεχόμενα μιας τροφοδοσίας RSS\";s:2:\"nl\";s:28:\"Toon RSS feeds op uw website\";s:2:\"br\";s:48:\"Interpreta e exibe qualquer feed RSS no seu site\";s:2:\"pt\";s:48:\"Interpreta e exibe qualquer feed RSS no seu site\";s:2:\"ru\";s:94:\"Выводит обработанную ленту новостей на вашем сайте\";s:2:\"id\";s:42:\"Menampilkan kutipan RSS feed di situs Anda\";s:2:\"fi\";s:39:\"Näytä purettu RSS syöte sivustollasi\";s:2:\"fr\";s:39:\"Affichez un flux RSS sur votre site web\";s:2:\"fa\";s:46:\"نمایش خوراک های RSS در سایت\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.2.0', '1', '5', '1377291490');
INSERT INTO `default_widgets` VALUES ('6', 'social_bookmark', 'a:10:{s:2:\"en\";s:15:\"Social Bookmark\";s:2:\"el\";s:35:\"Κοινωνική δικτύωση\";s:2:\"nl\";s:19:\"Sociale Bladwijzers\";s:2:\"br\";s:15:\"Social Bookmark\";s:2:\"pt\";s:15:\"Social Bookmark\";s:2:\"ru\";s:37:\"Социальные закладки\";s:2:\"id\";s:15:\"Social Bookmark\";s:2:\"fi\";s:24:\"Sosiaalinen kirjanmerkki\";s:2:\"fr\";s:13:\"Liens sociaux\";s:2:\"fa\";s:52:\"بوکمارک های شبکه های اجتماعی\";}', 'a:10:{s:2:\"en\";s:47:\"Configurable social bookmark links from AddThis\";s:2:\"el\";s:111:\"Παραμετροποιήσιμα στοιχεία κοινωνικής δικτυώσης από το AddThis\";s:2:\"nl\";s:43:\"Voeg sociale bladwijzers toe vanuit AddThis\";s:2:\"br\";s:87:\"Adiciona links de redes sociais usando o AddThis, podendo fazer algumas configurações\";s:2:\"pt\";s:87:\"Adiciona links de redes sociais usando o AddThis, podendo fazer algumas configurações\";s:2:\"ru\";s:90:\"Конфигурируемые социальные закладки с сайта AddThis\";s:2:\"id\";s:60:\"Tautan social bookmark yang dapat dikonfigurasi dari AddThis\";s:2:\"fi\";s:59:\"Konfiguroitava sosiaalinen kirjanmerkki linkit AddThis:stä\";s:2:\"fr\";s:43:\"Liens sociaux personnalisables avec AddThis\";s:2:\"fa\";s:71:\"تنظیم و نمایش لینک های شبکه های اجتماعی\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', '1', '6', '1377291490');
INSERT INTO `default_widgets` VALUES ('7', 'archive', 'a:8:{s:2:\"en\";s:7:\"Archive\";s:2:\"br\";s:15:\"Arquivo do Blog\";s:2:\"fa\";s:10:\"آرشیو\";s:2:\"pt\";s:15:\"Arquivo do Blog\";s:2:\"el\";s:33:\"Αρχείο Ιστολογίου\";s:2:\"fr\";s:16:\"Archives du Blog\";s:2:\"ru\";s:10:\"Архив\";s:2:\"id\";s:7:\"Archive\";}', 'a:8:{s:2:\"en\";s:64:\"Display a list of old months with links to posts in those months\";s:2:\"br\";s:95:\"Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente\";s:2:\"fa\";s:101:\"نمایش لیست ماه های گذشته به همراه لینک به پست های مربوطه\";s:2:\"pt\";s:95:\"Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente\";s:2:\"el\";s:155:\"Προβάλλει μια λίστα μηνών και συνδέσμους σε αναρτήσεις που έγιναν σε κάθε από αυτούς\";s:2:\"fr\";s:95:\"Permet d\'afficher une liste des mois passés avec des liens vers les posts relatifs à ces mois\";s:2:\"ru\";s:114:\"Выводит список по месяцам со ссылками на записи в этих месяцах\";s:2:\"id\";s:63:\"Menampilkan daftar bulan beserta tautan post di setiap bulannya\";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', '1', '7', '1377291489');
INSERT INTO `default_widgets` VALUES ('8', 'blog_categories', 'a:8:{s:2:\"en\";s:15:\"Blog Categories\";s:2:\"br\";s:18:\"Categorias do Blog\";s:2:\"pt\";s:18:\"Categorias do Blog\";s:2:\"el\";s:41:\"Κατηγορίες Ιστολογίου\";s:2:\"fr\";s:19:\"Catégories du Blog\";s:2:\"ru\";s:29:\"Категории Блога\";s:2:\"id\";s:12:\"Kateori Blog\";s:2:\"fa\";s:28:\"مجموعه های بلاگ\";}', 'a:8:{s:2:\"en\";s:30:\"Show a list of blog categories\";s:2:\"br\";s:57:\"Mostra uma lista de navegação com as categorias do Blog\";s:2:\"pt\";s:57:\"Mostra uma lista de navegação com as categorias do Blog\";s:2:\"el\";s:97:\"Προβάλει την λίστα των κατηγοριών του ιστολογίου σας\";s:2:\"fr\";s:49:\"Permet d\'afficher la liste de Catégories du Blog\";s:2:\"ru\";s:57:\"Выводит список категорий блога\";s:2:\"id\";s:35:\"Menampilkan daftar kategori tulisan\";s:2:\"fa\";s:55:\"نمایش لیستی از مجموعه های بلاگ\";}', 'Stephen Cozart', 'http://github.com/clip/', '1.0.0', '1', '8', '1377291489');
INSERT INTO `default_widgets` VALUES ('9', 'latest_posts', 'a:8:{s:2:\"en\";s:12:\"Latest posts\";s:2:\"br\";s:24:\"Artigos recentes do Blog\";s:2:\"fa\";s:26:\"آخرین ارسال ها\";s:2:\"pt\";s:24:\"Artigos recentes do Blog\";s:2:\"el\";s:62:\"Τελευταίες αναρτήσεις ιστολογίου\";s:2:\"fr\";s:17:\"Derniers articles\";s:2:\"ru\";s:31:\"Последние записи\";s:2:\"id\";s:12:\"Post Terbaru\";}', 'a:8:{s:2:\"en\";s:39:\"Display latest blog posts with a widget\";s:2:\"br\";s:81:\"Mostra uma lista de navegação para abrir os últimos artigos publicados no Blog\";s:2:\"fa\";s:65:\"نمایش آخرین پست های وبلاگ در یک ویجت\";s:2:\"pt\";s:81:\"Mostra uma lista de navegação para abrir os últimos artigos publicados no Blog\";s:2:\"el\";s:103:\"Προβάλει τις πιο πρόσφατες αναρτήσεις στο ιστολόγιό σας\";s:2:\"fr\";s:68:\"Permet d\'afficher la liste des derniers posts du blog dans un Widget\";s:2:\"ru\";s:100:\"Выводит список последних записей блога внутри виджета\";s:2:\"id\";s:51:\"Menampilkan posting blog terbaru menggunakan widget\";}', 'Erik Berman', 'http://www.nukleo.fr', '1.0.0', '1', '9', '1377291489');
INSERT INTO `default_widgets` VALUES ('10', 'list_items_about', 'a:2:{s:2:\"en\";s:19:\"Lista quienes somos\";s:2:\"es\";s:10:\"About list\";}', 'a:2:{s:2:\"en\";s:19:\"Lista quienes somos\";s:2:\"es\";s:10:\"About list\";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', '1', '10', '1377623136');
INSERT INTO `default_widgets` VALUES ('11', 'list_properties_best', 'a:2:{s:2:\"en\";s:18:\"Lista de inmuebles\";s:2:\"es\";s:15:\"properties list\";}', 'a:2:{s:2:\"en\";s:18:\"Lista de inmuebles\";s:2:\"es\";s:15:\"properties list\";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', '1', '11', '1377623137');
INSERT INTO `default_widgets` VALUES ('12', 'list_offices', 'a:2:{s:2:\"en\";s:16:\"Lista de oficina\";s:2:\"es\";s:12:\"Offices list\";}', 'a:2:{s:2:\"en\";s:16:\"Lista de oficina\";s:2:\"es\";s:12:\"Offices list\";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', '1', '12', '1377623200');

-- ----------------------------
-- Table structure for `default_widget_areas`
-- ----------------------------
DROP TABLE IF EXISTS `default_widget_areas`;
CREATE TABLE `default_widget_areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_widget_areas
-- ----------------------------
INSERT INTO `default_widget_areas` VALUES ('2', 'destacados', 'Destacados');

-- ----------------------------
-- Table structure for `default_widget_instances`
-- ----------------------------
DROP TABLE IF EXISTS `default_widget_instances`;
CREATE TABLE `default_widget_instances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_id` int(11) DEFAULT NULL,
  `widget_area_id` int(11) DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(10) NOT NULL DEFAULT '0',
  `created_on` int(11) NOT NULL DEFAULT '0',
  `updated_on` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_widget_instances
-- ----------------------------
INSERT INTO `default_widget_instances` VALUES ('6', 'About list', '10', '2', 'a:0:{}', '1', '1377623213', '0');
INSERT INTO `default_widget_instances` VALUES ('7', 'properties list', '11', '2', 'a:0:{}', '2', '1377623224', '0');
INSERT INTO `default_widget_instances` VALUES ('8', 'Offices list', '12', '2', 'a:0:{}', '3', '1377623234', '0');

-- ----------------------------
-- Table structure for `default_work_us`
-- ----------------------------
DROP TABLE IF EXISTS `default_work_us`;
CREATE TABLE `default_work_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `document_type` int(11) DEFAULT NULL,
  `document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `neighborhood` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `charge_id` int(11) NOT NULL,
  `schooling_id` int(11) DEFAULT NULL,
  `is_student` int(11) DEFAULT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_career` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_chief` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_admission_date` date DEFAULT NULL,
  `company_retirement_date` date DEFAULT NULL,
  `company_reason_leaving` text COLLATE utf8_unicode_ci,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of default_work_us
-- ----------------------------
INSERT INTO `default_work_us` VALUES ('1', null, null, null, null, '2', null, null, null, null, '2', '1', null, null, '0', '3', '1', null, null, null, null, null, null, null, null, null, null, null);
