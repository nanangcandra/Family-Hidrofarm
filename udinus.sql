-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 06:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udinus`
--

-- --------------------------------------------------------

--
-- Table structure for table `duser`
--

CREATE TABLE `duser` (
  `Nomor` int(16) NOT NULL,
  `Username` varchar(18) NOT NULL,
  `Password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duser`
--

INSERT INTO `duser` (`Nomor`, `Username`, `Password`) VALUES
(1, 'fzan121', '8cd4f778b5a8f7470fcc5afea2ebf601'),
(12, 'azmi12181', 'd3da3d42e5f2acedcc77526d9caa5628'),
(13, 'fzan12181', '0e530a4a334bb2bbdcff17f5e092ad9b'),
(14, 'fauzanazmi12181', 'f897f03177e8c70dc94a4c4b74ae32c1');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Nomor` int(50) NOT NULL,
  `NamaBarang` varchar(60) NOT NULL,
  `JenisBarang` varchar(20) NOT NULL,
  `Volume` varchar(20) NOT NULL,
  `Stok` varchar(3) NOT NULL,
  `Harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Nomor`, `NamaBarang`, `JenisBarang`, `Volume`, `Stok`, `Harga`) VALUES
(1, 'Pipa Paralon', 'Peralatan Tanaman', '1 Inci', '12', 'Rp35.000'),
(2, 'Sabut Kelapa', 'Bahan Tanaman', '1.000 Gram', '9', 'Rp4.000'),
(3, 'Hidroton', 'Bahan Tanaman', '250 Gram', '30', 'Rp7.000'),
(4, 'Daun Bawang (Isi 40)', 'Bibit Tanaman', '100 Gram', '100', 'Rp5.000'),
(5, 'Selada Butterhead Crunchy (Isi 50)', 'Bibit Tanaman', '100 Gram', '90', 'Rp9.000');

-- --------------------------------------------------------

--
-- Table structure for table `user_api`
--

CREATE TABLE `user_api` (
  `Nomor` int(32) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `Auth` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_api`
--

INSERT INTO `user_api` (`Nomor`, `Nama`, `Auth`) VALUES
(1, 'Fauzan', 'FzanA11201912181PWL'),
(2, 'Azmi', 'AzmiA11201912181PWL'),
(3, 'FauzanAzmi', 'A11201912181');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duser`
--
ALTER TABLE `duser`
  ADD PRIMARY KEY (`Nomor`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Nomor`);

--
-- Indexes for table `user_api`
--
ALTER TABLE `user_api`
  ADD PRIMARY KEY (`Nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duser`
--
ALTER TABLE `duser`
  MODIFY `Nomor` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_api`
--
ALTER TABLE `user_api`
  MODIFY `Nomor` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
