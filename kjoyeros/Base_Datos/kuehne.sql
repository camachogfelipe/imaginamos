-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2012 a las 23:56:57
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kuehne`
--
CREATE DATABASE `kuehne` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kuehne`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_banner`
--

CREATE TABLE IF NOT EXISTS `cms_banner` (
  `id_banner` int(5) NOT NULL AUTO_INCREMENT,
  `imagen` text NOT NULL,
  `fecha` date NOT NULL,
  `tipo` int(5) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `cms_banner`
--

INSERT INTO `cms_banner` (`id_banner`, `imagen`, `fecha`, `tipo`) VALUES
(5, 'foto31344024562.jpg', '2012-08-03', 1),
(44, 'foto31344257690.jpg', '2012-08-06', 2),
(45, 'foto41344257690.jpg', '2012-08-06', 2),
(46, 'Desert1344257726.jpg', '2012-08-06', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categorias`
--

CREATE TABLE IF NOT EXISTS `cms_categorias` (
  `id_categoria` int(5) NOT NULL AUTO_INCREMENT,
  `desc_categoria_es` varchar(100) NOT NULL,
  `desc_categoria_en` varchar(254) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_categorias`
--

INSERT INTO `cms_categorias` (`id_categoria`, `desc_categoria_es`, `desc_categoria_en`) VALUES
(1, 'Anillos de compromiso', 'Anillos de compromiso1'),
(2, 'Argollas de Matrimonio', 'Argollas de Matrimonio1'),
(3, 'Aretes', 'Aretes1'),
(4, 'Relojes', 'Relojes1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
--

CREATE TABLE IF NOT EXISTS `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`) VALUES
(1, '2012-07-25 12:10:42', 'http://localhost/kuehne/admin/', 'http://localhost/kuehne/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contenidos`
--

CREATE TABLE IF NOT EXISTS `cms_contenidos` (
  `id_contenido` int(5) NOT NULL AUTO_INCREMENT,
  `id_seccion` int(5) NOT NULL,
  `descripcion_es` text NOT NULL,
  `descripcion_en` text NOT NULL,
  `link_cont` text NOT NULL,
  PRIMARY KEY (`id_contenido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_contenidos`
--

INSERT INTO `cms_contenidos` (`id_contenido`, `id_seccion`, `descripcion_es`, `descripcion_en`, `link_cont`) VALUES
(1, 4, '<h2>lorem ipsum dolor</h2>\r\n          <div class="clearfix">\r\n            <ul class="left"><li><h3>Dirección</h3></li><li>Cll 5 # 58 - 34</li><li>Local 204 - 301</li><li>C.C Lorem Ipsum Dolor</li><li>Bogotá Colombia</li></ul>\r\n            <ul class="left ul2"><li><h3>teléfono</h3></li><li>(57+) 335 69 23</li><li>(57+) 482 14 65</li></ul>  \r\n          </div>', '<h2>lorem ipsum dolor1</h2>\r\n          <div class="clearfix">\r\n            <ul class="left">\r\n              <li><h3>Dirección</h3></li>\r\n              <li>Cll 5 # 58 - 34</li>\r\n              <li>Local 204 - 301</li>\r\n              <li>C.C Lorem Ipsum Dolor</li>\r\n              <li>Bogotá Colombia</li>              \r\n            </ul>\r\n            <ul class="left ul2">\r\n              <li><h3>teléfono</h3></li>\r\n              <li>(57+) 335 69 23</li>\r\n              <li>(57+) 482 14 65</li>              \r\n            </ul>  \r\n          </div> ', 'https://maps.google.es/maps?f=q&source=s_q&hl=es&geocode=&q=Cll+112+N.+15-07+Bogota&aq=&sll=53.813626,-8.613281&sspn=7.514827,19.753418&ie=UTF8&hq=&hnear=Calle+112+%23+14-7,+Bogot%C3%A1,+Cundinamarca,+Colombia&t=m&z=14&ll=4.693905,-74.041899&output=embed'),
(2, 5, 'Contenido en Español de Mantenimiento y Resparación<br><img src="http://localhost/kuehne/images/foto1.jpg" height="186" width="380"><br>', '<br>Contenido en Ingles de Mantenimiento y Resparación<br><br><img src="http://localhost/kuehne/images/foto1.jpg" height="186" width="380"><br>', ''),
(3, 6, '<h2>COMPRA DE JOYERIA</h2>\n      <p class="clearfix">\n      <img src="http://localhost/kuehne/images/foto7.jpg" class="right" height="310" width="470">Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. Aen ean tempus sem eget tellus congue vel semper mi posuere.Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. Aen ean tempus sem eget tellus congue vel semper mi posuere.Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. Aen ean tempus sem eget tellus congue vel semper mi posuere.Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. <br></p>', '<img src="http://joyas.name/wp-content/uploads/2009/05/imagen-de-joyas-017.jpg" height="312" width="378"><br><br>Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo.<br> ', ''),
(4, 7, 'Contenido en Español de Empresa<br><br><img src="http://localhost/kuehne/images/foto5.jpg" height="190" width="257"><br>', 'Contenido en Ingles de Empresa<br><br><img src="http://localhost/kuehne/images/foto5.jpg" height="190" width="257"><br>', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'categorias', 'modules/categorias/view', 'pictures_folder'),
(4, 'Tienda', 'modules/tienda/view', 'clipboard'),
(2, 'Sub categoría', 'modules/subcategoria/view', 'pictures_folder'),
(3, 'Productos', 'modules/producto/view', 'pictures_folder'),
(5, 'Mant. y Reparacion', 'modules/contenido/view', 'clipboard'),
(6, 'Compra de Joyeria', 'modules/contenido/view', 'clipboard'),
(7, 'Empresa', 'modules/contenido/view', 'clipboard'),
(18, 'Banner Home', 'modules/banner/view', 'camera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news_config`
--

CREATE TABLE IF NOT EXISTS `cms_news_config` (
  `news_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `news_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`news_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_news_config`
--

INSERT INTO `cms_news_config` (`news_config_id`, `news_config_funcionality`, `news_config_date`) VALUES
(1, 1, '2012-08-01 18:45:41'),
(2, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_productos`
--

CREATE TABLE IF NOT EXISTS `cms_productos` (
  `id_producto` int(5) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(5) NOT NULL,
  `id_subcategoria` int(5) NOT NULL,
  `nombre_producto_es` varchar(254) NOT NULL,
  `referencia_producto_es` text NOT NULL,
  `desc_producto_es` text NOT NULL,
  `nombre_producto_en` text NOT NULL,
  `referencia_producto_en` text NOT NULL,
  `desc_producto_en` text NOT NULL,
  `precio_producto` varchar(20) NOT NULL,
  `imagen` text NOT NULL,
  `compartir_facebook` text NOT NULL,
  `compartir_twitter` text NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `cms_productos`
--

INSERT INTO `cms_productos` (`id_producto`, `id_categoria`, `id_subcategoria`, `nombre_producto_es`, `referencia_producto_es`, `desc_producto_es`, `nombre_producto_en`, `referencia_producto_en`, `desc_producto_en`, `precio_producto`, `imagen`, `compartir_facebook`, `compartir_twitter`) VALUES
(1, 1, 4, 'Producto1', '001', 'Producto', 'Product1', '001', 'Product', '400000', 'foto51344281447.jpg', 'http://www.facebook.com', 'http://www.twitter.com'),
(2, 1, 4, 'Producto2', '002', 'Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. Aen ean tempus sem eget tellus congue vel semper mi posuere. Nunc lectus lacus, scelerisque a tem por sit amet, fau cibus a metus. Cras lobortis, nibh sed faucibus vesti bulum, ante quam luctus ligula, ac con vallis magna metus ac ligula. Duis non purus lorem, eget suscipit augue.', 'Product2', '002', 'Phasellus varius mauris nulla, et commodo leo. Nulla risus metus, commodo vitae rutrum ac, tinci dunt id leo. Aen ean tempus sem eget tellus congue vel semper mi posuere. Nunc lectus lacus, scelerisque a tem por sit amet, fau cibus a metus. Cras lobortis, nibh sed faucibus vesti bulum, ante quam luctus ligula, ac con vallis magna metus ac ligula. Duis non purus lorem, eget suscipit augue.', '30000', 'Lighthouse1344288777.jpg', 'http://www.facebook.com', 'http://www.twitter.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_productos_seprados`
--

CREATE TABLE IF NOT EXISTS `cms_productos_seprados` (
  `id_productos_seprados` int(5) NOT NULL AUTO_INCREMENT,
  `id_producto` int(5) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `fecha_estimada` date NOT NULL,
  PRIMARY KEY (`id_productos_seprados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_productos_seprados`
--

INSERT INTO `cms_productos_seprados` (`id_productos_seprados`, `id_producto`, `nombre_cliente`, `correo_cliente`, `fecha_estimada`) VALUES
(1, 74, 'Rodrigo Rengifo', 'rodrigo.rengifo@imaginamos.com.co', '2012-02-08'),
(5, 2, 'tt', 'rodrigo.rengifo@imaginamos.com.co', '2012-01-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_secciones`
--

CREATE TABLE IF NOT EXISTS `cms_secciones` (
  `id_seccion` int(5) NOT NULL AUTO_INCREMENT,
  `desc_seccion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_secciones`
--

INSERT INTO `cms_secciones` (`id_seccion`, `desc_seccion`) VALUES
(1, 'Categoria'),
(2, 'Subcategoria'),
(3, 'Productos'),
(4, 'Tienda'),
(5, 'Mantenimiento y Reparacion'),
(6, 'Compra de Joyeria'),
(7, 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_subcategorias`
--

CREATE TABLE IF NOT EXISTS `cms_subcategorias` (
  `id_subcategoria` int(5) NOT NULL AUTO_INCREMENT,
  `desc_subcategoria_es` varchar(100) NOT NULL,
  `desc_subcategoria_en` text NOT NULL,
  `id_categoria` int(5) NOT NULL,
  PRIMARY KEY (`id_subcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cms_subcategorias`
--

INSERT INTO `cms_subcategorias` (`id_subcategoria`, `desc_subcategoria_es`, `desc_subcategoria_en`, `id_categoria`) VALUES
(4, 'Diamantes', 'Diamantes1', 1),
(5, 'Diamantes', 'Diamantes1', 3),
(8, 'Prueba', 'Prueba1', 1),
(10, 'Perlas', 'Perlas1', 1),
(11, 'Rubí', 'Rubí1', 1),
(12, 'Rubí', 'Rubí1', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
