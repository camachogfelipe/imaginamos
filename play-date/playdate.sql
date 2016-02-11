-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2013 at 12:06 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `playdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_actividades`
--

CREATE TABLE IF NOT EXISTS `cms_actividades` (
  `id_actividades` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_actividades` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subtitulo_actividades` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subtitulo2_actividades` varchar(255) CHARACTER SET utf8 NOT NULL,
  `texto_actividades` text CHARACTER SET utf8 NOT NULL,
  `imagen_actividades` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imagen2_actividades` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_actividades`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_banner_superior`
--

CREATE TABLE IF NOT EXISTS `cms_banner_superior` (
  `id_banner_superior` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_banner_superior` varchar(255) NOT NULL,
  `imagen_banner_superior` varchar(60) NOT NULL,
  PRIMARY KEY (`id_banner_superior`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `cms_banner_superior`
--

INSERT INTO `cms_banner_superior` (`id_banner_superior`, `titulo_banner_superior`, `imagen_banner_superior`) VALUES
(22, 'Test de Banner/-/--Test de banner edit', 'banner011363018712.jpg'),
(23, 'Prueba para banner /-/--Segunda imagen de banner', 'banner021363019600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cms_configuration`
--

CREATE TABLE IF NOT EXISTS `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES
(1, '2012-07-25 12:10:42', 'http://localhost:8091/Trabajo/playdate/cms/', 'http://localhost:8091/Trabajo/playdate/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms_destacados`
--

CREATE TABLE IF NOT EXISTS `cms_destacados` (
  `id_destacados` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_destacados` varchar(255) NOT NULL,
  `texto_destacados` varchar(500) NOT NULL,
  `imagen_destacados` varchar(60) NOT NULL,
  PRIMARY KEY (`id_destacados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms_destacados`
--

INSERT INTO `cms_destacados` (`id_destacados`, `titulo_destacados`, `texto_destacados`, `imagen_destacados`) VALUES
(1, 'Destacado 1', 'texto destacado de prueba texto destacado de prueba texto destacado de prueba texto destacado de prueba texto destacado de prueba texto destac fgfdgdfgvdfgvdfgd', 'destacado-11363026470.png'),
(2, 'Destacado 2', 'Texto para destacados', 'icoconsultar1363027388.png');

-- --------------------------------------------------------

--
-- Table structure for table `cms_items`
--

CREATE TABLE IF NOT EXISTS `cms_items` (
  `id_items` int(11) NOT NULL AUTO_INCREMENT,
  `id_actividades_items` int(11) NOT NULL,
  `titulo_items` varchar(255) CHARACTER SET utf8 NOT NULL,
  `texto_items` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_items`),
  KEY `fk_items_actividades` (`id_actividades_items`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Items de actividades' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'Home', 'modules/banner/view', 'group'),
(2, 'quienes', 'modules/quienes/view', 'zoom_in'),
(3, 'Actividades', 'modules/actividades/view', 'checkmark');

-- --------------------------------------------------------

--
-- Table structure for table `cms_quienes`
--

CREATE TABLE IF NOT EXISTS `cms_quienes` (
  `id_quienes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_quienes` varchar(255) NOT NULL COMMENT 'historia',
  `texto_quienes` text NOT NULL,
  `titulo2_quienes` varchar(255) NOT NULL COMMENT 'mision',
  `texto2_quienes` text NOT NULL,
  `titulo3_quienes` varchar(255) NOT NULL COMMENT 'vision',
  `texto3_quienes` text NOT NULL,
  `imagen1_quienes` varchar(255) DEFAULT 'logo.png',
  PRIMARY KEY (`id_quienes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_quienes`
--

INSERT INTO `cms_quienes` (`id_quienes`, `titulo_quienes`, `texto_quienes`, `titulo2_quienes`, `texto2_quienes`, `titulo3_quienes`, `texto3_quienes`, `imagen1_quienes`) VALUES
(1, 'Misión', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet massa non leo convallis eleifend. Cras ut elit mattis tellus sagittis commodo. Curabitur laoreet, ligula sed sodales pulvinar, velit orci venenatis elit, sit amet luctus massa quam ac diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est est, vestibulum eu gravida sit amet, luctus vitae dolor.dignissim.', 'Visión', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet massa non leo convallis eleifend. Cras ut elit mattis tellus sagittis commodo. Curabitur laoreet, ligula sed sodales pulvinar, velit orci venenatis elit, sit amet luctus massa quam ac diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est est, vestibulum eu gravida sit amet, luctus vitae dolor.dignissim.', 'Historia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet massa non leo convallis eleifend. Cras ut elit mattis tellus sagittis commodo. Curabitur laoreet, ligula sed sodales pulvinar, velit orci venenatis elit, sit amet luctus massa quam ac diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est est, vestibulum eu gravida sit amet, luctus vitae dolor.dignissim.', 'quienes-somos011363037398.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', 'e7cdbe62dbae20112e5ee1a7a101c6d3', 'cms@imaginamos.com', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms_items`
--
ALTER TABLE `cms_items`
  ADD CONSTRAINT `fk_items_actividades` FOREIGN KEY (`id_actividades_items`) REFERENCES `cms_actividades` (`id_actividades`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
