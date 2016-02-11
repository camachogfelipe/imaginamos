<?php
$queryCreateTable[0] = "
CREATE TABLE cms_mapa_config (
mapa_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
mapa_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
mapa_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (mapa_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_mapa (
mapa_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
mapa_enlace text NOT NULL COMMENT 'Ruta Enlace GoogleMap',
PRIMARY KEY (`mapa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>