-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 02:48 PM
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
(1, 'FauzanAzmi', '11112181'),
(6, 'fzan12181', '0e530a4a334bb2bbdcff17f5e092ad9b'),
(7, 'fzan121', '8cd4f778b5a8f7470fcc5afea2ebf601');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Nomor` int(99) NOT NULL,
  `NamaBarang` varchar(99) NOT NULL,
  `JenisBarang` varchar(999) NOT NULL,
  `Stok` varchar(99) NOT NULL,
  `Harga` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Nomor`, `NamaBarang`, `JenisBarang`, `Stok`, `Harga`) VALUES
(1, 'Pipa Paralon', 'Peralatan', '6', '90000'),
(2, '- ', '- ', '-', '-'),
(3, '- ', '- ', '-', '-');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duser`
--
ALTER TABLE `duser`
  MODIFY `Nomor` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Nomor` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
