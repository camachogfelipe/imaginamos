-- MySQL dump 10.13  Distrib 5.5.15, for Win32 (x86)
--
-- Host: localhost    Database: helpdesk
-- ------------------------------------------------------
-- Server version	5.5.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `helpdesk`
--

/*CREATE DATABASE /*!32312 IF NOT EXISTS*/ `helpdesk` /*!40100 DEFAULT CHARACTER SET utf8 */;*/

USE `img_chat`;

--
-- Table structure for table `avatars`
--

DROP TABLE IF EXISTS `avatars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avatars` (
  `idavatar` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE latin1_spanish_ci DEFAULT '',
  `path` varchar(150) COLLATE latin1_spanish_ci DEFAULT '',
  `pathm` varchar(150) COLLATE latin1_spanish_ci DEFAULT '',
  `enabled` tinyint(4) DEFAULT '1',
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`idavatar`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avatars`
--

LOCK TABLES `avatars` WRITE;
/*!40000 ALTER TABLE `avatars` DISABLE KEYS */;
INSERT INTO `avatars` VALUES (1,'ADMINISTRADOR','images/32x32/avatars/administrador.png','images/16x16/avatars/administrador.png',1,0),(2,'MODERADOR','images/32x32/avatars/moderador.png','images/16x16/avatars/moderador.png',1,0),(3,'ANONIMO','images/32x32/avatars/anonimo.png','images/16x16/avatars/anonimo.png',1,1),(4,'MASCULINO','images/32x32/avatars/masculino.png','images/16x16/avatars/masculino.png',1,1),(5,'FEMENINO','images/32x32/avatars/femenino.png','images/16x16/avatars/femenino.png',1,1),(6,'INVITADO','images/32x32/avatars/invitado.png','images/16x16/avatars/invitado.png',1,1),(7,'FEMENINO BLONDY','images/32x32/avatars/blondy.png','images/16x16/avatars/blondy.png',1,1),(8,'FENENIMO MAID','images/32x32/avatars/maid.png','images/16x16/avatars/maid.png',1,1),(9,'MASCULINO VERDE','images/32x32/avatars/green.png','images/16x16/avatars/green.png',1,1),(10,'MASCULINO NARANJA','images/32x32/avatars/orange.png','images/16x16/avatars/orange.png',1,1),(11,'POWER RANGER RED','images/32x32/avatars/ranger_red.png','images/16x16/avatars/ranger_red.png',1,1);
/*!40000 ALTER TABLE `avatars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emoticons`
--

DROP TABLE IF EXISTS `emoticons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emoticons` (
  `idemoticon` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `string` varchar(45) NOT NULL DEFAULT '',
  `path` varchar(150) NOT NULL DEFAULT '',
  `system` int(11) DEFAULT '0',
  `extra` varchar(45) DEFAULT '',
  `separator` tinyint(4) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`idemoticon`),
  KEY `system` (`system`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emoticons`
--

LOCK TABLES `emoticons` WRITE;
/*!40000 ALTER TABLE `emoticons` DISABLE KEYS */;
INSERT INTO `emoticons` VALUES (1,'Evilgrin','}:)','images/16x16/emotion/evilgrin.png',0,'Faces',0,1),(2,'Grin',':D','images/16x16/emotion/grin.png',0,'Faces',0,2),(3,'Happy',':))','images/16x16/emotion/happy.png',0,'Faces',0,3),(4,'Smile',':)','images/16x16/emotion/smile.png',0,'Faces',0,4),(5,'Suprised',':0','images/16x16/emotion/suprised.png',0,'Faces',0,5),(6,'Tongue',':p','images/16x16/emotion/tongue.png',0,'Faces',0,6),(7,'Unhappy',':(','images/16x16/emotion/unhappy.png',0,'Faces',0,7),(8,'Waii',':|','images/16x16/emotion/waii.png',0,'Faces',0,8),(9,'Wink',';)','images/16x16/emotion/wink.png',0,'Faces',1,9),(10,'Bug','{bug}','images/16x16/emotion/bug.png',0,'System',1,1),(11,'Hand','{hand}','images/16x16/emotion/hand.png',0,'Hand',0,1),(12,'Hand.0','{hand.0}','images/16x16/emotion/hand_point.png',0,'Hand',0,2),(13,'Hand.90','{hand.90}','images/16x16/emotion/hand_point_090.png',0,'Hand',0,3),(14,'Hand.180','{hand.180}','images/16x16/emotion/hand_point_180.png',0,'Hand',0,4),(15,'Hand.270','{hand.270}','images/16x16/emotion/hand_point_270.png',0,'Hand',1,5),(16,'Coffe','{coffe}','images/16x16/emotion/coffe.png',0,'Heat',0,1),(17,'LogIn','{login}','images/16x16/system/login.png',1,'System',0,0),(18,'LogOut','{logout}','images/16x16/system/logout.png',1,'System',0,0),(19,'GO','{GO}','images/16x16/system/go.png',1,'System',0,0),(20,'Aplple','{apple}','images/16x16/emotion/apple.png',0,'Heat',1,2),(21,'Ball 8','{ball8}','images/16x16/emotion/ball8.png',0,'Game',0,1),(22,'Cigarette','{cigarette}','images/16x16/emotion/cigarette.png',0,'Game',1,2),(23,'Dog','{dog}','images/16x16/emotion/dog.png',0,'More',0,1),(24,'Fatcow','{fatcow}','images/16x16/emotion/fatcow.png',0,'More',0,2),(25,'Rain','{rain}','images/16x16/emotion/rain.png',0,'More',1,3),(26,'Subwoofer','{subwoofer}','images/16x16/emotion/subwoofer.png',0,'Live',0,1),(27,'Catwomen','{catwomen}','images/16x16/emotion/catwomen.png',0,'Live',0,2),(28,'Beer','{beer}','images/16x16/emotion/beer.png',0,'Live',0,3),(29,'Money','{money}','images/16x16/emotion/money.png',0,'Live',1,4),(30,'JA','jA','images/16x16/emotion/happy.png',1,'Faces',0,10),(31,'3D_Glasses','{3d_glasses}','images/16x16/emotiom/3d_glasses.png',0,'Varios',0,1),(32,'Android','{android}','images/16x16/emotiom/android.png',0,'Varios',0,2),(33,'Angel','{angel}','images/16x16/emotiom/angel.png',0,'Varios',0,3),(34,'Aol_Mail','{aol_mail}','images/16x16/emotiom/aol_mail.png',0,'Varios',0,4),(35,'Baloon','{baloon}','images/16x16/emotiom/baloon.png',0,'Varios',0,5),(36,'Bandaid','{bandaid}','images/16x16/emotiom/bandaid.png',0,'Varios',0,6),(37,'Drum','{drum}','images/16x16/emotiom/drum.png',0,'Varios',0,7),(38,'Eye','{eye}','images/16x16/emotiom/eye.png',0,'Varios',0,8),(39,'Fire_Extinguisher','{fire_extinguisher}','images/16x16/emotiom/fire_extinguisher.png',0,'Varios',0,9),(40,'Fire','{fire}','images/16x16/emotiom/fire.png',0,'Varios',0,10),(41,'Flamingo','{flamingo}','images/16x16/emotiom/flamingo.png',0,'Varios',0,11),(42,'Flower','{flower}','images/16x16/emotiom/flower.png',0,'Varios',0,12),(43,'Holly','{holly}','images/16x16/emotiom/holly.png',0,'Varios',0,13),(44,'Hot','{hot}','images/16x16/emotiom/hot.png',0,'Varios',0,14),(45,'Kids','{kids}','images/16x16/emotiom/kids.png',0,'Varios',0,15),(46,'Ladybird','{ladybird}','images/16x16/emotiom/ladybird.png',0,'Varios',0,16),(47,'Lighthouse','{lighthouse}','images/16x16/emotiom/lighthouse.png',0,'Varios',0,17),(48,'Lollipop','{lollipop}','images/16x16/emotiom/lollipop.png',0,'Varios',0,18),(49,'Moneybox','{moneybox}','images/16x16/emotiom/moneybox.png',0,'Varios',0,19),(50,'Peacock','{peacock}','images/16x16/emotiom/peacock.png',0,'Varios',0,20),(51,'Plant','{plant}','images/16x16/emotiom/plant.png',0,'Varios',0,21),(52,'Radioactivity','{radioactivity}','images/16x16/emotiom/radioactivity.png',0,'Varios',0,22),(53,'Scull','{scull}','images/16x16/emotiom/scull.png',0,'Varios',0,23),(54,'Siren','{siren}','images/16x16/emotiom/siren.png',0,'Varios',0,24),(55,'Skate','{skate}','images/16x16/emotiom/skate.png',0,'Varios',0,25),(56,'Teddy_Bear','{teddy_bear}','images/16x16/emotiom/teddy_bear.png',0,'Varios',0,26),(57,'Tree','{tree}','images/16x16/emotiom/tree.png',0,'Varios',0,27),(58,'Tux','{tux}','images/16x16/emotiom/tux.png',0,'Varios',0,28),(59,'Twitter_1','{twitter_1}','images/16x16/emotiom/twitter_1.png',0,'Varios',0,29),(60,'Twitter_2','{twitter_2}','images/16x16/emotiom/twitter_2.png',0,'Varios',0,30),(61,'Umbrella','{umbrella}','images/16x16/emotiom/umbrella.png',0,'Varios',0,31),(62,'Whistle','{whistle}','images/16x16/emotiom/whistle.png',0,'Varios',0,32),(63,'Wizard','{wizard}','images/16x16/emotiom/wizard.png',0,'Varios',0,33),(64,'Yellow_Submarine','{yellow_submarine}','images/16x16/emotiom/yellow_submarine.png',0,'Varios',1,34),(65,'A','{a}','images/16x16/emotiok/a.png',0,'Keys',0,1),(66,'B','{b}','images/16x16/emotiok/b.png',0,'Keys',0,2),(67,'C','{c}','images/16x16/emotiok/c.png',0,'Keys',0,3),(68,'D','{d}','images/16x16/emotiok/d.png',0,'Keys',0,4),(69,'E','{e}','images/16x16/emotiok/e.png',0,'Keys',0,5),(70,'Escape','{escape}','images/16x16/emotiok/escape.png',0,'Keys',0,6),(71,'F','{f}','images/16x16/emotiok/f.png',0,'Keys',0,7),(72,'G','{g}','images/16x16/emotiok/g.png',0,'Keys',0,8),(73,'I','{i}','images/16x16/emotiok/i.png',0,'Keys',0,9),(74,'J','{j}','images/16x16/emotiok/j.png',0,'Keys',0,10),(75,'K','{k}','images/16x16/emotiok/k.png',0,'Keys',0,11),(76,'L','{l}','images/16x16/emotiok/l.png',0,'Keys',0,12),(77,'M','{m}','images/16x16/emotiok/m.png',0,'Keys',0,13),(78,'N','{n}','images/16x16/emotiok/n.png',0,'Keys',0,14),(79,'O','{o}','images/16x16/emotiok/o.png',0,'Keys',0,15),(80,'P','{p}','images/16x16/emotiok/p.png',0,'Keys',0,16),(81,'Q','{q}','images/16x16/emotiok/q.png',0,'Keys',0,17),(82,'S','{s}','images/16x16/emotiok/s.png',0,'Keys',0,18),(83,'T','{t}','images/16x16/emotiok/t.png',0,'Keys',0,19),(84,'U','{u}','images/16x16/emotiok/u.png',0,'Keys',0,20),(85,'V','{v}','images/16x16/emotiok/v.png',0,'Keys',0,21),(86,'W','{w}','images/16x16/emotiok/w.png',0,'Keys',0,22),(87,'X','{x}','images/16x16/emotiok/x.png',0,'Keys',0,23),(88,'Y','{y}','images/16x16/emotiok/y.png',0,'Keys',0,24),(89,'Z','{z}','images/16x16/emotiok/z.png',0,'Keys',1,25),(91,'Amazing','{bigamazing}','images/128x128/emotion/amazing.png',0,'BigFaces',0,25),(92,'Anger','{biganger}','images/128x128/emotion/anger.png',0,'BigFaces',0,26),(93,'Bad_Egg','{bigbad_egg}','images/128x128/emotion/bad_egg.png',0,'BigFaces',0,27),(94,'Bad_Smile','{bigbad_smile}','images/128x128/emotion/bad_smile.png',0,'BigFaces',0,28),(95,'Beaten','{bigbeaten}','images/128x128/emotion/beaten.png',0,'BigFaces',0,29),(96,'Big_Smile','{bigbig_smile}','images/128x128/emotion/big_smile.png',0,'BigFaces',0,30),(97,'Cry','{bigcry}','images/128x128/emotion/cry.png',0,'BigFaces',0,31),(98,'Electric_Shock','{bigelectric_shock}','images/128x128/emotion/electric_shock.png',0,'BigFaces',0,32),(99,'Exciting','{bigexciting}','images/128x128/emotion/exciting.png',0,'BigFaces',0,33),(100,'Eyes_Droped','{bigeyes_droped}','images/128x128/emotion/eyes_droped.png',0,'BigFaces',0,34),(101,'Girl','{biggirl}','images/128x128/emotion/girl.png',0,'BigFaces',0,35),(102,'Greedy','{biggreedy}','images/128x128/emotion/greedy.png',0,'BigFaces',0,36),(103,'Grimace','{biggrimace}','images/128x128/emotion/grimace.png',0,'BigFaces',0,37),(104,'Grin','{biggrin}','images/128x128/emotion/grin.png',0,'BigFaces',0,38),(105,'Happy','{bighappy}','images/128x128/emotion/happy.png',0,'BigFaces',0,39),(106,'Horror','{bighorror}','images/128x128/emotion/horror.png',0,'BigFaces',0,40),(107,'Money','{bigmoney}','images/128x128/emotion/money.png',0,'BigFaces',0,41),(108,'Nothing_To_Say','{bignothing_to_say}','images/128x128/emotion/nothing_to_say.png',0,'BigFaces',0,42),(109,'Nothing','{bignothing}','images/128x128/emotion/nothing.png',0,'BigFaces',0,43),(110,'Scorn','{bigscorn}','images/128x128/emotion/scorn.png',0,'BigFaces',0,44),(111,'Secret_Smile','{bigsecret_smile}','images/128x128/emotion/secret_smile.png',0,'BigFaces',0,45),(112,'Shame','{bigshame}','images/128x128/emotion/shame.png',0,'BigFaces',0,46),(113,'Shocked','{bigshocked}','images/128x128/emotion/shocked.png',0,'BigFaces',0,47),(114,'Super_Man','{bigsuper_man}','images/128x128/emotion/super_man.png',0,'BigFaces',0,48),(115,'The_Iron_Man','{bigthe_iron_man}','images/128x128/emotion/the_iron_man.png',0,'BigFaces',0,49),(116,'Unhappy','{bigunhappy}','images/128x128/emotion/unhappy.png',0,'BigFaces',0,50),(117,'Victory','{bigvictory}','images/128x128/emotion/victory.png',0,'BigFaces',0,51),(118,'What','{bigwhat}','images/128x128/emotion/what.png',0,'BigFaces',0,52);
/*!40000 ALTER TABLE `emoticons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `idroom` int(11) DEFAULT NULL COMMENT 'ID Sala',
  `to` varchar(120) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Para quien',
  `from` varchar(120) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'De quien',
  `ip` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Ip quien envia',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del envio',
  `message` text COLLATE latin1_spanish_ci COMMENT 'Mensaje',
  `status` int(11) DEFAULT NULL COMMENT 'Estado del mensaje',
  `admin` tinyint(4) DEFAULT NULL COMMENT 'Enviado por el administrador',
  PRIMARY KEY (`idlog`),
  KEY `idroom` (`idroom`),
  KEY `to` (`to`),
  KEY `from` (`from`),
  KEY `ip` (`ip`),
  KEY `time` (`time`),
  KEY `status` (`status`),
  KEY `admin` (`admin`)
) ENGINE=InnoDB AUTO_INCREMENT=7267 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Log de mensajes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (7261,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:12:14','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0),(7262,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:16:12','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0),(7263,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:16:13','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0),(7264,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:16:13','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0),(7265,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:16:14','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0),(7266,0,'*','otrousuario@otrousuario.com','172.20.30.57','2011-11-08 22:16:15','eWEgZGVqZW4gdGFudGEgbWFyaWtkYSB7YmlnZWxlY3RyaWNfc2hvY2t9',0,0);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parameters` (
  `name` varchar(45) NOT NULL DEFAULT '',
  `description` varchar(145) DEFAULT '',
  `int` int(11) DEFAULT '0',
  `decimal` decimal(10,0) DEFAULT '0',
  `char` varchar(254) DEFAULT '',
  `text` text,
  `query` text,
  `tinyint` tinyint(4) DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `float` float DEFAULT '0',
  `bigint` bigint(20) DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameters`
--

LOCK TABLES `parameters` WRITE;
/*!40000 ALTER TABLE `parameters` DISABLE KEYS */;
INSERT INTO `parameters` VALUES ('DefaultEncode','Metodo usado para codificar la contraseña de acceso  1: Md5, Other: Sha1 	',0,0,'','','',0,'0000-00-00 00:00:00',0,0),('DefaultIconRoom','icono para room',0,0,' ','images/16x16/system/networking.png','',0,'0000-00-00 00:00:00',0,0),('DefaultIdAvatar','Id avatar por defecto',6,0,'','images/32x32/avatars/invitado.png','',0,'0000-00-00 00:00:00',0,0),('DefaultIdRoom','Sala por defecto',0,0,'','General','',0,'0000-00-00 00:00:00',0,0),('DefaultMsgChangStatus','Mensaje cambio de estado',0,0,'','{GO} %s Cambio de estado','',0,'2011-11-08 22:06:52',0,0),('DefaultMsgInt','Mensaje de bienvenida a la sala',0,0,'','{GO} %s Bienvenido a la sala','',0,'2011-11-08 22:06:52',0,0),('DefaultMsgLogInt','Mensaje de inicio de sesion',0,0,'','{login} %s inicio sesión','',0,'2011-11-08 22:06:52',0,0),('DefaultMsgLogOut','Mensaje cierre de sesion',0,0,'','{logout} %s termino sesión',' ',0,'2011-11-08 22:06:52',0,0),('DefaultMsgOut','Mensaje al cambiar de sala',0,0,'','{GO} %s Cambio de sala','',0,'2011-11-08 22:06:52',0,0),('DefaultRoomName','Nombre de la sala por defecto',0,0,'','General','',0,'0000-00-00 00:00:00',0,0),('LogsClearOut','Determina si al cerrar sesion se eliminan los mensajes enviados por el usuario o recibidos',1,0,'','','',0,'0000-00-00 00:00:00',0,0),('LogsClearPrv','Determina si al recibir un mesaje privado una vez este se cargue se debe eliminar',1,0,'','','',0,'0000-00-00 00:00:00',0,0),('UserLocationSend','Redirecciona a los usuarios a una direccion especifica, si esta activa y no hay direccion se direcciona al cierre de sesion logout.php',0,0,'','http://www.google.com','',0,'0000-00-00 00:00:00',0,0),('UsersAllAvatar','Avatar todos los usuarios',0,0,'','images/16x16/avatars/mundo.png','',0,'0000-00-00 00:00:00',0,0),('UsersEmoticons','Determina si los usuarios tienen disponibles emoticones',1,0,'','Faces,System,BigFaces','',0,'0000-00-00 00:00:00',0,0),('UsersEmoticonsSeparator','Separador por defacto para grupos de emoticons',0,0,'','images/16x16/system/vacio.png','',0,'0000-00-00 00:00:00',0,0),('UsersIp','Determina si se captura la IP del usuario que se conecta',1,0,'','','',0,'0000-00-00 00:00:00',0,0),('UsersTimeOut','Tiempo para terminar si un usuario esta desconectado por PING',120,0,'','','',0,'0000-00-00 00:00:00',0,0);
/*!40000 ALTER TABLE `parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `idroom` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Nombre de la sala',
  `description` text COLLATE latin1_spanish_ci COMMENT 'Descripcion de la sala',
  `users` text COLLATE latin1_spanish_ci,
  PRIMARY KEY (`idroom`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Salas de ayuda';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'VIP - DEVELOPER','DEVELOPER',''),(2,'SOPORTE','SALA DE SOPORTE','*');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `type` varchar(45) DEFAULT 'USERS',
  `status` varchar(254) DEFAULT '',
  `path` varchar(254) NOT NULL DEFAULT 'images/16x16/status/online.png',
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (0,'USERS','Desconectado','images/16x16/system/offline.png'),(1,'USERS','Disponible','images/16x16/system/online.png'),(2,'USERS','Ocupado','images/16x16/system/busy.png'),(4,'USERS','En reunion','images/16x16/system/away.png');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` varchar(120) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Nombre de usuario',
  `idroom` int(11) DEFAULT '0',
  `idavatar` int(11) DEFAULT '0',
  `name` text COLLATE latin1_spanish_ci,
  `e-mail` text COLLATE latin1_spanish_ci,
  `pass` text COLLATE latin1_spanish_ci COMMENT 'Contraseña de acceso',
  `toke` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Token de conexion',
  `admin` tinyint(4) DEFAULT '0',
  `ip` varchar(15) COLLATE latin1_spanish_ci DEFAULT '',
  `lock` tinyint(4) DEFAULT '0',
  `activate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  `ping` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `statususer` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`),
  KEY `token` (`toke`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Tabla de usuarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('administrador@dominio.com',0,1,'Administrador','administrador@dominio.com','8cb2237d0679ca88db6464eac60da96345513964','fd96c6eead9a30b74f33ffdd4117502e',1,'172.20.30.50',0,'2011-11-08 20:48:27',1,'2011-11-08 22:20:32',1),('moderador@dominio.com',0,2,'Moderador','moderador@dominio.com','8cb2237d0679ca88db6464eac60da96345513964','',2,'172.20.30.50',0,'2011-11-08 13:48:55',1,'0000-00-00 00:00:00',0),('otrousuario@otrousuario.com',0,2,'Otro Usuario','otrousuario@otrousuario.com','5f6955d227a320c7f1f6c7da2a6d96a851a8118f','954c0a2d75664369d9450ed9d0ac865d',2,'172.20.30.57',0,'2011-11-08 20:56:43',1,'2011-11-08 22:20:31',1),('pedro.infante@dominio.com',0,6,'Pedro Antonio Infante Cruz','pedro.infante@dominio.com','9f0787db29be1781925388053a8b821d932e2dba','7f30a507437957dc01af5b6865b24c73',0,'172.20.30.62',0,'2011-11-08 21:33:45',1,'2011-11-08 22:10:16',1),('pedro.picapiedra@dominio.com',0,3,'Pedro Picapiedra','pedro.picapiedra@dominio.com','8cb2237d0679ca88db6464eac60da96345513964','',0,'172.20.30.50',0,'2011-11-08 14:03:30',1,'0000-00-00 00:00:00',0),('usuario@dominio.com',0,3,'Usuario De Prueba','usuario@dominio.com','8cb2237d0679ca88db6464eac60da96345513964','',0,'172.20.30.50',0,'2011-11-08 20:35:06',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-11-08 17:20:32
