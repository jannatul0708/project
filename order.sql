-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 11:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `O_ID` int(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`O_ID`, `Name`, `about`) VALUES
(22, 'logo', 'new logo'),
(23, 'logo', 'new logo for my company'),
(25, 'logo', 'new logo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`O_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `O_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
