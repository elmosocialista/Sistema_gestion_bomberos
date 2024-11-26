-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2024 a las 05:29:37
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bomberos_trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bomberos`
--

CREATE TABLE `bomberos` (
  `ID_Bombero` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Teléfono` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `Operatividad` varchar(100) DEFAULT NULL,
  `ID_Cuartel` int(11) DEFAULT NULL,
  `radio_acargo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bomberos`
--

INSERT INTO `bomberos` (`ID_Bombero`, `Nombre`, `Teléfono`, `fecha_ingreso`, `Operatividad`, `ID_Cuartel`, `radio_acargo`) VALUES
(1111, 'Juan Pérez', '987654321', '2023-01-15', 'Operativo', 1, '1111 JPRG'),
(2222, 'María González', '912345678', '2023-02-20', 'Forestal', 1, '2222 MGSF'),
(3333, 'Luis Fernández', '934567890', '2023-03-10', 'Rescate', 2, '333 LFRG'),
(3434, 'Matías Vargas Cortes', '954932445', '2024-11-06', 'Operativo, Trauma', 4, '3434'),
(3554, 'Joaquin Ignacio Valenzuela Escobar ', '993386427', '2022-04-27', 'trauma, forestal, rescate', 4, '3454 DGP8550E'),
(5555, 'RAUL GERMAN MOYA SILVA', '1232456789', '2024-11-05', 'trauma y rescate', 4, '3434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuarteles`
--

CREATE TABLE `cuarteles` (
  `ID_Cuartel` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Dirección` varchar(255) DEFAULT NULL,
  `Teléfono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuarteles`
--

INSERT INTO `cuarteles` (`ID_Cuartel`, `Nombre`, `Dirección`, `Teléfono`) VALUES
(1, 'cuartel primera compañia', 'Calle O`Carrol 485', '72222223'),
(2, 'cuartel segunda compañia', ' Viña del Mar, Brasil &, Rancagua', '72222223'),
(3, 'tercera compañia', 'Av. Libertador Gral. Bernardo O\'Higgins 1037', '72222223'),
(4, 'cuarta Compañía Fidel Azocar', 'Freire 755', '72222223'),
(5, 'quinta compañia', 'BOMBERO VILLALOBOS #550 RANCAGUA', '72222223'),
(6, 'sexta compañia', 'Av. República de Chile 511', '72222223'),
(7, 'septima compañia', 'Constanza 01491', '72222223'),
(8, 'octava compañia', 'Monte Águila, 2985,', '72222223'),
(99, 'CUARTEL GENERAL', 'Brasil 860', '72222223');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL,
  `Rol` enum('Operador','Administrador','Cuartel') DEFAULT NULL,
  `ID_Cuartel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Nombre_Usuario`, `Contraseña`, `Rol`, `ID_Cuartel`) VALUES
(1, 'ADMIN', 'ADMIN', 'Administrador', 99),
(4, 'cbrgua4ta', 'cbrgua4ta', 'Cuartel', 4),
(391, 'operador391', 'operador391', 'Operador', 99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bomberos`
--
ALTER TABLE `bomberos`
  ADD PRIMARY KEY (`ID_Bombero`),
  ADD KEY `ID_Cuartel` (`ID_Cuartel`);

--
-- Indices de la tabla `cuarteles`
--
ALTER TABLE `cuarteles`
  ADD PRIMARY KEY (`ID_Cuartel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `Nombre_Usuario` (`Nombre_Usuario`),
  ADD KEY `ID_Cuartel` (`ID_Cuartel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bomberos`
--
ALTER TABLE `bomberos`
  MODIFY `ID_Bombero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123214;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bomberos`
--
ALTER TABLE `bomberos`
  ADD CONSTRAINT `bomberos_ibfk_1` FOREIGN KEY (`ID_Cuartel`) REFERENCES `cuarteles` (`ID_Cuartel`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_Cuartel`) REFERENCES `cuarteles` (`ID_Cuartel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
