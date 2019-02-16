-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2019 a las 22:04:17
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_quiz`
--
CREATE DATABASE IF NOT EXISTS `db_quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_quiz`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `trabaja_farmacia` tinyint(1) NOT NULL,
  `conocias_martiderm` tinyint(1) NOT NULL,
  `tipos_ampollas` tinyint(1) NOT NULL,
  `afirmaciones_martiderm` tinyint(1) NOT NULL,
  `primer_laboratorio` tinyint(1) NOT NULL,
  `relacion_producto_descripcion` tinyint(1) NOT NULL,
  `canal_comunicacion` int(11) NOT NULL,
  `recomiendas_martiderm` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`trabaja_farmacia`, `conocias_martiderm`, `tipos_ampollas`, `afirmaciones_martiderm`, `primer_laboratorio`, `relacion_producto_descripcion`, `canal_comunicacion`, `recomiendas_martiderm`, `fecha_creacion`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, '2019-02-15 15:42:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
