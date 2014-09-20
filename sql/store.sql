-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2014 a las 08:54:49
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET ascii NOT NULL,
  `descripcion` varchar(200) CHARACTER SET ascii NOT NULL,
  `imagen` varchar(100) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `brand`
--

INSERT INTO `brand` (`id`, `name`, `descripcion`, `imagen`) VALUES
(2, 'seven', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ped', '1.png'),
(3, 'Wrangler', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementu', '2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `movil` int(12) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `dninif` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `nombre`, `apellidos`, `email`, `usuario`, `contrasena`, `telefono`, `movil`, `pais`, `dninif`) VALUES
(2, 'gio', 'guadalupe', 'giovanajgs@hotmail.com', 'gio', '12345', 12345, 12345, 'peru', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagesproducts`
--

CREATE TABLE IF NOT EXISTS `imagesproducts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idproduct` int(100) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `imagesproducts`
--

INSERT INTO `imagesproducts` (`id`, `idproduct`, `imagen`, `titulo`, `descripcion`) VALUES
(10, 22, '1.jpg', '', ''),
(11, 23, '2.jpg', '', ''),
(12, 24, '3.jpg', '', ''),
(13, 25, '4.jpg', '', ''),
(14, 26, '5.jpg', '', ''),
(15, 27, '6.jpg', '', ''),
(16, 28, '7.jpg', '', ''),
(17, 29, '8.jpg', '', ''),
(18, 30, '9.jpg', '', ''),
(19, 31, 'After-Six-Primavera-Vestidos-de-Damas-de-Honor-1.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE IF NOT EXISTS `lineaspedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idpedido` int(100) DEFAULT NULL,
  `idproducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `utc` int(100) NOT NULL,
  `anio` int(4) NOT NULL,
  `mes` int(2) NOT NULL,
  `dia` int(2) NOT NULL,
  `hora` int(2) NOT NULL,
  `minuto` int(2) NOT NULL,
  `segundo` int(2) NOT NULL,
  `ip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `navegador` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pagina` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idcliente` int(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(30,2) DEFAULT NULL,
  `existencias` int(255) DEFAULT NULL,
  `activado` tinyint(1) DEFAULT NULL,
  `id_brand` int(11) NOT NULL,
  `size` varchar(200) CHARACTER SET ascii NOT NULL,
  `colour` varchar(200) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `descripcion`, `precio`, `existencias`, `activado`, `id_brand`, `size`, `colour`) VALUES
(22, 'vestido ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget ', '55.00', 50, 1, 0, '', ''),
(23, 'vestido floreado', 'Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '30.00', 50, 1, 0, '', ''),
(24, 'vestido negro', 'Consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.', '25.00', 100, 1, 0, '', ''),
(25, 'Polo plomo', 'Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Susp', '10.00', 50, 1, 0, '', ''),
(26, 'polo negro', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '45.00', 100, 1, 0, '', ''),
(27, 'polo rayas', 'In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '23.00', 50, 1, 0, '', ''),
(28, 'Falda verde', 'Adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam molli', '55.00', 50, 1, 0, '', ''),
(29, 'Polo rayas azul', 'Dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '30.00', 100, 1, 0, '', ''),
(30, 'Polo chatran', 'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '45.00', 100, 1, 0, '', ''),
(31, 'blusa kevin', 'aaaaaaaaa', '30.00', 50, 0, 0, '', ''),
(37, 'sas', 'asdf', '45.00', 100, 0, 2, 'medium,large', 'fdad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
