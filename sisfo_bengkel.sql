-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 08:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_berat`
--

CREATE TABLE `alat_berat` (
  `id` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `suplier_id` varchar(4) NOT NULL,
  `stok` int(4) DEFAULT NULL,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_berat`
--

INSERT INTO `alat_berat` (`id`, `nama`, `suplier_id`, `stok`, `harga`) VALUES
('AB01', 'Truck', 'S001', 15, 57000000),
('AB03', 'Crawler Crane', 'S004', 2, 480000000),
('AB04', 'Wheel Loader', 'S002', 12, 25000000),
('AB05', 'Asphalt Concrete Pavet', 'S002', 50, 20000000),
('AB09', 'Bulldozer', 'S005', 5, 79000000),
('AB10', 'Road Builder', 'S003', 5, 36000000);

-- --------------------------------------------------------

--
-- Table structure for table `berasal`
--

CREATE TABLE `berasal` (
  `id` varchar(4) NOT NULL,
  `suplier_id` varchar(4) NOT NULL,
  `alat_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengadaan`
--

CREATE TABLE `jadwal_pengadaan` (
  `id` int(7) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `perubahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pengadaan`
--

INSERT INTO `jadwal_pengadaan` (`id`, `tahap`, `mulai`, `sampai`, `perubahan`) VALUES
(1, 'Pemberian Penjelasan	', '2019-04-18', '2019-04-19', 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `menginputkan`
--

CREATE TABLE `menginputkan` (
  `id` varchar(4) NOT NULL,
  `id_user` varchar(30) DEFAULT NULL,
  `id_alat` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menginputkan`
--

INSERT INTO `menginputkan` (`id`, `id_user`, `id_alat`) VALUES
('IN01', 'admin', 'AB01'),
('IN02', 'admin', 'AB02'),
('IN03', 'admin', 'AB03'),
('IN04', 'staff', 'AB04'),
('IN05', 'admin', 'AB05');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_bengkel`
--

CREATE TABLE `pengadaan_bengkel` (
  `id` varchar(5) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `pagu` varchar(50) NOT NULL,
  `tahap` varchar(60) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jadwal` int(5) NOT NULL,
  `sumber` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan_bengkel`
--

INSERT INTO `pengadaan_bengkel` (`id`, `nama_paket`, `unit`, `pagu`, `tahap`, `tanggal`, `metode`, `lokasi`, `jadwal`, `sumber`) VALUES
('P0001', 'Pengadaan barang persediaan pemeliharaan gedung dan bangunan KPK Tahap 1 Tender Ulang\r\n', 'LPSE Kementerian Keuangan\r\n', 'Rp 304.693.180,00 (304 JT)', 'Tidak Ada Jadwal', '26-April-2019 s/d 03-Mei-2019', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah Sistem Gugur\r\n', 'Gedung KPK - Jakarta Selatan (Kota)\r\n', 1, 1128);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama`, `asal`) VALUES
('S001', 'Hino', 'Kalimantan'),
('S002', 'Samsung', 'Jakarta'),
('S003', 'Yamaha', 'Jepang'),
('S004', 'Maknyuss', 'Bandung'),
('S005', 'Huawei', 'Korea'),
('S092', 'Tanza', 'Toronto');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date DEFAULT NULL,
  `nama_lengkap` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `last_login`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '2019-04-27', 'BOSS'),
('arsyel', '00f68ee6c59ac6e340f8016c1e2a1a0c', '2019-04-27', 'Arsyel'),
('staff', '1253208465b1efa876f982d8a9e73eef', '2019-04-26', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_berat`
--
ALTER TABLE `alat_berat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suplier_id` (`suplier_id`);

--
-- Indexes for table `berasal`
--
ALTER TABLE `berasal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pengadaan`
--
ALTER TABLE `jadwal_pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menginputkan`
--
ALTER TABLE `menginputkan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan_bengkel`
--
ALTER TABLE `pengadaan_bengkel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_JadwalPengadaan` (`jadwal`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alat_berat`
--
ALTER TABLE `alat_berat`
  ADD CONSTRAINT `alat_berat_ibfk_1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`);

--
-- Constraints for table `pengadaan_bengkel`
--
ALTER TABLE `pengadaan_bengkel`
  ADD CONSTRAINT `FK_JadwalPengadaan` FOREIGN KEY (`jadwal`) REFERENCES `jadwal_pengadaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
