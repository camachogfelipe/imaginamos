<?php
$queryCreateTable[0] = "
CREATE TABLE cms_foodservice_config (
foodservice_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
foodservice_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
foodservice_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (foodservice_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_foodservice (
foodservice_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
foodservice_contenido text NOT NULL COMMENT 'Contenido Sec. Int.',
foodservice_contenido2 text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
foodservice_imagenInt varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
foodservice_rutavideo varchar(250) NOT NULL COMMENT 'Ruta video',
PRIMARY KEY (`foodservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>