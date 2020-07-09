-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2020 at 06:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okoagirls`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditTrail`
--

CREATE TABLE `auditTrail` (
  `trailid` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donationfrom` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) NOT NULL,
  `emailfrom` varchar(50) NOT NULL,
  `emailto` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sentdate` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financerequests`
--

CREATE TABLE `financerequests` (
  `id` int(20) NOT NULL,
  `requester` varchar(20) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `requestedamount` varchar(20) NOT NULL,
  `reqdate` varchar(40) NOT NULL,
  `grantedamount` varchar(20) DEFAULT NULL,
  `grantdate` varchar(40) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogindetails`
--

CREATE TABLE `userlogindetails` (
  `userid` int(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogindetails`
--

INSERT INTO `userlogindetails` (`userid`, `useremail`, `firstname`, `lastname`, `password`, `usertype`, `image`) VALUES
(1, 'admin@gmail.com', 'System', 'Administrator', '$2y$10$b.Xzk9MlkaAgXBmvUmJXQeGhZZw/NY5o5/G6GC9sxsUxm16EOoQwa', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditTrail`
--
ALTER TABLE `auditTrail`
  ADD PRIMARY KEY (`trailid`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financerequests`
--
ALTER TABLE `financerequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditTrail`
--
ALTER TABLE `auditTrail`
  MODIFY `trailid` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `financerequests`
--
ALTER TABLE `financerequests`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlogindetails`
--
ALTER TABLE `userlogindetails`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
