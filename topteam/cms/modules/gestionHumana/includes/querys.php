<?php
$queryCreateTable[0] = "
CREATE TABLE cms_gestionh_config (
gestionh_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
gestionh_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
gestionh_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (gestionh_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_gestionh (
gestionh_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
gestionh_contenido text NOT NULL COMMENT 'Contenido Sec. Int.',
gestionh_contenido2 text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
gestionh_imagenInt varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
gestionh_rutavideo varchar(250) NOT NULL COMMENT 'Ruta video',
PRIMARY KEY (`gestionh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>