-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 02:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Instructor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Institute` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL CHECK (json_valid(`Description`)),
  `Image` mediumblob NOT NULL,
  `Category` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Preview_video_link` varchar(37) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_enrol`
--

CREATE TABLE `course_enrol` (
  `User_ID` int(11) NOT NULL,
  `Course_ID` int(11) NOT NULL,
  `Time_enroll` datetime DEFAULT NULL,
  `progress` int(11) DEFAULT NULL COMMENT 'lesson id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `course_enrol`
--
DELIMITER $$
CREATE TRIGGER `CourseEnrollDate` AFTER INSERT ON `course_enrol` FOR EACH ROW INSERT INTO course_enrol (Time_enroll)
VALUE (NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_content`
--

CREATE TABLE `lesson_content` (
  `ID` int(11) NOT NULL,
  `ChapterID` int(11) NOT NULL,
  `TextID` int(11) DEFAULT NULL,
  `VideoID` int(11) DEFAULT NULL,
  `Lesson_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_text`
--

CREATE TABLE `lesson_text` (
  `ID` int(11) NOT NULL,
  `Text` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_video`
--

CREATE TABLE `lesson_video` (
  `ID` int(11) NOT NULL,
  `Video` longblob DEFAULT NULL,
  `Video_link` varchar(37) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `ID` int(11) NOT NULL,
  `Course_ID` int(11) NOT NULL,
  `Unit_number` int(11) NOT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `RegistrationDate` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO user (register_date)
VALUE (NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_enrol`
--
ALTER TABLE `course_enrol`
  ADD KEY `User_ID` (`User_ID`,`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `progress_fkLessonID` (`progress`);

--
-- Indexes for table `lesson_content`
--
ALTER TABLE `lesson_content`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ChapterID` (`ChapterID`),
  ADD KEY `TextID` (`TextID`),
  ADD KEY `VideoID` (`VideoID`);

--
-- Indexes for table `lesson_text`
--
ALTER TABLE `lesson_text`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lesson_video`
--
ALTER TABLE `lesson_video`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_content`
--
ALTER TABLE `lesson_content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_text`
--
ALTER TABLE `lesson_text`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_video`
--
ALTER TABLE `lesson_video`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_enrol`
--
ALTER TABLE `course_enrol`
  ADD CONSTRAINT `course_enrol_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_enrol_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_enrol_ibfk_3` FOREIGN KEY (`progress`) REFERENCES `lesson_content` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson_content`
--
ALTER TABLE `lesson_content`
  ADD CONSTRAINT `lesson_content_ibfk_1` FOREIGN KEY (`ChapterID`) REFERENCES `unit` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lesson_content_ibfk_2` FOREIGN KEY (`TextID`) REFERENCES `lesson_text` (`ID`),
  ADD CONSTRAINT `lesson_content_ibfk_3` FOREIGN KEY (`VideoID`) REFERENCES `lesson_video` (`ID`);

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
