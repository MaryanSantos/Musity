-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-11-2023 a las 20:56:17
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratantes`
--

DROP TABLE IF EXISTS `contratantes`;
CREATE TABLE IF NOT EXISTS `contratantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `foto_portada` varchar(255) DEFAULT NULL,
  `genero_favorito` varchar(50) NOT NULL,
  `tipo_contratacion` varchar(50) NOT NULL,
  `numero_telefono` varchar(20) NOT NULL,
  `ciudad_origen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contratantes`
--

INSERT INTO `contratantes` (`id`, `nombre_completo`, `apellidos`, `correo_electronico`, `fecha_nacimiento`, `genero`, `contrasena`, `foto_perfil`, `foto_portada`, `genero_favorito`, `tipo_contratacion`, `numero_telefono`, `ciudad_origen`) VALUES
(1, 'Maryan', 'Francisco', 'perezlopezmario657@gmail.com', '2023-11-01', 'Mujer', '12345', 'DIAGRAMA TORRE CAPORTE SWITCH.png', 'DIAGRAMA TORRE CAPORTE SWITCH (1).png', 'Reggaeton', 'Grupos', '4432235544', 'Morelia'),
(9, 'Gerardo', 'Diaz', 'geradiaz@gmail.com', '2023-09-12', 'Hombre', '$2y$10$FTWNSL94Xma1xKupxpRIYu1s4hr0NJBn4VcJM6UOzslGWJ/tBMKzy', 'DIAGRAMA TORRE CAPORTE SWITCH.png', 'DIAGRAMA TORRE CAPORTE SWITCH (1).png', 'Belica', 'Grupos', '7771112233', 'La Calera'),
(10, 'Maryan', 'Francisco', 'perezlopezmario657@gmail.com', '2023-11-14', 'Mujer', '12345', 'DIAGRAMA TORRE CAPORTE SWITCH (1).png', 'Post de Instagram Aviso Importante Corporativo 3D.png', 'Reggaeton', 'Solista', '4432235544', 'Morelia'),
(11, 'Maryan', 'Francisco', 'perezlopezmario657@gmail.com', '2023-10-31', 'Hombre', 'jj', 'DIAGRAMA TORRE CAPORTE SWITCH (1).png', 'Actividad 10 - Espacio dinámico de caché - Santos Cuevas Maryan Francisco.pdf (1).pdf', 'Belica', 'Solista', '4432235544', 'Morelia'),
(12, 'Maryan', 'Santos', 'maryan@gmail.com', '2023-08-09', 'Hombre', '12345', 'TALLER MÉCANICO MEMO.png', 'LEON.jpg', 'Belica', 'Solista', '4432235544', 'Morelia'),
(13, 'Maryan', 'Santos', 'maryan@gmail.com', '2023-08-09', 'Hombre', '123456', 'TALLER MÉCANICO MEMO.png', 'LEON.jpg', 'Belica', 'Solista', '4432235544', 'Morelia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_r` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_r`, `rol`) VALUES
(1, 'administrador'),
(2, 'músico'),
(3, 'contratante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `id_roles` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_roles` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `correo`, `id_roles`) VALUES
(1, 'maryan', '1234', 'maryan@gmail.com', 1),
(2, 'iliana', '1234', 'iliana@gmail.com', 2),
(3, 'crozby', '1234', 'crozby@gmail.com', 3),
(4, 'Maryan', '$2y$10$mS.UaaFEmYRzB/tzsQ9dl...V5wzCnGf.wjz7f7G5cI7XVcrg12Qi', 'perezlopezmario657@gmail.com', 3),
(5, 'Gerardo', '$2y$10$FTWNSL94Xma1xKupxpRIYu1s4hr0NJBn4VcJM6UOzslGWJ/tBMKzy', 'geradiaz@gmail.com', 3),
(6, 'Maryan', '12345', 'perezlopezmario657@gmail.com', 3),
(7, 'Maryan', 'jj', 'perezlopezmario657@gmail.com', 3),
(8, 'Maryan', '12345', 'maryan@gmail.com', 3),
(9, 'Maryan', '123456', 'maryan@gmail.com', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_roles`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
