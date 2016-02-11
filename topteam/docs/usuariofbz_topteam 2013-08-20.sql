-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2013 a las 10:00:18
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
-- Base de datos: `usuariofbz_topteam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_aliados`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_aliados`;
CREATE TABLE IF NOT EXISTS `cms_aliados` (
  `aliados_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliados_titulo` varchar(80) DEFAULT NULL COMMENT 'Titulo',
  `aliados_url` varchar(250) DEFAULT NULL COMMENT 'URL Aliado',
  `aliados_image` varchar(250) DEFAULT NULL COMMENT 'Imagen',
  PRIMARY KEY (`aliados_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `cms_aliados`
--

INSERT INTO `cms_aliados` (`aliados_id`, `aliados_titulo`, `aliados_url`, `aliados_image`) VALUES
(2, 'Iberocaribe', 'www.google.com', 'iberocaribe1362425518.png'),
(3, 'Houston&acute;s American Restaurant', 'www.google.com', 'Houstons1362425482.png'),
(5, 'Guess', 'www.google.com', 'guess1362425396.png'),
(6, 'Club Colombo Liban&eacute;s', 'www.google.com', 'cub colombo libanes1362425328.png'),
(11, 'Leasing Bol&iacute;var', 'www.google.com', 'Bolivar1362425130.png'),
(12, 'Bershka', 'www.google.com', 'Bershka1362425094.png'),
(13, 'adc', 'www.google.com', 'adc1362425031.png'),
(14, 'Legis', 'http://google.com', 'legis1362425560.png'),
(16, 'Mister Lee', 'http://google.com', 'mister lee1362425610.png'),
(17, 'Mister Ribs', 'http://google.com', 'mister ribs1362425642.png'),
(26, 'Hotel Factory Inn', 'www.google.com', 'images1362620163.jpg'),
(29, 'Hotel Cosmos Insignia', 'www.google.com', 'Insignia1362621786.png'),
(30, 'Hotel Cosmos 100', 'www.google.com', 'cosmos1001362621828.jpg'),
(31, 'Hotel Casa Medina', 'www.google.com', 'Charleston casa medina1362621867.png'),
(32, 'Hotel Charleston', 'www.google.com', 'Charleston logo1362621903.png'),
(33, 'Club Atheneum', 'www.google.com', 'Atheneum1362622064.jpg'),
(34, 'Serrezuela Country Club', 'www.google.com', 'Serrezuela Country1362624340.jpg'),
(35, 'Club El Nogal', 'www.google.com', 'Nogal1362622881.png'),
(40, 'Uniandinos', 'www.google.com', 'uniandinos1362623370.jpg'),
(41, 'Cl&iacute;nica Reina Sof&iacute;a', 'www.google.com', 'CLINICA REINA SOFIA1362623423.jpg'),
(42, 'Colegio San Mateo Apostol', 'www.google.com', 'san mateo1362623496.png'),
(43, 'TAG Heuer', 'www.google.com', 'TAG1362623555.jpg'),
(44, 'ThyssenKrupp', 'www.google.com', 'Thyssen1362623624.jpg'),
(45, 'Universidad Libre', 'www.google.com', 'Universidad Libre1362624204.jpg'),
(46, 'Tiendas ZARA', 'www.google.com', 'ZARA1362623924.jpg'),
(47, 'Hotel Bogot&aacute; Royal', 'www.google.com', 'Bogota Royal1363920907.jpg'),
(48, 'Tiendas XUSS', 'www.google.com', 'Xuss1363921031.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_aliadosimgindex`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_aliadosimgindex`;
CREATE TABLE IF NOT EXISTS `cms_aliadosimgindex` (
  `aliadosImgIndex_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliadosImgIndex_titulo` varchar(250) DEFAULT NULL COMMENT 'Titulo Imagen Aliado',
  `aliadosImgIndex_imagen` varchar(250) NOT NULL COMMENT 'Imagen Aliado',
  `aliadosImgIndex_enlace` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`aliadosImgIndex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_aliadosimgindex`
--

INSERT INTO `cms_aliadosimgindex` (`aliadosImgIndex_id`, `aliadosImgIndex_titulo`, `aliadosImgIndex_imagen`, `aliadosImgIndex_enlace`) VALUES
(1, 'titulo 1', 'log011353995229.jpg', 'www.google.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_aliadosimgindex_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_aliadosimgindex_config`;
CREATE TABLE IF NOT EXISTS `cms_aliadosimgindex_config` (
  `aliadosImgIndex_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliadosImgIndex_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `aliadosImgIndex_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`aliadosImgIndex_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_aliadosimgindex_config`
--

INSERT INTO `cms_aliadosimgindex_config` (`aliadosImgIndex_config_id`, `aliadosImgIndex_config_funcionality`, `aliadosImgIndex_config_date`) VALUES
(1, 1, '2012-11-26 08:16:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_aliados_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_aliados_config`;
CREATE TABLE IF NOT EXISTS `cms_aliados_config` (
  `aliados_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliados_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `aliados_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`aliados_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_aliados_config`
--

INSERT INTO `cms_aliados_config` (`aliados_config_id`, `aliados_config_funcionality`, `aliados_config_date`) VALUES
(1, 1, '2012-11-26 18:45:18');

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
  `banners_url` varchar(80) DEFAULT NULL COMMENT 'URL Banner',
  `banners_blank` tinyint(1) DEFAULT '0' COMMENT 'Abre en una nueva pagina',
  `banners_order` int(5) unsigned DEFAULT '0' COMMENT 'Orden',
  `banners_image` varchar(120) DEFAULT NULL COMMENT 'Imagen',
  PRIMARY KEY (`banners_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_banners`
--

INSERT INTO `cms_banners` (`banners_id`, `banners_txt1`, `banners_txt2`, `banners_url`, `banners_blank`, `banners_order`, `banners_image`) VALUES
(1, 'Unete a nuestra comunidad, aqu&iacute; nacen ', 'tus sue&ntilde;os', 'http://repositorio.imaginamos.com/FBZ/topteam/noticia_1.php', 0, 1, 'img21365112347.jpg'),
(2, 'Somos su aliado estrat&eacute;gico en ', 'cada proceso', 'soluciones.php', 0, 1, 'iStock_000023221838_ExtraSmall13636597681364295576.jpg'),
(3, 'Contamos con Unidades de Negocios', 'Especializadas ', 'http://repositorio.imaginamos.com/FBZ/topteam/soluciones.php', 0, 1, 'img11365086891.jpg'),
(4, 'Nuestra comunidad crece ', 'todos los d&iacute;as', 'http://repositorio.imaginamos.com/FBZ/topteam/foodservice.php', 0, 1, 'img51365112417.jpg'),
(6, 'Talento + Servicio =', 'Resultados Sostenibles', 'http://repositorio.imaginamos.com/FBZ/topteam/consulting.php', 0, 1, 'iStock_000018245632_ExtraSmall1365008057.jpg');

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
-- Estructura de tabla para la tabla `cms_buscar_catexp`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_buscar_catexp`;
CREATE TABLE IF NOT EXISTS `cms_buscar_catexp` (
  `buscar_catexp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buscar_catexp_nombre` varchar(250) NOT NULL,
  `buscar_catexp_activa` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`buscar_catexp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_buscar_catexp`
--

INSERT INTO `cms_buscar_catexp` (`buscar_catexp_id`, `buscar_catexp_nombre`, `buscar_catexp_activa`) VALUES
(1, '0 a 6 meses', 1),
(2, '6 meses a 1 a&ntilde;o', 1),
(3, '1 a 2 a&ntilde;os', 1),
(4, '2 a 5 a&ntilde;os', 1),
(5, '5 a 10 a&ntilde;os', 1),
(6, '10 a&ntilde;os o m&aacute;s', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_buscar_catpro`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_buscar_catpro`;
CREATE TABLE IF NOT EXISTS `cms_buscar_catpro` (
  `buscar_catpro_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buscar_catpro_nombre` varchar(250) NOT NULL,
  `buscar_catpro_activa` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`buscar_catpro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_buscar_catpro`
--

INSERT INTO `cms_buscar_catpro` (`buscar_catpro_id`, `buscar_catpro_nombre`, `buscar_catpro_activa`) VALUES
(1, 'Vendedor de Tiendas', 1),
(2, 'Chef', 1),
(3, 'Mesero/Auxiliar de Mesa', 1),
(4, 'Direcci&oacute;n/Gerencia', 1),
(5, 'Administrador de Tiendas', 1),
(6, 'Educaci&oacute;n/Universidad', 1),
(7, 'Otra', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_buscar_cat_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_buscar_cat_config`;
CREATE TABLE IF NOT EXISTS `cms_buscar_cat_config` (
  `buscar_cat_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `buscar_cat_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `buscar_cat_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`buscar_cat_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_buscar_cat_config`
--

INSERT INTO `cms_buscar_cat_config` (`buscar_cat_config_id`, `buscar_cat_config_funcionality`, `buscar_cat_config_date`) VALUES
(1, 1, '2012-11-22 20:50:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
--
-- Creación: 29-11-2012 a las 20:31:39
-- Última actualización: 04-04-2013 a las 22:07:33
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
(1, '2012-07-25 12:10:42', 'http://repositorio.imaginamos.com.co/FBZ/topteam/cms/', 'http://repositorio.imaginamos.com.co/FBZ/topteam/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_consulting`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_consulting`;
CREATE TABLE IF NOT EXISTS `cms_consulting` (
  `consulting_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `consulting_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `consulting_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `consulting_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `consulting_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`consulting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_consulting`
--

INSERT INTO `cms_consulting` (`consulting_id`, `consulting_contenido`, `consulting_contenido2`, `consulting_imagenInt`, `consulting_rutavideo`) VALUES
(1, '<h1><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Consulting</font></h1><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Consulting es la empresa de Outsourcing &nbsp;y el Head Hunter del Grupo Topteam.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Ofrecemos el servicio de selecci&oacute;n de personal desde los siguientes criterios:</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Consultoria en Selecci&oacute;n de Talento Humano:</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Hemos dise&ntilde;ado un servicio que se ajusta a las caracter&iacute;sticas y necesidades espec&iacute;ficas de cada uno de nuestros clientes basado en la confidencialidad, innovaci&oacute;n y selecci&oacute;n altamente calificada, que nos permite estar a la vanguardia del mercado.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Selecci&oacute;n Top:</b> Dise&ntilde;ado para la Selecci&oacute;n de Ejecutivos a trav&eacute;s de psic&oacute;logos expertos en este tipo de perfiles y procesos.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Selecci&oacute;n Standar:</b> Con la misma calidad de altos ejecutivos complementamos nuestra consultor&iacute;a en Selecci&oacute;n de Cargos Administrativos y Operativos. &nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Consultor&iacute;a en Preselecci&oacute;n:</b> Le ayudamos a optimizar sus tiempos de respuesta y el proceso de selecci&oacute;n, entreg&aacute;ndole hojas de vida que cumplen con el perfil previamente establecido.&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Consultor&iacute;a en Evaluaci&oacute;n (Assessment)</b>: Lo apoyamos en la toma de la mejor decisi&oacute;n, en una promoci&oacute;n interna o en una simple evaluaci&oacute;n de candidatos, d&aacute;ndoles recomendaciones y sugerencias destacando las capacidades del evaluado y sus &aacute;reas de mejoramiento, para que pueda tener una gu&iacute;a para el desarrollo y promoci&oacute;n dentro de la empresa.&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Nuestro proceso incluye:</b>&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Levantamiento de informaci&oacute;n</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Assessment Center&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Entrevista individual y aplicaci&oacute;n de pruebas</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Verificaci&oacute;n personalizada de referencias</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Visitas Domiciliarias</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Verificaci&oacute;n de antecedentes&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Estudio de n&uacute;cleo familiar</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Entrevista de retiro</font></div>', 'iStock_000018245632_ExtraSmall1363660804.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_consulting_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_consulting_config`;
CREATE TABLE IF NOT EXISTS `cms_consulting_config` (
  `consulting_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `consulting_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `consulting_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`consulting_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_consulting_config`
--

INSERT INTO `cms_consulting_config` (`consulting_config_id`, `consulting_config_funcionality`, `consulting_config_date`) VALUES
(1, 1, '2012-11-26 10:34:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_foodservice`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_foodservice`;
CREATE TABLE IF NOT EXISTS `cms_foodservice` (
  `foodservice_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `foodservice_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `foodservice_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `foodservice_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `foodservice_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`foodservice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_foodservice`
--

INSERT INTO `cms_foodservice` (`foodservice_id`, `foodservice_contenido`, `foodservice_contenido2`, `foodservice_imagenInt`, `foodservice_rutavideo`) VALUES
(1, '<h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Foodservice</font></h1><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><span style=&#34;font-family: Arial; font-size: 16px; text-align: -webkit-right; background-color: rgb(255, 255, 255); &#34;><i><font color=&#34;#333399&#34;>&#8220;Si est&aacute;s listo para llevar a tu equipo a la conquista ilimitada de sus metas, nosotros te mostraremos como&#8221;</font></i></span></div><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><span style=&#34;font-family: Arial; font-size: 16px; text-align: -webkit-right; background-color: rgb(255, 255, 255); &#34;><i><font color=&#34;#333399&#34;><span class=&#34;Apple-tab-span&#34; style=&#34;white-space: pre;&#34;>																	</span>&nbsp;<span class=&#34;Apple-tab-span&#34; style=&#34;white-space: pre;&#34;>						</span>Topteam Group</font></i></span></div><div><span style=&#34;background-color: rgb(255, 255, 255); text-align: -webkit-left; &#34;><font size=&#34;2&#34;><br></font></span></div><div><br></div><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Foodservice es la m&aacute;s importante empresa del pa&iacute;s en selecci&oacute;n y contrataci&oacute;n de personal para el sector hospitalario (Hoteles, Restaurantes, Clubes, Casinos y Bares).</font></div><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Nuestra Especializaci&oacute;n nos ha permitido tener a su disposici&oacute;n el personal m&aacute;s idoneo disponible dentro de los tiempos requeridos por nuestros clientes.</font></div>', '<div><p style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); &#34;><strong>Nuestra Cultura se basa en:&nbsp;</strong></p><p style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); &#34;><strong>Talento + Servicio = Resultados Sostenibles</strong></p><p style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); &#34;><span style=&#34;font-size: small; text-align: -webkit-left; color: rgb(0, 0, 0); font-family: Arial, Verdana; &#34;>Combinamos los mejores talentos del sector con la mejor selecci&oacute;n para que nuestros clientes disfruten del placer de la oportunidad y se deleiten con nuestro servicio.</span></p><div><span style=&#34;text-align: -webkit-left; &#34;><font size=&#34;2&#34;><br></font></span></div><p></p><p align=&#34;center&#34; style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; background-color: rgb(255, 255, 255); &#34;><span style=&#34;font-family: Arial, Verdana; font-size: small; &#34;>Hemos identificado 4 grandes Divisiones del Talento dentro del gremio de la Hospitalidad en las cuales enfocamos todo nuestro esfuerzo con el fin de optimizar recursos y lograr altos est&aacute;ndares en tiempos de respuesta.</span></p></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Cocina</b>: Director Gastron&oacute;mico, Chef Ejecutivo, Chef Internacional, Chef con especialidades, Chef de demostraciones, Jefe de Cocina, Cocineros, Auxiliares de cocina fr&iacute;a y caliente, Auxiliares de pasteler&iacute;a, Pastelero, Jefes de pasteler&iacute;a, Auxiliares de pasteler&iacute;a y chocolater&iacute;a, Parrillero, Porcionador, Steward, Patinadores, Chef de Partie, Pizzero.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Procesos</b>: Ingenieros de Alimentos, Ingenieros de Sistemas, Programadores.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Servicio</b>: Portero, Botones, Hostess, Recepcionistas, Meseros, Capit&aacute;n de Servicio, Maitre, Bartender, Auxiliares de Mesero, Pianista, Camareras, supervisor de habitaciones, meseros biling&uuml;es, Servicios generales, cajeros y personal para almacenamiento, domiciliarios.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Administrativa</b>: Administrador de punto Sr. Y Jr., Jefe de costos, Auxiliares de costos, Auditores Sr. Y Jr., Auxiliares de recursos humanos, Contadores, Director administrativo y Financiero, Gerente de Operaciones, Gerentes y Directores de Alimentos y Bebidas, Jefe y Auxiliares de mantenimiento, Secretaria.</font></div>', 'iStock_000009904236Medium1363059345.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_foodservice_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_foodservice_config`;
CREATE TABLE IF NOT EXISTS `cms_foodservice_config` (
  `foodservice_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `foodservice_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `foodservice_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`foodservice_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_foodservice_config`
--

INSERT INTO `cms_foodservice_config` (`foodservice_config_id`, `foodservice_config_funcionality`, `foodservice_config_date`) VALUES
(1, 1, '2012-11-26 17:00:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_gestionh`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_gestionh`;
CREATE TABLE IF NOT EXISTS `cms_gestionh` (
  `gestionh_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `gestionh_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `gestionh_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `gestionh_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `gestionh_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`gestionh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_gestionh`
--

INSERT INTO `cms_gestionh` (`gestionh_id`, `gestionh_contenido`, `gestionh_contenido2`, `gestionh_imagenInt`, `gestionh_rutavideo`) VALUES
(1, '<h1 style=&#34;text-align: left;&#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Gesti&oacute;n Humana&nbsp;</font></h1><h1 style=&#34;text-align: left;&#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font><span style=&#34;font-size: small; &#34;>y</span><span style=&#34;font-size: small; &#34;>&nbsp;</span></h1><h1 style=&#34;text-align: left;&#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Talentos&nbsp;</font></h1><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Son dos empresas de servicios temporales legalmente constituidas y vigiladas por el Ministerio del Trabajo.</font></div><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>El Talento Humano ofrecido por <b>TOPTEAM</b> puede ser contratado bajo modelos de N&oacute;mina Delegada en Misi&oacute;n y N&oacute;mina Delegada en Outsourcing donde el cliente ser&aacute; responsable por la administraci&oacute;n del recurso, la asignaci&oacute;n de tareas, el seguimiento y control de las actividades asignadas.</font></div><div style=&#34;font-weight: normal; &#34;><br></div>', '<div><b>EN MISI&Oacute;N:&nbsp;</b></div><div style=&#34;font-weight: normal; &#34;>Seleccionamos y contratamos personal id&oacute;neo para desempe&ntilde;arse bajo las condiciones que la ley permite en reemplazos de vacaciones, picos de producci&oacute;n y licencias de maternidad.</div><div style=&#34;font-weight: normal; &#34;><br></div><div><b>OUTSOURCING:&nbsp;</b></div><div style=&#34;font-weight: normal; &#34;>Seleccionamos y contratamos personal id&oacute;neo para desempe&ntilde;arse seg&uacute;n la necesidad espec&iacute;fica de cada cliente, de acuerdo con la solicitud recibida.</div><div style=&#34;font-weight: normal; &#34;><br></div>', 'iStock_banner51365448775.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_gestionh_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_gestionh_config`;
CREATE TABLE IF NOT EXISTS `cms_gestionh_config` (
  `gestionh_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `gestionh_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `gestionh_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`gestionh_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_gestionh_config`
--

INSERT INTO `cms_gestionh_config` (`gestionh_config_id`, `gestionh_config_funcionality`, `gestionh_config_date`) VALUES
(1, 1, '2012-11-26 09:53:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_headhunter`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_headhunter`;
CREATE TABLE IF NOT EXISTS `cms_headhunter` (
  `headhunter_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `headhunter_titulo1` text NOT NULL COMMENT 'Titulo 1',
  `headhunter_titulo2` text NOT NULL COMMENT 'Titulo 2',
  `headhunter_contenido` text NOT NULL COMMENT 'Contenido',
  `headhunter_enlace` varchar(250) NOT NULL COMMENT 'Enlace',
  `headhunter_imagen` varchar(250) NOT NULL COMMENT 'Imagen',
  PRIMARY KEY (`headhunter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_headhunter`
--

INSERT INTO `cms_headhunter` (`headhunter_id`, `headhunter_titulo1`, `headhunter_titulo2`, `headhunter_contenido`, `headhunter_enlace`, `headhunter_imagen`) VALUES
(1, 'Topteam', 'Consulting', 'Nuestro portafolio de servicios se ajusta a las caracter&iacute;sticas  y necesidades espec&iacute;&shy;ficas de cada uno de nuestros clientes.  Desde la selecci&oacute;n de cargos ejecutivos, hasta cargos administrativos y operativos a trav&eacute;s de psic&oacute;logos expertos.', 'consulting.php', 'iStock_000005850360_ExtraSmall1363659917.jpg'),
(2, 'Topteam', 'Foodservice', 'Somos la primera comunidad especializada en reclutamiento y selecci&oacute;n para Hoteles, Restaurantes y Clubes', 'foodservice.php', 'iStock_000014780322_ExtraSmall1363659884.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_headhunter_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_headhunter_config`;
CREATE TABLE IF NOT EXISTS `cms_headhunter_config` (
  `headhunter_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `headhunter_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `headhunter_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`headhunter_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_headhunter_config`
--

INSERT INTO `cms_headhunter_config` (`headhunter_config_id`, `headhunter_config_funcionality`, `headhunter_config_date`) VALUES
(1, 1, '2012-11-23 20:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_mapa`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_mapa`;
CREATE TABLE IF NOT EXISTS `cms_mapa` (
  `mapa_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `mapa_enlace` text NOT NULL COMMENT 'Ruta Enlace GoogleMap',
  PRIMARY KEY (`mapa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_mapa`
--

INSERT INTO `cms_mapa` (`mapa_id`, `mapa_enlace`) VALUES
(1, '<iframe width="314" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=4.721812,-74.045132&amp;daddr=&amp;hl=es&amp;geocode=&amp;sll=4.721558,-74.045341&amp;sspn=0.001804,0.00284&amp;t=m&amp;doflg=ptk&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;ll=4.721558,-74.045341&amp;spn=0.002224,0.001679&amp;z=18&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=4.721812,-74.045132&amp;daddr=&amp;hl=es&amp;geocode=&amp;sll=4.721558,-74.045341&amp;sspn=0.001804,0.00284&amp;t=m&amp;doflg=ptk&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;ll=4.721558,-74.045341&amp;spn=0.002224,0.001679&amp;z=18" style="color:#0000FF;text-align:left"></a></small>');

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
-- Creación: 29-11-2012 a las 20:31:41
-- Última actualización: 29-11-2012 a las 20:31:41
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(19, 'Noticias', 'modules/noticias/view', 'clipboard'),
(5, 'BannerIndex', 'modules/bannerIndex/view', 'pictures_folder'),
(15, 'Consulting', 'modules/consulting/view', 'clipboard'),
(16, 'Food_Service', 'modules/foodservice/view', 'clipboard'),
(10, 'HeadHunter', 'modules/headhunter/view', 'clipboard'),
(11, 'Staffing', 'modules/staffing/view', 'clipboard'),
(13, 'Nosotros', 'modules/nosotros/view', 'clipboard'),
(14, 'Gestion_Humana', 'modules/gestionHumana/view', 'clipboard'),
(17, 'Soluciones', 'modules/soluciones/view', 'clipboard'),
(18, 'Aliados', 'modules/aliados/view', 'pictures_folder'),
(20, 'GoogleMap', 'modules/mapa/view', 'satellite');

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
  `news_resum` text NOT NULL,
  `news_article` text COMMENT 'ArtÃ­culo de la noticia',
  `news_image` varchar(120) DEFAULT NULL COMMENT 'Imagen de la noticia',
  `news_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_news`
--

INSERT INTO `cms_news` (`news_id`, `news_title`, `news_resum`, `news_article`, `news_image`, `news_date`) VALUES
(1, 'Noticia', '<br>', '<br><div style=&#34;font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;><br></span></div><div style=&#34;font-size: 10pt; &#34;><br></div>', 'iStock_000009891154Medium1364868007.jpg', '2012-11-27 17:31:59'),
(2, 'BIENVENIDAS LAS TIENDAS XUSS', '<font size=&#34;2&#34;>Nuestra Unidad de Negocios <b>Topteam Retailing</b> le da la bienvenida a las tiendas de ropa XUSS</font>', '<br><div style=&#34;font-weight: normal; &#34;><font size=&#34;2&#34; style=&#34;font-family: Arial, Verdana; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;>XUSS es una marca muy femenina, la marca para las mujeres que quieren lucir y sentirse elegantes, c&oacute;modas y muy femeninas</font><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>.</font></div><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; &#34;><br></div><div style=&#34;font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; &#34;><font size=&#34;2&#34;>Las Tiendas de Ropa XUSS cuentan con 12 Puntos de Venta en Bogot&aacute; para brindarles la mejor atenci&oacute;n y por supuesto con el <b>MEJOR TALENTO HUMANO.</b></font></div><div style=&#34;font-weight: normal; font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; &#34;><br></div>', 'Xuss13639218441364290943.jpg', '2012-11-27 17:38:43'),
(3, 'BIENVENIDO HOTEL BOGOTA ROYAL', '<font size=&#34;2&#34;>Le damos la bienvenida a nuestra comunidad a la cadena ROYAL.</font>', '<br><div style=&#34;font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; &#34;><font size=&#34;2&#34;>Desde Marzo del 2013 el Hotel Bogot&aacute; Royal se ha unido a nuestra comunidad de <b>Foodservice.</b></font></div><div style=&#34;font-family: Arial, Verdana; font-style: normal; font-variant: normal; line-height: normal; font-weight: normal; &#34;><font size=&#34;2&#34;><br></font></div><div><font size=&#34;2&#34; style=&#34;font-family: Arial, Verdana; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; &#34;>Es para nosotros un placer suministrar nuestro talento humano, esperamos&nbsp;</font><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>fortalecer todos los d&iacute;as nuestra relaci&oacute;n comercial.</font></div>', 'Bogota Royal13639206241364290887.jpg', '2012-11-27 17:39:28'),
(4, 'PROGRAMA DE FORMACION EN MESA Y BAR', '<font size=&#34;2&#34; style=&#34;font-size: 10pt; &#34;>Topteam pensando en contribuir con el pa&iacute;s, ha implementado un programa&nbsp;de formaci&oacute;n en Mesa y Bar completamente <b>GRATIS.</b></font><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;>Queremos favorecer a las personas cabeza de familia que quieran capacitarse y pertenecer a la comunidad de&nbsp;<b>Topteam Foodservice.</b></font></div>', '<font size=&#34;2&#34; style=&#34;font-weight: normal; font-size: 10pt; &#34;>Topteam pensando en contribuir con el pa&iacute;s, ha implementado un programa <b>GRATIS</b> de formaci&oacute;n en Mesa y Bar.</font><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;>Queremos favorecer a la gente de escasos recursos que sea cabeza de familia y quiera capacitarse y pertenecer a la comunidad de <b>Topteam Foodservice.</b></font></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;><br></span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;>Nuestro programa incluye:</span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;>1.&nbsp;Capacitaci&oacute;n en Mesa y Bar.</span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;>2. Dotaci&oacute;n Inicial.&nbsp;</span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;>3. Trabajo permanente, una vez apruebe el curso.</span></div><div style=&#34;font-weight: normal; &#34;><div><br></div><div style=&#34;font-size: 10pt; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-size: 10pt; &#34;><font size=&#34;2&#34;>Si est&aacute; interesado favor enviar un correo electr&oacute;nico a&nbsp;</font><span style=&#34;font-size: small; &#34;><b>info@topteamgroup.com&nbsp;</b></span><span style=&#34;font-size: small; &#34;>e incluya su Hoja de Vida y expl&iacute;quenos por qu&eacute; quiere ser becado en este programa de formaci&oacute;n en </span><b style=&#34;font-size: small; &#34;>Mesa y Bar.</b><span style=&#34;font-size: small; &#34;>&nbsp;</span></div></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;><br></span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;><font color=&#34;#33ccff&#34;><br></font></span></div><div style=&#34;font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;><font color=&#34;#33ccff&#34;><b>As&iacute; crecemos nuestra comunidad......</b></font></span></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;><br></font></div><div style=&#34;font-weight: normal; font-size: 10pt; &#34;><font size=&#34;2&#34;><br></font></div>', 'iStock_000015895764_ExtraSmall13636596091364290836.jpg', '2012-11-27 17:40:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_news_config`;
CREATE TABLE IF NOT EXISTS `cms_news_config` (
  `news_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `news_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`news_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_news_config`
--

INSERT INTO `cms_news_config` (`news_config_id`, `news_config_funcionality`, `news_config_date`) VALUES
(1, 2, '2012-11-26 19:13:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_nosotros`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_nosotros`;
CREATE TABLE IF NOT EXISTS `cms_nosotros` (
  `nosotros_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `nosotros_mensaje` varchar(250) NOT NULL COMMENT 'mensaje',
  `nosotros_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `nosotros_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `nosotros_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  PRIMARY KEY (`nosotros_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_nosotros`
--

INSERT INTO `cms_nosotros` (`nosotros_id`, `nosotros_mensaje`, `nosotros_contenido`, `nosotros_contenido2`, `nosotros_imagenInt`) VALUES
(1, '&#34;Conf&iacute;a en las personas y te ser&aacute;n fieles, tr&aacute;talos bien, y ellos se mostrar&aacute;n grandes&#34;. Ralph Emerson', '<div style=&#34;font-size: 10pt; font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Somos un grupo empresarial dedicado a la Consultor&iacute;a y Asesor&iacute;a en todo lo relacionado al Talento Humano. Ofrecemos Unidades de Negocios especializadas que nos permiten brindar a nuestros clientes soluciones a la medida en las &aacute;reas de:</font></div><div><ol style=&#34;font-size: 10pt; font-weight: normal; &#34;><li><span style=&#34;font-family: Arial, Verdana; font-size: small; &#34;><b>Selecci&oacute;n de personal &#8220;Head Hunter&#8221;.</b></span></li><li><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;><b>Contrataci&oacute;n de Personal Temporal &#8220;Staffing&#34;.</b></span></li><li><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;><b>Selecci&oacute;n y especializada para Hoteles,Restaurantes y Clubes.</b></span></li><li><b style=&#34;font-size: small; &#34;>Selecci&oacute;n y contrataci&oacute;n especializada en Tiendas de Ropa y Calzado.</b></li></ol><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><font size=&#34;2&#34;><b><br></b></font></div></div><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><font size=&#34;2&#34;><b><br></b></font></div><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><font size=&#34;2&#34;><b><br></b></font></div><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><span style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; &#34;>Seremos su aliado incondicional y con nuestra experiencia lo llevaremos a la optimizaci&oacute;n de recursos, consecuci&oacute;n del mejor talento humano disponible y a encontrar la mejor relaci&oacute;n costo beneficio.</span></div><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><p align=&#34;justify&#34; style=&#34;color: rgb(46, 46, 46); font-family: Arial; font-size: 14px; &#34;>Usted podr&aacute; contar con nuestra honestidad, confidencialidad, confiabilidad, excelencia, respeto y orientaci&oacute;n al resultado.</p></div><div style=&#34;font-size: 10pt; font-weight: normal; &#34;><br></div>', '<div style=&#34;font-weight: normal; &#34;><div style=&#34;font-size: 10pt; &#34;><span style=&#34;font-size: small; &#34;>Contamos con un experimentado equipo de profesionales en diferentes disciplinas que nos convierten en una organizaci&oacute;n &aacute;gil, din&aacute;mica y s&oacute;lida, acorde con las necesidades de las empresas actuales.</span></div><div><span style=&#34;font-size: small; &#34;><br></span></div></div><div style=&#34;font-weight: normal; &#34;><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>La Pol&iacute;tica de Calidad de <b>TOPTEAM </b>&nbsp;est&aacute; sustentada en satisfacer a nuestros clientes mediante un mejoramiento continuo, para lo cual se acredita la aplicaci&oacute;n de un Sistema de Gesti&oacute;n de Calidad con base en la honestidad, la &eacute;tica, la puntualidad, el desarrollo del Talento Humano y la competitividad en el mercado, buscando siempre la excelencia, garantizando as&iacute; el punto m&aacute;ximo en calidad.</font></div>', 'imgnosotros1354018036.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_nosotros_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_nosotros_config`;
CREATE TABLE IF NOT EXISTS `cms_nosotros_config` (
  `nosotros_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `nosotros_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `nosotros_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`nosotros_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_nosotros_config`
--

INSERT INTO `cms_nosotros_config` (`nosotros_config_id`, `nosotros_config_funcionality`, `nosotros_config_date`) VALUES
(1, 1, '2012-11-26 08:58:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_soluciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_soluciones`;
CREATE TABLE IF NOT EXISTS `cms_soluciones` (
  `soluciones_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `soluciones_mensaje` varchar(250) NOT NULL COMMENT 'Mensaje',
  `soluciones_titulo1` varchar(250) NOT NULL COMMENT 'Titulo Foodservice',
  `soluciones_contenido1` text NOT NULL COMMENT 'Contenido Foodservice',
  `soluciones_enlace1` varchar(250) NOT NULL COMMENT 'Enlace Foodservice',
  `soluciones_imagenInt1` varchar(250) NOT NULL COMMENT 'Imagen Sec. Foodservice',
  `soluciones_titulo2` varchar(250) NOT NULL COMMENT 'Titulo Consulting',
  `soluciones_contenido2` text NOT NULL COMMENT 'Contenido Consulting',
  `soluciones_enlace2` varchar(250) NOT NULL COMMENT 'Enlace Consulting',
  `soluciones_imagenInt2` varchar(250) NOT NULL COMMENT 'Imagen Sec. Consulting',
  `soluciones_titulo3` varchar(250) NOT NULL COMMENT 'Titulo GestionH',
  `soluciones_contenido3` text NOT NULL COMMENT 'Contenido GestionH',
  `soluciones_enlace3` varchar(250) NOT NULL COMMENT 'Enlace GestionH',
  `soluciones_imagenInt3` varchar(250) NOT NULL COMMENT 'Imagen Sec. GestionH',
  PRIMARY KEY (`soluciones_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_soluciones`
--

INSERT INTO `cms_soluciones` (`soluciones_id`, `soluciones_mensaje`, `soluciones_titulo1`, `soluciones_contenido1`, `soluciones_enlace1`, `soluciones_imagenInt1`, `soluciones_titulo2`, `soluciones_contenido2`, `soluciones_enlace2`, `soluciones_imagenInt2`, `soluciones_titulo3`, `soluciones_contenido3`, `soluciones_enlace3`, `soluciones_imagenInt3`) VALUES
(1, '&#8220;Muchos creen que el talento es cuesti&oacute;n de suerte, pero pocos saben que la suerte es cuesti&oacute;n de talento&#8221;.', 'TOPTEAM FOODSERVICE', '<p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Somos la m&aacute;s importante empresa del pa&iacute;s en selecci&oacute;n y contrataci&oacute;n de personal para el sector hospitalario (Hoteles, Restaurantes, Clubes, Casinos y Bares).</p><p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Nuestra Especializaci&oacute;n nos ha permitido tener a su disposici&oacute;n el personal m&aacute;s idoneo disponible dentro de los tiempos requeridos por nuestros clientes.</p>', 'foodservice.php', 'iStock_000015895764_ExtraSmall1363660368.jpg', 'TOPTEAM CONSULTING', '<span style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Es la empresa de Outsourcing y el Head Hunter de Talento Humano del Grupo Topteam.</span>', 'consulting.php', 'iStock_000023221838_ExtraSmall1363660406.jpg', 'TOPTEAM RETAILING', '<p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248); &#34;>La Especializaci&oacute;n es nuestra raz&oacute;n de ser, por eso <b>TOPTEAM</b> tiene una Unidad de Negocio con &eacute;nfasis en tiendas de Ropa, Zapatos, electrodom&eacute;sticos, etc.&nbsp;</p><p style=&#34;font-weight: normal; color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248); &#34;>Nuestro estrat&eacute;gico plan de reclutamiento, nos ha permitido tener una excelente base de datos para suplir todas las necesidades que las Tiendas requieran, desde Gerentes de Tienda hasta auxiliares de Bodega, siempre con la misi&oacute;n de generar estabilidad laboral para nuestros clientes.</p><p style=&#34;font-weight: normal; color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248); &#34;><br></p>', 'http://repositorio.imaginamos.com/FBZ/topteam/noticia_2.php', 'iStock_000004698844_ExtraSmall1363660448.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_soluciones_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_soluciones_config`;
CREATE TABLE IF NOT EXISTS `cms_soluciones_config` (
  `soluciones_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `soluciones_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `soluciones_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`soluciones_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_soluciones_config`
--

INSERT INTO `cms_soluciones_config` (`soluciones_config_id`, `soluciones_config_funcionality`, `soluciones_config_date`) VALUES
(1, 1, '2012-11-26 18:20:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_staffing`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_staffing`;
CREATE TABLE IF NOT EXISTS `cms_staffing` (
  `staffing_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `staffing_contenido` text NOT NULL COMMENT 'Contenido',
  `staffing_enlace` varchar(250) NOT NULL COMMENT 'Enlace',
  `staffing_imagen` varchar(250) NOT NULL COMMENT 'Imagen',
  PRIMARY KEY (`staffing_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_staffing`
--

INSERT INTO `cms_staffing` (`staffing_id`, `staffing_contenido`, `staffing_enlace`, `staffing_imagen`) VALUES
(1, 'Suministramos a nuestros clientes el talento af&iacute;n con la cultura organizacional de cada cliente, dentro de los tiempos establecidos, con la mayor confidencialidad y confiabilidad.', 'gestion_humana.php', 'Gestion humana41363013238.png'),
(2, 'Seleccionamos y contratamos personal id&oacute;neo para desempe&ntilde;arse bajo las condiciones que la ley permite en reemplazos de vacaciones, picos de producci&oacute;n y licencias de maternidad.', 'foodservice.php', 'foodservice41363013218.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_staffing_config`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_staffing_config`;
CREATE TABLE IF NOT EXISTS `cms_staffing_config` (
  `staffing_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `staffing_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `staffing_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`staffing_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_staffing_config`
--

INSERT INTO `cms_staffing_config` (`staffing_config_id`, `staffing_config_funcionality`, `staffing_config_date`) VALUES
(1, 1, '2012-11-26 03:37:23');

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
