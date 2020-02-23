-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 07:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar_akhir`
--

CREATE TABLE `bayar_akhir` (
  `id_bayar` varchar(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayar_atribut`
--

CREATE TABLE `bayar_atribut` (
  `id_bayar` varchar(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayar_infaq`
--

CREATE TABLE `bayar_infaq` (
  `id_bayar` varchar(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayar_lks`
--

CREATE TABLE `bayar_lks` (
  `id_bayar` varchar(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayar_ujian`
--

CREATE TABLE `bayar_ujian` (
  `id_bayar` varchar(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `ket` enum('Genap','Ganjil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id_bayar` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` char(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`, `jk`) VALUES
('1000000000', 'Nur Sukma', 'Mentarman 1', 'L'),
('1000000001', 'Dita AM', 'Mentaraman', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
