CREATE DATABASE newsletter;

USE newsletter;

CREATE TABLE IF NOT EXISTS `subscribers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `email` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
