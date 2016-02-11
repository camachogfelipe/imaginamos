<?php
$queryCreateTable[0] = "
CREATE TABLE cms_aliados_config (
aliados_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
aliados_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
aliados_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (aliados_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[1] = "
CREATE TABLE cms_aliados (
aliados_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
aliados_titulo varchar(80) DEFAULT NULL COMMENT 'Titulo',
aliados_url varchar(250) DEFAULT NULL COMMENT 'URL Aliado',
aliados_image varchar(250) DEFAULT NULL COMMENT 'Imagen',
PRIMARY KEY (aliados_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

?>