<?php
$queryCreateTable[0] = "
CREATE TABLE cms_staffing_config (
staffing_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
staffing_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
staffing_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (staffing_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_staffing (
staffing_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
staffing_contenido1 text NOT NULL COMMENT 'Contenido Gestion Humana',
staffing_enlace1 varchar(250) NOT NULL COMMENT 'Enlace Gestion Humana',
staffing_imagen1 varchar(250) NOT NULL COMMENT 'Imagen Gestion Humana',
staffing_contenido2 text NOT NULL COMMENT 'Contenido Foodservice',
staffing_enlace2 varchar(250) NOT NULL COMMENT 'Enlace Foodservice',
staffing_imagen2 varchar(250) NOT NULL COMMENT 'Imagen Foodservice',
PRIMARY KEY (`staffing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>