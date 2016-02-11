<?php
$queryCreateTable[0] = "
CREATE TABLE cms_banners_config (
banners_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
banners_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
banners_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (banners_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[1] = "
CREATE TABLE cms_banners (
banners_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
banners_txt1 varchar(80) DEFAULT NULL COMMENT 'Texto 1',
banners_txt2 varchar(80) DEFAULT NULL COMMENT 'Texto 2',
banners_url varchar(80) DEFAULT NULL COMMENT 'URL Banner',
banners_blank BOOLEAN DEFAULT 0 COMMENT 'Abre en una nueva pagina',
banners_order int(5) unsigned DEFAULT 0 COMMENT 'Orden',
banners_image varchar(120) DEFAULT NULL COMMENT 'Imagen',
PRIMARY KEY (banners_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

?>