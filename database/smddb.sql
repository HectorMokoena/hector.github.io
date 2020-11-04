-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 01:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dateofbirth` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `animal` varchar(30) DEFAULT NULL,
  `carmake` varchar(30) DEFAULT NULL,
  `registration` varchar(30) DEFAULT NULL,
  `carcolour` varchar(30) DEFAULT NULL,
  `engine` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`name`, `email`, `phone`, `dateofbirth`, `gender`, `nationality`, `animal`, `carmake`, `registration`, `carcolour`, `engine`) VALUES
('Hector Mokoena', 'pr@gmail.com', '0846848237', '1996-20-20', 'Female', 'South Africa', 'Bird', 'AUDI', '44444', 'dddd', '33333'),
('Hector Mokoena', 'promokoena@gmail.com', '0846848238', 'NULL', 'NULL', 'NULL', 'NULL', 'BMW', 'USDJPY GP', 'RED', 'VI54654M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
