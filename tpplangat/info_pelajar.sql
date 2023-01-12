-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `namapelajar` varchar(50) NOT NULL,
  `ndp` int(9) NOT NULL,
  `nokp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `namapelajar`, `ndp`, `nokp`, `jantina`, `nohp`) VALUES
(17, 'AINA ATIKAH BINTI AZHAR', 23221132, '031206143561', 'perempuan', '0185765431'),
(18, 'AINA NAJWA BINTI AMRAN ', 23221100, '020723081107', 'perempuan', '0195545441'),
(19, 'ALLYSSA BINTI ABDULLAH', 23221157, '030526141252', 'perempuan', '0196448279'),
(21, 'ISHUARIYAA A/P KRISHNAN', 23221132, '021013031452', 'perempuan', '0195545441');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
