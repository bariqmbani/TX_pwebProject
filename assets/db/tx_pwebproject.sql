-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 05:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tx_pwebproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `berat_barang` int(3) DEFAULT NULL,
  `dimensi` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `alamat_pengirm` varchar(40) NOT NULL,
  `nama_penerima` varchar(20) NOT NULL,
  `telp_penerima` varchar(12) NOT NULL,
  `alamat_penerima` varchar(40) NOT NULL,
  `id_tujuan` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(5) NOT NULL,
  `kota1` varchar(15) NOT NULL,
  `kota2` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `kota1`, `kota2`, `harga`) VALUES
(10001, 'Bandung', 'Jakarta', 15000),
(10002, 'Bandung', 'Bogor', 10000),
(10003, 'Bandung', 'Sukabumi', 12000),
(10004, 'Bandung', 'Tasikmalaya', 10000),
(10005, 'Bandung', 'Cirebon', 18000),
(10006, 'Jakarta', 'Bogor', 8000),
(10007, 'Jakarta', 'Sukabumi', 20000),
(10008, 'Jakarta', 'Tasikmalaya', 18000),
(10009, 'Jakarta', 'Cirebon', 10000),
(10010, 'Bogor', 'Sukabumi', 18000),
(10011, 'Bogor', 'Tasikmalaya', 15000),
(10012, 'Bogor', 'Cirebon', 12000),
(10013, 'Sukabumi', 'Tasikmalaya', 10000),
(10014, 'Sukabumi', 'Cirebon', 22000),
(10015, 'Tasikmalaya', 'Cirebon', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `no_telp`) VALUES
('aaa', '111', 'aaa', '12313'),
('adit', '6216f8a75fd5bb3d5f22', 'adit', '09877'),
('asepnur', '123', 'asep', '0888827'),
('bariq', '7c4a8d09ca3762af61e5', 'Bariq', '08888888123'),
('test', '40bd001563085fc35165', 'test', '0808080');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
