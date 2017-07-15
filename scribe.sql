-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 05:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `scribe`
--

CREATE TABLE `scribe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `phoneno` int(15) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scribe`
--

INSERT INTO `scribe` (`id`, `name`, `email`, `password`, `gender`, `phoneno`, `qualification`, `languages`) VALUES
(1, '', '', '', '', 0, NULL, NULL),
(2, '', '', '', '', 0, NULL, NULL),
(3, '', '', '', '', 0, NULL, NULL),
(4, '', '', '', '', 0, NULL, NULL),
(5, '', '', '', '', 0, NULL, NULL),
(6, '', 'vsunayana97@gmail.com', 'wsfwef', 'ma', 2147483647, NULL, NULL),
(7, '', 'nmsbdmn@gmail.com', 'wqfq', 'ma', 2147483647, NULL, NULL),
(8, '', 'vsunayana97@gmail.com', 'wef', 'ma', 2147483647, NULL, NULL),
(9, '', 'vsunayana97@gmail.com', 'ewf', 'ma', 2147483647, NULL, NULL),
(10, '', 'vsunayana97@gmail.com', 'wqff', 'ma', 2147483647, NULL, NULL),
(11, '', 'vsunayana97@gmail.com', 'wqff', 'ma', 2147483647, NULL, NULL),
(12, '', 'vsunayana97@gmail.com', 'dsxdv', 'ma', 2147483647, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scribe`
--
ALTER TABLE `scribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scribe`
--
ALTER TABLE `scribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
