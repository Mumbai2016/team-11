-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 06:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `katalyst11`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `M_Id` int(11) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `follow_up` varchar(255) DEFAULT NULL,
  `satisfaction` varchar(255) DEFAULT NULL,
  `completion_of_goals` varchar(255) DEFAULT NULL,
  `goals` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`M_Id`, `summary`, `follow_up`, `satisfaction`, `completion_of_goals`, `goals`) VALUES
(1, 'Hello', 'y', '4', '5', 'Comps');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
`M_Id` int(11) NOT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`M_Id`, `P_Id`, `Date`, `Time`, `location`, `flag`) VALUES
(1, 6, '2016-07-17', '06:27:24', 'Mumbai', 1),
(2, 4, '2016-07-23', '08:06:34', 'Location', 1),
(3, 3, '2016-07-20', '06:25:07', 'Surat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pairs`
--

CREATE TABLE IF NOT EXISTS `pairs` (
  `P_Id` int(11) NOT NULL,
  `Mentor` int(11) DEFAULT NULL,
  `Mentee` int(11) DEFAULT NULL,
  `m_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pairs`
--

INSERT INTO `pairs` (`P_Id`, `Mentor`, `Mentee`, `m_count`) VALUES
(1, 2, 1, 0),
(2, 3, 4, 1),
(3, 5, 7, 2),
(4, 6, 8, 1),
(5, NULL, 9, 2),
(6, NULL, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
`R_ID` int(11) NOT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` int(255) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`R_ID`, `P_Id`, `location`, `date`, `time`, `comments`, `status`) VALUES
(2, 6, 'Mumbai', '2016-02-23', '02:37:23', 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `U_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_Id`, `Name`, `Type`, `email`, `passwd`) VALUES
(1, 'Rahul', 'ME', 'rahul@gmail.com', 'abcd'),
(2, 'Karan', 'MR', 'karan@gmail.com', 'efgh'),
(3, 'Kaustav', 'MR', 'kaustav@gmail.com', 'ijkl'),
(4, 'Amit', 'ME', 'amit@gmail.com', 'mcdfd'),
(5, 'Pratik', 'MR', 'Pratik@gmail.com', 'fefe'),
(6, 'Devashree', 'MR', 'dev@gmail.com', 'dfef'),
(7, 'Rheya', 'ME', 'rheya@gmail.com', 'efrwe'),
(8, 'Darshit', 'ME', 'darshit@gmail.com', 'dfsde'),
(9, 'Darsh', 'ME', 'darsh@gmail.com', 'sfsfs'),
(10, 'Yash', 'ME', 'yash@gmail.com', 'dfdvf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
 ADD PRIMARY KEY (`M_Id`), ADD KEY `P_ID` (`P_Id`);

--
-- Indexes for table `pairs`
--
ALTER TABLE `pairs`
 ADD PRIMARY KEY (`P_Id`), ADD KEY `Mentor` (`Mentor`), ADD KEY `Mentee` (`Mentee`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
 ADD PRIMARY KEY (`R_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
