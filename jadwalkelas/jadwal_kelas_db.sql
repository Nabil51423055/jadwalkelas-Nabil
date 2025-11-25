-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 12:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_kelas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kelas`
--

CREATE TABLE `jadwal_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npm` varchar(20) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `hari` varchar(20) NOT NULL,
  `matkul` varchar(100) DEFAULT NULL,
  `dosen` varchar(100) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_kelas`
--

INSERT INTO `jadwal_kelas` (`id`, `nama`, `npm`, `kelas`, `hari`, `matkul`, `dosen`, `jam`) VALUES
(13, 'NABIL RABBANI ATSIILA', '51423055', '3IA07', 'Rabu', 'KECERDASAN ARTIFISIAL', 'WISUDA SARJONO', '7'),
(14, 'ATIKA UTAMI ', '5200406', '3IA06', 'Rabu', 'KECERDASAN ARTIFISIAL', 'WISUDA SARJONO', '8'),
(15, 'BINTANG RAMADHAN', '5200311', '3IA05', 'Rabu', 'KECERDASAN ARTIFISIAL', 'WISUDA SARJONO', '9'),
(16, 'NABIL RABBANI ATSIILA', '51423055', '3IA07', 'Kamis', 'JARINGAN KOMPUTER', 'MAULANA MUJAHIDIN', '7'),
(17, 'ATIKA UTAMI', '5200406', '3IA06', 'Kamis', 'JARINGAN KOMPUTER', 'MAULANA MUJAHIDIN', '8'),
(18, 'BINTANG RAMADHAN', '5200311', '3IA05', 'Kamis', 'JARINGAN KOMPUTER', 'MAULANA MUJAHIDIN', '9'),
(19, 'NABIL RABBANI ATSIILA', '51423055', '3IA07', 'Sabtu', 'PEMROGRAMAN WEB', 'WIDYA KHAFA  NOFA', '7'),
(20, 'ATIKA UTAMI', '5200406', '3IA06', 'Sabtu', 'PEMROGRAMAN WEB', 'WIDYA KHAFA  NOFA', '8'),
(21, 'BINTANG RAMADHAN', '5200311', '3IA05', 'Sabtu', 'PEMROGRAMAN WEB', 'WIDYA KHAFA  NOFA', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
