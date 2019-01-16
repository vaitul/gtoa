-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2019 at 08:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(3) NOT NULL,
  `description` longtext COLLATE utf8_bin NOT NULL,
  `time` float NOT NULL DEFAULT '0',
  `result` float NOT NULL DEFAULT '0',
  `wasted_in` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `CS`
--

CREATE TABLE `CS` (
  `id` int(3) NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `time` float NOT NULL DEFAULT '0',
  `result` float NOT NULL DEFAULT '0',
  `wasted_in` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` bigint(3) NOT NULL,
  `date` date DEFAULT NULL,
  `total_avg_time` float NOT NULL DEFAULT '0',
  `avg_result` int(3) DEFAULT '0',
  `flag` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `IT`
--

CREATE TABLE `IT` (
  `id` int(3) NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `time` float NOT NULL DEFAULT '0',
  `result` float NOT NULL DEFAULT '0',
  `wasted_in` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `wasted_labels`
--

CREATE TABLE `wasted_labels` (
  `id` bigint(3) NOT NULL,
  `wasted_label` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `count` bigint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CS`
--
ALTER TABLE `CS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IT`
--
ALTER TABLE `IT`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wasted_labels`
--
ALTER TABLE `wasted_labels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CS`
--
ALTER TABLE `CS`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `IT`
--
ALTER TABLE `IT`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wasted_labels`
--
ALTER TABLE `wasted_labels`
  MODIFY `id` bigint(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
