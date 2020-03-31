-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 03:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delegacje`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrahenci`
--

CREATE TABLE `kontrahenci` (
  `NIP` varchar(255) DEFAULT NULL,
  `REGON` int(11) NOT NULL,
  `NAZWA` varchar(255) DEFAULT NULL,
  `CZY_VAT` varchar(255) DEFAULT NULL,
  `ULICA` varchar(255) DEFAULT NULL,
  `NR_DOMU` varchar(255) DEFAULT NULL,
  `NR_MIESZKANIA` varchar(255) DEFAULT NULL,
  `DELETED` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrahenci`
--

INSERT INTO `kontrahenci` (`NIP`, `REGON`, `NAZWA`, `CZY_VAT`, `ULICA`, `NR_DOMU`, `NR_MIESZKANIA`, `DELETED`) VALUES
('test', 0, 'test', 'Tak', 'test', 'test', 'test', 1),
('test', 1000000000, 'test', 'Tak', 'test', 'test', 'test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontrahenci`
--
ALTER TABLE `kontrahenci`
  ADD PRIMARY KEY (`REGON`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
