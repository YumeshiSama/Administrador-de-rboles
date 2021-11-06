-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 01:03:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arboles`
--

CREATE TABLE `arboles` (
  `id` int(8) NOT NULL,
  `id_usuario` int(7) NOT NULL,
  `id_edad` int(1) NOT NULL,
  `id_magnitud` int(1) NOT NULL,
  `extraible` tinyint(1) NOT NULL,
  `poda` tinyint(1) NOT NULL,
  `peligro_de_caida` tinyint(1) NOT NULL,
  `id_columnar` int(1) NOT NULL,
  `id_copa` int(1) NOT NULL,
  `id_salud` int(1) NOT NULL,
  `id_localidad` int(5) NOT NULL,
  `id_especie` int(7) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `fecha_carga` date NOT NULL,
  `foto_tronco` varchar(70) NOT NULL,
  `foto_copa` varchar(70) NOT NULL,
  `distancia_prox` varchar(70) NOT NULL,
  `comentario` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arboles`
--

INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_magnitud`, `extraible`, `poda`, `peligro_de_caida`, `id_columnar`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES
(1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 11, '-36.5311294868868', '-56.71174973909938', '2021-09-08', '', '', '', ''),
(2, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 2, '-36.5311295868868', '-56.71143973909938', '0000-00-00', '', '', '', ''),
(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, '-40.5311294868868', '-60.71174973909938', '2021-10-06', '1', '1', '1', '1'),
(11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, '-38.5311294868868', '-58.71174973909938', '2021-10-06', '1', '1', '1', '1'),
(12, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, '-34.5311294868868', '-54.71174973909938', '2021-10-06', '1', '1', '1', '1'),
(13, 2, 2, 1, 1, 1, 0, 0, 1, 1, 0, 11, '-36.5654185', '-56.7031169', '2021-10-27', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copa`
--

CREATE TABLE `copa` (
  `id` int(1) NOT NULL,
  `tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `copa`
--

INSERT INTO `copa` (`id`, `tipo`) VALUES
(1, 'Globosa'),
(2, 'Piramidal'),
(3, 'Columnar'),
(4, 'Achaparrada'),
(5, 'Llovediza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id` int(1) NOT NULL,
  `rango` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id`, `rango`) VALUES
(1, 'adulto'),
(2, 'joven'),
(3, 'viejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id` int(7) NOT NULL,
  `nombre_especie` varchar(60) NOT NULL,
  `imagen` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id`, `nombre_especie`, `imagen`) VALUES
(1, 'mostrar todos', 'img/logoalpha1.png'),
(2, 'alamo', 'img/alamo.png'),
(3, 'arce tridente', ''),
(4, 'fresno dorado', ''),
(5, 'crespón', ''),
(6, 'fotinia', ''),
(7, 'viscote', ''),
(8, 'arce dorado', ''),
(9, 'cedro', ''),
(10, 'lapacho rosado', ''),
(11, 'pino', 'img/pino.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(5) NOT NULL,
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`) VALUES
(1, 'santa teresita'),
(2, 'las toninas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `magnitud`
--

CREATE TABLE `magnitud` (
  `id` int(1) NOT NULL,
  `tamano` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `magnitud`
--

INSERT INTO `magnitud` (`id`, `tamano`) VALUES
(1, 'hasta 5 metros'),
(2, 'entre 5 y 15 metros'),
(3, 'mas de 15 metros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `id` int(1) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salud`
--

INSERT INTO `salud` (`id`, `estado`) VALUES
(1, 'sano'),
(2, 'hueco'),
(3, 'plagado'),
(4, 'con hongos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(7) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `nivel` int(1) NOT NULL,
  `id_localidad` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `institucion`, `username`, `pass`, `nivel`, `id_localidad`) VALUES
(1, 'tecnica1', 'root', '1234', 5, 1),
(2, 'prueba', 'prueba', '12', 5, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arboles`
--
ALTER TABLE `arboles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `copa`
--
ALTER TABLE `copa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edad`
--
ALTER TABLE `edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `magnitud`
--
ALTER TABLE `magnitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arboles`
--
ALTER TABLE `arboles`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `copa`
--
ALTER TABLE `copa`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `magnitud`
--
ALTER TABLE `magnitud`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
