-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2012 at 04:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prueba2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_aliados`
--

CREATE TABLE IF NOT EXISTS `cms_aliados` (
  `aliados_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliados_titulo` varchar(80) DEFAULT NULL COMMENT 'Titulo',
  `aliados_url` varchar(250) DEFAULT NULL COMMENT 'URL Aliado',
  `aliados_image` varchar(250) DEFAULT NULL COMMENT 'Imagen',
  PRIMARY KEY (`aliados_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cms_aliados`
--

INSERT INTO `cms_aliados` (`aliados_id`, `aliados_titulo`, `aliados_url`, `aliados_image`) VALUES
(2, 'Titulo1', 'www.google.com', 'log011353996759.jpg'),
(3, 'Titulo2', 'www.google.com', 'log11353996838.jpg'),
(4, 'Titulo3', 'www.google.com', 'log21353996865.jpg'),
(5, 'Titutlo4', 'www.google.com', 'log31353996905.jpg'),
(6, 'Titulo 5', 'www.google.com', 'log41353996929.jpg'),
(7, 'Titulo6', 'www.google.com', 'log51353996985.jpg'),
(8, 'Titulo7', 'www.google.com', 'log61353997014.jpg'),
(9, 'Titulo8', 'www.google.com', 'log71353997066.jpg'),
(10, 'Titulo9', 'www.google.com', 'log11353997106.jpg'),
(11, 'Titulo10', 'www.google.com', 'log21353997143.jpg'),
(12, 'Titulo11', 'www.google.com', 'log31353997181.jpg'),
(13, 'Titulo12', 'www.google.com', 'log41353997248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cms_aliadosimgindex`
--

CREATE TABLE IF NOT EXISTS `cms_aliadosimgindex` (
  `aliadosImgIndex_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliadosImgIndex_titulo` varchar(250) DEFAULT NULL COMMENT 'Titulo Imagen Aliado',
  `aliadosImgIndex_imagen` varchar(250) NOT NULL COMMENT 'Imagen Aliado',
  `aliadosImgIndex_enlace` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`aliadosImgIndex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_aliadosimgindex`
--

INSERT INTO `cms_aliadosimgindex` (`aliadosImgIndex_id`, `aliadosImgIndex_titulo`, `aliadosImgIndex_imagen`, `aliadosImgIndex_enlace`) VALUES
(1, 'titulo 1', 'log011353995229.jpg', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms_aliadosimgindex_config`
--

CREATE TABLE IF NOT EXISTS `cms_aliadosimgindex_config` (
  `aliadosImgIndex_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliadosImgIndex_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `aliadosImgIndex_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`aliadosImgIndex_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_aliadosimgindex_config`
--

INSERT INTO `cms_aliadosimgindex_config` (`aliadosImgIndex_config_id`, `aliadosImgIndex_config_funcionality`, `aliadosImgIndex_config_date`) VALUES
(1, 1, '2012-11-26 08:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `cms_aliados_config`
--

CREATE TABLE IF NOT EXISTS `cms_aliados_config` (
  `aliados_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `aliados_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `aliados_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`aliados_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_aliados_config`
--

INSERT INTO `cms_aliados_config` (`aliados_config_id`, `aliados_config_funcionality`, `aliados_config_date`) VALUES
(1, 1, '2012-11-26 18:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `cms_banners`
--

CREATE TABLE IF NOT EXISTS `cms_banners` (
  `banners_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `banners_txt1` varchar(80) DEFAULT NULL COMMENT 'Texto 1',
  `banners_txt2` varchar(80) DEFAULT NULL COMMENT 'Texto 2',
  `banners_url` varchar(80) DEFAULT NULL COMMENT 'URL Banner',
  `banners_blank` tinyint(1) DEFAULT '0' COMMENT 'Abre en una nueva pagina',
  `banners_order` int(5) unsigned DEFAULT '0' COMMENT 'Orden',
  `banners_image` varchar(120) DEFAULT NULL COMMENT 'Imagen',
  PRIMARY KEY (`banners_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cms_banners`
--

INSERT INTO `cms_banners` (`banners_id`, `banners_txt1`, `banners_txt2`, `banners_url`, `banners_blank`, `banners_order`, `banners_image`) VALUES
(1, 'Tenemos la receta para alcanzar sus', 'sue&ntilde;os', 'foodservice.php', 0, 1, 'imgbann1353980847.png'),
(2, 'Somos sus aliados estrat&eacute;gicos en cada', 'proceso', 'soluciones.php', 0, 1, 'imgbann1353980928.png'),
(3, 'El talento humano es el activo', 'm&aacute;s grande de una compa&ntilde;ia', 'gestion_humana.php', 0, 1, 'imgbann1353981021.png'),
(4, 'Nuestra comunidad crece d&iacute;a a d&iacute;a.', '&Uacute;nete t&uacute; tambi&eacute;n', '#', 0, 1, 'imgbann1353981131.png');

-- --------------------------------------------------------

--
-- Table structure for table `cms_banners_config`
--

CREATE TABLE IF NOT EXISTS `cms_banners_config` (
  `banners_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `banners_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
  `banners_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
  PRIMARY KEY (`banners_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_banners_config`
--

INSERT INTO `cms_banners_config` (`banners_config_id`, `banners_config_funcionality`, `banners_config_date`) VALUES
(1, 1, '2012-11-22 20:50:55');

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
(1, '2012-07-25 12:10:42', 'http://localhost/topteam/cms/', 'http://apple.com', 'cms@imaginamos.com', 'imaginamos.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms_consulting`
--

CREATE TABLE IF NOT EXISTS `cms_consulting` (
  `consulting_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `consulting_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `consulting_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `consulting_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `consulting_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`consulting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_consulting`
--

INSERT INTO `cms_consulting` (`consulting_id`, `consulting_contenido`, `consulting_contenido2`, `consulting_imagenInt`, `consulting_rutavideo`) VALUES
(1, '<h1><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Consulting</font></h1><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Consulting es la empresa de Outsourcing &nbsp;y el Head Hunter de Talento Humano del Grupo Topteam.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Ofrecemos el servicio de selecci&oacute;n de personal desde los siguientes criterios:</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Consultoria en Selecci&oacute;n de Talento Humano:</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Hemos dise&ntilde;ado un servicio que se ajusta a las caracter&iacute;sticas y necesidades espec&iacute;ficas de cada uno de nuestros clientes basado en la confidencialidad, innovaci&oacute;n y selecci&oacute;n altamente calificada, que nos permite estar a la vanguardia del mercado.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Selecci&oacute;n Top:</b> Dise&ntilde;ado para la Selecci&oacute;n de Ejecutivos a trav&eacute;s de psic&oacute;logos expertos en este tipo de perfiles y procesos.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Selecci&oacute;n Standar:</b> Con la misma calidad de altos ejecutivos complementamos nuestra consultor&iacute;a en Selecci&oacute;n de Cargos Administrativos y Operativos. &nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Consultor&iacute;a en Preselecci&oacute;n:</b> Le ayudamos a optimizar sus tiempos de respuesta y el proceso de selecci&oacute;n, entreg&aacute;ndole hojas de vida que cumplen con el perfil previamente establecido.&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Consultor&iacute;a en Evaluaci&oacute;n (Assessment)</b>: Lo apoyamos en la toma de la mejor decisi&oacute;n, en una promoci&oacute;n interna o en una simple evaluaci&oacute;n de candidatos, d&aacute;ndoles recomendaciones y sugerencias destacando las capacidades del evaluado y sus &aacute;reas de mejoramiento, para que pueda tener una gu&iacute;a para el desarrollo y promoci&oacute;n dentro de la empresa.&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Nuestro proceso incluye:</b> - Levantamiento de informaci&oacute;n</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Assessment Center&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Entrevista individual y aplicaci&oacute;n de pruebas</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Verificaci&oacute;n personalizada de referencias</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Visitas Domiciliarias</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Verificaci&oacute;n de antecedentes&nbsp;</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Estudio de n&uacute;cleo familiar</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>- Entrevista de retiro</font></div>', 'logconsultingint1354032306.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Table structure for table `cms_consulting_config`
--

CREATE TABLE IF NOT EXISTS `cms_consulting_config` (
  `consulting_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `consulting_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `consulting_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`consulting_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_consulting_config`
--

INSERT INTO `cms_consulting_config` (`consulting_config_id`, `consulting_config_funcionality`, `consulting_config_date`) VALUES
(1, 1, '2012-11-26 10:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `cms_foodservice`
--

CREATE TABLE IF NOT EXISTS `cms_foodservice` (
  `foodservice_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `foodservice_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `foodservice_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `foodservice_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `foodservice_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`foodservice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_foodservice`
--

INSERT INTO `cms_foodservice` (`foodservice_id`, `foodservice_contenido`, `foodservice_contenido2`, `foodservice_imagenInt`, `foodservice_rutavideo`) VALUES
(1, '<h1><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Foodservice</font></h1><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Foodservice es la m&aacute;s importante empresa del pa&iacute;s en selecci&oacute;n y contrataci&oacute;n de personal para el sector hospitalario (Hoteles, Restaurantes, Clubes, Casinos y Bares).</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Nuestra Especializaci&oacute;n nos ha permitido tener a su disposici&oacute;n el personal m&aacute;s idoneo disponible dentro de los tiempos requeridos por nuestros clientes.</font></div>', '<div><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;>Hemos identificado 4 grandes Divisiones del Talento dentro del gremio de la Hospitalidad en las cuales enfocamos todo nuestro esfuerzo con el fin de optimizar recursos y lograr altos est&aacute;ndares en tiempos de respuesta.</span></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Cocina</b>: Director Gastron&oacute;mico, Chef Ejecutivo, Chef Internacional, Chef con especialidades, Chef de demostraciones, Jefe de Cocina, Cocineros, Auxiliares de cocina fr&iacute;a y caliente, Auxiliares de pasteler&iacute;a, Pastelero, Jefes de pasteler&iacute;a, Auxiliares de pasteler&iacute;a y chocolater&iacute;a, Parrillero, Porcionador, Steward, Patinadores, Chef de Partie, Pizzero.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Procesos</b>: Ingenieros de Alimentos, Ingenieros de Sistemas, Programadores.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Servicio</b>: Portero, Botones, Hostess, Recepcionistas, Meseros, Capit&aacute;n de Servicio, Maitre, Bartender, Auxiliares de Mesero, Pianista, Camareras, supervisor de habitaciones, meseros biling&uuml;es, Servicios generales, cajeros y personal para almacenamiento, domiciliarios.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><b>Divisi&oacute;n Administrativa</b>: Administrador de punto Sr. Y Jr., Jefe de costos, Auxiliares de costos, Auditores Sr. Y Jr., Auxiliares de recursos humanos, Contadores, Director administrativo y Financiero, Gerente de Operaciones, Gerentes y Directores de Alimentos y Bebidas, Jefe y Auxiliares de mantenimiento, Secretaria.</font></div>', 'logfoodserviceint1354033165.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Table structure for table `cms_foodservice_config`
--

CREATE TABLE IF NOT EXISTS `cms_foodservice_config` (
  `foodservice_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `foodservice_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `foodservice_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`foodservice_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_foodservice_config`
--

INSERT INTO `cms_foodservice_config` (`foodservice_config_id`, `foodservice_config_funcionality`, `foodservice_config_date`) VALUES
(1, 1, '2012-11-26 17:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `cms_gestionh`
--

CREATE TABLE IF NOT EXISTS `cms_gestionh` (
  `gestionh_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `gestionh_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `gestionh_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `gestionh_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  `gestionh_rutavideo` varchar(250) NOT NULL COMMENT 'Ruta video',
  PRIMARY KEY (`gestionh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_gestionh`
--

INSERT INTO `cms_gestionh` (`gestionh_id`, `gestionh_contenido`, `gestionh_contenido2`, `gestionh_imagenInt`, `gestionh_rutavideo`) VALUES
(1, '<h1><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Topteam Gesti&oacute;n Humana S.A. y Topteam Talentos S.A.S</font></h1><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Son dos empresas de servicios temporales legalmente constituidas y vigiladas por el Ministerio del Trabajo.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>El Talento Humano ofrecido por TOPTEAM puede ser contratado bajo modelos de N&oacute;mina Delegada en Misi&oacute;n y N&oacute;mina Delegada en Outsourcing donde el cliente ser&aacute; responsable por la administraci&oacute;n del recurso, la asignaci&oacute;n de tareas, el seguimiento y control de las actividades asignadas.</font></div>', '<div>En misi&oacute;n: Seleccionamos y contratamos personal id&oacute;neo para desempe&ntilde;arse bajo las condiciones que la ley permite en reemplazos de vacaciones, picos de producci&oacute;n y licencias de maternidad.</div><div>Outsourcing: Seleccionamos y contratamos personal id&oacute;neo para desempe&ntilde;arse seg&uacute;n la necesidad espec&iacute;fica de cada cliente, de acuerdo con la solicitud recibida.</div><div><br></div>', 'loghumanaint1354031469.jpg', 'f4K6ZxDwi34');

-- --------------------------------------------------------

--
-- Table structure for table `cms_gestionh_config`
--

CREATE TABLE IF NOT EXISTS `cms_gestionh_config` (
  `gestionh_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `gestionh_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `gestionh_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`gestionh_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_gestionh_config`
--

INSERT INTO `cms_gestionh_config` (`gestionh_config_id`, `gestionh_config_funcionality`, `gestionh_config_date`) VALUES
(1, 1, '2012-11-26 09:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `cms_headhunter`
--

CREATE TABLE IF NOT EXISTS `cms_headhunter` (
  `headhunter_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `headhunter_titulo1` text NOT NULL COMMENT 'Titulo 1',
  `headhunter_titulo2` text NOT NULL COMMENT 'Titulo 2',
  `headhunter_contenido` text NOT NULL COMMENT 'Contenido',
  `headhunter_enlace` varchar(250) NOT NULL COMMENT 'Enlace',
  `headhunter_imagen` varchar(250) NOT NULL COMMENT 'Imagen',
  PRIMARY KEY (`headhunter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms_headhunter`
--

INSERT INTO `cms_headhunter` (`headhunter_id`, `headhunter_titulo1`, `headhunter_titulo2`, `headhunter_contenido`, `headhunter_enlace`, `headhunter_imagen`) VALUES
(1, '01.', 'consulting', 'Nuestro portafolio de servicios se ajusta a las caracter&iacute;sticas y necesidades espec&iacute;ficas de cada uno de nuestros clientes.  Desde la selecci&oacute;n de cargos ejecutivos, hasta cargos administrativos y operativos a trav&eacute;s de psic&oacute;logos expertos.', 'consulting.php', 'imgdest1353988671.png'),
(2, '02.', 'foodservice', 'Somos la primera comunidad especializada en reclutamiento, selecci&oacute;n y contrataci&oacute;n de personal del sector hospitalario (Restaurantes, Hoteles, Clubes, Bares y Casinos). Hemos identificado 4 grandes Divisiones del Talento en las cuales enfocamos todo nuestro esfuerzo.', 'foodservice.php', 'imgdest21353988838.png');

-- --------------------------------------------------------

--
-- Table structure for table `cms_headhunter_config`
--

CREATE TABLE IF NOT EXISTS `cms_headhunter_config` (
  `headhunter_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `headhunter_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `headhunter_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`headhunter_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_headhunter_config`
--

INSERT INTO `cms_headhunter_config` (`headhunter_config_id`, `headhunter_config_funcionality`, `headhunter_config_date`) VALUES
(1, 1, '2012-11-23 20:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `cms_mapa`
--

CREATE TABLE IF NOT EXISTS `cms_mapa` (
  `mapa_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `mapa_enlace` text NOT NULL COMMENT 'Ruta Enlace GoogleMap',
  PRIMARY KEY (`mapa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_mapa`
--

INSERT INTO `cms_mapa` (`mapa_id`, `mapa_enlace`) VALUES
(1, '<iframe width="314" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=4.721812,-74.045132&amp;daddr=&amp;hl=es&amp;geocode=&amp;sll=4.721558,-74.045341&amp;sspn=0.001804,0.00284&amp;t=m&amp;doflg=ptk&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;ll=4.721558,-74.045341&amp;spn=0.002224,0.001679&amp;z=18&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=4.721812,-74.045132&amp;daddr=&amp;hl=es&amp;geocode=&amp;sll=4.721558,-74.045341&amp;sspn=0.001804,0.00284&amp;t=m&amp;doflg=ptk&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;ll=4.721558,-74.045341&amp;spn=0.002224,0.001679&amp;z=18" style="color:#0000FF;text-align:left"></a></small>');

-- --------------------------------------------------------

--
-- Table structure for table `cms_mapa_config`
--

CREATE TABLE IF NOT EXISTS `cms_mapa_config` (
  `mapa_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `mapa_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `mapa_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`mapa_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_mapa_config`
--

INSERT INTO `cms_mapa_config` (`mapa_config_id`, `mapa_config_funcionality`, `mapa_config_date`) VALUES
(1, 1, '2012-11-26 20:15:13');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_title`, `menu_url`, `menu_icon`) VALUES
(19, 'Noticias', 'modules/noticias/view', 'clipboard'),
(5, 'BannerIndex', 'modules/bannerIndex/view', 'pictures_folder'),
(15, 'Consulting', 'modules/consulting/view', 'clipboard'),
(16, 'Food_Service', 'modules/foodservice/view', 'clipboard'),
(10, 'HeadHunter', 'modules/headhunter/view', 'clipboard'),
(11, 'Staffing', 'modules/staffing/view', 'clipboard'),
(13, 'Nosotros', 'modules/nosotros/view', 'clipboard'),
(14, 'Gestion_Humana', 'modules/gestionHumana/view', 'clipboard'),
(17, 'Soluciones', 'modules/soluciones/view', 'clipboard'),
(18, 'Aliados', 'modules/aliados/view', 'pictures_folder'),
(20, 'GoogleMap', 'modules/mapa/view', 'satellite');

-- --------------------------------------------------------

--
-- Table structure for table `cms_news`
--

CREATE TABLE IF NOT EXISTS `cms_news` (
  `news_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_title` varchar(80) DEFAULT NULL COMMENT 'TÃ­tulo de la noticia',
  `news_resum` text NOT NULL,
  `news_article` text COMMENT 'ArtÃ­culo de la noticia',
  `news_image` varchar(120) DEFAULT NULL COMMENT 'Imagen de la noticia',
  `news_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cms_news`
--

INSERT INTO `cms_news` (`news_id`, `news_title`, `news_resum`, `news_article`, `news_image`, `news_date`) VALUES
(1, 'NOTICIA 1', '\r\n<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><div>Ut mattis mollis est, vel sagittis tortor ultrices quis. Quisque tincidunt tempus purus, a pretium urna molestie nec. Quisque eu lacus mauris, sed faucibus tellus. Vivamus ut scelerisque dui. Mauris lectus sem, viverra a pulvinar iaculis, facilisis sit amet orci. Ut adipiscing, massa ac elementum aliquam, orci nulla placerat nunc, in tempor eros sem sit amet massa. Morbi eu elit a diam rhoncus ultricies sit amet ac mauris. Nulla eget tortor purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque porttitor lobortis metus auctor viverra. Sed gravida ornare nulla pretium sagittis. Integer pretium lacinia nisl eu venenatis. Vivamus ornare blandit magna, non adipiscing nibh aliquam at. Vestibulum et metus leo, quis tincidunt felis. Praesent a quam ut lacus elementum mollis quis id nibh.</div><div><br></div><div>Aliquam pretium, leo non tincidunt vulputate, massa metus semper turpis, sit amet sagittis massa lacus eu ante. Proin vitae ornare mi. Sed auctor varius mi quis consequat. Morbi id turpis felis, vel iaculis turpis. Pellentesque vel ipsum libero, commodo vestibulum nunc. Aliquam erat volutpat. Curabitur vitae felis a metus feugiat tristique nec nec sapien. Vivamus urna ipsum, vehicula luctus molestie ac, imperdiet id ante. In sit amet orci ac libero auctor varius. Vivamus sodales semper consequat. Suspendisse pretium fermentum dui, vel fermentum lorem dictum in.</div></font></div>', 'imgnotthumb11354033917.jpg', '2012-11-27 17:31:59'),
(2, 'NOTICIA 2', '\r\n<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Ut mattis mollis est, vel sagittis tortor ultrices quis. Quisque tincidunt tempus purus, a pretium urna molestie nec. Quisque eu lacus mauris, sed faucibus tellus. Vivamus ut scelerisque dui. Mauris lectus sem, viverra a pulvinar iaculis, facilisis sit amet orci. Ut adipiscing, massa ac elementum aliquam, orci nulla placerat nunc, in tempor eros sem sit amet massa. Morbi eu elit a diam rhoncus ultricies sit amet ac mauris. Nulla eget tortor purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque porttitor lobortis metus auctor viverra. Sed gravida ornare nulla pretium sagittis. Integer pretium lacinia nisl eu venenatis. Vivamus ornare blandit magna, non adipiscing nibh aliquam at. Vestibulum et metus leo, quis tincidunt felis. Praesent a quam ut lacus elementum mollis quis id nibh.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Aliquam pretium, leo non tincidunt vulputate, massa metus semper turpis, sit amet sagittis massa lacus eu ante. Proin vitae ornare mi. Sed auctor varius mi quis consequat. Morbi id turpis felis, vel iaculis turpis. Pellentesque vel ipsum libero, commodo vestibulum nunc. Aliquam erat volutpat. Curabitur vitae felis a metus feugiat tristique nec nec sapien. Vivamus urna ipsum, vehicula luctus molestie ac, imperdiet id ante. In sit amet orci ac libero auctor varius. Vivamus sodales semper consequat. Suspendisse pretium fermentum dui, vel fermentum lorem dictum in.</font></div>', 'imgnotthumb21354034321.jpg', '2012-11-27 17:38:43'),
(3, 'NOTICIA 3', '\r\n<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Ut mattis mollis est, vel sagittis tortor ultrices quis. Quisque tincidunt tempus purus, a pretium urna molestie nec. Quisque eu lacus mauris, sed faucibus tellus. Vivamus ut scelerisque dui. Mauris lectus sem, viverra a pulvinar iaculis, facilisis sit amet orci. Ut adipiscing, massa ac elementum aliquam, orci nulla placerat nunc, in tempor eros sem sit amet massa. Morbi eu elit a diam rhoncus ultricies sit amet ac mauris. Nulla eget tortor purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque porttitor lobortis metus auctor viverra. Sed gravida ornare nulla pretium sagittis. Integer pretium lacinia nisl eu venenatis. Vivamus ornare blandit magna, non adipiscing nibh aliquam at. Vestibulum et metus leo, quis tincidunt felis. Praesent a quam ut lacus elementum mollis quis id nibh.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Aliquam pretium, leo non tincidunt vulputate, massa metus semper turpis, sit amet sagittis massa lacus eu ante. Proin vitae ornare mi. Sed auctor varius mi quis consequat. Morbi id turpis felis, vel iaculis turpis. Pellentesque vel ipsum libero, commodo vestibulum nunc. Aliquam erat volutpat. Curabitur vitae felis a metus feugiat tristique nec nec sapien. Vivamus urna ipsum, vehicula luctus molestie ac, imperdiet id ante. In sit amet orci ac libero auctor varius. Vivamus sodales semper consequat. Suspendisse pretium fermentum dui, vel fermentum lorem dictum in.</font></div>', 'imgnotthumb31354034366.jpg', '2012-11-27 17:39:28'),
(4, 'NOTICIA 4', '\r\n<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Etiam varius rutrum quam ut volutpat Duis tempus dapibus nisl, id lobortis justo feugiat in. Vivamus vestibulum tincidunt ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam posuere consequat ullamcorper. Suspendisse potenti.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Ut mattis mollis est, vel sagittis tortor ultrices quis. Quisque tincidunt tempus purus, a pretium urna molestie nec. Quisque eu lacus mauris, sed faucibus tellus. Vivamus ut scelerisque dui. Mauris lectus sem, viverra a pulvinar iaculis, facilisis sit amet orci. Ut adipiscing, massa ac elementum aliquam, orci nulla placerat nunc, in tempor eros sem sit amet massa. Morbi eu elit a diam rhoncus ultricies sit amet ac mauris. Nulla eget tortor purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque porttitor lobortis metus auctor viverra. Sed gravida ornare nulla pretium sagittis. Integer pretium lacinia nisl eu venenatis. Vivamus ornare blandit magna, non adipiscing nibh aliquam at. Vestibulum et metus leo, quis tincidunt felis. Praesent a quam ut lacus elementum mollis quis id nibh.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Aliquam pretium, leo non tincidunt vulputate, massa metus semper turpis, sit amet sagittis massa lacus eu ante. Proin vitae ornare mi. Sed auctor varius mi quis consequat. Morbi id turpis felis, vel iaculis turpis. Pellentesque vel ipsum libero, commodo vestibulum nunc. Aliquam erat volutpat. Curabitur vitae felis a metus feugiat tristique nec nec sapien. Vivamus urna ipsum, vehicula luctus molestie ac, imperdiet id ante. In sit amet orci ac libero auctor varius. Vivamus sodales semper consequat. Suspendisse pretium fermentum dui, vel fermentum lorem dictum in.</font></div>', 'imgnotthumb11354034414.jpg', '2012-11-27 17:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `cms_news_config`
--

CREATE TABLE IF NOT EXISTS `cms_news_config` (
  `news_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `news_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `news_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`news_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_news_config`
--

INSERT INTO `cms_news_config` (`news_config_id`, `news_config_funcionality`, `news_config_date`) VALUES
(1, 2, '2012-11-26 19:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `cms_nosotros`
--

CREATE TABLE IF NOT EXISTS `cms_nosotros` (
  `nosotros_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `nosotros_mensaje` varchar(250) NOT NULL COMMENT 'mensaje',
  `nosotros_contenido` text NOT NULL COMMENT 'Contenido Sec. Int.',
  `nosotros_contenido2` text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
  `nosotros_imagenInt` varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
  PRIMARY KEY (`nosotros_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_nosotros`
--

INSERT INTO `cms_nosotros` (`nosotros_id`, `nosotros_mensaje`, `nosotros_contenido`, `nosotros_contenido2`, `nosotros_imagenInt`) VALUES
(1, '&#34;Conf&iacute;a en las personas y te ser&aacute;n fieles, tr&aacute;talos bien, y ellos se mostrar&aacute;n grandes&#34;. Ralph Emerson', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Somos un grupo empresarial dedicado a la Consultor&iacute;a y Asesor&iacute;a en todo lo relacionado al Talento Humano. Ofrecemos Unidades de Negocio especializadas que nos permiten brindar a nuestros clientes soluciones a la medida en las &aacute;reas de:</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><ol><li><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;>Selecci&oacute;n de personal &#8220;Head Hunter&#8221;</span></li><li><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;>Contrataci&oacute;n de Personal Temporal &#8220;Staffing&#8221;</span></li><li><span style=&#34;font-family: Arial, Verdana; font-size: small;&#34;>Selecci&oacute;n y contrataci&oacute;n especializada para Hoteles,Restaurantes y Clubes</span></li></ol></div><br><br>\r\n<br> <div id=&#34;sepclear&#34;></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Contamos con un experimentado equipo de profesionales en diferentes disciplinas que nos convierten en una organizaci&oacute;n &aacute;gil, din&aacute;mica y s&oacute;lida, acorde con las necesidades de las empresas actuales.</font></div><div style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><br></div>', '<div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>Un excelente grupo de Administradores de Empresas, Abogados, Trabajadoras Sociales y Psic&oacute;logas con especializaciones en Recurso Humano est&aacute;n preparados para asesorarlo en la b&uacute;squeda de la mejor soluci&oacute;n para su empresa.</font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;><br></font></div><div><font face=&#34;Arial, Verdana&#34; size=&#34;2&#34;>La Pol&iacute;tica de Calidad de TOPTEAM GROUP&reg; est&aacute; sustentada en satisfacer a nuestros clientes mediante un mejoramiento continuo, para lo cual se acredita la aplicaci&oacute;n de un Sistema de Gesti&oacute;n de Calidad con base en la honestidad, la &eacute;tica, la puntualidad, el desarrollo del Talento Humano y la competitividad en el mercado, buscando siempre la excelencia, garantizando as&iacute; el punto m&aacute;ximo en calidad.</font></div>', 'imgnosotros1354018036.png');

-- --------------------------------------------------------

--
-- Table structure for table `cms_nosotros_config`
--

CREATE TABLE IF NOT EXISTS `cms_nosotros_config` (
  `nosotros_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `nosotros_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `nosotros_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`nosotros_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_nosotros_config`
--

INSERT INTO `cms_nosotros_config` (`nosotros_config_id`, `nosotros_config_funcionality`, `nosotros_config_date`) VALUES
(1, 1, '2012-11-26 08:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `cms_soluciones`
--

CREATE TABLE IF NOT EXISTS `cms_soluciones` (
  `soluciones_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `soluciones_mensaje` varchar(250) NOT NULL COMMENT 'Mensaje',
  `soluciones_titulo1` varchar(250) NOT NULL COMMENT 'Titulo Foodservice',
  `soluciones_contenido1` text NOT NULL COMMENT 'Contenido Foodservice',
  `soluciones_enlace1` varchar(250) NOT NULL COMMENT 'Enlace Foodservice',
  `soluciones_imagenInt1` varchar(250) NOT NULL COMMENT 'Imagen Sec. Foodservice',
  `soluciones_titulo2` varchar(250) NOT NULL COMMENT 'Titulo Consulting',
  `soluciones_contenido2` text NOT NULL COMMENT 'Contenido Consulting',
  `soluciones_enlace2` varchar(250) NOT NULL COMMENT 'Enlace Consulting',
  `soluciones_imagenInt2` varchar(250) NOT NULL COMMENT 'Imagen Sec. Consulting',
  `soluciones_titulo3` varchar(250) NOT NULL COMMENT 'Titulo GestionH',
  `soluciones_contenido3` text NOT NULL COMMENT 'Contenido GestionH',
  `soluciones_enlace3` varchar(250) NOT NULL COMMENT 'Enlace GestionH',
  `soluciones_imagenInt3` varchar(250) NOT NULL COMMENT 'Imagen Sec. GestionH',
  PRIMARY KEY (`soluciones_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_soluciones`
--

INSERT INTO `cms_soluciones` (`soluciones_id`, `soluciones_mensaje`, `soluciones_titulo1`, `soluciones_contenido1`, `soluciones_enlace1`, `soluciones_imagenInt1`, `soluciones_titulo2`, `soluciones_contenido2`, `soluciones_enlace2`, `soluciones_imagenInt2`, `soluciones_titulo3`, `soluciones_contenido3`, `soluciones_enlace3`, `soluciones_imagenInt3`) VALUES
(1, '&#8220;Muchos creen que el talento es cuesti&oacute;n de suerte, pero pocos saben que la suerte es cuesti&oacute;n de talento&#8221;.', 'FOODSERVICE', '<p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Topteam Foodservice es la m&aacute;s importante empresa del pa&iacute;s en selecci&oacute;n y contrataci&oacute;n de personal para el sector hospitalario (Hoteles, Restaurantes, Clubes, Casinos y Bares).</p><p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Nuestra Especializaci&oacute;n nos ha permitido tener a su disposici&oacute;n el personal m&aacute;s idoneo disponible dentro de los tiempos requeridos por nuestros clientes.</p>', 'foodservice.php', 'logfoodservice1354043008.jpg', 'CONSULTING', '<span style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Topteam Consulting es la empresa de Outsourcing y el Head Hunter de Talento Humano del Grupo Topteam.</span>', 'consulting.php', 'logconsulting1354043514.jpg', 'GESTI&Oacute;N HUMANA Y TALENTOS', '<p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>Topteam Gesti&oacute;n Humana S.A. y Topteam Talentos S.A.S son dos empresas de servicios temporales legalmente constituidas y vigiladas por el Ministerio del Trabajo.</p><p style=&#34;color: rgb(130, 130, 130); font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(247, 247, 248);&#34;>El Talento Humano ofrecido por TOPTEAM puede ser contratado bajo modelos de N&oacute;mina Delegada en Misi&oacute;n y N&oacute;mina Delegada en Outsourcing donde el cliente ser&aacute; responsable por la administraci&oacute;n del recurso, la asignaci&oacute;n de tareas, el seguimiento y control de las actividades asignadas.</p>', 'gestion_humana.php', 'loghumana1354043620.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cms_soluciones_config`
--

CREATE TABLE IF NOT EXISTS `cms_soluciones_config` (
  `soluciones_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `soluciones_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `soluciones_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`soluciones_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_soluciones_config`
--

INSERT INTO `cms_soluciones_config` (`soluciones_config_id`, `soluciones_config_funcionality`, `soluciones_config_date`) VALUES
(1, 1, '2012-11-26 18:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `cms_staffing`
--

CREATE TABLE IF NOT EXISTS `cms_staffing` (
  `staffing_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `staffing_contenido` text NOT NULL COMMENT 'Contenido',
  `staffing_enlace` varchar(250) NOT NULL COMMENT 'Enlace',
  `staffing_imagen` varchar(250) NOT NULL COMMENT 'Imagen',
  PRIMARY KEY (`staffing_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms_staffing`
--

INSERT INTO `cms_staffing` (`staffing_id`, `staffing_contenido`, `staffing_enlace`, `staffing_imagen`) VALUES
(1, 'Suministramos a nuestros clientes el talento id&oacute;neo, af&iacute;n con la cultura organizacional de cada cliente, dentro de los tiempos establecidos, con la mayor confidencialidad y confiabilidad.', 'gestion_humana.php', 'btgestion1353992833.jpg'),
(2, 'Carrera 18 No. 137 - 11 // PBX: (57-1) 625 09 00 // FAX: (57-1) 625 09 00 Ext. 102\r\nEmail: info@topteamgroup.com - www.topteamgroup.com', 'foodservice.php', 'btfoodservice1353992688.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cms_staffing_config`
--

CREATE TABLE IF NOT EXISTS `cms_staffing_config` (
  `staffing_config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `staffing_config_funcionality` int(1) NOT NULL COMMENT 'Funcionalidad del mÃ³dulo',
  `staffing_config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalaciÃ³n mÃ³dulo',
  PRIMARY KEY (`staffing_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_staffing_config`
--

INSERT INTO `cms_staffing_config` (`staffing_config_id`, `staffing_config_funcionality`, `staffing_config_date`) VALUES
(1, 1, '2012-11-26 03:37:23');

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
(1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
