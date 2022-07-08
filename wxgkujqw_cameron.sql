-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 09:55 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wxgkujqw_cameron`
--

-- --------------------------------------------------------

--
-- Table structure for table `regiment`
--

CREATE TABLE `regiment` (
  `reg_id` int(11) NOT NULL DEFAULT '0',
  `l_name` varchar(20) NOT NULL DEFAULT '',
  `f_name` varchar(20) NOT NULL DEFAULT '',
  `rank` varchar(20) NOT NULL DEFAULT '',
  `position` varchar(20) NOT NULL DEFAULT '',
  `medal` varchar(20) NOT NULL DEFAULT '',
  `room` varchar(20) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiment`
--

INSERT INTO `regiment` (`reg_id`, `l_name`, `f_name`, `rank`, `position`, `medal`, `room`, `phone`) VALUES
(1, 'Prince Philip', '', 'His Royal Highness,', 'Colonel-in-Chief', 'Duke of Edinburgh, K', '', ''),
(2, 'Burns', 'Jim', 'Colonel', 'Honorary Colonel', 'OC, CD', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regiment`
--
ALTER TABLE `regiment`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`),
  ADD UNIQUE KEY `reg_id_2` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
