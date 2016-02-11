CREATE DATABASE IF NOT EXISTS 802995_acerarq;

/*USE 802995_acerarq;*/

DROP TABLE IF EXISTS ano;

CREATE TABLE `ano` (
  `idano` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(200) NOT NULL,
  PRIMARY KEY (`idano`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

INSERT INTO ano VALUES("1","1990");
INSERT INTO ano VALUES("2","1991");
INSERT INTO ano VALUES("3","1992");
INSERT INTO ano VALUES("4","1993");
INSERT INTO ano VALUES("5","1994");
INSERT INTO ano VALUES("6","1995");
INSERT INTO ano VALUES("7","1996");
INSERT INTO ano VALUES("8","1997");
INSERT INTO ano VALUES("9","1998");
INSERT INTO ano VALUES("10","1999");
INSERT INTO ano VALUES("11","2000");
INSERT INTO ano VALUES("12","2001");
INSERT INTO ano VALUES("13","2002");
INSERT INTO ano VALUES("14","2003");
INSERT INTO ano VALUES("15","2004");
INSERT INTO ano VALUES("16","2005");
INSERT INTO ano VALUES("17","2006");
INSERT INTO ano VALUES("18","2007");
INSERT INTO ano VALUES("19","2008");
INSERT INTO ano VALUES("20","2009");
INSERT INTO ano VALUES("21","2010");
INSERT INTO ano VALUES("22","2011");
INSERT INTO ano VALUES("23","2012");
INSERT INTO ano VALUES("24","2013");
INSERT INTO ano VALUES("25","2014");
INSERT INTO ano VALUES("26","2015");
INSERT INTO ano VALUES("27","2016");
INSERT INTO ano VALUES("28","2017");
INSERT INTO ano VALUES("29","2018");
INSERT INTO ano VALUES("30","2019");
INSERT INTO ano VALUES("31","2020");
INSERT INTO ano VALUES("32","2021");
INSERT INTO ano VALUES("33","2022");
INSERT INTO ano VALUES("34","2023");
INSERT INTO ano VALUES("35","2024");
INSERT INTO ano VALUES("36","2025");
INSERT INTO ano VALUES("37","2026");
INSERT INTO ano VALUES("38","2027");
INSERT INTO ano VALUES("39","2028");
INSERT INTO ano VALUES("40","2029");
INSERT INTO ano VALUES("41","2030");
INSERT INTO ano VALUES("42","2031");
INSERT INTO ano VALUES("43","2032");
INSERT INTO ano VALUES("44","2033");
INSERT INTO ano VALUES("45","2034");
INSERT INTO ano VALUES("46","2035");
INSERT INTO ano VALUES("47","2036");
INSERT INTO ano VALUES("48","2037");
INSERT INTO ano VALUES("49","2038");
INSERT INTO ano VALUES("50","2039");
INSERT INTO ano VALUES("51","2040");
INSERT INTO ano VALUES("52","2041");
INSERT INTO ano VALUES("53","2042");
INSERT INTO ano VALUES("54","2043");
INSERT INTO ano VALUES("55","2044");
INSERT INTO ano VALUES("56","2045");
INSERT INTO ano VALUES("57","2046");
INSERT INTO ano VALUES("58","2047");
INSERT INTO ano VALUES("59","2048");
INSERT INTO ano VALUES("60","2049");
INSERT INTO ano VALUES("61","2050");
INSERT INTO ano VALUES("62","1980");
INSERT INTO ano VALUES("63","1981");
INSERT INTO ano VALUES("64","1982");
INSERT INTO ano VALUES("65","1983");
INSERT INTO ano VALUES("66","1984");
INSERT INTO ano VALUES("67","1985");
INSERT INTO ano VALUES("68","1986");
INSERT INTO ano VALUES("69","1987");
INSERT INTO ano VALUES("70","1988");
INSERT INTO ano VALUES("71","1989");



DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("14","º","banner_14.jpg");
INSERT INTO banner VALUES("15","º","banner_15.png");
INSERT INTO banner VALUES("16","Equilibrio para su proyecto","banner_16.png");
INSERT INTO banner VALUES("17","Experiencia","banner_17.jpg");
INSERT INTO banner VALUES("18","+","banner_18.png");



DROP TABLE IF EXISTS banner_dos;

CREATE TABLE `banner_dos` (
  `idbanner_dos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner_dos`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO banner_dos VALUES("8","Fácil y rápido montaje. ","banner_8.png");
INSERT INTO banner_dos VALUES("10","Módulos fácilmente transportables.  ","banner_9.png");



DROP TABLE IF EXISTS banner_sirius;

CREATE TABLE `banner_sirius` (
  `idbanner_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idbanner_sirius`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO banner_sirius VALUES("1","Fabricación en nuestro taller","Sirius puente modular","banner_1.png");
INSERT INTO banner_sirius VALUES("10","Proceso de montaje","Sirius puente modular","banner_2.png");
INSERT INTO banner_sirius VALUES("11","Soldadura certificada","Sirius puente modular","banner_11.png");
INSERT INTO banner_sirius VALUES("12","Fácilmente transportable","Sirius puente modular","banner_12.png");



DROP TABLE IF EXISTS bienvenida;

CREATE TABLE `bienvenida` (
  `idbienvenida` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`idbienvenida`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO bienvenida VALUES("1","Acerarq SAS","  Somos una empresa colombiana de ingeniería con amplia experiencia en el diseño, fabricación y montaje de estructuras civiles en acero, edificaciones, puentes vehiculares y peatonales.
\nInnovación y tecnología al servicio del éxito de su proyecto","http://www.acerarq.com/index.php?seccion=empresa");



DROP TABLE IF EXISTS bienvenida_sirius;

CREATE TABLE `bienvenida_sirius` (
  `idbienvenida_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idbienvenida_sirius`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO bienvenida_sirius VALUES("1","Sirius"," Ofrecemos un aliado estratégico para operaciones logísticas, exploraciones mineras y de hidrocarburos, atención de emergencias. Sirius es un puente modular en acero diseñado y fabricado en Colombia bajo las más estrictas normas técnicas y de calidad.");



DROP TABLE IF EXISTS caracteristicas_sirius;

CREATE TABLE `caracteristicas_sirius` (
  `idcaracteristicas_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idcaracteristicas_sirius`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO caracteristicas_sirius VALUES("1","Diseño modular con piezas prefabricadas e intercambiables1
\n");
INSERT INTO caracteristicas_sirius VALUES("2","Acero ASTM 572 /A50");
INSERT INTO caracteristicas_sirius VALUES("3","Proceso de soldadura normalizada y certificada");
INSERT INTO caracteristicas_sirius VALUES("4","Fácil reemplazo de uniones apernadas");
INSERT INTO caracteristicas_sirius VALUES("5","Protección anticorrosiva con pintura Epóxica especial para el trópico");
INSERT INTO caracteristicas_sirius VALUES("6","Disponibilidad de acabado en diferentes colores");
INSERT INTO caracteristicas_sirius VALUES("7","Disponibilidad de tableros de piso en distintos acabados");
INSERT INTO caracteristicas_sirius VALUES("8","Elementos no estructurales, de protección y señalización en materiales reciclados");
INSERT INTO caracteristicas_sirius VALUES("10","Contribuye con la Responsabilidad Social Empresarial");



DROP TABLE IF EXISTS categoria_obras;

CREATE TABLE `categoria_obras` (
  `idcategoria_obras` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`idcategoria_obras`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO categoria_obras VALUES("1","Obras civiles");
INSERT INTO categoria_obras VALUES("2","Interventorias");
INSERT INTO categoria_obras VALUES("3","Consultorias");
INSERT INTO categoria_obras VALUES("4","Patologias");
INSERT INTO categoria_obras VALUES("5","Diseño y Calculo Estructural");
INSERT INTO categoria_obras VALUES("6","Arquitectura");
INSERT INTO categoria_obras VALUES("7","Apoyo Logistico");



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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://www.acerarq.com/cms/","http://www.acerarq.com/","cms@imaginamos.com","imaginamos.com");



DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/home/view","administrator");
INSERT INTO cms_menu VALUES("2","Quienes Somos","modules/quienes/view","group");
INSERT INTO cms_menu VALUES("3","Sirius","modules/sirius/view","diary");
INSERT INTO cms_menu VALUES("4","Proyectos","modules/proyectos/view","clipboard");
INSERT INTO cms_menu VALUES("5","Servicios","modules/servicios/view","checkmark");
INSERT INTO cms_menu VALUES("6","Descargables","modules/descargables/view","pictures_folder");
INSERT INTO cms_menu VALUES("7","Contacto","modules/contacto/view","mail_open");
INSERT INTO cms_menu VALUES("10","Galeria","modules/galeria/view","pictures_folder");



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



DROP TABLE IF EXISTS contacto;

CREATE TABLE `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono_uno` varchar(100) NOT NULL,
  `telefono_dos` varchar(100) NOT NULL,
  `telefono_tres` varchar(100) NOT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO contacto VALUES("1","Calle 198 No. 22-62","proyectos@acerarq.com","Bogotá - Colombia","+571 672 7404","672 3554","310 788 4368");



DROP TABLE IF EXISTS contacto_des;

CREATE TABLE `contacto_des` (
  `idcontacto_des` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `mapa` text NOT NULL,
  PRIMARY KEY (`idcontacto_des`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO contacto_des VALUES("1","Contacto","     Para cotizaciones o consultas, por favor complete este formulario:","<iframe width=\"368\" height=\"378\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=+Calle+198+No.+22-62+bogota&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+198+%23+22-62,+Bogot%C3%A1,+Cundinamarca,+Colombia&amp;t=m&amp;ll=4.776514,-74.041586&amp;spn=0.032331,0.0315&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>");



DROP TABLE IF EXISTS descargables;

CREATE TABLE `descargables` (
  `iddescargables` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `archivo` text NOT NULL,
  PRIMARY KEY (`iddescargables`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO descargables VALUES("18","Pesos y dimensiones ","Pesos y dimensiones de ángulo de acero","descargables_18.jpg","Ángulos en Acero.pdf");
INSERT INTO descargables VALUES("19","Pesos y dimensiones","Pesos y dimensiones de láminas de alfajor.","descargables_19.jpg","Láminas Alfajor.pdf");
INSERT INTO descargables VALUES("20","Pesos y dimensiones","Pesos y dimensiones de láminas de acero","descargables_20.jpg","Láminas en acero.pdf");
INSERT INTO descargables VALUES("22","Pesos y dimensiones","Pesos y dimensiones de perfiles UPN","descargables_1.jpg","Perfiles UPN.pdf");
INSERT INTO descargables VALUES("23","Pesos y dimensiones","Pesos y dimensiones de Tubos de acero","descargables_1.jpg","Tubos en acero.pdf");
INSERT INTO descargables VALUES("24","Pesos y dimensiones","Pesos y dimensiones de vigas IPE","descargables_1.jpg","Vigas IPE.pdf");
INSERT INTO descargables VALUES("25","Pesos y dimensiones","Pesos y dimensiones de vigas tipo C","descargables_1.jpg","Vigas tipo C.pdf");
INSERT INTO descargables VALUES("26","Pesos y dimensiones","Pesos y dimensiones de vigas tipo C","descargables_1.jpg","Vigas tipo C.pdf");



DROP TABLE IF EXISTS galeria;

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `id_collage` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idgaleria`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO galeria VALUES("1","1","1","Acerarq SAS","Puente peatonal en Cajicá","banner_1.jpg");
INSERT INTO galeria VALUES("2","1","2","Acerarq SAS","Puente vehicular Hidrocucuana","banner_2.jpg");
INSERT INTO galeria VALUES("3","1","3","Acerarq SAS","Puente vehicular Cabuya - Yopal","banner_3.jpg");
INSERT INTO galeria VALUES("4","1","4","Acerarq SAS","Estructura de cubierta - Coliseo Pacora","banner_4.jpg");
INSERT INTO galeria VALUES("5","1","5","Acerarq SAS","Puente peatonal - Pereira","banner_5.jpg");
INSERT INTO galeria VALUES("6","1","6","Acerarq SAS","Pasarela peatonal - Taraza","banner_6.jpg");
INSERT INTO galeria VALUES("7","1","7","Acerarq SAS","Bloques de aulas y oficinas - Universidad Sergio Arboleda","banner_7.jpg");
INSERT INTO galeria VALUES("22","1","8","Acerarq SAS","Bloque F - Escuela de Ingeniería","banner_8.jpg");
INSERT INTO galeria VALUES("23","1","9","Acerarq SAS","Coliseo polideportivo - Escuela de Ingeniería","banner_23.jpg");
INSERT INTO galeria VALUES("24","2","1","Acerarq SAS","Bloque Prime - Universidad Sergio Arboleda","banner_24.jpg");
INSERT INTO galeria VALUES("25","2","2","Acerarq SAS","Hotel Roya park - Bogotá","banner_25.jpg");
INSERT INTO galeria VALUES("26","2","3","Acerarq SAS","Cubierta de cafetería - Escuela de Ingeniería","banner_26.jpg");
INSERT INTO galeria VALUES("27","2","4","Acerarq SAS","Puente vehicular Paime","banner_27.jpg");
INSERT INTO galeria VALUES("28","3","1","Acerarq SAS","Terraza Firenze - Universidad Sergio Arboleda","banner_28.jpg");
INSERT INTO galeria VALUES("29","3","2","Acerarq SAS","Puente vehicular cascabel - via Bquilla/Ctagena","banner_29.jpg");



DROP TABLE IF EXISTS galeria_imagenes;

CREATE TABLE `galeria_imagenes` (
  `idgaleria_imagenes` int(11) NOT NULL AUTO_INCREMENT,
  `idgaleria` int(1) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idgaleria_imagenes`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

INSERT INTO galeria_imagenes VALUES("10","2","banner_10.jpg");
INSERT INTO galeria_imagenes VALUES("11","2","banner_11.jpg");
INSERT INTO galeria_imagenes VALUES("12","2","banner_12.jpg");
INSERT INTO galeria_imagenes VALUES("14","2","banner_14.jpg");
INSERT INTO galeria_imagenes VALUES("15","3","banner_15.jpg");
INSERT INTO galeria_imagenes VALUES("16","3","banner_16.jpg");
INSERT INTO galeria_imagenes VALUES("17","3","banner_17.jpg");
INSERT INTO galeria_imagenes VALUES("19","3","banner_19.jpg");
INSERT INTO galeria_imagenes VALUES("20","3","banner_20.jpg");
INSERT INTO galeria_imagenes VALUES("21","4","banner_21.jpg");
INSERT INTO galeria_imagenes VALUES("22","4","banner_22.jpg");
INSERT INTO galeria_imagenes VALUES("23","4","banner_23.jpg");
INSERT INTO galeria_imagenes VALUES("24","4","banner_24.jpg");
INSERT INTO galeria_imagenes VALUES("25","4","banner_25.jpg");
INSERT INTO galeria_imagenes VALUES("26","5","banner_26.jpg");
INSERT INTO galeria_imagenes VALUES("27","5","banner_27.jpg");
INSERT INTO galeria_imagenes VALUES("28","5","banner_28.jpg");
INSERT INTO galeria_imagenes VALUES("30","5","banner_30.jpg");
INSERT INTO galeria_imagenes VALUES("31","6","banner_31.jpg");
INSERT INTO galeria_imagenes VALUES("32","6","banner_32.jpg");
INSERT INTO galeria_imagenes VALUES("33","6","banner_33.jpg");
INSERT INTO galeria_imagenes VALUES("34","6","banner_34.jpg");
INSERT INTO galeria_imagenes VALUES("35","6","banner_35.jpg");
INSERT INTO galeria_imagenes VALUES("36","7","banner_36.jpg");
INSERT INTO galeria_imagenes VALUES("37","7","banner_37.jpg");
INSERT INTO galeria_imagenes VALUES("38","7","banner_38.jpg");
INSERT INTO galeria_imagenes VALUES("39","7","banner_39.jpg");
INSERT INTO galeria_imagenes VALUES("40","7","banner_40.jpg");
INSERT INTO galeria_imagenes VALUES("62","7","banner_62.jpg");
INSERT INTO galeria_imagenes VALUES("69","22","banner_63.jpg");
INSERT INTO galeria_imagenes VALUES("70","22","banner_70.jpg");
INSERT INTO galeria_imagenes VALUES("71","22","banner_71.jpg");
INSERT INTO galeria_imagenes VALUES("72","22","banner_72.jpg");
INSERT INTO galeria_imagenes VALUES("73","22","banner_73.jpg");
INSERT INTO galeria_imagenes VALUES("74","22","banner_74.jpg");
INSERT INTO galeria_imagenes VALUES("75","22","banner_75.jpg");
INSERT INTO galeria_imagenes VALUES("76","23","banner_76.jpg");
INSERT INTO galeria_imagenes VALUES("77","23","banner_77.jpg");
INSERT INTO galeria_imagenes VALUES("78","23","banner_78.jpg");
INSERT INTO galeria_imagenes VALUES("79","23","banner_79.jpg");
INSERT INTO galeria_imagenes VALUES("80","23","banner_80.jpg");
INSERT INTO galeria_imagenes VALUES("81","23","banner_81.jpg");
INSERT INTO galeria_imagenes VALUES("82","23","banner_82.jpg");
INSERT INTO galeria_imagenes VALUES("83","23","banner_83.jpg");
INSERT INTO galeria_imagenes VALUES("84","23","banner_84.jpg");
INSERT INTO galeria_imagenes VALUES("85","23","banner_85.jpg");
INSERT INTO galeria_imagenes VALUES("86","1","banner_86.jpg");
INSERT INTO galeria_imagenes VALUES("87","1","banner_87.jpg");
INSERT INTO galeria_imagenes VALUES("88","1","banner_88.jpg");
INSERT INTO galeria_imagenes VALUES("89","24","banner_89.jpg");
INSERT INTO galeria_imagenes VALUES("90","24","banner_90.jpg");
INSERT INTO galeria_imagenes VALUES("91","24","banner_91.jpg");
INSERT INTO galeria_imagenes VALUES("92","24","banner_92.jpg");
INSERT INTO galeria_imagenes VALUES("93","24","banner_93.jpg");
INSERT INTO galeria_imagenes VALUES("94","24","banner_94.jpg");
INSERT INTO galeria_imagenes VALUES("95","24","banner_95.jpg");
INSERT INTO galeria_imagenes VALUES("96","24","banner_96.jpg");
INSERT INTO galeria_imagenes VALUES("97","24","banner_97.jpg");
INSERT INTO galeria_imagenes VALUES("98","24","banner_98.jpg");
INSERT INTO galeria_imagenes VALUES("99","24","banner_99.jpg");
INSERT INTO galeria_imagenes VALUES("102","5","banner_100.jpg");
INSERT INTO galeria_imagenes VALUES("103","25","banner_103.jpg");
INSERT INTO galeria_imagenes VALUES("104","25","banner_104.jpg");
INSERT INTO galeria_imagenes VALUES("105","25","banner_105.jpg");
INSERT INTO galeria_imagenes VALUES("106","25","banner_106.jpg");
INSERT INTO galeria_imagenes VALUES("107","25","banner_107.jpg");
INSERT INTO galeria_imagenes VALUES("108","26","banner_108.jpg");
INSERT INTO galeria_imagenes VALUES("109","26","banner_109.jpg");
INSERT INTO galeria_imagenes VALUES("110","26","banner_110.jpg");
INSERT INTO galeria_imagenes VALUES("111","26","banner_111.jpg");
INSERT INTO galeria_imagenes VALUES("112","26","banner_112.jpg");
INSERT INTO galeria_imagenes VALUES("113","27","banner_113.jpg");
INSERT INTO galeria_imagenes VALUES("114","27","banner_114.jpg");
INSERT INTO galeria_imagenes VALUES("115","27","banner_115.jpg");
INSERT INTO galeria_imagenes VALUES("116","27","banner_116.jpg");
INSERT INTO galeria_imagenes VALUES("117","28","banner_117.jpg");
INSERT INTO galeria_imagenes VALUES("118","28","banner_118.jpg");
INSERT INTO galeria_imagenes VALUES("119","28","banner_119.jpg");
INSERT INTO galeria_imagenes VALUES("120","28","banner_120.jpg");
INSERT INTO galeria_imagenes VALUES("121","28","banner_121.jpg");
INSERT INTO galeria_imagenes VALUES("122","29","banner_122.jpg");
INSERT INTO galeria_imagenes VALUES("123","29","banner_123.jpg");
INSERT INTO galeria_imagenes VALUES("124","29","banner_124.jpg");
INSERT INTO galeria_imagenes VALUES("125","29","banner_125.jpg");
INSERT INTO galeria_imagenes VALUES("126","2","banner_126.jpg");



DROP TABLE IF EXISTS mes;

CREATE TABLE `mes` (
  `idmes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idmes`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO mes VALUES("1","Enero");
INSERT INTO mes VALUES("2","Febrero");
INSERT INTO mes VALUES("3","Marzo");
INSERT INTO mes VALUES("4","Abril");
INSERT INTO mes VALUES("5","Mayo");
INSERT INTO mes VALUES("6","Junio");
INSERT INTO mes VALUES("7","Julio");
INSERT INTO mes VALUES("8","Agosto");
INSERT INTO mes VALUES("9","Septiembre");
INSERT INTO mes VALUES("10","Octubre");
INSERT INTO mes VALUES("11","Noviembre");
INSERT INTO mes VALUES("12","Diciembre");



DROP TABLE IF EXISTS newsletter;

CREATE TABLE `newsletter` (
  `idnewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`idnewsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO newsletter VALUES("4","Luis Mejia","luis.mejia@imaginamos.com.co");
INSERT INTO newsletter VALUES("7","Diana Sandoval","diana.sandoval@imaginamos.com.co");



DROP TABLE IF EXISTS obras;

CREATE TABLE `obras` (
  `idobras` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria_obras` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idobras`),
  KEY `fk_obras_categoria_obras1_idx` (`idcategoria_obras`),
  CONSTRAINT `fk_obras_categoria_obras1` FOREIGN KEY (`idcategoria_obras`) REFERENCES `categoria_obras` (`idcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO obras VALUES("1","1","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>Dise&ntilde;o</li>
\n<li>C&aacute;lculo estructural</li>
\n<li>Movimiento de tierras</li>
\n<li>Fabricaci&oacute;n de piezas</li>
\n<li>Montaje</li>
\n<li>Construcci&oacute;n</li>
\n<li>Mantenimiento</li>
\n</ul>");
INSERT INTO obras VALUES("2","2","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>
\n<ul>
\n<li>Dise&ntilde;o</li>
\n<li>Calculo estructural</li>
\n<li>Movimiento de tierras</li>
\n<li>Fabricaci&oacute;n de piezas</li>
\n<li>Montaje</li>
\n<li>Construcci&oacute;n</li>
\n</ul>
\nMantenimiento</li>
\n</ul>");
INSERT INTO obras VALUES("3","3","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>lista 1</li>
\n<li>lista 2
\n<ul class=&quot;sublist-destacado&quot;>
\n<li>lista 2.1</li>
\n</ul>
\n</li>
\n<li>lista 3</li>
\n</ul>");
INSERT INTO obras VALUES("4","4","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>lista 1</li>
\n<li>lista 2
\n<ul class=&quot;sublist-destacado&quot;>
\n<li>lista 2.1</li>
\n</ul>
\n</li>
\n<li>lista 3</li>
\n</ul>");
INSERT INTO obras VALUES("5","5","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>lista 1</li>
\n<li>lista 2
\n<ul class=&quot;sublist-destacado&quot;>
\n<li>lista 2.1</li>
\n</ul>
\n</li>
\n<li>lista 3</li>
\n</ul>");
INSERT INTO obras VALUES("6","6","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>lista 1</li>
\n<li>lista 2
\n<ul class=&quot;sublist-destacado&quot;>
\n<li>lista 2.1</li>
\n</ul>
\n</li>
\n<li>lista 3</li>
\n</ul>");
INSERT INTO obras VALUES("7","7","Obras civiles","<ul class=&quot;list-destacado&quot;>
\n<li>lista 1</li>
\n<li>lista 2
\n<ul class=&quot;sublist-destacado&quot;>
\n<li>lista 2.1</li>
\n</ul>
\n</li>
\n<li>lista 3</li>
\n</ul>");



DROP TABLE IF EXISTS proyectos;

CREATE TABLE `proyectos` (
  `idproyectos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `proyecto` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `uso` varchar(100) NOT NULL,
  `area` decimal(10,2) NOT NULL,
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
  KEY `fk_proyectos_mes2_idx` (`mes_ini`),
  KEY `proyecto` (`proyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

INSERT INTO proyectos VALUES("3","Hotel Holiday","Edificio Hotel Holiday-Inn","Bogotá DC","Habitaciones / oficinas","22000.00","Excavación, cimentación, diseño, fabricación y montaje de la estructura de acero, acabados y amueblamiento tipo llave en mano.","Holiday-Inn","5","2","0","0");
INSERT INTO proyectos VALUES("4","Fábrica Medina","Edificio Fábrica Medina Hermanos","Bogotá DC","Bodega / oficinas","1100.00","de acero.
\nTiempo de montaje: 20 días.
\n","Particular","7","1","0","0");
INSERT INTO proyectos VALUES("5","Bodegas Procar","Bodegas Procar","Bogotá DC","Bodega / oficinas","550.00","Diseño, fabricación y montaje de la estructura de acero, incluyendo la cubierta.
\nTiempo de montaje: 20 días.
\n","Particular","7","1","0","0");
INSERT INTO proyectos VALUES("6","Edif. Oficinas","Edificio de oficinas – Calle 106","Bogotá DC","Oficinas ","3000.00","Diseño y construcción de la cimentación.","Particular","7","12","0","0");
INSERT INTO proyectos VALUES("7","Edif. Hispania","Edificio Hispania – Calle 53 No. 21-39","Bogotá DC","Oficinas ","1616.00","Cimentación, diseño, fabricación y montaje de la estructura de acero.
\nTiempo de montaje: 20 días.
\n","Particular","7","12","0","0");
INSERT INTO proyectos VALUES("8","Kokoriko","Restaurante Kokoriko","Manizales","Local restaurante ","1058.00","Diseño, fabricación y montaje de la estructura de acero distribuida en dos niveles.
\nEl tiempo de montaje: 30 días.
\n","Restaurantes Kokoriko","9","11","0","0");
INSERT INTO proyectos VALUES("9","Escuelas Rurale","Escuelas Rurales","La Unión, San Pablo, Belén, La Chorrera, La Betulia, Sandona, Concasa - Nariño","Aulas / servicios ","830.00","Diseño y construcción de cimentación, estructuras y acabados.","Federación Nacional de Cafeteros - Nariño","66","0","7","0");
INSERT INTO proyectos VALUES("10","Edificio aulas","Edificio de aulas","Bogotá DC","Oficinas y aulas ","1000.00","Excavación, cimentación, fabricación y montaje de la estructura en acero.
\nTiempo de montaje: 22 días.
\n","Universidad Sergio Arboleda","6","6","0","0");
INSERT INTO proyectos VALUES("11","Sede univ.","Sede universitaria ","Barranquilla","Aulas y laboratorios ","3069.00","Diseño, fabricación y montaje de la estructura de acero. 
\nTiempo de montaje: 36 días
\n","Fundación Universitaria San Martín","6","11","0","0");
INSERT INTO proyectos VALUES("12","Sede uni. I Eta","Sede universitaria  I Etapa –  Cra. 19-calle 80","Bogotá DC","Oficinas y aulas ","1873.00","Excavación, cimentación y montaje de la estructura de acero distribuida en 8 pisos. 
\nTiempo de montaje: 20 días
\n","Fundación Universitaria San Martín","7","5","0","0");
INSERT INTO proyectos VALUES("13","Bloque F – Univ","Bloque F – Universidad Sergio Arboleda","Bogotá DC","Oficinas y aulas ","5772.00","Fabricación y montaje de la estructura en acero.
\nTiempo de montaje: 60 días.
\n","Universidad Sergio Arboleda","7","10","0","0");
INSERT INTO proyectos VALUES("14","Sede univ Cra15","Sede universitaria   –  Cra. 15-calle 60","Bogotá DC","Oficinas y aulas ","1666.00","Diseño, fabricación  y montaje de la estructura de acero distribuida en 8 pisos. 
\nTiempo de montaje: 35 días
\n","Fundación Universitaria San Martín","8","1","0","0");
INSERT INTO proyectos VALUES("15","Sede uni II Eta","Sede universitaria  II Etapa –  Cra. 19-calle 80","Bogotá DC","Oficinas y aulas ","1600.00","Montaje de la estructura de acero distribuida en 8 pisos. 
\nTiempo de montaje: 20 días
\n","Fundación Universitaria San Martín","8","7","0","0");
INSERT INTO proyectos VALUES("16","Sede uni. R C","Sede universitaria –  Regional Caribe","Barranquilla","Oficinas y aulas ","2480.00","Diseño, fabricación y montaje de la estructura de acero. 
\nTiempo de montaje: 25 días
\n","Fundación Universitaria San Martín","8","11","0","0");
INSERT INTO proyectos VALUES("17","Sede uni. Rio","Sede universitaria –  Riohacha"," Riohacha","Oficinas y aulas ","2400.00","Diseño, fabricación y montaje de la estructura de acero distribuida en tres niveles.
\nTiempo de montaje: 20 días.
\n","Fundación Universitaria San Martín","10","1","0","0");
INSERT INTO proyectos VALUES("18","Sede uni Sabane","Sede universitaria –  Sabaneta","Sabaneta","Oficinas y aulas ","2000.00","Diseño, fabricación y montaje de la estructura de acero de tres edificios para las facultades de medicina, administración y finanzas.
\nTiempo de montaje: 90 días.
\n","Fundación Universitaria San Martín","11","5","0","0");
INSERT INTO proyectos VALUES("19","Domo Observator","Domo Observatorio astronómico","Bogotá DC","Oficina / Observatorio","97.00","Adecuación piso 10 de la torre F, incluyendo el refuerzo estructural y montaje del domo con sus acabados interiores y  una escalera exterior en acero.","Universidad Sergio Arboleda","11","7","0","0");
INSERT INTO proyectos VALUES("20","Edif Uni Se. A.","Edificio Cra. 15 – Universidad Sergio Arboleda","Bogotá DC","Oficinas y aulas ","2038.00","Fabricación y montaje de la estructura en acero, la instalación del ascensor y la construcción de la mampostería  en ladrillo a la vista para los muros de fachadas.","Universidad Sergio Arboleda","12","7","0","0");
INSERT INTO proyectos VALUES("21","Uni. Santa Mart","Universidad Sergio Arboleda – Santa Marta","Santa Marta","Oficinas y aulas ","6400.00","Fabricación y montaje de la estructura en acero y acabados para la sede universitaria.","Universidad Sergio Arboleda","13","7","0","0");
INSERT INTO proyectos VALUES("22","Fiduciaria petr","Fiduciaria petrolera","El Guamal, Meta","Aulas y servicios ","984.00","Construcción de tres módulos educativos, cuatro baterías de baño y un centro comunitario. ","FIDUPETROL SA","13","8","0","0");
INSERT INTO proyectos VALUES("23","Uni. Sergio A","Universidad Sergio Arboleda","Bogotá DC","Oficinas y aulas ","2127.00","Remodelación del edificio de postgrados, zonas de parqueaderos, sótanos de acceso peatonal e impermeabilización de cubiertas.","Universidad Sergio Arboleda","14","9","0","0");
INSERT INTO proyectos VALUES("24","Fiduciaria petr","Fiduciaria petrolera","El Guamal, Meta","Aulas y servicios ","984.00","Construcción de tres módulos educativos, cuatro baterías de baño y un centro comunitario. ","FIDUPETROL SA","13","8","0","0");
INSERT INTO proyectos VALUES("25","Fiduciaria petr","Fiduciaria petrolera","El Guamal, Meta","Aulas y servicios ","984.00","Construcción de tres módulos educativos, cuatro baterías de baño y un centro comunitario. ","FIDUPETROL SA","13","8","0","0");
INSERT INTO proyectos VALUES("26","Uni S.A BloqueD","Universidad Sergio Arboleda -  Bloque D","Bogotá DC","Oficinas y aulas ","2038.00","Montaje de la estructura en acero.","Universidad Sergio Arboleda","15","4","0","0");
INSERT INTO proyectos VALUES("27","Hogar ICBF","Hogar múltiple ICBF","Santa Rosa Sur , Bolívar","Aulas / servicios ","842.00","Construcción, montaje de estructura y acabados.","ICBF","16","1","0","0");
INSERT INTO proyectos VALUES("28","Boloq F es inge","Bloque F – Escuela Ingeniería","Bogotá DC","Oficinas y aulas ","4200.00","Fabricación y montaje de la estructura en acero","Escuela Colombiana de Ingeniería","16","7","0","0");
INSERT INTO proyectos VALUES("29","Aero. San Luis","Aeropuerto San Luis","Ipiales, Nariño","Terminal aérea ","0.00","Movimiento de tierra y adecuación de la pista.","Aeronáutica Civil","14","7","0","0");
INSERT INTO proyectos VALUES("30","Areo. Florencia","Aeropuerto de Florencia","Florencia, Caquetá","Terminal aérea ","0.00","Reforzamiento estructural de la terminal aérea","Aeronáutica Civil","15","2","0","0");
INSERT INTO proyectos VALUES("31","Aero Neiva","Aeropuerto Neiva","Neiva, Huila","Terminal aérea ","0.00","Mejoramiento del sistema de cerramiento del predio de la terminal aérea","Aeronáutica Civil","15","6","0","0");
INSERT INTO proyectos VALUES("32","Aero San And Is","Aeropuerto San Andrés Isla","San Andrés Isla","Terminal aérea ","0.00","Obras de mejoramiento del terminal y adecuación de las salas de abordaje","Aeronáutica Civil","15","7","0","0");
INSERT INTO proyectos VALUES("33","Inst. Téc. Agro","Instituto Técnico Agropecuario","Carmen de Bolívar, Santa Catalina, Loma Arena - Bolívar","Oficinas y aulas ","3484.00","Fabricación y montaje de la estructura en acero.","FONADE","17","6","0","0");
INSERT INTO proyectos VALUES("34","Uni Ser. Edif.","Universidad Sergio Arboleda -  Edificio Calle 75","Bogotá DC","Oficinas y aulas ","1448.00","Excavación, cimentación, diseño, fabricación y montaje de la estructura en acero, distribuidos en cuatro pisos.","Universidad Sergio Arboleda","23","10","24","3");



DROP TABLE IF EXISTS quienes_des;

CREATE TABLE `quienes_des` (
  `idquienes_des` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`idquienes_des`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO quienes_des VALUES("1","Quienes Somos","Acerarq S.A.S. es una organización con una experiencia de más de 15 años en el sector de la construcción y desarrollo de proyectos de obras civiles, así como en el diseño, montaje y fabricación de piezas estructurales.
\n
\nNuestro equipo de trabajo esta comprometido con la excelencia en la formulación y aplicación de los procesos a fin de garantizar soluciones efectivas para las necesidades de su proyecto. Aunque una solución no se haya implementado antes, a través de la innovación y experiencia, estamos preparados para ser su aliado estratégico en el éxito de sus proyectos.
\n
\n
\nNuestro equipo de trabajo y capacidad instalada con nuestro propio taller, nos permiten ser un socio confiable en el desarrollo de sus proyectos, atendiendo oportunamente y con alta calidad sus necesidades en infraestructura.
\n
\nNuestro espectro de servicios abarca desde la fabricación de piezas estructurales en acero, hasta el desarrollo integral, diseño y construcción de puentes vehiculares, peatonales y en estructuras en acero para edificaciones institucionales, comerciales y residenciales.
\n
\n","<h1>Misi&oacute;n</h1>
\n<p><strong>Dise&ntilde;ar, desarrollar, fabricar e implementar</strong> soluciones integrales en construcciones civiles a trav&eacute;s de una ingenier&iacute;a innovadora, eficiente y amigable con el medio ambiente.</p>
\n<h1>Visi&oacute;n</h1>
\n<p>Ofrecer ingenier&iacute;a de vanguardia excediendo las expectativas de nuestros clientes a trav&eacute;s de la excelencia y la confianza.</p>","quienes_1.jpg");



DROP TABLE IF EXISTS servicios_obras;

CREATE TABLE `servicios_obras` (
  `idservicios_obras` int(11) NOT NULL AUTO_INCREMENT,
  `idsubcategoria_obras` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idservicios_obras`),
  KEY `fk_servicios_obras_subcategoria_obras1_idx` (`idsubcategoria_obras`),
  CONSTRAINT `fk_servicios_obras_subcategoria_obras1` FOREIGN KEY (`idsubcategoria_obras`) REFERENCES `subcategoria_obras` (`idsubcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO servicios_obras VALUES("1","1","Puentes","Vehiculares y peatonales");
INSERT INTO servicios_obras VALUES("2","2","Detalle Luis ","Loerm Ipsum Dolor Sit Amet");



DROP TABLE IF EXISTS sirius_des;

CREATE TABLE `sirius_des` (
  `idsirius_des` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idsirius_des`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO sirius_des VALUES("1","A través de un proceso de investigación y diseño hemos desarrollado un puente modular en acero que permite satisfacer las necesidades logísticas y de comunicación vial, utilizando tecnología, materiales y mano de obra 100% nacional.
\n
\nSirius está diseñado bajo los más estrictos parámetros de la norma AASHTO LRFD, bridge design specifications 6th edition y el Código Colombiano de Diseño Sísmico de Puentes. 
\n
\nNuestros procesos de fabricación están sometidos a los más altos estándares de calidad a fin de asegurar un producto que plenamente satisface los requerimientos de nuestros clientes.
\n
\nLa calidad de los materiales utilizados como acero A-50, recubrimientos epóxicos de alta especificación, soldaduras certificadas, sistemas de corte y perforación de piezas con control numérico, aunado a la experiencia y capacidad de nuestro equipo de trabajo, garantizan un producto final que permite cortos tiempos de fabricación y montaje, facilitando que las operaciones logísticas y la comunicación entre comunidades sea posible prontamente y con total seguridad.
\n
\nSirius a través de un versátil diseño modular y alta tecnología, es un aliado estratégico en la implementación de operaciones logísticas en zonas de exploración minera e hidrocarburos, proceso de reparación de infraestructura vial, atención de emergencias, representando desarrollo en movimiento para su empresa y la comunidad.
\nBajo la supervisión de nuestros expertos, su montaje y apertura al tráfico se realiza en pocas horas, utilizando piezas prefabricadas bajo los más altos estándares de calidad.
\n
\n
\n");



DROP TABLE IF EXISTS subcategoria_obras;

CREATE TABLE `subcategoria_obras` (
  `idsubcategoria_obras` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idsubcategoria_obras`),
  KEY `fk_subcategoria_obras_categoria_obras1_idx` (`idcategoria`),
  CONSTRAINT `fk_subcategoria_obras_categoria_obras1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria_obras` (`idcategoria_obras`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO subcategoria_obras VALUES("1","1","Puentes Vehiculares","Puentes permanentes en acero y concreto
\nPuentes semipermanentes y modulares en acero
\n");
INSERT INTO subcategoria_obras VALUES("2","1","Puentes peatonales","Puentes / pasarelas en acero y concreto
\nPuentes / pasarelas modulares en acero
\n");
INSERT INTO subcategoria_obras VALUES("3","1","Pavimentación de vías","Pavimentos ríigidos y flexibles");
INSERT INTO subcategoria_obras VALUES("4","1","Diseño y Montaje de estructuras","Edificaciones
\nBodegas
\nInstalaciones industriales");
INSERT INTO subcategoria_obras VALUES("40","1","Acerarq SAS","Obras civiles");



DROP TABLE IF EXISTS valores;

CREATE TABLE `valores` (
  `idvalores` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`idvalores`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO valores VALUES("1","Ética","     Desarrollamos e implementamos políticas y procedimientos que reflejen los más altos estándares de calidad e integridad corporativa. ");
INSERT INTO valores VALUES("2","Innovación","Desarrollamos soluciones prácticas y novedosas para facilitar el éxito de los proyectos civiles de nuestros clientes");
INSERT INTO valores VALUES("3","Mejores prácticas","       Aplicamos estándares de mejores prácticas a todas nuestras actividades.
\n");
INSERT INTO valores VALUES("4","Respeto","Respetamos las normas aplicables que rigen nuestras operaciones, así como los derechos e integridad de nuestros empleados, clientes y asociados en el desarrollo de nuestras actividades.
\n");
INSERT INTO valores VALUES("5","Profesionalismo","   Adoptamos un enfoque profesional al efectuar operaciones y negocios para y de parte de Acerarq. 
\n");



DROP TABLE IF EXISTS ventajas_sirius;

CREATE TABLE `ventajas_sirius` (
  `idventajas_sirius` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idventajas_sirius`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO ventajas_sirius VALUES("13","•	Diseño y fabricación nacional con disponibilidad a corto plazo");
INSERT INTO ventajas_sirius VALUES("14","Tecnología con componentes estandarizados");
INSERT INTO ventajas_sirius VALUES("15","Luces hasta 54 mts en configuración doble - C4095");
INSERT INTO ventajas_sirius VALUES("16","Montaje y desmonte en pocas horas");
INSERT INTO ventajas_sirius VALUES("17","Capacidad de carga de 72 toneladas para luces hasta 24 mts");
INSERT INTO ventajas_sirius VALUES("18","Solución efectiva para facilitar operaciones logísticas");
INSERT INTO ventajas_sirius VALUES("19","Sin impacto ambiental - contribuye a la responsabilidad social");
INSERT INTO ventajas_sirius VALUES("20","Tablero inferior - módulos de 6 mts - Diseño modular flexible");
INSERT INTO ventajas_sirius VALUES("21","Disponible en Venta y Alquiler");



