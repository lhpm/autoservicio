-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2018 a las 04:10:55
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autoservicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE IF NOT EXISTS `detalles` (
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
  `herramienta` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `extintor` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `radio` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `tapetes` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `stops` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `llanta` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `luzplaca` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `brazostras` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `gato` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `antena` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `frontal` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `farolas` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `boceles` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `exploradoras` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `mac` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `triangulo` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `encendedor` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cajacd` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cocuyos` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `copas` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `tapagas` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `brazoslimp` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `espejos` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cenicero` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `tapiceria` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `vidrios` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `batera` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `plumillas` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `bomperes` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `nivelcombustible` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `aceite` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `hidrogeno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `bateria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `liquidofrenos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `luces` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ser_req_veh` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_d`),
  KEY `id_servicio` (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id_d`, `id_servicio`, `orden`, `marca`, `serie`, `chasis`, `color`, `num_entrada`, `fec_entrega`, `hora_entrega`, `modelo_anio`, `motor`, `kilometros`, `placa`, `herramienta`, `extintor`, `radio`, `tapetes`, `stops`, `llanta`, `luzplaca`, `brazostras`, `gato`, `antena`, `frontal`, `farolas`, `boceles`, `exploradoras`, `mac`, `triangulo`, `encendedor`, `cajacd`, `cocuyos`, `copas`, `tapagas`, `brazoslimp`, `espejos`, `cenicero`, `tapiceria`, `vidrios`, `batera`, `plumillas`, `bomperes`, `nivelcombustible`, `aceite`, `hidrogeno`, `bateria`, `liquidofrenos`, `luces`, `ser_req_veh`) VALUES
(2, 1, '0002', 'CHEVROLET', '1212', '444', 'ROJO', '006', '2018-02-28', '16:30', '1990', 'V9', '1000', 'XDD-002', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aceite', 'hidrogeno', '', 'frenos', 'luces', 'ReparaciÃ³n total de carburador, alternador y frenos.'),
(3, 1, '005', 'FORD', '123N', 'CHASIS', 'AZUL', '0987', 'FECHA', 'HORA', '2000', 'V6', '12', 'RHD-G44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 3, '008', 'KIA', '2323', 'DDFFRR', 'AMARILLO', '1234567890', '12/09/1990', '02:20:00', '2009', 'V4', '200', 'XPP-200', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 2, '0099', 'FIAT', '123', '456', 'AZUL OSCURO', '1111', '2018-02-21', '12:07', '2002', 'V3', '123', 'XDD-005', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdfasdASFsdf'),
(7, 3, '0203', '1', '1', '1', '1', '1', '', '', '1', '1', '1', 'SSD-777', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', ''),
(8, 3, '0003', '2', '2', '2', '2', '2', '', '', '2', '2', '2', 'SSD-77722', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '', '', '', '', '', '', '2', '2', '2', '2', '2', '2', '2', '2', '2', '', '', '', '', '', ''),
(9, 3, '3', '3', '3', '3', '3', '3', '2000-02-02', '15:03', '3', '3', '3', 'SSD-77733', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '', '', '', '', '', '', '', '3', '3', '3', '3', '3', '3', '3', '3', '', '', '', '', '', ''),
(10, 3, '4', '4', '4', '4', '4', '', '2000-03-03', '15:03', '4', '4', '5', 'SSD-77744', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '1', '1', '', '', '', '', '', ''),
(11, 3, '0011', 'FIFA', '12345', 'CHASIS', 'COLOR', 'ENTRADA', '2000-02-02', '14:02', '2000', 'V3', '120', 'XRR-456', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', ''),
(12, 1, '0203', '', '', '', '', '', '', '', '', '', '', 'XHR-137', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 1, '0203', '', '', '', '', '', '', '', '', '', '', 'XHR-137', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 1, '0203', 'CHEVY', '', '', '', '', '', '', '', '', '', 'XHR-137', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aceite', '', '', '', '', ''),
(15, 1, '0203', '', '', '', '', '', '', '', '', '', '', 'XHR-137', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aceite', 'hidrogeno', 'bateria', 'frenos', 'luces', ''),
(16, 1, '9999', 'marca', 'serie', 'chasis', 'VERDE', 'no entrada', '2001-01-01', '13:01', '2001', 'v1', '1111', 'XHR-1371', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'aceite', 'hidrogeno', 'bateria', 'frenos', 'luces', ''),
(17, 1, '0000', '', '', '', '', '', '', '', '', 'motor', '', 'XHR-137', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aceite', 'hidrogeno', 'bateria', 'frenos', 'luces', 'safasdfasfsdfasdfasdfasdfafsdfas sfSDF SDFSDF DFfFkhSKFH DAÃ‘ADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(1) NOT NULL AUTO_INCREMENT,
  `nit_empresa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clausula` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nit_empresa`, `nombre_empresa`, `desc_empresa`, `dir_empresa`, `tel_empresa`, `clausula`) VALUES
(1, '1004249102-6', 'Centro Autoservicio San Jorge', 'Almacén de repuestos y Mecánica Especializada\r\n\r\nMotores Gasolina y Diesel', 'Calle 11 # 7 - 153 Pasaje Florian Pamplona N de S', 'Tel: 5688600 - Cel: 3112615611 - 3148014471 - 3203', 'El cliente autoriza a CA San Jorge para efectuar las reparaciones ordenadas así como para colocar los repuestos y materiales necesarios para ellos. Probar el vehículo\r\n  antes y después de la reparación dentro del perímetro urbano de la Ciudad para lo cual exonera a C.A San Jorge de responsabilidad por daños, hurtos, robo, incendios, pedreos, alteración de orden  público y otros. C.A San Jorge no se hace responsable por pérdida de objetos que no quedan detallados en el inventario, ni por daños ocurridos al vehículo por casos fortuitos de fuerza mayor. Igualmente por averías o pérdidas que sufra el vehículo cuando a petición del cliente se recoja o entregue a domicilio. El cliente se compromete a efectuar el pago del costo total de la reparación al recibir el trabajo. Así mismo se compromete a recoger el vehículo dentro de 24 horas siguiente a la terminación, en caso contrario reconocerá el importe de la pensión establecida por los días siguientes. El cliente autoriza expresamente a C.A San Jorge para retener una prenda al vehículo hasta tanto el importe de la factura haya sido totalmente cancelada.\r\nNOTA: Se hace constar que C.A San Jorge recibe el vehículo de la persona que firma la presente orden de trabajo el supuesto de que ella es la propietaria del auto, o que debidamente autorizada por el dueño para ordenar el servicio y retirar el vehículo posteriormente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE IF NOT EXISTS `repuestos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_repuesto` int(5) NOT NULL,
  `orden` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `repuesto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`id`, `id_repuesto`, `orden`, `repuesto`, `valor`) VALUES
(31, 2, '0002', 'cooler', 20000),
(32, 2, '0002', 'ddd', 3000),
(33, 6, '0099', 'luz frontal', 20000),
(34, 4, '008', 'radiador xjj', 300000),
(35, 2, '0002', 'Pastillas', 20000),
(36, 2, '0002', 'Liga de frenos', 25000),
(37, 2, '0002', 'Carburador nuevo', 190000),
(41, 2, '0002', 'Parabrisas', 50000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `placa` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hora_recibo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `placa`, `cliente`, `nit`, `fecha_recibo`, `direccion`, `telefono`, `hora_recibo`, `foto`) VALUES
(1, 'XHR-137', 'LUIS PATIï¿½O M', '88251837', '2018-02-15', 'Cra 28a #3-56 Belï¿½n', '5678899', '22:28', 'predator_wallpaper_006.jpg'),
(2, 'XDD-002', 'JOSE PEREZ', '123456-0', '2018-02-15', 'CLL 13A', '5760000', '16:00', 'Cafeconleche.jpg'),
(3, 'SSD-777', 'JUAN LOPEZ M', '900800700', '15-02-2018', 'CRR4 #3-45', '5679900', '21:51:44', ''),
(4, 'XDD-002', 'JOSE NEGRETE', '', '19-02-2018', '', '', '01:57:36', 'foto'),
(5, 'RRR-QQQ', 'FOTO JAPON', '009988', '19-02-2018', 'SAN MARCOS', '311223344', '01:59:20', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `idusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `idusuario`, `clave`, `estado`) VALUES
(2, 'admin', 'e48c0e9d84af16e13acd6aca372eec9c', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
