-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2020 a las 23:53:47
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `olimpoos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `nombre_contacto` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `estado` varchar(101) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `rfc`, `nombre_contacto`, `email`, `telefono`, `telefono2`, `domicilio`, `estado`, `observaciones`, `estatus`) VALUES
(0, 'mis', 'RFC', 'contacto', 'emal', '333333', '222222', 'domicilio', 'estado', 'observaciones', 1),
(1, 'sss', '', NULL, '', NULL, NULL, '', NULL, NULL, 1),
(2, '', '', NULL, '', NULL, NULL, '', NULL, NULL, 1),
(3, NULL, 'ddd', NULL, '', NULL, NULL, '', '0', NULL, 1),
(4, NULL, '', NULL, 'sgfdsa', NULL, NULL, '', NULL, NULL, 1),
(5, NULL, 'dsgdgas', NULL, 'gdasagdgda', NULL, NULL, 'dgsaadgs', NULL, NULL, 1),
(6, NULL, '', NULL, '', NULL, NULL, '', NULL, NULL, 1),
(7, NULL, '', NULL, '', NULL, NULL, '', '0', NULL, 1),
(8, 'xx', 'xxx', 'xxx', 'xxxx', 'xxx', 'xxxx', 'xxxxxx', 'xxxx', 'xx', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
