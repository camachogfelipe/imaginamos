<?php
$queryCreateTable[0] = "
CREATE TABLE cms_nosotros_config (
nosotros_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
nosotros_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
nosotros_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (nosotros_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_nosotros (
nosotros_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
nosotros_mensaje varchar(250) NOT NULL COMMENT 'mensaje',
nosotros_contenido text NOT NULL COMMENT 'Contenido Sec. Int.',
nosotros_contenido2 text NOT NULL COMMENT 'Contenido 2 Sec. Int.',
nosotros_imagenInt varchar(250) NOT NULL COMMENT 'Imagen Sec. Int',
PRIMARY KEY (`nosotros_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>