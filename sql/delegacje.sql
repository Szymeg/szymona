-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 08:41 PM
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
-- Table structure for table `delegacje`
--

CREATE TABLE `delegacje` (
  `Lp` int(11) NOT NULL,
  `Imie_i_Nazwisko` varchar(255) DEFAULT NULL,
  `Data_od` date DEFAULT NULL,
  `Data_do` date DEFAULT NULL,
  `Miejsce_wyjazdu` varchar(255) DEFAULT NULL,
  `Miejsce_przyjazdu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delegacje`
--

INSERT INTO `delegacje` (`Lp`, `Imie_i_Nazwisko`, `Data_od`, `Data_do`, `Miejsce_wyjazdu`, `Miejsce_przyjazdu`) VALUES
(1, 'Dominik Kot', '2020-01-01', '2020-01-05', 'Poznań', 'Wrocław'),
(2, 'Marek Kraj', '2020-01-01', '2020-01-05', 'Poznań', 'Wrocław'),
(3, 'Marta Witkowska', '2020-01-23', '2020-01-30', 'Poznań', 'Kraków'),
(4, 'Łukasz Zieliński', '2020-02-03', '2020-02-10', 'Poznań', 'Warszawa'),
(5, 'Michał Jaki', '2020-02-23', '2020-02-25', 'Poznań', 'Warszawa'),
(6, 'Paweł Musiał', '2020-03-05', '2020-03-08', 'Poznań', 'Wrocław');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delegacje`
--
ALTER TABLE `delegacje`
  ADD PRIMARY KEY (`Lp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
