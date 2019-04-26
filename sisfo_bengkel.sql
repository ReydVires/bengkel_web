-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 06:30 PM
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
('AB01', 'Truck', 'S001', 10, 75000000),
('AB03', 'Crawler Crane', 'S003', 2, 480000000),
('AB04', 'Wheel Loader', 'S002', 12, 25000000),
('AB09', 'Bulldozer', 'S001', 8, 79000000),
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
('S001', 'HINO', 'Tanggerang'),
('S002', 'Yahaha', 'Jakarta'),
('S003', 'Yamaha', 'Jepang');

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
('admin', '21232f297a57a5a743894a0e4a801fc3', '2019-04-26', 'BOSS'),
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
-- Indexes for table `menginputkan`
--
ALTER TABLE `menginputkan`
  ADD PRIMARY KEY (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
