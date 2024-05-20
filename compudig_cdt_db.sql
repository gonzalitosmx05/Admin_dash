-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2024 at 08:48 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compudig_cdt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `telefono`, `telefono_2`, `correo`, `registro`) VALUES
(1, 'INSTITUTO GENESIS', '8771121565', '', '', '2024-04-19'),
(2, 'MARGARITA MARTINEZ (PARADISE)', '6671887665', '', '', '2024-04-20'),
(4, 'TINO FLORES', '8771263884', '', '', '2024-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `nombre_Cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_1` int(11) NOT NULL,
  `telefono_2` int(11) NOT NULL,
  `folio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anticipo_1` float NOT NULL,
  `anticipo_2` float NOT NULL,
  `balance` float NOT NULL,
  `fecha_contrato` date NOT NULL,
  `subtotal` float NOT NULL,
  `iva` float NOT NULL,
  `total` float NOT NULL,
  `f_pago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notas` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `emision` date NOT NULL,
  `expiracion` date NOT NULL,
  `subtotal` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `iva` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `notas` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `validarIva` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cotizaciones`
--

INSERT INTO `cotizaciones` (`id`, `id_cliente`, `id_usuario`, `emision`, `expiracion`, `subtotal`, `iva`, `total`, `notas`, `validarIva`) VALUES
(2, 1, '1', '2024-04-21', '2024-05-06', '123.45', '0', '123.45', '-PRECIOS NO INCLUYEN IVA\n                    ', 0),
(4, 2, '1', '2024-04-25', '2024-05-10', '156.00', '0', '156.00', '-PRECIOS NO INCLUYEN IVA\n                    ', 0),
(5, 4, '1', '2024-04-25', '2024-05-10', '20134.00', '1610.72', '21744.72', '', 1),
(6, 2, '1', '2024-04-25', '2024-05-10', '8976.00', '0', '8976.00', '-PRECIOS NO INCLUYEN IVA\n                    ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detalles_cotizacion`
--

CREATE TABLE `detalles_cotizacion` (
  `id` int(11) NOT NULL,
  `id_cotizacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sku` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unitario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtotal` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detalles_cotizacion`
--

INSERT INTO `detalles_cotizacion` (`id`, `id_cotizacion`, `descripcion`, `sku`, `cantidad`, `unitario`, `subtotal`) VALUES
(5, '2', 'Punto de venta ICORE 3 con 8Gb Ram, 256gb de alamcenamiento', '', '1', '', '11584.00'),
(6, '2', 'Kit teclado & mouse', '', '1', '', '300.00'),
(7, '4', 'Muestra de 1 Venta', '', '1', '', '156.00'),
(8, '4', 'Camara PTZ CVU Tandem 6MP, Panoramica 4MP', '', '1', '', '18567.00'),
(9, '4', 'Camara IP 2MP', '', '1', '', '1567.00'),
(10, '5', 'KIT 4 CAMARAS COLOR VU 2MP', '', '1', '', '8976.00'),
(11, '5', 'CAMARA TIPO TURRET 2MP', '', '1', '', ''),
(12, '5', 'CAMARA TIPO BULLET', '', '1', '', ''),
(13, '5', 'FUENTE DE PODER', '', '1', '', ''),
(14, '5', 'SERVICIO DE INSTALACION', '', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_contratos`
--

CREATE TABLE `detalle_contratos` (
  `id_detalle` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` float NOT NULL,
  `p_unitario` float NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domicilios`
--

CREATE TABLE `domicilios` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `calle` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `interior` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exterior` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `referencias` varchar(2500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domicilios`
--

INSERT INTO `domicilios` (`id`, `id_cliente`, `calle`, `interior`, `exterior`, `colonia`, `ciudad`, `estado`, `pais`, `referencias`) VALUES
(0, 1, 'C. AMADO gutierrez ', '', '295', 'San Andres', 'Acuña', 'Coahila', 'Mexico', 'Colegio, se entra por la misma calle de las hamburguesas 110'),
(0, 4, 'DOMICILIO CONOCIDO', '', '', 'La pileta', 'ACUÑA', 'COAHUILA', 'Mexico', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `registro` date NOT NULL,
  `estatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `telefono`, `registro`, `estatus`, `nivel`, `usuario`, `pass`) VALUES
(1, 'DIBANHI LIRA GONZALEZ', '8771001010', '2023-10-30', 'ACTIVO', 'administrador', 'admin', 'admin'),
(6, 'LUIS ALFONSO LOPEZ MENDEZ', '', '0000-00-00', 'ACTIVO', 'administrador', 'LALM', 'Admin54321'),
(7, 'XOCHILT', '877 109 6075', '0000-00-00', 'ACTIVO', 'administrador', 'XIARA', 'Admin54321'),
(8, 'OMAYRA TERE ARELLANO LOPEZ', '', '0000-00-00', 'ACTIVO', 'usuario', 'OTAL', 'Admin654321'),
(9, 'JESUS MONTELONGO NAVA', '', '0000-00-00', 'ACTIVO', 'usuario', 'JMN', 'Admin09321'),
(10, 'NORMA LETICIA TORRES CEDILLO', '', '0000-00-00', 'ACTIVO', 'usuario', 'NLTC', 'Admin564738'),
(11, 'MOISES MENDEZ VALDEZ PINO', '', '0000-00-00', 'ACTIVO', 'usuario', 'MMVP', 'Admin12760'),
(12, 'EMERSON LOPEZ MENDEZ', '', '0000-00-00', 'ACTIVO', 'administrador', 'ELM', 'Admin120992'),
(13, 'ALAIN GABRIL LOPEZ MENDEZ', '', '0000-00-00', 'ACTIVO', 'administrador', 'AGLM', 'Admin6538');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalles_cotizacion`
--
ALTER TABLE `detalles_cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detalles_cotizacion`
--
ALTER TABLE `detalles_cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
