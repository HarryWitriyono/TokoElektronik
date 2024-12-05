-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.infinityfree.com
-- Generation Time: Nov 30, 2024 at 12:53 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37804374_tokoelektrokita`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `KodeBarang` varchar(30) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `JumlahStok` double(5,2) DEFAULT NULL,
  `HargaBeliTertinggi` double(9,2) DEFAULT NULL,
  `HargaJualTertinggi` double(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`KodeBarang`, `NamaBarang`, `JumlahStok`, `HargaBeliTertinggi`, `HargaJualTertinggi`) VALUES
('8992761166212', 'Freastea Apel', 40.00, 6000.00, 7000.00);

-- --------------------------------------------------------

--
-- Table structure for table `IsiNota`
--

CREATE TABLE `IsiNota` (
  `NoNo` int(10) NOT NULL,
  `KodeB` varchar(30) NOT NULL,
  `JumlahJual` double(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Nota`
--

CREATE TABLE `Nota` (
  `NoNota` int(10) NOT NULL,
  `WaktuTransaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `NoHPWA` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pembeli`
--

CREATE TABLE `Pembeli` (
  `NoTelpWA` varchar(15) NOT NULL,
  `NamaPembeli` int(11) NOT NULL,
  `Alamat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KodeBarang`);

--
-- Indexes for table `IsiNota`
--
ALTER TABLE `IsiNota`
  ADD KEY `NoNo` (`NoNo`);

--
-- Indexes for table `Nota`
--
ALTER TABLE `Nota`
  ADD PRIMARY KEY (`NoNota`);

--
-- Indexes for table `Pembeli`
--
ALTER TABLE `Pembeli`
  ADD PRIMARY KEY (`NoTelpWA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Nota`
--
ALTER TABLE `Nota`
  MODIFY `NoNota` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
