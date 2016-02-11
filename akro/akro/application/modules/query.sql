-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2013 a las 23:02:09
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES
(1, '2013-10-07 12:10:42', 'http://localhost/proyecto/cms/', 'http://localhost/proyecto/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_icons`
--

CREATE TABLE IF NOT EXISTS `cms_icons` (
  `icons_id` int(11) NOT NULL AUTO_INCREMENT,
  `icons_name` varchar(100) NOT NULL,
  PRIMARY KEY (`icons_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `menu_title_eng` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_url_eng` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Estructura de tabla para la tabla `cms_submenu`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Estructura de tabla para la tabla `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'Administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
