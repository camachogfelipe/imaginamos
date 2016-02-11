


INSERT INTO `cms_api_oauth` (`id`, `name`, `provider`, `strategy`, `api_key`, `api_secret`, `scope`, `active`, `active_oauth`) VALUES
(1, 'Facebook', 'facebook', 'oauth2', '1416132521932785', '335e4e5e18413ce88244a2bd0be4f226', 'offline_access,email,publish_stream,manage_pages', 1, 1),
(2, 'Twitter', 'twitter', 'oauth1', 'oaUPjhYWiIETQBNrvt3XfQ', 'kPsTns4nNWAhcnNyP6TtWP02lEgiRQRevfDdHF5Qw4U', '', 1, 1),
(3, 'Google', 'google', 'oauth2', '1073082606021.apps.googleusercontent.com', 'dZgio_ypJkpmQEUBjwK1FYGQ', '', 1, 1);



INSERT INTO `cms_contacto` (`id`, `direccion`, `edificio`, `ciudad`, `telefono1`,`telefono2`, `email`) VALUES
(1, 'Calle 90 Cra. 19a of. 301', 'Edificio 90', 'Bogotá - Colombia', '+ 57 (1) 555 5555', '+ 57 555 555 5555', 'cms@imaginamos.com');


INSERT INTO `cms_departamento` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');


INSERT INTO `cms_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrador'),
(2, 'admin', 'Administrador'),
(3, 'usuarios', 'Usuarios'),
(4, 'cliente', 'Cliente'),
(5, 'proveedor', 'Proveedor');

INSERT INTO `cms_permissions` (`id`, `name`, `var`, `type`) VALUES
(1, 'Permisos', 'cms_admin_perms', 'module'),
(2, 'Oauth', 'cms_config_oauth', 'module');

INSERT INTO `cms_groups_permissions` (`id`, `group_id`, `permission_id`, `view`, `create`, `update`, `delete`) VALUES
(5, 1, 1, 1, 0, 0, 0),
(6, 1, 2, 1, 0, 0, 0),
(7, 2, 1, 1, 0, 0, 0),
(8, 2, 2, 1, 0, 0, 0);

INSERT INTO `cms_oauth_config` (`id`, `uri`, `var`) VALUES
(1, '', '');


INSERT INTO `cms_redes_sociales` (`id`, `red_social`, `link_red`, `fecha_creacion`) VALUES
(1, 'Facebook', 'https://www.facebook.com/clinicarangelpereira', '2013-10-21 16:58:04'),
(2, 'Twitter', 'http://www.twitter.com/clinicarangelpereira', '2013-10-21 16:58:07'),
(3, 'Youtube', 'http://www.youtube.com/clinicarangelpereira', '2013-10-21 16:58:11');

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('06cd5a32cba1b73640499f382c2b52ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1384835266, 'a:10:{s:9:"user_data";s:0:"";s:5:"email";s:18:"cms@imaginamos.com";s:2:"id";s:1:"5";s:7:"user_id";s:1:"5";s:16:"page_video_lugar";s:1:"1";s:11:"page_barner";s:1:"1";s:3:"add";s:1:"0";s:6:"editar";s:1:"0";s:6:"delete";s:1:"0";s:19:"page_destacado_home";s:1:"1";}');

INSERT INTO `cms_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `departamento_id`) VALUES
(5, '\0\0', 'administrator', '092e624ccaf41c1b9c0dd32a1041043a82507bc7', 'e0efe63787', 'cms@imaginamos.com', NULL, NULL, NULL, '1218e83c71363e71c292b071dace76d3f56b47af', 1343253917, 2013, 1, NULL, NULL, NULL, NULL, 14),
(7, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'German Pinilla', 'dcf1564b2a2e7e132bcc1c11307a09de9e5a44ba', 'dc6daa3ef9', 'gprubiano53@gmail.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(9, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Andy', '2a287fe5980885a9d71f2f865af9908d0053138f', 'ec459600e0', 'andy@andy.com', NULL, NULL, NULL, NULL, 2013, 2013, 1, NULL, NULL, NULL, NULL, 14),
(10, '\0\0', 'elbertjose', '5c133442350e41793c64e2bb39e8157f2cc048fd', '730d87e794', 'elbert.tous@imaginamos.co', NULL, NULL, NULL, 'ad289a6efc6ba783e678f9ea955d1114910ca8cd', 2013, 2013, 1, 'Elbert Jose', 'Tous Ballesteros', 'Imaginamos', '3205788788', 14);


INSERT INTO `cms_users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 5, 1),
(7, 7, 1),
(9, 9, 1),
(10, 10, 4);