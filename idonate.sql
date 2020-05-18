-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 02:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idonate`
--

-- --------------------------------------------------------

--
-- Table structure for table `crowdsource`
--

CREATE TABLE `crowdsource` (
  `id` int(11) NOT NULL,
  `uid` int(22) NOT NULL,
  `specs` varchar(44) NOT NULL,
  `quantity` varchar(44) NOT NULL,
  `organisations` varchar(222) NOT NULL,
  `dropoff` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `uid` int(22) NOT NULL,
  `specs` varchar(44) NOT NULL,
  `quantity` varchar(44) NOT NULL,
  `individuals` varchar(222) NOT NULL,
  `dropoff` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `bday` date NOT NULL,
  `phone` int(22) NOT NULL,
  `pass` varchar(222) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(22) NOT NULL DEFAULT 'active',
  `utype` varchar(22) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `gender`, `bday`, `phone`, `pass`, `joindate`, `status`, `utype`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'male', '2020-04-01', 1234567, '21232f297a57a5a743894a0e4a801fc3', '2020-04-06 21:41:20', 'active', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crowdsource`
--
ALTER TABLE `crowdsource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crowdsource`
--
ALTER TABLE `crowdsource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
