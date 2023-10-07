-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clear`
--

-- --------------------------------------------------------

--
-- Table structure for table `akmw`
--

CREATE TABLE `akmw` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `keperluan` text NOT NULL,
  `barang_pinjam` varchar(200) NOT NULL,
  `img_peminjaman` varchar(5000) NOT NULL,
  `waktu_pmj` datetime NOT NULL,
  `waktu_pmb` datetime NOT NULL,
  `img_pmb` varchar(5000) NOT NULL,
  `kondisi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akmw`
--

INSERT INTO `akmw` (`id`, `nama`, `kelas`, `keperluan`, `barang_pinjam`, `img_peminjaman`, `waktu_pmj`, `waktu_pmb`, `img_pmb`, `kondisi`) VALUES
(106, 'rifki', 'xii tkj', 'nonton', 'Proyektor', '5-September-2023-17.28rifkixii tkj.png', '2023-09-05 17:28:17', '2023-09-06 18:49:33', '6-September-2023-18.49.png', 1),
(107, 'alya', '12', 'nonton', 'Proyektor,Colokan', '5-September-2023-18.09alya12.png', '2023-09-05 18:09:48', '2023-09-06 18:50:01', '6-September-2023-18.50.png', 1),
(108, 'sdfgsd', 'sdfDS', 'SDfsd', 'Proyektor,Colokan', '5-September-2023-18.10sdfgsdsdfDS.png', '2023-09-05 18:10:11', '2023-09-06 18:50:16', '6-September-2023-18.50.png', 1),
(109, 'flyy', 'xi', 'nonton', 'Proyektor,Colokan', '5-September-2023-18.25flyyxi.png', '2023-09-05 18:25:56', '0000-00-00 00:00:00', '', 1),
(110, 'awdf', 'faw', 'faw', 'Proyektor', '5-September-2023-18.54awdffaw.png', '2023-09-05 18:54:50', '0000-00-00 00:00:00', '', 1),
(111, 'Rifki Muhamad', 'XII TKJ', 'nonton', 'Proyektor,Colokan,Keyboard', '5-September-2023-20.16Rifki MuhamadXII TKJ.png', '2023-09-05 20:16:35', '0000-00-00 00:00:00', '', 1),
(112, 'fly', 'XI TKJ', 'APA AJA', 'Proyektor,Colokan,Headset,Monitor,Keyboard,Obeng,Speake,Sapu,Pelan', '6-September-2023-16.30flyXI TKJ.png', '2023-09-06 16:30:04', '0000-00-00 00:00:00', '', 0),
(114, 'aldo slebew', 'XXIIIIXIIII TKJ', 'KEPO AMAT', 'Proyektor,Colokan,Monitor', '6-September-2023-17.57aldo slebewXXIIIIXIIII TKJ.png', '2023-09-06 17:57:49', '0000-00-00 00:00:00', '6-September-2023-18.48.png', 1),
(115, 'aufa', 'gseg', 'dfg', 'Proyektor', '6-September-2023-17.59aufagseg.png', '2023-09-06 17:59:40', '0000-00-00 00:00:00', '6-September-2023-18.48.png', 1),
(116, 'aufa', 'XII TJKT', 'Japanese Club', 'Proyektor,Colokan', '6-September-2023-19.02aufaXII TJKT.png', '2023-09-06 19:02:13', '2023-09-06 19:02:30', '6-September-2023-19.02.png', 1),
(117, 'Azrn', 'XII TO', 'Mandiri', 'Headset,Obeng,Speaker,Sapu', '6-September-2023-20.19AzrnXII TO.png', '2023-09-06 20:19:56', '2023-09-06 20:20:16', '6-September-2023-20.20.png', 1),
(118, 'riki', 'pamong', 'kepo', 'Keyboard,Speaker,Sapu', '6-September-2023-20.27rikipamong.png', '2023-09-06 20:27:26', '2023-09-06 20:27:55', '6-September-2023-20.27.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auah`
--

CREATE TABLE `auah` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `keranjang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(11) NOT NULL,
  `keranjang` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `keranjang`, `nama`, `value`) VALUES
(1, '{\"Infokus\":1}', '', 0),
(2, '{\"Colokan\":1}', '', 0),
(3, '{\"Colokan\":1,\"Infokus\":1}', '', 0),
(4, '{\"Infokus\":1,\"Colokan\":1,\"Produk 3\":1}', '', 0),
(5, '{\"Produk 3\":1,\"Colokan\":1}', '', 0),
(6, 'Infokus:1,Colokan:1', '', 0),
(7, 'Colokan,Produk 3', '', 0),
(8, 'Colokan9', '', 0),
(9, 'Colokan1,Infokus1', '', 0),
(10, 'Colokan4,Infokus1', '', 0),
(11, 'Produk 31,Colokan1,Infokus1', '', 0),
(12, 'Colokan1', '', 0),
(13, 'Infokus,Colokan', '', 0),
(14, 'Colokan,Infokus', '', 0),
(15, 'Produk 3,Colokan,Infokus', '', 0),
(16, 'Produk 3,Colokan,Infokus', '', 0),
(17, 'Colokan', '', 0),
(18, 'Colokan', '', 0),
(19, 'Colokan,Infokus,Produk 3', '', 0),
(20, '', '', 0),
(21, '', '', 0),
(22, 'Infokus', '', 0),
(23, 'Colokan', '', 0),
(24, 'Colokan', 'aowkowk', 0),
(25, 'Colokan', 'aowkowk', 0),
(26, 'Infokus', 'wawaf', 0),
(27, 'Colokan', 'fwaf', 0),
(28, 'Colokan', 'encodeURIComponent(nama)', 0),
(29, 'Colokan', 'encodeURIComponent(nama)', 0),
(30, 'Colokan', 'wokoak', 0),
(31, '', 'wokoak', 0),
(32, 'Colokan', 'wokoak', 0),
(33, 'Colokan,Produk 3', 'wokoak', 0),
(34, 'Colokan,Produk 3,Infokus', 'wokoak', 0),
(35, 'Infokus', 'aowkowk', 0),
(36, 'Colokan', 'aowkowk', 0),
(37, 'Colokan', 'fafsafsa', 0),
(38, 'Infokus,Colokan,Produk 3', 'aw', 0),
(39, 'Infokus', '', 0),
(40, 'Infokus,Colokan', 'awwaw', 0),
(41, 'Infokus,Colokan', 'hehe', 0),
(42, '', '', 0),
(43, 'Infokus,Colokan,Produk 3', '', 0),
(44, 'Infokus,Colokan,Produk 3', '', 0),
(45, 'wadf', 'fawfa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akmw`
--
ALTER TABLE `akmw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auah`
--
ALTER TABLE `auah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akmw`
--
ALTER TABLE `akmw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `auah`
--
ALTER TABLE `auah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
