-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 11:03 AM
-- Server version: 10.4.6-MariaDB
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
-- Database: `db_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE `node` (
  `id_konver` int(11) NOT NULL,
  `atribut` varchar(25) NOT NULL,
  `jumlah_data` int(50) NOT NULL,
  `laris` int(11) NOT NULL,
  `tidak_laris` int(11) NOT NULL,
  `entrophy` double NOT NULL,
  `gain` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`id_konver`, `atribut`, `jumlah_data`, `laris`, `tidak_laris`, `entrophy`, `gain`) VALUES
(1, 'Total', 11, 7, 4, 0.94566030460064, 0),
(2, 'Makanan', 10, 6, 4, 0.97095059445467, 0),
(3, 'Minuman', 1, 1, 0, 0, 0),
(4, 'Lebih dari 20000', 3, 1, 2, 0.91829583405449, 0),
(5, '15000 - 20000', 3, 2, 1, 0.91829583405449, 0),
(6, '10000 - 14999', 3, 2, 1, 0.91829583405449, 0),
(7, 'Kurang dari 10000', 2, 2, 0, 0, 0),
(8, 'Lebih dari 100', 2, 2, 0, 0, 0),
(9, '50 - 100', 5, 4, 1, 0.72192809488736, 0),
(10, 'Kurang dari 50', 4, 1, 3, 0.81127812445913, 0);

-- --------------------------------------------------------

--
-- Table structure for table `node2`
--

CREATE TABLE `node2` (
  `id_node2` int(11) NOT NULL,
  `atribut` varchar(20) NOT NULL,
  `jumlah_data` int(11) NOT NULL,
  `laris` int(11) NOT NULL,
  `tidak_laris` int(11) NOT NULL,
  `entrophy` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `node2`
--

INSERT INTO `node2` (`id_node2`, `atribut`, `jumlah_data`, `laris`, `tidak_laris`, `entrophy`) VALUES
(1, 'Total', 9, 5, 4, 0.99107605983822),
(2, 'Makanan', 8, 4, 4, 1),
(3, 'Minuman', 1, 1, 0, 0),
(4, 'Lebih dari 20000', 3, 1, 2, 0.91829583405449),
(5, '15000 - 20000', 2, 1, 1, 1),
(6, '10000 - 14999', 3, 2, 1, 0.91829583405449),
(7, 'Kurang dari 10000', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `node3`
--

CREATE TABLE `node3` (
  `id_node3` int(11) NOT NULL,
  `atribut` varchar(25) NOT NULL,
  `jumlah_data` int(11) NOT NULL,
  `laris` int(11) NOT NULL,
  `tidak_laris` int(11) NOT NULL,
  `entrophy` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `node3`
--

INSERT INTO `node3` (`id_node3`, `atribut`, `jumlah_data`, `laris`, `tidak_laris`, `entrophy`) VALUES
(1, 'Total', 8, 4, 4, 1),
(2, 'Makanan', 7, 3, 4, 0.98522813603425),
(3, 'Minuman', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id_bobot` int(11) NOT NULL,
  `nama_rule` varchar(50) NOT NULL,
  `jenis_menu` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_bobot`, `nama_rule`, `jenis_menu`, `harga`, `terjual`, `keterangan`) VALUES
(1, 'Rule 1', 1, 0, 0, ''),
(2, 'Rule 2', 0, 0, 0, ''),
(3, 'Rule 3', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblatribut`
--

CREATE TABLE `tblatribut` (
  `kd_atribut` varchar(10) NOT NULL,
  `atribut` varchar(100) NOT NULL,
  `bobot` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblatribut`
--

INSERT INTO `tblatribut` (`kd_atribut`, `atribut`, `bobot`) VALUES
('1', 'jenis_menu', 0),
('2', 'harga', 0),
('3', 'terjual', 0),
('4', 'keterangan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbldataalter`
--

CREATE TABLE `tbldataalter` (
  `ID_alternatif` int(11) NOT NULL,
  `no_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `jenis_menu` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `terjual` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldataalter`
--

INSERT INTO `tbldataalter` (`ID_alternatif`, `no_alternatif`, `nama_alternatif`, `jenis_menu`, `harga`, `terjual`, `keterangan`) VALUES
(1, 'ML01', 'Super Murmer', 'Makanan', 'Lebih dari 20000', '50 - 100', 'Laris'),
(2, 'ML02', 'Paket Murmer 1', 'Makanan', '15000 - 20000', 'Kurang dari 50', 'Tidak Laris'),
(3, 'ML03', 'Paket Murmer 2', 'Makanan', '15000 - 20000', 'Kurang dari 50', 'Laris'),
(4, 'ML04', 'Paket Murmer 3', 'Makanan', 'Lebih dari 20000', '50 - 100', 'Tidak Laris'),
(5, 'ML05', 'Paket Murmer 4', 'Makanan', 'Lebih dari 20000', 'Kurang dari 50', 'Tidak Laris'),
(6, 'ML06', 'Rico Bento', 'Makanan', '10000 - 14999', 'Kurang dari 50', 'Tidak Laris'),
(10, 'ML10', 'Dada', 'Makanan', '10000 - 14999', '50 - 100', 'Laris'),
(91, 'MM012', 'Espresso', 'Minuman', '10000 - 14999', '50 - 100', 'Laris');

-- --------------------------------------------------------

--
-- Table structure for table `tbldataalternatif`
--

CREATE TABLE `tbldataalternatif` (
  `ID_alternatif` int(11) NOT NULL,
  `no_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `jenis_menu` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `terjual` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldataalternatif`
--

INSERT INTO `tbldataalternatif` (`ID_alternatif`, `no_alternatif`, `nama_alternatif`, `jenis_menu`, `harga`, `terjual`, `keterangan`) VALUES
(1, 'ML01', 'Super Murmer', 'Makanan', 'Lebih dari 20000', '50 - 100', 'Laris'),
(2, 'ML02', 'Paket Murmer 1', 'Makanan', '15000 - 20000', 'Kurang dari 50', 'Tidak Laris'),
(3, 'ML03', 'Paket Murmer 2', 'Makanan', '15000 - 20000', 'Kurang dari 50', 'Laris'),
(4, 'ML04', 'Paket Murmer 3', 'Makanan', 'Lebih dari 20000', '50 - 100', 'Tidak Laris'),
(5, 'ML05', 'Paket Murmer 4', 'Makanan', 'Lebih dari 20000', 'Kurang dari 50', 'Tidak Laris'),
(6, 'ML06', 'Rico Bento', 'Makanan', '10000 - 14999', 'Kurang dari 50', 'Tidak Laris'),
(7, 'ML07', 'Original Burger', 'Makanan', 'Kurang dari 10000', 'Lebih dari 100', 'Laris'),
(8, 'ML08', 'Ayam Geprek', 'Makanan', '15000 - 20000', 'Lebih dari 100', 'Laris'),
(9, 'ML09', 'French Fries', 'Makanan', 'Kurang dari 10000', '50 - 100', 'Tidak Laris'),
(10, 'ML10', 'Dada', 'Makanan', '10000 - 14999', '50 - 100', 'Laris');

-- --------------------------------------------------------

--
-- Table structure for table `tbldatauji`
--

CREATE TABLE `tbldatauji` (
  `ID` bigint(11) NOT NULL,
  `no_datauji` varchar(50) NOT NULL,
  `nama_datauji` varchar(25) NOT NULL,
  `jenis_menu` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `A3` int(11) DEFAULT floor(rand() * (4 - 1 + 1) + 1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldatauji`
--

INSERT INTO `tbldatauji` (`ID`, `no_datauji`, `nama_datauji`, `jenis_menu`, `harga`, `jumlah_terjual`, `A3`) VALUES
(1, 'MM001', 'Test', 'Makanan', 10000, 100, 4),
(2, 'MM002', 'Lotek', 'Minuman', 9000, 65, 1),
(3, 'MM003', 'Test', 'Makanan', 10000, 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblhistory`
--

CREATE TABLE `tblhistory` (
  `id_history` int(11) NOT NULL,
  `no_alternatif` varchar(11) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhistory`
--

INSERT INTO `tblhistory` (`id_history`, `no_alternatif`, `nama_alternatif`, `nilai`, `tanggal`) VALUES
(4, '34.13', 'KEPUH', 0.01471, '2023-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `tblnilaigain`
--

CREATE TABLE `tblnilaigain` (
  `ID_NilaiOpt` int(11) NOT NULL,
  `atribut` varchar(10) NOT NULL,
  `gain1` double NOT NULL,
  `gain2` double NOT NULL,
  `gain3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnilaigain`
--

INSERT INTO `tblnilaigain` (`ID_NilaiOpt`, `atribut`, `gain1`, `gain2`, `gain3`) VALUES
(1, 'Jenis Menu', 0.062977946005485, 0.10218717094933, 0.13792538097003),
(2, 'Harga', 0.19432734946515, 0.156656614913, 0),
(3, 'Terjual', 0.32250094348488, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblranking`
--

CREATE TABLE `tblranking` (
  `ID` int(11) NOT NULL,
  `no_datauji` varchar(50) NOT NULL,
  `nilai_s` double NOT NULL DEFAULT 0,
  `nilai_r` double NOT NULL DEFAULT 0,
  `nilai_ranking` double(18,5) NOT NULL DEFAULT 0.00000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblranking`
--

INSERT INTO `tblranking` (`ID`, `no_datauji`, `nilai_s`, `nilai_r`, `nilai_ranking`) VALUES
(1, 'MM001', 0, 0, 0.00000),
(2, 'MM002', 0, 0, 0.00000),
(3, 'MM003', 0, 0, 0.00000);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubatribut`
--

CREATE TABLE `tblsubatribut` (
  `id_subatribut` int(11) NOT NULL,
  `kd_atribut` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubatribut`
--

INSERT INTO `tblsubatribut` (`id_subatribut`, `kd_atribut`, `keterangan`, `nilai`) VALUES
(9, 'A3', 'Laris', 100),
(10, 'A3', 'Tidak Laris', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` bigint(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Crated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Username`, `Password`, `Crated_at`) VALUES
(7, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '2021-06-02 18:29:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id_konver`);

--
-- Indexes for table `node2`
--
ALTER TABLE `node2`
  ADD PRIMARY KEY (`id_node2`);

--
-- Indexes for table `node3`
--
ALTER TABLE `node3`
  ADD PRIMARY KEY (`id_node3`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tblatribut`
--
ALTER TABLE `tblatribut`
  ADD PRIMARY KEY (`kd_atribut`);

--
-- Indexes for table `tbldataalter`
--
ALTER TABLE `tbldataalter`
  ADD PRIMARY KEY (`ID_alternatif`);

--
-- Indexes for table `tbldataalternatif`
--
ALTER TABLE `tbldataalternatif`
  ADD PRIMARY KEY (`ID_alternatif`);

--
-- Indexes for table `tbldatauji`
--
ALTER TABLE `tbldatauji`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblhistory`
--
ALTER TABLE `tblhistory`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tblnilaigain`
--
ALTER TABLE `tblnilaigain`
  ADD PRIMARY KEY (`ID_NilaiOpt`);

--
-- Indexes for table `tblranking`
--
ALTER TABLE `tblranking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubatribut`
--
ALTER TABLE `tblsubatribut`
  ADD PRIMARY KEY (`id_subatribut`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `node`
--
ALTER TABLE `node`
  MODIFY `id_konver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `node2`
--
ALTER TABLE `node2`
  MODIFY `id_node2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `node3`
--
ALTER TABLE `node3`
  MODIFY `id_node3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbldataalter`
--
ALTER TABLE `tbldataalter`
  MODIFY `ID_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbldataalternatif`
--
ALTER TABLE `tbldataalternatif`
  MODIFY `ID_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbldatauji`
--
ALTER TABLE `tbldatauji`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblhistory`
--
ALTER TABLE `tblhistory`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblnilaigain`
--
ALTER TABLE `tblnilaigain`
  MODIFY `ID_NilaiOpt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblranking`
--
ALTER TABLE `tblranking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsubatribut`
--
ALTER TABLE `tblsubatribut`
  MODIFY `id_subatribut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
