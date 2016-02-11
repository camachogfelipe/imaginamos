-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2013 a las 12:35:12
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
-- Base de datos: `usuariomam_akro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
--

DROP TABLE IF EXISTS `cms_configuration`;
CREATE TABLE IF NOT EXISTS `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES
(1, '2013-10-07 12:10:42', 'http://repositorio.imaginamos.com.co/akro/cms/', 'http://repositorio.imaginamos.com.co/akro/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_icons`
--

DROP TABLE IF EXISTS `cms_icons`;
CREATE TABLE IF NOT EXISTS `cms_icons` (
  `icons_id` int(11) NOT NULL AUTO_INCREMENT,
  `icons_name` varchar(100) NOT NULL,
  PRIMARY KEY (`icons_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- Volcado de datos para la tabla `cms_icons`
--

INSERT INTO `cms_icons` (`icons_id`, `icons_name`) VALUES
(1, 'abacus'),
(2, 'access_point'),
(3, 'add'),
(4, 'administrator'),
(5, 'alarm'),
(6, 'arrow_bidirectional'),
(7, 'arrow_down'),
(8, 'arrow_left'),
(9, 'arrow_right'),
(10, 'arrow_up'),
(11, 'attachment'),
(12, 'audio_knob'),
(13, 'barcode'),
(14, 'battery_empty'),
(15, 'battery_full'),
(16, 'battery_half'),
(17, 'bell'),
(18, 'bill'),
(19, 'binoculars'),
(20, 'bold'),
(21, 'book'),
(22, 'bookmark'),
(23, 'briefcase'),
(24, 'brightness'),
(25, 'broken_link'),
(26, 'brush'),
(27, 'burn_blu-ray'),
(28, 'burn_blu-ray2'),
(29, 'burn_dvd'),
(30, 'burn_dvd2'),
(31, 'cabinet'),
(32, 'calculator'),
(33, 'calendar'),
(34, 'camera'),
(35, 'cancel'),
(36, 'card_clubs'),
(37, 'card_diamonds'),
(38, 'card_hearts'),
(39, 'card_spades'),
(40, 'certificate'),
(41, 'certificate-(2)'),
(42, 'chat-exclamation'),
(43, 'checkmark'),
(44, 'checkmark2'),
(45, 'clip'),
(46, 'clipboard'),
(47, 'clock'),
(48, 'close'),
(49, 'cloud'),
(50, 'cloud2'),
(51, 'coin'),
(52, 'compress'),
(53, 'connect'),
(54, 'contrast'),
(55, 'copy'),
(56, 'cross'),
(57, 'cutter'),
(58, 'delete'),
(59, 'dial'),
(60, 'diary'),
(61, 'dimensions'),
(62, 'directional_down'),
(63, 'directional_left'),
(64, 'directional_right'),
(65, 'directional_up'),
(66, 'disconnect'),
(67, 'diskette'),
(68, 'document'),
(69, 'door'),
(70, 'download2'),
(71, 'dropper'),
(72, 'earphones'),
(73, 'effects'),
(74, 'eject'),
(75, 'emoticon_angry'),
(76, 'emoticon_confused'),
(77, 'emoticon_grin'),
(78, 'emoticon_in_love'),
(79, 'emoticon_sad'),
(80, 'emoticon_sleeping'),
(81, 'emoticon_smile'),
(82, 'encrypt'),
(83, 'eraser'),
(84, 'eye_closed'),
(85, 'eye'),
(86, 'fast_forward'),
(87, 'file'),
(88, 'fill'),
(89, 'fingerprint'),
(90, 'firewall'),
(91, 'first'),
(92, 'folder'),
(93, 'font_size'),
(94, 'font'),
(95, 'game_control'),
(96, 'gear'),
(97, 'group'),
(98, 'hammer'),
(99, 'hand_point'),
(100, 'hand_thumbsdown'),
(101, 'hand_thumbsup'),
(102, 'hard_disk'),
(103, 'headset'),
(104, 'heart'),
(105, 'help'),
(106, 'help2'),
(107, 'history'),
(108, 'home'),
(109, 'hourglass'),
(110, 'hourglass2'),
(111, 'id'),
(112, 'info'),
(113, 'info2'),
(114, 'italic'),
(115, 'item'),
(116, 'key'),
(117, 'last'),
(118, 'lightbulb'),
(119, 'link'),
(120, 'list'),
(121, 'location'),
(122, 'lock_open'),
(123, 'lock'),
(124, 'login'),
(125, 'mail_open'),
(126, 'mail'),
(127, 'messenger'),
(128, 'microhpone'),
(129, 'microphone'),
(130, 'money_bag'),
(131, 'monitor'),
(132, 'moon'),
(133, 'music_folder'),
(134, 'music_library'),
(135, 'music'),
(136, 'next'),
(137, 'notepad'),
(138, 'paragraph_align_left'),
(139, 'paragraph_align_right'),
(140, 'paragraph_align_justify'),
(141, 'password'),
(142, 'paste'),
(143, 'pause'),
(144, 'pen'),
(145, 'pencil'),
(146, 'phone'),
(147, 'photo_album'),
(148, 'pictures_folder'),
(149, 'play'),
(150, 'point'),
(151, 'power'),
(152, 'previous'),
(153, 'print'),
(154, 'pyramid'),
(155, 'random'),
(156, 'record'),
(157, 'redo'),
(158, 'reload'),
(159, 'repeat'),
(160, 'resize2'),
(161, 'rewind'),
(162, 'rotate'),
(163, 'round'),
(164, 'ruler_square'),
(165, 'satellite'),
(166, 'scissors'),
(167, 'screwdriver'),
(168, 'security'),
(169, 'shopping_basket'),
(170, 'software24'),
(171, 'spam'),
(172, 'speaker'),
(173, 'speaker2'),
(174, 'sphere'),
(175, 'spreadsheet'),
(176, 'square'),
(177, 'star'),
(178, 'stats_bars'),
(179, 'stats_lines'),
(180, 'stats_pie'),
(181, 'stop'),
(182, 'strike_through'),
(183, 'sun'),
(184, 'target'),
(185, 'thunder'),
(186, 'trash_can'),
(187, 'underlined'),
(188, 'undo'),
(189, 'upload2'),
(190, 'usb'),
(191, 'user_woman'),
(192, 'user'),
(193, 'volume_control'),
(194, 'webcam'),
(195, 'window'),
(196, 'wizard'),
(197, 'world'),
(198, 'zoom_in'),
(199, 'zoom_out'),
(200, 'zoom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_title_eng` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_url_eng` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_title_eng`, `menu_url`, `menu_url_eng`, `menu_icon`, `pos`) VALUES
(1, 'Home', '', '', '', 'home', 1),
(2, 'Nosotros', '', '', '', 'emoticon_grin', 2),
(3, 'Que Hacemos', '', 'cms_hacemos', '', 'briefcase', 3),
(4, 'Factores', '', 'cms_factores', '', 'file', 4),
(5, 'Equipo', '', 'cms_equipo', '', 'messenger', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_submenu`
--

DROP TABLE IF EXISTS `cms_submenu`;
CREATE TABLE IF NOT EXISTS `cms_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_title` varchar(200) NOT NULL,
  `submenu_title_eng` varchar(200) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_url_eng` varchar(200) NOT NULL,
  `submenu_idmenu` int(1) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`submenu_id`),
  KEY `cms_submenu` (`submenu_idmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_submenu`
--

INSERT INTO `cms_submenu` (`submenu_id`, `submenu_title`, `submenu_title_eng`, `submenu_url`, `submenu_url_eng`, `submenu_idmenu`, `pos`) VALUES
(1, 'Slider', '', 'slider', '', 1, 0),
(2, 'Bienvenida', '', 'bienvenida', '', 1, 0),
(3, 'Quienes Somos', '', 'cms_quienes', '', 2, 0),
(4, 'Que Buscamos', '', 'cms_buscamos', '', 2, 0),
(5, 'Nuestro Modelo', '', 'cms_modelo', '', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_user`
--

DROP TABLE IF EXISTS `cms_user`;
CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'Administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_home`
--

DROP TABLE IF EXISTS `descripcion_home`;
CREATE TABLE IF NOT EXISTS `descripcion_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_spa` varchar(500) DEFAULT NULL,
  `texto_eng` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `descripcion_home`
--

INSERT INTO `descripcion_home` (`id`, `texto_spa`, `texto_eng`) VALUES
(1, 'texto español', 'texto ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cargo_spa` varchar(255) DEFAULT NULL,
  `cargo_eng` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `descripcion_spa` text,
  `descripcion_eng` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `cargo_spa`, `cargo_eng`, `email`, `descripcion_spa`, `descripcion_eng`, `imagen`) VALUES
(1, 'Jose', 'Programador', 'Developer', 'jose@hotmail.com', 'descripción español.', 'description english.', 'Beautiful-Wallpaper-random-14312356-2560-1600.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factores`
--

DROP TABLE IF EXISTS `factores`;
CREATE TABLE IF NOT EXISTS `factores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_spa` varchar(255) DEFAULT NULL,
  `titulo_eng` varchar(255) DEFAULT NULL,
  `texto_spa` text,
  `texto_eng` text,
  `imagen_principal` varchar(45) DEFAULT NULL,
  `archivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `factores`
--

INSERT INTO `factores` (`id`, `titulo_spa`, `titulo_eng`, `texto_spa`, `texto_eng`, `imagen_principal`, `archivo`) VALUES
(1, 'titulo1', 'title1', '<p>texto1</p>\r\n', '<p>text1</p>\r\n', 'tron_aston_martin-wide.jpg', 'Archivo_de_prueba_pdf1365548061.pdf'),
(2, 'hhkjhjk', 'iunnui', '<p>nsjdna fkajdsf ajdskfnadsf&nbsp;</p>\r\n', '<p>kf as dhfkjasd hhdsajf kjsdahf jsdfhl</p>\r\n', 'Modern_Warfare_2_HD_Special_wallpaper1.jpg', 'activar_LDAP.doc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias_factores`
--

DROP TABLE IF EXISTS `galerias_factores`;
CREATE TABLE IF NOT EXISTS `galerias_factores` (
  `id_galerias` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `factores_id` int(11) NOT NULL,
  PRIMARY KEY (`id_galerias`),
  KEY `fk_galerias_factores_factores1_idx` (`factores_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `galerias_factores`
--

INSERT INTO `galerias_factores` (`id_galerias`, `imagen`, `factores_id`) VALUES
(1, 'Modern_Warfare_2_HD_Special_wallpaper1.jpg', 1),
(3, 'Beautiful-Wallpaper-random-14312356-2560-1600.jpg', 1),
(4, 'archivo_malo.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

DROP TABLE IF EXISTS `proceso`;
CREATE TABLE IF NOT EXISTS `proceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_spa` varchar(255) DEFAULT NULL,
  `nombre_eng` varchar(255) DEFAULT NULL,
  `texto_spa` text,
  `texto_eng` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id`, `nombre_spa`, `nombre_eng`, `texto_spa`, `texto_eng`) VALUES
(1, 'Fase 1', 'Phase 1', 'descripción español.', 'description english.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quebuscamos`
--

DROP TABLE IF EXISTS `quebuscamos`;
CREATE TABLE IF NOT EXISTS `quebuscamos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_spa` varchar(255) DEFAULT NULL,
  `texto_eng` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `quebuscamos`
--

INSERT INTO `quebuscamos` (`id`, `texto_spa`, `texto_eng`, `imagen`) VALUES
(1, 'hola españolxz', 'hola ingleszdx', 'tron_aston_martin-wide.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quehacemos`
--

DROP TABLE IF EXISTS `quehacemos`;
CREATE TABLE IF NOT EXISTS `quehacemos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion_detallada_spa` text,
  `descripcion_detallada_eng` text,
  `imagen_principal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `quehacemos`
--

INSERT INTO `quehacemos` (`id`, `nombre`, `descripcion_detallada_spa`, `descripcion_detallada_eng`, `imagen_principal`) VALUES
(1, 'Akro legal', '<p>desc detallada spa2</p>\r\n', '<p>desc detallada eng2</p>\r\n', 'tron_aston_martin-wide.jpg'),
(3, 'Akro cloud', '<p>joisejfiowjfwiejf jweoifj oiwejfio wefj</p>\r\n', '<p>jfioe wjiofjiowe fwijfiowej fio</p>\r\n', 'wallpapers-desktop-backgrounds.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes`
--

DROP TABLE IF EXISTS `quienes`;
CREATE TABLE IF NOT EXISTS `quienes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `texto_spa` text,
  `texto_eng` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `quienes`
--

INSERT INTO `quienes` (`id`, `nombre`, `texto_spa`, `texto_eng`, `imagen`) VALUES
(1, 'Quienes Somos', '<p>texto quienes espa&ntilde;ol2</p>\r\n', '<p>texto quienes ingles2</p>\r\n', 'lair_dragons-wide.jpg'),
(2, 'Nuestro Modelo', '<p>texto modelo espa&ntilde;ol</p>\r\n', '<p>texto modelo ingles</p>\r\n', 'Beautiful-Wallpaper-random-14312356-2560-1600.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_spa` varchar(255) DEFAULT NULL,
  `titulo_eng` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo_spa`, `titulo_eng`, `imagen`) VALUES
(1, 'titulo español', 'titulo ingles', 'Beautiful-Wallpaper-random-14312356-2560-16001.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galerias_factores`
--
ALTER TABLE `galerias_factores`
  ADD CONSTRAINT `fk_galerias_factores_factores1` FOREIGN KEY (`factores_id`) REFERENCES `factores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
