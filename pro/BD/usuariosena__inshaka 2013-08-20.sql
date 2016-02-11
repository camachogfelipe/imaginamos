-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2013 a las 10:04:43
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
-- Base de datos: `usuariosena__inshaka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_audiciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_audiciones`;
CREATE TABLE IF NOT EXISTS `cms_audiciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `introduccion` text,
  `descripcion` text,
  `numero_aplicaciones` int(11) DEFAULT '0',
  `imagen` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_aplicaciones` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_audiciones_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1009 ;

--
-- RELACIONES PARA LA TABLA `cms_audiciones`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_audiciones`
--

INSERT INTO `cms_audiciones` (`id`, `titulo`, `var`, `ciudad`, `contacto`, `fecha_inicio`, `fecha_cierre`, `introduccion`, `descripcion`, `numero_aplicaciones`, `imagen`, `user_id`, `created_on`, `updated_on`, `total_aplicaciones`) VALUES
(1001, 'Imaginamos', 'imaginamos', 'bogota', '3104060457', '2012-12-19 00:00:00', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel est elit, quis bibendum felis. In hac habitasse plat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel est elit, quis bibendum felis. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Nulla interdum dui id magna aliquam facilisis.', 6, 'audiciones/f12331a7e4dfb43ae8b285ba603fde97.jpeg', 24, '2012-12-17 16:24:08', '2012-12-17 21:24:08', 0),
(1002, 'Fiesta de cumpleaños de Rigo', 'fiesta-de-cumpleanos-de-rigo', 'Lejanías Meta', '314567658', '2012-12-17 00:00:00', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at commodo dolor. Pellentesque habitant morbi tri.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at commodo dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.', 4, NULL, 24, '2012-12-17 16:52:34', '2012-12-17 21:52:34', 0),
(1003, 'Intercolegiado Berchmans', 'intercolegiado-berchmans', 'Cali', '3104060457', '2012-12-18 00:00:00', '2012-12-21 00:00:00', 'sddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlos', 'sddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlossddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlossddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlos', 2, 'audiciones/406416af370c97d29716a3eb5998cf83.jpg', 24, '2012-12-18 05:54:15', '2012-12-18 10:54:15', 0),
(1004, 'Intercolegiado Berchmans', 'intercolegiado-berchmans', 'Cali', '3104060457', '2012-12-18 00:00:00', '2012-12-21 00:00:00', 'sddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlos', 'sddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlossddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlossddsfsdfdsfdsfdsfsdfsdfdsfd prueba carlos', 2, 'audiciones/219a03afd1056a939ea0f3ca9e5edbde.jpg', 24, '2012-12-18 05:54:26', '2012-12-18 10:54:27', 0),
(1005, 'Intercolegiado de bandas', 'intercolegiado-de-bandas', 'Bogota', '3104060457', '2012-12-18 00:00:00', '2012-12-23 00:00:00', 'asdasdsadsd weadsd prueba charly', ' awdasd asdsadasds dasdasdsads prueba charly', 3, 'audiciones/0095e6a5493b1b0c6c31aafe251949a1.jpg', 24, '2012-12-18 05:55:48', '2012-12-18 10:55:48', 0),
(1006, 'asd', 'asd', 'basad', 'asdsad', '2012-12-26 00:00:00', '2012-12-31 00:00:00', 'asdasds', 'asdasd', 21, NULL, 24, '2012-12-18 17:44:42', '2012-12-18 22:44:42', 0),
(1007, 'asd', 'asd', 'basad', 'asdsad', '2012-12-26 00:00:00', '2012-12-31 00:00:00', 'asdasds', 'asdasd', 21, NULL, 24, '2012-12-18 17:45:44', '2012-12-18 22:45:45', 0),
(1008, 'Imaginamos prueba charly', 'imaginamos-prueba-charly', 'Cali', '32564758', '2012-12-19 00:00:00', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum risus eget libero tristique sollicitudin. In feugiat feugiat egestas. Nunc nibh arcu, varius ut facilisis at, placerat eget lectus.', 5, NULL, 24, '2012-12-19 09:13:36', '2012-12-19 14:13:36', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_audiciones_aplicaciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_audiciones_aplicaciones`;
CREATE TABLE IF NOT EXISTS `cms_audiciones_aplicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL,
  `presentacion` text,
  `audicion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_audiciones_aplicaciones_cms_audiciones1` (`audicion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `cms_audiciones_aplicaciones`:
--   `audicion_id`
--       `cms_audiciones` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_bands`;
CREATE TABLE IF NOT EXISTS `cms_bands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `musical_gender_id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_cms_bands_cms_musical_genders1` (`musical_gender_id`),
  KEY `fk_cms_bands_cms_stages1213213` (`stage_id`),
  KEY `fk_cms_bands_cms_users1232` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1015 ;

--
-- RELACIONES PARA LA TABLA `cms_bands`:
--   `musical_gender_id`
--       `cms_musical_genders` -> `id`
--   `stage_id`
--       `cms_stages` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_bands`
--

INSERT INTO `cms_bands` (`id`, `name`, `var`, `city`, `musical_gender_id`, `stage_id`, `created_on`, `update_on`, `user_id`) VALUES
(1011, 'Blunt', 'blunt', 'Cali', 9, 17, '2012-12-18 05:20:44', '2012-12-18 10:20:44', 24),
(1012, 'Whanna', 'whanna', 'Bogotá', 1, 19, '2012-12-18 05:29:03', '2012-12-18 10:29:03', 24),
(1013, 'Superlitio', 'superlitio', 'Cali', 11, 21, '2012-12-18 05:29:45', '2012-12-18 10:29:45', 24),
(1014, 'The Mills', 'the-mills', 'Bogota', 20, 22, '2012-12-18 05:31:02', '2012-12-18 10:31:02', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands_instruments`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_bands_instruments`;
CREATE TABLE IF NOT EXISTS `cms_bands_instruments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instrument_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_bands_instruments_cms_instruments1` (`instrument_id`),
  KEY `fk_cms_bands_instruments_cms_bands1` (`band_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- RELACIONES PARA LA TABLA `cms_bands_instruments`:
--   `band_id`
--       `cms_bands` -> `id`
--   `instrument_id`
--       `cms_instruments` -> `id`
--

--
-- Volcado de datos para la tabla `cms_bands_instruments`
--

INSERT INTO `cms_bands_instruments` (`id`, `instrument_id`, `band_id`) VALUES
(64, 9, 1011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bands_instruments_users`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_bands_instruments_users`;
CREATE TABLE IF NOT EXISTS `cms_bands_instruments_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `bands_instrument_id` int(11) NOT NULL,
  `is_invited` tinyint(1) DEFAULT '1',
  `invitation_code` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invitation_accepted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_bands_instruments_users_cms_users1` (`user_id`),
  KEY `fk_cms_bands_instruments_users_cms_bands_instruments1` (`bands_instrument_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- RELACIONES PARA LA TABLA `cms_bands_instruments_users`:
--   `bands_instrument_id`
--       `cms_bands_instruments` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_bands_instruments_users`
--

INSERT INTO `cms_bands_instruments_users` (`id`, `user_id`, `bands_instrument_id`, `is_invited`, `invitation_code`, `created_on`, `update_on`, `invitation_accepted`) VALUES
(55, 17, 64, 1, 'l7ZL5pSfoRBzjcAnBYHbw3VY25nwbVcDzOKSPaOd', '2012-12-18 05:20:44', '2012-12-18 10:20:44', 0),
(56, 24, 64, 1, 'eeCtmrI2Z8VAadSBV0s9AecUqMG6sipC5i2A5nsf', '2012-12-18 05:20:56', '2012-12-18 10:20:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_clasificados`;
CREATE TABLE IF NOT EXISTS `cms_clasificados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `clasificados_categoria_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `introduccion` text,
  `descripcion` longtext,
  `ciudad` varchar(255) DEFAULT NULL,
  `imagen` text,
  `precio` float DEFAULT '0',
  `fecha_cierre` date NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_clasificados_cms_users1` (`user_id`),
  KEY `fk_cms_clasificados_cms_clasificados_categorias1` (`clasificados_categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- RELACIONES PARA LA TABLA `cms_clasificados`:
--   `clasificados_categoria_id`
--       `cms_clasificados_categorias` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_clasificados`
--

INSERT INTO `cms_clasificados` (`id`, `user_id`, `clasificados_categoria_id`, `titulo`, `var`, `introduccion`, `descripcion`, `ciudad`, `imagen`, `precio`, `fecha_cierre`, `created_on`, `updated_on`) VALUES
(1, 24, 3, 'asdasd', 'asdasd', 'sdasdasd asdadasd', 'sadasdasd', 'Bogota', 'clasificados/1ce9ce0ae001e1850da37492ae6ea8db.jpg', 1000, '2012-11-08', '2012-11-08 11:36:18', '2012-11-08 16:36:19'),
(2, 24, 3, 'Bateria', 'bateria', 'ljabdisadisaudbasudhsald perro prueba', 'ljabdisadisaudbasudhsald perro pruebaljabdisadisaudbasudhsald perro pruebaljabdisadisaudbasudhsald perro pruebaljabdisadisaudbasudhsald perro prueba', 'Medellin', 'clasificados/4d8962668f6964674f305b5e2ffab51a.jpg', 2500000, '2012-12-30', '2012-12-18 06:30:02', '2012-12-18 11:30:02'),
(3, 24, 4, 'Guitarra Electrica Ibanez Grg250p Mas Pedal Multiefectos', 'guitarra-electrica-ibanez-grg250p-mas-pedal-multiefectos', 'Combo de guitarra eléctrica con amplificador  y accesorios.', 'Combo de guitarra eléctrica con amplificador  y accesorios. Excelente estado, afinada y con correa de cuero.', 'Palmira', NULL, 80000, '2012-12-31', '2012-12-18 06:33:33', '2012-12-18 11:33:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados_aplicaciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_clasificados_aplicaciones`;
CREATE TABLE IF NOT EXISTS `cms_clasificados_aplicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clasificado_id` int(11) NOT NULL,
  `created_on` varchar(255) DEFAULT NULL,
  `presentacion` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_clasificados_aplicaciones_cms_clasificados1` (`clasificado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `cms_clasificados_aplicaciones`:
--   `clasificado_id`
--       `cms_clasificados` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_clasificados_categorias`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_clasificados_categorias`;
CREATE TABLE IF NOT EXISTS `cms_clasificados_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `var` varchar(255) NOT NULL,
  `descripcion` text,
  `icon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_clasificados_categorias`
--

INSERT INTO `cms_clasificados_categorias` (`id`, `nombre`, `var`, `descripcion`, `icon`) VALUES
(3, 'Venta', 'venta', 'Lorem ipsum dolor sit amet, consectetuer.', NULL),
(4, 'Alquiler', '0', 'Clasificados para alquilar servicios relacionados a la industria de la música', NULL),
(5, 'Separado', '0', 'Separar un artículo con el 50%.', NULL),
(6, 'Por edad', '0', 'Deberá portar su cédula para poder llevar nuestros artículos por edad.', NULL),
(7, 'Prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba', '0', 'prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_comments`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_comments`;
CREATE TABLE IF NOT EXISTS `cms_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sonido` int(11) DEFAULT '0',
  `presentacion` int(11) DEFAULT '0',
  `profesionalismo` int(11) DEFAULT '0',
  `actitud` int(11) DEFAULT '0',
  `comentario` text,
  `created_on` datetime NOT NULL,
  `user_creator_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_comments_cms_users1` (`user_creator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- RELACIONES PARA LA TABLA `cms_comments`:
--   `user_creator_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_comments`
--

INSERT INTO `cms_comments` (`id`, `sonido`, `presentacion`, `profesionalismo`, `actitud`, `comentario`, `created_on`, `user_creator_id`) VALUES
(1, 4, 6, 7, 5, 'Hola!', '2012-11-08 11:50:23', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_conciertos`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_conciertos`;
CREATE TABLE IF NOT EXISTS `cms_conciertos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fecha_hora` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `genero_musical` varchar(255) DEFAULT NULL,
  `tipo_concierto` varchar(255) DEFAULT NULL,
  `aire_libre` varchar(255) DEFAULT NULL,
  `gratuito` varchar(255) DEFAULT NULL,
  `boleteria` varchar(255) DEFAULT NULL,
  `presupuesto_general` varchar(255) DEFAULT NULL,
  `nombre_concierto` varchar(255) DEFAULT NULL,
  `numero_bandas` varchar(255) DEFAULT NULL,
  `capacidad_estimada` varchar(255) DEFAULT NULL,
  `caracteristicas` varchar(255) DEFAULT NULL,
  `otros` varchar(255) DEFAULT NULL,
  `presupuesto_concierto` varchar(255) DEFAULT NULL,
  `caracteristicas_promocion` varchar(255) DEFAULT NULL,
  `presupuesto_promocion` varchar(255) DEFAULT NULL,
  `promocion` varchar(255) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_directorio`;
CREATE TABLE IF NOT EXISTS `cms_directorio` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `directorio_categoria_id` int(11) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `direccion` text,
  `telefono` int(11) DEFAULT NULL,
  `sitio_web` text,
  `email` text,
  `logo` text,
  `facebook` text,
  `twitter` text,
  `youtube` text,
  `descripcion` text,
  `active` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_cms_directorio_categorias1` (`directorio_categoria_id`),
  KEY `fk_cms_directorio_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- RELACIONES PARA LA TABLA `cms_directorio`:
--   `directorio_categoria_id`
--       `cms_directorio_categorias` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_directorio`
--

INSERT INTO `cms_directorio` (`id`, `directorio_categoria_id`, `empresa`, `direccion`, `telefono`, `sitio_web`, `email`, `logo`, `facebook`, `twitter`, `youtube`, `descripcion`, `active`, `user_id`, `created_on`, `updated_on`, `code`) VALUES
(00001, 4, 'Google', 'PaloAlto', 1234567, 'http://google.com', 'google@google.com', 'rigobcastro/directorio/bffb415157a342ae0cdbcc564e2ca353.jpg', '', '', '', 'sadasdasdasd', 0, 24, '2012-11-26 12:06:14', '2012-12-18 11:21:34', '907b414e23'),
(00002, 7, 'Musicall', 'cra 7 No 68- 20', 6785645, 'www.deviantart.com', 'carlos.gomez@imaginamos.com', 'rigobcastro/directorio/bffb415157a342ae0cdbcc564e2ca353.jpg', '', '', '', 'economia, practicidad y seguridad', 0, 24, '2012-12-18 06:10:02', '2012-12-18 11:21:34', 'c2e60a8a64'),
(00003, 2, 'Dosunodesign', 'cra 13 no45 67', 34578687, 'www.google.com', 'carlos.gomez@imaginamos.com', 'rigobcastro/directorio/bffb415157a342ae0cdbcc564e2ca353.jpg', '', '', '', 'asdasdsdfsdfdsfdf charly', 0, 24, '2012-12-18 06:19:48', '2012-12-18 11:21:34', '83dd94ee28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_adicionales`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_directorio_adicionales`;
CREATE TABLE IF NOT EXISTS `cms_directorio_adicionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directorio_id` int(5) unsigned zerofill NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_adicionales_cms_directorio1` (`directorio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- RELACIONES PARA LA TABLA `cms_directorio_adicionales`:
--   `directorio_id`
--       `cms_directorio` -> `id`
--

--
-- Volcado de datos para la tabla `cms_directorio_adicionales`
--

INSERT INTO `cms_directorio_adicionales` (`id`, `directorio_id`, `name`) VALUES
(5, 00002, 'Escenario'),
(6, 00002, 'Backline'),
(13, 00003, 'Bar'),
(14, 00003, 'Vestidores'),
(15, 00003, 'Seguridad'),
(26, 00001, 'Efectos especiales'),
(27, 00001, 'Proyección de video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_categorias`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_directorio_categorias`;
CREATE TABLE IF NOT EXISTS `cms_directorio_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cms_directorio_categorias`
--

INSERT INTO `cms_directorio_categorias` (`id`, `var`, `name`, `description`) VALUES
(1, 'reparacion-afinacion-y-alineamiento', 'Reparación, Afinación, y Alineamiento', 'asdasdasd'),
(2, 'tienda-de-instrumentos', 'Tienda de instrumentos', 'Descripción corta'),
(3, 'roadies', 'Roadies', 'asdasd'),
(4, 'backline_y_alquilers', 'Backline y alquilers', NULL),
(5, 'ingenieros_de_sonido', 'Ingenieros de sonido', NULL),
(6, 'luces', 'Luces', NULL),
(7, 'managers', 'Managers', NULL),
(8, 'sitios_para_tocar', 'Sitios para tocar', NULL),
(9, 'estudios_de_grabacion', 'Estudios de grabación', NULL),
(10, 'locales_de_ensayo', 'Locales de ensayo', NULL),
(11, 'tiendas_de_discos', 'Tiendas de discos', NULL),
(12, 'escuelas_de_discos', 'Escuelas de discos', NULL),
(13, 'transporte', 'Transporte', NULL),
(14, 'discograficas', 'Discográficas', NULL),
(15, 'otros', 'Otros', NULL),
(16, 'tienda-de-compra-y-venta-tienda-de-compra-y-venta-tienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-ventatienda-de-compra-y-venta', 'Tienda de compra y venta tienda de compra y venta Tienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y venta', 'Tienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y ventaTienda de compra y venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_directorio_images`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_directorio_images`;
CREATE TABLE IF NOT EXISTS `cms_directorio_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directorio_id` int(5) unsigned zerofill NOT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_directorio_images_cms_directorio1` (`directorio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- RELACIONES PARA LA TABLA `cms_directorio_images`:
--   `directorio_id`
--       `cms_directorio` -> `id`
--

--
-- Volcado de datos para la tabla `cms_directorio_images`
--

INSERT INTO `cms_directorio_images` (`id`, `directorio_id`, `image`, `thumb`) VALUES
(1, 00002, 'rigobcastro/directorio/p17emrcch61rpd2sa1lh41c3c13md3.png', 'rigobcastro/directorio/t_p17emrcch61rpd2sa1lh41c3c13md3.png'),
(2, 00002, 'rigobcastro/directorio/p17emrcjousimsuepg61hs01kqq4.jpeg', 'rigobcastro/directorio/t_p17emrcjousimsuepg61hs01kqq4.jpeg'),
(3, 00002, 'rigobcastro/directorio/p17emrd17l1b4m19vdmbqp5chog5.jpg', 'rigobcastro/directorio/t_p17emrd17l1b4m19vdmbqp5chog5.jpg'),
(4, 00002, 'rigobcastro/directorio/p17emrd7snk9679o1r4da231ba66.jpg', 'rigobcastro/directorio/t_p17emrd7snk9679o1r4da231ba66.jpg'),
(5, 00003, 'rigobcastro/directorio/p17emrvoq61p9m9gj1pji1aoe1oue3.jpg', 'rigobcastro/directorio/t_p17emrvoq61p9m9gj1pji1aoe1oue3.jpg'),
(6, 00003, 'rigobcastro/directorio/p17emrvoq7gh57823rkim08c74.jpg', 'rigobcastro/directorio/t_p17emrvoq7gh57823rkim08c74.jpg'),
(7, 00003, 'rigobcastro/directorio/p17emrvoq71f8l1nct1l4417ufm3o5.jpg', 'rigobcastro/directorio/t_p17emrvoq71f8l1nct1l4417ufm3o5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_footer_banners`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_footer_banners`;
CREATE TABLE IF NOT EXISTS `cms_footer_banners` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `image` text,
  `thumb` text,
  `upload_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cms_footer_banners`
--

INSERT INTO `cms_footer_banners` (`id`, `image`, `thumb`, `upload_on`, `order`) VALUES
(8, 'banners/footer/p17e39tbg91hti185e1br1f6d1u0d4.jpg', 'banners/footer/t_p17e39tbg91hti185e1br1f6d1u0d4.jpg', '2012-12-10 21:00:38', 0),
(9, 'banners/footer/p17e39tptfl0o1leh1ldo18g9152n4.jpg', 'banners/footer/t_p17e39tptfl0o1leh1ldo18g9152n4.jpg', '2012-12-10 21:00:52', 0),
(11, 'banners/footer/p17empff6g19a0b53a951pjm17sh4.jpg', 'banners/footer/t_p17empff6g19a0b53a951pjm17sh4.jpg', '2012-12-18 10:38:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_groups`;
CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios'),
(4, 'bandas', 'Bandas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_instruments`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_instruments`;
CREATE TABLE IF NOT EXISTS `cms_instruments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cms_instruments`
--

INSERT INTO `cms_instruments` (`id`, `name`, `image`) VALUES
(6, 'Bateria', 'build-a-band/instruments/p17ektcpj21hkl1vtp11u9d9de184.png'),
(7, 'Acordeón', 'build-a-band/instruments/p17ektlac71bua71r1pp7cds1p68.png'),
(8, 'microfono', 'build-a-band/instruments/p17eku833b17k717fc6ii37q15cu4.png'),
(9, 'Saxofón', 'build-a-band/instruments/p17eku9j97bv91313msvrvh1tpb4.png'),
(10, 'Guitarra', 'build-a-band/instruments/p17ekudla61k751b9i1abhkp266m4.png'),
(11, 'Timbales', 'build-a-band/instruments/p17ekugn8q2lj4ej99ubu51qlo4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_login_attempts`;
CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `title`, `url`, `icon`) VALUES
(14, 'Noticias', 'cms/news', 'calendar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_musical_genders`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_musical_genders`;
CREATE TABLE IF NOT EXISTS `cms_musical_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `cms_musical_genders`
--

INSERT INTO `cms_musical_genders` (`id`, `var`, `name`) VALUES
(1, 'rock', 'Rock'),
(2, 'afro_jazz', 'Afro jazz'),
(3, 'afro', 'Afro'),
(4, 'calipso', 'Calipso'),
(5, 'rap_cristiano', 'Rap cristiano'),
(6, 'cristiana_contemporanea', 'Cristiana contémporanea'),
(7, 'country', 'Country'),
(8, 'cumbia', 'Cumbia'),
(9, 'disco', 'Disco'),
(10, 'freestyle', 'Freestyle'),
(11, 'funk', 'Funk'),
(12, 'gospel', 'Góspel'),
(13, 'house', 'House'),
(14, 'indie', 'Indie'),
(15, 'jazz', 'Jazz'),
(16, 'latin', 'Latín'),
(17, 'mariachi', 'Mariachi'),
(18, 'metal', 'Metal'),
(19, 'merengue', 'Merengue'),
(20, 'pop', 'Pop'),
(21, 'reggae', 'Reggae'),
(22, 'rap', 'Rap'),
(23, 'reggaeton', 'Reggaetón'),
(24, 'rumba', 'Rumba'),
(25, 'salsa', 'Salsa'),
(26, 'samba', 'Samba'),
(27, 'ska', 'Ska'),
(28, 'soul', 'Soul'),
(29, 'tango', 'Tango'),
(30, 'techno', 'Techno'),
(31, 'vallenato', 'Vallenato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_news`;
CREATE TABLE IF NOT EXISTS `cms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_news`
--

INSERT INTO `cms_news` (`id`, `title`, `var`, `created_on`, `update_on`, `content`) VALUES
(4, 'Prueba', 'prueba', '2012-12-15 16:31:27', '2012-12-15 21:31:27', 'Inshaka!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_news_images`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_news_images`;
CREATE TABLE IF NOT EXISTS `cms_news_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_news_images_cms_news1` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- RELACIONES PARA LA TABLA `cms_news_images`:
--   `news_id`
--       `cms_news` -> `id`
--

--
-- Volcado de datos para la tabla `cms_news_images`
--

INSERT INTO `cms_news_images` (`id`, `news_id`, `image`, `thumb`) VALUES
(2, 4, 'news/LogoFRosa.png', 'news/t_LogoFRosa.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_principal_banners`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_principal_banners`;
CREATE TABLE IF NOT EXISTS `cms_principal_banners` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `image` text,
  `thumb` text,
  `upload_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `cms_principal_banners`
--

INSERT INTO `cms_principal_banners` (`id`, `image`, `thumb`, `upload_on`, `order`) VALUES
(21, 'banners/principal/p17e39q8kj6gn1kus1qmr1vs41rjv4.png', 'banners/principal/t_p17e39q8kj6gn1kus1qmr1vs41rjv4.png', '2012-12-10 20:59:12', 0),
(22, 'banners/principal/p17e39q8kj3481g1m158a1fmq1ob65.png', 'banners/principal/t_p17e39q8kj3481g1m158a1fmq1ob65.png', '2012-12-10 20:59:12', 0),
(23, 'banners/principal/p17e39q8kkpenp61dtgosu1taj6.png', 'banners/principal/t_p17e39q8kkpenp61dtgosu1taj6.png', '2012-12-10 20:59:12', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_sessions`;
CREATE TABLE IF NOT EXISTS `cms_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('020d6574f5a0e9cf04b14156e6747757', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351530006, ''),
('02c5a583830f2560d4ea7cb37f831b0b', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1355927311, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('034fc9ce40f0629711fcb0e9d653243e', '69.171.228.245', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354908492, ''),
('0534717a9763cbffe7ec09e80525a7df', '69.171.247.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355826154, ''),
('097ff3e6ca8947b155f8c1c88a85255b', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355519427, ''),
('0ae2152255d94c06a5dc4a0a3d5ff8e1', '69.171.247.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926526, ''),
('0baaab62f3e4272399180832b42c221b', '173.252.100.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355830243, ''),
('0d104776d942a334892c42ec5e8263a7', '69.171.247.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355826153, ''),
('0e37e8ba08e0a0c03ccbd98b7fe0cca2', '69.171.228.244', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354758636, ''),
('0f685ffb2bb63f91b245e52f64941673', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351640592, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:10:"0000000005";s:7:"user_id";s:10:"0000000005";}'),
('10676114eb0408e774a199bad03e9485', '181.135.193.56', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355517208, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355515767";}'),
('1078a4caf16c958e028e806e334e1ff4', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354216049, ''),
('1105e870ee01f342f652fbcb0a59565e', '69.171.234.0', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1355268246, ''),
('122dc7cbfad238c67600537be7c147e9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351882007, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('13598499e00fdab33d13e0bb6985d788', '66.220.152.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940095, ''),
('13f863649d0b7289ba5f1eb5a297ae6d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353939585, ''),
('1580d2e77136e9f5ac5986f348546e6d', '69.171.237.10', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355091872, ''),
('1bdaa757b649703eccaee3a91a6e410b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351554332, 'a:5:{s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351553943";}'),
('1c4e8116cd05d134692cddd2bf36af17', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351635942, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351635339";}'),
('2035eea5121dd9834a958dae0e48b7ef', '65.52.0.53', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)', 1355268252, ''),
('20865af855cb35a6e22270cf19f86623', '186.147.52.194', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1354508535, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:21:"mayris_71@hotmail.com";s:8:"username";s:8:"mayris71";s:5:"email";s:21:"mayris_71@hotmail.com";s:7:"user_id";s:2:"27";s:14:"old_last_login";s:10:"1354507222";}'),
('231524e0045d6ce8044d5d139f5b290b', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355266754, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355266749";s:11:"facebook_id";s:10:"1432500610";}'),
('234f84d42a33d63ecddcf8af3c6edbe0', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354508232, ''),
('23c1a9c45ecb86b69c209ac157633618', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355518715, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:10:"1355266052";}'),
('24c63b8f1c01e4081cde7a2c29d565a8', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355758905, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('26db9521b3fbf0d9a1e4617679a92832', '66.220.152.3', 'facebookplatform/1.0 (+http://developers.facebook.com)', 1354216049, ''),
('2bc2924b55651b312de5511432f3cc39', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351554249, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351529050";}'),
('2d9b56c6c227d8b312dbce7009fe3aaa', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355758905, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('2dd879ac26fc85758d9a73f1f15b1b43', '69.171.228.251', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354758637, ''),
('2fd11f0bbb4fefbd87059491d86dd644', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351295975, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351284372";}'),
('2fd5e2b6ba20308c98462af6accbf042', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:17.0) Gecko/20100101 Firefox/17.0', 1355920783, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('325ef371ba7148466148ab355b0d90e7', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355506514, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355496535";}'),
('349d5943db76de580c34a4aae289b994', '186.31.224.32', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:16.0) Gecko/20100101 Firefox/16.0', 1355266686, 'a:2:{s:9:"user_data";s:0:"";s:35:"flash:new:error_validating_facebook";b:1;}'),
('36ed02d70b3c2a187dc613a589e37eec', '209.248.161.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355783767, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:20:"therafff@hotmail.com";s:2:"id";s:2:"28";s:7:"user_id";s:2:"28";}'),
('38883c6a7b32a142ace233c6d7c88139', '66.220.152.1', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355927758, ''),
('38e274daa344c4cc465619272dca3f89', '69.171.247.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926526, ''),
('38eacd74aa0f15a687af2ae22df0f06a', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355506514, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('39a765c9826b4b78cd202caba79bcbf7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351609106, ''),
('3a1d125f1ee16504a1a05407f8e3b4a1', '66.220.152.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940094, ''),
('3bb9aafe074297eb366e30a9026c5183', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355947707, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('3c0c5e8edd1c7a1eeb5c4b0f983839c6', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355502956, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355496692";s:11:"facebook_id";s:10:"1432500610";}'),
('3c6b7e6709f8ffa363e33908447d95a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351633516, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351612274";}'),
('3cbc9cbfcc79cf0b0cfe9a6396a6c721', '201.216.44.50', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355372601, ''),
('41a09f471a0cba9183395891134f54ca', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1356013530, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1356013151";}'),
('422d9a558185bba75268c856eb5f6bb7', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355870978, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355869311";}'),
('424bd2dcc6f14ea1c05935ff3fca2c2d', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355957948, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('4527e8547ef562d9ba7683becf0704de', '69.171.242.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355780038, ''),
('455ba3d057e7d0deafb8d4bad5cba628', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351638747, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351638302";}'),
('480c2142fea5d993ce3f45388918c3e0', '190.146.238.205', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0) Gecko/20100101 Firefox/17.0', 1354828093, ''),
('4c1ea6d31839118f8f4730a8f01ce4e6', '190.27.203.76', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1354629416, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:32:"oscar.caranton@imaginamos.com.co";s:2:"id";s:2:"26";s:7:"user_id";s:2:"26";}'),
('4d6cf24acc9d12e993dd89ef06588524', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355173063, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1354716047";s:11:"facebook_id";s:10:"1432500610";}'),
('5256552438698e982a9d75e892e85d05', '209.248.161.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355777697, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"rafael@inshaka.com";s:2:"id";s:2:"32";s:7:"user_id";s:2:"32";}'),
('552a0cadc010e70d94758afbd74d4a37', '190.27.20.63', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1354504741, ''),
('564bd3bdb33651b185f21ba32b4421e4', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1354504269, ''),
('58e061c79e20877c0981d1b379793c45', '181.134.47.200', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_8) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.90 Safari/537.1', 1355373461, ''),
('58e0a141df2a5789cc6a66d198c55381', '209.248.161.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355783734, 'a:8:{s:9:"user_data";s:0:"";s:5:"email";s:20:"therafff@hotmail.com";s:2:"id";s:2:"32";s:7:"user_id";s:2:"28";s:8:"identity";s:20:"therafff@hotmail.com";s:8:"username";s:7:"raffiky";s:14:"old_last_login";s:10:"1355607112";s:11:"facebook_id";s:9:"561090354";}'),
('5a633d465201f547e2d301ac7ad2b4a4', '209.248.161.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355784567, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:20:"therafff@hotmail.com";s:2:"id";s:2:"28";s:7:"user_id";s:2:"28";}'),
('5d3ce36cedf3b1059ab5b0822ea5e545', '66.220.152.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355268245, ''),
('5f16634f9458c9b925ad78e8cfc22322', '66.220.152.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355268244, ''),
('5f17cd078d6a743d1c405893b32947ad', '69.171.247.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926525, ''),
('6236f99474a1113c2d35fd39a59e528b', '69.171.229.118', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354965467, ''),
('6308e0b8b2cb70d905730eca8bcaf612', '186.29.209.112', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355737367, 'a:2:{s:9:"user_data";s:0:"";s:35:"flash:old:error_validating_facebook";b:1;}'),
('63423d3d48c6d049241ed2104b6f2dcb', '173.252.110.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940673, ''),
('646a7416125bf3277c8b97f20477b498', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351536948, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351524724";}'),
('64a290c53880279dc2cb9ac2c0c0fa16', '66.220.152.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355870363, ''),
('6dd21d7026cbd651af46adfe9dffb43f', '200.74.140.174', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355611312, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"rafael@inshaka.com";s:8:"username";s:4:"Rafa";s:5:"email";s:18:"rafael@inshaka.com";s:7:"user_id";s:2:"32";s:14:"old_last_login";s:10:"1355607158";}'),
('6f93858f98d0357cba46e215ab9924f2', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:16.0) Gecko/20100101 Firefox/16.0', 1354705011, ''),
('704ca5f508c1829f9fec8298a2173423', '181.135.193.56', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355515766, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355497070";}'),
('712665752edc91881899e8d4ee953e99', '192.168.0.8', 'Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351296344, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:23:"pecheandres@hotmail.com";s:2:"id";s:10:"0000000025";s:7:"user_id";s:10:"0000000025";}'),
('71e33d845ac99f5de92e23d3d928c5a9', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355763503, ''),
('737219e22d689f1f54b53815f93a2c37', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926391, ''),
('739629111dd0a6979c47b70e2e3cfb75', '69.171.228.247', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355153933, ''),
('7581227a6204938a5375f7b16847e83c', '200.118.76.99', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355358279, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:20:"therafff@hotmail.com";s:8:"username";s:7:"raffiky";s:5:"email";s:20:"therafff@hotmail.com";s:7:"user_id";s:2:"28";s:14:"old_last_login";s:10:"1355169754";s:11:"facebook_id";s:9:"561090354";}'),
('776152e6cdc2d19890c332fc2f76c9f2', '66.220.152.0', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354216048, ''),
('78cb8dc70f25874a208a08f3b9a2930b', '66.220.152.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355870364, ''),
('7d2b61b137b7018a348fb5fae1f7e92d', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355779261, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355771811";s:11:"facebook_id";s:10:"1432500610";}'),
('7dfb87f93b7466517ecb707dad9054d0', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354216047, ''),
('7ecf46e168c11e8dea2fafcd01b9f8a3', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355927756, ''),
('81cfc36aa0527d8ba1a6761423881aee', '190.85.98.185', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355505444, ''),
('82320fd4e47af62b8f7fd686e0aea53e', '69.171.234.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355268245, ''),
('82ae3ede657733b99463445d587c1a1e', '209.248.161.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1355783953, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:20:"therafff@hotmail.com";s:2:"id";s:2:"28";s:7:"user_id";s:2:"28";}'),
('83d5ecca3e465afc6a6ce7cee5d2cc86', '173.252.110.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940674, ''),
('84956aea653f24eac8ee11c47fb6e85e', '69.171.234.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354931047, ''),
('863acc7e974d7b422d84b19a42fc1e5a', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355945396, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('865d4f623f22753d4d24e4477da9ec13', '66.220.152.0', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926391, ''),
('89ba85d4c8d29e488d4f89316dfc40b0', '200.118.91.97', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 1354850293, ''),
('8aea19a6636dcf97beb50ce819df76e1', '186.29.209.112', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355869289, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355869210";}'),
('8bae1241d42577793a145ee3a5a235c1', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351536242, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351527423";}'),
('8ddebc8d376d4a4914f13943cc708d74', '192.168.0.8', 'Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1351296343, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:23:"pecheandres@hotmail.com";s:8:"username";s:17:"andres.o.burgos.9";s:5:"email";s:23:"pecheandres@hotmail.com";s:7:"user_id";s:10:"0000000025";s:14:"old_last_login";s:10:"1351296101";}'),
('8f4d6ca6b7b18ad019401a3d17424752', '66.220.152.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355268246, ''),
('8fc7c05db12349b390c3ff85bdc19849', '190.27.203.76', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.91 Safari/537.11', 1354283281, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:32:"oscar.caranton@imaginamos.com.co";s:8:"username";s:5:"oscar";s:5:"email";s:32:"oscar.caranton@imaginamos.com.co";s:7:"user_id";s:2:"26";s:14:"old_last_login";s:10:"1354226025";}'),
('90a94bd230efe484d42c194294abff8e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351638728, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351635958";}'),
('920fb44729d26c99dd4fde26c1443692', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355757622, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('92635c228e0ca401a572ff94f7111879', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355830242, ''),
('92a1071984c15bf568fb74fc61a8fc44', '69.171.228.251', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1355153933, ''),
('946254d6677e024358734d5ac9e580ae', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355828189, ''),
('975081bfe36d67cb78a65f5ffe57dcad', '69.171.237.13', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1355091873, ''),
('9819d77213e903c6ece9c871509dc987', '66.220.152.0', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355926390, ''),
('99f03948ae0e36d1246183326fa0da45', '181.135.202.67', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355774687, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('9b3fa8cd2da22e0644d3e31382600234', '190.27.203.76', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.91 Safari/537.11', 1354226031, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:10:"1354225969";}'),
('9ca5073e17c402d2a2e32c656cd282e9', '186.31.224.32', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355774012, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355758920";}'),
('a6f9a5859b8e82b45a868d930734f52b', '173.252.100.119', 'facebookplatform/1.0 (+http://developers.facebook.com)', 1354508234, ''),
('a75df92060c42aaa1588929e6befa40c', '69.171.224.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354931404, ''),
('a90da2749539a80c90debf300efa0616', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351633645, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:10:"0000000005";s:7:"user_id";s:10:"0000000005";}'),
('ab887d852f2169776a41fd82b2aa2a1d', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355946950, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('aba48403eccd7f180ae422e26bfc4453', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1354716032, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1354716024";s:11:"facebook_id";s:10:"1432500610";}'),
('abe22961f39eb9c99eae84158b756397', '186.31.224.32', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355266985, 'a:1:{s:9:"user_data";s:0:"";}'),
('ac558cff016766c0f688c1de494d8348', '69.171.234.5', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354931048, ''),
('ac9dff273fb24e33b6dce32eb1ef364f', '181.135.202.67', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355830682, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355774688";}'),
('ad1280799fdc5329b5a4d9107b1ab9da', '192.168.0.20', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351282684, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:28:"andres.beethoven@hotmail.com";s:8:"username";s:12:"arodriguez34";s:5:"email";s:28:"andres.beethoven@hotmail.com";s:7:"user_id";s:10:"0000000017";s:14:"old_last_login";s:10:"1351282895";}'),
('aebd196f8c8e06a1992a669a5e713bad', '190.146.238.205', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355265234, ''),
('aee28eec0942c761509b0d0e2bf97a46', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355506514, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('af00c8ea5c001c2bdd4cfd0f02900aa4', '181.135.193.56', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355757775, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355757637";}'),
('afc42add4d3b6f9332b63ccc51edee4b', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354508233, ''),
('b1a5747113b52406d7aa51a36a35e79f', '66.220.152.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940095, ''),
('b431dc866008ad974bab1b01ab7cc5e5', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1355870349, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355869378";}'),
('b528cdf7a86ef3bbfc056aea48c1ffa6', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:17.0) Gecko/20100101 Firefox/17.0', 1355919534, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355918227";}'),
('b5597a7e645720f3b5c99bc952f50fc9', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1356013135, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355947707";}'),
('b5957feeb372c67661d936cfd6d588bf', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1355961849, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355920783";}'),
('b658d13dd7cc2846303a3088f118d1fb', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351722655, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351536266";}'),
('b826f09e681af5379ccd7ce032e55327', '69.171.242.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354758605, ''),
('b8aa6261c487c58b22ea3045a92140be', '186.31.224.32', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355268283, ''),
('b8f2bdbe5ee8283b69af02083da48d5d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351609099, ''),
('b9a29513e1236fff9fa6dd9cb6c816eb', '181.135.209.48', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355833087, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:27:"carlos.gomez@imaginamos.com";s:8:"username";s:13:"Carlos Gómez";s:5:"email";s:27:"carlos.gomez@imaginamos.com";s:7:"user_id";s:2:"30";s:14:"old_last_login";s:10:"1355495259";}'),
('ba9ebdea89e8b695b56d03bb98a6269f', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355927757, ''),
('bb02c5eea6e56fd863a58434d7e0a91b', '69.171.247.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355826155, ''),
('bbb71bbf87ed8130d0f64fec3b652a88', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:17.0) Gecko/20100101 Firefox/17.0', 1355940344, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355926118";}'),
('bc27ecb84f7d38256e593369ebd6f8e2', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1355965626, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355939753";}'),
('c0b0b1e62a8945245161caa34d1f708a', '173.252.100.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355830242, ''),
('c3d51389f21c6334684f6e2326f7352e', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355757622, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('c90c322cb2c7b01f6106a4fc6b30775f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352404847, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('c97ca2f3b1386e2f3fb7876467fa7c5b', '69.171.242.117', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354758606, ''),
('ca21339f5425f6cad26b12d636c040a0', '66.220.152.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354216050, ''),
('cd63e7d1989d15902f16d77678a079f4', '192.168.0.4', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353970833, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1353938943";s:11:"facebook_id";s:10:"1432500610";}'),
('cd83c8dce08d25a34b52337803cf1e0d', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355757622, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('cf9736784fa380c90c0f9e05dfe93d8a', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355828189, ''),
('d0aa47ae6ad6600a93f2fc77b70767f5', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355784967, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355775145";}'),
('d2a4b4fde49a1b1a8a919452e1fb5648', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351698220, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:10:"0000000005";s:14:"old_last_login";s:10:"1351645070";}'),
('d601e546591c4e530d8b0f7ca213fa2a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352413456, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:1:"5";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352405693";}'),
('db0d12e5ba79c7972a928475ddab88b2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352406376, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:1:"5";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352295044";}'),
('db261b2629c338decd223de2a0ba4bd2', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355868720, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('dcd41ad43822823605a83f4e025da1b0', '192.168.0.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351546855, 'a:5:{s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351536976";}'),
('e23ca5d972704c10f6bbceb13a3adbc1', '173.252.100.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355828188, ''),
('e2abc9322f0236409bc9b76ee847684a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351804781, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1351690982";}'),
('e3453c9f1b238939dd5b57d31a420c67', '173.252.110.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355940674, ''),
('e763738c920f335929f8d079c68bd485', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353100730, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1352410017";}'),
('e8033c417715e17c06e830f6cdca26b5', '69.171.242.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355780038, ''),
('ea0840990e10c566eaf89c564f61dc95', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1351635318, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:10:"0000000024";s:14:"old_last_login";s:10:"1351546885";}'),
('eb3adb339958348ebb828b84776d9035', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355506514, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('eb82da2906c69f4ef95352a4a95967ad', '69.171.228.246', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354908491, ''),
('ec1a3d67612028422b37354db30928d0', '190.158.136.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:17.0) Gecko/20100101 Firefox/17.0', 1355920138, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('ecb7539a8a239427f7a2841d60f81b81', '190.25.135.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355944724, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355871092";}'),
('f02e02adc56b1548c50676594c058c3b', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11', 1356018118, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('f25af6ae3057100fcf73c778dc0851fd', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.95 Safari/537.11', 1355172397, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:27:"carlos.gomez@imaginamos.com";s:8:"username";s:13:"Carlos Gómez";s:5:"email";s:27:"carlos.gomez@imaginamos.com";s:7:"user_id";s:2:"30";s:14:"old_last_login";s:10:"1355153973";}'),
('f52e3cf1f4318c85190aba8fd406d62a', '69.171.242.112', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355780038, ''),
('f7b4e2d02f06d3d8fda9a9c4d4aa283d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', 1352252504, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:14:"old_last_login";s:10:"1352228003";}'),
('f85652295665e42df83aa27a6b855f54', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1352324052, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:10:"1352228330";}'),
('f89f99b1c3809dd0191597544ca53f41', '69.171.224.113', 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)', 1354931405, ''),
('f91bf465b4e9eddbd54bd3c2566f4cfb', '66.220.152.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354216046, ''),
('f96738ef5ff30dc97b939bac4a5adb5c', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355524842, 'a:7:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"lzmasart@gmail.com";s:8:"username";s:11:"rigobcastro";s:5:"email";s:18:"lzmasart@gmail.com";s:7:"user_id";s:2:"24";s:14:"old_last_login";s:10:"1355517208";s:11:"facebook_id";s:10:"1432500610";}'),
('f9943c782b84661de7ca176192523d99', '190.27.203.76', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11', 1355753413, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('f9d350062600e0aaa08137bc351bc1b0', '69.171.229.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1354965466, ''),
('fb5501f35364714353469e5206ab5fac', '181.135.193.56', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:17.0) Gecko/20100101 Firefox/17.0', 1355753244, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"lzmasart@gmail.com";s:2:"id";s:2:"24";s:7:"user_id";s:2:"24";}'),
('fd31d7b8c0ee3d2bc2da6367da998306', '66.220.152.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1355870363, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_stages`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_stages`;
CREATE TABLE IF NOT EXISTS `cms_stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` text,
  `thumb` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cms_stages`
--

INSERT INTO `cms_stages` (`id`, `name`, `image`, `thumb`) VALUES
(17, 'Escenario prueba 1', 'build-a-band/stages/p17ekr9r0e1ja16ja8km1gj1r2m4.jpg', 'build-a-band/stages/t_p17ekr9r0e1ja16ja8km1gj1r2m4.jpg'),
(18, 'Escenario prueba 2', 'build-a-band/stages/p17el4jppbr3g1tfpm9k1u4i524.jpg', 'build-a-band/stages/t_p17el4jppbr3g1tfpm9k1u4i524.jpg'),
(19, 'Escenario prueba 3', 'build-a-band/stages/p17el4ka8m1gtd19hq1o4f1gjl17vj4.jpg', 'build-a-band/stages/t_p17el4ka8m1gtd19hq1o4f1gjl17vj4.jpg'),
(20, 'Escenario prueba 4', 'build-a-band/stages/p17el4ldhbfli1ptprckiif1nd64.jpg', 'build-a-band/stages/t_p17el4ldhbfli1ptprckiif1nd64.jpg'),
(21, 'Escenario prueba 5', 'build-a-band/stages/p17el4m0hd9561gqa1o8q1ge6hg74.jpg', 'build-a-band/stages/t_p17el4m0hd9561gqa1o8q1ge6hg74.jpg'),
(22, 'Escenario prueba 6', 'build-a-band/stages/p17el4mi0614itl0rvu09fp15fo4.jpg', 'build-a-band/stages/t_p17el4mi0614itl0rvu09fp15fo4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_talents`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_talents`;
CREATE TABLE IF NOT EXISTS `cms_talents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talents_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_talents_cms_talents_categories1` (`talents_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- RELACIONES PARA LA TABLA `cms_talents`:
--   `talents_category_id`
--       `cms_talents_categories` -> `id`
--

--
-- Volcado de datos para la tabla `cms_talents`
--

INSERT INTO `cms_talents` (`id`, `talents_category_id`, `name`, `var`) VALUES
(40, 2, 'Acústica', 'acustica'),
(44, 4, 'Congas', 'congas'),
(46, 4, 'Timbal', 'timbal'),
(47, 4, 'Bongos', 'bongos'),
(49, 4, 'Triángulo', 'triangulo'),
(50, 4, 'Caja', 'caja'),
(51, 4, 'Cajón Peruano', 'cajon_peruano'),
(52, 4, 'Campana', 'campana'),
(53, 4, 'Cencerro', 'cencerro'),
(60, 1, 'Coros', 'coros'),
(62, 4, 'Guacharaca', 'guacharaca'),
(63, 2, 'Eléctrica', 'electrica'),
(64, 3, 'Acústico', 'acustico'),
(65, 4, 'Bateria', 'bateria'),
(66, 4, 'Maracas', 'maracas'),
(67, 1, 'Voz principal', 'voz_principal'),
(68, 3, 'Eléctrico', 'electrico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_talents_categories`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_talents_categories`;
CREATE TABLE IF NOT EXISTS `cms_talents_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_talents_categories`
--

INSERT INTO `cms_talents_categories` (`id`, `name`, `var`) VALUES
(1, 'Voz', 'voz'),
(2, 'Guitarra', 'guitarra'),
(3, 'Bajo', 'bajo'),
(4, 'Percusión', 'percusion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users`;
CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `inshaka_url` varchar(255) DEFAULT NULL,
  `is_band` tinyint(1) DEFAULT '0',
  `band_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `subscribe_news` tinyint(1) DEFAULT '0',
  `subscribe_offers` tinyint(1) DEFAULT '0',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT '1900-01-01',
  `phone` int(20) DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT NULL,
  `profile_picture` text,
  `bio` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `inshaka_url`, `is_band`, `band_name`, `city`, `gender`, `subscribe_news`, `subscribe_offers`, `first_name`, `last_name`, `birthday`, `phone`, `facebook_id`, `profile_picture`, `bio`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 1355517971, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '1900-01-01', 0, NULL, NULL, NULL),
(17, '��\0', 'arodriguez34', '748ba128f05d4bbf87093464582d8d0144c50bc0', '3aa557c9f1', 'andres.beethoven@hotmail.com', NULL, NULL, NULL, NULL, 1351282895, 1351282895, 1, 'arodriguez34', 0, '0', 'Bogotá, Colombia', NULL, 0, 0, 'Andres', 'Rodriguez', '1980-06-18', 1, '653749216', NULL, NULL),
(24, '��\0\Z', 'rigobcastro', '3f004b86432931ccffd6977c7cb1f867680a856c', 'fbaf074f58', 'lzmasart@gmail.com', NULL, NULL, NULL, '7b4042df8659b6c8b33b2bfe03a7593e06e85f57', 1351284372, 1356013553, 1, 'rigobcastro', 0, '0', 'Bogotá, Colombia', 'Masculino', 0, 0, 'Rigo', 'B Castro', '1987-08-24', 1, '1432500610', 'rigobcastro/2d7a04db475c6e465787d5c83fb937e9.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id accumsan nunc. Donec lobortis posuere ullamcorper. Nam molestie hendrerit purus id consequat. Ut viverra tortor id nunc bibendum sagittis vel quis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mauris ac lacus viverra accumsan non sit amet felis. Maecenas lectus nulla, placerat nec egestas ac, euismod sed augue. Quisque ligula massa, auctor sit amet consequat sed, rhoncus id eros. Sed et tortor sit amet elit tincidunt accumsan ut sit amet augue. Nulla tortor erat, condimentum sed fermentum quis, feugiat iaculis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie lectus eget libero interdum ornare. '),
(25, '��\0', 'andres.o.burgos.9', '748ba128f05d4bbf87093464582d8d0144c50bc0', '75765e4a29', 'pecheandres@hotmail.com', NULL, 'd8ab96d995d6d000d0dc9b15f89dcedc3e52ed63', 1355265691, NULL, 1351296101, 1351296344, 1, 'andres.o.burgos.9', 0, '0', 'Bogotá, Colombia', NULL, 0, 0, 'Andres', 'Burgos', '1982-01-27', 1, '645747772', NULL, NULL),
(26, '��L', 'oscar', '7ce1c5becaa71b04dbfdd22177ab2575b49cd201', '0c12fbed2b', 'oscar.caranton@imaginamos.com.co', NULL, NULL, NULL, '4fcc850b612eb7c291ddbd41e1747a2dc291efb8', 1354216044, 1354629416, 1, 'xXBr3iTn3rXx', 0, '0', 'bogota', 'Femenino', 0, 0, 'oscar', 'caranton', '1991-05-03', 2320897, '', 'oscar/2bc4c65f7dc4229334ac06e2e67acb36.jpg', 'Pw'),
(27, '��4�', 'mayris71', 'a9f606ba0b3296a55d55c25b9a9dbd627edd21b7', '98d3edd663', 'mayris_71@hotmail.com', NULL, NULL, NULL, '6d17bb290bde53ae584f640bdc11b3c540461165', 1354507222, 1354507223, 1, 'mayris71', 0, '0', 'Mosquera, Cundinamarca', NULL, 0, 0, 'Mayra', 'Cortes', '1991-01-06', 1, '1093903133', NULL, NULL),
(28, '�v[a', 'raffiky', '559d204907495d90c90f68155d8f02b7b0fd077f', '031c532985', 'therafff@hotmail.com', NULL, NULL, NULL, '64bc0f7b1e9135cbb2450bdd0a9f278dc9cef6ee', 1354576128, 1355783966, 1, 'raffiky', 0, '0', 'Bogotá, Colombia', 'Masculino', 0, 0, 'Raffiky', 'Nieto', '1989-02-09', 1, '561090354', NULL, ''),
(29, '���', 'aaaa', 'afdc7d261be1ed9961daf4c1246b4cf81438d9e5', '885822d817', 'ads@asdas.com', NULL, NULL, NULL, '5966c808950da9b55479127d74a714e6c5b36703', 1354704591, 1354704592, 1, 'asdsa', 0, '0', 'Saba', NULL, 0, 0, 'adsa', 'asdas', '2012-11-29', 123123, '', NULL, NULL),
(30, '��L', 'Carlos Gómez', 'acd49569a7eee0d1bb7f1111fffb0f3d162c7a5e', '2167730057', 'carlos.gomez@imaginamos.com', NULL, NULL, NULL, 'a172b0892ee7518eb1d2a5c2f0fc49c164852f5f', 1355153973, 1355761395, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '1900-01-01', 0, NULL, NULL, NULL),
(31, '�� ', 'felipe.jaramillo.75054', '55dcfb7c9cca29f107b2e07a4f6866e395da5207', '827d271233', 'pipaisa@hotmail.com', NULL, NULL, NULL, 'aa7b76abd704997187b67f93e08e296559f66756', 1355266934, 1355266935, 1, 'felipe.jaramillo.75054', 0, '0', 'Bogotá, Colombia', NULL, 0, 0, 'Felipe', 'Jaramillo', '1985-07-10', 1, '510054693', NULL, NULL),
(32, '��L', 'Rafa', '861094161b414667e5e1a636cf198984ce530805', '337f242218', 'rafael@inshaka.com', NULL, NULL, NULL, '6b826aee43279bc1998c21b8c85bca715111bb4c', 1355518729, 1355777699, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '1900-01-01', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_audiciones_aplicaciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_audiciones_aplicaciones`;
CREATE TABLE IF NOT EXISTS `cms_users_audiciones_aplicaciones` (
  `user_id` int(10) unsigned NOT NULL,
  `audiciones_aplicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`audiciones_aplicacion_id`),
  KEY `fk_cms_users_has_cms_audiciones_aplicaciones_cms_audiciones_a1` (`audiciones_aplicacion_id`),
  KEY `fk_cms_users_has_cms_audiciones_aplicaciones_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `cms_users_audiciones_aplicaciones`:
--   `audiciones_aplicacion_id`
--       `cms_audiciones_aplicaciones` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_clasificados_aplicaciones`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_clasificados_aplicaciones`;
CREATE TABLE IF NOT EXISTS `cms_users_clasificados_aplicaciones` (
  `clasificados_aplicacion_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`clasificados_aplicacion_id`,`user_id`),
  KEY `fk_cms_clasificados_aplicaciones_has_cms_users_cms_users1` (`user_id`),
  KEY `fk_cms_clasificados_aplicaciones_has_cms_users_cms_clasificad1` (`clasificados_aplicacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `cms_users_clasificados_aplicaciones`:
--   `clasificados_aplicacion_id`
--       `cms_clasificados_aplicaciones` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_comments`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_comments`;
CREATE TABLE IF NOT EXISTS `cms_users_comments` (
  `user_id` int(10) unsigned NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`comment_id`),
  KEY `fk_cms_users_has_cms_users_comments_cms_users_comments1` (`comment_id`),
  KEY `fk_cms_users_has_cms_users_comments_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `cms_users_comments`:
--   `user_id`
--       `cms_users` -> `id`
--   `comment_id`
--       `cms_comments` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_comments`
--

INSERT INTO `cms_users_comments` (`user_id`, `comment_id`) VALUES
(17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_groups`;
CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- RELACIONES PARA LA TABLA `cms_users_groups`:
--   `group_id`
--       `cms_groups` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 0000000005, 1),
(17, 0000000017, 3),
(24, 0000000024, 3),
(25, 0000000025, 3),
(26, 0000000026, 3),
(27, 0000000027, 3),
(28, 0000000028, 3),
(29, 0000000029, 3),
(30, 0000000030, 2),
(31, 0000000031, 3),
(32, 0000000032, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_images`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_images`;
CREATE TABLE IF NOT EXISTS `cms_users_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `image` text,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_images_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- RELACIONES PARA LA TABLA `cms_users_images`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_images`
--

INSERT INTO `cms_users_images` (`id`, `user_id`, `image`, `name`) VALUES
(5, 24, 'rigobcastro/users_images/1b15dded18e1e778ffabb91ce83b1e07.jpeg', 'Otro'),
(6, 24, 'rigobcastro/users_images/012bb8dd902d7f02638ed0df8d463f8e.jpeg', 'Guardianes'),
(7, 24, 'rigobcastro/users_images/b8150c729a2b7bcd084a4ba082c89ba7.jpg', 'Adasd'),
(8, 24, 'rigobcastro/users_images/89fb6a85b234f8febc72cc6fdb186522.JPG', 'purity');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_musical_genders`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_musical_genders`;
CREATE TABLE IF NOT EXISTS `cms_users_musical_genders` (
  `user_id` int(10) unsigned NOT NULL,
  `musical_gender_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`musical_gender_id`),
  KEY `fk_cms_users_has_cms_musical_genders_cms_musical_genders1` (`musical_gender_id`),
  KEY `fk_cms_users_has_cms_musical_genders_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `cms_users_musical_genders`:
--   `musical_gender_id`
--       `cms_musical_genders` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_musical_genders`
--

INSERT INTO `cms_users_musical_genders` (`user_id`, `musical_gender_id`) VALUES
(24, 12),
(24, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_personal_info`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_personal_info`;
CREATE TABLE IF NOT EXISTS `cms_users_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `nivel_experiencia` varchar(255) DEFAULT 'Sin definir',
  `anos_experiencia` varchar(255) DEFAULT 'Sin definir',
  `numero_conciertos` varchar(255) DEFAULT '0',
  `influencias` text,
  `integrantes` text,
  `musico_sesion` tinyint(1) DEFAULT '0' COMMENT 'Es músico de sesión?',
  `necesitas_band` tinyint(1) DEFAULT '0',
  `busca_musicos` tinyint(1) DEFAULT '0',
  `ubicacion` text,
  `sitio_web` text,
  `disquera` text,
  `manager` text,
  `proximos_toques` text COMMENT 'Fechas de los próximos toques',
  `social_facebook` text,
  `social_twitter` text,
  `social_youtube` text,
  `social_AIM` text,
  `social_blogger` text,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_personal_info_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- RELACIONES PARA LA TABLA `cms_users_personal_info`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_personal_info`
--

INSERT INTO `cms_users_personal_info` (`id`, `user_id`, `nivel_experiencia`, `anos_experiencia`, `numero_conciertos`, `influencias`, `integrantes`, `musico_sesion`, `necesitas_band`, `busca_musicos`, `ubicacion`, `sitio_web`, `disquera`, `manager`, `proximos_toques`, `social_facebook`, `social_twitter`, `social_youtube`, `social_AIM`, `social_blogger`) VALUES
(3, 24, 'intermedio', '0-2', '0-10', NULL, NULL, 0, 1, 0, 'Bogota', '', '', '', NULL, 'http://www.facebook.com/rigobcastro', '', '', '', ''),
(4, 25, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'http://www.facebook.com/andres.o.burgos.9', NULL, NULL, NULL, NULL),
(5, 26, 'Sin definir', 'Sin definir', '0', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 27, 'Sin definir', 'Sin definir', '0', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'http://www.facebook.com/mayris71', NULL, NULL, NULL, NULL),
(7, 28, 'Sin definir', 'Sin definir', '0', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'http://www.facebook.com/raffiky', NULL, NULL, NULL, NULL),
(8, 29, 'Sin definir', 'Sin definir', '0', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 31, 'Sin definir', 'Sin definir', '0', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'http://www.facebook.com/felipe.jaramillo.75054', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_photos`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_photos`;
CREATE TABLE IF NOT EXISTS `cms_users_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `image` text,
  `thumb` text,
  `uploaded_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_photos_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- RELACIONES PARA LA TABLA `cms_users_photos`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_photos`
--

INSERT INTO `cms_users_photos` (`id`, `user_id`, `image`, `thumb`, `uploaded_on`) VALUES
(1, 24, 'rigobcastro/photos/p17ecvjfvq52sc0sotg2f01puj3.jpeg', 'rigobcastro/photos/t_p17ecvjfvq52sc0sotg2f01puj3.jpeg', '2012-12-14 15:12:49'),
(2, 24, 'rigobcastro/photos/p17ed035aqcp97bp5d9fvj1stb3.jpeg', 'rigobcastro/photos/t_p17ed035aqcp97bp5d9fvj1stb3.jpeg', '2012-12-14 15:21:29'),
(3, 24, 'rigobcastro/photos/p17ed05nji1tcs2cb1o361slmjnc3.jpeg', 'rigobcastro/photos/t_p17ed05nji1tcs2cb1o361slmjnc3.jpeg', '2012-12-14 15:22:47'),
(4, 24, 'rigobcastro/photos/p17ed06i5km7l115214laosh1mek3.jpeg', 'rigobcastro/photos/t_p17ed06i5km7l115214laosh1mek3.jpeg', '2012-12-14 15:23:16'),
(5, 24, 'rigobcastro/photos/p17ed0772b1eea17gq1ph1vtt10e73.jpeg', 'rigobcastro/photos/t_p17ed0772b1eea17gq1ph1vtt10e73.jpeg', '2012-12-14 15:23:35'),
(6, 24, 'rigobcastro/photos/p17ed086c5363d5bbuh1rim1jp43.jpg', 'rigobcastro/photos/t_p17ed086c5363d5bbuh1rim1jp43.jpg', '2012-12-14 15:24:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_shows`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_shows`;
CREATE TABLE IF NOT EXISTS `cms_users_shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `city` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- RELACIONES PARA LA TABLA `cms_users_shows`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_shows`
--

INSERT INTO `cms_users_shows` (`id`, `date`, `city`, `place`, `user_id`) VALUES
(1, '2012-11-01 07:16:00', 'Bogotá', 'Plaza de mercado', 24),
(2, '2012-11-21 10:34:00', 'Bogotá', 'Oficina', 24),
(3, '2012-11-30 12:00:00', 'Cali', 'Bar', 24),
(4, '2012-12-21 17:24:00', 'Bogota', 'La Tea', 28),
(5, '2012-12-17 00:00:00', 'Bogotá', 'Cra 19 A # 90 - 13 Edicio 90 oficinas Imaginamos', 24),
(6, '2012-12-14 12:43:00', 'Bogota', 'asdasd', 24),
(8, '2012-12-19 00:00:00', 'cali', 'Cra 1 ra No 1', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_songs`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_songs`;
CREATE TABLE IF NOT EXISTS `cms_users_songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `created_on` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_songs_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- RELACIONES PARA LA TABLA `cms_users_songs`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_songs`
--

INSERT INTO `cms_users_songs` (`id`, `url`, `created_on`, `user_id`) VALUES
(20, 'http://soundcloud.com/universalmusicenterprises/stan', '2012-11-02 13:55:21', 24),
(21, 'http://google.com', '2012-11-02 18:25:06', 24),
(22, 'http://soundcloud.com/rigobcastro/armonia-del-silencio', '2012-12-11 18:08:13', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_talents`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_talents`;
CREATE TABLE IF NOT EXISTS `cms_users_talents` (
  `user_id` int(10) unsigned NOT NULL,
  `talent_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`talent_id`),
  KEY `fk_cms_users_has_cms_talents_cms_talents1` (`talent_id`),
  KEY `fk_cms_users_has_cms_talents_cms_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `cms_users_talents`:
--   `talent_id`
--       `cms_talents` -> `id`
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_talents`
--

INSERT INTO `cms_users_talents` (`user_id`, `talent_id`) VALUES
(24, 40),
(24, 63),
(24, 64),
(24, 67),
(24, 68);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_videos`
--
-- Creación: 17-05-2013 a las 20:53:34
--

DROP TABLE IF EXISTS `cms_users_videos`;
CREATE TABLE IF NOT EXISTS `cms_users_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `url` text,
  `uploaded_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_photos_cms_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- RELACIONES PARA LA TABLA `cms_users_videos`:
--   `user_id`
--       `cms_users` -> `id`
--

--
-- Volcado de datos para la tabla `cms_users_videos`
--

INSERT INTO `cms_users_videos` (`id`, `user_id`, `url`, `uploaded_on`) VALUES
(1, 24, 'http://www.youtube.com/watch?v=zXuC5UF06ls', '2012-12-14 15:52:46'),
(2, 24, 'http://www.youtube.com/watch?v=ev5OHW3H3to', '2012-12-14 15:55:20'),
(3, 24, 'http://vimeo.com/39763162', '2012-12-14 16:13:48'),
(4, 24, 'http://vimeo.com/41332658', '2012-12-14 16:18:24'),
(5, 24, 'http://vimeo.com/10927445', '2012-12-17 20:28:51'),
(6, 24, 'http://vimeo.com/50569891', '2012-12-18 21:50:04');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_audiciones`
--
ALTER TABLE `cms_audiciones`
  ADD CONSTRAINT `fk_cms_audiciones_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_audiciones_aplicaciones`
--
ALTER TABLE `cms_audiciones_aplicaciones`
  ADD CONSTRAINT `fk_cms_audiciones_aplicaciones_cms_audiciones1` FOREIGN KEY (`audicion_id`) REFERENCES `cms_audiciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands`
--
ALTER TABLE `cms_bands`
  ADD CONSTRAINT `fk_cms_bands_cms_musical_genders1` FOREIGN KEY (`musical_gender_id`) REFERENCES `cms_musical_genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_cms_stages1213213` FOREIGN KEY (`stage_id`) REFERENCES `cms_stages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_cms_users1232` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands_instruments`
--
ALTER TABLE `cms_bands_instruments`
  ADD CONSTRAINT `fk_cms_bands_instruments_cms_bands1` FOREIGN KEY (`band_id`) REFERENCES `cms_bands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_instruments_cms_instruments1` FOREIGN KEY (`instrument_id`) REFERENCES `cms_instruments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_bands_instruments_users`
--
ALTER TABLE `cms_bands_instruments_users`
  ADD CONSTRAINT `fk_cms_bands_instruments_users_cms_bands_instruments1` FOREIGN KEY (`bands_instrument_id`) REFERENCES `cms_bands_instruments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_bands_instruments_users_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_clasificados`
--
ALTER TABLE `cms_clasificados`
  ADD CONSTRAINT `fk_cms_clasificados_cms_clasificados_categorias1` FOREIGN KEY (`clasificados_categoria_id`) REFERENCES `cms_clasificados_categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_clasificados_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_clasificados_aplicaciones`
--
ALTER TABLE `cms_clasificados_aplicaciones`
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_cms_clasificados1` FOREIGN KEY (`clasificado_id`) REFERENCES `cms_clasificados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_comments`
--
ALTER TABLE `cms_comments`
  ADD CONSTRAINT `fk_cms_comments_cms_users1` FOREIGN KEY (`user_creator_id`) REFERENCES `cms_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_directorio`
--
ALTER TABLE `cms_directorio`
  ADD CONSTRAINT `fk_cms_directorio_cms_directorio_categorias1` FOREIGN KEY (`directorio_categoria_id`) REFERENCES `cms_directorio_categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_directorio_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_directorio_adicionales`
--
ALTER TABLE `cms_directorio_adicionales`
  ADD CONSTRAINT `fk_cms_directorio_adicionales_cms_directorio1` FOREIGN KEY (`directorio_id`) REFERENCES `cms_directorio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_directorio_images`
--
ALTER TABLE `cms_directorio_images`
  ADD CONSTRAINT `fk_cms_directorio_images_cms_directorio1` FOREIGN KEY (`directorio_id`) REFERENCES `cms_directorio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_news_images`
--
ALTER TABLE `cms_news_images`
  ADD CONSTRAINT `fk_cms_news_images_cms_news1` FOREIGN KEY (`news_id`) REFERENCES `cms_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_talents`
--
ALTER TABLE `cms_talents`
  ADD CONSTRAINT `fk_cms_talents_cms_talents_categories1` FOREIGN KEY (`talents_category_id`) REFERENCES `cms_talents_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_audiciones_aplicaciones`
--
ALTER TABLE `cms_users_audiciones_aplicaciones`
  ADD CONSTRAINT `fk_cms_users_has_cms_audiciones_aplicaciones_cms_audiciones_a1` FOREIGN KEY (`audiciones_aplicacion_id`) REFERENCES `cms_audiciones_aplicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_audiciones_aplicaciones_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_clasificados_aplicaciones`
--
ALTER TABLE `cms_users_clasificados_aplicaciones`
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_has_cms_users_cms_clasificad1` FOREIGN KEY (`clasificados_aplicacion_id`) REFERENCES `cms_clasificados_aplicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_clasificados_aplicaciones_has_cms_users_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_comments`
--
ALTER TABLE `cms_users_comments`
  ADD CONSTRAINT `fk_cms_users_has_cms_users_comments_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_users_comments_cms_users_comments1` FOREIGN KEY (`comment_id`) REFERENCES `cms_comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_images`
--
ALTER TABLE `cms_users_images`
  ADD CONSTRAINT `fk_cms_users_images_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_musical_genders`
--
ALTER TABLE `cms_users_musical_genders`
  ADD CONSTRAINT `fk_cms_users_has_cms_musical_genders_cms_musical_genders1` FOREIGN KEY (`musical_gender_id`) REFERENCES `cms_musical_genders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_users_has_cms_musical_genders_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_personal_info`
--
ALTER TABLE `cms_users_personal_info`
  ADD CONSTRAINT `fk_cms_users_personal_info_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_photos`
--
ALTER TABLE `cms_users_photos`
  ADD CONSTRAINT `fk_cms_users_photos_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_shows`
--
ALTER TABLE `cms_users_shows`
  ADD CONSTRAINT `fk_cms_users_songs_cms_users10` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_songs`
--
ALTER TABLE `cms_users_songs`
  ADD CONSTRAINT `fk_cms_users_songs_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_talents`
--
ALTER TABLE `cms_users_talents`
  ADD CONSTRAINT `fk_cms_users_has_cms_talents_cms_talents1` FOREIGN KEY (`talent_id`) REFERENCES `cms_talents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_has_cms_talents_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_users_videos`
--
ALTER TABLE `cms_users_videos`
  ADD CONSTRAINT `fk_cms_users_photos_cms_users10` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
