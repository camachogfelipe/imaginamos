/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS JABALIES_campana;

USE JABALIES_campana;

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO cms_categoria VALUES("18","láminas","de acero","cold rolled, hot rolled, galvanizada, alfajor, decapada","15","638");
INSERT INTO cms_categoria VALUES("19","Tuberías","de acero","tipo mueble, agua negra, cerramiento, estructural","15","649");
INSERT INTO cms_categoria VALUES("20","vigas","estructurales","ipe, hea, canal, ángulo","15","650");
INSERT INTO cms_categoria VALUES("21","cubiertas y fachadas","metálicas","contamos con los mejores materiales para cerramientos, ","14","854");
INSERT INTO cms_categoria VALUES("22","estructuras","metálicas","tenemos todos los productos estructurales para la elabo","14","855");
INSERT INTO cms_categoria VALUES("23","entrepisos","metálicos","fabricamos productos innovadores para la elaboración de","14","856");
INSERT INTO cms_categoria VALUES("24","perfil ornamentación","metálicos","la mejor opción en precio y calidad para productos orna","14","857");
INSERT INTO cms_categoria VALUES("28","Prueba carlos","imaginamos s.a.s","Lorem ipsum dolor sit amet, consectetur adipiscing elit","18","1001");
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
  `destacado` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_documento_cms_media1_idx` (`cms_media_id`),
  KEY `fk_documento_cms_media2_idx` (`cms_media_id1`),
  CONSTRAINT `fk_documento_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_documento_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO cms_documento VALUES("12","pesos y","espesores","te traemos la tabla más completa en espesores y pesos de láminas de acero cold rolled(LAF), Hot Rolled(LAC), Galvanizada(GAL), Alfajor(LAL) y decapada(LAD).","889","890","1");
INSERT INTO cms_documento VALUES("14","láminas","atados","Queremos hacerlos partícipe de una nueva forma de realizar sus pedidos con el ánimo de que \nestos sean entregados en sus instalaciones en el menor tiempo posible.","891","892","1");
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
  `destacado` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_enterese_cms_video1_idx` (`video_id`),
  KEY `fk_cms_enterese_cms_media1_idx` (`media_id`),
  KEY `fk_cms_enterese_cms_media2_idx` (`media_id1`),
  CONSTRAINT `fk_cms_enterese_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_video1` FOREIGN KEY (`video_id`) REFERENCES `cms_video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO cms_enterese VALUES("7","nullam eliter","commodo conseq sit","donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.\n\ndonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.\n\ndonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. in enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. nullam dictum felis eu pede mollis pretium. integer tincidunt.","donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.","447","446","445","1");
INSERT INTO cms_enterese VALUES("8","Prueba enterate ","Prueba noticia ent","commodo conseq sit donec quam felis, ltricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim.","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan.","683","682","681","");
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO cms_linea VALUES("14","aceros construcción","para estructuras metálicas");
INSERT INTO cms_linea VALUES("15","aceros industria","para metalmecánica");
INSERT INTO cms_linea VALUES("18","Prueba carlos","Imaginamos s.a.s.");
DROP TABLE IF EXISTS cms_login_attempts;

CREATE TABLE `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS cms_media;

CREATE TABLE `cms_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(150) NOT NULL,
  `type` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

INSERT INTO cms_media VALUES("1","assets/img/enterate/peque.jpg","i");
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
INSERT INTO cms_media VALUES("335","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("336","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("337","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("338","./uploads/785d4490b72f31c1b2c1abda4c0a4796.png","i");
INSERT INTO cms_media VALUES("339","./uploads/b2e56c7c3c60b7d9ab698d3fa6bc184c.png","i");
INSERT INTO cms_media VALUES("340","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("341","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
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
INSERT INTO cms_media VALUES("409","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("410","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("412","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
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
INSERT INTO cms_media VALUES("436","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("437","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("438","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("442","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("443","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("444","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("445","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("446","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("447","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("448","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("449","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("450","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("451","./uploads/160eeeac6be17ed412f9e91e092db5b2.jpg","t");
INSERT INTO cms_media VALUES("452","./uploads/c498be27b12d3653490547ca2096457b.jpg","i");
INSERT INTO cms_media VALUES("453","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("457","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("458","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("459","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("463","./uploads/a30455e6dceff4684d68d1117ae49549.jpg","t");
INSERT INTO cms_media VALUES("464","./uploads/b5d91930234048c3f4ef7b0137511850.png","i");
INSERT INTO cms_media VALUES("465","./uploads/37aa9baedec61ca8f85124a88d9cab99.jpg","t");
INSERT INTO cms_media VALUES("466","./uploads/d14c9f5e743024d4a4cb5eadf6a821d8.png","i");
INSERT INTO cms_media VALUES("467","./uploads/17c111ad64340c289cab215e286649bc.jpg","t");
INSERT INTO cms_media VALUES("468","./uploads/64ac32d1a3adf166351da9b65ebcdd8a.jpg","i");
INSERT INTO cms_media VALUES("469","./uploads/7dc537ac96069947b58a898a36984fcf.jpg","t");
INSERT INTO cms_media VALUES("470","./uploads/ee3d5f9de9eb9c594b1e89e406eaaf1c.jpg","i");
INSERT INTO cms_media VALUES("474","./uploads/9c2a085bdd475f087fc1fe4baa69e67b.jpg","i");
INSERT INTO cms_media VALUES("475","./uploads/7478f00c6884b93a4c66ba39e66db488.pdf","f");
INSERT INTO cms_media VALUES("476","./uploads/9c2a085bdd475f087fc1fe4baa69e67b.jpg","i");
INSERT INTO cms_media VALUES("477","./uploads/7478f00c6884b93a4c66ba39e66db488.pdf","f");
INSERT INTO cms_media VALUES("480","./uploads/2558e09d5d7e49c119c45db23da74d7c.png","i");
INSERT INTO cms_media VALUES("484","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("485","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("486","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("487","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("488","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("489","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("490","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("491","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("492","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("493","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("494","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("495","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("496","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("497","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("498","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("501","./uploads/e2f2b556b7031bc4e7ab12c8ccb48466.JPG","i");
INSERT INTO cms_media VALUES("502","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("503","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("504","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("505","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("506","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("507","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("508","./uploads/d17a988d7ae040dcc69db6ed2f7e0335.jpg","t");
INSERT INTO cms_media VALUES("509","./uploads/32d99c3266ca5f1b6eb52358c2dc7078.JPG","t");
INSERT INTO cms_media VALUES("510","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("511","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("512","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("513","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("516","./uploads/6cd5b3696eb1cdd51ebe10b7ee2720b7.JPG","i");
INSERT INTO cms_media VALUES("517","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("518","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("519","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("520","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("521","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("522","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("523","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("524","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("525","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("526","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("527","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("528","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("529","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("530","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("531","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("532","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("533","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("534","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("535","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("536","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("537","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("538","./uploads/c98f5272fb72948010b7dbb18d1878b2.pdf","f");
INSERT INTO cms_media VALUES("544","./uploads/a3574ccc6e054189c119766f84d0b234.jpg","t");
INSERT INTO cms_media VALUES("550","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("551","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("552","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("553","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("554","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("555","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("556","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("557","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("558","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("559","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("560","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("561","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("562","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("563","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("564","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("565","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("566","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("567","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("568","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("569","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("570","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("571","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("572","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("573","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("574","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("575","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("576","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("577","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("578","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("579","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("580","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("581","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("582","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("583","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("584","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("587","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("588","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("589","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("590","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("591","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("592","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("593","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("594","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("595","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("596","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("597","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("598","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("599","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("600","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("601","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("602","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("603","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("604","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("605","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("606","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("607","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("608","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("609","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("610","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("611","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("612","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("613","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("614","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("615","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("616","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("617","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("618","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("619","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("620","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("621","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("622","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("623","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("624","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("625","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("626","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("627","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("628","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("629","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("630","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("631","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("632","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("633","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("634","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("637","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("638","./uploads/cb753ca34b7630113aa93fa95e0b980c.jpg","t");
INSERT INTO cms_media VALUES("639","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("640","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("641","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("642","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("643","./uploads/ab65f2f4ca73867c19364a8ff3538ca5.jpg","t");
INSERT INTO cms_media VALUES("644","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("645","./uploads/ab65f2f4ca73867c19364a8ff3538ca5.jpg","t");
INSERT INTO cms_media VALUES("646","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("647","./uploads/6fc5b7ef58c6706a04d2828801b0e5b5.jpg","t");
INSERT INTO cms_media VALUES("648","./uploads/be0c4f45004766c7546f1e384797db80.jpg","t");
INSERT INTO cms_media VALUES("649","./uploads/6fc5b7ef58c6706a04d2828801b0e5b5.jpg","t");
INSERT INTO cms_media VALUES("650","./uploads/be0c4f45004766c7546f1e384797db80.jpg","t");
INSERT INTO cms_media VALUES("653","./uploads/c782e6336e9e3aad3a21de4f8374159f.jpg","t");
INSERT INTO cms_media VALUES("654","./uploads/c11d0621aee6a4c86b14c74992340b87.pdf","f");
INSERT INTO cms_media VALUES("655","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("656","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("657","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("658","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("659","./uploads/c782e6336e9e3aad3a21de4f8374159f.jpg","t");
INSERT INTO cms_media VALUES("660","./uploads/c11d0621aee6a4c86b14c74992340b87.pdf","f");
INSERT INTO cms_media VALUES("661","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("662","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("663","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("664","./uploads/","f");
INSERT INTO cms_media VALUES("665","//www.youtube.com/embed/nh5rpOab4C8","v");
INSERT INTO cms_media VALUES("666","./uploads/","f");
INSERT INTO cms_media VALUES("667","./uploads/6478806a6cf5b33f3430cb71561b3adf.png","t");
INSERT INTO cms_media VALUES("668","./uploads/0cfe4047c49154c517cbc3e21fd0f574.pdf","f");
INSERT INTO cms_media VALUES("669","./uploads/6478806a6cf5b33f3430cb71561b3adf.png","t");
INSERT INTO cms_media VALUES("670","./uploads/0cfe4047c49154c517cbc3e21fd0f574.pdf","f");
INSERT INTO cms_media VALUES("673","http://www.youtube.com/watch?v=VskCtHewv5w","v");
INSERT INTO cms_media VALUES("674","./uploads/a6cc795fef26712627d6ab8dbda90282.pdf","f");
INSERT INTO cms_media VALUES("675","//www.youtube.com/embed/VskCtHewv5w","v");
INSERT INTO cms_media VALUES("676","./uploads/","f");
INSERT INTO cms_media VALUES("677","//www.youtube.com/embed/VskCtHewv5w","v");
INSERT INTO cms_media VALUES("678","./uploads/13de7edc3f5ee6363de5e57a74245f62.pdf","f");
INSERT INTO cms_media VALUES("679","//www.youtube.com/embed/nh5rpOab4C8","v");
INSERT INTO cms_media VALUES("680","./uploads/ae256fe5af4f1ef4e39e973694bff9de.pdf","f");
INSERT INTO cms_media VALUES("681","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("682","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("683","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("684","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("685","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("686","./uploads/2d6210423bbb98d940cca09c3d1eeef1.jpg","t");
INSERT INTO cms_media VALUES("687","./uploads/f1ed6ebe2b73f1157271cfac2458c38d.jpg","t");
INSERT INTO cms_media VALUES("688","./uploads/9023eb379138e0b1dc65310e70646524.jpg","t");
INSERT INTO cms_media VALUES("689","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("690","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("691","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("692","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("693","./uploads/2355bf1aebe5f5d1f6b537b2223c24d6.pdf","f");
INSERT INTO cms_media VALUES("694","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("695","./uploads/2355bf1aebe5f5d1f6b537b2223c24d6.pdf","f");
INSERT INTO cms_media VALUES("696","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("697","./uploads/11b90bf640a3bba1f7513d41f7bb7772.pdf","f");
INSERT INTO cms_media VALUES("698","./uploads/b8afa0d1607f388a04b527554e997364.jpg","i");
INSERT INTO cms_media VALUES("699","./uploads/4d040b83b44688267a2540cf7bf043ed.jpg","i");
INSERT INTO cms_media VALUES("701","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("702","./uploads/baf9e69fd447feca34361edb24538cc8.jpg","i");
INSERT INTO cms_media VALUES("704","./uploads/889ad62738031621288391012cd0319a.png","i");
INSERT INTO cms_media VALUES("708","./uploads/b455837535d60bf21da4864f78ab7d99.jpg","i");
INSERT INTO cms_media VALUES("711","./uploads/dd45615edae0820cc0ec0cd23c9ef389.png","t");
INSERT INTO cms_media VALUES("712","./uploads/dd45615edae0820cc0ec0cd23c9ef389.png","t");
INSERT INTO cms_media VALUES("716","./uploads/0bfdc267838248a56ca1753a909ffdc7.png","t");
INSERT INTO cms_media VALUES("717","./uploads/99561ebad6ff98a90083cb058d63d3e0.png","i");
INSERT INTO cms_media VALUES("718","//www.youtube.com/embed/Jj792bRQfVw","v");
INSERT INTO cms_media VALUES("722","./uploads/6cdfa78b6bdb8bbbabef7838d1c3f89d.JPG","t");
INSERT INTO cms_media VALUES("723","./uploads/04be5ef1199ccc2b817c1b5251854d10.png","i");
INSERT INTO cms_media VALUES("724","//www.youtube.com/embed/Jj792bRQfVw","v");
INSERT INTO cms_media VALUES("728","./uploads/ff630344edc7288e74edb8875437746d.jpg","t");
INSERT INTO cms_media VALUES("729","./uploads/c5ff476fd0208ca2ff8ceb72cae5d246.jpg","i");
INSERT INTO cms_media VALUES("730","hola mundo","v");
INSERT INTO cms_media VALUES("741","./uploads/f0ed0b3daf6ae226ed57691b91cae1f9.png","t");
INSERT INTO cms_media VALUES("742","./uploads/ffd26c5af914be75ca7699f4fac6adeb.png","t");
INSERT INTO cms_media VALUES("743","./uploads/9f398dfe07d37b66ab04431d99a92dc2.png","i");
INSERT INTO cms_media VALUES("746","./uploads/9f398dfe07d37b66ab04431d99a92dc2.png","i");
INSERT INTO cms_media VALUES("749","./uploads/8ee1f30275d578550899181c57301b20.png","i");
INSERT INTO cms_media VALUES("750","./uploads/ccb3c38a58bdc3a085f9a3967abf6f58.png","i");
INSERT INTO cms_media VALUES("753","./uploads/99a0366493faa15874cb8200226e2457.png","t");
INSERT INTO cms_media VALUES("756","./uploads/0fb97890f6b8092c0c6dd5b32832b654.png","t");
INSERT INTO cms_media VALUES("759","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("760","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("761","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("762","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("763","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("764","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("769","dgfdgdg","v");
INSERT INTO cms_media VALUES("770","./uploads/6b46eece69a97ab6be8002effefd5b2c.pdf","f");
INSERT INTO cms_media VALUES("771","dgfdgdg","v");
INSERT INTO cms_media VALUES("772","./uploads/","f");
INSERT INTO cms_media VALUES("773","dgfdgdg","v");
INSERT INTO cms_media VALUES("774","./uploads/","f");
INSERT INTO cms_media VALUES("775","add desp. editar","v");
INSERT INTO cms_media VALUES("776","./uploads/4467414150a9b3dec36aeb9a1e3e03d1.pdf","f");
INSERT INTO cms_media VALUES("777","hola mundo","v");
INSERT INTO cms_media VALUES("778","./uploads/e352033957cdc5eb5c1e8883f03dac55.jpg","f");
INSERT INTO cms_media VALUES("779","fddfgdfgd","v");
INSERT INTO cms_media VALUES("780","./uploads/8ed043d4f5b313b6b090162ba2a892bb.pdf","f");
INSERT INTO cms_media VALUES("781","sfasdfsadf","v");
INSERT INTO cms_media VALUES("782","./uploads/c51e7e6e03f76fbd6af285d7845a2099.pdf","f");
INSERT INTO cms_media VALUES("783","czxczxczxczx","v");
INSERT INTO cms_media VALUES("784","bcvbcvbcvbvc","v");
INSERT INTO cms_media VALUES("785","./uploads/c571fed08ac604770ec458a73ff896c6.jpg","f");
INSERT INTO cms_media VALUES("786","bcvbcvbcvbvc","v");
INSERT INTO cms_media VALUES("787","./uploads/1c6131f2a37cd3c68e58cc67756aae47.pdf","f");
INSERT INTO cms_media VALUES("788","linkl","v");
INSERT INTO cms_media VALUES("789","./uploads/48764230d5b2de42d007eff968207299.jpg","f");
INSERT INTO cms_media VALUES("790","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("791","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("792","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("793","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("794","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("795","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("796","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("797","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("798","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("799","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("800","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("801","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("802","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("803","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("804","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("805","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("806","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("807","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("808","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("809","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("810","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("811","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("812","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("813","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("814","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("815","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("816","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("817","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("818","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("819","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("820","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("821","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("822","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("823","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("824","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("825","./uploads/43c566000f17eba393cebe55812d88ad.jpg","t");
INSERT INTO cms_media VALUES("826","./uploads/a0f0ed3cdf0ad1bf6aface4fe338c655.pdf","f");
INSERT INTO cms_media VALUES("827","./uploads/97a135934f757da13875781594f4f1ce.jpg","t");
INSERT INTO cms_media VALUES("828","./uploads/940767464cdd33d6c96a3979e85c7277.pdf","f");
INSERT INTO cms_media VALUES("829","./uploads/685f5baa63defbd775cf010b95dbf238.jpg","t");
INSERT INTO cms_media VALUES("830","./uploads/10fef63427be4f52e7e0f3fbb87bf149.pdf","f");
INSERT INTO cms_media VALUES("831","./uploads/098a886c3383ead399027f9465780540.jpg","t");
INSERT INTO cms_media VALUES("832","./uploads/7cca8428ce7d987ea622535197d40f88.pdf","f");
INSERT INTO cms_media VALUES("833","./uploads/396e051b3c24535dc631fabab0e0cff4.jpg","t");
INSERT INTO cms_media VALUES("834","./uploads/4b81ce5eb58649ea81431e8e8b0c94d6.pdf","f");
INSERT INTO cms_media VALUES("835","./uploads/89afb20af87e74d5a4aa61850bd9c7f2.jpg","t");
INSERT INTO cms_media VALUES("836","./uploads/e06ffb2f3352c51e09c8fb276f2fb521.pdf","f");
INSERT INTO cms_media VALUES("837","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("838","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("839","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("840","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("841","./uploads/2e0c4a8538e26c8ccc8a33e5b61fea35.jpg","t");
INSERT INTO cms_media VALUES("842","./uploads/4efa9cb0be830281d7b651ce7b5a0111.pdf","f");
INSERT INTO cms_media VALUES("845","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("846","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("847","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("848","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("849","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("850","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("851","./uploads/1cf6eb964a6303a0bf1f8735cd7bb6e4.png","t");
INSERT INTO cms_media VALUES("852","./uploads/d407c1f7e53b92ca74283cfd8281ef58.png","i");
INSERT INTO cms_media VALUES("853","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("854","./uploads/2d6210423bbb98d940cca09c3d1eeef1.jpg","t");
INSERT INTO cms_media VALUES("855","./uploads/f1ed6ebe2b73f1157271cfac2458c38d.jpg","t");
INSERT INTO cms_media VALUES("856","./uploads/9023eb379138e0b1dc65310e70646524.jpg","t");
INSERT INTO cms_media VALUES("857","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("858","./uploads/1876d74ea1e3277d3e636b087f489337.png","i");
INSERT INTO cms_media VALUES("859","./uploads/1876d74ea1e3277d3e636b087f489337.png","i");
INSERT INTO cms_media VALUES("863","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("866","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("867","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("868","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("869","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("871","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("872","./uploads/79ff41c8ab3c7d03f0075a872c1bde4b.pdf","f");
INSERT INTO cms_media VALUES("875","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("876","./uploads/180b4dd83ae27c03f4bbd5a7820ef8f1.pdf","f");
INSERT INTO cms_media VALUES("877","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("878","./uploads/79ff41c8ab3c7d03f0075a872c1bde4b.pdf","f");
INSERT INTO cms_media VALUES("879","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("880","./uploads/60ed3c0b6f478a54e1d5dc2031833f77.png","i");
INSERT INTO cms_media VALUES("881","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("882","./uploads/257acb5cc6f72727ef5782acb2728faa.jpg","i");
INSERT INTO cms_media VALUES("883","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("884","./uploads/257acb5cc6f72727ef5782acb2728faa.jpg","i");
INSERT INTO cms_media VALUES("885","./uploads/f31e636b86ca9d1482832fba9c5bc763.png","t");
INSERT INTO cms_media VALUES("886","./uploads/","i");
INSERT INTO cms_media VALUES("887","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("888","./uploads/180b4dd83ae27c03f4bbd5a7820ef8f1.pdf","f");
INSERT INTO cms_media VALUES("889","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("890","./uploads/eccac6a337af37b7a97ccc8c48edee20.pdf","f");
INSERT INTO cms_media VALUES("891","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("892","./uploads/f21351de721e03ce972701d4172bf7eb.pdf","f");
INSERT INTO cms_media VALUES("893","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("894","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("895","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("896","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("897","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("898","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("899","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("900","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("901","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("902","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("903","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("904","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("905","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("906","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("907","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("908","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("909","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("910","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("911","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("912","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("913","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("914","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("915","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("916","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("917","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("918","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("919","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("920","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("921","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("922","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("923","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("924","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("925","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("926","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("927","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("928","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("929","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("930","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("931","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("932","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("933","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("934","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("935","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("936","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("937","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("938","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("939","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("940","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("941","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("942","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("943","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("944","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("945","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("946","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("947","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("948","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("949","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("950","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("951","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("952","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("953","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("954","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("955","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("956","./uploads/43c566000f17eba393cebe55812d88ad.jpg","t");
INSERT INTO cms_media VALUES("957","./uploads/a0f0ed3cdf0ad1bf6aface4fe338c655.pdf","f");
INSERT INTO cms_media VALUES("958","./uploads/97a135934f757da13875781594f4f1ce.jpg","t");
INSERT INTO cms_media VALUES("959","./uploads/940767464cdd33d6c96a3979e85c7277.pdf","f");
INSERT INTO cms_media VALUES("960","./uploads/685f5baa63defbd775cf010b95dbf238.jpg","t");
INSERT INTO cms_media VALUES("961","./uploads/10fef63427be4f52e7e0f3fbb87bf149.pdf","f");
INSERT INTO cms_media VALUES("962","./uploads/098a886c3383ead399027f9465780540.jpg","t");
INSERT INTO cms_media VALUES("963","./uploads/7cca8428ce7d987ea622535197d40f88.pdf","f");
INSERT INTO cms_media VALUES("964","./uploads/396e051b3c24535dc631fabab0e0cff4.jpg","t");
INSERT INTO cms_media VALUES("965","./uploads/4b81ce5eb58649ea81431e8e8b0c94d6.pdf","f");
INSERT INTO cms_media VALUES("966","./uploads/89afb20af87e74d5a4aa61850bd9c7f2.jpg","t");
INSERT INTO cms_media VALUES("967","./uploads/e06ffb2f3352c51e09c8fb276f2fb521.pdf","f");
INSERT INTO cms_media VALUES("968","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("969","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("970","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("971","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("972","./uploads/2e0c4a8538e26c8ccc8a33e5b61fea35.jpg","t");
INSERT INTO cms_media VALUES("973","./uploads/4efa9cb0be830281d7b651ce7b5a0111.pdf","f");
INSERT INTO cms_media VALUES("974","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("975","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("976","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("977","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("978","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("979","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("980","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("981","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("982","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("983","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("984","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("985","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("986","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("987","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("988","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("989","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("990","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("991","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("992","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("993","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("994","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("995","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("997","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("998","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("999","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("1001","./uploads/dcb4eac0ff016595a46151180d93e1a3.jpg","t");
INSERT INTO cms_media VALUES("1002","./uploads/5393a2f207b8ecf1f6404a2a2e09b96e.jpg","t");
INSERT INTO cms_media VALUES("1003","./uploads/defa419754992d51400d0baf0f14afd3.jpg","t");
INSERT INTO cms_media VALUES("1004","./uploads/7d210a89d6c87b5087c402b65371d1d1.pdf","f");
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
  `cvideo` varchar(200) DEFAULT NULL,
  `telefono` varchar(27) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `vancante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_postulado_vancante1_idx` (`vancante_id`),
  CONSTRAINT `fk_postulado_vancante1` FOREIGN KEY (`vancante_id`) REFERENCES `cms_vancante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO cms_postulado VALUES("52","Akira tokunaga","carlos.gomez@imaginamos.com","Bucaramanga","82775333006bc00653451ba37089af57.pdf","1320131021.wmv","2343543","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat sed leo blandit interdum eget ac nulla. Nam cursus sed tellus nec vulputate. Donec vestibulum mauris sagittis odio auctor ultrices. Sed id mi a orci rutrum bibendum eleifend ut sem. Donec sed est eget massa consectetur iaculis sit amet posuere justo. Curabitur elit massa, mattis nec placerat venenatis, lacinia non tortor. In tellus erat, facilisis nec nisi id, vehicula ullamcorper nunc. Proin at ligula sed massa pretium v","15");
DROP TABLE IF EXISTS cms_producto;

CREATE TABLE `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id2` int(11) DEFAULT NULL,
  `cms_sub_categorias_id` int(11) DEFAULT NULL,
  `cms_categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linea_cms_media1_idx` (`cms_media_id`),
  KEY `fk_linea_cms_media3_idx` (`cms_media_id2`),
  KEY `fk_cms_producto_cms_sub_categorias1_idx` (`cms_sub_categorias_id`),
  CONSTRAINT `fk_linea_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_linea_cms_media3` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO cms_producto VALUES("3","ángulo","alas iguales","productos metalúrgicos de alas iguales fabricados con acero \nestructural de acuerdo con la norma ASTM A36 y ASTM A572, disponibles en longitudes de 6 metros.\n","productos metalúrgicos de alas iguales con acero...","924","925","0","22");
INSERT INTO cms_producto VALUES("4","lámina galvanizada","lámina con zinc","la lámina galvanizada es una chapa laminada en caliente o frío, revestida en ambas caras con una capa de zinc, por el proceso de inmersión en un baño de metal fundido, para mejorar su resistencia a la corrosión de acuerdo con la norma ASTM A653.","lámina revestida en ambas caras con una capa de zinc...","926","927","0","18");
INSERT INTO cms_producto VALUES("6","perfiplaca","perfil entrepiso","nuestros perfiles metálicos para entrepiso - perfiplaca, son elementos formados en frío, fabricados con acero estructural al carbono de acuerdo con la norma ASTM A1011 y diseñados para cumplir con esfuerzos de fluencia de 36000psi equivalentes a 248Mpa.","nuestros perfiles metálicos para entrepiso - perfiplaca","928","929","0","23");
INSERT INTO cms_producto VALUES("7","viga ipe","estructural","la viga ipe es un producto metalúrgico de forma en I bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concernientes al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgico de forma en I","930","931","0","22");
INSERT INTO cms_producto VALUES("8","placa colaborante","para planchas","presentamos la única placa colaborante que se puede utilizar por ambas caras. su geometría de avanzada alcanza un metro de ancho, lo cual ahorra al constructor grandes costos en materiales al fundir placas o losas de concreto. Se fabrica en longitudes a la medida.","presentamos la única placa colaborante que se puede...","932","933","0","23");
INSERT INTO cms_producto VALUES("9","cubierta arquitectónica","metálica","nuestras cubiertas arquitectónicas son la solución ideal para cubiertas, fachadas y cerramientos para cualquier tipo de estructuras. las cubiertas son formadas en frío con lamina galvanizada o aluzinc prepintado de color rojo, verde, azul o blanco y en espesores de 0.35mm a 0.55mm y longitudes de 3, 4, 5 y 6 metros.","nuestras cubiertas arquitectónicas son la solución...","934","935","0","21");
INSERT INTO cms_producto VALUES("10","teja de zinc","ondulada","la te ja de zinc, es un producto fabricado en lámina de acero galvanizada y ofrece principalmente las ventajas de ser mas ligera, resistente, impermeable y de rápida instalación respecto a los sistemas similares.","la te ja de zinc, es un producto fabricado en lámina...","936","937","0","21");
INSERT INTO cms_producto VALUES("11","perlin en c","estructural","nuestros perfiles metálicos estructurales son elementos formados en frío, fabricados con acero de bajo contenido de carbono de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de soldabilidad, diseñados para cumplir esfuerzos de fluencia mínimos de 42000psi equivalente a 290Mpa.","nuestros perfiles metálicos estructurales son...","980","981","0","22");
INSERT INTO cms_producto VALUES("12","viga hea","estructural","la viga ipe es un producto metalúrgico de forma en H bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concernientes al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgico de forma en H","942","943","0","22");
INSERT INTO cms_producto VALUES("13","canal","tipo americano","la canal es un producto metalúrgico de forma en u, bajo norma ASTM A36 y en longitudes de 6 metros. estas se utilizan principalmente para la elaboración de estructuras livianas y pesadas , dada su gran resistencia y dimensiones compactas.","la canal es un producto metalúrgico de forma en U","946","947","0","22");
INSERT INTO cms_producto VALUES("14","ángulo","alas iguales","productos metalúrgicos de alas iguales fabricados con acero estructural de acuerdo con la norma ASTM A36 y ASTM A572, disponibles en longitudes de 6 metros.","productos metalúrgicos de alas iguales fabricados...","948","949","0","20");
INSERT INTO cms_producto VALUES("15","fleje cortina","para puertas metálicas","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente, marco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","950","951","0","24");
INSERT INTO cms_producto VALUES("16","pasamanos","perfil","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente,\nmarco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","952","953","0","24");
INSERT INTO cms_producto VALUES("17","marco ventana","tipo aluminio","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente,\nmarco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","954","955","0","24");
INSERT INTO cms_producto VALUES("18","lámina cold rolled","lámina en frío","la lámina en frío o cold rolled es fabricada de acero en caliente, el cual ha sido limpiado químicamente antes de ser enrollado. el proceso de formado en frío reduce el espesor del acero y\nal mismo tiempo cambia sus propiedades.","la lámina en frío o cold rolled es fabricada de acero..","956","957","0","18");
INSERT INTO cms_producto VALUES("19","lámina hot rolled","lámina en caliente","la lámina en caliente, hot rolled o HR viene de un proceso metalúrgico, usado principalmente para\nproducir hojas a partir de planchones, los cuales son deformados entre un set de rodillos hasta\nalcanzar el espesor deseado.","la lámina en caliente, hot rolled o HR viene de un...","958","959","0","18");
INSERT INTO cms_producto VALUES("20","lámina alfajor","lámina antideslizante","la lámina alfajor o antideslizante es ideal para uso industrial en zonas de riesgo y alto trafico donde\nse requiera una opción durable, resistente y verdaderamente antideslizante.","la lámina alfajor o antideslizante es ideal para uso...","960","961","0","18");
INSERT INTO cms_producto VALUES("21","lámina aceitada y decapada","pickled and oiled","la lámina aceitada y decapada es el producto ideal para las aplicaciones en donde la calidad\nsuperficial es un factor importante, ya que se trata de lámina de acero con ácido clorhídrico\npara remover las impurezas y oxido superficial.","la lámina aceitada y decapada es el producto ideal...","962","963","0","18");
INSERT INTO cms_producto VALUES("22","planchas - placas","plates","las planchas, placas o plates son productos de acero, laminados en caliente y cortados a medidas, con un mínimo espesor de 4.50mm y ancho de 1830mm. estas planchas son utilizadas para una gran variedad de productos terminados en los diferentes sectores económicos.","las planchas, placas o plates son productos de acero...","964","965","0","18");
INSERT INTO cms_producto VALUES("23","tubería mueble","cold rolled","tubería fabricada en acero laminado en frió de sección redonda, ovalada, cuadrada y rectangular para la elaboración de estructuras livianas. esta tubería viene con una longitud estándar de 6 metros y en los diferentes espesores.","tubería fabricada en acero laminado en frió de...","966","967","0","19");
INSERT INTO cms_producto VALUES("24","tubería estructural","hot rolled","tubería fabricada en acero laminado en caliente, de acuerdo con la norma ASTM A500 Grado C, la cual viene en secciones redondas, cuadradas y rectangulares. su longitud estándar de 6 metros y viene en espesores de hasta 6mm.","tubería fabricada en acero laminado en caliente...","990","991","0","19");
INSERT INTO cms_producto VALUES("25","tubería negra","hot rolled","tubería fabricada en acero laminado en caliente, con bajo contenido de carbono, de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de alta soldabilidad. se elaboran en diferentes espesores y con una longitud estándar de 6 metros.","tubería fabricada en acero laminado en caliente...","992","993","0","19");
INSERT INTO cms_producto VALUES("26","perlin en C","estructural","nuestros perfiles metálicos estructurales son elementos formados en frío, fabricados con acero de bajo contenido de carbono de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de soldabilidad, diseñados para cumplir esfuerzos de\nfluencia mínimos de 42000psi equivalente a 290Mpa.","nuestros perfiles metálicos estructurales son...","972","973","0","20");
INSERT INTO cms_producto VALUES("28","canal","tipo americano","la canal es un producto metalúrgico de forma en u, bajo norma ASTM A36 y en longitudes de 6 metros. estas se utilizan principalmente para la elaboración de estructuras livianas y pesadas , dada su gran resistencia y dimensiones compactas.","la canal es un producto metalúrgico de forma en U...","986","987","0","20");
INSERT INTO cms_producto VALUES("29","viga hea","tipo europeo","la viga hea es un producto metalúrgicos de forma en H bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concerniente al esqueleto portante de una estructura.","la viga hea es un producto metalúrgicos de forma en H ","988","989","0","20");
INSERT INTO cms_producto VALUES("30","viga ipe","tipo europeo","la viga ipe es un producto metalúrgicos de forma en I bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concerniente al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgicos de forma en I","982","983","0","20");
INSERT INTO cms_producto VALUES("31","Carlos Gomez","imaginamos s.a","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat sed leo blandit interdum eget ac nulla. Nam cursus sed tellus nec vulputate. Donec vestibulum mauris sagittis odio auctor ultrices. Sed id mi a orci rutrum bibendum eleifend ut sem. Donec sed est eget massa consectetur iaculis sit amet posuere justo. Curabitur elit massa, mattis nec placerat venenatis, lacinia non tortor. In tellus erat, facilisis nec nisi id, vehicula ullamcorper nunc. Proin at ligula sed massa pretium viverra. Duis placerat neque vitae dignissim vulputate. Phasellus tincidunt, sem a mattis elementum, lectus ipsum pulvinar ipsum, eget volutpat libero tellus nec nisl. Aenean sollicitudin lobortis nulla, et egestas urna lobortis ac.\n\nNam nulla magna, cursus sed leo ac, faucibus imperdiet massa. Curabitur rhoncus est risus, a consectetur elit porta quis. Pellentesque habitant morbi tristique","Lorem ipsum dolor sit amet, consectetur adipiscing elit","1003","1004","7","0");
DROP TABLE IF EXISTS cms_propietario;

CREATE TABLE `cms_propietario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` varchar(150) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_propietario_cms_media1_idx` (`media_id`),
  CONSTRAINT `fk_cms_propietario_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cms_propietario VALUES("1","Campana","1");
INSERT INTO cms_propietario VALUES("2","Imaginamos","480");
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO cms_servicio_corte VALUES("6","corte transversal","cortamos a la medida, blancos o estándar, bobinas cold rolled, galvanizada, hot rolled, alfajor, decapada y plancha.","679","680","0");
INSERT INTO cms_servicio_corte VALUES("13","corte longitudinal o slitter","cortamos a la medida, flejes o cintas, bobinas cold rolled, galvanizada, decapada y hot rolled.","685","","");
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
INSERT INTO cms_sessions VALUES("032027247f596f7a4cc2ce8071d7511b","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382438550","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("033dda1b84f0ffdae6f869865b5c4e02","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381415541","");
INSERT INTO cms_sessions VALUES("06520b1a97182583e1fcddf57872c4dc","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("0798e450b61753f51afb26a8761479f9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380577400","");
INSERT INTO cms_sessions VALUES("07f7a009c357fa2497da44a7c0031729","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0","1381424549","");
INSERT INTO cms_sessions VALUES("0c0236c745be61078c1b806885f9e296","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A5","1380323566","");
INSERT INTO cms_sessions VALUES("0c1e4d311de2a56d327727943ad3ffb1","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024998","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0c9b01a15ba75e8602aa270f0dd705ad","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1382029082","");
INSERT INTO cms_sessions VALUES("0ce1fcfdab99d1077038c0c633cb1bfe","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380807965","");
INSERT INTO cms_sessions VALUES("0dbd350407e6c6c64de76c45420cebfd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211614","");
INSERT INTO cms_sessions VALUES("0fb02250f55661f6620bbd08cde9a066","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381426037","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("100778f9e02212f2f3171d72f39c067e","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381872008","");
INSERT INTO cms_sessions VALUES("118ea1900f1e68183590d637c766c068","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381237481","");
INSERT INTO cms_sessions VALUES("1347e988fab7b08dd53f97fcf22c5bd4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990321","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("15e7622fb1d6ce59f003545a0ceed3e9","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381854253","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("15fc951e9fd59dce86cf5749d3598794","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("17dbc2cc0f240c574f9017761b8e4368","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1382391622","");
INSERT INTO cms_sessions VALUES("1d1868ef7891cb79f25b411ff474d0cf","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381869763","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("1d82cda24bf1ee3235029b0727c9c2d1","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382134938","");
INSERT INTO cms_sessions VALUES("1e2e7e60cb82fef4da9a5926637d60eb","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36 OPR/17.0.12","1381783135","");
INSERT INTO cms_sessions VALUES("1e4deb30ce903d34b16296eaf2baa29b","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381424020","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("1e8f86c6db1c25842aa7e9477d04b76a","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("216fd2b471c0faee2ae425fe3dad322e","69.171.245.7","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393670","");
INSERT INTO cms_sessions VALUES("2225f811340b6f47475b2e5974b29355","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2","1381498225","");
INSERT INTO cms_sessions VALUES("22d95aeba658912442ebe5c9631c4a72","127.0.0.1","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1380916278","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("2382231c358d565edbcaaf9d670ca6f5","127.0.0.1","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380916694","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("251547199f84cd5701f300948a3835e2","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379711219","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("25e4ac17b544f9a2793876fa4626f4b9","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382456135","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("273b9d574d96034c8b69cef6b3534256","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.3; PAD703 Build/IML74K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobi","1381351207","");
INSERT INTO cms_sessions VALUES("2a67f57436d8d181e3bb80a17052e4e8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322617","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("2b9a6b2f3b2547c6f3f8b196482a1929","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381867439","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("2cb67fdb6c44d81f6b16e9aaf30284f4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379947802","");
INSERT INTO cms_sessions VALUES("2cee661632a74800331c9bf83bc4c214","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1382368177","");
INSERT INTO cms_sessions VALUES("2d0667fd22796ee9251d9f90c2e34f8f","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380059427","");
INSERT INTO cms_sessions VALUES("2d501ead78d00e9022f59d9934d6c2ef","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766908","");
INSERT INTO cms_sessions VALUES("315513bceea7b81835cc163739ce39c0","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("316b93b0c56548b4fe1da43d24aaee33","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1381274704","");
INSERT INTO cms_sessions VALUES("343419264f15077a1cae52d907297cd6","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380136732","");
INSERT INTO cms_sessions VALUES("35f04f57335e5f60482c6bcf30664c73","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("363321fbcb9dceed0b6e07230fa79371","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("3639377ac92b437d3b3d22e8d6809116","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:24.0) Gecko/20100101 Firefox/24.0","1381350764","");
INSERT INTO cms_sessions VALUES("3c2ca361f7688b89478766daa845ddbe","186.181.17.72","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.15","1379725548","");
INSERT INTO cms_sessions VALUES("409dea03bd332caf2ec287e1ca679e24","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461492","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("41dc2b0b7b2dcc77e1f630ddcca47f03","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380287778","");
INSERT INTO cms_sessions VALUES("43c568329aad829c01d96efd80012c1d","69.171.237.9","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240245","");
INSERT INTO cms_sessions VALUES("446c3ca190c2cab63c7040939b0bd903","173.252.73.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929583","");
INSERT INTO cms_sessions VALUES("474daa182e8bd72087b3570e9546d5c7","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226362","");
INSERT INTO cms_sessions VALUES("483a8875d5df339ed5313aa98e796302","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("48722381c72a5ccd88b74217c341381b","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990932","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("49455e226a13c03ecb30eb0bc9c0c7f3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("4f7d71e543f6ad39fe331a884fb44de9","173.252.112.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393669","");
INSERT INTO cms_sessions VALUES("521bb391c5d6adcb2632f218fd39a245","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("58bfa5912b854d1b4c17fe33ae779f39","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380303639","");
INSERT INTO cms_sessions VALUES("5d97db384cdb895e0b63caa3ce0d222d","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382201970","");
INSERT INTO cms_sessions VALUES("5e2b8e2d14f30e1777e12094b0112f52","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226361","");
INSERT INTO cms_sessions VALUES("5ece7799943f5c7d3ba0e8215ecd3a41","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381519127","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("62bf05bdfbce59ca624be9c55e458502","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380317340","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("631645043fd5e498ce1a89fb5785a407","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380921288","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("634f0fc7ebca72626ec43b27f9c1ca97","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381935163","");
INSERT INTO cms_sessions VALUES("639a7ef6c2f04e787982c74199f91c4b","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382393712","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("64ee1ae7683310ec5b3c9c7f10b2217b","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380296793","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("658f4bed1e0fdf93dee5b1e967d14741","69.171.237.11","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240241","");
INSERT INTO cms_sessions VALUES("6850ee7121d0b81d2075d69cf8375b1a","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382372126","");
INSERT INTO cms_sessions VALUES("6a5efb2dcdf31585adf7f990d61e42cb","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("6a73fb18057ad400ba372fdd9246d4b9","69.171.233.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929584","");
INSERT INTO cms_sessions VALUES("6cf11841ee0930376c08d4555a2d2d2c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("6ecd627f26042b227643b27f88a7b874","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1381274835","");
INSERT INTO cms_sessions VALUES("6f484978df18a40c7232d58978cd8c39","69.171.235.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240247","");
INSERT INTO cms_sessions VALUES("70a41c54ae634ec2a4a5641ff75123d2","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380131377","");
INSERT INTO cms_sessions VALUES("722789009aa7976b87af8c4a8f3958ab","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382029826","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("73a34bc660783e1438240cd26ad55546","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382446913","");
INSERT INTO cms_sessions VALUES("77508abda1676beea2aeaf6f53722f63","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
INSERT INTO cms_sessions VALUES("77604d82d92feab2e8fb0fe5b4755524","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381870259","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7cca239280b8d5e35e4cea42fd488cf0","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381331702","");
INSERT INTO cms_sessions VALUES("7f74d850f23c93ba3662a0e097c34cad","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382189222","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7f7559ce7bea4f65e47e1ed799360840","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381529313","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7f9df1211e3a6a7e081e6ae0e4fb0d8a","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381352406","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7faa6de7d129b477248e93633534e4f0","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379710474","");
INSERT INTO cms_sessions VALUES("80a75b55375ce97d0f43ea978f5e7619","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322491","");
INSERT INTO cms_sessions VALUES("80be9af7b4aaf7d6725449e938794022","190.60.239.146","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381276968","");
INSERT INTO cms_sessions VALUES("82bf10468746ecfb637b0dd5ca9621fd","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.82 Mob","1382390897","");
INSERT INTO cms_sessions VALUES("834c4e6c17f35f2a57174d8d4f0ec1b8","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465","1380285427","");
INSERT INTO cms_sessions VALUES("84bf4a0ec9e8ca3d9f94488c31ec0326","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381251640","a:3:{s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("89487d415c6d0318fc290a3eef4347a7","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381262687","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("89fd6ba83a6ab0417bf4242f8204deb4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461491","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("8c503926a2ffa3b3839963a6048436b6","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381861012","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("90dafb5aeebcff0c44ae455218badaa5","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210743","");
INSERT INTO cms_sessions VALUES("918dfc96f67b2b5adce1dd6f4e7ef338","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380721994","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("91a04117ba6ec6a775f173c42bd82d76","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210732","");
INSERT INTO cms_sessions VALUES("92513ace33ae6d369ec5d5b5891341e6","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381931423","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("92c280b02837bba5afec834bb40a09a9","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382030442","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("9834bb4bcaf175ed2eaa2e3f3fe6ef61","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777483","");
INSERT INTO cms_sessions VALUES("98eecb3fef02159b5583d9460f84bf3e","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
INSERT INTO cms_sessions VALUES("998e5aa79b86b5d548a0242d33878a11","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0","1381954914","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("99cbe4f16b1faee7e1054898a96c5b69","173.252.73.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929578","");
INSERT INTO cms_sessions VALUES("99f41d3ad45637e16c147c6754030577","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381496741","");
INSERT INTO cms_sessions VALUES("9a53affb63ac0a30c2fbee3a250ae2dd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211607","");
INSERT INTO cms_sessions VALUES("9a79b2ad775daa5f511d7ca558f43ea9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("9b8c27ebacac987a157aba61e7da3d54","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381938132","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("9d1cb68b4591f9b4ddd83ddda70355b0","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Win64; x64; Trident/6.0)","1381424521","");
INSERT INTO cms_sessions VALUES("9dda7e631a9e6299c314a00109f4ca71","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381498675","");
INSERT INTO cms_sessions VALUES("9fcc6e495b5f31d390bfab1760fdb92e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380664968","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a3792c0832f481314ade8b9d966015b3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380036829","");
INSERT INTO cms_sessions VALUES("a3a5ac35203fc50637374f668d35e243","190.85.81.218","Mozilla/5.0 (Linux; Android 4.2.2; GT-I9500 Build/JDQ39) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.169 Mob","1382446249","");
INSERT INTO cms_sessions VALUES("a43b4ab6fc31e9a9de05f42f47724b5e","186.82.189.141","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1381498917","");
INSERT INTO cms_sessions VALUES("a5c666218264b0b7967ee50f2d1e44a8","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1382397715","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a5fefb7cb25bd3d5864fa19ae0bdf264","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381874316","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a8d8e22fc16439feef4af5be28f0cb0f","216.52.242.14","LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)","1380225891","");
INSERT INTO cms_sessions VALUES("a8ddddecde275d83f33d6fed3a80cdab","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381496180","");
INSERT INTO cms_sessions VALUES("aa46968c9058a6abfad557421f196dff","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381423004","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("aba95e0d50bcd2dd9d390f0d60a6fdde","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713687","");
INSERT INTO cms_sessions VALUES("ac1d9d5d7b354b6cdfae5c90b57106d3","69.171.242.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226078","");
INSERT INTO cms_sessions VALUES("ac3cbcbd54cc7aee868f73a9f1a5014b","186.30.182.229","Mozilla/5.0 (Linux; Android 4.1.2; GT-I8190L Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 M","1381498881","");
INSERT INTO cms_sessions VALUES("afd63f25f640e46555552204d77c3324","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1381865594","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("b198407a57766fbcbe35d50dc9daeb63","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382033963","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("b3469cc57d2405a0bd0ec646cf85fa18","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381424563","");
INSERT INTO cms_sessions VALUES("b4b2d077a5a26cba9d7a0b1b91e8d965","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("b6fdd0f3d820fe4c5d2d73a47d5fbe60","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380810763","");
INSERT INTO cms_sessions VALUES("b809b5c32fc26a28880fd94017e25ecc","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381867980","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ba7aef70de1e6c85baa83904adc59105","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("befbe2722a7fd35cdb7598f2277f5312","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380040862","");
INSERT INTO cms_sessions VALUES("c22dac36b3468f99d4640e837abde250","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381941890","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c2a6361d1523c096c26d33248dea2b51","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766736","");
INSERT INTO cms_sessions VALUES("c41047ec13d87911d2a64e0638c11772","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1380995592","");
INSERT INTO cms_sessions VALUES("c41e3e12f8581f29f06359da0fc4c00e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380295512","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c71cad37b58de31877cc79ae4d151782","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382140214","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c82cc950e1e31ca95f37b62344a27464","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461491","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ccde4cc269c64db78c4b13a24f62ab05","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("cd04d9d0baef3b3fb6ba5dce2f7c9a78","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990322","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("cd79009ff0089480ee66031363b357aa","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("cd90743a133c5a0816770163fcaa76d7","186.82.189.141","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379791892","");
INSERT INTO cms_sessions VALUES("cfe963520fa5c7e1173691bb14be9768","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381497075","");
INSERT INTO cms_sessions VALUES("d020dc0cf8649093fb4baf9be216f79b","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382456148","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("d3fcc4d91cbc50c7a1fcd6509130cb99","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)","1381424510","");
INSERT INTO cms_sessions VALUES("d4c8a6aba5c8dd95f30202c8110e92ca","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("d4ef569ba3a3754d5c2ccd03e8af2434","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024675","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("d5bdfc71335108110b87fa6ef5804ea1","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380555206","");
INSERT INTO cms_sessions VALUES("d6251d478eb79ee3a35e168353f96426","200.93.143.83","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1382012231","");
INSERT INTO cms_sessions VALUES("d74c36028796002e660eea407aae9b05","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380238977","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("d83b5ec22def084300f80e5c19be7d41","186.28.254.35","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)","1379709461","");
INSERT INTO cms_sessions VALUES("dadc2b92b9b1ee5a96640ab516d42afa","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1382370601","");
INSERT INTO cms_sessions VALUES("dd6c0f2c5cd0cd4dcd4905cd200a467c","69.171.242.116","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226074","");
INSERT INTO cms_sessions VALUES("ddf013fb0fd69a3668237ccbee8202ec","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("deb0d2327510e0fb24f43eef6c862a97","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380724002","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("e003dba09c1e5113bce7d81611dc6d8c","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1381274659","");
INSERT INTO cms_sessions VALUES("e09a6e999d0d9776d5f5fa6ba79d9b99","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382397395","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("e19687e3c68c35bbbdedc4fb8f29050f","173.252.112.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393665","");
INSERT INTO cms_sessions VALUES("e2f707ad273afff08fcc9568df30b143","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2","1381186731","");
INSERT INTO cms_sessions VALUES("e63a5ce1185fb7049764c9fd7db5c7d3","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1382370773","");
INSERT INTO cms_sessions VALUES("e7cf820706bc0b445c1d29fcde35bdda","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380925043","");
INSERT INTO cms_sessions VALUES("e839f3b854b375bd3c630b0ef1f4a852","69.171.245.0","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226079","");
INSERT INTO cms_sessions VALUES("e84aef4674938f0cdf21ab986e8415f8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024095","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("e875540c43bb98bae69352d5ebf911aa","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380141416","");
INSERT INTO cms_sessions VALUES("efa41d9181288c6998d46f845d903103","190.60.239.146","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("f102ee90b4c5abcfd98a86e482440fee","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382025805","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("f1e8310bf3da89d673dcc6e7a63e320d","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382021892","");
INSERT INTO cms_sessions VALUES("f6f19f1635e14a979ef5151c01c0738c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("f77ceefefc8d7832f7e9ff8dd0d5d0ac","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381954123","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("f7d65c6277ca953c37c0eb83f211f8c4","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO cms_sub_categorias VALUES("7","Prueba Imaginamos","Carlos Gomez","Lorem ipsum dolor sit amet, consectetur adipiscing elit","28","1002");
DROP TABLE IF EXISTS cms_trabajador;

CREATE TABLE `cms_trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) NOT NULL,
  `cargo` varchar(74) NOT NULL,
  `comentario` text,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  `media_id2` int(11) NOT NULL,
  `orden` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_trabajador_cms_media1_idx` (`media_id`),
  KEY `fk_trabajador_cms_media2_idx` (`media_id1`),
  KEY `media_id2` (`media_id2`),
  CONSTRAINT `cms_trabajador_ibfk_1` FOREIGN KEY (`media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO cms_trabajador VALUES("4","ana rojas","aliada comercial","nací hace 25 años, soy una persona con carácter un poco fuerte, me gusta ser amable, respetuosa y tolerante. adoro la naturaleza, ver cine y estar con mi familia. Le tengo demasiado miedo a las arañas y ranas.\n\ndisfruto estar en mi casa, no recuerdo haber estado sola en mi vida. tengo muchísimos conocidos que cualquiera los agruparía como amigos, en mi caso soy muy selecta; la amistad es un tesoro muy valioso. amigos son aquellos personas que acuden a ti sin llamarlos, con solo mirarte saben lo que te pasa. de esos no tengo muchos, sin embargo me siento afortunada porque los tengo.\n\nsufro muchísimo cuando me equivoco y he aprendido a pedir perdón y me hace sentir bien, como decirle a todos los que quiero, que los quiero.\n\nel gusto y el amor son el toque secreto para convertir un trabajo en un estilo de vida, hace que tu trabajo sea tu mayor distracción, y así lo siento yo.\n\nme gustan las ventas y mi mayor satisfacción, lograr la satisfacción en mis clientes.\n","565","564","566","1");
INSERT INTO cms_trabajador VALUES("5","marisol sanchez","aliada comercial","“me encanta este trabajo “dice marisol. y aunque incursiono al mundo de las ventas desde hace más de 10 años en otro ramo diferente, el tema de la construcción la apasiona y la posibilidad de conocer gente nueva todos los días es su motivación.\n\nentablar amistades y el saber relacionarse con sus clientes siempre le sale de forma espontánea. “hoy gracias a mi experiencia como asesora, mis clientes se sienten satisfechos con la calidad del servicio que les prestó” comenta.\n\nno es casualidad que esta ibaguereña haya dedicado su vida a las ventas, desde muy joven sintió inclinación por el gusto a interacción con otras personas y gracias a su empeño y dedicación se consolida como una de las mejores asesoras actuales de la campana.\n\n“me gusta reírme y hablar de todo un poco, cuando logro cerrar un negocio hago que mis clientes se sientan en confianza y desde el inicio de la relación comercial me convierto en su amiga y colaboradora”. para ella el plan de trabajo y el seguimiento continuo es el éxito de sus negocios.\n","604","603","605","3");
INSERT INTO cms_trabajador VALUES("6","alexander molano","aliado comrecial","no hay certeza de nada, el mundo siempre admite cambios…\nlos únicos límites, son los que uno se fija…\n\nnacido en bogotá, siempre crecí con la idea de plasmar mis ideas en el mundo sin dejar pasar la vida en frente mío sin hacer nada. me encanta el futbol y la adrenalina del automovilismo,  además siempre ver en el deporte como un escape a la rutina, me  gusta la sensación de sentir la tranquilidad y de perderse por un momento del mundo de hoy con la letra de una canción o con la brisa de un lugar tranquilo. un buen libro y la sensación de vivir cada letra es mi motivación, vivir una historia literaria en la mente siempre ha sido algo alucinante para mí.\n\nme gusta aprender moderadamente, aunque más comprender lo que aprendo. soy del tipo de personas que piensa que la disciplina y el “querer interno” cambian el mundo y refleja resultados en la vida de una persona perseverante. el avance, la innovación y la sed de más cada día es lo que hace respirar el mundo; las nuevas ideas por locas que sean y ver más allá de la realidad y de la materialidad siempre ha sido mi motivación.\n\ncreyente de ser parte de una nueva generación tecnológica, eficiente, con soluciones inmediatas y conscientes de la necesidad de innovar. me apasiona la tecnología y las nuevas ideas por explorar, una nueva aplicación para android, un tweet con sensaciones de momento, compartir sitios con amigos en facebook  o un acontecimiento importante en linkedin hace parte de mi realidad cada día.\n\nsiempre he creído y lo sigo reafirmando; los mejores logros de la vida se logran con estrategia y con tiempo, siendo este el mejor consejero para avanzar en cada proyecto que trazo en mi vida.\n","601","600","602","2");
INSERT INTO cms_trabajador VALUES("7","rocio hernandez","aliada comercial","nací en bogotá en 1960, tengo 4 hermanos y  todos crecimos al lado de una hermosa mujer que nos ha enseñado siempre hacer fuertes y echados “pa’ delante”.\n\ntengo 3 hermosos hijos de los cuales me siento orgullosa, son personas respetuosas y responsables.\nempecé a trabajar en la campana responsablemente  en un punto de venta.\n\nen este momento de mi vida me gusta compartir con mis nietos y mi familia y espero cumplir el sueño de viajar y conocer el mundo. \n","607","606","608","5");
INSERT INTO cms_trabajador VALUES("8","rodrigo hoyos","aliado comercial","considero que soy una persona muy alegre la cual siempre ve el lado positivo por muy pequeño que sea. trato siempre de crear relaciones con la gente, pues de esa manera tengo la oportunidad de aprender de  sus conocimientos y experiencias.\n\n tengo muchos sueños los cuales siempre trato de cumplir. disfruto la vida y me gusta que las personas que me rodean también lo hagan. \nla campana ha sido una gran oportunidad que me ha permitido lograr metas. Soy apasionado por lo que hago, realizo cada una de mis tareas con responsabilidad y compromiso esperando poder brindar el mejor servicio posible. \n\nel placer más grande es sentir al final de un  largo día de trabajo que mis clientes están satisfechos con mi labor. \n","610","609","611","6");
INSERT INTO cms_trabajador VALUES("10","ivan ibañez","director comercial","siempre ando en la búsqueda de nuevas formas e ideas que causen impacto en como mostramos nuestros servicios y productos. creo que la empatia lo es todo para llevar una empresa al éxito; el conocer a fondo las necesidades de nuestros clientes y brindar soluciones precisas y rápidas, nos hace ganar confianza, seguridad y fidelidad. Me apasionan las ventas, la publicidad, el mercadeo y el diseño gráfico\n.\nsoy de Bogotá, y administrador de empresas graduado de la universidad internacional de la florida. he trabajado en el área de ventas por mas de 12 años.  me gusta montar en moto y conocer los diferentes paisajes que tenemos en Colombia. \n\nen la campana he trabajado por mas de 6 años; aprendiendo de cada uno de nuestro equipo de trabajo y puedo decir: ¡que somos una gran familia!.\n","595","594","596","4");
INSERT INTO cms_trabajador VALUES("11","lila ruiz","aliada comercial","me gusta trabajar en ventas e interactuar con mis clientes. me gusta conocer a cada una de las empresas que les vendo para brindarle un mejor servicio. me encanta viajar conocer nuevas culturas y los buenos restaurantes. \n\nno me rindo tan fácil. soy proactiva y mi motivación es ponerme retos difíciles pero no imposibles. me relaja ir de compras sin cohibirme de obtener lo que me gusta; es gratificante porque es el triunfo, después de una jornada interesante de trabajo.\n\nme gusta estar tranquila y compartir con mi familia. sentirme a gusto con cada cosa que hago siendo sincera, comprometida, y el toque secreto, mucho amor.\n","613","612","614","7");
INSERT INTO cms_trabajador VALUES("13","julian gomez","aliado comercial","nací y crecí en manzanares caldas, un pequeño municipio en el eje cafetero, donde siempre disfrute de la tranquilidad del campo, montar en bicicleta, nadar y jugar futbol en compañía de mis primos y amigos, además de tener una excelente familia, donde me inculcaron valores éticos y morales, me estructuraron siempre para que lograra  superarme y alcanzar mis metas. en 2003 me traslade a bogotá, buscando el sueño de ser profesional, estudiar siempre  ha sido mi principal pasión, y gracias a dios estoy a punto de culminar mi carrera de administración de empresas en la pontificia universidad javeriana.\n\nme considero un ser humano creativo, polifacético, sociable, atento, respetuoso, de un humor inigualable, futbolista aficionado e hincha del once caldas y el Barcelona de España. me fascinan los medios electrónicos y estar siempre a la vanguardia en temas tecnológicos. funde hace 10 años un blog de opinión para mi municipio: www.tribumanzanares.blogspot.com; otra faceta importante que me apasiona es la filantropía, servirle a la comunidad es una virtud que considero debemos tener todos los seres humanos, por ello he liderado proyectos de impacto social en zonas vulnerables de la capital y mi departamento.\n\ndesde hace 8 años estoy vinculado al sector constructor y de industria ofertando productos derivados del hierro y el acero; usando mi perspicacia técnica y de negocios me motiva obtener muchos más conocimientos, para asesorar, resolver inquietudes, gestionar negocios y contestar requerimientos de mis clientes, desde esta gran empresa como lo es la campana.\n","616","615","617","8");
INSERT INTO cms_trabajador VALUES("15","edgar elguedo","aliado comercial","Dinámico, diligente, emprendedor.  Ex integrante  por muchos años del legado cultural de mi familia al Carnaval de Barranquilla, patrimonio de la humanidad, La Danza El Torito Ribeño. Soy una persona responsable, amable, comprometido con las personas  y que con la iniciativa que me caracteriza, dispuesto  a aprender y adquirir conocimientos para aplicarlos a mi vida diaria y profesional. Me gusta el deporte, la música, considero que la familia es un tesoro y que un libro es un buen compañero. \n\nOrgulloso de mi tierra, me satisface dar lo mejor de mí para lograr metas y brindar apoyo a muchas personas.","791","790","792","9");
INSERT INTO cms_trabajador VALUES("16","maira perez","aliada comercial","las experiencias y aprendizajes del día a día…\n\nsoy una joven alegre, soñadora, dedicada y comprometida, así se describe maira pérez, publicista del área andina y asesora comercial de la campana.\n\ndesde temprana edad siento gusto por el arte; me desempeño en actividades como la pintura, el diseño, la fotografía y el baile entre otras actividades artísticas. la vida me ha llevado a conocer y aprender cosas nuevas, tales como el mercadeo, no es mi fuerte pero si algo, que actualmente me ha gustado y en lo cual deseo fortalecerme.\n\nconsidero que en el mundo, todos debemos estar atentos a conocer cosas nuevas, esto mismo hace crecer al ser humano como persona, profesionalmente y en su entorno social. por eso soy proactiva en mis actividades diarias, exigiéndome cada vez más y con ganas de conocer cada día cosas nuevas.\n\nhace algunos años me imaginaba trabajando en el medio publicitario, pero la vida me ha enfocado al mercadeo y el área comercial, es como si el área comercial me conquistara desde el primer instante. hoy en día considero, que es un medio del cual no quiero salir, quiero enfocarme  y cada día mejorar.\nhace algunos meses se me presentó la gran oportunidad de entrar a la campana, no creía entrar allí porque es una empresa muy buena y exigente, pero cuando me arriesgue me llamaron. ha sido una gran experiencia, no sólo un trabajo sino una escuela, donde cada día agradezco inmensamente las exigencias de mi jefe y el excelente calor humano, me encanta exigirme conmigo misma y ver los resultados ejecutados y que a otras personas también les genera beneficio.\n\nactualmente soy asesora comercial de mostrador, y me siento afortunada de atender a los clientes, el ambiente en el que me encuentro es el mejor y espero seguir creciendo y mejorando cada día.\n","794","793","795","10");
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

INSERT INTO cms_users VALUES("5","\0\0","administrator","092e624ccaf41c1b9c0dd32a1041043a82507bc7","e0efe63787","cms@imaginamos.com","","","0","1218e83c71363e71c292b071dace76d3f56b47af","1343253917","2013","1","","","","");
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO cms_vancante VALUES("14","administrador de empresas","comercial","<div align=\"justify\">perfil administrador de empresas\n\nobjetivo del cargo:\nadministración y manejo de punto de venta logrando metas establecidas en el presupuesto de ventas de la empresa, manteniendo de forma activa las relaciones con el cliente, logrando una fidelización permanente del mismo.\n\nfunciones claves:\n<br><br>•	conocer acertadamente los productos y servicios de la organización.\n<br>•	asesorar de manera real y objetiva a los clientes y sus necesidades.\n<br>•	orientar, ayudar y manejar el grupo de asesores del punto de venta.\n<br>•	administrar coherentemente su agenda de trabajo.\n<br>•	mantener una búsqueda constante de nuevos clientes y mercados.\n<br>•	realizar investigaciones constantes acerca del mercado y sus precios.\n<br>•	responsabilizarse del recaudo de cartera de los clientes.\n<br>•	ofrecer un excelente servicio post venta.<br>•	diligenciar y reportar al coordinador de calidad las oportunidades de mejoramiento expresadas por el cliente.<br>•	cumplir con las metas establecidas para el presupuesto.\n<br>•	confirmar con el cliente el recibo de la mercancía, la calidad del material el servicio prestado y resolver cualquier inquietud que pueda tener. <br><br>responsabilidades:\n<br><br>•	consolidar la imagen corporativa de la organización.\n<br>•	mejorar continuamente nuestro desempeño hacia el cliente.\n\n<br><br>condiciones de trabajo:\nsalario: básico + comisiones por ventas del punto de venta.\nhorario: lunes a viernes de 7:00am a 5:30pm. sábados de 8:00am a 12:00m\n\nrelación con otras areas:\nel cargo se relaciona con las siguientes áreas para realizar su gestión: gerencia general, dirección comercial, departamento de cartera, departamento operativo.\n\nresultados esperados:\n<br><br>•	exceder las expectativas del cliente en cuanto a los productos y servicios brindados por el asesor comercial.\n<br>•	proactividad en el mejoramiento continúo de su desempeño.\n<br>•	compromiso con los objetivos y metas establecidas por la organización.\n \nsituaciones críticas del cargo:\n<br>•	gerenciamiento de clientes (actualización permanente de datos).\n<br>•	recaudos de cartera.\n \nindicadores de gestión:\n<br>•	(ingreso periodo actual – ingreso periodo anterior)/Ingresos periodo actual.<br>•	venta efectiva/visita realizada.<br>•	productos clientes/ total productos La Campana S.A.\n<br>•	clientes nuevos / total clientes por asesor.\n<br>•	clientes reactivados/total clientes inactivos.\n<br><br>formación académica:\nuniversitario (administración de empresas, mercadeo y publicidad, comunicación, ingenierías)\n\nexperiencia laboral:\nmínimo 5 años de experiencia en ventas de materiales para la construcción y/o industria metalmecánica.\n\nconocimientos técnicos/específicos:\nconversiones de unidades de pesos, espesores y longitudes.\n\nsalud y condiciones físicas:\nbuen estado físico.\n\ncompetencias claves del cargo:\n<br><br>•	trabajar bajo presión.\n<br>•	tenacidad.\n<br>•	constancia.\n<br>•	comunicación oral.\n<br>•	presentación personal.\n<br>•	orientación al logro.\n<br>•	proactivo.\n<br>•	emprendedor.\n<br>•	creatividad en la solución de problemas.\n<br>•	persuasión.\n<br>•	atención al Cliente.\n</div>","administración y manejo de punto de venta.","994");
INSERT INTO cms_vancante VALUES("15","aliado comercial","comercial","perfil asesor comercial\n\nobjetivo del cargo:\nlograr metas establecidas en el presupuesto de ventas de la empresa, manteniendo de forma activa las relaciones con el cliente, logrando una fidelización permanente del mismo.\n\nfunciones claves:\n<br><br>•	conocer acertadamente los productos y servicios de la organización.\n<br>•	asesorar de manera real y objetiva a los clientes y sus necesidades.\n<br>•	mantener un continuo contacto con los clientes.\n<br>•	administrar coherentemente su agenda de trabajo.\n<br>•	mantener una búsqueda constante de nuevos clientes y mercados.\n<br>•	realizar investigaciones constantes acerca del mercado y sus precios.\n<br>•	responsabilizarse del recaudo de cartera de los clientes.\n<br>•	ofrecer un excelente servicio post venta.\n<br>•	diligenciar y reportar al coordinador de calidad las oportunidades de mejoramiento expresadas por el cliente.\n<br>•	cumplir con las metas establecidas para el presupuesto.\n<br>•	confirmar con el cliente el recibo de la mercancía, la calidad del material el servicio prestado y resolver cualquier inquietud que pueda tener.\n\n<br><br>responsabilidades:\n<br><br>•	consolidar la imagen corporativa de la organización.\n<br>•	mejorar continuamente nuestro desempeño hacia el cliente.<br><br>condiciones de trabajo:\nsalario: básico(durante 3 meses) + comisiones.\nhorario: lunes a viernes de 7:00am a 5:30pm. sábados de 8:00am a 12:00m\n\nrelación con otras areas:\nel cargo se relaciona con las siguientes áreas para realizar su gestión: gerencia general, dirección comercial, departamento de cartera, departamento operativo.\n\nresultados esperados:\n<br><br>•	exceder las expectativas del cliente en cuanto a los productos y servicios brindados por el asesor comercial.\n•	proactividad en el mejoramiento continúo de su desempeño.\n<br>•	compromiso con los objetivos y metas establecidas por la organización.\n \nsituaciones críticas del cargo:\n•	gerenciamiento de clientes (actualización permanente de datos).\n<br>•	recaudos de cartera.\n \nindicadores de gestión:\n<br>•	(ingreso periodo actual – ingreso periodo anterior)/Ingresos periodo actual.\n<br>•	venta efectiva/visita realizada.\n<br>•	productos clientes/ total productos La Campana S.A.<br>•	clientes nuevos / total clientes por asesor.\n<br>•	clientes reactivados/total clientes inactivos.\n\n<br><br>formación académica:\nuniversitario (administración de empresas, mercadeo y publicidad, comunicación, ingenierías)\n\nexperiencia laboral:\nmínimo 3 años de experiencia en ventas de materiales para la construcción y/o industria metalmecánica.\n\nconocimientos técnicos/específicos:\nconversiones de unidades de pesos, espesores y longitudes.\n\nsalud y condiciones físicas:\nbuen estado físico.\n\ncompetencias claves del cargo:\n<br><br>•	trabajar bajo presión.\n<br>•	tenacidad.\n<br>•	constancia.\n<br>•	comunicación oral.\n<br>•	presentación personal.\n<br>•	orientación al logro.\n<br>•	proactivo.\n<br>•	emprendedor.\n<br>•	creatividad en la solución de problemas.\n<br>•	persuasión.\n<br>•	atención al Cliente.\n","lograr metas establecidas en el presupuesto de ventas","995");
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
INSERT INTO cms_video VALUES("438","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("444","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("447","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("450","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("453","Telecampana","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at elit diam. Vestibulum aliquet metus eget tortor blandit, sit amet egestas mauris elementum. Suspendisse ut nibh risus. Aenean fringilla enim vitae consectetur convallis. Fusce ut consectetur lacus, et cursus mauris. In pretium in est vitae adipiscing. Phasellus dictum metus ut egestas suscipit. Vestibulum ornare velit eu vulputate ullamcorper. Nullam et volutpat nisi. Nulla commodo urna nec dolor tempus eleifend. Nulla quis justo t","1");
INSERT INTO cms_video VALUES("459","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("683","Prueba de video enterate","En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lantejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda. El resto della concluían sayo de velarte, calzas de velludo para las fiestas, con sus pantuflos de lo mesmo, y los días","1");
INSERT INTO cms_video VALUES("718","//www.youtube.com/embed/Jj792bRQfVw","//www.youtube.com/embed/Jj792bRQfVw","2");
INSERT INTO cms_video VALUES("724","//www.youtube.com/embed/Jj792bRQfVw","//www.youtube.com/embed/Jj792bRQfVw","2");
INSERT INTO cms_video VALUES("730","hola mundo","hola mundo","1");
DROP TABLE IF EXISTS messaging;

CREATE TABLE `messaging` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS messaging_admin;

CREATE TABLE `messaging_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `group` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`pass`),
  KEY `group` (`group`,`time`),
  CONSTRAINT `messaging_admin_ibfk_1` FOREIGN KEY (`group`) REFERENCES `messaging_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO messaging_admin VALUES("1","admin","9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684","1","2011-05-18 19:20:14");
DROP TABLE IF EXISTS messaging_ban;

CREATE TABLE `messaging_ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(10) unsigned NOT NULL,
  `host` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS messaging_groups;

CREATE TABLE `messaging_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `groups` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `history` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `file` (`groups`,`banned`,`history`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO messaging_groups VALUES("1","Administrators","1","1","1");
DROP TABLE IF EXISTS messaging_history;

CREATE TABLE `messaging_history` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS messaging_smiley;

CREATE TABLE `messaging_smiley` (
  `sign` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`sign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO messaging_smiley VALUES(":(","sad.gif");
INSERT INTO messaging_smiley VALUES(":)","smile.gif");
INSERT INTO messaging_smiley VALUES(":*","kiss.gif");
INSERT INTO messaging_smiley VALUES(":D","laugh.gif");
INSERT INTO messaging_smiley VALUES(":P","tongue.gif");
INSERT INTO messaging_smiley VALUES(":roll","rolleyes.gif");
INSERT INTO messaging_smiley VALUES(":shock","shocked.gif");
INSERT INTO messaging_smiley VALUES(":tired","tired.gif");
INSERT INTO messaging_smiley VALUES(":]","grin.gif");
INSERT INTO messaging_smiley VALUES(":|","blank.gif");
INSERT INTO messaging_smiley VALUES(";)","wink.gif");
DROP TABLE IF EXISTS messaging_users;

CREATE TABLE `messaging_users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
