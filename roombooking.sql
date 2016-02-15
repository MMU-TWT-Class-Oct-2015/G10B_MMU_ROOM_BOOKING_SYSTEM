-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 07:12 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roombooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(111, 'Admin', 'd6b0ab7f1c8ab8f514db9a6d85de160a');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL,
  `date_of_book` date DEFAULT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `organizer` varchar(20) NOT NULL,
  `num_of_part` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `room_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `date_of_book`, `time_start`, `time_end`, `organizer`, `num_of_part`, `user_id`, `room_id`) VALUES
(15, '2016-10-05', '10:00:00', '10:00:00', '200plus', 100, 1132700578, 'MUMH0001');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` varchar(10) NOT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `room_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_capacity`) VALUES
('ACR0000', 'Lecture room', 100),
('ACR0001', 'Lecture Room', 100),
('ACR0002', 'Lecture Room', 200),
('ACR0003', 'Lecture Room', 100),
('ACR0004', 'Lecture Room', 100),
('ACR1001', 'Tutorial Room', 30),
('ACR1002', 'Tutorial Room', 30),
('ACR1003', 'Tutorial Room', 30),
('ACR1004', 'Tutorial Room', 30),
('ACR1005', 'Tutorial Room', 30),
('ACR1006', 'Tutorial Room', 30),
('CLC0001', 'Lecture Room', 200),
('CLC0002', 'Lecture Room', 200),
('CLC0003', 'Lecture Room', 200),
('CLC0004', 'Lecture Room', 200),
('CLC1002', 'Lecture Room', 100),
('CLC1003', 'Lecture Room', 100),
('CLC1004', 'Lecture Room', 100),
('CLC1005', 'Lecture Room', 100),
('CLC1006', 'Lecture Room', 100),
('CLC1007', 'Tutorial Room', 30),
('CLC1008', 'Tutorial Room', 30),
('CLC1009', 'Tutorial Room', 30),
('CLC1010', 'Tutorial Room', 30),
('FET0001', 'Lecture Room', 100),
('FET0002', 'Lecture Room', 100),
('FET0003', 'Lecture Room', 100),
('FET0004', 'Lecture Room', 100),
('FET0005', 'Lecture Room', 100),
('FET1001', 'Tutorial Room', 30),
('FET1002', 'Tutorial Room', 30),
('FET1003', 'Tutorial Room', 30),
('FET1004', 'Tutorial Room', 30),
('FET1005', 'Tutorial Room', 30),
('FET1006', 'Tutorial Room', 30),
('FSER0001', 'Lecture Room', 100),
('FSER0002', 'Lecture Room', 100),
('FSER0003', 'Lecture Room', 100),
('FSER0004', 'Lecture Room', 100),
('FSER1010', 'Lecture Room', 100),
('FSER1011', 'Lecture Room', 100),
('FSER1013', 'Tutorial Room', 30),
('FSER1014', 'Tutorial Room', 30),
('MUEH0001', 'Exam Hall', 100),
('MUMH0001', 'Main Hall', 100),
('MUMR0001', 'Meeting Room', 20),
('MUMR0002', 'Meeting Room', 20),
('MUMR0003', 'Meeting Room', 20),
('MUMR0004', 'Meeting Room', 20),
('MUMR0005', 'Meeting Room', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `membership_type` varchar(10) DEFAULT 'Student',
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `membership_type`, `user_phone`, `user_email`) VALUES
(10001, 'hugo', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Staff', '0178273320', 'hugo@hotmail.com'),
(1132700229, 'Chong', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Student', '012345678', 'chong@hotmail.com'),
(1132700578, 'BQ', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Student', '017834567', 'bq@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`), ADD KEY `user_id` (`user_id`), ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
