/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS www;

USE www;

DROP TABLE IF EXISTS aseguradoras;

CREATE TABLE `aseguradoras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicios_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `orden` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aseguradoras_FKIndex1` (`servicios_id`),
  CONSTRAINT `aseguradoras_ibfk_1` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO aseguradoras VALUES("5","1","ALLIANZ","original_5.jpg","0");
INSERT INTO aseguradoras VALUES("7","1","MAPFRE","original_7.png","0");
INSERT INTO aseguradoras VALUES("11","1","RSA","original_11.png","0");
INSERT INTO aseguradoras VALUES("13","1","LIBERTY","original_13.png","0");
DROP TABLE IF EXISTS cms_configuration;

CREATE TABLE `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://www.aoacolombia.com/cms/","http://www.aoacolombia.com/","contacto@aoacolombia.com","AOA Colombia");
DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/home/view","administrator");
INSERT INTO cms_menu VALUES("2","¿Quiénes Somos?","modules/quienes_somos/view","clipboard");
INSERT INTO cms_menu VALUES("3","Servicios","modules/servicios/view","briefcase");
INSERT INTO cms_menu VALUES("4","Galeria","modules/galeria_de_fotos/view","pictures_folder");
INSERT INTO cms_menu VALUES("5","Front PQR","modules/pqr_front/view","briefcase");
INSERT INTO cms_menu VALUES("6","PQR registro","modules/pqr_registro/view","clipboard");
INSERT INTO cms_menu VALUES("7","FAQ","modules/faq/view","checkmark");
INSERT INTO cms_menu VALUES("8","Oficinas","modules/oficinas/view","usb");
DROP TABLE IF EXISTS cms_user;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","475266560c6d9f03f9ec80340218fa4c","cms@imaginamos.com","admin");
INSERT INTO cms_user VALUES("2","PQR","475266560c6d9f03f9ec80340218fa4c","pqr@aoa.com","pqr");
DROP TABLE IF EXISTS condiciones_de_servicio;

CREATE TABLE `condiciones_de_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aseguradoras_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` text,
  `datos_de_contacto_1` varchar(255) DEFAULT NULL,
  `datos_de_contacto_2` varchar(255) DEFAULT NULL,
  `texto_documentacion_requerida` text,
  PRIMARY KEY (`id`),
  KEY `condiciones_de_servicio_FKIndex1` (`aseguradoras_id`),
  CONSTRAINT `condiciones_de_servicio_ibfk_1` FOREIGN KEY (`aseguradoras_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO condiciones_de_servicio VALUES("1","5","ALLIANZ","<p>La aseguradora pone a disposici&oacute;n del asegurado un vehiculo de reemplazo por 7 o 10 d&iacute;as seg&uacute;n la p&oacute;liza contratada.</p>
INSERT INTO condiciones_de_servicio VALUES("3","7","MAPFRE","<p>La aseguradora pone a disposici&oacute;n&nbsp; del asegurado un vehiculo de reemplazo por 7 d&iacute;as&nbsp; para perdidas parciales y 15 d&iacute;as para p&eacute;rdida total.</p>
INSERT INTO condiciones_de_servicio VALUES("6","13","LIBERTY","<p>La aseguradora pone a disposici&oacute;n&nbsp; del asegurado un vehiculo de reemplazo por 7&nbsp; d&iacute;as con limite de kilometraje.</p>
INSERT INTO condiciones_de_servicio VALUES("7","11","RSA","<p>La aseguradora pone a disposici&oacute;n del asegurado un vehiculo de reemplazo por 7 o 21&nbsp;d&iacute;as seg&uacute;n p&oacute;liza contratada</p>
DROP TABLE IF EXISTS condiciones_del_servicio_default;

CREATE TABLE `condiciones_del_servicio_default` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicios_id` int(10) unsigned NOT NULL,
  `texto_descriptivo` text,
  `datos_de_contacto_1` varchar(255) DEFAULT NULL,
  `datos_de_contacto_2` varchar(255) DEFAULT NULL,
  `texto_documentacion_requerida` text,
  PRIMARY KEY (`id`),
  KEY `condiciones_del_servicio_default_FKIndex1` (`servicios_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO condiciones_del_servicio_default VALUES("1","6","<p>preuba de texto</p>
DROP TABLE IF EXISTS descripcion_oficina;

CREATE TABLE `descripcion_oficina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oficinas_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `linea1` varchar(255) DEFAULT NULL,
  `linea2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `descripcion_oficina_FKIndex1` (`oficinas_id`),
  CONSTRAINT `descripcion_oficina_ibfk_1` FOREIGN KEY (`oficinas_id`) REFERENCES `oficinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO descripcion_oficina VALUES("1","1","MORATO","TEL : 7560510","CRA 69 B N. 98 A 10 MORATO");
INSERT INTO descripcion_oficina VALUES("2","1","PRADO","TEL:6152879 EXT 115","AUTOPISTA NORTE 128 A-41 PISO 2");
INSERT INTO descripcion_oficina VALUES("3","1","TOBERIN","TEL:6709833 EXT 106","CARRERA 19 No 164-36 PISO 2");
INSERT INTO descripcion_oficina VALUES("4","1","MADELENA","TEL: 7465500","AUTOPISTA SUR N&deg; 70-03 (AUTOSTOCK)");
INSERT INTO descripcion_oficina VALUES("5","2","CENTRO COMERCIAL SANTAF&Eacute; LOCAL 5202","TEL : 2629221/320 272 5927","CARRERA 43 A N. 7 SUR 107");
INSERT INTO descripcion_oficina VALUES("6","3","CENTRO COMERCIAL MIRAMAR","TEL : 3203446993","Cra. 43 N. 99 - 50 local LE16");
INSERT INTO descripcion_oficina VALUES("7","4","EDIFICIO TORRE MARDEL 703","TEL:3202334950","CRA 31 No. 51-74");
INSERT INTO descripcion_oficina VALUES("8","5","EDIFICIO TORRE CENTRAL LOCAL 107","TEL:3202334965","CARRERA 10 N. 17 - 55");
INSERT INTO descripcion_oficina VALUES("9","6","CENTRO COMERCIAL PALMETO PLAZA LOCAL 106","TEL : 4058649 - 320 302 0444","CALLE 9 CON CRA. 50");
INSERT INTO descripcion_oficina VALUES("10","7","HOTEL CASA MORALES","TEL:3104766648","CRA 3 N. 3 - 47");
DROP TABLE IF EXISTS destacados;

CREATE TABLE `destacados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO destacados VALUES("1","Vehículo de reemplazo","Servicio que se presta a los clientes de las aseguradoras cuando tienen un siniestro","original_1.jpg","original2_1.jpg");
INSERT INTO destacados VALUES("2","AOA Car sharing ","Alquiler por horas","original_2.jpg","original2_2.jpg");
INSERT INTO destacados VALUES("3","Manejo y administración de flotas ","Fleet Management","original_3.jpg","original2_3.jpg");
INSERT INTO destacados VALUES("4","DPA ( drivig patterns an&aacute;lisis) ","Dispositivo dise&ntildeado para el control de flotas y medici&oacute;n de par&aacute;metros","original_4.jpg","original2_4.jpg");
DROP TABLE IF EXISTS faq;

CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO faq VALUES("1","&iquest;El vehiculo de reemplazo se encuentra asegurado?","<p>R// El Veh&iacute;culo cuenta con una P&oacute;liza Todo riesgo.</p>
INSERT INTO faq VALUES("2","&iquest;En caso de siniestro o accidente con el veh&iacute;culo sustituto, que debo hacer?","<p>R// Debe reportarlo ante AOA y la Aseguradora dentro de las 2 horas siguientes al incidente, de acuerdo a lo estipulado en el contrato.</p>
INSERT INTO faq VALUES("3","&iquest;Por qu&eacute; tan pocos d&iacute;as de servicio, si la reparaci&oacute;n del veh&iacute;culo propio dura m&aacute;s tiempo?","<p>R// Las condiciones de prestaci&oacute;n del servicio est&aacute;n sujetas a lo contratado por poliza. Estos tiempos son estipulados por la aseguradora.</p>
INSERT INTO faq VALUES("4","&iquest;puedo tener el veh&iacute;culo sustituto hasta que me entreguen el mio de reparaci&oacute;n?","<p>R// No. Solo durante el tiempo pactado en su poliza de seguro.</p>
INSERT INTO faq VALUES("5","&iquest;Por qu&eacute; tengo que constituir una garant&iacutea?","<p>R// Las garant&iacute;as se constituyen con el fin de amparar los riesgos no cubiertos por las p&oacute;lizas de seguros y las sanciones por incumplimiento del contrato.</p>
INSERT INTO faq VALUES("6","&iquest;Puedo tomar el servicio sin constituir garant&iacute;a?","<p>R// No es posible debido a que es una condici&oacute;n estipulada en el contrato.</p>
INSERT INTO faq VALUES("7","&iquest;Para que necesitan el n&uacute;mero de una cuenta de ahorros o corriente? ","<ul>
INSERT INTO faq VALUES("8","&iquest;Puedo devolver el veh&iacute;culo antes de tiempo?","<ul>
INSERT INTO faq VALUES("9","&iquest;En que direcci&oacute;n puedo recoger el veh&iacute;culo?","<ul>
DROP TABLE IF EXISTS galeria_de_fotos;

CREATE TABLE `galeria_de_fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS home;

CREATE TABLE `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_mensaje` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO home VALUES("1","AOA es una compañía de servicios en administración y asesoramiento integral para el manejo de flotas de vehículos, que ofrece soluciones de movilidad diseñadas para cada sector de la economía.","http://www.oureasyprojects.net/imaginamos/TimeLogs.aspx","home_1.mov");
DROP TABLE IF EXISTS menu_intranet;

CREATE TABLE `menu_intranet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `link` char(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO menu_intranet VALUES("1","Administraci&oacute;n","http://app.aoacolombia.com/Administrativo");
INSERT INTO menu_intranet VALUES("2","Control","http://app.aoacolombia.com/Control/operativo");
INSERT INTO menu_intranet VALUES("3","Correo","http://correo.aoacolombia.com/");
DROP TABLE IF EXISTS oficinas;

CREATE TABLE `oficinas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO oficinas VALUES("1","Bogot&aacute;");
INSERT INTO oficinas VALUES("2","Medell&iacute;n");
INSERT INTO oficinas VALUES("3","Barranquilla");
INSERT INTO oficinas VALUES("4","Bucaramanga");
INSERT INTO oficinas VALUES("5","Pereira");
INSERT INTO oficinas VALUES("6","Cali");
INSERT INTO oficinas VALUES("7","Ibagu&eacute;");
DROP TABLE IF EXISTS pqr_front;

CREATE TABLE `pqr_front` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_principal` varchar(555) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_solicitud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO pqr_front VALUES("1","AOA","Seguimiento de PQR","AOA","original_1.jpg","original2_1.jpg");
DROP TABLE IF EXISTS pqr_registro;

CREATE TABLE `pqr_registro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `cedula` double(25,0) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `aseguradora` varchar(255) NOT NULL,
  `tipo_de_solicitud` varchar(255) NOT NULL,
  `comentarios_texto` text NOT NULL,
  `estado` enum('recibida','tramite','resuelta') NOT NULL DEFAULT 'recibida',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO pqr_registro VALUES("1","Felipe","80178104","cra 14 b 161 54","felipe@cogroupsas.com","skm361","5","PETICIÓN","Comentarios1","resuelta","2013-10-01 14:25:08");
INSERT INTO pqr_registro VALUES("2","John Reyes","11186736","Carrera Con Calle","jfreyesve@gmail.com","BED066","5","8","NINGUNO ES SOLO PRUEBA","tramite","2013-10-01 14:25:08");
INSERT INTO pqr_registro VALUES("6","Sebastian Hurtado","11202032","morato","shurtado@aoacolombia.co","rdk277","5","2","afsagadfga","recibida","2013-10-07 09:41:05");
DROP TABLE IF EXISTS quienes_somos;

CREATE TABLE `quienes_somos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO quienes_somos VALUES("1","<p>AOA es una compa&ntilde;&iacute;a fundada en el 2007 con el objetivo de ofrecer soluciones integrales de movilidad por medio de servicios de administraci&oacute;n y asesoramiento en manejo de Flotas de Veh&iacute;culos.</p>
DROP TABLE IF EXISTS respuestas_pqr;

CREATE TABLE `respuestas_pqr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pqr_registro_id` int(10) unsigned NOT NULL,
  `texto` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`pqr_registro_id`,`fecha`),
  KEY `respuestas_pqr_FKIndex1` (`pqr_registro_id`),
  CONSTRAINT `respuestas_pqr_ibfk_1` FOREIGN KEY (`pqr_registro_id`) REFERENCES `pqr_registro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO respuestas_pqr VALUES("1","1","REGISTRADA","2013-08-02 18:18:25");
INSERT INTO respuestas_pqr VALUES("2","1","EN TR&Aacute;MITE","2013-09-12 18:49:58");
INSERT INTO respuestas_pqr VALUES("17","1","<p>Respuesta</p>
INSERT INTO respuestas_pqr VALUES("18","2","REGISTRADA","2013-08-14 09:07:29");
INSERT INTO respuestas_pqr VALUES("19","2","EN TR&Aacute;MITE","2013-09-12 18:50:05");
INSERT INTO respuestas_pqr VALUES("26","6","REGISTRADA","2013-10-07 09:41:05");
DROP TABLE IF EXISTS servicios;

CREATE TABLE `servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `visible_condiciones` int(10) unsigned DEFAULT NULL,
  `visible_contacto` int(10) unsigned DEFAULT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO servicios VALUES("1","Vehículo de reemplazo","<p>AOA pone a disposici&oacute;n del asegurado un veh&iacute;culo de reemplazo por un per&iacute;odo determinado, del cual podr&aacute; disponer en el momento en que se autorice el siniestro por parte de la compa&ntilde;&iacute;a de seguros.</p>
INSERT INTO servicios VALUES("2","DPA","<p>AOA desarroll&oacute; un dispositivo electr&oacute;nico Driving Patterns Analysis &ndash; DPA dise&ntilde;ado para:</p>
INSERT INTO servicios VALUES("6","AOA Car sharing ","<p>El Car Sharing o &ldquo;Carro-Compartido&rdquo; es una alternativa planteada como un servicio que nace de la necesidad de reducir el parque automotor privado que es responsable de un gran porcentaje de las&nbsp; emisiones de CO2.</p>
INSERT INTO servicios VALUES("7","Manejo de Flotas","<p>Gestionar una flota requiere un rubro importante dentro de las organizaciones para su control y&nbsp; mantenimiento. Por tal raz&oacute;n AOA&nbsp; cuenta&nbsp; con un servicio especializado&nbsp; que le&nbsp; permite encargarse de la gesti&oacute;n eficiente de las necesidades concretas de cada flota adapt&aacute;ndose a las necesidades de cada compa&ntilde;&iacute;a.</p>


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;