<?php
$queryCreateTable[0] = "
CREATE TABLE cms_headhunter_config (
headhunter_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
headhunter_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
headhunter_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (headhunter_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_headhunter (
headhunter_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
headhunter_titulo1 text NOT NULL COMMENT 'Titulo Consulting',
headhunter_contenido1 text NOT NULL COMMENT 'Contenido Consulting',
headhunter_enlace1 varchar(250) NOT NULL COMMENT 'Enlace Consulting',
headhunter_imagen1 varchar(250) NOT NULL COMMENT 'Imagen Consulting',
headhunter_titulo2 text NOT NULL COMMENT 'Titulo Foodservice',
headhunter_contenido2 text NOT NULL COMMENT 'Contenido Foodservice',
headhunter_enlace2 varchar(250) NOT NULL COMMENT 'Enlace Foodservice',
headhunter_imagen2 varchar(250) NOT NULL COMMENT 'Imagen Foodservice',
PRIMARY KEY (`headhunter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>