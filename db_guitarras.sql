-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2022 a las 00:53:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_guitarras`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `top_5` ()  SELECT * FROM `guitarras` ORDER BY puntuacion DESC LIMIT 5$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guitarras`
--

CREATE TABLE `guitarras` (
  `id` int(11) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `cuerdas` int(11) NOT NULL,
  `puente` varchar(100) NOT NULL,
  `trastes` varchar(200) NOT NULL,
  `escala` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `guitarras`
--

INSERT INTO `guitarras` (`id`, `marca`, `modelo`, `cuerdas`, `puente`, `trastes`, `escala`, `puntuacion`, `imagen`) VALUES
(1, 'Yamaha', 'RSP20', 6, 'tune - o - matic', '22 trastes jumbo de acero inoxidable', 2475, 78, 'Yamaha-RSP20-horizontal.png'),
(2, 'Yamaha', 'RSP02T', 6, 'Tune-O-Matic', '22 trastes jumbo de acero inoxidable', 2475, 78, 'Yamaha-RSP02T-horizontal.png'),
(3, 'Yamaha', 'PAC612VIIFM', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 255, 75, 'Yamaha-PAC612VIIFM-horizontal.png'),
(4, 'Yamaha', 'PAC612VIIFMX', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 255, 75, 'Yamaha-PAC612VIIFMX-horizontal.png'),
(5, 'Yamaha', 'PAC612VII', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 255, 70, 'Yamaha-PAC612VII-horizontal.png'),
(6, 'Yamaha', 'PAC611VIIFM', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 255, 74, 'Yamaha-PAC611VFM-horizontal.png'),
(7, 'Gibson', '1964TRINI LOPEZ STANDARD EBONY', 6, 'puente ABR-1', '22 trastes medianos Jumbo', 2475, 74, 'Gibson-1964-Trini-Lopez-Standard-Ebony-Ultra-Light-Aged-horizontal.png'),
(8, 'Gibson', '70s EXPLORER', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 72, 'Gibson-70s-Explorer-horizontal.png'),
(9, 'Gibson', '70s FLYING', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-70s-Flying-V-horizontal.png'),
(10, 'Gibson', 'ADAM JONES 1979 LES PAUL CUSTOM', 6, 'Puente Tune-O-Matic', '22 trastes jumbo', 2475, 76, 'Gibson-Adam-Jones-1979-Les-Paul-Custom-VOS-horizontal.png'),
(11, 'Gibson', 'BRIAN RAY 62 SG JUNIOR', 6, 'ABR-1 con puente de opciones convertibles', '22 trastes jumbo', 2475, 75, 'Gibson-Brian-Ray-62-SG-Junior-horizontal.png'),
(12, 'Gibson', 'ES-335', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 72, 'Gibson-ES-335-horizontal.png'),
(13, 'Gibson', 'ES-339 FIGURED', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-ES-339-Figured-horizontal.png'),
(14, 'Gibson', 'EXPLORER', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-Explorer-horizontal.png'),
(15, 'Gibson', 'FIREBIRD', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 75, 'Gibson-Firebird-horizontal.png'),
(16, 'Gibson', 'FLYING V', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-Flying-V-horizontal.png'),
(17, 'Gibson', 'JIMI HENDRIX 1967 SG CUSTOM', 6, 'ABR-1 Maestro Puente Vibrola Corto', '22 trastes antiguos', 2475, 74, 'Gibson-Jimi-Hendrix-1967-SG-Custom-horizontal.png'),
(18, 'Gibson', 'JIMI HENDRIX 1969 FLYING V', 6, 'ABR-1 Maestro Puente Vibrola Corto', '22 trastes antiguos', 2475, 73, 'Gibson-Jimi-Hendrix-1969-Flying-V-horizontal.png'),
(19, 'Gibson', 'KIRK DOUGLAS SIGNATURE SG', 6, 'Aluminio Nashville Tune-O-Matic con puente Tremolo', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-Kirk-Douglas-Signature-SG-horizontal.png'),
(20, 'Gibson', 'LEE ROY PARNELL 59 LES PAUL STANDARD', 6, 'Puente ABR-1 sin cables', '22 trastes medianos Jumbo', 2475, 76, 'Gibson-Lee-Roy-Parnell-59-Les-Paul-Standard-horizontal.png'),
(21, 'Gibson', 'LES PAUL CLASSIC', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 76, 'Gibson-Les-Paul-Classic-horizontal.png'),
(22, 'Gibson', 'LES PAUL MODERN', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 80, 'Gibson-Les-Paul-Modern-horizontal.png'),
(23, 'Gibson', 'LES PAUL STANDARD 50s P-90', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 80, 'Gibson-Les-Paul-Standard-50s-P-90-horizontal.png'),
(24, 'Gibson', 'LES PAUL STANDARD 50s', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 73, 'Gibson-Les-Paul-Standard-50s-horizontal.png'),
(25, 'Gibson', 'LES PAUL STANDAD 60s', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 74, 'Gibson-Les-Paul-Standard-60s-horizontal.png'),
(26, 'Gibson', 'LES PAUL STUDIO', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 74, 'Gibson-Les-Paul-Studio-horizontal.png'),
(27, 'Gibson', 'SG MODERM', 6, 'Puente Tune-O-Matic de Nashville', '24 trastes medianos jumbo', 2475, 77, 'Gibson-SG-Modern-horizontal.png'),
(28, 'Gibson', 'SLASH LES PAUL STANDARD', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 74, 'Gibson-Slash-Les-Paul-Standard-horizontal.png'),
(29, 'Gibson', 'SLASH VICTORIA LES PAUL STANDARD', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 2475, 74, 'Gibson-Slash-Victoria-Les-Paul-Standard-Goldtop-horizontal.png'),
(30, 'Ibanez', 'AZ2204N PRESTIGE ', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 255, 82, 'Ibanez-AZ2204N-Prestige-horizontal.png'),
(31, 'Ibanez', 'AZ2204NW PRESTIGE', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 255, 82, 'Ibanez-AZ2204NW-Prestige-horizontal.png'),
(32, 'Ibanez', 'JCRG2103 J.CUSTOM', 6, 'Puente de borde', '24 trastes Jumbo Evo Gold', 255, 83, 'Ibanez-JCRG2103-j-custom-horizontal.png'),
(33, 'Ibanez', 'LB1', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 255, 83, 'Ibanez-LB1-horizontal.png'),
(34, 'Ibanez', 'MM1', 6, 'Puente tremolo Gotoh T1802', '24 trastes jumbo de acero inoxidable', 255, 83, 'Ibanez-MM1-horizontal.png'),
(35, 'Ibanez', 'MM7', 7, 'Puente de tremolo Gotoh T1872S', '24 trastes jumbo de acero inoxidable', 255, 82, 'Ibanez-MM7-horizontal.png'),
(36, 'Ibanez', 'PIA3761', 6, 'Puente de tremolo de borde', '24 trastes jumbo de acero inoxidable', 255, 82, 'Ibanez-PIA3761-horizontal.png'),
(37, 'Ibanez', 'RG5170G PRESTIGE', 6, 'Puente de tremolo Lo-Pro Edge', '24 trastes jumbo de acero inoxidable', 255, 83, 'Ibanez-RG5170G-Prestige-horizontal.png'),
(38, 'Ibanez', 'RGR5221 PRESTIGE', 6, 'Puente Gibraltar Standard II', '24 trastes jumbo de acero inoxidable', 255, 83, 'Ibanez-RGR5221-Prestige-horizontal.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `guitarras`
--
ALTER TABLE `guitarras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marca` (`marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guitarras`
--
ALTER TABLE `guitarras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
