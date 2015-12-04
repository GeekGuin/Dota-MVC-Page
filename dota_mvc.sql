-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2015 a las 03:56:33
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dota_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE `atributos` (
  `idAtributo` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `atributos`
--

INSERT INTO `atributos` (`idAtributo`, `nombre`) VALUES
(1, 'Strength'),
(2, 'Agility'),
(3, 'Intellect');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `heroes`
--

CREATE TABLE `heroes` (
  `idHeroe` int(11) NOT NULL,
  `idAtributo` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `heroes`
--

INSERT INTO `heroes` (`idHeroe`, `idAtributo`, `idRol`, `nombre`) VALUES
(1, 3, 5, 'Lion'),
(2, 1, 1, 'Sven'),
(3, 2, 1, 'Sniper'),
(4, 3, 4, 'Rubick'),
(5, 3, 4, 'Enigma'),
(6, 3, 5, 'Dazzle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rimagenesheroes`
--

CREATE TABLE `rimagenesheroes` (
  `idRImagenHeroe` int(11) NOT NULL,
  `idHeroe` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rimagenesheroes`
--

INSERT INTO `rimagenesheroes` (`idRImagenHeroe`, `idHeroe`, `nombre`) VALUES
(1, 1, 'icono'),
(2, 2, 'icono'),
(3, 3, 'icono'),
(4, 4, 'icono'),
(5, 5, 'icono'),
(6, 6, 'icono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombre`) VALUES
(1, 'Carry'),
(2, 'Mid'),
(3, 'Offlaner'),
(4, 'Support'),
(5, 'Hard Support');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`idAtributo`);

--
-- Indices de la tabla `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`idHeroe`),
  ADD KEY `idAtributo` (`idAtributo`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `rimagenesheroes`
--
ALTER TABLE `rimagenesheroes`
  ADD PRIMARY KEY (`idRImagenHeroe`),
  ADD KEY `idHeroe` (`idHeroe`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atributos`
--
ALTER TABLE `atributos`
  MODIFY `idAtributo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `heroes`
--
ALTER TABLE `heroes`
  MODIFY `idHeroe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `rimagenesheroes`
--
ALTER TABLE `rimagenesheroes`
  MODIFY `idRImagenHeroe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `heroes`
--
ALTER TABLE `heroes`
  ADD CONSTRAINT `heroes_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`),
  ADD CONSTRAINT `heroes_ibfk_1` FOREIGN KEY (`idAtributo`) REFERENCES `atributos` (`idAtributo`);

--
-- Filtros para la tabla `rimagenesheroes`
--
ALTER TABLE `rimagenesheroes`
  ADD CONSTRAINT `rimagenesheroes_ibfk_1` FOREIGN KEY (`idHeroe`) REFERENCES `heroes` (`idHeroe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
