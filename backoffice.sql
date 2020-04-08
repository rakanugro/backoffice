-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 11:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `no_id` bigint(50) NOT NULL,
  `id_client` int(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `npwp` int(30) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `siup` int(20) NOT NULL,
  `dll` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`no_id`, `id_client`, `alamat`, `nama_client`, `npwp`, `no_tlp`, `siup`, `dll`) VALUES
(1, 1, 'melati 4', 'mentawai baru', 39248234, 987654638, 832327237, 'jscsdcnsdcnsdc'),
(2, 0, '', '', 0, 0, 0, ''),
(3, 101, 'batuampar V', 'optima lautan bersama', 830023283, 202020220, 111111, 'tes'),
(4, 0, '', '', 0, 0, 0, ''),
(5, 201, 'jonggol', 'wawasan nusantara', 484323402, 8493483, 8439429, 'jfdkf'),
(6, 12, 'sd', 'czczx', 0, 0, 0, ''),
(7, 54, 'kfd', 'sdsd', 0, 0, 0, ''),
(8, 1010, 'sod', 'dmd', 0, 0, 0, ''),
(9, 32, 'sdsd', 'ddsd', 0, 0, 0, ''),
(10, 4949, 'dsds', 'sdsd,sd', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
