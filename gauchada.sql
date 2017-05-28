-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2017 a las 15:46:12
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.27-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gauchada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'transporte');
(2, 'Limpieza');
(3, 'Reparacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_favor` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favor`
--

CREATE TABLE `favor` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `fec_lim` date DEFAULT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `id_categoria` int(4) NOT NULL,
  `id_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL,
  `respuesta` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tel` int(11) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `fec_nac` date DEFAULT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `password`, `tel`, `apellido`, `fec_nac`, `tipo`) VALUES
(1, 'admin', 'admin@correo.com', '123456', 0, '', NULL, 1),
(2, 'pilar', 'mariacercato@hotmail.com', '123456', 1185457562, 'cercato', '2005-01-25', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_favor` (`id_favor`),
  ADD KEY `comentario_ibfk_3` (`id_respuesta`);

--
-- Indices de la tabla `favor`
--
ALTER TABLE `favor`
  ADD PRIMARY KEY (`id`,`id_categoria`,`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`,`id_usuario`,`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `favor`
--
ALTER TABLE `favor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_favor`) REFERENCES `favor` (`id`),
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`id_respuesta`) REFERENCES `respuesta` (`id_respuesta`);

--
-- Filtros para la tabla `favor`
--
ALTER TABLE `favor`
  ADD CONSTRAINT `favor_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `favor_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_respuesta`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `respuesta_ibfk_3` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
