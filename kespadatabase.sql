-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2025 at 06:41 AM
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
-- Database: `kespadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`, `name`) VALUES
('K124', 'kespaadmin0011', 'Nazmi');

-- --------------------------------------------------------

--
-- Table structure for table `ahli_kespa`
--

CREATE TABLE `ahli_kespa` (
  `noSiri` int(225) NOT NULL,
  `submitDate` datetime NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(225) NOT NULL,
  `noIC` int(255) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `noTel` varchar(225) NOT NULL,
  `jantina` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `namaSyarikat` varchar(225) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahli_kespa`
--

INSERT INTO `ahli_kespa` (`noSiri`, `submitDate`, `nama`, `noIC`, `alamat`, `noTel`, `jantina`, `email`, `namaSyarikat`, `image_path`) VALUES
(7, '2025-07-04 23:29:08', 'Nazmi', 122342421, 'asvbufsafw', '12143553', 'Lelaki', 'miumiu@gmail.com', 'tahle', 'uploads/1751664548_Monster Hunter Rise 11_18_2024 11_23_59 PM.png'),
(11, '2025-07-08 00:08:16', 'miu', 122342421, 'saddadada', '2132434535', 'Lelaki', 'nazmi123@gmail.com', 'afafaf', 'uploads/1751926096_Monster Hunter Rise 11_6_2024 11_11_16 PM.png');

-- --------------------------------------------------------

--
-- Table structure for table `kespa_aduan`
--

CREATE TABLE `kespa_aduan` (
  `noSiriAduan` int(225) NOT NULL,
  `namaAduan` varchar(225) NOT NULL,
  `noTelAduan` varchar(225) NOT NULL,
  `emailAduan` varchar(225) NOT NULL,
  `syarikatAduan` varchar(255) NOT NULL,
  `alamatSyarikatAduan` varchar(225) NOT NULL,
  `posPekerjaAduan` varchar(225) NOT NULL,
  `negeriAduan` varchar(225) NOT NULL,
  `aduan` varchar(225) NOT NULL,
  `buktiAduan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kespa_aduan`
--

INSERT INTO `kespa_aduan` (`noSiriAduan`, `namaAduan`, `noTelAduan`, `emailAduan`, `syarikatAduan`, `alamatSyarikatAduan`, `posPekerjaAduan`, `negeriAduan`, `aduan`, `buktiAduan`) VALUES
(1, 'miu', '12323', 'fasffa@gmail.com', 'dfdfafs', 'sfasfaf', 'afsfafad', 'fasffadfda', 'affadfafadf', 'bukti_aduan/1752095455_Monster Hunter Rise 11_18_2024 11_23_59 PM.png');

-- --------------------------------------------------------

--
-- Table structure for table `kespa_user`
--

CREATE TABLE `kespa_user` (
  `userID` varchar(25) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kespa_user`
--

INSERT INTO `kespa_user` (`userID`, `userPassword`, `userName`) VALUES
('K01', '1234', 'Nazmi'),
('K02', '2468', 'miu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `ahli_kespa`
--
ALTER TABLE `ahli_kespa`
  ADD PRIMARY KEY (`noSiri`);

--
-- Indexes for table `kespa_aduan`
--
ALTER TABLE `kespa_aduan`
  ADD PRIMARY KEY (`noSiriAduan`);

--
-- Indexes for table `kespa_user`
--
ALTER TABLE `kespa_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahli_kespa`
--
ALTER TABLE `ahli_kespa`
  MODIFY `noSiri` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kespa_aduan`
--
ALTER TABLE `kespa_aduan`
  MODIFY `noSiriAduan` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
