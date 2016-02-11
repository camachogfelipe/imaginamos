-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2012 a las 16:18:07
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarioabe_lads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `idtbl_banner` int(11) NOT NULL AUTO_INCREMENT,
  `nombretbl_banner` varchar(100) DEFAULT NULL,
  `tbl_capitulos_idtbl_capitulos` int(11) NOT NULL,
  PRIMARY KEY (`idtbl_banner`),
  KEY `fk_tbl_banner_tbl_capitulos` (`tbl_capitulos_idtbl_capitulos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD CONSTRAINT `fk_tbl_banner_tbl_capitulos` FOREIGN KEY (`tbl_capitulos_idtbl_capitulos`) REFERENCES `tbl_capitulos` (`idtbl_capitulos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
