-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2013 a las 14:42:08
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `img_sesac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_accounts_user`
--
DROP TABLE IF EXISTS `cms_accounts_user`;

CREATE TABLE IF NOT EXISTS `cms_accounts_user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `uid` VARCHAR(255) DEFAULT NULL,
  `name` VARCHAR(45) DEFAULT NULL,
  `first_name` VARCHAR(45) DEFAULT NULL,
  `last_name` VARCHAR(45) DEFAULT NULL,
  `nickname` VARCHAR(45) DEFAULT NULL,
  `email` VARCHAR(45) DEFAULT NULL,
  `imagen` VARCHAR(45) DEFAULT NULL,
  `provider` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_accounts_user_cms_users1_idx` (`user_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--

CREATE TABLE IF NOT EXISTS `cms_api_oauth` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `provider` VARCHAR(255) NOT NULL,
  `strategy` VARCHAR(255) NOT NULL,
  `api_key` VARCHAR(255) NOT NULL,
  `api_secret` VARCHAR(255) NOT NULL,
  `scope` VARCHAR(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `active_oauth` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_api_oauth`
--

INSERT INTO `cms_api_oauth` (`id`, `name`, `provider`, `strategy`, `api_key`, `api_secret`, `scope`, `active`, `active_oauth`) VALUES
(1, 'Facebook', 'facebook', 'oauth2', '1416132521932785', '335e4e5e18413ce88244a2bd0be4f226', 'offline_access,email,publish_stream,manage_pages', 1, 1),
(2, 'Twitter', 'twitter', 'oauth1', 'oaUPjhYWiIETQBNrvt3XfQ', 'kPsTns4nNWAhcnNyP6TtWP02lEgiRQRevfDdHF5Qw4U', '', 1, 1),
(3, 'Google', 'google', 'oauth2', '1073082606021.apps.googleusercontent.com', 'dZgio_ypJkpmQEUBjwK1FYGQ', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_banner`
--

CREATE TABLE IF NOT EXISTS `cms_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagenFondo` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagenFrente` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo1_blanco` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo2_blanco` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo3_blanco` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo1_amarillo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo2_amarillo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_banner`
--

INSERT INTO `cms_banner` (`id`, `imagenFondo`, `imagenFrente`, `titulo1_blanco`, `titulo2_blanco`, `titulo3_blanco`, `titulo1_amarillo`, `titulo2_amarillo`) VALUES
(1, 'http://localhost/afs/sesac_prog/maqueta/assets/img/slider-bg-1.jpg', 'http://localhost/afs/sesac_prog/maqueta/assets/img/slide-img-1.png', 'Vías', 'Puentes', 'Acueductos', 'Infraestructura', 'Diseños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_bienvenida`
--

CREATE TABLE IF NOT EXISTS `cms_bienvenida` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cms_bienvenida`
--

INSERT INTO `cms_bienvenida` (`id`, `titulo`, `texto`) VALUES
(1, 'Titulo de la Bienvenida', '<p>Texto Bienvenida</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_cliente`
--

CREATE TABLE IF NOT EXISTS `cms_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `texto` text COLLATE utf8_spanish2_ci,
  `imagen` text COLLATE utf8_spanish2_ci,
  `url` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `cms_cliente`
--

INSERT INTO `cms_cliente` (`id`, `nombre`, `texto`, `imagen`, `url`) VALUES
(45, 'Cliente', 'Texto Cliente', 'http://localhost/afs/sesac_prog/maqueta/assets/img/cliente-logo.png', 'http://www.google.com.co'),
(51, 'Andres Felipe Solarte López', '<p>Texto Andres Felipe - <strong>Modificado</strong></p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/clientes/feature_sense_song_icon2.png', 'http://www.youtube.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `edificio` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto_email`
--

CREATE TABLE IF NOT EXISTS `cms_contacto_email` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `cms_contacto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_contacto_email_cms_contacto1_idx` (`cms_contacto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_curriculum`
--

CREATE TABLE IF NOT EXISTS `cms_curriculum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `profesion` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `especializacion` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `adjunto` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_destacados`
--

CREATE TABLE IF NOT EXISTS `cms_destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `texto` text COLLATE utf8_spanish2_ci,
  `imagen` text COLLATE utf8_spanish2_ci,
  `enlace` text COLLATE utf8_spanish2_ci,
  `target` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_destacados`
--

INSERT INTO `cms_destacados` (`id`, `titulo`, `texto`, `imagen`, `enlace`, `target`) VALUES
(1, 'sdfgsdfg', '<p>sdfgsdfg</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/destacados/verticallimitpic9.jpg', 'http://localhost/afs/sesac_prog', '_self'),
(2, 'Adipiscing Elit', '<p>Lorem ipsum dolor sit amet, siter sit consectetuer adipiscing elit. Aenean Lorem ipsum dolor sit amet, siter sit consectetuer adipiscing elit. Aenean</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/destacados/verticallimitpic91.jpg', 'http://youtube.com', '_blank');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_footer`
--

CREATE TABLE IF NOT EXISTS `cms_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `edificio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `gmapsX` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `gmapsY` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_footer`
--

INSERT INTO `cms_footer` (`id`, `telefono`, `direccion`, `edificio`, `gmapsX`, `gmapsY`) VALUES
(1, '(+571) 489 0902 - 567 9899', 'Avenida 23 No. 56-49', 'Edificio Lorem Ipsum Dolor', '4.680840718553422', '-74.05449647778289');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_footer_email`
--

CREATE TABLE IF NOT EXISTS `cms_footer_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cms_footer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_footer_email_cms_footer1_idx` (`cms_footer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_footer_email`
--

INSERT INTO `cms_footer_email` (`id`, `nombre`, `email`, `cms_footer_id`) VALUES
(2, 'Servicio Técnico', 'info@sesacelieter.com', 1),
(6, 'Administrativo', 'info@sesac.com', 1),
(7, 'Comercial', 'info@sesac.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios');

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
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_noticia`
--

CREATE TABLE IF NOT EXISTS `cms_noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `intro` text COLLATE utf8_spanish2_ci,
  `texto` text COLLATE utf8_spanish2_ci,
  `fecha` date DEFAULT NULL,
  `video_url` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `cms_noticia`
--

INSERT INTO `cms_noticia` (`id`, `titulo`, `intro`, `texto`, `fecha`, `video_url`) VALUES
(1, 'Noticia 1 - Editada', 'intro editado', 'Noticia 1 - texto -Editdao', '2013-10-31', 'http://www.youtube.com/watch?v=I_wJLl6_Gls Editado'),
(2, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-30', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(3, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-29', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(4, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-28', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(5, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-27', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(6, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-26', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(7, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-25', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(8, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-24', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(9, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-23', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(10, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-22', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(11, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-21', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(12, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-20', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(13, 'Noticia 1', 'Noticia 1 - intro', 'Noticia 1 - texto', '2013-10-19', 'http://www.youtube.com/watch?v=I_wJLl6_Gls'),
(26, 'DFASDFASDF AF', 'DFASDFASDF AF', 'ASDF ASDFAS DFASDF', '2013-10-31', 'ASDF ASDFASDFAS'),
(27, 'DFASDFASDF AF', 'DFASDFASDF AF', 'ASDF ASDFAS DFASDF', '2013-10-31', 'ASDF ASDFASDFAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_noticia_galeria`
--

CREATE TABLE IF NOT EXISTS `cms_noticia_galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `texto` text COLLATE utf8_spanish2_ci,
  `imagen` text COLLATE utf8_spanish2_ci NOT NULL,
  `cms_noticia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_noticia_galeria_cms_noticia1_idx` (`cms_noticia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_noticia_galeria`
--

INSERT INTO `cms_noticia_galeria` (`id`, `titulo`, `texto`, `imagen`, `cms_noticia_id`) VALUES
(1, 'Titulo Imagen A', 'Texto Imagen A', 'http://localhost/afs/sesac_prog/assets/img/modal-img-1.jpg', 1),
(2, 'sdgdgd', 'sdfgsdgs', 'http://localhost/afs/sesac_prog/assets/img/noticias/feature_feel_icon.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_nuestra_compania`
--

CREATE TABLE IF NOT EXISTS `cms_nuestra_compania` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_nuestra_compania`
--

INSERT INTO `cms_nuestra_compania` (`id`, `titulo`) VALUES
(1, '¿Quiénes somos?'),
(2, 'Nuestro equipo de trabajo'),
(3, 'Políticas de calidad'),
(4, 'Nuestro compromiso'),
(5, 'Misión, visión e historia'),
(6, 'Certificaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_nuestra_compania_articulo`
--

CREATE TABLE IF NOT EXISTS `cms_nuestra_compania_articulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish2_ci NOT NULL,
  `cms_nuestra_compania_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_nuestra_compania_articulo_cms_nuestra_compania1_idx` (`cms_nuestra_compania_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_nuestra_compania_articulo`
--

INSERT INTO `cms_nuestra_compania_articulo` (`id`, `texto`, `imagen`, `cms_nuestra_compania_id`) VALUES
(1, '<p>Quienes somos - texto&nbsp;</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/empresa/verticallimitpic9.jpg', 1),
(2, '<p>Nuestro equipo de trabajo - Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/empresa-img.jpg', 2),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'http://localhost/afs/sesac_prog/assets/img/empresa-img.jpg', 3),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'http://localhost/afs/sesac_prog/assets/img/empresa-img.jpg', 4),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'http://localhost/afs/sesac_prog/assets/img/empresa-img.jpg', 5),
(6, '<p>Certificaci&oacute;n actualizada</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/certs-logo-1.png', 6),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'http://localhost/afs/sesac_prog/assets/img/certs-logo-2.png', 6),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'http://localhost/afs/sesac_prog/assets/img/certs-logo-1.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--

CREATE TABLE IF NOT EXISTS `cms_oauth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_oauth_config`
--

INSERT INTO `cms_oauth_config` (`id`, `uri`, `var`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `type` enum('module','function') DEFAULT NULL,
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
-- Estructura de tabla para la tabla `cms_proyecto`
--

CREATE TABLE IF NOT EXISTS `cms_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `intro` text COLLATE utf8_spanish2_ci,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `cms_servicio_id` int(11) NOT NULL,
  `cms_cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_proyecto_cms_servicio1_idx` (`cms_servicio_id`),
  KEY `fk_cms_proyecto_cms_cliente1_idx` (`cms_cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=118 ;

--
-- Volcado de datos para la tabla `cms_proyecto`
--

INSERT INTO `cms_proyecto` (`id`, `titulo`, `intro`, `texto`, `cms_servicio_id`, `cms_cliente_id`) VALUES
(1, 'Proyecto A', 'Texto Intro - proyecto A', 'Texto', 1, 45),
(111, 'Proyecto A', 'Texto Intro - proyecto A', 'Texto', 2, 51),
(112, 'Proyecto de prueba AAA', 'Proyecto de prueba AAA - aqui va el intro', '<p>Proyecto de prueba AAA - aqui va el texto&nbsp;</p>\r\n', 2, 51),
(115, 'Proyecto de prueba BBB', 'Proyecto de prueba BBB - aqui va el intro', '<p>Proyecto de prueba BBB - aqui va el texto</p>\r\n', 3, 51),
(116, 'Proyecto de prueba BBB', 'Proyecto de prueba BBB - aqui va el intro', '<p>Proyecto de prueba BBB - aqui va el texto</p>\r\n', 3, 51),
(117, '', '', '', 10, 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_proyecto_galeria`
--

CREATE TABLE IF NOT EXISTS `cms_proyecto_galeria` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish2_ci,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `texto` text COLLATE utf8_spanish2_ci,
  `cms_proyecto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_proyecto_galeria_cms_proyecto1_idx` (`cms_proyecto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_servicio`
--

CREATE TABLE IF NOT EXISTS `cms_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_servicio`
--

INSERT INTO `cms_servicio` (`id`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Servicio 1', '<p>Texto del servicio 1&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(2, 'Servicio 2', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(3, 'Servicio 3', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(4, 'Servicio 4', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(5, 'Servicio 5', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(6, 'Servicio 6', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/feature_feel_icon.png'),
(10, 'Servicio 7', '<p>Texto del servicio 7&nbsp;- Editado</p>\r\n', 'http://localhost/afs/sesac_prog/assets/img/servicios/lightning_icon.png');

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
('0016456d4b2e6e33cd0d20eaba5e8b98', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397706, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('02ccab7073dbcd4d92e16ac7c04ae76f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328526, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('02d29c3668c0e5d9760982bc97de36f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378824044, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('043fcc3ed4417ed67f404629aa8d68c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329017, ''),
('049877310eeea5a5bb88fd57626e2dd3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333437, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('05e8a1d7e93b25701424445dad658bed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329132, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('0737470f7616369b47eb7869b10ef6a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328597, ''),
('08d0db542cd03399e8b6ef1a33292353', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328887, ''),
('0a02428c1a0cc0dc2bb0a849d357811f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382624138, ''),
('0d9e7e7a76c7a3801d759cf8d14fbb31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329271, ''),
('105782ef60e104141564e470f4abac8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378326518, ''),
('188e767c964a91d554a67e09ebd9c32f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386724, ''),
('18e8c6a4335750dbbaa7d1dd637818bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328216, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1b0662ef7ea82a4dc244a17f9418e0e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330263, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1be91c9267fd4ac81e3ada48044eadc3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329334, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1d6fa0b1b7d3f6a083b15f3870a444cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329325, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1e937ea01a2bc79b5e57d74c61a07975', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331753, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('208f76d1da60c93a93c2fa10a13d14f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328020, ''),
('24e647060663ec4fb084dcc6928ae8c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327919, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('2719541eeb69835029534f8529a65bf0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328479, ''),
('27923e70729705e7a14eb3cae2eaf1ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328577, ''),
('284fe2e842076d0ead4a01aaf816034e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328926, ''),
('2986d34cffad2f1a7f503bf4eb6810c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328743, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('2a0566ae54b66874006711aedaa528a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330263, ''),
('2e19d188289b5b3d4495c5fd9ca6b4f6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331997, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('2eab561608477d18121bf3a100abe554', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332349, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('306b7ba8be23020021b8305ff5664a03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397745, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('32b95e17949055cb5e1da6467b387871', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329102, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('349d5cc543505339e4897a32e320899b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386752, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('37a9724a9ffc88468c2af45924f17ed5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328463, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('39ae7dd910ffc5ccbc15d8e76f1b777e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329226, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('3c45038dbdebfd2493c45a2d0e1e3cb9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331170, ''),
('3c8d6cf23149180ee3959800ae2854e0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827443, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('3eb86ff8331522da13bd6284207b8055', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333600, ''),
('40c8621cae2a844d7f9aa082ec0e6ff8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397659, ''),
('416cb8badab25abd038949ad1b1f03eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332021, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('41b23b38d0264504cd4cd1658909f776', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327629, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('4264a4025441bc9a7b7b0fb6a2d536d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845784, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('47d1a6624c691ea9a8e735e8048ec968', '127.0.0.1', 'Java/1.7.0_21', 1378743226, 'a:2:{s:9:"user_data";s:0:"";s:5:"state";s:32:"c259f765aa6fe101457ad212ebb0a2dd";}'),
('48657641ca2059a5c2322306a4364a2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328570, ''),
('4b2f00828dc3dd0c7a6a48ac9054c013', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327564, ''),
('4f089ef39e0618941d9be207c2e780f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333361, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('4fb875e2dc4741672cc03f0ba7ac0b1f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332014, ''),
('503f58efa61fcf8681727ee26b10c3f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330053, ''),
('50fbf8a98ee0374c7e719c572a548bf6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331812, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('51f02ec3b97db9ca223f17aa92adde44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331085, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('53274cd62d900d6a090c52b1800c9c82', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331205, ''),
('56baf379bad9e53c05d763937afc838a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329103, ''),
('57bf3f301878649f9a751a6e984b8ae3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330047, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('583268b5d12d331b97272a9a1ced9dc7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333271, ''),
('5851787bdd0950369b9c266fec07f23d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332022, ''),
('5b98827a6bae7c47d9c2023ee71ffa52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331381, ''),
('5c284abcf4d94b1d838a5a6237cb14bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331124, ''),
('5c83e26f59590b428070851cdfeb9e8a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327656, ''),
('5f7c650539c4742a80d3acbd439a3d68', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1383255841, ''),
('5f802daae13dd8fba17c5b30584c1558', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331900, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('60cecab4acf7ed2a4ff05f413c052fb7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333485, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('620a4033d26ca7fac32d7c5255cc196b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845792, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('6418b906d61114c0ba9dd571457f17a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328138, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('65163b95977841b0a0ddc9826e8cc355', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332000, ''),
('6640f0e2498021ce80e64e9e036d68d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333332, ''),
('666d4f78d59a9298e528331d48c4c9c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378845771, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('67ed19117169ebdc2334b37322e82dad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328439, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('680fcd84ff886805ba55bc6aa27a7384', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329938, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('696902f757eeafd9440901a32dcefd34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328222, ''),
('6a3a001f8caf9181cf6722879ce1f080', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332519, ''),
('6c6a767a919c072471c01f284ffc3c8c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330063, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('6e16be318af5e08019d8481e0e6c3a38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331048, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('6ec0df31a491751d035b96705086672b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378766283, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7006e1b06347b3125abdb651b16d777f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330672, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('73ba55594094ae10f91193ed22ea14c1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329267, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('73e82b0f9a7f41a134b2a9bd65585d6e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331380, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('74160457caa401312d481fe8633cc59a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328847, ''),
('76625673ba1ff2e49da9120939edcdfa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330064, ''),
('76f44939c4339a78bee6028898492b45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327791, ''),
('797705aa48ce04e10c362293b0c66b7c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333405, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('79818a37d024d6a27fbb634101847fc6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397712, ''),
('7a22d0495a2de01df1accc521cdd7865', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333511, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7a42615f17401314e3240a077b5bad8d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330138, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7b27398d242fb3e10b82da30d8ebd50d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328569, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7b3d335ee0b91a900bc5e5901902ddca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332408, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7b67151d26386190bcf56c92f5ecb62c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328596, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7c8ec77129bbb0ac1f3b23d253cb7288', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329133, ''),
('7cc093d68853f400fe163b2abc77a234', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333331, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7d277cacdf11ea16186e4ab58dbe7748', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386706, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('7d284d12dcdd2d8863e3496874cc4cc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378744035, 'a:8:{s:9:"user_data";s:0:"";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:11:"oauth_token";s:312:"TzoxOToiT0F1dGhfVG9rZW5fUmVxdWVzdCI6NTp7czo3OiIAKgBuYW1lIjtzOjc6InJlcXVlc3QiO3M6MTE6IgAqAHZlcmlmaWVyIjtOO3M6MTU6IgAqAGFjY2Vzc190b2tlbiI7czo0MzoiSnFnTkxtUlU1ZG1ySzZuR0FMRnNyRUM3ZkJxa3ZhUENOTmFCMXMxdDNUcyI7czo5OiIAKgBzZWNyZXQiO3M6NDE6InVaNXdoSXRWNDFTNDJxWm96cjFQSTNPYnczeUU5OGFtYXVrWHBDTGhrIjtzOjY6IgAqAHVpZCI7Tjt9";s:5:"state";s:32:"17b3fde5293c522322a29760c8a155b0";}'),
('7e4026e63a84c6bb973d509b9f573141', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333292, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('826796b7b743e7d6e5b453752c1e3ab1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397707, ''),
('8402b7bebe2422060e2d092d25761475', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332506, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('8599568b1629ba144fd20849f9877a6e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331634, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('863d32d4c21dcb596a3430aa7079c549', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328886, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('86441e1cb2252ac43dd9afe0ffd7effe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827859, ''),
('88c6f1690b6ec36c98133bb40af39ffe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328526, ''),
('88d84f471587e068ce5fd6f7a3b8d6cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378819392, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('8950377401ccdd4f6fda19682cf4c70b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329932, ''),
('89934bcd931cab359ffd87528b535536', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331030, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('8aa5c7091bace54a9ae792a513a43741', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327494, ''),
('8b15c060cf5ed2f435d72e332e097fd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331158, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('8da1868b1438cabd3ec6a4d027de07dc', '127.0.0.1', 'Java/1.7.0_21', 1378478278, 'a:2:{s:9:"user_data";s:0:"";s:5:"state";s:32:"b3457bf1d2484b2906eb11f98a2ab0ac";}'),
('8e944a110492638743f9cc7e9126597a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332827, ''),
('8f49b7bc9c9781bb0a69618d648f07c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328706, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('8fc3f96c64830c646bd347f24d22b69b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333515, ''),
('9100ef4fc7b3017a8e034926df122923', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332440, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('94030e373ea062cc98b6ab788ff85537', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327922, ''),
('94b57942be6f1ed193412edc4cc9cb1c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1383235068, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('96967228d053b339d2ebebaabe037a32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331916, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('96fb8016c1a23aff9ca0fe673401c11e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378763282, 'a:8:{s:9:"user_data";s:0:"";s:5:"state";s:32:"7e96efb8b3550f636f9b2fd553f99576";s:8:"identity";s:18:"cms@imaginamos.com";s:8:"username";s:13:"administrator";s:5:"email";s:18:"cms@imaginamos.com";s:7:"user_id";s:1:"5";s:14:"old_last_login";s:4:"2013";s:11:"oauth_token";s:316:"TzoxOToiT0F1dGhfVG9rZW5fUmVxdWVzdCI6NTp7czo3OiIAKgBuYW1lIjtzOjc6InJlcXVlc3QiO3M6MTE6IgAqAHZlcmlmaWVyIjtOO3M6MTU6IgAqAGFjY2Vzc190b2tlbiI7czo0MjoiSXl6YzV6RlRRcm8yS3VaaUJzWmJvYm02QTlSUEhEQWE4UGJoRnRMRnhFIjtzOjk6IgAqAHNlY3JldCI7czo0MzoibzRIdkJuNWRVcjFQY2ttY0ZiSnd1WjdMbmNKV2lyd21UVmtQWU9Gd3VEbyI7czo2OiIAKgB1aWQiO047fQ==";}'),
('97a1f81888adf6b9f4498f93bf286377', '127.0.0.1', 'Java/1.7.0_21', 1378737647, 'a:2:{s:9:"user_data";s:0:"";s:11:"oauth_token";s:316:"TzoxOToiT0F1dGhfVG9rZW5fUmVxdWVzdCI6NTp7czo3OiIAKgBuYW1lIjtzOjc6InJlcXVlc3QiO3M6MTE6IgAqAHZlcmlmaWVyIjtOO3M6MTU6IgAqAGFjY2Vzc190b2tlbiI7czo0MjoieTlFaXFnam9QM3BkWWp1RkhVdDhLaU9OZUN1NkZYR1hGQ2dqRGVHbkNZIjtzOjk6IgAqAHNlY3JldCI7czo0MzoiZHhEcVlSWGJEdmowcXQzemdUblhiYjA0Nnp1dzRrUjQ2bUFXRmZJb0g1ayI7czo2OiIAKgB1aWQiO047fQ==";}'),
('986b245cb23a81b062df011cc38b4c6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330673, ''),
('9acc3289a24cef41ff117b09bd412da3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333108, ''),
('9db45c4be6de575137df354f551cba68', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329939, ''),
('9f4371629a1aca7d424f16acd71252bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331162, ''),
('a009e9dc8b777a31f84dca2c3dec97a1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330020, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('a6c8312ab70687cb4d2b9e802bf90ea9', '127.0.0.1', 'Java/1.7.0_21', 1378485302, 'a:2:{s:9:"user_data";s:0:"";s:11:"oauth_token";s:308:"TzoxOToiT0F1dGhfVG9rZW5fUmVxdWVzdCI6NTp7czo3OiIAKgBuYW1lIjtzOjc6InJlcXVlc3QiO3M6MTE6IgAqAHZlcmlmaWVyIjtOO3M6MTU6IgAqAGFjY2Vzc190b2tlbiI7czo0MToid0tVTExhcDc3RnRURHA3RTlQcGhLd0JwWEY3aDBJSG5EMHdKODJOYkkiO3M6OToiACoAc2VjcmV0IjtzOjQwOiJZY0lOZnVRZmE3cnVlaTV0ZkRyOVBuUzNBWW84Tlg4VXpzVG1IVW80IjtzOjY6IgAqAHVpZCI7Tjt9";}'),
('a9a3a35aa53f13f1eaddae8e6c2c2126', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333406, ''),
('aa1dd36a36f5ef56fdb145218a72e7e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330049, ''),
('ac6128bc4dbb6fc3abdf391fb49dcbd8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333293, ''),
('ac8eebdbc371fb84887958390387bed4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1383140369, 'a:5:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"oauth_token";s:316:"TzoxOToiT0F1dGhfVG9rZW5fUmVxdWVzdCI6NTp7czo3OiIAKgBuYW1lIjtzOjc6InJlcXVlc3QiO3M6MTE6IgAqAHZlcmlmaWVyIjtOO3M6MTU6IgAqAGFjY2Vzc190b2tlbiI7czo0MzoiYVRhaW5tb3hUUE92WmI1OEEwRGpaVVFJSFdzaTd3b2duQ2dYbGdZTUVwNCI7czo5OiIAKgBzZWNyZXQiO3M6NDI6Ijl6NmNBWVRjdnBEZVlMWU5qMlRER1BnT1VMRXh5MWpTZHNqVGxpTDdwVSI7czo2OiIAKgB1aWQiO047fQ==";}'),
('aefa8143d061d33051d66f65c0c983e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328746, ''),
('af469d7441b7424b76240490bbf1c459', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328847, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('aff218a29876f462602260edcd010059', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397635, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('b1e11dca8f0e9ee472e10829eff3893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328249, ''),
('b626167c4990e6828099e2b27ed51af0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331727, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('b8153e26516cc9c28d773ae5553ef2ed', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827478, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('b8998e6fec67f8774343296fc92a0efc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333438, ''),
('bb299fdf2d7b6e8ed0e39e8107211b4c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331199, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('bd226ba86314af4af1d567868a628fa7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329149, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('bde61b1a0c87d100850911b032e8d60f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333598, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('bf665f44483e5309c478cef9ce11e4cb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330145, ''),
('bf9a2d6a5c19cdb7bbc06ea695120631', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330273, ''),
('c376e2d097bace68f7bafd66563232e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331803, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c4713994afd80982302b134174eac44b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386757, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c4ffeeba6976fd8aec2458f114c6da64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332044, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c601e32fa9ba33679757c472d26b2637', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328217, ''),
('c97411ede3aea44325ddd4a99c56ccfa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333382, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c9d0d99f4f77c0cfa5a5b5f4245a6d6c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331680, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ca2f3038d8bb67082b8833e2178ca891', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328139, ''),
('cc4a618a904c86cd560839d1c16ee224', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378386084, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ce21c9a81c54a0b684b0c935050f0be6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331111, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ce786933f5c9f3e831e82ca1c1d5b344', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382710775, ''),
('d3fceaf44ba09e006277bc8887d3ffaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378825698, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d8709bd51ec6445f589dccf96e54fe3f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328526, ''),
('d9d577e838043f85e3d0bac43a1dae86', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378825359, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('da56269e4dad65346088350f3f83d816', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382641857, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('dbe22d979a157e1f69c420fdeefcdbb1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827519, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('dcea70e1a65e2643bf7b98e2e19fde37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378397379, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('dd4effd7e5b17eee850d607c5fb984b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333471, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('de8046baddb8a51174676facc40a5e7c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333270, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('df358cd8d1c7c940475078c2d1e66963', '127.0.0.1', 'Java/1.7.0_21', 1378481741, ''),
('e013a55fdaca988ab73738403229dbbf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329013, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('e165c1b3406e29389c0448284989d11b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330180, ''),
('e47ef69b3c9d48602a3fe914a4897819', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328951, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('e7c4db87a74b1797af9c490bafc8b55f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328926, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('e7d826e1a99515671a1beef5991673de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378332851, ''),
('ece231bbadb69fe610532f42524c3a61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333383, ''),
('ecea0377f4b78591dce43fb1d50289e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329174, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ed3af5eeccef4478fd9974214510f991', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329373, ''),
('ede2e8f4bc80446337c8a4fb326b0174', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331708, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ee1a77c750b3acd3b180f9692bf5852a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1383312883, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ef6de04afb36ba3ee8dae1d0dc210423', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329150, ''),
('ef976be27a9964effe5513290c50b4b7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827497, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f2659a5a7410ccba1885eb7109e88c5c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378327630, ''),
('f2a23e7785caf63e4a96abe321b70a11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330273, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f429aa450d9d3fbf6e0c3aa0b1e4094c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328952, ''),
('f43f02c66d1465e855614b8129630286', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331200, ''),
('f476b26b5f7ce73316039bbd2e5c4f5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1383168135, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f5fce6ea1288adbfb2eb25c528ae6962', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331295, ''),
('f83683d3ee39e027e943362471617467', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378388119, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f9988561336d13c9a22b5cb1cfcab930', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378330177, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f9dbeb76e1e60e2b097af8fad6bb02b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378328020, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('fa89be056c9d5c39ee31ca27adab4685', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333106, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('fb0ed4b843402b32b18018850a2486a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0', 1382642156, ''),
('fd295630b634aa6000e8a650f339725e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333472, ''),
('fe097d6dfc7165ecc9934307dae3b8ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378827355, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('fe2a49e3d8f5be7905362e9ecdd9c76f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378333362, ''),
('fe4a20b3ea383cdb9d04d384ead52977', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1383240368, ''),
('fe5a8d5b398b4fb383290e626783cec8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378329928, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ff23fcce53fcedd488d2aa9df48d0182', '127.0.0.1', 'Java/1.7.0_21', 1378743990, 'a:2:{s:9:"user_data";s:0:"";s:5:"state";s:32:"dbe8d16c2f9c3bb45433f979b62a970a";}'),
('ff4b3da4e54b64898baa6e2095a22e0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382973039, ''),
('ffcd3040380bbd543551105abdf2c90b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36', 1378331288, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}');

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
  `name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `name`, `first_name`, `last_name`, `company`, `phone`, `address`) VALUES
(5, '7f000001', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, 'Administrador', NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_accounts_user`
--
ALTER TABLE `cms_accounts_user`
  ADD CONSTRAINT `fk_cms_accounts_user_cms_users1` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_contacto_email`
--
ALTER TABLE `cms_contacto_email`
  ADD CONSTRAINT `fk_cms_contacto_email_cms_contacto1` FOREIGN KEY (`cms_contacto_id`) REFERENCES `cms_contacto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_footer_email`
--
ALTER TABLE `cms_footer_email`
  ADD CONSTRAINT `fk_cms_footer_email_cms_footer1` FOREIGN KEY (`cms_footer_id`) REFERENCES `cms_footer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_groups_permissions`
--
ALTER TABLE `cms_groups_permissions`
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cms_users_permissions_cms_permissions10` FOREIGN KEY (`permission_id`) REFERENCES `cms_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_noticia_galeria`
--
ALTER TABLE `cms_noticia_galeria`
  ADD CONSTRAINT `fk_cms_noticia_galeria_cms_noticia1` FOREIGN KEY (`cms_noticia_id`) REFERENCES `cms_noticia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_nuestra_compania_articulo`
--
ALTER TABLE `cms_nuestra_compania_articulo`
  ADD CONSTRAINT `fk_cms_nuestra_compania_articulo_cms_nuestra_compania1` FOREIGN KEY (`cms_nuestra_compania_id`) REFERENCES `cms_nuestra_compania` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_proyecto`
--
ALTER TABLE `cms_proyecto`
  ADD CONSTRAINT `fk_cms_proyecto_cms_cliente1` FOREIGN KEY (`cms_cliente_id`) REFERENCES `cms_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_proyecto_cms_servicio1` FOREIGN KEY (`cms_servicio_id`) REFERENCES `cms_servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_proyecto_galeria`
--
ALTER TABLE `cms_proyecto_galeria`
  ADD CONSTRAINT `fk_cms_proyecto_galeria_cms_proyecto1` FOREIGN KEY (`cms_proyecto_id`) REFERENCES `cms_proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
