-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-07-2013 a las 02:23:47
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `incolacteos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE IF NOT EXISTS `asociados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `id_asociados` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `asociados`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `posicion` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `img`, `posicion`, `link`) VALUES
(1, 'banner_1.jpg', '1', 'index.php?seccion=index');

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
-- Volcar la base de datos para la tabla `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES
(1, '2012-07-25 12:10:42', 'http://localhost/incolacteos/admin/', 'http://localhost/incolacteos/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'Home', 'modules/home/view', 'checkmark'),
(2, 'Quienes somos', 'modules/somos/view', 'group'),
(3, 'Productos', 'modules/productos/view', 'briefcase'),
(4, 'Promociones', 'modules/promociones/view', 'calendar'),
(5, 'Contáctenos', 'modules/contactenos/view', 'headset'),
(6, 'Newsletter', 'modules/newsletter/view', 'clipboard'),
(7, 'Recetas', 'modules/recetas/view', 'diary'),
(8, 'Configuración correos', 'modules/configuracion/view', 'usb');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', 'c93ccd78b2076528346216b3b2f701e6', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados_home`
--

CREATE TABLE IF NOT EXISTS `destacados_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `subtitulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `destacados_home`
--

INSERT INTO `destacados_home` (`id`, `titulo`, `subtitulo`, `img`, `link`) VALUES
(1, 'A SDFAS', 'ASDF AS', 'destacados_1.jpg', 'index.php?seccion=recetas-california'),
(2, 'A SDFAS', 'ASDF AS', 'destacados_2.jpg', 'index.php?seccion=california'),
(3, 'A SDFAS', 'ASDF AS', 'destacados_3.jpg', 'index.php?seccion=productos-california');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `direccion1` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `fax` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `titulo`, `direccion`, `direccion1`, `telefono`, `fax`, `correo`) VALUES
(1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_contacto`
--

CREATE TABLE IF NOT EXISTS `form_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `form_contacto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_news`
--

CREATE TABLE IF NOT EXISTS `form_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `suscripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `form_news`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phpmailer`
--

CREATE TABLE IF NOT EXISTS `phpmailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SMTPAuth` varchar(300) NOT NULL,
  `SMTPSecure` varchar(300) NOT NULL,
  `Host` varchar(300) NOT NULL,
  `Port` varchar(300) NOT NULL,
  `Username` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Froms` varchar(300) NOT NULL,
  `FromName` varchar(300) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `phpmailer`
--

INSERT INTO `phpmailer` (`id`, `SMTPAuth`, `SMTPSecure`, `Host`, `Port`, `Username`, `Password`, `Froms`, `FromName`, `Subject`) VALUES
(1, 'no', 'A', 'b', 'C', 'D', 'E', 'F', 'H', 'G');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `posicion` int(11) NOT NULL COMMENT '1 incolacteos, 2 lechesan, 3 importados',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `img`, `titulo`, `posicion`) VALUES
(1, 'productos_1.jpg', 'Primer producto', 1),
(2, 'productos_2.jpg', 'PRIMERO LECHESAN', 2),
(3, 'productos_3.jpg', 'AAASD', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_detalles`
--

CREATE TABLE IF NOT EXISTS `productos_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_productos` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_detalles_productos1_idx` (`id_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `productos_detalles`
--

INSERT INTO `productos_detalles` (`id`, `id_productos`, `titulo`, `img`, `texto`) VALUES
(1, 1, 'aaa', 'productos_1.jpg', 'bbbb'),
(2, 2, 'ABS', 'productos_2.jpg', 'SFADFAS ASDF'),
(3, 3, 'RERER', 'productos_3.jpg', 'ERE R ASDFASD F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `img`, `titulo`, `texto`) VALUES
(1, 'productos_1.jpg', 'Primer producto', 'asdfasdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones_detalles`
--

CREATE TABLE IF NOT EXISTS `promociones_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promociones` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promociones_detalles_promociones_idx` (`id_promociones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `promociones_detalles`
--

INSERT INTO `promociones_detalles` (`id`, `id_promociones`, `titulo`, `texto`, `img`) VALUES
(1, 1, 'ASDFASDF', 'ASDFASDF', 'productos_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE IF NOT EXISTS `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto_ingredientes` text NOT NULL,
  `asociados` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `img`, `thumb`, `titulo`, `texto_ingredientes`, `asociados`) VALUES
(1, 'recetas_1.jpg', 'recetas_1.jpg', 'asd fasd', '<font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>asd fasd fasdf asdfasdf</font><br><ul><li><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>aaa</font></li><li><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>bb</font></li><li><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>ccc</font></li></ul>', '3,'),
(2, 'recetas_2.jpg', 'recetas_2.jpg', 'asdfas df', 'asdfasdfasdf', '1,2,'),
(3, 'recetas_3.jpg', 'recetas_3.jpg', 'adfasf', 'as dfasdf asdf', '1,2,3,'),
(4, 'recetas_4.jpg', 'recetas_4.jpg', 'ererer', 'asd fasd fasf', '1,2,3,4,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_ingredientes`
--

CREATE TABLE IF NOT EXISTS `recetas_ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_ingredientes_recetas1_idx` (`id_recetas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `recetas_ingredientes`
--

INSERT INTO `recetas_ingredientes` (`id`, `id_recetas`, `ingredientes`) VALUES
(1, 1, 'as dfas df');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_preparacion`
--

CREATE TABLE IF NOT EXISTS `recetas_preparacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receta` int(11) NOT NULL,
  `pasos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_preparacion_recetas1_idx` (`id_receta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `recetas_preparacion`
--

INSERT INTO `recetas_preparacion` (`id`, `id_receta`, `pasos`) VALUES
(1, 1, 'Primer paso  sss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `somos`
--

CREATE TABLE IF NOT EXISTS `somos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `video` text NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `pos_video` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `somos`
--

INSERT INTO `somos` (`id`, `img`, `video`, `titulo`, `texto`, `pos_video`) VALUES
(1, 'somos_1.jpg', '69882318', 'asas 11', 'asdf asdf asdf ssss', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subproductos`
--

CREATE TABLE IF NOT EXISTS `subproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_productos` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subproductos_productos1_idx` (`id_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `subproductos`
--

INSERT INTO `subproductos` (`id`, `id_productos`, `titulo`, `texto`) VALUES
(2, 1, 'Primer subproducto je', 'asdfj asdfl j asldfjlasjdflkjasdlfjlaskjdflkaj sfjaskldj fklasjdlfjasld flksda'),
(3, 2, 'aaabbbcc', 'adsf asdf asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subproductos_detalles`
--

CREATE TABLE IF NOT EXISTS `subproductos_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subproducto` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `receta` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subproductos_detalles_subproductos1_idx` (`id_subproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `subproductos_detalles`
--

INSERT INTO `subproductos_detalles` (`id`, `id_subproducto`, `img`, `texto`, `receta`) VALUES
(1, 2, 'productos_2.jpg', 'asdf asdf asf', 1),
(2, 3, 'productos_3.jpg', 'asd fasdf ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `texto`, `posicion`) VALUES
(1, 'CAMBIO CALIFORNIA', 0),
(2, 'JEJEJEJJEJE', 0),
(3, 'contactenos', 3),
(4, 'ASD FASD FASDF', 4);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `productos_detalles`
--
ALTER TABLE `productos_detalles`
  ADD CONSTRAINT `productos_detalles_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promociones_detalles`
--
ALTER TABLE `promociones_detalles`
  ADD CONSTRAINT `promociones_detalles_ibfk_1` FOREIGN KEY (`id_promociones`) REFERENCES `promociones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas_ingredientes`
--
ALTER TABLE `recetas_ingredientes`
  ADD CONSTRAINT `recetas_ingredientes_ibfk_1` FOREIGN KEY (`id_recetas`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas_preparacion`
--
ALTER TABLE `recetas_preparacion`
  ADD CONSTRAINT `recetas_preparacion_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subproductos`
--
ALTER TABLE `subproductos`
  ADD CONSTRAINT `subproductos_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subproductos_detalles`
--
ALTER TABLE `subproductos_detalles`
  ADD CONSTRAINT `subproductos_detalles_ibfk_1` FOREIGN KEY (`id_subproducto`) REFERENCES `subproductos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
