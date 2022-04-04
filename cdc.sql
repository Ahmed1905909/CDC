-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `Album_ID` int(20) NOT NULL,
  `Album_Pictures` varchar(200) NOT NULL,
  `Album_Videos` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `Announcement_ID` int(20) NOT NULL,
  `Announcement_Time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Announcement_ID`, `Announcement_Time`) VALUES
(0, 999);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_ID` int(11) NOT NULL,
  `Excuse` varchar(200) NOT NULL,
  `Attended` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Attendance_ID`, `Excuse`, `Attended`) VALUES
(0, 'hh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cash flow`
--

CREATE TABLE `cash flow` (
  `CashFlow_ID` int(20) NOT NULL,
  `Income` int(20) NOT NULL,
  `Outcome` int(20) NOT NULL,
  `Balance` int(20) NOT NULL,
  `Incash_Flow` int(20) NOT NULL,
  `Cash_Out` int(20) NOT NULL,
  `Net_Cash` int(20) NOT NULL,
  `Cash_Desctiption` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `Committee_ID` int(20) NOT NULL,
  `PR` varchar(20) NOT NULL,
  `HR` varchar(20) NOT NULL,
  `Media` varchar(20) NOT NULL,
  `C&D` varchar(20) NOT NULL,
  `DVP` varchar(20) NOT NULL,
  `AC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`Committee_ID`, `PR`, `HR`, `Media`, `C&D`, `DVP`, `AC`) VALUES
(0, 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `convoys`
--

CREATE TABLE `convoys` (
  `Convoy_ID` int(20) NOT NULL,
  `Convoy_Name` varchar(20) NOT NULL,
  `Convoy_Place` varchar(500) NOT NULL,
  `Convoy_Date` date NOT NULL,
  `Convoy_Discerption` varchar(500) NOT NULL,
  `Convoy_Pictures` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `Discount_ID` int(20) NOT NULL,
  `Discount_Picture` varchar(300) NOT NULL,
  `Start_Date` date NOT NULL,
  `Expiary_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_ID` int(20) NOT NULL,
  `Event_Name` varchar(50) NOT NULL,
  `Event_Place` varchar(200) NOT NULL,
  `Event_Date` date NOT NULL,
  `Event_Discerption` varchar(500) NOT NULL,
  `Event_Pictures` varchar(500) NOT NULL,
  `Eent_Videos` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `Meeting_ID` int(20) NOT NULL,
  `Meeting_Date` date NOT NULL,
  `Meeting_Place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`Meeting_ID`, `Meeting_Date`, `Meeting_Place`) VALUES
(0, '0000-00-00', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Material_ID` int(20) NOT NULL,
  `Material_Name` varchar(50) NOT NULL,
  `Quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Academic_Year` varchar(50) NOT NULL,
  `Committee` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  `Profile_Picture` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `First_Name`, `Last_Name`, `Academic_Year`, `Committee`, `Date_of_Birth`, `Gender`, `Email`, `Password`, `Confirm_Password`, `Profile_Picture`, `Phone_Number`) VALUES
(0, 'Stimpy', 'Youssef', 'Rafik', '3rd year', 'a', '0000-00-00', 1, 'youssef@gmail.com', '1234', '1234', 3, 1111111111);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `Role_ID` int(20) NOT NULL,
  `Admin` varchar(20) NOT NULL,
  `Media_Admin` varchar(20) NOT NULL,
  `HR_Admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`Album_ID`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`Announcement_ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_ID`);

--
-- Indexes for table `cash flow`
--
ALTER TABLE `cash flow`
  ADD PRIMARY KEY (`CashFlow_ID`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`Committee_ID`);

--
-- Indexes for table `convoys`
--
ALTER TABLE `convoys`
  ADD PRIMARY KEY (`Convoy_ID`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`Discount_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`Meeting_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Material_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Attendance_ID`) REFERENCES `meetings` (`Meeting_ID`);

--
-- Constraints for table `committee`
--
ALTER TABLE `committee`
  ADD CONSTRAINT `committee_ibfk_1` FOREIGN KEY (`Committee_ID`) REFERENCES `announcements` (`Announcement_ID`),
  ADD CONSTRAINT `committee_ibfk_2` FOREIGN KEY (`Committee_ID`) REFERENCES `attendance` (`Attendance_ID`),
  ADD CONSTRAINT `committee_ibfk_3` FOREIGN KEY (`Committee_ID`) REFERENCES `meetings` (`Meeting_ID`);

--
-- Constraints for table `convoys`
--
ALTER TABLE `convoys`
  ADD CONSTRAINT `convoys_ibfk_1` FOREIGN KEY (`Convoy_ID`) REFERENCES `album` (`Album_ID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `album` (`Album_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `announcements` (`Announcement_ID`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `attendance` (`Attendance_ID`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `committee` (`Committee_ID`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`Role_ID`) REFERENCES `user` (`User_ID`),
  ADD CONSTRAINT `user_role_ibfk_10` FOREIGN KEY (`Role_ID`) REFERENCES `announcements` (`Announcement_ID`),
  ADD CONSTRAINT `user_role_ibfk_11` FOREIGN KEY (`Role_ID`) REFERENCES `committee` (`Committee_ID`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`Role_ID`) REFERENCES `stock` (`Material_ID`),
  ADD CONSTRAINT `user_role_ibfk_3` FOREIGN KEY (`Role_ID`) REFERENCES `events` (`Event_ID`),
  ADD CONSTRAINT `user_role_ibfk_4` FOREIGN KEY (`Role_ID`) REFERENCES `cash flow` (`CashFlow_ID`),
  ADD CONSTRAINT `user_role_ibfk_5` FOREIGN KEY (`Role_ID`) REFERENCES `convoys` (`Convoy_ID`),
  ADD CONSTRAINT `user_role_ibfk_6` FOREIGN KEY (`Role_ID`) REFERENCES `album` (`Album_ID`),
  ADD CONSTRAINT `user_role_ibfk_7` FOREIGN KEY (`Role_ID`) REFERENCES `discounts` (`Discount_ID`),
  ADD CONSTRAINT `user_role_ibfk_8` FOREIGN KEY (`Role_ID`) REFERENCES `meetings` (`Meeting_ID`),
  ADD CONSTRAINT `user_role_ibfk_9` FOREIGN KEY (`Role_ID`) REFERENCES `attendance` (`Attendance_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
