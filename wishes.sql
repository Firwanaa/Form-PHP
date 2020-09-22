-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 05:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wishes`
--

-- --------------------------------------------------------

--
-- Table structure for table `wish2`
--

CREATE TABLE `wish2` (
  `wishid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `friendName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `friendEmail` varchar(50) NOT NULL,
  `wish` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish2`
--

INSERT INTO `wish2` (`wishid`, `name`, `friendName`, `email`, `friendEmail`, `wish`) VALUES
(6, 'Sea', 'River', 'Sea@water.ca', 'River@water.ca', 'To meet at the cloud'),
(8, 'Lake', 'iceeeeeeeeeeeeee', 'lake@water.ca', 'ice@water.ca', 'rain'),
(10, 'Waterdrop', 'Iceflake', 'dropit@water.ca', 'iceflakesqueen@water.ca', 'not to change status');

-- --------------------------------------------------------

--
-- Table structure for table `wishtable`
--

CREATE TABLE `wishtable` (
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `friendName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `friendEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wish` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wish2`
--
ALTER TABLE `wish2`
  ADD PRIMARY KEY (`wishid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wish2`
--
ALTER TABLE `wish2`
  MODIFY `wishid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
