-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2013 a las 22:59:44
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aoa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE IF NOT EXISTS `aseguradoras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicios_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aseguradoras_FKIndex1` (`servicios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `aseguradoras`
--

INSERT INTO `aseguradoras` (`id`, `servicios_id`, `titulo`, `imagen`) VALUES
(5, 1, 'Project iIpsun', 'original_5.png'),
(6, 1, 'Project iIpsun', 'original_6.png'),
(7, 1, 'Project iIpsun', 'original_7.png'),
(8, 2, 'Project iIpsun', 'original_8.png'),
(9, 2, 'Project iIpsun', 'original_9.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_configuration`
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
-- Volcado de datos para la tabla `cms_configuration`
--

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES
(1, '2012-07-25 12:10:42', 'http://localhost/Trabajo/AOA_prog/cms/', 'http://localhost/Trabajo/AOA_prog/', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(1, 'Home', 'modules/home/view', 'administrator'),
(2, '¿Quiénes Somos?', 'modules/quienes_somos/view', 'clipboard'),
(3, 'Servicios', 'modules/servicios/view', 'briefcase'),
(4, 'Galeria', 'modules/galeria_de_fotos/view', 'pictures_folder'),
(5, 'Front PQR', 'modules/pqr_front/view', 'briefcase'),
(6, 'PQR registro', 'modules/pqr_registro/view', 'clipboard'),
(7, 'FAQ', 'modules/faq/view', 'checkmark'),
(8, 'Oficinas', 'modules/oficinas/view', 'usb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_user`
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
-- Volcado de datos para la tabla `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES
(1, 'administrador', 'e7cdbe62dbae20112e5ee1a7a101c6d3', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_de_servicio`
--

CREATE TABLE IF NOT EXISTS `condiciones_de_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aseguradoras_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` text,
  `datos_de_contacto_1` varchar(255) DEFAULT NULL,
  `datos_de_contacto_2` varchar(255) DEFAULT NULL,
  `texto_documentacion_requerida` text,
  PRIMARY KEY (`id`),
  KEY `condiciones_de_servicio_FKIndex1` (`aseguradoras_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `condiciones_de_servicio`
--

INSERT INTO `condiciones_de_servicio` (`id`, `aseguradoras_id`, `titulo`, `texto_descriptivo`, `datos_de_contacto_1`, `datos_de_contacto_2`, `texto_documentacion_requerida`) VALUES
(1, 5, 'prueba', '<p>La aseguradora pone a disposici&oacute;n del asegurado un vehiculo de reemplazo por 7 o 10 d&iacute;as seg&uacute;n la p&oacute;liza contratada.</p>\r\n', 'Call AOA: 5897547', '# de asistencia: 265', '<p>Cedula original<br />\r\nLicencia vigente<br />\r\nFirma de contrato<br />\r\nConstituir garant&iacute;a ( Tarjeta de cr&eacute;dito con cupo disponible)<br />\r\nOrden de Servicio (el vehiculo debe haber ingresado a taller)</p>\r\n'),
(2, 6, 'Project iIpsun', '<p>La aseguradora pone a disposici&oacute;n del asegurado un vehiculo de reemplazo por 7 o 10 d&iacute;as seg&uacute;n la p&oacute;liza contratada.</p>\r\n', 'Call AOA: 5897547', '# de asistencia: 265', '<p>Cedula original<br />\r\nLicencia vigente<br />\r\nFirma de contrato<br />\r\nConstituir garant&iacute;a ( Tarjeta de cr&eacute;dito con cupo disponible)<br />\r\nOrden de Servicio (el vehiculo debe haber ingresado a taller)</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_oficina`
--

CREATE TABLE IF NOT EXISTS `descripcion_oficina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oficinas_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `linea1` varchar(255) DEFAULT NULL,
  `linea2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `descripcion_oficina_FKIndex1` (`oficinas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `descripcion_oficina`
--

INSERT INTO `descripcion_oficina` (`id`, `oficinas_id`, `titulo`, `linea1`, `linea2`) VALUES
(1, 1, 'MORATO', 'TEL : 7560510', 'CRA 69 B N. 98 A 10'),
(2, 1, 'PRADO', 'TEL:6152879 EXT 115', 'AUTOPISTA NORTE 128 A-41 PISO 2'),
(3, 1, 'TOBERIN', 'TEL:6709833 EXT 106', 'CARRERA 19 No 164-36 PISO 2'),
(4, 1, 'MADELENA', 'TEL: 7465500', 'AUTOPISTA SUR N° 70-03 (AUTOSTOCK)'),
(5, 2, 'CENTRO COMERCIAL SANTAFÉ LOCAL 5202', 'TEL : 2629221/320 272 5927', 'CARRERA 43 A N. 7 SUR 107'),
(6, 3, 'CENTRO COMERCIAL MIRAMAR', 'TEL : 3203446993', 'Cra. 43 N. 99 - 50 local LE16'),
(7, 4, 'EDIFICIO TORRE MARDEL 703', 'TEL:3202334950', 'CRA 31 No. 51-74'),
(8, 5, 'EDIFICIO TORRE CENTRAL LOCAL 107', 'TEL:3202334965', 'CARRERA 10 N. 17 - 55'),
(9, 6, 'CENTRO COMERCIAL PALMETO PLAZA LOCAL 106', 'TEL : 4058649 - 320 302 0444', 'CALLE 9 CON CRA. 50'),
(10, 7, 'HOTEL CASA MORALES', 'TEL:3104766648', 'CRA 3 N. 3 - 47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `titulo`, `texto`, `imagen`, `imagen_2`) VALUES
(1, 'Vehículo de reemplazo', '(Servicio que se presta a los clientes de las aseguradoras cuando tienen un siniestro)', 'original_1.jpg', 'original2_1.jpg'),
(2, 'Project iIpsun', 'df asdf adsf adf asdf asdf asdf adsf asd asdf ', 'original_2.jpg', 'original2_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`id`, `pregunta`, `respuesta`) VALUES
(1, '¿El vehiculo de reemplazo se encuentra asegurado?', '<p>R// El Veh&iacute;culo cuenta con una P&oacute;liza Todo riesgo.</p>\r\n'),
(2, '¿En caso de siniestro o accidente con el vehículo sustituto, que debo hacer?', '<p>R// Debe reportarlo ante AOA y la Aseguradora dentro de las 2 horas siguientes al incidente, de acuerdo a lo estipulado en el contrato.</p>\r\n'),
(3, '¿Por qué tan pocos días de servicio, si la reparación del vehículo propio dura más tiempo?', '<p>R// Las condiciones de prestaci&oacute;n del servicio est&aacute;n sujetas a lo contratado por poliza. Estos tiempos son estipulados por la aseguradora.</p>\r\n'),
(4, '¿puedo tener el vehículo sustituto hasta que me entreguen el mio de reparación?', '<p>R// No. Solo durante el tiempo pactado en su poliza de seguro.</p>\r\n'),
(5, '¿Por qué tengo que constituir una garantía?', '<p>R// Las garant&iacute;as se constituyen con el fin de amparar los riesgos no cubiertos por las p&oacute;lizas de seguros y las sanciones por incumplimiento del contrato.</p>\r\n'),
(6, '¿Puedo tomar el servicio sin constituir garantía?', '<p>R// No es posible debido a que es una condici&oacute;n estipulada en el contrato.</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_de_fotos`
--

CREATE TABLE IF NOT EXISTS `galeria_de_fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `galeria_de_fotos`
--

INSERT INTO `galeria_de_fotos` (`id`, `titulo`, `texto`, `imagen`) VALUES
(1, 'Project iIpsun', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>\r\n', 'original_1.png'),
(2, 'Project iIpsun', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>\r\n', 'original_2.png'),
(3, 'Project iIpsun', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>\r\n', 'original_3.png'),
(4, 'Project iIpsun', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>\r\n', 'original_4.jpg'),
(5, 'Project iIpsun', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>\r\n', 'original_5.jpg'),
(6, 'Project iIpsun', '<p>asdf asdf adsf asdf adsf adf ad fadf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf asdf asd asdf asd asd fasdf asd asdf&nbsp;</p>\r\n', 'original_6.png'),
(7, 'Project iIpsun', '<p>asdf asdf adsf asdf adsf adf ad fadf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf asdf asd asdf asd asd fasdf asd asdf&nbsp;</p>\r\n', 'original_7.png'),
(8, 'Project iIpsun', '<p>asdf asdf adsf asdf adsf adf ad fadf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf asdf asd asdf asd asd fasdf asd asdf&nbsp;</p>\r\n', 'original_8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_mensaje` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `texto_mensaje`, `link`, `imagen_video`) VALUES
(1, 'AOA es una compañía de servicios en administración y asesoramiento integral para el manejo de flotas de vehículos, que ofrece soluciones de movilidad diseñadas para cada sector de la economía.', 'http://www.oureasyprojects.net/imaginamos/TimeLogs.aspx', 'home_1.mp4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE IF NOT EXISTS `oficinas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id`, `ciudad`) VALUES
(1, 'Bogotá'),
(2, 'Medellín'),
(3, 'Barranquilla'),
(4, 'Bucaramanga'),
(5, 'Pereira'),
(6, 'Cali'),
(7, 'Ibagué');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqr_front`
--

CREATE TABLE IF NOT EXISTS `pqr_front` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_principal` varchar(555) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_solicitud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pqr_front`
--

INSERT INTO `pqr_front` (`id`, `texto_principal`, `titulo`, `texto_descriptivo`, `imagen`, `imagen_solicitud`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare.', 'Seguimiento de PQR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare.', 'original_1.jpg', 'original2_1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqr_registro`
--

CREATE TABLE IF NOT EXISTS `pqr_registro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cedula` float DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `aseguradora` varchar(255) DEFAULT NULL,
  `tipo_de_solicitud` varchar(255) DEFAULT NULL,
  `comentarios_texto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pqr_registro`
--

INSERT INTO `pqr_registro` (`id`, `nombre`, `cedula`, `direccion`, `email`, `placa`, `aseguradora`, `tipo_de_solicitud`, `comentarios_texto`) VALUES
(1, 'prueba 1', 1022370000, 'Cr 54 n 34 56', 'thewizardofwar@hotmail.com', 'asd456', 'option1', 'option1', 'fasdf asdf ads asd df '),
(2, 'segunda prueba', 1022370000, 'Cr 54 n 34 56', 'thewizardofwar@hotmail.com', 'asd456', 'option1', 'option2', 'asdas dasd asd as d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_somos`
--

CREATE TABLE IF NOT EXISTS `quienes_somos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `quienes_somos`
--

INSERT INTO `quienes_somos` (`id`, `texto`, `imagen`, `imagen_2`) VALUES
(1, '<p>AOA es una compa&ntilde;&iacute;a fundada en el 2007 con el objetivo de ofrecer soluciones integrales de movilidad por medio de servicios de administraci&oacute;n y asesoramiento en manejo de Flotas de Veh&iacute;culos.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>La filosof&iacute;a de AOA se basa en gestionar el mantenimiento y la administraci&oacute;n de una flota de veh&iacute;culos, eliminando todas las actividades no productivas, as&iacute; como los costos operativos que conlleva la gesti&oacute;n de la misma tanto externamente como internamente.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>AOA cuenta con m&aacute;s de 700 veh&iacute;culos propios para mas de e 510 mil usuarios con el servicio de veh&iacute;culo de remplazo a nivel nacional y tiene presencia en las principales ciudades del pa&iacute;s: Bogot&aacute;, Medell&iacute;n, Cali, Bucaramanga, Barranquilla, Ibagu&eacute; y el eje Cafetero.</p>\r\n', 'original_1.jpg', 'original2_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_pqr`
--

CREATE TABLE IF NOT EXISTS `respuestas_pqr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pqr_registro_id` int(10) unsigned NOT NULL,
  `texto` text,
  PRIMARY KEY (`id`,`pqr_registro_id`),
  KEY `respuestas_pqr_FKIndex1` (`pqr_registro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `respuestas_pqr`
--

INSERT INTO `respuestas_pqr` (`id`, `pqr_registro_id`, `texto`) VALUES
(1, 1, '<p>Respuesta de prueba</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `visible_condiciones` int(10) unsigned DEFAULT NULL,
  `visible_contacto` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `texto`, `imagen`, `visible_condiciones`, `visible_contacto`) VALUES
(1, 'Vehiculo de reemplazo', '<p>AOA pone a disposici&oacute;n del asegurado un veh&iacute;culo de reemplazo por un per&iacute;odo determinado, del cual podr&aacute; disponer en el momento en que se autorice el siniestro por parte de la compa&ntilde;&iacute;a de seguros. La compa&ntilde;&iacute;a cuenta m&aacute;s de 510 mil usuarios con el servicio de veh&iacute;culo de remplazo a nivel nacional y tiene presencia en las principales ciudades del pa&iacute;s: Bogot&aacute;, Medell&iacute;n, Cali, Bucaramanga, Barranquilla, Ibagu&eacute; y el Eje Cafetero. Para prestar este servicio AOA cuenta con su propio call center, el cual se encarga de contactar a los usuarios para coordinar y gestionar la entrega y devoluci&oacute;n de los veh&iacute;culos a nivel nacional.</p>\r\n', 'original_1.jpg', 1, 1),
(2, 'DPA', '<p>AOA desarroll&oacute; un dispositivo electr&oacute;nico Driving Patterns Analysis &ndash; DPA dise&ntilde;ado para:</p>\r\n\r\n<p>Elementos de Seguridad: ubicaci&oacute;n, inmovilizaci&oacute;n remota, bot&oacute;n de p&aacute;nico.<br />\r\nReconstrucci&oacute;n de Accidentes.<br />\r\nCaptura, procesamiento y transmisi&oacute;n de par&aacute;metros de conducci&oacute;n.<br />\r\nControl de flota.</p>\r\n\r\n<p>Para esto contamos con un software especializado en l&iacute;nea para el control y el manejo de flota que le permite el monitoreo permanente de todos sus veh&iacute;culos.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>FUNCIONAMIENTO</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>En tiempo real el dispositivo captura todos los par&aacute;metros y los graba en una memoria interna.</p>\r\n\r\n<p>Cada vez que se requiera o cuando la memoria del dispositivo se llene en un 75%, el dispositivo de manera inal&aacute;mbrica a trav&eacute;s de la red GPRS descarga toda la informaci&oacute;n almacenada a una plataforma para el procesamiento de los datos.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El dispositivo enviar&aacute; se&ntilde;ales de p&aacute;nico a la plataforma en caso de accidentes, robo, SOS enviado por el conductor, exceso de velocidad preestablecido en zona rural/urbana, exceder el limite de zona geogr&aacute;fica de desplazamiento permitida, hora de desplazamiento diferente a la programada.</p>\r\n', 'original_2.jpg', 1, 1),
(3, 'Project iIpsun', '<p>sfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s s</p>\r\n', 'original_3.jpg', 1, 1),
(4, 'Project iIpsun', '<p>adsfasdfasd df asd a a d&nbsp;sfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s s</p>\r\n', 'original_4.jpg', 1, 1),
(5, 'Project iIpsun', '<p>sfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s ssfgsfdg df df sdfg dfg sdfg sdfg sdfg df sfd gdf sd gsdf s s</p>\r\n', 'original_5.jpg', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  ADD CONSTRAINT `aseguradoras_ibfk_1` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `condiciones_de_servicio`
--
ALTER TABLE `condiciones_de_servicio`
  ADD CONSTRAINT `condiciones_de_servicio_ibfk_1` FOREIGN KEY (`aseguradoras_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descripcion_oficina`
--
ALTER TABLE `descripcion_oficina`
  ADD CONSTRAINT `descripcion_oficina_ibfk_1` FOREIGN KEY (`oficinas_id`) REFERENCES `oficinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas_pqr`
--
ALTER TABLE `respuestas_pqr`
  ADD CONSTRAINT `respuestas_pqr_ibfk_1` FOREIGN KEY (`pqr_registro_id`) REFERENCES `pqr_registro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
