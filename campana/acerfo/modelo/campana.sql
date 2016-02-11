-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2013 a las 18:59:01
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `campana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categoria`
--

CREATE TABLE IF NOT EXISTS `cms_categoria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `cms_linea_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_catgoria_linea1_idx` (`cms_linea_id`),
  KEY `fk_cms_catgoria_cms_media1_idx` (`cms_media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(21) NOT NULL,
  `direccion` varchar(31) NOT NULL,
  `telefono` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cms_contacto`
--

INSERT INTO `cms_contacto` (`id`, `email`, `direccion`, `telefono`) VALUES
(1, 'hola@lacampana.co', 'avenida 123 Norte No. 45 - 126', '57 - 1 - 390 4567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_documento`
--

CREATE TABLE IF NOT EXISTS `cms_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cms_media_id, referecia a imagen del documento\ncms_media_id1, referencia al archivo',
  `titulo_funte1` varchar(7) DEFAULT NULL,
  `titulo_funte2` varchar(15) NOT NULL,
  `texto` varchar(218) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_documento_cms_media1_idx` (`cms_media_id`),
  KEY `fk_documento_cms_media2_idx` (`cms_media_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_enterese`
--

CREATE TABLE IF NOT EXISTS `cms_enterese` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `video_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_enterese_cms_video1_idx` (`video_id`),
  KEY `fk_cms_enterese_cms_media1_idx` (`media_id`),
  KEY `fk_cms_enterese_cms_media2_idx` (`media_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_fmenu_items`
--

CREATE TABLE IF NOT EXISTS `cms_fmenu_items` (
  `id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cms_fmenu_items`
--

INSERT INTO `cms_fmenu_items` (`id`, `item`) VALUES
(1, 'equipo de trabajo'),
(2, 'lineas'),
(3, 'servicios de corte'),
(4, 'documentos'),
(5, 'enterate'),
(6, 'trabaja con nosotros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_fmenu_text`
--

CREATE TABLE IF NOT EXISTS `cms_fmenu_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(123) DEFAULT NULL,
  `fmenu_items_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_text_menu_cms_items_menu` (`fmenu_items_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_linea`
--

CREATE TABLE IF NOT EXISTS `cms_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_linea`
--

INSERT INTO `cms_linea` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'Construccíon', 'construcion...!');

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
(2, '\0\0', 'cms@imaginamos.co', 1378993513);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_media`
--

CREATE TABLE IF NOT EXISTS `cms_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(150) NOT NULL,
  `type` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `cms_media`
--

INSERT INTO `cms_media` (`id`, `path`, `type`) VALUES
(1, 'imagen1', 't'),
(32, './assets/img/440f3e77a1c6a57881edfcd50e537b7b.png', 'i'),
(36, './assets/img/bdfeda28e1559a63089cb670d7bbf7aa.png', 't'),
(37, './assets/img/9a32b7d12a5f17bbb42ef7ef6cced30a.png', 'i'),
(38, './assets/img/825a0e75052e16bef9ea5f1b0e03830e.png', 't'),
(39, './assets/img/a5c1e69066842ba0a690754ac1432fc1.png', 'i'),
(40, './assets/img/825a0e75052e16bef9ea5f1b0e03830e.png', 't'),
(41, './assets/img/a5c1e69066842ba0a690754ac1432fc1.png', 'i');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `title`, `url`, `icon`) VALUES
(2, 'home', 'cms/home/', 'administrator');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_postulado`
--

CREATE TABLE IF NOT EXISTS `cms_postulado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) DEFAULT NULL,
  `email` varchar(47) DEFAULT NULL,
  `ciudad` varchar(70) DEFAULT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `telefono` varchar(27) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `vancante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_postulado_vancante1_idx` (`vancante_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_postulado`
--

INSERT INTO `cms_postulado` (`id`, `nombre`, `email`, `ciudad`, `cv`, `telefono`, `comentario`, `vancante_id`) VALUES
(1, 'elbert', 'elbertjose@hotmail.com', 'bogota', 'http://localhost/', '3205788788', 'holña mundo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto`
--

CREATE TABLE IF NOT EXISTS `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id2` int(11) DEFAULT NULL,
  `cms_sub_categorias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linea_cms_media1_idx` (`cms_media_id`),
  KEY `fk_linea_cms_media3_idx` (`cms_media_id2`),
  KEY `fk_cms_producto_cms_sub_categorias1_idx` (`cms_sub_categorias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_propietario`
--

CREATE TABLE IF NOT EXISTS `cms_propietario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` varchar(150) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_propietario_cms_media1_idx` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_propietario`
--

INSERT INTO `cms_propietario` (`id`, `propietario`, `media_id`) VALUES
(1, 'Campana', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--

CREATE TABLE IF NOT EXISTS `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(200) NOT NULL,
  `type_social_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_redes_sociales_cms_type_social1` (`type_social_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_redes_sociales`
--

INSERT INTO `cms_redes_sociales` (`id`, `direccion`, `type_social_id`) VALUES
(5, 'facebook', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_servicio_corte`
--

CREATE TABLE IF NOT EXISTS `cms_servicio_corte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `texto` varchar(211) NOT NULL,
  `cms_media_id` int(11) NOT NULL COMMENT 'cms_media_id, ser refiere al link del video',
  `cms_media_id1` int(11) DEFAULT NULL COMMENT 'cms_media_id1, serefiere al link de especificaciones tecnicas',
  PRIMARY KEY (`id`),
  KEY `fk_servicio_corte_cms_media1_idx` (`cms_media_id`),
  KEY `fk_servicio_corte_cms_media2_idx` (`cms_media_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('081f38ed10fe22b35f47fd5a58fb3e25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379027052, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('0cedf31e32147bf5e50541f13a4ae585', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937706, ''),
('19e626c1277b06410f90b7492e443011', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378759714, ''),
('2491c87a03b75ec55be598a321c1daf8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937912, ''),
('2ce992235a67ce10fd7070568723f804', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937191, ''),
('354982c82847581be78a91a35ae6440b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378996469, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('3690ff1baa101e4a332bbb1ffe30fcd1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937247, ''),
('3a5a35dc182574c36c9d8691cd642708', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378759714, ''),
('5203d4165fdec873580e1164a80fd448', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937577, ''),
('5323a503a0c48636798186ffed573474', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378759714, ''),
('54d49c21e1b5c91538925fa7ada814e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378759714, ''),
('583af3c633ea8c0131aeb8a8360b7614', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938121, ''),
('63c9832afd6c52c72b98b5c0e8866e38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938201, ''),
('72834ba1d3264a9a4660d1d105cd93d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937257, ''),
('7a37580e50a71f73db3f602e4761ce9f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378936898, ''),
('7d0b88b4c5a35e1996f0361341574d8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378944936, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('82b712fd3fd2868134b2e4301ee11ef4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1379091440, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('84b54367c5ec46757ed2c96236e1921d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937915, ''),
('896165f979a809b8644f2b033174729e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938230, ''),
('9888a1ae75d641b7dc00de354a6d8483', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937574, ''),
('9d069ae2c13e8f56505da9379369458c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938169, ''),
('a945da32b23d60ed07946d8878da8a91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0', 1378759895, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('c30d7ef8a9325332a0efb08039d91d0e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937906, ''),
('c70a14acf767390df682b644b56ec574', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379019952, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d358c761df69eb4a11919be5d1684a98', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379019951, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d984b923775eeb1d23517652d18352f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938048, ''),
('dd1cf12a1b942935b89c486e595bd1ce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938052, ''),
('df4a0612513f5f75b65afc1b28f100f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937713, ''),
('ed94a0fc5d7fe85775f359e3bd95bff2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378938157, ''),
('edfff3f46182f5ae7d0df490ef002356', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937953, ''),
('f9e224557169f9aaaf49e7e91efe78bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1378937646, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sub_categorias`
--

CREATE TABLE IF NOT EXISTS `cms_sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `cms_categoria_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_sub_categorias_cms_catgoria1_idx` (`cms_categoria_id`),
  KEY `fk_cms_sub_categorias_cms_media1_idx` (`cms_media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_trabajador`
--

CREATE TABLE IF NOT EXISTS `cms_trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) NOT NULL,
  `cargo` varchar(74) NOT NULL,
  `comentario` text,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabajador_cms_media1_idx` (`media_id`),
  KEY `fk_trabajador_cms_media2_idx` (`media_id1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_trabaje_nosotros`
--

CREATE TABLE IF NOT EXISTS `cms_trabaje_nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_media_id` int(11) NOT NULL,
  `subtitulo` varchar(112) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabaje_nosotros_cms_media1_idx` (`cms_media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_type_social`
--

CREATE TABLE IF NOT EXISTS `cms_type_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_type_social`
--

INSERT INTO `cms_type_social` (`id`, `name`) VALUES
(1, 'Twitter'),
(2, 'Facebook'),
(3, 'Pinterest'),
(4, 'Google +'),
(5, 'Youtube '),
(6, 'Linkedin');

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
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--

CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `fk_cms_users_groups_cms_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_vancante`
--

CREATE TABLE IF NOT EXISTS `cms_vancante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(42) NOT NULL,
  `subtitulo` varchar(70) NOT NULL,
  `detalle` text NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vancante_cms_media1_idx` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_vancante`
--

INSERT INTO `cms_vancante` (`id`, `nombre`, `subtitulo`, `detalle`, `media_id`) VALUES
(1, 'Ingeniero de sistemas', 'Ingeniero de sistemas', 'Ingeniero de sistemas', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_video`
--

CREATE TABLE IF NOT EXISTS `cms_video` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `propietario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_video_cms_propietario1_idx` (`propietario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_categoria`
--
ALTER TABLE `cms_categoria`
  ADD CONSTRAINT `fk_sub_catgoria_linea1` FOREIGN KEY (`cms_linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_catgoria_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_documento`
--
ALTER TABLE `cms_documento`
  ADD CONSTRAINT `fk_documento_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_documento_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_enterese`
--
ALTER TABLE `cms_enterese`
  ADD CONSTRAINT `fk_cms_enterese_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_enterese_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_enterese_cms_video1` FOREIGN KEY (`video_id`) REFERENCES `cms_video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_fmenu_text`
--
ALTER TABLE `cms_fmenu_text`
  ADD CONSTRAINT `fk_cms_text_menu_cms_items_menu` FOREIGN KEY (`fmenu_items_id`) REFERENCES `cms_fmenu_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_postulado`
--
ALTER TABLE `cms_postulado`
  ADD CONSTRAINT `fk_postulado_vancante1` FOREIGN KEY (`vancante_id`) REFERENCES `cms_vancante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto`
--
ALTER TABLE `cms_producto`
  ADD CONSTRAINT `fk_linea_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_linea_cms_media3` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_producto_cms_sub_categorias1` FOREIGN KEY (`cms_sub_categorias_id`) REFERENCES `cms_sub_categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_propietario`
--
ALTER TABLE `cms_propietario`
  ADD CONSTRAINT `fk_cms_propietario_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_redes_sociales`
--
ALTER TABLE `cms_redes_sociales`
  ADD CONSTRAINT `fk_cms_redes_sociales_cms_type_social1` FOREIGN KEY (`type_social_id`) REFERENCES `cms_type_social` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_servicio_corte`
--
ALTER TABLE `cms_servicio_corte`
  ADD CONSTRAINT `fk_servicio_corte_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicio_corte_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_sub_categorias`
--
ALTER TABLE `cms_sub_categorias`
  ADD CONSTRAINT `fk_cms_sub_categorias_cms_catgoria1` FOREIGN KEY (`cms_categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_sub_categorias_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_trabajador`
--
ALTER TABLE `cms_trabajador`
  ADD CONSTRAINT `fk_trabajador_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajador_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_trabaje_nosotros`
--
ALTER TABLE `cms_trabaje_nosotros`
  ADD CONSTRAINT `fk_trabaje_nosotros_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `fk_cms_users_groups_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_vancante`
--
ALTER TABLE `cms_vancante`
  ADD CONSTRAINT `fk_vancante_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_video`
--
ALTER TABLE `cms_video`
  ADD CONSTRAINT `fk_cms_video_cms_propietario1` FOREIGN KEY (`propietario_id`) REFERENCES `cms_propietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_video_cms_media1` FOREIGN KEY (`id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
