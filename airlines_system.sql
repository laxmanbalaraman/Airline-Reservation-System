-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 07:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `E_name` varchar(25) NOT NULL,
  `E_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`E_name`, `E_password`) VALUES
('abc', 'abc'),
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Cno` int(10) NOT NULL,
  `Cname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Cno`, `Cname`) VALUES
(1, 'Economy'),
(2, 'Business'),
(3, 'First Class');

-- --------------------------------------------------------

--
-- Table structure for table `cprice_info`
--

CREATE TABLE `cprice_info` (
  `Travel_code` int(10) NOT NULL,
  `Cno` int(10) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cprice_info`
--

INSERT INTO `cprice_info` (`Travel_code`, `Cno`, `Price`) VALUES
(100, 1, 30000),
(100, 2, 35000),
(100, 3, 45000),
(120, 1, 25000),
(120, 2, 30000),
(120, 3, 39000),
(130, 1, 30000),
(130, 2, 34500),
(130, 3, 43000),
(150, 1, 20000),
(150, 2, 28000),
(150, 3, 36000),
(160, 1, 18000),
(160, 2, 29000),
(160, 3, 37000),
(170, 1, 23000),
(170, 2, 31000),
(170, 3, 42000),
(180, 1, 20550),
(180, 2, 32090),
(180, 3, 47080),
(200, 1, 150000),
(200, 2, 190000),
(200, 3, 230000),
(250, 1, 80000),
(250, 2, 90000),
(250, 3, 100000),
(280, 1, 45000),
(280, 2, 58000),
(280, 3, 70000),
(300, 1, 60000),
(300, 2, 78000),
(300, 3, 89000),
(350, 1, 50000),
(350, 2, 64000),
(350, 3, 81500),
(400, 1, 100000),
(400, 2, 132000),
(400, 3, 160100),
(450, 1, 75000),
(450, 2, 80000),
(450, 3, 90000),
(500, 1, 80000),
(500, 2, 115000),
(500, 3, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `day_info`
--

CREATE TABLE `day_info` (
  `Day_ID` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day_info`
--

INSERT INTO `day_info` (`Day_ID`, `Day`) VALUES
(1, 'Sunday'),
(2, 'Monday'),
(3, 'Tuesday'),
(4, 'Wednesday'),
(5, 'Thursday'),
(6, 'Friday'),
(7, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `flight_info`
--

CREATE TABLE `flight_info` (
  `Flight_ID` varchar(25) NOT NULL,
  `Flight_name` varchar(25) NOT NULL,
  `Seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_info`
--

INSERT INTO `flight_info` (`Flight_ID`, `Flight_name`, `Seats`) VALUES
('1000', 'Indigo Airlines', 244),
('1200', 'Spice Jet Airways', 342),
('1201', 'Air go', 500),
('1500', 'Kingfisher Airlines', 499),
('2000', 'Air India', 446),
('2500', 'Lufthansa Airlines', 799),
('3000', 'Emirate Airlines', 196);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_info`
--

CREATE TABLE `passenger_info` (
  `ID` int(10) NOT NULL,
  `Travel_code` int(10) NOT NULL,
  `Pname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Day_ID` int(10) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `paid_by` varchar(25) NOT NULL,
  `Time_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger_info`
--

INSERT INTO `passenger_info` (`ID`, `Travel_code`, `Pname`, `Gender`, `Day_ID`, `Type`, `paid_by`, `Time_ID`) VALUES
(174, 500, 'Kenny', 'Male', 3, '1', 'ram', 29),
(175, 500, 'Rathore', 'Male', 3, '2', 'ram', 29),
(176, 100, 'Ram', 'Male', 2, '3', 'ram', 3),
(177, 100, 'kapoor', 'Male', 2, '3', 'ram', 3),
(178, 100, 'Lily', 'Female', 4, '2', 'ram', 1),
(179, 100, 'Mani', 'Male', 4, '1', 'ram', 1),
(180, 100, 'Titan', 'Male', 4, '3', 'ram', 1),
(181, 500, 'Raj', 'Male', 3, '2', 'ram', 30),
(182, 500, 'John', 'Male', 3, '3', 'John', 30),
(183, 300, 'Dulquer', 'Male', 3, '3', 'John', 24),
(184, 120, 'Tony', 'Male', 1, '3', 'Kim', 12),
(185, 120, 'Scarlett', 'Female', 1, '3', 'Kim', 12),
(186, 120, 'Thor', 'Male', 6, '3', 'Kim', 11),
(187, 120, 'Hulk', 'Male', 6, '3', 'Kim', 11),
(188, 120, 'Silver', 'Male', 6, '2', 'Kim', 11),
(189, 120, 'gold', 'Female', 6, '2', 'Kim', 11),
(190, 200, 'kumar', 'Male', 3, '2', 'xyz', 19),
(191, 200, 'Gandhimathi', 'Female', 3, '2', 'xyz', 19),
(192, 200, 'abc', 'Male', 3, '2', 'abc', 19),
(193, 200, 'def', 'Female', 3, '2', 'abc', 19),
(194, 100, 'hij', 'Male', 4, '1', 'hij', 1),
(195, 130, 'raj', 'Male', 2, '1', 's', 13);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `Travel_code` int(10) NOT NULL,
  `Departure_time` time NOT NULL,
  `Arrival_time` time NOT NULL,
  `Day_ID` int(11) NOT NULL,
  `Time_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`Travel_code`, `Departure_time`, `Arrival_time`, `Day_ID`, `Time_ID`) VALUES
(100, '05:00:00', '08:00:00', 4, 1),
(100, '12:00:00', '03:00:00', 4, 2),
(100, '06:00:00', '09:00:00', 2, 3),
(100, '17:00:00', '20:00:00', 3, 4),
(100, '14:00:00', '17:00:00', 5, 5),
(100, '10:00:00', '13:00:00', 5, 6),
(150, '15:45:00', '18:45:00', 1, 7),
(150, '12:00:00', '03:00:00', 6, 8),
(150, '07:00:00', '10:00:00', 7, 9),
(150, '19:15:00', '23:15:00', 7, 10),
(120, '18:30:00', '22:00:00', 6, 11),
(120, '16:00:00', '20:30:00', 1, 12),
(130, '20:00:00', '21:00:00', 2, 13),
(130, '17:15:00', '18:15:00', 4, 14),
(160, '12:45:00', '14:45:00', 5, 15),
(160, '01:00:00', '03:00:00', 6, 16),
(170, '12:15:00', '13:15:00', 3, 17),
(180, '04:00:00', '07:00:00', 1, 18),
(200, '14:00:00', '10:00:00', 3, 19),
(200, '20:00:00', '01:00:00', 4, 20),
(250, '17:00:00', '06:00:00', 7, 21),
(280, '05:00:00', '18:00:00', 7, 22),
(280, '12:00:00', '11:00:00', 2, 23),
(300, '12:00:00', '16:00:00', 3, 24),
(350, '04:00:00', '16:00:00', 4, 25),
(350, '15:00:00', '23:00:00', 1, 26),
(400, '18:00:00', '12:00:00', 2, 27),
(450, '09:00:00', '23:00:00', 2, 28),
(500, '16:00:00', '20:00:00', 3, 29),
(500, '23:00:00', '08:00:00', 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `travel_info`
--

CREATE TABLE `travel_info` (
  `Travel_code` int(10) NOT NULL,
  `Departure` varchar(25) NOT NULL,
  `Arrival` varchar(30) NOT NULL,
  `Flight_ID` varchar(25) NOT NULL,
  `Travel_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_info`
--

INSERT INTO `travel_info` (`Travel_code`, `Departure`, `Arrival`, `Flight_ID`, `Travel_type`) VALUES
(100, 'Delhi', 'Hyderabad', '1000', 'Domestic'),
(120, 'Bangalore', 'chennai', '1200', 'Domestic'),
(130, 'Bangalore', 'Chennai', '1200', 'Domestic'),
(150, 'Chennai', 'Delhi', '1000', 'Domestic'),
(160, 'Kanpur', 'Hyderabad', '1500', 'Domestic'),
(170, 'Bangalore', 'Kolkata', '1500', 'Domestic'),
(180, 'Chennai', 'Bangalore', '1500', 'Domestic'),
(200, 'Chennai', 'New York', '2000', 'International'),
(250, 'Mumbai', 'Singapore', '2000', 'International'),
(280, 'Hyderabad', 'Kuwait', '2000', 'International'),
(300, 'Chennai', 'Muscat', '2500', 'international'),
(350, 'Chennai', 'Qatar', '2500', 'international'),
(400, 'Berlin', 'Delhi', '2500', 'international'),
(450, 'Abu Dhabi', 'Vijayawada', '3000', 'international'),
(500, 'Bankok', 'Chennai', '3000', 'International');

-- --------------------------------------------------------

--
-- Table structure for table `us`
--

CREATE TABLE `us` (
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `us`
--

INSERT INTO `us` (`name`, `uname`, `eid`, `dob`, `password`, `cpassword`) VALUES
('abc', 'abc', 'abc@gmail.com', '2006-02-15', 'abc', ''),
('hik', 'hij', 'hij@gmail.com', '1996-05-12', 'hij', ''),
('John', 'John', 'J@gmail.com', '2008-06-14', 'john', ''),
('Kim', 'Kim', 'Kim@gmail.com', '2008-12-15', 'kim', ''),
('Ram', 'ram', 'ram@gmail.com', '1996-05-12', 'ram', ''),
('sytrus', 's', 's@gmail.com', '0006-06-05', 's', ''),
('xyz', 'xyz', 'xyz@gmail.com', '2005-08-15', 'xyz', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`E_name`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Cno`);

--
-- Indexes for table `cprice_info`
--
ALTER TABLE `cprice_info`
  ADD PRIMARY KEY (`Travel_code`,`Price`);

--
-- Indexes for table `day_info`
--
ALTER TABLE `day_info`
  ADD PRIMARY KEY (`Day_ID`);

--
-- Indexes for table `flight_info`
--
ALTER TABLE `flight_info`
  ADD PRIMARY KEY (`Flight_ID`);

--
-- Indexes for table `passenger_info`
--
ALTER TABLE `passenger_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`Time_ID`);

--
-- Indexes for table `travel_info`
--
ALTER TABLE `travel_info`
  ADD PRIMARY KEY (`Travel_code`);

--
-- Indexes for table `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger_info`
--
ALTER TABLE `passenger_info`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
