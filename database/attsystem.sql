-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 05:27 AM
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
(0, 'eren', '1234', 'Eren01@gmail.com', 'Eren Yeager', '7908730032', 'student'),
(0, 'naruto', '123', 'narutouzu@gmail.com', 'Naruto Uzumaki', '', 'student'),
(4, 'raj', '123', 'raj@gmail.com', 'basava', '9876543221', 'student'),
(2, 'rajkumar', '123', 'rajkumar69@gmail.com', 'ram', '', 'teacher'),
(3, 'ruthwik', '123', 'ruthwik@gmail.com', 'ravi kumar', '', 'student');

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
('0001', 'maths1', 'Absent', '2021-05-10'),
('0002', 'maths1', 'Present', '2021-05-10'),
('0003', 'maths1', 'Present', '2021-05-10'),
('0004', 'maths1', 'Present', '2021-05-10'),
('0001', 'maths2', 'Present', '2021-05-10'),
('0002', 'maths2', 'Absent', '2021-05-10'),
('0003', 'maths2', 'Present', '2021-05-10'),
('0004', 'maths2', 'Present', '2021-05-10'),
('0001', 'physics', 'Present', '2021-05-10'),
('0002', 'physics', 'Present', '2021-05-10'),
('0003', 'physics', 'Absent', '2021-05-10'),
('0004', 'physics', 'Present', '2021-05-10'),
('0001', 'physicslab', 'Present', '2021-05-10'),
('0002', 'physicslab', 'Present', '2021-05-10'),
('0003', 'physicslab', 'Present', '2021-05-10'),
('0004', 'physicslab', 'Present', '2021-05-10'),
('0001', 'maths1', 'Present', '2021-05-10'),
('0002', 'maths1', 'Present', '2021-05-10'),
('0003', 'maths1', 'Present', '2021-05-10'),
('0004', 'maths1', 'Present', '2021-05-10'),
('1001', 'maths1', 'Absent', '2021-05-10'),
('1002', 'maths1', 'Present', '2021-05-10'),
('1003', 'maths1', 'Present', '2021-05-10'),
('1004', 'maths1', 'Present', '2021-05-10'),
('1001', 'maths2', 'Present', '2021-05-10'),
('1002', 'maths2', 'Present', '2021-05-10'),
('1003', 'maths2', 'Absent', '2021-05-10'),
('1004', 'maths2', 'Present', '2021-05-10'),
('1001', 'biology', 'Present', '2021-05-10'),
('1002', 'biology', 'Absent', '2021-05-10'),
('1003', 'biology', 'Present', '2021-05-10'),
('1004', 'biology', 'Present', '2021-05-10'),
('1001', 'softskills', 'Present', '2021-05-10'),
('1002', 'softskills', 'Present', '2021-05-10'),
('1003', 'softskills', 'Absent', '2021-05-10'),
('1004', 'softskills', 'Present', '2021-05-10'),
('9001', 'maths1', 'Absent', '2021-05-11'),
('9002', 'maths1', 'Present', '2021-05-11'),
('7001', 'chemistry', 'Absent', '2021-05-11'),
('7002', 'chemistry', 'Present', '2021-05-11'),
('0001', 'softskills', 'Present', '2021-05-11'),
('0002', 'softskills', 'Absent', '2021-05-11'),
('0003', 'softskills', 'Absent', '2021-05-11'),
('0004', 'softskills', 'Present', '2021-05-11'),
('1001', 'english', 'Absent', '2021-05-11'),
('1002', 'english', 'Present', '2021-05-11'),
('1003', 'english', 'Absent', '2021-05-11'),
('1004', 'english', 'Present', '2021-05-11');

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
('0001', 'Eren Yeager', 'Class1', 'Eren01@gmail.com'),
('0002', 'Mikasa Ackerman', 'Class1', 'mikasaackerman@gmail.com'),
('0003', 'Armen R', 'Class1', 'armenr@gmail.com'),
('0004', 'Levi Ackerman', 'Class1', 'leviackerman@gmail.com'),
('1001', 'Naruto Uzumaki', 'Class2', 'narutouzu@gmail.com'),
('1002', 'Sasuke Uchiha', 'Class2', 'sasukeuch@gmail.com'),
('1003', 'Sakura ', 'Class2', 'sakura01@gmail.com'),
('1004', 'Rock Lee', 'Class2', 'rocklee@gmail.com'),
('2001', 'Eno ', 'Class3', 'eno@gmail.com'),
('2002', 'Shikamaru', 'Class3', 'shikamaru@gmail.com'),
('2003', 'Chochi', 'Class3', 'chochi@gmail.com'),
('2004', 'Idate moreno', 'Class3', 'Idaterunner@gmail.com'),
('3001', 'Erwin ', 'Class4', 'erwin@gmail.com'),
('3002', 'Hanjee', 'Class4', 'hanjee@gmail.com'),
('4001', 'Akamaru', 'Class5', 'akamaru@gmail.com'),
('4002', 'Kiba', 'Class5', 'kiba01@gmai.com'),
('5001', 'Jughead Jones', 'Class6', 'jugjones@gmail.com'),
('5002', 'Archie Andrews', 'Class6', 'archiea@gmail.com'),
('6001', 'Betty Cooper', 'Class7', 'bettyc@gmail.com'),
('6002', 'Cheryl Blossom', 'Class7', 'cherylred@gmail.com'),
('7001', 'Kakashi ', 'Class8', 'kakashichidori@gmail.com'),
('7002', 'Guy', 'Class8', 'guy@gmail.com'),
('9001', 'Hitaichi', 'Class10', 'hitaichi@gmail.com'),
('9002', 'Orochimaru', 'Class10', 'orochimaru@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tc_id` varchar(20) NOT NULL,
  `tc_name` varchar(20) NOT NULL,
  `tc_dept` varchar(20) NOT NULL,
  `tc_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tc_id`, `tc_name`, `tc_dept`, `tc_email`) VALUES
('01', 'Ruthwik ', 'Maths1', 'ruthwik3b@gmail.com');

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
