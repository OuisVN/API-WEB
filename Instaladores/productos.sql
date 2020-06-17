-- Adminer 4.7.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `api` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `api`;

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` text NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `productos` (`codigo`, `imagen`, `nombre`) VALUES
(1,	'recursos/images/1.jpg',	'Alicates'),
(2,	'recursos/images/2.jpg',	'Cepillos metálicos'),
(3,	'recursos/images/3.jpg',	'Cutters'),
(4,	'recursos/images/4.jpg',	'Destornilladores'),
(5,	'recursos/images/5.jpg',	'Extractores'),
(6,	'recursos/images/6.jpg',	'Limas y escofinas'),
(7,	'recursos/images/7.jpg',	'Llaves ajustables'),
(8,	'recursos/images/8.jpg',	'Llaves allen'),
(9,	'recursos/images/9.jpg',	'Llaves fijas'),
(10,	'recursos/images/10.jpg',	'Llaves de tubo'),
(11,	'recursos/images/11.jpg',	'Llaves de vaso'),
(12,	'recursos/images/12.jpg',	'Llaves dinamométricas'),
(13,	'recursos/images/13.jpg',	'Llaves estrella'),
(14,	'recursos/images/14.jpg',	'Maletines y kits de herramientas'),
(15,	'recursos/images/15.jpg',	'Martillos y mazas'),
(16,	'recursos/images/16.jpg',	'Portapuntas y puntas de atornillar'),
(17,	'recursos/images/17.jpg',	'Sierras de mano'),
(18,	'recursos/images/18.jpg',	'Tenazas'),
(19,	'recursos/images/19.jpg',	'Tijeras industriales'),
(20,	'recursos/images/20.jpg',	'Herramientas para tornillos especiales y de seguridad'),
(21,	'recursos/images/21.jpg',	'Otras herramientas manuales');

-- 2020-05-15 07:07:49
