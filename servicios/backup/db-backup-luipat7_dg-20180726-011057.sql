CREATE DATABASE IF NOT EXISTS luipat7_dg;

USE luipat7_dg;

DROP TABLE IF EXISTS cliente;

CREATE TABLE `cliente` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_h` int(7) NOT NULL,
  `id_cita` int(7) NOT NULL,
  `tipo_doc` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `celular` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `oficio` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `empresa` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `edad` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `seguro` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `padre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `madre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `motivo_consulta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `anamnesis_proxima` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ante_morbico` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ante_gine` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ante_medicamentos` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alergias` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ante_personal` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ante_familiar` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inmunizaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cod_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `motivo_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cita` text CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `hora_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `obs_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `asistio_cita` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento_consulta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres_consulta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cod_consulta` int(11) NOT NULL,
  `motivo_consultah` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diagnostico` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_consulta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `obs_consulta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("94","0","0","CC","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","CHINACOTA","M","123456","3156980335","lhpm16@hotmail.com","TECNOLOGO EN SISTEMAS","CONSTRUCOL","1977-08-16 00:00:00","0","COOmeva","undefined","HERNANDO ARTURO","CECILIA MACHADO","GRIPE","","","MUJER","","sdfasdfasdf","","","","2014-06-17 20:28:43","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("136","0","0","CC","6895245245","JULIANA CONTRERAS","VILLA ROSARIO","M","43345345","31569854004","JULIANA@HOTMAIL.COM","ADMIN EMPRESA","PETROL","2014-06-23 00:00:00","0","COOMEVA","","","","","","","","","","","","","2014-06-23 00:28:55","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("122","0","0","CC","465345","GONSALO CASTRO","ChinÃ¡cota","M","5869977","3205897435","GONSALO@GMAIL.COM","COMERCIANTE","COMPARTA","2014-06-21 00:00:00","0","COMPARTA","","","","","","","","","","","","","2014-06-21 19:54:15","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("120","0","0","CC","882569324","CECILIA PEREZ","CUCUTA","M","5869215","3158590124","CECILIA@GMAIL.COM","COMERCIANTE","COMERCIANTE","0000-00-00 00:00:00","0","COOMEVA","","CECILIO","LOLA PEREZ","MOTIVO DE LA CONSULTA","ANAMNESIS PRÃ“XIMA","ANTECEDENTES MÃ“RBICOS","ANTECEDENTES GINECOOBSTÃ‰TRICOS","ANTECEDENTES USO MÃ‰DICAMENTOS","POLVO","ALCOHOL","ANTECEDENTES FAMILIARES","AMARILLA, RABICA","2014-06-21 19:52:36","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("121","0","0","CC","889632547","JULIO CESAR MONTAÃ‘ES","CHINACOTA","M","121212","3218951243","JULIO@HOTMAIL.COM","INDEPENDIENTE","COMERCIANTE","2014-06-21 00:00:00","0","SALUDCOOP","","","","","","","","","","","","","2014-06-21 19:53:43","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("123","0","0","CC","687452104","MARTA LOPEZ","CUCUTA","F","58692015","3159580124","MARTA@HOTMAIL.COM","COMERCIANTE","COMERCIANTE","2014-06-21 00:00:00","0","COMPARTA","","","","","","","MUJER","","","","","","2014-06-21 19:56:35","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("124","0","0","CC","85962101","PABLO RAMIREZ","CHINACOTA","M","5864125","3256938","AAAA@HOTMAIL.COM","COMERCIANTE","SALUDCOOP","2014-06-21 00:00:00","0","COMPARTA","","","","","","","","","","","","","2014-06-21 20:13:43","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("126","0","0","CC","456456453453","JOSE ZAMBRANO","MEDELLIN","M","5789922","3154780125","ZAMBRANO@hotmail.com","ELECTRONICO","COLSALUD","2014-06-21 00:00:00","0","COLSALUD","","","","","","","","","","","","","2014-06-21 20:14:22","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("128","0","0","CC","665201245","PILAR OMAÃ‘A","NEW YORK","F","5869900","31058452","PILAR@GMAIL.COM","DISEÃ‘O DE MODAS","DESIGN WOMAN","2014-06-21 00:00:00","0","COOMEVA","","","","","","","","","","","","","2014-06-21 20:38:40","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("129","0","0","CC","88779963","FELIPE MONSALVE","BOGOTA","M","123456","3205896454","felipe@hotmail.com","ingeniero PETROLEO","ECOPETROL","2014-06-22 00:00:00","0","SALUDCOOP","","","","","","","","","","","","","2014-06-22 21:44:41","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("131","0","0","CC","885124963","HECTOR ANDRADE","CUCUTA","M","57852360","3102590247","HECTOR@HOTMAIL.COM","ING INDUSTRIAL","SALUDCOOP","2014-06-22 00:00:00","0","SALUDCOOP","","HECTOR ANDRADE","LOLA PEREZ","ALERGIA","","","","","","","","","2014-06-22 21:55:39","","","0","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("163","0","0","CC","65212457","ALBERTO PINEDA","BOGOTA","M","5789521","3105482014","ALBERTO@HOTMAIL.COM","OBRERO","NINGUNA","1980-06-17 00:00:00","0","COMPARTA","","","","","","","","","","","","","2014-06-25 02:25:03","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("161","94","0","","","","","","","","","","","0000-00-00 00:00:00","0","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","9001","MEDICINA GENERAL","","2014-06-25 01:30:47","OBV CONSULTA");
INSERT INTO cliente VALUES("162","120","0","","","","","","","","","","","0000-00-00 00:00:00","0","","","","","","","","","","","","","","","","","","","","","","","882569324","CECILIA PEREZ","9001","GENERAL","","2014-06-25 01:32:05","OBV GENERAL");
INSERT INTO cliente VALUES("164","121","0","","","","","","","","","","","0000-00-00 00:00:00","0","","","","","","","","","","","","","","","","","","","","","","","889632547","JULIO CESAR MONTAÃ‘ES","9005","LABORATORIO","","2014-06-25 02:39:28","OBV");
INSERT INTO cliente VALUES("172","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","39141Consulta ambulatoria de medicina general","","2014-07-06 16:38:08","fghdtgyhdfgh");
INSERT INTO cliente VALUES("173","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","Consulta ambulatoria de medicina general","","2014-07-06 16:38:48","");
INSERT INTO cliente VALUES("174","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","Consulta ambulatoria de medicina general","","2014-07-06 16:39:53","");
INSERT INTO cliente VALUES("175","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","Consulta ambulatoria de medicina general","","2014-07-06 16:41:20","");
INSERT INTO cliente VALUES("176","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","Consulta ambulatoria de medicina general","","2014-07-06 16:42:22","5rq34532452345");
INSERT INTO cliente VALUES("177","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","0","Consulta ambulatoria de medicina general","","2014-07-06 16:43:08","w562346");
INSERT INTO cliente VALUES("178","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","","2014-07-06 16:44:26","3245234523");
INSERT INTO cliente VALUES("179","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39145","39145Consulta de urgencias","","2014-07-08 03:39:02","");
INSERT INTO cliente VALUES("180","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","","2014-07-08 03:40:53","hsfdhghdfh");
INSERT INTO cliente VALUES("181","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","","2014-07-08 03:41:46","");
INSERT INTO cliente VALUES("182","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","","2014-07-08 03:43:41","");
INSERT INTO cliente VALUES("183","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","","2014-07-08 03:45:07","");
INSERT INTO cliente VALUES("184","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141-Consulta ambulatoria de medicina general","","2014-07-08 03:49:03","");
INSERT INTO cliente VALUES("187","0","0","CC","885544","test foto","","","","3154","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:49:15","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("188","0","0","CC","885544","test foto","","","","3154","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:49:15","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("189","0","0","CC","885544","test foto","","","","3154","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:49:15","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("190","0","0","CC","456456456","dfsghdgsdg","","","","7575","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:54:34","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("191","0","0","CC","456456456","dfsghdgsdg","","","","7575","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:54:34","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("192","0","0","CC","456456456","dfsghdgsdg","","","","7575","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:54:34","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("193","0","0","CC","456456456456","wertwertwert","","","","465456456456","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:56:53","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("195","0","0","CC","45665","uhydf","","M","","456456456","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:57:46","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("196","0","0","CC","45665","uhydf","","M","","456456456","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:57:46","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("197","0","0","CC","45665","uhydf","","M","","456456456","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","2014-08-16 23:57:46","","","","","","","","","","","0","","","","");
INSERT INTO cliente VALUES("200","0","198","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","4574","klklkl","39141Consulta ambulatoria de medicina general","39141Consulta ambulatoria de medicina general","2014-08-14","","tujr","","","","0","","","","");
INSERT INTO cliente VALUES("203","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia","2014-08-19 21:16:30","ultima modificacion");
INSERT INTO cliente VALUES("204","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia quirÃºrgica","2014-08-19 21:19:33","ul");
INSERT INTO cliente VALUES("205","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia quirÃºrgica","2014-08-19 21:21:01","sdfsdfsdfsfv");
INSERT INTO cliente VALUES("206","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39145","39145Consulta de urgencias","Diagnostico","2014-08-19 21:21:55","sdfsdfdf");
INSERT INTO cliente VALUES("207","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia","2014-08-19 21:30:45","yeah");
INSERT INTO cliente VALUES("208","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia","2014-08-19 23:09:28","sdfsadfasdf");
INSERT INTO cliente VALUES("209","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia","2014-08-19 23:10:18","sdfasdfasdf");
INSERT INTO cliente VALUES("210","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia quirÃºrgica","2014-08-27 18:49:26","dfsdf");
INSERT INTO cliente VALUES("211","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","39141Consulta ambulatoria de medicina general","Exodoncia quirÃºrgica","2014-08-27 18:52:19","safsdfasdf");
INSERT INTO cliente VALUES("212","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39141","Consultaambulatoriademedicinageneral","","2014-08-27 18:53:59","");
INSERT INTO cliente VALUES("213","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","890304","      CONSULTA DE  CONTROL O SEGUIMIENTO DE PROGRAMA POR ODONTOLOGIA ESPECIALIZADA","SDFDSFASDF","2014-08-27 18:55:16","");
INSERT INTO cliente VALUES("214","94","0","","","","","","","","","","","0000-00-00 00:00:00","","","","","","","","","","","","","","","","","","","","","","","","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","39145","     Consulta de urgencias","","2014-08-27 18:56:46","");



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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO detalles VALUES("2","1","0002","CHEVROLET","1212","444","ROJO","006","2018-02-28","16:30","1990","V9","1000","XDD-002","1","1","1","1","1","1","1","1","1","1","1","","","","","","","","","","","","","","","","","","","","aceite","hidrogeno","","frenos","luces","ReparaciÃ³n total de carburador, alternador y frenos.");
INSERT INTO detalles VALUES("3","1","005","FORD","123N","CHASIS","AZUL","0987","FECHA","HORA","2000","V6","12","RHD-G44","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO detalles VALUES("4","3","008","KIA","2323","DDFFRR","AMARILLO","1234567890","12/09/1990","02:20:00","2009","V4","200","XPP-200","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO detalles VALUES("6","2","0099","FIAT","123","456","AZUL OSCURO","1111","2018-02-21","12:07","2002","V3","123","XDD-005","1","1","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdfasdASFsdf");
INSERT INTO detalles VALUES("7","3","0203","1","1","1","1","1","","","1","1","1","SSD-777","1","1","1","1","1","1","1","1","1","","1","1","1","1","1","","","","","","","1","1","1","1","1","1","1","1","1","","","","","","");
INSERT INTO detalles VALUES("8","3","0003","2","2","2","2","2","","","2","2","2","SSD-77722","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","","","","","","","2","2","2","2","2","2","2","2","2","","","","","","");
INSERT INTO detalles VALUES("9","3","3","3","3","3","3","3","2000-02-02","15:03","3","3","3","SSD-77733","3","3","3","3","3","3","3","3","3","3","3","3","3","3","3","","","","","","","","3","3","3","3","3","3","3","3","","","","","","");
INSERT INTO detalles VALUES("10","3","4","4","4","4","4","","2000-03-03","15:03","4","4","5","SSD-77744","4","4","4","4","4","4","4","4","4","4","","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","1","1","","","","","","");
INSERT INTO detalles VALUES("11","3","0011","FIFA","12345","CHASIS","COLOR","ENTRADA","2000-02-02","14:02","2000","V3","120","XRR-456","1","","","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","","","","","","");
INSERT INTO detalles VALUES("12","1","0203","","","","","","","","","","","XHR-137","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO detalles VALUES("13","1","0203","","","","","","","","","","","XHR-137","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO detalles VALUES("14","1","0203","CHEVY","","","","","","","","","","XHR-137","1","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","aceite","","","","","");
INSERT INTO detalles VALUES("15","1","0203","","","","","","","","","","","XHR-137","1","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","aceite","hidrogeno","bateria","frenos","luces","");
INSERT INTO detalles VALUES("16","1","9999","marca","serie","chasis","VERDE","no entrada","2001-01-01","13:01","2001","v1","1111","XHR-1371","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","aceite","hidrogeno","bateria","frenos","luces","");
INSERT INTO detalles VALUES("17","1","0000","","","","","","","","","motor","","XHR-137","1","1","","","","","","","","","","","","","","","","","","","","","","","","","","","","","aceite","hidrogeno","bateria","frenos","luces","safasdfasfsdfasdfasdfasdfafsdfas sfSDF SDFSDF DFfFkhSKFH DAÃ‘ADO");



DROP TABLE IF EXISTS dg_empresa;

CREATE TABLE `dg_empresa` (
  `IDEMPRESA` int(11) NOT NULL AUTO_INCREMENT,
  `CODEMP` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `NOMCORTO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TELEEFONO` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `CELULAR1` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CELULAR2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIRECCION` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `DESCCOMIDA` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RUTALOGO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `COORDENADAX` double(14,6) DEFAULT NULL,
  `COORDENADAY` double(14,6) DEFAULT NULL,
  `PUNTAJE` double(14,2) DEFAULT NULL,
  `IDGRUPO` int(11) NOT NULL,
  PRIMARY KEY (`IDEMPRESA`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dg_empresa VALUES("1","001","PICOLINO","Comida Nacional e Internacional","Picolino","5770809","3200203045","3500203048","Centro Comercial Bolívar","Comida Típica Colombiana y Cocina Internacional","http://luismachadoportafolio.com.co/img/restaurante1.jpg","7.884875","-72.489455","1.00","1");
INSERT INTO dg_empresa VALUES("2","002","RODICIO","Especialidad de Carnes, asados","RODICIO","5678899","3456789","0987654","Malecon","Comida Internacional","http://luismachadoportafolio.com.co/img/restaurante2.jpg","7.887775","-72.491248","556.00","1");
INSERT INTO dg_empresa VALUES("3","003","MOLINITO","Comida Gourmet","MOLINITO","5860011","31031031030","333333","direccion","desccripcion comida","http://luismachadoportafolio.com.co/img/molinito.jpg","7.879639","-72.496703","25.00","2");
INSERT INTO dg_empresa VALUES("4","004","VENEZIA","Especialidad de Pizzas","VENEZIA","5884477","321456789","310225588","","VENEZIA","http://luismachadoportafolio.com.co/img/venezia.jpg","7.886466","-72.493204","0.00","2");
INSERT INTO dg_empresa VALUES("7","005","LONDEROS SUR","Comida Gourmet, festejos","LONDEROS SUR","5478899","301225566","300225566","DIRECCION LONDEROS SUR","DESC COMIDA","http://luismachadoportafolio.com.co/img/londerossur.jpg","7.897038","-72.512072","16.00","3");
INSERT INTO dg_empresa VALUES("8","006","Pepinos","Comidas Rapidas Pepinos","PEPINOS","5889977","312445566","36974100","direccion PEPINOS","Comidas rapidas y almuerzos ejecutivos","http://luismachadoportafolio.com.co/img/pepinos.jpg","7.917193","-72.499490","53.00","3");
INSERT INTO dg_empresa VALUES("9","006","Brosty Pollo","Restaurante, venta de Pollo a la broaster y pollo asado","Brosty pollo","5478899","301225566","300225566","DIRECCION bogota beef company","Pollo a la broaster y pollo asado, ensaladas, ","http://luismachadoportafolio.com.co/img/bogotacompany.jpg","","","16.00","4");
INSERT INTO dg_empresa VALUES("10","006","TEMAKI","desc TEMAKI","TEMAKI","5889977","312445566","36974100","direccion TEMAKI","desc PEPINOS","http://luismachadoportafolio.com.co/img/temaki.jpg","7.917229","-72.495171","57.00","4");
INSERT INTO dg_empresa VALUES("11","009","BURGER KING 1","DESC BURGER KING 1","BURGER KING 1","435345345","321667788","3016784444","DIR BURGER KING 1","HOTDOG HAMBURGER","http://luismachadoportafolio.com.co/img/burgerking1.jpg","","","72.00","5");
INSERT INTO dg_empresa VALUES("12","010","BURGER KING 2","DESC KING 2","BURGER KING 2","67800999","3453453245","23452345","DIR BURGER KING 2","COMIDA BURGER","http://luismachadoportafolio.com.co/img/burgerking2.jpg","","","","5");
INSERT INTO dg_empresa VALUES("13","011","MEXICAN 1","Comida mexicana","MEXICAN 1","5679900","5887766","5660033","DIR MEXICAN 1","DESC MEXICAN 1","http://luismachadoportafolio.com.co/img/mexican1.jpg","","","33.00","6");
INSERT INTO dg_empresa VALUES("14","012","MEXICAN 2","DESC MEXICAN 1","MEXICAN 2","5883462","3123450099","30277889","DIR MEXIAN 2","DESC COMIDA MEXICAN 2","http://luismachadoportafolio.com.co/img/mexican2.jpg","","","9.00","6");
INSERT INTO dg_empresa VALUES("15","013","El Balcón Paisa","Comida Típica colombiana, bandeja paisa.","el balcon paisa","0375447788","3225567810","321667799","Av. Libertadores Calle 6e","Bandeja paisa, frijolada","http://luismachadoportafolio.com.co/img/holanda1.jpg","0.000000","0.000000","1.00","7");
INSERT INTO dg_empresa VALUES("16","014","Los Arrieros","Comida Típica santandereana","Los Arrieros","0375778899","3109988771","311456756","DIR HOLANDA 2","DESC HOLANDA 2","http://luismachadoportafolio.com.co/img/holanda2.jpg","0.000000","0.000000","23.00","7");



DROP TABLE IF EXISTS dg_eventos;

CREATE TABLE `dg_eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `negocio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_final` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dg_eventos VALUES("1","Dia del Padre - UNICENTRO ","UNICENtro descuentos del dia del padre 40 y 50 % en prendas deportivas","Unicentro","02/04/2018","20/04/2018","3118712233","http://luismachadoportafolio.com.co/img/unicentro.jpg");
INSERT INTO dg_eventos VALUES("2","Tzunami Vallenato","Vannetado ventiao","EK PRODUCCIONES","30/03/2018","31/03/2018","3112347700","http://luismachadoportafolio.com.co/img/logo_eventos.png");
INSERT INTO dg_eventos VALUES("3","Dia de la Madre","Visitanos en el día de las madres, hay descuentos","Pizza Kids","12/05/2018","14/05/2018","3225557800","http://luismachadoportafolio.com.co/img/pizzakidspromo.jpg");



DROP TABLE IF EXISTS dg_grupos;

CREATE TABLE `dg_grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `desc_grupo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `link_grupo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dg_grupos VALUES("1","Comida Internacional","Comida CHINA, comida ITALIANA, comida ARABE","#comidainternacional");
INSERT INTO dg_grupos VALUES("2","Comidas Rápidas","hamburguesas, perros, chuzos, brochetas, sandwicht, ","#comidarapida");
INSERT INTO dg_grupos VALUES("3","Bares Y Discotecas","Los mejores sitios para ir de Rumba","#baresdiscotecas");
INSERT INTO dg_grupos VALUES("4","Cafeteria","las mejores PANADERIAs, CAFETERIAs y REPOSTERIA de la ciudad","#panaderia");
INSERT INTO dg_grupos VALUES("5","Plazoletas","RECREACION HOBBIES PLAZOLETAS, stios públicos para departir en familia","#recreacion");
INSERT INTO dg_grupos VALUES("6","Comida Ejecutivo","comida EJECUTIVO para sector empresarial,almuerzos, cenas","#ejecutivo");
INSERT INTO dg_grupos VALUES("7","Comida Típica","COMIDA TIPICA Colombiana","#comidatipica");



DROP TABLE IF EXISTS dg_menudeldia;

CREATE TABLE `dg_menudeldia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(30) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` varchar(80) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `negocio` varchar(30) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dg_menudeldia VALUES("1","Alitas de Pollo","Alitas picantes con cascos asados","Brosty Pollo","5781751","http://luismachadoportafolio.com.co/img/menubrosty");
INSERT INTO dg_menudeldia VALUES("2","Pizza Mexicana","Pizza con pimientos, cebolla, carne molida, picante","Pizza Kids","312345443","http://luismachadoportafolio.com.co/img/menupizzakids.jpg");



DROP TABLE IF EXISTS dg_oferta;

CREATE TABLE `dg_oferta` (
  `IDOFERTA` int(11) NOT NULL AUTO_INCREMENT,
  `EMPRESA` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `E_DESCRIPCION` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FECHAINI` datetime NOT NULL,
  `FECHAFIN` datetime NOT NULL,
  `HORAINI` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `HORAFIN` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `RUTAFOTO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `GUSTA` int(11) NOT NULL,
  PRIMARY KEY (`IDOFERTA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dg_oferta VALUES("1","PALACIO GOURMET","OFERTA PICOLINO","2017-07-12 00:00:00","2017-07-15 00:00:00","08:00","23:00","http://luismachadoportafolio.com.co/img/oferta1.png","e","5");
INSERT INTO dg_oferta VALUES("2","BROSTY","BROSTY OFERTA 222","2017-07-12 00:00:00","2017-07-15 00:00:00","08:00","22:00","http://luismachadoportafolio.com.co/img/oferta2.jpg","d","4");



DROP TABLE IF EXISTS dg_usuarios;

CREATE TABLE `dg_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(8) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(15) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `apellido` varchar(15) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `nacimiento` varchar(12) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `tel` varchar(15) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS diagnosticos;

CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS empresa;

CREATE TABLE `empresa` (
  `id_empresa` int(1) NOT NULL AUTO_INCREMENT,
  `nit_empresa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clausula` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO empresa VALUES("1","1004249102-6","Centro Autoservicio San Jorge","Almacén de repuestos y Mecánica Especializada

Motores Gasolina y Diesel","Calle 11 # 7 - 153 Pasaje Florian Pamplona N de S","Tel: 5688600 - Cel: 3112615611 - 3148014471 - 3203","El cliente autoriza a CA San Jorge para efectuar las reparaciones ordenadas así como para colocar los repuestos y materiales necesarios para ellos. Probar el vehículo
  antes y después de la reparación dentro del perímetro urbano de la Ciudad para lo cual exonera a C.A San Jorge de responsabilidad por daños, hurtos, robo, incendios, pedreos, alteración de orden  público y otros. C.A San Jorge no se hace responsable por pérdida de objetos que no quedan detallados en el inventario, ni por daños ocurridos al vehículo por casos fortuitos de fuerza mayor. Igualmente por averías o pérdidas que sufra el vehículo cuando a petición del cliente se recoja o entregue a domicilio. El cliente se compromete a efectuar el pago del costo total de la reparación al recibir el trabajo. Así mismo se compromete a recoger el vehículo dentro de 24 horas siguiente a la terminación, en caso contrario reconocerá el importe de la pensión establecida por los días siguientes. El cliente autoriza expresamente a C.A San Jorge para retener una prenda al vehículo hasta tanto el importe de la factura haya sido totalmente cancelada.
NOTA: Se hace constar que C.A San Jorge recibe el vehículo de la persona que firma la presente orden de trabajo el supuesto de que ella es la propietaria del auto, o que debidamente autorizada por el dueño para ordenar el servicio y retirar el vehículo posteriormente.");



DROP TABLE IF EXISTS foto;

CREATE TABLE `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_foto` int(11) NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO foto VALUES("119","94","94");
INSERT INTO foto VALUES("120","94","94");
INSERT INTO foto VALUES("121","94","94");
INSERT INTO foto VALUES("122","94","94");
INSERT INTO foto VALUES("123","94","94");
INSERT INTO foto VALUES("124","94","94");
INSERT INTO foto VALUES("125","120","120");
INSERT INTO foto VALUES("126","120","120");
INSERT INTO foto VALUES("127","94","94");
INSERT INTO foto VALUES("128","94","94");
INSERT INTO foto VALUES("129","94","94");



DROP TABLE IF EXISTS frases;

CREATE TABLE `frases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frase` text COLLATE utf8_spanish_ci NOT NULL,
  `autor` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO frases VALUES("1","Es tan culpable quien comete un crimen como el que lo calla.","");
INSERT INTO frases VALUES("2","Soy capaz de controlar las sombras, pero no luchar en contra de un eclipse.","");
INSERT INTO frases VALUES("3","Los fenómenos que parecen acontecimientos malos, dolorosos, desagradables, son estados transitorios de algo que está mejorando.","");
INSERT INTO frases VALUES("4","Con dinero se puede comprar la cáscara de todo, pero no el grano.","");
INSERT INTO frases VALUES("5","A cada lágrima responde con una bella y grande sonrrisa.","");
INSERT INTO frases VALUES("6","En mi casa tengo un canario que canta cuando te nombro. Mira si te nombro veces que hasta el canario está ronco.","");
INSERT INTO frases VALUES("7","Lo bueno de los años es que curan heridas, lo malo de los besos es que causan adicciòn.","");
INSERT INTO frases VALUES("8","El rió vuelve a su cauce, la golondrina, a su nido, sólo el corazón no vuelve a tener la ilusión que ha perdido.","");
INSERT INTO frases VALUES("9","Recuerda siempre que eres único... Exactamente igual que todos los demás.","");
INSERT INTO frases VALUES("10","Anoche pedí a un ángel que fuese a protegerte mientras dormías. Al rato volvió y le pregunté por qué había vuelto. Una ángel no necesita que otro lo proteja, me respondió.","");
INSERT INTO frases VALUES("11","Siempre habrá gente que te lastime, así que lo que tienes que hacer, es seguir confiando, y sólo ser más cuidadoso en quien confías por segunda vez.","");
INSERT INTO frases VALUES("12","No te fijes en la letra, ni tampoco en la escritura, fíjate en mi que te quiero con locura!.","");
INSERT INTO frases VALUES("13","Hacen falta 40 músculos para fruncir el ceño,pero tan sólo 15 para sonreir.","");
INSERT INTO frases VALUES("14","Lo que hace disfrutar de una relación son los intereses comunes; lo que la hace interesante son las pequeñas diferencias.","");
INSERT INTO frases VALUES("15","Si te propones desempeñar un papel superior a tus fuerzas, no sólo lo harás mal, sino que dejarás de desempeñar aquél que en realidad te corresponde.","");
INSERT INTO frases VALUES("16","Lo importante en la vida no es la riqueza o la fortuna, lo que mas vale es la amistad que siempre perdura.","");
INSERT INTO frases VALUES("17","Los sueños nunca desaparecen siempre que las personas no los abandonan.","");
INSERT INTO frases VALUES("18","No ande delante de mí, tal vez no le siga. No ande detrás de mi, tal vez no le sepa dirigir. Simplemente ande a mi lado, y ser mi amigo.","");
INSERT INTO frases VALUES("19","Una mentira puede correr 6 veces por el mundo antes de que la verdad haya tenido tiempo para ponerse los pantalones.","");
INSERT INTO frases VALUES("20","Los jóvenes de hoy aman el lujo, tienen manías y desprecian la autoridad. Responden a sus padres, cruzan las piernas y tiranizan a sus maestros.","");
INSERT INTO frases VALUES("21","Siempre hay un poco de locura en el amor, pero siempre hay un poco de razón en la locura.","");
INSERT INTO frases VALUES("22","Si no aprendes a confiar en los demás, difícilmente lograrás que ellos confían en ti.","");
INSERT INTO frases VALUES("23","El amor es sabiduría en los locos, y locura en los sabios.","");
INSERT INTO frases VALUES("24","El tiempo es cuestión de tiempo, la vida es cuestión de vida, la vida dura un momento, el tiempo toda la vida.","");
INSERT INTO frases VALUES("25","Felicidad es el momento que no tiene prisa y que no quieres dejar ir jamas.","");
INSERT INTO frases VALUES("26","El respeto es como la sonrisa, no cuesta nada y a todos gusta.","");
INSERT INTO frases VALUES("27","¿Qué es la vida? Un frenesí ¿Qué es la vida? Una ilusión, una sombra, una ficción, y el mayor bien es pequeño; que toda la vida es sueño, y los sueños, sueños son.","");
INSERT INTO frases VALUES("28","Los ojos son las puertas del alma... no los cubras.","");
INSERT INTO frases VALUES("29","Podemos tener todos los medios de comunicación del mundo, pero nada, absolutamente nada, sustituye la mirada del ser humano.","");
INSERT INTO frases VALUES("30","No hay nada imposible, porque los sueños de ayer son las esperanzas de hoy y pueden convertirse en realidad mañana.","");
INSERT INTO frases VALUES("31","El amistad mejora la felicidad y disminuye la tristeza, porque a través del amistad, se duplican las alegrías y se dividen los problemas.","");
INSERT INTO frases VALUES("32","En la vida todos tenemos un secreto inconfesable, un arrepentimiento irreversible, un sueño inalcanzable y un amor inolvidable.","");
INSERT INTO frases VALUES("33","En la lucha entre el arroyo y la roca, siempre triunfa el arroyo... no porque sea más fuerte, sino porque persevera.","");
INSERT INTO frases VALUES("34","Las personas inteligentes son capaces de simplificar lo complejo; los tontos, en cambio, suelen complicar lo sencillo.","");
INSERT INTO frases VALUES("35","Si no aprendes a confiar en los demás, difícilmente lograrás que ellos confían en ti.","");
INSERT INTO frases VALUES("36","Duerme mas de la cuenta si eso hace que te despiertes con una sonrisa.","");
INSERT INTO frases VALUES("37","Nunca te detegas no mires hacia atras,solo adelante el q verdaderamente te quiere ira a tu lado.","");
INSERT INTO frases VALUES("38","La sonrisa es un puente de luz entre dos almas.","");
INSERT INTO frases VALUES("39","Puede que el amor no haga girar al mundo, pero debo admitir que hace que el viaje vale la pena.","");
INSERT INTO frases VALUES("40","No se puede separar la paz de la libertad, porque nadie puede estar en paz consigo mismo si no es libre","");



DROP TABLE IF EXISTS ft001;

CREATE TABLE `ft001` (
  `id_ft001` int(11) NOT NULL AUTO_INCREMENT,
  `codigoconcepto` int(12) NOT NULL,
  `claseconcepto` int(2) NOT NULL,
  `valor` int(20) NOT NULL,
  PRIMARY KEY (`id_ft001`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS ft003;

CREATE TABLE `ft003` (
  `id_ft003` int(11) NOT NULL AUTO_INCREMENT,
  `lineanegocio` int(11) NOT NULL,
  `tipoiddeudor` text COLLATE utf8_spanish_ci NOT NULL,
  `iddeudor` int(11) NOT NULL,
  `dvdeudor` int(11) NOT NULL,
  `nombredeudor` text COLLATE utf8_spanish_ci NOT NULL,
  `codigomunicipio` int(11) NOT NULL,
  `conceptodeudores` int(11) NOT NULL,
  `tipodeuda` int(11) NOT NULL,
  `medicionposterior` int(11) NOT NULL,
  `cxcpendientesradicar` int(11) NOT NULL,
  `cxcnovencidas` int(11) NOT NULL,
  `cxcmora30dias` int(11) NOT NULL,
  `cxcmora60dias` int(11) NOT NULL,
  `cxcmora90dias` int(11) NOT NULL,
  `cxcmora180dias` int(11) NOT NULL,
  `cxcmora360dias` int(11) NOT NULL,
  `cxcmoramayor360dias` int(11) NOT NULL,
  `deterioro30dias` int(11) NOT NULL,
  `deterioro60dias` int(11) NOT NULL,
  `deterioro90dias` int(11) NOT NULL,
  `deterioro180dias` int(11) NOT NULL,
  `deterioro360dias` int(11) NOT NULL,
  `deterioromayor360dias` int(11) NOT NULL,
  `ajuste` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`id_ft003`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO ft003 VALUES("1","330","CC","10","80","DIQUEMBE","541720","10","20","30","40","50","60","70","80","90","100","110","120","130","0","15","160","170","180","1999");
INSERT INTO ft003 VALUES("2","1","2","3","4","HOLA","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24");



DROP TABLE IF EXISTS ft004;

CREATE TABLE `ft004` (
  `id_ft004` int(11) NOT NULL AUTO_INCREMENT,
  `lineanegocio` int(11) NOT NULL,
  `tipoidacreedor` text COLLATE utf8_spanish_ci NOT NULL,
  `idacreedor` int(11) NOT NULL,
  `dvacreedor` int(11) NOT NULL,
  `nombreacreedor` text COLLATE utf8_spanish_ci NOT NULL,
  `actividadacreedor` text COLLATE utf8_spanish_ci NOT NULL,
  `conceptoacreencia` int(11) NOT NULL,
  `medicionposterior` int(11) NOT NULL,
  `cxpnovencidas` int(11) NOT NULL,
  `cxpmora30dias` int(11) NOT NULL,
  `cxpmora60dias` int(11) NOT NULL,
  `cxpmora90dias` int(11) NOT NULL,
  `cxpmora180dias` int(11) NOT NULL,
  `cxpmora360dias` int(11) NOT NULL,
  `cxpmoramayor360dias` int(11) NOT NULL,
  `ajuste` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`id_ft004`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO ft004 VALUES("1","3","CC","1","1","Slayer","NA","10","20","30","40","50","60","70","80","90","100","1000");
INSERT INTO ft004 VALUES("2","4","NIT","33","2","HOLIDAY","1","2","3","22","33","4","5","6","360","7","8","9999");
INSERT INTO ft004 VALUES("3","1","NIT","2","3","IRON","3","4","1","2","30","40","90","180","360","3600","2","121212");
INSERT INTO ft004 VALUES("4","2","2","1","3","POWER","1","22","1","0","30","60","0","180","360","3600","1","1000");



DROP TABLE IF EXISTS laboratorio;

CREATE TABLE `laboratorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombres` text COLLATE utf8_spanish_ci NOT NULL,
  `sexo` text COLLATE utf8_spanish_ci NOT NULL,
  `edad` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `celular` text COLLATE utf8_spanish_ci NOT NULL,
  `hemoglobina` text COLLATE utf8_spanish_ci NOT NULL,
  `hematocrito` text COLLATE utf8_spanish_ci NOT NULL,
  `globulos_blancos` text COLLATE utf8_spanish_ci NOT NULL,
  `id_l` int(11) NOT NULL,
  `gram` text COLLATE utf8_spanish_ci NOT NULL,
  `koh` text COLLATE utf8_spanish_ci NOT NULL,
  `otros_micro` text COLLATE utf8_spanish_ci NOT NULL,
  `trichonomas` text COLLATE utf8_spanish_ci NOT NULL,
  `levaduras_mi` text COLLATE utf8_spanish_ci NOT NULL,
  `bacterias_2` text COLLATE utf8_spanish_ci NOT NULL,
  `hematies_3` text COLLATE utf8_spanish_ci NOT NULL,
  `leucocitos_mi` text COLLATE utf8_spanish_ci NOT NULL,
  `celulas` text COLLATE utf8_spanish_ci NOT NULL,
  `ph_mi` text COLLATE utf8_spanish_ci NOT NULL,
  `aspecto_2` text COLLATE utf8_spanish_ci NOT NULL,
  `color_mi` text COLLATE utf8_spanish_ci NOT NULL,
  `hepatitis_b` text COLLATE utf8_spanish_ci NOT NULL,
  `vih` text COLLATE utf8_spanish_ci NOT NULL,
  `prueba_embarazo` text COLLATE utf8_spanish_ci NOT NULL,
  `vdlr` text COLLATE utf8_spanish_ci NOT NULL,
  `pcr` text COLLATE utf8_spanish_ci NOT NULL,
  `astos` text COLLATE utf8_spanish_ci NOT NULL,
  `psa` text COLLATE utf8_spanish_ci NOT NULL,
  `fr` text COLLATE utf8_spanish_ci NOT NULL,
  `otros_co` text COLLATE utf8_spanish_ci NOT NULL,
  `leucocitos_co` text COLLATE utf8_spanish_ci NOT NULL,
  `moco_co` text COLLATE utf8_spanish_ci NOT NULL,
  `grasas` text COLLATE utf8_spanish_ci NOT NULL,
  `hematies_2` text COLLATE utf8_spanish_ci NOT NULL,
  `almidones` text COLLATE utf8_spanish_ci NOT NULL,
  `levaduras` text COLLATE utf8_spanish_ci NOT NULL,
  `flora_bacteriana` text COLLATE utf8_spanish_ci NOT NULL,
  `parasitos` text COLLATE utf8_spanish_ci NOT NULL,
  `azucares_reductores` text COLLATE utf8_spanish_ci NOT NULL,
  `sangre_oculta` text COLLATE utf8_spanish_ci NOT NULL,
  `consistencia` text COLLATE utf8_spanish_ci NOT NULL,
  `color_co` text COLLATE utf8_spanish_ci NOT NULL,
  `otros_mi` text COLLATE utf8_spanish_ci NOT NULL,
  `moco` text COLLATE utf8_spanish_ci NOT NULL,
  `cristales` text COLLATE utf8_spanish_ci NOT NULL,
  `cilindros` text COLLATE utf8_spanish_ci NOT NULL,
  `cel_epiteliales` text COLLATE utf8_spanish_ci NOT NULL,
  `hematies` text COLLATE utf8_spanish_ci NOT NULL,
  `piocitos` text COLLATE utf8_spanish_ci NOT NULL,
  `bacterias` text COLLATE utf8_spanish_ci NOT NULL,
  `proteinas` text COLLATE utf8_spanish_ci NOT NULL,
  `sangre` text COLLATE utf8_spanish_ci NOT NULL,
  `glucosa` text COLLATE utf8_spanish_ci NOT NULL,
  `urobilinogeno` text COLLATE utf8_spanish_ci NOT NULL,
  `bilirrubina` text COLLATE utf8_spanish_ci NOT NULL,
  `nitritos` text COLLATE utf8_spanish_ci NOT NULL,
  `cetonas` text COLLATE utf8_spanish_ci NOT NULL,
  `leucocitos` text COLLATE utf8_spanish_ci NOT NULL,
  `densidad` text COLLATE utf8_spanish_ci NOT NULL,
  `ph` text COLLATE utf8_spanish_ci NOT NULL,
  `aspecto` text COLLATE utf8_spanish_ci NOT NULL,
  `color` text COLLATE utf8_spanish_ci NOT NULL,
  `otros` text COLLATE utf8_spanish_ci NOT NULL,
  `ast` text COLLATE utf8_spanish_ci NOT NULL,
  `alt` text COLLATE utf8_spanish_ci NOT NULL,
  `bilirrubina_total` text COLLATE utf8_spanish_ci NOT NULL,
  `bilirrubina_dta` text COLLATE utf8_spanish_ci NOT NULL,
  `creatinina` text COLLATE utf8_spanish_ci NOT NULL,
  `bun` text COLLATE utf8_spanish_ci NOT NULL,
  `acido_urico` text COLLATE utf8_spanish_ci NOT NULL,
  `trigliceridos` text COLLATE utf8_spanish_ci NOT NULL,
  `colesterol_ldl` text COLLATE utf8_spanish_ci NOT NULL,
  `colesterol_hdl` text COLLATE utf8_spanish_ci NOT NULL,
  `colesterol_total` text COLLATE utf8_spanish_ci NOT NULL,
  `glicemia_post` text COLLATE utf8_spanish_ci NOT NULL,
  `glicemia_basal` text COLLATE utf8_spanish_ci NOT NULL,
  `esp` text COLLATE utf8_spanish_ci NOT NULL,
  `vsg` text COLLATE utf8_spanish_ci NOT NULL,
  `blastos` text COLLATE utf8_spanish_ci NOT NULL,
  `plaquetas` text COLLATE utf8_spanish_ci NOT NULL,
  `monocitos` text COLLATE utf8_spanish_ci NOT NULL,
  `linfocitos` text COLLATE utf8_spanish_ci NOT NULL,
  `basofilos` text COLLATE utf8_spanish_ci NOT NULL,
  `neutrofilos` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_laboratorio` text COLLATE utf8_spanish_ci NOT NULL,
  `eosinofilos` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO laboratorio VALUES("1","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CUCUTA","123456","3156980335","CUCUTA","123456","3156980335","94","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","[object HTMLInputElement]","","","","","","","","","","","","","www","","");
INSERT INTO laboratorio VALUES("2","882569324","CECILIA PEREZ","M","0","CHINACOTA","5869215","3158590124","","","","120","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","2014-07-16 17:37:12","");
INSERT INTO laboratorio VALUES("3","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CHINACOTA","123456","3156980335","","","","94","","","","","","","","","","","","","","","","undefined","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","[object HTMLInputElement]","","","","","","","","","","","2014-07-17 04:58:41","");
INSERT INTO laboratorio VALUES("4","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CHINACOTA","123456","3156980335","1","2","3","94","79","78","77","76","75","74","73","72","71","70","69","68","67","66","65","undefined","63","62","61","60","59","58","57","56","55","54","53","52","51","50","49","48","47","46","45","44","43","42","41","40","39","38","37","36","35","34","33","32","31","30","29","28","27","26","25","24","23","22","21","20","19","18","17","16","[object HTMLInputElement]","3","13","12","11","10","9","8","7","6","4","2014-07-17 04:59:14","5");
INSERT INTO laboratorio VALUES("5","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CHINACOTA","123456","3156980335","","","","94","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","[object HTMLInputElement]","","","","","","","","","","","2014-07-17 05:13:42","");
INSERT INTO laboratorio VALUES("6","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CUCUTA","123456","3156980335","1","2","3","94","79","78","77","76","75","74","73","72","71","70","69","68","67","66","65","64","63","62","61","60","59","58","57","56","55","54","53","52","51","50","49","48","47","46","45","44","43","42","41","40","39","38","37","36","35","34","33","32","31","30","29","28","27","26","25","24","23","22","21","20","19","18","17","16","[object HTMLInputElement]","3","13","12","11","10","9","8","7","6","4","2014-07-17 15:10:05","5");
INSERT INTO laboratorio VALUES("7","88251837","LUIS HERNANDO PATIÃ‘O MACHADO","M","0","CUCUTA","123456","3156980335","1","2","3","94","79","78","77","76","75","74","73","72","71","70","69","68","67","66","65","64","63","62","61","60","59","58","57","56","55","54","53","52","51","50","49","48","47","46","45","44","43","42","41","40","39","38","37","36","35","34","33","32","31","30","29","28","27","26","25","24","23","22","21","20","19","18","17","16","15","14","13","12","11","10","9","8","7","6","4","2014-07-17 17:42:22","5");



DROP TABLE IF EXISTS noticias;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `date` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO noticias VALUES("1","nokia","img/nokia_1.jpg","Apariencia. El Nokia 1 es un teléfono ligero, su apariencia externa, como muchos otros dispositivos de su gama, está compuesta por unos marcos, adornados por un bisel blanco, que rodean su pantalla de 4.5 pulgadas.","10/06/2018");
INSERT INTO noticias VALUES("2","Una breve introducción al E3 y todas sus novedades","http://localhost/proyecto1/img/us-technology.jpg","Las empresas dedicadas al diseño de videojuegos están en Los Angeles en este momento, sacando, casi literalmente, todos los fierros. Los portales de videojuegos y las redes sociales están explotando con cada anuncio que se ha presentado en estos días. La E3 comenzó este martes y, sin embargo, desde hace unos días las empresas ya habían estado mostrando los dientes para el placer de todos los jugadores alrededor del mundo. Estos son los anuncios que dieron la largada para la conferencia.","13/06/2018");
INSERT INTO noticias VALUES("3","Nokia 1: el celular que quiere popularizarse en el","http://localhost/proyecto1/img/nokia_1.jpg","Apariencia. El Nokia 1 es un teléfono ligero, su apariencia externa, como muchos otros dispositivos de su gama, está compuesta por unos marcos, adornados por un bisel blanco, que rodean su pantalla de 4.5 pulgadas.","10/06/2018");
INSERT INTO noticias VALUES("4","Una breve introducción al E3 y todas sus novedades","http://localhost/proyecto1/img/us-technology.jpg","Las empresas dedicadas al diseño de videojuegos están en Los Angeles en este momento, sacando, casi literalmente, todos los fierros. Los portales de videojuegos y las redes sociales están explotando con cada anuncio que se ha presentado en estos días. La E3 comenzó este martes y, sin embargo, desde hace unos días las empresas ya habían estado mostrando los dientes para el placer de todos los jugadores alrededor del mundo. Estos son los anuncios que dieron la largada para la conferencia.","13/06/2018");



DROP TABLE IF EXISTS repuestos;

CREATE TABLE `repuestos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_repuesto` int(5) NOT NULL,
  `orden` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `repuesto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO repuestos VALUES("31","2","0002","cooler","20000");
INSERT INTO repuestos VALUES("32","2","0002","ddd","3000");
INSERT INTO repuestos VALUES("33","6","0099","luz frontal","20000");
INSERT INTO repuestos VALUES("34","4","008","radiador xjj","300000");
INSERT INTO repuestos VALUES("35","2","0002","Pastillas","20000");
INSERT INTO repuestos VALUES("36","2","0002","Liga de frenos","25000");
INSERT INTO repuestos VALUES("37","2","0002","Carburador nuevo","190000");
INSERT INTO repuestos VALUES("41","2","0002","Parabrisas","50000");



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
  `foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO servicios VALUES("3","SSD-777","JUAN LOPEZ M","900800700","15-02-2018","CRR4 #3-45","5679900","21:51:44","");
INSERT INTO servicios VALUES("4","XDD-002","JOSE NEGRETE","","19-02-2018","","","01:57:36","foto");
INSERT INTO servicios VALUES("5","RRR-QQQ","FOTO JAPON","009988","19-02-2018","SAN MARCOS","311223344","01:59:20","Hydrangeas.jpg");



DROP TABLE IF EXISTS soat;

CREATE TABLE `soat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO soat VALUES("1","39141","Consulta ambulatoria de medicina general");
INSERT INTO soat VALUES("2","39145","Consulta de urgencias");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `usuario` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

INSERT INTO usuario VALUES("1","admin","adminhisto");
INSERT INTO usuario VALUES("3","user01","user01");
INSERT INTO usuario VALUES("4","user02","user02");
INSERT INTO usuario VALUES("5","user03","user03");
INSERT INTO usuario VALUES("6","user04","user04");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `idusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuarios VALUES("2","admin","e48c0e9d84af16e13acd6aca372eec9c","1");
INSERT INTO usuarios VALUES("3","degustapp","335e5d212480edd0668d8a88c20a727e","1");
INSERT INTO usuarios VALUES("4","admin","335e5d212480edd0668d8a88c20a727e","1");



