<?php
$queryCreateTable[0] = "
CREATE TABLE cms_consulting_config (
consulting_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
consulting_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
consulting_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (consulting_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_consulting (
consulting_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
consulting_contenido text NOT NULL COMMENT 'Contenido Sec. Int.',
consulting_contenido2 text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
consulting_imagenInt varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
consulting_rutavideo varchar(250) NOT NULL COMMENT 'Ruta video',
PRIMARY KEY (`consulting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>