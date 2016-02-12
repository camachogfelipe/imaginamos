-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2013 at 08:41 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usuariosena_vg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_banner_superior`
--

CREATE TABLE IF NOT EXISTS `cms_banner_superior` (
  `id_banner_superior` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_banner_superior` varchar(30) NOT NULL,
  `texto_banner_superior` text NOT NULL,
  `imagen_banner_superior` varchar(60) NOT NULL,
  `link_banner_superior` varchar(60) NOT NULL,
  PRIMARY KEY (`id_banner_superior`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `cms_banner_superior`
--

INSERT INTO `cms_banner_superior` (`id_banner_superior`, `titulo_banner_superior`, `texto_banner_superior`, `imagen_banner_superior`, `link_banner_superior`) VALUES
(13, 'Trata de usar pocas palabras', 'asdfasdf dsf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf', 'Blue eye1357765596.jpg', 'http://www.mixcloud.com/'),
(14, '¡Excelente Menú de invitados!', 'asdfasd asdf asdf asf asdf as ', 'Murcielagos21357765640.jpg', 'https://www.youtube.com/watch?v=5xPPZRd6P_I'),
(15, 'Prueba de banner traido fdgdfg', 'sadfjhgd hjdg kjhag jhgd jhagd fjhadg fkajhd fkajhdf akjh ashd gfjhas fasg fasd fajhdf kajhd kajhsd fjkhsd jad jahsd jhsd kajshd kjhsd ksh khjs kjhsd gkjhsdg jhsd jasd kajh  dfsg sdfg sdfg sdfg sdfg sdf gsfg sfg sfg sfg sfdg sdfg sfg sfg    ffadfadf adfadfadfa', 'Chrysanthemum1357768107.jpg', 'adgdfg sdf sdf gsdf sdfg sf sfg sfg f s '),
(16, 'asdfas asdf asdf asdf', 'asdf asdf asdf asdf asdf asdf asdf adf asdf asdf asdf ', 'kaya1358537852.jpg', 'https://www.youtube.com/watch?v=5xPPZRd6P_I');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
