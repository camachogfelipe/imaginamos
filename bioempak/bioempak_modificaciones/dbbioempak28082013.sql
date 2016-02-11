-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2013 a las 21:18:20
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbbioempak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
--

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
(1, '2012-07-25 12:10:42', 'http://localhost/bioempak/cms/', 'http://localhost/bioempak/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_icons`
--

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

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`, `pos`) VALUES
(22, 'Tecnologia', 'tech', 'usb', 3),
(21, 'Noticias', 'news', 'notepad', 2),
(24, 'Inicio', '', 'spreadsheet', 1),
(25, 'Cambio de clave', 'cms', 'reload', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_submenu`
--

CREATE TABLE IF NOT EXISTS `cms_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_title` varchar(200) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_idmenu` int(1) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`submenu_id`),
  KEY `cms_submenu` (`submenu_idmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cms_submenu`
--

INSERT INTO `cms_submenu` (`submenu_id`, `submenu_title`, `submenu_url`, `submenu_idmenu`, `pos`) VALUES
(11, 'Clientes', 'customers', 24, 0),
(12, 'Mapa', 'map', 24, 0),
(13, 'Miembros', 'members', 24, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrator', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin'),
(5, 'cliente', '4983a0ab83ed86e0e7213c8783940193', 'cliente@imaginamos.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `id_usuario`, `fecha`, `id_noticia`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 1, '2013-08-28 04:07:15', 1),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 2, '2013-08-19 07:12:46', 1),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 1, '2013-08-11 05:22:07', 1),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 5, '2013-04-02 08:15:12', 1),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 2, '2013-06-01 03:29:02', 1),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 3, '2013-08-12 00:00:00', 1),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 3, '2013-08-27 05:21:07', 1),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 2, '2013-08-27 11:16:34', 1),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 4, '2013-08-12 18:50:38', 1),
(10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.', 2, '2013-08-26 02:14:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `empresa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `id_impresion` int(11) NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `id_sector` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bigimage` varchar(100) DEFAULT NULL,
  `smallimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `bigimage`, `smallimage`) VALUES
(1, '1.png', '11.png'),
(2, '2.png', '21.png'),
(3, '3.png', '31.png'),
(5, '5.png', '51.png'),
(6, '6.png', '61.png'),
(7, '7.png', '71.png'),
(8, '8.png', '81.png'),
(9, '9.png', '91.png'),
(10, '10.png', '101.png'),
(12, '12.png', '121.png'),
(13, '13.png', '131.png'),
(14, '14.png', '141.png'),
(15, '15.png', '151.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `phone3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `image`, `address`, `phone`, `email`, `phone2`, `phone3`) VALUES
(1, '1.png', 'Address_', 'Phone1_', 'Email_', 'Phone2_', 'Phone3_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_products`
--

CREATE TABLE IF NOT EXISTS `images_products` (
  `id_image` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_image`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresiones`
--

CREATE TABLE IF NOT EXISTS `impresiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `impresiones`
--

INSERT INTO `impresiones` (`id`, `nombre`) VALUES
(1, 'Sin impresion'),
(2, 'Impresión 1 tinta'),
(3, 'Impresión 2 tinta'),
(4, 'Impresión 3 tinta'),
(5, 'Impresión 4 tinta'),
(6, 'Impresión 5 tinta'),
(7, 'Impresión 6 tinta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `map`
--

CREATE TABLE IF NOT EXISTS `map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `map` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `map`
--

INSERT INTO `map` (`id`, `map`) VALUES
(1, 'http://maps.google.es/maps?f=q&source=s_q&hl=es&q=Carrera+19B+%23+168-77,+Usaqu%C3%A9n,+Bogot%C3%A1,+Cundinamarca,+Colombia&aq=&sll=4.631179,-73.828125&sspn=11.391516,19.753418&ie=UTF8&geocode=FY95SAAdhzSW-w&split=0&hq=&hnear=Carrera+19B+%23+168-77,+Bogot%C3%A1,+Cundinamarca,+Colombia&t=m&z=14&iwloc=A&output=embed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `name`, `email`) VALUES
(1, 'Andres', 'autorun@live.co.uk'),
(2, 'Carlos', 'thisisavirus@live.co.uk'),
(3, 'Diana', 'd@d.com'),
(4, 'jjjj', 'kjkjkj'),
(5, 'Carlos Gómez', 'carlos.gomez@imaginamos.com'),
(6, 'Carlos Gómez', 'carlos.gomez@imaginamos.com'),
(7, 'hhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhh'),
(8, 'NICOLAS LOPEZ', 'el_nikko@hotmail.com'),
(9, 'liubfwiudbf wliuedfhwiueh', 'diego_m_w@hotmail.com'),
(10, 'NICOLAS LOPEZ', 'el_nikko@hotmail.com'),
(11, 'nicolas lopez', 'produccion@bioempak.com'),
(12, 'Carlos Andrés Gómez Zapata', 'carlos.gomez@imaginamos.com'),
(13, 'nicolas lopez', 'produccion@bioempak.com'),
(14, '0', '0'),
(15, 'john pinilla', 'johensur.10@hotmail.com'),
(16, 'john alexander pinillla ortiz', 'johensur.10@hotmail.com'),
(17, 'fabio aguilar', 'rechmial@hotmail.es'),
(18, '0', '0'),
(19, '0', '0'),
(20, '0', '0'),
(21, '0', '0'),
(22, '0', '0'),
(23, 'Carlos Andrés Gómez', 'carlos.gomez@imaginamos.com'),
(24, '0', '0'),
(25, 'monica liliana ramirez', 'kiutlili@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `text2` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion_buena` int(11) DEFAULT NULL,
  `calificacion_neutro` int(11) DEFAULT NULL,
  `calificacion_mala` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagen`, `calificacion_buena`, `calificacion_neutro`, `calificacion_mala`, `fecha`, `id_usuario`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-20', 1),
(2, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-21', 1),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-20', 1),
(4, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-21', 1),
(5, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-20', 1),
(6, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.', '', NULL, NULL, NULL, '2013-08-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `titulo`, `subtitulo`, `descripcion`) VALUES
(1, 'Foil de aluminio blister 25 micras">Foil de aluminio blister 25 micras', '', ''),
(2, 'laminado alu alu">laminado alu alu', '', ''),
(3, 'Laminado Alu poly">Laminado Alu poly', '', ''),
(4, 'Laminado multicapa- efervecentes">Laminado multicapa- efervecentes', '', ''),
(5, 'Laminado multicapa- multiusos">Laminado multicapa- multiusos', '', ''),
(6, 'Laminado tricapa">Laminado tricapa', '', ''),
(7, 'Laminado flexpap">Laminado flexpap', '', ''),
(8, 'Membranas 30 micras- yogurt">Membranas 30 micras- yogurt', '', ''),
(9, 'Membranas 35 micras- yogurt">Membranas 35 micras- yogurt', '', ''),
(10, 'Membranas 38 micras-margarina">Membranas 38 micras-margarina', '', ''),
(11, 'Membranas 50 micras-margarinas">Membranas 50 micras-margarinas', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `nombre`) VALUES
(1, 'Sector 1'),
(2, 'Sector 2'),
(3, 'Sector 3'),
(4, 'Sector 4'),
(5, 'Sector 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tech`
--

CREATE TABLE IF NOT EXISTS `tech` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tech`
--

INSERT INTO `tech` (`id`, `text`, `image`) VALUES
(1, '<div style="font-size: 10pt; text-align: justify; "><font size="5"><b><font color="#999999">Impresión</font> <font color="#33ccff">flexográfica</font></b></font></div><div style="font-size: 10pt; text-align: justify; "><font size="5"><b><font color="#33ccff"><br></font></b></font></div><div style="font-weight: normal; text-align: justify; "><font size="2">Nuestro proceso de impresión se realiza por el sistema de flexografía, contamos con Impresoras de hasta 6 colores con un ancho de 33 cms y utilizamos tintas adecuadas para los diferentes sustratos a imprimir. Nuestros equipos cuentan con cámaras de video que nos permiten hacer una inspección constante durante el proceso de impresión. Usamos fotopolímeros para el proceso de impresión, las planchas que utilizamos son elaboradas digitalmente, lo que nos permite una mejor calidad en la definición del diseño a imprimir.</font></div>', '1.png'),
(2, '<div><b style="font-size: x-large; text-align: justify; "><font color="#999999">Corte</font> <font color="#33ccff">y conversión</font></b></div><div><br></div><div style="text-align: justify;"><span style="font-size: 10pt; ">El proceso de corte lo realizamos en máquinas cortadoras de rollo a rollo, utilizando bobinas madre de hasta 1300 mm de ancho, para luego convertirlas en el ancho que es requerido por el cliente, Utilizamos diferentes tipos de corte dependiendo del sustrato que se va a cortar.</span></div>', '2.png'),
(3, '<div><b style="font-size: x-large; text-align: justify; "><font color="#33ccff">Troquelado </font></b></div><div><br></div><div style="text-align: justify;"><span style="font-size: 10pt; ">El proceso de troquelado lo realizamos con un sistema de embutido, utilizando herramientas de muy alta calidad y precisión.\n\nDependiendo del diseño que requiera cada cliente se puede elaborar la herramienta. Contamos con troqueles en stock para las formas más comunes. El grabado de la tapa se fabrica de acuerdo al diseño que requiera el cliente y puede hacerse en alto relieve.</span></div>', '3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us`
--

CREATE TABLE IF NOT EXISTS `us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `us` (`id`, `title`, `subtitle`, `text`, `image`) VALUES
(2, 'Quienes Somos', 'Quienes Somos', 'Quienes somos texto<div><br></div><div>Quienes somos con enter</div><div><br></div>', '2.png'),
(3, 'Valores', 'Valores', 'Valores', '3.jpg'),
(4, 'Something', 'A?', 'adasdasd<div>asd</div><div>a</div><div>sda</div><div>sd</div><div>asd</div><div>asd</div><div>a</div><div>sd</div><div>ads</div>', '4.jpg'),
(5, 'Paramore', 'Brand New Eyes', '<span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n<div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; "><br></span></div><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; "><br></span></div><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; "><br></span></div><div><span style="font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div>', '5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `id_sector` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `tipo`, `empresa`, `id_sector`, `cargo`, `created_at`) VALUES
(1, 'lmartinez@email.com', '12345', 'Laura Martinez', 'Empresa', 'Empresa4', 1, 'Secretaria', '2013-08-27 13:11:03'),
(2, 'mperez@email.com', '12345', 'Maria Perez', 'Empresa', 'Empresa1', 1, 'Gerente de ventas', '2013-08-27 13:11:03'),
(3, 'jalvarez@email.com', '12345', 'Juan Alvarez', 'Empresa', 'Empresa2', 1, 'Jefe de Recursos Humanos', '2013-08-27 13:11:03'),
(4, 'chernandez@email.com', '12345', 'Carlos Hernandez', 'Empresa', 'Empresa2', 1, 'Diseñador', '2013-08-27 13:11:03'),
(5, 'jsuarez@email.com', '12345', 'Jose Suarez', 'Empresa', 'Empresa3', 1, 'Programador', '2013-08-27 13:11:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
