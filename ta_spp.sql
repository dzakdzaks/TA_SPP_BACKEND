-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 06:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_payment` int(11) NOT NULL,
  `nama_payment` varchar(255) NOT NULL,
  `value_payment` varchar(255) NOT NULL,
  `catatan_payment` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_payment`, `nama_payment`, `value_payment`, `catatan_payment`, `created`) VALUES
(4, 'SPP Kelas VII', '350000', '', '2019-05-08 09:17:54'),
(5, 'SPP Kelas VIII', '400000', '', '2019-05-08 01:13:27'),
(6, 'SPP Kelas IX', '450000', '', '2019-05-08 01:13:39'),
(10, 'PAS', '100000', 'UNTUK PAS', '2019-05-08 09:23:40'),
(11, 'PTS', '100000', 'UNTUK PTS', '2019-05-08 09:23:55'),
(12, 'LDKS', '300000', 'UNTUK LDK', '2019-05-08 12:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `title`, `isi`, `created`) VALUES
(1, 'LDKS', 'Akan diadakan LDKS besok.', '2019-05-08 04:23:22'),
(5, 'Wakwaw ', 'hshsuwheowiwjehwjwwi', '2019-05-09 18:15:22'),
(6, 'Pentas Seni 2019', 'Ini keren  loooh', '2019-05-09 18:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `nis_user` varchar(30) NOT NULL,
  `no_urut_user` varchar(30) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `ttl_user` varchar(255) NOT NULL,
  `kelas_user` varchar(25) NOT NULL,
  `jk_user` varchar(25) NOT NULL,
  `agama_user` varchar(25) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `no_telpon_user` varchar(25) NOT NULL,
  `sakit_user` int(11) NOT NULL,
  `izin_user` int(11) NOT NULL,
  `alpha_user` int(11) NOT NULL,
  `role_user` varchar(11) NOT NULL,
  `payment_1` varchar(255) NOT NULL,
  `value_payment_1` varchar(255) NOT NULL,
  `cat_payment_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_payment`, `nis_user`, `no_urut_user`, `nama_user`, `pass_user`, `ttl_user`, `kelas_user`, `jk_user`, `agama_user`, `alamat_user`, `no_telpon_user`, `sakit_user`, `izin_user`, `alpha_user`, `role_user`, `payment_1`, `value_payment_1`, `cat_payment_1`) VALUES
(1, 6, 'admin', '00', 'admin', 'admin', '15 Juli 2001', 'kelas admin', 'L', 'Islam', 'Bekasi', '+6287876002470', 1, 5, 0, 'Admin', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(2, 6, '353535', '1', 'Muhammad Dzaky Rahmanto', '353535*', 'Bekasi 15 Juli 2001', 'IX A', 'L', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 1, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(3, 6, '111111', '1', 'Scarlett Johansson', '111111*', 'Bekasi 15 Juli 2001', 'IX B', 'P', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS', ',100000,100000', ',UNTUK PAS,UNTUK PTS'),
(4, 5, '222222', '1', 'Boy', '222222*', 'Bekasi 15 Juli 2001', 'VIII A', 'L', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(5, 5, '333333', '1', 'Zaraaa Cantik', '333333*', 'Bekasi 15 Juli 2001', 'VIII B', 'P', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(6, 4, '444444', '1', 'Chris Evans', '444444*', 'Bekasi 15 Juli 2001', 'VII A', 'L', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(7, 4, '555555', '1', 'Kyla', '555555*', 'Bekasi 15 Juli 2001', 'VII B', 'P', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(8, 6, '535353', '2', 'Muhammad Evans Rahmanto', '535353*', 'Bekasi 15 Juli 2001', 'IX A', 'L', 'Islam', 'Bekasi', '+6287876002470', 1, 3, 0, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(11, 5, '00000000000000', '2', 'Dzakdzaks', '00000000000000*', 'Jakarta 25 Agustus 1990', 'VIII A', 'L', 'Islam', 'Bekasiissssss', '+63413153153', 2, 1, 1, 'Siswa', ',PAS,PTS,LDKS', ',100000,100000,300000', ',UNTUK PAS,UNTUK PTS,UNTUK LDK'),
(13, 5, '3275', '2', 'Kinal', '3275*', '', 'VIII B', 'P', '', '', '', 0, 0, 0, 'Siswa', '', '', ''),
(14, 6, '9898', '2', 'Lele', '9898*', '', 'IX B', 'L', '', '', '', 0, 0, 0, 'Siswa', '', '', ''),
(15, 6, '341122112', '3', 'Geloooosss', '341122112*', 'Jakarta 25 Agustus 1990', 'IX A', 'L', 'Islam', 'Bekasiissssss', '+63413153153', 2, 1, 1, 'Siswa', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nis_user` (`nis_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
