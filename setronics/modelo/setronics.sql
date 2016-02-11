-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2013 a las 17:57:36
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `setronics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_accesorio`
--

CREATE TABLE IF NOT EXISTS `cms_accesorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(44) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accesorio_cms_imagen_idx` (`imagen_id`),
  KEY `fk_accesorio_cms_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_accesorio`
--

INSERT INTO `cms_accesorio` (`id`, `titulo`, `descripcion`, `imagen_id`, `producto_id`) VALUES
(1, 'makro accesorio', 'hola mundo', 1, 1),
(8, 'LÍNEA DE COMUNICACIÓN', '  na hsd nas dvasdjasdvasd asmdvjkawkbqvkv  wehk w hd asd asjvhdasdma sdjas djasvda sd ashd asjdvas ', 78, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--

CREATE TABLE IF NOT EXISTS `cms_api_oauth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `strategy` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `api_secret` varchar(255) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `active_oauth` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_barner_der_down`
--

CREATE TABLE IF NOT EXISTS `cms_barner_der_down` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `subtitulo` varchar(53) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_der_down_imagen1_idx` (`imagen_id`),
  KEY `linea_id` (`linea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_barner_der_up`
--

CREATE TABLE IF NOT EXISTS `cms_barner_der_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(15) NOT NULL,
  `subtitulo` varchar(22) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_der_up_imagen1_idx` (`imagen_id`),
  KEY `linea_id` (`linea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_barner_izq`
--

CREATE TABLE IF NOT EXISTS `cms_barner_izq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(16) NOT NULL,
  `subtitulo` varchar(21) NOT NULL,
  `text_color1` varchar(19) NOT NULL,
  `text_color2` varchar(16) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_izq_imagen1_idx` (`imagen_id`),
  KEY `fk_barner_izq_linea1_idx` (`linea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_caso_exito`
--

CREATE TABLE IF NOT EXISTS `cms_caso_exito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(43) NOT NULL,
  `texto` text NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `sublinea_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_caso_exito_imagen1_idx` (`imagen_id`),
  KEY `fk_caso_exito_sublinea1_idx` (`sublinea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_caso_exito`
--

INSERT INTO `cms_caso_exito` (`id`, `titulo`, `texto`, `imagen_id`, `sublinea_id`) VALUES
(1, 'Caso de Éxito2', '<div class="con-info-col">\r\n<div class="scroll-wrap" style="overflow: hidden; padding: 0px; width: 320px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.\r\n<div class="jspContainer" style="width: 320px; height: 375px;">\r\n<div class="jspPane" style="padding: 0px; top: 0px; width: 320px;">\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 240, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_caso_exito_noticia_relacionada`
--

CREATE TABLE IF NOT EXISTS `cms_caso_exito_noticia_relacionada` (
  `caso_exito_id` int(11) NOT NULL,
  `noticia_relacionada_id` int(11) NOT NULL,
  PRIMARY KEY (`caso_exito_id`,`noticia_relacionada_id`),
  KEY `fk_caso_exito_has_noticia_relacionada_noticia_relacionada1_idx` (`noticia_relacionada_id`),
  KEY `fk_caso_exito_has_noticia_relacionada_caso_exito1_idx` (`caso_exito_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categoria`
--

CREATE TABLE IF NOT EXISTS `cms_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(63) NOT NULL,
  `descripcion` varchar(560) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_linea1_idx` (`linea_id`),
  KEY `fk_categoria_categoria1_idx` (`categoria_id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `cms_categoria`
--

INSERT INTO `cms_categoria` (`id`, `categoria`, `descripcion`, `linea_id`, `categoria_id`, `imagen_id`) VALUES
(11, 'Hytera', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 5, NULL, 0),
(12, 'Circuito cerrado de televisión', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 6, NULL, 0),
(16, 'SERVICIOS', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 8, NULL, 56),
(17, 'PROPUESTA DE VALOR', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 8, NULL, 58),
(18, 'CERTIFICACIONES', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 8, NULL, 59),
(20, 'Hytera', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 5, NULL, 73);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_certificado`
--

CREATE TABLE IF NOT EXISTS `cms_certificado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(39) NOT NULL,
  `texto` varchar(295) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `path_certificado` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_certificado_categoria1_idx` (`categoria_id`),
  KEY `fk_certificado_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_cliente`
--

CREATE TABLE IF NOT EXISTS `cms_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(43) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_cliente`
--

INSERT INTO `cms_cliente` (`id`, `nombre`, `imagen_id`) VALUES
(3, 'Cliente 1A', 118);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_cliente_caso_exito`
--

CREATE TABLE IF NOT EXISTS `cms_cliente_caso_exito` (
  `cliente_id` int(11) NOT NULL,
  `caso_exito_id` int(11) NOT NULL,
  PRIMARY KEY (`cliente_id`,`caso_exito_id`),
  KEY `fk_cliente_has_caso_exito_caso_exito1_idx` (`caso_exito_id`),
  KEY `fk_cliente_has_caso_exito_cliente1_idx` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_cliente_gestion_flota`
--

CREATE TABLE IF NOT EXISTS `cms_cliente_gestion_flota` (
  `cliente_id` int(11) NOT NULL,
  `gestion_flota_id` int(11) NOT NULL,
  PRIMARY KEY (`cliente_id`,`gestion_flota_id`),
  KEY `fk_cliente_has_gestion_flota_gestion_flota1_idx` (`gestion_flota_id`),
  KEY `fk_cliente_has_gestion_flota_cliente1_idx` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_cliente_gestion_flota`
--

INSERT INTO `cms_cliente_gestion_flota` (`cliente_id`, `gestion_flota_id`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(28) DEFAULT NULL,
  `edificio` varchar(28) DEFAULT NULL,
  `barrio` varchar(23) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `telefono` varchar(18) DEFAULT NULL,
  `mobile` varchar(18) DEFAULT NULL,
  `email` varchar(23) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contacto`
--

INSERT INTO `cms_contacto` (`id`, `direccion`, `edificio`, `barrio`, `ciudad`, `telefono`, `mobile`, `email`) VALUES
(1, 'Calle 12 No. 34 - 56 of. 789', 'Edificio Colpatria', 'Barrio London Country', 'Bogotá - Colombia', '+ 57 01 23456789', '+ 57 316 3597001', 'info@setronics.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_departamento`
--

CREATE TABLE IF NOT EXISTS `cms_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

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
-- Estructura de tabla para la tabla `cms_gestion_flota`
--

CREATE TABLE IF NOT EXISTS `cms_gestion_flota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `linea_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gestion_flota_linea1_idx` (`linea_id`),
  KEY `fk_gestion_flota_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_gestion_flota`
--

INSERT INTO `cms_gestion_flota` (`id`, `descripcion`, `linea_id`, `imagen_id`) VALUES
(1, 'sdgfgsdfg', 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_gestion_flota_noticia_relacionada`
--

CREATE TABLE IF NOT EXISTS `cms_gestion_flota_noticia_relacionada` (
  `gestion_flota_id` int(11) NOT NULL,
  `noticia_relacionada_id` int(11) NOT NULL,
  PRIMARY KEY (`gestion_flota_id`,`noticia_relacionada_id`),
  KEY `fk_gestion_flota_has_noticia_relacionada_noticia_relacionad_idx` (`noticia_relacionada_id`),
  KEY `fk_gestion_flota_has_noticia_relacionada_gestion_flota1_idx` (`gestion_flota_id`),
  KEY `noticia_relacionada_id` (`noticia_relacionada_id`),
  KEY `gestion_flota_id` (`gestion_flota_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_gestion_flota_noticia_relacionada`
--

INSERT INTO `cms_gestion_flota_noticia_relacionada` (`gestion_flota_id`, `noticia_relacionada_id`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_groups_permissions`
--

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 0, 0, 0),
(6, 1, 2, 1, 0, 0, 0),
(7, 2, 1, 0, 0, 0, 0),
(8, 2, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_grupo`
--

CREATE TABLE IF NOT EXISTS `cms_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(100) NOT NULL,
  `texto` varchar(350) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_categoria1_idx` (`categoria_id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_grupo`
--

INSERT INTO `cms_grupo` (`id`, `grupo`, `texto`, `categoria_id`, `imagen_id`) VALUES
(8, 'Camaras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard...\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard...', 11, 57),
(9, 'Camaras', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions', 20, 74);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen`
--

CREATE TABLE IF NOT EXISTS `cms_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=241 ;

--
-- Volcado de datos para la tabla `cms_imagen`
--

INSERT INTO `cms_imagen` (`id`, `path`, `name`) VALUES
(1, './uploads/ab60b5a34f435767668fbaa074e5b023.jpg', '#'),
(11, './uploads/50a5ef038363534da210fd4657c562b8.png', NULL),
(12, './uploads/a96d2e109f739684ba66be98d3c02af6.png', NULL),
(13, './uploads/147d2d3a31580d11a94e918d3113d926.png', NULL),
(14, './uploads/734cdad646120cafc0efa3bf1942ee9a.png', NULL),
(16, './uploads/d762bfb2c6b98e211bf928186240bd23.png', NULL),
(17, './uploads/b42a8e37191fbf2c364f8a0bab90d647.png', NULL),
(19, './uploads/p18566njimtdp1e1h12mn15ngplh4.jpg', NULL),
(22, './uploads/p1856ejtcg2bpq1v6nb1n4016r44.jpg', NULL),
(23, './uploads/p1856ejtch111um1on9e13uc1sda5.png', NULL),
(24, './uploads/p1856ejtchmpo1givv11fdrqd46.png', NULL),
(25, './uploads/p1856evbm773aqbl1loa1vcpaub4.png', NULL),
(30, './uploads/090632df34d3a8c67ed46505dee7c3f9.jpg', NULL),
(39, './uploads/p185qq0i6q6221bo41dnthrukm74.jpg', NULL),
(40, './uploads/p185qq14uc47rogt10a61k6gphv4.jpg', NULL),
(41, './uploads/p185qq14uc18fls8d1kmd1ek41uqn5.jpg', NULL),
(42, './uploads/p185qq14ucalt1c30151qtud14ou6.jpg', NULL),
(43, './uploads/p185qq14ucs7g1mis17q862j112k7.jpg', NULL),
(44, './uploads/p185qq14uchhaj2nosdnap1vuc8.jpg', NULL),
(45, './uploads/p185qqaq975nuags4f71q6h1oj94.jpg', NULL),
(46, './uploads/p185qqathc1rpq107r1v5dkp27eo5.jpg', NULL),
(50, './uploads/5244393e4ad9f6d4de702b32ab40164a.jpg', NULL),
(51, './uploads/044ab05c7dea3d21e63911549fb8a4f8.jpg', NULL),
(53, './uploads/p185vgri221nu2k2fb5uvpv135f4.jpg', NULL),
(54, './uploads/p185vgrks1bcbt1k1g371bdk1euc5.jpg', NULL),
(55, './uploads/p185vh8otq1n8l14hc1irhtadfb14.jpg', NULL),
(56, './uploads/cc822587ead4741732a20c3d4e960cd4.jpg', NULL),
(57, './uploads/140011d7dec64302d99d23000d9071d5.jpg', NULL),
(58, './uploads/451286072696a9cc7f3ec8513ddcd8ea.jpg', NULL),
(59, './uploads/fe35cee8d52f9dd9602eb460fa2155f2.jpg', NULL),
(60, './uploads/9088a48848f94bc7170d4de50c2fc148.jpg', NULL),
(61, './uploads/0e15e5c7353f5bba358b1e1ffe5046b3.jpg', NULL),
(63, './uploads/p1869nthvpsmm16pmgg3k5ajif4.jpg', NULL),
(64, './uploads/p1869p1sr81vd41vqf3b6jrdc564.jpg', NULL),
(65, './uploads/p1869p1sr914r91bsd12s2vgc1kge5.png', NULL),
(66, './uploads/p1869p1sr98c416gjpsr1k712ik6.png', NULL),
(67, './uploads/p1869p1sr95p81pqa131u13eo5qo7.jpg', NULL),
(71, './uploads/p1869s2rrc162e1568ath1pctddo4.jpg', NULL),
(72, './uploads/691f05d3154e0b158ae7419fd6876432.jpg', NULL),
(73, './uploads/1477851245a58e69402e5d23179df568.jpg', NULL),
(74, './uploads/eedc251c3183c30f1a65fc3f8e33b823.jpg', NULL),
(75, './uploads/117164efcaeadb3e7d05e85f96b8087f.jpg', NULL),
(76, './uploads/224e7d6054682fe13ea95799fcaa1c4a.jpg', NULL),
(77, './uploads/5412c17674814150f96a725f5265cbdf.jpg', NULL),
(78, './uploads/a5cc6d5ae1c8b41d4a39bef07be5632d.jpg', NULL),
(79, './uploads/45a11da38c724dbacfa60d3ce5e2c01a.png', NULL),
(80, './uploads/f1d101573c2de144f3ab4cf251c9972c.png', NULL),
(81, './uploads/5e20364856ee5d397d1a48174ae39040.png', NULL),
(82, './uploads/6527ee7ff68200a75ed247e2b739f4bf.png', NULL),
(83, './uploads/6c284941f3604208619f91c284ae6c10.jpg', NULL),
(84, './uploads/78cf88667bf30f13e8416accdf54a2f6.jpg', NULL),
(85, './uploads/a8a157ff602bf0c7743e5e92d1c3138d.jpg', NULL),
(86, './uploads/f111a24dcc4df24518041d983a2d4a51.jpg', NULL),
(87, './uploads/f26ab05469139b286dba75db7ac62ada.jpg', NULL),
(88, './uploads/23585183d8ffe509a0131636511bb1f8.jpg', NULL),
(89, './uploads/4ac1072405c6c635d4587caaced6fbd5.jpg', NULL),
(90, './uploads/b7dffb8cb8b34a6eb640b0d4609f69ae.jpg', NULL),
(91, './uploads/fa209ee3f08805d73626ac5df21ffe72.jpg', NULL),
(92, './uploads/450701822d1ca6dc22adf7b50f7be179.jpg', NULL),
(93, './uploads/39f884a7e9a1bc7eaf0e43d890df0d70.jpg', NULL),
(94, './uploads/ad697098ffacf853ba3a977c32cd3d9d.jpg', NULL),
(95, './uploads/7de86af8d62d3a8c6ef1c7e7f00aab9c.jpg', NULL),
(96, './uploads/9dc95065120162ebec2c5245c6d0dfbd.jpg', NULL),
(97, './uploads/a0172be68d03bfeef8bfc633a48e6076.jpg', NULL),
(98, './uploads/1ffbbb2bebdb1c3d4f36d1bb52faa270.jpg', NULL),
(99, './uploads/2703f2786303269ad3967daee284d400.jpg', NULL),
(100, './uploads/2542c7048e81291b73fbfee776e2a11b.jpg', NULL),
(101, './uploads/51fa16ecdc1856b7414e0ea874c0161c.jpg', NULL),
(102, './uploads/b208d7783f9000b66050eb989774ac2d.jpg', NULL),
(103, './uploads/664b4a92f95dd562032379cbaf0732e2.jpg', NULL),
(104, './uploads/48247d4949cd2d297f1c9ae251833118.jpg', NULL),
(105, './uploads/75b39e21ab76f5872fafa2fbf2d66319.jpg', NULL),
(106, './uploads/7fd811cdb090e41dc95780a05132d8a1.jpg', NULL),
(107, './uploads/f1c3a23cf94c2dc87dc77634e61da752.jpg', NULL),
(108, './uploads/5f2a5abe4f215e9311897cee3d8d6d2c.jpg', NULL),
(109, './uploads/a415dd9921ec1efdf025c80ea13766c3.jpg', NULL),
(111, './uploads/6e956c3c5474d3f81b940307d271e522.jpg', NULL),
(112, './uploads/547cceb249cb09921b3453ca48106f8d.jpg', NULL),
(113, './uploads/fc3fee6d1963ab3ee24003abd15d8b23.jpg', NULL),
(115, './uploads/5628440cc29b65e10f3c71323ebca3c7.jpg', NULL),
(116, './uploads/bfa307b9a008610d6934a4ace940d326.jpg', NULL),
(117, './uploads/426b322a96a8f2955e28f65f8ea7da13.jpg', NULL),
(118, './uploads/26be2e83b2ba8e84bc227606ab8112ce.jpg', NULL),
(119, './uploads/91020e9c5fdc8f9225b8e0c20fb84262.jpg', NULL),
(120, './uploads/cf198bff04164146ccf2c14ef5839dbf.jpg', NULL),
(121, './uploads/09d3372bf116d05b50a506c4fdb5cf82.jpg', NULL),
(122, './uploads/78dd05beadf97ef639249873e9dabfc1.jpg', NULL),
(123, './uploads/fe4e3e1bea86e74ac02e1df06853c56e.jpg', NULL),
(124, './uploads/40458f2600ae573f68130f57ff6893e3.jpg', NULL),
(125, './uploads/8d444e911e75c2e8a2df331dde972eed.jpg', NULL),
(126, './uploads/415d53bf82ee95402bce65c2bc9e1dda.jpg', NULL),
(127, './uploads/cafc916734d329d141b450d6dffeab5f.jpg', NULL),
(128, './uploads/cc91a8944fb896838fd6b0923e16295b.jpg', NULL),
(129, './uploads/f3282a70f11900427e04fdc2bd448711.jpg', NULL),
(130, './uploads/005844b2c63597a86e61151308680b54.jpg', NULL),
(131, './uploads/59073c7e6227a47f56ae53f8f2af09b7.jpg', NULL),
(132, './uploads/39f430e558871aa620c0334602cef05c.jpg', NULL),
(133, './uploads/0bf3d0cf321d016b9fde47541f12adc8.jpg', NULL),
(134, './uploads/3173063d3e14b2c9abb8d2923ae7ae6b.jpg', NULL),
(135, './uploads/b6c18c3bd0ff1dbecc9e463b29b4d82d.jpg', NULL),
(137, './uploads/bb4194026f88e0f539f72cce70b140ac.jpg', NULL),
(138, './uploads/693c1e8f345fca662447ae814d7f49e3.jpg', NULL),
(139, './uploads/92c7645fdc627d09465eb627d94e1431.jpg', NULL),
(140, './uploads/2a0ca2b12fbe13b17bfceb71567e7970.jpg', NULL),
(141, './uploads/870a9d45ab38c8d04c61a096976a0a41.jpg', NULL),
(142, './uploads/a2f94f5dbbb97a572b84c419aadb940c.jpg', NULL),
(143, './uploads/0fdfcf3a9bee20175e44e08115a3e635.jpg', NULL),
(144, './uploads/fba9552bde9740683a2532100537db31.jpg', NULL),
(145, './uploads/84600d0671a08844dc18aec66344af1e.png', NULL),
(146, './uploads/ed71e880cb3548fcfdce99f299071a82.png', NULL),
(147, './uploads/32e337190950da191366932137e9e1a4.png', NULL),
(148, './uploads/7af9fc1d373e4ca3f5128c703c908be7.png', NULL),
(149, './uploads/b00a53e4d705399911e57e79ffc9f84f.png', NULL),
(150, './uploads/5d391abc3b527c99adf4e0a54351090c.png', NULL),
(151, './uploads/0b99d9ed0214bdbe1f0d3ccf1424e40f.png', NULL),
(152, './uploads/d80fb32beabe568da418d4366fedd7e9.png', NULL),
(153, './uploads/0813b67aa893292dd0b2cf7a1bf56416.png', NULL),
(154, './uploads/a7fb6a53336a671022010fda677be8ed.png', NULL),
(155, './uploads/81bd668debfb956cf78858ab82d75e91.png', NULL),
(156, './uploads/f7459e0869181ddb96700c17a34d28f4.png', NULL),
(157, './uploads/4acba604075f12b0b15a59e9288dacbd.png', NULL),
(158, './uploads/975e092eaac28df88136398be42e64cb.png', NULL),
(159, './uploads/5ebf7c0651dd23fb850ec2fde9d1e0e3.png', NULL),
(160, './uploads/841d00aa52f3bcebf55a915d0a0639ba.png', NULL),
(161, './uploads/5fa6289ffce1d0d65574851e643811f1.jpg', NULL),
(162, './uploads/80a842b3df54c0ea3701f0592297b74d.jpg', NULL),
(163, './uploads/e00c35a5a30960ae04496bd1e018fa8c.jpg', NULL),
(164, './uploads/a13d5adf203a2e763de8a790a45e97d5.jpg', NULL),
(165, './uploads/d378f755afa24347a6a4556413daf1cf.jpg', NULL),
(166, './uploads/03423f6b327eb38551b0850c7d37df55.jpg', NULL),
(167, './uploads/8493a42314ba365046fdb322b1fc699e.jpg', NULL),
(168, './uploads/81e55923d3df02283f922c2e050b3fd4.jpg', NULL),
(169, './uploads/d07f447e0441baad31ab5947f36669dd.jpg', NULL),
(170, './uploads/441f79127dcdff4fef156e6a0db6132e.jpg', NULL),
(171, './uploads/74f6cfdbc257b96cb80072776f765dc7.jpg', NULL),
(172, './uploads/2a33de9794ca56ed37cc3995f57b9217.jpg', NULL),
(173, './uploads/3c412fcf1ff6f053494dece245ebb991.jpg', NULL),
(174, './uploads/3d165b4353a8ea1ff1ff7541f882de51.jpg', NULL),
(175, './uploads/53a0d8670b374c6e7680aad027b723bc.jpg', NULL),
(176, './uploads/c92d474fd87123bce149e9941e61b391.jpg', NULL),
(177, './uploads/73719db814ea9b88d669830339683820.jpg', NULL),
(178, './uploads/11c01f65a9c109f3e5e4b68c94fb074f.jpg', NULL),
(179, './uploads/02043c894a0745c7e1a7d486459fe00e.jpg', NULL),
(180, './uploads/af16a5c760cc572560cb1bf5b5775ff2.jpg', NULL),
(181, './uploads/d211a9a0fefb5047c07b2818e62c2428.jpg', NULL),
(182, './uploads/98745e438615687bfbc421e6f726db38.jpg', NULL),
(183, './uploads/9953def73f34c0c53fac57414d1f2be5.jpg', NULL),
(184, './uploads/cef879ae4c6072b70e65865839e7ff5c.jpg', NULL),
(185, './uploads/320636f089272a3968a725f5aa4b06dd.png', NULL),
(186, './uploads/6986bec877fd8d5ca5f9656899de0ff6.png', NULL),
(187, './uploads/46acd27b912dc79b11c1de29058ce7f6.png', NULL),
(188, './uploads/2ff005347296c065ddc4d6680798ea0e.png', NULL),
(189, './uploads/f2662c03c44d27fee420abafd46497e0.jpg', NULL),
(190, './uploads/d79ff2af6c54abd29f927c05b8a78a19.jpg', NULL),
(191, './uploads/2bc6f99dc59905954fc2e7d1c28e5368.jpg', NULL),
(192, './uploads/b210d37e07c371f2cf914c4cf8c76366.jpg', NULL),
(193, './uploads/5a32381b66445a4d1e432c4c5050848a.jpg', NULL),
(194, './uploads/349c62e9758ab356bcb2e38eb445583c.jpg', NULL),
(195, './uploads/247f04d1f09d982503411e302f0b746f.jpg', NULL),
(196, './uploads/771a783cf0743fd2f43e24e6b90ad42e.jpg', NULL),
(197, './uploads/062fbec9edb018045863cb8c5cbfaf6b.jpg', NULL),
(198, './uploads/a2565578947234275991bae07dc0123a.jpg', NULL),
(199, './uploads/7464e05e09c772543bc327fba07e676d.jpg', NULL),
(200, './uploads/2fa1b927c056bd1956921a087a218afb.jpg', NULL),
(201, './uploads/d202f5d9c96dd159a30cc9b82bb47c5b.png', NULL),
(202, './uploads/f060e133c32b907af036ecb02486d188.png', NULL),
(203, './uploads/611ccd3f52f9705f621c7b167b3df77a.png', NULL),
(204, './uploads/490e53788d0725f9c5535aecbd191848.png', NULL),
(205, './uploads/ec33017fbc8ed5275be3ad560034622f.jpg', NULL),
(206, './uploads/ff771cdb0050b5ef724ff4b6f28ed1f9.jpg', NULL),
(207, './uploads/ed6e26ea00ebe5889e03e97ad4fc94a7.jpg', NULL),
(208, './uploads/7cc7077246412e9ebaf85e95a6774716.jpg', NULL),
(209, './uploads/21205dc12c1b47020afb3781a519721c.jpg', NULL),
(210, './uploads/748c24c13fd3684a060aacab5915d7aa.jpg', NULL),
(211, './uploads/04748e7a87553f3eeb9e9afe5a12f623.jpg', NULL),
(213, './uploads/f0dbccf596f7f4140301247498cfc985.jpg', NULL),
(214, './uploads/963807f2de41ee01599f70777ab42a5f.jpg', NULL),
(215, './uploads/6b1e8f832747e4e00a6d44f5967b6400.jpg', NULL),
(217, './uploads/adca55249eb84306fe5618efbd2f246a.png', NULL),
(218, './uploads/59646f1e1633cb8dd4bd535bb4ba3baf.png', NULL),
(219, './uploads/d6b30e5a035143b746900e83bccb851d.png', NULL),
(221, './uploads/802948ae8e459edb3aa12b0f82ef759d.jpg', NULL),
(222, './uploads/85f845019d2ababfa0a862be366de9a6.jpg', NULL),
(223, './uploads/b7ea2c493dee651281594b663f1b40f2.jpg', NULL),
(225, './uploads/4461a1a7b09cdf11acf464b55a7000cb.jpg', NULL),
(226, './uploads/046882b9c66c83b5c7f7e72a6508e85d.jpg', NULL),
(227, './uploads/8ef9ebc80c17d7a5e35ac092071371fa.jpg', NULL),
(228, './uploads/fb7515c44f2f49c8a22144db9a6065d3.jpg', NULL),
(229, './uploads/1b645a3924b3ee435f6a9be3493b6429.jpg', NULL),
(230, './uploads/5831f9f12857f32b42e73e550db4cd20.jpg', NULL),
(231, './uploads/941cde0d959d47f0249ea4a13fdad3c4.jpg', NULL),
(232, './uploads/24564d8681a031b9e1c9f246d43f3952.jpg', NULL),
(233, './uploads/e540927b333744273a74bfe67e028c89.jpg', NULL),
(234, './uploads/1b845bad16afa602b81c5693d3ba8e0e.jpg', NULL),
(235, './uploads/e2a870ab91f135af8bfefee6d8e4be97.jpg', NULL),
(236, './uploads/e59b64fc43f377d6727ad3a4027f6bf6.jpg', NULL),
(237, './uploads/7b7af2be11faad02ed347529819fca78.jpg', NULL),
(238, './uploads/93840c41c14e59fc5b770984b0327e00.jpg', NULL),
(239, './uploads/b060b6555dd918c4cb32208978a8a19e.jpg', NULL),
(240, './uploads/be59a6250a0558b66e846123bdaffa21.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_linea`
--

CREATE TABLE IF NOT EXISTS `cms_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(645) NOT NULL,
  `color` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_linea`
--

INSERT INTO `cms_linea` (`id`, `titulo`, `descripcion`, `color`) VALUES
(5, 'LÍNEA DE COMUNICACIÓN', 'LÍNEA DE COMUNICACIÓN', 'slide-color-1'),
(6, 'SISTEMAS ELECTRÓNICOS DE SEGURIDAD', 'SISTEMAS ELECTRÓNICOS DE SEGURIDAD', 'slide-color-2'),
(7, 'INTEGRACIÓN', 'INTEGRACIÓN', 'slide-color-3'),
(8, 'SERVICIO TÉCNICO', 'SERVICIO TÉCNICO', 'slide-color-4'),
(9, 'GESTIÓN DE FLOTA', 'GESTIÓN DE FLOTA', 'slide-color-5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_logo`
--

CREATE TABLE IF NOT EXISTS `cms_logo` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_logo`
--

INSERT INTO `cms_logo` (`id`) VALUES
(17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_short` varchar(20) DEFAULT NULL,
  `url` text,
  `content` text,
  `image` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_nosotros`
--

CREATE TABLE IF NOT EXISTS `cms_nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_id` int(11) NOT NULL,
  `parrafo_id` int(11) NOT NULL,
  `parrafo1_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nosotros_imagen1_idx` (`imagen_id`),
  KEY `fk_nosotros_parrafo1_idx` (`parrafo_id`),
  KEY `fk_nosotros_parrafo2_idx` (`parrafo1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_nosotros`
--

INSERT INTO `cms_nosotros` (`id`, `imagen_id`, `parrafo_id`, `parrafo1_id`) VALUES
(1, 30, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_noticia_relacionada`
--

CREATE TABLE IF NOT EXISTS `cms_noticia_relacionada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parrafo_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noticia_relacionada_parrafo1_idx` (`parrafo_id`),
  KEY `fk_noticia_relacionada_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_noticia_relacionada`
--

INSERT INTO `cms_noticia_relacionada` (`id`, `parrafo_id`, `imagen_id`) VALUES
(10, 1, 122);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_novedad`
--

CREATE TABLE IF NOT EXISTS `cms_novedad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `fecha` date NOT NULL,
  `texto` varchar(102) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_novedad_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cms_novedad`
--

INSERT INTO `cms_novedad` (`id`, `titulo`, `fecha`, `texto`, `imagen_id`, `link`) VALUES
(12, 'fdgdfg', '2013-08-16', 'gdfgdfg', 16, 'dfgdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--

CREATE TABLE IF NOT EXISTS `cms_oauth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_parrafo`
--

CREATE TABLE IF NOT EXISTS `cms_parrafo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(2000) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_parrafo`
--

INSERT INTO `cms_parrafo` (`id`, `titulo`, `texto`) VALUES
(1, 'Noticia relacionada', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>\r\n'),
(2, 'Misión y Visión', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, ' Noticia relacionada', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text4. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `type` enum('module','function','component') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_permissions`
--

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto`
--

CREATE TABLE IF NOT EXISTS `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(24) NOT NULL,
  `descripcion_intro` varchar(63) NOT NULL,
  `descripcion` text NOT NULL,
  `especificacion_tecnica` text,
  `path_info_tenica` varchar(200) DEFAULT NULL,
  `path_folleto` varchar(200) DEFAULT NULL,
  `precio_prov` double NOT NULL,
  `precio_client` double NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `recomendado` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_producto_grupo_idx` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_producto`
--

INSERT INTO `cms_producto` (`id`, `titulo`, `descripcion_intro`, `descripcion`, `especificacion_tecnica`, `path_info_tenica`, `path_folleto`, `precio_prov`, `precio_client`, `grupo_id`, `recomendado`) VALUES
(1, 'producto1', 'fdgsdfg hola mundo', 'sdgfgsdfg hola, mondo', 'sdfgsdfgdg', './uploads/5c7cb8f6933cf67fd3fc9a6145ce0623.pdf', './uploads/b133c593e2aaa28fafa47ca9149b76a9.pdf', 5200550, 5662005, 8, 0),
(2, 'producto2', 'producto2', 'producto2', 'producto2', './uploads/8efe84bb40f5d85a79ff23850870e987.pdf', './uploads/370c0d8bd697fc2d744d677db241b7fb.pdf', 2990050, 700000, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_producto_imagen`
--

CREATE TABLE IF NOT EXISTS `cms_producto_imagen` (
  `producto_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`producto_id`,`imagen_id`),
  KEY `fk_producto_has_imagen_imagen1_idx` (`imagen_id`),
  KEY `fk_producto_has_imagen_producto1_idx` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_producto_imagen`
--

INSERT INTO `cms_producto_imagen` (`producto_id`, `imagen_id`) VALUES
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_propuesta_valor`
--

CREATE TABLE IF NOT EXISTS `cms_propuesta_valor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propuesta_valor_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_propuesta_valor`
--

INSERT INTO `cms_propuesta_valor` (`id`, `categoria_id`, `texto`) VALUES
(1, 17, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>\r\n\r\n<p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--

CREATE TABLE IF NOT EXISTS `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `red_social` varchar(100) DEFAULT NULL,
  `link_red` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_redes_sociales`
--

INSERT INTO `cms_redes_sociales` (`id`, `red_social`, `link_red`, `fecha_creacion`) VALUES
(1, 'Facebook', 'https://www.facebook.com/fac', '2013-09-19 15:07:50'),
(2, 'Twitter', 'http://www.twitter.com/', '2013-09-12 17:55:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_servicio`
--

CREATE TABLE IF NOT EXISTS `cms_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(37) NOT NULL,
  `texto_intro` varchar(1037) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_provedor` double NOT NULL,
  `precio_cliente` double NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicio_imagen1_idx` (`imagen_id`),
  KEY `fk_servicio_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

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
('02829a2e3331a460c6421e58f432ba59', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378929662, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('02837020ada69c72c7f4e817cfe30304', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378851857, ''),
('05284a0225ecc4d89354fb683f02d58c', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844249, ''),
('053ff9babcf1238250da8ec02ae803ca', '186.82.147.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379267495, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('069f43fb9ec3a3dba8fca7d551378fce', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379094109, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('080715fda5215dbda4ed855ab17e3a94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379706502, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('0c45de5a4d6519d6594918381883ad17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380748166, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('0cb579937fca613d0066ce7d8d77ba55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380582554, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"3";s:12:"page_product";s:1:"1";}'),
('0df2bd06767f08ddd570f8918630c6cc', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378931804, ''),
('1315793f7c0b24b0a56210ea2e92da9d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379705676, ''),
('144aa22896525a9fcb32e6f9ebc649d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379632503, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1cee3b44883357b57d18bab2f8196aaf', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378998071, ''),
('1e4fe4bb2b735ed6b7d50914a29050af', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378843943, ''),
('1f2fe193080a5c42bacc0b1ebde16dd7', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378929019, ''),
('2237858717131a5f2c3213c2074d897d', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378843953, ''),
('22453f2dcb064a6ff75b7c7f1111073a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844834, ''),
('27e3dbe3283e21285c087116f4daace4', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848659, ''),
('28889bbb088579facce7c513f3e88850', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844326, ''),
('2971bccce0793b839841c48cf7f5b895', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378941713, ''),
('2bccd9db1f01250d35ca0a35072c0da2', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378930160, ''),
('2fc62083f17f25e68a4ac740a614e457', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848278, ''),
('374c45b0834e417cac7408ae332b6f68', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379017258, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('398541546347a044dbc9ed1470216717', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379606093, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:14:"old_last_login";s:4:"2013";}'),
('3eb6e2ad1fe5af34e36422d736b2149a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378914366, ''),
('40cf31edba3cdbed770048f19bb7aeca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36', 1381419452, 'a:17:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:10:"page_flota";s:1:"1";s:17:"page_comunicacion";s:1:"5";s:7:"post_id";s:1:"1";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:14:"old_last_login";s:4:"2013";s:13:"cart_contents";a:3:{s:32:"c4ca4238a0b923820dcc509a6f75849b";a:8:{s:5:"rowid";s:32:"c4ca4238a0b923820dcc509a6f75849b";s:2:"id";s:1:"1";s:3:"qty";s:1:"2";s:5:"price";s:7:"5200550";s:4:"name";s:9:"producto1";s:11:"descripcion";s:7:"fdgsdfg";s:9:"price_iva";d:832088;s:8:"subtotal";i:10401100;}s:11:"total_items";i:1;s:10:"cart_total";i:10401100;}s:13:"page_servicio";s:1:"1";s:20:"page_certificaciones";s:1:"1";s:12:"page_product";s:1:"1";s:17:"page_casos_exitos";s:1:"3";s:13:"page_sublinea";s:1:"1";s:14:"page_productos";s:1:"1";}'),
('40de92d7d422166b5c2c86b1854161ff', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848216, ''),
('4193a7ff41287b35c91a7f8cd040c044', '200.118.79.73', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379176002, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('419d661be9ceeea72a77efdcc98c8174', '186.28.193.76', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379175985, ''),
('4332819b5b4c29968cb9008eabbd7192', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847439, ''),
('4659a875b07c01dfa96eb2d1111eb759', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379009248, ''),
('484c8e35144519cf88165fe722294d82', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378941041, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('4b024f98411b7a26f5314710fbb43792', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378999353, ''),
('4b9a2f90528c01647a8991d0b5bcb035', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380930909, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_product";s:1:"1";s:10:"page_flota";s:1:"1";}'),
('4c642dbfcd5004205b00af673586ebd0', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378825799, ''),
('4e6db7112913e6ecbbbc15e535063bb6', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378784417, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('4ef4afd8c26c4e591b85d1fee4a0e172', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1381420445, 'a:17:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:14:"old_last_login";s:4:"2013";s:12:"page_product";s:1:"1";s:11:"page_barner";s:1:"1";s:10:"page_flota";s:1:"1";s:17:"page_comunicacion";s:1:"5";s:7:"post_id";s:1:"1";s:13:"page_servicio";s:1:"1";s:20:"page_certificaciones";s:1:"1";s:17:"page_casos_exitos";s:1:"2";s:13:"page_sublinea";s:1:"1";s:14:"page_productos";s:1:"1";}'),
('500c377e7c972b24139a06913c475b17', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378933541, ''),
('537b63b7ca503c341af44542619aaa0f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847505, ''),
('55c1f08041ac3748814d303cfe64e2db', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378939762, ''),
('5653ca2f66eae82d680168eb278116c9', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379014025, ''),
('5673b9b3723dad0ee8e26c9c5b9233d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380915551, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('5c9e3556ab228318c60d120546e15a6a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378843997, ''),
('6474e0f1e4254868a01c6786c3821c7d', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844611, ''),
('648f07cef528af5877262125917bebc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380915551, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('65b1893df87b68603d9aee45c12de8f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379606093, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('693a4e01df7f46663bec417331c11129', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378933466, ''),
('6d6a0e4831959471b83a536fcbc903bf', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378954489, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('6f3d6d578c23ec012783c537f60bce57', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378960521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('6f7c90ac613711de1e7c5e468a4470a0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379721561, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('73cf8860348cf3b131116138290cbead', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848846, ''),
('752d88fec42772f666edc2b93a7d17c8', '186.29.246.244', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379133920, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('76dc3609829bdef098f1749a95411dd7', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844731, ''),
('799c82c520a939483540229fcb86a99d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380747350, 'a:5:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_product";s:1:"1";}'),
('8491b734ed3bd0d2e66b21c196fa3285', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378927263, ''),
('8758afe0db5fa620758a363191534e36', '201.244.242.35', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379200143, ''),
('88c0f17a4e436c9b0feccf894b7b3b7a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379050631, ''),
('896d50662341754e8774de579fd6a375', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847643, ''),
('8ab8886c1b16aca8a7d2badc4a2323ab', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844130, ''),
('8b195c290b5680a73c42724e7996a08b', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848605, ''),
('9200db8a86b910f565cd90faf07c2a63', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847931, ''),
('9407f281fce07a23f60793a10128e7f3', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378942599, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:24:"flash:old:alert_messages";s:132:"<script>$.sticky("Se ha creado el cliente correctamente", {autoclose : 5000, position: "top-center", type: "st-success" });</script>";s:24:"flash:new:alert_messages";s:132:"<script>$.sticky("Se ha creado el cliente correctamente", {autoclose : 5000, position: "top-center", type: "st-success" });</script>";}'),
('95e8b8653a4988130ee6650ef1bc4409', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378930131, ''),
('966e0aa54a5915105f2c6867c5c70141', '186.29.246.244', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379121803, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('98a1fd075b54a6da5a917d5ce47b90ee', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847812, ''),
('9c15e864b1c4c1dbe21690449478f819', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845127, ''),
('9c4f69417bdef01d780d41292dcec227', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848562, ''),
('9cb3bbae22c08235252a20234aa809c2', '186.28.193.76', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379338792, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('9d931c46c61d67400a05c7be3656f1de', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379007504, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('a0ebc3f154fb3024fdeffaf3f9f750f6', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379424432, ''),
('a132d5f15b35e43ed1d7f7d66b594877', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378928619, ''),
('a3c9c5f19fc69d8156c9b6946b8c7133', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379705665, ''),
('a8cba6328652b1b21cc02c345a3dea99', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845229, ''),
('a9a92dca5460ddbef9133a94bd0bae69', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845083, ''),
('b20bd91b0a0be8e791558c03dbaf9025', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845066, ''),
('b3435cbb10233de49b769508793573f2', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845106, ''),
('b51fe6eb664a0de72e22f15891e28f36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379724472, 'a:5:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"3";}'),
('bd5dabd9f05133d1c2df3bcfbc9669b3', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378826765, 'a:5:{s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('c34a8c59abf95b5e926905f693916e86', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379722113, 'a:5:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"4";}'),
('c49a064418d21243fddedff480172730', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378844773, ''),
('c652edbf9cab27d94781afa4bda15e3c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379606093, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c6c6e01c7d11d2dceb824d2fcf0f2356', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848067, ''),
('ce9186bc2555b8fb1fc1da6f9cde4995', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379606093, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d15fa4a8fb78f77f64c47bf526e6fbd6', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378872629, 'a:5:{s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";}'),
('d4d70336e9c7b5d821ad33253846d708', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1380915551, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"2";s:12:"page_product";s:1:"2";}'),
('d572f92d3f340217a02c055b7d4e9203', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845010, ''),
('d632ac0d849127dd1a0bb98da46fd74f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379724474, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d9c8c26782f19153b5925acc87d60d95', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378847884, ''),
('d9e71ab71d6f3ad17cb520200a18324e', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379050659, ''),
('de54f3b205b9a24914d2f5f11792eda4', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378933495, ''),
('deeac66804e01e9ec97aea1b8e2d9b58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380669402, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_product";s:1:"1";s:11:"page_barner";s:1:"2";}'),
('e202b3bf48048f84e9f6975b6c754735', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378953319, ''),
('e273094c6f30fc60baf30661751c35f1', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378872692, ''),
('e95853d0c58b08c4c6d15ee3b1a83fb3', '186.29.246.244', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379015006, ''),
('ea6cd112b972df545b1c9e4fca3b5bd2', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378851762, ''),
('eb5ee4cdcfacefa0c88355c92bc73fe2', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379014779, ''),
('eb700961051b32b532b8198ba2e39afc', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378938349, ''),
('edea00b75c40887c292ad96fd54383f0', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848582, ''),
('f011899594b5082d4bd34645e5f5bfa9', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378914909, ''),
('f42397e47e66deec54c8dcbb599b44df', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378851350, ''),
('f689e08c136f0ead992fddd61320f31b', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379050616, ''),
('fc3b1266ad7538168c145a95c572a665', '190.146.2.54', 'Mozilla/5.0 (Windows NT 5.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1379016410, ''),
('fc9416c90f17e28dc9e687121f7851a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1380669402, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('fe08e75d1846650c7fdb687c6cd67b14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1379635707, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('fec14063d87968de590e9e08e273961f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378848189, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sublinea`
--

CREATE TABLE IF NOT EXISTS `cms_sublinea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(38) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `imagen_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sublinea_linea1_idx` (`linea_id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_sublinea`
--

INSERT INTO `cms_sublinea` (`id`, `titulo`, `linea_id`, `imagen_id`) VALUES
(5, 'Sector Éxito 2', 5, 228);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

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
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `departamento_id`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL, 14),
(7, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'German Pinilla', 'dcf1564b2a2e7e132bcc1c11307a09de9e5a44ba', 'dc6daa3ef9', 'gprubiano53@gmail.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(9, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Andy', '2a287fe5980885a9d71f2f865af9908d0053138f', 'ec459600e0', 'andy@andy.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(10, '\0\0', 'elbertjose', '5c133442350e41793c64e2bb39e8157f2cc048fd', '730d87e794', 'elbert.tous@imaginamos.co', NULL, NULL, NULL, 'ad289a6efc6ba783e678f9ea955d1114910ca8cd', 2013, 2013, 1, 'Elbert Jose', 'Tous Ballesteros', 'Imaginamos', '3205788788', 14);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(7, 7, 1),
(9, 9, 1),
(10, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_venta`
--

CREATE TABLE IF NOT EXISTS `cms_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_confirmacion` varchar(45) NOT NULL,
  `total_venta` double NOT NULL,
  `cms_users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_venta_cms_users1_idx` (`cms_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_venta_producto`
--

CREATE TABLE IF NOT EXISTS `cms_venta_producto` (
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`venta_id`,`producto_id`),
  KEY `fk_venta_has_producto_producto1_idx` (`producto_id`),
  KEY `fk_venta_has_producto_venta1_idx` (`venta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_accesorio`
--
ALTER TABLE `cms_accesorio`
  ADD CONSTRAINT `fk_accesorio_cms_imagen` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_accesorio_cms_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_barner_der_down`
--
ALTER TABLE `cms_barner_der_down`
  ADD CONSTRAINT `cms_barner_der_down_ibfk_1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_der_down_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_barner_der_up`
--
ALTER TABLE `cms_barner_der_up`
  ADD CONSTRAINT `cms_barner_der_up_ibfk_1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_der_up_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_barner_izq`
--
ALTER TABLE `cms_barner_izq`
  ADD CONSTRAINT `fk_barner_izq_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_izq_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_caso_exito`
--
ALTER TABLE `cms_caso_exito`
  ADD CONSTRAINT `fk_caso_exito_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caso_exito_sublinea1` FOREIGN KEY (`sublinea_id`) REFERENCES `cms_sublinea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_caso_exito_noticia_relacionada`
--
ALTER TABLE `cms_caso_exito_noticia_relacionada`
  ADD CONSTRAINT `fk_caso_exito_has_noticia_relacionada_caso_exito1` FOREIGN KEY (`caso_exito_id`) REFERENCES `cms_caso_exito` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caso_exito_has_noticia_relacionada_noticia_relacionada1` FOREIGN KEY (`noticia_relacionada_id`) REFERENCES `cms_noticia_relacionada` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_categoria`
--
ALTER TABLE `cms_categoria`
  ADD CONSTRAINT `fk_categoria_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_categoria_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_certificado`
--
ALTER TABLE `cms_certificado`
  ADD CONSTRAINT `fk_certificado_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_certificado_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_cliente`
--
ALTER TABLE `cms_cliente`
  ADD CONSTRAINT `fk_cliente_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_cliente_caso_exito`
--
ALTER TABLE `cms_cliente_caso_exito`
  ADD CONSTRAINT `fk_cliente_has_caso_exito_caso_exito1` FOREIGN KEY (`caso_exito_id`) REFERENCES `cms_caso_exito` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_has_caso_exito_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cms_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_cliente_gestion_flota`
--
ALTER TABLE `cms_cliente_gestion_flota`
  ADD CONSTRAINT `fk_cliente_has_gestion_flota_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cms_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_has_gestion_flota_gestion_flota1` FOREIGN KEY (`gestion_flota_id`) REFERENCES `cms_gestion_flota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_gestion_flota`
--
ALTER TABLE `cms_gestion_flota`
  ADD CONSTRAINT `fk_gestion_flota_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gestion_flota_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_gestion_flota_noticia_relacionada`
--
ALTER TABLE `cms_gestion_flota_noticia_relacionada`
  ADD CONSTRAINT `fk_gestion_flota_has_noticia_relacionada_gestion_flota1` FOREIGN KEY (`gestion_flota_id`) REFERENCES `cms_gestion_flota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gestion_flota_has_noticia_relacionada_noticia_relacionada1` FOREIGN KEY (`noticia_relacionada_id`) REFERENCES `cms_noticia_relacionada` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_groups_permissions`
--
ALTER TABLE `cms_groups_permissions`
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `cms_permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_grupo`
--
ALTER TABLE `cms_grupo`
  ADD CONSTRAINT `cms_grupo_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_logo`
--
ALTER TABLE `cms_logo`
  ADD CONSTRAINT `fk_logo_imagen1` FOREIGN KEY (`id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_nosotros`
--
ALTER TABLE `cms_nosotros`
  ADD CONSTRAINT `cms_nosotros_ibfk_1` FOREIGN KEY (`parrafo1_id`) REFERENCES `cms_parrafo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nosotros_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nosotros_parrafo1` FOREIGN KEY (`parrafo_id`) REFERENCES `cms_parrafo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_noticia_relacionada`
--
ALTER TABLE `cms_noticia_relacionada`
  ADD CONSTRAINT `fk_noticia_relacionada_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_noticia_relacionada_parrafo1` FOREIGN KEY (`parrafo_id`) REFERENCES `cms_parrafo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_novedad`
--
ALTER TABLE `cms_novedad`
  ADD CONSTRAINT `fk_novedad_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto`
--
ALTER TABLE `cms_producto`
  ADD CONSTRAINT `fk_producto_grupo` FOREIGN KEY (`grupo_id`) REFERENCES `cms_grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_producto_imagen`
--
ALTER TABLE `cms_producto_imagen`
  ADD CONSTRAINT `fk_producto_has_imagen_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_has_imagen_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_propuesta_valor`
--
ALTER TABLE `cms_propuesta_valor`
  ADD CONSTRAINT `fk_propuesta_valor_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_servicio`
--
ALTER TABLE `cms_servicio`
  ADD CONSTRAINT `fk_servicio_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicio_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_sublinea`
--
ALTER TABLE `cms_sublinea`
  ADD CONSTRAINT `fk_sublinea_linea1` FOREIGN KEY (`linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users`
--
ALTER TABLE `cms_users`
  ADD CONSTRAINT `cms_users_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `cms_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_cms_venta_cms_users1` FOREIGN KEY (`cms_users_id`) REFERENCES `cms_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_venta_producto`
--
ALTER TABLE `cms_venta_producto`
  ADD CONSTRAINT `fk_venta_has_producto_producto1` FOREIGN KEY (`producto_id`) REFERENCES `cms_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_has_producto_venta1` FOREIGN KEY (`venta_id`) REFERENCES `cms_venta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
