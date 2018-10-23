-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 04:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registered_vehicles`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_total`
--

CREATE TABLE `tbl_total` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `total` int(50) NOT NULL,
  `rate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_total`
--

INSERT INTO `tbl_total` (`id`, `year`, `total`, `rate`) VALUES
(1, '2013', 7690038, 27),
(2, '2012', 7463393, 26),
(3, '2011', 7138942, 25),
(4, '2010', 6634855, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_use`
--

CREATE TABLE `tbl_vehicle_use` (
  `year` int(50) NOT NULL,
  `private` int(50) NOT NULL,
  `for_hire` int(50) NOT NULL,
  `government` int(50) NOT NULL,
  `diplomatic` int(50) NOT NULL,
  `tax_exempt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vehicle_use`
--

INSERT INTO `tbl_vehicle_use` (`year`, `private`, `for_hire`, `government`, `diplomatic`, `tax_exempt`) VALUES
(2013, 6673815, 940073, 72259, 3376, 515),
(2012, 6417809, 969784, 72204, 3060, 536),
(2011, 6096423, 970946, 67324, 3597, 652),
(2010, 5631377, 934176, 65060, 3591, 651),
(2017, 2147483647, 1231231231, 12312312, 12312312, 2147483647),
(2016, 800, 500, 200, 700, 400),
(2005, 800000, 899000, 667788725, 123199900, 123888),
(2001, 8000000, 890000, 900002, 98990, 9000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_total`
--
ALTER TABLE `tbl_total`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_total`
--
ALTER TABLE `tbl_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
