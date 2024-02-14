-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id_u` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `utilisateurs` (`id_u`, `email`, `mdp`) VALUES
(1,	'sava@univ-p8.com',	'$2y$10$hSjtSMdb3ilJ/nl0uJtHHugJzwPGdzrWbBWXT2G8eb1wptgGSX3CK'),
(2,	'sava2@univ-p8.com',	'$2y$10$FO68TVOrVgkcZjH/UmdCZOjWUuzIFFZyicjcflvCIbjKzaFrpC2Uy'),
(3,	'lolo@univ-p8.com',	'$2y$10$Yrjcif/g9o4WM1ss5.3pLewjBHBg7Lm7O5diSplqlioZv7nWppK0O'),
(4,	'ss@univ-p8.com',	'$2y$10$ZioKn.IWITVfsEZ6vrXXvuxHzmNnCj2rB56JG7y9527YYcVvvwESq'),
(5,	'dd@univ-p8.com',	'$2y$10$681pjaxe2fPoa9hJDRi54.7Gm4R5PdOzl8A2enHmicSYUcgCI8dyC'),
(6,	'qsava@univ-p8.com',	'$2y$10$v6gxtc5M68VF.VAdYaaxGOlTRyQGfCs1hiE7gSQGT29WyiB5PvMV.');

-- 2024-02-14 19:31:08
