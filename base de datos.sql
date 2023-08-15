-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para proyectolp2
CREATE DATABASE IF NOT EXISTS `proyectolp2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `proyectolp2`;

-- Volcando estructura para tabla proyectolp2.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectolp2.personas: 5 rows
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`id`, `nombre`, `apellido`, `edad`, `genero`, `ciudad`) VALUES
	(1, 'Pepito', 'Perez', 34, 'm', 'Ipiales'),
	(2, 'Maria', 'Chavez', 32, 'f', 'Aldana'),
	(3, 'Juan', 'Toledo', 23, 'm', 'Pupiales'),
	(8, 'Adriana', 'Caeballos', 23, 'f', '231'),
	(9, 'Juan', 'Tera', 21, 'o', 'Chambu');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolp2.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectolp2.users: 7 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `usuario`, `clave`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	(2, 'ingeniero', '5caae99531c54bc794f2489f5f2e6f33'),
	(3, 'fransisco', '829821286308824dccc13c88970a2dcc'),
	(4, 'alexander', '21232f297a57a5a743894a0e4a801fc3'),
	(5, 'michael', 'b07fa9773c0df0ad3ae9407f6275fdb5'),
	(6, 'robin', '4d2c105ff95dbd829718674aadd3254d'),
	(7, 'rengifo', '444bcb3a3fcf8389296c49467f27e1d6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
