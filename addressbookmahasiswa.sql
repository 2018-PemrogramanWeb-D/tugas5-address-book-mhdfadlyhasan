-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 09:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbookmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE `addressbook` (
  `no` int(32) NOT NULL,
  `Nama` varchar(1024) COLLATE ascii_bin NOT NULL,
  `Provinsi` varchar(1024) COLLATE ascii_bin NOT NULL,
  `Kota` varchar(1024) COLLATE ascii_bin NOT NULL,
  `Jalan` varchar(1024) COLLATE ascii_bin NOT NULL,
  `KodePos` int(11) NOT NULL,
  `NomorHP` varchar(1024) COLLATE ascii_bin DEFAULT NULL,
  `E-Mail` varchar(1024) COLLATE ascii_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`no`, `Nama`, `Provinsi`, `Kota`, `Jalan`, `KodePos`, `NomorHP`, `E-Mail`) VALUES
(1, 'fadly', 'sumut', 'february', 'Jl.Wisma Permai', 20182, '0812941', 'ikangorenterbang@gmail.com'),
(2, 'M.Fadly', 'Jawa Timar', 'Surabaya', 'Jl.Wisma Permai', 601115, '082166353357', 'm.fadlihasan@yahoo.co.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressbook`
--
ALTER TABLE `addressbook`
  MODIFY `no` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
