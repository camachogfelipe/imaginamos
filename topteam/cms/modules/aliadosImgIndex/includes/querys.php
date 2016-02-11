<?php
$queryCreateTable[0] = "
CREATE TABLE cms_aliadosImgIndex_config (
aliadosImgIndex_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
aliadosImgIndex_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
aliadosImgIndex_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (aliadosImgIndex_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_aliadosImgIndex (
aliadosImgIndex_id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
aliadosImgIndex_titulo varchar(250) NOT NULL COMMENT 'Titulo Imagen Aliado',
aliadosImgIndex_imagen varchar(250) NOT NULL COMMENT 'Imagen Aliado',
PRIMARY KEY (`aliadosImgIndex_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>