-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 18:24:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelaceti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_incripcion` int(11) NOT NULL,
  `Matricula` varchar(45) NOT NULL,
  `Asignatura` varchar(45) NOT NULL,
  `Grupo` varchar(45) NOT NULL,
  `Profesor` varchar(45) NOT NULL,
  `Turno` int(11) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Estatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_incripcion`, `Matricula`, `Asignatura`, `Grupo`, `Profesor`, `Turno`, `Semestre`, `Estatus`) VALUES
(0, '0004', 'Programacion', '2', 'Magali Hernandez', 1, 8, 'ok'),
(0, '0004', 'Programacion', '2', 'Magali Hernandez', 1, 8, 'ok'),
(1, '0001', 'cisco', 'Ddp', 'jose', 2, 7, 'ok'),
(1, '0001', 'cisco', 'Ddp', 'jose', 2, 7, 'ok'),
(1, '0001', 'cisco', 'Ddp', 'jose', 2, 7, 'ok'),
(1, '0001', 'cisco', 'Ddp', 'jose', 2, 7, 'ok'),
(0, '0001', 'programacion web', 'dspp', 'daniela', 1, 8, 'ok'),
(0, '9999', 'Programacion Orientada OBJ', '2B', 'Vanessa', 1, 8, 'ok'),
(9, '0000', 'Matematicas avanzadas', '3B', 'Vanessa', 1, 8, 'ok'),
(9, '0000', 'Matematicas avanzadas', '3B', 'Vanessa', 1, 8, 'ok');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Matricula` varchar(60) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `ApellidoPaterno` varchar(60) NOT NULL,
  `ApellidoMaterno` varchar(60) NOT NULL,
  `Turno` int(11) NOT NULL,
  `TipoUsuario` varchar(60) NOT NULL,
  `Passwoord` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Matricula`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Turno`, `TipoUsuario`, `Passwoord`) VALUES
(1, '0001', 'josefina', 'martinez', 'hernandez', 1, 'SE', ''),
(1, '0001', 'josefina', 'martinez', 'hernandez', 1, 'SE', ''),
(1, '0001', 'josefina', 'martinez', 'hernandez', 1, 'SE', ''),
(2, '0002', 'josefi', 'martine', 'hernande', 2, 'SE', 'qwe'),
(2, '0001', 'vanessa', 'flores', 'cervantes', 2, 'AL', 'vanessa21'),
(2, '0000', 'Vanessa Karol', 'Medellin', 'Flores', 1, 'SE', 'Progweb2# '),
(3, '9999', 'Yesenia', 'Flores', 'Cevrantes', 2, 'AL', 'Progweb2# '),
(3, '9999', 'Yesenia', 'Flores', 'Cevrantes', 2, 'AL', '213'),
(4, '9999', 'josefina', 'martinez', 'hernandez', 1, '', 'ES172004305root'),
(1, '9998', 'josefina', 'martinez', 'hernandez', 1, 'SE', '123'),
(1, '9978', 'josefina', 'martinez', 'hernandez', 1, 'AL', '1234'),
(0, '', '', '', '', 0, '', ''),
(5, '9947', 'josefina', 'martinez', 'hernandez', 1, 'SE', '1234'),
(5, '9946', 'josefina', 'martinez', 'hernandez', 1, 'SE', '12345'),
(5, '9998', 'josefina', 'martinez', 'hernandez', 1, 'SE', '12'),
(5, '9991', 'josefina', 'martinez', 'hernandez', 1, 'AL', '12'),
(6, '9992', 'vanessa', 'flores', 'flores', 1, 'AL', '|12'),
(6, '9995', 'vanessa', 'flores', 'flores', 1, 'AL', ''),
(6, '9996', 'vanessa', 'flores', '', 1, 'AL', ''),
(6, '1111', 'vanessa', 'flores', 'flores', 1, 'AL', ''),
(6, '1112', 'vanessa', 'flores', 'flores', 1, 'AL', '123'),
(6, '1113', 'vanessa', 'flores', 'flores', 1, 'AL', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
