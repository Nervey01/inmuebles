-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2024 a las 19:12:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmuebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueno`
--

CREATE TABLE `dueno` (
  `id_dueno` int(10) NOT NULL,
  `nombre_dueno` varchar(30) NOT NULL,
  `telefono_dueno` bigint(10) NOT NULL,
  `correo_dueno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dueno`
--

INSERT INTO `dueno` (`id_dueno`, `nombre_dueno`, `telefono_dueno`, `correo_dueno`) VALUES
(28549062, 'lucero', 3456558976, 'lucero@gmail.com'),
(65766542, 'yamile', 3243247749, 'yamile@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id_inmueble` int(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `identificador` varchar(10) NOT NULL,
  `fecha_venta` date NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_dueno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id_inmueble`, `tipo`, `direccion`, `identificador`, `fecha_venta`, `id_usuario`, `id_dueno`) VALUES
(3, 'apto', 'cra 5 #2', 'apto123', '2024-04-18', 1106226155, 28549062),
(4, 'apto', 'SUR', 'apto111', '2024-05-02', 1106226155, 28549062),
(5, 'casa', 'JORDAN', 'cs234', '2024-04-26', 1110475782, 65766542);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tip_usu` int(10) NOT NULL,
  `nombre_tip_usu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tip_usu`, `nombre_tip_usu`) VALUES
(1, 'admin'),
(2, 'comprador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `contraseña` int(10) NOT NULL,
  `id_tip_usu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `telefono`, `direccion`, `contraseña`, `id_tip_usu`) VALUES
(1106226155, 'leo', 'leo@gmail.com', 3209010240, 'cra 5 #2', 123456789, 1),
(1110475782, 'marta', 'marta@gmail.com', 3216774923, 'centro', 987654321, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dueno`
--
ALTER TABLE `dueno`
  ADD PRIMARY KEY (`id_dueno`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id_inmueble`),
  ADD KEY `usuario_id_usuario_inmuebles` (`id_usuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tip_usu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id_inmueble` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD CONSTRAINT `usuario_id_usuario_inmuebles` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
