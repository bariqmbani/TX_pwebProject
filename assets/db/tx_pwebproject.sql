-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2017 pada 17.08
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `berat_barang` int(3) DEFAULT NULL,
  `dimensi` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `berat_barang`, `dimensi`, `harga`) VALUES
(3, 'baju', 10, NULL, NULL),
(4, 'kaos', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `alamat_pengirim` varchar(40) NOT NULL,
  `nama_penerima` varchar(20) NOT NULL,
  `telp_penerima` varchar(12) NOT NULL,
  `alamat_penerima` varchar(40) NOT NULL,
  `id_tujuan` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `alamat_pengirim`, `nama_penerima`, `telp_penerima`, `alamat_penerima`, `id_tujuan`, `id_barang`, `total_harga`) VALUES
(3, '', 'sdsa', 'dsfds', '123', 'dsfs', 0, 0, 0),
(4, '', 'abc', 'vita', '1234', 'bds', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(5) NOT NULL,
  `kota1` varchar(15) NOT NULL,
  `kota2` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tujuan`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `no_telp`) VALUES
('aaa', '111', 'aaa', '12313'),
('asepnur', '123', 'asep', '0888827');

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
