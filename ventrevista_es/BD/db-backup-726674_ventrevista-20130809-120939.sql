CREATE DATABASE IF NOT EXISTS 726674_ventrevista;

USE img_ventrevista;

DROP TABLE IF EXISTS cms_banner;

CREATE TABLE `cms_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(200) DEFAULT NULL,
  `banner_subtitle` varchar(200) DEFAULT NULL,
  `banner_image` varchar(100) DEFAULT NULL,
  `banner_link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO cms_banner VALUES("1","Puerto","Atendemos el deficit de capacidad de exportación de carbón","iStock_000020318631Medium.jpg","");
INSERT INTO cms_banner VALUES("2","Ductos","Para conectar la energía Latino Americana","iStock_000014930569Medium.jpg","");
INSERT INTO cms_banner VALUES("3","Fluvial","Rio Verde incrementará las opciones de transporte en Colombia","iStock_000017531246Medium.jpg","");



DROP TABLE IF EXISTS cms_banner_eng;

CREATE TABLE `cms_banner_eng` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(200) DEFAULT NULL,
  `banner_subtitle` varchar(200) DEFAULT NULL,
  `banner_image` varchar(100) DEFAULT NULL,
  `banner_link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO cms_banner_eng VALUES("1","Coal Port","Oceano Verde fulfills the gap in coal export capacity","iStock_000020318631Medium.jpg","");
INSERT INTO cms_banner_eng VALUES("2","Pipelines","Connecting Latin America\'s Energy","iStock_000014930569Medium.jpg","");
INSERT INTO cms_banner_eng VALUES("3","River Barges","Rio Verde will increase transportation alternatives in Colombia","iStock_000017531246Medium.jpg","");



DROP TABLE IF EXISTS cms_banners_mods;

CREATE TABLE `cms_banners_mods` (
  `mods_id` int(11) NOT NULL AUTO_INCREMENT,
  `mods_title` varchar(100) DEFAULT NULL,
  `mods_description` varchar(300) DEFAULT NULL,
  `mods_image` varchar(100) DEFAULT NULL,
  `mods_modulo` varchar(200) NOT NULL,
  PRIMARY KEY (`mods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_banners_mods VALUES("1","Relaciones Públicas","Las relaciones públicas de SGA son poderosas.\nLogramos contactar a la persona adecuada\nrápida y eficientemente.\n— Matthew Day, CEO, Black Opal Equity","82-handsup.jpg","nosotros");
INSERT INTO cms_banners_mods VALUES("2","Compromiso","Resultados reales. Tuvimos inconvientes pero ellis nunca se movieron. Lograron salvar nuestro negocio. Phil Riley, CEO, Utility Service Partner","iStock_000017948386Medium.jpg","nosotros");
INSERT INTO cms_banners_mods VALUES("3","Innovación","Desarrollo de Infraestructura","iStock_000013167343_Medium.jpg","inversionistas");
INSERT INTO cms_banners_mods VALUES("4","titulo prueba 2","descripciones de prueba 2","Captura_de_pantalla_2012-08-21_a_la(s)_19.22_.28_1.png","inversionistas");
INSERT INTO cms_banners_mods VALUES("5","titulo prueba 3","descripciones de prueba 3","imgbanner31.png","inversionistas");



DROP TABLE IF EXISTS cms_banners_mods_eng;

CREATE TABLE `cms_banners_mods_eng` (
  `mods_id` int(11) NOT NULL AUTO_INCREMENT,
  `mods_title` varchar(100) DEFAULT NULL,
  `mods_description` varchar(300) DEFAULT NULL,
  `mods_image` varchar(100) DEFAULT NULL,
  `mods_modulo` varchar(200) NOT NULL,
  PRIMARY KEY (`mods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_banners_mods_eng VALUES("1","Strong Networking","SGA\'s networking skills are very powerful.\nWe got to \"right person\" decision makers\nefficiently and quickly \n— Matthew Day, CEO, Black Opal Equit","82-handsup.jpg","nosotros");
INSERT INTO cms_banners_mods_eng VALUES("2","Commitment","Real results. We were derailed several times and they never flinched. Their resolve and acumen saved the day\nPhil Riley, CEO, Utility Service Partners","iStock_000017948386Medium1.jpg","nosotros");
INSERT INTO cms_banners_mods_eng VALUES("3","Greenfield","Developing Infrastructure","iStock_000013167343_Medium.jpg","inversionistas");
INSERT INTO cms_banners_mods_eng VALUES("4","Solid Returns","Safe, effective, efficient and high yield investments","yield-sign.jpg","inversionistas");
INSERT INTO cms_banners_mods_eng VALUES("5","Wide Portfolio","Diversification across high return segments","3325golden_egg.jpg","inversionistas");



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

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://brayanacebo.com/cms/","http://apple.com","cms@imaginamos.com","imaginamos.com");



DROP TABLE IF EXISTS cms_featured;

CREATE TABLE `cms_featured` (
  `featured_id` int(11) NOT NULL AUTO_INCREMENT,
  `featured_title` varchar(150) DEFAULT NULL,
  `featured_description` varchar(200) DEFAULT NULL,
  `featured_image` varchar(100) DEFAULT NULL,
  `featured_link` varchar(500) NOT NULL,
  PRIMARY KEY (`featured_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO cms_featured VALUES("1","Reservas","prueba Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.","MAS+.png","");
INSERT INTO cms_featured VALUES("2","Proyectos","Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.","imgoceano.jpeg","#");
INSERT INTO cms_featured VALUES("3","Proyectos","Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.","imgrioverde1.jpeg","#");
INSERT INTO cms_featured VALUES("4","Sección","Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.","imgsga.png","#");



DROP TABLE IF EXISTS cms_featured_eng;

CREATE TABLE `cms_featured_eng` (
  `featured_id` int(11) NOT NULL AUTO_INCREMENT,
  `featured_title` varchar(150) DEFAULT NULL,
  `featured_description` varchar(200) DEFAULT NULL,
  `featured_image` varchar(100) DEFAULT NULL,
  `featured_link` varchar(500) NOT NULL,
  PRIMARY KEY (`featured_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO cms_featured_eng VALUES("1","Reserves","SGA services often revolve around the selection and procurement of mineral concessions. ","MAS+.png","");
INSERT INTO cms_featured_eng VALUES("2","Ocean Port","SGA is developing a Colombian port to facilitate the export of bulk minerals. Project partners include Gerdau S.A. & Societedad Portuaria Regional de Cartegena.","imgoceano.jpeg","ingles2");
INSERT INTO cms_featured_eng VALUES("3","River Port","SGA is leading the development of a Magdalena River port and barge operation to feed the ocean port on Colombia\'s Caribbean Coast.","imgrioverde1.jpeg","ingles3");
INSERT INTO cms_featured_eng VALUES("4","Trade Finance","SGAC is a trade finance company that facilitates Colombia\'s ongoing evolution into global commerce. ","imgsga.png","ingles4");



DROP TABLE IF EXISTS cms_icons;

CREATE TABLE `cms_icons` (
  `icons_id` int(11) NOT NULL AUTO_INCREMENT,
  `icons_name` varchar(100) NOT NULL,
  PRIMARY KEY (`icons_id`)
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

INSERT INTO cms_icons VALUES("1","abacus");
INSERT INTO cms_icons VALUES("2","access_point");
INSERT INTO cms_icons VALUES("3","add");
INSERT INTO cms_icons VALUES("4","administrator");
INSERT INTO cms_icons VALUES("5","alarm");
INSERT INTO cms_icons VALUES("6","arrow_bidirectional");
INSERT INTO cms_icons VALUES("7","arrow_down");
INSERT INTO cms_icons VALUES("8","arrow_left");
INSERT INTO cms_icons VALUES("9","arrow_right");
INSERT INTO cms_icons VALUES("10","arrow_up");
INSERT INTO cms_icons VALUES("11","attachment");
INSERT INTO cms_icons VALUES("12","audio_knob");
INSERT INTO cms_icons VALUES("13","barcode");
INSERT INTO cms_icons VALUES("14","battery_empty");
INSERT INTO cms_icons VALUES("15","battery_full");
INSERT INTO cms_icons VALUES("16","battery_half");
INSERT INTO cms_icons VALUES("17","bell");
INSERT INTO cms_icons VALUES("18","bill");
INSERT INTO cms_icons VALUES("19","binoculars");
INSERT INTO cms_icons VALUES("20","bold");
INSERT INTO cms_icons VALUES("21","book");
INSERT INTO cms_icons VALUES("22","bookmark");
INSERT INTO cms_icons VALUES("23","briefcase");
INSERT INTO cms_icons VALUES("24","brightness");
INSERT INTO cms_icons VALUES("25","broken_link");
INSERT INTO cms_icons VALUES("26","brush");
INSERT INTO cms_icons VALUES("27","burn_blu-ray");
INSERT INTO cms_icons VALUES("28","burn_blu-ray2");
INSERT INTO cms_icons VALUES("29","burn_dvd");
INSERT INTO cms_icons VALUES("30","burn_dvd2");
INSERT INTO cms_icons VALUES("31","cabinet");
INSERT INTO cms_icons VALUES("32","calculator");
INSERT INTO cms_icons VALUES("33","calendar");
INSERT INTO cms_icons VALUES("34","camera");
INSERT INTO cms_icons VALUES("35","cancel");
INSERT INTO cms_icons VALUES("36","card_clubs");
INSERT INTO cms_icons VALUES("37","card_diamonds");
INSERT INTO cms_icons VALUES("38","card_hearts");
INSERT INTO cms_icons VALUES("39","card_spades");
INSERT INTO cms_icons VALUES("40","certificate");
INSERT INTO cms_icons VALUES("41","certificate-(2)");
INSERT INTO cms_icons VALUES("42","chat-exclamation");
INSERT INTO cms_icons VALUES("43","checkmark");
INSERT INTO cms_icons VALUES("44","checkmark2");
INSERT INTO cms_icons VALUES("45","clip");
INSERT INTO cms_icons VALUES("46","clipboard");
INSERT INTO cms_icons VALUES("47","clock");
INSERT INTO cms_icons VALUES("48","close");
INSERT INTO cms_icons VALUES("49","cloud");
INSERT INTO cms_icons VALUES("50","cloud2");
INSERT INTO cms_icons VALUES("51","coin");
INSERT INTO cms_icons VALUES("52","compress");
INSERT INTO cms_icons VALUES("53","connect");
INSERT INTO cms_icons VALUES("54","contrast");
INSERT INTO cms_icons VALUES("55","copy");
INSERT INTO cms_icons VALUES("56","cross");
INSERT INTO cms_icons VALUES("57","cutter");
INSERT INTO cms_icons VALUES("58","delete");
INSERT INTO cms_icons VALUES("59","dial");
INSERT INTO cms_icons VALUES("60","diary");
INSERT INTO cms_icons VALUES("61","dimensions");
INSERT INTO cms_icons VALUES("62","directional_down");
INSERT INTO cms_icons VALUES("63","directional_left");
INSERT INTO cms_icons VALUES("64","directional_right");
INSERT INTO cms_icons VALUES("65","directional_up");
INSERT INTO cms_icons VALUES("66","disconnect");
INSERT INTO cms_icons VALUES("67","diskette");
INSERT INTO cms_icons VALUES("68","document");
INSERT INTO cms_icons VALUES("69","door");
INSERT INTO cms_icons VALUES("70","download2");
INSERT INTO cms_icons VALUES("71","dropper");
INSERT INTO cms_icons VALUES("72","earphones");
INSERT INTO cms_icons VALUES("73","effects");
INSERT INTO cms_icons VALUES("74","eject");
INSERT INTO cms_icons VALUES("75","emoticon_angry");
INSERT INTO cms_icons VALUES("76","emoticon_confused");
INSERT INTO cms_icons VALUES("77","emoticon_grin");
INSERT INTO cms_icons VALUES("78","emoticon_in_love");
INSERT INTO cms_icons VALUES("79","emoticon_sad");
INSERT INTO cms_icons VALUES("80","emoticon_sleeping");
INSERT INTO cms_icons VALUES("81","emoticon_smile");
INSERT INTO cms_icons VALUES("82","encrypt");
INSERT INTO cms_icons VALUES("83","eraser");
INSERT INTO cms_icons VALUES("84","eye_closed");
INSERT INTO cms_icons VALUES("85","eye");
INSERT INTO cms_icons VALUES("86","fast_forward");
INSERT INTO cms_icons VALUES("87","file");
INSERT INTO cms_icons VALUES("88","fill");
INSERT INTO cms_icons VALUES("89","fingerprint");
INSERT INTO cms_icons VALUES("90","firewall");
INSERT INTO cms_icons VALUES("91","first");
INSERT INTO cms_icons VALUES("92","folder");
INSERT INTO cms_icons VALUES("93","font_size");
INSERT INTO cms_icons VALUES("94","font");
INSERT INTO cms_icons VALUES("95","game_control");
INSERT INTO cms_icons VALUES("96","gear");
INSERT INTO cms_icons VALUES("97","group");
INSERT INTO cms_icons VALUES("98","hammer");
INSERT INTO cms_icons VALUES("99","hand_point");
INSERT INTO cms_icons VALUES("100","hand_thumbsdown");
INSERT INTO cms_icons VALUES("101","hand_thumbsup");
INSERT INTO cms_icons VALUES("102","hard_disk");
INSERT INTO cms_icons VALUES("103","headset");
INSERT INTO cms_icons VALUES("104","heart");
INSERT INTO cms_icons VALUES("105","help");
INSERT INTO cms_icons VALUES("106","help2");
INSERT INTO cms_icons VALUES("107","history");
INSERT INTO cms_icons VALUES("108","home");
INSERT INTO cms_icons VALUES("109","hourglass");
INSERT INTO cms_icons VALUES("110","hourglass2");
INSERT INTO cms_icons VALUES("111","id");
INSERT INTO cms_icons VALUES("112","info");
INSERT INTO cms_icons VALUES("113","info2");
INSERT INTO cms_icons VALUES("114","italic");
INSERT INTO cms_icons VALUES("115","item");
INSERT INTO cms_icons VALUES("116","key");
INSERT INTO cms_icons VALUES("117","last");
INSERT INTO cms_icons VALUES("118","lightbulb");
INSERT INTO cms_icons VALUES("119","link");
INSERT INTO cms_icons VALUES("120","list");
INSERT INTO cms_icons VALUES("121","location");
INSERT INTO cms_icons VALUES("122","lock_open");
INSERT INTO cms_icons VALUES("123","lock");
INSERT INTO cms_icons VALUES("124","login");
INSERT INTO cms_icons VALUES("125","mail_open");
INSERT INTO cms_icons VALUES("126","mail");
INSERT INTO cms_icons VALUES("127","messenger");
INSERT INTO cms_icons VALUES("128","microhpone");
INSERT INTO cms_icons VALUES("129","microphone");
INSERT INTO cms_icons VALUES("130","money_bag");
INSERT INTO cms_icons VALUES("131","monitor");
INSERT INTO cms_icons VALUES("132","moon");
INSERT INTO cms_icons VALUES("133","music_folder");
INSERT INTO cms_icons VALUES("134","music_library");
INSERT INTO cms_icons VALUES("135","music");
INSERT INTO cms_icons VALUES("136","next");
INSERT INTO cms_icons VALUES("137","notepad");
INSERT INTO cms_icons VALUES("138","paragraph_align_left");
INSERT INTO cms_icons VALUES("139","paragraph_align_right");
INSERT INTO cms_icons VALUES("140","paragraph_align_justify");
INSERT INTO cms_icons VALUES("141","password");
INSERT INTO cms_icons VALUES("142","paste");
INSERT INTO cms_icons VALUES("143","pause");
INSERT INTO cms_icons VALUES("144","pen");
INSERT INTO cms_icons VALUES("145","pencil");
INSERT INTO cms_icons VALUES("146","phone");
INSERT INTO cms_icons VALUES("147","photo_album");
INSERT INTO cms_icons VALUES("148","pictures_folder");
INSERT INTO cms_icons VALUES("149","play");
INSERT INTO cms_icons VALUES("150","point");
INSERT INTO cms_icons VALUES("151","power");
INSERT INTO cms_icons VALUES("152","previous");
INSERT INTO cms_icons VALUES("153","print");
INSERT INTO cms_icons VALUES("154","pyramid");
INSERT INTO cms_icons VALUES("155","random");
INSERT INTO cms_icons VALUES("156","record");
INSERT INTO cms_icons VALUES("157","redo");
INSERT INTO cms_icons VALUES("158","reload");
INSERT INTO cms_icons VALUES("159","repeat");
INSERT INTO cms_icons VALUES("160","resize2");
INSERT INTO cms_icons VALUES("161","rewind");
INSERT INTO cms_icons VALUES("162","rotate");
INSERT INTO cms_icons VALUES("163","round");
INSERT INTO cms_icons VALUES("164","ruler_square");
INSERT INTO cms_icons VALUES("165","satellite");
INSERT INTO cms_icons VALUES("166","scissors");
INSERT INTO cms_icons VALUES("167","screwdriver");
INSERT INTO cms_icons VALUES("168","security");
INSERT INTO cms_icons VALUES("169","shopping_basket");
INSERT INTO cms_icons VALUES("170","software24");
INSERT INTO cms_icons VALUES("171","spam");
INSERT INTO cms_icons VALUES("172","speaker");
INSERT INTO cms_icons VALUES("173","speaker2");
INSERT INTO cms_icons VALUES("174","sphere");
INSERT INTO cms_icons VALUES("175","spreadsheet");
INSERT INTO cms_icons VALUES("176","square");
INSERT INTO cms_icons VALUES("177","star");
INSERT INTO cms_icons VALUES("178","stats_bars");
INSERT INTO cms_icons VALUES("179","stats_lines");
INSERT INTO cms_icons VALUES("180","stats_pie");
INSERT INTO cms_icons VALUES("181","stop");
INSERT INTO cms_icons VALUES("182","strike_through");
INSERT INTO cms_icons VALUES("183","sun");
INSERT INTO cms_icons VALUES("184","target");
INSERT INTO cms_icons VALUES("185","thunder");
INSERT INTO cms_icons VALUES("186","trash_can");
INSERT INTO cms_icons VALUES("187","underlined");
INSERT INTO cms_icons VALUES("188","undo");
INSERT INTO cms_icons VALUES("189","upload2");
INSERT INTO cms_icons VALUES("190","usb");
INSERT INTO cms_icons VALUES("191","user_woman");
INSERT INTO cms_icons VALUES("192","user");
INSERT INTO cms_icons VALUES("193","volume_control");
INSERT INTO cms_icons VALUES("194","webcam");
INSERT INTO cms_icons VALUES("195","window");
INSERT INTO cms_icons VALUES("196","wizard");
INSERT INTO cms_icons VALUES("197","world");
INSERT INTO cms_icons VALUES("198","zoom_in");
INSERT INTO cms_icons VALUES("199","zoom_out");
INSERT INTO cms_icons VALUES("200","zoom");



DROP TABLE IF EXISTS cms_investors;

CREATE TABLE `cms_investors` (
  `investors_id` int(11) NOT NULL AUTO_INCREMENT,
  `investors_title` varchar(150) DEFAULT NULL,
  `investors_description` varchar(500) DEFAULT NULL,
  `investors_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`investors_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO cms_investors VALUES("1","Infrastructure","We focus on developing Latin America\'s infrastructure by creating projects that are beneficial both for the host nation and the investor. Our team is currently specializing in sea ports, river ports, rail roads and river barging","iStock_000020943216XSmall.jpg");
INSERT INTO cms_investors VALUES("2","Energy","Energy is at the heart of our business and thus we put our efforts into finding the right opportunities to invest in and develop. We work to develop sustainable and renewable energy using a country\'s natural resource base","iStock_000013824899XSmall.jpg");
INSERT INTO cms_investors VALUES("3","Oil & Gas","Pipelines, rigs, fields are all part of our history and is what drives our passion. Our Oil & Gas unit has ample experience in bringing the right projects, knowledge and expertise to the right investor at the right moment. ","iStock_000017790154XSmall.jpg");
INSERT INTO cms_investors VALUES("4","Mining","Mining is an immature industry in Latin America with incredible potential. we strive to be amongst the first business developers of this industry to capitalize the opportunity and develop high yield projects.","mineral-mining_1092_990x742.jpg");



DROP TABLE IF EXISTS cms_investors_eng;

CREATE TABLE `cms_investors_eng` (
  `investors_id` int(11) NOT NULL AUTO_INCREMENT,
  `investors_title` varchar(150) DEFAULT NULL,
  `investors_description` varchar(500) DEFAULT NULL,
  `investors_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`investors_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO cms_investors_eng VALUES("1","titulo 1","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.","imgoperating.png");
INSERT INTO cms_investors_eng VALUES("2","titu2","desc 2","img1operating.png");
INSERT INTO cms_investors_eng VALUES("3","titulo","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.","img2operating.png");
INSERT INTO cms_investors_eng VALUES("4","lorem ipsum 3","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.","img3operating.png");



DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_title_eng` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_url_eng` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("4","banners","banners","","","id","1");
INSERT INTO cms_menu VALUES("3","destacados","featured","featured","featured_eng","star","3");
INSERT INTO cms_menu VALUES("8","nosotros","about us","texts","texts_eng","hand_point","2");
INSERT INTO cms_menu VALUES("9","inversionistas","investors clients","investors","investors_eng","messenger","4");
INSERT INTO cms_menu VALUES("10","clientes operativos","operating clients","operating","operating_eng","briefcase","5");
INSERT INTO cms_menu VALUES("11","equipo","team","team","team_eng","satellite","6");
INSERT INTO cms_menu VALUES("12","nuestros proyectos","our projects","projects","projects_eng","file","7");
INSERT INTO cms_menu VALUES("13","SGA catalysta","SGA catalysta","catalysta/edit/1","catalysta_eng/edit/1","location","8");



DROP TABLE IF EXISTS cms_operating;

CREATE TABLE `cms_operating` (
  `operating_id` int(11) NOT NULL AUTO_INCREMENT,
  `operating_title` varchar(200) DEFAULT NULL,
  `operating_description` text,
  `operating_image` varchar(200) DEFAULT NULL,
  `operating_title_det` varchar(150) DEFAULT NULL,
  `operating_det1` varchar(100) DEFAULT NULL,
  `operating_det2` varchar(100) DEFAULT NULL,
  `operating_det3` varchar(100) DEFAULT NULL,
  `operating_pos` int(11) DEFAULT NULL,
  `operating_link` varchar(500) NOT NULL,
  PRIMARY KEY (`operating_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO cms_operating VALUES("1","titulo encabezado","descripcion prueba","Captura_de_pantalla_2012-08-21_a_la(s)_19.22_.28_.png","titulo detalle","detalle 1","detalle 2","detalle 3","0","#");
INSERT INTO cms_operating VALUES("2","titulo prueba","descripcion","imgbanner2.jpeg","titulo detalle","titulo detalle 1","","","","");
INSERT INTO cms_operating VALUES("3","titulo prueba completo","descripcion completa","Captura_de_pantalla_2012-08-21_a_la(s)_19.22_.28_1.png","titulo detalle","tiu1","titu2","titu3","","");
INSERT INTO cms_operating VALUES("4","sdf","sfd","img2operating.png","","","","","","");



DROP TABLE IF EXISTS cms_operating_eng;

CREATE TABLE `cms_operating_eng` (
  `operating_id` int(11) NOT NULL AUTO_INCREMENT,
  `operating_title` varchar(200) DEFAULT NULL,
  `operating_description` text,
  `operating_image` varchar(200) DEFAULT NULL,
  `operating_title_det` varchar(150) DEFAULT NULL,
  `operating_det1` varchar(100) DEFAULT NULL,
  `operating_det2` varchar(100) DEFAULT NULL,
  `operating_det3` varchar(100) DEFAULT NULL,
  `operating_pos` int(11) DEFAULT NULL,
  `operating_link` varchar(500) NOT NULL,
  PRIMARY KEY (`operating_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO cms_operating_eng VALUES("4","Operating Companies","We originate and manage operating company deals for various investor types.\n\nPost - closing, we are regularly asked to shore up management structure and talent. Initiating or improving efforts to expand into new markets or deepening penetration into existing markets is a recurring task for us. ","img2operating.png","","Strategic","Support","Outreach","","");
INSERT INTO cms_operating_eng VALUES("9","Apache Coal Services","Apache is our Colombia based partner for all of our coal dealings. They have over 40 years experience in the mining sector and have very strong and reputable connections with both the Colombian and US governments. They are a very strong local player in commodity supply and mining assets.","ACS_Logo.png","","Mining Assets","Geologists","Supply","","");
INSERT INTO cms_operating_eng VALUES("10","Envesta","Through Envesta we expand our outreach into Latin America\'s infrastructure, natural resources and energy sectors. As well as being a business structurer, they provide top legal services through their boutique legal consulting branch which counts with unique Latin American experience.","Logo_Envesta.png","","Projects","Business Structuring","Legal Advice","","www.envesta.co");



DROP TABLE IF EXISTS cms_projects;

CREATE TABLE `cms_projects` (
  `projects_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_image` varchar(100) DEFAULT NULL,
  `projects_title` varchar(150) DEFAULT NULL,
  `projects_description` varchar(800) DEFAULT NULL,
  `projects_link` varchar(500) NOT NULL,
  PRIMARY KEY (`projects_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO cms_projects VALUES("1","Captura_de_pantalla_2012-08-21_a_la(s)_19.22_.28_.png","Lorem ipsum dolor sit amet, consectet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis, sit amet viverra nisi ullamcorper in. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis, sit amet viverra nisi ullamcorper in. Etiam viverra tristique turpis, sit amet viverra nisi ullamcorper in. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc.","https://www.google.com.co/");
INSERT INTO cms_projects VALUES("3","IMG00009-20110630-1439.jpg","hola","hola que tal esto es una prueba","http://www.eltiempo.com");



DROP TABLE IF EXISTS cms_projects_eng;

CREATE TABLE `cms_projects_eng` (
  `projects_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_image` varchar(100) DEFAULT NULL,
  `projects_title` varchar(150) DEFAULT NULL,
  `projects_description` varchar(800) DEFAULT NULL,
  `projects_link` varchar(500) NOT NULL,
  PRIMARY KEY (`projects_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_projects_eng VALUES("1","MAS+.png","Mineral Reserve Selection & Procurement","SGA services often revolve around the selection and procurement of mineral concessions. A myriad of technical, logistical and commercial factors influence these decisions.","");
INSERT INTO cms_projects_eng VALUES("5","Logo.png","Small Hydro","The tributary system in Colombia is of such rich virtues that it affords constant natural water flows in different regions of the country allowing for the construction of numerous small hydroelectric plants. ","");
INSERT INTO cms_projects_eng VALUES("3","OCEANO_VERDE.png","Ocean Port Development","SGA is developing a Colombian port to facilitate the export of bulk minerals.  Project partners include Gerdau S.A. & Societedad Portuaria Regional de Cartegena. Infrastructure investments are critically needed to unlock Colombia\'s commercial potential.","");
INSERT INTO cms_projects_eng VALUES("4","RIO_VERDE.png","River Port Development","The navigable sections of the Magdalena River present a unique opportunity to successfully deliver bulk minerals to coastal ports for export. Barging operations represent the most cost effective solution.","");



DROP TABLE IF EXISTS cms_sga;

CREATE TABLE `cms_sga` (
  `sga_id` int(11) NOT NULL AUTO_INCREMENT,
  `sga_title_sup` varchar(40) DEFAULT NULL,
  `sga_text_sup` varchar(800) DEFAULT NULL,
  `sga_title_med` varchar(40) DEFAULT NULL,
  `sga_text_med` varchar(800) DEFAULT NULL,
  `sga_title_inf` varchar(40) DEFAULT NULL,
  `sga_text_inf` varchar(800) DEFAULT NULL,
  `sga_image_sup` varchar(150) DEFAULT NULL,
  `sga_image_inf` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`sga_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_sga VALUES("1","La Oportunidad","$5MM (US) is being sought for this project. A “cash on cash” annual return of 30% will be paid quarterly to investors. Shelton Graham Associates has created a trade finance shop, SGA Catalysta (SGAC) to provide senior secured operating capital to Colombian natural resources players. Investment security is provided through ownership of a security interest in the commodity produced, as well as through the ownership of a security interest in the mining concession. No exposure is taken on absent a fully collateralized position. No commodity risk is undertaken by SGAC or SGAC investors.","Quienes Somos","SGAC es una entidad financiera transaccional de la región andina que facilita la comercialización de recursos naturales que historicamente han tenido un estancamiento económico. SGAC pertenece a un grupo de compañias que trabajan para resolver y explotar el resago de la infraestructura regional. Existen reservas significativas y reconocidas de recursos naturales en la región que carecen del capital y la tecnología para ser comercializadas.","La Economía","Fitch’s 09 November, 2011 2:35 PM - Driven by domestic demand and a strong commodity export performance in 2011, Colombia’s economy has continued to grow solidly since Fitch Ratings upgraded the country’s foreign currency rating to ‘BBB-’ on June 22. Fitch expects Colombia’s growth rate to exceed 4% in 2012, despite risks that a global slowdown and comparatively lower commodity prices could trim GDP growth next year.","iStock_000019189169XSmall.jpg","iStock_000020925240XSmall.jpg");



DROP TABLE IF EXISTS cms_sga_eng;

CREATE TABLE `cms_sga_eng` (
  `sga_id` int(11) NOT NULL AUTO_INCREMENT,
  `sga_title_sup` varchar(40) DEFAULT NULL,
  `sga_text_sup` varchar(800) DEFAULT NULL,
  `sga_title_med` varchar(40) DEFAULT NULL,
  `sga_text_med` varchar(800) DEFAULT NULL,
  `sga_title_inf` varchar(40) DEFAULT NULL,
  `sga_text_inf` varchar(800) DEFAULT NULL,
  `sga_image_sup` varchar(150) DEFAULT NULL,
  `sga_image_inf` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`sga_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_sga_eng VALUES("1","Opportunity","$5MM (US) is being sought for this project. A “cash on cash” annual return of 30% will be paid quarterly to investors. Shelton Graham Associates has created a trade finance shop, SGA Catalysta (SGAC) to provide senior secured operating capital to Colombian natural resources players. Investment security is provided through ownership of a security interest in the commodity produced, as well as through the ownership of a security interest in the mining concession. No exposure is taken on absent a fully collateralized position. No commodity risk is undertaken by SGAC or SGAC investors.","Who We Are","SGAC is an Andean Regional trade finance shop that facilitates the commercialization of natural resources that have historically been economically stranded.\n\nSGAC is one of a cadre of companies that are working to solve and exploit the fiscal and physical infrastructure shortage in this region.\n\nSignificant and widely recognized natural resources reserves exist in the region that lack the capital and technology to be commercialized.\n","Colombia’s Econ","Fitch’s 09 November, 2011 2:35 PM - Driven by domestic demand and a strong commodity export performance in 2011, Colombia’s economy has continued to grow solidly since Fitch Ratings upgraded the country’s foreign currency rating to ‘BBB-’ on June 22. Fitch expects Colombia’s growth rate to exceed 4% in 2012, despite risks that a global slowdown and comparatively lower commodity prices could trim GDP growth next year.","graf1.jpeg","Captura_de_pantalla_2012-08-21_a_la(s)_19.22_.28_.png");



DROP TABLE IF EXISTS cms_submenu;

CREATE TABLE `cms_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_title` varchar(200) NOT NULL,
  `submenu_title_eng` varchar(200) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_url_eng` varchar(200) NOT NULL,
  `submenu_idmenu` int(1) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`submenu_id`),
  KEY `cms_submenu` (`submenu_idmenu`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO cms_submenu VALUES("7","todos","all","banners_mods","banners_mods_eng","4","2");
INSERT INTO cms_submenu VALUES("5","principal","main","banner","banner_eng","4","1");



DROP TABLE IF EXISTS cms_team;

CREATE TABLE `cms_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) DEFAULT NULL,
  `team_profession` varchar(100) DEFAULT NULL,
  `team_description` text,
  `team_image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO cms_team VALUES("1","Brayan","Managing Partner","Randy founded SGA and its predecessors in May of 2000. He has returned from a leave of abscence whereby he served full time as EVP-CFO of Shona Energy, an international oil and gas exploration and development company. From 1988 until 1994, Mr. Castleberry served as the President and CEO of Southern Pump and Tank, the nation’s largest liquid handling equipment distribution house. He established the Environmental Services Division in 1991, and led this company to unprecedented growth and returns on capital. From 1980 until 1988, Mr. Castleberry served in various senior management capacities with The Lee Moore Oil Company/The Pantry/Proctor-Wornom Group. His primary responsibilities were the petroleum operations and merger and acquisition activity. Mr. Castleberry and his team expedited eleven successful acquisitions, driving sales from $90,000,000 to $450,000,000. Prior to 1980, Mr. Castleberry was an active member of management in a small, family-owned downstream petroleum distribution operation. He has formerly served as a Director of the Society of Independent Gasoline Marketers of America, as a Board Member of the North Carolina Gasoline and Oil Inspection Board, Capital Markets committe of IPAA and Houston Producers Forum and as a Trustee of the Providence Day School in Charlotte, NC. Randy remains active in a number of American-International Chambers of Commerce.","Captura_de_pantalla_2012-08-23_a_la(s)_12.32_.47_.png");
INSERT INTO cms_team VALUES("2"," Andres Pardo","Director - Latin America","Mr. Pardo is a marketing and logistics professional with expertise in cross- cultural and international negotiations, with fluency in five languages and who has had international experience involving both educational and work trajectories in seven countries across five continents. His previous experience includes 5 years working as VP of Marketing at Central Papelera de Colombia, the second largest paper wholesaler in Colombia, where through his efforts profit margins were increased by 7% in a pure commodity market. Additionally, he spent 2 years as an expatriate Marketing Manager in the Mauritius branch of TX Direct New York, a credit card processing company where his team was expanded from 9 to 23 associates through the increased demand his reward programs generated. Andres holds a B.A. in Business Administration from the University of Miami as well as two Master Degrees from the University of Sydney - Australia in International Business and Logistics Management.","imgcaja2.png");
INSERT INTO cms_team VALUES("3","Dixon Fleming","Partner","Dixon Fleming oversees real estate activities for SGA. Dixon joins us from Casto (a leading US real estate developer/manager) where he became a partner in 2005. He has been based in Charlotte, North Carolina and is actively involved in the development and management of our southeast portfolio. Prior to joining Casto, he co-founded Core Point Capital, a private equity firm based in Charlotte that specializes in investments in distressed and turnaround opportunities. In addition to his activities for the fund, he was active in the management of several of the portfolio companies and remains a partner of the firm. Fleming is the former Chairman of Carolina Pottery, a concept and company he co-founded in 1983 and which was recognized as the 83rd fastest-growing private company in America in 1988. He founded Factory Stores of America, a NYSE-traded REIT, and served as its CEO until 1997. Fleming was named Entrepreneur of the Year in 1995 by Inc. Magazine and Ernst & Young. He received his B.S. in Business Administration from the University of North Carolina at Chapel Hill.","imgcaja3.png");
INSERT INTO cms_team VALUES("4","Brian Castleberry","Principal","\nBrian Castleberry\n\nPrincipal\n\nBrian’s previous experience includes 3 years working as an officer in the Charlotte, NC office of Blue Point Capital Partners, a middle market private equity firm, which followed years as an Analyst with Harris Williams & Co., an M&A advisory firm based in Richmond, Va. Most recently he spent a year pro bono in Rwanda and the Republic of Congo, assisting in the establishment of a microfinance bank in Brazzaville, Congo. Brian holds a B.A. in Economics and Mathematics from Washington and Lee University where he chaired the Williams Investment Society. Brian\'s internships during university included stints at the Shepard Project, a Boston, Mass. based economic development fund and the New York Stock Exchange.","imgcaja4.png");
INSERT INTO cms_team VALUES("5","Summer Cooper","Vice-president","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nAliquam at quam mi. Nam sit amet tristique nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.Aliquam at quam mi. Nam sit amet tristique nunc.","imgcaja5.png");
INSERT INTO cms_team VALUES("6","Samuel Cohen  ","Vice-president","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nAliquam at quam mi. Nam sit amet tristique nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.Aliquam at quam mi. Nam sit amet tristique nunc.","imgcaja6.png");



DROP TABLE IF EXISTS cms_team_eng;

CREATE TABLE `cms_team_eng` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) DEFAULT NULL,
  `team_profession` varchar(100) DEFAULT NULL,
  `team_description` text,
  `team_image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO cms_team_eng VALUES("1","Randy Castleberry","Managing Partner ","Randy founded SGA and its predecessors in May of 2000.  He has returned from a leave of abscence whereby he served full time as EVP-CFO of Shona Energy, an international oil and gas exploration and development company. From 1988 until 1994, Mr. Castleberry served as the President and CEO of Southern Pump and Tank, the nation’s largest liquid handling equipment distribution house.  He established the Environmental Services Division in 1991, and led this company to unprecedented growth and returns on capital.  From 1980 until 1988, Mr. Castleberry served in various senior management capacities with The Lee Moore Oil Company/The Pantry/Proctor-Wornom Group.  His primary responsibilities were the petroleum operations and merger and acquisition activity. Mr. Castleberry and his team expedited eleven successful acquisitions, driving sales from $90,000,000 to $450,000,000.  Prior to 1980, Mr. Castleberry was an active member of management in a small, family-owned downstream petroleum distribution operation.  He has formerly served as a Director of the Society of Independent Gasoline Marketers of America, as a Board Member of the North Carolina Gasoline and Oil Inspection Board, Capital Markets committe of IPAA and Houston Producers Forum and as a Trustee of the Providence Day School in Charlotte, NC. Randy remains active in a number of American-International Chambers of Commerce.","RC_photo.jpg");
INSERT INTO cms_team_eng VALUES("2"," Andres Pardo","Director - Latin America","Mr. Pardo is a marketing and logistics professional with expertise in cross- cultural and international negotiations, with fluency in five languages and who has had international experience involving both educational and work trajectories in seven countries across five continents. His previous experience includes 5 years working as VP of Marketing at Central Papelera de Colombia, the second largest paper wholesaler in Colombia, where through his efforts profit margins were increased by 7% in a pure commodity market. Additionally, he spent 2 years as an expatriate Marketing Manager in the Mauritius branch of TX Direct New York, a credit card processing company where his team was expanded from 9 to 23 associates through the increased demand his reward programs generated. Andres holds a B.A. in Business Administration from the University of Miami as well as two Master Degrees from the University of Sydney - Australia in International Business and Logistics Management.","imgcaja2.png");
INSERT INTO cms_team_eng VALUES("3","Monica Ordonez","General Counsel","Monica is the Managing Partner of Envesta, a boutique legal services firm through which she provides our legal advice. She is a bilingual Colombian attorney, expert in commercial law, with solid financial grounds and ample hydrocarbons and mining sectors experience. Professional law formation at Universidad Javeriana with further studies in Commercial Law at Universidad de Los Andes and financial training at Colegio de Estudios Superiores de Administraciones. Monica is a full service full-service lawyer that uses a systematic, multidisciplinary approach to finding creative, prudent and value generating business solutions, which optimize the client’s return on investment while minimizing risks.She possesses very successful experience in energy and natural resources, mergers and acquisitions, tax planning and international commerce, financing law and capital markets, dispute resolution, competition law, intellectual property, infrastructure and PPPs. real estate development projects and trust.\n\n\n","imgcaja3.png");
INSERT INTO cms_team_eng VALUES("4","Brian Castleberry","Principal","\nBrian Castleberry\n\nPrincipal\n\nBrian’s previous experience includes 3 years working as an officer in the Charlotte, NC office of Blue Point Capital Partners, a middle market private equity firm, which followed years as an Analyst with Harris Williams & Co., an M&A advisory firm based in Richmond, Va. Most recently he spent a year pro bono in Rwanda and the Republic of Congo, assisting in the establishment of a microfinance bank in Brazzaville, Congo. Brian holds a B.A. in Economics and Mathematics from Washington and Lee University where he chaired the Williams Investment Society. Brian\'s internships during university included stints at the Shepard Project, a Boston, Mass. based economic development fund and the New York Stock Exchange.","imgcaja4.png");
INSERT INTO cms_team_eng VALUES("5","Summer Cooper","Vice-president","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nAliquam at quam mi. Nam sit amet tristique nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.Aliquam at quam mi. Nam sit amet tristique nunc.","imgcaja5.png");
INSERT INTO cms_team_eng VALUES("6","Samuel Cohen  ","Vice-president","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.\n\nAliquam at quam mi. Nam sit amet tristique nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed libero eget tellus mattis tincidunt sed sit amet quam. Cras pharetra ornare libero at congue. Aliquam at quam mi. Nam sit amet tristique nunc. Etiam viverra tristique turpis.Aliquam at quam mi. Nam sit amet tristique nunc.","imgcaja6.png");



DROP TABLE IF EXISTS cms_texts;

CREATE TABLE `cms_texts` (
  `texts_id` int(11) NOT NULL AUTO_INCREMENT,
  `texts_text` text,
  PRIMARY KEY (`texts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_texts VALUES("1","ESTO ES UN TEXTO EN ESPAÑOL SGA provides corporate development services to private equity investors and natural resource companies across the Americas. Origination of investment opportunities, business development and capital markets activities are at our core. SGA activities complement managers seeking access to markets, deeper penetration into existing markets or capital. Generally, SGA efforts revolve around two specific initiatives:&nbsp;<div><br></div><div>1.	Originating appropriate specific target opportunities&nbsp;</div><div>2.	Developing capital structure/strategy and raising funds&nbsp;</div><div><br></div><div>The current economic cycle is presenting numerous management and advisory opportunities to us. These challenging times call for experienced and judicious leadership.&nbsp;</div><div><br></div><div>We originate transactions and manage assets for a variety of top tier PE shops, family offices and institutional investors.&nbsp;</div><div><br></div><div>Our purpose is to accelerate the making of intelligent investments on exceptional terms. To this end we are constructive in all our dealings with others. We represent an efficient and expeditious way for firms to access deals that are tightly consistent with their criteria. Identification, screening and exploiting these opportunities is our core skill set.\n\nSGA is also being called on more often in this economic cycle to provide distress or turnaround advice and/or management.&nbsp;</div><div><br></div><div>SGA senior leaders have served in the trenches of operating companies at senior levels in numerous industries. \nOur middle market experience is unsurpassed in these segments. We have grown companies quite dramatically and at times performed strategic downsizings.\n\nOur experience within diverse segments provides a favorable position from which to optomize the client\'s resources. We put our client organizations in the right place at the right time with the right resources.&nbsp;\n</div><div><br></div><div>We originate and manage operating company deals for various investor types.\nThese opportunities often require our accessing capital through a variety of channels including potential listing on an appropriate public exchange. Post - closing, we are regularly asked to shore up management structure and talent.</div><div><br></div><div>Initiating or improving efforts to expand into new markets or deepening penetration into existing markets is a recurring task for us. During the current economic cycle, turnaround management and distress management are fundamental components of our practice.\n\nEach senior SGA professional has a minimum of ten years operating company leadership experience.&nbsp;</div><div><br></div><div>We have experience representing global investors and lending institutions making investments and loans in the United States, as well as having managed a cadre of cross-border transactions.</div>");



DROP TABLE IF EXISTS cms_texts_eng;

CREATE TABLE `cms_texts_eng` (
  `texts_id` int(11) NOT NULL AUTO_INCREMENT,
  `texts_text` text,
  PRIMARY KEY (`texts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_texts_eng VALUES("1","\n\n\n<!--[if gte mso 9]><xml>\n <o:DocumentProperties>\n  <o:Revision>0</o:Revision>\n  <o:TotalTime>0</o:TotalTime>\n  <o:Pages>1</o:Pages>\n  <o:Words>103</o:Words>\n  <o:Characters>592</o:Characters>\n  <o:Company>Shelton Graham Associates</o:Company>\n  <o:Lines>4</o:Lines>\n  <o:Paragraphs>1</o:Paragraphs>\n  <o:CharactersWithSpaces>694</o:CharactersWithSpaces>\n  <o:Version>14.0</o:Version>\n </o:DocumentProperties>\n <o:OfficeDocumentSettings>\n  <o:AllowPNG></o:AllowPNG>\n </o:OfficeDocumentSettings>\n</xml><![endif]-->\n\n<!--[if gte mso 9]><xml>\n <w:WordDocument>\n  <w:View>Normal</w:View>\n  <w:Zoom>0</w:Zoom>\n  <w:TrackMoves></w:TrackMoves>\n  <w:TrackFormatting></w:TrackFormatting>\n  <w:PunctuationKerning></w:PunctuationKerning>\n  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\n  <w:DoNotPromoteQF></w:DoNotPromoteQF>\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\n  <w:Compatibility>\n   <w:BreakWrappedTables></w:BreakWrappedTables>\n   <w:SnapToGridInCell></w:SnapToGridInCell>\n   <w:WrapTextWithPunct></w:WrapTextWithPunct>\n   <w:UseAsianBreakRules></w:UseAsianBreakRules>\n   <w:DontGrowAutofit></w:DontGrowAutofit>\n   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>\n   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>\n   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>\n   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>\n   <w:UseFELayout></w:UseFELayout>\n  </w:Compatibility>\n  <m:mathPr>\n   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>\n   <m:brkBin m:val=\"before\"></m:brkBin>\n   <m:brkBinSub m:val=\"--\"></m:brkBinSub>\n   <m:smallFrac m:val=\"off\"></m:smallFrac>\n   <m:dispDef></m:dispDef>\n   <m:lMargin m:val=\"0\"></m:lMargin>\n   <m:rMargin m:val=\"0\"></m:rMargin>\n   <m:defJc m:val=\"centerGroup\"></m:defJc>\n   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>\n   <m:intLim m:val=\"subSup\"></m:intLim>\n   <m:naryLim m:val=\"undOvr\"></m:naryLim>\n  </m:mathPr></w:WordDocument>\n</xml><![endif]--><!--[if gte mso 9]><xml>\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"\n  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"\n  LatentStyleCount=\"276\">\n  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"10\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"11\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"22\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"20\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"59\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Table Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"34\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"29\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"30\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"19\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"21\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"31\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"32\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"33\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"37\" Name=\"Bibliography\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\"></w:LsdException>\n </w:LatentStyles>\n</xml><![endif]-->\n\n<!--[if gte mso 10]>\n<style>\n /* Style Definitions */\ntable.MsoNormalTable\n	{mso-style-name:\"Table Normal\";\n	mso-tstyle-rowband-size:0;\n	mso-tstyle-colband-size:0;\n	mso-style-noshow:yes;\n	mso-style-priority:99;\n	mso-style-parent:\"\";\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\n	mso-para-margin:0in;\n	mso-para-margin-bottom:.0001pt;\n	mso-pagination:widow-orphan;\n	font-size:12.0pt;\n	font-family:Cambria;\n	mso-ascii-font-family:Cambria;\n	mso-ascii-theme-font:minor-latin;\n	mso-hansi-font-family:Cambria;\n	mso-hansi-theme-font:minor-latin;}\n</style>\n<![endif]-->\n\n\n\n<!--StartFragment-->\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 10pt; \"><span news=\"\" gothic=\"\" mt\";=\"\" mso-fareast-font-family:\"arial=\"\" unicode=\"\" ms\";mso-bidi-font-family:\"euphemia=\"\" ucas\";=\"\" color:#262626\"=\"\">SGA provides corporate&nbsp;development&nbsp;services to private\nequity investors and natural resource&nbsp;companies across the Americas.\nOrigination of investment opportunities, business development and capital\nmarkets activities are at our core.&nbsp;&nbsp;SGA activities complement\nmanagers seeking access to markets, deeper penetration into existing markets or\ncapital.&nbsp; Generally, SGA efforts revolve around two specific\ninitiatives:&nbsp;<o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; \"><!--[if !supportLists]--><span news=\"\" gothic=\"\" mt\";mso-fareast-font-family:\"news=\"\" mt\";=\"\" mso-bidi-font-family:\"news=\"\" mt\";color:#262626\"=\"\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span><!--[endif]--><span news=\"\" gothic=\"\" mt\";mso-fareast-font-family:\"arial=\"\" unicode=\"\" ms\";mso-bidi-font-family:=\"\" \"euphemia=\"\" ucas\";color:#262626\"=\"\">Originating appropriate&nbsp;specific target\nopportunities</span><span news=\"\" gothic=\"\" mt\";=\"\" mso-fareast-font-family:\"arial=\"\" unicode=\"\" ms\";mso-bidi-font-family:\"euphemia=\"\" ucas\";=\"\" color:#262626\"=\"\"><o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; \"><!--[if !supportLists]--><span news=\"\" gothic=\"\" mt\";mso-fareast-font-family:\"news=\"\" mt\";=\"\" mso-bidi-font-family:\"news=\"\" mt\";color:#262626\"=\"\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span><!--[endif]--><span news=\"\" gothic=\"\" mt\";mso-fareast-font-family:\"arial=\"\" unicode=\"\" ms\";mso-bidi-font-family:=\"\" \"euphemia=\"\" ucas\";color:#262626\"=\"\">Developing capital structure/strategy and\nraising funds</span>&nbsp;</p><p class=\"MsoNormal\" style=\"font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; margin-left: 0.5in; \"><span style=\"color: rgb(38, 38, 38); font-family: \'News Gothic MT\'; font-size: 14pt; \"><br></span></p>\n\n<p class=\"MsoNormal\" style=\"font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; \"><br></p>\n\n<!--EndFragment-->\n\n\n\n\n\n<!--[if gte mso 9]><xml>\n <o:DocumentProperties>\n  <o:Revision>0</o:Revision>\n  <o:TotalTime>0</o:TotalTime>\n  <o:Pages>1</o:Pages>\n  <o:Words>104</o:Words>\n  <o:Characters>595</o:Characters>\n  <o:Company>Shelton Graham Associates</o:Company>\n  <o:Lines>4</o:Lines>\n  <o:Paragraphs>1</o:Paragraphs>\n  <o:CharactersWithSpaces>698</o:CharactersWithSpaces>\n  <o:Version>14.0</o:Version>\n </o:DocumentProperties>\n <o:OfficeDocumentSettings>\n  <o:AllowPNG></o:AllowPNG>\n </o:OfficeDocumentSettings>\n</xml><![endif]-->\n\n<!--[if gte mso 9]><xml>\n <w:WordDocument>\n  <w:View>Normal</w:View>\n  <w:Zoom>0</w:Zoom>\n  <w:TrackMoves></w:TrackMoves>\n  <w:TrackFormatting></w:TrackFormatting>\n  <w:PunctuationKerning></w:PunctuationKerning>\n  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\n  <w:DoNotPromoteQF></w:DoNotPromoteQF>\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\n  <w:Compatibility>\n   <w:BreakWrappedTables></w:BreakWrappedTables>\n   <w:SnapToGridInCell></w:SnapToGridInCell>\n   <w:WrapTextWithPunct></w:WrapTextWithPunct>\n   <w:UseAsianBreakRules></w:UseAsianBreakRules>\n   <w:DontGrowAutofit></w:DontGrowAutofit>\n   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>\n   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>\n   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>\n   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>\n   <w:UseFELayout></w:UseFELayout>\n  </w:Compatibility>\n  <m:mathPr>\n   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>\n   <m:brkBin m:val=\"before\"></m:brkBin>\n   <m:brkBinSub m:val=\"--\"></m:brkBinSub>\n   <m:smallFrac m:val=\"off\"></m:smallFrac>\n   <m:dispDef></m:dispDef>\n   <m:lMargin m:val=\"0\"></m:lMargin>\n   <m:rMargin m:val=\"0\"></m:rMargin>\n   <m:defJc m:val=\"centerGroup\"></m:defJc>\n   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>\n   <m:intLim m:val=\"subSup\"></m:intLim>\n   <m:naryLim m:val=\"undOvr\"></m:naryLim>\n  </m:mathPr></w:WordDocument>\n</xml><![endif]--><!--[if gte mso 9]><xml>\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"\n  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"\n  LatentStyleCount=\"276\">\n  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"10\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"11\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"22\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"20\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"59\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Table Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"34\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"29\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"30\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"19\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"21\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"31\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"32\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"33\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"37\" Name=\"Bibliography\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\"></w:LsdException>\n </w:LatentStyles>\n</xml><![endif]-->\n\n<!--[if gte mso 10]>\n<style>\n /* Style Definitions */\ntable.MsoNormalTable\n	{mso-style-name:\"Table Normal\";\n	mso-tstyle-rowband-size:0;\n	mso-tstyle-colband-size:0;\n	mso-style-noshow:yes;\n	mso-style-priority:99;\n	mso-style-parent:\"\";\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\n	mso-para-margin:0in;\n	mso-para-margin-bottom:.0001pt;\n	mso-pagination:widow-orphan;\n	font-size:12.0pt;\n	font-family:Cambria;\n	mso-ascii-font-family:Cambria;\n	mso-ascii-theme-font:minor-latin;\n	mso-hansi-font-family:Cambria;\n	mso-hansi-theme-font:minor-latin;}\n</style>\n<![endif]-->\n\n\n\n<!--StartFragment-->\n\n<p class=\"MsoNormal\" style=\"font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; margin-bottom: 10pt; \">\n\n\n\n\n\n\n<!--[if gte mso 9]><xml>\n <o:DocumentProperties>\n  <o:Revision>0</o:Revision>\n  <o:TotalTime>0</o:TotalTime>\n  <o:Pages>1</o:Pages>\n  <o:Words>104</o:Words>\n  <o:Characters>596</o:Characters>\n  <o:Company>Shelton Graham Associates</o:Company>\n  <o:Lines>4</o:Lines>\n  <o:Paragraphs>1</o:Paragraphs>\n  <o:CharactersWithSpaces>699</o:CharactersWithSpaces>\n  <o:Version>14.0</o:Version>\n </o:DocumentProperties>\n <o:OfficeDocumentSettings>\n  <o:AllowPNG></o:AllowPNG>\n </o:OfficeDocumentSettings>\n</xml><![endif]-->\n\n<!--[if gte mso 9]><xml>\n <w:WordDocument>\n  <w:View>Normal</w:View>\n  <w:Zoom>0</w:Zoom>\n  <w:TrackMoves></w:TrackMoves>\n  <w:TrackFormatting></w:TrackFormatting>\n  <w:PunctuationKerning></w:PunctuationKerning>\n  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\n  <w:DoNotPromoteQF></w:DoNotPromoteQF>\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\n  <w:Compatibility>\n   <w:BreakWrappedTables></w:BreakWrappedTables>\n   <w:SnapToGridInCell></w:SnapToGridInCell>\n   <w:WrapTextWithPunct></w:WrapTextWithPunct>\n   <w:UseAsianBreakRules></w:UseAsianBreakRules>\n   <w:DontGrowAutofit></w:DontGrowAutofit>\n   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>\n   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>\n   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>\n   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>\n   <w:UseFELayout></w:UseFELayout>\n  </w:Compatibility>\n  <m:mathPr>\n   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>\n   <m:brkBin m:val=\"before\"></m:brkBin>\n   <m:brkBinSub m:val=\"--\"></m:brkBinSub>\n   <m:smallFrac m:val=\"off\"></m:smallFrac>\n   <m:dispDef></m:dispDef>\n   <m:lMargin m:val=\"0\"></m:lMargin>\n   <m:rMargin m:val=\"0\"></m:rMargin>\n   <m:defJc m:val=\"centerGroup\"></m:defJc>\n   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>\n   <m:intLim m:val=\"subSup\"></m:intLim>\n   <m:naryLim m:val=\"undOvr\"></m:naryLim>\n  </m:mathPr></w:WordDocument>\n</xml><![endif]--><!--[if gte mso 9]><xml>\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"\n  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"\n  LatentStyleCount=\"276\">\n  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"10\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"11\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"22\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"20\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"59\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Table Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"34\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"29\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"30\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"19\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"21\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"31\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"32\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"33\" SemiHidden=\"false\"\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"37\" Name=\"Bibliography\"></w:LsdException>\n  <w:LsdException Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\"></w:LsdException>\n </w:LatentStyles>\n</xml><![endif]-->\n\n<!--[if gte mso 10]>\n<style>\n /* Style Definitions */\ntable.Mso--></p>");



DROP TABLE IF EXISTS cms_user;

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","7731363ed2ea93c7593cb363e932ae5c","cms@imaginamos.com","admin");
INSERT INTO cms_user VALUES("9","admin sga","01f4f044f2f454e526249683adf516c9","ap@sheltongraham.com","");
INSERT INTO cms_user VALUES("10","admin sga","21232f297a57a5a743894a0e4a801fc3","rc@sheltongraham.com","");



