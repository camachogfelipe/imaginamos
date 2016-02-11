CREATE TABLE `messaging` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`msg` text NOT NULL,
`user` int(11) NOT NULL,
`to_user` int(10) unsigned NOT NULL,
`type` enum('user','admin') NOT NULL,
`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
KEY `time` (`time`),
KEY `user` (`user`,`to_user`),
KEY `user_single` (`user`),
KEY `to_user_single` (`to_user`),
KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `messaging_admin` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`pass` varchar(40) NOT NULL,
`group` int(11) NOT NULL,
`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
KEY `username` (`username`,`pass`),
KEY `group` (`group`,`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `messaging_admin` (`id`, `username`, `pass`, `group`, `time`) VALUES
(1, 'admin', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 1, '2011-05-18 19:20:14');

CREATE TABLE `messaging_ban` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`ip` int(10) unsigned NOT NULL,
`host` varchar(255) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `messaging_groups` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`groups` tinyint(1) NOT NULL,
`banned` tinyint(1) NOT NULL,
`history` tinyint(1) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `title` (`title`),
KEY `file` (`groups`,`banned`,`history`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `messaging_groups` (`id`, `title`, `groups`, `banned`, `history`) VALUES
(1, 'Administrators', 1, 1, 1);

CREATE TABLE `messaging_history` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user` varchar(255) NOT NULL,
`from_ip` int(10) unsigned NOT NULL,
`email` varchar(255) NOT NULL,
`sess` varchar(255) NOT NULL,
`msg` text NOT NULL,
`admin` varchar(255) NOT NULL,
`type` enum('user','admin') NOT NULL,
`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
KEY `sess` (`sess`),
KEY `time` (`time`),
KEY `email` (`email`),
FULLTEXT KEY `message` (`msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `messaging_smiley` (
  `sign` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`sign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `messaging_smiley` (`sign`, `filename`) VALUES
(':(', 'sad.gif'),
(':)', 'smile.gif'),
(':*', 'kiss.gif'),
(':D', 'laugh.gif'),
(':P', 'tongue.gif'),
(':roll', 'rolleyes.gif'),
(':shock', 'shocked.gif'),
(':tired', 'tired.gif'),
(':]', 'grin.gif'),
(':|', 'blank.gif'),
(';)', 'wink.gif');

CREATE TABLE `messaging_users` (
`user_id` int(11) NOT NULL AUTO_INCREMENT,
`nick` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`ip` int(10) unsigned NOT NULL,
`sess` varchar(255) NOT NULL,
`upload` tinyint(1) NOT NULL DEFAULT '0',
`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`user_id`),
KEY `nickname` (`nick`),
KEY `sess` (`sess`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `messaging_admin`
ADD CONSTRAINT `messaging_admin_ibfk_1` FOREIGN KEY (`group`) REFERENCES `messaging_groups` (`id`) ON DELETE CASCADE;
