-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-06-2017 a las 15:27:43
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
(1, 'transporte'),
(2, 'Limpieza'),
(3, 'Reparacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_respuesta` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `descripcion`, `id_respuesta`, `id_usuario`) VALUES
(2, 'fhjdhsdhsjkghlskhgslkfgkjvkbvndnvkdnv', NULL, 2),
(3, 'jkjkjkkkkjkjkjkjkjkjjkkjjkjkjkjkkj', NULL, 2);

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
  `id_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favor`
--

INSERT INTO `favor` (`id`, `titulo`, `ciudad`, `provincia`, `fec_lim`, `descripcion`, `id_usuario`) VALUES
(3, 'ayuda', 'la plata', 'buenos aires', '2017-12-31', 'asd', 1),
(18, 'ayuda', 'la plata', 'buenos aires', '2017-12-31', 'aaa', 1),
(19, 'funciona', 'la plata', 'buenos aires', '2017-12-30', 'esperemos', 1),
(20, 'funciono', 'la plata', 'buenos aires', '2017-06-30', 'estamos agradecidos', 1),
(23, 'ayuda', 'la plata', 'buenos aires', '2017-11-30', 'aasd', 2),
(25, 'tttt', 'rrrrr', 'ttttt', '2017-05-31', 'qqqqq', 2),
(26, 'Ayudante de cocina', 'La plata', 'bsas', '2017-06-04', 'necesito una ayudante de cocina para los dias lunes, miercoles y viernes.\r\nHorario de 9 am a 16pm.\r\n', 1),
(27, 'Ayudante de cocina2', 'La plata', 'bsas', '2017-06-02', 'ayudante de cocina para el turno noche', 1),
(30, 'mecanico', 'lomadvdermosafhfng', 'narnia', '2017-06-24', 'alfalnvejonmalmflksjafmasfkjerjuihgjlkdsnsdv mvsacnsmcsakfosamvsañ\r\nsnaonfksabfsaokfnsafosakn\r\nsafnsa\r\nfnskafnsamfslañmflksamflñsa\r\nsmfsapkfmsamfsafskmsf', 1),
(31, 'trasporte de mercaderia ', 'la plata', 'bssa', '2017-06-25', 'necesito un chofer de lunes a viernes , que reparta...............', 1),
(32, 'ffdjjfdsjk', 'jkfjksdfdsk', 'ajdfjkajkfjk', '2017-06-30', 'dafasfasjkfasjkfnbnbvanb', 1),
(33, 'ffdjjfdsjk', 'jkfjksdfdsk', 'ajdfjkajkfjk', '2017-06-30', 'dafasfasjkfasjkfnbnbvanb', 1),
(34, 'Pasear mascota', 'la plata', 'bsas', '2017-06-10', 'tengo un perrito , al cual no puedo sacarlo muy seguido necesito alguien que se pueda llevarlo al parque por las tardes ', 2),
(35, 'cuidado de mascota', 'la plata', 'moreno', '2017-06-17', 'un pequeño gato para cuidar durante las mañanas etc.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favor_categoria`
--

CREATE TABLE `favor_categoria` (
  `id` int(11) NOT NULL,
  `id_favor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favor_categoria`
--

INSERT INTO `favor_categoria` (`id`, `id_favor`, `id_categoria`) VALUES
(1, 3, 1),
(6, 18, 1),
(8, 19, 1),
(11, 20, 1),
(12, 23, 1),
(13, 24, 1),
(15, 25, 1),
(23, 3, 1),
(24, 4, 1),
(7, 18, 2),
(9, 19, 2),
(14, 24, 2),
(16, 25, 2),
(17, 26, 2),
(18, 27, 2),
(19, 28, 2),
(20, 29, 2),
(21, 30, 2),
(22, 2, 2),
(10, 19, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favor_comentario`
--

CREATE TABLE `favor_comentario` (
  `favor_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favor_comentario`
--

INSERT INTO `favor_comentario` (`favor_id`, `comentario_id`) VALUES
(26, 3),
(27, 2),
(27, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_favor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `img`, `id_usuario`, `id_favor`) VALUES
(3, 'uploads/imgFavores/perro.jpg', 2, 34),
(4, 'uploads/imgFavores/gatito.jpg', 2, 35);

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
  `tipo` int(2) NOT NULL,
  `credito` int(11) NOT NULL,
  `img` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `password`, `tel`, `apellido`, `fec_nac`, `tipo`, `credito`, `img`) VALUES
(1, 'admin', 'admin@correo.com', '123456', 0, '', NULL, 1, 1, NULL),
(2, 'pilar', 'mariacercato@hotmail.com', '123456', 1185457562, 'cercato', '2005-01-25', 0, 1, NULL);

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
  ADD UNIQUE KEY `id_respuesta` (`id_respuesta`),
  ADD KEY `comentario_ibfk_3` (`id_respuesta`),
  ADD KEY `id_respuesta_2` (`id_respuesta`),
  ADD KEY `id_usuario_3` (`id_respuesta`);

--
-- Indices de la tabla `favor`
--
ALTER TABLE `favor`
  ADD PRIMARY KEY (`id`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `favor_categoria`
--
ALTER TABLE `favor_categoria`
  ADD PRIMARY KEY (`id`,`id_favor`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_favor` (`id_favor`);

--
-- Indices de la tabla `favor_comentario`
--
ALTER TABLE `favor_comentario`
  ADD PRIMARY KEY (`favor_id`,`comentario_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `favor`
--
ALTER TABLE `favor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `favor_categoria`
--
ALTER TABLE `favor_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- Filtros para la tabla `favor`
--
ALTER TABLE `favor`
  ADD CONSTRAINT `favor_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
