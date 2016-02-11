/*!40101 SET NAMES utf8 */;

										/*!40101 SET SQL_MODE=''*/;


										/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;

										/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

										/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

										/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;';

CREATE DATABASE IF NOT EXISTS usuariohf_dark_factory;

USE usuariohf_dark_factory;

DROP TABLE IF EXISTS affiliates;

CREATE TABLE `affiliates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO affiliates VALUES("1","LEMON FILMS","original_1.png","http://www.lemonmedia.co/");
INSERT INTO affiliates VALUES("2","TIGRE PICTURES","original_2.jpg","http://tigrepictures.com/");
INSERT INTO affiliates VALUES("3","ORIGINAL ENTERTAINMENT","original_3.jpg","http://originalentertainment.com/");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pais` varchar(15) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("7","THE BAD GUYS","Post Production","2013-07-08","US","13","After making a movie based on an alleged crime committed by a childhood buddy, an up-and-coming director tries desperately to hide the film\'s story from his friends who are still disturbed by the event, as they all share an alcohol fueled weekend together.\n","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=detail-films&idp=37","original_7.jpg");
INSERT INTO banner VALUES("8","TEKUANI, THE GUARDIAN ","In Production","2013-07-08","Mexico","13","George, Carlos and Adolfo, three unselfish rescuers, receive a call to find some tourists that are missing in a cave. After hours of searching in the depths they find a vault full of dead bodies and an ancient treasure, a discovery that can change their lives forever.","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=detail-films&idp=39","original_8.jpg");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS blog;

CREATE TABLE `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `texto_largo` text,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO blog VALUES("8","TOP 5","Horror movies of the 90s","There was something about the nineties that although they used to be weird in fashion and music, they always ended up surprising us in the film industry...","<p>By <strong>Marielle Corona</strong></p>\n\n<p>&nbsp;</p>\n\n<p>There was something about the nineties that although they used to be weird in fashion and music, they always ended up surprising us in the film industry. I don&rsquo;t know the main reason but what I do know is that some of these movies represent why I love the horror genre so much. Maybe is because of the amazing actors that developed a curious talent on this specific genre, like if this era was that unique something that builds up your whole identity or maybe is what the horror genre meant to the nineties.&nbsp;</p>\n\n<p>It&rsquo;s like thinking of Macaulay Culkin without linking him with Home Alone, or thinking about Mara Wilson separated from Matilda&hellip; it&rsquo;s just so difficult I can&rsquo;t even begin to explain it. This is why I collected a top 5 with the greatest horror movies of the 90s following this idea:&nbsp;</p>\n\n<hr />\n<h2 style=\"margin-left: 80px; \">&nbsp;</h2>\n\n<h2 style=\"margin-left: 80px; \"><span style=\"background-color:Yellow;\"><strong>1. The Sixth Sense</strong></span></h2>\n\n<p>&nbsp;</p>\n\n<p>Director:&nbsp;<span style=\"color: rgb(68, 68, 68); font-family: arial, sans-serif; font-size: small; line-height: 16px; \">M. Night Shyamalan</span></p>\n\n<p><font color=\"#444444\" face=\"arial, sans-serif\" size=\"2\"><span style=\"line-height: 16px;\">Year: 1999</span></font></p>\n\n<p>&nbsp;<img alt=\"\" src=\"http://www.reelgood.com.au/wp-content/uploads/2013/04/ss2.jpg\" style=\"width: 300px; height: 181px; \" /></p>\n\n<p>&ldquo;I see dead people&rdquo; is probably the best quote to describe this movie, and of course the main character, a kid named Cole interpreted by Haley Joel Osment. This is exactly why I wanted to bring up Macaulay Culkin, because Haley is just the same as him with the exception that he&rsquo;s not screaming while looking at himself in the mirror. Haley sees &ldquo;dead people&rdquo; but he&rsquo;s only nine-years-old, he looks up to Bruce Willis&rsquo; character Dr. Malcolm Crowe, who believes him and tries to help him through his &ldquo;hallucinations&rdquo;. What&rsquo;s so great about The Sixth Sense? It has an authentic ending.</p>\n\n<hr />\n<h2 style=\"margin-left: 80px; \">&nbsp;</h2>\n\n<h2 style=\"margin-left: 80px; \"><span style=\"background-color:Yellow;\"><strong>2. Devil&rsquo;s Advocate</strong></span></h2>\n\n<p>&nbsp;</p>\n\n<p>Director:&nbsp;<span style=\"color: rgb(68, 68, 68); font-family: arial, sans-serif; font-size: small; line-height: 16px; \">Taylor Hackford</span></p>\n\n<p><span style=\"color: rgb(68, 68, 68); font-family: arial, sans-serif; font-size: small; line-height: 16px; \">Year: 1997</span></p>\n\n<p><img alt=\"\" src=\"http://s3.amazonaws.com/auteurs_production/images/film/the-devils-advocate/w448/the-devils-advocate.jpg\" style=\"width: 300px; height: 169px; \" /></p>\n\n<p>Seriously, can you think of anything else when you hear the name Al Pacino other than his part on Devil&rsquo;s Advocate? Even if you wanted to say El Padrino, I&rsquo;d believe you but could not understand it, because although Corleone is a fabulous character filled with violence and temperament, it doesn&rsquo;t have the curious and crazy mind that John Milton has, he&rsquo;s the most interesting and ambitious character I&rsquo;ve ever seen, and every time I have the chance to see Devil&rsquo;s Advocate, I don&rsquo;t hesitate. It&rsquo;s just so tempting, I can&rsquo;t help myself.</p>\n\n<hr />\n<h2 style=\"margin-left: 80px; \">&nbsp;</h2>\n\n<h2 style=\"margin-left: 80px; \"><span style=\"background-color:Yellow;\"><strong>3. It</strong></span></h2>\n\n<p>&nbsp;</p>\n\n<p>Director: Tommy Lee Wallace</p>\n\n<p>Year: 1990</p>\n\n<p><img alt=\"\" src=\"http://www.unwinnable.com/wp-content/uploads/2011/01/pennywise-clown-it.jpg\" style=\"width: 300px; height: 169px; \" /></p>\n\n<p>Every kid that grew up in the nineties will have to agree with me, there&rsquo;s no other reason why I hate clowns so much other than this horrifying movie called It. Written by Stephen King, this movie created most of my childhood fears, which absolutely explains why I love it. There&rsquo;s nothing more terrifying than thinking that there&rsquo;s &ldquo;someone&rdquo; under your bed or even worst, under the city sewers. For a while, I couldn&rsquo;t go to sleep unless there was a light on. Thank you It.</p>\n\n<hr />\n<h2 style=\"margin-left: 80px; \">&nbsp;</h2>\n\n<h2 style=\"margin-left: 80px; \"><span style=\"background-color:Yellow;\"><strong>4. Scream</strong></span></h2>\n\n<p>&nbsp;</p>\n\n<p>Director:&nbsp;<span style=\"color: rgb(68, 68, 68); font-family: arial, sans-serif; font-size: small; line-height: 16px; \">Wes Craven</span></p>\n\n<p><span style=\"color: rgb(68, 68, 68); font-family: arial, sans-serif; font-size: small; line-height: 16px; \">Year: 1996</span></p>\n\n<p><img alt=\"\" src=\"http://1.bp.blogspot.com/-UJ_d1QAolbs/TaPjtrAWl_I/AAAAAAAACFM/4XdgSJkTqyY/s320/Ghostface+%2528scream%2529.jpg\" style=\"width: 300px; height: 201px; \" /></p>\n\n<p>I know this is stupid, but I seriously became afraid of phone calls after I saw Scream. What If someone was calling me to ask something like &ldquo;what&rsquo;s your favorite scary movie&rdquo;? That&rsquo;s freaky. And we have to admit that the nineties were all about prank calls, I even did some of them to scare my own friends. Also, I think that Scream became a classic Halloween costume since 1996, although I have to say I don&rsquo;t think it&rsquo;s so scary anymore.</p>\n\n<hr />\n<h2 style=\"margin-left: 80px; \">&nbsp;</h2>\n\n<h2 style=\"margin-left: 80px; \"><span style=\"background-color:Yellow;\"><strong>5. The Blair Witch Project</strong></span></h2>\n\n<p>&nbsp;</p>\n\n<p>Directors: Daniel Myrick &amp; Eduardo S&aacute;nchez</p>\n\n<p>Year: 1999&nbsp;</p>\n\n<p><img alt=\"\" src=\"http://nzfilmfreak.files.wordpress.com/2013/02/blair-witch-project-heather-donahuejpg-cc43367e7ecdc67d.jpg\" style=\"width: 290px; height: 216px; \" /></p>\n\n<p>What would you do with a handycam? All I know is that after The Blair Witch Project came out I couldn&rsquo;t think of anything more interesting than following an urban legend with it. There&rsquo;s nothing better than a psychological horror film presented as found footage; makes things more intriguing and looks super realistic. That&rsquo;s why this movie became so important in the horror genre, thanks to this film we now have access to movies like Paranormal Activity. Kudos!</p>\n","2013-07-08","original_8.jpg");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS categorias;

CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lineas_id` int(10) unsigned NOT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_FKIndex1` (`lineas_id`),
  CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`lineas_id`) REFERENCES `lineas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO categorias VALUES("4","1","IN THE WORKS");
INSERT INTO categorias VALUES("8","2","ON STAGE");
INSERT INTO categorias VALUES("10","2","IN DEVELOPMENT");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://repositorio.imaginamos.com.co/HF/DF_prog/cms/","http://repositorio.imaginamos.com.co/HF/DF_prog/","cms@imaginamos.com","imaginamos.com");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/banner/view","administrator");
INSERT INTO cms_menu VALUES("2","About Us","modules/members/view","group");
INSERT INTO cms_menu VALUES("3","Films/Theater","modules/categorias/view","camera");
INSERT INTO cms_menu VALUES("4","Media","modules/blog/view","music_folder");
INSERT INTO cms_menu VALUES("5","Contact","modules/contacto/view","mail_open");
INSERT INTO cms_menu VALUES("6","Footer","modules/footer/view","usb");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS cms_user;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","e7cdbe62dbae20112e5ee1a7a101c6d3","cms@imaginamos.com","admin");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS contacto;

CREATE TABLE `contacto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO contacto VALUES("1","Contact ","For general information about Dark Factory Entertainment, please call our Mexico City office (55) 6274 5060. If not, you could also fill the form below and we\'ll contact you via e-mail. Thank you!","original_1.jpg","Tabasco 68 Int. 2, Roma Norte,06700 México, D.F","(55) 6274 5060 - (55) 6274 5061","contacto@darkfactory.com");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS footer;

CREATE TABLE `footer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO footer VALUES("1","Production Company founded in 2012.","Tabasco 68 Int. 2, Roma Norte,","(55) 6274 5060 - (55) 6274 5061","contacto@darkfactory.com","06700 México, D.F");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS galeria;

CREATE TABLE `galeria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_FKIndex1` (`item_id`),
  CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO galeria VALUES("15","37","original_15.png");
INSERT INTO galeria VALUES("17","39","original_17.jpg");
INSERT INTO galeria VALUES("18","39","original_18.png");
INSERT INTO galeria VALUES("19","39","original_19.jpg");
INSERT INTO galeria VALUES("20","39","original_20.jpg");
INSERT INTO galeria VALUES("21","39","original_21.jpg");
INSERT INTO galeria VALUES("22","39","original_22.jpg");
INSERT INTO galeria VALUES("25","36","original_25.png");
INSERT INTO galeria VALUES("26","36","original_26.jpg");
INSERT INTO galeria VALUES("27","36","original_27.jpg");
INSERT INTO galeria VALUES("28","36","original_28.png");
INSERT INTO galeria VALUES("29","46","original_29.jpg");
INSERT INTO galeria VALUES("30","47","original_30.png");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS industry_news;

CREATE TABLE `industry_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `texto_largo` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO industry_news VALUES("7","David Lynch directs new video for Nine Inch Nails","Take a look at NIN\'s new video \"Came Back Haunted\" directed by David Lynch.","This isn\'t the first time that David Lynch collaborates with Reznor (NIN), and we can almost assure that it won\'t be the last. Recently, Reznor asked Lynch to direct NIN\'s new video \"Came Back Haunted\" and he couldn\'t be more perfect. \n\nAs we all know, Lynch have directed other music videos, such as Interpol\'s \"I Touch a Red Button\" and \"Shot in the Back of the Head\" by Moby. Although we\'re used to see a lot of blood, guts and corpses on Nine Inch Nail\'s videos, this one is a little bit more psychological. Don\'t let it mess with your head! \n\nTake a look below...\n\n<iframe width=\"365\" height=\"315\" src=\"//www.youtube.com/embed/1RN6pT3zL44\" frameborder=\"0\" allowfullscreen></iframe>","original_7.jpg");
INSERT INTO industry_news VALUES("8","Jacob\'s Ladder remake in the works","It seems like Jacob\'s Ladder (1990) is getting a remake 23 years after its release. ","This cult horror movie first directed by Adrian Lyne and starring Tim Robbins, tells the story of a Vietnam War veteran who suffered from bizarre hallucinations, possibly haunted by the demons of war. \n\nThe new version of Jacob\'s Ladder is being written by Jeff Buhler (better known for The Midnight Meat Train script), so we\'re definitely expecting a complete new version of this classic, with modern angle views and horrifying characters in a psychological way... Reason enough to think that this will be more of a homage than a remake, isn\'t it?\n\nIf you haven\'t seen this movie, you can look at the original trailer below:\n\n<iframe width=\"365\" height=\"315\" src=\"//www.youtube.com/embed/rJztRnDxdM8\" frameborder=\"0\" allowfullscreen></iframe>","original_8.jpg");
INSERT INTO industry_news VALUES("9","\'Hannibal\' Season 2 Plans to Cast David Bowie as Robert Lecter","We\'re not sure yet if \'Hannibal\' will get a green light for Season 2, but if it does David Bowie could be playing the part of Robert Lecter.","It\'s only a rumor for now, but the Casting department in \'Hannibal\' is looking for a new season where David Bowie could be playing the part of Robert Lecter. This surprising news first came out on a interview with Bryan Fuller where he said that he has always dreamed of casting Bowie as Hannibal Lecter\'s uncle, he also knows that Bowie is a major fan of the storyline and the character. Only time will tell...","original_9.jpg");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS item;

CREATE TABLE `item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categorias_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `url` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `texto_mapa` text,
  PRIMARY KEY (`id`),
  KEY `item_FKIndex1` (`categorias_id`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

INSERT INTO item VALUES("36","8","LA VOZ HUMANA","La Voz Humana\nBoletos en Ticketmaster: http://bit.ly/1a7dBcN","xqHhHfo1XQc","original_36.png","http://www.ticketmaster.com.mx/La-Voz-Humana-boletos/artist/1868524","<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=+&amp;q=bogota+colombia&amp;ie=UTF8&amp;hq=&amp;hnear=Bogot%C3%A1,+Colombia&amp;t=h&amp;z=8&amp;iwloc=A&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=+&amp;q=bogota+colombia&amp;ie=UTF8&amp;hq=&amp;hnear=Bogot%C3%A1,+Colombia&amp;t=h&amp;z=8&amp;iwloc=A\" style=\"color:#0000FF;text-align:left\">Ver mapa más grande</a></small>");
INSERT INTO item VALUES("37","4","THE BAD GUYS (Post Production)","After making a movie based on an alleged crime committed by a childhood buddy, an up-and-coming director tries desperately to hide the film\'s story from his friends who are still disturbed by the event, as they all share an alcohol fueled weekend together.\n\nDirector: Carlos Rincones","Array","original_37.png","","");
INSERT INTO item VALUES("39","4","TEKUANI, THE GUARDIAN (In Production)","George, Carlos and Adolfo, three unselfish rescuers, receive a call to find some tourists that are missing in a cave. After hours of searching in the depths they find a vault full of dead bodies and an ancient treasure. Excited with a discovery that can change their lives forever, they decide to take everything, not knowing that their actions will awake the terrible guardian who will poison their minds with greed, dragging them to their own destruction. Director: Sergio Sánchez.","Array","original_39.jpg","","");
INSERT INTO item VALUES("40","4","UNTITLED HORROR PROJECT (In Production)","A found footage horror film about a four amateur paranormal investigators who venture into an abandoned psychiatric hospital in Mexico City.","Array","original_40.jpg","","");
INSERT INTO item VALUES("41","4","KM 31 pt. 2 (Pre Production)","N/A\nDirector: Rigoberto Castañeda","Array","original_41.jpg","","");
INSERT INTO item VALUES("42","4","REVERSAL (In Production)","A young girl, chained in the basement of a sexual predator, escapes and turns the tables on her captor. Director: Jose Manuel Cravioto.","Array","original_42.jpg","","");
INSERT INTO item VALUES("43","4","STORAGE (Pre Production)","N/A","Array","original_43.jpg","","");
INSERT INTO item VALUES("44","4","A SEAT IN HELL (Pre Production)","Bored with life after traveling the world, a dying medical examiner attempts to quench his thirst for exploration by vicariously traveling through Hell via tales told by the executed Death Rowers he secretly revives.","Array","original_44.jpg","","");
INSERT INTO item VALUES("46","10","MAS NEGRO QUE LA NOCHE","This is the story of a group of women in their thirties. Ophelia, the leader of the group, has just inherited her aunt Susan\'s spooky mansion, who recently died. But there\'s one condition: Ophelia can have the house, only if she agrees to take care of her aunt\'s cat named Bécquer. Ophelia moves with her friends to the old house where where not only Bécquer is a mystery, they will soon experience a series of weird noises, calls and appearances around the house.  ","Array","original_46.jpg","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=theater","<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.mx/maps?f=q&source=s_q&hl=en&geocode=&q=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Mexico+City&aq=0&oq=tabasco&sll=19.320099,-99.152184&sspn=0.660933,1.234589&ie=UTF8&hq=&hnear=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&t=m&z=14&ll=19.418691,-99.162033&output=embed\"></iframe><br /><small><a href=\"https://maps.google.com.mx/maps?f=q&source=embed&hl=en&geocode=&q=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Mexico+City&aq=0&oq=tabasco&sll=19.320099,-99.152184&sspn=0.660933,1.234589&ie=UTF8&hq=&hnear=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&t=m&z=14&ll=19.418691,-99.162033\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>");
INSERT INTO item VALUES("47","10","LA CASA DE LUCIEN","Chloe has been sick for many years and her brother Eduardo thinks that she\'s going to die soon, so he sends a letter to her governess Victoria asking her to return immediately to the house. However, Victoria does not arrive on time and Eduardo dies in strange circumstances. Chloe fears for her life and Victoria helps her investigate the past to find the exact reasons of her rare disease, but despite attempts her butler Lucio does everything to stop them. In this pursuit, both discover an unknown past where nothing makes sense, full of secrets and supernatural facts where they find that evil is contained in our minds. ","Array","original_47.jpg","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=theater","<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.mx/maps?f=q&source=s_q&hl=en&geocode=&q=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Mexico+City&aq=0&oq=tabasco&sll=19.320099,-99.152184&sspn=0.660933,1.234589&ie=UTF8&hq=&hnear=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&t=m&z=14&ll=19.418691,-99.162033&output=embed\"></iframe><br /><small><a href=\"https://maps.google.com.mx/maps?f=q&source=embed&hl=en&geocode=&q=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Mexico+City&aq=0&oq=tabasco&sll=19.320099,-99.152184&sspn=0.660933,1.234589&ie=UTF8&hq=&hnear=Tabasco,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&t=m&z=14&ll=19.418691,-99.162033\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS latest_news;

CREATE TABLE `latest_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO latest_news VALUES("6","David Lynch + NIN","Take a look at NIN\'s new video \"Came Back Haunted\" directed by David Lynch.","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=industry-new#desc-new","original_6.jpg");
INSERT INTO latest_news VALUES("7","\'Hannibal\' + David Bowie","We\'re not sure yet if \'Hannibal\' will get a green light for Season 2, but if it does David Bowie could be playing the part of Robert Lecter.","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=industry-new#desc-new","original_7.jpg");
INSERT INTO latest_news VALUES("8","Jacob\'s Ladder remake ","It seems like Jacob\'s Ladder (1990) is getting a remake 23 years after its release.","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=industry-new#desc-new","original_8.jpg");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS lineas;

CREATE TABLE `lineas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_de_linea` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO lineas VALUES("1","FILMS");
INSERT INTO lineas VALUES("2","THEATHER");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS members;

CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO members VALUES("20","ALEXANDRA VELASCO","P.A.","original_20.png");
INSERT INTO members VALUES("21","MARIA INÉS OLMEDO","Head of Theater","original_21.jpg");
INSERT INTO members VALUES("22","MARIELLE CORONA","Head of Development","original_22.jpg");
INSERT INTO members VALUES("23","SAMANTHA CASTELLANO","Executive","original_23.png");
INSERT INTO members VALUES("24","ALEXIS FRIDMAN","Executive","original_24.png");
INSERT INTO members VALUES("25","RODOLFO MÁRQUEZ","CFO","original_25.png");
INSERT INTO members VALUES("26","DANIEL POSADA","CEO","original_26.png");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS our_blog;

CREATE TABLE `our_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO our_blog VALUES("5","Top 5: HORROR MOVIES","Were you born in the nineties? Take a look at this Top 5 Greatest Movies of the 90s!","2013-07-08","original_5.jpg","Marielle Corona","http://repositorio.imaginamos.com.co/HF/DF_prog/index.php?base&seccion=media");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS subscribe;

CREATE TABLE `subscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `blog` int(10) unsigned DEFAULT NULL,
  `trailers` int(10) unsigned DEFAULT NULL,
  `industry` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO subscribe VALUES("2","Alexandra GÃ³mez","alexandra.gomez@imaginamod.com","1","1","1");
INSERT INTO subscribe VALUES("3","Luis Mejia","luis.mejia@imaginamos.com.co","1","0","1");



											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
DROP TABLE IF EXISTS trailers;

CREATE TABLE `trailers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `release_year` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `producer` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




											/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

											/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

											
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

											/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
