-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 12:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
