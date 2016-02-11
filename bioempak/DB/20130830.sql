/*
SQLyog Community v11.22 (64 bit)
MySQL - 5.5.27 : Database - img_bioempak
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `cms_configuration` */

DROP TABLE IF EXISTS `cms_configuration`;

CREATE TABLE `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cms_configuration` */

insert  into `cms_configuration`(`config_id`,`config_date`,`config_path`,`config_web`,`config_mail_remitent`,`config_company`) values (1,'2012-07-25 12:10:42','http://imaginamos.local/bioempak/cms/','http://imaginamos.local/bioempak/','cms@imaginamos.com','imaginamos.com');

/*Table structure for table `cms_icons` */

DROP TABLE IF EXISTS `cms_icons`;

CREATE TABLE `cms_icons` (
  `icons_id` int(11) NOT NULL AUTO_INCREMENT,
  `icons_name` varchar(100) NOT NULL,
  PRIMARY KEY (`icons_id`)
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

/*Data for the table `cms_icons` */

insert  into `cms_icons`(`icons_id`,`icons_name`) values (1,'abacus'),(2,'access_point'),(3,'add'),(4,'administrator'),(5,'alarm'),(6,'arrow_bidirectional'),(7,'arrow_down'),(8,'arrow_left'),(9,'arrow_right'),(10,'arrow_up'),(11,'attachment'),(12,'audio_knob'),(13,'barcode'),(14,'battery_empty'),(15,'battery_full'),(16,'battery_half'),(17,'bell'),(18,'bill'),(19,'binoculars'),(20,'bold'),(21,'book'),(22,'bookmark'),(23,'briefcase'),(24,'brightness'),(25,'broken_link'),(26,'brush'),(27,'burn_blu-ray'),(28,'burn_blu-ray2'),(29,'burn_dvd'),(30,'burn_dvd2'),(31,'cabinet'),(32,'calculator'),(33,'calendar'),(34,'camera'),(35,'cancel'),(36,'card_clubs'),(37,'card_diamonds'),(38,'card_hearts'),(39,'card_spades'),(40,'certificate'),(41,'certificate-(2)'),(42,'chat-exclamation'),(43,'checkmark'),(44,'checkmark2'),(45,'clip'),(46,'clipboard'),(47,'clock'),(48,'close'),(49,'cloud'),(50,'cloud2'),(51,'coin'),(52,'compress'),(53,'connect'),(54,'contrast'),(55,'copy'),(56,'cross'),(57,'cutter'),(58,'delete'),(59,'dial'),(60,'diary'),(61,'dimensions'),(62,'directional_down'),(63,'directional_left'),(64,'directional_right'),(65,'directional_up'),(66,'disconnect'),(67,'diskette'),(68,'document'),(69,'door'),(70,'download2'),(71,'dropper'),(72,'earphones'),(73,'effects'),(74,'eject'),(75,'emoticon_angry'),(76,'emoticon_confused'),(77,'emoticon_grin'),(78,'emoticon_in_love'),(79,'emoticon_sad'),(80,'emoticon_sleeping'),(81,'emoticon_smile'),(82,'encrypt'),(83,'eraser'),(84,'eye_closed'),(85,'eye'),(86,'fast_forward'),(87,'file'),(88,'fill'),(89,'fingerprint'),(90,'firewall'),(91,'first'),(92,'folder'),(93,'font_size'),(94,'font'),(95,'game_control'),(96,'gear'),(97,'group'),(98,'hammer'),(99,'hand_point'),(100,'hand_thumbsdown'),(101,'hand_thumbsup'),(102,'hard_disk'),(103,'headset'),(104,'heart'),(105,'help'),(106,'help2'),(107,'history'),(108,'home'),(109,'hourglass'),(110,'hourglass2'),(111,'id'),(112,'info'),(113,'info2'),(114,'italic'),(115,'item'),(116,'key'),(117,'last'),(118,'lightbulb'),(119,'link'),(120,'list'),(121,'location'),(122,'lock_open'),(123,'lock'),(124,'login'),(125,'mail_open'),(126,'mail'),(127,'messenger'),(128,'microhpone'),(129,'microphone'),(130,'money_bag'),(131,'monitor'),(132,'moon'),(133,'music_folder'),(134,'music_library'),(135,'music'),(136,'next'),(137,'notepad'),(138,'paragraph_align_left'),(139,'paragraph_align_right'),(140,'paragraph_align_justify'),(141,'password'),(142,'paste'),(143,'pause'),(144,'pen'),(145,'pencil'),(146,'phone'),(147,'photo_album'),(148,'pictures_folder'),(149,'play'),(150,'point'),(151,'power'),(152,'previous'),(153,'print'),(154,'pyramid'),(155,'random'),(156,'record'),(157,'redo'),(158,'reload'),(159,'repeat'),(160,'resize2'),(161,'rewind'),(162,'rotate'),(163,'round'),(164,'ruler_square'),(165,'satellite'),(166,'scissors'),(167,'screwdriver'),(168,'security'),(169,'shopping_basket'),(170,'software24'),(171,'spam'),(172,'speaker'),(173,'speaker2'),(174,'sphere'),(175,'spreadsheet'),(176,'square'),(177,'star'),(178,'stats_bars'),(179,'stats_lines'),(180,'stats_pie'),(181,'stop'),(182,'strike_through'),(183,'sun'),(184,'target'),(185,'thunder'),(186,'trash_can'),(187,'underlined'),(188,'undo'),(189,'upload2'),(190,'usb'),(191,'user_woman'),(192,'user'),(193,'volume_control'),(194,'webcam'),(195,'window'),(196,'wizard'),(197,'world'),(198,'zoom_in'),(199,'zoom_out'),(200,'zoom');

/*Table structure for table `cms_menu` */

DROP TABLE IF EXISTS `cms_menu`;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `cms_menu` */

insert  into `cms_menu`(`menu_id`,`menu_title`,`menu_url`,`menu_icon`,`pos`) values (22,'Tecnologia','tech','usb',3),(21,'Noticias','news','notepad',2),(24,'Inicio','','spreadsheet',1),(25,'Cambio de clave','cms','reload',6),(23,'Productos','productos','barcode',4),(26,'usuarios','usuarios','administrator',5);

/*Table structure for table `cms_submenu` */

DROP TABLE IF EXISTS `cms_submenu`;

CREATE TABLE `cms_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_title` varchar(200) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_idmenu` int(1) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`submenu_id`),
  KEY `cms_submenu` (`submenu_idmenu`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `cms_submenu` */

insert  into `cms_submenu`(`submenu_id`,`submenu_title`,`submenu_url`,`submenu_idmenu`,`pos`) values (11,'Clientes','customers',24,0),(12,'Mapa','map',24,0),(13,'Miembros','members',24,0),(14,'Introducción','news/intro',21,0);

/*Table structure for table `cms_user` */

DROP TABLE IF EXISTS `cms_user`;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `cms_user` */

insert  into `cms_user`(`id_user`,`username_user`,`password_user`,`email_user`,`rol_user`) values (1,'administrator','475266560c6d9f03f9ec80340218fa4c','cms@imaginamos.com','admin'),(5,'cliente','4983a0ab83ed86e0e7213c8783940193','cliente@imaginamos.com',NULL);

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `comentarios` */

insert  into `comentarios`(`id`,`comentario`,`id_usuario`,`fecha`,`id_noticia`) values (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',1,'2013-08-28 04:07:15',1),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',2,'2013-08-19 07:12:46',1),(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',1,'2013-08-11 05:22:07',1),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',5,'2013-04-02 08:15:12',1),(5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',2,'2013-06-01 03:29:02',1),(6,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',3,'2013-08-12 00:00:00',1),(7,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',3,'2013-08-27 05:21:07',1),(8,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',2,'2013-08-27 11:16:34',1),(9,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',4,'2013-08-12 18:50:38',1),(10,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum.',2,'2013-08-26 02:14:20',1);

/*Table structure for table `cotizaciones` */

DROP TABLE IF EXISTS `cotizaciones`;

CREATE TABLE `cotizaciones` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `empresa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `id_impresion` int(11) NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `id_sector` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cotizaciones` */

insert  into `cotizaciones`(`nombre`,`email`,`tipo`,`empresa`,`id_producto`,`id_impresion`,`telefono`,`unidades`,`cantidad`,`comentario`,`id_sector`,`id`) values ('Felipe','0',0,'0',0,0,'6565',0,1,'comentario',0,2);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bigimage` varchar(100) DEFAULT NULL,
  `smallimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `customers` */

insert  into `customers`(`id`,`bigimage`,`smallimage`) values (1,'1.png','11.png'),(2,'2.png','21.png'),(3,'3.png','31.png'),(5,'5.png','51.png'),(6,'6.png','61.png'),(7,'7.png','71.png'),(8,'8.png','81.png'),(9,'9.png','91.png'),(10,'10.png','101.png'),(12,'12.png','121.png'),(13,'13.png','131.png'),(14,'14.png','141.png'),(15,'15.png','151.png');

/*Table structure for table `home` */

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `phone3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `home` */

insert  into `home`(`id`,`image`,`address`,`phone`,`email`,`phone2`,`phone3`) values (1,'1.png','Address_','Phone1_','Email_','Phone2_','Phone3_');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `images` */

insert  into `images`(`id`,`url`,`id_producto`) values (1,'1.jpg',11),(3,'3.jpg',11);

/*Table structure for table `impresiones` */

DROP TABLE IF EXISTS `impresiones`;

CREATE TABLE `impresiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `impresiones` */

insert  into `impresiones`(`id`,`nombre`) values (1,'Sin impresion'),(2,'Impresión 1 tinta'),(3,'Impresión 2 tinta'),(4,'Impresión 3 tinta'),(5,'Impresión 4 tinta'),(6,'Impresión 5 tinta'),(7,'Impresión 6 tinta');

/*Table structure for table `map` */

DROP TABLE IF EXISTS `map`;

CREATE TABLE `map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `map` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `map` */

insert  into `map`(`id`,`map`) values (1,'http://maps.google.es/maps?f=q&source=s_q&hl=es&q=Carrera+19B+%23+168-77,+Usaqu%C3%A9n,+Bogot%C3%A1,+Cundinamarca,+Colombia&aq=&sll=4.631179,-73.828125&sspn=11.391516,19.753418&ie=UTF8&geocode=FY95SAAdhzSW-w&split=0&hq=&hnear=Carrera+19B+%23+168-77,+Bogot%C3%A1,+Cundinamarca,+Colombia&t=m&z=14&iwloc=A&output=embed');

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `members` */

insert  into `members`(`id`,`name`,`email`) values (1,'Andres','autorun@live.co.uk'),(2,'Carlos','thisisavirus@live.co.uk'),(3,'Diana','d@d.com'),(4,'jjjj','kjkjkj'),(5,'Carlos Gómez','carlos.gomez@imaginamos.com'),(6,'Carlos Gómez','carlos.gomez@imaginamos.com'),(7,'hhhhhhhhhhhhhhhhh','hhhhhhhhhhhhhhh'),(8,'NICOLAS LOPEZ','el_nikko@hotmail.com'),(9,'liubfwiudbf wliuedfhwiueh','diego_m_w@hotmail.com'),(10,'NICOLAS LOPEZ','el_nikko@hotmail.com'),(11,'nicolas lopez','produccion@bioempak.com'),(12,'Carlos Andrés Gómez Zapata','carlos.gomez@imaginamos.com'),(13,'nicolas lopez','produccion@bioempak.com'),(14,'0','0'),(15,'john pinilla','johensur.10@hotmail.com'),(16,'john alexander pinillla ortiz','johensur.10@hotmail.com'),(17,'fabio aguilar','rechmial@hotmail.es'),(18,'0','0'),(19,'0','0'),(20,'0','0'),(21,'0','0'),(22,'0','0'),(23,'Carlos Andrés Gómez','carlos.gomez@imaginamos.com'),(24,'0','0'),(25,'monica liliana ramirez','kiutlili@gmail.com');

/*Table structure for table `newsintro` */

DROP TABLE IF EXISTS `newsintro`;

CREATE TABLE `newsintro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `newsintro` */

insert  into `newsintro`(`id`,`texto`) values (1,'texto de introducción');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion_buena` int(11) DEFAULT NULL,
  `calificacion_neutro` int(11) DEFAULT NULL,
  `calificacion_mala` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`texto`,`imagen`,`calificacion_buena`,`calificacion_neutro`,`calificacion_mala`,`fecha`,`id_usuario`) values (1,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-20',1),(2,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-21',1),(3,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-20',1),(4,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-21',1),(5,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-20',1),(6,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat erat dictum et viverra dolor fermentum.','',NULL,NULL,NULL,'2013-08-21',1);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del campo',
  `titulo` char(100) CHARACTER SET utf8 NOT NULL COMMENT 'titulo del producto',
  `subtitulo` char(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'subtitulo del producto',
  `material` char(100) CHARACTER SET utf8 NOT NULL COMMENT 'material del producto',
  `espesor` char(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'espesor del producto',
  `impresion` char(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id de la tabla impresiones',
  `uso` char(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'uso a dar al producto',
  `clasificacion` enum('alimentos','farmaceuticos') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'farmaceuticos' COMMENT 'tipo de producto',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`titulo`,`subtitulo`,`material`,`espesor`,`impresion`,`uso`,`clasificacion`) values (1,'Foil de aluminio Blister','','Foil aluminio con laca termosellable a PVC- PVDC, de alta barrera','20 y 25 micras','El primer de impresión permite imprimir con cualquier tipo de tinta: solvente, U.V. Digital, sistema','Envase para tabletas y cápsulas','farmaceuticos'),(2,'laminado alu alu','','Laminado para dar la máxima protección contra la humedad, la luz y el oxigeno excelentes propiedades','OPA 25 micras, aluminio 45 micras, PVC 60 micras','','Envase para tabletas y cápsulas','farmaceuticos'),(3,'Laminado Alu poly','','Laminado de máxima protección contra la humedad, la luz y el oxigeno excelentes propiedades de barre','Alu 30 micras, Poly 30 gr\r\nAlu 35 micras, Poly 35 gr','El primer permite imprimir con cualquier tipo de tinta: solvente, U.V. \r\nDigital, Sistemas HAPPA','Laminado para envase de supositorios o empaque de tabletas.','farmaceuticos'),(4,'Laminado multicapa','efervecentes','Laminado de papel, con alta barrera a la humedad y excelente desempeño en máquinas empacadoras','','Flexográfica hasta 6 tintas','Envase de tabletas efervescentes','farmaceuticos'),(5,'Laminado multicapa','multiusos','Laminado de papel con excelente barrera y buen desempeño en máquinas envasadoras','','Flexografica hasta 6 tintas','Envase de polvos, gránulos, cremas, toallas impregnadas y shampoo en sachets.','farmaceuticos'),(6,'Laminado tricapa',NULL,'Laminado de poliéster con excelente barrera y buen desempeño en máquinas envasadoras','','Flexografica hasta 6 tintas','Envase de polvos, gránulos, cremas, toallas impregnadas y shampoo en sachets.','farmaceuticos'),(7,'Laminado flexpap',NULL,'','','','','alimentos'),(8,'Membranas 30 micras- yogurt',NULL,'','','','','alimentos'),(9,'Membranas 35 micras- yogurt',NULL,'','','','','alimentos'),(10,'Membranas 38 micras-margarina',NULL,'','','','','alimentos'),(11,'Membranas 50 micras-margarinas',NULL,'','','','','alimentos');

/*Table structure for table `sectores` */

DROP TABLE IF EXISTS `sectores`;

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `sectores` */

insert  into `sectores`(`id`,`nombre`) values (1,'Sector 1'),(2,'Sector 2'),(3,'Sector 3'),(4,'Sector 4'),(5,'Sector 5');

/*Table structure for table `tech` */

DROP TABLE IF EXISTS `tech`;

CREATE TABLE `tech` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` char(50) NOT NULL,
  `text` text,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tech` */

insert  into `tech`(`id`,`titulo`,`text`,`image`) values (1,'Impresión flexográfica','<div style=\"font-size: 10pt; text-align: justify; \"><span style=\"font-size: small;\">Nuestro proceso de impresión se realiza por el sistema de flexografía, contamos con Impresoras de hasta 6 colores con un ancho de 33 cms y utilizamos tintas adecuadas para los diferentes sustratos a imprimir. Nuestros equipos cuentan con cámaras de video que nos permiten hacer una inspección constante durante el proceso de impresión. Usamos fotopolímeros para el proceso de impresión, las planchas que utilizamos son elaboradas digitalmente, lo que nos permite una mejor calidad en la definición del diseño a imprimir.</span></div>','1.png'),(2,'Corte y conversión','<div><span style=\"font-size: 10pt; text-align: justify;\">El proceso de corte lo realizamos en máquinas cortadoras de rollo a rollo, utilizando bobinas madre de hasta 1300 mm de ancho, para luego convertirlas en el ancho que es requerido por el cliente, Utilizamos diferentes tipos de corte dependiendo del sustrato que se va a cortar.</span></div>','2.png'),(3,'Troquelado','<div><span style=\"font-size: 10pt; text-align: justify;\">El proceso de troquelado lo realizamos con un sistema de embutido, utilizando herramientas de muy alta calidad y precisión.\r\n\r\nDependiendo del diseño que requiera cada cliente se puede elaborar la herramienta. Contamos con troqueles en stock para las formas más comunes. El grabado de la tapa se fabrica de acuerdo al diseño que requiera el cliente y puede hacerse en alto relieve.</span></div>','3.png'),(6,'prueba nuevo','texto prueba nuevo','');

/*Table structure for table `us` */

DROP TABLE IF EXISTS `us`;

CREATE TABLE `us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `us` */

insert  into `us`(`id`,`title`,`subtitle`,`text`,`image`) values (2,'Quienes Somos','Quienes Somos','Quienes somos texto<div><br></div><div>Quienes somos con enter</div><div><br></div>','2.png'),(3,'Valores','Valores','Valores','3.jpg'),(4,'Something','A?','adasdasd<div>asd</div><div>a</div><div>sda</div><div>sd</div><div>asd</div><div>asd</div><div>a</div><div>sd</div><div>ads</div>','4.jpg'),(5,'Paramore','Brand New Eyes','<span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n<div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \"><br></span></div><div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div><div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \"><br></span></div><div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div><div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \"><br></span></div><div><span style=\"font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; \">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span>\r\n</div>','5.jpg');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` enum('empresa','independiente') NOT NULL DEFAULT 'empresa',
  `empresa` varchar(100) DEFAULT NULL,
  `id_sector` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`email`,`password`,`nombre`,`tipo`,`empresa`,`id_sector`,`cargo`,`created_at`) values (1,'lmartinez@email.com','12345','Laura Martinez','empresa','Empresa4',1,'Secretaria','2013-08-27 08:11:03'),(2,'mperez@email.com','12345','Maria Perez','empresa','Empresa1',1,'Gerente de ventas','2013-08-27 08:11:03'),(3,'jalvarez@email.com','12345','Juan Alvarez','empresa','Empresa2',1,'Jefe de Recursos Humanos','2013-08-27 08:11:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
