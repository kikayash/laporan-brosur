-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 05:04 AM
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
-- Database: `db_laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(3) NOT NULL,
  `nama` enum('rafif','rino','fio','sonny') NOT NULL,
  `jenis_pekerjaan` enum('sebar_brosur','pasang_banner','pasang_spanduk') NOT NULL,
  `tgl_pekerjaan` date NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `daerah2` varchar(100) NOT NULL,
  `daerah3` varchar(100) NOT NULL,
  `daerah4` varchar(100) NOT NULL,
  `daerah5` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kota` enum('malang','pasuruan') NOT NULL,
  `jumlah_brosur` int(5) NOT NULL,
  `respon_wa` varchar(100) NOT NULL,
  `fal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `jenis_pekerjaan`, `tgl_pekerjaan`, `daerah`, `daerah2`, `daerah3`, `daerah4`, `daerah5`, `kelurahan`, `kota`, `jumlah_brosur`, `respon_wa`, `fal`) VALUES
(1, 'rafif', 'sebar_brosur', '2023-07-26', 'ikan hiu', 'ikan emas', 'ikan piranha', 'ikan arwana', 'ikan gurami', 'lowokwaru', 'malang', 1000, 'baik', 'baik'),
(2, 'rino', 'pasang_banner', '2018-07-18', 'Jl Emas', 'Jl Nikel', 'Jl Batubara', 'Jl Titan', 'Jl Alpaka', 'Polowijen', 'malang', 4000, 'cukup baik', 'baik'),
(3, 'fio', 'pasang_spanduk', '2023-07-08', 'Jl Bunga Coklat', 'Jl Bunga Cempaka', 'Jl Bunga Mawar', 'Jl Bunga Melati', 'Jl Bunga Anggrek', 'lowokwaru', 'malang', 6000, 'kurang baik', 'baik'),
(4, 'sonny', 'pasang_banner', '2019-07-18', 'timur', 'barat', 'utara', 'selatan', 'timur laut', 'kepuh', 'pasuruan', 3000, 'cukup baik', 'baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
