-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2013 a las 04:42:35
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dark_factory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `affiliates`
--

CREATE TABLE IF NOT EXISTS `affiliates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `affiliates`
--

INSERT INTO `affiliates` (`id`, `titulo`, `imagen`, `link`) VALUES
(1, 'LEMON FILMS', 'original_1.png', 'http://www.lemonmedia.co/'),
(2, 'TIGRE PICTURES', 'original_2.jpg', 'http://tigrepictures.com/'),
(3, 'ORIGINAL ENTERTAINMENT', 'original_3.jpg', 'http://originalentertainment.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pais` varchar(15) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `subtitulo`, `fecha`, `pais`, `edad`, `texto`, `link`, `imagen`) VALUES
(1, 'LOREM IPSUM DOLOR SIT AMET', 'DIRECTED BY ROBERT RODRÍGUEZ', '2013-06-12', 'COL', '13', 'Suspendisse purus iaculis. Aliquam in consequat metus convallis id, molestie ut enim. Pellentesque auctor mi semper eros ultricies faucibus. Vestibulum ac turpis vel torquent per conubia nostra, per inceptos himenaeos Sed lobortis feugiat ante, at mattis sapien venenatis.', 'https://www.google.com.co/', 'original_1.jpg'),
(2, 'LOREM IPSUM DOLOR SIT AMET', 'DIRECTED BY ROBERT RODRÍGUEZ', '2013-06-12', 'COL', '13', 'Suspendisse purus iaculis. Aliquam in consequat metus convallis id, molestie ut enim. Pellentesque auctor mi semper eros ultricies faucibus. Vestibulum ac turpis vel torquent per conubia nostra, per inceptos himenaeos Sed lobortis feugiat ante, at mattis sapien venenatis.', 'https://www.google.com.co/', 'original_2.jpg'),
(3, 'LOREM IPSUM DOLOR SIT AMET', 'DIRECTED BY ROBERT RODRÍGUEZ', '2013-06-12', 'COL', '13', 'Suspendisse purus iaculis. Aliquam in consequat metus convallis id, molestie ut enim. Pellentesque auctor mi semper eros ultricies faucibus. Vestibulum ac turpis vel torquent per conubia nostra, per inceptos himenaeos Sed lobortis feugiat ante, at mattis sapien venenatis.', 'https://www.google.com.co/', 'original_3.jpg'),
(4, 'LOREM IPSUM DOLOR SIT AMET', 'DIRECTED BY ROBERT RODRÍGUEZ', '2013-06-12', 'COL', '13', 'Suspendisse purus iaculis. Aliquam in consequat metus convallis id, molestie ut enim. Pellentesque auctor mi semper eros ultricies faucibus. Vestibulum ac turpis vel torquent per conubia nostra, per inceptos himenaeos Sed lobortis feugiat ante, at mattis sapien venenatis.', 'https://www.google.com.co/', 'original_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `subtitulo`, `texto`, `fecha`, `imagen`) VALUES
(1, 'LOREM IPSUM', 'Parturient donect aeneama lig', '<p>texto de prueba para secci&oacute;n, &eacute;ste texto no tiene nada que ver con el contenido de la p&aacute;gina a la que corresponde, si usted lo est&aacute; leyendo, muy seguramente est&eacute; perdiendo su tiempo, as&iacute; que por favor desista d', '2013-07-29', 'original_1.jpg'),
(2, 'LOREM IPSUM', 'Parturient donect aeneama lig', '<p>texto de prueba para secci&oacute;n, &eacute;ste texto no tiene nada que ver con el contenido de la p&aacute;gina a la que corresponde, si usted lo est&aacute; leyendo, muy seguramente est&eacute; perdiendo su tiempo, as&iacute; que por favor desista d', '2013-07-29', 'original_2.png'),
(3, 'LOREM IPSUM', 'Parturient donect aeneama lig', '<p>texto de prueba para secci&oacute;n, &eacute;ste texto no tiene nada que ver con el contenido de la p&aacute;gina a la que corresponde, si usted lo est&aacute; leyendo, muy seguramente est&eacute; perdiendo su tiempo, as&iacute; que por favor desista d', '2013-07-29', 'original_3.jpg'),
(4, 'LOREM IPSUM', 'Parturient donect aeneama lig', '<p>texto de prueba para secci&oacute;n, &eacute;ste texto no tiene nada que ver con el contenido de la p&aacute;gina a la que corresponde, si usted lo est&aacute; leyendo, muy seguramente est&eacute; perdiendo su tiempo, as&iacute; que por favor desista d', '2013-07-29', 'original_4.jpg'),
(5, 'LOREM IPSUM', 'Parturient donect aeneama lig', '<p>texto de prueba para secci&oacute;n, &eacute;ste texto no tiene nada que ver con el contenido de la p&aacute;gina a la que corresponde, si usted lo est&aacute; leyendo, muy seguramente est&eacute; perdiendo su tiempo, as&iacute; que por favor desista d', '2013-07-29', 'original_5.jpg'),
(6, 'prueba Blog', 'Parturient donect aeneama lig', '<p>adsfadf&#39; sadfasdf&#39;</p>\r\n', '2013-07-22', 'original_6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lineas_id` int(10) unsigned NOT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_FKIndex1` (`lineas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `lineas_id`, `categoria`) VALUES
(1, 1, 'Post Production'),
(2, 1, 'Pre Production'),
(3, 1, 'In Production'),
(4, 1, 'In Development'),
(5, 2, 'Post Production'),
(6, 2, 'Pre Production'),
(7, 2, 'In Production'),
(8, 2, 'In Development');

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
(1, '2012-07-25 12:10:42', 'http://localhost/Trabajo/DF_prog/cms/', 'http://localhost/Trabajo/DF_prog/', 'cms@imaginamos.com', 'imaginamos.com');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'Home', 'modules/banner/view', 'administrator'),
(2, 'About Us', 'modules/members/view', 'group'),
(3, 'Films/Theater', 'modules/categorias/view', 'camera'),
(4, 'Media', 'modules/blog/view', 'music_folder'),
(5, 'Contact', 'modules/contacto/view', 'mail_open'),
(6, 'Footer', 'modules/footer/view', 'usb');

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
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', 'e7cdbe62dbae20112e5ee1a7a101c6d3', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `titulo`, `texto`, `imagen`, `direccion`, `telefono`, `email`) VALUES
(1, 'Contact', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.\r\nTexto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiem', 'original_1.jpg', 'Tabasco 68 Int. 2, Roma Norte,06700 México, D.F', '(55) 6274 5060 - (55) 6274 5061', 'contacto@darkfactory.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `texto`, `direccion`, `telefono`, `email`, `ciudad`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisl quis elit tincidunt congue ac id risus. Etiam nulla augue, vulputate non dictum ut, consequat id elit. Morbi non dui ipsum. Integer quis metus tortor. Suspendisse augue odio, placerat sed faucibus sit amet, sollicitudin ac orci. '' asdasd', 'Tabasco 68 Int. 2, Roma Norte,', '(55) 6274 5060 - (55) 6274 5061', 'contacto@darkfactory.com', '06700 México, D.F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_FKIndex1` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `item_id`, `imagen`) VALUES
(1, 1, 'original_1.jpg'),
(2, 1, 'original_2.jpg'),
(3, 1, 'original_3.jpg'),
(4, 4, 'original_4.jpg'),
(5, 4, 'original_5.jpg'),
(6, 4, 'original_6.jpg'),
(7, 7, 'original_7.jpg'),
(8, 7, 'original_8.jpg'),
(9, 7, 'original_9.jpg'),
(10, 8, 'original_10.gif'),
(11, 8, 'original_11.jpg'),
(12, 8, 'original_12.jpg'),
(13, 8, 'original_13.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `industry_news`
--

CREATE TABLE IF NOT EXISTS `industry_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `industry_news`
--

INSERT INTO `industry_news` (`id`, `titulo`, `texto`, `imagen`) VALUES
(1, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'original_1.jpg'),
(2, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'original_2.jpg'),
(3, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'original_3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categorias_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `url` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `texto_mapa` text,
  PRIMARY KEY (`id`),
  KEY `item_FKIndex1` (`categorias_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `categorias_id`, `titulo`, `texto`, `url`, `imagen`, `link`, `texto_mapa`) VALUES
(1, 1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'rsmwAC2Kr_0', 'original_1.jpg', 'https://www.google.com.co/', ''),
(4, 1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'rsmwAC2Kr_0', 'original_4.jpg', 'https://www.google.com.co/', ''),
(5, 1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'rsmwAC2Kr_0', 'original_5.jpg', 'https://www.google.com.co/', ''),
(6, 1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'rsmwAC2Kr_0', 'original_6.jpg', 'https://www.google.com.co/', ''),
(7, 5, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_7.jpg', 'https://www.google.com.co/', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=4.468273,-74.196221&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=12&amp;ll=4.502842,-74.159088&amp;output=embed"></iframe>'),
(8, 6, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_8.jpg', 'https://www.google.com.co/', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=41.426253,-4.639664&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=6&amp;ll=40.396764,-3.713379&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=41.426253,-4.639664&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=6&amp;ll=40.396764,-3.713379&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>'),
(9, 6, 'LOREM IPSUM', 'asd asd d', 'YNieysjSZW4', 'original_9.jpg', 'https://www.google.com.co/', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=41.426253,-4.639664&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=6&amp;ll=40.396764,-3.713379&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=41.426253,-4.639664&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=6&amp;ll=40.396764,-3.713379&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>'),
(10, 2, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'rsmwAC2Kr_0', 'original_10.jpg', 'https://www.google.com.co/', ''),
(11, 2, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'rsmwAC2Kr_0', 'original_11.jpg', 'https://www.google.com.co/', ''),
(12, 3, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_12.jpg', 'http://originalentertainment.com/', ''),
(13, 3, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_13.jpg', 'http://originalentertainment.com/', ''),
(14, 4, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_14.jpg', 'https://www.google.com.co/', ''),
(15, 7, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_15.jpg', 'https://www.google.com.co/', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=-4.219523,-69.935673&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=-4.220036,-69.934083&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=-4.219523,-69.935673&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=-4.220036,-69.934083&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>'),
(16, 7, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', 'YNieysjSZW4', 'original_16.jpg', 'https://www.google.com.co/', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=-4.219523,-69.935673&num=1&ie=UTF8&t=m&z=14&ll=-4.220036,-69.934083&output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=-4.219523,-69.935673&num=1&ie=UTF8&t=m&z=14&ll=-4.220036,-69.934083&source=embed" style="color:#0000FF;text-align:left"></a></small>'),
(17, 8, 'LOREM IPSUM', 'texto de prueba ', 'YNieysjSZW4', 'original_17.jpg', 'http://www.diesel.com', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=-4.219523,-69.935673&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=-4.220036,-69.934083&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=-4.219523,-69.935673&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=-4.220036,-69.934083&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>'),
(18, 8, 'LOREM IPSUM', 'texto de prueba ', 'YNieysjSZW4', 'original_18.jpg', 'http://www.diesel.com', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=-4.219523,-69.935673&num=1&ie=UTF8&t=m&z=14&ll=-4.220036,-69.934083&output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?q=-4.219523,-69.935673&num=1&ie=UTF8&t=m&z=14&ll=-4.220036,-69.934083&source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `latest_news`
--

CREATE TABLE IF NOT EXISTS `latest_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `latest_news`
--

INSERT INTO `latest_news` (`id`, `titulo`, `texto`, `link`, `imagen`) VALUES
(1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'https://www.google.com.co/', 'original_1.jpg'),
(2, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'https://www.google.com.co/', 'original_2.jpg'),
(3, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'https://www.google.com.co/', 'original_3.jpg'),
(4, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto', 'https://www.google.com.co/', 'original_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_de_linea` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `nombre_de_linea`) VALUES
(1, 'FILMS'),
(2, 'THEATHER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `nombre`, `texto`, `imagen`) VALUES
(1, 'ALEXANDRA VELASCO', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo ', 'original_1.jpg'),
(2, 'MARIA INÉS OLMEDO', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo.', 'original_2.jpg'),
(3, 'RODOLFO MÁRQUEZ', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo.', 'original_3.jpg'),
(4, 'SAMANTHA CASTELLANO', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo.', 'original_4.jpg'),
(5, 'MARIELLE CORONA', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo.', 'original_5.jpg'),
(6, 'DANIEL POSADA', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo.', 'original_6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `our_blog`
--

CREATE TABLE IF NOT EXISTS `our_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `our_blog`
--

INSERT INTO `our_blog` (`id`, `titulo`, `texto`, `fecha`, `imagen`, `autor`, `link`) VALUES
(1, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto.', '2013-06-11', 'original_1.jpg', 'By_ Lord Wilmore', 'https://www.google.com.co/'),
(2, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto.', '2013-06-11', 'original_2.jpg', 'By_ Lord Wilmore', 'https://www.google.com.co/'),
(3, 'LOREM IPSUM', 'texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurdamente, vamnos ya no lea esto, no tiene nada interesante que decir este texto.', '2013-06-11', 'original_3.jpg', 'By_ Lord Wilmore', 'https://www.google.com.co/'),
(4, 'LOREM IPSUM', 'Texto de prueba para sección, éste texto no tiene nada que ver con el contenido de la página a la que corresponde, si usted lo está leyendo, muy seguramente esté perdiendo su tiempo, así que por favor desista de hacerlo, por otro lado si aún continua leyendo esto, es porque no tiene nada mejor que hacer y eso es muy triste, no tener nada mejor que hacer que leer textos de prueba de páginas web pues le aconsejo que se compre una vida  o al menos la pida prestada, salga con amigos y deje de perder su tiempo tan absurda-mente, vamos! ya no lea esto, no tiene nada interesante que decir este texto.', '2013-07-19', 'original_4.png', 'By_ Lord Wilmore', 'http://www.imaginamos.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `blog` int(10) unsigned DEFAULT NULL,
  `trailers` int(10) unsigned DEFAULT NULL,
  `industry` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `subscribe`
--

INSERT INTO `subscribe` (`id`, `nombre`, `email`, `blog`, `trailers`, `industry`) VALUES
(1, 'Prue', 'thewizardofwar@hotmail.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trailers`
--

CREATE TABLE IF NOT EXISTS `trailers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `release_year` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `producer` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `trailers`
--

INSERT INTO `trailers` (`id`, `titulo`, `genero`, `imagen`, `release_year`, `director`, `producer`, `url`) VALUES
(1, 'LOREM IPSUM', 'terror fall', 'original_1.jpg', '2004', 'Lorem ipsum dolor', 'Lorem ipsum', 'YNieysjSZW4'),
(2, 'Prueba', 'terror fall', 'original_2.jpg', '2004', 'director test', 'productor test', 'Es44QTJmuZ0'),
(3, 'LOREM IPSUM', 'terror fall', 'original_3.jpg', '2004', 'Lorem ipsum dolor', 'Lorem ipsum', 'YNieysjSZW4'),
(4, 'LOREM IPSUM', 'terror fall', 'original_4.jpg', '2004', 'Lorem ipsum dolor', 'Lorem ipsum', 'YNieysjSZW4'),
(5, 'LOREM IPSUM', 'terror fall', 'original_5.jpg', '2004', 'Lorem ipsum dolor', 'Lorem ipsum', 'YNieysjSZW4'),
(6, 'LOREM IPSUM', 'terror fall', 'original_6.jpg', '2004', 'Lorem ipsum dolor', 'Lorem ipsum', 'YNieysjSZW4');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`lineas_id`) REFERENCES `lineas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
