-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2013 a las 17:26:42
-- Versión del servidor: 5.5.31-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuariofbz_adom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_domains`
--

DROP TABLE IF EXISTS `core_domains`;
CREATE TABLE IF NOT EXISTS `core_domains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(100) NOT NULL,
  `site_id` int(11) NOT NULL,
  `type` enum('park','redirect') NOT NULL DEFAULT 'park',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`domain`),
  KEY `domain` (`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_settings`
--

DROP TABLE IF EXISTS `core_settings`;
CREATE TABLE IF NOT EXISTS `core_settings` (
  `slug` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `default` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`slug`),
  UNIQUE KEY `unique - slug` (`slug`),
  KEY `index - slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Stores settings for the multi-site interface';

--
-- Volcado de datos para la tabla `core_settings`
--

INSERT INTO `core_settings` (`slug`, `default`, `value`) VALUES
('date_format', 'g:ia -- m/d/y', 'g:ia -- m/d/y'),
('lang_direction', 'ltr', 'ltr'),
('status_message', 'This site has been disabled by a super-administrator.', 'This site has been disabled by a super-administrator.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_sites`
--

DROP TABLE IF EXISTS `core_sites`;
CREATE TABLE IF NOT EXISTS `core_sites` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `core_sites`
--

INSERT INTO `core_sites` (`id`, `name`, `ref`, `domain`, `active`, `created_on`, `updated_on`) VALUES
(1, 'Default Site', 'default', 'mts.local', 1, 1376505779, 0),
(2, 'Intranet', 'intranet', 'intranet.mts.local', 1, 1376523903, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_users`
--

DROP TABLE IF EXISTS `core_users`;
CREATE TABLE IF NOT EXISTS `core_users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Super User Information' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `core_users`
--

INSERT INTO `core_users` (`id`, `email`, `password`, `salt`, `group_id`, `ip_address`, `active`, `activation_code`, `created_on`, `last_login`, `username`, `forgotten_password_code`, `remember_code`) VALUES
(1, 'rigo.castro@imaginamos.co', '8b7cad19cb4dcde69c963c1ce9322212f22c435c', '0f32b', 1, '', 1, '', 1376505778, 1376523842, 'rigobcastro', NULL, 'a26937b7e7adc2071f3ec06eec6b8016889717c5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_aislados`
--

DROP TABLE IF EXISTS `default_aislados`;
CREATE TABLE IF NOT EXISTS `default_aislados` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `etiqueta_img` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chat_img` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_aislados`
--

INSERT INTO `default_aislados` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `etiqueta_img`, `chat_img`) VALUES
(1, '2013-10-10 22:12:06', '2013-10-10 22:12:49', NULL, NULL, '4f565e2407c74c3', 'c7f71914bd3b07f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_banner`
--

DROP TABLE IF EXISTS `default_banner`;
CREATE TABLE IF NOT EXISTS `default_banner` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `default_banner`
--

INSERT INTO `default_banner` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `description`, `images`, `url`, `state`) VALUES
(2, '2013-09-12 01:18:15', NULL, 16, 1, 'asfsdf', 'sgfdghfhgfhgfh', 'b52461a4b6b978c', 'http://www.google.com.co/', '1'),
(3, '2013-09-23 16:22:55', '2013-09-27 23:49:45', 16, 2, 'Prueba', 'Prueba', '04b5fd53029fcd0', 'http://repositorio.imaginamos.com.co/ERU/adom/quienes', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_blog`
--

DROP TABLE IF EXISTS `default_blog`;
CREATE TABLE IF NOT EXISTS `default_blog` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `default_blog`
--

INSERT INTO `default_blog` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `intro`, `title`, `slug`, `category_id`, `body`, `parsed`, `keywords`, `author_id`, `created_on`, `updated_on`, `comments_enabled`, `status`, `type`, `preview_hash`, `image`) VALUES
(1, '2013-08-29 21:14:00', '2013-08-29 21:14:00', 2, 1, 'Este es el intro de la nocticia', 'Mi noticia', 'mi-noticia', 0, 'esdta es la noticia completa', '', '', 2, 1377803640, 1377803640, '3 months', 'live', 'wysiwyg-advanced', '', '3a49a2d9dd1200d'),
(2, '2013-08-29 22:31:00', '2013-08-29 22:31:00', 2, 2, 'El into de la noticias es este&nbsp;<span style="font-size: 13px;">El into de la noticias es este&nbsp;El into de la noticias es este&nbsp;El into de la noticias es este&nbsp;El into de la noticias es este</span>', 'Otra noticias muy importante', 'otra-noticias-muy-importante', 0, 'El contenido total de la noticia', '', '', 2, 1377808260, 1377808260, '3 months', 'live', 'wysiwyg-advanced', '', 'ec7c64d1853aef8'),
(3, '2013-08-30 19:23:00', '2013-08-30 19:23:00', 2, 3, '<span style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad&nbsp;</span>', 'Ota noticia', 'ota-noticia', 0, '<span style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>', '', '', 2, 1377883380, 1377883380, '3 months', 'live', 'wysiwyg-advanced', '', '69b50676f93c1e9'),
(4, '2013-08-30 19:30:00', '2013-08-30 19:30:00', 2, 4, '<span style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te&nbsp;</span>', 'Ota noticia mas', 'ota-noticia-mas', 0, '<span style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; line-height: 17px; text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>', '', '', 2, 1377883800, 1377883800, '3 months', 'live', 'wysiwyg-advanced', '', 'bad859c9bd3d3b5'),
(5, '2013-09-04 23:22:00', NULL, 2, 5, 'intro', 'Don oscar', 'don-oscardc', 0, 'Esta es la notcia&nbsp;', '', '', 2, 1378329720, 0, '3 months', 'live', 'wysiwyg-advanced', '', '4bd1cb901f11f70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_blog_categories`
--

DROP TABLE IF EXISTS `default_blog_categories`;
CREATE TABLE IF NOT EXISTS `default_blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_slug` (`slug`),
  UNIQUE KEY `unique_title` (`title`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_ci_sessions`
--

DROP TABLE IF EXISTS `default_ci_sessions`;
CREATE TABLE IF NOT EXISTS `default_ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `default_ci_sessions`
--

INSERT INTO `default_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e228cfcb4a7bbda34a71cc7af94f08e3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1376523809, ''),
('8554a462cb43cc2d8781787dc11e723d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1376593147, ''),
('89be7e85009ab785c5cd54a8bbcd4378', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1377082523, 'a:1:{s:14:"admin_redirect";s:5:"admin";}'),
('d5d2b0729e6258b7ef0ee13c2eec3e1e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1377000156, ''),
('78d291becb573ff0af8490cd6fdea774', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284978, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('e39346ae74aaf3133283327fab451fe2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377279140, ''),
('278298b1b0d4e53465b5d3d8063f51cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377279231, ''),
('b787852dd37c43097968c00b09ca1dbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377295177, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('a6ce2c02425f65eeaf6c97b7eb2e6c39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284956, ''),
('398c756b866c33e00b4ea4fa0e1901cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284959, ''),
('d6de5dafcdc805ce48d92690ffd4b630', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284959, ''),
('90d22401b7a189f202f25c0d690a5228', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284959, ''),
('8429d975abf6f8c7e623537452c957e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284960, ''),
('8aa5dc5b5216b4736e2e907ba3a4a842', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284960, ''),
('335d8cccc32638dfca69bb1610786bb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284960, ''),
('2e714a2ff7f10e68206bb99e1ee1d73f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377284960, ''),
('9d9856b95a0a9d150b9f4d6f90d76b43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377286169, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('87bed8a044ca05d34252db0a36afed58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377285896, ''),
('4cf8987d8df2ae4caf5a4e29c4f79261', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377286836, ''),
('cd050cd25342caaf728262ce2f5fe20d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287131, ''),
('5c42cd47f791bb8147c4e9267b306007', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287292, ''),
('5c063bbc7dada5eb43d52fb15edbf64f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287435, ''),
('aa94e402b03cf91707b6ce955c332a75', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287472, ''),
('4582075bd16601e533f84699141883b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287529, ''),
('a593ef82afc6a1823d391d8fcba02786', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287545, ''),
('f6ac6d700494b12055fc1cd696f9bf05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287564, ''),
('87d7cb62e9e0e53d6009bed9c931763f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287566, ''),
('649185d8fb8057b40af460c01644674a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287607, ''),
('4e2681874c074c2a7c40b94210178cbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287611, ''),
('45e996452288ddec32fb69ec55c62320', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287619, ''),
('1b5e7c98635b414a42eae26fbb42bf42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287621, ''),
('e6f0e91c7ac2e78e32551836d5aaa9e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287625, ''),
('53215c0191c1aeea37e5273d3a1b0aa1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287627, ''),
('d552fba9b30461d4002957074a73f977', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287859, ''),
('b14ef76361c0ec3709053dbc3ebd44db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377287985, ''),
('e534145d1f7eda2688319ed09bc16953', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288029, ''),
('60cd1cd7ff4ccf94eef0a8677462c0fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288160, ''),
('664a33c11178f2d4792c73a7629ccde6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288208, ''),
('a37184114f6a1513b21ff94732e753c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288258, ''),
('86103f21fc88faad25abc8b93afaa55b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288355, ''),
('e29f3c2971ae3d0a9966afcd7042754f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288357, ''),
('7b7b11fc14df7d50ab9f4f02667f03a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288359, ''),
('377145a11deb371cb59d67bfd8e9dc06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288361, ''),
('c5d33aa533ecbf425cc3347456c47f07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288362, ''),
('0d86f1a2f05448159110410f0fb0d57f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288365, ''),
('89aa2caf4e0115ec979defde7d6880a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288367, ''),
('5dde36c7ec5012a39689f4f143f5f864', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288368, ''),
('ab15ae13d2a432b688212c6afe5a447e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288385, ''),
('51eb106159532b8ee21db885c349e5ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288387, ''),
('e63a4e048c327f2dc9b045a83cd6e763', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288670, ''),
('04b4ddea9c17dce0db9245ff9684c7c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288673, ''),
('797081a3daf9d1562d1e55c8c9146e54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288675, ''),
('cc4c851203f7e471ecb80805e659879e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288832, ''),
('5922676f7b8eabab447b52b65ab4684d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288883, ''),
('fe74ffd5aae9d07556d288191f8a3d00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288885, ''),
('64f3680806a58de9ebcc25bd5d923197', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377288927, ''),
('6dd0886d5e8582d56122fad653f2d19a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377290967, ''),
('8b4ddb768d62ec8d414b985461593898', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377290998, ''),
('eee8f38ebeab48236bc46ef4fdcac7ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377291030, ''),
('969c7990b8aba1aa90b7f5a462461d12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377295214, ''),
('3008ef50c88eb6dac7c74659e007fed3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377520015, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('90e8d58d9b46337d6dd93c64f8981eee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377550946, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('70195d46d614d933f76257b80428897d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377522383, ''),
('242fbfefd443b8c1eaa9e83ca5a23ce6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377522388, ''),
('085131f62e18d1f56852aae3695d8046', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377522642, ''),
('d8e99cc15618f83228fc60471e9ef0f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377522646, ''),
('a2f2181638dba902a83866e7af0379b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377522676, ''),
('49cdb2b98735900ef3771c8ad474d191', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377524771, ''),
('a039fd0384e3e5f072e3e6ed4226613f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377524844, ''),
('c957ea04534df786ff27101811e6ad7a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525067, ''),
('53a288e68b7e0aefc6016508f3a9cbc7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525182, ''),
('4167ff73d788e9f936d168fa9b486329', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525260, ''),
('a9f3bef7e39058ff46e73e8dbdad5e3b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525306, ''),
('15f5ea3f7456a2edc9c4127d413f095e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525309, ''),
('502684a322d553006660d26ffe231bc1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525311, ''),
('8f16e064066a2fb31c58e4f09242cbbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525313, ''),
('d3fd17fc501c715c5beffcd6b84bd067', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525314, ''),
('e1c442b6c5937a01c1ce973227d8276a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525316, ''),
('43477e9a2030cc154aee2d54fd8110f5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525334, ''),
('b37e375c752dede0f039dae6c4946cef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525365, ''),
('64be8fb71bd7da51c8cb4292d134c098', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377525429, ''),
('5f31fb155385963869bb1f35fbc62a41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526113, ''),
('3e0b54b8e466b546db889a7e7e7d4363', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526127, ''),
('6d13d296ae4492c9d830c4a16d5ce63d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526146, ''),
('52533ac2b9b90f577e0ec6adfb396a0a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526237, ''),
('26d0f1c46c603e04a738cca5b5fcb148', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526362, ''),
('4336345bbb89d47521bec543bd901e4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526454, ''),
('b502198fa917bab293dc972a9410f751', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526494, ''),
('7d57f53a60af29d1032631d0c000dab5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526553, ''),
('29a9d86a39c45e640a495ecb99ede25e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526606, ''),
('5daace9d7b01a29aef76b9e55e4b260f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526639, ''),
('ff3cdf84a7d321133e50fe92ed1db27e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526671, ''),
('32d66d67a49735847676d47ee17a4299', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526684, ''),
('dc1d9d65408798cf01f0c63f682da972', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526690, ''),
('d718b1534e055dc404c48aa71d40090c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526692, ''),
('3be1a92d3f52e5f1f4e38d4de5c1e6fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526693, ''),
('16ee560d1ebb8041519da76cb1a5c262', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526695, ''),
('a07484c65ff2b4b67355bec739f92e99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526792, ''),
('c498e7e420efff074a8675ce202af290', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526812, ''),
('64ef7299d85765dbe38a813e763f1c0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377526815, ''),
('007768005fb32d4ac3d4102e4272499e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527027, ''),
('7b7983f551c98354d5fe12bc594930df', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527099, ''),
('b9d44a664324c54068ed3deb1a1f7020', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527101, ''),
('c588cbffed64ec52b6299f2548499bd4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527169, ''),
('6605f22c740df322dfe69b9a0b75c35a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527257, ''),
('629b3d8d3d80075a9795cb47ed85bd9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527437, ''),
('7c26177c0a4aa32b300bf45170cddef9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527636, ''),
('becca14f8d8b6a6e6ce3b39ab2350ca0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377527675, ''),
('c613ec995487a6e9ddc9fa84261e5618', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377541734, ''),
('0bb9a48345e6dc96dfd5f41d273b1dce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377541808, ''),
('11e7233ee73e36c45a59f5152d456b1a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377542571, ''),
('106f54eab692379417b4b63881f3c1aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377542858, ''),
('47f6d1fe2e80cc062f435eecef65566e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543118, ''),
('065ef4146a35a1b7b016f1034f8ef3bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543238, ''),
('32d2ac6a5dae8e419c12d1546fc0134d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543296, ''),
('faf2f63c82ab2e1e66d9c236ed548cb1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543350, ''),
('d84c2556479ee6e084950e9b74f99332', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543411, ''),
('8cdee43f55d30b433efd4f83187815e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377543770, ''),
('df735b43b35c0c320a38c15f30ded01f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544162, ''),
('29e2d6ef3c95b76020800b08f112638d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544546, ''),
('0f1d3c1cc19a427dbb88cf89abaed476', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544587, ''),
('66536ad1712222ae2380a9922cf4a010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544619, ''),
('1f354c9fa1db69ced7cb2197058f3ec8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544687, ''),
('ffcc116c6731226646ee3a9953b41f1b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544726, ''),
('2837ed856c14a53521a0fd7ed772061b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544745, ''),
('17afec8b4c921c791c26939683b2e728', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544747, ''),
('5d7f55ef2325b385af6be37e62fa959c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544760, ''),
('236b94cc45de7e3da474fdf814a0c533', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544791, ''),
('03abae65b1d14c8c5bddc3f2e69ed10e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544819, ''),
('8f3bd084d55f32fdfa20688f299ca309', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544838, ''),
('7a168a9edc501b71045c08eb9fc89dfe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544844, ''),
('9c95b3a69155a7e9b50d54c09c4c2496', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544856, ''),
('af5450e7f675757305dedae82e2e21a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544950, ''),
('1e93c1a5fb248dbe7f9efc595ac103d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377544971, ''),
('6299d85f5e96f8cbbfc22788076238c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377545005, ''),
('f614fa6ae56d78db37b33c203dd71e09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377545021, ''),
('3dea4d44af0aff09f48ad9ccd8cf4410', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377545044, ''),
('1044f38b9fdd44f7577edac8bfa8f5a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377545175, ''),
('1acbf61c409fb7046fc44888927029aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377545335, ''),
('f64279fc217c1d383af4b9efcdd44883', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1377550962, ''),
('8507a5fabd19293673e460e1f82145da', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377550976, ''),
('5c1c79652f2cc336e2d3f6557407a79e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377551113, ''),
('643530dca58baab44d988f83cb7117c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377554030, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('cd2b26167dcfc40ef237c097805f645b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377551935, ''),
('2cb11adb637aec7e9693412324071678', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377552016, ''),
('4f922d56611e9f40486fe3d35086ad82', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377552033, ''),
('6e95ab711efc28f8ddbc71b1cb3095c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377552109, ''),
('c9784fd089d3605b5e471e5597a965ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377552223, ''),
('2c8e4bad946fe25cc3185e94bed42a28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377554033, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('06a53099d5f1e099b045f55a16c87335', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616635, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('d9c107e6c4becef6611a8e6b3de3b124', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612058, ''),
('ae9ddaedabd9175d15fb1580748d8857', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612060, ''),
('9c484c8c6f21f390cc1d0df0e8748fb6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612124, ''),
('322bef3ef99e4b099a6d87416b01e2b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612129, ''),
('01f9d43d0e3041a70b31b63de1bf0390', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612246, ''),
('ac739c0f2cb9c4cb961960be8cec981f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612255, ''),
('16cfdd195d543086436d4302b9cabd34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612340, ''),
('9a252ea76e565a1e2db51badab31e1c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612402, ''),
('214f91c9d06948a14b5c5a772dea0450', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377612434, ''),
('f77dace44bddc29885fa5d1172448e9b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377614293, ''),
('7bb4277b813c5b108f57f6e579519c44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377614537, ''),
('b37fcc47ba3c4fde72b3e8f0db053ec9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377614561, ''),
('a5c127213cd9259adfa82d89f2d56a2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377614567, ''),
('3cde8ae203f79d91d9544725cb722ef8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377614585, ''),
('92bf83b2422cfea18a71aa5d462f88b2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616377, ''),
('8e9e6158aad23676a5e83e3596e06e80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616386, ''),
('8de9b40cc4ea761142492d5172a19218', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616437, ''),
('ed391dee88c5a670c1aebc3277f7246c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616444, ''),
('930340210a10107abe1d386db974d06a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616489, ''),
('5e3919cead1481de4144c61e189ad969', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616495, ''),
('d60bddfaa9af569457d58f80cd5134ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616517, ''),
('85600d4e1a404b813f3a1025f654fccb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616522, ''),
('7454af77fc08a6465029ea133bd4239e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616556, ''),
('3bcb243819979fd43402abd434020617', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616588, ''),
('e1428b154bb7aa5cd2c9e92935148472', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616626, ''),
('2db5fdc1decb4bc10b2036e880b14459', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616636, ''),
('1912768845f34a4ae038fdc3cf1a3b4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624837, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('f5d1b9126270afdfd783b98e0213fdea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616637, ''),
('ce3848d7fc9a204652b799130e7355b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616684, ''),
('1592d87f092c6947ddbac53b486f0380', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616689, ''),
('2678af47f3e929924207bc00d61d5ac1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616709, ''),
('e44f94d71022a2240e0ed1e0ea53aee8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616715, ''),
('e57e03b9cb441495502b630ad9755ef3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377616782, ''),
('34690d2321f5aaa7a10332d5d89cb7d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377622645, ''),
('bc369a028564acde57e9f1b461f9ca2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377622660, ''),
('e916b6435d3851f2353be937f45be5c2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377622760, ''),
('08bb7ad1c48c230fb17189755abc052f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377623420, ''),
('2f4d99148baecb61a87b5a6f3f1b7235', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377623477, ''),
('4b63ed4af752b3818eb0e5ee3db6d86f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624502, ''),
('5e0f7caece6f0ba294ca91e4208b11f5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624837, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('27164b34bd00a40d5a74c3419fa3ff7e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624837, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('fb16316ba2ec8a33a8a32373f564a63c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624838, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('bc0476dc7408058761eacbfd1f2f6bf3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624838, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('6c5a6d9679585382aae69979e15fc2b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624839, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('ecb140dd6ff3548bf703e97053c389d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624840, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('5513d2fb6edecb0a22df82d02d7406bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624840, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('cfe879889ff8717032735b05191dfa7d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377624841, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('bf706be1019aa611244ae9d5931e05e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377632741, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('1462283be15798d62f1e68f17b07e3a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627053, ''),
('f3682c7f612443d8191cb6cd03dfe8d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627063, ''),
('61664a845ab22f4c02f54b1c79641221', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627172, ''),
('6631a8ebea4041967b330c1f902291bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627180, ''),
('240dc1428d54b429bea089b477fe11c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627182, ''),
('ab904657694223416621c4c416ac4ca3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627183, ''),
('2b75defae47aae6843e1161bf1cf7b2a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627184, ''),
('6d27c0d0f8661f69760dcf9bdb6c2808', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627232, ''),
('b64528e67fbe56830b3164666eec1c97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627284, ''),
('01257c2503e9d3207cca23d6f6a499f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627309, ''),
('7087c6fb1d2daa8a158251b557a56396', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627326, ''),
('d5c9145d488e6a3e3c236ff87f0e75cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627410, ''),
('6ddd81e94eed5227503b6dda3d556dd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627439, ''),
('2465172d04d204de51fbafbf89507f02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627488, ''),
('ed6de595f3743e6e703470b06c75b78b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627518, ''),
('591b8bc6290fa0fb8d7d11cde08841ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627896, ''),
('60c3531e65f5659883f4343ab57564b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627930, ''),
('e930b2bbc37a1ed52eb6a1aacd43c626', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377627998, ''),
('d4600b47e8c9a7eeb9d8cc69194306d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377628052, ''),
('2b387d9f6cacb47bd5a39367bb8a9767', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377628160, ''),
('4c6b9bcd3f6d3cac7169e49ce69aeacb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377628178, ''),
('d08e1cb5000445ce3cefd353c85b6702', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629042, ''),
('d9f1018f70f8bb765d7ec92e96276eb4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629625, ''),
('0b66886be77e158a17cd8485d216e106', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629782, ''),
('2806f5d474aec65880ccc458518e503f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629842, ''),
('34d2bef84d716d5d6e2ac0536e89c5d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629852, ''),
('9e124095c211e0b8fb6cef521061ebc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629904, ''),
('11e76ced8b2c2316af8d269405fc3a40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629908, ''),
('fb5e6ff63176d112cc7ad59273c71bb2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629913, ''),
('d114eedfd787206c30daf118892bbe4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629952, ''),
('265f2aab24488ffc30c74160d6ef7062', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377629962, ''),
('35199c8855e9559a195565fbf7a9d2d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377630214, ''),
('ce86db7e7f10e58b938e508074cb591e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377632741, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('5fb405a5c723fff60cee6268018cd61b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377639761, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('1fd99787a1ed7d1f6c4080ceacd17c25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633256, ''),
('b282c958099dec47d364fcac0ee3a989', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633336, ''),
('039096d6ecf2787c1e609b9cd7d3a504', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633342, ''),
('6bb0f5668aa56c6b7a494f5e88101427', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633359, ''),
('f6ef4a0e46b0d474780f91e49a9fd9b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633390, ''),
('7796e2cf822624ca755200c866c36f7e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633454, ''),
('13737dc6b2b1dfc93c421df7951c3f76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633502, ''),
('0d7c7c7b42389c53c97112e3ecf34efd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633558, ''),
('e1a8ab03e636e26cb3351840bae85197', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377633986, ''),
('d461cc66c39e4a9b53817d0ce3d14ea3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377634025, ''),
('30823ab4388b8b07736a5643e70a2c90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377634167, ''),
('f7a669b7c534da59fe1839784f39f1c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636130, ''),
('69d6b441e7bbd711c543c4eb06fb420d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636140, ''),
('dbefadd5c7a62828a4fd94bb0273dd46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636610, ''),
('ac51566870509f98b7c88f3b6bf52450', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636616, ''),
('1dd3f56a64e387b3956643b4e0b63183', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636617, ''),
('1201608ef0f3941bfb3606bcd5f57e19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636628, ''),
('268305594dc232d1854b48c3e1f61a28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636629, ''),
('89672e8aac9efccebaaff371b2fa7a1e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636634, ''),
('6c1a7dd78f9de72523c854770ca7f8f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636635, ''),
('4aff4163dfeeda87f1f9f38aeceddaa6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636712, ''),
('30da5bfb1489269f322a0a0d95ecf7d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636721, ''),
('154c554a9ec44ba95c25f88747873df4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636725, ''),
('c222eacee7609f45a3ee249fa81ae143', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636727, ''),
('0bbb5b137b267f191964993d41925263', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636728, ''),
('f6416255e47261e812e201da4f462c62', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636756, ''),
('d771f88b213bb30da76f91ea4377d26f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636764, ''),
('0aef458fdcd676c65286f33930b73e3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636883, ''),
('101b1032f4eff15d95c218909918b980', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636891, ''),
('ee0af7f6a27bd2d40555363ac38ddcba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636904, ''),
('d229808fb35718b5d16d7c285f411fa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636909, ''),
('ddb4621d7f9416b5f4aefec9cd6fc823', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636931, ''),
('03eee6ee0c300e0d5becad71c24daa3d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636944, ''),
('dffabd399c1a91860fb4afea25153b47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636950, ''),
('00440ce4bf25261f41a3ab383dccc356', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377636975, ''),
('2d541aeda48e4dd843eeb8fc847ed8af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377637005, ''),
('33570f60ef7cb554604196f703e8241b', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637041, ''),
('da8562932d2e947feff90ee042ae52ba', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', 1377637062, ''),
('ced31103ce268b0543a952c2d111c308', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637064, ''),
('0032fe8f002c7ef9ace79ed370473475', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', 1377637073, ''),
('f4de145473bd9e9e20407f77cb3b33f9', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637201, ''),
('219c5028e18df5cdaeb0262d977db921', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', 1377637229, ''),
('5060ee8cf4771f1cb8a4d836d0a588c8', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637232, ''),
('20cf5d8622b0a4031a888272530b0106', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', 1377637303, '');
INSERT INTO `default_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8b72b2da5e2914986254a072d73bf714', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637325, ''),
('e2d740b0ca5eaa5376478d8bd9102703', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1377637340, ''),
('2b79e436d2ee080648a1961284a1ed30', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1377637502, ''),
('2f41ad01adb195d73b7f443e23c1c696', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637505, ''),
('8971f5653df645c499aaf146287748fa', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1377637506, ''),
('c452c2af6d21d0803f21e820c89a204a', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637509, ''),
('f425e31244cc884e443a603c689ed55b', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1377637512, ''),
('1c22aa308a960888e2af4b7c4e6ad4fb', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637515, ''),
('7fd4f52f3be70282e4b57a9ab77bb0a2', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1377637522, ''),
('f206c62b3c24b9cbca87d3c39d75b607', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377637524, ''),
('c870a8779e684bdd119f8b41836db30c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377637582, ''),
('b0b1ae1af4bd23bbc676e313b7e555cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377638048, ''),
('c9b30cf863a467f3998b361b0c09286b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377638057, ''),
('2083c66681323be448ffecbb5d2583a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377715677, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('594f38759c9d48209529cc88fb4bb52c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694553, ''),
('c3ae432feae0ea283e53ae75cca1fba9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694614, ''),
('fc7c2729a404f2c35022803e618c42e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694653, ''),
('a43b73d1afac9ba4ab0b8287b97c4277', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694721, ''),
('b55bebf45bb38cbdc42b9b0db1c1f8a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694780, ''),
('a2bff4f5a04687993222dd9523b6fb69', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694807, ''),
('cff53af58019eea980948bfd740954a3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377694844, ''),
('922d1a607768eaa0b8fa272fa4ffc3a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377695326, ''),
('4611525a2201e9ef234b93b64cc3d3d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377696775, ''),
('f34d226e2e0b23128db0391e2cef6550', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377696877, ''),
('8efeaae6131858a8f47b1780549673f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697248, ''),
('1d790895a3ac859cfab951dbf327f276', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697423, ''),
('93cf2c3ffd57ae9d8966e66f43c9043d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697483, ''),
('a38574833f61b05203598c371a84a26b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697495, ''),
('f3549f4fdb0b6a206c9ee1d08ca43c4f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697513, ''),
('4ced1a05b66183723253e1468d1d9364', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697523, ''),
('724b5a657e397ba3a7aa4634e5e37828', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377697777, ''),
('14087ea89f94293bbed8de902a622122', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698016, ''),
('47dad7094b9026d703d4ee433213782b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698112, ''),
('0ebd50abd7e508c9dce465314f57397f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698486, ''),
('575698751f32202c0517663785d1409d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698516, ''),
('e96a92e62e54978c4c313e6c594f8f29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698543, ''),
('b04300ada8cc61e548c727455aa3fdcf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698598, ''),
('a4443e2893b9b5a2cd76c354629fae44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698681, ''),
('bf70673ff3e454f6293ec7ce37eb04b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698690, ''),
('758dcc8ad7a4fff858caa14b3c42d1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698748, ''),
('0f5795d73b092862f4a056d94c317701', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698767, ''),
('6099b3a4972ca6c824f7c1ba3162e20d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698774, ''),
('22699b35069e59b9ee24a99e4d2a11e1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698823, ''),
('71e17de6746d0b78d4d32eb84963c9f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698830, ''),
('4475a3781b3ea38de11ce93c0bba7062', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377698960, ''),
('e646a8774e3beeedc2ecf08fd91bbcd1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699324, ''),
('5543d01be42ec5aaf97ffed4e8da27f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699541, ''),
('95c7672df9add3a1b93081eff8dca1b6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699571, ''),
('6d5ff53466c65b518ef26995366dcd3f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699722, ''),
('484ac5883b472a5cf65c6cdc58268058', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699748, ''),
('8163c1109ba51a57837b0544e797f630', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699887, ''),
('56480d169db8291bbadf4c05aa34abaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377699893, ''),
('969668e31b54ca0ddf1f008345b2edeb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1377700391, ''),
('badb91b89d18400d3f6f3287fe77f436', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1377700731, ''),
('c47db1894bcea1633202e82d07f80033', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377803792, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('1c43d14a0ea302eb8ce3a258ad3528aa', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377795847, ''),
('65a6b9de1a596b032de8ec2fe33653b9', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377809605, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('312aa9c72e33ae17023e692f18882d42', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377808257, ''),
('c3703f6d335824fe321258494a6a6407', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377808563, ''),
('e9ab69caf7d4cdccc0807218b6cdd842', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377889414, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('837a26ab9600d3d392f6bd1d3f1aea0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377879201, ''),
('91d52f3aee1ef6df212752053bb657c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377881734, ''),
('573358eaf45baa87397c2de758b61a2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377881780, ''),
('396135062d40330f819f4112029d3a88', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377881897, ''),
('bd9bc11487010f1487487542cc04af61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882056, ''),
('cae8f26b7f9001b1090af5fd5bb3bfbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882113, ''),
('9bb63638f03961f9f1bf4146c5480c4b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882251, ''),
('5def4766d786da3a2b262439e4dd316f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882345, ''),
('2d1f144bab37999031dd83ee2936c46a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882365, ''),
('08df5a61198f3acd9f26614a50fbcb83', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882392, ''),
('01b00870281c12130b2d516d1014a9bc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882490, ''),
('b75d71047717bd8cb28575767bfb4d35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882568, ''),
('cd6cfd47593d09a3412ea1e41c108bdc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882752, ''),
('98b0914d3fc277bc8d1b4897fb3912f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882788, ''),
('ba7b9ef4af0a4aa8665af17a5968efe6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377882813, ''),
('ad37b3ea1f181a858ff078c17a168b8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377883631, ''),
('dbafb62e979b75cafa006c7f061cf967', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377883759, ''),
('77a9fd1c88bbb96b4de62dca5981cdd4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377883877, ''),
('f24519c2c6d67917c302343ac5baf748', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884075, ''),
('6b408f69a45a79eebba6ddfba82d1907', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884103, ''),
('39b60bb02480cb65d797b06e2d66bb45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884150, ''),
('aef603635581d1e59818538859da3fab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884180, ''),
('a395b9cf3f8f4c8dc397cff3438ea855', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884276, ''),
('78a8677fb0ea30730c26af11c947f740', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884311, ''),
('8584677d33d305b0be89abcb049175e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884669, ''),
('f7e3c1ebef70ad62ae28fa52aac511f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884956, ''),
('e01c8e0cbe0f37a8fb2660811367aca9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377884986, ''),
('6399508f9b81c4f32344c6af096c9df9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377885249, ''),
('816c429a0ee49578ab7d4c87df166cda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377886385, ''),
('c17bbddf45394058f217cf1c7b0adf8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377886518, ''),
('2cb4afd54d3fbbf5fab9a065ce15136d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377886718, ''),
('35d183ca1ad1934ed5a61455a5b934c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887165, ''),
('aee1b7910d029bcdf08f36d00b2767b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887204, ''),
('7d64b18284247aff6a243449e2ca4555', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887224, ''),
('26926996b449c5e10288923e3b8985b2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887230, ''),
('8f60df2bc97eba3c38cb567ac31297fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887304, ''),
('3b70b6346073b62449c2d3174d9a608e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377887394, ''),
('956415b477e3266e62c50fec5f387413', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1377889946, 'a:6:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";s:18:"flash:old:referrer";s:41:"blog/2013/08/otra-noticias-muy-importante";}'),
('c0289739caec25306db4eb3174015334', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378128965, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('ae336a858ff36f85e08f3257d4aaddc9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126497, ''),
('f11f2e22061f89748f71d0e0c52fe1a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126536, ''),
('00dece8c134fb125594a9f25af1e9332', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126580, ''),
('b34984a15a44d8d5424d769495a386ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126782, ''),
('1a9d727883c77894a471af1614d346ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126899, ''),
('00afdac85c90c6c617167f0ce30ebe37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378126917, ''),
('56089d333a3ca185bf1d03de632caa13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148132, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('19b1042d289cb08c6a8e8aa79f3a1a6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157034, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('a8306a85de6d5110d9710006d1befaeb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148831, ''),
('cb73b8a0be7cd440b523a176b7416eec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148843, ''),
('fc3bafc3197abce10bfc8ee510fac9df', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148918, ''),
('b13b2b552aa4e4c7eff59d0dc54057ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148932, ''),
('1b67287c2cff237183d0f3610b24c074', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148971, ''),
('51c53d52667dbcfd6cf226e470143a41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148974, ''),
('a2cf066f1f1f49b696f63e442c62f993', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378148980, ''),
('08ef2447668b026c1881b09a9cb96a4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149072, ''),
('cc9b1b6b79f3b3666ee2728072482a43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149076, ''),
('1c77336a9e9c1e7ba21065fd1f9283f6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149094, ''),
('9aa4fdfaddb8c8bd0c10dfb3f7de6ce0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149645, ''),
('c28f7fd0b7e71bd4f38d1874fcba6759', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149659, ''),
('0da0e69d9f7df6dfdbab0dc137ae06c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149674, ''),
('a619536abe14ccf1ffb9d4087039dca7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149681, ''),
('7211cf78e0c95b0121a88a7e4dee9b45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149792, ''),
('34641a884b5eabb30a54f3835199aa4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149801, ''),
('a2431c99d159868938e9de9b3cde6990', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149804, ''),
('a632fe602c69efc6368b36ebeda7f8a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149819, ''),
('947f7968fe4e647309e721c47830daa9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149834, ''),
('c601e437dff35f60f4663dd5c204b0c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378149907, ''),
('55fe12a1245d2b60698d70a436062253', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150130, ''),
('d44170715636e82d2920e467961f6e8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150194, ''),
('3faf9edc09dafeb8bbf98ad4edae1ef5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150216, ''),
('427998aa16ab0f6bf72a1b02b9530d5d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150241, ''),
('6754feb54f6944c2d5d29432428811ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150374, ''),
('bc2f69c01c30017c0523c087b885d692', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150385, ''),
('2c771f13e9a7191fcb3bec8bb11ed3c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150701, ''),
('e2f07b1a8201c40ed64aee0ece01a21d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150838, ''),
('ddd484d9941e8ff9bfd776eaff02d5f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378150974, ''),
('8a90d44dfd3a59a11a2cf1af0b403b5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378151899, ''),
('bbd3b4491c7412b3814167297f314422', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378151903, ''),
('637dcb9e07279c18d52139d58a68d5af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378151951, ''),
('3106ac8d2563575ffce74f2c8b4639e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152064, ''),
('d46a5f276bae35b8fa497f094e7a977d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152138, ''),
('8f3961fe2e209f6a5897b6d532db38b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152182, ''),
('6be3f1591f941615125b14aabaf71e1d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152306, ''),
('2e23fd2833843fe2b6d8ca7530e44709', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152390, ''),
('5e68048654c62054ea1dac914e2e1d94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152418, ''),
('fb019633f0be73f72ace8761f4ae4337', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152624, ''),
('3d3103ed370d01785ecb9d00c5f74447', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152631, ''),
('730e07363314cf3202e61dd47706eadb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152741, ''),
('4c855d47f2b2fbf79956a6080289942d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378152794, ''),
('dfb52fe2b52e73ea7f16cd838d5e2598', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378153757, ''),
('94f4319bfbd4ce47838b9eb6cac8b6f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378153804, ''),
('ed4ff96dcda0e26249eede852bc94891', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378153895, ''),
('55990a883b94211107821d707b6a21c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154050, ''),
('4fd10105a36f70233efe755287246d7b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154080, ''),
('897d3d0b59c8e330decc8f405001255f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154112, ''),
('ef16d4a2468fbd21ed169a09f817c291', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154222, ''),
('73d26f28b6d6fa10b4c5eb550685e64f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154391, ''),
('7ef47712986b131fa79dc3557d7e752b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154452, ''),
('2322af9da961ad2e49e8793d4fdcb5f7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154529, ''),
('f67ca54e0675696df71c13e11f7eb280', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154658, ''),
('1534aba244112eeadc64dad828453c21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154829, ''),
('83175adc6d4fe714589f4a8ce2edb771', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154864, ''),
('ca4efd6510f5353ef81a23734c5409c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154881, ''),
('cd6976b0c22f925e0e0e5bee5b1b70ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154909, ''),
('d152edf8fd2e3a88738acdb131ba435c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378154993, ''),
('a32152308f615c5f2a15776acf77b5ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378155385, ''),
('2946e8e42ebef8311bf4af47cb442188', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378155496, ''),
('80c9a4d302673ec024cc87c880798af6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378155545, ''),
('446b43807329e1a43d57588d8c5802c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378156924, ''),
('1d155f463f4fbfd24fdb37952543354a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157036, ''),
('6fd3aca14a353e9f3799f1f6ca984751', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157077, ''),
('309484e3fbaa5d9e3769ec66c80167ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157091, ''),
('c6d2f2d2c298d415df1261a69fe62cc9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157099, ''),
('7901c0f9adc0b31a6bc9928d693dcc48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157111, ''),
('68581d290bcbff897e7aa093ccbcde20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157114, ''),
('3464fe61416bd6a6a80f0dcbf83737c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157117, ''),
('123fee366a8246574b2d8e8285db29ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157122, ''),
('ca61cb0cbe84da6448d414f859a7f612', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157133, ''),
('47429034e03119513ecfb6431e67e090', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157164, ''),
('57fb29e3b0ecad57e9db2b3318e634ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378157252, ''),
('31e69baa7c8433d8aecf925357f949ac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211713, ''),
('83fef52a31ebb5770b8860ab8db9c83e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211713, ''),
('39c15057cec99a36dd2e7229a30d925c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211714, ''),
('e364b2218004c99096bf3b5794a2a246', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211715, ''),
('47d59a318e4e72ad52afacda28e5b9e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211716, ''),
('e3a0ba170cdeea69c5cf1335c18a2506', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211717, ''),
('8cf0258ddf2e3706a44066ed31f190cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211717, ''),
('4307a44382a3934d322b0753f4be01f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211718, ''),
('79091fe64581f2dca7d47f47894d8430', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211720, ''),
('7dfdc128bab52b93fc7078c62b141a47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211720, ''),
('0692d65e52df860bfeaa74687b803c52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211721, ''),
('d491735932864fc2d4b85cb54e8f5ef0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211721, ''),
('8baf160cea3e50dc114b206741cb3d9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211721, ''),
('d1b5d88195eb1783948731757c59ca6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211722, ''),
('b2d46e1894f7732c14870853704524fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211722, ''),
('bcae1c738697dd73c519c7ec99f14001', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211722, ''),
('085f4356cc694c29352edc0d61756d77', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211723, ''),
('fe98a26a022b494f7b9142c3302d4022', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211723, ''),
('03b689b75474d0284b3061ca4a442bea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211723, ''),
('263a6733145d5348b8da776c004451e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211724, ''),
('cf848a22d3673e0b932fc75fd10c9278', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211724, ''),
('f3afe3c703e92421d37373ae044fc428', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211725, ''),
('40cadc04b344d555fe0f7c4549c4c62d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211725, ''),
('6c908a551fc008c8dcec67d8145a4dea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211725, ''),
('2df4c2ffae4241bf677f57a2a3cdbee7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211726, ''),
('9e3cf9d5a85a0f56c8d26f44334d7c24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211726, ''),
('4e672bd64ac7f1d909846800fa001a67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211726, ''),
('5cf0f87747f2324c705b4ce7188063c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211727, ''),
('8f86ae85220ce4d786c4483720ab375c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211727, ''),
('146bc4f56a3e16d955ac49bf852a3ce1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211727, ''),
('62c8520a56b7fed2a9b16164d367f6c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211728, ''),
('db6c06c1539fd7d7b89f915a2c6f6d99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211728, ''),
('34bc9de779da8cafdf337b85ec7ba406', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211728, ''),
('f16907eebaaf9336c2b919ddaaa35740', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211729, ''),
('4de677edf409df8473625c33cd50bdbf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211729, ''),
('03d704ebbab2d942f0b3989e5795abb6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211730, ''),
('2cdc80fb02cd88e6c00613d90799b4bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211730, ''),
('a06a3a52dcf5996e643743ccb3dacd28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211730, ''),
('f050acca4b08b6b908aa8c3cdf11905c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211730, ''),
('d8b613a226ff1df1bea48a7d1ee0209a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211731, ''),
('6f40d60a035302848f95c68406f97214', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211731, ''),
('463132ef7d5842a6af7bc2837997f255', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211731, ''),
('b0a0659c3cd2f629840d40721e0f2c96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211732, ''),
('58a118503f4cde21059dd79a1d68e344', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211732, ''),
('c36e18eabe69eada755984bdfc2b4de0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211732, ''),
('372f66f0ec19570c98653423e94fdd99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211733, ''),
('51a36eab314160f33bebe2f84264d6c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211733, ''),
('a96f0322d65d407d49bd55f8022a93b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211733, ''),
('7a588c76a914f5632f9f1ba185b3d9ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211734, ''),
('fa0b74bd29aefb5b73a7c58be792de4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211734, ''),
('794222691526a415443f9f123b80264d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211734, ''),
('15248a8246830c70eb016088b773bbb4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211734, ''),
('1df892840d781c823159e22d4cee0322', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211735, ''),
('6f524719a58ae7a405642d9efbd79c0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211735, ''),
('10dd2608f21d901f5ae172a002b4895d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211735, ''),
('52661cf65c69f0c229b6e07bf57fee1e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211736, ''),
('10fc2971f3059a289c732737d7460319', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211736, ''),
('0d58334e0aa394fec331bd8a872647d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211736, ''),
('f16f5a142cd76ced728d8c5f1f33ac8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211737, ''),
('b290feed2cdecc36971697dc33e4009f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211737, ''),
('9297a77431bbca7dbf5f2f7512157fbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211737, ''),
('26e9bf497552bcac2c50cb2e481d65a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211738, ''),
('df1ad1b416c7b6e9323a089675d6f37b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211738, ''),
('f7c73b5fac849d2ae2fb688f80b2dc7f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211738, ''),
('d2140ef3009c2c309da95d44ea053ed4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211739, ''),
('87c6224087e2dda70fda19a9ebdffaf1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211739, ''),
('eabe2383f799c5b3ac4bf6e697450783', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211739, ''),
('d795a6348da1ddc3040e30b58cf403f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211739, ''),
('b1bf094370221a90658ebeb8e523231c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211740, ''),
('cecead9b49ddb4b4652c46d914b16010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211740, ''),
('690dd5fa004ef32114c7f86376182e17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211740, ''),
('33c5b5f68496c82abdf854294c7afd54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211741, ''),
('40ad16eb9c6acedffeb603a26835a9fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211741, ''),
('8c909abbe515ddf260dddc2fa4577007', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211741, ''),
('04570972115db911e3c646f2e783fab9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211742, ''),
('72199b88d18a766ffb50e75cec948bb5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211742, ''),
('6d7a1d080d7d98f59a0bf55b02d12e91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211742, ''),
('ce7365d5f3475dd9a740e23a1efec278', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211742, ''),
('b99614f9dfca343bb52e72cccaecb989', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211743, ''),
('8dca6f1c8dd111691efd15a4bd8ebbc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211743, ''),
('b2ad577a6124b28d42baf672c2694e44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211743, ''),
('98ff2a6dbee222174d099615a560665c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211744, ''),
('de2a05ebbe98c59cfb93474a9043379b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211744, ''),
('e93c84846c6bae844f291097249e724a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211744, ''),
('588256e5844e1f822d6f7f0b6820cde7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211745, ''),
('e2c7957a4141e2c22388927e88da6521', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211745, ''),
('a02f51e6ae80d989bb0b368b3a287f24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211745, ''),
('af1b5c1ff15261153d21407c586fa4e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211745, ''),
('e5c3b47dbbaac5eb268580bc78cdcd94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211746, ''),
('7585fc02bbcb128b20efc5aa4202553c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211746, ''),
('5cb9bc9d7d76cf135c0a45fba784e5ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211746, ''),
('a8f225eae3ffc14326bff1f8f001188f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211747, ''),
('d33162da642068a4476e247f1f758f2d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211747, ''),
('4d3fba440ae38b80040af221074d8912', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211747, ''),
('3b4188fdafee58ad92c7dab1cb281031', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211747, ''),
('77755a95145ed1801a13570dd2cdf86a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211747, ''),
('b76f47586f576258ccd6e5f7f45142a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('8e5620a6b7794f8fae996b5738855a66', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('3f3d81f4b8b7a6298a107b7ba77ca082', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('d8566b5bfe43b64c128fca58370dba9d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('11505909bfef35b13107967d39fde925', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('61481f9e66a877b3470f5dddfa0125af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('1352abcc137783852ad491814ae4bf9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('4fff3460cfea605719970eb07cf0a0e0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211748, ''),
('3f6d8571590632a74558d05738fe1167', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('5998754dc8ec4bc14ffb903f9122b3b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('73b69001810292a899b3d38c0cbe0523', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('435dbf1b0dae72de76c496cc1f85ca4a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, '');
INSERT INTO `default_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b9dba1d1697a468e76b60ab6c04b9a90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('f42418f2971028946618ba8baa478cc8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('25fc231c6f95a2b1b04aa96281b48c5f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('3a152080f4f9eda45d7de06bc531b068', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('0d992ad5ca897958e7e9372a371e0af7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211749, ''),
('863c286104bf95ded89ba1575b7da1a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211750, ''),
('5f64609f90872e89a1adec79ccd5dfe6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211750, ''),
('13687163a6a8a0b7c7e9537e8eae08ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211750, ''),
('b4e8326a0cfed6910f4470f3c945a0ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211751, ''),
('8da58bebc8c0765cba4fe3f6845bd616', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211751, ''),
('ad4f092bf3c5ee3cd64ee7d462eeca97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211751, ''),
('f0ddbe04fb3b0017ddf3f960c4c481e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211752, ''),
('04111c817ecb59780991ccaacc560dc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211752, ''),
('5639bdf8e33ea909b2f865396bb1c189', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211752, ''),
('74066c1bd99bfaa3316f0b863b7b5f87', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211753, ''),
('421c52b66be5ac377cf573d24b4596c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211753, ''),
('280defa19789128ba5301008f6cda977', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211753, ''),
('52c005090b73ae80a4624c590349228d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211753, ''),
('2218ef1d6a7afc602aeddb3352c4d909', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211754, ''),
('f14c7c0bc95e2bbffd2b7e73ca2ef2e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211754, ''),
('b1a908fb70daf7d0b1a81cf31ffdf442', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211754, ''),
('88fb1c24e02b8eef972403a9d782717a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211755, ''),
('b29fbc520cbe2570dbba8765336e2f28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211755, ''),
('e1fd17f796f9e1d5b446a446c7ebf167', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211755, ''),
('078ce91c3f954c8af31ec9a30a25dd6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211756, ''),
('cfe8e49fc69b80c6f6653180030f7d57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211756, ''),
('714bfb133923f0704619ea61ab783a80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211756, ''),
('64e6a9baac74d27c5b301b7847fec4c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211756, ''),
('195a6894db5fd7f5bf81f3f923225d5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211757, ''),
('125f98838575ca47edc53bed56559122', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211757, ''),
('2dbf0ac65d245a32cf55fe5756a443e7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211757, ''),
('5d1aeb42e832a222ac538329f5b94f48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211758, ''),
('f52c5a032a9a61a2dcbd45db78b612e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211758, ''),
('59dd323e7923811e724be5cfad7dafbc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211758, ''),
('4eb1a9aa72c2462727c745ff1e0353ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211759, ''),
('27705fceb66bbb7c3a1ef567f9814635', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211759, ''),
('363bdbe6b31b50e96d36fef961c68ce3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211759, ''),
('ccc8707f9a83de6e3ee8230c928f5705', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211759, ''),
('7bb911d54fcc68d9ae1d9253cf7d37e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211760, ''),
('b0bb8d99a32632cf10b710bf53e70739', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211760, ''),
('b732b7368cec7c098a37ff30b61e3dc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211760, ''),
('ce1ea7da959c88285174a223352e718f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211761, ''),
('68e403a78c556a673883125049daa3b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211761, ''),
('227bc88df7c4f4b75924aeacf7f901f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211761, ''),
('1027ef217a2a858d4e76d0628fd312b7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211761, ''),
('bf62374680039a03c9c00053d6d31d94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211762, ''),
('32552b3f674397b8b91e87ebe6c66f67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211762, ''),
('e3065d9a66c072a478b3df6210388a91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211762, ''),
('3c758a49eac6995dd3c55a817a4341db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211763, ''),
('26d1e33bd60221df16ea8ebc68ea5e97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211763, ''),
('51ea843ae55ddd2ca3b6d846ad512d5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211763, ''),
('dca819f4d65b00926f96a73510b1f240', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211764, ''),
('6ec8b69ba5b8e61d7ed8e6fe2e91a225', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211764, ''),
('1490f2d8f3264440c090edd5c61420c7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211764, ''),
('c3dbaa424a890b080b058dbffd07b038', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211764, ''),
('e0500f2d96d47054d8bb1b31398a2fb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211765, ''),
('d6571f867bc2fe09d1cdd81f4b56cdf5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211765, ''),
('2304731d83e7441a94996975333dd993', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211765, ''),
('38fd11cb2132bc299b830abc23d1c1cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211766, ''),
('141f185aa1e717d5752e694425e30fa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211766, ''),
('2fdf5d01a683f6f002a5198cf018b701', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211766, ''),
('a396c419ab552306add37fa92326f244', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211767, ''),
('3d800d6fc0a639a68d21b9a458ff23f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211767, ''),
('89a10bfdecbd158c94e42421938278fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211767, ''),
('96f9d41d2256d8332ffcced585fea9d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211767, ''),
('32ac17d02fe1a7227d0bf69e2b6c3c76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211768, ''),
('c134cd309f5d7f5e90c1eb6d0068a671', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211768, ''),
('3d7dc1ef79b1c1d59f534b2a7ba344c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211768, ''),
('04ad70db5b05edfbe69fb8bb1c789eaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211769, ''),
('4a63e1720af85303a913da52f1906077', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211769, ''),
('1aa761a332e33d4ae31ece04f7def0b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211769, ''),
('6e16fc2389e876399ea9bd83413f87a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211769, ''),
('87e8c783ebed5116212b314b332dcc32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211770, ''),
('8597903fb28dab9230ffb2519b9c639e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211770, ''),
('9bf083d29ed73c1dad0f438298a6a764', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211770, ''),
('5055c992710276dc14fc7faacf2a8297', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211771, ''),
('57bff56a7cdf9317a52305c7a7000761', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211771, ''),
('f8137df8de097e2c2f1b3d4ce39ef0dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211771, ''),
('adea60813ff338b581406e1f4e1b9711', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211772, ''),
('187ce52ed8ca214ef7a3b6479d933c79', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211772, ''),
('5f4ac4627e3829c9914fed460e6ffeab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211772, ''),
('edc08deb4714eaed6bfcb0ed907b7df7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211772, ''),
('ac170bf816cd75a3913962fbc82b44bc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211773, ''),
('e59c65198a7f3767f6fd41f53ce8cb6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211773, ''),
('af61e8c31405e236dfa2d86fb95a6498', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211773, ''),
('5437e456011e91a03d704d972f89f4cb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211774, ''),
('4c3871a8642b4f8fd59d70faf19166cb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211774, ''),
('fb2d17dc09c8289c7ec4027b9bb3eb3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211774, ''),
('14cd7076ccf6c87ba196c0151c63be8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211774, ''),
('345e783bd8a116d2a4699d34b176acc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211775, ''),
('9174e61db2f0c3b82018342ef2fee057', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211775, ''),
('1cb25a6eb88568d2800141798e819a9a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211775, ''),
('49e89db882c6fafddfe0a518a0338cdc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211776, ''),
('b2d0696deaa50ba9821d552f13deb0f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211776, ''),
('acfbe146f578dd6ca258a71009ec3e22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211776, ''),
('39e024debec8f50d16a5acbf82418b0d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211776, ''),
('eee02a717bdecad9d4c35bce856bdfb8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211777, ''),
('dc8f96bfd3c880b145b697ef07d83013', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211777, ''),
('a9c6bb508a2489c540508d764192065e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211777, ''),
('7f6cb9645f31696322cbae3b13a17a59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('07f2b076713515ae2b49d086475f36fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('1138eb8e0746ca8109375c0b8b35b313', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('551a22574925a8032ae62813732e33eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('f7aa178c479980bb758635aaab047814', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('389aa2f39a4756745c055c4b1c008883', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('85bfd9d45d7cbd55f716a50e128b2975', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('cffd7fd9fa219f497644cf4856e75893', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('35cb27fd1655af606b182cb8eb54c349', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('e98890a369b378ef1ea15b73891ec9cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211778, ''),
('b647eb754ebed9487c23eb0c9fb83331', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('23edf30d1eb9a8b9e5a5053d3d0630aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('d45e492b25ba3b77995882f7e3dd03bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('d615083e25f4d3d9cc1c94adb22d86a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('11ef3f01e183f4673fc645bdfec87c5b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('65979e3b862b65faf9d255bc6a97eb13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('c23829d0031bfd908376cb174b570082', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('3b2e57a21b92e1aa6f59883ee69bf3a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('f74b8970c774086df1cbb7a6340f9b6d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('cca390ce0b02086e6c48146efcb1775c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('a3408cba03bcff908e6c24f857165ec6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211779, ''),
('516461fab3e868d74be547bdae8ceb03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('88baf76c8c648562bc867edb547e60c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('91aadff5d007b61c4a45a751798d4ab6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('535070f132cf37992beac6cf74e55b5d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('08521ffd1272aff61562a916c150ca40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('947ce3c803990a9ce9f8b35f09111818', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('af51765d95d22938319b32d0c51c8c05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211780, ''),
('db955ab8e278c8f3f1c862348e7488b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211781, ''),
('7663c9d24925697464dcddfe08008677', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211781, ''),
('35a04e26e67e1fd91747153181e058b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211781, ''),
('39ce60ead3276a161aa60af9ccfffbef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211781, ''),
('7d150852c99b2fa5eeb27c2934980b37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211782, ''),
('90f38d2ecf1ffcc818e99e39c34da083', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211782, ''),
('4837df29efd6ccc9cab7f2c819bc6e3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211782, ''),
('a121b89c4c886c3e76ef488951ca40ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211783, ''),
('73d03d5ab9eb559abccac65549e44dab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211783, ''),
('84fb3183a38dc8441f46f3b1e9685107', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211783, ''),
('3af042ecc5ae8c8f23fc50e5df108032', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211783, ''),
('1a44d0e143308862b287d5f532f2be2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211784, ''),
('aceb8caef12fd5248f332518c2493eb5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211784, ''),
('178c58287efa8bd03c31449c3b5231f7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211784, ''),
('4814efd09877e12e6cdc104438731e64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211785, ''),
('8499909752632cc7e963ab7a600779b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211785, ''),
('ced083d17764a7faaff3f81355d20369', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211785, ''),
('64da79f28116d65719a6c1c8ce03a53e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211785, ''),
('835dcfffba8e98c5ce9afe0bc8b1cad7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211786, ''),
('6a0f3e4cd4d410db72c12dd87091eef9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211786, ''),
('cf1672da5dde773fa57798efff900bbc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211786, ''),
('fca9ea0e8dec70af831418afe4444dab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211787, ''),
('beb1c6801d0fcebcb793c86edf1d3bac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211787, ''),
('3f0690fc9f997f92bb39c5b806fd8faa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211787, ''),
('d752f482e19230b8c81ace2abecf4543', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211788, ''),
('a130dbec2808969624166fc978b60c56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211788, ''),
('01560e73f75f22dc4b481bb28131dbd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211788, ''),
('207c1684430b7929142630b3ec3b7092', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211788, ''),
('2efe4253d01cf83d9fb00cdef6c300b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211789, ''),
('40e150105c95264ae96d96ed52095e45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211789, ''),
('92de9dbaa5f90263d1057798a26785c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211789, ''),
('9281e401372c0437fe37abb04bb2052c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211790, ''),
('856db68cbf27fce8c883bba2aed6ac27', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211790, ''),
('61c1b0c3daf80b12b40bea100b7d1d87', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211790, ''),
('12f2ba95ff3827baa5d812b1516240a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211790, ''),
('4070209d6d86f17a1fff78df9cdac9b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211791, ''),
('b59013f7733c0c9d8f4bcd97001c2be5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211791, ''),
('038c8922d416882f26117d61acfcefad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211791, ''),
('78e2d5a6dcfe82eeaefcc946c128c0a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211792, ''),
('fe07800bfc0d3c4ca75d17d5f8c02a9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211792, ''),
('115f09328f0b2577dbada468c8b496b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211792, ''),
('74777f18790e7fda302275d53dc0532d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211792, ''),
('6e3c777763cbf342273302df16427b74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211793, ''),
('23ad73a2f02212260c7f21ad8537d610', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211793, ''),
('eebaaa5f286dfb43485b132a68b4d1e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211793, ''),
('cd9968765de60a5f221c071dff085b8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211794, ''),
('9d395c46606a75effdde441050c428c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211794, ''),
('5dbe86c044b9d9e3970a1d10c54fd3a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211794, ''),
('6ae185b8981ac577534592d7d9baaaca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211794, ''),
('4ab6104da9746702c80faa8233a4f7e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211795, ''),
('34ea247a8b2d1728a68eea226f839029', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211795, ''),
('78fde3b427320f9dbfab15d2ea99c939', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211795, ''),
('0a48fa082bfcb817499dde23cb92f5aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211796, ''),
('ec18c08d8228f84c351fa897c2cbf0c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211796, ''),
('4e3183a569cc5159874aba986dcce07e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211796, ''),
('578453ca1c92b9ef3e0d0b8824069351', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211796, ''),
('3121209148c5a06973ca6c4334a22aea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211797, ''),
('3259a26badba73ac49f73c62fd8d0756', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211797, ''),
('5da7e9be004e3c291485b222ef7ba0af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211797, ''),
('91051831969842dada5a655ca363aa32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211798, ''),
('229154aa38380cc6073f086ce1af1c48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211798, ''),
('7371e6758c8939e887b5b253a1d1535f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211798, ''),
('f5db2b35f8ea11f9b277692912ed726f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211798, ''),
('ba40730a754afab6cc1d4d5a4f1cd9ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211799, ''),
('2118f071ab82f241bacdd049fd0642a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211799, ''),
('56a4fa0d7542946188ffea1a2f1cdc81', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211799, ''),
('dd52a141ddd9959e9ad6955e33b5b0f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211800, ''),
('99a4ee2c6a7bcb99375136b2b0ef6757', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211800, ''),
('34934a0b0e20032b358147297a7e1a68', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378211800, ''),
('b53d046931169b994d7a7dcb030ea0d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378215859, ''),
('12feb5a9f56d214f3b0658127f3a30b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378215798, ''),
('7226fba1fd6ad99485a0745d46a8dcd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378213128, ''),
('8f9002f0d164ce9ed769234d976f139b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378212626, ''),
('96dac1eb2a79c589f54434b4cbaed412', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378220371, ''),
('a5a79fb0cb7371c730a8fd147c5fdf7d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378213134, ''),
('074a4a358c0ad4685711cc00cee3f533', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378213155, ''),
('300cf3e596be9dd4270c9ff957beb26b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378216738, ''),
('b0907afaa799f128c2d54b19deeafe1b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378216997, ''),
('a353b43ecf2fa5c535cf784e321dfbfa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217160, ''),
('ad9e70684317fb00d6d6d9de143e4313', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217253, ''),
('c8987438d9219e7535d36a56dc720bd2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217353, ''),
('cce93dd3925eae90987a00df61c607cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217399, ''),
('f7d10c59891d1928e7f7d92c932370b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217608, ''),
('621fe339cf0d4f95562d10051b60d7b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217711, ''),
('9c7fb52376c656668b6af9953e73f5dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217833, ''),
('17b18a4f376fb835612c4ed6e3346a74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217857, ''),
('70db3f777a2a4afa49d417a46e02c299', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378217914, ''),
('1c71709535b866dbdfbab6b751c7fcc6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218022, ''),
('6cf42ae1c980f85f5f6d1099fb9b1763', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218353, ''),
('51924c5455f5dc99d7e4fcda57624728', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218387, ''),
('ac4a38981b68bccc2e635402b921bd6f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218437, ''),
('cf182817e408901025aab96afe2824e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218536, ''),
('bc88d439abde781c42f5efbe2bfc98cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218590, ''),
('7e58056efef05b09a4c8be1a71ea8aa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218625, ''),
('51c1470fe75aef27e7db2c55b5d9ab67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218665, ''),
('2327a126574c495693063d132c4cc4ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218696, ''),
('2fe9971a5838b865de719caa6aa6f1e2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218757, ''),
('3a53bd4d142603cc1bfb5319cc4af280', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378218766, ''),
('57b9949c432cdab8db3b9fbb7993a6ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378219517, ''),
('215fc297e298af9fd8a731f085d08f31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378219580, ''),
('1268b23fbc1d08929c06cc232d92379a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378219845, ''),
('281b454cac27bcc5830fb1413346e6b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378220324, ''),
('a22c158bd9079e8b0cf5dfb1d362b15c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222579, ''),
('f0b4b1a2ca5da81a2c1944faa344984c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378220365, ''),
('bcccbaeabf8f6909df1157b15f07eeda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378220798, ''),
('37c21dd08bd6e6103343a26807ca6ac4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378221911, ''),
('a03b81f48e0632d2e7518cb63a5a1474', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222126, ''),
('250ba1387e82f860c2d624f3c061c010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222178, ''),
('7cca5aa6f65d48deb5f5b2fb286d1936', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222249, ''),
('a0183a817978cd333b6819be359276ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222277, ''),
('8e94321bd3ad16729ec1b09384d337c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222322, ''),
('09d887b00337b48f41f5bbae13e8f244', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222386, ''),
('a46b9855d72d496b78301ad41a9c973d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378227375, ''),
('a84aa831ae11c23cf5f90c74b11c4962', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222557, ''),
('451a864d21ffc02b1b0cb4fc7f25c03b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222528, ''),
('de490a2d81e8cc64b4ff777420d33b8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222539, ''),
('970c66551d5510c63ec80b0afd459a7a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378222583, ''),
('30be03c7fc09d7be274b9402547b39d5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378227397, ''),
('eac4cace6a372a4cdaa0689093f430d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378230962, ''),
('72119d6aeb554c2fedad9b419e4d9f05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378227426, ''),
('5f0739085a434099445075022ccbbb12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378227555, ''),
('028fb54f1cc14ee5701c07b47c686061', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378232901, ''),
('44ae804230c418c5e3c280ef415b238c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378230870, ''),
('d91041d4ed42d15957ee191403c4d7c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378241040, ''),
('638a1c718dac3ba4431d1cf824147c9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378231898, ''),
('72e895fe712267cbe65f83a8d00d546a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233009, ''),
('974c763de2c16dc86b77cd60b71d30bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233353, ''),
('853820093f6ee0ad4d4ee9978e6687aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233410, ''),
('b3423477b686e9ea68dffca1f8a1316a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233417, ''),
('78aece587ddea880701be3d8ed5568fe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233677, ''),
('2fbd62dcca47fbdd8c97bef499349f79', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233749, ''),
('a71746773de877c08b1bdef3ae6f98d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378233808, ''),
('cc3aa46b141512a396f06ca410b47ba7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234072, ''),
('02693b45e90b7c95fc86781604ec4cb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234170, ''),
('b4e8b4d2925d8d7b54fd6a30188f6f4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234472, ''),
('30f8dbca0e2bb24e2a358d1b3c3cec36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234506, ''),
('d49b261ffaa95ac8d135130afcf8c0d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234716, ''),
('3b5f1b0269f514c08e7ef382209196c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234766, ''),
('26af329185231585cfcb545cd62fe021', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234829, ''),
('cad6de180d0f5781b11088d16afe5a58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234911, ''),
('02f796675ee94d4bc56b5c0047a18d0e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234928, ''),
('a3f678a5db289d56ac846fcd3ce84e96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378234994, ''),
('45d762eb8ebabda575774a4a62ab10d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378235028, ''),
('ae14b50b662f2f9b4c3d19cc66b7097c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378235968, ''),
('5cba2dc9d2d66ef4fbc0acbde29332cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378236047, ''),
('eb8d60a8a413c196bda730d6281dd19b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299830, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('7e10ccb050a9980c31a9d14fd14d4b15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299830, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('ffbfb48d4ef88e10af32064ffeefadf1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299831, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('7f80c071a5079147d52bc4b610354cbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299831, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('b9e42097d3ad702a095f405fade579e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299832, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('b4599c21f8fede4f1b2ef0ff964d8707', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378299832, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('c6ecfc0951f96e819ff946431db2731e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1378324448, ''),
('457bf8872488d6258c75ccc3838af301', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378323587, ''),
('e39d7509b3bb0f5ddd6684ba99325acb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378304197, ''),
('1c2a75b333355eaea27248a80b234712', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378307045, ''),
('a6d8d86c9dbc4295c86c1408e7af06e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378307762, ''),
('5f6e67e05eb92306aadf1675270bbe5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378313911, ''),
('79a16527d3da444eeebbea505d1f2d1d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378314273, ''),
('2c09634e332d76a2fdb17f1ae2d86ddc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331908, ''),
('f6f577d2e06a918228f3fd745a8d0dbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331651, ''),
('f3c9199b8d83d00db53a90ef83d3fe32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378324549, '');
INSERT INTO `default_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f6e18f5490e3e4535ce1ade6ee831ad1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378324552, ''),
('fee6a57df07ce54fac885831bcaa48c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378324561, ''),
('2c6f5d3070e064d53c110ef10920b69d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378324617, ''),
('a0a9e873f93e7940b3b183ec30471b2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378326755, ''),
('2d2adf74660d296ce495e5bc46f9e90e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378326877, ''),
('02fd51e72654aa437f6653bc85a75d3b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329225, ''),
('c733a9c2464210fac58caccb49797d8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329297, ''),
('f1ba9270f65fe4d4f462c734113c9944', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331642, ''),
('27572cf6c485156252679496cfc824af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331668, ''),
('38d1bbae5bbe40316e304e0cc9371f47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332720, 'a:6:{s:8:"username";s:6:"pajaro";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('b2955ba12316d77eb723dac316413db5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331725, ''),
('8f9dc4bb6d4acb2bb619302aa063d8e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331734, ''),
('09c88ff352512428715f2c244f55e4d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331964, ''),
('69203adc079adb863a7253681c84bd54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332061, ''),
('59fa14c2c7a59597cb42b88c3e68a1bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332257, ''),
('32b89c91d424a67e315327277860a976', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332283, ''),
('cccb7e6ce137b093a6b1677f11e6e40c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332309, ''),
('2fe2b68dc50685d908a2c8cf4f3921ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332725, ''),
('1b70f7d9bedcb4fa4836f7ac6cd49b93', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378383689, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('d3eae4d9a1cebdf94ae94ee5402a56af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378383689, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('3e32371c6f93daf577079ff26a5c6358', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378383689, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('fe734acf055c0d3a028aad7f0053667d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384410, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('af08e2a5b1a869088d9d72685046d156', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389322, ''),
('5d266956c99044b61babfab8c3feeef2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386423, ''),
('eb578e9cdde1a5725cb35d7b040ad2fb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384430, ''),
('796b99c3eb8cfd5cdd1544a0b360c984', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384445, ''),
('66dec2ec345a295031152cc3d1dde45c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384476, ''),
('71abcc6ab261c8fc7ee1e05e56aa1bc0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384487, ''),
('06f99916f7757906c0bbad88cb7628cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384579, ''),
('6e58d2f510b4fb1f933e448784cd3521', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384620, ''),
('d9db8c0aee1192245b63e438c52d6317', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384639, ''),
('e54de895280a99e8657088ed809b6346', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384817, ''),
('a22b7784170c92a946708dd7361bea40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384893, ''),
('d0f912b450de111e6e322488a1319c30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384941, ''),
('15a1b759f708dcfd9826189ae58bf2dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378384976, ''),
('ae7b924b99953f6c0da6395c76d6dfb7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385011, ''),
('deac480376c40861fecdb4280e51ad2f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385096, ''),
('79462e9d8d7bcd8b6122a57c876e58fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385147, ''),
('eb4e4b8621df4916dfc7f963e8e121a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385158, ''),
('23ab9178b82176ba5e66e754d47917bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385203, ''),
('ef6859f9d2ec21736d24e6a6dc568f3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385262, ''),
('a7c61e29c7c404a9958d293486acd4b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385329, ''),
('9551753c85421d353ace032825963750', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385376, ''),
('c42ac9f60383adb06dcf8e6828c6cccb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378385443, ''),
('6096fc2caa3884b0aac4032133baf851', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386497, ''),
('92af390f5a484873d32b9b242afdffe4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386606, ''),
('54a90ec94a2ed0325f0a70f725f526ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378404073, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('29e86584f2accec473bcb53852dbdae7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389268, ''),
('b5374dc6930441fbb6567bba8d6eb058', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389330, ''),
('2bcb6726defe1ef72dc8c86185f0ec71', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389350, ''),
('879e05dfc91d97b807f313c6b91ed821', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389444, ''),
('e22bf0192fead1b2467cbbb4834a331a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378389814, ''),
('06b01806ecd87aa0ef78506da51152ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378417193, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('edc191b9ac8a495014cf6690912ba4ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378468124, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('afe57a9ea02c3cd2c280a0fe8feb262b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378468108, ''),
('8f66d14cea29814aa3278243f8d33bea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378468439, ''),
('4f5adc675fca4eb350890e22d7c2ade0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378470058, ''),
('7e1402e0744770122066dcd3df708cff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378470465, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('81d563c4e276250451a76efcbece7447', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378761540, 'a:7:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";s:17:"flash:old:success";s:37:"El módulo "olark" ha sido eliminado.";}'),
('bbefce9b0a766f36448b039476c890a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378761396, ''),
('c9c2f02e11103cc4b9a26546ec2d85e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378761541, ''),
('f0849462e4fa79d4714a434d9d55d4a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378761700, ''),
('28a550feaad852f642cfbb7a13fb836a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378761821, ''),
('320ba30bfceb940e85ff1d52fe489f06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378764050, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('f5ef64c847b690541bb2f913a1b8b65e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378849300, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('41c4ed21428b4c6a042ce8fc844bbd62', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378849301, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('2b5549e327b4136ff27149f4b5ee0cef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378849301, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('5f6f5d382b195f0df046a1afeff443f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378850273, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('fb727859a17353a307c82fbe9fb11db0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378904319, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('d3e00121c8750b6e1520f36636c0c1ea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378904319, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('58d514fa2949c473627c921576f25623', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378931363, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('04c7322be2096b8870b44e53b6e3bf05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378943260, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('7ad192ae58576641f0e4de60931ad41b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379019106, ''),
('85725a06474c4da482b0fd5893373d63', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378938840, 'a:7:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";s:15:"flash:old:error";s:54:"No tienes el permiso suficiente para ver esta página.";}'),
('72d480cbbbd051d0b2fc452c4e6cc2c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379025161, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('2976c836f90e7884bad255972f07e8ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379076864, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('2fd0d221e57d3dc18ff69aa04b39e6a3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379106855, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('caa5701ab11cc04defa0dd49db4dac2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379111504, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('d15fb4acc460e4dda8aef47eab4e4e02', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379123131, 'a:6:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('275653888437bd8a443d93f035420994', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379157066, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('17b29d806589ecf802d7bad135b97a40', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379180738, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('af3dd663b2e01b0dfe49a9309e163d05', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379192750, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('085fd40876f64ef1b6e9b00271005ef1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379180739, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('d917d81451e93bd959c519df3ed6a763', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379192843, 'a:6:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";s:17:"flash:old:success";s:29:"El módulo ha sido instalado.";}'),
('c21ef94a4c325219045f592b224657dd', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379180740, 'a:5:{s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('415a0fd739c28a3774ddc69827eb4e28', '186.31.6.193', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379200973, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('9c62f5e13fb4733e154df074039766c6', '186.82.147.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379288477, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('da68e64d12394564964c5125acc0d1ea', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379292481, ''),
('7d9cd94e74fb96fd74ceb608fc65605d', '186.82.147.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379291673, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('0bcac5e9aa85b6618baccc2ed3ffc7e4', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379292629, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('8c460013b8c135a7e2cc32a872ae699d', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379292482, ''),
('db12653ad58c3d4a85edeed52667bea6', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379292482, ''),
('11cffaa5c4329511e31e1c1626c4c0ee', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379446078, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('92b8dc758c033600a140f24376dce357', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379292486, ''),
('ebfaf5c16744bf854c48025d07e3f83a', '186.28.193.76', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379293461, ''),
('1528f19fbc037f279db6b90b45871980', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379296429, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('6ce1266a7d8fccf8400c9ef3625f3c49', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379294453, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('df8c34023a9534e17201df549c02ad81', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379340748, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('43538cd8b15449356b640f6dd467abb1', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379341138, ''),
('d2b950d3202afc5b06cca4e8ea6ebb64', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1379634617, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('a0a08f904bc549006e071b134c100f81', '50.17.15.163', '0', 1379342104, ''),
('3d370a199442638ca4d2c05eed19b592', '69.171.234.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342106, ''),
('606dc2bcc0224eb8591762298707a88d', '69.171.234.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342108, ''),
('90405b725719d32f75f7e674aa080bbc', '69.171.234.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342109, ''),
('0a79d5eae4ebfd486633cefb1def90fc', '69.171.234.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342109, ''),
('5f2bb925a98480f3d621cf90f3643bf6', '69.171.234.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342110, ''),
('7621f83df85589fdae21194d00579c00', '69.171.234.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342110, ''),
('bdb8e6f1106d1780803b082ba5f020e3', '69.171.235.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342111, ''),
('33f41ff3b29d7a282f34e84a0a9a056a', '173.252.77.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342113, ''),
('760a85593adb08c783bd9ba1f4379db4', '69.171.235.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342113, ''),
('7053078db6bfb691ee19e214be800b87', '173.252.77.1', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379342114, ''),
('8dde63b6e0a35720a133fb035c1db7cf', '69.171.241.245', '0', 1379342114, ''),
('bdef29cb840403443122f0772371bba2', '69.171.241.247', '0', 1379342115, ''),
('9d2a3563152775c8b3de079900116823', '67.202.28.211', 'ShareThisFetcher/0.1.2', 1379342168, ''),
('b2c15f895dc0b0046133ac258ccfd8d3', '67.202.28.211', 'Java/1.6.0_31', 1379342168, ''),
('8c98eae020478ad7ee2873e3d97c0d8a', '67.202.28.211', 'Java/1.6.0_31', 1379342180, ''),
('ba862d671c4540bf67443f5a92c61358', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379572443, 'a:1:{s:14:"admin_redirect";s:5:"admin";}'),
('f01603234fd6aa178bf980beeafa4fee', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379445740, ''),
('c6861000f6b124d7ade707148e0a2803', '23.20.30.207', '0', 1379445378, ''),
('109e1466748575b600941f909b6abdb3', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445382, ''),
('930f43ba96e34ab6acf514a8f80d9376', '173.252.100.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445382, ''),
('6e084579c433198843191324dda70022', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445384, ''),
('11f43d586653a02bfbb7a36b1175f551', '173.252.100.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445384, ''),
('b6baa2b73e195ee6508e40f89b6358e5', '173.252.100.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445384, ''),
('99497d14dd7785bfcacb1ab69a45871f', '173.252.103.1', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445385, ''),
('bcc13ac8494899a445493198edd3f62a', '69.171.248.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445385, ''),
('802200a1efeba3638ae0de3d86daa503', '173.252.103.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445386, ''),
('7a699c5414b20bb1a5d64e3c3332b2da', '69.171.248.0', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445386, ''),
('50a02e43bc48f8ca1cecbe428d5adaf7', '69.171.241.248', '0', 1379445387, ''),
('16ff4247fe64f7da6bf3c31c42241c98', '69.171.241.245', '0', 1379445387, ''),
('b7316d2043ed393c4e3314fb386325bc', '23.20.109.158', '0', 1379445408, ''),
('1f2a5d358b555526a2fbb18d5a3cf544', '69.171.234.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445427, ''),
('eeefa875e245c3f7bee4883f2a9d98c8', '69.171.245.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445429, ''),
('d27cc0a013846ff78b060e92c13d3c49', '69.171.234.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445429, ''),
('a748b27cac948e235f773f45f1076479', '69.171.234.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445431, ''),
('ce833a6648e4200b62ff1e0698c593f2', '69.171.234.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445432, ''),
('ae98dab7c8809499dbbaee35f7e29e51', '69.171.234.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445432, ''),
('bafc823ca2c96f98367e8a289be675a5', '69.171.233.0', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445432, ''),
('a629c8a232aa071dcdd3b9e600180b7a', '69.171.235.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445433, ''),
('7cc6424e327c7844620aaabe076fc56d', '69.171.233.4', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445433, ''),
('3c64824869f360c680aecadd96a15191', '69.171.235.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379445434, ''),
('718b598e215608606f362dc2a1a262ce', '69.171.241.246', '0', 1379445435, ''),
('eadd8d54410da4061ec329b513b7e64a', '69.171.241.248', '0', 1379445436, ''),
('d9c464b1fda8028461d1649391ee75dc', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379454476, ''),
('49b8f704b15b19ba774f5336e53f4e77', '190.25.134.199', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379460709, 'a:7:{s:8:"username";s:11:"Eduardrussy";s:5:"email";s:26:"eduard.russy@imaginamos.co";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";s:17:"flash:old:success";s:35:"Tu configuración ha sido guardada.";}'),
('52fcbbb7d97c3528473a6466c197b960', '50.16.49.116', '0', 1379450636, ''),
('84fb8c72b63c631f2eedd611bdadd0f3', '190.25.134.199', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379460855, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('5c0741b54d1688922119af1cb20e682b', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379560656, ''),
('6b969464478c98a669a2631c6eb7b7ea', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379567314, ''),
('a773371db55a7c1d8e4974bd0db8e0f2', '190.25.134.199', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379600800, ''),
('aea000bdfcbb64bc60aa8e22ddd41a95', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379609418, ''),
('d572236739c61d9590b4aa78b59f7b7d', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379613101, ''),
('bc0b5b1246facbae6cbed1b251162d55', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621618, ''),
('191ab87b1f503a4dd3374b1eca8e8767', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621618, ''),
('7b572f1885a6011a54c0fb909e023dac', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621618, ''),
('ac06a302596620fe216105e02be15ec4', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621618, ''),
('3842fd20b08b7de2ad932a796290c0e1', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621946, ''),
('eb0ce55480227b0f9e53c211af47bbf0', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379621620, ''),
('3af86ef42f395adbb042fd733e99a983', '23.20.30.207', '0', 1379630589, ''),
('39c017fda90ae4c33374bda1c844ed3b', '23.22.166.58', 'ShareThisFetcher/0.1.2', 1379630591, ''),
('7a3e3b4ee43adf799555d42934741693', '23.22.166.58', 'Java/1.6.0_31', 1379630592, ''),
('233e9e2c96152a239e0ecf62ff70b6ff', '173.252.100.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630593, ''),
('3e2ebe557a1cd0bef07cd4899d2ebe99', '23.22.166.58', 'Java/1.6.0_31', 1379630593, ''),
('0045a1f39909c64df2572b1fb0fdbcf7', '173.252.100.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630593, ''),
('583ba498eb211ba8841f59f2c99f3c32', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630594, ''),
('c222325b850e133dffc2b0d5b2d86daf', '173.252.100.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630594, ''),
('7a9e89867c97aa2cdb865b0b32cd44bc', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630595, ''),
('bbc832cf2a2cc4497dd0bbaf7d91269d', '173.252.101.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630597, ''),
('4a2f582054edce3b2b6891a6d7bae7d0', '173.252.103.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630597, ''),
('ac109481851b4535f3fb86037cbb6a5f', '69.171.248.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379630597, ''),
('ca5f76c3fac69a5b7e6cae12050d1f7f', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379634467, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('a879c10fbf6c6beb0d69ca437104f525', '190.25.134.199', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379950203, ''),
('1773719f2a521ae1da463989dd02dd68', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1379978727, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('39b8379c9871d7f0e16a70f777c279a0', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379953251, ''),
('dd70db8e4bdc1d358973c23757cd04a5', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379953573, ''),
('1875f6990d0583fa148b745d734755ad', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379954770, 'a:1:{s:14:"admin_redirect";s:5:"admin";}'),
('027a745c5f1b89b0b545d06168696337', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379954601, ''),
('379a1cc0d704a69b4b59b65ed3c19d00', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379954770, ''),
('cd17c049f956fd4a898d8c86fbffef14', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379954771, ''),
('bfbf6e8af17b0677cfbd296a439f291d', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379954771, ''),
('677d940296641b2acf33edb3852a2d69', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379955464, ''),
('71046a8a3b00669a5d5edb62047b46ef', '23.20.109.158', '0', 1379954820, ''),
('8818a3b014b0f295418b30e696f7bc1d', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954824, ''),
('8334aefe31aa717a69046d7b11657eea', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954825, ''),
('975260e986675856c4ab8c8dddfe0968', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954826, ''),
('3d70fd8f2357d47113c8f5e81a474a1b', '173.252.100.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954826, ''),
('9e8ef90ab4be3c397a62c08547ec32a5', '173.252.100.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954826, ''),
('1db31065ce212b01ddff735163bed0b5', '69.171.248.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954826, ''),
('0b7337baea6afe5dfb8b485b44982068', '173.252.100.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954827, ''),
('8a9ecb587936f706b9103241b784563d', '69.171.248.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379954827, ''),
('532265204372228705b8d020efd84671', '67.202.28.211', 'ShareThisFetcher/0.1.2', 1379954833, ''),
('afe4d4060d4d958a7d3e49847907a714', '67.202.28.211', 'Java/1.6.0_31', 1379954834, ''),
('cb70cd52716bc41877bf9daacaf84620', '67.202.28.211', 'Java/1.6.0_31', 1379954871, ''),
('e37573c84cf28496d78499b463037165', '190.60.239.146', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/534.57.5 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.4', 1379955918, ''),
('5563855e64189d1a69b0a2f690d4f2ce', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379955464, ''),
('99387ccd7482cb737d5a6b7d3c5f137d', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379957917, ''),
('f47234cec85dbcaa5e07c23c107f4935', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379955465, ''),
('35381531bc1034387103f56b48ee0cb7', '23.20.109.158', '0', 1379956262, ''),
('a9424d3d9f8c0785d3c3c6b58cd57e24', '173.252.100.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956263, ''),
('5f91795d4b8be454c4917baf5d2c0312', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956264, ''),
('6c01a936ecdac95ac64868926c87dc66', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956264, ''),
('12def75cb34ee2a8cdd105c06c4949e0', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956266, ''),
('a411bbe77231848661434ccf44fd21d4', '173.252.100.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956266, ''),
('231622e1c4f71f7ecdc49e3dfdb0c422', '69.171.248.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956267, ''),
('29695ff36c66ce8e30ede54d9a1c1635', '173.252.101.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956267, ''),
('dfc50d688f6136e052c6c0560ebddd1a', '69.171.248.4', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956268, ''),
('1b2da57b19826c956387c399e4ae4778', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956313, ''),
('b5eb8360f85716b37c82e801321968cd', '173.252.112.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956324, ''),
('b301570d534b4e4b1e156998b385ada3', '69.171.224.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956331, ''),
('3ff36503b68573c3fcbe5a748342f48a', '69.171.247.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956360, ''),
('acb1d4a3359b267c46b1c6f5143ebc5d', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956399, ''),
('6acc9ce6724cecc24dd47d2513e29581', '173.252.110.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956553, ''),
('763b08c646f717be070511b9ab5528bf', '69.171.237.9', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956613, ''),
('bb0d8185502e08870e3ebba25388ebcc', '173.252.112.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379956686, ''),
('6352bcc00918a0923ecf798dc2b130cd', '173.252.101.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379957088, ''),
('80d998b7faa2295790ad252bc13aea9a', '173.252.73.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379957338, ''),
('97573e5ca0dea37f8622eb6dfbb3e2e3', '173.252.110.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379957614, ''),
('2a542aa8aa104ec7e655f7fc361c2fcf', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379957917, ''),
('fad6d7bcf7c2853131dc7c20f875bd73', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379964921, ''),
('5978414fe014107242941c34421b6d1b', '190.60.239.146', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1379958762, ''),
('a4a742510550ee73bb7e37afc9e4746c', '190.60.239.146', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Win64; x64; Trident/6.0)', 1379957929, ''),
('af45c1cdd52fbfbd8326658a14cb20db', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1379958754, ''),
('8658b559786b4bca91c050e2df2e27d6', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379979229, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('70be77cbbcadb06ed899bd32e9bca4d9', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1379958756, ''),
('5a65f1fd9c0697a9d514d304b58bbb79', '66.220.152.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379958762, ''),
('3b966c01d90563d19595586f2b1a33ba', '173.252.112.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379958787, ''),
('c3eb5781d0e88be3dbd50ce2529be21b', '69.171.242.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379959175, ''),
('a310060ee9627c64d1f7a63ffebfa95b', '186.113.219.195', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1379959045, ''),
('31ac1a08e4f913f217a89ef02786241e', '201.245.56.7', 'Mozilla/5.0 (Linux; Android 4.1.2; LT30p Build/9.1.A.1.141) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.72 M', 1379960871, ''),
('73f9a8e7ef7a4f3f01bb79711d64d6a4', '69.171.247.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379961072, ''),
('7f2891da2151070e3776ebcee4175797', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379965507, ''),
('c566140bf43a1497cba004f212d39265', '173.252.110.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379966379, ''),
('c9d10210be94b3dc98a5abf402e8abe3', '173.252.101.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379971082, ''),
('2734fdb23607b1638c4363880a6e0392', '173.252.73.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1379971099, ''),
('58ed965464c0c215e600b86ccf94a116', '190.27.9.188', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379978863, ''),
('bbd9404c4a0bdaa29f5dfe70cdc6c75c', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379978946, ''),
('2343b44fcedd22b2576fe957d9ee8019', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302340, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('0abcc3888f4b372fb3a8627639f29e61', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1379979910, ''),
('deb6751e021cb75f1c8ef278aeb473df', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380154164, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('177312852badc07688600b9c2fdc60a6', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380325859, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('e6111a6cfb209fe5be972b1b4c0d2d1e', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380325661, ''),
('3e7df565077034aacd4d6eb5f2e9a35b', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380325661, ''),
('2f9298562a271771c5b391e7f4b55e7d', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380226210, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('9478df02b948b3c04a68097c30002854', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380241697, 'a:1:{s:14:"admin_redirect";s:5:"admin";}'),
('90eab5a33858748c0e2ff8ed5190aa83', '181.135.254.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380286608, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('017ef6e80a2ee1b04740e0021eb88c52', '181.135.254.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380277783, ''),
('7577a956d45fe17cc1d99fb2ba0c33bf', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380328374, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('df953480934467f6030831ed076c8532', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380294841, ''),
('3c584c9e1c5b29a8f9659f66b06548c1', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1380295068, ''),
('7260e5b28924d4493fec8f1eb7665f06', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1380293640, ''),
('0873df6fff644737798b3377d4c0cd88', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1380296058, ''),
('733c0a11ca440b1f39dc2d6d9794c42c', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380301137, ''),
('dc93d18575358ac42b23680609ccee2e', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380302967, ''),
('de30512ab811034948de4fbb288e22ff', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380301441, ''),
('bec0ea75215f4d634f7140af2a5c5d3f', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380301742, ''),
('9d10d31b0d11927c7ec7d17a55cc88a7', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302046, ''),
('03e993cb02b8e6112678a96253053997', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380314029, ''),
('637e77742050f9cefda19787beb17f04', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302340, ''),
('aa7db7757a293bb28385edebadc5d4b4', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302340, ''),
('53eb4774c90519bfa7b44eed64d582dc', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302340, ''),
('4deea92cc81cb1e68a25f4b1995d3f69', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380302340, ''),
('6ccc3563ccbfbbdef5ae38f05ae8148a', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380551404, '');
INSERT INTO `default_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3f4193b1a62e89d943a04d9a7c62416c', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1380304070, ''),
('70d4b24cbaf184d3a26b940572efa720', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380307243, ''),
('18171f47b1d610ba847d337e1bf6f9b8', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380326017, ''),
('76c45a17bbb1220ae11df10b71cf2cdc', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380325662, ''),
('99adbc8abe1d4baedd6fc16aeb899cb4', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380552472, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('43c2fe9475234f9fd0b14a6059b1bc34', '186.82.147.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380386910, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('4491d94d8f51e1dd3d4dec0bb9a694f0', '181.136.102.143', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380347858, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('0b9b16d6ccdcd49924235d14e17e2553', '181.136.102.143', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380347858, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('7a01751b98c13272178d98763bc9d269', '181.136.102.143', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380349281, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('f42bb8c909e2c0e6900072e99de72e50', '181.135.244.141', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380383407, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('5a47e3e48f43dd7892f496f5684ab9a7', '181.135.244.141', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380391919, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('986f753bc90846dca1a7f40fdc48f976', '186.82.147.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380389198, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('85b13b23f4283dcf301a8935605cc76b', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380424579, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('86d4b3f011593badccd7c06c24f02d3c', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380424579, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('a1fffee232f414a61cbd7f1c185b79ef', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380424580, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('ec63b6deb96fe570a443689d13b081a6', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380424580, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('e80929f1ea77375aed2bf80637c208dd', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380425790, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('58819eb24c6a6e546e74b93586682521', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1380441440, 'a:5:{s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('991446570c918dbf7bafa3431407f8b1', '181.135.85.148', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380438086, ''),
('8bf79179e03a7bcea57caa8076fe9545', '186.82.189.141', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380482631, ''),
('a925b4ada6272102557178783406c9dd', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380580344, ''),
('c7c9ab11f6e457136903f6b6781ae613', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380574562, ''),
('ad572f867ca186d6c654b2a5f429ff1a', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380551371, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('1e2838073e4ca563486f971a3e9cd361', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553520, ''),
('e5c2b18b00e51ae1f220656454280f7d', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380550424, ''),
('c3580fadc6543390a3559d1f8b75ae34', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553521, ''),
('747045cd01e01a857f6193b5c19cd9d0', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553521, ''),
('75688a539303d2065526980539a86583', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380561682, ''),
('9662d9ae3a1a3c91fa3c1518d4b3fd63', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553521, ''),
('d95a8a76849e2fc706548f8a2edfe0ba', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553521, ''),
('06d0c74a924fb9aaa9260255cf0fd2ba', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380553521, ''),
('5c18d2a5f9bfe67d3b1a72b14a7b7b07', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380554038, ''),
('a7222425dfae374751764caf03ec6a5f', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380561682, ''),
('70c2d93e06bb706a510d4b26800dc7a8', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380561682, ''),
('8df4a836463135cae86485abca327810', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380752896, ''),
('9158adae0a7728397cd603acae8ce01d', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380649833, ''),
('5303010b917855ed1dd4d8bb6a30ac24', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380652012, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('074306b8e9bd4a66a6a04a06f7d6db44', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380647407, ''),
('ee3be07c2d6e8c58296fe8d646b705a9', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380654224, ''),
('ebadd392896221ca3de797eb41c2ea53', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380673699, ''),
('5f299ab17d2159ae388a04761ac56b92', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380680729, ''),
('1a3d9b412cdb9d0a44c40e86a2e8426b', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380687314, ''),
('8f5352b6f307660d8fc9a2f44bddd546', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380717677, ''),
('ec9ddba493232bf2ddb396e60072a363', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36', 1380922864, ''),
('bfea2b60edbdd14d6da76ee0c5f93dc6', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380752896, ''),
('67ed79c189f96d0b3f75e17a2ce458d4', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380751365, ''),
('a6f80bdc696a6c6f6477c8b842bc858c', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380752896, ''),
('115af144506964c5466322504716d2c6', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380752896, ''),
('15b0f90cd2fc942d0aab7cd38c6824d6', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381168011, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('fb03b24cff8c2d0e496c0fa40a871c58', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380752897, ''),
('263a9af8696e782b2ddf63abce96cf7f', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1380822990, ''),
('b41439399614170a58500508107521e5', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36', 1380824941, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('a91af2a00aad7374301f616572721207', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36', 1380828215, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('8f97e3be4864cd364485ebb62a6e582a', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36', 1380827381, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('1cd3eab3f2aabffb927ba63574e4d47a', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1380920114, ''),
('b7c3d6fb502ac9eb9202d2bfbd751503', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381167981, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('4a464b07e28351ba5ad057e6f4f94296', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381168285, ''),
('ce08494a3381acc3b98cf8428c78c2a7', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381177848, 'a:6:{s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('7afd603f00082907602bb7015714ab5c', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381173537, ''),
('b970a20415f8683e3f42a8d2e9a3dee3', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381333898, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}'),
('b4a34e12df209484d1c7d1f8896c3139', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381240232, ''),
('54a72a065fd9c97d837ed3ef30d7449f', '181.144.110.39', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381177924, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('d0d688283e34f14bbc5d5106224bfeca', '181.144.110.39', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381177924, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('3ceda101323e9b1adf5311d426b02fd8', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381179416, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('e5615732c7f87a1c00b4b66fb56c51f8', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381178025, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('62eccc18d3813bbe99b31c25afea21c6', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1381179088, ''),
('bb006201f1130a45b08f0a87b652c31b', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381255207, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('b10876b183c45e7bb187f01dd86cc6fc', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381241288, ''),
('03fb65e57487fc3e2988b8e4260b2b55', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1381336313, 'a:1:{s:14:"admin_redirect";s:5:"admin";}'),
('b033efe3935e21d4e957b133f70e9db5', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381246722, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('ca39baf76c25d4ed433e3c1bb2f50331', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0', 1381251677, ''),
('645ab59403dc16469588f055ded500e6', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381252948, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('a8d9670a1923d677c4b378785def389b', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381257185, 'a:5:{s:5:"email";s:15:"admin@admin.com";s:2:"id";s:2:"16";s:7:"user_id";s:2:"16";s:8:"group_id";s:1:"2";s:5:"group";s:4:"user";}'),
('f28c9b7aa42c5fa8dd737608e04d26d7', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381264252, ''),
('59792cd7783299e68b42f59d913c7dff', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381272776, ''),
('8b0f64254e69cf24958f3659fdba5367', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381323895, ''),
('a4f41c50c41af8d68e79069b02c63693', '186.145.161.117', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381332271, ''),
('d53cb47321e653b4b91710ea1c1956e4', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381335965, ''),
('f441c00f650bf40908d71ea05f2fe589', '190.24.228.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381340113, ''),
('7a00b452c9101167586c823b292b4432', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381352009, ''),
('3e84510f5922dd0afdc0f201a29e9cce', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1381353231, ''),
('21fa9fd039f787c6eeb3cb784b518a8a', '186.80.191.113', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1381439586, ''),
('0ca1f7c4f61d684effbd29ff39264010', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1381443225, 'a:6:{s:8:"username";s:10:"imaginamos";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"2";s:7:"user_id";s:1:"2";s:8:"group_id";s:1:"1";s:5:"group";s:5:"admin";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_clientes`
--

DROP TABLE IF EXISTS `default_clientes`;
CREATE TABLE IF NOT EXISTS `default_clientes` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `default_clientes`
--

INSERT INTO `default_clientes` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `images`) VALUES
(8, '2013-10-03 18:29:26', NULL, 16, 1, 'Bavaria', '8d6a2ff92f59063'),
(9, '2013-10-03 18:31:26', NULL, 16, 2, 'Autogermana', '4cda1f5ecc1c5c9'),
(10, '2013-10-03 18:33:35', NULL, 16, 3, 'Assist-Card', '0590697d1e5e255'),
(11, '2013-10-03 18:35:41', NULL, 16, 4, 'MetLife', 'a2d4ae4bb42f3c4'),
(12, '2013-10-03 18:38:02', NULL, 16, 5, 'AXA Assistance', '569281fe8aa6bac'),
(13, '2013-10-03 18:40:37', NULL, 16, 6, 'Seguros Bolivar', '543122047b95d84'),
(14, '2013-10-03 18:41:14', NULL, 16, 7, 'Colmédica', '5da52613f41f0e2'),
(15, '2013-10-03 18:46:34', NULL, 16, 8, 'Universidad Nacional', 'c3cd0aa20c63d2f'),
(16, '2013-10-03 18:47:46', NULL, 16, 9, 'Coomeva MP', '121e7806658a02a'),
(17, '2013-10-03 18:48:10', NULL, 16, 10, 'Colsanitas', 'e145421c3aaefc8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_comments`
--

DROP TABLE IF EXISTS `default_comments`;
CREATE TABLE IF NOT EXISTS `default_comments` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_comment_blacklists`
--

DROP TABLE IF EXISTS `default_comment_blacklists`;
CREATE TABLE IF NOT EXISTS `default_comment_blacklists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_compromisos`
--

DROP TABLE IF EXISTS `default_compromisos`;
CREATE TABLE IF NOT EXISTS `default_compromisos` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_inf` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_inf` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_compromisos`
--

INSERT INTO `default_compromisos` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `description`, `images`, `name_inf`, `description_inf`) VALUES
(1, '2013-09-14 02:08:05', '2013-10-07 20:41:14', 2, 1, 'Nuestros Compromisos', 'Aenean sed tellus vel enim suscipit fermentum. In ultrices viverra odio, ut aliquet sapien sodales ac. Donec nec ullamcorper purus. Donec sit amet auctor dui. Sed ac commodo nisl. Mauris volutpat ultrices augue vitae commodo. Suspendisse at congue ligula. Morbi laoreet in orci vitae faucibus.', '933179eb98c4268', 'Nuestro convenio contempla los siguientes compromisos con su empresa', '<ul class="list_serv">\n <li>Sed eleifend est ac euismod tincidunt. Donec posuere ligula non condimentum commodo. Donec venenatis sapien sed magna eleifend, quis luctus nibh aliquet.</li>\n <li>Aenean sed tellus vel enim suscipit fermentum. In ultrices viverra odio, ut aliquet sapien sodales ac. Donec nec ullamcorper purus. Donec sit amet auctor dui. Sed ac commodo nisl. Mauris volutpat ultrices augue vitae commodo. Suspendisse at congue ligula.</li>\n <li>In ultrices viverra odio, ut aliquet sapien sodales ac. Donec nec ullamcorper purus. Donec sit amet auctor dui. Sed ac commodo nisl. Mauris volutpat ultrices augue vitae commodo.</li>\n <li>Nunc blandit sagittis metus, vel mattis tortor posuere in. Quisque condimentum tincidunt posuere. In egestas tortor non facilisis tincidunt. Donec pharetra lectus quis lectus ultricies convallis.</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_contact`
--

DROP TABLE IF EXISTS `default_contact`;
CREATE TABLE IF NOT EXISTS `default_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `default_contact`
--

INSERT INTO `default_contact` (`id`, `order`, `nombre`, `empresa`, `email`, `celular`, `telefono`, `pais`, `ciudad`, `comentario`) VALUES
(1, NULL, 'hajjjj', 'kkckcjx', 'cms@imaginamos.com.co', 'kjdkkxjkzx', '3204597844', 'kajskajsajks', 'nnnnnm', 'nnnnzx'),
(2, NULL, '', '', '', '', '', '', '', ''),
(3, NULL, '', '', '', '', '', '', '', ''),
(4, NULL, '', '', '', '', '', '', '', ''),
(5, NULL, '', '', '', '', '', '', '', ''),
(6, NULL, '', '', '', '', '', '', '', ''),
(7, NULL, '', '', '', '', '', '', '', ''),
(8, NULL, '', '', '', '', '', '', '', ''),
(9, NULL, 'Andres Diaz', 'ADOM', 'andresdiaz0390@gmail.com', '3138862377', '7502831', 'Colombia', 'Bogota', 'Prueba 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_contact_data`
--

DROP TABLE IF EXISTS `default_contact_data`;
CREATE TABLE IF NOT EXISTS `default_contact_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barrio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_cel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_contact_data`
--

INSERT INTO `default_contact_data` (`id`, `order`, `direccion`, `barrio`, `ciudad`, `telefono`, `tel_cel`, `correo`, `map_url`) VALUES
(1, NULL, 'Calle 91 A No. 50-41', 'Virrey', 'Bogota', '(571) 610 3520', '(313) 886 2414', 'mercadeo@adomsaluddomiciliaria.com', 'https://www.google.com/maps/ms?msa=0&amp;msid=210883790538219805436.0004c764be959f251354c&amp;hl=es-419&amp;ie=UTF8&amp;t=m&amp;ll=4.598006,-74.076025&amp;spn=0.003743,0.005901&amp;z=17&amp;output=embed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_contact_log`
--

DROP TABLE IF EXISTS `default_contact_log`;
CREATE TABLE IF NOT EXISTS `default_contact_log` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_convenios`
--

DROP TABLE IF EXISTS `default_convenios`;
CREATE TABLE IF NOT EXISTS `default_convenios` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_convenios`
--

INSERT INTO `default_convenios` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `description`, `images`) VALUES
(1, '2013-09-14 15:43:07', '2013-10-08 14:43:34', 2, 1, 'ALIANZA LOCATEL ', '<p class="p1">Pensando en la salud y el bienestar de tu familia, Locatel y ADOM se han unido para llevar servicios de salud a la comodidad de tu hogar, con tarifas especiales para los afiliados a Soy Locatel.</p>\n\n<ul>\n <li class="p2">Consulta M&eacute;dica Domiciliaria 24 horas&nbsp; (20 % de descuento)</li>\n <li class="p2">Terapia f&iacute;sica, respiratoria, ocupacional y de lenguaje (10% de descuento)</li>\n <li class="p2">Aplicaci&oacute;n de medicamentos endovenosos e intramusculares a domicilio (5% de descuento)</li>\n <li class="p2">Curaciones a domicilio (5% de descuento)</li>\n <li class="p2">Enfermer&iacute;a a domicilio (5% de descuento)</li>\n <li class="p2">Hospitalizaci&oacute;n en Casa (5% de descuento</li>\n</ul>\n\n<div class="p2">​​<span>Con esta nueva alianza queremos evitarte desplazamientos, incomodidades y mayores costos, mientras que cuidas tu salud y la de toda tu familia.</span></div>\n', '8bcfea2e4255054');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_data_fields`
--

DROP TABLE IF EXISTS `default_data_fields`;
CREATE TABLE IF NOT EXISTS `default_data_fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `field_slug` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `field_namespace` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `field_data` blob,
  `view_options` blob,
  `is_locked` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=676 ;

--
-- Volcado de datos para la tabla `default_data_fields`
--

INSERT INTO `default_data_fields` (`id`, `field_name`, `field_slug`, `field_namespace`, `field_type`, `field_data`, `view_options`, `is_locked`) VALUES
(1, 'lang:blog:intro_label', 'intro', 'blogs', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a363a2273696d706c65223b733a31303a22616c6c6f775f74616773223b733a313a2279223b7d, NULL, 'no'),
(2, 'lang:pages:body_label', 'body', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b733a313a2279223b7d, NULL, 'no'),
(3, 'lang:user:first_name_label', 'first_name', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a35303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(4, 'lang:user:last_name_label', 'last_name', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a35303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(5, 'lang:profile_company', 'company', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(6, 'lang:profile_bio', 'bio', 'users', 'textarea', 0x613a333a7b733a31323a2264656661756c745f74657874223b4e3b733a31303a22616c6c6f775f74616773223b4e3b733a31323a22636f6e74656e745f74797065223b4e3b7d, NULL, 'no'),
(7, 'lang:user:lang', 'lang', 'users', 'pyro_lang', 0x613a313a7b733a31323a2266696c7465725f7468656d65223b733a333a22796573223b7d, NULL, 'no'),
(8, 'lang:profile_dob', 'dob', 'users', 'datetime', 0x613a353a7b733a383a227573655f74696d65223b733a323a226e6f223b733a31303a2273746172745f64617465223b733a353a222d31303059223b733a383a22656e645f64617465223b4e3b733a373a2273746f72616765223b733a343a22756e6978223b733a31303a22696e7075745f74797065223b733a383a2264726f70646f776e223b7d, NULL, 'no'),
(9, 'lang:profile_gender', 'gender', 'users', 'choice', 0x613a353a7b733a31313a2263686f6963655f64617461223b733a33343a22203a204e6f742054656c6c696e670a6d203a204d616c650a66203a2046656d616c65223b733a31313a2263686f6963655f74797065223b733a383a2264726f70646f776e223b733a31333a2264656661756c745f76616c7565223b4e3b733a31313a226d696e5f63686f69636573223b4e3b733a31313a226d61785f63686f69636573223b4e3b7d, NULL, 'no'),
(10, 'lang:profile_phone', 'phone', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a32303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(11, 'lang:profile_mobile', 'mobile', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a32303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(12, 'lang:profile_address_line1', 'address_line1', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(13, 'lang:profile_address_line2', 'address_line2', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(14, 'lang:profile_address_line3', 'address_line3', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(15, 'lang:profile_address_postcode', 'postcode', 'users', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a32303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(16, 'lang:profile_website', 'website', 'users', 'url', NULL, NULL, 'no'),
(184, 'Image', 'image', 'blogs', 'image', 0x613a353a7b733a363a22666f6c646572223b733a313a2231223b733a31323a22726573697a655f7769647468223b733a303a22223b733a31333a22726573697a655f686569676874223b733a303a22223b733a31303a226b6565705f726174696f223b733a333a22796573223b733a31333a22616c6c6f7765645f7479706573223b733a303a22223b7d, NULL, 'no'),
(349, 'lang:banner:name', 'name', 'banner', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(350, 'lang:banner:description', 'description', 'banner', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a363a2273696d706c65223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(351, 'lang:banner:image', 'images', 'banner', 'file', 0x613a323a7b733a363a22666f6c646572223b733a313a2233223b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(352, 'lang:banner:url', 'url', 'banner', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(353, 'lang:banner:state', 'state', 'banner', 'choice', 0x613a353a7b733a31313a2263686f6963655f64617461223b733a34333a2231203a2041637469766f0a202020202020202020202020202020202020202030203a20496e61637469766f223b733a31313a2263686f6963655f74797065223b733a383a2264726f70646f776e223b733a31333a2264656661756c745f76616c7565223b4e3b733a31313a226d696e5f63686f69636573223b4e3b733a31313a226d61785f63686f69636573223b4e3b7d, NULL, 'no'),
(366, 'lang:valores:description', 'description_valores', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b4e3b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(397, 'lang:convenios:name', 'name', 'convenios', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(398, 'lang:convenios:description', 'description', 'convenios', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a363a2273696d706c65223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(399, 'lang:convenios:image', 'images', 'convenios', 'file', 0x613a323a7b733a363a22666f6c646572223b733a323a223538223b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(400, 'lang:clientes:name', 'name', 'clientes', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(401, 'lang:clientes:image', 'images', 'clientes', 'file', 0x613a323a7b733a363a22666f6c646572223b693a35393b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(409, 'pregunta', 'pregunta', 'streams', 'textarea', 0x613a333a7b733a31323a2264656661756c745f74657874223b733a303a22223b733a31303a22616c6c6f775f74616773223b733a313a226e223b733a31323a22636f6e74656e745f74797065223b733a343a2274657874223b7d, NULL, 'no'),
(410, 'respuesta', 'respuesta', 'streams', 'textarea', 0x613a333a7b733a31323a2264656661756c745f74657874223b733a303a22223b733a31303a22616c6c6f775f74616773223b733a313a226e223b733a31323a22636f6e74656e745f74797065223b733a343a2274657874223b7d, NULL, 'no'),
(440, 'nombre', 'nombre_red_social', 'redes', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(441, 'link', 'link_red', 'redes', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b4e3b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(442, 'Descripción', 'description_quienes', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(443, 'Imagen', 'image_quienes', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a37323b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(444, 'lang:donde:description', 'description', 'donde', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(445, 'lang:donde:image', 'images', 'donde', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223530223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(471, 'lang:english_contact:name', 'name', 'english_contact', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(472, 'lang:english_contact:tel', 'tel', 'english_contact', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(473, 'lang:english_contact:company', 'company', 'english_contact', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(474, 'lang:english_contact:email', 'email', 'english_contact', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(475, 'lang:english_contact:comment', 'comment', 'english_contact', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(476, 'Imagen', 'images_english', 'english', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223639223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(477, 'Descripción', 'description_english', 'english', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(478, 'Imagen lateral 1', 'images_lateral1_english', 'english', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223639223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(479, 'Imagen lateras 2', 'images_lateral2_english', 'english', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223639223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(480, 'Texto formulario', 'textocontact_english', 'english', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(488, 'lang:faq:name', 'name', 'faq', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a39353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(489, 'lang:faq:description', 'description', 'faq', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(490, 'lang:trabaja:description', 'description', 'trabaja', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(491, 'lang:trabaja:image', 'images', 'trabaja', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223634223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(492, 'lang:trabaja:description_inf', 'description_inf', 'trabaja', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a363a2273696d706c65223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(493, 'lang:trabaja:image_inf1', 'images_inf1', 'trabaja', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223634223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(494, 'lang:trabaja:image_inf2', 'images_inf2', 'trabaja', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223634223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(495, 'lang:trabaja:image_inf3', 'images_inf3', 'trabaja', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223634223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(561, 'lang:services_us:name', 'name', 'services_us', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(562, 'lang:services_us:description', 'description', 'services_us', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(563, 'lang:services_us:image', 'images', 'services_us', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a39313b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(564, 'lang:services_us:name_inf', 'name_inf', 'services_us', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(565, 'lang:services_us:description_inf', 'description_inf', 'services_us', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(643, 'lang:compromisos:name', 'name', 'compromisos', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(644, 'lang:compromisos:description', 'description', 'compromisos', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(645, 'lang:compromisos:image', 'images', 'compromisos', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223537223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(646, 'lang:compromisos:name_inf', 'name_inf', 'compromisos', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3130303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(647, 'lang:compromisos:description_inf', 'description_inf', 'compromisos', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(648, 'lang:vacantes_aplicar:name', 'name', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(649, 'lang:vacantes_aplicar:tel', 'tel', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(650, 'lang:vacantes_aplicar:doc', 'doc', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(651, 'lang:vacantes_aplicar:cel', 'cel', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(652, 'lang:vacantes_aplicar:anos', 'anos', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(653, 'lang:vacantes_aplicar:email', 'email', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(654, 'lang:vacantes_aplicar:vacante', 'vacante', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(655, 'lang:vacantes_aplicar:titulo', 'titulo', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(656, 'lang:vacantes_aplicar:titulo_otro', 'titulo_otro', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(657, 'lang:vacantes_aplicar:otro_estudio', 'otro_estudio', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(658, 'lang:vacantes_aplicar:comentario', 'comentario', 'vacantes_aplicar', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(659, 'lang:vacantes_aplicar:archivo', 'archivo', 'vacantes_aplicar', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3235353b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(660, 'Descripción', 'description_vacantes', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(661, 'Imagen', 'image_vacantes', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a39333b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226769667c706e677c6a70677c223b7d, NULL, 'no'),
(662, 'lang:services:description', 'description_services', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(663, 'lang:services:image', 'image_services', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223934223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226a70677c6769667c706e677c223b7d, NULL, 'no'),
(664, 'lang:services:image_interna', 'image_internal', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223934223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226a70677c6769667c706e677c223b7d, NULL, 'no'),
(665, 'lang:services:texto_inferior', 'texto_inferior_services', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(666, 'Subtitulo', 'subtitle_novedades', 'pages', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3131373b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(667, 'Descripción', 'description_novedades', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b733a383a22616476616e636564223b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(668, 'Imagen', 'image_novedades', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a39353b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226a70677c6769667c706e677c223b7d, NULL, 'no'),
(669, 'Imagen', 'image_interna', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a39353b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226a70677c6769667c706e677c223b7d, NULL, 'no'),
(670, 'lang:highlights:description', 'description_highlights', 'pages', 'wysiwyg', 0x613a323a7b733a31313a22656469746f725f74797065223b4e3b733a31303a22616c6c6f775f74616773223b4e3b7d, NULL, 'no'),
(671, 'lang:highlights:image', 'image_highlights', 'pages', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b693a39363b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31323a226a70677c6769667c706e677c223b7d, NULL, 'no'),
(672, 'lang:highlights:url', 'url_highlights', 'pages', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a3230303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(673, 'lang:estudios:label', 'opcion', 'estudios', 'text', 0x613a323a7b733a31303a226d61785f6c656e677468223b693a35303b733a31333a2264656661756c745f76616c7565223b4e3b7d, NULL, 'no'),
(674, 'lang:aislados:etiqueta_img', 'etiqueta_img', 'aislados', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223737223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31313a226769667c706e677c6a7067223b7d, NULL, 'no'),
(675, 'lang:aislados:chat_img', 'chat_img', 'aislados', 'bootstrap_image', 0x613a353a7b733a363a22666f6c646572223b733a323a223737223b733a31323a22726573697a655f7769647468223b4e3b733a31333a22726573697a655f686569676874223b4e3b733a31303a226b6565705f726174696f223b4e3b733a31333a22616c6c6f7765645f7479706573223b733a31313a226769667c706e677c6a7067223b7d, NULL, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_data_field_assignments`
--

DROP TABLE IF EXISTS `default_data_field_assignments`;
CREATE TABLE IF NOT EXISTS `default_data_field_assignments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `is_required` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `is_unique` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `instructions` text COLLATE utf8_unicode_ci,
  `field_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=653 ;

--
-- Volcado de datos para la tabla `default_data_field_assignments`
--

INSERT INTO `default_data_field_assignments` (`id`, `sort_order`, `stream_id`, `field_id`, `is_required`, `is_unique`, `instructions`, `field_name`) VALUES
(1, 1, 1, 1, 'yes', 'no', NULL, NULL),
(2, 1, 2, 2, 'no', 'no', NULL, NULL),
(3, 1, 3, 3, 'yes', 'no', NULL, NULL),
(4, 2, 3, 4, 'yes', 'no', NULL, NULL),
(5, 3, 3, 5, 'no', 'no', NULL, NULL),
(6, 4, 3, 6, 'no', 'no', NULL, NULL),
(7, 5, 3, 7, 'no', 'no', NULL, NULL),
(8, 6, 3, 8, 'no', 'no', NULL, NULL),
(9, 7, 3, 9, 'no', 'no', NULL, NULL),
(10, 8, 3, 10, 'no', 'no', NULL, NULL),
(11, 9, 3, 11, 'no', 'no', NULL, NULL),
(12, 10, 3, 12, 'no', 'no', NULL, NULL),
(13, 11, 3, 13, 'no', 'no', NULL, NULL),
(14, 12, 3, 14, 'no', 'no', NULL, NULL),
(15, 13, 3, 15, 'no', 'no', NULL, NULL),
(16, 14, 3, 16, 'no', 'no', NULL, NULL),
(184, 2, 1, 184, 'yes', 'no', '', NULL),
(255, 15, 3, 278, 'no', 'no', '', NULL),
(326, 1, 71, 349, 'yes', 'no', NULL, NULL),
(327, 2, 71, 350, 'yes', 'no', NULL, NULL),
(328, 3, 71, 351, 'yes', 'no', NULL, NULL),
(329, 4, 71, 352, 'no', 'no', NULL, NULL),
(330, 5, 71, 353, 'yes', 'no', NULL, NULL),
(343, 1, 78, 366, 'no', 'no', NULL, NULL),
(374, 1, 89, 397, 'yes', 'no', NULL, NULL),
(375, 2, 89, 398, 'yes', 'no', NULL, NULL),
(376, 3, 89, 399, 'yes', 'no', NULL, NULL),
(377, 1, 90, 400, 'yes', 'no', NULL, NULL),
(378, 2, 90, 401, 'yes', 'no', NULL, NULL),
(417, 1, 107, 440, 'yes', 'no', NULL, NULL),
(418, 2, 107, 441, 'yes', 'no', NULL, NULL),
(419, 1, 108, 442, 'no', 'no', 'Max. caracteres 200', NULL),
(420, 2, 108, 443, 'no', 'no', '940px x 400px', NULL),
(421, 1, 109, 444, 'yes', 'no', NULL, NULL),
(422, 2, 109, 445, 'yes', 'no', '940px × 400px', NULL),
(448, 1, 115, 471, 'yes', 'no', NULL, NULL),
(449, 2, 115, 472, 'yes', 'no', NULL, NULL),
(450, 3, 115, 473, 'yes', 'no', NULL, NULL),
(451, 4, 115, 474, 'yes', 'no', NULL, NULL),
(452, 5, 115, 475, 'yes', 'no', NULL, NULL),
(453, 1, 116, 476, 'yes', 'no', NULL, NULL),
(454, 2, 116, 477, 'yes', 'no', NULL, NULL),
(455, 3, 116, 478, 'yes', 'no', NULL, NULL),
(456, 4, 116, 479, 'yes', 'no', NULL, NULL),
(457, 5, 116, 480, 'yes', 'no', NULL, NULL),
(465, 1, 120, 488, 'yes', 'no', 'Max. 95 caracteres', NULL),
(466, 2, 120, 489, 'yes', 'no', NULL, NULL),
(467, 1, 121, 490, 'yes', 'no', NULL, NULL),
(468, 2, 121, 491, 'yes', 'no', NULL, NULL),
(469, 3, 121, 492, 'yes', 'no', NULL, NULL),
(470, 4, 121, 493, 'yes', 'no', NULL, NULL),
(471, 5, 121, 494, 'yes', 'no', NULL, NULL),
(472, 6, 121, 495, 'yes', 'no', NULL, NULL),
(538, 1, 136, 561, 'yes', 'no', 'Max. 100 caracteres', NULL),
(539, 2, 136, 562, 'yes', 'no', NULL, NULL),
(540, 3, 136, 563, 'yes', 'no', '370px × 250px', NULL),
(541, 4, 136, 564, 'yes', 'no', 'Max. 100 caracteres', NULL),
(542, 5, 136, 565, 'yes', 'no', NULL, NULL),
(620, 1, 154, 643, 'yes', 'no', NULL, NULL),
(621, 2, 154, 644, 'yes', 'no', NULL, NULL),
(622, 3, 154, 645, 'yes', 'no', NULL, NULL),
(623, 4, 154, 646, 'yes', 'no', 'Max. 100 caracteres', NULL),
(624, 5, 154, 647, 'yes', 'no', NULL, NULL),
(625, 1, 155, 648, 'yes', 'no', NULL, NULL),
(626, 2, 155, 649, 'yes', 'no', NULL, NULL),
(627, 3, 155, 650, 'yes', 'no', NULL, NULL),
(628, 4, 155, 651, 'yes', 'no', NULL, NULL),
(629, 5, 155, 652, 'yes', 'no', NULL, NULL),
(630, 6, 155, 653, 'yes', 'no', NULL, NULL),
(631, 7, 155, 654, 'yes', 'no', NULL, NULL),
(632, 8, 155, 655, 'yes', 'no', NULL, NULL),
(633, 9, 155, 656, 'yes', 'no', NULL, NULL),
(634, 10, 155, 657, 'yes', 'no', NULL, NULL),
(635, 11, 155, 658, 'yes', 'no', NULL, NULL),
(636, 12, 155, 659, 'yes', 'no', NULL, NULL),
(637, 1, 156, 660, 'no', 'no', 'Max. caracteres 200', NULL),
(638, 2, 156, 661, 'no', 'no', NULL, NULL),
(639, 1, 157, 662, 'no', 'no', NULL, NULL),
(640, 2, 157, 663, 'no', 'no', '300x250', NULL),
(641, 3, 157, 664, 'no', 'no', '700x298', NULL),
(642, 4, 157, 665, 'no', 'no', NULL, NULL),
(643, 1, 158, 666, 'no', 'no', 'Maximo 117 caracteres', NULL),
(644, 2, 158, 667, 'yes', 'no', 'Maximo 200 caracteres', NULL),
(645, 3, 158, 668, 'no', 'no', '280x119', NULL),
(646, 4, 158, 669, 'no', 'no', '380x260', NULL),
(647, 1, 159, 670, 'no', 'no', NULL, NULL),
(648, 2, 159, 671, 'no', 'no', NULL, NULL),
(649, 3, 159, 672, 'no', 'no', NULL, NULL),
(650, 1, 160, 673, 'yes', 'no', NULL, NULL),
(651, 1, 161, 674, 'no', 'no', '200px × 200px', NULL),
(652, 2, 161, 675, 'no', 'no', '200px × 200px', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_data_streams`
--

DROP TABLE IF EXISTS `default_data_streams`;
CREATE TABLE IF NOT EXISTS `default_data_streams` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=162 ;

--
-- Volcado de datos para la tabla `default_data_streams`
--

INSERT INTO `default_data_streams` (`id`, `stream_name`, `stream_slug`, `stream_namespace`, `stream_prefix`, `about`, `view_options`, `title_column`, `sorting`, `permissions`, `is_hidden`, `menu_path`) VALUES
(1, 'lang:blog:blog_title', 'blog', 'blogs', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(2, 'Default', 'def_page_fields', 'pages', NULL, 'A simple page type with a WYSIWYG editor that will get you started adding content.', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(3, 'lang:user_profile_fields_label', 'profiles', 'users', NULL, 'Profiles for users module', 0x613a313a7b693a303b733a31323a22646973706c61795f6e616d65223b7d, 'display_name', 'title', NULL, 'no', NULL),
(71, 'lang:banner:title', 'banner', 'banner', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name', 'title', NULL, 'no', NULL),
(78, 'valores', 'valores', 'pages', 'pages_', 'Simple pagina para los valores', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(89, 'lang:convenios:title', 'convenios', 'convenios', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name', 'title', NULL, 'no', NULL),
(90, 'lang:clientes:title', 'clientes', 'clientes', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name', 'title', NULL, 'no', NULL),
(107, 'lang:redes:title', 'redes', 'redes', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(108, 'quienes', 'quienes', 'pages', 'pages_', 'Simple pagina para los quienes', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(109, 'lang:donde:title', 'donde', 'donde', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(115, 'lang:english_contact:title', 'english_contact', 'english_contact', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'email', 'title', NULL, 'no', NULL),
(116, 'lang:english:title', 'english', 'english', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(120, 'lang:faq:title', 'faq', 'faq', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name', 'title', NULL, 'no', NULL),
(121, 'lang:trabaja:title', 'trabaja', 'trabaja', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(136, 'lang:services_us:title', 'services_us', 'services_us', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name_inf', 'title', NULL, 'no', NULL),
(154, 'lang:compromisos:title', 'compromisos', 'compromisos', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'name_inf', 'title', NULL, 'no', NULL),
(155, 'lang:vacantes_aplicar:title', 'vacantes_aplicar', 'vacantes_aplicar', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'archivo', 'title', NULL, 'no', NULL),
(156, 'vacantes', 'vacantes', 'pages', 'pages_', 'Simple pagina para los vacantes', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(157, 'services', 'services', 'pages', 'pages_', 'Simple pagina para los services', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(158, 'novedades', 'novedades', 'pages', 'pages_', 'Simple pagina para los novedades', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(159, 'highlights', 'highlights', 'pages', 'pages_', 'Simple pagina para los highlights', 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL),
(160, 'lang:estudios:title', 'estudios', 'estudios', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, 'opcion', 'title', NULL, 'no', NULL),
(161, 'lang:aislados:title', 'aislados', 'aislados', NULL, NULL, 0x613a323a7b693a303b733a323a226964223b693a313b733a373a2263726561746564223b7d, NULL, 'title', NULL, 'no', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_data_stream_searches`
--

DROP TABLE IF EXISTS `default_data_stream_searches`;
CREATE TABLE IF NOT EXISTS `default_data_stream_searches` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stream_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stream_namespace` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `search_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search_term` text COLLATE utf8_unicode_ci,
  `ip_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_results` int(11) NOT NULL,
  `query_string` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_def_page_fields`
--

DROP TABLE IF EXISTS `default_def_page_fields`;
CREATE TABLE IF NOT EXISTS `default_def_page_fields` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `default_def_page_fields`
--

INSERT INTO `default_def_page_fields` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `body`) VALUES
(1, '2013-08-14 13:43:09', NULL, 1, NULL, '<p>Welcome to our homepage. We have not quite finished setting up our website yet, but please add us to your bookmarks and come back soon.</p>'),
(2, '2013-08-14 13:43:09', NULL, 1, NULL, '<p>To contact us please fill out the form below.</p>\n				{{ contact:form name="text|required" email="text|required|valid_email" subject="dropdown|Support|Sales|Feedback|Other" message="textarea" attachment="file|zip" }}\n					<div><label for="name">Name:</label>{{ name }}</div>\n					<div><label for="email">Email:</label>{{ email }}</div>\n					<div><label for="subject">Subject:</label>{{ subject }}</div>\n					<div><label for="message">Message:</label>{{ message }}</div>\n					<div><label for="attachment">Attach  a zip file:</label>{{ attachment }}</div>\n				{{ /contact:form }}'),
(3, '2013-08-14 13:43:09', NULL, 1, NULL, '{{ search:form class="search-form" }} \n		<input name="q" placeholder="Search terms..." />\n	{{ /search:form }}'),
(4, '2013-08-14 13:43:09', NULL, 1, NULL, '{{ search:form class="search-form" }} \n		<input name="q" placeholder="Search terms..." />\n	{{ /search:form }}\n\n{{ search:results }}\n\n	{{ total }} results for "{{ query }}".\n\n	<hr />\n\n	{{ entries }}\n\n		<article>\n			<h4>{{ singular }}: <a href="{{ url }}">{{ title }}</a></h4>\n			<p>{{ description }}</p>\n		</article>\n\n	{{ /entries }}\n\n        {{ pagination }}\n\n{{ /search:results }}'),
(5, '2013-08-14 13:43:09', NULL, 1, NULL, '<p>We cannot find the page you are looking for, please click <a title="Home" href="{{ pages:url id=''1'' }}">here</a> to go to the homepage.</p>'),
(6, '2013-08-23 22:19:53', '2013-08-23 22:19:59', 2, 1, 'asdasdsadsadsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_donde`
--

DROP TABLE IF EXISTS `default_donde`;
CREATE TABLE IF NOT EXISTS `default_donde` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_donde`
--

INSERT INTO `default_donde` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description`, `images`) VALUES
(1, '2013-09-25 22:07:22', '2013-10-08 14:21:34', 2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec vulputate tellus. Maecenas laoreet condimentum nibh, id placerat quam mattis vitae. Donec non lobortis lectus. Mauris vitae posuere massa. Maecenas tristique sapien eget risus blandit vehicula. Vestibulum cursus augue vitae est molestie consequat.<br />\n<br />\nEtiam ut ante volutpat, ornare sapien sed, eleifend risus. Sed porta consequat nisi. Mauris magna dui, congue ut felis id, malesuada pellentesque eros. Integer ullamcorper tempus quam, a tincidunt risus pellentesque at. Integer tempor ante diam, non tempus nunc porttitor ut\n<ul>\n <li>jdenjkdd</li>\n <li>dsdhdsjs</li>\n <li>ddlkssdlklds}</li>\n</ul>\n', 'f5effb9ee55b239');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_email_templates`
--

DROP TABLE IF EXISTS `default_email_templates`;
CREATE TABLE IF NOT EXISTS `default_email_templates` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `default_email_templates`
--

INSERT INTO `default_email_templates` (`id`, `slug`, `name`, `description`, `subject`, `body`, `lang`, `is_default`, `module`) VALUES
(1, 'comments', 'Comment Notification', 'Email that is sent to admin when someone creates a comment', 'You have just received a comment from {{ name }}', '<h3>You have received a comment from {{ name }}</h3>\n				<p>\n				<strong>IP Address: {{ sender_ip }}</strong><br/>\n				<strong>Operating System: {{ sender_os }}<br/>\n				<strong>User Agent: {{ sender_agent }}</strong>\n				</p>\n				<p>{{ comment }}</p>\n				<p>View Comment: {{ redirect_url }}</p>', 'en', 1, 'comments'),
(2, 'contact', 'Contact Notification', 'Template for the contact form', '{{ settings:site_name }} :: {{ subject }}', 'This message was sent via the contact form on with the following details:\n				<hr />\n				IP Address: {{ sender_ip }}\n				OS {{ sender_os }}\n				Agent {{ sender_agent }}\n				<hr />\n				{{ message }}\n\n				{{ name }},\n				\n				{{ email }}', 'en', 1, 'pages'),
(3, 'registered', 'New User Registered', 'Email sent to the site contact e-mail when a new user registers', '{{ settings:site_name }} :: You have just received a registration from {{ name }}', '<h3>You have received a registration from {{ name }}</h3>\n				<p><strong>IP Address: {{ sender_ip }}</strong><br/>\n				<strong>Operating System: {{ sender_os }}</strong><br/>\n				<strong>User Agent: {{ sender_agent }}</strong>\n				</p>', 'en', 1, 'users'),
(4, 'activation', 'Activation Email', 'The email which contains the activation code that is sent to a new user', '{{ settings:site_name }} - Account Activation', '<p>Hello {{ user:first_name }},</p>\n				<p>Thank you for registering at {{ settings:site_name }}. Before we can activate your account, please complete the registration process by clicking on the following link:</p>\n				<p><a href="{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}">{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}</a></p>\n				<p>&nbsp;</p>\n				<p>In case your email program does not recognize the above link as, please direct your browser to the following URL and enter the activation code:</p>\n				<p><a href="{{ url:site }}users/activate">{{ url:site }}users/activate</a></p>\n				<p><strong>Activation Code:</strong> {{ activation_code }}</p>', 'en', 1, 'users'),
(5, 'forgotten_password', 'Forgotten Password Email', 'The email that is sent containing a password reset code', '{{ settings:site_name }} - Forgotten Password', '<p>Hello {{ user:first_name }},</p>\n				<p>It seems you have requested a password reset. Please click this link to complete the reset: <a href="{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}">{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}</a></p>\n				<p>If you did not request a password reset please disregard this message. No further action is necessary.</p>', 'en', 1, 'users'),
(6, 'new_password', 'New Password Email', 'After a password is reset this email is sent containing the new password', '{{ settings:site_name }} - New Password', '<p>Hello {{ user:first_name }},</p>\n				<p>Your new password is: {{ new_password }}</p>\n				<p>After logging in you may change your password by visiting <a href="{{ url:site }}edit-profile">{{ url:site }}edit-profile</a></p>', 'en', 1, 'users');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_english`
--

DROP TABLE IF EXISTS `default_english`;
CREATE TABLE IF NOT EXISTS `default_english` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `images_english` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_english` longtext COLLATE utf8_unicode_ci,
  `images_lateral1_english` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_lateral2_english` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `textocontact_english` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_english`
--

INSERT INTO `default_english` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `images_english`, `description_english`, `images_lateral1_english`, `images_lateral2_english`, `textocontact_english`) VALUES
(1, '2013-09-14 23:46:01', '2013-09-29 02:10:29', 2, 1, '8a132c4b3442d90', '<p 0px="" 35="" a="" adom="" and="" at="" because="" been="" believe="" better="" by="" care="" class="main_p" colombian="" color:="" company="" compassi c cost="" effective="" feel="" firmly="" font-family:="" font-size:="" for="" has="" healing="" home="" is="" line-height:="" margin:="" over="" p="" padding:="" patients="" provide="" serving="" strive="" supported="" text-align:="" that="" their="" they="" to="" we="" when="" years.="">Our team of caregivers includes the following:</p>\n\n<ul 0px="" 20px="" adom="" assets="" class="list_serv" color:="" fbz="" font-family:="" font-size:="" http:="" img="" inside="" li="" line-height:="" list-style:="" margin:="" padding-left:="" padding-right:="" padding:="" repositorio.imaginamos.com.co="">\n <li>Doctors</li>\n <li 0px="" adom="" assets="" color:="" fbz="" font-size:="" http:="" img="" inside="" li="" list-style:="" margin:="" padding:="" repositorio.imaginamos.com.co="">Certified Nursing Assistants</li>\n <li 0px="" adom="" assets="" class="main_p" color:="" fbz="" font-family:="" font-size:="" http:="" img="" inside="" line-height:="" list-style:="" margin:="" p="" padding:="" repositorio.imaginamos.com.co="" text-align:="">We work for several international well-known hotels, health and insurance companies, providing medical assistance to their clients and travellers when they visit Bogot&aacute;. All of our services are tailored to fit individual clients&rsquo; needs and we attend to patients at home or wherever they are.&nbsp;<br br="" />\n Please call or email our office to find out how ADOM Home Care can improve the quality of life for your clients.&nbsp;<br br="" />\n &lt;span none;=&quot;&quot; font-style:=&quot;&quot; inherit;=&quot;&quot; font-weight:=&quot;&quot; 600;&quot;=&quot;&quot;&gt;Proud to be recognized as the first Home Care provider in Colombia and to have national and international quality certifications.</li>\n</ul>\n', '523e8b149eeaf45', '2a22c2cbc0fb5f9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_english_contact`
--

DROP TABLE IF EXISTS `default_english_contact`;
CREATE TABLE IF NOT EXISTS `default_english_contact` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `default_english_contact`
--

INSERT INTO `default_english_contact` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `tel`, `company`, `email`, `comment`) VALUES
(1, '2013-09-30 14:55:41', NULL, NULL, NULL, '', '', '', '', ''),
(2, '2013-09-30 15:11:21', NULL, NULL, NULL, '', '', '', '', ''),
(3, '2013-09-30 15:11:37', NULL, NULL, NULL, '', '', '', '', ''),
(4, '2013-09-30 15:38:45', NULL, NULL, NULL, '', '', '', '', ''),
(5, '2013-09-30 15:38:46', NULL, NULL, NULL, '', '', '', '', ''),
(6, '2013-09-30 15:38:46', NULL, NULL, NULL, '', '', '', '', ''),
(7, '2013-09-30 15:38:46', NULL, NULL, NULL, '', '', '', '', ''),
(8, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(9, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(10, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(11, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(12, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(13, '2013-09-30 15:38:47', NULL, NULL, NULL, '', '', '', '', ''),
(14, '2013-09-30 15:38:48', NULL, NULL, NULL, '', '', '', '', ''),
(15, '2013-09-30 15:38:48', NULL, NULL, NULL, '', '', '', '', ''),
(16, '2013-09-30 15:38:48', NULL, NULL, NULL, '', '', '', '', ''),
(17, '2013-09-30 15:38:48', NULL, NULL, NULL, '', '', '', '', ''),
(18, '2013-09-30 15:39:07', NULL, NULL, NULL, '', '', '', '', ''),
(19, '2013-09-30 15:39:07', NULL, NULL, NULL, '', '', '', '', ''),
(20, '2013-09-30 15:41:25', NULL, NULL, NULL, '', '', '', '', ''),
(21, '2013-09-30 15:51:07', NULL, NULL, NULL, '', '', '', '', ''),
(22, '2013-09-30 15:51:07', NULL, NULL, NULL, '', '', '', '', ''),
(23, '2013-09-30 15:53:37', NULL, NULL, NULL, '', '', '', '', ''),
(24, '2013-09-30 16:00:49', NULL, NULL, NULL, '', '', '', '', ''),
(25, '2013-09-30 16:01:38', NULL, NULL, NULL, '', '', '', '', ''),
(26, '2013-09-30 16:01:38', NULL, NULL, NULL, '', '', '', '', ''),
(27, '2013-09-30 16:01:38', NULL, NULL, NULL, '', '', '', '', ''),
(28, '2013-09-30 16:10:42', NULL, NULL, NULL, '', '', '', '', ''),
(29, '2013-09-30 16:12:12', NULL, NULL, NULL, '', '', '', '', ''),
(30, '2013-09-30 16:12:12', NULL, NULL, NULL, '', '', '', '', ''),
(31, '2013-09-30 16:12:12', NULL, NULL, NULL, '', '', '', '', ''),
(32, '2013-09-30 16:16:00', NULL, NULL, NULL, '', '', '', '', ''),
(33, '2013-09-30 16:16:00', NULL, NULL, NULL, '', '', '', '', ''),
(34, '2013-09-30 16:17:02', NULL, NULL, NULL, '', '', '', '', ''),
(35, '2013-09-30 16:17:02', NULL, NULL, NULL, '', '', '', '', ''),
(36, '2013-09-30 16:28:57', NULL, NULL, NULL, '', '', '', '', ''),
(37, '2013-09-30 16:28:57', NULL, NULL, NULL, '', '', '', '', ''),
(38, '2013-09-30 16:28:57', NULL, NULL, NULL, '', '', '', '', ''),
(39, '2013-09-30 16:30:08', NULL, NULL, NULL, '', '', '', '', ''),
(40, '2013-09-30 16:36:45', NULL, NULL, NULL, '', '', '', '', ''),
(41, '2013-09-30 16:36:45', NULL, NULL, NULL, '', '', '', '', ''),
(42, '2013-09-30 16:36:45', NULL, NULL, NULL, '', '', '', '', ''),
(43, '2013-09-30 17:00:07', NULL, NULL, NULL, '', '', '', '', ''),
(44, '2013-09-30 17:01:16', NULL, NULL, NULL, '', '', '', '', ''),
(45, '2013-09-30 17:01:17', NULL, NULL, NULL, '', '', '', '', ''),
(46, '2013-09-30 17:01:17', NULL, NULL, NULL, '', '', '', '', ''),
(47, '2013-09-30 17:04:40', NULL, NULL, NULL, '', '', '', '', ''),
(48, '2013-09-30 17:04:40', NULL, NULL, NULL, '', '', '', '', ''),
(49, '2013-09-30 17:04:50', NULL, NULL, NULL, '', '', '', '', ''),
(50, '2013-09-30 17:04:50', NULL, NULL, NULL, '', '', '', '', ''),
(51, '2013-09-30 17:04:50', NULL, NULL, NULL, '', '', '', '', ''),
(52, '2013-09-30 17:04:51', NULL, NULL, NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_estudios`
--

DROP TABLE IF EXISTS `default_estudios`;
CREATE TABLE IF NOT EXISTS `default_estudios` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `opcion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `default_estudios`
--

INSERT INTO `default_estudios` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `opcion`) VALUES
(1, '2013-10-08 16:32:21', NULL, 2, 1, 'Estudio 1'),
(2, '2013-10-08 16:32:30', NULL, 2, 2, 'Estudio 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_faq`
--

DROP TABLE IF EXISTS `default_faq`;
CREATE TABLE IF NOT EXISTS `default_faq` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(95) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `default_faq`
--

INSERT INTO `default_faq` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `description`) VALUES
(4, '2013-09-15 23:55:55', NULL, 16, 1, '¿Cuáles son las tarifas de ADOM?', 'Nuestras tarifas varían constantemente y dependen de las características del servicio a prestar. Si quieres saber la tarifa de un servicio en particular.'),
(5, '2013-09-15 23:56:19', '2013-09-15 23:56:52', 16, 2, '¿ADOM tiene convenios con otras empresas de salud? ', 'Además de las aseguradoras y Empresas de Medicina Prepagada, ADOM se encuentra desarrollando una red de convenios con otras empresas de la salud para ofrecerle a sus pacientes mayores beneficios que contribuyan a su bienestar y calidad de vida.'),
(6, '2013-09-15 23:57:18', '2013-09-15 23:58:11', 16, 3, '¿Cuál es el tiempo de respuesta de la Consulta Médica Domiciliaria?', '50 minutos en promedio para urgencias, las cuales son situaciones en las que la vida del paciente no está en peligro, pero se requiere una atención médica oportuna. \n\nPara casos que no impliquen emergencias o urgencias, que son aquellas situaciones en las que el motivo de consulta está relacionado con enfermedades agudas o crónicas que no generan secuelas por una espera mayor, el tiempo puede ser hasta de dos horas. \n\nEstos tiempos de respuesta son aproximados y buscan informar a nuestros clientes, sin embargo, pueden verse alterados por factores externos y ajenos a la voluntad de ADOM Salud Domiciliaria y sus funcionarios.'),
(7, '2013-09-15 23:58:31', NULL, 16, 4, '¿Qué perfil tienen las auxiliares de enfermería de ADOM?', 'Son auxiliares de enfermería graduadas que han pasado por un estricto proceso de selección dentro de ADOM. Todas nuestras auxiliares de enfermería están siendo supervisadas por enfermeras jefes y médicos.'),
(8, '2013-09-15 23:58:48', NULL, 16, 5, '¿Qué perfil tienen los médicos de ADOM?', 'Son médicos generales con más de dos años de experiencia en consulta externa o atención de urgencias. En ADOM fomentamos la actualización permanente y desarrollamos capacitaciones frecuentemente.'),
(9, '2013-09-15 23:59:11', NULL, 16, 6, '¿ADOM realiza aplicación de medicamentos y/o curaciones en casa del paciente?', 'Sí. Contamos con auxiliares de enfermería, enfermeras profesionales y médicos capacitados para realizar estos procedimientos con los mayores estándares de calidad en el domicilio del paciente.'),
(10, '2013-09-15 23:59:30', NULL, 16, 7, '¿Qué debo hacer para solicitar sesiones de terapias o turnos de enfermería?', 'Debes comunicarte a la línea 2563930 y solicitar los servicios.'),
(11, '2013-09-15 23:59:50', NULL, 16, 8, '¿Atienden situaciones en donde esté en riesgo la vida de una persona?', 'No. Nuestros médicos domiciliarios únicamente atienden urgencias o situaciones donde la vida del paciente no esté en riesgo.'),
(12, '2013-09-16 00:00:08', NULL, 16, 9, '¿ADOM cuenta con servicio de ambulancias o movilización de pacientes?', 'No. Actualmente en ADOM no contamos con ambulancias ni vehículos especializados en la movilización de pacientes. Sin embargo, en caso de requerirse, contamos con empresas aliadas que prestan estos servicios.'),
(13, '2013-09-16 00:00:28', NULL, 16, 10, '¿Tienen enfermeras para acompañar a adultos mayores?', 'Sí, en ADOM contamos con un programa diseñado para el acompañamiento de adultos mayores, en el que ofrecemos acompañamiento 24 o 12 horas y otros servicios complementarios que se ajustan a sus necesidades y presupuesto.'),
(14, '2013-09-16 00:00:50', NULL, 16, 11, '¿En que barrios de Bogotá tiene cobertura ADOM?', 'Atendemos el 90% de los sectores de Bogotá, las 24 horas del día.  Sin embargo, la cobertura está sujeta a la seguridad de la zona y las vías de acceso.'),
(15, '2013-09-16 00:01:15', NULL, 16, 12, '¿En que ciudades tiene cobertura ADOM?', 'Actualmente ADOM solo atiende en la ciudad de Bogotá, Colombia.'),
(16, '2013-09-16 00:01:41', NULL, 16, 13, '¿ADOM ofrece consulta médica pediátrica?', 'No. Nuestro equipo médico está conformado por médicos generales con amplia experiencia en la atención de pacientes de diferentes grupos etarios. Aunque no tenemos pediatras, nuestros médicos atienden mensualmente un alto volumen de niños, resolviendo situaciones de baja complejidad en la comodidad del hogar.'),
(17, '2013-09-16 00:02:00', NULL, 16, 14, '¿Puedo utilizar los servicios de ADOM a través de mi empresa de Medicina Prepagada o asegurador', 'Sí. En ADOM tenemos convenios con las principales empresas de salud y aseguradoras del país, por lo que puedes utilizar nuestros servicios pagando solo el valor del copago (vale). Consulta con tu entidad o llámanos al 2563930 para contarte cómo puedes utilizar nuestros servicios de esta manera.'),
(18, '2013-09-16 00:02:19', NULL, 16, 15, '¿Debo afiliarme o pagar mensualidades para utilizar los servicios de ADOM?', 'No. En ADOM queremos que toda Bogotá se beneficie de nuestros servicios, por eso, solamente pagas por los servicios que te prestemos y no existen contratos, afiliaciones ni pagos adicionales.'),
(19, '2013-09-16 00:02:40', NULL, 16, 16, '¿Debo estar afiliado a Medicina Prepagada para utilizar los servicios de ADOM?', 'No. Puedes llamar directamente a la línea 2563930 en Bogotá y solicitar el servicio que necesites.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_files`
--

DROP TABLE IF EXISTS `default_files`;
CREATE TABLE IF NOT EXISTS `default_files` (
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

--
-- Volcado de datos para la tabla `default_files`
--

INSERT INTO `default_files` (`id`, `folder_id`, `user_id`, `type`, `name`, `filename`, `path`, `description`, `extension`, `mimetype`, `keywords`, `width`, `height`, `filesize`, `alt_attribute`, `download_count`, `date_added`, `sort`) VALUES
('005227a1932d9a8', 94, 2, 'i', 'img_servicio1.jpg', 'e14a7aa609418b1aeb2c984d0f5d83b1.jpg', '{{ url:site }}files/large/e14a7aa609418b1aeb2c984d0f5d83b1.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 0, 1381241525, 0),
('024d8e6ed756aa5', 50, 16, 'i', 'home-diseno-web-marranito.png', '322ff64cc23e31f89c2a7c5dd245207e.png', '{{ url:site }}files/large/322ff64cc23e31f89c2a7c5dd245207e.png', '', '.png', 'image/png', '', 180, 180, 17, '', 4, 1379460565, 0),
('03a63a3868febb7', 77, 2, 'i', 'dest_lider.png', '4f4f1d4761966a4bef350b717030dcfc.png', '{{ url:site }}files/large/4f4f1d4761966a4bef350b717030dcfc.png', '', '.png', 'image/png', '', 155, 155, 8, '', 15, 1380294717, 0),
('045c249b8c8c4e4', 50, 16, 'i', '75d030ae7d7b7054d0f3a46146e8d154.jpg', 'ac17f7c56cd571c9f59eb07e4d4ed78c.jpg', '{{ url:site }}files/large/ac17f7c56cd571c9f59eb07e4d4ed78c.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 1, 1380146914, 0),
('0476cd08000500d', 94, 2, 'i', 'img_donde.jpg', '9b38c75406c16fd23dca67880715909c.jpg', '{{ url:site }}files/large/9b38c75406c16fd23dca67880715909c.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 2, 1381241511, 0),
('04b5fd53029fcd0', 3, 16, 'i', 'uno.jpg', 'b8d79dfb6718e37a4245f2575211f4ba.jpg', '{{ url:site }}files/large/b8d79dfb6718e37a4245f2575211f4ba.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 0, 1380325785, 0),
('04dd548fa32f54c', 50, 16, 'i', 'img_donde.jpg', '7e9f0fa19051e7f80d5009dbaf9dbcb2.jpg', '{{ url:site }}files/large/7e9f0fa19051e7f80d5009dbaf9dbcb2.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 6, 1380147100, 0),
('0590697d1e5e255', 59, 16, 'i', 'asistencia-integral-viajero-assist-card.jpg', '9b3ebf2111f73b98d46d3d632735342f.jpg', '{{ url:site }}files/large/9b3ebf2111f73b98d46d3d632735342f.jpg', '', '.jpg', 'image/jpeg', '', 1076, 1076, 140, '', 0, 1380825215, 0),
('05b4ddf2a919737', 64, 16, 'i', 'equipo_palma_medica.jpg', '58d6c70003a2e51c44561cab8f689697.jpg', '{{ url:site }}files/large/58d6c70003a2e51c44561cab8f689697.jpg', '', '.jpg', 'image/jpeg', '', 250, 250, 40, '', 1, 1381160046, 0),
('077638e3ee95527', 77, 2, 'i', 'medico.jpg', '7a359b3dfef9bda5336a6597fdd5e7c4.jpg', '{{ url:site }}files/large/7a359b3dfef9bda5336a6597fdd5e7c4.jpg', '', '.jpg', 'image/jpeg', '', 283, 283, 52, '', 8, 1381251809, 0),
('0a8c295755f8e3c', 64, 2, 'i', 'img_servicio1.jpg', '0887a6148076d10af5cbf4c123c269e5.jpg', '{{ url:site }}files/large/0887a6148076d10af5cbf4c123c269e5.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 14, 1380322764, 0),
('0befb34feb5072e', 50, 2, 'i', 'img_slider.jpg', '0ae4f55c42e928a1b18cd268986dbabb.jpg', '{{ url:site }}files/large/0ae4f55c42e928a1b18cd268986dbabb.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 1, 1381242067, 0),
('0c8fef05d51fbfc', 95, 2, 'i', 'img_donde.jpg', 'b50636f6615ee5f6dadd9ee229bbb7c5.jpg', '{{ url:site }}files/large/b50636f6615ee5f6dadd9ee229bbb7c5.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 1, 1381245082, 0),
('0dfe371ea267fe7', 64, 16, 'i', 'equipo_palma_medica.jpg', 'e4498f9caf18355465fbadbfea13b148.jpg', '{{ url:site }}files/large/e4498f9caf18355465fbadbfea13b148.jpg', '', '.jpg', 'image/jpeg', '', 275, 250, 42, '', 18, 1381160131, 0),
('115fb181b4e837b', 64, 2, 'i', 'img_dest.jpg', 'aa90a92af76639da83a107ad9bbee8e6.jpg', '{{ url:site }}files/large/aa90a92af76639da83a107ad9bbee8e6.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 4, 1380322764, 0),
('1210153827cb42c', 64, 16, 'i', 'istock_000003709313large.jpg', '1bf50dccfdb28eecfb109b743e134d5a.jpg', '{{ url:site }}files/large/1bf50dccfdb28eecfb109b743e134d5a.jpg', '', '.jpg', 'image/jpeg', '', 1552, 1350, 552, '', 1, 1381160884, 0),
('121e7806658a02a', 59, 16, 'i', 'coomeva.jpg', '372c3bf17fed4ec2aa439f89938d6ea7.jpg', '{{ url:site }}files/large/372c3bf17fed4ec2aa439f89938d6ea7.jpg', '', '.jpg', 'image/jpeg', '', 1359, 1359, 170, '', 0, 1380826066, 0),
('1ab84d68179ed54', 64, 2, 'i', 'img_donde.jpg', 'fc7f3b8ba09c3284abe975df4fc70ca2.jpg', '{{ url:site }}files/large/fc7f3b8ba09c3284abe975df4fc70ca2.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 2, 1379171496, 0),
('1b50b680c0e435d', 59, 16, 'i', 'prueba.jpg', '8729f2fdaeec6d38b7c340824263e19c.jpg', '{{ url:site }}files/large/8729f2fdaeec6d38b7c340824263e19c.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1379287153, 0),
('1c9b0195a0d1029', 64, 2, 'i', 'img_slider.jpg', '80960c45594c7b3c82b7b3e330867eca.jpg', '{{ url:site }}files/large/80960c45594c7b3c82b7b3e330867eca.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1379171496, 0),
('1e71a47791d52b2', 64, 16, 'i', 'istock_000003709313large.jpg', '192a797b310ea3770014423a8ddabb97.jpg', '{{ url:site }}files/large/192a797b310ea3770014423a8ddabb97.jpg', '', '.jpg', 'image/jpeg', '', 1600, 1455, 575, '', 1, 1381160445, 0),
('1fea369dad006a2', 64, 16, 'i', 'captura-de-pantalla-2013-10-07-a-las-11.31_.47_.png', 'c67a44db234b28bfd876c7e52599e865.png', '{{ url:site }}files/large/c67a44db234b28bfd876c7e52599e865.png', '', '.png', 'image/png', '', 853, 363, 136, '', 1, 1381163523, 0),
('2a22c2cbc0fb5f9', 69, 2, 'i', 'img_servicio1.jpg', 'c9f6a26b3c601c453952ab867db10764.jpg', '{{ url:site }}files/large/c9f6a26b3c601c453952ab867db10764.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 6, 1379187961, 0),
('2bda9eb1927c4d0', 77, 2, 'i', 'img_chat.jpg', '7fdb141cf9c6372883e13272ccabd2ac.jpg', '{{ url:site }}files/large/7fdb141cf9c6372883e13272ccabd2ac.jpg', '', '.jpg', 'image/jpeg', '', 75, 75, 7, '', 1, 1380294608, 0),
('2c300460dc37613', 77, 2, 'i', 'dest_lider-5.png', '48ec17ee817a763aa5e9fee2de1423e9.png', '{{ url:site }}files/large/48ec17ee817a763aa5e9fee2de1423e9.png', '', '.png', 'image/png', '', 155, 155, 12, '', 0, 1380276620, 0),
('3daff588c4bae58', 64, 16, 'i', 'istock_000003709313large.jpg', '76d4326e453db889bac286b1ac5e16c2.jpg', '{{ url:site }}files/large/76d4326e453db889bac286b1ac5e16c2.jpg', '', '.jpg', 'image/jpeg', '', 1552, 1350, 546, '', 3, 1381160555, 0),
('41a4bc68bd7127e', 64, 2, 'i', 'img_servicio1.jpg', 'c3278d4ff47862712cf6d5221756c24e.jpg', '{{ url:site }}files/large/c3278d4ff47862712cf6d5221756c24e.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 3, 1380322764, 0),
('42173b5ef82a73e', 64, 2, 'i', 'img_servicio1.jpg', '0c5b83c87f90bead0301f6681dcb271e.jpg', '{{ url:site }}files/large/0c5b83c87f90bead0301f6681dcb271e.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 3, 1380286369, 0),
('454606e664c90a9', 59, 16, 'i', 'coomeva.jpg', '6a7acf6515b59183309168f8d538eee9.jpg', '{{ url:site }}files/large/6a7acf6515b59183309168f8d538eee9.jpg', '', '.jpg', 'image/jpeg', '', 1359, 1359, 170, '', 0, 1380824499, 0),
('465396a0bc9a0a8', 3, 2, 'i', 'disco.jpg', 'c510121b189cc8f186dd4fe3dad7947d.jpg', '{{ url:site }}files/large/c510121b189cc8f186dd4fe3dad7947d.jpg', '', '.jpg', 'image/jpeg', '', 640, 330, 24, '', 2, 1377279853, 0),
('4cda1f5ecc1c5c9', 59, 16, 'i', 'autogermana.jpg', '764bfd7b05458bce8b570acbffd88159.jpg', '{{ url:site }}files/large/764bfd7b05458bce8b570acbffd88159.jpg', '', '.jpg', 'image/jpeg', '', 221, 221, 14, '', 0, 1380825086, 0),
('4f565e2407c74c3', 77, 2, 'i', 'dest_lider.png', 'c5890617a38c0402510e66da4e56586f.png', '{{ url:site }}files/large/c5890617a38c0402510e66da4e56586f.png', '', '.png', 'image/png', '', 155, 155, 8, '', 6, 1381443162, 0),
('506a28e4fdfc912', 72, 16, 'i', 'uno.jpg', '50335236ac928b5acc8840e5b741b9a7.jpg', '{{ url:site }}files/large/50335236ac928b5acc8840e5b741b9a7.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 5, 1380385719, 0),
('51ec1ce5478ef32', 72, 16, 'i', '75d030ae7d7b7054d0f3a46146e8d154.jpg', 'f71c5460677486373b0bddeadd5a4799.jpg', '{{ url:site }}files/large/f71c5460677486373b0bddeadd5a4799.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 4, 1380147043, 0),
('523e8b149eeaf45', 69, 2, 'i', 'img_dest.jpg', 'd93726838f5fe12b1c5ccdc68c09b633.jpg', '{{ url:site }}files/large/d93726838f5fe12b1c5ccdc68c09b633.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 6, 1379187961, 0),
('543122047b95d84', 59, 16, 'i', 'seguros-boliva.jpg', 'a4c00c1eef96aa60d3a32ff3821002b5.jpg', '{{ url:site }}files/large/a4c00c1eef96aa60d3a32ff3821002b5.jpg', '', '.jpg', 'image/jpeg', '', 365, 365, 48, '', 0, 1380825637, 0),
('569281fe8aa6bac', 59, 16, 'i', 'logo_de_axa_assist_servicios_rgb.jpg', 'b147c561d1f5e28575353a7b343ab814.jpg', '{{ url:site }}files/large/b147c561d1f5e28575353a7b343ab814.jpg', '', '.jpg', 'image/jpeg', '', 1577, 1577, 323, '', 0, 1380825482, 0),
('5bf451e92e94548', 94, 2, 'i', 'img_servicio1.jpg', 'ba81fd1ad998584f16109eb4b42262a1.jpg', '{{ url:site }}files/large/ba81fd1ad998584f16109eb4b42262a1.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 2, 1381241511, 0),
('5d2e73ad66e7953', 64, 16, 'i', 'istock_000003709313large.jpg', '2e82ef660eb2544824dbfb9c8cd9a5ed.jpg', '{{ url:site }}files/large/2e82ef660eb2544824dbfb9c8cd9a5ed.jpg', '', '.jpg', 'image/jpeg', '', 1552, 1350, 554, '', 11, 1381161162, 0),
('5da52613f41f0e2', 59, 16, 'i', 'colmedica.jpg', '32ab7ff823ddb94a15b287cb3e9770ff.jpg', '{{ url:site }}files/large/32ab7ff823ddb94a15b287cb3e9770ff.jpg', '', '.jpg', 'image/jpeg', '', 787, 787, 37, '', 0, 1380825674, 0),
('5f8b2a5aeeeba61', 77, 2, 'i', 'dest_lider.png', 'f9cb5831f9b3e8fccbc50016f6bb0079.png', '{{ url:site }}files/large/f9cb5831f9b3e8fccbc50016f6bb0079.png', '', '.png', 'image/png', '', 155, 155, 8, '', 5, 1381252860, 0),
('631575553202fe6', 94, 2, 'i', 'img_donde.jpg', '8a0830c2eadccc4b8b3166c39755796c.jpg', '{{ url:site }}files/large/8a0830c2eadccc4b8b3166c39755796c.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 0, 1381241525, 0),
('665c4a7910f5307', 64, 16, 'i', 'prueba2.jpg', '8fe662cf994553d4b2ab7aa8d06de616.jpg', '{{ url:site }}files/large/8fe662cf994553d4b2ab7aa8d06de616.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 2, 1379290159, 0),
('6b45c85dfd0b3a7', 64, 16, 'i', 'prueba2.jpg', '65a6b31eb8d90137a79e40dc7eb0fe2a.jpg', '{{ url:site }}files/large/65a6b31eb8d90137a79e40dc7eb0fe2a.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 2, 1379290159, 0),
('6d7e9988f628281', 3, 2, 'i', 'img_slider.jpg', 'b8a824a114fe08415f2938c66de26be4.jpg', '{{ url:site }}files/large/b8a824a114fe08415f2938c66de26be4.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1378846111, 0),
('6e04b66d9de7391', 4, 2, 'i', '215_screenshot1.jpg', '5a9edc2a7619fc0e45d9eccb924a3bfd.jpg', '{{ url:site }}files/large/5a9edc2a7619fc0e45d9eccb924a3bfd.jpg', '', '.jpg', 'image/jpeg', '', 1920, 1080, 371, '', 0, 1377548115, 0),
('6e14a6515b929ba', 3, 16, 'i', 'disco.jpg', 'c60a12b971becfc5d78032b562fdd9ec.jpg', '{{ url:site }}files/large/c60a12b971becfc5d78032b562fdd9ec.jpg', '', '.jpg', 'image/jpeg', '', 640, 330, 24, '', 0, 1378934281, 0),
('708e361d6940cdd', 64, 16, 'i', 'xasl9.jpg', '59e8cccc75cb1190ab7bc2e64eb50db1.jpg', '{{ url:site }}files/large/59e8cccc75cb1190ab7bc2e64eb50db1.jpg', '', '.jpg', 'image/jpeg', '', 320, 290, 68, '', 3, 1381160287, 0),
('70ad6785c15e812', 94, 2, 'i', 'img_donde.jpg', '92bfd64e132727aebab4c0837b87cd5e.jpg', '{{ url:site }}files/large/92bfd64e132727aebab4c0837b87cd5e.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 1, 1381241431, 0),
('71fe362a415cb9b', 56, 2, 'i', 'img_quienes.jpg', 'a349c6df74d59eaf9f2b3c032e673030.jpg', '{{ url:site }}files/large/a349c6df74d59eaf9f2b3c032e673030.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 1, 1379109711, 0),
('732b5ef1ed8c931', 77, 2, 'i', 'dest_lider-2.png', 'db4e316a1aba5db80cbf0a5fd49dfeeb.png', '{{ url:site }}files/large/db4e316a1aba5db80cbf0a5fd49dfeeb.png', '', '.png', 'image/png', '', 155, 155, 13, '', 0, 1380276620, 0),
('769a3721ed8b220', 72, 16, 'i', '096083998e176bc860302a7e913389c5.jpg', '524ba86be360d867ecf191fac128deff.jpg', '{{ url:site }}files/large/524ba86be360d867ecf191fac128deff.jpg', '', '.jpg', 'image/jpeg', '', 1200, 436, 138, '', 2, 1380894575, 0),
('78aad7aaa4a15ae', 94, 2, 'i', 'img_servicio1.jpg', '33d81a94ec769a8424157b4ffa9753f8.jpg', '{{ url:site }}files/large/33d81a94ec769a8424157b4ffa9753f8.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 1, 1381241431, 0),
('7f5db06b0e6529d', 95, 2, 'i', 'img_servicio1.jpg', 'be56202a4c86180771fe0638cbc482ad.jpg', '{{ url:site }}files/large/be56202a4c86180771fe0638cbc482ad.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 1, 1381245082, 0),
('7fc056ac1583441', 91, 2, 'i', 'img_quienes.jpg', '4b0dc9f4961d6a7d4575f51dc2c82d58.jpg', '{{ url:site }}files/large/4b0dc9f4961d6a7d4575f51dc2c82d58.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 13, 1380347664, 0),
('80475d62c537fce', 3, 2, 'i', 'img_quienes.jpg', 'af1e0e4362c2761bac58efbc2113236d.jpg', '{{ url:site }}files/large/af1e0e4362c2761bac58efbc2113236d.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 0, 1378847067, 0),
('80c4b57b1722636', 59, 16, 'i', 'marriott-logo.jpg', '4ace2a0d9e4ff30f197c3ee3495eb01d.jpg', '{{ url:site }}files/large/4ace2a0d9e4ff30f197c3ee3495eb01d.jpg', '', '.jpg', 'image/jpeg', '', 1093, 1093, 125, '', 0, 1380824826, 0),
('80dc69d66affe60', 59, 16, 'i', 'prueba.jpg', '894d48253fa482dd8b7e5186e29ab4a2.jpg', '{{ url:site }}files/large/894d48253fa482dd8b7e5186e29ab4a2.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1379287171, 0),
('8329daac8527751', 93, 16, 'i', 'img_dest.jpg', '17842204fa701c75cfd1d8db1408630b.jpg', '{{ url:site }}files/large/17842204fa701c75cfd1d8db1408630b.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 8, 1380551355, 0),
('87cbe704b48d430', 77, 2, 'i', 'dest_lider-4.png', '13550d2faff1f9f9ce6ae5c3712f01a1.png', '{{ url:site }}files/large/13550d2faff1f9f9ce6ae5c3712f01a1.png', '', '.png', 'image/png', '', 155, 155, 12, '', 2, 1380279760, 0),
('885953811cddcd1', 4, 2, 'i', 'crear base.jpg', '1c042a5e152c2d691403767719b0adfc.jpg', '{{ url:site }}files/large/1c042a5e152c2d691403767719b0adfc.jpg', '', '.jpg', 'image/jpeg', '', 1280, 1024, 187, '', 0, 1377548116, 0),
('8a132c4b3442d90', 69, 2, 'i', 'img_slider.jpg', '69d94b9a2442ec0266f043b1503f0fc0.jpg', '{{ url:site }}files/large/69d94b9a2442ec0266f043b1503f0fc0.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 3, 1380420629, 0),
('8ac7b0206b84349', 91, 2, 'i', 'img_quienes.jpg', '95cc74a407c8152f642f480ab9e5e319.jpg', '{{ url:site }}files/large/95cc74a407c8152f642f480ab9e5e319.jpg', '', '.jpg', 'image/jpeg', '', 370, 250, 93, '', 5, 1380385293, 0),
('8bbb75b8d125524', 3, 2, 'i', 'img_chat.jpg', '499b527595fbf0fa58ecbf022465014a.jpg', '{{ url:site }}files/large/499b527595fbf0fa58ecbf022465014a.jpg', '', '.jpg', 'image/jpeg', '', 75, 75, 7, '', 0, 1378847030, 0),
('8bcfea2e4255054', 58, 16, 'i', 'locatel-01.jpg', '8b24c6fe4553cd59b15fb0d57a64f8b9.jpg', '{{ url:site }}files/large/8b24c6fe4553cd59b15fb0d57a64f8b9.jpg', '', '.jpg', 'image/jpeg', '', 568, 568, 106, '', 0, 1380823786, 0),
('8c4867aee698982', 64, 2, 'i', 'img_servicio1.jpg', 'fe6271ac189bc93671d57ee246655ccc.jpg', '{{ url:site }}files/large/fe6271ac189bc93671d57ee246655ccc.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 3, 1380286369, 0),
('8d6a2ff92f59063', 59, 16, 'i', 'bavaria_logo.jpg', '8db23523e987ee7d0a9bb25ddcfffd5e.jpg', '{{ url:site }}files/large/8db23523e987ee7d0a9bb25ddcfffd5e.jpg', '', '.jpg', 'image/jpeg', '', 567, 567, 37, '', 0, 1380824966, 0),
('8e33b457a138d24', 59, 16, 'i', 'colmedica.jpg', 'f6d5dbfa57e3393e8721deccb928fe33.jpg', '{{ url:site }}files/large/f6d5dbfa57e3393e8721deccb928fe33.jpg', '', '.jpg', 'image/jpeg', '', 787, 787, 37, '', 0, 1380824751, 0),
('933179eb98c4268', 57, 2, 'i', 'img_donde.jpg', '341ed8175f5ca948a7a272ad41faaeca.jpg', '{{ url:site }}files/large/341ed8175f5ca948a7a272ad41faaeca.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 3, 1380387365, 0),
('93507f3f7ddeb7b', 3, 2, 'i', 'home-diseno-web-marranito.png', 'a146862c6a02e442e932bb24659b3554.png', '{{ url:site }}files/large/a146862c6a02e442e932bb24659b3554.png', '', '.png', 'image/png', '', 180, 180, 17, '', 0, 1377627892, 0),
('9517fd0bf8faa65', 77, 16, 'i', 'chat.jpg', '21e0484f3d2baeea2c28b0f9f85f4f40.jpg', '{{ url:site }}files/large/21e0484f3d2baeea2c28b0f9f85f4f40.jpg', '', '.jpg', 'image/jpeg', '', 200, 200, 43, '', 20, 1381157096, 0),
('96619f3d3289fd7', 94, 2, 'i', 'img_servicio1.jpg', 'd093e5fc6d3c39a723d84a32c2eb06ec.jpg', '{{ url:site }}files/large/d093e5fc6d3c39a723d84a32c2eb06ec.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 1, 1381241554, 0),
('974b6312e777b65', 4, 2, 'i', 'cd.jpg', '6904281dbea017d1c2e368a7d47c8a00.jpg', '{{ url:site }}files/large/6904281dbea017d1c2e368a7d47c8a00.jpg', '', '.jpg', 'image/jpeg', '', 960, 523, 130, '', 0, 1377548116, 0),
('98939bfcb42a59d', 94, 2, 'i', 'img_donde.jpg', 'f1590ba62246b63e2b849c83a6dedbda.jpg', '{{ url:site }}files/large/f1590ba62246b63e2b849c83a6dedbda.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 1, 1381241554, 0),
('99aba01a42f170e', 64, 16, 'i', 'prueba2.jpg', 'e9c41eb50fc21c620b22eaaad058dd85.jpg', '{{ url:site }}files/large/e9c41eb50fc21c620b22eaaad058dd85.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 2, 1379290159, 0),
('9cc5134d5b432ae', 96, 2, 'i', 'enfermera.jpg', '930b8a5a08157e8446a9bc1bbf898a09.jpg', '{{ url:site }}files/large/930b8a5a08157e8446a9bc1bbf898a09.jpg', '', '.jpg', 'image/jpeg', '', 482, 482, 74, '', 1, 1381246709, 0),
('a2d4ae4bb42f3c4', 59, 16, 'i', 'images.jpg', '2a2a835556092fb94ba67413337a0987.jpg', '{{ url:site }}files/large/2a2a835556092fb94ba67413337a0987.jpg', '', '.jpg', 'image/jpeg', '', 612, 612, 81, '', 0, 1380825341, 0),
('a58214b75150144', 64, 2, 'i', 'img_dest.jpg', '9c37fee92b5cfe52b536c294572ac5cc.jpg', '{{ url:site }}files/large/9c37fee92b5cfe52b536c294572ac5cc.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 5, 1380322764, 0),
('a63877840b778d5', 94, 2, 'i', 'img_servicio1.jpg', 'a001e262e84f7227625678afdff8804d.jpg', '{{ url:site }}files/large/a001e262e84f7227625678afdff8804d.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 8, 1381241493, 0),
('a8d3b321bf522e2', 64, 16, 'i', 'captura-de-pantalla-2013-10-07-a-las-12.09_.44_.png', 'eb26d131a9dd478dbdf025efdd013cca.png', '{{ url:site }}files/large/eb26d131a9dd478dbdf025efdd013cca.png', '', '.png', 'image/png', '', 834, 357, 145, '', 2, 1381165799, 0),
('ac3ffe6f52ad84c', 4, 2, 'i', 'i-cupon-descuento.jpg', 'ff7de9d7db5ea8591b0d781fcfba4e5d.jpg', '{{ url:site }}files/large/ff7de9d7db5ea8591b0d781fcfba4e5d.jpg', '', '.jpg', 'image/jpeg', '', 529, 419, 73, '', 0, 1377551978, 0),
('acd667d3cbeaf6a', 59, 2, 'i', 'img_dest.jpg', 'b56cad1b8c095d03a599081ea0385c77.jpg', '{{ url:site }}files/large/b56cad1b8c095d03a599081ea0385c77.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 0, 1379159031, 0),
('b24821f49d538c0', 64, 16, 'i', 'medicos1.jpg', 'f81d47279552a53a0a5e7947ce9f74de.jpg', '{{ url:site }}files/large/f81d47279552a53a0a5e7947ce9f74de.jpg', '', '.jpg', 'image/jpeg', '', 1278, 1111, 531, '', 1, 1381160790, 0),
('b3b95ad78f67cf5', 59, 16, 'i', 'colsanitas.jpg', 'd28cb2f54b4f7ebdd535609083f0c9e9.jpg', '{{ url:site }}files/large/d28cb2f54b4f7ebdd535609083f0c9e9.jpg', '', '.jpg', 'image/jpeg', '', 1320, 1320, 160, '', 0, 1380824613, 0),
('b52461a4b6b978c', 3, 16, 'i', '215_screenshot1.jpg', '15966947ca2ce0c76d0a4afebcc60004.jpg', '{{ url:site }}files/large/15966947ca2ce0c76d0a4afebcc60004.jpg', '', '.jpg', 'image/jpeg', '', 1920, 1080, 709, '', 0, 1378934295, 0),
('bd2c22d9c307f0d', 3, 2, 'i', 'img-slide2.jpg', '145c120e527c853990527001f35efe83.jpg', '{{ url:site }}files/large/145c120e527c853990527001f35efe83.jpg', '', '.jpg', 'image/jpeg', '', 2000, 450, 166, '', 0, 1378130599, 0),
('c0ef8c72385abb8', 59, 16, 'i', 'home-diseno-web-marranito.png', '20552c6b0213818fda0a1a6ecadaf032.png', '{{ url:site }}files/large/20552c6b0213818fda0a1a6ecadaf032.png', '', '.png', 'image/png', '', 180, 180, 17, '', 0, 1379451078, 0),
('c3cd0aa20c63d2f', 59, 16, 'i', 'logonal.jpg', '56b325bfe9a8515dd0fae97f402b2047.jpg', '{{ url:site }}files/large/56b325bfe9a8515dd0fae97f402b2047.jpg', '', '.jpg', 'image/jpeg', '', 908, 908, 105, '', 0, 1380825994, 0),
('c6b55018bc73536', 64, 16, 'i', 'medicos1.jpg', '147f8eff5306ffcdb356530c01fcd4d2.jpg', '{{ url:site }}files/large/147f8eff5306ffcdb356530c01fcd4d2.jpg', '', '.jpg', 'image/jpeg', '', 1278, 1111, 550, '', 13, 1381160848, 0),
('c7f71914bd3b07f', 77, 2, 'i', 'img_chat.jpg', 'c9e303fdc70a307130f1feb3ff3771d8.jpg', '{{ url:site }}files/large/c9e303fdc70a307130f1feb3ff3771d8.jpg', '', '.jpg', 'image/jpeg', '', 75, 75, 7, '', 6, 1381443162, 0),
('cc124555c702d8c', 59, 16, 'i', 'home-diseno-web-marranito.png', '1828ccde7a63cd472684fc744abc09c1.png', '{{ url:site }}files/large/1828ccde7a63cd472684fc744abc09c1.png', '', '.png', 'image/png', '', 180, 180, 17, '', 0, 1379450820, 0),
('ccc3aa272d7c28e', 50, 2, 'i', 'portadaimg.png', '8d2a744cb222be303fae0c583ae21a92.png', '{{ url:site }}files/large/8d2a744cb222be303fae0c583ae21a92.png', '', '.png', 'image/png', '', 851, 315, 633, '', 4, 1378942888, 0),
('cdd836703dfd42a', 69, 2, 'i', 'img_slider.jpg', '8a10760e0d481ffc4c606faec750a483.jpg', '{{ url:site }}files/large/8a10760e0d481ffc4c606faec750a483.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 3, 1379187961, 0),
('d252dd66fb64196', 58, 2, 'i', 'img_servicio1.jpg', '75d85274b157270480ac37be8c80f2be.jpg', '{{ url:site }}files/large/75d85274b157270480ac37be8c80f2be.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 0, 1379158987, 0),
('d27cd53654903d6', 4, 2, 'i', 'home-diseno-web-marranito.png', '23b5ad6446ef8765c221009781b82a31.png', '{{ url:site }}files/large/23b5ad6446ef8765c221009781b82a31.png', '', '.png', 'image/png', '', 180, 180, 17, '', 0, 1377552010, 0),
('d8ccdbbcbbea5fd', 3, 2, 'i', '215_screenshot1.jpg', '409c0aa04e32ce51dee50e87458da535.jpg', '{{ url:site }}files/large/409c0aa04e32ce51dee50e87458da535.jpg', '', '.jpg', 'image/jpeg', '', 1920, 1080, 709, '', 0, 1378850285, 0),
('da3f07fc1574448', 59, 16, 'i', 'marriott-logo.jpg', '55295f07ae80d26c9dbe575fdb3d37c8.jpg', '{{ url:site }}files/large/55295f07ae80d26c9dbe575fdb3d37c8.jpg', '', '.jpg', 'image/jpeg', '', 1093, 1093, 125, '', 0, 1380824329, 0),
('dc239e2e6959da7', 64, 2, 'i', 'img_dest.jpg', 'e16a8189a0d7550e9307da52dab2034e.jpg', '{{ url:site }}files/large/e16a8189a0d7550e9307da52dab2034e.jpg', '', '.jpg', 'image/jpeg', '', 240, 240, 43, '', 0, 1379171496, 0),
('dc87abb17bf6834', 96, 2, 'i', 'medico.jpg', 'e7dfcae8952659ad1e0d3d55fdb56731.jpg', '{{ url:site }}files/large/e7dfcae8952659ad1e0d3d55fdb56731.jpg', '', '.jpg', 'image/jpeg', '', 283, 283, 52, '', 2, 1381246696, 0),
('ddc8ba6bfe2bb30', 64, 2, 'i', 'img_servicio1.jpg', '958435bc911ce7b083e7677768c5370a.jpg', '{{ url:site }}files/large/958435bc911ce7b083e7677768c5370a.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 3, 1380286369, 0),
('e145421c3aaefc8', 59, 16, 'i', 'colsanitas.jpg', 'e2f30cb1ef266dfaa3b4b56baf5b27f3.jpg', '{{ url:site }}files/large/e2f30cb1ef266dfaa3b4b56baf5b27f3.jpg', '', '.jpg', 'image/jpeg', '', 1320, 1320, 160, '', 0, 1380826090, 0),
('e426ad88f946d51', 86, 16, 'i', 'uno.jpg', '51590d823c174f5a8a13bdafc5dc349a.jpg', '{{ url:site }}files/large/51590d823c174f5a8a13bdafc5dc349a.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 3, 1380387160, 0),
('e68144a4900bc53', 57, 2, 'i', 'img_donde.jpg', 'a774c4f28a4b6ad875c186968390c005.jpg', '{{ url:site }}files/large/a774c4f28a4b6ad875c186968390c005.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 3, 1379110085, 0),
('e6c068f7538b9db', 64, 2, 'i', 'img_donde.jpg', '5a0197c030cb124a2877ae3674e58cad.jpg', '{{ url:site }}files/large/5a0197c030cb124a2877ae3674e58cad.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 3, 1380286369, 0),
('e855f2fc6244e77', 58, 16, 'i', 'icontec-01.jpg', '274251165173035b9622eb163516949c.jpg', '{{ url:site }}files/large/274251165173035b9622eb163516949c.jpg', '', '.jpg', 'image/jpeg', '', 568, 568, 89, '', 0, 1380823561, 0),
('ea8d3a108e688d6', 94, 2, 'i', 'img_donde.jpg', '025b78deb3260a367c74b520cca00d8d.jpg', '{{ url:site }}files/large/025b78deb3260a367c74b520cca00d8d.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 8, 1381241493, 0),
('eb8c4564040c555', 3, 2, 'i', 'img_slider.jpg', '93ae47e1185b5a4c9eac2b6da33e089e.jpg', '{{ url:site }}files/large/93ae47e1185b5a4c9eac2b6da33e089e.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1378846131, 0),
('ebd3701c0896a96', 3, 16, 'i', 'img_slider.jpg', '676158f7685348acd04320d6308fb7d5.jpg', '{{ url:site }}files/large/676158f7685348acd04320d6308fb7d5.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 0, 1381178020, 0),
('eeeddcb8445ca53', 77, 2, 'i', 'img_chat.jpg', '3ff752b15ec1c0978f59e3fe28d1eab1.jpg', '{{ url:site }}files/large/3ff752b15ec1c0978f59e3fe28d1eab1.jpg', '', '.jpg', 'image/jpeg', '', 75, 75, 7, '', 6, 1380294717, 0),
('f0c7e8340d8c07f', 3, 2, 'i', 'cd.jpg', '9026b2df53102c759fa291bd79275507.jpg', '{{ url:site }}files/large/9026b2df53102c759fa291bd79275507.jpg', '', '.jpg', 'image/jpeg', '', 960, 523, 113, '', 0, 1378934462, 0),
('f30fdde8eeb10cd', 64, 2, 'i', 'img_servicio1.jpg', 'b7d7a47568f9edb91423ebdcff999ef5.jpg', '{{ url:site }}files/large/b7d7a47568f9edb91423ebdcff999ef5.jpg', '', '.jpg', 'image/jpeg', '', 300, 250, 66, '', 0, 1379171496, 0),
('f3c44f44a264a08', 3, 2, 'i', 'img-slide1.jpg', '1b6937855be56b1766c31709a05a1d5f.jpg', '{{ url:site }}files/large/1b6937855be56b1766c31709a05a1d5f.jpg', '', '.jpg', 'image/jpeg', '', 1598, 677, 226, '', 0, 1378130573, 0),
('f3d5c8b11849cd9', 59, 16, 'i', 'home-diseno-web-marranito.png', 'f73c5e407e467c55b5944d950f4f467c.png', '{{ url:site }}files/large/f73c5e407e467c55b5944d950f4f467c.png', '', '.png', 'image/png', '', 180, 180, 17, '', 0, 1379450843, 0),
('f5effb9ee55b239', 50, 2, 'i', 'img_donde.jpg', '060f7dc11a1689a485f5f06921a342d2.jpg', '{{ url:site }}files/large/060f7dc11a1689a485f5f06921a342d2.jpg', '', '.jpg', 'image/jpeg', '', 940, 400, 239, '', 1, 1381242094, 0),
('f8c8789eab4bf51', 77, 2, 'i', 'dest_lider-3.png', '3258311315eee3389ae655f014f7c785.png', '{{ url:site }}files/large/3258311315eee3389ae655f014f7c785.png', '', '.png', 'image/png', '', 155, 155, 10, '', 1, 1380279760, 0),
('fa82884faa8fa99', 64, 16, 'i', 'captura-de-pantalla-2013-10-07-a-las-11.35_.46_.png', 'a7c9a0ed41452f63f9bba7778c03a02a.png', '{{ url:site }}files/large/a7c9a0ed41452f63f9bba7778c03a02a.png', '', '.png', 'image/png', '', 820, 351, 133, '', 7, 1381163829, 0),
('ff1954e8bacf55a', 3, 2, 'i', 'portadaimg.png', '592447cf2c9281b3f20fade029ca7bd6.png', '{{ url:site }}files/large/592447cf2c9281b3f20fade029ca7bd6.png', '', '.png', 'image/png', '', 851, 315, 633, '', 0, 1378934420, 0),
('ff9db7465f8b7b7', 96, 2, 'i', 'img_slider.jpg', '10cc81ffbff98b90ad90f83bcd8abb89.jpg', '{{ url:site }}files/large/10cc81ffbff98b90ad90f83bcd8abb89.jpg', '', '.jpg', 'image/jpeg', '', 926, 356, 115, '', 2, 1381246743, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_file_folders`
--

DROP TABLE IF EXISTS `default_file_folders`;
CREATE TABLE IF NOT EXISTS `default_file_folders` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=98 ;

--
-- Volcado de datos para la tabla `default_file_folders`
--

INSERT INTO `default_file_folders` (`id`, `parent_id`, `slug`, `name`, `location`, `remote_container`, `date_added`, `sort`, `hidden`) VALUES
(3, 0, 'banner', 'banner', 'local', '', 1377279007, 1377279007, 0),
(4, 0, 'properties', 'Properties', 'local', '', 1377279012, 1377279012, 0),
(29, 0, 'noticias', 'noticias', 'local', '', 1377808005, 1377808005, 0),
(49, 0, 'valores', 'valores', 'local', '', 1378939917, 1378939917, 0),
(50, 0, 'donde', 'donde', 'local', '', 1378942823, 1378942823, 0),
(56, 0, 'services-us', 'services_us', 'local', '', 1379109558, 1379109558, 0),
(57, 0, 'compromisos', 'compromisos', 'local', '', 1379110021, 1379110021, 0),
(58, 0, 'convenios', 'convenios', 'local', '', 1379158161, 1379158161, 0),
(59, 0, 'clientes', 'clientes', 'local', '', 1379158646, 1379158646, 0),
(63, 0, 'faq', 'faq', 'local', '', 1379170005, 1379170005, 0),
(64, 0, 'trabaja', 'trabaja', 'local', '', 1379171305, 1379171305, 0),
(69, 0, 'english', 'english', 'local', '', 1379187689, 1379187689, 0),
(71, 0, 'redes', 'redes', 'local', '', 1379456787, 1379456787, 0),
(72, 0, 'quienes', 'quienes', 'local', '', 1380146835, 1380146835, 0),
(73, 0, 'english-contact', 'english_contact', 'local', '', 1380218278, 1380218278, 0),
(74, 0, 'english-contact-1', 'english_contact-1', 'local', '', 1380222558, 1380222558, 0),
(75, 0, 'english-contact-2', 'english_contact-2', 'local', '', 1380225589, 1380225589, 0),
(77, 0, 'aislados', 'aislados', 'local', '', 1380276468, 1380276468, 0),
(81, 0, 'vacantes-aplicar', 'vacantes_aplicar', 'local', '', 1380322439, 1380322439, 0),
(82, 0, 'banner-1', 'banner-1', 'local', '', 1380322445, 1380322445, 0),
(83, 0, 'vacantes-aplicar-1', 'vacantes_aplicar-1', 'local', '', 1380323260, 1380323260, 0),
(84, 0, 'banner-2', 'banner-2', 'local', '', 1380323267, 1380323267, 0),
(85, 0, 'vacantes-aplicar-2', 'vacantes_aplicar-2', 'local', '', 1380323428, 1380323428, 0),
(86, 0, 'banner-3', 'banner-3', 'local', '', 1380323435, 1380323435, 0),
(90, 0, 'services-us-1', 'services_us-1', 'local', '', 1380346531, 1380346531, 0),
(91, 0, 'services-us-2', 'services_us-2', 'local', '', 1380347070, 1380347070, 0),
(92, 0, 'vacantes-aplicar-3', 'vacantes_aplicar-3', 'local', '', 1380551160, 1380551160, 0),
(93, 0, 'banner-4', 'banner-4', 'local', '', 1380551167, 1380551167, 0),
(94, 0, 'services', 'services', 'local', '', 1381240285, 1381240285, 0),
(95, 0, 'novedades', 'novedades', 'local', '', 1381244861, 1381244861, 0),
(96, 0, 'highlights', 'highlights', 'local', '', 1381246329, 1381246329, 0),
(97, 0, 'estudios', 'estudios', 'local', '', 1381249848, 1381249848, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_groups`
--

DROP TABLE IF EXISTS `default_groups`;
CREATE TABLE IF NOT EXISTS `default_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `default_groups`
--

INSERT INTO `default_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_keywords`
--

DROP TABLE IF EXISTS `default_keywords`;
CREATE TABLE IF NOT EXISTS `default_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_keywords_applied`
--

DROP TABLE IF EXISTS `default_keywords_applied`;
CREATE TABLE IF NOT EXISTS `default_keywords_applied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `keyword_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_migrations`
--

DROP TABLE IF EXISTS `default_migrations`;
CREATE TABLE IF NOT EXISTS `default_migrations` (
  `version` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `default_migrations`
--

INSERT INTO `default_migrations` (`version`) VALUES
(128);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_modules`
--

DROP TABLE IF EXISTS `default_modules`;
CREATE TABLE IF NOT EXISTS `default_modules` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=186 ;

--
-- Volcado de datos para la tabla `default_modules`
--

INSERT INTO `default_modules` (`id`, `name`, `slug`, `version`, `type`, `description`, `skip_xss`, `is_frontend`, `is_backend`, `menu`, `enabled`, `installed`, `is_core`, `updated_on`) VALUES
(1, 'a:25:{s:2:"en";s:8:"Settings";s:2:"ar";s:18:"الإعدادات";s:2:"br";s:15:"Configurações";s:2:"pt";s:15:"Configurações";s:2:"cs";s:10:"Nastavení";s:2:"da";s:13:"Indstillinger";s:2:"de";s:13:"Einstellungen";s:2:"el";s:18:"Ρυθμίσεις";s:2:"es";s:15:"Configuraciones";s:2:"fa";s:14:"تنظیمات";s:2:"fi";s:9:"Asetukset";s:2:"fr";s:11:"Paramètres";s:2:"he";s:12:"הגדרות";s:2:"id";s:10:"Pengaturan";s:2:"it";s:12:"Impostazioni";s:2:"lt";s:10:"Nustatymai";s:2:"nl";s:12:"Instellingen";s:2:"pl";s:10:"Ustawienia";s:2:"ru";s:18:"Настройки";s:2:"sl";s:10:"Nastavitve";s:2:"tw";s:12:"網站設定";s:2:"cn";s:12:"网站设定";s:2:"hu";s:14:"Beállítások";s:2:"th";s:21:"ตั้งค่า";s:2:"se";s:14:"Inställningar";}', 'settings', '1.0.0', NULL, 'a:25:{s:2:"en";s:89:"Allows administrators to update settings like Site Name, messages and email address, etc.";s:2:"ar";s:161:"تمكن المدراء من تحديث الإعدادات كإسم الموقع، والرسائل وعناوين البريد الإلكتروني، .. إلخ.";s:2:"br";s:120:"Permite com que administradores e a equipe consigam trocar as configurações do website incluindo o nome e descrição.";s:2:"pt";s:113:"Permite com que os administradores consigam alterar as configurações do website incluindo o nome e descrição.";s:2:"cs";s:102:"Umožňuje administrátorům měnit nastavení webu jako jeho jméno, zprávy a emailovou adresu apod.";s:2:"da";s:90:"Lader administratorer opdatere indstillinger som sidenavn, beskeder og email adresse, etc.";s:2:"de";s:92:"Erlaubt es Administratoren die Einstellungen der Seite wie Name und Beschreibung zu ändern.";s:2:"el";s:230:"Επιτρέπει στους διαχειριστές να τροποποιήσουν ρυθμίσεις όπως το Όνομα του Ιστοτόπου, τα μηνύματα και τις διευθύνσεις email, κ.α.";s:2:"es";s:131:"Permite a los administradores y al personal configurar los detalles del sitio como el nombre del sitio y la descripción del mismo.";s:2:"fa";s:105:"تنظیمات سایت در این ماژول توسط ادمین هاس سایت انجام می شود";s:2:"fi";s:105:"Mahdollistaa sivuston asetusten muokkaamisen, kuten sivuston nimen, viestit ja sähköpostiosoitteet yms.";s:2:"fr";s:118:"Permet aux admistrateurs de modifier les paramètres du site : nom du site, description, messages, adresse email, etc.";s:2:"he";s:116:"ניהול הגדרות שונות של האתר כגון: שם האתר, הודעות, כתובות דואר וכו";s:2:"id";s:112:"Memungkinkan administrator untuk dapat memperbaharui pengaturan seperti nama situs, pesan dan alamat email, dsb.";s:2:"it";s:109:"Permette agli amministratori di aggiornare impostazioni quali Nome del Sito, messaggi e indirizzo email, etc.";s:2:"lt";s:104:"Leidžia administratoriams keisti puslapio vavadinimą, žinutes, administratoriaus el. pašta ir kitą.";s:2:"nl";s:114:"Maakt het administratoren en medewerkers mogelijk om websiteinstellingen zoals naam en beschrijving te veranderen.";s:2:"pl";s:103:"Umożliwia administratorom zmianę ustawień strony jak nazwa strony, opis, e-mail administratora, itd.";s:2:"ru";s:135:"Управление настройками сайта - Имя сайта, сообщения, почтовые адреса и т.п.";s:2:"sl";s:98:"Dovoljuje administratorjem posodobitev nastavitev kot je Ime strani, sporočil, email naslova itd.";s:2:"tw";s:99:"網站管理者可更新的重要網站設定。例如：網站名稱、訊息、電子郵件等。";s:2:"cn";s:99:"网站管理者可更新的重要网站设定。例如：网站名称、讯息、电子邮件等。";s:2:"hu";s:125:"Lehetővé teszi az adminok számára a beállítások frissítését, mint a weboldal neve, üzenetek, e-mail címek, stb...";s:2:"th";s:232:"ให้ผู้ดูแลระบบสามารถปรับปรุงการตั้งค่าเช่นชื่อเว็บไซต์ ข้อความและอีเมล์เป็นต้น";s:2:"se";s:84:"Administratören kan uppdatera webbplatsens titel, meddelanden och E-postadress etc.";}', 1, 0, 1, 'settings', 1, 1, 1, 1380146621),
(2, 'a:11:{s:2:"en";s:12:"Streams Core";s:2:"pt";s:14:"Núcleo Fluxos";s:2:"fr";s:10:"Noyau Flux";s:2:"el";s:23:"Πυρήνας Ροών";s:2:"se";s:18:"Streams grundmodul";s:2:"tw";s:14:"Streams 核心";s:2:"cn";s:14:"Streams 核心";s:2:"ar";s:31:"الجداول الأساسية";s:2:"it";s:12:"Streams Core";s:2:"fa";s:26:"هسته استریم ها";s:2:"fi";s:13:"Striimit ydin";}', 'streams_core', '1.0.0', NULL, 'a:11:{s:2:"en";s:29:"Core data module for streams.";s:2:"pt";s:37:"Módulo central de dados para fluxos.";s:2:"fr";s:32:"Noyau de données pour les Flux.";s:2:"el";s:113:"Προγραμματιστικός πυρήνας για την λειτουργία ροών δεδομένων.";s:2:"se";s:50:"Streams grundmodul för enklare hantering av data.";s:2:"tw";s:29:"Streams 核心資料模組。";s:2:"cn";s:29:"Streams 核心资料模组。";s:2:"ar";s:57:"وحدة البيانات الأساسية للجداول";s:2:"it";s:17:"Core dello Stream";s:2:"fa";s:48:"ماژول مرکزی برای استریم ها";s:2:"fi";s:48:"Ydin datan hallinoiva moduuli striimejä varten.";}', 1, 0, 0, '0', 1, 1, 1, 1380146621),
(3, 'a:21:{s:2:"en";s:15:"Email Templates";s:2:"ar";s:48:"قوالب الرسائل الإلكترونية";s:2:"br";s:17:"Modelos de e-mail";s:2:"pt";s:17:"Modelos de e-mail";s:2:"da";s:16:"Email skabeloner";s:2:"el";s:22:"Δυναμικά email";s:2:"es";s:19:"Plantillas de email";s:2:"fa";s:26:"قالب های ایمیل";s:2:"fr";s:17:"Modèles d''emails";s:2:"he";s:12:"תבניות";s:2:"id";s:14:"Template Email";s:2:"lt";s:22:"El. laiškų šablonai";s:2:"nl";s:15:"Email sjablonen";s:2:"ru";s:25:"Шаблоны почты";s:2:"sl";s:14:"Email predloge";s:2:"tw";s:12:"郵件範本";s:2:"cn";s:12:"邮件范本";s:2:"hu";s:15:"E-mail sablonok";s:2:"fi";s:25:"Sähköposti viestipohjat";s:2:"th";s:33:"แม่แบบอีเมล";s:2:"se";s:12:"E-postmallar";}', 'templates', '1.1.0', NULL, 'a:21:{s:2:"en";s:46:"Create, edit, and save dynamic email templates";s:2:"ar";s:97:"أنشئ، عدّل واحفظ قوالب البريد الإلكترني الديناميكية.";s:2:"br";s:51:"Criar, editar e salvar modelos de e-mail dinâmicos";s:2:"pt";s:51:"Criar, editar e salvar modelos de e-mail dinâmicos";s:2:"da";s:49:"Opret, redigér og gem dynamiske emailskabeloner.";s:2:"el";s:108:"Δημιουργήστε, επεξεργαστείτε και αποθηκεύστε δυναμικά email.";s:2:"es";s:54:"Crear, editar y guardar plantillas de email dinámicas";s:2:"fa";s:92:"ایحاد، ویرایش و ذخیره ی قالب های ایمیل به صورت پویا";s:2:"fr";s:61:"Créer, éditer et sauver dynamiquement des modèles d''emails";s:2:"he";s:54:"ניהול של תבניות דואר אלקטרוני";s:2:"id";s:55:"Membuat, mengedit, dan menyimpan template email dinamis";s:2:"lt";s:58:"Kurk, tvarkyk ir saugok dinaminius el. laiškų šablonus.";s:2:"nl";s:49:"Maak, bewerk, en beheer dynamische emailsjablonen";s:2:"ru";s:127:"Создавайте, редактируйте и сохраняйте динамические почтовые шаблоны";s:2:"sl";s:52:"Ustvari, uredi in shrani spremenljive email predloge";s:2:"tw";s:61:"新增、編輯與儲存可顯示動態資料的 email 範本";s:2:"cn";s:61:"新增、编辑与储存可显示动态资料的 email 范本";s:2:"hu";s:63:"Csináld, szerkeszd és mentsd el a dinamikus e-mail sablonokat";s:2:"fi";s:66:"Lisää, muokkaa ja tallenna dynaamisia sähköposti viestipohjia.";s:2:"th";s:129:"การสร้างแก้ไขและบันทึกแม่แบบอีเมลแบบไดนามิก";s:2:"se";s:49:"Skapa, redigera och spara dynamiska E-postmallar.";}', 1, 0, 1, 'structure', 1, 1, 1, 1380146621),
(4, 'a:25:{s:2:"en";s:7:"Add-ons";s:2:"ar";s:16:"الإضافات";s:2:"br";s:12:"Complementos";s:2:"pt";s:12:"Complementos";s:2:"cs";s:8:"Doplňky";s:2:"da";s:7:"Add-ons";s:2:"de";s:13:"Erweiterungen";s:2:"el";s:16:"Πρόσθετα";s:2:"es";s:9:"Agregados";s:2:"fa";s:17:"افزونه ها";s:2:"fi";s:9:"Lisäosat";s:2:"fr";s:10:"Extensions";s:2:"he";s:12:"תוספות";s:2:"id";s:7:"Pengaya";s:2:"it";s:7:"Add-ons";s:2:"lt";s:7:"Priedai";s:2:"nl";s:7:"Add-ons";s:2:"pl";s:12:"Rozszerzenia";s:2:"ru";s:20:"Дополнения";s:2:"sl";s:11:"Razširitve";s:2:"tw";s:12:"附加模組";s:2:"cn";s:12:"附加模组";s:2:"hu";s:14:"Bővítmények";s:2:"th";s:27:"ส่วนเสริม";s:2:"se";s:8:"Tillägg";}', 'addons', '2.0.0', NULL, 'a:25:{s:2:"en";s:59:"Allows admins to see a list of currently installed modules.";s:2:"ar";s:91:"تُمكّن المُدراء من معاينة جميع الوحدات المُثبّتة.";s:2:"br";s:75:"Permite aos administradores ver a lista dos módulos instalados atualmente.";s:2:"pt";s:75:"Permite aos administradores ver a lista dos módulos instalados atualmente.";s:2:"cs";s:68:"Umožňuje administrátorům vidět seznam nainstalovaných modulů.";s:2:"da";s:63:"Lader administratorer se en liste over de installerede moduler.";s:2:"de";s:56:"Zeigt Administratoren alle aktuell installierten Module.";s:2:"el";s:152:"Επιτρέπει στους διαχειριστές να προβάλουν μια λίστα των εγκατεστημένων πρόσθετων.";s:2:"es";s:71:"Permite a los administradores ver una lista de los módulos instalados.";s:2:"fa";s:93:"مشاهده لیست افزونه ها و مدیریت آنها برای ادمین سایت";s:2:"fi";s:60:"Listaa järjestelmänvalvojalle käytössä olevat moduulit.";s:2:"fr";s:66:"Permet aux administrateurs de voir la liste des modules installés";s:2:"he";s:160:"נותן אופציה למנהל לראות רשימה של המודולים אשר מותקנים כעת באתר או להתקין מודולים נוספים";s:2:"id";s:57:"Memperlihatkan kepada admin daftar modul yang terinstall.";s:2:"it";s:83:"Permette agli amministratori di vedere una lista dei moduli attualmente installati.";s:2:"lt";s:75:"Vartotojai ir svečiai gali komentuoti jūsų naujienas, puslapius ar foto.";s:2:"nl";s:79:"Stelt admins in staat om een overzicht van geinstalleerde modules te genereren.";s:2:"pl";s:81:"Umożliwiają administratorowi wgląd do listy obecnie zainstalowanych modułów.";s:2:"ru";s:83:"Список модулей, которые установлены на сайте.";s:2:"sl";s:65:"Dovoljuje administratorjem pregled trenutno nameščenih modulov.";s:2:"tw";s:54:"管理員可以檢視目前已經安裝模組的列表";s:2:"cn";s:54:"管理员可以检视目前已经安装模组的列表";s:2:"hu";s:79:"Lehetővé teszi az adminoknak, hogy lássák a telepített modulok listáját.";s:2:"th";s:162:"ช่วยให้ผู้ดูแลระบบดูรายการของโมดูลที่ติดตั้งในปัจจุบัน";s:2:"se";s:67:"Gör det möjligt för administratören att se installerade mouler.";}', 0, 0, 1, '0', 1, 1, 1, 1380146621),
(5, 'a:18:{s:2:"en";s:4:"Blog";s:2:"ar";s:16:"المدوّنة";s:2:"br";s:4:"Blog";s:2:"pt";s:4:"Blog";s:2:"el";s:18:"Ιστολόγιο";s:2:"fa";s:8:"بلاگ";s:2:"he";s:8:"בלוג";s:2:"id";s:4:"Blog";s:2:"lt";s:6:"Blogas";s:2:"pl";s:4:"Blog";s:2:"ru";s:8:"Блог";s:2:"tw";s:6:"文章";s:2:"cn";s:6:"文章";s:2:"hu";s:4:"Blog";s:2:"fi";s:5:"Blogi";s:2:"th";s:15:"บล็อก";s:2:"se";s:5:"Blogg";s:2:"es";s:8:"Noticias";}', 'blog', '2.0.0', NULL, 'a:25:{s:2:"en";s:18:"Post blog entries.";s:2:"ar";s:48:"أنشر المقالات على مدوّنتك.";s:2:"br";s:30:"Escrever publicações de blog";s:2:"pt";s:39:"Escrever e editar publicações no blog";s:2:"cs";s:49:"Publikujte nové články a příspěvky na blog.";s:2:"da";s:17:"Skriv blogindlæg";s:2:"de";s:47:"Veröffentliche neue Artikel und Blog-Einträge";s:2:"sl";s:23:"Objavite blog prispevke";s:2:"fi";s:28:"Kirjoita blogi artikkeleita.";s:2:"el";s:93:"Δημιουργήστε άρθρα και εγγραφές στο ιστολόγιο σας.";s:2:"es";s:54:"Escribe entradas para los artículos y blog (web log).";s:2:"fa";s:44:"مقالات منتشر شده در بلاگ";s:2:"fr";s:34:"Poster des articles d''actualités.";s:2:"he";s:19:"ניהול בלוג";s:2:"id";s:15:"Post entri blog";s:2:"it";s:36:"Pubblica notizie e post per il blog.";s:2:"lt";s:40:"Rašykite naujienas bei blog''o įrašus.";s:2:"nl";s:41:"Post nieuwsartikelen en blogs op uw site.";s:2:"pl";s:27:"Dodawaj nowe wpisy na blogu";s:2:"ru";s:49:"Управление записями блога.";s:2:"tw";s:42:"發表新聞訊息、部落格等文章。";s:2:"cn";s:42:"发表新闻讯息、部落格等文章。";s:2:"th";s:48:"โพสต์รายการบล็อก";s:2:"hu";s:32:"Blog bejegyzések létrehozása.";s:2:"se";s:18:"Inlägg i bloggen.";}', 1, 1, 1, 'content', 1, 1, 1, 1380146621),
(6, 'a:25:{s:2:"en";s:8:"Comments";s:2:"ar";s:18:"التعليقات";s:2:"br";s:12:"Comentários";s:2:"pt";s:12:"Comentários";s:2:"cs";s:11:"Komentáře";s:2:"da";s:11:"Kommentarer";s:2:"de";s:10:"Kommentare";s:2:"el";s:12:"Σχόλια";s:2:"es";s:11:"Comentarios";s:2:"fi";s:9:"Kommentit";s:2:"fr";s:12:"Commentaires";s:2:"fa";s:10:"نظرات";s:2:"he";s:12:"תגובות";s:2:"id";s:8:"Komentar";s:2:"it";s:8:"Commenti";s:2:"lt";s:10:"Komentarai";s:2:"nl";s:8:"Reacties";s:2:"pl";s:10:"Komentarze";s:2:"ru";s:22:"Комментарии";s:2:"sl";s:10:"Komentarji";s:2:"tw";s:6:"回應";s:2:"cn";s:6:"回应";s:2:"hu";s:16:"Hozzászólások";s:2:"th";s:33:"ความคิดเห็น";s:2:"se";s:11:"Kommentarer";}', 'comments', '1.1.0', NULL, 'a:25:{s:2:"en";s:76:"Users and guests can write comments for content like blog, pages and photos.";s:2:"ar";s:152:"يستطيع الأعضاء والزوّار كتابة التعليقات على المُحتوى كالأخبار، والصفحات والصّوَر.";s:2:"br";s:97:"Usuários e convidados podem escrever comentários para quase tudo com suporte nativo ao captcha.";s:2:"pt";s:100:"Utilizadores e convidados podem escrever comentários para quase tudo com suporte nativo ao captcha.";s:2:"cs";s:100:"Uživatelé a hosté mohou psát komentáře k obsahu, např. neovinkám, stránkám a fotografiím.";s:2:"da";s:83:"Brugere og besøgende kan skrive kommentarer til indhold som blog, sider og fotoer.";s:2:"de";s:65:"Benutzer und Gäste können für fast alles Kommentare schreiben.";s:2:"el";s:224:"Οι χρήστες και οι επισκέπτες μπορούν να αφήνουν σχόλια για περιεχόμενο όπως το ιστολόγιο, τις σελίδες και τις φωτογραφίες.";s:2:"es";s:130:"Los usuarios y visitantes pueden escribir comentarios en casi todo el contenido con el soporte de un sistema de captcha incluído.";s:2:"fa";s:168:"کاربران و مهمان ها می توانند نظرات خود را بر روی محتوای سایت در بلاگ و دیگر قسمت ها ارائه دهند";s:2:"fi";s:107:"Käyttäjät ja vieraat voivat kirjoittaa kommentteja eri sisältöihin kuten uutisiin, sivuihin ja kuviin.";s:2:"fr";s:130:"Les utilisateurs et les invités peuvent écrire des commentaires pour quasiment tout grâce au générateur de captcha intégré.";s:2:"he";s:94:"משתמשי האתר יכולים לרשום תגובות למאמרים, תמונות וכו";s:2:"id";s:100:"Pengguna dan pengunjung dapat menuliskan komentaruntuk setiap konten seperti blog, halaman dan foto.";s:2:"it";s:85:"Utenti e visitatori possono scrivere commenti ai contenuti quali blog, pagine e foto.";s:2:"lt";s:75:"Vartotojai ir svečiai gali komentuoti jūsų naujienas, puslapius ar foto.";s:2:"nl";s:52:"Gebruikers en gasten kunnen reageren op bijna alles.";s:2:"pl";s:93:"Użytkownicy i goście mogą dodawać komentarze z wbudowanym systemem zabezpieczeń captcha.";s:2:"ru";s:187:"Пользователи и гости могут добавлять комментарии к новостям, информационным страницам и фотографиям.";s:2:"sl";s:89:"Uporabniki in obiskovalci lahko vnesejo komentarje na vsebino kot je blok, stra ali slike";s:2:"tw";s:75:"用戶和訪客可以針對新聞、頁面與照片等內容發表回應。";s:2:"cn";s:75:"用户和访客可以针对新闻、页面与照片等内容发表回应。";s:2:"hu";s:117:"A felhasználók és a vendégek hozzászólásokat írhatnak a tartalomhoz (bejegyzésekhez, oldalakhoz, fotókhoz).";s:2:"th";s:240:"ผู้ใช้งานและผู้เยี่ยมชมสามารถเขียนความคิดเห็นในเนื้อหาของหน้าเว็บบล็อกและภาพถ่าย";s:2:"se";s:98:"Användare och besökare kan skriva kommentarer till innehåll som blogginlägg, sidor och bilder.";}', 0, 0, 1, 'content', 1, 1, 1, 1380146621),
(157, 'a:1:{s:2:"en";s:12:"Contáctanos";}', 'contact', '1.0', NULL, 'a:1:{s:2:"en";s:12:"Contáctanos";}', 0, 1, 1, '0', 1, 1, 0, 1380282878),
(8, 'a:8:{s:2:"en";s:7:"Domains";s:2:"el";s:7:"Domains";s:2:"fr";s:8:"Domaines";s:2:"se";s:8:"Domäner";s:2:"it";s:6:"Domini";s:2:"ar";s:27:"أسماء النطاقات";s:2:"tw";s:6:"網域";s:2:"cn";s:6:"网域";}', 'domains', '1.0.0', NULL, 'a:8:{s:2:"en";s:39:"Create domain aliases for your website.";s:2:"el";s:91:"Διαχειριστείτε συνώνυμα domain για τον ιστότοπό σας.";s:2:"fr";s:47:"Créer des alias de domaine pour votre site web";s:2:"se";s:36:"Skapa domänalias för din webbplats";s:2:"it";s:26:"Crea alias per il tuo sito";s:2:"ar";s:57:"أنشئ أسماء نطاقات بديلة لموقعك.";s:2:"tw";s:33:"為您的網站建立網域別名";s:2:"cn";s:33:"为您的网站建立网域别名";}', 0, 0, 1, 'structure', 1, 1, 1, 1380146621),
(9, 'a:24:{s:2:"en";s:5:"Files";s:2:"ar";s:16:"الملفّات";s:2:"br";s:8:"Arquivos";s:2:"pt";s:9:"Ficheiros";s:2:"cs";s:7:"Soubory";s:2:"da";s:5:"Filer";s:2:"de";s:7:"Dateien";s:2:"el";s:12:"Αρχεία";s:2:"es";s:8:"Archivos";s:2:"fa";s:13:"فایل ها";s:2:"fi";s:9:"Tiedostot";s:2:"fr";s:8:"Fichiers";s:2:"he";s:10:"קבצים";s:2:"id";s:4:"File";s:2:"it";s:4:"File";s:2:"lt";s:6:"Failai";s:2:"nl";s:9:"Bestanden";s:2:"ru";s:10:"Файлы";s:2:"sl";s:8:"Datoteke";s:2:"tw";s:6:"檔案";s:2:"cn";s:6:"档案";s:2:"hu";s:7:"Fájlok";s:2:"th";s:12:"ไฟล์";s:2:"se";s:5:"Filer";}', 'files', '2.0.0', NULL, 'a:24:{s:2:"en";s:40:"Manages files and folders for your site.";s:2:"ar";s:50:"إدارة ملفات ومجلّدات موقعك.";s:2:"br";s:53:"Permite gerenciar facilmente os arquivos de seu site.";s:2:"pt";s:59:"Permite gerir facilmente os ficheiros e pastas do seu site.";s:2:"cs";s:43:"Spravujte soubory a složky na vašem webu.";s:2:"da";s:41:"Administrer filer og mapper for dit site.";s:2:"de";s:35:"Verwalte Dateien und Verzeichnisse.";s:2:"el";s:100:"Διαχειρίζεται αρχεία και φακέλους για το ιστότοπό σας.";s:2:"es";s:43:"Administra archivos y carpetas en tu sitio.";s:2:"fa";s:79:"مدیریت فایل های چند رسانه ای و فولدر ها سایت";s:2:"fi";s:43:"Hallitse sivustosi tiedostoja ja kansioita.";s:2:"fr";s:46:"Gérer les fichiers et dossiers de votre site.";s:2:"he";s:47:"ניהול תיקיות וקבצים שבאתר";s:2:"id";s:42:"Mengatur file dan folder dalam situs Anda.";s:2:"it";s:38:"Gestisci file e cartelle del tuo sito.";s:2:"lt";s:28:"Katalogų ir bylų valdymas.";s:2:"nl";s:41:"Beheer bestanden en mappen op uw website.";s:2:"ru";s:78:"Управление файлами и папками вашего сайта.";s:2:"sl";s:38:"Uredi datoteke in mape na vaši strani";s:2:"tw";s:33:"管理網站中的檔案與目錄";s:2:"cn";s:33:"管理网站中的档案与目录";s:2:"hu";s:41:"Fájlok és mappák kezelése az oldalon.";s:2:"th";s:141:"บริหารจัดการไฟล์และโฟลเดอร์สำหรับเว็บไซต์ของคุณ";s:2:"se";s:45:"Hanterar filer och mappar för din webbplats.";}', 0, 0, 1, 'content', 1, 1, 1, 1380146621),
(10, 'a:24:{s:2:"en";s:6:"Groups";s:2:"ar";s:18:"المجموعات";s:2:"br";s:6:"Grupos";s:2:"pt";s:6:"Grupos";s:2:"cs";s:7:"Skupiny";s:2:"da";s:7:"Grupper";s:2:"de";s:7:"Gruppen";s:2:"el";s:12:"Ομάδες";s:2:"es";s:6:"Grupos";s:2:"fa";s:13:"گروه ها";s:2:"fi";s:7:"Ryhmät";s:2:"fr";s:7:"Groupes";s:2:"he";s:12:"קבוצות";s:2:"id";s:4:"Grup";s:2:"it";s:6:"Gruppi";s:2:"lt";s:7:"Grupės";s:2:"nl";s:7:"Groepen";s:2:"ru";s:12:"Группы";s:2:"sl";s:7:"Skupine";s:2:"tw";s:6:"群組";s:2:"cn";s:6:"群组";s:2:"hu";s:9:"Csoportok";s:2:"th";s:15:"กลุ่ม";s:2:"se";s:7:"Grupper";}', 'groups', '1.0.0', NULL, 'a:24:{s:2:"en";s:54:"Users can be placed into groups to manage permissions.";s:2:"ar";s:100:"يمكن وضع المستخدمين في مجموعات لتسهيل إدارة صلاحياتهم.";s:2:"br";s:72:"Usuários podem ser inseridos em grupos para gerenciar suas permissões.";s:2:"pt";s:74:"Utilizadores podem ser inseridos em grupos para gerir as suas permissões.";s:2:"cs";s:77:"Uživatelé mohou být rozřazeni do skupin pro lepší správu oprávnění.";s:2:"da";s:49:"Brugere kan inddeles i grupper for adgangskontrol";s:2:"de";s:85:"Benutzer können zu Gruppen zusammengefasst werden um diesen Zugriffsrechte zu geben.";s:2:"el";s:168:"Οι χρήστες μπορούν να τοποθετηθούν σε ομάδες και έτσι να διαχειριστείτε τα δικαιώματά τους.";s:2:"es";s:75:"Los usuarios podrán ser colocados en grupos para administrar sus permisos.";s:2:"fa";s:149:"کاربرها می توانند در گروه های ساماندهی شوند تا بتوان اجازه های مختلفی را ایجاد کرد";s:2:"fi";s:84:"Käyttäjät voidaan liittää ryhmiin, jotta käyttöoikeuksia voidaan hallinnoida.";s:2:"fr";s:82:"Les utilisateurs peuvent appartenir à des groupes afin de gérer les permissions.";s:2:"he";s:62:"נותן אפשרות לאסוף משתמשים לקבוצות";s:2:"id";s:68:"Pengguna dapat dikelompokkan ke dalam grup untuk mengatur perizinan.";s:2:"it";s:69:"Gli utenti possono essere inseriti in gruppi per gestirne i permessi.";s:2:"lt";s:67:"Vartotojai gali būti priskirti grupei tam, kad valdyti jų teises.";s:2:"nl";s:73:"Gebruikers kunnen in groepen geplaatst worden om rechten te kunnen geven.";s:2:"ru";s:134:"Пользователей можно объединять в группы, для управления правами доступа.";s:2:"sl";s:64:"Uporabniki so lahko razvrščeni v skupine za urejanje dovoljenj";s:2:"tw";s:45:"用戶可以依群組分類並管理其權限";s:2:"cn";s:45:"用户可以依群组分类并管理其权限";s:2:"hu";s:73:"A felhasználók csoportokba rendezhetőek a jogosultságok kezelésére.";s:2:"th";s:84:"สามารถวางผู้ใช้ลงในกลุ่มเพื่";s:2:"se";s:76:"Användare kan delas in i grupper för att hantera roller och behörigheter.";}', 0, 0, 1, 'users', 1, 1, 1, 1380146621),
(11, 'a:17:{s:2:"en";s:8:"Keywords";s:2:"ar";s:21:"كلمات البحث";s:2:"br";s:14:"Palavras-chave";s:2:"pt";s:14:"Palavras-chave";s:2:"da";s:9:"Nøgleord";s:2:"el";s:27:"Λέξεις Κλειδιά";s:2:"fa";s:21:"کلمات کلیدی";s:2:"fr";s:10:"Mots-Clés";s:2:"id";s:10:"Kata Kunci";s:2:"nl";s:14:"Sleutelwoorden";s:2:"tw";s:6:"鍵詞";s:2:"cn";s:6:"键词";s:2:"hu";s:11:"Kulcsszavak";s:2:"fi";s:10:"Avainsanat";s:2:"sl";s:15:"Ključne besede";s:2:"th";s:15:"คำค้น";s:2:"se";s:9:"Nyckelord";}', 'keywords', '1.1.0', NULL, 'a:17:{s:2:"en";s:71:"Maintain a central list of keywords to label and organize your content.";s:2:"ar";s:124:"أنشئ مجموعة من كلمات البحث التي تستطيع من خلالها وسم وتنظيم المحتوى.";s:2:"br";s:85:"Mantém uma lista central de palavras-chave para rotular e organizar o seu conteúdo.";s:2:"pt";s:85:"Mantém uma lista central de palavras-chave para rotular e organizar o seu conteúdo.";s:2:"da";s:72:"Vedligehold en central liste af nøgleord for at organisere dit indhold.";s:2:"el";s:181:"Συντηρεί μια κεντρική λίστα από λέξεις κλειδιά για να οργανώνετε μέσω ετικετών το περιεχόμενό σας.";s:2:"fa";s:110:"حفظ و نگهداری لیست مرکزی از کلمات کلیدی برای سازماندهی محتوا";s:2:"fr";s:87:"Maintenir une liste centralisée de Mots-Clés pour libeller et organiser vos contenus.";s:2:"id";s:71:"Memantau daftar kata kunci untuk melabeli dan mengorganisasikan konten.";s:2:"nl";s:91:"Beheer een centrale lijst van sleutelwoorden om uw content te categoriseren en organiseren.";s:2:"tw";s:64:"集中管理可用於標題與內容的鍵詞(keywords)列表。";s:2:"cn";s:64:"集中管理可用于标题与内容的键词(keywords)列表。";s:2:"hu";s:65:"Ez egy központi kulcsszó lista a cimkékhez és a tartalmakhoz.";s:2:"fi";s:92:"Hallinnoi keskitettyä listaa avainsanoista merkitäksesi ja järjestelläksesi sisältöä.";s:2:"sl";s:82:"Vzdržuj centralni seznam ključnih besed za označevanje in ogranizacijo vsebine.";s:2:"th";s:189:"ศูนย์กลางการปรับปรุงคำค้นในการติดฉลากและจัดระเบียบเนื้อหาของคุณ";s:2:"se";s:61:"Hantera nyckelord för att organisera webbplatsens innehåll.";}', 0, 0, 1, 'data', 1, 1, 1, 1380146621),
(12, 'a:15:{s:2:"en";s:11:"Maintenance";s:2:"pt";s:12:"Manutenção";s:2:"ar";s:14:"الصيانة";s:2:"el";s:18:"Συντήρηση";s:2:"hu";s:13:"Karbantartás";s:2:"fa";s:15:"نگه داری";s:2:"fi";s:9:"Ylläpito";s:2:"fr";s:11:"Maintenance";s:2:"id";s:12:"Pemeliharaan";s:2:"it";s:12:"Manutenzione";s:2:"se";s:10:"Underhåll";s:2:"sl";s:12:"Vzdrževanje";s:2:"th";s:39:"การบำรุงรักษา";s:2:"tw";s:6:"維護";s:2:"cn";s:6:"维护";}', 'maintenance', '1.0.0', NULL, 'a:15:{s:2:"en";s:63:"Manage the site cache and export information from the database.";s:2:"pt";s:68:"Gerir o cache do seu site e exportar informações da base de dados.";s:2:"ar";s:81:"حذف عناصر الذاكرة المخبأة عبر واجهة الإدارة.";s:2:"el";s:142:"Διαγραφή αντικειμένων προσωρινής αποθήκευσης μέσω της περιοχής διαχείρισης.";s:2:"id";s:60:"Mengatur cache situs dan mengexport informasi dari database.";s:2:"it";s:65:"Gestisci la cache del sito e esporta le informazioni dal database";s:2:"fa";s:73:"مدیریت کش سایت و صدور اطلاعات از دیتابیس";s:2:"fr";s:71:"Gérer le cache du site et exporter les contenus de la base de données";s:2:"fi";s:59:"Hallinoi sivuston välimuistia ja vie tietoa tietokannasta.";s:2:"hu";s:66:"Az oldal gyorsítótár kezelése és az adatbázis exportálása.";s:2:"se";s:76:"Underhåll webbplatsens cache och exportera data från webbplatsens databas.";s:2:"sl";s:69:"Upravljaj s predpomnilnikom strani (cache) in izvozi podatke iz baze.";s:2:"th";s:150:"การจัดการแคชเว็บไซต์และข้อมูลการส่งออกจากฐานข้อมูล";s:2:"tw";s:45:"經由管理介面手動刪除暫存資料。";s:2:"cn";s:45:"经由管理介面手动删除暂存资料。";}', 0, 0, 1, 'data', 1, 1, 1, 1380146621),
(13, 'a:25:{s:2:"en";s:10:"Navigation";s:2:"ar";s:14:"الروابط";s:2:"br";s:11:"Navegação";s:2:"pt";s:11:"Navegação";s:2:"cs";s:8:"Navigace";s:2:"da";s:10:"Navigation";s:2:"de";s:10:"Navigation";s:2:"el";s:16:"Πλοήγηση";s:2:"es";s:11:"Navegación";s:2:"fa";s:11:"منو ها";s:2:"fi";s:10:"Navigointi";s:2:"fr";s:10:"Navigation";s:2:"he";s:10:"ניווט";s:2:"id";s:8:"Navigasi";s:2:"it";s:11:"Navigazione";s:2:"lt";s:10:"Navigacija";s:2:"nl";s:9:"Navigatie";s:2:"pl";s:9:"Nawigacja";s:2:"ru";s:18:"Навигация";s:2:"sl";s:10:"Navigacija";s:2:"tw";s:12:"導航選單";s:2:"cn";s:12:"导航选单";s:2:"th";s:36:"ตัวช่วยนำทาง";s:2:"hu";s:11:"Navigáció";s:2:"se";s:10:"Navigation";}', 'navigation', '1.1.0', NULL, 'a:25:{s:2:"en";s:78:"Manage links on navigation menus and all the navigation groups they belong to.";s:2:"ar";s:85:"إدارة روابط وقوائم ومجموعات الروابط في الموقع.";s:2:"br";s:91:"Gerenciar links do menu de navegação e todos os grupos de navegação pertencentes a ele.";s:2:"pt";s:93:"Gerir todos os grupos dos menus de navegação e os links de navegação pertencentes a eles.";s:2:"cs";s:73:"Správa odkazů v navigaci a všech souvisejících navigačních skupin.";s:2:"da";s:82:"Håndtér links på navigationsmenuerne og alle navigationsgrupperne de tilhører.";s:2:"de";s:76:"Verwalte Links in Navigationsmenüs und alle zugehörigen Navigationsgruppen";s:2:"el";s:207:"Διαχειριστείτε τους συνδέσμους στα μενού πλοήγησης και όλες τις ομάδες συνδέσμων πλοήγησης στις οποίες ανήκουν.";s:2:"es";s:102:"Administra links en los menús de navegación y en todos los grupos de navegación al cual pertenecen.";s:2:"fa";s:68:"مدیریت منو ها و گروه های مربوط به آنها";s:2:"fi";s:91:"Hallitse linkkejä navigointi valikoissa ja kaikkia navigointi ryhmiä, joihin ne kuuluvat.";s:2:"fr";s:97:"Gérer les liens du menu Navigation et tous les groupes de navigation auxquels ils appartiennent.";s:2:"he";s:73:"ניהול שלוחות תפריטי ניווט וקבוצות ניווט";s:2:"id";s:73:"Mengatur tautan pada menu navigasi dan semua pengelompokan grup navigasi.";s:2:"it";s:97:"Gestisci i collegamenti dei menu di navigazione e tutti i gruppi di navigazione da cui dipendono.";s:2:"lt";s:95:"Tvarkyk nuorodas navigacijų menių ir visas navigacijų grupes kurioms tos nuorodos priklauso.";s:2:"nl";s:92:"Beheer koppelingen op de navigatiemenu&apos;s en alle navigatiegroepen waar ze onder vallen.";s:2:"pl";s:95:"Zarządzaj linkami w menu nawigacji oraz wszystkimi grupami nawigacji do których one należą.";s:2:"ru";s:136:"Управление ссылками в меню навигации и группах, к которым они принадлежат.";s:2:"sl";s:64:"Uredi povezave v meniju in vse skupine povezav ki jim pripadajo.";s:2:"tw";s:72:"管理導航選單中的連結，以及它們所隸屬的導航群組。";s:2:"cn";s:72:"管理导航选单中的连结，以及它们所隶属的导航群组。";s:2:"th";s:108:"จัดการการเชื่อมโยงนำทางและกลุ่มนำทาง";s:2:"se";s:33:"Hantera länkar och länkgrupper.";s:2:"hu";s:100:"Linkek kezelése a navigációs menükben és a navigációs csoportok kezelése, amikhez tartoznak.";}', 0, 0, 1, 'structure', 1, 1, 1, 1380146621),
(14, 'a:25:{s:2:"en";s:5:"Pages";s:2:"ar";s:14:"الصفحات";s:2:"br";s:8:"Páginas";s:2:"pt";s:8:"Páginas";s:2:"cs";s:8:"Stránky";s:2:"da";s:5:"Sider";s:2:"de";s:6:"Seiten";s:2:"el";s:14:"Σελίδες";s:2:"es";s:8:"Páginas";s:2:"fa";s:14:"صفحه ها ";s:2:"fi";s:5:"Sivut";s:2:"fr";s:5:"Pages";s:2:"he";s:8:"דפים";s:2:"id";s:7:"Halaman";s:2:"it";s:6:"Pagine";s:2:"lt";s:9:"Puslapiai";s:2:"nl";s:13:"Pagina&apos;s";s:2:"pl";s:6:"Strony";s:2:"ru";s:16:"Страницы";s:2:"sl";s:6:"Strani";s:2:"tw";s:6:"頁面";s:2:"cn";s:6:"页面";s:2:"hu";s:7:"Oldalak";s:2:"th";s:21:"หน้าเพจ";s:2:"se";s:5:"Sidor";}', 'pages', '2.2.0', NULL, 'a:25:{s:2:"en";s:55:"Add custom pages to the site with any content you want.";s:2:"ar";s:99:"إضافة صفحات مُخصّصة إلى الموقع تحتوي أية مُحتوى تريده.";s:2:"br";s:82:"Adicionar páginas personalizadas ao site com qualquer conteúdo que você queira.";s:2:"pt";s:86:"Adicionar páginas personalizadas ao seu site com qualquer conteúdo que você queira.";s:2:"cs";s:74:"Přidávejte vlastní stránky na web s jakýmkoliv obsahem budete chtít.";s:2:"da";s:71:"Tilføj brugerdefinerede sider til dit site med det indhold du ønsker.";s:2:"de";s:49:"Füge eigene Seiten mit anpassbaren Inhalt hinzu.";s:2:"el";s:152:"Προσθέστε και επεξεργαστείτε σελίδες στον ιστότοπό σας με ό,τι περιεχόμενο θέλετε.";s:2:"es";s:77:"Agrega páginas customizadas al sitio con cualquier contenido que tu quieras.";s:2:"fa";s:96:"ایحاد صفحات جدید و دلخواه با هر محتوایی که دوست دارید";s:2:"fi";s:47:"Lisää mitä tahansa sisältöä sivustollesi.";s:2:"fr";s:89:"Permet d''ajouter sur le site des pages personalisées avec le contenu que vous souhaitez.";s:2:"he";s:35:"ניהול דפי תוכן האתר";s:2:"id";s:75:"Menambahkan halaman ke dalam situs dengan konten apapun yang Anda perlukan.";s:2:"it";s:73:"Aggiungi pagine personalizzate al sito con qualsiesi contenuto tu voglia.";s:2:"lt";s:46:"Pridėkite nuosavus puslapius betkokio turinio";s:2:"nl";s:70:"Voeg aangepaste pagina&apos;s met willekeurige inhoud aan de site toe.";s:2:"pl";s:53:"Dodaj własne strony z dowolną treścią do witryny.";s:2:"ru";s:134:"Управление информационными страницами сайта, с произвольным содержимым.";s:2:"sl";s:44:"Dodaj stran s kakršno koli vsebino želite.";s:2:"tw";s:39:"為您的網站新增自定的頁面。";s:2:"cn";s:39:"为您的网站新增自定的页面。";s:2:"th";s:168:"เพิ่มหน้าเว็บที่กำหนดเองไปยังเว็บไซต์ของคุณตามที่ต้องการ";s:2:"hu";s:67:"Saját oldalak hozzáadása a weboldalhoz, akármilyen tartalommal.";s:2:"se";s:39:"Lägg till egna sidor till webbplatsen.";}', 1, 1, 1, 'content', 1, 1, 1, 1380146621),
(15, 'a:25:{s:2:"en";s:11:"Permissions";s:2:"ar";s:18:"الصلاحيات";s:2:"br";s:11:"Permissões";s:2:"pt";s:11:"Permissões";s:2:"cs";s:12:"Oprávnění";s:2:"da";s:14:"Adgangskontrol";s:2:"de";s:14:"Zugriffsrechte";s:2:"el";s:20:"Δικαιώματα";s:2:"es";s:8:"Permisos";s:2:"fa";s:15:"اجازه ها";s:2:"fi";s:16:"Käyttöoikeudet";s:2:"fr";s:11:"Permissions";s:2:"he";s:12:"הרשאות";s:2:"id";s:9:"Perizinan";s:2:"it";s:8:"Permessi";s:2:"lt";s:7:"Teisės";s:2:"nl";s:15:"Toegangsrechten";s:2:"pl";s:11:"Uprawnienia";s:2:"ru";s:25:"Права доступа";s:2:"sl";s:10:"Dovoljenja";s:2:"tw";s:6:"權限";s:2:"cn";s:6:"权限";s:2:"hu";s:14:"Jogosultságok";s:2:"th";s:18:"สิทธิ์";s:2:"se";s:13:"Behörigheter";}', 'permissions', '1.0.0', NULL, 'a:25:{s:2:"en";s:68:"Control what type of users can see certain sections within the site.";s:2:"ar";s:127:"التحكم بإعطاء الصلاحيات للمستخدمين للوصول إلى أقسام الموقع المختلفة.";s:2:"br";s:68:"Controle quais tipos de usuários podem ver certas seções no site.";s:2:"pt";s:75:"Controle quais os tipos de utilizadores podem ver certas secções no site.";s:2:"cs";s:93:"Spravujte oprávnění pro jednotlivé typy uživatelů a ke kterým sekcím mají přístup.";s:2:"da";s:72:"Kontroller hvilken type brugere der kan se bestemte sektioner på sitet.";s:2:"de";s:70:"Regelt welche Art von Benutzer welche Sektion in der Seite sehen kann.";s:2:"el";s:180:"Ελέγξτε τα δικαιώματα χρηστών και ομάδων χρηστών όσο αφορά σε διάφορες λειτουργίες του ιστοτόπου.";s:2:"es";s:81:"Controla que tipo de usuarios pueden ver secciones específicas dentro del sitio.";s:2:"fa";s:59:"مدیریت اجازه های گروه های کاربری";s:2:"fi";s:72:"Hallitse minkä tyyppisiin osioihin käyttäjät pääsevät sivustolla.";s:2:"fr";s:104:"Permet de définir les autorisations des groupes d''utilisateurs pour afficher les différentes sections.";s:2:"he";s:75:"ניהול הרשאות כניסה לאיזורים מסוימים באתר";s:2:"id";s:76:"Mengontrol tipe pengguna mana yang dapat mengakses suatu bagian dalam situs.";s:2:"it";s:78:"Controlla che tipo di utenti posssono accedere a determinate sezioni del sito.";s:2:"lt";s:72:"Kontroliuokite kokio tipo varotojai kokią dalį puslapio gali pasiekti.";s:2:"nl";s:71:"Bepaal welke typen gebruikers toegang hebben tot gedeeltes van de site.";s:2:"pl";s:79:"Ustaw, którzy użytkownicy mogą mieć dostęp do odpowiednich sekcji witryny.";s:2:"ru";s:209:"Управление правами доступа, ограничение доступа определённых групп пользователей к произвольным разделам сайта.";s:2:"sl";s:85:"Uredite dovoljenja kateri tip uporabnika lahko vidi določena področja vaše strani.";s:2:"tw";s:81:"用來控制不同類別的用戶，設定其瀏覽特定網站內容的權限。";s:2:"cn";s:81:"用来控制不同类别的用户，设定其浏览特定网站内容的权限。";s:2:"hu";s:129:"A felhasználók felügyelet alatt tartására, hogy milyen típusú felhasználók, mit láthatnak, mely szakaszain az oldalnak.";s:2:"th";s:117:"ควบคุมว่าผู้ใช้งานจะเห็นหมวดหมู่ไหนบ้าง";s:2:"se";s:27:"Hantera gruppbehörigheter.";}', 0, 0, 1, 'users', 1, 1, 1, 1380146621),
(16, 'a:24:{s:2:"en";s:9:"Redirects";s:2:"ar";s:18:"التوجيهات";s:2:"br";s:17:"Redirecionamentos";s:2:"pt";s:17:"Redirecionamentos";s:2:"cs";s:16:"Přesměrování";s:2:"da";s:13:"Omadressering";s:2:"el";s:30:"Ανακατευθύνσεις";s:2:"es";s:13:"Redirecciones";s:2:"fa";s:17:"انتقال ها";s:2:"fi";s:18:"Uudelleenohjaukset";s:2:"fr";s:12:"Redirections";s:2:"he";s:12:"הפניות";s:2:"id";s:8:"Redirect";s:2:"it";s:11:"Reindirizzi";s:2:"lt";s:14:"Peradresavimai";s:2:"nl";s:12:"Verwijzingen";s:2:"ru";s:30:"Перенаправления";s:2:"sl";s:12:"Preusmeritve";s:2:"tw";s:6:"轉址";s:2:"cn";s:6:"转址";s:2:"hu";s:17:"Átirányítások";s:2:"pl";s:14:"Przekierowania";s:2:"th";s:42:"เปลี่ยนเส้นทาง";s:2:"se";s:14:"Omdirigeringar";}', 'redirects', '1.0.0', NULL, 'a:24:{s:2:"en";s:33:"Redirect from one URL to another.";s:2:"ar";s:47:"التوجيه من رابط URL إلى آخر.";s:2:"br";s:39:"Redirecionamento de uma URL para outra.";s:2:"pt";s:40:"Redirecionamentos de uma URL para outra.";s:2:"cs";s:43:"Přesměrujte z jedné adresy URL na jinou.";s:2:"da";s:35:"Omadresser fra en URL til en anden.";s:2:"el";s:81:"Ανακατευθείνετε μια διεύθυνση URL σε μια άλλη";s:2:"es";s:34:"Redireccionar desde una URL a otra";s:2:"fa";s:63:"انتقال دادن یک صفحه به یک آدرس دیگر";s:2:"fi";s:45:"Uudelleenohjaa käyttäjän paikasta toiseen.";s:2:"fr";s:34:"Redirection d''une URL à un autre.";s:2:"he";s:43:"הפניות מכתובת אחת לאחרת";s:2:"id";s:40:"Redirect dari satu URL ke URL yang lain.";s:2:"it";s:35:"Reindirizza da una URL ad un altra.";s:2:"lt";s:56:"Peradresuokite puslapį iš vieno adreso (URL) į kitą.";s:2:"nl";s:38:"Verwijs vanaf een URL naar een andere.";s:2:"ru";s:78:"Перенаправления с одного адреса на другой.";s:2:"sl";s:44:"Preusmeritev iz enega URL naslova na drugega";s:2:"tw";s:33:"將網址轉址、重新定向。";s:2:"cn";s:33:"将网址转址、重新定向。";s:2:"hu";s:38:"Egy URL átirányítása egy másikra.";s:2:"pl";s:44:"Przekierowanie z jednego adresu URL na inny.";s:2:"th";s:123:"เปลี่ยนเส้นทางจากที่หนึ่งไปยังอีกที่หนึ่ง";s:2:"se";s:38:"Omdirigera från en URL till en annan.";}', 0, 0, 1, 'structure', 1, 1, 1, 1380146621),
(17, 'a:9:{s:2:"en";s:6:"Search";s:2:"fr";s:9:"Recherche";s:2:"se";s:4:"Sök";s:2:"ar";s:10:"البحث";s:2:"tw";s:6:"搜尋";s:2:"cn";s:6:"搜寻";s:2:"it";s:7:"Ricerca";s:2:"fa";s:10:"جستجو";s:2:"fi";s:4:"Etsi";}', 'search', '1.0.0', NULL, 'a:9:{s:2:"en";s:72:"Search through various types of content with this modular search system.";s:2:"fr";s:84:"Rechercher parmi différents types de contenus avec système de recherche modulaire.";s:2:"se";s:36:"Sök igenom olika typer av innehåll";s:2:"ar";s:102:"ابحث في أنواع مختلفة من المحتوى باستخدام نظام البحث هذا.";s:2:"tw";s:63:"此模組可用以搜尋網站中不同類型的資料內容。";s:2:"cn";s:63:"此模组可用以搜寻网站中不同类型的资料内容。";s:2:"it";s:71:"Cerca tra diversi tipi di contenuti con il sistema di reicerca modulare";s:2:"fa";s:115:"توسط این ماژول می توانید در محتواهای مختلف وبسایت جستجو نمایید.";s:2:"fi";s:76:"Etsi eri tyypistä sisältöä tällä modulaarisella hakujärjestelmällä.";}', 0, 0, 0, '0', 1, 1, 1, 1380146621),
(18, 'a:20:{s:2:"en";s:7:"Sitemap";s:2:"ar";s:23:"خريطة الموقع";s:2:"br";s:12:"Mapa do Site";s:2:"pt";s:12:"Mapa do Site";s:2:"de";s:7:"Sitemap";s:2:"el";s:31:"Χάρτης Ιστότοπου";s:2:"es";s:14:"Mapa del Sitio";s:2:"fa";s:17:"نقشه سایت";s:2:"fi";s:10:"Sivukartta";s:2:"fr";s:12:"Plan du site";s:2:"id";s:10:"Peta Situs";s:2:"it";s:14:"Mappa del sito";s:2:"lt";s:16:"Svetainės medis";s:2:"nl";s:7:"Sitemap";s:2:"ru";s:21:"Карта сайта";s:2:"tw";s:12:"網站地圖";s:2:"cn";s:12:"网站地图";s:2:"th";s:21:"ไซต์แมพ";s:2:"hu";s:13:"Oldaltérkép";s:2:"se";s:9:"Sajtkarta";}', 'sitemap', '1.3.0', NULL, 'a:21:{s:2:"en";s:87:"The sitemap module creates an index of all pages and an XML sitemap for search engines.";s:2:"ar";s:120:"وحدة خريطة الموقع تنشئ فهرساً لجميع الصفحات وملف XML لمحركات البحث.";s:2:"br";s:102:"O módulo de mapa do site cria um índice de todas as páginas e um sitemap XML para motores de busca.";s:2:"pt";s:102:"O módulo do mapa do site cria um índice de todas as páginas e um sitemap XML para motores de busca.";s:2:"da";s:86:"Sitemapmodulet opretter et indeks over alle sider og et XML sitemap til søgemaskiner.";s:2:"de";s:92:"Die Sitemap Modul erstellt einen Index aller Seiten und eine XML-Sitemap für Suchmaschinen.";s:2:"el";s:190:"Δημιουργεί έναν κατάλογο όλων των σελίδων και έναν χάρτη σελίδων σε μορφή XML για τις μηχανές αναζήτησης.";s:2:"es";s:111:"El módulo de mapa crea un índice de todas las páginas y un mapa del sitio XML para los motores de búsqueda.";s:2:"fa";s:150:"ماژول نقشه سایت یک لیست از همه ی صفحه ها به فرمت فایل XML برای موتور های جستجو می سازد";s:2:"fi";s:82:"sivukartta moduuli luo hakemisto kaikista sivuista ja XML sivukartta hakukoneille.";s:2:"fr";s:106:"Le module sitemap crée un index de toutes les pages et un plan de site XML pour les moteurs de recherche.";s:2:"id";s:110:"Modul peta situs ini membuat indeks dari setiap halaman dan sebuah format XML untuk mempermudah mesin pencari.";s:2:"it";s:104:"Il modulo mappa del sito crea un indice di tutte le pagine e una sitemap in XML per i motori di ricerca.";s:2:"lt";s:86:"struktūra modulis sukuria visų puslapių ir XML Sitemap paieškos sistemų indeksas.";s:2:"nl";s:89:"De sitemap module maakt een index van alle pagina''s en een XML sitemap voor zoekmachines.";s:2:"ru";s:144:"Карта модуль создает индекс всех страниц и карта сайта XML для поисковых систем.";s:2:"tw";s:84:"站點地圖模塊創建一個索引的所有網頁和XML網站地圖搜索引擎。";s:2:"cn";s:84:"站点地图模块创建一个索引的所有网页和XML网站地图搜索引擎。";s:2:"th";s:202:"โมดูลไซต์แมพสามารถสร้างดัชนีของหน้าเว็บทั้งหมดสำหรับเครื่องมือค้นหา.";s:2:"hu";s:94:"Ez a modul indexeli az összes oldalt és egy XML oldaltéképet generál a keresőmotoroknak.";s:2:"se";s:86:"Sajtkarta, modulen skapar ett index av alla sidor och en XML-sitemap för sökmotorer.";}', 0, 1, 0, 'content', 1, 1, 1, 1380146621),
(19, 'a:6:{s:2:"en";s:7:"Streams";s:2:"es";s:7:"Streams";s:2:"de";s:7:"Streams";s:2:"el";s:8:"Ροές";s:2:"lt";s:7:"Srautai";s:2:"fr";s:7:"Streams";}', 'streams', '2.3.3', NULL, 'a:6:{s:2:"en";s:36:"Manage, structure, and display data.";s:2:"es";s:41:"Administra, estructura, y presenta datos.";s:2:"de";s:49:"Verwalte, strukturiere und veröffentliche Daten.";s:2:"el";s:106:"Διαχείριση, δόμηση και προβολή πληροφοριών και δεδομένων.";s:2:"lt";N;s:2:"fr";s:43:"Gérer, structurer et afficher des données";}', 0, 0, 1, 'content', 1, 1, 1, 1380146621),
(20, 'a:25:{s:2:"en";s:5:"Users";s:2:"ar";s:20:"المستخدمون";s:2:"br";s:9:"Usuários";s:2:"pt";s:12:"Utilizadores";s:2:"cs";s:11:"Uživatelé";s:2:"da";s:7:"Brugere";s:2:"de";s:8:"Benutzer";s:2:"el";s:14:"Χρήστες";s:2:"es";s:8:"Usuarios";s:2:"fa";s:14:"کاربران";s:2:"fi";s:12:"Käyttäjät";s:2:"fr";s:12:"Utilisateurs";s:2:"he";s:14:"משתמשים";s:2:"id";s:8:"Pengguna";s:2:"it";s:6:"Utenti";s:2:"lt";s:10:"Vartotojai";s:2:"nl";s:10:"Gebruikers";s:2:"pl";s:12:"Użytkownicy";s:2:"ru";s:24:"Пользователи";s:2:"sl";s:10:"Uporabniki";s:2:"tw";s:6:"用戶";s:2:"cn";s:6:"用户";s:2:"hu";s:14:"Felhasználók";s:2:"th";s:27:"ผู้ใช้งาน";s:2:"se";s:10:"Användare";}', 'users', '1.1.0', NULL, 'a:25:{s:2:"en";s:81:"Let users register and log in to the site, and manage them via the control panel.";s:2:"ar";s:133:"تمكين المستخدمين من التسجيل والدخول إلى الموقع، وإدارتهم من لوحة التحكم.";s:2:"br";s:125:"Permite com que usuários se registrem e entrem no site e também que eles sejam gerenciáveis apartir do painel de controle.";s:2:"pt";s:125:"Permite com que os utilizadores se registem e entrem no site e também que eles sejam geriveis apartir do painel de controlo.";s:2:"cs";s:103:"Umožňuje uživatelům se registrovat a přihlašovat a zároveň jejich správu v Kontrolním panelu.";s:2:"da";s:89:"Lader brugere registrere sig og logge ind på sitet, og håndtér dem via kontrolpanelet.";s:2:"de";s:108:"Erlaube Benutzern das Registrieren und Einloggen auf der Seite und verwalte sie über die Admin-Oberfläche.";s:2:"el";s:208:"Παρέχει λειτουργίες εγγραφής και σύνδεσης στους επισκέπτες. Επίσης από εδώ γίνεται η διαχείριση των λογαριασμών.";s:2:"es";s:138:"Permite el registro de nuevos usuarios quienes podrán loguearse en el sitio. Estos podrán controlarse desde el panel de administración.";s:2:"fa";s:151:"به کاربر ها امکان ثبت نام و لاگین در سایت را بدهید و آنها را در پنل مدیریت نظارت کنید";s:2:"fi";s:126:"Antaa käyttäjien rekisteröityä ja kirjautua sisään sivustolle sekä mahdollistaa niiden muokkaamisen hallintapaneelista.";s:2:"fr";s:112:"Permet aux utilisateurs de s''enregistrer et de se connecter au site et de les gérer via le panneau de contrôle";s:2:"he";s:62:"ניהול משתמשים: רישום, הפעלה ומחיקה";s:2:"id";s:102:"Memungkinkan pengguna untuk mendaftar dan masuk ke dalam situs, dan mengaturnya melalui control panel.";s:2:"it";s:95:"Fai iscrivere de entrare nel sito gli utenti, e gestiscili attraverso il pannello di controllo.";s:2:"lt";s:106:"Leidžia vartotojams registruotis ir prisijungti prie puslapio, ir valdyti juos per administravimo panele.";s:2:"nl";s:88:"Laat gebruikers registreren en inloggen op de site, en beheer ze via het controlepaneel.";s:2:"pl";s:87:"Pozwól użytkownikom na logowanie się na stronie i zarządzaj nimi za pomocą panelu.";s:2:"ru";s:155:"Управление зарегистрированными пользователями, активирование новых пользователей.";s:2:"sl";s:96:"Dovoli uporabnikom za registracijo in prijavo na strani, urejanje le teh preko nadzorne plošče";s:2:"tw";s:87:"讓用戶可以註冊並登入網站，並且管理者可在控制台內進行管理。";s:2:"cn";s:87:"让用户可以注册并登入网站，并且管理者可在控制台内进行管理。";s:2:"th";s:210:"ให้ผู้ใช้ลงทะเบียนและเข้าสู่เว็บไซต์และจัดการกับพวกเขาผ่านทางแผงควบคุม";s:2:"hu";s:120:"Hogy a felhasználók tudjanak az oldalra regisztrálni és belépni, valamint lehessen őket kezelni a vezérlőpulton.";s:2:"se";s:111:"Låt dina besökare registrera sig och logga in på webbplatsen. Hantera sedan användarna via kontrollpanelen.";}', 0, 0, 1, '0', 1, 1, 1, 1380146621);
INSERT INTO `default_modules` (`id`, `name`, `slug`, `version`, `type`, `description`, `skip_xss`, `is_frontend`, `is_backend`, `menu`, `enabled`, `installed`, `is_core`, `updated_on`) VALUES
(21, 'a:25:{s:2:"en";s:9:"Variables";s:2:"ar";s:20:"المتغيّرات";s:2:"br";s:10:"Variáveis";s:2:"pt";s:10:"Variáveis";s:2:"cs";s:10:"Proměnné";s:2:"da";s:8:"Variable";s:2:"de";s:9:"Variablen";s:2:"el";s:20:"Μεταβλητές";s:2:"es";s:9:"Variables";s:2:"fa";s:16:"متغییرها";s:2:"fi";s:9:"Muuttujat";s:2:"fr";s:9:"Variables";s:2:"he";s:12:"משתנים";s:2:"id";s:8:"Variabel";s:2:"it";s:9:"Variabili";s:2:"lt";s:10:"Kintamieji";s:2:"nl";s:10:"Variabelen";s:2:"pl";s:7:"Zmienne";s:2:"ru";s:20:"Переменные";s:2:"sl";s:13:"Spremenljivke";s:2:"tw";s:12:"系統變數";s:2:"cn";s:12:"系统变数";s:2:"th";s:18:"ตัวแปร";s:2:"se";s:9:"Variabler";s:2:"hu";s:10:"Változók";}', 'variables', '1.0.0', NULL, 'a:25:{s:2:"en";s:59:"Manage global variables that can be accessed from anywhere.";s:2:"ar";s:97:"إدارة المُتغيّرات العامة لاستخدامها في أرجاء الموقع.";s:2:"br";s:61:"Gerencia as variáveis globais acessíveis de qualquer lugar.";s:2:"pt";s:58:"Gerir as variáveis globais acessíveis de qualquer lugar.";s:2:"cs";s:56:"Spravujte globální proměnné přístupné odkudkoliv.";s:2:"da";s:51:"Håndtér globale variable som kan tilgås overalt.";s:2:"de";s:74:"Verwaltet globale Variablen, auf die von überall zugegriffen werden kann.";s:2:"el";s:129:"Διαχείριση μεταβλητών που είναι προσβάσιμες από παντού στον ιστότοπο.";s:2:"es";s:50:"Manage global variables to access from everywhere.";s:2:"fa";s:136:"مدیریت متغییر های جامع که می توانند در هر جای سایت مورد استفاده قرار بگیرند";s:2:"fi";s:66:"Hallitse globaali muuttujia, joihin pääsee käsiksi mistä vain.";s:2:"fr";s:92:"Gérer des variables globales pour pouvoir y accéder depuis n''importe quel endroit du site.";s:2:"he";s:96:"ניהול משתנים גלובליים אשר ניתנים להמרה בכל חלקי האתר";s:2:"id";s:59:"Mengatur variabel global yang dapat diakses dari mana saja.";s:2:"it";s:58:"Gestisci le variabili globali per accedervi da ogni parte.";s:2:"lt";s:64:"Globalių kintamujų tvarkymas kurie yra pasiekiami iš bet kur.";s:2:"nl";s:54:"Beheer globale variabelen die overal beschikbaar zijn.";s:2:"pl";s:86:"Zarządzaj globalnymi zmiennymi do których masz dostęp z każdego miejsca aplikacji.";s:2:"ru";s:136:"Управление глобальными переменными, которые доступны в любом месте сайта.";s:2:"sl";s:53:"Urejanje globalnih spremenljivk za dostop od kjerkoli";s:2:"th";s:148:"จัดการตัวแปรทั่วไปโดยที่สามารถเข้าถึงได้จากทุกที่.";s:2:"tw";s:45:"管理此網站內可存取的全局變數。";s:2:"cn";s:45:"管理此网站内可存取的全局变数。";s:2:"hu";s:62:"Globális változók kezelése a hozzáféréshez, bárhonnan.";s:2:"se";s:66:"Hantera globala variabler som kan avändas över hela webbplatsen.";}', 0, 0, 1, 'data', 1, 1, 1, 1380146621),
(22, 'a:23:{s:2:"en";s:7:"Widgets";s:2:"br";s:7:"Widgets";s:2:"pt";s:7:"Widgets";s:2:"cs";s:7:"Widgety";s:2:"da";s:7:"Widgets";s:2:"de";s:7:"Widgets";s:2:"el";s:7:"Widgets";s:2:"es";s:7:"Widgets";s:2:"fa";s:13:"ویجت ها";s:2:"fi";s:9:"Vimpaimet";s:2:"fr";s:7:"Widgets";s:2:"id";s:6:"Widget";s:2:"it";s:7:"Widgets";s:2:"lt";s:11:"Papildiniai";s:2:"nl";s:7:"Widgets";s:2:"ru";s:14:"Виджеты";s:2:"sl";s:9:"Vtičniki";s:2:"tw";s:9:"小組件";s:2:"cn";s:9:"小组件";s:2:"hu";s:9:"Widget-ek";s:2:"th";s:21:"วิดเจ็ต";s:2:"se";s:8:"Widgetar";s:2:"ar";s:14:"الودجتس";}', 'widgets', '1.2.0', NULL, 'a:23:{s:2:"en";s:69:"Manage small sections of self-contained logic in blocks or "Widgets".";s:2:"ar";s:132:"إدارة أقسام صغيرة من البرمجيات في مساحات الموقع أو ما يُسمّى بالـ"ودجتس".";s:2:"br";s:77:"Gerenciar pequenas seções de conteúdos em bloco conhecidos como "Widgets".";s:2:"pt";s:74:"Gerir pequenas secções de conteúdos em bloco conhecidos como "Widgets".";s:2:"cs";s:56:"Spravujte malé funkční části webu neboli "Widgety".";s:2:"da";s:74:"Håndter små sektioner af selv-opretholdt logik i blokke eller "Widgets".";s:2:"de";s:62:"Verwaltet kleine, eigentständige Bereiche, genannt "Widgets".";s:2:"el";s:149:"Διαχείριση μικρών τμημάτων αυτόνομης προγραμματιστικής λογικής σε πεδία ή "Widgets".";s:2:"es";s:75:"Manejar pequeñas secciones de lógica autocontenida en bloques o "Widgets"";s:2:"fa";s:76:"مدیریت قسمت های کوچکی از سایت به طور مستقل";s:2:"fi";s:81:"Hallitse pieniä osioita, jotka sisältävät erillisiä lohkoja tai "Vimpaimia".";s:2:"fr";s:41:"Gérer des mini application ou "Widgets".";s:2:"id";s:101:"Mengatur bagian-bagian kecil dari blok-blok yang memuat sesuatu atau dikenal dengan istilah "Widget".";s:2:"it";s:70:"Gestisci piccole sezioni di logica a se stante in blocchi o "Widgets".";s:2:"lt";s:43:"Nedidelių, savarankiškų blokų valdymas.";s:2:"nl";s:75:"Beheer kleine onderdelen die zelfstandige logica bevatten, ofwel "Widgets".";s:2:"ru";s:91:"Управление небольшими, самостоятельными блоками.";s:2:"sl";s:61:"Urejanje manjših delov blokov strani ti. Vtičniki (Widgets)";s:2:"tw";s:103:"可將小段的程式碼透過小組件來管理。即所謂 "Widgets"，或稱為小工具、部件。";s:2:"cn";s:103:"可将小段的程式码透过小组件来管理。即所谓 "Widgets"，或称为小工具、部件。";s:2:"hu";s:56:"Önálló kis logikai tömbök vagy widget-ek kezelése.";s:2:"th";s:152:"จัดการส่วนเล็ก ๆ ในรูปแบบของตัวเองในบล็อกหรือวิดเจ็ต";s:2:"se";s:83:"Hantera små sektioner med egen logik och innehåll på olika delar av webbplatsen.";}', 1, 0, 1, 'content', 1, 1, 1, 1380146621),
(23, 'a:9:{s:2:"en";s:7:"WYSIWYG";s:2:"fa";s:7:"WYSIWYG";s:2:"fr";s:7:"WYSIWYG";s:2:"pt";s:7:"WYSIWYG";s:2:"se";s:15:"HTML-redigerare";s:2:"tw";s:7:"WYSIWYG";s:2:"cn";s:7:"WYSIWYG";s:2:"ar";s:27:"المحرر الرسومي";s:2:"it";s:7:"WYSIWYG";}', 'wysiwyg', '1.0.0', NULL, 'a:10:{s:2:"en";s:60:"Provides the WYSIWYG editor for PyroCMS powered by CKEditor.";s:2:"fa";s:73:"ویرایشگر WYSIWYG که توسطCKEditor ارائه شده است. ";s:2:"fr";s:63:"Fournit un éditeur WYSIWYG pour PyroCMS propulsé par CKEditor";s:2:"pt";s:61:"Fornece o editor WYSIWYG para o PyroCMS, powered by CKEditor.";s:2:"el";s:113:"Παρέχει τον επεξεργαστή WYSIWYG για το PyroCMS, χρησιμοποιεί το CKEDitor.";s:2:"se";s:37:"Redigeringsmodul för HTML, CKEditor.";s:2:"tw";s:83:"提供 PyroCMS 所見即所得（WYSIWYG）編輯器，由 CKEditor 技術提供。";s:2:"cn";s:83:"提供 PyroCMS 所见即所得（WYSIWYG）编辑器，由 CKEditor 技术提供。";s:2:"ar";s:76:"توفر المُحرّر الرسومي لـPyroCMS من خلال CKEditor.";s:2:"it";s:57:"Fornisce l''editor WYSIWYG per PtroCMS creato con CKEditor";}', 0, 0, 0, '0', 1, 1, 1, 1380146621),
(143, 'a:2:{s:2:"en";s:5:"about";s:2:"es";s:13:"Quienes Somos";}', 'about', '1.0', NULL, 'a:2:{s:2:"en";s:31:"This is a PyroCMS module about.";s:2:"es";s:50:"Los administradores prodran ver y crear los about.";}', 0, 0, 1, 'content', 0, 0, 0, 1380146621),
(98, 'a:2:{s:2:"en";s:6:"Banner";s:2:"es";s:6:"Banner";}', 'banner', '1.1', NULL, 'a:2:{s:2:"en";s:34:"Administrador de banner principal.";s:2:"es";s:34:"Administrador de banner principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380146621),
(26, 'a:2:{s:2:"en";s:4:"home";s:2:"es";s:4:"home";}', 'homeajax', '1.0', NULL, 'a:2:{s:2:"en";s:11:"Home module";s:2:"es";s:11:"Home module";}', 0, 1, 0, '0', 1, 1, 0, 1380146621),
(87, 'a:2:{s:2:"en";s:3:"PQR";s:2:"es";s:3:"PQR";}', 'pqr', '1.0', NULL, 'a:2:{s:2:"en";s:29:"This is a PyroCMS module PQR.";s:2:"es";s:78:"Los administradores prodran ver y reponder a los pqr que generen los usuarios.";}', 0, 1, 1, '0', 0, 0, 0, 1380146621),
(84, 'a:2:{s:2:"en";s:11:"Propertiees";s:2:"es";s:9:"Inmuebles";}', 'properties', '1.0', NULL, 'a:2:{s:2:"en";s:36:"This is a PyroCMS module properties.";s:2:"es";s:24:"Directorio de inmuebles.";}', 0, 1, 1, 'content', 0, 0, 0, 1380146621),
(85, 'a:2:{s:2:"en";s:13:"News from RSS";s:2:"es";s:18:"Noticias desde RSS";}', 'rss', '1.0', NULL, 'a:2:{s:2:"en";s:29:"This is a PyroCMS module Rss.";s:2:"es";s:48:"Modulo para la creacion y vista de lectores RSS.";}', 0, 0, 1, '0', 0, 0, 0, 1380146621),
(93, 'a:2:{s:2:"en";s:9:"Safe Zone";s:2:"es";s:11:"Zona Segura";}', 'safezone', '1.0', NULL, 'a:2:{s:2:"en";s:11:"Users Zone.";s:2:"es";s:17:"Zona de Usuarios.";}', 0, 0, 1, 'content', 0, 0, 0, 1380146621),
(33, 'a:4:{s:2:"en";s:14:"API Management";s:2:"el";s:24:"Διαχείριση API";s:2:"fr";s:18:"Gestionnaire d''API";s:2:"hu";s:12:"API Kezelés";}', 'api', '1.0.0', NULL, 'a:4:{s:2:"en";s:66:"Set up a RESTful API with API Keys and out in JSON, XML, CSV, etc.";s:2:"el";s:129:"Ρυθμίσεις για ένα RESTful API με κλειδιά API και αποτελέσματα σε JSON, XML, CSV, κτλ.";s:2:"fr";s:79:"Paramétrage d''une API RESTgul avec clés API et export en JSON, XML, CSV, etc.";s:2:"hu";s:159:"Körültekintően állítsd be az API-t (alkalmazásprogramozási felület) az API Kulcsokkal együtt és küldd JSON-ba, XML-be, CSV-be, vagy bármi egyébbe.";}', 0, 1, 1, 'utilities', 0, 0, 0, 1380146621),
(117, 'a:2:{s:2:"en";s:13:"Main Entities";s:2:"es";s:21:"Entidades Principales";}', 'entities', '1.0', NULL, 'a:2:{s:2:"en";s:34:"This is a PyroCMS module Entities.";s:2:"es";s:66:"Los administradores prodran editar todas la entidades principales.";}', 0, 0, 1, 'content', 0, 0, 0, 1380146621),
(35, 'a:2:{s:2:"en";s:11:"evaluations";s:2:"es";s:12:"Evaluaciones";}', 'evaluations', '1.0.5', NULL, 'a:2:{s:2:"en";s:37:"This is a PyroCMS module evaluations.";s:2:"es";s:23:"Módulo de evaluaciones";}', 0, 1, 1, '0', 0, 0, 0, 1380146621),
(91, 'a:2:{s:2:"en";s:11:"testimonies";s:2:"es";s:11:"Testimonios";}', 'testimonies', '1.0', NULL, 'a:2:{s:2:"en";s:37:"This is a PyroCMS module testimonies.";s:2:"es";s:56:"Los administradores prodran ver y crear los testimonies.";}', 0, 0, 1, 'content', 0, 0, 0, 1380146621),
(181, 'a:2:{s:2:"en";s:8:"services";s:2:"es";s:9:"Servicios";}', 'services', '1.0', NULL, 'a:2:{s:2:"en";s:34:"This is a PyroCMS module services.";s:2:"es";s:53:"Los administradores prodran ver y crear los services.";}', 0, 0, 1, '0', 1, 1, 0, 1381240276),
(89, 'a:2:{s:2:"en";s:12:"requirements";s:2:"es";s:12:"Requirements";}', 'requirements', '1.0', NULL, 'a:2:{s:2:"en";s:38:"This is a PyroCMS module requirements.";s:2:"es";s:57:"Los administradores prodran ver y crear los requirements.";}', 0, 1, 1, 'content', 0, 0, 0, 1380146621),
(92, 'a:2:{s:2:"en";s:7:"work_us";s:2:"es";s:20:"Trabaje con nosotros";}', 'work_us', '1.0', NULL, 'a:1:{s:2:"en";s:49:"Modulo para el formulario de trabaje con nosotros";}', 0, 1, 1, 'content', 0, 0, 0, 1380146621),
(183, 'a:2:{s:2:"en";s:10:"highlights";s:2:"es";s:10:"Destacados";}', 'highlights', '1.0', NULL, 'a:2:{s:2:"en";s:36:"This is a PyroCMS module highlights.";s:2:"es";s:55:"Los administradores prodran ver y crear los highlights.";}', 0, 0, 1, '0', 1, 1, 0, 1381249840),
(178, 'a:2:{s:2:"en";s:12:"contact_data";s:2:"es";s:17:"Datos de contacto";}', 'contact_data', '1.0', NULL, 'a:1:{s:2:"en";s:0:"";}', 0, 1, 1, '0', 1, 1, 0, 1380439499),
(151, 'a:2:{s:2:"en";s:15:"English_contact";s:2:"es";s:15:"English_contact";}', 'english_contact', '1.0', NULL, 'a:2:{s:2:"en";s:23:"Gestor English Contact.";s:2:"es";s:23:"Gestor English Contact.";}', 0, 1, 1, '0', 1, 1, 0, 1380225585),
(102, 'a:2:{s:2:"en";s:13:"quienes_somos";s:2:"es";s:13:"Quienes Somos";}', 'quienes_somos', '1.0', NULL, 'a:2:{s:2:"en";s:39:"This is a PyroCMS module quienes_somos.";s:2:"es";s:58:"Los administradores prodran ver y crear los quienes_somos.";}', 0, 0, 1, '0', 0, 0, 0, 1378945492),
(107, 'a:2:{s:2:"en";s:7:"valores";s:2:"es";s:28:"Valores Mudulo quienes somos";}', 'valores', '1.0', NULL, 'a:2:{s:2:"en";s:33:"This is a PyroCMS module valores.";s:2:"es";s:52:"Los administradores prodran ver y crear los valores.";}', 0, 0, 1, '0', 1, 1, 0, 1380146621),
(144, 'a:2:{s:2:"en";s:5:"Donde";s:2:"es";s:5:"Donde";}', 'donde', '1.0', NULL, 'a:2:{s:2:"en";s:31:"This is a PyroCMS module donde.";s:2:"es";s:33:"Administrador de donde principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380146696),
(174, 'a:2:{s:2:"en";s:34:"Nuestros Servicios (Para empresas)";s:2:"es";s:34:"Nuestros Servicios (Para empresas)";}', 'services_us', '1.0', NULL, 'a:2:{s:2:"en";s:37:"This is a PyroCMS module services_us.";s:2:"es";s:39:"Administrador de services_us principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380347056),
(177, 'a:2:{s:2:"en";s:36:"Nuestros Compromisos (Para empresas)";s:2:"es";s:36:"Nuestros Compromisos (Para empresas)";}', 'compromisos', '1.0', NULL, 'a:2:{s:2:"en";s:37:"This is a PyroCMS module compromisos.";s:2:"es";s:39:"Administrador de compromisos principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380386674),
(121, 'a:2:{s:2:"en";s:8:"Clientes";s:2:"es";s:31:"Clientes (Clientes y Convenios)";}', 'clientes', '1.0', NULL, 'a:2:{s:2:"en";s:34:"This is a PyroCMS module clientes.";s:2:"es";s:36:"Administrador de clientes principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380146621),
(120, 'a:2:{s:2:"en";s:9:"Convenios";s:2:"es";s:31:"Convenios (Cliente y Convenios)";}', 'convenios', '1.0', NULL, 'a:2:{s:2:"en";s:35:"This is a PyroCMS module convenios.";s:2:"es";s:37:"Administrador de convenios principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380146621),
(182, 'a:2:{s:2:"en";s:9:"novedades";s:2:"es";s:9:"Novedades";}', 'novedades', '1.0', NULL, 'a:2:{s:2:"en";s:35:"This is a PyroCMS module novedades.";s:2:"es";s:54:"Los administradores prodran ver y crear los novedades.";}', 0, 0, 1, '0', 1, 1, 0, 1381246228),
(156, 'a:2:{s:2:"en";s:3:"faq";s:2:"es";s:3:"faq";}', 'faq', '1.0', NULL, 'a:2:{s:2:"en";s:29:"This is a PyroCMS module faq.";s:2:"es";s:31:"Administrador de faq principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380281209),
(158, 'a:2:{s:2:"en";s:7:"trabaja";s:2:"es";s:7:"trabaja";}', 'trabaja', '1.0', NULL, 'a:2:{s:2:"en";s:33:"This is a PyroCMS module trabaja.";s:2:"es";s:35:"Administrador de trabaja principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380286029),
(152, 'a:2:{s:2:"en";s:7:"english";s:2:"es";s:7:"english";}', 'english', '1.0', NULL, 'a:2:{s:2:"en";s:33:"This is a PyroCMS module english.";s:2:"es";s:35:"Administrador de english principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380225585),
(179, 'a:2:{s:2:"en";s:8:"vacantes";s:2:"es";s:8:"vacantes";}', 'vacantes', '1.0', NULL, 'a:2:{s:2:"en";s:34:"This is a PyroCMS module vacantes.";s:2:"es";s:53:"Los administradores prodran ver y crear los vacantes.";}', 0, 0, 1, '0', 1, 1, 0, 1380551133),
(139, 'a:2:{s:2:"en";s:5:"redes";s:2:"es";s:5:"redes";}', 'redes', '1.0', NULL, 'a:2:{s:2:"en";s:31:"This is a PyroCMS module redes.";s:2:"es";s:33:"Administrador de redes principal.";}', 0, 1, 1, '0', 1, 1, 0, 1380146621),
(145, 'a:2:{s:2:"en";s:7:"quienes";s:2:"es";s:17:"¿Quiénes Somos?";}', 'quienes', '1.0', NULL, 'a:2:{s:2:"en";s:33:"This is a PyroCMS module quienes.";s:2:"es";s:52:"Los administradores prodran ver y crear los quienes.";}', 0, 0, 1, '0', 1, 1, 0, 1380146824),
(180, 'a:2:{s:2:"en";s:18:"Vacantes Aplicadas";s:2:"es";s:18:"Vacantes Aplicadas";}', 'vacantes_aplicar', '1.0', NULL, 'a:2:{s:2:"en";s:26:"Gestor Vacantes Aplicadas.";s:2:"es";s:26:"Gestor Vacantes Aplicadas.";}', 0, 1, 1, '0', 1, 1, 0, 1380551132),
(185, 'a:2:{s:2:"en";s:34:"Imagenes Home(chat,etiquta Barner)";s:2:"es";s:34:"Imagenes Home(chat,etiquta Barner)";}', 'aislados', '1.0', NULL, 'a:2:{s:2:"en";s:52:"Administrador de Imagenes Home(chat,etiquta Barner).";s:2:"es";s:52:"Administrador de Imagenes Home(chat,etiquta Barner).";}', 0, 1, 1, '0', 1, 1, 0, 1381443119),
(184, 'a:2:{s:2:"en";s:8:"Estudios";s:2:"es";s:8:"Estudios";}', 'estudios', '1.0', NULL, 'a:2:{s:2:"en";s:37:"Administrador de opciones de estudio.";s:2:"es";s:57:"Administrador de opciones de estudio Formulario Vacantes.";}', 0, 1, 1, '0', 1, 1, 0, 1381249929);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_navigation_groups`
--

DROP TABLE IF EXISTS `default_navigation_groups`;
CREATE TABLE IF NOT EXISTS `default_navigation_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `abbrev` (`abbrev`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `default_navigation_groups`
--

INSERT INTO `default_navigation_groups` (`id`, `title`, `abbrev`) VALUES
(1, 'Header', 'header'),
(2, 'Sidebar', 'sidebar'),
(3, 'Footer', 'footer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_navigation_links`
--

DROP TABLE IF EXISTS `default_navigation_links`;
CREATE TABLE IF NOT EXISTS `default_navigation_links` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `default_navigation_links`
--

INSERT INTO `default_navigation_links` (`id`, `title`, `parent`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `navigation_group_id`, `position`, `target`, `restricted_to`, `class`) VALUES
(1, 'Home', NULL, 'page', 1, '', '', '', 1, 1, NULL, NULL, ''),
(2, 'Blog', NULL, 'module', NULL, 'blog', '', '', 1, 2, NULL, NULL, ''),
(3, 'Contact', NULL, 'page', 2, '', '', '', 1, 3, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages`
--

DROP TABLE IF EXISTS `default_pages`;
CREATE TABLE IF NOT EXISTS `default_pages` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=174 ;

--
-- Volcado de datos para la tabla `default_pages`
--

INSERT INTO `default_pages` (`id`, `slug`, `class`, `title`, `uri`, `parent_id`, `type_id`, `entry_id`, `css`, `js`, `meta_title`, `meta_keywords`, `meta_robots_no_index`, `meta_robots_no_follow`, `meta_description`, `rss_enabled`, `comments_enabled`, `status`, `created_on`, `updated_on`, `restricted_to`, `is_home`, `strict_uri`, `order`) VALUES
(1, 'home', '', 'Home', 'home', 0, '1', '1', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 'live', 1376505790, 0, '', 1, 1, 1376505790),
(2, 'contact', '', 'Contact', 'contact', 0, '1', '2', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 'live', 1376505790, 0, '', 0, 1, 1376505790),
(3, 'search', '', 'Search', 'search', 0, '1', '3', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 'live', 1376505790, 0, '', 0, 1, 1376505790),
(4, 'results', '', 'Results', 'search/results', 3, '1', '4', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 'live', 1376505790, 0, '', 0, 0, 1376505790),
(5, '404', '', 'Page missing', '404', 0, '1', '5', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 'live', 1376505790, 0, '', 0, 1, 1376505790),
(9, 'servicio_1', '', 'servicio 1', 'servicios/servicio_1', 8, '4', '2', '', '', '', '', 0, 0, '', 0, 0, 'live', 1377279179, 1377279486, '0', 0, 1, 0),
(84, 'valores', '', 'valores', 'valores', 0, '35', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1378939918, 0, NULL, 0, 1, 0),
(85, 'nuestos_valores', '', 'Nuestos Valores', 'valores/nuestos_valores', 84, '35', '2', '', '', '', '', 0, 0, '', 0, 0, 'live', 1378939945, 1378940011, '0', 0, 1, 0),
(87, 'valor_2', '', 'Honestidad', 'valores/valor_2', 84, '35', '4', '', '', '', '', 0, 0, '', 0, 0, 'live', 1378940094, 1379287367, '0', 0, 1, 0),
(88, 'valor_3', '', 'Respeto', 'valores/valor_3', 84, '35', '5', '', '', '', '', 0, 0, '', 0, 0, 'live', 1378940105, 1379287404, '0', 0, 1, 0),
(89, 'valor_4', '', 'Puntualidad', 'valores/valor_4', 84, '35', '6', '', '', '', '', 0, 0, '', 0, 0, 'live', 1378942397, 1379287467, '0', 0, 1, 0),
(125, 'actualizaciontecnicaycientifica', '', 'Actualización técnica y cientifica', 'valores/actualizaciontecnicaycientifica', 84, '35', '7', '', '', '', '', 0, 0, '', 0, 0, 'live', 1379287483, 1379287545, '0', 0, 1, 0),
(126, 'responsabilidad_social_y_ambiental', '', 'Responsabilidad social y ambiental', 'valores/responsabilidad_social_y_ambiental', 84, '35', '8', '', '', '', '', 0, 0, '', 0, 0, 'live', 1379287562, 1379287578, '0', 0, 1, 0),
(132, 'quien_somos', '', '¿Quiénes Somos?', 'quien_somos', 0, '49', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1380146835, 0, NULL, 0, 1, 0),
(133, 'quien_somos', '', '¿Quiénes Somos?', 'quien_somos/quien_somos', 132, '49', '2', '', '', '', '', 0, 0, '', 0, 0, 'live', 1380146835, 1380894575, '0', 0, 1, 0),
(148, 'consulta-medica-domiciliaria', '', 'CONSULTA MÉDICA DOMICILIARIA', 'consulta-medica-domiciliaria', 0, '58', '2', '', '', '', '', 0, 0, '', 0, 0, 'draft', 1380326998, 1380327102, '0', 0, 1, 1380326998),
(157, 'vacante', '', 'vacante', 'vacante', 0, '60', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1380551167, 0, NULL, 0, 1, 0),
(158, 'vacante1', '', 'Auxiliar de Enfermería', 'vacante/vacante1', 157, '60', '2', '', '', '', '', 0, 0, '', 0, 0, 'live', 1380551287, 1380828274, '0', 0, 1, 0),
(159, 'medico-general', '', 'Médico General', 'vacante/medico-general', 157, '60', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1380828311, 0, NULL, 0, 1, 0),
(160, 'terapeuta-ocupacional', '', 'Terapeuta Ocupacional', 'vacante/terapeuta-ocupacional', 157, '60', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1380828322, 0, NULL, 0, 1, 0),
(161, 'servicios', '', 'servicios', 'servicios', 0, '61', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1381240285, 0, NULL, 0, 1, 0),
(163, 'consulta-medica-domiciliaria', '', 'Consulta Médica Domiciliaria', 'servicios/consulta-medica-domiciliaria', 161, '61', '6', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381240862, 1381245521, '0', 0, 1, 0),
(164, 'enfermeria', '', 'Enfermería', 'servicios/enfermeria', 161, '61', '7', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381241038, 1381241662, '0', 0, 1, 0),
(165, 'terapias', '', 'Terapias', 'servicios/terapias', 161, '61', '8', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381241053, 1381241525, '0', 0, 1, 0),
(166, 'hospitalizacion-en-casa', '', 'Hospitalización en casa', 'servicios/hospitalizacion-en-casa', 161, '61', '9', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381241069, 1381241554, '0', 0, 1, 0),
(167, 'telemedicina', '', 'Especialistas por Telemedicina', 'servicios/telemedicina', 161, '61', '10', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381241158, 1381241431, '0', 0, 1, 0),
(168, 'novedad', '', 'novedad', 'novedad', 0, '62', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1381244861, 0, NULL, 0, 1, 0),
(169, 'novedad-1', '', 'Octubre: Mes de Sensibilización sobre el Cáncer de Mama', 'novedad/novedad-1', 168, '62', '3', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381244975, 1381245082, '0', 0, 1, 0),
(170, 'destacados', '', 'destacados', 'destacados', 0, '63', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'live', 1381246329, 0, NULL, 0, 1, 0),
(171, 'especialistas-en-casa', '', 'Especialistas en Casa', 'destacados/especialistas-en-casa', 170, '63', '5', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381246499, 1381246696, '0', 0, 1, 1381246499),
(172, 'enfermeria-a-domicilio', '', 'Enfermería a Domicilio', 'destacados/enfermeria-a-domicilio', 170, '63', '6', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381246559, 1381246709, '0', 0, 1, 1381246559),
(173, 'terapias-a-domicilio', '', 'Terapias a Domicilio', 'destacados/terapias-a-domicilio', 170, '63', '7', '', '', '', '', 0, 0, '', 0, 0, 'live', 1381246590, 1381247107, '0', 0, 1, 1381246590);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_highlights`
--

DROP TABLE IF EXISTS `default_pages_highlights`;
CREATE TABLE IF NOT EXISTS `default_pages_highlights` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_highlights` longtext COLLATE utf8_unicode_ci,
  `image_highlights` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_highlights` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `default_pages_highlights`
--

INSERT INTO `default_pages_highlights` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description_highlights`, `image_highlights`, `url_highlights`) VALUES
(1, '2013-09-12 01:15:47', NULL, 2, NULL, 'highlights', NULL, NULL),
(5, '2013-09-12 01:18:34', '2013-10-08 15:38:16', 33, NULL, 'Ahora tu consulta con el especialista la puedes tener en la comodidad de tu hogar a trav&eacute;s de nuestro programa de Telemedicina.&nbsp;', 'dc87abb17bf6834', NULL),
(6, '2013-09-14 01:38:24', '2013-10-08 15:38:29', 2, NULL, 'Lorem ipsum dolor sit', '9cc5134d5b432ae', NULL),
(7, '2013-09-14 01:38:32', '2013-10-08 15:45:07', 2, NULL, NULL, 'ff9db7465f8b7b7', 'http://adom.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_novedades`
--

DROP TABLE IF EXISTS `default_pages_novedades`;
CREATE TABLE IF NOT EXISTS `default_pages_novedades` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `subtitle_novedades` varchar(117) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_novedades` longtext COLLATE utf8_unicode_ci,
  `image_novedades` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_interna` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `default_pages_novedades`
--

INSERT INTO `default_pages_novedades` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `subtitle_novedades`, `description_novedades`, `image_novedades`, `image_interna`) VALUES
(1, '2013-10-08 15:07:41', NULL, 2, NULL, NULL, 'novedades', NULL, NULL),
(3, '2013-09-28 16:49:03', '2013-10-08 15:11:22', 33, NULL, 'Octubre: Mes de Sensibilización sobre el Cáncer de Mama', '<p>El Mes de Sensibilizaci&oacute;n sobre el C&aacute;ncer de Mama, que se celebra en todo el mundo cada mes de octubre, contribuye a aumentar la atenci&oacute;n y el apoyo prestados a la sensibilizaci&oacute;n, la detecci&oacute;n precoz, el tratamiento y los cuidados paliativos.</p>\n\n<p>Cada a&ntilde;o se producen 1,38 millones de nuevos casos y 458 000 muertes por c&aacute;ncer de mama (IARC Globocan, 2008). El c&aacute;ncer de mama es, de lejos, el m&aacute;s frecuente en las mujeres, tanto en los pa&iacute;ses desarrollados como en los pa&iacute;ses en desarrollo. En los pa&iacute;ses de ingresos bajos y medios, su incidencia ha aumentado constantemente en los &uacute;ltimos a&ntilde;os debido al aumento de la esperanza de vida y de la urbanizaci&oacute;n, as&iacute; como a la adopci&oacute;n de modos de vida occidentales.</p>\n\n<p>Los conocimientos actuales sobre las causas del c&aacute;ncer de mama son insuficientes, por lo que la detecci&oacute;n precoz sigue siendo la piedra angular de la lucha contra esta enfermedad. Cuando se detecta precozmente, se establece un diagn&oacute;stico adecuado y se dispone de tratamiento, las posibilidades de curaci&oacute;n son elevadas. En cambio, cuando se detecta tard&iacute;amente es raro que se pueda ofrecer un tratamiento curativo. En tales casos son necesarios cuidados paliativos para mitigar el sufrimiento del paciente y sus familiares.</p>\n', '0c8fef05d51fbfc', '7f5db06b0e6529d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_quienes`
--

DROP TABLE IF EXISTS `default_pages_quienes`;
CREATE TABLE IF NOT EXISTS `default_pages_quienes` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_quienes` longtext COLLATE utf8_unicode_ci,
  `image_quienes` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `default_pages_quienes`
--

INSERT INTO `default_pages_quienes` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description_quienes`, `image_quienes`) VALUES
(1, '2013-09-25 22:07:15', NULL, 2, NULL, 'quienes', NULL),
(2, '2013-09-25 22:07:15', '2013-10-04 13:49:35', 2, NULL, '<div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;">ADOM Salud Domiciliaria fue fundada en 1978, siendo la primera empresa en Colombia para la atenci&oacute;n m&eacute;dica en casa. Actualmente ADOM ofrece un amplio portafolio de servicios para llevar salud y bienestar al hogar de todos las familias en Bogot&aacute;, el cual incluye la Consulta M&eacute;dica Domiciliaria, los servicios integrales de enfermer&iacute;a, terapias, nutrici&oacute;n, suministro de insumos y medicamentos, y en general cualquier servicio de salud que pueda ser realizado en casa.</span><br style="outline: none; color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;" />\n<br style="outline: none; color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;" />\n<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;">ADOM atiende pacientes cr&oacute;nicos, terminales o con patolog&iacute;as agudas que no requieran la infraestructura de una instituci&oacute;n hospitalaria, pero siempre garantizando los m&aacute;s altos est&aacute;ndares de calidad.</span><br style="outline: none; color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;" />\n<br style="outline: none; color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;" />\n<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;">A diferencia de otras empresas de servicios m&eacute;dicos a domicilio, en ADOM&nbsp;</span><span style="outline: none; font-weight: 600; color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;">no es necesaria la afiliaci&oacute;n</span><span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify;">&nbsp;para poder acceder a nuestros servicios. Solamente ll&aacute;manos y pondremos a tu disposici&oacute;n un equipo comprometido con el bienestar y la calidad de vida de sus pacientes y familias.</span></div>\n', '769a3721ed8b220');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_services`
--

DROP TABLE IF EXISTS `default_pages_services`;
CREATE TABLE IF NOT EXISTS `default_pages_services` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_services` longtext COLLATE utf8_unicode_ci,
  `image_services` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_internal` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto_inferior_services` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `default_pages_services`
--

INSERT INTO `default_pages_services` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description_services`, `image_services`, `image_internal`, `texto_inferior_services`) VALUES
(6, '2013-09-28 00:22:15', '2013-10-08 15:18:41', 2, NULL, 'La mayor&iacute;a de los problemas de salud se pueden resolver en casa con una consulta m&eacute;dica domiciliaria. Nuestros m&eacute;dicos cuentan con la experiencia para brindar en casa el alivio que esperan los pacientes y sus familias.', 'a63877840b778d5', 'ea8d3a108e688d6', '<p class="main_p">Nuestra Consulta M&eacute;dica Domiciliaria puede ser solicitada por cualquier persona en Bogot&aacute;, <strong>sin necesidad de afiliarse ni pagar mensualidades</strong>. Nuestro m&eacute;dico llegar&aacute; a donde se encuentre el paciente&nbsp;en aproximadamente 40 minutos despu&eacute;s de la solicitud. &nbsp;<br />\n<br />\nAlgunas de las caracter&iacute;sticas&nbsp;de nuestra Consulta M&eacute;dica Domiciliaria son:&nbsp;</p>\n\n<ul>\n	<li class="main_p">SIN AFILIACI&Oacute;N.&nbsp;</li>\n	<li class="main_p">Servicio las 24 horas, todos los d&iacute;as del a&ntilde;o.&nbsp;</li>\n	<li class="main_p">Evita desplazamientos e incomodidades para el paciente.&nbsp;</li>\n	<li class="main_p">Aplicaci&oacute;n de medicamentos de emergencia sin costo adicional.</li>\n	<li class="main_p">Seguimiento telef&oacute;nico al paciente.&nbsp;&nbsp;</li>\n	<li class="main_p">Apoyo de enfermer&iacute;a y/o terapias si se requiere.&nbsp;</li>\n	<li class="main_p">Certificados para&nbsp;estudio o trabajo.&nbsp;</li>\n</ul>\n\n<div class="main_p">Solicita una Consulta M&eacute;dica Domiciliaria a trav&eacute;s de la l&iacute;nea 256 3930 en Bogot&aacute;.</div>\n'),
(7, '2013-09-28 00:30:31', '2013-10-08 14:14:22', 33, NULL, '<p class="main_text_serv" style="text-align:justify;">La comodidad y el bienestar de tu familia son lo m&aacute;s importante, por eso, en ADOM tenemos Enfermeras Profesionales y Auxiliares de Enfermer&iacute;a para el cuidado de pacientes en casa y apoyo en sus actividades diarias.</p>\n', '5bf451e92e94548', '0476cd08000500d', '<h3 class="bold">Cuidado de postoperatorios</h3>\n\n<p class="main_p texto_serv1">Brindamos cuidado integral en la comodidad de su hogar desde el egreso hospitalario hasta la completa recuperaci&oacute;n, ofreciendo manejo del dolor, asistencia en movilizaci&oacute;n y actividades de la vida diaria, participando activamente en todo el proceso de rehabilitaci&oacute;n.</p>\n\n<h3 class="bold">Cuidado del postparto</h3>\n\n<p class="main_p texto_serv1">Atenci&oacute;n y cuidado del reci&eacute;n nacido y de mujeres en esta etapa, brindando educaci&oacute;n sobre el proceso natural del posparto, cuidados del reci&eacute;n nacido, lactancia materna y signos alarma.</p>\n\n<h3 class="bold">Acompa&ntilde;amiento de adultos mayores</h3>\n\n<p class="main_p texto_serv1">Servicio orientado al cuidado integral del adulto mayor, ofreciendo asistencia en todas las actividades de la vida diaria, aseo, confort, administraci&oacute;n de medicamentos, toma de signos vitales, actividades l&uacute;dicas y todos los procedimientos que se requieran para ofrecerle bienestar y calidad de vida.</p>\n\n<h3 class="bold">Pacientes cr&oacute;nicos</h3>\n\n<p class="main_p texto_serv1">Ofrecemos calidad de vida a los pacientes con enfermedades cr&oacute;nicas, detectando sus necesidades y actuando de forma oportuna previniendo complicaciones y rehospitalizaciones.</p>\n\n<h3 class="bold">Visitas para procedimientos espec&iacute;ficos</h3>\n\n<p class="main_p texto_serv1">Asistencia en ba&ntilde;o, higiene y confort, toma de laboratorios, glucometr&iacute;as, paso de sondas; administraci&oacute;n de medicamentos v&iacute;a parenteral, subcut&aacute;nea, intramuscular; curaciones especializadas con material de alta tecnolog&iacute;a, manejo de ostom&iacute;as, entre otros.</p>\n\n<h3 class="bold">Entrenamiento a cuidadores</h3>\n\n<p class="main_p texto_serv1">Capacitamos a la familia o al cuidador designado en el manejo del paciente en el domicilio de forma integral, valorando cada una de las necesidades de atenci&oacute;n. Educamos sobre procedimientos realizados diariamente en el domicilio: t&eacute;cnicas de alimentaci&oacute;n (por sonda y/o v&iacute;a oral), aseo e higiene, administraci&oacute;n de medicamentos, prevenci&oacute;n de &uacute;lceras por presi&oacute;n, manejo de ostom&iacute;as, movilizaci&oacute;n y cambios posturales.</p>\n\n<div class="paginador clearfix"><a class="pagina_activa" href="#">1</a> <a href="#">2</a>&nbsp;</div>\n\n<div class="dest_serv" style="padding:22px 0;">La calidad de todos nuestros servicios est&aacute; certificada y todo nuestro equipo ha sido seleccionado a trav&eacute;s de un estricto proceso de selecci&oacute;n que nos permite garantizar personal id&oacute;neo, c&aacute;lido y honesto.<br />\n<br />\nNuestro equipo m&eacute;dico hace seguimiento constante a todos nuestros pacientes para ofrecer la mejor calidad en el servicio y contribuir a la pronta mejor&iacute;a del paciente.</div>\n'),
(8, '2013-09-28 15:35:01', '2013-10-08 14:12:05', 2, 1, '<p class="main_text_serv" style="text-align:justify;">En la comodidad del hogar, entre las 7am y 7pm, nos ajustamos a los horarios del paciente para realizar el plan de terapias que contribuya a su pronta recuperaci&oacute;n.</p>\n', '005227a1932d9a8', '631575553202fe6', '<h3 class="bold">Terapia F&iacute;sica</h3>\n\n<p class="main_p texto_serv1">Se realizan procedimientos dirigidos a ayudar a la persona a alcanzar la recuperaci&oacute;n de lesiones osteomusculares y lograr al m&aacute;ximo su potencial f&iacute;sico. Se inicia con una valoraci&oacute;n fisioterap&eacute;utica, definiendo as&iacute; el tratamiento, modalidades y t&eacute;cnicas en rehabilitaci&oacute;n f&iacute;sica que conlleven al mejoramiento de la fuerza muscular, flexibilidad, resistencia, entrenamiento de equilibrio y/o marcha, utilizando los equipos indispensables para el tratamiento. Adem&aacute;s, en estas terapias se ense&ntilde;a sobre la biomec&aacute;nica corporal para prevenir lesiones futuras causadas por malos h&aacute;bitos posturales en individuos que presenten limitaciones por trauma f&iacute;sico, enfermedad, o en el proceso de envejecimiento.</p>\n\n<h3 class="bold">Terapia Respiratoria</h3>\n\n<p class="main_p texto_serv1">Procedimientos y t&eacute;cnicas para el manejo ambulatorio de enfermedades respiratorias, agudas &oacute; cr&oacute;nicas en adultos, ni&ntilde;os y neonatos. Se inicia con una valoraci&oacute;n inicial con el fin de definir las t&eacute;cnicas apropiadas para cada paciente. Nebulizaciones, drenaje postural, t&eacute;cnicas de maniobra asistida (percusi&oacute;n, vibraci&oacute;n, reflejo de tos) y/o ejercicios respiratorios que ayudan al mejoramiento de la funci&oacute;n pulmonar.</p>\n\n<h3 class="bold">Terapia Ocupacional</h3>\n\n<p class="main_p texto_serv1">Habituar a la persona en las destrezas de la vida diaria, desarrollo de las capacidades perceptivo-motrices y del funcionamiento sensorial integrado, desarrollo de las destrezas del juego y para el tiempo libre en individuos que presenten limitaciones por trauma f&iacute;sico o enfermedad, disfunci&oacute;n psicosocial, incapacidades del desarrollo o del aprendizaje, o por el proceso de envejecimiento. Todo esto con el fin de lograr la mayor independencia, prevenir la incapacidad, y mantener la buena salud.</p>\n\n<h3 class="bold">Terapia de Lenguaje o Degluci&oacute;n</h3>\n\n<p class="main_p texto_serv1">Se realiza la evaluaci&oacute;n y diagnostico Fonoaudiol&oacute;gico para evidenciar las alteraciones del lenguaje, habla, voz y degluci&oacute;n, y de esta forma iniciar la rehabilitaci&oacute;n por medio de t&eacute;cnicas de respiraci&oacute;n abdominal-diafragm&aacute;tica, ejercicios tonales, ejecuci&oacute;n de praxias buco-fonatorias, trabajo de fonemas omitidos y/o distorsionados y programas de rehabilitaci&oacute;n de los procesos de codificaci&oacute;n y decodificaci&oacute;n, maniobras facilitadoras, maniobras posturales y t&eacute;cnicas facilitadoras. Se realizan en personas que presenten alteraciones en lenguaje o degluci&oacute;n causados por trauma f&iacute;sico, enfermedad, o proceso de envejecimiento.</p>\n\n<div class="dest_serv" style="padding:22px 0;">La calidad de todos nuestros servicios est&aacute; certificada y todo nuestro equipo ha sido seleccionado a trav&eacute;s de un estricto proceso de selecci&oacute;n que nos permite garantizar personal id&oacute;neo, honesto y c&aacute;lido.<br />\n<br />\nNuestro equipo m&eacute;dico hace seguimiento constante a todos nuestros pacientes para ofrecer la mejor calidad en el servicio y orientar el plan de terapias.</div>\n'),
(9, '2013-09-28 15:49:34', '2013-10-08 14:12:34', 2, 2, NULL, '96619f3d3289fd7', '98939bfcb42a59d', '<h3 class="bold">Hospitalizaci&oacute;n en casa</h3>\n\n<p class="main_p">Es la combinaci&oacute;n de los diferentes servicios y productos que ofrece ADOM, dise&ntilde;ados para prestar una atenci&oacute;n equivalente a la hospitalaria pero en casa del paciente, mejorando as&iacute; la calidad de vida de &eacute;l y de su familia.<br />\n<br />\nEn ADOM tenemos una experiencia de m&aacute;s de 10 a&ntilde;os en Hospitalizaci&oacute;n en Casa, la cual nos ha mostrado que la recuperaci&oacute;n de los pacientes es mucho m&aacute;s r&aacute;pida cuando se le atiende en casa y en compa&ntilde;&iacute;a de sus seres queridos.<br />\n<br />\nLa mayor&iacute;a de casos se pueden atender en el hogar y ponemos a disposici&oacute;n de nuestros pacientes todo nuestro equipo m&eacute;dico para garantizar su calidad de vida y recuperaci&oacute;n.</p>\n'),
(10, '2013-09-28 15:57:37', '2013-10-08 14:10:31', 2, 3, NULL, '78aad7aaa4a15ae', '70ad6785c15e812', 'Consulta m&eacute;dica domiciliaria de diferentes especialidades, realizada a trav&eacute;s de telemedicina. Nuestro m&eacute;dico general visita al paciente en su casa y se apoya de la m&aacute;s moderna tecnolog&iacute;a para lograr una comunicaci&oacute;n audiovisual efectiva entre el m&eacute;dico especialista y el paciente.\n<p>&nbsp;</p>\n\n<ul class="list_serv">\n	<li>Pediatr&iacute;a</li>\n	<li>Reumatolog&iacute;a</li>\n	<li>Cardiolog&iacute;a</li>\n	<li>Neurolog&iacute;a</li>\n	<li>Dermatolog&iacute;a</li>\n	<li>Fisiatr&iacute;a</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_vacantes`
--

DROP TABLE IF EXISTS `default_pages_vacantes`;
CREATE TABLE IF NOT EXISTS `default_pages_vacantes` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_vacantes` longtext COLLATE utf8_unicode_ci,
  `image_vacantes` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `default_pages_vacantes`
--

INSERT INTO `default_pages_vacantes` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description_vacantes`, `image_vacantes`) VALUES
(1, '2013-09-30 14:26:07', NULL, 2, NULL, 'vacantes', NULL),
(2, '2013-09-30 14:28:07', '2013-10-03 19:24:34', 33, NULL, 'Vacante 1', '8329daac8527751'),
(3, '2013-10-03 19:25:11', NULL, 33, NULL, NULL, NULL),
(4, '2013-10-03 19:25:22', NULL, 33, NULL, NULL, NULL),
(5, '2013-10-03 19:25:32', NULL, 33, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_pages_valores`
--

DROP TABLE IF EXISTS `default_pages_valores`;
CREATE TABLE IF NOT EXISTS `default_pages_valores` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description_valores` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `default_pages_valores`
--

INSERT INTO `default_pages_valores` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description_valores`) VALUES
(1, '2013-09-12 02:51:58', NULL, 2, NULL, 'valores'),
(2, '2013-09-12 02:52:25', '2013-09-12 02:53:31', 2, NULL, 'Nuestro talento humano es el factor fundamental para el &eacute;xito de la empresa y la calidad de todos nuestros servicios. Por eso creemos que nuestros valores deben guiar a todos nuestros colaboradores y ser la base del equipo para lograr grandes resultados.'),
(3, '2013-09-12 02:54:33', '2013-09-15 23:26:43', 2, NULL, '<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify; background-color: rgb(242, 242, 242);">Siempre debemos hacer lo correcto, actuando conforme a la moral, costumbres y normas establecidas.</span>'),
(4, '2013-09-12 02:54:54', '2013-09-15 23:22:47', 2, NULL, '<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify; background-color: rgb(242, 242, 242);">Actuamos de acuerdo a como pensamos y nos sentimos, respetando y asumiendo siempre la verdad de los hechos.</span>'),
(5, '2013-09-12 02:55:05', '2013-09-15 23:23:24', 2, NULL, '<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify; background-color: rgb(242, 242, 242);">Debemos reconocer, aceptar, apreciar y valorar a los dem&aacute;s y sus derechos. Sabemos que la vida de nuestros pacientes y sus familias merecen todo el respeto del equipo de ADOM.</span>'),
(6, '2013-09-12 03:33:17', '2013-09-15 23:24:27', 2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec vulputate tellus. Maecenas laoreet condimentum nibh, id placerat quam mattis vitae. Donec non lobortis lectus. Mauris vitae posuere massa. Maecenas tristique sapien eget risus blandit vehicula. Vestibulum cursus augue vitae est molestie consequat.<br />\n<br />\nEtiam ut ante volutpat, ornare sapien sed, eleifend risus. Sed porta consequat nisi. Mauris magna dui, congue ut felis id, malesuada pellentesque eros. Integer ullamcorper tempus quam, a tincidunt risus pellentesque at. Integer tempor ante diam, non tempus nunc porttitor ut'),
(7, '2013-09-15 23:24:43', '2013-09-15 23:25:45', 33, NULL, '<span background-color:="&quot;&quot;" font-family:="&quot;&quot;" font-size:="&quot;&quot;" line-height:="&quot;&quot;" style="&quot;&quot;color:&quot;" text-align:="&quot;&quot;">Nuestro compromiso con la calidad est&aacute; fuertemente relacionado con la constante actualizaci&oacute;n del conocimiento. Queremos ofrecer a nuestros pacientes los mejores procedimientos y tratamientos posibles que contribuyan a su recuperaci&oacute;n.</span>'),
(8, '2013-09-15 23:26:02', '2013-09-15 23:26:18', 33, NULL, '<span style="color: rgb(102, 102, 102); font-family: pt_sansregular; font-size: 14px; line-height: normal; text-align: justify; background-color: rgb(242, 242, 242);">No podemos desconocer que vivimos en un entorno en el que tenemos un rol importante y debemos orientar nuestras acciones a la construcci&oacute;n del bien com&uacute;n y el cuidado del medio ambiente.</span>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_page_types`
--

DROP TABLE IF EXISTS `default_page_types`;
CREATE TABLE IF NOT EXISTS `default_page_types` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `default_page_types`
--

INSERT INTO `default_page_types` (`id`, `slug`, `title`, `description`, `stream_id`, `meta_title`, `meta_keywords`, `meta_description`, `body`, `css`, `js`, `theme_layout`, `updated_on`, `save_as_files`, `content_label`, `title_label`) VALUES
(1, 'default', 'Default', 'A simple page type with a WYSIWYG editor that will get you started adding content.', 2, NULL, NULL, NULL, '<h2>{{ page:title }}</h2>\n\n{{ body }}', '', '', 'default', 1376505790, 'n', NULL, NULL),
(35, 'valores', 'lang:valores:valores', 'A simple page type valores', 78, NULL, NULL, NULL, '<h2>{{title}}</h2>\n\n{{ body }}', '', '', 'internas.html', 1378939918, 'n', NULL, NULL),
(49, 'quienes', 'lang:quienes:quienes', 'A simple page type quienes', 108, NULL, NULL, NULL, '<h2>{{title}}</h2>\n\n{{ body }}', NULL, NULL, 'internas.html', 1380146835, 'n', NULL, NULL),
(60, 'vacantes', 'lang:vacantes:vacantes', 'A simple page type vacantes', 156, NULL, NULL, NULL, '<div class="content_940 content_home">\n    <div class="linea_home">\n      <h1 class="title_dest bold">{{title}}</h1>\n    </div>\n    <div class="clearfix">\n      <div class="share left">\n        <span class="st_facebook_hcount" displayText="Facebook"></span>\n        <span class="st_linkedin_hcount" displayText="LinkedIn"></span>\n      </div>\n      <a class="btn_vermas right" href="{{ url:site }}vacantes" style="width:85px; background:none; padding:0;">Volver</a>\n    </div>\n    \n    <div class="clearfix content_new">\n      <img src="{{ url:site }}files/large/{{image_vacantes:filename}}" width="380" height="260" class="left" />\n      <div class="con-sub-nov right">\n      	<h1>{{subtitle_vacantes}}</h1>\n      </div>\n      <div class="text_new scroll_pane right">\n        <p class="main_p">\n{{description_vacantes}}\n        </p>\n      </div>\n    </div>\n  </div>', '', '', 'internas.html', 1380551167, 'n', NULL, NULL),
(61, 'services', 'lang:services:services', 'A simple page type services', 157, NULL, NULL, NULL, '<div class="content_940 content_home">\r\n    <div class="menu_servicios clearfix">\r\n   \r\n      <a  {{ if {url:segments segment="2"} == "consulta-medica-domiciliaria" }} class="servicio_activo" {{endif}} href="{{ url:base }}servicios/consulta-medica-domiciliaria">Consulta Médica Domiciliaria</a>\r\n	 \r\n	 <a {{ if page:slug == "enfermeria" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/enfermeria">Enfermería</a>\r\n	 \r\n	  <a {{ if page:slug == "terapias" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/terapias">Terapias</a>\r\n	 \r\n	  <a {{ if page:slug == "hospitalizacion-en-casa" }} class="servicio_activo" {{ endif }} href="{{ url:base }}servicios/hospitalizacion-en-casa">Hospitalización en Casa</a>\r\n	 \r\n	 <a {{ if page:slug == "telemedicina" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/telemedicina">Especialistas por Telemedicina</a>\r\n    </div>\r\n    <div class="linea_home">\r\n      <h1 class="title_dest bold">{{title}}</h1>\r\n    </div>\r\n    <div class="clearfix">\r\n      <div class="content_serv left">\r\n      	<p class="main_text_serv" style="text-align:justify;">\r\n          {{description_services}}\r\n        </p>\r\n\r\n\r\n    <img src="{{ url:site }}files/large/{{image_internal:filename}}" width="700" height="298" class="img_serv" />\r\n\r\n\r\n        <p class="main_p">\r\n        {{texto_inferior_services}}\r\n      </div>\r\n      <a class="fixed_box right" href="{{ url:site }}contact" style="top: 300px;">\r\n        ¿Quieres conocer más de nuestros servicios y saber por qué ADOM esla mejor opción para cuidar la salud de tu familia al mejor precio?\r\n        <h4>Contacta un asesor</h4>\r\n      </a>\r\n    </div>\r\n  </div>', '', '', 'internas.html', 1381240285, 'n', NULL, NULL),
(62, 'novedades', 'lang:novedades:novedades', 'A simple page type novedades', 158, NULL, NULL, NULL, '<div class="content_940 content_home">\r\n    <div class="linea_home">\r\n      <h1 class="title_dest bold">{{title}}</h1>\r\n    </div>\r\n    <div class="clearfix">\r\n      <div class="share left">\r\n        <span class="st_facebook_hcount" displayText="Facebook"></span>\r\n        <span class="st_linkedin_hcount" displayText="LinkedIn"></span>\r\n      </div>\r\n      <a class="btn_vermas right" href="{{ url:site }}novedades" style="width:85px; background:none; padding:0;">Volver</a>\r\n    </div>\r\n    \r\n    <div class="clearfix content_new">\r\n      <img src="{{ url:site }}files/large/{{image_novedades:filename}}" width="380" height="260" class="left" />\r\n      <div class="con-sub-nov right">\r\n      	<h1>{{subtitle_novedades}}</h1>\r\n      </div>\r\n      <div class="text_new scroll_pane right">\r\n        <p class="main_p">\r\n{{description_novedades}}\r\n        </p>\r\n      </div>\r\n    </div>\r\n  </div>', '', '', 'internas.html', 1381244861, 'n', NULL, NULL),
(63, 'highlights', 'lang:highlights:highlights', 'A simple page type highlights', 159, NULL, NULL, NULL, '<h2>{{title}}</h2>\n\n{{ body }}', '', '', 'internas.html', 1381246329, 'n', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_permissions`
--

DROP TABLE IF EXISTS `default_permissions`;
CREATE TABLE IF NOT EXISTS `default_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roles` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=220 ;

--
-- Volcado de datos para la tabla `default_permissions`
--

INSERT INTO `default_permissions` (`id`, `group_id`, `module`, `roles`) VALUES
(198, 2, 'files', '{"wysiwyg":"1","upload":"1","download_file":"1","edit_file":"1","delete_file":"1","create_folder":"1","set_location":"1","synchronize":"1","edit_folder":"1","delete_folder":"1"}'),
(199, 2, 'banner', NULL),
(200, 2, 'clientes', NULL),
(201, 2, 'contact', NULL),
(202, 2, 'convenios', NULL),
(203, 2, 'contact_data', NULL),
(204, 2, 'highlights', NULL),
(205, 2, 'donde', NULL),
(206, 2, 'english_contact', NULL),
(207, 2, 'aislados', NULL),
(208, 2, 'novedades', NULL),
(209, 2, 'compromisos', NULL),
(210, 2, 'services_us', NULL),
(211, 2, 'pages', '{"put_live":"1","edit_live":"1","delete_live":"1"}'),
(212, 2, 'services', NULL),
(213, 2, 'valores', NULL),
(214, 2, 'english', NULL),
(215, 2, 'faq', NULL),
(216, 2, 'redes', NULL),
(217, 2, 'trabaja', NULL),
(218, 2, 'vacantes', NULL),
(219, 2, 'quienes', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_profiles`
--

DROP TABLE IF EXISTS `default_profiles`;
CREATE TABLE IF NOT EXISTS `default_profiles` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `default_profiles`
--

INSERT INTO `default_profiles` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `user_id`, `display_name`, `first_name`, `last_name`, `company`, `lang`, `bio`, `dob`, `gender`, `phone`, `mobile`, `address_line1`, `address_line2`, `address_line3`, `postcode`, `website`, `updated_on`, `asdasdsad`) VALUES
(2, '2013-08-23 21:25:46', NULL, 1, 1, 2, 'Eduard Stith Russy Urbano', 'Eduard', 'Russy', 'imaginamos', 'en', 'Makia', -3600, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1378332423, NULL),
(33, '2013-09-12 01:08:47', NULL, 2, 2, 16, 'Administrador', 'admin', 'admin', NULL, 'en', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_properties_web_files`
--

DROP TABLE IF EXISTS `default_properties_web_files`;
CREATE TABLE IF NOT EXISTS `default_properties_web_files` (
  `property_id` int(11) NOT NULL,
  `file_id` char(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`property_id`,`file_id`),
  KEY `properties_files_file_sPdY` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `default_properties_web_files`
--

INSERT INTO `default_properties_web_files` (`property_id`, `file_id`) VALUES
(1, '6e04b66d9de7391'),
(1, '885953811cddcd1'),
(1, '974b6312e777b65'),
(2, 'ac3ffe6f52ad84c'),
(3, 'd27cd53654903d6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_redes`
--

DROP TABLE IF EXISTS `default_redes`;
CREATE TABLE IF NOT EXISTS `default_redes` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `nombre_red_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_red` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `default_redes`
--

INSERT INTO `default_redes` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `nombre_red_social`, `link_red`) VALUES
(1, '2013-09-17 22:28:30', '2013-09-23 18:16:06', 16, 1, 'Facebook', 'https://www.facebook.com/adomsalud'),
(2, '2013-09-17 22:28:54', '2013-09-17 22:52:55', 16, 2, 'Youtube', 'http://www.youtube.com/'),
(3, '2013-09-17 22:29:24', '2013-09-17 22:51:51', 16, 3, 'Linkedin', 'http://co.linkedin.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_redirects`
--

DROP TABLE IF EXISTS `default_redirects`;
CREATE TABLE IF NOT EXISTS `default_redirects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(3) NOT NULL DEFAULT '302',
  PRIMARY KEY (`id`),
  KEY `from` (`from`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_search_index`
--

DROP TABLE IF EXISTS `default_search_index`;
CREATE TABLE IF NOT EXISTS `default_search_index` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=245 ;

--
-- Volcado de datos para la tabla `default_search_index`
--

INSERT INTO `default_search_index` (`id`, `title`, `description`, `keywords`, `keyword_hash`, `module`, `entry_key`, `entry_plural`, `entry_id`, `uri`, `cp_edit_uri`, `cp_delete_uri`) VALUES
(1, 'Home', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '1', 'home', 'admin/pages/edit/1', 'admin/pages/delete/1'),
(2, 'Contact', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '2', 'contact', 'admin/pages/edit/2', 'admin/pages/delete/2'),
(3, 'Search', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '3', 'search', 'admin/pages/edit/3', 'admin/pages/delete/3'),
(4, 'Results', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '4', 'search/results', 'admin/pages/edit/4', 'admin/pages/delete/4'),
(5, 'Page missing', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '5', '404', 'admin/pages/edit/5', 'admin/pages/delete/5'),
(15, 'Mision', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '21', 'quienes-somos/mision', 'admin/pages/edit/21', 'admin/pages/delete/21'),
(16, 'sdfsdfsdf', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '22', 'servicios/sdfsdfsdf', 'admin/pages/edit/22', 'admin/pages/delete/22'),
(20, 'Misión', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '30', 'about-us/mision', 'admin/pages/edit/30', 'admin/pages/delete/30'),
(27, 'Misión', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '41', 'about-us/mision', 'admin/pages/edit/41', 'admin/pages/delete/41'),
(79, 'Misión', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '43', 'about-us/mision', 'admin/pages/edit/43', 'admin/pages/delete/43'),
(35, 'loik', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '47', 'testimonios/loik', 'admin/pages/edit/47', 'admin/pages/delete/47'),
(36, 'Super Estupendo', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '52', 'testimonios/super_estupendo', 'admin/pages/edit/52', 'admin/pages/delete/52'),
(37, 'Don Sombra', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '53', 'testimonios/don_sombra', 'admin/pages/edit/53', 'admin/pages/delete/53'),
(39, 'Don oscar me tiene bravo', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '54', 'testimonios/don_oscar_me_tiene_bravo', 'admin/pages/edit/54', 'admin/pages/delete/54'),
(41, 'Servicio 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '55', 'servicios/servicio_1', 'admin/pages/edit/55', 'admin/pages/delete/55'),
(45, 'Servicio1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '57', 'servicios/servicio1', 'admin/pages/edit/57', 'admin/pages/delete/57'),
(46, 'servicio 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '59', 'servicios/servicio_1', 'admin/pages/edit/59', 'admin/pages/delete/59'),
(80, 'Servicio 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '61', 'servicios/servicio_1', 'admin/pages/edit/61', 'admin/pages/delete/61'),
(77, 'Mi testimonio', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '63', 'testimonios/mi_testimonio', 'admin/pages/edit/63', 'admin/pages/delete/63'),
(84, 'Neque porro quisquam', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '64', 'servicios/neque_porro_quisquam_est_qui_dolorem_ipsum_quia_dolor_sit_amet', 'admin/pages/edit/64', 'admin/pages/delete/64'),
(83, 'Cras sapien tellus', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '65', 'servicios/cras_sapien_tellus', 'admin/pages/edit/65', 'admin/pages/delete/65'),
(68, 'Mi noticia', 'esdta es la noticia completa', NULL, NULL, 'blog', 'blog:post', 'blog:posts', '1', 'blog/2013/08/mi-noticia', 'admin/blog/edit/1', 'admin/blog/delete/1'),
(67, 'Otra noticias muy importante', 'El contenido total de la noticia', NULL, NULL, 'blog', 'blog:post', 'blog:posts', '2', 'blog/2013/08/otra-noticias-muy-importante', 'admin/blog/edit/2', 'admin/blog/delete/2'),
(71, 'Ota noticia', 'orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', NULL, NULL, 'blog', 'blog:post', 'blog:posts', '3', 'blog/2013/08/ota-noticia', 'admin/blog/edit/3', 'admin/blog/delete/3'),
(76, 'Ota noticia mas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', NULL, NULL, 'blog', 'blog:post', 'blog:posts', '4', 'blog/2013/08/ota-noticia-mas', 'admin/blog/edit/4', 'admin/blog/delete/4'),
(74, 'EN LIMA', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '67', 'servicios/en_lima', 'admin/pages/edit/67', 'admin/pages/delete/67'),
(85, 'Don oscar', 'Esta es la notcia&nbsp;', NULL, NULL, 'blog', 'blog:post', 'blog:posts', '5', 'blog/2013/09/don-oscardc', 'admin/blog/edit/5', 'admin/blog/delete/5'),
(86, 'Mi destacado', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '70', 'destacados/mi_destacado', 'admin/pages/edit/70', 'admin/pages/delete/70'),
(87, 'asdsadsad', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '71', 'destacados/asdsadsad', 'admin/pages/edit/71', 'admin/pages/delete/71'),
(88, 'asdsfsdfsdfsdfsdfdsfdsfdsf', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '72', 'destacados/asdsfsdfsdfsdfsdfdsfdsfdsf', 'admin/pages/edit/72', 'admin/pages/delete/72'),
(206, 'Especialistas en Casa', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '76', 'destacados/destacado_1', 'admin/pages/edit/76', 'admin/pages/delete/76'),
(166, '¿Quiénes Somos?', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '79', 'quien_somos/quienes_somos', 'admin/pages/edit/79', 'admin/pages/delete/79'),
(92, 'Nuestos Valores', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '85', 'valores/nuestos_valores', 'admin/pages/edit/85', 'admin/pages/delete/85'),
(125, 'Ética', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '86', 'valores/valor_1', 'admin/pages/edit/86', 'admin/pages/delete/86'),
(120, 'Honestidad', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '87', 'valores/valor_2', 'admin/pages/edit/87', 'admin/pages/delete/87'),
(121, 'Respeto', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '88', 'valores/valor_3', 'admin/pages/edit/88', 'admin/pages/delete/88'),
(122, 'Puntualidad', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '89', 'valores/valor_4', 'admin/pages/edit/89', 'admin/pages/delete/89'),
(97, 'Consulta médica domiciliaria', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '96', 'servicios/consulta-medica-domiciliaria', 'admin/pages/edit/96', 'admin/pages/delete/96'),
(98, 'Consulta médica domiciliaria', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '102', 'servicios/consulta-medica-domiciliaria', 'admin/pages/edit/102', 'admin/pages/delete/102'),
(169, 'Consulta médica domiciliaria', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '104', 'servicios/consulta-medica-domiciliaria', 'admin/pages/edit/104', 'admin/pages/delete/104'),
(143, 'Enfermería', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '105', 'servicios/enfermeria', 'admin/pages/edit/105', 'admin/pages/delete/105'),
(144, 'Terapias', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '106', 'servicios/terapias', 'admin/pages/edit/106', 'admin/pages/delete/106'),
(146, 'Hospitalización en casa', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '107', 'servicios/hospitalizacion-en-casa', 'admin/pages/edit/107', 'admin/pages/delete/107'),
(148, 'Telemedicina', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '108', 'servicios/telemedicina', 'admin/pages/edit/108', 'admin/pages/delete/108'),
(106, 'Nivedad 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '113', 'novedad/nivedad-1', 'admin/pages/edit/113', 'admin/pages/delete/113'),
(107, 'Nivedad 2', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '114', 'novedad/nivedad-2', 'admin/pages/edit/114', 'admin/pages/delete/114'),
(108, 'Nivedad 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '116', 'novedad/nivedad-1', 'admin/pages/edit/116', 'admin/pages/delete/116'),
(109, 'Vacante 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '120', 'vacante/vacante-1', 'admin/pages/edit/120', 'admin/pages/delete/120'),
(110, 'Vacante 2', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '121', 'vacante/vacante-2', 'admin/pages/edit/121', 'admin/pages/delete/121'),
(149, 'Vacante', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '124', 'vacante/jhdjadkas', 'admin/pages/edit/124', 'admin/pages/delete/124'),
(123, 'Actualización técnica y cientifica', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '125', 'valores/actualizaciontecnicaycientifica', 'admin/pages/edit/125', 'admin/pages/delete/125'),
(124, 'Responsabilidad social y ambiental', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '126', 'valores/responsabilidad_social_y_ambiental', 'admin/pages/edit/126', 'admin/pages/delete/126'),
(151, 'LA RLLK', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '128', 'novedad/la-rllk', 'admin/pages/edit/128', 'admin/pages/delete/128'),
(152, 'Eduard', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '129', 'novedad/eduard', 'admin/pages/edit/129', 'admin/pages/delete/129'),
(153, 'asdasdasd', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '130', 'novedad/asdasdasd', 'admin/pages/edit/130', 'admin/pages/delete/130'),
(154, 'Vacante 1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '131', 'vacante/vacante-1', 'admin/pages/edit/131', 'admin/pages/delete/131'),
(198, 'Enfermería a Domicilio', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '109', 'destacados/destacado_2', 'admin/pages/edit/109', 'admin/pages/delete/109'),
(164, 'Terapias a Domicilio', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '110', 'destacados/destacado_3', 'admin/pages/edit/110', 'admin/pages/delete/110'),
(204, '¿Quiénes Somos?', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '133', 'quien_somos/quien_somos', 'admin/pages/edit/133', 'admin/pages/delete/133'),
(170, 'Vacante lorem ipsum', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '136', 'vacante/vacante-lorem-ipsum', 'admin/pages/edit/136', 'admin/pages/delete/136'),
(172, 'servicios', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '145', 'servicios/servicios', 'admin/pages/edit/145', 'admin/pages/delete/145'),
(219, 'Consulta Médica Domiciliaria', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '150', 'servicios/consulta-medica-domiciliaria', 'admin/pages/edit/150', 'admin/pages/delete/150'),
(222, 'Enfermería', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '151', 'servicios/enfermeria', 'admin/pages/edit/151', 'admin/pages/delete/151'),
(179, 'Terapias', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '152', 'servicios/terapias', 'admin/pages/edit/152', 'admin/pages/delete/152'),
(180, 'Hospitalizacion en Casa', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '153', 'servicios/hospitalizacion-en-casa', 'admin/pages/edit/153', 'admin/pages/delete/153'),
(234, 'Cáncer de Mama', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '155', 'novedad/novedad-1', 'admin/pages/edit/155', 'admin/pages/delete/155'),
(186, 'Vacante1', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '156', 'vacante/vacante1', 'admin/pages/edit/156', 'admin/pages/delete/156'),
(199, 'Especialistas por Telemedicina', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '154', 'servicios/telemedicina', 'admin/pages/edit/154', 'admin/pages/delete/154'),
(203, 'Auxiliar de Enfermería', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '158', 'vacante/vacante1', 'admin/pages/edit/158', 'admin/pages/delete/158'),
(233, 'Enfermería', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '164', 'servicios/enfermeria', 'admin/pages/edit/164', 'admin/pages/delete/164'),
(226, 'Especialistas por Telemedicina', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '167', 'servicios/telemedicina', 'admin/pages/edit/167', 'admin/pages/delete/167'),
(237, 'Consulta Médica Domiciliaria', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '163', 'servicios/consulta-medica-domiciliaria', 'admin/pages/edit/163', 'admin/pages/delete/163'),
(229, 'Terapias', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '165', 'servicios/terapias', 'admin/pages/edit/165', 'admin/pages/delete/165'),
(230, 'Hospitalización en casa', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '166', 'servicios/hospitalizacion-en-casa', 'admin/pages/edit/166', 'admin/pages/delete/166'),
(236, 'Octubre: Mes de Sensibilización sobre el Cáncer de Mama', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '169', 'novedad/novedad-1', 'admin/pages/edit/169', 'admin/pages/delete/169'),
(241, 'Especialistas en Casa', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '171', 'destacados/especialistas-en-casa', 'admin/pages/edit/171', 'admin/pages/delete/171'),
(242, 'Enfermería a Domicilio', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '172', 'destacados/enfermeria-a-domicilio', 'admin/pages/edit/172', 'admin/pages/delete/172'),
(244, 'Terapias a Domicilio', '', NULL, NULL, 'pages', 'pages:page', 'pages:pages', '173', 'destacados/terapias-a-domicilio', 'admin/pages/edit/173', 'admin/pages/delete/173');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_services_us`
--

DROP TABLE IF EXISTS `default_services_us`;
CREATE TABLE IF NOT EXISTS `default_services_us` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_inf` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_inf` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_services_us`
--

INSERT INTO `default_services_us` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `name`, `description`, `images`, `name_inf`, `description_inf`) VALUES
(1, '2013-09-14 02:01:51', '2013-10-07 20:42:21', 2, 1, 'Productos Empresariales', '<p class="main_p">En ADOM tenemos productos y servicios flexibles que se ajustan a las necesidades y presupuesto de su empresa. Todos nuestros servicios est&aacute;n habilitados por la Secretar&iacute;a Distrital de Salud y cuentan con certificaci&oacute;n de calidad ICONTEC ISO 9001 y IQ-Net International.<br />\n<br />\nSus clientes y pacientes estar&aacute;n en manos de un equipo completo e integral, liderado por m&eacute;dicos, enfermeras, terapeutas y profesionales administrativos.<br />\n<br />\nAlgunos de nuestros servicios para empresas:</p>\n\n<ul class="list_serv">\n <li><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicios/consulta-medica-domiciliaria">Consulta M&eacute;dica Domiciliaria</a></li>\n <li>Hospitalizaci&oacute;n en casa</li>\n <li>Turnos de enfermer&iacute;a</li>\n <li>Terapia f&iacute;sica</li>\n <li>Terapia Respiratoria</li>\n <li>Terapia de lenguaje y/o degluci&oacute;n</li>\n <li>Especialista en casa (telemedicina)</li>\n <li>Cl&iacute;nica de heridas</li>\n <li>Farmacoterapia</li>\n <li>Rehabilitaci&oacute;n</li>\n <li>Insumos y medicamentos</li>\n <li>Alquiler de equipos m&eacute;dicos</li>\n <li>Entrenamiento a cuidadores</li>\n</ul>\n\n<p class="main_p">Brindamos asesor&iacute;a a nuestros clientes para reducir costos de hospitalizaci&oacute;n sin poner en riesgo la calidad del servicio ni la salud del paciente.</p>\n', '8ac7b0206b84349', '¿Quiere Proteger a sus Clientes y Empleados las 24 Horas?', '<p class="main_p">En ADOM Salud Domiciliaria cuidamos la salud de sus empleados y clientes las 24 horas del d&iacute;a, los 365 d&iacute;as del a&ntilde;o. A diferencia de otras empresas de salud, en <strong>ADOM no exigimos el pago de mensualidades ni afiliaciones,</strong> pero a trav&eacute;s de un convenio s&iacute; nos comprometemos con su empresa a prestarle atenci&oacute;n m&eacute;dica oportuna en Bogot&aacute;.<br />\n<br />\nNuestro convenio contempla los siguientes compromisos con su empresa:</p>\n\n<ul class="list_serv">\n <li>1. Dar respuesta telef&oacute;nica inmediata (antes de 3 minutos) a la solicitud de atenci&oacute;n m&eacute;dica de los pacientes, e informar en esta llamada la hora en la cual ser&aacute; atendido el paciente.</li>\n <li>2. Prestar Atenci&oacute;n M&eacute;dica Domiciliaria permanente, las 24 horas, todos los d&iacute;as del a&ntilde;o, y servicios de enfermer&iacute;a y terapias entre las 7 am y 6pm, todos los d&iacute;as.</li>\n <li>3. Elaborar y archivar la historia cl&iacute;nica de cada uno de los pacientes atendidos, la cual estar&aacute; a disposici&oacute;n del paciente.</li>\n <li>4. Hacer seguimiento telef&oacute;nico al d&iacute;a siguiente o antes, si el caso lo amerita, para verificar la evoluci&oacute;n del paciente y resolver las dudas que puedan existir.</li>\n <li>5. Prestar orientaci&oacute;n m&eacute;dica telef&oacute;nica cuando no sea necesaria la atenci&oacute;n domiciliaria.</li>\n <li>6. Realizar ex&aacute;menes de laboratorio y electrocardiogramas, cuando sean requeridos en la consulta domiciliaria, previa autorizaci&oacute;n del paciente y de la empresa.</li>\n <li>7. Acatar los criterios y procedimientos que determine su empresa para la prestaci&oacute;n del servicio.</li>\n <li>8. Suministrar la informaci&oacute;n que sea necesaria para cualquier fin cient&iacute;fico, legal o administrativo.</li>\n <li>9. Remitir al usuario para manejo institucional o especializado, con el resumen m&eacute;dico respectivo, si la situaci&oacute;n lo indica.</li>\n <li>10. Los m&eacute;dicos y dem&aacute;s profesionales de ADOM cobrar&aacute;n &uacute;nicamente por los servicios prestados, con base en las tarifas establecidas e informadas previamente en la firma del convenio.</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_settings`
--

DROP TABLE IF EXISTS `default_settings`;
CREATE TABLE IF NOT EXISTS `default_settings` (
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

--
-- Volcado de datos para la tabla `default_settings`
--

INSERT INTO `default_settings` (`slug`, `title`, `description`, `type`, `default`, `value`, `options`, `is_required`, `is_gui`, `module`, `order`) VALUES
('activation_email', 'Activation Email', 'Send out an e-mail with an activation link when a user signs up. Disable this so that admins must manually activate each account.', 'select', '1', '', '0=activate_by_admin|1=activate_by_email|2=no_activation', 0, 1, 'users', 961),
('addons_upload', 'Addons Upload Permissions', 'Keeps mere admins from uploading addons by default', 'text', '0', '1', '', 1, 0, '', 0),
('admin_force_https', 'Force HTTPS for Control Panel?', 'Allow only the HTTPS protocol when using the Control Panel?', 'radio', '0', '', '1=Yes|0=No', 1, 1, '', 0),
('admin_theme', 'Control Panel Theme', 'Select the theme for the control panel.', '', '', 'pyrocms', 'func:get_themes', 1, 0, '', 0),
('akismet_api_key', 'Akismet API Key', 'Akismet is a spam-blocker from the WordPress team. It keeps spam under control without forcing users to get past human-checking CAPTCHA forms.', 'text', '', '', '', 0, 1, 'integration', 981),
('api_enabled', 'API Enabled', 'Allow API access to all modules which have an API controller.', 'select', '0', '0', '0=Disabled|1=Enabled', 0, 0, 'api', 0),
('api_user_keys', 'API User Keys', 'Allow users to sign up for API keys (if the API is Enabled).', 'select', '0', '0', '0=Disabled|1=Enabled', 0, 0, 'api', 0),
('auto_username', 'Auto Username', 'Create the username automatically, meaning users can skip making one on registration.', 'radio', '1', '', '1=Enabled|0=Disabled', 0, 1, 'users', 964),
('cdn_domain', 'CDN Domain', 'CDN domains allow you to offload static content to various edge servers, like Amazon CloudFront or MaxCDN.', 'text', '', '', '', 0, 1, 'integration', 1000),
('ckeditor_config', 'CKEditor Config', 'You can find a list of valid configuration items in <a target="_blank" href="http://docs.cksource.com/ckeditor_api/symbols/CKEDITOR.config.html">CKEditor''s documentation.</a>', 'textarea', '', '{{# this is a wysiwyg-simple editor customized for the blog module (it allows images to be inserted) #}}\n$(''textarea#intro.wysiwyg-simple'').ckeditor({\n	toolbar: [\n		[''pyroimages''],\n		[''Bold'', ''Italic'', ''-'', ''NumberedList'', ''BulletedList'', ''-'', ''Link'', ''Unlink'']\n	  ],\n	extraPlugins: ''pyroimages'',\n	width: ''99%'',\n	height: 100,\n	dialog_backgroundCoverColor: ''#000'',\n	defaultLanguage: ''{{ helper:config item="default_language" }}'',\n	language: ''{{ global:current_language }}''\n});\n\n{{# this is the config for all wysiwyg-simple textareas #}}\n$(''textarea.wysiwyg-simple'').ckeditor({\n	toolbar: [\n		[''Bold'', ''Italic'', ''-'', ''NumberedList'', ''BulletedList'', ''-'', ''Link'', ''Unlink'']\n	  ],\n	width: ''99%'',\n	height: 100,\n	dialog_backgroundCoverColor: ''#000'',\n	defaultLanguage: ''{{ helper:config item="default_language" }}'',\n	language: ''{{ global:current_language }}''\n});\n\n{{# and this is the advanced editor #}}\n$(''textarea.wysiwyg-advanced'').ckeditor({\n	toolbar: [\n		[''Maximize''],\n		[''pyroimages'', ''pyrofiles''],\n		[''Cut'',''Copy'',''Paste'',''PasteFromWord''],\n		[''Undo'',''Redo'',''-'',''Find'',''Replace''],\n		[''Link'',''Unlink''],\n		[''Table'',''HorizontalRule'',''SpecialChar''],\n		[''Bold'',''Italic'',''StrikeThrough''],\n		[''JustifyLeft'',''JustifyCenter'',''JustifyRight'',''JustifyBlock'',''-'',''BidiLtr'',''BidiRtl''],\n		[''Format'', ''FontSize'', ''Subscript'',''Superscript'', ''NumberedList'',''BulletedList'',''Outdent'',''Indent'',''Blockquote''],\n		[''ShowBlocks'', ''RemoveFormat'', ''Source'']\n	],\n	extraPlugins: ''pyroimages,pyrofiles'',\n	width: ''99%'',\n	height: 400,\n	dialog_backgroundCoverColor: ''#000'',\n	removePlugins: ''elementspath'',\n	defaultLanguage: ''{{ helper:config item="default_language" }}'',\n	language: ''{{ global:current_language }}''\n});', '', 1, 1, 'wysiwyg', 993),
('comment_markdown', 'Allow Markdown', 'Do you want to allow visitors to post comments using Markdown?', 'select', '0', '0', '0=Text Only|1=Allow Markdown', 1, 1, 'comments', 965),
('comment_order', 'Comment Order', 'Sort order in which to display comments.', 'select', 'ASC', 'ASC', 'ASC=Oldest First|DESC=Newest First', 1, 1, 'comments', 966),
('contact_email', 'Contact E-mail', 'All e-mails from users, guests and the site will go to this e-mail address.', 'text', 'rigo.castro@imaginamos.co', 'eduard.russy@imaginamos.co', '', 1, 1, 'email', 979),
('currency', 'Currency', 'The currency symbol for use on products, services, etc.', 'text', '&pound;', '', '', 1, 1, '', 994),
('dashboard_rss', 'Dashboard RSS Feed', 'Link to an RSS feed that will be displayed on the dashboard.', 'text', 'https://www.pyrocms.com/blog/rss/all.rss', '', '', 0, 1, '', 990),
('dashboard_rss_count', 'Dashboard RSS Items', 'How many RSS items would you like to display on the dashboard?', 'text', '5', '5', '', 1, 1, '', 989),
('date_format', 'Date Format', 'How should dates be displayed across the website and control panel? Using the <a target="_blank" href="http://php.net/manual/en/function.date.php">date format</a> from PHP - OR - Using the format of <a target="_blank" href="http://php.net/manual/en/function.strftime.php">strings formatted as date</a> from PHP.', 'text', 'F j, Y', '', '', 1, 1, '', 995),
('default_theme', 'Default Theme', 'Select the theme you want users to see by default.', '', 'default', 'adom', 'func:get_themes', 1, 0, '', 0),
('enable_comments', 'Enable Comments', 'Enable comments.', 'radio', '1', '1', '1=Enabled|0=Disabled', 1, 1, 'comments', 968),
('enable_profiles', 'Enable profiles', 'Allow users to add and edit profiles.', 'radio', '1', '', '1=Enabled|0=Disabled', 1, 1, 'users', 963),
('enable_registration', 'Enable user registration', 'Allow users to register in your site.', 'radio', '1', '', '1=Enabled|0=Disabled', 0, 1, 'users', 961),
('files_cache', 'Files Cache', 'When outputting an image via site.com/files what shall we set the cache expiration for?', 'select', '480', '480', '0=no-cache|1=1-minute|60=1-hour|180=3-hour|480=8-hour|1440=1-day|43200=30-days', 1, 1, 'files', 986),
('files_cf_api_key', 'Rackspace Cloud Files API Key', 'You also must provide your Cloud Files API Key. You will find it at the same location as your Username in your Rackspace account.', 'text', '', '', '', 0, 1, 'files', 989),
('files_cf_username', 'Rackspace Cloud Files Username', 'To enable cloud file storage in your Rackspace Cloud Files account please enter your Cloud Files Username. <a href="https://manage.rackspacecloud.com/APIAccess.do">Find your credentials</a>', 'text', '', '', '', 0, 1, 'files', 990),
('files_enabled_providers', 'Enabled File Storage Providers', 'Which file storage providers do you want to enable? (If you enable a cloud provider you must provide valid auth keys below', 'checkbox', '0', '0', 'amazon-s3=Amazon S3|rackspace-cf=Rackspace Cloud Files', 0, 1, 'files', 994),
('files_s3_access_key', 'Amazon S3 Access Key', 'To enable cloud file storage in your Amazon S3 account provide your Access Key. <a href="https://aws-portal.amazon.com/gp/aws/securityCredentials#access_credentials">Find your credentials</a>', 'text', '', '', '', 0, 1, 'files', 993),
('files_s3_geographic_location', 'Amazon S3 Geographic Location', 'Either US or EU. If you change this you must also change the S3 URL.', 'radio', 'US', 'US', 'US=United States|EU=Europe', 1, 1, 'files', 991),
('files_s3_secret_key', 'Amazon S3 Secret Key', 'You also must provide your Amazon S3 Secret Key. You will find it at the same location as your Access Key in your Amazon account.', 'text', '', '', '', 0, 1, 'files', 992),
('files_s3_url', 'Amazon S3 URL', 'Change this if using one of Amazon''s EU locations or a custom domain.', 'text', 'http://{{ bucket }}.s3.amazonaws.com/', 'http://{{ bucket }}.s3.amazonaws.com/', '', 0, 1, 'files', 991),
('files_upload_limit', 'Filesize Limit', 'Maximum filesize to allow when uploading. Specify the size in MB. Example: 5', 'text', '5', '5', '', 1, 1, 'files', 987),
('frontend_enabled', 'Site Status', 'Use this option to the user-facing part of the site on or off. Useful when you want to take the site down for maintenance.', 'radio', '1', '', '1=Open|0=Closed', 1, 1, '', 988),
('ga_email', 'Google Analytic E-mail', 'E-mail address used for Google Analytics, we need this to show the graph on the dashboard.', 'text', '', '', '', 0, 1, 'integration', 983),
('ga_password', 'Google Analytic Password', 'This is also needed to show the graph on the dashboard. You will need to allow access to Google to get this to work. See <a href="https://accounts.google.com/b/0/IssuedAuthSubTokens?hl=en_US" target="_blank">Authorized Access to your Google Account</a>', 'password', '', '', '', 0, 1, 'integration', 982),
('ga_profile', 'Google Analytic Profile ID', 'Profile ID for this website in Google Analytics', 'text', '', '', '', 0, 1, 'integration', 984),
('ga_tracking', 'Google Tracking Code', 'Enter your Google Analytic Tracking Code to activate Google Analytics view data capturing. E.g: UA-19483569-6', 'text', '', '', '', 0, 1, 'integration', 985),
('mail_line_endings', 'Email Line Endings', 'Change from the standard \\r\\n line ending to PHP_EOL for some email servers.', 'select', '1', '1', '0=PHP_EOL|1=\\r\\n', 0, 1, 'email', 972),
('mail_protocol', 'Mail Protocol', 'Select desired email protocol.', 'select', 'mail', 'mail', 'mail=Mail|sendmail=Sendmail|smtp=SMTP', 1, 1, 'email', 977),
('mail_sendmail_path', 'Sendmail Path', 'Path to server sendmail binary.', 'text', '', '', '', 0, 1, 'email', 972),
('mail_smtp_host', 'SMTP Host Name', 'The host name of your smtp server.', 'text', '', '', '', 0, 1, 'email', 976),
('mail_smtp_pass', 'SMTP password', 'SMTP password.', 'password', '', '', '', 0, 1, 'email', 975),
('mail_smtp_port', 'SMTP Port', 'SMTP port number.', 'text', '', '', '', 0, 1, 'email', 974),
('mail_smtp_user', 'SMTP User Name', 'SMTP user name.', 'text', '', '', '', 0, 1, 'email', 973),
('meta_topic', 'Meta Topic', 'Two or three words describing this type of company/website.', 'text', 'Content Management', 'Add your slogan here', '', 0, 1, '', 998),
('moderate_comments', 'Moderate Comments', 'Force comments to be approved before they appear on the site.', 'radio', '1', '1', '1=Enabled|0=Disabled', 1, 1, 'comments', 967),
('profile_visibility', 'Profile Visibility', 'Specify who can view user profiles on the public site', 'select', 'public', '', 'public=profile_public|owner=profile_owner|hidden=profile_hidden|member=profile_member', 0, 1, 'users', 960),
('records_per_page', 'Records Per Page', 'How many records should we show per page in the admin section?', 'select', '25', '', '10=10|25=25|50=50|100=100', 1, 1, '', 992),
('registered_email', 'User Registered Email', 'Send a notification email to the contact e-mail when someone registers.', 'radio', '1', '', '1=Enabled|0=Disabled', 0, 1, 'users', 962),
('rss_feed_items', 'Feed item count', 'How many items should we show in RSS/blog feeds?', 'select', '25', '', '10=10|25=25|50=50|100=100', 1, 1, '', 991),
('server_email', 'Server E-mail', 'All e-mails to users will come from this e-mail address.', 'text', 'admin@localhost', '', '', 1, 1, 'email', 978),
('site_lang', 'Site Language', 'The native language of the website, used to choose templates of e-mail notifications, contact form, and other features that should not depend on the language of a user.', 'select', 'en', 'es', 'func:get_supported_lang', 1, 1, '', 997),
('site_name', 'Site Name', 'The name of the website for page titles and for use around the site.', 'text', 'Un-named Website', '', '', 1, 1, '', 1000),
('site_public_lang', 'Public Languages', 'Which are the languages really supported and offered on the front-end of your website?', 'checkbox', 'en', 'es', 'func:get_supported_lang', 1, 1, '', 996),
('site_slogan', 'Site Slogan', 'The slogan of the website for page titles and for use around the site', 'text', '', 'Add your slogan here', '', 0, 1, '', 999),
('unavailable_message', 'Unavailable Message', 'When the site is turned off or there is a major problem, this message will show to users.', 'textarea', 'Sorry, this website is currently unavailable.', '', '', 0, 1, '', 987);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_theme_options`
--

DROP TABLE IF EXISTS `default_theme_options`;
CREATE TABLE IF NOT EXISTS `default_theme_options` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `default_theme_options`
--

INSERT INTO `default_theme_options` (`id`, `slug`, `title`, `description`, `type`, `default`, `value`, `options`, `is_required`, `theme`) VALUES
(1, 'show_breadcrumbs', 'Show Breadcrumbs', 'Would you like to display breadcrumbs?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'default'),
(2, 'layout', 'Layout', 'Which type of layout shall we use?', 'select', '2 column', '2 column', '2 column=Two Column|full-width=Full Width|full-width-home=Full Width Home Page', 1, 'default'),
(3, 'pyrocms_recent_comments', 'Recent Comments', 'Would you like to display recent comments on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'pyrocms'),
(4, 'pyrocms_news_feed', 'News Feed', 'Would you like to display the news feed on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'pyrocms'),
(5, 'pyrocms_quick_links', 'Quick Links', 'Would you like to display quick links on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'pyrocms'),
(6, 'pyrocms_analytics_graph', 'Analytics Graph', 'Would you like to display the graph on the dashboard?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'pyrocms'),
(7, 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', 1, 'base'),
(8, 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'base'),
(9, 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', 1, 'base'),
(10, 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'base'),
(11, 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', 1, 'mts'),
(12, 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'mts'),
(13, 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', 1, 'mts'),
(14, 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'mts'),
(15, 'background', 'Background', 'Choose the default background for the theme.', 'select', 'fabric', 'fabric', 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture', 1, 'adom'),
(16, 'slider', 'Slider', 'Would you like to display the slider on the homepage?', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'adom'),
(17, 'color', 'Default Theme Color', 'This changes things like background color, link colors etc…', 'select', 'pink', 'pink', 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink', 1, 'adom'),
(18, 'show_breadcrumbs', 'Do you want to show breadcrumbs?', 'If selected it shows a string of breadcrumbs at the top of the page.', 'radio', 'yes', 'yes', 'yes=Yes|no=No', 1, 'adom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_titulos`
--

DROP TABLE IF EXISTS `default_titulos`;
CREATE TABLE IF NOT EXISTS `default_titulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_trabaja`
--

DROP TABLE IF EXISTS `default_trabaja`;
CREATE TABLE IF NOT EXISTS `default_trabaja` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `images` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_inf` longtext COLLATE utf8_unicode_ci,
  `images_inf1` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_inf2` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_inf3` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `default_trabaja`
--

INSERT INTO `default_trabaja` (`id`, `created`, `updated`, `created_by`, `ordering_count`, `description`, `images`, `description_inf`, `images_inf1`, `images_inf2`, `images_inf3`) VALUES
(1, '2013-09-14 19:11:36', '2013-10-08 16:02:49', 2, 1, '<span font-family:="" font-size:="" line-height:="" text-align:="">En ADOM creemos que nuestro equipo es el factor fundamental para la recuperaci&oacute;n de nuestros pacientes. Somos gente apasionada, comprometida, responsable, respetuosa, puntual y honesta, que ama su profesi&oacute;n y contribuye a la calidad de vida de todas las personas. &nbsp;</span>', 'a8d3b321bf522e2', 'Somos un equipo de m&aacute;s de 200 personas que aman su profesi&oacute;n y est&aacute;n comprometidas con la calidad de vida de sus pacientes. Para llevar salud a m&aacute;s pacientes en Bogota, necesitamos de personas de diferentes &aacute;reas de la salud:&nbsp;\n<ul>\n <li>M&eacute;dicos Generales</li>\n <li>M&eacute;dicos Pediatras</li>\n <li>Enfermeras Profesionales</li>\n <li>Auxiliares de Enfermer&iacute;a&nbsp;</li>\n <li>Terapeutas&nbsp;</li>\n <li>Profesionales Administrativos.</li>\n</ul>\n<span font-family:="""" font-size:="""" line-height:="""">Si te identificas con nuestros valores, aplica a nuestras vacantes y haz parte de esta gran familia. &nbsp;<a href="http://repositorio.imaginamos.com.co/FBZ/Adom/vacantes"> Ver vacantes</a></span>', '0dfe371ea267fe7', 'c6b55018bc73536', '5d2e73ad66e7953');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_users`
--

DROP TABLE IF EXISTS `default_users`;
CREATE TABLE IF NOT EXISTS `default_users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Registered User Information' AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `default_users`
--

INSERT INTO `default_users` (`id`, `email`, `password`, `salt`, `group_id`, `ip_address`, `active`, `activation_code`, `created_on`, `last_login`, `username`, `forgotten_password_code`, `remember_code`) VALUES
(2, 'cms@imaginamos.com', 'a3d14ea814e1b0bf08295f6df0962544383db1bc', '40d93b', 1, '127.0.0.1', 1, NULL, 1377278746, 1381443101, 'imaginamos', NULL, '6626a7d0ec431ac997c7b9c4bd8a0c25676ba128'),
(16, 'admin@admin.com', 'a3d14ea814e1b0bf08295f6df0962544383db1bc', '40d93b', 2, '127.0.0.1', 1, NULL, 1378933727, 1381257185, 'admin', NULL, '6626a7d0ec431ac997c7b9c4bd8a0c25676ba128');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_vacantes_aplicar`
--

DROP TABLE IF EXISTS `default_vacantes_aplicar`;
CREATE TABLE IF NOT EXISTS `default_vacantes_aplicar` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ordering_count` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vacante` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_otro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otro_estudio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` longtext COLLATE utf8_unicode_ci,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_variables`
--

DROP TABLE IF EXISTS `default_variables`;
CREATE TABLE IF NOT EXISTS `default_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_widgets`
--

DROP TABLE IF EXISTS `default_widgets`;
CREATE TABLE IF NOT EXISTS `default_widgets` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `default_widgets`
--

INSERT INTO `default_widgets` (`id`, `slug`, `title`, `description`, `author`, `website`, `version`, `enabled`, `order`, `updated_on`) VALUES
(1, 'google_maps', 'a:10:{s:2:"en";s:11:"Google Maps";s:2:"el";s:19:"Χάρτης Google";s:2:"nl";s:11:"Google Maps";s:2:"br";s:11:"Google Maps";s:2:"pt";s:11:"Google Maps";s:2:"ru";s:17:"Карты Google";s:2:"id";s:11:"Google Maps";s:2:"fi";s:11:"Google Maps";s:2:"fr";s:11:"Google Maps";s:2:"fa";s:17:"نقشه گوگل";}', 'a:10:{s:2:"en";s:32:"Display Google Maps on your site";s:2:"el";s:78:"Προβάλετε έναν Χάρτη Google στον ιστότοπό σας";s:2:"nl";s:27:"Toon Google Maps in uw site";s:2:"br";s:34:"Mostra mapas do Google no seu site";s:2:"pt";s:34:"Mostra mapas do Google no seu site";s:2:"ru";s:80:"Выводит карты Google на страницах вашего сайта";s:2:"id";s:37:"Menampilkan Google Maps di Situs Anda";s:2:"fi";s:39:"Näytä Google Maps kartta sivustollasi";s:2:"fr";s:42:"Publiez un plan Google Maps sur votre site";s:2:"fa";s:59:"نمایش داده نقشه گوگل بر روی سایت ";}', 'Gregory Athons', 'http://www.gregathons.com', '1.0.0', 1, 1, 1377291489),
(2, 'html', 's:4:"HTML";', 'a:10:{s:2:"en";s:28:"Create blocks of custom HTML";s:2:"el";s:80:"Δημιουργήστε περιοχές με δικό σας κώδικα HTML";s:2:"br";s:41:"Permite criar blocos de HTML customizados";s:2:"pt";s:41:"Permite criar blocos de HTML customizados";s:2:"nl";s:30:"Maak blokken met maatwerk HTML";s:2:"ru";s:83:"Создание HTML-блоков с произвольным содержимым";s:2:"id";s:24:"Membuat blok HTML apapun";s:2:"fi";s:32:"Luo lohkoja omasta HTML koodista";s:2:"fr";s:36:"Créez des blocs HTML personnalisés";s:2:"fa";s:58:"ایجاد قسمت ها به صورت اچ تی ام ال";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', 1, 2, 1377291489),
(3, 'login', 'a:10:{s:2:"en";s:5:"Login";s:2:"el";s:14:"Σύνδεση";s:2:"nl";s:5:"Login";s:2:"br";s:5:"Login";s:2:"pt";s:5:"Login";s:2:"ru";s:22:"Вход на сайт";s:2:"id";s:5:"Login";s:2:"fi";s:13:"Kirjautuminen";s:2:"fr";s:9:"Connexion";s:2:"fa";s:10:"لاگین";}', 'a:10:{s:2:"en";s:36:"Display a simple login form anywhere";s:2:"el";s:96:"Προβάλετε μια απλή φόρμα σύνδεσης χρήστη οπουδήποτε";s:2:"br";s:69:"Permite colocar um formulário de login em qualquer lugar do seu site";s:2:"pt";s:69:"Permite colocar um formulário de login em qualquer lugar do seu site";s:2:"nl";s:32:"Toon overal een simpele loginbox";s:2:"ru";s:72:"Выводит простую форму для входа на сайт";s:2:"id";s:32:"Menampilkan form login sederhana";s:2:"fi";s:52:"Näytä yksinkertainen kirjautumislomake missä vain";s:2:"fr";s:54:"Affichez un formulaire de connexion où vous souhaitez";s:2:"fa";s:70:"نمایش یک لاگین ساده در هر قسمتی از سایت";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', 1, 3, 1377291489),
(4, 'navigation', 'a:10:{s:2:"en";s:10:"Navigation";s:2:"el";s:16:"Πλοήγηση";s:2:"nl";s:9:"Navigatie";s:2:"br";s:11:"Navegação";s:2:"pt";s:11:"Navegação";s:2:"ru";s:18:"Навигация";s:2:"id";s:8:"Navigasi";s:2:"fi";s:10:"Navigaatio";s:2:"fr";s:10:"Navigation";s:2:"fa";s:10:"منوها";}', 'a:10:{s:2:"en";s:40:"Display a navigation group with a widget";s:2:"el";s:100:"Προβάλετε μια ομάδα στοιχείων πλοήγησης στον ιστότοπο";s:2:"nl";s:38:"Toon een navigatiegroep met een widget";s:2:"br";s:62:"Exibe um grupo de links de navegação como widget em seu site";s:2:"pt";s:62:"Exibe um grupo de links de navegação como widget no seu site";s:2:"ru";s:88:"Отображает навигационную группу внутри виджета";s:2:"id";s:44:"Menampilkan grup navigasi menggunakan widget";s:2:"fi";s:37:"Näytä widgetillä navigaatio ryhmä";s:2:"fr";s:47:"Affichez un groupe de navigation dans un widget";s:2:"fa";s:71:"نمایش گروهی از منوها با استفاده از ویجت";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.2.0', 1, 4, 1377291489),
(5, 'rss_feed', 'a:10:{s:2:"en";s:8:"RSS Feed";s:2:"el";s:24:"Τροφοδοσία RSS";s:2:"nl";s:8:"RSS Feed";s:2:"br";s:8:"Feed RSS";s:2:"pt";s:8:"Feed RSS";s:2:"ru";s:31:"Лента новостей RSS";s:2:"id";s:8:"RSS Feed";s:2:"fi";s:10:"RSS Syöte";s:2:"fr";s:8:"Flux RSS";s:2:"fa";s:19:"خبر خوان RSS";}', 'a:10:{s:2:"en";s:41:"Display parsed RSS feeds on your websites";s:2:"el";s:82:"Προβάλετε τα περιεχόμενα μιας τροφοδοσίας RSS";s:2:"nl";s:28:"Toon RSS feeds op uw website";s:2:"br";s:48:"Interpreta e exibe qualquer feed RSS no seu site";s:2:"pt";s:48:"Interpreta e exibe qualquer feed RSS no seu site";s:2:"ru";s:94:"Выводит обработанную ленту новостей на вашем сайте";s:2:"id";s:42:"Menampilkan kutipan RSS feed di situs Anda";s:2:"fi";s:39:"Näytä purettu RSS syöte sivustollasi";s:2:"fr";s:39:"Affichez un flux RSS sur votre site web";s:2:"fa";s:46:"نمایش خوراک های RSS در سایت";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.2.0', 1, 5, 1377291490),
(6, 'social_bookmark', 'a:10:{s:2:"en";s:15:"Social Bookmark";s:2:"el";s:35:"Κοινωνική δικτύωση";s:2:"nl";s:19:"Sociale Bladwijzers";s:2:"br";s:15:"Social Bookmark";s:2:"pt";s:15:"Social Bookmark";s:2:"ru";s:37:"Социальные закладки";s:2:"id";s:15:"Social Bookmark";s:2:"fi";s:24:"Sosiaalinen kirjanmerkki";s:2:"fr";s:13:"Liens sociaux";s:2:"fa";s:52:"بوکمارک های شبکه های اجتماعی";}', 'a:10:{s:2:"en";s:47:"Configurable social bookmark links from AddThis";s:2:"el";s:111:"Παραμετροποιήσιμα στοιχεία κοινωνικής δικτυώσης από το AddThis";s:2:"nl";s:43:"Voeg sociale bladwijzers toe vanuit AddThis";s:2:"br";s:87:"Adiciona links de redes sociais usando o AddThis, podendo fazer algumas configurações";s:2:"pt";s:87:"Adiciona links de redes sociais usando o AddThis, podendo fazer algumas configurações";s:2:"ru";s:90:"Конфигурируемые социальные закладки с сайта AddThis";s:2:"id";s:60:"Tautan social bookmark yang dapat dikonfigurasi dari AddThis";s:2:"fi";s:59:"Konfiguroitava sosiaalinen kirjanmerkki linkit AddThis:stä";s:2:"fr";s:43:"Liens sociaux personnalisables avec AddThis";s:2:"fa";s:71:"تنظیم و نمایش لینک های شبکه های اجتماعی";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', 1, 6, 1377291490),
(7, 'archive', 'a:8:{s:2:"en";s:7:"Archive";s:2:"br";s:15:"Arquivo do Blog";s:2:"fa";s:10:"آرشیو";s:2:"pt";s:15:"Arquivo do Blog";s:2:"el";s:33:"Αρχείο Ιστολογίου";s:2:"fr";s:16:"Archives du Blog";s:2:"ru";s:10:"Архив";s:2:"id";s:7:"Archive";}', 'a:8:{s:2:"en";s:64:"Display a list of old months with links to posts in those months";s:2:"br";s:95:"Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente";s:2:"fa";s:101:"نمایش لیست ماه های گذشته به همراه لینک به پست های مربوطه";s:2:"pt";s:95:"Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente";s:2:"el";s:155:"Προβάλλει μια λίστα μηνών και συνδέσμους σε αναρτήσεις που έγιναν σε κάθε από αυτούς";s:2:"fr";s:95:"Permet d''afficher une liste des mois passés avec des liens vers les posts relatifs à ces mois";s:2:"ru";s:114:"Выводит список по месяцам со ссылками на записи в этих месяцах";s:2:"id";s:63:"Menampilkan daftar bulan beserta tautan post di setiap bulannya";}', 'Phil Sturgeon', 'http://philsturgeon.co.uk/', '1.0.0', 1, 7, 1377291489),
(8, 'blog_categories', 'a:8:{s:2:"en";s:15:"Blog Categories";s:2:"br";s:18:"Categorias do Blog";s:2:"pt";s:18:"Categorias do Blog";s:2:"el";s:41:"Κατηγορίες Ιστολογίου";s:2:"fr";s:19:"Catégories du Blog";s:2:"ru";s:29:"Категории Блога";s:2:"id";s:12:"Kateori Blog";s:2:"fa";s:28:"مجموعه های بلاگ";}', 'a:8:{s:2:"en";s:30:"Show a list of blog categories";s:2:"br";s:57:"Mostra uma lista de navegação com as categorias do Blog";s:2:"pt";s:57:"Mostra uma lista de navegação com as categorias do Blog";s:2:"el";s:97:"Προβάλει την λίστα των κατηγοριών του ιστολογίου σας";s:2:"fr";s:49:"Permet d''afficher la liste de Catégories du Blog";s:2:"ru";s:57:"Выводит список категорий блога";s:2:"id";s:35:"Menampilkan daftar kategori tulisan";s:2:"fa";s:55:"نمایش لیستی از مجموعه های بلاگ";}', 'Stephen Cozart', 'http://github.com/clip/', '1.0.0', 1, 8, 1377291489),
(9, 'latest_posts', 'a:8:{s:2:"en";s:12:"Latest posts";s:2:"br";s:24:"Artigos recentes do Blog";s:2:"fa";s:26:"آخرین ارسال ها";s:2:"pt";s:24:"Artigos recentes do Blog";s:2:"el";s:62:"Τελευταίες αναρτήσεις ιστολογίου";s:2:"fr";s:17:"Derniers articles";s:2:"ru";s:31:"Последние записи";s:2:"id";s:12:"Post Terbaru";}', 'a:8:{s:2:"en";s:39:"Display latest blog posts with a widget";s:2:"br";s:81:"Mostra uma lista de navegação para abrir os últimos artigos publicados no Blog";s:2:"fa";s:65:"نمایش آخرین پست های وبلاگ در یک ویجت";s:2:"pt";s:81:"Mostra uma lista de navegação para abrir os últimos artigos publicados no Blog";s:2:"el";s:103:"Προβάλει τις πιο πρόσφατες αναρτήσεις στο ιστολόγιό σας";s:2:"fr";s:68:"Permet d''afficher la liste des derniers posts du blog dans un Widget";s:2:"ru";s:100:"Выводит список последних записей блога внутри виджета";s:2:"id";s:51:"Menampilkan posting blog terbaru menggunakan widget";}', 'Erik Berman', 'http://www.nukleo.fr', '1.0.0', 1, 9, 1377291489),
(10, 'list_items_about', 'a:2:{s:2:"en";s:19:"Lista quienes somos";s:2:"es";s:10:"About list";}', 'a:2:{s:2:"en";s:19:"Lista quienes somos";s:2:"es";s:10:"About list";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', 1, 10, 1377623136),
(11, 'list_properties_best', 'a:2:{s:2:"en";s:18:"Lista de inmuebles";s:2:"es";s:15:"properties list";}', 'a:2:{s:2:"en";s:18:"Lista de inmuebles";s:2:"es";s:15:"properties list";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', 1, 11, 1377623137),
(12, 'list_offices', 'a:2:{s:2:"en";s:16:"Lista de oficina";s:2:"es";s:12:"Offices list";}', 'a:2:{s:2:"en";s:16:"Lista de oficina";s:2:"es";s:12:"Offices list";}', 'Eduard Russy', 'http://eduarrussy/', '1.0.0', 1, 12, 1377623200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_widget_areas`
--

DROP TABLE IF EXISTS `default_widget_areas`;
CREATE TABLE IF NOT EXISTS `default_widget_areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `default_widget_areas`
--

INSERT INTO `default_widget_areas` (`id`, `slug`, `title`) VALUES
(2, 'destacados', 'Destacados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `default_widget_instances`
--

DROP TABLE IF EXISTS `default_widget_instances`;
CREATE TABLE IF NOT EXISTS `default_widget_instances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_id` int(11) DEFAULT NULL,
  `widget_area_id` int(11) DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(10) NOT NULL DEFAULT '0',
  `created_on` int(11) NOT NULL DEFAULT '0',
  `updated_on` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `default_widget_instances`
--

INSERT INTO `default_widget_instances` (`id`, `title`, `widget_id`, `widget_area_id`, `options`, `order`, `created_on`, `updated_on`) VALUES
(6, 'About list', 10, 2, 'a:0:{}', 1, 1377623213, 0),
(7, 'properties list', 11, 2, 'a:0:{}', 2, 1377623224, 0),
(8, 'Offices list', 12, 2, 'a:0:{}', 3, 1377623234, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging`
--

DROP TABLE IF EXISTS `messaging`;
CREATE TABLE IF NOT EXISTS `messaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `user` int(11) NOT NULL,
  `to_user` int(10) unsigned NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `time` (`time`),
  KEY `user` (`user`,`to_user`),
  KEY `user_single` (`user`),
  KEY `to_user_single` (`to_user`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_admin`
--

DROP TABLE IF EXISTS `messaging_admin`;
CREATE TABLE IF NOT EXISTS `messaging_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `group` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`pass`),
  KEY `group` (`group`,`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `messaging_admin`
--

INSERT INTO `messaging_admin` (`id`, `username`, `pass`, `group`, `time`) VALUES
(1, 'admin', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 1, '2013-10-07 14:30:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_ban`
--

DROP TABLE IF EXISTS `messaging_ban`;
CREATE TABLE IF NOT EXISTS `messaging_ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(10) unsigned NOT NULL,
  `host` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_groups`
--

DROP TABLE IF EXISTS `messaging_groups`;
CREATE TABLE IF NOT EXISTS `messaging_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `groups` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `history` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `file` (`groups`,`banned`,`history`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `messaging_groups`
--

INSERT INTO `messaging_groups` (`id`, `title`, `groups`, `banned`, `history`) VALUES
(1, 'Administrators', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_history`
--

DROP TABLE IF EXISTS `messaging_history`;
CREATE TABLE IF NOT EXISTS `messaging_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `from_ip` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `sess` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `admin` varchar(255) NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sess` (`sess`),
  KEY `time` (`time`),
  KEY `email` (`email`),
  FULLTEXT KEY `message` (`msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `messaging_history`
--

INSERT INTO `messaging_history` (`id`, `user`, `from_ip`, `email`, `sess`, `msg`, `admin`, `type`, `time`) VALUES
(1, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'buenos días', 'admin', 'user', '2013-09-27 16:38:04'),
(2, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'buenos días', 'admin', 'admin', '2013-09-27 16:38:16'),
(3, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'Hola', 'admin', 'user', '2013-09-27 16:39:47'),
(4, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'Hola', 'admin', 'admin', '2013-09-27 16:39:57'),
(5, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'Como estás??', 'admin', 'user', '2013-09-27 16:40:05'),
(6, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'bien probando el chat este', 'admin', 'admin', '2013-09-27 16:40:17'),
(7, 'Anonymous', 3191664530, 'info@anonymous.com', '15ua62nro86o3d0egm5tij9jq4', 'frdbfbdfbfdb  d bffffffffffffffffffffffffffffffffffffffffffffffdbfbd dfbdffffffffffffb dfb', 'admin', 'user', '2013-09-27 16:44:26'),
(8, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':D', 'admin', 'user', '2013-09-27 16:45:42'),
(9, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'buuuuu', 'admin', 'user', '2013-09-27 16:46:18'),
(10, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'jajajaja', 'admin', 'user', '2013-09-27 16:46:21'),
(11, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'jdjsjdsjs', 'admin', 'user', '2013-09-27 16:46:24'),
(12, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'jdsjdsjds', 'admin', 'user', '2013-09-27 16:46:26'),
(13, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'No se le pueden gregar botones de minimizar o cerrar', 'admin', 'user', '2013-09-27 16:46:41'),
(14, 'Anonymous', 3191664530, 'info@anonymous.com', '15ua62nro86o3d0egm5tij9jq4', ';):shock', 'admin', 'user', '2013-09-27 16:54:36'),
(15, 'Anonymous', 3191664530, 'info@anonymous.com', '15ua62nro86o3d0egm5tij9jq4', 'fbdfb fgbdfgb', 'admin', 'user', '2013-09-27 17:04:27'),
(16, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'no', 'admin', 'admin', '2013-09-27 17:04:38'),
(17, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'i''m from misisipi, this is a grabeychon', 'admin', 'admin', '2013-09-27 17:05:23'),
(18, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'please dejaicho your message', 'admin', 'admin', '2013-09-27 17:05:41'),
(19, 'Alexandra', 3191664530, 'alexandra.gomez@imaginamos.com', 'qev7qj6uasptjomm2s39j6d4a4', 'bip', 'admin', 'admin', '2013-09-27 17:05:47'),
(20, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ';)', 'admin', 'user', '2013-09-27 17:09:03'),
(21, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':|', 'admin', 'user', '2013-09-27 17:09:15'),
(22, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':]', 'admin', 'user', '2013-09-27 17:09:28'),
(23, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':|', 'admin', 'user', '2013-09-27 17:09:52'),
(24, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':tired', 'admin', 'user', '2013-09-27 17:10:19'),
(25, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':(', 'admin', 'user', '2013-09-27 17:18:11'),
(26, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':(', 'admin', 'user', '2013-09-27 17:23:30'),
(27, 'Anonimo', 3191664530, 'info@anonymous.com', 'vj71aj9uc7j5e8ot2m5h32mgs4', 'hjmghm', 'admin', 'user', '2013-09-27 17:29:50'),
(28, 'Anonimo', 3191664530, 'info@anonymous.com', 'vj71aj9uc7j5e8ot2m5h32mgs4', 'gfbdbdfbdf', 'admin', 'user', '2013-09-27 17:29:55'),
(29, 'Anonymous', 3191664530, 'info@anonymous.com', '15ua62nro86o3d0egm5tij9jq4', 'aqui esta stive', 'admin', 'admin', '2013-09-27 17:29:59'),
(30, 'fdbdfbdfb', 3191664530, 'info@anonymous.com', 'vj71aj9uc7j5e8ot2m5h32mgs4', 'Nickname changed to &quot;fdbdfbdfb&quot;', 'admin', 'user', '2013-09-27 17:30:19'),
(31, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Buenas tardes', 'admin', 'user', '2013-10-02 21:37:32'),
(32, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Buenas tardes', 'admin', 'admin', '2013-10-02 21:37:44'),
(33, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Holaaa', 'admin', 'admin', '2013-10-02 21:37:53'),
(34, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', '...', 'admin', 'user', '2013-10-02 21:38:17'),
(35, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Holaaaa', 'admin', 'admin', '2013-10-02 21:38:28'),
(36, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'dsdsds', 'admin', 'admin', '2013-10-02 21:38:34'),
(37, 'Anonimo', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Hatsa luego', 'admin', 'user', '2013-10-02 21:38:47'),
(38, 'ty', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', 'Nickname changed to &quot;ty&quot;', 'admin', 'user', '2013-10-02 21:38:57'),
(39, 'ty', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', ':roll', 'admin', 'user', '2013-10-02 21:39:03'),
(40, 'ty', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', ':roll', 'admin', 'user', '2013-10-02 21:39:03'),
(41, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'Hola', 'admin', 'user', '2013-10-02 21:39:30'),
(42, 'ty', 3191664530, 'info@anonymous.com', '7qhs1sabdb7gkgl3oldpcbp065', '<a href="../uploads/524c9296b293b.jpg" target="_blank">Sent you a file</a>', 'admin', 'admin', '2013-10-02 21:39:34'),
(43, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'Hola', 'admin', 'admin', '2013-10-02 21:39:50'),
(44, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'jajaja', 'admin', 'admin', '2013-10-02 21:39:51'),
(45, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', ':shock', 'admin', 'admin', '2013-10-02 21:39:55'),
(46, 'Felipe', 3191664530, 'felipe.camacho@imaginamos.com', 'm2d3g7j6sail5mo2lnses0gjc7', 'jojojojojo:D', 'admin', 'user', '2013-10-02 21:42:03'),
(47, 'Andrés Díaz', 3189302341, 'adiaz@adomsaluddomiciliaria.com', 'jifc0cri3jvrmb20uipdgus5o6', 'Hola', 'admin', 'user', '2013-10-07 14:25:49'),
(48, 'Andrés Díaz', 3189302341, 'adiaz@adomsaluddomiciliaria.com', 'jifc0cri3jvrmb20uipdgus5o6', 'Hola', 'admin', 'admin', '2013-10-07 14:26:06'),
(49, 'Andrés Díaz', 3189302341, 'adiaz@adomsaluddomiciliaria.com', 'jifc0cri3jvrmb20uipdgus5o6', '?', 'admin', 'user', '2013-10-07 14:26:43'),
(50, 'Andrés Díaz', 3189302341, 'adiaz@adomsaluddomiciliaria.com', 'jifc0cri3jvrmb20uipdgus5o6', ',,,', 'admin', 'user', '2013-10-07 14:26:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_smiley`
--

DROP TABLE IF EXISTS `messaging_smiley`;
CREATE TABLE IF NOT EXISTS `messaging_smiley` (
  `sign` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`sign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `messaging_smiley`
--

INSERT INTO `messaging_smiley` (`sign`, `filename`) VALUES
(':(', 'sad.gif'),
(':)', 'smile.gif'),
(':*', 'kiss.gif'),
(':D', 'laugh.gif'),
(':P', 'tongue.gif'),
(':roll', 'rolleyes.gif'),
(':shock', 'shocked.gif'),
(':tired', 'tired.gif'),
(':]', 'grin.gif'),
(':|', 'blank.gif'),
(';)', 'wink.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_users`
--

DROP TABLE IF EXISTS `messaging_users`;
CREATE TABLE IF NOT EXISTS `messaging_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` int(10) unsigned NOT NULL,
  `sess` varchar(255) NOT NULL,
  `upload` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `nickname` (`nick`),
  KEY `sess` (`sess`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `messaging_users`
--

INSERT INTO `messaging_users` (`user_id`, `nick`, `email`, `ip`, `sess`, `upload`, `time`) VALUES
(7, 'Andrés Díaz', 'adiaz@adomsaluddomiciliaria.com', 3189302341, 'jifc0cri3jvrmb20uipdgus5o6', 0, '2013-10-07 14:30:57');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `messaging_admin`
--
ALTER TABLE `messaging_admin`
  ADD CONSTRAINT `messaging_admin_ibfk_1` FOREIGN KEY (`group`) REFERENCES `messaging_groups` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
