-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2013 at 10:20 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_textos`
--

CREATE TABLE IF NOT EXISTS `cms_textos` (
  `id_textos` int(2) NOT NULL AUTO_INCREMENT,
  `seccion_textos` varchar(255) NOT NULL,
  `texto_textos` text NOT NULL,
  PRIMARY KEY (`id_textos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cms_textos`
--

INSERT INTO `cms_textos` (`id_textos`, `seccion_textos`, `texto_textos`) VALUES
(1, 'Bienvenida', 'Texto correspondiente al área de bienvenida, debe ser corto y claro. No debe contener código HTML, éste es filtrado y nada se verá reflejado en el frontpage. 1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
