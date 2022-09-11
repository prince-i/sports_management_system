-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 03:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_equipments`
--

CREATE TABLE `borrowed_equipments` (
  `id` int(50) NOT NULL,
  `equipment` varchar(255) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `borrowed_date` varchar(20) DEFAULT NULL,
  `time_from` varchar(20) DEFAULT NULL,
  `time_to` varchar(20) DEFAULT NULL,
  `facility` varchar(20) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `borrow_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_equipments`
--

INSERT INTO `borrowed_equipments` (`id`, `equipment`, `quantity`, `id_number`, `borrowed_date`, `time_from`, `time_to`, `facility`, `purpose`, `borrow_code`) VALUES
(1, 'sample', '1', 'requester', '2022-09-08', '11:48', '11:50', 'sample', 'asd', 'BC:22090811303'),
(2, 'sample', '1', 'requester', '2022-09-08', '11:48', '11:50', 'sample', 'asd', 'BC:22090811303'),
(3, 'sample2', '1', 'requester', '2022-09-08', '11:48', '11:50', 'sample', 'asd', 'BC:22090811303'),
(4, 'sample2', '1', 'requester', '2022-09-08', '11:48', '11:50', 'sample', 'asd', 'BC:22090811303'),
(5, 'sample', '1', 'try', '2022-09-08', '15:38', '15:40', 'sample', 'sample', 'BC:22090841610'),
(6, 'sample', '1', 'try', '2022-09-08', '15:38', '15:40', 'sample', 'sample', 'BC:22090841610'),
(7, 'sample', '1', 'try', '2022-09-08', '15:38', '15:40', 'sample', 'sample', 'BC:22090841610'),
(8, 'sample', '1', 'try', '2022-09-08', '16:28', '16:30', 'sample2', 'sample3', 'BC:22090848641'),
(9, 'sample', '1', 'try', '2022-09-08', '16:28', '16:30', 'sample2', 'sample3', 'BC:22090848641'),
(10, 'volleyball net', '1', 'requester', '2022-09-10', '07:11', '09:14', 'sample2', 'training', 'BC:22090937158'),
(11, 'volleyball net', '1', 'requester', '2022-09-10', '07:11', '09:14', 'sample2', 'training', 'BC:22090937158'),
(12, 'd', '1', 'requester', '2022-09-10', '07:11', '09:14', 'sample2', 'training', 'BC:22090937158');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_list`
--

CREATE TABLE `borrow_list` (
  `id` int(50) NOT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `borrowed_date` varchar(20) DEFAULT NULL,
  `time_from` varchar(20) DEFAULT NULL,
  `time_to` varchar(20) DEFAULT NULL,
  `returned_date` varchar(20) DEFAULT NULL,
  `returned_time` varchar(255) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `borrowing_code` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_list`
--

INSERT INTO `borrow_list` (`id`, `id_number`, `name`, `borrowed_date`, `time_from`, `time_to`, `returned_date`, `returned_time`, `facility`, `purpose`, `borrowing_code`, `status`) VALUES
(1, 'requester', 'jj', '2022-09-08', '11:48', '11:50', '2022-09-08', '11:48', 'sample', 'asd', 'BC:22090811303', 'Approved'),
(2, 'try', 'try', '2022-09-08', '15:38', '15:40', '2022-09-08', '15:43', 'sample', 'sample', 'BC:22090841610', 'Dis-Approved'),
(3, 'try', 'try', '2022-09-08', '16:28', '16:30', '2022-09-08', '16:28', 'sample2', 'sample3', 'BC:22090848641', 'Returned'),
(4, 'requester', 'jj', '2022-09-10', '07:11', '09:14', '2022-09-09', '10:16', 'sample2', 'training', 'BC:22090937158', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(50) NOT NULL,
  `equipment_name` varchar(100) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL,
  `date_updated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `equipment_name`, `quantity`, `status`, `date_created`, `date_updated`) VALUES
(1, 'volleyball net', '10', 'Available', '2022-09-09', '2022-09-09'),
(2, 'b', '2', 'Available', '2022-09-09', NULL),
(3, 'c', '3', 'Available', '2022-09-09', NULL),
(4, 'd', '4', 'Available', '2022-09-09', NULL),
(5, 'e', '5', 'Available', '2022-09-09', NULL),
(6, 'f', '6', 'Available', '2022-09-09', NULL),
(7, 'g', '7', 'Available', '2022-09-09', NULL),
(8, 'h', '8', 'Available', '2022-09-09', NULL),
(9, 'i', '9', 'Available', '2022-09-09', NULL),
(10, 'j', '10', 'Available', '2022-09-09', NULL),
(11, 'k', '11', 'Available', '2022-09-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(50) NOT NULL,
  `facility` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL,
  `date_updated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility`, `status`, `date_created`, `date_updated`) VALUES
(1, 'sample', 'Not_Available', '2022-09-06', '2022-09-08'),
(2, 'sample2', 'Available', '2022-09-06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prospect_player_records`
--

CREATE TABLE `prospect_player_records` (
  `id` int(50) NOT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `height` varchar(10) DEFAULT NULL,
  `sports_playing` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `medical_conditions` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(100) DEFAULT NULL,
  `contact_person_contact_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prospect_player_records`
--

INSERT INTO `prospect_player_records` (`id`, `id_number`, `age`, `weight`, `gender`, `height`, `sports_playing`, `position`, `medical_conditions`, `injury`, `contact_no`, `address`, `contact_person_name`, `contact_person_contact_no`) VALUES
(1, '21-07087', '25', '60', 'Male', '5,7', 'basketball', 'point guard', 'n/a', 'n/a', '09999999999', 'sample', 'sample', '09999999999'),
(2, '21-07088', '21', '1', 'Male', '1', 'a', 'a', 'a', 'a', '12312312312', 'as', 'asdasd', '12312312312');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `yr_section` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `permission` int(1) NOT NULL COMMENT '1=authorized 0=unauthorized'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `Name`, `course`, `yr_section`, `id_number`, `email`, `password`, `role`, `permission`) VALUES
(1, 'jj', 'bsit', '4th', '21-07087', 'admin@mail.com', 'admin', 'admin', 1),
(2, 'jj', 'bsit', '4th', 'requester', 'req@mail.com', 'admin', 'requester', 1),
(4, 'try', 'try', 'try', 'try', 'try@mail.com', 'admin', 'requester', 0),
(5, 'a', 'a', 'a', 'as', 'a', 'a', 'requester', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowed_equipments`
--
ALTER TABLE `borrowed_equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_list`
--
ALTER TABLE `borrow_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_player_records`
--
ALTER TABLE `prospect_player_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowed_equipments`
--
ALTER TABLE `borrowed_equipments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrow_list`
--
ALTER TABLE `borrow_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prospect_player_records`
--
ALTER TABLE `prospect_player_records`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
