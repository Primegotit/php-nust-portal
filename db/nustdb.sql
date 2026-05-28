-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2026 at 01:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nustdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `scs2105_calculus`
--

CREATE TABLE `scs2105_calculus` (
  `student_id` varchar(50) NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `student_middle_name` varchar(50) DEFAULT NULL,
  `student_surname` varchar(50) NOT NULL,
  `current_part` varchar(10) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `final_mark` varchar(10) DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scs2105_calculus`
--

INSERT INTO `scs2105_calculus` (`student_id`, `student_first_name`, `student_middle_name`, `student_surname`, `current_part`, `course_code`, `course_name`, `final_mark`, `grade`) VALUES
('Alex', 'black', 'm', 'Prime', '1.2', 'SCS2105', 'Calculus', '45', '90'),
('N02528961Y', 'Promse', 'm', 'Prime', '1.2', 'SCS2105', 'Calculus', '45', 'u'),
('promise', 'Promse', 'm', 'Prime', '2.1', 'SCS2105', 'Calculus', '74', '2.1');

-- --------------------------------------------------------

--
-- Table structure for table `scs2106_web_development`
--

CREATE TABLE `scs2106_web_development` (
  `student_id` varchar(50) NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `student_middle_name` varchar(50) DEFAULT NULL,
  `student_surname` varchar(50) NOT NULL,
  `current_part` varchar(10) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `final_mark` varchar(10) DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scs2106_web_development`
--

INSERT INTO `scs2106_web_development` (`student_id`, `student_first_name`, `student_middle_name`, `student_surname`, `current_part`, `course_code`, `course_name`, `final_mark`, `grade`) VALUES
('promise', 'Promise', 'M', 'Siafwiyo', '2.1', 'SCS2106', 'Web development', '89', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblmodules`
--

CREATE TABLE `tblmodules` (
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `lecturer_id` varchar(255) NOT NULL,
  `lecturer_name` varchar(255) NOT NULL,
  `lecturer_middle_name` varchar(255) NOT NULL,
  `lecturer_surname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmodules`
--

INSERT INTO `tblmodules` (`course_code`, `course_name`, `lecturer_id`, `lecturer_name`, `lecturer_middle_name`, `lecturer_surname`, `department`) VALUES
('SCS2105', 'Calculus', 'N978039534', 'Promise ', 'M', 'Siafwyo', 'Computer Science'),
('SCS2106', 'Web development', 'N978039536', 'Promise ', 'M', 'Siafwyo', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `student_id` varchar(255) NOT NULL,
  `module_1` varchar(255) NOT NULL,
  `module_2` varchar(255) NOT NULL,
  `module_3` varchar(255) NOT NULL,
  `module_4` varchar(255) NOT NULL,
  `module_5` varchar(255) NOT NULL,
  `module_6` varchar(255) NOT NULL,
  `module_7` varchar(255) NOT NULL,
  `module_8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`student_id`, `module_1`, `module_2`, `module_3`, `module_4`, `module_5`, `module_6`, `module_7`, `module_8`) VALUES
('08-990541B06', 'SCS2106 Web development', 'SCS2105 Calculus', 'SCS2106 Web development', 'SCS2105 Calculus', 'SCS2106 Web development', 'SCS2106 Web development', 'SCS2106 Web development', 'SCS2106 Web development'),
('N02528961a', 'SCS2106 ', 'SCS2105 ', 'SCS2106 ', 'SCS2106 ', 'SCS2106 ', 'SCS2106 ', 'SCS2106 ', 'SCS2106 '),
('N02528961Y', 'SCS2106 ', 'SCS2106 ', 'SCS2105 ', 'SCS2106 ', 'SCS2106 ', 'SCS2105 ', 'SCS2105 ', 'SCS2106 '),
('promise', 'SCS2106 Web development', 'SCS2105 Calculus', 'SCS2106 Web development', 'SCS2105 Calculus', 'SCS2105 Calculus', 'SCS2105 Calculus', 'SCS2105 Calculus', 'SCS2105 Calculus');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `national_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`national_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `country`, `city`, `address`, `phone_number`, `email`, `department`, `degree`, `student_id`, `password`) VALUES
('', '', '', '', 'male', '', '', '', '', '', '', '', '', '', '7errr30q'),
('08-99032412345', 'Black', 'M', 'Prime', 'male', '', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'mathematics', 'master', 'CS648465', 'z2jzvmb7'),
('08-990324123aa', 'Promse', 'M', 'Prime', 'male', '2026-05-15', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'computer_science', 'bachelor', 'promise', 'prime'),
('08-990324123aaaaaaaa', 'Promsefdsgfdgsfdg', 'mfdsgdfags', 'Primesdfgsd', 'male', '', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'computer_science', 'master', 'CS589934', 'htk4es0l'),
('08-990324123azzccdd', 'First', 'm', 'Last', 'male', '', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071asdf', 'primevaldigitals@asdfgmail.com', 'mathematics', 'bachelor', 'CS100948', 'ghoezcfe'),
('08-990324123ss', 'Promse', 'm', 'Prime', 'male', '2026-05-09', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'computer_science', 'master', 'CS958840', ''),
('08-990334534', 'Alex', 'M', 'Moyo', 'male', '', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'mathematics', 'engineering', 'CS179144', ''),
('08-99541B06', 'Promse', 'M', 'Siafwiyo', 'male', '2026-05-15', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'computer_science', 'master', 'blaunx', 'blaunx'),
('3452', '2345ty', '1324', '1234', 'male', '2026-05-01', '1234', '1234', 'adg', 'asdg', 'sadg@gmail.com', 'physics', 'master', 'CS28203', 'cerjlbxg'),
('90743897489', 'Promise', 'M', 'Siafwiyo', 'male', '2026-05-09', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'mathematics', 'bachelor', 'CS926587', 'nsl43uoq'),
('qw', 'qw', 'm', 'Prime', 'male', '', 'Zimbabwe', 'Bulawayo', '3769 Magwegwe North', '0789880071', 'primevaldigitals@gmail.com', 'computer_science', 'bachelor', 'CS548693', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scs2105_calculus`
--
ALTER TABLE `scs2105_calculus`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `scs2106_web_development`
--
ALTER TABLE `scs2106_web_development`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tblmodules`
--
ALTER TABLE `tblmodules`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`national_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
