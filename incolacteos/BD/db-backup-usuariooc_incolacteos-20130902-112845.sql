/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS asociados;

CREATE TABLE `asociados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `id_asociados` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `posicion` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("20","banner_20.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("21","banner_21.jpg","2","index.php?seccion=index");
INSERT INTO banner VALUES("24","banner_24.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("25","banner_25.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("26","banner_26.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("28","banner_28.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("29","banner_29.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("30","banner_30.jpg","2","index.php?seccion=index");
INSERT INTO banner VALUES("31","banner_31.jpg","2","index.php?seccion=productos-california");
INSERT INTO banner VALUES("32","banner_32.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("34","banner_34.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("35","banner_35.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("36","banner_36.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("37","banner_37.jpg","2","index.php?seccion=index");



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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://repositorio.imaginamos.com/OC/incolacteos/admin/","http://repositorio.imaginamos.com/OC/incolacteos/","cms@imaginamos.com","imaginamos.com");



DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/home/view","checkmark");
INSERT INTO cms_menu VALUES("2","Quienes somos","modules/somos/view","group");
INSERT INTO cms_menu VALUES("3","Productos","modules/productos/view","briefcase");
INSERT INTO cms_menu VALUES("4","Promociones","modules/promociones/view","calendar");
INSERT INTO cms_menu VALUES("5","Contáctenos","modules/contactenos/view","headset");
INSERT INTO cms_menu VALUES("6","Newsletter","modules/newsletter/view","clipboard");
INSERT INTO cms_menu VALUES("7","Recetas","modules/recetas/view","diary");
INSERT INTO cms_menu VALUES("8","Configuración correos","modules/configuracion/view","usb");
INSERT INTO cms_menu VALUES("9","Correos","modules/correos/view","group");
INSERT INTO cms_menu VALUES("11","Suscriptores","modules/suscriptores/view","group");



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
INSERT INTO cms_user VALUES("2","Administrador","4fce3111e0bb887e488a59be08068f01","incolacteos@imaginamos.com","user");



DROP TABLE IF EXISTS correo1;

CREATE TABLE `correo1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contactenos` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO correo1 VALUES("1","servicioalcliente@incolacteos.com.co");



DROP TABLE IF EXISTS correo2;

CREATE TABLE `correo2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peticion` varchar(255) NOT NULL,
  `queja` varchar(255) NOT NULL,
  `recurso` varchar(255) NOT NULL,
  `otro` varchar(255) NOT NULL,
  `contactenos` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO correo2 VALUES("1","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co");



DROP TABLE IF EXISTS correos;

CREATE TABLE `correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peticion` varchar(300) NOT NULL,
  `queja` varchar(300) NOT NULL,
  `recurso` varchar(300) NOT NULL,
  `otro` varchar(300) NOT NULL,
  `contactenos` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO correos VALUES("1","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co","servicioalcliente@incolacteos.com.co");



DROP TABLE IF EXISTS destacados_home;

CREATE TABLE `destacados_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `subtitulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO destacados_home VALUES("1","Linea ","Blanquita","destacados_1.jpg","index.php?seccion=promociones");
INSERT INTO destacados_home VALUES("2","Visita ","nuestro punto","destacados_2.jpg","index.php?seccion=promociones");
INSERT INTO destacados_home VALUES("3","Tapa ganadora","Tampico","destacados_3.jpg","index.php?seccion=promociones");



DROP TABLE IF EXISTS footer;

CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `direccion1` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `fax` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO footer VALUES("1","Bogotá","Distrito Occidente","Diagonal 63 F No. 86 - 35","057 (1) 4386490","057 (1) 223 4911","servicioalcliente@incolacteos.com.co");
INSERT INTO footer VALUES("2","Bogotá","Distrito Centro","Cra 34 No. 19 - 17","057 (1) 3517501 - 057 (1) 3517766","057 (1) 3517501","servicioalcliente@incolacteos.com.co");
INSERT INTO footer VALUES("6","Simijaca","Simijaca","Valle del Simijaca Km1 Via Chiquinquira","057 (1) 8555432","057 (1) 8555432","servicioalcliente@incolacteos.com.co");
INSERT INTO footer VALUES("7","Barranquilla","Costa Atlantica ","Autopista al aeropuerto","057 (5) 3344899","057 (5) 3344899","servicioalcliente@california.com.co");
INSERT INTO footer VALUES("8","Bucaramanga","Km 2 ","Autopista Floridablanca No. 124 – 75","057 (5) 6361123","057 (5) 6361123 Ext. 139","serviciocliente@lechesan.com.co");



DROP TABLE IF EXISTS form_contactenos;

CREATE TABLE `form_contactenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `ciudad` varchar(300) NOT NULL,
  `telefono` int(50) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO form_contactenos VALUES("1","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","prueba");
INSERT INTO form_contactenos VALUES("2","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","prueba");
INSERT INTO form_contactenos VALUES("3","jose camilo","bogota","4345689","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("4","jose camilo","bogota","4419862","jov@h.c","Queja","hi");
INSERT INTO form_contactenos VALUES("5","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("6","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("7","jose camilo","bogota","44198620","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("8","jose camilo","bogota","4419862","jov@h.c","Peticion","k.o");
INSERT INTO form_contactenos VALUES("9","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("10","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("11","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("12","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("13","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("14","jose camilo","bogota","4419862","jocamilour@hotmail.com","Otro","jo");
INSERT INTO form_contactenos VALUES("15","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","k");
INSERT INTO form_contactenos VALUES("16","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("17","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("18","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","gh");
INSERT INTO form_contactenos VALUES("19","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("20","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","hi");
INSERT INTO form_contactenos VALUES("21","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","ji");
INSERT INTO form_contactenos VALUES("22","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","hi");
INSERT INTO form_contactenos VALUES("23","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","hi");
INSERT INTO form_contactenos VALUES("24","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","gg");
INSERT INTO form_contactenos VALUES("25","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","hi");
INSERT INTO form_contactenos VALUES("26","jose camilo","bogota","4419862","jocamilour@hotmail.com","Queja","jjjj");
INSERT INTO form_contactenos VALUES("27","jose camilo","bogota","4419862","jocamilour@hotmail.com","Peticion","jjjjj");
INSERT INTO form_contactenos VALUES("28","Mauricio Sanchez Castaño","Bogota","3517766","emauriciosanchez@hotmail.com","Peticion","prueba");
INSERT INTO form_contactenos VALUES("29","Mauricio Sanchez Castaño","Bogota","3517766","emauriciosanchez@hotmail.com","Peticion","sss");



DROP TABLE IF EXISTS form_contacto;

CREATE TABLE `form_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

INSERT INTO form_contacto VALUES("1","Oscar Carantón Sánchez","asdfasdf@asdf.asdf","123123","asdf asdf asdf asdf ");
INSERT INTO form_contacto VALUES("2","Oscar Carantón Sánchez","asdfasdf@asdf.asdf","123123","asdf asdf asdf asdf ");
INSERT INTO form_contacto VALUES("3","asdfasdf","asdfasdf@asdf.asdf","123123","asdf asdf asdf");
INSERT INTO form_contacto VALUES("4","Oscar Carantón Sánchez","asdfasdf@asdf.asdf","123123","asdf asdf asd fasdf");
INSERT INTO form_contacto VALUES("5","Oscar Carantón Sánchez","asdfasdf@asdf.asdf","123123","SDA FASDF ASDF ");
INSERT INTO form_contacto VALUES("6","asdfasdf","asdfasdf@asdf.asdf","1231231 123123","asdfasdfasdfasdf");
INSERT INTO form_contacto VALUES("7","asdfasdf","asdfasdf@asdf.asdf","1231231 123123","asdfasdfasdfasdf");
INSERT INTO form_contacto VALUES("8","asdfasdfasdfasdf","asdfasdf@asdf.asdf","1123","sdaf asdfasd f");
INSERT INTO form_contacto VALUES("9","Oscar Carantón Sánchez","asdfasdf@asdf.asdf","123123","sa dfasd fasdf");
INSERT INTO form_contacto VALUES("10","hhh","hhh@jhjh.com","454648","");
INSERT INTO form_contacto VALUES("11","hhh","hhh@jhjh.com","454648","");
INSERT INTO form_contacto VALUES("12","jose camilo","jocamilour@hotmail.com","4419862","hola");
INSERT INTO form_contacto VALUES("13","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("14","jose camilo","jocamilour@hotmail.com","4419862","prueba");
INSERT INTO form_contacto VALUES("15","jose camilo","jocamilour@hotmail.com","4419862","p");
INSERT INTO form_contacto VALUES("16","jose camilo","jocamilourimg@gmail.com","3123548991","hi");
INSERT INTO form_contacto VALUES("17","jose camilo","jocamilour@hotmail.com","3123548991","j");
INSERT INTO form_contacto VALUES("18","jose camilo","jov@h.c","4419862","hi");
INSERT INTO form_contacto VALUES("19","jose camilo","jocamilour@hotmail.com","3123548991","lll");
INSERT INTO form_contacto VALUES("20","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("21","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("22","jose camilo","jocamilour@hotmail.com","3123548991","hi");
INSERT INTO form_contacto VALUES("23","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("24","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("25","jose camilo","jocamilour@hotmail.com","3123548991","hi");
INSERT INTO form_contacto VALUES("26","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("27","jose camilo","jocamilour@hotmail.com","4419862","fhgf");
INSERT INTO form_contacto VALUES("28","jose camilo","jocamilour@hotmail.com","4419862","fhgf");
INSERT INTO form_contacto VALUES("29","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("30","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("31","jose camilo","jocamilour@hotmail.com","4345689","hola");
INSERT INTO form_contacto VALUES("32","jose camilo","jocamilour@hotmail.com","4345689","hi");
INSERT INTO form_contacto VALUES("33","jose camilo","jocamilour@hotmail.com","4345689","jolidf");
INSERT INTO form_contacto VALUES("34","jose camilo","jocamilour@hotmail.com","4345689","fdghdf");
INSERT INTO form_contacto VALUES("35","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("36","jose camilo","jocamilour@hotmail.com","4419862","hi");
INSERT INTO form_contacto VALUES("37","jose camilo","jocamilour@hotmail.com","4419862","hi9");
INSERT INTO form_contacto VALUES("38","jose camilo","jocamilour@hotmail.com","4419862","prueba sena");
INSERT INTO form_contacto VALUES("39","jose camilo","jocamilour@hotmail.com","44198620","hi");
INSERT INTO form_contacto VALUES("40","HUMBERTO CARVAJAL","hcarvajal@california.com.co","3517766","prueba  prueba");
INSERT INTO form_contacto VALUES("41","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba q");
INSERT INTO form_contacto VALUES("42","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba 3");
INSERT INTO form_contacto VALUES("43","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","sssss");
INSERT INTO form_contacto VALUES("44","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","sssss");
INSERT INTO form_contacto VALUES("45","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba 444444");
INSERT INTO form_contacto VALUES("46","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","pruebaaaa");
INSERT INTO form_contacto VALUES("47","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","pruebaaaa");
INSERT INTO form_contacto VALUES("48","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","pruebaaaa");
INSERT INTO form_contacto VALUES("49","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envío de correos con nueva configuración");
INSERT INTO form_contacto VALUES("50","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envío de correos con nueva configuración");
INSERT INTO form_contacto VALUES("51","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba envío correos nueva configuración");
INSERT INTO form_contacto VALUES("52","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba envío correos nueva configuración");
INSERT INTO form_contacto VALUES("53","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envío de correos con configuración nueva");
INSERT INTO form_contacto VALUES("54","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba home");
INSERT INTO form_contacto VALUES("55","Alexandra","alexandra.gomez@imaginamos.com","123456","Prueba");
INSERT INTO form_contacto VALUES("56","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba home");
INSERT INTO form_contacto VALUES("57","mauricio sanchez","emauriciosanchez@hotmail.com","3517766","prueba");
INSERT INTO form_contacto VALUES("58","mauricio sanchez","emauriciosanchez@hotmail.com","3517766","prueba");
INSERT INTO form_contacto VALUES("59","mauricio sanchez","emauriciosanchez@hotmail.com","3517766","prueba");
INSERT INTO form_contacto VALUES("60","mauricio sanchez","emauriciosanchez@hotmail.com","3517766","prueba");
INSERT INTO form_contacto VALUES("61","mauricio sanchez","emauriciosanchez@hotmail.com","3517766","prueba");
INSERT INTO form_contacto VALUES("62","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","mensaje de prueba");
INSERT INTO form_contacto VALUES("63","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","mensaje de prueba");
INSERT INTO form_contacto VALUES("64","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","mensaje de prueba");
INSERT INTO form_contacto VALUES("65","Felipe","felipe.camacho@imaginamos.com","6767676","mensaje");
INSERT INTO form_contacto VALUES("66","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","mensaje");
INSERT INTO form_contacto VALUES("67","Felipe","felipe.camacho@imaginamos.com","6767676","mensaje");
INSERT INTO form_contacto VALUES("68","Alexandra","alexandra.gomez@imaginamos.com","123456","Prueba");
INSERT INTO form_contacto VALUES("69","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envio de mensajes");
INSERT INTO form_contacto VALUES("70","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envio de mensajes");
INSERT INTO form_contacto VALUES("71","Felipe Camacho","felipe.camacho@imaginamos.com","6738631","prueba de envio de mensajes");
INSERT INTO form_contacto VALUES("72","Mauricio Sanchez Castaño","emauriciosanchez@hotmail.com","3517766","prueba home");
INSERT INTO form_contacto VALUES("73","rodrigo","rodriamorales@hotmail.com","3517766","jshjddkkfjfoñkf");



DROP TABLE IF EXISTS form_news;

CREATE TABLE `form_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `suscripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO form_news VALUES("2","Alexandra Gómez","alexandra.gomez@imaginamos.com","Incolacteos");
INSERT INTO form_news VALUES("5","HUMBERTO CARVAJAL","hcarvajal@california.com.co","California");
INSERT INTO form_news VALUES("6","Mauriciio Sanchez ","emauriciosanchez@hotmail.com","California");



DROP TABLE IF EXISTS ingredientes;

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `ingrediente` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

INSERT INTO ingredientes VALUES("16","1","Sal 1 pizca");
INSERT INTO ingredientes VALUES("6","4","Leche");
INSERT INTO ingredientes VALUES("8","4","Leche2 ");
INSERT INTO ingredientes VALUES("9","4","Leche33");
INSERT INTO ingredientes VALUES("10","3","Ingrediente");
INSERT INTO ingredientes VALUES("11","3","Ingrediente");
INSERT INTO ingredientes VALUES("12","3","Ingrediente");
INSERT INTO ingredientes VALUES("15","1","Canela");
INSERT INTO ingredientes VALUES("14","4","dulce");
INSERT INTO ingredientes VALUES("17","1","Esencia de arequipe/de almendr");
INSERT INTO ingredientes VALUES("18","1","Uvas pasas 100 gr");
INSERT INTO ingredientes VALUES("19","1","Azucar 1cda");
INSERT INTO ingredientes VALUES("20","1","Leche condensada 200 gr");
INSERT INTO ingredientes VALUES("21","1","Crema de leche 150 gr");
INSERT INTO ingredientes VALUES("22","1","1 litro de leche LECHESAN");
INSERT INTO ingredientes VALUES("23","1","Arroz 1/2 taza ");
INSERT INTO ingredientes VALUES("24","5","ALBONDIGAS:");
INSERT INTO ingredientes VALUES("25","5","1 libra de carne de res molida");
INSERT INTO ingredientes VALUES("26","5","1/3  taza de pan comun rallado");
INSERT INTO ingredientes VALUES("27","5","2 cdas de cilantro picado");
INSERT INTO ingredientes VALUES("28","5","1 cucharadita de comino molido");
INSERT INTO ingredientes VALUES("29","5","media cucharadita de sal ");
INSERT INTO ingredientes VALUES("30","5","1 pizca de pimienta molida");
INSERT INTO ingredientes VALUES("31","5","media taza de cebolla rallada");
INSERT INTO ingredientes VALUES("32","5","2 cucharaditas de ajo picado");
INSERT INTO ingredientes VALUES("33","5","2 huevos grandes, batidos");
INSERT INTO ingredientes VALUES("34","5","1 paquete (16 oz.) de pasta ");
INSERT INTO ingredientes VALUES("35","6","3 platanos");
INSERT INTO ingredientes VALUES("36","6","2 tazas aceite vegetal");
INSERT INTO ingredientes VALUES("37","6","1 lb de carne de res");
INSERT INTO ingredientes VALUES("38","6","3 tomates");
INSERT INTO ingredientes VALUES("39","6","2 dientes de ajo");
INSERT INTO ingredientes VALUES("40","6","media cebolla");
INSERT INTO ingredientes VALUES("41","6","SALSA DE TOMATE CALIFORNIA");
INSERT INTO ingredientes VALUES("42","6","media taza de caldo de carne");
INSERT INTO ingredientes VALUES("43","6","media lb de queso campesino");
INSERT INTO ingredientes VALUES("44","6","Sal, pimienta y comino");
INSERT INTO ingredientes VALUES("46","7","2 tazas de ahuyama picada");
INSERT INTO ingredientes VALUES("47","7","1 taza de ARVEJAS CALIFORNIA");
INSERT INTO ingredientes VALUES("48","7","3 tazas de agua ");
INSERT INTO ingredientes VALUES("49","7","Tostaditas de pan para decorar");
INSERT INTO ingredientes VALUES("50","5","PARA LA SALSA:");
INSERT INTO ingredientes VALUES("51","5","28 onzas de PASTA DE TOMATE CALIFORNIA");
INSERT INTO ingredientes VALUES("52","5","Media taza de cebolla rallada");
INSERT INTO ingredientes VALUES("53","5","1 taza de caldo de pollo");
INSERT INTO ingredientes VALUES("54","5","2 cucharaditas de comino molido");
INSERT INTO ingredientes VALUES("55","5","1 cucharada de oregano seco ");
INSERT INTO ingredientes VALUES("56","5","2 dientes de ajo enteros, pelados y majados ");
INSERT INTO ingredientes VALUES("57","5","2 cucharadas de aceite de oliva");
INSERT INTO ingredientes VALUES("58","5","Cilantro fresco picado, para decorar (opcional)");
INSERT INTO ingredientes VALUES("59","8","30 ccs de aceite");
INSERT INTO ingredientes VALUES("60","8","1 cabeza de ajo");
INSERT INTO ingredientes VALUES("61","8","1 cebolla mediana");
INSERT INTO ingredientes VALUES("62","8","150 gramos de chorizo para guisar");
INSERT INTO ingredientes VALUES("63","8","1 cucharada de harina");
INSERT INTO ingredientes VALUES("64","8","2 hojas de laurel");
INSERT INTO ingredientes VALUES("65","8","450 gramos de lentejas");
INSERT INTO ingredientes VALUES("66","8","1 pastilla de caldo");
INSERT INTO ingredientes VALUES("67","8","1 pizca de pimenton dulce");
INSERT INTO ingredientes VALUES("68","8","50 gramos jamon");
INSERT INTO ingredientes VALUES("69","8","2 cucharadas de PASTA DE TOMATE CALIFORNIA");



DROP TABLE IF EXISTS phpmailer;

CREATE TABLE `phpmailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SMTPAuth` varchar(300) NOT NULL,
  `SMTPSecure` varchar(300) NOT NULL,
  `Host` varchar(300) NOT NULL,
  `Port` varchar(300) NOT NULL,
  `Username` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Froms` varchar(300) NOT NULL,
  `FromName` varchar(300) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO phpmailer VALUES("1","true","tsl","mail.california.com.co","25","servicioalcliente@incolacteos.com.co","Blanquita123","servicioalcliente@incolacteos.com.co","Incolacteos - ","Formulario de Contacto - ");



DROP TABLE IF EXISTS productos;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `posicion` int(11) NOT NULL COMMENT '1 incolacteos, 2 lechesan, 3 importados',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

INSERT INTO productos VALUES("28","productos_28.jpg","Néctares  ","1");
INSERT INTO productos VALUES("29","productos_29.jpg","Refrescos","1");
INSERT INTO productos VALUES("30","productos_30.jpg","Jugos premium","1");
INSERT INTO productos VALUES("31","productos_31.jpg","Agua","1");
INSERT INTO productos VALUES("32","productos_32.jpg","Mermeladas","1");
INSERT INTO productos VALUES("33","productos_33.jpg","Salsas","1");
INSERT INTO productos VALUES("34","productos_34.jpg","Mayonesa","1");
INSERT INTO productos VALUES("35","productos_35.jpg","Pasta y Bolognesa","1");
INSERT INTO productos VALUES("36","productos_36.jpg","Arvejas","1");
INSERT INTO productos VALUES("37","productos_37.jpg","Brevas","1");
INSERT INTO productos VALUES("38","productos_38.jpg","Vinagres","1");
INSERT INTO productos VALUES("39","productos_39.jpg","Leche bolsa","2");
INSERT INTO productos VALUES("40","productos_40.jpg","Leche caja","2");
INSERT INTO productos VALUES("41","productos_41.jpg","Leche saborizada","2");
INSERT INTO productos VALUES("42","productos_42.jpg","Yogurt","2");
INSERT INTO productos VALUES("43","productos_43.jpg","Avena","2");
INSERT INTO productos VALUES("44","productos_44.jpg","Arequipe","2");
INSERT INTO productos VALUES("45","productos_45.jpg","Chubby","3");
INSERT INTO productos VALUES("46","productos_46.jpg","Agua viva","3");
INSERT INTO productos VALUES("47","productos_47.jpg","Tampico","3");
INSERT INTO productos VALUES("48","productos_48.jpg","Kumis","2");



DROP TABLE IF EXISTS productos_detalles;

CREATE TABLE `productos_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_productos` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `receta` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_detalles_productos1_idx` (`id_productos`),
  CONSTRAINT `productos_detalles_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

INSERT INTO productos_detalles VALUES("28","28","Néctar","productos_28.jpg"," Los néctares California son una bebida con pura fruta, no tienen adición de colorantes ni saborizantes. ","0");
INSERT INTO productos_detalles VALUES("29","29","Refrescos","productos_29.jpg","Son una bebida refrescante elaborada a partir de frutas naturales.","0");
INSERT INTO productos_detalles VALUES("30","30","Jugos Premium","productos_30.jpg","100% jugos clarificados, sus componentes provienen exclusivamente de la fruta. No tienen adición de ningún elemento químico que los pueda hacer nocivos, ni conservantes, ni espesantes.  
\n","0");
INSERT INTO productos_detalles VALUES("31","31","Agua","productos_31.jpg","Agua California es un agua potable, tratada mediante proceso de ozonización. ","0");
INSERT INTO productos_detalles VALUES("32","32","Mermelada","productos_32.jpg","Producto obtenido a través de la mezcla de pulpa de fruta y azúcar.","0");
INSERT INTO productos_detalles VALUES("33","33","Salsa de tomate","productos_33.jpg","Es una salsa elaborada con el concentrado de tomate de la mas alta calidad.","6");
INSERT INTO productos_detalles VALUES("34","34","Mayonesa ","productos_34.jpg","Baja en grasa y calorías, es un complemento ideal para una alimentación saludable, ideal para una dieta controlada. ","0");
INSERT INTO productos_detalles VALUES("35","35","Pasta de Tomate y Bolognesa","productos_35.jpg","Pasta de Tomate:  Es un concentrado de tomate de fina textura. Utilizado para la preparación de diversos platos.
\n
\nBolognesa:  Es una salsa que combina mezcla de tomate, carnes seleccionadas y especies, especial para acompañar pastas u otras preparaciones. ","5");
INSERT INTO productos_detalles VALUES("36","36","Arvejas","productos_36.jpg","En conservas envasadas previo tratamiento térmico que asegura una  larga vida útil. ","7");
INSERT INTO productos_detalles VALUES("37","37","Brevas","productos_37.jpg","Exquisito postre obtenido de cuidadosa selección de brevas suspendidas en dulce de almibar.","0");
INSERT INTO productos_detalles VALUES("38","38","Vinagres","productos_38.jpg","Aderezo de origen natural, sus presentaciones son de fácil manejo y almacenamiento, vinagre blanco y con sabor a frutas.","0");
INSERT INTO productos_detalles VALUES("39","39","Leche UHT Bolsa","productos_39.jpg","Leche UHT Larga Vida en Bolsa Entera: Alimento ideal para una dieta saludable de niños y adolecentes en crecimiento, con todo el contenido energético necesario.","0");
INSERT INTO productos_detalles VALUES("40","40","Leche UHT Tetra Brick","productos_40.jpg","Leche UHT Larga Vida en Caja Tetra Brick las 7 capas de Tetra Pak aseguran la protección de todos los nutrientes más importantes de la leche, contra los agentes externos como la luz, el oxigeno y la aisla de los olores de otros productos manteniendo la leche fresca.","0");
INSERT INTO productos_detalles VALUES("41","41","Leche saborizada","productos_41.jpg","Es una leche saborizada con alto contenido energético, no tienen conservantes. Ideal para la lonchera.","0");
INSERT INTO productos_detalles VALUES("42","42","Yogurt","productos_42.jpg","Delicioso yogurt con sabores de fresa, mora y melocotón. Protegen y regulan la flora intestinal. Un alimento rico y  nutritivo que influye positivamente en nuestro organismo.","0");
INSERT INTO productos_detalles VALUES("43","43","Avena","productos_43.jpg","Es una bebida ultra pasteurizada lista para consumir, con 2 ricos sabores natural y canela. ","0");
INSERT INTO productos_detalles VALUES("44","44","Arequipe","productos_44.jpg","Postre lácteo obtenido a través de la concentración de la leche y el azúcar, con delicioso sabor acaramelado lácteo. ","0");
INSERT INTO productos_detalles VALUES("45","45","Chubby","productos_45.jpg","Bebida ligeramente carbonatada con sabor mágico para niños, su empaque es divertido y tiene gran variedad de sabores.","0");
INSERT INTO productos_detalles VALUES("46","46","Agua viva","productos_46.jpg","es un agua ligeramente carbonatada de sabores naturales. Es una bebida baja en calorías endulzada con Splenda. ","0");
INSERT INTO productos_detalles VALUES("47","47","Tampico","productos_47.jpg","Somos uno de los principales productores, distribuidores y comercializadores de Tampico, el original Citrus Punch.
\n*Producto disponible en Boyaca y Costa Atlantica","0");
INSERT INTO productos_detalles VALUES("48","48","Kumis","productos_48.jpg","Rico acompañante de tus alimentos favoritos.","0");



DROP TABLE IF EXISTS promociones;

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO promociones VALUES("6","productos_6.jpg","Linea de atención al cliente Blanquita","Pedidos sugerencias y reclamos 
\n3517500");
INSERT INTO promociones VALUES("7","productos_7.jpg","Tapa ganadora Tampico","Busca en tu tampico pet 300 ml y 500 ml la tapa marcada con la promoción");
INSERT INTO promociones VALUES("8","productos_8.jpg","Puntos de Venta Nacionales","Encuentre todo nuestro portafolio de productos California y Lechesan a los mejores precios en nuestros puntos de venta nacionales.
\n.                             .
\n.                             .
\nBusca el mas cercano.");
INSERT INTO promociones VALUES("9","productos_9.jpg","Vasos Lechesan","Compre Lechesan, reuna 10 bolsas y reclame un vaso de vidrio con diseño especial. Aplica para Boyacá, Tolima y Meta");
INSERT INTO promociones VALUES("10","productos_10.jpg","California y Lechesan con la Selección!","Por tus compras iguales o superiores a 10 mil pesos en nuestro punto de venta, participas en la polla California Lechesan. Preparate a ganar");
INSERT INTO promociones VALUES("11","productos_11.jpg","Lechesan 1200ml llega al Meta","Pide desde hoy la nueva Lechesan 1200ml en tu tienda mas cercana. Aplica solo para el departamento del Meta");



DROP TABLE IF EXISTS promociones_detalles;

CREATE TABLE `promociones_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promociones` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promociones_detalles_promociones_idx` (`id_promociones`),
  CONSTRAINT `promociones_detalles_ibfk_1` FOREIGN KEY (`id_promociones`) REFERENCES `promociones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO promociones_detalles VALUES("6","6","Linea de atención al cliente Blanquita","comuníquese con Blanquita","productos_6.jpg");
INSERT INTO promociones_detalles VALUES("7","7","Tapa Ganadora Tampico","Compra tu Tampico de 300ml y de 500ml y busca en el interior de las tapas, espectaculares premios como Xbox, tablets y Motos, además de muchos Tampico gratis.  Promoción válida para Boyacá, Casanare y Costa Atlantica.
\n
\nCONCURSO DE TAMPICO® LICENCIATARIO “TAPA GANADORA”
\nTÉRMINOS Y CONDICIONES
\nTodo comprador de productos TAMPICO® de LICENCIATARIO en sus presentaciones botella por 300ml, 500ml con tapa premiada que indica la promoción; que decida participar en el concurso, reconoce haber leído, entendido y aceptado los términos y condiciones del mismo. 
\nDuración de la Promoción y cobertura.
\nEl concurso comienza el 22 de julio y terminaría  el 31 de agosto y/o hasta agotar existencia, se llevará a cabo a nivel nacional en las diferentes ciudades del país donde se comercializa TAMPICO producido por LICENCIATARIO.  
\nMétodo de Participación
\n•	La participación sólo se activa al comprar TAMPICO® Citrus, TAMPICO® Sabores, en sus presentaciones 300 y 500cc con tapa premiada que indica la promoción; producidos por LICENCIATARIO
\n•	El participante deberá encontrar una tapa con un texto interior y así participar por espectaculares premios.
\n•	En caso de ser uno de los ganadores, el participante deberá presentar la tapa con el texto respectivo para reclamar su premio.
\n
\nLa información referente a los premios y al método de participación forma parte de estos términos y condiciones. 
\n1.	Se asignarán mediante un determinado número de tapas premiadas los siguientes artículos: (2) MOTOS, MARCA AYCO AY125-6ZERO  (4) XBOX 360, 4GB, CONSOLA CON UN CONTROL. (20)Tablet SION 512 MB, WIFI, ANDROID 4.0 CON CÁMARA MAS ESTUCHE DE CUERO. Ningún premio se puede redimir por efectivo.
\n
\n2.	Los premios son intransferibles y deben reclamarse con las presentaciones de TAMPICO® Citrus, TAMPICO® Sabores,   en botella por 300ml, 500ml con tapa premiada.
\n
\n3.	Estos términos legales aplican únicamente para la República de Colombia.	
\n
\n
\n	
\n
\n
\n
\nElegibilidad
\n1.	Si el ganador es menor de edad, deberá acudir con alguno de sus padres o su tutor legalmente reconocido. Podrán participar todos los trabajadores, distribuidores, emprendedores de LICENCIATARIO y sus familiares, compañías, agencias de publicidad y revendedores.
\n2.	LICENCIATARIO, se reserva el derecho de verificar, en cualquier momento, la validez y originalidad  de las tapas y de los participantes (incluyendo la identidad, edad y lugar de residencia de un participante) y de descalificar y rechazar todos las tapas de cualquier participante que LICENCIATARIO crea haya actuado en contra de estas condiciones o haya modificado alguna tapa, o quien no actúa de buena fe.
\n3.	LICENCIATARIO puede rechazar cualquier tapa ilegible, corrupto o inconforme.  
\nSorteo de los Premios
\nDurante la promoción, el participante podrá ganar espectaculares premios de manera  instantánea al leer en el interior de la tapa de las referencias participantes en botella, la persona ganadora deberá llamar a la línea de servicio al cliente 3517766 ó  escribir a: trademarketing@incolacteos.com.co para  ser informado de la manera de reclamar el premio.
\nLa forma de entregar los premios será concretada con las personas ganadoras, según las circunstancias de ubicación, distancia entre otras.
\nSelección del Ganador 
\n1.	Una vez los ganadores se hayan contactado, a la línea de servicio al cliente  se coordinarán los detalles de entrega de los premios, horarios y que días.  La caducidad para reclamar los premios  es de 30 días calendario, a partir de la fecha que se notifique al ganador dónde debe recoger el premio.  En caso de no reclamarse, LICENCIATARIO se reserva el derecho a otorgar el premio a otra persona, según su criterio.
\n
\nPremios
\n(6) MOTOS, MARCA AYCO AY125-6ZERO La marca y características de estos serán las especificadas por LICENCIATARIO, y los ganadores no podrán solicitar ningún cambio de las mismas; Los gastos de matrícula y seguro corren por cuenta del ganador.
\n(10) XBOX 360, 4GB, CONSOLA CON UN CONTROL. La marca y las características de estos serán las especificadas por LICENCIATARIO. y los ganadores no podrán solicitar ningún cambio de las mismas.
\n(60)Tablet SION 512 MB, 7”,WIFI, ANDROID 4.0, CON CÁMARA MAS ESTUCHE DE CUERO. La marca y características de estos serán las especificadas por LICENCIATARIO. y los ganadores no podrán solicitar ningún cambio de las mismas.
\n
\nCondiciones
\n1.	Es indispensable que los ganadores presenten la tapa ganadora con el premio impreso y su respectivo documento de identidad para poder reclamar el premio. En el caso de que el ganador no tenga en su poder la tapa, no podrá hacerse acreedor del premio.
\n2.	El/La ganador(a) es responsable de retirar su premio en la dirección que se les indique.
\n3.	Otras condiciones concernientes al premio son:
\na.	El premio deberá ser recibido por el ganador o por su apoderado, calidad ésta última que deberá acreditar mediante poder especial autenticado ante notario. 
\nb.	En caso de que el ganador sea un menor de edad, su acompañante debe ser  un familiar mayor de 18 años de nacionalidad Colombiana y con residencia dentro del territorio de la República de Colombia. 
\nc.	Los premios o cualquier parte no utilizada de un premio no puede ser transferido, intercambiado o tomado como efectivo.
\nd.	LICENCIATARIO. se reserva el derecho de anular o cancelar el premio de cualquier ganador de la actividad promocional quien no provea inmediatamente, plena verificación a razonable satisfacción de LICENCIATARIO., de identidad y calificaciones propias cuando sea requerido por LICENCIATARIO.
\ne.	LICENCIATARIO. se reserva el derecho de asignar una tercera persona para conducir la verificación de los ganadores  y cumplir con la entrega de los premios y, los participantes aceptan que LICENCIATARIO. provea toda la información necesaria de los participantes a dicha tercera persona para facilitar dicho servicio.
\nf.	Las decisiones de LICENCIATARIO. son definitivas y no habrá correspondencia al respecto. 
\ng.	Salvo expresamente declarado dentro de estas condiciones, todo gasto de participación es responsabilidad del ganador. 
\nh.	LICENCIATARIO. no acepta responsabilidad por cualquier implicancia de impuestos que pueda surgir de ganar un premio. Se deberá buscar consejo financiero y/o jurídico independiente.
\n
\n
\nPublicidad
\n1.	Los ganadores de los premios deberán, a solicitud de LICENCIATARIO. y libre de cualquier retribución o pago, participar en cualquier actividad promocional (tal como publicidad y fotografía) relacionado a la recepción del premio de acuerdo a lo solicitado razonablemente por LICENCIATARIO.  para fines promocionales.
\n2.	Los participantes aceptan que LICENCIATARIO. use sus nombres, aspecto, imagen y/o voz (incluyendo fotografía, película y/o grabación de la misma) en cualquier medio, por un período de tiempo ilimitado sin remuneración con el propósito de promocionar el sorteo (incluyendo cualquier resultado) o promocionando cualquier producto comercializado o provisto por LICENCIATARIO. 
\n3.	Cada participante acepta que la información provista cuando se inscribe sea ingresada en una base de datos y que LICENCIATARIO. puede usar esta información en cualquier medio para futuros propósitos promocionales, de marketing y publicidad sin referencia o pago u otra compensación para el Participante. LICENCIATARIO. recogerá su información personal a fin de permitir la conducción de los premios y para aquellos propósitos promocionales, de marketing y publicidad.  Administrando tales promociones, LICENCIATARIO puede divulgar su información para otras acciones promocionales. Todos los datos personales de los participantes serán guardados por el agente de LICENCIATARIO Una solicitud de acceder, actualizar o corregir cualquier información, deberá ser dirigida a LICENCIATARIO.
\nProblemas afectando la actividad.
\n1.	Si la actividad promocional, fuese interferida y en cualquier modo o por cualquier razón, cualquier aspecto de la actividad promocional no pudiese ser llevado a cabo de acuerdo a lo planeado debido a cualquier motivo más allá del control razonable de LICENCIATARIO, invasión o intervención no autorizada, fraude, fallas técnicas o errores o cualquier otra causa fuera del control de LICENCIATARIO. que corrompe o afecta la administración, seguridad, justicia, integridad o correcta conducción de esta actividad, LICENCIATARIO. puede a su discreción pero sujeto a cualquier dirección escrita de una autoridad regulatoria, cancelar, terminar, modificar, diferir o suspender esta actividad.
\n2.	En caso de guerra, terrorismo, (o de amenaza de estas), estado de emergencia o desastre, LICENCIATARIO. se reserva el derecho de cancelar, terminar, modificar o suspender la actividad promocional, sujeta a cualquier dirección escrita de las varias autoridades regulatorias. 
\nExclusión de responsabilidad
\n1.	Excepto por y hasta el punto de cualquier responsabilidad que no pueda ser excluida por ley, LICENCIATARIO. (incluyendo sus oficiales, empleados, contratados, proveedores y agentes) se excluye (y los participantes liberan a cada una de esas partes ) de toda responsabilidad (incluyendo rotura de contrato, negligencia y falta al deber) por cualquier lesión o muerte, o cualquier pérdida o daño (incluyendo sin limitación pérdida de oportunidad o infracción de privacidad, situación embarazosa, inconveniente o difamación) ya sea directa o indirectamente, especial o consecuencial, surgiendo en cualquier modo de la actividad promocional o en relación a un premio. 
\n2.	La exclusión de responsabilidad en el párrafo anterior incluye, pero no se limita a, la exclusión de cualquier responsabilidad que surge de lo siguiente: 
\n
\na.	Hurto, acceso no autorizado o impropio  o interferencia de terceras partes.
\n
\n
\nb.	Cualquier variación en el valor de premios con respecto a lo detallado en estas Condiciones.
\n
\nc.	Cualquier responsabilidad impositiva incurrida por un Participante.
\n
\nd.	Aceptar y disfrutar del premio o participación en la actividad promocional, o cualquier cosa que ocurra o haya sido omitido en referencia a cualquiera.
\n
\ne.	LICENCIATARIO. puede poner en vigencia o no cualquiera de estas Condiciones o el hecho o publicación de detalles de puesta en vigencia por parte de LICENCIATARIO. o de las consecuencias de la vigencia de cualquiera de estas Condiciones.
\n
\n3.	Aquellos que aceptan el premio lo hacen a su entero y exclusivo riesgo y deben tomar sus propias decisiones acerca de la conveniencia de participar.
\nGeneral
\n1.	LICENCIATARIO. se reserva el derecho de cambiar estas Condiciones y de hacer y publicar interpretaciones de estas condiciones sin previo aviso. 
\n2.	Se considerará que un participante ha tomado nota de dichas modificaciones e interpretaciones cuando las mismas han sido publicadas en el sitio Web y en otros medios de comunicación, se considerará que dichas modificaciones o interpretaciones han sido aceptadas en virtud que el/ella han continuado participando en la actividad.  Si un participante no desease continuar participando, como consecuencia de los Términos y Condiciones vigentes tal como han sido modificados o interpretados puede concluir su participación. 
\n3.	LICENCIATARIO. puede a su absoluta discreción extender cualquier límite de tiempo o renunciar a cualquiera de estos términos y condiciones incluyendo pero no limitado a un caso donde un participante pudiese haber sido descalificado.
\n4.	El Sorteo es ofrecido en Colombia y en caso de cualquier disputa, se rige por las leyes aplicables en la República de Colombia. Los participantes aceptan la jurisdicción de los Jueces de la República de Colombia. 
\n5.	La cooperativa LICENCIATARIO asumirá los impuestos por ganancia ocasional, si es del caso.
\n
\n","productos_7.jpg");
INSERT INTO promociones_detalles VALUES("8","8","Horarios de atención","1. BOGOTÁ
\n
\nLunes a sábado de 7am a 7pm en Jornada continua
\nDomingos y festivos de 8am a 2pm en Jornada continua
\nSe reciben pagos en efectivo, tarjeta débito y crédito.
\n 
\nDirección Cra 34 N° 19-17, Bogotá-Barrio Cundinamarca
\nTelefono 3517766
\nParqueadero disponible para clientes
\n
\n2. DISTRITO SUR Y POBLACIONES
\n
\nCiudad: Floridablanca, Santander.
\nLunes a Viernes 7:30 am a 12m y 2pm  a 6 pm. Sábado de 8 a 11:30 am.
\nDirección: Km 2 Autopista Floridablanca No. 124 - 75
\nTeléfono: 6361123
\n
\n3. DISTRITO NORTE
\n
\nCiudad: Bucaramanga, Santander.
\nLunes a Viernes 7:30 am a 12m y 2pm  a 6 pm. Sábado de 8 a 11:30 am.
\nDirección: Cra 23 No. 19 – 20 Barrio San Francisco
\nTeléfono: 6455786
\n
\n4. DISTRITO CUCÚTA
\n
\nCiudad: Cúcuta, Norte de Santander.
\nLunes a Viernes 7:30 am a 12m y 2pm  a 6 pm. Sábado de 8 a 11:30 am.
\nDirección: Centro Empresarial La Estación Avenida 7 No. 21 N – 55 Barrio Sevilla.
\nTeléfono: 3134339225
\n
\n5. DISTRITO BARRANCA
\n
\nCiudad: Barrancabermeja, Santander.
\nLunes a Viernes 7:30 am a 12m y 2pm  a 6 pm. Sábado de 8 a 11:30 am.
\nDirección: Cra 32 No. 57 – 35 Barrio Ciudad Bolívar
\nTeléfono: 6114221
\n
\n6. REGIONAL COSTA
\n 
\nDistrito Cesar
\nCuidad: Valledupar
\nLunes a viernes de 7:30am a 12:00pm y de 3:00 pm a 6:00 pm
\nSábados de 8:00am a 12:00 pm
\nDirección: cra 18c # 21-95
\nTeléfono: 5802413
\n
\n
\n7. DISTRITO MAGDALENA
\n
\nCiudad: santa marta(rodadero)
\nLunes a viernes de 8:00am a 12:00 pm y de 2:00pm a 6:00pm
\nSábados de 8:00 am a 5:00pm
\nDirección: cra 4 # 21-30
\nTeléfono: 4220801
\n
\n
\n ","productos_8.jpg");
INSERT INTO promociones_detalles VALUES("9","9","Vasos Lechesan","Compre Lechesan,  reuna 10 bolsas y reclame un vaso de vidrio con diseño especial. Aplica para Boyacá, Tolima y Meta","productos_9.jpg");
INSERT INTO promociones_detalles VALUES("10","10","California y Lechesan","Por tus compras iguales o superiores a 10 mil pesos en nuestro punto de venta, participas en la polla California Lechesan. Preparate a ganar","productos_10.jpg");
INSERT INTO promociones_detalles VALUES("11","11","Lechesan 1200ml llega al Meta	","Pide desde hoy la nueva Lechesan 1200ml en tu tienda mas cercana. Aplica solo para el departamento del Meta ","productos_11.jpg");



DROP TABLE IF EXISTS recetas;

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto_ingredientes` text NOT NULL,
  `asociados` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO recetas VALUES("1","recetas_1.jpg","recetas_1.jpg","Arroz con Leche Cremoso","LECHESAN es mi leche","1,");
INSERT INTO recetas VALUES("5","recetas_5.jpg","recetas_5.jpg","Pasta con albondigas en salsa","CALIFORNIA sabe a Colombia","");
INSERT INTO recetas VALUES("6","recetas_6.jpg","recetas_6.jpg","Patacones con carne desmechada","CALIFORNIA sabe a Colombia","");
INSERT INTO recetas VALUES("7","recetas_7.jpg","recetas_7.jpg","Crema de ahuyama con alverjas","
\nCALIFORNIA sabe a Colombia","");
INSERT INTO recetas VALUES("8","recetas_8.jpg","recetas_8.jpg","Lentejas con chorizo","CALIFORNIA sabe a Colombia
\n","");



DROP TABLE IF EXISTS recetas_ingredientes;

CREATE TABLE `recetas_ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_ingredientes_recetas1_idx` (`id_recetas`),
  CONSTRAINT `recetas_ingredientes_ibfk_1` FOREIGN KEY (`id_recetas`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO recetas_ingredientes VALUES("1","1","as dfas df");



DROP TABLE IF EXISTS recetas_preparacion;

CREATE TABLE `recetas_preparacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receta` int(11) NOT NULL,
  `pasos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_preparacion_recetas1_idx` (`id_receta`),
  CONSTRAINT `recetas_preparacion_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO recetas_preparacion VALUES("1","1","ponga a cocinar a fuego medio tapado con leche, el azúcar, las uvas, la canela y la pizca de sal por espacio de 40 min o hasta ablandar");
INSERT INTO recetas_preparacion VALUES("2","1","Remoje el arroz desde el día anterior");
INSERT INTO recetas_preparacion VALUES("10","1","revuelva de vez en cuando, cuando esté listo agregar la crema y la leche condensada incorporar bien, cocer por 5 min");
INSERT INTO recetas_preparacion VALUES("11","1","al final adicionar esencia.");
INSERT INTO recetas_preparacion VALUES("12","5","Para preparar las albóndigas, mezcla los ingredientes en un recipiente grande usando tus manos. Forma 24 albóndigas con la mezcla. Colócalas en una bandeja, cúbrelas y refrigera hasta que sea el momento de cocinar.");
INSERT INTO recetas_preparacion VALUES("13","5","Para hacer la salsa, mezcla el puré de tomate, la cebolla, el caldo, el comino, el orégano, los chipotles con su adobo y el ajo en una licuadora. Agrega un poco de agua si está muy espesa y no licua bien.");
INSERT INTO recetas_preparacion VALUES("14","5","Calienta el aceite en una olla de hierro grande a fuego medio. En tandas, agrega las albóndigas y cocina por unos 4 minutos, revolviendo ocasionalmente, hasta que estén ligeramente doradas. Con una cuchara calada, pasa las albóndigas a un plato. Añade el puré de chipotle a la olla y cubre parcialmente. Calienta a fuego lento hasta que hierva. Reduce el fuego a medio-bajo y deja hervir por unos 10 minutos, revolviendo de vez en cuando para mezclar los sabores. Vuelve a echar las albóndigas a la olla y revuelve suavemente para cubrirlas con la salsa. Cubre completamente la olla y cocina a fuego lento por unos 15 minutos, revolviendo a mitad de la cocción, hasta que las albóndigas estén cocidas ");
INSERT INTO recetas_preparacion VALUES("15","5","En una olla grande con agua hirviendo cocina la pasta ");
INSERT INTO recetas_preparacion VALUES("16","5","Sirve la pasta en una fuente, acomoda las albóndigas con la salsa encima y espolvorea con el cilantro –si decides usarlo");
INSERT INTO recetas_preparacion VALUES("17","6","Patacones: 
\nSe corta el plátano en trozos, cortándolos como si fueran rodajas pero más gruesas, se ponen a freír en el aceite hasta que estén dorados por los dos lados. Se retiran y se ponen en una bolsa de plástico para después pasarlos por la pataconera, en dado caso que no se tenga una se pueden machacar con una botella o alguna superficie redonda. 
\n");
INSERT INTO recetas_preparacion VALUES("18","6","Carne Desmechada:
\nSe pone a cocer la carne y se le añade la sal, pimienta y comino. Se deja cocer de 45 minutos a 1 hora hasta que la carne este blanda y manejable. Una vez que se enfría se aparta y se desmecha. En un sartén con aceite ponemos los tomates, la cebolla y el ajo. Se saltea y se sazona con sal, comino y pimienta; se le añade el caldo de carne y la salsa de tomate California. Se deja hervir por 3 minutos y se añade la carne, se deja cocer por 10 minutos. 
\nSe pone la carne sobre los petacones y se rocía con queso campesino, se sirve.
\n");
INSERT INTO recetas_preparacion VALUES("19","7","Cocinar la ahuyama en 4 taza de agua hirviendo con el caldo de gallina por 15 minutos para ablandarla. Escurrir y reservar el agua donde se cocino la ahuyama. ");
INSERT INTO recetas_preparacion VALUES("20","7","Licuar la MAYONESA CALIFORNIA con la ahuyama, la fécula de maíz, y la leche. ");
INSERT INTO recetas_preparacion VALUES("21","7","Llevar a una olla y agregar 3 tazas del agua donde se cocino la ahuyama");
INSERT INTO recetas_preparacion VALUES("22","7","Revolver ocasionalmente hasta que hierva. Agregar las arvejas bajar el fuego y continuar la cocción por 8 minutos más para que tome consistencia. ");
INSERT INTO recetas_preparacion VALUES("23","7","Revolver ocasionalmente hasta que hierva. Agregar las arvejas bajar el fuego y continuar la cocción por 8 minutos más para que tome consistencia. ");
INSERT INTO recetas_preparacion VALUES("24","7","Sirve esta crema de ahuyama decorando con unas tostaditas de pan.");
INSERT INTO recetas_preparacion VALUES("25","8","Cocer las lentejas con la punta de jamón, el chorizo, el laurel, la cabeza de ajo entera y la pastilla de caldo, cubiertas de agua.");
INSERT INTO recetas_preparacion VALUES("26","8","Mientras se van cocinando se prepara el sofrito rehogando en el aceite la cebolla muy picadita, cuando empiece a tomar color se incorpora la harina rehogándola a su vez, se agrega el pimentón y el tomate y se va diluyendo la salsa con un poco del caldo de las lentejas.");
INSERT INTO recetas_preparacion VALUES("27","8","Se incorpora la mezcla a las lentejas y se deja cocer un poco más a fuego medio hasta alcanzar el espesor deseado teniendo cuidado de que no se pegue.");
INSERT INTO recetas_preparacion VALUES("28","8","Servir caliente.");



DROP TABLE IF EXISTS somos;

CREATE TABLE `somos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `video` text NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `pos_video` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO somos VALUES("1","somos_1.jpg","Z_uA7Adh6X8","INCOLACTEOS","<h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Misión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Generar bienestar a través de alimentos nutritivos, saludables y de fácil consumo mediante su producción y comercialización con beneficios para los diferentes grupos de interés. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Visión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Posicionar nuestra organización dentro de las diez principales compañías del sector de lácteos y bebidas en Colombia para el año 2018. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Valores corporativos INCOLACTEOS ltda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Experiencia: Sabemos cómo hacerlo bien.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Mejoramiento Continuo: Trabajamos cada día para hacerlo mejor.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Compromiso: Cumplimos lo prometido con responsabilidad.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Respeto: Convivimos con armonía en medio de las diferencias.&nbsp;</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Ética: Somos leales a las sanas costumbres.</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Política integral &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;text-align: justify; font-size: 13px; font-weight: normal;&#34;>“INCOLACTEOS LTDA Y ERWIS ASOCIADOS &nbsp;procesadoras y comercializadoras de alimentos cumpliendo responsablemente con la inocuidad y el aporte nutricional de sus productos, trabajara activamente con programas de gestión integral. Migrando progresivamente a un enfoque por procesos orientados a la mejora continúa. Nuestros objetivos fundamentales la calidad, la seguridad alimentaria, el medio ambiente y la seguridad de nuestros trabajadores cumpliendo la legislación y normatividad nacional nos permitirá responder &nbsp;satisfactoriamente a los requisitos de nuestros clientes, consumidores y partes interesadas liderando el sector de alimentos, nuestra experiencia hace la calidad y nuestra gente la excelencia &nbsp;es la base para el logro de nuestros objetivos.&nbsp;</p><p style=&#34;text-align: justify; font-size: 13px; font-weight: normal;&#34;>Nuestra organización es consciente de cuidar co- responsablemente nuestro entorno y por esto da cumplimiento a la legislación ambiental, con la implementación de procedimientos &nbsp;que &nbsp;favorezcan ambientes más sanos &nbsp;y ejecutando acciones &nbsp;para prevenir y mitigar los impactos generados por sus procesos , implementando el sistema de gestión ambiental el cual es evaluado &nbsp;en su desempeño constantemente realizando producciones mal limpias y amigables con el entorno y revisando los objetivos y metas ambientales por la alta gerencia , de igual manera mediante el sistema &nbsp;de gestión Salud ocupacional y seguridad industrial velara por la integridad de todos sus colaboradores implementando programas que contribuyan a la prevención de lesiones y enfermedades cumpliendo los requisitos legales aplicables&#34;.</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>LECHESAN S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>
\n
\n<p class=&#34;MsoNormal&#34;>En
\n1.971 se construyó la planta en la que actualmente funciona y así mismo se
\nhabía inaugurado el más moderno Centro de Acopio de Leche existente en la
\nregión, ubicado en la población de San Alberto, Cesar.</p><p class=&#34;MsoNormal&#34;>La
\ndistribución de la leche se realizaba puerta a puerta, en la que se entregaba
\nla leche en cada hogar por medio de unas tiqueteras que las familias adquirían
\ncon anterioridad.</p><p class=&#34;MsoNormal&#34;>En
\n1.973 se inicia la adquisición progresiva de las actuales máquinas envasadoras
\npara polietileno y la distribución de la leche pasteurizada en bolsa.</p><p class=&#34;MsoNormal&#34;>En
\n1.990, la apertura económica exigió ser más competitivos, la compañía inicia el
\nmontaje de una de las plantas más modernas para el procesamiento y envasado de
\nproductos lácteos con tecnología de Ultrapasteurización en envases Tetra-Pak.</p><p class=&#34;MsoNormal&#34;>
\n
\n
\n
\n
\n
\n
\n
\n</p><p class=&#34;MsoNormal&#34;>La
\ncompañía incursiona en el mercado de Bogotá con leche pasteurizada en bolsa con
\nel montaje de una nueva planta Pasteurizadora ubicada en la región de Simijaca
\n(Cundinamarca).  </p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>CONSERVAS CALIFORNIA S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1><p class=&#34;MsoNormal&#34;>• En 1950 se inicia la producción de Pasta de
\nTomate.</p><p class=&#34;MsoNormal&#34;>
\n• En 1952 se importan concentrados de frutas.</p><p class=&#34;MsoNormal&#34;>
\n• En 1967 se comenzó a producir néctares en envases de vidrio.</p><p class=&#34;MsoNormal&#34;>
\n• En 1971, la multinacional NESTLE compra CONSERVAS CALIFORNIA; a la
\nmultinacional Grace.</p><p class=&#34;MsoNormal&#34;>• En 1982, Nestlé vende la planta al grupo inversionista actual, se reinicia la
\nproducción de nuevos productos</p></h1>","1");



DROP TABLE IF EXISTS subproductos;

CREATE TABLE `subproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_productos` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subproductos_productos1_idx` (`id_productos`),
  CONSTRAINT `subproductos_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

INSERT INTO subproductos VALUES("13","38","Vinagre Blanco 250 ml","Ref: 2449
\nPresentación: Pet
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("14","38","Vinagre Blanco 500 ml","Ref: 2450
\nPresentación: Pet
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("15","38","Vinagre Blanco 3.860  ml","Ref: 2451
\nPresentación: Galón Plástico
\nUnidad por caja: 4");
INSERT INTO subproductos VALUES("16","38","Vinagre de Frutas 500 ml","Ref: 2455
\nPresentación: Pet
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("17","38","Vinagre de Frutas 3860 ml","Ref: 2456
\nPresentación: Galón Plástico
\nUnidad por caja: 4");
INSERT INTO subproductos VALUES("18","28","Néctar 215 ml Durazno","Ref: 2111
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("19","28","Néctar 215 ml Albaric","Ref: 2112
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("20","28","Néctar 215 ml Manzana","Ref: 2113
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("21","28","Néctar 215 ml Pera","Ref: 2114
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("22","28","Néctar 215 ml Mango","Ref: 2121
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("23","28","Néctar 215 ml Guayaba","Ref: 2122
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("24","28","Néctar 900 ml Durazno","Ref: 2141
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("25","28","Néctar 900 ml Manzana","Ref: 2142
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("26","28","Néctar 900 ml Pera","Ref: 2143
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("27","28","Néctar 900 ml Mango","Ref: 2144
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("28","28","Néctar 900 ml Guayaba","Ref: 2145
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("29","28","Néctar 200 ml Durazno","Ref: 2211
\nPresentación: Tetra Brik
\nUnidad por caja: 27");
INSERT INTO subproductos VALUES("30","28","Néctar 200 ml Manzana","Ref: 2213
\nPresentación: Tetra Brik
\nUnidad por caja: 27");
INSERT INTO subproductos VALUES("31","28","Néctar 200 ml Pera","Ref: 2214
\nPresentación: Tetra Brik
\nUnidad por caja: 27");
INSERT INTO subproductos VALUES("32","28","Néctar 200 ml Mango","Ref: 2221
\nPresentación: Tetra Brik
\nUnidad por caja: 27");
INSERT INTO subproductos VALUES("33","28","Néctar 1000ml Durazno","Ref: 2231
\nPresentación: Tetra Brik
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("34","28","Néctar 1000ml Durazno","Ref: 2231
\nPresentación: Tetra Brik
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("35","28","Néctar 1000ml Manzana","Ref: 2233
\nPresentación: Tetra Brik
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("36","28","Néctar 1000 ml Pera","Ref: 2234
\nPresentación: Tetra Brik
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("37","28","Néctar 1000 ml Mango","Ref: 2241
\nPresentación: Tetra Brik
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("38","29","Refresco 200 ml Mora","Ref: 2372
\nPresentación: Tetra Wedge
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("39","29","Refresco 200 ml Mango","Ref: 2373
\nPresentación: Tetra Wedge
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("40","29","Refresco 200ml Naranja","Ref: 2374
\nPresentación: Tetra Wedge
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("41","29","Refresco 200ml Maracuyá","Ref: 2375
\nPresentación: Tetra Wedge
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("42","29","Refresco 200ml Naranja","Ref: 0060
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("43","29","Refresco 200 ml Mora","Ref: 0061
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("44","29","Refresco 200 ml Mango","Ref: 0062
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("45","29","Refresco 200ml Maracuyá","Ref: 0063
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("46","30","Jugo Prem 900 ml uva","Ref: 2148
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("47","30","Jugo Prem 900 ml manzana","Ref: 2147
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("48","30","Jugo Prem 900 ml tomate","Ref: 2146
\nPresentación: Vidrio
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("49","30","Jugo Prem 237 ml uva","Ref: 1975
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("50","30","Jugo Prem 237 ml manzana","Ref: 1976
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("51","30","Jugo Prem 215 ml tomate","Ref: 2133
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("52","30","Jugo Prem 1000ml naranja","Ref: 2255
\nPresentación: Tetra Brick
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("53","31","Agua Natural 300 ml","Ref: *3510
\nPresentación: Bolsa
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("54","31","Agua Natural 350 ml","Ref: 3512
\nPresentación: Bolsa
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("55","31","Agua Natural 600 ml","Ref: 3511
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("56","31","Agua Natural 500 ml","Ref: 3530
\nPresentación: Pet
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("57","31","Agua Natural 1.500 ml","Ref: 3535
\nPresentación: Pet
\nUnidad por caja: 6");
INSERT INTO subproductos VALUES("58","33","Salsa de tomate 200 g","Ref: 2410
\nPresentación: Doypack
\nUnidad por caja: 24        ");
INSERT INTO subproductos VALUES("59","33","Salsa de tomate 400 g","Ref: 2418
\nPresentación: Doypack
\nUnidad por caja: 24        ");
INSERT INTO subproductos VALUES("60","33","Salsa de tomate 600 g","Ref: 2612
\nPresentación: Doypack
\nUnidad por caja: 12       ");
INSERT INTO subproductos VALUES("61","33","Salsa de tomate 1000 g","Ref: 2613
\nPresentación: Doypack
\nUnidad por caja: 12 ");
INSERT INTO subproductos VALUES("62","33","Salsa de tomate 200 g","Ref: 2409
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("63","33","Salsa de tomate 4150 g","Ref: 2409
\nPresentación: Vidrio
\nUnidad por caja: 4");
INSERT INTO subproductos VALUES("64","33","Salsa de tomate 50 g","Ref: 2602
\nPresentación: Sachet
\nUnidad por caja: 12x24");
INSERT INTO subproductos VALUES("65","34","Mayonesa light 200 g","Ref: 2464
\nPresentación: Doypack
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("66","34","Mayonesa light 380 g","Ref: 2467
\nPresentación: Doypack
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("67","34","Mayonesa light 3750 g","Ref: 2463
\nPresentación: Pet
\nUnidad por caja: 4");
INSERT INTO subproductos VALUES("68","34","Mayonesa light 30 g","Ref: 2463
\nPresentación: Sachet
\nUnidad por caja: 12x24");
INSERT INTO subproductos VALUES("69","35","Pasta de tomate 245 g","Ref: 2436
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("70","35","Pasta de tomate 4150 g","Ref: 2446
\nPresentación: Vidrio
\nUnidad por caja: 4");
INSERT INTO subproductos VALUES("71","35","Salsa Bolognesa 245 g","Ref: 2444
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("72","36","Arvejas 300 g","Ref: 1101
\nPresentación: Lata
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("73","37","Brevas 580 g","Ref: 0941
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("74","48","Kumis 200 g","Ref: 0048
\nPresentación: Bolsax6 unidades
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("75","44","Arequipitos x 6 un","Ref: 0205
\nPresentación: Vaso
\nUnidad por caja: 16");
INSERT INTO subproductos VALUES("76","44","Arequipe 250 g","Ref: 0209
\nPresentación: Vaso 
\nUnidad por caja: 18");
INSERT INTO subproductos VALUES("77","43","Avena Natural 200 ml","Ref: 0306
\nPresentación: Tetra Wedge
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("78","43","Avena con Canela 200 ","Ref: 0307
\nPresentación: Tetra Wedge 
\nUnidad por caja: 30	");
INSERT INTO subproductos VALUES("79","42","Yogurt 150 g Fresa ","Ref: 0155
\nPresentación: Vaso 
\nUnidad por caja: 80");
INSERT INTO subproductos VALUES("80","42","Yogurt 150g Melocotón","Ref: 0156
\nPresentación: Vaso 
\nUnidad por caja: 80");
INSERT INTO subproductos VALUES("81","42","Yogurt 150 g Mora","Ref: 0157
\nPresentación: Vaso 
\nUnidad por caja: 80");
INSERT INTO subproductos VALUES("82","42","Yogurt  200 g Fresa ","Ref: 0040
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("83","42","Yogurt 200g Melocotón","Ref: 0040
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("84","42","Yogurt 200 gr Mora","Ref: 0042
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("85","42","Yogurt  200 g Surtido","Ref: 0044
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20");
INSERT INTO subproductos VALUES("86","41","Shikis 200 ml Fresa","Ref: 2060
\nPresentación: Tetra Brik
\nUnidad por caja: 27");
INSERT INTO subproductos VALUES("87","41","Shikis 200 ml Mora","Ref: 2061
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	");
INSERT INTO subproductos VALUES("88","41","Shikis 200 ml Vainill","Ref: 2063
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	");
INSERT INTO subproductos VALUES("89","41","Shikis 200 ml Chocola","Ref: 2064
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	");
INSERT INTO subproductos VALUES("90","40","Leche Entera 946 ml","Ref: 1162
\nPresentación: Tetra Brik 
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("91","40","Leche Niños 946 ml","Ref: 1160
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	");
INSERT INTO subproductos VALUES("92","40","Leche  Descremada 946","Ref: 1161
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	");
INSERT INTO subproductos VALUES("93","40","Leche Semidescremada ","Ref: 1163
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	");
INSERT INTO subproductos VALUES("94","40","Leche Deslactosada 94","Ref: 1164
\nPresentación: Tetra Brik
\nUnidad por caja: 12	");
INSERT INTO subproductos VALUES("95","39","Leche Entera UHT 200 ","Ref Bogotá: 0009
\nRef B/manga: 0009
\nPresentación: Bolsa
\nUnidad por caja: 60");
INSERT INTO subproductos VALUES("96","39","Leche Entera UHT 250 ","Ref Bogotá: 0010
\nRef B/manga: 1250
\nPresentación: Bolsa
\nUnidad por caja: 44");
INSERT INTO subproductos VALUES("97","39","Leche Entera UHT 450 ","Ref Bogotá: 0051
\nRef B/manga: 0008
\nPresentación: Bolsa
\nUnidad por caja: 30");
INSERT INTO subproductos VALUES("98","39","Leche Entera UHT 500 ","Ref Bogotá: 0027
\nRef B/manga: 1069
\nPresentación: Bolsa
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("99","39","Leche Entera UHT 900 ","Ref Bogotá: 0025
\nRef B/manga: 1076
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("100","39","Leche Entera UHT 1100","Ref Bogotá: 0110
\nRef B/manga: 0110
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("101","39","Leche Semidescremada ","Ref Bogotá: 0026
\nRef B/manga: 1070
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("102","39","Leche Descremada UHT ","Ref Bogotá: 0035
\nRef B/manga: 0035
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("103","39","Leche Deslactosada UH","Ref Bogotá: 0030
\nRef B/manga: 0030
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("104","39","Leche Deslactosada 11","Ref Bogotá: 0130
\nRef B/manga: 0130
\nPresentación: Bolsa
\nUnidad por caja: 12");
INSERT INTO subproductos VALUES("105","32","Mermelada 220 fresa","Ref: 0814
\nPresentación: Vidrio
\nUnidad por caja: 24");
INSERT INTO subproductos VALUES("106","32","Mermelada 220 piña","Ref: 0815
\nPresentación: Vidrio 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("107","32","Mermelada 220 mora","Ref: 0818
\nPresentación: Vidrio 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("108","32","Mermelada 220 manzana","Ref: 0826
\nPresentación: Vidrio 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("109","32","Mermelada 220 pera","Ref: 0827
\nPresentación: Vidrio 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("110","32","Mermelada 220 durazno","Ref: 0828
\nPresentación: Vidrio 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("111","32","Mermelada 4900 durazn","Ref: 0931
\nPresentación: Vidrio 
\nUnidad por caja: 4	");
INSERT INTO subproductos VALUES("112","32","Mermelada 4900 fresa","Ref: 0934
\nPresentación: Vidrio 
\nUnidad por caja: 4	");
INSERT INTO subproductos VALUES("113","32","Mermelada 4900 piña","Ref: 0935
\nPresentación: Vidrio 
\nUnidad por caja: 4	");
INSERT INTO subproductos VALUES("114","32","Mermelada 4900 mora","Ref: 0938
\nPresentación: Vidrio 
\nUnidad por caja: 4	");
INSERT INTO subproductos VALUES("115","32","Mermelada 200 piña","Ref: 0715
\nPresentación: Doypack 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("116","32","Mermelada 200 mora","Ref: 0718
\nPresentación: Doypack 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("117","32","Mermelada 200 fresa","Ref: 0714
\nPresentación: Doypack 
\nUnidad por caja: 24	");
INSERT INTO subproductos VALUES("118","39","Leche entera UHT 1200","Ref Bogotá: 0175
\nRef B/manga: 0175
\nPresentación: Bolsa
\nUnidad por caja: 12");



DROP TABLE IF EXISTS subproductos_detalles;

CREATE TABLE `subproductos_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subproducto` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `receta` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subproductos_detalles_subproductos1_idx` (`id_subproducto`),
  CONSTRAINT `subproductos_detalles_ibfk_1` FOREIGN KEY (`id_subproducto`) REFERENCES `subproductos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

INSERT INTO subproductos_detalles VALUES("12","13","productos_13.jpg","Ref: 2449
\nPresentación: Pet
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("13","14","productos_14.jpg","Ref: 2450
\nPresentación: Pet
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("14","15","productos_15.jpg","Ref: 2451
\nPresentación: Galón Plástico
\nUnidad por caja: 4","0");
INSERT INTO subproductos_detalles VALUES("15","16","productos_16.jpg","Ref: 2455
\nPresentación: Pet
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("16","17","productos_17.jpg","Ref: 2456
\nPresentación: Galón Plástico
\nUnidad por caja: 4","0");
INSERT INTO subproductos_detalles VALUES("17","18","productos_18.jpg","Ref: 2111
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("18","19","productos_19.jpg","Ref: 2112
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("19","20","productos_20.jpg","Ref: 2113
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("20","21","productos_21.jpg","Ref: 2114
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("21","22","productos_22.jpg","Ref: 2111
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("22","23","productos_23.jpg","Ref: 2122
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("23","24","productos_24.jpg","Ref: 2141
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("24","25","productos_25.jpg","Ref: 2142
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("25","26","productos_26.jpg","Ref: 2143
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("26","27","productos_27.jpg","Ref: 2144
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("27","28","productos_28.jpg","Ref: 2145
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("28","29","productos_29.jpg","Ref: 2211
\nPresentación: Tetra Brik
\nUnidad por caja: 27","0");
INSERT INTO subproductos_detalles VALUES("29","30","productos_30.jpg","Ref: 2213
\nPresentación: Tetra Brik
\nUnidad por caja: 27","0");
INSERT INTO subproductos_detalles VALUES("30","31","productos_31.jpg","Ref: 2214
\nPresentación: Tetra Brik
\nUnidad por caja: 27","0");
INSERT INTO subproductos_detalles VALUES("31","32","productos_32.jpg","Ref: 2221
\nPresentación: Tetra Brik
\nUnidad por caja: 27","0");
INSERT INTO subproductos_detalles VALUES("32","33","","","0");
INSERT INTO subproductos_detalles VALUES("33","34","productos_34.jpg","Ref: 2231
\nPresentación: Tetra Brik
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("34","35","productos_35.jpg","Ref: 2233
\nPresentación: Tetra Brik
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("35","36","productos_36.jpg","Ref: 2234
\nPresentación: Tetra Brik
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("36","37","productos_37.jpg","Ref: 2241
\nPresentación: Tetra Brik
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("37","38","productos_38.jpg","Ref: 2372
\nPresentación: Tetra Wedge
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("38","39","productos_39.jpg","Ref: 2373
\nPresentación: Tetra Wedge
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("39","40","productos_40.jpg","Ref: 2374
\nPresentación: Tetra Wedge
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("40","41","productos_41.jpg","Ref: 2375
\nPresentación: Tetra Wedge
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("41","42","productos_42.jpg","Ref: 0060
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("42","43","productos_43.jpg","Ref: 0061
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("43","44","productos_44.jpg","Ref: 0062
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("44","45","productos_45.jpg","Ref: 0063
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("45","46","productos_46.jpg","Ref: 2148
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("46","47","productos_47.jpg","Ref: 2147
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("47","48","productos_48.jpg","Ref: 2146
\nPresentación: Vidrio
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("48","49","productos_49.jpg","Ref: 1975
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("49","50","productos_50.jpg","Ref: 1976
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("50","51","productos_51.jpg","Ref: 2133
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("51","52","productos_52.jpg","Ref: 2255
\nPresentación: Tetra Brik
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("52","53","productos_53.jpg","Ref: *3510
\nPresentación: Bolsa
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("53","54","productos_54.jpg","Ref: 3512
\nPresentación: Bolsa
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("54","55","productos_55.jpg","Ref: 3511
\nPresentación: Bolsa
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("55","56","productos_56.jpg","Ref: 3530
\nPresentación: Pet
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("56","57","productos_57.jpg","Ref: 3535
\nPresentación: Pet
\nUnidad por caja: 6","0");
INSERT INTO subproductos_detalles VALUES("57","58","productos_58.jpg","Ref: 2410
\nPresentación: Doypack
\nUnidad por caja: 24        ","0");
INSERT INTO subproductos_detalles VALUES("58","59","productos_59.jpg","Ref: 2418
\nPresentación: Doypack
\nUnidad por caja: 24        ","0");
INSERT INTO subproductos_detalles VALUES("59","60","productos_60.jpg","Ref: 2612
\nPresentación: Doypack
\nUnidad por caja: 12 ","0");
INSERT INTO subproductos_detalles VALUES("60","61","productos_61.jpg","Ref: 2613
\nPresentación: Doypack
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("61","62","productos_62.jpg","Ref: 2409
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("62","63","productos_63.jpg","Ref: 2409
\nPresentación: Vidrio
\nUnidad por caja: 4","0");
INSERT INTO subproductos_detalles VALUES("63","64","productos_64.jpg","Ref: 2602
\nPresentación: Sachet
\nUnidad por caja: 12x24","0");
INSERT INTO subproductos_detalles VALUES("64","65","productos_65.jpg","Ref: 2464
\nPresentación: Doypack
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("65","66","productos_66.jpg","Ref: 2467
\nPresentación: Doypack
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("66","67","","Ref: 2463
\nPresentación: Pet
\nUnidad por caja: 4","0");
INSERT INTO subproductos_detalles VALUES("67","68","productos_68.jpg","Ref: 2463
\nPresentación: Sachet
\nUnidad por caja: 12x24","0");
INSERT INTO subproductos_detalles VALUES("68","69","productos_69.jpg","Ref: 2436
\nPresentación: Vidrio
\nUnidad por caja: 24","5");
INSERT INTO subproductos_detalles VALUES("69","70","productos_70.jpg","Ref: 2446
\nPresentación: Vidrio
\nUnidad por caja: 4","0");
INSERT INTO subproductos_detalles VALUES("70","71","productos_71.jpg","Ref: 2444
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("71","72","productos_72.jpg","Ref: 1101
\nPresentación: Lata
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("72","73","productos_73.jpg","Ref: 0941
\nPresentación: Vidrio
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("73","74","productos_74.jpg","Ref: 0048 
\nPresentación: Bolsax6 unidades 
\nUnidad por caja: 20","5");
INSERT INTO subproductos_detalles VALUES("74","75","productos_75.jpg","Ref: 0205
\nPresentación: Vaso 
\nUnidad por caja: 16","0");
INSERT INTO subproductos_detalles VALUES("75","76","productos_76.jpg","Ref: 0209 
\nPresentación: Vaso 
\nUnidad por caja: 18	","0");
INSERT INTO subproductos_detalles VALUES("76","77","productos_77.jpg","Ref: 0306
\nPresentación: Tetra Wedge
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("77","78","productos_78.jpg","Ref: 0307
\nPresentación: Tetra Wedge 
\nUnidad por caja: 30	","0");
INSERT INTO subproductos_detalles VALUES("78","79","productos_79.jpg","Ref: 0155
\nPresentación: Vaso 
\nUnidad por caja: 80	","0");
INSERT INTO subproductos_detalles VALUES("79","80","productos_80.jpg","Ref: 0156 
\nPresentación: Vaso
\nUnidad por caja: 80	","0");
INSERT INTO subproductos_detalles VALUES("80","81","productos_81.jpg","Ref: 0157
\nPresentación: Vaso 
\nUnidad por caja: 80	","0");
INSERT INTO subproductos_detalles VALUES("81","82","productos_82.jpg","Ref: 0040
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("82","83","","Ref: 0040
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("83","84","","Ref: 0042
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("84","85","productos_85.jpg","Ref: 0044
\nPresentación: Bolsa x 6 unds
\nUnidad por caja: 20","0");
INSERT INTO subproductos_detalles VALUES("85","86","productos_86.jpg","Ref: 2060
\nPresentación: Tetra Brik
\nUnidad por caja: 27","0");
INSERT INTO subproductos_detalles VALUES("86","87","productos_87.jpg","Ref: 2061 
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	","0");
INSERT INTO subproductos_detalles VALUES("87","88","productos_88.jpg","Ref: 2063 
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	","0");
INSERT INTO subproductos_detalles VALUES("88","89","productos_89.jpg","Ref: 2064
\nPresentación: Tetra Brik 
\nUnidad por caja: 27	","0");
INSERT INTO subproductos_detalles VALUES("89","90","productos_90.jpg","Ref: 1162
\nPresentación: Tetra Brik 
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("90","91","productos_91.jpg","Ref: 1160
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	","0");
INSERT INTO subproductos_detalles VALUES("91","92","productos_92.jpg","Ref: 1161
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	","0");
INSERT INTO subproductos_detalles VALUES("92","93","productos_93.jpg","Ref: 1163
\nPresentación: Tetra Brik 
\nUnidad por caja: 12	","0");
INSERT INTO subproductos_detalles VALUES("93","94","productos_94.jpg","Ref: 1164
\nPresentación: Tetra Brik
\nUnidad por caja: 12	","0");
INSERT INTO subproductos_detalles VALUES("94","95","productos_95.jpg","Ref Bogotá: 0009
\nRef B/manga: 0009
\nPresentación: Bolsa
\nUnidad por caja: 60","0");
INSERT INTO subproductos_detalles VALUES("95","96","productos_96.jpg","Ref Bogotá: 0010
\nRef B/manga: 1250
\nPresentación: Bolsa
\nUnidad por caja: 44","0");
INSERT INTO subproductos_detalles VALUES("96","97","productos_97.jpg","Ref Bogotá: 0051
\nRef B/manga: 0008
\nPresentación: Bolsa
\nUnidad por caja: 30","0");
INSERT INTO subproductos_detalles VALUES("97","98","productos_98.jpg","Ref Bogotá: 0027
\nRef B/manga: 1069
\nPresentación: Bolsa
\nUnidad por caja: 24","0");
INSERT INTO subproductos_detalles VALUES("98","99","productos_99.jpg","Ref Bogotá: 0025
\nRef B/manga: 1076
\nPresentación: Bolsa
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("99","100","productos_100.jpg","Ref Bogotá: 0110
\nRef B/manga: 0110
\nPresentación: Bolsa
\nUnidad por caja: 12","1");
INSERT INTO subproductos_detalles VALUES("100","101","productos_101.jpg","Ref Bogotá: 0026
\nRef B/manga: 1070
\nPresentación: Bolsa
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("101","102","productos_102.jpg","Ref Bogotá: 0035
\nRef B/manga: 0035
\nPresentación: Bolsa
\nUnidad por caja: 12","0");
INSERT INTO subproductos_detalles VALUES("102","103","productos_103.jpg","Ref Bogotá: 0030
\nRef B/manga: 0030
\nPresentación: Bolsa
\nUnidad por caja: 12","1");
INSERT INTO subproductos_detalles VALUES("103","104","","Ref Bogotá: 0130
\nRef B/manga: 0130
\nPresentación: Bolsa
\nUnidad por caja: 12","1");
INSERT INTO subproductos_detalles VALUES("104","105","productos_105.jpg","Ref: 0814 
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("105","106","productos_106.jpg","Ref: 0815
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("106","107","productos_107.jpg","Ref: 0818
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("107","108","productos_108.jpg","Ref: 0826
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("108","109","productos_109.jpg","Ref: 0827
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("109","110","productos_110.jpg","Ref: 0828
\nPresentación: Vidrio 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("110","111","productos_111.jpg","Ref: 0931
\nPresentación: Vidrio 
\nUnidad por caja: 4	","0");
INSERT INTO subproductos_detalles VALUES("111","112","productos_112.jpg","Ref: 0934
\nPresentación: Vidrio 
\nUnidad por caja: 4	","0");
INSERT INTO subproductos_detalles VALUES("112","113","productos_113.jpg","Ref: 0935
\nPresentación: Vidrio 
\nUnidad por caja: 4	","0");
INSERT INTO subproductos_detalles VALUES("113","114","productos_114.jpg","Ref: 0938
\nPresentación: Vidrio 
\nUnidad por caja: 4	","0");
INSERT INTO subproductos_detalles VALUES("114","115","productos_115.jpg","Ref: 0715
\nPresentación: Doypack 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("115","116","productos_116.jpg","Ref: 0718
\nPresentación: Doypack 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("116","117","productos_117.jpg","Ref: 0718
\nPresentación: Doypack 
\nUnidad por caja: 24	","0");
INSERT INTO subproductos_detalles VALUES("117","118","productos_118.jpg","Ref Bogotá: 0175
\nRef B/manga: 0175
\nPresentación: Bolsa
\nUnidad por caja: 12","0");



DROP TABLE IF EXISTS textos;

CREATE TABLE `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO textos VALUES("1","<h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Misión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Generar bienestar a través de alimentos nutritivos, saludables y de fácil consumo mediante su producción y comercialización con beneficios para los diferentes grupos de interés. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Visión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Posicionar nuestra organización dentro de las diez principales compañías del sector de lácteos y bebidas en Colombia para el año 2018. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Valores corporativos INCOLACTEOS ltda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Experiencia: Sabemos cómo hacerlo bien.</p><p>Mejoramiento Continuo: Trabajamos cada día para hacerlo mejor.</p><p>Compromiso: Cumplimos lo prometido con responsabilidad.</p><p>Respeto: Convivimos con armonía en medio de las diferencias.&nbsp;</p><p>Ética: Somos leales a las sanas costumbres.</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Política integral &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p style=&#34;text-align: justify;&#34;>“INCOLACTEOS LTDA Y ERWIS ASOCIADOS &nbsp;procesadoras y comercializadoras de alimentos cumpliendo responsablemente con la inocuidad y el aporte nutricional de sus productos, trabajara activamente con programas de gestión integral. Migrando progresivamente a un enfoque por procesos orientados a la mejora continúa. Nuestros objetivos fundamentales la calidad, la seguridad alimentaria, el medio ambiente y la seguridad de nuestros trabajadores cumpliendo la legislación y normatividad nacional nos permitirá responder &nbsp;satisfactoriamente a los requisitos de nuestros clientes, consumidores y partes interesadas liderando el sector de alimentos, nuestra experiencia hace la calidad y nuestra gente la excelencia &nbsp;es la base para el logro de nuestros objetivos.&nbsp;</p><p style=&#34;text-align: justify;&#34;>Nuestra organización es consciente de cuidar co- responsablemente nuestro entorno y por esto da cumplimiento a la legislación ambiental, con la implementación de procedimientos &nbsp;que &nbsp;favorezcan ambientes más sanos &nbsp;y ejecutando acciones &nbsp;para prevenir y mitigar los impactos generados por sus procesos , implementando el sistema de gestión ambiental el cual es evaluado &nbsp;en su desempeño constantemente realizando producciones mal limpias y amigables con el entorno y revisando los objetivos y metas ambientales por la alta gerencia , de igual manera mediante el sistema &nbsp;de gestión Salud ocupacional y seguridad industrial velara por la integridad de todos sus colaboradores implementando programas que contribuyan a la prevención de lesiones y enfermedades cumpliendo los requisitos legales aplicables&#34;.</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>LECHESAN S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p class=&#34;MsoNormal&#34;>En 1.971 se construyó la planta en la que actualmente funciona y así mismo se había inaugurado el más moderno Centro de Acopio de Leche existente en la región, ubicado en la población de San Alberto, Cesar.</p><p class=&#34;MsoNormal&#34;>La distribución de la leche se realizaba puerta a puerta, en la que se entregaba la leche en cada hogar por medio de unas tiqueteras que las familias adquirían con anterioridad.</p><p class=&#34;MsoNormal&#34;>En 1.973 se inicia la adquisición progresiva de las actuales máquinas envasadoras para polietileno y la distribución de la leche pasteurizada en bolsa.</p><p class=&#34;MsoNormal&#34;>En 1.990, la apertura económica exigió ser más competitivos, la compañía inicia el montaje de una de las plantas más modernas para el procesamiento y envasado de productos lácteos con tecnología de Ultrapasteurización en envases Tetra-Pak.</p><p class=&#34;MsoNormal&#34;></p><p class=&#34;MsoNormal&#34;>La compañía incursiona en el mercado de Bogotá con leche pasteurizada en bolsa con el montaje de una nueva planta Pasteurizadora ubicada en la región de Simijaca (Cundinamarca).  </p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>CONSERVAS CALIFORNIA S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1><p class=&#34;MsoNormal&#34;>• En 1950 se inicia la producción de Pasta de Tomate.</p><p class=&#34;MsoNormal&#34;>• En 1952 se importan concentrados de frutas.</p><p class=&#34;MsoNormal&#34;>• En 1967 se comenzó a producir néctares en envases de vidrio.</p><p class=&#34;MsoNormal&#34;>• En 1971, la multinacional NESTLE compra CONSERVAS CALIFORNIA; a la multinacional Grace.</p><p class=&#34;MsoNormal&#34;>• En 1982, Nestlé vende la planta al grupo inversionista actual, se reinicia la producción de nuevos productos</p></h1>","0");
INSERT INTO textos VALUES("2","<h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Misión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Generar bienestar a través de alimentos nutritivos, saludables y de fácil consumo mediante su producción y comercialización con beneficios para los diferentes grupos de interés. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Visión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Posicionar nuestra organización dentro de las diez principales compañías del sector de lácteos y bebidas en Colombia para el año 2018. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Valores corporativos INCOLACTEOS ltda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p>Experiencia: Sabemos cómo hacerlo bien.</p><p>Mejoramiento Continuo: Trabajamos cada día para hacerlo mejor.</p><p>Compromiso: Cumplimos lo prometido con responsabilidad.</p><p>Respeto: Convivimos con armonía en medio de las diferencias.&nbsp;</p><p>Ética: Somos leales a las sanas costumbres.</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>Política integral &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p style=&#34;text-align: justify;&#34;>“INCOLACTEOS LTDA Y ERWIS ASOCIADOS &nbsp;procesadoras y comercializadoras de alimentos cumpliendo responsablemente con la inocuidad y el aporte nutricional de sus productos, trabajara activamente con programas de gestión integral. Migrando progresivamente a un enfoque por procesos orientados a la mejora continúa. Nuestros objetivos fundamentales la calidad, la seguridad alimentaria, el medio ambiente y la seguridad de nuestros trabajadores cumpliendo la legislación y normatividad nacional nos permitirá responder &nbsp;satisfactoriamente a los requisitos de nuestros clientes, consumidores y partes interesadas liderando el sector de alimentos, nuestra experiencia hace la calidad y nuestra gente la excelencia &nbsp;es la base para el logro de nuestros objetivos.&nbsp;</p><p style=&#34;text-align: justify;&#34;>Nuestra organización es consciente de cuidar co- responsablemente nuestro entorno y por esto da cumplimiento a la legislación ambiental, con la implementación de procedimientos &nbsp;que &nbsp;favorezcan ambientes más sanos &nbsp;y ejecutando acciones &nbsp;para prevenir y mitigar los impactos generados por sus procesos , implementando el sistema de gestión ambiental el cual es evaluado &nbsp;en su desempeño constantemente realizando producciones mal limpias y amigables con el entorno y revisando los objetivos y metas ambientales por la alta gerencia , de igual manera mediante el sistema &nbsp;de gestión Salud ocupacional y seguridad industrial velara por la integridad de todos sus colaboradores implementando programas que contribuyan a la prevención de lesiones y enfermedades cumpliendo los requisitos legales aplicables&#34;.</p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>LECHESAN S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;><p class=&#34;MsoNormal&#34;>En 1.971 se construyó la planta en la que actualmente funciona y así mismo se había inaugurado el más moderno Centro de Acopio de Leche existente en la región, ubicado en la población de San Alberto, Cesar.</p><p class=&#34;MsoNormal&#34;>La distribución de la leche se realizaba puerta a puerta, en la que se entregaba la leche en cada hogar por medio de unas tiqueteras que las familias adquirían con anterioridad.</p><p class=&#34;MsoNormal&#34;>En 1.973 se inicia la adquisición progresiva de las actuales máquinas envasadoras para polietileno y la distribución de la leche pasteurizada en bolsa.</p><p class=&#34;MsoNormal&#34;>En 1.990, la apertura económica exigió ser más competitivos, la compañía inicia el montaje de una de las plantas más modernas para el procesamiento y envasado de productos lácteos con tecnología de Ultrapasteurización en envases Tetra-Pak.</p><p class=&#34;MsoNormal&#34;></p><p class=&#34;MsoNormal&#34;>La compañía incursiona en el mercado de Bogotá con leche pasteurizada en bolsa con el montaje de una nueva planta Pasteurizadora ubicada en la región de Simijaca (Cundinamarca).  </p></h1><h1 style=&#34;font-size: 10pt; font-weight: normal;&#34;>CONSERVAS CALIFORNIA S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1><p class=&#34;MsoNormal&#34;>• En 1950 se inicia la producción de Pasta de Tomate.</p><p class=&#34;MsoNormal&#34;>• En 1952 se importan concentrados de frutas.</p><p class=&#34;MsoNormal&#34;>• En 1967 se comenzó a producir néctares en envases de vidrio.</p><p class=&#34;MsoNormal&#34;>• En 1971, la multinacional NESTLE compra CONSERVAS CALIFORNIA; a la multinacional Grace.</p><p class=&#34;MsoNormal&#34;>• En 1982, Nestlé vende la planta al grupo inversionista actual, se reinicia la producción de nuevos productos</p></h1>","0");
INSERT INTO textos VALUES("3","Comunícate con nosotros, envíanos preguntas o comentarios, un asesor estará disponible.","3");
INSERT INTO textos VALUES("4","Newsletter","4");


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
