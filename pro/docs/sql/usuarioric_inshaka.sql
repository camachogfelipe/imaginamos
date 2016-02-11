-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generaci贸n: 26-11-2012 a las 18:11:39
-- Versi贸n del servidor: 5.5.25
-- Versi贸n de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarioric_inshaka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_audiciones`
--

CREATE TABLE `cms_audiciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `introduccion` text,
  `descripcion` text,
  `numero_aplicaciones` int(11) DEFAULT '0',
  `imagen` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_aplicaciones` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_audiciones_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

--
-- Volcado de datos para la tabla `cms_audiciones`
--

INSERT INTO `cms_audiciones` (`id`, `titulo`, `var`, `ciudad`, `contacto`, `fecha_inicio`, `fecha_cierre`, `introduccion`, `descripcion`, `numero_aplicaciones`, `imagen`, `user_id`, `created_on`, `updated_on`, `total_aplicaciones`) VALUES
(1000, 'Nueva aplicaci贸n', 'nueva-aplicacion', 'Bogota', 'Otro', '2012-11-08 00:00:00', '2012-11-09 00:00:00', 'sadasd', 'asdasdsadsadasd', 12, 'audiciones/b530616d48aea3e9d39a173ef6a3bb79.jpeg', 24, '2012-11-08 10:51:24', '2012-11-08 15:51:24', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_audiciones_aplicaciones`
--

CREATE TABLE `cms_audiciones_aplicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL,
  `presentacion` text,
  `audicion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_audiciones_aplicaciones_cms_audiciones1` (`audicion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands`
--

CREATE TABLE `cms_bands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `musical_gender_id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_cms_bands_cms_musical_genders1` (`musical_gender_id`),
  KEY `fk_cms_bands_cms_stages1213213` (`stage_id`),
  KEY `fk_cms_bands_cms_users1232` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1010 ;

--
-- Volcado de datos para la tabla `cms_bands`
--

INSERT INTO `cms_bands` (`id`, `name`, `var`, `city`, `musical_gender_id`, `stage_id`, `created_on`, `update_on`, `user_id`) VALUES
(1001, 'Otra banda', 'otra-banda', 'Bogot谩', 1, 15, '2012-11-02 12:22:09', '2012-11-02 17:22:09', 24),
(1002, 'Los independientes', 'los-independientes', 'Bogota', 3, 15, '2012-11-08 13:29:48', '2012-11-08 19:58:03', 24),
(1003, 'Banda', 'banda', 'Bogota', 18, 15, '2012-11-26 16:45:57', '2012-11-26 21:45:57', 24),
(1004, 'Banda 2', 'banda-2', 'Bogota', 18, 15, '2012-11-26 16:47:26', '2012-11-26 21:47:26', 24),
(1005, 'Banda 3', 'banda-3', 'Bogota', 18, 15, '2012-11-26 16:48:08', '2012-11-26 21:48:08', 24),
(1006, 'Banda 4', 'banda-4', 'Bogota', 18, 15, '2012-11-26 16:48:54', '2012-11-26 21:48:54', 24),
(1007, 'Banda 5', 'banda-5', 'Bogota', 21, 15, '2012-11-26 16:54:18', '2012-11-26 21:54:18', 24),
(1008, 'MI banda', 'mi-banda', 'Bogota', 18, 15, '2012-11-26 17:13:37', '2012-11-26 22:13:37', 24),
(1009, 'MI banda 2', 'mi-banda-2', 'Bogota', 18, 15, '2012-11-26 17:17:58', '2012-11-26 22:17:58', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands_instruments`
--

CREATE TABLE `cms_bands_instruments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instrument_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_bands_instruments_cms_instruments1` (`instrument_id`),
  KEY `fk_cms_bands_instruments_cms_bands1` (`band_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `cms_bands_instruments`
--

INSERT INTO `cms_bands_instruments` (`id`, `instrument_id`, `band_id`) VALUES
(36, 3, 1001),
(52, 3, 1002),
(53, 3, 1002),
(54, 4, 1002),
(55, 3, 1003),
(56, 3, 1004),
(57, 3, 1005),
(58, 3, 1006),
(59, 3, 1007),
(60, 4, 1007),
(61, 3, 1008),
(62, 3, 1009),
(63, 4, 1009);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands_instruments_users`
--

CREATE TABLE `cms_bands_instruments_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `bands_instrument_id` int(11) NOT NULL,
  `is_invited` tinyint(1) DEFAULT '1',
  `invitation_code` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invitation_accepted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_bands_instruments_users_cms_users1` (`user_id`),
  KEY `fk_cms_bands_instruments_users_cms_bands_instruments1` (`bands_instrument_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `cms_bands_instruments_users`
--

INSERT INTO `cms_bands_instruments_users` (`id`, `user_id`, `bands_instrument_id`, `is_invited`, `invitation_code`, `created_on`, `update_on`, `invitation_accepted`) VALUES
(26, 17, 36, 0, NULL, '2012-11-02 12:22:09', '2012-11-02 17:22:09', 0),
(27, 25, 36, 0, NULL, '2012-11-02 12:22:10', '2012-11-02 17:22:10', 0),
(43, 17, 52, 0, NULL, '2012-11-08 15:01:16', '2012-11-08 20:01:16', 0),
(44, 17, 53, 0, NULL, '2012-11-08 15:01:27', '2012-11-08 20:01:27', 0),
(45, 17, 54, 0, NULL, '2012-11-08 15:01:27', '2012-11-08 20:01:27', 0),
(46, 17, 55, 1, NULL, '2012-11-26 16:45:57', '2012-11-26 21:45:57', 0),
(47, 17, 56, 1, NULL, '2012-11-26 16:47:26', '2012-11-26 21:47:26', 0),
(48, 17, 57, 1, NULL, '2012-11-26 16:48:08', '2012-11-26 21:48:08', 0),
(49, 24, 58, 1, NULL, '2012-11-26 16:48:54', '2012-11-26 21:48:54', 0),
(50, 24, 59, 1, NULL, '2012-11-26 16:54:18', '2012-11-26 21:54:18', 0),
(51, 17, 60, 1, NULL, '2012-11-26 16:54:23', '2012-11-26 21:54:23', 0),
(52, 17, 61, 1, 'msWCFpATTFHLtPufpsXAnJgFfskOr0YSS3im4JR7', '2012-11-26 17:13:37', '2012-11-26 22:13:37', 0),
(53, 24, 62, 0, 't2GypgFTdbJZebJZTk8ZItFvGzgh3iewEmfdYEdP', '2012-11-26 17:17:58', '2012-11-26 22:26:48', 1),
(54, 24, 63, 0, '8B6s8UkzgOxm9rgAyg86c4UAvHUZSMqXM63dPG6D', '2012-11-26 17:29:05', '2012-11-26 23:08:11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados`
--

CREATE TABLE `cms_clasificados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `clasificados_categoria_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `introduccion` text,
  `descripcion` longtext,
  `ciudad` varchar(255) DEFAULT NULL,
  `imagen` text,
  `precio` float DEFAULT '0',
  `fecha_cierre` date NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_clasificados_cms_users1` (`user_id`),
  KEY `fk_cms_clasificados_cms_clasificados_categorias1` (`clasificados_categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_clasificados`
--

INSERT INTO `cms_clasificados` (`id`, `user_id`, `clasificados_categoria_id`, `titulo`, `var`, `introduccion`, `descripcion`, `ciudad`, `imagen`, `precio`, `fecha_cierre`, `created_on`, `updated_on`) VALUES
(1, 24, 3, 'asdasd', 'asdasd', 'sdasdasd asdadasd', 'sadasdasd', 'Bogota', 'clasificados/1ce9ce0ae001e1850da37492ae6ea8db.jpg', 1000, '2012-11-08', '2012-11-08 11:36:18', '2012-11-08 16:36:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados_aplicaciones`
--

CREATE TABLE `cms_clasificados_aplicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clasificado_id` int(11) NOT NULL,
  `created_on` varchar(255) DEFAULT NULL,
  `presentacion` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_clasificados_aplicaciones_cms_clasificados1` (`clasificado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados_categorias`
--

CREATE TABLE `cms_clasificados_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `descripcion` text,
  `icon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_clasificados_categorias`
--

INSERT INTO `cms_clasificados_categorias` (`id`, `nombre`, `var`, `descripcion`, `icon`) VALUES
(3, 'Venta', 'venta', 'Lorem ipsum dolor sit amet, consectetuer.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_comments`
--

CREATE TABLE `cms_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sonido` int(11) DEFAULT '0',
  `presentacion` int(11) DEFAULT '0',
  `profesionalismo` int(11) DEFAULT '0',
  `actitud` int(11) DEFAULT '0',
  `comentario` text,
  `created_on` datetime NOT NULL,
  `user_creator_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_comments_cms_users1` (`user_creator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_comments`
--

INSERT INTO `cms_comments` (`id`, `sonido`, `presentacion`, `profesionalismo`, `actitud`, `comentario`, `created_on`, `user_creator_id`) VALUES
(1, 4, 6, 7, 5, 'Hola!', '2012-11-08 11:50:23', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_conciertos`
--

CREATE TABLE `cms_conciertos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fecha_hora` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `genero_musical` varchar(255) DEFAULT NULL,
  `tipo_concierto` varchar(255) DEFAULT NULL,
  `aire_libre` varchar(255) DEFAULT NULL,
  `gratuito` varchar(255) DEFAULT NULL,
  `boleteria` varchar(255) DEFAULT NULL,
  `presupuesto_general` varchar(255) DEFAULT NULL,
  `nombre_concierto` varchar(255) DEFAULT NULL,
  `numero_bandas` varchar(255) DEFAULT NULL,
  `capacidad_estimada` varchar(255) DEFAULT NULL,
  `caracteristicas` varchar(255) DEFAULT NULL,
  `otros` varchar(255) DEFAULT NULL,
  `presupuesto_concierto` varchar(255) DEFAULT NULL,
  `caracteristicas_promocion` varchar(255) DEFAULT NULL,
  `presupuesto_promocion` varchar(255) DEFAULT NULL,
  `promocion` varchar(255) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio`
--

CREATE TABLE `cms_directorio` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `directorio_categoria_id` int(11) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `direccion` text,
  `telefono` int(11) DEFAULT NULL,
  `sitio_web` text,
  `email` text,
  `logo` text,
  `facebook` text,
  `twitter` text,
  `youtube` text,
  `descripcion` text,
  `active` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_cms_directorio_categorias1` (`directorio_categoria_id`),
  KEY `fk_cms_directorio_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_directorio`
--

INSERT INTO `cms_directorio` (`id`, `directorio_categoria_id`, `empresa`, `direccion`, `telefono`, `sitio_web`, `email`, `logo`, `facebook`, `twitter`, `youtube`, `descripcion`, `active`, `user_id`, `created_on`, `updated_on`, `code`) VALUES
(00001, 4, 'Google', 'PaloAlto', 1234567, 'http://google.com', 'google@google.com', NULL, '', '', '', 'sadasdasdasd', 0, 24, '2012-11-26 12:06:14', '2012-11-26 17:06:14', '907b414e23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_adicionales`
--

CREATE TABLE `cms_directorio_adicionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directorio_id` int(5) unsigned zerofill NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_adicionales_cms_directorio1` (`directorio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_directorio_adicionales`
--

INSERT INTO `cms_directorio_adicionales` (`id`, `directorio_id`, `name`) VALUES
(1, 00001, 'Efectos especiales'),
(2, 00001, 'Proyecci贸n de video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_categorias`
--

CREATE TABLE `cms_directorio_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cms_directorio_categorias`
--

INSERT INTO `cms_directorio_categorias` (`id`, `var`, `name`, `description`) VALUES
(1, 'reparacion-afinacion-y-alineamiento', 'Reparaci贸n, Afinaci贸n, y Alineamiento', 'asdasdasd'),
(2, 'tienda-de-instrumentos', 'Tienda de instrumentos', 'Descripci贸n corta'),
(3, 'roadies', 'Roadies', 'asdasd'),
(4, 'backline_y_alquilers', 'Backline y alquilers', NULL),
(5, 'ingenieros_de_sonido', 'Ingenieros de sonido', NULL),
(6, 'luces', 'Luces', NULL),
(7, 'managers', 'Managers', NULL),
(8, 'sitios_para_tocar', 'Sitios para tocar', NULL),
(9, 'estudios_de_grabacion', 'Estudios de grabaci贸n', NULL),
(10, 'locales_de_ensayo', 'Locales de ensayo', NULL),
(11, 'tiendas_de_discos', 'Tiendas de discos', NULL),
(12, 'escuelas_de_discos', 'Escuelas de discos', NULL),
(13, 'transporte', 'Transporte', NULL),
(14, 'discograficas', 'Discogr谩ficas', NULL),
(15, 'otros', 'Otros', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_images`
--

CREATE TABLE `cms_directorio_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directorio_id` int(5) unsigned zerofill NOT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_images_cms_directorio1` (`directorio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_footer_banners`
--

CREATE TABLE `cms_footer_banners` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `image` text,
  `thumb` text,
  `upload_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_footer_banners`
--

INSERT INTO `cms_footer_banners` (`id`, `image`, `thumb`, `upload_on`, `order`) VALUES
(6, 'banners/footer/p17bbgpn681k2d1jeh1j5djrt13744.jpg', 'banners/footer/t_p17bbgpn681k2d1jeh1j5djrt13744.jpg', '2012-11-06 18:47:57', 0),
(7, 'banners/footer/p17bbh1c16156s1qdont07v3jkc4.jpg', 'banners/footer/t_p17bbh1c16156s1qdont07v3jkc4.jpg', '2012-11-06 18:52:08', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios'),
(4, 'bandas', 'Bandas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_instruments`
--

CREATE TABLE `cms_instruments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_instruments`
--

INSERT INTO `cms_instruments` (`id`, `name`, `image`) VALUES
(3, 'Guitarra', 'build-a-band/instruments/p17aro2uqjfmktfg1mve1su5mi64.png'),
(4, 'Saxof贸n', 'build-a-band/instruments/p17aro3medutd1sue1ger1j7qkoo4.png'),
(5, 'Acorde贸n', 'build-a-band/instruments/p17aro4n2i17r81ktpje71f3ljam4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

CREATE TABLE `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `title`, `url`, `icon`) VALUES
(14, 'Noticias', 'cms/news', 'calendar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_musical_genders`
--

CREATE TABLE `cms_musical_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `cms_musical_genders`
--

INSERT INTO `cms_musical_genders` (`id`, `var`, `name`) VALUES
(1, 'rock', 'Rock'),
(2, 'afro_jazz', 'Afro jazz'),
(3, 'afro', 'Afro'),
(4, 'calipso', 'Calipso'),
(5, 'rap_cristiano', 'Rap cristiano'),
(6, 'cristiana_contemporanea', 'Cristiana cont茅mporanea'),
(7, 'country', 'Country'),
(8, 'cumbia', 'Cumbia'),
(9, 'disco', 'Disco'),
(10, 'freestyle', 'Freestyle'),
(11, 'funk', 'Funk'),
(12, 'gospel', 'G贸spel'),
(13, 'house', 'House'),
(14, 'indie', 'Indie'),
(15, 'jazz', 'Jazz'),
(16, 'latin', 'Lat铆n'),
(17, 'mariachi', 'Mariachi'),
(18, 'metal', 'Metal'),
(19, 'merengue', 'Merengue'),
(20, 'pop', 'Pop'),
(21, 'reggae', 'Reggae'),
(22, 'rap', 'Rap'),
(23, 'reggaeton', 'Reggaet贸n'),
(24, 'rumba', 'Rumba'),
(25, 'salsa', 'Salsa'),
(26, 'samba', 'Samba'),
(27, 'ska', 'Ska'),
(28, 'soul', 'Soul'),
(29, 'tango', 'Tango'),
(30, 'techno', 'Techno'),
(31, 'vallenato', 'Vallenato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news`
--

CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_news`
--

INSERT INTO `cms_news` (`id`, `title`, `var`, `created_on`, `update_on`, `content`) VALUES
(3, 'Noticia', 'noticia', '2012-10-23 17:55:59', '2012-10-23 22:55:59', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news_images`
--

CREATE TABLE `cms_news_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_news_images_cms_news1` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_news_images`
--

INSERT INTO `cms_news_images` (`id`, `news_id`, `image`, `thumb`) VALUES
(1, 3, 'news/guardians_of_the_galaxy_by_super_gamerd57fd5h.jpeg', 'news/t_guardians_of_the_galaxy_by_super_gamerd57fd5h.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_principal_banners`
--

CREATE TABLE `cms_principal_banners` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `image` text,
  `thumb` text,
  `upload_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `cms_principal_banners`
--

INSERT INTO `cms_principal_banners` (`id`, `image`, `thumb`, `upload_on`, `order`) VALUES
(16, 'banners/principal/p17bbfu0q81odh1lrm10rd1icc1a494.png', 'banners/principal/t_p17bbfu0q81odh1lrm10rd1icc1a494.png', '2012-11-06 18:32:49', 0),
(17, 'banners/principal/p17bbfu0q8ef319vhulk1ii51dc5.png', 'banners/principal/t_p17bbfu0q8ef319vhulk1ii51dc5.png', '2012-11-06 18:32:49', 0),
(18, 'banners/principal/p17bbfu0q8sfo156u1prj19ut1ofs6.png', 'banners/principal/t_p17bbfu0q8sfo156u1prj19ut1ofs6.png', '2012-11-06 18:32:49', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

CREATE TABLE `cms_sessions` (
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
('020d6574f5a0e9cf04b14156e6747757', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351530006, ''),
('0f685ffb2bb63f91b245e52f64941673', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351640592, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:10:"0000000005";s:7:"user_id";s:10:"0000000005";}'),
('122dc7cbfad238c67600537be7c147e9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351882007, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('13f863649d0b7289ba5f1eb5a297ae6d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353939585, ''),
('1bdaa757b649703eccaee3a91a6e410b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351554332, 'a:5:{s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351553943";}'),
('1c4e8116cd05d134692cddd2bf36af17', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351635942, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351635339";}'),
('2bc2924b55651b312de5511432f3cc39', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351554249, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351529050";}'),
('2fd11f0bbb4fefbd87059491d86dd644', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351295975, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351284372";}'),
('39a765c9826b4b78cd202caba79bcbf7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351609106, ''),
('3c6b7e6709f8ffa363e33908447d95a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351633516, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351612274";}'),
('455ba3d057e7d0deafb8d4bad5cba628', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351638747, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351638302";}'),
('646a7416125bf3277c8b97f20477b498', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351536948, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351524724";}'),
('712665752edc91881899e8d4ee953e99', '192.168.0.8', 'Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351296344, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:23:"pecheandres@hotmail.com";s:2:"id";s:10:"0000000025";s:7:"user_id";s:10:"0000000025";}'),
('8bae1241d42577793a145ee3a5a235c1', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351536242, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351527423";}'),
('8ddebc8d376d4a4914f13943cc708d74', '192.168.0.8', 'Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351296343, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:23:"pecheandres@hotmail.com";s:8:"username";s:17:"andres.o.burgos.9";s:5:"email";s:23:"pecheandres@hotmail.com";s:7:"user_id";s:10:"0000000025";s:14:"old_last_login";s:10:"1351296101";}'),
('90a94bd230efe484d42c194294abff8e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351638728, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351635958";}'),
('a90da2749539a80c90debf300efa0616', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351633645, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:10:"0000000005";s:7:"user_id";s:10:"0000000005";}'),
('ad1280799fdc5329b5a4d9107b1ab9da', '192.168.0.20', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351282684, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:28:"andres.beethoven@hotmail.com";s:8:"username";s:12:"arodriguez34";s:5:"email";s:28:"andres.beethoven@hotmail.com";s:7:"user_id";s:10:"0000000017";s:14:"old_last_login";s:10:"1351282895";}'),
('b658d13dd7cc2846303a3088f118d1fb', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351722655, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351536266";}'),
('b8f2bdbe5ee8283b69af02083da48d5d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351609099, ''),
('c90c322cb2c7b01f6106a4fc6b30775f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352404847, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('cd63e7d1989d15902f16d77678a079f4', '192.168.0.4', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353970833, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1353938943";s:11:"facebook_id";s:10:"1432500610";}'),
('d2a4b4fde49a1b1a8a919452e1fb5648', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351698220, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351645070";}'),
('d601e546591c4e530d8b0f7ca213fa2a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352413456, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:1:"5";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352405693";}'),
('db0d12e5ba79c7972a928475ddab88b2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352406376, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:1:"5";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352295044";}'),
('dcd41ad43822823605a83f4e025da1b0', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351546855, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351536976";}'),
('e2abc9322f0236409bc9b76ee847684a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351804781, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1351690982";}'),
('e763738c920f335929f8d079c68bd485', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353100730, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1352410017";}'),
('ea0840990e10c566eaf89c564f61dc95', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351635318, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351546885";}'),
('f7b4e2d02f06d3d8fda9a9c4d4aa283d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1352252504, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352228003";}'),
('f85652295665e42df83aa27a6b855f54', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352324052, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:10:"1352228330";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_stages`
--

CREATE TABLE `cms_stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cms_stages`
--

INSERT INTO `cms_stages` (`id`, `name`, `image`, `thumb`) VALUES
(15, 'Escenario 1', 'build-a-band/stages/p17arnu6rqqsj77n6tb54glpl4.png', 'build-a-band/stages/t_p17arnu6rqqsj77n6tb54glpl4.png'),
(16, 'Escenario 2', 'build-a-band/stages/p17arnvs4b56d1dp3139pp0h1h464.jpg', 'build-a-band/stages/t_p17arnvs4b56d1dp3139pp0h1h464.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_talents`
--

CREATE TABLE `cms_talents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talents_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_talents_cms_talents_categories1` (`talents_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `cms_talents`
--

INSERT INTO `cms_talents` (`id`, `talents_category_id`, `name`, `var`) VALUES
(40, 2, 'Ac煤stica', 'acustica'),
(44, 4, 'Congas', 'congas'),
(46, 4, 'Timbal', 'timbal'),
(47, 4, 'Bongos', 'bongos'),
(49, 4, 'Tri谩ngulo', 'triangulo'),
(50, 4, 'Caja', 'caja'),
(51, 4, 'Caj贸n Peruano', 'cajon_peruano'),
(52, 4, 'Campana', 'campana'),
(53, 4, 'Cencerro', 'cencerro'),
(60, 1, 'Coros', 'coros'),
(62, 4, 'Guacharaca', 'guacharaca'),
(63, 2, 'El茅ctrica', 'electrica'),
(64, 3, 'Ac煤stico', 'acustico'),
(65, 4, 'Bateria', 'bateria'),
(66, 4, 'Maracas', 'maracas'),
(67, 1, 'Voz principal', 'voz_principal'),
(68, 3, 'El茅ctrico', 'electrico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_talents_categories`
--

CREATE TABLE `cms_talents_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_talents_categories`
--

INSERT INTO `cms_talents_categories` (`id`, `name`, `var`) VALUES
(1, 'Voz', 'voz'),
(2, 'Guitarra', 'guitarra'),
(3, 'Bajo', 'bajo'),
(4, 'Percusi贸n', 'percusion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

CREATE TABLE `cms_users` (
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
  `inshaka_url` varchar(255) DEFAULT NULL,
  `is_band` tinyint(1) DEFAULT '0',
  `band_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `subscribe_news` tinyint(1) DEFAULT '0',
  `subscribe_offers` tinyint(1) DEFAULT '0',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT '1900-01-01',
  `phone` int(20) DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT NULL,
  `profile_picture` text,
  `bio` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `inshaka_url`, `is_band`, `band_name`, `city`, `gender`, `subscribe_news`, `subscribe_offers`, `first_name`, `last_name`, `birthday`, `phone`, `facebook_id`, `profile_picture`, `bio`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 1352410012, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '1900-01-01', 0, NULL, NULL, NULL),
(17, '括\0', 'arodriguez34', '748ba128f05d4bbf87093464582d8d0144c50bc0', '3aa557c9f1', 'andres.beethoven@hotmail.com', NULL, NULL, NULL, NULL, 1351282895, 1351282895, 1, 'arodriguez34', 0, '0', 'Bogot谩, Colombia', NULL, 0, 0, 'Andres', 'Rodriguez', '1980-06-18', 1, '653749216', NULL, NULL),
(24, '括\0\Z', 'rigobcastro', '3f004b86432931ccffd6977c7cb1f867680a856c', 'fbaf074f58', 'lzmasart@gmail.com', NULL, NULL, NULL, '7b4042df8659b6c8b33b2bfe03a7593e06e85f57', 1351284372, 1353939302, 1, 'rigobcastro', 0, '0', 'Bogot谩, Colombia', 'Masculino', 0, 0, 'Rigo', 'B Castro', '1987-08-24', 1, '1432500610', 'rigobcastro/309e45c39bbcd2421bbde921f17051a0.jpg', 'Mi biograf铆a'),
(25, '括\0', 'andres.o.burgos.9', '748ba128f05d4bbf87093464582d8d0144c50bc0', '75765e4a29', 'pecheandres@hotmail.com', NULL, NULL, NULL, NULL, 1351296101, 1351296344, 1, 'andres.o.burgos.9', 0, '0', 'Bogot谩, Colombia', NULL, 0, 0, 'Andres', 'Burgos', '1982-01-27', 1, '645747772', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_audiciones_aplicaciones`
--

CREATE TABLE `cms_users_audiciones_aplicaciones` (
  `user_id` int(10) unsigned NOT NULL,
  `audiciones_aplicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`audiciones_aplicacion_id`),
  KEY `fk_cms_users_has_cms_audiciones_aplicaciones_cms_audiciones_a1` (`audiciones_aplicacion_id`),
  KEY `fk_cms_users_has_cms_audiciones_aplicaciones_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_clasificados_aplicaciones`
--

CREATE TABLE `cms_users_clasificados_aplicaciones` (
  `clasificados_aplicacion_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`clasificados_aplicacion_id`,`user_id`),
  KEY `fk_cms_clasificados_aplicaciones_has_cms_users_cms_users1` (`user_id`),
  KEY `fk_cms_clasificados_aplicaciones_has_cms_users_cms_clasificad1` (`clasificados_aplicacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_comments`
--

CREATE TABLE `cms_users_comments` (
  `user_id` int(10) unsigned NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`comment_id`),
  KEY `fk_cms_users_has_cms_users_comments_cms_users_comments1` (`comment_id`),
  KEY `fk_cms_users_has_cms_users_comments_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_users_comments`
--

INSERT INTO `cms_users_comments` (`user_id`, `comment_id`) VALUES
(17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--

CREATE TABLE `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 0000000005, 1),
(17, 0000000017, 3),
(24, 0000000024, 3),
(25, 0000000025, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_images`
--

CREATE TABLE `cms_users_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `image` text,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_images_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_users_images`
--

INSERT INTO `cms_users_images` (`id`, `user_id`, `image`, `name`) VALUES
(5, 24, 'rigobcastro/users_images/1b15dded18e1e778ffabb91ce83b1e07.jpeg', 'Otro'),
(6, 24, 'rigobcastro/users_images/012bb8dd902d7f02638ed0df8d463f8e.jpeg', 'Guardianes'),
(7, 24, 'rigobcastro/users_images/b8150c729a2b7bcd084a4ba082c89ba7.jpg', 'Adasd'),
(8, 24, 'rigobcastro/users_images/89fb6a85b234f8febc72cc6fdb186522.JPG', 'purity');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_musical_genders`
--

CREATE TABLE `cms_users_musical_genders` (
  `user_id` int(10) unsigned NOT NULL,
  `musical_gender_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`musical_gender_id`),
  KEY `fk_cms_users_has_cms_musical_genders_cms_musical_genders1` (`musical_gender_id`),
  KEY `fk_cms_users_has_cms_musical_genders_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_users_musical_genders`
--

INSERT INTO `cms_users_musical_genders` (`user_id`, `musical_gender_id`) VALUES
(24, 12),
(24, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_personal_info`
--

CREATE TABLE `cms_users_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `nivel_experiencia` varchar(255) DEFAULT 'Sin definir',
  `anos_experiencia` varchar(255) DEFAULT 'Sin definir',
  `numero_conciertos` varchar(255) DEFAULT '0',
  `influencias` text,
  `integrantes` text,
  `musico_sesion` tinyint(1) DEFAULT '0' COMMENT 'Es m煤sico de sesi贸n?',
  `necesitas_band` tinyint(1) DEFAULT '0',
  `busca_musicos` tinyint(1) DEFAULT '0',
  `ubicacion` text,
  `sitio_web` text,
  `disquera` text,
  `manager` text,
  `proximos_toques` text COMMENT 'Fechas de los pr贸ximos toques',
  `social_facebook` text,
  `social_twitter` text,
  `social_youtube` text,
  `social_AIM` text,
  `social_blogger` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_personal_info_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_users_personal_info`
--

INSERT INTO `cms_users_personal_info` (`id`, `user_id`, `nivel_experiencia`, `anos_experiencia`, `numero_conciertos`, `influencias`, `integrantes`, `musico_sesion`, `necesitas_band`, `busca_musicos`, `ubicacion`, `sitio_web`, `disquera`, `manager`, `proximos_toques`, `social_facebook`, `social_twitter`, `social_youtube`, `social_AIM`, `social_blogger`) VALUES
(3, 24, 'intermedio', '0-2', '0-10', NULL, NULL, 0, 1, 0, 'Bogota', '', '', '', NULL, 'http://www.facebook.com/rigobcastro', '', '', '', ''),
(4, 25, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'http://www.facebook.com/andres.o.burgos.9', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_photos`
--

CREATE TABLE `cms_users_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `image` text,
  `thumb` text,
  `uploaded_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_photos_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_shows`
--

CREATE TABLE `cms_users_shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `city` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_users_shows`
--

INSERT INTO `cms_users_shows` (`id`, `date`, `city`, `place`, `user_id`) VALUES
(1, '2012-11-01 07:16:00', 'Bogot谩', 'Plaza de mercado', 24),
(2, '2012-11-21 10:34:00', 'Bogot谩', 'Oficina', 24),
(3, '2012-11-30 12:00:00', 'Cali', 'Bar', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_songs`
--

CREATE TABLE `cms_users_songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `created_on` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `cms_users_songs`
--

INSERT INTO `cms_users_songs` (`id`, `url`, `created_on`, `user_id`) VALUES
(20, 'http://soundcloud.com/universalmusicenterprises/stan', '2012-11-02 13:55:21', 24),
(21, 'http://google.com', '2012-11-02 18:25:06', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_talents`
--

CREATE TABLE `cms_users_talents` (
  `user_id` int(10) unsigned NOT NULL,
  `talent_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`talent_id`),
  KEY `fk_cms_users_has_cms_talents_cms_talents1` (`talent_id`),
  KEY `fk_cms_users_has_cms_talents_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_users_talents`
--

INSERT INTO `cms_users_talents` (`user_id`, `talent_id`) VALUES
(24, 40),
(24, 63),
(24, 64),
(24, 67),
(24, 68);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_videos`
--

CREATE TABLE `cms_users_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `url` text,
  `uploaded_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_photos_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_audiciones`
--
ALTER TABLE `cms_audiciones`
  ADD CONSTRAINT `fk_cms_audiciones_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_audiciones_aplicaciones`
--
ALTER TABLE `cms_audiciones_aplicaciones`
  ADD CONSTRAINT `fk_cms_audiciones_aplicaciones_cms_audiciones1` FOREIGN KEY (`audicion_id`) REFERENCES `cms_audiciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands`
--
ALTER TABLE `cms_bands`
  ADD CONSTRAINT `fk_cms_bands_cms_musical_genders1` FOREIGN KEY (`musical_gender_id`) REFERENCES `cms_musical_genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_cms_stages1213213` FOREIGN KEY (`stage_id`) REFERENCES `cms_stages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_cms_users1232` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands_instruments`
--
ALTER TABLE `cms_bands_instruments`
  ADD CONSTRAINT `fk_cms_bands_instruments_cms_bands1` FOREIGN KEY (`band_id`) REFERENCES `cms_bands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_instruments_cms_instruments1` FOREIGN KEY (`instrument_id`) REFERENCES `cms_instruments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands_instruments_users`
--
ALTER TABLE `cms_bands_instruments_users`
  ADD CONSTRAINT `fk_cms_bands_instruments_users_cms_bands_instruments1` FOREIGN KEY (`bands_instrument_id`) REFERENCES `cms_bands_instruments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_instruments_users_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_clasificados`
--
ALTER TABLE `cms_clasificados`
  ADD CONSTRAINT `fk_cms_clasificados_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_clasificados_cms_clasificados_categorias1` FOREIGN KEY (`clasificados_categoria_id`) REFERENCES `cms_clasificados_categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_clasificados_aplicaciones`
--
ALTER TABLE `cms_clasificados_aplicaciones`
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_cms_clasificados1` FOREIGN KEY (`clasificado_id`) REFERENCES `cms_clasificados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_comments`
--
ALTER TABLE `cms_comments`
  ADD CONSTRAINT `fk_cms_comments_cms_users1` FOREIGN KEY (`user_creator_id`) REFERENCES `cms_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_directorio`
--
ALTER TABLE `cms_directorio`
  ADD CONSTRAINT `fk_cms_directorio_cms_directorio_categorias1` FOREIGN KEY (`directorio_categoria_id`) REFERENCES `cms_directorio_categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_directorio_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_directorio_adicionales`
--
ALTER TABLE `cms_directorio_adicionales`
  ADD CONSTRAINT `fk_cms_directorio_adicionales_cms_directorio1` FOREIGN KEY (`directorio_id`) REFERENCES `cms_directorio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_directorio_images`
--
ALTER TABLE `cms_directorio_images`
  ADD CONSTRAINT `fk_cms_directorio_images_cms_directorio1` FOREIGN KEY (`directorio_id`) REFERENCES `cms_directorio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_news_images`
--
ALTER TABLE `cms_news_images`
  ADD CONSTRAINT `fk_cms_news_images_cms_news1` FOREIGN KEY (`news_id`) REFERENCES `cms_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_talents`
--
ALTER TABLE `cms_talents`
  ADD CONSTRAINT `fk_cms_talents_cms_talents_categories1` FOREIGN KEY (`talents_category_id`) REFERENCES `cms_talents_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_audiciones_aplicaciones`
--
ALTER TABLE `cms_users_audiciones_aplicaciones`
  ADD CONSTRAINT `fk_cms_users_has_cms_audiciones_aplicaciones_cms_audiciones_a1` FOREIGN KEY (`audiciones_aplicacion_id`) REFERENCES `cms_audiciones_aplicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_audiciones_aplicaciones_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_clasificados_aplicaciones`
--
ALTER TABLE `cms_users_clasificados_aplicaciones`
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_has_cms_users_cms_clasificad1` FOREIGN KEY (`clasificados_aplicacion_id`) REFERENCES `cms_clasificados_aplicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_has_cms_users_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_comments`
--
ALTER TABLE `cms_users_comments`
  ADD CONSTRAINT `fk_cms_users_has_cms_users_comments_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_users_comments_cms_users_comments1` FOREIGN KEY (`comment_id`) REFERENCES `cms_comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_images`
--
ALTER TABLE `cms_users_images`
  ADD CONSTRAINT `fk_cms_users_images_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_musical_genders`
--
ALTER TABLE `cms_users_musical_genders`
  ADD CONSTRAINT `fk_cms_users_has_cms_musical_genders_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_users_has_cms_musical_genders_cms_musical_genders1` FOREIGN KEY (`musical_gender_id`) REFERENCES `cms_musical_genders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_personal_info`
--
ALTER TABLE `cms_users_personal_info`
  ADD CONSTRAINT `fk_cms_users_personal_info_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_photos`
--
ALTER TABLE `cms_users_photos`
  ADD CONSTRAINT `fk_cms_users_photos_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_shows`
--
ALTER TABLE `cms_users_shows`
  ADD CONSTRAINT `fk_cms_users_songs_cms_users10` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_songs`
--
ALTER TABLE `cms_users_songs`
  ADD CONSTRAINT `fk_cms_users_songs_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_talents`
--
ALTER TABLE `cms_users_talents`
  ADD CONSTRAINT `fk_cms_users_has_cms_talents_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_talents_cms_talents1` FOREIGN KEY (`talent_id`) REFERENCES `cms_talents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_videos`
--
ALTER TABLE `cms_users_videos`
  ADD CONSTRAINT `fk_cms_users_photos_cms_users10` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
