-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2012 a las 03:04:17
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarioric_musicall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contents`
--

CREATE TABLE IF NOT EXISTS `cms_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_contents`
--

INSERT INTO `cms_contents` (`id`, `var`, `content`) VALUES
(1, 'footer', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor massa, tempor sed aliquet non, viverra et erat. Nam scelerisque ante dui. Praesent luctus volutpat accumsan. Sed pellentesque, lectus eget vulputate euismod, mauris velit pulvinar dolor, quis suscipit metus justo sit amet eros. Suspendisse pretium elementum augue elementum posuere. Etiam euismod ultricies rutrum. Suspendisse aliquet consectetur nisl, ut scelerisque lorem lacinia vitae. Cras sit amet magna dui, vestibulum porttitor felis. Aliquam pharetra ante turpis, ac imperdiet lorem. Pellentesque consectetur malesuada metus, ut tincidunt dolor malesuada nec. Pellentesque eu augue non felis placerat iaculis. Donec faucibus est convallis lacus elementum ut ullamcorper erat ultrices. Nunc quis est ut lacus scelerisque congue in nec lectus. Mauris sed sollicitudin nisl. Curabitur facilisis nisl vitae dui tincidunt id facilisis augue iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor massa, tempor sed aliquet non, viverra et erat. Nam scelerisque ante dui. Praesent luctus volutpat accumsan. Sed pellentesque, lectus eget vulputate euismod, mauris velit pulvinar dolor, quis suscipit metus justo sit amet eros. Suspendisse pretium elementum augue elementum posuere. Etiam euismod ultricies rutrum. Suspendisse aliquet consectetur nisl, ut scelerisque lorem lacinia vitae. Cras sit amet magna dui, vestibulum porttitor felis. Aliquam pharetra ante turpis, ac imperdiet lorem. Pellentesque consectetur malesuada metus, ut tincidunt dolor malesuada nec. Pellentesque eu augue non felis placerat iaculis. </span></p>\n<p>&nbsp;</p>\n<p><img src="http://4.bp.blogspot.com/_JVxNY44i-ec/TQXXB9_PdjI/AAAAAAAAABs/esZe7ZgfqJc/s1600/FREE_M%257E1%255B1%255D.jpg" alt="" width="450" height="359" />&nbsp;</p>\n<p>&nbsp;</p>\n<p><span>Donec faucibus est convallis lacus elementum ut ullamcorper erat ultrices. Nunc quis est ut lacus scelerisque congue in nec lectus. Mauris sed sollicitudin nisl. Curabitur facilisis nisl vitae dui tincidunt id facilisis augue iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor massa, tempor sed aliquet non, viverra et erat. Nam scelerisque ante dui. Praesent luctus volutpat accumsan. Sed pellentesque, lectus eget vulputate euismod, mauris velit pulvinar dolor, quis suscipit metus justo sit amet eros. Suspendisse pretium elementum augue elementum posuere. Etiam euismod ultricies rutrum. Suspendisse aliquet consectetur nisl, ut scelerisque lorem lacinia vitae. Cras sit amet magna dui, vestibulum porttitor felis. Aliquam pharetra ante turpis, ac imperdiet lorem. Pellentesque consectetur malesuada metus, ut tincidunt dolor malesuada nec. Pellentesque eu augue non felis placerat iaculis. Donec faucibus est convallis lacus elementum ut ullamcorper erat ultrices. Nunc quis est ut lacus scelerisque congue in nec lectus. Mauris sed sollicitudin nisl. Curabitur facilisis nisl vitae dui tincidunt id facilisis augue iaculis.</span></p>'),
(2, 'css', NULL),
(3, 'terminos_y_condiciones', '<p><strong>Terminos y condiciones texto</strong></p>\n<p>&nbsp;</p>\n<p>Hola mundo!</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>xzczsxcsdf</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super administrador'),
(2, 'admin', 'Cliente'),
(3, 'usuarios', 'Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_login_attempts`
--

INSERT INTO `cms_login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '\0\0', 'asdasd@asdas.com', 1354376501);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_notifications`
--

CREATE TABLE IF NOT EXISTS `cms_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notifications_type_id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `budget` int(11) DEFAULT '0',
  `description` text,
  `is_read` tinyint(1) DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_notifications_cms_notifications_types1` (`notifications_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cms_notifications`
--

INSERT INTO `cms_notifications` (`id`, `notifications_type_id`, `project_name`, `code`, `budget`, `description`, `is_read`, `created_on`) VALUES
(10, 1, 'Proyecto', 'd41d8cd98f00b204e9800998ecf8427e', 120000, 'asdasd', 0, '2012-12-01 15:12:25'),
(11, 2, 'Proyecto', 'd41d8cd98f00b204e9800998ecf8427e', 120000, 'asdasdasd', 0, '2012-12-01 15:30:13'),
(12, 1, 'Proyecto 2', 'd41d8cd98f00b204e9800998ecf8427e', 120000, 'Una gran oportunidad! postula tus canciones!', 0, '2012-12-01 17:36:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_notifications_soundcloud_songs`
--

CREATE TABLE IF NOT EXISTS `cms_notifications_soundcloud_songs` (
  `notification_id` int(11) NOT NULL,
  `soundcloud_song_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_id`,`soundcloud_song_id`),
  KEY `fk_cms_notifications_has_cms_soundcloud_songs_cms_soundcloud_1` (`soundcloud_song_id`),
  KEY `fk_cms_notifications_has_cms_soundcloud_songs_cms_notificatio1` (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_notifications_soundcloud_songs`
--

INSERT INTO `cms_notifications_soundcloud_songs` (`notification_id`, `soundcloud_song_id`) VALUES
(11, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_notifications_types`
--

CREATE TABLE IF NOT EXISTS `cms_notifications_types` (
  `id` int(11) NOT NULL,
  `var` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_notifications_types`
--

INSERT INTO `cms_notifications_types` (`id`, `var`, `name`) VALUES
(1, 'tienes', 'Tienes'),
(2, 'buscas', 'Buscas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_notifications_users_songs`
--

CREATE TABLE IF NOT EXISTS `cms_notifications_users_songs` (
  `users_song_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`users_song_id`,`notification_id`),
  KEY `fk_cms_users_songs_has_cms_notifications_cms_notifications1` (`notification_id`),
  KEY `fk_cms_users_songs_has_cms_notifications_cms_users_songs1` (`users_song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

CREATE TABLE IF NOT EXISTS `cms_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('014ef0730a0b736abccae90fa8fdaccd', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353515081, ''),
('09539811cc104549964ff9fbc2ed3238', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.4 (KHTML, like Gecko) Ubuntu/12.10 Chromium/22.0.1229.94 Chrome/22.0.1229.', 1352743887, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"rigo@imaginamos.co";s:8:"username";s:13:"rigo_b_castro";s:5:"email";s:18:"rigo@imaginamos.co";s:7:"user_id";s:2:"46";s:14:"old_last_login";s:19:"2012-11-12 11:05:56";}'),
('096a6f10104398b85197b239b3829008', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353515125, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:2:"26";s:14:"old_last_login";s:19:"2012-11-13 02:02:47";}'),
('38ea4810a252d6376f8ca631577cd6d9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.4 (KHTML, like Gecko) Ubuntu/12.10 Chromium/22.0.1229.94 Chrome/22.0.1229.', 1352792186, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"rigo@imaginamos.co";s:8:"username";s:19:"rigo_b_castro      ";s:5:"email";s:18:"rigo@imaginamos.co";s:7:"user_id";s:2:"46";s:14:"old_last_login";s:19:"2012-11-13 02:03:07";}'),
('6272ef363dca3a7fc4fe7990146a8d3a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1354413821, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:25:"rigo.castro@imaginamos.co";s:2:"id";s:2:"47";s:7:"user_id";s:2:"47";}'),
('67e0da55791d93a2f92ce851c053c67b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1354412307, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:2:"26";s:14:"old_last_login";s:19:"2012-12-01 10:41:03";}'),
('94242037840cf648bcbc7e5eaebb8698', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.91 Safari/537.11', 1354227657, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:20:"cgomez62@hotmail.com";s:8:"username";s:14:"rigo_b_castro1";s:5:"email";s:20:"cgomez62@hotmail.com";s:7:"user_id";s:2:"48";s:14:"old_last_login";s:19:"2012-11-29 17:24:26";}'),
('bc1912e5fad669a4a1cf96cc3cb32f87', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.4 (KHTML, like Gecko) Ubuntu/12.10 Chromium/22.0.1229.94 Chrome/22.0.1229.', 1352792412, 'a:5:{s:8:"identity";s:18:"rigo@imaginamos.co";s:8:"username";s:19:"rigo_b_castro      ";s:5:"email";s:18:"rigo@imaginamos.co";s:7:"user_id";s:2:"46";s:14:"old_last_login";s:19:"2012-11-13 01:03:21";}'),
('c258bb174bedb0682e81a5a3a705621f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.91 Safari/537.11', 1354227670, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:2:"26";s:14:"old_last_login";s:19:"2012-11-21 11:26:23";}'),
('c2620d4e469f4fb2af582ffb2c747ac2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.91 Safari/537.11', 1354220526, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:25:"rigo.castro@imaginamos.co";s:8:"username";s:14:"rigo_b_castreo";s:5:"email";s:25:"rigo.castro@imaginamos.co";s:7:"user_id";s:2:"47";s:14:"old_last_login";s:19:"2012-11-29 15:23:06";}'),
('f95e8f5d979dc5645c68977520cbe946', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1354382840, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:25:"rigo.castro@imaginamos.co";s:8:"username";s:15:"rigo_b_castreo ";s:5:"email";s:25:"rigo.castro@imaginamos.co";s:7:"user_id";s:2:"47";s:14:"old_last_login";s:19:"2012-11-29 15:23:06";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_soundcloud_songs`
--

CREATE TABLE IF NOT EXISTS `cms_soundcloud_songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text,
  `accepted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_soundcloud_songs`
--

INSERT INTO `cms_soundcloud_songs` (`id`, `url`, `accepted`) VALUES
(1, 'http://soundcloud.com', 0),
(2, 'http://soundcloud.com', 0),
(3, 'http://soundcloud.com', 0),
(4, 'http://soundcloud.com/rigobcastro/armonia-del-silencio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `mobile_phone` bigint(20) DEFAULT '0',
  `image` text,
  `facebook` text,
  `twitter` text,
  `youtube` text,
  `about_you` varchar(255) DEFAULT NULL,
  `website` text,
  `company_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `city`, `full_name`, `mobile_phone`, `image`, `facebook`, `twitter`, `youtube`, `about_you`, `website`, `company_name`) VALUES
(26, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', '2012-11-06 18:54:50', '2012-12-01 10:43:53', 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '\0\0', 'rigo_b_castro      ', '9020473fd684aff79b3cf734b5eff3a0dce422e2', 'fe84df5bd3', 'rigo@imaginamos.co', NULL, NULL, NULL, 'c8e259b912979215dee4eb0100df57cc3cdbedff', '2012-11-12 11:05:56', '2012-11-13 02:45:21', 1, 'Ciudad', 'Rigo B Castro', 123456781, 'profile/7b0951ee9be0f28e9f7286f6764263dc.jpg', '', '', '', '0', '', ''),
(47, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'rigobcastro  ', 'ac70fb648d643b3a46c8c80632dc27e9655744aa', '6e35de8f5b', 'rigo.castro@imaginamos.co', NULL, NULL, NULL, 'c191b4091ea3b075e92e052a77307a9109d0ae1b', '2012-11-29 15:23:06', '2012-12-01 12:27:20', 1, 'asdasd', 'Rigo B Castro', 0, 'profile/2b15335e15d97a3ae7e5ab44a68f8db8.jpg', '', '', '', '0', '', ''),
(48, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'rigo_b_castro1 ', 'ced087a134c995966add83185cbc5880917ea6e6', 'ae648e314a', 'cgomez62@hotmail.com', NULL, NULL, NULL, 'f29e82668a0243fc2118479c2934b7b59c9c3233', '2012-11-29 17:24:26', '2012-11-29 17:24:26', 1, 'Bogota DC', 'Rigo B Castro', 0, 'profile/d202ff12705f60543d3cecfe855dd403.jpg', '', '', '', '0', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--

CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`),
  KEY `users_groups_user` (`user_id`),
  KEY `users_groups_group` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 0000000026, 1),
(21, 0000000046, 3),
(22, 0000000047, 3),
(23, 0000000048, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_members`
--

CREATE TABLE IF NOT EXISTS `cms_users_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_representations_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cms_users_members`
--

INSERT INTO `cms_users_members` (`id`, `name`, `user_id`) VALUES
(13, '1', 46),
(14, '2', 46),
(15, '3', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_projects`
--

CREATE TABLE IF NOT EXISTS `cms_users_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` int(11) DEFAULT '0',
  `reference` varchar(255) DEFAULT NULL,
  `description` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_table1_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_users_projects`
--

INSERT INTO `cms_users_projects` (`id`, `user_id`, `name`, `code`, `price`, `reference`, `description`, `created_on`) VALUES
(5, 46, 'Proyecto', 'Sn3iPt7p', 120000, '1231232', 'asdsad', '2012-11-13 07:03:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_projects_genders`
--

CREATE TABLE IF NOT EXISTS `cms_users_projects_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `users_project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_uses_copy1_cms_users_projects1` (`users_project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_users_projects_genders`
--

INSERT INTO `cms_users_projects_genders` (`id`, `name`, `users_project_id`) VALUES
(5, 'Rock', 5),
(6, 'Pop', 5),
(7, '', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_projects_notifications`
--

CREATE TABLE IF NOT EXISTS `cms_users_projects_notifications` (
  `users_project_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`users_project_id`,`notification_id`),
  KEY `fk_cms_users_projects_has_cms_notifications_cms_notifications1` (`notification_id`),
  KEY `fk_cms_users_projects_has_cms_notifications_cms_users_projects1` (`users_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_users_projects_notifications`
--

INSERT INTO `cms_users_projects_notifications` (`users_project_id`, `notification_id`) VALUES
(5, 10),
(5, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_projects_songs`
--

CREATE TABLE IF NOT EXISTS `cms_users_projects_songs` (
  `users_song_id` int(11) NOT NULL,
  `users_project_id` int(11) NOT NULL,
  PRIMARY KEY (`users_song_id`,`users_project_id`),
  KEY `fk_cms_users_songs_has_cms_users_projects_cms_users_projects1` (`users_project_id`),
  KEY `fk_cms_users_songs_has_cms_users_projects_cms_users_songs1` (`users_song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_users_projects_songs`
--

INSERT INTO `cms_users_projects_songs` (`users_song_id`, `users_project_id`) VALUES
(6, 5),
(9, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_projects_uses`
--

CREATE TABLE IF NOT EXISTS `cms_users_projects_uses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `users_project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_uses_copy1_cms_users_projects1` (`users_project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_users_projects_uses`
--

INSERT INTO `cms_users_projects_uses` (`id`, `name`, `users_project_id`) VALUES
(3, 'Películas', 5),
(4, 'Series de TV', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_representations`
--

CREATE TABLE IF NOT EXISTS `cms_users_representations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_representations_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_songs`
--

CREATE TABLE IF NOT EXISTS `cms_users_songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `filepath` text,
  `gender` varchar(255) DEFAULT NULL,
  `upload_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_table1_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_users_songs`
--

INSERT INTO `cms_users_songs` (`id`, `user_id`, `title`, `filepath`, `gender`, `upload_on`, `code`) VALUES
(2, 46, 'Y Voy a amarte', 'songs/79abb526ec5e78e97641dbd8d862b25c.mp3', 'Tropical', '2012-11-13 03:49:44', '488cf9e6'),
(3, 46, 'Ven conmigo', 'songs/d3952983a1b500b72e587732976cef30.mp3', 'Reggaeton', '2012-11-13 03:49:44', '640c73dd'),
(4, 46, 'Love is liberation', 'songs/fad549b7e996e34fc85b285a9683a381.mp3', 'Pop', '2012-11-13 03:49:44', 'f407c224'),
(5, 46, 'The only place', 'songs/2588c923dece49b0ca2263137db9611b.mp3', 'Pop', '2012-11-13 03:53:48', '981c4621'),
(6, 47, 'Solitaria', 'songs/fc7451ccaaed39e273c7ced4bec6606a.mp3', 'Otros', '2012-12-01 15:47:23', 'dfc6c0c6'),
(9, 47, 'Life for rent', 'songs/904a7f2828a1a3f16ea5a3a961abd986.mp3', 'Rock', '2012-12-01 19:41:55', '5153c702');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_songs_uses`
--

CREATE TABLE IF NOT EXISTS `cms_users_songs_uses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_song_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_uses_cms_users_songs1` (`users_song_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users_songs_uses`
--

INSERT INTO `cms_users_songs_uses` (`id`, `users_song_id`, `name`) VALUES
(2, 2, 'Todos los usos'),
(3, 4, 'Películas'),
(4, 5, 'Series de TV'),
(5, 6, 'Todos los usos'),
(9, 9, 'Todos los usos'),
(10, 9, 'Películas');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_notifications`
--
ALTER TABLE `cms_notifications`
  ADD CONSTRAINT `fk_cms_notifications_cms_notifications_types1` FOREIGN KEY (`notifications_type_id`) REFERENCES `cms_notifications_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_notifications_soundcloud_songs`
--
ALTER TABLE `cms_notifications_soundcloud_songs`
  ADD CONSTRAINT `fk_cms_notifications_has_cms_soundcloud_songs_cms_notificatio1` FOREIGN KEY (`notification_id`) REFERENCES `cms_notifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_notifications_has_cms_soundcloud_songs_cms_soundcloud_1` FOREIGN KEY (`soundcloud_song_id`) REFERENCES `cms_soundcloud_songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_notifications_users_songs`
--
ALTER TABLE `cms_notifications_users_songs`
  ADD CONSTRAINT `fk_cms_users_songs_has_cms_notifications_cms_users_songs1` FOREIGN KEY (`users_song_id`) REFERENCES `cms_users_songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_songs_has_cms_notifications_cms_notifications1` FOREIGN KEY (`notification_id`) REFERENCES `cms_notifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `users_groups_group` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_groups_user` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_members`
--
ALTER TABLE `cms_users_members`
  ADD CONSTRAINT `fk_cms_users_representations_cms_users10` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_projects`
--
ALTER TABLE `cms_users_projects`
  ADD CONSTRAINT `fk_table1_cms_users12234` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_projects_genders`
--
ALTER TABLE `cms_users_projects_genders`
  ADD CONSTRAINT `fk_cms_users_songs_uses_copy1_cms_users_projects10` FOREIGN KEY (`users_project_id`) REFERENCES `cms_users_projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_projects_notifications`
--
ALTER TABLE `cms_users_projects_notifications`
  ADD CONSTRAINT `fk_cms_users_projects_has_cms_notifications_cms_users_projects1` FOREIGN KEY (`users_project_id`) REFERENCES `cms_users_projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_projects_has_cms_notifications_cms_notifications1` FOREIGN KEY (`notification_id`) REFERENCES `cms_notifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_projects_songs`
--
ALTER TABLE `cms_users_projects_songs`
  ADD CONSTRAINT `fk_cms_users_songs_has_cms_users_projects_cms_users_songs1` FOREIGN KEY (`users_song_id`) REFERENCES `cms_users_songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_songs_has_cms_users_projects_cms_users_projects1` FOREIGN KEY (`users_project_id`) REFERENCES `cms_users_projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_projects_uses`
--
ALTER TABLE `cms_users_projects_uses`
  ADD CONSTRAINT `fk_cms_users_songs_uses_copy1_cms_users_projects1` FOREIGN KEY (`users_project_id`) REFERENCES `cms_users_projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_representations`
--
ALTER TABLE `cms_users_representations`
  ADD CONSTRAINT `fk_cms_users_representations_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_songs`
--
ALTER TABLE `cms_users_songs`
  ADD CONSTRAINT `fk_table1_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_songs_uses`
--
ALTER TABLE `cms_users_songs_uses`
  ADD CONSTRAINT `fk_cms_users_songs_uses_cms_users_songs1` FOREIGN KEY (`users_song_id`) REFERENCES `cms_users_songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
