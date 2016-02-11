-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2012 a las 18:51:13
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `salde_intecplast`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'f79dd2af5dc6bb8f5e79945c09b704ac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `articulo_id` int(5) NOT NULL AUTO_INCREMENT,
  `articulo_titulo_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `articulo_descripcion_e` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `articulo_imagen_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `articulo_titulo_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `articulo_descripcion_i` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `articulo_imagen_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  PRIMARY KEY (`articulo_id`),
  KEY `seccion_id` (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`articulo_id`, `articulo_titulo_e`, `articulo_descripcion_e`, `articulo_imagen_e`, `articulo_titulo_i`, `articulo_descripcion_i`, `articulo_imagen_i`, `seccion_id`) VALUES
(1, 'Nuestra Historia', 'Espanol..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.', '/img/35018001.jpg', 'Our History', 'Ingles..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.', '/img/35018001.jpg', 1),
(2, 'Sistema de Calidad', 'Espanol..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien.', '/img/35018002.jpg', 'Quality System', 'Ingles..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien.', '/img/35018002.jpg', 1),
(3, 'Instalaciones', 'Espanol..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.', '/img/35018003.jpg', 'Offices', 'Ingles..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.', '/img/35018003.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE IF NOT EXISTS `atributos` (
  `atributo_id` int(5) NOT NULL AUTO_INCREMENT,
  `atributo_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `atributo_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`atributo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `atributos`
--

INSERT INTO `atributos` (`atributo_id`, `atributo_nombre_e`, `atributo_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Reciclable', 'Reciclable'),
(3, 'Densidad E', 'Densidad I'),
(4, 'Con Anillo', 'With Ring'),
(5, 'Ensamblada', 'Assembled'),
(6, 'Convexo', 'Convex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bk_clases`
--

CREATE TABLE IF NOT EXISTS `bk_clases` (
  `clase_id` int(5) NOT NULL AUTO_INCREMENT,
  `clase_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `bk_clases`
--

INSERT INTO `bk_clases` (`clase_id`, `clase_nombre_e`, `clase_nombre_i`, `clase_imagen`) VALUES
(1, 'Envase', 'Bottle', '/img/72836770.jpg'),
(2, 'Pote', 'Jar', '/img/094901453.jpg'),
(3, 'Tapa', 'Cap', '/img/874015365.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(5) NOT NULL AUTO_INCREMENT,
  `categoria_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nombre_e`, `categoria_nombre_i`) VALUES
(1, 'Pote Gel', 'Jar Gel'),
(2, 'Tapa NES', 'NES Cap'),
(3, 'Envase Cosm&eacute;tica', 'Cosmetic Bottle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `ciudad_id` int(5) NOT NULL AUTO_INCREMENT,
  `ciudad_nombre_e` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_nombre_i` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pais_id` int(5) NOT NULL,
  PRIMARY KEY (`ciudad_id`),
  KEY `pais_id` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ciudad_id`, `ciudad_nombre_e`, `ciudad_nombre_i`, `pais_id`) VALUES
(1, 'Londes', 'London', 2),
(3, 'Ciudad de Panama', 'Panama City', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE IF NOT EXISTS `clases` (
  `clase_id` int(5) NOT NULL AUTO_INCREMENT,
  `clase_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `clases`
--

INSERT INTO `clases` (`clase_id`, `clase_nombre_e`, `clase_nombre_i`, `clase_imagen`) VALUES
(1, 'Envase', 'Bottle', '/img/72836770.jpg'),
(2, 'Pote', 'Jar', '/img/094901453.jpg'),
(3, 'Tapa', 'Cap', '/img/236817293.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cliente_id` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tipoid_cod` int(5) NOT NULL,
  `cliente_nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_apellidos` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_empresa` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_cargo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_telfijo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_telcel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_direccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_id` int(5) NOT NULL,
  `cliente_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_pass` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_registro` date NOT NULL,
  `cliente_newsletter` int(5) NOT NULL,
  `cliente_idioma` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cliente_id` (`cliente_id`),
  KEY `tipoid_cod` (`tipoid_cod`),
  KEY `ciudad_id` (`ciudad_id`),
  KEY `cliente_idioma` (`cliente_idioma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente_id`, `tipoid_cod`, `cliente_nombre`, `cliente_apellidos`, `cliente_empresa`, `cliente_cargo`, `cliente_telfijo`, `cliente_telcel`, `cliente_direccion`, `ciudad_id`, `cliente_email`, `cliente_pass`, `cliente_registro`, `cliente_newsletter`, `cliente_idioma`) VALUES
(1, '1024493700', 4, 'James', 'Garcia', 'Imaginamos', 'Desarrollador', '2001212', '3102500606', 'Cra 18 # 93', 3, 'james.garcia@imaginamos.com.co', 'j', '2012-06-12', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE IF NOT EXISTS `colores` (
  `color_id` int(5) NOT NULL AUTO_INCREMENT,
  `color_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `color_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `colores`
--

INSERT INTO `colores` (`color_id`, `color_nombre_e`, `color_nombre_i`) VALUES
(3, 'Azul', 'Blue'),
(4, 'Ambar', 'Ambar'),
(5, 'Negro', 'Black'),
(6, 'Blanco', 'White'),
(7, 'Cristal', 'Cristal'),
(8, 'Natural', 'Natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `cotizacion_id` int(5) NOT NULL AUTO_INCREMENT,
  `cliente_id` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cotizacion_fechaSolicitud` date NOT NULL,
  `cotizacion_fechaRespuesta` date NOT NULL,
  `estado_id` int(5) NOT NULL,
  `estado_obeservacion` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cotizacion_id`),
  KEY `estado_id` (`estado_id`),
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`cotizacion_id`, `cliente_id`, `cotizacion_fechaSolicitud`, `cotizacion_fechaRespuesta`, `estado_id`, `estado_obeservacion`) VALUES
(1, '1024493700', '2012-06-12', '0000-00-00', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplos`
--

CREATE TABLE IF NOT EXISTS `ejemplos` (
  `ejemplo_id` int(5) NOT NULL AUTO_INCREMENT,
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ejemplo_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ejemplo_id`),
  KEY `producto_codigo` (`producto_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `ejemplos`
--

INSERT INTO `ejemplos` (`ejemplo_id`, `producto_codigo`, `ejemplo_imagen`) VALUES
(2, '2333001', '/img/253383999.jpg'),
(4, '2333005', '/img/42498105.jpg'),
(5, '2333005', '/img/010503294.jpg'),
(6, '2333005', '/img/19649400.jpg'),
(7, '2333008', '/img/486464796.jpg'),
(8, '2333008', '/img/856978969.jpg'),
(9, '2333008', '/img/81881987.jpg'),
(10, '2333009', '/img/585166292.jpg'),
(11, '2333009', '/img/137463025.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensambles`
--

CREATE TABLE IF NOT EXISTS `ensambles` (
  `ensamble_id` int(5) NOT NULL AUTO_INCREMENT,
  `ensamble_base` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ensamble_complemento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ensamble_id`),
  KEY `ensamble_base` (`ensamble_base`),
  KEY `ensamble_complemento` (`ensamble_complemento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `ensambles`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `estado_id` int(5) NOT NULL AUTO_INCREMENT,
  `estado_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `estado_nombre`) VALUES
(1, 'Abierto'),
(2, 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faldas`
--

CREATE TABLE IF NOT EXISTS `faldas` (
  `falda_id` int(5) NOT NULL AUTO_INCREMENT,
  `falda_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `falda_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`falda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `faldas`
--

INSERT INTO `faldas` (`falda_id`, `falda_nombre_e`, `falda_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Corta', 'Short'),
(3, 'Media', 'Medium'),
(4, 'Larga', 'Long');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas`
--

CREATE TABLE IF NOT EXISTS `formas` (
  `forma_id` int(5) NOT NULL AUTO_INCREMENT,
  `forma_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `forma_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `forma_imagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`forma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `formas`
--

INSERT INTO `formas` (`forma_id`, `forma_nombre_e`, `forma_nombre_i`, `forma_imagen`) VALUES
(2, 'Cuadrado', 'Square', '/img/952244114.jpg'),
(3, 'Elico', 'Elico', ''),
(4, 'Ovalo', 'Oval', ''),
(5, 'rectangulo', 'rectangle', ''),
(6, 'Cilindrico', 'Cylindrical', ''),
(7, 'Conico', 'Conical', ''),
(8, 'Eliptico', 'Elliptic', ''),
(9, 'Esferico', 'Spheric', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
  `idioma_id` int(5) NOT NULL AUTO_INCREMENT,
  `idioma_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idioma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`idioma_id`, `idioma_nombre`) VALUES
(1, 'Español'),
(2, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
  `linea_id` int(5) NOT NULL AUTO_INCREMENT,
  `linea_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linea_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`linea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`linea_id`, `linea_nombre_e`, `linea_nombre_i`) VALUES
(3, 'Cosmetica', 'Cosmetics'),
(5, 'Agricola', 'Farm'),
(6, 'Aseo', 'Cleanliness'),
(7, 'Licores', 'Spirits'),
(8, 'Industrial', 'Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linners`
--

CREATE TABLE IF NOT EXISTS `linners` (
  `linner_id` int(5) NOT NULL AUTO_INCREMENT,
  `linner_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linner_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`linner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `linners`
--

INSERT INTO `linners` (`linner_id`, `linner_nombre_e`, `linner_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Sin Linner', 'Sin Linner'),
(3, 'Incorporado', 'Incorporado I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `material_id` int(5) NOT NULL AUTO_INCREMENT,
  `material_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `material_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`material_id`, `material_nombre_e`, `material_nombre_i`) VALUES
(2, 'PET', 'PET'),
(3, 'PVC', 'PVC'),
(4, 'HDPE', 'HDPE'),
(5, 'PP', 'PP'),
(6, 'LDPE', 'LDPE'),
(8, 'MPDE', 'MPDE'),
(9, 'PS', 'PS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `pais_id` int(5) NOT NULL AUTO_INCREMENT,
  `pais_nombre_e` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pais_nombre_i` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `paises`
--

INSERT INTO `paises` (`pais_id`, `pais_nombre_e`, `pais_nombre_i`) VALUES
(2, 'Inglaterra', 'England'),
(3, 'Italia', 'Italy'),
(4, 'Panama', 'Panama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_descripcion` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `producto_nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_id` int(5) NOT NULL,
  `sublinea_id` int(5) NOT NULL,
  `forma_id` int(5) NOT NULL,
  `producto_atributo1` int(5) NOT NULL,
  `producto_atributo2` int(5) NOT NULL,
  `producto_entradas` int(5) NOT NULL,
  `tamano_id` int(5) NOT NULL,
  `producto_capacidad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `producto_unidadCap` int(5) NOT NULL,
  `material_id` int(5) NOT NULL,
  `color_id` int(5) NOT NULL,
  `producto_boca` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `producto_unidadBoca` int(5) NOT NULL,
  `producto_peso` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `producto_terminado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linner_id` int(5) NOT NULL,
  `falda_id` int(5) NOT NULL,
  `producto_cavidades` int(5) NOT NULL,
  `producto_anotacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `clase_id` int(5) NOT NULL,
  `producto_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`producto_codigo`),
  KEY `categoria_id` (`categoria_id`),
  KEY `sublinea_id` (`sublinea_id`),
  KEY `forma_id` (`forma_id`),
  KEY `tamano_id` (`tamano_id`),
  KEY `material_id` (`material_id`),
  KEY `color_id` (`color_id`),
  KEY `linner_id` (`linner_id`),
  KEY `falda_id` (`falda_id`),
  KEY `clase_id` (`clase_id`),
  KEY `producto_unidadBoca` (`producto_unidadBoca`),
  KEY `producto_unidadCap` (`producto_unidadCap`),
  KEY `producto_atributo1` (`producto_atributo1`),
  KEY `producto_atributo2` (`producto_atributo2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_codigo`, `producto_descripcion`, `producto_nombre`, `categoria_id`, `sublinea_id`, `forma_id`, `producto_atributo1`, `producto_atributo2`, `producto_entradas`, `tamano_id`, `producto_capacidad`, `producto_unidadCap`, `material_id`, `color_id`, `producto_boca`, `producto_unidadBoca`, `producto_peso`, `producto_terminado`, `linner_id`, `falda_id`, `producto_cavidades`, `producto_anotacion`, `clase_id`, `producto_imagen`) VALUES
('22FO000171', 'Envase Oval VS 120 ml PVC Blanco Boca 24 MM', 'Nombre de Edicion 3', 3, 4, 4, 4, 6, 2, 2, '120', 2, 3, 6, '24', 2, '40', 'SNAP', 2, 2, 2, 'Test Editado', 1, '/img/68294435.jpg'),
('2333001', 'Producto Creado para la ejecuci&oacute;n de pruebas', 'Producto Prueba', 3, 5, 3, 4, 6, 2, 3, '200', 5, 6, 3, '2', 3, '200gr', 'Corrugado', 3, 2, 2, 'Test', 2, '/img/605724.jpg'),
('2333002', 'Producto Creado para la ejecuci&oacute;n de pruebas 2', 'Producto Prueba 2', 1, 3, 7, 4, 4, 2, 3, '100', 5, 8, 6, '2', 5, '10gr', 'Corrugado', 2, 4, 2, 'Test 2', 2, '/img/094901453.jpg'),
('2333003', 'Producto Creado para la ejecuci&oacute;n de pruebas 3', 'Producto Prueba 3', 1, 3, 4, 4, 6, 2, 2, '0', 3, 5, 7, '2', 5, '10gr', 'SNAP', 3, 2, 2, 'Test 3', 3, '/img/74169867.jpg'),
('2333004', 'Producto Creado para la ejecuci&oacute;n de pruebas 4', 'Producto Prueba 4', 3, 3, 7, 4, 4, 0, 2, '200', 5, 5, 7, '1', 2, '10gr', 'Corrugado', 2, 2, 1, 'Test 4', 3, '/img/469537.jpg'),
('2333005', 'Producto Creado para la ejecuci&oacute;n de pruebas 5', 'Producto Prueba 5', 3, 5, 6, 4, 3, 5, 2, '200', 2, 8, 6, '1', 5, '11', 'SNAP', 3, 4, 1, 'Test 5', 1, '/img/34397638.jpg'),
('2333006', 'Producto Creado para la ejecuci&oacute;n de pruebas 6', 'Producto Prueba 6', 1, 5, 2, 3, 6, 4, 2, '321', 2, 5, 4, '2', 3, '23', 'SNAP', 2, 2, 1, 'Test 6', 2, '/img/285604725.jpg'),
('2333007', 'Producto Creado para la ejecuci&oacute;n de pruebas 7', 'Producto Prueba 7', 1, 3, 7, 6, 4, 2, 3, '100', 3, 6, 3, '2', 5, '34', 'SNAP', 3, 2, 2, 'Test 6', 3, '/img/538563256.jpg'),
('2333008', 'Envase Plan Emulsi&oacute;n NP 450 ml PVC Ãmbar Boca28 MM', 'Envase Emulsi&oacute;n', 3, 3, 6, 4, 6, 2, 2, '450', 2, 3, 4, '28', 2, '160', 'SNAP', 2, 2, 1, 'Test', 1, '/img/924971708.jpg'),
('2333009', 'Envase Prueba', 'Nombre Envase Prueba', 1, 3, 7, 4, 6, 5, 3, '120', 2, 2, 3, '2', 5, '23', 'SNAP', 2, 2, 1, 'Test  de Filtro', 1, '/img/538696683.jpg'),
('2333010', 'Tapa Filtro', 'Nombre Tapa Filtro', 2, 6, 4, 1, 1, 1, 4, '0', 1, 3, 3, '0', 1, '10', 'SNAP', 2, 1, 0, 'Tapa Filtro Test', 3, '/img/730552171.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoscotizaciones`
--

CREATE TABLE IF NOT EXISTS `productoscotizaciones` (
  `prodCot_id` int(5) NOT NULL AUTO_INCREMENT,
  `cotizacion_id` int(5) NOT NULL,
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_producto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`prodCot_id`),
  KEY `producto_codigo` (`producto_codigo`),
  KEY `cotizacion_id` (`cotizacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `productoscotizaciones`
--

INSERT INTO `productoscotizaciones` (`prodCot_id`, `cotizacion_id`, `producto_codigo`, `cantidad_producto`) VALUES
(1, 1, '22FO000171', '1-500'),
(2, 1, '2333001', '500-1000'),
(3, 1, '2333004', '1000-...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_i`
--

CREATE TABLE IF NOT EXISTS `productos_i` (
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_descripcion` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `producto_nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `producto_entradas` int(5) NOT NULL,
  `producto_terminado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `producto_anotacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`producto_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `productos_i`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `seccion_id` int(5) NOT NULL AUTO_INCREMENT,
  `seccion_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_admin_file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`seccion_id`, `seccion_nombre_e`, `seccion_nombre_i`, `seccion_admin_file`) VALUES
(1, 'Acerca de Nosotros', 'About Us', 'acercaDeNosotros'),
(2, 'Mercados', 'Markets', 'mercados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublineas`
--

CREATE TABLE IF NOT EXISTS `sublineas` (
  `sublinea_id` int(5) NOT NULL AUTO_INCREMENT,
  `sublinea_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sublinea_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linea_id` int(5) NOT NULL,
  PRIMARY KEY (`sublinea_id`),
  KEY `linea_id` (`linea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `sublineas`
--

INSERT INTO `sublineas` (`sublinea_id`, `sublinea_nombre_e`, `sublinea_nombre_i`, `linea_id`) VALUES
(3, 'Nutricional', 'Nutricional Ingles', 5),
(4, 'VS', 'VS', 3),
(5, 'Alcohol', 'Alcohol', 8),
(6, 'Filtro', 'Filter', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanos`
--

CREATE TABLE IF NOT EXISTS `tamanos` (
  `tamano_id` int(5) NOT NULL AUTO_INCREMENT,
  `tamano_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tamano_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tamano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `tamanos`
--

INSERT INTO `tamanos` (`tamano_id`, `tamano_nombre_e`, `tamano_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Mediano', 'Middle'),
(3, 'Grande', 'Big'),
(4, 'Peque&ntilde;o', 'Small');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE IF NOT EXISTS `tipoidentificacion` (
  `tipoid_cod` int(5) NOT NULL AUTO_INCREMENT,
  `tipoid_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipoid_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`tipoid_cod`, `tipoid_nombre`) VALUES
(3, 'NIT'),
(4, 'CC'),
(5, 'CE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE IF NOT EXISTS `unidades` (
  `unidad_id` int(5) NOT NULL AUTO_INCREMENT,
  `unidad_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`unidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`unidad_id`, `unidad_nombre`) VALUES
(1, 'N/A'),
(2, 'ML'),
(3, 'CM'),
(5, 'IN'),
(7, 'ONZ');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`pais_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`tipoid_cod`) REFERENCES `tipoidentificacion` (`tipoid_cod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`ciudad_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`cliente_idioma`) REFERENCES `idiomas` (`idioma_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`estado_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizaciones_ibfk_3` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejemplos`
--
ALTER TABLE `ejemplos`
  ADD CONSTRAINT `ejemplos_ibfk_1` FOREIGN KEY (`producto_codigo`) REFERENCES `productos` (`producto_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ensambles`
--
ALTER TABLE `ensambles`
  ADD CONSTRAINT `ensambles_ibfk_1` FOREIGN KEY (`ensamble_base`) REFERENCES `productos` (`producto_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ensambles_ibfk_2` FOREIGN KEY (`ensamble_complemento`) REFERENCES `productos` (`producto_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_10` FOREIGN KEY (`producto_unidadBoca`) REFERENCES `unidades` (`unidad_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_11` FOREIGN KEY (`producto_unidadCap`) REFERENCES `unidades` (`unidad_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_12` FOREIGN KEY (`producto_atributo1`) REFERENCES `atributos` (`atributo_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_13` FOREIGN KEY (`producto_atributo2`) REFERENCES `atributos` (`atributo_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`sublinea_id`) REFERENCES `sublineas` (`sublinea_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`forma_id`) REFERENCES `formas` (`forma_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`tamano_id`) REFERENCES `tamanos` (`tamano_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`material_id`) REFERENCES `materiales` (`material_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_6` FOREIGN KEY (`color_id`) REFERENCES `colores` (`color_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_7` FOREIGN KEY (`linner_id`) REFERENCES `linners` (`linner_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_8` FOREIGN KEY (`falda_id`) REFERENCES `faldas` (`falda_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_9` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`clase_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productoscotizaciones`
--
ALTER TABLE `productoscotizaciones`
  ADD CONSTRAINT `productoscotizaciones_ibfk_2` FOREIGN KEY (`producto_codigo`) REFERENCES `productos` (`producto_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productoscotizaciones_ibfk_3` FOREIGN KEY (`cotizacion_id`) REFERENCES `cotizaciones` (`cotizacion_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sublineas`
--
ALTER TABLE `sublineas`
  ADD CONSTRAINT `sublineas_ibfk_1` FOREIGN KEY (`linea_id`) REFERENCES `lineas` (`linea_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
