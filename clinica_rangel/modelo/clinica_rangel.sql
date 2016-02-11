-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2013 a las 20:14:41
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clinica_rangel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_acordeon_lugar`
--

CREATE TABLE IF NOT EXISTS `cms_acordeon_lugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(49) NOT NULL,
  `texto` varchar(200) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_acordeon_lugar_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_acordeon_lugar`
--

INSERT INTO `cms_acordeon_lugar` (`id`, `titulo`, `texto`, `link`, `imagen_id`) VALUES
(1, 'Renacimiento', 'Libérate de las cadenas del sufrimiento y renace a la armonía, la felicidad y la prosperidad.', 'renacer', 123),
(2, 'Desintoxicación', 'Purifica tu cuerpo y limpia hígado y colon con expulsión de cálculos biliares, sin cirugía.', 'desintoxicar', 124),
(3, 'Adelgazamiento Intensivo', 'Escápate y adelgaza aceleradamente por inmersión, de forma segura y natural, mientras desintoxicas tu cuerpo y tu mente.', 'adelgazar', 125),
(4, 'tutulo', 'hola mundop', '#', 152);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_api_oauth`
--

CREATE TABLE IF NOT EXISTS `cms_api_oauth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `strategy` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `api_secret` varchar(255) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `active_oauth` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_asi_facil`
--

CREATE TABLE IF NOT EXISTS `cms_asi_facil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) NOT NULL,
  `texto` varchar(52) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_asi_facil_imagen1_idx` (`imagen_id`),
  KEY `fk_asi_facil_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cms_asi_facil`
--

INSERT INTO `cms_asi_facil` (`id`, `titulo`, `texto`, `link`, `imagen_id`, `pagina_id`) VALUES
(1, 'PERSONALIZAMOS TUS MENÚS', 'PERSONALIZAMOS TUS MENÚS', 'http://holamundo.com', 93, 5),
(2, 'ELIGES EL LUGAR DE ENTREGA', 'ELIGES EL LUGAR DE ENTREGA', '#', 94, 5),
(3, 'RECIBES TU COMIDA DIARIAMENTE', 'RECIBES TU COMIDA DIARIAMENTE', '#', 95, 5),
(4, 'SOLO CALIENTAS Y DISFRUTAS', 'SOLO CALIENTAS Y DISFRUTAS', '#', 96, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_barner`
--

CREATE TABLE IF NOT EXISTS `cms_barner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_id` int(11) NOT NULL,
  `imagen1_id` int(11) DEFAULT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_trtamiento_imagen1_idx` (`imagen_id`),
  KEY `fk_barner_trtamiento_pagina1_idx` (`pagina_id`),
  KEY `imagen1_id` (`imagen1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cms_barner`
--

INSERT INTO `cms_barner` (`id`, `imagen_id`, `imagen1_id`, `pagina_id`) VALUES
(1, 72, 73, 4),
(2, 99, 100, 6),
(3, 101, 102, 5),
(4, 107, 108, 7),
(5, 113, 114, 2),
(6, 119, 120, 3),
(7, 130, 131, 9),
(8, 153, 154, 10),
(9, 155, 156, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_barner_principal`
--

CREATE TABLE IF NOT EXISTS `cms_barner_principal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(27) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL COMMENT '1054 px x 400 px',
  `imagen1_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barner_cms_imagen1_idx` (`imagen_id`),
  KEY `imagen1_id` (`imagen1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `cms_barner_principal`
--

INSERT INTO `cms_barner_principal` (`id`, `titulo`, `link`, `imagen_id`, `imagen1_id`) VALUES
(29, '¡CÁMBIATE el chip!', 'tratamiento', 158, 51),
(30, 'Alimentación inteligente', 'alimentacion', 52, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_beneficio`
--

CREATE TABLE IF NOT EXISTS `cms_beneficio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(89) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beneficio_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `cms_beneficio`
--

INSERT INTO `cms_beneficio` (`id`, `texto`, `pagina_id`) VALUES
(1, 'Adelgazas más rápido, desintoxicando tu cuerpo y activando tu metabolismo.', 9),
(2, 'Aumentas tu energía y disminuyes niveles de colesterol, insulina y glicemia.', 9),
(3, 'Previenes enfermedades cardiovasculares y el síndrome metabólico.', 9),
(4, 'Recibes herramientas para mantener la motivación y llegar hasta tu meta.', 9),
(5, 'Desintoxica y activa las funciones del hígado.', 10),
(6, 'Mejora la digestión y el funcionamiento del colon.', 10),
(7, 'Previene infartos y trombosis.', 10),
(8, 'Ayuda a prevenir el cáncer y las enfermedades crónicas.', 10),
(9, 'Alivia las enfermedades osteoarticulares.', 10),
(10, 'Mejora la lucidez mental y la memoria.', 10),
(11, 'Aumenta los niveles de energía sexual.', 10),
(13, 'Puedes sanar tu pasado, comprendiendo y perdonando a quienes te han hecho daño.', 11),
(14, 'Puedes mejorar todas tus relaciones, porque cuando tú cambias, todo tu mundo también lo h', 11),
(15, 'Puedes contribuir a sanar tus enfermedades al liberarte de la emoción negativa que las or', 11),
(17, 'Disminuye la irritabilidad y la impaciencia.', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contactenos`
--

CREATE TABLE IF NOT EXISTS `cms_contactenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(588) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contactenos_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contactenos`
--

INSERT INTO `cms_contactenos` (`id`, `texto`, `imagen_id`) VALUES
(1, 'Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now,', 151);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contacto`
--

CREATE TABLE IF NOT EXISTS `cms_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(28) DEFAULT NULL,
  `edificio` varchar(28) DEFAULT NULL,
  `barrio` varchar(23) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `telefono` varchar(18) DEFAULT NULL,
  `movil` varchar(18) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contacto`
--

INSERT INTO `cms_contacto` (`id`, `direccion`, `edificio`, `barrio`, `ciudad`, `telefono`, `movil`, `email`) VALUES
(1, 'Calle 12 No. 34 - 56 of. 789', 'Edificio Colpatria', 'Barrio London Country', 'Bogotá - Colombia', '+ 57 (1) 611 4050', '+ 57 320 480 5716', 'info@clinicarangelpereira.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contenedor`
--

CREATE TABLE IF NOT EXISTS `cms_contenedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(55) NOT NULL,
  `texto` text,
  `imagen_id` int(11) NOT NULL COMMENT '382 x 200',
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pasos_imagen1_idx` (`imagen_id`),
  KEY `fk_contenedor_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cms_contenedor`
--

INSERT INTO `cms_contenedor` (`id`, `titulo`, `texto`, `imagen_id`, `pagina_id`) VALUES
(1, 'Tienes acompañamiento médico total.', '<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n\r\n<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n\r\n<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n\r\n<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n', 60, 1),
(2, 'Alcanzas tus metas de salud, peso y talla.', '<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n', 62, 1),
(3, 'Es fácil, es efectivo.', '<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n', 65, 1),
(4, 'Cambias tu mente, cambias tu cuerpo.', '<p>Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Reprogramamos tu mente y tu metabolismo para llegar.</p>\r\n', 66, 1),
(5, 'Reprograma tus hábitos', '<p>Cambias tus viejos h&aacute;bitos por unos nuevos, saludables, aprendes a planear y manejar tus comidas de forma inteligente y a disfrutar antojos y tu vida social sin subir de peso, a&uacute;n en vacaciones. Incluso, si disfrutas cocinar, te ense&ntilde;amos a hacerlo bien.</p>\r\n', 79, 4),
(6, 'Desbloquéate', '<p>Partiendo de un diagn&oacute;stico m&eacute;dico profundo, identificamos y tratamos efectivamente los bloqueos fisiol&oacute;gicos, mentales y emocionales que te han llevado al sobrepeso y te han hecho tan dif&iacute;cil adelgazar, hasta ahora.</p>\r\n\r\n<p><a href="alimentacion">+ Conoce m&aacute;s acerca de la Alimentaci&oacute;n Inteligente.</a></p>\r\n', 84, 4),
(7, 'El ', 'En la BGV no usamos cirugías, ni medicamentos. En una sesión, en donde te encuentras perfectamente consciente de tus facultades físicas y mentales, realizamos la programación mental, grupal o individual para que inicie el efecto terapéutico. Requiere evaluación previa para determinar si este tratamiento es para tí.\r\n', 103, 6),
(8, 'Reducción de medidas', '¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar. ¿Cuáles son los tuyos?', 115, 2),
(9, 'Rejuvenecimiento', '¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar. ¿Cuáles son los tuyos?', 122, 3),
(10, '¿Qué es Naturaleza Real?', 'Naturaleza Real es la sede campestre de la Clínica Rangel Pereira, ubicada frente al embalse del Neusa a solo una hora de Bogotá, un lugar único rodeado de vegetación silvestre, cascadas, puentes colgantes y con más de un kilómetro de senderos ecológicos privados y con un montón de cosas que ya te iremos contando por el camino mientras terminamos los textos del site.', 127, 8),
(11, 'Adelgazamiento intensivo', 'Elije entre nuestros planes de inmersión o exible, para darle vacaciones a tu cuerpo, aislarte de todo lo que te produce ansiedad y disfrutar de un paraíso en medio de la naturaleza con el programa perfecto para lograr adelgazar rápidamente, como respuesta a una limpieza y puricación del cuerpo y la mente, en cuestión de días, ¡sin medicamentos!', 132, 9),
(12, 'Todo incluido... especialmente amigos', 'Con FitCamp recibes todo lo que necesitas para adelgazar rápidamente, ya sea como impulso para continuar perdiendo peso, para una fecha especial o para bajar esos kilos finales y llegar a tu meta. Por esto, tu programa incluye un modelo nutricional especial, acompañamiento médico 24 horas, sesiones terapéuticas, masajes y muchas otras actividades, en donde compartes con personas que te entienden en todo momento.', 133, 9),
(13, '¿Por qué desintoxicar el hígado?', 'El hígado regula la mayoría de las funciones metabólicas y al estar congestionado por exceso de toxinas, ocasiona cálculos biliares que impiden su correcto desempeño, inamando el organismo, afectando la digestión, aumentando el riesgo de infartos y trombosis y debilitando el sistema inmune, así que ¿cuánto vale tu hígado sano?', 137, 10),
(14, '¿Cómo se realiza?', 'Partiendo de una preparación previa del organismo, la Detox Total se realiza en un fin de semana en nuestra sede campestre a través de diferentes técnicas, incluidas limpiezas intestinales y la liberación de emociones negativas manejadas por el hígado. Como resultado, se genera una expulsión de cálculos biliares natural y una sensación inmediata de bienestar y liviandad.', 138, 10),
(15, 'La Clínica', '¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.', 149, 12),
(16, 'Los expertos', '¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.', 150, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contenedor_alimentacion`
--

CREATE TABLE IF NOT EXISTS `cms_contenedor_alimentacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(34) NOT NULL,
  `subtiulo` varchar(22) DEFAULT NULL,
  `texto` varchar(550) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contenedor_alimentacion_imagen1_idx` (`imagen_id`),
  KEY `fk_contenedor_alimentacion_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contenedor_alimentacion`
--

INSERT INTO `cms_contenedor_alimentacion` (`id`, `titulo`, `subtiulo`, `texto`, `imagen_id`, `pagina_id`) VALUES
(1, 'ALIMENTACIÓN INTELIGENTE', 'TERAPÉUTICA', '<p>Act&uacute;a como una verdadera medicina nutricional, indispensable para mejorar condiciones espec&iacute;cas de salud, prevenir el riesgo cardiovascular, manejo de diabetes e hipertensi&oacute;n e incluso tratamientos de enfermedades cr&oacute;nicas y en post quir&uacute;rgicos. Tambi&eacute;n es ideal en pre y post parto para prevenir eclampsia, sobrepeso y alteraciones est&eacute;ticas. Puede combinarse con la l&iacute;nea adelgazante. Disfr&uacute;tala tambi&eacute;n en versi&oacute;n vegetariana.</p>\r\n', 91, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contenedor_renacimiento`
--

CREATE TABLE IF NOT EXISTS `cms_contenedor_renacimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_parrafo1` varchar(36) DEFAULT NULL,
  `titulo_parrafo2` varchar(36) DEFAULT NULL,
  `parrafo1` varchar(530) DEFAULT NULL,
  `parrafo2` varchar(530) DEFAULT NULL,
  `pagina_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contenedor_renacimiento_pagina1_idx` (`pagina_id`),
  KEY `fk_contenedor_renacimiento_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_contenedor_renacimiento`
--

INSERT INTO `cms_contenedor_renacimiento` (`id`, `titulo_parrafo1`, `titulo_parrafo2`, `parrafo1`, `parrafo2`, `pagina_id`, `imagen_id`) VALUES
(1, 'Renacimiento y libertad emocional', '¿Cómo se realiza?', 'Libérate de las cadenas del sufrimiento, el miedo y la culpa de vivencias pasadas que afectan tu presente y tu futuro. Aprende a disfrutar la vida, eliminando los sentimientos que no te sirven y aprendiendo a aceptar con serenidad las cosas que no puedes cambiar. Este es un seminario terapéutico para renacer a la felicidad y la armonía.', 'Es un seminario de 2 días en nuestra sede campestre, en donde por medio de la respiración circular vas a tener acceso a memorias y patrones impactantes del pasado, para liberarte de ellos, sanando las experiencias y la relación con las personas involucradas. Es realmente un renacimiento a una nueva vida, diferente y plena de alegría, amor y prosperidad.', 11, 143);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_contenedor_testimonio`
--

CREATE TABLE IF NOT EXISTS `cms_contenedor_testimonio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(44) NOT NULL,
  `texto` varchar(360) NOT NULL,
  `nombre` varchar(41) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contenedor_testimonio_pagina1_idx` (`pagina_id`),
  KEY `fk_contenedor_testimonio_imagen1_idx` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_contenedor_testimonio`
--

INSERT INTO `cms_contenedor_testimonio` (`id`, `titulo`, `texto`, `nombre`, `pagina_id`, `imagen_id`) VALUES
(1, 'Perdí 14 Kg.', 'En la BGV no usamos cirugías, ni medicamentos. En una sesión, en donde te encuentras perfectamente consciente de tus facultades físicas y mentales, realizamos la programación mental, grupal o individual para que inicie el efecto terapéutico. Requiere evaluación previa para determinar si este tratamiento es para tí.', 'Zarai', 7, 110),
(2, 'Perdí 14 Kg.', 'En la BGV no usamos cirugías, ni medicamentos. En una sesión, en donde te encuentras perfectamente consciente de tus facultades físicas y mentales, realizamos la programación mental, grupal o individual para que inicie el efecto terapéutico. Requiere evaluación previa para determinar si este tratamiento es para tí.', 'Yolanda', 7, 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_departamento`
--

CREATE TABLE IF NOT EXISTS `cms_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `cms_departamento`
--

INSERT INTO `cms_departamento` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_destacado`
--

CREATE TABLE IF NOT EXISTS `cms_destacado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(33) NOT NULL,
  `texto` varchar(117) DEFAULT NULL,
  `link` varchar(355) DEFAULT NULL,
  `imagen_id` int(11) NOT NULL COMMENT '288 x 130',
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_destacado_imagen1_idx` (`imagen_id`),
  KEY `fk_destacado_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `cms_destacado`
--

INSERT INTO `cms_destacado` (`id`, `titulo`, `texto`, `link`, `imagen_id`, `pagina_id`) VALUES
(1, 'PLASMA', '¿Sabías que puedes rejuvenecer con sustancias que produce tu organismo?.', '#', 55, 1),
(2, 'FIT CAMP', 'Escápate una semana y adelgaza aceleradamente en nuestra sede campestre.', '#', 56, 1),
(3, 'PROMOCIÓN DEL MES', 'Escápte una semana, dale unas vacaciones a tu cuerpo y adelgaza aceleradamente.\r\n', '#', 76, 4),
(4, 'GRASA LOCALIZADA', 'Escápte una semana, dale unas vacaciones a tu cuerpo y adelgaza aceleradamente.\r\n', '#', 77, 4),
(5, 'ALIMENTACIÓN INTELIGENTE', '<p>Adelgaza, mejora tu salud o simplemente cuida tu ?gura comiendo lo que tanto te gusta, a domicilio.</p>\r\n', '', 104, 6),
(6, '¡CÁMBIATE EL CHIP!', 'Reduce tu capacidad de comer hasta un 50%, sin cirugías, ni medicamentos, con hipnosis clínica.', '#', 106, 6),
(7, 'PLANES EMPRESAS', 'Adelgaza, mejora tu salud o simplemente cuida tu ?gura comiendo lo que tanto te gusta, a domicilio.', '#', 112, 7),
(8, 'SENOS PERFECTOS', 'Adelgaza, mejora tu salud o simplemente cuida tu ?gura comiendo lo que tanto te gusta, a domicilio.', '#', 116, 2),
(9, 'CERO FLACIDEZ', 'Reduce tu capacidad de comer hasta un 50%, sin cirugías, ni medicamentos, con hipnosis clínica.', '#', 117, 2),
(10, 'PLASMA', 'Escápte una semana y dale unas vacaciones a tu cuerpo mientras adelgazas aceleradamente.', '#', 118, 2),
(11, 'SENOS PERFECTOS', 'Adelgaza, mejora tu salud o simplemente cuida tu ?gura comiendo lo que tanto te gusta, a domicilio.', '#', 121, 3),
(12, 'FIT CAMP', 'Adelgaza, mejora tu salud o simplemente cuida tu ?gura comiendo lo que tanto te gusta, a domicilio.', '#', 128, 8),
(13, 'Galeria', 'Recorre la naturaleza', '#', 134, 9),
(14, 'Renacimiento', 'si volvieras a nace,¿Qué cambiarías?', '#', 135, 9),
(15, 'Video de Naturaleza Real', '', '#', 136, 9),
(16, 'FIT CAMP', 'Adelgaza aceleradamente por inmer', '#', 139, 10),
(17, 'GALERÍA', 'Recorre Naturaleza Real en imágenes.', '#', 140, 10),
(18, 'RENACIMIENTO', 'Si volvieras a nacer, ¿qué cambiarías?', '', 141, 10),
(19, 'FIT CAMP', '<p>Adelgaza aceleradamente por inmersi&oacute;n.</p>\r\n', '#', 144, 11),
(20, 'GALERÍA', '<p>Recorre Naturaleza Real en im&aacute;genes.</p>\r\n', '#', 145, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_dra_rosalinda`
--

CREATE TABLE IF NOT EXISTS `cms_dra_rosalinda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(34) NOT NULL,
  `descripcion` varchar(221) NOT NULL,
  `titulo_texto` varchar(41) NOT NULL,
  `texto` varchar(995) NOT NULL,
  `titulo_link` varchar(93) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `pagina_id` int(11) NOT NULL,
  `imagen_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dra_rosalinda_pagina1_idx` (`pagina_id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_dra_rosalinda`
--

INSERT INTO `cms_dra_rosalinda` (`id`, `titulo`, `descripcion`, `titulo_texto`, `texto`, `titulo_link`, `link`, `pagina_id`, `imagen_id`) VALUES
(1, 'Doctora Rosalinda', 'Médica Cirujana, especialista en Endocrinología. Directora Científica de la Clínica Rangel Pereira. Master en Programación Neuro Lingüística e Hipnosis Clínica. Creadora del método de Programación Neuro Endocrina.', 'Cuando cambias tu mente, todo cambia', '¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.\r\n\r\n¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.\r\n\r\n¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.', 'No te pierdas a la doctora Rosalinda en nuestro canal de youtube todos los jueves a las 8 pm.', 'http://www.youtube.com/', 12, 148);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_groups`
--

INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios'),
(4, 'cliente', 'Cliente'),
(5, 'proveedor', 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_groups_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_groups_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `permission_id` int(11) NOT NULL,
  `view` tinyint(1) DEFAULT '0',
  `create` tinyint(1) DEFAULT '0',
  `update` tinyint(1) DEFAULT '0',
  `delete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_users_permissions_cms_permissions1_idx` (`permission_id`),
  KEY `fk_cms_groups_permissions_cms_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cms_groups_permissions`
--

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 0, 0, 0),
(6, 1, 2, 1, 0, 0, 0),
(7, 2, 1, 0, 0, 0, 0),
(8, 2, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen`
--

CREATE TABLE IF NOT EXISTS `cms_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=159 ;

--
-- Volcado de datos para la tabla `cms_imagen`
--

INSERT INTO `cms_imagen` (`id`, `path`, `name`) VALUES
(50, './uploads/0009c19a9079036f15672489083c783d.png', NULL),
(51, './uploads/61ddbd4540e188299630f1f2ea8f4f83.png', NULL),
(52, './uploads/e2de30ee582c83fce717aa6c7d4b7ceb.png', NULL),
(53, './uploads/cb24c703d056f5d515777ac76786dc70.png', NULL),
(55, './uploads/33a45a4d9020eab06ac0731422c0e907.jpg', NULL),
(56, './uploads/ad0c94768f2a139f8bf3a5076ea1ba84.jpg', NULL),
(59, './uploads/1e69798bbbb0f7b3f089621f8e3647a7.png', NULL),
(60, './uploads/4b2ec0b570110b9eecfa888958a7debd.jpg', NULL),
(62, './uploads/60b165bae2024407bec9bc6246b68659.jpg', NULL),
(65, './uploads/6a861887d265060040ccf2f0249f24bc.jpg', NULL),
(66, './uploads/ac7cd1bcec6e499281c4e76267854c9f.jpg', NULL),
(67, './uploads/f1ade3c292d7404a532fe6d7ce00c9c2.jpg', NULL),
(72, './uploads/77a89b0b0bab7bfd5fd1fcc6435d3768.png', NULL),
(73, './uploads/d827537dc891b5feb2e7e62b1ebbebf6.png', NULL),
(74, './uploads/254e29b720e263627c76026c3a986716.jpg', NULL),
(76, './uploads/549c93bae5af07ced800b047d9fb42d0.jpg', NULL),
(77, './uploads/549d4593dade34d68bb7b8b3c9b2338f.jpg', NULL),
(79, './uploads/bf8dc0ca91dbef0847a3c72537ba0bd1.jpg', NULL),
(84, './uploads/b3390a0cc1a824387149b36e7e951446.jpg', NULL),
(85, './uploads/98b205b5e197550f04792a3bfce3fe1a.jpg', NULL),
(86, './uploads/d330e1deecdf926057fbf234d706b8e4.png', NULL),
(87, './uploads/f772ac4cc9262e2971aa6979a124eb13.png', NULL),
(91, './uploads/1c4449a1968cea1d72caf799c1006a43.png', NULL),
(93, './uploads/43c62393e343ed926a7582972900b2a2.png', NULL),
(94, './uploads/6f40f47d557e3d7e55902af0c9811216.png', NULL),
(95, './uploads/a2fd874fe5ae822193dd748178ac3420.png', NULL),
(96, './uploads/0aec475c70f32f6baec029f0761b2540.png', NULL),
(97, './uploads/26af239d606df653f8cae50dce24c439.png', NULL),
(98, './uploads/9e94d18957b2a0e3e16d64f0b914e4e4.png', NULL),
(99, './uploads/29fb2ad3ad93062d1a46e62b7aead39c.png', NULL),
(100, './uploads/5dbc7ef9928c85846969e11b005a822c.png', NULL),
(101, './uploads/2e38b2d6f82b6e79130d46a7f4aada50.png', NULL),
(102, './uploads/1be1cb0c0efe392fb2f7ae57732b4553.png', NULL),
(103, './uploads/37e5968ce9fdd540aaeb6468b1a84e1a.jpg', NULL),
(104, './uploads/88ae5431e0a08552a4813d00560ffdcb.jpg', NULL),
(106, './uploads/2049e32d8f24bc6b6fdd055f59563e8b.jpg', NULL),
(107, './uploads/cb02505b08b4ed54afd26b9c99f1035f.png', NULL),
(108, './uploads/2794c4c776ff25589783b4125c5ccf05.png', NULL),
(110, './uploads/bcf779cdf5f2e0a64ff8a1fa2968ad20.png', NULL),
(111, './uploads/92da80f1ccc4d24fbbc9d4bccf924004.png', NULL),
(112, './uploads/878e156bece88206c9ec81dbe718c973.jpg', NULL),
(113, './uploads/97b5571d275782620ba97a0a2455988f.png', NULL),
(114, './uploads/d771490021a806f671a7704e1414fbc3.png', NULL),
(115, './uploads/028dff99543831f9be820521a821cf27.jpg', NULL),
(116, './uploads/8c1a65ec35f86162f4cf14ef7a571581.jpg', NULL),
(117, './uploads/827b7fd06bf2046c405de79e4ea136b9.jpg', NULL),
(118, './uploads/61d4b37200182e743feccd2ac1c86c02.jpg', NULL),
(119, './uploads/4f4c781c453546cfcfc60becb66f710b.png', NULL),
(120, './uploads/a93ba6eea13598dbaa2d60f918494c07.png', NULL),
(121, './uploads/92e504a1c3e8a85ea8ba40e548d42946.jpg', NULL),
(122, './uploads/5f3107aa9586ded9ee127101ca7da58a.jpg', NULL),
(123, './uploads/dc30fdcb3de775d0e54739c6b30e0ad2.jpg', NULL),
(124, './uploads/935276270550f25f4d1aaacabbd18a22.jpg', NULL),
(125, './uploads/a74c362e43061e9a6c00426a1e87fc63.jpg', NULL),
(126, './uploads/cc057df1e11d793a4a3d7ec7273c723f.jpg', NULL),
(127, './uploads/a998a06024062cd9c19a03df3148ead1.png', NULL),
(128, './uploads/c10d133b8f110b4ca6c47b2e0bf5d039.jpg', NULL),
(129, './uploads/ec6471891df854ab2b7669df8efe189d.jpg', NULL),
(130, './uploads/0969071ffe3cc4e077d361afcf070944.png', NULL),
(131, './uploads/f6b2da5aa6186c875ea837c0a8c9c1c4.png', NULL),
(132, './uploads/247ec04274c6cc9da189fc905fc3d0f8.jpg', NULL),
(133, './uploads/e85c860c18bfe0b5b4a25a5dbbc31b56.jpg', NULL),
(134, './uploads/66379401c71779d45b0f28448612e473.jpg', NULL),
(135, './uploads/b400589bc055d4f44dd615b5c5e40ef4.jpg', NULL),
(136, './uploads/697ee4a12cf3f50d4f15f3799f4b537e.jpg', NULL),
(137, './uploads/d7f98f65635af14f7e135c7b4af96c33.jpg', NULL),
(138, './uploads/95c5e431d8a3cf5a52fcf972f934d9a6.jpg', NULL),
(139, './uploads/69a9a0bf1f234a8d4f671c562eb90fa0.jpg', NULL),
(140, './uploads/1986c6a4e45842399bcbcc9a2f5910be.jpg', NULL),
(141, './uploads/b0658972f98fbb11c559b4909cea5b2c.jpg', NULL),
(143, './uploads/192ce7edf7a79065e3ce0e46c72e84aa.png', NULL),
(144, './uploads/132f8759cfec0a2a4e146995d516909e.jpg', NULL),
(145, './uploads/4f05d1fd40ed11552f6a39ce0f60d739.jpg', NULL),
(146, './uploads/a996eb87717e164f5b89544df395e5ff.jpg', NULL),
(147, './uploads/bc67ca2411e9fb664a79164c0ee3e3b4.jpg', NULL),
(148, './uploads/2ebf6c17b7353692de819c530bdbde79.png', NULL),
(149, './uploads/5a9d94dbee0c784747580efb05cce94a.jpg', NULL),
(150, './uploads/003de6ce5f5eda250d38c12551c0a474.jpg', NULL),
(151, './uploads/3d035439557ac1b54edfc05980d84d60.jpg', NULL),
(152, './uploads/99b9bd4cdd4f6cb14895666ac3bd19a5.jpg', NULL),
(153, './uploads/45e21b512d15b22578072d93560e40c3.jpg', NULL),
(154, './uploads/25feb9f9679d2ae5749f13b490c9bbd8.jpg', NULL),
(155, './uploads/ebdaa7e072fa5e600d1de6e19cb9f562.jpg', NULL),
(156, './uploads/de6f465aac8b059700e29ae93b3e6856.png', NULL),
(157, './uploads/cbd74799c23a32fef4e427d32d5d9e7e.jpg', NULL),
(158, './uploads/c4bb51e1dfd03b1f9d233c3176927f71.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_imagen_beneficio`
--

CREATE TABLE IF NOT EXISTS `cms_imagen_beneficio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagen_beneficio_imagen1_idx` (`imagen_id`),
  KEY `fk_imagen_beneficio_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_imagen_beneficio`
--

INSERT INTO `cms_imagen_beneficio` (`id`, `imagen_id`, `pagina_id`) VALUES
(1, 147, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_login_attempts`
--

CREATE TABLE IF NOT EXISTS `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menu`
--

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_short` varchar(20) DEFAULT NULL,
  `url` text,
  `content` text,
  `image` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_oauth_config`
--

CREATE TABLE IF NOT EXISTS `cms_oauth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_pagina`
--

CREATE TABLE IF NOT EXISTS `cms_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cms_pagina`
--

INSERT INTO `cms_pagina` (`id`, `titulo`) VALUES
(1, 'home'),
(2, 'diseno_corporal'),
(3, 'tratamientos_faciales'),
(4, 'el_tratamiento'),
(5, 'tu_alimentacion'),
(6, 'banda_gastrica'),
(7, 'testimonio'),
(8, 'lugar'),
(9, 'adelgazamiento'),
(10, 'desintoxicacion'),
(11, 'renacimiento'),
(12, 'dra_rosalinda'),
(13, 'preguntas_frecuentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `type` enum('module','function','component') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cms_permissions`
--

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_preguntas_frecuentes`
--

CREATE TABLE IF NOT EXISTS `cms_preguntas_frecuentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(92) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cms_preguntas_frecuentes`
--

INSERT INTO `cms_preguntas_frecuentes` (`id`, `pregunta`, `texto`) VALUES
(1, 'Pregunta Una Frecuente HOla mundo Haoajsjsjss h hhsd', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n'),
(2, 'Pregunta', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n'),
(3, 'Pregunta', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n'),
(4, 'Pregunta', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n'),
(5, 'Pregunta', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n'),
(6, 'Pregunta', '<p>Since coming to PFC Ive experienced great results. So far on my journey, I&rsquo;ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_receta`
--

CREATE TABLE IF NOT EXISTS `cms_receta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(52) NOT NULL,
  `texto` text,
  `imagen_id` int(11) NOT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_receta_imagen1_idx` (`imagen_id`),
  KEY `fk_receta_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_receta`
--

INSERT INTO `cms_receta` (`id`, `titulo`, `texto`, `imagen_id`, `pagina_id`) VALUES
(1, 'TE REPROGRAMAMOS PARA QUE LLEGUES HASTA TU PESO META', '<p>Reduce tu capacidad de comer hasta un 50%, sin cirug&iacute;as, ni medicamentos, con hipnosis cl&iacute;nica y reprogramaci&oacute;n mental. Adelgazas o mantienes tu peso saludable m&aacute;s f&aacute;cil, pues logras mayor saciedad con menos comida. Adelgazas o mantienes tu peso saludable m&aacute;s f&aacute;cil, pues logras mayor saciedad con menos comida.</p>\r\n', 85, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_redes_sociales`
--

CREATE TABLE IF NOT EXISTS `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `red_social` varchar(100) DEFAULT NULL,
  `link_red` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_redes_sociales`
--

INSERT INTO `cms_redes_sociales` (`id`, `red_social`, `link_red`, `fecha_creacion`) VALUES
(1, 'Facebook', 'https://www.facebook.com/clinicarangelpereira', '2013-10-21 16:58:04'),
(2, 'Twitter', 'http://www.twitter.com/clinicarangelpereira', '2013-10-21 16:58:07'),
(3, 'Youtube', 'http://www.youtube.com/clinicarangelpereira', '2013-10-21 16:58:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_sessions`
--

CREATE TABLE IF NOT EXISTS `cms_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('06d5bf5497f1ea2820371ec46ec7a31d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('1d0559ff04ab0dc49889e490d0ab8f36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546242, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('320231098f574ae99c7ca66aa3be578a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:9:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:15:"page_texto_home";s:1:"1";s:19:"page_destacado_home";s:1:"1";s:15:"page_video_home";s:1:"1";s:11:"page_barner";s:1:"1";s:23:"page_barner_tratamiento";s:1:"1";}'),
('32d61d37cee15fecb47f0199e453d735', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('3ca9eff815aaf8992d9915488010c484', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950535, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('41f51fec9c64448dd0c5385a17db2699', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('578322567e9c153cc5e0aac8aaafd729', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('588088631bd18db3f8abf3249a7fbc96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1382370518, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('5bc21afcaf3a0d2003a2d9dc7e3821c4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('5d4c54a8dd06e22e97b9b5421fd1e0d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546242, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('85166663ad29591eb88941fcd6f16edd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('9592e2e350550981b4d4a0e3faef6f64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('adcd599d51dc0118213869c4315166f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('b4c47745a0e631c5d6ef5c0d887d3027', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950518, 'a:9:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:25:"page_video_adelgazamiento";s:1:"1";s:30:"page_contenedor_adelgazamiento";s:1:"1";s:26:"page_barner_adelgazamiento";s:1:"1";s:16:"page_testimonios";s:1:"1";s:31:"page_contenedor_desintoxicacion";s:1:"1";}'),
('b8e5376b8080eea4a51f973d8df3d37c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950539, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('c5dbae40b3af480919a58278d8ea5d2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950534, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('cd5e8bc25cfbb41b8161c3049183bdce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546241, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('d34ffb93334790e7c80d2192d5e6e59b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1383246616, 'a:33:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:27:"page_barner_diseno_corporal";s:1:"1";s:28:"page_contenedor_renacimiento";s:1:"1";s:26:"page_contenedor_testimonio";s:1:"1";s:12:"page_recetas";s:1:"1";s:8:"page_act";s:3:"FAQ";s:15:"page_texto_home";s:1:"1";s:20:"page_contenedor_home";s:1:"1";s:11:"page_barner";s:1:"1";s:19:"page_destacado_home";s:1:"1";s:22:"page_video_tratamiento";s:1:"1";s:26:"page_destacado_tratamiento";s:1:"1";s:15:"page_video_home";s:1:"1";s:27:"page_contenedor_tratamiento";s:1:"1";s:30:"page_contenedor_banda_gastrica";s:1:"1";s:19:"page_acordeon_lugar";s:1:"1";s:16:"page_testimonios";s:1:"1";s:30:"page_beneficios_adelgazamiento";s:1:"1";s:27:"page_barner_desintoxicacion";s:1:"1";s:31:"page_beneficios_desintoxicacion";s:1:"1";s:24:"page_barner_renacimiento";s:1:"1";s:28:"page_beneficios_renacimiento";s:1:"1";s:21:"page_imagen_beneficio";s:1:"1";s:27:"page_destacado_renacimiento";s:1:"1";s:16:"page_contactenos";s:1:"1";s:25:"page_preguntas_frecuentes";s:1:"1";s:25:"page_video_adelgazamiento";s:1:"1";s:23:"page_video_renacimiento";s:1:"1";s:23:"page_barner_tratamiento";s:1:"1";s:29:"page_destacado_banda_gastrica";s:1:"1";}'),
('df1be2b45a4e47f52d4aa6f43e316d70', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382962658, 'a:14:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:31:"page_beneficios_desintoxicacion";s:1:"1";s:30:"page_destacado_desintoxicacion";s:1:"1";s:28:"page_contenedor_renacimiento";s:1:"1";s:28:"page_beneficios_renacimiento";s:1:"1";s:27:"page_destacado_renacimiento";s:1:"1";s:23:"page_video_renacimiento";s:1:"1";s:21:"page_imagen_beneficio";s:1:"1";s:18:"page_dra_rosalinda";s:1:"1";s:25:"page_barner_dra_rosalinda";s:1:"1";s:29:"page_contenedor_dra_rosalinda";s:1:"1";}'),
('e28ea5980c8035595210e2c7c86d7fdd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382651475, 'a:11:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:23:"page_barner_tratamiento";s:1:"1";s:22:"page_video_tratamiento";s:1:"1";s:15:"page_video_home";s:1:"1";s:26:"page_destacado_tratamiento";s:1:"1";s:27:"page_contenedor_tratamiento";s:1:"1";s:20:"page_contenedor_home";s:1:"1";s:22:"page_texto_tratamiento";s:1:"1";}'),
('f455e5bda51194c578f38fad0cc36899', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382546242, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('f82085520be32c344bda5758663b70f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1382950521, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";}'),
('ffecd2c29254ad36c45699ea89dfbc17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0', 1382972980, 'a:44:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:11:"page_barner";s:1:"1";s:19:"page_destacado_home";s:1:"1";s:20:"page_contenedor_home";s:1:"1";s:26:"page_destacado_tratamiento";s:1:"1";s:27:"page_contenedor_tratamiento";s:1:"1";s:22:"page_texto_tratamiento";s:1:"1";s:12:"page_recetas";s:1:"1";s:23:"page_texto_alimentacion";s:1:"1";s:24:"page_barner_alimentacion";s:1:"1";s:28:"page_contenedor_alimentacion";s:1:"1";s:17:"page_asi_de_facil";s:1:"1";s:26:"page_barner_banda_gastrica";s:1:"1";s:25:"page_texto_banda_gastrica";s:1:"1";s:30:"page_contenedor_banda_gastrica";s:1:"1";s:29:"page_destacado_banda_gastrica";s:1:"1";s:22:"page_barner_testimonio";s:1:"1";s:23:"page_barner_tratamiento";s:1:"1";s:22:"page_video_tratamiento";s:1:"1";s:26:"page_contenedor_testimonio";s:1:"1";s:25:"page_destacado_testimonio";s:1:"1";s:27:"page_barner_diseno_corporal";s:1:"1";s:31:"page_contenedor_diseno_corporal";s:1:"1";s:30:"page_destacado_diseno_corporal";s:1:"1";s:26:"page_texto_diseno_corporal";s:1:"1";s:33:"page_barner_tratamientos_faciales";s:1:"1";s:36:"page_destacado_tratamientos_faciales";s:1:"1";s:32:"page_texto_tratamientos_faciales";s:1:"1";s:37:"page_contenedor_tratamientos_faciales";s:1:"1";s:19:"page_acordeon_lugar";s:1:"1";s:16:"page_video_lugar";s:1:"1";s:16:"page_texto_lugar";s:1:"1";s:21:"page_contenedor_lugar";s:1:"1";s:20:"page_destacado_lugar";s:1:"1";s:16:"page_testimonios";s:1:"1";s:26:"page_barner_adelgazamiento";s:1:"1";s:30:"page_contenedor_adelgazamiento";s:1:"1";s:29:"page_destacado_adelgazamiento";s:1:"1";s:30:"page_beneficios_adelgazamiento";s:1:"1";s:25:"page_preguntas_frecuentes";s:1:"1";s:16:"page_contactenos";s:1:"1";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_testimonios_fitcamp`
--

CREATE TABLE IF NOT EXISTS `cms_testimonios_fitcamp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(37) NOT NULL,
  `peso_antes` char(5) NOT NULL,
  `peso_despues` char(5) NOT NULL,
  `descripcion_persona` varchar(98) DEFAULT NULL,
  `texto` text NOT NULL,
  `pagina_id` int(11) NOT NULL,
  `imagen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_testimonios_fitcamp_pagina1_idx` (`pagina_id`),
  KEY `imagen_id` (`imagen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cms_testimonios_fitcamp`
--

INSERT INTO `cms_testimonios_fitcamp` (`id`, `nombre`, `peso_antes`, `peso_despues`, `descripcion_persona`, `texto`, `pagina_id`, `imagen_id`) VALUES
(1, ' Juliana', '89 Kg', '69 Kg', 'Diabetes, Hipertensión, Colesterol elevado', 'Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now! The entire staff is great, as are the clients. The people are just good people. I recommend PFC to everyone. Thank you to the entire staff for everything!', 7, 129);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_texto_principal`
--

CREATE TABLE IF NOT EXISTS `cms_texto_principal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  `texto` varchar(670) DEFAULT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_texto_principal_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cms_texto_principal`
--

INSERT INTO `cms_texto_principal` (`id`, `titulo`, `texto`, `pagina_id`) VALUES
(1, '5 Razones para adelgazar con nosotros.', 'Reprogramamos tu mente y tu metabolismo para llegar al peso que quieres y mantener los resultados a largo plazo, sin privarte del placer de comer lo que te gusta. Soluciona tus problemas de sobrepeso desde la raíz, con un tratamiento médico que realmente te funciona.\r\n', 1),
(2, 'Así funciona', '0', 4),
(3, '¿Cuál es tu línea?', 'Personalizamos tus platos según tus gustos y necesidades, con ingredientes naturales y la combinación perfecta de técnicas de preparación, sabores y porciones, que te permiten alcanzar el peso que deseas, mejorar tu salud y cuidarte siempre. Vas a la ja, sin cocinar, ni contar calorías o puntos.', 5),
(4, '¿Cómo actúa?', 'La Banda Gástrica Virtual (BGV) funciona porque es un método que se ha probado en diferentes países y que se basa en sugestiones hipnóticas, programaciones mentales y técnicas que puedes usar en cualquier lugar. Partiendo de un cambio a nivel mental consciente y subconsciente, tu organismo se acostumbra cada día a sentir mayor saciedad con menos comida y esto es un factor fundamental para perder peso, especialmente si eres una persona de gran apetito.', 6),
(5, 'Tratamientos de diseño corporal', '0', 2),
(6, 'Tratamientos de medicina estética facial', '0', 3),
(7, 'Un lugar mágico que cambiará tu vida', '0', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `departamento_id`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL, 14),
(7, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'German Pinilla', 'dcf1564b2a2e7e132bcc1c11307a09de9e5a44ba', 'dc6daa3ef9', 'gprubiano53@gmail.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(9, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Andy', '2a287fe5980885a9d71f2f865af9908d0053138f', 'ec459600e0', 'andy@andy.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(10, '\0\0', 'elbertjose', '5c133442350e41793c64e2bb39e8157f2cc048fd', '730d87e794', 'elbert.tous@imaginamos.co', NULL, NULL, NULL, 'ad289a6efc6ba783e678f9ea955d1114910ca8cd', 2013, 2013, 1, 'Elbert Jose', 'Tous Ballesteros', 'Imaginamos', '3205788788', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users_groups`
--

CREATE TABLE IF NOT EXISTS `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `group_users_groups` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cms_users_groups`
--

INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(7, 7, 1),
(9, 9, 1),
(10, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_video`
--

CREATE TABLE IF NOT EXISTS `cms_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(37) DEFAULT NULL,
  `link` varchar(350) NOT NULL,
  `texto` varchar(117) DEFAULT NULL,
  `imagen_id` int(11) DEFAULT NULL,
  `pagina_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_video_imagen1_idx` (`imagen_id`),
  KEY `fk_video_pagina1_idx` (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cms_video`
--

INSERT INTO `cms_video` (`id`, `titulo`, `link`, `texto`, `imagen_id`, `pagina_id`) VALUES
(1, 'anonimus', 'http://www.youtube.com/watch?v=PIzpzYvwRn4', '', 67, 1),
(2, 'Análisis Gratuito', 'http://www.youtube.com/watch?v=iQmRIw5SkDY', 'Conoce tu tipología y los principales bloqueos que te han impedido adelgazar y mantener los resultados.', 74, 4),
(3, 'CONOCE NUESTRA SEDE CAMPESTRE', 'http://www.youtube.com/watch?v=yT_WfATG5eg', '0', 126, 8),
(4, 'Ver día tipo +', '#', '0', 50, 9),
(5, 'VER VIDEO', 'http://www.youtube.com/watch?v=fzXyltTOUjM', '', 146, 11);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_acordeon_lugar`
--
ALTER TABLE `cms_acordeon_lugar`
  ADD CONSTRAINT `fk_acordeon_lugar_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_asi_facil`
--
ALTER TABLE `cms_asi_facil`
  ADD CONSTRAINT `fk_asi_facil_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asi_facil_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_barner`
--
ALTER TABLE `cms_barner`
  ADD CONSTRAINT `cms_barner_ibfk_1` FOREIGN KEY (`imagen1_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_trtamiento_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_trtamiento_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_barner_principal`
--
ALTER TABLE `cms_barner_principal`
  ADD CONSTRAINT `cms_barner_principal_ibfk_1` FOREIGN KEY (`imagen1_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barner_cms_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_beneficio`
--
ALTER TABLE `cms_beneficio`
  ADD CONSTRAINT `fk_beneficio_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_contactenos`
--
ALTER TABLE `cms_contactenos`
  ADD CONSTRAINT `fk_contactenos_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_contenedor`
--
ALTER TABLE `cms_contenedor`
  ADD CONSTRAINT `fk_contenedor_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pasos_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_contenedor_alimentacion`
--
ALTER TABLE `cms_contenedor_alimentacion`
  ADD CONSTRAINT `fk_contenedor_alimentacion_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contenedor_alimentacion_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_contenedor_renacimiento`
--
ALTER TABLE `cms_contenedor_renacimiento`
  ADD CONSTRAINT `fk_contenedor_renacimiento_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contenedor_renacimiento_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_contenedor_testimonio`
--
ALTER TABLE `cms_contenedor_testimonio`
  ADD CONSTRAINT `fk_contenedor_testimonio_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contenedor_testimonio_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_destacado`
--
ALTER TABLE `cms_destacado`
  ADD CONSTRAINT `fk_destacado_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_destacado_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_dra_rosalinda`
--
ALTER TABLE `cms_dra_rosalinda`
  ADD CONSTRAINT `cms_dra_rosalinda_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dra_rosalinda_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_groups_permissions`
--
ALTER TABLE `cms_groups_permissions`
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cms_groups_permissions_cms_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `cms_permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_imagen_beneficio`
--
ALTER TABLE `cms_imagen_beneficio`
  ADD CONSTRAINT `fk_imagen_beneficio_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_imagen_beneficio_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_receta`
--
ALTER TABLE `cms_receta`
  ADD CONSTRAINT `fk_receta_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receta_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_testimonios_fitcamp`
--
ALTER TABLE `cms_testimonios_fitcamp`
  ADD CONSTRAINT `cms_testimonios_fitcamp_ibfk_1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_testimonios_fitcamp_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_texto_principal`
--
ALTER TABLE `cms_texto_principal`
  ADD CONSTRAINT `fk_texto_principal_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users`
--
ALTER TABLE `cms_users`
  ADD CONSTRAINT `cms_users_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `cms_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cms_users_groups`
--
ALTER TABLE `cms_users_groups`
  ADD CONSTRAINT `group_users_groups` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cms_video`
--
ALTER TABLE `cms_video`
  ADD CONSTRAINT `fk_video_imagen1` FOREIGN KEY (`imagen_id`) REFERENCES `cms_imagen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_video_pagina1` FOREIGN KEY (`pagina_id`) REFERENCES `cms_pagina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
