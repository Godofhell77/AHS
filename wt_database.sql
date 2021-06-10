-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_database`
--
CREATE DATABASE IF NOT EXISTS `wt_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wt_database`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `DOV` date NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `book`
--

TRUNCATE TABLE `book`;
--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `Status`) VALUES
('user', 'patient', 'male', 1, 1, '2017-11-08', '2017-11-05 16:43:48', 'Booking Registered.Wait for the update'),
('yash', 'Sparsh Tiwari', 'other', 1, 1, '2021-06-09', '2021-06-07 00:06:41', 'Cancelled by Patient'),
('yash', 'Viral Khatri', 'female', 1, 1, '2021-06-08', '2021-06-07 00:18:39', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

DROP TABLE IF EXISTS `clinic`;
CREATE TABLE `clinic` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mid` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `clinic`
--

TRUNCATE TABLE `clinic`;
--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`cid`, `name`, `address`, `town`, `city`, `contact`, `mid`) VALUES
(1, 'Logani Clinic Center', 'Marimata Square , Indore', 'Indore', 'Indore', 8602782075, '2'),
(2, 'Mogani Clinic Center', 'Sudama Nagar , Indore', 'Indore', 'Indore', 7869286644, '3'),
(3, 'Eogani Clinic Center', 'Vijay Nagar , Indore', 'Indore', 'Indore', 7869855651, '4'),
(4, 'Yogani Clinic Center', 'Nanda Nagar', 'Indore', 'Indore', 9575332859, '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `experience` int(11) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` binary(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `doctor`
--

TRUNCATE TABLE `doctor`;
--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `gender`, `dob`, `experience`, `specialization`, `contact`, `address`, `username`, `password`, `region`) VALUES
(2, 'Milind Sathe', 'male', '1964-08-30', 33, 'Respiratory and Pulmonologist', 9425052251, 'Ravindra Nagar Old Palasia , Indore', 'milind', 0x6d696c696e64000000000000000000000000000000000000000000000000, 'Indore'),
(1, 'Arvind Rawal', 'male', '1964-08-28', 10, 'Musculoskeletal Orthopedics', 8223000036, 'Vikram Heights , Y.N. road  Indore', 'arvind', 0x617276696e64000000000000000000000000000000000000000000000000, 'Indore'),
(3, 'Omprakash Rathi', 'male', '1964-11-30', 17, 'Nephrology ', 7587575367, 'Scheme no. 94 , Vijay Nagar', 'omprakash', 0x6f6d7072616b617368000000000000000000000000000000000000000000, 'Indore'),
(4, 'Akshat Pandey', 'male', '1984-02-09', 3, 'Immunology and Rheumatology', 7987044332, 'Scheme no. 74 , Vijay Nagar', 'akshat', 0x616b73686174000000000000000000000000000000000000000000000000, 'Indore'),
(5, 'Meenu Chadha', 'female', '1980-12-10', 9, 'Critical Care and Anesthesiolo', 7314774444, 'LIG square , AB road , Indore', 'meenu', 0x6d65656e7500000000000000000000000000000000000000000000000000, 'Indore'),
(6, 'Rajeev Hardia', 'male', '1974-12-12', 10, 'Opthalmology', 7314020429, 'Bypass road , Rau', 'rajeev', 0x72616a656576000000000000000000000000000000000000000000000000, 'Indore'),
(7, 'Salil Bhargava', 'male', '1964-09-21', 12, 'Chest Surgery', 7089040404, 'Dhar Kothi Indore', 'salil', 0x73616c696c00000000000000000000000000000000000000000000000000, 'Indore'),
(8, 'Sandeep Shrivastav', 'male', '1970-03-12', 20, 'Cardiological Surgery', 9898989898, 'Mahalaxmi Nagar , Indore', 'sandeep', 0x73616e646565700000000000000000000000000000000000000000000000, 'Indore'),
(9, 'Manoj Bansal ', 'male', '1970-11-09', 21, 'Electrophysiology and Pacing', 9644461111, 'Bombay Hospital road , Indore', 'manoj', 0x6d616e6f6a00000000000000000000000000000000000000000000000000, 'Indore'),
(10, 'Sanjay Kucheria', 'male', '1964-10-19', 22, 'Plastic Reconstructive Surgery', 8976458954, 'Sudama Nagar , Indore', 'sanjay', 0x73616e6a6179000000000000000000000000000000000000000000000000, 'Indore'),
(11, 'Tarun Gandhi', 'male', '1964-12-12', 20, 'Endovescular Sciences', 9425322232, 'Shekhar Central , Palasia Square ', 'tarun', 0x746172756e00000000000000000000000000000000000000000000000000, 'Indore'),
(12, 'Yatin Mehta', 'male', '1955-01-01', 40, 'Emergency and Traumm Care', 7866644433, '50,veena nagar, Opposite bombay hospital', 'yatin', 0x796174696e00000000000000000000000000000000000000000000000000, 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_availability`
--

DROP TABLE IF EXISTS `doctor_availability`;
CREATE TABLE `doctor_availability` (
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `doctor_availability`
--

TRUNCATE TABLE `doctor_availability`;
--
-- Dumping data for table `doctor_availability`
--

INSERT INTO `doctor_availability` (`cid`, `did`, `day`, `starttime`, `endtime`) VALUES
(1, 1, 'Friday', '11:00:00', '18:00:00'),
(1, 1, 'Monday', '11:00:00', '18:00:00'),
(1, 1, 'Saturday', '11:00:00', '18:00:00'),
(1, 1, 'Thursday', '11:00:00', '18:00:00'),
(1, 1, 'Tuesday', '11:00:00', '18:00:00'),
(1, 1, 'Wednesday', '11:00:00', '18:00:00'),
(1, 2, 'Friday', '01:00:00', '17:00:00'),
(1, 2, 'Monday', '01:00:00', '17:00:00'),
(1, 2, 'Saturday', '01:00:00', '17:00:00'),
(1, 2, 'Thursday', '01:00:00', '17:00:00'),
(1, 2, 'Tuesday', '01:00:00', '17:00:00'),
(1, 2, 'Wednesday', '01:00:00', '17:00:00'),
(1, 3, 'Friday', '12:00:00', '19:00:00'),
(1, 3, 'Monday', '12:00:00', '19:00:00'),
(1, 3, 'Saturday', '12:00:00', '19:00:00'),
(1, 3, 'Thursday', '12:00:00', '19:00:00'),
(1, 3, 'Tuesday', '12:00:00', '19:00:00'),
(1, 3, 'Wednesday', '12:00:00', '19:00:00'),
(1, 4, 'Friday', '10:00:00', '17:30:00'),
(1, 4, 'Monday', '10:00:00', '17:30:00'),
(1, 4, 'Saturday', '10:00:00', '17:30:00'),
(1, 4, 'Thursday', '10:00:00', '17:30:00'),
(1, 4, 'Tuesday', '10:00:00', '17:30:00'),
(1, 4, 'Wednesday', '10:00:00', '17:30:00'),
(2, 5, 'Thursday', '11:00:00', '19:00:00'),
(2, 5, 'Tuesday', '11:00:00', '19:00:00'),
(2, 5, 'Wednesday', '11:00:00', '19:00:00'),
(2, 6, 'Friday', '13:00:00', '22:00:00'),
(2, 6, 'Monday', '13:00:00', '22:00:00'),
(2, 6, 'Saturday', '13:00:00', '22:00:00'),
(2, 6, 'Thursday', '13:00:00', '22:00:00'),
(2, 6, 'Tuesday', '13:00:00', '22:00:00'),
(2, 6, 'Wednesday', '13:00:00', '22:00:00'),
(2, 7, 'Friday', '14:00:00', '20:00:00'),
(2, 7, 'Monday', '14:00:00', '20:00:00'),
(2, 7, 'Wednesday', '14:00:00', '20:00:00'),
(2, 8, 'Friday', '13:00:00', '16:00:00'),
(2, 8, 'Monday', '13:00:00', '16:00:00'),
(2, 8, 'Wednesday', '13:00:00', '16:00:00'),
(3, 9, 'Saturday', '14:00:00', '20:00:00'),
(3, 9, 'Thursday', '14:00:00', '20:00:00'),
(3, 9, 'Tuesday', '14:00:00', '20:00:00'),
(3, 10, 'Monday', '10:00:00', '20:00:00'),
(4, 11, 'Monday', '11:00:00', '15:30:00'),
(4, 11, 'Saturday', '11:00:00', '15:30:00'),
(4, 11, 'Thursday', '11:00:00', '15:30:00'),
(4, 11, 'Tuesday', '11:00:00', '15:30:00'),
(4, 12, 'Friday', '12:00:00', '18:01:00'),
(4, 12, 'Wednesday', '12:00:00', '18:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `manager`
--

TRUNCATE TABLE `manager`;
--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `gender`, `dob`, `contact`, `address`, `username`, `password`, `region`) VALUES
(2, 'Vibhor Joshi', 'male', '2000-07-08', 9669754840, 'Joshi Township , Ujjain', 'vibhor', 'vibhor', 'Indore'),
(1, 'Tushar Singune', 'male', '2000-07-07', 6265796197, 'Singune Township , Sanwad Road ', 'tushar', 'tushar', 'Indore'),
(3, 'Nayan Bhile', 'male', '2000-07-10', 9179861757, 'Bhile Township ', 'nayan', 'nayan', 'Indore'),
(4, 'Sajal Jain', 'male', '2000-07-11', 7024002862, 'Jain Township', 'sajal', 'sajal', 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `manager_clinic`
--

DROP TABLE IF EXISTS `manager_clinic`;
CREATE TABLE `manager_clinic` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `manager_clinic`
--

TRUNCATE TABLE `manager_clinic`;
--
-- Dumping data for table `manager_clinic`
--

INSERT INTO `manager_clinic` (`cid`, `mid`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 2),
(3, 4),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `patient`
--

TRUNCATE TABLE `patient`;
--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES
('user', 'male', '1985-01-01', '7897897897', 'user@test.com', 'user', 'user'),
('Yash Yadav', 'male', '2000-07-06', '7987044332', 'yashya49424@gmail.com', 'yash', 'yash'),
('Tushar Sigune', 'other', '1998-08-08', '8989898989', 'tusharsignune@gmail.com', 'tushar', 'tushar'),
('Nayan BHile', 'male', '2000-09-09', '898989898989', 'nayan@gmail.com', 'nayan', 'nayan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Username`,`Fname`,`DOV`,`Timestamp`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`,`name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD PRIMARY KEY (`cid`,`did`,`day`,`starttime`,`endtime`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `manager_clinic`
--
ALTER TABLE `manager_clinic`
  ADD PRIMARY KEY (`cid`,`mid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`,`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
