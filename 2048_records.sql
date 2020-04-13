-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2020 a las 20:27:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2048_records`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT ' ',
  `nickname` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `province` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nickname`, `password`, `phone`, `province`) VALUES
(1, 'LukeSkywalker', '7c4a8d09ca3762af61e59520943dc26494f8941b', '+5358542967', 'Pinar del Rio'),
(2, 'Zuzana', '7c4a8d09ca3762af61e59520943dc26494f8941b', '+5325414544', 'Santiago de Cuba'),
(3, 'Demo', '7c4a8d09ca3762af61e59520943dc26494f8941b', '+5354578459', 'Habana\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_records`
--

CREATE TABLE `user_records` (
  `id` int(11) NOT NULL,
  `id_user` varchar(64) NOT NULL,
  `record` int(11) NOT NULL,
  `intents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_records`
--

INSERT INTO `user_records` (`id`, `id_user`, `record`, `intents`) VALUES
(2, '1', 5320, 24),
(4, '2', 3536, 18),
(5, '3', 876, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_records`
--
ALTER TABLE `user_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_records`
--
ALTER TABLE `user_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
