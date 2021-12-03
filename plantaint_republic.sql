-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2021 a las 03:41:19
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantaint_republic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_dovoluciones`
--

CREATE TABLE `documento_dovoluciones` (
  `id` int(11) NOT NULL,
  `num_documento` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento_dovoluciones`
--

INSERT INTO `documento_dovoluciones` (`id`, `num_documento`) VALUES
(1, '100000'),
(2, '100001'),
(4, '100002'),
(5, '100003'),
(6, '100003'),
(7, '100004');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_codigos_lotes`
--

CREATE TABLE `eg_codigos_lotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_codigos_lotes`
--

INSERT INTO `eg_codigos_lotes` (`id`, `lote`, `fecha`) VALUES
(1, '1', '26/7/2021'),
(2, '2', '26/7/2021'),
(3, '3', '26/7/2021'),
(4, '4', '26/7/2021'),
(5, '5', '26/7/2021'),
(9, '1223', '2021-08-02'),
(10, 'lote 75', '2021-08-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_cod_egresos`
--

CREATE TABLE `eg_cod_egresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_egreso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_cod_egresos`
--

INSERT INTO `eg_cod_egresos` (`id`, `cod_egreso`, `estado`, `cod_lote`, `persona`, `updated_at`, `created_at`) VALUES
(1, '1234', '0', '1', 'encargado 1', NULL, NULL),
(2, '1235', '1', '1', 'encargado 1', NULL, NULL),
(3, '1236', '0', '1', 'encargado 1', NULL, NULL),
(4, '1237', '0', '2', 'encargado 2', NULL, NULL),
(5, '1238', '1', '2', 'encargado 2', NULL, NULL),
(6, '1239', '0', '3', 'encargado 3', NULL, NULL),
(7, '1241', '0', '4', 'encargado 4', NULL, NULL),
(8, '1242', '1', '4', 'encargado 4', NULL, NULL),
(9, '1243', '0', '5', 'encargado 5', NULL, NULL),
(24, '1237', '0', '1223', 'kenia andreina alava garcia', '0', '0'),
(25, '1238', '0', '1223', 'kenia andreina alava garcia', '0', '0'),
(26, '1239', '0', '1223', 'kenia andreina alava garcia', '', ''),
(27, '1237', '0', '1', 'kenia andreina alava garcia', '0', '0'),
(28, '1238', '0', '1', 'kenia andreina alava garcia', '0', '0'),
(29, '1240', '1', '1223', 'kenia andreina alava garcia', '0', '0'),
(30, '1241', '1', '1223', 'kenia andreina alava garcia', '0', '0'),
(31, '1241', '1', '1223', 'kenia andreina alava garcia', '0', '0'),
(32, '1242', '0', '1223', 'kenia andreina alava garcia', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_egreso_finals`
--

CREATE TABLE `eg_egreso_finals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peso_neto_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_saborizante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_merma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empacado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_fundas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fundas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_carton` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carton` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_bruto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diferencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_preempaque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_empque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_egreso_finals`
--

INSERT INTO `eg_egreso_finals` (`id`, `peso_neto_total`, `peso_saborizante`, `peso_merma`, `empacado`, `lote_fundas`, `fundas`, `lote_carton`, `carton`, `peso_bruto`, `peso_neto`, `merma`, `diferencia`, `total_preempaque`, `lote`, `cod_empque`, `persona`) VALUES
(1, '100', '5', '5', '25.0', '5', '5', '5', '5', '5', '5', '5', '75.0', '100.0', '1223', '1237', 'kenia andreina alava garcia'),
(2, '3.4', '0', '0.28', '00000', ' ', '48', ' ', '2', ' ', ' ', ' ', '00000', '000000', '1223', '1240', 'kenia andreina alava garcia'),
(3, '3.4', '0', '0.28', '2.736', ' ', '48', ' ', '2', ' ', ' ', ' ', '0.3839999999999999', '3.12', '1223', '1241', 'kenia andreina alava garcia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_egreso_tachos`
--

CREATE TABLE `eg_egreso_tachos` (
  `id` int(20) UNSIGNED NOT NULL,
  `cod_tacho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_producto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kg_descontar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_empaque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_egreso_tachos`
--

INSERT INTO `eg_egreso_tachos` (`id`, `cod_tacho`, `marca_producto`, `kg_descontar`, `observacion`, `codigo_empaque`, `lote`, `updated_at`, `created_at`) VALUES
(1, '2800005', '', '34', 'NINGUNA', '1244', '5', '', ''),
(2, '2800001', '', '20', 'NINGUNA', '1244', '5', '', ''),
(4, '2800007', '', '10', '', '1244', '4', '', ''),
(10, '2800004', '', '549', 'ninguna', '1237', '1223', '', ''),
(11, '2800006', '', '79', 'NINGUNA', '1237', '1223', '', ''),
(12, '2800001', '', '25', 'TACHO ROTO', '1237', '1223', '', ''),
(13, '111', '', '18.63', 'NINGUNA', '1237', '1223', '', ''),
(14, '112', '', '14.60', 'NINGUNA', '1237', '1223', '', ''),
(15, '115', '', '3.40', 'NINGUNA', '1240', '1223', '', ''),
(16, '115', '', '3.4', 'nada', '1241', '1223', '', ''),
(17, '114', '', '15.39', 'NINGUNA', '1242', '1223', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_egreso_tachos_encabezados`
--

CREATE TABLE `eg_egreso_tachos_encabezados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_empaque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_empaque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gramaje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saborizante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_saborizante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colgadores` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ganchos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiquetas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cajas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad_cajas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden_produccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `juliano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_mesa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_egreso_tachos_encabezados`
--

INSERT INTO `eg_egreso_tachos_encabezados` (`id`, `codigo_empaque`, `fecha_empaque`, `lote`, `horario`, `marca`, `gramaje`, `saborizante`, `lt_saborizante`, `colgadores`, `ganchos`, `etiquetas`, `cajas`, `unidad_cajas`, `orden_produccion`, `juliano`, `producto`, `num_mesa`, `persona`) VALUES
(3, '1244', 'dd/mm/aaaa', '5', '252209', '17:00 - 00:00', '5', '12', '45', 'PICANTE', 'Si', 'Si', 'Si', 'Si', '7', '175', 'Si', '3', 'kenia andreina alava garcia'),
(8, '1245', '2021-08-12', '5', '1223', 'LUSTROL', '5', 'sal', 'sal crisal', 'No', 'Si', 'No', 'Si', '35', '44556', '224', 'lote 75', '8', 'kenia andreina alava garcia'),
(9, '1243', '2021-08-12', '4', '1223', 'LUSTROL', '5', 'sal', 'sal3', 'No', 'No', 'No', 'Si', '100', '44557', '223', 'lote 75', '9', 'kenia andreina alava garcia'),
(10, '1244', '2021-08-14', '4', '4', 'LUSTROL', '5', 'picante', '4545', 'No', 'Si', 'No', 'Si', '35', '44556', '224', 'lote 75', '9', 'kenia andreina alava garcia'),
(11, '1237', '26-8-2021', '1223', '15:00 - 00:00', 'LUSTROL', '5', 'picante', '67', 'No', 'Si', 'Si', 'Si', '35', '88889', '222', 'Si', '2', 'kenia andreina alava garcia'),
(12, '1238', 'dd/mm/aaaa', '1', '6:00 - 15:00', 'GAMMA', '12', '', '', 'Si', 'Si', 'Si', 'Si', '', '', '', 'RV-T50-CRI-50%-1.9', '', 'kenia andreina alava garcia'),
(13, '1240', '17-9-2021', '1223', '15:00 - 00:00', 'LUSTROL', '6', 'MADURO', ' ', 'No', 'No', 'Si', 'Si', '24', '7', '211', 'RV-GIR-CRI-50%-1.6', '1', 'kenia andreina alava garcia'),
(14, '1241', '17-9-2021', '1223', '15:00 - 00:00', 'LUSTROL', '57', 'maduro', ' ', 'Si', 'Si', 'Si', 'Si', '24', '7', '221', 'RV-ORG-CRI-50%-1.6', '1', 'kenia andreina alava garcia'),
(15, '1242', '22-9-2021', '1223', '15:00 - 00:00', 'LUSTROL', '12', 'SAL', ' ', 'Si', 'Si', 'Si', 'Si', '35', '7777', '123', 'RV-ORG-CRI-50%-1.6', '2', 'kenia andreina alava garcia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_gramajes`
--

CREATE TABLE `eg_gramajes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gramaje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_gramajes`
--

INSERT INTO `eg_gramajes` (`id`, `gramaje`, `updated_at`, `created_at`) VALUES
(1, '12', NULL, NULL),
(3, '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_kg_sobrantes`
--

CREATE TABLE `eg_kg_sobrantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_tacho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_marcas`
--

CREATE TABLE `eg_marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marcas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eg_marcas`
--

INSERT INTO `eg_marcas` (`id`, `marcas`, `updated_at`, `created_at`) VALUES
(3, 'GAMMA', '2021-09-14 03:18:06', NULL),
(5, 'LUSTROL', NULL, NULL),
(6, 'TOPCLIN', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_producto_egresos`
--

CREATE TABLE `eg_producto_egresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado_tachos`
--

CREATE TABLE `encabezado_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `juliano_general` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `juliano_interno` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horario_inicio` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horario_fin` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `grupo_trabajo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `freidora` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_equipo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `operador_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tacho_caja` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_encabezado` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `encabezado_tachos`
--

INSERT INTO `encabezado_tachos` (`id`, `juliano_general`, `juliano_interno`, `fecha_tacho`, `horario_inicio`, `horario_fin`, `supervisor`, `grupo_trabajo`, `freidora`, `codigo_producto`, `codigo_equipo`, `operador_tacho`, `tipo_tacho`, `tacho_caja`, `codigo_encabezado`, `estado`) VALUES
(1, '10', '10', '15/01/2021', '08:00', '16:00', 'Juan ayala', 'A', '5', 'RV-CRI-0.75-ASD-1.9', 'BA-125487', 'EL JEANPIX2', 'INTERNO', 'TACHO', '123456', 'ACTIVO'),
(2, '229', '225', '17-08-2021', '00:00', '09:00', 'Jose Hurtado', 'A', '1', 'RV-RSP-CRI-50%-1.6', 'BA-125487', 'Frank Molina', 'INTERNO', 'TACHO', '225', 'ACTIVO'),
(3, '237', '223', '25-08-2021', '00:00', '08:00', 'Jose Hurtado', 'A', '5', 'RV-ORG-CRI-50%-1.6', 'BA-125487', 'Frank Molina', 'MUESTRA', 'TACHO', 'M237A5RV', 'ACTIVO'),
(4, '237', '229', '25-08-2021', '00:00', '05:00', 'Juan Ayala', 'B', '6', 'RV-RSP-CRI-50%-2.3', 'BA-125487', 'Frank Molina', 'EXTERNO', 'TACHO', 'E237B6RV', 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tachos`
--

CREATE TABLE `historial_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_tachos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg_descontar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_empaque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historial_tachos`
--

INSERT INTO `historial_tachos` (`id`, `cod_tachos`, `marca_producto`, `kg_descontar`, `cod_empaque`, `lote`, `created_at`, `updated_at`) VALUES
(2, '2800004', '', '549', '1237', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2800006', '', '89', '1237', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2800001', '', '25', '1237', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '111', '', '18.63', '1237', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '112', '', '14.60', '1237', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '115', '', '3.40', '1240', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '115', '', '2.0', '1241', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '114', '', '15.39', '1242', '1223', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horarios` int(10) NOT NULL,
  `horarios` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horarios`, `horarios`) VALUES
(1, '6:00 - 15:00'),
(2, '15:00 - 00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_calificacion_tachos`
--

CREATE TABLE `ing_calificacion_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calificacion_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_calificacion_tachos`
--

INSERT INTO `ing_calificacion_tachos` (`id`, `calificacion_tacho`) VALUES
(1, 'A'),
(2, 'AA'),
(3, 'AAA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_cargo_personas`
--

CREATE TABLE `ing_cargo_personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_cargo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `funciones_cargo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_cargo_personas`
--

INSERT INTO `ing_cargo_personas` (`id`, `nombre_cargo`, `funciones_cargo`, `created_at`, `updated_at`) VALUES
(1, 'SUPERVISOR', 'SUPERVISA EL GRUPO DE TRABAJO EN TURNO', '2021-07-29 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_codigo_tachos`
--

CREATE TABLE `ing_codigo_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_tacho_pistola` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_equipos`
--

CREATE TABLE `ing_equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_equipo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cod_equipo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_equipos`
--

INSERT INTO `ing_equipos` (`id`, `nombre_equipo`, `cod_equipo`) VALUES
(1, 'Balanza digital', 'BD-1023'),
(2, 'Balanza Analoga', 'BA-1254');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_freidoras`
--

CREATE TABLE `ing_freidoras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_freidora` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_freidoras`
--

INSERT INTO `ing_freidoras` (`id`, `numero_freidora`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_grupo_trabajos`
--

CREATE TABLE `ing_grupo_trabajos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_grupo_trabajo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_grupo_trabajos`
--

INSERT INTO `ing_grupo_trabajos` (`id`, `nombre_grupo_trabajo`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_horarios`
--

CREATE TABLE `ing_horarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora_inicio` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora_fin` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_horarios`
--

INSERT INTO `ing_horarios` (`id`, `hora_inicio`, `hora_fin`) VALUES
(1, '00:00', '00:00'),
(2, '01:00', '01:00'),
(3, '02:00', '02:00'),
(4, '03:00', '03:00'),
(5, '04:00', '04:00'),
(6, '05:00', '05:00'),
(7, '06:00', '06:00'),
(8, '07:00', '07:00'),
(9, '08:00', '08:00'),
(10, '09:00', '09:00'),
(11, '10:00', '10:00'),
(12, '11:00', '11:00'),
(13, '12:00', '12:00'),
(14, '13:00', '13:00'),
(15, '14:00', '14:00'),
(16, '15:00', '15:00'),
(17, '16:00', '16:00'),
(18, '17:00', '17:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_kg_tachos`
--

CREATE TABLE `ing_kg_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_kg_tachos`
--

INSERT INTO `ing_kg_tachos` (`id`, `cod_tacho`, `total`) VALUES
(1, '111', '0.0'),
(4, '114', '0.009999999999999787'),
(5, '115', '0.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_observacion_grupos`
--

CREATE TABLE `ing_observacion_grupos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `observacion_grupo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_encabezado` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_observacion_tachos`
--

CREATE TABLE `ing_observacion_tachos` (
  `id` int(25) NOT NULL,
  `observacion_parametro` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ing_observacion_tachos`
--

INSERT INTO `ing_observacion_tachos` (`id`, `observacion_parametro`) VALUES
(1, 'NORMAL'),
(2, 'EMBEBIDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_pesos`
--

CREATE TABLE `ing_pesos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peso_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_productos`
--

CREATE TABLE `ing_productos` (
  `id` int(20) NOT NULL,
  `tipo_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_aceite` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_sal` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `porciento_sal` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `medida_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_generado` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_productos`
--

INSERT INTO `ing_productos` (`id`, `tipo_producto`, `tipo_aceite`, `tipo_sal`, `porciento_sal`, `medida_producto`, `codigo_generado`, `nombre_producto`) VALUES
(2, 'RV', 'T50', 'CRISAL', '50%', '1.9', 'RV-T50-CRI-50%-1.9', ''),
(8, 'RV', 'GIRASOL', 'CRISAL', '50%', '1.6 - 1.9', 'RV-GIR-CRI-50%-1.6', ''),
(9, 'RV', 'ORGANICO', 'CRISAL', '50%', '1.6 - 1.9', 'RV-ORG-CRI-50%-1.6', ''),
(10, 'RV', 'RSPO', 'CRISAL', '50%', '1.6 - 1.9', 'RV-RSP-CRI-50%-1.6', ''),
(11, 'RV', 'RSPO', 'CRISAL', '50%', '2.3 - 2.6', 'RV-RSP-CRI-50%-2.3', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_proveedors`
--

CREATE TABLE `ing_proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_proveedor` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_proveedor` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_ingreso` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo_proveedor` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono_proveedor` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_tachos`
--

CREATE TABLE `ing_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `calificacion_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `peso_kilo` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observacion_parametrizada` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_encabezado` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_tachos`
--

INSERT INTO `ing_tachos` (`id`, `cod_tacho`, `calificacion_tacho`, `peso_kilo`, `observacion_parametrizada`, `codigo_encabezado`) VALUES
(1, '12345647', 'AA', '15.23', 'EMBEBIDO', '123456'),
(2, '30100794', 'A', '15.65', 'NORMAL', 'M237A5RV'),
(3, '111', 'A', '18.63', 'NORMAL', '123456'),
(4, '112', 'A', '14.60', 'NORMAL', '123456'),
(5, '113', 'AAA', '19.60', 'NORMAL', '123456'),
(6, '114', 'AA', '15.38', 'NORMAL', '123456'),
(7, '115', 'AA', '17.39', 'NORMAL', '123456'),
(8, '116', 'AA', '13.96', 'NORMAL', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_tipo_aceites`
--

CREATE TABLE `ing_tipo_aceites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_tipo_aceite` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_tipo_aceites`
--

INSERT INTO `ing_tipo_aceites` (`id`, `nombre_tipo_aceite`) VALUES
(1, 'GIRASOL'),
(2, 'T50'),
(3, 'ORGANICO'),
(4, 'RSPO'),
(6, 'OLIVA'),
(7, 'ALBAHACA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_tipo_productos`
--

CREATE TABLE `ing_tipo_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL,
  `abreviacion_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_tipo_productos`
--

INSERT INTO `ing_tipo_productos` (`id`, `nombre_producto`, `abreviacion_producto`) VALUES
(1, 'RV', ''),
(2, 'TS', ''),
(3, 'TM', ''),
(4, 'RM', ''),
(5, 'REDONDO MADURO', 'RM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_tipo_sals`
--

CREATE TABLE `ing_tipo_sals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_sal` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_tipo_sals`
--

INSERT INTO `ing_tipo_sals` (`id`, `nombre_sal`) VALUES
(1, 'CRISAL'),
(2, 'ROSADA'),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ing_tipo_tachos`
--

CREATE TABLE `ing_tipo_tachos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_tipo_tacho` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ing_tipo_tachos`
--

INSERT INTO `ing_tipo_tachos` (`id`, `nombre_tipo_tacho`) VALUES
(1, 'INTERNO'),
(2, 'EXTERNO'),
(3, 'MUESTRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida_productos`
--

CREATE TABLE `medida_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medida_producto` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `medida_productos`
--

INSERT INTO `medida_productos` (`id`, `medida_producto`) VALUES
(1, '1.6 - 1.9'),
(2, '1.9 - 2.0'),
(3, '2.0 - 2.2'),
(4, '2.3 - 2.6'),
(5, '1.4 - 2.5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_07_22_012936_create_eg_codigos_lotes_table', 1),
(4, '2021_07_22_013125_create_eg_cod_egresos_table', 1),
(5, '2021_07_22_013144_create_eg_egreso_finals_table', 1),
(6, '2021_07_22_013207_create_eg_egreso_tachos_table', 1),
(7, '2021_07_22_013231_create_eg_egreso_tachos_encabezados_table', 1),
(8, '2021_07_22_013340_create_eg_gramajes_table', 1),
(9, '2021_07_22_013406_create_eg_kg_sobrantes_table', 1),
(10, '2021_07_22_013424_create_eg_marcas_table', 1),
(11, '2021_07_22_013512_create_eg_producto_egresos_table', 1),
(12, '2021_07_22_013528_create_recuerdames_table', 1),
(13, '2021_08_25_014216_create_historial_tachos_table', 2),
(14, '2021_09_01_032251_create_retorno_proveedores_table', 3),
(15, '2021_09_01_033146_create_retorno_firma_proveedores_table', 3),
(16, '2021_09_21_140954_create_clientes_table', 4),
(17, '2021_09_22_025419_create_tolerancias_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opc_si_no`
--

CREATE TABLE `opc_si_no` (
  `id_opc` int(2) NOT NULL,
  `opcion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opc_si_no`
--

INSERT INTO `opc_si_no` (`id_opc`, `opcion`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pociento_sals`
--

CREATE TABLE `pociento_sals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `porcentaje` varchar(191) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pociento_sals`
--

INSERT INTO `pociento_sals` (`id`, `porcentaje`) VALUES
(1, '50%'),
(2, '0,5%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuerdames`
--

CREATE TABLE `recuerdames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imei` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recuerdames`
--

INSERT INTO `recuerdames` (`id`, `imei`, `persona`) VALUES
(59, '96de1092511625ac', 'kenia andreina alava garcia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retorno_firma_proveedores`
--

CREATE TABLE `retorno_firma_proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_tra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `retorno_firma_proveedores`
--

INSERT INTO `retorno_firma_proveedores` (`id`, `cedula`, `nombre`, `placa`, `fecha`, `documento`, `nombre_tra`, `created_at`, `updated_at`) VALUES
(5, '1313281493', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'PLTRE100003', 'kenia andreina alava garcia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '1313281493', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'PLTRE100003', 'kenia andreina alava garcia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1313281493', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'kenia andreina alava garcia', 'PLTRE100004', 'kenia andreina alava garcia', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retorno_proveedores`
--

CREATE TABLE `retorno_proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_tachos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg_descontar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `retorno_proveedores`
--

INSERT INTO `retorno_proveedores` (`id`, `cod_tachos`, `marca_producto`, `kg_descontar`, `observacion`, `documento`, `created_at`, `updated_at`) VALUES
(3, '2800001', '2800001', '0', 'SABOR NO SOLICITADO', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2800002', '2800002', '50', 'nignuna', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '2800004', '2800004', '70', '', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '2800006', '2800006', '50', '', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '2800003', '2800003', '50', '', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '2800005', '2800005', '60', '', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2800001', '2800001', '50', 'CHIFLES VIEJOS', 'PLTRE100002', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '116', '116', '13.96', 'ninguna', 'PLTRE100003', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '113', '113', '19.60', 'ninguna', 'PLTRE100003', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '112', '112', '0.0', 'www', 'PLTRE100004', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tolerancias`
--

CREATE TABLE `tolerancias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rango` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tolerancias`
--

INSERT INTO `tolerancias` (`id`, `rango`, `persona`, `created_at`, `updated_at`) VALUES
(1, '0.500', 'Kenia Andreina Alava Garcia', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `tipo_persona`, `cedula`, `created_at`, `updated_at`) VALUES
(1, 'kenia andreina alava garcia', 'kenia_2207@outlook.com', '0000-00-00 00:00:00', '$2y$10$gvCqBz6oTu9z1FelmysUBO17o0W3SncVzgqeY6YmEZLchz4wEtIZO', '8ahZ0QmBX3yK1ufpN4TDJx93dCE1kgIgH1glhyMn6AHnJ9YA9SQKSfK6DRLF', 'asistente de produccion', '1313281493', NULL, NULL),
(2, 'Jose Hurtado', 'josehurtado@gmail.com', '2017-10-10 05:00:00', '123456', NULL, 'Supervisor', '1315528909', NULL, NULL),
(3, 'Juan Ayala', 'juanayala@gmail.com', NULL, '123456', NULL, 'supervisor', '1315528909', NULL, NULL),
(4, 'Frank Molina', 'yayosiete@gmail.com', NULL, '123456', NULL, 'Operador', '1315528909', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento_dovoluciones`
--
ALTER TABLE `documento_dovoluciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_codigos_lotes`
--
ALTER TABLE `eg_codigos_lotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_cod_egresos`
--
ALTER TABLE `eg_cod_egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_egreso_finals`
--
ALTER TABLE `eg_egreso_finals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_egreso_tachos`
--
ALTER TABLE `eg_egreso_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_egreso_tachos_encabezados`
--
ALTER TABLE `eg_egreso_tachos_encabezados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_gramajes`
--
ALTER TABLE `eg_gramajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_kg_sobrantes`
--
ALTER TABLE `eg_kg_sobrantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_marcas`
--
ALTER TABLE `eg_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_producto_egresos`
--
ALTER TABLE `eg_producto_egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encabezado_tachos`
--
ALTER TABLE `encabezado_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial_tachos`
--
ALTER TABLE `historial_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horarios`);

--
-- Indices de la tabla `ing_calificacion_tachos`
--
ALTER TABLE `ing_calificacion_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_cargo_personas`
--
ALTER TABLE `ing_cargo_personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_codigo_tachos`
--
ALTER TABLE `ing_codigo_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_equipos`
--
ALTER TABLE `ing_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_freidoras`
--
ALTER TABLE `ing_freidoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_grupo_trabajos`
--
ALTER TABLE `ing_grupo_trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_horarios`
--
ALTER TABLE `ing_horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_kg_tachos`
--
ALTER TABLE `ing_kg_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_observacion_grupos`
--
ALTER TABLE `ing_observacion_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_observacion_tachos`
--
ALTER TABLE `ing_observacion_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_pesos`
--
ALTER TABLE `ing_pesos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_productos`
--
ALTER TABLE `ing_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_proveedors`
--
ALTER TABLE `ing_proveedors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_tachos`
--
ALTER TABLE `ing_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_tipo_aceites`
--
ALTER TABLE `ing_tipo_aceites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_tipo_productos`
--
ALTER TABLE `ing_tipo_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_tipo_sals`
--
ALTER TABLE `ing_tipo_sals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ing_tipo_tachos`
--
ALTER TABLE `ing_tipo_tachos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medida_productos`
--
ALTER TABLE `medida_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opc_si_no`
--
ALTER TABLE `opc_si_no`
  ADD PRIMARY KEY (`id_opc`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pociento_sals`
--
ALTER TABLE `pociento_sals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recuerdames`
--
ALTER TABLE `recuerdames`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `retorno_firma_proveedores`
--
ALTER TABLE `retorno_firma_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `retorno_proveedores`
--
ALTER TABLE `retorno_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tolerancias`
--
ALTER TABLE `tolerancias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento_dovoluciones`
--
ALTER TABLE `documento_dovoluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `eg_codigos_lotes`
--
ALTER TABLE `eg_codigos_lotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `eg_cod_egresos`
--
ALTER TABLE `eg_cod_egresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `eg_egreso_finals`
--
ALTER TABLE `eg_egreso_finals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eg_egreso_tachos`
--
ALTER TABLE `eg_egreso_tachos`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `eg_egreso_tachos_encabezados`
--
ALTER TABLE `eg_egreso_tachos_encabezados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `eg_gramajes`
--
ALTER TABLE `eg_gramajes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eg_kg_sobrantes`
--
ALTER TABLE `eg_kg_sobrantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eg_marcas`
--
ALTER TABLE `eg_marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `eg_producto_egresos`
--
ALTER TABLE `eg_producto_egresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encabezado_tachos`
--
ALTER TABLE `encabezado_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historial_tachos`
--
ALTER TABLE `historial_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horarios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ing_calificacion_tachos`
--
ALTER TABLE `ing_calificacion_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ing_cargo_personas`
--
ALTER TABLE `ing_cargo_personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ing_codigo_tachos`
--
ALTER TABLE `ing_codigo_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ing_equipos`
--
ALTER TABLE `ing_equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ing_freidoras`
--
ALTER TABLE `ing_freidoras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ing_grupo_trabajos`
--
ALTER TABLE `ing_grupo_trabajos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ing_horarios`
--
ALTER TABLE `ing_horarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ing_kg_tachos`
--
ALTER TABLE `ing_kg_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ing_observacion_grupos`
--
ALTER TABLE `ing_observacion_grupos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ing_observacion_tachos`
--
ALTER TABLE `ing_observacion_tachos`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ing_pesos`
--
ALTER TABLE `ing_pesos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ing_productos`
--
ALTER TABLE `ing_productos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ing_proveedors`
--
ALTER TABLE `ing_proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ing_tachos`
--
ALTER TABLE `ing_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ing_tipo_aceites`
--
ALTER TABLE `ing_tipo_aceites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ing_tipo_productos`
--
ALTER TABLE `ing_tipo_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ing_tipo_sals`
--
ALTER TABLE `ing_tipo_sals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ing_tipo_tachos`
--
ALTER TABLE `ing_tipo_tachos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medida_productos`
--
ALTER TABLE `medida_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `opc_si_no`
--
ALTER TABLE `opc_si_no`
  MODIFY `id_opc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pociento_sals`
--
ALTER TABLE `pociento_sals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recuerdames`
--
ALTER TABLE `recuerdames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `retorno_firma_proveedores`
--
ALTER TABLE `retorno_firma_proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `retorno_proveedores`
--
ALTER TABLE `retorno_proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tolerancias`
--
ALTER TABLE `tolerancias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
