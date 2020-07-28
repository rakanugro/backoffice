-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 09:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

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

-- --------------------------------------------------------

--
-- Table structure for table `detail_tx`
--

CREATE TABLE `detail_tx` (
  `id_table` bigint(20) NOT NULL,
  `id_detail` bigint(100) NOT NULL,
  `charges_name` varchar(10) NOT NULL,
  `unit` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `header_detail`
--

CREATE TABLE `header_detail` (
  `id_header` bigint(20) NOT NULL,
  `nama_shipper` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `term` varchar(100) NOT NULL,
  `feeder` varchar(50) NOT NULL,
  `etd` datetime NOT NULL,
  `pol` varchar(50) NOT NULL,
  `pod` int(11) NOT NULL,
  `bl_no` varchar(50) NOT NULL,
  `consignee_name` varchar(50) NOT NULL,
  `container_details` varchar(100) NOT NULL,
  `container_no` varchar(50) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `vat` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `detail_tx`
--
ALTER TABLE `detail_tx`
  ADD PRIMARY KEY (`id_table`);

--
-- Indexes for table `header_detail`
--
ALTER TABLE `header_detail`
  ADD PRIMARY KEY (`id_header`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_tx`
--
ALTER TABLE `detail_tx`
  MODIFY `id_table` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_detail`
--
ALTER TABLE `header_detail`
  MODIFY `id_header` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
