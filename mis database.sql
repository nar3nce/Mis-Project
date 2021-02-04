-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 06:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_db`
--
CREATE DATABASE IF NOT EXISTS `mis_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `mis_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(250) NOT NULL,
  `admin_first_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_last_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_username` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_email` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'narence', 'valencia', 'admin', 'admin', 'nars@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assign_id` int(255) NOT NULL,
  `assign_subj_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `assign_teacher_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `assign_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `assign_attach_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `assign_content` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `assign_exp_date` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assign_id`, `assign_subj_id`, `assign_teacher_id`, `assign_title`, `assign_attach_name`, `assign_content`, `assign_exp_date`) VALUES
(1, '1', '1', 'fucking assignment', '1fucking assignment.php', '<p><strong>tanginanyo mga bata</strong></p>\r\n', '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(255) NOT NULL,
  `notice_teacher_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `notice_subj_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `notice_date_posted` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `notice_content` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_teacher_id`, `notice_subj_id`, `notice_date_posted`, `notice_content`) VALUES
(1, '1', '1', '2021-01-17 05:44:40', '<p>tanginanyo</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(250) NOT NULL,
  `student_firstname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `student_lastname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `student_school_id` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `student_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `student_email` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_school_id`, `student_password`, `student_email`) VALUES
(1, 'boss', 'nars', 'nars@email', 'nars@email', 'nars@email');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(250) NOT NULL,
  `subject_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `subject_teacher_id` int(250) NOT NULL,
  `subject_color` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `subject_sched` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `subj_access_code` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_teacher_id`, `subject_color`, `subject_sched`, `subj_access_code`) VALUES
(1, 'cp3', 1, 'brown', '1 to 3', '66664Sdasc1');

-- --------------------------------------------------------

--
-- Table structure for table `subject_members`
--

CREATE TABLE `subject_members` (
  `subj_member_id` int(11) NOT NULL,
  `subj_class_id` int(250) NOT NULL,
  `usertype` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `subject_member_status` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `subj_member_user_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `subject_members`
--

INSERT INTO `subject_members` (`subj_member_id`, `subj_class_id`, `usertype`, `subject_member_status`, `subj_member_user_id`) VALUES
(1, 1, 'student', 'accepted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(250) NOT NULL,
  `teacher_firstname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `teacher_lastname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `teacher_username` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `teacher_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `teacher_email` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `teacher_username`, `teacher_password`, `teacher_email`) VALUES
(1, 'jr ', 'torrres', 'jr@email', 'jr@email', 'jr@email');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_members`
--
ALTER TABLE `subject_members`
  ADD PRIMARY KEY (`subj_member_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assign_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_members`
--
ALTER TABLE `subject_members`
  MODIFY `subj_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
