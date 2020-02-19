-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2020 a las 13:16:15
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `retofinal`
--
CREATE DATABASE IF NOT EXISTS `retofinal` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `retofinal`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_locales_load`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_locales_load` ()  NO SQL
SELECT *
FROM local$$
DROP PROCEDURE IF EXISTS `spLogIn`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spLogIn` (IN `pUsuario` VARCHAR(40), IN `pContrasenia` VARCHAR(40))  NO SQL
SELECT * FROM usuario WHERE usuario=pUsuario AND contrasenia=pcontrasenia$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casero`
--

DROP TABLE IF EXISTS `casero`;
CREATE TABLE `casero` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `casero`
--

INSERT INTO `casero` (`id`, `idUsuario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `idLocal` int(11) NOT NULL,
  `idCasero` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidadMin` int(11) NOT NULL,
  `cantidadMax` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imagen1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imagen2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imagen3` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`idLocal`, `idCasero`, `direccion`, `precio`, `cantidadMin`, `cantidadMax`, `descripcion`, `imagen1`, `imagen2`, `imagen3`) VALUES
(1, 1, 'Zelaieta Kalea Nº50 A', 600, 1, 4, 'Piso luminoso, amplio y acogedor. Dentro de la biosfera Urdaibai, con la ventaja de amanecer en un entorno de aire fresco y con aproximadamente unos 60m2. ', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisosfavs`
--

DROP TABLE IF EXISTS `pisosfavs`;
CREATE TABLE `pisosfavs` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contrasenia` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `nombre`, `apellido`, `descripcion`, `contrasenia`) VALUES
(1, 'carlos_isla99', 'Carlos', 'Isla', 'Interesado en alquilar mi piso de Madrid y dispuesta a negociar para llegar un acuerdo. Contacte conmigo si tiene alguna duda, sin compromiso!', '123456'),
(2, 'eki_CrXKet', 'Ekaitz', 'Gomez', 'En busca de un piso asequible en el que poder instalarme y continuar con mis estudios de la universidad. ', '654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casero`
--
ALTER TABLE `casero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`idLocal`),
  ADD KEY `idInquilino` (`idCasero`);

--
-- Indices de la tabla `pisosfavs`
--
ALTER TABLE `pisosfavs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInquilino` (`idUsuario`),
  ADD KEY `idLocal` (`idLocal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casero`
--
ALTER TABLE `casero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `idLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pisosfavs`
--
ALTER TABLE `pisosfavs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casero`
--
ALTER TABLE `casero`
  ADD CONSTRAINT `casero_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `local_ibfk_1` FOREIGN KEY (`idCasero`) REFERENCES `casero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pisosfavs`
--
ALTER TABLE `pisosfavs`
  ADD CONSTRAINT `pisosfavs_ibfk_2` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pisosfavs_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
