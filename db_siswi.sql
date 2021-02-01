-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 05:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswi`
--

CREATE TABLE `tb_siswi` (
  `NPM` varchar(8) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` enum('L','P','','') NOT NULL,
  `ALAMAT` text NOT NULL,
  `KODE_POS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswi`
--

INSERT INTO `tb_siswi` (`NPM`, `NAMA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `ALAMAT`, `KODE_POS`) VALUES
('16630364', 'SUBHAN', 'MTP', '2012-12-12', 'L', 'MARTAPURA', '70145'),
('19630035', 'Fauji', 'Alalak', '2021-01-27', 'L', 'Pulau Alalak', '7064'),
('19630046', 'halimah', 'Paringin', '2021-01-28', 'P', 'Barabai', '7053');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswi`
--
ALTER TABLE `tb_siswi`
  ADD PRIMARY KEY (`NPM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
