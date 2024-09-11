-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 04:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff`
--

CREATE TABLE `admin_staff` (
  `as_ID` int(11) NOT NULL,
  `as_uName` varchar(255) NOT NULL,
  `as_pWord` varchar(255) NOT NULL,
  `as_fName` varchar(255) NOT NULL,
  `as_lName` varchar(255) NOT NULL,
  `as_Address` varchar(255) NOT NULL,
  `as_pNum` varchar(255) NOT NULL,
  `ur_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_staff`
--

INSERT INTO `admin_staff` (`as_ID`, `as_uName`, `as_pWord`, `as_fName`, `as_lName`, `as_Address`, `as_pNum`, `ur_ID`) VALUES
(1, 'admin', 'pass123', 'Roi Adam', 'Ritual', 'Candon City, Ilocos Sur', '09712648143', 1),
(2, 'user', 'pogiroi', 'AdamRoi ', 'Ritual', 'Candon City, Ilocos Sur', '07234582335', 2);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `cr_ID` int(11) NOT NULL,
  `cr_Name` varchar(50) NOT NULL,
  `cr_Building` varchar(50) NOT NULL,
  `cr_Floor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`cr_ID`, `cr_Name`, `cr_Building`, `cr_Floor`) VALUES
(1, 'CHED 121', 'CHED Building', '2nd Floor');

-- --------------------------------------------------------

--
-- Table structure for table `course_subject`
--

CREATE TABLE `course_subject` (
  `cs_ID` int(11) NOT NULL,
  `cs_Code` varchar(10) NOT NULL,
  `cs_Title` varchar(50) NOT NULL,
  `cs_Units` int(11) NOT NULL,
  `cs_Hours` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_subject`
--

INSERT INTO `course_subject` (`cs_ID`, `cs_Code`, `cs_Title`, `cs_Units`, `cs_Hours`) VALUES
(1, 'C47', 'Application Development', 3, '1hr 30mins'),
(2, 'C49', 'Ethics', 3, '1hr 30mins');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ins_ID` int(11) NOT NULL,
  `ins_fName` varchar(20) NOT NULL,
  `ins_lName` varchar(20) NOT NULL,
  `ins_Dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ins_ID`, `ins_fName`, `ins_lName`, `ins_Dept`) VALUES
(1, 'Cliff Owen', 'Pascua', 'CAS'),
(2, 'Helen', 'Valdez', 'CAS'),
(3, 'Leslie', 'Agbulos', 'CAS'),
(4, ' Roi ', ' Jenriel', 'Charle');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_ID` int(11) NOT NULL,
  `sched_Time` varchar(50) NOT NULL,
  `cs_ID` int(11) NOT NULL,
  `ins_ID` int(11) NOT NULL,
  `cr_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_ID`, `sched_Time`, `cs_ID`, `ins_ID`, `cr_ID`) VALUES
(1, '7:30-9:30am MW, 3:30-5pm TTH', 1, 1, 1),
(2, '5:30am - 10am', 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_ID` int(11) NOT NULL,
  `sec_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_ID`, `sec_Name`) VALUES
(1, 'BSCS 2A'),
(2, 'BSCS 2B'),
(3, 'BSCS 2C'),
(4, 'BSCS 2D');

-- --------------------------------------------------------

--
-- Table structure for table `section_schedule`
--

CREATE TABLE `section_schedule` (
  `ss_ID` int(11) NOT NULL,
  `sec_ID` int(11) NOT NULL,
  `sched_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_schedule`
--

INSERT INTO `section_schedule` (`ss_ID`, `sec_ID`, `sched_ID`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_student`
--

CREATE TABLE `section_student` (
  `ses_ID` int(11) NOT NULL,
  `stud_ID` int(11) NOT NULL,
  `sec_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_student`
--

INSERT INTO `section_student` (`ses_ID`, `stud_ID`, `sec_ID`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_ID` int(11) NOT NULL,
  `stud_fName` varchar(50) NOT NULL,
  `stud_lName` varchar(50) NOT NULL,
  `stud_Gender` varchar(50) NOT NULL,
  `stud_Email` varchar(50) NOT NULL,
  `stud_Course` varchar(50) NOT NULL,
  `stud_Year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_ID`, `stud_fName`, `stud_lName`, `stud_Gender`, `stud_Email`, `stud_Course`, `stud_Year`) VALUES
(1, 'Roi Pogi', 'Ritual', 'Male', 'ritual@gmail.com', 'BSCS', '3rd Year'),
(2, 'Jenriel', 'Polendey', 'Male', 'polendey@gmail.com', 'BSCS', '2nd Year'),
(3, 'Stephen', 'Peralta', 'Male', 'peralta@gmail.com', 'BSCS', '2nd Year'),
(4, 'Justin', 'Cabacungan', 'Male', 'cabacungan@gmail.com', 'BSCS', '2nd Year'),
(5, 'Charles', 'Abana', 'Female', 'abana@gmail.com', 'BSCS', '2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `ur_ID` int(11) NOT NULL,
  `ur_Title` varchar(255) NOT NULL,
  `ur_Desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`ur_ID`, `ur_Title`, `ur_Desc`) VALUES
(1, 'Admin', 'Student'),
(2, 'Staff', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD PRIMARY KEY (`as_ID`),
  ADD KEY `user` (`ur_ID`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`cr_ID`);

--
-- Indexes for table `course_subject`
--
ALTER TABLE `course_subject`
  ADD PRIMARY KEY (`cs_ID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ins_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_ID`),
  ADD KEY `classroom` (`cr_ID`),
  ADD KEY `course sub` (`cs_ID`),
  ADD KEY `instructor` (`ins_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_ID`);

--
-- Indexes for table `section_schedule`
--
ALTER TABLE `section_schedule`
  ADD PRIMARY KEY (`ss_ID`),
  ADD KEY `section` (`sec_ID`),
  ADD KEY `schedule` (`sched_ID`);

--
-- Indexes for table `section_student`
--
ALTER TABLE `section_student`
  ADD PRIMARY KEY (`ses_ID`),
  ADD KEY `student` (`stud_ID`),
  ADD KEY `sections` (`sec_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_ID`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ur_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `as_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `cr_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_subject`
--
ALTER TABLE `course_subject`
  MODIFY `cs_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ins_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_schedule`
--
ALTER TABLE `section_schedule`
  MODIFY `ss_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_student`
--
ALTER TABLE `section_student`
  MODIFY `ses_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `ur_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD CONSTRAINT `user` FOREIGN KEY (`ur_ID`) REFERENCES `user_role` (`ur_ID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `classroom` FOREIGN KEY (`cr_ID`) REFERENCES `classroom` (`cr_ID`),
  ADD CONSTRAINT `course sub` FOREIGN KEY (`cs_ID`) REFERENCES `course_subject` (`cs_ID`),
  ADD CONSTRAINT `instructor` FOREIGN KEY (`ins_ID`) REFERENCES `instructor` (`ins_ID`);

--
-- Constraints for table `section_schedule`
--
ALTER TABLE `section_schedule`
  ADD CONSTRAINT `schedule` FOREIGN KEY (`sched_ID`) REFERENCES `schedule` (`sched_ID`),
  ADD CONSTRAINT `section` FOREIGN KEY (`sec_ID`) REFERENCES `section` (`sec_ID`);

--
-- Constraints for table `section_student`
--
ALTER TABLE `section_student`
  ADD CONSTRAINT `sections` FOREIGN KEY (`sec_ID`) REFERENCES `section` (`sec_ID`),
  ADD CONSTRAINT `student` FOREIGN KEY (`stud_ID`) REFERENCES `student` (`stud_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
