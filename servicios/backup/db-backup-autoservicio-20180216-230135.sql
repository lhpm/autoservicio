CREATE DATABASE IF NOT EXISTS autoservicio;

USE autoservicio;

DROP TABLE IF EXISTS detalles;

CREATE TABLE `detalles` (
  `id_d` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(3) NOT NULL,
  `orden` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `serie` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `chasis` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `num_entrada` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fec_entrega` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `hora_entrega` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `modelo_anio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `motor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `kilometros` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_d`),
  KEY `id_servicio` (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO detalles VALUES("2","1","0002","CHEVROLET","1212","444","ROJO","006","FECHA","HORA","1990","V9","1000","XDD-002");
INSERT INTO detalles VALUES("3","1","005","FORD","123N","CHASIS","AZUL","0987","FECHA","HORA","2000","V6","12","RHD-G44");
INSERT INTO detalles VALUES("4","3","008","KIA","2323","DDFFRR","AMARILLO","1234567890","12/09/1990","02:20:00","2009","V4","200","XPP-200");
INSERT INTO detalles VALUES("6","2","0099","FIAT","123","456","AZUL OSCURO","1111","2018-02-21","12:07","2002","V3","123","XDD-005");



DROP TABLE IF EXISTS empresa;

CREATE TABLE `empresa` (
  `id_empresa` int(1) NOT NULL AUTO_INCREMENT,
  `nit_empresa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO empresa VALUES("1","1004249102-6","Centro Autoservicio San Jorge","Almacén de repuestos y Mecánica Especializada

Motores Gasolina y Diesel","Calle 11 # 7 - 153 Pasaje Florian Pamplona N de S","Tel: 5688600 - Cel: 3112615611 - 3148014471 - 3203");



DROP TABLE IF EXISTS repuestos;

CREATE TABLE `repuestos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_repuesto` int(5) NOT NULL,
  `orden` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `repuesto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO repuestos VALUES("31","2","0002","cooler","20000");
INSERT INTO repuestos VALUES("32","2","0002","ddd","3000");



DROP TABLE IF EXISTS servicios;

CREATE TABLE `servicios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `placa` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hora_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO servicios VALUES("1","XHR-137","LUIS PATIï¿½O M","88251837","2018-02-15","Cra 28a #3-56 Belï¿½n","5678899","22:28");
INSERT INTO servicios VALUES("2","XDD-002","JOSE PEREZ","123456-0","2018-02-15","CLL 13A","5760000","16:00");
INSERT INTO servicios VALUES("3","SSD-777","JUAN LOPEZ M","900800700","15-02-2018","CRR4 #3-45","5679900","21:51:44");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `idusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuarios VALUES("2","admin","e48c0e9d84af16e13acd6aca372eec9c","1");



