-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 02:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(50) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga_beli` int(50) NOT NULL,
  `harga_jual` int(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tgl_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `id_barang`, `kategori`, `nama_barang`, `merk`, `stok`, `harga_beli`, `harga_jual`, `satuan`, `tgl_input`) VALUES
(2, 'AR002', 'Pakan Burung', 'Tetra-Chlor', 'medionE2E', 10, 10000, 30000, 'PCS', '09-03-23'),
(5, 'AR003', 'Pakan Burung', 'Tetra-Chlor E2E', 'vitachik', 5, 10000, 12000, 'PCS', '09-03-23'),
(6, 'AR004', 'Pakan Ayam', 'Jagung', 'Tani', 100, 9000, 10000, 'KG', '11-March-23'),
(7, 'AR005', 'Obat Ayam', 'Milenium', 'jamurasa', 10, 10000, 12000, 'PCS', '11-March-23'),
(8, 'AR006', 'Pakan Burung', 'Bendrad', 'Gempol', 20, 150000, 150000, 'PCS', '11-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `judul`, `tgl_input`) VALUES
(9, 'Pakan Burung', '09-March-23'),
(10, 'Obat Burung', '09-March-23'),
(11, 'Pakan Ayam', '09-March-23'),
(12, 'Obat Ayam', '09-March-23'),
(13, 'Pakan Sapi', '09-March-23'),
(14, 'Obat Sapi', '09-March-23'),
(16, 'dw', '11-March-23');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(50) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `total_harga` int(35) NOT NULL,
  `jumlah_dibayar` int(25) NOT NULL,
  `kembali` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_barang`, `total_harga`, `jumlah_dibayar`, `kembali`) VALUES
(34, 'Bendrad', 150000, 500000, 350000),
(35, 'Bendrad', 150000, 200000, 50000),
(36, 'Tetra-Chlor', 50000, 60000, 10000),
(37, 'Jagung', 10000, 30000, 20000),
(38, 'Tetra-Chlor', 30000, 100000, 70000),
(39, 'Tetra-Chlor', 60000, 100000, 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
