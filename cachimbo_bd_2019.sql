-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2019 a las 07:33:05
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cachimbo_bd_2019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `castigos`
--

CREATE TABLE `castigos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `castigos`
--

INSERT INTO `castigos` (`id`, `nombre`) VALUES
(1, 'PASTEL EN LA CARA'),
(2, 'HUEVO EN LA CABEZA'),
(3, 'HARINA EN LA CABEZA'),
(4, 'UN BALDE DE AGUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`) VALUES
(1, 'ESTUDIANTE1'),
(2, 'ESTUDIANTE2'),
(3, 'ESTUDIANTE3'),
(4, 'ESTUDIANTE4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_cachimbos`
--

CREATE TABLE `estudiantes_cachimbos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_cachimbos`
--

INSERT INTO `estudiantes_cachimbos` (`id`, `nombre`) VALUES
(1, 'CACHIMBO1'),
(2, 'CACHIMBO2'),
(3, 'CACHIMBO3'),
(4, 'CACHIMBO4'),
(5, 'CACHIMBO5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `castigos`
--
ALTER TABLE `castigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes_cachimbos`
--
ALTER TABLE `estudiantes_cachimbos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `castigos`
--
ALTER TABLE `castigos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes_cachimbos`
--
ALTER TABLE `estudiantes_cachimbos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
