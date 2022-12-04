-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `room_no`, `type`) VALUES
(1, 7, 'TH'),
(2, 201, 'TH'),
(3, 202, 'TH'),
(4, 211, 'TH'),
(5, 212, 'TH'),
(6, 213, 'TH'),
(7, 2, 'PR'),
(8, 3, 'PR'),
(9, 4, 'PR'),
(10, 210, 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sr_no` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `lectures` int(11) NOT NULL,
  `tutorials` int(11) NOT NULL,
  `practicals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sr_no`, `course_code`, `course_name`, `type`, `sem`, `credits`, `lectures`, `tutorials`, `practicals`) VALUES
(1, 'A18BS01', 'Communication Skills', 'TH', 1, 4, 4, 0, 0),
(2, 'A18BS06', 'Basic Mathematics', 'TH', 1, 5, 3, 2, 0),
(3, 'A18BS03', 'Physics - I', 'TH', 1, 4, 4, 0, 0),
(4, 'O18BB52', 'Computer & ICT Lab', 'TW', 1, 6, 2, 0, 4),
(5, 'O18BB53', 'Web Design Lab', 'PR', 1, 6, 2, 0, 4),
(6, 'A18BS02', 'Communication Practice', 'TH', 2, 4, 4, 0, 0),
(7, 'O18BB10', 'Physics - II', 'TH', 2, 4, 4, 0, 0),
(8, 'A18BS07', 'Applied Mathematics', 'TH', 2, 5, 3, 2, 0),
(9, 'O18BB11', 'Programming In C', 'TH', 2, 4, 4, 0, 0),
(10, 'O18BS51', 'Physics - II & CPM Lab', 'TW', 2, 4, 0, 0, 4),
(11, 'O18BB54', 'Programming In C Lab', 'PR', 2, 4, 0, 0, 4),
(12, 'O18BB12', 'OOPS Using C++', 'TH', 3, 4, 4, 0, 0),
(13, 'O18BC18', 'Computer Network', 'TH', 3, 4, 4, 0, 0),
(14, 'O18BB09', 'Digital Electronics', 'TH', 3, 4, 4, 0, 0),
(15, 'O18BS08', 'Engineering Mathematics', 'TH', 3, 6, 4, 2, 0),
(16, 'O18RA25', 'Computer Organisation', 'TH', 3, 4, 4, 0, 0),
(17, 'O18BC60', 'OOPS Using C++ & PHP Lab', 'PR', 3, 6, 0, 0, 6),
(18, 'O18BC71', 'BDE & CO Lab', 'TW', 3, 4, 0, 0, 4),
(19, 'O18RA22', 'Core Java', 'TH', 4, 5, 4, 1, 0),
(20, 'O18RC21', 'Operating Systems', 'TH', 4, 4, 4, 0, 0),
(21, 'O18BB13', 'Data Structures', 'TH', 4, 5, 5, 0, 0),
(22, 'O18RC14', 'Microprocessor', 'TH', 4, 4, 4, 0, 0),
(23, 'O18BC19', 'Database Management System', 'TH', 4, 4, 4, 0, 0),
(24, 'O18RA61', 'CJ & DBMS Lab', 'PR', 4, 4, 0, 0, 4),
(25, 'O18RA61', 'Microprocessor Lab', 'TW', 4, 4, 0, 0, 4),
(26, 'O18RC17', 'Linux & Network Administration', 'TH', 5, 4, 4, 0, 0),
(27, 'O18RA23', 'Advanced Java', 'TH', 5, 5, 5, 0, 0),
(28, 'O18RA28', 'Software Engineering', 'TH', 5, 4, 4, 0, 0),
(29, 'O18RA72/O18RA73', 'Elective - I (Python/Android) Lab', 'PR', 5, 4, 0, 0, 4),
(30, 'O18RA63', 'AJ & WT Lab', 'PR', 5, 4, 0, 0, 4),
(31, 'O18RC58', 'Linux & Network Administration Lab', 'PR', 5, 4, 0, 0, 4),
(32, 'O18RA65', 'Project', 'PR', 5, 6, 0, 0, 6),
(34, 'O18RM01', 'Management', 'TH', 6, 4, 4, 0, 0),
(35, 'O18RC20', 'Advanced Database', 'TH', 6, 5, 5, 0, 0),
(36, 'O18RA29', 'System Security', 'TH', 6, 4, 4, 0, 0),
(37, 'O18BC56', 'Specialised Course In Computer Engineering', 'PR', 6, 4, 4, 0, 0),
(38, 'A18BS96', 'Behavioural Science', 'TW', 6, 4, 4, 0, 0),
(39, 'A18BM92/93/94/95', 'Foreign Language', 'TW', 6, 4, 3, 1, 0),
(40, 'O18RC59', 'Advanced Database Lab', 'PR', 6, 4, 0, 0, 4),
(41, 'O18BA74/O18BA75', 'Elective - II (Robotics/Cloud Computing) Lab', 'TW', 6, 4, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `sr_no` int(11) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`sr_no`, `faculty_id`, `faculty_name`, `email`) VALUES
(1, '101', 'Dr. S.G. Kolte', 'sgkolte@somaiya.edu'),
(2, '102', 'Mrs. Varsha Kinge', 'varsha.k@somaiya.edu'),
(3, '103', 'Mrs. Snehal Suryavanshi', 'snehal01@somaiya.edu'),
(4, '104', 'Mrs. Rupali Patil', 'rnpatil@somaiya.edu'),
(5, '105', 'Mrs. Charulata Ingle', 'cpingle@somaiya.edu'),
(6, '106', 'Mrs. Niti Patel', 'niti@somaiya.edu'),
(7, '107', 'Mr. Dnyandev Shinde', 'dnyandev@somaiya.edu'),
(8, '108', 'Mr. Debraj Moulick', 'debraj.m@somaiya.edu'),
(9, '109', 'Mrs. Megha Kapse', 'meghakapse1008@gmail.com'),
(10, '110', 'Mr. Nilesh Kitke', 'nilesh.kitke@gmail.com'),
(11, '111', 'Mr. Swapnil Tambe', 'sytambe@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`id`, `day`, `course`, `faculty`, `class`, `time`) VALUES
(1, 'monday', 'Basic Mathematics', '', '7', '10:30 - 11:30'),
(2, 'monday', 'Basic Mathematics', '', '7', '10:30 - 11:30'),
(3, 'monday', 'Communication Skills', 'Mr. Debraj Moulick', '7', '10:30 - 11:30');

-- --------------------------------------------------------

--
-- Table structure for table `semester1paarth`
--

CREATE TABLE `semester1paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester2paarth`
--

CREATE TABLE `semester2paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester3paarth`
--

CREATE TABLE `semester3paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester4paarth`
--

CREATE TABLE `semester4paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester5paarth`
--

CREATE TABLE `semester5paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester6paarth`
--

CREATE TABLE `semester6paarth` (
  `day` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `semester1`
--
ALTER TABLE `semester1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester2`
--
ALTER TABLE `semester2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester3`
--
ALTER TABLE `semester3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester4`
--
ALTER TABLE `semester4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester5`
--
ALTER TABLE `semester5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester6`
--
ALTER TABLE `semester6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
