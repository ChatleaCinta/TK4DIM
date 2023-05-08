-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 05:51 PM
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
-- Database: `transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  `Satuan` int(15) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `iduser`) VALUES
(1, 'Pashmina Silk', 'Pashmina dengan bahan satin silk yang lembut', 150000, 1),
(4, 'Jema Dress', 'Dress rajut dengan belt terpisah', 299000, 4),
(5, 'Linen Shirt Oversize', 'Kemeja polos berbahan linen', 150000, 7),
(7, 'Jeans Cullote', 'Kulot jeans, untuk ukuran silakan bertanya kepada karyawan', 350000, 10),
(8, 'Celana Bahan', 'Celana bahan yang simple dan comfy', 100000, 5),
(9, 'Rok A line', 'Rok lucu yang bikin penampilan makin kece', 150000, 11),
(10, 'Rok Linen', 'Rok yang nyaman dan tidak tembus pandang', 170000, 11),
(16, 'high heels', 'high heels 20cm', 700000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `hakakses`
--

CREATE TABLE `hakakses` (
  `IdAkses` int(11) NOT NULL,
  `NamaAkses` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'User', 'view'),
(2, 'Admin', 'akses semua'),
(3, 'Store manager', 'create, edit, view'),
(4, 'Developer', 'akses semua'),
(5, 'Analyst', 'view'),
(6, 'Gudang', 'edit, create, view'),
(7, 'Karyawan', 'view'),
(8, 'Akuntan', 'view'),
(9, 'Stakeholder', 'view'),
(10, 'Owner', 'semua akses');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `IdPembelian` int(11) NOT NULL,
  `JumlahPembelian` int(11) DEFAULT NULL,
  `HargaBeli` int(13) DEFAULT NULL,
  `Total_hb` int(13) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `IdBarang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `Total_hb`, `iduser`, `IdBarang`) VALUES
(1, 30, 97000, 2910000, 5, 8),
(2, 50, 148000, 7400000, 4, 1),
(4, 10, 147000, 1470000, 5, 5),
(5, 15, 146000, 2190000, 11, 9),
(6, 4, 295000, 1180000, 4, 4),
(9, 7, 347000, 2429000, 4, 7),
(10, 5, 168000, 8400005, 5, 10),
(11, 15, 347000, 5205000, 4, 7),
(12, 10, 97000, 970000, 4, 8),
(13, 15, 147000, 2205000, 5, 5),
(16, 15, 148000, 2220000, 5, 1),
(19, 15, 97000, 1455000, 11, 8),
(20, 17, 295000, 5015000, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `iduser` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namalengkap` varchar(125) DEFAULT NULL,
  `NoHp` varchar(13) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `IdAkses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`iduser`, `username`, `password`, `namalengkap`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(1, 'Chatlea Cinta', 'catmeowmeow', 'Chatlea', '085736612013', 'Tulungagung', 10),
(2, 'Jeno Lee', 'samoyed', 'Jeno', '081723471987', 'Jakarta Selatan', 9),
(3, 'Elizabeth Sumiati', 'lizz123', 'Elizabeth', '081236836145', 'Yogyakarta', 5),
(4, 'Harry Styles', 'imnotharry', 'Harry', '08345277511', 'Bojongsoang', 3),
(5, 'Budi Santoso', 'inibudi', 'Budi', '085334587662', 'Bekasi', 6),
(6, 'Melissa Sulistya', 'lilissulis', 'Melissa', '0812456287712', 'Jember', 7),
(7, 'Mark Jacobs', 'morkie', 'Mark', '082236426189', 'Bandung', 4),
(8, 'MelodyIndah', 'odii19', 'Melody', '085634889354', 'Bogor', 1),
(9, 'Karang Samudera', 'sam77', 'Karang', '081123965777', 'Jakarta Timur', 8),
(10, 'Langit Biru', 'bluesky', 'Langit', '081556587049', 'Jakarta Barat', 2),
(11, 'Kenzo Prakoso', 'zopras', 'Kenzo', '081368144892', 'Jatinangor', 6),
(12, 'Lucky Firmansyah', 'firluki', 'Lucky', '082264863571', 'Denpasar', 1),
(13, 'chatleaa', 'ciaa09', 'chatlea', '08216386132', 'Jawa Timur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `IdPenjualan` int(11) NOT NULL,
  `JumlahPenjualan` int(11) DEFAULT NULL,
  `HargaJual` int(13) DEFAULT NULL,
  `Total_hj` int(13) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `IdBarang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `Total_hj`, `iduser`, `IdBarang`) VALUES
(1, 10, 150000, 1500000, 6, 1),
(2, 3, 150000, 450000, 3, 5),
(3, 2, 150000, 300000, 8, 9),
(4, 1, 350000, 350000, 2, 7),
(7, 10, 100000, 1000000, 12, 8),
(8, 2, 150000, 300000, 3, 1),
(9, 1, 170000, 170000, 8, 10),
(10, 2, 299000, 598000, 6, 4),
(11, 2, 350000, 700000, 4, 7),
(12, 6, 100000, 600000, 7, 8),
(14, 2, 150000, 300000, 4, 5),
(15, 4, 100000, 400000, 10, 8),
(16, 2, 170000, 340000, 3, 10),
(17, 1, 299000, 299000, 6, 4),
(18, 4, 150000, 600000, 9, 5),
(19, 2, 150000, 300000, 8, 9),
(20, 5, 150000, 750000, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`iduser`);

--
-- Indexes for table `hakakses`
--
ALTER TABLE `hakakses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`iduser`),
  ADD KEY `IdBarang` (`IdBarang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `IdAkses` (`IdAkses`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `penjualan_ibfk_1` (`iduser`),
  ADD KEY `penjualan_ibfk_2` (`IdBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hakakses`
--
ALTER TABLE `hakakses`
  MODIFY `IdAkses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `IdPembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `IdPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `pengguna` (`iduser`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `pengguna` (`iduser`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `pengguna` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
