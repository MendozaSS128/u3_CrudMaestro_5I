-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 01:10:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cfe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `idcliente` int(2) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `Telefono` bigint(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `FechaCont` date NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`idcliente`, `Nombre`, `ApellidoM`, `ApellidoP`, `Telefono`, `Correo`, `FechaCont`, `Direccion`) VALUES
(1, 'Maria', 'Mendoza', 'Castrejon', 6561568999, 'selma@gmail.com', '2020-05-15', 'Calle Manzana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_medidor`
--

CREATE TABLE `tbl_medidor` (
  `idmedidor` int(50) NOT NULL,
  `NumMed` int(50) NOT NULL,
  `TipoMed` varchar(50) NOT NULL,
  `Fechains` date NOT NULL,
  `idcliente` int(2) NOT NULL,
  `FechaUl` date NOT NULL,
  `idfactura` int(50) NOT NULL,
  `MarcaMed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_medidor`
--

INSERT INTO `tbl_medidor` (`idmedidor`, `NumMed`, `TipoMed`, `Fechains`, `idcliente`, `FechaUl`, `idfactura`, `MarcaMed`) VALUES
(78, 30, 'International', '2020-06-11', 1, '2023-11-18', 12, 'Volto'),
(777, 70, 'Internacional', '2020-12-05', 3, '2023-07-06', 15, 'Volto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tbl_medidor`
--
ALTER TABLE `tbl_medidor`
  ADD PRIMARY KEY (`idmedidor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_medidor`
--
ALTER TABLE `tbl_medidor`
  MODIFY `idmedidor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
