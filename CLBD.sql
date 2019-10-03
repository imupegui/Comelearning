-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para comelearning
DROP DATABASE IF EXISTS `comelearning`;
CREATE DATABASE IF NOT EXISTS `comelearning` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `comelearning`;

-- Volcando estructura para tabla comelearning.clase
DROP TABLE IF EXISTS `clase`;
CREATE TABLE IF NOT EXISTS `clase` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tutor` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `dia` varchar(50) NOT NULL DEFAULT '',
  `hora` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `llave1` (`estudiante`),
  KEY `llave2` (`tutor`),
  CONSTRAINT `llave1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id`),
  CONSTRAINT `llave2` FOREIGN KEY (`tutor`) REFERENCES `tutor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla comelearning.clase: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
INSERT INTO `clase` (`codigo`, `tutor`, `estudiante`, `dia`, `hora`) VALUES
	(1, 2, NULL, 'viernes', 9),
	(2, 2, NULL, 'miercoles', 10),
	(3, 2, NULL, 'martes', 10);
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;

-- Volcando estructura para tabla comelearning.estudiante
DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL DEFAULT '0',
  `telefono` varchar(50) NOT NULL,
  `grado` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla comelearning.estudiante: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` (`id`, `nombre`, `contrasena`, `telefono`, `grado`, `email`) VALUES
	(2, 'David Zapata', 'hola', '3000000000', 8, 'dzaponte@mepicaelpene.edu.co'),
	(3, 'Julian David', 'numeros', '3124425013', 12, 'jdmejia@iegabo.edu.co'),
	(11, 'AndrÃ©s Juan Bueno Quiroz', 'adios', '3000000000', 11, 'cualquiera@hotmail.com');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;

-- Volcando estructura para tabla comelearning.tutor
DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `asignatura` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `precio` float NOT NULL DEFAULT '0',
  `contrasena` varchar(50) NOT NULL DEFAULT '0',
  `correo` varchar(50) NOT NULL,
  `horarios_disp` int(11) NOT NULL DEFAULT '0',
  `dia` varchar(50) NOT NULL DEFAULT '0',
  `descripcion` longtext NOT NULL,
  `universidad` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla comelearning.tutor: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` (`id`, `telefono`, `nombre`, `asignatura`, `carrera`, `precio`, `contrasena`, `correo`, `horarios_disp`, `dia`, `descripcion`, `universidad`, `imagen`) VALUES
	(1, '3148626878', 'AndrÃ©s Juan Bueno Quiroz', 'matematica', 'IngenierÃ­a ElectrÃ³nica', 10000, '', 'ajbueno@iegabo.edu.co', 8, 'lunes', 'Me gusta estudiar gg', 'matematica', 'pp.jpg'),
	(2, '3000000000', 'Mariana Gomez', 'matematica', 'IngenierÃ­a MatemÃ¡tica', 20000, 'nada', 'cualquiera@hotmail.com', 8, 'jueves', 'Hola amigÃ¼itos', 'matematica', 'Captura.jpg'),
	(14, '3000000000', 'David Zapata Aponte', 'Quimica', 'IngenierÃ­a ElÃ©ctrica', 15000, 'ffff', 'dzaponte@iegabo.edu.co', 13, 'miercoles', 'Esto es una prueba', 'Universidad Nacional', 'marco-carton-blanco-cuadrado-200x200.jpg');
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
