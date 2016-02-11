CREATE DATABASE IF NOT EXISTS usuariooc_incolacteos;

USE usuariooc_incolacteos;

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("2","banner_2.jpg","2","index.php?seccion=lechesan");
INSERT INTO banner VALUES("20","banner_20.jpg","1","index.php?seccion=index");
INSERT INTO banner VALUES("21","banner_21.jpg","2","index.php?seccion=index");
INSERT INTO banner VALUES("23","banner_23.jpg","2","index.php?seccion=index");
INSERT INTO banner VALUES("24","banner_24.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("25","banner_25.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("26","banner_26.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("27","banner_27.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("28","banner_28.jpg","3","index.php?seccion=index");
INSERT INTO banner VALUES("29","banner_29.jpg","1","index.php?seccion=index");



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

INSERT INTO correo1 VALUES("1","jcurrego9@misena.edu.co");



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

INSERT INTO correo2 VALUES("1","jocamilourimg@gmail.com","J@k.com","J@k.com","J@k.com","J@k.com");



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

INSERT INTO correos VALUES("1","jocamilourimg@gmail.com","J@k.com","J@k.com","J@k.com","J@k.com");



DROP TABLE IF EXISTS destacados_home;

CREATE TABLE `destacados_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `subtitulo` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO destacados_home VALUES("1","Pague 9 lleve","12 nectar ","destacados_1.jpg","index.php?seccion=promociones");
INSERT INTO destacados_home VALUES("2","visita ","nuestro punto","destacados_2.jpg","index.php?seccion=california");
INSERT INTO destacados_home VALUES("3","tapa ganadora","tampico","destacados_3.jpg","index.php?seccion=promociones");



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

INSERT INTO footer VALUES("1","Bogotá","Distrito occidente","Diagonal 61 No. 85 - 35","057 (1) 4386490","057 (1) 223 4911","info@incolacteos.com");
INSERT INTO footer VALUES("2","Bogotá","Distrito centro","Cra 34 No. 19 - 17","057 (1) 3517501 - 057 (1) 3517766","057 (1) 3517501","info@incolacteos.com");
INSERT INTO footer VALUES("6","Simijaca","Simijaca","Valle del Simijaca Km1 Via Chiquinquira","057 (1) 8555432","057 (1) 8555432","prueba@incolacteos.com");
INSERT INTO footer VALUES("7","Barranquilla","Costa Atlantica ","Autopista al aeropuerto","057 (5) 3344899","057 (5) 3344899","info@incolacteos.com");
INSERT INTO footer VALUES("8","Bucaramanga","Vía Floridablanca","Autopista Floridablanca No. 124 - 75","057 (5) 6312415","057 (5) 6312415","info@incolacteos.com");



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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

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



DROP TABLE IF EXISTS form_contacto;

CREATE TABLE `form_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

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



DROP TABLE IF EXISTS form_news;

CREATE TABLE `form_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `suscripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO form_news VALUES("2","Alexandra Gómez","alexandra.gomez@imaginamos.com","Incolacteos");



DROP TABLE IF EXISTS ingredientes;

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recetas` int(11) NOT NULL,
  `ingrediente` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

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
INSERT INTO ingredientes VALUES("24","5","Albondigas:");
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
INSERT INTO ingredientes VALUES("45","6","Sal, pimienta y comino");
INSERT INTO ingredientes VALUES("46","7","2 tazas de ahuyama picada");
INSERT INTO ingredientes VALUES("47","7","1 taza de ARVEJAS CALIFORNIA");
INSERT INTO ingredientes VALUES("48","7","3 tazas de agua ");
INSERT INTO ingredientes VALUES("49","7","Tostaditas de pan para decorar");



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

INSERT INTO phpmailer VALUES("1","true","ssl","smtp.gmail.com","465","jocamilourimg@gmail.com","zte1014202099","jocamilourimg@gmail.com","Incolacteos - ","Formulario de Contacto - ");



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

INSERT INTO productos_detalles VALUES("28","28","","","","0");
INSERT INTO productos_detalles VALUES("29","29","","","","0");
INSERT INTO productos_detalles VALUES("30","30","","","","0");
INSERT INTO productos_detalles VALUES("31","31","","","","0");
INSERT INTO productos_detalles VALUES("32","32","","","","0");
INSERT INTO productos_detalles VALUES("33","33","","","","0");
INSERT INTO productos_detalles VALUES("34","34","","","","0");
INSERT INTO productos_detalles VALUES("35","35","","","","0");
INSERT INTO productos_detalles VALUES("36","36","","","","0");
INSERT INTO productos_detalles VALUES("37","37","","","","0");
INSERT INTO productos_detalles VALUES("38","38","","","","0");
INSERT INTO productos_detalles VALUES("39","39","","","","0");
INSERT INTO productos_detalles VALUES("40","40","","","","0");
INSERT INTO productos_detalles VALUES("41","41","","","","0");
INSERT INTO productos_detalles VALUES("42","42","","","","0");
INSERT INTO productos_detalles VALUES("43","43","","","","0");
INSERT INTO productos_detalles VALUES("44","44","","","","0");
INSERT INTO productos_detalles VALUES("45","45","Chubby","productos_45.jpg","Bebida ligeramente carbonatada con sabor mágico para niños, su empaque es divertido y tiene gran variedad de sabores.","0");
INSERT INTO productos_detalles VALUES("46","46","Agua viva","productos_46.jpg","es un agua ligeramente carbonatada de sabores naturales. Es una bebida baja en calorías endulzada con Splenda. ","0");
INSERT INTO productos_detalles VALUES("47","47","Tampico","productos_47.jpg","Somos uno de los principales productores, distribuidores y comercializadores de Tampico, el original Citrus Punch.\n*Producto disponible en Boyaca y Costa Atlantica","0");
INSERT INTO productos_detalles VALUES("48","48","","","","0");



DROP TABLE IF EXISTS promociones;

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO promociones VALUES("6","productos_6.jpg","Pague 9 lleve 12","nectar caja 200 ml");
INSERT INTO promociones VALUES("7","productos_7.jpg","tapa ganadora tampico","Busca en tu tampico pet 300 ml y 500 ml la tapa marcada con la promoción");



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO promociones_detalles VALUES("6","6","","","");
INSERT INTO promociones_detalles VALUES("7","7","","","");



DROP TABLE IF EXISTS recetas;

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto_ingredientes` text NOT NULL,
  `asociados` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO recetas VALUES("1","recetas_1.jpg","recetas_1.jpg","Arroz con Leche Cremoso","LECHESAN es mi leche","1,");
INSERT INTO recetas VALUES("5","recetas_5.jpg","recetas_5.jpg","Pasta con albondigas en salsa","Albóndigas:\n•	1 libra de carne de res, molida\n•	1/3 de taza de pan común rallado \n•	2 cucharadas de cilantro fresco, picado finamente\n•	1 cucharadita de comino molido\n•	½ cucharadita de sal \n•	¼ de cucharadita de pimienta negra recién molida\n•	¾ de taza de cebolla, rallada (usa los orificios grandes de un rallador de caja)\n•	2 cucharaditas de ajo picado\n•	2 huevos grandes, ligeramente batidos\n•	1 paquete (16 oz.) de pasta linguine\nSalsa:\n•	1 lata de 28 onzas de pasta de tomate California\n•	1 ½ taza de cebolla, rallada (usa los orificios grandes en un rallador de caja)\n•	1 taza de caldo de pollo\n•	2 cucharaditas de comino molido\n•	1 cucharada más 1 ½ cucharadita de orégano seco \n•	2 dientes de ajo enteros, pelados y majados con un cuchillo\n•	2 cucharadas de aceite de oliva\n•	Cilantro fresco picado, para decorar (opcional)\n","");
INSERT INTO recetas VALUES("6","recetas_6.jpg","recetas_6.jpg","Patacones con carne desmechada","•	3 plátanos\n•	2 tazas aceite vegetal\n•	1 lb de carne de res\n•	3 tomates\n•	2 dientes de ajo\n•	½ cebolla\n•	½ taza de salsa de tomate California\n•	½ taza de caldo de carne\n•	½ lb. De queso campesino\n•	Sal, pimienta y comino\n","");
INSERT INTO recetas VALUES("7","recetas_7.jpg","recetas_7.jpg","Crema de ahuyama con alverjas","\n\n\n\n\n\n\n 2 tazas de ahuyama picada en trozos \n\n»  1 taza de arvejas California \n\n»  3 tazas de agua \n\n»  Tostaditas de pan para decorar\n\n","");



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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO recetas_preparacion VALUES("1","1","ponga a cocinar a fuego medio tapado con leche, el azúcar, las uvas, la canela y la pizca de sal por espacio de 40 min o hasta ablandar");
INSERT INTO recetas_preparacion VALUES("2","1","Remoje el arroz desde el día anterior");
INSERT INTO recetas_preparacion VALUES("10","1","revuelva de vez en cuando, cuando esté listo agregar la crema y la leche condensada incorporar bien, cocer por 5 min");
INSERT INTO recetas_preparacion VALUES("11","1","al final adicionar esencia.");
INSERT INTO recetas_preparacion VALUES("12","5","Para preparar las albóndigas, mezcla los ingredientes en un recipiente grande usando tus manos. Forma 24 albóndigas con la mezcla. Colócalas en una bandeja, cúbrelas y refrigera hasta que sea el momento de cocinar.");
INSERT INTO recetas_preparacion VALUES("13","5","Para hacer la salsa, mezcla el puré de tomate, la cebolla, el caldo, el comino, el orégano, los chipotles con su adobo y el ajo en una licuadora. Agrega un poco de agua si está muy espesa y no licua bien.");
INSERT INTO recetas_preparacion VALUES("14","5","Calienta el aceite en una olla de hierro grande a fuego medio. En tandas, agrega las albóndigas y cocina por unos 4 minutos, revolviendo ocasionalmente, hasta que estén ligeramente doradas. Con una cuchara calada, pasa las albóndigas a un plato. Añade el puré de chipotle a la olla y cubre parcialmente. Calienta a fuego lento hasta que hierva. Reduce el fuego a medio-bajo y deja hervir por unos 10 minutos, revolviendo de vez en cuando para mezclar los sabores. Vuelve a echar las albóndigas a la olla y revuelve suavemente para cubrirlas con la salsa. Cubre completamente la olla y cocina a fuego lento por unos 15 minutos, revolviendo a mitad de la cocción, hasta que las albóndigas estén cocidas ");
INSERT INTO recetas_preparacion VALUES("15","5","En una olla grande con agua hirviendo cocina la pasta ");
INSERT INTO recetas_preparacion VALUES("16","5","Sirve la pasta en una fuente, acomoda las albóndigas con la salsa encima y espolvorea con el cilantro –si decides usarlo");
INSERT INTO recetas_preparacion VALUES("17","6","Patacones: \nSe corta el plátano en trozos, cortándolos como si fueran rodajas pero más gruesas, se ponen a freír en el aceite hasta que estén dorados por los dos lados. Se retiran y se ponen en una bolsa de plástico para después pasarlos por la pataconera, en dado caso que no se tenga una se pueden machacar con una botella o alguna superficie redonda. \n");
INSERT INTO recetas_preparacion VALUES("18","6","Carne Desmechada:\nSe pone a cocer la carne y se le añade la sal, pimienta y comino. Se deja cocer de 45 minutos a 1 hora hasta que la carne este blanda y manejable. Una vez que se enfría se aparta y se desmecha. En un sartén con aceite ponemos los tomates, la cebolla y el ajo. Se saltea y se sazona con sal, comino y pimienta; se le añade el caldo de carne y la salsa de tomate California. Se deja hervir por 3 minutos y se añade la carne, se deja cocer por 10 minutos. \nSe pone la carne sobre los petacones y se rocía con queso campesino, se sirve.\n");
INSERT INTO recetas_preparacion VALUES("19","7","Cocinar la ahuyama en 4 taza de agua hirviendo con el caldo de gallina por 15 minutos para ablandarla. Escurrir y reservar el agua donde se cocino la ahuyama. ");
INSERT INTO recetas_preparacion VALUES("20","7","Licuar la MAYONESA CALIFORNIA con la ahuyama, la fécula de maíz, y la leche. ");
INSERT INTO recetas_preparacion VALUES("21","7","Llevar a una olla y agregar 3 tazas del agua donde se cocino la ahuyama");
INSERT INTO recetas_preparacion VALUES("22","7","Revolver ocasionalmente hasta que hierva. Agregar las arvejas bajar el fuego y continuar la cocción por 8 minutos más para que tome consistencia. ");
INSERT INTO recetas_preparacion VALUES("23","7","Revolver ocasionalmente hasta que hierva. Agregar las arvejas bajar el fuego y continuar la cocción por 8 minutos más para que tome consistencia. ");
INSERT INTO recetas_preparacion VALUES("24","7","Sirve esta crema de ahuyama decorando con unas tostaditas de pan.");



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

INSERT INTO somos VALUES("1","somos_1.jpg","-DiLMHNCYpE","INCOLACTEOS","<h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Misión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Generar bienestar a través de alimentos nutritivos, saludables y de fácil consumo mediante su producción y comercialización con beneficios para los diferentes grupos de interés. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Visión&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Posicionar nuestra organización dentro de las diez principales compañías del sector de lácteos y bebidas en Colombia para el año 2018. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Valores corporativos INCOLACTEOS ltda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Experiencia: Sabemos cómo hacerlo bien.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Mejoramiento Continuo: Trabajamos cada día para hacerlo mejor.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Compromiso: Cumplimos lo prometido con responsabilidad.</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Respeto: Convivimos con armonía en medio de las diferencias.&nbsp;</p><p style=&#34;font-size: 13px; font-weight: normal;&#34;>Ética: Somos leales a las sanas costumbres.</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>Política integral &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;><p style=&#34;text-align: justify; font-size: 13px; font-weight: normal;&#34;>“INCOLACTEOS LTDA Y ERWIS ASOCIADOS &nbsp;procesadoras y comercializadoras de alimentos cumpliendo responsablemente con la inocuidad y el aporte nutricional de sus productos, trabajara activamente con programas de gestión integral. Migrando progresivamente a un enfoque por procesos orientados a la mejora continúa. Nuestros objetivos fundamentales la calidad, la seguridad alimentaria, el medio ambiente y la seguridad de nuestros trabajadores cumpliendo la legislación y normatividad nacional nos permitirá responder &nbsp;satisfactoriamente a los requisitos de nuestros clientes, consumidores y partes interesadas liderando el sector de alimentos, nuestra experiencia hace la calidad y nuestra gente la excelencia &nbsp;es la base para el logro de nuestros objetivos.&nbsp;</p><p style=&#34;text-align: justify; font-size: 13px; font-weight: normal;&#34;>Nuestra organización es consciente de cuidar co- responsablemente nuestro entorno y por esto da cumplimiento a la legislación ambiental, con la implementación de procedimientos &nbsp;que &nbsp;favorezcan ambientes más sanos &nbsp;y ejecutando acciones &nbsp;para prevenir y mitigar los impactos generados por sus procesos , implementando el sistema de gestión ambiental el cual es evaluado &nbsp;en su desempeño constantemente realizando producciones mal limpias y amigables con el entorno y revisando los objetivos y metas ambientales por la alta gerencia , de igual manera mediante el sistema &nbsp;de gestión Salud ocupacional y seguridad industrial velara por la integridad de todos sus colaboradores implementando programas que contribuyan a la prevención de lesiones y enfermedades cumpliendo los requisitos legales aplicables&#34;.</p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>LECHESAN S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>\n\n<p class=&#34;MsoNormal&#34;>En\n1.971 se construyó la planta en la que actualmente funciona y así mismo se\nhabía inaugurado el más moderno Centro de Acopio de Leche existente en la\nregión, ubicado en la población de San Alberto, Cesar.</p><p class=&#34;MsoNormal&#34;>La\ndistribución de la leche se realizaba puerta a puerta, en la que se entregaba\nla leche en cada hogar por medio de unas tiqueteras que las familias adquirían\ncon anterioridad.</p><p class=&#34;MsoNormal&#34;>En\n1.973 se inicia la adquisición progresiva de las actuales máquinas envasadoras\npara polietileno y la distribución de la leche pasteurizada en bolsa.</p><p class=&#34;MsoNormal&#34;>En\n1.990, la apertura económica exigió ser más competitivos, la compañía inicia el\nmontaje de una de las plantas más modernas para el procesamiento y envasado de\nproductos lácteos con tecnología de Ultrapasteurización en envases Tetra-Pak.</p><p class=&#34;MsoNormal&#34;>\n\n\n\n\n\n\n\n</p><p class=&#34;MsoNormal&#34;>La\ncompañía incursiona en el mercado de Bogotá con leche pasteurizada en bolsa con\nel montaje de una nueva planta Pasteurizadora ubicada en la región de Simijaca\n(Cundinamarca).  </p></h1><h1 style=&#34;font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;&#34;>CONSERVAS CALIFORNIA S.A. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1><h1><p class=&#34;MsoNormal&#34;>• En 1950 se inicia la producción de Pasta de\nTomate.</p><p class=&#34;MsoNormal&#34;>\n• En 1952 se importan concentrados de frutas.</p><p class=&#34;MsoNormal&#34;>\n• En 1967 se comenzó a producir néctares en envases de vidrio.</p><p class=&#34;MsoNormal&#34;>\n• En 1971, la multinacional NESTLE compra CONSERVAS CALIFORNIA; a la\nmultinacional Grace.</p><p class=&#34;MsoNormal&#34;>• En 1982, Nestlé vende la planta al grupo inversionista actual, se reinicia la\nproducción de nuevos productos</p></h1>","1");



DROP TABLE IF EXISTS subproductos;

CREATE TABLE `subproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_productos` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subproductos_productos1_idx` (`id_productos`),
  CONSTRAINT `subproductos_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;




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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;




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



