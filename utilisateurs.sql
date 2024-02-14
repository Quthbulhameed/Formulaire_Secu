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
(68,	'mika@univ-p8.com',	'$2y$10$YIT8Ey1tYy/HikyHXNCy7OuqszeR9uBU72fuAv5eCovVJ30GCOJdW');

-- 2024-02-09 00:19:10
