-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2022 at 03:26 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ele` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `ele`, `active`) VALUES
('admin', 'Admin User', '1234', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `el_id` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `x` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`el_id`, `title`, `description`, `x`) VALUES
(1, 'president', '2020', 0),
(2, 'vice', '2020', 0),
(3, 'clg', '02-02-2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `id` int(255) NOT NULL,
  `nominee_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `Votes` int(100) NOT NULL,
  `ele` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`id`, `nominee_id`, `name`, `s1`, `s2`, `Votes`, `ele`) VALUES
(30, '6324a9b36cf04', 'hey', 'ismart', '01', 0, 2),
(28, '63249dff52cac', 'js', 'sat', '02', 0, 1),
(31, '638358a57f634', 'hii', 'hiii', '03', 1, 1),
(32, '63835ce37a0e2', 'ttp', 'jagan', '04', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `Full_Name` varchar(40) NOT NULL,
  `UserId` int(100) NOT NULL,
  `AdharNo` varchar(18) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`Full_Name`, `UserId`, `AdharNo`, `Phone`, `Gender`, `Password`, `Status`) VALUES
('shankar', 1, '123456789', 2147483647, 'Male', '1234', 1),
('sri', 2, '216173902273', 3366, 'Female', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD UNIQUE KEY `id` (`el_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD UNIQUE KEY `id` (`UserId`),
  ADD UNIQUE KEY `adhar` (`AdharNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
