-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 01:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farras_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas_farras`
--

CREATE TABLE `tugas_farras` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `nama_parfum` text NOT NULL,
  `deadline` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_farras`
--

INSERT INTO `tugas_farras` (`id_tugas`, `nama_tugas`, `nama_parfum`, `deadline`, `time`) VALUES
(19, 'College Reunion', 'Versace Eros', '2022-12-26', '12:43:00'),
(20, 'Liam Wedding', 'Ambar Janma', '2022-12-31', '14:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tugas_farras`
--
ALTER TABLE `tugas_farras`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas_farras`
--
ALTER TABLE `tugas_farras`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
