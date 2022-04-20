-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2022 a las 02:30:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE db_guitarras;
USE db_guitarras;


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
CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_guitarras` ()  SELECT * FROM guitarras WHERE estado = 1 ORDER BY puntuacion DESC$$

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
  `precio` varchar(13) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `guitarras`
--

INSERT INTO `guitarras` (`id`, `marca`, `modelo`, `cuerdas`, `puente`, `trastes`, `escala`, `puntuacion`, `precio`, `imagen`, `estado`) VALUES
(1, 'Yamaha', 'RSP20', 6, 'tune - o - matic', '22 trastes jumbo de acero inoxidable', 25, 8, '218.36', ';Yamaha-RSP20-horizontal.png', b'1'),
(2, 'Yamaha', 'RSP02T', 6, 'Tune-O-Matic', '22 trastes jumbo de acero inoxidable', 25, 8, '218.36', ';Yamaha-RSP02T-horizontal.png', b'1'),
(3, 'Yamaha', 'PAC612VIIFM', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 26, 8, '66.923', 'Yamaha-PAC612VIIFM-horizontal.png', b'1'),
(4, 'Yamaha', 'PAC612VIIFMX', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 26, 8, '92.143', 'Yamaha-PAC612VIIFMX-horizontal.png', b'1'),
(5, 'Yamaha', 'PAC612VII', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 26, 7, '83.634', 'Yamaha-PAC612VII-horizontal.png', b'1'),
(6, 'Yamaha', 'PAC611VIIFM', 6, 'Puente Wilkinson VS50 6', '22 trastes medianos', 26, 7, '86.097', 'Yamaha-PAC611VFM-horizontal.png', b'1'),
(7, 'Gibson', '1964TRINI LOPEZ STANDARD EBONY', 6, 'puente ABR-1', '22 trastes medianos Jumbo', 25, 7, '578.665', 'Gibson-1964-Trini-Lopez-Standard-Ebony-Ultra-Light-Aged-horizontal.png', b'1'),
(8, 'Gibson', '70s EXPLORER', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '231.441', 'Gibson-70s-Explorer-horizontal.png', b'1'),
(9, 'Gibson', '70s FLYING', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '231.195', 'Gibson-70s-Flying-V-horizontal.png', b'1'),
(10, 'Gibson', 'ADAM JONES 1979 LES PAUL CUSTOM', 6, 'Puente Tune-O-Matic', '22 trastes jumbo', 25, 8, '1.601.122', 'Gibson-Adam-Jones-1979-Les-Paul-Custom-VOS-horizont.png', b'1'),
(11, 'Gibson', 'BRIAN RAY 62 SG JUNIOR', 6, 'ABR-1 con puente de opciones convertibles', '22 trastes jumbo', 25, 8, '517.202', 'Gibson-Brian-Ray-62-SG-Junior-horizontal.png', b'1'),
(12, 'Gibson', 'ES-335', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '349.071', 'Gibson-ES-335-horizontal.png', b'1'),
(13, 'Gibson', 'ES-339 FIGURED', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '578.665', 'Gibson-ES-339-Figured-horizontal.png', b'1'),
(14, 'Gibson', 'EXPLORER', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '191.533', 'Gibson-Explorer-horizontal.png', b'1'),
(15, 'Gibson', 'FIREBIRD', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 8, '79.446', 'Gibson-Firebird-horizontal.png', b'1'),
(16, 'Gibson', 'FLYING V', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '184.635', 'Gibson-Flying-V-horizontal.png', b'1'),
(17, 'Gibson', 'JIMI HENDRIX 1967 SG CUSTOM', 6, 'ABR-1 Maestro Puente Vibrola Corto', '22 trastes antiguos', 25, 7, '1.676.627', 'Gibson-Jimi-Hendrix-1967-SG-Custom-horizontal.png', b'1'),
(18, 'Gibson', 'JIMI HENDRIX 1969 FLYING V', 6, 'ABR-1 Maestro Puente Vibrola Corto', '22 trastes antiguos', 25, 7, '1.168.170', 'Gibson-Jimi-Hendrix-1969-Flying-V-horizontal.png', b'1'),
(19, 'Gibson', 'KIRK DOUGLAS SIGNATURE SG', 6, 'Aluminio Nashville Tune-O-Matic con puente Tremolo', '22 trastes medianos Jumbo', 25, 7, '366.478', 'Gibson-Kirk-Douglas-Signature-SG-horizontal.png', b'1'),
(20, 'Gibson', 'LEE ROY PARNELL 59 LES PAUL STANDARD', 6, 'Puente ABR-1 sin cables', '22 trastes medianos Jumbo', 25, 8, '923.773', 'Gibson-Lee-Roy-Parnell-59-Les-Paul-Standard-horizontal.png', b'1'),
(21, 'Gibson', 'LES PAUL CLASSIC', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 8, '217.916', 'Gibson-Les-Paul-Classic-horizontal.png', b'1'),
(22, 'Gibson', 'LES PAUL MODERN', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 8, '7.393', 'Gibson-Les-Paul-Modern-horizontal.png', b'1'),
(23, 'Gibson', 'LES PAUL STANDARD 50s P-90', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '258.567', 'Gibson-Les-Paul-Standard-50s-P-90-horizontal.png', b'1'),
(24, 'Gibson', 'LES PAUL STANDARD 50s', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '264.234', 'Gibson-Les-Paul-Standard-50s-horizontal.png', b'1'),
(25, 'Gibson', 'LES PAUL STANDARD 60s', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '258.567', 'Gibson-Les-Paul-Standard-60s-horizontal.png', b'1'),
(26, 'Gibson', 'LES PAUL STUDIO', 6, 'Puente de aluminio Nashville Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '196.974', 'Gibson-Les-Paul-Studio-horizontal.png', b'1'),
(27, 'Gibson', 'SG MODERM', 6, 'Puente Tune-O-Matic de Nashville', '24 trastes medianos jumbo', 25, 8, '209.993', 'Gibson-SG-Modern-horizontal.png', b'1'),
(28, 'Gibson', 'SLASH LES PAUL STANDARD', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '299.712', 'Gibson-Slash-Les-Paul-Standard-horizontal.png', b'1'),
(29, 'Gibson', 'SLASH VICTORIA LES PAUL STANDARD', 6, 'Puente ABR-1 Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '103.722', 'Gibson-Slash-Victoria-Les-Paul-Standard-Goldtop-horizon.png', b'1'),
(30, 'Ibanez', 'AZ2204N PRESTIGE ', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 26, 8, '221.611', 'Ibanez-AZ2204N-Prestige-horizontal.png', b'1'),
(31, 'Ibanez', 'AZ2204NW PRESTIGE', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 26, 8, '233.930', 'Ibanez-AZ2204NW-Prestige-horizontal.png', b'1'),
(32, 'Ibanez', 'JCRG2103 J.CUSTOM', 6, 'Puente de borde', '24 trastes Jumbo Evo Gold', 26, 8, '862.180', 'Ibanez-JCRG2103-j-custom-horizontal.png', b'1'),
(33, 'Ibanez', 'LB1', 6, 'Puente Gotoh T1702B', '22 trastes jumbo de acero inoxidable', 26, 8, '302.067', 'Ibanez-LB1-horizontal.png', b'1'),
(34, 'Ibanez', 'MM1', 6, 'Puente trEmolo Gotoh T1802', '24 trastes jumbo de acero inoxidable', 26, 8, '285.791', 'Ibanez-MM1-horizontal.png', b'1'),
(35, 'Ibanez', 'MM7', 7, 'Puente de trEmolo Gotoh T1872S', '24 trastes jumbo de acero inoxidable', 26, 8, '311.907', 'Ibanez-MM7-horizontal.png', b'1'),
(36, 'Ibanez', 'PIA3761', 6, 'Puente de trEmolo de borde', '24 trastes jumbo de acero inoxidable', 26, 8, '372.876', 'Ibanez-PIA3761-horizontal.png', b'1'),
(37, 'Ibanez', 'RG5170G PRESTIGE', 6, 'Puente de trEmolo Lo-Pro Edge', '24 trastes jumbo de acero inoxidable', 26, 8, '228.126', 'Ibanez-RG5170G-Prestige-horizontal.png', b'1'),
(38, 'Ibanez', 'RGR5221 PRESTIGE', 6, 'Puente Gibraltar Standard II', '24 trastes jumbo de acero inoxidable', 26, 8, '211.377', 'Ibanez-RGR5221-Prestige-horizontal.png', b'1'),
(39, 'Fender', 'AMERICAN PROFESIONAL II STRATOCASTER HSS', 6, 'TrEmolo sincronizado de 2 puntos con monturas de acero doblado, brazo de trEmolo desplegable', '22 trastes estrechos altos', 26, 8, '262.724', 'Ibanez-RGR5221-Prestige-horizontal.png', b'1'),
(40, 'Fender', 'AMERICAN PROFESIONAL II STRATOCASTER', 6, 'TrEmolo sincronizado de 2 puntos con monturas de acero doblado, brazo de trEmolo desplegable ', '22 trastes estrechos altos', 26, 7, '219.935', 'Fender-American-Professional-II-Stratocaster-horizontal.png', b'1'),
(41, 'Fender', 'AMERICAN PROFESIONAL II TELECASTER', 6, 'Tele de 3 sillines de carga superior/de cuerda con puente de sillines de latEn compensado Bullet', '22 trastes estrechos altos', 26, 7, '207.710', 'Fender-American-Professional-II-Telecaster-horizontal.png', b'1'),
(42, 'Fender', 'AMERICAN PROFESIONAL II TELECASTER DELUXE', 6, 'Puente Tele de estilo vintage con corte personalizado de 3 selletas con puente de selletas de latEn ', '22 trastes estrechos altos', 26, 8, '202.697', 'Fender-American-Professional-II-Telecaster-Deluxe-horizon.png', b'1'),
(43, 'Fender', 'ULTRA JAZZMASTER', 6, 'Puente American Professional Jazzmaster', '21 trastes medianos jumbo', 26, 8, '266.514', 'Fender-American-Ultra-Jazzmaster-horizontal.png', b'1'),
(44, 'Fender', 'AMERICAN ULTRA LUXE STRATOCASTER FLOYD ROSE HSS', 6, 'Puente de trEmolo de 2 puntos de bloqueo doble original Floyd Rose', '22 trastes medianos jumbo de acero inoxidable', 26, 8, '278.067', 'Fender-American-Ultra-Luxe-Stratocaster-Floyd-Rose-HSS-horizontal.png', b'1'),
(45, 'Fender', 'AMERICAN ULTRA LUXE STRATOCASTER', 6, 'TrEmolo sincronizado de lujo de 2 puntos con puente Pop-In Arm', '22 trastes medianos jumbo de acero inoxidable', 26, 8, '1.350', 'Fender-American-Ultra-Luxe-Stratocaster-horizontal.png', b'1'),
(46, 'Fender', 'AMERICAN ULTRA LUXE TELECASTER FLOYD ROSE HH', 6, 'Puente de trEmolo de 2 puntos de bloqueo doble original Floyd Rose', '22 trastes medianos jumbo de acero inoxidable', 26, 8, '5.219', 'Fender-American-Ultra-Luxe-Stratocaster-Floyd-Rose-HSS.png', b'1'),
(47, 'Fender', 'AMERICAN ULTRA LUXE TELECASTER', 6, 'American Tele de 6 sillines con puente de sillines de latEn cromado', '22 trastes medianos jumbo de acero inoxidable', 26, 8, '278.067', 'Fender-American-Ultra-Luxe-Telecaster-horizontal.png', b'1'),
(48, 'Fender', 'AMERICAN ULTRA STRATOCASTER HSS', 6, 'TrEmolo sincronizado de lujo de 2 puntos con puente Pop-In Arm', '22 trastes medianos Jumbo', 26, 8, '262.558', 'Fender-American-Ultra-Stratocaster-HSS-horizontal.png', b'1'),
(49, 'Fender', 'AMERICAN ULTRA STRATOCASTER', 6, 'TrEmolo sincronizado de lujo de 2 puntos con puente Pop-In Arm', '22 trastes medianos Jumbo', 26, 8, '257.795', 'Fender-American-Ultra-Stratocaster-horizontal.png', b'1'),
(50, 'Fender', 'AMERICAN ULTRA TELECASTER', 6, 'American Tele de 6 sillines con puente de sillines de latEn cromado', '22 trastes medianos Jumbo', 26, 8, '300.648', 'Fender-American-Ultra-Telecaster-horizontal.png', b'1'),
(51, 'Fender', 'BRENT MASON TELECASTER', 6, 'Puente Telecaster de 6 sillines con puente Glaser Bender System', '21 trastes altos vintage', 26, 8, '344.319', 'Fender-Brent-Mason-Telecaster-horizontal.png', b'1'),
(52, 'Fender', 'CHRISSIE HYNDE TELECASTER', 6, 'Tele de 6 cuerdas de sillEn a travEs del cuerpo con puente de sillines de acero inoxidable', '21 trastes estrechos altos', 26, 7, '157.336', 'Fender-Chrissie-Hynde-Telecaster-horizontal.png', b'1'),
(53, 'Fender', 'DAVE MURRAY STRATOCASTER', 6, 'Floyd Rose FRT-O1000 Puente de trEmolo de 2 puntos de bloqueo doble', '21 trastes medianos jumbo', 26, 7, '133.348', 'Fender-Dave-Murray-Stratocaster-horizontal.png', b'1'),
(54, 'Fender', 'EOB SUSTAINER STRATOCASTER', 6, 'Puente de trEmolo sincronizado de estilo vintage de 6 sillines', '21 trastes estrechos altos', 26, 7, '155.614', 'Fender-EOB-Sustainer-Stratocaster-horizontal.png', b'1'),
(55, 'Fender', 'JV MODIFIED 50S STRATOCASTER HSS', 6, 'TrEmolo sincronizado estilo vintage de 6 sillines con puente de sillines de acero doblado', '21 trastes medianos jumbo', 26, 7, '157.344', 'Fender-JV-Modified-50s-Stratocaster-HSS-horizontal.png', b'1'),
(56, 'Fender', 'JV MODIFIED 50S TELECASTER', 6, 'Tele de estilo vintage de 3 sillines con puente de sillines de latEn de barril', '21 trastes medianos jumbo', 26, 7, '150.332', 'Fender-JV-Modified-50s-Telecaster-horizontal.png', b'1'),
(57, 'Fender', 'JV MODIFIED 60S STRATOCASTER', 6, 'TrEmolo sincronizado estilo vintage de 6 sillines con puente de sillines de acero doblado', '21 trastes medianos jumbo', 26, 7, '150.332', 'Fender-JV-Modified-60s-Stratocaster-horizontal.png', b'1'),
(58, 'Fender', 'JIM ROOT JAZZMASTER V4', 6, 'REgida de cuerdas a travEs del cuerpo de 6 sillines con puente de sillines de bloque', '22 trastes jumbo', 26, 7, '164.603', 'Fender-Jim-Root-Jazzmaster-V4-horizontal.png', b'1'),
(59, 'Fender', 'JIM ROOT JAZZMASTER', 6, 'REgida de cuerdas a travEs del cuerpo de 6 sillines con puente de sillines de bloque', '22 trastes jumbo', 26, 8, '174.937', 'Fender-Jim-Root-Jazzmaster-horizontal.png', b'1'),
(60, 'Fender', 'JIM ROOT STRATOCASTER', 6, 'REgida de cuerdas a travEs del cuerpo de 6 sillines con puente de sillines de bloque', '22 trastes jumbo', 26, 8, '215.903', 'Fender-Jim-Root-Stratocaster-horizontal.png', b'1'),
(61, 'Fender', 'JIMMY PAGE MIRROR TELECASTER', 6, 'Tele de estilo vintage de 3 sillines, carga superior o cuerdas a travEs del cuerpo con puente de sil', '21 trastes antiguos', 26, 7, '290.577', 'Fender-Jimmy-Page-Mirror-Telecaster-horizontal.png', b'1'),
(62, 'Fender', 'JOHNNY MARR JAGUAR', 6, 'Puente Jaguar con monturas Mustang y puente de cordal de trEmolo flotante de estilo vintage', '22 trastes antiguos', 25, 4, '6.676;', 'Fender-Johnny-Marr-Jaguar-horizontal.png', b'1'),
(63, 'Fender', 'KENNY WAYNE SHEPHERD STRATOCASTER', 6, 'TrEmolo sincronizado estilo vintage de 6 sillines con puente Graph Tech Saddles', '21 trastes jumbo', 26, 8, '221.316', 'Fender-Kenny-Wayne-Shepherd-Stratocaster-horizontal.png', b'1'),
(64, 'Fender', 'PLAYER PLUS METEORA HH', 6, 'TrEmolo sincronizado de 2 puntos con puente de sillines de bloque de acero cepillado', '22 trastes medianos Jumbo', 26, 7, '141.352', 'Fender-Player-Plus-Meteora-HH-horizontal.png', b'1'),
(65, 'Fender', 'STEVIE RAY VAUGHAN STRATOCASTER', 6, 'Puente de trEmolo sincronizado American Vintage de 6 sillines', '21 trastes estrechos altos', 26, 7, '291.438', 'Fender-Stevie-Ray-Vaughan-Stratocaster-horizontal.png', b'1'),
(66, 'Fender', 'STORIES COLLECTION ERIC JOHSON 1954 VIRGINIA STRATOCASTER', 6, 'Puente de trEmolo sincronizado American Vintage de 6 sillines', '21 trastes jumbo', 26, 7, '344.338', 'Fender-Stories-Collection-Eric-Johnson-1954-Virginia-Strat.png', b'1'),
(67, 'Fender', 'TOM MORELLO STRATOCASTER', 6, 'Puente Floyd Rose FRT-O2000 Tremolo de doble bloqueo (empotrado)', '22 trastes medianos Jumbo', 26, 8, '174.937', 'Fender-Tom-Morello-Stratocaster-horizontal.png', b'1'),
(68, 'Fender', 'YNGWIE MALMSTEEN STRATOCASTER', 6, 'Puente de trEmolo sincronizado American Vintage de 6 sillines', '21 trastes XL Jumbo', 26, 7, '291.438', 'Fender-Yngwie-Malmsteen-Stratocaster-horizontal.png', b'1'),
(69, 'Epiphone', 'BRENDON SMALL GHOSTHORSE EXPLORER', 6, 'Puente Floyd Rose FRT-1000', '24 trastes jumbo', 25, 7, '98.294', 'Epiphone-Brendon-Small-GhostHorse-Explorer-horizontal.png', b'1'),
(70, 'Epiphone', 'DAVE RUDE FLYING V', 6, 'Puente LockTone ABR', '22 trastes medianos Jumbo', 25, 7, '90.544', 'Epiphone-Dave-Rude-Flying-V-horizontal.png', b'1'),
(71, 'Epiphone', 'ES-335 FIGURED', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '65.570', 'Epiphone-ES-335-Figured-horizontal.png', b'1'),
(72, 'Epiphone', 'ES-335', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '67.169', 'Epiphone-ES-335-horizontal.png', b'1'),
(73, 'Epiphone', 'ES-339', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '52.776', 'Epiphone-ES-339-horizontal.png', b'1'),
(74, 'Epiphone', 'EMILY WOLFE SHERATON STEALTH', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '93.373', 'Epiphone-Emily-Wolfe-Sheraton-Stealth-horizontal.png', b'1'),
(75, 'Epiphone', 'EXPLORER', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '67.539', 'Epiphone-Explorer-horizontal.png', b'1'),
(76, 'Epiphone', 'FIREBIRD', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '79.841', 'Epiphone-Firebird-horizontal.png', b'1'),
(77, 'Epiphone', 'FLYING V PROPHECY', 6, 'Puente Epiphone LockTone Tune-O-Matic', '24 trastes jumbo', 25, 8, '100.26', ';Epiphone-Flying-V-Prophecy-horizontal.png', b'1'),
(78, 'Epiphone', 'FLYING V', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '79.841', 'Epiphone-Flying-V-horizontal.png', b'1'),
(79, 'Epiphone', 'LES PAUL CLASSIC WORN', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '48.593', 'Epiphone-Les-Paul-Classic-Worn-horizontal.png', b'1'),
(80, 'Epiphone', 'LES PAUL CLASSIC', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '56.344', 'Epiphone-Les-Paul-Classic-horizontal.png', b'1'),
(81, 'Epiphone', 'LES PAUL CUSTOM', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '70.737', 'Epiphone-Les-Paul-Custom-horizontal.png', b'1'),
(82, 'Epiphone', 'LES PAUL JUNIOR', 6, 'Puente Lightning Bar Wrap Around', '22 trastes medianos Jumbo', 25, 6, '49.085', 'Epiphone-Les-Paul-Junior-horizontal.png', b'1'),
(83, 'Epiphone', 'LES PAUL MODERN FIGURED', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '78.610', 'Epiphone-Les-Paul-Modern-Figured-horizontal.png', b'1'),
(84, 'Epiphone', 'LES PAUL MODERN', 6, 'Puente LockTone ABR', '22 trastes medianos Jumbo', 25, 7, '65.570', 'Epiphone-Les-Paul-Modern-horizontal.png', b'1'),
(85, 'Epiphone', 'LES PAUL MUSE', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '54.006', 'Epiphone-Les-Paul-Muse-horizontal.png', b'1'),
(86, 'Epiphone', 'LES PAUL PROPHECY', 6, 'Puente Epiphone LockTone Tune-O-Matic', '24 trastes jumbo', 25, 8, '95.588', 'Epiphone-Les-Paul-Prophecy-horizontal.png', b'1'),
(87, 'Epiphone', 'LES PAUL SPECIAL', 6, 'Puente Lightning Bar Wrap Around', '22 trastes medianos Jumbo', 25, 7, '55.236', 'Epiphone-Les-Paul-Special-horizontal.png', b'1'),
(88, 'Epiphone', 'LES PAUL STANDARD 50S', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '62.126', 'Epiphone-Les-Paul-Standard-50s-horizontal.png', b'1'),
(89, 'Epiphone', 'LES PAUL STANDAR 60S', 6, 'Puente LockTone ABR Tune-o-matic', '22 trastes medianos Jumbo', 25, 7, '65.078', 'Epiphone-Les-Paul-Standard-60s-horizontal.png', b'1'),
(90, 'Epiphone', 'LES PAUL STUDIO', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '50.562', 'Epiphone-Les-Paul-Studio-horizontal.png', b'1'),
(91, 'Epiphone', 'NANCY WILSON FANATIC', 6, 'Puente rEgido Nighthawk', '22 trastes medianos Jumbo', 26, 8, '1.264', 'piphone-Nancy-Wilson-Fanatic-horizontal.png', b'1'),
(92, 'Epiphone', 'PROPHECY EXTURA', 6, 'Puente LockTone Tune-O-Matic', '24 trastes jumbo', 25, 8, '101.49', ';Epiphone-Prophecy-Extura-horizontal.png', b'1'),
(93, 'Epiphone', 'PROPHECY SG', 6, 'Puente LockTone Tune-O-Matic', '24 trastes jumbo', 25, 8, '93.865', 'Epiphone-Prophecy-SG-horizontal.png', b'1'),
(94, 'Epiphone', 'SG CLASSIC WORN P-90S', 6, 'Puente LockTone ABR', '22 trastes medianos Jumbo', 25, 7, '45.641', 'Epiphone-SG-Classic-Worn-P-90s-horizontal.png', b'1'),
(95, 'Epiphone', 'SG CUSTOM', 6, 'Puente LockTone ABR Tune-o-matic', '22 trastes medianos Jumbo', 25, 7, '65.570', 'Epiphone-SG-Custom-horizontal.png', b'1'),
(96, 'Epiphone', 'SG MODERN FIGURED', 6, 'Puente LockTone ABR', '24 trastes medianos jumbo', 25, 7, '61.387', 'Epiphone-SG-Modern-Figured-horizontal.png', b'1'),
(97, 'Epiphone', 'SG MUSE', 6, 'Puente LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '46.133', 'Epiphone-SG-Muse-horizontal.png', b'1'),
(98, 'Epiphone', 'SG SPECIAL P-90', 6, 'Puente Lightning Bolt Wrap Around Combo', '22 trastes medianos Jumbo', 25, 7, '45.026', 'Epiphone-SG-Special-P-90-horizontal.png', b'1'),
(99, 'Epiphone', 'SG STANDARD 60S MAESTRO VIBROLA', 6, 'LockTone Tune-O-Matic Con puente Vibrola', '22 trastes medianos Jumbo', 25, 7, '62.618', 'Epiphone-SG-Standard-60s-Maestro-Vibrola-horizontal.png', b'1'),
(100, 'Epiphone', 'SG STANDARD 60S', 6, 'Puente LockTone ABR Tune-o-matic', '22 trastes medianos Jumbo', 25, 7, '95.095', 'Epiphone-SG-Standard-60s-horizontal.png', b'1'),
(101, 'Epiphone', 'SG STANDARD', 6, 'Puente Epiphone LockTone Tune-O-Matic', '22 trastes medianos Jumbo', 25, 7, '49.085', 'Epiphone-SG-Standard-horizontal.png', b'1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
