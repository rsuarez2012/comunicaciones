-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2017 a las 13:13:23
-- Versión del servidor: 5.5.54-0+deb8u1
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comunicaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicaciones`
--

CREATE TABLE IF NOT EXISTS `comunicaciones` (
`id` int(11) NOT NULL,
  `dependencia_id` int(11) NOT NULL,
  `directivo_id` int(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `cuerpo` text NOT NULL,
  `numero_comuni` int(11) NOT NULL,
  `copia_a` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunicaciones`
--

INSERT INTO `comunicaciones` (`id`, `dependencia_id`, `directivo_id`, `asunto`, `fecha`, `cuerpo`, `numero_comuni`, `copia_a`) VALUES
(1, 1, 1, 'SOLICITUD DE MENSAJERO', '2017-03-24', 'MEDIANTE LA PRESENTE TENGO EL BIEN A DIRIGIRME A USTED, EN LA OPORTUNIDAD DE SOLICITAR UN MENSAJERO EXTERNO.', 1, 'rrhh, ap, SOUNERG'),
(2, 2, 1, 'Solicitud de Personal', '2017-03-24', 'Ante todo emito un afectuoso saludo, la misma tiene como finalidad solicitar personal a esta direcciÃ³n UIYIPUHUIHUIOIO.\r\nAnte todo emito un afectuoso saludo, la misma tiene como finalidad solicitar personal a esta direcciÃ³n UIYIPUHUIHUIOIO.\r\n\r\nAnte todo emito un afectuoso saludo, la misma tiene como finalidad solicitar personal a esta direcciÃ³n UIYIPUHUIHUIOIO.\r\n\r\n', 2, 'vicerrectorado administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
`id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `nombre`) VALUES
(1, 'VICERRECTORADO ADMINISTRATIVO'),
(2, 'RECURSOS HUMANOS'),
(3, 'ADMINISTRACION GENERAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE IF NOT EXISTS `directivos` (
`id` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cedula` varchar(40) NOT NULL,
  `resolucion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id`, `nombres`, `apellidos`, `cedula`, `resolucion`) VALUES
(1, 'Ing Rony', 'Quijada', '12344536', '2017-007 de Fecha 09/01/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$B2ytQ/Vu2YRtidafpwijY.ZLwp3w8CyNGMmSD2qH7PMc0x4i5XsD.', 'admin', '2017-04-07 09:46:42', '2017-04-07 09:46:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunicaciones`
--
ALTER TABLE `comunicaciones`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `numero_comuni` (`numero_comuni`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunicaciones`
--
ALTER TABLE `comunicaciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
