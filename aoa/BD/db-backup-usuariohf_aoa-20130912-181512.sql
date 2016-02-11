SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE `aseguradoras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicios_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `orden` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aseguradoras_FKIndex1` (`servicios_id`),
  CONSTRAINT `aseguradoras_ibfk_1` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO aseguradoras VALUES("5","1","ALLIANZ","original_5.jpg","0");
INSERT INTO aseguradoras VALUES("7","1","MAPFRE","original_7.png","0");
INSERT INTO aseguradoras VALUES("8","2","prueba","original_8.jpg","0");
INSERT INTO aseguradoras VALUES("9","2","Project iIpsun","original_9.png","0");
INSERT INTO aseguradoras VALUES("11","1","RSA","original_11.png","0");
INSERT INTO aseguradoras VALUES("13","1","LIBERTY","original_13.png","0");

CREATE TABLE `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
  `config_date` datetime DEFAULT NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) DEFAULT NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) DEFAULT NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) DEFAULT NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cms_configuration VALUES("1","2012-07-25 12:10:42","http://repositorio.imaginamos.com.co/HF/AOA_prog/cms/","http://repositorio.imaginamos.com.co/HF/AOA_prog/","cms@imaginamos.com","imaginamos.com");

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(40) DEFAULT NULL,
  `menu_url` varchar(80) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("1","Home","modules/home/view","administrator");
INSERT INTO cms_menu VALUES("2","¿Quiénes Somos?","modules/quienes_somos/view","clipboard");
INSERT INTO cms_menu VALUES("3","Servicios","modules/servicios/view","briefcase");
INSERT INTO cms_menu VALUES("4","Galeria","modules/galeria_de_fotos/view","pictures_folder");
INSERT INTO cms_menu VALUES("5","Front PQR","modules/pqr_front/view","briefcase");
INSERT INTO cms_menu VALUES("6","PQR registro","modules/pqr_registro/view","clipboard");
INSERT INTO cms_menu VALUES("7","FAQ","modules/faq/view","checkmark");
INSERT INTO cms_menu VALUES("8","Oficinas","modules/oficinas/view","usb");

CREATE TABLE `cms_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username_user` varchar(60) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `rol_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO cms_user VALUES("1","administrador","475266560c6d9f03f9ec80340218fa4c","cms@imaginamos.com","admin");
INSERT INTO cms_user VALUES("2","PQR","475266560c6d9f03f9ec80340218fa4c","pqr@aoa.com","pqr");

CREATE TABLE `condiciones_de_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aseguradoras_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` text,
  `datos_de_contacto_1` varchar(255) DEFAULT NULL,
  `datos_de_contacto_2` varchar(255) DEFAULT NULL,
  `texto_documentacion_requerida` text,
  PRIMARY KEY (`id`),
  KEY `condiciones_de_servicio_FKIndex1` (`aseguradoras_id`),
  CONSTRAINT `condiciones_de_servicio_ibfk_1` FOREIGN KEY (`aseguradoras_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO condiciones_de_servicio VALUES("1","5","ALLIANZ","<p>La aseguradora pone a disposici&oacute;n del asegurado un vehiculo de reemplazo por 7 o 10 d&iacute;as seg&uacute;n la p&oacute;liza contratada.</p>
\n","Call AOA: (1) 5897547","# de asistencia: 265","<p>Cedula original<br />
\nLicencia vigente<br />
\nFirma de contrato<br />
\nConstituir garant&iacute;a ( Tarjeta de cr&eacute;dito con cupo disponible)<br />
\nOrden de Servicio (el vehiculo debe haber ingresado a taller)</p>
\n");
INSERT INTO condiciones_de_servicio VALUES("3","7","MAPFRE","<p>La aseguradora pone a disposici&oacute;n&nbsp; del asegurado un vehiculo de reemplazo por 7 d&iacute;as&nbsp; para perdidas parciales y 15 d&iacute;as para p&eacute;rdida total.</p>
\n","Call AOA: 5897848","# de asistencia: 624","<p>Cedula original</p>
\n
\n<p>Licencia vigente</p>
\n
\n<p>Firma de contrato</p>
\n
\n<p>Constituir garant&iacute;a ( Tarjeta de cr&eacute;dito con cupo disponible)</p>
\n");
INSERT INTO condiciones_de_servicio VALUES("4","8","prueba","<p>prueba de texto descriptivo&nbsp;</p>
\n","Call AOA: 5897547","# de asistencia: 265","<ul>
\n	<li>documentacion requerida&nbsp;</li>
\n	<li>otra m&aacute;s</li>
\n	<li>denuevo</li>
\n</ul>
\n");
INSERT INTO condiciones_de_servicio VALUES("5","9","otra más","<p>prueba de condiciones</p>
\n","Call AOA: 5897547","# de asistencia: 265","<p>otra m&aacute;s</p>
\n");
INSERT INTO condiciones_de_servicio VALUES("6","13","LIBERTY","<p>La aseguradora pone a disposici&oacute;n&nbsp; del asegurado un vehiculo de reemplazo por 7&nbsp; d&iacute;as con limite de kilometraje.</p>
\n","Call AOA: 5897545	","# de asistencia: 224","<p>Cedula original</p>
\n
\n<p>Licencia vigente</p>
\n
\n<p>Firma de contrato</p>
\n
\n<p>Constituir garant&iacute;a ( Tarjeta de cr&eacute;dito con cupo disponible)</p>
\n");

CREATE TABLE `condiciones_del_servicio_default` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicios_id` int(10) unsigned NOT NULL,
  `texto_descriptivo` text,
  `datos_de_contacto_1` varchar(255) DEFAULT NULL,
  `datos_de_contacto_2` varchar(255) DEFAULT NULL,
  `texto_documentacion_requerida` text,
  PRIMARY KEY (`id`),
  KEY `condiciones_del_servicio_default_FKIndex1` (`servicios_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO condiciones_del_servicio_default VALUES("1","6","<p>preuba de texto</p>
\n","Call AOA: 5897547","# de asistencia: 265","<p>texto de prueba texto de prueba</p>
\n");

CREATE TABLE `descripcion_oficina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oficinas_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `linea1` varchar(255) DEFAULT NULL,
  `linea2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `descripcion_oficina_FKIndex1` (`oficinas_id`),
  CONSTRAINT `descripcion_oficina_ibfk_1` FOREIGN KEY (`oficinas_id`) REFERENCES `oficinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO descripcion_oficina VALUES("1","1","MORATO","TEL : 7560510","CRA 69 B N. 98 A 10 MORATO");
INSERT INTO descripcion_oficina VALUES("2","1","PRADO","TEL:6152879 EXT 115","AUTOPISTA NORTE 128 A-41 PISO 2");
INSERT INTO descripcion_oficina VALUES("3","1","TOBERIN","TEL:6709833 EXT 106","CARRERA 19 No 164-36 PISO 2");
INSERT INTO descripcion_oficina VALUES("4","1","MADELENA","TEL: 7465500","AUTOPISTA SUR N° 70-03 (AUTOSTOCK)");
INSERT INTO descripcion_oficina VALUES("5","2","CENTRO COMERCIAL SANTAFÉ LOCAL 5202","TEL : 2629221/320 272 5927","CARRERA 43 A N. 7 SUR 107");
INSERT INTO descripcion_oficina VALUES("6","3","CENTRO COMERCIAL MIRAMAR","TEL : 3203446993","Cra. 43 N. 99 - 50 local LE16");
INSERT INTO descripcion_oficina VALUES("7","4","EDIFICIO TORRE MARDEL 703","TEL:3202334950","CRA 31 No. 51-74");
INSERT INTO descripcion_oficina VALUES("8","5","EDIFICIO TORRE CENTRAL LOCAL 107","TEL:3202334965","CARRERA 10 N. 17 - 55");
INSERT INTO descripcion_oficina VALUES("9","6","CENTRO COMERCIAL PALMETO PLAZA LOCAL 106","TEL : 4058649 - 320 302 0444","CALLE 9 CON CRA. 50");
INSERT INTO descripcion_oficina VALUES("10","7","HOTEL CASA MORALES","TEL:3104766648","CRA 3 N. 3 - 47");

CREATE TABLE `destacados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO destacados VALUES("1","Vehículo de reemplazo","(Servicio que se presta a los clientes de las aseguradoras cuando tienen un siniestro)","original_1.jpg","original2_1.jpg");
INSERT INTO destacados VALUES("2","AOA Car sharing ","Lorem Ipsum","original_2.jpg","original2_2.jpg");
INSERT INTO destacados VALUES("3","Manejo y administración de flotas ","Lorem Ipsum","original_3.jpg","original2_3.jpg");
INSERT INTO destacados VALUES("4","DPA ( drivig patterns análisis) ","Dispositivo diseñado para el control de flotas y medición de parámetros","original_4.jpg","original2_4.jpg");

CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO faq VALUES("1","¿El vehiculo de reemplazo se encuentra asegurado?","<p>R// El Veh&iacute;culo cuenta con una P&oacute;liza Todo riesgo.</p>
\n");
INSERT INTO faq VALUES("2","¿En caso de siniestro o accidente con el vehículo sustituto, que debo hacer?","<p>R// Debe reportarlo ante AOA y la Aseguradora dentro de las 2 horas siguientes al incidente, de acuerdo a lo estipulado en el contrato.</p>
\n");
INSERT INTO faq VALUES("3","¿Por qué tan pocos días de servicio, si la reparación del vehículo propio dura más tiempo?","<p>R// Las condiciones de prestaci&oacute;n del servicio est&aacute;n sujetas a lo contratado por poliza. Estos tiempos son estipulados por la aseguradora.</p>
\n");
INSERT INTO faq VALUES("4","¿puedo tener el vehículo sustituto hasta que me entreguen el mio de reparación?","<p>R// No. Solo durante el tiempo pactado en su poliza de seguro.</p>
\n");
INSERT INTO faq VALUES("5","¿Por qué tengo que constituir una garantía?","<p>R// Las garant&iacute;as se constituyen con el fin de amparar los riesgos no cubiertos por las p&oacute;lizas de seguros y las sanciones por incumplimiento del contrato.</p>
\n");
INSERT INTO faq VALUES("6","¿Puedo tomar el servicio sin constituir garantía?","<p>R// No es posible debido a que es una condici&oacute;n estipulada en el contrato.</p>
\n");
INSERT INTO faq VALUES("7","¿Para que necesitan el numero de una cuenta de ahorros o corriente? ","<ul>
\n	<li>R// En caso de que se tenga que afectar la garant&iacute;a el dinero restante se le&nbsp;devolver&aacute;&nbsp;a este numero de cuenta.</li>
\n</ul>
\n
\n<p>&nbsp;</p>
\n");
INSERT INTO faq VALUES("8","¿Puedo devolver el vehículo antes de tiempo?","<ul>
\n	<li>R//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si. lo puede realizar dentro de los horarios establecidos por cada oficina.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
\n</ul>
\n");
INSERT INTO faq VALUES("9","¿En que dirección puedo recoger el vehículo?","<ul>
\n	<li>R// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En el lugar indicado por el call center al momento de adjudicaci&oacute;n de&nbsp; la&nbsp; cita.</li>
\n</ul>
\n");

CREATE TABLE `galeria_de_fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO galeria_de_fotos VALUES("1","Project iIpsun","<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>
\n","original_1.png");
INSERT INTO galeria_de_fotos VALUES("2","Project iIpsun","<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>
\n","original_2.png");
INSERT INTO galeria_de_fotos VALUES("3","Project iIpsun","<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere. Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.</p>
\n","original_3.png");
INSERT INTO galeria_de_fotos VALUES("6","Project iIpsun","<p>asdf asdf adsf asdf adsf adf ad fadf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf asdf asd asdf asd asd fasdf asd asdf&nbsp;</p>
\n","original_6.png");
INSERT INTO galeria_de_fotos VALUES("7","Project iIpsun","<p>asdf asdf adsf asdf adsf adf ad fadf asdf asdf asdf asdf asdf adf asdf asdf asdf asdf asdf asdf asdf asd asdf asd asd fasdf asd asdf&nbsp;</p>
\n","original_7.png");
INSERT INTO galeria_de_fotos VALUES("8","Project iIpsun","<p>Lorem Ipsum</p>
\n
\n<p>&nbsp;</p>
\n","original_8.png");

CREATE TABLE `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_mensaje` text,
  `link` varchar(255) DEFAULT NULL,
  `imagen_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO home VALUES("1","AOA es una compañía de servicios en administración y asesoramiento integral para el manejo de flotas de vehículos, que ofrece soluciones de movilidad diseñadas para cada sector de la economía.","http://www.oureasyprojects.net/imaginamos/TimeLogs.aspx","home_1.mov");

CREATE TABLE `menu_intranet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `link` char(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO menu_intranet VALUES("1","Administración","");
INSERT INTO menu_intranet VALUES("2","Control","");
INSERT INTO menu_intranet VALUES("3","Correo","http://correo.aoacolombia.com/");

CREATE TABLE `oficinas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO oficinas VALUES("1","Bogotá");
INSERT INTO oficinas VALUES("2","Medellín");
INSERT INTO oficinas VALUES("3","Barranquilla");
INSERT INTO oficinas VALUES("4","Bucaramanga");
INSERT INTO oficinas VALUES("5","Pereira");
INSERT INTO oficinas VALUES("6","Cali");
INSERT INTO oficinas VALUES("7","Ibagué");

CREATE TABLE `pqr_front` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_principal` varchar(555) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto_descriptivo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_solicitud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO pqr_front VALUES("1","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare.","Seguimiento de PQR","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare.","original_1.jpg","original2_1.jpg");

CREATE TABLE `pqr_registro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `cedula` double(25,0) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `aseguradora` varchar(255) NOT NULL,
  `tipo_de_solicitud` varchar(255) NOT NULL,
  `comentarios_texto` text NOT NULL,
  `estado` enum('recibida','tramite','resuelta') NOT NULL DEFAULT 'recibida',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO pqr_registro VALUES("1","Felipe","80178104","cra 14 b 161 54","felipe@cogroupsas.com","skm361","5","PETICIÓN","Comentarios1","resuelta");
INSERT INTO pqr_registro VALUES("2","John Reyes","11186736","Carrera Con Calle","jfreyesve@gmail.com","BED066","5","8","NINGUNO ES SOLO PRUEBA","tramite");

CREATE TABLE `quienes_somos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO quienes_somos VALUES("1","<p>AOA es una compa&ntilde;&iacute;a fundada en el 2007 con el objetivo de ofrecer soluciones integrales de movilidad por medio de servicios de administraci&oacute;n y asesoramiento en manejo de Flotas de Veh&iacute;culos.</p>
\n
\n<p><br />
\n&nbsp;</p>
\n
\n<p>La filosof&iacute;a de AOA se basa en gestionar el mantenimiento y la administraci&oacute;n de una flota de veh&iacute;culos, eliminando todas las actividades no productivas, as&iacute; como los costos operativos que conlleva la gesti&oacute;n de la misma tanto externamente como internamente.</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>AOA cuenta con m&aacute;s de 700 veh&iacute;culos propios para mas de e 510 mil usuarios con el servicio de veh&iacute;culo de remplazo a nivel nacional y tiene presencia en las principales ciudades del pa&iacute;s: Bogot&aacute;, Medell&iacute;n, Cali, Bucaramanga, Barranquilla, Ibagu&eacute; y el eje Cafetero.</p>
\n","original_1.jpg","original2_1.jpg");

CREATE TABLE `respuestas_pqr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pqr_registro_id` int(10) unsigned NOT NULL,
  `texto` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`pqr_registro_id`,`fecha`),
  KEY `respuestas_pqr_FKIndex1` (`pqr_registro_id`),
  CONSTRAINT `respuestas_pqr_ibfk_1` FOREIGN KEY (`pqr_registro_id`) REFERENCES `pqr_registro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO respuestas_pqr VALUES("1","1","REGISTRADA","2013-08-02 18:18:25");
INSERT INTO respuestas_pqr VALUES("2","1","EN TRÁMITE","2013-08-02 18:18:44");
INSERT INTO respuestas_pqr VALUES("17","1","<p>Respuesta</p>
\n","2013-08-08 13:13:03");
INSERT INTO respuestas_pqr VALUES("18","2","REGISTRADA","2013-08-14 09:07:29");
INSERT INTO respuestas_pqr VALUES("19","2","EN TRÁMITE","2013-08-14 09:08:55");

CREATE TABLE `servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `visible_condiciones` int(10) unsigned DEFAULT NULL,
  `visible_contacto` int(10) unsigned DEFAULT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO servicios VALUES("1","Vehiculo de reemplazo","<p>AOA pone a disposici&oacute;n del asegurado un veh&iacute;culo de reemplazo por un per&iacute;odo determinado, del cual podr&aacute; disponer en el momento en que se autorice el siniestro por parte de la compa&ntilde;&iacute;a de seguros. La compa&ntilde;&iacute;a cuenta m&aacute;s de 510 mil usuarios con el servicio de veh&iacute;culo de remplazo a nivel nacional y tiene presencia en las principales ciudades del pa&iacute;s: Bogot&aacute;, Medell&iacute;n, Cali, Bucaramanga, Barranquilla, Ibagu&eacute; y el Eje Cafetero. Para prestar este servicio AOA cuenta con su propio call center, el cual se encarga de contactar a los usuarios para coordinar y gestionar la entrega y devoluci&oacute;n de los veh&iacute;culos a nivel nacional.</p>
\n","original_1.jpg","1","1","1");
INSERT INTO servicios VALUES("2","DPA","<p>AOA desarroll&oacute; un dispositivo electr&oacute;nico Driving Patterns Analysis &ndash; DPA dise&ntilde;ado para:</p>
\n
\n<p>Elementos de Seguridad: ubicaci&oacute;n, inmovilizaci&oacute;n remota, bot&oacute;n de p&aacute;nico.<br />
\nReconstrucci&oacute;n de Accidentes.<br />
\nCaptura, procesamiento y transmisi&oacute;n de par&aacute;metros de conducci&oacute;n.<br />
\nControl de flota.</p>
\n
\n<p>Para esto contamos con un software especializado en l&iacute;nea para el control y el manejo de flota que le permite el monitoreo permanente de todos sus veh&iacute;culos.</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>FUNCIONAMIENTO</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>En tiempo real el dispositivo captura todos los par&aacute;metros y los graba en una memoria interna.</p>
\n
\n<p>Cada vez que se requiera o cuando la memoria del dispositivo se llene en un 75%, el dispositivo de manera inal&aacute;mbrica a trav&eacute;s de la red GPRS descarga toda la informaci&oacute;n almacenada a una plataforma para el procesamiento de los datos.</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>El dispositivo enviar&aacute; se&ntilde;ales de p&aacute;nico a la plataforma en caso de accidentes, robo, SOS enviado por el conductor, exceso de velocidad preestablecido en zona rural/urbana, exceder el limite de zona geogr&aacute;fica de desplazamiento permitida, hora de desplazamiento diferente a la programada.</p>
\n","original_2.jpg","1","1","2");
INSERT INTO servicios VALUES("6","AOA Car sharing ","<p>El Car Sharing o &ldquo;Carro-Compartido&rdquo; es una alternativa plantada como un servicio que nace de la necesidad de reducir el parque automotor privado que es responsable de un gran porcentaje de las&nbsp; emisiones de CO2.</p>
\n
\n<p>&nbsp;</p>
\n
\n<div>
\n<p>Para&nbsp; acceder al servicio&nbsp; es indispensable ser miembro&nbsp; de la comunidad AOA Car Sharing, lo que permite hacer uso de la tarjeta chip para&nbsp; acceder a la flota compartida. Para reservar el vehiculo disponemos de una plataforma web y un call center para reservar el servicio .</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>AOA&nbsp; cuenta con parqueaderos en determinados lugares de la ciudad&nbsp; en los que el usuario, por medio de&nbsp; su tarjeta chip asignada, podr&aacute;&nbsp; abrir el carro&nbsp; y hacer uso del mismo.</p>
\n</div>
\n","original_6.jpg","1","1","5");
INSERT INTO servicios VALUES("7","Manejo de Flotas","<p>Gestionar una flota requiere un rubro importante dentro de las organizaciones para su control y&nbsp; mantenimiento. Por tal raz&oacute;n AOA&nbsp; cuenta&nbsp; con un servicio especializado&nbsp; que le&nbsp; permite encargarse de la gesti&oacute;n eficiente de las necesidades concretas de cada flota adapt&aacute;ndose a las necesidades de cada compa&ntilde;&iacute;a.</p>
\n","original_7.jpg","1","1","3");

SET FOREIGN_KEY_CHECKS=1;