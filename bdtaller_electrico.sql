-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 08:04:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtaller_electrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_con` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cita` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `motivo` text COLLATE utf8_spanish_ci NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`nombre`, `apellido`, `edad`, `telefono`, `fecha_con`, `fecha_cita`, `motivo`, `id`) VALUES
('Sonia ', 'andrade', 27, '6569023456', '02/12/21', '01/01/2022', 'reparacion', 3),
('Alan', 'gonzales', 18, '6563458901', '02/12/21', '15/01/2022', 'consulta', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(7) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_reg` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `correo`, `edad`, `telefono`, `fecha_reg`) VALUES
(4, 'vannesa', 'garcia', 'vane.gar.13@gmail.com', 16, '6561237656', '20/11/21'),
(5, 'Sonia', 'andrade', 'sonia.and.86@gmail.com', 35, '6567654321', '20/11/21'),
(13, 'daniel', 'zuniga', 'daniel.zayles.04@gmail.com', 17, '6561776533', '02/12/21'),
(14, 'javier', 'gonzales', 'javi.gon.1986@gmail.com', 21, '6563458901', '02/12/21'),
(17, 'Alex', 'Salazar', 'alex.04@gmail.com', 21, '6569023456', '02/12/21'),
(18, 'Claudia', 'Perez', 'claudia.pr.03@gmail.com', 22, '6563458901', '02/12/21'),
(19, 'Alan', 'garcia', 'Alan.pz.00@gmail.com', 18, '6568812345', '02/12/21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(10) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `RFC` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_reg` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `edad`, `RFC`, `email`, `fecha_reg`) VALUES
(1, 'daniel', 'zuniga', 21, '12345', 'daniel.zayles.04@gmail.com', '02/12/21'),
(3, 'vannesa', 'garcia', 22, '54321', 'vane.gar.13@gmail.com', '02/12/21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rep`
--

CREATE TABLE `tipo_rep` (
  `id` int(10) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `objeto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_rep`
--

INSERT INTO `tipo_rep` (`id`, `tipo`, `nombre`, `objeto`, `domicilio`, `telefono`, `fecha`) VALUES
(2, 'Electrica', 'daniel', 'refrigerador', 'calle aguascalientes', '6561776533', '02/12/21'),
(3, 'Automotriz', 'vannesa', 'Motor', 'Buenos aires', '6563458901', '02/12/21'),
(4, 'Electrica', 'Alan', 'Fusible', 'calle aguascalientes', '6568812345', '02/12/21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_rep`
--
ALTER TABLE `tipo_rep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_rep`
--
ALTER TABLE `tipo_rep`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
