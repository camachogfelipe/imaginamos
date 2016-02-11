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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`img_bioempak` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del campo',
  `titulo` char(100) CHARACTER SET utf8 NOT NULL COMMENT 'titulo del producto',
  `material` char(100) CHARACTER SET utf8 NOT NULL COMMENT 'material del producto',
  `espesor` char(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'espesor del producto',
  `id_impresiones` int(11) NOT NULL COMMENT 'id de la tabla impresiones',
  `uso` char(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'uso a dar al producto',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`titulo`,`material`,`espesor`,`id_impresiones`,`uso`) values (1,'Foil de aluminio blister 25 micras','','',0,''),(2,'laminado alu alu','','',0,''),(3,'Laminado Alu poly','','',0,''),(4,'Laminado multicapa- efervecentes','','',0,''),(5,'Laminado multicapa- multiusos','','',0,''),(6,'Laminado tricapa','','',0,''),(7,'Laminado flexpap','','',0,''),(8,'Membranas 30 micras- yogurt','','',0,''),(9,'Membranas 35 micras- yogurt','','',0,''),(10,'Membranas 38 micras-margarina','','',0,''),(11,'Membranas 50 micras-margarinas','','',0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
