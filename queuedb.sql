-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 02:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queuedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `store`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'hubmart'),
(2, 'admin1', 'admin', 'admin1@admin.com', 'spar'),
(3, 'admin2', 'admin', 'admin2@admin.com', 'shoprite'),
(4, 'admin3', 'admin', 'admin3@admin.com', 'supersaver');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` text NOT NULL,
  `tel` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hubmart`
--

CREATE TABLE `hubmart` (
  `id` int(11) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `time` varchar(5) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubmart`
--

INSERT INTO `hubmart` (`id`, `uniquecode`, `mail`, `time`, `date`) VALUES
(1, '#5ec2a775261f2', 'adesinak4@gmail.com', '12:00', '2020-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `shoprite`
--

CREATE TABLE `shoprite` (
  `id` int(11) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `time` varchar(5) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoprite`
--

INSERT INTO `shoprite` (`id`, `uniquecode`, `mail`, `time`, `date`) VALUES
(1, '#5ec4fd829aaec', 'adesinak4@gmail.com', '12:00', '2020-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `spar`
--

CREATE TABLE `spar` (
  `id` int(11) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `time` varchar(5) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supersaver`
--

CREATE TABLE `supersaver` (
  `id` int(11) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `time` varchar(5) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supersaver`
--

INSERT INTO `supersaver` (`id`, `uniquecode`, `mail`, `time`, `date`) VALUES
(1, '#5ec2a82f3f62e', '', '12:30', '2020-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubmart`
--
ALTER TABLE `hubmart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoprite`
--
ALTER TABLE `shoprite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spar`
--
ALTER TABLE `spar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supersaver`
--
ALTER TABLE `supersaver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hubmart`
--
ALTER TABLE `hubmart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoprite`
--
ALTER TABLE `shoprite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spar`
--
ALTER TABLE `spar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supersaver`
--
ALTER TABLE `supersaver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
