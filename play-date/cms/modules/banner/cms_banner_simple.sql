-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2013 at 04:50 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ct`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_banner_superior`
--

CREATE TABLE IF NOT EXISTS `cms_banner_superior` (
  `id_banner_superior` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_banner_superior` varchar(255) NOT NULL,
  `imagen_banner_superior` varchar(60) NOT NULL,
  PRIMARY KEY (`id_banner_superior`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `cms_banner_superior`
--

INSERT INTO `cms_banner_superior` (`id_banner_superior`, `titulo_banner_superior`, `imagen_banner_superior`) VALUES
(17, 'Un hogar no sale adelante celebrando éxitos, sale adelante superando obstáculos', '011359991957.jpg'),
(18, '¿Problemas de comportamiento con tus hijos? Tenemos una respuesta para ti', '021359992508.jpg'),
(19, 'Te ayudamos con las dificultades académicas de tus hijos', '031359992566.jpg'),
(20, 'Escuelas de padres', '041359992690.jpg'),
(21, '"Para un clima laboral sano, se necesita una actitud sana"', '051359992734.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
