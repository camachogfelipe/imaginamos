-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: mysql51-021.wc2:3306
-- Tiempo de generación: 09-01-2014 a las 13:51:18
-- Versión del servidor: 5.1.61
-- Versión de PHP: 5.2.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `819448_intecplast`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '80e1f1be01ca8743fc92f4d9ce689594');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `articulo_id` int(5) NOT NULL AUTO_INCREMENT,
  `articulo_titulo_e` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `articulo_descripcion_e` text COLLATE utf8_unicode_ci,
  `articulo_imagen_e` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `articulo_titulo_i` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `articulo_descripcion_i` text COLLATE utf8_unicode_ci,
  `articulo_imagen_i` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seccion_id` int(5) NOT NULL,
  `flag_id` int(5) NOT NULL,
  `articulo_enlace_e` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `articulo_enlace_i` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`articulo_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `flag_id` (`flag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`articulo_id`, `articulo_titulo_e`, `articulo_descripcion_e`, `articulo_imagen_e`, `articulo_titulo_i`, `articulo_descripcion_i`, `articulo_imagen_i`, `seccion_id`, `flag_id`, `articulo_enlace_e`, `articulo_enlace_i`) VALUES
(1, 'INTECPLAST S.A  UNA HISTORIA  CON PASIÃ“N ', '<p>INTECPLAST S.A., nace en 1982 para satisfacer las necesidades de envases de mercados estrategicos.</p>', '/img/35018001.jpg', 'A HISTORY MADE WITH EFFORT AND PASSION', 'Intecplast starts in 1982 as the dream of two friends', '/img/35018001.jpg', 1, 3, '', ''),
(2, 'CONTROL DE CALIDAD ', '<p>&nbsp;<span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:10.0pt;mso-bidi-font-size:11.0pt;\\\\\\\\&quot;\\\\&quot;\\">Nuestra operaci&oacute;n esta&nbsp; fundamentada en un sistema de gesti&oacute;n de calidad certificado, consolidado&nbsp; y comprometido con la mejora continua y la satisfacci&oacute;n de nuestros clientes, que garantiza su eficiencia&nbsp; a trav&eacute;s del seguimiento continuo de indicadores&nbsp; estrat&eacute;gicos y de calidad. <o:p></o:p></span></p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:10.0pt;mso-bidi-font-size:11.0pt;\\\\\\\\&quot;\\\\&quot;\\">Unidos a nuestro sistema de gesti&oacute;n de calidad, mantenemos&nbsp; programas de mejora tales como 5s y an&aacute;lisis de riesgos que fortalecen permanentemente&nbsp; la cultura de calidad en nuestros colaboradores.</span></p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:10.0pt;mso-bidi-font-size:11.0pt;\\\\\\\\&quot;\\\\&quot;\\"><o:p></o:p></span></p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:10.0pt;mso-bidi-font-size:11.0pt;\\\\\\\\&quot;\\\\&quot;\\">Tenemos implementados los aspectos b&aacute;sicos de BPM en cuanto a dotaci&oacute;n, documentaci&oacute;n, entrenamiento, identificaci&oacute;n, trazabilidad,&nbsp; limpieza y sanitizaci&oacute;n de nuestras &aacute;reas y desde el a&ntilde;o anterior contamos con un &aacute;rea para la fabricaci&oacute;n de envase farmac&eacute;utico *&nbsp; 120 ml en pead, &nbsp;dotada con sistema calificado de&nbsp; aire clase 100.000.<o:p></o:p></span></p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</p>\r\n<p>&nbsp;</p>', '/img/866479558.jpg', 'Quality System', '<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">Our operation is based on a quality management system certified, bonded and committed to continuous improvement and customer satisfaction, ensuring their efficiency through continuous monitoring of strategic and quality indicators.</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">United with our quality management system, we keep improving programs such as 5s and risk analysis that permanently strengthen quality culture among our employees.</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">We have implemented the basics of BPM in terms of staffing, documentation, training, identification, tracking, cleaning and sanitizing of our areas and since last year we have an area for manufacturing pharmaceutical packaging * pead 120 ml, equipped with system 100,000 class qualified air.</p>\r\n<p>We ensure compliance with customer requirements in our products through continuous monitoring of the manufacturing process which evaluates dimensional aspects, functional and attributes; random sampling based control, secure data capture and statistical analysis of process capability.&nbsp;</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '/img/057487532.jpg', 1, 4, '', ''),
(3, 'Instalaciones', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>INTECPLAST Esta constituida con areas que permiten a sus funcionarios y empleados el mejormaiento continuo de sus catividades laborales por medio de las zonas establecidas y areas tecnogicas para el desarrollo continuo de la compa&ntilde;ia .Esta se orgullece en establecer el buen estado y orden de sus areas para continuar siendo la empresa lider en desarrollo de productos plasticos de envases y tapas en el mercado&nbsp;</p>', '/img/632188481.jpg', 'Offices', '<p>Our locations are under maintenance...</p>', '/img/929619684.jpg', 1, 5, '', ''),
(11, 'COSMETICO ', '<p>Despiertan tus sentidos formando parte de tu entorno.</p>', '/img/577467911.jpg', 'Personal Care', '<p>Intecplast provides a wide range of products for personal care packaging...</p>', '/img/11902185.png', 2, 6, '', ''),
(12, 'FARMA', '<p>Para uso y funci&oacute;n de medicamentos.</p>', '/img/66302752.png', 'Pharmaceuticals', '', '', 2, 7, '', ''),
(13, 'ASEO Y HOGAR ', '<p>Funcionalmente dispuestos a sus necesidades .</p>', '/img/46662308.jpg', 'Industries', '', '', 2, 8, '', ''),
(14, 'ENVASES Y TAPAS ', '<p>Dise&ntilde;ados &nbsp;para su &nbsp;entorno y mejor funcionalidad &nbsp;&nbsp;</p>', '/img/44485725.png', 'Food', '<p>Test text with image above...</p>', '/img/529371902.png', 2, 9, '', ''),
(15, 'INGENIERÃA Y DISEÃ‘O ', '<p>La Directriz de Ingenier&iacute;a est&aacute; enfocada en desarrollar e innovar alternativas en productos pl&aacute;sticos mediante la optimizaci&oacute;n e implementaci&oacute;n de procesos, ofreci&eacute;ndole a nuestros clientes productos integrales desarrollados con personal capacitado, normas internacionales, software de dise&ntilde;o y mecanizados, instalados en equipos cnc de alta gama, garantizando confiabilidad y entregas oportunas en los proyectos.</p>\r\n<p><span style=\\"\\\\&quot;\\\\\\\\&quot;font-family:\\\\&quot;\\">Nuestra etapa de desarrollo del proyecto se fundamenta en el dise&ntilde;o y</span><span style=\\"\\\\&quot;\\\\\\\\&quot;font-family:\\\\&quot;\\">&nbsp;&nbsp;</span>&nbsp;ideas de nuestros clientes,&nbsp; amold&aacute;ndolas&nbsp;&nbsp; y&nbsp; plasm&aacute;ndolas, para<span>&nbsp;</span><span>fabricaci&oacute;n</span><span>&nbsp; </span><span>de</span><span>&nbsp; </span><span>nuestros moldes con equipos de</span><span>&nbsp; </span><span>alta tecnolog&iacute;a, cumpliendo</span><span>&nbsp; </span><span>con calidad,</span><span>&nbsp; </span><span>tiempos y cronogramas, buscando en cada dise&ntilde;o y desarrollo una mejoran continua.</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\\"\\\\&quot;\\\\\\\\&quot;MsoNormal\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;text-align:justify\\\\\\\\&quot;\\\\&quot;\\"><span lang=\\"\\\\&quot;\\\\\\\\&quot;ES\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;font-size:\\\\&quot;\\"><o:p></o:p></span></p>\r\n<p><span lang=\\"\\\\&quot;\\\\\\\\&quot;ES\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;font-size:11.0pt;line-height:\\\\&quot;\\">&nbsp;<br />\r\n</span></p>\r\n<p><span lang=\\"\\\\&quot;\\\\\\\\&quot;ES\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;font-size:11.0pt;line-height:\\\\&quot;\\">&nbsp;<br />\r\n</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', 'Product Engineering and Design', '<p>\r\n<p>The engineering guideline is focused on developing and innovating alternative plastic products by optimizing and implementing processes, offering our customers integrated products developed with trained, international standards, software design and machining, cnc equipment installed in high-end, oportunasmen ensuring reliability and delivery of projects.</p>\r\n<div>&nbsp;</div>\r\n</p>', '', 3, 10, '', ''),
(16, 'Responsabilidad Social', '<p>Compromiso, Perseverancia y mucha creatividad nos han llevado a desarrollar exitosamente nuestros programas de bienestar social . Desde el a&ntilde;o 2010 y 2011 con el proyecto &ldquo; mi mami es muy pila&rdquo; encaminamos nuestros esfuerzos &nbsp;a capacitar a todas las madres de nuestra organizaci&oacute;n en actividades que les permitieran obtener ingresos adicionales con bajos costos de inversi&oacute;n, el resultado: 150 mujeres, madres cabeza de familia.</p>\r\n<p>Compromiso, Perseverancia y mucha creatividad nos han llevado a desarrollar exitosamente nuestros programas de bienestar social . Desde el a&ntilde;o 2010 y 2011 con el proyecto &ldquo; mi mami es muy pila&rdquo; encaminamos nuestros esfuerzos &nbsp;a capacitar a todas las madres de nuestra organizaci&oacute;n en actividades que les permitieran obtener ingresos adicionales con bajos costos de inversi&oacute;n, el resultado: 150 mujeres, madres cabeza de familia.</p>\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div>&nbsp;</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', 'Social responsibility', '<p>\r\n<p>Commitment, perseverance and creativity have led us to successfully develop our social welfare programs. Since 2010 and 2011 with the &quot;my mom is very stack&quot; headed our efforts to enable all mothers of our organization in activities that allow them to earn additional income with low investment costs, the result: 150 women, single mothers family.</p>\r\n<p>Commitment, perseverance and creativity have led us to successfully develop our social welfare programs. Since 2010 and 2011 with the &quot;my mom is very stack&quot; headed our efforts to enable all mothers of our organization in activities that allow them to earn additional income with low investment costs, the result: 150 women, single mothers family.</p>\r\n</p>', '', 4, 11, '', ''),
(17, 'ENVASES MINI PET ', '<p>Envases MINI con tapa flip top &nbsp;20-410</p>', '/img/730255124.png', 'MINI CONTAINERS PET', '<p>Bottle MINI top with &nbsp;FLIP TOP 20-410 cap</p>', '/img/52283132.png', 6, 12, 'http://www.intecplast.com.php53-2.dfw1-2.websitetestlink.com/catalogo_paso3.php?id=22LM000001', ''),
(18, 'TAPA BICOLOR ', '<p>Tapa Bicolor flip top snap x 28 &nbsp;Dise&ntilde;o para uso cosmetico</p>', '/img/998508931.png', 'TWO COLOR COVER', '<p>&nbsp;Bicolor flip top cap snap x 28 Design for cosmetic</p>', '/img/244521899.png', 6, 12, 'http://www.intecplast.com.php53-2.dfw1-2.websitetestlink.com/farmaceutica_galeria.php#nogo', ''),
(23, 'TAPA ORFLEM ', '<p>Oriflame x 24 snap para uso de salud y belleza&nbsp;</p>', '/img/098292244.png', 'CAP ORIFLAME ', '<p>&nbsp;Oriflame x 24 snap to use health and beauty</p>', '/img/68449966.png', 6, 12, 'http://www.intecplast.com.php53-2.dfw1-2.websitetestlink.com/mercados_galeria.php#nogo', ''),
(27, 'Contactenos', '<p>Bienvenidos a Intecplast s.a.s</p>', '/img/9297419.jpg', 'Contact Us', '<p>.</p>', '/img/995762173.png', 11, 1, '', ''),
(43, 'Dise&ntilde;o de Producto', '<p class=\\"MsoNormal\\" style=\\"margin-bottom: 0.0001pt; text-align: justify;\\"><span style=\\"font-size:9.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\\">La directriz de ingenier&iacute;a est&aacute; enfocada en desarrollar e innovar alternativas en productos pl&aacute;sticos mediante la optimizaci&oacute;n e implementaci&oacute;n de procesos, ofreci&eacute;ndole a nuestros clientes productos integrales desarrollados con personal capacitado, normas internacionales, software de dise&ntilde;o y mecanizados, instalados en equipos cnc de alta gama, garantizando confiabilidad y entregas oportunas en los proyectos.</span><o:p></o:p></p>', '/img/616715208.jpg', '', '', '', 1, 2, '', ''),
(44, 'Metrologia', '<p class=\\"\\\\&quot;MsoNormal\\\\&quot;\\" style=\\"\\\\&quot;margin-bottom:\\"><span style=\\"\\\\&quot;font-size:\\">El &nbsp;<b>Laboratorio de Metrolog&iacute;a </b>est&aacute; encargado de Levantar los an&aacute;lisis dimensionales de los diferentes proyectos en desarrollo y de los productos que se requiera hacer homologaci&oacute;n de materiales o ajuste de especificaciones. Este Laboratorio cuenta con equipos de alta precisi&oacute;n como los es el Medidor &nbsp;de coordenadas &oacute;pticas y el proyector de perfiles.&nbsp;<o:p></o:p></span></p>', '/img/24462264.jpg', '', '', '', 1, 2, '', ''),
(45, 'Inyeccion', '<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;text-align:justify\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:\\\\\\\\&quot;\\\\&quot;\\" initial=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">En<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span></span><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:\\\\\\\\&quot;\\\\&quot;\\" initial=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">ingenier&iacute;a, el<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span><b style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;text-align:\\\\\\\\&quot;\\\\&quot;\\">moldeo por inyecci&oacute;n</b><span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;text-align:\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>es un proceso semicontinuo que consiste en inyectar un<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span></span></span>pol&iacute;mero,<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>cer&aacute;mico<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span> en estado fundido (o ahulado) en un<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>moldecerrado a<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>presi&oacute;n<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>y<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>fr&iacute;o, a trav&eacute;s de un orificio peque&ntilde;o llamado compuerta. En ese molde el material se<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>solidifica, comenzando a<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>cristalizar<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>en pol&iacute;meros<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>semicristalinos. La pieza o parte final se obtiene al abrir el molde y sacar de la cavidad la pieza moldeada.<span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:9.0pt;line-height:115%\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><o:p></o:p></span></p>', '/img/12271624.jpg', '', '', '', 1, 2, '', ''),
(46, ' Inyecto-soplado', '<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;text-align:justify\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:\\\\\\\\&quot;\\\\&quot;\\" initial=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">El moldeo por <b>inyecci&oacute;n-soplado</b> consiste en la obtenci&oacute;n de una preforma del pol&iacute;mero a procesar, similar a un tubo de ensayo, la cual posteriormente se calienta y se introduce en el molde que alberga la geometr&iacute;a deseada, en ocasiones se hace un estiramiento de la preforma inyectada, despu&eacute;s se inyecta aire, con lo que se consigue la expansi&oacute;n del material y la forma final de la pieza y por &uacute;ltimo se procede a su extracci&oacute;n.</span><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:9.0pt;line-height:115%\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><o:p></o:p></span></p>', '/img/05415473.jpg', '', '', '', 1, 2, '', ''),
(47, ' Proceso Soplado ', '<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;text-align:justify\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;font-size:\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\" initial=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">El<span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span></span><b style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;text-align:\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">moldeo por soplado</b><span class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;apple-converted-space\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;text-align:\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">&nbsp;</span>es un proceso utilizado para fabricar piezas de pl&aacute;stico huecas gracias a la expansi&oacute;n del material. Esto se consigue por medio de la presi&oacute;n que ejerce el aire en las paredes de la preforma, si se trata de inyecci&oacute;n-soplado, o del p&aacute;rison, si hablamos de extrusi&oacute;n-soplado.</span><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;font-size:9.0pt;line-height:115%\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><o:p></o:p></span></p>', '/img/252764524.jpg', '', '', '', 1, 2, '', ''),
(48, 'Serigrafia', '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span style=\\"font-size: 9pt; line-height: 115%; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;\\">La&nbsp;</span><b style=\\"text-align: start;\\">serigraf&iacute;a</b><span style=\\"text-align: start;\\">&nbsp;es una</span> t&eacute;cnica de impresi&oacute;n <span style=\\"font-size: 9pt; line-height: 115%; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;\\">&nbsp;empleada en el m&eacute;todo de reproducci&oacute;n de&nbsp;</span><span style=\\"font-size: 9pt; line-height: 115%; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;\\">documentos&nbsp;e&nbsp;</span>im&aacute;genes&nbsp;sobre cualquier material, y consiste en transferir una&nbsp;tina&nbsp;a trav&eacute;s de una&nbsp;malla &nbsp;tensada en un marco, el paso de la tinta se bloquea en las &aacute;reas donde no habr&aacute; imagen mediante una emulsi&oacute;n o barniz, quedando libre la zona donde pasar&aacute; la tinta.<o:p></o:p></p>', '/img/320972211.jpg', '', '', '', 1, 2, '', ''),
(49, 'Etiquetas Adhesivas ', '<p class=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;MsoNormal\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\" style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;text-align:justify\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:\\\\\\\\&quot;\\\\&quot;\\" initial=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\">El <strong>etiquetado </strong>es un proceso complejo, ya que los adhesivos necesitan acomodarse a toda clase de requerimientos: la superficie del envase, el material y el dise&ntilde;o de la etiqueta, la tecnolog&iacute;a del sistema de etiquetado y, finalmente, la aplicaci&oacute;n prevista y el proceso de reciclado.</span><span style=\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;font-size:9.0pt;line-height:115%\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\"><o:p></o:p></span></p>', '/img/67189606.jpg', '', '', '', 1, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspiraciones`
--

DROP TABLE IF EXISTS `aspiraciones`;
CREATE TABLE IF NOT EXISTS `aspiraciones` (
  `aspiracion_id` int(5) NOT NULL AUTO_INCREMENT,
  `aspiracion_valor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aspiracion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `aspiraciones`
--

INSERT INTO `aspiraciones` (`aspiracion_id`, `aspiracion_valor`) VALUES
(1, '3500000'),
(2, '4000000'),
(3, '4200000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

DROP TABLE IF EXISTS `atributos`;
CREATE TABLE IF NOT EXISTS `atributos` (
  `atributo_id` int(5) NOT NULL AUTO_INCREMENT,
  `atributo_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `atributo_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`atributo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `atributos`
--

INSERT INTO `atributos` (`atributo_id`, `atributo_nombre_e`, `atributo_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Con Anillo ', 'Ring with'),
(3, 'Convexa', 'Convexa'),
(4, 'Convexo', 'Convex '),
(5, 'Ensamblada ', 'Assembled'),
(6, 'Ensamblado', 'Assembled'),
(7, 'Ergonomico', 'Ergonomic'),
(8, 'Escalonada', 'Staggered'),
(9, 'Estriada ', 'Striated'),
(10, 'Estriado', 'Striated'),
(11, 'Gel', 'Gel'),
(12, 'Grabado ', 'Engraved'),
(13, 'Integrada ', 'Integrated'),
(14, 'Inyectado ', 'Injected'),
(15, 'Lisa', 'Smooth'),
(16, 'Liso', 'Smooth'),
(17, 'NP', 'NP'),
(18, 'Ranurado', 'Grooving'),
(19, 'Roscada', 'Screwed'),
(20, 'Snap', 'Snap'),
(21, 'Tosca', 'Tosca'),
(22, 'Tradicional ', 'Traditional'),
(23, 'Un orificio', 'An orifice'),
(24, 'Unilateral ', 'Unilateral '),
(25, 'Con Pesta&ntilde;a ', ' With Eyelash'),
(26, 'Frosted ', 'Frosted '),
(27, 'sin Pesta&ntilde;as', 'Without Flanges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bocas`
--

DROP TABLE IF EXISTS `bocas`;
CREATE TABLE IF NOT EXISTS `bocas` (
  `boca_id` int(5) NOT NULL AUTO_INCREMENT,
  `boca` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`boca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `bocas`
--

INSERT INTO `bocas` (`boca_id`, `boca`) VALUES
(1, 'N/A'),
(9, '1 onz'),
(10, '1,4'),
(11, '1,479'),
(12, '18 mm'),
(13, '18-415 mm'),
(14, '20 mm'),
(15, '20-410 mm'),
(16, '20-415 mm'),
(17, '22 mm'),
(18, '22-400 mm'),
(19, '22-415 mm'),
(21, '24 mm'),
(22, '24-400 mm'),
(23, '24-410 mm'),
(24, '24-415 mm'),
(25, '28 mm'),
(26, '28 PCO'),
(27, '28-400 mm'),
(28, '28-410 mm'),
(30, '28-415 mm'),
(31, '32 mm'),
(32, '32-400 mm'),
(33, '33 mm'),
(34, '33-400 mm'),
(35, '38 mm'),
(36, '40 mm'),
(37, '44 mm'),
(38, '48 mm'),
(39, '50 mm'),
(40, '52 mm'),
(41, '53 mm'),
(42, '58 mm'),
(43, '62 mm'),
(44, '67 mm'),
(45, '70 mm'),
(46, '80 mm'),
(47, '83 mm'),
(48, '89 mm'),
(49, '120 mm'),
(50, '56 mm'),
(51, '2'),
(52, '2 onz'),
(53, '4 onz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidades`
--

DROP TABLE IF EXISTS `capacidades`;
CREATE TABLE IF NOT EXISTS `capacidades` (
  `capacidad_id` int(5) NOT NULL AUTO_INCREMENT,
  `capacidad_rango` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`capacidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `capacidades`
--

INSERT INTO `capacidades` (`capacidad_id`, `capacidad_rango`) VALUES
(1, 'N/A'),
(6, '101 - 150'),
(7, '151 - 200'),
(9, '201 - 250'),
(10, '251 - 300'),
(11, '301 - 400'),
(12, '1 - 50'),
(13, '401 - 500'),
(14, '501 - 1000'),
(15, '1001 - 2000'),
(17, '51 - 100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(5) NOT NULL AUTO_INCREMENT,
  `categoria_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_imgagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_imgRangos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=175 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nombre_e`, `categoria_nombre_i`, `categoria_imgagen`, `categoria_imgRangos`) VALUES
(1, 'LINEA SM SQUASH', 'SM Cosmetic SQUASH', '/img/03211868.png', '/img/049852755.jpg'),
(2, 'SM ', 'SM', '/img/611777614.jpg', ''),
(4, ' LINEA TAPA HONGO ', 'MUSHROOM TOP LINE', '/img/537377604.png', '/img/592377021.jpg'),
(6, 'LINEA SM SPLASH', 'SM Cosmetic SPLASH', '/img/01486698.png', '/img/927072275.jpg'),
(7, 'LINEA SM PLANO  ', 'PLANO SM Cosmetics', '/img/339238609.png', '/img/71578297.jpg'),
(8, 'LINEA  SM BOTANICALS ', 'SM Cosmetic BOTANICALS', '/img/713063239.png', '/img/76311233.jpg'),
(9, 'LINEA SM OBLONG', 'LINEA SM  OBLONG', '/img/81898413.jpg', '/img/899064803.jpg'),
(10, 'LINEA SM LOCUPE', 'SM Cosmetic LOCUPE', '/img/61259665.jpg', '/img/055948962.jpg'),
(11, 'LINEA SM FIE', 'FIE SM Cosmetics', '/img/776109967.jpg', '/img/864427379.jpg'),
(12, 'LINEA SM BALA NP ', 'SM NP Cosmetics', '/img/162789811.jpg', '/img/412703161.jpg'),
(13, 'LINEA  VS CILINDRICO', 'VS  Cosmetics CILINDRICO', '/img/547977926.jpg', '/img/672638015.jpg'),
(14, 'LINEA  VS CUADRADO VANILLA ', 'SQUARE VS VANILLA Cosmetics', '/img/168623123.jpg', '/img/998159580.jpg'),
(15, 'LINEA VS BODY FANTASIS', 'Cosmetics VS BODY fantasis', '/img/74025507.jpg', '/img/777128502.jpg'),
(16, 'LINEA  VS CONICO BODY SPLASH', 'Cosmetics VS CONE BODY SPLASH', '/img/522321588.gif', '/img/688046904.jpg'),
(17, 'LINEA  VS CONICO SH ', 'CONE VS SH Cosmetics', '/img/162959397.gif', '/img/43404923.jpg'),
(19, 'LINEA  FLIP-TOP ', 'FLIP- TOP', '/img/773504210.png', '/img/16008306.jpg'),
(20, 'LINEA DISC-TOP', 'TOP DISC-TOP', '/img/935108935.png', '/img/32829752.jpg'),
(21, 'LINEA SM BALA ', 'Cosmetica SM BALA', '/img/63698662.jpg', '/img/620678897.jpg'),
(22, 'LINEA CREMA DE PEINAR ', 'STYLING CREAM Cosmetics', '/img/76036900.png', '/img/692844799.jpg'),
(23, 'LINEA TAPA  DOSIFICADORA ', 'DOSING TOP', '/img/028677314.png', '/img/173338290.jpg'),
(24, 'LINEA ALIMENTOS Y SALSAS ', 'Bottle FOOD OILS', '/img/432945884.png', '/img/154665658.jpg'),
(25, 'TAPA SEGURIDAD PCO', 'SAFETY COVER PCO', '/img/28955681.png', '/img/862668182.jpg'),
(26, 'TAPA ESTRIADA ', 'RIBBED TOP', '', ''),
(27, 'TAPA SEGURIDAD FRENOS', 'SAFETY BRAKE TOP', '/img/72993593.png', '/img/633515255.jpg'),
(28, 'ENVASE INDUSTRIAL LIQUIDO FRENOS', 'BOTTLE INDUSTRIAL BRAKE FLUID', '/img/45065634.png', '/img/465909666.jpg'),
(29, 'LINEA BOTELLA OVAL NP  ', 'NP LINE OVAL BOTTLE', '/img/277515148.jpg', '/img/439204387.jpg'),
(30, 'LINEA AGROQUIMICOS ', 'Bottle AGROCHEMICALS', '/img/089368452.jpg', '/img/577604791.jpg'),
(33, 'LINEA ASEO ', 'TOILET Bottle', '/img/944855007.png', '/img/428395583.jpg'),
(34, 'LINEA AGUA CILÃNDRICA ', 'CYLINDRICAL WATER Bottle', '/img/539272990.png', '/img/258797021.jpg'),
(35, 'LINEA ASEO LJ ', 'TOILET Bottle LJ', '/img/678194098.png', '/img/366865980.jpg'),
(36, 'LINEA AGUA CUADRADA ', 'SQUARE WATER Bottle', '/img/324076020.png', '/img/727382264.jpg'),
(37, 'LINEA ASEO SOL ', 'TOILET Bottle SUN', '/img/298375261.png', '/img/885367241.jpg'),
(38, 'LINEA ASEO NP ', 'TOILET Bottle NP', '/img/671736355.png', '/img/229249245.jpg'),
(39, 'TAPA ESCALONADA ASEO ', 'STEPPED TOILET TOP', '/img/268512034.png', '/img/468231957.jpg'),
(40, 'LINEA JABÃ“N LIQUIDO ', 'LIQUID SOAP Bottle', '/img/011914280.png', '/img/157905530.jpg'),
(41, 'LINEA LICOR ', 'LIQUOR bottle', '/img/545998488.png', '/img/36348922.jpg'),
(42, 'LINEA FARMACÃ‰UTICA  ', 'PHARMACEUTICAL Bottle', '/img/272633506.png', '/img/33715858.jpg'),
(43, 'LINEA COSMÃ‰TICO NT OVAL ', 'COSMETIC NT Container OVAL', '/img/576237342.jpg', '/img/144558359.jpg'),
(44, 'TAPA FLIP-TOP SNAP ', 'TAPA FLIP-TOP SNAP ', '/img/116444494.png', '/img/631475168.jpg'),
(45, 'LINEA  COSMÃ‰TICO TERCIOPELO ', 'VELVET COSMETIC BOTTLE', '/img/445253392.jpg', '/img/532602281.jpg'),
(46, 'LINEA  VS OVAL ', 'Cosmetics VS OVAL', '/img/799021276.jpg', '/img/090176805.jpg'),
(47, 'LINEA CILINDRICO BALA NP ', 'NP BULLET BULLET Cosmetics', '/img/523482970.jpg', '/img/947888286.jpg'),
(48, 'LINEA POTE GEL N.A', 'JAR LINE GEL N.A', '/img/343284671.jpg', '/img/093883037.jpg'),
(49, 'LINEA POTES LISOS', 'SMOOTH JARS LINE', '/img/411268532.jpg', '/img/04179373.jpg'),
(50, 'LINEA NES LISA', 'LISA NES TOP LINE', '/img/133889348.jpg', '/img/258072204.jpg'),
(51, 'LINEA NES ESTRIADA ', 'NES LINE STRIPED', '/img/471292132.jpg', '/img/370695963.jpg'),
(52, 'ENVASE CILÃNDRICO CON ANILLO ', 'CYLINDRICAL CONTAINER WITH RING', '/img/353251052.jpg', '/img/462088081.jpg'),
(53, 'LINEA COSMÃ‰TICA TOTTLE ', 'Tottle COSMETICS LINE', '/img/855167634.jpg', '/img/792892430.jpg'),
(54, 'LINEA COSMÃ‰TICA CF', 'COSMETIC LINE CF', '/img/046254090.jpg', '/img/529889219.jpg'),
(55, 'LINEA TAPA ESFÃ‰RICA ', 'TOP LINE SPHERICAL', '/img/033407934.jpg', '/img/848867932.jpg'),
(56, 'LINEA ANILLO DECORATIVO', 'DECORATIVE RING LINE', '/img/699348811.png', '/img/42269638.jpg'),
(57, 'ENVASE OVAL NATURA ', 'OVAL CONTAINER NATURA', '/img/345986723.png', '/img/62283179.jpg'),
(58, 'ENVASE OVAL ERGONOMICO', 'ERGONOMIC OVAL CONTAINER', '/img/67008708.jpg', '/img/817857041.jpg'),
(59, 'LINEA ROLL-ON CILÃNDRICOS ', 'ROLL-ON LINE ROUND', '/img/266064844.jpg', '/img/454373426.jpg'),
(60, 'ROLL-ON NP Y TRADICIONAL ', 'ROLL-ON AND TRADITIONAL NP', '/img/117676748.jpg', '/img/870089871.jpg'),
(61, 'LINEA TALQUERA CILÃNDRICA ', 'TALQUERA LINE CYLINDER', '/img/653451623.jpg', '/img/964394424.jpg'),
(62, 'LINEA TAPA ROLL-ON ', 'ROLL-ON TOP LINE', '/img/524948056.png', '/img/825379637.jpg'),
(63, 'LINEA TAPA ROLL-ON CONVEXA', 'ROLL-ON LINE CONVEX COVER', '/img/410428771.png', '/img/29107784.jpg'),
(64, 'LINEA MTH FARMACÃ‰UTICO ', 'MTH ONLINE PHARMACY', '/img/645244058.jpg', '/img/557739441.jpg'),
(65, 'LINEA TALQUERA OVAL NP', 'TALQUERA LINE OVAL NP', '/img/211436640.jpg', '/img/26624746.jpg'),
(66, 'TALQUERA ESTRIADA ', 'TALQUERA ESTRIADA', '/img/822482598.jpg', '/img/640604420.jpg'),
(67, 'LINEA POTE GEL GRABADO ', 'POT LINE ETCHING GEL', '/img/68554330.jpg', '/img/518376393.jpg'),
(68, 'LINEA POTE TRADICIONAL ', 'TRADITIONAL POT LINE', '/img/962407494.jpg', '/img/259496514.jpg'),
(69, 'LINEA OVAL NP ', 'OVAL LINE NP', '/img/982443353.jpg', '/img/365552203.jpg'),
(70, 'LINEA ENVASE FARMACEUTICO', 'PHARMACEUTICAL PACKAGING LINE', '/img/468332358.jpg', '/img/624437376.jpg'),
(71, 'LINEA ENVASE EMULSIÃ“N', 'EMULSION CONTAINER LINE', '/img/82090201.jpg', '/img/996252848.jpg'),
(72, 'LINEA FARMA STIEFEL', 'PHARMA LINE STIEFEL', '/img/896657290.jpg', '/img/227165109.jpg'),
(73, 'LINEA CILÃNDRICO NUTRICIONAL ', 'CYLINDRICAL LINE NUTRITION', '/img/870525663.jpg', '/img/243722865.jpg'),
(74, 'LINEA TUBO COLAPSIBLE ', 'TUBE LINE COLLAPSIBLE', '/img/283534054.jpg', '/img/458186155.jpg'),
(75, 'LINEA ENVASES CILÃNDRICOS ', 'CYLINDRICAL BOTTLE LINE', '/img/896658565.jpg', '/img/5679773.jpg'),
(76, 'LINEA ENJUAGUE BUCAL', 'MOUTHWASH LINE', '/img/650037139.png', '/img/146561043.jpg'),
(77, 'LINEA TAPA CAPSULA INTEGRADA ', 'CAPSULE COVER INTEGRATED LINE', '/img/519784532.jpg', '/img/313633689.jpg'),
(78, 'LINEA CAPSULA ENSAMBLADA ', 'CAPSULE LINE ASSEMBLED', '/img/560407224.jpg', '/img/314551437.jpg'),
(79, 'LINEA TAPA ESTRIADA LARGA', 'LONG FLUTED TOP LINE', '/img/188035726.jpg', '/img/239276244.jpg'),
(81, 'ENVASE POTE CUADRADO ', 'POT SQUARE CONTAINER', '/img/232886493.jpg', '/img/335792361.jpg'),
(82, 'LINEA PLANO UNILATERAL ', 'LINEA PLANO UNILATERAL', '/img/94241144.jpg', '/img/665779343.jpg'),
(83, 'LINEA OVALADO BABY', 'LINE OVAL BABY', '/img/512421660.jpg', '/img/093196314.jpg'),
(84, 'ENVASE GARRAFA PLANA', 'PLANE BOTTLE CONTAINER', '/img/174551271.jpg', '/img/972853367.jpg'),
(85, 'LINEA GARRAFA OVALADA ', 'OVAL LINE WITH ASA', '/img/528041188.jpg', '/img/939098458.jpg'),
(86, 'LINEA GARRAFA ASA OVAL ', 'ASA LINE OVAL BOTTLE', '/img/287905254.jpg', '/img/892839176.jpg'),
(87, 'LINEA GARRAFA CILINDRICA', 'BOTTLE LINE PARALLEL', '/img/369442301.jpg', '/img/25032537.jpg'),
(88, 'LINEA ENVASE PLANO BH', 'BH FLAT CONTAINER LINE', '/img/03597409.jpg', '/img/090982041.jpg'),
(89, 'LINEA BOTELLA PLANA BH', 'BH FLAT BOTTLE LINE', '/img/422295301.jpg', '/img/94788727.jpg'),
(90, 'ENVASE JABÃ“N LIQUIDO PLANO ', 'PLANE LIQUID SOAP CONTAINER', '/img/655615074.jpg', '/img/156506787.jpg'),
(92, 'LINEA ENVASE PLANO', 'BOTTLE LINE UP', '/img/97332576.jpg', '/img/263865549.jpg'),
(93, 'MATERA', 'MATERA', '/img/41906499.jpg', '/img/887122820.jpg'),
(94, 'LINEA PASTILLEROS CILÃNDRICOS ', 'PASTILLEROS LINE ROUND', '/img/262244807.jpg', '/img/763569275.jpg'),
(95, 'LINEA ENVASE OVAL SAP', 'SAP OVAL CONTAINER LINE', '/img/73548204.jpg', '/img/023083166.jpg'),
(96, 'LINEA LÃCTEOS ', 'MILK LINE', '/img/177523527.jpg', '/img/834273360.jpg'),
(97, 'LINEA OVAL CON BASE SNAP', 'OVAL BASE LINE WITH SNAP', '/img/395696313.jpg', '/img/950593422.jpg'),
(98, 'LINEA SM ELICO', 'Elico SM LINE', '/img/193478920.jpg', '/img/81572366.jpg'),
(99, 'LINEA OVAL SHAMPOO', 'OVAL LINE SHAMPOO', '/img/331567352.png', '/img/190109747.jpg'),
(100, 'LINEA PLANO RANURADO', 'STEPPED UP LINE', '/img/416353004.png', '/img/613106046.jpg'),
(101, 'LINEA ENVASE OVAL ', 'OVAL CONTAINER LINE', '/img/759788627.png', '/img/61361593.jpg'),
(102, 'LINEA ENVASE OBLONG', 'OBLONG CONTAINER LINE', '/img/219591234.png', '/img/241907457.jpg'),
(103, 'LINEA CILÃNDRICO BALA ', 'PARALLEL LINE BULLET', '/img/852908103.png', '/img/19178392.jpg'),
(104, 'LINEA SM OVAL PEQUITAS', 'SM LINE OVAL Pequitas', '/img/81408893.png', '/img/084972330.jpg'),
(105, 'LINEA CILÃNDRICO GRABADO ', 'CYLINDRICAL LINE ENGRAVING', '/img/594592177.png', '/img/283939717.jpg'),
(106, 'LINEA ENVASE OVAL NP ', 'OVAL BOTTLE LINE NP', '/img/556135672.png', '/img/371867196.jpg'),
(107, 'LINEA CUELLO LARGO', 'LONG NECK LINE', '/img/633723320.png', '/img/636183217.jpg'),
(108, 'ENVASE CILÃNDRICO CZ', 'CYLINDRICAL BOTTLE CZ', '/img/790338420.png', '/img/730608545.jpg'),
(109, 'COPA DOSIFICADORA ', 'CUP DOSING', '/img/076854603.png', '/img/56031277.jpg'),
(110, 'LINEA CÃ“NICA NP', 'CONICAL LINE NP', '/img/82851918.png', '/img/483804741.jpg'),
(111, 'LINEA CÃ“NICA WX', 'CONICAL LINE WX', '/img/023222138.png', '/img/775048658.jpg'),
(112, 'LINEA ENVASE   ELICO ', 'ELICO BOTTLE  LINE', '/img/312646995.png', '/img/71291572.jpg'),
(113, 'ENVASE CILÃNDRICO SH ', 'CYLINDRICAL BOTTLE SH', '/img/173744766.png', '/img/82861102.jpg'),
(114, 'LINEA ENVASE ELIPTICO', 'ELLIPTICAL CONTAINER LINE', '/img/264486541.png', '/img/719747900.jpg'),
(115, 'ENVASE ESTRIADO', 'SPLINE PACKAGE', '/img/613652304.png', '/img/418648124.jpg'),
(116, 'ENVASE CUADRADO COLUMNA ', 'BOTTLE SQUARE COLUMN', '/img/874417937.png', '/img/431782279.jpg'),
(117, 'LINEA ENVASE OVALADOS ', 'OVAL BOTTLE  LINE', '/img/318519683.png', '/img/892002170.jpg'),
(118, 'ENVASE POTE ESFÃ‰RICO GEL', 'GEL SPHERICAL BOTTLE  POT', '/img/33836568.png', '/img/575772745.jpg'),
(119, 'ENVASE POTE OVAL ', 'OVAL POT  JAR', '/img/253453262.png', '/img/955079236.jpg'),
(120, 'LINEA SM BOSTON', 'SM LINE BOSTON', '/img/333836265.png', '/img/447158469.jpg'),
(121, 'LINEA ENVASE OVAL VS', 'VS OVAL CONTAINER LINE', '/img/77969793.png', '/img/192774658.jpg'),
(122, 'LINEA ANTIACIDO CUADRADO', 'ANTACID LINE SQUARE', '/img/296312198.png', '/img/332734636.jpg'),
(123, 'LINEA ANTIACIDO MPX', 'ANTACID LINE MPX', '/img/561326637.png', '/img/184567424.jpg'),
(124, 'ENVASE REMOVEDOR', 'BOTTLE REMOVER', '/img/929395708.png', ''),
(125, 'ENVASE  RECTANGULAR ALCOHOL', 'BOTTLE RECTANGULAR ALCOHOL', '/img/989951906.png', '/img/185413741.jpg'),
(126, 'LINEA CAPSULERO', 'LINE CAPSULERO', '/img/962613158.png', '/img/159153260.jpg'),
(127, 'ENVASE BOSTON ROUND ', 'BOSTON ROUND BOTTLE', '/img/145059139.png', '/img/01141823.jpg'),
(128, 'ENVASE OVAL FARMACEUTICO', 'OVAL PHARMACEUTICALBOTTLE', '/img/922857243.png', '/img/45448542.jpg'),
(129, 'LINEA CILINDRICA ISO', 'CYLINDRICAL LINE ISO', '/img/617883183.png', '/img/26522422.jpg'),
(131, 'ENVASE GARRAFA PLANA ASA ', 'FLAT BOTTLE CONTAINER ASA', '/img/918013331.jpg', '/img/55153863.jpg'),
(132, 'POTE CILÃNDRICO GEL ', 'GEL CYLINDRICAL POT', '/img/761905372.jpg', '/img/869511876.jpg'),
(133, 'LINEA CUERPO POTE CONVEXO ', 'JAR LINE CONVEX BODY', '/img/325396623.jpg', '/img/7853997.jpg'),
(134, 'LINEA BOLILLAS ROLL-ON', 'BALLS ROLL-ON LINE', '/img/257929443.jpg', '/img/853961824.jpg'),
(135, 'APLICADOR CREMA VAGINAL', 'CREAM APPLICATOR VAGINAL', '/img/076821897.jpg', '/img/324964157.jpg'),
(136, 'RECIPIENTE ALIMENTOS ', 'FOOD CONTAINER', '/img/613279066.png', '/img/23512189.jpg'),
(137, 'LINEA SEALER POTE ', ' JAR SEALER LINE ', '/img/164806781.png', '/img/891149144.jpg'),
(138, 'LINEA TAPA POTE CONVEXA', 'POT COVER LINE CONVEX', '/img/733108980.png', '/img/526023384.jpg'),
(140, 'LINEA TUBO EFERVESCENTE', 'TUBE LINE EFERVESCENTE', '/img/019467757.png', '/img/21015280.jpg'),
(142, 'LINEA TAPA TRADICIONAL ', 'TRADITIONAL TOP LINE', '/img/260859296.png', '/img/252512801.jpg'),
(143, 'TAPA EFERVESCENTE', 'SPARKLING TOP', '/img/015563730.png', '/img/976685451.jpg'),
(144, 'ENVASE CAJA POLVOS COMPACTOS', 'POWDER BOX COMPACT BOTTLE', '/img/851046856.png', '/img/311285384.jpg'),
(145, 'TAPA CAJA POLVOS COMPACTOS ', 'COMPACT POWDER BOX TOP', '/img/294704422.png', '/img/490326813.jpg'),
(146, 'TAPA RECIPIENTE ALIMENTOS ', 'FOOD RECIPIENT LID', '/img/330933556.png', '/img/070972011.jpg'),
(148, 'LINEA MINI', 'MINI LINE', '/img/814368941.png', '/img/969879236.jpg'),
(149, 'TAPA CAPSULA CONVEXA', 'CONVEX COVER CAPS', '/img/514444990.png', '/img/371109617.jpg'),
(150, 'TAPA SEGURIDAD 28 ', '28mm SNAP TOP SAFETY', '/img/744532175.png', '/img/829794965.jpg'),
(151, 'TAPA LACTEOS', 'TOP MILK', '/img/874742990.png', '/img/029368793.jpg'),
(152, 'TAPA INDUSTRIAL', 'TOP INDUSTRIAL', '/img/551078910.png', '/img/949188418.jpg'),
(153, 'LINEA  PUSH DWON', 'LINE PUSH DWON', '/img/424569931.png', '/img/511429584.jpg'),
(154, 'TAPA SEGURIDAD 33', '33 SAFETY COVER', '/img/295446127.png', '/img/986392584.jpg'),
(155, 'LINEA TAPA TALQUERA ', 'LINE TALQUERA TOP', '/img/748011651.png', '/img/323828230.jpg'),
(156, 'TAPA SNAP HONGO', 'HONGO COVER SNAP', '/img/416515038.png', '/img/346482931.jpg'),
(157, 'LINEA FLIP-TOP HALLEY', 'FLIP-TOP LINE HALLEY', '/img/219181157.png', '/img/036247691.jpg'),
(158, 'TAPA TALQUERA SNAP', 'TAPA TALQUERA SNAP', '/img/339703364.png', '/img/66861429.jpg'),
(159, 'TAPA RECIPIENTE', 'TOP CONTAINER', '/img/545954156.png', '/img/059792267.jpg'),
(160, 'TAPA ROSCADA ', 'SCREW CAP', '/img/538767878.png', '/img/287207771.jpg'),
(161, 'TAPA OVALADA SNAP', 'TOP OVAL SNAP', '/img/883837641.png', '/img/22688787.jpg'),
(162, 'TAPA ORFLEM', 'TOP ORFLEM', '/img/196482845.png', '/img/755898138.jpg'),
(163, 'LINEA TAPA TUBE TOP ', 'TOP TUBE TOP LINE', '/img/84819137.png', '/img/651345705.jpg'),
(164, 'LINEA TAPA SEMIESFERICA', 'LINEA TAPA ESFERICA', '/img/94736136.png', '/img/19013974.jpg'),
(165, 'LINEA CÃ“NICA ESTRIADA', 'LINE STRIPED CONE', '/img/037398704.jpg', '/img/474238282.jpg'),
(166, 'LINEA TAPA LISA CORTA', 'LISA SHORT LINE TOP', '/img/420477110.png', '/img/890334210.jpg'),
(167, 'LINEA TAPA LISA LARGA', 'TOP LINE LISA LONG', '/img/791141968.png', '/img/736474780.jpg'),
(168, 'TAPA OVALADA PEQUEÃ‘A SNAP', 'SMALL TOP OVAL SNAP', '/img/698185507.png', '/img/814241364.jpg'),
(169, 'LINEA SOBRETAPA CILINDRICA', 'LINEA SOBRETAPA CILINDRICA', '/img/659384855.png', '/img/993808137.jpg'),
(170, 'LINEA SOBRETAPA CONVEXA', 'LINE CONVEX OVERTOP', '/img/728727528.png', '/img/350486586.jpg'),
(171, 'TAPA CILÃNDRICA FLIP-TOP', 'FLIP-TOP CYLINDER COVER', '/img/361551724.jpg', '/img/63414153.jpg'),
(172, 'LINEA SUBTAPAS', 'LINE SUBTOPS', '/img/212643227.jpg', '/img/495663688.jpg'),
(173, 'TAPA BICOLOR', 'TWO COLOR COVER', '/img/175782927.jpg', '/img/052789793.jpg'),
(174, 'SEALER POTE ', 'SEALER JAR', '/img/032834929.jpg', '/img/6304171.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE IF NOT EXISTS `ciudades` (
  `ciudad_id` int(5) NOT NULL AUTO_INCREMENT,
  `ciudad_nombre_e` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_nombre_i` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pais_id` int(5) NOT NULL,
  PRIMARY KEY (`ciudad_id`),
  KEY `pais_id` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ciudad_id`, `ciudad_nombre_e`, `ciudad_nombre_i`, `pais_id`) VALUES
(1, 'Londes', 'London', 2),
(3, 'Ciudad de Panama', 'Panama City', 4),
(4, 'Bogota', 'Bogota', 5),
(6, 'Miami', 'Miami', 6),
(7, 'Medellin', 'Medellin', 5),
(8, 'Cali', 'Cali', 5),
(9, 'Barranquilla', 'Barranquilla', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

DROP TABLE IF EXISTS `clases`;
CREATE TABLE IF NOT EXISTS `clases` (
  `clase_id` int(5) NOT NULL AUTO_INCREMENT,
  `clase_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clase_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`clase_id`, `clase_nombre_e`, `clase_nombre_i`, `clase_imagen`) VALUES
(1, 'Envases', 'Bottles', '/img/459859341.jpg'),
(2, 'Potes', 'Jarss', '/img/320981014.jpg'),
(3, 'Tapas', 'Caps', '/img/738342751.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
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
  `ciudad_id` varchar(766) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cliente_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_pass` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_registro` date NOT NULL,
  `cliente_newsletter` int(5) NOT NULL,
  `cliente_idioma` int(5) NOT NULL,
  `pais` varchar(766) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cliente_id` (`cliente_id`),
  KEY `tipoid_cod` (`tipoid_cod`),
  KEY `ciudad_id` (`ciudad_id`(255)),
  KEY `cliente_idioma` (`cliente_idioma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente_id`, `tipoid_cod`, `cliente_nombre`, `cliente_apellidos`, `cliente_empresa`, `cliente_cargo`, `cliente_telfijo`, `cliente_telcel`, `cliente_direccion`, `ciudad_id`, `cliente_email`, `cliente_pass`, `cliente_registro`, `cliente_newsletter`, `cliente_idioma`, `pais`) VALUES
(1, '80796091', 4, 'alejandro', 'salamanca', 'intecplast s.a ', 'dise&ntilde;ador ', '4125864', '3208382609', 'cras 73 a 7 b 75 ', 'bogota ', 'joalesalam@hotmail.com-', 'alejandro', '2013-06-26', 1, 1, 'Colombia'),
(2, '1234567', 4, 'Alexander', 'Guzm&aacute;n', 'Intecplast S.A.', 'Analista de Sistemas', '7799030', '3001234567', 'Calle 14 # 6-54', 'BogotÃ¡', 'ansistemas@intecplast.com.co', '253926337', '2013-10-29', 1, 1, 'Colombia'),
(3, '51992415', 4, 'Yenny', 'Barrera', 'Intecplast', 'Jefe de Sistemas', '7799030', '3157444444', 'Calle 14 N. 6-54 Ent 1 Cazuca', 'bogota', 'ybarrera@intecplast.com.co', '51992415', '2013-10-30', 1, 1, 'Colombia'),
(4, '12424686', 4, 'sol', 'Perez', 'Imaginamos', 'pm', '2234223', '11232565', 'caslle 19 # 7-135', 'bogota', 'solangel.perez@imaginamos.com', 'sol', '2013-11-26', 1, 1, 'Colombia'),
(5, '80796090', 4, 'feder', 'sadasaS', 'ISKFFSDF', 'DSFDSF', '2146546', '415464', 'SDFASDF15168', 'SDSADAS', 'alejosalam.as@gmail.com', 'ALEJO@', '2013-12-12', 1, 1, 'Australia'),
(6, '8000000', 4, 'aaaaa', 'aaaaaaa', 'fffff', 'fffff', '563444', '747777', '4646456', 'bogota', 'alejosalam@pajarito.com', '123456789a', '2013-12-12', 1, 1, 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

DROP TABLE IF EXISTS `colores`;
CREATE TABLE IF NOT EXISTS `colores` (
  `color_id` int(5) NOT NULL AUTO_INCREMENT,
  `color_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `color_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`color_id`, `color_nombre_e`, `color_nombre_i`) VALUES
(1, 'Ãmbar  ', 'Amber'),
(2, 'Azul ', 'Blue'),
(3, 'Blanco', 'White'),
(4, 'Blanca', 'White'),
(5, 'Cristal ', 'Crystal'),
(6, 'Natural ', 'Natural '),
(7, 'Negro', 'Black'),
(8, 'Verde', 'Green'),
(9, 'N/A', 'N/A'),
(10, 'Amarillo', 'Yellow'),
(11, 'Rojo', 'Red'),
(12, 'Rosado', 'pink'),
(13, 'Morado', 'purple'),
(14, 'Gris', 'Gray');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

DROP TABLE IF EXISTS `convocatorias`;
CREATE TABLE IF NOT EXISTS `convocatorias` (
  `convocatoria_id` int(5) NOT NULL AUTO_INCREMENT,
  `convocatoria_titulo_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_cargo_e` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_funciones_e` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_requisitos_e` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_titulo_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_cargo_i` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_funciones_i` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_requisitos_i` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_salario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria_vigencia` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `flag_id` int(5) NOT NULL,
  PRIMARY KEY (`convocatoria_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `flag_id` (`flag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`convocatoria_id`, `convocatoria_titulo_e`, `convocatoria_cargo_e`, `convocatoria_funciones_e`, `convocatoria_requisitos_e`, `convocatoria_titulo_i`, `convocatoria_cargo_i`, `convocatoria_funciones_i`, `convocatoria_requisitos_i`, `convocatoria_salario`, `convocatoria_vigencia`, `seccion_id`, `flag_id`) VALUES
(1, 'Se necesita ingeniero mec&aacute;nico', 'Jefe de Manufactura', '<p>Convocatoria de prueba...&nbsp;</p>', '<p>&nbsp;Profesional</p>', '', '', '', '', '2200.00', 'Hasta el 31 de marzo de 2013', 14, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

DROP TABLE IF EXISTS `cotizaciones`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`cotizacion_id`, `cliente_id`, `cotizacion_fechaSolicitud`, `cotizacion_fechaRespuesta`, `estado_id`, `estado_obeservacion`) VALUES
(6, '51992415', '2013-10-30', '2013-12-05', 1, '<p>&nbsp;Pruebas</p>'),
(7, '12424686', '2013-11-26', '0000-00-00', 1, ''),
(10, '8000000', '2013-12-12', '0000-00-00', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplos`
--

DROP TABLE IF EXISTS `ejemplos`;
CREATE TABLE IF NOT EXISTS `ejemplos` (
  `ejemplo_id` int(5) NOT NULL AUTO_INCREMENT,
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ejemplo_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ejemplo_id`),
  KEY `producto_codigo` (`producto_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=742 ;

--
-- Volcado de datos para la tabla `ejemplos`
--

INSERT INTO `ejemplos` (`ejemplo_id`, `producto_codigo`, `ejemplo_imagen`) VALUES
(1, '22SM000342', '/img/580092724.jpg'),
(2, '22SM000342', '/img/744634645.jpg'),
(3, '22SM000340', '/img/876508083.jpg'),
(4, '22SM000340', '/img/83416440.jpg'),
(5, '22SM000340', '/img/122636333.jpg'),
(6, '22SM000030', '/img/139417208.jpg'),
(7, '22SM000010', '/img/963839329.jpg'),
(8, '22SM000010', '/img/925213387.jpg'),
(9, '22SM000010', '/img/052371575.jpg'),
(10, '22MO000091', '/img/634871241.jpg'),
(11, '22SM000090', '/img/918957562.jpg'),
(12, '22SM000090', '/img/247696035.jpg'),
(14, '22SM000090', '/img/029963209.png'),
(15, '22SM000232', '/img/140773936.jpg'),
(16, '22SM000232', '/img/372235083.jpg'),
(18, '22SM000232', '/img/53726509.jpg'),
(19, '21TC0000271', '/img/737249760.jpg'),
(20, '22SM000190', '/img/11213501.jpg'),
(21, '22SM000195', '/img/135818723.jpg'),
(22, '22SM000195', '/img/882345172.jpg'),
(23, '22SM000195', '/img/825598597.jpg'),
(24, '22SM000245', '/img/139542203.jpg'),
(25, '22SM000246', '/img/432348343.jpg'),
(26, '22SM000246', '/img/397499563.jpg'),
(27, '22SM000246', '/img/915963054.jpg'),
(28, '22SM000750', '/img/081207635.jpg'),
(29, '22SM000750', '/img/55255105.jpg'),
(30, '22SM000750', '/img/84675833.jpg'),
(31, '22SM000120', '/img/873502303.jpg'),
(32, '22SM000120', '/img/050871163.jpg'),
(33, '22SM000120', '/img/210182115.jpg'),
(34, '22SM000130', '/img/635381070.jpg'),
(35, '22SM000050', '/img/01151365.jpg'),
(36, '22SM000050', '/img/370568084.jpg'),
(37, '22SM000050', '/img/446725544.jpg'),
(38, '22SM000351', '/img/9586317.jpg'),
(39, '22SM000351', '/img/889757408.jpg'),
(40, '22SM000351', '/img/811896019.jpg'),
(41, '22SM000351', '/img/68399842.jpg'),
(42, '22SM000360', '/img/144639237.jpg'),
(43, '22SM000360', '/img/841868284.jpg'),
(45, '22SM000070', '/img/078986837.jpg'),
(46, '22SM000161', '/img/258198507.jpg'),
(47, '22SM000161', '/img/424201296.jpg'),
(48, '22SM000161', '/img/253383593.jpg'),
(49, '22SM000242', '/img/183515725.jpg'),
(50, '22SM000242', '/img/121826663.jpg'),
(51, '22SM000242', '/img/976852947.jpg'),
(52, '22SM000242', '/img/933806769.jpg'),
(53, '22SM000180', '/img/689366419.jpg'),
(54, '22SM000180', '/img/020968598.jpg'),
(56, '33IS500054', '/img/555037891.jpg'),
(60, '21TS000201', '/img/310986683.png'),
(61, '21TS000201', '/img/726802952.png'),
(62, '21TS000201', '/img/878829644.png'),
(85, '22FC000670', '/img/887861710.png'),
(86, '22FC000670', '/img/273143116.png'),
(87, '22FC000670', '/img/151531559.png'),
(88, '21FT000300', '/img/69595916.png'),
(89, '21FT000300', '/img/478413485.png'),
(90, '21FT000300', '/img/928599116.png'),
(91, '21FT000300', '/img/44316902.png'),
(93, '25TS000003', '/img/014034188.png'),
(95, '25TS000003', '/img/962891449.png'),
(96, '22FF000910', '/img/217006388.jpg'),
(97, '22FF000910', '/img/187965753.jpg'),
(98, '24TE000681', '/img/23554088.png'),
(99, '21TS000151', '/img/060027291.png'),
(105, '22BP000975', '/img/318121034.jpg'),
(106, '22BP000975', '/img/881901312.jpg'),
(107, '22BP000970', '/img/14538806.jpg'),
(108, '22BP000970', '/img/811751294.jpg'),
(109, '22SM000360', '/img/575133928.png'),
(110, '22SM000220', '/img/745807130.png'),
(111, '22SM000220', '/img/434174932.png'),
(112, '22SM000220', '/img/547122224.png'),
(113, '22SM000220', '/img/523651515.png'),
(114, '22SM000030', '/img/416614411.png'),
(116, '22SM000030', '/img/059567291.png'),
(118, '22SM000010', '/img/738007654.png'),
(119, '22SM000010', '/img/987293802.png'),
(120, '22SM000340', '/img/93985836.png'),
(121, '22SM000340', '/img/268014506.jpg'),
(122, '22SM000340', '/img/724409105.png'),
(123, '22SM000342', '/img/645586363.png'),
(124, '22SM000342', '/img/180694602.jpg'),
(125, '22SM000342', '/img/733478073.png'),
(126, '22FF000641', '/img/02459107.png'),
(127, '22FF000641', '/img/64588162.png'),
(128, '22FF000641', '/img/063399500.png'),
(129, '22FF000260', '/img/943518332.png'),
(130, '22FF000260', '/img/767512542.png'),
(131, '22FF000260', '/img/484687089.png'),
(135, '22BP000426', '/img/772457709.png'),
(136, '22BP000426', '/img/994902270.png'),
(137, '22BP000426', '/img/37901368.png'),
(138, '22FF000631', '/img/679587726.png'),
(139, '22FF000631', '/img/25591370.png'),
(140, '22FF000631', '/img/111181493.png'),
(141, '22FF000635', '/img/296071696.png'),
(142, '22FF000635', '/img/335851415.png'),
(143, '22FF000635', '/img/168013379.png'),
(144, '22FF000645', '/img/596573711.png'),
(145, '22FF000645', '/img/446609043.png'),
(146, '22FF000645', '/img/394631906.png'),
(153, '22FF000606', '/img/260139065.png'),
(154, '22FF000606', '/img/837528977.png'),
(155, '22FF000606', '/img/411455854.png'),
(158, '22FF000610', '/img/08166629.png'),
(161, '22BP000525', '/img/854371696.png'),
(162, '22BP000525', '/img/113135335.png'),
(164, '22BP000522', '/img/447351496.png'),
(165, '22BP000522', '/img/075113756.png'),
(167, '22BP000305', '/img/320893808.png'),
(168, '22BP000305', '/img/873334105.png'),
(169, '22BP000305', '/img/227422578.png'),
(170, '22BP000490', '/img/470737521.png'),
(171, '22BP000490', '/img/919798746.png'),
(173, '22BP000495', '/img/383408275.png'),
(174, '22BP000495', '/img/036809613.png'),
(175, '22BP000495', '/img/674313738.png'),
(176, '22BP000500', '/img/836361969.png'),
(177, '22BP000500', '/img/436244427.png'),
(178, '22BP000500', '/img/120779650.png'),
(179, '22BP000506', '/img/946507834.png'),
(181, '22BP000506', '/img/315524259.png'),
(182, '22BP000506', '/img/833493676.png'),
(186, '21ST000502', '/img/060566008.png'),
(187, '21ST000502', '/img/458707038.png'),
(188, '21ST000502', '/img/439696425.png'),
(196, '22CB000251', '/img/785504803.jpg'),
(197, '22CB000251', '/img/440883599.jpg'),
(198, '22CB000251', '/img/842132514.jpg'),
(201, '22CB000350', '/img/771022288.jpg'),
(202, '22CB000350', '/img/294862020.jpg'),
(203, '22CB000350', '/img/267592316.jpg'),
(204, '21CV000153', '/img/73023636.jpg'),
(205, '21CV000153', '/img/963162658.jpg'),
(206, '21CV000153', '/img/720202680.jpg'),
(207, '21CV000050', '/img/657214438.jpg'),
(208, '21CV000050', '/img/65032821.jpg'),
(209, '21CV000050', '/img/696919592.jpg'),
(210, '21CV000031', '/img/54341903.jpg'),
(211, '21CV000031', '/img/616379179.jpg'),
(212, '21CV000031', '/img/390113324.jpg'),
(213, '21CV000001', '/img/160574186.jpg'),
(214, '21CV000001', '/img/034604019.jpg'),
(215, '21CV000001', '/img/17968216.jpg'),
(216, '21CV000026', '/img/928419884.jpg'),
(217, '21CV000026', '/img/57922709.jpg'),
(218, '21CV000026', '/img/788438237.jpg'),
(221, '22PS000100', '/img/835833151.jpg'),
(223, '22PS000100', '/img/789163149.jpg'),
(224, '22PS000100', '/img/861817538.jpg'),
(225, '22PS000100', '/img/39594237.jpg'),
(232, '22PS000200', '/img/121111771.jpg'),
(233, '22PS000200', '/img/610374089.jpg'),
(234, '22PS000200', '/img/954954025.jpg'),
(235, '21TE000950', '/img/286672344.jpg'),
(236, '21TE000950', '/img/241442581.jpg'),
(237, '21TE000950', '/img/23323841.jpg'),
(238, '22EO000800', '/img/952133885.jpg'),
(239, '22EO000800', '/img/08084883.jpg'),
(240, '22ES000471', '/img/986375326.jpg'),
(241, '22ES000471', '/img/228542166.jpg'),
(242, '22ES000471', '/img/363538427.jpg'),
(243, '22EO000700', '/img/158097047.jpg'),
(244, '22EO000700', '/img/021943408.jpg'),
(245, '22EO000700', '/img/11841262.jpg'),
(246, '22EO000710', '/img/221652913.jpg'),
(247, '22EO000710', '/img/292887182.jpg'),
(248, '22EO000416', '/img/48261261.jpg'),
(249, '22EO000416', '/img/55424394.jpg'),
(250, '22EO000416', '/img/679951967.jpg'),
(251, '22EO000400', '/img/982614559.jpg'),
(252, '22EO000400', '/img/66745336.jpg'),
(253, '21TF000400', '/img/068136233.jpg'),
(254, '21TF000400', '/img/190651174.jpg'),
(256, '24TF000507', '/img/650936162.jpg'),
(257, '24TF000507', '/img/999859474.jpg'),
(258, '24TF000507', '/img/920068762.jpg'),
(259, '21TF000200', '/img/548557651.jpg'),
(260, '21TF000200', '/img/373917819.jpg'),
(261, '21TF000200', '/img/172192606.jpg'),
(262, '21TF000010', '/img/516477959.jpg'),
(263, '21TF000010', '/img/21270862.jpg'),
(264, '21TF000010', '/img/387941488.jpg'),
(265, '22FC000006', '/img/537546795.jpg'),
(266, '22FC000006', '/img/326214957.jpg'),
(267, '22FC000006', '/img/477859114.jpg'),
(268, '22FC000005', '/img/254036398.jpg'),
(269, '22FC000005', '/img/857783753.jpg'),
(270, '22FC000005', '/img/088625681.jpg'),
(271, '24TD000201', '/img/039797658.png'),
(272, '24TD000201', '/img/488699460.png'),
(273, '24TD000201', '/img/445092072.png'),
(274, '24TC000650', '/img/589544895.png'),
(275, '24TC000650', '/img/062883949.png'),
(276, '24TC000650', '/img/769918565.png'),
(277, '24TC000733', '/img/979057708.png'),
(278, '24TC000733', '/img/668099837.png'),
(279, '24TC000733', '/img/467097941.png'),
(281, '24TC000700', '/img/065809794.png'),
(282, '24TC000700', '/img/434218212.png'),
(283, '24TC000700', '/img/914645991.png'),
(284, '24TC000840', '/img/289381458.png'),
(285, '24TC000840', '/img/963389039.png'),
(286, '24TC000840', '/img/637938971.png'),
(287, '24TC000841', '/img/665651012.png'),
(288, '24TC000841', '/img/214098418.png'),
(289, '24TC000841', '/img/798529453.png'),
(290, '21AN000001', '/img/454919042.png'),
(291, '21AN000001', '/img/87310188.png'),
(292, '21AN000001', '/img/252205086.png'),
(293, '21AN000019', '/img/28609303.png'),
(294, '21AN000019', '/img/980712400.png'),
(295, '21AN000019', '/img/845889408.png'),
(296, '24TD000100', '/img/197382716.png'),
(297, '24TD000100', '/img/558922847.png'),
(298, '24TD000100', '/img/539819106.png'),
(299, '24TA000020', '/img/944465062.png'),
(300, '24TA000020', '/img/43886318.png'),
(301, '24TA000020', '/img/872117648.png'),
(302, '', '/img/194878190.png'),
(304, '', '/img/159379260.png'),
(305, '', '/img/22941600.png'),
(306, '22FG000021', '/img/991942137.jpg'),
(307, '22FG000021', '/img/847854529.jpg'),
(308, '22FG000021', '/img/797816086.jpg'),
(309, '22FG000020', '/img/28171811.jpg'),
(310, '22FG000020', '/img/697005130.jpg'),
(311, '22FG000020', '/img/534745809.jpg'),
(312, '21TE000905', '/img/125298772.jpg'),
(313, '21TE000905', '/img/837399735.jpg'),
(314, '21TE000905', '/img/279745925.jpg'),
(315, '22FG000041', '/img/797656390.jpg'),
(316, '22FG000041', '/img/885424668.jpg'),
(317, '22FG000041', '/img/634721889.jpg'),
(318, '21CV000150', '/img/07955856.jpg'),
(319, '21CV000150', '/img/667392117.jpg'),
(320, '21CV000150', '/img/840053943.jpg'),
(321, '21CV000180', '/img/03688980.jpg'),
(322, '21CV000180', '/img/73570317.jpg'),
(323, '21CV000180', '/img/420916305.jpg'),
(324, '22RI000030', '/img/91624973.png'),
(325, '22RI000030', '/img/627342728.png'),
(326, '22RI000030', '/img/626592627.png'),
(327, '22RI000010', '/img/128249470.png'),
(328, '22RI000010', '/img/744752452.png'),
(329, '21TR000012', '/img/357899825.png'),
(330, '21TR000012', '/img/086361015.png'),
(331, '21TR000330', '/img/275334316.png'),
(332, '21TR000330', '/img/92014167.png'),
(333, '21TR000500', '/img/163957664.png'),
(334, '21TR000500', '/img/687803723.png'),
(335, '21TR000500', '/img/679367035.png'),
(336, '22RI000001', '/img/448212096.png'),
(337, '22RI000001', '/img/980133593.png'),
(339, '22RI000020', '/img/681614503.png'),
(340, '22RI000020', '/img/256953056.png'),
(345, '21TR000021', '/img/814677299.png'),
(346, '21TR000021', '/img/46008400.png'),
(347, '21TR000021', '/img/843302772.png'),
(348, '21TR000160', '/img/099277231.png'),
(349, '21TR000160', '/img/483596767.png'),
(351, '21TR000160', '/img/397409310.png'),
(352, '22FF000279', '/img/798402255.png'),
(353, '22FF000279', '/img/218972447.png'),
(354, '22BP000420', '/img/867239442.png'),
(355, '22BP000420', '/img/12179140.png'),
(356, '24TC000501', '/img/59922513.jpg'),
(357, '24TC000501', '/img/342795625.jpg'),
(358, '24TC000501', '/img/912149709.jpg'),
(359, '24TC000450', '/img/866415879.jpg'),
(360, '24TC000450', '/img/528868582.jpg'),
(361, '24TC000450', ''),
(362, '24TC000200', '/img/851205248.jpg'),
(363, '24TC000200', '/img/74911937.jpg'),
(364, '24TC000200', '/img/47320247.jpg'),
(365, '24TC000010', '/img/296847733.jpg'),
(366, '24TC000010', '/img/56324558.jpg'),
(367, '24TC000010', '/img/637292343.jpg'),
(368, '21TE000110', '/img/123109784.jpg'),
(369, '21TE000110', '/img/481243937.jpg'),
(370, '21TE000110', '/img/518174585.jpg'),
(371, '21TE000160', '/img/022008643.jpg'),
(372, '21TE000160', '/img/698608466.jpg'),
(373, '21TE000160', '/img/055109480.jpg'),
(374, '21TE000380', '/img/31498519.jpg'),
(375, '21TE000380', '/img/740536486.jpg'),
(376, '21TE000380', '/img/371329377.jpg'),
(377, '21TE000610', '/img/07357561.jpg'),
(378, '21TE000610', '/img/744099313.jpg'),
(379, '21TE000610', '/img/161167752.jpg'),
(380, '22FO000700', '/img/637198479.jpg'),
(381, '22FO000700', '/img/396716005.jpg'),
(382, '22FO000700', '/img/267471516.jpg'),
(383, '22FO000530', '/img/88174463.jpg'),
(384, '22FO000530', '/img/217142667.jpg'),
(385, '22FC000098', '/img/051843339.png'),
(386, '22FC000098', '/img/51025188.png'),
(387, '22FC000098', '/img/793396194.png'),
(388, '22FC000098', '/img/088316156.png'),
(393, '22FC000501', '/img/876354551.png'),
(394, '22FC000501', '/img/947417381.png'),
(395, '22FC000501', '/img/151898026.png'),
(396, '22FC000781', '/img/087902708.png'),
(398, '22FC000781', '/img/487289598.png'),
(399, '22FC000781', '/img/044647370.png'),
(400, '22FC000791', '/img/931616605.png'),
(401, '22FC000791', '/img/587052908.png'),
(402, '22FC000791', '/img/445711161.png'),
(403, '22FC000500', '/img/79322807.png'),
(404, '22FC000500', '/img/57814392.png'),
(405, '22FC000500', '/img/074043402.png'),
(406, '21CD000010', '/img/950692030.png'),
(407, '21CD000010', '/img/533035379.png'),
(408, '21CD000010', '/img/29023162.png'),
(409, '21CD000010', '/img/047274145.png'),
(410, '21FT000411', '/img/455138406.png'),
(411, '21FT000411', '/img/961676608.png'),
(412, '21FT000411', '/img/853746065.png'),
(413, '21ST000303', '/img/124525346.png'),
(414, '21ST000303', '/img/717326768.png'),
(415, '21ST000303', '/img/88602284.png'),
(416, '21ST000204', '/img/14565672.png'),
(417, '21ST000204', '/img/147788041.png'),
(418, '21ST000204', '/img/158153807.png'),
(419, '21ST000101', '/img/337215382.png'),
(421, '21ST000101', '/img/833294487.png'),
(422, '21ST000101', '/img/160876354.png'),
(423, '22FE000150', '/img/018951265.png'),
(424, '22FE000150', '/img/87302181.png'),
(425, '22FE000150', '/img/837266311.png'),
(426, '25EE000022', '/img/675615854.jpg'),
(427, '25EE000022', '/img/177272304.jpg'),
(428, '25EE000022', '/img/485326613.jpg'),
(429, '25EE000022', '/img/56660584.jpg'),
(430, '25EE000023', '/img/37043684.jpg'),
(432, '25EE000023', '/img/21072377.jpg'),
(433, '25EE000023', '/img/475287231.jpg'),
(434, '25EE000023', '/img/985369438.jpg'),
(435, '24PV117001', '/img/226658307.jpg'),
(436, '24PV117001', '/img/157225193.jpg'),
(437, '24PV117001', '/img/860937856.jpg'),
(438, '24PE000600', '/img/037499432.jpg'),
(439, '24PE000600', '/img/682872803.jpg'),
(440, '24PE000600', '/img/766621597.jpg'),
(441, '24PE000214', '/img/45871317.jpg'),
(443, '24PE000214', '/img/597866237.jpg'),
(444, '24PE000214', '/img/789627484.jpg'),
(445, '24PE000460', '/img/884371860.jpg'),
(446, '24PE000460', '/img/951434306.jpg'),
(447, '21LN000150', '/img/227239308.png'),
(448, '21LN000150', '/img/536537985.png'),
(449, '21LN000160', '/img/787868978.png'),
(450, '21LN000160', '/img/799275638.png'),
(451, '21LN000160', '/img/961343740.png'),
(452, '21LN000150', '/img/970114394.png'),
(453, '24TP000600', '/img/783409942.png'),
(454, '24TP000600', '/img/275744714.png'),
(455, '24TP000600', '/img/623946344.png'),
(457, '24TP000237', '/img/548088157.png'),
(458, '24TP000237', '/img/847158500.png'),
(459, '24TP000237', '/img/999222295.png'),
(460, '21CV000079', '/img/557961761.png'),
(461, '21CV000079', '/img/54385699.png'),
(462, '21CV000079', '/img/77496814.png'),
(463, '24TT000001', '/img/563858295.png'),
(464, '24TT000001', '/img/518245155.png'),
(465, '24TT000001', '/img/090616012.png'),
(466, '21UT000015', '/img/562116014.png'),
(467, '21UT000015', '/img/16244656.png'),
(468, '21UT000015', '/img/266229836.png'),
(469, '21UT000010', '/img/314993981.png'),
(470, '21UT000010', '/img/916381082.png'),
(471, '21UT000010', '/img/174514022.png'),
(472, '21TV000020', '/img/52651475.png'),
(473, '21TV000020', '/img/915154275.png'),
(474, '21TV000020', '/img/247051363.png'),
(478, '24TP000510', '/img/215533754.png'),
(479, '24TP000510', '/img/589218306.png'),
(480, '24TP000006', '/img/162478028.png'),
(481, '24TP000006', '/img/190333674.png'),
(482, '24TP000006', '/img/987525061.png'),
(483, '24TP000400', '/img/220903812.png'),
(484, '24TP000400', '/img/576526611.png'),
(488, '22FG000090', '/img/720038849.png'),
(489, '22FG000090', '/img/351918385.png'),
(490, '22FG000090', '/img/050841626.png'),
(491, '21CC000004', '/img/753521249.png'),
(493, '21CC000004', '/img/25833101.png'),
(494, '21CC000004', '/img/533962316.png'),
(495, '21UT000030', '/img/957149663.png'),
(497, '21UT000030', '/img/69378593.png'),
(498, '21UT000030', '/img/342986884.png'),
(512, '22LM000001', '/img/832538973.png'),
(513, '22LM000001', '/img/038694700.png'),
(515, '22LM000001', '/img/86526769.png'),
(516, '22LM000001', '/img/080985711.png'),
(517, '22LM000001', '/img/993609385.png'),
(518, '22LM000001', '/img/081601045.png'),
(519, '22LM000001', '/img/13474464.png'),
(520, '22LM000001', '/img/643613533.png'),
(521, '22LM000001', '/img/021955215.png'),
(523, '22LM000001', '/img/012001491.png'),
(524, '22LM000001', '/img/995279261.png'),
(525, '22LM000001', '/img/430264866.png'),
(526, '21TS000060', '/img/474196838.png'),
(527, '21TS000060', '/img/73586276.png'),
(528, '21TS000022', '/img/124773633.png'),
(529, '21TS000022', '/img/562995895.png'),
(530, '21TS000080', '/img/590601385.png'),
(531, '21TS000080', '/img/331104157.png'),
(533, '21TS000080', '/img/233616868.png'),
(534, '21TS000080', '/img/079063450.png'),
(535, '24TS000400', '/img/746355819.png'),
(536, '24TS000400', '/img/622075300.png'),
(537, '24TS000400', '/img/182347452.png'),
(538, '24TS000500', '/img/273181344.png'),
(539, '24TS000500', '/img/014007986.png'),
(540, '24TS000500', '/img/083828586.png'),
(544, '24TT000100', '/img/065952988.png'),
(545, '24TT000100', '/img/086221821.png'),
(546, '24TT000100', '/img/07197688.png'),
(547, '24TT000010', '/img/71191519.png'),
(548, '24TT000010', '/img/661893868.png'),
(549, '24TT000010', '/img/373774800.png'),
(550, '24TT000010', '/img/26741181.png'),
(551, '21TS000300', '/img/268049356.png'),
(552, '21TS000300', '/img/34264035.png'),
(553, '21TS000300', '/img/19299914.png'),
(558, '21ST000054', '/img/194542970.png'),
(559, '21ST000054', '/img/79888802.png'),
(560, '21ST000054', '/img/693973718.png'),
(561, '21ST000010', '/img/91459119.png'),
(562, '21ST000010', '/img/196727974.png'),
(563, '21ST000010', '/img/249397509.png'),
(564, '21ST000010', '/img/323563045.png'),
(565, '21TT000701', '/img/88063344.png'),
(566, '21TT000701', '/img/455441383.png'),
(567, '21TT000701', '/img/117493849.png'),
(568, '21CP000966', '/img/886712823.png'),
(569, '21CP000966', '/img/697586898.png'),
(570, '21CP000966', '/img/724533178.png'),
(571, '24TC000850', '/img/261608437.png'),
(572, '24TC000850', '/img/368867448.png'),
(573, '24TC000850', '/img/365709902.png'),
(574, '21TC000060', '/img/829019903.png'),
(575, '21TC000060', '/img/928971086.png'),
(576, '21TC000060', '/img/410078927.png'),
(577, '21ST000320', '/img/783687191.png'),
(578, '21ST000320', '/img/932684947.png'),
(579, '21ST000320', '/img/243305922.png'),
(582, '21SF000001', '/img/390454836.png'),
(583, '21SF000001', '/img/859492344.png'),
(584, '21SF000001', '/img/292381366.png'),
(585, '21SF000001', '/img/147062493.png'),
(586, '21TB000001', '/img/867426452.png'),
(587, '21TB000001', '/img/831914897.png'),
(588, '21TB000001', '/img/78731376.png'),
(589, '21ST000405', '/img/758249893.png'),
(590, '21ST000405', '/img/77168778.png'),
(591, '21ST000405', '/img/883375249.png'),
(592, '21ST000405', '/img/245007430.png'),
(593, '21TF000400', '/img/758925167.jpg'),
(594, '21TF000400', '/img/566687896.jpg'),
(595, '21TC000200', '/img/457068739.jpg'),
(596, '21TC000200', '/img/068867137.jpg'),
(597, '21TC000200', '/img/149236723.jpg'),
(598, '21TC000050', '/img/499499195.jpg'),
(599, '22FO000680', '/img/544947349.png'),
(600, '22FO000680', '/img/555862456.png'),
(601, '22FO000677', '/img/12909235.png'),
(602, '21TL000300', '/img/267482830.png'),
(603, '21TL000300', '/img/676539200.png'),
(604, '21TL000300', '/img/822932279.png'),
(607, '21TL000070', '/img/341066100.png'),
(608, '21TL000070', '/img/689386182.png'),
(610, '21TL000070', '/img/976205123.png'),
(611, '21TL000055', '/img/862932788.png'),
(612, '21TL000500', '/img/218751973.png'),
(613, '21TL000500', '/img/548152528.png'),
(614, '21TL000500', '/img/993063836.png'),
(615, '22EO000600', '/img/245195630.jpg'),
(616, '22EO000600', '/img/911849577.jpg'),
(617, '21SP000100', '/img/269766331.png'),
(618, '21SP000100', '/img/589029745.png'),
(619, '21SP000100', '/img/095818120.png'),
(620, '21SP000010', '/img/925676640.png'),
(621, '21SP000010', '/img/016447409.png'),
(622, '21SP000010', '/img/396349896.png'),
(623, '21SM000010', '/img/172443076.png'),
(624, '21SM000010', '/img/06824797.png'),
(625, '21SM000010', '/img/46404575.png'),
(626, '21SG000010', '/img/480921249.png'),
(627, '21SG000010', '/img/371929130.png'),
(628, '21SG000010', '/img/293201713.png'),
(631, '21CV000451', '/img/844781610.png'),
(632, '21CV000451', '/img/564907030.png'),
(633, '21CV000451', '/img/688963419.png'),
(634, '21CV000200', '/img/11767915.png'),
(635, '21ST000910', '/img/272287332.jpg'),
(636, '21ST000910', '/img/953968074.jpg'),
(637, '21ST000910', '/img/937623633.jpg'),
(639, '21RD001001', '/img/57302725.jpg'),
(640, '21RD001001', '/img/368226750.jpg'),
(641, '21RD001001', '/img/493547785.jpg'),
(642, '21RD001001', '/img/343608151.jpg'),
(643, '21RD000011', '/img/63806862.jpg'),
(644, '21RD000011', '/img/823216765.jpg'),
(645, '21RD000011', '/img/719298348.jpg'),
(646, '21RD000013', '/img/857458938.jpg'),
(647, '21RD000013', '/img/532067377.jpg'),
(648, '21RD000014', '/img/941581175.jpg'),
(649, '21RD000014', '/img/390331303.jpg'),
(650, '21RD000014', '/img/344447103.jpg'),
(651, '21RD000040', '/img/021584893.jpg'),
(652, '21RD000040', '/img/394739193.jpg'),
(653, '21RD000040', '/img/741705159.jpg'),
(655, '21RD000003', '/img/082698007.jpg'),
(656, '21RD000003', '/img/527101376.jpg'),
(657, '21RD000030', '/img/312735961.jpg'),
(658, '21RD000030', '/img/464972693.jpg'),
(659, '21RD000030', '/img/344046357.jpg'),
(660, '24ST000950', '/img/014041990.jpg'),
(661, '24ST000950', '/img/769153877.jpg'),
(662, '24ST000950', '/img/277671053.jpg'),
(663, '21LN000170', '/img/14561750.jpg'),
(664, '21LN000170', '/img/31687951.jpg'),
(665, '21LN000170', '/img/648766379.jpg'),
(666, '22RI000020', '/img/566462181.png'),
(667, '22RI000001', '/img/077114396.png'),
(668, '22CB000101', '/img/216687109.png'),
(669, '22CB000101', '/img/540254862.png'),
(670, '22CB000101', '/img/158406615.png'),
(671, '22CB000101', '/img/659746965.png'),
(672, '22CB000101', '/img/289458950.png'),
(673, '22CB000101', '/img/139661750.png'),
(674, '22GP000302', '/img/091787763.jpg'),
(675, '22GP000302', '/img/699082258.jpg'),
(676, '22GP000302', '/img/717798076.jpg'),
(679, '22FC000751', '/img/836756790.jpg'),
(680, '22FC000751', '/img/820351902.jpg'),
(681, '22FC000751', '/img/47424455.jpg'),
(682, '22FC000950', '/img/834357196.png'),
(683, '22FC000950', '/img/612725177.png'),
(684, '22FC000950', '/img/038215365.png'),
(685, '22FC000941', '/img/06661926.png'),
(686, '22FC000941', '/img/882084639.png'),
(687, '22FC000941', '/img/290497923.png'),
(688, '22FC000819', '/img/051296610.jpg'),
(689, '22FC000819', '/img/825857420.jpg'),
(690, '22FC000819', '/img/392527236.jpg'),
(691, '22FC000860', '/img/487782350.jpg'),
(692, '22FC000860', '/img/019738237.jpg'),
(693, '22FC000860', '/img/797183317.jpg'),
(694, '22FC000611', '/img/480369890.jpg'),
(700, '22FC000631', '/img/640087332.jpg'),
(701, '22FC000631', '/img/434455030.jpg'),
(702, '22FC000631', '/img/561564074.jpg'),
(703, '22FC000611', '/img/768645154.jpg'),
(704, '22FC000611', '/img/935182417.jpg'),
(705, '22FC000956', '/img/850788510.png'),
(706, '22FC000956', '/img/675316533.png'),
(707, '22FC000956', '/img/438873166.png'),
(708, '22FC000956', '/img/750572238.png'),
(709, '21TS000025', '/img/989967617.png'),
(710, '21TS000025', '/img/289097939.png'),
(711, '21TS000025', '/img/193747440.png'),
(712, '22GO000201', '/img/262998918.jpg'),
(713, '22GO000201', '/img/458787248.jpg'),
(714, '22GO000201', '/img/894165659.jpg'),
(715, '22GO000111', '/img/828692975.jpg'),
(716, '22GO000111', '/img/821866246.jpg'),
(717, '22FC000443', '/img/250686139.jpg'),
(718, '22FC000443', '/img/732482377.jpg'),
(719, '22FC000443', '/img/141921392.jpg'),
(720, '22FC000445', '/img/784557777.jpg'),
(721, '22FC000445', '/img/616717926.jpg'),
(722, '22FC000445', '/img/35808845.jpg'),
(723, '22FE000200', '/img/655647247.jpg'),
(724, '22FE000210', '/img/885946192.jpg'),
(725, '22FE000210', '/img/587549242.jpg'),
(726, '21TS000151', '/img/556712792.png'),
(727, '21TS000151', '/img/526136255.png'),
(728, '22FA000008', '/img/283187545.png'),
(729, '22FA000008', '/img/748129879.png'),
(730, '22FO000360', '/img/582791544.png'),
(731, '22FO000360', '/img/14903729.png'),
(732, '22FO000751', '/img/475659356.png'),
(733, '22FO000751', '/img/158366392.png'),
(734, '22FO000750', '/img/092744201.png'),
(735, '22FO000750', '/img/370112629.png'),
(736, '22FO000786', '/img/65732197.png'),
(737, '22FO000786', '/img/241418104.png'),
(738, '22TC000101', '/img/243724058.png'),
(739, '22TC000101', '/img/523092632.png'),
(740, '22TC000100', '/img/868448992.png'),
(741, '22TC000100', '/img/418891358.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensambles`
--

DROP TABLE IF EXISTS `ensambles`;
CREATE TABLE IF NOT EXISTS `ensambles` (
  `ensamble_id` int(5) NOT NULL AUTO_INCREMENT,
  `ensamble_base` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ensamble_complemento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ensamble_id`),
  KEY `ensamble_base` (`ensamble_base`),
  KEY `ensamble_complemento` (`ensamble_complemento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=339 ;

--
-- Volcado de datos para la tabla `ensambles`
--

INSERT INTO `ensambles` (`ensamble_id`, `ensamble_base`, `ensamble_complemento`, `producto_imagen`) VALUES
(57, '22SM000195', '21TS000201', '/img/167397725.png'),
(58, '22SM000195', '21ST000204', '/img/515424914.png'),
(59, '22SM000195', '24TC000700', '/img/641989567.png'),
(60, '22SM000190', '24TC000733', '/img/421787716.png'),
(61, '22SM000245', '24TC000733', '/img/110613969.png'),
(62, '22SM000246', '24TC000700', '/img/042718543.png'),
(63, '22SM000246', '21ST000204', '/img/234935295.png'),
(64, '22SM000246', '21TS000201', '/img/371423953.png'),
(65, '22SM000050', '21TS000201', '/img/054269092.png'),
(66, '22SM000050', '21ST000204', '/img/768209811.png'),
(67, '22SM000050', '24TC000700', '/img/297854397.png'),
(68, '22SM000070', '24TC000733', '/img/444807417.png'),
(69, '22SM000351', '24TC000700', '/img/988896401.png'),
(70, '22SM000351', '21ST000204', '/img/54109900.png'),
(71, '22SM000351', '21TS000201', '/img/062144356.png'),
(72, '22SM000360', '24TC000733', '/img/072922535.png'),
(73, '22SM000120', '24TC000700', '/img/910661599.png'),
(74, '22SM000120', '21ST000204', '/img/871395761.png'),
(75, '22SM000120', '21TS000201', '/img/629751908.png'),
(76, '22SM000130', '24TC000733', '/img/787709534.png'),
(77, '22SM000750', '24TC000700', '/img/563011528.png'),
(78, '22SM000750', '21ST000204', '/img/33597144.png'),
(79, '22SM000750', '21TS000201', '/img/86047425.png'),
(80, '22SM000080', '21TS000201', '/img/731709949.png'),
(81, '22SM000080', '21ST000204', '/img/198619912.png'),
(82, '22SM000080', '24TC000700', '/img/01512767.png'),
(83, '22SM000081', '24TC000733', '/img/053833746.png'),
(84, '22SM000261', '24TC000733', '/img/616639100.png'),
(85, '22SM000010', '24TC000700', '/img/850239681.png'),
(86, '22SM000010', '21ST000204', '/img/799824982.png'),
(87, '22SM000010', '21TS000201', '/img/19513857.png'),
(88, '22SM000030', '24TC000733', '/img/913451775.png'),
(89, '22SM000342', '24TC000733', '/img/624883733.png'),
(90, '22SM000340', '24TC000700', '/img/874672370.png'),
(91, '22SM000340', '21TS000201', '/img/749807380.png'),
(92, '22SM000340', '21ST000204', '/img/269787533.png'),
(93, '22MO000091', '24TC000733', '/img/570644889.png'),
(94, '22SM000090', '24TC000700', '/img/631109005.png'),
(95, '22SM000090', '21ST000204', '/img/773776125.png'),
(96, '22SM000090', '21TS000201', '/img/75595135.png'),
(97, '22SM000232', '21TS000201', '/img/321899450.png'),
(98, '22SM000232', '21ST000204', '/img/057043212.png'),
(99, '22SM000232', '24TC000700', '/img/644993816.png'),
(100, '21TC0000271', '24TC000733', '/img/58497463.png'),
(102, '22VS000040', '24TC000733', '/img/181585920.jpg'),
(103, '22SM000380', '24TC000733', '/img/546713077.png'),
(104, '22SM000630', '24TC000733', '/img/099226443.png'),
(105, '22SM000635', '24TC000700', '/img/549868470.png'),
(106, '22SM000635', '21ST000204', '/img/791543735.png'),
(107, '22SM000635', '21TS000201', '/img/33165406.png'),
(108, '22SM000161', '21TS000201', '/img/356721001.png'),
(109, '22SM000161', '21ST000204', '/img/818565120.png'),
(110, '22SM000161', '24TC000700', '/img/869135247.png'),
(111, '22SM000180', '24TC000733', '/img/081235538.png'),
(112, '22SM000220', '24TC000733', '/img/184173220.png'),
(113, '22SM000242', '24TC000700', '/img/145654937.png'),
(114, '22SM000242', '21ST000204', '/img/133117236.png'),
(115, '22SM000242', '21TS000201', '/img/338615822.png'),
(116, '22VS000030', '24TC000733', '/img/995837978.jpg'),
(117, '22VS000050', '24TC000733', '/img/170522081.gif'),
(118, '22VS000010', '24TC000733', '/img/861888811.gif'),
(119, '22FC000670', '21FT000300', '/img/139328495.png'),
(120, '22BP000750', '25TS000003', '/img/698341339.png'),
(121, '22BP000790', '25TS000003', '/img/09230464.png'),
(123, '22FF000910', '24TE000681', '/img/139937746.png'),
(124, '22CB000101', '21TS000151', '/img/183248879.png'),
(125, '22BP000975', '25TS000003', '/img/847288937.png'),
(126, '22BP000970', '25TS000003', '/img/153667900.png'),
(127, '22BP000763', '25TS000003', '/img/33807902.jpg'),
(128, '22BP000401', '25TS000003', '/img/884697441.jpg'),
(129, '22BP000206', '25TS000003', '/img/286315142.jpg'),
(130, '22BP000300', '25TS000003', '/img/8478839.png'),
(131, '22BP000430', '25TS000003', '/img/923317212.png'),
(132, '22FF000705', '25TS000003', '/img/417327274.png'),
(133, '22BP000620', '25TS000003', '/img/711787125.png'),
(134, '22FF000700', '25TS000003', '/img/586071487.png'),
(137, '22BP000420', '25TS000003', '/img/875863392.png'),
(138, '22FF000279', '25TS000003', '/img/184717190.png'),
(140, '22IS000005', '25TS000003', '/img/317906836.png'),
(141, '22BP000357', '25TS000003', '/img/652267510.png'),
(142, '22FF000650', '25TS000003', '/img/072278130.png'),
(143, '22FF000665', '25TS000003', '/img/117423117.png'),
(144, '22FF000260', '25TS000003', '/img/626871949.png'),
(145, '22BP000426', '25TS000003', '/img/037298999.png'),
(146, '22FF000631', '25TS000003', '/img/29423806.png'),
(147, '22FF000635', '25TS000003', '/img/467163873.png'),
(148, '22FF000641', '25TS000003', '/img/165157737.png'),
(149, '22FF000645', '25TS000003', '/img/191936919.png'),
(150, '22FF000606', '25TS000003', '/img/853923016.png'),
(151, '22FF000256', '25TS000003', '/img/89764801.png'),
(152, '22BP000240', '25TS000003', '/img/473866095.png'),
(153, '22FF000610', '25TS000003', '/img/18673108.png'),
(154, '22BP000710', '25TS000003', '/img/259999248.png'),
(155, '22BP000720', '25TS000003', '/img/099856815.png'),
(156, '22BP000441', '25TS000003', '/img/637947348.png'),
(160, '22BP000850', '21TC000060', '/img/788159394.png'),
(161, '22FF000685', '21TC000060', '/img/22235254.png'),
(162, '22FF000675', '21TC000060', '/img/069983304.png'),
(163, '22BP000520', '25TS000003', '/img/12898475.png'),
(164, '22BP000522', '25TS000003', '/img/623029840.png'),
(165, '22BP000305', '25TS000003', '/img/140532401.png'),
(166, '22BP000490', '25TS000003', '/img/74188674.png'),
(167, '22BP000495', '25TS000003', '/img/596132130.png'),
(168, '22BP000500', '25TS000003', '/img/622652946.png'),
(169, '22BP000506', '25TS000003', '/img/852464916.png'),
(170, '22BP000525', '25TS000003', '/img/172711433.png'),
(171, '22BP000655', '25TS000003', '/img/086657824.png'),
(172, '22BP000530', '25TS000003', '/img/319657461.png'),
(173, '22FF000750', '25TS000003', '/img/478594456.png'),
(174, '22BP000650', '25TS000003', '/img/860034245.png'),
(176, '22FF000770', '25TS000003', '/img/033084972.png'),
(177, '22FF000290', '25TS000003', '/img/746138417.png'),
(182, '22FF000825', '25TS000003', '/img/148048462.png'),
(183, '22FF000806', '25TS000003', '/img/025883154.png'),
(184, '22FF000502', '25TS000003', '/img/344622595.png'),
(185, '22FF000565', '25TS000003', '/img/862723184.png'),
(186, '22FF000819', '25TS000003', '/img/845946672.png'),
(187, '22FF000801', '25TS000003', '/img/339606297.png'),
(188, '22FF000543', '25TS000003', '/img/873802905.png'),
(189, '22FF000550', '25TS000003', '/img/117718687.png'),
(191, '22ES000501', '21ST000502', '/img/692298647.jpg'),
(192, '22FO000550', '24TC000700', '/img/145804410.jpg'),
(193, '22FO000550', '21ST000204', '/img/363503911.jpg'),
(194, '22FO000550', '21TS000201', '/img/541786101.jpg'),
(195, '22CB000350', '24TC000700', '/img/7306830.jpg'),
(196, '22CB000350', '21ST000204', '/img/292964431.jpg'),
(197, '22CB000350', '21TS000201', '/img/886621003.jpg'),
(199, '22CB000251', '24TC000733', '/img/276897475.jpg'),
(201, '22FG000018', '21CV000153', '/img/497877407.jpg'),
(202, '22FG000010', '21CV000153', '/img/069956047.jpg'),
(203, '22PS000100', '21CV000031', '/img/797901014.jpg'),
(204, '22PS000200', '21CV000050', '/img/228429607.jpg'),
(207, '22EO000800', '21ST000502', '/img/659799054.jpg'),
(208, '22ES000471', '21ST000502', '/img/990321370.jpg'),
(209, '22EO000400', '21ST000502', '/img/082603020.jpg'),
(210, '22EO000416', '21ST000502', '/img/917232502.jpg'),
(211, '22EO000700', '21ST000502', '/img/116368799.jpg'),
(212, '22EO000710', '21ST000502', '/img/033682230.jpg'),
(213, '21AN000001', '24TC000733', '/img/99949677.png'),
(214, '22FG000030', '21CV000153', '/img/04563123.jpg'),
(215, '22FG000050', '21CV000153', '/img/515989554.jpg'),
(216, '22FG000050', '21TE000900', '/img/242211685.jpg'),
(217, '22FG000030', '21TE000900', '/img/261839931.jpg'),
(218, '22FG000120', '21CV000031', '/img/080383132.jpg'),
(219, '22FG000121', '21CV000031', '/img/452391021.jpg'),
(220, '22FG000101', '21CV000026', '/img/164817314.jpg'),
(221, '22FG000100', '21CV000026', '/img/115906931.jpg'),
(222, '22FG000020', '21TE000905', '/img/821358235.jpg'),
(223, '22FG000021', '21TE000905', '/img/670784734.jpg'),
(224, '22FG000041', '21TE000950', '/img/77751325.jpg'),
(225, '22RI000010', '21TR000012', '/img/944352504.png'),
(226, '22RI000030', '21TR000330', '/img/540028835.png'),
(227, '22RI000030', '21TR000500', '/img/54073644.png'),
(228, '22RI000001', '21TR000160', '/img/841586895.png'),
(229, '22RI000020', '21TR000021', '/img/499092982.png'),
(230, '22FC000591', '25TS000003', '/img/533563889.jpg'),
(231, '22FC000590', '25TS000003', '/img/68792280.jpg'),
(232, '22FE000053', '24TC000501', '/img/374521158.png'),
(233, '22FE000071', '24TC000501', '/img/47221368.png'),
(234, '22BP000210', '25TS000003', '/img/93326730.png'),
(238, '21UT000015', '21TV000020', '/img/176315272.png'),
(239, '21UT000030', '21TV000020', '/img/819383837.png'),
(241, '21UT000010', '21TV000020', '/img/87042217.png'),
(244, '24PE000400', '24TP000400', '/img/276085541.jpg'),
(245, '24PE000010', '24TP000006', '/img/81801821.jpg'),
(246, '24PE000510', '24TP000510', '/img/347608732.jpg'),
(247, '24PE000600', '24TP000600', '/img/11546455.jpg'),
(248, '24PE000214', '24TP000237', '/img/754082096.jpg'),
(249, '24PE000460', '21CV000079', '/img/089776416.jpg'),
(250, '22FG000090', '21CV000050', '/img/591678417.png'),
(251, '22PS000300', '21CV000150', '/img/068135305.png'),
(252, '21CC000004', '21CC000009', '/img/074394796.png'),
(253, '22FC003170', '25TS000003', '/img/555486173.png'),
(261, '22LM000001', '21FT000411', '/img/922105775.png'),
(262, '22FC164005', '21TC000050', '/img/763747932.jpg'),
(263, '22FC000751', '21TC000050', '/img/84598927.jpg'),
(264, '22BP000180', '25TS000003', '/img/424788349.jpg'),
(265, '22BP000351', '25TS000003', '/img/210273561.jpg'),
(266, '22BP000440', '25TS000003', '/img/89239798.jpg'),
(267, '22RI000001', '25EE000023', '/img/766932377.png'),
(268, '22RI000020', '25EE000023', '/img/962502713.png'),
(269, '22EO000550', '21ST000502', '/img/399667229.jpg'),
(270, '22EO000560', '21ST000502', '/img/79123585.jpg'),
(271, '22EO000570', '21ST000502', '/img/880116013.jpg'),
(272, '22FO000677', '21ST000320', '/img/423878074.png'),
(273, '22FO000680', '21ST000320', '/img/996953749.png'),
(274, '22EO000600', '21SP000100', '/img/073577195.jpg'),
(275, '22GP000302', '21TC000050', '/img/141663803.jpg'),
(276, '22GP000302', '21TC000200', '/img/42802563.jpg'),
(278, '22GO000455', '21TC000200', '/img/846416210.jpg'),
(279, '22GO000483', '21TC000200', '/img/434474385.jpg'),
(280, '22GO000402', '21TC000200', '/img/866932281.jpg'),
(281, '22FC000941', '21CV000451', '/img/480409815.png'),
(282, '22FC000950', '21CV000451', '/img/283393103.png'),
(283, '22FC000959', '21CV000451', '/img/919944567.png'),
(284, '22FC000956', '21ST000101', '/img/724566708.png'),
(285, '22FC000956', '24TC000841', '/img/733795311.png'),
(286, '22FC000966', '21SG000010', '/img/410731082.jpg'),
(287, '22FC000819', '21SG000010', '/img/256378185.jpg'),
(288, '22FC000860', '21SG000010', '/img/02636021.jpg'),
(289, '22FC000611', '21SP000010', '/img/327027131.jpg'),
(290, '22FC000631', '21SP000010', '/img/64710519.jpg'),
(291, '22FC000970', '21TS000025', '/img/84456418.png'),
(292, '22FC000976', '21TS000025', '/img/627117982.jpg'),
(293, '22GO000201', '21TS000025', '/img/197898425.jpg'),
(294, '22GO000111', '21TS000025', '/img/790831126.jpg'),
(295, '22TC000051', '21TS000025', '/img/014023756.jpg'),
(296, '22FP000301', '21CV000451', '/img/426009275.jpg'),
(297, '22BP000430', '21TC000200', '/img/570869466.png'),
(298, '22BP000430', '21TC000050', '/img/590912034.png'),
(299, '22BP000300', '21TC000050', '/img/05956594.png'),
(300, '22BP000300', '21TC000200', '/img/088406538.png'),
(301, '22FC000445', '21SP000010', '/img/239481420.jpg'),
(302, '22FC000443', '21SP000010', '/img/671748606.jpg'),
(303, '22FC000413', '21SM000010', '/img/281598770.jpg'),
(304, '22FC000445', '21ST000204', '/img/350921373.jpg'),
(305, '22FC000443', '21ST000204', '/img/652189248.jpg'),
(306, '22FC000443', '24TC000700', '/img/642002940.jpg'),
(307, '22FC000445', '24TC000700', '/img/533557889.jpg'),
(308, '22FE000200', '21TS000080', '/img/249716063.jpg'),
(309, '22FE000210', '21TS000080', '/img/710211878.jpg'),
(310, '22FA000011', '25TS000003', '/img/080345017.png'),
(311, '22FA000015', '25TS000003', '/img/732807996.png'),
(312, '22FA000022', '25TS000003', '/img/55017184.png'),
(313, '22FA000030', '25TS000003', '/img/172786540.png'),
(314, '22FA000023', '21TS000060', '/img/434409841.png'),
(315, '22FA000039', '21TS000060', '/img/055335001.png'),
(316, '22FE000150', '25TS000003', '/img/014915850.png'),
(317, '22FE000840', '25TS000003', '/img/434197312.jpg'),
(318, '22FE000786', '25TS000003', '/img/1866855.jpg'),
(319, '22FE000860', '25TS000003', '/img/435977524.jpg'),
(320, '22FE000870', '25TS000003', '/img/657657039.jpg'),
(321, '22FC000149', '25TS000003', '/img/08540170.png'),
(322, '22FC000146', '25TS000003', '/img/41694263.png'),
(323, '22FA000008', '25TS000003', '/img/087952710.png'),
(324, '22EC000031', '25TS000003', '/img/798995444.png'),
(325, '22FO000360', '25TS000003', '/img/251118472.png'),
(326, '22FC000145', '25TS000003', '/img/87504828.png'),
(328, '22FO000786', '24TC000850', '/img/654391561.png'),
(329, '22FO000790', '24TC000850', '/img/390909646.png'),
(330, '22FO000791', '24TC000850', '/img/463317180.png'),
(331, '22FO000750', '21ST000101', '/img/23362579.png'),
(332, '22FO000751', '21ST000101', '/img/059717825.png'),
(333, '22TC000101', '21TL000070', '/img/911131647.png'),
(334, '22TC000100', '21TL000070', '/img/968401091.png'),
(335, '22TC000100', '24TT000010', '/img/161563890.png'),
(336, '22TC000101', '24TT000010', '/img/485156112.png'),
(337, '22FA000042', '21TS000060', '/img/452465910.png'),
(338, '22FA000026', '21TS000060', '/img/210506966.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `estado_id` int(5) NOT NULL AUTO_INCREMENT,
  `estado_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `estado_nombre`) VALUES
(1, 'Abierto'),
(2, 'Cerrado'),
(3, 'En Proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faldas`
--

DROP TABLE IF EXISTS `faldas`;
CREATE TABLE IF NOT EXISTS `faldas` (
  `falda_id` int(5) NOT NULL AUTO_INCREMENT,
  `falda_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `falda_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`falda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `faldas`
--

INSERT INTO `faldas` (`falda_id`, `falda_nombre_e`, `falda_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Corta ', 'Short'),
(3, 'Larga', 'Long'),
(4, 'Media ', 'Medium');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flags`
--

DROP TABLE IF EXISTS `flags`;
CREATE TABLE IF NOT EXISTS `flags` (
  `flag_id` int(5) NOT NULL AUTO_INCREMENT,
  `flag_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `flag_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `flag_admin_file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `front_file` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`flag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `flags`
--

INSERT INTO `flags` (`flag_id`, `flag_nombre_e`, `flag_nombre_i`, `flag_admin_file`, `front_file`) VALUES
(1, 'N/A', 'N/A', 'N/A', 'N/A'),
(2, 'Servicios', 'Services', 'admServicios', 'acercade_nosotros.php'),
(3, 'Historia', 'History', 'admHistoria', 'acercade_nosotros.php'),
(4, 'Sistema de Calidad', 'Quality System', 'admSgc', 'acercade_nosotros.php'),
(5, 'Instalaciones', 'Offices', 'admOficinas', 'acercade_nosotros.php'),
(6, 'Cuidado Personal', 'Personal Care', 'admCuidadoPersonal', 'mercados.php'),
(7, 'Farmaceutica', 'Pharmaceutical', 'admFarmaceutica', 'mercados.php'),
(8, 'Industrias', 'Industries', 'admIndustrias', 'mercados.php'),
(9, 'Alimentos', 'Food', 'admAlimentos', 'mercados.php'),
(10, 'Ingenieria de Producto y Diseño', 'Product Engineering and Design	', 'ingenieriaProductoDiseno', 'ingenieria_productodiseno.php'),
(11, 'Responsabilidad Social', 'Social Responsibility', 'responsabilidadSocial', 'responsabilidad_social.php'),
(12, 'Lanzamientos', 'Reliases', 'admLanzamientos', 'index.php'),
(13, 'Puntos de Venta', 'Branches', 'admPuntos', 'puntos_venta.php'),
(14, 'Convocatorias', 'Calls', 'admConvocatorias', 'trabaje_connosotros.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas`
--

DROP TABLE IF EXISTS `formas`;
CREATE TABLE IF NOT EXISTS `formas` (
  `forma_id` int(5) NOT NULL AUTO_INCREMENT,
  `forma_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `forma_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `forma_imagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`forma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `formas`
--

INSERT INTO `formas` (`forma_id`, `forma_nombre_e`, `forma_nombre_i`, `forma_imagen`) VALUES
(1, 'Cilindrica', 'Cylindrical', ''),
(2, 'Cilindrico', 'Cylindrical', ''),
(3, 'Cil&iacute;ndrico Bala', 'Cylindrical Bullet', ''),
(4, 'Circular ', 'Circulate', ''),
(5, 'Conico', 'Conical', ''),
(6, 'Cuadrado', 'Squared', ''),
(7, 'Cuadrada', 'Squared', ''),
(8, 'Elico', 'Elico', ''),
(9, 'El&iacute;ptico ', 'Elliptic', ''),
(10, 'Esferica', 'Spherical', ''),
(11, 'Esferico', 'Spheric ', ''),
(12, 'Oval ', 'Oval ', ''),
(13, 'Ovalado ', 'Oval shaped', ''),
(14, 'Ovalado ', 'Oval shaped', ''),
(15, 'Oblong', 'Oblong', ''),
(16, 'Plano', 'Plane', ''),
(17, 'Plana', 'Plane', ''),
(18, 'Rect&aacute;ngular', 'Rect&aacute;ngular', ''),
(19, 'Triangular', 'Triangulate', ''),
(20, 'Tubo', 'Tube', ''),
(21, 'Conica', 'Conical', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

DROP TABLE IF EXISTS `idiomas`;
CREATE TABLE IF NOT EXISTS `idiomas` (
  `idioma_id` int(5) NOT NULL AUTO_INCREMENT,
  `idioma_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idioma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`idioma_id`, `idioma_nombre`) VALUES
(1, 'Español'),
(2, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `imagen_id` int(5) NOT NULL AUTO_INCREMENT,
  `imagen_titulo_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_descripcion_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_imagen_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_titulo_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_descripcion_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_imagen_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `flag_id` int(5) NOT NULL,
  `imagen_enlace_e` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_enlace_i` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`imagen_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `flag_id` (`flag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=345 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`imagen_id`, `imagen_titulo_e`, `imagen_descripcion_e`, `imagen_imagen_e`, `imagen_titulo_i`, `imagen_descripcion_i`, `imagen_imagen_i`, `seccion_id`, `flag_id`, `imagen_enlace_e`, `imagen_enlace_i`) VALUES
(74, 'MEDIO SOSTENIBLE (FUNDAC)', '<p>&nbsp;Protecion de nuestro Entorno y nuestros recursos&nbsp;</p>', '/img/594442114.jpg', 'SUSTAINABLE ENVIRONMENT (FUNDAC)', '<p>EVALUATING OUR ENVIRONMENT PROTECTION OUR RESOURCES</p>', '/img/844299128.jpg', 4, 11, '', ''),
(81, '30 AÃ‘OS  ', '<p>&nbsp;CALIDAD, SERVICIO E INNOVACI&Oacute;N</p>', '/img/959404908.png', '30 YEARS', '<p>QUALITY, SERVICE AND INNOVATION</p>', '/img/64926271.png', 5, 1, 'http://www.intecplast.com.php53-2.dfw1-2.websitetestlink.com/ingenieria_productodiseno.php', ''),
(91, 'BOLILLAS ROLL-ON ', '<p>&nbsp;ESFERAS ROLL-ON ASEGURAN UN ADECUADO COMPORTAMIENTO EN EL LLENADO Y DISPENSADO</p>', '/img/074206649.png', 'ROLL ON BALLS', '<p>HIGH QUALITY ROLL ON BALLS FOR ALL!</p>', '/img/040975391.png', 5, 1, '', 'http:\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\www.bendicionabundante.org\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'),
(95, 'TERMOENCOGIDO', '<p>EQUIPO DE SOPLADO HDPE PARA ENVASES FARMAC&Eacute;UTICOS&nbsp;</p>', '/img/367762908.jpg', 'THERMO PROCESS', '<p>PROCESS THAT MAKES PLASTIC PRODUCTS</p>', '/img/283905767.jpg', 5, 1, 'http://www.google.com/', 'http://www.eltiempo.com/'),
(129, 'DISEÃ‘O DE  PRODUCTO ', '<p>Conceptualizacion de las &nbsp;ideas y &nbsp;requerimientos del cliente&nbsp;</p>', '/img/458394505.jpg', 'PRODUCT DESIGN', '<p>Conceptualization of ideas and customer requirements</p>', '/img/267428203.jpg', 3, 10, '', ''),
(131, 'CENTRO DE MECANIZADO  CNC', '<p>Mano factura asistida por computador &nbsp;CAM&nbsp;</p>', '/img/077522792.jpg', 'CNC MACHINING CENTER', '<p>Hand bill CAM computer aided</p>', '/img/177912432.jpg', 3, 10, '', ''),
(153, 'No title', 'No Description', '/img/013441592.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(154, 'No title', 'No Description', '/img/32466838.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(155, 'No title', 'No Description', '/img/536172562.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(156, 'No title', 'No Description', '/img/870557660.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(157, 'No title', 'No Description', '/img/495126945.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(158, 'No title', 'No Description', '/img/763792017.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(159, 'No title', 'No Description', '/img/196768215.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(160, 'No title', 'No Description', '/img/519709535.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(161, 'No title', 'No Description', '/img/442075167.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(164, 'No title', 'No Description', '/img/162272059.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(165, 'No title', 'No Description', '/img/945415276.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(167, 'No title', 'No Description', '/img/067554067.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(168, 'No title', 'No Description', '/img/548088522.jpg', 'No title', 'No Description', '', 9, 1, '', ''),
(186, 'MEDIDOR OPTICO', '<p>&nbsp;<span style="font-family: Calibri, sans-serif; font-size: 11pt; line-height: 115%;">M&aacute;quina de medici&oacute;n y Visi&oacute;n de longitud efectiva y precisi&oacute;n &oacute;ptica</sp', '/img/324763755.jpg', 'OPTICAL METER', '<p>Vision Measuring Machine and effective length and optical precision</p>', '/img/996737826.jpg', 3, 10, '', ''),
(188, 'MI MAMI ES UNA PILA ', '<p>Comprometidos en capacitar a todas las Mamitas cabeza de hogar</p>', '/img/347684498.jpg', 'MY MOM IS MY HERO', '<p>&nbsp;COMMITTED TO SUPPORT AND TRAINING TO ALL OF OUR ORGANIZATION MAMITAS</p>', '/img/254847013.jpg', 4, 11, '', ''),
(195, 'PROCESOS DE PRODUCCION', '<p>Proceso de Moldes &nbsp;PET-PVC-HPDE-PP de envases y tapas&nbsp;</p>', '/img/827049486.jpg', 'PRODUCTION PROCESSES', '<p>Preform Moulds Process and materials such as PET-PVC-HDPE bottles and caps</p>', '/img/458817396.jpg', 3, 10, '', ''),
(202, 'PRODUCTO TERMINADO', '<p>Producto &nbsp;terminado con Funda,Serigrafia y Etiquetado&nbsp;</p>', '/img/55691338.jpg', 'FINISHED PRODUCT', '<p>Finished with Case, Screen and Labeling with the best quality parameters</p>', '/img/357489287.jpg', 3, 10, '', ''),
(291, 'No title', 'No Description', '/img/48922141.jpg', 'No title', 'No Description', '/img/097127038.jpg', 1, 5, '', ''),
(302, 'No title', 'No Description', '/img/379496760.jpg', 'No title', 'No Description', '/img/321771109.jpg', 1, 5, '', ''),
(303, 'No title', 'No Description', '/img/796238027.jpg', 'No title', 'No Description', '/img/64134334.jpg', 1, 5, '', ''),
(304, 'No title', 'No Description', '/img/737125123.jpg', 'No title', 'No Description', '/img/33471505.jpg', 1, 5, '', ''),
(306, 'No title', 'No Description', '/img/832207784.jpg', 'No title', 'No Description', '', 1, 5, '', ''),
(307, 'No title', 'No Description', '/img/438664987.jpg', 'No title', 'No Description', '', 1, 5, '', ''),
(308, 'No title', 'No Description', '/img/424944777.jpg', 'No title', 'No Description', '', 1, 5, '', ''),
(312, 'No title', 'No Description', '/img/92784044.jpg', 'No title', 'No Description', '/img/954951091.jpg', 8, 1, '', ''),
(313, 'No title', 'No Description', '/img/07221164.jpg', 'No title', 'No Description', '/img/912357922.jpg', 8, 1, '', ''),
(314, 'No title', 'No Description', '/img/743227053.jpg', 'No title', 'No Description', '/img/51098777.jpg', 8, 1, '', ''),
(323, 'No Title', '<p><em>&nbsp;</em><strong><em>TAPA ORFLEM X 24 SNAP mm</em></strong></p>', '/img/64687791.jpg', 'No title', '', '', 2, 6, 'No Link', ''),
(325, 'No title', '', '/img/717687359.jpg', 'No title', '', '', 2, 6, '', ''),
(326, 'No title', '', '/img/297223275.jpg', 'No title', '', '', 2, 6, '', ''),
(327, 'No title', '', '/img/664518616.jpg', 'No title', '', '', 2, 6, '', ''),
(328, 'No title', '', '/img/387545977.jpg', 'No title', '', '', 2, 6, '', ''),
(329, 'No title', '', '/img/095319443.jpg', 'No title', '', '', 2, 6, '', ''),
(330, 'No title', '', '/img/525491236.jpg', 'No title', '', '', 2, 6, '', ''),
(331, 'No title', '', '/img/167592871.jpg', 'No title', '', '', 2, 9, '', ''),
(332, 'No title', '', '/img/991411871.jpg', 'No title', '', '', 2, 9, '', ''),
(333, 'No title', '', '/img/427219102.jpg', 'No title', '', '', 2, 9, '', ''),
(334, 'No title', '', '/img/984899231.jpg', 'No title', '', '', 2, 8, '', ''),
(335, 'No title', '', '/img/587471142.jpg', 'No title', '', '', 2, 8, '', ''),
(336, 'No title', '', '/img/943372117.jpg', 'No title', '', '', 2, 8, '', ''),
(340, 'No title', '', '/img/793195099.jpg', 'No title', '', '/img/667556149.jpg', 2, 7, '', ''),
(341, 'No title', '', '/img/557687901.jpg', 'No title', '', '/img/096967298.jpg', 2, 7, '', ''),
(342, 'No title', '', '/img/757378205.jpg', 'No title', '', '/img/254454917.jpg', 2, 7, '', ''),
(343, 'No title', '', '/img/452987668.jpg', 'No title', '', '/img/554895518.jpg', 2, 7, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

DROP TABLE IF EXISTS `lineas`;
CREATE TABLE IF NOT EXISTS `lineas` (
  `linea_id` int(5) NOT NULL AUTO_INCREMENT,
  `linea_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linea_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`linea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`linea_id`, `linea_nombre_e`, `linea_nombre_i`) VALUES
(1, 'Cosm&eacute;tica Env. ', 'Bottle Cosmetics'),
(2, 'Agroquimicos ', 'Agrochemicals'),
(3, 'Alimentos Env.', 'Food Bottle'),
(4, 'Aseo Env.', 'Cleanliness'),
(5, 'Farmaceutica ', 'Pharmaceutical Env'),
(6, 'Licores Env. ', 'Liquors Bottles'),
(7, 'Nutricional Env.', 'Nutritional'),
(8, 'Industrial Env.  ', 'Industrial Bottles'),
(9, 'Agricola', 'Agricola'),
(14, 'Cosm&eacute;tica Tapas ', 'Tops Cosmetics '),
(15, 'Industrial  Tapas ', 'Industrial Tops'),
(16, 'Cosmetica Potes ', 'Cosmetic Jars'),
(17, 'Farmac&eacute;utica Tapas', 'Pharmaceutical Tops'),
(18, 'Alimentos tapas ', 'Food Tops'),
(20, 'Industrial Potes', 'Industrial Potes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linners`
--

DROP TABLE IF EXISTS `linners`;
CREATE TABLE IF NOT EXISTS `linners` (
  `linner_id` int(5) NOT NULL AUTO_INCREMENT,
  `linner_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linner_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`linner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `linners`
--

INSERT INTO `linners` (`linner_id`, `linner_nombre_e`, `linner_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Centakseal', 'Centakseal'),
(3, 'Incorporado', 'Incorporated'),
(4, 'Polyseal', 'Polyseal'),
(5, 'Sin Linner', 'No Linner'),
(6, 'Treseal', 'Treseal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

DROP TABLE IF EXISTS `materiales`;
CREATE TABLE IF NOT EXISTS `materiales` (
  `material_id` int(5) NOT NULL AUTO_INCREMENT,
  `material_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `material_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`material_id`, `material_nombre_e`, `material_nombre_i`) VALUES
(1, 'HDPE', 'HDPE'),
(2, 'HDPE SOFT TOUCH', 'HDPE SOFT TOUCH'),
(3, 'LDPE', 'LDPE'),
(4, 'MDPE', 'MDPE'),
(5, 'PET', 'PET'),
(6, 'PP', 'PP'),
(7, 'PP SOFT TOUCH', 'PP SOFT TOUCH'),
(8, 'PS', 'PS'),
(9, 'PVC', 'PVC'),
(10, 'PEAD', 'PEAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging`
--

DROP TABLE IF EXISTS `messaging`;
CREATE TABLE IF NOT EXISTS `messaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `user` int(11) NOT NULL,
  `to_user` int(10) unsigned NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `time` (`time`),
  KEY `user` (`user`,`to_user`),
  KEY `user_single` (`user`),
  KEY `to_user_single` (`to_user`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_admin`
--

DROP TABLE IF EXISTS `messaging_admin`;
CREATE TABLE IF NOT EXISTS `messaging_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `group` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`pass`),
  KEY `group` (`group`,`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `messaging_admin`
--

INSERT INTO `messaging_admin` (`id`, `username`, `pass`, `group`, `time`) VALUES
(1, 'admin', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 1, '2013-01-08 18:48:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_ban`
--

DROP TABLE IF EXISTS `messaging_ban`;
CREATE TABLE IF NOT EXISTS `messaging_ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(10) unsigned NOT NULL,
  `host` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_groups`
--

DROP TABLE IF EXISTS `messaging_groups`;
CREATE TABLE IF NOT EXISTS `messaging_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `groups` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `history` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `file` (`groups`,`banned`,`history`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `messaging_groups`
--

INSERT INTO `messaging_groups` (`id`, `title`, `groups`, `banned`, `history`) VALUES
(1, 'Administrators', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_history`
--

DROP TABLE IF EXISTS `messaging_history`;
CREATE TABLE IF NOT EXISTS `messaging_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `from_ip` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `sess` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `admin` varchar(255) NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sess` (`sess`),
  KEY `time` (`time`),
  KEY `email` (`email`),
  FULLTEXT KEY `message` (`msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `messaging_history`
--

INSERT INTO `messaging_history` (`id`, `user`, `from_ip`, `email`, `sess`, `msg`, `admin`, `type`, `time`) VALUES
(18, 'James', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', '<a href="../uploads/501d1fca5c5aa.png" target="_blank">Sent you a file</a>', 'admin', 'user', '2012-08-04 10:11:54'),
(17, 'James', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', ':shock', 'admin', 'user', '2012-08-04 10:04:35'),
(16, 'James', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', 'Nickname cambiado a &quot;James&quot;', 'admin', 'user', '2012-08-04 10:04:29'),
(15, 'James', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', 'Nickname cambiado a &quot;James&quot;', 'admin', 'user', '2012-08-04 10:02:02'),
(14, 'Jimm', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', 'Nickname changed to &quot;Jimm&quot;', 'admin', 'user', '2012-08-04 10:01:11'),
(13, 'James', 2130706433, 'james.garcia@imaginamos.com.co', 'ansqc89sthdmvka8927rejj105', 'Hi', 'admin', 'user', '2012-08-04 09:37:50'),
(19, 'James', 3130666535, 'james.garcia@imaginamos.com.co', 'vc59t2o4q74aii3l4suhan9b26', 'Hola', 'admin', 'user', '2012-08-04 16:27:20'),
(20, 'Jimm', 3130666535, 'james.garcia@imaginamos.com.co', 'ti3kkd8udkuja1dk38k31q1110', 'fd', 'admin', 'user', '2012-08-04 16:36:06'),
(21, 'James', 3130666535, 'james.gar@hotmail.com', 'b22038kecqb4m8qip4no91dlf3', 'f', 'admin', 'admin', '2012-08-04 16:36:26'),
(22, 'Jimm', 3130666535, 'james.garcia@imaginamos.com.co', 'ti3kkd8udkuja1dk38k31q1110', 'Hola', 'admin', 'admin', '2012-08-04 17:00:12'),
(23, 'Jimm', 3130666535, 'james.garcia@imaginamos.com.co', 'ti3kkd8udkuja1dk38k31q1110', 'que tal', 'admin', 'user', '2012-08-04 17:00:23'),
(24, 'joseph', 3193242330, 'joalesalam@hotmail.com', 'pmshdgp1ge7j5p6teeiq01lni4', 'rerererere', 'admin', 'user', '2012-08-09 22:19:38'),
(25, 'joseph', 3130663595, 'joalesalam@hotmail.com', 'pmshdgp1ge7j5p6teeiq01lni4', 'Hola Joseph', 'admin', 'admin', '2012-08-09 22:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_smiley`
--

DROP TABLE IF EXISTS `messaging_smiley`;
CREATE TABLE IF NOT EXISTS `messaging_smiley` (
  `sign` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`sign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `messaging_smiley`
--

INSERT INTO `messaging_smiley` (`sign`, `filename`) VALUES
(':(', 'sad.gif'),
(':)', 'smile.gif'),
(':*', 'kiss.gif'),
(':D', 'laugh.gif'),
(':P', 'tongue.gif'),
(':roll', 'rolleyes.gif'),
(':shock', 'shocked.gif'),
(':tired', 'tired.gif'),
(':]', 'grin.gif'),
(':|', 'blank.gif'),
(';)', 'wink.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messaging_users`
--

DROP TABLE IF EXISTS `messaging_users`;
CREATE TABLE IF NOT EXISTS `messaging_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` int(10) unsigned NOT NULL,
  `sess` varchar(255) NOT NULL,
  `upload` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `nickname` (`nick`),
  KEY `sess` (`sess`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `noticia_id` int(5) NOT NULL AUTO_INCREMENT,
  `noticia_titulo_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_descripcion_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_imagen_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_enlace_e` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_titulo_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_descripcion_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_imagen_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_enlace_i` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `noticia_fecha` date NOT NULL,
  PRIMARY KEY (`noticia_id`),
  KEY `seccion_id` (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`noticia_id`, `noticia_titulo_e`, `noticia_descripcion_e`, `noticia_imagen_e`, `noticia_enlace_e`, `noticia_titulo_i`, `noticia_descripcion_i`, `noticia_imagen_i`, `noticia_enlace_i`, `seccion_id`, `noticia_fecha`) VALUES
(10, 'Belcorp ', '<p>Entrega mencion &nbsp;a INTECPLAST S.A, &nbsp;por ser aliado &nbsp;comercial y estrategico&nbsp;</p>', '/img/415866698.jpg', 'http://www.belcorp.biz/index.html', 'Belcorp ', '<p>Delivery mention to INTECPLAST SA, being commercial and strategic ally</p>', '/img/991159341.jpg', 'http://www.belcorp.biz/index.html', 10, '2013-01-16'),
(11, 'PREBEL', '<p>Agradece a INTECPLAST por su apoyo para que hoy este producto sea un exito en el mercado&nbsp;</p>', '/img/286872685.jpg', '', 'PREBEL', '<p>&nbsp;Thanks for your support INTECPLAST today this product a success in the market</p>', '/img/032501764.jpg', '', 10, '2013-03-05'),
(15, 'FERIA HBA ', '<p>&nbsp;Participacion de &nbsp;INTECPLAST S.A. en la feria HBA en NY en el mes de junio de 2013, STAND # 867 &nbsp;<a href=\\"\\\\&quot;http://www.hbaexpo.com/\\\\&quot;\\">http://www.hbaexpo.com/</a></p>', '/img/874593125.jpg', ' http://www.hbaexpo.com/', 'FAIR HBA', '<p>&nbsp;INTECPLAST S.A &nbsp;Involvement at the fair HBA in NY in the month of June 2013, BOOTH # 867 &nbsp;<a href=\\"\\\\&quot;http://www.hbaexpo.com/\\\\&quot;\\">http://www.hbaexpo.com/</a></p>', '/img/848629924.jpg', ' http://www.hbaexpo.com/', 10, '2013-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `pais_id` int(5) NOT NULL AUTO_INCREMENT,
  `pais_nombre_e` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pais_nombre_i` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=203 ;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`pais_id`, `pais_nombre_e`, `pais_nombre_i`) VALUES
(2, 'Inglaterra', 'England'),
(3, 'Italia', 'Italy'),
(4, 'Panama', 'Panama'),
(5, 'Colombia', 'Colombia'),
(6, 'Estados Unidos', 'United States'),
(7, 'Afganistan', 'Afghanistan'),
(8, 'Africa', 'Africa'),
(9, 'Albania', 'Albania'),
(10, 'Alemania', 'Germany'),
(11, 'America', 'America'),
(12, 'Andorra', 'Andorra'),
(13, 'Angola', 'Angola'),
(14, 'Arabia Saudita', 'Saudi Arabia'),
(15, 'Argelia', 'Algeria'),
(16, 'Argentina', 'Argentina'),
(17, 'Armenia', 'Armenia'),
(18, 'Asia', 'Asia'),
(19, 'Australia', 'Australia'),
(20, 'Australia', 'Australia'),
(21, 'Austria', 'Austria'),
(22, 'Azerbaiyan', 'Azerbaijan'),
(23, 'Bahrain', 'Bahrain'),
(24, 'Bangladesh', 'Bangladesh'),
(25, 'Barbados', 'Barbados'),
(26, 'Belgica', 'Belgium'),
(27, 'Belice', 'Belize'),
(28, 'Benin', 'Benin'),
(29, 'Bermuda', 'Bermuda'),
(30, 'Butan', 'Bhutan'),
(31, 'Bielorrusia', 'Belarus'),
(32, 'Bolivia', 'Bolivia'),
(33, 'Bosnia Herzegovina', 'Bosnia And Herzegovina'),
(34, 'Botswana', 'Botswana'),
(35, 'Brasil', 'Brazil'),
(36, 'Brunei Darussalam', 'Brunei Darussalam'),
(37, 'Bulgaria', 'Bulgaria'),
(38, 'Burkina Faso', 'Burkina Faso'),
(39, 'Burundi', 'Burundi'),
(40, 'Cabo Verde', 'Cape Verde'),
(41, 'Camboya', 'Cambodia'),
(42, 'Camerun', 'Cameroon'),
(43, 'Canada', 'Canada'),
(44, 'Centro Africana  Rep.', 'Central African Republic'),
(45, 'Chad', 'Chad'),
(46, 'Chile', 'Chile'),
(47, 'China', 'China'),
(48, 'Chipre', 'Cyprus'),
(49, 'Comores', 'Comoros'),
(50, 'Congo', 'Congo'),
(51, 'Congo  Rep. Democratica', 'Congo Democratic Republic'),
(52, 'Corea Del Norte', 'Korea North'),
(53, 'Corea Del Sur', 'Korea South'),
(54, 'Costa De Marfil', 'Ivory Coast'),
(55, 'Costa Rica', 'Costa Rica'),
(56, 'Croacia', 'Croatia'),
(57, 'Cuba', 'Cuba'),
(58, 'Dinamarca', 'Denmark'),
(59, 'Djibouti', 'Djibouti'),
(60, 'Dominica', 'Dominica'),
(61, 'Dominicana Rep.', 'Dominican Republic'),
(62, 'Ecuador', 'Ecuador'),
(63, 'Egipto', 'Egypt'),
(64, 'El Salvador', 'El Salvador'),
(65, 'Emiratos Arabes Unidos', 'United Arab Emirates'),
(66, 'Eritrea', 'Eritrea'),
(67, 'Eslovaquia', 'Slovakia'),
(68, 'Eslovenia', 'Slovenia'),
(69, 'Espa', 'Spain'),
(70, 'Estonia', 'Estonia'),
(71, 'Etiopia', 'Ethiopia'),
(72, 'Europa', 'Europe'),
(73, 'Fiji', 'Fiji'),
(74, 'Filipinas', 'Philippines'),
(75, 'Finlandia', 'Finland'),
(76, 'Francia', 'France'),
(77, 'Gabon', 'Gabon'),
(78, 'Gambia', 'Gambia'),
(79, 'Georgia', 'Georgia'),
(80, 'Ghana', 'Ghana'),
(81, 'Granada', 'Grenada'),
(82, 'Grecia', 'Greece'),
(83, 'Groenlandia', 'Greenland'),
(84, 'Guam', 'Guam'),
(85, 'Guatemala', 'Guatemala'),
(86, 'Guayana', 'Guyana'),
(87, 'Guayana Francesa', 'French Guiana'),
(88, 'Guinea', 'Guinea'),
(89, 'Guinea Ecuatorial', 'Equatorial Guinea'),
(90, 'Guinea Bissau', 'Guinea Bissau'),
(91, 'Haiti', 'Haiti'),
(92, 'Holanda', 'Netherlands'),
(93, 'Honduras', 'Honduras'),
(94, 'Hong Kong', 'Hong Kong'),
(95, 'Hungria', 'Hungary'),
(96, 'India', 'India'),
(97, 'Indonesia', 'Indonesia'),
(98, 'Iran', 'Iran'),
(99, 'Iraq', 'Iraq'),
(100, 'Irlanda', 'Ireland'),
(101, 'Islandia', 'Iceland'),
(102, 'Israel', 'Israel'),
(103, 'Jamaica', 'Jamaica'),
(104, 'Japon', 'Japan'),
(105, 'Jordania', 'Jordan'),
(106, 'Kazajastan', 'Kazakhstan'),
(107, 'Kenya', 'Kenya'),
(108, 'Kuwait', 'Kuwait'),
(109, 'Kyrgyzstan', 'Kyrgyzstan'),
(110, 'Laos', 'Laos'),
(111, 'Lesoto', 'Lesotho'),
(112, 'Letonia', 'Latvia'),
(113, 'Libano', 'Lebanon'),
(114, 'Liberia', 'Liberia'),
(115, 'Libia', 'Libyan Arab Jamahiriya'),
(116, 'Liechtenstein', 'Liechtenstein'),
(117, 'Lituania', 'Lithuania'),
(118, 'Luxemburgo', 'Luxembourg'),
(119, 'Macao', 'Macao'),
(120, 'Macedonia', 'Macedonia'),
(121, 'Madagascar', 'Madagascar'),
(122, 'Malasia', 'Malaysia'),
(123, 'Malawi', 'Malawi'),
(124, 'Maldivas', 'Maldives'),
(125, 'Mali', 'Mali'),
(126, 'Malta', 'Malta'),
(127, 'Marruecos', 'Morocco'),
(128, 'Mauricio', 'Mauritius'),
(129, 'Mauritania', 'Mauritania'),
(130, 'Mexico', 'Mexico'),
(131, 'Micronesia', 'Micronesia'),
(132, 'Moldovia', 'Moldova'),
(133, 'Monaco', 'Monaco'),
(134, 'Mongolia', 'Mongolia'),
(135, 'Montenegro', 'Montenegro'),
(136, 'Mozambique', 'Mozambique'),
(137, 'Myanmar', 'Myanmar Burma'),
(138, 'Namibia', 'Namibia'),
(139, 'Nepal', 'Nepal'),
(140, 'Nicaragua', 'Nicaragua'),
(141, 'Niger', 'Niger'),
(142, 'Nigeria', 'Nigeria'),
(143, 'Noruega', 'Norway'),
(144, 'Nueva Caledonia', 'New Caledonia'),
(145, 'Nueva Zelanda', 'New Zealand'),
(146, 'Oman', 'Oman'),
(147, 'Pakistan', 'Pakistan'),
(148, 'Palestina', 'Palestine'),
(149, 'Papua New Guinea', 'Papua New Guinea'),
(150, 'Paraguay', 'Paraguay'),
(151, 'Peru', 'Peru'),
(152, 'Polinesia Francesa', 'French Polynesia'),
(153, 'Polonia', 'Poland'),
(154, 'Portugal  ', 'Portugal'),
(155, 'Puerto Rico', 'Puerto Rico'),
(156, 'Qatar', 'Qatar'),
(157, 'Reino Unido', 'United Kingdom'),
(158, 'Republica Checa', 'Czech Republic'),
(159, 'Ruanda', 'Rwanda'),
(160, 'Rumania', 'Romania'),
(161, 'Rusia', 'Russian Federation'),
(162, 'Sahara Occidental', 'Western Sahara'),
(163, 'Samoa', 'Samoa'),
(164, 'San Marino', 'San Marino'),
(165, 'Sao Tome And Principe', 'Sao Tome And Principe'),
(166, 'Senegal', 'Senegal'),
(167, 'Serbia', 'Serbia'),
(168, 'Seychelles', 'Seychelles'),
(169, 'Sierra Leona', 'Sierra Leone'),
(170, 'Singapur', 'Singapore'),
(171, 'Siria', 'Syria'),
(172, 'Somalia', 'Somalia'),
(173, 'Sri Lanka', 'Sri Lanka'),
(174, 'Sud Africa', 'South Africa'),
(175, 'Sudan', 'Sudan'),
(176, 'Suecia', 'Sweden'),
(177, 'Suiza', 'Switzerland'),
(178, 'Surinam', 'Suriname'),
(179, 'Swazilandia', 'Swaziland'),
(180, 'Tailandia', 'Thailand'),
(181, 'Taiwan', 'Taiwan'),
(182, 'Tajikistan', 'Tajikistan'),
(183, 'Tanzania', 'Tanzania'),
(184, 'Timor Este', 'Timor Leste'),
(185, 'Togo', 'Togo'),
(186, 'Tonga', 'Tonga'),
(187, 'Trinidad Tobago', 'Trinidad And Tobago'),
(188, 'Tunez', 'Tunisia'),
(189, 'Turkmenistan', 'Turkmenistan'),
(190, 'Turquia', 'Turkey'),
(191, 'Tuvalu', 'Tuvalu'),
(192, 'Ucrania', 'Ukraine'),
(193, 'Uganda', 'Uganda'),
(194, 'Uruguay', 'Uruguay'),
(195, 'Uzbekistan', 'Uzbekistan'),
(196, 'Vanuatu', 'Vanuatu'),
(197, 'Vaticano', 'Holy See'),
(198, 'Venezuela', 'Venezuela'),
(199, 'Vietnam', 'Vietnam'),
(200, 'Yemen', 'Yemen'),
(201, 'Zambia', 'Zambia'),
(202, 'Zimbabwe', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
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
  `boca_id` int(5) NOT NULL,
  `capacidad_id` int(5) NOT NULL,
  `producto_descripcion_i` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `producto_nombre_i` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `producto_terminado_i` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `producto_anotacion_i` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
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
  KEY `producto_atributo2` (`producto_atributo2`),
  KEY `capacidad_id` (`capacidad_id`),
  KEY `boca_id` (`boca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_codigo`, `producto_descripcion`, `producto_nombre`, `categoria_id`, `sublinea_id`, `forma_id`, `producto_atributo1`, `producto_atributo2`, `producto_entradas`, `tamano_id`, `producto_capacidad`, `producto_unidadCap`, `material_id`, `color_id`, `producto_boca`, `producto_unidadBoca`, `producto_peso`, `producto_terminado`, `linner_id`, `falda_id`, `producto_cavidades`, `producto_anotacion`, `clase_id`, `producto_imagen`, `boca_id`, `capacidad_id`, `producto_descripcion_i`, `producto_nombre_i`, `producto_terminado_i`, `producto_anotacion_i`) VALUES
('21AN000001', 'ANILLO DECORATIVO TAPA DISC-TOP LISA PP BLANCO BOCA 24 MM', 'ANILLO 24 mm', 56, 31, 5, 1, 1, 0, 3, '', 1, 6, 11, '0', 1, '', '', 1, 1, 0, '', 3, '/img/241164662.png', 21, 1, 'DECORATIVE RING COVER SMOOTH DISC-TOP 24 MM PP WHITE MOUTH', 'RING 24 mm', '', ''),
('21AN000019', 'ANILLO DECORATIVO TAPA DISC-TOP LISA PP BLANCO BOCA 28 MM', 'ANILLO 28 mm', 56, 31, 5, 1, 1, 0, 2, '', 1, 6, 8, '0', 1, '', '', 1, 1, 0, '', 3, '/img/97845955.png', 25, 1, 'DECORATIVE RING COVER SMOOTH DISC-TOP 28 MM PP WHITE MOUTH', 'RING 28 mm', '', ''),
('21CC000004', 'BASE CAJA POLVOS COMPACTOS PS CRISTAL DIÃMETRO 67 MM', 'POLVOS COMPACTOS ', 144, 66, 2, 1, 1, 0, 3, '67', 1, 8, 11, '0', 1, '', '', 1, 1, 0, '', 1, '/img/47732027.png', 44, 17, 'PS COMPACT POWDER BOX BASE DIAMETER 67 MM GLASS', 'POWDER COMPACT', '', ''),
('21CC000009', 'TAPA CAJA POLVOS COMPACTOS PS CRISTAL DIÃMETRO 67 MM', 'TAPA POLVOS ', 145, 76, 2, 1, 1, 0, 5, '67', 1, 8, 11, '0', 1, '', '', 1, 1, 0, '', 3, '/img/249234357.png', 44, 17, 'PS COMPACT DUST COVER GLASS CASE DIAMETER 67 MM', 'POWDER COMPACT', '', ''),
('21CD000010', 'COPA DOSIFICADORA 15 ml PP NATURAL S/I', 'COPA 15 ml ', 109, 50, 2, 1, 1, 0, 6, '15', 3, 6, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/258165313.png', 9, 12, 'DOSING 15 ml PP CUP NATURAL S / I', 'CUP 15 ml', '', ''),
('21CP000966', 'CÃPSULA CONVEXA AGRAFE PS BLANCO BOCA 18 MM S/E', 'CAPSULA CONVEXA ', 149, 42, 1, 1, 1, 0, 6, '', 1, 8, 11, '0', 1, '', '', 1, 1, 0, '', 3, '/img/621734393.png', 12, 1, 'PS WHITE CAPSULE CONVEXA AGRAFE MOUTH 18MM S / E', 'CAPSULE CONVEXA', '', ''),
('21CV000001', 'TAPA NES CONVEXA PP BLANCO BOCA 53 MM SIN LINNER', 'NES 53 mm', 50, 28, 2, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/317989633.jpg', 41, 1, 'NES CONVEX COVER WHITE PP 53 MM MOUTH WITHOUT LINNER', 'NES 53 mm', '', ''),
('21CV000026', 'TAPA NES CONVEXA PP BLANCO BOCA 48 MM SIN LINNER', 'NES 48 mm', 50, 28, 1, 1, 1, 0, 6, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/250315989.jpg', 38, 1, 'NES CONVEX COVER WHITE PP 48 MM MOUTH WITHOUT LINNER', 'NES 48 mm', '', ''),
('21CV000031', 'TAPA NES CONVEXA LISA 3 ENT. PP BLANCO BOCA 58 MM SIN LINNER N.A', 'NES 58 mm', 50, 28, 1, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/35724215.jpg', 42, 1, 'SMOOTH CONVEX COVER NES 3 ENT. WHITE PP 58 MM MOUTH WITHOUT LINNER N.A', 'NES 58 mm', '', ''),
('21CV000050', 'TAPA NES CONVEXA LISA 1 ENT. PP BLANCO BOCA 70 MM SIN LINNER', 'NES 70 mm', 50, 28, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/386513070.jpg', 45, 1, 'SMOOTH CONVEX COVER 1 ENT NES. WHITE PP 70 MM MOUTH WITHOUT LINNER', 'NES 70 mm', '', ''),
('21CV000079', 'TAPA POTE CONVEXO FROSTED 4 onz PP BLANCO BOCA 70 MM SIN SEALER', 'CONVEXA 4 ONZ', 138, 60, 1, 1, 1, 0, 2, '4', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/073187560.png', 53, 12, 'POT LID DOME WHITE FROSTED 4 oz PP 70 MM MOUTH WITHOUT SEALER', 'CONVEX COVER 4 OZ', '', ''),
('21CV000150', 'TAPA NES CONVEXA LISA PP BLANCO BOCA 83 MM SIN LINNER', 'NES 83 mm', 50, 28, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/139199036.jpg', 47, 1, 'NES CONVEX COVER LISA WHITE PP 83 MM MOUTH WITHOUT LINNER', 'NES 83 mm', '', ''),
('21CV000153', 'TAPA NES CONVEXA LISA 1 ENT. PP BLANCO BOCA 80 MM SIN LINNER', 'NES 80 mm', 50, 28, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/736593254.jpg', 46, 1, 'SMOOTH CONVEX COVER 1 ENT NES. WHITE PP 80 MM MOUTH WITHOUT LINNER', 'NES TOP 80 mm', '', ''),
('21CV000180', 'TAPA NES CONVEXA LISA PP BLANCO BOCA 89 MM SIN LINNER', 'NES 89 mm', 50, 28, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/693495860.jpg', 48, 1, 'NES CONVEX COVER LISA WHITE PP 89 MM MOUTH WITHOUT LINNER', 'NES 89 mm', '', ''),
('21CV000200', 'SOBRETAPA CONVEXA GRANDE PP BLANCO BOCA 28 MM SIN LINNER', 'CONVEXA GRANDE', 170, 79, 1, 3, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/995747915.png', 25, 1, 'PP overcap CONVEXA BIG WHITE 28 MM MOUTH WITHOUT LINNER', 'LARGE CONVEX', '', ''),
('21CV000451', 'SOBRETAPA CONVEXA PEQUEÃ‘A PP BLANCO BOCA 33 MM CON LINNER INCORPORADO', ' CONVEXA PEQUEÃ‘A', 170, 79, 1, 3, 1, 0, 6, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/96579163.png', 33, 1, 'PP overcap CONVEXA SMALL WHITE 33 MM MOUTH WITH BUILT LINNER', 'SMALL CONVEXA', '', ''),
('21FT000300', 'TAPA FLIP-TOP NP PP NATURAL BOCA 33-400 MM 8 CAV. APLICADORA', 'TAPA DOSIFICADORA 33 mm', 23, 12, 3, 1, 1, 0, 2, '', 3, 6, 2, '0', 1, '', '', 1, 1, 0, 'APLICADORA ', 3, '/img/92251285.png', 33, 1, 'FLIP-TOP BOTTLE NATURAL PP NP 33-400 MM 8 CAV MOUTH. APPLICATOR', 'DOSING TOP 33 mm', '', ''),
('21FT000411', 'TAPA FLIP-TOP LISA  DOMED PP NATURAL BOCA  20-410 MM', 'FLIP-TOP 20-410 mm', 19, 5, 1, 1, 1, 0, 4, '', 1, 6, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/525555920.png', 15, 1, 'FLIP-TOP COVER SMOOTH DOMED NATURAL PP 20-410 MM MOUTH', 'FLIP-TOP 20-410 mm', '', ''),
('21LN000150', 'SEALER POTE CONVEXO 4 onz PP BLANCO (70 MM)', 'SEALER POTE', 137, 59, 2, 1, 1, 0, 2, '4 ', 5, 6, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/01769820.png', 45, 12, 'JAR SEALER WHITE DOME 4 oz PP (70 MM)', 'JAR SEALER ', '', ''),
('21LN000160', 'SEALER POTE CONVEXO 2 onz PP BLANCO (56 MM)', 'SEALER POTE', 137, 59, 2, 1, 1, 0, 3, '2', 5, 6, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/925057988.png', 50, 12, 'JAR SEALER WHITE DOME 2 oz PP (56 MM)', 'JAR SEALER ', '', ''),
('21LN000170', 'SEALER POTE GEL PP BLANCO (80 MM)', 'SEALER POTE', 174, 59, 2, 1, 1, 0, 2, '500 ml', 1, 6, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/51552144.jpg', 46, 13, 'POT PP GEL SEALER WHITE (80 MM)', 'SEALER  JAR', '', ''),
('21MT000001', 'MATERA # 10 PP NEGRA', 'MATERA 10', 93, 46, 1, 1, 1, 0, 6, '10', 5, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/26719841.jpg', 9, 12, 'Matera # 10 PP BLACK', 'MATERA 10', '', ''),
('21MT000005', 'MATERA # 12 PP NEGRA', 'MATERA 12', 93, 46, 1, 1, 1, 0, 3, '12  ', 5, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/947422495.jpg', 9, 12, 'Matera # 12 PP BLACK', 'MATERA 12', '', ''),
('21MT000010', 'MATERA # 14 PP NEGRA', 'MATERA 14', 93, 46, 1, 1, 1, 0, 5, '14', 5, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/22733555.jpg', 9, 12, 'Matera # 14 PP BLACK', 'MATERA 14', '', ''),
('21MT000015', 'MATERA # 16 PP NEGRA', 'MATERA 16', 93, 46, 1, 1, 1, 0, 2, '16', 5, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/725838511.jpg', 9, 12, 'Matera # 16 PP BLACK', 'MATERA 16', '', ''),
('21PG000001', 'RECIPIENTE 1 LIBRA ', 'RECIPIENTE 1 LIBRA ', 136, 58, 2, 1, 1, 0, 2, '1', 6, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/182672316.png', 9, 12, 'CONTAINER 1 LB', 'CONTAINER 1 LB', '', ''),
('21PG000020', 'POTE CILÃNDRICO GEL INYECTADO 1000 ml PP NATURAL BOCA 120 MM', 'POTE GEL 1000', 132, 44, 2, 1, 1, 0, 2, '1000', 3, 6, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/76097710.jpg', 49, 14, 'CYLINDRICAL POT INJECTED GEL 1000 ml PP 120 MM NATURAL MOUTH', 'POT GEL 1000', '', ''),
('21RD000003', 'SUBTAPA UN ORIFICIO SIN PESTAÃ‘A LDPE NATURAL BOCA 28 MM PARA PET /HDPE', 'SUBTAPA 28 mm', 172, 80, 1, 1, 1, 0, 2, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/655796395.jpg', 25, 1, 'Subcover LDPE NATURAL A MOUTH WITHOUT FLANGE 28 MM HOLE FOR PET / HDPE', 'SUBCOVER 28 mm', '', ''),
('21RD000011', 'SUBTAPA UN ORIFICIO CON PESTAÃ‘A LDPE NATURAL BOCA 24 MM', 'SUBTAPA 24 mm', 172, 80, 1, 1, 1, 0, 5, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/171824036.jpg', 21, 1, 'Subcover HOLE FLANGE 24 MM MOUTH LDPE NATURAL', 'SUBCOVER 24 mm', '', ''),
('21RD000013', 'SUBTAPA UN ORIFICIO SIN PESTAÃ‘A LDPE NATURAL BOCA 24 MM PARA PET/HDPE', 'SUBTAPA 24 mm', 172, 80, 1, 1, 1, 0, 5, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/791271034.jpg', 21, 1, 'Subcover LDPE NATURAL A MOUTH WITHOUT FLANGE 24 MM HOLE FOR PET / HDPE', 'SUBCOVER 24 mm', '', ''),
('21RD000014', 'SUBTAPA UN ORIFICIO CON PESTAÃ‘A LDPE NATURAL BOCA 22 MM', 'SUBTAPA 22 mm', 172, 80, 1, 1, 1, 0, 6, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/564389820.jpg', 17, 1, 'Subcover HOLE FLANGE 22 MM MOUTH LDPE NATURAL', 'SUBCOVER 22 mm', '', ''),
('21RD000030', 'SUBTAPA UN ORIFICIO CON PESTAÃ‘A LDPE NATURAL BOCA 18 MM', 'SUBTAPA 18 mm', 172, 80, 1, 1, 1, 0, 6, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/639532212.jpg', 12, 1, 'Subcover HOLE FLANGE 18 MM MOUTH LDPE NATURAL', 'SUBCOVER 18 mm', '', ''),
('21RD000040', 'SUBTAPA UN ORIFICIO CON PESTAÃ‘A LDPE NATURAL BOCA 20 MM', 'SUBTAPA 20 mm', 172, 80, 1, 1, 1, 0, 6, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/856692855.jpg', 14, 1, 'Subcover HOLE FLANGE 20 MM MOUTH LDPE NATURAL', 'SUBCOVER 20 mm', '', ''),
('21RD001001', 'SUBTAPA UN ORIFICIO CON PESTAÃ‘A LDPE NATURAL BOCA 28 MM', 'SUBTAPA 28 mm', 172, 80, 1, 1, 1, 0, 2, '', 1, 3, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/455224181.jpg', 25, 1, 'Subcover HOLE FLANGE 28 MM MOUTH LDPE NATURAL', 'SUBCOVER 28 mm', '', ''),
('21SF000001', 'TAPA OVAL FLIP-TOP SNAP OF PP BLANCO BOCA 24 MM', 'ORFLEM 24 mm', 162, 5, 12, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/723155273.png', 21, 1, 'FLIP COVER OVAL SNAP-TOP OF MOUTH WHITE PP 24 MM', 'ORFLEM 24 mm', '', ''),
('21SG000010', 'SOBRETAPA GRANDE PP BLANCO BOCA 24 MM SIN LINNER', 'SOBRETAPA GRANDE', 169, 79, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/11689046.png', 21, 1, 'BIG WHITE PP overcap 24 MM MOUTH WITHOUT LINNER', 'BIG OVERTOP', '', ''),
('21SM000010', 'SOBRETAPA MEDIANA PP BLANCO BOCA 24 MM SIN LINNER', 'SOBRETAPA MEDIANA', 169, 79, 1, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/964512153.png', 21, 1, 'MEDIUM WHITE PP overcap 24 MM MOUTH WITHOUT LINNER', 'MEDIUM OVERTOP', '', ''),
('21SP000010', 'SOBRETAPA PEQUEÃ‘A PP BLANCO BOCA 24 MM SIN LINNER', 'SOBRETAPA PEQUEÃ‘A', 169, 79, 1, 1, 1, 0, 6, '', 1, 6, 3, '0', 1, '', '', 1, 1, 0, '', 3, '/img/259006684.png', 21, 1, 'SMALL WHITE PP overcap 24 MM MOUTH WITHOUT LINNER', 'SMALL OVERTOP', '', ''),
('21SP000100', 'TAPA OVALADA FLIP-TOP SNAP PEQUEÃ‘A PP BLANCO BOCA 24 MM', 'OVAL SNAP 24 mm', 168, 5, 13, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/423943340.png', 21, 1, 'FLIP COVER OVAL SNAP-TOP SMALL WHITE PP 24 MM MOUTH', 'OVAL SNAP 24 mm', '', ''),
('21ST000010', 'TAPA FLIP-TOP SNAP HALLEY PEQUEÃ‘A PP BLANCO BOCA 24 MM', 'HALLEY 24 mm', 157, 5, 1, 1, 1, 0, 6, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/119739143.png', 21, 1, 'FLIP-TOP COVER SNAP HALLEY SMALL WHITE PP 24 MM MOUTH', 'HALLEY 24 mm', '', ''),
('21ST000054', 'TAPA FLIP-TOP SNAP HALLEY GRANDE PP BLANCO BOCA 28 MM', 'HALLEY 28 mm', 157, 5, 1, 1, 1, 0, 6, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/158587351.png', 25, 1, 'FLIP-TOP COVER SNAP HALLEY BIG MOUTH WHITE PP 28 MM', 'HALLEY 28 mm', '', ''),
('21ST000101', 'TAPA FLIP-TOP LISA DOMED PP BLANCO BOCA 28-415 MM', 'FLIP-TOP 28-415 mm', 19, 5, 1, 1, 1, 0, 2, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/51385551.png', 30, 1, 'FLIP-TOP COVER SMOOTH DOMED WHITE PP 28-415 MM MOUTH', 'FLIP-TOP 28-415 mm', '', ''),
('21ST000204', 'TAPA FLIP-TOP LISA DOMED PP AZUL BOCA 24-415 MM', 'TAPA FLIP TOP ', 19, 5, 2, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/757475161.png', 24, 1, 'FLIP-TOP COVER SMOOTH MOUTH BLUE DOMED 24-415 MM PP', 'FLIP-TOP TOP ', '', ''),
('21ST000303', 'TAPA FLIP-TOP LISA DOMED PP BLANCO BOCA 20-415 MM', 'FLIP-TOP 20-415 mm', 19, 5, 1, 1, 1, 0, 6, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/595791446.png', 16, 1, 'FLIP-TOP COVER SMOOTH DOMED WHITE PP 20-415 MM MOUTH', 'FLIP-TOP 20-415 mm', '', ''),
('21ST000320', 'TAPA OVALADA FLIP-TOP SNAP GRANDE PP BLANCO BOCA 24 MM', 'OVALADA 24 mm', 161, 5, 2, 1, 1, 0, 2, '', 1, 6, 12, '0', 1, '', '', 1, 1, 0, '', 3, '/img/046914387.png', 21, 1, 'FLIP COVER OVAL SNAP-TOP BIG MOUTH WHITE PP 24 MM', 'OVAL 24 mm', '', ''),
('21ST000405', 'TAPA FLIP-TOP LISA PP BLANCO BOCA 22-400 MM X 38 MM', 'TUBE TOP 38 mm', 163, 5, 1, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/820722060.png', 35, 1, 'FLIP-TOP COVER SMOOTH WHITE MOUTH PP 22-400 MM X 38 MM', 'TUBE TOP 38 mm', '', ''),
('21ST000502', 'TAPA OVAL FLIP-TOP SNAP NS PP BLANCO BOCA 24 MM', 'FLIP TOP 24 mm', 44, 5, 12, 1, 1, 0, 2, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/932493299.png', 21, 1, 'FLIP-TOP CAP OVAL SNAP PP NS 24 MM WHITE MOUTH', 'TOP COVER 24 â€‹â€‹mm', '', ''),
('21ST000910', 'TAPA CIRCULAR FLIP-TOP PP BLANCO BOCA 28 MM SNAP ADV', 'CIRCULAR 28 mm', 171, 5, 4, 3, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/739159606.jpg', 25, 1, 'FLIP-TOP COVER CIRCULAR WHITE PP 28 MM MOUTH SNAP ADV', 'CIRCULAR 28 mm', '', ''),
('21TB000001', 'TAPA FLIP-TOP LISA PP BLANCO BOCA 22-400 MM X 48 MM', 'TUBE TOP 48 mm', 163, 5, 1, 1, 1, 0, 2, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/753835327.png', 38, 1, 'FLIP-TOP COVER SMOOTH WHITE MOUTH PP 22-400 MM X 48 MM', 'TUBE TOP 48 mm', '', ''),
('21TC0000271', 'ENVASE CUADRADO SM SQUASH 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 240 ml', 1, 2, 6, 1, 1, 0, 1, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/73897517.png', 23, 9, 'SQUASH SM BOTTLE SQUARE GLASS 240 ml PET 24-410 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('21TC000050', 'TAPA . CÃ“NICA ESTRIADA PP BLANCO BOCA 28 MM CON LINNER INCORPORADO', 'CONICA 28 mm', 165, 21, 1, 9, 1, 0, 5, '', 1, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/53163786.jpg', 25, 1, 'LID. STRIPED CONE WHITE PP 28 MM MOUTH WITH BUILT LINNER', 'CONICA 28 mm', '', ''),
('21TC000060', 'TAPA . CÃ“NICA ESCALONADA PP BLANCO BOCA 28 PCO CON LINNER INCORPORADO', 'CONICA 28 PCO ', 39, 21, 21, 1, 8, 0, 5, '', 1, 6, 4, '0', 1, '', '', 3, 1, 0, '', 3, '/img/959522447.png', 26, 1, 'LID. PP CONE WHITE TIERED 28 PCO MOUTH WITH BUILT LINNER', 'TOP 28 PCO  mm', '', ''),
('21TC000200', 'TAPA . CÃ“NICA ESTRIADA PP BLANCO BOCA 28 PCO CON LINNER INCORPORADO', 'CONICA 28 PCO ', 165, 21, 1, 9, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/392673029.jpg', 26, 1, 'LID. PP CONE FLUTED WHITE MOUTH WITH 28 PCO LINNER INCORPORATED', 'TOP 28 PCO', '', ''),
('21TC000902', 'TAPA FLIP-TOP CONVEXA PP BLANCO BOCA 24-400 MM 1/2 BOLA', 'SEMIESFÃ‰RICA 24 mm', 4, 5, 1, 1, 1, 0, 5, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/773998324.png', 22, 1, 'FLIP-TOP COVER WHITE MOUTH CONVEXA PP 24-400 MM 1/2 BALL', '24 mm Hemispherical', '', ''),
('21TE000110', 'TAPA ESTRIADA PP BLANCO BOCA 18-415 MM SIN LINNER FALDA LARGA', 'ESTRIADA L. 18 mm ', 79, 43, 1, 1, 1, 0, 6, '', 1, 6, 14, '0', 1, '', '', 1, 1, 0, '', 3, '/img/743446420.jpg', 12, 1, 'PP FLUTED COVER WHITE MOUTH WITHOUT LINNER 18-415 MM LONG SKIRT', 'STRIPED LONG 18 mm', '', ''),
('21TE000160', 'TAPA ESTRIADA PP BLANCO BOCA 20-415 MM SIN LINNER FALDA LARGA', 'ESTRIADA L. 20 mm ', 79, 43, 1, 1, 1, 0, 6, '', 1, 6, 8, '0', 1, '', '', 1, 1, 0, '', 3, '/img/93265269.jpg', 14, 1, 'PP FLUTED COVER WHITE MOUTH WITHOUT LINNER 20-415 MM LONG SKIRT', 'STRIPED LONG 20 mm', '', ''),
('21TE000380', 'TAPA ESTRIADA PP BLANCO BOCA 22-415 MM SIN LINNER FALDA LARGA', 'ESTRIADA L. 22 mm ', 79, 43, 1, 1, 1, 0, 6, '', 1, 6, 14, '0', 1, '', '', 1, 1, 0, '', 3, '/img/893244321.jpg', 17, 1, 'PP FLUTED COVER WHITE MOUTH WITHOUT LINNER 22-415 MM LONG SKIRT', 'STRIPED LONG 22 mm', '', ''),
('21TE000610', 'TAPA ESTRIADA PP BLANCO BOCA 24 MM SIN LINNER FALDA CORTA', 'ESTRIADA L. 24 mm ', 79, 43, 1, 1, 1, 0, 5, '', 1, 6, 14, '0', 1, '', '', 1, 1, 0, '', 3, '/img/179391658.jpg', 21, 1, 'PP FLUTED TOP 24 MM MOUTH WITHOUT WHITE SHORT SKIRT LINNER', 'STRIPED LONG 24 mm', '', ''),
('21TE000800', 'TAPA ESTRIADA PP BLANCO BOCA 28-415 MM SIN LINNER FALDA LARGA', 'ESTRIADA L. 28 mm ', 79, 43, 1, 1, 1, 0, 2, '', 1, 6, 7, '0', 1, '', '', 1, 1, 0, '', 3, '/img/415006545.jpg', 25, 1, 'PP FLUTED COVER WHITE MOUTH WITHOUT LINNER 28-415 MM LONG SKIRT', 'STRIPED LONG 28 mm', '', ''),
('21TE000900', 'TAPA NES ESTRIADA PP BLANCO BOCA 80 MM SIN LINNER', 'TAPA NES 80 mm', 51, 15, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/99817366.jpg', 46, 1, 'NES TOP WHITE RIBBED PP 80 MM MOUTH WITHOUT LINNER', 'NES TOP 80 mm', '', ''),
('21TE000905', 'TAPA NES ESTRIADA PP BLANCO BOCA 53 MM SIN LINNER 8 CAV.', 'TAPA NES 53 mm', 51, 15, 1, 1, 1, 0, 6, '53', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/18392360.jpg', 41, 1, 'NES TOP WHITE RIBBED PP 53 MM MOUTH WITHOUT LINNER 8 CAV.', 'NES TOP 53 mm', '', ''),
('21TE000950', 'TAPA NES ESTRIADA PP BLANCO BOCA 62 MM SIN LINNER', 'NES 62 mm', 51, 15, 1, 1, 1, 0, 5, '', 1, 6, 12, '0', 1, '', '', 1, 1, 0, '', 3, '/img/756937477.jpg', 43, 1, 'NES TOP WHITE RIBBED PP 62 MM MOUTH WITHOUT LINNER', 'NES 62 mm', '', ''),
('21TF000010', 'TAPA . ESFÃ‰RICA PP BLANCO BOCA 18 MM SIN LINNER', 'ESFÃ‰RICA 18 mm  ', 55, 30, 10, 1, 1, 0, 6, '', 1, 6, 8, '0', 1, '', '', 1, 1, 0, '', 3, '/img/546069527.jpg', 12, 1, 'LID. PP WHITE BALL 18 MM MOUTH WITHOUT LINNER', 'BALL TOP 18 mm', '', ''),
('21TF000200', 'TAPA . ESFÃ‰RICA PP BLANCO BOCA 20 MM SIN LINNER', 'ESFÃ‰RICA 20 mm  ', 55, 30, 10, 1, 1, 0, 6, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/546973819.jpg', 14, 1, 'LID. PP WHITE BALL 20 MM MOUTH WITHOUT LINNER', 'BALL TOP 20 mm', '', ''),
('21TF000400', 'TAPA . ESFÃ‰RICA PP MORADA BOCA 24 MM SIN LINNER', 'ESFÃ‰RICA 24 mm  ', 55, 30, 10, 1, 1, 0, 5, '', 1, 6, 13, '0', 1, '', '', 1, 1, 0, '', 3, '/img/464334601.jpg', 21, 1, 'LID. PP PURPLE BALL 24 MM MOUTH WITHOUT LINNER', 'BALL TOP 24 mm', '', ''),
('21TL000010', 'TAPA RECIPIENTE 430 ml HDPE NATURAL', 'TAPA RECIPIENTE 430 ml ', 159, 75, 2, 1, 1, 0, 2, '', 1, 1, 6, '0', 1, '', '', 1, 1, 0, '', 3, '/img/198304992.png', 48, 1, '430 ml HDPE RECIPIENT TOP NATURAL', 'TOP RECIPIENT 430 ml', '', ''),
('21TL000055', 'TAPA LISA PP BLANCO BOCA 38 MM CON LINNER INCORPORADO FALDA CORTA', 'LISA CORTA 38 mm', 166, 77, 1, 1, 1, 0, 6, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/714261171.png', 35, 1, 'LISA TOP WHITE PP 38 MM MOUTH WITH BUILT SHORT SKIRT LINNER', 'LISA SHORT 38 mm', '', ''),
('21TL000070', 'TAPA LISA PP BLANCO BOCA 44 MM SIN LINNER FALDA CORTA', 'LISA CORTA 44 mm', 166, 77, 1, 1, 1, 0, 5, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/789525486.png', 37, 1, 'LISA COVER WHITE PP 44 MM MOUTH WITHOUT LINNER SHORT SKIRT', 'LISA SHORT 44 mm', '', ''),
('21TL000300', 'TAPA LISA PP BLANCO BOCA 120 MM SIN LINNER FALDA CORTA', 'LISA CORTA 120 mm', 166, 77, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/44946679.png', 49, 1, 'PP LISA WHITE TOP 120 MM WITHOUT MOUTH LINNER SHORT SKIRT', 'LISA SHORT 120 mm', '', ''),
('21TL000500', 'TAPA LISA PP BLANCO BOCA 24-415 MM SIN LINNER FALDA LARGA', 'LISA CORTA 24-410 mm', 167, 78, 1, 1, 1, 0, 5, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/890793170.png', 24, 1, 'LISA WHITE MOUTH COVER PP 24-415 MM LONG SKIRT WITHOUT LINNER', 'LISA SHORT 24-410 mm', '', ''),
('21TR000012', 'TAPA ROLL-ON CONVEXA LISA PP BLANCO BOCA 1\\''', 'ROLL-ON 1 in', 62, 34, 1, 1, 1, 0, 6, '', 7, 6, 8, '0', 1, '', '', 1, 1, 0, '', 3, '/img/25833075.png', 9, 1, 'ROLL-ON CONVEX COVER PP LISA WHITE MOUTH 1 ', 'ROLL-ON 1 in', '', ''),
('21TR000021', 'TAPA ROLL-ON BIG-BALL PP BLANCO BOCA 1.4', 'ROLL-ON 1,4 in', 63, 34, 1, 1, 1, 0, 5, '', 1, 6, 12, '0', 1, '', '', 1, 1, 0, '', 3, '/img/550623647.png', 10, 1, 'ROLL-ON COVER-BALL BIG MOUTH WHITE PP 1.4', 'ROLL-ON 1,4 in', '', ''),
('21TR000160', 'TAPA ROLL-ON CONVEXA YD PP BLANCO BOCA 1.4\\''', 'ROLL-ON 1,4 in', 63, 34, 1, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/690133123.png', 10, 1, 'ROLL-ON CONVEX COVER PP YD WHITE MOUTH 1.4 ', 'ROLL-ON 1,4 in', '', ''),
('21TR000330', 'TAPA ROLL-ON LISA PP ROSADA BOCA 1\\''', 'ROLL-ON 1 in', 62, 34, 1, 15, 1, 0, 5, '', 1, 6, 12, '0', 1, '', '', 1, 1, 0, '', 3, '/img/333305093.png', 9, 1, 'ROLL-ON COVER PINK MOUTH LISA PP 1 \\\\\\''', 'ROLL-ON 1 in', '', ''),
('21TR000500', 'TAPA ROLL-ON ESTRIADA PP GRIS BOCA 1\\''', 'ROLL-ON 1 in', 62, 34, 1, 9, 1, 0, 5, '', 1, 6, 14, '0', 1, '', '', 1, 1, 0, '', 3, '/img/275416206.png', 9, 1, 'ROLL-ON COVER GREY STRIPED MOUTH PP 1', 'ROLL-ON 1 in', '', ''),
('21TS000022', 'TAPA SEGURIDAD SNAP LDPE BLANCO BOCA 28 MM CON LINNER INCORPORADO', 'SEGURIDAD  28 mm', 150, 71, 1, 1, 1, 0, 5, '', 1, 3, 3, '0', 1, '', '', 1, 1, 0, '', 3, '/img/324311699.png', 25, 1, 'TOP SAFETY SNAP LDPE WHITE 28 MM MOUTH WITH BUILT LINNER', 'SAFETY COVER 28 mm', '', ''),
('21TS000025', 'TAPA SEGURIDAD PP BLANCO BOCA 33 MM CON LINNER INCORPORADO', 'SEGURIDAD  33 mm', 154, 71, 1, 1, 1, 0, 5, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/11258404.png', 31, 1, 'SECURITY COVER WHITE PP 33 MM MOUTH WITH BUILT LINNER', 'SAFETY COVER 33 mm', '', ''),
('21TS000060', 'TAPA SEGURIDAD NP PP BLANCO BOCA 38 MM CON LINNER INCORPORADO 2002', 'SEGURIDAD 38 mm', 152, 72, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/050154014.png', 35, 1, 'TOP SAFETY NP PP 38 MM WHITE MOUTH WITH BUILT 2002 LINNER', 'SECURITY 38 mm', '', ''),
('21TS000080', 'TAPA SEGURIDAD SNAP LDPE BLANCO BOCA 38 MM CON LINNER INCORPORADO PARA LÃCTEOS', 'LACTEOS 38 mm', 151, 82, 1, 1, 1, 0, 2, '', 1, 3, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/736662141.png', 35, 1, 'TOP SAFETY SNAP LDPE WHITE 38 MM MOUTH WITH BUILT FOR DAIRY LINNER', 'MILK 38 mm', '', ''),
('21TS000151', 'TAPA SEGURIDAD LIQUIDO FRENOS PP BLANCO BOCA 22 MM CON LINNER INCORPORADO PLANA', 'SEGURIDAD 22 mm', 27, 71, 1, 1, 1, 0, 5, '', 1, 6, 11, '0', 1, '', '', 1, 1, 0, '', 3, '/img/464755036.png', 17, 1, 'SAFETY BRAKE FLUID TOP WHITE PP 22 MM MOUTH WITH BUILT FLAT LINNER', 'SAFETY TOP 22 mm', '', ''),
('21TS000201', 'TAPA HONGO ROSCADA DANA PP BLANCO BOCA 24-415 MM SIN LINNER', 'HONGO 24-415', 4, 4, 1, 1, 1, 0, 1, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/6814605.png', 24, 1, 'PP COVER DANA WHITE YELLOW MUSHROOM 24-415 MM MOUTH WITHOUT LINNER', 'MUSHROOM TOP 24-415', '', ''),
('21TS000300', 'TAPA SNAP-TOP HONGO PP BLANCO BOCA 24 MM', 'T.HONGO SNAP', 156, 4, 1, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/251718084.png', 21, 1, 'SNAP-TOP COVER MUSHROOM WHITE PP 24 MM MOUTH', 'SNAP T.HONGO', '', ''),
('21TT000701', 'TAPA FLIP-TOP SNAP PP BLANCO BOCA 40 MM', 'TALQUERA 40 mm', 158, 5, 1, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/495367005.png', 36, 1, 'FLIP-TOP SNAP LID WHITE PP 40 MM MOUTH', 'TALQUERA 40 mm', '', ''),
('21TV000020', 'TAPA TUBO EFERVESCENTES LDPE BLANCO', 'EFERVESCENTE ', 143, 65, 1, 1, 1, 0, 5, '', 1, 3, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/987531059.png', 1, 1, 'LDPE SPARKLING WHITE TUBE TOP', 'SPARKLING TOP', '', ''),
('21UT000010', 'TUBO EFERVESCENTE PP BLANCO X 15 TABLETAS', 'TUBO EFERVESCENTE 15', 140, 61, 2, 1, 1, 0, 2, '15', 1, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/926103347.png', 9, 12, 'PP SPARKLING WHITE TUBE X 15 TABLETS', 'TUBE EFERVESCENTE 15', '', ''),
('21UT000015', 'TUBO EFERVESCENTES X 5 TABLETAS PP. BLANCO           ', 'TUBO EFERVESCENTE 5 ', 140, 61, 2, 1, 1, 0, 4, '5 ', 1, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/497161179.png', 1, 12, 'Tablets effervescent TUBE PP X5. WHITE', 'TUBE EFERVESCENTE 5', '', ''),
('21UT000030', 'TUBO EFERVESCENTE PP BLANCO X 10 TABLETAS', 'TUBO EFERVESCENTE 10', 140, 61, 2, 1, 1, 0, 3, '10', 1, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/972879949.png', 1, 12, 'PP SPARKLING WHITE TUBE x 10 TABLETS', 'TUBE EFERVESCENTE 10', '', ''),
('22BP000180', 'BOTELLA PLANA BH 200 ml PET CRISTAL BOCA 28 PCO 25 g EMP. CAJA', 'BOTELLA 200 ml  ', 89, 45, 17, 1, 1, 0, 5, '200', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/018915589.jpg', 26, 7, 'BOTTLE FLAT BH 200 ml PET GLASS MOUTH 28 PCO 25 g EMP. BOX', 'BOTTLE 200 ml ', '', ''),
('22BP000206', 'BOTELLA CILÃNDRICA AGROQUÃMICOS 250 ml PET ÃMBAR BOCA 28 PCO 22 g EMP. BOLSA', 'Btll. AGROQUIMICOS 250 ml', 30, 18, 1, 1, 1, 0, 6, '250', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/5295977.jpg', 26, 9, 'AGROCHEMICALS CYLINDRICAL BOTTLE 250 ml PET AMBER MOUTH 28 PCO 22 g EMP. BAG', 'AGROQUIMICOS BOTTLE 250', '', ''),
('22BP000210', 'BOTELLA PLANA ALIMENTOS 250 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll.ALIMENTOS 250 ml ', 24, 13, 17, 1, 1, 0, 5, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/198393329.png', 26, 10, 'FLAT BOTTLE 250 ml PET FOOD GLASS MOUTH 28 PCO 25 g EMP.BOLSA', 'FOOD Btll.250 ml', '', ''),
('22BP000240', 'BOTELLA CUADRADA AGUA GAVIOTAS 500ml PET CRISTAL BOCA 28 PCO 20 g EMP.BOLSA', 'Btll.AGUA 500 ml ', 36, 20, 1, 1, 1, 0, 6, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/339103355.png', 26, 14, 'SEAGULLS SQUARE BOTTLE WATER MOUTH GLASS 500 ml PET 28 PCO 20 g EMP.BOLSA', 'WATER BOTTLE 500 ml', '', ''),
('22BP000300', 'BOTELLA OVAL GIRASOL ASEO GR 300 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll. ASEO 300 ml ', 33, 19, 12, 1, 1, 0, 6, '300', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/097982687.png', 26, 10, 'SUNFLOWER OVAL BOTTLE GR 300 ml PET TOILET MOUTH GLASS 25g 28 PCO EMP.BOLSA', 'TOILET BOTTLE 300 ml', '', ''),
('22BP000305', 'BOTELLA CILÃNDRICA JABON LIQUIDO FM 300 ml PET CRISTAL BOCA 28 PCO 19 g EMP.BOLSA', 'Btll. JABÃ“N LIQUIDO 300 ml', 40, 22, 1, 1, 1, 0, 6, '300', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/388994793.png', 26, 11, 'CYLINDRICAL BOTTLE LIQUID SOAP 300 ml PET FM MOUTH GLASS 28 PCO 19 g EMP.BOLSA', 'LIQUID SOAP Btll. 300 ml', '', ''),
('22BP000351', 'BOTELLA PLANA BH 400 ml PET CRISTAL BOCA 28 PCO 37 g EMP. CAJA', 'BOTELLA 400 ml', 89, 45, 17, 1, 1, 0, 2, '400', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/370393667.jpg', 26, 11, 'BOTTLE 400 ml PET BH FLAT GLASS MOUTH 28 PCO 37 g EMP. BOX', 'BOTTLE 400 ml ', '', ''),
('22BP000357', 'BOTELLA CILÃNDRICA ASEO LJ 410 ml PET CRISTAL BOCA 28 PCO 22 g EMP.BOLSA', 'Btll. ASEO 150 ml ', 35, 19, 1, 1, 1, 0, 5, '410', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/927411427.png', 26, 13, 'LJ CYLINDRICAL BOTTLE 410 ml PET TOILET MOUTH GLASS 28 PCO 22 g EMP.BOLSA', 'TOILET BOTTLE 150 ml', '', ''),
('22BP000401', 'BOTELLA CILÃNDRICA AGROQUÃMICOS 500 ml PET ÃMBAR BOCA 28 PCO 28 g EMP.BOLSA', 'Btll. AGROQUIMICOS  500 ml ', 30, 18, 1, 1, 1, 0, 5, '500', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/752695811.jpg', 26, 13, 'AGROCHEMICALS CYLINDRICAL BOTTLE 500 ml PET AMBER MOUTH 28 PCO 28 g EMP.BOLSA', 'AGROQUIMICOS BOTTLE 500 ml', '', ''),
('22BP000420', 'BOTELLA CILÃNDRICA AGUA ALASKA 500 ml PET CRISTAL BOCA 28 PCO 19 g EMP.BOLSA', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/04369313.png', 26, 14, 'ALASKA CYLINDRICAL BOTTLE WATER MOUTH GLASS 500 ml PET 28 PCO 19 g EMP.BOLSA', 'WATER BOTTLE 500 ml', '', ''),
('22BP000426', 'BOTELLA CILÃNDRICA AGUA PETALOIDE 500 ml PET AZUL BOCA 28 PCO 22 g EMP. BOLSA', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/474535536.png', 26, 14, 'CYLINDRICAL WATER BOTTLE 500 ml PET pÃ©taloÃ¯de MOUTH BLUE 28 PCO 22 g EMP. BAG', 'WATER BOTTLE 500 ml', '', ''),
('22BP000430', 'BOTELLA OVAL GIRASOL  ASEO GR 500 ml PET CRISTAL BOCA 28 PCO 28 g EMP.BOLSA', 'Btll. ASEO 500 ml ', 33, 19, 12, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/059005819.png', 26, 14, 'SUNFLOWER OVAL BOTTLE 500 ml PET GROOMING GR GLASS MOUTH 28 PCO 28 g EMP.BOLSA', 'TOILET BOTTLE 500 ml', '', ''),
('22BP000440', 'BOTELLA OVAL RK 500 ml PET CRISTAL BOCA 28 PCO 37 g EMP.CAJA', 'BOTELLA 500 ml ', 89, 45, 17, 1, 1, 0, 3, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/136043297.jpg', 26, 13, 'BOTTLE OVAL RK 500 ml PET GLASS MOUTH 28 PCO 37 g EMP.CAJA', 'BOTTLE 500 ml ', '', ''),
('22BP000441', 'BOTELLA PLANA ASEO SL 500 ml PET CRISTAL BOCA 28 PCO 28 g EMP. BOLSA', 'Btll. ASEO 500 ml ', 37, 19, 17, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/72356449.png', 26, 14, 'FLAT BOTTLE 500 ml PET GROOMING SL GLASS MOUTH 28 PCO 28 g EMP. BAG', 'TOILET BOTTLE 500 ml', '', ''),
('22BP000490', 'BOTELLA CILÃNDRICA JABON LIQUIDO CP 300 ml PET CRISTAL BOCA 28 PCO 19 g EMP.BOLSA', 'Btll. JABÃ“N LIQUIDO 300 ml', 40, 22, 1, 1, 1, 0, 6, '300', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/448445710.png', 26, 11, 'CP CYLINDRICAL LIQUID SOAP BOTTLE 300 ml PET GLASS MOUTH 28 PCO 19 g EMP.BOLSA', 'LIQUID SOAP Btll. 300 ml', '', ''),
('22BP000495', 'BOTELLA CILÃNDRICA JABON LIQUIDO CP 500 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll.JABÃ“N LIQUIDO 500 ml', 40, 22, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/485041211.png', 26, 14, 'CP CYLINDRICAL LIQUID SOAP BOTTLE 500 ml PET MOUTH GLASS 25g 28 PCO EMP.BOLSA', 'LIQUID SOAP Btll. 500 ml', '', ''),
('22BP000500', 'BOTELLA CILÃNDRICA JABON LIQUIDO CIAL 500 ml PET CRISTAL BOCA 28 PCO 25 g EMP. BOLSA', 'Btll.JABÃ“N LIQUIDO 500 ml', 40, 22, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/120961588.png', 26, 14, 'CIAL CYLINDRICAL LIQUID SOAP BOTTLE 500 ml PET MOUTH GLASS 25g 28 PCO EMP. BAG', 'LIQUID SOAP Btll. 500 ml', '', ''),
('22BP000506', 'BOTELLA CILÃNDRICA JABON LIQUIDO FM 500 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll. JABÃ“N LIQUIDO 500 ml', 40, 22, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/736185699.png', 26, 14, 'CYLINDRICAL BOTTLE LIQUID SOAP 500 ml PET FM MOUTH GLASS 25g 28 PCO EMP.BOLSA', 'LIQUID SOAP Btll. 500 ml', '', ''),
('22BP000520', 'BOTELLA CILÃNDRICA JABON LIQUIDO CIAL 1000 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll.JABÃ“N LIQUIDO 1000 ml ', 40, 22, 1, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/053822831.png', 26, 15, 'CIAL CYLINDRICAL LIQUID SOAP BOTTLE 1000 ml PET GLASS MOUTH 28 PCO 37 g EMP.BOLSA', 'LIQUID SOAP BOTTLE 1000 ml', '', ''),
('22BP000522', 'BOTELLA CILÃNDRICA JABON LIQUIDO FM 1000 ml PET CRISTAL BOCA 28 PCO 47 g EMP.BOLSA', 'Btll.JABÃ“N LIQUIDO 1000 ml ', 40, 22, 1, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/283138656.png', 26, 15, 'CYLINDRICAL LIQUID SOAP BOTTLE 1000 ml PET FM MOUTH GLASS 28 PCO 47 g EMP.BOLSA', 'LIQUID SOAP Btll. 1000 ml', '', ''),
('22BP000525', 'BOTELLA ESFÃ‰RICA JABON LIQUIDO 500 ml PET CRISTAL BOCA 28 PCO 28 g EMP. CAJA', 'Btll. JABÃ“N LIQUIDO 500 ml', 40, 22, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/762215229.png', 26, 14, 'BALL BOTTLE 500 ml PET SOAP LIQUID CRYSTAL MOUTH 28 PCO 28 g EMP. BOX', 'LIQUID SOAP Btll. 500 ml', '', ''),
('22BP000530', 'BOTELLA CILÃNDRICA LICOR 375 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll. LICOR  375 ml ', 41, 23, 1, 1, 1, 0, 5, '375', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/979799656.png', 26, 11, 'LIQUOR BOTTLE 375 ml PET BULLET GLASS MOUTH 28 PCO 25 g EMP.BOLSA', 'LIQUOR BOTTLE 375 ml', '', ''),
('22BP000620', 'BOTELLA OVAL ORANGE ASEO OG 600 ml PET CRISTAL BOCA 28 PCO 37 g EMP. BOLSA', 'Btll. ASEO 600 ml ', 33, 19, 12, 1, 1, 0, 2, '600', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/87265869.png', 26, 14, 'ORANGE OVAL BOTTLE 600 ml PET GROOMING GLASS OG MOUTH 28 PCO 37 g EMP. BAG', 'TOILET BOTTLE 600 ml', '', ''),
('22BP000650', 'BOTELLA CILÃNDRICA LICOR MANZANILLA 750 ml PET CRISTAL BOCA 28 PCO 47 g EMP.BOLSA', 'Btll. LICOR  750 ml ', 41, 23, 1, 1, 1, 0, 7, '750', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/087761873.png', 26, 14, 'CYLINDRICAL BOTTLE 750 ml PET MANZANILLA LIQUOR GLASS MOUTH 28 PCO 47 g EMP.BOLSA', 'LIQUOR BOTTLE 750 ml', '', ''),
('22BP000655', 'BOTELLA CILÃNDRICA LICOR 2000 ml PET CRISTAL BOCA 28 PCO 64 g EMP. BOLSA', 'Btll. LICOR 2000 ml ', 41, 23, 1, 1, 1, 0, 2, '2000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/835953780.png', 26, 15, 'LIQUOR BOTTLE 2000 ml PET BULLET GLASS MOUTH 28 PCO 64 g EMP. BAG', 'LIQUOR BOTTLE 2000 ml', '', ''),
('22BP000710', 'BOTELLA CILÃNDRICA ASEO SL 800 ml PET CRISTAL BOCA 28 PCO 37 g EMP. BOLSA', 'Btll. AGUA 800 ml ', 37, 19, 1, 1, 1, 0, 2, '800', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/374784706.png', 26, 14, 'CYLINDRICAL BOTTLE 800 ml PET GROOMING SL GLASS MOUTH 28 PCO 37 g EMP. BAG', 'TOILET BOTTLE 800 ml', '', ''),
('22BP000720', 'BOTELLA PLANA ASEO SL 1000 ml PET CRISTAL BOCA 28 PCO 52 g EMP. BOLSA', 'Btll. ASEO 1000 ml ', 37, 19, 1, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/294061567.png', 26, 15, 'FLAT BOTTLE 1000 ml PET GROOMING SL GLASS MOUTH 28 PCO 52 g EMP. BAG', 'TOILET BOTTLE 1000 ml ', '', ''),
('22BP000750', 'BOTELLA CILÃNDRICA SALSAS 1000 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll.SALSAS 1000 ml ', 24, 13, 1, 1, 1, 0, 2, '1000', 3, 5, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/71042556.png', 26, 15, 'SAUCE BOTTLE 1000 ml PET BULLET GLASS MOUTH 28 PCO 37 g EMP.BOLSA', 'SAUCE Btll.1000 ml', '', ''),
('22BP000763', 'BOTELLA CILÃNDRICA AGROQUÃMICOS 1000 ml PET ÃMBAR BOCA 28 PCO 47 g EMP. BOLSA', 'Btll. AGROQUIMICOS 1000 ml ', 30, 18, 1, 1, 1, 0, 2, '1000', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/05215303.jpg', 26, 14, 'AGROCHEMICALS CYLINDRICAL BOTTLE 1000 ml PET AMBER MOUTH 28 PCO 47 g EMP. BAG', 'Agrochemical Bottle 1000 ml', '', ''),
('22BP000790', 'BOTELLA CUADRADA ACEITES 1000 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll. ACEITES 1000 ml ', 24, 13, 7, 1, 1, 0, 2, '1000', 3, 5, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/69865207.png', 26, 14, 'SQUARE BOTTLE 1000 ml PET OILS GLASS MOUTH 28 PCO 37 g EMP.BOLSA', 'OIL Btll.1000 ml', '', ''),
('22BP000811', 'BOTELLA CILÃNDRICO BALA CDI 1000 ml PET CRISTAL BOCA 28 PCO 47 g EMP. BOLSA', 'ENVASE SM 1000 ml', 21, 2, 3, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/610069368.png', 26, 14, 'CDI CYLINDRICAL BOTTLE 1000 ml PET BULLET GLASS MOUTH 28 PCO 47 g EMP. BAG', 'BOTTLE SM 1000 ml', '', ''),
('22BP000850', 'BOTELLA CILÃNDRICA ASEO NP 1250 ml PET CRISTAL BOCA 28 PCO 56 g EMP. BOLSA', 'Btll. ASEO 1250  ml ', 38, 19, 1, 1, 1, 0, 2, '1250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/716335981.png', 26, 15, 'NP CYLINDRICAL BOTTLE 1250 ml PET TOILET MOUTH GLASS 28 PCO 56 g EMP. BAG', 'TOILET BOTTLE 1250 ml', '', ''),
('22BP000970', 'BOTELLA OVAL NP 400 ml PET CRISTAL BOCA 28 PCO 37 g EMP.CAJA', 'ENVASE 400', 29, 1, 12, 1, 1, 0, 3, '400', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/654176378.png', 26, 13, 'BOTTLE 400 ml PET OVAL GLASS NP MOUTH 28 PCO 37 g EMP.CAJA', 'BOTTLE 400', '', ''),
('22BP000975', 'BOTELLA OVAL NP 1000 ml PET CRISTAL BOCA 28 PCO 60 g EMP. CAJA', 'BOTELLA 1000 ml ', 29, 1, 12, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/311149460.png', 26, 15, 'NP BOTTLE 1000 ml PET OVAL GLASS MOUTH 28 PCO 60 g EMP. BOX', 'BOTTLE 1000 ml', '', ''),
('22CB000005', 'ENVASE CILÃNDRICO BALA 60 ml PVC BLANCO BOCA 20-415MM', 'ENVASE 60 ml ', 103, 1, 3, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/680148966.png', 16, 17, 'BALA CYLINDRICAL CONTAINER 60 ml PVC 20-415MM WHITE MOUTH', 'BOTTLE 60 ml ', '', ''),
('22CB000101', 'ENVASE CILÃNDRICO LÃQUIDO FRENOS 240 ml HDPE BLANCO BOCA 22 MM 8 CAV. EMP. CAJA', 'LIQUIDO FRENOS 240 ml', 28, 17, 2, 1, 1, 0, 1, '240', 3, 1, 10, '0', 1, '', '', 1, 1, 0, '', 1, '/img/75794552.png', 17, 9, 'BRAKE FLUID CYLINDRICAL CONTAINER 240 ml HDPE WHITE MOUTH 22 MM 8 CAV. EMP. BOX', 'BRAKE FLUID BOTTLE 240', '', ''),
('22CB000251', 'ENVASE CILÃNDRICO BALA NP 250 ml HDPE BLANCO BOCA 24-410 MM 4 CAV.', 'ENVASE BALA NP 250 mm ', 47, 1, 3, 1, 1, 0, 3, '250', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/029633512.jpg', 23, 10, 'CYLINDRICAL BOTTLE 250 ml HDPE BULLET WHITE NP 24-410 MM 4 CAV MOUTH.', 'BULLET BOTTLE NP 250 mm', '', ''),
('22CB000301', 'ENVASE CILÃNDRICO BALA SOFT TOUCH 250 ml HDPE SOFT TOUCH NATURAL BOCA 24 MM', 'ENVASE 250 ml ', 103, 1, 3, 1, 1, 0, 5, '250', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/541344209.png', 21, 9, 'SOFT TOUCH BULLET CYLINDRICAL CONTAINER 250 ml HDPE NATURAL SOFT TOUCH 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22CB000350', 'ENVASE CILÃNDRICO BALA NP 300 ml HDPE BLANCO BOCA 24-415 MM 4 CAV.', 'ENVASE 300 ml ', 47, 1, 3, 1, 1, 0, 2, '300', 3, 5, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/498891636.jpg', 24, 11, 'CYLINDRICAL BOTTLE  NP 300 ml HDPE BULLET WHITE MOUTH 24-415 MM 4 CAV.', 'BOTTLE 300 ml', '', ''),
('22EC000020', 'ENVASE CILÃNDRICO CAPSULERO MEDIANO 30 ml HDPE BLANCO BOCA 28 MM SNAP', 'CAPSULERO 30 ml', 126, 54, 6, 1, 1, 0, 4, '30', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/466149279.png', 25, 12, 'CAPSULERO CYLINDRICAL CONTAINER MEDIUM WHITE MOUTH 30 ml HDPE 28 MM SNAP', 'CAPSULE 30 ml', '', ''),
('22EC000031', 'ENVASE PASTILLERO PLANO X 40 ML HDPE BLANCO BOCA 28 MM C/TAPON    ', 'PASTILLERO 40ml', 126, 54, 6, 1, 1, 0, 4, '40', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/652184855.png', 25, 12, 'PILL BOTTLE X 40 ML FLAT WHITE MOUTH HDPE 28 MM C / CAP', 'PILL 40ml', '', ''),
('22EH000001', 'ENVASE CILÃNDRICO 60 ml PVC ÃMBAR BOCA 28 MM 4 CAV. NUEVO', 'ENVASE 60 ml ', 73, 40, 2, 1, 1, 0, 4, '60', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/338696046.jpg', 25, 17, '60 ml PVC CYLINDRICAL CONTAINER AMBER MOUTH 28 MM 4 CAV. NEW', 'BOTTLE 60 ml ', '', ''),
('22EH000005', 'ENVASE CILÃNDRICO 60 ml PVC BLANCO BOCA 28 MM 4 CAV. NUEVO', 'ENVASE 60 ml ', 73, 40, 2, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/079346194.jpg', 25, 17, '60 ml PVC CONTAINER WHITE CYLINDRICAL MOUTH 28 MM 4 CAV. NEW', 'BOTTLE 60 ml ', '', ''),
('22EH000010', 'ENVASE CILÃNDRICO 90 ml PVC ÃMBAR BOCA 38 MM 2 CAV. NUEVO', 'ENVASE 90 ml ', 73, 40, 2, 1, 1, 0, 4, '90', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/520463365.jpg', 35, 17, '90 ml PVC CYLINDRICAL CONTAINER AMBER MOUTH 38 MM 2 CAV. NEW', 'BOTTLE 90 ml ', '', ''),
('22EH000011', 'ENVASE CILÃNDRICO 90 ml PVC BLANCO BOCA 38 MM 2 CAV. NUEVO', 'ENVASE 90 ml ', 73, 40, 2, 1, 1, 0, 4, '90', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/26811714.jpg', 35, 17, '90 ml PVC CONTAINER WHITE CYLINDRICAL MOUTH 38 MM 2 CAV. NEW', 'BOTTLE 90 ml ', '', ''),
('22EH000020', 'ENVASE CILÃNDRICO 120 ml PVC ÃMBAR BOCA 38 MM', 'ENVASE 120 ml ', 73, 40, 2, 1, 1, 0, 3, '120', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/55038547.jpg', 35, 6, 'CYLINDRICAL CONTAINER 120 ml PVC 38MM AMBER MOUTH', 'BOTTLE 120 ml ', '', ''),
('22EH000022', 'ENVASE CILÃNDRICO 120 ml PVC BLANCO BOCA 38 MM', 'ENVASE 120 ml ', 73, 40, 2, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/213834627.jpg', 35, 6, 'CYLINDRICAL CONTAINER 120 ml PVC WHITE 38 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22EH000035', 'ENVASE CILÃNDRICO 180 ml PVC BLANCO BOCA 38 MM', 'ENVASE 120 ml ', 73, 40, 2, 1, 1, 0, 3, '180', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/065162441.jpg', 35, 7, 'CYLINDRICAL CONTAINER 180 ml â€‹â€‹PVC WHITE 38 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22EH000036', 'ENVASE CILÃNDRICO 180 ml PVC ÃMBAR BOCA 38 MM', 'ENVASE 180 ml ', 73, 40, 2, 1, 1, 0, 3, '180', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/238896748.jpg', 35, 7, 'CYLINDRICAL CONTAINER 180 ml â€‹â€‹PVC 38MM AMBER MOUTH', 'BOTTLE 180 ml ', '', ''),
('22EH000040', 'ENVASE CILÃNDRICO 275 ml PVC ÃMBAR BOCA 44 MM', 'ENVASE 275 ml ', 73, 40, 2, 1, 1, 0, 2, '275', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/046175006.jpg', 37, 10, 'CYLINDRICAL CONTAINER 275 ml PVC 44MM AMBER MOUTH', 'BOTTLE 275 ml ', '', ''),
('22EH000041', 'ENVASE CILÃNDRICO 275 ml PVC BLANCO BOCA 44 MM', 'ENVASE 275 ml ', 73, 40, 2, 1, 1, 0, 3, '275', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/352158668.jpg', 37, 10, 'CYLINDRICAL CONTAINER 275 ml PVC WHITE 44 MM MOUTH', 'BOTTLE 275 ml', '', ''),
('22EO000400', 'ENVASE OVAL CF 400 ml PP BLANCO BOCA 24 MM SNAP 4 CAV.', 'ENVASE 400 ml ', 54, 1, 12, 1, 1, 0, 3, '400', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/750868901.jpg', 21, 13, 'OVAL BOTTLE 400 ml PP CF WHITE MOUTH 24MM SNAP 4 CAV.', 'BOTTLE 400 ml ', '', ''),
('22EO000416', 'ENVASE OVAL CF 400 ml HDPE BLANCO BOCA 24 MM SNAP', 'ENVASE 400 ml ', 54, 1, 12, 1, 1, 0, 3, '400 ', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/877953593.jpg', 21, 13, 'CF CONTAINER 400 ml HDPE OVAL WHITE MOUTH 24MM SNAP', 'BOTTLE 400 ml ', '', ''),
('22EO000550', 'ENVASE OVAL 200 ml HDPE BLANCO BOCA 24 MM SNAP C/BASE', 'ENVASE 200 ml ', 97, 25, 12, 1, 1, 0, 4, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/320243233.jpg', 21, 7, '200 ml HDPE CONTAINER WHITE OVAL MOUTH 24MM SNAP C / BASE', 'BOTTLE 200 ml ', '', ''),
('22EO000560', 'ENVASE OVAL 400 ml HDPE BLANCO BOCA 24 MM SNAP C/BASE', 'ENVASE 400 ml ', 97, 25, 12, 1, 1, 0, 3, '400', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/875494996.jpg', 21, 11, '400 ml HDPE CONTAINER WHITE OVAL MOUTH 24MM SNAP C / BASE', 'BOTTLE 400 ml ', '', ''),
('22EO000570', 'ENVASE OVAL 520 ml HDPE BLANCO BOCA 24 MM SNAP C/BASE', 'ENVASE 500 ml ', 97, 25, 12, 1, 1, 0, 2, '500', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/965105517.jpg', 21, 13, '520 ml HDPE CONTAINER WHITE OVAL MOUTH 24MM SNAP C / BASE', 'BOTTLE 500 ml ', '', ''),
('22EO000600', 'ENVASE OVAL C/BASE X 120 ML PEAD BLANCO BOCA 24 SNAP    ', 'ENVASE 120 ml ', 97, 25, 12, 1, 1, 0, 4, '120', 3, 10, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/398266000.jpg', 21, 6, 'OVAL CONTAINER C / BASE X 120 ML HDPE WHITE MOUTH 24 SNAP', 'BOTTLE 120 ml ', '', ''),
('22EO000700', 'ENVASE OVAL CF 750 ml PP BLANCO BOCA 24 MM SNAP 4 CAV.', 'ENVASE 750 ml ', 54, 1, 12, 1, 1, 0, 2, '750', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/110802922.jpg', 21, 14, 'OVAL BOTTLE 750 ml PP CF WHITE MOUTH 24MM SNAP 4 CAV.', 'BOTTLE 750 ml', '', ''),
('22EO000710', 'ENVASE OVAL CF 750 ml HDPE BLANCO BOCA 24 MM SNAP', 'ENVASE 750 ml ', 54, 1, 12, 1, 1, 0, 2, '750', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/52933923.jpg', 21, 14, 'CF CONTAINER 750 ml HDPE OVAL WHITE MOUTH 24MM SNAP', 'BOTTLE 750 ml ', '', ''),
('22EO000800', 'ENVASE OVALADO NT 750 ml HDPE BLANCO BOCA 24 MM SNAP', 'ENVASE 750 ml ', 43, 25, 12, 1, 1, 0, 2, '750', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/060312574.jpg', 21, 14, 'PACKAGING NT 750 ml HDPE OVAL WHITE MOUTH 24MM SNAP', 'BOTTLE 750 ml', '', ''),
('22ES000471', 'ENVASE OVALADO TOTTLE 650 ml HDPE BLANCO BOCA 24 MM 4 CAV.', 'ENVASE 650 ml', 53, 1, 13, 1, 1, 0, 2, '650', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/33252942.jpg', 21, 14, 'Tottle BOTTLE 650 ml HDPE OVAL MOUTH WHITE 24 MM 4 CAV.', 'BOTTLE 650 ml ', '', ''),
('22ES000501', 'ENVASE TERCIOPELO X 500 ML PP. BLANCO PERLADO BOCA 24 MM T. FLIP-TOP SNAP  ', 'ENVASE TERCIOPELO', 45, 25, 12, 1, 1, 0, 2, '500', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/977808863.jpg', 21, 14, 'CONTAINER VELVET X 500 ML PP. WHITE PEARL MOUTH 24MM T. FLIP-TOP SNAP', 'VELVET BOTTLE', '', ''),
('22FA000008', 'ENVASE PASTILLERO PLANO X 60 ML PEAD BLANCO BOCA 28 MM ALUSUD    ', 'PASTILLERO 60ml', 126, 54, 7, 1, 1, 0, 4, '60', 3, 10, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/964981518.png', 25, 17, 'PILL BOTTLE 60 ML HDPE FLAT WHITE X 28 MM MOUTH ALUSUD', 'PILL 60ml', '', ''),
('22FA000011', 'ENVASE CUADRADO ANTIÃCIDO 120 ml HDPE BLANCO BOCA 28 MM 1 CAV.', 'ANTIACIDO 120 ml', 122, 51, 6, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/316803692.png', 25, 6, 'ANTACID SQUARE BOTTLE 120 ml HDPE WHITE MOUTH 28 MM 1 CAV.', 'ANTACID 120 ml', '', ''),
('22FA000015', 'ENVASE CUADRADO ANTIÃCIDO 150 ml HDPE BLANCO BOCA 28 MM 4 CAV.', 'ANTIACIDO 150 ml', 122, 51, 6, 1, 1, 0, 3, '150', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/494107470.png', 25, 6, 'ANTACID SQUARE BOTTLE 150 ml HDPE WHITE MOUTH 28 MM 4 CAV.', 'ANTACID 150 ml', '', ''),
('22FA000022', 'ENVASE CUADRADO ANTIÃCIDO 180 ml HDPE BLANCO BOCA 28 MM 1 CAV.', 'ANTIACIDO 180 ml', 122, 51, 6, 1, 1, 0, 3, '180', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/772697620.png', 25, 7, 'ANTACID SQUARE BOTTLE WHITE MOUTH 180 ml HDPE 28 MM 1 CAV.', 'ANTACID 180 ml', '', ''),
('22FA000023', 'ENVASE CUADRADO ANTIÃCIDO 180 ml HDPE BLANCO BOCA 38 MM 1 CAV.', 'ANTIACIDO 180 ml', 122, 51, 6, 1, 1, 0, 3, '180', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/641806697.png', 35, 7, 'ANTACID SQUARE CONTAINER WHITE MOUTH 180 ml HDPE 38 MM 1 CAV.', 'ANTACID 180 ml', '', ''),
('22FA000026', 'ENVASE CUADRADO ANTIÃCIDO NP 180 ml HDPE BLANCO BOCA 38 MM 4 CAV.', 'ANTIACIDO 180 ml', 123, 51, 6, 1, 1, 0, 3, '180', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/895574369.png', 35, 7, 'NP ANTACID SQUARE BOTTLE 180 ml HDPE WHITE MOUTH 38 MM 4 CAV.', 'ANTACID 180 ml', '', ''),
('22FA000030', 'ENVASE ANTIACIDO X 360 ML PEAD BLANCO BOCA 28 MM      ', 'ANTIACIDO 360 ml', 122, 51, 6, 1, 1, 0, 2, '360', 3, 10, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/970965494.png', 25, 11, 'ANTACID X 360 ML CONTAINER WHITE MOUTH HDPE 28 MM', 'ANTACID360 ml', '', ''),
('22FA000039', 'ENVASE CUADRADO ANTIÃCIDO 360 ml HDPE BLANCO BOCA 38 MM 6 CAV.', 'ANTIACIDO 360 ml', 122, 51, 6, 1, 1, 0, 2, '360', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/07145877.png', 35, 11, 'ANTACID SQUARE BOTTLE 360 ml HDPE WHITE MOUTH 38 MM 6 CAV.', 'ANTACID360 ml', '', ''),
('22FA000042', 'ENVASE CUADRADO ANTIÃCIDO NP 360 ml HDPE BLANCO BOCA 38 MM 6 CAV.', 'ANTIACIDO 360 ml', 123, 51, 6, 1, 1, 0, 2, '360', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/918674856.png', 35, 11, 'NP ANTACID SQUARE BOTTLE 360 ml HDPE WHITE MOUTH 38 MM 6 CAV.', 'ANTACID360 ml', '', ''),
('22FC000005', 'ENVASE CILÃNDRICO CON ANILLO 30 ml PVC CRISTAL BOCA 18 MM', 'ENVASE 30 ml ', 52, 1, 2, 1, 1, 0, 4, '30', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/989505228.jpg', 12, 12, 'CYLINDRICAL CONTAINER WITH 30 ml PVC GLASS RING 18 MM MOUTH', 'BOTTLE 30 ml ', '', ''),
('22FC000006', 'ENVASE CILÃNDRICO CON ANILLO 30 ml PVC BLANCO BOCA 18 MM', 'ENVASE 30 ml ', 52, 1, 2, 1, 1, 0, 4, '30', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/197391217.jpg', 12, 12, 'CYLINDRICAL CONTAINER WITH RING 30 ml PVC WHITE 18 MM MOUTH', 'BOTTLE 30 ml ', '', ''),
('22FC000020', 'ENVASE CILÃNDRICO 30 ml HDPE BLANCO BOCA 18 MM', 'ENVASE 30 ml ', 75, 1, 2, 1, 1, 0, 4, '30', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/96702805.jpg', 12, 12, '30 ml HDPE CONTAINER WHITE CYLINDRICAL MOUTH 18 MM', 'BOTTLE 30 ml ', '', ''),
('22FC000040', 'ENVASE CILÃNDRICO 60 ml PVC CRISTAL BOCA 18 MM BOTELLITA', 'ENVASE 60 ml ', 75, 1, 2, 1, 1, 0, 4, '60', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/969408306.jpg', 12, 17, 'PVC CONTAINER GLASS CYLINDRICAL 60 ml bottle 18 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FC000041', 'ENVASE CILÃNDRICO 60 ml PVC BLANCO BOCA 18 MM FALDA LARGA BOTELLITA', 'ENVASE 60 ml ', 75, 1, 2, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/340591371.jpg', 12, 12, '60 ml PVC CONTAINER WHITE CYLINDRICAL MOUTH 18MM LONG SKIRT bottle', 'BOTTLE 60 ml ', '', ''),
('22FC000095', 'ENVASE CILÃNDRICO GRABADO 45 ml PVC CRISTAL BOCA 18 MM', 'ENVASE 45 ml ', 105, 1, 2, 1, 1, 0, 4, '45', 3, 9, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/854465333.png', 12, 12, 'CYLINDRICAL CONTAINER GLASS ENGRAVING 45 ml PVC 18 MM MOUTH', 'BOTTLE 45 ml ', '', ''),
('22FC000098', 'ENVASE CILINDRICO GRABADO X 90 ML PEAD NATURAL BOCA 20 MM ', 'ENVASE 90 ml ', 105, 1, 2, 1, 1, 0, 4, '90', 3, 10, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/065171974.png', 14, 17, 'ENGRAVED CYLINDRICAL CONTAINER X 90 ML NATURAL HDPE 20 MM MOUTH', 'BOTTLE 90 ml ', '', ''),
('22FC000128', 'ENVASE CILÃNDRICO 60 ml PVC BLANCO BOCA 20 MM', 'ENVASE 60 ml ', 75, 1, 2, 1, 1, 0, 4, '60', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/858292329.jpg', 14, 17, 'CYLINDRICAL CONTAINER 60 ml PVC WHITE 20 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FC000140', 'ENVASE CILÃNDRICO HS 60 ml HDPE BLANCO BOCA 18 MM', 'ENVASE 60 ml ', 113, 1, 2, 1, 1, 0, 4, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/822395693.png', 12, 17, 'CYLINDRICAL CONTAINER WHITE HS 60 ml HDPE 18 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FC000145', 'ENVASE CILÃNDRICO ISO 120 ml HDPE BLANCO BOCA 28 MM 4 CAV.', 'ENVASE ISO 120 ml', 129, 55, 2, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/880744756.png', 25, 6, 'CYLINDRICAL CONTAINER ISO 120 ml HDPE WHITE MOUTH 28 MM 4 CAV.', 'ISO 120 ml BOTTLE', '', ''),
('22FC000146', 'ENVASE CILÃNDRICO ISO 60 ml HDPE BLANCO BOCA 28 MM 6 CAV.', 'ENVASE ISO 60 ml', 129, 55, 2, 1, 1, 0, 4, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/135748439.png', 25, 17, 'CYLINDRICAL CONTAINER ISO 60 ml HDPE WHITE MOUTH 28 MM 6 CAV.', 'ISO 60 ml BOTTLE', '', ''),
('22FC000149', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO BOSTON ROUND 60 ml PP NATURAL BOCA 28 MM', 'ENVASE 60 ml ', 127, 35, 2, 1, 1, 0, 4, '60', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/162735321.png', 25, 17, 'PHARMACIST CYLINDRICAL BOTTLE BOSTON NATURAL ROUND 60 ml PP 28 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FC000150', 'ENVASE CILÃNDRICO 120 ml HDPE NATURAL BOCA 20 MM', 'ENVASE 120 ml ', 75, 1, 2, 1, 1, 0, 3, '120', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/419308677.jpg', 14, 6, 'CYLINDRICAL CONTAINER 120 ml HDPE NATURAL 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FC000199', 'ENVASE CILÃNDRICO 120 ml HDPE NATURAL BOCA 24 MM', 'ENVASE 120 ml ', 75, 1, 2, 1, 1, 0, 3, '120', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/39791175.jpg', 21, 6, 'CYLINDRICAL CONTAINER 120 ml HDPE NATURAL 24 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FC000212', 'ENVASE CILÃNDRICO 120 ml PVC BLANCO BOCA 24 MM', 'ENVASE 120 ml ', 75, 1, 2, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/67635987.jpg', 21, 6, 'CYLINDRICAL CONTAINER 120 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 120 ml ', '', '');
INSERT INTO `productos` (`producto_codigo`, `producto_descripcion`, `producto_nombre`, `categoria_id`, `sublinea_id`, `forma_id`, `producto_atributo1`, `producto_atributo2`, `producto_entradas`, `tamano_id`, `producto_capacidad`, `producto_unidadCap`, `material_id`, `color_id`, `producto_boca`, `producto_unidadBoca`, `producto_peso`, `producto_terminado`, `linner_id`, `falda_id`, `producto_cavidades`, `producto_anotacion`, `clase_id`, `producto_imagen`, `boca_id`, `capacidad_id`, `producto_descripcion_i`, `producto_nombre_i`, `producto_terminado_i`, `producto_anotacion_i`) VALUES
('22FC000241', 'ENVASE CILÃNDRICO 120 ml PVC CRISTAL BOCA 24 MM STM CONVEXA', 'ENVASE 120 ml ', 75, 1, 2, 1, 1, 0, 3, '120', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/985966238.jpg', 21, 6, '120 ml PVC CONTAINER GLASS CYLINDRICAL MOUTH CONVEX 24 MM STM', 'BOTTLE 120 ml ', '', ''),
('22FC000250', 'ENVASE CILÃNDRICO BALA 120 ml PVC CRISTAL BOCA 20 MM', 'ENVASE 120 ml ', 103, 1, 3, 1, 1, 0, 4, '120', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/452362191.png', 14, 6, 'BALA CYLINDRICAL CONTAINER 120 ml PVC GLASS 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FC000251', 'ENVASE CILÃNDRICO BALA 120 ml PVC BLANCO BOCA 20 MM', 'ENVASE 120 ml ', 103, 1, 3, 1, 1, 0, 4, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/777594117.png', 14, 6, 'BALA CYLINDRICAL CONTAINER 120 ml PVC WHITE 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FC000271', 'ENVASE CILÃNDRICO BALA 120 ml HDPE BLANCO BOCA 20 MM 4 CAV.', 'ENVASE 120 ml ', 103, 1, 3, 1, 1, 0, 4, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/48445389.png', 14, 6, 'CYLINDRICAL CONTAINER 120 ml HDPE BULLET WHITE MOUTH 20 MM 4 CAV.', 'BOTTLE 120 ml ', '', ''),
('22FC000301', 'ENVASE CILÃNDRICO 150 ml HDPE BLANCO BOCA 24 MM 2 CAV.', 'ENVASE 150 ml ', 75, 1, 2, 1, 1, 0, 3, '150', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/122379581.jpg', 21, 6, '150 ml HDPE CONTAINER WHITE CYLINDRICAL MOUTH 24 MM 2 CAV.', 'BOTTLE 150 ml ', '', ''),
('22FC000316', 'ENVASE CILÃNDRICO 150 ml LDPE BLANCO BOCA 24 MM 2 CAV. DOSIFICADORA', 'ENVASE 150 ml ', 75, 1, 2, 1, 1, 0, 3, '150', 3, 3, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/683203558.jpg', 21, 6, 'BOTTLE 150 ml LDPE WHITE CYLINDRICAL MOUTH 24 MM 2 CAV. DOSING', 'BOTTLE 150 ml ', '', ''),
('22FC000327', 'ENVASE CILÃNDRICO 150 ml PVC CRISTAL BOCA 20 MM 4 CAV. NUEVO', 'ENVASE 150 ml ', 75, 1, 2, 1, 1, 0, 3, '150', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/433186450.jpg', 14, 6, '150 ml PVC CONTAINER GLASS CYLINDRICAL MOUTH 20 MM 4 CAV. NEW', 'BOTTLE 150 ml ', '', ''),
('22FC000384', 'ENVASE CILÃNDRICO BALA 160 ml HDPE NATURAL BOCA 24 MM 2 CAV. VÃLVULA', 'ENVASE 160 ml ', 103, 1, 3, 1, 1, 0, 3, '160', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/731919660.png', 23, 7, 'CYLINDRICAL CONTAINER 160 ml HDPE BALA NATURAL 24 MM 2 CAV MOUTH. VALVE', 'BOTTLE 160 ml ', '', ''),
('22FC000392', 'ENVASE CILINDRICO BALA X 160 ML PEAD BLANCO BOCA 24-415 MM (PESO 20 GR) COD:90001-005    ', 'ENVASE 160 ml ', 103, 1, 3, 1, 1, 0, 3, '160', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/488014112.png', 24, 7, 'CYLINDRICAL CONTAINER X 160 ML HDPE BULLET WHITE MOUTH 24-415 MM (WEIGHT 20 GR) :90001-005 COD', 'BOTTLE 160 ml ', '', ''),
('22FC000413', 'ENVASE CILÃNDRICO 240 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 240 ml ', 75, 1, 2, 1, 1, 0, 3, '240', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/872407154.jpg', 21, 9, 'CYLINDRICAL CONTAINER 240 ml HDPE 24 MM WHITE MOUTH', 'BOTTLE 240 ml ', '', ''),
('22FC000443', 'ENVASE CILÃNDRICO 240 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 240 ml ', 75, 1, 2, 1, 1, 0, 3, '240', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/895634981.jpg', 21, 9, '240 ml PVC CONTAINER GLASS CYLINDRICAL MOUTH 24MM', 'BOTTLE 240 ml ', '', ''),
('22FC000445', 'ENVASE CILÃNDRICO 240 ml PVC BLANCO BOCA 24 MM', 'ENVASE 240 ml ', 75, 1, 2, 1, 1, 0, 3, '240', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/060467478.jpg', 21, 9, 'CYLINDRICAL CONTAINER 240 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 240 ml ', '', ''),
('22FC000500', 'ENVASE CILÃNDRICO GRABADO 250 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 250 ml ', 105, 1, 2, 1, 1, 0, 3, '250', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/11949358.png', 21, 9, 'CYLINDRICAL CONTAINER GLASS ENGRAVING 250 ml PVC 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FC000501', 'ENVASE CILÃNDRICO GRABADO 250 ml PVC BLANCO BOCA 24 MM', 'ENVASE 250 ml ', 105, 1, 2, 1, 1, 0, 3, '250', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/74280189.png', 21, 9, 'ENGRAVED CYLINDRICAL CONTAINER 250 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FC000561', 'ENVASE CILÃNDRICO BALA 250 ml PVC BLANCO BOCA 24 MM', 'ENVASE 250 ml ', 103, 1, 3, 1, 1, 0, 3, '250', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/8334172.png', 24, 9, 'CONTAINER CYLINDRICAL BALA 250 ml PVC WHITE MOUTH 24MM', 'BOTTLE 250 ml ', '', ''),
('22FC000581', 'ENVASE CILÃNDRICO BALA 250 ml HDPE NATURAL BOCA 24 MM 4 CAV.', 'ENVASE 250 ml ', 103, 1, 3, 1, 1, 0, 3, '250', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/754264899.png', 21, 9, 'CYLINDRICAL CONTAINER 250 ml HDPE BULLET MOUTH NATURAL 24 MM 4 CAV.', 'BOTTLE 250 ml ', '', ''),
('22FC000588', 'ENVASE CILINDRICO BALA X 250 ML PEAD NATURAL BOCA 24-410 MM VALVULA  ', 'ENVASE 250 ml ', 103, 1, 3, 1, 1, 0, 3, '250', 3, 3, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/33609750.png', 23, 9, 'CYLINDRICAL CONTAINER X 250 ML LDPE BALA NATURAL FACE VALVE 24-410 MM', 'BOTTLE 250 ml ', '', ''),
('22FC000590', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO MTH 90 ml HDPE BLANCO BOCA 28 MM', 'ENVASE 90 ml ', 64, 35, 2, 1, 1, 0, 3, '90', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/787144896.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER MTH 90 ml HDPE 28 MM WHITE MOUTH', 'BOTTLE 90 ml ', '', ''),
('22FC000591', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO MTH 60 ml HDPE BLANCO BOCA 28 MM', 'ENVASE 60 ml ', 64, 35, 1, 1, 1, 0, 4, '60', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/493705610.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER MTH 60 ml HDPE 28 MM WHITE MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FC000594', 'ENVASE CILÃNDRICO BALA SOFT TOUCH 250 ml PP SOFT TOUCH NATURAL BOCA 24 MM', 'ENVASE 250 ml ', 103, 1, 3, 1, 1, 0, 5, '250', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/480189683.png', 21, 9, 'SOFT TOUCH BULLET CYLINDRICAL CONTAINER 250 ml NATURAL SOFT TOUCH PP 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FC000611', 'ENVASE CILÃNDRICO 300 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 300 ml ', 75, 1, 2, 1, 1, 0, 3, '300', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/381808884.jpg', 21, 10, 'CYLINDRICAL CONTAINER 300 ml HDPE 24 MM WHITE MOUTH', 'BOTTLE 300 ml ', '', ''),
('22FC000631', 'ENVASE CILÃNDRICO 300 ml PVC BLANCO BOCA 24 MM', 'ENVASE 300 ml ', 75, 1, 2, 1, 1, 0, 3, '300', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/112106716.jpg', 21, 10, 'CYLINDRICAL CONTAINER 300 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 300 ml ', '', ''),
('22FC000670', 'ENVASE CILÃNDRICO CREMA PEINAR 300 ml HDPE BLANCO BOCA 33-400 MM 6 CAV.', 'ENVASE 300', 22, 1, 2, 1, 1, 0, 2, '300', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/297722552.png', 33, 11, 'CYLINDRICAL BOTTLE  STYLING CREAM 300 ml HDPE WHITE MOUTH 33-400 MM 6 CAV.', 'BOTTLE 300', '', ''),
('22FC000700', 'ENVASE CILÃNDRICO 180 ml PVC CRISTAL BOCA 22 MM CUELLO LARGO', 'ENVASE 180 ml ', 107, 1, 1, 1, 1, 0, 5, '180', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/021545951.jpg', 17, 7, '180 ml â€‹â€‹PVC CONTAINER GLASS CYLINDRICAL MOUTH NECK 22MM LONG', 'BOTTLE 180 ml ', '', ''),
('22FC000706', 'ENVASE CILÃNDRICO 180 ml PVC ROSADO BOCA 24 MM CUELLO LARGO', 'ENVASE 180 ml ', 107, 1, 1, 1, 1, 0, 5, '180', 3, 9, 12, '0', 1, '', '', 1, 1, 0, '', 1, '/img/224363311.jpg', 21, 7, 'CYLINDRICAL CONTAINER 180 ml â€‹â€‹PVC PINK MOUTH 24MM LONG NECK', 'BOTTLE 180 ml ', '', ''),
('22FC000751', 'ENVASE CILÃNDRICO ENJUAGUE BUCAL 180 ml PVC BLANCO BOCA 28 MM', 'ENJUAGUE 180 ml', 76, 1, 2, 1, 1, 0, 3, '181', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/170479083.jpg', 25, 7, 'MOUTHWASH CYLINDRICAL CONTAINER 180 ml â€‹â€‹PVC WHITE 28 MM MOUTH', 'RINSE 180 ml', '', ''),
('22FC000781', 'ENVASE CILÃNDRICO GRABADO 500 ml HDPE BLANCO BOCA 28 MM', 'ENVASE 500 ml ', 105, 1, 2, 1, 1, 0, 2, '500', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/65048697.png', 25, 13, 'CYLINDRICAL CONTAINER WHITE ENGRAVING 500 ml HDPE 28 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FC000791', 'ENVASE CILÃNDRICO GRABADO 500 ml PVC CRISTAL BOCA 28 MM', 'ENVASE 500 ml ', 105, 1, 2, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/019698422.png', 25, 13, 'ENGRAVED CYLINDRICAL CONTAINER 500 ml PVC MOUTH GLASS 28 MM', 'BOTTLE 500 ml ', '', ''),
('22FC000819', 'ENVASE CILÃNDRICO 500 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 500 ml ', 75, 1, 2, 1, 1, 0, 2, '500', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/873957777.jpg', 21, 13, 'CYLINDRICAL CONTAINER 500 ml HDPE 24 MM WHITE MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FC000860', 'ENVASE CILÃNDRICO 500 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 500 ml ', 75, 1, 2, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/659375156.jpg', 21, 13, '500 ml PVC CONTAINER GLASS CYLINDRICAL MOUTH 24MM', 'BOTTLE 500 ml ', '', ''),
('22FC000891', 'ENVASE CILÃNDRICO 750 ml HDPE BLANCO BOCA 24 MM STG', 'ENVASE 750 ml ', 103, 1, 3, 1, 1, 0, 2, '750', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/482073303.png', 21, 14, '750 ml HDPE CONTAINER WHITE CYLINDRICAL MOUTH 24MM STG', 'BOTTLE 750 ml', '', ''),
('22FC000911', 'ENVASE CILÃNDRICO BALA SOFT TOUCH 500 ml PP SOFT TOUCH NATURAL BOCA 24 MM', 'ENVASE 500 ml ', 103, 1, 3, 1, 1, 0, 5, '500', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/767734560.png', 21, 13, 'SOFT TOUCH BULLET CYLINDRICAL CONTAINER 500 ml NATURAL SOFT TOUCH PP 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FC000916', 'ENVASE CILÃNDRICO BALA 500 ml PVC BLANCO BOCA 24 MM', 'ENVASE 500 ml ', 103, 1, 3, 1, 1, 0, 2, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/37154467.png', 21, 13, 'BALA CYLINDRICAL CONTAINER 500 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FC000933', 'ENVASE CILÃNDRICO BALA 500 ml HDPE BLANCO BOCA 24 MM 2 CAV.', 'ENVASE 500 ml ', 103, 1, 3, 1, 1, 0, 2, '500', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/863639958.png', 21, 13, 'CYLINDRICAL CONTAINER WHITE BULLET 500 ml HDPE 24 MM 2 CAV MOUTH.', 'BOTTLE 500 ml ', '', ''),
('22FC000941', 'ENVASE CILÃNDRICO BALA 1000 ml PVC GRIS BOCA 33 MM', 'ENVASE 1000 ml ', 103, 1, 3, 1, 1, 0, 2, '1000', 3, 9, 14, '0', 1, '', '', 1, 1, 0, '', 1, '/img/937662037.png', 33, 14, 'CYLINDRICAL CONTAINER 1000 ml PVC GRAY BULLET 33 MM MOUTH', 'BOTTLE 1000 ml ', '', ''),
('22FC000950', 'ENVASE CILÃNDRICO BALA 1000 ml HDPE BLANCO BOCA 33 MM 2 CAV.', 'ENVASE 1000 ml ', 103, 1, 3, 1, 1, 0, 2, '1000', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/786532283.png', 33, 14, 'BALA CYLINDRICAL CONTAINER WHITE MOUTH 1000 ml HDPE 33 MM 2 CAV.', 'BOTTLE 1000 ml ', '', ''),
('22FC000956', 'ENVASE CILÃNDRICO BALA 1000 ml HDPE BLANCO BOCA 28 MM 2 CAV.', 'ENVASE 1000 ml ', 103, 1, 3, 1, 1, 0, 2, '1000', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/913786378.png', 25, 14, 'BALA CYLINDRICAL CONTAINER WHITE MOUTH 1000 ml HDPE 28 MM 2 CAV.', 'BOTTLE 1000 ml ', '', ''),
('22FC000959', 'ENVASE CILÃNDRICO BALA CDI 1000 ml HDPE BLANCO BOCA 33 MM 1 CAV.', 'ENVASE 1000 ml ', 103, 1, 3, 1, 1, 0, 2, '1000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/227448035.png', 33, 14, 'CYLINDRICAL CONTAINER CDI 1000 ml HDPE BULLET WHITE MOUTH 33 MM 1 CAV.', 'BOTTLE 1000 ml ', '', ''),
('22FC000966', 'ENVASE CILÃNDRICO 1000 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 1000 ml ', 75, 1, 2, 1, 1, 0, 2, '1000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/731977813.jpg', 21, 14, 'CYLINDRICAL CONTAINER 1000 ml HDPE 24 MM WHITE MOUTH', 'BOTTLE 1000 ml ', '', ''),
('22FC000970', 'ENVASE CILÃNDRICO ESTRIADO 1000 ml HDPE BLANCO BOCA 33 MM', 'ENVASE 1000 ml ', 115, 1, 2, 10, 1, 0, 2, '1000', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/12607931.png', 33, 14, 'CYLINDRICAL CONTAINER WHITE STREAK 1000 ml HDPE 33 MM MOUTH', 'BOTTLE 1000 ml ', '', ''),
('22FC000976', 'GARRAFA SIN ASA CILÃNDRICO 1000 ml HDPE BLANCO BOCA 33 MM EMP. BOLSA', 'GARRAFA 1000 ml ', 87, 44, 1, 1, 1, 0, 5, '1000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/34382987.jpg', 33, 14, 'BOTTLE NO HANDLE CYLINDRICAL 1000 ml HDPE WHITE MOUTH 33 MM EMP. BAG', 'BOTTLE 1000 ml ', '', ''),
('22FC000981', 'GARRAFA CON ASA CILÃNDRICA 1900 ml HDPE BLANCO BOCA 28 MM 2 CAV.', 'GARRAFA 1900 ml ', 87, 44, 1, 1, 1, 0, 2, '1900', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/311155391.jpg', 25, 15, 'BOTTLE WITH HANDLE WHITE CYLINDRICAL MOUTH 1900 ml HDPE 28 MM 2 CAV.', 'BOTTLE 1900 ml ', '', ''),
('22FC003170', 'ENVASE CILÃNDRICO 200 ml PET CRISTAL BOCA 28 MM', 'ENVASE 200 ml ', 108, 1, 1, 1, 1, 0, 5, '200', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/439005231.png', 25, 7, '200 ml PET PACKAGING GLASS CYLINDRICAL MOUTH 28 MM', 'BOTTLE 200 ml ', '', ''),
('22FC164005', 'ENVASE CILÃNDRICO ENJUAGUE BUCAL 350 ml PVC CRISTAL BOCA 28 MM', 'ENJUAGUE 350 ml', 76, 1, 2, 1, 1, 0, 2, '350', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/911486097.jpg', 25, 11, 'CYLINDRICAL CONTAINER 350 ml PVC MOUTHWASH MOUTH GLASS 28 MM', 'RINSE 350 ml', '', ''),
('22FC755005', 'ENVASE CILÃNDRICO BALA 60 ml PVC BLANCO BOCA 20-410 MM', 'ENVASE 60 ml ', 103, 1, 3, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/178445739.png', 15, 17, 'CYLINDRICAL CONTAINER PVC WHITE BULLET 60 ml 20-410 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FE000011', 'ENVASE CUADRADO COLUMNA 60 ml HDPE BLANCO BOCA 18 MM', 'ENVASE 60 ml ', 116, 1, 6, 1, 1, 0, 4, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/15012686.png', 12, 17, 'BOTTLE SQUARE WHITE COLUMN 60 ml HDPE 18 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FE000020', 'ENVASE OVALADO REMOVEDOR 50 ml HDPE NATURAL BOCA 18 MM', 'Removedor 50 ml', 124, 52, 13, 1, 1, 0, 4, '50', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/131067530.png', 12, 12, 'CONTAINER 50 ml HDPE OVAL NATURAL REMOVER 18MM MOUTH', 'Remover 50 ml', '', ''),
('22FE000053', 'ENVASE OVAL NATURA 120 ml PVC BLANCO BOCA 24 MM', 'ENVASE 120 mm', 57, 1, 12, 1, 1, 0, 6, '120', 3, 9, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/751674749.png', 21, 6, 'NATURA PACKAGING 120 ml PVC OVAL WHITE 24 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FE000071', 'ENVASE OVAL NATURA 120 ml PP BLANCO BOCA 24 MM 1 CAV.', 'ENVASE 120 mm', 57, 1, 12, 1, 1, 0, 4, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/844978019.png', 21, 6, 'NATURA PACKAGING 120 ml PP OVAL MOUTH WHITE 24 MM 1 CAV.', 'BOTTLE 120 ml', '', ''),
('22FE000080', 'ENVASE OVALADO SAP 180 ml HDPE BLANCO BOCA 28 MM 2 CAV. VALVULA', 'ENVASE 180 ml ', 95, 48, 12, 1, 1, 0, 3, '180', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/823428906.jpg', 25, 7, 'SAP OVAL CONTAINER WHITE MOUTH 180 ml â€‹â€‹HDPE 28 MM 2 CAV. VALVE', 'BOTTLE 180 ml ', '', ''),
('22FE000100', 'ENVASE OVALADO SAP 250 ml HDPE BLANCO BOCA 24-410 MM 4 CAV.', 'ENVASE 250 ml ', 95, 48, 12, 1, 1, 0, 2, '250', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/634041109.jpg', 21, 9, 'SAP OVAL CONTAINER WHITE MOUTH 250 ml HDPE 24-410 MM 4 CAV.', 'BOTTLE 250 ml ', '', ''),
('22FE000150', 'ENVASE RECTANGULAR ALCOHOL 500 ml PVC CRISTAL BOCA 28 MM', 'ALCOHOL 500 ml', 125, 53, 18, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/874826309.png', 25, 13, 'ALCOHOL CONTAINER 500 ml PVC RECTANGULAR GLASS 28 MM MOUTH', 'ALCOHOL 500 ml', '', ''),
('22FE000200', 'ENVASE LACTEOS CUADRADO X 250 ML PP. NATURAL BOCA 38 MM SNAP SEG           ', 'ENVASE 250 ml ', 96, 49, 6, 1, 1, 0, 3, '250', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/271745030.jpg', 35, 9, 'MILK CONTAINER SQUARE X 250 ML PP. SNAP 38MM NATURAL SEG MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FE000205', 'ENVASE CUADRADO LÃCTEOS 250 ml HDPE NATURAL BOCA 48 MM SNAP 6 CAV. FOIL', 'ENVASE 250 ml ', 96, 49, 6, 1, 1, 0, 3, '250', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/240317155.jpg', 38, 9, 'SQUARE BOTTLE 250 ml HDPE NATURAL DAIRY MOUTH 48MM SNAP 6 CAV. FOIL', 'BOTTLE 250 ml ', '', ''),
('22FE000210', 'ENVASE CILÃNDRICO LÃCTEOS 200 ml HDPE BLANCO BOCA 38 MM SNAP 1 CAV.', 'ENVASE 200 ml ', 96, 49, 2, 1, 1, 0, 3, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/786109282.jpg', 35, 7, 'CYLINDRICAL CONTAINER 200 ml HDPE MILK WHITE MOUTH 38 MM SNAP 1 CAV.', 'BOTTLE 200 ml ', '', ''),
('22FE000786', 'ENVASE PLANO EMULSIÃ“N 250 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 250 ml ', 71, 39, 16, 1, 1, 0, 3, '250', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/421857023.jpg', 26, 9, 'FLAT PACK 250 ml PVC EMULSION 28 MM MOUTH AMBER', 'BOTTLE 250 ml ', '', ''),
('22FE000840', 'ENVASE PLANO EMULSIÃ“N NP 180 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 180 ml ', 71, 39, 16, 1, 1, 0, 3, '180', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/331381380.jpg', 26, 7, 'FLAT PACK NP 180 ml â€‹â€‹PVC EMULSION MOUTH AMBER 28 MM', 'BOTTLE 180 ml ', '', ''),
('22FE000860', 'ENVASE PLANO EMULSIÃ“N NP 360 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 260 ml ', 71, 39, 16, 1, 1, 0, 2, '360', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/083641878.jpg', 26, 11, 'FLAT PACK PVC EMULSION 360 ml NP 28 MM MOUTH AMBER', 'BOTTLE 260 ml ', '', ''),
('22FE000870', 'ENVASE PLANO EMULSIÃ“N NP 450 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 450 ml ', 71, 39, 16, 1, 1, 0, 2, '450', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/846495051.jpg', 26, 13, 'FLAT PACK PVC EMULSION 450 ml NP 28 MM MOUTH AMBER', 'BOTTLE 450 ml ', '', ''),
('22FF000002', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 30 ml HDPE NATURAL BOCA 24 MM 1 CAV.', 'ENVASE 30 ml ', 70, 35, 2, 1, 1, 0, 4, '30', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/973418538.jpg', 21, 12, 'CYLINDRICAL CONTAINER NATURAL PHARMACIST MOUTH 30 ml HDPE 24 MM 1 CAV.', 'BOTTLE 30 ml ', '', ''),
('22FF000005', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 30 ml PET CRISTAL BOCA 28 MM', 'ENVASE 30 ml ', 70, 35, 2, 1, 1, 0, 4, '30', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/19279797.jpg', 26, 12, 'PHARMACIST CYLINDRICAL CONTAINER GLASS 30 ml PET 28 MM MOUTH', 'BOTTLE 30 ml ', '', ''),
('22FF000009', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 30 ml PET ÃMBAR BOCA 28 MM', 'ENVASE 30 ml ', 70, 35, 2, 1, 1, 0, 4, '30', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/051436307.jpg', 26, 12, 'PHARMACIST CYLINDRICAL CONTAINER AMBER MOUTH 30 ml PET 28 MM', 'BOTTLE 30 ml ', '', ''),
('22FF000011', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 60 ml HDPE NATURAL BOCA 28 MM 8 CAV.', 'ENVASE 60 ml ', 70, 35, 2, 1, 1, 0, 4, '60', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/548855676.jpg', 26, 17, 'CYLINDRICAL CONTAINER 60 ml HDPE NATURAL PHARMACIST MOUTH 28 MM 8 CAV.', 'BOTTLE 60 ml ', '', ''),
('22FF000018', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 30 ml HDPE BLANCO BOCA 20 MM 1 CAV.', 'ENVASE 30 ml ', 70, 35, 2, 1, 1, 0, 4, '30', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/16009598.jpg', 14, 12, 'PHARMACIST CYLINDRICAL CONTAINER WHITE MOUTH 30 ml HDPE 20 MM 1 CAV.', 'BOTTLE 30 ml ', '', ''),
('22FF000032', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 60 ml PVC BLANCO BOCA 28 MM', 'ENVASE 60 ml ', 70, 35, 2, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/020221094.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER 60 ml PVC WHITE 28 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FF000066', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 60 ml PET CRISTAL BOCA 28 MM', 'ENVASE 60 ml ', 70, 35, 2, 1, 1, 0, 4, '60', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/933825112.jpg', 26, 17, 'CYLINDRICAL CONTAINER GLASS PHARMACEUTICAL 60 ml PET 28 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FF000068', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 60 ml PET ÃMBAR BOCA 28 MM', 'ENVASE 60 ml ', 70, 35, 2, 1, 1, 0, 4, '60', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/195684071.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER AMBER MOUTH 60 ml PET 28 MM', 'BOTTLE 60 ml ', '', ''),
('22FF000090', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO STIEFEL 60 ml LDPE BLANCO BOCA 20 MM DOSIF.', 'ENVASE 60 ml ', 72, 35, 2, 1, 1, 0, 4, '60', 3, 3, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/976662297.jpg', 15, 17, 'PHARMACIST CYLINDRICAL CONTAINER STIEFEL 60 ml LDPE REDISP WHITE 20 MM MOUTH.', 'BOTTLE 60 ml ', '', ''),
('22FF000095', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO STIEFEL 120 ml LDPE BLANCO BOCA 20 MM DOSIF.', 'ENVASE 120 ml ', 72, 35, 2, 1, 1, 0, 3, '120', 3, 3, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/240346254.jpg', 15, 6, 'PHARMACIST STIEFEL CYLINDRICAL CONTAINER 120 ml LDPE REDISP WHITE 20 MM MOUTH.', 'BOTTLE 120 ml ', '', ''),
('22FF000153', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 90 ml HDPE NATURAL BOCA 28 MM 8 CAV.', 'ENVASE 90 ml ', 70, 35, 2, 1, 1, 0, 4, '90', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/976962666.jpg', 26, 17, 'CYLINDRICAL CONTAINER 90 ml HDPE NATURAL PHARMACIST MOUTH 28 MM 8 CAV.', 'BOTTLE 90 ml ', '', ''),
('22FF000155', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 90 ml HDPE BLANCO BOCA 28 MM 8 CAV.', 'ENVASE 90 ml ', 70, 35, 2, 1, 1, 0, 4, '90', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/439446007.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER WHITE MOUTH 90 ml HDPE 28 MM 8 CAV.', 'BOTTLE 90 ml ', '', ''),
('22FF000180', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 90 ml PET CRISTAL BOCA 28 MM', 'ENVASE 90 ml ', 70, 35, 2, 1, 1, 0, 4, '90', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/056283182.jpg', 26, 17, 'CYLINDRICAL CONTAINER GLASS PHARMACEUTICAL 90 ml PET 28 MM MOUTH', 'BOTTLE 90 ml ', '', ''),
('22FF000182', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 90 ml PET ÃMBAR BOCA 28 MM', 'ENVASE 90 ml ', 70, 35, 2, 1, 1, 0, 3, '90', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/162435369.jpg', 26, 17, 'PHARMACIST CYLINDRICAL CONTAINER AMBER MOUTH 90 ml PET 28 MM', 'BOTTLE 90 ml ', '', ''),
('22FF000190', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO IS 120 ml HDPE BLANCO BOCA 28 MM', 'ENVASE 120 ml', 70, 35, 2, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/797934847.jpg', 26, 6, 'PHARMACIST IS CYLINDRICAL CONTAINER 120 ml HDPE 28 MM WHITE MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FF000220', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 120 ml PVC BLANCO BOCA 28 MM', 'ENVASE 120 ml ', 70, 35, 2, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/194545022.jpg', 26, 6, 'PHARMACIST CYLINDRICAL CONTAINER 120 ml PVC WHITE 28 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FF000251', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 120 ml PET ÃMBAR BOCA 28 MM', 'ENVASE 120 ml ', 70, 35, 2, 1, 1, 0, 3, '120', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/633652427.jpg', 26, 17, 'PHARMACEUTICAL PACKAGING 120 ml PET CYLINDRICAL MOUTH AMBER 28 MM', 'BOTTLE 120 ml ', '', ''),
('22FF000252', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 120 ml PET CRISTAL BOCA 28 MM', 'ENVASE 120 ml ', 70, 35, 2, 1, 1, 0, 3, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/530403157.jpg', 26, 6, 'PHARMACEUTICAL PACKAGING 120 ml PET CYLINDRICAL MOUTH GLASS 28 MM', 'BOTTLE 120 ml ', '', ''),
('22FF000256', 'BOTELLA CUADRADA AGUA 250 ml PET CRISTAL BOCA 28 MM EMP. BOLSA', 'Btll. AGUA 250 ml ', 36, 20, 1, 1, 1, 0, 6, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/668867095.png', 26, 10, 'WATER BOTTLE 250 ml PET SQUARE GLASS 28 MM MOUTH EMP. BAG', 'WATER BOTTLE 250 ml ', '', ''),
('22FF000260', 'BOTELLA CILÃNDRICA AGUA 300 ml PET CRISTAL BOCA 28 PCO 17 g EMP.BOLSA', 'Btll. AGUA 300 ml ', 34, 20, 1, 1, 1, 0, 6, '300', 3, 5, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/489727197.png', 26, 11, 'BOTTLE 300 ml PET BULLET GLASS WATER MOUTH 28 PCO 17 g EMP.BOLSA', 'WATER BOTLE 300 ML ', '', ''),
('22FF000279', 'BOTELLA CILÃNDRICA AGUA 350 ml PET AZUL BOCA 28 PCO 17 g EMP. BOLSA', 'Btll. AGUA 300 ml ', 34, 20, 1, 1, 1, 0, 6, '350', 3, 5, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/859211146.png', 26, 11, 'BOTTLE 350 ml PET BULLET BLUE WATER MOUTH 28 PCO 17 g EMP. BAG', 'WATER BOTLE 300 ML ', '', ''),
('22FF000290', 'BOTELLA CILÃNDRICA LICOR 750 ml PET CRISTAL BOCA 28 PCO 37 g EMP. BOLSA', 'Btll. LICOR  750 ml ', 41, 23, 1, 1, 1, 0, 2, '750', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/346391210.png', 26, 14, 'LIQUOR BOTTLE 750 ml PET BULLET GLASS MOUTH 28 PCO 37 g EMP. BAG', 'LIQUOR BOTTLE 750 ml', '', ''),
('22FF000320', 'ENVASE FARMACEUTICO X 180 ML PVC AMBAR BOCA 28 MM STANDAR     ', 'ENVASE 180 mL', 70, 35, 2, 1, 1, 0, 3, '180', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/821633687.jpg', 26, 7, 'PHARMACEUTICAL PACKAGING 180 ML PVC X 28 MM STANDARD AMBER MOUTH', 'BOTTLE 180 ml ', '', ''),
('22FF000330', 'ENVASE FARMACEUTICO X 180 ML PVC BLANCO BOCA 28 MM STANDAR                   ', 'ENVASE 180 ml ', 70, 35, 2, 1, 1, 0, 3, '180', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/581911953.jpg', 26, 7, 'PHARMACEUTICAL PACKAGING 180 ML PVC WHITE X 28 MM STANDARD MOUTH', 'BOTTLE 180 ml ', '', ''),
('22FF000336', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 180 ml HDPE BLANCO BOCA 28 MM 2 CAV.', 'ENVASE 180 ml ', 70, 35, 2, 1, 1, 0, 3, '180', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/999418158.jpg', 26, 7, 'PHARMACEUTICAL PACKAGING 180 ml â€‹â€‹HDPE CYLINDRICAL MOUTH WHITE 28 MM 2 CAV.', 'BOTTLE 180 ml ', '', ''),
('22FF000421', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 240 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 240 ml ', 70, 35, 2, 1, 1, 0, 2, '240', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/150206992.jpg', 26, 9, 'PHARMACEUTICAL PACKAGING 240 ml PVC CYLINDRICAL MOUTH AMBER 28 MM', 'BOTTLE 240 ml ', '', ''),
('22FF000430', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 240 ml PVC BLANCO BOCA 28 MM', 'ENVASE 240 mm', 70, 35, 2, 1, 1, 0, 3, '240', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/42515804.jpg', 26, 9, 'PHARMACIST CYLINDRICAL CONTAINER 240 ml PVC WHITE 28 MM MOUTH', 'BOTTLE 240 ml ', '', ''),
('22FF000445', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 240 ml HDPE BLANCO BOCA 28 MM 6 CAV.', 'ENVASE 240 ml ', 70, 35, 2, 1, 1, 0, 3, '240', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/974262211.jpg', 26, 9, 'PHARMACEUTICAL PACKAGING 240 ml HDPE CYLINDRICAL MOUTH WHITE 28 MM 6 CAV.', 'BOTTLE 240 ml ', '', ''),
('22FF000502', 'BOTELLA CILÃNDRICA FARMA 360 ml PET ÃMBAR BOCA 28 PCO 28 g EMP.BOLSA', 'Btll. FARMA 360 ml ', 42, 24, 1, 1, 1, 0, 5, '360', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/093279109.png', 26, 11, 'FARMA CYLINDRICAL BOTTLE 360 ml PET AMBER MOUTH 28 PCO 28 g EMP.BOLSA', 'Btll. PHARMA 360 ml', '', ''),
('22FF000520', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 360 ml PVC ÃMBAR BOCA 28 MM', 'ENVASE 360 ml ', 70, 35, 2, 1, 1, 0, 2, '360', 3, 9, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/64135544.jpg', 26, 11, 'PHARMACEUTICAL PACKAGING 360 ml PVC CYLINDRICAL MOUTH AMBER 28 MM', 'BOTTLE 360 ml ', '', ''),
('22FF000530', 'ENVASE CILÃNDRICO FARMACÃ‰UTICO 360 ml PVC BLANCO BOCA 28 MM', 'ENVASE 360 ml ', 70, 35, 2, 1, 1, 0, 2, '360', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/669848327.jpg', 26, 11, 'PHARMACIST CYLINDRICAL CONTAINER 360 ml PVC WHITE 28 MM MOUTH', 'BOTTLE 360 ml ', '', ''),
('22FF000543', 'BOTELLA CILÃNDRICA FARMA 360 ml PET CRISTAL BOCA 28 PCO 28 g EMP. BOLSA', 'Btll. FARMA 360 ml ', 42, 24, 1, 1, 1, 0, 5, '360', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/863718227.png', 26, 11, 'FARMA CYLINDRICAL BOTTLE GLASS 360 ml PET MOUTH 28 PCO 28 g EMP. BAG', 'Btll PHARMA 360 ml', '', ''),
('22FF000550', 'BOTELLA CILÃNDRICA FARMA 240 ml PET CRISTAL BOCA 28 PCO 25 g EMP- BOLSA', 'Btll. FARMA 240 ml ', 42, 24, 1, 1, 1, 0, 6, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/02221771.png', 26, 9, 'FARMA CYLINDRICAL BOTTLE GLASS 240 ml PET MOUTH 28 PCO 25 g EMP-BAG', 'BOTTLE PHARMA 240 ml', '', ''),
('22FF000565', 'BOTELLA CILÃNDRICA FARMA 240 ml PET ÃMBAR BOCA 28 PCO 25 g EMP. BOLSA', 'Btll.FARMA 240 ml ', 42, 24, 2, 1, 1, 0, 6, '240', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/524998687.png', 26, 9, 'BOTTLE CYLINDRICAL FARMA 240 ml PET AMBER MOUTH 28 PCO 25 g EMP. BAG', 'Btll. PHARMA 240 ml', '', ''),
('22FF000606', 'BOTELLA CUADRADA AGUA Y 500 ml PET CRISTAL BOCA 28 PCO 19 g EMP. BOLSA', 'Btll. AGUA 500 ml ', 36, 20, 1, 1, 1, 0, 2, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/87147575.png', 26, 14, 'SQUARE BOTTLE WATER AND MOUTH GLASS 500 ml PET 28 PCO 19 g EMP. BAG', 'WATER BOTTLE 500 ml', '', ''),
('22FF000610', 'BOTELLA CUADRADA AGUA Z 500 ml PET CRISTAL BOCA 28 PCO 19 g EMP. BOLSA', 'Btll. AGUA 500 ml ', 36, 20, 1, 1, 1, 0, 2, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/07303683.png', 26, 14, 'Z SQUARE BOTTLE WATER MOUTH GLASS 500 ml PET 28 PCO 19 g EMP. BAG', 'WATER BOTTLE 500 ml', '', ''),
('22FF000631', 'BOTELLA CILÃNDRICA AGUA ABCD 500 ml PET BOCA 28 PCO 19 g EMP. BOLSA', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/619279359.png', 26, 14, 'ABCD CYLINDRICAL WATER BOTTLE 500 ml PET MOUTH 28 PCO 19 g EMP. BAG', 'TOILET BOTTLE 500 ml', '', ''),
('22FF000635', 'BOTELLA CILINDRICA L/AGUA ', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 2, '0', 1, '', '', 1, 1, 0, '', 1, '/img/226043588.png', 26, 14, 'CYLINDRICAL BOTTLE L / WATER \\\\', 'WATER BOTTLE 500 ml', '', ''),
('22FF000641', 'BOTELLA CILINDRICA L/AGUA ', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 8, '0', 1, '', '', 1, 1, 0, '', 1, '/img/014174790.png', 26, 14, 'CYLINDRICAL BOTTLE L / WATER \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\', 'WATER BOTTLE 500 ml', '', ''),
('22FF000645', 'BOTELLA CILINDRICA L/AGUA ', 'Btll. AGUA 500 ml ', 34, 20, 1, 1, 1, 0, 2, '500', 3, 5, 8, '0', 1, '', '', 1, 1, 0, '', 1, '/img/382008942.png', 26, 14, 'CYLINDRICAL BOTTLE L / WATER \\\\', 'WATER BOTTLE 500 ml', '', ''),
('22FF000650', 'BOTELLA CILÃNDRICA ASEO LJ 500 ml PET CRISTAL BOCA 28 PCO 22 g EMP.BOLSA', 'Btll. ASEO 500 ml ', 35, 19, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/379943537.png', 26, 14, 'BOTELLA CILÃNDRICA ASEO LJ 500 ml PET CRISTAL BOCA 28 PCO 22 g EMP.BOLSA', 'TOILET BOTTLE 500 ml', '', ''),
('22FF000665', 'BOTELLA CILÃNDRICA ASEO LJ 810 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll. ASEO 810 ml ', 35, 19, 1, 1, 1, 0, 2, '810', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/21380453.png', 26, 14, 'LJ CYLINDRICAL BOTTLE 810 ml PET TOILET MOUTH GLASS 28 PCO 37 g EMP.BOLSA', 'TOILET BOTTLE 810 ml', '', ''),
('22FF000675', 'BOTELLA CILÃNDRICA ASEO NP 800 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll. ASEO 800 ml ', 38, 19, 1, 1, 1, 0, 2, '800', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/612161309.png', 26, 14, 'NP CYLINDRICAL BOTTLE 800 ml PET TOILET MOUTH GLASS 28 PCO 37 g EMP.BOLSA', 'TOILET BOTTLE 800 ml', '', ''),
('22FF000685', 'BOTELLA CILÃNDRICA ASEO NP 500 ml PET CRISTAL BOCA 28 PCO 25 g EMP. BOLSA', 'Btll. ASEO 500 ml ', 38, 19, 1, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/85653622.png', 26, 14, 'NP CYLINDRICAL BOTTLE 500 ml PET TOILET MOUTH GLASS 25g 28 PCO EMP. BAG', 'TOILET BOTTLE 500 ml', '', ''),
('22FF000700', 'BOTELLA OVAL NP ASEO 600 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll. ASEO 600 ml ', 33, 19, 12, 1, 1, 0, 2, '600', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/81402271.png', 26, 14, 'NP OVAL BOTTLE 600 ml PET TOILET MOUTH GLASS 28 PCO 37 g EMP.BOLSA', 'TOILET BOTTLE 600 ml', '', ''),
('22FF000705', 'BOTELLA OVAL ASEO ST 500 ml PET CRISTAL BOCA 28 PCO 28 g EMP.BOLSA', 'Btll. ASEO 500 ml ', 33, 19, 12, 1, 1, 0, 7, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/850387964.png', 26, 14, 'OVAL BOTTLE ST 500 ml PET TOILET MOUTH GLASS 28 PCO 28 g EMP.BOLSA', 'TOILET BOTTLE 500 ml', '', ''),
('22FF000750', 'BOTELLA PLANA LICOR 375 ml PET CRISTAL BOCA 28 PCO 25 g EMP.BOLSA', 'Btll. LICOR  375 ml ', 41, 23, 17, 1, 1, 0, 5, '375', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/439007962.png', 26, 11, 'LIQUOR BOTTLE 375 ml PET FLAT GLASS MOUTH 28 PCO 25 g EMP.BOLSA', 'LIQUOR BOTTLE 375 ml', '', ''),
('22FF000770', 'BOTELLA CUADRADA LICOR 750 ml PET CRISTAL BOCA 28 PCO 37 g EMP.BOLSA', 'Btll. LICOR  750 ml ', 41, 23, 7, 1, 1, 0, 2, '750', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/27774519.png', 26, 14, 'LIQUOR BOTTLE 750 ml PET SQUARE GLASS MOUTH 28 PCO 37 g EMP.BOLSA', 'LIQUOR BOTTLE 750 ml', '', ''),
('22FF000801', 'BOTELLA CILÃNDRICA FARMA 500 ml PET CRISTAL BOCA 28 PCO 28 g EMP. BOLSA', 'Btll. FARMA 500 ml ', 42, 24, 2, 1, 1, 0, 5, '500', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/77542262.png', 26, 14, 'FARMA CYLINDRICAL BOTTLE GLASS 500 ml PET MOUTH 28 PCO 28 g EMP. BAG', 'Btll PHARMA 500 ml', '', ''),
('22FF000806', 'BOTELLA CILÃNDRICA FARMA 500 ml PET ÃMBAR BOCA 28 PCO 28 g EMP.BOLSA', 'Btll. FARMA 500 ml ', 42, 24, 1, 1, 1, 0, 5, '500', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/971248009.png', 26, 14, 'FARMA CYLINDRICAL BOTTLE 500 ml PET AMBER MOUTH 28 PCO 28 g EMP.BOLSA', 'Btll. PHARMA 500 ml', '', ''),
('22FF000819', 'BOTELLA CILÃNDRICA FARMA 1000 ml PET CRISTAL BOCA 28 PCO 47 g EMP.BOLSA', 'Btll. FARMA 1000 ml ', 42, 24, 1, 1, 1, 0, 2, '1000', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/23329923.png', 26, 15, 'FARMA CYLINDRICAL BOTTLE GLASS 1000 ml PET MOUTH 28 PCO 47 g EMP.BOLSA', 'Btll. PHARMA 1000 ml', '', ''),
('22FF000825', 'BOTELLA CILÃNDRICA FARMA 1000 ml PET ÃMBAR BOCA 28 PCO 47 g EMP. BOLSA', 'Btll. FARMA 1000 ml ', 42, 24, 1, 1, 1, 0, 2, '1000', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/158213877.png', 26, 15, 'FARMA CYLINDRICAL BOTTLE 1000 ml PET AMBER MOUTH 28 PCO 47 g EMP. BAG', 'BOTTLE PHARMA 1000 ml', '', ''),
('22FF000910', 'ENVASE CILÃNDRICO SM SALSAS 160 ml PET CRISTAL BOCA 24-410 MM', 'Btll.  SALSAS 160 ml ', 24, 13, 1, 1, 1, 0, 6, '160', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/650925631.png', 21, 7, 'SM CYLINDRICAL CONTAINER 160 ml PET SAUCES 24-410 MM GLASS MOUTH', 'SAUCE Btll. 160 ml', '', ''),
('22FG000001', 'ENVASE CILÃNDRICO POTE GEL GRABADO 1 ENT. 500 ml PVC CRISTAL BOCA 70 MM', 'POTE 500 ml ', 67, 27, 2, 12, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/745577504.jpg', 45, 14, 'GEL PACK ENGRAVED CYLINDRICAL POT 1 ENT. 500 ml PVC GLASS 70 MM MOUTH', 'JAR 500 ml ', '', ''),
('22FG000002', 'ENVASE CILÃNDRICO POTE GEL GRABADO 1 ENT. 500 ml PVC BLANCO BOCA 70 MM', 'POTE 500 ml ', 67, 27, 2, 12, 1, 0, 2, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/85982489.jpg', 45, 14, 'GEL PACK ENGRAVED CYLINDRICAL POT 1 ENT. 500 ml PVC WHITE 70 MM MOUTH', 'JAR 500 ml ', '', ''),
('22FG000010', 'ENVASE CILÃNDRICO POTE GEL LISO 500 ml PVC CRISTAL BOCA 80 MM 2 CAV.', 'POTE 500 ml ', 49, 27, 2, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/992153947.jpg', 46, 14, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 500 ml PVC MOUTH GLASS 80 MM 2 CAV.', 'JAR 500 ml ', '', ''),
('22FG000018', 'ENVASE CILÃNDRICO POTE GEL LISO 500 ml PP BLANCO BOCA 80 MM 2 CAV.', ' POTE 500 ml ', 49, 27, 2, 1, 1, 0, 2, '500', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/14206494.jpg', 46, 14, 'GEL SMOOTH CYLINDRICAL CONTAINER POT WHITE MOUTH 500 ml PP 80 MM 2 CAV.', ' JAR 500 ml', '', ''),
('22FG000020', 'ENVASE CILÃNDRICO POTE GEL LISO 175 ml PVC CRISTAL BOCA 53 MM 2 CAV.', 'POTE 175 ml ', 49, 27, 2, 1, 1, 0, 4, '175', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/594696059.jpg', 43, 7, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 175 ml PVC MOUTH GLASS 53 MM 2 CAV.', 'JAR 175 ml ', '', ''),
('22FG000021', 'ENVASE CILÃNDRICO POTE GEL LISO 175 ml PVC BLANCO BOCA 53 MM 2 CAV.', 'POTE 175 ml ', 49, 27, 2, 1, 1, 0, 4, '175', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/944525165.jpg', 43, 7, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 175 ml PVC WHITE 53 MM 2 CAV MOUTH.', 'JAR 175 ml ', '', ''),
('22FG000030', 'ENVASE CILÃNDRICO POTE GEL LISO 275 ml PVC CRISTAL BOCA 80 MM 4 CAV.', 'POTE 275 ml ', 49, 27, 2, 1, 1, 0, 2, '275', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/052629071.jpg', 46, 10, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 275 ml PVC MOUTH GLASS 80 MM 4 CAV.', 'BOTTLE 275 ml', '', ''),
('22FG000041', 'ENVASE CILÃNDRICO POTE GEL LISO 450 ml PVC BLANCO BOCA 62 MM', 'POTE 450', 49, 27, 2, 1, 1, 0, 3, '450', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/254784325.jpg', 43, 13, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 450 ml PVC WHITE 62 MM MOUTH', 'JAR 450', '', ''),
('22FG000050', 'ENVASE CILÃNDRICO POTE GEL LISO 275 ml HDPE BLANCO BOCA 80 MM 2 CAV.', 'POTE 275 ml ', 49, 27, 2, 1, 1, 0, 2, '275', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/51508627.jpg', 46, 10, 'GEL SMOOTH CYLINDRICAL CONTAINER POT WHITE MOUTH 275 ml HDPE 80 MM 2 CAV.', 'JAR 275 ml ', '', ''),
('22FG000081', 'ENVASE CILÃNDRICO POTE GEL GRABADO 3 ENT. 250 ml PVC BLANCO BOCA 58 MM', 'POTE 250 ml ', 67, 27, 2, 12, 1, 0, 3, '250', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/325324871.jpg', 45, 9, 'GEL PACK ENGRAVED CYLINDRICAL POT 3 ENT. 250 ml PVC WHITE 58 MM MOUTH', 'JAR 250 ml ', '', ''),
('22FG000090', 'ENVASE CUADRADO POTE GEL 270 ml PVC CRISTAL BOCA 70 MM', 'P.CUADRADO 270 ml ', 81, 27, 6, 1, 1, 0, 3, '270', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/984052760.jpg', 45, 10, 'CONTAINER POT SQUARE GLASS GEL 270 ml PVC 70 MM MOUTH', 'SQUARE POT 270 ml', '', ''),
('22FG000100', 'ENVASE CILÃNDRICO POTE GEL LISO 50 ml PVC CRISTAL BOCA 48 MM', 'ENVASE 50 ml ', 49, 27, 2, 1, 1, 0, 4, '50', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/440568710.jpg', 38, 12, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 50 ml PVC GLASS 48 MM MOUTH', 'BOTTLE 50 ml ', '', ''),
('22FG000101', 'ENVASE CILÃNDRICO POTE GEL LISO 50 ml PVC BLANCO BOCA 48 MM', 'ENVASE 50 ml ', 49, 27, 2, 1, 1, 0, 4, '50', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/211767893.jpg', 38, 12, 'CYLINDRICAL CONTAINER POT SMOOTH GEL 50 ml PVC WHITE 48 MM MOUTH', 'BOTTLE 50 ml ', '', ''),
('22FG000120', 'ENVASE CILÃNDRICO POTE GEL LISO 3 ENT. 120 ml PVC CRISTAL BOCA 58 MM 1 CAV.', 'ENVASE 120 mm', 49, 27, 2, 1, 1, 0, 3, '120', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 2, '/img/449827309.jpg', 42, 6, 'GEL SMOOTH CYLINDRICAL CONTAINER POT 3 ENT. 120 ml PVC MOUTH GLASS 58 MM 1 CAV.', 'BOTTLE 120 ml ', '', ''),
('22FG000121', 'ENVASE CILÃNDRICO POTE GEL LISO 3 ENT. 120 ml PVC BLANCO BOCA 58 MM 1 CAV.', 'ENVASE 120 mm', 49, 27, 3, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/969088462.jpg', 42, 6, 'GEL SMOOTH CYLINDRICAL CONTAINER POT 3 ENT. 120 ml PVC WHITE 58 MM 1 CAV MOUTH.', 'BOTTLE 120 ml ', '', ''),
('22FG000201', 'ENVASE ESFERICO POTE GEL 500 ml PVC BLANCO BOCA 83 MM', 'ENVASE 500 ml ', 118, 27, 11, 1, 1, 0, 2, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/55678858.png', 47, 13, 'SPHERICAL CONTAINER POT GEL 500 ml PVC WHITE 83 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FG000302', 'ENVASE CILÃNDRICO GEL LISO 1000 ml PVC BLANCO BOCA 80 MM', 'ENVASE 1000 ml ', 49, 27, 2, 1, 1, 0, 2, '1000', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/853312869.jpg', 46, 14, 'CYLINDRICAL BOTTLE SMOOTH GEL 1000 ml PVC WHITE 80 MM MOUTH', 'BOTTLE 1000 ml ', '', ''),
('22FI000501', 'ENVASE PLANO JABON LIQUIDO 250 ml PVC BLANCO BOCA 24 MM VÃLVULA', 'ENVASE 250 ml ', 90, 22, 16, 1, 1, 0, 3, '250', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/594615516.jpg', 21, 9, 'FLAT PACK LIQUID SOAP 250 ml PVC VALVE 24MM WHITE MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FK000001', 'ENVASE CÃ“NICO WX 100 ml HDPE BLANCO BOCA 22 MM', 'ENVASE 100 ml ', 111, 1, 21, 1, 1, 0, 3, '100', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/292648847.png', 17, 17, 'PACKAGE WX 100 ml HDPE TAPER MOUTH 22MM WHITE', 'BOTTLE 100 ml ', '', ''),
('22FK000010', 'ENVASE CÃ“NICO WX 200 ml HDPE BLANCO BOCA 22 MM', 'ENVASE 200 ml ', 111, 1, 5, 1, 1, 0, 2, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/478753637.png', 17, 7, 'PACKAGE WX 200 ml HDPE TAPER MOUTH 22MM WHITE', 'BOTTLE 200 ml ', '', ''),
('22FK000015', 'ENVASE CÃ“NICO FARMACÃ‰UTICO 30 ml LDPE NATURAL BOCA 18 MM', 'ENVASE 30 ml ', 110, 1, 21, 1, 1, 0, 4, '30', 3, 3, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/018258812.png', 12, 12, 'PHARMACEUTICAL PACKAGING 30 ml LDPE TAPER MOUTH 18MM NATURAL', 'BOTTLE 30 ml ', '', ''),
('22FK000031', 'ENVASE CÃ“NICO NP 60 ml HDPE BLANCO BOCA 24-410 MM 2 CAV.', 'ENVASE 60 ml ', 110, 1, 21, 1, 1, 0, 3, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/876275111.png', 21, 17, 'NP 60 ml BOTTLE TAPER MOUTH WHITE HDPE 24-410 MM 2 CAV.', 'BOTTLE 60 ml ', '', ''),
('22FK000041', 'ENVASE CÃ“NICO NP 120 ml HDPE BLANCO BOCA 22-400 MM', 'ENVASE 120 ml ', 110, 1, 21, 1, 1, 0, 2, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/49981191.png', 17, 6, 'BOTTLE 120 ml HDPE TAPERED NP 22-400 MM WHITE MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FO000001', 'ENVASE OBLONG 30 ml PVC CRISTAL BOCA 18 MM', 'ENVASE 30 ml ', 102, 1, 15, 1, 1, 0, 4, '30', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/38918289.png', 12, 12, '30 ml PVC CONTAINER GLASS OBLONG 18 MM MOUTH', 'BOTTLE 30 ml ', '', ''),
('22FO000002', 'ENVASE OBLONG 30 ml PVC BLANCO BOCA 18 MM', 'ENVASE 30 ml ', 102, 1, 15, 1, 1, 0, 4, '30', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/73810266.png', 12, 17, '30 ml PVC CONTAINER WHITE OBLONG 18 MM MOUTH', 'BOTTLE 30 ml ', '', ''),
('22FO000011', 'ENVASE OVAL 60 ml HDPE NATURAL BOCA 18 MM 2 CAV.', 'ENVASE 60 ml ', 101, 1, 12, 1, 1, 0, 4, '60', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/076976517.png', 12, 17, '60ml OVAL HDPE BOTTLE MOUTH WHITE 18 MM 2 CAV.', 'BOTTLE 60 ml ', '', ''),
('22FO000040', 'ENVASE OVAL 60 ml PVC BLANCO BOCA 18 MM', 'ENVASE 60 ml ', 101, 1, 12, 1, 1, 0, 4, '60', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/525504976.png', 12, 17, '60 ml PVC CONTAINER WHITE OVAL 18 MM MOUTH', 'BOTTLE 60 ml ', '', ''),
('22FO000081', 'ENVASE OVAL 30 ml PVC BLANCO BOCA 18 MM 2 CAV.', 'ENVASE 30 ml ', 117, 1, 13, 1, 1, 0, 4, '30', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/017054219.png', 12, 12, '30 ml PVC BOTTLE WHITE OVAL MOUTH 18 MM 2 CAV.', 'BOTTLE 30 ml ', '', ''),
('22FO000100', 'ENVASE OVALADO 90 ml HDPE BLANCO BOCA 20-415 MM', 'ENVASE 90 ml ', 117, 1, 13, 1, 1, 0, 4, '90', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/856002335.png', 16, 17, '90ml OVAL HDPE BOTTLE MOUTH WHITE 20-415 MM', 'BOTTLE 90 ml ', '', ''),
('22FO000125', 'ENVASE OVAL 100 ml PVC BLANCO BOCA 20-415 MM 1 CAV.', 'ENVASE 100 ml ', 101, 1, 12, 1, 1, 0, 4, '100', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/678782365.png', 16, 17, '100 ml PVC CONTAINER WHITE OVAL MOUTH 20-415 MM 1 CAV.', 'BOTTLE 100 ml ', '', ''),
('22FO000140', 'ENVASE OVAL NP 50 ml PVC CRISTAL BOCA 20 MM 4 CAV.', 'ENVASE 50 ml ', 106, 38, 12, 1, 1, 0, 4, '50', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/794625921.png', 14, 12, 'NP 50 ml PACKAGING PVC OVAL MOUTH GLASS 20 MM 4 CAV.', 'BOTTLE 50 ml ', '', ''),
('22FO000150', 'ENVASE OVAL NP 120 ml PVC CRISTAL BOCA 20 MM', 'ENVASE 120 ml ', 106, 38, 12, 1, 1, 0, 4, '120', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/512688117.png', 14, 6, 'CONTAINER NP 120 ml PVC OVAL GLASS 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FO000171', 'ENVASE OVAL VS 120 ml PVC BLANCO BOCA 24 MM', 'ENVASE VS 120 ml ', 121, 9, 12, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/696488037.png', 23, 6, 'VS OVAL BOTTLE 120 ml PVC WHITE 24 MM MOUTH', 'BOTTLE VS 120 ml ', '', ''),
('22FO000180', 'ENVASE OVAL VS 240 ml PVC CRISTAL BOCA 24 MM', 'ENVASE VS 240 ml ', 121, 9, 12, 1, 1, 0, 4, '240', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/983593750.png', 21, 9, 'BOTTLE 240 ml PVC VS OVAL GLASS 24 MM MOUTH', 'BOTTLE VS 240 ml ', '', ''),
('22FO000210', 'ENVASE OVAL 120 ml HDPE BLANCO BOCA 20 MM', 'ENVASE 120 ml ', 101, 1, 12, 1, 1, 0, 4, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/15175963.png', 14, 6, '120ml OVAL HDPE BOTTLE MOUTH 20MM WHITE', 'BOTTLE 120 ml ', '', ''),
('22FO000217', 'ENVASE OVALADO ERGONÃ“MICO 120 ml HDPE BLANCO BOCA 20 MM', 'ENVASE 120 mm', 58, 1, 12, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/969449652.jpg', 14, 6, 'ERGONOMIC OVAL CONTAINER 120 ml HDPE 20 MM WHITE MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FO000230', 'ENVASE OVAL 120 ml PVC BLANCO BOCA 20 MM', 'ENVASE 120 ml ', 101, 1, 12, 1, 1, 0, 4, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/560953425.png', 14, 6, 'OVAL BOTTLE 120 ml PVC WHITE 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FO000325', 'ENVASE OVALADO 120 ml HDPE BLANCO BOCA 20 MM', 'ENVASE 120 ml ', 117, 1, 13, 1, 1, 0, 3, '120', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/271295654.png', 12, 6, '120ml OVAL HDPE BOTTLE MOUTH 20MM WHITE', 'BOTTLE 120 ml ', '', ''),
('22FO000343', 'ENVASE OVALADO 120 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 120 ml ', 117, 1, 14, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/32675719.png', 21, 6, '120ml OVAL HDPE BOTTLE MOUTH WHITE 24 MM', 'BOTTLE 120 ml ', '', ''),
('22FO000360', 'ENVASE OVAL FARMACÃ‰UTICO 120 ml PET CRISTAL BOCA 28 MM EMP. CAJA', 'ENVASE 120 ml ', 128, 35, 12, 1, 1, 0, 3, '120', 3, 5, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/676756396.png', 25, 6, 'PHARMACEUTICAL BOTTLE 120 ml PET OVAL MOUTH GLASS 28 MM EMP. BOX', 'BOTTLE 120 ml ', '', ''),
('22FO000412', 'ENVASE OVAL 200 ml HDPE BLANCO BOCA 20-415 MM', 'ENVASE 200 ml ', 101, 1, 12, 1, 1, 0, 3, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/451794189.png', 16, 7, '200 ml HDPE CONTAINER WHITE OVAL MOUTH 20-415 MM', 'BOTTLE 200 ml ', '', ''),
('22FO000430', 'ENVASE OVAL 200 ml PVC BLANCO BOCA 20 MM', 'ENVASE 200 ml ', 101, 1, 12, 1, 1, 0, 3, '200', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/067314678.png', 14, 7, 'OVAL BOTTLE 200 ml PVC WHITE 20 MM MOUTH', 'BOTTLE 200 ml ', '', ''),
('22FO000470', 'ENVASE Ã‰LICO SM 125 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 125 ml ', 98, 2, 8, 1, 1, 0, 3, '125', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/722182203.jpg', 23, 6, 'Elico CONTAINER GLASS SM 125 ml PET 24-410 MM MOUTH', 'BOTTLE SM 125 ml ', '', ''),
('22FO000472', 'ENVASE Ã‰LICO SM 125 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 125 ml ', 98, 2, 8, 1, 1, 0, 3, '125', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/545431234.jpg', 24, 6, 'Elico CONTAINER GLASS SM 125 ml PET 24-415 MM MOUTH', 'BOTTLE SM 125 ml ', '', ''),
('22FO000515', 'ENVASE Ã‰LICO SM 225 ml PET CRISTAL BOCA 24-410 MM 5 CAV.', 'ENVASE SM 225 ml ', 98, 2, 8, 1, 1, 0, 2, '225', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/451006296.jpg', 23, 9, 'Elico CONTAINER GLASS SM 225 ml PET 24-410 MM MOUTH 5 CAV.', 'BOTTLE SM 225 ml ', '', ''),
('22FO000526', 'ENVASE Ã‰LICO SM 225 ml PET BLANCO BOCA 24-415 MM', 'ENVASE SM 225 ml ', 98, 2, 8, 1, 1, 0, 2, '225', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/35556506.jpg', 24, 9, 'Elico CONTAINER 225 ml PET WHITE SM 24-415 MM MOUTH', 'BOTTLE SM 225 ml ', '', ''),
('22FO000530', 'ENVASE OVALADO BABY 400 ml HDPE NATURAL BOCA 24-415 MM', 'OVALADO BABY 400 ml ', 83, 1, 13, 1, 1, 0, 2, '400', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/135952193.jpg', 24, 11, 'BOTTLE 400 ml HDPE OVAL NATURAL BABY MOUTH 24-415 MM', 'OVAL BABY 400 ml', '', ''),
('22FO000550', 'ENVASE OVAL VS 250 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE OVAL 250', 46, 9, 12, 1, 1, 0, 5, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/591248832.jpg', 24, 10, 'CONTAINER OVAL VS 250 ml PET CRISTAL MOUTH 24-415 MM', 'OVAL CONTAINER 250', '', ''),
('22FO000640', 'ENVASE OVAL 275 ml PVC BLANCO BOCA 24 MM', 'ENVASE 275 ml ', 101, 1, 12, 1, 1, 0, 3, '275', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/453752742.png', 21, 10, '275 ml PVC CONTAINER WHITE OVAL 24 MM MOUTH', 'BOTTLE 275 ml ', '', ''),
('22FO000670', 'ENVASE OVAL NP 250 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 250 ml ', 106, 38, 12, 1, 1, 0, 3, '250', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/175894265.png', 21, 9, 'CONTAINER NP 250 ml PVC OVAL GLASS 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FO000677', 'ENVASE OVAL SHAMPOO X 270 ML PP. VERDE BOCA 24 MM SNAP ', 'ENVASE 270 ml ', 99, 25, 12, 1, 1, 0, 3, '270', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/919908635.png', 21, 10, 'OVAL BOTTLE SHAMPOO X 270 ML PP. GREEN MOUTH 24MM SNAP', 'BOTTLE 270 ml ', '', ''),
('22FO000680', 'ENVASE OVAL 450 ml HDPE BLANCO BOCA 24 MM SNAP', 'ENVASE 400 ml ', 99, 25, 12, 1, 1, 0, 2, '450', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/422163091.png', 21, 13, '450ml OVAL HDPE BOTTLE MOUTH WHITE 24MM SNAP', 'BOTTLE 400 ml ', '', ''),
('22FO000700', 'ENVASE OVALADO BABY 200 ml HDPE NATURAL BOCA 24-415 MM 4 CAV.', 'OVALADO BABY 200 ml ', 83, 1, 14, 1, 1, 0, 3, '200', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/511425830.jpg', 24, 7, 'BOTTLE 200 ml HDPE OVAL NATURAL BABY MOUTH 24-415 MM 4 CAV.', 'OVAL BABY 200 ml', '', ''),
('22FO000702', 'ENVASE OVALADO 250 ml HDPE BLANCO BOCA 24 MM', 'ENVASE 250 ml ', 117, 1, 13, 1, 1, 0, 2, '250', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/662228567.png', 21, 9, '250ml OVAL HDPE BOTTLE MOUTH WHITE 24 MM', 'BOTTLE 250 ml ', '', ''),
('22FO000715', 'ENVASE Ã‰LICO 250 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 250 ml ', 112, 1, 8, 1, 1, 0, 2, '250', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/114349461.png', 21, 9, 'ELICO 250 ml PVC CONTAINER GLASS 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FO000716', 'ENVASE Ã‰LICO 250 ml PVC BLANCO BOCA 24 MM', 'ENVASE 250 ml ', 112, 1, 8, 1, 1, 0, 2, '250', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/98785203.png', 21, 9, 'ELICO CONTAINER 250 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FO000722', 'ENVASE Ã‰LICO 120 ml PVC BLANCO BOCA 20 MM', 'ENVASE 120 ml ', 112, 1, 8, 1, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/769889851.png', 14, 6, 'Elico CONTAINER 120 ml PVC WHITE 20 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FO000726', 'ENVASE ELÃPTICO 200 ml HDPE BLANCO BOCA 24 MM SNAP 2 CAV.', 'ENVASE 200 ml ', 114, 1, 9, 1, 1, 0, 3, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/351735826.png', 21, 7, '200 ml HDPE CONTAINER WHITE ELLIPTICAL MOUTH 24MM SNAP 2 CAV.', 'BOTTLE 200 ml ', '', ''),
('22FO000731', 'ENVASE ELÃPTICO 250 ml PP BLANCO BOCA 28 MM SNAP', 'ENVASE 250 ml ', 114, 1, 9, 1, 1, 0, 3, '250', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/882083956.png', 25, 9, '250 ml PP CONTAINER WHITE ELLIPTICAL MOUTH 28MM SNAP', 'BOTTLE 250 ml ', '', '');
INSERT INTO `productos` (`producto_codigo`, `producto_descripcion`, `producto_nombre`, `categoria_id`, `sublinea_id`, `forma_id`, `producto_atributo1`, `producto_atributo2`, `producto_entradas`, `tamano_id`, `producto_capacidad`, `producto_unidadCap`, `material_id`, `color_id`, `producto_boca`, `producto_unidadBoca`, `producto_peso`, `producto_terminado`, `linner_id`, `falda_id`, `producto_cavidades`, `producto_anotacion`, `clase_id`, `producto_imagen`, `boca_id`, `capacidad_id`, `producto_descripcion_i`, `producto_nombre_i`, `producto_terminado_i`, `producto_anotacion_i`) VALUES
('22FO000741', 'ENVASE ELÃPTICO 250 ml PVC CRISTAL BOCA 28 MM', 'ENVASE 250 ml ', 114, 1, 9, 1, 1, 0, 3, '250', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/392995813.png', 25, 9, 'ELLIPTICAL 250 ml PVC CONTAINER GLASS 28 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FO000747', 'ENVASE ELÃPTICO 250 ml PVC BLANCO BOCA 24 MM SNAP', 'ENVASE 250 ml ', 114, 1, 9, 1, 1, 0, 3, '250', 3, 9, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/471751819.png', 21, 9, 'ELLIPTICAL 250 ml PVC BOTTLE WHITE MOUTH 24MM SNAP', 'BOTTLE 250 ml ', '', ''),
('22FO000750', 'ENVASE OBLONG 300 ml PVC CRISTAL BOCA 28 MM', 'ENVASE 300 ml ', 102, 1, 15, 1, 1, 0, 3, '300', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/678874449.png', 25, 10, '300 ml PVC CONTAINER GLASS OBLONG 28 MM MOUTH', 'BOTTLE 300 ml ', '', ''),
('22FO000751', 'ENVASE OBLONG 300 ml PVC BLANCO BOCA 28 MM', 'ENVASE 300 ml ', 102, 1, 15, 1, 1, 0, 3, '300', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/523347573.png', 25, 10, '300 ml PVC CONTAINER WHITE OBLONG 28 MM MOUTH', 'BOTTLE 300 ml ', '', ''),
('22FO000786', 'ENVASE OBLONG 300 ml PP BLANCO BOCA 28-410 MM 2 CAV.', 'ENVASE 300 ml ', 102, 1, 15, 1, 1, 0, 3, '300', 3, 6, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/977354305.jpg', 28, 10, '300 ml PP CONTAINER WHITE OBLONG FACE 28-410 MM 2 CAV.', 'BOTTLE 300 ml ', '', ''),
('22FO000790', 'ENVASE OBLONG 500 ml PVC CRISTAL BOCA 28 MM HONGO', 'ENVASE 500 ml ', 102, 1, 15, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/087876335.png', 25, 13, '500 ml PVC CONTAINER GLASS OBLONG 28 MM MOUTH FUNGUS', 'BOTTLE 500 ml ', '', ''),
('22FO000791', 'ENVASE OBLONG 500 ml PVC GRIS BOCA 28 MM', 'ENVASE 500 ml ', 102, 1, 15, 1, 1, 0, 2, '500', 3, 9, 14, '0', 1, '', '', 1, 1, 0, '', 1, '/img/869067950.png', 25, 13, 'OBLONG PVC CONTAINER 500 ml 28 MM MOUTH GREY', 'BOTTLE 500 ml ', '', ''),
('22FO000820', 'ENVASE OVAL 500 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 500 ml ', 101, 1, 12, 1, 1, 0, 2, '500', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/158405493.png', 21, 13, '500 ml PVC CONTAINER GLASS OVAL 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FO000830', 'ENVASE OVAL 500 ml PVC BLANCO BOCA 24 MM', 'ENVASE 500 ml ', 101, 1, 12, 1, 1, 0, 3, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/144312078.png', 21, 13, 'OVAL BOTTLE 500 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FO000850', 'ENVASE OVAL NP 500 ml PVC CRISTAL BOCA 24 MM', 'ENVASE 500 ml ', 106, 38, 12, 1, 1, 0, 2, '5800', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/45193045.png', 21, 13, 'CONTAINER NP 500 ml PVC OVAL GLASS 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FO000851', 'ENVASE OVAL NP 500 ml PVC BLANCO BOCA 24 MM', 'ENVASE 500 ml ', 106, 38, 12, 1, 1, 0, 2, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/5375258.png', 21, 13, 'OVAL CONTAINER NP 500 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FO000880', 'ENVASE ELÃPTICO 400 ml HDPE BLANCO BOCA 24 MM SNAP', 'ENVASE 400 ml ', 114, 1, 9, 1, 1, 0, 2, '400', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/763653702.png', 21, 11, '400 ml HDPE CONTAINER WHITE ELLIPTICAL MOUTH 24MM SNAP', 'BOTTLE 400 ml ', '', ''),
('22FO000884', 'ENVASE ELIPTICO X 400 ML HDPE NATURAL BOCA 24 MM HONGO SNAP TOP NP/2001   ', 'ENVASE 400 ml ', 114, 1, 9, 1, 1, 0, 2, '400', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/263824350.png', 21, 11, 'PACKAGING 400 ML HDPE ELLIPTICAL X 24 MM MOUTH FUNGUS NATURAL TOP SNAP NP/2001', 'BOTTLE 400 ml ', '', ''),
('22FO000903', 'ENVASE ELÃPTICO 1000 ml HDPE BLANCO BOCA 28 MM', 'ENVASE 1000 ml ', 114, 1, 9, 1, 1, 0, 2, '1000', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/449323932.png', 25, 14, 'ELLIPTICAL 1000 ml HDPE BOTTLE MOUTH 28MM WHITE', 'BOTTLE 1000 ml ', '', ''),
('22FP000011', 'ENVASE PLANO 40 ml PVC BLANCO BOCA 18 MM', 'ENVASE 40 ml ', 92, 1, 16, 1, 1, 0, 4, '40', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/210286354.jpg', 12, 12, 'FLAT PACK 40 ml PVC WHITE 18 MM MOUTH', 'BOTTLE 40 ml ', '', ''),
('22FP000046', 'ENVASE PLANO RANURADO 120 ml PVC BLANCO BOCA 24 MM', 'ENVASE 120 ml', 100, 1, 3, 18, 1, 0, 3, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/776272483.png', 21, 6, 'FLAT PACK SLOT PVC WHITE 120 ml 24 MM MOUTH', 'BOTTLE 120 ml ', '', ''),
('22FP000050', 'ENVASE PLANO RANURADO 220 ml PVC BLANCO BOCA 24 MM', 'ENVASE 200 ml ', 100, 1, 3, 1, 1, 0, 2, '200', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/060662821.png', 21, 7, 'FLAT PACK SLOT PVC WHITE 220 ml 24 MM MOUTH', 'BOTTLE 200 ml ', '', ''),
('22FP000091', 'ENVASE PLANO 150 ml PVC BLANCO BOCA 24 MM PG', 'ENVASE 150 ml ', 92, 1, 16, 1, 1, 0, 3, '150', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/433625741.jpg', 21, 6, 'FLAT PACK 150 ml PVC WHITE 24 MM MOUTH PG', 'BOTTLE 150 ml ', '', ''),
('22FP000151', 'ENVASE PLANO 250 ml PVC BLANCO BOCA 24 MM', 'ENVASE 250 ml ', 92, 1, 16, 1, 1, 0, 3, '250', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/394434338.jpg', 21, 9, 'FLAT PACK 250 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 250 ml ', '', ''),
('22FP000201', 'ENVASE PLANO 500 ml PVC BLANCO BOCA 24 MM', 'ENVASE 500 ml ', 92, 1, 16, 1, 1, 0, 2, '500', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/236832519.jpg', 21, 13, 'FLAT PACK 500 ml PVC WHITE 24 MM MOUTH', 'BOTTLE 500 ml ', '', ''),
('22FP000301', 'ENVASE PLANO 1000 ml PVC BLANCO BOCA 33 MM', 'ENVASE 1000 ml ', 92, 1, 16, 1, 1, 0, 2, '1000', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/51495242.jpg', 33, 14, 'FLAT PACK 1000 ml PVC WHITE 33 MM MOUTH', 'BOTTLE 1000 ml ', '', ''),
('22FP000801', 'ENVASE PLANO UNILATERAL 120 ml PVC BLANCO BOCA 20 MM', 'UNILATERAL 120 ml ', 82, 1, 16, 1, 1, 0, 4, '120', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/86105400.jpg', 14, 6, 'UNILATERAL FLAT PACK 120 ml PVC WHITE 20 MM MOUTH', 'UNILATERAL 120 ml', '', ''),
('22FP000901', 'ENVASE PLANO UNILATERAL 240 ml PVC BLANCO BOCA 24 MM', 'UNILATERAL 240 ml ', 82, 1, 16, 1, 1, 0, 2, '240', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/471294032.jpg', 21, 9, 'UNILATERAL FLAT PACK 240 ml PVC WHITE 24 MM MOUTH', 'UNILATERAL 240ml', '', ''),
('22FT000006', 'ENVASE . TUBO COLAPSIBLE 120 ml HDPE BLANCO BOCA 22-400 MM X  38', 'ENVASE 120 ml ', 74, 41, 13, 1, 1, 0, 3, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/596386553.jpg', 18, 6, 'CONTAINER. collapsible 120 ml HDPE TUBE WHITE MOUTH 22-400 MM X 38', 'BOTTLE 120 ml ', '', ''),
('22FT000030', 'ENVASE . TUBO COLAPSIBLE 90 ml HDPE BLANCO BOCA 22-400 MM X 38', 'ENVASE 90 ml ', 74, 41, 13, 1, 1, 0, 4, '90', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/319044850.jpg', 18, 17, 'CONTAINER. collapsible 90 ml HDPE TUBE WHITE MOUTH 22-400 MM X 38', 'BOTTLE 90 ml ', '', ''),
('22FT000060', 'ENVASE TUBO TUBO COLAPSIBLE 60 ml PVC CRISTAL BOCA 22-400 MM X 38', 'ENVASE 60 ml ', 74, 41, 14, 1, 1, 0, 4, '60', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/92360805.jpg', 18, 17, 'PACKAGING TUBE TUBE PVC collapsible 60 ml GLASS MOUTH 22-400 MM X 38', 'BOTTLE 60 ml ', '', ''),
('22FT000061', 'ENVASE . TUBO COLAPSIBLE 60 ml PVC BLANCO BOCA 22-400 MM X 38', 'ENVASE 60 ml ', 74, 41, 13, 1, 1, 0, 4, '60', 3, 9, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/811344348.jpg', 18, 17, 'CONTAINER. 60 ml collapsible PVC TUBE WHITE MOUTH 22-400 MM X 38', 'BOTTLE 60 ml ', '', ''),
('22FT000080', 'ENVASE . TUBO COLAPSIBLE 150 ml PVC CRISTAL BOCA 22-400 MM X 38 MM', 'ENVASE 150 ml ', 74, 41, 14, 1, 1, 0, 3, '150', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/112225804.jpg', 18, 6, 'CONTAINER. 150 ml collapsible PVC TUBE GLASS MOUTH 22-400 MM X 38 MM', 'BOTTLE 150 ml ', '', ''),
('22FT000081', 'ENVASE . TUBO COLAPSIBLE 150 ml PVC BLANCO BOCA 24-400 MM X 38', 'ENVASE 150 ml ', 74, 41, 13, 1, 1, 0, 3, '150', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/559776799.jpg', 22, 6, 'CONTAINER. 150 ml collapsible PVC TUBE WHITE MOUTH 24-400 MM X 38', 'BOTTLE 150 ml ', '', ''),
('22FT000101', 'ENVASE . TUBO COLAPSIBLE 200 ml PP BLANCO BOCA 22-400 MM X 48 MM', 'ENVASE 200 ml ', 74, 41, 13, 1, 1, 0, 2, '200', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/231232638.jpg', 22, 7, 'CONTAINER. 200 ml PP collapsible TUBE MOUTH WHITE 22-400 MM X 48 MM', 'BOTTLE 200 ml ', '', ''),
('22FT000102', 'ENVASE . TUBO COLAPSIBLE 200 ml PVC CRISTAL BOCA 22-400 MM X 48 MM', 'ENVASE 200 ml ', 74, 41, 14, 1, 1, 0, 2, '200', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/329961575.jpg', 18, 7, 'CONTAINER. 200 ml collapsible PVC TUBE GLASS MOUTH 22-400 MM X 48 MM', 'BOTTLE 200 ml ', '', ''),
('22FT000200', 'ENVASE . TUBO COLAPSIBLE 300 ml PVC CRISTAL BOCA 22-400 MM X 48 MM', 'ENVASE 300 ml ', 74, 41, 13, 1, 1, 0, 2, '300', 3, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/945063714.jpg', 18, 10, 'CONTAINER. 300 ml collapsible PVC TUBE GLASS MOUTH 22-400 MM X 48 MM', 'BOTTLE 300 ml ', '', ''),
('22FT000201', 'ENVASE . TUBO COLAPSIBLE 300 ml PVC BLANCO BOCA 22-400 MM X 48 MM', 'ENVASE 300 ml ', 74, 41, 13, 1, 1, 0, 2, '300', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/19468583.jpg', 18, 10, 'CONTAINER. 300 ml collapsible PVC TUBE WHITE MOUTH 22-400 MM X 48 MM', 'BOTTLE 300 ml ', '', ''),
('22GC000022', 'GARRAFA CON ASA CILÃNDRICA 750 ml HDPE BLANCO BOCA 28 MM', 'GARRAFA 750 ml ', 87, 44, 1, 1, 1, 0, 5, '750', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/042501711.jpg', 25, 14, 'BOTTLE WITH HANDLE WHITE CYLINDRICAL MOUTH 750 ml HDPE 28 MM', 'BOTTLE 750 ml ', '', ''),
('22GO000111', 'GARRAFA CON ASA OVALADA 1000 ml HDPE BLANCO BOCA 33 MM', 'GARRAFA 1000 ml ', 86, 44, 12, 1, 1, 0, 5, '1000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/127373920.jpg', 33, 14, 'ASA OVAL BOTTLE WITH WHITE MOUTH 1000 ml HDPE 33 MM', 'BOTTLE 1000 ml ', '', ''),
('22GO000201', 'GARRAFA CON ASA OVALADA 2000 ml HDPE BLANCO BOCA 33 MM', 'GARRAFA 2000 ml ', 86, 44, 12, 1, 1, 0, 2, '2000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/96492780.jpg', 33, 15, 'OVAL BOTTLE WITH ASA 2000 ml HDPE 33 MM WHITE MOUTH', 'BOTTLE 2000 ml ', '', ''),
('22GO000402', 'GARRAFA CON ASA OVALADA 520 ml PP BLANCO BOCA 28 PCO', 'GARRAFA 520 ml ', 85, 44, 12, 1, 1, 0, 5, '520', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/96473633.jpg', 25, 14, 'ASA OVAL BOTTLE WITH WHITE MOUTH 520 ml PP 28 PCO', 'BOTTLE 520 ml', '', ''),
('22GO000455', 'GARRAFA CON ASA OVALADA 1000 ml PP BLANCO BOCA 28 PCO 70 g', 'GARRAFA 1000 ml ', 85, 44, 13, 1, 1, 0, 3, '1000', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/73781492.jpg', 25, 14, 'ASA OVAL BOTTLE WITH WHITE MOUTH 1000 ml PP 28 PCO 70 g', 'BOTTLE 1000 ml ', '', ''),
('22GO000483', 'GARRAFA CON ASA OVALADA 2000 ml PP BLANCO BOCA 28 PCO', 'GARRAFA 2000 ml ', 85, 44, 14, 1, 1, 0, 2, '2000', 3, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/583673862.jpg', 25, 15, '2000 ASA OVAL BOTTLE WITH WHITE FACE 28 ml PP PCO', 'BOTTLE 2000 ml ', '', ''),
('22GO000903', 'GARRAFA CON GRIP CILÃNDRICA 1900 ml HDPE BLANCO BOCA 38 MM 2 CAV. EMP. BOLSA', 'GARRAFA 1900 ml ', 87, 44, 1, 1, 1, 0, 2, '1900', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/379052052.jpg', 35, 15, 'GRIP BOTTLE WITH WHITE CYLINDRICAL MOUTH 1900 ml HDPE 38 MM 2 CAV. EMP. BAG', 'BOTTLE 1900 ml ', '', ''),
('22GP000302', 'GARRAFA CON ASA PLANA 800 ml PP BLANCO BOCA 28 PCO', 'ENVASE 800 ml', 131, 44, 17, 1, 1, 0, 2, '800', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/98157379.jpg', 25, 14, 'ASA FLAT BOTTLE WITH WHITE MOUTH 800 ml PP 28 PCO', 'BOTTLE 800 ml ', '', ''),
('22IS000005', 'BOTELLA CILINDRICA LJ NP L/ASEO X 150 ML PET CRISTAL BOCA 28PCO (EMP. EN BOLSA)           ', 'Btll. ASEO  150 ml ', 35, 19, 1, 1, 1, 0, 6, '150', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/944208023.png', 26, 7, 'LJ CYLINDRICAL BOTTLE NP L / X 150 ML PET TOILET MOUTH GLASS 28PCO (Emp. IN BAG)', 'TOILET BOTTLE 150 ml', '', ''),
('22LM000001', 'LINEA ENVASES MINI EN PET ', 'LINEA MINI ', 148, 1, 2, 1, 1, 0, 4, '60', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/196926588.png', 15, 17, 'MINI CONTAINERS PET LINE IN', 'MINI LINE ', '', ''),
('22MO000091', 'ENVASE CUADRADO SM SQUASH 120 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 120 ml ', 1, 2, 6, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/070979560.png', 23, 6, 'SQUASH SM BOTTLE SQUARE GLASS 120 ml PET 24-410 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22PS000012', 'ENVASE CILÃNDRICO PASTILLERO 50 ml HDPE BLANCO BOCA 32 MM 2 CAV.', 'ENVASE 50 ml ', 94, 47, 2, 1, 1, 0, 4, '50', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/152394867.jpg', 31, 12, 'CYLINDRICAL CONTAINER WHITE PILL 50 ml HDPE 32 MM 2 CAV MOUTH.', 'BOTTLE 50 ml ', '', ''),
('22PS000021', 'ENVASE PASTILLERO CILINDRICO 75ML B38MM PEAD   ', 'ENVASE 75 ml ', 94, 47, 2, 1, 1, 0, 3, '75', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/814344402.jpg', 35, 17, 'CYLINDRICAL CONTAINER 75ML B38MM HDPE PILL', 'BOTTLE 75 ml ', '', ''),
('22PS000031', 'ENVASE CILÃNDRICO PASTILLERO 100 ml HDPE BLANCO BOCA 50 MM 2 CAV.', 'ENVASE 100 ml ', 94, 47, 2, 1, 1, 0, 2, '100', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/020604946.jpg', 39, 17, 'CYLINDRICAL CONTAINER WHITE PILL 100 ml HDPE 50 MM 2 CAV MOUTH.', 'BOTTLE 100 ml ', '', ''),
('22PS000100', 'ENVASE CILÃNDRICO POTE GEL N.A 3 ENT. 100 g HDPE BLANCO BOCA 58 MM', 'POTE 100  ml ', 48, 27, 2, 1, 1, 0, 3, '100', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/163462941.jpg', 45, 6, 'CYLINDRICAL CONTAINER POT N.A GEL â€‹â€‹3 ENT. 100 g HDPE 58 MM WHITE MOUTH', 'JAR 100 ml', '', ''),
('22PS000200', 'ENVASE CILÃNDRICA POTE GEL N.A 3 ENT. 200 g HDPE BLANCO BOCA 70 MM', 'POTE 200 ml ', 48, 27, 2, 1, 1, 0, 2, '200', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/088971816.jpg', 45, 9, 'CYLINDRICAL CONTAINER POT N.A GEL â€‹â€‹3 ENT. 200 g HDPE 70 MM WHITE MOUTH', 'JAR 200 ml', '', ''),
('22PS000300', 'ENVASE OVAL POTE 380 ml HDPE BLANCO BOCA 83 MM', 'POTE 380 ml ', 119, 27, 12, 1, 1, 0, 2, '380', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/072943946.png', 47, 11, 'OVAL POT CONTAINER 380 ml â€‹â€‹HDPE 83 MM WHITE MOUTH', 'JAR 380 ml ', '', ''),
('22RI000001', 'ENVASE OVAL ROLL-ON TRADICIONAL 75 ml PP BLANCO BOCA 1.4\\''', 'ROLL-ON NP 75 ml', 60, 32, 12, 1, 1, 0, 3, '75', 3, 6, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/12559922.png', 10, 17, 'ROLL-ON OVAL CONTAINER 75 ml PP WHITE TRADITIONAL MOUTH 1.4 \\\\\\''', 'ROLL-ON NP 75 ml', '', ''),
('22RI000010', 'ENVASE CILÃNDRICO ROLL-ON 60 ml HDPE BLANCO BOCA 1\\''', 'ROLL-ON 60 ml', 59, 32, 2, 1, 1, 0, 4, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/694589374.png', 9, 17, 'ROLL-ON CYLINDRICAL CONTAINER 60 ml HDPE WHITE MOUTH 1 \\\\\\\\\\\\\\''', 'ROLL-ON 60 ml', '', ''),
('22RI000020', 'ENVASE OVAL ROLL-ON NP 75 ml PP BLANCO BOCA 1.4\\''', 'ROLL-ON NP 75 ml', 60, 32, 12, 1, 1, 0, 3, '75', 3, 6, 13, '0', 1, '', '', 1, 1, 0, '', 1, '/img/63628341.png', 10, 17, 'ROLL-ON OVAL CONTAINER 75 ml PP NP 1.4 WHITE MOUTH \\\\\\''', 'ROLL-ON NP 75 ml', '', ''),
('22RI000030', 'ENVASE CILÃNDRICO ROLL-ON 80 ml HDPE BLANCO BOCA 1\\''', 'ROLL-ON 80 ml', 59, 32, 2, 1, 1, 0, 2, '80 ', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/995259243.png', 9, 17, 'ROLL-ON CYLINDRICAL CONTAINER 80 ml â€‹â€‹HDPE WHITE MOUTH 1 \\\\\\\\\\\\\\''', 'ROLL-ON 80 ml', '', ''),
('22SM000001', 'ENVASE SM ELICO X 60 ML PET CRISTAL BOCA 20-410 MM S/BOLSA INDIVIDUAL   ', 'ENVASE SM 60 ml ', 98, 2, 8, 1, 1, 0, 4, '60', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/646664314.jpg', 15, 17, 'Elico SM PACK X 60 ML GLASS MOUTH PET 20-410 MM S / BAG SINGLE', 'BOTTLE SM 60 ml ', '', ''),
('22SM000010', 'ENVASE CILÃNDRICO SM SPLASH 120 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 120 ml ', 6, 2, 2, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/086344725.png', 24, 6, 'CYLINDRICAL CONTAINER SM GLASS SPLASH 120 ml PET 24-415 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000030', 'ENVASE SM CILINDRICO SPLASH X 120 ML PET CRISTAL BOCA 24-410 MM C/BOLSA INDIVIDUAL     ', 'ENVASE SM 120 ml ', 6, 2, 2, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/341699175.png', 23, 6, 'SM CYLINDRICAL BOTTLE X 120 ML PET SPLASH GLASS MOUTH 24-410 MM C / INDIVIDUAL BAG', 'BOTTLE SM 120 ml', '', ''),
('22SM000050', 'ENVASE CILÃNDRICO SM LC 120 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 120 ml ', 10, 2, 2, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/190458041.png', 24, 6, 'CYLINDRICAL BOTTLE 120 ml PET SM LC 24-415 MM GLASS MOUTH', 'BOTTLE SM 120 ml ', '', ''),
('22SM000070', 'ENVASE SM CILINDRICO LACOUPE X 120 ML PET CRISTAL BOCA 24-410 MM C/BOLSA INDIVIDUAL          ', 'ENVASE SM 120 ml ', 10, 2, 2, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/832074104.png', 23, 6, 'SM CYLINDRICAL BOTTLE X 120 ML PET LACOUPE MOUTH GLASS 24-410 MM C / INDIVIDUAL BAG', 'BOTTLE SM 120 ml', '', ''),
('22SM000080', 'ENVASE PLANO SM 120 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 120 ml ', 7, 2, 16, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/04173233.png', 24, 6, 'BOTTLE  FLAT GLASS SM 120 ml PET 24-415 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000081', 'ENVASE PLANO SM 120 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 120 ml ', 7, 2, 16, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/526214847.png', 23, 6, 'BOTTLE  FLAT GLASS SM 120 ml PET 24-410 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000090', 'ENVASE CUADRADO SM SQUASH 120 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 120 ml ', 1, 2, 6, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/78629224.png', 24, 6, 'SQUASH SM BOTLE SQUARE GLASS 120 ml PET 24-415 MM MOUTH', 'BOTTLE SM 120 ML', '', ''),
('22SM000110', 'ENVASE CILÃNDRICO BALA SMP 60 ml PET CRISTAL BOCA 20-410 MM', 'ENVASE SM 60 ml', 21, 2, 3, 1, 1, 0, 4, '60', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/238224107.jpg', 23, 6, 'CYLINDRICAL BOTTLE SMP 60 ml PET BULLET GLASS MOUTH 20-410 MM', 'BOTTLE SM 60 ml', '', ''),
('22SM000120', 'ENVASE SM OBLONG X 120 ML PET CRISTAL BOCA 24-415 MM S/BOLSA INDIVIDUAL       ', 'ENVASE SM 120 ml ', 9, 2, 15, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/625129714.png', 24, 6, 'SM BOTTLE X 120 ML PET OBLONG GLASS MOUTH 24-415 MM S / BAG SINGLE', 'BOTTLE SM 120 ml ', '', ''),
('22SM000130', 'ENVASE SM OBLONG X 120 ML PET CRISTAL BOCA 24-410 MM S/BOLSA INDIVIDUAL  ', 'ENVASE SM 120 ml ', 9, 2, 15, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/014725829.png', 23, 6, 'SM BOTTLE X 120 ML PET OBLONG GLASS MOUTH 24-410 MM S / BAG SINGLE', 'BOTTLE SM 120 ml', '', ''),
('22SM000140', 'ENVASE CILÃNDRICO BALA SM 120 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 120 ml ', 21, 2, 3, 1, 1, 0, 3, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/92655522.png', 24, 6, 'CYLINDRICALBOTTLE 120 ml PET BULLET GLASS SM 24-415 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000142', 'ENVASE CILÃNDRICO BALA SM 120 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 120 ml ', 21, 2, 3, 1, 1, 0, 3, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/292234998.png', 23, 6, 'CYLINDRICAL BOTLE 120 ml PET BULLET GLASS SM 24-410 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000145', 'ENVASE CILÃNDRICO SM BOSTON ROUND 120 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 120 ml ', 120, 2, 2, 1, 1, 0, 3, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/425939101.png', 23, 6, 'SM CYLINDRICAL BOTTLE 120 ml PET BOSTON ROUND GLASS MOUTH 24-410 MM', 'BOTTLE SM 120 ml ', '', ''),
('22SM000150', 'ENVASE CILÃNDRICO BALA SM 150 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 150 ml', 21, 2, 3, 1, 1, 0, 5, '150', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/422827553.png', 23, 7, 'CYLINDRICAL BOTTLE 150 ml PET BULLET GLASS SM 24-415 MM MOUTH', 'BOTTLE SM 150 ml', '', ''),
('22SM000161', 'ENVASE CÃ“NICO SM FIE 120 ml PET BLANCO BOCA 24-415 MM', 'ENVASE SM 120 ml ', 11, 2, 5, 1, 1, 0, 3, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/925812739.png', 24, 6, 'SM CONE BOTTLE120 ml PET WHITE FIE 24-415 MM MOUTH', 'BOTTLE SM 120 ml', '', ''),
('22SM000180', 'ENVASE SM CONICO FIE X 120 ML PET CRISTAL BOCA 24-410 MM C/BOLSA INDIVIDUAL  ', 'ENVASE SM 120 ml ', 11, 2, 2, 1, 1, 0, 4, '120', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/233215545.png', 23, 6, 'SM BOTTLE FIE X 120 ML TAPERED GLASS MOUTH PET 24-410 MM C / INDIVIDUAL BAG', 'BOTTLE SM 120 ml', '', ''),
('22SM000190', 'ENVASE PLANO SM BT 125 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE 125', 8, 2, 16, 1, 1, 0, 1, '125', 5, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/4561330.png', 23, 6, 'FLAT BOTTLE SM 125 ml PET BT 24-410 MM GLASS MOUTH', 'BOTTLE 125', '', ''),
('22SM000195', 'ENVASE PLANO SM BT 125 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE 125', 8, 2, 16, 1, 1, 0, 3, '125', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/21991202.png', 24, 6, 'FLAT BOTTLE SM 125 ml PET BT 24-410 MM GLASS MOUTH', 'BOTTLE 125', '', ''),
('22SM000220', 'ENVASE SM CONICO FIE X 240 ML PET CRISTAL BOCA 24-410 MM C/BOLSA INDIVIDUAL     ', 'ENVASE SM 240 ml  ', 11, 2, 5, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/552563993.png', 23, 9, 'SM PACK FIE X 240 ML TAPERED GLASS MOUTH PET 24-410 MM C / INDIVIDUAL BAG', 'BOTTLE SM 240 ml', '', ''),
('22SM000232', 'ENVASE CUADRADO SM SQUASH 240 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 240 ml  ', 1, 2, 6, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', 'CRISTAL', 1, 1, 0, '', 1, '/img/261896744.png', 24, 9, 'SQUASH SM BOTTLE SQUARE GLASS 240 ml PET 24-415 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000242', 'ENVASE CÃ“NICO SM FIE 240 ml PET BLANCO BOCA 24-415 MM', 'ENVASE SM 240 ml', 11, 2, 5, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/358372510.png', 24, 9, 'SM CONE BOTTLE  240 ml PET WHITE FIE 24-415 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000245', 'ENVASE PLANO SM BT 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE 240', 8, 2, 16, 1, 1, 0, 3, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/338117319.png', 23, 9, 'FLAT BOTTLE SM 240 ml PET BT 24-410 MM GLASS MOUTH', 'BOTTLE 240', '', ''),
('22SM000246', 'ENVASE PLANO SM BT 240 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE 240', 8, 2, 16, 1, 1, 0, 2, '240', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/819769471.png', 24, 9, 'FLAT BOTTLE SM 240 ml PET BT 24-415 MM GLASS MOUTH', 'BOTTLE 240', '', ''),
('22SM000251', 'ENVASE OVAL VS 250 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE OVAL 250', 46, 9, 12, 1, 1, 0, 5, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/736679473.jpg', 23, 10, 'VS OVAL CONTAINER GLASS 250 ml PET 24-410 MM MOUTH', 'OVAL BOTTLE 250', '', ''),
('22SM000260', 'ENVASE PLANO SM 240 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 240 ml', 7, 2, 16, 1, 1, 0, 1, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/129012434.png', 24, 9, 'BOTTLE 240 ml PET FLAT GLASS SM 24-415 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000261', 'ENVASE PLANO SM 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 240 ml  ', 7, 2, 16, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/655233714.png', 23, 9, 'BOTTLE 240 ml PET FLAT GLASS SM 24-410 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000272', 'ENVASE Ã‰LICO SM NP 275 ml PET BLANCO BOCA 24-410 MM', 'ENVASE SM 275 ml ', 98, 2, 8, 1, 1, 0, 2, '275', 3, 5, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/855936598.jpg', 23, 10, 'Elico CONTAINER 275 ml PET SM NP 24-410 MM WHITE MOUTH', 'BOTTLE SM 275 ml ', '', ''),
('22SM000277', 'ENVASE Ã‰LICO SM NP 275 ml PET BLANCO BOCA 24-415 MM', 'ENVASE 275 ml ', 98, 2, 8, 1, 1, 0, 2, '275', 3, 5, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/091877445.jpg', 24, 10, 'Elico CONTAINER 275 ml PET SM NP 24-415 MM WHITE MOUTH', 'BOTTLE 275 ml ', '', ''),
('22SM000340', 'ENVASE CILÃNDRICO SM SPLASH 270 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 270 ml ', 6, 2, 2, 1, 1, 0, 2, '270', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/947355614.png', 24, 10, 'SM CYLINDRICAL BOTTLE 270 ml PET GLASS SPLASH 24-415 MM MOUTH', 'BOTTLE SM 270 ml', '', ''),
('22SM000342', 'ENVASE SM CILINDRICO SPLASH X 270 ML PET CRISTAL BOCA 24-410 MM ', 'ENVASE SM 270 ml ', 6, 2, 2, 1, 1, 0, 2, '270', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/555338916.png', 23, 10, 'SM CYLINDRICAL BOTTLE 270 ML SPLASH X 24-410 MM MOUTH GLASS PET', 'BOTTLE SM 270 ml', '', ''),
('22SM000351', 'ENVASE SM CILINDRICO BALA LACOUPE X 220 ML PET CRISTAL BOCA 24-415 MM C/BOLSA INDIVIDUAL ', 'ENVASE SM 220 ml', 10, 2, 2, 1, 1, 0, 2, '220', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/726679002.png', 24, 9, 'CYLINDRICAL BOTTLE LACOUPE SM X MOUTH GLASS 220 ML PET 24-415 MM C / INDIVIDUAL BAG', 'BOTTLE SM 220 ml', '', ''),
('22SM000360', 'ENVASE SM CILINDRICO BALA LACOUPE X 220 ML PET CRISTAL BOCA 24-410 MM C/BOLSA INDIVIDUAL         ', 'ENVASE SM 220 ml', 10, 2, 2, 1, 1, 0, 2, '220', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/78907022.png', 23, 9, 'CYLINDRICAL BOTTLE  LACOUPE SM X MOUTH GLASS 220 ML PET 24-410 MM C / INDIVIDUAL BAG', 'BOTTLE SM  220 ml', '', ''),
('22SM000380', 'ENVASE CILÃNDRICO VS 250 ml PET CRISTAL BOCA 24-410 MM 25 g', 'ENVASE 250', 13, 9, 2, 1, 1, 0, 2, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/319521550.png', 23, 7, 'CYLINDRICAL BOTTLE 250 ml PET CRISTAL VS 24-410 MM MOUTH 25 g', 'BOTTLE 250', '', ''),
('22SM000410', 'ENVASE CILÃNDRICO BALA SM 250 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 250 ml', 21, 2, 3, 1, 1, 0, 2, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/540397551.png', 24, 10, 'CYLINDRICALBOTTLE  250 ml PET BULLET GLASS SM 24-415 MM MOUTH', 'BOTTLE SM 250 ml', '', ''),
('22SM000420', 'ENVASE CILÃNDRICO BALA SM 250 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 250 ml', 21, 2, 3, 1, 1, 0, 2, '250', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/820403160.png', 23, 10, 'CYLINDRICAL CONTAINER 250 ml PET BULLET GLASS SM 24-410 MM MOUTH', 'BOTTLE SM 250 ml', '', ''),
('22SM000630', 'ENVASE CILÃNDRICO BALA SM NP 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 240 ml', 12, 2, 2, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/096142478.jpg', 23, 9, 'CYLINDRICAL BOTTLE 240 ml PET SM NP 24-410 MM GLASS MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000635', 'ENVASE SM CILINDRICO BALA NP X 240 ML PET CRISTAL BOCA 24-415 MM C/BOLSA INDIVIDUAL ', 'ENVASE SM 240 ml  ', 12, 2, 2, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/727184306.jpg', 23, 9, 'CYLINDRICAL BOTTLE SM NP X 240 ML PET MOUTH GLASS 24-415 MM C / INDIVIDUAL BAG', 'BOTTLE SM 240 ml', '', ''),
('22SM000650', 'ENVASE CILÃNDRICO SM BOSTON ROUND 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE SM 240 ml ', 120, 2, 2, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/857181999.png', 23, 9, 'SM CYLINDRICAL BOTTLE 240 ml PET BOSTON ROUND GLASS MOUTH 24-410 MM', 'BOTTLE SM 240 ml ', '', ''),
('22SM000750', 'ENVASE OBLONG SM 240 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 240 ml  ', 9, 2, 15, 1, 1, 0, 1, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/24445884.png', 24, 9, 'BOTTLE 240 ml PET OBLONG GLASS SM 24-415 MM MOUTH', 'BOTTLE SM 240 ml', '', ''),
('22SM000950', 'ENVASE OVAL SM NP 100 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 100 ml ', 104, 2, 12, 1, 1, 0, 6, '100', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/821988012.png', 24, 17, 'SM OVAL BOTTLE 100 ml PET NP 24-415 MM GLASS MOUTH', 'BOTTLE SM 100 ml ', '', ''),
('22SM000960', 'ENVASE OVAL SM NP 200 ml PET CRISTAL BOCA 24-415 MM', 'ENVASE SM 200 ml ', 104, 2, 12, 1, 1, 0, 5, '200', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/568869138.png', 24, 7, 'SM OVAL BOTTLE 200 ml PET NP 24-415 MM GLASS MOUTH', 'BOTTLE SM 200 ml ', '', ''),
('22TC000002', 'TALQUERA CILÃNDRICA 50 g HDPE BLANCO 1 CAV.', 'TALQUERA 50 mm ', 61, 33, 1, 1, 1, 0, 6, '50', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/47327673.jpg', 25, 12, 'TALQUERA 50 g HDPE WHITE CYLINDRICAL 1 CAV.', 'TALQUERA 50 mm ', '', ''),
('22TC000009', 'TALQUERA CILÃNDRICA 100 g HDPE BLANCO 6 CAV.', 'TALQUERA 100 mm ', 61, 33, 1, 1, 1, 0, 5, '100', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/885016221.jpg', 36, 6, 'TALQUERA 100 g HDPE WHITE CYLINDRICAL 6 CAV.', 'TALQUERA 100 mm ', '', ''),
('22TC000010', 'TALQUERA CILÃNDRICA 150 g HDPE BLANCO 2 CAV.', 'TALQUERA 150 mm ', 61, 33, 1, 1, 1, 0, 5, '150', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/91496422.jpg', 36, 7, 'TALQUERA 150 g HDPE WHITE CYLINDRICAL 2 CAV.', 'TALQUERA 150 mm ', '', ''),
('22TC000020', 'TALQUERA CILÃNDRICA 300 g HDPE BLANCO 2 CAV.', 'TALQUERA 300 mm ', 61, 33, 1, 1, 1, 0, 5, '300', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/367607436.jpg', 36, 10, 'Cylindrical Talquera TALQUERA 300 g HDPE WHITE CYLINDRICAL 2 CAV.', 'TALQUERA 300 mm ', '', ''),
('22TC000051', 'GARRAFA CON ASA PLANA 1000 ml HDPE BLANCO BOCA 33 MM', 'GARRAFA 1000 ml ', 84, 44, 17, 1, 1, 0, 5, '1000', 3, 1, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/156193338.jpg', 33, 14, 'ASA FLAT BOTTLE WITH WHITE MOUTH 1000 ml HDPE 33 MM', 'BOTTLE 1000 ml ', '', ''),
('22TC000100', 'TALQUERA OVAL ESTRIADA 200 g PVC CRISTAL BOCA TAPA REJILLA', 'TALQUERA 200 g ', 66, 37, 12, 1, 1, 0, 5, '200', 2, 9, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/317281461.png', 25, 7, 'TALQUERA 200 g PVC OVAL FLUTED GLASS GRILL COVER MOUTH', 'TALQUERA 200 g ', '', ''),
('22TC000101', 'TALQUERA OVAL ESTRIADA 200 g PVC BLANCO BOCA TAPA REJILLA', 'TALQUERA 200 g', 66, 37, 12, 1, 1, 0, 5, '200', 2, 9, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/291446757.png', 25, 7, 'TALQUERA 200 g PVC RIBBED OVAL WHITE MOUTH GRILL COVER', 'TALQUERA 200 g', '', ''),
('22TC000102', 'TALQUERA OVAL NP 60 g HDPE BLANCO BOCA 28 MM T/R', 'TALQUERA 60 ml', 65, 36, 12, 1, 1, 0, 6, '60', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/282004844.png', 25, 17, 'TALQUERA NP 60 g HDPE OVAL WHITE MOUTH 28 MM T / R', 'TALQUERA 60 ml', '', ''),
('22TC000120', 'TALQUERA OVAL NP 120 g HDPE BLANCO BOCA 28 MM T/R', 'TALQUERA 120 ml', 65, 36, 12, 1, 1, 0, 5, '120', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/375891004.png', 25, 6, 'TALQUERA NP 120 g HDPE OVAL WHITE MOUTH 28 MM T / R', 'TALQUERA 120 ml', '', ''),
('22TC000141', 'TALQUERA OVAL NP 200 g HDPE BLANCO BOCA 28 MM T/R', 'TALQUERA 200 ml', 65, 36, 12, 1, 1, 0, 3, '200', 3, 1, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/117761870.png', 25, 9, 'TALQUERA NP 200 g HDPE OVAL WHITE MOUTH 28 MM T / R', 'TALQUERA 200 ml', '', ''),
('22TC000152', 'TALQUERA OVAL NP 300 g HDPE BLANCO BOCA 28 MM T/R', 'TALQUERA 300 ml', 65, 36, 12, 1, 1, 0, 2, '300', 3, 1, 3, '0', 1, '', '', 1, 1, 0, '', 1, '/img/846037699.png', 25, 11, 'TALQUERA NP 300 g HDPE OVAL WHITE MOUTH 28 MM T / R', 'TALQUERA 300 ml', '', ''),
('22VS000010', 'ENVASE CÃ“NICO VS SH 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE 240', 17, 9, 5, 1, 1, 0, 7, '240', 3, 5, 1, '0', 1, '', '', 1, 1, 0, '', 1, '/img/297941791.gif', 23, 9, 'CONE PACK VS 240 ml PET SH 24-410 MM GLASS MOUTH', 'BOTTLE 240', '', ''),
('22VS000030', 'ENVASE OVAL VS BODY FANTASIES 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE VS 240 ml', 15, 9, 3, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/64050674.jpg', 23, 9, 'OVAL BOTTLE VS FANTASIES BODY MOUTH GLASS 240 ml PET 24-410 MM', 'BOTTLE VS 240 ml', '', ''),
('22VS000040', 'ENVASE CUADRADO VS VAINILLA 240 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE 240', 14, 9, 3, 1, 1, 0, 2, '240', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/836371052.jpg', 23, 9, 'SQUARE BOTTLE 240 ml PET VS VANILLA 24-410 MM GLASS MOUTH', 'BOTTLE 240', '', ''),
('22VS000050', 'ENVASE CÃ“NICO VS BODY SPLASH 230 ml PET CRISTAL BOCA 24-410 MM', 'ENVASE 230', 16, 9, 5, 1, 1, 0, 7, '230', 3, 5, 5, '0', 1, '', '', 1, 1, 0, '', 1, '/img/039197153.gif', 23, 9, 'CONE BOTTLE VS 230 ml PET BODY SPLASH 24-410 MM GLASS MOUTH', 'BOTTLE 230', '', ''),
('24CV000301', 'SOBRETAPA CONVEXA MEDIANA PP BLANCA BOCA 24 MM CON LINNER POLYSEAL', 'CONVEXA MEDIANA', 170, 79, 1, 3, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/961736562.png', 21, 1, 'PP overcap CONVEXA MEDIUM WHITE 24 MM MOUTH WITH LINNER Polyseal', 'CONVEXA MEDIUM', '', ''),
('24PE000010', 'CUERPO POTE TRADICIONAL ENSAMBLADO 2 onz PS BLANCO', 'POTE 2 ONZ', 68, 27, 2, 16, 1, 0, 3, '2', 5, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/284409058.jpg', 9, 12, 'BODY ASSEMBLY TRADITIONAL POT 2 oz PS WHITE', 'JAR 2 ONZ', '', ''),
('24PE000214', 'CUERPO POTE CONVEXO ENSAMBLADO 2 onz PP NATURAL FROSTED', 'P.CONVEXO 2 ONZ', 133, 27, 2, 4, 26, 0, 3, '2', 5, 8, 6, '0', 1, '', '', 1, 1, 0, '', 2, '/img/118141855.jpg', 9, 12, 'POT CONVEX BODY ASSEMBLY 2 oz PP NATURAL FROSTED', 'JAR DOME 2 OZ', '', ''),
('24PE000400', 'CUERPO POTE TRADICIONAL ENSAMBLADO 4 onz PS BLANCO (100 GR)', 'POTE 4 ONZ', 68, 27, 2, 16, 1, 0, 2, '410', 3, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/61919224.jpg', 9, 12, 'BODY ASSEMBLY TRADITIONAL POT WHITE PS 4 oz (100 gr)', 'JAR 4 ONZ', '', ''),
('24PE000460', 'CUERPO POTE CONVEXO ENSAMBLADO 4 onz PP NATURAL FROSTED', 'P.CONVEXO 4 ONZ', 133, 27, 2, 4, 26, 0, 2, '4', 5, 8, 6, '0', 1, '', '', 1, 1, 0, '', 2, '/img/27847298.jpg', 9, 12, 'POT CONVEX BODY ASSEMBLY 4 oz NATURAL FROSTED PP', 'JAR  DOME 4 OZ', '', ''),
('24PE000510', 'CUERPO POTE TRADICIONANSAMBLADO 1 onz PS BLANCOL E', 'POTE 1 ONZ', 68, 27, 2, 1, 1, 0, 4, '1', 5, 9, 3, '0', 1, '', '', 1, 1, 0, '', 2, '/img/12938361.jpg', 9, 12, 'BODY ASSEMBLY TRADITIONAL POT WHITE 1oz PS', 'JAR 1 ONZ', '', ''),
('24PE000600', 'CUERPO POTE CONVEXO ENSAMBLADO 1 onz PS BLANCO', 'P.CONVEXO 1 ONZ', 133, 27, 2, 26, 4, 0, 4, '1', 5, 8, 6, '0', 1, '', '', 1, 1, 0, '', 2, '/img/479163046.jpg', 9, 12, 'CONVEX BODY ASSEMBLY JAR WHITE 1oz PS', 'JAR DOME 1 OZ', '', ''),
('24PV117001', 'APLICADOR CREMA VAGINAL ENSAMBLADO MDPE BLANCO EMP. BOLSA INDIVIDUAL', 'APLICADOR ', 135, 57, 2, 1, 1, 0, 3, '3', 2, 4, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/443624290.jpg', 9, 12, 'VAGINAL CREAM APPLICATOR ASSEMBLY WHITE MDPE EMP. INDIVIDUAL BAG', 'APPLICATOR', '', ''),
('24ST000950', 'SOBRETAPA JOICOCIRCULAR FLIP-TOP SNAP ENSAMBLADA PP NATURAL BOCA 28 MM BICOLOR', 'BICOLOR 28 mm', 173, 5, 1, 25, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/249398378.jpg', 25, 1, 'Overcap FLIP-TOP SNAP JOICOCIRCULAR ENSAMBLADA NATURAL PP 28 MM MOUTH BICOLOUR', 'BICOLOR 28 mm', '', ''),
('24TA000020', 'TAPA DISC-TOP ENSAMBLADA X 28-410 MM PP. LISA BLANCA-DISCO VERDE + C/ANILLO VERDE COD:PB0005437 TAPA DISC-TOP ENSAMBLADA X 28-410 MM PP. LISA BLANCA-DISCO VERDE + C/ANILLO VERDE COD:PB0005437                                                                                         ', 'Disc/Top con Anillo 28-410 mm ', 20, 3, 1, 1, 1, 0, 2, '', 1, 6, 8, '0', 1, '', '', 1, 1, 0, '', 3, '/img/426762248.png', 28, 1, 'DISC-TOP COVER ENSAMBLADA X 28-410 MM PP. LISA WHITE-GREEN DISC + C / RING GREEN COD: PB0005437', 'DISC-TOP WITH RING 28-410 mm', '', ''),
('24TC000010', 'TAPA CÃPSULA ENSAMBLADA PP AZUL BOCA 18 MM CON LINNER POLYSEAL', 'CAPSULA 18 mm', 78, 42, 1, 1, 1, 0, 1, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/218496242.jpg', 12, 1, 'CAPSULE TOP BLUE ASSEMBLED PP 18 MM MOUTH WITH LINNER Polyseal', 'CAPSULE 18 mm', '', ''),
('24TC000200', 'TAPA CÃPSULA ENSAMBLADA PP BLANCO BOCA 20 MM CON LINNER POLYSEAL', 'CAPSULA 20 mm', 78, 42, 1, 1, 1, 0, 5, '', 1, 6, 14, '0', 1, '', '', 1, 1, 0, '', 3, '/img/376966497.jpg', 14, 1, 'CAPSULE COVER WHITE ASSEMBLED PP 20 MM MOUTH WITH LINNER Polyseal', 'CAPSULE 20 mm', '', ''),
('24TC000450', 'TAPA CÃPSULA ENSAMBLADA PP BLANCO BOCA 24 MM CON LINNER POLYSEAL', 'CAPSULA 24 mm', 78, 42, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/577999882.jpg', 21, 1, 'CAPSULE COVER WHITE ASSEMBLED PP 24 MM MOUTH WITH LINNER Polyseal', 'CAPSULE 24 mm', '', ''),
('24TC000501', 'TAPA CÃPSULA INTEGRADA PP BLANCO BOCA 24 MM CON LINNER POLYSEAL', 'CAPSULA 24 mm', 77, 42, 1, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/761408982.jpg', 21, 1, 'CAPSULE TOP INTEGRATED WHITE PP 24 MM MOUTH WITH LINNER Polyseal', 'CAPSULE 24 mm', '', ''),
('24TC000650', 'TAPA DISC-TOP LISA ENSAMBLADA PP BLANCO BOCA 20-415 MM', 'DISC-TOP  20-415', 20, 3, 1, 1, 1, 0, 6, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/759938507.png', 16, 1, 'DISC-TOP COVER SMOOTH MOUTH WHITE ASSEMBLED 20-415 MM PP', 'DISC-TOP 20-415 ', '', ''),
('24TC000700', 'TAPA DISC-TOP LISA ENSAMBLADA PP BLANCO BOCA 24-415 MM', 'DISC-TOP 24-415', 20, 3, 1, 1, 1, 0, 1, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/576217370.png', 24, 1, 'DISC-TOP  SMOOTH MOUTH WHITE ASSEMBLED 24-415 MM PP', 'DISC-TOP 24-415', '', ''),
('24TC000733', 'TAPA DISC-TOP LISA ENSAMBLADA PP BLANCO BOCA 24-410 MM', 'DISC-TOP 24-410', 20, 3, 2, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/848539922.png', 23, 1, 'DISC-TOP COVER SMOOTH MOUTH WHITE ASSEMBLED 24-410 MM PP', 'DISC-TOP 24-410', '', ''),
('24TC000840', 'TAPA DISC-TOP LISA ENSAMBLADA PP BLANCO BOCA 28-410 MM', 'DISC-TOP 28-410 ', 20, 3, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/568059376.png', 28, 1, 'DISC-TOP  SMOOTH MOUTH WHITE ASSEMBLED 28-410 MM PP', 'DISC-TOP 28-410 ', '', ''),
('24TC000841', 'TAPA DISC-TOP LISA ENSAMBLADA PP BLANCO BOCA 28-415 MM', 'DISC-TOP 28-415', 20, 3, 1, 1, 1, 0, 2, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/714151500.png', 30, 1, 'DISC-TOP COVER SMOOTH MOUTH WHITE ASSEMBLED 28-415 MM PP', 'DISC-TOP 28-415', '', ''),
('24TC000850', 'TAPA HONGO ROSCADA PP BLANCO BOCA 28 MM CON LINNER POLYSEAL', 'ROSCADA 28 mm', 160, 4, 1, 1, 1, 0, 6, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/89116369.png', 25, 1, 'MUSHROOM CAP SCREW WHITE PP 28 MM MOUTH WITH LINNER Polyseal', 'Threaded 28 mm', '', ''),
('24TD000100', 'TAPA DISC-TOP ENSAMBLADA X 24-410 MM PP. LISA BLANCA  CUERPO BLANCO-DISCO VERDE C/ANILLO VERDE + FOIL DE TORQUE COD:007-061-174-SAP:81000979                                                ', 'Disc/Top con Anillo 24-410 mm ', 20, 3, 1, 1, 1, 0, 5, '', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/373269976.png', 23, 1, 'DISC-TOP  ENSAMBLADA X 24-410 MM PP. LISA WHITE', 'DISC-TOP / RING 24-410 mm', '', ''),
('24TE000681', 'TAPA ESTRIADA PP BLANCO BOCA 24-410 MM CON LINNER POLYSEAL FALDA MEDIA', 'ESTRIADA', 26, 15, 1, 1, 1, 0, 5, '', 1, 6, 2, '0', 1, '', '', 4, 4, 0, '', 3, '/img/657686579.png', 23, 1, 'MOUTH WHITE STRIPED TOP 24-410 MM PP LINNER Polyseal SKIRT WITH MEDIA', 'RIBBED TOP', '', ''),
('24TF000507', 'TAPA . ESFÃ‰RICA ENSAMBLADA PP AZUL BOCA 28 MM CON LINNER POLYSEAL', 'ESFÃ‰RICA 28 mm  ', 55, 30, 10, 1, 1, 0, 2, '', 1, 6, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/254446261.jpg', 25, 1, 'LID. PP ASSEMBLED BLUE BALL 28 MM MOUTH WITH LINNER Polyseal', 'BALL TOP 28 mm', '', ''),
('24TP000006', 'TAPA POTE TRADICIONAL ENSAMBLADA 2 onz PS BLANCO', 'TAPA POTE 2 onz', 142, 64, 2, 1, 1, 0, 5, '2', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/91433025.png', 52, 12, 'TRADITIONAL POT COVER 2 oz PS WHITE ASSEMBLED', 'JAR POT 2 onz ', '', ''),
('24TP000237', 'TAPA POTE CONVEXO FROSTED 2 onz PP BLANCO CON LINNER CENTAKSEAL', 'CONVEXA 2 ONZ', 138, 60, 1, 1, 1, 0, 5, '2', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/285997421.png', 52, 12, 'POT LID DOME 2 oz PP FROSTED WHITE WITH LINNER CENTAKSEAL', 'CONVEX COVER 2 OZ', '', ''),
('24TP000400', 'TAPA POTE TRADICIONAL ENSAMBLADO 4 onz PS BLANCO (100 GR)', 'TAPA POTE 4 onz', 142, 64, 1, 1, 1, 0, 2, '4', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/231485284.png', 53, 12, 'TRADITIONAL POT COVER ASSEMBLY WHITE PS 4 oz (100 gr)', 'JAR POT 4 onz ', '', ''),
('24TP000510', 'TAPA POTE TRADICIONAL ENSAMBLADA 1 onz PS BLANCO', 'TAPA POTE 1 onz', 142, 64, 3, 1, 1, 0, 6, '1', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/160069866.png', 9, 12, 'TRADITIONAL POT LID 1oz PS WHITE ASS', 'JAR TOP 1 oz', '', ''),
('24TP000600', 'TAPA POTE CONVEXO ENSAMBLADA 1 onz PS BLANCO', 'CONVEXA 1 ONZ', 138, 60, 1, 1, 1, 0, 6, '1', 5, 8, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/579203335.png', 9, 12, 'POT LID DOME WHITE ASSEMBLED 1oz PS', 'CONVEX TOP 1 OZ', '', ''),
('24TS000400', 'TAPA SEGURIDAD ENSAMBLADA PUSH DOWN PP BLANCO BOCA 32 MM SIN LINNER', 'PUSH DWON 32 mm', 153, 71, 1, 1, 1, 0, 6, '', 1, 6, 11, '0', 1, '', '', 1, 1, 0, '', 3, '/img/357976823.png', 31, 1, 'ASSEMBLED TOP SAFETY PUSH DOWN WHITE PP 32 MM MOUTH WITHOUT LINNER', 'PUSH DWON 32 mm', '', ''),
('24TS000500', 'TAPA SEGURIDAD ENSAMBLADA PUSH DOWN PP BLANCO BOCA 38 MM SIN LINNER', 'PUSH DWON 38 mm', 153, 71, 1, 1, 1, 0, 2, '', 1, 6, 10, '0', 1, '', '', 1, 1, 0, '', 3, '/img/271783128.png', 35, 1, 'ASSEMBLED TOP SAFETY PUSH DOWN WHITE PP 38 MM MOUTH WITHOUT LINNER', 'PUSH DWON 38 mm', '', ''),
('24TT000010', 'TAPA TALQUERA ENSAMBLADA HDPE BLANCO BOCA 40 MM Y REJILLA ENSAMBLADA -X 100, 150,300 GR', 'T.TALQUERA 40 mm', 155, 71, 1, 1, 1, 0, 2, '', 1, 1, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/848562347.png', 36, 1, 'TALQUERA ASSEMBLED COVER WHITE HDPE 40 MM MOUTH AND GRILLE ASSEMBLED-X 100, 150,300 GR', 'T.TALQUERA 40 mm', '', ''),
('24TT000100', 'TAPA TALQUERA ENSAMBLADA HDPE BLANCO BOCA 28 MM Y REJILLA', 'T. TALQUERA 28 mm', 155, 71, 2, 1, 1, 0, 1, '', 1, 1, 2, '0', 1, '', '', 1, 1, 0, '', 3, '/img/043192595.png', 25, 1, 'TALQUERA ASSEMBLED COVER WHITE HDPE 28 MM MOUTH AND GRILLE', 'T. TALQUERA 28 mm', '', ''),
('25EE000022', 'BOLILLA ROLL-ON HUECA X 1\\'' PP.NATURAL', 'ESFERA  1 in', 134, 56, 10, 1, 1, 0, 6, 'NA', 1, 6, 6, '0', 1, '', '', 1, 1, 0, '', 1, '/img/929472056.jpg', 9, 12, 'ROLL-ON HOLLOW bolilla X 1 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\''PP.NATURAL', 'SPHERES ROLL-ON 1', '', ''),
('25EE000023', 'BOLILLA ROLL-ON HUECA X 1.4\\'' PP.NATURAL (MOLDING)', 'ESFERAS 1,4 in', 134, 56, 10, 1, 1, 0, 2, '1,4', 1, 6, 4, '0', 1, '', '', 1, 1, 0, '', 1, '/img/180656602.jpg', 10, 12, 'ROLL-ON HOLLOW bolilla X 1.4 \\\\\\\\\\\\\\''PP.NATURAL (MOLDING)', 'ROLL-ON SPHERES 1.4', '', ''),
('25TS000003', 'TAPA SEGURIDAD X 28 MM. PP BLANCO ALUSUD S/D. AQUALOK', 'SEGURIDAD 28 PCO ', 25, 71, 1, 1, 1, 0, 1, '', 3, 6, 4, '0', 1, '', '', 1, 1, 0, '', 3, '/img/644286331.png', 26, 1, 'SAFETY COVER X 28 MM. WHITE PP ALUSUD S / D. Aqualok', 'SAFETY 28 PCO', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoscotizaciones`
--

DROP TABLE IF EXISTS `productoscotizaciones`;
CREATE TABLE IF NOT EXISTS `productoscotizaciones` (
  `prodCot_id` int(5) NOT NULL AUTO_INCREMENT,
  `cotizacion_id` int(5) NOT NULL,
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`prodCot_id`),
  KEY `producto_codigo` (`producto_codigo`),
  KEY `cotizacion_id` (`cotizacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `productoscotizaciones`
--

INSERT INTO `productoscotizaciones` (`prodCot_id`, `cotizacion_id`, `producto_codigo`, `cantidad_producto`) VALUES
(1, 1, '22VS000050', '1 - 5.000'),
(2, 2, '22VS000050', '1 - 5.000'),
(3, 3, '22VS000050', '1 - 5.000'),
(4, 1, '22PX000100', '10.001 - 50.000'),
(5, 2, '22FC000006', '10.001 - 50.000'),
(6, 3, '22FE000011', '10.001 - 50.000'),
(7, 4, '22FC003170', '10.001 - 50.000'),
(8, 5, '21CC000004', '10.001 - 50.000'),
(9, 6, '22FC003170', '1 - 5.000'),
(10, 7, '21CC000009', '1 - 5.000'),
(11, 8, '22FC000006', '1 - 5.000'),
(12, 9, '22FA000011', '1 - 5.000'),
(13, 10, '21TC000902', '1 - 5.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_i`
--

DROP TABLE IF EXISTS `productos_i`;
CREATE TABLE IF NOT EXISTS `productos_i` (
  `producto_codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_descripcion` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `producto_nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `producto_entradas` int(5) NOT NULL,
  `producto_terminado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `producto_anotacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`producto_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

DROP TABLE IF EXISTS `profesiones`;
CREATE TABLE IF NOT EXISTS `profesiones` (
  `profesion_id` int(5) NOT NULL AUTO_INCREMENT,
  `profesion_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `profesion_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`profesion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `profesiones`
--

INSERT INTO `profesiones` (`profesion_id`, `profesion_nombre_e`, `profesion_nombre_i`) VALUES
(1, 'Ingeniero de Sistemas', 'Systems Engineer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

DROP TABLE IF EXISTS `promociones`;
CREATE TABLE IF NOT EXISTS `promociones` (
  `promocion_id` int(5) NOT NULL AUTO_INCREMENT,
  `promocion_titulo_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_descripcion_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_imagen_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_titulo_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_descripcion_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_imagen_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_referencia` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_precio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `promocion_unidades` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `promocion_destacada` int(5) NOT NULL,
  PRIMARY KEY (`promocion_id`),
  KEY `seccion_id` (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`promocion_id`, `promocion_titulo_e`, `promocion_descripcion_e`, `promocion_imagen_e`, `promocion_titulo_i`, `promocion_descripcion_i`, `promocion_imagen_i`, `promocion_referencia`, `promocion_precio`, `promocion_unidades`, `seccion_id`, `promocion_destacada`) VALUES
(6, 'ENVASE FARMACÃ‰UTICO ', '<p>Envase Farma Inyecto soplado Blanco Natural</p>\r\n<p>&nbsp;</p>', '/img/547734496.jpg', 'FARMACEUTICAL BOTTLE', '<p>CRISTAL AND AMBAR X 60ML FARMACEUTICAL BOTTLE...</p>', '/img/655959715.jpg', 'FARMACEUTICA', '0.044', '1-300.000 UNI', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

DROP TABLE IF EXISTS `puntos`;
CREATE TABLE IF NOT EXISTS `puntos` (
  `punto_id` int(5) NOT NULL AUTO_INCREMENT,
  `punto_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_id` int(5) NOT NULL,
  `punto_direccion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `punto_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `punto_pbx` varchar(29) COLLATE utf8_unicode_ci NOT NULL,
  `punto_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `punto_hlv` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `punto_hs` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tipoPunto_id` int(5) NOT NULL,
  `punto_gmap` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `flag_id` int(5) NOT NULL,
  PRIMARY KEY (`punto_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `flag_id` (`flag_id`),
  KEY `ciudad_id` (`ciudad_id`),
  KEY `tipoPunto_id` (`tipoPunto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`punto_id`, `punto_nombre`, `ciudad_id`, `punto_direccion`, `punto_tel`, `punto_pbx`, `punto_email`, `punto_hlv`, `punto_hs`, `tipoPunto_id`, `punto_gmap`, `seccion_id`, `flag_id`) VALUES
(1, ' INTECPLAST S.A.', 9, 'Calle 14 # 6-54 Entrada # 1 Cazuc&aacute; Soacha', '(57) 7799030', '(57) 7799030', 'servicio_cliente@intecplast.com.co', '7:00 am a  5:30 pm', 'No se trabaja los s&aacute;bados', 1, 'https://maps.google.es/maps?f=d&amp;source=s_d&amp;saddr=Calle+14&amp;daddr=&amp;hl=es&amp;geocode=FXEcRgAdCQeU-w&amp;sll=4.589943,-74.175396&amp;sspn=0.075203,0.132093&amp;mra=mr&amp;num=10&amp;ie=UTF8&amp;t=m&amp;ll=4.594801,-74.18495&amp;spn=0.002361,0.004128&amp;output=embed', 7, 13),
(3, 'PUNTO DE VENTA BOGOTA ', 9, 'CRA 69 A # 24-30 BARRIO CARVAJAL ', '(57) 4190042', '', 'puntodeventa@intecplast.com.co', '7:00 am a  5:30 pm', '8:00 am a 12 m', 2, 'http://maps.google.es/maps?source=s_d&f=d&saddr=Calle+14&daddr=&hl=es&geocode=FdAcRgAd2waU-w&sll=4.597472,-74.15823&sspn=0.150405,0.264187&mra=mr&ie=UTF8&ll=4.597472,-74.15823&spn=0.086239,0.226936&z=12&vpsrc=0&oi=map_misc&ct=api_logo&output=embed', 7, 13),
(4, 'PUNTO DE VENTA MEDELLIN ', 7, 'CRA 54 NO. 79 AA SUR 40 BOD Estrella', '(57) (4) 4440159', '', 'gerencia.parco@une.net.co ', '7:00 - 17:30', '8:00 am - 12:00 pm', 2, 'http://maps.google.es/maps?f=d&source=s_d&saddr=6.274423,-75.565596&daddr=medellin&hl=es&geocode=%3BFRUnXwAdn9B--ynb3VJO7yhEjjFyrHCSw9Yvcg&aq=&sll=6.27245,-75.564598&sspn=0.009374,0.016512&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=me&mrsp=0&sz=17&ie=UTF8&ll=6.27245,-75.564598&spn=0.009374,0.016512&t=m&start=0&output=embed', 7, 13),
(5, 'PUNTO DE VENTA CALI ', 8, 'Cra. 38A No 4B - 27 Cali', '(57) 2560677 MOVIL: ', '', 'teaocali@hotmail.com', '7:00 am - 5:30 pm', '8:00 am - 1 :00 pm ', 2, 'http://maps.google.es/maps?f=d&source=s_d&saddr=Cra.+38A+No+4B+-+27+Cali&daddr=Cali+-+Valle+del+Cauca,+Colombia&hl=es&geocode=FUQJNAAde7hw-ylRvuwRKacwjjGPACKcNmUQHw%3BFYwxNAAdEl1w-ykRJ522Q6YwjjH740UnreXeNw&aq=&sll=4.755868,-76.135688&sspn=4.810435,8.453979&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=ls&ie=UTF8&ll=3.420556,-76.522222&spn=0.372783,0.373448&t=m&start=0&output=embed', 7, 13),
(6, 'PUNTO DE VENTA BARRANQUILLA ', 9, 'Via 40 NÂ° 51 - 153 ', 'Movil: 300 2783434 ', '', 'novaromas@enred.com', '7:00 AM - 5:00 PM', '', 2, 'http://maps.google.es/maps?f=d&source=s_d&saddr=10.991202,-74.779859&daddr=Barranquilla+-+Atl%C3%A1ntico,+Colombia&hl=es&geocode=%3BFfJMpwAdDLCK-yk5EdQiUCz0jjHse_RcjXx3Bw&aq=&sll=10.982018,-74.775696&sspn=0.037032,0.066047&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=me&mrsp=0&sz=15&ie=UTF8&ll=10.982018,-74.775696&spn=0.037032,0.066047&t=m&start=0&output=embed', 7, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `seccion_id` int(5) NOT NULL AUTO_INCREMENT,
  `seccion_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_admin_file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`seccion_id`, `seccion_nombre_e`, `seccion_nombre_i`, `seccion_admin_file`) VALUES
(1, 'Acerca de Nosotros', 'About Us', 'acercaDeNosotros'),
(2, 'Mercados', 'Markets', 'mercados'),
(3, 'Ingenieria de P & D', 'Product Engineering and Design', 'ingenieriaProductoDiseno'),
(4, 'Responsabilidad Social', 'Social Responsibility', 'responsabilidadSocial'),
(5, 'Banner Principal', 'Principal Banner', 'bannerPrincipal'),
(6, 'Lanzamientos', 'Releases', 'admLanzamientos'),
(7, 'Puntos de Venta', 'Branches', 'admPuntos'),
(8, 'Banner Catalogo', 'Catalog Banner', 'admBCatalogo'),
(9, 'Slide Clientes', 'Customers Slide', 'admSClientes'),
(10, 'Noticias', 'News', 'admNoticias'),
(11, 'Contactenos', 'Contact Us', 'admContactenos'),
(12, 'Promociones', 'Promotions', 'admPromociones'),
(13, 'Suscriptores', 'Subscribers', 'admSuscriptores'),
(14, 'Trabaje con Nosotros', 'Work With Us', 'admTrabaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublineas`
--

DROP TABLE IF EXISTS `sublineas`;
CREATE TABLE IF NOT EXISTS `sublineas` (
  `sublinea_id` int(5) NOT NULL AUTO_INCREMENT,
  `sublinea_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sublinea_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linea_id` int(5) NOT NULL,
  PRIMARY KEY (`sublinea_id`),
  KEY `linea_id` (`linea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

--
-- Volcado de datos para la tabla `sublineas`
--

INSERT INTO `sublineas` (`sublinea_id`, `sublinea_nombre_e`, `sublinea_nombre_i`, `linea_id`) VALUES
(1, 'Cosm&eacute;ticos ', 'Cosmetics', 1),
(2, 'SM', 'SM', 1),
(3, 'T. Disc-Top  ', 'T. Disc-Top ', 14),
(4, 'T.Hongo ', 'T.Mushrom', 14),
(5, 'T. Flip-Top ', 'Top-FlipT. ', 14),
(6, 'Farmaceutica', 'Pharmaceutics', 1),
(9, 'VS', 'VS', 1),
(12, 'T.Dosificadora ', 'Dosing', 14),
(13, 'Aceites y Salsas', 'Oils y Sauce', 3),
(15, ' T.Estriada', 'Ribbed', 14),
(17, 'Liquido Frenos  ', 'Brake Fluid', 8),
(18, 'Agroquimicos', 'Agrochemical ', 2),
(19, 'Botella Aseo', 'Toilet Bottle', 4),
(20, 'Agua', 'Water    ', 3),
(21, 'T.Conica ', 'Conical T.', 14),
(22, 'Jabon Liquido ', 'Liquid Soap', 1),
(23, 'Botella Licor ', 'Liquor Bottle', 6),
(24, 'Farma ', 'Farma ', 5),
(25, 'Shampoo', 'Shampoo', 1),
(27, 'Pote Cosmetica', 'Jar Cosmetics', 16),
(28, 'T.NES ', 'Tapa NES ', 14),
(30, 'T.Esf&eacute;rica  ', 'Spherical', 14),
(31, 'Anillo ', 'Ring', 14),
(32, 'Roll-on ', 'Roll-on ', 1),
(33, 'Talquera Cil.', 'Cylindrical Talquera', 1),
(34, 'T.Roll-on ', 'Roll-on lids', 14),
(35, 'Farmac&eacute;utico ', 'Pharmacist', 5),
(36, 'Talquera Oval NP', 'NP Oval Talquera', 1),
(37, 'Talquera Estriada   ', 'Fluted Talquera', 1),
(38, 'Oval NP', 'Oval NP', 1),
(39, 'Emulsi&oacute;n ', 'Emulsi&oacute;n ', 7),
(40, 'Nutricional  ', 'Nutrition', 7),
(41, 'Tubo Colapsible ', 'Collapsible Tube', 1),
(42, 'T.Capsula ', 'Capsule  ', 14),
(43, 'T. Estriada Larga', 'Long Fluted Top  ', 14),
(44, 'Garrafa ', 'Decanter', 8),
(45, 'Btll. Cosm&eacute;tica ', 'BH FLAT BOTTLE LINE', 1),
(46, 'Matera ', 'Matera', 9),
(47, 'Pastillero ', 'pill Box', 5),
(48, 'Sap', 'Sap', 1),
(49, 'L&aacute;cteos ', 'Dairy', 3),
(50, 'R. Copa  ', 'Dosing Cup', 5),
(51, 'Antiacido', 'Antacid  ', 5),
(52, 'Removedor ', 'Remover', 1),
(53, 'Alcohol', 'Alcohol', 5),
(54, 'Capsulero', 'Capsule', 5),
(55, 'Iso', 'Iso', 5),
(56, 'Esferas roll-on', 'Balls roll-on', 1),
(57, 'Crema Vaginal', 'Vaginal Cream', 5),
(58, 'R. Alimentos ', 'Food Container ', 3),
(59, 'Sealer Pote', 'Jar Sealer', 16),
(60, 'T.Convexa', 'Convex T.', 14),
(61, 'Efervescente ', 'Effervescent', 5),
(64, 'T.Tradicional', 'Top Traditional ', 14),
(65, 'T.Rejilla ', 'Grid Top', 14),
(66, 'R. Polvos ', 'Compact Powder', 1),
(67, 'Polvos Compactos', 'Compact Powder  ', 14),
(71, 'T.Seguridad ', 'Safety Top', 17),
(72, 'T. Industrial ', 'Industrial Cover', 15),
(75, 'T.Recipiente', 'lid Container', 18),
(76, 'T.Polvos', 'T.Polvos', 14),
(77, 'T.Lisa Corta', 'Walking T.Lisa', 14),
(78, 'T.Lisa Larga', 'Long T.Lisa', 14),
(79, 'Sobretapa', 'Overtop', 14),
(80, 'Subtapa', 'Subcover', 14),
(82, 'T. Lacteos', 'T. Milk', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscritos`
--

DROP TABLE IF EXISTS `suscritos`;
CREATE TABLE IF NOT EXISTS `suscritos` (
  `suscrito_id` int(5) NOT NULL AUTO_INCREMENT,
  `suscrito_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `suscrito_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`suscrito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `suscritos`
--

INSERT INTO `suscritos` (`suscrito_id`, `suscrito_nombre`, `suscrito_email`) VALUES
(1, 'Josu&eacute; Miranda', 'ansistemas@intecplast.com.co'),
(2, 'Alguien', 'alguien@server.net'),
(3, 'Daniel', 'dcvo2004@yahoo.es'),
(4, 'Yenny Barrera', 'ybarrera@intecplast.com.co'),
(5, 'joseph salamanca ', 'disenador2@intecplast.com.co'),
(6, 'alejandro', 'joalesalam@intecplast.com'),
(7, 'Camilo Vel&aacute;squez', 'administrador@intecplast.com.co'),
(8, 'James Garcia', 'james.garcia@imaginamos.com.co'),
(9, 'solangel', 'solangel.perez@imaginamos.com'),
(10, 'pipe s', 'pipesalam@guyyy.com'),
(11, 'marchh', 'oipoi@hdssask.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanos`
--

DROP TABLE IF EXISTS `tamanos`;
CREATE TABLE IF NOT EXISTS `tamanos` (
  `tamano_id` int(5) NOT NULL AUTO_INCREMENT,
  `tamano_nombre_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tamano_nombre_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tamano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tamanos`
--

INSERT INTO `tamanos` (`tamano_id`, `tamano_nombre_e`, `tamano_nombre_i`) VALUES
(1, 'N/A', 'N/A'),
(2, 'Grande', 'Big'),
(3, 'Mediano', 'Medium'),
(4, 'Peque&ntilde;o', 'Small'),
(5, 'Mediana', 'Medium'),
(6, 'Peque&ntilde;a', 'Small'),
(7, 'Largo', 'Long');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeline`
--

DROP TABLE IF EXISTS `timeline`;
CREATE TABLE IF NOT EXISTS `timeline` (
  `timeline_id` int(5) NOT NULL AUTO_INCREMENT,
  `timeline_anio` int(5) NOT NULL,
  `timeline_descripcion_e` text COLLATE utf8_unicode_ci NOT NULL,
  `timeline_imagen_e` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `timeline_descripcion_i` text COLLATE utf8_unicode_ci NOT NULL,
  `timeline_imagen_i` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(5) NOT NULL,
  `flag_id` int(5) NOT NULL,
  PRIMARY KEY (`timeline_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `flag_id` (`flag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `timeline_anio`, `timeline_descripcion_e`, `timeline_imagen_e`, `timeline_descripcion_i`, `timeline_imagen_i`, `seccion_id`, `flag_id`) VALUES
(1, 2000, '<p><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:ES-MX;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\\">Se incorpora el proceso de coextrusion soplado y se avanza en otra l&iacute;nea de negocio: Envases, tapas y productos ensamblados para el sector cosm&eacute;tico.&nbsp; La empresa amplia su tama&ntilde;o en el &aacute;rea de manufactura, manejando 2 plantas de producci&oacute;n y 220 trabajadores.</span></p>', '/img/697891269.jpg', '<p>&nbsp;Incorporating the blown coextrusion process&nbsp;</p>', '/img/59447563.jpg', 1, 3),
(4, 1982, '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><b><u><span lang=\\"ES-MX\\">1982:</span></u></b><span lang=\\"ES-MX\\"> Se constituye INTECPLAST (Inyecci&oacute;n T&eacute;cnica de Pl&aacute;sticos), fundada por dos sonadores, en Bogot&aacute;, Colombia, como una empresa familiar y con capital ciento por ciento colombiano.&nbsp; Los fundadores compran la primera maquina inyectora.&nbsp;&nbsp;<o:p></o:p></span></p>', '/img/699824113.jpg', '<p>INTECPLAST SA, was founded in 1982 to meet the packaging needs of strategic markets.</p>', '/img/259927931.jpg', 1, 3),
(8, 1990, '<p><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:ES-MX;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\\">El principio de servicio integral se consolida, incorporando el proceso de impresi&oacute;n de los envases.&nbsp; Las ventas se multiplican, con el consiguiente aumento de m&aacute;quinas y de trabajadores.&nbsp; 40 personas trabajaban en 3 turnos. Se liquida COLSOPLAST ya que INTECPLAST ya era una empresa consolidada.</span></p>', '/img/014652995.jpg', '<p>&nbsp;The principle of consolidated comprehensive service, incorporating the printing process of packaging.</p>\r\n<div>&nbsp;</div>', '/img/622636814.jpg', 1, 3),
(11, 2003, '<p><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:ES-MX;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\\">INTECPLAST&nbsp; se fortalece en coextrusion-soplado y en el acabado de los envases cosm&eacute;ticos, incorporando la t&eacute;cnica del <i>soft touch</i>.</span><span style=\\"text-align: justify;\\">La empresa consigue certificar su sistema de gesti&oacute;n de calidad bajo la NORMA ISO 9001:2000, con la multinacional SGS.</span><span style=\\"text-align: justify;\\">&nbsp; </span><span style=\\"text-align: justify;\\">En ese momento, 330 empleados laboraban en la empresa.</span></p>\r\n<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span lang=\\"ES-MX\\"><o:p></o:p></span></p>', '/img/740122087.jpg', '<p>&nbsp;INTECPLAST strengthens in coextrusion-blown</p>', '/img/247605343.jpg', 1, 3),
(12, 2008, '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span lang=\\"ES-MX\\">. El proyecto inyecci&oacute;n-soplado HDPE/PP/PVC&nbsp; se hacer realidad con la llegada de las maquina JOMAR &uacute;nicas en su momento en el pa&iacute;s. Se inicia el proyecto CLAD (Centro Log&iacute;stico de Almacenamiento y Despacho) contando con 5.000 Mt2 para la gesti&oacute;n de recibo y almacenamiento de Materias primas y&nbsp; el despacho de todos nuestros productos.<o:p></o:p></span></p>', '/img/579415064.jpg', '<p>&nbsp;For these years the operation is consolidated, with the number of injection equipment.</p>', '/img/128231281.jpg', 1, 3),
(14, 2012, '<p><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:ES-MX;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\\">INTECPLAST es una de las principales empresas en Colombia en cuanto a dise&ntilde;o, fabricaci&oacute;n y comercializaci&oacute;n de envases y tapas pl&aacute;sticas, llegando a los 1.000 clientes nacionales y multinacionales a lo largo de su historia.&nbsp; Es l&iacute;der en el pa&iacute;s en el dise&ntilde;o y fabricaci&oacute;n de moldes para el sector pl&aacute;stico.&nbsp; Aparte de las empresas nacionales, hoy le brinda calidad, servicio e innovaci&oacute;n a 30 multinacionales del sector farmac&eacute;utico y cosm&eacute;tico</span></p>', '/img/737314191.jpg', '<p>\r\n<p>INTECPLAST is one of the leading companies in Colombia in terms of design, manufacturing and marketing of packaging.</p>\r\n<div>&nbsp;</div>\r\n</p>', '/img/096093135.jpg', 1, 3),
(15, 1984, '<p><span style=\\"font-size:10.0pt;line-height:115%;\r\nfont-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-ansi-language:ES-CO;mso-fareast-language:ES-CO;mso-bidi-language:AR-SA\\">Para esta &eacute;poca INTECPLAST ya contaba con cinco inyectoras y adquiri&oacute; tres maquinas alemanas para iniciar con el proceso de extrusi&oacute;n soplado de estaciones m&uacute;ltiples con cabezales para diferentes materiales (PE, PP, PVC), satisfaciendo nuevos mercados en las l&iacute;neas de alimentos y aseo</span></p>', '/img/420328767.jpg', '<p>&nbsp;Beginning with 5 and 3 injection machines for German blowers use different materials (PP. HDPE, PVC)</p>', '/img/098684108.jpg', 1, 3),
(16, 1988, '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span lang=\\"ES-MX\\">COLSOPLAST (compa&ntilde;&iacute;a colombiana de soplado) empieza a darle paso a INTECPLAST, quien empieza a definir su l&iacute;nea principal de negocio al incursionar en la fabricaci&oacute;n del paquete completo: envase y tapa.&nbsp; A las inyectoras se suma la primera maquina de soplado.&nbsp; Se empiezan a dar los primeros pasos en el dise&ntilde;o y fabricaci&oacute;n de moldes, construyendo el primer taller de matricera.<o:p></o:p></span></p>', '/img/037887428.jpg', '<p>It also creates COLSOPLAST (Blown Colombian Company). It penetrates in the container and lid package</p>', '/img/792883666.jpg', 1, 3),
(17, 1992, '<p>Se empiezan a dar los primeros pasos de DISE&Ntilde;O y fabricacion de moldes&nbsp;<span style=\\"\\\\&quot;font-family:\\" new=\\"\\">Para entonces INTECPLAST contaba con 12 inyectoras y 8 sopladoras entre alemanas e italianas, se comenz&oacute; tambi&eacute;n procesos de producci&oacute;n con una maquina de Inyecci&oacute;n Estirado Soplado PET de origen japon&eacute;s.</span><span style=\\"\\\\&quot;font-family:\\" new=\\"\\">&nbsp; </span><span style=\\"\\\\&quot;font-family:\\" new=\\"\\">De esta manera se comenz&oacute; a satisfacer las necesidades del mercado nacional e internacional en las l&iacute;neas farmac&eacute;utica y cosm&eacute;tica</span></p>', '/img/848965117.jpg', '<p>They start to take the first steps and brioche molds DESIGN</p>', '/img/089016313.jpg', 1, 3),
(18, 1994, '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span lang=\\"ES-MX\\">La empresa sigue creciendo y se traslada al parque industrial de Soacha, cerca de la capital colombiana.&nbsp; Se especializa en los diferentes procesos de inyecci&oacute;n y soplado convencional, manejando materias primas varias: PVC, polietileno, polipropileno, entre otros.&nbsp; Ten&iacute;a 100 trabajadores.<o:p></o:p></span></p>', '/img/496097569.jpg', '<p>&nbsp;The company continues to grow and moves to the industrial park Soacha, near the Colombian capital</p>', '/img/883735281.jpg', 1, 3),
(19, 1998, '<p class=\\"MsoNormal\\" style=\\"text-align:justify\\"><span lang=\\"ES-MX\\">INTECPLAST experimenta con el PET para la fabricaci&oacute;n de productos farmac&eacute;uticos que, en aquella &eacute;poca, eran envases fabricados en vidrio.&nbsp; Con esta innovaci&oacute;n, INTECPLAST fue una de las empresas pioneras en Colombia en la fabricaci&oacute;n de envases farmac&eacute;uticos en pl&aacute;stico por el proceso de inyecci&oacute;n-estirado-soplado marca AOKI.&nbsp; La empresa creci&oacute; en ventas, en capacidad instalada, en procesos y en mano de obra.&nbsp; 170 personas trabajaban al final de este periodo.<o:p></o:p></span></p>', '/img/488071378.jpg', '<p>&nbsp;INTECPLAST experiments with PET for the manufacture of pharmaceutical products, which at that time were made â€‹â€‹of glass containers</p>', '/img/340086333.jpg', 1, 3),
(20, 2010, '<p><b><u><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-ansi-language:ES-MX;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\\">:</span></u></b><span lang=\\"ES-MX\\" style=\\"font-size:11.0pt;line-height:115%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-ansi-language:ES-MX;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\\"> INTECPLAST fortalece su operaci&oacute;n aumentando el n&uacute;mero de equipos multicavidades por extrusi&oacute;n e inyecci&oacute;n-soplado HDPE/PP/PVC&nbsp; incorporando a su ya amplio portafolio de productos, servicios y clientes, la fabricaci&oacute;n de envases roll &ndash; on.</span></p>', '/img/364618331.jpg', '<p>&nbsp;&nbsp;&nbsp;INTECPLAST fortalece su operaci&oacute;n aumentando el n&uacute;mero de equipos multicavidades por extrusion.</p>', '/img/167567265.jpg', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

DROP TABLE IF EXISTS `tipoidentificacion`;
CREATE TABLE IF NOT EXISTS `tipoidentificacion` (
  `tipoid_cod` int(5) NOT NULL AUTO_INCREMENT,
  `tipoid_nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipoid_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`tipoid_cod`, `tipoid_nombre`) VALUES
(3, 'NIT'),
(4, 'CC'),
(5, 'CE'),
(11, 'RUT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopunto`
--

DROP TABLE IF EXISTS `tipopunto`;
CREATE TABLE IF NOT EXISTS `tipopunto` (
  `tipoPunto_id` int(5) NOT NULL AUTO_INCREMENT,
  `tipoPunto_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipoPunto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipopunto`
--

INSERT INTO `tipopunto` (`tipoPunto_id`, `tipoPunto_nombre`) VALUES
(1, 'Principal'),
(2, 'Sucursal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

DROP TABLE IF EXISTS `unidades`;
CREATE TABLE IF NOT EXISTS `unidades` (
  `unidad_id` int(5) NOT NULL AUTO_INCREMENT,
  `unidad_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`unidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`unidad_id`, `unidad_nombre`) VALUES
(1, 'N/A'),
(2, 'g'),
(3, 'ml'),
(5, 'onz'),
(6, 'lb'),
(7, 'in');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`flag_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_3` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_4` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`flag_id`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`cliente_idioma`) REFERENCES `idiomas` (`idioma_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD CONSTRAINT `convocatorias_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `convocatorias_ibfk_2` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`flag_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`estado_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizaciones_ibfk_3` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `imagenes_ibfk_2` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`flag_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `messaging_admin`
--
ALTER TABLE `messaging_admin`
  ADD CONSTRAINT `messaging_admin_ibfk_1` FOREIGN KEY (`group`) REFERENCES `messaging_groups` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`capacidad_id`) REFERENCES `capacidades` (`capacidad_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`boca_id`) REFERENCES `bocas` (`boca_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`seccion_id`) ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
