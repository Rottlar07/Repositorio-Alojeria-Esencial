-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdescencia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadministrador`
--

CREATE TABLE `tadministrador` (
  `codigoAdministrador` varchar(4) NOT NULL,
  `nombreAdministrador` varchar(15) DEFAULT NULL,
  `apellidoAdministrador` varchar(50) DEFAULT NULL,
  `correoAdministrador` varchar(50) DEFAULT NULL,
  `celularAdministrador` varchar(9) DEFAULT NULL,
  `usuarioAdministrador` varchar(30) DEFAULT NULL,
  `contraseniaAdministrador` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tcliente`
--

CREATE TABLE `tcliente` (
  `codigoCliente` varchar(4) NOT NULL,
  `nombreCliente` varchar(50) DEFAULT NULL,
  `apellidoCliente` varchar(50) DEFAULT NULL,
  `dniCliente` varchar(8) DEFAULT NULL,
  `correoCliente` varchar(50) DEFAULT NULL,
  `celularCliente` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tevento`
--

CREATE TABLE `tevento` (
  `codigoEvento` varchar(4) NOT NULL,
  `nombreEvento` varchar(50) DEFAULT NULL,
  `categoriaEvento` varchar(15) DEFAULT NULL,
  `restriccionEvento` varchar(15) DEFAULT NULL,
  `horaEvento` time DEFAULT NULL,
  `fechaEvento` date DEFAULT NULL,
  `montoEvento` decimal(10,6) DEFAULT NULL,
  `aforoEvento` varchar(15) DEFAULT NULL,
  `codigoAdministrador` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treserva`
--

CREATE TABLE `treserva` (
  `codigoReserva` varchar(4) NOT NULL,
  `fechaHoraReserva` datetime DEFAULT NULL,
  `totalReserva` decimal(10,6) DEFAULT NULL,
  `codigoCliente` varchar(6) DEFAULT NULL,
  `codigoEvento` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tadministrador`
--
ALTER TABLE `tadministrador`
  ADD PRIMARY KEY (`codigoAdministrador`);

--
-- Indexes for table `tcliente`
--
ALTER TABLE `tcliente`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indexes for table `tevento`
--
ALTER TABLE `tevento`
  ADD PRIMARY KEY (`codigoEvento`),
  ADD KEY `codigoAdministrador` (`codigoAdministrador`);

--
-- Indexes for table `treserva`
--
ALTER TABLE `treserva`
  ADD PRIMARY KEY (`codigoReserva`),
  ADD KEY `codigoCliente` (`codigoCliente`),
  ADD KEY `codigoEvento` (`codigoEvento`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tevento`
--
ALTER TABLE `tevento`
  ADD CONSTRAINT `tevento_ibfk_1` FOREIGN KEY (`codigoAdministrador`) REFERENCES `tadministrador` (`codigoAdministrador`);

--
-- Constraints for table `treserva`
--
ALTER TABLE `treserva`
  ADD CONSTRAINT `treserva_ibfk_1` FOREIGN KEY (`codigoCliente`) REFERENCES `tcliente` (`codigoCliente`),
  ADD CONSTRAINT `treserva_ibfk_2` FOREIGN KEY (`codigoEvento`) REFERENCES `tevento` (`codigoEvento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
