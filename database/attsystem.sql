-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 07:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`, `email`, `fname`, `phone`, `type`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '', 'admin'),
(6, 'admin1', 'admin1', 'admin1@gmail.com', 'admin1', '1234509876', 'admin'),
(2, 'rajkumar', 'rajkumar', 'rajkumar69@gmail.com', 'ram', '', 'teacher'),
(3, 'ruthwik', 'ruthwik', 'ruthwik@gmail.com', 'ravi kumar', '', 'student'),
(4, 'saiteja', 'saiteja', 'teja@gmail.com', 'sai teja', '1234567890', 'student'),
(5, 'sathvik', 'sathvik', 'sathvik@gmail.com', 'sathvik chowdary', '0987654321', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `stat_id` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `st_status` varchar(10) NOT NULL,
  `stat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`stat_id`, `course`, `st_status`, `stat_date`) VALUES
('1', 'maths1', 'Present', '2021-04-30'),
('2', 'maths1', 'Present', '2021-04-30'),
('3', 'maths1', 'Present', '2021-04-30'),
('4', 'maths1', 'Present', '2021-04-30'),
('1', 'biology', 'Present', '2021-04-30'),
('2', 'biology', 'Present', '2021-04-30'),
('3', 'biology', 'Absent', '2021-04-30'),
('4', 'biology', 'Present', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `st_id` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `st_status` varchar(30) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_batch` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `st_batch` varchar(11) NOT NULL,
  `st_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_batch`, `st_email`) VALUES
('1', 'ruthwik', 'class1', 'ruthwik@gmail.com'),
('10', 'jaswanth', 'class2', 'jaswanth@gmail.com'),
('11', 'charan', 'class2', 'charan@gmail.com'),
('12', 'padmakar', 'class2', 'padmakar@gmail.com'),
('2', 'rajkumar', 'class1', 'rajkumar@gmail.com'),
('3', 'teja', 'class1', 'teja@gmail.com'),
('4', 'sathvik', 'class1', 'sathvik@gmail.com'),
('5', 'nitin', 'class2', 'nitin@gmail.com'),
('6', 'varun', 'class2', 'varum@gmail.com'),
('7', 'chamanth', 'class2', 'chamanth@gmail.com'),
('8', 'dinesh', 'class2', 'dinesh@gmail.com'),
('9', 'sudhanva', 'class2', 'sudhanva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tc_id` varchar(20) NOT NULL,
  `tc_name` varchar(20) NOT NULL,
  `tc_dept` varchar(30) NOT NULL,
  `tc_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tc_id`, `tc_name`, `tc_dept`, `tc_email`) VALUES
('1', 'rajkumar', 'maths', 'rajkumar@gmail.com'),
('2', 'sathvik', 'physics', 'sathvik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `stat_id` (`stat_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tc_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`stat_id`) REFERENCES `students` (`st_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
