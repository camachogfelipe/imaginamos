-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2013 a las 09:44:54
-- Versión del servidor: 5.5.31-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuariofbz_chinamotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_banners`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_banners`;
CREATE TABLE IF NOT EXISTS `cms_banners` (
  `banners_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `banners_txt1` varchar(80) DEFAULT NULL COMMENT 'Texto 1',
  `banners_txt2` varchar(80) DEFAULT NULL COMMENT 'Texto 2',
  `banners_txt3` varchar(80) DEFAULT NULL,
  `banners_url` varchar(80) DEFAULT NULL COMMENT 'URL Banner',
  `banners_blank` tinyint(1) DEFAULT '0' COMMENT 'Abre en una nueva pagina',
  `banners_order` int(5) unsigned DEFAULT '0' COMMENT 'Orden',
  `banners_image` varchar(120) DEFAULT NULL COMMENT 'Imagen',
  PRIMARY KEY (`banners_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cms_banners`
--

INSERT INTO `cms_banners` (`banners_id`, `banners_txt1`, `banners_txt2`, `banners_txt3`, `banners_url`, `banners_blank`, `banners_order`, `banners_image`) VALUES
(10, 'DONEC QUAM 1', 'TINCIDUNT AM', 'COMMODO', 'productoInfo.php?id=1', 0, 1, 'slide11358754267.png'),
(11, 'DONEC QUAM 4', 'TINCIDUNT AO', 'COMMOD', 'productoInfo.php?id=2', 0, 1, 'slide21358754410.png'),
(15, 'PTxt1', 'PTxt2', 'PTxt3', 'productoInfo.php?id=3', 0, 1, 'slide11360711182.png'),
(16, 'PISTONES', 'SMART PARTS', 'CALIDAD', 'http://repositorio.imaginamos.com/FBZ/chinamotos/ventas.php', 0, 1, '31364414607.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_banners_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_banners_config`;
CREATE TABLE IF NOT EXISTS `cms_banners_config` (
  `banners_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `banners_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `banners_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`banners_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_banners_config`
--

INSERT INTO `cms_banners_config` (`banners_config_id`, `banners_config_funcionality`, `banners_config_date`) VALUES
(1, 1, '2012-11-22 20:50:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
--
-- Creación: 05-02-2013 a las 20:52:28
-- Última actualización: 05-02-2013 a las 20:53:16
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
(1, '2012-07-25 12:10:42', 'http://repositorio.imaginamos.com/FBZ/chinamotos/cms/', 'http://repositorio.imaginamos.com/FBZ/chinamotos/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_contacto`;
CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `contacto_id` int(11) NOT NULL AUTO_INCREMENT,
  `contacto_contenido` text NOT NULL,
  `contacto_direc` varchar(250) DEFAULT NULL,
  `contacto_direc2` varchar(250) DEFAULT NULL,
  `contacto_barrio` varchar(80) DEFAULT NULL,
  `contacto_ciudad` varchar(80) DEFAULT NULL,
  `contacto_pais` varchar(80) DEFAULT NULL,
  `contacto_tel` varchar(80) DEFAULT NULL,
  `contacto_movil` varchar(80) DEFAULT NULL,
  `contacto_email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`contacto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contacto`
--

INSERT INTO `cms_contacto` (`contacto_id`, `contacto_contenido`, `contacto_direc`, `contacto_direc2`, `contacto_barrio`, `contacto_ciudad`, `contacto_pais`, `contacto_tel`, `contacto_movil`, `contacto_email`) VALUES
(1, 'I here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.', 'CALI 1, CRA 15 # 16&ordf;- 40', 'CALI 2,  CALLE 36 #35-74', 'BOGOTA, CALLE 16 # 13-72', 'COLOMBIA', '.', 'CALI: 8816214 / 3358091', 'BOGOTA: 2826090', 'Impo@chmotos.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_contacto_config`;
CREATE TABLE IF NOT EXISTS `cms_contacto_config` (
  `contacto_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `contacto_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `contacto_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`contacto_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contacto_config`
--

INSERT INTO `cms_contacto_config` (`contacto_config_id`, `contacto_config_funcionality`, `contacto_config_date`) VALUES
(1, 1, '2012-11-26 20:15:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_distrib`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_distrib`;
CREATE TABLE IF NOT EXISTS `cms_distrib` (
  `distrib_id` int(11) NOT NULL AUTO_INCREMENT,
  `distrib_contenido` text NOT NULL,
  PRIMARY KEY (`distrib_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_distrib`
--

INSERT INTO `cms_distrib` (`distrib_id`, `distrib_contenido`) VALUES
(1, 'Si eres una empresa, taller o  almac&eacute;n que quiere  distribuir nuestros repuestos en cualquier parte del Pais o del mundo, solo tienes que  contactarnos a: impo@chmotos.co.  enviaremos alguno de nuestros representantes en tu regi&oacute;n.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_distrib_ap`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_distrib_ap`;
CREATE TABLE IF NOT EXISTS `cms_distrib_ap` (
  `distrib_ap_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `distrib_ap_tit` varchar(250) NOT NULL,
  `distrib_ap_c1` varchar(250) DEFAULT NULL,
  `distrib_ap_c2` varchar(250) DEFAULT NULL,
  `distrib_ap_c3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`distrib_ap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_distrib_ap`
--

INSERT INTO `cms_distrib_ap` (`distrib_ap_id`, `distrib_ap_tit`, `distrib_ap_c1`, `distrib_ap_c2`, `distrib_ap_c3`) VALUES
(1, 'ZONA CENTRO Y LLANOS ORIENTALES', 'JORGE BELTR&Aacute;N', 'Cel: 314 227 8593', ''),
(2, 'EJE CAFETERO, NARI&Ntilde;O Y SANTANDERES', 'RODRIGO RUIZ', 'Cel: 314 297 1911', ''),
(3, 'SUR OCCIDENTE: VALLE DEL CAUCA, CAUCA, HUILA, TOLIMA Y CAQUET&Aacute;', 'JOHN JAMES CASANOVA', 'Cel: 314 776 7723', ''),
(4, 'ANTIOQUIA', 'RUB&Eacute;N DAR&Iacute;O &Aacute;NGEL', 'Cel: 318 257 4983', ''),
(5, 'CARTERA Y DEVOLUCIONES', 'HOOVER JULIO RUIZ', 'Tel: 2826090 Ext. 116 Bogot&aacute;', 'Cel: 321 759 6203'),
(6, 'PEDIDOS EN BOGOT&Aacute; DC', 'Fax: 2826090', '', ''),
(7, 'PEDIDOS EN CALI', 'Fax: 3708444', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_distrib_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_distrib_config`;
CREATE TABLE IF NOT EXISTS `cms_distrib_config` (
  `distrib_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `distrib_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `distrib_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`distrib_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_distrib_config`
--

INSERT INTO `cms_distrib_config` (`distrib_config_id`, `distrib_config_funcionality`, `distrib_config_date`) VALUES
(1, 2, '2013-01-21 11:52:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_empresa`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_empresa`;
CREATE TABLE IF NOT EXISTS `cms_empresa` (
  `empresa_id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_titulo` varchar(80) NOT NULL,
  `empresa_contenido` text NOT NULL,
  `empresa_imagen` varchar(250) NOT NULL,
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_empresa`
--

INSERT INTO `cms_empresa` (`empresa_id`, `empresa_titulo`, `empresa_contenido`, `empresa_imagen`) VALUES
(1, 'LA SOLUCION A SU PROBLEMA', 'De la creciente preocupaci&oacute;n en brindar soluci&oacute;n a la demanda de repuestos de la naciente industria del motociclismo en Colombia surge Automotos hace mas de 25 a&ntilde;os, durante todo este recorrido se ha destacado en la comercializaci&oacute;n de las mejores partes para motocicleta y motocarros de las m&aacute;s reconocidas marcas que se venden en nuestro pa&iacute;s.\r\nCon la llegada del nuevo siglo y la masificaci&oacute;n de la industrializaci&oacute;n en China arriban a Colombia  una serie de motocicletas a muy bajo costo, comparadas con las ya tradicionales marcas que estaban en el mercado, d&aacute;ndole la oportunidad a muchos Colombianos de hacerse a una motocicleta que le dar&iacute;a soluci&oacute;n a las necesidades diarias de su haber.\r\nCon los ires y venires de la econom&iacute;a muchas de estas nuevas marcas se fueron quedando sin representaci&oacute;n y desampararon a sus clientes.\r\nDe esa iniciativa nace Importadora China motos con el fin de devolverles la confianza a todos los colombianos que invirtieron su dinero en las motos de origen Chino y pensaron que no iban a encontrar representaci&oacute;n de las partes de las mismas\r\n', 'imgEmpresa1358758712.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_empresa_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_empresa_config`;
CREATE TABLE IF NOT EXISTS `cms_empresa_config` (
  `empresa_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `empresa_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `empresa_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`empresa_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_empresa_config`
--

INSERT INTO `cms_empresa_config` (`empresa_config_id`, `empresa_config_funcionality`, `empresa_config_date`) VALUES
(1, 1, '2012-11-26 18:45:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_mapa`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_mapa`;
CREATE TABLE IF NOT EXISTS `cms_mapa` (
  `mapa_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `mapa_contenido` text NOT NULL,
  `mapa_enlace` text NOT NULL COMMENT 'Ruta Enlace GoogleMap',
  PRIMARY KEY (`mapa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_mapa`
--

INSERT INTO `cms_mapa` (`mapa_id`, `mapa_contenido`, `mapa_enlace`) VALUES
(1, 'En nuestros puntos de venta encontrar&aacute;s personas id&oacute;neas especializadas en motocicletas de origen asi&aacute;tico que te orientaran a la mejor soluci&oacute;n.', '<iframe width="600" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&msid=213189817040892999736.0004cf06e1779cd4f20df&ie=UTF8&t=m&ll=4.423179,-75.300293&spn=0.821937,1.645203&z=7&output=embed"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_mapa_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_mapa_config`;
CREATE TABLE IF NOT EXISTS `cms_mapa_config` (
  `mapa_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `mapa_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `mapa_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`mapa_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_mapa_config`
--

INSERT INTO `cms_mapa_config` (`mapa_config_id`, `mapa_config_funcionality`, `mapa_config_date`) VALUES
(1, 1, '2012-11-26 20:15:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--
-- Creación: 05-02-2013 a las 20:52:30
-- Última actualización: 05-02-2013 a las 20:52:30
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_news`;
CREATE TABLE IF NOT EXISTS `cms_news` (
  `news_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_title` varchar(80) DEFAULT NULL COMMENT 'TÃ­tulo de la noticia',
  `news_resumen` text NOT NULL,
  `news_article` text COMMENT 'ArtÃ­culo de la noticia',
  `news_image` varchar(120) DEFAULT NULL COMMENT 'Imagen de la noticia',
  `news_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cms_news`
--

INSERT INTO `cms_news` (`news_id`, `news_title`, `news_resumen`, `news_article`, `news_image`, `news_date`) VALUES
(6, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dummy text of the printing and typesetting...', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. 2', 'actualidad_b1359619308.jpg', '2013-01-21 12:06:44'),
(7, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, dummy text of the printing and typesetting...', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.\r\n\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.\r\n\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. FIN.', 'actualidad21359619768.jpg', '2013-01-31 08:16:59'),
(8, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dummy text of the printing and typesetting...\r\n', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. FIN.', 'actualidad31359621977.jpg', '2013-01-31 09:46:19'),
(9, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dummy text of the printing and typesetting...', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. FIN.', 'actualidad41359622117.jpg', '2013-01-31 09:48:38'),
(10, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dummy text of the printing and typesetting...', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. FIN.', 'actualidad21359622184.jpg', '2013-01-31 09:49:46'),
(11, 'Titulo Item', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, dummy text of the printing and typesetting...', 'Praesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor.<br />\r\n<br />\r\nPraesent condimentum dictum metus, adipiscing adipiscing odio tempus at. Fusce pharetra massa sed metus accumsan in venenatis enim tempor. Aliquam eu tristique magna. Etiam justo nunc, semper vitae gravida non, fermentum vel ligula. Vestibulum ullamcorper adipiscing pulvinar. Pellentesque cursus rutrum metus in elementum. In ornare tincidunt orci a molestie. Proin consequat nisi vel risus molestie ac pulvinar elit bibendum. Quisque purus mi, ornare tincidunt mattis id, placerat et dolor. FIN.', 'actualidad31359622233.jpg', '2013-01-31 09:50:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_news_config`;
CREATE TABLE IF NOT EXISTS `cms_news_config` (
  `news_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `news_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`news_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_news_config`
--

INSERT INTO `cms_news_config` (`news_config_id`, `news_config_funcionality`, `news_config_date`) VALUES
(1, 2, '2013-01-21 11:52:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_user`
--
-- Creación: 17-05-2013 a las 20:53:34
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
-- Estructura de tabla para la tabla `cms_vendemos`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_vendemos`;
CREATE TABLE IF NOT EXISTS `cms_vendemos` (
  `vendemos_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendemos_contenido` text NOT NULL,
  `vendemos_contenido2` text NOT NULL,
  PRIMARY KEY (`vendemos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_vendemos`
--

INSERT INTO `cms_vendemos` (`vendemos_id`, `vendemos_contenido`, `vendemos_contenido2`) VALUES
(1, 'SP: son partes inteligentes para motor, con altos estándares de calidad, en el mercado solemos encontrar partes para adaptar a nuestra motocicleta que a menudo estropean el correcto funcionamiento de nuestro vehículo, es por eso que en SP encontraras un producto apto para el desempeño de tu moto.\r\n\r\nZonko: las partes eléctricas son a menudo las más delicadas para el funcionamiento de la motocicleta y por eso debes exigir productos con certificación de homologación que nos garantizan la calidad del producto.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_vendemos_cat`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_vendemos_cat`;
CREATE TABLE IF NOT EXISTS `cms_vendemos_cat` (
  `vendemos_cat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vendemos_cat_tit` varchar(80) NOT NULL,
  `vendemos_cat_con` text NOT NULL,
  `vendemos_cat_img` varchar(250) NOT NULL,
  PRIMARY KEY (`vendemos_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cms_vendemos_cat`
--

INSERT INTO `cms_vendemos_cat` (`vendemos_cat_id`, `vendemos_cat_tit`, `vendemos_cat_con`, `vendemos_cat_img`) VALUES
(1, 'Prueba ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria11359649368.jpg'),
(2, 'Categoria 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria21359649436.jpg'),
(3, 'Categoria 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria31359649477.jpg'),
(4, 'Categoria 4', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria41359649517.jpg'),
(5, 'Categoria 5', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria51359649744.jpg'),
(6, 'Categoria 6', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria61359649804.jpg'),
(7, 'Categoria 7', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria71359649864.jpg'),
(8, 'Categoria 8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria81359649901.jpg'),
(9, 'Categoria 9', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria91359649948.jpg'),
(10, 'Categoria 10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria101359649987.jpg'),
(11, 'Categoria 11', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria11359650032.jpg'),
(12, 'Categoria 12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria21359650067.jpg'),
(13, 'Categoria 13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria31359650113.jpg'),
(14, 'Categoria 14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'categoria41359650152.jpg'),
(15, 'P. plasticas', 'partes plasticas', '01251371746256.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_vendemos_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_vendemos_config`;
CREATE TABLE IF NOT EXISTS `cms_vendemos_config` (
  `vendemos_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `vendemos_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `vendemos_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`vendemos_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_vendemos_config`
--

INSERT INTO `cms_vendemos_config` (`vendemos_config_id`, `vendemos_config_funcionality`, `vendemos_config_date`) VALUES
(1, 2, '2013-01-21 11:52:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_vendemos_prod`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_vendemos_prod`;
CREATE TABLE IF NOT EXISTS `cms_vendemos_prod` (
  `vendemos_prod_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vendemos_prod_cat` int(11) unsigned NOT NULL,
  `vendemos_prod_tit` varchar(250) NOT NULL,
  `vendemos_prod_resum` text NOT NULL,
  `vendemos_prod_con` text NOT NULL,
  `vendemos_prod_carac` text NOT NULL,
  `vendemos_prod_nov` tinyint(2) NOT NULL DEFAULT '0',
  `vendemos_prod_prom` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vendemos_prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=408 ;

--
-- Volcado de datos para la tabla `cms_vendemos_prod`
--

INSERT INTO `cms_vendemos_prod` (`vendemos_prod_id`, `vendemos_prod_cat`, `vendemos_prod_tit`, `vendemos_prod_resum`, `vendemos_prod_con`, `vendemos_prod_carac`, `vendemos_prod_nov`, `vendemos_prod_prom`) VALUES
(1, 3, 'Producto 1-33', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(2, 3, 'Producto 5', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(3, 3, 'Producto 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(4, 3, 'Producto 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(5, 3, 'Producto 4', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(6, 6, 'Producto 6', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(7, 7, 'Producto 7', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(8, 8, 'Producto 8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(9, 9, 'Producto 9', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(10, 10, 'Producto 10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Etiam consectetur mollis justo, in fermentum tortor porttitor et. Proin fermentum feugiat turpis, elementum ornare mi fringilla ac. Nunc id nisi ac justo auctor faucibus. Aliquam fermentum mollis orci, sed mattis justo cursus ut. Etiam nisl odio, pellentesque ultrices tincidunt eu, rhoncus a nunc. Curabitur vitae tortor sed nunc facilisis feugiat. Duis ut arcu ligula. Sed tellus urna, feugiat sed venenatis quis, tincidunt sed diam. In hac habitasse platea dictumst. Etiam dictum mauris in dui interdum fringilla. Sed mattis fringilla pretium. Donec placerat ligula a lacus facilisis malesuada. Quisque dolor justo, luctus viverra fringilla eget, aliquet vel urna. Nulla ut massa pharetra nisi porttitor aliquam. Aliquam a justo lectus, vel vulputate massa. Phasellus pretium lacus ac elit interdum facilisis.', '<ul>\r\n<li> Item 1 </li>\r\n<li> Item 2 </li>\r\n</ul>', 1, 1),
(11, 1, 'Prueba', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<ul><li>Lorem ipsum dolor sit amet, consectetur adipisicing eli</li><li>Lorem ipsum dolor sit amet, consectetur adipisicing eli</li><li>Lorem ipsum dolor sit amet, consectetur adipisicing eli</li><li>Lorem ipsum dolor sit amet</li></ul>', 0, 0),
(12, 1, '01', '01', '01', '<ul><li>01</li></ul>', 0, 0),
(13, 1, 'mao', 'mao', 'mao', 'prueba mao	', 0, 0),
(14, 1, '1', '1', '1', '1', 0, 0),
(15, 1, '2', '2', '2', '2', 0, 0),
(16, 1, '02', '02', '02', '02', 0, 0),
(17, 1, '3', '3', '3', '3', 0, 0),
(18, 1, '03', '03', '03', '03', 0, 0),
(19, 1, '4', '4', '4', '4', 0, 0),
(20, 1, '04', '04', '04', '04', 0, 0),
(21, 1, '5', '5', '5', '5', 0, 0),
(22, 1, '05', '05', '05', '05', 0, 0),
(23, 1, '6', '6', '6', '6', 0, 0),
(24, 1, '06', '06', '06', '06', 0, 0),
(25, 1, '7', '7', '7', '7', 0, 0),
(26, 1, '07', '07', '07', '07', 0, 0),
(27, 1, '8', '8', '8', '8', 0, 0),
(28, 1, '08', '08', '08', '08', 0, 0),
(29, 1, '9', '9', '9', '9', 0, 0),
(30, 1, '09', '09', '09', '09', 0, 0),
(31, 1, '10', '10', '10', '10', 0, 0),
(32, 1, '010', '010', '010', '010', 0, 0),
(33, 1, '11', '11', '11', '11', 0, 0),
(34, 1, '011', '011', '011', '011', 0, 0),
(35, 1, '12', '12', '12', '12', 0, 0),
(36, 1, '012', '012', '012', '012', 0, 0),
(37, 1, '13', '13', '13', '13', 0, 0),
(38, 1, '013', '013', '013', '013', 0, 0),
(39, 1, '14', '14', '14', '14', 0, 0),
(40, 1, '014', '014', '014', '014', 0, 0),
(41, 1, '15', '15', '15', '15', 0, 0),
(42, 1, '015', '015', '015', '015', 0, 0),
(43, 1, '16', '16', '16', '16', 0, 0),
(44, 1, '016', '016', '016', '016', 0, 0),
(45, 1, '17', '17', '17', '17', 0, 0),
(46, 1, '017', '017', '017', '017', 0, 0),
(50, 15, 'pp', 'pp', 'pp', 'pp', 0, 0),
(53, 1, '18', '18', '18', '18', 0, 0),
(54, 1, '018', '018', '018', '018', 0, 0),
(55, 1, '19', '19', '19', '19', 0, 0),
(56, 1, '019', '019', '019', '019', 0, 0),
(57, 1, '20', '20', '20', '20', 0, 0),
(58, 1, '020', '020', '020', '020', 0, 0),
(59, 1, '21', '21', '21', '21', 0, 0),
(60, 1, '021', '021', '021', '021', 0, 0),
(61, 1, '22', '22', '22', '22', 0, 0),
(62, 1, '022', '022', '022', '022', 0, 0),
(63, 1, '23', '23', '23', '23', 0, 0),
(64, 1, '023', '023', '023', '023', 0, 0),
(65, 1, '24', '24', '24', '24', 0, 0),
(66, 1, '024', '024', '024', '024', 0, 0),
(67, 1, '024s', '024s', '024s', '024s', 0, 0),
(68, 1, '25', '25', '25', '25', 0, 0),
(69, 1, '025', '025', '025', '025', 0, 0),
(70, 1, '26', '26', '26', '26', 0, 0),
(71, 1, '026', '026', '026', '026', 0, 0),
(72, 1, '27', '27', '27', '27', 0, 0),
(73, 1, '027', '027', '027', '027', 0, 0),
(74, 1, '28', '28', '28', '28', 0, 0),
(75, 1, '028', '028', '028', '028', 0, 0),
(76, 1, '29', '29', '29', '29', 0, 0),
(77, 1, '029', '029', '029', '029', 0, 0),
(78, 1, '30', '30', '30', '30', 0, 0),
(79, 1, '030', '030', '030', '030', 0, 0),
(80, 1, '31', '31', '31', '31', 0, 0),
(81, 1, '031', '031', '031', '031', 0, 0),
(82, 1, '31s', '31s', '31s', '31s', 0, 0),
(83, 1, '32', '32', '32', '32', 0, 0),
(84, 1, '032', '032', '032', '032', 0, 0),
(85, 1, '33', '33', '33', '33', 0, 0),
(86, 1, '033', '033', '033', '033', 0, 0),
(87, 1, '34', '34', '34', '34', 0, 0),
(88, 1, '034', '034', '034', '034', 0, 0),
(89, 1, '35', '35', '35', '35', 0, 0),
(90, 1, '035', '035', '035', '035', 0, 0),
(91, 1, '36', '36', '36', '36', 0, 0),
(92, 1, '036', '036', '036', '036', 0, 0),
(93, 1, '37', '37', '37', '37', 0, 0),
(94, 1, '037', '037', '037', '037', 0, 0),
(95, 1, '38', '38', '38', '38', 0, 0),
(96, 1, '038', '038', '038', '038', 0, 0),
(97, 1, '39', '39', '39', '39', 0, 0),
(98, 1, '039', '039', '039', '039', 0, 0),
(99, 1, '40', '40', '40', '40', 0, 0),
(100, 1, '040', '040', '040', '040', 0, 0),
(101, 1, '41', '41', '41', '41', 0, 0),
(102, 1, '041', '041', '041', '041', 0, 0),
(104, 1, '42', '42', '42', '42', 0, 0),
(105, 1, '042', '042', '042', '042', 0, 0),
(106, 1, '43', '43', '43', '43', 0, 0),
(107, 1, '043', '043', '043', '043', 0, 0),
(108, 1, '44', '44', '44', '44', 0, 0),
(109, 1, '044', '044', '044', '044', 0, 0),
(110, 1, '45', '45', '45', '45', 0, 0),
(111, 1, '045', '045', '045', '045', 0, 0),
(112, 1, '46', '46', '46', '46', 0, 0),
(113, 1, '046', '046', '046', '046', 0, 0),
(114, 1, '47', '47', '47', '47', 0, 0),
(115, 1, '047', '047', '047', '047', 0, 0),
(116, 1, '48', '48', '48', '48', 0, 0),
(117, 1, '048', '048', '048', '048', 0, 0),
(118, 1, '49', '49', '49', '49', 0, 0),
(119, 1, '049', '049', '049', '049', 0, 0),
(120, 1, '50', '50', '50', '50', 0, 0),
(121, 1, '050', '050', '050', '050', 0, 0),
(122, 1, '51', '51', '51', '51', 0, 0),
(123, 1, '051', '051', '051', '051', 0, 0),
(124, 1, '52', '52', '52', '52', 0, 0),
(125, 1, '052', '052', '052', '052', 0, 0),
(126, 1, '53', '53', '53', '53', 0, 0),
(127, 1, '053', '053', '053', '053', 0, 0),
(128, 1, '54', '54', '54', '54', 0, 0),
(129, 1, '054', '054', '054', '054', 0, 0),
(130, 1, '55', '55', '55', '55', 0, 0),
(131, 1, '055', '055', '055', '055', 0, 0),
(132, 1, '56', '56', '56', '56', 0, 0),
(133, 1, '056', '056', '056', '056', 0, 0),
(134, 1, '57', '57', '57', '57', 0, 0),
(135, 1, '057', '057', '057', '057', 0, 0),
(136, 1, '58', '58', '58', '58', 0, 0),
(137, 1, '058', '058', '058', '058', 0, 0),
(138, 1, '59', '59', '59', '59', 0, 0),
(139, 1, '059', '059', '059', '059', 0, 0),
(140, 1, '60', '60', '60', '60', 0, 0),
(141, 1, '060', '060', '060', '060', 0, 0),
(142, 1, '61', '61', '61', '61', 0, 0),
(143, 1, '061', '061', '061', '061', 0, 0),
(144, 1, '62', '62', '62', '62', 0, 0),
(145, 1, '062', '062', '062', '062', 0, 0),
(146, 1, '63', '63', '63', '63', 0, 0),
(147, 1, '063', '063', '063', '063', 0, 0),
(148, 1, '64', '64', '64', '64', 0, 0),
(149, 1, '064', '064', '064', '064', 0, 0),
(150, 1, '65', '65', '65', '65', 0, 0),
(151, 1, '065', '065', '065', '065', 0, 0),
(152, 1, '66', '66', '66', '66', 0, 0),
(153, 1, '066', '066', '066', '066', 0, 0),
(154, 1, '067', '067', '067', '067', 0, 0),
(155, 1, '68', '68', '68', '68', 0, 0),
(156, 1, '068', '068', '068', '068', 0, 0),
(157, 1, '69', '69', '69', '69', 0, 0),
(158, 1, '069', '069', '069', '069', 0, 0),
(159, 1, '70', '70', '70', '70', 0, 0),
(160, 1, '070', '070', '070', '070', 0, 0),
(161, 1, '71', '71', '71', '71', 0, 0),
(162, 1, '071', '071', '071', '071', 0, 0),
(163, 1, '72', '72', '72', '72', 0, 0),
(164, 1, '072', '072', '072', '072', 0, 0),
(165, 1, '73', '73', '73', '73', 0, 0),
(166, 1, '073', '073', '073', '073', 0, 0),
(167, 1, '74', '74', '74', '74', 0, 0),
(168, 1, '074', '074', '074', '074', 0, 0),
(169, 1, '75', '75', '75', '75', 0, 0),
(170, 1, '075', '075', '075', '075', 0, 0),
(171, 1, '76', '76', '76', '76', 0, 0),
(172, 1, '076', '076', '076', '076', 0, 0),
(173, 1, '77', '77', '77', '77', 0, 0),
(174, 1, '077', '077', '077', '077', 0, 0),
(175, 1, '78', '78', '78', '78', 0, 0),
(176, 1, '078', '078', '078', '078', 0, 0),
(177, 1, '79', '79', '79', '79', 0, 0),
(178, 1, '079', '079', '079', '079', 0, 0),
(179, 1, '80', '80', '80', '80', 0, 0),
(180, 1, '080', '080', '080', '080', 0, 0),
(181, 1, '81', '81', '81', '81', 0, 0),
(182, 1, '081', '081', '081', '081', 0, 0),
(183, 1, '82', '82', '82', '82', 0, 0),
(184, 1, '082', '082', '082', '082', 0, 0),
(185, 1, '83', '83', '83', '83', 0, 0),
(186, 1, '083', '083', '083', '083', 0, 0),
(187, 1, '84', '84', '84', '84', 0, 0),
(188, 1, '084', '084', '084', '084', 0, 0),
(189, 1, '85', '85', '85', '85', 0, 0),
(190, 1, '085', '085', '085', '085', 0, 0),
(191, 1, '086', '086', '086', '086', 0, 0),
(192, 1, '87', '87', '87', '87', 0, 0),
(193, 1, '087', '087', '087', '087', 0, 0),
(194, 1, '88', '88', '88', '88', 0, 0),
(195, 1, '088', '088', '088', '088', 0, 0),
(196, 1, '89', '89', '89', '89', 0, 0),
(197, 1, '089', '089', '089', '089', 0, 0),
(198, 1, '90', '90', '90', '90', 0, 0),
(199, 1, '090', '090', '090', '090', 0, 0),
(200, 1, '91', '91', '91', '91', 0, 0),
(201, 1, '091', '091', '091', '091', 0, 0),
(202, 1, '92', '92', '92', '92', 0, 0),
(203, 1, '092', '092', '092', '092', 0, 0),
(204, 1, '93', '93', '93', '93', 0, 0),
(205, 1, '093', '093', '093', '093', 0, 0),
(206, 1, '94', '94', '94', '94', 0, 0),
(207, 1, '094', '094', '094', '094', 0, 0),
(208, 1, '95', '95', '95', '95', 0, 0),
(209, 1, '095', '095', '095', '095', 0, 0),
(210, 1, '96', '96', '96', '96', 0, 0),
(211, 1, '096', '096', '096', '096', 0, 0),
(212, 1, '97', '97', '97', '97', 0, 0),
(213, 1, '097', '097', '097', '097', 0, 0),
(214, 1, '98', '98', '98', '98', 0, 0),
(215, 1, '098', '098', '098', '098', 0, 0),
(216, 1, '99', '99', '99', '99', 0, 0),
(217, 1, '099', '099', '099', '099', 0, 0),
(218, 1, '100', '100', '100', '100', 0, 0),
(219, 1, '0100', '0100', '0100', '0100', 0, 0),
(220, 1, '101', '101', '101', '101', 0, 0),
(221, 1, '0101', '0101', '0101', '0101', 0, 0),
(222, 1, '102', '102', '102', '102', 0, 0),
(223, 1, '0102', '0102', '0102', '0102', 0, 0),
(224, 1, '103', '103', '103', '103', 0, 0),
(225, 1, '0103', '0103', '0103', '0103', 0, 0),
(226, 1, '104', '104', '104', '104', 0, 0),
(227, 1, '0104', '0104', '0104', '0104', 0, 0),
(228, 1, '105', '105', '105', '105', 0, 0),
(229, 1, '0105', '0105', '0105', '0105', 0, 0),
(230, 1, '106', '106', '106', '106', 0, 0),
(231, 1, '0106', '0106', '0106', '0106', 0, 0),
(232, 1, '107', '107', '107', '107', 0, 0),
(233, 1, '0107', '0107', '0107', '0107', 0, 0),
(234, 1, '108', '108', '108', '108', 0, 0),
(235, 1, '0108', '0108', '0108', '0108', 0, 0),
(236, 1, '109', '109', '109', '109', 0, 0),
(237, 1, '0109', '0109', '0109', '0109', 0, 0),
(238, 1, '110', '110', '110', '110', 0, 0),
(239, 1, '0110', '0110', '0110', '0110', 0, 0),
(240, 1, '111', '111', '111', '111', 0, 0),
(241, 1, '0111', '0111', '0111', '0111', 0, 0),
(242, 1, '112', '112', '112', '112', 0, 0),
(243, 1, '0112', '0112', '0112', '0112', 0, 0),
(244, 1, '113', '113', '113', '113', 0, 0),
(245, 1, '0113', '0113', '0113', '0113', 0, 0),
(246, 1, '114', '114', '114', '114', 0, 0),
(247, 1, '0114', '0114', '0114', '0114', 0, 0),
(248, 1, '115', '115', '115', '115', 0, 0),
(249, 1, '0115', '0115', '0115', '0115', 0, 0),
(250, 1, '116', '116', '116', '116', 0, 0),
(251, 1, '0116', '0116', '0116', '0116', 0, 0),
(252, 1, '117', '117', '117', '117', 0, 0),
(253, 1, '0117', '0117', '0117', '0117', 0, 0),
(254, 1, '118', '118', '118', '118', 0, 0),
(255, 1, '0118', '0118', '0118', '0118', 0, 0),
(256, 1, '119', '119', '119', '119', 0, 0),
(257, 1, '0119', '0119', '0119', '0119', 0, 0),
(258, 1, '120', '120', '120', '120', 0, 0),
(259, 1, '0120', '0120', '0120', '0120', 0, 0),
(260, 1, '121', '121', '121', '121', 0, 0),
(261, 1, '0121', '0121', '0121', '0121', 0, 0),
(262, 1, '122', '122', '122', '122', 0, 0),
(263, 1, '0122', '0122', '0122', '0122', 0, 0),
(264, 1, '123', '123', '123', '123', 0, 0),
(265, 1, '0123', '0123', '0123', '0123', 0, 0),
(266, 1, '124', '124', '124', '124', 0, 0),
(267, 1, '0124', '0124', '0124', '0124', 0, 0),
(268, 1, '125', '125', '125', '125', 0, 0),
(269, 1, '0125', '0125', '0125', '0125', 0, 0),
(270, 1, '126', '126', '126', '126', 0, 0),
(271, 1, '0126', '0126', '0126', '0126', 0, 0),
(272, 1, '127', '127', '127', '127', 0, 0),
(273, 1, '0127', '0127', '0127', '0127', 0, 0),
(274, 1, '128', '128', '128', '128', 0, 0),
(275, 1, '0128', '0128', '0128', '0128', 0, 0),
(276, 1, '129', '129', '129', '129', 0, 0),
(277, 1, '0129', '0129', '0129', '0129', 0, 0),
(278, 1, '130', '130', '130', '130', 0, 0),
(279, 1, '0130', '0130', '0130', '0130', 0, 0),
(280, 1, '131', '131', '131', '131', 0, 0),
(281, 1, '0131', '0131', '0131', '0131', 0, 0),
(282, 1, '132', '132', '132', '132', 0, 0),
(283, 1, '0132', '0132', '0132', '0132', 0, 0),
(284, 1, '133', '133', '133', '133', 0, 0),
(285, 1, '0133', '0133', '0133', '0133', 0, 0),
(286, 1, '134', '134', '134', '134', 0, 0),
(287, 1, '0134', '0134', '0134', '0134', 0, 0),
(288, 1, '135', '135', '135', '135', 0, 0),
(289, 1, '0135', '0135', '0135', '0135', 0, 0),
(290, 1, '136', '136', '136', '136', 0, 0),
(291, 1, '0136', '0136', '0136', '0136', 0, 0),
(292, 1, '137', '137', '137', '137', 0, 0),
(293, 1, '0137', '0137', '0137', '0137', 0, 0),
(294, 1, '138', '138', '138', '138', 0, 0),
(295, 1, '0138', '0138', '0138', '0138', 0, 0),
(296, 1, '139', '139', '139', '139', 0, 0),
(297, 1, '0139', '0139', '0139', '0139', 0, 0),
(298, 1, '140', '140', '140', '140', 0, 0),
(299, 1, '0140', '0140', '0140', '0140', 0, 0),
(300, 1, '141', '141', '141', '141', 0, 0),
(301, 1, '0141', '0141', '0141', '0141', 0, 0),
(302, 1, '142', '142', '142', '142', 0, 0),
(303, 1, '0142', '0142', '0142', '0142', 0, 0),
(304, 1, '143', '143', '143', '143', 0, 0),
(305, 1, '0143', '0143', '0143', '0143', 0, 0),
(306, 1, '144', '144', '144', '144', 0, 0),
(307, 1, '0144', '0144', '0144', '0144', 0, 0),
(308, 1, '145', '145', '145', '145', 0, 0),
(309, 1, '0145', '0145', '0145', '0145', 0, 0),
(310, 1, '146', '146', '146', '146', 0, 0),
(311, 1, '0146', '0146', '0146', '0146', 0, 0),
(312, 1, '147', '147', '147', '147', 0, 0),
(313, 1, '0147', '0147', '0147', '0147', 0, 0),
(314, 1, '148', '148', '148', '148', 0, 0),
(315, 1, '0148', '0148', '0148', '0148', 0, 0),
(316, 1, '149', '149', '149', '149', 0, 0),
(317, 1, '0149', '0149', '0149', '0149', 0, 0),
(318, 1, '150', '150', '150', '150', 0, 0),
(319, 1, '0150', '0150', '0150', '0150', 0, 0),
(320, 1, '151', '151', '151', '151', 0, 0),
(321, 1, '0151', '0151', '0151', '0151', 0, 0),
(322, 1, '152', '152', '152', '152', 0, 0),
(323, 1, '0152', '0152', '0152', '0152', 0, 0),
(324, 1, '153', '153', '153', '153', 0, 0),
(325, 1, '0153', '0153', '0153', '0153', 0, 0),
(326, 1, '154', '154', '154', '154', 0, 0),
(327, 1, '0154', '0154', '0154', '0154', 0, 0),
(328, 1, '155', '155', '155', '155', 0, 0),
(329, 1, '0155', '0155', '0155', '0155', 0, 0),
(330, 1, '156', '156', '156', '156', 0, 0),
(331, 1, '0156', '0156', '0156', '0156', 0, 0),
(332, 1, '157', '157', '157', '157', 0, 0),
(333, 1, '0157', '0157', '0157', '0157', 0, 0),
(334, 1, '158', '158', '158', '158', 0, 0),
(335, 1, '0158', '0158', '0158', '0158', 0, 0),
(336, 1, '159', '159', '159', '159', 0, 0),
(337, 1, '0159', '0159', '0159', '0159', 0, 0),
(338, 1, '0160', '0160', '0160', '0160', 0, 0),
(339, 1, '0161', '0161', '0161', '0161', 0, 0),
(340, 1, '0162', '0162', '0162', '0162', 0, 0),
(341, 1, '0163', '0163', '0163', '0163', 0, 0),
(342, 1, '0164', '0164', '0164', '0164', 0, 0),
(343, 1, '0165', '0165', '0165', '0165', 0, 0),
(344, 1, '0166', '0166', '0166', '0166', 0, 0),
(345, 1, '0167', '0167', '0167', '0167', 0, 0),
(346, 1, '0169', '0169', '0169', '0169', 0, 0),
(347, 1, '0170', '0170', '0170', '0170', 0, 0),
(348, 1, '0172', '0172', '0172', '0172', 0, 0),
(349, 1, '0173', '0173', '0173', '0173', 0, 0),
(350, 1, '0174', '0174', '0174', '0174', 0, 0),
(351, 1, '0175', '0175', '0175', '0175', 0, 0),
(352, 1, '0176', '0176', '0176', '0176', 0, 0),
(353, 1, '0177', '0177', '0177', '0177', 0, 0),
(354, 1, '0178', '0178', '0178', '0178', 0, 0),
(355, 1, '0179', '0179', '0179', '0179', 0, 0),
(356, 1, '0180', '0180', '0180', '0180', 0, 0),
(357, 1, '0181', '0181', '0181', '0181', 0, 0),
(358, 1, '0182', '0182', '0182', '0182', 0, 0),
(359, 1, '0183', '0183', '0183', '0183', 0, 0),
(360, 1, '0184', '0184', '0184', '0184', 0, 0),
(361, 1, '0185', '0185', '0185', '0185', 0, 0),
(362, 1, '0186', '0186', '0186', '0186', 0, 0),
(363, 1, '0187', '0187', '0187', '0187', 0, 0),
(364, 1, '0188', '0188', '0188', '0188', 0, 0),
(365, 1, '0189', '0189', '0189', '0189', 0, 0),
(366, 1, '0190', '0190', '0190', '0190', 0, 0),
(367, 1, '0191', '0191', '0191', '0191', 0, 0),
(368, 1, '0192', '0192', '0192', '0192', 0, 0),
(369, 1, '0193', '0193', '0193', '0193', 0, 0),
(370, 1, '0194', '0194', '0194', '0194', 0, 0),
(371, 1, '0195', '0195', '0195', '0195', 0, 0),
(372, 1, '0196', '0196', '0196', '0196', 0, 0),
(373, 1, '0197', '0197', '0197', '0197', 0, 0),
(374, 1, '0198', '0198', '0198', '0198', 0, 0),
(375, 1, '0199', '0199', '0199', '0199', 0, 0),
(376, 1, '0200', '0200', '0200', '0200', 0, 0),
(377, 1, '0201', '0201', '0201', '0201', 0, 0),
(378, 1, '0202', '0202', '0202', '0202', 0, 0),
(379, 1, '0203', '0203', '0203', '0203', 0, 0),
(380, 1, '0204', '0204', '0204', '0204', 0, 0),
(381, 1, '0205', '0205', '0205', '0205', 0, 0),
(382, 1, 'd1', 'd1', 'd1', 'd1', 0, 0),
(383, 1, 'd2', 'd2', 'd2', 'd2', 0, 0),
(384, 1, 'd3', 'd3', 'd3', 'd3', 0, 0),
(385, 1, 'd4', 'd4', 'd4', 'd4', 0, 0),
(386, 1, 'd5', 'd5', 'd5', 'd5', 0, 0),
(387, 1, 'd6', 'd6', 'd6', 'd6', 0, 0),
(388, 1, 'd7', 'd7', 'd7', 'd7', 0, 0),
(389, 1, 'd8', 'd8', 'd8', 'd8', 0, 0),
(390, 1, 'd9', 'd9', 'd9', 'd9', 0, 0),
(391, 1, 'd10', 'd10', 'd10', 'd10', 0, 0),
(392, 1, 'd11', 'd11', 'd11', 'd11', 0, 0),
(393, 1, 'd12', 'd12', 'd12', 'd12', 0, 0),
(394, 1, 'd13', 'd13', 'd13', 'd13', 0, 0),
(395, 1, 'd14', 'd14', 'd14', 'd14', 0, 0),
(396, 1, 'd15', 'd15', 'd15', 'd15', 0, 0),
(397, 1, 'd16', 'd16', 'd16', 'd16', 0, 0),
(398, 1, 'd17', 'd17', 'd17', 'd17', 0, 0),
(399, 1, 'd18', 'd18', 'd18', 'd18', 0, 0),
(400, 1, 'd19', 'd19', 'd19', 'd19', 0, 0),
(401, 1, 'd20', 'd20', 'd20', 'd20', 0, 0),
(402, 1, 'd21', 'd21', 'd21', 'd21', 0, 0),
(403, 1, 'd22', 'd22', 'd22', 'd22', 0, 0),
(404, 1, 'd23', 'd23', 'd23', 'd23', 0, 0),
(405, 1, 'd24', 'd24', 'd24', 'd24', 0, 0),
(406, 1, 'd25', 'd25', 'd25', 'd25', 0, 0),
(407, 1, 'd26', 'd26', 'd26', 'd26', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_vendemos_prodimg`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_vendemos_prodimg`;
CREATE TABLE IF NOT EXISTS `cms_vendemos_prodimg` (
  `vendemos_prodimg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vendemos_prodimg_prod` int(11) unsigned NOT NULL,
  `vendemos_prodimg_img` varchar(250) NOT NULL,
  PRIMARY KEY (`vendemos_prodimg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=481 ;

--
-- Volcado de datos para la tabla `cms_vendemos_prodimg`
--

INSERT INTO `cms_vendemos_prodimg` (`vendemos_prodimg_id`, `vendemos_prodimg_prod`, `vendemos_prodimg_img`) VALUES
(1, 1, 'producto1_b1359999013.jpg'),
(2, 1, 'producto2_b1359999014.jpg'),
(3, 1, 'producto3_b1359999015.jpg'),
(4, 1, 'producto4_b1359999017.jpg'),
(5, 2, 'producto1_b1360013766.jpg'),
(6, 2, 'producto2_b1360013767.jpg'),
(7, 3, 'producto1_b1360063803.jpg'),
(8, 3, 'producto2_b1360063804.jpg'),
(9, 4, 'producto3_b1360063843.jpg'),
(10, 4, 'producto4_b1360063844.jpg'),
(11, 5, 'producto2_b1360063900.jpg'),
(12, 5, 'producto3_b1360063901.jpg'),
(13, 6, 'producto2_b1360063945.jpg'),
(14, 6, 'producto1_b1360063947.jpg'),
(15, 7, 'producto1_b1360063983.jpg'),
(16, 7, 'producto4_b1360063984.jpg'),
(17, 8, 'producto4_b1360064020.jpg'),
(18, 8, 'producto2_b1360064021.jpg'),
(19, 9, 'producto3_b1360064065.jpg'),
(20, 9, 'producto4_b1360064066.jpg'),
(21, 10, 'producto4_b1360064107.jpg'),
(22, 10, 'producto2_b1360064107.jpg'),
(23, 2, 'producto3_b1359999015.jpg'),
(24, 2, 'producto4_b1359999017.jpg'),
(25, 3, 'producto3_b1359999015.jpg'),
(26, 3, 'producto4_b1359999017.jpg'),
(27, 4, 'producto3_b1359999015.jpg'),
(28, 4, 'producto4_b1359999017.jpg'),
(29, 5, 'producto3_b1359999015.jpg'),
(30, 5, 'producto4_b1359999017.jpg'),
(31, 6, 'producto3_b1359999015.jpg'),
(32, 6, 'producto4_b1359999017.jpg'),
(33, 7, 'producto3_b1359999015.jpg'),
(34, 7, 'producto4_b1359999017.jpg'),
(35, 8, 'producto3_b1359999015.jpg'),
(36, 8, ' producto4_b1359999017.jpg'),
(37, 9, 'producto3_b1359999015.jpg'),
(38, 9, 'producto4_b1359999017.jpg'),
(39, 10, 'producto4_b1359999017.jpg'),
(40, 10, 'producto4_b1359999017.jpg'),
(41, 11, 'Chrysanthemum1364413024.jpg'),
(43, 13, '21364413613.jpg'),
(44, 11, 'Desert1364416833.jpg'),
(45, 11, 'Hydrangeas1364416841.jpg'),
(46, 11, 'Jellyfish1364416848.jpg'),
(47, 11, 'Koala1364416856.jpg'),
(48, 14, '11371744344.jpg'),
(49, 12, '011371744454.jpg'),
(50, 15, '21371744491.jpg'),
(51, 16, '021371744556.jpg'),
(52, 17, '31371744592.jpg'),
(53, 18, '031371744664.jpg'),
(54, 18, '03s1371744670.jpg'),
(55, 19, '41371744752.jpg'),
(56, 20, '041371744783.jpg'),
(57, 21, '51371744825.jpg'),
(58, 22, '051371744853.jpg'),
(59, 23, '61371744881.jpg'),
(60, 24, '061371744936.jpg'),
(61, 25, '71371744987.jpg'),
(62, 26, '071371745032.jpg'),
(63, 27, '81371745070.jpg'),
(64, 28, '081371745105.jpg'),
(65, 29, '91371745145.jpg'),
(66, 30, '091371745182.jpg'),
(67, 31, '101371745215.jpg'),
(68, 32, '0101371745246.jpg'),
(69, 33, '111371745279.jpg'),
(70, 34, '0111371745315.jpg'),
(71, 35, '121371745342.jpg'),
(72, 36, '0121371745375.jpg'),
(73, 37, '131371745443.jpg'),
(74, 38, '0131371745472.jpg'),
(75, 39, '141371745508.jpg'),
(76, 40, '0141371745541.jpg'),
(77, 41, '151371745583.jpg'),
(78, 42, '0151371745624.jpg'),
(79, 43, '161371745651.jpg'),
(80, 44, '0161371745696.jpg'),
(81, 45, '171371745724.jpg'),
(82, 46, '0171371745754.jpg'),
(83, 47, '031371748679.jpg'),
(84, 47, '03s1371748685.jpg'),
(85, 47, '061371748691.jpg'),
(86, 47, '071371748697.jpg'),
(87, 47, '081371748702.jpg'),
(88, 48, '031371748913.jpg'),
(89, 48, '03s1371748919.jpg'),
(90, 48, '061371748924.jpg'),
(91, 48, '071371748930.jpg'),
(92, 48, '081371748935.jpg'),
(93, 49, '091371748998.jpg'),
(94, 49, '0231371749002.jpg'),
(95, 49, '0241371749005.jpg'),
(96, 49, '0251371749009.jpg'),
(97, 49, '0261371749015.jpg'),
(98, 50, '0271371749153.jpg'),
(99, 50, '0881371749157.jpg'),
(100, 50, '1001371749163.jpg'),
(101, 50, '1011371749229.jpg'),
(102, 50, '01181371749238.jpg'),
(103, 51, '01201371749299.jpg'),
(104, 51, '1221371749304.jpg'),
(105, 51, '01221371749365.jpg'),
(106, 51, '1231371749394.jpg'),
(107, 51, '01231371749414.jpg'),
(108, 52, '1241371749452.jpg'),
(109, 52, '01241371749458.jpg'),
(110, 52, '01251371749464.jpg'),
(111, 52, '1261371749470.jpg'),
(112, 52, '01261371749476.jpg'),
(113, 53, '181371750663.jpg'),
(114, 54, '0181371750697.jpg'),
(115, 55, '191371750735.jpg'),
(116, 56, '0191371750769.jpg'),
(117, 57, '201371750803.jpg'),
(118, 58, '0201371750835.jpg'),
(119, 59, '211371750870.jpg'),
(120, 60, '0211371750901.jpg'),
(121, 61, '221371750935.jpg'),
(122, 62, '0221371750972.jpg'),
(123, 63, '231371751007.jpg'),
(124, 64, '0231371751048.jpg'),
(125, 65, '241371751079.jpg'),
(126, 66, '0241371751115.jpg'),
(127, 67, '24s1371751150.jpg'),
(128, 68, '251371751196.jpg'),
(129, 69, '0251371751236.jpg'),
(130, 70, '261371751266.jpg'),
(131, 71, '0261371751303.jpg'),
(132, 72, '271371751336.jpg'),
(133, 73, '0271371751370.jpg'),
(134, 74, '281371751406.jpg'),
(135, 75, '0281371751435.jpg'),
(136, 76, '291371751478.jpg'),
(137, 77, '0291371751512.jpg'),
(138, 78, '301371751546.jpg'),
(139, 79, '0301371751597.jpg'),
(140, 80, '311371751632.jpg'),
(141, 81, '0311371751664.jpg'),
(142, 82, '31s1371752000.jpg'),
(143, 83, '321371752031.jpg'),
(144, 84, '0321371752070.jpg'),
(145, 85, '331371752124.jpg'),
(146, 86, '0331371752156.jpg'),
(147, 87, '341371752185.jpg'),
(148, 88, '0341371752212.jpg'),
(149, 89, '351371752245.jpg'),
(150, 90, '0351371752278.jpg'),
(151, 91, '361371752312.jpg'),
(152, 92, '0361371752345.jpg'),
(153, 93, '371371752382.jpg'),
(154, 94, '0371371752420.jpg'),
(155, 95, '381371752459.jpg'),
(156, 96, '0381371752492.jpg'),
(157, 97, '391371752527.jpg'),
(158, 98, '0391371752563.jpg'),
(159, 99, '401371752593.jpg'),
(160, 100, '0401371752634.jpg'),
(161, 101, '411371752667.jpg'),
(162, 102, '0411371752699.jpg'),
(163, 103, '041s1371752730.jpg'),
(164, 104, '421371752770.jpg'),
(165, 102, '041s1371752823.jpg'),
(166, 102, '0411371752826.jpg'),
(167, 105, '0421371752896.jpg'),
(168, 106, '431371752933.jpg'),
(169, 107, '0431371752966.jpg'),
(170, 108, '441371753005.jpg'),
(171, 109, '0441371753035.jpg'),
(172, 110, '451371753095.jpg'),
(173, 111, '0451371753134.jpg'),
(174, 112, '461371753168.jpg'),
(175, 113, '0461371753205.jpg'),
(176, 114, '471371753242.jpg'),
(179, 116, '481371753396.jpg'),
(180, 117, '0481371753433.jpg'),
(181, 118, '491371753471.jpg'),
(182, 119, '0491371753515.jpg'),
(183, 120, '501371753546.jpg'),
(184, 121, '0501371753588.jpg'),
(185, 115, '0471371753639.jpg'),
(186, 122, '511371753678.jpg'),
(187, 123, '0511371753720.jpg'),
(188, 124, '521371753754.jpg'),
(189, 125, '0521371753785.jpg'),
(190, 126, '531371753822.jpg'),
(191, 127, '0531371753852.jpg'),
(192, 128, '541371753886.jpg'),
(193, 129, '0541371753923.jpg'),
(194, 130, '551371753953.jpg'),
(195, 131, '0551371753997.jpg'),
(196, 132, '561371754647.jpg'),
(197, 133, '0561371754679.jpg'),
(198, 134, '571371754728.jpg'),
(199, 135, '0571371754757.jpg'),
(200, 136, '581371754790.jpg'),
(201, 137, '0581371754825.jpg'),
(202, 138, '591371754865.jpg'),
(203, 139, '0591371754896.jpg'),
(204, 140, '601371754930.jpg'),
(205, 141, '0601371754969.jpg'),
(206, 142, '611371757323.jpg'),
(207, 143, '0611371757397.jpg'),
(208, 144, '621371757429.jpg'),
(209, 145, '0621371757464.jpg'),
(210, 146, '631371757498.jpg'),
(211, 147, '0631371757533.jpg'),
(212, 148, '641371757568.jpg'),
(213, 149, '0641371757615.jpg'),
(214, 148, '64s1371757648.jpg'),
(215, 150, '651371757707.jpg'),
(216, 150, '65s1371757712.jpg'),
(217, 151, '0651371757773.jpg'),
(218, 152, '661371757860.jpg'),
(219, 153, '0661371757890.jpg'),
(220, 154, '0671371758061.jpg'),
(221, 155, '681371758100.jpg'),
(222, 156, '0681371758137.jpg'),
(223, 157, '691371758174.jpg'),
(224, 158, '0691371758204.jpg'),
(225, 159, '701371758238.jpg'),
(226, 160, '0701371758275.jpg'),
(227, 161, '711371758319.jpg'),
(228, 162, '0711371758377.jpg'),
(229, 163, '721371758410.jpg'),
(230, 164, '0721371758461.jpg'),
(231, 165, '731371758498.jpg'),
(232, 166, '0731371758532.jpg'),
(233, 167, '741371758567.jpg'),
(234, 168, '0741371758600.jpg'),
(235, 169, '751371758635.jpg'),
(236, 170, '0751371758669.jpg'),
(237, 171, '761371758700.jpg'),
(238, 172, '0761371758732.jpg'),
(239, 173, '771371758766.jpg'),
(240, 174, '0771371758799.jpg'),
(241, 175, '781371758834.jpg'),
(242, 176, '0781371758870.jpg'),
(243, 177, '791371758904.jpg'),
(244, 178, '0791371758936.jpg'),
(245, 179, '801371758972.jpg'),
(246, 180, '0801371759009.jpg'),
(247, 181, '811371759044.jpg'),
(248, 182, '0811371759078.jpg'),
(249, 183, '821371759123.jpg'),
(250, 184, '0821371759165.jpg'),
(251, 184, '082s1371759168.jpg'),
(252, 185, '831371759211.jpg'),
(253, 186, '0831371759285.jpg'),
(254, 187, '841371759316.jpg'),
(255, 188, '0841371759353.jpg'),
(257, 189, '851371759574.jpg'),
(258, 190, '0851371759607.jpg'),
(259, 191, '0861371759656.jpg'),
(260, 192, '871371759756.jpg'),
(261, 193, '0871371759791.jpg'),
(262, 194, '881371759822.jpg'),
(263, 195, '0881371759859.jpg'),
(264, 196, '891371759893.jpg'),
(265, 197, '0891371759941.jpg'),
(266, 198, '901371759973.jpg'),
(267, 199, '0901371760000.jpg'),
(268, 200, '911371761718.jpg'),
(269, 201, '0911371761750.jpg'),
(270, 202, '921371761785.jpg'),
(271, 203, '0921371761821.jpg'),
(272, 204, '931371761856.jpg'),
(273, 205, '0931371761906.jpg'),
(274, 206, '941371761943.jpg'),
(275, 207, '0941371761991.jpg'),
(276, 208, '951371762030.jpg'),
(277, 209, '0951371762068.jpg'),
(278, 210, '961371762114.jpg'),
(279, 211, '0961371762149.jpg'),
(280, 212, '971371762187.jpg'),
(281, 213, '0971371762221.jpg'),
(282, 214, '981371762275.jpg'),
(283, 215, '0981371762307.jpg'),
(284, 216, '991371762339.jpg'),
(285, 217, '0991371762368.jpg'),
(286, 218, '1001371762419.jpg'),
(287, 219, '01001371762465.jpg'),
(288, 220, '1011371784968.jpg'),
(289, 221, '01011371785282.jpg'),
(290, 222, '1021371785396.jpg'),
(291, 223, '01021371785452.jpg'),
(292, 224, '1031371785499.jpg'),
(293, 225, '01031371785546.jpg'),
(294, 226, '1041371785588.jpg'),
(295, 227, '01041371785644.jpg'),
(296, 228, '1051371785689.jpg'),
(297, 229, '01051371785739.jpg'),
(298, 230, '1061371785776.jpg'),
(299, 231, '01061371785822.jpg'),
(300, 232, '1071371785889.jpg'),
(301, 233, '01071371785932.jpg'),
(302, 234, '1081371785974.jpg'),
(303, 235, '01081371786062.jpg'),
(304, 236, '1091371786119.jpg'),
(305, 237, '01091371786292.jpg'),
(306, 238, '1101371786342.jpg'),
(307, 239, '01101371786485.jpg'),
(308, 240, '1111371786609.jpg'),
(309, 241, '01111371786683.jpg'),
(310, 242, '1121371786728.jpg'),
(311, 243, '01121371786829.jpg'),
(312, 244, '1131371786906.jpg'),
(313, 245, '01131371786949.jpg'),
(314, 246, '1141371787077.jpg'),
(315, 247, '01041371787126.jpg'),
(316, 248, '1151371787181.jpg'),
(317, 249, '01151371787294.jpg'),
(318, 249, '0115s1371787308.jpg'),
(319, 250, '1161371787506.jpg'),
(320, 251, '01161371789223.jpg'),
(321, 252, '1171371789267.jpg'),
(322, 253, '01171371789343.jpg'),
(323, 254, '1181371789388.jpg'),
(324, 255, '01181371789430.jpg'),
(325, 256, '1191371789473.jpg'),
(326, 257, '01191371789513.jpg'),
(327, 258, '1201371789599.jpg'),
(328, 259, '01201371789644.jpg'),
(329, 260, '1211371789690.jpg'),
(330, 261, '01211371789753.jpg'),
(331, 262, '1221371789857.jpg'),
(332, 263, '01221371790228.jpg'),
(333, 264, '1231371790277.jpg'),
(334, 265, '01231371790332.jpg'),
(335, 266, '1241371790396.jpg'),
(336, 267, '01241371791265.jpg'),
(337, 268, '1251371791307.jpg'),
(338, 269, '01251371791345.jpg'),
(339, 270, '1261371827925.jpg'),
(340, 271, '01261371827972.jpg'),
(341, 272, '1271371828047.jpg'),
(342, 273, '01271371828113.jpg'),
(343, 274, '1281371828158.jpg'),
(344, 275, '01281371828209.jpg'),
(345, 276, '1291371828267.jpg'),
(346, 277, '01291371828339.jpg'),
(347, 278, '1301371828389.jpg'),
(348, 279, '01301371828435.jpg'),
(349, 280, '1311371828480.jpg'),
(350, 281, '01311371828519.jpg'),
(351, 282, '1321371828563.jpg'),
(352, 283, '01321371828606.jpg'),
(353, 284, '1331371828648.jpg'),
(354, 285, '01331371828694.jpg'),
(355, 286, '1341371828744.jpg'),
(356, 287, '01341371828793.jpg'),
(357, 288, '1351371828914.jpg'),
(358, 289, '01351371828951.jpg'),
(359, 290, '1361371828995.jpg'),
(360, 291, '01361371829073.jpg'),
(361, 292, '1371371829265.jpg'),
(362, 293, '01371371829306.jpg'),
(363, 294, '1381371830104.jpg'),
(364, 295, '01381371830174.jpg'),
(365, 296, '1391371830249.jpg'),
(366, 297, '01391371830292.jpg'),
(367, 298, '1401371830379.jpg'),
(368, 299, '01401371830507.jpg'),
(369, 300, '1411371830578.jpg'),
(370, 301, '01411371830624.jpg'),
(371, 302, '1421371830694.jpg'),
(372, 303, '01421371830745.jpg'),
(373, 304, '1431371830871.jpg'),
(374, 305, '01431371830919.jpg'),
(375, 306, '1441371830967.jpg'),
(376, 307, '01441371831030.jpg'),
(377, 308, '1451371831081.jpg'),
(378, 309, '01451371831128.jpg'),
(379, 310, '1461371831197.jpg'),
(380, 311, '01461371831249.jpg'),
(381, 312, '1471371831293.jpg'),
(382, 313, '01471371831358.jpg'),
(383, 314, '1481371831462.jpg'),
(384, 315, '01481371833062.jpg'),
(385, 316, '1491371833128.jpg'),
(386, 317, '01491371833176.jpg'),
(387, 318, '1501371833214.jpg'),
(388, 319, '01501371833254.jpg'),
(389, 320, '1511371833291.jpg'),
(390, 321, '01511371833327.jpg'),
(391, 322, '1521371833370.jpg'),
(392, 323, '01521371833401.jpg'),
(393, 324, '1531371833544.jpg'),
(394, 325, '01531371833590.jpg'),
(395, 326, '1541371833631.jpg'),
(396, 327, '01541371833715.jpg'),
(397, 328, '1551371833753.jpg'),
(398, 329, '01551371833798.jpg'),
(399, 330, '1561371833857.jpg'),
(400, 331, '01561371833901.jpg'),
(401, 332, '1571371833954.jpg'),
(402, 333, '01571371833993.jpg'),
(403, 334, '1581371834039.jpg'),
(404, 335, '01581371834078.jpg'),
(405, 336, '1591371834111.jpg'),
(406, 337, '01591371834159.jpg'),
(407, 338, '01601371834310.jpg'),
(408, 339, '01611371834359.jpg'),
(409, 340, '01621371834394.jpg'),
(410, 341, '01631371834433.jpg'),
(411, 342, '01641371834472.jpg'),
(412, 343, '01651371834516.jpg'),
(413, 344, '01661371834657.jpg'),
(414, 345, '01671371834720.jpg'),
(415, 345, '01681371834733.jpg'),
(416, 346, '01691371834790.jpg'),
(417, 347, '01701371834830.jpg'),
(418, 347, '01711371834840.jpg'),
(419, 348, '01721371834888.jpg'),
(420, 349, '01731371834927.jpg'),
(421, 350, '01741371834977.jpg'),
(422, 351, '01751371835026.jpg'),
(423, 352, '01761371835258.jpg'),
(424, 353, '01771371835290.jpg'),
(425, 354, '01781371835354.jpg'),
(426, 355, '01791371835451.jpg'),
(427, 356, '01801371835493.jpg'),
(428, 357, '01811371835534.jpg'),
(429, 358, '01821371835603.jpg'),
(430, 359, '01831371835652.jpg'),
(431, 360, '01841371836702.jpg'),
(432, 361, '01851371836742.jpg'),
(433, 362, '01861371836786.jpg'),
(434, 363, '01871371836823.jpg'),
(435, 364, '01881371836864.jpg'),
(436, 365, '01891371836901.jpg'),
(437, 366, '01901371836949.jpg'),
(438, 367, '01911371836983.jpg'),
(439, 368, '01921371837016.jpg'),
(440, 369, '01931371837049.jpg'),
(441, 370, '01941371837085.jpg'),
(442, 371, '01951371837125.jpg'),
(443, 372, '01961371837158.jpg'),
(444, 373, '01971371837197.jpg'),
(445, 374, '01981371837250.jpg'),
(446, 375, '01991371837289.jpg'),
(447, 376, '02001371837334.jpg'),
(448, 376, '0200S1371837344.jpg'),
(449, 377, '02011371837382.jpg'),
(450, 378, '02021371837412.jpg'),
(451, 379, '02031371837444.jpg'),
(452, 380, '02041371837477.jpg'),
(453, 381, '02051371837540.jpg'),
(454, 382, '11371837595.jpg'),
(455, 383, '21371837627.jpg'),
(456, 384, '31371837657.jpg'),
(457, 385, '41371837682.jpg'),
(458, 386, '51371837717.jpg'),
(459, 387, '61371837748.jpg'),
(460, 388, '71371838162.jpg'),
(461, 389, '81371838194.jpg'),
(462, 390, '91371838232.jpg'),
(463, 391, '101371838270.jpg'),
(464, 392, '111371838303.jpg'),
(465, 393, '121371838337.jpg'),
(466, 394, '131371838369.jpg'),
(467, 395, '141371838400.jpg'),
(468, 396, '151371838488.jpg'),
(469, 397, '161371838526.jpg'),
(470, 398, '171371838562.jpg'),
(471, 399, '181371838596.jpg'),
(472, 400, '191371838630.jpg'),
(473, 401, '201371838752.jpg'),
(474, 402, '211371838784.jpg'),
(475, 403, '221371838832.jpg'),
(476, 402, '21s1371838860.jpg'),
(477, 404, '231371838903.jpg'),
(478, 405, '241371838939.jpg'),
(479, 406, '251371838967.jpg'),
(480, 407, '261371839011.jpg');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
