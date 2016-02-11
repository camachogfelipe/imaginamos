-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2013 a las 16:45:12
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
-- Base de datos: `JABALIES_modostore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--

DROP TABLE IF EXISTS `cms_api_oauth`;
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
-- Estructura de tabla para la tabla `cms_barner`
--

DROP TABLE IF EXISTS `cms_barner`;
CREATE TABLE IF NOT EXISTS `cms_barner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_negro` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_azul` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_gris` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_trtamiento_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_barner`
--

INSERT INTO `cms_barner` (`id`, `titulo_negro`, `titulo_azul`, `titulo_gris`, `imagen_id`) VALUES
(1, ' 2 LOREM IPSUM DOLOR', 'ENVÍO EN PARTES', 'CONSETUR', 28),
(2, 'titulo 1', 'titulo 2', 'titulo 3', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_caracteristica`
--

DROP TABLE IF EXISTS `cms_caracteristica`;
CREATE TABLE IF NOT EXISTS `cms_caracteristica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_caracteristicas_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_caracteristica`
--

INSERT INTO `cms_caracteristica` (`id`, `valor`, `tipo`, `producto_id`) VALUES
(1, '30 Cm', 'Largo', 4),
(2, '2mts', 'Alto', 4),
(3, '20cm', 'Ancho', 3),
(4, '2mts', 'Alto', 3),
(5, '120 cm', 'Alto', 6),
(6, 'Termodinamico con curvatura muy preciso', 'tipo de espejo', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categoria`
--

DROP TABLE IF EXISTS `cms_categoria`;
CREATE TABLE IF NOT EXISTS `cms_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias_cms_imagen1_idx` (`imagen_id`),
  KEY `fk_cms_categoria_cms_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `cms_categoria`
--

INSERT INTO `cms_categoria` (`id`, `titulo`, `imagen_id`, `categoria_id`) VALUES
(6, 'Motor', 29, NULL),
(17, 'Cajas y Transmisión', 37, NULL),
(18, 'Suspensión y Frenos', 38, NULL),
(19, 'Carrocería y Accesorios', 39, NULL),
(20, 'Eléctricos e Inyección', 40, NULL),
(21, 'Lorem adpricing', 46, 20),
(22, 'Lorem adpricing', 46, 19),
(23, 'Lorem adpricing', 46, 18),
(24, 'Lorem adpricing', 46, 17),
(25, 'Lorem adpricing', 46, 6),
(26, 'Lorem adpricing', 46, 19),
(27, 'Subcategoría de prueba', 59, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

DROP TABLE IF EXISTS `cms_contacto`;
CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(1, 'Carrera 16 No. 70 - 31, Edificio Lorem', '(0571) 513-1818', '(0571) 513-4569', '(57) 301-338-0164', 'info@modostore.com.co', 'Pereira - Colombia', 4.809298, -75.761256);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_departamento`
--

DROP TABLE IF EXISTS `cms_departamento`;
CREATE TABLE IF NOT EXISTS `cms_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `cms_departamento`
--

INSERT INTO `cms_departamento` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_destino`
--

DROP TABLE IF EXISTS `cms_destino`;
CREATE TABLE IF NOT EXISTS `cms_destino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_destino`
--

INSERT INTO `cms_destino` (`id`, `lugar`, `valor`) VALUES
(1, 'Bogotá', 0),
(2, 'Cali', 0),
(3, 'Cartagena', 0),
(4, 'Bucaramanga', 0),
(5, 'Medellín', 0),
(6, 'Girardot', 150000),
(7, 'Melgar', 20000),
(8, 'Popayán', 1000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_empresa`
--

DROP TABLE IF EXISTS `cms_empresa`;
CREATE TABLE IF NOT EXISTS `cms_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `historia` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mision_vision` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_acerca_de_cms_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_empresa`
--

INSERT INTO `cms_empresa` (`id`, `historia`, `mision_vision`, `texto`, `imagen_id`) VALUES
(1, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n\r\n<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

DROP TABLE IF EXISTS `cms_groups`;
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

DROP TABLE IF EXISTS `cms_groups_permissions`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `cms_groups_permissions`
--

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 1, 1, 1),
(6, 1, 2, 1, 1, 1, 1),
(7, 2, 1, 1, 1, 1, 1),
(8, 2, 2, 1, 1, 1, 1),
(9, 1, 3, 1, 1, 1, 1),
(10, 1, 4, 1, 1, 1, 1),
(11, 1, 5, 1, 1, 1, 1),
(12, 1, 6, 1, 1, 1, 1),
(13, 1, 7, 1, 1, 1, 1),
(14, 1, 8, 1, 1, 1, 1),
(15, 1, 9, 1, 1, 1, 1),
(16, 1, 10, 1, 1, 1, 1),
(17, 1, 11, 1, 1, 1, 1),
(18, 1, 12, 1, 1, 1, 1),
(19, 1, 13, 1, 1, 1, 1),
(20, 1, 14, 1, 1, 1, 1),
(21, 1, 15, 1, 1, 1, 1),
(22, 1, 16, 1, 1, 1, 1),
(23, 1, 17, 1, 1, 1, 1),
(24, 1, 18, 1, 1, 1, 1),
(25, 1, 19, 1, 1, 1, 1),
(26, 1, 20, 1, 1, 1, 1),
(27, 1, 21, 1, 1, 1, 1),
(28, 1, 22, 1, 1, 1, 1),
(29, 1, 23, 1, 1, 1, 1),
(30, 1, 24, 1, 1, 1, 1),
(31, 1, 25, 1, 1, 1, 1),
(32, 1, 26, 1, 1, 1, 1),
(33, 1, 27, 1, 1, 1, 1),
(34, 1, 28, 1, 1, 1, 1),
(35, 1, 29, 1, 1, 1, 1),
(36, 1, 30, 1, 1, 1, 1),
(37, 2, 3, 0, 0, 0, 0),
(38, 2, 4, 0, 0, 0, 0),
(39, 2, 5, 1, 1, 1, 1),
(40, 2, 6, 1, 1, 1, 1),
(41, 2, 7, 1, 0, 0, 0),
(42, 2, 8, 1, 0, 0, 0),
(43, 2, 9, 1, 0, 0, 0),
(44, 2, 10, 1, 0, 1, 0),
(45, 2, 11, 1, 1, 1, 1),
(46, 2, 12, 0, 0, 0, 0),
(47, 2, 13, 0, 0, 0, 0),
(48, 2, 14, 0, 0, 0, 0),
(49, 2, 15, 1, 1, 1, 1),
(50, 2, 16, 1, 0, 1, 0),
(51, 2, 17, 1, 1, 1, 1),
(52, 2, 18, 1, 1, 1, 1),
(53, 2, 19, 1, 1, 1, 1),
(54, 2, 20, 0, 0, 0, 0),
(55, 2, 21, 1, 1, 1, 1),
(56, 2, 22, 0, 0, 0, 0),
(57, 2, 23, 1, 1, 1, 1),
(58, 2, 24, 1, 1, 1, 1),
(59, 2, 25, 1, 1, 1, 1),
(60, 2, 26, 1, 1, 1, 1),
(61, 2, 27, 1, 1, 1, 1),
(62, 2, 28, 1, 1, 1, 1),
(63, 2, 29, 1, 1, 1, 1),
(64, 2, 30, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen`
--

DROP TABLE IF EXISTS `cms_imagen`;
CREATE TABLE IF NOT EXISTS `cms_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `cms_imagen`
--

INSERT INTO `cms_imagen` (`id`, `path`, `name`) VALUES
(28, './uploads/68fdcee063b235a1dd84326945a783d7.jpg', NULL),
(29, './uploads/4a7e3a28e0d328be434552f5211917c4.png', NULL),
(30, './uploads/aa783035d8a7cae68a3f55dc49e859c7.png', NULL),
(31, './uploads/5bc1f7b49c212b74ef4ef5eee1e71760.png', NULL),
(32, './uploads/be0fe9ab795038fb709651ce5457f359.png', NULL),
(33, './uploads/14abdac88bf97272c50795dc0d74d54c.png', NULL),
(34, './uploads/8f700cd5c45bbe5b870e31f845714467.png', NULL),
(35, './uploads/5a4798edef89e69a140a91290f52e7cb.png', NULL),
(36, './uploads/77ceb7f830e2a4c8b5b1e4575be9206b.png', NULL),
(37, './uploads/79a30d7fb1edd0448d5d25aa6ae2ee46.png', NULL),
(38, './uploads/1d5965408ba82129e038cbc81adf90ab.png', NULL),
(39, './uploads/ffb3eb3562933a5f3630abdf92f3ce0b.png', NULL),
(40, './uploads/14e08d9b8bf8a440250a04f90bb85a24.png', NULL),
(41, './uploads/504690010d3e88be064d09c86cc8c1f8.jpg', NULL),
(42, './uploads/2201c253caf3a58454848bf4b3cafb9e.jpg', NULL),
(43, './uploads/27509d6c09857719dfd1fc8257e9a482.jpg', NULL),
(44, './uploads/4b32a74d28345d28a04aa97eb62af524.jpg', NULL),
(45, './uploads/8664989996b941c6d92e18e5ddd17e16.jpg', NULL),
(46, './uploads/95f8102bdb1044d2261691c29cf21821.jpg', NULL),
(47, './uploads/24bb40947d4751e0bfc7bbf0440aee86.jpg', NULL),
(48, './uploads/9f755404a249073f09e356f32e79a927.jpg', NULL),
(49, './uploads/d44550903cfade465645abce5ec26e8e.jpg', NULL),
(50, './uploads/aaf35c1a29fcc45d6f1cdd46783a6413.jpg', NULL),
(51, './uploads/16223d21c59c53032a58feb35009e541.jpg', NULL),
(52, './uploads/c708446a119f0d136b6534382a92a8c3.jpg', NULL),
(53, './uploads/18defe4869d174fdda37cff36ebb5703.jpg', NULL),
(54, './uploads/3f88e84bf5267b0d30ad4d91f02c320a.jpg', NULL),
(55, './uploads/b168592f2799c9d60fc3eb6516813e6b.jpg', NULL),
(56, './uploads/75656b85aed3e3b66e6f8664396de178.jpg', NULL),
(57, './uploads/7cf82c4c7959748c3a5b24265f3ff67a.jpg', NULL),
(58, './uploads/a4725861a39b56cdfa3ef8f05a5d971a.jpg', NULL),
(59, './uploads/2f108f589b8919b221097ccdf0791ea4.jpg', NULL),
(60, './uploads/3a8f9d3dba779f3c1701290bc8801262.jpg', NULL),
(61, './uploads/f4acb1905ed7e4ab8e0635648076c10a.jpg', NULL),
(62, './uploads/313989bd4f4f48783760fec338eb1e0d.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen_producto`
--

DROP TABLE IF EXISTS `cms_imagen_producto`;
CREATE TABLE IF NOT EXISTS `cms_imagen_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_imagen_producto_cms_imagen1_idx` (`imagen_id`),
  KEY `fk_cms_imagen_producto_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_imagen_producto`
--

INSERT INTO `cms_imagen_producto` (`id`, `imagen_id`, `producto_id`) VALUES
(1, 47, 4),
(2, 48, 3),
(3, 49, 2),
(4, 50, 4),
(5, 60, 6),
(6, 62, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_informacion`
--

DROP TABLE IF EXISTS `cms_informacion`;
CREATE TABLE IF NOT EXISTS `cms_informacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_informacion`
--

INSERT INTO `cms_informacion` (`id`, `titulo`, `texto`) VALUES
(1, 'Politica de envío', '<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n'),
(2, 'Garantía de producto', '<div class="con-grl-tx">\r\n<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>\r\n'),
(3, 'Protección de datos', '<div class="con-grl-tx">\r\n<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>\r\n'),
(4, 'Pagos', '<div class="con-grl-tx">\r\n<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>\r\n'),
(5, 'Términos y condiciones', '<div class="con-grl-tx">\r\n<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>\r\n'),
(6, '¿Como comprar?', '<div class="con-grl-tx">\r\n<p><strong>1.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>2.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>3.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>4.</strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

DROP TABLE IF EXISTS `cms_login_attempts`;
CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_marca`
--

DROP TABLE IF EXISTS `cms_marca`;
CREATE TABLE IF NOT EXISTS `cms_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logos_cms_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_marca`
--

INSERT INTO `cms_marca` (`id`, `nombre`, `imagen_id`) VALUES
(1, 'HYUNDAI', 41),
(2, 'Chevrolet', 55),
(3, 'Kia Motors', 58),
(4, 'Volvo', 61);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

DROP TABLE IF EXISTS `cms_menu`;
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
-- Estructura de tabla para la tabla `cms_modelo`
--

DROP TABLE IF EXISTS `cms_modelo`;
CREATE TABLE IF NOT EXISTS `cms_modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `marca_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_modelos_cms_marcas1_idx` (`marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cms_modelo`
--

INSERT INTO `cms_modelo` (`id`, `nombre`, `marca_id`) VALUES
(1, '2007', 1),
(2, '2008', 1),
(3, '2009', 1),
(4, '2010', 1),
(5, '2011', 1),
(6, '2012', 1),
(7, '2013', 1),
(8, '2014', 1),
(9, '2012', 2),
(10, 'Sorento - R', 3),
(11, 'V40', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--

DROP TABLE IF EXISTS `cms_oauth_config`;
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
-- Estructura de tabla para la tabla `cms_patrocinador`
--

DROP TABLE IF EXISTS `cms_patrocinador`;
CREATE TABLE IF NOT EXISTS `cms_patrocinador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_patrocinador_cms_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_patrocinador`
--

INSERT INTO `cms_patrocinador` (`id`, `imagen_id`) VALUES
(1, 51),
(2, 52),
(3, 53),
(4, 54),
(5, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permissions`
--

DROP TABLE IF EXISTS `cms_permissions`;
CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('module','function','component') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `cms_permissions`
--

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module'),
(3, 'admin', NULL, 'module'),
(4, 'backup_db', NULL, 'module'),
(5, 'barners', 'barner', 'module'),
(6, 'caracteristicas', 'caracteristica', 'module'),
(7, 'categorias', 'categoria', 'module'),
(8, 'contactos', NULL, 'module'),
(9, 'dashboard', NULL, 'module'),
(10, 'empresas', 'empresa', 'module'),
(11, 'fletes', 'destino', 'module'),
(12, 'generator_front_modules', NULL, 'module'),
(13, 'generator_models', NULL, 'module'),
(14, 'generator_modules', NULL, 'module'),
(15, 'imagen_productos', 'imagen_producto', 'module'),
(16, 'informacions', 'informacion', 'module'),
(17, 'login', NULL, 'module'),
(18, 'logos', 'patrocinador', 'module'),
(19, 'marcas', 'marca', 'module'),
(20, 'menus', 'menu', 'module'),
(21, 'modelos', 'modelo', 'module'),
(22, 'perms', NULL, 'module'),
(23, 'productos', 'producto', 'module'),
(24, 'producto_modelos', 'producto_modelo', 'module'),
(25, 'promociones', 'promociones', 'module'),
(26, 'punto_diferencias', 'punto_diferencia', 'module'),
(27, 'subcategorias', 'categoria', 'module'),
(28, 'users', NULL, 'module'),
(29, 'valors', 'valor', 'module'),
(30, 'venta_productos', 'venta', 'module');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto`
--

DROP TABLE IF EXISTS `cms_producto`;
CREATE TABLE IF NOT EXISTS `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(47) COLLATE utf8_unicode_ci NOT NULL COMMENT 'hola_mundo',
  `nombre` varchar(154) COLLATE utf8_unicode_ci NOT NULL COMMENT 'holamundo',
  `marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(370) COLLATE utf8_unicode_ci DEFAULT NULL,
  `garantia` varchar(370) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiempo_entrega` varchar(370) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` double NOT NULL,
  `recomendado` tinyint(4) DEFAULT '0',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_producto_cms_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_producto`
--

INSERT INTO `cms_producto` (`id`, `tipo`, `nombre`, `marca`, `descripcion`, `garantia`, `tiempo_entrega`, `precio`, `recomendado`, `fecha`, `categoria_id`) VALUES
(1, 'Motor', 'Motor Disel', 'BMW', 'es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino', 'es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino', 'es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino', 2200, 0, '2013-12-03 20:23:48', 24),
(2, 'Producto', 'Producto 2', 'Chevrole', 'holamundo', 'holamundo', 'holamundo', 320, 0, '2013-12-03 20:40:53', 26),
(3, 'MOtor', 'Producto 3', 'Marca 3', 'olamundo', 'olamundo', 'olamundo', 1, 0, '2013-12-03 21:02:11', 23),
(4, 'NN', 'Motor NXM', 'NN', 'Holamundo', 'Holamundo', 'Holamundo', 10000000, 1, '2013-12-03 21:36:51', 25),
(5, 'NOMS', 'Producto N', 'NMS', 'holamunodddddddddddddddddddddddd', 'holamunodddddddddddddddddddddddd', 'holamunodddddddddddddddddddddddd', 20000, 0, '2013-12-10 13:56:55', 24),
(6, 'Repuesto chumacera del bomper', 'Producto de prueba', 'Kia', 'Descripción del producto de prueba', '3 años bajo condiciones normales de uso.', 'dos meses bajo pedido', 135000, 0, '2013-12-11 19:34:22', 27),
(7, 'Espejo ', 'Respuesto de volvo', 'Volvo', 'Descripción', 'muchos días, meses y años', 'inmediata', 450000, 0, '2013-12-11 19:45:16', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto_modelo`
--

DROP TABLE IF EXISTS `cms_producto_modelo`;
CREATE TABLE IF NOT EXISTS `cms_producto_modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `modelo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_producto_has_cms_modelos_cms_modelos1_idx` (`modelo_id`),
  KEY `fk_cms_producto_has_cms_modelos_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cms_producto_modelo`
--

INSERT INTO `cms_producto_modelo` (`id`, `producto_id`, `modelo_id`) VALUES
(1, 3, 7),
(2, 3, 6),
(3, 3, 5),
(4, 3, 4),
(5, 4, 8),
(6, 4, 6),
(7, 4, 5),
(8, 4, 4),
(9, 5, 9),
(10, 5, 7),
(11, 5, 4),
(12, 5, 3),
(13, 6, 10),
(14, 7, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto_venta`
--

DROP TABLE IF EXISTS `cms_producto_venta`;
CREATE TABLE IF NOT EXISTS `cms_producto_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_producto_venta_cms_venta1_idx` (`venta_id`),
  KEY `fk_cms_producto_venta_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_producto_venta`
--

INSERT INTO `cms_producto_venta` (`id`, `venta_id`, `producto_id`) VALUES
(1, 1, 2),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 5, 4),
(6, 6, 4),
(7, 7, 4),
(8, 8, 4),
(9, 9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_promociones`
--

DROP TABLE IF EXISTS `cms_promociones`;
CREATE TABLE IF NOT EXISTS `cms_promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `antes` double NOT NULL,
  `ahora` double NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promociones_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_promociones`
--

INSERT INTO `cms_promociones` (`id`, `antes`, `ahora`, `producto_id`) VALUES
(1, 100000, 500000.2, 4),
(2, 1000000, 800000.22, 3),
(3, 135000, 120000, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_punto_diferencia`
--

DROP TABLE IF EXISTS `cms_punto_diferencia`;
CREATE TABLE IF NOT EXISTS `cms_punto_diferencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_punto_diferencia`
--

INSERT INTO `cms_punto_diferencia` (`id`, `texto`) VALUES
(1, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.'),
(2, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.'),
(3, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--

DROP TABLE IF EXISTS `cms_redes_sociales`;
CREATE TABLE IF NOT EXISTS `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `red_social` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_red` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_redes_sociales`
--

INSERT INTO `cms_redes_sociales` (`id`, `red_social`, `link_red`, `fecha_creacion`) VALUES
(1, 'Facebook', 'https://www.facebook.com/modostore', '2013-12-04 03:22:46'),
(2, 'Twitter', 'http://www.twitter.com/modostore', '2013-12-04 03:22:39'),
(3, 'Instagram', 'http://instagram.com/modostore', '2013-12-04 03:22:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_registro_compra`
--

DROP TABLE IF EXISTS `cms_registro_compra`;
CREATE TABLE IF NOT EXISTS `cms_registro_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` decimal(10,0) NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `celular` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pago` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cms_registro_compra`
--

INSERT INTO `cms_registro_compra` (`id`, `nombre`, `cedula`, `ciudad`, `direccion`, `telefono`, `celular`, `tipo_pago`, `estado`, `fecha`) VALUES
(1, 'elbert', 1047414684, 'Cartagena', 'Br. xxxx', 3205788788, '3205788788', 'Efectivo', 0, '2013-12-06 05:00:00'),
(2, 'elbert', 1047414684, '1', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 13:12:13'),
(3, 'Bogotá', 1047414684, '4', 'carrea 12 250a', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 13:13:19'),
(4, 'elbert', 1047414684, '2', 'carrea 12', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 13:15:52'),
(5, 'elbert', 1047414684, '2', 'carrea 12', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 13:17:56'),
(6, 'elbert', 1047414684, '2', 'carrea 12', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 13:19:07'),
(7, 'Bogotá', 1047414684, '4', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 13:22:46'),
(8, 'Bogotá', 1047414684, '4', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 13:23:25'),
(9, 'Bogotá', 1047414684, '3', 'carrea 12 250a', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 13:58:53'),
(10, 'elbert', 1047414684, '6', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 14:11:12'),
(11, 'Bogotá', 1047414684, '7', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 14:15:05'),
(12, 'elbert', 1047414684, '4', 'carrea 12 250a', 3205788788, '3205788788', 'CONSIGNAR', 0, '2013-12-10 14:20:38'),
(13, 'elbert', 1047414684, '2', 'carrea 12', 3205788788, '3205788788', 'PAGAR EN LÍNEA', 0, '2013-12-10 14:56:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

DROP TABLE IF EXISTS `cms_sessions`;
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
('00b47a3bc1e6a869a827c5ce10ba6586', '::1', '0', 1386288927, ''),
('035230f65b67f6caa9d8f0ba550adc9f', '::1', '0', 1386288791, ''),
('06901b96c132c19d4cbb37b2d3d26f46', '::1', '0', 1386289277, ''),
('06dd6c4f2e1469f008f299b2d6b9c007', '::1', '0', 1386289411, ''),
('07529e75ec434661f1657a1914181ca6', '::1', '0', 1386623515, ''),
('077bb4abdb75bc98b9cd42b4aa1b25f6', '::1', '0', 1386289275, ''),
('0807c12ea8f928e447306f90118a8920', '::1', '0', 1386289953, ''),
('08611f65ad287d843201e0e3b4b77c16', '::1', '0', 1386288758, ''),
('0cce412306ccc00b2af9069f516d54d0', '::1', '0', 1386289412, ''),
('105e31f342b2750bb2b350467092b5c4', '::1', '0', 1386623516, ''),
('10da75a1fe97969e5e4a6c5677824a80', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386976622, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('10e816b54a332bcd21b7e7ba016844d3', '::1', '0', 1386289276, ''),
('137742f2d17d90539e82b4c469e4419a', '::1', '0', 1386289862, ''),
('14c9720810ad8a98e62400bafc497e6a', '::1', '0', 1386288979, ''),
('1508ffe4b99f7f5b71a7adfa9650a8f8', '::1', '0', 1386288413, ''),
('18d58ea5157673f486ec2c70057998c1', '::1', '0', 1386623619, ''),
('19070bfb67deb76000558151488a2878', '::1', '0', 1386289954, ''),
('1a8722d0dec035375f055fce5e373c2c', '::1', '0', 1386288416, ''),
('1af7d7664badd7b94a0569128917dedb', '::1', '0', 1386288685, ''),
('1d78fb0007b32a0730739cd74d2d2490', '::1', '0', 1386288561, ''),
('1e7c64b2514162bafdcfeb17d89a246a', '::1', '0', 1386288602, ''),
('1ef7e22f7399c4a635ff81a1125d3030', '::1', '0', 1386288773, ''),
('215e02587233da8e5c2e9d36991779bc', '::1', '0', 1386289863, ''),
('21f65aae3186d86970677d2a73794c77', '::1', '0', 1386288756, ''),
('23ab4a78d16d36c0f14bd63e900e7249', '::1', '0', 1386623517, ''),
('2403b74b4635b66e5d39e94e7b753a43', '::1', '0', 1386288562, ''),
('24a200aec6436429165c528ee633fa0e', '::1', '0', 1386289277, ''),
('24ad7c68913a916e9e3b6a1d850e98d5', '::1', '0', 1386288790, ''),
('24de640258310bcbe3e9011140df60b7', '::1', '0', 1386289852, ''),
('254f2c5c7daf0ae7b085504480068706', '::1', '0', 1386288688, ''),
('266bbc4128741dabc181005cf04c28c3', '::1', '0', 1386288685, ''),
('2688bb9ee66199731d6b41ad73df0559', '::1', '0', 1386623516, ''),
('26bc3f072ada1029e2dfd747fc690aea', '::1', '0', 1386288603, ''),
('275a2438170d07b6198b2bc0bc611384', '::1', '0', 1386288562, ''),
('2946c783b24fb0942194a2256eadcd4f', '::1', '0', 1386623619, ''),
('29f2cdb87364f647c5734e5083c32344', '::1', '0', 1386288415, ''),
('2a2022d7fe91263a57391ec96cc0cee8', '::1', '0', 1386289864, ''),
('2a853aa69dc77580bdd897b5d444053a', '::1', '0', 1386289411, ''),
('2af0fc586450f48234061cea35e34e8c', '::1', '0', 1386290444, ''),
('2b58ac796fa09cefa3a0c610b8319777', '::1', '0', 1386289952, ''),
('2cadadc9bb92e2b283cc32f029ae7030', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1387203287, ''),
('2df9779997cac26ea6ccb11ad27c3d8b', '::1', '0', 1386288564, ''),
('2e620ffb91f47e08a04c965d19bf47dd', '::1', '0', 1386289413, ''),
('2edc0cfed557e5eb89215eadb1ea5bc2', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386688581, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('3010ec7ed4fa6c120a2baa06bb7c2546', '::1', '0', 1386289460, ''),
('301bd8281ef12ea4887ba618e06f23c6', '::1', '0', 1386288940, ''),
('31735babc0ad9427b1cf94f891aa02b3', '::1', '0', 1386289951, ''),
('31f2e1936f043ac5c84d3968eda9e6b7', '::1', '0', 1386288933, ''),
('325070d51d50ee37498fe15bef4c1fe9', '::1', '0', 1386623515, ''),
('32c4c73bdd81d814e2f983d87b89074a', '::1', '0', 1386288942, ''),
('33f9a654a5951fe6fd476a9573f1d94c', '::1', '0', 1386288771, ''),
('353dae6c6387d2d12afa7b4ce8c00f97', '::1', '0', 1386288563, ''),
('35b329e375f55d2a078722bfb82fdf1a', '::1', '0', 1386623618, ''),
('364519e73b6a58fcd8ec46a424980d8c', '::1', '0', 1386623620, ''),
('3761656d8d2da9377a46d7525010fe5d', '::1', '0', 1386289850, ''),
('3aa5a6ad5b2ee308acab956e2a219b58', '::1', '0', 1386288789, ''),
('3b4882165c70fb1f0725ccbbbddb2bb1', '::1', '0', 1386288934, ''),
('3c7cfbd77e1c607c32af66b142fa84e3', '::1', '0', 1386288414, ''),
('3d6fc8c0c3cf2904fa5881efb55b05a6', '::1', '0', 1386290585, ''),
('3e1ee54ce2f43d7fbac2851a0d4c2baf', '::1', '0', 1386288941, ''),
('40372669e703bad7e3916ead2b9aff50', '::1', '0', 1386289951, ''),
('449b6e784ccb0ac891909829676db579', '::1', '0', 1386288686, ''),
('45ce389fb4503f244a8de6a3cb9329a3', '::1', '0', 1386288934, ''),
('46db0d06dc155bede87810be85021100', '::1', '0', 1386288798, ''),
('47a463e48d56a6fd92028f41d8bced58', '::1', '0', 1386288797, ''),
('48424d19856b4adac95ae00df499f8a0', '::1', '0', 1386289459, ''),
('4b22aa2925c6f450ab316a30d058e47d', '190.85.184.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9) AppleWebKit/537.71 (KHTML, like Gecko) QuickLook/5.0', 1387208588, ''),
('4f7aa922603984c198cc1f266f5ef748', '::1', '0', 1386289861, ''),
('4fb80b16e3b294f3bcccd1a2b446cfc1', '::1', '0', 1386289863, ''),
('511c914f74ecf81be1392f1685f41485', '::1', '0', 1386289411, ''),
('51fd21f02349080d8a1e7ff470bfc5fb', '::1', '0', 1386288604, ''),
('5311f55e2c0fdc09e21593f546e93535', '::1', '0', 1386623620, ''),
('5409cca2ee5073fc6efe693142d82c22', '::1', '0', 1386289849, ''),
('54c7890c6078435d3eff788f6041ecbc', '::1', '0', 1386290110, ''),
('5529fc66cd4e15a9fa74d42aae3f4117', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386940566, 'a:16:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:14:"page_productos";s:1:"1";s:7:"enviado";b:0;s:10:"destino_id";i:2;s:13:"valor_destino";s:1:"0";s:13:"lugar_destino";s:4:"Cali";s:16:"page_promociones";s:1:"1";s:10:"page_logos";s:1:"1";s:12:"page_modelos";s:1:"1";s:11:"page_marcas";s:1:"1";s:13:"cart_contents";a:3:{s:32:"8f14e45fceea167a5a36dedd4bea2543";a:8:{s:5:"rowid";s:32:"8f14e45fceea167a5a36dedd4bea2543";s:2:"id";s:1:"7";s:3:"qty";s:1:"1";s:5:"price";s:6:"450000";s:4:"name";s:18:"Respuesto de volvo";s:11:"descripcion";s:15:"Descripción...";s:9:"price_iva";d:72000;s:8:"subtotal";i:450000;}s:11:"total_items";i:1;s:10:"cart_total";i:450000;}}'),
('5536324cdec0da93b73aa94958b5d3a8', '::1', '0', 1386623515, ''),
('564a2a955e3633f91103bd254442471b', '::1', '0', 1386288562, ''),
('5715f3c28cae3d8d0928646406527a61', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1385741907, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('59da00ff9fcf26d19b13687c7bf6441a', '::1', '0', 1386289277, ''),
('5b86a18a7e4c4164c184f69d22c605c3', '::1', '0', 1386288415, ''),
('5bc4ac3f484d7e8423acab7601a53066', '::1', '0', 1386289413, ''),
('5cfa4fc1d55f9560b24dd7168b5888d0', '::1', '0', 1386288687, ''),
('5d189dba262c653fb67e774db199080a', '::1', '0', 1386288926, ''),
('5e66638cae5cf6ed447da8a9da9ce96b', '::1', '0', 1386290536, ''),
('5f324826b85861e55f0ce1f9b5e9a12e', '::1', '0', 1386289850, ''),
('5f70164f9c3730a43337f94ea44400dc', '::1', '0', 1386288772, ''),
('5f9e70b46640b37ec1cd52f86610c5eb', '::1', '0', 1386288940, ''),
('61ce1097ef37fcb0396f6cec4d22e712', '::1', '0', 1386288605, ''),
('621e6ed08e3e0fa27719099c400c8c01', '::1', '0', 1386290194, ''),
('62e43788451920a6e77401694d77515b', '::1', '0', 1386288933, ''),
('63b759bc80da2522c619146fa2c79534', '::1', '0', 1386289864, ''),
('646f9ba303ffaa6a091934ecda8f8707', '::1', '0', 1386290168, ''),
('648a324cc12bc8785f3efcd5d4a0ef6d', '::1', '0', 1386288451, ''),
('64e013fe20ebda67656067a432169006', '::1', '0', 1386289863, ''),
('65181c4c7af6dccbfa3a4428e9309d69', '190.85.184.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1387211146, ''),
('65bdc46ab562018188f344516c0ded51', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386111547, 'a:21:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:18:"page_patrocinadors";s:1:"1";s:10:"page_logos";s:1:"1";s:17:"page_informacions";s:1:"1";s:13:"page_empresas";s:1:"1";s:22:"page_punto_diferencias";s:1:"1";s:11:"page_valors";s:1:"1";s:15:"page_categorias";s:1:"1";s:18:"page_subcategorias";s:1:"1";s:14:"page_productos";s:1:"1";s:20:"page_caracteristicas";s:1:"1";s:21:"page_imagen_productos";s:1:"1";s:16:"page_promociones";s:1:"1";s:12:"page_barners";s:1:"1";s:11:"page_marcas";s:1:"1";s:12:"page_modelos";s:1:"1";}'),
('694ed19464dd49001309b4e345eabf61', '::1', '0', 1386288940, ''),
('6a4bcc5dd9404885907b055b2ab66382', '::1', '0', 1386288797, ''),
('6a6967a39c3b9477233597ffc374fd46', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386162284, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('6addf36c4959de881be7d85f67cf7573', '::1', '0', 1386623478, ''),
('6c43e1c18793eccf3fc93a590c5ea08c', '::1', '0', 1386288941, ''),
('6d3a2c335e33215b541dc7793d0a150e', '::1', '0', 1386289952, ''),
('6df4e07cdfa0536480b6a8f432e481a3', '::1', '0', 1386289412, ''),
('6e184779153b612080c705e8e4c53402', '::1', '0', 1386289953, ''),
('6e8e3df085951a1853a3f02e394d1cab', '::1', '0', 1386289276, ''),
('72387069bdce13c54833d11099b86c98', '::1', '0', 1386288924, ''),
('724e064a887696ea73b14399c4187fa3', '::1', '0', 1386288771, ''),
('73c4cd6ba5300ba4f7f9feb7d03cb7a8', '::1', '0', 1386288934, ''),
('744a686b9e48d7b015dd12afaf327da1', '::1', '0', 1386288790, ''),
('753ecd79c0f7c9cf31cbb8029c89d88a', '::1', '0', 1386288451, ''),
('793cae90a50003678d034bbfcf2cd14a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1385740327, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('799623a87b9be506567e889140b62aa2', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386791632, ''),
('79be2c25b68a6ae8675d1abac7615b2b', '::1', '0', 1386288604, ''),
('79ea241d358f63d1c3a216359da0cd2e', '::1', '0', 1386288772, ''),
('79ed0c11272034167a3e6bd365228690', '::1', '0', 1386288791, ''),
('7b1461246bb79e3868731679b5c26201', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386626011, 'a:21:{s:9:"user_data";s:0:"";s:8:"identity";s:20:"admin@imaginamos.com";s:8:"username";s:5:"admin";s:5:"email";s:20:"admin@imaginamos.com";s:7:"user_id";s:1:"6";s:14:"old_last_login";s:4:"2013";s:12:"page_barners";s:1:"1";s:10:"page_logos";s:1:"1";s:11:"page_marcas";s:1:"1";s:12:"page_modelos";s:1:"1";s:11:"page_fletes";s:1:"1";s:17:"page_informacions";s:1:"1";s:13:"page_empresas";s:1:"1";s:22:"page_punto_diferencias";s:1:"1";s:11:"page_valors";s:1:"1";s:15:"page_categorias";s:1:"1";s:18:"page_subcategorias";s:1:"1";s:14:"page_productos";s:1:"1";s:20:"page_caracteristicas";s:1:"1";s:16:"page_promociones";s:1:"1";s:20:"page_venta_productos";s:1:"1";}'),
('7bd881270928e5fba922ea7e9aae00e8', '::1', '0', 1386288939, ''),
('7c054130067eeb4efb4be28c7525a30f', '::1', '0', 1386290514, ''),
('7c83c63cf47fcf31ffa29d330a9acb34', '::1', '0', 1386623517, ''),
('8141506099d121180bda14ba82cd13f4', '::1', '0', 1386289459, ''),
('86ea99d002d3b379da17fa030e91a310', '::1', '0', 1386288415, ''),
('87c829e1425c10f7da2eb2d9f1e4ee1f', '::1', '0', 1386288772, ''),
('88ccbdf35e38f6b70c05f8ce92752531', '::1', '0', 1386288452, ''),
('891f6cf3beeab5e8df1580cb81b32b2c', '::1', '0', 1386288452, ''),
('8bad7abbe113fa6809dfc3f5e64523da', '::1', '0', 1386288687, ''),
('8eb55adf1fa4f129e48470c39733181f', '::1', '0', 1386290225, ''),
('8f0d09125d95d2941fca2a0dead7ab59', '::1', '0', 1386288941, ''),
('8f76d2dfd461006c30542719f1a4fa1a', '::1', '0', 1386623618, ''),
('8ff10eb9d34f7ac7b845a497b1ff24fa', '::1', '0', 1386288564, ''),
('901277f990284faa80b4773134bf5880', '::1', '0', 1386289852, ''),
('908e8ffa753ed737eef6083f46c9b832', '::1', '0', 1386288791, ''),
('910c0d156b03e66feba374b3b18742a5', '::1', '0', 1386288686, ''),
('91896cf2653505f7cb045f4be4de983f', '::1', '0', 1386288925, ''),
('919ef8559c6aa34004c7877fce88b77d', '::1', '0', 1386288935, ''),
('9385d4b4680828b77e7b84ca2bb20b0c', '::1', '0', 1386290087, ''),
('94f80b46a268b56fbe5d0555cd07ba87', '::1', '0', 1386288687, ''),
('952c678e72ca1a36328b7dd163717ab1', '::1', '0', 1386288797, ''),
('959ebcbbb5c2c23533f5731cabc7269b', '::1', '0', 1386288758, ''),
('96f8cf28cbf06483d4ad7bce99ca28ac', '::1', '0', 1386289952, ''),
('97b6d3e0d8302fca54188a5f062960db', '::1', '0', 1386288414, ''),
('9b77c7bf89677e6b0cbb544992070323', '::1', '0', 1386288789, ''),
('9c818dcdf92814c8e4672217407d178a', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386681766, 'a:15:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:13:"cart_contents";a:5:{s:32:"c81e728d9d4c2f636f067f89cc14862c";a:8:{s:5:"rowid";s:32:"c81e728d9d4c2f636f067f89cc14862c";s:2:"id";s:1:"2";s:3:"qty";s:1:"1";s:5:"price";s:3:"320";s:4:"name";s:10:"Producto 2";s:11:"descripcion";s:12:"holamundo...";s:9:"price_iva";d:51.2000000000000028421709430404007434844970703125;s:8:"subtotal";i:320;}s:32:"eccbc87e4b5ce2fe28308fd9f2a7baf3";a:8:{s:5:"rowid";s:32:"eccbc87e4b5ce2fe28308fd9f2a7baf3";s:2:"id";s:1:"3";s:3:"qty";s:1:"1";s:5:"price";s:1:"1";s:4:"name";s:10:"Producto 3";s:11:"descripcion";s:11:"olamundo...";s:9:"price_iva";d:0.1600000000000000033306690738754696212708950042724609375;s:8:"subtotal";i:1;}s:32:"a87ff679a2f3e71d9181a67b7542122c";a:8:{s:5:"rowid";s:32:"a87ff679a2f3e71d9181a67b7542122c";s:2:"id";s:1:"4";s:3:"qty";s:1:"1";s:5:"price";s:8:"10000000";s:4:"name";s:9:"Motor NXM";s:11:"descripcion";s:12:"Holamundo...";s:9:"price_iva";d:1600000;s:8:"subtotal";i:10000000;}s:11:"total_items";i:3;s:10:"cart_total";i:10000321;}s:13:"page_empresas";s:1:"1";s:11:"page_fletes";s:1:"1";s:11:"page_marcas";s:1:"1";s:12:"page_modelos";s:1:"1";s:20:"page_venta_productos";s:1:"1";s:7:"destino";i:6;s:13:"valor_destino";s:1:"0";s:13:"lugar_destino";s:9:"Cartagena";s:7:"enviado";b:0;s:10:"destino_id";i:3;}'),
('9def634e52d4734da3ef91f28b375654', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386611222, 'a:13:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:17:"page_informacions";s:1:"1";s:15:"page_categorias";s:1:"1";s:16:"page_promociones";s:1:"1";s:11:"page_fletes";s:1:"1";s:14:"page_productos";s:1:"1";s:20:"page_caracteristicas";s:1:"1";s:20:"page_venta_productos";s:1:"1";s:12:"page_barners";s:1:"1";s:13:"page_empresas";s:1:"1";}'),
('9e937d58e2500cefabc960ff9ae60834', '::1', '0', 1386289257, ''),
('9ed3302a69820606366ffd3d2dd6dcfd', '::1', '0', 1386288756, ''),
('9ee4ab41f8cfdc2bca17337198fa467a', '::1', '0', 1386288453, ''),
('a022b7c3d03b246d6e890fa7a08fe07a', '::1', '0', 1386288563, ''),
('a036e1141125e77cb581bddb16872cb7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386028480, 'a:18:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:11:"page_barner";s:1:"1";s:15:"page_categorias";s:1:"1";s:11:"page_marcas";s:1:"1";s:20:"page_caracteristicas";s:1:"1";s:12:"page_barners";s:1:"1";s:13:"page_empresas";s:1:"1";s:22:"page_punto_diferencias";s:1:"1";s:11:"page_valors";s:1:"1";s:17:"page_informacions";s:1:"1";s:21:"page_imagen_productos";s:1:"1";s:18:"page_subcategorias";s:1:"1";s:14:"page_productos";s:1:"1";}'),
('a13bfd1ffd62d95c9eee522dc34e7a8e', '::1', '0', 1386289851, ''),
('a1864e97d7b601aac86799b3e323192c', '::1', '0', 1386288756, ''),
('a32d95bd054bf93cac28279432d62f7c', '::1', '0', 1386288773, ''),
('a39e4baef8fe44fa26794e64dbec4e9a', '::1', '0', 1386623518, ''),
('a3d7716af8ec6a831aa06d8cb9ce85a8', '::1', '0', 1386290496, ''),
('a4392d1c4aba8599509080bc04a58777', '::1', '0', 1386288604, ''),
('a6498c5b83ac6c1858d207175b0457d6', '::1', '0', 1386290652, ''),
('a75b071b3b114e08186102a0874a0207', '::1', '0', 1386289850, ''),
('a8c00f7586682686141729ae1bbed23f', '::1', '0', 1386288603, ''),
('a8dac9ec5c031f8a4439d2fb42781469', '::1', '0', 1386290662, ''),
('ac334212959d8c965ad1c005bf3e419b', '::1', '0', 1386288935, ''),
('adc3c91b0738aa45f6949adef800ecf8', '::1', '0', 1386290180, ''),
('ae3e378c91da6d7fde41fccf877f7806', '::1', '0', 1386290673, ''),
('aee91b9b5f946aefba336354f505f105', '::1', '0', 1386288789, ''),
('af1a94604b334a17a181c122257f59a3', '::1', '0', 1386288939, ''),
('b044ef8cf31f4da45e97c6aa98a74bce', '::1', '0', 1386289862, ''),
('b14c7c730c35b41a57adbcfdc16b7041', '::1', '0', 1386288926, ''),
('b4f03420a2f5dc525f7816886afe5bee', '::1', '0', 1386289953, ''),
('b659184b0b96053ac26fa01d115843da', '::1', '0', 1386288990, ''),
('b68c421d7855f6cf0b8faca4d70bf924', '::1', '0', 1386288925, ''),
('b95c2808f40df52990e89427a7c792d7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1385741923, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('bd5fb02c50e9116f2228a50e8025ef56', '::1', '0', 1386288452, ''),
('bd76d94f1d4aa37a68204acf1fe2a7b1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1385757280, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"1";s:15:"page_categorias";s:1:"1";s:24:"flash:old:alert_messages";s:121:"<script>$.sticky("Datos Guardados con exito...!", {autoclose : 5000, position: "top-center", type: "st-info" });</script>";}'),
('bdd6142067bc03431b8e772e4a489e16', '::1', '0', 1386288450, ''),
('bdead923a8d53607dc02d158b752f0f5', '::1', '0', 1386623516, ''),
('be6dd85b866818af0f6016532bb595cc', '::1', '0', 1386288453, ''),
('bf6dc3a941f848bfc601641388145f79', '::1', '0', 1386289459, ''),
('c099a51d58b77d8e654c9804bd2f5e27', '::1', '0', 1386288563, ''),
('c3b808fbbc6cde49ab526ea8d2bdecfb', '::1', '0', 1386289458, ''),
('c3fd275e4d19a7f879c3a10fa831f989', '::1', '0', 1386288798, ''),
('c6d9b4bcfe58aea004ba32ec44706898', '::1', '0', 1386289276, ''),
('c903c68d8e111bf623ab8d0194c69dee', '::1', '0', 1386289275, ''),
('ca05a719af124da54208cffb12a5ee1c', '::1', '0', 1386290482, ''),
('ca5139803a7c4a39b01761d8ff833373', '::1', '0', 1386623617, ''),
('caaef3b8b19a905107d74bb701dc839a', '::1', '0', 1386289862, ''),
('cd3a3434ef084e613db29487422845ff', '::1', '0', 1386288757, ''),
('ce2fd05872a92242e372071feb957654', '::1', '0', 1386623620, ''),
('d064d2661e87d96f5b2cf3dcf05a52b6', '::1', '0', 1386288926, ''),
('d1c9be1c319a8af491aff7ae538abece', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386109134, 'a:19:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:17:"page_informacions";s:1:"1";s:13:"page_empresas";s:1:"1";s:22:"page_punto_diferencias";s:1:"1";s:11:"page_valors";s:1:"1";s:11:"page_marcas";s:1:"1";s:12:"page_barners";s:1:"1";s:15:"page_categorias";s:1:"1";s:18:"page_subcategorias";s:1:"1";s:14:"page_productos";s:1:"1";s:20:"page_caracteristicas";s:1:"1";s:16:"page_promociones";s:1:"1";s:12:"page_modelos";s:1:"1";s:21:"page_imagen_productos";s:1:"1";}'),
('d1dd00c54d0505425f254f36bb7ed5e4', '::1', '0', 1386290039, ''),
('d2ae44e49431c7d3fe45ad40df8b2ee5', '::1', '0', 1386288773, ''),
('d30d769647d540c009e53c845e81401d', '95.108.255.2', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 YaBrowser/13.10.1500.9323', 1386827203, ''),
('d5d5139c21ce32ce98384279e6da6ff3', '::1', '0', 1386289458, ''),
('d866c0b2dde721a0521813ecac985a1c', '::1', '0', 1386289851, ''),
('d89c2b3d4155a0e488b5428da121dff0', '::1', '0', 1386288790, ''),
('da183c9964f1f86f51ed884839a0219a', '::1', '0', 1386288924, ''),
('dccb6456de79e0848453ad2216bb776c', '::1', '0', 1386288798, ''),
('dd7aded15dbb552ed7b3cecf519e0ca0', '::1', '0', 1386623619, ''),
('df72e465cda2341d147bd43258f7f200', '::1', '0', 1386288774, ''),
('e0830b2abfe0107f20370708b90a0a69', '::1', '0', 1386288603, ''),
('e105e6651924e55cf8d11eee953ad650', '::1', '0', 1386288451, ''),
('e255d0e55ec5047e516315448c3881e7', '::1', '0', 1386289275, ''),
('e46483ee7fe18c2d619bb4dc9782141b', '::1', '0', 1386288933, ''),
('e53bda877cfea94f701bff8358d61238', '::1', '0', 1386288755, ''),
('e66a8d7cd306f87090e6807570069ad6', '::1', '0', 1386289412, ''),
('e6769a263687d40accd9f6b07847afbc', '::1', '0', 1386288796, ''),
('e78e7f763300ea543e339495c610b2bd', '::1', '0', 1386288757, ''),
('e8fd632c275d2acc75d17fdb67e6a9de', '::1', '0', 1386289460, ''),
('e995c831e47ed678ac48496099e6d21d', '::1', '0', 1386288796, ''),
('eb191b12f01c2ba43ab4ac6d5352a81b', '::1', '0', 1386288414, ''),
('ed02631e20c2ee0ed0c42a7d095441cc', '::1', '0', 1386288686, ''),
('ed596ef5d56fff4275a94db4baa02878', '::1', '0', 1386288796, ''),
('ef14cce5bce44e7773cfbea0c90227d0', '::1', '0', 1386290449, ''),
('f0a456f6916737651fb87ce1302ed476', '190.85.184.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9) AppleWebKit/537.71 (KHTML, like Gecko) QuickLook/5.0', 1387208591, ''),
('f1ab4b683873771d13b2917cda9a7f79', '::1', '0', 1386290149, ''),
('f352dca29335ba94343ae89e557c0ebb', '::1', '0', 1386288925, ''),
('f3a5c6a2290fd9e28a9bd5ab804fcfbd', '::1', '0', 1386289457, ''),
('f488e7857cd7e47dfd102fd99fb96002', '::1', '0', 1386288932, ''),
('f4cfbbaecb8b933dd84d04fee123d56e', '::1', '0', 1386289851, ''),
('f5285e402a4703183541e17d2d7d1f47', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386254119, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_barners";s:1:"1";s:14:"page_productos";s:1:"1";}'),
('f654316d9d0f990cdc5ed7137e24d388', '::1', '0', 1386288602, ''),
('f71f94cb39e33efb23f6ce1b890713b1', '::1', '0', 1386288416, ''),
('f8540879689f5a7d39af96f92977793d', '::1', '0', 1386288757, ''),
('f8fb5bf7b4d9abdbe80aadeca2716151', '::1', '0', 1386288969, ''),
('fd076c4715693c77d14eb53624cde830', '::1', '0', 1386289458, ''),
('fd4ce549b40cc78692670c15cf115976', '186.86.27.250', 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_4 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11B5', 1387166978, 'a:6:{s:9:"user_data";s:0:"";s:13:"cart_contents";a:3:{s:32:"8f14e45fceea167a5a36dedd4bea2543";a:8:{s:5:"rowid";s:32:"8f14e45fceea167a5a36dedd4bea2543";s:2:"id";s:1:"7";s:3:"qty";s:1:"1";s:5:"price";s:6:"450000";s:4:"name";s:18:"Respuesto de volvo";s:11:"descripcion";s:15:"Descripción...";s:9:"price_iva";d:72000;s:8:"subtotal";i:450000;}s:11:"total_items";i:1;s:10:"cart_total";i:450000;}s:7:"enviado";b:0;s:10:"destino_id";i:1;s:13:"valor_destino";s:1:"0";s:13:"lugar_destino";s:7:"Bogotá";}'),
('ff36ff0eaf762e763d1ece2a00cadc11', '::1', '0', 1386289410, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

DROP TABLE IF EXISTS `cms_users`;
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
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `departamento_id`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL, 14),
(6, '7f000001', 'admin', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'admin@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--

DROP TABLE IF EXISTS `cms_users_groups`;
CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(7, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_valor`
--

DROP TABLE IF EXISTS `cms_valor`;
CREATE TABLE IF NOT EXISTS `cms_valor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_valor_cms_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_valor`
--

INSERT INTO `cms_valor` (`id`, `titulo`, `texto`, `imagen_id`) VALUES
(1, 'Alegria', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 43),
(2, 'Compromiso', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 44),
(3, 'Puntualidad', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 45),
(4, 'Responsabilidad', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. lorem impum', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_venta`
--

DROP TABLE IF EXISTS `cms_venta`;
CREATE TABLE IF NOT EXISTS `cms_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor_destino` double NOT NULL,
  `destino_id` int(11) NOT NULL,
  `registro_compra_id` int(11) NOT NULL,
  `sub_total` double NOT NULL,
  `iva` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `referencia_UNIQUE` (`referencia`),
  KEY `fk_venta_destino1_idx` (`destino_id`),
  KEY `fk_cms_venta_cms_registro_compra1_idx` (`registro_compra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_venta`
--

INSERT INTO `cms_venta` (`id`, `referencia`, `valor_destino`, `destino_id`, `registro_compra_id`, `sub_total`, `iva`, `total`, `estado`) VALUES
(1, '0001', 0, 1, 1, 10000, '16%', 11600, 1),
(2, '52a65684f0f2b395ffdfb89788d65273', 0, 3, 6, 10000321, '16%', 0, 0),
(3, '94f73b4463a4e55fb8d1f4938c50de92', 0, 3, 7, 10000321, '16%', 0, 0),
(4, 'ea0fd5e1c4c0004b5fcd35105c05f991', 0, 3, 8, 10000321, '16%', 0, 0),
(5, '939da063b8dfe0744086f154731ba0c5', 0, 3, 9, 10000000, '16%', 0, 0),
(6, 'adc4fbf142435a3f0828fd0d9e015898', 150000, 6, 10, 10000000, '16%', 1740000000000, 0),
(7, '11609f2e628987eb3767b4046ab319b9', 150000, 6, 11, 10000000, '16%', 1740000000000, 0),
(8, '8666c74a9ca00f89bbd03f85e4a4a1ef', 150000, 6, 12, 10000000, '16%', 1740000000000, 0),
(9, '32bdd45859f3c7ac3c290b97c7b2ab87', 0, 2, 13, 10000000, '16%', 0, 0);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
