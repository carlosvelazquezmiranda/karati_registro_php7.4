-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2021 a las 07:16:14
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `karati`
--
CREATE DATABASE IF NOT EXISTS `karati` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `karati`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido_Paterno` varchar(100) NOT NULL,
  `Apellido_Materno` varchar(100) NOT NULL,
  `Fecha_de_Nacimiento` date NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefono_Celular` varchar(15) NOT NULL,
  `Contra` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Fecha_de_Nacimiento`, `Email`, `Telefono_Celular`, `Contra`) VALUES
(1, 'Carlos', 'Velázquez', 'Miranda', '1985-01-01', 'aDS@GMAIL.COM', '2343242342', '43b2f5b66f23ffea3d1a9b606bfc9b61'),
(3, 'Carlos', 'Velázquez', 'Miranda', '1985-01-09', 'aDS@GMAIL.COM', '2343242342', '43b2f5b66f23ffea3d1a9b606bfc9b61'),
(4, 'Bruno', 'Velazquez', 'Miranda', '1985-06-17', 'gama@gmail.com', '5589232847', 'b688db6fe6c3402152c3efcaeda33618'),
(5, 'Eduin', 'Velazquez', 'Miranda', '1985-10-10', 'eduin@gmail.com', '5598723846', '7b62607c73e021a650bc0ef3929bcbb3'),
(6, 'Frida', 'Garduño', 'Acevedo', '1985-04-17', 'frida@gmail.com', '5590824732', '90377cc6d284082f5abcbcfc60f14357'),
(7, 'jg', 'jgh', 'lhj', '1986-10-14', 'akjdgskj@gmail.com', '5590824732', '0ae38a266af59b37e21ec30b5816bc95');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
