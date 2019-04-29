-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 03:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursesche`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_room`
--

CREATE TABLE `book_room` (
  `building` varchar(20) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `time_slot_id` varchar(8) DEFAULT NULL,
  `day` varchar(5) DEFAULT NULL,
  `Start_time` varchar(10) DEFAULT NULL,
  `T_ID` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_room`
--

INSERT INTO `book_room` (`building`, `room_number`, `time_slot_id`, `day`, `Start_time`, `T_ID`) VALUES
('NAC', '202', 't8', 'MW', '8:00', '2'),
('NAC', '202', 't8', 'MW', '8:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `building` varchar(20) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `capacity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`building`, `room_number`, `capacity`) VALUES
('NAC', '202', 40),
('NAC', '315', 40),
('NAC', '316', 40),
('SAC', '207', 40),
('SAC', '311', 40),
('SAC', '312', 40);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(8) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `credit_hour` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credit_hour`) VALUES
('CSE311', 'Database', 'ECE', 3),
('cse327', 'Software Engineering', 'ECE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(20) NOT NULL,
  `budget` int(11) DEFAULT NULL,
  `building` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `budget`, `building`) VALUES
('BBA', 10000000, 'NAC'),
('ECE', 120000, 'SAC'),
('Pharmachy', 120000, 'SAC');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade`) VALUES
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `T_ID` char(10) NOT NULL,
  `Head_id` char(10) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `T_ID` char(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `salary` int(40) DEFAULT NULL,
  `grade` double DEFAULT NULL,
  `email_address` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pr_address` varchar(50) NOT NULL,
  `per_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`T_ID`, `name`, `dept_name`, `salary`, `grade`, `email_address`, `dob`, `pr_address`, `per_address`) VALUES
('2', 'fashvf', 'ECE', 1000000000, 4, 'r@gmail.com', '2019-03-05', 'gsd', 'sdg'),
('3', 'gorib shahid', 'ECE', 44444444, 4, 'r@gmail.com', '2019-03-14', 'awawr', 'rwaaaaa'),
('7', 'Rupok', 'ECE', 400000, 6, 'Ru@gmail.com', '2019-03-20', 'nadda', 'nadda');

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(8) NOT NULL,
  `prereq_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `T_ID` varchar(10) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `time_slot_id` varchar(8) NOT NULL,
  `day` varchar(5) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `Start_time` varchar(10) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`T_ID`, `course_id`, `time_slot_id`, `day`, `year`, `semester`, `Start_time`, `priority`) VALUES
('10', 'cse211', 's4', 'mw', 5656, 'fall', '9:00', 2),
('3', 'cse211', 's4', 'mw', 768, 'fall', '9:00', 2),
('4', 'cse312', 't11', 'st', 2010, 'fall', '8:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_book`
--

CREATE TABLE `room_book` (
  `building` varchar(20) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `time_slot_id` varchar(8) DEFAULT NULL,
  `day` varchar(5) DEFAULT NULL,
  `Start_time` varchar(10) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `T_ID` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_book`
--

INSERT INTO `room_book` (`building`, `room_number`, `time_slot_id`, `day`, `Start_time`, `Status`, `T_ID`) VALUES
('NAC', '202', 't8', 'MW', '8:00', 'booked', '2');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` varchar(8) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `building` varchar(20) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `time_slot_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`course_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`) VALUES
('CSE311', '2', 'Fall', 2019, 'SAC', '311', 't9'),
('cse327', '1', 'Fall', 2019, 'NAC', '202', 't8'),
('cse327', '3', 'Fall', 2019, 'NAC', '202', 't9');

-- --------------------------------------------------------

--
-- Table structure for table `sec_time_slot`
--

CREATE TABLE `sec_time_slot` (
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `time_slot_id` varchar(8) NOT NULL,
  `day` varchar(5) NOT NULL,
  `Start_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_time_slot`
--

INSERT INTO `sec_time_slot` (`sec_id`, `semester`, `year`, `course_id`, `time_slot_id`, `day`, `Start_time`) VALUES
('1', 'Fall', 2019, 'cse327', 't8', 'st', '8:00'),
('2', 'Fall', 2019, 'CSE311', 't9', 'mw', '9:40');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` char(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `tot_cred` int(11) DEFAULT NULL,
  `T_ID` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `dept_name`, `tot_cred`, `T_ID`) VALUES
('1', 'Jahiin', 'ECE', 200, '2'),
('2', 'Rupokkk', 'ECE', 146, '3');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` char(10) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`ID`, `course_id`, `sec_id`, `semester`, `year`, `grade`) VALUES
('1', 'cse327', '1', 'Fall', 2019, '3');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `T_ID` char(10) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `course_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`T_ID`, `sec_id`, `semester`, `year`, `course_id`) VALUES
('3', '3', 'Fall', 2019, 'cse327');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` varchar(8) NOT NULL,
  `day` varchar(5) NOT NULL,
  `Start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`time_slot_id`, `day`, `Start_time`, `end_time`) VALUES
('t8', 'MW', '8:00', '9:40'),
('t8', 'st', '8:00', '9:30'),
('t9', 'mw', '9:40', '11:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_room`
--
ALTER TABLE `book_room`
  ADD KEY `time_slot_id` (`time_slot_id`,`day`,`Start_time`),
  ADD KEY `building` (`building`,`room_number`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`building`,`room_number`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`),
  ADD KEY `building` (`building`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`T_ID`,`Head_id`,`Start_date`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `dept_name` (`dept_name`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`T_ID`,`course_id`,`time_slot_id`,`day`,`Start_time`,`priority`,`year`,`semester`);

--
-- Indexes for table `room_book`
--
ALTER TABLE `room_book`
  ADD KEY `time_slot_id` (`time_slot_id`,`day`,`Start_time`),
  ADD KEY `building` (`building`,`room_number`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `building` (`building`,`room_number`),
  ADD KEY `time_slot_id` (`time_slot_id`);

--
-- Indexes for table `sec_time_slot`
--
ALTER TABLE `sec_time_slot`
  ADD PRIMARY KEY (`sec_id`,`semester`,`year`,`course_id`,`time_slot_id`,`day`,`Start_time`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `time_slot_id` (`time_slot_id`,`day`,`Start_time`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`T_ID`,`sec_id`,`semester`,`year`,`course_id`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`Start_time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_room`
--
ALTER TABLE `book_room`
  ADD CONSTRAINT `book_room_ibfk_1` FOREIGN KEY (`time_slot_id`,`day`,`Start_time`) REFERENCES `time_slot` (`time_slot_id`, `day`, `Start_time`),
  ADD CONSTRAINT `book_room_ibfk_2` FOREIGN KEY (`building`,`room_number`) REFERENCES `classroom` (`building`, `room_number`),
  ADD CONSTRAINT `book_room_ibfk_3` FOREIGN KEY (`T_ID`) REFERENCES `instructor` (`T_ID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`building`) REFERENCES `classroom` (`building`);

--
-- Constraints for table `head`
--
ALTER TABLE `head`
  ADD CONSTRAINT `head_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `instructor` (`T_ID`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`),
  ADD CONSTRAINT `instructor_ibfk_2` FOREIGN KEY (`grade`) REFERENCES `grades` (`grade`);

--
-- Constraints for table `prereq`
--
ALTER TABLE `prereq`
  ADD CONSTRAINT `prereq_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `room_book`
--
ALTER TABLE `room_book`
  ADD CONSTRAINT `room_book_ibfk_1` FOREIGN KEY (`time_slot_id`,`day`,`Start_time`) REFERENCES `time_slot` (`time_slot_id`, `day`, `Start_time`),
  ADD CONSTRAINT `room_book_ibfk_2` FOREIGN KEY (`building`,`room_number`) REFERENCES `classroom` (`building`, `room_number`),
  ADD CONSTRAINT `room_book_ibfk_3` FOREIGN KEY (`T_ID`) REFERENCES `instructor` (`T_ID`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`building`,`room_number`) REFERENCES `classroom` (`building`, `room_number`),
  ADD CONSTRAINT `section_ibfk_3` FOREIGN KEY (`time_slot_id`) REFERENCES `time_slot` (`time_slot_id`);

--
-- Constraints for table `sec_time_slot`
--
ALTER TABLE `sec_time_slot`
  ADD CONSTRAINT `sec_time_slot_ibfk_1` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`),
  ADD CONSTRAINT `sec_time_slot_ibfk_2` FOREIGN KEY (`time_slot_id`,`day`,`Start_time`) REFERENCES `time_slot` (`time_slot_id`, `day`, `Start_time`),
  ADD CONSTRAINT `sec_time_slot_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`T_ID`) REFERENCES `instructor` (`T_ID`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`T_id`) REFERENCES `instructor` (`T_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
