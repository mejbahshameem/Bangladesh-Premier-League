-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 07:40 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `sis_class`
--

CREATE TABLE IF NOT EXISTS `sis_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_class`
--

INSERT INTO `sis_class` (`class_id`, `class_name`, `capacity`) VALUES
(2, '5', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sis_resourse`
--

CREATE TABLE IF NOT EXISTS `sis_resourse` (
  `r_id` int(11) NOT NULL,
  `r_type` varchar(100) NOT NULL,
  `r_link` varchar(100) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sis_student`
--

CREATE TABLE IF NOT EXISTS `sis_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `cantact` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_student`
--

INSERT INTO `sis_student` (`student_id`, `student_name`, `roll`, `cantact`, `class_id`) VALUES
(1, 'Sabbir', 2, '1111', 6),
(2, 'Ali', 2, '1111', 7),
(10, 'Sagor', 1, '1111', 7);

-- --------------------------------------------------------

--
-- Table structure for table `sis_studentsubject`
--

CREATE TABLE IF NOT EXISTS `sis_studentsubject` (
  `student_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sis_subject`
--

CREATE TABLE IF NOT EXISTS `sis_subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_subject`
--

INSERT INTO `sis_subject` (`sub_id`, `sub_name`, `r_id`) VALUES
(1, 'bangla', 5),
(2, 'english', 6),
(3, 'math', 7),
(5, 'IT', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sis_teacher`
--

CREATE TABLE IF NOT EXISTS `sis_teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(80) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_qualification` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_teacher`
--

INSERT INTO `sis_teacher` (`t_id`, `t_name`, `t_address`, `t_qualification`) VALUES
(5, 'Mofijur', 'Dhanmondi', 'Bangla'),
(8, 'Farid', 'Panthopoth', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `sis_teachersubject`
--

CREATE TABLE IF NOT EXISTS `sis_teachersubject` (
  `t_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_teachersubject`
--

INSERT INTO `sis_teachersubject` (`t_id`, `sub_id`, `class_id`) VALUES
(5, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `mobile`, `password`, `gender`) VALUES
(1, 'Shahinuzzaman', 'Sabuj', 'sabuj', 'abc@gmail.com', 1521102240, '123456', 'male'),
(4, 'Mohammad', 'Ali', 'ali', 'abc@gmail.com', 1521102240, '123456', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sis_class`
--
ALTER TABLE `sis_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `sis_resourse`
--
ALTER TABLE `sis_resourse`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sis_student`
--
ALTER TABLE `sis_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `sis_subject`
--
ALTER TABLE `sis_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sis_teacher`
--
ALTER TABLE `sis_teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sis_class`
--
ALTER TABLE `sis_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sis_student`
--
ALTER TABLE `sis_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sis_teacher`
--
ALTER TABLE `sis_teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
