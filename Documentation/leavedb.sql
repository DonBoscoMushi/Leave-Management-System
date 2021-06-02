-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2021 at 11:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPID` int(11) NOT NULL,
  `COMPANY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPID`, `COMPANY`) VALUES
(2, 'BAYON'),
(4, 'SOA'),
(5, 'MOLY');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepts`
--

CREATE TABLE `tbldepts` (
  `DEPTID` int(11) NOT NULL,
  `DEPTNAME` text NOT NULL,
  `DEPTSHORTNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepts`
--

INSERT INTO `tbldepts` (`DEPTID`, `DEPTNAME`, `DEPTSHORTNAME`) VALUES
(1, 'IT DEPARTMENTS', 'IT'),
(2, 'HR DEPARTMENT', 'HR'),
(3, 'TECHNICAL DEPARTMENT', 'TD'),
(4, 'FINANCE DEPARTMENT', 'FD'),
(5, 'SALES & MARKETING DEPARTMENT', 'SMD');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `EMPID` int(11) NOT NULL,
  `EMPNAME` varchar(60) NOT NULL,
  `EMPPOSITION` varchar(30) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWRD` text NOT NULL,
  `ACCSTATUS` varchar(5) NOT NULL DEFAULT 'NO',
  `EMPSEX` varchar(10) CHARACTER SET macce COLLATE macce_bin NOT NULL DEFAULT 'MALE',
  `COMPANY` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(30) NOT NULL,
  `EMPLOYID` varchar(30) NOT NULL,
  `AVELEAVE` int(11) NOT NULL DEFAULT 18
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblleave`
--

CREATE TABLE `tblleave` (
  `LEAVEID` int(11) NOT NULL,
  `EMPLOYID` varchar(30) NOT NULL,
  `DATESTART` date NOT NULL,
  `DATEEND` date NOT NULL,
  `NODAYS` double NOT NULL,
  `SHIFTTIME` varchar(10) NOT NULL,
  `TYPEOFLEAVE` varchar(30) NOT NULL,
  `REASON` text NOT NULL,
  `LEAVESTATUS` varchar(30) NOT NULL,
  `ADMINREMARKS` text NOT NULL,
  `DATEPOSTED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleave`
--

INSERT INTO `tblleave` (`LEAVEID`, `EMPLOYID`, `DATESTART`, `DATEEND`, `NODAYS`, `SHIFTTIME`, `TYPEOFLEAVE`, `REASON`, `LEAVESTATUS`, `ADMINREMARKS`, `DATEPOSTED`) VALUES
(1, '10890', '2019-02-21', '2019-02-21', 1, 'All Day', 'CASUAL LEAVE', 'All day it meant one day.', 'PENDING', 'N/A', '2019-02-16'),
(2, '10890', '2019-02-23', '2019-02-23', 0.5, 'AM', 'SICK LEAVE', 'A haft of day.', 'PENDING', 'N/A', '2019-02-16'),
(3, '10890', '2019-02-26', '2019-02-28', 3, 'All Day', 'CASUAL LEAVE', 'Three Days', 'PENDING', 'N/A', '2019-02-16'),
(4, '10888', '2019-02-19', '2019-02-19', 1, 'All Day', 'SICK LEAVE', 'A day leave', 'PENDING', 'N/A', '2019-02-16'),
(5, '10888', '2019-02-20', '2019-02-20', 0.5, 'PM', 'SICK LEAVE', 'A haft of day', 'PENDING', 'N/A', '2019-02-16'),
(6, '3012', '2019-02-18', '2019-02-18', 1, 'All Day', 'SICK LEAVE', 'Same', 'APPROVED', 'N/A', '2019-02-18'),
(7, '3011', '2019-02-18', '2019-02-18', 1, 'All Day', 'SICK LEAVE', 'Lucy', 'PENDING', 'N/A', '2019-02-17'),
(8, '3012', '2019-02-19', '2019-02-19', 1, 'All Day', 'SICK LEAVE', 'Bora', 'REJECTED', 'N/A', '2019-02-18'),
(9, '10888', '2019-02-20', '2019-02-20', 1, 'All Day', 'SICK LEAVE', 'Sokmeng', 'PENDING', 'N/A', '2019-02-17'),
(10, '555', '2019-02-26', '2019-02-28', 3, 'All Day', '', 'sick leave', 'APPROVED', 'N/A', '2019-02-26'),
(11, '555', '2019-03-01', '2019-03-02', 1, 'AM', 'CASUAL LEAVE', 'casual', 'APPROVED', 'N/A', '2019-02-26'),
(12, '555', '2019-03-12', '2019-03-16', 5, 'All Day', 'CASUAL LEAVE', 'cad', 'REJECTED', 'N/A', '2019-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `LEAVTID` int(11) NOT NULL,
  `LEAVETYPE` varchar(30) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`LEAVTID`, `LEAVETYPE`, `DESCRIPTION`) VALUES
(1, 'SICK LEAVE', 'SICK LEAVE'),
(2, 'CASUAL LEAVE', 'CASUAL LEAVE'),
(3, 'UNPAID LEAVE', 'UNPAID LEAVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPID`);

--
-- Indexes for table `tbldepts`
--
ALTER TABLE `tbldepts`
  ADD PRIMARY KEY (`DEPTID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`EMPID`);

--
-- Indexes for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD PRIMARY KEY (`LEAVEID`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`LEAVTID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldepts`
--
ALTER TABLE `tbldepts`
  MODIFY `DEPTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `EMPID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblleave`
--
ALTER TABLE `tblleave`
  MODIFY `LEAVEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `LEAVTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
