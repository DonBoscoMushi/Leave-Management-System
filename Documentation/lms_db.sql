-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2021 at 11:44 PM
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
  `date_applied` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_req`
--

INSERT INTO `leave_req` (`id`, `email`, `leave_type`, `start_date`, `end_date`, `date_applied`, `status`) VALUES
(1, 'don@gmail.com', 'casual', '2021-02-04', '2021-02-10', '2021-02-02', 'pending'),
(5, 'user@lms', 'Casual', '2021-02-12', '2021-03-04', '2021-02-23', 'pending'),
(6, 'john@yahoo.cpom', 'Maternal', '2021-02-11', '2021-02-26', '2021-02-23', 'pending');

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
  `date_applied` date NOT NULL DEFAULT current_timestamp(),
  `leave_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `staff_id`, `leave_type`, `start_date`, `end_date`, `date_applied`, `leave_status`) VALUES
(1, 1, 'Casual', '2021-02-01', '2021-02-16', '2021-02-13', 'pending'),
(2, 2, 'Sick', '2021-02-17', '2021-02-15', '2021-02-13', 'pending'),
(4, 2, 'Rest', '2021-02-17', '2021-02-15', '2021-02-13', 'pending'),
(5, 2, 'Casual', '2021-02-19', '2021-02-19', '2021-02-23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `type`, `no_of_days`, `description`) VALUES
(1, 'Casual', 5467, 'Casual]'),
(2, 'Vacation', 7, 'A eave permission for a break at work'),
(3, 'Sick ', 5, 'Sick person'),
(4, 'Maternal', 5, 'About Hosp');

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
(10, 'don@gmail.com', 'DonBosco', 'Mushi', '074589654', 'male', 'Mushi', 'Admin', '2021-02-10 23:51:10'),
(16, 'deomushi@gmail.com', 'Deo', 'Mushi', '6554546', 'male', 'Mushi', 'Admin', '2021-02-13 13:20:41'),
(18, 'sam@gam.vcom', 'Sam', '456789', 'Mark', 'male', 'Mark', 'Staff', '2021-02-23 12:44:45'),
(19, 'john@yahoo.cpom', 'Sam ', '07666', 'John', 'male', 'John', 'Staff', '2021-02-23 13:44:08');

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
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
