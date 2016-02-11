# Tabla de configuración CMS
# Modifique http://localhost/cms/ por el valor que se ajuste a sus necesidades
# ---------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `cms_configuration` (
  `config_id` int(11) unsigned NOT NULL auto_increment COMMENT 'id unico',
  `config_date` datetime default NULL COMMENT 'Fecha y hora de instalacion',
  `config_path` varchar(256) default NULL COMMENT 'Path general de instalacion',
  `config_web` varchar(120) default NULL COMMENT 'Path general de instalacion',
  `config_mail_remitent` varchar(120) default NULL COMMENT 'Email remitente de los correos que envia el CMS',
  `config_company` varchar(120) default NULL COMMENT 'Nombre que se presenta como empresa que envia el email',
  PRIMARY KEY  (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `cms_configuration` (`config_id`, `config_date`, `config_path`, `config_web`, `config_mail_remitent`, `config_company`) VALUES (1, '2012-07-25 12:10:42', 'http://localhost/platamovil/cms/', 'http://apple.com', 'cms@imaginamos.com', 'imaginamos.com');

# ---------------------------------------------------------------------------------
# Tabla para cargar los ítems del menú para el CMS
# ---------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `cms_menu` (
  `menu_id` int(11) NOT NULL auto_increment,
  `menu_title` varchar(40) default NULL,
  `menu_url` varchar(80) default NULL,
  `menu_icon` varchar(20) default NULL,
  PRIMARY KEY  (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

# ---------------------------------------------------------------------------------
# Tabla para almacenar los usuarios que se creen en el CMS
# Por defecto los datos de ingreso son: email: cms@imaginamos.com | clave: bogota
# ---------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id_user` int(11) unsigned NOT NULL auto_increment,
  `username_user` varchar(60) default NULL,
  `password_user` varchar(100) default NULL,
  `email_user` varchar(50) default NULL,
  `rol_user` varchar(11) default NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `cms_user` (`id_user`, `username_user`, `password_user`, `email_user`, `rol_user`) VALUES (1, 'administrador', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin');