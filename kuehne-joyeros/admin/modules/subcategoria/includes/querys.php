<?php
$queryCreateTable[0] = "
CREATE TABLE cms_news_config (
news_config_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
news_config_funcionality int(1) NOT NULL COMMENT 'Funcionalidad del módulo',
news_config_date datetime DEFAULT NULL COMMENT 'Fecha y hora de instalación módulo',
PRIMARY KEY (news_config_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[1] = "
CREATE TABLE cms_news (
news_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
news_title varchar(80) DEFAULT NULL COMMENT 'Título de la noticia',
news_article text DEFAULT NULL COMMENT 'Artículo de la noticia',
news_date datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
PRIMARY KEY (news_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[2] = "
CREATE TABLE cms_news (
news_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
news_title varchar(80) DEFAULT NULL COMMENT 'Título de la noticia',
news_article text DEFAULT NULL COMMENT 'Artículo de la noticia',
news_image varchar(120) DEFAULT NULL COMMENT 'Imagen de la noticia',
news_date datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
PRIMARY KEY (news_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[3] = "
CREATE TABLE cms_news (
news_id int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id unico',
news_title varchar(80) DEFAULT NULL COMMENT 'Título de la noticias',
news_article text DEFAULT NULL COMMENT 'Artículo de la noticia',
news_image varchar(120) DEFAULT NULL COMMENT 'Imagen de la noticia',
news_date datetime DEFAULT NULL COMMENT 'Fecha y hora de carga noticia',
PRIMARY KEY (news_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
/////////////////////////////////////////////////////////////////////////
$queryCreateTable[4] = "
CREATE TABLE cms_news_pics (
news_pics_id int(11) unsigned NOT NULL AUTO_INCREMENT,
news_id int(11) unsigned DEFAULT NULL,
news_pics_path varchar(80) DEFAULT NULL,
news_pic_text varchar(120) DEFAULT NULL,
PRIMARY KEY (news_pics_id),
KEY news_foreing_key (news_id),
CONSTRAINT news_foreing_key FOREIGN KEY (news_id) REFERENCES cms_news (news_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
?>