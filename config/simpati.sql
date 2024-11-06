-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 01:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpati`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `no_seri` varchar(30) NOT NULL,
  `kelas` varchar(9) NOT NULL,
  `kapasitas` varchar(30) NOT NULL,
  `ketelusuran` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `periode_kalibrasi` varchar(30) NOT NULL,
  `durasi` varchar(6) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id`, `nama_alat`, `kategori`, `tipe`, `no_seri`, `kelas`, `kapasitas`, `ketelusuran`, `jumlah`, `status`, `periode_kalibrasi`, `durasi`, `keterangan`) VALUES
(7, 'dacin', 'massa', 'awb', '123', 'f2', '34', 'metrologi', '12', 'berlaku', '', '', ''),
(10, 'timbangan elektronik', 'massa', 'idn', '2345', 'f2', '45', 'metrologi', '34', 'Berlaku', '12/12/12 s.d 12/12/13', '', ''),
(12, 'timbangan elektronik', 'massa', 'idn', '45678', 'm2', '20kg', 'metrologi', '12', 'Berlaku', '', '', ''),
(13, 'bejana ukur', 'volume', 'IDN', '141106', 'F2', '50', 'metrologi', '4', 'Berlaku', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kalibrasi`
--

CREATE TABLE `kalibrasi` (
  `idk` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tanggal_kalibrasi` date NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kalibrasi`
--

INSERT INTO `kalibrasi` (`idk`, `id_alat`, `id_pegawai`, `tanggal_kalibrasi`, `durasi`) VALUES
(2, 4, 7, '2024-11-01', 0),
(3, 4, 7, '2024-11-26', 30),
(4, 4, 7, '2024-11-07', 365),
(5, 4, 7, '2024-11-01', 30),
(6, 4, 7, '2024-11-01', 365),
(7, 4, 7, '2024-11-02', 365),
(8, 4, 7, '2024-11-27', 67),
(9, 4, 7, '2024-11-06', 60),
(10, 4, 7, '2024-11-02', 365),
(11, 4, 7, '2024-11-02', 365),
(12, 7, 7, '2024-11-02', 56),
(13, 4, 7, '2024-11-05', 567),
(14, 4, 7, '2024-11-05', 567),
(15, 4, 7, '2024-11-22', 678),
(16, 4, 7, '2024-11-22', 678),
(17, 4, 7, '2024-11-20', 456),
(18, 4, 7, '2024-11-20', 456),
(19, 4, 7, '2024-11-15', 89),
(20, 4, 7, '2024-11-15', 89),
(23, 12, 7, '2024-11-21', 87);

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `ids` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `suhu` int(11) NOT NULL,
  `kelembaban` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`ids`, `id_ruang`, `tanggal`, `waktu`, `suhu`, `kelembaban`) VALUES
(14, 10, '2024-11-01', '21:53:00', 23, 23),
(13, 9, '2024-11-01', '21:47:00', 34, 12),
(15, 15, '2024-11-01', '21:56:00', 13, 24),
(17, 9, '2024-11-02', '08:47:00', 23, 34);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nis` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `bidang` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nis`, `nama`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(12345, 'Intan Nuraeni', 'Kepala UPTD', '', '081234', 'intan@gmail.com', '180-Screenshot (3).png'),
(67890, 'Rini Komala', 'Kepala UPTD', '', '09876787', 'rini.komala@gmail.com', '578585357_Black and Beige Typographic Neon Design Studio Flow Logo (1).png'),
(141106, 'Nidia Gitania', 'Kepala UPTD', '', '098765', 'nnnn@gmail.com', '2037568235_Screenshot (4).png'),
(465897, 'RAHMAN, SE', 'Kasubag', '', '09673463', 'rahman@gmail.com', '1691648462_favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `luas` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `luas`, `status`) VALUES
(9, 'Perpustakaan', 12, 'tidak terpakai'),
(10, 'RA 2', 123, 'terpakai'),
(15, 'ruang 3', 45, 'terpakai');

-- --------------------------------------------------------

--
-- Table structure for table `suhu`
--

CREATE TABLE `suhu` (
  `id` int(11) NOT NULL,
  `id_ruang` int(5) NOT NULL,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suhu`
--

INSERT INTO `suhu` (`id`, `id_ruang`, `temperature`, `humidity`, `timestamp`) VALUES
(1, 9, 25.8, 66, '2024-11-06 11:19:06'),
(98, 9, 29.8, 61, '2024-11-06 11:45:53'),
(99, 9, 28, 60, '2024-11-06 11:46:05'),
(100, 9, 27.6, 61, '2024-11-06 11:46:16'),
(101, 9, 27.6, 61, '2024-11-06 11:46:26'),
(102, 9, 27.6, 62, '2024-11-06 11:46:36'),
(103, 9, 27.6, 62, '2024-11-06 11:46:47'),
(104, 9, 27.6, 62, '2024-11-06 11:46:57'),
(105, 9, 27.6, 62, '2024-11-06 11:47:07'),
(106, 9, 27.6, 62, '2024-11-06 11:47:17'),
(107, 9, 27.6, 61, '2024-11-06 11:47:27'),
(108, 9, 27.6, 62, '2024-11-06 11:47:39'),
(109, 9, 27.6, 61, '2024-11-06 11:47:50'),
(110, 9, 27.6, 61, '2024-11-06 11:48:01'),
(111, 9, 27.6, 61, '2024-11-06 11:48:13'),
(112, 9, 27.6, 61, '2024-11-06 11:48:23'),
(113, 9, 27.6, 62, '2024-11-06 11:48:34'),
(114, 9, 27.6, 62, '2024-11-06 11:48:48'),
(115, 9, 27.6, 62, '2024-11-06 11:49:01'),
(116, 9, 27.6, 63, '2024-11-06 11:49:17'),
(117, 9, 27.6, 63, '2024-11-06 11:49:31'),
(118, 9, 27.6, 62, '2024-11-06 11:49:42'),
(119, 9, 27.6, 62, '2024-11-06 11:49:56'),
(120, 9, 27.6, 62, '2024-11-06 11:50:07'),
(121, 9, 27.6, 62, '2024-11-06 11:50:22'),
(122, 9, 27.6, 63, '2024-11-06 11:50:34'),
(123, 9, 27.6, 62, '2024-11-06 11:50:45'),
(124, 9, 27.6, 62, '2024-11-06 11:50:55'),
(125, 9, 27.6, 62, '2024-11-06 11:51:07'),
(126, 9, 27.6, 61, '2024-11-06 11:51:21'),
(127, 9, 27.6, 62, '2024-11-06 11:51:32'),
(128, 9, 27.6, 62, '2024-11-06 11:51:46'),
(129, 9, 27.6, 62, '2024-11-06 11:51:57'),
(130, 9, 27.6, 62, '2024-11-06 11:52:07'),
(131, 9, 27.6, 62, '2024-11-06 11:52:22'),
(132, 9, 27.6, 62, '2024-11-06 11:52:32'),
(133, 9, 27.6, 62, '2024-11-06 11:52:43'),
(134, 9, 27.6, 62, '2024-11-06 11:52:53'),
(135, 9, 27.6, 62, '2024-11-06 11:53:03'),
(136, 9, 27.6, 62, '2024-11-06 11:53:13'),
(137, 9, 27.6, 62, '2024-11-06 11:53:24'),
(138, 9, 27.6, 61, '2024-11-06 11:53:35'),
(139, 9, 27.6, 61, '2024-11-06 11:53:45'),
(140, 9, 27.6, 61, '2024-11-06 11:53:57'),
(141, 9, 27.6, 61, '2024-11-06 11:54:08'),
(142, 9, 27.6, 61, '2024-11-06 11:54:18'),
(143, 9, 27.6, 61, '2024-11-06 11:54:29'),
(144, 9, 27.6, 61, '2024-11-06 11:54:40'),
(145, 9, 27.6, 61, '2024-11-06 11:54:50'),
(146, 9, 27.6, 60, '2024-11-06 11:55:01'),
(147, 9, 27.6, 60, '2024-11-06 11:55:12'),
(148, 9, 27.6, 61, '2024-11-06 11:55:22'),
(149, 9, 27.6, 62, '2024-11-06 11:55:34'),
(150, 9, 27.6, 62, '2024-11-06 11:55:45'),
(151, 9, 27.6, 62, '2024-11-06 11:55:55'),
(152, 9, 27.6, 61, '2024-11-06 11:56:05'),
(153, 9, 27.6, 61, '2024-11-06 11:56:17'),
(154, 9, 27.6, 61, '2024-11-06 11:56:28'),
(155, 9, 27.6, 61, '2024-11-06 11:56:40'),
(156, 9, 27.6, 61, '2024-11-06 11:56:52'),
(157, 9, 27.6, 61, '2024-11-06 11:57:03'),
(158, 9, 27.6, 61, '2024-11-06 11:57:13'),
(159, 9, 27.6, 61, '2024-11-06 11:57:23'),
(160, 9, 28, 60, '2024-11-06 11:57:34'),
(161, 9, 28, 59, '2024-11-06 11:57:44'),
(162, 9, 28, 59, '2024-11-06 11:57:54'),
(163, 9, 27.9, 61, '2024-11-06 11:58:05'),
(164, 9, 27.6, 60, '2024-11-06 11:58:17'),
(165, 9, 27.6, 60, '2024-11-06 11:58:28'),
(166, 9, 27.6, 61, '2024-11-06 11:58:39'),
(167, 9, 27.6, 61, '2024-11-06 11:58:49'),
(168, 9, 27.7, 61, '2024-11-06 11:59:00'),
(169, 9, 27.6, 61, '2024-11-06 11:59:10'),
(170, 9, 28, 60, '2024-11-06 11:59:21'),
(171, 9, 28, 60, '2024-11-06 11:59:32'),
(172, 9, 28, 59, '2024-11-06 11:59:45'),
(173, 9, 28, 60, '2024-11-06 11:59:56'),
(174, 9, 28, 60, '2024-11-06 12:00:08'),
(175, 9, 28, 60, '2024-11-06 12:00:18'),
(176, 9, 28, 61, '2024-11-06 12:00:29'),
(177, 9, 28, 61, '2024-11-06 12:00:39'),
(178, 9, 28, 60, '2024-11-06 12:00:53'),
(179, 9, 28, 60, '2024-11-06 12:01:04'),
(180, 9, 28, 59, '2024-11-06 12:01:15'),
(181, 9, 28, 59, '2024-11-06 12:01:26'),
(182, 9, 28, 59, '2024-11-06 12:01:37'),
(183, 9, 28, 59, '2024-11-06 12:01:48'),
(184, 9, 28, 59, '2024-11-06 12:01:58'),
(185, 9, 28, 59, '2024-11-06 12:02:08'),
(186, 9, 28, 60, '2024-11-06 12:02:19'),
(187, 9, 28, 60, '2024-11-06 12:02:29'),
(188, 9, 28, 61, '2024-11-06 12:02:39'),
(189, 9, 28, 60, '2024-11-06 12:02:50'),
(190, 9, 28, 60, '2024-11-06 12:03:00'),
(191, 9, 28, 60, '2024-11-06 12:03:10'),
(192, 9, 28, 59, '2024-11-06 12:03:20'),
(193, 9, 28, 59, '2024-11-06 12:03:30'),
(194, 9, 28, 59, '2024-11-06 12:03:41'),
(195, 9, 28, 59, '2024-11-06 12:03:52'),
(196, 9, 28, 59, '2024-11-06 12:04:02'),
(197, 9, 28, 59, '2024-11-06 12:04:13'),
(198, 9, 28, 59, '2024-11-06 12:04:23'),
(199, 9, 28, 59, '2024-11-06 12:04:33'),
(200, 9, 28, 59, '2024-11-06 12:04:44'),
(201, 9, 28, 59, '2024-11-06 12:04:55'),
(202, 9, 28, 59, '2024-11-06 12:05:06'),
(203, 9, 28, 59, '2024-11-06 12:05:18'),
(204, 9, 28, 59, '2024-11-06 12:05:30'),
(205, 9, 28, 59, '2024-11-06 12:05:40'),
(206, 9, 28, 59, '2024-11-06 12:05:50'),
(207, 9, 28, 59, '2024-11-06 12:06:02'),
(208, 9, 28, 59, '2024-11-06 12:06:12'),
(209, 9, 28, 59, '2024-11-06 12:06:24'),
(210, 9, 28, 59, '2024-11-06 12:06:39'),
(211, 9, 28, 59, '2024-11-06 12:06:53'),
(212, 9, 27.7, 60, '2024-11-06 12:07:04'),
(213, 9, 27.6, 60, '2024-11-06 12:07:15'),
(214, 9, 27.6, 60, '2024-11-06 12:07:25'),
(215, 9, 27.6, 60, '2024-11-06 12:07:36'),
(216, 9, 27.8, 60, '2024-11-06 12:07:48'),
(217, 9, 28, 59, '2024-11-06 12:07:58'),
(218, 9, 28, 59, '2024-11-06 12:08:11'),
(219, 9, 28, 59, '2024-11-06 12:08:21'),
(220, 9, 28, 59, '2024-11-06 12:08:31'),
(221, 9, 28, 59, '2024-11-06 12:08:46'),
(222, 9, 28, 59, '2024-11-06 12:08:58'),
(223, 9, 28, 59, '2024-11-06 12:09:27'),
(224, 9, 28, 59, '2024-11-06 12:09:39'),
(225, 9, 28, 59, '2024-11-06 12:09:49'),
(226, 9, 28, 59, '2024-11-06 12:10:02'),
(227, 9, 28, 59, '2024-11-06 12:10:13'),
(228, 9, 28, 59, '2024-11-06 12:10:25'),
(229, 9, 28, 59, '2024-11-06 12:10:35'),
(230, 9, 28, 60, '2024-11-06 12:10:47'),
(231, 9, 28, 60, '2024-11-06 12:11:00'),
(232, 9, 28, 59, '2024-11-06 12:11:13'),
(233, 9, 28, 59, '2024-11-06 12:11:24'),
(234, 9, 28, 59, '2024-11-06 12:11:34'),
(235, 9, 28, 59, '2024-11-06 12:11:44'),
(236, 9, 28, 59, '2024-11-06 12:11:55'),
(237, 9, 28, 59, '2024-11-06 12:12:06'),
(238, 9, 28, 60, '2024-11-06 12:12:17'),
(239, 9, 28, 60, '2024-11-06 12:12:27'),
(240, 9, 28, 59, '2024-11-06 12:12:37'),
(241, 9, 28, 59, '2024-11-06 12:12:47'),
(242, 9, 28, 59, '2024-11-06 12:12:57'),
(243, 9, 28, 59, '2024-11-06 12:13:07'),
(244, 9, 28, 59, '2024-11-06 12:13:18'),
(245, 9, 28, 60, '2024-11-06 12:13:29'),
(246, 9, 28, 60, '2024-11-06 12:13:43'),
(247, 9, 28, 60, '2024-11-06 12:13:53'),
(248, 9, 28, 61, '2024-11-06 12:14:03'),
(249, 9, 28, 61, '2024-11-06 12:14:14'),
(250, 9, 28, 60, '2024-11-06 12:14:24'),
(251, 9, 28, 60, '2024-11-06 12:14:34'),
(252, 9, 28, 60, '2024-11-06 12:14:44'),
(253, 9, 28, 60, '2024-11-06 12:14:54'),
(254, 9, 28, 60, '2024-11-06 12:15:04'),
(255, 9, 28, 60, '2024-11-06 12:15:15'),
(256, 9, 28, 60, '2024-11-06 12:15:25'),
(257, 9, 28, 60, '2024-11-06 12:15:35'),
(258, 9, 28, 60, '2024-11-06 12:15:45'),
(259, 9, 28, 60, '2024-11-06 12:15:55'),
(260, 9, 28, 60, '2024-11-06 12:16:05'),
(261, 9, 28, 60, '2024-11-06 12:16:15'),
(262, 9, 28, 60, '2024-11-06 12:16:25'),
(263, 9, 28, 60, '2024-11-06 12:16:35'),
(264, 9, 28, 60, '2024-11-06 12:16:45'),
(265, 9, 28, 60, '2024-11-06 12:16:55'),
(266, 9, 28, 60, '2024-11-06 12:17:05'),
(267, 9, 28, 60, '2024-11-06 12:17:15'),
(268, 9, 28, 60, '2024-11-06 12:17:26'),
(269, 9, 28, 61, '2024-11-06 12:17:36'),
(270, 9, 28, 61, '2024-11-06 12:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nis` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nis`) VALUES
(1, 'ceceps', '1234', 'Admin', 13568),
(3, 'enjang', '123', 'Pegawai', 23),
(5, 'rahman', '123', 'Pegawai', 5678),
(6, 'enjang', '123', 'Pegawai', 23),
(7, 'dedens', '456', 'Admin', 3456),
(8, 'neng siti', '321', 'User', 54321),
(9868661, 'andri', 'and', 'Pegawai', 564);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalibrasi`
--
ALTER TABLE `kalibrasi`
  ADD PRIMARY KEY (`idk`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `suhu`
--
ALTER TABLE `suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kalibrasi`
--
ALTER TABLE `kalibrasi`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465898;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `suhu`
--
ALTER TABLE `suhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9868662;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
