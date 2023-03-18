-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-03-2023 a las 13:21:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(20) NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_cliente` varchar(20) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_transaccion`, `fecha`, `status`, `email`, `id_cliente`, `total`) VALUES
(1, '2NM25553RJ5150705', '2023-02-13 05:48:21', 'COMPLETED', 'sb-lza0j22305655@personal.example.com', 'GJB7FXHB9S3TW', '192000.00'),
(2, '9HU026023X580883T', '2023-03-13 17:29:16', 'COMPLETED', 'sb-lza0j22305655@personal.example.com', 'GJB7FXHB9S3TW', '321000.00'),
(3, '00J98530LF257600N', '2023-03-13 17:32:58', 'COMPLETED', 'sb-lza0j22305655@personal.example.com', 'GJB7FXHB9S3TW', '321000.00'),
(4, '22A72486MJ1264134', '2023-03-13 17:34:13', 'COMPLETED', 'sb-lza0j22305655@personal.example.com', 'GJB7FXHB9S3TW', '513000.00'),
(5, '4P272460DR882042T', '2023-03-13 17:41:32', 'COMPLETED', 'sb-lza0j22305655@personal.example.com', 'GJB7FXHB9S3TW', '321000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id`, `id_compra`, `id_producto`, `nombre`, `precio`, `cantidad`) VALUES
(0, 1, 1, 'Filtro de aceite', '31500.00', 3),
(0, 1, 2, 'Filtro de Aire', '97500.00', 1),
(0, 2, 1, 'Filtro de aceite', '31500.00', 4),
(0, 3, 1, 'Filtro de aceite', '31500.00', 4),
(0, 3, 2, 'Filtro de Aire', '97500.00', 2),
(0, 4, 1, 'Filtro de aceite', '31500.00', 7),
(0, 4, 2, 'Filtro de Aire', '97500.00', 3),
(0, 5, 1, 'Filtro de aceite', '31500.00', 4),
(0, 5, 2, 'Filtro de Aire', '97500.00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descuento` tinyint(2) NOT NULL DEFAULT 0,
  `id_categoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `id_categoria`, `activo`) VALUES
(1, 'Filtro de aceite', '<p> Filtro de aceite original <p>\r\n<br>\r\n<b> Características: </b><br>\r\nMarca: Renault <br>\r\nModelo: 2009-2021 <br>\r\nDuración: 10.000 km <br>', '35000.00', 10, 1, 1),
(2, 'Filtro de Aire', 'Filtro de Aire', '97500.00', 0, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
