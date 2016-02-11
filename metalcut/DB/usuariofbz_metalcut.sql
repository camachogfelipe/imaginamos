-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2013 a las 11:07:39
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
-- Base de datos: `usuariofbz_metalcut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio`
--

DROP TABLE IF EXISTS `accesorio`;
CREATE TABLE IF NOT EXISTS `accesorio` (
  `idaccesorio` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idaccesorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `accesorio`
--

INSERT INTO `accesorio` (`idaccesorio`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Accesorios', '', 'accesorio_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alesado`
--

DROP TABLE IF EXISTS `alesado`;
CREATE TABLE IF NOT EXISTS `alesado` (
  `idalesado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idalesado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alesado`
--

INSERT INTO `alesado` (`idalesado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Alesado', '', 'alesado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `angulo`
--

DROP TABLE IF EXISTS `angulo`;
CREATE TABLE IF NOT EXISTS `angulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idangulo` varchar(1) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `idgeometria` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unico_angulo` (`idangulo`,`idgeometria`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `angulo`
--

INSERT INTO `angulo` (`id`, `idangulo`, `imagen`, `idgeometria`) VALUES
(15, 'p', 'angulo_p-c.jpg', 'c'),
(16, 'c', 'angulo_c-c.jpg', 'c'),
(17, 'n', 'angulo_n-c.jpg', 'c'),
(18, 'n', 'angulo_n-d.jpg', 'd'),
(19, 'c', 'angulo_c-d.jpg', 'd'),
(20, 'p', 'angulo_p-d.jpg', 'd'),
(21, 'n', 'angulo_n-s.jpg', 's'),
(22, 'n', 'angulo_n-t.jpg', 't'),
(23, 'b', 'angulo_b-t.jpg', 't'),
(24, 'c', 'angulo_c-t.jpg', 't'),
(25, 'p', 'angulo_p-t.jpg', 't'),
(26, 'n', 'angulo_n-v.jpg', 'v'),
(27, 'b', 'angulo_b-v.jpg', 'v'),
(28, 'c', 'angulo_c-v.jpg', 'v'),
(29, 'p', 'angulo_p-v.jpg', 'v'),
(30, 'n', 'angulo_n-w.jpg', 'w'),
(31, 'p', 'angulo_p-w.jpg', 'w'),
(32, 'b', 'angulo_b-w.jpg', 'w');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo1` varchar(100) DEFAULT NULL,
  `subtitulo2` varchar(100) DEFAULT NULL,
  `texto` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`idbanner`, `titulo`, `subtitulo1`, `subtitulo2`, `texto`, `imagen`) VALUES
(7, 'PORTA', 'KGD', '', '<p>Multidireccional</p>', 'banner_7.jpg'),
(11, 'PROMOCION', 'MES AGOSTO', 'ESCARIADORES', '<p>PARA TRABAJOS EN ACEROS CON DUREZA DE 65HRC EXTRALARGOS</p>', 'banner_11.jpg'),
(12, 'NUEVA MRW', '', '', '<p>Portaherramientas para fresado inserto redondo negativo</p>', 'banner_12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienvenida`
--

DROP TABLE IF EXISTS `bienvenida`;
CREATE TABLE IF NOT EXISTS `bienvenida` (
  `idbienvenida` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idbienvenida`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `bienvenida`
--

INSERT INTO `bienvenida` (`idbienvenida`, `titulo`, `texto`) VALUES
(1, '', 'EMPRESA COLOMBIANA QUE PIENSA\r\nEN BRINDARLE A SUS CLIENTES UNA ALTERNATIVA\r\nMODERNA Y DE FACIL ACCESO PARA ADQUIRIR SUS\r\nPRODUCTOS METALMECANICOS REALICE SU ORDEN\r\nEN LINEA Y SEA PARTICIPE DE LA TECNOLOGIA Y\r\nEVOLUCION DE SUS HERRAMIENTAS DE CORTE\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cilindrado`
--

DROP TABLE IF EXISTS `cilindrado`;
CREATE TABLE IF NOT EXISTS `cilindrado` (
  `idcilindrado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcilindrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cilindrado`
--

INSERT INTO `cilindrado` (`idcilindrado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Cilindrado y refrentado', 'Insertos en Carburo de tungsteno y Portaherramientas', 'cilindrado_1.jpg');

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
(1, '2012-07-25 12:10:42', 'http://repositorio.imaginamos.com.co/FBZ/metalcut2/cms/', 'http://repositorio.imaginamos.com.co/FBZ/metalcut2/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'Home', 'modules/home/view', 'administrator'),
(2, 'Quienes Somos', 'modules/quienes/view', 'group'),
(13, 'Redes', 'modules/modules/modules/redes/view/view/view', 'administrator'),
(17, 'Productos Referidos', 'modules/modules/modules/productos_referidos/view/view', 'briefcase'),
(12, 'Carrito Compras', 'modules/modules/carrito/view/view', 'briefcase'),
(7, 'Contacto', 'modules/contacto/view', 'mail_open'),
(3, 'Torneado', 'modules/modules/torneado/view/view', 'clipboard'),
(5, 'Fresado', 'modules/modules/modules/fresado/view/view/view', 'clipboard'),
(4, 'Taladrado', 'modules/modules/taladrado/view/view', 'clipboard'),
(6, 'Accesorios', 'modules/modules/accesorios/view/view', 'clipboard'),
(18, 'Portafolio de servicios', 'modules/portafolios/view', 'administrator');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `idcompras` int(11) NOT NULL AUTO_INCREMENT,
  `idprod` int(11) NOT NULL,
  `cant` varchar(100) NOT NULL,
  `ori` varchar(100) NOT NULL,
  `det` text NOT NULL,
  `tabla` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idcompras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idcompras`, `idprod`, `cant`, `ori`, `det`, `tabla`, `valor`, `user_id`, `estado`, `fecha`) VALUES
(3, 10, 'undefined', '', 'Ref:111-Diam.Corte:A1-Diam.Espigo:B1-Long.Total:C1-No.Insertos:D1-Angulo.ataque:E1-Inserto:F1', 'porta_escuadrado', 100, 7, 'En Cotización', '2013-08-09'),
(4, 10, 'undefined', '', 'Ref:111-Diam.Corte:A1-Diam.Espigo:B1-Long.Total:C1-No.Insertos:D1-Angulo.ataque:E1-Inserto:F1', 'porta_escuadrado', 100, 7, 'Cancelada', '2013-08-09'),
(5, 11, 'undefined', '', 'Ref:222-Diam.Corte:A2-Diam.Espigo:B2-Long.Total:C2-No.Insertos:C3-Angulo.ataque:E3-Inserto:F3', 'porta_escuadrado', 200, 7, 'Proceso', '2013-08-09'),
(6, 0, '20', '', 'Producto:Producto 2-Detalle:ituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 200, 5, 'Cancelada', '2013-08-09'),
(7, 2, '10', '', 'Producto:Producto 2-Detalle:ituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 200, 5, 'En Cotizacion', '2013-08-09'),
(8, 3, '1030', '', 'Producto:Producto 3-Detalle:TituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 500, 5, 'En Cotizacion', '2013-08-09'),
(9, 10, 'undefined', '', 'Ref:111-Diam.Corte:A1-Diam.Espigo:B1-Long.Total:C1-No.Insertos:D1-Angulo.ataque:E1-Inserto:F1', 'porta_escuadrado', 100, 7, 'Proceso', '2013-08-09'),
(10, 11, 'undefined', '', 'Ref:222-Diam.Corte:A2-Diam.Espigo:B2-Long.Total:C2-No.Insertos:C3-Angulo.ataque:E3-Inserto:F3', 'porta_escuadrado', 200, 7, 'Proceso', '2013-08-09'),
(11, 12, 'undefined', '', 'Ref:333-Diam.Corte:A3-Diam.Espigo:B3-Long.Total:C3-No.Insertos:D2-Angulo.ataque:E5-Inserto:F5', 'porta_escuadrado', 300, 7, 'Proceso', '2013-08-09'),
(12, 13, 'undefined', '', 'Ref:444-Diam.Corte:A4-Diam.Espigo:B4-Long.Total:C4-No.Insertos:C3-Angulo.ataque:E7-Inserto:F7', 'porta_escuadrado', 400, 7, 'Proceso', '2013-08-09'),
(14, 10, '8', '', 'Ref:111-Diam.Corte:A1-Diam.Espigo:B1-Long.Total:C1-No.Insertos:D1-Angulo.ataque:E1-Inserto:F1', 'porta_escuadrado', 100, 7, 'Proceso', '2013-08-09'),
(15, 11, '2', '', 'Ref:222-Diam.Corte:A2-Diam.Espigo:B2-Long.Total:C2-No.Insertos:C3-Angulo.ataque:E3-Inserto:F3', 'porta_escuadrado', 200, 7, 'Proceso', '2013-08-09'),
(16, 12, '21', '', 'Ref:333-Diam.Corte:A3-Diam.Espigo:B3-Long.Total:C3-No.Insertos:D2-Angulo.ataque:E5-Inserto:F5', 'porta_escuadrado', 300, 7, 'Proceso', '2013-08-09'),
(17, 13, '11', '', 'Ref:444-Diam.Corte:A4-Diam.Espigo:B4-Long.Total:C4-No.Insertos:C3-Angulo.ataque:E7-Inserto:F7', 'porta_escuadrado', 400, 7, 'Proceso', '2013-08-09'),
(18, 14, '1', '', 'Ref:555-Diam.Corte:A5-Diam.Espigo:B5-Long.Total:C5-No.Insertos:D3-Angulo.ataque:E9-Inserto:F9', 'porta_escuadrado', 500, 7, 'Proceso', '2013-08-09'),
(19, 23, '1', '', 'Ref:10666-longitud:a6-Diametro:b6-tipo.boquilla:c6', 'porta_accesorio', 600, 7, 'Proceso', '2013-08-09'),
(21, 18, '2', '', 'Ref:111-longitud:a1-Diametro:b1-tipo.boquilla:c1', 'porta_accesorio', 100, 7, 'Proceso', '2013-08-09'),
(22, 12, '5', 'Derecha', 'Ref:222-Diam.Corte:a2-Diam.Espigo:b2-Long.Total:c2-No.Insertos:d2-Inserto:f2', 'porta_copiado', 200, 5, 'En Cotizacion', '2013-08-09'),
(23, 24, '3', '', 'Ref:12777-longitud:a7-Diametro:b7-tipo.boquilla:c7', 'porta_accesorio', 700, 7, 'Proceso', '2013-08-09'),
(24, 13, '5', 'Izquierda', 'Ref:333-Diam.Corte:a3-Diam.Espigo:b3-Long.Total:c3-No.Insertos:d3-Inserto:f3', 'porta_copiado', 300, 5, 'En Cotizacion', '2013-08-09'),
(25, 25, '4', '', 'Ref:14888-longitud:a8-Diametro:b8-tipo.boquilla:c8', 'porta_accesorio', 800, 7, 'Proceso', '2013-08-09'),
(26, 26, '5', '', 'Ref:16999-longitud:a9-Diametro:b9-tipo.boquilla:c9', 'porta_accesorio', 900, 7, 'Proceso', '2013-08-09'),
(27, 16, '1', 'Neutro', 'Ref:111-Diam.Corte:a1-Diam.Espigo:c1-Long.Total:b1-No.Insertos:e1-Inserto:d1', 'porta_ranurado', 100, 7, 'Proceso', '2013-08-09'),
(28, 25, '2', 'Derecha', 'Ref:1110-Diam.Corte:a10-Diam.Espigo:c10-Long.Total:b10-No.Insertos:e10-Inserto:d10', 'porta_ranurado', 1000, 7, 'Proceso', '2013-08-09'),
(29, 26, '3', 'Izquierda', 'Ref:1221-Diam.Corte:a11-Diam.Espigo:c11-Long.Total:b11-No.Insertos:e11-Inserto:d11', 'porta_ranurado', 1100, 7, 'Proceso', '2013-08-09'),
(30, 27, '4', 'Neutro', 'Ref:1332-Diam.Corte:a12-Diam.Espigo:c12-Long.Total:b12-No.Insertos:e12-Inserto:d12', 'porta_ranurado', 1200, 7, 'Proceso', '2013-08-09'),
(31, 28, '5', 'Derecha', 'Ref:1443-Diam.Corte:a13-Diam.Espigo:c13-Long.Total:b13-No.Insertos:e13-Inserto:d13', 'porta_ranurado', 1300, 7, 'Proceso', '2013-08-09'),
(32, 21, '1', 'Neutro', 'Ref:111-diam.ajugero:a1-Diam.Barra:b1-Long.Barra:c1-Inserto:d1', 'porta_alesado', 100, 7, 'Proceso', '2013-08-09'),
(33, 30, '2', 'Derecha', 'Ref:1110-diam.ajugero:a10-Diam.Barra:b10-Long.Barra:c10-Inserto:d10', 'porta_alesado', 1000, 7, 'Proceso', '2013-08-09'),
(34, 31, '3', 'Izquierda', 'Ref:1221-diam.ajugero:a11-Diam.Barra:b11-Long.Barra:c11-Inserto:d11', 'porta_alesado', 1100, 7, 'Proceso', '2013-08-09'),
(35, 32, '4', 'Neutro', 'Ref:1332-diam.ajugero:a12-Diam.Barra:b12-Long.Barra:c12-Inserto:d12', 'porta_alesado', 1200, 7, 'Proceso', '2013-08-09'),
(36, 33, '5', 'Derecha', 'Ref:1443-diam.ajugero:a13-Diam.Barra:b13-Long.Barra:c13-Inserto:d13', 'porta_alesado', 1300, 7, 'Proceso', '2013-08-09'),
(37, 20, '1', 'Neutro', 'Ref:111-Tamano:1a-Longitud:1b', 'porta_cilindrado', 100, 7, 'Proceso', '2013-08-09'),
(38, 29, '2', 'Derecha', 'Ref:1110-Tamano:10a-Longitud:2b', 'porta_cilindrado', 1000, 7, 'Proceso', '2013-08-09'),
(39, 30, '3', 'Izquierda', 'Ref:1221-Tamano:11a-Longitud:1b', 'porta_cilindrado', 1100, 7, 'Proceso', '2013-08-09'),
(40, 31, '4', 'Neutro', 'Ref:1332-Tamano:12a-Longitud:2b', 'porta_cilindrado', 1200, 7, 'Proceso', '2013-08-09'),
(41, 32, '5', 'Derecha', 'Ref:1443-Tamano:13a-Longitud:1b', 'porta_cilindrado', 1300, 7, 'Proceso', '2013-08-09'),
(42, 11, '1', 'Neutro', 'Ref:11-diam.ajugero:a1-Diam.Barra:b1-Long.Barra:c1-Inserto:d1', 'porta_roscado_ext', 100, 7, 'Proceso', '2013-08-09'),
(43, 12, '2', 'Derecha', 'Ref:22-diam.ajugero:a2-Diam.Barra:b2-Long.Barra:c2-Inserto:d2', 'porta_roscado_ext', 200, 7, 'Proceso', '2013-08-09'),
(44, 13, '3', 'Izquierda', 'Ref:33-diam.ajugero:a3-Diam.Barra:b3-Long.Barra:c3-Inserto:d3', 'porta_roscado_ext', 300, 7, 'Proceso', '2013-08-09'),
(45, 14, '4', 'Neutro', 'Ref:44-diam.ajugero:a4-Diam.Barra:b4-Long.Barra:c4-Inserto:d4', 'porta_roscado_ext', 400, 7, 'Proceso', '2013-08-09'),
(46, 15, '5', 'Derecha', 'Ref:55-diam.ajugero:a5-Diam.Barra:b5-Long.Barra:c5-Inserto:d5', 'porta_roscado_ext', 500, 7, 'Proceso', '2013-08-09'),
(47, 15, '21', 'Neutro', 'Ref:11-Diam.Corte:a1-Diam.Espigo:c1-Long.Total:b1-No.Insertos:e1-Inserto:d1', 'porta_roscado_int', 100, 7, 'Proceso', '2013-08-09'),
(48, 24, '22', 'Derecha', 'Ref:110-Diam.Corte:a10-Diam.Espigo:c10-Long.Total:b10-No.Insertos:e10-Inserto:d10', 'porta_roscado_int', 1000, 7, 'Proceso', '2013-08-09'),
(49, 25, '23', 'Izquierda', 'Ref:121-Diam.Corte:a11-Diam.Espigo:c11-Long.Total:b11-No.Insertos:e11-Inserto:d11', 'porta_roscado_int', 1100, 7, 'Proceso', '2013-08-09'),
(50, 16, '24', 'Neutro', 'Ref:22-Diam.Corte:a2-Diam.Espigo:c2-Long.Total:b2-No.Insertos:e2-Inserto:d2', 'porta_roscado_int', 200, 7, 'Proceso', '2013-08-09'),
(51, 17, '25', 'Derecha', 'Ref:33-Diam.Corte:a3-Diam.Espigo:c3-Long.Total:b3-No.Insertos:e3-Inserto:d3', 'porta_roscado_int', 300, 7, 'Proceso', '2013-08-09'),
(52, 34, '11', 'undefined', 'Ref:xxx-Diam.Corte:1-Long.Corte:2-Long.Total:3-Diam.Espigo:4-Rosca:5-Inserto:6', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(53, 35, '12', 'undefined', 'Ref:xxx-Diam.Corte:a1-Long.Corte:b1-Long.Total:c1-Diam.Espigo:d1-Rosca:f1-Inserto:e1', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(54, 36, '13', 'undefined', 'Ref:yyy-Diam.Corte:a2-Long.Corte:b2-Long.Total:c2-Diam.Espigo:d2-Rosca:f2-Inserto:e2', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(55, 37, '14', 'undefined', 'Ref:zzz-Diam.Corte:a3-Long.Corte:b3-Long.Total:c3-Diam.Espigo:d3-Rosca:f3-Inserto:e3', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(56, 38, '31', 'undefined', 'Ref:xxx-Diam.Corte:a1-Long.Corte:b1-Long.Total:c1-Diam.Espigo:d1-Rosca:f1-Inserto:e1', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(57, 39, '32', 'undefined', 'Ref:yyy-Diam.Corte:a2-Long.Corte:b2-Long.Total:c2-Diam.Espigo:d2-Rosca:f2-Inserto:e2', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(58, 40, '33', 'undefined', 'Ref:zzz-Diam.Corte:a3-Long.Corte:b3-Long.Total:c3-Diam.Espigo:d3-Rosca:f3-Inserto:e3', 'porta_taladrado', 0, 7, 'Proceso', '2013-08-09'),
(61, 23, '3', '', 'Ref:10666-longitud:a6-Diametro:b6-tipo.boquilla:c6', 'porta_accesorio', 600, 8, 'Proceso', '2013-08-09'),
(62, 18, '4', '', 'Ref:111-longitud:a1-Diametro:b1-tipo.boquilla:c1', 'porta_accesorio', 100, 8, 'Proceso', '2013-08-09'),
(65, 45, '100', '', 'Producto:Aaaa01a101cc-Detalle:TipoAMaterialaGeometriaaAnguloaLogitud01Espesora1Radio01Tipo Cortecc', 'producto_torneado', 100, 8, 'Proceso', '2013-08-09'),
(66, 57, '45', '', 'Producto:Cada02b101tc-Detalle:TipoCMaterialaGeometriadAnguloaLogitud02Espesorb1Radio01Tipo Cortetc', 'producto_torneado', 400, 10, 'Proceso', '2013-08-09'),
(68, 2, '21', '', 'Producto:Producto 2-Detalle:ituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 200, 10, 'Proceso', '2013-08-09'),
(69, 3, '32', '', 'Producto:Producto 3-Detalle:TituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 500, 10, 'Proceso', '2013-08-09'),
(70, 1, '12', '', 'Producto:Producto 1-Detalle:TituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is simply dummy text of the ', 'productos_referido', 100, 10, 'Proceso', '2013-08-09'),
(71, 61, '25', '', 'Producto:Afba01a102tc-Detalle:TipoAMaterialfGeometriabAnguloaLogitud01Espesora1Radio02Tipo Cortetc', 'producto_torneado', 500, 10, 'Proceso', '2013-08-09'),
(72, 23, '12', '', 'Ref:10666-longitud:a6-Diametro:b6-tipo.boquilla:c6', 'porta_accesorio', 600, 7, 'Proceso', '2013-08-09'),
(73, 18, '32', '', 'Ref:111-longitud:a1-Diametro:b1-tipo.boquilla:c1', 'porta_accesorio', 100, 7, 'Proceso', '2013-08-09'),
(74, 24, '43', '', 'Ref:12777-longitud:a7-Diametro:b7-tipo.boquilla:c7', 'porta_accesorio', 700, 7, 'Proceso', '2013-08-09'),
(75, 25, '56', '', 'Ref:14888-longitud:a8-Diametro:b8-tipo.boquilla:c8', 'porta_accesorio', 800, 7, 'Proceso', '2013-08-09'),
(76, 26, '45', '', 'Ref:16999-longitud:a9-Diametro:b9-tipo.boquilla:c9', 'porta_accesorio', 900, 7, 'Proceso', '2013-08-09'),
(77, 10, '12', '', 'Ref:111-Diam.Corte:A1-Diam.Espigo:B1-Long.Total:C1-No.Insertos:D1-Angulo.ataque:E1-Inserto:F1', 'porta_escuadrado', 100, 7, 'Proceso', '2013-08-09'),
(78, 11, '13', '', 'Ref:222-Diam.Corte:A2-Diam.Espigo:B2-Long.Total:C2-No.Insertos:C3-Angulo.ataque:E3-Inserto:F3', 'porta_escuadrado', 200, 7, 'Proceso', '2013-08-09'),
(79, 12, '14', '', 'Ref:333-Diam.Corte:A3-Diam.Espigo:B3-Long.Total:C3-No.Insertos:D2-Angulo.ataque:E5-Inserto:F5', 'porta_escuadrado', 300, 7, 'Proceso', '2013-08-09'),
(80, 13, '15', '', 'Ref:444-Diam.Corte:A4-Diam.Espigo:B4-Long.Total:C4-No.Insertos:C3-Angulo.ataque:E7-Inserto:F7', 'porta_escuadrado', 400, 7, 'Proceso', '2013-08-09'),
(81, 14, '16', '', 'Ref:555-Diam.Corte:A5-Diam.Espigo:B5-Long.Total:C5-No.Insertos:D3-Angulo.ataque:E9-Inserto:F9', 'porta_escuadrado', 500, 7, 'Proceso', '2013-08-09'),
(83, 2, '2', '', 'Producto:Producto 2-Detalle:ituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido', 200, 11, 'Proceso', '2013-10-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conos`
--

DROP TABLE IF EXISTS `conos`;
CREATE TABLE IF NOT EXISTS `conos` (
  `idconos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idconos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `conos`
--

INSERT INTO `conos` (`idconos`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Conos', '', 'conos_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(100) DEFAULT NULL,
  `direccion1` varchar(100) DEFAULT NULL,
  `direccion2` varchar(100) DEFAULT NULL,
  `telefonos` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `correos` varchar(100) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idcontacto`, `ciudad`, `direccion1`, `direccion2`, `telefonos`, `fax`, `correos`, `imagen`) VALUES
(1, 'Bogotá D.C', 'Carrera 51 No. 41 - 21 Sur', '1234', '057 (1) 711 0836 - 057 (1) 564 5191', '057 (1) 564 3772', 'info@metalcut.com', 'contacto_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copiado`
--

DROP TABLE IF EXISTS `copiado`;
CREATE TABLE IF NOT EXISTS `copiado` (
  `idcopiado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcopiado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `copiado`
--

INSERT INTO `copiado` (`idcopiado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Copiado y cajeado', '', 'copiado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

DROP TABLE IF EXISTS `destacados`;
CREATE TABLE IF NOT EXISTS `destacados` (
  `iddestacados` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iddestacados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`iddestacados`, `imagen`, `titulo`, `texto`, `link`) VALUES
(5, 'destacados_5.png', 'CHAT ONLINE', '', 'http://www.google.com.co'),
(6, 'destacados_6.jpg', 'Soporte', 'Recibe soporte MetalCut Ltda', ''),
(8, 'destacados_8.png', 'Canal ', 'Videos de nuestras herramientas', 'http://www.youtube.com/channel/UCtf2knyWHg_Qa_OCc_qQnKg'),
(9, 'destacados_9.jpg', 'Catalogo', 'Catalogo herramienta serie MEC', 'http://www.kyocera.es/etc/medialib/kyocera/products/cutting_tools/PDF.Par.78886.File.dat/2012%20-%20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuadrado`
--

DROP TABLE IF EXISTS `escuadrado`;
CREATE TABLE IF NOT EXISTS `escuadrado` (
  `idescuadrado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idescuadrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `escuadrado`
--

INSERT INTO `escuadrado` (`idescuadrado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Escuadrado y Ranurado', '', 'escuadrado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espesor`
--

DROP TABLE IF EXISTS `espesor`;
CREATE TABLE IF NOT EXISTS `espesor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idespesor` varchar(2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `idgeometria` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unico_espesor` (`idespesor`,`idgeometria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `espesor`
--

INSERT INTO `espesor` (`id`, `idespesor`, `imagen`, `idgeometria`) VALUES
(6, 'T7', 'espesor_T7-z.png', 'z'),
(8, '02', 'espesor_02-c.jpg', 'c'),
(9, '03', 'espesor_03-c.jpg', 'c'),
(10, 'T3', 'espesor_T3-c.jpg', 'c'),
(11, '04', 'espesor_04-c.jpg', 'c'),
(12, '06', 'espesor_06-c.jpg', 'c'),
(13, '02', 'espesor_02-d.jpg', 'd'),
(14, 'T3', 'espesor_T3-d.jpg', 'd'),
(15, '04', 'espesor_04-d.jpg', 'd'),
(16, '06', 'espesor_06-d.jpg', 'd'),
(17, '03', 'espesor_03-s.jpg', 's'),
(18, '04', 'espesor_04-s.jpg', 's'),
(19, '06', 'espesor_06-s.jpg', 's'),
(20, '01', 'espesor_01-t.jpg', 't'),
(21, '02', 'espesor_02-t.jpg', 't'),
(22, '03', 'espesor_03-t.jpg', 't'),
(23, 'T3', 'espesor_T3-t.jpg', 't'),
(24, '04', 'espesor_04-t.jpg', 't'),
(25, '02', 'espesor_02-v.jpg', 'v'),
(26, '03', 'espesor_03-v.jpg', 'v'),
(27, '04', 'espesor_04-v.jpg', 'v'),
(28, 'T3', 'espesor_T3-w.jpg', 'w'),
(29, '04', 'espesor_04-w.jpg', 'w');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geometria`
--

DROP TABLE IF EXISTS `geometria`;
CREATE TABLE IF NOT EXISTS `geometria` (
  `idgeometria` varchar(1) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idgeometria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `geometria`
--

INSERT INTO `geometria` (`idgeometria`, `imagen`) VALUES
('c', 'geometria_c.jpg'),
('d', 'geometria_d.jpg'),
('s', 'geometria_s.jpg'),
('t', 'geometria_t.jpg'),
('v', 'geometria_v.jpg'),
('w', 'geometria_w.jpg'),
('z', 'geometria_z.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `idhistoria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idhistoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`idhistoria`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Historia', '', 'historia_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_accesorio`
--

DROP TABLE IF EXISTS `img_accesorio`;
CREATE TABLE IF NOT EXISTS `img_accesorio` (
  `idimg_accesorio` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_accesorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_accesorio`
--

INSERT INTO `img_accesorio` (`idimg_accesorio`, `imagen`) VALUES
(1, 'img_accesorio_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_alesado`
--

DROP TABLE IF EXISTS `img_alesado`;
CREATE TABLE IF NOT EXISTS `img_alesado` (
  `idimg_alesado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_alesado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_alesado`
--

INSERT INTO `img_alesado` (`idimg_alesado`, `imagen`) VALUES
(1, 'img_alesado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_cilindrado`
--

DROP TABLE IF EXISTS `img_cilindrado`;
CREATE TABLE IF NOT EXISTS `img_cilindrado` (
  `idimg_cilindrado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_cilindrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_cilindrado`
--

INSERT INTO `img_cilindrado` (`idimg_cilindrado`, `imagen`) VALUES
(1, 'img_cilindrado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_conos`
--

DROP TABLE IF EXISTS `img_conos`;
CREATE TABLE IF NOT EXISTS `img_conos` (
  `idimg_conos` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos_conos` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_conos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `img_conos`
--

INSERT INTO `img_conos` (`idimg_conos`, `idproductos_conos`, `imagen`) VALUES
(1, 1, 'img_conos_1.jpg'),
(4, 2, 'img_conos_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_copiado`
--

DROP TABLE IF EXISTS `img_copiado`;
CREATE TABLE IF NOT EXISTS `img_copiado` (
  `idimg_copiado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_copiado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_copiado`
--

INSERT INTO `img_copiado` (`idimg_copiado`, `imagen`) VALUES
(1, 'img_copiado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_escuadrado`
--

DROP TABLE IF EXISTS `img_escuadrado`;
CREATE TABLE IF NOT EXISTS `img_escuadrado` (
  `idimg_escuadrado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_escuadrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_escuadrado`
--

INSERT INTO `img_escuadrado` (`idimg_escuadrado`, `imagen`) VALUES
(1, 'img_escuadrado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_planchado`
--

DROP TABLE IF EXISTS `img_planchado`;
CREATE TABLE IF NOT EXISTS `img_planchado` (
  `idimg_planchado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_planchado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_planchado`
--

INSERT INTO `img_planchado` (`idimg_planchado`, `imagen`) VALUES
(1, 'img_planchado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_ranurado`
--

DROP TABLE IF EXISTS `img_ranurado`;
CREATE TABLE IF NOT EXISTS `img_ranurado` (
  `idimg_ranurado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_ranurado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_ranurado`
--

INSERT INTO `img_ranurado` (`idimg_ranurado`, `imagen`) VALUES
(1, 'img_ranurado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_roscado`
--

DROP TABLE IF EXISTS `img_roscado`;
CREATE TABLE IF NOT EXISTS `img_roscado` (
  `idimg_roscado` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos_roscado` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_roscado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `img_roscado`
--

INSERT INTO `img_roscado` (`idimg_roscado`, `idproductos_roscado`, `imagen`) VALUES
(2, 2, 'img_roscado_2.jpg'),
(3, 1, 'img_roscado_3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_sujecion`
--

DROP TABLE IF EXISTS `img_sujecion`;
CREATE TABLE IF NOT EXISTS `img_sujecion` (
  `idimg_sujecion` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos_sujecion` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_sujecion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `img_sujecion`
--

INSERT INTO `img_sujecion` (`idimg_sujecion`, `idproductos_sujecion`, `imagen`) VALUES
(1, 1, 'img_sujecion_1.jpg'),
(2, 2, 'img_sujecion_2.jpg'),
(3, 3, 'img_sujecion_3.jpg'),
(4, 4, 'img_sujecion_4.jpg'),
(5, 5, 'img_sujecion_5.jpg'),
(6, 6, 'img_sujecion_6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_taladrado`
--

DROP TABLE IF EXISTS `img_taladrado`;
CREATE TABLE IF NOT EXISTS `img_taladrado` (
  `idimg_taladrado` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idimg_taladrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_taladrado`
--

INSERT INTO `img_taladrado` (`idimg_taladrado`, `imagen`) VALUES
(1, 'img_taladrado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `longitud`
--

DROP TABLE IF EXISTS `longitud`;
CREATE TABLE IF NOT EXISTS `longitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlongitud` varchar(2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `idgeometria` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unica_logitud` (`idlongitud`,`idgeometria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `longitud`
--

INSERT INTO `longitud` (`id`, `idlongitud`, `imagen`, `idgeometria`) VALUES
(9, '09', 'longitud_09-c.jpg', 'c'),
(10, '06', 'longitud_06-c.jpg', 'c'),
(11, '08', 'longitud_08-c.jpg', 'c'),
(12, '12', 'longitud_12-c.jpg', 'c'),
(13, '16', 'longitud_16-c.jpg', 'c'),
(14, '19', 'longitud_19-c.jpg', 'c'),
(15, '07', 'longitud_07-d.jpg', 'd'),
(16, '11', 'longitud_11-d.jpg', 'd'),
(17, '15', 'longitud_15-d.jpg', 'd'),
(18, '09', 'longitud_09-s.jpg', 's'),
(19, '12', 'longitud_12-s.jpg', 's'),
(20, '15', 'longitud_15-s.jpg', 's'),
(21, '19', 'longitud_19-s.jpg', 's'),
(22, '06', 'longitud_06-t.jpg', 't'),
(23, '08', 'longitud_08-t.jpg', 't'),
(24, '09', 'longitud_09-t.jpg', 't'),
(25, '11', 'longitud_11-t.jpg', 't'),
(26, '16', 'longitud_16-t.jpg', 't'),
(27, '22', 'longitud_22-t.jpg', 't'),
(28, '08', 'longitud_08-v.jpg', 'v'),
(29, '11', 'longitud_11-v.jpg', 'v'),
(30, '16', 'longitud_16-v.jpg', 'v'),
(31, '06', 'longitud_06-w.jpg', 'w'),
(32, '08', 'longitud_08-w.jpg', 'w');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

DROP TABLE IF EXISTS `materiales`;
CREATE TABLE IF NOT EXISTS `materiales` (
  `idmateriales` varchar(1) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idmateriales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`idmateriales`, `color`, `descripcion`, `imagen`) VALUES
('h', '7D7D7D', 'Aceros que cuentan con tratamientos termicos o durezas mayores a 35HRC', 'materiales_h.jpg'),
('k', 'FF0000', 'Fundiciones de hierro', 'materiales_k.jpg'),
('m', 'EFFF0D', 'Aceros con aleciones de niquel,cromo', 'materiales_m.jpg'),
('n', '1F9612', 'Metales en los cuales no poseen hierro(cobre, zinc, plomo, estaño, aluminio, níquel y manganeso)', 'materiales_n.jpg'),
('p', '0F27FF', 'Aceros con aleaciones de carbono (1020-1045-4140)', 'materiales_p.jpg'),
('s', '826233', 'Titanio', 'materiales_s.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision`
--

DROP TABLE IF EXISTS `mision`;
CREATE TABLE IF NOT EXISTS `mision` (
  `idmision` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idmision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `mision`
--

INSERT INTO `mision` (`idmision`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Misión', 'Ser la empresa lider de colombia en la distribucion y asesoria tecnica especializada en herramientas de corte para metal', 'mision_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_carburo`
--

DROP TABLE IF EXISTS `nivel_carburo`;
CREATE TABLE IF NOT EXISTS `nivel_carburo` (
  `idnivel_carburo` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_carburo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_carburo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `nivel_carburo`
--

INSERT INTO `nivel_carburo` (`idnivel_carburo`, `idportafolio_carburo`, `titulo`, `nivel`) VALUES
(1, 1, 'Tipo', 1),
(2, 2, 'Filos', 2),
(3, 5, 'Material', 3),
(4, 7, 'Z', 4),
(5, 12, 'Y', 5),
(6, 15, 'X', 6),
(7, 17, 'W', 7),
(8, 3, '1', 2),
(9, 21, '2', 3),
(10, 22, '3', 4),
(11, 23, 'Opcion 6', 5),
(12, 24, 'Opcion 8', 6),
(13, 25, 'Opcion YYY', 7),
(14, 6, 'Material', 3),
(15, 0, 'Filos', 0),
(16, 0, 'Filos', 0),
(17, 0, 'Filos', 0),
(18, 0, 'Filos', 0),
(19, 0, 'Filos', 0),
(20, 27, 'Filos', 2),
(22, 0, 'MATERIAL', 0),
(23, 0, 'MATERIAL', 0),
(24, 32, 'Aceros Hasta 50HR', 3),
(25, 0, 'Material', 0),
(26, 0, 'Material', 0),
(27, 0, 'Material', 0),
(28, 33, 'Material', 3),
(29, 35, 'Material', 3),
(30, 31, 'Material', 2),
(31, 0, 'Clase', 0),
(32, 0, 'Material', 0),
(33, 48, 'Clase', 4),
(34, 8, 'Clase', 4),
(35, 9, 'Clase', 4),
(36, 39, 'Clase', 4),
(37, 40, 'CLASE', 4),
(38, 0, 'Clase', 0),
(39, 34, 'Serie', 4),
(40, 38, 'Serie', 4),
(41, 42, 'Serie', 4),
(42, 43, 'Serie', 4),
(43, 44, 'Serie', 4),
(44, 45, 'Serie', 3),
(45, 46, 'Serie', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_fresado`
--

DROP TABLE IF EXISTS `nivel_fresado`;
CREATE TABLE IF NOT EXISTS `nivel_fresado` (
  `idnivel_fresado` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_fresado` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_fresado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `nivel_fresado`
--

INSERT INTO `nivel_fresado` (`idnivel_fresado`, `idportafolio_fresado`, `titulo`, `nivel`) VALUES
(1, 2, 'Tipo', 1),
(2, 5, 'Filos', 2),
(4, 9, 'Materiales', 3),
(5, 12, 'Opciones 4', 4),
(6, 14, 'Opciones 5', 5),
(7, 16, 'Opciones 6', 6),
(8, 20, 'Opciones 7', 7),
(9, 0, 'Opcion', 0),
(10, 23, 'Opcion 3', 1),
(11, 25, 'Opcion 4', 2),
(12, 26, 'Opcion 5', 3),
(13, 27, 'Opcion 6', 4),
(14, 28, 'Opcion 7', 5),
(15, 29, 'Opcion 8', 6),
(16, 30, 'Opcion 9', 7),
(17, 4, 'Titulo 1', 1),
(18, 32, 'Opción', 1),
(19, 33, 'Opciones', 1),
(20, 35, 'Piñas', 1),
(21, 35, 'Piñas', 1),
(22, 0, 'Piñas 45°', 0),
(23, 36, 'Fresa de planeado', 1),
(25, 37, 'MFPN', 2),
(26, 38, 'MFPN', 2),
(27, 45, 'Tipo de Fresa', 1),
(28, 49, 'Serie', 2),
(29, 50, 'Serie', 2),
(30, 0, 'Serie', 0),
(31, 0, 'Serie', 0),
(32, 0, 'Prueba', 0),
(33, 0, 'Serie', 0),
(34, 0, 'Serie', 0),
(35, 0, 'Serie', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_portafolio`
--

DROP TABLE IF EXISTS `nivel_portafolio`;
CREATE TABLE IF NOT EXISTS `nivel_portafolio` (
  `idnivel_portafolio` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_portafolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `nivel_portafolio`
--

INSERT INTO `nivel_portafolio` (`idnivel_portafolio`, `idportafolio`, `titulo`, `nivel`) VALUES
(1, 2, 'Tipo', 1),
(2, 5, 'Filos', 2),
(4, 9, 'Materiales', 3),
(5, 12, 'Opciones 4', 4),
(6, 13, 'Opciones 5', 5),
(7, 17, 'Opciones 6', 6),
(8, 20, 'Opciones 7', 7),
(10, 1, 'Tipo 2', 1),
(11, 29, 'Filos B', 2),
(12, 31, 'Nivel 3', 2),
(13, 36, 'Opción', 1),
(14, 38, 'TIPO', 1),
(15, 39, 'TIPO', 2),
(16, 40, 'Tipo', 2),
(19, 0, 'tipo3', 0),
(20, 56, 'Tipo', 1),
(21, 0, 'TIPO12', 0),
(22, 0, 'TIPO 123', 0),
(23, 0, 'Prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_ranurado`
--

DROP TABLE IF EXISTS `nivel_ranurado`;
CREATE TABLE IF NOT EXISTS `nivel_ranurado` (
  `idnivel_ranurado` int(11) NOT NULL AUTO_INCREMENT,
  `idranurado` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_ranurado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `nivel_ranurado`
--

INSERT INTO `nivel_ranurado` (`idnivel_ranurado`, `idranurado`, `titulo`, `nivel`) VALUES
(1, 0, 'prueba andres', 1),
(2, 0, 'dsf', 1),
(3, 0, 'sdf', 0),
(4, 0, 'sdf', 0),
(5, 0, 'sdf', 0),
(6, 1, 'prueba andres', 1),
(7, 2, 'prueba andres3', 2),
(8, 0, 'Trabajo', 0),
(9, 0, 'Trabajo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_roscado`
--

DROP TABLE IF EXISTS `nivel_roscado`;
CREATE TABLE IF NOT EXISTS `nivel_roscado` (
  `idnivel_roscado` int(11) NOT NULL AUTO_INCREMENT,
  `idroscado` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_roscado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `nivel_roscado`
--

INSERT INTO `nivel_roscado` (`idnivel_roscado`, `idroscado`, `titulo`, `nivel`) VALUES
(1, 2, 'asd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_alesado`
--

DROP TABLE IF EXISTS `opciones_alesado`;
CREATE TABLE IF NOT EXISTS `opciones_alesado` (
  `idopciones_alesado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idopciones_alesado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `opciones_alesado`
--

INSERT INTO `opciones_alesado` (`idopciones_alesado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Inserto', 'prg--1>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'opciones_alesado_1.jpg'),
(2, 'Portaherramientas', 'Barras de cilindrado interno', 'opciones_alesado_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_cilindrado`
--

DROP TABLE IF EXISTS `opciones_cilindrado`;
CREATE TABLE IF NOT EXISTS `opciones_cilindrado` (
  `idopciones_cilindrado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idopciones_cilindrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `opciones_cilindrado`
--

INSERT INTO `opciones_cilindrado` (`idopciones_cilindrado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Inserto', '', 'opciones_cilindrado_1.jpg'),
(2, 'Portaherramientas', '', 'opciones_cilindrado_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planchado`
--

DROP TABLE IF EXISTS `planchado`;
CREATE TABLE IF NOT EXISTS `planchado` (
  `idplanchado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idplanchado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `planchado`
--

INSERT INTO `planchado` (`idplanchado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Planeado y Chaflanado', 'Portaherramientas ', 'planchado_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

DROP TABLE IF EXISTS `portafolio`;
CREATE TABLE IF NOT EXISTS `portafolio` (
  `idportafolio` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(100) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `paso` varchar(2) NOT NULL,
  `nivel` int(11) NOT NULL,
  `idportafoliopadre` int(11) NOT NULL,
  `orientacion` varchar(2) NOT NULL,
  PRIMARY KEY (`idportafolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`idportafolio`, `modulo`, `titulo`, `texto`, `imagen`, `paso`, `nivel`, `idportafoliopadre`, `orientacion`) VALUES
(5, 'accesorios', 'Tipo 1A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios5.jpg', 'S', 1, 1, ''),
(6, 'accesorios', 'Tipo 2A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.  ', 'portafolio_accesorios6.jpg', '', 1, 1, ''),
(8, 'accesorios', 'Filo 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 2, 5, ''),
(9, 'accesorios', 'Filo 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios9.jpg', 'S', 2, 5, ''),
(10, 'accesorios', 'Filo 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios10.jpg', 'S', 2, 5, ''),
(11, 'accesorios', 'Materiales 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 3, 9, ''),
(12, 'accesorios', 'Materiales 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios12.jpg', 'S', 3, 9, ''),
(13, 'accesorios', 'A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'S', 4, 12, ''),
(14, 'accesorios', 'B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios14.jpg', 'S', 4, 12, ''),
(15, 'accesorios', 'C', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios15.jpg', 'P', 4, 12, ''),
(16, 'accesorios', 'D', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'S', 5, 12, ''),
(17, 'accesorios', 'E', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios17.jpg', 'S', 5, 13, ''),
(18, 'accesorios', 'F', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios18.jpg', 'P', 5, 13, ''),
(19, 'accesorios', 'G', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 6, 17, ''),
(20, 'accesorios', 'H', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios20.jpg', 'S', 6, 17, ''),
(21, 'accesorios', 'I', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 7, 19, ''),
(29, 'accesorios', 'Tipo 1B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios28.jpg', 'S', 1, 2, ''),
(30, 'accesorios', 'Tipo 2B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios30.jpg', 'P', 1, 2, ''),
(31, 'accesorios', 'Tipo 3B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios31.jpg', 'S', 1, 2, ''),
(32, 'accesorios', 'Filo 1B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios32.jpg', 'S', 2, 29, ''),
(33, 'accesorios', 'Filo 2B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios33.jpg', 'P', 2, 29, ''),
(34, 'accesorios', 'Ultima ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios34.jpg', 'P', 7, 20, ''),
(35, 'accesorios', 'Opcion 3A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. Lorem Ipsum is simply ', 'portafolio_accesorios35.jpg', 'S', 2, 31, ''),
(37, 'accesorios', 'Prueba 1', '123456', 'portafolio_accesorios37.png', 'P', 1, 36, ''),
(38, 'accesorios', 'Conos', '', 'portafolio_accesorios38.jpg', '', 0, 0, 'NO'),
(39, 'accesorios', 'BT 67', '', 'portafolio_accesorios39.jpg', '', 1, 38, 'NO'),
(40, 'accesorios', 'CAT', '', 'portafolio_accesorios40.jpg', '', 1, 38, 'NO'),
(41, 'accesorios', 'Cono BT-ER', 'Cono Porta Pinza-Boquilla', 'portafolio_accesorios41.jpg', 'P', 2, 39, 'NO'),
(43, 'accesorios', 'Cono BT-SLA', 'Cono tipo Weldone para sujecion de herramientas con diametro desde 6mm   en el espigo de agarre', 'portafolio_accesorios43.jpg', 'P', 2, 39, 'NO'),
(44, 'accesorios', 'Cono BT-APU', 'Cono Portamandril de ajuste rapido\r\nPara sujecion de brocas', 'portafolio_accesorios44.jpg', 'P', 2, 39, 'NO'),
(45, 'accesorios', 'Cono BT- TER', 'Cono porta pinza para roscado rígido ', 'portafolio_accesorios45.jpg', 'P', 2, 39, 'NO'),
(46, 'accesorios', 'Cono BT-FMB', 'Cono PortaFresas', 'portafolio_accesorios46.jpg', 'P', 2, 39, 'NO'),
(47, 'accesorios', 'Cono BT-NBH', 'Cono mandrinador-alezador ', 'portafolio_accesorios47.jpg', 'P', 2, 39, 'NO'),
(48, 'accesorios', 'Cono BT- SLO', 'Cono tipo welldone\r\n Conexion Sistema de refrigeracion Interna', 'portafolio_accesorios48.jpg', 'P', 2, 39, 'NO'),
(49, 'accesorios', 'Cono CAT - ER', 'Cono Porta Pinza-Boquilla', 'portafolio_accesorios49.jpg', 'P', 2, 40, 'NO'),
(51, 'accesorios', 'Cono CAT - SM', 'Cono PortaFresa ', 'portafolio_accesorios51.jpg', 'P', 2, 40, 'NO'),
(52, 'accesorios', 'Cono CAT - APU', 'Cono porta Mandril de ajuste rapido\r\nPara sujecion de brocas', 'portafolio_accesorios52.jpg', 'P', 2, 40, 'NO'),
(53, 'accesorios', 'Cono CAT- TER', 'Cono Porta Pinza para roscado rigido', 'portafolio_accesorios53.jpg', 'P', 2, 40, 'NO'),
(54, 'accesorios', 'Cono CAT - NBH', 'Cono Mandrinador-alezador', 'portafolio_accesorios54.jpg', 'P', 2, 40, 'NO'),
(56, 'accesorios', 'Accesorios', '', 'portafolio_accesorios56.jpg', 'S', 0, 0, 'NO'),
(57, 'accesorios', 'Centrador ', 'Mecanico', 'portafolio_accesorios57.jpg', 'P', 1, 56, 'NO'),
(58, 'accesorios', 'Centrador', 'Electronico', 'portafolio_accesorios58.jpg', 'P', 1, 56, 'NO'),
(59, 'accesorios', 'PULL STUD', 'Para conos Tipo BT', 'portafolio_accesorios59.jpg', 'P', 1, 56, 'NO'),
(60, 'accesorios', 'Pull Stud', 'Para conos tipo Mazak BT40-BT50 Mazak', 'portafolio_accesorios60.jpg', 'P', 1, 56, 'NO'),
(61, 'accesorios', 'Pull Stud', 'Para Conos Tipo CAT', 'portafolio_accesorios61.jpg', 'P', 1, 56, 'NO'),
(62, 'accesorios', 'Camisas', 'Camisa para Conos serie SLO', 'portafolio_accesorios62.jpg', 'P', 1, 56, 'NO'),
(63, 'accesorios', 'Cono CAT - EM', 'Cono tipo welldone ', 'portafolio_accesorios63.jpg', 'P', 2, 40, 'NO'),
(64, 'accesorios', 'Cono BT-ADS', 'Cono Porta Boquilla balanceado a 30000RPM', 'portafolio_accesorios64.jpg', 'P', 2, 39, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_cab`
--

DROP TABLE IF EXISTS `portafolio_cab`;
CREATE TABLE IF NOT EXISTS `portafolio_cab` (
  `idportafolio_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idportafolio_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `portafolio_cab`
--

INSERT INTO `portafolio_cab` (`idportafolio_cab`, `idportafolio`, `nivel`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `imagen`) VALUES
(1, 27, 0, 'Diametro 1', 'Longutid 1', 'Tamaño 1', 'yyyy', '', '', '', '', '', '', 'portafolio_cab_1.jpg'),
(4, 7, 1, 'Col 1', 'COl 2', 'Col 3', 'Col 4', 'Col 5', '', '', '', '', '', 'portafolio_cab_1.jpg'),
(5, 8, 2, 'col 1AB', 'col 2AB', 'col 3AB', 'col 4AB', 'col 5AB', '', '', '', '', '', 'portafolio_cab_5.jpg'),
(6, 30, 1, 'Ref', 'col 1', '', '', '', '', '', '', '', '', 'portafolio_cab_6.jpg'),
(7, 37, 1, 'Opción 1', '2', '3', '', '', '', '', '', '', '', 'portafolio_cab_7.png'),
(8, 41, 2, 'Referencia', 'Rango de Sujecion', 'Longitud', 'Diametro', 'Tipo de Boquilla', '', '', '', '', '', 'portafolio_cab_8.jpg'),
(10, 43, 2, 'Referencia', 'Diametro Agujero', 'Diametro', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_10.jpg'),
(11, 44, 2, 'Referencia', 'Rango Sujecion', 'Diametro', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_11.jpg'),
(12, 45, 2, 'Referencia', 'Rango de Rosca', 'Diametro', 'Longitud', 'Boquilla-pinza', '', '', '', '', '', 'portafolio_cab_12.jpg'),
(13, 46, 2, 'Referencia', 'Diametro Cuña', 'Longitud', 'Diametro', 'Diametro Herramienta', '', '', '', '', '', 'portafolio_cab_13.jpg'),
(14, 47, 2, 'Referencia', 'Rango de Barras', 'Longitud Efectiva', 'Apreciacion', '', '', '', '', '', '', 'portafolio_cab_14.jpg'),
(15, 48, 2, 'Referencia', 'Diametro de Agujero', 'Diametro ', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_15.jpg'),
(16, 49, 2, 'Referencia ', 'Rango de Sujecion', 'Longitud', 'Diametro', 'Boquilla Tipo', '', '', '', '', '', 'portafolio_cab_16.jpg'),
(17, 50, 2, 'Referencia', 'Diametro Agujero', 'Diametro', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_17.jpg'),
(19, 51, 2, 'Referencia', 'Diametro Cuña', 'Diametro', 'Longitud', 'Longitud Cuña', '', '', '', '', '', 'portafolio_cab_19.jpg'),
(20, 52, 2, 'Referencia', 'Rango de Sujecion', 'Diametro', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_20.jpg'),
(21, 53, 2, 'Referencia', 'Rango de Rosca', 'Diametro', 'Longitud', 'Boquilla Tipo', '', '', '', '', '', 'portafolio_cab_21.jpg'),
(22, 54, 2, 'Referencia', 'Rango de Barras', 'Longitud Efectiva', 'Aperiacion', '', '', '', '', '', '', 'portafolio_cab_22.jpg'),
(24, 63, 2, 'Referencia', 'Fig n°', 'Diametro Agujero', 'Diametro', 'Longitud', '', '', '', '', '', 'portafolio_cab_24.jpg'),
(25, 55, 2, 'Referencia', 'FIG N°', 'Rango de Sujecion', 'Diametro', 'Longitud', 'Tipo de Boquilla', '', '', '', '', 'portafolio_cab_25.jpg'),
(27, 64, 2, 'Referencia', 'Fig n°', 'Rango de Sujecion', 'Diametro', 'Longitud', 'Tipo de Boquilla', '', '', '', '', 'portafolio_cab_26.jpg'),
(28, 57, 1, 'Referencia', 'Diametro', 'Longitud', 'figura', '', '', '', '', '', '', 'portafolio_cab_28.jpg'),
(30, 58, 1, 'Referencia', 'Diametro', 'Longitud Agarre', 'Longitud Efectiva', '', '', '', '', '', '', 'portafolio_cab_29.jpg'),
(31, 59, 1, 'REFERENCIA', 'LONGITUD', 'LONGITUD (L1)', 'DIAMETRO (D)', 'DIAMETRO (D1)', 'DIAMETRO (d1)', 'ANGULO ', '', '', '', 'portafolio_cab_31.jpg'),
(32, 60, 1, 'Referencia', 'Longitud', 'Longitud (L1)', 'Diametro (D)', 'Diametro (d)', 'Diametro  (d1)', 'Rosca', '', '', '', 'portafolio_cab_32.jpg'),
(33, 61, 1, 'Referencia', 'Tipo', 'Longitud', 'Longitud (L1)', 'Diametro (D)', 'Diametro (d)', 'Angulo', '', '', '', 'portafolio_cab_33.jpg'),
(34, 62, 1, 'Referencia', 'Diametro', 'Diametro Agujero', 'Longitud', '', '', '', '', '', '', 'portafolio_cab_34.jpg'),
(35, 65, 0, 'pRUEBA', 'Prueba', '', '', '', '', '', '', '', '', 'portafolio_cab_35.jpg'),
(36, 66, 0, 'Prueba', '', '', '', '', '', '', '', '', '', 'portafolio_cab_36.png'),
(37, 67, 0, 'Prueba', '', '', '', '', '', '', '', '', '', 'portafolio_cab_37.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_carburado_cab`
--

DROP TABLE IF EXISTS `portafolio_carburado_cab`;
CREATE TABLE IF NOT EXISTS `portafolio_carburado_cab` (
  `idportafolio_carburado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_carburado` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idportafolio_carburado_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `portafolio_carburado_cab`
--

INSERT INTO `portafolio_carburado_cab` (`idportafolio_carburado_cab`, `idportafolio_carburado`, `nivel`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `imagen`) VALUES
(1, 0, 0, 'Col 1', 'Col 2', '', '', '', '', '', '', '', '', 'portafolio_carburado_cab_1.jpg'),
(2, 19, 1, 'col A1', 'Col B1', 'Col C1', '', '', '', '', '', '', '', 'portafolio_carburado_cab_1.jpg'),
(3, 4, 1, 'REF 1', 'col 1', 'col 2', '', '', '', '', '', '', '', 'portafolio_carburado_cab_3.jpg'),
(4, 6, 2, 'REF', 'Col B1', 'Col c1', '', '', '', '', '', '', '', 'portafolio_carburado_cab_4.jpg'),
(5, 49, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud Filete', 'Longitud Efectiva', 'Longitud Total', 'N° de filos', '', '', '', 'portafolio_carburado_cab_5.jpg'),
(6, 50, 4, 'Referencia ', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud Filete', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_6.jpg'),
(7, 51, 4, 'Referencia', 'Diametro de Corte', 'Diametro de agarre', 'Longitud de Corte', 'Longitud Total', 'N° de filos', '', '', '', '', 'portafolio_carburado_cab_7.jpg'),
(8, 52, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud de Corte', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_8.jpg'),
(9, 53, 4, 'Referencia', 'Diametro Corte', 'Diametro Agarre', 'Longitud de Corte', 'Longitud Total ', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_9.jpg'),
(10, 54, 4, 'Referencia', 'Diametro Corte', 'Diametro Agarre', 'Longitud Corte', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_10.jpg'),
(11, 56, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud Filo', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_11.jpg'),
(12, 57, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud de Corte', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_12.jpg'),
(13, 58, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud de Corte', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_13.jpg'),
(14, 59, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud Filo', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_14.jpg'),
(15, 60, 4, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Filo', 'Longitud Efectiva', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_15.jpg'),
(16, 61, 4, 'Referencia', 'Diametro de Corte', 'Diametro de Agarre', 'Longitud Filo', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_16.jpg'),
(17, 62, 4, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total ', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_17.jpg'),
(19, 63, 4, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_18.jpg'),
(20, 64, 4, 'Referencia', 'Diametro de Corte ', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_20.jpg'),
(21, 65, 4, 'Referencia ', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_21.jpg'),
(22, 66, 4, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', '', 'portafolio_carburado_cab_22.jpg'),
(23, 69, 4, 'Referencia', 'Diametro de Corte ', 'Radio', 'Diametro Agarre', 'Longitud Filo', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_23.jpg'),
(24, 67, 4, 'Referencia', 'Diametro de Corte', 'Radio ', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_24.jpg'),
(25, 68, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_25.jpg'),
(26, 70, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_26.jpg'),
(27, 71, 4, 'Referencia', 'Diametro de Corte', 'Radio ', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_27.jpg'),
(28, 73, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Efectiva ', 'Longitud Total', '', '', '', 'portafolio_carburado_cab_28.jpg'),
(29, 74, 4, 'Referencia', 'Diametro de Corte', 'Radio ', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_29.jpg'),
(30, 75, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_30.jpg'),
(31, 76, 4, 'Referencia', 'Diametro de Corte', 'Radio ', 'Diametro de Agarre', 'Longitud Filos', 'Longitud Efectiva', 'Longitud Total', '', '', '', 'portafolio_carburado_cab_31.jpg'),
(32, 77, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_32.jpg'),
(33, 78, 4, 'Referencia', 'Diametro de Corte', 'Radio ', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_33.jpg'),
(34, 79, 4, 'Referencia', 'Diametro de Corte ', 'Radio', 'Diametro Agarre', 'Longitud Filo', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_34.jpg'),
(35, 80, 4, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_35.jpg'),
(36, 81, 4, 'Referencia ', 'Diametro de Corte', 'Radio', 'Diametro de Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Insertos', '', '', '', 'portafolio_carburado_cab_36.jpg'),
(37, 84, 3, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro de agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_37.jpg'),
(39, 82, 3, 'Referencia', 'Diametro de Corte', 'Radio', 'Diametro Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_39.jpg'),
(40, 83, 3, 'Referencia ', 'Diametro de Corte', 'Radio', 'Diametro de Agarre', 'Longitud Filos', 'Longitud Total', 'N° de Filos', '', '', '', 'portafolio_carburado_cab_40.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_carburo`
--

DROP TABLE IF EXISTS `portafolio_carburo`;
CREATE TABLE IF NOT EXISTS `portafolio_carburo` (
  `idportafolio_carburo` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(100) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `paso` varchar(2) NOT NULL,
  `nivel` int(11) NOT NULL,
  `idportafoliopadre` int(11) NOT NULL,
  PRIMARY KEY (`idportafolio_carburo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Volcado de datos para la tabla `portafolio_carburo`
--

INSERT INTO `portafolio_carburo` (`idportafolio_carburo`, `modulo`, `titulo`, `texto`, `imagen`, `paso`, `nivel`, `idportafoliopadre`) VALUES
(1, 'carburo', 'Carburo Sólido', '', 'portafolio_carburo1.jpg', 'S', 0, 1),
(2, 'carburo', 'Planos', '', 'portafolio_carburo2.jpg', '', 1, 1),
(5, 'carburo', 'Dos filos', '', 'portafolio_carburo5.jpg', '', 2, 2),
(6, 'carburo', 'Cuatro filos', '', 'portafolio_carburo6.jpg', '', 2, 2),
(8, 'carburo', 'Acero Endurecido', 'Escariador para trabajos en aceros con durezas hasta de 65 HRC', 'portafolio_carburo8.jpg', '', 3, 5),
(9, 'carburo', 'No Ferrosos', 'Escariador para trabajos en Aluminio y Materiales No Ferrosos', 'portafolio_carburo9.jpg', '', 3, 5),
(14, 'carburo', 'C', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo1.jpg', 'P', 5, 12),
(15, 'carburo', 'D', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo15.jpg', 'S', 5, 12),
(16, 'carburo', 'E', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo1.jpg', 'P', 6, 15),
(17, 'carburo', 'F', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo17.jpg', 'S', 6, 15),
(18, 'carburo', 'L', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo1.jpg', 'P', 7, 17),
(20, 'carburo', 'Subnivel 1', 'Lorem ipsum', 'portafolio_carburo5.jpg', 'P', 1, 0),
(22, 'carburo', 'Opcion 3', 'kjldkjldkj', 'portafolio_carburo12.jpg', 'S', 3, 21),
(23, 'carburo', 'opcion 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo14.jpg', 'S', 4, 22),
(24, 'carburo', 'Opcion 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo16.jpg', 'S', 5, 23),
(25, 'carburo', 'Opcion xxx', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo18.jpg', 'S', 6, 24),
(26, 'carburo', 'Opciones A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_carburo19.jpg', 'P', 7, 25),
(27, 'carburo', 'Esfericos', '', 'portafolio_carburo21.jpg', 'S', 1, 1),
(31, 'carburo', 'Toricas', '', 'portafolio_carburo28.jpg', 'S', 1, 1),
(33, 'carburo', 'Cuatro Filos', '', 'portafolio_carburo33.jpg', 'S', 2, 27),
(34, 'carburo', 'Aceros Molde', 'Escariador para trabajos en aceros con durezas inferiores a 50 HRC', 'portafolio_carburo34.jpg', 'S', 3, 33),
(35, 'carburo', 'Dos Filos', '', 'portafolio_carburo35.jpg', '', 2, 27),
(38, 'carburo', 'Acero Endurecido', 'Escariadores para trabajos en aceros con durezas hasta de 65 HRC', 'portafolio_carburo38.jpg', '', 3, 33),
(39, 'carburo', 'Aceros Molde', 'Escariador para trabajos en aceros con durezas inferiores a 50 HRC', 'portafolio_carburo39.jpg', 'S', 3, 6),
(40, 'carburo', 'Acero Endurecido', 'Escariador para trabajos en aceros con durezas hasta de 65 HRC', 'portafolio_carburo40.jpg', '', 3, 6),
(42, 'carburo', 'Aceros Molde', 'Escariador para trabajos en aceros con durezas inferiores a 50 HRC', 'portafolio_carburo42.jpg', 'S', 3, 35),
(43, 'carburo', 'Acero Endurecido', 'Escariador para trabajos en aceros con durezas hasta de 65 HRC', 'portafolio_carburo43.jpg', 'S', 3, 35),
(44, 'carburo', 'No Ferrosos', 'Escariador para trabajos en Aluminio y Materiales No Ferrosos', 'portafolio_carburo44.jpg', 'S', 3, 35),
(45, 'carburo', 'Aceros Molde', 'Escariador para trabajos en aceros con durezas inferiores a 50 HRC', 'portafolio_carburo36.jpg', '', 2, 31),
(46, 'carburo', 'Acero Endurecido', 'Escariadores para trabajos en aceros con durezas hasta de 65 HRC', 'portafolio_carburo46.jpg', '', 2, 31),
(48, 'carburo', 'Aceros Molde', 'Escariador para trabajos en aceros con durezas inferiores a 50 HRC', 'portafolio_carburo45.jpg', 'S', 3, 5),
(49, 'carburo', 'SFULNT', 'Fresa punta plana en carburo de tungsteno con recubrimiento \r\nGama Diametros de Corte Ø 0.5mm - Ø 4.0mm', 'portafolio_carburo49.jpg', 'P', 4, 8),
(50, 'carburo', 'SFUMIE', 'Fresa punta plana en carburo de tungsteno con recubrimiento \r\nGama Diametros de Corte Ø 0.5mm - Ø 4.0mm', 'portafolio_carburo50.jpg', 'P', 4, 8),
(51, 'carburo', 'SFUET', 'Fresa punta plana en carburo de tungsteno con recubrimiento \r\nGama Diametros de Corte Ø 1.0 mm - Ø 12.0mm', 'portafolio_carburo51.jpg', 'P', 4, 8),
(52, 'carburo', 'SFULET', 'Fresa punta plana en carburo de tungsteno con recubrimiento \r\nGama Diametros de Corte Ø 1.0mm - Ø 12.0mm', 'portafolio_carburo52.jpg', 'P', 4, 8),
(53, 'carburo', 'SLE - MLE', 'Fresa punta plana en carburo de tungsteno\r\nGama Diametros de Corte Ø 6.0mm -  Ø 12.0mm\r\n', 'portafolio_carburo53.jpg', 'P', 4, 9),
(54, 'carburo', 'MSE-SE-SSE', 'Fresa punta plana en carburo de tungsteno Gama Diametros de Corte Ø 1.0mm - Ø 12.0mm', 'portafolio_carburo54.jpg', 'P', 4, 9),
(56, 'carburo', 'MSE-SSE-SE', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo56.jpg', 'P', 4, 48),
(57, 'carburo', 'SLE-MLE', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø6.0mm - Ø12.0mm', 'portafolio_carburo57.jpg', 'P', 4, 48),
(58, 'carburo', 'LET', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo58.jpg', 'P', 4, 48),
(59, 'carburo', 'UMIE', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.2mm - Ø3.0mm', 'portafolio_carburo59.jpg', 'P', 4, 48),
(60, 'carburo', 'ULNT', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.5mm - Ø4.0mm', 'portafolio_carburo60.jpg', 'P', 4, 48),
(61, 'carburo', 'UET', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo61.jpg', 'P', 4, 48),
(62, 'carburo', 'SE-SSE-MSE', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo62.jpg', 'P', 4, 39),
(63, 'carburo', 'MLE-SLE', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜6.0mm - Ã˜12.0mm', 'portafolio_carburo63.jpg', 'P', 4, 39),
(64, 'carburo', 'LET', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜1.0mm - Ã˜12.0mm', 'portafolio_carburo64.jpg', 'P', 4, 39),
(65, 'carburo', 'SFUET', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã1.0mm - Ã12.0mm', 'portafolio_carburo65.jpg', 'P', 4, 40),
(66, 'carburo', 'SFULET', 'Fresa punta plana en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜1.0mm - Ã˜12.0mm', 'portafolio_carburo66.jpg', 'P', 4, 40),
(67, 'carburo', 'SB-SSB-MSB', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜ 1.0mm - Ã˜ 12.0mm\r\n', 'portafolio_carburo67.jpg', 'P', 4, 34),
(68, 'carburo', 'UBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜ 1.0mm - Ã˜ 12.0mm', 'portafolio_carburo68.jpg', 'P', 4, 34),
(69, 'carburo', 'SFUBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ã˜ 1.0mm - Ã˜ 12.0mm\r\n', 'portafolio_carburo69.jpg', 'P', 4, 38),
(70, 'carburo', 'SB-SSB-MSB', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo70.jpg', 'P', 4, 42),
(71, 'carburo', 'SLB-MLB-XLB', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo71.jpg', 'P', 4, 42),
(73, 'carburo', 'LNBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.5mm - Ø4.0mm', 'portafolio_carburo72.jpg', 'P', 4, 42),
(74, 'carburo', 'UBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo74.jpg', 'P', 4, 42),
(75, 'carburo', 'UMIB', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.3mm - Ø3.0mm', 'portafolio_carburo75.jpg', 'P', 4, 42),
(76, 'carburo', 'SFULNBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.5mm - Ø4.0mm', 'portafolio_carburo76.jpg', 'P', 4, 43),
(77, 'carburo', 'SFUBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo77.jpg', 'P', 4, 43),
(78, 'carburo', 'SFULBT', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo78.jpg', 'P', 4, 43),
(79, 'carburo', 'SFUMIB', 'Fresa punta esferica en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø0.3mm - Ø3.0mm', 'portafolio_carburo79.jpg', 'P', 4, 43),
(80, 'carburo', 'MSB-SB-SSB', 'Fresa punta plana en carburo de tungsteno Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo80.jpg', 'P', 4, 44),
(81, 'carburo', 'SLB-MLB-LLB', 'Fresa punta plana en carburo de tungsteno Gama Diametros de Corte Ø1.0mm - Ø12.0mm', 'portafolio_carburo81.jpg', 'P', 4, 44),
(82, 'carburo', 'RTA', 'Fresa punta plana con radio en sus esquinas en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø2.0mm - Ø12.0mm', 'portafolio_carburo49.jpg', 'P', 3, 45),
(83, 'carburo', 'URTA', 'Fresa punta plana con radio en sus esquinas en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø3.0mm - Ø12.0mm', 'portafolio_carburo83.jpg', 'P', 3, 45),
(84, 'carburo', 'SFURTA', 'Fresa punta plana con radio en sus esquinas en carburo de tungsteno con recubrimiento Gama Diametros de Corte Ø6.0mm - Ø12.0mm', 'portafolio_carburo84.jpg', 'P', 3, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_fresado`
--

DROP TABLE IF EXISTS `portafolio_fresado`;
CREATE TABLE IF NOT EXISTS `portafolio_fresado` (
  `idportafolio_fresado` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(100) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `paso` varchar(2) NOT NULL,
  `nivel` int(11) NOT NULL,
  `idportafoliopadre` int(11) NOT NULL,
  `orientacion` varchar(2) NOT NULL,
  PRIMARY KEY (`idportafolio_fresado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `portafolio_fresado`
--

INSERT INTO `portafolio_fresado` (`idportafolio_fresado`, `modulo`, `titulo`, `texto`, `imagen`, `paso`, `nivel`, `idportafoliopadre`, `orientacion`) VALUES
(5, 'fresado', 'Tipo 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios5.jpg', 'S', 1, 4, ''),
(6, 'fresado', 'Tipo 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios6.jpg', 'S', 1, 4, ''),
(8, 'fresado', 'Filo 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 2, 5, ''),
(9, 'fresado', 'Filo 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios9.jpg', 'S', 2, 5, ''),
(10, 'fresado', 'Filo 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios10.jpg', 'S', 2, 6, ''),
(11, 'fresado', 'Materiales 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 3, 9, ''),
(12, 'fresado', 'Materiales 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios12.jpg', 'S', 3, 9, ''),
(13, 'fresado', 'A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'S', 4, 12, ''),
(14, 'fresado', 'B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios14.jpg', 'S', 4, 12, ''),
(15, 'fresado', 'C', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios15.jpg', 'P', 4, 12, ''),
(16, 'fresado', 'D', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'S', 5, 13, ''),
(17, 'fresado', 'E', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios17.jpg', 'S', 5, 14, ''),
(18, 'fresado', 'F', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios18.jpg', 'P', 5, 14, ''),
(19, 'fresado', 'G', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 6, 17, ''),
(20, 'fresado', 'H', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios20.jpg', 'S', 6, 17, ''),
(21, 'fresado', 'I', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios1.jpg', 'P', 7, 20, ''),
(22, 'fresado', 'J', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_accesorios22.jpg', 'P', 7, 20, ''),
(24, 'fresado', 'Opcion 1-3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado7.jpg', 'P', 1, 23, ''),
(26, 'fresado', 'Opcion 4-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado11.jpg', 'S', 2, 25, ''),
(27, 'fresado', 'Opciones 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado13.jpg', 'S', 3, 26, ''),
(28, 'fresado', 'Opcion 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado16.jpg', 'S', 4, 27, ''),
(29, 'fresado', 'Opcion 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado19.jpg', 'S', 5, 28, ''),
(30, 'fresado', 'Opcion 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado21.jpg', 'S', 6, 29, ''),
(31, 'fresado', 'Opcion 9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'portafolio_fresado_fresado23.jpg', 'P', 7, 30, ''),
(34, 'fresado', 'Prueba1', 'fjdsjfk rjfnkjdsnfkjnfdk', 'portafolio_fresado_fresado25.png', 'P', 1, 33, ''),
(36, 'fresado', 'Planeado', '', 'portafolio_fresado_fresado1.jpg', 'S', 0, 0, 'NO'),
(37, 'fresado', 'Fresa de Planeado', '', 'portafolio_fresado_fresado35.jpg', 'S', 1, 36, 'NO'),
(38, 'fresado', 'Fresa de espigo', '', 'portafolio_fresado_fresado38.jpg', 'S', 1, 36, 'NO'),
(39, 'fresado', 'MFPN', '', 'portafolio_fresado_fresado39.jpg', 'P', 2, 37, 'NO'),
(43, 'fresado', 'MFPN', '', 'portafolio_fresado_fresado43.jpg', 'P', 2, 38, 'NO'),
(44, 'fresado', 'MFWN', '', 'portafolio_fresado_fresado44.jpg', 'P', 2, 38, 'NO'),
(45, 'fresado', 'Escuadrado y Ranurado', '', 'portafolio_fresado_fresado45.jpg', '', 0, 0, 'NO'),
(46, 'fresado', 'Copiado', '', 'portafolio_fresado_fresado46.jpg', 'S', 0, 0, ''),
(49, 'fresado', 'Fresa  Tipo Piña', '', 'portafolio_fresado_fresado49.jpg', 'S', 1, 45, ''),
(50, 'fresado', 'Fresa de Espigo', '', 'portafolio_fresado_fresado50.jpg', 'S', 1, 45, ''),
(51, 'fresado', 'MFWN', '', 'portafolio_fresado_fresado51.jpg', 'P', 2, 49, 'NO'),
(54, 'fresado', 'MEW', '', 'portafolio_fresado_fresado52.jpg', 'P', 2, 50, 'NO'),
(55, 'fresado', 'MFWN', '', 'portafolio_fresado_fresado55.jpg', 'P', 2, 37, 'NO'),
(56, 'fresado', 'MEW', '', 'portafolio_fresado_fresado56.jpg', 'P', 2, 38, 'NO'),
(57, 'fresado', 'MECX', '', 'portafolio_fresado_fresado57.jpg', 'P', 2, 38, 'NO'),
(58, 'fresado', 'MEC', '', 'portafolio_fresado_fresado58.jpg', 'P', 2, 38, 'NO'),
(59, 'fresado', 'MECH', '', 'portafolio_fresado_fresado59.jpg', 'P', 2, 38, 'NO'),
(60, 'fresado', 'MFWN', '', 'portafolio_fresado_fresado60.jpg', 'P', 2, 50, 'NO'),
(61, 'fresado', 'MECX', '', 'portafolio_fresado_fresado61.jpg', 'P', 2, 50, 'NO'),
(62, 'fresado', 'MEC', '', 'portafolio_fresado_fresado62.jpg', 'P', 2, 50, 'NO'),
(63, 'fresado', 'MECH', '', 'portafolio_fresado_fresado63.jpg', 'P', 2, 50, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_fresado_cab`
--

DROP TABLE IF EXISTS `portafolio_fresado_cab`;
CREATE TABLE IF NOT EXISTS `portafolio_fresado_cab` (
  `idportafolio_fresado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_fresado` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`idportafolio_fresado_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `portafolio_fresado_cab`
--

INSERT INTO `portafolio_fresado_cab` (`idportafolio_fresado_cab`, `idportafolio_fresado`, `nivel`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `imagen`) VALUES
(1, 1, 0, 'col A', 'Col B', 'Col C', 'Col D', 'Col E', '', '', '', '', '', 'portafolio_fresado_cab_1.jpg'),
(2, 7, 1, 'Col 1', 'Col 2', 'Col 3', '', '', '', '', '', '', '', 'portafolio_fresado_cab_1.jpg'),
(3, 3, 0, 'Col AA', 'Col BB', 'Col CC', '', '', '', '', '', '', '', 'portafolio_fresado_cab_3.jpg'),
(4, 8, 2, 'REF ', 'Diam', '', '', '', '', '', '', '', '', 'portafolio_fresado_cab_4.jpg'),
(5, 34, 1, 'Diametro', 'Longitud', 'No de espigo', '', '', '', '', '', '', '', 'portafolio_fresado_cab_5.png'),
(6, 39, 2, 'Referencia', 'Diametro de Corte', 'Diametro Cuña', 'Angulo de Ataque', 'N° de Insertos', 'Inserto', '', '', '', '', 'portafolio_fresado_cab_6.jpg'),
(7, 55, 2, 'Referencia', 'Diametro Corte', 'Diametro Cuña', 'N° de Insertos', 'Angulo de Ataque', 'Inserto', '', '', '', '', 'portafolio_fresado_cab_7.jpg'),
(8, 43, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'Angulo Ataque', 'N° de Insertos', 'Inserto', '', '', '', 'portafolio_fresado_cab_8.jpg'),
(9, 44, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'Angulo Ataque', 'N° de Insertos', 'Inserto', '', '', '', 'portafolio_fresado_cab_9.jpg'),
(10, 51, 2, 'Referencia ', 'Diametro de Corte', 'Diametro Cuña', 'N° de Insertos', 'Angulo de Ataque ', 'Inserto', '', '', '', '', 'portafolio_fresado_cab_10.jpg'),
(11, 54, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° de Insertos', 'Angulo Ataque', 'Inserto', '', '', '', 'portafolio_fresado_cab_11.jpg'),
(12, 60, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° de Insertos', 'Angulo Ataque ', 'Inserto', '', '', '', 'portafolio_fresado_cab_12.jpg'),
(13, 61, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° de Insertos', 'Angulo Ataque', 'Inserto', '', '', '', 'portafolio_fresado_cab_13.jpg'),
(14, 62, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° de Insertos', 'Angulos Ataque', 'Inserto', '', '', '', 'portafolio_fresado_cab_14.jpg'),
(15, 63, 2, 'Referencia ', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Corte', 'Longitud Total', 'N° de Insertos', 'Insertos', '', '', '', 'portafolio_fresado_cab_15.jpg'),
(16, 56, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° Insertos ', 'Angulo Ataque', 'Inserto', '', '', '', 'portafolio_fresado_cab_16.jpg'),
(17, 57, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° Insertos', 'Angulo Ataque', 'Insertos', '', '', '', 'portafolio_fresado_cab_17.jpg'),
(18, 58, 2, 'Referencia ', 'Diametro de Corte', 'Diametro Agarre', 'Longitud Total', 'N° de Insertos', 'Angulo Ataque', 'Inserto', '', '', '', 'portafolio_fresado_cab_18.jpg'),
(19, 59, 2, 'Referencia', 'Diametro de Corte', 'Diametro Agarre', 'Longitud de Corte', 'Longitud Total', 'N° de Insertos ', 'Inserto', '', '', '', 'portafolio_fresado_cab_19.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio_servicios`
--

DROP TABLE IF EXISTS `portafolio_servicios`;
CREATE TABLE IF NOT EXISTS `portafolio_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(222) NOT NULL,
  `texto` varchar(222) NOT NULL,
  `imagen` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `portafolio_servicios`
--

INSERT INTO `portafolio_servicios` (`id`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Torneado', 'Prueba<br>', 'portafolio_servicios_1.jpg'),
(2, 'Taladrado', '', 'portafolio_servicios_2.jpg'),
(3, 'Fresado', '', 'portafolio_servicios_3.jpg'),
(4, 'Accesorios', '', 'portafolio_servicios_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portaherramienta`
--

DROP TABLE IF EXISTS `portaherramienta`;
CREATE TABLE IF NOT EXISTS `portaherramienta` (
  `idportaherramienta` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(100) NOT NULL,
  `idmodulo` int(11) NOT NULL,
  `nom_columna` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idportaherramienta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `portaherramienta`
--

INSERT INTO `portaherramienta` (`idportaherramienta`, `modulo`, `idmodulo`, `nom_columna`) VALUES
(1, 'taladrado', 1, 'Diam. De corte'),
(2, 'taladrado', 1, 'Diam de espigo'),
(3, 'taladrado', 1, 'Long total'),
(4, 'taladrado', 1, 'No de insertos'),
(5, 'taladrado', 1, 'Insertos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_accesorio`
--

DROP TABLE IF EXISTS `porta_accesorio`;
CREATE TABLE IF NOT EXISTS `porta_accesorio` (
  `idporta_accesorio` int(11) NOT NULL AUTO_INCREMENT,
  `idaccesorio` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `diametro` varchar(100) NOT NULL,
  `tipo_boquilla` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_accesorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `porta_accesorio`
--

INSERT INTO `porta_accesorio` (`idporta_accesorio`, `idaccesorio`, `ref`, `longitud`, `diametro`, `tipo_boquilla`, `valor`) VALUES
(18, 1, '111', 'a1', 'b1', 'c1', 100),
(19, 1, '2222', 'a2', 'b2', 'c2', 200),
(20, 1, '4333', 'a3', 'b3', 'c3', 300),
(21, 1, '6444', 'a4', 'b4', 'c4', 400),
(22, 1, '8555', 'a5', 'b5', 'c5', 500),
(23, 1, '10666', 'a6', 'b6', 'c6', 600),
(24, 1, '12777', 'a7', 'b7', 'c7', 700),
(25, 1, '14888', 'a8', 'b8', 'c8', 800),
(26, 1, '16999', 'a9', 'b9', 'c9', 900),
(27, 1, '19110', 'a10', 'b10', 'c10', 1000),
(28, 1, '21221', 'a11', 'b11', 'c11', 1100),
(29, 1, '23332', 'a12', 'b12', 'c12', 1200),
(30, 1, '25443', 'a13', 'b13', 'c13', 1300),
(31, 1, '27554', 'a14', 'b14', 'c14', 1400),
(32, 1, '29665', 'a15', 'b15', 'c15', 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_alesado`
--

DROP TABLE IF EXISTS `porta_alesado`;
CREATE TABLE IF NOT EXISTS `porta_alesado` (
  `idporta_alesado` int(11) NOT NULL AUTO_INCREMENT,
  `idalesado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_ajugero` varchar(100) NOT NULL,
  `diam_barra` varchar(100) NOT NULL,
  `long_barra` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_alesado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `porta_alesado`
--

INSERT INTO `porta_alesado` (`idporta_alesado`, `idalesado`, `ref`, `diam_ajugero`, `diam_barra`, `long_barra`, `inserto`, `valor`) VALUES
(2, 1, 'yy1', 'a1', 'b1', 'c1', 'd1', 100),
(21, 1, '111', 'a1', 'b1', 'c1', 'd1', 100),
(22, 1, '222', 'a2', 'b2', 'c2', 'd2', 200),
(23, 1, '333', 'a3', 'b3', 'c3', 'd3', 300),
(24, 1, '444', 'a4', 'b4', 'c4', 'd4', 400),
(25, 1, '555', 'a5', 'b5', 'c5', 'd5', 500),
(26, 1, '666', 'a6', 'b6', 'c6', 'd6', 600),
(27, 1, '777', 'a7', 'b7', 'c7', 'd7', 700),
(28, 1, '888', 'a8', 'b8', 'c8', 'd8', 800),
(29, 1, '999', 'a9', 'b9', 'c9', 'd9', 900),
(30, 1, '1110', 'a10', 'b10', 'c10', 'd10', 1000),
(31, 1, '1221', 'a11', 'b11', 'c11', 'd11', 1100),
(32, 1, '1332', 'a12', 'b12', 'c12', 'd12', 1200),
(33, 1, '1443', 'a13', 'b13', 'c13', 'd13', 1300),
(34, 1, '1554', 'a14', 'b14', 'c14', 'd14', 1400),
(35, 1, '1665', 'a15', 'b15', 'c15', 'd15', 1500),
(36, 1, '1776', 'a16', 'b16', 'c16', 'd16', 1600),
(37, 1, '1887', 'a17', 'b17', 'c17', 'd17', 1700),
(38, 1, '1998', 'a18', 'b18', 'c18', 'd18', 1800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_cilindrado`
--

DROP TABLE IF EXISTS `porta_cilindrado`;
CREATE TABLE IF NOT EXISTS `porta_cilindrado` (
  `idporta_cilindrado` int(11) NOT NULL AUTO_INCREMENT,
  `idcilindrado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `tamano` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  `idmaterial` varchar(2) NOT NULL,
  `idgeometria` varchar(2) NOT NULL,
  PRIMARY KEY (`idporta_cilindrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `porta_cilindrado`
--

INSERT INTO `porta_cilindrado` (`idporta_cilindrado`, `idcilindrado`, `ref`, `tamano`, `longitud`, `valor`, `idmaterial`, `idgeometria`) VALUES
(21, 1, '222', '2a', '2b', 200, 'k', ''),
(22, 1, '333', '3a', '1b', 300, 'k', ''),
(23, 1, '444', '4a', '2b', 400, 'p', ''),
(24, 1, '555', '5a', '1b', 500, 'p', ''),
(25, 1, '666', '6a', '2b', 600, 'p', ''),
(26, 1, '777', '7a', '1b', 700, 'm', ''),
(27, 1, '888', '8a', '2b', 800, 'n', ''),
(28, 1, '999', '9a', '1b', 900, 'm', ''),
(29, 1, '1110', '10a', '2b', 1000, 'k', ''),
(30, 1, '1221', '11a', '1b', 1100, 'm', ''),
(31, 1, '1332', '12a', '2b', 1200, 'p', ''),
(32, 1, '1443', '13a', '1b', 1300, 'k', ''),
(33, 1, '1554', '14a', '2b', 1400, 'k', ''),
(34, 1, '1665', '15a', '1b', 1500, 'k', ''),
(35, 1, '1776', '16a', '2b', 1600, 'm', ''),
(36, 1, '1887', '17a', '1b', 1700, 'p', ''),
(37, 1, '22', '2', '2', 222, '', 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_conos`
--

DROP TABLE IF EXISTS `porta_conos`;
CREATE TABLE IF NOT EXISTS `porta_conos` (
  `idporta_conos` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos_conos` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `diametro` varchar(100) NOT NULL,
  `tipo_boquilla` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_conos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `porta_conos`
--

INSERT INTO `porta_conos` (`idporta_conos`, `idproductos_conos`, `ref`, `longitud`, `diametro`, `tipo_boquilla`, `valor`) VALUES
(34, 1, 'xxx', '1', '2', '3', 100),
(35, 1, '111', 'a1', 'b1', 'c1', 100),
(36, 1, '2222', 'a2', 'b2', 'c2', 200),
(37, 1, '4333', 'a3', 'b3', 'c3', 300),
(38, 1, '6444', 'a4', 'b4', 'c4', 400),
(39, 1, '8555', 'a5', 'b5', 'c5', 500),
(40, 1, '10666', 'a6', 'b6', 'c6', 600),
(41, 1, '12777', 'a7', 'b7', 'c7', 700),
(42, 1, '14888', 'a8', 'b8', 'c8', 800),
(43, 1, '16999', 'a9', 'b9', 'c9', 900),
(44, 1, '19110', 'a10', 'b10', 'c10', 1000),
(45, 1, '21221', 'a11', 'b11', 'c11', 1100),
(46, 1, '23332', 'a12', 'b12', 'c12', 1200),
(47, 1, '25443', 'a13', 'b13', 'c13', 1300),
(48, 1, '27554', 'a14', 'b14', 'c14', 1400),
(49, 1, '29665', 'a15', 'b15', 'c15', 1500),
(50, 2, '111', 'a1', 'b1', 'c1', 100),
(51, 2, '2222', 'a2', 'b2', 'c2', 200),
(52, 2, '4333', 'a3', 'b3', 'c3', 300),
(53, 2, '6444', 'a4', 'b4', 'c4', 400),
(54, 2, '8555', 'a5', 'b5', 'c5', 500),
(55, 2, '10666', 'a6', 'b6', 'c6', 600),
(56, 2, '12777', 'a7', 'b7', 'c7', 700),
(57, 2, '14888', 'a8', 'b8', 'c8', 800),
(58, 2, '16999', 'a9', 'b9', 'c9', 900),
(59, 2, '19110', 'a10', 'b10', 'c10', 1000),
(60, 2, '21221', 'a11', 'b11', 'c11', 1100),
(61, 2, '23332', 'a12', 'b12', 'c12', 1200),
(62, 2, '25443', 'a13', 'b13', 'c13', 1300),
(63, 2, '27554', 'a14', 'b14', 'c14', 1400),
(64, 2, '29665', 'a15', 'b15', 'c15', 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_copiado`
--

DROP TABLE IF EXISTS `porta_copiado`;
CREATE TABLE IF NOT EXISTS `porta_copiado` (
  `idporta_copiado` int(11) NOT NULL AUTO_INCREMENT,
  `idcopiado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `n_insertos` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_copiado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `porta_copiado`
--

INSERT INTO `porta_copiado` (`idporta_copiado`, `idcopiado`, `ref`, `diam_corte`, `diam_espigo`, `long_total`, `n_insertos`, `inserto`, `valor`) VALUES
(10, 1, 'ref', '1', '2', '3', '4', '5', 100),
(11, 1, '111', 'a1', 'b1', 'c1', 'd1', 'f1', 100),
(12, 1, '222', 'a2', 'b2', 'c2', 'd2', 'f2', 200),
(13, 1, '333', 'a3', 'b3', 'c3', 'd3', 'f3', 300),
(14, 1, '444', 'a4', 'b4', 'c4', 'd4', 'f4', 400),
(15, 1, '555', 'a5', 'b5', 'c5', 'd5', 'f5', 500),
(16, 1, '666', 'a6', 'b6', 'c6', 'd6', 'f6', 600),
(17, 1, '777', 'a7', 'b7', 'c7', 'd7', 'f7', 700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_cuerpo`
--

DROP TABLE IF EXISTS `porta_cuerpo`;
CREATE TABLE IF NOT EXISTS `porta_cuerpo` (
  `idporta_cuerpo` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(45) DEFAULT NULL,
  `idportaherramienta` int(11) DEFAULT NULL,
  `valor_col` varchar(100) DEFAULT NULL,
  `orientacion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idporta_cuerpo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_escuadrado`
--

DROP TABLE IF EXISTS `porta_escuadrado`;
CREATE TABLE IF NOT EXISTS `porta_escuadrado` (
  `idporta_escuadrado` int(11) NOT NULL AUTO_INCREMENT,
  `idescuadrado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `n_insertos` varchar(100) NOT NULL,
  `angulo_ataque` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_escuadrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `porta_escuadrado`
--

INSERT INTO `porta_escuadrado` (`idporta_escuadrado`, `idescuadrado`, `ref`, `diam_corte`, `diam_espigo`, `long_total`, `n_insertos`, `angulo_ataque`, `inserto`, `valor`) VALUES
(9, 1, 'REF', '1', '2', '3', '4', '5', '6', 100),
(10, 1, '111', 'A1', 'B1', 'C1', 'D1', 'E1', 'F1', 100),
(11, 1, '222', 'A2', 'B2', 'C2', 'C3', 'E3', 'F3', 200),
(12, 1, '333', 'A3', 'B3', 'C3', 'D2', 'E5', 'F5', 300),
(13, 1, '444', 'A4', 'B4', 'C4', 'C3', 'E7', 'F7', 400),
(14, 1, '555', 'A5', 'B5', 'C5', 'D3', 'E9', 'F9', 500),
(15, 1, '666', 'A6', 'B6', 'C6', 'C3', 'E11', 'F11', 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_planchado`
--

DROP TABLE IF EXISTS `porta_planchado`;
CREATE TABLE IF NOT EXISTS `porta_planchado` (
  `idporta_planchado` int(11) NOT NULL AUTO_INCREMENT,
  `idplanchado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `n_insertos` varchar(100) NOT NULL,
  `angulo_ataque` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_planchado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `porta_planchado`
--

INSERT INTO `porta_planchado` (`idporta_planchado`, `idplanchado`, `ref`, `diam_corte`, `diam_espigo`, `long_total`, `n_insertos`, `angulo_ataque`, `inserto`, `valor`) VALUES
(26, 1, '2220', 'a20', 'b20', 'c20', 'd20', 'e20', 'f20', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_portafolio_cab`
--

DROP TABLE IF EXISTS `porta_portafolio_cab`;
CREATE TABLE IF NOT EXISTS `porta_portafolio_cab` (
  `idporta_portafolio_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_cab` int(11) NOT NULL,
  `col1` varchar(50) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_portafolio_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=871 ;

--
-- Volcado de datos para la tabla `porta_portafolio_cab`
--

INSERT INTO `porta_portafolio_cab` (`idporta_portafolio_cab`, `idportafolio_cab`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `valor`) VALUES
(1, 1, 'xx', 'YY', 'ZZ', 'PP', '', '', '', '', '', '', 100),
(2, 1, 'xxx', 'a1', 'b1', 'c1', '', '', '', '', '', '', 100),
(3, 1, 'yyy', 'a2', 'b2', 'c2', '', '', '', '', '', '', 200),
(4, 1, 'xxx', 'a3', 'b3', 'c3', '', '', '', '', '', '', 300),
(5, 1, 'yyy', 'a4', 'b4', 'c4', '', '', '', '', '', '', 400),
(6, 1, 'xxx', 'a5', 'b5', 'c5', '', '', '', '', '', '', 500),
(7, 1, 'yyy', 'a6', 'b6', 'c6', '', '', '', '', '', '', 600),
(8, 1, 'xxx', 'a7', 'b7', 'c7', '', '', '', '', '', '', 700),
(9, 1, 'yyy', 'a8', 'b8', 'c8', '', '', '', '', '', '', 800),
(10, 4, '1', '2', '3', '4', '5', '', '', '', '', '', 6),
(11, 4, '9', '8', '7', '6', '5', '', '', '', '', '', 250),
(12, 4, 'xxx', 'a1', 'b1', 'c1', '', '', '', '', '', '', 100),
(13, 4, 'yyy', 'a2', 'b2', 'c2', '', '', '', '', '', '', 200),
(14, 4, 'xxx', 'a3', 'b3', 'c3', '', '', '', '', '', '', 300),
(15, 4, 'yyy', 'a4', 'b4', 'c4', '', '', '', '', '', '', 400),
(16, 4, 'xxx', 'a5', 'b5', 'c5', '', '', '', '', '', '', 500),
(17, 4, 'yyy', 'a6', 'b6', 'c6', '', '', '', '', '', '', 600),
(18, 4, 'xxx', 'a7', 'b7', 'c7', '', '', '', '', '', '', 700),
(19, 4, 'yyy', 'a8', 'b8', 'c8', '', '', '', '', '', '', 800),
(20, 5, '1', '2', '3', '4', '5', '', '', '', '', '', 200),
(253, 8, 'BT40-ER11-70', '1 - 7 mm', '70 mm', '19 mm', 'ER11', '', '', '', '', '', 0),
(254, 8, 'BT40-ER11-100', '1 - 7 mm', '100 mm', '19 mm', 'ER11', '', '', '', '', '', 0),
(255, 8, 'BT40-ER16-70', '1 - 10 mm', '70 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(256, 8, 'BT40-ER16-100', '1 - 10 mm', '100 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(257, 8, 'BT40-ER16-150', '1 - 10 mm', '150 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(258, 8, 'BT40-ER20-80', '1 - 13 mm', '80 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(259, 8, 'BT40-ER20-100', '1 - 13 mm', '100 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(260, 8, 'BT40-ER20-150', '1 - 13 mm', '150 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(261, 8, 'BT40-ER25-80', '1 - 16 mm', '80 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(262, 8, 'BT40-ER25-100', '1 - 16 mm', '100 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(263, 8, 'BT40-ER32-60', '3 - 20 mm', '60 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(264, 8, 'BT40-ER32-70', '3 - 20 mm', '70 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(265, 8, 'BT40-ER32-100', '3 - 20 mm', '100 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(266, 8, 'BT40-ER32-150', '3 - 20 mm', '150 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(267, 8, 'BT40-ER40-80', '4 - 26 mm', '80 mm', '63 mm', 'ER40', '', '', '', '', '', 0),
(268, 8, 'BT40-ER40-100', '4 - 26 mm', '100 mm', '53 mm', 'ER40', '', '', '', '', '', 0),
(269, 8, 'BT50-ER16-100', '1 - 10 mm', '100 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(270, 8, 'BT50-ER16-150', '1 - 10 mm', '150 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(271, 8, 'BT50-ER16-200', '1 - 10 mm', '200 mm', '28 mm', 'ER16', '', '', '', '', '', 0),
(272, 8, 'BT50-ER20-100', '1 - 13 mm', '100 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(273, 8, 'BT50-ER20-150', '1 - 13 mm', '150 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(274, 8, 'BT50-ER20-200', '1 - 13 mm', '200 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(275, 8, 'BT50-ER20-250', '1 - 13 mm', '250 mm', '34 mm', 'ER20', '', '', '', '', '', 0),
(276, 8, 'BT50-ER25-100', '1 - 16 mm', '100 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(277, 8, 'BT50-ER25-150', '1 - 16 mm', '150 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(278, 8, 'BT50-ER25-200', '1 - 16 mm', '200 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(279, 8, 'BT50-ER25-250', '1 - 16 mm', '250 mm', '42 mm', 'ER25', '', '', '', '', '', 0),
(280, 8, 'BT50-ER32-100', '3 - 20 mm', '100 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(281, 8, 'BT50-ER32-150', '3 - 20 mm', '150 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(282, 8, 'BT50-ER32-200', '3 - 20 mm', '200 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(283, 8, 'BT50-ER32-250', '3 - 20 mm', '250 mm', '50 mm', 'ER32', '', '', '', '', '', 0),
(284, 8, 'BT50-ER40-80', '4 - 26 mm', '80 mm', '63 mm', 'ER40', '', '', '', '', '', 0),
(285, 8, 'BT50-ER40-100', '4 - 26 mm', '100 mm', '63 mm', 'ER40', '', '', '', '', '', 0),
(286, 8, 'BT50-ER40-150', '4 - 26 mm', '150 mm', '63 mm', 'ER40', '', '', '', '', '', 0),
(287, 8, 'BT50-ER40-200', '4 - 26 mm', '200 mm', '63 mm', 'ER40', '', '', '', '', '', 0),
(474, 10, 'BT50-SLA50.8-150', '50.8 mm', '95 mm', '150 mm', '', '', '', '', '', '', 0),
(483, 12, 'BT40-TER16', 'M4 - M10', '28 mm', '77  mm', 'ER16', '', '', '', '', '', 0),
(484, 12, 'BT40-TER20', 'M4 - M12', '34 mm', '86 mm', 'ER20', '', '', '', '', '', 0),
(485, 12, 'BT40-TER25', 'M4 - M18', '42 mm', '90 mm', 'ER25', '', '', '', '', '', 0),
(486, 12, 'BT40-TER32', 'M4 - M22', '50 mm', '94 mm', 'ER32', '', '', '', '', '', 0),
(487, 12, 'BT40-TER40', 'M6 - M27', '63 mm', '98 mm', 'ER40', '', '', '', '', '', 0),
(488, 12, 'BT50-TER16', 'M4 - M10', '28 mm', '80 mm', 'ER16', '', '', '', '', '', 0),
(489, 12, 'BT50-TER20', 'M4 - M12', '34 mm', '99 mm', 'ER20', '', '', '', '', '', 0),
(490, 12, 'BT50-TER25', 'M4 - M18', '42 mm', '97 mm', 'ER25', '', '', '', '', '', 0),
(491, 12, 'BT50-TER32', 'M4 - M22', '50 mm', '95 mm', 'ER32', '', '', '', '', '', 0),
(492, 12, 'BT50-TER40', 'M6 - M57', '63 mm', '117 mm', 'ER40', '', '', '', '', '', 0),
(526, 14, 'BT40-NBH2084', '08 - 280 mm', '83 mm', '0.01 mm', '', '', '', '', '', '', 0),
(527, 14, 'BT50-NBH2084', '08 - 280 mm', '83 mm', '0.01 mm', '', '', '', '', '', '', 0),
(528, 15, 'BT40-SLO32-150', '32 mm', '53 mm', '145 mm', '', '', '', '', '', '', 0),
(529, 15, 'BT40-SLO40-150', '40 mm', '70 mm', '150 mm', '', '', '', '', '', '', 0),
(530, 15, 'BT50-SLO32-160', '32 mm', '54 mm', '160 mm', '', '', '', '', '', '', 0),
(531, 15, 'BT50-SLO40-160', '40 mm', '64 mm', '160 mm', '', '', '', '', '', '', 0),
(532, 10, 'BT40-SLA06-075', '6 mm', '25 mm', '75 mm', '', '', '', '', '', '', 0),
(533, 10, 'BT40-SLA06-100', '6 mm', '25 mm', '100 mm', '', '', '', '', '', '', 0),
(534, 10, 'BT40-SLA08-075', '8 mm', '28 mm', '75 mm', '', '', '', '', '', '', 0),
(535, 10, 'BT40-SLA08-100', '8 mm', '28 mm', '100 mm', '', '', '', '', '', '', 0),
(536, 10, 'BT40-SLA10-075', '10 mm', '35 mm', '75 mm', '', '', '', '', '', '', 0),
(537, 10, 'BT40-SLA10-100', '10 mm', '35 mm', '100 mm', '', '', '', '', '', '', 0),
(538, 10, 'BT40-SLA12-075', '12 mm', '40 mm', '75 mm', '', '', '', '', '', '', 0),
(539, 10, 'BT40-SLA12-100', '12 mm', '40 mm', '100 mm', '', '', '', '', '', '', 0),
(540, 10, 'BT40-SLA14-075', '14 mm', '42 mm', '75 mm', '', '', '', '', '', '', 0),
(541, 10, 'BT40-SLA14-100', '14 mm', '42 mm', '100 mm', '', '', '', '', '', '', 0),
(542, 10, 'BT40-SLA16-075', '16 mm', '45 mm', '75 mm', '', '', '', '', '', '', 0),
(543, 10, 'BT40-SLA16-100', '16 mm', '45 mm', '100 mm', '', '', '', '', '', '', 0),
(544, 10, 'BT40-SLA18-075', '18 mm', '48 mm', '75 mm', '', '', '', '', '', '', 0),
(545, 10, 'BT40-SLA18-100', '18 mm', '48 mm', '100 mm', '', '', '', '', '', '', 0),
(546, 10, 'BT40-SLA20-075', '20 mm', '50 mm', '75 mm', '', '', '', '', '', '', 0),
(547, 10, 'BT40-SLA20-100', '20 mm', '50 mm', '100 mm', '', '', '', '', '', '', 0),
(548, 10, 'BT40-SLA25-075', '25 mm', '55 mm', '75 mm', '', '', '', '', '', '', 0),
(549, 10, 'BT40-SLA25-100', '25 mm', '55 mm', '100 mm', '', '', '', '', '', '', 0),
(550, 10, 'BT40-SLA32-090', '32 mm', '60 mm', '90 mm', '', '', '', '', '', '', 0),
(551, 10, 'BT40-SLA40-105', '40 mm', '80 mm', '105 mm', '', '', '', '', '', '', 0),
(552, 10, 'BT40-SLA42-105', '42 mm', '80 mm', '105 mm', '', '', '', '', '', '', 0),
(553, 10, 'BT50-SLA06-105', '6 mm', '25 mm', '105 mm', '', '', '', '', '', '', 0),
(554, 10, 'BT50-SLA08-105', '8 mm', '28 mm', '105 mm', '', '', '', '', '', '', 0),
(555, 10, 'BT50-SLA10-105', '10 mm', '35 mm', '105 mm', '', '', '', '', '', '', 0),
(556, 10, 'BT50-SLA12-105', '12 mm', '40 mm', '105 mm', '', '', '', '', '', '', 0),
(557, 10, 'BT50-SLA14-105', '14 mm', '42 mm', '105 mm', '', '', '', '', '', '', 0),
(558, 10, 'BT50-SLA16-105', '16 mm', '45 mm', '105 mm', '', '', '', '', '', '', 0),
(559, 10, 'BT50-SLA18-105', '18 mm', '48 mm', '105 mm', '', '', '', '', '', '', 0),
(560, 10, 'BT50-SLA20-105', '20 mm', '50 mm', '105 mm', '', '', '', '', '', '', 0),
(561, 10, 'BT50-SLA20-150', '20 mm', '50 mm', '150 mm', '', '', '', '', '', '', 0),
(562, 10, 'BT50-SLA25-105', '25 mm', '55 mm', '105 mm', '', '', '', '', '', '', 0),
(563, 10, 'BT50-SLA25-150', '25 mm', '55 mm', '150 mm', '', '', '', '', '', '', 0),
(564, 10, 'BT50-SLA25-200', '25 mm', '55 mm', '200 mm', '', '', '', '', '', '', 0),
(565, 10, 'BT50-SLA25-250', '25 mm', '55 mm', '250 mm', '', '', '', '', '', '', 0),
(566, 10, 'BT50-SLA32-105', '32 mm', '60 mm', '105 mm', '', '', '', '', '', '', 0),
(567, 10, 'BT50-SLA32-150', '32 mm', '60 mm', '150 mm', '', '', '', '', '', '', 0),
(568, 10, 'BT50-SLA32-200', '32 mm', '60 mm', '200 mm', '', '', '', '', '', '', 0),
(569, 10, 'BT50-SLA32-250', '32 mm', '60 mm', '250 mm', '', '', '', '', '', '', 0),
(570, 10, 'BT50-SLA40-105', '40 mm', '80 mm', '105 mm', '', '', '', '', '', '', 0),
(571, 10, 'BT50-SLA42-105', '42 mm', '80 mm', '105 mm', '', '', '', '', '', '', 0),
(572, 10, 'BT50-SLA42-150', '42 mm', '80 mm', '150 mm', '', '', '', '', '', '', 0),
(573, 10, 'BT50-SLA42-200', '42 mm', '80 mm', '200 mm', '', '', '', '', '', '', 0),
(574, 10, 'BT50-SLA50.8-105', '50.8 mm', '95 mm', '105 mm', '', '', '', '', '', '', 0),
(581, 11, 'BT50-APU16-130', '3 - 16 mm', '58 mm', '130 mm', '', '', '', '', '', '', 0),
(582, 11, 'BT40-APU08-085', '1 - 8 mm', '36.3 mm', '86.5 mm', '', '', '', '', '', '', 0),
(583, 11, 'BT40-APU13-110', '1 - 13 mm', '51.5 mm', '109 mm', '', '', '', '', '', '', 0),
(584, 11, 'BT40-APU16-130', '3 - 16 mm', '58 mm', '130 mm', '', '', '', '', '', '', 0),
(585, 11, 'BT50-APU08-095', '1 - 8 mm', '36.3 mm', '97.5 mm', '', '', '', '', '', '', 0),
(586, 11, 'BT50-APU13-120', '1 - 13 mm', '51.5 mm', '120 mm', '', '', '', '', '', '', 0),
(587, 11, 'BT50-APU13-180', '1 - 13 mm', '51.5 mm', '180 mm', '', '', '', '', '', '', 0),
(588, 11, 'BT50-APU16-190', '3 - 16 mm', '58 mm', '190 mm', '', '', '', '', '', '', 0),
(589, 13, 'BT40-FMB22-045', '22 mm', '45 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(590, 13, 'BT40-FMB22-060', '22 mm', '60 mm', '48 mm ', '63 mm', '', '', '', '', '', 0),
(591, 13, 'BT40-FMB22-090', '22 mm', '90 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(592, 13, 'BT40-FMB22-125', '22 mm', '125 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(593, 13, 'BT40-FMB22-150', '22 mm', '150 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(594, 13, 'BT40-FMB27-045', '27 mm', '45 mm', '60 mm', '80 mm', '', '', '', '', '', 0),
(595, 13, 'BT40-FMB27-060', '27 mm', '60 mm', '60 mm', '80 mm', '', '', '', '', '', 0),
(596, 13, 'BT40-FMB27-090', '27 mm', '90 mm', '60 mm', '80 mm', '', '', '', '', '', 0),
(597, 13, 'BT40-FMB27-105', '27 mm', '105 mm', '60 mm', '80 mm', '', '', '', '', '', 0),
(598, 13, 'BT40-FMB32-045', '32 mm', '45 mm', '63 mm', '100 mm', '', '', '', '', '', 0),
(599, 13, 'BT40-FMB32-060', '32 mm', '60 mm', '63 mm', '100 mm', '', '', '', '', '', 0),
(600, 13, 'BT40-FMB40-045', '40 mm', '45 mm', '68 mm', '100-125 mm', '', '', '', '', '', 0),
(601, 13, 'BT40-FMB40-060', '40 mm', '60 mm', '68 mm', '100-125 mm', '', '', '', '', '', 0),
(602, 13, 'BT50-FMB22-045', '22 mm', '45 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(603, 13, 'BT50-FMB22-075', '22 mm', '75 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(604, 13, 'BT50-FMB22-105', '22 mm', '105 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(605, 13, 'BT50-FMB22-125', '22 mm', '125 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(606, 13, 'BT50-FMB22-150', '22 mm', '150 mm', '48 mm ', '63 mm', '', '', '', '', '', 0),
(607, 13, 'BT50-FMB22-175', '22 mm', '175 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(608, 13, 'BT50-FMB22-200', '22 mm', '200 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(609, 13, 'BT50-FMB22-250', '22 mm', '250 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(610, 13, 'BT50-FMB22-300', '22 mm', '300 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(611, 13, 'BT50-FMB22-350', '22 mm', '350 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(612, 13, 'BT50-FMB22-400', '22 mm', '400 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(613, 13, 'BT50-FMB27-045', '27 mm', '45 mm', '65 mm', '80 mm', '', '', '', '', '', 0),
(614, 13, 'BT50-FMB27-075', '27 mm', '75 mm', '65 mm', '80 mm', '', '', '', '', '', 0),
(615, 13, 'BT50-FMB27-090', '27 mm', '90 mm', '65 mm', '80 mm', '', '', '', '', '', 0),
(616, 13, 'BT50-FMB32-045', '32 mm', '45 mm', '73 mm', '100 mm', '', '', '', '', '', 0),
(617, 13, 'BT50-FMB32-075', '32 mm', '75 mm', '73 mm', '100 mm', '', '', '', '', '', 0),
(618, 13, 'BT50-FMB40-045', '40 mm', '45 mm', '85 mm', '100-125 mm', '', '', '', '', '', 0),
(619, 13, 'BT50-FMB40-075', '40 mm', '75 mm', '85 mm', '100-125 mm', '', '', '', '', '', 0),
(620, 13, 'BT50-FMB40-105', '40 mm', '105 mm', '85 mm', '100-125 mm', '', '', '', '', '', 0),
(621, 13, 'BT50-FMB60-075', '60 mm', '75 mm', '128.57 mm', '200 mm', '', '', '', '', '', 0),
(641, 16, 'CAT40-ER11-2.50"', '1/32"-1/4"', '2.50"', '0.75"', 'ER11', '', '', '', '', '', 0),
(642, 16, 'CAT40-ER11-4-00"', '1/32"-1/4"', '4.00"', '0.75"', 'ER11', '', '', '', '', '', 0),
(643, 16, 'CAT40-ER16-2.50"', '1/32"-3/8"', '2.50"', '1.10"', 'ER16', '', '', '', '', '', 0),
(644, 16, 'CAT40-ER16-3.00"', '1/32"-3/8"', '3.00"', '1.10"', 'ER16', '', '', '', '', '', 0),
(645, 16, 'CAT40-ER16-5.00"', '1/32"-3/8"', '5.00"', '1.10"', 'ER16', '', '', '', '', '', 0),
(646, 16, 'CAT40-ER20-3.00"', '1/32"-1/2"', '3.00"', '1.34"', 'ER20', '', '', '', '', '', 0),
(647, 16, 'CAT40-ER20-4.00"', '1/32"-1/2"', '4.00"', '1.34"', 'ER20', '', '', '', '', '', 0),
(648, 16, 'CAT40-ER25-2.50"', '1/32"-5/8"', '2.50"', '1.65"', 'ER25', '', '', '', '', '', 0),
(649, 16, 'CAT40-ER25-4.00"', '1/32"-5/8"', '4.00"', '1.65"', 'ER25', '', '', '', '', '', 0),
(650, 16, 'CAT40-ER32-3.00"', '1/16"-25/32"', '3.00"', '2.00"', 'ER32', '', '', '', '', '', 0),
(651, 16, 'CAT40-ER32-4.00"', '1/16"-25/32"', '4.00"', '2.00"', 'ER32', '', '', '', '', '', 0),
(652, 16, 'CAT40-ER40-3.00"', '3/32"-1"', '3.00"', '2.50"', 'ER40', '', '', '', '', '', 0),
(653, 16, 'CAT40-ER40-4.00"', '3/32"-1"', '4.00"', '2.50"', 'ER40', '', '', '', '', '', 0),
(654, 16, 'CAT50-ER16-4.00"', '1/32"-3/8"', '4.00"', '1.10"', 'ER16', '', '', '', '', '', 0),
(655, 16, 'CAT50-ER16-6.00"', '1/32"-3/8"', '6.00"', '1.10"', 'ER16', '', '', '', '', '', 0),
(656, 16, 'CAT50-ER20-4.00"', '1/32"-1/2"', '4.00"', '1.34"', 'ER20', '', '', '', '', '', 0),
(657, 16, 'CAT50-ER20-6.00"', '1/32"-1/2"', '6.00"', '1.34"', 'ER20', '', '', '', '', '', 0),
(658, 16, 'CAT50-ER25-4.00"', '1/32"-5/8"', '4.00"', '1.65"', 'ER25', '', '', '', '', '', 0),
(659, 16, 'CAT50-ER25-6.00"', '1/32"-5/8"', '6.00"', '1.65"', 'ER25', '', '', '', '', '', 0),
(660, 16, 'CAT50-ER32-4.00"', '1/16"-25/32"', '4.00"', '2.00"', 'ER32', '', '', '', '', '', 0),
(661, 16, 'CAT50-ER32-6.00"', '1/16"-25/32"', '6.00"', '2.00"', 'ER32', '', '', '', '', '', 0),
(662, 16, 'CAT50-ER40-4.00"', '3/32"-1"', '4.00"', '2.50"', 'ER40', '', '', '', '', '', 0),
(663, 16, 'CAT50-ER40-6.00"', '3/32"-1"', '6.00"', '2.50"', 'ER40', '', '', '', '', '', 0),
(697, 17, 'CAT40-EM.125-1.75"', '0.125"', '0.75"', '1.75"', '', '', '', '', '', '', 0),
(698, 17, 'CAT40EM.125-2.50"', '0.125"', '0.75"', '2.50"', '', '', '', '', '', '', 0),
(699, 17, 'CAT40EM.125-3.00"', '0.125"', '0.75"', '3.00"', '', '', '', '', '', '', 0),
(700, 17, 'CAT40EM.1875-1.75"', '0.1875"', '0.75"', '1.75"', '', '', '', '', '', '', 0),
(701, 17, 'CAT40EM.1875-2.50"', '0.1875"', '0.75"', '2.50"', '', '', '', '', '', '', 0),
(702, 17, 'CAT40EM.1875-3.00"', '0.1875"', '0.75"', '3.00"', '', '', '', '', '', '', 0),
(703, 17, 'CAT40EM.25-1.75"', '0.25"', '0.8125"', '1.75"', '', '', '', '', '', '', 0),
(704, 17, 'CAT40EM.25-2.50"', '0.25"', '0.8125"', '2.50"', '', '', '', '', '', '', 0),
(705, 17, 'CAT40EM.25-3.00"', '0.25"', '0.8125"', '3.00"', '', '', '', '', '', '', 0),
(706, 17, 'CAT40EM.3125-1.75"', '0.3125"', '0.875"', '1.75"', '', '', '', '', '', '', 0),
(707, 17, 'CAT40EM.3125-2.50"', '0.3125"', '0.875"', '2.50"', '', '', '', '', '', '', 0),
(708, 17, 'CAT40EM.3125-3.00"', '0.3125"', '0.875"', '3.00"', '', '', '', '', '', '', 0),
(709, 17, 'CAT40EM.375-1.75"', '0.375"', '1.00"', '1.75"', '', '', '', '', '', '', 0),
(710, 17, 'CAT40EM.375-2.50"', '0.375"', '1.00"', '2.50"', '', '', '', '', '', '', 0),
(711, 17, 'CAT40EM.375-3.00"', '0.375"', '1.00"', '3.00"', '', '', '', '', '', '', 0),
(712, 17, 'CAT40EM.4375-1.75"', '0.4375"', '1.375"', '1.75"', '', '', '', '', '', '', 0),
(713, 17, 'CAT40EM.4375-2.62"', '0.4375"', '1.375"', '2.62"', '', '', '', '', '', '', 0),
(714, 17, 'CAT40EM.5-1.75"', '0.50"', '1.375"', '1.75"', '', '', '', '', '', '', 0),
(715, 17, 'CAT40EM.5-2.50"', '0.50"', '1.375"', '2.50"', '', '', '', '', '', '', 0),
(716, 17, 'CAT40EM.5-3.00"', '0.50"', '1.375"', '3.00"', '', '', '', '', '', '', 0),
(717, 17, 'CAT40EM.625-1.75"', '0.625"', '1.625"', '1.75"', '', '', '', '', '', '', 0),
(718, 17, 'CAT40EM.625-3.00"', '0.625"', '1.625"', '3.00"', '', '', '', '', '', '', 0),
(719, 17, 'CAT40EM.75-1.75"', '0.75"', '1.75"', '1.75"', '', '', '', '', '', '', 0),
(720, 17, 'CAT40EM.75-3.00"', '0.75"', '1.75"', '3.00"', '', '', '', '', '', '', 0),
(721, 17, 'CAT40EM.875-1.75"', '0.875"', '2.00"', '1.75"', '', '', '', '', '', '', 0),
(722, 17, 'CAT40EM.875-3.00"', '0.875"', '2.00"', '3.00"', '', '', '', '', '', '', 0),
(723, 17, 'CAT40EM1-2.00"', '1"', '2.25"', '2.00"', '', '', '', '', '', '', 0),
(724, 17, 'CAT40EM1-3.00"', '1"', '2.375"', '3.00"', '', '', '', '', '', '', 0),
(725, 17, 'CAT40EM1.25-2.00"', '1.25"', '2.25"', '2.00"', '', '', '', '', '', '', 0),
(726, 17, 'CAT40EM1.25-3.00"', '1.25"', '2.50"', '3.00"', '', '', '', '', '', '', 0),
(727, 17, 'CAT40EM1.25-4.00"', '1.25"', '2.50"', '4.00"', '', '', '', '', '', '', 0),
(728, 17, 'CAT40EM1.5-4.00"', '1.5"', '3.00"', '4.00"', '', '', '', '', '', '', 0),
(729, 17, 'CAT40EM1.5-4.62"', '1.5"', '3.00"', '4.62"', '', '', '', '', '', '', 0),
(730, 19, 'CAT40-SM25.4-1.75"', '25.4 mm', '1.75"', '2.362"', '17.5 mm', '', '', '', '', '', 0),
(731, 19, 'CAT40-SM31.75-2"', '31.75 mm', '2"', '2.756"', '17.5 mm', '', '', '', '', '', 0),
(732, 19, 'CAT40-SM38.1-2"', '38.1 mm', '2"', '3.346"', '23.8 mm', '', '', '', '', '', 0),
(733, 19, 'CAT50-SM25.4-1.75"', '25.4 mm', '1.75"', '2.362"', '17.5 mm', '', '', '', '', '', 0),
(734, 19, 'CAT50-SM25.4-4"', '25.4 mm', '4"', '2.362"', '17.5 mm', '', '', '', '', '', 0),
(735, 19, 'CAT50-SM25.4-6"', '25.4 mm', '6"', '2.362"', '17.5 mm', '', '', '', '', '', 0),
(736, 19, 'CAT50-SM31.75-1.75"', '31.75 mm', '1.75"', '2.756"', '17.5 mm', '', '', '', '', '', 0),
(737, 19, 'CAT50-SM31.75-4"', '31.75 mm', '4"', '2.756"', '17.5 mm', '', '', '', '', '', 0),
(738, 19, 'CAT50-SM31.75-6"', '31.75 mm', '6"', '2.756"', '17.5 mm', '', '', '', '', '', 0),
(739, 19, 'CAT50-SM38.1-2"', '38.1 mm', '2"', '3.346"', '23.8 mm', '', '', '', '', '', 0),
(740, 19, 'CAT50-SM38.1-4"', '38.1 mm', '4"', '3.346"', '23.8 mm', '', '', '', '', '', 0),
(741, 19, 'CAT50-SM38.1-6"', '38.1 mm', '6"', '3.346"', '23.8 mm', '', '', '', '', '', 0),
(742, 19, 'CAT50-SM50.8-2"', '50.8 mm', '2"', '3.74"', '24 mm', '', '', '', '', '', 0),
(743, 19, 'CAT50-SM50.8-4"', '50.8 mm', '4"', '3.74"', '24 mm', '', '', '', '', '', 0),
(744, 19, 'CAT50-SM50.8-6"', '50.8 mm', '6"', '3.74"', '24 mm', '', '', '', '', '', 0),
(745, 19, 'CAT50-SM47.625-3"', '47.625 mm', '3"', '5.26"', '32 mm', '', '', '', '', '', 0),
(746, 20, 'CAT40-APU08', '1 - 8 mm', '36.3 mm', '76.5 mm', '', '', '', '', '', '', 0),
(747, 20, 'CAT40-APU13', '1 - 13 mm', '51.5 mm', '99 mm', '', '', '', '', '', '', 0),
(748, 20, 'CAT40-APU16', '3 - 16 mm', '58 mm', '120 mm', '', '', '', '', '', '', 0),
(749, 20, 'CAT50-APU08', '1 - 8 mm', '36.3 mm', '77.5 mm', '', '', '', '', '', '', 0),
(750, 20, 'CAT50-APU13', '1 - 13 mm', '51.5 mm', '100 mm', '', '', '', '', '', '', 0),
(751, 20, 'CAT50-APU16', '3 - 16 mm', '58 mm', '110 mm', '', '', '', '', '', '', 0),
(752, 21, 'CAT40-TER16', 'M4 - M10(3/32"-1/4")', '28 mm', '77 mm', 'ER16', '', '', '', '', '', 0),
(753, 21, 'CAT40-TER20', 'M4 - M12(5/32"-5/8")', '34 mm', '86 mm', 'ER20', '', '', '', '', '', 0),
(754, 21, 'CAT40-TER25', 'M4 - M18(3/16"-3/4)', '42 mm', '90 mm', 'ER25', '', '', '', '', '', 0),
(755, 21, 'CAT40-TER32', 'M4 - M22(5/16"-1 1/16")', '50 mm', '94 mm', 'ER32', '', '', '', '', '', 0),
(756, 21, 'CAT40-TER40', 'M6 - M27(1/2"1-3/8")', '63 mm', '98 mm', 'ER40', '', '', '', '', '', 0),
(757, 21, 'CAT50-TER16', 'M4 - M10(3/32"-1/4")', '28 mm', '80 mm', 'ER16', '', '', '', '', '', 0),
(758, 21, 'CAT50-TER20', 'M4 - M12(5/22"-5/8")', '34 mm', '99 mm', 'ER20', '', '', '', '', '', 0),
(759, 21, 'CAT50-TER25', 'M4 - M18 (3/10"-3/4")', '42 mm', '97 mm', 'ER25', '', '', '', '', '', 0),
(760, 21, 'CAT50-TER32', 'M4 - M22(5/16"-1 1/16")', '50 mm', '95 mm', 'ER32', '', '', '', '', '', 0),
(761, 21, 'CAT50-TER40', 'M6 - M57(1/2"-1 3/8")', '63 mm', '117 mm', 'ER40', '', '', '', '', '', 0),
(762, 22, 'CAT40-NBH2084', '08 - 280 mm', '83 mm', '0.01 mm', '', '', '', '', '', '', 0),
(763, 22, 'CAT50-NBH2084', '08 - 280 mm', '83 mm', '0.01 mm', '', '', '', '', '', '', 0),
(766, 24, 'CAT40-EM10-50', '1', '10 mm', '35 mm', '50 mm', '', '', '', '', '', 0),
(767, 24, 'CAT40-EM12-50', '1', '12 mm', '42 mm', '50 mm', '', '', '', '', '', 0),
(768, 24, 'CAT40-EM16-63', '1', '16 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(769, 24, 'CAT40-EM20-63', '1', '20 mm', '52 mm', '63 mm', '', '', '', '', '', 0),
(770, 24, 'CAT40-EM25-100', '2', '25 mm', '65 mm', '100 mm', '', '', '', '', '', 0),
(771, 24, 'CAT40-EM32-100', '2', '32 mm', '72 mm', '100 mm', '', '', '', '', '', 0),
(774, 24, 'CAT50-EM10-63', '1', '10 mm', '35 mm', '63 mm', '', '', '', '', '', 0),
(775, 24, 'CAT50-EM12-63', '1', '12 mm', '42 mm', '63 mm', '', '', '', '', '', 0),
(776, 24, 'CAT50-EM16-63', '1', '16 mm', '48 mm', '63 mm', '', '', '', '', '', 0),
(777, 24, 'CAT50-EM20-63', '1', '20 mm', '52 mm', '63 mm', '', '', '', '', '', 0),
(778, 24, 'CAT50-EM25-80', '2', '25 mm', '65 mm', '80 mm', '', '', '', '', '', 0),
(779, 24, 'CAT50-EM32-100', '2', '32 mm', '72 mm', '100 mm', '', '', '', '', '', 0),
(780, 24, 'CAT50-EM40-120', '2', '40 mm', '90 mm', '120 mm', '', '', '', '', '', 0),
(781, 24, 'CAT40-EM06-50', '1', '6 mm', '25 mm', '50 mm', '', '', '', '', '', 0),
(782, 24, 'CAT40-EM08-50', '1', '8 mm', '28 mm', '50 mm', '', '', '', '', '', 0),
(784, 24, 'CAT50-EM08-63', '1', '8 mm', '28 mm', '63 mm', '', '', '', '', '', 0),
(785, 24, 'CAT50-EM06-63', '1', '6 mm', '25 mm', '63 mm', '', '', '', '', '', 0),
(786, 23, 'BT40-ADS06-060', '2', '2 - 6 mm', '13 mm', '60 mm', 'ADS06', '', '', '', '', 0),
(787, 23, 'BT40-ADS06-090', '2', '2 - 6 mm', '13 mm', '90 mm', 'ADS06', '', '', '', '', 0),
(788, 23, 'BT40-ADS06-120', '2', '2 - 6 mm', '13 mm', '120 mm', 'ADS06', '', '', '', '', 0),
(789, 23, 'BT40-ADS06-150', '2', '2 - 6 mm', '13 mm', '150 mm', 'ADS06', '', '', '', '', 0),
(790, 23, 'BT40-ADS08-065', '1', '3 - 8 mm', '16 mm', '65 mm', 'ADS08', '', '', '', '', 0),
(791, 23, 'BT40-ADS08-085', '1', '3 - 8 mm', '16 mm', '85 mm', 'ADS08', '', '', '', '', 0),
(792, 23, 'BT40-ADS08-105', '1', '3 - 8 mm', '16 mm', '105 mm', 'ADS08', '', '', '', '', 0),
(793, 23, 'BT40-ADS08-150', '2', '3 - 8 mm', '16 mm', '150 mm', 'ADS08', '', '', '', '', 0),
(794, 23, 'BT40-ADS12-090', '1', '3 - 12 mm', '23 mm', '90 mm', 'ADS12', '', '', '', '', 0),
(795, 23, 'BT40-ADS12-135', '1', '3 - 12 mm', '23 mm', '135 mm', 'ADS12', '', '', '', '', 0),
(796, 23, 'BT40-ADS12-150', '2', '3 - 12 mm', '23 mm', '150 mm', 'ADS12', '', '', '', '', 0),
(797, 23, 'BT40-ADS16-095', '1', '8 - 16 mm', '28 mm', '95 mm', 'ADS16', '', '', '', '', 0),
(798, 23, 'BT40-ADS16-125', '1', '8 - 16 mm', '28 mm', '125 mm', 'ADS16', '', '', '', '', 0),
(799, 23, 'BT50-ADS08-095', '1', '3 - 8 mm', '16 mm', '95 mm', 'ADS08', '', '', '', '', 0),
(800, 23, 'BT50-ADS08-110', '1', '3 - 8 mm', '16 mm', '110 mm', 'ADS08', '', '', '', '', 0),
(801, 23, 'BT50-ADS12-100', '1', '3 - 12 mm', '23 mm', '100 mm', 'ADS12', '', '', '', '', 0),
(802, 23, 'BT50-ADS12-150', '1', '3 - 12 mm', '23 mm', '150 mm', 'ADS12', '', '', '', '', 0),
(803, 23, 'BT50-ADS16-100', '1', '8 - 16 mm', '28 mm', '100 mm', 'ADS16', '', '', '', '', 0),
(804, 23, 'BT50-ADS16-125', '1', '8 - 16 mm', '28 mm', '125 mm', 'ADS16', '', '', '', '', 0),
(806, 27, 'BT40-ADS06-060', '2', '2 - 6 mm', '13 mm', '60 mm', 'ADS06', '', '', '', '', 0),
(807, 27, 'BT40-ADS06-090', '2', '2 - 6 mm', '13 mm', '90 mm', 'ADS06', '', '', '', '', 0),
(808, 27, 'BT40-ADS06-120', '2', '2 - 6 mm', '13 mm', '120 mm', 'ADS06', '', '', '', '', 0),
(809, 27, 'BT40-ADS06-150', '2', '2 - 6 mm', '13 mm', '150 mm', 'ADS06', '', '', '', '', 0),
(810, 27, 'BT40-ADS08-065', '1', '3 - 8 mm', '16 mm', '65 mm', 'ADS08', '', '', '', '', 0),
(811, 27, 'BT40-ADS08-085', '1', '3 - 8 mm', '16 mm', '85 mm', 'ADS08', '', '', '', '', 0),
(812, 27, 'BT40-ADS08-105', '1', '3 - 8 mm', '16 mm', '105 mm', 'ADS08', '', '', '', '', 0),
(813, 27, 'BT40-ADS08-150', '2', '3 - 8 mm', '16 mm', '150 mm', 'ADS08', '', '', '', '', 0),
(814, 27, 'BT40-ADS12-090', '1', '3 - 12 mm', '23 mm', '90 mm', 'ADS12', '', '', '', '', 0),
(815, 27, 'BT40-ADS12-135', '1', '3 - 12 mm', '23 mm', '135 mm', 'ADS12', '', '', '', '', 0),
(816, 27, 'BT40-ADS12-150', '2', '3 - 12 mm', '23 mm', '150 mm', 'ADS12', '', '', '', '', 0),
(817, 27, 'BT40-ADS16-095', '1', '8 - 16 mm', '28 mm', '95 mm', 'ADS16', '', '', '', '', 0),
(818, 27, 'BT40-ADS16-125', '1', '8 - 16 mm', '28 mm', '125 mm', 'ADS16', '', '', '', '', 0),
(819, 27, 'BT50-ADS08-095', '1', '3 - 8 mm', '16 mm', '95 mm', 'ADS08', '', '', '', '', 0),
(820, 27, 'BT50-ADS08-110', '1', '3 - 8 mm', '16 mm', '110 mm', 'ADS08', '', '', '', '', 0),
(821, 27, 'BT50-ADS12-100', '1', '3 - 12 mm', '23 mm', '100 mm', 'ADS12', '', '', '', '', 0),
(822, 27, 'BT50-ADS12-150', '1', '3 - 12 mm', '23 mm', '150 mm', 'ADS12', '', '', '', '', 0),
(823, 27, 'BT50-ADS16-100', '1', '8 - 16 mm', '28 mm', '100 mm', 'ADS16', '', '', '', '', 0),
(824, 27, 'BT50-ADS16-125', '1', '8 - 16 mm', '28 mm', '125 mm', 'ADS16', '', '', '', '', 0),
(828, 28, 'PM10', '10 mm', '90 mm', '1', '', '', '', '', '', '', 0),
(829, 28, 'PM10', '10 mm', '82.8 mm', '2', '', '', '', '', '', '', 0),
(830, 28, 'ME-610 ', '10 mm', ' 65 mm', '3', '', '', '', '', '', '', 0),
(831, 30, 'PM20', '20 mm', '77 mm', '80 mm', '', '', '', '', '', '', 0),
(832, 30, 'PM32', '32 mm', '71 mm', '86 mm', '', '', '', '', '', '', 0),
(842, 31, 'BT40-30', '60 mm', '35 mm', '15 mm', '23 mm', '10 mm', '30 mm', '', '', '', 0),
(843, 31, 'BT40-45', '60 mm', '35 mm', '15 mm', '23 mm', '10 mm', '45 mm', '', '', '', 0),
(844, 31, 'BT40-60', '60 mm', '35 mm', '15 mm', '23 mm', '10 mm', '60 mm', '', '', '', 0),
(845, 31, 'BT40-90', '60 mm', '35 mm', '15 mm', '23 mm', '10 mm', '90 mm', '', '', '', 0),
(846, 31, 'BT50-30', '85 mm', '45 mm', '23 mm', '38 mm', '17 mm', '30 mm', '', '', '', 0),
(847, 31, 'BT50-45', '85 mm', '45 mm', '23 mm', '38 mm', '17 mm', '45 mm', '', '', '', 0),
(848, 31, 'BT50-60', '85 mm', '45 mm', '23 mm', '38 mm', '17 mm', '60 mm', '', '', '', 0),
(849, 31, 'BT50-90', '71 mm', '31 mm', '24 mm', '36 mm', '18 mm', '90 mm', '', '', '', 0),
(850, 32, 'BT40 MAZAK', '44.1 mm', '19.1 mm', '18.8 mm', '22 mm', '12.45 mm', 'M16', '', '', '', 0),
(851, 32, 'BT50 MAZAK', '65.2 mm', '25.2 mm', '29 mm', '36 mm', '20.83 mm', 'M24', '', '', '', 0),
(852, 33, 'CAT40-A', 'A', '1.500', '0.640', '0.074', '0.940', '45', '', '', '', 0),
(853, 33, 'CAT50-A', 'A', '2.300', '1000', '1.140', '1.440', '45', '', '', '', 0),
(854, 33, 'CAT40-B', 'B', '2.250', '1.266', '0.590', '0.905', '45/60/90', '', '', '', 0),
(855, 33, 'CAT50-B', 'B', '3.346', '1.772', '0.906', '1.102', '45/60/90', '', '', '', 0),
(863, 34, 'CSO32-16', '32 mm', '16 mm', '65 mm', '', '', '', '', '', '', 0),
(864, 34, 'CSO32-20', '32 mm', '20 mm', '65 mm', '', '', '', '', '', '', 0),
(865, 34, 'CSO32-25', '32 mm', '25 mm', '65 mm', '', '', '', '', '', '', 0),
(866, 34, 'CSO40-16', '40 mm', '16 mm', '75 mm', '', '', '', '', '', '', 0),
(867, 34, 'CSO40-20', '40 mm', '20 mm', '75 mm', '', '', '', '', '', '', 0),
(868, 34, 'CSO40-25', '40 mm', '25 mm', '75 mm', '', '', '', '', '', '', 0),
(869, 34, 'CSO40-32', '40 mm', '32 mm', '75 mm', '', '', '', '', '', '', 0),
(870, 35, '1', '2', '', '', '', '', '', '', '', '', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_portafolio_carburado_cab`
--

DROP TABLE IF EXISTS `porta_portafolio_carburado_cab`;
CREATE TABLE IF NOT EXISTS `porta_portafolio_carburado_cab` (
  `idporta_portafolio_carburado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_carburado_cab` int(11) NOT NULL,
  `col1` varchar(50) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_portafolio_carburado_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1257 ;

--
-- Volcado de datos para la tabla `porta_portafolio_carburado_cab`
--

INSERT INTO `porta_portafolio_carburado_cab` (`idporta_portafolio_carburado_cab`, `idportafolio_carburado_cab`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `valor`) VALUES
(1, 1, 'A', 'B', '', '', '', '', '', '', '', '', 100),
(2, 1, '1', '2', '', '', '', '', '', '', '', '', 499),
(3, 1, 'xxx', 'a1', '', '', '', '', '', '', '', '', 100),
(4, 1, 'yyy', 'a2', '', '', '', '', '', '', '', '', 200),
(5, 1, 'xxx', 'a3', '', '', '', '', '', '', '', '', 300),
(6, 1, 'yyy', 'a4', '', '', '', '', '', '', '', '', 400),
(7, 1, 'xxx', 'a5', '', '', '', '', '', '', '', '', 500),
(8, 1, 'yyy', 'a6', '', '', '', '', '', '', '', '', 600),
(9, 1, 'xxx', 'a7', '', '', '', '', '', '', '', '', 700),
(10, 1, 'yyy', 'a8', '', '', '', '', '', '', '', '', 800),
(11, 2, 'xxx', 'yyy', 'zzz', '', '', '', '', '', '', '', 600),
(12, 2, '', '', '', '', '', '', '', '', '', '', 0),
(13, 2, '', '', '', '', '', '', '', '', '', '', 0),
(14, 2, '', '', '', '', '', '', '', '', '', '', 0),
(15, 2, 'lT', 'n%', '', '', '', '', '', '', '', '', 0),
(16, 2, 'BBV5I', '', '', '', '', '', '', '', '', '', 0),
(17, 2, '', '', '', '', '', '', '', '', '', '', 0),
(18, 2, '', '', '', '', '', '', '', '', '', '', 0),
(19, 2, '', '', '', '', '', '', '', '', '', '', 0),
(20, 2, '', '', '', '', '', '', '', '', '', '', 0),
(21, 2, '', '', '', '', '', '', '', '', '', '', 0),
(22, 2, '', '', '', '', '', '', '', '', '', '', 0),
(23, 2, '', '', '', '', '', '', '', '', '', '', 0),
(24, 2, '', '', '', '', '', '', '', '', '', '', 0),
(25, 2, 'Mf˸n', 'P=', '', '', '', '', '', '', '', '', 0),
(26, 2, '', '', '', '', '', '', '', '', '', '', 0),
(27, 2, '', '', '', '', '', '', '', '', '', '', 0),
(28, 2, '', '', '', '', '', '', '', '', '', '', 0),
(29, 2, '', '', '', '', '', '', '', '', '', '', 0),
(30, 2, '', '', '', '', '', '', '', '', '', '', 0),
(31, 2, '', '', '', '', '', '', '', '', '', '', 0),
(32, 2, '', '', '', '', '', '', '', '', '', '', 0),
(33, 2, '', '', '', '', '', '', '', '', '', '', 0),
(34, 2, '', '', '', '', '', '', '', '', '', '', 0),
(35, 2, '', '', '', '', '', '', '', '', '', '', 0),
(36, 2, '2', '', '', '', '', 'p?MC', '', '', '', '', 0),
(37, 2, '', '', '', '', '', '', '', '', '', '', 0),
(38, 2, '', '', '', '', '', '', '', '', '', '', 0),
(39, 2, '', '', '', 'c', '', '', '', '', '', '', 0),
(40, 2, '', '', '', '', '', '', '', '', '', '', 0),
(41, 2, '', '', '', '', '', '', '', '', '', '', 0),
(42, 2, '', '', '', '', '', '', '', '', '', '', 0),
(43, 2, '', '', '', '', '', '', '', '', '', '', 0),
(44, 2, '', '', '', '', '', '', '', '', '', '', 0),
(45, 2, '', '', '', '', '', '', '', '', '', '', 0),
(46, 2, '', '', '', '', '', '', '', '', '', '', 0),
(47, 2, '', '', '', '', '', '', '', '', '', '', 0),
(48, 2, '', '', '', '', '', '', '', '', '', '', 0),
(49, 2, '', '', '', '', '', '', '', '', '', '', 0),
(50, 2, '', '', '', '', '', '', '', '', '', '', 0),
(51, 2, '', '', '', '', '', '', '', '', '', '', 0),
(52, 2, '}KNOl', '', '', '', '', '', '', '', '', '', 0),
(53, 2, '', '', '', '', '', '', '', '', '', '', 0),
(54, 2, '', '', '', '', '', '', '', '', '', '', 0),
(55, 2, '', '', '', '', '', '', '', '', '', '', 0),
(56, 2, '', '', '', '', '', '', '', '', '', '', 0),
(57, 2, '', '', '', '', '', '', '', '', '', '', 0),
(58, 2, '', '', '', '', '', '', '', '', '', '', 0),
(59, 2, '', '', '', '', '', '', '', '', '', '', 0),
(60, 2, 'xxx', 'a1', 'b1', '', '', '', '', '', '', '', 100),
(61, 2, 'yyy', 'a2', 'b2', '', '', '', '', '', '', '', 200),
(62, 2, 'xxx', 'a3', 'b3', '', '', '', '', '', '', '', 300),
(63, 2, 'yyy', 'a4', 'b4', '', '', '', '', '', '', '', 400),
(64, 2, 'xxx', 'a5', 'b5', '', '', '', '', '', '', '', 500),
(65, 2, 'yyy', 'a6', 'b6', '', '', '', '', '', '', '', 600),
(66, 2, 'xxx', 'a7', 'b7', '', '', '', '', '', '', '', 700),
(67, 2, 'yyy', 'a8', 'b8', '', '', '', '', '', '', '', 800),
(68, 3, '1', '2', '3', '', '', '', '', '', '', '', 4000),
(119, 5, 'SFULNT05022 nACo ', '0.5 mm', '4 mm', '0.75 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(120, 5, 'SFULNT05042 nACo ', '0.5 mm', '4 mm', '0.75 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(121, 5, 'SFULNT05062 nACo', '0.5 mm', '4 mm', '0.75 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(122, 5, 'SFULNT06022 nACo', '0.6 mm', '4 mm', '0.9 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(123, 5, 'SFULNT06042 nACo ', '0.6 mm', '4 mm', '0.9 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(124, 5, 'SFULNT06062 nACo ', '0.6 mm', '4 mm', '0.9 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(125, 5, 'SFULNT07042 nACo ', '0.7 mm', '4 mm', '1.1 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(126, 5, 'SFULNT07062 nACo ', '0.7 mm', '4 mm', '1.1 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(127, 5, 'SFULNT08042 nACo ', '0.8 mm', '4 mm', '1.2 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(128, 5, 'SFULNT08062 nACo ', '0.8 mm', '4 mm', '1.2 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(129, 5, 'SFULNT08082 nACo ', '0.8 mm', '4 mm', '1.2 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(130, 5, 'SFULNT10062 nACo ', '1 mm', '4 mm', '1.5 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(131, 5, 'SFULNT10082 nACo ', '1 mm', '4 mm', '1.5 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(132, 5, 'SFULNT10102 nACo ', '1 mm', '4 mm', '1.5 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(133, 5, 'SFULNT10122 nACo ', '1 mm', '4 mm', '1.5 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(134, 5, 'SFULNT10162 nACo ', '1 mm', '4 mm', '1.5 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(135, 5, 'SFULNT15062 nACo ', '1.5 mm', '4 mm', '2.3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(136, 5, 'SFULNT15082 nACo ', '1.5 mm', '4 mm', '2.3 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(137, 5, 'SFULNT15102 nACo ', '1.5 mm', '4 mm', '2.3 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(138, 5, 'SFULNT15122 nACo ', '1.5 mm', '4 mm', '2.3 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(139, 5, 'SFULNT15142 nACo ', '1.5 mm', '4 mm', '2.3 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(140, 5, 'SFULNT15162 nACo ', '1.5 mm', '4 mm', '2.3 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(141, 5, 'SFULNT15182 nACo ', '1.5 mm', '4 mm', '2.3 mm', '18 mm', '50 mm', '2', '', '', '', 0),
(142, 5, 'SFULNT15202 nACo ', '1.5 mm', '4 mm', '2.3 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(143, 5, 'SFULNT20062 nACo', '2 mm', '4 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(144, 5, 'SFULNT20082 nACo ', '2 mm', '4 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(145, 5, 'SFULNT20102 nACo ', '2 mm', '4 mm', '3 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(146, 5, 'SFULNT20122 nACo ', '2 mm', '4 mm', '3 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(147, 5, 'SFULNT20142 nACo ', '2 mm', '4 mm', '3 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(148, 5, 'SFULNT20162 nACo ', '2 mm', '4 mm', '3 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(149, 5, 'SFULNT20182 nACo ', '2 mm', '4 mm', '3 mm', '18 mm', '50 mm', '2', '', '', '', 0),
(150, 5, 'SFULNT20202 nACo', '2 mm', '4 mm', '3 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(151, 5, 'SFULNT25082 nACo ', '2.5 mm', '4 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(152, 5, 'SFULNT25102 nACo ', '2.5 mm', '4 mm', '4 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(153, 5, 'SFULNT25122 nACo ', '2.5 mm', '4 mm', '4 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(154, 5, 'SFULNT25142 nACo ', '2.5 mm', '4 mm', '4 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(155, 5, 'SFULNT25162 nACo ', '2.5 mm', '4 mm', '4 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(156, 5, 'SFULNT25202 nACo ', '2.5 mm', '4 mm', '4 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(157, 5, 'SFULNT30082 nACo ', '3 mm', '6 mm', '4.5 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(158, 5, 'SFULNT30102 nACo ', '3 mm', '6 mm', '4.5 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(159, 5, 'SFULNT30122 nACo ', '3 mm', '6 mm', '4.5 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(160, 5, 'SFULNT30162 nACo ', '3 mm', '6 mm', '4.5 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(161, 5, 'SFULNT30202 nACo ', '3 mm', '6 mm', '4.5 mm', '20 mm', '60 mm', '2', '', '', '', 0),
(162, 5, 'SFULNT30252 nACo ', '3 mm', '6 mm', '4.5 mm', '25 mm', '75 mm', '2', '', '', '', 0),
(163, 5, 'SFULNT40122 nACo ', '4 mm', '6 mm', '6 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(164, 5, 'SFULNT40162 nACo ', '4 mm', '6 mm', '6 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(165, 5, 'SFULNT40202 nACo ', '4 mm', '6 mm', '6 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(166, 5, 'SFULNT40252 nACo ', '4 mm', '6 mm', '6 mm', '25 mm', '75 mm', '2', '', '', '', 0),
(167, 5, 'SFULNT40302 nACo ', '4 mm', '6 mm', '6 mm', '30 mm', '75 mm', '2', '', '', '', 0),
(168, 5, 'SFULNT40352 nACo ', '4 mm', '6 mm', '6 mm', '35 mm', '75 mm', '2', '', '', '', 0),
(227, 6, 'SFUMIE0023 TiSiN ', '0.2  mm', '3 mm', '0.4 mm', '38 mm', '2', '', '', '', '', 0),
(228, 6, 'SFUMIE0033 TiSiN ', '0.3 mm', '3 mm', '0.6 mm', '38 mm', '2', '', '', '', '', 0),
(229, 6, 'SFUMIE0043 TiSiN ', '0.4 mm', '3 mm', '0.8 mm', '38 mm', '2', '', '', '', '', 0),
(230, 6, 'SFUMIE0053 TiSiN ', '0.5 mm', '3 mm', '1 mm', '38 mm', '2', '', '', '', '', 0),
(231, 6, 'SFUMIE0063 TiSiN ', '0.6 mm', '3 mm', '1.2 mm', '38 mm', '2', '', '', '', '', 0),
(232, 6, 'SFUMIE0073 TiSiN ', '0.7 mm', '3 mm', '1.4 mm', '38 mm', '2', '', '', '', '', 0),
(233, 6, 'SFUMIE0083 TiSiN ', '0.8 mm', '3 mm', '1.6 mm', '38 mm', '2', '', '', '', '', 0),
(234, 6, 'SFUMIE0093 TiSiN ', '0.9 mm', '3 mm', '1.8 mm', '38 mm', '2', '', '', '', '', 0),
(235, 6, 'SFUMIE0103 TiSiN ', '1 mm', '3 mm', '2 mm', '38 mm', '2', '', '', '', '', 0),
(236, 6, 'SFUMIE0113 TiSiN', '1.1 mm', '3 mm', '2 mm', '38 mm', '2', '', '', '', '', 0),
(237, 6, 'SFUMIE0123 TiSiN ', '1.2 mm', '3 mm', '2.5 mm', '38 mm', '2', '', '', '', '', 0),
(238, 6, 'SFUMIE0133 TiSiN ', '1.3 mm', '3 mm', '2.5 mm', '38 mm', '2', '', '', '', '', 0),
(239, 6, 'SFUMIE0143 TiSiN ', '1.4 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(240, 6, 'SFUMIE0153 TiSiN', '1.5 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(241, 6, 'SFUMIE0163 TiSiN ', '1.6 mm', '3 mm', '3.5 mm', '38 mm', '2', '', '', '', '', 0),
(242, 6, 'SFUMIE0173 TiSiN ', '1.7 mm', '3 mm', '3.5 mm', '38 mm', '2', '', '', '', '', 0),
(243, 6, 'SFUMIE0183 TiSiN ', '1.8 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(244, 6, 'SFUMIE0193 TiSiN ', '1.9 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(245, 6, 'SFUMIE0203 TiSiN ', '2 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(246, 6, 'SFUMIE0213 TiSiN ', '2.1 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(247, 6, 'SFUMIE0223 TiSiN ', '2.2 mm', '3 mm', '4.5 mm', '38 mm', '2', '', '', '', '', 0),
(248, 6, 'SFUMIE0233 TiSiN ', '2.3 mm', '3 mm', '4.5 mm', '38 mm', '2', '', '', '', '', 0),
(249, 6, 'SFUMIE0243 TiSiN ', '2.4 mm', '3 mm', '5 mm', '38 mm', '2', '', '', '', '', 0),
(250, 6, 'SFUMIE0253 TiSiN ', '2.5 mm', '3 mm', '5 mm', '38 mm', '2', '', '', '', '', 0),
(251, 6, 'SFUMIE0263 TiSiN ', '2.6 mm', '3 mm', '5 mm', '38 mm', '2', '', '', '', '', 0),
(252, 6, 'SFUMIE0273 TiSiN ', '2.7 mm', '3 mm', '5.5 mm', '38 mm', '2', '', '', '', '', 0),
(253, 6, 'SFUMIE0283 TiSiN ', '2.8 mm', '3 mm', '5.5 mm', '38 mm', '2', '', '', '', '', 0),
(254, 6, 'SFUMIE0293 TiSiN', '2.9 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(255, 6, 'SFUMIE0303 TiSiN', '3 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(256, 6, 'SFUMIE0024 TiSiN ', '0.2 mm', '4 mm', '0.4 mm', '50 mm', '2', '', '', '', '', 0),
(257, 6, 'SFUMIE0034 TiSiN ', '0.3 mm', '4 mm', '0.6 mm', '50 mm', '2', '', '', '', '', 0),
(258, 6, 'SFUMIE0044 TiSiN ', '0.4 mm', '4 mm', '0.8 mm', '50 mm', '2', '', '', '', '', 0),
(259, 6, 'SFUMIE0054 TiSiN ', '0.5 mm', '4 mm', '1 mm', '50 mm', '2', '', '', '', '', 0),
(260, 6, 'SFUMIE0064 TiSiN ', '0.6 mm', '4 mm', '1.2 mm', '50 mm', '2', '', '', '', '', 0),
(261, 6, 'SFUMIE0074 TiSiN ', '0.7 mm', '4 mm', '1.4 mm', '50 mm', '2', '', '', '', '', 0),
(262, 6, 'SFUMIE0084 TiSiN ', '0.8 mm', '4 mm', '1.6 mm', '50 mm', '2', '', '', '', '', 0),
(263, 6, 'SFUMIE0094 TiSiN ', '0.9 mm', '4 mm', '1.8 mm', '50 mm', '2', '', '', '', '', 0),
(264, 6, 'SFUMIE0104 TiSiN ', '1 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', '', 0),
(265, 6, 'SFUMIE0114 TiSiN', '1.1 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', '', 0),
(266, 6, 'SFUMIE0124 TiSiN ', '1.2 mm', '4 mm', '2.5 mm', '50 mm', '2', '', '', '', '', 0),
(267, 6, 'SFUMIE0134 TiSiN ', '1.3 mm', '4 mm', '2.5 mm', '50 mm', '2', '', '', '', '', 0),
(268, 6, 'SFUMIE0144 TiSiN ', '1.4 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(269, 6, 'SFUMIE0154 TiSiN', '1.5 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(270, 6, 'SFUMIE0164 TiSiN ', '1.6 mm', '4 mm', '3.5 mm', '50 mm', '2', '', '', '', '', 0),
(271, 6, 'SFUMIE0174 TiSiN ', '1.7 mm', '4 mm', '3.5 mm', '50 mm', '2', '', '', '', '', 0),
(272, 6, 'SFUMIE0184 TiSiN ', '1.8 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(273, 6, 'SFUMIE0194 TiSiN ', '1.9 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(274, 6, 'SFUMIE0204 TiSiN ', '2 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(275, 6, 'SFUMIE0214 TiSiN ', '2.1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(276, 6, 'SFUMIE0224 TiSiN ', '2.2 mm', '4 mm', '4.5 mm', '50 mm', '2', '', '', '', '', 0),
(277, 6, 'SFUMIE0234 TiSiN ', '2.3 mm', '4 mm', '4.5 mm', '50 mm', '2', '', '', '', '', 0),
(278, 6, 'SFUMIE0244 TiSiN ', '2.4 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', '', 0),
(279, 6, 'SFUMIE0254 TiSiN ', '2.5 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', '', 0),
(280, 6, 'SFUMIE0264 TiSiN ', '2.6 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', '', 0),
(281, 6, 'SFUMIE0274 TiSiN ', '2.7 mm', '4 mm', '5.5 mm', '50 mm', '2', '', '', '', '', 0),
(282, 6, 'SFUMIE0284 TiSiN ', '2.8 mm', '4 mm', '5.5 mm', '50 mm', '2', '', '', '', '', 0),
(283, 6, 'SFUMIE0294 TiSiN', '2.9 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(284, 6, 'SFUMIE0304 TiSiN', '3 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(330, 7, 'SFUET0102 TiSiN ', '1 mm', '4 mm', '2.5 mm', '50 mm', '2', '', '', '', '', 0),
(331, 7, 'SFUET0152 TiSiN ', '1.5 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(332, 7, 'SFUET0202 TiSiN', '2 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', '', 0),
(333, 7, 'SFUET0252 TiSiN ', '2.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(334, 7, 'SFUET0302 TiSiN ', '3 mm', '4 mm', '7.5 mm', '50 mm', '2', '', '', '', '', 0),
(335, 7, 'SFUET0352 TiSiN ', '3.5 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(336, 7, 'SFUET0402 TiSiN ', '4 mm', '4 mm', '9 mm', '50 mm', '2', '', '', '', '', 0),
(337, 7, 'SFUET0452 TiSiN ', '4.5 mm', ' 6 mm', '10 mm', '50 mm', '2', '', '', '', '', 0),
(338, 7, 'SFUET0502 TiSiN ', '5 mm', ' 6 mm', '11 mm', '50 mm', '2', '', '', '', '', 0),
(339, 7, 'SFUET0552 TiSiN', '5.5 mm', ' 6 mm', '12 mm', '50 mm', '2', '', '', '', '', 0),
(340, 7, 'SFUET0602 TiSiN ', '6 mm', ' 6 mm', '13 mm', '60 mm', '2', '', '', '', '', 0),
(341, 7, 'SFUET0652 TiSiN ', '6.5 mm', '8 mm', '14 mm', '60 mm', '2', '', '', '', '', 0),
(342, 7, 'SFUET0702 TiSiN ', '7 mm', '8 mm', '14 mm', '60 mm', '2', '', '', '', '', 0),
(343, 7, 'SFUET0752 TiSiN ', '7.5 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(344, 7, 'SFUET0802 TiSiN ', '8 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(345, 7, 'SFUET0852 TiSiN ', '8.5 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', '', 0),
(346, 7, 'SFUET0902 TiSiN ', '9 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', '', 0),
(347, 7, 'SFUET0952 TiSiN ', '9.5 mm', '10 mm', '22 mm', '75 mm', '2', '', '', '', '', 0),
(348, 7, 'SFUET1002 TiSiN ', '10 mm', '10 mm', '22 mm', '75 mm', '2', '', '', '', '', 0),
(349, 7, 'SFUET1052 TiSiN ', '10.5 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', '', 0),
(350, 7, 'SFUET1102 TiSiN ', '11 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', '', 0),
(351, 7, 'SFUET1152 TiSiN ', '11.5 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', '', 0),
(352, 7, 'SFUET1202 TiSiN ', '12 mm', '12 mm', '26 mm', '75 mm', '2', '', '', '', '', 0),
(353, 8, 'SFULET0102 TiSiN ', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(354, 8, 'SFULET0152 TiSiN ', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(355, 8, 'SFULET0202 TiSiN ', '2 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(356, 8, 'SFULET0302 TiSiN ', '3 mm', '6 mm', '11 mm', '60 mm', '2', '', '', '', '', 0),
(357, 8, 'SFULET0402 TiSiN ', '4 mm', '6 mm', '14 mm', '60 mm', '2', '', '', '', '', 0),
(358, 8, 'SFULET0452 TiSiN ', '4.5 mm', '6 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(359, 8, 'SFULET0502 TiSiN ', '5 mm', '6 mm', '18 mm', '60 mm', '2', '', '', '', '', 0),
(360, 8, 'SFULET0552 TiSiN', '5.5 mm', '6 mm', '20 mm', '60 mm', '2', '', '', '', '', 0),
(361, 8, 'SFULET0602 TiSiN ', '6 mm', '6 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(362, 8, 'SFULET0652 TiSiN ', '6.5 mm', '8 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(363, 8, 'SFULET0702 TiSiN', '7 mm', '8 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(364, 8, 'SFULET0752 TiSiN ', '7.5 mm', '8 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(365, 8, 'SFULET0802 TiSiN ', '8 mm', '8 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(366, 8, 'SFULET0812 TiSiN ', '8 mm', '8 mm', '35 mm', '100 mm', '2', '', '', '', '', 0),
(367, 8, 'SFULET0852 TiSiN', '8.5 mm', '10 mm', '35 mm', '100 mm', '2', '', '', '', '', 0),
(368, 8, 'SFULET0902 TiSiN', '9 mm', '10 mm', '35 mm', '100 mm', '2', '', '', '', '', 0),
(369, 8, 'SFULET0952 TiSiN', '9.5 mm', '10 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(370, 8, 'SFULET1002 TiSiN', '10 mm', '10 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(371, 8, 'SFULET1052 TiSiN ', '10.5 mm', '12 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(372, 8, 'SFULET1102 TiSiN ', '11 mm', '12 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(373, 8, 'SFULET1152 TiSiN ', '11.5 mm', '12 mm', '45 mm', '100 mm', '2', '', '', '', '', 0),
(374, 8, 'SFULET1202 TiSiN', '12 mm', '12 mm', '45 mm', '100 mm', '2', '', '', '', '', 0),
(418, 9, 'SLE0602', '6 mm', '6 mm', '16 mm', '75 mm', '2', '', '', '', '', 0),
(419, 9, 'MLE0602 ', '6 mm', '6 mm', '16 mm', '100 mm', '2', '', '', '', '', 0),
(420, 9, 'SLE0802', '8 mm', '8 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(421, 9, 'MLE0802', '8 mm', '8 mm', '20 mm', '100 mm', '2', '', '', '', '', 0),
(422, 9, 'SLE1002', '10 mm', '10 mm', '25 mm', '100 mm', '2', '', '', '', '', 0),
(423, 9, 'MLE1002', '10 mm', '10 mm', '25 mm', '150 mm', '2', '', '', '', '', 0),
(424, 9, 'SLE1202', '12 mm', '12 mm', '32 mm', '100 mm', '2', '', '', '', '', 0),
(425, 9, 'MLE1202', '12 mm', '12 mm', '32 mm', '150 mm', '2', '', '', '', '', 0),
(426, 10, 'SSE0102 AlTiN ', '1 mm', '3 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(427, 10, 'MSE0102 AlTiN ', '1 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(428, 10, 'SSE0152 AlTiN ', '1.5 mm', '3 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(429, 10, 'MSE0152 AlTiN ', '1.5 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(430, 10, 'SSE0202 AlTiN', '2 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(431, 10, 'MSE0202 AlTiN ', '2 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(432, 10, 'SSE0252 AlTiN ', '2.5 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(433, 10, 'MSE0252 AlTiN ', '2.5 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(434, 10, 'SSE0302 AlTiN ', '3 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(435, 10, 'MSE0302 AlTiN ', '3 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(436, 10, 'MSE0352 AlTiN ', '3.5 mm', '4 mm', '10 mm', '50 mm', '2', '', '', '', '', 0),
(437, 10, 'MSE0402 AlTiN ', '4 mm', '4 mm', '11 mm', '50 mm', '2', '', '', '', '', 0),
(438, 10, 'SE0102 AlTiN ', '1 mm', '6 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(439, 10, 'SE0152 AlTiN ', '1.5 mm', '6 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(440, 10, 'SE0202 AlTiN ', '2 mm', '6 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(441, 10, 'SE0252 AlTiN ', '2.5 mm', '6 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(442, 10, 'SE0302 AlTiN ', '3 mm', '6 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(443, 10, 'SE0352 AlTiN ', '3.5 mm', '6 mm', '10 mm', '50 mm', '2', '', '', '', '', 0),
(444, 10, 'SE0402 AlTiN ', '4 mm', '6 mm', '11 mm', '50 mm', '2', '', '', '', '', 0),
(445, 10, 'SE0452 AlTiN ', '4.5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(446, 10, 'SE0502 AlTiN ', '5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(447, 10, 'SE0552 AlTiN ', '5.5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(448, 10, 'SE0602 AlTiN ', '6 mm', '6 mm', '16 mm', '50 mm', '2', '', '', '', '', 0),
(449, 10, 'SE0652 AlTiN ', '6.5 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(450, 10, 'SE0702 AlTiN', '7 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(451, 10, 'SE0752 AlTiN ', '7.5 mm', '8 mm', '19 mm', '60 mm', '2', '', '', '', '', 0),
(452, 10, 'SE0802 AlTiN ', '8 mm', '8 mm', '20 mm', '60 mm', '2', '', '', '', '', 0),
(453, 10, 'SE0852 AlTiN ', '8.5 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(454, 10, 'SE0902 AlTiN ', '9 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(455, 10, 'SE0952 AlTiN ', '9.5 mm', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(456, 10, 'SE1002 AlTiN ', '10 mm', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(457, 10, 'SE1052 AlTiN', '10.5 mm', '12 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(458, 10, 'SE1102 AlTiN', '11 mm', '12 mm', '30 mm', '75 mm', '2', '', '', '', '', 0),
(459, 10, 'SE1152 AlTiN ', '11.5 mm', '12 mm', '30 mm', '75 mm', '2', '', '', '', '', 0),
(460, 10, 'SE1202 AlTiN ', '12 mm', '12 mm', '32 mm', '75 mm', '2', '', '', '', '', 0),
(482, 16, 'UET0102 nBS ', '1 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(483, 16, 'UET0152 nBS ', '1.5 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(484, 16, 'UET0202 nBS ', '2 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(485, 16, 'UET0252 nBS ', '2.5 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(486, 16, 'UET0302 nBS ', '3 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(487, 16, 'UET0352 nBS ', '3.5 mm', '4 mm', '10 mm', '50 mm', '2', '', '', '', '', 0),
(488, 16, 'UET0402 nBS ', '4 mm', '4 mm', '11 mm', '50 mm', '2', '', '', '', '', 0),
(489, 16, 'UET0452 nBS ', '4.5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(490, 16, 'UET0502 nBS ', '5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(491, 16, 'UET0552 nBS ', '5.5 mm', '6 mm', '13 mm', '50 mm', '2', '', '', '', '', 0),
(492, 16, 'UET0602 nBS ', '6 mm', '6 mm', '16 mm', '50 mm', '2', '', '', '', '', 0),
(493, 16, 'UET0652 nBS ', '6.5 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', '', 0),
(494, 16, 'UET0702 nBS', '7 mm', '8 mm', '17 mm', '60 mm', '2', '', '', '', '', 0),
(495, 16, 'UET0752 nBS ', '7.5 mm', '8 mm', '17 mm', '60 mm', '2', '', '', '', '', 0),
(496, 16, 'UET0802 nBS ', '8 mm', '8 mm', '21 mm', '60 mm', '2', '', '', '', '', 0),
(497, 16, 'UET0852 nBS ', '8.5 mm', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(498, 16, 'UET0902 nBS ', '9 m', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(499, 16, 'UET0952 nBS ', '9.5 mm', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(500, 16, 'UET1002 nBS ', '10 mm', '10 mm', '26 mm', '75 mm', '2', '', '', '', '', 0),
(501, 16, 'UET1102 nBS ', '11 mm', '12 mm', '28 mm', '75 mm', '2', '', '', '', '', 0),
(502, 16, 'UET1202 nBS ', '12 mm', '12 mm', '30 mm', '75 mm', '2', '', '', '', '', 0),
(503, 15, 'ULNT05022 nBS ', '0.5 mm', '4 mm', '0.75 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(504, 15, 'ULNT05042 nBS ', '0.5 mm', '4 mm', '0.75 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(505, 15, 'ULNT05062 nBS ', '0.5 mm', '4 mm', '0.75 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(506, 15, 'ULNT06022 nBS ', '0.6 mm', '4 mm', '0.9 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(507, 15, 'ULNT10062 nBS', '1 mm', '4 mm', '1.5 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(508, 15, 'ULNT10082 nBS ', '1 mm', '4 mm', '1.5 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(509, 15, 'ULNT10102 nBS ', '1 mm', '4 mm', '1.5 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(510, 15, 'ULNT10122 nBS ', '1 mm', '4 mm', '1.5 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(511, 15, 'ULNT15062 nBS ', '1.5 mm', '4 mm', '2.3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(512, 15, 'ULNT15082 nBS ', '1.5 mm', '4 mm', '2.3 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(513, 15, 'ULNT15102 nBS ', '1.5 mm', '4 mm', '2.3 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(514, 15, 'ULNT15122 nBS ', '1.5 mm', '4 mm', '2.3 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(515, 15, 'ULNT15142 nBS ', '1.5 mm', '4 mm', '2.3 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(516, 15, 'ULNT15162 nBS ', '1.5 mm', '4 mm', '2.3 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(517, 15, 'ULNT15182 nBS ', '1.5 mm', '4 mm', '2.3 mm', '18 mm', '50 mm', '2', '', '', '', 0),
(518, 15, 'ULNT15202 nBS ', '1.5 mm', '4 mm', '2.3 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(519, 15, 'ULNT20062 nBS ', '2 mm', '4 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(520, 15, 'ULNT20082 nBS ', '2 mm', '4 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(521, 15, 'ULNT20102 nBS ', '2 mm', '4 mm', '3 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(522, 15, 'ULNT20122 nBS', '2 mm', '4 mm', '3 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(523, 15, 'ULNT20142 nBS ', '2 mm', '4 mm', '3 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(524, 15, 'ULNT20162 nBS ', '2 mm', '4 mm', '3 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(525, 15, 'ULNT20182 nBS ', '2 mm', '4 mm', '3 mm', '18 mm', '50 mm', '2', '', '', '', 0),
(526, 15, 'ULNT20202 nBS ', '2 mm', '4 mm', '3 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(527, 15, 'ULNT25082 nBS ', '2.5 mm', '4 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(528, 15, 'ULNT25122 nBS ', '2.5 mm', '4 mm', '4 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(529, 15, 'ULNT25162 nBS ', '2.5 mm', '4 mm', '4 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(530, 15, 'ULNT25202 nBS ', '2.5 mm', '4 mm', '4 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(531, 15, 'ULNT30102 nBS ', '3 mm', '6 mm', '4.5 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(532, 15, 'ULNT30122 nBS ', '3 mm', '6 mm', '4.5 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(533, 15, 'ULNT30162 nBS', '3 mm', '6 mm', '4.5 mm', '16 mm', '50 mm', '2', '', '', '', 0),
(534, 15, 'ULNT30202 nBS ', '3 mm', '6 mm', '4.5 mm', '20 mm', '50 mm', '2', '', '', '', 0),
(535, 15, 'ULNT30252 nBS ', '3 mm', '6 mm', '4.5 mm', '25 mm', '75 mm', '2', '', '', '', 0),
(536, 15, 'ULNT40122 nBS ', '4 mm', '6 mm', '6 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(537, 15, 'ULNT40162 nBS', '4 mm', '6 mm', '6 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(538, 15, 'ULNT40202 nBS ', '4 mm', '6 mm', '6 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(539, 15, 'ULNT40252 nBS ', '4 mm', '6 mm', '6 mm', '25 mm', '75 mm', '2', '', '', '', 0),
(540, 15, 'ULNT40302 nBS ', '4 mm', '6 mm', '6 mm', '30 mm', '75 mm', '2', '', '', '', 0),
(541, 15, 'ULNT40352 nBS', '4 mm', '6 mm', '6 mm', '35 mm', '75 mm', '2', '', '', '', 0),
(542, 14, 'UMIE3022 nBS ', '0.2 mm', '3 mm', '0.4 mm', '38 mm', '2', '', '', '', '', 0),
(543, 14, 'UMIE3032 nBS ', '0.3 mm', '3 mm', '0.6 mm', '38 mm', '2', '', '', '', '', 0),
(544, 14, 'UMIE3042 nBS ', '0.4 mm', '3 mm', '0.7 mm', '38 mm', '2', '', '', '', '', 0),
(545, 14, 'UMIE3052 nBS ', '0.5 mm', '3 mm', '0.8 mm', '38 mm', '2', '', '', '', '', 0),
(546, 14, 'UMIE3062 Nbs', '0.6 mm', '3 mm', '0.9 mm', '38 mm', '2', '', '', '', '', 0),
(547, 14, 'UMIE3072 nBS ', '0.7 mm', '3 mm', '1.4 mm', '38 mm', '2', '', '', '', '', 0),
(548, 14, 'UMIE3082 nBS ', '0.8 mm', '3 mm', '1.6 mm', '38 mm', '2', '', '', '', '', 0),
(549, 14, 'UMIE3092 nBS ', '0.9 mm', '3 mm', '1.8 mm', '38 mm', '2', '', '', '', '', 0),
(550, 14, 'UMIE3102 nBS ', '1 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(551, 14, 'UMIE3112 nBS', '1.1 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(552, 14, 'UMIE3122 nBS', '1.2 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(553, 14, 'UMIE3132 nBS ', '1.3 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(554, 14, 'UMIE3142 nBS ', '1.4 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', '', 0),
(555, 14, 'UMIE3152 nBS ', '1.5 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(556, 14, 'UMIE3162 nBS ', '1.6 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(557, 14, 'UMIE3172 nBS', '1.7 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(558, 14, 'UMIE3182 nBS ', '1.8 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(559, 14, 'UMIE3192 nBS ', '1.9 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', '', 0),
(560, 14, 'UMIE3202 nBS ', '2 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(561, 14, 'UMIE3212 nBS ', '2.1 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(562, 14, 'UMIE3222 nBS ', '2.2 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(563, 14, 'UMIE3232 nBS ', '2.3 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(564, 14, 'UMIE3242 nBS ', '2.4 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', '', 0),
(565, 14, 'UMIE3252 nBS ', '2.5 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(566, 14, 'UMIE3262 nBS ', '2.6 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(567, 14, 'UMIE3272 nBS ', '2.7 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(568, 14, 'UMIE3282 nBS ', '2.8 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(569, 14, 'UMIE3292 nBS ', '2.9 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(570, 14, 'UMIE3302 nBS ', '3 mm', '3 mm', '8 mm', '38 mm', '2', '', '', '', '', 0),
(571, 14, 'UMIE0022 nBS ', '0.2 mm', '4 mm', '0.4 mm', '50 mm', '2', '', '', '', '', 0),
(572, 14, 'UMIE0032 nBS ', '0.3 mm', '4 mm', '0.6 mm', '50 mm', '2', '', '', '', '', 0),
(573, 14, 'UMIE0042 nBS ', '0.4 mm', '4 mm', '0.7 mm', '50 mm', '2', '', '', '', '', 0),
(574, 14, 'UMIE0052 nBS ', '0.5 mm', '4 mm', '0.8 mm', '50 mm', '2', '', '', '', '', 0),
(575, 14, 'UMIE0062 Nbs', '0.6 mm', '4 mm', '0.9 mm', '50 mm', '2', '', '', '', '', 0),
(576, 14, 'UMIE0072 nBS ', '0.7 mm', '4 mm', '1.4 mm', '50 mm', '2', '', '', '', '', 0),
(577, 14, 'UMIE0082 nBS ', '0.8 mm', '4 mm', '1.6 mm', '50 mm', '2', '', '', '', '', 0),
(578, 14, 'UMIE0092 nBS ', '0.9 mm', '4 mm', '0.4 mm', '50 mm', '2', '', '', '', '', 0),
(579, 14, 'UMIE0102 nBS ', '1 mm', '4 mm', '0.6 mm', '50 mm', '2', '', '', '', '', 0),
(580, 14, 'UMIE0112 nBS', '1.1 mm', '4 mm', '0.7 mm', '50 mm', '2', '', '', '', '', 0),
(581, 14, 'UMIE0122 nBS', '1.2 mm', '4 mm', '0.8 mm', '50 mm', '2', '', '', '', '', 0),
(582, 14, 'UMIE0132 nBS ', '1.3 mm', '4 mm', '0.9 mm', '50 mm', '2', '', '', '', '', 0),
(583, 14, 'UMIE0142 nBS ', '1.4 mm', '4 mm', '1.4 mm', '50 mm', '2', '', '', '', '', 0),
(584, 14, 'UMIE0152 nBS ', '1.5 mm', '4 mm', '1.6 mm', '50 mm', '2', '', '', '', '', 0),
(585, 14, 'UMIE0162 nBS ', '1.6 mm', '4 mm', '1.8 mm', '50 mm', '2', '', '', '', '', 0),
(586, 14, 'UMIE0172 nBS', '1.7 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(587, 14, 'UMIE0182 nBS ', '1.8 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(588, 14, 'UMIE0192 nBS ', '1.9 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(589, 14, 'UMIE0202 nBS ', '2 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(590, 14, 'UMIE0212 nBS ', '2.1 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(591, 14, 'UMIE0222 nBS ', '2.2 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(592, 14, 'UMIE0232 nBS ', '2.3 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(593, 14, 'UMIE0242 nBS ', '2.4 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(594, 14, 'UMIE0252 nBS ', '2.5 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(595, 14, 'UMIE0262 nBS ', '2.6 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(596, 14, 'UMIE0272 nBS ', '2.7 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(597, 14, 'UMIE0282 nBS ', '2.8 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(598, 14, 'UMIE0292 nBS ', '2.9 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(599, 14, 'UMIE0302 nBS ', '3 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(600, 12, 'SLE0602 AlTiN ', '6 mm', '6 mm', '16 mm', '75 mm', '2', '', '', '', '', 0),
(601, 12, 'MLE0602 AlTiN ', '6 mm', '6 mm', '16 mm', '100 mm', '2', '', '', '', '', 0),
(602, 12, 'SLE0802 AlTiN ', '8 mm', '8 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(603, 12, 'MLE0802 AlTiN ', '8 mm', '8 mm', '20 mm', '100 mm', '2', '', '', '', '', 0),
(604, 12, 'SLE1002 AlTiN', '10 mm', '10 mm', '25 mm', '100 mm', '2', '', '', '', '', 0),
(605, 12, 'MLE1002 AlTiN ', '10 mm', '10 mm', '25 mm', '150 mm', '2', '', '', '', '', 0),
(606, 12, 'SLE1202 AlTiN ', '12 mm', '12 mm', '32 mm', '100 mm', '2', '', '', '', '', 0),
(607, 12, 'MLE1202 AlTiN', '12 mm', '12 mm', '32 mm', '150 mm', '2', '', '', '', '', 0),
(608, 11, 'SSE0102 AlTiN ', '1 mm', '3 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(609, 13, 'LET0102 AlTiN ', '1 mm', '4 mm', '7 mm', '50 mm', '2', '', '', '', '', 0),
(610, 13, 'LET0152 AlTiN ', '1.5 mm', '4 mm', '9 mm', '50 mm', '2', '', '', '', '', 0),
(611, 13, 'LET0202 AlTiN ', '2 mm', '4 mm', '12 mm', '50 mm', '2', '', '', '', '', 0),
(612, 13, 'LET0252 AlTiN ', '2.5 mm', '4 mm', '12 mm', '50 mm', '2', '', '', '', '', 0),
(613, 13, 'LET0302 AlTiN ', '3 mm', '6 mm', '15 mm', '60 mm', '2', '', '', '', '', 0),
(614, 13, 'LET0352 AlTiN ', '3.5 mm', '6 mm', '15 mm', '60 mm', '2', '', '', '', '', 0),
(615, 13, 'LET0402 AlTiN ', '4 mm', '6 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(616, 13, 'LET0452 AlTiN ', '4.5 mm', '6 mm', '20 mm', '75 mm', '2', '', '', '', '', 0),
(617, 13, 'LET0502 AlTiN ', '5 mm', '6 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(618, 13, 'LET0552 AlTiN ', '5.5 mm', '6 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(619, 13, 'LET0602 AlTiN ', '6 mm', '6 mm', '30 mm', '75 mm', '2', '', '', '', '', 0),
(620, 13, 'LET0702 AlTiN ', '7 mm', '8 mm', '30 mm', '100 mm', '2', '', '', '', '', 0),
(621, 13, 'LET0802 AlTiN ', '8 mm', '8 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(622, 13, 'LET0902 AlTiN ', '9 mm', '10 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(623, 13, 'LET1002 AlTiN ', '10 mm', '10 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(624, 13, 'LET1102 AlTiN', '11 mm', '12 mm', '40 mm', '100 mm', '2', '', '', '', '', 0),
(625, 13, 'LET1202 AlTiN ', '12 mm', '12 mm', '50 mm', '100 mm', '2', '', '', '', '', 0),
(626, 11, 'MSE0102 AlTiN ', '1 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', '', 0),
(627, 11, 'SSE0152 AlTiN ', '1.5 mm', '3 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(628, 11, 'MSE0152 AlTiN ', '1.5 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', '', 0),
(629, 11, 'SSE0202 AlTiN', '2 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(630, 11, 'MSE0202 AlTiN ', '2 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', '', 0),
(631, 11, 'MSE0252 AlTiN ', '2.5 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(632, 11, 'SSE0302 AlTiN ', '3 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(633, 11, 'SSE0252 AlTiN ', '2.5 mm', '3 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(634, 11, 'MSE0302 AlTiN ', '3 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', '', 0),
(635, 11, 'MSE0352 AlTiN ', '3.5 mm', '4 mm', '10 mm', '50 mm', '2', '', '', '', '', 0),
(636, 11, 'MSE0402 AlTiN ', '4 mm', '4 mm', '11 mm', '50 mm', '2', '', '', '', '', 0),
(637, 11, 'SE0602 AlTiN ', '6 mm', '6 mm', '16 mm', '50 mm', '2', '', '', '', '', 0),
(638, 11, 'SE0802 AlTiN ', '8 mm', '8 mm', '20 mm', '60 mm', '2', '', '', '', '', 0),
(639, 11, 'SE1002 AlTiN ', '10 mm', '10 mm', '25 mm', '75 mm', '2', '', '', '', '', 0),
(640, 11, 'SE1202 AlTiN ', '12 mm', '12 mm', '32 mm', '75 mm', '2', '', '', '', '', 0),
(674, 17, 'SSE0104 AlTiN', '1 mm', '3 mm', '3 mm', '50 mm', '4', '', '', '', '', 0),
(675, 17, 'MSE0104 AlTiN', '1 mm', '4 mm', '3 mm', '50 mm', '4', '', '', '', '', 0),
(676, 17, 'SSE0154 AlTiN ', '1.5 mm', '3 mm', '4 mm', '50 mm', '4', '', '', '', '', 0),
(677, 17, 'MSE0154 AlTiN ', '1.5 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', '', 0),
(678, 17, 'SSE0204 AlTiN ', '2 mm', '3 mm', '6 mm', '50 mm', '4', '', '', '', '', 0),
(679, 17, 'MSE0204 AlTiN ', '2 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', '', 0),
(680, 17, 'SSE0254 AlTiN ', '2.5 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(681, 17, 'MSE0254 AlTiN ', '2.5 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(682, 17, 'SSE0304 AlTiN ', '3 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(683, 17, 'MSE0304 AlTiN ', '3 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(684, 17, 'MSE0354 AlTiN ', '3.5 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', '', 0),
(685, 17, 'MSE0404 AlTiN ', '4 mm', '4 mm', '11 mm', '50 mm', '4', '', '', '', '', 0),
(686, 17, 'SE0604 AlTiN', '6 mm', '6 mm', '16 mm', '50 mm', '4', '', '', '', '', 0),
(687, 17, 'SE0654 AlTiN ', '6.5 mm', '8 mm', '16 mm', '60 mm', '4', '', '', '', '', 0),
(688, 17, 'SE0704 AlTiN ', '7 mm', '8 mm', '16 mm', '60 mm', '4', '', '', '', '', 0),
(689, 17, 'SE0754 AlTiN ', '7.5 mm', '8 mm', '19 mm', '60 mm', '4', '', '', '', '', 0),
(690, 17, 'SE0804 AlTiN ', '8 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', '', 0),
(691, 17, 'SE0854 AlTiN', '8.5 mm', '10 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(692, 17, 'SE0904 AlTiN ', '9 mm', '10 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(693, 17, 'SE0954 AlTiN ', '9.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', '', 0),
(694, 17, 'SE1004 AlTiN ', '10 mm', '10 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(695, 17, 'SE1054 AlTiN', '10.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(696, 17, 'SE1104 AlTiN ', '11 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(697, 17, 'SE1154 AlTiN ', '11.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(698, 17, 'SE1204 AlTiN ', '12 mm', '12 mm', '32 mm', '75 mm', '4', '', '', '', '', 0),
(699, 19, 'SLE0604 AlTiN ', '6 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', '', 0),
(700, 19, 'MLE0604 AlTiN ', '6 mm', '6 mm', '16 mm', '100 mm', '4', '', '', '', '', 0),
(701, 19, 'SLE0804 AlTiN ', '8 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(702, 19, 'MLE0804 AlTiN ', '8 mm', '8 mm', '20 mm', '100 mm', '4', '', '', '', '', 0),
(703, 19, 'SLE1004 AlTiN ', '10 mm', '10 mm', '30 mm', '100 mm', '4', '', '', '', '', 0),
(704, 19, 'MLE1004 AlTiN ', '10 mm', '10 mm', '30 mm', '150 mm', '4', '', '', '', '', 0),
(705, 19, 'SLE1204 AlTiN ', '12 mm', '12 mm', '32 mm', '100 mm', '4', '', '', '', '', 0),
(706, 19, 'MLE1204 AlTiN ', '12 mm', '12 mm', '32 mm', '150 mm', '4', '', '', '', '', 0),
(707, 20, 'LET0104 AlTiN ', '1 mm', '4 mm', '7 mm', '50 mm', '4', '', '', '', '', 0),
(708, 20, 'LET0154 AlTiN ', '1.5 mm', '4 mm', '9 mm', '50 mm', '4', '', '', '', '', 0),
(709, 20, 'LET0204 AlTiN ', '2 mm', '4 mm', '12 mm', '50 mm', '4', '', '', '', '', 0),
(710, 20, 'LET0254 AlTiN ', '2.5 mm', '4 mm', '12 mm', '50 mm', '4', '', '', '', '', 0),
(711, 20, 'LET0304 AlTiN ', '3 mm', '6 mm', '15 mm', '60 mm', '4', '', '', '', '', 0),
(712, 20, 'LET0354 AlTiN ', '3.5 mm', '6 mm', '15 mm', '60 mm', '4', '', '', '', '', 0),
(713, 20, 'LET0404 AlTiN ', '4 mm', '6 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(714, 20, 'LET0454 AlTiN ', '4.5 mm', '6 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(715, 20, 'LET0504 AlTiN ', '5 mm', '6 mm', '25 mm', '75 mm', '4', '', '', '', '', 0),
(716, 20, 'LET0554 AlTiN ', '5.5 mm', '6 mm', '25 mm', '75 mm', '4', '', '', '', '', 0),
(717, 20, 'LET0604 AlTiN ', '6 mm', '6 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(718, 20, 'LET0704 AlTiN ', '7 mm', '8 mm', '30 mm', '100 mm', '4', '', '', '', '', 0),
(719, 20, 'LET0804 AlTiN ', '8 mm', '8 mm', '40 mm', '100 mm', '4', '', '', '', '', 0),
(720, 20, 'LET0904 AlTiN ', '9 mm', '10 mm', '40 mm', '100 mm', '4', '', '', '', '', 0),
(721, 20, 'LET1004 AlTiN ', '10 mm', '10 mm', '40 mm', '100 mm', '4', '', '', '', '', 0),
(722, 20, 'LET1104 AlTiN', '11 mm', '12 mm', '40 mm', '100 mm', '4', '', '', '', '', 0),
(723, 20, 'LET1204 AlTiN ', '12 mm', '12 mm', '50 mm', '100 mm', '4', '', '', '', '', 0),
(724, 21, 'SFUET0104 TiSiN', '1 mm', '4 mm', '2.5 mm', '50 mm', '4', '', '', '', '', 0),
(725, 21, 'SFUET0154 TiSiN', '1.5 mm', '4 mm', '3 mm', '50 mm', '4', '', '', '', '', 0),
(726, 21, 'SFUET0204 TiSiN ', '2 mm', '4 mm', '5 mm', '50 mm', '4', '', '', '', '', 0),
(727, 21, 'SFUET0254 TiSiN ', '2.5 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', '', 0),
(728, 21, 'SFUET0304 TiSiN ', '3 mm', '4 mm', '7.5 mm', '50 mm', '4', '', '', '', '', 0),
(729, 21, 'SFUET0354 TiSiN ', '3.5 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(730, 21, 'SFUET0404 TiSiN ', '4 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', '', 0),
(731, 21, 'SFUET0454 TiSiN ', '4.5 mm', '6 mm', '10 mm', '50 mm', '4', '', '', '', '', 0),
(732, 21, 'SFUET0504 TiSiN', '5 mm', '6 mm', '12 mm', '50 mm', '4', '', '', '', '', 0),
(733, 21, 'SFUET0554 TiSiN ', '5.5 mm', '6 mm', '12.5 mm', '60 mm', '4', '', '', '', '', 0),
(734, 21, 'SFUET0604 TiSiN', '6 mm', '6 mm', '15 mm', '60 mm', '4', '', '', '', '', 0),
(735, 21, 'SFUET0704 TiSiN ', '7 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', '', 0),
(736, 21, 'SFUET0804 TiSiN ', '8 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', '', 0),
(737, 21, 'SFUET1004 TiSiN ', '10 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', '', 0),
(738, 21, 'SFUET1204 TiSiN ', '12 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(739, 22, 'SFULET0104 TiSiN', '1 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', '', 0),
(740, 22, 'SFULET0154 TiSiN ', '1.5 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', '', 0),
(741, 22, 'SFULET0204 TiSiN ', '2 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', '', 0),
(742, 22, 'SFULET0304 TiSiN ', '3 mm', '6 mm', '12 mm', '60 mm', '4', '', '', '', '', 0),
(743, 22, 'SFULET0404 TiSiN ', '4 mm', '6 mm', '16 mm', '60 mm', '4', '', '', '', '', 0),
(744, 22, 'SFULET0504 TiSiN', '5 mm', '6 mm', '20 mm', '75 mm', '4', '', '', '', '', 0),
(745, 22, 'SFULET0604 TiSiN', '6 mm', '6 mm', '25 mm', '75 mm', '4', '', '', '', '', 0),
(746, 22, 'SFULET0704 TiSiN ', '7 mm', '8 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(747, 22, 'SFULET0804 TiSiN ', '8 mm', '8 mm', '30 mm', '75 mm', '4', '', '', '', '', 0),
(748, 22, 'SFULET1004 TiSiN ', '10 mm', '10 mm', '40 mm', '100 mm', '4', '', '', '', '', 0),
(749, 22, 'SFULET1204 TiSiN', '12 mm', '12 mm', '45 mm', '100 mm', '4', '', '', '', '', 0),
(750, 24, 'MSB0104 AlTiN ', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '4', '', '', '', 0),
(751, 24, 'MSB0154 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '4', '', '', '', 0),
(752, 24, 'MSB0204 AlTiN ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', 0),
(753, 24, 'MSB0254 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '4', '', '', '', 0),
(754, 24, 'SSB0304 AlTiN ', '1.5 mm', '1.5 mm', '3 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(755, 24, 'MSB0304 AlTiN ', '3.5 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(756, 24, 'MSB0354 AlTiN ', '3.6 mm', '1.75 mm', '4 mm', '7 mm', '50 mm', '4', '', '', '', 0),
(757, 24, 'MSB0404 AlTiN ', '4 mm', '2 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(758, 24, 'SB0604 AlTiN ', '6 mm', '3 mm', '6 mm', '12 mm', '50 mm', '4', '', '', '', 0),
(759, 24, 'SB0704 AlTiN ', '7 mm', '3.5 mm', '8 mm', '14 mm', '60 mm', '4', '', '', '', 0),
(760, 24, 'SB0804 AlTiN', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '4', '', '', '', 0),
(761, 24, 'SB0904 AlTiN ', '9 mm', '4.5 mm', '10 mm', '18 mm', '75 mm', '4', '', '', '', 0),
(762, 24, 'SB1004 AlTiN ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(763, 24, 'SB1104 AlTiN', '11 mm', '5.5 mm', '12 mm', '22 mm', '75 mm', '4', '', '', '', 0),
(764, 24, 'SB1204 AlTiN ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '4', '', '', '', 0),
(782, 25, 'UBT0104 nBS ', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '4', '', '', '', 0),
(783, 25, 'UBT0204 nBS ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', 0),
(784, 25, 'UBT0254 nBS ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '4', '', '', '', 0),
(785, 25, 'UBT0304 nBS ', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(786, 25, 'UBT0404 nBS ', '4 mm', '2 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(787, 25, 'UBT0454 nBS ', '4.5 mm', '2.25 mm', '6 mm', '9 mm', '50 mm', '4', '', '', '', 0),
(788, 25, 'UBT0504 nBS', '5 mm', '2.5 mm', '6 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(789, 25, 'UBT0604 nBS ', '6 mm', '3 mm', '6 mm', '12 mm', '50 mm', '4', '', '', '', 0),
(790, 25, 'UBT0704 nBS ', '7 mm', '3.5 mm', '8 mm', '14 mm', '60 mm', '4', '', '', '', 0),
(791, 25, 'UBT0804 nBS', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '4', '', '', '', 0),
(792, 25, 'UBT0814 nBS ', '8 mm', '4 mm', '8 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(793, 25, 'UBT1004 nBS ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(794, 25, 'UBT1204 nBS', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '4', '', '', '', 0),
(795, 25, 'ULBT0604 nBS ', '6 mm', '3 mm', '6 mm', '12 mm', '75 mm', '4', '', '', '', 0),
(796, 25, 'ULBT0804 nBS', '8 mm', '4 mm', '8 mm', '16 mm', '100 mm', '4', '', '', '', 0),
(797, 25, 'ULBT1004 nBS', '10 mm', '5 mm', '10 mm', '20 mm', '100 mm', '4', '', '', '', 0),
(798, 25, 'ULBT1204 nBS ', '12 mm', '6 mm', '12 mm', '24 mm', '100 mm', '4', '', '', '', 0),
(799, 23, 'SFUBT0104 TiSiN ', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '4', '', '', '', 0),
(800, 23, 'SFUBT0154 TiSiN ', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '4', '', '', '', 0),
(801, 23, 'SFUBT0204 TiSiN', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', 0),
(802, 23, 'SFUBT0254 TiSiN ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '50 mm', '4', '', '', '', 0),
(803, 23, 'SFUBT0304 TiSiN ', '3 mm', '1.5 mm', '4 mm', '5.5 mm', '50 mm', '4', '', '', '', 0),
(804, 23, 'SFUBT0404 TiSiN ', ' 4 mm', '2 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(805, 23, 'SFUBT0504 TiSiN ', '5 mm', '2.5 mm', '6 mm', '9 mm', '50 mm', '4', '', '', '', 0),
(806, 23, 'SFUBT0604 TiSiN ', '6 mm', '3 mm', '6 mm', '9 mm', '60 mm', '4', '', '', '', 0),
(807, 23, 'SFUBT0614 TiSiN ', '6 mm', '3 mm', '6 mm', '9 mm', '75 mm', '4', '', '', '', 0),
(808, 23, 'SFUBT0804 TiSiN', '7 mm', '4 mm', '8 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(809, 23, 'SFUBT1004 TiSiN ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(810, 23, 'SFUBT1014 TiSiN ', '10 mm', '5 mm', '10 mm', '20 mm', '100 mm', '4', '', '', '', 0),
(811, 23, 'SFUBT1204 TiSiN ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '4', '', '', '', 0),
(812, 23, 'SFUBT1214 TiSiN ', '12 mm', '6 mm', '12 mm', '24 mm', '100 mm', '4', '', '', '', 0),
(813, 26, 'SSB0102 AlTiN ', '1 mm', '0.5 mm', '3 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(814, 26, 'MSB0102 AlTiN', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(815, 26, 'SSB0152 AlTiN ', '1.5 mm', '0.75 mm', '3 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(816, 26, 'MSB0152 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(817, 26, 'SSB0202 AlTiN', '2 mm', '1 mm', '3 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(818, 26, 'MSB0202 AlTiN ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(819, 26, 'SSB0252 AlTiN ', '2.5 mm', '1.25 mm', '3 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(820, 26, 'MSB0252 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(821, 26, 'SSB0302 AlTiN ', '3 mm', '1.5 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(822, 26, 'MSB0302 AlTiN ', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(823, 26, 'MSB0352 AlTiN ', '3.5 mm', '1.75 mm', '4 mm', '7 mm', '50 mm', '2', '', '', '', 0),
(824, 26, 'MSB0402 AlTiN ', '4 mm', '2 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(825, 26, 'SB0602 AlTiN ', '6 mm', '3 mm', '6 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(826, 26, 'SB0702 AlTiN ', '7 mm', '3.5 mm', '8 mm', '14 mm', '60 mm', '2', '', '', '', 0),
(827, 26, 'SB0802 AlTiN ', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(828, 26, 'SB0902 AlTiN ', '9 mm', '4.5 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', 0),
(829, 26, 'SB1002 AlTiN ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(830, 26, 'SB1102 AlTiN ', '11 mm', '5.5 mm', '12 mm', '22 mm', '75 mm', '2', '', '', '', 0),
(831, 26, 'SB1202 AlTiN ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', 0),
(832, 27, 'SLB0102 ', '1 mm', '0.5 mm', '6 mm', '2 mm', '75 mm', '2', '', '', '', 0),
(833, 27, 'MLB0102 ', '1 mm', '0.5 mm', '6 mm', '2 mm', '100 mm', '2', '', '', '', 0),
(834, 27, 'SLB0152 ', '1.5 mm', '0.75 mm', '6 mm', '3 mm', '75 mm', '2', '', '', '', 0),
(835, 27, 'MLB0152 ', '1.5 mm', '0.75 mm', '6 mm', '3 mm', '100 mm', '2', '', '', '', 0),
(836, 27, 'SLB0202 ', '2 mm', '1 mm', '6 mm', '4 mm', '75 mm', '2', '', '', '', 0),
(837, 27, 'MLB0202 ', '2 mm', '1 mm', '6 mm', '4 mm', '100 mm', '2', '', '', '', 0),
(838, 27, 'SLB0252 ', '2.5 mm', '1.25 mm', '6 mm', '5 mm', '75 mm', '2', '', '', '', 0),
(839, 27, 'MLB0252 ', '2.5 mm', '1.25 mm', '6 mm', '5 mm', '100 mm', '2', '', '', '', 0),
(840, 27, 'SLB0302 ', '3 mm', '1.5 mm', '6 mm', '6 mm', '75 mm', '2', '', '', '', 0),
(841, 27, 'MLB0302 ', '3 mm', '1.5 mm', '6 mm', '6 mm', '100 mm', '2', '', '', '', 0),
(842, 27, 'MLB0352 ', '3.5 mm', '1.75 mm', '6 mm', '7 mm', '100 mm', '2', '', '', '', 0),
(843, 27, 'SLB0402', '4 mm', '2 mm', '6 mm', '8 mm', '75 mm', '2', '', '', '', 0),
(844, 27, 'MLB0402 ', '4 mm', '2 mm', '6 mm', '8 mm', '100 mm', '2', '', '', '', 0),
(845, 27, 'SLB0502 ', '5 mm', '2.5 mm', '6 mm', '10 mm', '75 mm', '2', '', '', '', 0),
(846, 27, 'MLB0502', '5 mm', '2.5 mm', '6 mm', '10 mm', '100 mm', '2', '', '', '', 0),
(847, 27, 'SLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '75 mm', '2', '', '', '', 0),
(848, 27, 'MLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '100 mm', '2', '', '', '', 0),
(849, 27, 'LLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '150 mm', '2', '', '', '', 0),
(850, 27, 'SLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '75 mm', '2', '', '', '', 0),
(851, 27, 'MLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '100 mm', '2', '', '', '', 0),
(852, 27, 'LLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '150 mm', '2', '', '', '', 0),
(853, 27, 'MLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '100 mm', '2', '', '', '', 0),
(854, 27, 'LLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '150 mm', '2', '', '', '', 0),
(855, 27, 'XLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '200 mm', '2', '', '', '', 0),
(856, 27, 'MLB1202 ', '12 mm', '6 mm', '12 mm', '24 mm', '100 mm', '2', '', '', '', 0),
(857, 27, 'LLB1202 ', '12 mm', '6 mm', '12 mm', '24 mm', '150 mm', '2', '', '', '', 0),
(858, 27, 'XLB1202', '12 mm', '6 mm', '12 mm', '24 mm', '200 mm', '2', '', '', '', 0),
(859, 28, 'LNBT05022 AlTiN ', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '2 mm', '50 mm', '', '', '', 0),
(860, 28, 'LNBT05042 AlTiN ', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '4 mm', '50 mm', '', '', '', 0),
(861, 28, 'LNBT05062 AlTiN ', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '6 mm', '50 mm', '', '', '', 0);
INSERT INTO `porta_portafolio_carburado_cab` (`idporta_portafolio_carburado_cab`, `idportafolio_carburado_cab`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `valor`) VALUES
(862, 28, 'LNBT06022 AlTiN ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '2 mm', '50 mm', '', '', '', 0),
(863, 28, 'LNBT06042 AlTiN ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '4 mm', '50 mm', '', '', '', 0),
(864, 28, 'LNBT06062 AlTiN ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '6 mm', '50 mm', '', '', '', 0),
(865, 28, 'LNBT08042 AlTiN ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '4 mm', '50 mm', '', '', '', 0),
(866, 28, 'LNBT08062 AlTiN ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '6 mm', '50 mm', '', '', '', 0),
(867, 28, 'LNBT08082 AlTiN ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '8 mm', '50 mm', '', '', '', 0),
(868, 28, 'LNBT10062 AlTiN ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '6 mm', '50 mm', '', '', '', 0),
(869, 28, 'LNBT10082 AlTiN ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '8 mm', '50 mm', '', '', '', 0),
(870, 28, 'LNBT10102 AlTiN ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '10 mm', '50 mm', '', '', '', 0),
(871, 28, 'LNBT10122 AlTiN ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '12 mm', '50 mm', '', '', '', 0),
(872, 28, 'LNBT12062 AlTiN ', '1.2 mm', '0.6 mm', '4 mm', '1.8 mm', '6 mm', '50 mm', '', '', '', 0),
(873, 28, 'LNBT12082 AlTiN', '1.2 mm', '0.6 mm', '4 mm', '1.8 mm', '8 mm', '50 mm', '', '', '', 0),
(874, 28, 'LNBT12102 AlTiN', '1.2 mm', '0.6 mm', '4 mm', '1.8 mm', '10 mm', '50 mm', '', '', '', 0),
(875, 28, 'LNBT12122 AlTiN ', '1.2 mm', '0.6 mm', '4 mm', '1.8 mm', '12 mm', '50 mm', '', '', '', 0),
(876, 28, 'LNBT14062 AlTiN ', '1.4 mm', '0.7 mm', '4 mm', '2.1 mm', '6 mm', '50 mm', '', '', '', 0),
(877, 28, 'LNBT14102 AlTiN ', '1.4 mm', '0.7 mm', '4 mm', '2.1 mm', '10 mm', '50 mm', '', '', '', 0),
(878, 28, 'LNBT14162 AlTiN ', '1.4 mm', '0.7 mm', '4 mm', '2.1 mm', '16 mm', '50 mm', '', '', '', 0),
(879, 28, 'LNBT15062 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '6 mm', '50 mm', '', '', '', 0),
(880, 28, 'LNBT15082 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '8 mm', '50 mm', '', '', '', 0),
(881, 28, 'LNBT15102 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '10 mm', '50 mm', '', '', '', 0),
(882, 28, 'LNBT15122 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '12 mm', '50 mm', '', '', '', 0),
(883, 28, 'LNBT15142 AlTiN', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '14 mm', '50 mm', '', '', '', 0),
(884, 28, 'LNBT15162 AlTiN', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '16 mm', '50 mm', '', '', '', 0),
(885, 28, 'LNBT15182 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '18 mm', '50 mm', '', '', '', 0),
(886, 28, 'LNBT15202 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '20 mm', '50 mm', '', '', '', 0),
(887, 28, 'LNBT16062 AlTiN', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '6 mm', '50 mm', '', '', '', 0),
(888, 28, 'LNBT16082 AlTiN', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '8 mm', '50 mm', '', '', '', 0),
(889, 28, 'LNBT16102 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '10 mm', '50 mm', '', '', '', 0),
(890, 28, 'LNBT16122 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '12 mm', '50 mm', '', '', '', 0),
(891, 28, 'LNBT16142 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '14 mm', '50 mm', '', '', '', 0),
(892, 28, 'LNBT16162 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '16 mm', '50 mm', '', '', '', 0),
(893, 28, 'LNBT16182 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '18 mm', '50 mm', '', '', '', 0),
(894, 28, 'LNBT16202 AlTiN ', '1.6 mm', '0.8 mm', '4 mm', '2.4 mm', '20 mm', '50 mm', '', '', '', 0),
(895, 28, 'LNBT18082 AlTiN ', '1.8 mm', '0.9 mm', '4 mm', '2.7 mm', '8 mm', '50 mm', '', '', '', 0),
(896, 28, 'LNBT18142 AlTiN ', '1.8 mm', '0.9 mm', '4 mm', '2.7 mm', '14 mm', '50 mm', '', '', '', 0),
(897, 28, 'LNBT18202 AlTiN ', '1.8 mm', '0.9 mm', '4 mm', '2.7 mm', '20 mm', '50 mm', '', '', '', 0),
(898, 28, 'LNBT20082 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '8 mm', '50 mm', '', '', '', 0),
(899, 28, 'LNBT20102 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '10 mm', '50 mm', '', '', '', 0),
(900, 28, 'LNBT20122 AlTiN', '2 mm', '1 mm', '4 mm', '3 mm', '12 mm', '50 mm', '', '', '', 0),
(901, 28, 'LNBT20142 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '14 mm', '50 mm', '', '', '', 0),
(902, 28, 'LNBT20162 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '16 mm', '50 mm', '', '', '', 0),
(903, 28, 'LNBT20182 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '18 mm', '50 mm', '', '', '', 0),
(904, 28, 'LNBT20202 AlTiN ', '2 mm', '1 mm', '4 mm', '3 mm', '20 mm', '50 mm', '', '', '', 0),
(905, 28, 'LNBT25082 AlTiN ', '2.5  mm', '1.25 mm', '4 mm', '4 mm', '8 mm', '50 mm', '', '', '', 0),
(906, 28, 'LNBT25122 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '12 mm', '50 mm', '', '', '', 0),
(907, 28, 'LNBT25162 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '16 mm', '50 mm', '', '', '', 0),
(908, 28, 'LNBT25202 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '20 mm', '50 mm', '', '', '', 0),
(909, 28, 'LNBT30102 AlTiN ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '10 mm', '50 mm', '', '', '', 0),
(910, 28, 'LNBT30122 AlTiN ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '12 mm', '50 mm', '', '', '', 0),
(911, 28, 'LNBT30162 AlTiN ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '16 mm', '60 mm', '', '', '', 0),
(912, 28, 'LNBT30202 AlTiN ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '20 mm', '60 mm', '', '', '', 0),
(913, 28, 'LNBT30252 AlTiN ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '25 mm', '75 mm', '', '', '', 0),
(914, 28, 'LNBT40122 AlTiN', '4 mm', '2 mm', '6 mm', '6 mm', '12 mm', '50 mm', '', '', '', 0),
(915, 28, 'LNBT40162 AlTiN ', '4 mm', '2 mm', '6 mm', '6 mm', '16 mm', '60 mm', '', '', '', 0),
(916, 28, 'LNBT40202 AlTiN ', '4 mm', '2 mm', '6 mm', '6 mm', '20 mm', '75 mm', '', '', '', 0),
(917, 28, 'LNBT40252 AlTiN ', '4 mm', '2 mm', '6 mm', '6 mm', '25 mm', '75 mm', '', '', '', 0),
(918, 28, 'LNBT40302 AlTiN ', '4 mm', '2 mm', '6 mm', '6 mm', '30 mm', '75 mm', '', '', '', 0),
(919, 29, 'UBT0102 nBS', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(920, 29, 'UBT0152 nBS', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(921, 29, 'UBT0202 nBS ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(922, 29, 'UBT0252 nBS ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(923, 29, 'UBT0302 nBS ', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(924, 29, 'UBT0352 nBS', '3.5 mm', '1.75 mm', '4 mm', '7 mm', '50 mm', '2', '', '', '', 0),
(925, 29, 'UBT0402 nBS', '4 mm', '2 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(926, 29, 'UBT0452 nBS ', '4.5 mm', '2.25 mm', '6 mm', '9 mm', '50 mm', '2', '', '', '', 0),
(927, 29, 'UBT0502 nBS ', '5 mm', '2.5 mm', '6 mm', '10 mm', '50 mm', '2', '', '', '', 0),
(928, 29, 'UBT0552 nBS ', '5.5 mm', '2.75 mm', '6 mm', '11 mm', '50 mm', '2', '', '', '', 0),
(929, 29, 'UBT0602 nBS ', '6 mm', '3 mm', '6 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(930, 29, 'UBT0702 nBS ', '7 mm', '3.5 mm', '8 mm', '14 mm', '50 mm', '2', '', '', '', 0),
(931, 29, 'UBT0802 nBS ', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(932, 29, 'UBT0812 nBS ', '8 mm', '4 mm', '8 mm', '16 mm', '75 mm', '2', '', '', '', 0),
(933, 29, 'UBT0902 nBS', '9 mm', '4.5 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', 0),
(934, 29, 'UBT1002 nBS ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(935, 29, 'UBT1202 nBS ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', 0),
(936, 30, 'UMIB0032 nBS ', '0.3 mm', '0.15 mm', '4 mm', '0.6 mm', '50 mm', '2', '', '', '', 0),
(937, 30, 'UMIB0042 nBS ', '0.4 mm', '0.2 mm', '4 mm', '0.7 mm', '50 mm', '2', '', '', '', 0),
(938, 30, 'UMIB0052 nBS ', '0.5 mm', '0.25 mm', '4 mm', '0.8 mm', '50 mm', '2', '', '', '', 0),
(939, 30, 'UMIB0062 Nbs', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '50 mm', '2', '', '', '', 0),
(940, 30, 'UMIB0072 nBS ', '0.7 mm', '0.35 mm', '4 mm', '1.4 mm', '50 mm', '2', '', '', '', 0),
(941, 30, 'UMIB0082 nBS ', '0.8 mm', '0.4 mm', '4 mm', '1.6 mm', '50 mm', '2', '', '', '', 0),
(942, 30, 'UMIB0092 nBS ', '0.9 mm', '0.45 mm', '4 mm', '1.8 mm', '50 mm', '2', '', '', '', 0),
(943, 30, 'UMIB0102 nBS ', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(944, 30, 'UMIB0112 nBS', '1.1 mm', '0.55 mm', '4 mm', '2.2 mm', '50 mm', '2', '', '', '', 0),
(945, 30, 'UMIB0122 nBS', '1.2 mm', '0.6 mm', '4 mm', '2.4 mm', '50 mm', '2', '', '', '', 0),
(946, 30, 'UMIB0132 nBS ', '1.3 mm', '0.65 mm', '4 mm', '2.6 mm', '50 mm', '2', '', '', '', 0),
(947, 30, 'UMIB0142 nBS ', '1.4 mm', '0.7 mm', '4 mm', '2.8 mm', '50 mm', '2', '', '', '', 0),
(948, 30, 'UMIB0152 nBS ', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(949, 30, 'UMIB0162 nBS ', '1.6 mm', '0.8 mm', '4 mm', '3.2 mm', '50 mm', '2', '', '', '', 0),
(950, 30, 'UMIB0172 nBS', '1.7 mm', '0.85 mm', '4 mm', '3.4 mm', '50 mm', '2', '', '', '', 0),
(951, 30, 'UMIB0182 nBS ', '1.8 mm', '0.9 mm', '4 mm', '3.6 mm', '50 mm', '2', '', '', '', 0),
(952, 30, 'UMIB0192 nBS ', '1.9 mm', '0.95 mm', '4 mm', '3.8 mm', '50 mm', '2', '', '', '', 0),
(953, 30, 'UMIB0202 nBS ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(954, 30, 'UMIB0212 nBS ', '2.1 mm', '1.05 mm', '4 mm', '4.2 mm', '50 mm', '2', '', '', '', 0),
(955, 30, 'UMIB0222 nBS ', '2.2 mm', '1.1 mm', '4 mm', '4.4 mm', '50 mm', '2', '', '', '', 0),
(956, 30, 'UMIB0232 nBS ', '2.3 mm', '1.15 mm', '4 mm', '4.6 mm', '50 mm', '2', '', '', '', 0),
(957, 30, 'UMIB0242 nBS ', '2.4 mm', '1.2 mm', '4 mm', '4.8 mm', '50 mm', '2', '', '', '', 0),
(958, 30, 'UMIB0252 nBS ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(959, 30, 'UMIB0262 nBS ', '2.6 mm', '1.3 mm', '4 mm', '5.2 mm', '50 mm', '2', '', '', '', 0),
(960, 30, 'UMIB0272 nBS ', '2.7 mm', '1.35 mm', '4 mm', '5.4 mm', '50 mm', '2', '', '', '', 0),
(961, 30, 'UMIB0282 nBS ', '2.8 mm', '1.4 mm', '4 mm', '5.6 mm', '50 mm', '2', '', '', '', 0),
(962, 30, 'UMIB0292 nBS ', '2.9 mm', '1.45 mm', '4 mm', '5.8 mm', '50 mm', '2', '', '', '', 0),
(963, 30, 'UMIB0302 nBS ', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(964, 31, 'SFULNBT05022 nACo ', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '2 mm', '50 mm', '', '', '', 0),
(965, 31, 'SFULNBT05042 nACo ', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '4 mm', '50 mm', '', '', '', 0),
(966, 31, 'SFULNBT05062 nACo', '0.5 mm', '0.25 mm', '4 mm', '0.75 mm', '6 mm', '50 mm', '', '', '', 0),
(967, 31, 'SFULNBT06022 nACo ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '2 mm', '50 mm', '', '', '', 0),
(968, 31, 'SFULNBT06042 nACo ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '4 mm', '50 mm', '', '', '', 0),
(969, 31, 'SFULNBT06062 nACo ', '0.6 mm', '0.3 mm', '4 mm', '0.9 mm', '6 mm', '50 mm', '', '', '', 0),
(970, 31, 'SFULNBT08042 nACo ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '4 mm', '50 mm', '', '', '', 0),
(971, 31, 'SFULNBT08062 nACo ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '6 mm', '50 mm', '', '', '', 0),
(972, 31, 'SFULNBT08082 nACo ', '0.8 mm', '0.4 mm', '4 mm', '1.2 mm', '8 mm', '50 mm', '', '', '', 0),
(973, 31, 'SFULNBT10062 nACo ', '1 mm', '0.5 mm', '4 mm', '1.2 mm', '6 mm', '50 mm', '', '', '', 0),
(974, 31, 'SFULNBT10082 nACo ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '8 mm', '50 mm', '', '', '', 0),
(975, 31, 'SFULNBT10102 nACo ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '10 mm', '50 mm', '', '', '', 0),
(976, 31, 'SFULNBT10122 nACo ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '12 mm', '50 mm', '', '', '', 0),
(977, 31, 'SFULNBT15062 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '6 mm', '50 mm', '', '', '', 0),
(978, 31, 'SFULNBT15082 nACo', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '8 mm', '50 mm', '', '', '', 0),
(979, 31, 'SFULNBT15102 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '10 mm', '50 mm', '', '', '', 0),
(980, 31, 'SFULNBT15122 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '12 mm', '50 mm', '', '', '', 0),
(981, 31, 'SFULNBT15142 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '14 mm', '50 mm', '', '', '', 0),
(982, 31, 'SFULNBT15162 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '16 mm', '50 mm', '', '', '', 0),
(983, 31, 'SFULNBT15182 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '18 mm', '50 mm', '', '', '', 0),
(984, 31, 'SFULNBT15202 nACo ', '1.5 mm', '0.75 mm', '4 mm', '2.3 mm', '20 mm', '50 mm', '', '', '', 0),
(985, 31, 'SFULNBT20082 nACo ', '2 mm', '1 mm', '4 mm', '3 mm', '8 mm', '50 mm', '', '', '', 0),
(986, 31, 'SFULNBT20102 nACo ', '2 mm', '1 mm', '4 mm', '3 mm', '10 mm', '50 mm', '', '', '', 0),
(987, 31, 'SFULNBT20122 nACo ', '2 mm', '1 mm', '4 mm', '3 mm', '12 mm', '50 mm', '', '', '', 0),
(988, 31, 'SFULNBT20142 nACo', '2 mm', '1 mm', '4 mm', '3 mm', '14 mm', '50 mm', '', '', '', 0),
(989, 31, 'SFULNBT20162 nACo ', '2 mm', '1 mm', '4 mm', '3 mm', '16 mm', '50 mm', '', '', '', 0),
(990, 31, 'SFULNBT20182 nACo', '2 mm', '1 mm', '4 mm', '3 mm', '18 mm', '50 mm', '', '', '', 0),
(991, 31, 'SFULNBT20202 nACo ', '2 mm', '1 mm', '4 mm', '3 mm', '20 mm', '50 mm', '', '', '', 0),
(992, 31, 'SFULNBT25082 nACo ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '8 mm', '50 mm', '', '', '', 0),
(993, 31, 'SFULNBT25122 nACo ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '12 mm', '50 mm', '', '', '', 0),
(994, 31, 'SFULNBT25162 nACo ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '16 mm', '50 mm', '', '', '', 0),
(995, 31, 'SFULNBT30102 nACo ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '10 mm', '50 mm', '', '', '', 0),
(996, 31, 'SFULNBT30122 nACo', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '12 mm', '50 mm', '', '', '', 0),
(997, 31, 'SFULNBT30162 nACo ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '16 mm', '60 mm', '', '', '', 0),
(998, 31, 'SFULNBT30202 nACo', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '20 mm', '60 mm', '', '', '', 0),
(999, 31, 'SFULNBT30252 nACo ', '3 mm', '1.5 mm', '6 mm', '4.5 mm', '25 mm', '75 mm', '', '', '', 0),
(1000, 31, 'SFULNBT40122 nACo', '4 mm', '2 mm', '6 mm', '6 mm', '12 mm', '50 mm', '', '', '', 0),
(1001, 31, 'SFULNBT40162 nACo ', '4 mm', '2 mm', '6 mm', '6 mm', '16 mm', '60 mm', '', '', '', 0),
(1002, 31, 'SFULNBT40202 nACo ', '4 mm', '2 mm', '6 mm', '6 mm', '20 mm', '75 mm', '', '', '', 0),
(1003, 31, 'SFULNBT40252 nACo', '4 mm', '2 mm', '6 mm', '6 mm', '25 mm', '75 mm', '', '', '', 0),
(1004, 31, 'SFULNBT40302 nACo ', '4 mm', '2 mm', '6 mm', '6 mm', '30 mm', '75 mm', '', '', '', 0),
(1005, 32, 'SFUBT0102 TiSiN ', '1 mm', '0.5 mm', '4 mm', '1.5 mm', '50 mm', '2', '', '', '', 0),
(1006, 32, 'SFUBT0152 TiSiN ', '1.5 mm', '0.75 mm', '4 mm', '2.5 mm', '50 mm', '2', '', '', '', 0),
(1007, 32, 'SFUBT0202 TiSiN ', '2 mm', '1 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(1008, 32, 'SFUBT0252 TiSiN ', '2.5 mm', '1.25 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(1009, 32, 'SFUBT0302 TiSiN ', '3 mm', '1.5 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(1010, 32, 'SFUBT0402 TiSiN', '4 mm', '2 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(1011, 32, 'SFUBT0502 TiSiN', '5 mm', '2.5 mm', '6 mm', '8 mm', '60 mm', '2', '', '', '', 0),
(1012, 32, 'SFUBT0602 TiSiN ', '6 mm', '3 mm', '6 mm', '9 mm', '60 mm', '2', '', '', '', 0),
(1013, 32, 'SFUBT0702 TiSiN ', '7 mm', '3.5 mm', '8 mm', '14 mm', '60 mm', '2', '', '', '', 0),
(1014, 32, 'SFUBT0802 TiSiN ', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(1015, 32, 'SFUBT0902 TiSiN ', '9 mm', '4.5 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', 0),
(1016, 32, 'SFUBT1002 TiSiN', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(1017, 32, 'SFUBT1202 TiSiN ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', 0),
(1018, 33, 'SFULBT0102 TiSiN ', '1 mm', '0.5 mm', '6 mm', '3 mm', '75 mm', '2', '', '', '', 0),
(1019, 33, 'SFULBT0202 TiSiN ', '2 mm', '1 mm', '6 mm', '4 mm', '75 mm', '2', '', '', '', 0),
(1020, 33, 'SFULBT0302 TiSiN ', '3 mm', '1.5 mm', '6 mm', '5 mm', '75 mm', '2', '', '', '', 0),
(1021, 33, 'SFULBT0402 TiSiN ', '4 mm', '2 mm', '6 mm', '6 mm', '75 mm', '2', '', '', '', 0),
(1022, 33, 'SFULBT0502 TiSiN', '5 mm', '2.5 mm', '6 mm', '8 mm', '75 mm', '2', '', '', '', 0),
(1023, 33, 'SFULBT0602 TiSiN', '6 mm', '3 mm', '6 mm', '9 mm', '75 mm', '2', '', '', '', 0),
(1024, 33, 'SFULBT0612 TiSiN ', '6 mm', '3 mm', '6 mm', '9 mm', '100 mm', '2', '', '', '', 0),
(1025, 33, 'SFULBT0702 TiSiN ', '7 mm', '3.5 mm', '8 mm', '14 mm', '75 mm', '2', '', '', '', 0),
(1026, 33, 'SFULBT0802 TiSiN ', '8 mm', '4 mm', '8 mm', '16 mm', '75 mm', '2', '', '', '', 0),
(1027, 33, 'SFULBT0812 TiSiN ', '8 mm', '4 mm', '8 mm', '16 mm', '100 mm', '2', '', '', '', 0),
(1028, 33, 'SFULBT0902 TiSiN ', '9 mm', '4.5 mm', '10 mm', '18 mm', '100 mm', '2', '', '', '', 0),
(1029, 33, 'SFULBT1002 TiSiN ', '10 mm', '5 mm', '10 mm', '20 mm', '100 mm', '2', '', '', '', 0),
(1030, 33, 'SFULBT1012 TiSiN ', '10 mm', '5 mm', '10 mm', '20 mm', '150 mm', '2', '', '', '', 0),
(1031, 33, 'SFULBT1202 TiSiN ', '12 mm', '6 mm', '12 mm', '24 mm', '100 mm', '2', '', '', '', 0),
(1032, 33, 'SFULBT1212 TiSiN ', '12 mm', '6 mm', '12 mm', '24 mm', '150 mm', '2', '', '', '', 0),
(1033, 34, 'SFUMIB0033 TiSiN ', '0.3 mm', '0.15 mm', '3 mm', '0.6 mm', '38 mm', '2', '', '', '', 0),
(1034, 34, 'SFUMIB0043 TiSiN ', '0.4 mm', '0.2 mm', '3 mm', '0.8 mm', '38 mm', '2', '', '', '', 0),
(1035, 34, 'SFUMIB0053 TiSiN ', '0.5 mm', '0.25 mm', '3 mm', '1 mm', '38 mm', '2', '', '', '', 0),
(1036, 34, 'SFUMIB0063 TiSiN ', '0.6 mm', '0.3 mm', '3 mm', '1.2 mm', '38 mm', '2', '', '', '', 0),
(1037, 34, 'SFUMIB0073 TiSiN ', '0.7 mm', '0.35 mm', '3 mm', '1.4 mm', '38 mm', '2', '', '', '', 0),
(1038, 34, 'SFUMIB0083 TiSiN ', '0.8 mm', '0.4 mm', '3 mm', '1.6 mm', '38 mm', '2', '', '', '', 0),
(1039, 34, 'SFUMIB0093 TiSiN ', '0.9 mm', '0.45 mm', '3 mm', '1.8 mm', '38 mm', '2', '', '', '', 0),
(1040, 34, 'SFUMIB0103 TiSiN ', '1 mm', '0.5 mm', '3 mm', '2 mm', '38 mm', '2', '', '', '', 0),
(1041, 34, 'SFUMIB0123 TiSiN ', '1.2 mm', '0.6 mm', '3 mm', '2.5 mm', '38 mm', '2', '', '', '', 0),
(1042, 34, 'SFUMIB0143 TiSiN ', '1.4 mm', '0.7 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', 0),
(1043, 34, 'SFUMIB0153 TiSiN', '1.5 mm', '0.75 mm', '3 mm', '3 mm', '38 mm', '2', '', '', '', 0),
(1044, 34, 'SFUMIB0163 TiSiN ', '1.6 mm', '0.8 mm', '3 mm', '3.5 mm', '38 mm', '2', '', '', '', 0),
(1045, 34, 'SFUMIB0183 TiSiN ', '1.8 mm', '0.9 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', 0),
(1046, 34, 'SFUMIB0203 TiSiN ', '2 mm', '1 mm', '3 mm', '4 mm', '38 mm', '2', '', '', '', 0),
(1047, 34, 'SFUMIB0223 TiSiN ', '2.2 mm', '1.1 mm', '3 mm', '4.5 mm', '38 mm', '2', '', '', '', 0),
(1048, 34, 'SFUMIB0243 TiSiN ', '2.4 mm', '1.2 mm', '3 mm', '5 mm', '38 mm', '2', '', '', '', 0),
(1049, 34, 'SFUMIB0253 TiSiN ', '2.5 mm', '1.25 mm', '3 mm', '5 mm', '38 mm', '2', '', '', '', 0),
(1050, 34, 'SFUMIB0303 TiSiN', '3 mm', '1.5 mm', '3 mm', '6 mm', '38 mm', '2', '', '', '', 0),
(1051, 34, 'SFUMIB0034 TiSiN ', '0.3 mm', '0.15 mm', '4 mm', '0.6 mm', '50 mm', '2', '', '', '', 0),
(1052, 34, 'SFUMIB0044 TiSiN ', '0.4 mm', '0.2 mm', '4 mm', '0.8 mm', '50 mm', '2', '', '', '', 0),
(1053, 34, 'SFUMIB0054 TiSiN ', '0.5 mm', '0.25 mm', '4 mm', '1 mm', '50 mm', '2', '', '', '', 0),
(1054, 34, 'SFUMIB0064 TiSiN ', '0.6 mm', '0.3 mm', '4 mm', '1.2 mm', '50 mm', '2', '', '', '', 0),
(1055, 34, 'SFUMIB0074 TiSiN ', '0.7 mm', '0.35 mm', '4 mm', '1.4 mm', '50 mm', '2', '', '', '', 0),
(1056, 34, 'SFUMIB0084 TiSiN ', '0.8 mm', '0.4 mm', '4 mm', '1.6 mm', '50 mm', '2', '', '', '', 0),
(1057, 34, 'SFUMIB0094 TiSiN ', '0.9 mm', '0.45 mm', '4 mm', '1.8 mm', '50 mm', '2', '', '', '', 0),
(1058, 34, 'SFUMIB0104 TiSiN ', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(1059, 34, 'SFUMIB0124 TiSiN ', '1.2 mm', '0.6 mm', '4 mm', '2.5 mm', '50 mm', '2', '', '', '', 0),
(1060, 34, 'SFUMIB0144 TiSiN ', '1.4 mm', '0.7 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(1061, 34, 'SFUMIB0154 TiSiN', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(1062, 34, 'SFUMIB0164 TiSiN ', '1.6 mm', '0.8 mm', '4 mm', '3.5 mm', '50 mm', '2', '', '', '', 0),
(1063, 34, 'SFUMIB0184 TiSiN ', '1.8 mm', '0.9 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(1064, 34, 'SFUMIB0204 TiSiN ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(1065, 34, 'SFUMIB0224 TiSiN ', '2.2 mm', '1.1 mm', '4 mm', '4.5 mm', '50 mm', '2', '', '', '', 0),
(1066, 34, 'SFUMIB0244 TiSiN ', '2.4 mm', '1.2 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(1067, 34, 'SFUMIB0254 TiSiN ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(1068, 34, 'SFUMIB0304 TiSiN', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(1086, 35, 'SSB0102 AlTiN ', '1 mm', '0.5 mm', '3 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(1087, 35, 'MSB0102 AlTiN', '1 mm', '0.5 mm', '4 mm', '2 mm', '50 mm', '2', '', '', '', 0),
(1088, 35, 'SSB0152 AlTiN ', '1.5 mm', '0.75 mm', '3 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(1089, 35, 'MSB0152 AlTiN ', '1.5 mm', '0.75 mm', '4 mm', '3 mm', '50 mm', '2', '', '', '', 0),
(1090, 35, 'SSB0202 AlTiN', '2 mm', '1 mm', '3 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(1091, 35, 'MSB0202 AlTiN ', '2 mm', '1 mm', '4 mm', '4 mm', '50 mm', '2', '', '', '', 0),
(1092, 35, 'SSB0252 AlTiN ', '2.5 mm', '1.25 mm', '3 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(1093, 35, 'MSB0252 AlTiN ', '2.5 mm', '1.25 mm', '4 mm', '5 mm', '50 mm', '2', '', '', '', 0),
(1094, 35, 'SSB0302 AlTiN ', '3 mm', '1.5 mm', '3 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(1095, 35, 'MSB0302 AlTiN ', '3 mm', '1.5 mm', '4 mm', '6 mm', '50 mm', '2', '', '', '', 0),
(1096, 35, 'MSB0352 AlTiN ', '3.5 mm', '1.75 mm', '4 mm', '7 mm', '50 mm', '2', '', '', '', 0),
(1097, 35, 'MSB0402 AlTiN ', '4 mm', '2 mm', '4 mm', '8 mm', '50 mm', '2', '', '', '', 0),
(1098, 35, 'SB0602 AlTiN ', '6 mm', '3 mm', '6 mm', '12 mm', '50 mm', '2', '', '', '', 0),
(1099, 35, 'SB0702 AlTiN ', '7 mm', '3.5 mm', '8 mm', '14 mm', '60 mm', '2', '', '', '', 0),
(1100, 35, 'SB0802 AlTiN ', '8 mm', '4 mm', '8 mm', '16 mm', '60 mm', '2', '', '', '', 0),
(1101, 35, 'SB0902 AlTiN ', '9 mm', '4.5 mm', '10 mm', '18 mm', '75 mm', '2', '', '', '', 0),
(1102, 35, 'SB1002 AlTiN ', '10 mm', '5 mm', '10 mm', '20 mm', '75 mm', '2', '', '', '', 0),
(1103, 35, 'SB1102 AlTiN ', '11 mm', '5.5 mm', '12 mm', '22 mm', '75 mm', '2', '', '', '', 0),
(1104, 35, 'SB1202 AlTiN ', '12 mm', '6 mm', '12 mm', '24 mm', '75 mm', '2', '', '', '', 0),
(1105, 36, 'SLB0102 ', '1 mm', '0.5 mm', '6 mm', '2 mm', '75 mm', '2', '', '', '', 0),
(1106, 36, 'MLB0102 ', '1 mm', '0.5 mm', '6 mm', '2 mm', '100 mm', '2', '', '', '', 0),
(1107, 36, 'SLB0152 ', '1.5 mm', '0.75 mm', '6 mm', '3 mm', '75 mm', '2', '', '', '', 0),
(1108, 36, 'MLB0152 ', '1.5 mm', '0.75 mm', '6 mm', '3 mm', '100 mm', '2', '', '', '', 0),
(1109, 36, 'SLB0202 ', '2 mm', '1 mm', '6 mm', '4 mm', '75 mm', '2', '', '', '', 0),
(1110, 36, 'MLB0202 ', '2 mm', '1 mm', '6 mm', '4 mm', '100 mm', '2', '', '', '', 0),
(1111, 36, 'SLB0252 ', '2.5 mm', '1.25 mm', '6 mm', '5 mm', '75 mm', '2', '', '', '', 0),
(1112, 36, 'MLB0252 ', '2.5 mm', '1.25 mm', '6 mm', '5 mm', '100 mm', '2', '', '', '', 0),
(1113, 36, 'SLB0302 ', '3 mm', '1.5 mm', '6 mm', '6 mm', '75 mm', '2', '', '', '', 0),
(1114, 36, 'MLB0302 ', '3 mm', '1.5 mm', '6 mm', '6 mm', '100 mm', '2', '', '', '', 0),
(1115, 36, 'MLB0352 ', '3.5 mm', '1.75 mm', '6 mm', '7 mm', '100 mm', '2', '', '', '', 0),
(1116, 36, 'SLB0402', '4 mm', '2 mm', '6 mm', '8 mm', '75 mm', '2', '', '', '', 0),
(1117, 36, 'MLB0402 ', '4 mm', '2 mm', '6 mm', '8 mm', '100 mm', '2', '', '', '', 0),
(1118, 36, 'SLB0502 ', '5 mm', '2.5 mm', '6 mm', '10 mm', '75 mm', '2', '', '', '', 0),
(1119, 36, 'MLB0502', '5 mm', '2.5 mm', '6 mm', '10 mm', '100 mm', '2', '', '', '', 0),
(1120, 36, 'SLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '75 mm', '2', '', '', '', 0),
(1121, 36, 'MLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '100 mm', '2', '', '', '', 0),
(1122, 36, 'LLB0602 ', '6 mm', '3 mm', '6 mm', '12 mm', '150 mm', '2', '', '', '', 0),
(1123, 36, 'SLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '75 mm', '2', '', '', '', 0),
(1124, 36, 'MLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '100 mm', '2', '', '', '', 0),
(1125, 36, 'LLB0802 ', '8 mm', '4 mm', '8 mm', '16 mm', '150 mm', '2', '', '', '', 0),
(1126, 36, 'MLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '100 mm', '2', '', '', '', 0),
(1127, 36, 'LLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '150 mm', '2', '', '', '', 0),
(1128, 36, 'XLB1002 ', '10 mm', '5 mm', '10 mm', '20 mm', '200 mm', '2', '', '', '', 0),
(1129, 36, 'MLB1202 ', '12 mm', '6 mm', '12 mm', '24 mm', '100 mm', '2', '', '', '', 0),
(1130, 36, 'LLB1202 ', '12 mm', '6 mm', '12 mm', '24 mm', '150 mm', '2', '', '', '', 0),
(1131, 36, 'XLB1202', '12 mm', '6 mm', '12 mm', '24 mm', '200 mm', '2', '', '', '', 0),
(1132, 37, 'SFURTA06034 TiSiN ', '6 mm', '0.3 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1133, 37, 'SFURTA06054 TiSiN ', '6 mm', '0.5 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1134, 37, 'SFURTA06104 TiSiN ', '6 mm', '1 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1135, 37, 'SFURTA06204 TiSiN ', '6 mm', '2 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1136, 37, 'SFURTA08034 TiSiN', '8 mm', '0.3 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1137, 37, 'SFURTA08054 TiSiN', '8 mm', '0.5 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1138, 37, 'SFURTA08104 TiSiN ', '8 mm', '1 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1139, 37, 'SFURTA08204 TiSiN', '8 mm', '2 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1140, 37, 'SFURTA10054 TiSiN', '10 mm', '0.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1141, 37, 'SFURTA10104 TiSiN', '10 mm', '1 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1142, 37, 'SFURTA10154 TiSiN', '10 mm', '1.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1143, 37, 'SFURTA10204 TiSiN ', '10 mm', '2 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1144, 37, 'SFURTA10304 TiSiN', '10 mm', '3 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1145, 37, 'SFURTA12054 TiSiN ', '12 mm', '0.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1146, 37, 'SFURTA12104 TiSiN ', '12 mm', '1 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1147, 37, 'SFURTA12154 TiSiN', '12 mm', '1.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1148, 37, 'SFURTA12204 TiSiN ', '12 mm', '2 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1149, 37, 'SFURTA12304 TiSiN ', '12 mm', '3 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1150, 39, 'RTA020024 AlTiN ', '2 mm', '0.2 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(1151, 39, 'RTA020034 AlTiN', '2 mm', '0.3 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(1152, 39, 'RTA020054 AlTiN ', '2 mm', '0.5 mm', '4 mm', '6 mm', '50 mm', '4', '', '', '', 0),
(1153, 39, 'RTA025024 AlTiN ', '2.5 mm', '0.2 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1154, 39, 'RTA030024 AlTiN ', '3 mm', '0.2 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1155, 39, 'RTA030034 AlTiN ', '3 mm', '0.3 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1156, 39, 'RTA030054 AlTiN ', '3 mm', '0.5 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1157, 39, 'RTA030104 AlTiN ', '3 mm', '1 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1158, 39, 'RTA430024 AlTiN', '3 mm', '0.2 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1159, 39, 'RTA430034 AlTiN ', '3 mm', '0.3 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1160, 39, 'RTA430054 AlTiN', '3 mm', '0.5 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1161, 39, 'RTA430104 AlTiN ', '3 mm', '1 mm', '4 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1162, 39, 'RTA040024 AlTiN ', '4 mm', '0.2 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1163, 39, 'RTA040034 AlTiN ', '4 mm', '0.3 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1164, 39, 'RTA040054 AlTiN ', '4 mm', '0.5 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1165, 39, 'RTA040104 AlTiN ', '4 mm', '1 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1166, 39, 'RTA040154 AlTiN ', '4 mm', '1.5 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1167, 39, 'RTA050024 AlTiN ', '5 mm', '0.2 mm', '6 mm', '13 mm', '50 mm', '4', '', '', '', 0),
(1168, 39, 'RTA050034 AlTiN ', '5 mm', '0.3 mm', '6 mm', '13 mm', '50 mm', '4', '', '', '', 0),
(1169, 39, 'RTA050054 AlTiN ', '5 mm', '0.5 mm', '6 mm', '13 mm', '50 mm', '4', '', '', '', 0),
(1170, 39, 'RTA050104 AlTiN', '5 mm', '1 mm', '6 mm', '13 mm', '50 mm', '4', '', '', '', 0),
(1171, 39, 'RTA060024 AlTiN ', '6 mm', '0.2 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1172, 39, 'RTA060034 AlTiN ', '6 mm', '0.3 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1173, 39, 'RTA060054 AlTiN ', '6 mm', '0.5 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1174, 39, 'RTA060104 ALTIN', '6 mm', '1 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1175, 39, 'RTA060154 ALTIN', '6 mm', '1.5 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1176, 39, 'RTA060204 ALTIN', '6 mm', '2 mm', '6 mm', '15 mm', '50 mm', '4', '', '', '', 0),
(1177, 39, 'RTA080034 ALTIN', '8 mm', '0.3 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1178, 39, 'RTA080054 ALTIN', '8 mm', '0.5 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1179, 39, 'RTA080104 ALTIN', '8 mm', '1 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1180, 39, 'RTA080154 ALTIN', '8 mm', '1.5 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1181, 39, 'RTA080204 ALTIN', '8 mm', '2 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1182, 39, 'RTA080254 ALTIN', '8 mm', '2.5 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1183, 39, 'RTA080304 ALTIN', '8 mm', '3 mm', '8 mm', '20 mm', '60 mm', '4', '', '', '', 0),
(1184, 39, 'RTA100034 ALTIN', '10 mm', '0.3 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1185, 39, 'RTA100054 ALTIN', '10 mm', '0.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1186, 39, 'RTA100104 ALTIN', '10 mm', '1 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1187, 39, 'RTA100154 ALTIN', '10 mm', '1.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1188, 39, 'RTA100204 ALTIN', '10 mm', '2 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1189, 39, 'RTA100254 ALTIN', '10 mm', '2.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1190, 39, 'RTA100304 ALTIN', '10 mm', '3 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1191, 39, 'RTA120034 ALTIN', '12 mm', '0.3 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1192, 39, 'RTA120054 ALTIN', '12 mm', '0.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1193, 39, 'RTA120104 ALTIN', '12 mm', '1 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1194, 39, 'RTA120154 ALTIN', '12 mm', '1.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1195, 39, 'RTA120204 ALTIN', '12 mm', '2 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1196, 39, 'RTA120254 ALTIN', '12 mm', '2.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1227, 39, 'RTA120304 ALTIN', '12 mm', '3 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1228, 40, 'URTA03034 nBS ', '3 mm', '0.3 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1229, 40, 'URTA03054 nBS ', '3 mm', '0.5 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1230, 40, 'URTA03104 nBS', '3 mm', '1 mm', '3 mm', '8 mm', '50 mm', '4', '', '', '', 0),
(1231, 40, 'URTA04024 nBS ', '4 mm', '0.2 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1232, 40, 'URTA04034 nBS ', '4 mm', '0.3 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1233, 40, 'URTA04054 nBS ', '4 mm', '0.5 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1234, 40, 'URTA04104 nBS ', '4 mm', '1 mm', '4 mm', '10 mm', '50 mm', '4', '', '', '', 0),
(1235, 40, 'URTA05034 nBS ', '5 mm', '0.3 mm', '6 mm', '13 mm', '75 mm', '4', '', '', '', 0),
(1236, 40, 'URTA05054 nBS', '5 mm', '0.5 mm', '6 mm', '13 mm', '75 mm', '4', '', '', '', 0),
(1237, 40, 'URTA05104 nBS ', '5 mm', '1 mm', '6 mm', '13 mm', '75 mm', '4', '', '', '', 0),
(1238, 40, 'URTA06024 nBS ', '6 mm', '0.2 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1239, 40, 'URTA06034 nBS ', '6 mm', '0.3 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1240, 40, 'URTA06054 nBS ', '6 mm', '0.5 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1241, 40, 'URTA06104 nBS ', '6 mm', '1 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1242, 40, 'URTA06204 nBS', '6 mm', '2 mm', '6 mm', '16 mm', '75 mm', '4', '', '', '', 0),
(1243, 40, 'URTA08034 nBS ', '8 mm', '0.3 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1244, 40, 'URTA08054 nBS ', '8 mm', '0.5 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1245, 40, 'URTA08104 nBS ', '8 mm', '1 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1246, 40, 'URTA08204 nBS ', '8 mm', '2 mm', '8 mm', '20 mm', '75 mm', '4', '', '', '', 0),
(1247, 40, 'URTA10054 nBS', '10 mm', '0.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1248, 40, 'URTA10104 nBS', '10 mm', '1 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1249, 40, 'URTA10154 nBS', '10 mm', '1.5 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1250, 40, 'URTA10204 nBS', '10 mm', '2 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1251, 40, 'URTA10304 nBS', '10 mm', '3 mm', '10 mm', '25 mm', '75 mm', '4', '', '', '', 0),
(1252, 40, 'URTA12054 nBS ', '12 mm', '0.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1253, 40, 'URTA12104 nBS ', '12 mm', '1 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1254, 40, 'URTA12154 nBS ', '12 mm', '1.5 mm', '12 mm', '30 mm', '75 mm', '4', '', '', '', 0),
(1255, 40, 'URTA12204 nBS ', '12 mm', '2 mm', '12 mm', '75 mm', '75 mm', '4', '', '', '', 0),
(1256, 40, 'URTA12304 nBS ', '12 mm', '3 mm', '12 mm', '75 mm', '75 mm', '4', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_portafolio_fresado_cab`
--

DROP TABLE IF EXISTS `porta_portafolio_fresado_cab`;
CREATE TABLE IF NOT EXISTS `porta_portafolio_fresado_cab` (
  `idporta_portafolio_fresado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idportafolio_fresado_cab` int(11) NOT NULL,
  `col1` varchar(50) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_portafolio_fresado_cab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=724 ;

--
-- Volcado de datos para la tabla `porta_portafolio_fresado_cab`
--

INSERT INTO `porta_portafolio_fresado_cab` (`idporta_portafolio_fresado_cab`, `idportafolio_fresado_cab`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`, `col10`, `valor`) VALUES
(1, 1, '1', '2', '3', '4', '5', '', '', '', '', '', 100),
(2, 1, 'a', 'b', 'c', 'd', 'e', '', '', '', '', '', 500),
(3, 1, 'xxx', 'a1', 'b1', 'c1', '', '', '', '', '', '', 100),
(4, 1, 'yyy', 'a2', 'b2', 'c2', '', '', '', '', '', '', 200),
(5, 1, 'xxx', 'a3', 'b3', 'c3', '', '', '', '', '', '', 300),
(6, 1, 'yyy', 'a4', 'b4', 'c4', '', '', '', '', '', '', 400),
(7, 1, 'xxx', 'a5', 'b5', 'c5', '', '', '', '', '', '', 500),
(8, 1, 'yyy', 'a6', 'b6', 'c6', '', '', '', '', '', '', 600),
(9, 1, 'xxx', 'a7', 'b7', 'c7', '', '', '', '', '', '', 700),
(10, 1, 'yyy', 'a8', 'b8', 'c8', '', '', '', '', '', '', 800),
(11, 2, '1', '2', '3', '', '', '', '', '', '', '', 400),
(12, 2, 'xxx', 'a1', 'b1', '', '', '', '', '', '', '', 100),
(13, 2, 'yyy', 'a2', 'b2', '', '', '', '', '', '', '', 200),
(14, 2, 'xxx', 'a3', 'b3', '', '', '', '', '', '', '', 300),
(15, 2, 'yyy', 'a4', 'b4', '', '', '', '', '', '', '', 400),
(16, 2, 'xxx', 'a5', 'b5', '', '', '', '', '', '', '', 500),
(17, 2, 'yyy', 'a6', 'b6', '', '', '', '', '', '', '', 600),
(18, 2, 'xxx', 'a7', 'b7', '', '', '', '', '', '', '', 700),
(19, 2, 'yyy', 'a8', 'b8', '', '', '', '', '', '', '', 800),
(20, 3, '1', '2', '3', '', '', '', '', '', '', '', 1000),
(31, 7, 'MFWN90063R-5T-M', '63 mm', '22 mm', '5', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(32, 7, 'MFWN90080R-7T-M', '80 mm', '27 mm', '7', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(33, 7, 'MFWN90100R-9T-M', '100 mm', '32 mm', '9', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(34, 7, 'MFWN90125R-12T-M', '125 mm', '40 mm', '12', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(35, 7, 'MFWN90160R-14T-M', '160 mm', '40 mm', '14', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(36, 7, 'MFWN90200R-16T-M', '200 mm', '60 mm', '16', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(37, 7, 'MFWN90250R-18T-M', '250 mm', '60 mm', '18', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(41, 9, 'MFWN90050R-S32-3T', '50 mm', '32 mm', '110 mm', '90 GRADOS', '3', 'WNMU0806', '', '', '', 0),
(42, 9, 'MFWN90063R-S32-4T', '63 mm', '32 mm', '110 mm', '90 GRADOS', '4', 'WNMU0806', '', '', '', 0),
(43, 9, 'MFWN90080R-S32-5T', '80 mm', '32 mm', '110 mm', '90 GRADOS', '5', 'WNMU0806', '', '', '', 0),
(44, 16, 'MEW16-S12-10-2T', '16 mm', '12 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(45, 16, 'MEW18-S16-10-2T', '18 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(46, 16, 'MEW20-S16-10-2T', '20 mm', '16 mm', '110 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(47, 16, 'MEW22-S20-10-3T', '22 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(48, 16, 'MEW25-S20-10-3T', '25 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(49, 16, 'MEW28-S25-10-3T', '28 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(50, 16, 'MEW30-S25-10-4T', '30 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(51, 16, 'MEW32-S25-10-4T', '32 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(52, 16, 'MEW40-S32-10-5T', '40 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(53, 16, 'MEW50-S32-10-5T', '50 mm', '32 mm', '120 mm', '5', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(54, 16, 'MEW16-S16-10-2T', '16 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(55, 16, 'MEW20-S20-10-3T', '20 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(56, 16, 'MEW25-S25-10-3T', '25 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(57, 16, 'MEW32-S32-10-4T', '32 mm', '32 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(58, 16, 'MEW20-S20-10-150-2T', '20 mm', '20 mm', '150 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(59, 16, 'MEW25-S25-10-170-2T', '25 mm', '25 mm', '170 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(60, 17, 'MECX14-S12-07-2T', '14 mm', '12 mm', '80 mm', '2', '90 GRADOS', ' BDMT0703', '', '', '', 964724),
(61, 17, 'MECX17-S16-07-3T', '17 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1157763),
(62, 17, 'MECX18-S16-07-3T', '18 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1234947),
(63, 17, 'MECX20-S16-07-4T', '20 mm', '16 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(64, 17, 'MECX21-S20-07-4T', '21 mm', '20 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(65, 17, 'MECX25-S20-07-5T', '25 mm', '20 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(66, 17, 'MECX26-S25-07-5T', '26 mm', '25 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(67, 17, 'MECX33-S32-07-6T', '33 mm', '32 mm', '130 mm', '6', '90 GRADOS', ' BDMT0703', '', '', '', 1813828),
(68, 17, 'MECX10-S10-07-1T', '10 mm', '10 mm', '80 mm', '1', '90 GRADOS', ' BDMT0703', '', '', '', 733171),
(69, 17, 'MECX12-S12-07-2T', '12 mm', '12 mm', '80 mm', '2', '90 GRADOS', ' BDMT0703', '', '', '', 887696),
(70, 17, 'MECX16-S16-07-3T', '16 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1157763),
(71, 17, 'MECX20-S20-07-4T', '20 mm', '20 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(72, 17, 'MECX25-S25-07-5T', '25 mm', '25 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(73, 17, 'MECX32-S32-07-6T', '32 mm', '32 mm', '130 mm', '6', '90 GRADOS', ' BDMT0703', '', '', '', 1813828),
(74, 18, 'MEC16-S12-11T', '16 mm', '12 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 721719),
(75, 18, 'MEC17-S16-11T', '17 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 984098),
(76, 18, 'MEC18-S16-11T', '18 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 750663),
(77, 18, 'MEC19-S16-11T', '19 mm', '16 mm', '100 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1119171),
(78, 18, 'MEC20-S16-11T', '20 mm', '16 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 866047),
(79, 18, 'MEC21-S20-11T', '21 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1177137),
(80, 18, 'MEC22-S20-11T', '22 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 894834),
(81, 18, 'MEC24-S20-11T', '24 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1234947),
(82, 18, 'MEC25-S20-11T', '25 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(83, 18, 'MEC28-S25-11T', '28 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 981431),
(84, 18, 'MEC30-S25-11T', '30 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1096972),
(85, 18, 'MEC32-S25-11T', '32 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1126000),
(86, 18, 'MEC40-S32-11T', '40 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'BDMT11T3', '', '', '', 1154703),
(87, 18, 'MEC50-S32-11T', '50 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'BDMT11T3', '', '', '', 1620868),
(88, 18, 'MEC16-S16-11T', '16 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 721719),
(89, 18, 'MEC20-S20-11T', '20 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 866047),
(90, 18, 'MEC25-S25-11T', '25 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(91, 18, 'MEC32-S32-11T', '32 mm', '32 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1039241),
(92, 18, 'MEC20-S18-170-11T', '20 mm', '18 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1234947),
(93, 18, 'MEC20-S20-140-11T', '20 mm', '20 mm', '140 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(94, 18, 'MEC20-S20-170-11T', '20 mm', '20 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1273460),
(95, 18, 'MEC22-S20-170-11T', '22 mm', '20 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1273460),
(96, 18, 'MEC25-S23-210-11T', '25 mm', '23 mm', '210 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1254400),
(97, 18, 'MEC28-S25-210-11T', '28 mm', '25 mm', '210 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1350645),
(98, 18, 'MEC32-S30-250-11T', '32 mm', '30 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1408611),
(99, 18, 'MEC32-S32-200-11T', '32 mm', '32 mm', '200 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1068107),
(100, 18, 'MEC32-S32-250-11T', '32 mm', '32 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1447282),
(101, 18, 'MEC35-S32-250-11T', '35 mm', '32 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1466450),
(102, 18, 'MEC40-S32-240-11T', '40 mm', '32 mm', '240 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1125995),
(609, 19, 'MECH025-S25-11-4-2T', '25 mm', '25 mm', '37 mm', '120 mm', '8', 'BDMT11T3', '', '', '', 2402828),
(610, 19, 'MECH032-S32-11-5-2T', '32 mm', '32 mm', '46 mm', '140 mm', '10', 'BDMT11T3', '', '', '', 2626223),
(611, 19, 'MECH032-S32-11-5-4T', '32 mm', '32 mm', '46 mm', '140 mm', '20', 'BDMT11T3', '', '', '', 3408575),
(612, 19, 'MECH040-S32-11-6-4T', '40 mm', '32 mm', '55 mm', '150 mm', '24', 'BDMT11T3', '', '', '', 4442326),
(613, 19, 'MECH040-S42-11-6-4T', '40 mm', '42 mm', '55 mm', '160 mm', '24', 'BDMT11T3', '', '', '', 4442326),
(614, 19, 'MECH050-S42-11-7-4T', '50 mm', '42 mm', '64 mm', '170 mm', '28', 'BDMT11T3', '', '', '', 5714590),
(615, 19, 'MECH050-S42-11-7-6T', '50 mm', '42 mm', '64 mm', '170 mm', '42', 'BDMT11T3', '', '', '', 7725320),
(616, 19, 'MECH040-S32-17-4-2T', '40 mm', '32 mm', '59 mm', '160 mm', '8', 'BDMT1704', '', '', '', 4065190),
(617, 19, 'MECH040-S42-17-4-2T', '40 mm', '42 mm', '59 mm', '170 mm', '8', 'BDMT1704', '', '', '', 4065190),
(618, 19, 'MECH050-S42-17-5-4T', '50 mm', '42 mm', '74 mm', '185 mm', '20', 'BDMT1704', '', '', '', 6956851),
(620, 10, 'MFWN90063R-5T-M', '63 mm', '22 mm', '5', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(621, 10, 'MFWN90080R-7T-M', '80 mm', '27 mm', '7', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(622, 10, 'MFWN90100R-9T-M', '100 mm', '32 mm', '9', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(623, 10, 'MFWN90125R-12T-M', '125 mm', '40 mm', '12', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(624, 10, 'MFWN90160R-14T-M', '160 mm', '40 mm', '14', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(625, 10, 'MFWN90200R-16T-M', '200 mm', '60 mm', '16', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(626, 10, 'MFWN90250R-18T-M', '250 mm', '60 mm', '18', '90 GRADOS', 'WNMU0806', '', '', '', '', 0),
(627, 14, 'MEC16-S12-11T', '16 mm', '12 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 721719),
(628, 14, 'MEC17-S16-11T', '17 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 984098),
(629, 14, 'MEC18-S16-11T', '18 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 750663),
(630, 14, 'MEC19-S16-11T', '19 mm', '16 mm', '100 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1119171),
(631, 14, 'MEC20-S16-11T', '20 mm', '16 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 866047),
(632, 14, 'MEC21-S20-11T', '21 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1177137),
(633, 14, 'MEC22-S20-11T', '22 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 894834),
(634, 14, 'MEC24-S20-11T', '24 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 1234947),
(635, 14, 'MEC25-S20-11T', '25 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(636, 14, 'MEC28-S25-11T', '28 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 981431),
(637, 14, 'MEC30-S25-11T', '30 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1096972),
(638, 14, 'MEC32-S25-11T', '32 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1126000),
(639, 14, 'MEC40-S32-11T', '40 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'BDMT11T3', '', '', '', 1154703),
(640, 14, 'MEC50-S32-11T', '50 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'BDMT11T3', '', '', '', 1620868),
(641, 14, 'MEC16-S16-11T', '16 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 721719),
(642, 14, 'MEC20-S20-11T', '20 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 866047),
(643, 14, 'MEC25-S25-11T', '25 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(644, 14, 'MEC32-S32-11T', '32 mm', '32 mm', '130 mm', '4', '90 GRADOS', 'BDMT11T3', '', '', '', 1039241),
(645, 14, 'MEC20-S18-170-11T', '20 mm', '18 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1234947),
(646, 14, 'MEC20-S20-140-11T', '20 mm', '20 mm', '140 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 938211),
(647, 14, 'MEC20-S20-170-11T', '20 mm', '20 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1273460),
(648, 14, 'MEC22-S20-170-11T', '22 mm', '20 mm', '170 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1273460),
(649, 14, 'MEC25-S23-210-11T', '25 mm', '23 mm', '210 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1254400),
(650, 14, 'MEC28-S25-210-11T', '28 mm', '25 mm', '210 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1350645),
(651, 14, 'MEC32-S30-250-11T', '32 mm', '30 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1408611),
(652, 14, 'MEC32-S32-200-11T', '32 mm', '32 mm', '200 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1068107),
(653, 14, 'MEC32-S32-250-11T', '32 mm', '32 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1447282),
(654, 14, 'MEC35-S32-250-11T', '35 mm', '32 mm', '250 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1466450),
(655, 14, 'MEC40-S32-240-11T', '40 mm', '32 mm', '240 mm', '2', '90 GRADOS', 'BDMT11T3', '', '', '', 1125995),
(669, 15, 'MECX32-S32-07-6T', '32 mm', '32 mm', '130 mm', '6', '90 GRADOS', ' BDMT0703', '', '', '', 1813828),
(670, 15, 'MECH025-S25-11-4-2T', '25 mm', '25 mm', '37 mm', '120 mm', '8', 'BDMT11T3', '', '', '', 2402828),
(671, 15, 'MECH032-S32-11-5-2T', '32 mm', '32 mm', '46 mm', '140 mm', '10', 'BDMT11T3', '', '', '', 2626223),
(672, 15, 'MECH032-S32-11-5-4T', '32 mm', '32 mm', '46 mm', '140 mm', '20', 'BDMT11T3', '', '', '', 3408575),
(673, 15, 'MECH040-S32-11-6-4T', '40 mm', '32 mm', '55 mm', '150 mm', '24', 'BDMT11T3', '', '', '', 4442326),
(674, 15, 'MECH040-S42-11-6-4T', '40 mm', '42 mm', '55 mm', '160 mm', '24', 'BDMT11T3', '', '', '', 4442326),
(675, 15, 'MECH050-S42-11-7-4T', '50 mm', '42 mm', '64 mm', '170 mm', '28', 'BDMT11T3', '', '', '', 5714590),
(676, 15, 'MECH050-S42-11-7-6T', '50 mm', '42 mm', '64 mm', '170 mm', '42', 'BDMT11T3', '', '', '', 7725320),
(677, 15, 'MECH040-S32-17-4-2T', '40 mm', '32 mm', '59 mm', '160 mm', '8', 'BDMT1704', '', '', '', 4065190),
(678, 15, 'MECH040-S42-17-4-2T', '40 mm', '42 mm', '59 mm', '170 mm', '8', 'BDMT1704', '', '', '', 4065190),
(679, 15, 'MECH050-S42-17-5-4T', '50 mm', '42 mm', '74 mm', '185 mm', '20', 'BDMT1704', '', '', '', 6956851),
(680, 13, 'MECX14-S12-07-2T', '14 mm', '12 mm', '80 mm', '2', '90 GRADOS', ' BDMT0703', '', '', '', 964724),
(681, 13, 'MECX17-S16-07-3T', '17 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1157763),
(682, 13, 'MECX18-S16-07-3T', '18 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1234947),
(683, 13, 'MECX20-S16-07-4T', '20 mm', '16 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(684, 13, 'MECX21-S20-07-4T', '21 mm', '20 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(685, 13, 'MECX25-S20-07-5T', '25 mm', '20 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(686, 13, 'MECX26-S25-07-5T', '26 mm', '25 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(687, 13, 'MECX33-S32-07-6T', '33 mm', '32 mm', '130 mm', '6', '90 GRADOS', ' BDMT0703', '', '', '', 1813828),
(688, 13, 'MECX10-S10-07-1T', '10 mm', '10 mm', '80 mm', '1', '90 GRADOS', ' BDMT0703', '', '', '', 733171),
(689, 13, 'MECX12-S12-07-2T', '12 mm', '12 mm', '80 mm', '2', '90 GRADOS', ' BDMT0703', '', '', '', 887696),
(690, 13, 'MECX16-S16-07-3T', '16 mm', '16 mm', '100 mm', '3', '90 GRADOS', ' BDMT0703', '', '', '', 1157763),
(691, 13, 'MECX20-S20-07-4T', '20 mm', '20 mm', '110 mm', '4', '90 GRADOS', ' BDMT0703', '', '', '', 1312288),
(692, 13, 'MECX25-S25-07-5T', '25 mm', '25 mm', '120 mm', '5', '90 GRADOS', ' BDMT0703', '', '', '', 1543762),
(693, 13, 'MECX32-S32-07-6T', '32 mm', '32 mm', '130 mm', '6', '90 GRADOS', ' BDMT0703', '', '', '', 1813828),
(695, 11, 'MEW16-S12-10-2T', '16 mm', '12 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(696, 11, 'MEW18-S16-10-2T', '18 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(697, 11, 'MEW20-S16-10-2T', '20 mm', '16 mm', '110 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(698, 11, 'MEW22-S20-10-3T', '22 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(699, 11, 'MEW25-S20-10-3T', '25 mm', '20 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(700, 11, 'MEW28-S25-10-3T', '28 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(701, 11, 'MEW30-S25-10-4T', '30 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(702, 11, 'MEW32-S25-10-4T', '32 mm', '25 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(703, 11, 'MEW40-S32-10-5T', '40 mm', '32 mm', '150 mm', '5', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(704, 11, 'MEW50-S32-10-5T', '50 mm', '32 mm', '120 mm', '5', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(705, 11, 'MEW16-S16-10-2T', '16 mm', '16 mm', '100 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(706, 11, 'MEW20-S20-10-3T', '20 mm', '20 mm', '110 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(707, 11, 'MEW25-S25-10-3T', '25 mm', '25 mm', '120 mm', '3', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(708, 11, 'MEW32-S32-10-4T', '32 mm', '32 mm', '130 mm', '4', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(709, 11, 'MEW20-S20-10-150-2T', '20 mm', '20 mm', '150 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(710, 11, 'MEW25-S25-10-170-2T', '25 mm', '25 mm', '170 mm', '2', '90 GRADOS', 'LOMU1004', '', '', '', 0),
(711, 12, 'MFWN90050R-S32-3T', '50 mm', '32 mm', '110 mm', '3', '90 GRADOS', 'WNMU0806', '', '', '', 0),
(712, 12, 'MFWN90063R-S32-4T', '63 mm', '32 mm', '110 mm', '4', '90 GRADOS', 'WNMU0806', '', '', '', 0),
(713, 12, 'MFWN90080R-S32-5T', '80 mm', '32 mm', '110 mm', '5', '90 GRADOS', 'WNMU0806', '', '', '', 0),
(714, 6, 'MFPN45063R-5T-M', '63 mm', '22 mm', '45 GRADOS', '5', 'PNMU1205ANER', '', '', '', '', 2524566),
(715, 6, 'MFPN45080R-6T-M', '80 mm', '27 mm', '45 GRADOS', '6', 'PNMU1205ANER', '', '', '', '', 3019831),
(716, 6, 'MFPN45100R-8T-M', '100 mm', '32 mm', '45 GRADOS', '8', 'PNMU1205ANER', '', '', '', '', 3677230),
(717, 6, 'MFPN45125R-10T-M', '125 mm', '40 mm', '45 GRADOS', '10', 'PNMU1205ANER', '', '', '', '', 4729805),
(718, 6, 'MFPN45160R-12T-M', '160 mm', '40 mm', '45 GRADOS', '12', 'PNMU1205ANER', '', '', '', '', 5382498),
(719, 6, 'MFPN45200R-14T-M', '200 mm', '60 mm', '45 GRADOS', '14', 'PNMU1205ANER', '', '', '', '', 7297150),
(720, 6, 'MFPN45250R-16T-M', '250 mm', '60 mm', '45 GRADOS', '16', 'PNMU1205ANER', '', '', '', '', 8440400),
(721, 8, 'MFPN45080R-S32-5T', '80 mm', '32 mm', '110 mm', '45 GRADOS', '5', 'PNMU1205ANER', '', '', '', 2116300),
(722, 8, 'MFPN45063R-S32-4T', '63 mm', '32 mm', '110 mm', '45 GRADOS', '4', 'PNMU1205ANER', '', '', '', 1854460),
(723, 8, 'MFPN45050R-S32-3T', '50 mm', '32 mm', '110 mm', '45 GRADOS', '3', 'PNMU1205ANER', '', '', '', 1588315);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_ranurado`
--

DROP TABLE IF EXISTS `porta_ranurado`;
CREATE TABLE IF NOT EXISTS `porta_ranurado` (
  `idporta_ranurado` int(11) NOT NULL AUTO_INCREMENT,
  `idranurado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `n_insertos` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_ranurado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `porta_ranurado`
--

INSERT INTO `porta_ranurado` (`idporta_ranurado`, `idranurado`, `ref`, `diam_corte`, `diam_espigo`, `long_total`, `n_insertos`, `inserto`, `valor`) VALUES
(1, 1, 'xx', '1', '2', '3', '4', '5', 100),
(16, 1, '111', 'a1', 'c1', 'b1', 'e1', 'd1', 100),
(17, 1, '222', 'a2', 'c2', 'b2', 'e2', 'd2', 200),
(18, 1, '333', 'a3', 'c3', 'b3', 'e3', 'd3', 300),
(19, 1, '444', 'a4', 'c4', 'b4', 'e4', 'd4', 400),
(20, 1, '555', 'a5', 'c5', 'b5', 'e5', 'd5', 500),
(21, 1, '666', 'a6', 'c6', 'b6', 'e6', 'd6', 600),
(22, 1, '777', 'a7', 'c7', 'b7', 'e7', 'd7', 700),
(23, 1, '888', 'a8', 'c8', 'b8', 'e8', 'd8', 800),
(24, 1, '999', 'a9', 'c9', 'b9', 'e9', 'd9', 900),
(25, 1, '1110', 'a10', 'c10', 'b10', 'e10', 'd10', 1000),
(26, 1, '1221', 'a11', 'c11', 'b11', 'e11', 'd11', 1100),
(27, 1, '1332', 'a12', 'c12', 'b12', 'e12', 'd12', 1200),
(28, 1, '1443', 'a13', 'c13', 'b13', 'e13', 'd13', 1300),
(29, 3, '1', '1', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_roscado_ext`
--

DROP TABLE IF EXISTS `porta_roscado_ext`;
CREATE TABLE IF NOT EXISTS `porta_roscado_ext` (
  `idporta_roscado_ext` int(11) NOT NULL AUTO_INCREMENT,
  `idroscado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_ajugero` varchar(100) NOT NULL,
  `diam_barra` varchar(100) NOT NULL,
  `long_barra` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_roscado_ext`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `porta_roscado_ext`
--

INSERT INTO `porta_roscado_ext` (`idporta_roscado_ext`, `idroscado`, `ref`, `diam_ajugero`, `diam_barra`, `long_barra`, `inserto`, `valor`) VALUES
(1, 1, 'xx', '1', '2', '3', '4', 100),
(11, 1, '11', 'a1', 'b1', 'c1', 'd1', 100),
(12, 1, '22', 'a2', 'b2', 'c2', 'd2', 200),
(13, 1, '33', 'a3', 'b3', 'c3', 'd3', 300),
(14, 1, '44', 'a4', 'b4', 'c4', 'd4', 400),
(15, 1, '55', 'a5', 'b5', 'c5', 'd5', 500),
(16, 1, '66', 'a6', 'b6', 'c6', 'd6', 600),
(17, 1, '77', 'a7', 'b7', 'c7', 'd7', 700),
(18, 1, '88', 'a8', 'b8', 'c8', 'd8', 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_roscado_int`
--

DROP TABLE IF EXISTS `porta_roscado_int`;
CREATE TABLE IF NOT EXISTS `porta_roscado_int` (
  `idporta_roscado_int` int(11) NOT NULL AUTO_INCREMENT,
  `idroscado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `n_insertos` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_roscado_int`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `porta_roscado_int`
--

INSERT INTO `porta_roscado_int` (`idporta_roscado_int`, `idroscado`, `ref`, `diam_corte`, `diam_espigo`, `long_total`, `n_insertos`, `inserto`, `valor`) VALUES
(1, 0, 'xx', '1', '2', '3', '4', '5', 100),
(15, 1, '11', 'a1', 'c1', 'b1', 'e1', 'd1', 100),
(16, 1, '22', 'a2', 'c2', 'b2', 'e2', 'd2', 200),
(17, 1, '33', 'a3', 'c3', 'b3', 'e3', 'd3', 300),
(18, 1, '44', 'a4', 'c4', 'b4', 'e4', 'd4', 400),
(19, 1, '55', 'a5', 'c5', 'b5', 'e5', 'd5', 500),
(20, 1, '66', 'a6', 'c6', 'b6', 'e6', 'd6', 600),
(21, 1, '77', 'a7', 'c7', 'b7', 'e7', 'd7', 700),
(22, 1, '88', 'a8', 'c8', 'b8', 'e8', 'd8', 800),
(23, 1, '99', 'a9', 'c9', 'b9', 'e9', 'd9', 900),
(24, 1, '110', 'a10', 'c10', 'b10', 'e10', 'd10', 1000),
(25, 1, '121', 'a11', 'c11', 'b11', 'e11', 'd11', 1100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_sujecion`
--

DROP TABLE IF EXISTS `porta_sujecion`;
CREATE TABLE IF NOT EXISTS `porta_sujecion` (
  `idporta_sujecion` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos_sujecion` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `rango_sujecion` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_sujecion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=307 ;

--
-- Volcado de datos para la tabla `porta_sujecion`
--

INSERT INTO `porta_sujecion` (`idporta_sujecion`, `idproductos_sujecion`, `ref`, `rango_sujecion`, `valor`) VALUES
(119, 3, 'ER20-13', '13.0 - 12.0 mm', 33524),
(177, 4, 'ER25-02', '2.0 - 1.0 mm', 39034),
(178, 4, 'ER25-03', '3.0 - 2.0 mm', 39034),
(179, 4, 'ER25-04', '4.0 - 3.0 mm', 39034),
(180, 4, 'ER25-05', '5.0 - 4.0 mm', 39034),
(181, 4, 'ER25-06', '6.0 - 5.0 mm', 39034),
(182, 4, 'ER25-07', '7.0 - 6.0 mm', 39034),
(183, 4, 'ER25-08', '8.0 - 7.0 mm', 39034),
(184, 4, 'ER25-09', '9.0 - 8.0 mm', 39034),
(185, 4, 'ER25-10', '10.0 - 9.0 mm', 39034),
(186, 4, 'ER25-11', '11.0 - 10.0 mm', 39034),
(187, 4, 'ER25-12', '12.0 - 11.0 mm', 39034),
(188, 4, 'ER25-13', '13.0 - 12.0 mm', 39034),
(189, 4, 'ER25-14', '14.0 - 13.0 mm', 39034),
(190, 4, 'ER25-15', '15.0 - 14.0 mm', 39034),
(191, 4, 'ER25-16', '16.0 - 15.0 mm', 39034),
(210, 1, 'ER11-1', '1.0 - 0.5 mm', 35148),
(211, 1, 'ER11-1.5', '1.5 - 1.0 mm', 35148),
(212, 1, 'ER11-2', '2.0 - 1.5 mm', 35148),
(213, 1, 'ER11-2.5', '2.5 - 2.0 mm', 35148),
(214, 1, 'ER11-3', '3.0 - 2.5 mm', 35148),
(215, 1, 'ER11-3.5', '3.5 - 3.0 mm', 35148),
(216, 1, 'ER11-4', '4.0 - 3.5 mm', 35148),
(217, 1, 'ER11-4.5', '4.5 - 4.0 mm', 35148),
(218, 1, 'ER11-5', '5.0 - 4.5 mm', 35148),
(219, 1, 'ER11-5.5', '5.5 - 5.0 mm', 35148),
(220, 1, 'ER11-6', '6.0 - 5.5 mm', 35148),
(221, 1, 'ER11-6.5', '6.5 - 6.0 mm', 35148),
(222, 1, 'ER11-7', '7.0 - 6.5 mm', 35148),
(223, 2, 'ER16-01', '1.0 - 0.5 mm', 35728),
(224, 2, 'ER16-02', '2.0 - 1.0 mm', 35728),
(225, 2, 'ER16-03', '3.0 - 2.0 mm', 35728),
(226, 2, 'ER16-04', '4.0 - 3.0 mm', 35728),
(227, 2, 'ER16-05', '5.0 - 4.0 mm', 35728),
(228, 2, 'ER16-06', '6.0 - 5.0 mm', 35728),
(229, 2, 'ER16-07', '7.0 - 6.0 mm', 35728),
(230, 2, 'ER16-08', '8.0 - 7.0 mm', 35728),
(231, 2, 'ER16-09', '9.0 - 8.0 mm', 35728),
(232, 2, 'ER16-10', '10.0 - 9.0 mm', 35728),
(233, 3, 'ER20-02', '2.0 - 1.0 mm', 33524),
(234, 3, 'ER20-03', '3.0 - 2.0 mm', 33524),
(235, 3, 'ER20-04', '4.0 - 3.0 mm', 33524),
(236, 3, 'ER20-05', '5.0 - 4.0 mm', 33524),
(237, 3, 'ER20-06', '6.0 - 5.0 mm', 33524),
(238, 3, 'ER20-07', '7.0 - 6.0 mm', 33524),
(239, 3, 'ER20-08', '8.0 - 7.0 mm', 33524),
(240, 3, 'ER20-09', '9.0 - 8.0 mm', 33524),
(241, 3, 'ER20-10', '10.0 - 11.0 mm', 33524),
(242, 3, 'ER20-11', '11.0 - 10.0 mm', 33524),
(243, 3, 'ER20-12', '12.0 - 11.0 mm', 33524),
(244, 5, 'ER32-20', '20.0 - 19.0 mm', 40020),
(245, 5, 'ER32-03', '3.0 - 2.0 mm', 40020),
(246, 5, 'ER32-04', '4.0 - 3.0 mm', 40020),
(247, 5, 'ER32-05', '5.0 - 4.0 mm', 40020),
(248, 5, 'ER32-06', '6.0 - 5.0 mm', 40020),
(249, 5, 'ER32-07', '7.0 - 6.0 mm', 40020),
(250, 5, 'ER32-08', '8.0 - 7.0 mm', 40020),
(251, 5, 'ER32-09', '9.0 - 8.0 mm', 40020),
(252, 5, 'ER32-10', '10.0 - 9.0 mm', 40020),
(253, 5, 'ER32-11', '11.0 - 10.0 mm', 40020),
(254, 5, 'ER32-12', '12.0 - 11.0 mm', 40020),
(255, 5, 'ER32-13', '13.0 - 12.0 mm', 40020),
(256, 5, 'ER32-14', '14.0 - 13.0 mm', 40020),
(257, 5, 'ER32-15', '15.0 - 14.0 mm', 40020),
(258, 5, 'ER32-16', '16.0 - 15.0 mm', 40020),
(259, 5, 'ER32-17', '17.0 - 16.0 mm', 40020),
(260, 5, 'ER32-18', '18.0 - 17.0 mm', 40020),
(261, 5, 'ER32-19', '19.0 - 18.0 mm', 40020),
(284, 6, 'ER40-04', '4.0 - 3.0 mm', 47328),
(285, 6, 'ER40-05', '5.0 - 4.0 mm', 47328),
(286, 6, 'ER40-06', '6.0 - 5.0 mm', 47328),
(287, 6, 'ER40-07', '7.0 - 6.0 mm', 47328),
(288, 6, 'ER40-08', '8.0 - 7.0 mm', 47328),
(289, 6, 'ER40-09', '9.0 - 8.0 mm', 47328),
(290, 6, 'ER40-10', '10.0 - 9.0  mm', 47328),
(291, 6, 'ER40-11', '11.0 - 10.0 mm', 47328),
(292, 6, 'ER40-12', '12.0 - 11.0 mm', 47328),
(293, 6, 'ER40-13', '13.0 - 12.0 mm', 47328),
(294, 6, 'ER40-14', '14.0 - 13.0 mm', 47328),
(295, 6, 'ER40-15', '15.0 - 14.0 mm', 47328),
(296, 6, 'ER40-16', '16.0 - 15.0 mm', 47328),
(297, 6, 'ER40-17', '17.0 - 16.0 mm', 47328),
(298, 6, 'ER40-18', '18.0 - 17.0 mm', 47328),
(299, 6, 'ER40-19', '19.0 - 18.0 mm', 47328),
(300, 6, 'ER40-20', '20.0 - 19.0 mm', 47328),
(301, 6, 'ER40-21', '21.0 - 20.0 mm', 47328),
(302, 6, 'ER40-22', '22.0 - 21.0 mm', 47328),
(303, 6, 'ER40-23', '23.0 - 22.0 mm', 47328),
(304, 6, 'ER40-24', '24.0 - 23.0 mm', 47328),
(305, 6, 'ER40-25', '25.0 - 24.0 mm', 47328),
(306, 6, 'ER40-26', '26.0 - 25.0 mm', 47328);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porta_taladrado`
--

DROP TABLE IF EXISTS `porta_taladrado`;
CREATE TABLE IF NOT EXISTS `porta_taladrado` (
  `idporta_taladrado` int(11) NOT NULL AUTO_INCREMENT,
  `idtaladrado` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `diam_corte` varchar(100) NOT NULL,
  `long_corte` varchar(100) NOT NULL,
  `long_total` varchar(100) NOT NULL,
  `diam_espigo` varchar(100) NOT NULL,
  `rosca` varchar(100) NOT NULL,
  `inserto` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idporta_taladrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=489 ;

--
-- Volcado de datos para la tabla `porta_taladrado`
--

INSERT INTO `porta_taladrado` (`idporta_taladrado`, `idtaladrado`, `ref`, `diam_corte`, `long_corte`, `long_total`, `diam_espigo`, `rosca`, `inserto`, `valor`) VALUES
(257, 2, 'S20-DRZ1339-05', '13 mm', '39 mm', '108 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(258, 2, 'S20-DRZ135405-05', '13.5 mm', '40.5 mm', '108 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(259, 2, 'S20-DRZ1442-05', '14 mm', '42 mm', '112 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(260, 2, 'S20-DRZ145435-05', '14.5 mm', '43.5 mm', '112 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(261, 2, 'S20-DRZ1545-05', '15 mm', '45 mm', '115 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(262, 2, 'S20-DRZ155465-05', '15.5 mm', '46.5 mm', '115 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1162710),
(263, 2, 'S25-DRZ1648-06', '16 mm', '48 mm', '131 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(264, 2, 'S25-DRZ165495-06', '16.5 mm', '49.5 mm', '131 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(265, 2, 'S25-DRZ1751-06', '17 mm', '51 mm', '133 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(266, 2, 'S25-DRZ175525-06', '17.5 mm', '52.5 mm', '133 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(267, 2, 'S25-DRZ1854-06', '18 mm', '54 mm', '136 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(268, 2, 'S25-DRZ185555-06', '18.5 mm', '55.5 mm', '136 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(269, 2, 'S25-DRZ1957-06', '19 mm', '57 mm', '139 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(270, 2, 'S25-DRZ195585-06', '19.5 mm', '58.5 mm', '139 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(271, 2, 'S25-DRZ2060-06', '20 mm', '60 mm', '143 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(272, 2, 'S25-DRZ2055615-06', '20.5 mm', '61.5 mm', '146 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(273, 2, 'S25-DRZ2163-06', '21 mm', '63 mm', '146 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1224050),
(274, 2, 'S25-DRZ215645-08', '21.5 mm', '64.5 mm', '147 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(275, 2, 'S25-DRZ2266-08', '22 mm', '66 mm', '147 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(276, 2, 'S25-DRZ225675-08', '22.5 mm', '67.5 mm', '147 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(277, 2, 'S25-DRZ2369-08', '23 mm', '69 mm', '150 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(278, 2, 'S25-DRZ235705-08', '23.5 mm', '70.5 mm', '150 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(279, 2, 'S25-DRZ2472-08', '24 mm ', '72 mm', '152 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(280, 2, 'S25-DRZ245735-08', '24.5 mm', '73.5 mm', '152 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(281, 2, 'S25-DRZ2575-08', '25 mm', '75 mm', '155 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(282, 2, 'S25-DRZ255765-08', '25.5 mm', '76.5 mm', '155 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(283, 2, 'S25-DRZ2678-08', '26 mm', '78 mm', '158 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(284, 2, 'S25-DRZ265795-08', '26.5 mm', '79.5 mm', '158 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1346330),
(285, 2, 'S32-DRZ2781-10', '27 mm', '81 mm', '173 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(286, 2, 'S32-DRZ275825-10', '27.5 mm', '82.5 mm', '173 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(287, 2, 'S32-DRZ2884-10', '28 mm', '84 mm', '176 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(288, 2, 'S32-DRZ285855-10', '28.5 mm', '85.5 mm', '176 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(289, 2, 'S32-DRZ2987-10', '29 mm', '87 mm', '179 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(290, 2, 'S32-DRZ295885-10', '29.5 mm', '88.5 mm', '179 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(291, 2, 'S32-DRZ3090-10', '30 mm', '90 mm', '181 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(292, 2, 'S32-DRZ305915', '30.5 mm', '91.5 mm', '181 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(293, 2, 'S32-DRZ3193-10', '31 mm', '93 mm', '183 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(294, 2, 'S32-DRZ315945-10', '31.5 mm', '94.5 mm', '183 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(295, 2, 'S32-DRZ3296-10', '32 mm', '96 mm', '187 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(296, 2, 'S32-DRZ325975-10', '32.5 mm', '97.5 mm', '187 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1468860),
(297, 2, 'S32-DRZ3399-12', '33 mm', '99 mm', '193 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(298, 2, 'S32-DRZ34102-12', '34 mm', '102 mm', '197 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(299, 2, 'S32-DRZ35105-12', '35 mm', '105 mm', '199 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(300, 2, 'S32-DRZ36108-12', '36 mm', '108 mm', '203 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(301, 2, 'S32-DRZ37111-12', '37 mm', '111 mm', '205 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(302, 2, 'S32-DRZ38114-12', '38 mm', '114 mm', '208 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(303, 2, 'S32-DRZ39117-12', '39 mm', '117 mm', '211 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(304, 2, 'S32-DRZ40120-12', '40 mm', '120 mm', '212 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(305, 2, 'S40-DRZ3399-12', '33 mm', '99 mm', '203 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(306, 2, 'S40-DRZ34102-12', '34 mm', '102 mm', '207 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(307, 2, 'S40-DRZ35105-12', '35 mm', '105 mm', '209 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(308, 2, 'S40-DRZ36108-12', '36 mm', '108 mm', '213 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(309, 2, 'S40-DRZ37111-12', '37 mm', '111 mm', '215 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(310, 2, 'S40-DRZ38114-12', '38 mm', '114 mm', '218 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(311, 2, 'S40-DRZ39117-12', '39 mm', '117 mm', '221 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(312, 2, 'S40-DRZ40120-12', '40 mm', '120 mm', '222 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1591220),
(313, 2, 'S40-DRZ41123-15', '41 mm', '123 mm', '224 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(314, 2, 'S40-DRZ42126-15', '42 mm', '126 mm', '227 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(315, 2, 'S40-DRZ43129-15', '43 mm', '129 mm', '230 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(316, 2, 'S40-DRZ44132-15', '44 mm', '132 mm', '233 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(317, 2, 'S40-DRZ45132-15', '45 mm', '135 mm', '234 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(318, 2, 'S40-DRZ46138-15', '46 mm', '138 mm', '241 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(319, 2, 'S40-DRZ47141-15', '47 mm', '141 mm', '245 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(320, 2, 'S40-DRZ48144-15', '48 mm', '144 mm', '248 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(321, 2, 'S40-DRZ49147-15', '49 mm', '147 mm', '250 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(322, 2, 'S40-DRZ50150-15', '50 mm', '150 mm', '251 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(323, 2, 'S40-DRZ51153-15', '51 mm', '153 mm', '254 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(324, 2, 'S40-DRZ52156-15', '52 mm', '156 mm', '257 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(325, 2, 'S40-DRZ53159-15', '53 mm', '159 mm', '260 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1713505),
(326, 2, 'S40-DRZ54162-20', '54 mm', '162 mm', '266 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1958400),
(327, 2, 'S40-DRZ55165-20', '55 mm', '165 mm', '269 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1958400),
(328, 2, 'S40-DRZ56168-20', '56 mm', '168 mm', '272 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1866620),
(329, 2, 'S40-DRZ57171-20', '57 mm', '171 mm', '275 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1866620),
(330, 2, 'S40-DRZ58174-20', '58 mm', '174 mm', '278 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1866620),
(331, 2, 'S40-DRZ59177-20', '59 mm', '177 mm', '281 mm', '40 mm', 'R 1/4', 'ZCMT200608', 1958400),
(332, 3, 'S20-DRZ1352-05', '13 mm', '52 mm', '121 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(333, 3, 'S20-DRZ135540-05', '13.5 mm', '54 mm', '121 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(334, 3, 'S20-DRZ1456-05', '14 mm', '56 mm ', '126 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(335, 3, 'S20-DRZ145580-05', '14.5 mm', '58 mm', '126 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(336, 3, 'S20-DRZ1560-05', '15 mm', '60 mm', '130 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(337, 3, 'S20-DRZ155620-05', '15.5 mm', '62 mm', '130 mm', '20 mm', 'R 1/8', 'ZCMT050203', 1346330),
(338, 3, 'S25-DRZ1664-06', '16 mm', '64 mm', '147 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(339, 3, 'S25-DRZ165660-06', '16.5 mm', '66 mm', '147 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(340, 3, 'S25-DRZ1768-06', '17 mm', '68 mm ', '149 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(341, 3, 'S25-DRZ175700-06', '17.5 mm', '70 mm', '149 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(342, 3, 'S25-DRZ1872-06', '18 mm', '72 mm', '153 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(343, 3, 'S25-DRZ185740-06', '18.5 mm', '74 mm ', '153 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(344, 3, 'S25-DRZ1976-06', '19 mm', '76 mm', '157 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(345, 3, 'S25-DRZ195780-06', '19.5 mm', '78 mm', '157 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(346, 3, 'S25-DRZ2080-06', '20 mm', '80 mm', '156 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(347, 3, 'S25-DRZ205820-06', '20.5 mm', '82 mm', '161 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(348, 3, 'S25-DRZ2184-06', '21 mm', '84 mm', '161 mm', '25 mm', 'R 1/8', 'ZCMT06T204', 1407670),
(349, 3, 'S25-DRZ215860-08', '21.5 mm', '86 mm', '169 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1407670),
(350, 3, 'S25-DRZ2288-08', '22 mm', '88 mm', '169 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(351, 3, 'S25-DRZ225900-08', '22.5 mm', '90 mm', '169 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(352, 3, 'S25-DRZ2392-08', '23 mm', '92 mm', '173 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(353, 3, 'S25-DRZ235940-08', '23.5 mm', '94 mm', '173 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(354, 3, 'S25-DRZ2496-08', '24 mm', '96 mm', '176 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(355, 3, 'S25-DRZ245980-08', '24.5 mm', '98 mm', '176 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(356, 3, 'S25-DRZ25100-08', '25 mm', '100 mm', '180 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(357, 3, 'S25-DRZ2551020-08', '25.5 mm', '102 mm', '180 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(358, 3, 'S25-DRZ265104-08', '26 mm', '104 mm', '184 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(359, 3, 'S25-DRZ2651060-08', '26.5 mm', '106 mm', '184 mm', '25 mm', 'R 1/8', 'ZCMT080304', 1560550),
(360, 3, 'S32-DRZ27108-10', '27 mm', '108 mm', '200 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(361, 3, 'S32-DRZ2751100-10', '27.5 mm', '110 mm ', '200 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(362, 3, 'S32-DRZ28112-10', '28 mm', '112 mm ', '204 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(363, 3, 'S32-DRZ2851140-10', '28.5 mm', '114 mm', '204 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(364, 3, 'S32-DRZ29116-10', '29 mm', '116 mm', '208 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(365, 3, 'S32-DRZ2951180-10', '29.5 mm', '118 mm', '208 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(366, 3, 'S32-DRZ30120-10', '30 mm', '120 mm', '211 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(367, 3, 'S32-DRZ3051220-10', '30.5 mm', '122 mm', '211 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(368, 3, 'S32-DRZ31124-10', '31 mm', '124 mm', '214 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(369, 3, 'S32-DRZ3151260-10', '31.5 mm', '126 mm', '214 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(370, 3, 'S32-DRZ32128-10', '32 mm', '128 mm', '219 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(371, 3, 'S32-DRZ3251300-10', '32.5 mm', '130 mm', '219 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 1638070),
(372, 3, 'S32-DRZ33132-12', '33 mm', '132 mm', '226 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(373, 3, 'S32-DRZ34136-12', '34 mm', '136 mm', '231 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(374, 3, 'S32-DRZ35140-12', '35 mm', '140 mm', '234 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(375, 3, 'S32-DRZ36144-12', '36 mm', '144 mm', '239 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(376, 3, 'S32-DRZ37148-12', '37 mm', '148 mm', '242 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(377, 3, 'S32-DRZ38152-12', '38 mm', '152 mm', '246 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(378, 3, 'S32-DRZ39156-12', '39 mm', '156 mm', '250 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(379, 3, 'S32-DRZ40160-12', '40 mm', '160 mm', '252 mm', '32 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(380, 3, 'S40-DRZ33132-12', '33 mm', '132 mm', '236 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(381, 3, 'S40-DRZ34136-12', '34 mm', '136 mm', '241 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(382, 3, 'S40-DRZ35140-12', '35 mm', '140 mm', '244 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(383, 3, 'S40-DRZ36144-12', '36 mm', '144 mm', '249 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(384, 3, 'S40-DRZ37148-12', '37 mm', '148 mm', '252 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(385, 3, 'S40-DRZ38152-12', '38 mm', '152 mm', '256 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(386, 3, 'S40-DRZ39156-12', '39 mm', '156 mm', '260 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(387, 3, 'S40-DRZ40160-12', '40 mm', '160 mm', '262 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 1836105),
(388, 3, 'S40-DRZ41164-15', '41 mm', '164 mm', '265 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(389, 3, 'S40-DRZ42168-15', '42 mm', '168 mm', '269 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(390, 3, 'S40-DRZ43172-15', '43 mm', '172 mm', '273 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(391, 3, 'S40-DRZ44176-15', '44 mm', '176 mm', '277 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(392, 3, 'S40-DRZ45180-15', '45 mm', '180 mm', '279 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(393, 3, 'S40-DRZ46184-15', '46 mm', '184 mm', '287 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(394, 3, 'S40-DRZ47188-15', '47 mm', '188 mm', '292 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(395, 3, 'S40-DRZ48192-15', '48 mm', '192 mm', '296 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(396, 3, 'S40-DRZ49196-15', '49 mm', '196 mm', '300 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(397, 3, 'S40-DRZ50200-15', '50 mm', '200 mm', '301 mm', '40 mm', 'R 1/4', 'ZCMT150408', 1958392),
(398, 10, 'S32-DRZ27135-10', '27 mm', '135 mm', '227 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(399, 10, 'S32-DRZ28140-10', '28 mm', '140 mm', '232 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(400, 10, 'S32-DRZ29145-10', '29 mm', '145 mm', '237 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(401, 10, 'S32-DRZ30150-10', '30 mm', '150 mm', '241 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(402, 10, 'S32-DRZ31155-10', '31 mm', '155 mm', '245 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(403, 10, 'S32-DRZ32160-10', '32 mm', '160 mm', '251 mm', '32 mm', 'R 1/4', 'ZCMT10T304', 2085400),
(404, 10, 'S40-DRZ33165-12', '33 mm', '165 mm', '269 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2295000),
(405, 10, 'S40-DRZ34170-12', '34 mm', '170 mm', '275 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2886650),
(406, 10, 'S40-DRZ35175-12', '35 mm', '175 mm', '279 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2295000),
(407, 10, 'S40-DRZ36180-12', '36 mm', '180 mm', '285 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2886650),
(408, 10, 'S40-DRZ37185-12', '37 mm', '185 mm', '289 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2295000),
(409, 10, 'S40-DRZ38190-12', '38 mm', '190 mm', '294 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2749300),
(410, 10, 'S40-DRZ39195-12', '39 mm', '195 mm', '299 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2749300),
(411, 10, 'S40-DRZ40200-12', '40 mm', '200 mm', '302 mm', '40 mm', 'R 1/4', 'ZCMT12T306', 2295000),
(412, 10, 'S40-DRZ41205-15', '41 mm', '205 mm', '306 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(413, 10, 'S40-DRZ42210-15', '42 mm', '210mm', '311 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(414, 10, 'S40-DRZ43215-15', '43 mm ', '215 mm', '316 mm', '40 mm', 'R 1/4', 'ZCMT150408', 2447900),
(415, 10, 'S40-DRZ44220-15', '44 mm', '220 mm', '321 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(416, 10, 'S40-DRZ45225-15', '45 mm', '225 mm', '324 mm', '40 mm', 'R 1/4', 'ZCMT150408', 2447900),
(417, 10, 'S40-DRZ46230-15', '46 mm ', '230 mm', '333 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(418, 10, 'S40-DRZ47235-15', '47 mm', '235 mm', '339 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(419, 10, 'S40-DRZ48240-15', '48 mm', '240 mm', '344 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(420, 10, 'S40-DRZ49245-15', '49 mm', '245 mm', '349 mm', '40 mm', 'R 1/4', 'ZCMT150408', 3082150),
(421, 10, 'S40-DRZ50250-15', '50 mm', '250 mm', '351 mm', '40 mm', 'R 1/4', 'ZCMT150408', 2447900),
(422, 1, 'S20-DRZ1326-05', '13 mm', '26 mm', '95 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 11047407),
(423, 1, 'S20-DRZ135270-05', '13.5 mm', '27 mm', '95 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 1104740),
(424, 1, 'S20-DRZ1428-05', '14 mm', '28 mm ', '98 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 1104740),
(425, 1, 'S20-DRZ145290-05', '14.5 mm', '29 mm', '98 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 1104740),
(426, 1, 'S20-DRZ1530-05', '15 mm', '30 mm', '100 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 1104740),
(427, 1, 'S20-DRZ155310-05', '15.5 mm', '31 mm', '100 mm', '20 mm', 'Rc 1/8', 'ZCMT050203', 1104740),
(428, 1, 'S25-DRZ1632-06', '16 mm', '32 mm', '115 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(429, 1, 'S25-DRZ165330-06', '16.5 mm', '33 mm', '115 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(430, 1, 'S25-DRZ1734-06', '17 mm', '34 mm', '116 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(431, 1, 'S25-DRZ175350-06', '17.5 mm', '35 mm', '116 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(432, 1, 'S25-DRZ1836-06', '18 mm', '36 mm', '118 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(433, 1, 'S25-DRZ185370-06', '18.5 mm', '37 mm', '118 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(434, 1, 'S25-DRZ1938-06', '19 mm', '38 mm', '120 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(435, 1, 'S25-DRZ195390-06', '19.5 mm', '39 mm', '120 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(436, 1, 'S25-DRZ2040-06', '20 mm', '40 mm', '123 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(437, 1, 'S25-DRZ205410-06', '20.5 mm', '41 mm', '125 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(438, 1, 'S25-DRZ2142-06', '21 mm', '42 mm', '125 mm', '25 mm', 'Rc 1/8', 'ZCMT06T204', 1162710),
(439, 1, 'S25-DRZ215430-08', '21.5 mm', '43 mm', '128 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(440, 1, 'S25-DRZ2244-08', '22 mm', '44 mm', '128 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(441, 1, 'S25-DRZ225450-08', '22.5 mm', '45 mm', '128 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(442, 1, 'S25-DRZ2346-08', '23 mm', '46 mm', '130 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(443, 1, 'S25-DRZ235470-08', '23.5 mm', '47 mm', '130 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(444, 1, 'S25-DRZ2448-08', '24 mm', '48 mm', '131 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(445, 1, 'S25-DRZ245490-08', '24.5 mm', '49 mm', '131 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(446, 1, 'S25-DRZ2550-08', '25 mm', '50 mm', '133 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(447, 1, 'S25-DRZ255510-08', '25.5 mm', '51 mm', '133 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(448, 1, 'S25-DRZ2652-08', '26 mm', '52 mm', '135 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(449, 1, 'S25-DRZ265530-08', '26.5 mm', '53 mm', '135 mm', '25 mm', 'Rc 1/8', 'ZCMT080304', 1279190),
(450, 1, 'S32-DRZ2754-10', '27 mm', '54 mm', '149 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(451, 1, 'S32-DRZ275550-10', '27.5 mm', '55 mm', '149 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(452, 1, 'S32-DRZ2856-10', '28 mm', '56 mm', '151 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(453, 1, 'S32-DRZ285570-10', '28.5 mm', '57 mm', '151 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(454, 1, 'S32-DRZ2958-10', '29 mm', '58 mm', '153 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(455, 1, 'S32-DRZ295590-10', '29.5 mm', '59 mm', '153 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(456, 1, 'S32-DRZ3060-10', '30 mm', '60 mm', '154 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(457, 1, 'S32-DRZ305610-10', '30.5 mm', '61 mm', '154 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(458, 1, 'S32-DRZ3162-10', '31 mm', '62 mm', '155 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(459, 1, 'S32-DRZ315630-10', '31.5 mm', '63 mm', '155 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(460, 1, 'S32-DRZ3264-10', '32 mm', '64 mm', '158 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(461, 1, 'S32-DRZ325650-10', '32.5 mm', '65 mm', '158 mm', '32 mm', 'Rc 1/4', 'ZCMT10T304', 1395280),
(462, 1, 'S40-DRZ3366-12', '33 mm', '66 mm', '173 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(463, 1, 'S40-DRZ3468-12', '34 mm', '68 mm', '176 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(464, 1, 'S40-DRZ3570-12', '35 mm', '70 mm', '177 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(465, 1, 'S40-DRZ3672-12', '36 mm', '72 mm', '180 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(466, 1, 'S40-DRZ3774-12', '37 mm', '74 mm', '181 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(467, 1, 'S40-DRZ3876-12', '38 mm', '76 mm', '183 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(468, 1, 'S40-DRZ3978-12', '39 mm', '78 mm', '185 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(469, 1, 'S40-DRZ4080-12', '40 mm', '80 mm', '185 mm', '40 mm', 'Rc 1/4', 'ZCMT12T306', 1511840),
(470, 1, 'S40-DRZ4182-15', '41 mm', '82 mm', '186 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(471, 1, 'S40-DRZ4284-15', '42 mm', '84 mm', '188 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(472, 1, 'S40-DRZ4386-15', '43 mm', '86 mm', '190 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(473, 1, 'S40-DRZ4488-15', '44 mm', '88 mm', '192 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(474, 1, 'S40-DRZ4590-15', '45 mm', '90 mm', '192 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(475, 1, 'S40-DRZ4692-15', '46 mm', '92 mm', '198 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(476, 1, 'S40-DRZ4794-15', '47 mm', '94 mm', '201 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(477, 1, 'S40-DRZ4896-15', '48 mm', '96 mm', '203 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(478, 1, 'S40-DRZ4998-15', '49 mm', '98 mm', '204 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(479, 1, 'S40-DRZ50100-15', '50 mm', '100 mm', '204 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(480, 1, 'S40-DRZ51102-15', '51 mm', '102 mm', '205 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(481, 1, 'S40-DRZ52104-15', '52 mm', '104 mm', '205 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(482, 1, 'S40-DRZ53106-15', '53 mm', '105 mm', '208 mm', '40 mm', 'Rc 1/4', 'ZCMT150408', 1628010),
(483, 1, 'S40-DRZ54108-20', '54 mm', '108 mm', '214 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010),
(484, 1, 'S40-DRZ55110-20', '55 mm', '110 mm', '215 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010),
(485, 1, 'S40-DRZ56112-20', '56 mm', '112 mm', '217 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010),
(486, 1, 'S40-DRZ57114-20', '57 mm', '114 mm', '219 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010),
(487, 1, 'S40-DRZ58116-20', '58 mm', '116 mm', '221 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010),
(488, 1, 'S40-DRZ59118-20', '59 mm', '118 mm', '223 mm', '40 mm', 'Rc 1/4', 'ZCMT200608', 1628010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_conos`
--

DROP TABLE IF EXISTS `productos_conos`;
CREATE TABLE IF NOT EXISTS `productos_conos` (
  `idproductos_conos` int(11) NOT NULL AUTO_INCREMENT,
  `idconos` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idproductos_conos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productos_conos`
--

INSERT INTO `productos_conos` (`idproductos_conos`, `idconos`, `titulo`, `texto`, `imagen`) VALUES
(5, 1, 'Prueba', 'jdnksj % & //', 'productos_conos_5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_referido`
--

DROP TABLE IF EXISTS `productos_referido`;
CREATE TABLE IF NOT EXISTS `productos_referido` (
  `idproductos_referido` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idproductos_referido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos_referido`
--

INSERT INTO `productos_referido` (`idproductos_referido`, `titulo`, `texto`, `imagen`, `valor`) VALUES
(1, 'Producto 1', 'TituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is simply dummy text of the ', 'productos_referido_1.jpg', 100),
(2, 'Producto 2', 'ituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido_2.jpg', 200),
(3, 'Producto 3', 'TituloLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee TituloLorem Ipsum is ', 'productos_referido_3.jpg', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_roscado`
--

DROP TABLE IF EXISTS `productos_roscado`;
CREATE TABLE IF NOT EXISTS `productos_roscado` (
  `idproductos_roscado` int(11) NOT NULL AUTO_INCREMENT,
  `idroscado` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idproductos_roscado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productos_roscado`
--

INSERT INTO `productos_roscado` (`idproductos_roscado`, `idroscado`, `titulo`, `texto`, `imagen`) VALUES
(1, 1, 'Roscado Interno', '', 'productos_roscado_1.jpg'),
(2, 1, 'Roscado Externo', '', 'productos_roscado_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_sujecion`
--

DROP TABLE IF EXISTS `productos_sujecion`;
CREATE TABLE IF NOT EXISTS `productos_sujecion` (
  `idproductos_sujecion` int(11) NOT NULL AUTO_INCREMENT,
  `idsujecion` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idproductos_sujecion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `productos_sujecion`
--

INSERT INTO `productos_sujecion` (`idproductos_sujecion`, `idsujecion`, `titulo`, `texto`, `imagen`) VALUES
(1, 1, 'Pinza-Boquilla ER11', '', 'productos_sujecion_1.jpg'),
(2, 1, 'Pinza-Boquilla ER16', '', 'productos_sujecion_2.jpg'),
(3, 1, 'Pinza-Boquilla ER20', '', 'productos_sujecion_3.jpg'),
(4, 1, 'Pinza-Boquilla ER25', '', 'productos_sujecion_4.jpg'),
(5, 1, 'Pinza-Boquilla ER32', '', 'productos_sujecion_5.jpg'),
(6, 1, 'Pinza-Boquilla ER40', '', 'productos_sujecion_6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_torneado`
--

DROP TABLE IF EXISTS `producto_torneado`;
CREATE TABLE IF NOT EXISTS `producto_torneado` (
  `idproducto_torneado` int(11) NOT NULL AUTO_INCREMENT,
  `idtipo_inserto` varchar(1) DEFAULT NULL,
  `idmateriales` varchar(2) DEFAULT NULL,
  `idgeometria` varchar(2) DEFAULT NULL,
  `idangulo` varchar(2) DEFAULT NULL,
  `idlongitud` varchar(2) DEFAULT NULL,
  `idespesor` varchar(2) DEFAULT NULL,
  `idradio` varchar(2) DEFAULT NULL,
  `idtipo_corte` varchar(2) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idproducto_torneado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Volcado de datos para la tabla `producto_torneado`
--

INSERT INTO `producto_torneado` (`idproducto_torneado`, `idtipo_inserto`, `idmateriales`, `idgeometria`, `idangulo`, `idlongitud`, `idespesor`, `idradio`, `idtipo_corte`, `valor`, `imagen`) VALUES
(76, 'C', 'm', 'c', 'c', '12', '04', '08', 'IL', 19780, 'producto_torneado_76.jpg'),
(77, 'C', 'p', 'c', 'c', '12', '04', '08', 'IL', 19780, 'producto_torneado_77.jpg'),
(78, 'C', 'p', 'c', 'n', '12', '04', '08', 'IL', 20260, 'producto_torneado_78.jpg'),
(80, 'C', 'p', 'c', 'n', '16', '06', '08', 'IL', 43380, 'producto_torneado_80.jpg'),
(81, 'C', 'p', 'c', 'n', '12', '04', '08', 'IL', 20260, 'producto_torneado_81.jpg'),
(82, 'C', 'm', 'c', 'n', '12', '04', '08', 'IL', 20260, 'producto_torneado_82.jpg'),
(83, 'C', 'p', 'c', 'n', '12', '04', '08', 'IL', 26125, 'producto_torneado_83.jpg'),
(84, 'C', 'p', 'c', 'n', '16', '06', '08', 'IL', 43380, 'producto_torneado_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radio`
--

DROP TABLE IF EXISTS `radio`;
CREATE TABLE IF NOT EXISTS `radio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idradio` varchar(2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `idgeometria` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unico_radio` (`idradio`,`idgeometria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `radio`
--

INSERT INTO `radio` (`id`, `idradio`, `imagen`, `idgeometria`) VALUES
(6, '12', 'radio_12-w.jpg', 'w'),
(7, '02', 'radio_02-c.jpg', 'c'),
(8, '04', 'radio_04-c.jpg', 'c'),
(9, '08', 'radio_08-c.jpg', 'c'),
(10, '02', 'radio_02-d.jpg', 'd'),
(11, '04', 'radio_04-d.jpg', 'd'),
(12, '08', 'radio_08-d.jpg', 'd'),
(13, '08', 'radio_08-s.jpg', 's'),
(14, '02', 'radio_02-t.jpg', 't'),
(15, '04', 'radio_04-t.jpg', 't'),
(16, '08', 'radio_08-t.jpg', 't'),
(17, '02', 'radio_02-v.jpg', 'v'),
(18, '04', 'radio_04-v.jpg', 'v'),
(19, '08', 'radio_08-v.jpg', 'v'),
(20, '04', 'radio_04-w.jpg', 'w'),
(21, '08', 'radio_08-w.jpg', 'w'),
(22, '12', 'radio_12-c.jpg', 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranurado`
--

DROP TABLE IF EXISTS `ranurado`;
CREATE TABLE IF NOT EXISTS `ranurado` (
  `idranurado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `modulo` int(111) NOT NULL,
  `paso` varchar(2) NOT NULL,
  `nivel` int(11) NOT NULL,
  `idportafoliopadre` int(11) NOT NULL,
  `orientacion` varchar(2) NOT NULL,
  PRIMARY KEY (`idranurado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ranurado`
--

INSERT INTO `ranurado` (`idranurado`, `titulo`, `texto`, `imagen`, `modulo`, `paso`, `nivel`, `idportafoliopadre`, `orientacion`) VALUES
(1, 'Ranurado y Corte', '', 'ranurado_1.jpg', 0, '', 0, 0, ''),
(3, 'sds', 'sa', 'ranurado_1.jpg', 0, 'P', 2, 2, ''),
(4, 'Lamas', '', 'ranurado_1.jpg', 0, 'P', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranurado_cab`
--

DROP TABLE IF EXISTS `ranurado_cab`;
CREATE TABLE IF NOT EXISTS `ranurado_cab` (
  `ranurado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idranurado` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`ranurado_cab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

DROP TABLE IF EXISTS `redes`;
CREATE TABLE IF NOT EXISTS `redes` (
  `idredes` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idredes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`idredes`, `facebook`, `twitter`) VALUES
(1, 'https://www.facebook.com/MetalCutLtda', 'https://twitter.com/MetalCutLtda_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roscado`
--

DROP TABLE IF EXISTS `roscado`;
CREATE TABLE IF NOT EXISTS `roscado` (
  `idroscado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  `modulo` varchar(111) NOT NULL,
  `paso` varchar(2) NOT NULL,
  `nivel` int(11) NOT NULL,
  `idportafoliopadre` int(11) NOT NULL,
  `orientacion` varchar(2) NOT NULL,
  PRIMARY KEY (`idroscado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roscado`
--

INSERT INTO `roscado` (`idroscado`, `titulo`, `texto`, `imagen`, `modulo`, `paso`, `nivel`, `idportafoliopadre`, `orientacion`) VALUES
(1, 'Roscado', '', 'roscado_1.jpg', '', '', 0, 0, ''),
(2, 'prueba andres ros', 'dasfasdf', 'roscado_1.png', 'roscado', 'S', 0, 0, ''),
(3, 'asd', 'asd', 'roscado_1.png', 'roscado', 'P', 1, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roscado_cab`
--

DROP TABLE IF EXISTS `roscado_cab`;
CREATE TABLE IF NOT EXISTS `roscado_cab` (
  `roscado_cab` int(11) NOT NULL AUTO_INCREMENT,
  `idroscado` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL,
  `col7` varchar(100) NOT NULL,
  `col8` varchar(100) NOT NULL,
  `col9` varchar(100) NOT NULL,
  `col10` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`roscado_cab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sujecion`
--

DROP TABLE IF EXISTS `sujecion`;
CREATE TABLE IF NOT EXISTS `sujecion` (
  `idsujecion` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idsujecion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sujecion`
--

INSERT INTO `sujecion` (`idsujecion`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Sujeción', '', 'sujecion_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taladrado`
--

DROP TABLE IF EXISTS `taladrado`;
CREATE TABLE IF NOT EXISTS `taladrado` (
  `idtaladrado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idtaladrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `taladrado`
--

INSERT INTO `taladrado` (`idtaladrado`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Brocas 2xD', 'Brocas de taladrado continuo,\r\nGama de Diametros Ø13mm - Ø59mm', 'taladrado_1.jpg'),
(2, 'Brocas 3xD', 'Brocas de taladrado continuo,\r\nGama de Diametros Ø13mm - Ø59mm', 'taladrado_2.jpg'),
(3, 'Brocas 4xD', 'Brocas de taladrado continuo,Gama de Diametros Ø13mm - Ø50mm', 'taladrado_3.jpg'),
(10, 'Brocas 5xD', 'Brocas de taladrado continuo,Gama de Diametros Ø27mm - Ø50mm', 'taladrado_10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_corte`
--

DROP TABLE IF EXISTS `tipo_corte`;
CREATE TABLE IF NOT EXISTS `tipo_corte` (
  `idtipo_corte` varchar(2) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_corte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_corte`
--

INSERT INTO `tipo_corte` (`idtipo_corte`, `imagen`) VALUES
('CC', 'tipo_corte_CC.jpg'),
('IL', 'tipo_corte_IL.jpg'),
('IP', 'tipo_corte_IP.jpg'),
('WN', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inserto`
--

DROP TABLE IF EXISTS `tipo_inserto`;
CREATE TABLE IF NOT EXISTS `tipo_inserto` (
  `idtipo_inserto` varchar(2) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_inserto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_inserto`
--

INSERT INTO `tipo_inserto` (`idtipo_inserto`, `imagen`) VALUES
('A', 'Alesado'),
('C', 'Cilindrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_carrito`
--

DROP TABLE IF EXISTS `user_carrito`;
CREATE TABLE IF NOT EXISTS `user_carrito` (
  `iduser_carrito` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `nit_empresa` varchar(100) DEFAULT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser_carrito`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `user_carrito`
--

INSERT INTO `user_carrito` (`iduser_carrito`, `empresa`, `nombre`, `fecha_nacimiento`, `genero`, `ciudad`, `correo`, `contrasena`, `nit_empresa`, `estado`) VALUES
(5, 'Imaginamos', 'Diana Sandoval', '7/8/2013', '1', 'Bogota', 'sandoval.ing2005@gmail.com', 'MTIzNDU=', '56456465', 'Activo'),
(6, 'DYN', 'Diana Sandoval', '29/06/1982', '1', 'Bogota', 'sandoval_ing@yahoo.es', 'OTg3NjU=', '56456465', 'Inactivo'),
(7, 'D&N Soluciones', 'Nicolay', '', '1', 'Bogotá', 'nicolayfernando12@gmail.com', 'c3ZyczE3MDk=', '900.204.344-6', 'Activo'),
(8, 'Imaginamos', 'Alexandra Gomez', '7/8/2013', '2', 'Bogotá D.C ', 'alexandra.gomez@imaginamos.com', 'VXN1YXJpbzIwMTE=', '68586586', 'Activo'),
(10, 'Cartiers', 'Fernando Bocanegra', '1/8/2013', '1', 'Ibagué', 'dynsoluciones@hotmail.com', 'ZGljYXNhbWUwMQ==', '3456789012-1', 'Activo'),
(11, 'imaginamos', 'elbert', '28/10/2013', '1', 'Bogotá, Colombia', 'elbert.tous@imaginamos.co', 'MTIzNDU2', '7-1047414684', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision`
--

DROP TABLE IF EXISTS `vision`;
CREATE TABLE IF NOT EXISTS `vision` (
  `idvision` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idvision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `vision`
--

INSERT INTO `vision` (`idvision`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Visión', '', 'vision_1.jpg');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
