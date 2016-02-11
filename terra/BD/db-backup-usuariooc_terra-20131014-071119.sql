/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS usuariooc_terra;

USE usuariooc_terra;

DROP TABLE IF EXISTS archivos;

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO archivos VALUES("2","1 pdf","pdf_3810_2.pdf","2013-06-27");
INSERT INTO archivos VALUES("3","2 pdf","pdf_3102_3.pdf","2013-06-27");
INSERT INTO archivos VALUES("5","Prueba","pdf_3366_5.pdf","2013-07-24");
DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("23","adfsdf","sagasdg","banner_23.jpg","index.php?seccion=index");
INSERT INTO banner VALUES("24","dfgreg","erwgewreg","banner_24.jpg","index.php?seccion=index");
INSERT INTO banner VALUES("25","ueruter","ertuetyu","banner_25.jpg","index.php?seccion=index");
DROP TABLE IF EXISTS bienvenidos;

CREATE TABLE `bienvenidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO bienvenidos VALUES("1","LOREM IPSUM SIT CONSECT ADIPISCING ELIT, DONEC","Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendr");
DROP TABLE IF EXISTS bullet_contactenos;

CREATE TABLE `bullet_contactenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bullet` varchar(300) NOT NULL COMMENT '1 para direccion 2 para correos',
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO bullet_contactenos VALUES("14","email@terra.com","2");
INSERT INTO bullet_contactenos VALUES("16","Terra Capital Group ™","1");
INSERT INTO bullet_contactenos VALUES("20","Via Doima km 11.5","1");
INSERT INTO bullet_contactenos VALUES("21","Ibagué, Tolima","1");
INSERT INTO bullet_contactenos VALUES("22","Colombia","1");
INSERT INTO bullet_contactenos VALUES("23","email@terra.com.co","2");
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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://repositorio.imaginamos.com.co/OC/terra/admin/","http://repositorio.imaginamos.com.co/OC/terra/","cms@imaginamos.com","imaginamos.com");
DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/home/view","pictures_folder");
INSERT INTO cms_menu VALUES("2","Servicios","modules/servicios/view","headset");
INSERT INTO cms_menu VALUES("3","Noticias","modules/noticias/view","briefcase");
INSERT INTO cms_menu VALUES("4","Acerca de nosotros","modules/nosotros/view","administrator");
INSERT INTO cms_menu VALUES("5","Contactenos","modules/contacto/view","briefcase");
INSERT INTO cms_menu VALUES("6","Zona segura","modules/zonasegura/view","briefcase");
INSERT INTO cms_menu VALUES("7","Formulario Contacto","modules/solicitudes/view","mail");
INSERT INTO cms_menu VALUES("8","Solicitudes","modules/usuarios/view","group");
DROP TABLE IF EXISTS cms_user;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","c93ccd78b2076528346216b3b2f701e6","admin","admin");
INSERT INTO cms_user VALUES("2","Administrador","dd5520c92dff0b8cca3d2052ca6b53ba","terra@imaginamos.com","user");
DROP TABLE IF EXISTS cont_contactenos;

CREATE TABLE `cont_contactenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cont_contactenos VALUES("1","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","contacto_1.jpg","jocamilourimg@gmail.com");
DROP TABLE IF EXISTS footer;

CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel1` varchar(300) NOT NULL,
  `tel2` varchar(300) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `ciudad` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO footer VALUES("1","+57 317.6578365 ","+57 318.4210009","Via Doima km 11.5","Ibagué, Tolima - Colombia","info@terracapitalgroup.co");
DROP TABLE IF EXISTS forgot_pass;

CREATE TABLE `forgot_pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_forgot_pass_usuarios1_idx` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO forgot_pass VALUES("28","28","759","jocamilourimg@gmail.com");
INSERT INTO forgot_pass VALUES("29","30","12345678","sandoval.ing2005@gmail.com");
INSERT INTO forgot_pass VALUES("30","31","alexa","alexandra.gomez@imaginamos.com");
DROP TABLE IF EXISTS formulario;

CREATE TABLE `formulario` (
  `ud` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`ud`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO formulario VALUES("1","Oscar CarantÃ³n SÃ¡nchez","Imaginamos","breitner@misena.edu.co","123123","Prueba imaginamos");
INSERT INTO formulario VALUES("2","Oscar CarantÃ³n SÃ¡nchez","Imaginamos","oscar.caranton@imaginamos.com.co","123123","Prueba 2");
DROP TABLE IF EXISTS leidos;

CREATE TABLE `leidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `leido` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO leidos VALUES("1","1","3");
INSERT INTO leidos VALUES("2","1","2");
INSERT INTO leidos VALUES("3","1","3");
INSERT INTO leidos VALUES("4","1","3");
INSERT INTO leidos VALUES("5","1","2");
INSERT INTO leidos VALUES("6","2","3");
INSERT INTO leidos VALUES("7","2","2");
INSERT INTO leidos VALUES("8","2","4");
INSERT INTO leidos VALUES("9","18","4");
INSERT INTO leidos VALUES("10","18","3");
INSERT INTO leidos VALUES("11","21","2");
INSERT INTO leidos VALUES("12","22","3");
DROP TABLE IF EXISTS nosotros;

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(300) NOT NULL,
  `titulo2` varchar(300) NOT NULL,
  `img1` varchar(300) NOT NULL,
  `img2` varchar(300) NOT NULL,
  `img3` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `texto2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO nosotros VALUES("1","Terra capital group","Nuestra Misión y Visión","nosotros_1.jpg","nosotros1_1.jpg","nosotros2_1.jpg","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
DROP TABLE IF EXISTS noticias;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO noticias VALUES("2","LOREM IMPSUM DOLOR SIT AMET","Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.\nPellentesque habitant morbi tristique senectus et netus...","noticias_2.jpg","2013-06-27","2");
INSERT INTO noticias VALUES("3","LOREM IMPSUM DOLOR SIT AMET","Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.\nPellentesque habitant morbi tristique senectus et netus...","noticias_3.jpg","2013-06-18","1");
INSERT INTO noticias VALUES("4","LOREM IMPSUM DOLOR SIT AMET","Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.\nPellentesque habitant morbi tristique senectus et netus... ","noticias_4.png","2013-06-27","2");
DROP TABLE IF EXISTS parrafo_zs;

CREATE TABLE `parrafo_zs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `exclusiva` text NOT NULL,
  `condiciones` text NOT NULL,
  `registro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO parrafo_zs VALUES("1","uuuuuu","hooojjj","ooooooo","gggghhhhh");
DROP TABLE IF EXISTS servicios;

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto_corto` text NOT NULL,
  `texto_largo` text NOT NULL,
  `posicion` int(11) NOT NULL COMMENT 'Esta es la posicion del servicio 1 es ganaderia y equinos 2 es piscicultura y 3 es agroindustria',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO servicios VALUES("1","LA GANADERÍA ES MUY IMPORTANTE PARA NOSOTROS","equinos_1.jpg","En la hacienda La Carolina, en Doima, Tolima, a 25 kilómetros de Ibagué, somos especialistas en ganado Brangus rojo puro (5/8 Angus y 3/8 Brahman), de los que comerciamos semen de calidad entre las haciendas ganaderas de la región y el país. ","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n\n","1");
INSERT INTO servicios VALUES("2","LA PISCICULTURA ES MUY IMPORTANTE PARA NOSOT","equinos_2.jpg","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nIt has survived not only five centuries, but also the leap int","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with...","2");
INSERT INTO servicios VALUES("3","LA AGROINDUSTRIA ES MUY IMPORANTE PARA NOSOTROS","equinos_3.jpg","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","2");
DROP TABLE IF EXISTS servicios_imagenes;

CREATE TABLE `servicios_imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicios` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicios_imagenes_servicios_idx` (`id_servicios`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO servicios_imagenes VALUES("2","2","equinos_2.jpg","LA PISCICULTURA ES MUY IMPORTANTE PARA NOSOT","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
INSERT INTO servicios_imagenes VALUES("4","3","equinos_4.jpg","&#39; &#34; &#39; ","&#39;  &#34;&#34;&#34;&#34; &#39; &#39;&#39; &#39; &#39;&#39;&#39;");
INSERT INTO servicios_imagenes VALUES("15","1","equinos_15.jpg","LA GANADERÍA ES MUY IMPORTANTE PARA NOSOTRO","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#34;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n");
INSERT INTO servicios_imagenes VALUES("22","1","equinos_22.jpg","sdfdf","sdfgsdfg");
INSERT INTO servicios_imagenes VALUES("23","1","equinos_23.jpg","dsfgdfg","dfsgdfg");
INSERT INTO servicios_imagenes VALUES("24","2","equinos_24.jpg","dsasadg","fdsgdfsgsdfg fdsgsdg dfg ");
INSERT INTO servicios_imagenes VALUES("25","2","equinos_25.jpg","sdhsdfh","dshsdfh");
INSERT INTO servicios_imagenes VALUES("26","3","equinos_26.jpg","wtywrtywr","rtyertyert");
INSERT INTO servicios_imagenes VALUES("27","3","equinos_27.jpg","fdagdfg","adfgsdfg");
INSERT INTO servicios_imagenes VALUES("28","3","equinos_28.jpg","rgjherj","rgjerjej");
DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(300) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `contrasena` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("28","jose camilo","imaginamos","jocamilourimg@gmail.com","fa14d4fe2f19414de3ebd9f63d5c0169","44198620","hola","0");
INSERT INTO usuarios VALUES("29","jose","apple","jose@gmail.com","202cb962ac59075b964b07152d234b70","5735720","hi","0");
INSERT INTO usuarios VALUES("30","Diana Sandoval","Imaginamos","sandoval.ing2005@gmail.com","25d55ad283aa400af464c76d713c07ad","6546546","gfhgfhfgh","1");
INSERT INTO usuarios VALUES("31","alexandra","Imaginamos","alexandra.gomez@imaginamos.com","277f2a7ecb7cfcd264aeb2067fb46df8","12345","Pprueba","1");


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
