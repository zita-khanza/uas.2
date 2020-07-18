-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 12:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantuancovid`
--

-- --------------------------------------------------------

--
-- Table structure for table `alokasi`
--

CREATE TABLE `alokasi` (
  `id` int(11) NOT NULL,
  `nama_alokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alokasi`
--

INSERT INTO `alokasi` (`id`, `nama_alokasi`) VALUES
(1, 'Alat Pelindung Diri'),
(2, 'Logistik Mahasiswa'),
(3, 'Bantuan Kuota Mahasiswa'),
(4, 'Hand Sanitizer');

-- --------------------------------------------------------

--
-- Table structure for table `daftarbantuan`
--

CREATE TABLE `daftarbantuan` (
  `id` int(11) NOT NULL,
  `jenis_alokasi` varchar(100) NOT NULL,
  `jumlah_dana` varchar(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarbantuan`
--

INSERT INTO `daftarbantuan` (`id`, `jenis_alokasi`, `jumlah_dana`, `nama_lengkap`, `no_hp`, `email`) VALUES
(1, 'Alat Pelindung Diri', '181473592', 'Kristianus Mon', '085338617422', 'thonomon@gmail.com'),
(2, 'Alat Pelindung Diri', '778998665', 'kristianus', '085674839273', 'thonowoang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'zita', 'zita@gmail.com', '2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarbantuan`
--
ALTER TABLE `daftarbantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alokasi`
--
ALTER TABLE `alokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftarbantuan`
--
ALTER TABLE `daftarbantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
