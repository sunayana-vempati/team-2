-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 06:41 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'vsunayana97@gmail.com', ''),
(2, 'vsunayana97@gmail.com', ''),
(3, 'vsunayana97@gmail.com', ''),
(4, 'vsunayana97@gmail.com', ''),
(5, 'vsunayana97@gmail.com', ''),
(6, 'vsunayana97@gmail.com', ''),
(7, 'vsunayana97@gmail.com', '');

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
  `phoneno` varchar(20) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scribe`
--

INSERT INTO `scribe` (`id`, `name`, `email`, `password`, `gender`, `phoneno`, `qualification`, `languages`) VALUES
(6, '', 'vsunayana97@gmail.com', '123456', 'ma', '2147483647', NULL, NULL),
(7, '', 'nmsbdmn@gmail.com', 'wqfq', 'ma', '2147483647', NULL, NULL),
(8, '', 'vsunayana97@gmail.com', 'wef', 'ma', '2147483647', NULL, NULL),
(9, '', 'vsunayana97@gmail.com', 'ewf', 'ma', '2147483647', NULL, NULL),
(10, '', 'vsunayana97@gmail.com', 'wqff', 'ma', '2147483647', NULL, NULL),
(11, '', 'vsunayana97@gmail.com', 'wqff', 'ma', '2147483647', NULL, NULL),
(12, '', 'vsunayana97@gmail.com', 'dsxdv', 'ma', '2147483647', NULL, NULL),
(13, '', 'vsunayana97@gmail.com', 'sdwf', 'ma', '8801585066', NULL, NULL),
(14, '', 'nmsbdmn@gmail.com', 'jg', 'ma', '123', NULL, NULL),
(15, '', 'nmsbdmn@gmail.com', 'qwd', 'ma', '123', NULL, NULL),
(16, '', 'vsunayana97@gmail.com', 'asds', 'fe', '8801585066', NULL, NULL),
(17, '', 'vsunayana97@gmail.com', 'WEF', 'ma', '8801585066', NULL, NULL),
(18, '', 'nmsbdmn@gmail.com', 'asdf', 'ma', '8801585066', NULL, NULL),
(19, '', 'vsunayana97@gmail.com', 'wdwa', 'ma', '8801585066', NULL, NULL),
(20, '', 'vadalivaishnavi100@gmail.com', 'w3ed', 'ma', '8801585066', NULL, NULL),
(21, '', 'vsunayana97@gmail.com', 'ads', 'ma', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scribeup2`
--

CREATE TABLE `scribeup2` (
  `lang` varchar(50) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scribeup2`
--

INSERT INTO `scribeup2` (`lang`, `qual`, `email`, `address`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('english', 'Intermediate 1st year', 'bgb@gb', 'gbg'),
('', '', '', ''),
('english', 'Intermediate 1st year', 'vsubqqj@gmail.com', 'saroornagar'),
('', '', '', ''),
('english', 'SSC', 'vsubqqj@gmail.com', 'saroornagar'),
('', '', '', ''),
('english', 'Intermediate 1st year', 'vsunayana97@gmail.com', 'saroornagar'),
('', '', '', ''),
('', '', '', ''),
('', 'SSC', 'vadalivaishnavi@gmail.com', 'saroornagar'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('english', 'Intermediate 1st year', 'vsubqqj@gmail.com', 'saroornagar'),
('', '', '', ''),
('', '', '', ''),
('english', 'Intermediate 1st year', 'vsunayana97@gmail.com', 'saroornagar'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_update`
--

CREATE TABLE `student_update` (
  `id` int(11) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `qual` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_update`
--

INSERT INTO `student_update` (`id`, `lang`, `qual`, `exam`, `email`, `status`) VALUES
(3, 'english', 'SSC', 'saroornagar', '', '0'),
(5, 'english', 'Intermediate 1st year', 'saroornagar', '', '0'),
(7, 'english', 'SSC', 'saroornagar', 'vsubqqj@gmail.com', '0'),
(29, '', '', '', '', '0'),
(32, '', '', '', '', '0'),
(33, '', '', '', '', '0'),
(34, '', '', '', '', '0'),
(35, '', '', '', '', '0'),
(36, '', '', '', '', '0'),
(37, '', '', '', '', '0'),
(38, '', '', '', '', '0'),
(39, '', '', '', '', '0'),
(40, 'english', 'Intermediate 1st year', '', 'vsubqqj@gmail.com', '0'),
(41, 'english', 'Intermediate 1st year', 'saroornagar', 'vsunayana97@gmail.com', '0'),
(42, 'english', 'SSC', 'saroornagar', 'vadalivaishnavi@gmail.com', '0'),
(43, 'english', 'SSC', 'tarnaka', 'vadalivaishnavi@gmail.com', '0'),
(44, 'english', 'SSC', 'saroornagar', 'vsunayana97@gmail.com', '0'),
(45, 'english', 'Intermediate 1st year', 'saroornagar', 'vsunayana97@gmail.com', '0'),
(46, 'english', 'Intermediate 1st year', 'saroornagar', 'vsunayana97@gmail.com', '0'),
(47, '', NULL, NULL, '', '1'),
(48, 'english', 'SSC', 'vasdfsdf', 'vsunayana97@gmail.com', '0'),
(49, '', NULL, NULL, '', '1'),
(50, 'english', 'Intermediate 2nd year', 'fdfd', 'vadalivaishnavi@gmail.com', '1'),
(51, 'english', 'Intermediate 1st year', 'fdfd', 'vsunayana97@gmail.com', 'one'),
(52, 'english', 'SSC', 'fdfd', 'vsunayana97@gmail.com', 'one'),
(53, '', '', '', '', 'one'),
(54, 'english', 'SSC', 'fdfd', 'vsunayana97@gmail.com', 'one'),
(55, 'english', 'SSC', 'fdfd', 'vsubqqj@gmail.com', 'one');

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` (`id`, `name`, `email`, `password`, `gender`, `phoneno`) VALUES
(4, '', 'lukalapu.lokesh12@gmail.com', 'lokesh', 'male', 2147483647),
(5, '', 'lukalapu.lokesh@gmail.com', 'qwed', 'male', 123),
(6, '', 'vsunayana97@gmail.com', '123456', 'male', 2147483647),
(7, '', 'nmsbdmn@gmail.com', 'jg', 'male', 721617),
(8, '', 'vsunayana97@gmail.com', 'swda', 'male', 2147483647),
(9, '', 'vadalivaishnavi100@gmail.com', 'wd', 'male', 123),
(10, '', 'vsunayana97@gmail.com', 'ed2', 'male', 2147483647),
(11, '', 'vsunayana97@gmail.com', 'adasf', 'male', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scribe`
--
ALTER TABLE `scribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_update`
--
ALTER TABLE `student_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stureg`
--
ALTER TABLE `stureg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `scribe`
--
ALTER TABLE `scribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `student_update`
--
ALTER TABLE `student_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `stureg`
--
ALTER TABLE `stureg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
