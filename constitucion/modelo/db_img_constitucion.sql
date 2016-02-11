-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2014 a las 17:48:05
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `img_constitucion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_abogados`
--
-- Creación: 04-03-2014 a las 13:39:57
--

DROP TABLE IF EXISTS `cms_abogados`;
CREATE TABLE IF NOT EXISTS `cms_abogados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cms_especialidad` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `cms_abogados`
--

INSERT INTO `cms_abogados` (`id`, `cms_nombre`, `cms_especialidad`, `cms_descripcion`, `imagen_id`) VALUES
(31, 'nombre', 'especialidad', '<p>esfefreffrefrwerfre</p>\r\n', 54),
(32, 'nombre', 'especialidad', '<p>dasdsadasdasdasdsad</p>\r\n', 53),
(33, 'dsdfsdf', 'sdfsdfds', '<p>sdfsdfsdfsdf</p>\r\n', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--
-- Creación: 04-03-2014 a las 13:39:58
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
-- Estructura de tabla para la tabla `cms_blog`
--
-- Creación: 04-03-2014 a las 13:39:58
--

DROP TABLE IF EXISTS `cms_blog`;
CREATE TABLE IF NOT EXISTS `cms_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorias_blog_id` int(11) NOT NULL,
  `cms_titulo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_subtitulo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_fecha` datetime NOT NULL,
  `cms_texto` text COLLATE utf8_unicode_ci NOT NULL,
  `cms_destacado` binary(1) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_blog_cms_categorias_blog1_idx` (`categorias_blog_id`),
  KEY `fk_cms_blog_cms_archvos1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_blog`
--

INSERT INTO `cms_blog` (`id`, `categorias_blog_id`, `cms_titulo`, `cms_subtitulo`, `cms_fecha`, `cms_texto`, `cms_destacado`, `imagen_id`) VALUES
(1, 1, 'Interna', 'Lorem ipsum dolor sit amet', '2014-02-17 00:00:00', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>\r\n', '1', 58),
(2, 1, 'Interna2', NULL, '2014-02-17 21:27:08', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>\r\n', '1', 60),
(3, 2, 'Interna3', 'Lorem ipsum dolor sit amet', '2014-02-28 00:00:00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.', '1', 61),
(4, 2, 'Interna4', 'Lorem ipsum dolor sit amet', '2014-02-28 00:00:00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.', '1', 62);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_carro_compras`
--
-- Creación: 04-03-2014 a las 13:39:58
--

DROP TABLE IF EXISTS `cms_carro_compras`;
CREATE TABLE IF NOT EXISTS `cms_carro_compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_tipo` enum('L','P') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'L',
  `cms_id` int(11) DEFAULT NULL,
  `cms_tipolibro` enum('P','I','A') COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_valorarticulo` decimal(10,2) NOT NULL,
  `cms_valorenvio` decimal(10,2) DEFAULT NULL,
  `cms_fecha_compra` datetime DEFAULT NULL,
  `cms_pago` enum('N','Y') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `usuariosfront_id` int(11) DEFAULT NULL,
  `cms_nombres` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_apellidos` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_direccion` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_ciudad` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_carro_compras_cms_usuariosfront1_idx` (`usuariosfront_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_carro_compras`
--

INSERT INTO `cms_carro_compras` (`id`, `cms_tipo`, `cms_id`, `cms_tipolibro`, `cms_valorarticulo`, `cms_valorenvio`, `cms_fecha_compra`, `cms_pago`, `usuariosfront_id`, `cms_nombres`, `cms_apellidos`, `cms_direccion`, `cms_ciudad`, `cms_telefono`) VALUES
(1, 'L', 1, 'P', '50000.00', '200000.00', '2014-03-04 00:00:00', '', 10, 'Felipe', 'Camacho', 'cra 14b 161 54', 'bogota', '6738631');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categorias_blog`
--
-- Creación: 04-03-2014 a las 13:39:58
--

DROP TABLE IF EXISTS `cms_categorias_blog`;
CREATE TABLE IF NOT EXISTS `cms_categorias_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_categoria` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_categorias_blog`
--

INSERT INTO `cms_categorias_blog` (`id`, `cms_categoria`) VALUES
(1, 'categoria'),
(2, 'categoria2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_comentarios`
--
-- Creación: 04-03-2014 a las 13:39:58
--

DROP TABLE IF EXISTS `cms_comentarios`;
CREATE TABLE IF NOT EXISTS `cms_comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_clasificacion` enum('A','I','E') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A',
  `cms_tipo` enum('T','I','E','J1','J2') COLLATE utf8_unicode_ci NOT NULL,
  `cms_titulo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_comentario` text COLLATE utf8_unicode_ci,
  `constitucion_id` int(11) NOT NULL,
  `imagen_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_comentarios_cms_constitucion1_idx` (`constitucion_id`),
  KEY `fk_cms_comentarios_cms_comentarios_editor1_idx` (`cms_titulo`),
  KEY `imagen_id` (`imagen_id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `cms_comentarios`
--

INSERT INTO `cms_comentarios` (`id`, `cms_clasificacion`, `cms_tipo`, `cms_titulo`, `cms_comentario`, `constitucion_id`, `imagen_id`, `blog_id`) VALUES
(60, 'A', 'T', 'sadsadsadsa', '<p>asdadsadasdsad</p>\r\n', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_comunicados`
--
-- Creación: 04-03-2014 a las 13:39:59
--

DROP TABLE IF EXISTS `cms_comunicados`;
CREATE TABLE IF NOT EXISTS `cms_comunicados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_texto` text COLLATE utf8_unicode_ci NOT NULL,
  `demandas_tutelas_id` int(11) NOT NULL,
  `cms_anio` int(11) NOT NULL,
  `cms_mes` int(11) NOT NULL,
  `temas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demandas_tutelas_id` (`demandas_tutelas_id`),
  KEY `temas_id` (`temas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_comunicados`
--

INSERT INTO `cms_comunicados` (`id`, `cms_texto`, `demandas_tutelas_id`, `cms_anio`, `cms_mes`, `temas_id`) VALUES
(4, 'sadfdsf', 3, 2014, 1, 1),
(5, 'dasdsadsa', 3, 2013, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_concordancias`
--
-- Creación: 04-03-2014 a las 13:39:59
--

DROP TABLE IF EXISTS `cms_concordancias`;
CREATE TABLE IF NOT EXISTS `cms_concordancias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_clasificacion` enum('A','I','E') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A',
  `cms_concordancias` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `constitucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_comentarios_concordancias_cms_constitucion1_idx` (`constitucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_constitucion`
--
-- Creación: 04-03-2014 a las 13:39:59
--

DROP TABLE IF EXISTS `cms_constitucion`;
CREATE TABLE IF NOT EXISTS `cms_constitucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_articulo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_texto` text COLLATE utf8_unicode_ci NOT NULL,
  `titulos_constitucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_constitucion_cms_titulos_constitucion1_idx` (`titulos_constitucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_constitucion`
--

INSERT INTO `cms_constitucion` (`id`, `cms_articulo`, `cms_texto`, `titulos_constitucion_id`) VALUES
(4, 'ARTICULO   13.', '<p>Todas las personas nacen libres e iguales ante la ley, recibir&aacute;n la misma protecci&oacute;n y trato de las autoridades y gozar&aacute;n de los mismos derechos, libertades y oportunidades sin ninguna discriminaci&oacute;n por razones de sexo, raza, origen nacional o familiar, lengua, religi&oacute;n, opini&oacute;n pol&iacute;tica o filos&oacute;fica.</p>\n\n<p>El Estado promover&aacute; las condiciones para que la igualdad sea real y efectiva y adoptar&aacute; medidas en favor de grupos discriminados o marginados.</p>\n\n<p>El Estado proteger&aacute; especialmente a aquellas personas que por su condici&oacute;n econ&oacute;mica, f&iacute;sica o mental, se encuentren en circunstancia de debilidad manifiesta y sancionar&aacute; los abusos o maltratos que contra ellas se cometan.</p>\n', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--
-- Creación: 04-03-2014 a las 13:40:00
--

DROP TABLE IF EXISTS `cms_contacto`;
CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(1, 'Calle 90 Cra. 19a of. 301 Edificio 90', '+ 57 555 555 5555', '+ 57 555 555 5555', '+ 57 (1) 555 5555', 'cms@imaginamos.com', 'Bogotá - Colombia', 4.678391, -74.053883);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_demandas_tutelas`
--
-- Creación: 04-03-2014 a las 13:40:00
--

DROP TABLE IF EXISTS `cms_demandas_tutelas`;
CREATE TABLE IF NOT EXISTS `cms_demandas_tutelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('D','T') COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_anio` int(11) DEFAULT NULL,
  `cms_mes` int(11) DEFAULT NULL,
  `cms_numeroref` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_demandante_accionante` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `magistrados_id` int(11) NOT NULL,
  `cms_norma_demandada` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `constitucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_demandas_tutelas_cms_archvos1_idx` (`link_path`),
  KEY `fk_cms_demandas_tutelas_cms_magistrados1_idx` (`magistrados_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_demandas_tutelas`
--

INSERT INTO `cms_demandas_tutelas` (`id`, `tipo`, `cms_anio`, `cms_mes`, `cms_numeroref`, `cms_demandante_accionante`, `link_path`, `magistrados_id`, `cms_norma_demandada`, `constitucion_id`) VALUES
(2, 'D', 2014, 1, '24343423432', 'asdasdsadsadsadsd', './uploads/270bfd83a0a8546da219bd14f2711291.pdf', 1, 'norma', 0),
(3, 'D', 1951, 2, 'asdsadsad', 'asdsadsadasdsad', './uploads/d8443dad2bc002fd8a026b1bc0aadab6.pdf', 1, 'asdsadasdasdsad', 0),
(4, 'T', 1953, 3, 'asdsadsadsad', 'sadasdasdasdasdsad', './uploads/21df5e38a8a566b3749d5eaa196d0ed0.pdf', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_departamento`
--
-- Creación: 04-03-2014 a las 13:40:00
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
(1, 'AMAZONAS'),
(2, 'ANTIOQUIA'),
(3, 'ARAUCA'),
(4, 'ATLÁNTICO'),
(5, 'BOLÍVAR'),
(6, 'BOYACÁ'),
(7, 'CALDAS'),
(8, 'CAQUETÁ'),
(9, 'CASANARE'),
(10, 'CAUCA'),
(11, 'CESAR'),
(12, 'CHOCÓ'),
(13, 'CÓRDOBA'),
(14, 'CUNDINAMARCA'),
(15, 'GUAINÍA'),
(16, 'GUAVIARE'),
(17, 'HUILA'),
(18, 'LA GUAJIRA'),
(19, 'MAGDALENA'),
(20, 'META'),
(21, 'NARIÑO'),
(22, 'NORTE DE SANTANDER'),
(23, 'PUTUMAYO'),
(24, 'QUINDÍO'),
(25, 'RISARALDA'),
(26, 'SAN ANDRÉS Y ROVIDENCIA'),
(27, 'SANTANDER'),
(28, 'SUCRE'),
(29, 'TOLIMA'),
(30, 'VALLE DEL CAUCA'),
(31, 'VAUPÉS'),
(32, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--
-- Creación: 04-03-2014 a las 13:40:00
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
-- Creación: 04-03-2014 a las 13:40:01
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_groups_permissions`
--

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 1, 1, 1),
(6, 1, 2, 1, 1, 1, 1),
(7, 2, 1, 1, 0, 0, 0),
(8, 2, 2, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen`
--
-- Creación: 04-03-2014 a las 13:40:01
--

DROP TABLE IF EXISTS `cms_imagen`;
CREATE TABLE IF NOT EXISTS `cms_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `cms_imagen`
--

INSERT INTO `cms_imagen` (`id`, `path`, `name`) VALUES
(41, './uploads/aa564600c9c5183b3179936dcc75220b.jpg', NULL),
(42, './uploads/e76b6379dfe89db1de23818dd5d97f5c.jpg', NULL),
(45, './uploads/001b9878772930c033cc7ccf8ad2b257.jpg', NULL),
(52, './uploads/6618a4ef66b0767e415438c39f29bd5b.jpg', NULL),
(53, './uploads/4331f034b4b33567386494a847a01d57.jpg', NULL),
(54, './uploads/88e5de33f2d934dfee3596c4a57f3c15.jpg', NULL),
(55, './uploads/bbd1e36b6b90f7c1a49571805bfe6025.jpg', NULL),
(56, './uploads/fe4bf234d8a4d2e2bb2826ec77b2de7c.jpg', NULL),
(57, './uploads/22136a1e9d2998c437c45b03345b80cd.jpg', NULL),
(58, './uploads/2aa425be79efc3363506eab5f94f5a87.jpg', NULL),
(60, './uploads/9ad56c76957b10f2b8d61d5b36defb5d.jpg', NULL),
(61, './uploads/b1b0687f59e75ea85a7451165bdbcbba.jpg', NULL),
(62, './uploads/6cfa04a237143385f9a2f7aa5e6023df.jpg', NULL),
(64, './uploads/95408ae3a025f597c708b23283e45b00.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_libros`
--
-- Creación: 04-03-2014 a las 13:40:01
--

DROP TABLE IF EXISTS `cms_libros`;
CREATE TABLE IF NOT EXISTS `cms_libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_titulo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cms_autor` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cms_preciopdf` decimal(10,0) NOT NULL,
  `cms_precioimpreso` decimal(10,0) NOT NULL,
  `cms_descripcion` varchar(170) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_id` int(11) NOT NULL,
  `cms_fecha` date NOT NULL,
  `cms_precioenvio` decimal(10,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_libros`
--

INSERT INTO `cms_libros` (`id`, `cms_titulo`, `cms_autor`, `cms_preciopdf`, `cms_precioimpreso`, `cms_descripcion`, `imagen_id`, `cms_fecha`, `cms_precioenvio`) VALUES
(1, 'Título del libro', 'Loren Ipsum', '50000', '60000', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, veritatis et quasi architecto beatae vitae dicta sunt explicabo\r\n', 64, '2014-02-17', '200000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--
-- Creación: 04-03-2014 a las 13:40:02
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
-- Estructura de tabla para la tabla `cms_magistrados`
--
-- Creación: 04-03-2014 a las 13:40:02
--

DROP TABLE IF EXISTS `cms_magistrados`;
CREATE TABLE IF NOT EXISTS `cms_magistrados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_nombre` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_magistrados`
--

INSERT INTO `cms_magistrados` (`id`, `cms_nombre`) VALUES
(1, 'magistrado de prueba cambio'),
(5, 'magistrado1'),
(6, 'magistrado2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--
-- Creación: 04-03-2014 a las 13:40:02
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
-- Estructura de tabla para la tabla `cms_municipio`
--
-- Creación: 04-03-2014 a las 13:40:02
--

DROP TABLE IF EXISTS `cms_municipio`;
CREATE TABLE IF NOT EXISTS `cms_municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_municipios_cms_departamento1` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1113 ;

--
-- Volcado de datos para la tabla `cms_municipio`
--

INSERT INTO `cms_municipio` (`id`, `nombre`, `departamento_id`) VALUES
(1, 'EL ENCANTO', 1),
(2, 'LA CHORRERA', 1),
(3, 'LA PEDRERA', 1),
(4, 'LA VICTORIA', 1),
(5, 'LETICIA', 1),
(6, 'MIRITI', 1),
(7, 'PUERTO ALEGRIA', 1),
(8, 'PUERTO ARICA', 1),
(9, 'PUERTO NARIÑO', 1),
(10, 'PUERTO SANTANDER', 1),
(11, 'TURAPACA', 1),
(12, 'ABEJORRAL', 2),
(13, 'ABRIAQUI', 2),
(14, 'ALEJANDRIA', 2),
(15, 'AMAGA', 2),
(16, 'AMALFI', 2),
(17, 'ANDES', 2),
(18, 'ANGELOPOLIS', 2),
(19, 'ANGOSTURA', 2),
(20, 'ANORI', 2),
(21, 'ANTIOQUIA', 2),
(22, 'ANZA', 2),
(23, 'APARTADO', 2),
(24, 'ARBOLETES', 2),
(25, 'ARGELIA', 2),
(26, 'ARMENIA', 2),
(27, 'BARBOSA', 2),
(28, 'BELLO', 2),
(29, 'BELMIRA', 2),
(30, 'BETANIA', 2),
(31, 'BETULIA', 2),
(32, 'BOLIVAR', 2),
(33, 'BRICEÑO', 2),
(34, 'BURITICA', 2),
(35, 'CACERES', 2),
(36, 'CAICEDO', 2),
(37, 'CALDAS', 2),
(38, 'CAMPAMENTO', 2),
(39, 'CANASGORDAS', 2),
(40, 'CARACOLI', 2),
(41, 'CARAMANTA', 2),
(42, 'CAREPA', 2),
(43, 'CARMEN DE VIBORAL', 2),
(44, 'CAROLINA DEL PRINCIPE', 2),
(45, 'CAUCASIA', 2),
(46, 'CHIGORODO', 2),
(47, 'CISNEROS', 2),
(48, 'COCORNA', 2),
(49, 'CONCEPCION', 2),
(50, 'CONCORDIA', 2),
(51, 'COPACABANA', 2),
(52, 'DABEIBA', 2),
(53, 'DONMATIAS', 2),
(54, 'EBEJICO', 2),
(55, 'EL BAGRE', 2),
(56, 'EL PENOL', 2),
(57, 'EL RETIRO', 2),
(58, 'ENTRERRIOS', 2),
(59, 'ENVIGADO', 2),
(60, 'FREDONIA', 2),
(61, 'FRONTINO', 2),
(62, 'GIRALDO', 2),
(63, 'GIRARDOTA', 2),
(64, 'GOMEZ PLATA', 2),
(65, 'GRANADA', 2),
(66, 'GUADALUPE', 2),
(67, 'GUARNE', 2),
(68, 'GUATAQUE', 2),
(69, 'HELICONIA', 2),
(70, 'HISPANIA', 2),
(71, 'ITAGUI', 2),
(72, 'ITUANGO', 2),
(73, 'JARDIN', 2),
(74, 'JERICO', 2),
(75, 'LA CEJA', 2),
(76, 'LA ESTRELLA', 2),
(77, 'LA PINTADA', 2),
(78, 'LA UNION', 2),
(79, 'LIBORINA', 2),
(80, 'MACEO', 2),
(81, 'MARINILLA', 2),
(82, 'MEDELLIN', 2),
(83, 'MONTEBELLO', 2),
(84, 'MURINDO', 2),
(85, 'MUTATA', 2),
(86, 'NARINO', 2),
(87, 'NECHI', 2),
(88, 'NECOCLI', 2),
(89, 'OLAYA', 2),
(90, 'PEQUE', 2),
(91, 'PUEBLORRICO', 2),
(92, 'PUERTO BERRIO', 2),
(93, 'PUERTO NARE', 2),
(94, 'PUERTO TRIUNFO', 2),
(95, 'REMEDIOS', 2),
(96, 'RIONEGRO', 2),
(97, 'SABANALARGA', 2),
(98, 'SABANETA', 2),
(99, 'SALGAR', 2),
(100, 'SAN ANDRES DE CUERQUIA', 2),
(101, 'SAN CARLOS', 2),
(102, 'SAN FRANCISCO', 2),
(103, 'SAN JERONIMO', 2),
(104, 'SAN JOSE DE LA MONTAÑA', 2),
(105, 'SAN JUAN DE URABA', 2),
(106, 'SAN LUIS', 2),
(107, 'SAN PEDRO DE LOS MILAGROS', 2),
(108, 'SAN PEDRO DE URABA', 2),
(109, 'SAN RAFAEL', 2),
(110, 'SAN ROQUE', 2),
(111, 'SAN VICENTE', 2),
(112, 'SANTA BARBARA', 2),
(113, 'SANTA ROSA DE OSOS', 2),
(114, 'SANTO DOMINGO', 2),
(115, 'SANTUARIO', 2),
(116, 'SEGOVIA', 2),
(117, 'SONSON', 2),
(118, 'SOPETRAN', 2),
(119, 'TAMESIS', 2),
(120, 'TARAZA', 2),
(121, 'TARSO', 2),
(122, 'TITIRIBI', 2),
(123, 'TOLEDO', 2),
(124, 'TURBO', 2),
(125, 'URAMITA', 2),
(126, 'URRAO', 2),
(127, 'VALDIVIA', 2),
(128, 'VALPARAISO', 2),
(129, 'VEGACHI', 2),
(130, 'VENECIA', 2),
(131, 'VIGIA DEL FUERTE', 2),
(132, 'YALI', 2),
(133, 'YARUMAL', 2),
(134, 'YOLOMBO', 2),
(135, 'YONDO', 2),
(136, 'ZARAGOZA', 2),
(137, 'ARAUCA', 3),
(138, 'ARAUQUITA', 3),
(139, 'CRAVO NORTE', 3),
(140, 'FORTUL', 3),
(141, 'PUERTO RONDON', 3),
(142, 'SARAVENA', 3),
(143, 'TAME', 3),
(144, 'BARANOA', 4),
(145, 'BARRANQUILLA', 4),
(146, 'CAMPO DE LA CRUZ', 4),
(147, 'CANDELARIA', 4),
(148, 'GALAPA', 4),
(149, 'JUAN DE ACOSTA', 4),
(150, 'LURUACO', 4),
(151, 'MALAMBO', 4),
(152, 'MANATI', 4),
(153, 'PALMAR DE VARELA', 4),
(154, 'PIOJO', 4),
(155, 'POLO NUEVO', 4),
(156, 'PONEDERA', 4),
(157, 'PUERTO COLOMBIA', 4),
(158, 'REPELON', 4),
(159, 'SABANAGRANDE', 4),
(160, 'SABANALARGA', 4),
(161, 'SANTA LUCIA', 4),
(162, 'SANTO TOMAS', 4),
(163, 'SOLEDAD', 4),
(164, 'SUAN', 4),
(165, 'TUBARA', 4),
(166, 'USIACURI', 4),
(167, 'ACHI', 5),
(168, 'ALTOS DEL ROSARIO', 5),
(169, 'ARENAL', 5),
(170, 'ARJONA', 5),
(171, 'ARROYOHONDO', 5),
(172, 'BARRANCO DE LOBA', 5),
(173, 'BRAZUELO DE PAPAYAL', 5),
(174, 'CALAMAR', 5),
(175, 'CANTAGALLO', 5),
(176, 'CARTAGENA DE INDIAS', 5),
(177, 'CICUCO', 5),
(178, 'CLEMENCIA', 5),
(179, 'CORDOBA', 5),
(180, 'EL CARMEN DE BOLIVAR', 5),
(181, 'EL GUAMO', 5),
(182, 'EL PENION', 5),
(183, 'HATILLO DE LOBA', 5),
(184, 'MAGANGUE', 5),
(185, 'MAHATES', 5),
(186, 'MARGARITA', 5),
(187, 'MARIA LA BAJA', 5),
(188, 'MONTECRISTO', 5),
(189, 'MORALES', 5),
(190, 'MORALES', 5),
(191, 'NOROSI', 5),
(192, 'PINILLOS', 5),
(193, 'REGIDOR', 5),
(194, 'RIO VIEJO', 5),
(195, 'SAN CRISTOBAL', 5),
(196, 'SAN ESTANISLAO', 5),
(197, 'SAN FERNANDO', 5),
(198, 'SAN JACINTO', 5),
(199, 'SAN JACINTO DEL CAUCA', 5),
(200, 'SAN JUAN DE NEPOMUCENO', 5),
(201, 'SAN MARTIN DE LOBA', 5),
(202, 'SAN PABLO', 5),
(203, 'SAN PABLO NORTE', 5),
(204, 'SANTA CATALINA', 5),
(205, 'SANTA CRUZ DE MOMPOX', 5),
(206, 'SANTA ROSA', 5),
(207, 'SANTA ROSA DEL SUR', 5),
(208, 'SIMITI', 5),
(209, 'SOPLAVIENTO', 5),
(210, 'TALAIGUA NUEVO', 5),
(211, 'TUQUISIO', 5),
(212, 'TURBACO', 5),
(213, 'TURBANA', 5),
(214, 'VILLANUEVA', 5),
(215, 'ZAMBRANO', 5),
(216, 'AQUITANIA', 6),
(217, 'ARCABUCO', 6),
(218, 'BELÉN', 6),
(219, 'BERBEO', 6),
(220, 'BETÉITIVA', 6),
(221, 'BOAVITA', 6),
(222, 'BOYACÁ', 6),
(223, 'BRICEÑO', 6),
(224, 'BUENAVISTA', 6),
(225, 'BUSBANZÁ', 6),
(226, 'CALDAS', 6),
(227, 'CAMPO HERMOSO', 6),
(228, 'CERINZA', 6),
(229, 'CHINAVITA', 6),
(230, 'CHIQUINQUIRÁ', 6),
(231, 'CHÍQUIZA', 6),
(232, 'CHISCAS', 6),
(233, 'CHITA', 6),
(234, 'CHITARAQUE', 6),
(235, 'CHIVATÁ', 6),
(236, 'CIÉNEGA', 6),
(237, 'CÓMBITA', 6),
(238, 'COPER', 6),
(239, 'CORRALES', 6),
(240, 'COVARACHÍA', 6),
(241, 'CUBARA', 6),
(242, 'CUCAITA', 6),
(243, 'CUITIVA', 6),
(244, 'DUITAMA', 6),
(245, 'EL COCUY', 6),
(246, 'EL ESPINO', 6),
(247, 'FIRAVITOBA', 6),
(248, 'FLORESTA', 6),
(249, 'GACHANTIVÁ', 6),
(250, 'GÁMEZA', 6),
(251, 'GARAGOA', 6),
(252, 'GUACAMAYAS', 6),
(253, 'GÜICÁN', 6),
(254, 'IZA', 6),
(255, 'JENESANO', 6),
(256, 'JERICÓ', 6),
(257, 'LA UVITA', 6),
(258, 'LA VICTORIA', 6),
(259, 'LABRANZA GRANDE', 6),
(260, 'MACANAL', 6),
(261, 'MARIPÍ', 6),
(262, 'MIRAFLORES', 6),
(263, 'MONGUA', 6),
(264, 'MONGUÍ', 6),
(265, 'MONIQUIRÁ', 6),
(266, 'MOTAVITA', 6),
(267, 'MUZO', 6),
(268, 'NOBSA', 6),
(269, 'NUEVO COLÓN', 6),
(270, 'OICATÁ', 6),
(271, 'OTANCHE', 6),
(272, 'PACHAVITA', 6),
(273, 'PÁEZ', 6),
(274, 'PAIPA', 6),
(275, 'PAJARITO', 6),
(276, 'PANQUEBA', 6),
(277, 'PAUNA', 6),
(278, 'PAYA', 6),
(279, 'PAZ DE RÍO', 6),
(280, 'PESCA', 6),
(281, 'PISBA', 6),
(282, 'PUERTO BOYACA', 6),
(283, 'QUÍPAMA', 6),
(284, 'RAMIRIQUÍ', 6),
(285, 'RÁQUIRA', 6),
(286, 'RONDÓN', 6),
(287, 'SABOYÁ', 6),
(288, 'SÁCHICA', 6),
(289, 'SAMACÁ', 6),
(290, 'SAN EDUARDO', 6),
(291, 'SAN JOSÉ DE PARE', 6),
(292, 'SAN LUÍS DE GACENO', 6),
(293, 'SAN MATEO', 6),
(294, 'SAN MIGUEL DE SEMA', 6),
(295, 'SAN PABLO DE BORBUR', 6),
(296, 'SANTA MARÍA', 6),
(297, 'SANTA ROSA DE VITERBO', 6),
(298, 'SANTA SOFÍA', 6),
(299, 'SANTANA', 6),
(300, 'SATIVANORTE', 6),
(301, 'SATIVASUR', 6),
(302, 'SIACHOQUE', 6),
(303, 'SOATÁ', 6),
(304, 'SOCHA', 6),
(305, 'SOCOTÁ', 6),
(306, 'SOGAMOSO', 6),
(307, 'SORA', 6),
(308, 'SORACÁ', 6),
(309, 'SOTAQUIRÁ', 6),
(310, 'SUSACÓN', 6),
(311, 'SUTARMACHÁN', 6),
(312, 'TASCO', 6),
(313, 'TIBANÁ', 6),
(314, 'TIBASOSA', 6),
(315, 'TINJACÁ', 6),
(316, 'TIPACOQUE', 6),
(317, 'TOCA', 6),
(318, 'TOGÜÍ', 6),
(319, 'TÓPAGA', 6),
(320, 'TOTA', 6),
(321, 'TUNJA', 6),
(322, 'TUNUNGUÁ', 6),
(323, 'TURMEQUÉ', 6),
(324, 'TUTA', 6),
(325, 'TUTAZÁ', 6),
(326, 'UMBITA', 6),
(327, 'VENTA QUEMADA', 6),
(328, 'VILLA DE LEYVA', 6),
(329, 'VIRACACHÁ', 6),
(330, 'ZETAQUIRA', 6),
(331, 'AGUADAS', 7),
(332, 'ANSERMA', 7),
(333, 'ARANZAZU', 7),
(334, 'BELALCAZAR', 7),
(335, 'CHINCHINÁ', 7),
(336, 'FILADELFIA', 7),
(337, 'LA DORADA', 7),
(338, 'LA MERCED', 7),
(339, 'MANIZALES', 7),
(340, 'MANZANARES', 7),
(341, 'MARMATO', 7),
(342, 'MARQUETALIA', 7),
(343, 'MARULANDA', 7),
(344, 'NEIRA', 7),
(345, 'NORCASIA', 7),
(346, 'PACORA', 7),
(347, 'PALESTINA', 7),
(348, 'PENSILVANIA', 7),
(349, 'RIOSUCIO', 7),
(350, 'RISARALDA', 7),
(351, 'SALAMINA', 7),
(352, 'SAMANA', 7),
(353, 'SAN JOSE', 7),
(354, 'SUPÍA', 7),
(355, 'VICTORIA', 7),
(356, 'VILLAMARÍA', 7),
(357, 'VITERBO', 7),
(358, 'ALBANIA', 8),
(359, 'BELÉN ANDAQUIES', 8),
(360, 'CARTAGENA DEL CHAIRA', 8),
(361, 'CURILLO', 8),
(362, 'EL DONCELLO', 8),
(363, 'EL PAUJIL', 8),
(364, 'FLORENCIA', 8),
(365, 'LA MONTAÑITA', 8),
(366, 'MILÁN', 8),
(367, 'MORELIA', 8),
(368, 'PUERTO RICO', 8),
(369, 'SAN  VICENTE DEL CAGUAN', 8),
(370, 'SAN JOSÉ DE FRAGUA', 8),
(371, 'SOLANO', 8),
(372, 'SOLITA', 8),
(373, 'VALPARAÍSO', 8),
(374, 'AGUAZUL', 9),
(375, 'CHAMEZA', 9),
(376, 'HATO COROZAL', 9),
(377, 'LA SALINA', 9),
(378, 'MANÍ', 9),
(379, 'MONTERREY', 9),
(380, 'NUNCHIA', 9),
(381, 'OROCUE', 9),
(382, 'PAZ DE ARIPORO', 9),
(383, 'PORE', 9),
(384, 'RECETOR', 9),
(385, 'SABANA LARGA', 9),
(386, 'SACAMA', 9),
(387, 'SAN LUIS DE PALENQUE', 9),
(388, 'TAMARA', 9),
(389, 'TAURAMENA', 9),
(390, 'TRINIDAD', 9),
(391, 'VILLANUEVA', 9),
(392, 'YOPAL', 9),
(393, 'ALMAGUER', 10),
(394, 'ARGELIA', 10),
(395, 'BALBOA', 10),
(396, 'BOLÍVAR', 10),
(397, 'BUENOS AIRES', 10),
(398, 'CAJIBIO', 10),
(399, 'CALDONO', 10),
(400, 'CALOTO', 10),
(401, 'CORINTO', 10),
(402, 'EL TAMBO', 10),
(403, 'FLORENCIA', 10),
(404, 'GUAPI', 10),
(405, 'INZA', 10),
(406, 'JAMBALÓ', 10),
(407, 'LA SIERRA', 10),
(408, 'LA VEGA', 10),
(409, 'LÓPEZ', 10),
(410, 'MERCADERES', 10),
(411, 'MIRANDA', 10),
(412, 'MORALES', 10),
(413, 'PADILLA', 10),
(414, 'PÁEZ', 10),
(415, 'PATIA (EL BORDO)', 10),
(416, 'PIAMONTE', 10),
(417, 'PIENDAMO', 10),
(418, 'POPAYÁN', 10),
(419, 'PUERTO TEJADA', 10),
(420, 'PURACE', 10),
(421, 'ROSAS', 10),
(422, 'SAN SEBASTIÁN', 10),
(423, 'SANTA ROSA', 10),
(424, 'SANTANDER DE QUILICHAO', 10),
(425, 'SILVIA', 10),
(426, 'SOTARA', 10),
(427, 'SUÁREZ', 10),
(428, 'SUCRE', 10),
(429, 'TIMBÍO', 10),
(430, 'TIMBIQUÍ', 10),
(431, 'TORIBIO', 10),
(432, 'TOTORO', 10),
(433, 'VILLA RICA', 10),
(434, 'AGUACHICA', 11),
(435, 'AGUSTÍN CODAZZI', 11),
(436, 'ASTREA', 11),
(437, 'BECERRIL', 11),
(438, 'BOSCONIA', 11),
(439, 'CHIMICHAGUA', 11),
(440, 'CHIRIGUANÁ', 11),
(441, 'CURUMANÍ', 11),
(442, 'EL COPEY', 11),
(443, 'EL PASO', 11),
(444, 'GAMARRA', 11),
(445, 'GONZÁLEZ', 11),
(446, 'LA GLORIA', 11),
(447, 'LA JAGUA IBIRICO', 11),
(448, 'MANAURE BALCÓN DEL CESAR', 11),
(449, 'PAILITAS', 11),
(450, 'PELAYA', 11),
(451, 'PUEBLO BELLO', 11),
(452, 'RÍO DE ORO', 11),
(453, 'ROBLES (LA PAZ)', 11),
(454, 'SAN ALBERTO', 11),
(455, 'SAN DIEGO', 11),
(456, 'SAN MARTÍN', 11),
(457, 'TAMALAMEQUE', 11),
(458, 'VALLEDUPAR', 11),
(459, 'ACANDI', 12),
(460, 'ALTO BAUDO (PIE DE PATO)', 12),
(461, 'ATRATO', 12),
(462, 'BAGADO', 12),
(463, 'BAHIA SOLANO (MUTIS)', 12),
(464, 'BAJO BAUDO (PIZARRO)', 12),
(465, 'BOJAYA (BELLAVISTA)', 12),
(466, 'CANTON DE SAN PABLO', 12),
(467, 'CARMEN DEL DARIEN', 12),
(468, 'CERTEGUI', 12),
(469, 'CONDOTO', 12),
(470, 'EL CARMEN', 12),
(471, 'ISTMINA', 12),
(472, 'JURADO', 12),
(473, 'LITORAL DEL SAN JUAN', 12),
(474, 'LLORO', 12),
(475, 'MEDIO ATRATO', 12),
(476, 'MEDIO BAUDO (BOCA DE PEPE)', 12),
(477, 'MEDIO SAN JUAN', 12),
(478, 'NOVITA', 12),
(479, 'NUQUI', 12),
(480, 'QUIBDO', 12),
(481, 'RIO IRO', 12),
(482, 'RIO QUITO', 12),
(483, 'RIOSUCIO', 12),
(484, 'SAN JOSE DEL PALMAR', 12),
(485, 'SIPI', 12),
(486, 'TADO', 12),
(487, 'UNGUIA', 12),
(488, 'UNIÓN PANAMERICANA', 12),
(489, 'AYAPEL', 13),
(490, 'BUENAVISTA', 13),
(491, 'CANALETE', 13),
(492, 'CERETÉ', 13),
(493, 'CHIMA', 13),
(494, 'CHINÚ', 13),
(495, 'CIENAGA DE ORO', 13),
(496, 'COTORRA', 13),
(497, 'LA APARTADA', 13),
(498, 'LORICA', 13),
(499, 'LOS CÓRDOBAS', 13),
(500, 'MOMIL', 13),
(501, 'MONTELÍBANO', 13),
(502, 'MONTERÍA', 13),
(503, 'MOÑITOS', 13),
(504, 'PLANETA RICA', 13),
(505, 'PUEBLO NUEVO', 13),
(506, 'PUERTO ESCONDIDO', 13),
(507, 'PUERTO LIBERTADOR', 13),
(508, 'PURÍSIMA', 13),
(509, 'SAHAGÚN', 13),
(510, 'SAN ANDRÉS SOTAVENTO', 13),
(511, 'SAN ANTERO', 13),
(512, 'SAN BERNARDO VIENTO', 13),
(513, 'SAN CARLOS', 13),
(514, 'SAN PELAYO', 13),
(515, 'TIERRALTA', 13),
(516, 'VALENCIA', 13),
(517, 'AGUA DE DIOS', 14),
(518, 'ALBAN', 14),
(519, 'ANAPOIMA', 14),
(520, 'ANOLAIMA', 14),
(521, 'ARBELAEZ', 14),
(522, 'BELTRÁN', 14),
(523, 'BITUIMA', 14),
(524, 'BOGOTÁ DC', 14),
(525, 'BOJACÁ', 14),
(526, 'CABRERA', 14),
(527, 'CACHIPAY', 14),
(528, 'CAJICÁ', 14),
(529, 'CAPARRAPÍ', 14),
(530, 'CAQUEZA', 14),
(531, 'CARMEN DE CARUPA', 14),
(532, 'CHAGUANÍ', 14),
(533, 'CHIA', 14),
(534, 'CHIPAQUE', 14),
(535, 'CHOACHÍ', 14),
(536, 'CHOCONTÁ', 14),
(537, 'COGUA', 14),
(538, 'COTA', 14),
(539, 'CUCUNUBÁ', 14),
(540, 'EL COLEGIO', 14),
(541, 'EL PEÑÓN', 14),
(542, 'EL ROSAL1', 14),
(543, 'FACATATIVA', 14),
(544, 'FÓMEQUE', 14),
(545, 'FOSCA', 14),
(546, 'FUNZA', 14),
(547, 'FÚQUENE', 14),
(548, 'FUSAGASUGA', 14),
(549, 'GACHALÁ', 14),
(550, 'GACHANCIPÁ', 14),
(551, 'GACHETA', 14),
(552, 'GAMA', 14),
(553, 'GIRARDOT', 14),
(554, 'GRANADA2', 14),
(555, 'GUACHETÁ', 14),
(556, 'GUADUAS', 14),
(557, 'GUASCA', 14),
(558, 'GUATAQUÍ', 14),
(559, 'GUATAVITA', 14),
(560, 'GUAYABAL DE SIQUIMA', 14),
(561, 'GUAYABETAL', 14),
(562, 'GUTIÉRREZ', 14),
(563, 'JERUSALÉN', 14),
(564, 'JUNÍN', 14),
(565, 'LA CALERA', 14),
(566, 'LA MESA', 14),
(567, 'LA PALMA', 14),
(568, 'LA PEÑA', 14),
(569, 'LA VEGA', 14),
(570, 'LENGUAZAQUE', 14),
(571, 'MACHETÁ', 14),
(572, 'MADRID', 14),
(573, 'MANTA', 14),
(574, 'MEDINA', 14),
(575, 'MOSQUERA', 14),
(576, 'NARIÑO', 14),
(577, 'NEMOCÓN', 14),
(578, 'NILO', 14),
(579, 'NIMAIMA', 14),
(580, 'NOCAIMA', 14),
(581, 'OSPINA PÉREZ', 14),
(582, 'PACHO', 14),
(583, 'PAIME', 14),
(584, 'PANDI', 14),
(585, 'PARATEBUENO', 14),
(586, 'PASCA', 14),
(587, 'PUERTO SALGAR', 14),
(588, 'PULÍ', 14),
(589, 'QUEBRADANEGRA', 14),
(590, 'QUETAME', 14),
(591, 'QUIPILE', 14),
(592, 'RAFAEL REYES', 14),
(593, 'RICAURTE', 14),
(594, 'SAN  ANTONIO DEL  TEQUENDAMA', 14),
(595, 'SAN BERNARDO', 14),
(596, 'SAN CAYETANO', 14),
(597, 'SAN FRANCISCO', 14),
(598, 'SAN JUAN DE RIOSECO', 14),
(599, 'SASAIMA', 14),
(600, 'SESQUILÉ', 14),
(601, 'SIBATÉ', 14),
(602, 'SILVANIA', 14),
(603, 'SIMIJACA', 14),
(604, 'SOACHA', 14),
(605, 'SOPO', 14),
(606, 'SUBACHOQUE', 14),
(607, 'SUESCA', 14),
(608, 'SUPATÁ', 14),
(609, 'SUSA', 14),
(610, 'SUTATAUSA', 14),
(611, 'TABIO', 14),
(612, 'TAUSA', 14),
(613, 'TENA', 14),
(614, 'TENJO', 14),
(615, 'TIBACUY', 14),
(616, 'TIBIRITA', 14),
(617, 'TOCAIMA', 14),
(618, 'TOCANCIPÁ', 14),
(619, 'TOPAIPÍ', 14),
(620, 'UBALÁ', 14),
(621, 'UBAQUE', 14),
(622, 'UBATÉ', 14),
(623, 'UNE', 14),
(624, 'UTICA', 14),
(625, 'VERGARA', 14),
(626, 'VIANI', 14),
(627, 'VILLA GOMEZ', 14),
(628, 'VILLA PINZÓN', 14),
(629, 'VILLETA', 14),
(630, 'VIOTA', 14),
(631, 'YACOPÍ', 14),
(632, 'ZIPACÓN', 14),
(633, 'ZIPAQUIRÁ', 14),
(634, 'BARRANCO MINAS', 15),
(635, 'CACAHUAL', 15),
(636, 'INÍRIDA', 15),
(637, 'LA GUADALUPE', 15),
(638, 'MAPIRIPANA', 15),
(639, 'MORICHAL', 15),
(640, 'PANA PANA', 15),
(641, 'PUERTO COLOMBIA', 15),
(642, 'SAN FELIPE', 15),
(643, 'CALAMAR', 16),
(644, 'EL RETORNO', 16),
(645, 'MIRAFLOREZ', 16),
(646, 'SAN JOSÉ DEL GUAVIARE', 16),
(647, 'ACEVEDO', 17),
(648, 'AGRADO', 17),
(649, 'AIPE', 17),
(650, 'ALGECIRAS', 17),
(651, 'ALTAMIRA', 17),
(652, 'BARAYA', 17),
(653, 'CAMPO ALEGRE', 17),
(654, 'COLOMBIA', 17),
(655, 'ELIAS', 17),
(656, 'GARZÓN', 17),
(657, 'GIGANTE', 17),
(658, 'GUADALUPE', 17),
(659, 'HOBO', 17),
(660, 'IQUIRA', 17),
(661, 'ISNOS', 17),
(662, 'LA ARGENTINA', 17),
(663, 'LA PLATA', 17),
(664, 'NATAGA', 17),
(665, 'NEIVA', 17),
(666, 'OPORAPA', 17),
(667, 'PAICOL', 17),
(668, 'PALERMO', 17),
(669, 'PALESTINA', 17),
(670, 'PITAL', 17),
(671, 'PITALITO', 17),
(672, 'RIVERA', 17),
(673, 'SALADO BLANCO', 17),
(674, 'SAN AGUSTÍN', 17),
(675, 'SANTA MARIA', 17),
(676, 'SUAZA', 17),
(677, 'TARQUI', 17),
(678, 'TELLO', 17),
(679, 'TERUEL', 17),
(680, 'TESALIA', 17),
(681, 'TIMANA', 17),
(682, 'VILLAVIEJA', 17),
(683, 'YAGUARA', 17),
(684, 'ALBANIA', 18),
(685, 'BARRANCAS', 18),
(686, 'DIBULLA', 18),
(687, 'DISTRACCIÓN', 18),
(688, 'EL MOLINO', 18),
(689, 'FONSECA', 18),
(690, 'HATO NUEVO', 18),
(691, 'LA JAGUA DEL PILAR', 18),
(692, 'MAICAO', 18),
(693, 'MANAURE', 18),
(694, 'RIOHACHA', 18),
(695, 'SAN JUAN DEL CESAR', 18),
(696, 'URIBIA', 18),
(697, 'URUMITA', 18),
(698, 'VILLANUEVA', 18),
(699, 'ALGARROBO', 19),
(700, 'ARACATACA', 19),
(701, 'ARIGUANI', 19),
(702, 'CERRO SAN ANTONIO', 19),
(703, 'CHIVOLO', 19),
(704, 'CIENAGA', 19),
(705, 'CONCORDIA', 19),
(706, 'EL BANCO', 19),
(707, 'EL PIÑON', 19),
(708, 'EL RETEN', 19),
(709, 'FUNDACION', 19),
(710, 'GUAMAL', 19),
(711, 'NUEVA GRANADA', 19),
(712, 'PEDRAZA', 19),
(713, 'PIJIÑO DEL CARMEN', 19),
(714, 'PIVIJAY', 19),
(715, 'PLATO', 19),
(716, 'PUEBLO VIEJO', 19),
(717, 'REMOLINO', 19),
(718, 'SABANAS DE SAN ANGEL', 19),
(719, 'SALAMINA', 19),
(720, 'SAN SEBASTIAN DE BUENAVISTA', 19),
(721, 'SAN ZENON', 19),
(722, 'SANTA ANA', 19),
(723, 'SANTA BARBARA DE PINTO', 19),
(724, 'SANTA MARTA', 19),
(725, 'SITIONUEVO', 19),
(726, 'TENERIFE', 19),
(727, 'ZAPAYAN', 19),
(728, 'ZONA BANANERA', 19),
(729, 'ACACIAS', 20),
(730, 'BARRANCA DE UPIA', 20),
(731, 'CABUYARO', 20),
(732, 'CASTILLA LA NUEVA', 20),
(733, 'CUBARRAL', 20),
(734, 'CUMARAL', 20),
(735, 'EL CALVARIO', 20),
(736, 'EL CASTILLO', 20),
(737, 'EL DORADO', 20),
(738, 'FUENTE DE ORO', 20),
(739, 'GRANADA', 20),
(740, 'GUAMAL', 20),
(741, 'LA MACARENA', 20),
(742, 'LA URIBE', 20),
(743, 'LEJANÍAS', 20),
(744, 'MAPIRIPÁN', 20),
(745, 'MESETAS', 20),
(746, 'PUERTO CONCORDIA', 20),
(747, 'PUERTO GAITÁN', 20),
(748, 'PUERTO LLERAS', 20),
(749, 'PUERTO LÓPEZ', 20),
(750, 'PUERTO RICO', 20),
(751, 'RESTREPO', 20),
(752, 'SAN  JUAN DE ARAMA', 20),
(753, 'SAN CARLOS GUAROA', 20),
(754, 'SAN JUANITO', 20),
(755, 'SAN MARTÍN', 20),
(756, 'VILLAVICENCIO', 20),
(757, 'VISTA HERMOSA', 20),
(758, 'ALBAN', 21),
(759, 'ALDAÑA', 21),
(760, 'ANCUYA', 21),
(761, 'ARBOLEDA', 21),
(762, 'BARBACOAS', 21),
(763, 'BELEN', 21),
(764, 'BUESACO', 21),
(765, 'CHACHAGUI', 21),
(766, 'COLON (GENOVA)', 21),
(767, 'CONSACA', 21),
(768, 'CONTADERO', 21),
(769, 'CORDOBA', 21),
(770, 'CUASPUD', 21),
(771, 'CUMBAL', 21),
(772, 'CUMBITARA', 21),
(773, 'EL CHARCO', 21),
(774, 'EL PEÑOL', 21),
(775, 'EL ROSARIO', 21),
(776, 'EL TABLÓN', 21),
(777, 'EL TAMBO', 21),
(778, 'FUNES', 21),
(779, 'GUACHUCAL', 21),
(780, 'GUAITARILLA', 21),
(781, 'GUALMATAN', 21),
(782, 'ILES', 21),
(783, 'IMUES', 21),
(784, 'IPIALES', 21),
(785, 'LA CRUZ', 21),
(786, 'LA FLORIDA', 21),
(787, 'LA LLANADA', 21),
(788, 'LA TOLA', 21),
(789, 'LA UNION', 21),
(790, 'LEIVA', 21),
(791, 'LINARES', 21),
(792, 'LOS ANDES', 21),
(793, 'MAGUI', 21),
(794, 'MALLAMA', 21),
(795, 'MOSQUEZA', 21),
(796, 'NARIÑO', 21),
(797, 'OLAYA HERRERA', 21),
(798, 'OSPINA', 21),
(799, 'PASTO', 21),
(800, 'PIZARRO', 21),
(801, 'POLICARPA', 21),
(802, 'POTOSI', 21),
(803, 'PROVIDENCIA', 21),
(804, 'PUERRES', 21),
(805, 'PUPIALES', 21),
(806, 'RICAURTE', 21),
(807, 'ROBERTO PAYAN', 21),
(808, 'SAMANIEGO', 21),
(809, 'SAN BERNARDO', 21),
(810, 'SAN LORENZO', 21),
(811, 'SAN PABLO', 21),
(812, 'SAN PEDRO DE CARTAGO', 21),
(813, 'SANDONA', 21),
(814, 'SANTA BARBARA', 21),
(815, 'SANTACRUZ', 21),
(816, 'SAPUYES', 21),
(817, 'TAMINANGO', 21),
(818, 'TANGUA', 21),
(819, 'TUMACO', 21),
(820, 'TUQUERRES', 21),
(821, 'YACUANQUER', 21),
(822, 'ABREGO', 22),
(823, 'ARBOLEDAS', 22),
(824, 'BOCHALEMA', 22),
(825, 'BUCARASICA', 22),
(826, 'CÁCHIRA', 22),
(827, 'CÁCOTA', 22),
(828, 'CHINÁCOTA', 22),
(829, 'CHITAGÁ', 22),
(830, 'CONVENCIÓN', 22),
(831, 'CÚCUTA', 22),
(832, 'CUCUTILLA', 22),
(833, 'DURANIA', 22),
(834, 'EL CARMEN', 22),
(835, 'EL TARRA', 22),
(836, 'EL ZULIA', 22),
(837, 'GRAMALOTE', 22),
(838, 'HACARI', 22),
(839, 'HERRÁN', 22),
(840, 'LA ESPERANZA', 22),
(841, 'LA PLAYA', 22),
(842, 'LABATECA', 22),
(843, 'LOS PATIOS', 22),
(844, 'LOURDES', 22),
(845, 'MUTISCUA', 22),
(846, 'OCAÑA', 22),
(847, 'PAMPLONA', 22),
(848, 'PAMPLONITA', 22),
(849, 'PUERTO SANTANDER', 22),
(850, 'RAGONVALIA', 22),
(851, 'SALAZAR', 22),
(852, 'SAN CALIXTO', 22),
(853, 'SAN CAYETANO', 22),
(854, 'SANTIAGO', 22),
(855, 'SARDINATA', 22),
(856, 'SILOS', 22),
(857, 'TEORAMA', 22),
(858, 'TIBÚ', 22),
(859, 'TOLEDO', 22),
(860, 'VILLA CARO', 22),
(861, 'VILLA DEL ROSARIO', 22),
(862, 'COLÓN', 23),
(863, 'MOCOA', 23),
(864, 'ORITO', 23),
(865, 'PUERTO ASÍS', 23),
(866, 'PUERTO CAYCEDO', 23),
(867, 'PUERTO GUZMÁN', 23),
(868, 'PUERTO LEGUÍZAMO', 23),
(869, 'SAN FRANCISCO', 23),
(870, 'SAN MIGUEL', 23),
(871, 'SANTIAGO', 23),
(872, 'SIBUNDOY', 23),
(873, 'VALLE DEL GUAMUEZ', 23),
(874, 'VILLAGARZÓN', 23),
(875, 'ARMENIA', 24),
(876, 'BUENAVISTA', 24),
(877, 'CALARCÁ', 24),
(878, 'CIRCASIA', 24),
(879, 'CÓRDOBA', 24),
(880, 'FILANDIA', 24),
(881, 'GÉNOVA', 24),
(882, 'LA TEBAIDA', 24),
(883, 'MONTENEGRO', 24),
(884, 'PIJAO', 24),
(885, 'QUIMBAYA', 24),
(886, 'SALENTO', 24),
(887, 'APIA', 25),
(888, 'BALBOA', 25),
(889, 'BELÉN DE UMBRÍA', 25),
(890, 'DOS QUEBRADAS', 25),
(891, 'GUATICA', 25),
(892, 'LA CELIA', 25),
(893, 'LA VIRGINIA', 25),
(894, 'MARSELLA', 25),
(895, 'MISTRATO', 25),
(896, 'PEREIRA', 25),
(897, 'PUEBLO RICO', 25),
(898, 'QUINCHÍA', 25),
(899, 'SANTA ROSA DE CABAL', 25),
(900, 'SANTUARIO', 25),
(901, 'PROVIDENCIA', 26),
(902, 'SAN ANDRES', 26),
(903, 'SANTA CATALINA', 26),
(904, 'AGUADA', 27),
(905, 'ALBANIA', 27),
(906, 'ARATOCA', 27),
(907, 'BARBOSA', 27),
(908, 'BARICHARA', 27),
(909, 'BARRANCABERMEJA', 27),
(910, 'BETULIA', 27),
(911, 'BOLÍVAR', 27),
(912, 'BUCARAMANGA', 27),
(913, 'CABRERA', 27),
(914, 'CALIFORNIA', 27),
(915, 'CAPITANEJO', 27),
(916, 'CARCASI', 27),
(917, 'CEPITA', 27),
(918, 'CERRITO', 27),
(919, 'CHARALÁ', 27),
(920, 'CHARTA', 27),
(921, 'CHIMA', 27),
(922, 'CHIPATÁ', 27),
(923, 'CIMITARRA', 27),
(924, 'CONCEPCIÓN', 27),
(925, 'CONFINES', 27),
(926, 'CONTRATACIÓN', 27),
(927, 'COROMORO', 27),
(928, 'CURITÍ', 27),
(929, 'EL CARMEN', 27),
(930, 'EL GUACAMAYO', 27),
(931, 'EL PEÑÓN', 27),
(932, 'EL PLAYÓN', 27),
(933, 'ENCINO', 27),
(934, 'ENCISO', 27),
(935, 'FLORIÁN', 27),
(936, 'FLORIDABLANCA', 27),
(937, 'GALÁN', 27),
(938, 'GAMBITA', 27),
(939, 'GIRÓN', 27),
(940, 'GUACA', 27),
(941, 'GUADALUPE', 27),
(942, 'GUAPOTA', 27),
(943, 'GUAVATÁ', 27),
(944, 'GUEPSA', 27),
(945, 'HATO', 27),
(946, 'JESÚS MARIA', 27),
(947, 'JORDÁN', 27),
(948, 'LA BELLEZA', 27),
(949, 'LA PAZ', 27),
(950, 'LANDAZURI', 27),
(951, 'LEBRIJA', 27),
(952, 'LOS SANTOS', 27),
(953, 'MACARAVITA', 27),
(954, 'MÁLAGA', 27),
(955, 'MATANZA', 27),
(956, 'MOGOTES', 27),
(957, 'MOLAGAVITA', 27),
(958, 'OCAMONTE', 27),
(959, 'OIBA', 27),
(960, 'ONZAGA', 27),
(961, 'PALMAR', 27),
(962, 'PALMAS DEL SOCORRO', 27),
(963, 'PÁRAMO', 27),
(964, 'PIEDECUESTA', 27),
(965, 'PINCHOTE', 27),
(966, 'PUENTE NACIONAL', 27),
(967, 'PUERTO PARRA', 27),
(968, 'PUERTO WILCHES', 27),
(969, 'RIONEGRO', 27),
(970, 'SABANA DE TORRES', 27),
(971, 'SAN ANDRÉS', 27),
(972, 'SAN BENITO', 27),
(973, 'SAN GIL', 27),
(974, 'SAN JOAQUÍN', 27),
(975, 'SAN JOSÉ DE MIRANDA', 27),
(976, 'SAN MIGUEL', 27),
(977, 'SAN VICENTE DE CHUCURÍ', 27),
(978, 'SANTA BÁRBARA', 27),
(979, 'SANTA HELENA', 27),
(980, 'SIMACOTA', 27),
(981, 'SOCORRO', 27),
(982, 'SUAITA', 27),
(983, 'SUCRE', 27),
(984, 'SURATA', 27),
(985, 'TONA', 27),
(986, 'VALLE SAN JOSÉ', 27),
(987, 'VÉLEZ', 27),
(988, 'VETAS', 27),
(989, 'VILLANUEVA', 27),
(990, 'ZAPATOCA', 27),
(991, 'BUENAVISTA', 28),
(992, 'CAIMITO', 28),
(993, 'CHALÁN', 28),
(994, 'COLOSO', 28),
(995, 'COROZAL', 28),
(996, 'EL ROBLE', 28),
(997, 'GALERAS', 28),
(998, 'GUARANDA', 28),
(999, 'LA UNIÓN', 28),
(1000, 'LOS PALMITOS', 28),
(1001, 'MAJAGUAL', 28),
(1002, 'MORROA', 28),
(1003, 'OVEJAS', 28),
(1004, 'PALMITO', 28),
(1005, 'SAMPUES', 28),
(1006, 'SAN BENITO ABAD', 28),
(1007, 'SAN JUAN DE BETULIA', 28),
(1008, 'SAN MARCOS', 28),
(1009, 'SAN ONOFRE', 28),
(1010, 'SAN PEDRO', 28),
(1011, 'SINCÉ', 28),
(1012, 'SINCELEJO', 28),
(1013, 'SUCRE', 28),
(1014, 'TOLÚ', 28),
(1015, 'TOLUVIEJO', 28),
(1016, 'ALPUJARRA', 29),
(1017, 'ALVARADO', 29),
(1018, 'AMBALEMA', 29),
(1019, 'ANZOATEGUI', 29),
(1020, 'ARMERO (GUAYABAL)', 29),
(1021, 'ATACO', 29),
(1022, 'CAJAMARCA', 29),
(1023, 'CARMEN DE APICALÁ', 29),
(1024, 'CASABIANCA', 29),
(1025, 'CHAPARRAL', 29),
(1026, 'COELLO', 29),
(1027, 'COYAIMA', 29),
(1028, 'CUNDAY', 29),
(1029, 'DOLORES', 29),
(1030, 'ESPINAL', 29),
(1031, 'FALÁN', 29),
(1032, 'FLANDES', 29),
(1033, 'FRESNO', 29),
(1034, 'GUAMO', 29),
(1035, 'HERVEO', 29),
(1036, 'HONDA', 29),
(1037, 'IBAGUÉ', 29),
(1038, 'ICONONZO', 29),
(1039, 'LÉRIDA', 29),
(1040, 'LÍBANO', 29),
(1041, 'MARIQUITA', 29),
(1042, 'MELGAR', 29),
(1043, 'MURILLO', 29),
(1044, 'NATAGAIMA', 29),
(1045, 'ORTEGA', 29),
(1046, 'PALOCABILDO', 29),
(1047, 'PIEDRAS PLANADAS', 29),
(1048, 'PRADO', 29),
(1049, 'PURIFICACIÓN', 29),
(1050, 'RIOBLANCO', 29),
(1051, 'RONCESVALLES', 29),
(1052, 'ROVIRA', 29),
(1053, 'SALDAÑA', 29),
(1054, 'SAN ANTONIO', 29),
(1055, 'SAN LUIS', 29),
(1056, 'SANTA ISABEL', 29),
(1057, 'SUÁREZ', 29),
(1058, 'VALLE DE SAN JUAN', 29),
(1059, 'VENADILLO', 29),
(1060, 'VILLAHERMOSA', 29),
(1061, 'VILLARRICA', 29),
(1062, 'ALCALÁ', 30),
(1063, 'ANDALUCÍA', 30),
(1064, 'ANSERMA NUEVO', 30),
(1065, 'ARGELIA', 30),
(1066, 'BOLÍVAR', 30),
(1067, 'BUENAVENTURA', 30),
(1068, 'BUGA', 30),
(1069, 'BUGALAGRANDE', 30),
(1070, 'CAICEDONIA', 30),
(1071, 'CALI', 30),
(1072, 'CALIMA (DARIEN)', 30),
(1073, 'CANDELARIA', 30),
(1074, 'CARTAGO', 30),
(1075, 'DAGUA', 30),
(1076, 'EL AGUILA', 30),
(1077, 'EL CAIRO', 30),
(1078, 'EL CERRITO', 30),
(1079, 'EL DOVIO', 30),
(1080, 'FLORIDA', 30),
(1081, 'GINEBRA GUACARI', 30),
(1082, 'JAMUNDÍ', 30),
(1083, 'LA CUMBRE', 30),
(1084, 'LA UNIÓN', 30),
(1085, 'LA VICTORIA', 30),
(1086, 'OBANDO', 30),
(1087, 'PALMIRA', 30),
(1088, 'PRADERA', 30),
(1089, 'RESTREPO', 30),
(1090, 'RIO FRÍO', 30),
(1091, 'ROLDANILLO', 30),
(1092, 'SAN PEDRO', 30),
(1093, 'SEVILLA', 30),
(1094, 'TORO', 30),
(1095, 'TRUJILLO', 30),
(1096, 'TULÚA', 30),
(1097, 'ULLOA', 30),
(1098, 'VERSALLES', 30),
(1099, 'VIJES', 30),
(1100, 'YOTOCO', 30),
(1101, 'YUMBO', 30),
(1102, 'ZARZAL', 30),
(1103, 'CARURÚ', 31),
(1104, 'MITÚ', 31),
(1105, 'PACOA', 31),
(1106, 'PAPUNAUA', 31),
(1107, 'TARAIRA', 31),
(1108, 'YAVARATÉ', 31),
(1109, 'CUMARIBO', 32),
(1110, 'LA PRIMAVERA', 32),
(1111, 'PUERTO CARREÑO', 32),
(1112, 'SANTA ROSALIA', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_newsletter`
--
-- Creación: 04-03-2014 a las 13:40:02
--

DROP TABLE IF EXISTS `cms_newsletter`;
CREATE TABLE IF NOT EXISTS `cms_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cms_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_newsletter`
--

INSERT INTO `cms_newsletter` (`id`, `cms_nombre`, `cms_email`) VALUES
(1, 'felipe camacho', 'felipecamachogonzalez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--
-- Creación: 04-03-2014 a las 13:40:03
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
-- Estructura de tabla para la tabla `cms_permissions`
--
-- Creación: 04-03-2014 a las 13:40:03
--

DROP TABLE IF EXISTS `cms_permissions`;
CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('module','function','component') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_permissions`
--

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module'),
(3, 'admin', NULL, 'module'),
(4, 'backup_db', NULL, 'module'),
(5, 'blog', NULL, 'module'),
(6, 'firma', NULL, NULL),
(7, 'carro', NULL, 'module');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_planes`
--
-- Creación: 04-03-2014 a las 13:40:03
--

DROP TABLE IF EXISTS `cms_planes`;
CREATE TABLE IF NOT EXISTS `cms_planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo_plan` int(11) NOT NULL,
  `valor_plan` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_planes`
--

INSERT INTO `cms_planes` (`id`, `nombre_plan`, `tiempo_plan`, `valor_plan`) VALUES
(1, 'plan1', 30, '1000'),
(2, 'plan2', 60, '1800'),
(3, 'plan3', 90, '2600'),
(5, 'Sin plan', 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_planes_usuariosfront`
--
-- Creación: 04-03-2014 a las 13:40:04
--

DROP TABLE IF EXISTS `cms_planes_usuariosfront`;
CREATE TABLE IF NOT EXISTS `cms_planes_usuariosfront` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuariosfront_id` int(11) NOT NULL,
  `planes_id` int(11) NOT NULL,
  `activo` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `fk_cms_planes_usuarios_cms_usuarios_idx` (`usuariosfront_id`),
  KEY `fk_cms_planes_usuarios_cms_planes1_idx` (`planes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cms_planes_usuariosfront`
--

INSERT INTO `cms_planes_usuariosfront` (`id`, `usuariosfront_id`, `planes_id`, `activo`) VALUES
(0, 10, 3, 'Y'),
(11, 10, 5, 'N'),
(12, 10, 2, 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_quienes_somos`
--
-- Creación: 04-03-2014 a las 13:40:04
--

DROP TABLE IF EXISTS `cms_quienes_somos`;
CREATE TABLE IF NOT EXISTS `cms_quienes_somos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_seccion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_titulo1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cms_titulo2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_texto` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_quienes_somos`
--

INSERT INTO `cms_quienes_somos` (`id`, `cms_seccion`, `cms_titulo1`, `cms_titulo2`, `cms_texto`) VALUES
(1, 'home', 'CONSTITUCIÓN', 'POLÍTICA DE COLOMBIA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis vulputate ipsum, vel dictum ipsum convallis et. Fusce a commodo massa, sed posuere risus. Praesent ut quam hendrerit orci rhoncus posuere ac vitae tellus. Aliquam aliquam mi gravida lorem lobortis, at dictum dolor interdum. Morbi fermentum lorem mi, id egestas dolor tempus vel. Sed condimentum dictum nulla eget ultricies. Morbi sed adipiscing arcu, in condimentum leo. Pellentesque varius condimentum tempus.</p>\r\n'),
(2, 'quienes', 'quienes', 'somos', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p>Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p>Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p>Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p>Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n'),
(3, 'experiencia', 'nuestra', 'experiencia', '<p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p style="font-size: 13px;">Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p style="font-size: 13px;">Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n\r\n<p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p style="font-size: 13px;">Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p style="font-size: 13px;">Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n'),
(4, 'servicios', 'nuestros', 'servicios', '<p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p style="font-size: 13px;">Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p style="font-size: 13px;">Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n\r\n<p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mauris ipsum. Donec dignissim ut diam et suscipit. Mauris ac purus dolor. Praesent et lacus pharetra, porta purus et, molestie magna. Praesent facilisis, lorem eget ullamcorper dignissim, felis nisl aliquam urna, vitae sodales justo justo lobortis erat. Integer dapibus eget lacus in sagittis. Sed ligula leo, cursus ut nisi et, semper lacinia elit.</p>\r\n\r\n<p style="font-size: 13px;">Donec varius viverra nisi at pellentesque. Duis risus elit, vulputate eu condimentum sit amet, elementum quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam quis blandit dolor, vel hendrerit erat. Phasellus blandit eu nisi at imperdiet. Mauris ipsum diam, tempus dignissim orci molestie, tempus placerat massa. Suspendisse potenti.</p>\r\n\r\n<p style="font-size: 13px;">Aenean condimentum leo quis dolor scelerisque consequat sit amet at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia vulputate libero, at tincidunt felis congue eu. Fusce sed massa ut magna fermentum vestibulum at ac arcu. Aenean massa diam, scelerisque id eleifend vestibulum, tincidunt ac metus. Quisque vulputate leo id volutpat auctor. Vivamus sodales condimentum malesuada. Nulla tincidunt varius justo eu malesuada. Cras vel nunc a velit malesuada placerat. Nunc placerat, nisl vitae feugiat lobortis, tortor elit iaculis leo, et placerat lorem odio ac enim. Aliquam erat volutpat.</p>\r\n'),
(5, 'blog', '', NULL, '<p>sldkasdkjas&ntilde;ldkNDkcasd&ntilde;NASKJDCA SECCION BLOG</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--
-- Creación: 04-03-2014 a las 13:40:05
--

DROP TABLE IF EXISTS `cms_redes_sociales`;
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
(1, 'Facebook', 'https://www.facebook.com/clinicarangelpereira', '2013-10-21 16:58:04'),
(2, 'Twitter', 'http://www.twitter.com/clinicarangelpereira', '2013-10-21 16:58:07'),
(3, 'Youtube', 'http://www.youtube.com/clinicarangelpereira', '2013-10-21 16:58:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sentencias`
--
-- Creación: 04-03-2014 a las 13:40:05
--

DROP TABLE IF EXISTS `cms_sentencias`;
CREATE TABLE IF NOT EXISTS `cms_sentencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `demandas_tutelas_id` int(11) NOT NULL,
  `magistrados_id` int(11) NOT NULL,
  `cms_anio` int(11) NOT NULL,
  `cms_mes` int(11) NOT NULL,
  `cms_decision` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_tutela_expediente` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_sentencia` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cms_tutela_derecho` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_demanda` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_norma_sentenciada` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_otros_temas` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temas_id` int(11) NOT NULL,
  `tipo` enum('D','T') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'D',
  PRIMARY KEY (`id`),
  KEY `fk_cms_sentencias_cms_archvos1_idx` (`link_path`),
  KEY `fk_cms_sentencias_cms_demandas_tutelas1_idx` (`demandas_tutelas_id`),
  KEY `fk_cms_sentencias_cms_magistrados1_idx` (`magistrados_id`),
  KEY `fk_cms_sentencias_cms_temas1_idx` (`temas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_sentencias`
--

INSERT INTO `cms_sentencias` (`id`, `link_path`, `demandas_tutelas_id`, `magistrados_id`, `cms_anio`, `cms_mes`, `cms_decision`, `cms_tutela_expediente`, `cms_sentencia`, `cms_tutela_derecho`, `cms_demanda`, `cms_norma_sentenciada`, `cms_otros_temas`, `temas_id`, `tipo`) VALUES
(1, './uploads/8e687e957fdf07dbb015c290fb498f0e.pdf', 2, 1, 1950, 1, 'asdfsfdsfds', NULL, 'sadsadsad', NULL, NULL, NULL, 'sdfsdfsdfsdfdsfds', 1, 'D'),
(2, './uploads/5233943ffd9001b9d2b078f19fd41508.pdf', 2, 1, 1950, 1, 'sdsdassasad', 'asdasdsadasdsa', 'asdasdsadsad', NULL, NULL, NULL, NULL, 1, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--
-- Creación: 04-03-2014 a las 13:40:05
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
('06cd5a32cba1b73640499f382c2b52ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1384835266, 'a:10:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:16:"page_video_lugar";s:1:"1";s:11:"page_barner";s:1:"1";s:3:"add";s:1:"0";s:6:"editar";s:1:"0";s:6:"delete";s:1:"0";s:19:"page_destacado_home";s:1:"1";}'),
('08d5765516e89418655398b049110fe8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392760755, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:16:"current_user_one";b:1;i:0;s:12:"current_page";i:1;s:4:"home";}'),
('11a60ae34d02d1293d3741838d75f1da', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392704095, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;}'),
('1bbd5f68dead04aa5243fb52507f7aa4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392704094, 'a:29:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_abogado";s:1:"1";s:16:"current_user_one";b:1;s:15:"page_comentario";s:1:"1";s:10:"page_firma";s:1:"1";i:0;s:12:"current_page";i:1;s:4:"home";s:12:"page_titulos";s:1:"1";s:14:"page_articulos";s:1:"1";s:18:"page_concordancias";s:1:"1";s:17:"page_concordancia";s:1:"1";s:16:"page_magistrados";s:1:"1";s:15:"page_magistrado";s:1:"1";s:9:"page_tema";s:1:"1";s:13:"page_demandas";s:1:"1";s:12:"page_tutelas";s:1:"1";s:33:"page_sentenciasconstitucionalidad";s:1:"1";s:21:"page_sentenciastutela";s:1:"1";s:16:"page_comunicados";s:1:"1";s:15:"page_comunicado";s:1:"1";s:11:"page_libros";s:1:"1";s:11:"page_planes";s:1:"1";s:9:"page_plan";s:1:"1";s:15:"page_categorias";s:1:"1";s:9:"page_blog";s:1:"1";s:10:"page_texto";s:1:"1";}'),
('300004b0e9582f6b34414442dd298d01', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392328973, 'a:13:{s:9:"user_data";s:0:"";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2014";s:12:"page_titulos";s:1:"1";s:14:"page_articulos";s:1:"1";s:15:"page_comentario";s:1:"1";s:10:"page_firma";s:1:"1";}'),
('35c69438dfd28be70ac09547d17082ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392269962, 'a:9:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:12:"page_abogado";s:1:"1";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:15:"page_comentario";s:1:"1";}'),
('3a8a793ac383e2918a42a733f00f2321', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392314197, 'a:13:{s:9:"user_data";s:0:"";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2014";s:12:"page_abogado";s:1:"1";s:12:"page_titulos";s:1:"1";s:14:"page_articulos";s:1:"1";s:15:"page_comentario";s:1:"1";}'),
('3c359f7b39ab69c0addbec1e898f51e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392987982, 'a:12:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:17:"page_concordancia";s:1:"1";i:0;s:12:"current_page";i:1;s:12:"modal_planes";s:16:"current_user_one";b:1;s:15:"page_comentario";s:1:"1";s:14:"page_articulos";s:1:"1";s:12:"page_titulos";s:1:"1";s:10:"page_firma";s:1:"1";}'),
('408441103d3df45f6f12d803c1262232', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36', 1393973213, 'a:4:{s:9:"user_data";s:0:"";s:16:"current_user_one";b:1;i:0;s:12:"current_page";i:1;s:4:"home";}'),
('459c61b5f3d2eab4c17167633e3ca3ad', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392385752, 'a:10:{s:9:"user_data";s:0:"";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2014";s:12:"page_titulos";s:1:"1";}'),
('46d64cc9c783593fd926582cee0233d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393556283, 'a:41:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";i:10;s:7:"user_id";s:1:"5";s:16:"current_user_one";b:1;i:0;s:12:"current_page";i:1;s:4:"home";s:12:"page_tutelas";s:1:"1";s:21:"page_sentenciastutela";s:1:"1";s:33:"page_sentenciasconstitucionalidad";s:1:"1";s:15:"page_comunicado";s:1:"1";s:10:"page_firma";s:1:"1";s:12:"page_abogado";s:1:"1";s:15:"page_categorias";s:1:"1";s:10:"page_texto";s:1:"1";s:11:"page_libros";s:1:"1";s:14:"page_articulos";s:1:"1";s:12:"page_titulos";s:1:"1";s:15:"page_comentario";s:1:"1";s:17:"page_concordancia";s:1:"1";s:9:"page_plan";s:1:"1";s:10:"cms_nombre";s:6:"Felipe";s:13:"cms_apellidos";s:7:"Camacho";s:10:"cms_genero";s:1:"M";s:23:"cms_fechanacimiento_dia";s:2:"30";s:23:"cms_fechanacimiento_mes";s:1:"9";s:24:"cms_fechanacimiento_anio";s:4:"1980";s:9:"cms_email";s:21:"felipe@cogroupsas.com";s:13:"cms_profesion";s:17:"Desarrollador web";s:8:"cms_pais";s:8:"Colombia";s:10:"cms_ciudad";s:7:"Bogotá";s:12:"cms_telefono";s:10:"3203184040";s:12:"cms_password";s:32:"7e04da88cbb8cc933c7b89fbfe121cca";s:15:"cms_recibirinfo";s:1:"N";s:10:"cms_activo";s:1:"1";s:16:"usuariosfront_id";s:2:"10";s:9:"planes_id";s:1:"3";s:6:"activo";s:1:"Y";s:15:"page_magistrado";s:1:"1";s:9:"page_tema";s:1:"1";s:13:"page_demandas";s:1:"1";}'),
('4ed4c9e13a4753d3606e7d3b1e6388fc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393293982, 'a:19:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:10:"page_firma";s:1:"1";s:12:"page_titulos";s:1:"1";s:14:"page_articulos";s:1:"1";s:15:"page_comentario";s:1:"1";s:17:"page_concordancia";s:1:"1";s:15:"page_categorias";s:1:"1";s:16:"current_user_one";b:1;s:15:"page_magistrado";s:1:"1";s:9:"page_tema";s:1:"1";s:13:"page_demandas";s:1:"1";s:12:"page_tutelas";s:1:"1";s:33:"page_sentenciasconstitucionalidad";s:1:"1";s:21:"page_sentenciastutela";s:1:"1";i:0;s:12:"current_page";i:1;s:4:"home";}'),
('5492aeb338290684eba36835569d3130', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392267594, 'a:12:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:25:"page_constitucion/titulos";s:1:"1";s:12:"page_titulos";s:1:"1";s:16:"current_user_one";b:1;i:0;s:12:"current_page";i:1;s:4:"home";s:13:"page_abogados";s:1:"1";s:14:"page_articulos";s:1:"1";s:12:"page_abogado";s:1:"1";}'),
('5997aa548d2297ebb5cbe1a58d0673d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392726895, 'a:10:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:15:"page_comentario";s:1:"1";s:13:"page_demandas";s:1:"1";s:12:"page_tutelas";s:1:"1";}'),
('7a50a939caa3c791041cee1faaa21ac9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392721870, 'a:8:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:14:"page_articulos";s:1:"1";}'),
('b706744fd3ee64198a799d53c656fb94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 1392535171, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:15:"page_comentario";s:1:"1";s:17:"page_concordancia";s:1:"1";}'),
('c4779babf0038fb6dfbe98e3f3a85eb9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392721889, 'a:7:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;}'),
('d0a476f40ad9ed1cc6f7d25b8b2c97f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 1392950151, 'a:11:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:15:"page_comentario";s:1:"1";s:14:"page_articulos";s:1:"1";s:12:"page_abogado";s:1:"1";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:24:"flash:old:alert_messages";s:123:"<script>$.sticky("Datos eliminados con éxito...!", {autoclose : 5000, position: "top-center", type: "st-info" });</script>";}'),
('e0afb642b07799443918e354f968cda8', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393954261, 'a:27:{s:9:"user_data";s:0:"";i:0;s:12:"current_page";i:1;s:4:"home";s:2:"id";i:10;s:10:"cms_nombre";s:6:"Felipe";s:13:"cms_apellidos";s:7:"Camacho";s:10:"cms_genero";s:1:"M";s:23:"cms_fechanacimiento_dia";s:2:"30";s:23:"cms_fechanacimiento_mes";s:1:"9";s:24:"cms_fechanacimiento_anio";s:4:"1980";s:9:"cms_email";s:21:"felipe@cogroupsas.com";s:13:"cms_profesion";s:17:"Desarrollador web";s:8:"cms_pais";s:8:"Colombia";s:10:"cms_ciudad";s:7:"Bogotá";s:12:"cms_telefono";s:10:"3203184040";s:12:"cms_password";s:32:"7e04da88cbb8cc933c7b89fbfe121cca";s:15:"cms_recibirinfo";s:1:"N";s:10:"cms_activo";s:1:"1";s:16:"usuariosfront_id";s:2:"10";s:9:"planes_id";s:1:"3";s:6:"activo";s:1:"Y";s:16:"current_user_one";b:1;s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2014";}'),
('e8d348422a9db25cc4bffd82374ab8ce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392258727, 'a:13:{s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2014";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:12:"page_equipos";s:1:"1";s:15:"page_Texto Home";s:1:"1";s:9:"page_home";s:1:"1";s:15:"page_firma/home";s:1:"1";s:10:"page_firma";s:1:"1";}'),
('f6fe3b67802aaa60f0ef64816ce3da63', '181.135.94.169', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392386047, 'a:9:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;s:10:"page_firma";s:1:"1";s:12:"page_abogado";s:1:"1";}'),
('fd57651626c296839ec726fee81e6d98', '190.60.239.146', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392323333, 'a:4:{s:9:"user_data";s:0:"";i:0;s:12:"current_page";i:1;s:4:"home";s:16:"current_user_one";b:1;}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_temas`
--
-- Creación: 04-03-2014 a las 13:40:05
--

DROP TABLE IF EXISTS `cms_temas`;
CREATE TABLE IF NOT EXISTS `cms_temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_tema` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_temas`
--

INSERT INTO `cms_temas` (`id`, `cms_tema`) VALUES
(1, 'tema de prueba cambio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_titulos_constitucion`
--
-- Creación: 04-03-2014 a las 13:40:06
--

DROP TABLE IF EXISTS `cms_titulos_constitucion`;
CREATE TABLE IF NOT EXISTS `cms_titulos_constitucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_titulo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_titulos_constitucion`
--

INSERT INTO `cms_titulos_constitucion` (`id`, `cms_titulo`) VALUES
(3, 'DE LOS DERECHOS, LAS GARANTIAS Y LOS DEBERES'),
(4, 'titulo2'),
(5, 'titulo3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--
-- Creación: 04-03-2014 a las 13:40:06
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2014, 1, NULL, NULL, NULL, NULL),
(6, '\0\0', 'Admin CMS', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'admin@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--
-- Creación: 04-03-2014 a las 13:40:06
--

DROP TABLE IF EXISTS `cms_users_groups`;
CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(6, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_usuariosfront`
--
-- Creación: 04-03-2014 a las 13:40:06
--

DROP TABLE IF EXISTS `cms_usuariosfront`;
CREATE TABLE IF NOT EXISTS `cms_usuariosfront` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_apellidos` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_genero` enum('F','M','O') COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_fechanacimiento_dia` int(11) DEFAULT NULL,
  `cms_fechanacimiento_mes` int(11) DEFAULT NULL,
  `cms_fechanacimiento_anio` int(11) DEFAULT NULL,
  `cms_email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_profesion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_pais` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_ciudad` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_telefono` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_password` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_recibirinfo` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `cms_activo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_usuariosfront`
--

INSERT INTO `cms_usuariosfront` (`id`, `cms_nombre`, `cms_apellidos`, `cms_genero`, `cms_fechanacimiento_dia`, `cms_fechanacimiento_mes`, `cms_fechanacimiento_anio`, `cms_email`, `cms_profesion`, `cms_pais`, `cms_ciudad`, `cms_telefono`, `cms_password`, `cms_recibirinfo`, `cms_activo`) VALUES
(10, 'Felipe', 'Camacho', 'M', 30, 9, 1980, 'felipe@cogroupsas.com', 'Desarrollador web', 'Colombia', 'Bogotá', '3203184040', '7e04da88cbb8cc933c7b89fbfe121cca', 'N', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_abogados`
--
ALTER TABLE `cms_abogados`
  ADD CONSTRAINT `cms_abogados_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`);

--
-- Filtros para la tabla `cms_blog`
--
ALTER TABLE `cms_blog`
  ADD CONSTRAINT `cms_blog_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`),
  ADD CONSTRAINT `cms_blog_ibfk_2` FOREIGN KEY (`categorias_blog_id`) REFERENCES `cms_categorias_blog` (`id`);

--
-- Filtros para la tabla `cms_carro_compras`
--
ALTER TABLE `cms_carro_compras`
  ADD CONSTRAINT `cms_carro_compras_ibfk_1` FOREIGN KEY (`usuariosfront_id`) REFERENCES `cms_usuariosfront` (`id`);

--
-- Filtros para la tabla `cms_comentarios`
--
ALTER TABLE `cms_comentarios`
  ADD CONSTRAINT `cms_comentarios_ibfk_1` FOREIGN KEY (`constitucion_id`) REFERENCES `cms_constitucion` (`id`),
  ADD CONSTRAINT `cms_comentarios_ibfk_2` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`),
  ADD CONSTRAINT `cms_comentarios_ibfk_3` FOREIGN KEY (`blog_id`) REFERENCES `cms_blog` (`id`);

--
-- Filtros para la tabla `cms_comunicados`
--
ALTER TABLE `cms_comunicados`
  ADD CONSTRAINT `cms_comunicados_ibfk_1` FOREIGN KEY (`demandas_tutelas_id`) REFERENCES `cms_demandas_tutelas` (`id`),
  ADD CONSTRAINT `cms_comunicados_ibfk_2` FOREIGN KEY (`temas_id`) REFERENCES `cms_temas` (`id`);

--
-- Filtros para la tabla `cms_concordancias`
--
ALTER TABLE `cms_concordancias`
  ADD CONSTRAINT `cms_concordancias_ibfk_1` FOREIGN KEY (`constitucion_id`) REFERENCES `cms_constitucion` (`id`);

--
-- Filtros para la tabla `cms_constitucion`
--
ALTER TABLE `cms_constitucion`
  ADD CONSTRAINT `fk_cms_constitucion_cms_titulos_constitucion1` FOREIGN KEY (`titulos_constitucion_id`) REFERENCES `cms_titulos_constitucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_demandas_tutelas`
--
ALTER TABLE `cms_demandas_tutelas`
  ADD CONSTRAINT `cms_demandas_tutelas_ibfk_2` FOREIGN KEY (`magistrados_id`) REFERENCES `cms_magistrados` (`id`);

--
-- Filtros para la tabla `cms_groups_permissions`
--
ALTER TABLE `cms_groups_permissions`
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES ``.`cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_permissions1` FOREIGN KEY (`permission_id`) REFERENCES ``.`cms_permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_libros`
--
ALTER TABLE `cms_libros`
  ADD CONSTRAINT `cms_libros_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`);

--
-- Filtros para la tabla `cms_municipio`
--
ALTER TABLE `cms_municipio`
  ADD CONSTRAINT `fk_cms_municipios_cms_departamento1` FOREIGN KEY (`departamento_id`) REFERENCES ``.`cms_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_planes_usuariosfront`
--
ALTER TABLE `cms_planes_usuariosfront`
  ADD CONSTRAINT `cms_planes_usuariosfront_ibfk_1` FOREIGN KEY (`planes_id`) REFERENCES `cms_planes` (`id`),
  ADD CONSTRAINT `cms_planes_usuariosfront_ibfk_2` FOREIGN KEY (`usuariosfront_id`) REFERENCES `cms_usuariosfront` (`id`);

--
-- Filtros para la tabla `cms_sentencias`
--
ALTER TABLE `cms_sentencias`
  ADD CONSTRAINT `cms_sentencias_ibfk_2` FOREIGN KEY (`demandas_tutelas_id`) REFERENCES `cms_demandas_tutelas` (`id`),
  ADD CONSTRAINT `cms_sentencias_ibfk_3` FOREIGN KEY (`magistrados_id`) REFERENCES `cms_magistrados` (`id`),
  ADD CONSTRAINT `cms_sentencias_ibfk_4` FOREIGN KEY (`temas_id`) REFERENCES `cms_temas` (`id`);

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES ``.`cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES ``.`cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;