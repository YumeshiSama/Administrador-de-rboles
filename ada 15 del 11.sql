-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2021 a las 18:16:53
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
  `id_copa` int(1) NOT NULL,
  `id_salud` int(1) NOT NULL,
  `id_localidad` int(5) NOT NULL,
  `id_especie` int(7) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `fecha_carga` date NOT NULL DEFAULT current_timestamp(),
  `foto_tronco` varchar(100) DEFAULT NULL,
  `foto_copa` varchar(100) DEFAULT NULL,
  `distancia_prox` varchar(70) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arboles`
--

INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_magnitud`, `extraible`, `poda`, `peligro_de_caida`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES
(25, 1, 1, 1, 1, 1, 0, 1, 0, 0, 15, '-36.563665', '-56.7029195', '2021-11-15', 'upl/img/2021-11-15-05-00016369962327233808229447668996523.jpg', 'upl/img/2021-11-15-05-00016369962229421182241515011848424.jpg', '', ''),
(26, 1, 1, 1, 1, 1, 0, 1, 0, 0, 16, '-36.523665', '-56.7039195', '2021-11-15', 'upl/img/2021-11-15-26-00016369964357468501875520554741280.jpg', 'upl/img/2021-11-15-26-00016369964196548678443369322823943.jpg', '', '');

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
(1, 'globosa'),
(2, 'piramidal'),
(3, 'columnar'),
(4, 'achaparrada'),
(5, 'llovediza'),
(9, 'probando');

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
  `imagen` varchar(100) NOT NULL DEFAULT 'https://via.placeholder.com/30.png/09f/fff',
  `imagen_enciclo` varchar(100) NOT NULL DEFAULT 'https://via.placeholder.com/100.png/09f/fff',
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id`, `nombre_especie`, `imagen`, `imagen_enciclo`, `descripcion`) VALUES
(1, 'mostrar todos', 'img/logoalpha3.png', 'https://via.placeholder.com/100.png/09f/fff', ''),
(15, 'pino', 'upl/icn/2021-11-15-23-000pino.png', 'https://thumbs.dreamstime.com/b/árbol-de-pino-31293091.jpg', 'el pino es una especie que tiene punta rara'),
(16, 'alamo', 'upl/icn/2021-11-15-56-000alamo.png', 'https://static.wikia.nocookie.net/esharrypotter/images/a/ac/%C3%81lamo.jpg/revision/latest', 'el alamo es una especie que es mas normal');

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
(2, 'las toninas'),
(3, 'mar del tuyu'),
(4, 'mar de ajo'),
(5, 'costa del este');

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
  `institucion` varchar(100) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `pass` varchar(60) NOT NULL DEFAULT '1234',
  `nivel` int(1) NOT NULL DEFAULT 1,
  `id_localidad` int(7) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `institucion`, `username`, `pass`, `nivel`, `id_localidad`) VALUES
(1, 'tecnica1', 'tecnica1', '1234', 2, 1),
(3, 'tecnica2', 'tecnica2', '123', 1, 1);

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `copa`
--
ALTER TABLE `copa`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
