-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 11:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nm_admin` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
('1', 'Raihan', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbbooking`
--

CREATE TABLE `tbbooking` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `member` varchar(30) NOT NULL,
  `perawatan` varchar(35) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbshopping`
--

CREATE TABLE `tbshopping` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `member` varchar(30) NOT NULL,
  `paket` varchar(35) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbshopping`
--

INSERT INTO `tbshopping` (`nik`, `nama`, `alamat`, `instagram`, `hp`, `tanggal`, `member`, `paket`, `diskon`) VALUES
('1671040511020009', 'tami', 'Jl. Kapt. A. Anwar Arsyad No.1546, Palembang', '@muhraihans_', '085156061125', '2022-06-01', '', 'PAKET CANTIK 1', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbbooking`
--
ALTER TABLE `tbbooking`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbshopping`
--
ALTER TABLE `tbshopping`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
