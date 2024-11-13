-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para luxurydriving
CREATE DATABASE IF NOT EXISTS `luxurydriving` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `luxurydriving`;

-- Volcando estructura para tabla luxurydriving.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `documentoAdmin` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(50) DEFAULT NULL,
  `permisos` varchar(20) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`documentoAdmin`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.administrador: ~6 rows (aproximadamente)
INSERT INTO `administrador` (`documentoAdmin`, `nombre`, `apellido`, `fechaNacimiento`, `telefono`, `correo`, `username`, `passwrd`, `permisos`, `Activo`) VALUES
	('0', 'admin', 'admin', '0000-00-00', 0, 'admin@admin.com', 'admin', 'admin123', 'owner', 1),
	('55902700', 'Gianluca', 'Tagliabue', '2006-06-17', 99090862, 'gianlutaglia17@gmail.com', 'gtagliabue', 'admin123', 'admin', 1),
	('56072760', 'Ignacio', 'Taramasso', '2006-09-18', 94970276, 'nachologoedu@gmail.com', 'itaramasso', 'admin123', 'owner', 1),
	('56133071', 'a', 'a', '2024-11-08', 111111, 'a@gmail.com', 'aferf', 'a', 'admin', 0),
	('56133071', 'Leandro', 'Rizzo', '2006-10-12', 99400748, 'diamond.glory.leandro.rizzo@gmail.com', 'lrizzo', 'admin123', 'admin', 1),
	('56896053', 'Mateo', 'Laporta', '2006-07-01', 99186504, 'sabitoweb@gmail.com', 'mlaporta', 'admin123', 'admin', 1);

-- Volcando estructura para tabla luxurydriving.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `documentoAlumno` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(50) DEFAULT NULL,
  `estadoTeorico` varchar(20) DEFAULT NULL,
  `permisos` varchar(20) DEFAULT NULL,
  `fechaInscripcion` date DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  `profileImage` varchar(255) DEFAULT 'img/default.png',
  PRIMARY KEY (`documentoAlumno`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.alumno: ~24 rows (aproximadamente)
INSERT INTO `alumno` (`documentoAlumno`, `nombre`, `apellido`, `fechaNacimiento`, `telefono`, `correo`, `username`, `passwrd`, `estadoTeorico`, `permisos`, `fechaInscripcion`, `Activo`, `profileImage`) VALUES
	('01900576', 'Miguel', 'Herrera', '1993-02-14', 357246159, 'miguel@gmail.com', 'miguelh', 'alumno123', 'En Curso', 'usuario', '2023-11-11', 1, 'img/default.png'),
	('06810845', 'Ana', 'Martínez', '1992-11-08', 789123456, 'ana@email.com', 'miguelh', 'alumno123', 'Aprobado', 'usuario', '2023-04-05', 1, 'img/default.png'),
	('06936364', 'Fernando', 'Núñez', '1992-04-09', 753951852, 'fernando@gmail.com', 'miguelh', 'alumno123', 'Pendiente', 'usuario', '2024-03-22', 1, 'img/default.png'),
	('11111111', '1', '1', '2024-11-09', 1, 'sabitoweb@gmail.com', 'a', '1', 'Sin Iniciar', 'usuario', '2024-11-12', 0, 'img/default.png'),
	('1111111111', 'a', 'a', '2024-11-06', 1, 'a@gmail.com', 's', 'a', 'Sin Iniciar', 'usuario', '2024-11-12', 0, 'img/default.png'),
	('11111111111111', 'a', 'a', '2024-11-08', 1, 'a@gmail.com', 'a', 'a', 'Sin Iniciar', 'usuario', '2024-11-12', 0, 'img/default.png'),
	('12043769', 'Laura', 'Fernández', '1991-01-25', 654987321, 'laura@gmail.com', 'miguelh', 'alumno123', 'Pendiente', 'usuario', '2023-06-18', 1, 'img/default.png'),
	('51250050', 'Gabriel', 'Vargas', '1994-09-26', 531864209, 'gabriel@gmail.com', 'miguelh', 'alumno123', 'En Curso', 'usuario', '2024-05-15', 1, 'img/default.png'),
	('55260784', 'Natalia', 'Reyes', '1989-03-13', 420975318, 'natalia@gmail.com', 'nataliar', 'alumno123', 'Pendiente', 'usuario', '2024-06-20', 1, 'img/default.png'),
	('56133071', 'a', 'a', '2024-11-01', 111111, 'leandro26437@gmail.com', 'miguelh', 'a', 'Sin Iniciar', 'usuario', '2024-11-12', 1, 'img/default.png'),
	('56896053', 'miguelh', 'Souza Silva', '2024-11-01', 2147483647, 'a@gmail.com', 'a', 'a', 'Sin Iniciar', 'usuario', '2024-11-12', 1, 'img/default.png'),
	('56896053', 'miguelh', 'Leibniz', '2024-10-31', 2147483647, 'sabitoweb@gmail.com', 'miguelh', 'a', 'Sin Iniciar', 'usuario', '2024-11-12', 1, 'img/default.png'),
	('57090220', 'Carmen', 'Ruiz', '1987-06-27', 159357246, 'carmen@gmail.com', 'carmenr', 'alumno123', 'Aprobado', 'usuario', '2023-10-01', 1, 'img/default.png'),
	('61115264', 'Luis', 'Sánchez', '1993-07-17', 321654987, 'luis@gmail.com', 'luiss', 'alumno123', 'En Curso', 'usuario', '2023-05-12', 1, 'img/default.png'),
	('64734192', 'Diego', 'López', '1994-08-03', 147258369, 'diego@gmail.com', 'diegol', 'alumno123', 'Aprobado', 'usuario', '2023-07-22', 1, 'img/default.png'),
	('65064239', 'Roberto', 'Castro', '1988-08-23', 975318642, 'roberto@gmail.com', 'robertoc', 'alumno123', 'Aprobado', 'usuario', '2024-01-05', 1, 'img/default.png'),
	('70814669', 'María', 'González', '1988-09-22', 987654321, 'maria@gmail.com', 'mariag', 'alumno123', 'En Curso', 'usuario', '2023-02-15', 1, 'img/default.png'),
	('75395264', 'Valentina', 'caca', '1993-05-07', 198765432, 'valentina@gmail.com', 'valentinac', 'alumno123', 'En Curso', 'usuario', '2024-08-17', 1, 'img/default.png'),
	('83767665', 'Patricia', 'Silva', '1991-07-18', 642097531, 'patricia@gmail.com', 'patricias', 'alumno123', 'Aprobado', 'usuario', '2024-04-30', 1, 'img/default.png'),
	('87377498', 'Juan', 'Pérez', '1990-05-15', 123456789, 'juan@gmail.com', 'juanp', 'alumno123', 'Aprobado', 'usuario', '2023-01-10', 1, 'img/default.png'),
	('91078012', 'Elena', 'Morales', '1990-10-05', 246135789, 'elena@gmail.com', 'elenam', 'alumno123', 'Pendiente', 'usuario', '2023-12-20', 1, 'img/default.png'),
	('97507524', 'Sofia', 'Díaz', '1989-12-11', 258369147, 'sofia@gmail.com', 'sofiad', 'alumno123', 'En Curso', 'usuario', '2023-08-30', 1, 'img/default.png');

-- Volcando estructura para tabla luxurydriving.alumno_libreta
CREATE TABLE IF NOT EXISTS `alumno_libreta` (
  `documentoAlumno` varchar(20) DEFAULT NULL,
  `categoriaLibreta` varchar(20) DEFAULT NULL,
  KEY `fk_alumnocategoria_alumno` (`documentoAlumno`),
  CONSTRAINT `fk_alumnocategoria_alumno` FOREIGN KEY (`documentoAlumno`) REFERENCES `alumno` (`documentoAlumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.alumno_libreta: ~32 rows (aproximadamente)
INSERT INTO `alumno_libreta` (`documentoAlumno`, `categoriaLibreta`) VALUES
	('06810845', 'a'),
	('57090220', 'b'),
	('57090220', 'c'),
	('64734192', 'b'),
	('91078012', 'c'),
	('06936364', 'a'),
	('51250050', 'a'),
	('51250050', 'c'),
	('87377498', 'c'),
	('12043769', 'c'),
	('61115264', 'a'),
	('61115264', 'b'),
	('70814669', 'b'),
	('01900576', 'c'),
	('01900576', 'b'),
	('55260784', 'a'),
	('83767665', 'a'),
	('65064239', 'b'),
	('97507524', 'c'),
	('75395264', 'a'),
	('11111111111111', 'Libreta A'),
	('11111111111111', 'Libreta B'),
	('11111111111111', 'Libreta C'),
	('56896053', 'Libreta A'),
	('56896053', 'Libreta B'),
	('56896053', 'Libreta C'),
	('56133071', 'Libreta A'),
	('56133071', 'Libreta B'),
	('56133071', 'Libreta C'),
	('56896053', 'Libreta A'),
	('56896053', 'Libreta B'),
	('56896053', 'Libreta C');

-- Volcando estructura para tabla luxurydriving.curso
CREATE TABLE IF NOT EXISTS `curso` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `documentoAlumno` varchar(20) DEFAULT NULL,
  `documentoInstructor` varchar(20) DEFAULT NULL,
  `Matricula` varchar(20) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tipoLibreta` varchar(20) DEFAULT NULL,
  `resultado` varchar(20) DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `fk_clase_alumno` (`documentoAlumno`),
  KEY `fk_clase_instructor` (`documentoInstructor`),
  KEY `fk_clase_vehiculo` (`Matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.curso: ~115 rows (aproximadamente)
INSERT INTO `curso` (`Codigo`, `documentoAlumno`, `documentoInstructor`, `Matricula`, `precio`, `hora`, `fecha`, `tipoLibreta`, `resultado`, `Tipo`, `Activo`) VALUES
	(1, '57090220', '15868429', 'ABC123', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(2, '57090220', '15868429', 'ABC123', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(3, '57090220', '15868429', 'ABC123', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(4, '57090220', '15868429', 'ABC123', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(5, '57090220', '15868429', 'ABC123', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(6, '57090220', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(7, '57090220', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(8, '57090220', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(9, '57090220', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(10, '57090220', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(11, '65064239', '54267844', 'DEF456', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(12, '65064239', '54267844', 'DEF456', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(13, '65064239', '54267844', 'DEF456', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(14, '65064239', '54267844', 'DEF456', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(15, '65064239', '54267844', 'DEF456', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(16, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(17, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(18, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(19, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(20, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(21, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(22, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(23, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(24, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(25, '70814669', '04944050', 'HIJL56', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(26, '55260784', '35610242', 'BCD890', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(27, '55260784', '35610242', 'BCD890', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(28, '55260784', '35610242', 'BCD890', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(29, '55260784', '35610242', 'BCD890', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(30, '55260784', '35610242', 'BCD890', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(31, '97507524', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(32, '97507524', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(33, '97507524', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(34, '97507524', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(35, '97507524', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(36, '87377498', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(37, '87377498', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(38, '87377498', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(39, '87377498', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(40, '87377498', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(41, '91078012', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(42, '91078012', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(43, '91078012', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(44, '91078012', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(45, '91078012', '01224007', 'GHI789', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(46, '12043769', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(47, '12043769', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(48, '12043769', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(49, '12043769', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(50, '12043769', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(51, '8376665', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(52, '8376665', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(53, '8376665', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(54, '8376665', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(55, '8376665', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(56, '83767665', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(57, '83767665', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(58, '83767665', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(59, '83767665', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(60, '83767665', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(61, '06936364', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(62, '06936364', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(63, '06936364', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(64, '06936364', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(65, '06936364', '35610242', 'JKL012', 400, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(66, '01900576', '01224007', 'JKL012', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(67, '01900576', '01224007', 'JKL012', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(68, '01900576', '01224007', 'JKL012', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(69, '01900576', '01224007', 'JKL012', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(70, '01900576', '01224007', 'JKL012', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(71, '01900576', '04944050', 'MNO345', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(72, '01900576', '04944050', 'MNO345', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(73, '01900576', '04944050', 'MNO345', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(74, '01900576', '04944050', 'MNO345', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(75, '01900576', '04944050', 'MNO345', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(76, '75395264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(77, '75395264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(78, '75395264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(79, '75395264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(80, '75395264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(81, '61115264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(82, '61115264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(83, '61115264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(84, '61115264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(85, '61115264', '86469080', 'YZA567', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(86, '61115264', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(87, '61115264', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(88, '61115264', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(89, '61115264', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(90, '61115264', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(91, '64734192', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(92, '64734192', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(93, '64734192', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(94, '64734192', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(95, '64734192', '89234541', 'PQR678', 200, '00:00:00', '0000-00-00', 'B', 'pendiente', 'Clase', 1),
	(96, '51250050', '54267844', 'STU901', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(97, '51250050', '54267844', 'STU901', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(98, '51250050', '54267844', 'STU901', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(99, '51250050', '54267844', 'STU901', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(100, '51250050', '54267844', 'STU901', 100, '00:00:00', '0000-00-00', 'A', 'pendiente', 'Clase', 1),
	(101, '51250050', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(102, '51250050', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(103, '51250050', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(104, '51250050', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(105, '51250050', '25516177', 'EFG123', 400, '00:00:00', '0000-00-00', 'C', 'pendiente', 'Clase', 1),
	(108, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 0),
	(109, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 0),
	(110, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 0),
	(111, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(112, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(113, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(114, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(115, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(116, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1),
	(117, '56896053', '56133071', 'w2d3d212w', 10, '00:00:00', '0000-00-00', 'a', 'pendiente', 'nombre', 1);

-- Volcando estructura para tabla luxurydriving.instructor
CREATE TABLE IF NOT EXISTS `instructor` (
  `documentoInstructor` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(50) DEFAULT NULL,
  `permisos` varchar(20) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`documentoInstructor`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.instructor: ~9 rows (aproximadamente)
INSERT INTO `instructor` (`documentoInstructor`, `nombre`, `apellido`, `fechaNacimiento`, `telefono`, `correo`, `username`, `passwrd`, `permisos`, `Activo`) VALUES
	('01224007', 'Catalina', 'Diaz', '1979-12-18', '099753186', 'catalinad@gmail.com', 'catalinad', 'inst123', 'instructor', 1),
	('04944050', 'Andres', 'Fernandez', '1976-07-30', '091429753', 'andresf@gmail.com', 'andresf', 'inst123', 'instructor', 1),
	('15868425', 'Lucia', 'Moreno', '1985-09-15', '094186429', 'luciam@gmail.com', 'luciam', 'inst123', 'instructor', 1),
	('34851570', 'Manuel', 'Vargas', '1978-03-10', '099297531', 'manuelv@gmail.com', 'manuelv', 'inst123', 'instructor', 1),
	('35610243', 'Pedro', 'Alonso', '1980-05-20', '099123456', 'pedroa@gmail.com', 'pedroa', 'inst123', 'instructor', 1),
	('54267844', 'Carolina', 'Jimenez', '1982-11-25', '094318642', 'carolinaj@gmail.com', 'carolinaj', 'inst123', 'instructor', 1),
	('56133071', 'a', 'a', '2024-11-07', '1', 'a@gmail.com', 'leandro', 'a', 'instructor', 1),
	('86469080', 'Valeria', 'Muñoz', '1988-01-03', '094531864', 'valeriam@gmail.com', 'valeriam', 'inst123', 'instructor', 1),
	('89234541', 'Gonazlo', 'Herrera', '1983-06-12', '091642975', 'gonzaloh@gmail.com', 'gonzaloh', 'inst123', 'instructor', 1);

-- Volcando estructura para tabla luxurydriving.instructor_categoria
CREATE TABLE IF NOT EXISTS `instructor_categoria` (
  `documentoInstructor` varchar(20) DEFAULT NULL,
  `categoriaClase` varchar(20) DEFAULT NULL,
  KEY `fk_instructorcategoria_instructor` (`documentoInstructor`),
  CONSTRAINT `FK_instructor_categoria_instructor` FOREIGN KEY (`documentoInstructor`) REFERENCES `instructor` (`documentoInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.instructor_categoria: ~8 rows (aproximadamente)
INSERT INTO `instructor_categoria` (`documentoInstructor`, `categoriaClase`) VALUES
	('04944050', 'b'),
	('54267844', 'a'),
	('34851570', 'c'),
	('89234541', 'b'),
	('15868425', 'b'),
	('34851570', 'c'),
	('35610243', 'a'),
	('86469080', 'a');

-- Volcando estructura para tabla luxurydriving.instructor_horarios
CREATE TABLE IF NOT EXISTS `instructor_horarios` (
  `documentoInstructor` varchar(20) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  KEY `fk_instructorhorarios_instructor` (`documentoInstructor`),
  CONSTRAINT `FK_instructor_horarios_instructor` FOREIGN KEY (`documentoInstructor`) REFERENCES `instructor` (`documentoInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.instructor_horarios: ~37 rows (aproximadamente)
INSERT INTO `instructor_horarios` (`documentoInstructor`, `horario`) VALUES
	('04944050', 'Martes'),
	('04944050', 'Miercoles'),
	('04944050', 'Jueves'),
	('04944050', 'Viernes'),
	('04944050', 'Lunes'),
	('54267844', 'Lunes'),
	('54267844', 'Martes'),
	('54267844', 'Miercoles'),
	('54267844', 'Jueves'),
	('54267844', 'Viernes'),
	('01224007', 'Sabado'),
	('01224007', 'Martes'),
	('01224007', 'Miercoles'),
	('01224007', 'Jueves'),
	('01224007', 'Viernes'),
	('89234541', 'Lunes'),
	('89234541', 'Martes'),
	('89234541', 'Miercoles'),
	('89234541', 'Jueves'),
	('89234541', 'Viernes'),
	('89234541', 'Sabado'),
	('34851570', 'Lunes'),
	('15868425', 'Lunes'),
	('15868425', 'Martes'),
	('15868425', 'Miercoles'),
	('15868425', 'Jueves'),
	('34851570', 'Martes'),
	('34851570', 'Miercoles'),
	('34851570', 'Sabado'),
	('34851570', 'Viernes'),
	('15868425', 'Sabado'),
	('35610243', 'Lunes'),
	('35610243', 'Martes'),
	('35610243', 'Miercoles'),
	('86469080', 'Sabado'),
	('86469080', 'Martes'),
	('86469080', 'Miercoles');

-- Volcando estructura para tabla luxurydriving.opciones
CREATE TABLE IF NOT EXISTS `opciones` (
  `id_pregunta` int(11) DEFAULT NULL,
  `opcion_texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.opciones: ~8 rows (aproximadamente)
INSERT INTO `opciones` (`id_pregunta`, `opcion_texto`) VALUES
	(1, '45 Km/h'),
	(1, '60 Km/h'),
	(1, '75 Km/h'),
	(1, '110 Km/h'),
	(2, 'El que se enfrenta al cartel de PARE'),
	(2, 'El que aparece por la izquierda'),
	(2, 'El que aparece por la derecha'),
	(2, 'El que llega último al cruce');

-- Volcando estructura para tabla luxurydriving.pdfdocumentos
CREATE TABLE IF NOT EXISTS `pdfdocumentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rutaArchivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.pdfdocumentos: ~3 rows (aproximadamente)
INSERT INTO `pdfdocumentos` (`id`, `rutaArchivo`) VALUES
	(22, 'pdfDocumentos/Modelo Relacional Pasaje a Tablas.pdf'),
	(23, 'pdfDocumentos/Modelo Relacional Normalizacion.pdf'),
	(24, 'pdfDocumentos/0-PAA-Prueba-Practica_compressed.pdf');

-- Volcando estructura para tabla luxurydriving.preguntas
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.preguntas: ~2 rows (aproximadamente)
INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `respuesta_correcta`) VALUES
	(1, '¿Cuál es la velocidad máxima establecida en zona urbana donde no hay señalización que regule la misma?', '60 Km/h'),
	(2, 'En un cruce no regulado. ¿Qué vehículo tiene el derecho preferente de paso?', 'El que aparece por la derecha');

-- Volcando estructura para vista luxurydriving.tablaadmin
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablaadmin` (
	`documentoAdmin` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`username` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`apellido` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`fechaNacimiento` DATE NULL,
	`telefono` INT(11) NULL,
	`correo` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista luxurydriving.tablaalumnos
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablaalumnos` (
	`documentoAlumno` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`username` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`apellido` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`fechaNacimiento` DATE NULL,
	`telefono` INT(11) NULL,
	`correo` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`fechaInscripcion` DATE NULL,
	`estadoTeorico` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista luxurydriving.tablaclases
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablaclases` (
	`Codigo` INT(11) NOT NULL,
	`documentoAlumno` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`documentoInstructor` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`Matricula` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`precio` INT(11) NULL,
	`hora` TIME NULL,
	`fecha` DATE NULL,
	`tipoLibreta` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`resultado` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`Tipo` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista luxurydriving.tablainstructores
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablainstructores` (
	`documentoInstructor` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`username` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`apellido` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`fechaNacimiento` DATE NULL,
	`telefono` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`correo` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista luxurydriving.tablapreguntas
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablapreguntas` (
	`id_pregunta` INT(11) NOT NULL,
	`pregunta` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`respuesta_correcta` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`opcion_texto` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista luxurydriving.tablavehiculos
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `tablavehiculos` (
	`matricula` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`modelo` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`motor` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`combustible` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`medida` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`situacionActual` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci',
	`kilometraje` INT(11) NULL,
	`categoria` VARCHAR(1) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para tabla luxurydriving.vehiculo
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `matricula` varchar(20) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `motor` varchar(50) DEFAULT NULL,
  `combustible` varchar(50) DEFAULT NULL,
  `medida` varchar(50) DEFAULT NULL,
  `situacionActual` varchar(50) DEFAULT NULL,
  `kilometraje` int(11) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla luxurydriving.vehiculo: ~13 rows (aproximadamente)
INSERT INTO `vehiculo` (`matricula`, `modelo`, `motor`, `combustible`, `medida`, `situacionActual`, `kilometraje`, `categoria`, `Activo`) VALUES
	('ABC123', 'Toyota Corolla', '1.8L', 'Gasolina', '4.5m x 1.8m', 'Disponible', 50000, 'B', 1),
	('BCD890', 'Suzuki Swift', '1.2L', 'Gasolina', '3.8m x 1.7m', 'En mantenimiento', 25000, 'A', 1),
	('DEF456', 'Honda Civic', '2.0L', 'Gasolina', '4.6m x 1.8m', 'En mantenimiento', 75000, 'B', 1),
	('EFG123', 'Mitsubishi L200', '2.4L', 'Diesel', '5.2m x 1.8m', 'Disponible', 70000, 'C', 1),
	('GHI789', 'Ford F-150', '5.0L', 'Diesel', '5.8m x 2.0m', 'Disponible', 60000, 'C', 1),
	('HIJ456', 'Renault Sandero', '1.6L', 'Gasolina', '4.0m x 1.7m', 'Disponible', 50000, 'B', 1),
	('JKL012', 'Chevrolet Spark', '1.4L', 'Gasolina', '3.6m x 1.6m', 'Disponible', 30000, 'A', 1),
	('KLM789', 'Peugeot 208', '1.2L', 'Gasolina', '4.0m x 1.7m', 'Disponible', 45000, 'A', 1),
	('MNO345', 'Nissan Sentra', '1.6L', 'Gasolina', '4.6m x 1.8m', 'Disponible', 45000, 'B', 1),
	('PQR678', 'Hyundai Accent', '1.6L', 'Gasolina', '4.4m x 1.7m', 'En mantenimiento', 55000, 'B', 1),
	('STU901', 'Kia Rio', '1.4L', 'Gasolina', '4.3m x 1.7m', 'Disponible', 40000, 'A', 1),
	('VWX234', 'Mazda 3', '2.0L', 'Gasolina', '4.5m x 1.8m', 'Disponible', 65000, 'B', 1),
	('YZA567', 'Volkswagen Gol', '1.6L', 'Gasolina', '3.9m x 1.7m', 'Disponible', 35000, 'A', 1);

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablaadmin`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablaadmin` AS SELECT `administrador`.`documentoAdmin` AS `documentoAdmin`, `administrador`.`username` AS `username`, `administrador`.`nombre` AS `nombre`, `administrador`.`apellido` AS `apellido`, `administrador`.`fechaNacimiento` AS `fechaNacimiento`, `administrador`.`telefono` AS `telefono`, `administrador`.`correo` AS `correo` FROM `administrador` WHERE `administrador`.`Activo` = 1 ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablaalumnos`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablaalumnos` AS SELECT `alumno`.`documentoAlumno` AS `documentoAlumno`, `alumno`.`username` AS `username`, `alumno`.`nombre` AS `nombre`, `alumno`.`apellido` AS `apellido`, `alumno`.`fechaNacimiento` AS `fechaNacimiento`, `alumno`.`telefono` AS `telefono`, `alumno`.`correo` AS `correo`, `alumno`.`fechaInscripcion` AS `fechaInscripcion`, `alumno`.`estadoTeorico` AS `estadoTeorico` FROM `alumno` WHERE `alumno`.`Activo` = 1 ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablaclases`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablaclases` AS SELECT `curso`.`Codigo` AS `Codigo`, `curso`.`documentoAlumno` AS `documentoAlumno`, `curso`.`documentoInstructor` AS `documentoInstructor`, `curso`.`Matricula` AS `Matricula`, `curso`.`precio` AS `precio`, `curso`.`hora` AS `hora`, `curso`.`fecha` AS `fecha`, `curso`.`tipoLibreta` AS `tipoLibreta`, `curso`.`resultado` AS `resultado`, `curso`.`Tipo` AS `Tipo` FROM `curso` WHERE `curso`.`Activo` = 1 ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablainstructores`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablainstructores` AS SELECT `instructor`.`documentoInstructor` AS `documentoInstructor`, `instructor`.`username` AS `username`, `instructor`.`nombre` AS `nombre`, `instructor`.`apellido` AS `apellido`, `instructor`.`fechaNacimiento` AS `fechaNacimiento`, `instructor`.`telefono` AS `telefono`, `instructor`.`correo` AS `correo` FROM `instructor` WHERE `instructor`.`Activo` = 1 ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablapreguntas`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablapreguntas` AS SELECT `preguntas`.`id_pregunta` AS `id_pregunta`, `preguntas`.`pregunta` AS `pregunta`, `preguntas`.`respuesta_correcta` AS `respuesta_correcta`, `opciones`.`opcion_texto` AS `opcion_texto` FROM (`opciones` join `preguntas`) WHERE `preguntas`.`id_pregunta` = `opciones`.`id_pregunta` ;

-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `tablavehiculos`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tablavehiculos` AS SELECT `vehiculo`.`matricula` AS `matricula`, `vehiculo`.`modelo` AS `modelo`, `vehiculo`.`motor` AS `motor`, `vehiculo`.`combustible` AS `combustible`, `vehiculo`.`medida` AS `medida`, `vehiculo`.`situacionActual` AS `situacionActual`, `vehiculo`.`kilometraje` AS `kilometraje`, `vehiculo`.`categoria` AS `categoria` FROM `vehiculo` WHERE `vehiculo`.`Activo` = 1 ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
