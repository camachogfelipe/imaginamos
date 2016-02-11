<?php
$queryCreateTable[0] = "
CREATE TABLE cms_soluciones_config (
soluciones_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
soluciones_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
soluciones_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (soluciones_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////

$queryCreateTable[1] = "
CREATE TABLE cms_soluciones (
soluciones_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
soluciones_mensaje varchar(250) NOT NULL COMMENT 'Mensaje',
soluciones_titulo1 varchar(250) NOT NULL COMMENT 'Titulo Foodservice',
soluciones_contenido1 text NOT NULL COMMENT 'Contenido Foodservice',
soluciones_enlace1 varchar(250) NOT NULL COMMENT 'Enlace Foodservice',
soluciones_imagenInt1 varchar(250) NOT NULL COMMENT 'Imagen Sec. Foodservice',
soluciones_titulo2 varchar(250) NOT NULL COMMENT 'Titulo Consulting',
soluciones_contenido2 text NOT NULL COMMENT 'Contenido Consulting',
soluciones_enlace2 varchar(250) NOT NULL COMMENT 'Enlace Consulting',
soluciones_imagenInt2 varchar(250) NOT NULL COMMENT 'Imagen Sec. Consulting',
soluciones_titulo3 varchar(250) NOT NULL COMMENT 'Titulo GestionH',
soluciones_contenido3 text NOT NULL COMMENT 'Contenido GestionH',
soluciones_enlace3 varchar(250) NOT NULL COMMENT 'Enlace GestionH',
soluciones_imagenInt3 varchar(250) NOT NULL COMMENT 'Imagen Sec. GestionH',
PRIMARY KEY (`soluciones_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";



?>