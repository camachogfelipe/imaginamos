-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2013 a las 10:48:49
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.3.10-1ubuntu3.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_contitucionaldia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_modulos`
--

CREATE TABLE IF NOT EXISTS `cms_modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_nombre` varchar(45) NOT NULL,
  `txt_clase` varchar(150) NOT NULL,
  `txt_descripcion` text NOT NULL,
  `fil_image` varchar(255) NOT NULL DEFAULT 'img_perfil.jpg',
  `ind_show` VARCHAR(2) NOT NULL DEFAULT 0 ,
  `ind_estado` VARCHAR(2) NOT NULL DEFAULT '1' ,
  `fec_creasi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_modulos`
--

INSERT INTO `cms_modulos` (`id`, `txt_nombre`, `txt_clase`, `txt_descripcion`, `fil_image`, `ind_show`, `ind_estado`, `fec_creasi`) VALUES
(1, 'Usuarios', 'cms_usuarios', 'Administrador de usuarios', 'img_perfil.jpg', '1', '1', '2013-05-24 11:49:05'),
(2, 'Permisos', 'cms_permisos', 'Administrador de permisos', 'img_perfil.jpg', '0', '1', '2013-05-24 01:55:17'),
(3, 'Modulos', 'cms_modulos', 'Administrador de modulos', 'img_perfil.jpg', '0', '1', '2013-05-27 11:22:56'),
(4, 'Roles', 'cms_roles', 'Administrador de roles', 'img_perfil.jpg', '0', '1', '2013-05-27 11:22:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permisos`
--

CREATE TABLE IF NOT EXISTS `cms_permisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_permisos_modulos` (`id_modulo`),
  KEY `fk_permisos_roles` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_permisos`
--

INSERT INTO `cms_permisos` (`id`, `id_modulo`, `id_rol`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_roles`
--

CREATE TABLE IF NOT EXISTS `cms_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_nombre` varchar(45) NOT NULL,
  `ind_estado` VARCHAR(2) NULL DEFAULT '1' ,
  `fec_creasi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_roles`
--

INSERT INTO `cms_roles` (`id`, `txt_nombre`, `fec_creasi`) VALUES
(1, 'Administrador', '2013-05-22 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_usuarios`
--

CREATE TABLE IF NOT EXISTS `cms_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `txt_nombre` varchar(150) NOT NULL,
  `txt_passwd` varchar(45) NOT NULL,
  `txt_email` varchar(255) DEFAULT NULL,
  `ind_delete` VARCHAR(2) NOT NULL DEFAULT 0 ,
  `ind_estado` VARCHAR(2) NULL DEFAULT '1' ,
  `fec_creasi` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_roles` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_usuarios`
--

INSERT INTO `cms_usuarios` (`id`, `id_rol`, `txt_nombre`, `txt_passwd`, `txt_email`, `fec_creasi`) VALUES
(1, 1, 'Administrador', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', '2013-05-22 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_permisos`
--
ALTER TABLE `cms_permisos`
  ADD CONSTRAINT `fk_permisos_modulos` FOREIGN KEY (`id_modulo`) REFERENCES `cms_modulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_permisos_roles` FOREIGN KEY (`id_rol`) REFERENCES `cms_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_usuarios`
--
ALTER TABLE `cms_usuarios`
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`id_rol`) REFERENCES `cms_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
