-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 02:00 PM
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
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_req`
--

CREATE TABLE `leave_req` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_applied` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_req`
--

INSERT INTO `leave_req` (`id`, `email`, `leave_type`, `start_date`, `end_date`, `date_applied`, `status`) VALUES
(1, 'don@gmail.com', 'casual', '2021-02-04', '2021-02-10', '2021-02-02', 'pending'),
(2, 'asd@salkd.cjna', 'nmechoka', '2021-02-17', '2021-02-26', '2021-02-21', 'approved'),
(3, 'don@yahoo.com', 'maternal', '2021-02-04', '2021-02-10', '2021-02-02', 'pending'),
(4, 'essa@lms.cjna', 'nmechoka', '2021-02-17', '2021-02-26', '2021-02-21', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_applied` date NOT NULL,
  `leave_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `staff_id`, `leave_type`, `start_date`, `end_date`, `date_applied`, `leave_status`) VALUES
(1, 1, 'Casual', '2021-02-01', '2021-02-16', '2021-02-13', 'pending'),
(2, 2, 'Sick', '2021-02-17', '2021-02-15', '2021-02-13', 'pending'),
(3, 1, 'Maamuzi', '2021-02-01', '2021-02-16', '2021-02-13', 'pending'),
(4, 2, 'Rest', '2021-02-17', '2021-02-15', '2021-02-13', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `firstname`, `lastname`, `phone`, `gender`, `password`, `role`, `created_at`) VALUES
(1, 'admin@lms', 'Super', 'Admin', '0745000000', 'male', 'admin', 'Admin', '2021-02-09 00:53:20'),
(2, 'user@lms', 'Super', 'User', '0745203152', 'male', 'user', 'Staff', '2021-02-09 00:56:07'),
(3, 'vuiwhv@bvws.aeb', 'adfdoinq', 'ovnsl', '02516545', 'male', 'ovnsl', 'vnkwnv', '2021-02-09 18:47:46'),
(4, 'dflk@dmdmf.fdsfs', 'dds', 'ffdf', '-84646', 'female', 'ffdf', 'lkf', '2021-02-09 18:51:05'),
(6, 'aosb@iquv.akevb', 's ub', 'as bl', '+544515', 'male', 'as bl', 'jabkdf', '2021-02-09 18:56:27'),
(10, 'don@gmail.com', 'DonBosco', 'Mushi', '074589654', 'male', 'Mushi', 'Admin', '2021-02-10 23:51:10'),
(11, 'don@gmail', 'Don', 'don', '651546', 'male', 'don', 'Staff', '2021-02-10 23:56:40'),
(12, 'yuf@hg.hk', 'yugq', 'jhhy', '+8646', 'male', 'jhhy', 'yf', '2021-02-13 01:37:37'),
(13, 'ghvyuf@hg.hk', 'ytfuf', 'tfhf', '656464', 'female', 'tfhf', 'yufuf', '2021-02-13 01:37:54'),
(14, 'pppyuf@hg.hk', 'p-0i', 'eres`1', '45546', 'male', 'eres`1', 'tytf', '2021-02-13 01:38:09'),
(15, 'cyuf@hg.hk', 'iukgtf1', 'dxdf', '86546846', '', 'dxdf', 'pojlk', '2021-02-13 01:38:23'),
(16, 'deomushi@gmail.com', 'Deo', 'Mushi', '6554546', 'male', 'Mushi', 'Admin', '2021-02-13 13:20:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_req`
--
ALTER TABLE `leave_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_req`
--
ALTER TABLE `leave_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
