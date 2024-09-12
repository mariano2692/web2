-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2024 a las 04:14:29
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
-- Base de datos: `db_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `id_compania` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha_fundacion` date NOT NULL,
  `oficinas_centrales` varchar(300) NOT NULL,
  `sitio_web` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`id_compania`, `nombre`, `fecha_fundacion`, `oficinas_centrales`, `sitio_web`) VALUES
(1, 'Riot Games', '2006-09-06', 'West Los Angeles, Los Ángeles, California, Estados Unidos', 'riotgames.com'),
(2, 'Ubisoft Entertainment', '1984-03-28', 'Montreuil, Francia', 'ubisoft.com'),
(3, 'Blizzard Entertainment\r\n', '1981-09-08', 'Irvine, California, Estados Unidos', 'blizzard.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juegos` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `modalidad` varchar(150) NOT NULL,
  `plataformas` varchar(255) NOT NULL,
  `id_compania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juegos`, `nombre`, `fecha_lanzamiento`, `modalidad`, `plataformas`, `id_compania`) VALUES
(1, 'Diablo II Resurrected', '2021-08-13', 'Videojuego multijugador', 'Nintendo Switch, PlayStation 5, PlayStation 4, Microsoft Windows, Xbox One, GeForce Now, Xbox Series X|S', 3),
(4, 'Warcraft III', '2002-07-03', 'Videojuego multijugador', 'Microsoft Windows, macOS, Mac OS Classic\r\n', 3),
(5, 'Assassin\'s Creed IV: Black Flag', '2013-10-19', 'Videojuego multijugador', 'PlayStation 4, Nintendo Switch, PlayStation 3', 2),
(6, 'Far Cry 4', '2014-11-17', 'Videojuego multijugador, Videojuego de un jugador', 'PlayStation 4, PlayStation 3, Xbox 360, Microsoft Windows, Xbox One', 2),
(7, 'League of Legends', '2009-10-27', 'MOBA', ' Microsoft Windows, macOS', 1),
(8, 'Valorant', '2020-06-02', 'Videojuego multijugador', 'PlayStation 5, Microsoft Windows, Xbox Series X|S, Android', 1),
(9, 'Teamfight Tactics', '2019-09-26', 'Videojuego multijugador', 'iOS, Android, macOS, Microsoft Windows, Mac OS', 1),
(10, 'Overwatch 2', '2022-10-04', 'Videojuego multijugador', 'PlayStation 5, PlayStation 4, Nintendo Switch, Microsoft Windows, Xbox One, Xbox Series X|S, GeForce Now', 3),
(11, 'Far Cry 6', '2021-10-07', 'Videojuego multijugador', 'PlayStation 5, PlayStation 4, Xbox Series X|S', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juegos`),
  ADD KEY `id_compania` (`id_compania`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
  MODIFY `id_compania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_compania`) REFERENCES `compania` (`id_compania`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;