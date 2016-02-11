-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2013 a las 09:25:18
-- Versión del servidor: 5.5.31-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuariodg_acerarq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ano`
--

CREATE TABLE IF NOT EXISTS `ano` (
  `idano` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(200) NOT NULL,
  PRIMARY KEY (`idano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `ano`
--

INSERT INTO `ano` (`idano`, `ano`) VALUES
(1, '1990'),
(2, '1991'),
(3, '1992'),
(4, '1993'),
(5, '1994'),
(6, '1995'),
(7, '1996'),
(8, '1997'),
(9, '1998'),
(10, '1999'),
(11, '2000'),
(12, '2001'),
(13, '2002'),
(14, '2003'),
(15, '2004'),
(16, '2005'),
(17, '2006'),
(18, '2007'),
(19, '2008'),
(20, '2009'),
(21, '2010'),
(22, '2011'),
(23, '2012'),
(24, '2013'),
(25, '2014'),
(26, '2015'),
(27, '2016'),
(28, '2017'),
(29, '2018'),
(30, '2019'),
(31, '2020'),
(32, '2021'),
(33, '2022'),
(34, '2023'),
(35, '2024'),
(36, '2025'),
(37, '2026'),
(38, '2027'),
(39, '2028'),
(40, '2029'),
(41, '2030'),
(42, '2031'),
(43, '2032'),
(44, '2033'),
(45, '2034'),
(46, '2035'),
(47, '2036'),
(48, '2037'),
(49, '2038'),
(50, '2039'),
(51, '2040'),
(52, '2041'),
(53, '2042'),
(54, '2043'),
(55, '2044'),
(56, '2045'),
(57, '2046'),
(58, '2047'),
(59, '2048'),
(60, '2049'),
(61, '2050');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`idbanner`, `titulo`, `imagen`) VALUES
(1, '&#39;Equilibrio para su proyecto&#39; &quot;', 'banner_1.png'),
(9, 'Sentido ecológico  ', 'banner_2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_dos`
--

CREATE TABLE IF NOT EXISTS `banner_dos` (
  `idbanner_dos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner_dos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `banner_dos`
--

INSERT INTO `banner_dos` (`idbanner_dos`, `titulo`, `imagen`) VALUES
(8, 'Fácil y rápido montaje. ', 'banner_8.png'),
(9, 'Módulos fácilmente transportables.  ', 'banner_9.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_sirius`
--

CREATE TABLE IF NOT EXISTS `banner_sirius` (
  `idbanner_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner_sirius`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `banner_sirius`
--

INSERT INTO `banner_sirius` (`idbanner_sirius`, `titulo`, `subtitulo`, `imagen`) VALUES
(1, '&quot;Fabricación&quot;', 'directamente en nuestras instalaciones.', 'banner_1.png'),
(5, 'Prueba', 'Prueba', 'banner_5.png'),
(6, 'Prueba', 'Prueba', 'banner_6.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienvenida`
--

CREATE TABLE IF NOT EXISTS `bienvenida` (
  `idbienvenida` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`idbienvenida`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `bienvenida`
--

INSERT INTO `bienvenida` (`idbienvenida`, `titulo`, `texto`, `link`) VALUES
(1, 'Acerarq SAS', '      Una empresa colombiana que piensa en brindarles a sus clientes una alternativa moderna y de fácil acceso para adquirir sus productos metalmecánicos realice su orden en línea y sea participe de la tecnología y evolución de sus herramientas de corte.', 'http://repositorio.imaginamos.com/DG/acerarq/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienvenida_sirius`
--

CREATE TABLE IF NOT EXISTS `bienvenida_sirius` (
  `idbienvenida_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idbienvenida_sirius`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `bienvenida_sirius`
--

INSERT INTO `bienvenida_sirius` (`idbienvenida_sirius`, `titulo`, `texto`) VALUES
(1, 'Sirius', ' Ofrecemos un aliado estratégico para operaciones logísticas, exploraciones mineras y de hidrocarburos, atención de emergencias. Sirius es un puente modular en acero diseñado y fabricado en Colombia bajo las más estrictas normas técnicas y de calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_sirius`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_sirius` (
  `idcaracteristicas_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idcaracteristicas_sirius`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `caracteristicas_sirius`
--

INSERT INTO `caracteristicas_sirius` (`idcaracteristicas_sirius`, `texto`) VALUES
(1, 'Diseño modular con piezas prefabricadas e intercambiables1'),
(2, 'Acero ASTM 572 /A50'),
(3, 'Proceso de soldadura normalizada y certificada'),
(4, 'Fácil reemplazo de uniones apernadas'),
(5, 'Protección anticorrosiva con pintura Epóxica especial para el trópico'),
(6, 'Disponibilidad de acabado en diferentes colores'),
(7, 'Disponibilidad de tableros de piso en distintos acabados'),
(8, 'Elementos no estructurales, de protección y señalización en materiales reciclados'),
(10, 'Contribuye con la Responsabilidad Social Empresarial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_obras`
--

CREATE TABLE IF NOT EXISTS `categoria_obras` (
  `idcategoria_obras` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`idcategoria_obras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `categoria_obras`
--

INSERT INTO `categoria_obras` (`idcategoria_obras`, `titulo`) VALUES
(1, 'Titulo'),
(2, 'Interventorias'),
(3, 'Consultorias'),
(4, 'Patologias'),
(5, 'Diseño y Calculo Estructural'),
(6, 'Arquitectura'),
(7, 'Apoyo Logistico');

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
(1, '2012-07-25 12:10:42', 'http://repositorio.imaginamos.com.co/DG/acerarq/cms/', 'http://repositorio.imaginamos.com.co/DG/acerarq/', 'cms@imaginamos.com', 'imaginamos.com');

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
(2, 'Quienes Somos', 'modules/quienes/view', 'group'),
(3, 'Sirius', 'modules/sirius/view', 'diary'),
(4, 'Proyectos', 'modules/proyectos/view', 'clipboard'),
(5, 'Servicios', 'modules/servicios/view', 'checkmark'),
(6, 'Descargables', 'modules/descargables/view', 'pictures_folder'),
(7, 'Contacto', 'modules/contacto/view', 'mail_open');

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
(1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono_uno` varchar(100) NOT NULL,
  `telefono_dos` varchar(100) NOT NULL,
  `telefono_tres` varchar(100) NOT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idcontacto`, `direccion`, `email`, `ciudad`, `telefono_uno`, `telefono_dos`, `telefono_tres`) VALUES
(1, 'Calle 198 No. 22-62', 'proyecto@sacerarq.com', 'Bogotá - Colombia', '+571 672 7404', '672 3554', '310 788 4368');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_des`
--

CREATE TABLE IF NOT EXISTS `contacto_des` (
  `idcontacto_des` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `mapa` text NOT NULL,
  PRIMARY KEY (`idcontacto_des`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto_des`
--

INSERT INTO `contacto_des` (`idcontacto_des`, `titulo`, `texto`, `mapa`) VALUES
(1, 'Contacto', '    Para cotizaciones o consultas, por favor complete este formulario:', '<iframe width="368" height="378" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Colombia+norte&amp;sll=40.396764,-3.713379&amp;sspn=9.483886,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Norte,+Comuna+3,+Santa+Marta,+Magdalena,+Colombia&amp;t=m&amp;ll=11.248366,-74.208355&amp;spn=0.031821,0.0315&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargables`
--

CREATE TABLE IF NOT EXISTS `descargables` (
  `iddescargables` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `archivo` text NOT NULL,
  PRIMARY KEY (`iddescargables`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `descargables`
--

INSERT INTO `descargables` (`iddescargables`, `titulo`, `texto`, `imagen`, `archivo`) VALUES
(13, 'Pesos y dimensiones', 'Pesos y dimensiones de ángulos de acero', 'descargables_13.jpg', 'Ángulos en Acero.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

CREATE TABLE IF NOT EXISTS `mes` (
  `idmes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idmes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `mes`
--

INSERT INTO `mes` (`idmes`, `nombre`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `idnewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`idnewsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`idnewsletter`, `nombre`, `email`) VALUES
(1, 'asdfg', 'd@yo.com'),
(2, 'Luis Mejia', 'luis.mejia@imaginamos.com.co'),
(3, '1234', 'eee@123.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `idobras` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria_obras` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idobras`),
  KEY `fk_obras_categoria_obras1_idx` (`idcategoria_obras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`idobras`, `idcategoria_obras`, `titulo`, `texto`) VALUES
(1, 1, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(2, 2, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(3, 3, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(4, 4, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(5, 5, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(6, 6, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>'),
(7, 7, 'Obras civiles', '<ul class=&quot;list-destacado&quot;>\r\n<li>lista 1</li>\r\n<li>lista 2\r\n<ul class=&quot;sublist-destacado&quot;>\r\n<li>lista 2.1</li>\r\n</ul>\r\n</li>\r\n<li>lista 3</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `idproyectos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `proyecto` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `uso` varchar(100) NOT NULL,
  `area` decimal(6,2) NOT NULL,
  `actividades` text NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `ano_ini` int(11) NOT NULL,
  `mes_ini` int(11) NOT NULL,
  `ano_fin` int(11) NOT NULL,
  `mes_fin` int(11) NOT NULL,
  PRIMARY KEY (`idproyectos`),
  KEY `fk_proyectos_ano1_idx` (`ano_ini`),
  KEY `fk_proyectos_ano2_idx` (`ano_fin`),
  KEY `fk_proyectos_mes1_idx` (`mes_fin`),
  KEY `fk_proyectos_mes2_idx` (`mes_ini`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idproyectos`, `titulo`, `proyecto`, `lugar`, `uso`, `area`, `actividades`, `cliente`, `ano_ini`, `mes_ini`, `ano_fin`, `mes_fin`) VALUES
(1, 'ghjk', 'fghj', 'fghj', 'ertyui """""', 2.51, 't86y97uo', 'r67t8yihk', 32, 4, 2, 2),
(5, 'ghjk', 'fghj', 'fghj', 'ertyui """""', 2.51, 't86y97uo', 'r67t8yihk', 32, 4, 2, 2),
(6, 'ghjk', 'fghj', 'fghj', 'ertyui """""', 2.51, 't86y97uo', 'r67t8yihk', 32, 4, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_des`
--

CREATE TABLE IF NOT EXISTS `quienes_des` (
  `idquienes_des` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idquienes_des`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `quienes_des`
--

INSERT INTO `quienes_des` (`idquienes_des`, `titulo`, `descripcion`, `texto`, `imagen`) VALUES
(1, 'Quienes Somos', 'Acerarq S.A.S. es una organización con una experiencia de más de 25 años en el sector de la construcción y desarrollo de proyectos de obras civiles, así como en el diseño, montaje y fabricación de piezas estructurales.\r\n\r\n\r\nNuestro equipo de trabajo y capacidad instalada con nuestro propio taller, nos permiten ser un socio estratégico confiable en el desarrollo de sus proyectos, atendiendo oportunamente y con alta calidad sus necesidades en infraestructura.\r\n\r\nNuestro espectro de servicios abarca desde la fabricación de piezas estructurales en acero, hasta el desarrollo integral, diseño y construcción de puentes vehiculares, peatonales y en estructuras en acero para edificaciones institucionales, comerciales y residenciales.\r\n\r\n', '<h1>Misi&oacute;n</h1>\r\n<p>Dise&ntilde;ar, desarrollar, fabricar e implementar soluciones integrales en construcciones civiles a trav&eacute;s de una ingenier&iacute;a innovadora, eficiente y amigable con el medio ambiente.</p>\r\n<h1>Visi&oacute;n</h1>\r\n<p>Ofrecer ingenier&iacute;a de vanguardia excediendo las expectativas de nuestros clientes a trav&eacute;s de la excelencia y la confianza.</p>', 'quienes_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_obras`
--

CREATE TABLE IF NOT EXISTS `servicios_obras` (
  `idservicios_obras` int(11) NOT NULL AUTO_INCREMENT,
  `idsubcategoria_obras` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idservicios_obras`),
  KEY `fk_servicios_obras_subcategoria_obras1_idx` (`idsubcategoria_obras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `servicios_obras`
--

INSERT INTO `servicios_obras` (`idservicios_obras`, `idsubcategoria_obras`, `titulo`, `texto`) VALUES
(1, 1, 'detalle123', 'texto'),
(2, 2, 'Detalle Luis ', 'Loerm Ipsum Dolor Sit Amet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sirius_des`
--

CREATE TABLE IF NOT EXISTS `sirius_des` (
  `idsirius_des` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idsirius_des`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sirius_des`
--

INSERT INTO `sirius_des` (`idsirius_des`, `texto`) VALUES
(1, 'A través de un proceso de investigación y diseño hemos desarrollado un puente modular en acero que permite satisfacer las necesidades logísticas y de comunicación vial, utilizando tecnología, materiales y mano de obra 100% nacional.\r\n\r\nSirius está diseñado bajo los más estrictos parámetros de la norma AASHTO LRFD, bridge design specifications 6th edition y el Código Colombiano de Diseño Sísmico de Puentes. \r\n\r\nNuestros procesos de fabricación están sometidos a los más altos estándares de calidad a fin de asegurar un producto que plenamente satisface los requerimientos de nuestros clientes.\r\n\r\nLa calidad de los materiales utilizados como acero A-50, recubrimientos epóxicos de alta especificación, soldaduras certificadas, sistemas de corte y perforación de piezas con control numérico, aunado a la experiencia y capacidad de nuestro equipo de trabajo, garantizan un producto final que permite cortos tiempos de fabricación y montaje, facilitando que las operaciones logísticas y la comunicación entre comunidades sea posible prontamente y con total seguridad.\r\n\r\nSirius a través de un versátil diseño modular y alta tecnología, es un aliado estratégico en la implementación de operaciones logísticas en zonas de exploración minera e hidrocarburos, proceso de reparación de infraestructura vial, atención de emergencias, representando desarrollo en movimiento para su empresa y la comunidad.\r\nBajo la supervisión de nuestros expertos, su montaje y apertura al tráfico se realiza en pocas horas, utilizando piezas prefabricadas bajo los más altos estándares de calidad.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria_obras`
--

CREATE TABLE IF NOT EXISTS `subcategoria_obras` (
  `idsubcategoria_obras` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idsubcategoria_obras`),
  KEY `fk_subcategoria_obras_categoria_obras1_idx` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `subcategoria_obras`
--

INSERT INTO `subcategoria_obras` (`idsubcategoria_obras`, `idcategoria`, `titulo`, `texto`) VALUES
(1, 1, 'titulo servicio', 'texto ser'),
(2, 1, 'Luis Prueba 1', 'Lorem Ipsum '),
(3, 1, 'Luis Prueba 2', '!@#$%^&*()_+-={}|:&quot;<>?[];&#39;./'),
(4, 1, 'Luis Prueba 3', 'Lorem Ipsum'),
(5, 1, 'Luis Prueba 4', 'Lorem Ipsum'),
(6, 1, 'Luis Prueba 5', 'Lorem Ipsum'),
(7, 1, 'Luis Prueba 6', 'Lorem Ipsum'),
(8, 1, 'Luis Prueba 7', 'Lorem Ipsum'),
(9, 1, 'Luis Prueba 8', 'Lorem Ipsum'),
(10, 1, 'Luis Prueba 9', 'Lorem Ipsum'),
(11, 1, 'Luis Prueba 10', 'Lorem Ipsum'),
(12, 1, 'Luis Prueba 12', 'Lorem Ipsum'),
(13, 1, 'Luis Prueba 13', 'Lorem Ipsum'),
(14, 1, 'Luis Prueba 14', 'Lorem Ipsum'),
(15, 1, 'Luis Prueba 15', 'Lorem Ipsum'),
(16, 1, 'Luis Prueba 16', 'Lorem Ipsum'),
(17, 1, 'Luis Prueba 17', 'Lorem Ipsum'),
(18, 1, 'Luis Prueba 18', 'Lorem Ipsum'),
(19, 1, 'Luis Prueba 19', 'Lorem Ipsum'),
(20, 1, 'Luis Prueba 20', 'Lorem Ipsum'),
(21, 1, 'Luis Prueba 21', 'Lorem Ipsum'),
(22, 1, 'Luis Prueba 22', 'Lorem Ipsum'),
(23, 1, 'Luis Prueba 23', 'Lorem Ipsum'),
(24, 1, 'Luis Prueba 24', 'Lorem Ipsum'),
(25, 1, 'Luis Prueba 25', 'Lorem Ipsum'),
(26, 1, 'Luis Prueba 26', 'Lorem Ipsum'),
(27, 1, 'Luis Prueba 27', 'Lorem Ipsum'),
(28, 1, 'Luis Prueba 28', 'Lorem Ipsum'),
(29, 1, 'Luis Prueba 29', 'Lorem Ipsum'),
(30, 1, 'Luis Prueba 30', 'Lorem Ipsum'),
(31, 1, 'Luis Prueba 31', 'Lorem Ipsum'),
(32, 1, 'Luis Prueba 32', 'Lorem Ipsum'),
(33, 1, 'Luis Prueba 33', 'Lorem Ipsum'),
(34, 1, 'Luis Prueba 34', 'Lorem Ipsum'),
(35, 1, 'Luis Prueba 35', 'Lorem Ipsum'),
(36, 1, 'Luis Prueba 36', 'Lorem Ipsum'),
(37, 1, 'Luis Prueba 37', 'Lorem Ipsum'),
(38, 1, 'Luis Prueba 38', 'Lorem Ipsum'),
(39, 1, 'Luis Prueba 39', 'Lorem Ipsum'),
(40, 1, 'Luis Prueba 40', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE IF NOT EXISTS `valores` (
  `idvalores` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idvalores`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`idvalores`, `titulo`, `texto`) VALUES
(1, 'Ética', '    Desarrollamos e implementamos políticas y procedimientos que reflejen los más altos estándares de calidad e integridad corporativa. jajaja jajaj '),
(2, 'Innovación', 'Desarrollamos soluciones prácticas y novedosas para facilitar el éxito de los proyectos civiles de nuestros clientes'),
(3, 'Mejores prácticas', 'Aplicamos estándares de mejores prácticas a todas nuestras actividades.'),
(4, 'Respeto', 'Respetamos las normas aplicables que rigen nuestras operaciones, así como los derechos e integridad de nuestros empleados, clientes y asociados en el desarrollo de nuestras actividades.\r\n'),
(5, 'Profesionalismo', '  Adoptamos un enfoque profesional al efectuar operaciones y negocios para y de parte de Acerarq. \r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventajas_sirius`
--

CREATE TABLE IF NOT EXISTS `ventajas_sirius` (
  `idventajas_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idventajas_sirius`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `ventajas_sirius`
--

INSERT INTO `ventajas_sirius` (`idventajas_sirius`, `texto`) VALUES
(13, '•	Disponibilidad a corto plazo'),
(14, 'Tecnología con componentes estandarizados'),
(15, 'Solución efectiva para facilitar operaciones logísticas'),
(16, 'Montaje y desmonte en pocas horas'),
(17, 'Capacidad de carga de 72 toneladas para luces hasta 24 mts'),
(18, 'Solución efectiva para facilitar operaciones logísticas'),
(19, 'Cero impacto ambiental'),
(20, 'Diseño modular flexible');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obras`
--
ALTER TABLE `obras`
  ADD CONSTRAINT `fk_obras_categoria_obras1` FOREIGN KEY (`idcategoria_obras`) REFERENCES `categoria_obras` (`idcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_proyectos_ano1` FOREIGN KEY (`ano_ini`) REFERENCES `ano` (`idano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_ano2` FOREIGN KEY (`ano_fin`) REFERENCES `ano` (`idano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_mes1` FOREIGN KEY (`mes_fin`) REFERENCES `mes` (`idmes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_mes2` FOREIGN KEY (`mes_ini`) REFERENCES `mes` (`idmes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios_obras`
--
ALTER TABLE `servicios_obras`
  ADD CONSTRAINT `fk_servicios_obras_subcategoria_obras1` FOREIGN KEY (`idsubcategoria_obras`) REFERENCES `subcategoria_obras` (`idsubcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategoria_obras`
--
ALTER TABLE `subcategoria_obras`
  ADD CONSTRAINT `fk_subcategoria_obras_categoria_obras1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria_obras` (`idcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
