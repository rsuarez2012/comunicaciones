-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 03:34 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comunicaciones`
--

-- --------------------------------------------------------

--
-- Table structure for table `comunicaciones`
--

CREATE TABLE IF NOT EXISTS `comunicaciones` (
`id` int(11) NOT NULL,
  `dependencia_id` int(11) NOT NULL,
  `directivo_id` int(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `cuerpo` text NOT NULL,
  `numero_comuni` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comunicaciones`
--

INSERT INTO `comunicaciones` (`id`, `dependencia_id`, `directivo_id`, `asunto`, `fecha`, `cuerpo`, `numero_comuni`) VALUES
(1, 1, 1, 'solicitud de mensajero', '2017-04-18', 'rtshporihtpoirjtg', 1),
(2, 2, 1, 'Data', '2017-04-20', ',ksfgklsdhfgs', 2),
(3, 2, 1, 'SOLICITUD DE MENSAJERO 2', '2017-04-25', 'fsghdghfyjiuoyipuioÃ±puiopÃ­opip', 3),
(4, 1, 1, 'Solicitud de Personal', '2017-04-25', 'Evaluar el curriculum', 4),
(5, 1, 1, 'Solicitud de Personal', '2017-04-25', 'Evaluar el curriculum', 5),
(6, 1, 1, 'Data', '2017-04-25', 'sfdsdhdgdfghd', 6),
(7, 2, 1, 'Data 2', '2017-04-25', 'sfdsdhdgdfghd', 7),
(8, 1, 1, 'SOLICITUD DE PERSONAL', '2017-04-27', 'sdgsdghdghdfghdfgh', 8),
(9, 2, 1, 'MEDICOS', '2017-04-27', 'sfgsdfgsdfhh', 9),
(10, 4, 1, 'NO SE', '2017-04-27', 'sdfgwsrfgwqerfg', 10),
(11, 3, 1, 'PAGO DE NOMINA', '2017-04-27', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estÃ¡ndar de las industrias desde el aÃ±o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usÃ³ una galerÃ­a de textos y los mezclÃ³ de tal manera que logrÃ³ hacer un libro de textos especimen. No sÃ³lo sobreviviÃ³ 500 aÃ±os, sino que tambien ingresÃ³ como texto de relleno en documentos electrÃ³nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaciÃ³n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y mÃ¡s recientemente con software de autoediciÃ³n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comunicaciones_dependencias`
--

CREATE TABLE IF NOT EXISTS `comunicaciones_dependencias` (
`id` int(11) NOT NULL,
  `comunicacione_id` int(11) NOT NULL,
  `dependencia_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comunicaciones_dependencias`
--

INSERT INTO `comunicaciones_dependencias` (`id`, `comunicacione_id`, `dependencia_id`) VALUES
(14, 6, 2),
(15, 6, 3),
(21, 7, 1),
(22, 7, 2),
(23, 7, 3),
(24, 7, 4),
(25, 5, 1),
(26, 5, 4),
(27, 8, 2),
(28, 10, 2),
(29, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
`id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependencias`
--

INSERT INTO `dependencias` (`id`, `nombre`) VALUES
(1, 'VICERRECTORADO ADMINISTRATIVO'),
(2, 'RECURSOS HUMANOS'),
(3, 'ADMINISTRACION GENERAL'),
(4, 'RECTORADO');

-- --------------------------------------------------------

--
-- Table structure for table `directivos`
--

CREATE TABLE IF NOT EXISTS `directivos` (
`id` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cedula` varchar(40) NOT NULL,
  `resolucion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directivos`
--

INSERT INTO `directivos` (`id`, `nombres`, `apellidos`, `cedula`, `resolucion`) VALUES
(1, 'Ing Rony', 'Quijada', '12344536', '2017-007 de Fecha 09/01/2017');

-- --------------------------------------------------------

--
-- Table structure for table `titulares`
--

CREATE TABLE IF NOT EXISTS `titulares` (
`id` int(11) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `lugar_nacimiento` varchar(50) NOT NULL,
  `edad` varchar(4) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `tipo_personal` varchar(30) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titulares`
--

INSERT INTO `titulares` (`id`, `apellidos`, `nombres`, `cedula`, `fecha_nacimiento`, `fecha_ingreso`, `lugar_nacimiento`, `edad`, `estado_civil`, `direccion`, `telefono`, `tipo_personal`, `estatus`) VALUES
(1, 'SUAREZ', 'RAUL EDUARDO', '18786391', '1997-01-12', '2013-06-05', 'VALLE DE LA PASCUA', '31', 'SOLTERO', 'URB. ALTOS DE FENIX I', '04160388191', 'ADMINISTRATIVO CONTRATADO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$B2ytQ/Vu2YRtidafpwijY.ZLwp3w8CyNGMmSD2qH7PMc0x4i5XsD.', 'admin', '2017-04-07 09:46:42', '2017-04-07 09:46:42'),
(2, 'ib', '$2a$10$FcWOiQgceOw5fOvD6GML8O6ensq3mZROt3WVUkQAURfaoov.SjcRW', 'admin', '2017-04-26 14:07:28', '2017-04-26 14:07:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comunicaciones`
--
ALTER TABLE `comunicaciones`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `numero_comuni` (`numero_comuni`);

--
-- Indexes for table `comunicaciones_dependencias`
--
ALTER TABLE `comunicaciones_dependencias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependencias`
--
ALTER TABLE `dependencias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directivos`
--
ALTER TABLE `directivos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titulares`
--
ALTER TABLE `titulares`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comunicaciones`
--
ALTER TABLE `comunicaciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comunicaciones_dependencias`
--
ALTER TABLE `comunicaciones_dependencias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `dependencias`
--
ALTER TABLE `dependencias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `directivos`
--
ALTER TABLE `directivos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `titulares`
--
ALTER TABLE `titulares`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
