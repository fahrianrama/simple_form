-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 01:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_formulir`
--

CREATE TABLE `data_formulir` (
  `id` int(10) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_formulir`
--

INSERT INTO `data_formulir` (`id`, `divisi`, `jabatan`, `nama`, `jenis`, `keterangan`, `status`) VALUES
(1233, 'Produksi', 'Staff', 'Siti', 'Cuti khusus', 'Melahirkan (membutuhkan waktu sekitar 12 bulan)', 'Disetujui'),
(1234, 'Produksi', 'Manajer', 'Hardi Affandi', 'Cuti Tahunan', 'Cuti dilaksanakan selama 1 tahun sehingga saya bisa berfokus untuk mengembangkan diri', 'Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_formulir`
--
ALTER TABLE `data_formulir`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
