-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 03:00 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panli_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `cycle_count`
--

CREATE TABLE `cycle_count` (
  `idcycle_count` int(11) NOT NULL,
  `part_case` varchar(100) NOT NULL,
  `location` varchar(75) NOT NULL,
  `qty` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outbound`
--

CREATE TABLE `outbound` (
  `idoutbound` int(11) NOT NULL,
  `part_number` varchar(100) NOT NULL,
  `qty` varchar(75) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `putaway`
--

CREATE TABLE `putaway` (
  `id` int(11) NOT NULL,
  `part_case` varchar(100) NOT NULL,
  `old_loc` varchar(75) NOT NULL,
  `new_loc` varchar(75) NOT NULL,
  `qty` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiving_kd`
--

CREATE TABLE `receiving_kd` (
  `id` int(11) NOT NULL,
  `case_no` varchar(100) NOT NULL,
  `location` varchar(75) NOT NULL,
  `create_by` varchar(45) NOT NULL,
  `update_by` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiving_local`
--

CREATE TABLE `receiving_local` (
  `idreceiving_local` int(11) NOT NULL,
  `part_number` varchar(50) NOT NULL,
  `qty` varchar(45) NOT NULL,
  `create_by` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cycle_count`
--
ALTER TABLE `cycle_count`
  ADD PRIMARY KEY (`idcycle_count`);

--
-- Indexes for table `outbound`
--
ALTER TABLE `outbound`
  ADD PRIMARY KEY (`idoutbound`);

--
-- Indexes for table `putaway`
--
ALTER TABLE `putaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiving_kd`
--
ALTER TABLE `receiving_kd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiving_local`
--
ALTER TABLE `receiving_local`
  ADD PRIMARY KEY (`idreceiving_local`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cycle_count`
--
ALTER TABLE `cycle_count`
  MODIFY `idcycle_count` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outbound`
--
ALTER TABLE `outbound`
  MODIFY `idoutbound` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `putaway`
--
ALTER TABLE `putaway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receiving_kd`
--
ALTER TABLE `receiving_kd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receiving_local`
--
ALTER TABLE `receiving_local`
  MODIFY `idreceiving_local` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
