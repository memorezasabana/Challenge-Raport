-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 03:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(3) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer Jaringan'),
(3, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nis` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `nilai_web` int(3) NOT NULL,
  `nilai_pbo` int(3) NOT NULL,
  `nilai_basdat` int(3) NOT NULL,
  `nilai_desain` int(3) NOT NULL,
  `nilai_progdas` int(3) NOT NULL,
  `ratarata` int(3) NOT NULL,
  `predikat` varchar(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nis`, `nama`, `alamat`, `id_jurusan`, `id_kelas`, `nilai_web`, `nilai_pbo`, `nilai_basdat`, `nilai_desain`, `nilai_progdas`, `ratarata`, `predikat`, `keterangan`) VALUES
(111, 'Satmika Antargata Ozora', 'Kabupaten Banyuwangi', 2, 1, 94, 90, 88, 86, 90, 90, 'A', 'Excellent'),
(112, 'Naisya Najmi', 'Kabupaten Tulungagung', 3, 2, 88, 86, 84, 94, 84, 87, 'B', 'Baik'),
(113, 'Natasya Adelia Ramadhanti', 'Kabupaten Blitar', 1, 3, 84, 80, 76, 74, 78, 78, 'C', 'Cukup'),
(114, 'Sabrina Amelia', 'Kabupaten Tulungagung', 1, 1, 60, 66, 62, 68, 66, 64, 'D', 'Kurang'),
(115, 'Rendi Prayata Wibawa', 'Kabupaten Tuban', 3, 3, 46, 50, 40, 44, 50, 46, 'E', 'Rendah'),
(116, 'Ruqul Adam Himawan', 'Kabupaten Blitar', 2, 1, 98, 96, 94, 90, 90, 94, 'A', 'Excellent'),
(117, 'Memoreza sabana', 'Kabupaten Tuban', 1, 1, 90, 86, 88, 82, 88, 87, 'B', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `nis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
