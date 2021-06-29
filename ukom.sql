-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 03:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` int(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jeniskelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_pendaftaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `alamat`, `tgl`, `jeniskelamin`, `agama`, `created_at`, `updated_at`, `status_pendaftaran`) VALUES
(12, 'qqqq', 123, '1231', '2021-06-09', 'Laki', 'Kristen', '2021-06-27 10:28:39', '2021-06-27 12:32:57', 'Diterima'),
(13, 'Bulin', 123123123, '1231313123123', '2021-06-16', 'Perempuan', 'Protestan', '2021-06-27 12:34:15', '2021-06-27 12:35:03', 'Ditolak'),
(14, 'Yusuf', 2147483647, 'bdl', '2021-06-16', 'Laki', 'Buddha', '2021-06-27 21:46:07', '2021-06-27 21:50:36', 'Ditolak'),
(15, 'Alrafi', 9878, 'bandar lampung', '2021-06-09', 'Laki', 'Islam', '2021-06-27 22:16:06', '2021-06-27 22:17:19', 'Diterima'),
(16, 'Muhammad', 78785678, 'Halo', '2021-06-15', 'Laki', 'Islam', '2021-06-28 03:06:24', '2021-06-28 03:32:41', 'Diterima'),
(17, 'Pak Tristiyanto', 2473534, 'Bandar Lampung', '2021-06-02', 'Laki', 'Islam', '2021-06-28 03:25:04', '2021-06-28 05:02:00', 'Ditolak'),
(18, 'Adam', 979, 'bdl', '2021-06-03', 'Laki', 'Buddha', '2021-06-28 08:43:26', '2021-06-28 08:43:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'qqqq', 'qqq@q.o', '123', 'pendaftar', '2021-06-27 10:10:37', '2021-06-27 10:10:37'),
(18, 'Bulin', 'bul@ul.com', '123', 'pendaftar', '2021-06-27 12:33:50', '2021-06-27 12:33:50'),
(19, 'Yusuf', 'suf@su.com', '123', 'pendaftar', '2021-06-27 21:45:45', '2021-06-27 21:45:45'),
(20, 'Alrafi', 'alrafi@gmail.com', '123', 'pendaftar', '2021-06-27 22:15:21', '2021-06-27 22:15:21'),
(21, 'Pak Tristiyanto', 'tris@gmail.com', '123', 'pendaftar', '2021-06-27 22:18:31', '2021-06-27 22:18:31'),
(22, 'Muhammad', 'mh@a.o', '123', 'pendaftar', '2021-06-28 03:06:06', '2021-06-28 03:06:06'),
(23, 'Adam', 'adam@gmail.com', '123', 'pendaftar', '2021-06-28 08:42:31', '2021-06-28 08:42:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
