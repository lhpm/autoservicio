CREATE DATABASE IF NOT EXISTS autoservicio;

USE autoservicio;

DROP TABLE IF EXISTS empresa;

CREATE TABLE `empresa` (
  `id_empresa` int(1) NOT NULL AUTO_INCREMENT,
  `nit_empresa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO empresa VALUES("1","1004249102-6","Centro Autoservicio San Jorge","Almacén de repuestos y Mecánica Especializada

Motores Gasolina y Diesel","Calle 11 # 7 - 153 Pasaje Florian Pamplona N de S","Tel: 5688600 - Cel: 3112615611 - 3148014471 - 3203");



DROP TABLE IF EXISTS servicios;

CREATE TABLE `servicios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `orden` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hora_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO servicios VALUES("1","0002","XHR-137","LUIS HERNANDO PATIï¿½O MACHADO","8825183777","13/02/2018","Cra 28a #3-56 Belï¿½n","5678899","22:28");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `idusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuarios VALUES("2","admin","e48c0e9d84af16e13acd6aca372eec9c","1");



