-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2025 a las 17:51:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `benitez_gonzalo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Gonzalo', 'Benitez', 'Gonza', 'gonzabenitez@gmail.com', '$2y$10$ieNSgZ0gk.28PGIcuTisi.1B3wTfQXPSa5.8hQkGRDqghLVrL2x6a', 1, 'NO'),
(2, 'maria de los angeles', 'gonzalez', 'china', 'mariagonzalez@gmail.com', '$2y$10$L/wVB8VHs8MUixCPvw9Yl.DcGd3DruSaadlDNlqw4J09STgg9oHYq', 2, 'NO'),
(3, 'victor jesus', 'benitez', 'el mago', 'victorjbenitez@gmail.com', '$2y$10$kfJL3kaj0Wy/HgW8gpZoauREDYyb15lKsPSSL/akVFHE1cGbo6Pui', 2, 'NO'),
(4, 'pepito', 'gomez', 'pepe', 'pepe@gmail.com', '$2y$10$FMxqv1VECAx1/b.PasQ79ublqiZH3B2uI2Dnwi8.0CsdaPhRKr78G', 2, 'SI'),
(7, 'fiona', 'sherk', 'fifi', 'fiona@gmail.com', '$2y$10$9CUnyC3MHpuF3zz4t1zVn.YHD.9onoUCuf0lHW7EfHkMvlGndW2oW', 2, 'NO'),
(8, 'benito', 'gomez', 'gogo', 'gomezbenito@gmail.com', '$2y$10$xvu/V1K6FBFGuCtMwfTLxe5.h60ze73rdNskmQp9ldEqin1ZfBhTK', 2, 'NO'),
(9, 'homero', 'simpson', 'homer', 'hombre@gmail.com', '$2y$10$5I5AIs.FlxLOqZLy4slxfemkXPvQh0Ya1AwFxzRciRGHU14fOZp8i', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
