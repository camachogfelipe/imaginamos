/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS usuariofbz_campana;

USE usuariofbz_campana;

DROP TABLE IF EXISTS cms_categoria;

CREATE TABLE `cms_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `cms_linea_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_catgoria_linea1_idx` (`cms_linea_id`),
  KEY `fk_cms_catgoria_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_cms_catgoria_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sub_catgoria_linea1` FOREIGN KEY (`cms_linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO cms_categoria VALUES("10","Láminas","lorem ipsum dolor amet","commodo conseq sit donec quam felis, ltricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim.","5","273");
INSERT INTO cms_categoria VALUES("11","Tuberias","adipiscing eliter","Lorem ipsum dolor sit amet, consectetur adipiscing elit","7","415");
INSERT INTO cms_categoria VALUES("12","Vigas","alu alu","Lorem ipsum dolor sit amet, consectetur adipiscing elit","9","411");
INSERT INTO cms_categoria VALUES("13","Prueba carlos","laminas de alumino","Lorem ipsum dolor sit amet, consectetur adipiscing elit","5","413");
INSERT INTO cms_categoria VALUES("14","Prueba Carlos","prueba enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit","5","414");
INSERT INTO cms_categoria VALUES("15","Prueba imaginamos","prueba enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit","9","407");
INSERT INTO cms_categoria VALUES("16","Prueba 2 imaginamos","imaginamos prueba enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit","9","408");
DROP TABLE IF EXISTS cms_contacto;

CREATE TABLE `cms_contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(21) NOT NULL,
  `direccion` varchar(31) NOT NULL,
  `telefono` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_contacto VALUES("0","hola@lacampana.co","calle 17 no. 22 - 41","57 - 1 - 370 2200");
DROP TABLE IF EXISTS cms_documento;

CREATE TABLE `cms_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cms_media_id, referecia a imagen del documento\ncms_media_id1, referencia al archivo',
  `titulo_funte1` varchar(7) DEFAULT NULL,
  `titulo_funte2` varchar(15) NOT NULL,
  `texto` varchar(218) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_documento_cms_media1_idx` (`cms_media_id`),
  KEY `fk_documento_cms_media2_idx` (`cms_media_id1`),
  CONSTRAINT `fk_documento_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_documento_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO cms_documento VALUES("6","Carlos","Gómez","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet q","360","361");
INSERT INTO cms_documento VALUES("7","risus t","eleifend portti","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet q","266","267");
INSERT INTO cms_documento VALUES("8","incidun","adipiscing","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet q","333","334");
DROP TABLE IF EXISTS cms_enterese;

CREATE TABLE `cms_enterese` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `video_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_enterese_cms_video1_idx` (`video_id`),
  KEY `fk_cms_enterese_cms_media1_idx` (`media_id`),
  KEY `fk_cms_enterese_cms_media2_idx` (`media_id1`),
  CONSTRAINT `fk_cms_enterese_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_video1` FOREIGN KEY (`video_id`) REFERENCES `cms_video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO cms_enterese VALUES("7","nullam eliter","commodo conseq sit","donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.\n\ndonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.\n\ndonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.","donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.","402","401","400");
INSERT INTO cms_enterese VALUES("8","Prueba enterate ","Prueba noticia enterate","commodo conseq sit donec quam felis, ltricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim.","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan.","393","392","391");
INSERT INTO cms_enterese VALUES("9","Prueba enterate","prueba enterate","imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba.","imaginamos prueba, imaginamos prueba, imaginamos prueba, imaginamos prueba, ","425","424","423");
INSERT INTO cms_enterese VALUES("10","Prueba Alexandra","prueba imaginamos","prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.pruebaprueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.pruebaprueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.","prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.s prueba imaginamos s.a.prueba","428","427","426");
INSERT INTO cms_enterese VALUES("11","prueba imaginamo","prueba imaginamo","prueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamo","prueba imaginamoprueba imaginamoprueba imaginamo","431","430","429");
DROP TABLE IF EXISTS cms_fmenu_items;

CREATE TABLE `cms_fmenu_items` (
  `id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_fmenu_items VALUES("1","equipo de trabajo");
INSERT INTO cms_fmenu_items VALUES("2","lineas");
INSERT INTO cms_fmenu_items VALUES("3","servicios de corte");
INSERT INTO cms_fmenu_items VALUES("4","documentos");
INSERT INTO cms_fmenu_items VALUES("5","enterate");
INSERT INTO cms_fmenu_items VALUES("6","trabaja con nosotros");
DROP TABLE IF EXISTS cms_fmenu_text;

CREATE TABLE `cms_fmenu_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(123) DEFAULT NULL,
  `fmenu_items_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_text_menu_cms_items_menu` (`fmenu_items_id`),
  CONSTRAINT `fk_cms_text_menu_cms_items_menu` FOREIGN KEY (`fmenu_items_id`) REFERENCES `cms_fmenu_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cms_fmenu_text VALUES("1","buscamos personas talentosas con ideas frescas y nuevas maneras de hacer las cosas.","6");
INSERT INTO cms_fmenu_text VALUES("2","si tu negocio es el acero, te informamos de lo que pasa en colombia y el mundo.","5");
INSERT INTO cms_fmenu_text VALUES("3","conoce un poco más sobre las diferentes calidades, normas y usos del acero.","4");
INSERT INTO cms_fmenu_text VALUES("4","bajamos tus costos entregando productos a la medida.","3");
INSERT INTO cms_fmenu_text VALUES("5","contamos con la disponibilidad y variedad de productos de acero.","2");
INSERT INTO cms_fmenu_text VALUES("6","el talento de nuestro equipo significa todo para nosotros.","1");
DROP TABLE IF EXISTS cms_groups;

CREATE TABLE `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO cms_groups VALUES("1","superadmin","Super Administrador");
INSERT INTO cms_groups VALUES("2","admin","Administrador");
INSERT INTO cms_groups VALUES("3","usuarios","Usuarios");
DROP TABLE IF EXISTS cms_linea;

CREATE TABLE `cms_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO cms_linea VALUES("5","Construcción","lorem ipsum dolor amet");
INSERT INTO cms_linea VALUES("6","Metalmecanica","lorem ipsum dolor amet");
INSERT INTO cms_linea VALUES("7","Carlos Gómez","Producción");
INSERT INTO cms_linea VALUES("8","Carlos Gómez1","Producción");
INSERT INTO cms_linea VALUES("9","Carlos Gómez2","Producción");
INSERT INTO cms_linea VALUES("10","Prueba","Subprueba");
DROP TABLE IF EXISTS cms_login_attempts;

CREATE TABLE `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS cms_media;

CREATE TABLE `cms_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(150) NOT NULL,
  `type` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=432 DEFAULT CHARSET=latin1;

INSERT INTO cms_media VALUES("1","uploads/imagen1","i");
INSERT INTO cms_media VALUES("176","./uploads/641cb44ab4741815d5b254de826d142b.jpg","i");
INSERT INTO cms_media VALUES("177","./uploads/ad08aab1016895da42eee2ecc3cb274a.png","t");
INSERT INTO cms_media VALUES("178","./uploads/6c3ab986c2509d7ada274f8b352521bf.JPG","t");
INSERT INTO cms_media VALUES("179","./uploads/2474d5c4021490f99086c367d987424d.JPG","i");
INSERT INTO cms_media VALUES("180","./uploads/77fe8f674a3bb8e219375ff652ec0acf.jpg","i");
INSERT INTO cms_media VALUES("181","./uploads/641cb44ab4741815d5b254de826d142b.jpg","i");
INSERT INTO cms_media VALUES("183","./uploads/09e91bd7df0ef545683031f04a68033d.png","t");
INSERT INTO cms_media VALUES("184","./uploads/250616c886746eb8c1e4036a3a93f45b.png","t");
INSERT INTO cms_media VALUES("185","./uploads/5335446ab84303248f31d1bd5da2ae25.png","i");
INSERT INTO cms_media VALUES("186","./uploads/09e91bd7df0ef545683031f04a68033d.png","t");
INSERT INTO cms_media VALUES("187","./uploads/250616c886746eb8c1e4036a3a93f45b.png","t");
INSERT INTO cms_media VALUES("188","./uploads/5335446ab84303248f31d1bd5da2ae25.png","i");
INSERT INTO cms_media VALUES("189","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("190","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("191","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("192","./uploads/9d31dd26866fce310f236eb6a27aa9c1.png","t");
INSERT INTO cms_media VALUES("193","./uploads/dc4626c27bf5547cfea403af6cb71c6d.png","t");
INSERT INTO cms_media VALUES("194","./uploads/e9ef3d0db18dd67d498102aac3c0ea6f.png","i");
INSERT INTO cms_media VALUES("195","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("196","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("197","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("198","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("199","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("200","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("201","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("202","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("203","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("204","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("205","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("206","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("207","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("208","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("209","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("210","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("211","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("212","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("213","./uploads/9f502e862c0573f059f8318b97fc4045.jpg","t");
INSERT INTO cms_media VALUES("214","./uploads/fe9a52018acb1f90cdfca4f00cce6033.JPG","t");
INSERT INTO cms_media VALUES("215","./uploads/353cd18c5b90908beba58af1a8aa8c10.JPG","i");
INSERT INTO cms_media VALUES("216","./uploads/132c1065d8bef505ffc291cff54e6d12.jpg","t");
INSERT INTO cms_media VALUES("217","./uploads/3143c8d47391b16f05a286b558d17b74.JPG","t");
INSERT INTO cms_media VALUES("218","./uploads/c05c4e48314d7d27453210d82514ee1c.JPG","i");
INSERT INTO cms_media VALUES("219","./uploads/e527051e856403aca132d9b55f1d9030.jpg","t");
INSERT INTO cms_media VALUES("220","./uploads/c5c086437f2d533962800d9b30a82cae.JPG","t");
INSERT INTO cms_media VALUES("221","./uploads/9f11f965f7174e8793b1c5c6a5129903.JPG","i");
INSERT INTO cms_media VALUES("222","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("223","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("224","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("225","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("226","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("227","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("228","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("229","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("230","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("231","./uploads/393637c9052938d2a8c0917ebaf7b48f.jpg","t");
INSERT INTO cms_media VALUES("232","./uploads/bfa85963785bb609d41602a62e0d3445.JPG","t");
INSERT INTO cms_media VALUES("233","./uploads/821d573afe67ff13bb131225ad1af424.JPG","i");
INSERT INTO cms_media VALUES("234","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("235","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("236","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("237","./uploads/62111c6a6a6df92b1a3aacad49f598bd.jpg","t");
INSERT INTO cms_media VALUES("238","./uploads/d1a53585f874506a0ac05f3de93fbd87.JPG","t");
INSERT INTO cms_media VALUES("239","./uploads/e2f2b556b7031bc4e7ab12c8ccb48466.JPG","i");
INSERT INTO cms_media VALUES("240","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("241","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("242","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("243","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("244","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("245","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("246","./uploads/d17a988d7ae040dcc69db6ed2f7e0335.jpg","t");
INSERT INTO cms_media VALUES("247","./uploads/32d99c3266ca5f1b6eb52358c2dc7078.JPG","t");
INSERT INTO cms_media VALUES("248","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("249","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("250","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("251","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("252","./uploads/7c64419a43221636116cc2e78a2a118f.jpg","t");
INSERT INTO cms_media VALUES("253","./uploads/5301d42488544fc20bf69fd954dd01fd.JPG","t");
INSERT INTO cms_media VALUES("254","./uploads/6cd5b3696eb1cdd51ebe10b7ee2720b7.JPG","i");
INSERT INTO cms_media VALUES("255","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("256","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("257","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("258","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("259","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("260","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("261","http://www.youtube.com/watch?v=CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("262","./uploads/2ba0de55fd8ad9f34f3e699fe5abf012.png","i");
INSERT INTO cms_media VALUES("263","http://www.youtube.com/watch?v=CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("264","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("265","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("266","./uploads/21ff2661e657ba39ec5e0028aac9eda3.jpg","i");
INSERT INTO cms_media VALUES("267","./uploads/b4dc0692365020abf27c3527d2d4a8a8.pdf","f");
INSERT INTO cms_media VALUES("268","./uploads/577b7820bb02f6567bb409b4757fac93.jpg","i");
INSERT INTO cms_media VALUES("269","./uploads/012489ba8256970c27e7f80c2893c720.pdf","f");
INSERT INTO cms_media VALUES("270","./uploads/89b618c4f01b0fe9d47e9791e8f5a95e.jpg","t");
INSERT INTO cms_media VALUES("271","./uploads/c4469134ccaaf609b59081cfbc486b0c.png","i");
INSERT INTO cms_media VALUES("272","http://www.youtube.com/watch?v=83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("273","./uploads/382c08f8f151fbf50954c115aefe55ff.jpg","t");
INSERT INTO cms_media VALUES("274","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("275","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("276","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("277","./uploads/7100d50fd62d649fce6c08e0f5bce3ac.jpg","i");
INSERT INTO cms_media VALUES("278","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("281","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("282","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("283","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("284","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("285","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("286","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("287","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("288","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("289","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("290","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("291","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("292","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("293","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("294","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("295","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("296","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("297","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("298","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("299","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("300","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("301","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("302","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("303","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("304","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("305","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("306","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("307","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("308","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("309","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("310","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("311","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("312","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("313","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("314","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("315","./uploads/77fe8f674a3bb8e219375ff652ec0acf.jpg","i");
INSERT INTO cms_media VALUES("316","./uploads/f2faf21905145eda91cc60da13100fe7.jpg","i");
INSERT INTO cms_media VALUES("317","http://youtu.be/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("318","./uploads/2518989b55e6ba2e17f25d90835a15cf.png","i");
INSERT INTO cms_media VALUES("319","./uploads/4cbe6bb8bffbbd8532aead24f546d69f.pdf","f");
INSERT INTO cms_media VALUES("320","http://youtu.be/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("321","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("322","./uploads/","f");
INSERT INTO cms_media VALUES("323","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("324","./uploads/","f");
INSERT INTO cms_media VALUES("325","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("326","./uploads/","f");
INSERT INTO cms_media VALUES("327","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("328","./uploads/","f");
INSERT INTO cms_media VALUES("329","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("330","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("331","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("332","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("333","./uploads/577b7820bb02f6567bb409b4757fac93.jpg","i");
INSERT INTO cms_media VALUES("334","./uploads/012489ba8256970c27e7f80c2893c720.pdf","f");
INSERT INTO cms_media VALUES("335","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("336","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("337","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("338","./uploads/785d4490b72f31c1b2c1abda4c0a4796.png","i");
INSERT INTO cms_media VALUES("339","./uploads/b2e56c7c3c60b7d9ab698d3fa6bc184c.png","i");
INSERT INTO cms_media VALUES("340","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("341","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("342","./uploads/e9a9eecdb06d8be9bfb84a185d4a0bfc.png","i");
INSERT INTO cms_media VALUES("343","./uploads/59549984a8a14c878fa1b2515374f39b.png","i");
INSERT INTO cms_media VALUES("344","./uploads/4791f2c64ff6ce8d268d761253dbd3e0.png","i");
INSERT INTO cms_media VALUES("345","./uploads/93221b40c50056200d538902eb4322ff.png","i");
INSERT INTO cms_media VALUES("346","./uploads/87465bdaf1e4396f9ccc490f5425d509.png","i");
INSERT INTO cms_media VALUES("347","./uploads/d14e2b21d57159b41eeca7fc56ed9540.png","i");
INSERT INTO cms_media VALUES("348","./uploads/ac03fcf7d4efe9040ae2882e34df62d8.png","i");
INSERT INTO cms_media VALUES("349","./uploads/20c6b20cb2cc7fb75b82fcba758356ba.png","i");
INSERT INTO cms_media VALUES("350","http://www.youtube.com/watch?v=eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("351","./uploads/e027f88064eb1d8add79d1afa95eb832.pdf","f");
INSERT INTO cms_media VALUES("352","http://youtu.be/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("353","./uploads/","f");
INSERT INTO cms_media VALUES("354","www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("355","./uploads/","f");
INSERT INTO cms_media VALUES("356","//www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("357","./uploads/","f");
INSERT INTO cms_media VALUES("358","//www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("359","./uploads/934cf22b3b5504b7442efd4f602780ed.pdf","f");
INSERT INTO cms_media VALUES("360","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("361","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("362","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("363","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("364","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("365","./uploads/50a7459d3a2590dae701baff9b3b62d3.png","t");
INSERT INTO cms_media VALUES("366","./uploads/219c0d05277562f16ebec52a89bf9c87.jpg","i");
INSERT INTO cms_media VALUES("367","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("368","./uploads/6c3f308ec33997a3aa55094441ef30a5.jpg","t");
INSERT INTO cms_media VALUES("369","./uploads/93520fbb88da113a27a93db754553415.jpg","i");
INSERT INTO cms_media VALUES("370","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("371","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("372","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("373","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("374","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("375","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("376","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("377","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("378","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("379","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("380","./uploads/a6e69090d4335cc8ed508e5aef8459c8.jpg","t");
INSERT INTO cms_media VALUES("381","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("382","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("383","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("384","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("385","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("386","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("387","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("388","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("389","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("390","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("391","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("392","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("393","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("394","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("395","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("396","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("397","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("398","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("399","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("400","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("401","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("402","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("403","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("404","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
INSERT INTO cms_media VALUES("405","./uploads/61baaed82d280b964562b9585da783a3.jpg","t");
INSERT INTO cms_media VALUES("406","./uploads/575869b53d06735f9634f28a5018d830.jpg","t");
INSERT INTO cms_media VALUES("407","./uploads/61baaed82d280b964562b9585da783a3.jpg","t");
INSERT INTO cms_media VALUES("408","./uploads/575869b53d06735f9634f28a5018d830.jpg","t");
INSERT INTO cms_media VALUES("409","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("410","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("411","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("412","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
INSERT INTO cms_media VALUES("413","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("414","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
INSERT INTO cms_media VALUES("415","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("416","./uploads/cb01f7b07d78e880de5873b917911d6c.jpg","i");
INSERT INTO cms_media VALUES("417","//www.youtube.com/embed/K3lJGzNckjg","v");
INSERT INTO cms_media VALUES("418","./uploads/c4e37aa1bc9419531732c59a561d20d8.pdf","f");
INSERT INTO cms_media VALUES("419","//www.youtube.com/embed/k6ACBbys0RY","v");
INSERT INTO cms_media VALUES("420","./uploads/705743ea0f9f8c8fa31bbbb8aa6698ee.pdf","f");
INSERT INTO cms_media VALUES("421","//www.youtube.com/embed/4kFf696CBvQ","v");
INSERT INTO cms_media VALUES("422","./uploads/0b0166674d43db110dd4e06eadec69f8.pdf","f");
INSERT INTO cms_media VALUES("423","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("424","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("425","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("426","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("427","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("428","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("429","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("430","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("431","//www.youtube.com/embed/5rfm_WKTC2M","v");
DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("2","home","cms/home/","administrator");
DROP TABLE IF EXISTS cms_postulado;

CREATE TABLE `cms_postulado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) DEFAULT NULL,
  `email` varchar(47) DEFAULT NULL,
  `ciudad` varchar(70) DEFAULT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `telefono` varchar(27) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `vancante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_postulado_vancante1_idx` (`vancante_id`),
  CONSTRAINT `fk_postulado_vancante1` FOREIGN KEY (`vancante_id`) REFERENCES `cms_vancante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO cms_postulado VALUES("2","Felipe Camacho","felipe.camacho@imaginamos.com","Bogota","ca6964ad1bcf37fdb86321dda0bf5013.jpg","(571) 610 3520","comentario","6");
INSERT INTO cms_postulado VALUES("3","Felipe Camacho","felipe.camacho@imaginamos.com","Bogota","9aeaa02eed4c9730c8d06dab272d60fd.jpg","(571) 610 3520","comentario","6");
INSERT INTO cms_postulado VALUES("4","Felipe Camacho","felipe.camacho@imaginamos.com","Bogota","be44559414fbd2c34d592e77035cb2b4.jpg","(571) 610 3520","comentario","6");
INSERT INTO cms_postulado VALUES("5","Felipe Camacho","felipe.camacho@imaginamos.com","Bogota","194ad0495f1180d4210563d3c263ea1f.jpg","(571) 610 3520","comentario","6");
DROP TABLE IF EXISTS cms_producto;

CREATE TABLE `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id2` int(11) DEFAULT NULL,
  `cms_sub_categorias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linea_cms_media1_idx` (`cms_media_id`),
  KEY `fk_linea_cms_media3_idx` (`cms_media_id2`),
  KEY `fk_cms_producto_cms_sub_categorias1_idx` (`cms_sub_categorias_id`),
  CONSTRAINT `fk_cms_producto_cms_sub_categorias1` FOREIGN KEY (`cms_sub_categorias_id`) REFERENCES `cms_sub_categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_linea_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_linea_cms_media3` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS cms_propietario;

CREATE TABLE `cms_propietario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` varchar(150) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_propietario_cms_media1_idx` (`media_id`),
  CONSTRAINT `fk_cms_propietario_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cms_propietario VALUES("1","Campana","1");
DROP TABLE IF EXISTS cms_redes_sociales;

CREATE TABLE `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(200) NOT NULL,
  `type_social_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_redes_sociales_cms_type_social1` (`type_social_id`),
  CONSTRAINT `fk_cms_redes_sociales_cms_type_social1` FOREIGN KEY (`type_social_id`) REFERENCES `cms_type_social` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO cms_redes_sociales VALUES("6","https://twitter.com/lacampana_acero","1");
INSERT INTO cms_redes_sociales VALUES("7","http://www.facebook.com/pages/la-campana/151565408220649","2");
INSERT INTO cms_redes_sociales VALUES("8","http://www.pinterest.com/lacampanaaceros/","3");
INSERT INTO cms_redes_sociales VALUES("9","https://plus.google.com/u/0/112856535283529764048/posts","4");
INSERT INTO cms_redes_sociales VALUES("10","http://www.youtube.com/user/lacampanaaceros","5");
INSERT INTO cms_redes_sociales VALUES("11","http://www.linkedin.com/company/la-campana-servicios-de-acero-s-a-?trk=hb_tab_compy_id_2327778","6");
DROP TABLE IF EXISTS cms_servicio_corte;

CREATE TABLE `cms_servicio_corte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `texto` varchar(211) NOT NULL,
  `cms_media_id` int(11) NOT NULL COMMENT 'cms_media_id, ser refiere al link del video',
  `cms_media_id1` int(11) DEFAULT NULL COMMENT 'cms_media_id1, serefiere al link de especificaciones tecnicas',
  `cms_media_id2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicio_corte_cms_media1_idx` (`cms_media_id`),
  KEY `fk_servicio_corte_cms_media2_idx` (`cms_media_id1`),
  KEY `media_id2` (`cms_media_id2`),
  CONSTRAINT `cms_servicio_corte_ibfk_1` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_corte_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_corte_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO cms_servicio_corte VALUES("5","telecampana","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta congue purus, vel adipiscing ante rhoncus vel. Nunc blandit imperdiet posuere. Curabitur vel pretium ligula.","325","326","318");
INSERT INTO cms_servicio_corte VALUES("6","Corte longitudinal","Corte longitudinal","327","328","");
INSERT INTO cms_servicio_corte VALUES("7","Grocery glee Imaginamos","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. ","358","359","");
INSERT INTO cms_servicio_corte VALUES("8","prueba carlos viernes","prueba imaginamosprueba imaginamosprueba","417","418","");
INSERT INTO cms_servicio_corte VALUES("9","prueba 2","prueba imaginamos prueba imaginamos prueba imaginamos prueba imaginamos prueba imaginamos prueba imaginamosprueba imaginamos prue","419","420","");
INSERT INTO cms_servicio_corte VALUES("10","Prueba alexandra","imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s imaginamos s.a.s ","421","422","");
DROP TABLE IF EXISTS cms_sessions;

CREATE TABLE `cms_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_sessions VALUES("0285b146fd8928b90cf85ee75750ca58","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379721005","");
INSERT INTO cms_sessions VALUES("0798e450b61753f51afb26a8761479f9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380577400","");
INSERT INTO cms_sessions VALUES("0c0236c745be61078c1b806885f9e296","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A5","1380323566","");
INSERT INTO cms_sessions VALUES("0ce1fcfdab99d1077038c0c633cb1bfe","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380807965","");
INSERT INTO cms_sessions VALUES("0dbd350407e6c6c64de76c45420cebfd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211614","");
INSERT INTO cms_sessions VALUES("1347e988fab7b08dd53f97fcf22c5bd4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990321","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("15fc951e9fd59dce86cf5749d3598794","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("1e8f86c6db1c25842aa7e9477d04b76a","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("251547199f84cd5701f300948a3835e2","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379711219","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("2a67f57436d8d181e3bb80a17052e4e8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322617","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("2cb67fdb6c44d81f6b16e9aaf30284f4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379947802","");
INSERT INTO cms_sessions VALUES("2d0667fd22796ee9251d9f90c2e34f8f","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380059427","");
INSERT INTO cms_sessions VALUES("2d501ead78d00e9022f59d9934d6c2ef","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766908","");
INSERT INTO cms_sessions VALUES("343419264f15077a1cae52d907297cd6","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380136732","");
INSERT INTO cms_sessions VALUES("35f04f57335e5f60482c6bcf30664c73","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("363321fbcb9dceed0b6e07230fa79371","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("3c2ca361f7688b89478766daa845ddbe","186.181.17.72","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.15","1379725548","");
INSERT INTO cms_sessions VALUES("41dc2b0b7b2dcc77e1f630ddcca47f03","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380287778","");
INSERT INTO cms_sessions VALUES("43c568329aad829c01d96efd80012c1d","69.171.237.9","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240245","");
INSERT INTO cms_sessions VALUES("474daa182e8bd72087b3570e9546d5c7","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226362","");
INSERT INTO cms_sessions VALUES("483a8875d5df339ed5313aa98e796302","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("48722381c72a5ccd88b74217c341381b","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990932","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("49455e226a13c03ecb30eb0bc9c0c7f3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("521bb391c5d6adcb2632f218fd39a245","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("58bfa5912b854d1b4c17fe33ae779f39","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380303639","");
INSERT INTO cms_sessions VALUES("5e2b8e2d14f30e1777e12094b0112f52","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226361","");
INSERT INTO cms_sessions VALUES("62bf05bdfbce59ca624be9c55e458502","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380317340","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("64ee1ae7683310ec5b3c9c7f10b2217b","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380296793","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("658f4bed1e0fdf93dee5b1e967d14741","69.171.237.11","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240241","");
INSERT INTO cms_sessions VALUES("6a5efb2dcdf31585adf7f990d61e42cb","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("6cf11841ee0930376c08d4555a2d2d2c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("6f484978df18a40c7232d58978cd8c39","69.171.235.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240247","");
INSERT INTO cms_sessions VALUES("70a41c54ae634ec2a4a5641ff75123d2","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380131377","");
INSERT INTO cms_sessions VALUES("7faa6de7d129b477248e93633534e4f0","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379710474","");
INSERT INTO cms_sessions VALUES("80a75b55375ce97d0f43ea978f5e7619","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322491","");
INSERT INTO cms_sessions VALUES("834c4e6c17f35f2a57174d8d4f0ec1b8","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465","1380285427","");
INSERT INTO cms_sessions VALUES("90dafb5aeebcff0c44ae455218badaa5","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210743","");
INSERT INTO cms_sessions VALUES("918dfc96f67b2b5adce1dd6f4e7ef338","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380721994","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("91a04117ba6ec6a775f173c42bd82d76","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210732","");
INSERT INTO cms_sessions VALUES("9834bb4bcaf175ed2eaa2e3f3fe6ef61","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777483","");
INSERT INTO cms_sessions VALUES("9a53affb63ac0a30c2fbee3a250ae2dd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211607","");
INSERT INTO cms_sessions VALUES("9a79b2ad775daa5f511d7ca558f43ea9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("9fcc6e495b5f31d390bfab1760fdb92e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380664968","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a3792c0832f481314ade8b9d966015b3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380036829","");
INSERT INTO cms_sessions VALUES("a8d8e22fc16439feef4af5be28f0cb0f","216.52.242.14","LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)","1380225891","");
INSERT INTO cms_sessions VALUES("aba95e0d50bcd2dd9d390f0d60a6fdde","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713687","");
INSERT INTO cms_sessions VALUES("ac1d9d5d7b354b6cdfae5c90b57106d3","69.171.242.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226078","");
INSERT INTO cms_sessions VALUES("b4b2d077a5a26cba9d7a0b1b91e8d965","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("b6fdd0f3d820fe4c5d2d73a47d5fbe60","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380810763","");
INSERT INTO cms_sessions VALUES("ba7aef70de1e6c85baa83904adc59105","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("befbe2722a7fd35cdb7598f2277f5312","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380040862","");
INSERT INTO cms_sessions VALUES("c2a6361d1523c096c26d33248dea2b51","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766736","");
INSERT INTO cms_sessions VALUES("c41e3e12f8581f29f06359da0fc4c00e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380295512","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ccde4cc269c64db78c4b13a24f62ab05","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("cd04d9d0baef3b3fb6ba5dce2f7c9a78","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990322","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("cd79009ff0089480ee66031363b357aa","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("cd90743a133c5a0816770163fcaa76d7","186.82.189.141","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379791892","");
INSERT INTO cms_sessions VALUES("d4c8a6aba5c8dd95f30202c8110e92ca","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("d5bdfc71335108110b87fa6ef5804ea1","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380555206","");
INSERT INTO cms_sessions VALUES("d74c36028796002e660eea407aae9b05","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380238977","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("d83b5ec22def084300f80e5c19be7d41","186.28.254.35","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)","1379709461","");
INSERT INTO cms_sessions VALUES("dd6c0f2c5cd0cd4dcd4905cd200a467c","69.171.242.116","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226074","");
INSERT INTO cms_sessions VALUES("ddf013fb0fd69a3668237ccbee8202ec","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("deb0d2327510e0fb24f43eef6c862a97","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380724002","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("e839f3b854b375bd3c630b0ef1f4a852","69.171.245.0","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226079","");
INSERT INTO cms_sessions VALUES("e875540c43bb98bae69352d5ebf911aa","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380141416","");
INSERT INTO cms_sessions VALUES("f6f19f1635e14a979ef5151c01c0738c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("fa4a6be0db822501a3ca014a59245dd2","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380141396","");
INSERT INTO cms_sessions VALUES("fc8555e7812ccd7b41554e04255cc7c2","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380292212","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("fcc372e344b01647064a6a981993a2a8","190.65.207.186","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380293606","");
INSERT INTO cms_sessions VALUES("ff7415408b4cda3c68c50eeadbe0d92e","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226362","");
DROP TABLE IF EXISTS cms_sub_categorias;

CREATE TABLE `cms_sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `cms_categoria_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_sub_categorias_cms_catgoria1_idx` (`cms_categoria_id`),
  KEY `fk_cms_sub_categorias_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_cms_sub_categorias_cms_catgoria1` FOREIGN KEY (`cms_categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_sub_categorias_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS cms_trabajador;

CREATE TABLE `cms_trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) NOT NULL,
  `cargo` varchar(74) NOT NULL,
  `comentario` text,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  `media_id2` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabajador_cms_media1_idx` (`media_id`),
  KEY `fk_trabajador_cms_media2_idx` (`media_id1`),
  KEY `media_id2` (`media_id2`),
  CONSTRAINT `cms_trabajador_ibfk_1` FOREIGN KEY (`media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO cms_trabajador VALUES("4","ana ","Lorem ipsum ","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue est, elementum in viverra eu, iaculis ac turpis. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus non vestibulum tortor. Donec mollis neque id dolor ultricies mollis. Donec id erat a mi egestas interdum consequat a erat. Suspendisse vel nisl in purus rutrum semper sit amet quis lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras eu facilisis mauris.\n\nPellentesque gravida purus sed odio sagittis dignissim. Suspendisse tortor lorem, pulvinar eu sapien nec, pharetra varius lectus. Phasellus vulputate felis metus, ac lacinia massa aliquam scelerisque. Fusce risus risus, auctor ac diam vitae, tincidunt consequat erat. Vivamus in metus dolor. Integer euismod magna enim, id facilisis erat convallis a. Donec interdum sapien ut rutrum convallis. Vestibulum rutrum, odio quis tincidunt tincidunt, sapien mi cursus erat, vitae vehicula tellus enim eget mauris. Cras laoreet lobortis dolor, sit amet iaculis libero fringilla sit amet. Pellentesque ligula tortor, molestie vitae tempus sed, malesuada eu orci. Aenean semper sollicitudin lectus, eleifend blandit libero lacinia id.\n\nDonec id nibh dictum, tristique nibh ac, sollicitudin eros. Etiam a nunc eleifend, posuere erat nec, sollicitudin justo. Mauris pretium orci a blandit iaculis. Proin sit amet elit mi. Nunc scelerisque, eros sed luctus eleifend, velit nulla dignissim lorem, eu pretium nulla eros sagittis quam. Donec eu scelerisque urna, vitae bibendum tortor. Vivamus nec convallis erat. Integer quis lorem pretium, tempus est nec, scelerisque tellus. Mauris imperdiet turpis sit amet mauris lacinia imperdiet.\n\nAliquam egestas tincidunt nisi sit amet convallis. Sed nisi urna, porta non ligula ut, pulvinar aliquam lorem. Suspendisse viverra felis lectus, at euismod mi placerat varius. Curabitur et pulvinar lorem. In tincidunt pellentesque imperdiet. Morbi eleifend porta odio ut sagittis. Proin vulputate magna sit amet augue feugiat cursus. Sed mattis, nunc id viverra blandit, justo justo lobortis diam, eget consectetur nulla nisi tristique nunc. Praesent feugiat enim quis quam porttitor, a condimentum erat accumsan. Sed elit risus, pharetra quis ornare in, consectetur vel dui.","211","210","212");
INSERT INTO cms_trabajador VALUES("5","marisol","Lorem ipsum","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue est, elementum in viverra eu, iaculis ac turpis. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus non vestibulum tortor. Donec mollis neque id dolor ultricies mollis. Donec id erat a mi egestas interdum consequat a erat. Suspendisse vel nisl in purus rutrum semper sit amet quis lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras eu facilisis mauris.\n\nPellentesque gravida purus sed odio sagittis dignissim. Suspendisse tortor lorem, pulvinar eu sapien nec, pharetra varius lectus. Phasellus vulputate felis metus, ac lacinia massa aliquam scelerisque. Fusce risus risus, auctor ac diam vitae, tincidunt consequat erat. Vivamus in metus dolor. Integer euismod magna enim, id facilisis erat convallis a. Donec interdum sapien ut rutrum convallis. Vestibulum rutrum, odio quis tincidunt tincidunt, sapien mi cursus erat, vitae vehicula tellus enim eget mauris. Cras laoreet lobortis dolor, sit amet iaculis libero fringilla sit amet. Pellentesque ligula tortor, molestie vitae tempus sed, malesuada eu orci. Aenean semper sollicitudin lectus, eleifend blandit libero lacinia id.\n\nDonec id nibh dictum, tristique nibh ac, sollicitudin eros. Etiam a nunc eleifend, posuere erat nec, sollicitudin justo. Mauris pretium orci a blandit iaculis. Proin sit amet elit mi. Nunc scelerisque, eros sed luctus eleifend, velit nulla dignissim lorem, eu pretium nulla eros sagittis quam. Donec eu scelerisque urna, vitae bibendum tortor. Vivamus nec convallis erat. Integer quis lorem pretium, tempus est nec, scelerisque tellus. Mauris imperdiet turpis sit amet mauris lacinia imperdiet.\n\nAliquam egestas tincidunt nisi sit amet convallis. Sed nisi urna, porta non ligula ut, pulvinar aliquam lorem. Suspendisse viverra felis lectus, at euismod mi placerat varius. Curabitur et pulvinar lorem. In tincidunt pellentesque imperdiet. Morbi eleifend porta odio ut sagittis. Proin vulputate magna sit amet augue feugiat cursus. Sed mattis, nunc id viverra blandit, justo justo lobortis diam, eget consectetur nulla nisi tristique nunc. Praesent feugiat enim quis quam porttitor, a condimentum erat accumsan. Sed elit risus, pharetra quis ornare in, consectetur vel dui.","223","222","224");
INSERT INTO cms_trabajador VALUES("6","alexander","Lorem ipsum dolor sit amet,","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","226","225","227");
INSERT INTO cms_trabajador VALUES("7","rocio","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","229","228","230");
INSERT INTO cms_trabajador VALUES("8","rodrigo","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","235","234","236");
INSERT INTO cms_trabajador VALUES("9","maryory","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","238","237","239");
INSERT INTO cms_trabajador VALUES("10","ivan","director comercial","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","241","240","242");
INSERT INTO cms_trabajador VALUES("11","lila","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","244","243","245");
INSERT INTO cms_trabajador VALUES("12","fernanda","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","247","246","248");
INSERT INTO cms_trabajador VALUES("13","julian","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","250","249","251");
INSERT INTO cms_trabajador VALUES("14","sandra","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","253","252","254");
INSERT INTO cms_trabajador VALUES("15","edgar","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","256","255","257");
INSERT INTO cms_trabajador VALUES("16","maira","Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque dolor eu iaculis sollicitudin. Nullam ut neque vel risus tincidunt laoreet. Quisque nunc elit, auctor ut elit quis, sollicitudin imperdiet quam. Sed commodo enim eu augue venenatis faucibus. Maecenas sollicitudin arcu sed eleifend porttitor. Morbi dignissim consequat orci in imperdiet. Sed sodales erat nec dui porta placerat. Mauris mollis nisi id rutrum tempor. Sed orci ligula, pellentesque eu malesuada vel, hendrerit nec enim. Mauris sagittis vitae turpis ut placerat. Aenean mattis nulla at turpis suscipit, vitae aliquam purus dapibus. Duis egestas scelerisque metus ac ultrices. Cras eget adipiscing dolor, vel pharetra ipsum. Nunc facilisis urna ante, non mattis diam commodo et. Nam pulvinar, sapien mattis vehicula cursus, quam tortor viverra enim, a iaculis nibh mi gravida tortor. Fusce sodales venenatis massa, eget ornare est.\n\nCurabitur egestas non sapien a elementum. Cras fringilla eu dui sed dictum. Cras gravida feugiat massa, id tempor quam blandit sit amet. Integer egestas porttitor eros, hendrerit aliquet dolor elementum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vulputate fringilla arcu, a dignissim mi sagittis at. Integer quis adipiscing ante. Mauris vehicula vulputate tellus lobortis lobortis. Sed in nisi ut magna sagittis suscipit. Aenean ac suscipit eros, accumsan ultricies augue. Nunc eu placerat orci. Nunc commodo aliquam diam, sit amet aliquet justo tincidunt non. Pellentesque at cursus orci, vel ullamcorper turpis. Vestibulum sit amet viverra purus.","259","258","260");
DROP TABLE IF EXISTS cms_trabaje_nosotros;

CREATE TABLE `cms_trabaje_nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_media_id` int(11) NOT NULL,
  `subtitulo` varchar(112) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabaje_nosotros_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_trabaje_nosotros_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO cms_trabaje_nosotros VALUES("1","416","");
DROP TABLE IF EXISTS cms_type_social;

CREATE TABLE `cms_type_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cms_type_social VALUES("1","Twitter");
INSERT INTO cms_type_social VALUES("2","Facebook");
INSERT INTO cms_type_social VALUES("3","Pinterest");
INSERT INTO cms_type_social VALUES("4","Google +");
INSERT INTO cms_type_social VALUES("5","Youtube ");
INSERT INTO cms_type_social VALUES("6","Linkedin");
DROP TABLE IF EXISTS cms_users;

CREATE TABLE `cms_users` (
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_users VALUES("5","\0\0","administrator","092e624ccaf41c1b9c0dd32a1041043a82507bc7","e0efe63787","cms@imaginamos.com","","","","1218e83c71363e71c292b071dace76d3f56b47af","1343253917","2013","1","","","","");
DROP TABLE IF EXISTS cms_users_groups;

CREATE TABLE `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `fk_cms_users_groups_cms_groups1_idx` (`group_id`),
  CONSTRAINT `fk_cms_users_groups_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_users_groups VALUES("5","5","1");
DROP TABLE IF EXISTS cms_vancante;

CREATE TABLE `cms_vancante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(42) NOT NULL,
  `subtitulo` varchar(70) NOT NULL,
  `detalle` text NOT NULL,
  `intro_detalle` varchar(65) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vancante_cms_media1_idx` (`media_id`),
  CONSTRAINT `fk_vancante_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO cms_vancante VALUES("4","Director operativo","Laboratorio industrial","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum facilisis blandit. Proin at tincidunt nisl. Donec tempus, risus sit amet vehicula suscipit, nisl velit pellentesque nisl, nec elementum leo ligula et mi. Morbi pharetra tortor eu leo vulputate, eu faucibus nibh tempor. Phasellus eleifend tellus a elit mollis, ut volutpat nisi molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis dolor nisi, varius ac libero fringilla, lacinia sollicitudin nibh. Nulla lacinia magna mauris, ac blandit purus suscipit et.m posuere diam mattis nulla ullamcorper rhoncus.\n\nPhasellus at nibh id velit aliquam vehicula sed aliquet velit. Proin laoreet arcu adipiscing, rutrum leo at, aliquam elit. Pellentesque aliquam malesuada leo, nec congue arcu tempor sit amet. Vestibulum tempor, eros at aliquam adipiscing, neque eros tincidunt massa, ultricies rutrum lorem nisl ullamcorper libero. Nunc non tellus ut libero malesuada consectetur et at nibh. Suspendisse nec tempus turpis, ac interdum sem. Aliquam adipiscing lacus quam, nec ullamcorper quam imperdiet eget. ","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellente","340");
INSERT INTO cms_vancante VALUES("5","Gerente de corte","Lorem ipsum dolor sit amet, consectetur adipiscing","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.","Lorem ipsum dolor sit amet, consectetur adipiscing ipsum dolor","341");
INSERT INTO cms_vancante VALUES("6","Asistente de maquinaria","Producción","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","Lorem ipsum dolor sit amet, consectetur. ","342");
INSERT INTO cms_vancante VALUES("7","Aprendiz sena","Quisque et orci ","Nunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","Lorem ipsum dolor sit amet, consectetur.","343");
INSERT INTO cms_vancante VALUES("8","Soporte de maquinas","Taller de metales","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","scelerisque malesuada","344");
INSERT INTO cms_vancante VALUES("9","Project manager","Producción","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","scelerisque malesuada","345");
INSERT INTO cms_vancante VALUES("10","Prueba carlos","Producto de prueba","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","posuere blandit","346");
INSERT INTO cms_vancante VALUES("11","Prueba Alexandra Gomez","Producción","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","posuere blandit.","347");
INSERT INTO cms_vancante VALUES("12","Director de operaciones","Produccion","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","auctor nunc auctor","348");
INSERT INTO cms_vancante VALUES("13","Prueba Imaginamos","Producción","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at neque lorem. Fusce quam ligula, vestibulum vitae dolor nec, consequat dignissim magna. Ut a ante dui. Suspendisse ultrices pharetra libero et posuere. Suspendisse potenti. Donec sed nibh quis massa ultricies faucibus. Sed dignissim massa justo, vel pellentesque leo pellentesque non. Fusce ut rutrum lacus.\n\nCras adipiscing, ligula in aliquet tincidunt, magna quam condimentum tortor, sit amet mattis arcu ipsum a ante. Integer in arcu vel tellus congue fringilla. Curabitur laoreet non nisi a aliquam. Praesent sit amet diam nec sem egestas vestibulum eu sit amet felis. Sed fringilla ante mi, a tristique sem ullamcorper ac. In orci quam, dictum ut venenatis ut, semper quis elit. Pellentesque mattis, lectus vitae suscipit porttitor, tortor sapien iaculis neque, sed viverra neque odio at justo. Sed sodales elit in scelerisque tristique. Sed sodales eget diam euismod tempus. Etiam sed nibh massa. Duis tempor massa sit amet est commodo aliquet. In at dolor ac dui convallis tincidunt eget ac neque.\n\nNunc feugiat felis vel magna adipiscing, sit amet rhoncus augue rutrum. Etiam laoreet ante eget tellus lacinia, in auctor nunc auctor. Sed blandit blandit est, in dignissim urna facilisis hendrerit. Maecenas gravida erat vitae sagittis facilisis. Quisque et orci et nisi scelerisque malesuada. Aenean lacus justo, sagittis a lorem vel, mattis hendrerit ipsum. In at risus id lorem posuere blandit. Etiam auctor odio a sapien congue, non viverra arcu vehicula. Ut in congue eros. In aliquam, arcu at feugiat sagittis, lorem diam aliquam nibh, in bibendum augue felis at purus.\n","auctor nunc auctor","349");
DROP TABLE IF EXISTS cms_video;

CREATE TABLE `cms_video` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `propietario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_video_cms_propietario1_idx` (`propietario_id`),
  CONSTRAINT `fk_cms_video_cms_propietario1` FOREIGN KEY (`propietario_id`) REFERENCES `cms_propietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_video_cms_media1` FOREIGN KEY (`id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_video VALUES("311","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("314","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("337","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("364","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("367","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("370","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("373","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("376","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("379","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("384","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("387","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("390","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("393","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("396","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("399","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("402","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("425","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("428","prueba imaginamos","iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s ","1");
INSERT INTO cms_video VALUES("431","pruaba video","prueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamoprueba imaginamo","1");


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
