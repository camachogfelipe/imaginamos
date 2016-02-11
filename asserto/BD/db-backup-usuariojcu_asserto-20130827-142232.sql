/*CREATE DATABASE IF NOT EXISTS usuariojcu_asserto;*/

USE img_asserto;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS bullets_somos;

CREATE TABLE `bullets_somos` (
  `idbullets` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idbullets`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='																';

INSERT INTO bullets_somos VALUES("1","Ética y Transparencia","2013-06-13","");
INSERT INTO bullets_somos VALUES("2","Honestidad","2013-06-13","");
INSERT INTO bullets_somos VALUES("3","Trabajo en Equipo","2013-06-13","");
INSERT INTO bullets_somos VALUES("4","Compromiso con el Desarrollo Económico y Social","2013-06-13","");



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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://repositorio.imaginamos.com.co/JCU/asserto/admin/","http://repositorio.imaginamos.com.co/JCU/asserto/secciones/","cms@imaginamos.com","imaginamos.com");



DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("3","HOME","modules/home/view","clipboard");
INSERT INTO cms_menu VALUES("5","QUIENES SOMOS","modules/somos/view","group");
INSERT INTO cms_menu VALUES("6","QUE SABEMOS","modules/sabemos/view","administrator");
INSERT INTO cms_menu VALUES("7","HERRAMIENTAS","modules/herramientas/view","briefcase");
INSERT INTO cms_menu VALUES("8","AYUDA","modules/ayuda/view","headset");
INSERT INTO cms_menu VALUES("9","CONTACTENOS","modules/contactenos/view","mail_open");
INSERT INTO cms_menu VALUES("10","CONTACTANOS","modules/contactanos/view","satellite");



DROP TABLE IF EXISTS cms_user;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","475266560c6d9f03f9ec80340218fa4c","cms@imaginamos.com","admin");



DROP TABLE IF EXISTS contenido_ayuda;

CREATE TABLE `contenido_ayuda` (
  `idcontenido` int(11) NOT NULL AUTO_INCREMENT,
  `idseccion` int(11) NOT NULL,
  `texto1` text,
  `texto2` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idcontenido`,`idseccion`),
  KEY `fk_conenido_ayuda_seccion_ayuda1_idx` (`idseccion`),
  CONSTRAINT `fk_conenido_ayuda_seccion_ayuda1` FOREIGN KEY (`idseccion`) REFERENCES `seccion_ayuda` (`idseccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO contenido_ayuda VALUES("1","1","prueba morado","prueba morado","","","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("2","2","prueba amarillo","","","","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("3","3","prueba azul","","","","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("4","4","naranja","","","original1_4.jpg","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("5","5","prueba verde","","","","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("6","6","prueba morado","","","original1_6.jpg","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("7","7","prueba azul","","","original1_7.jpg","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("8","8","texto fucsia","","","","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("9","9","amarillo quemado","","","original1_9.jpg","2013-06-21","");
INSERT INTO contenido_ayuda VALUES("10","10","texto somos","","","","2013-06-21","");



DROP TABLE IF EXISTS contenido_herramientas;

CREATE TABLE `contenido_herramientas` (
  `idcontenido` int(11) NOT NULL AUTO_INCREMENT,
  `idseccion` int(11) NOT NULL,
  `texto1` text,
  `texto2` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idcontenido`,`idseccion`),
  KEY `fk_contenido_herramientas_seccion_herramientas1_idx` (`idseccion`),
  CONSTRAINT `fk_contenido_herramientas_seccion_herramientas1` FOREIGN KEY (`idseccion`) REFERENCES `seccion_herramientas` (`idseccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO contenido_herramientas VALUES("1","1","prueba1xxx","prueba2xxx","http://google.com","","2013-06-19","");
INSERT INTO contenido_herramientas VALUES("2","2","prueba azuñ","","index.php?seccion=sabemos","","2013-06-19","");
INSERT INTO contenido_herramientas VALUES("3","3","camilo","","http://www.youtube.com","original1_3.jpg","2013-06-19","");



DROP TABLE IF EXISTS contenido_sabemos;

CREATE TABLE `contenido_sabemos` (
  `idcontenido` int(11) NOT NULL AUTO_INCREMENT,
  `idseccion` int(11) NOT NULL,
  `texto1` text,
  `texto2` text,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_moificacion` date DEFAULT NULL,
  PRIMARY KEY (`idcontenido`,`idseccion`),
  KEY `fk_contenido_sabemos_seccion_sabemos1_idx` (`idseccion`),
  CONSTRAINT `fk_contenido_sabemos_seccion_sabemos1` FOREIGN KEY (`idseccion`) REFERENCES `seccion_sabemos` (`idseccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO contenido_sabemos VALUES("1","1","prueba1","prueba2","","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("2","2","lllll","","original1_2.jpg","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("3","3","prueba camilo","","","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("4","4","texto morado","","original1_4.jpg","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("5","5","prueba verde","","original1_5.jpg","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("6","6","prueba morado","","","2013-06-19","");
INSERT INTO contenido_sabemos VALUES("7","7","prueba fucsia","","original1_7.jpg","2013-06-19","");



DROP TABLE IF EXISTS contenido_somos;

CREATE TABLE `contenido_somos` (
  `idcontenido` int(11) NOT NULL AUTO_INCREMENT,
  `idseccion` int(11) NOT NULL,
  `texto1` text,
  `texto2` text,
  `texto3` text NOT NULL,
  `texto4` text NOT NULL,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idcontenido`,`idseccion`),
  KEY `fk_quienes_somos_seccion_somos_idx` (`idseccion`),
  CONSTRAINT `fk_quienes_somos_seccion_somos` FOREIGN KEY (`idseccion`) REFERENCES `seccion_somos` (`idseccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO contenido_somos VALUES("1","1","Asserto es una firma de consultoría fundada en 2008, con el objetivo de brindar asesoría integral en temas relacionados con gestión pública y privada, estructuración económica y financiera y orientación estratégica.
\n
\nContamos con un equipo altamente calificado y con amplia experiencia en diversas áreas, que busca apoyar a las empresas y entidades, tanto públicas como privadas, así como ONG´s y Organismos de carácter Internacional en la consecución de metas y objetivos que contribuyan al desarrollo económico y social.","","","","","","","");
INSERT INTO contenido_somos VALUES("2","2","Principios","Nuestra firma se basa en cuatro principios fundamentales, con los cuales buscamos contribuir de la manera más eficiente, eficaz y oportuna al Desarrollo Económico y Social:
\n
\n","","","","","2013-06-13","");
INSERT INTO contenido_somos VALUES("3","3","Misión","Somos una empresa dedicada a la importación y distribución de material para el sector de la salud.","Visión","Para el 2.020 trabajamos en ser una empresa reconocida, distinguida, renombrada y con amplia demanda en el mercado colombiano.","original1_3.jpg ","original2_3.jpg ","2013-06-19","");



DROP TABLE IF EXISTS datos_contacto;

CREATE TABLE `datos_contacto` (
  `iddatos_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`iddatos_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO datos_contacto VALUES("1","Calle 144 # 7 31","Bogotá, Colombia","526 0770","contacto@asserto.net","2013-06-21","");



DROP TABLE IF EXISTS home;

CREATE TABLE `home` (
  `idhome` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idhome`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO home VALUES("1","Quiénes somos","original_1.jpg","2013-06-11","");
INSERT INTO home VALUES("2","Qué sabemos hacer","destacado-2.jpg","2013-06-11","");
INSERT INTO home VALUES("3","Herramientas útiles","destacado-3.jpg","2013-06-11","");
INSERT INTO home VALUES("4","Como lo podemos ayudar","destacado-4.jpg","2013-06-11","");



DROP TABLE IF EXISTS imagen_ayuda;

CREATE TABLE `imagen_ayuda` (
  `idimagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idimagen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO imagen_ayuda VALUES("1","original_1.jpg","2013-06-21","");



DROP TABLE IF EXISTS imagen_contactenos;

CREATE TABLE `imagen_contactenos` (
  `idimagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idimagen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO imagen_contactenos VALUES("1","original1_1.jpg");



DROP TABLE IF EXISTS imagen_somos;

CREATE TABLE `imagen_somos` (
  `idimagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idimagen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO imagen_somos VALUES("1","original_1.jpg","2013-06-19","");



DROP TABLE IF EXISTS link_herramientas;

CREATE TABLE `link_herramientas` (
  `idlink` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_link` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlink`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO link_herramientas VALUES("2","titulo prueba","index.php?seccion=empresa","","");
INSERT INTO link_herramientas VALUES("3","Principios","http://www.youtube.com","","");
INSERT INTO link_herramientas VALUES("6","camilo prueba","http://www.youtube.com","","");
INSERT INTO link_herramientas VALUES("7","link","index.php?seccion=sabemos","","");
INSERT INTO link_herramientas VALUES("8","texto","index.php?seccion=herramientas","","");
INSERT INTO link_herramientas VALUES("9","prueba","http://www.google.com","","");
INSERT INTO link_herramientas VALUES("14","Luis Prueba","http://www.google.com","","");
INSERT INTO link_herramientas VALUES("15","Luis Prueba","http://www.facebook.com","","");
INSERT INTO link_herramientas VALUES("16","Luis Prueba","http://www.btvguide.com","","");
INSERT INTO link_herramientas VALUES("17","Luis Prueba","http://www.google.com","","");



DROP TABLE IF EXISTS sabemos_imagen;

CREATE TABLE `sabemos_imagen` (
  `idsabemos` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idsabemos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO sabemos_imagen VALUES("1","original_1.jpg","2013-06-19","");



DROP TABLE IF EXISTS seccion_ayuda;

CREATE TABLE `seccion_ayuda` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO seccion_ayuda VALUES("1","seccion1","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("2","seccion2","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("3","seccion3","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("4","seccion4","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("5","seccion_a","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("6","seccion_b","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("7","seccion_c","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("8","seccion_d","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("9","seccion_e","2013-06-21","");
INSERT INTO seccion_ayuda VALUES("10","seccion_azul","2013-06-21","");



DROP TABLE IF EXISTS seccion_herramientas;

CREATE TABLE `seccion_herramientas` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO seccion_herramientas VALUES("1","seccion1","2013-06-19","");
INSERT INTO seccion_herramientas VALUES("2","seccion2","2013-06-19","");
INSERT INTO seccion_herramientas VALUES("3","seccion3","2013-06-19","");



DROP TABLE IF EXISTS seccion_sabemos;

CREATE TABLE `seccion_sabemos` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO seccion_sabemos VALUES("1","seccion1","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("2","seccion2","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("3","seccion3","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("4","seccion4","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("5","seccion_a","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("6","seccion_b","2013-06-19","");
INSERT INTO seccion_sabemos VALUES("7","aeccion_c","2013-06-19","");



DROP TABLE IF EXISTS seccion_somos;

CREATE TABLE `seccion_somos` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO seccion_somos VALUES("1","verde","2013-06-12","");
INSERT INTO seccion_somos VALUES("2","naranja","2013-06-13","");
INSERT INTO seccion_somos VALUES("3","azul","2013-06-19","");



DROP TABLE IF EXISTS texto_home;

CREATE TABLE `texto_home` (
  `idtexto` int(11) NOT NULL AUTO_INCREMENT,
  `idhome` int(11) NOT NULL,
  `texto` text,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`idtexto`,`idhome`),
  KEY `idhome` (`idhome`),
  CONSTRAINT `texto_home_ibfk_1` FOREIGN KEY (`idhome`) REFERENCES `home` (`idhome`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

INSERT INTO texto_home VALUES("1","1","Asserto es una firma de consultoría fundada en 2008, con el objetivo de brindar asesoría integral en temas relacionados con gestión pública y privada, estructuración económica y financiera y orientación estratégica.xxx
\n","2013-06-11","");
INSERT INTO texto_home VALUES("2","2","Gestión y Estructuración de Planes, Programas y Proyectos de Desarrollo","2013-06-11","");
INSERT INTO texto_home VALUES("3","3","Cuál es el Banco que más le conviene? Averígüelo…","2013-06-11","");
INSERT INTO texto_home VALUES("4","4","La experiencia de nuestros socios y consultores asociados en diversas entidades del sector público y empresas del sector privado, así como en diferentes organismos internacionales y de cooperación para el desarrollo, permiten a la firma contar con el conocimiento necesario para brindar apoyo y asesoría a sus clientes de manera eficaz y oportuna.","2013-06-11","");
INSERT INTO texto_home VALUES("38","2","Orientación Estratégica","","");
INSERT INTO texto_home VALUES("39","2","Asesoría en la gestión de recursos de crédito externo y cooperación internacional","","");


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

