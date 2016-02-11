-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2013 a las 12:06:12
-- Versión del servidor: 5.5.8-log
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jabalies_taller_postal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--

CREATE TABLE IF NOT EXISTS `cms_api_oauth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strategy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `active_oauth` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_api_oauth`
--

INSERT INTO `cms_api_oauth` (`id`, `name`, `provider`, `strategy`, `api_key`, `api_secret`, `scope`, `active`, `active_oauth`) VALUES
(1, 'Facebook', 'facebook', 'oauth2', '1416132521932785', '335e4e5e18413ce88244a2bd0be4f226', 'offline_access,email,publish_stream,manage_pages', 1, 1),
(2, 'Twitter', 'twitter', 'oauth1', 'oaUPjhYWiIETQBNrvt3XfQ', 'kPsTns4nNWAhcnNyP6TtWP02lEgiRQRevfDdHF5Qw4U', '', 1, 1),
(3, 'Google', 'google', 'oauth2', '1073082606021.apps.googleusercontent.com', 'dZgio_ypJkpmQEUBjwK1FYGQ', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categoria`
--

CREATE TABLE IF NOT EXISTS `cms_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'inputhidden|view',
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Titulo#|span#span3#',
  `categoria_id` int(11) DEFAULT NULL COMMENT 'combox|view|label#Categoria#|span#span3#',
  `linea_id` int(11) NOT NULL COMMENT 'combox|view|label#Linea de Productos#|span#span3#',
  PRIMARY KEY (`id`),
  KEY `fk_cms_categoria_cms_categoria1_idx` (`categoria_id`),
  KEY `fk_cms_categoria_linea1` (`linea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_color`
--

CREATE TABLE IF NOT EXISTS `cms_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'inputhidden|view',
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Titulo#|span#span3#',
  `valor` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'inputColor|view|label#Color#|span#span3#',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_color_papel`
--

CREATE TABLE IF NOT EXISTS `cms_color_papel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `papel_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_color_papel_papel1` (`papel_id`),
  KEY `fk_cms_color_papel_color1` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_color_producto`
--

CREATE TABLE IF NOT EXISTS `cms_color_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_color_has_producto_producto1` (`producto_id`),
  KEY `fk_color_has_producto_color1` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_comunidad`
--

CREATE TABLE IF NOT EXISTS `cms_comunidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'inputhidden|view',
  `texto` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'text|view|label#Texto#|span#span3#',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(18) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cordenada_x` double NOT NULL DEFAULT '0',
  `cordenada_y` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contacto`
--

INSERT INTO `cms_contacto` (`id`, `direccion`, `telefono`, `fax`, `celular`, `email`, `ciudad`, `cordenada_x`, `cordenada_y`) VALUES
(1, '', '', '', '', '', '', 40.396764, -3.713379);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_datos_usuario`
--

CREATE TABLE IF NOT EXISTS `cms_datos_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'inputhidden|view',
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Nombre#|span#span3#',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Email#|span#span3#',
  `direccion` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Dirección#|span#span3#',
  `telefono` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT 'input|view|label#Telefono#|span#span3#',
  `celular` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci,
  `cms_municipios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_datos_usuario_cms_municipios1` (`cms_municipios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_departamento`
--

CREATE TABLE IF NOT EXISTS `cms_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` decimal(10,0) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `cms_departamento`
--

INSERT INTO `cms_departamento` (`id`, `codigo`, `nombre`) VALUES
(1, '5', 'ANTIOQUIA'),
(2, '8', 'ATLANTICO'),
(3, '11', 'BOGOTA'),
(4, '13', 'BOLIVAR'),
(5, '15', 'BOYACA'),
(6, '17', 'CALDAS'),
(7, '18', 'CAQUETA'),
(8, '19', 'CAUCA'),
(9, '20', 'CESAR'),
(10, '23', 'CORDOBA'),
(11, '25', 'CUNDINAMARCA'),
(12, '27', 'CHOCO'),
(13, '41', 'HUILA'),
(14, '44', 'LA GUAJIRA'),
(15, '47', 'MAGDALENA'),
(16, '50', 'META'),
(17, '52', 'NARI'),
(18, '54', 'N. DE SANTANDER'),
(19, '63', 'QUINDIO'),
(20, '66', 'RISARALDA'),
(21, '68', 'SANTANDER'),
(22, '70', 'SUCRE'),
(23, '73', 'TOLIMA'),
(24, '76', 'VALLE DEL CAUCA'),
(25, '81', 'ARAUCA'),
(26, '85', 'CASANARE'),
(27, '86', 'PUTUMAYO'),
(28, '88', 'SAN ANDRES'),
(29, '91', 'AMAZONAS'),
(30, '94', 'GUAINIA'),
(31, '95', 'GUAVIARE'),
(32, '97', 'VAUPES'),
(33, '99', 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_disenador`
--

CREATE TABLE IF NOT EXISTS `cms_disenador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_disenador_cms_imagen1` (`imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_disenador_linea`
--

CREATE TABLE IF NOT EXISTS `cms_disenador_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linea_id` int(11) NOT NULL,
  `disenador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_disenador_linea_linea1` (`linea_id`),
  KEY `fk_cms_disenador_linea_disenador1` (`disenador_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_entrega`
--

CREATE TABLE IF NOT EXISTS `cms_entrega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precio_recogido` double NOT NULL,
  `precio_enviado` double NOT NULL,
  `municipios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_entrega_cms_municipios1` (`municipios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios'),
(4, 'cliente', 'Cliente'),
(5, 'proveedor', 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_groups_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `permission_id` int(11) NOT NULL,
  `view` tinyint(1) DEFAULT '0',
  `create` tinyint(1) DEFAULT '0',
  `update` tinyint(1) DEFAULT '0',
  `delete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_permissions_cms_permissions1_idx` (`permission_id`),
  KEY `fk_cms_groups_permissions_cms_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_groups_permissions`
--

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 1, 1, 1),
(6, 1, 2, 1, 1, 1, 1),
(7, 2, 1, 1, 1, 1, 1),
(8, 2, 2, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen`
--

CREATE TABLE IF NOT EXISTS `cms_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_invitacion`
--

CREATE TABLE IF NOT EXISTS `cms_invitacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `valor_cambia_color` double NOT NULL,
  `valor_impresion_dorso` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_invitacion_papel`
--

CREATE TABLE IF NOT EXISTS `cms_invitacion_papel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invitacion_id` int(11) NOT NULL,
  `papel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invitacion_has_papel_papel1` (`papel_id`),
  KEY `fk_invitacion_has_papel_invitacion1` (`invitacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_linea`
--

CREATE TABLE IF NOT EXISTS `cms_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_short` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_municipios`
--

CREATE TABLE IF NOT EXISTS `cms_municipios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` decimal(10,0) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_municipios_cms_departamento1` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1121 ;

--
-- Volcado de datos para la tabla `cms_municipios`
--

INSERT INTO `cms_municipios` (`id`, `codigo`, `nombre`, `departamento_id`) VALUES
(1, '1', 'MEDELLIN', 1),
(2, '2', 'ABEJORRAL', 1),
(3, '4', 'ABRIAQUI', 1),
(4, '21', 'ALEJANDRIA', 1),
(5, '30', 'AMAGA', 1),
(6, '31', 'AMALFI', 1),
(7, '34', 'ANDES', 1),
(8, '36', 'ANGELOPOLIS', 1),
(9, '38', 'ANGOSTURA', 1),
(10, '40', 'ANORI', 1),
(11, '42', 'SANTAFE DE ANTIOQUIA', 1),
(12, '44', 'ANZA', 1),
(13, '45', 'APARTADO', 1),
(14, '51', 'ARBOLETES', 1),
(15, '55', 'ARGELIA', 1),
(16, '59', 'ARMENIA', 1),
(17, '79', 'BARBOSA', 1),
(18, '86', 'BELMIRA', 1),
(19, '88', 'BELLO', 1),
(20, '91', 'BETANIA', 1),
(21, '93', 'BETULIA', 1),
(22, '101', 'CIUDAD BOLIVAR', 1),
(23, '107', 'BRICE', 1),
(24, '113', 'BURITICA', 1),
(25, '120', 'CACERES', 1),
(26, '125', 'CAICEDO', 1),
(27, '129', 'CALDAS', 1),
(28, '134', 'CAMPAMENTO', 1),
(29, '138', 'CA', 1),
(30, '142', 'CARACOLI', 1),
(31, '145', 'CARAMANTA', 1),
(32, '147', 'CAREPA', 1),
(33, '148', 'EL CARMEN DE VIBORAL', 1),
(34, '150', 'CAROLINA', 1),
(35, '154', 'CAUCASIA', 1),
(36, '172', 'CHIGORODO', 1),
(37, '190', 'CISNEROS', 1),
(38, '197', 'COCORNA', 1),
(39, '206', 'CONCEPCION', 1),
(40, '209', 'CONCORDIA', 1),
(41, '212', 'COPACABANA', 1),
(42, '234', 'DABEIBA', 1),
(43, '237', 'DON MATIAS', 1),
(44, '240', 'EBEJICO', 1),
(45, '250', 'EL BAGRE', 1),
(46, '264', 'ENTRERRIOS', 1),
(47, '266', 'ENVIGADO', 1),
(48, '282', 'FREDONIA', 1),
(49, '284', 'FRONTINO', 1),
(50, '306', 'GIRALDO', 1),
(51, '308', 'GIRARDOTA', 1),
(52, '310', 'GOMEZ PLATA', 1),
(53, '313', 'GRANADA', 1),
(54, '315', 'GUADALUPE', 1),
(55, '318', 'GUARNE', 1),
(56, '321', 'GUATAPE', 1),
(57, '347', 'HELICONIA', 1),
(58, '353', 'HISPANIA', 1),
(59, '360', 'ITAGUI', 1),
(60, '361', 'ITUANGO', 1),
(61, '364', 'JARDIN', 1),
(62, '368', 'JERICO', 1),
(63, '376', 'LA CEJA', 1),
(64, '380', 'LA ESTRELLA', 1),
(65, '390', 'LA PINTADA', 1),
(66, '400', 'LA UNION', 1),
(67, '411', 'LIBORINA', 1),
(68, '425', 'MACEO', 1),
(69, '440', 'MARINILLA', 1),
(70, '467', 'MONTEBELLO', 1),
(71, '475', 'MURINDO', 1),
(72, '480', 'MUTATA', 1),
(73, '483', 'NARI', 1),
(74, '490', 'NECOCLI', 1),
(75, '495', 'NECHI', 1),
(76, '501', 'OLAYA', 1),
(77, '541', 'PE', 1),
(78, '543', 'PEQUE', 1),
(79, '576', 'PUEBLORRICO', 1),
(80, '579', 'PUERTO BERRIO', 1),
(81, '585', 'PUERTO NARE', 1),
(82, '591', 'PUERTO TRIUNFO', 1),
(83, '604', 'REMEDIOS', 1),
(84, '607', 'RETIRO', 1),
(85, '615', 'RIONEGRO', 1),
(86, '628', 'SABANALARGA', 1),
(87, '631', 'SABANETA', 1),
(88, '642', 'SALGAR', 1),
(89, '647', 'SAN ANDRES DE CUERQUIA', 1),
(90, '649', 'SAN CARLOS', 1),
(91, '652', 'SAN FRANCISCO', 1),
(92, '656', 'SAN JERONIMO', 1),
(93, '658', 'SAN JOSE DE LA MONTA', 1),
(94, '659', 'SAN JUAN DE URABA', 1),
(95, '660', 'SAN LUIS', 1),
(96, '664', 'SAN PEDRO', 1),
(97, '665', 'SAN PEDRO DE URABA', 1),
(98, '667', 'SAN RAFAEL', 1),
(99, '670', 'SAN ROQUE', 1),
(100, '674', 'SAN VICENTE', 1),
(101, '679', 'SANTA BARBARA', 1),
(102, '686', 'SANTA ROSA DE OSOS', 1),
(103, '690', 'SANTO DOMINGO', 1),
(104, '697', 'EL SANTUARIO', 1),
(105, '736', 'SEGOVIA', 1),
(106, '756', 'SONSON', 1),
(107, '761', 'SOPETRAN', 1),
(108, '789', 'TAMESIS', 1),
(109, '790', 'TARAZA', 1),
(110, '792', 'TARSO', 1),
(111, '809', 'TITIRIBI', 1),
(112, '819', 'TOLEDO', 1),
(113, '837', 'TURBO', 1),
(114, '842', 'URAMITA', 1),
(115, '847', 'URRAO', 1),
(116, '854', 'VALDIVIA', 1),
(117, '856', 'VALPARAISO', 1),
(118, '858', 'VEGACHI', 1),
(119, '861', 'VENECIA', 1),
(120, '873', 'VIGIA DEL FUERTE', 1),
(121, '885', 'YALI', 1),
(122, '887', 'YARUMAL', 1),
(123, '890', 'YOLOMBO', 1),
(124, '893', 'YONDO', 1),
(125, '895', 'ZARAGOZA', 1),
(126, '1', 'BARRANQUILLA', 2),
(127, '78', 'BARANOA', 2),
(128, '137', 'CAMPO DE LA CRUZ', 2),
(129, '141', 'CANDELARIA', 2),
(130, '296', 'GALAPA', 2),
(131, '372', 'JUAN DE ACOSTA', 2),
(132, '421', 'LURUACO', 2),
(133, '433', 'MALAMBO', 2),
(134, '436', 'MANATI', 2),
(135, '520', 'PALMAR DE VARELA', 2),
(136, '549', 'PIOJO', 2),
(137, '558', 'POLONUEVO', 2),
(138, '560', 'PONEDERA', 2),
(139, '573', 'PUERTO COLOMBIA', 2),
(140, '606', 'REPELON', 2),
(141, '634', 'SABANAGRANDE', 2),
(142, '638', 'SABANALARGA', 2),
(143, '675', 'SANTA LUCIA', 2),
(144, '685', 'SANTO TOMAS', 2),
(145, '758', 'SOLEDAD', 2),
(146, '770', 'SUAN', 2),
(147, '832', 'TUBARA', 2),
(148, '849', 'USIACURI', 2),
(149, '1', 'BOGOTA, D.C.', 3),
(150, '1', 'CARTAGENA', 4),
(151, '6', 'ACHI', 4),
(152, '30', 'ALTOS DEL ROSARIO', 4),
(153, '42', 'ARENAL', 4),
(154, '52', 'ARJONA', 4),
(155, '62', 'ARROYOHONDO', 4),
(156, '74', 'BARRANCO DE LOBA', 4),
(157, '140', 'CALAMAR', 4),
(158, '160', 'CANTAGALLO', 4),
(159, '188', 'CICUCO', 4),
(160, '212', 'CORDOBA', 4),
(161, '222', 'CLEMENCIA', 4),
(162, '244', 'EL CARMEN DE BOLIVAR', 4),
(163, '248', 'EL GUAMO', 4),
(164, '268', 'EL PE', 4),
(165, '300', 'HATILLO DE LOBA', 4),
(166, '430', 'MAGANGUE', 4),
(167, '433', 'MAHATES', 4),
(168, '440', 'MARGARITA', 4),
(169, '442', 'MARIA LA BAJA', 4),
(170, '458', 'MONTECRISTO', 4),
(171, '468', 'MOMPOS', 4),
(172, '490', 'NOROSI', 4),
(173, '473', 'MORALES', 4),
(174, '549', 'PINILLOS', 4),
(175, '580', 'REGIDOR', 4),
(176, '600', 'RIO VIEJO', 4),
(177, '620', 'SAN CRISTOBAL', 4),
(178, '647', 'SAN ESTANISLAO', 4),
(179, '650', 'SAN FERNANDO', 4),
(180, '654', 'SAN JACINTO', 4),
(181, '655', 'SAN JACINTO DEL CAUCA', 4),
(182, '657', 'SAN JUAN NEPOMUCENO', 4),
(183, '667', 'SAN MARTIN DE LOBA', 4),
(184, '670', 'SAN PABLO', 4),
(185, '673', 'SANTA CATALINA', 4),
(186, '683', 'SANTA ROSA', 4),
(187, '688', 'SANTA ROSA DEL SUR', 4),
(188, '744', 'SIMITI', 4),
(189, '760', 'SOPLAVIENTO', 4),
(190, '780', 'TALAIGUA NUEVO', 4),
(191, '810', 'TIQUISIO', 4),
(192, '836', 'TURBACO', 4),
(193, '838', 'TURBANA', 4),
(194, '873', 'VILLANUEVA', 4),
(195, '894', 'ZAMBRANO', 4),
(196, '1', 'TUNJA', 5),
(197, '22', 'ALMEIDA', 5),
(198, '47', 'AQUITANIA', 5),
(199, '51', 'ARCABUCO', 5),
(200, '87', 'BELEN', 5),
(201, '90', 'BERBEO', 5),
(202, '92', 'BETEITIVA', 5),
(203, '97', 'BOAVITA', 5),
(204, '104', 'BOYACA', 5),
(205, '106', 'BRICE', 5),
(206, '109', 'BUENAVISTA', 5),
(207, '114', 'BUSBANZA', 5),
(208, '131', 'CALDAS', 5),
(209, '135', 'CAMPOHERMOSO', 5),
(210, '162', 'CERINZA', 5),
(211, '172', 'CHINAVITA', 5),
(212, '176', 'CHIQUINQUIRA', 5),
(213, '180', 'CHISCAS', 5),
(214, '183', 'CHITA', 5),
(215, '185', 'CHITARAQUE', 5),
(216, '187', 'CHIVATA', 5),
(217, '189', 'CIENEGA', 5),
(218, '204', 'COMBITA', 5),
(219, '212', 'COPER', 5),
(220, '215', 'CORRALES', 5),
(221, '218', 'COVARACHIA', 5),
(222, '223', 'CUBARA', 5),
(223, '224', 'CUCAITA', 5),
(224, '226', 'CUITIVA', 5),
(225, '232', 'CHIQUIZA', 5),
(226, '236', 'CHIVOR', 5),
(227, '238', 'DUITAMA', 5),
(228, '244', 'EL COCUY', 5),
(229, '248', 'EL ESPINO', 5),
(230, '272', 'FIRAVITOBA', 5),
(231, '276', 'FLORESTA', 5),
(232, '293', 'GACHANTIVA', 5),
(233, '296', 'GAMEZA', 5),
(234, '299', 'GARAGOA', 5),
(235, '317', 'GUACAMAYAS', 5),
(236, '322', 'GUATEQUE', 5),
(237, '325', 'GUAYATA', 5),
(238, '332', 'GsICAN', 5),
(239, '362', 'IZA', 5),
(240, '367', 'JENESANO', 5),
(241, '368', 'JERICO', 5),
(242, '377', 'LABRANZAGRANDE', 5),
(243, '380', 'LA CAPILLA', 5),
(244, '401', 'LA VICTORIA', 5),
(245, '403', 'LA UVITA', 5),
(246, '407', 'VILLA DE LEYVA', 5),
(247, '425', 'MACANAL', 5),
(248, '442', 'MARIPI', 5),
(249, '455', 'MIRAFLORES', 5),
(250, '464', 'MONGUA', 5),
(251, '466', 'MONGUI', 5),
(252, '469', 'MONIQUIRA', 5),
(253, '476', 'MOTAVITA', 5),
(254, '480', 'MUZO', 5),
(255, '491', 'NOBSA', 5),
(256, '494', 'NUEVO COLON', 5),
(257, '500', 'OICATA', 5),
(258, '507', 'OTANCHE', 5),
(259, '511', 'PACHAVITA', 5),
(260, '514', 'PAEZ', 5),
(261, '516', 'PAIPA', 5),
(262, '518', 'PAJARITO', 5),
(263, '522', 'PANQUEBA', 5),
(264, '531', 'PAUNA', 5),
(265, '533', 'PAYA', 5),
(266, '537', 'PAZ DE RIO', 5),
(267, '542', 'PESCA', 5),
(268, '550', 'PISBA', 5),
(269, '572', 'PUERTO BOYACA', 5),
(270, '580', 'QUIPAMA', 5),
(271, '599', 'RAMIRIQUI', 5),
(272, '600', 'RAQUIRA', 5),
(273, '621', 'RONDON', 5),
(274, '632', 'SABOYA', 5),
(275, '638', 'SACHICA', 5),
(276, '646', 'SAMACA', 5),
(277, '660', 'SAN EDUARDO', 5),
(278, '664', 'SAN JOSE DE PARE', 5),
(279, '667', 'SAN LUIS DE GACENO', 5),
(280, '673', 'SAN MATEO', 5),
(281, '676', 'SAN MIGUEL DE SEMA', 5),
(282, '681', 'SAN PABLO DE BORBUR', 5),
(283, '686', 'SANTANA', 5),
(284, '690', 'SANTA MARIA', 5),
(285, '693', 'SANTA ROSA DE VITERBO', 5),
(286, '696', 'SANTA SOFIA', 5),
(287, '720', 'SATIVANORTE', 5),
(288, '723', 'SATIVASUR', 5),
(289, '740', 'SIACHOQUE', 5),
(290, '753', 'SOATA', 5),
(291, '755', 'SOCOTA', 5),
(292, '757', 'SOCHA', 5),
(293, '759', 'SOGAMOSO', 5),
(294, '761', 'SOMONDOCO', 5),
(295, '762', 'SORA', 5),
(296, '763', 'SOTAQUIRA', 5),
(297, '764', 'SORACA', 5),
(298, '774', 'SUSACON', 5),
(299, '776', 'SUTAMARCHAN', 5),
(300, '778', 'SUTATENZA', 5),
(301, '790', 'TASCO', 5),
(302, '798', 'TENZA', 5),
(303, '804', 'TIBANA', 5),
(304, '806', 'TIBASOSA', 5),
(305, '808', 'TINJACA', 5),
(306, '810', 'TIPACOQUE', 5),
(307, '814', 'TOCA', 5),
(308, '816', 'TOGsI', 5),
(309, '820', 'TOPAGA', 5),
(310, '822', 'TOTA', 5),
(311, '832', 'TUNUNGUA', 5),
(312, '835', 'TURMEQUE', 5),
(313, '837', 'TUTA', 5),
(314, '839', 'TUTAZA', 5),
(315, '842', 'UMBITA', 5),
(316, '861', 'VENTAQUEMADA', 5),
(317, '879', 'VIRACACHA', 5),
(318, '897', 'ZETAQUIRA', 5),
(319, '1', 'MANIZALES', 6),
(320, '13', 'AGUADAS', 6),
(321, '42', 'ANSERMA', 6),
(322, '50', 'ARANZAZU', 6),
(323, '88', 'BELALCAZAR', 6),
(324, '174', 'CHINCHINA', 6),
(325, '272', 'FILADELFIA', 6),
(326, '380', 'LA DORADA', 6),
(327, '388', 'LA MERCED', 6),
(328, '433', 'MANZANARES', 6),
(329, '442', 'MARMATO', 6),
(330, '444', 'MARQUETALIA', 6),
(331, '446', 'MARULANDA', 6),
(332, '486', 'NEIRA', 6),
(333, '495', 'NORCASIA', 6),
(334, '513', 'PACORA', 6),
(335, '524', 'PALESTINA', 6),
(336, '541', 'PENSILVANIA', 6),
(337, '614', 'RIOSUCIO', 6),
(338, '616', 'RISARALDA', 6),
(339, '653', 'SALAMINA', 6),
(340, '662', 'SAMANA', 6),
(341, '665', 'SAN JOSE', 6),
(342, '777', 'SUPIA', 6),
(343, '867', 'VICTORIA', 6),
(344, '873', 'VILLAMARIA', 6),
(345, '877', 'VITERBO', 6),
(346, '1', 'FLORENCIA', 7),
(347, '29', 'ALBANIA', 7),
(348, '94', 'BELEN DE LOS ANDAQUIES', 7),
(349, '150', 'CARTAGENA DEL CHAIRA', 7),
(350, '205', 'CURILLO', 7),
(351, '247', 'EL DONCELLO', 7),
(352, '256', 'EL PAUJIL', 7),
(353, '410', 'LA MONTA', 7),
(354, '460', 'MILAN', 7),
(355, '479', 'MORELIA', 7),
(356, '592', 'PUERTO RICO', 7),
(357, '610', 'SAN JOSE DEL FRAGUA', 7),
(358, '753', 'SAN VICENTE DEL CAGUAN', 7),
(359, '756', 'SOLANO', 7),
(360, '785', 'SOLITA', 7),
(361, '860', 'VALPARAISO', 7),
(362, '1', 'POPAYAN', 7),
(363, '22', 'ALMAGUER', 7),
(364, '50', 'ARGELIA', 7),
(365, '75', 'BALBOA', 7),
(366, '100', 'BOLIVAR', 7),
(367, '110', 'BUENOS AIRES', 7),
(368, '130', 'CAJIBIO', 7),
(369, '137', 'CALDONO', 7),
(370, '142', 'CALOTO', 7),
(371, '212', 'CORINTO', 7),
(372, '256', 'EL TAMBO', 7),
(373, '290', 'FLORENCIA', 7),
(374, '300', 'GUACHENE', 7),
(375, '318', 'GUAPI', 7),
(376, '355', 'INZA', 7),
(377, '364', 'JAMBALO', 7),
(378, '392', 'LA SIERRA', 7),
(379, '397', 'LA VEGA', 7),
(380, '418', 'LOPEZ', 7),
(381, '450', 'MERCADERES', 7),
(382, '455', 'MIRANDA', 7),
(383, '473', 'MORALES', 7),
(384, '513', 'PADILLA', 7),
(385, '517', 'PAEZ', 7),
(386, '532', 'PATIA', 7),
(387, '533', 'PIAMONTE', 7),
(388, '548', 'PIENDAMO', 7),
(389, '573', 'PUERTO TEJADA', 7),
(390, '585', 'PURACE', 7),
(391, '622', 'ROSAS', 7),
(392, '693', 'SAN SEBASTIAN', 7),
(393, '698', 'SANTANDER DE QUILICHAO', 7),
(394, '701', 'SANTA ROSA', 7),
(395, '743', 'SILVIA', 7),
(396, '760', 'SOTARA', 7),
(397, '780', 'SUAREZ', 7),
(398, '785', 'SUCRE', 7),
(399, '807', 'TIMBIO', 7),
(400, '809', 'TIMBIQUI', 7),
(401, '821', 'TORIBIO', 7),
(402, '824', 'TOTORO', 7),
(403, '845', 'VILLA RICA', 7),
(404, '1', 'VALLEDUPAR', 8),
(405, '11', 'AGUACHICA', 8),
(406, '13', 'AGUSTIN CODAZZI', 8),
(407, '32', 'ASTREA', 8),
(408, '45', 'BECERRIL', 8),
(409, '60', 'BOSCONIA', 8),
(410, '175', 'CHIMICHAGUA', 8),
(411, '178', 'CHIRIGUANA', 8),
(412, '228', 'CURUMANI', 8),
(413, '238', 'EL COPEY', 8),
(414, '250', 'EL PASO', 8),
(415, '295', 'GAMARRA', 8),
(416, '310', 'GONZALEZ', 8),
(417, '383', 'LA GLORIA', 8),
(418, '400', 'LA JAGUA DE IBIRICO', 8),
(419, '443', 'MANAURE', 8),
(420, '517', 'PAILITAS', 8),
(421, '550', 'PELAYA', 8),
(422, '570', 'PUEBLO BELLO', 8),
(423, '614', 'RIO DE ORO', 8),
(424, '621', 'LA PAZ', 8),
(425, '710', 'SAN ALBERTO', 8),
(426, '750', 'SAN DIEGO', 8),
(427, '770', 'SAN MARTIN', 8),
(428, '787', 'TAMALAMEQUE', 8),
(429, '1', 'MONTERIA', 9),
(430, '68', 'AYAPEL', 9),
(431, '79', 'BUENAVISTA', 9),
(432, '90', 'CANALETE', 9),
(433, '162', 'CERETE', 9),
(434, '168', 'CHIMA', 9),
(435, '182', 'CHINU', 9),
(436, '189', 'CIENAGA DE ORO', 9),
(437, '300', 'COTORRA', 9),
(438, '350', 'LA APARTADA', 9),
(439, '417', 'LORICA', 9),
(440, '419', 'LOS CORDOBAS', 9),
(441, '464', 'MOMIL', 9),
(442, '466', 'MONTELIBANO', 9),
(443, '500', 'MO', 9),
(444, '555', 'PLANETA RICA', 9),
(445, '570', 'PUEBLO NUEVO', 9),
(446, '574', 'PUERTO ESCONDIDO', 9),
(447, '580', 'PUERTO LIBERTADOR', 9),
(448, '586', 'PURISIMA', 9),
(449, '660', 'SAHAGUN', 9),
(450, '670', 'SAN ANDRES SOTAVENTO', 9),
(451, '672', 'SAN ANTERO', 9),
(452, '675', 'SAN BERNARDO DEL VIENTO', 9),
(453, '678', 'SAN CARLOS', 9),
(454, '686', 'SAN PELAYO', 9),
(455, '807', 'TIERRALTA', 9),
(456, '855', 'VALENCIA', 9),
(457, '1', 'AGUA DE DIOS', 10),
(458, '19', 'ALBAN', 10),
(459, '35', 'ANAPOIMA', 10),
(460, '40', 'ANOLAIMA', 10),
(461, '53', 'ARBELAEZ', 10),
(462, '86', 'BELTRAN', 10),
(463, '95', 'BITUIMA', 10),
(464, '99', 'BOJACA', 10),
(465, '120', 'CABRERA', 10),
(466, '123', 'CACHIPAY', 10),
(467, '126', 'CAJICA', 10),
(468, '148', 'CAPARRAPI', 10),
(469, '151', 'CAQUEZA', 10),
(470, '154', 'CARMEN DE CARUPA', 10),
(471, '168', 'CHAGUANI', 10),
(472, '175', 'CHIA', 10),
(473, '178', 'CHIPAQUE', 10),
(474, '181', 'CHOACHI', 10),
(475, '183', 'CHOCONTA', 10),
(476, '200', 'COGUA', 10),
(477, '214', 'COTA', 10),
(478, '224', 'CUCUNUBA', 10),
(479, '245', 'EL COLEGIO', 10),
(480, '258', 'EL PE', 10),
(481, '260', 'EL ROSAL', 10),
(482, '269', 'FACATATIVA', 10),
(483, '279', 'FOMEQUE', 10),
(484, '281', 'FOSCA', 10),
(485, '286', 'FUNZA', 10),
(486, '288', 'FUQUENE', 10),
(487, '290', 'FUSAGASUGA', 10),
(488, '293', 'GACHALA', 10),
(489, '295', 'GACHANCIPA', 10),
(490, '297', 'GACHETA', 10),
(491, '299', 'GAMA', 10),
(492, '307', 'GIRARDOT', 10),
(493, '312', 'GRANADA', 10),
(494, '317', 'GUACHETA', 10),
(495, '320', 'GUADUAS', 10),
(496, '322', 'GUASCA', 10),
(497, '324', 'GUATAQUI', 10),
(498, '326', 'GUATAVITA', 10),
(499, '328', 'GUAYABAL DE SIQUIMA', 10),
(500, '335', 'GUAYABETAL', 10),
(501, '339', 'GUTIERREZ', 10),
(502, '368', 'JERUSALEN', 10),
(503, '372', 'JUNIN', 10),
(504, '377', 'LA CALERA', 10),
(505, '386', 'LA MESA', 10),
(506, '394', 'LA PALMA', 10),
(507, '398', 'LA PE', 10),
(508, '402', 'LA VEGA', 10),
(509, '407', 'LENGUAZAQUE', 10),
(510, '426', 'MACHETA', 10),
(511, '430', 'MADRID', 10),
(512, '436', 'MANTA', 10),
(513, '438', 'MEDINA', 10),
(514, '473', 'MOSQUERA', 10),
(515, '483', 'NARI', 10),
(516, '486', 'NEMOCON', 10),
(517, '488', 'NILO', 10),
(518, '489', 'NIMAIMA', 10),
(519, '491', 'NOCAIMA', 10),
(520, '506', 'VENECIA', 10),
(521, '513', 'PACHO', 10),
(522, '518', 'PAIME', 10),
(523, '524', 'PANDI', 10),
(524, '530', 'PARATEBUENO', 10),
(525, '535', 'PASCA', 10),
(526, '572', 'PUERTO SALGAR', 10),
(527, '580', 'PULI', 10),
(528, '592', 'QUEBRADANEGRA', 10),
(529, '594', 'QUETAME', 10),
(530, '596', 'QUIPILE', 10),
(531, '599', 'APULO', 10),
(532, '612', 'RICAURTE', 10),
(533, '645', 'SAN ANTONIO DEL TEQUENDAMA', 10),
(534, '649', 'SAN BERNARDO', 10),
(535, '653', 'SAN CAYETANO', 10),
(536, '658', 'SAN FRANCISCO', 10),
(537, '662', 'SAN JUAN DE RIO SECO', 10),
(538, '718', 'SASAIMA', 10),
(539, '736', 'SESQUILE', 10),
(540, '740', 'SIBATE', 10),
(541, '743', 'SILVANIA', 10),
(542, '745', 'SIMIJACA', 10),
(543, '754', 'SOACHA', 10),
(544, '758', 'SOPO', 10),
(545, '769', 'SUBACHOQUE', 10),
(546, '772', 'SUESCA', 10),
(547, '777', 'SUPATA', 10),
(548, '779', 'SUSA', 10),
(549, '781', 'SUTATAUSA', 10),
(550, '785', 'TABIO', 10),
(551, '793', 'TAUSA', 10),
(552, '797', 'TENA', 10),
(553, '799', 'TENJO', 10),
(554, '805', 'TIBACUY', 10),
(555, '807', 'TIBIRITA', 10),
(556, '815', 'TOCAIMA', 10),
(557, '817', 'TOCANCIPA', 10),
(558, '823', 'TOPAIPI', 10),
(559, '839', 'UBALA', 10),
(560, '841', 'UBAQUE', 10),
(561, '843', 'VILLA DE SAN DIEGO DE UBATE', 10),
(562, '845', 'UNE', 10),
(563, '851', 'UTICA', 10),
(564, '862', 'VERGARA', 10),
(565, '867', 'VIANI', 10),
(566, '871', 'VILLAGOMEZ', 10),
(567, '873', 'VILLAPINZON', 10),
(568, '875', 'VILLETA', 10),
(569, '878', 'VIOTA', 10),
(570, '885', 'YACOPI', 10),
(571, '898', 'ZIPACON', 10),
(572, '899', 'ZIPAQUIRA', 10),
(573, '1', 'QUIBDO', 11),
(574, '6', 'ACANDI', 11),
(575, '25', 'ALTO BAUDO', 11),
(576, '50', 'ATRATO', 11),
(577, '73', 'BAGADO', 11),
(578, '75', 'BAHIA SOLANO', 11),
(579, '77', 'BAJO BAUDO', 11),
(580, '99', 'BOJAYA', 11),
(581, '135', 'EL CANTON DEL SAN PABLO', 11),
(582, '150', 'CARMEN DEL DARIEN', 11),
(583, '160', 'CERTEGUI', 11),
(584, '205', 'CONDOTO', 11),
(585, '245', 'EL CARMEN DE ATRATO', 11),
(586, '250', 'EL LITORAL DEL SAN JUAN', 11),
(587, '361', 'ISTMINA', 11),
(588, '372', 'JURADO', 11),
(589, '413', 'LLORO', 11),
(590, '425', 'MEDIO ATRATO', 11),
(591, '430', 'MEDIO BAUDO', 11),
(592, '450', 'MEDIO SAN JUAN', 11),
(593, '491', 'NOVITA', 11),
(594, '495', 'NUQUI', 11),
(595, '580', 'RIO IRO', 11),
(596, '600', 'RIO QUITO', 11),
(597, '615', 'RIOSUCIO', 11),
(598, '660', 'SAN JOSE DEL PALMAR', 11),
(599, '745', 'SIPI', 11),
(600, '787', 'TADO', 11),
(601, '800', 'UNGUIA', 11),
(602, '810', 'UNION PANAMERICANA', 11),
(603, '1', 'NEIVA', 12),
(604, '6', 'ACEVEDO', 12),
(605, '13', 'AGRADO', 12),
(606, '16', 'AIPE', 12),
(607, '20', 'ALGECIRAS', 12),
(608, '26', 'ALTAMIRA', 12),
(609, '78', 'BARAYA', 12),
(610, '132', 'CAMPOALEGRE', 12),
(611, '206', 'COLOMBIA', 12),
(612, '244', 'ELIAS', 12),
(613, '298', 'GARZON', 12),
(614, '306', 'GIGANTE', 12),
(615, '319', 'GUADALUPE', 12),
(616, '349', 'HOBO', 12),
(617, '357', 'IQUIRA', 12),
(618, '359', 'ISNOS', 12),
(619, '378', 'LA ARGENTINA', 12),
(620, '396', 'LA PLATA', 12),
(621, '483', 'NATAGA', 12),
(622, '503', 'OPORAPA', 12),
(623, '518', 'PAICOL', 12),
(624, '524', 'PALERMO', 12),
(625, '530', 'PALESTINA', 12),
(626, '548', 'PITAL', 12),
(627, '551', 'PITALITO', 12),
(628, '615', 'RIVERA', 12),
(629, '660', 'SALADOBLANCO', 12),
(630, '668', 'SAN AGUSTIN', 12),
(631, '676', 'SANTA MARIA', 12),
(632, '770', 'SUAZA', 12),
(633, '791', 'TARQUI', 12),
(634, '797', 'TESALIA', 12),
(635, '799', 'TELLO', 12),
(636, '801', 'TERUEL', 12),
(637, '807', 'TIMANA', 12),
(638, '872', 'VILLAVIEJA', 12),
(639, '885', 'YAGUARA', 12),
(640, '1', 'RIOHACHA', 13),
(641, '35', 'ALBANIA', 13),
(642, '78', 'BARRANCAS', 13),
(643, '90', 'DIBULLA', 13),
(644, '98', 'DISTRACCION', 13),
(645, '110', 'EL MOLINO', 13),
(646, '279', 'FONSECA', 13),
(647, '378', 'HATONUEVO', 13),
(648, '420', 'LA JAGUA DEL PILAR', 13),
(649, '430', 'MAICAO', 13),
(650, '560', 'MANAURE', 13),
(651, '650', 'SAN JUAN DEL CESAR', 13),
(652, '847', 'URIBIA', 13),
(653, '855', 'URUMITA', 13),
(654, '874', 'VILLANUEVA', 13),
(655, '1', 'SANTA MARTA', 14),
(656, '30', 'ALGARROBO', 14),
(657, '53', 'ARACATACA', 14),
(658, '58', 'ARIGUANI', 14),
(659, '161', 'CERRO SAN ANTONIO', 14),
(660, '170', 'CHIBOLO', 14),
(661, '189', 'CIENAGA', 14),
(662, '205', 'CONCORDIA', 14),
(663, '245', 'EL BANCO', 14),
(664, '258', 'EL PI', 14),
(665, '268', 'EL RETEN', 14),
(666, '288', 'FUNDACION', 14),
(667, '318', 'GUAMAL', 14),
(668, '460', 'NUEVA GRANADA', 14),
(669, '541', 'PEDRAZA', 14),
(670, '545', 'PIJI', 14),
(671, '551', 'PIVIJAY', 14),
(672, '555', 'PLATO', 14),
(673, '570', 'PUEBLOVIEJO', 14),
(674, '605', 'REMOLINO', 14),
(675, '660', 'SABANAS DE SAN ANGEL', 14),
(676, '675', 'SALAMINA', 14),
(677, '692', 'SAN SEBASTIAN DE BUENAVISTA', 14),
(678, '703', 'SAN ZENON', 14),
(679, '707', 'SANTA ANA', 14),
(680, '720', 'SANTA BARBARA DE PINTO', 14),
(681, '745', 'SITIONUEVO', 14),
(682, '798', 'TENERIFE', 14),
(683, '960', 'ZAPAYAN', 14),
(684, '980', 'ZONA BANANERA', 14),
(685, '1', 'VILLAVICENCIO', 15),
(686, '6', 'ACACIAS', 15),
(687, '110', 'BARRANCA DE UPIA', 15),
(688, '124', 'CABUYARO', 15),
(689, '150', 'CASTILLA LA NUEVA', 15),
(690, '223', 'CUBARRAL', 15),
(691, '226', 'CUMARAL', 15),
(692, '245', 'EL CALVARIO', 15),
(693, '251', 'EL CASTILLO', 15),
(694, '270', 'EL DORADO', 15),
(695, '287', 'FUENTE DE ORO', 15),
(696, '313', 'GRANADA', 15),
(697, '318', 'GUAMAL', 15),
(698, '325', 'MAPIRIPAN', 15),
(699, '330', 'MESETAS', 15),
(700, '350', 'LA MACARENA', 15),
(701, '370', 'URIBE', 15),
(702, '400', 'LEJANIAS', 15),
(703, '450', 'PUERTO CONCORDIA', 15),
(704, '568', 'PUERTO GAITAN', 15),
(705, '573', 'PUERTO LOPEZ', 15),
(706, '577', 'PUERTO LLERAS', 15),
(707, '590', 'PUERTO RICO', 15),
(708, '606', 'RESTREPO', 15),
(709, '680', 'SAN CARLOS DE GUAROA', 15),
(710, '683', 'SAN JUAN DE ARAMA', 15),
(711, '686', 'SAN JUANITO', 15),
(712, '689', 'SAN MARTIN', 15),
(713, '711', 'VISTAHERMOSA', 15),
(714, '1', 'PASTO', 16),
(715, '19', 'ALBAN', 16),
(716, '22', 'ALDANA', 16),
(717, '36', 'ANCUYA', 16),
(718, '51', 'ARBOLEDA', 16),
(719, '79', 'BARBACOAS', 16),
(720, '83', 'BELEN', 16),
(721, '110', 'BUESACO', 16),
(722, '203', 'COLON', 16),
(723, '207', 'CONSACA', 16),
(724, '210', 'CONTADERO', 16),
(725, '215', 'CORDOBA', 16),
(726, '224', 'CUASPUD', 16),
(727, '227', 'CUMBAL', 16),
(728, '233', 'CUMBITARA', 16),
(729, '240', 'CHACHAGsI', 16),
(730, '250', 'EL CHARCO', 16),
(731, '254', 'EL PE', 16),
(732, '256', 'EL ROSARIO', 16),
(733, '258', 'EL TABLON DE GOMEZ', 16),
(734, '260', 'EL TAMBO', 16),
(735, '287', 'FUNES', 16),
(736, '317', 'GUACHUCAL', 16),
(737, '320', 'GUAITARILLA', 16),
(738, '323', 'GUALMATAN', 16),
(739, '352', 'ILES', 16),
(740, '354', 'IMUES', 16),
(741, '356', 'IPIALES', 16),
(742, '378', 'LA CRUZ', 16),
(743, '381', 'LA FLORIDA', 16),
(744, '385', 'LA LLANADA', 16),
(745, '390', 'LA TOLA', 16),
(746, '399', 'LA UNION', 16),
(747, '405', 'LEIVA', 16),
(748, '411', 'LINARES', 16),
(749, '418', 'LOS ANDES', 16),
(750, '427', 'MAGsI', 16),
(751, '435', 'MALLAMA', 16),
(752, '473', 'MOSQUERA', 16),
(753, '480', 'NARI', 16),
(754, '490', 'OLAYA HERRERA', 16),
(755, '506', 'OSPINA', 16),
(756, '520', 'FRANCISCO PIZARRO', 16),
(757, '540', 'POLICARPA', 16),
(758, '560', 'POTOSI', 16),
(759, '565', 'PROVIDENCIA', 16),
(760, '573', 'PUERRES', 16),
(761, '585', 'PUPIALES', 16),
(762, '612', 'RICAURTE', 16),
(763, '621', 'ROBERTO PAYAN', 16),
(764, '678', 'SAMANIEGO', 16),
(765, '683', 'SANDONA', 16),
(766, '685', 'SAN BERNARDO', 16),
(767, '687', 'SAN LORENZO', 16),
(768, '693', 'SAN PABLO', 16),
(769, '694', 'SAN PEDRO DE CARTAGO', 16),
(770, '696', 'SANTA BARBARA', 16),
(771, '699', 'SANTACRUZ', 16),
(772, '720', 'SAPUYES', 16),
(773, '786', 'TAMINANGO', 16),
(774, '788', 'TANGUA', 16),
(775, '835', 'SAN ANDRES DE TUMACO', 16),
(776, '838', 'TUQUERRES', 16),
(777, '885', 'YACUANQUER', 16),
(778, '1', 'CUCUTA', 17),
(779, '3', 'ABREGO', 17),
(780, '51', 'ARBOLEDAS', 17),
(781, '99', 'BOCHALEMA', 17),
(782, '109', 'BUCARASICA', 17),
(783, '125', 'CACOTA', 17),
(784, '128', 'CACHIRA', 17),
(785, '172', 'CHINACOTA', 17),
(786, '174', 'CHITAGA', 17),
(787, '206', 'CONVENCION', 17),
(788, '223', 'CUCUTILLA', 17),
(789, '239', 'DURANIA', 17),
(790, '245', 'EL CARMEN', 17),
(791, '250', 'EL TARRA', 17),
(792, '261', 'EL ZULIA', 17),
(793, '313', 'GRAMALOTE', 17),
(794, '344', 'HACARI', 17),
(795, '347', 'HERRAN', 17),
(796, '377', 'LABATECA', 17),
(797, '385', 'LA ESPERANZA', 17),
(798, '398', 'LA PLAYA', 17),
(799, '405', 'LOS PATIOS', 17),
(800, '418', 'LOURDES', 17),
(801, '480', 'MUTISCUA', 17),
(802, '498', 'OCA', 17),
(803, '518', 'PAMPLONA', 17),
(804, '520', 'PAMPLONITA', 17),
(805, '553', 'PUERTO SANTANDER', 17),
(806, '599', 'RAGONVALIA', 17),
(807, '660', 'SALAZAR', 17),
(808, '670', 'SAN CALIXTO', 17),
(809, '673', 'SAN CAYETANO', 17),
(810, '680', 'SANTIAGO', 17),
(811, '720', 'SARDINATA', 17),
(812, '743', 'SILOS', 17),
(813, '800', 'TEORAMA', 17),
(814, '810', 'TIBU', 17),
(815, '820', 'TOLEDO', 17),
(816, '871', 'VILLA CARO', 17),
(817, '874', 'VILLA DEL ROSARIO', 17),
(818, '1', 'ARMENIA', 18),
(819, '111', 'BUENAVISTA', 18),
(820, '130', 'CALARCA', 18),
(821, '190', 'CIRCASIA', 18),
(822, '212', 'CORDOBA', 18),
(823, '272', 'FILANDIA', 18),
(824, '302', 'GENOVA', 18),
(825, '401', 'LA TEBAIDA', 18),
(826, '470', 'MONTENEGRO', 18),
(827, '548', 'PIJAO', 18),
(828, '594', 'QUIMBAYA', 18),
(829, '690', 'SALENTO', 18),
(830, '1', 'PEREIRA', 19),
(831, '45', 'APIA', 19),
(832, '75', 'BALBOA', 19),
(833, '88', 'BELEN DE UMBRIA', 19),
(834, '170', 'DOSQUEBRADAS', 19),
(835, '318', 'GUATICA', 19),
(836, '383', 'LA CELIA', 19),
(837, '400', 'LA VIRGINIA', 19),
(838, '440', 'MARSELLA', 19),
(839, '456', 'MISTRATO', 19),
(840, '572', 'PUEBLO RICO', 19),
(841, '594', 'QUINCHIA', 19),
(842, '682', 'SANTA ROSA DE CABAL', 19),
(843, '687', 'SANTUARIO', 19),
(844, '1', 'BUCARAMANGA', 20),
(845, '13', 'AGUADA', 20),
(846, '20', 'ALBANIA', 20),
(847, '51', 'ARATOCA', 20),
(848, '77', 'BARBOSA', 20),
(849, '79', 'BARICHARA', 20),
(850, '81', 'BARRANCABERMEJA', 20),
(851, '92', 'BETULIA', 20),
(852, '101', 'BOLIVAR', 20),
(853, '121', 'CABRERA', 20),
(854, '132', 'CALIFORNIA', 20),
(855, '147', 'CAPITANEJO', 20),
(856, '152', 'CARCASI', 20),
(857, '160', 'CEPITA', 20),
(858, '162', 'CERRITO', 20),
(859, '167', 'CHARALA', 20),
(860, '169', 'CHARTA', 20),
(861, '176', 'CHIMA', 20),
(862, '179', 'CHIPATA', 20),
(863, '190', 'CIMITARRA', 20),
(864, '207', 'CONCEPCION', 20),
(865, '209', 'CONFINES', 20),
(866, '211', 'CONTRATACION', 20),
(867, '217', 'COROMORO', 20),
(868, '229', 'CURITI', 20),
(869, '235', 'EL CARMEN DE CHUCURI', 20),
(870, '245', 'EL GUACAMAYO', 20),
(871, '250', 'EL PE', 20),
(872, '255', 'EL PLAYON', 20),
(873, '264', 'ENCINO', 20),
(874, '266', 'ENCISO', 20),
(875, '271', 'FLORIAN', 20),
(876, '276', 'FLORIDABLANCA', 20),
(877, '296', 'GALAN', 20),
(878, '298', 'GAMBITA', 20),
(879, '307', 'GIRON', 20),
(880, '318', 'GUACA', 20),
(881, '320', 'GUADALUPE', 20),
(882, '322', 'GUAPOTA', 20),
(883, '324', 'GUAVATA', 20),
(884, '327', 'GsEPSA', 20),
(885, '344', 'HATO', 20),
(886, '368', 'JESUS MARIA', 20),
(887, '370', 'JORDAN', 20),
(888, '377', 'LA BELLEZA', 20),
(889, '385', 'LANDAZURI', 20),
(890, '397', 'LA PAZ', 20),
(891, '406', 'LEBRIJA', 20),
(892, '418', 'LOS SANTOS', 20),
(893, '425', 'MACARAVITA', 20),
(894, '432', 'MALAGA', 20),
(895, '444', 'MATANZA', 20),
(896, '464', 'MOGOTES', 20),
(897, '468', 'MOLAGAVITA', 20),
(898, '498', 'OCAMONTE', 20),
(899, '500', 'OIBA', 20),
(900, '502', 'ONZAGA', 20),
(901, '522', 'PALMAR', 20),
(902, '524', 'PALMAS DEL SOCORRO', 20),
(903, '533', 'PARAMO', 20),
(904, '547', 'PIEDECUESTA', 20),
(905, '549', 'PINCHOTE', 20),
(906, '572', 'PUENTE NACIONAL', 20),
(907, '573', 'PUERTO PARRA', 20),
(908, '575', 'PUERTO WILCHES', 20),
(909, '615', 'RIONEGRO', 20),
(910, '655', 'SABANA DE TORRES', 20),
(911, '669', 'SAN ANDRES', 20),
(912, '673', 'SAN BENITO', 20),
(913, '679', 'SAN GIL', 20),
(914, '682', 'SAN JOAQUIN', 20),
(915, '684', 'SAN JOSE DE MIRANDA', 20),
(916, '686', 'SAN MIGUEL', 20),
(917, '689', 'SAN VICENTE DE CHUCURI', 20),
(918, '705', 'SANTA BARBARA', 20),
(919, '720', 'SANTA HELENA DEL OPON', 20),
(920, '745', 'SIMACOTA', 20),
(921, '755', 'SOCORRO', 20),
(922, '770', 'SUAITA', 20),
(923, '773', 'SUCRE', 20),
(924, '780', 'SURATA', 20),
(925, '820', 'TONA', 20),
(926, '855', 'VALLE DE SAN JOSE', 20),
(927, '861', 'VELEZ', 20),
(928, '867', 'VETAS', 20),
(929, '872', 'VILLANUEVA', 20),
(930, '895', 'ZAPATOCA', 20),
(931, '1', 'SINCELEJO', 21),
(932, '110', 'BUENAVISTA', 21),
(933, '124', 'CAIMITO', 21),
(934, '204', 'COLOSO', 21),
(935, '215', 'COROZAL', 21),
(936, '221', 'COVE', 21),
(937, '230', 'CHALAN', 21),
(938, '233', 'EL ROBLE', 21),
(939, '235', 'GALERAS', 21),
(940, '265', 'GUARANDA', 21),
(941, '400', 'LA UNION', 21),
(942, '418', 'LOS PALMITOS', 21),
(943, '429', 'MAJAGUAL', 21),
(944, '473', 'MORROA', 21),
(945, '508', 'OVEJAS', 21),
(946, '523', 'PALMITO', 21),
(947, '670', 'SAMPUES', 21),
(948, '678', 'SAN BENITO ABAD', 21),
(949, '702', 'SAN JUAN DE BETULIA', 21),
(950, '708', 'SAN MARCOS', 21),
(951, '713', 'SAN ONOFRE', 21),
(952, '717', 'SAN PEDRO', 21),
(953, '742', 'SAN LUIS DE SINCE', 21),
(954, '771', 'SUCRE', 21),
(955, '820', 'SANTIAGO DE TOLU', 21),
(956, '823', 'TOLU VIEJO', 21),
(957, '1', 'IBAGUE', 22),
(958, '24', 'ALPUJARRA', 22),
(959, '26', 'ALVARADO', 22),
(960, '30', 'AMBALEMA', 22),
(961, '43', 'ANZOATEGUI', 22),
(962, '55', 'ARMERO', 22),
(963, '67', 'ATACO', 22),
(964, '124', 'CAJAMARCA', 22),
(965, '148', 'CARMEN DE APICALA', 22),
(966, '152', 'CASABIANCA', 22),
(967, '168', 'CHAPARRAL', 22),
(968, '200', 'COELLO', 22),
(969, '217', 'COYAIMA', 22),
(970, '226', 'CUNDAY', 22),
(971, '236', 'DOLORES', 22),
(972, '268', 'ESPINAL', 22),
(973, '270', 'FALAN', 22),
(974, '275', 'FLANDES', 22),
(975, '283', 'FRESNO', 22),
(976, '319', 'GUAMO', 22),
(977, '347', 'HERVEO', 22),
(978, '349', 'HONDA', 22),
(979, '352', 'ICONONZO', 22),
(980, '408', 'LERIDA', 22),
(981, '411', 'LIBANO', 22),
(982, '443', 'MARIQUITA', 22),
(983, '449', 'MELGAR', 22),
(984, '461', 'MURILLO', 22),
(985, '483', 'NATAGAIMA', 22),
(986, '504', 'ORTEGA', 22),
(987, '520', 'PALOCABILDO', 22),
(988, '547', 'PIEDRAS', 22),
(989, '555', 'PLANADAS', 22),
(990, '563', 'PRADO', 22),
(991, '585', 'PURIFICACION', 22),
(992, '616', 'RIOBLANCO', 22),
(993, '622', 'RONCESVALLES', 22),
(994, '624', 'ROVIRA', 22),
(995, '671', 'SALDA', 22),
(996, '675', 'SAN ANTONIO', 22),
(997, '678', 'SAN LUIS', 22),
(998, '686', 'SANTA ISABEL', 22),
(999, '770', 'SUAREZ', 22),
(1000, '854', 'VALLE DE SAN JUAN', 22),
(1001, '861', 'VENADILLO', 22),
(1002, '870', 'VILLAHERMOSA', 22),
(1003, '873', 'VILLARRICA', 22),
(1004, '1', 'CALI', 23),
(1005, '20', 'ALCALA', 23),
(1006, '36', 'ANDALUCIA', 23),
(1007, '41', 'ANSERMANUEVO', 23),
(1008, '54', 'ARGELIA', 23),
(1009, '100', 'BOLIVAR', 23),
(1010, '109', 'BUENAVENTURA', 23),
(1011, '111', 'GUADALAJARA DE BUGA', 23),
(1012, '113', 'BUGALAGRANDE', 23),
(1013, '122', 'CAICEDONIA', 23),
(1014, '126', 'CALIMA', 23),
(1015, '130', 'CANDELARIA', 23),
(1016, '147', 'CARTAGO', 23),
(1017, '233', 'DAGUA', 23),
(1018, '243', 'EL AGUILA', 23),
(1019, '246', 'EL CAIRO', 23),
(1020, '248', 'EL CERRITO', 23),
(1021, '250', 'EL DOVIO', 23),
(1022, '275', 'FLORIDA', 23),
(1023, '306', 'GINEBRA', 23),
(1024, '318', 'GUACARI', 23),
(1025, '364', 'JAMUNDI', 23),
(1026, '377', 'LA CUMBRE', 23),
(1027, '400', 'LA UNION', 23),
(1028, '403', 'LA VICTORIA', 23),
(1029, '497', 'OBANDO', 23),
(1030, '520', 'PALMIRA', 23),
(1031, '563', 'PRADERA', 23),
(1032, '606', 'RESTREPO', 23),
(1033, '616', 'RIOFRIO', 23),
(1034, '622', 'ROLDANILLO', 23),
(1035, '670', 'SAN PEDRO', 23),
(1036, '736', 'SEVILLA', 23),
(1037, '823', 'TORO', 23),
(1038, '828', 'TRUJILLO', 23),
(1039, '834', 'TULUA', 23),
(1040, '845', 'ULLOA', 23),
(1041, '863', 'VERSALLES', 23),
(1042, '869', 'VIJES', 23),
(1043, '890', 'YOTOCO', 23),
(1044, '892', 'YUMBO', 23),
(1045, '895', 'ZARZAL', 23),
(1046, '1', 'ARAUCA', 24),
(1047, '65', 'ARAUQUITA', 24),
(1048, '220', 'CRAVO NORTE', 24),
(1049, '300', 'FORTUL', 24),
(1050, '591', 'PUERTO RONDON', 24),
(1051, '736', 'SARAVENA', 24),
(1052, '794', 'TAME', 24),
(1053, '1', 'YOPAL', 25),
(1054, '10', 'AGUAZUL', 25),
(1055, '15', 'CHAMEZA', 25),
(1056, '125', 'HATO COROZAL', 25),
(1057, '136', 'LA SALINA', 25),
(1058, '139', 'MANI', 25),
(1059, '162', 'MONTERREY', 25),
(1060, '225', 'NUNCHIA', 25),
(1061, '230', 'OROCUE', 25),
(1062, '250', 'PAZ DE ARIPORO', 25),
(1063, '263', 'PORE', 25),
(1064, '279', 'RECETOR', 25),
(1065, '300', 'SABANALARGA', 25),
(1066, '315', 'SACAMA', 25),
(1067, '325', 'SAN LUIS DE PALENQUE', 25),
(1068, '400', 'TAMARA', 25),
(1069, '410', 'TAURAMENA', 25),
(1070, '430', 'TRINIDAD', 25),
(1071, '440', 'VILLANUEVA', 25),
(1072, '1', 'MOCOA', 26),
(1073, '219', 'COLON', 26),
(1074, '320', 'ORITO', 26),
(1075, '568', 'PUERTO ASIS', 26),
(1076, '569', 'PUERTO CAICEDO', 26),
(1077, '571', 'PUERTO GUZMAN', 26),
(1078, '573', 'LEGUIZAMO', 26),
(1079, '749', 'SIBUNDOY', 26),
(1080, '755', 'SAN FRANCISCO', 26),
(1081, '757', 'SAN MIGUEL', 26),
(1082, '760', 'SANTIAGO', 26),
(1083, '865', 'VALLE DEL GUAMUEZ', 26),
(1084, '885', 'VILLAGARZON', 26),
(1085, '1', 'SAN ANDRES', 27),
(1086, '564', 'PROVIDENCIA', 27),
(1087, '1', 'LETICIA', 28),
(1088, '263', 'EL ENCANTO', 28),
(1089, '405', 'LA CHORRERA', 28),
(1090, '407', 'LA PEDRERA', 28),
(1091, '430', 'LA VICTORIA', 28),
(1092, '460', 'MIRITI - PARANA', 28),
(1093, '530', 'PUERTO ALEGRIA', 28),
(1094, '536', 'PUERTO ARICA', 28),
(1095, '540', 'PUERTO NARI', 28),
(1096, '669', 'PUERTO SANTANDER', 28),
(1097, '798', 'TARAPACA', 28),
(1098, '1', 'INIRIDA', 29),
(1099, '343', 'BARRANCO MINAS', 29),
(1100, '663', 'MAPIRIPANA', 29),
(1101, '883', 'SAN FELIPE', 29),
(1102, '884', 'PUERTO COLOMBIA', 29),
(1103, '885', 'LA GUADALUPE', 29),
(1104, '886', 'CACAHUAL', 29),
(1105, '887', 'PANA PANA', 29),
(1106, '888', 'MORICHAL', 29),
(1107, '1', 'SAN JOSE DEL GUAVIARE', 30),
(1108, '15', 'CALAMAR', 30),
(1109, '25', 'EL RETORNO', 30),
(1110, '200', 'MIRAFLORES', 30),
(1111, '1', 'MITU', 31),
(1112, '161', 'CARURU', 31),
(1113, '511', 'PACOA', 31),
(1114, '666', 'TARAIRA', 31),
(1115, '777', 'PAPUNAUA', 31),
(1116, '889', 'YAVARATE', 31),
(1117, '1', 'PUERTO CARRE', 32),
(1118, '524', 'LA PRIMAVERA', 32),
(1119, '624', 'SANTA ROSALIA', 32),
(1120, '773', 'CUMARIBO', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--

CREATE TABLE IF NOT EXISTS `cms_oauth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_oauth_config`
--

INSERT INTO `cms_oauth_config` (`id`, `uri`, `var`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_papel`
--

CREATE TABLE IF NOT EXISTS `cms_papel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('module','function','component') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_permissions`
--

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_pqr`
--

CREATE TABLE IF NOT EXISTS `cms_pqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto`
--

CREATE TABLE IF NOT EXISTS `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tiutlo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` double NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `disenador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_cms_categoria1` (`categoria_id`),
  KEY `fk_producto_disenador1` (`disenador_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto_imagen`
--

CREATE TABLE IF NOT EXISTS `cms_producto_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_has_cms_imagen_cms_imagen1` (`imagen_id`),
  KEY `fk_producto_has_cms_imagen_producto1` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto_venta`
--

CREATE TABLE IF NOT EXISTS `cms_producto_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_has_venta_venta1` (`venta_id`),
  KEY `fk_producto_has_venta_producto1` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--

CREATE TABLE IF NOT EXISTS `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `red_social` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_red` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_redes_sociales`
--

INSERT INTO `cms_redes_sociales` (`id`, `red_social`, `link_red`, `fecha_creacion`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', '2013-10-22 02:58:04'),
(2, 'Twitter', 'http://www.twitter.com/', '2013-10-22 02:58:07'),
(3, 'Youtube', 'http://www.youtube.com/', '2013-10-22 02:58:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_servicio`
--

CREATE TABLE IF NOT EXISTS `cms_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_primcipal` text COLLATE utf8_unicode_ci NOT NULL,
  `texto_segundario` text COLLATE utf8_unicode_ci,
  `titulo_segundario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  `imagen1_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicio_cms_imagen1` (`imagen_id`),
  KEY `fk_servicio_cms_imagen2` (`imagen1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

CREATE TABLE IF NOT EXISTS `cms_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e94752dc68d2d71f390d991eb9e4cc18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1386676958, 'a:5:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:15:"page_categorias";s:1:"1";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sobre`
--

CREATE TABLE IF NOT EXISTS `cms_sobre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sobre_papel`
--

CREATE TABLE IF NOT EXISTS `cms_sobre_papel` (
  `id` int(11) NOT NULL,
  `papel_id` int(11) NOT NULL,
  `sobre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_sobre_papel_papel1` (`papel_id`),
  KEY `fk_cms_sobre_papel_sobre1` (`sobre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL),
(10, '\0\0', 'elbertjose', '5c133442350e41793c64e2bb39e8157f2cc048fd', '730d87e794', 'elbert.tous@imaginamos.co', NULL, NULL, NULL, 'ad289a6efc6ba783e678f9ea955d1114910ca8cd', 2013, 2013, 1, 'Elbert Jose', 'Tous Ballesteros', 'Imaginamos', '3205788788');

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
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(10, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_venta`
--

CREATE TABLE IF NOT EXISTS `cms_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `invitacion_id` int(11) DEFAULT NULL,
  `entrega_id` int(11) DEFAULT NULL,
  `sobre_id` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `datos_usuario_id` int(11) NOT NULL,
  `datos_usuario1_id` int(11) NOT NULL,
  `porcentaje_pago` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `costo_envio` double NOT NULL,
  `sub_total` double NOT NULL,
  `iva` int(11) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `referencia_UNIQUE` (`referencia`),
  KEY `fk_venta_invitacion1` (`invitacion_id`),
  KEY `fk_venta_entrega1` (`entrega_id`),
  KEY `fk_venta_sobre1` (`sobre_id`),
  KEY `fk_venta_datos_usuario1` (`datos_usuario_id`),
  KEY `fk_venta_datos_usuario2` (`datos_usuario1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_categoria`
--
ALTER TABLE `cms_categoria`
  ADD CONSTRAINT `cms_categoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_categoria_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_color_papel`
--
ALTER TABLE `cms_color_papel`
  ADD CONSTRAINT `fk_cms_color_papel_color1` FOREIGN KEY (`color_id`) REFERENCES `cms_color` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_color_papel_papel1` FOREIGN KEY (`papel_id`) REFERENCES `cms_papel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_color_producto`
--
ALTER TABLE `cms_color_producto`
  ADD CONSTRAINT `fk_color_has_producto_color1` FOREIGN KEY (`color_id`) REFERENCES `cms_color` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_color_has_producto_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_datos_usuario`
--
ALTER TABLE `cms_datos_usuario`
  ADD CONSTRAINT `fk_datos_usuario_cms_municipios1` FOREIGN KEY (`cms_municipios_id`) REFERENCES `cms_municipios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_disenador`
--
ALTER TABLE `cms_disenador`
  ADD CONSTRAINT `fk_disenador_cms_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_disenador_linea`
--
ALTER TABLE `cms_disenador_linea`
  ADD CONSTRAINT `fk_cms_disenador_linea_disenador1` FOREIGN KEY (`disenador_id`) REFERENCES `cms_disenador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_disenador_linea_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_entrega`
--
ALTER TABLE `cms_entrega`
  ADD CONSTRAINT `fk_cms_entrega_cms_municipios1` FOREIGN KEY (`municipios_id`) REFERENCES `cms_municipios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_groups_permissions`
--
ALTER TABLE `cms_groups_permissions`
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `cms_permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_invitacion_papel`
--
ALTER TABLE `cms_invitacion_papel`
  ADD CONSTRAINT `fk_invitacion_has_papel_invitacion1` FOREIGN KEY (`invitacion_id`) REFERENCES `cms_invitacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_invitacion_has_papel_papel1` FOREIGN KEY (`papel_id`) REFERENCES `cms_papel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_municipios`
--
ALTER TABLE `cms_municipios`
  ADD CONSTRAINT `fk_cms_municipios_cms_departamento1` FOREIGN KEY (`departamento_id`) REFERENCES `cms_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto`
--
ALTER TABLE `cms_producto`
  ADD CONSTRAINT `fk_producto_cms_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_disenador1` FOREIGN KEY (`disenador_id`) REFERENCES `cms_disenador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto_imagen`
--
ALTER TABLE `cms_producto_imagen`
  ADD CONSTRAINT `fk_producto_has_cms_imagen_cms_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_has_cms_imagen_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto_venta`
--
ALTER TABLE `cms_producto_venta`
  ADD CONSTRAINT `fk_producto_has_venta_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_has_venta_venta1` FOREIGN KEY (`venta_id`) REFERENCES `cms_venta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_servicio`
--
ALTER TABLE `cms_servicio`
  ADD CONSTRAINT `fk_servicio_cms_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicio_cms_imagen2` FOREIGN KEY (`imagen1_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_sobre_papel`
--
ALTER TABLE `cms_sobre_papel`
  ADD CONSTRAINT `fk_cms_sobre_papel_papel1` FOREIGN KEY (`papel_id`) REFERENCES `cms_papel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_sobre_papel_sobre1` FOREIGN KEY (`sobre_id`) REFERENCES `cms_sobre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_venta`
--
ALTER TABLE `cms_venta`
  ADD CONSTRAINT `fk_venta_datos_usuario1` FOREIGN KEY (`datos_usuario_id`) REFERENCES `cms_datos_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_datos_usuario2` FOREIGN KEY (`datos_usuario1_id`) REFERENCES `cms_datos_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_entrega1` FOREIGN KEY (`entrega_id`) REFERENCES `cms_entrega` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_invitacion1` FOREIGN KEY (`invitacion_id`) REFERENCES `cms_invitacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_sobre1` FOREIGN KEY (`sobre_id`) REFERENCES `cms_sobre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
