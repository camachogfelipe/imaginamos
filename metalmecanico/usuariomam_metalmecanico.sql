-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2013 a las 12:35:47
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
-- Base de datos: `usuariomam_metalmecanico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcance`
--

DROP TABLE IF EXISTS `alcance`;
CREATE TABLE IF NOT EXISTS `alcance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_corto` varchar(255) DEFAULT NULL,
  `texto_detallado` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_detalle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `alcance`
--

INSERT INTO `alcance` (`id`, `titulo`, `texto_corto`, `texto_detallado`, `imagen`, `imagen_detalle`) VALUES
(2, 'nuevo asdasd', 'asndaskasdsad', '<p>descripcion detallada sfasdasd</p>\n', 'Contenido_de_prueba1.jpg', ''),
(3, 'nuevo asdasd', 'asndaskasdsad', '<p>descripcion detallada sfasdasd</p>\n', 'Contenido_de_prueba2.jpg', ''),
(4, 'Prueba 01 alcance', 'Lorem ipsum dolor sit amet, co', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n\n<p>&nbsp;</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n', 'can-stock-photo_csp0116729.jpg', ''),
(5, 'Prueba 02 alcance', 'Lorem ipsum dolor sit amet, co', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n', '8432736811_4be0440b1c_h.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `imagen`) VALUES
(1, '01.jpg'),
(2, '02.jpg'),
(3, '03.jpg'),
(4, '04.jpg'),
(5, '05.jpg'),
(6, '07.jpg');

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
(1, '2013-10-07 12:10:42', 'http://repositorio.imaginamos.com.co/MAM/metalmecanico/cms/', 'http://repositorio.imaginamos.com.co/MAM/metalmecanico/', 'cms@imaginamos.com', 'imaginamos.com');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_title_eng`, `menu_url`, `menu_url_eng`, `menu_icon`, `pos`) VALUES
(1, 'Home', '', '', '', 'home', 1),
(2, 'Quienes Somos', '', 'quienes', '', 'administrator', 2),
(3, 'Contacto', '', 'contacto', '', 'headset', 7),
(4, 'Alcance', '', 'alcance', '', 'sphere', 3),
(5, 'Clientes', '', 'clientes', '', 'emoticon_grin', 6),
(6, 'Noticias', '', 'noticias', '', 'notepad', 4),
(7, 'Proyectos', '', 'proyectos', '', 'diary', 5);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_submenu`
--

INSERT INTO `cms_submenu` (`submenu_id`, `submenu_title`, `submenu_title_eng`, `submenu_url`, `submenu_url_eng`, `submenu_idmenu`, `pos`) VALUES
(1, 'Slider', '', 'slider', '', 1, 0),
(2, 'Destacados', '', 'destacados', '', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_user`
--

DROP TABLE IF EXISTS `cms_user`;
CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'Administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin'),
(2, 'Federico Silva', 'f40ac70158b68b6539c8a6402c1fa05a', 'federico.silva@grupoindustrial.com.co', NULL),
(3, 'Jose', '90a50b62439fbde62347a9adac0e39c3', 'jose.betancourt@imaginamos.com.co', NULL),
(4, 'alexandra', '827ccb0eea8a706c4c34a16891f84e7b', 'alexandra.gomez@imaginamos.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `imagen`, `email`) VALUES
(1, 'contact.jpg', 'maria.martinez@imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

DROP TABLE IF EXISTS `destacados`;
CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `titulo`, `subtitulo`, `texto`, `link`) VALUES
(1, 'Titulo de prueba', 'Prueba 01', 'Lorem ipsum dolor sit amet, co', '/proyectos_detalle/3'),
(2, 'Destacado lorem', 'DEMI', 'Esta es la descripción corta', ''),
(3, 'Destacado adipisci', 'Destacado 2', 'Esta es la descripción corta 2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

DROP TABLE IF EXISTS `galerias`;
CREATE TABLE IF NOT EXISTS `galerias` (
  `id_galerias` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `proyectos_id` int(11) NOT NULL,
  PRIMARY KEY (`id_galerias`),
  KEY `fk_galerias_proyectos_idx` (`proyectos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id_galerias`, `imagen`, `proyectos_id`) VALUES
(1, 'lair_dragons-wide.jpg', 1),
(2, 'Beautiful-Wallpaper-random-14312356-2560-1600.jpg', 1),
(3, 'tron_aston_martin-wide.jpg', 3),
(4, 'Modern_Warfare_2_HD_Special_wallpaper1.jpg', 3),
(5, 'can-stock-photo_csp0058626.jpg', 4),
(6, 'can-stock-photo_csp5473707.jpg', 4),
(7, 'can-stock-photo_csp0116729.jpg', 4),
(8, 'can-stock-photo_csp0279846.jpg', 4),
(9, 'can-stock-photo_csp1246253.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `link`, `imagen`, `tipo`) VALUES
(1, 'Noticia 1 prueba', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium ', 'sample3.pdf', 'Aeropuerto-ElDorado-p-540x212.jpg', 2),
(2, 'Noticia 1 prueba 02', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', '', 'can-stock-photo_csp0407310.jpg', 1),
(3, 'Noticia 1', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'https://www.google.com.co', 'Contenido_de_prueba2.jpg', 1),
(4, 'Noticia 1', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'https://www.google.com.co', 'Contenido_de_prueba3.jpg', 1),
(5, 'Noticia prueba 03', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'sample5.pdf', 'can-stock-photo_csp0507167.jpg', 2),
(6, 'Noticia 1', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'https://www.google.com.co', 'Contenido_de_prueba5.jpg', 1),
(7, 'Noticia 1', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'https://www.google.com.co', 'Contenido_de_prueba6.jpg', 1),
(8, 'Noticia 1', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'https://www.google.com.co', 'Contenido_de_prueba7.jpg', 1),
(9, 'Noticia 9', 'Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam. Vivamus cursus viverra eros, vitae dictum lectus lacinia eu. dasd', 'sample6.pdf', 'can-stock-photo_csp0908122.jpg', 2),
(13, 'Testing', 'wd sdac paskdasd ad aposk asd''a dasdk apdlas dpoj', 'ddd', 'Contenido_de_prueba12.jpg', 1),
(16, 'Testing', 'aasdasdasd', 'sample2.pdf', 'azbqj4m_700b_v1.jpg', 2),
(17, 'Noticia prueba 04', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium ', 'sample4.pdf', 'tunel_de_la_linea.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen_principal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `texto`, `imagen_principal`) VALUES
(1, 'Proyecto 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt, odio a venenatis lobortis, turpis libero scelerisque felis, quis ultricies dolor sem in lorem. Aenean ornare nulla at sollicitudin tincidunt. Aliquam erat volutpat. Phasellus eros nibh, aliquet ac magna at, ultricies porttitor quam.&nbsp;<br />\n<br />\nVivamus cursus viverra eros, vitae dictum lectus lacinia eu. Aenean scelerisque ligula ac tincidunt eleifend. In et quam massa. Aenean gravida ac erat vel tempus. Quisque fringilla pulvinar risus, sit amet porta sem lobortis et.</p>\n', 'Contenido_de_prueba.jpg'),
(3, 'Proyecto 2', '<p>dsfgasdf dasfasdfasd</p>\n', 'Contenido_de_prueba1.jpg'),
(4, 'Prueba de proyecto 01', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n\n<p><span style="line-height: 1.6em;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span></p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Inf ddsfs dfadfs dfsfr ewcsdf</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n', 'can-stock-photo_csp2330424.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes`
--

DROP TABLE IF EXISTS `quienes`;
CREATE TABLE IF NOT EXISTS `quienes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `texto` text,
  `texto_detallado` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `ruta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `quienes`
--

INSERT INTO `quienes` (`id`, `nombre`, `texto`, `texto_detallado`, `imagen`, `ruta`) VALUES
(1, 'Historia', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>\n\n<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n', 'stock-photo-19685843-office-meeting-room.jpg', 'historia'),
(2, 'Misión', '<p>sadsad</p>\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.</p>', 'Contenido_de_prueba1.jpg', 'mision'),
(3, 'Políticas de calidad', '<p>asdasdfefqwdqwdqwdwqdsad sadasd asdsad</p>\n\n<p>&nbsp;</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos? Labore, dolor maxime dolorum reprehenderit quisquam adipisci nihil facere omnis possimus laboriosam.</p>\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, sapiente quidem minus ducimus aperiam perspiciatis atque a quos.</p>', 'Contenido_de_prueba2.jpg', 'politicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='	' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `subtitulo`, `link`, `imagen`) VALUES
(1, 'PRUEBA ', 'Prueba', 'https://www.google.com.co/', 'banner_1.png'),
(2, 'Sapiente quidem', 'DOLOR EMET', 'http://www.google.com', 'banner_2.png'),
(3, 'Prueba 01 ', 'Es una prueba de montaje', '/front_proyectos', 'banner_21.png');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `fk_galerias_proyectos` FOREIGN KEY (`proyectos_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
