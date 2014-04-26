-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2014 a las 15:54:44
-- Versión del servidor: 5.6.12
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `curriculum`
--
CREATE DATABASE IF NOT EXISTS `curriculum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `curriculum`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_laborales`
--

CREATE TABLE IF NOT EXISTS `datos_laborales` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_fin` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `l_pais` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `funciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresa_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_fin_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `l_pais_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `funciones_2` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `datos_laborales`
--

INSERT INTO `datos_laborales` (`id`, `cargo`, `empresa`, `fecha_inicio`, `fecha_fin`, `l_pais`, `funciones`, `cargo_2`, `empresa_2`, `fecha_inicio_2`, `fecha_fin_2`, `l_pais_2`, `funciones_2`, `cedula`) VALUES
(1, 'Técnico de Soporte', 'EPower IBM', '20/05/2010', '20/05/2011', 'Venezuela', 'Realizar Soporte Técnico a diferentes áreas', 'Desarrolladors Web / Web Master', 'Instituto Nacional de Higiene Rafael Rangel', '20/06-2011', '31/12/2012', 'Venezuela', 'Desarrollo de Sistemas', '17588630');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cod` int(10) NOT NULL,
  `usuario` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nombres` varchar(200) CHARACTER SET latin1 NOT NULL,
  `apellidos` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cedula` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cod`, `usuario`, `nombres`, `apellidos`, `cedula`, `telefono`, `contrasenia`, `correo`) VALUES
(1, 1, 'dilarreta', 'Domingo José', 'Ilarreta Heydras', '17588630', '04128231347', '17588630', 'dilarreta@inhrr.gob.ve'),
(2, 1, 'vrodriguez', 'Victor', 'Rodriguez', '12140750', '02122191610', '12140750', 'vrodriguez@inhrr.gob.ve'),
(3, 1, 'evivas', 'Emily', 'Vivas', '15821695', '02122191615', '15821695', 'evivas@inhrr.gob.ve');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
