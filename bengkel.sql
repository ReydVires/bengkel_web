-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 01:39 PM
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
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `last_login`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2019-05-01'),
('arsyel', '00f68ee6c59ac6e340f8016c1e2a1a0c', 'Ahmad Arsyel', '0000-00-00'),
('ayumi', '40ed120dc7f5cf31bcff11bcb4d6c9bf', 'Ayumi Rahmadani H.', '0000-00-00'),
('fap', '492d3bbf08ba02368ffb7dd23544ecaa', 'Fakry Adi Permana', '0000-00-00'),
('rara', 'd8830ed2c45610e528dff4cb229524e9', 'Audia W. Clara', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `alat_berat`
--

CREATE TABLE `alat_berat` (
  `kode` varchar(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `status` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `admin_id` varchar(5) NOT NULL,
  `suplier_id` varchar(5) NOT NULL,
  `pengadaan_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_berat`
--

INSERT INTO `alat_berat` (`kode`, `name`, `status`, `stok`, `admin_id`, `suplier_id`, `pengadaan_id`) VALUES
('AB001', 'Buldozzer', 'DIPAKAI', 2, 'admin', 'SP001', 'P0001'),
('AB002', 'Crane', 'DIPERBAIKI', 5, 'admin', 'SP003', 'P0001'),
('AB003', 'Truck', 'DIPINJAM', 10, 'admin', 'SP004', 'P0001'),
('AB004', 'Wheel Loader', 'TIDAK TERSEDIA', 0, 'admin', 'SP002', 'P0001');

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
(1, 'Pemberian Penjelasan	', '2019-04-18', '2019-04-19', 'Tidak ada'),
(2, 'Pelelangan', '2019-11-29', '2019-12-01', 'Tidak ada'),
(3, 'Pelelangan', '2019-12-11', '2019-12-15', 'Tidak ada'),
(4, 'Pembelian Barang', '2019-12-01', '2019-12-04', 'Tidak ada'),
(9, 'Pelelangan', '2019-11-09', '2019-11-12', 'Tidak ada');

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
  `id` varchar(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `asal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama`, `asal`) VALUES
('SP001', 'Hino', 'China'),
('SP002', 'Huawei', 'Taiwan'),
('SP003', 'Samsung', 'Korea'),
('SP004', 'Sakai', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `alat_berat`
--
ALTER TABLE `alat_berat`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `FK_alat_beratAdmin` (`admin_id`),
  ADD KEY `FK_alat_beratSuplier` (`suplier_id`);

--
-- Indexes for table `jadwal_pengadaan`
--
ALTER TABLE `jadwal_pengadaan`
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
-- Constraints for dumped tables
--

--
-- Constraints for table `alat_berat`
--
ALTER TABLE `alat_berat`
  ADD CONSTRAINT `FK_alat_beratAdmin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`username`),
  ADD CONSTRAINT `FK_alat_beratSuplier` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`);

--
-- Constraints for table `pengadaan_bengkel`
--
ALTER TABLE `pengadaan_bengkel`
  ADD CONSTRAINT `FK_JadwalPengadaan` FOREIGN KEY (`jadwal`) REFERENCES `jadwal_pengadaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
