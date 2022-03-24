-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 11:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TDLallocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentTDL`
--

CREATE TABLE `currentTDL` (
  `sid` varchar(25) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  `semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentTDL`
--

INSERT INTO `currentTDL` (`sid`, `t_id`, `semester`) VALUES
('s1', 't1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` varchar(20) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `school_id` text NOT NULL,
  `mobile_no` bigint(15) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `t_id`, `name`, `school_id`, `mobile_no`, `email_id`) VALUES
('f1', 't1', 'kamal', 'SET', 8976543210, 'kamal@1990'),
('f3', 't3', 'Rahul', 'SAA', 7895436745, 'Rahul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loginFaculty`
--

CREATE TABLE `loginFaculty` (
  `f_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginFaculty`
--

INSERT INTO `loginFaculty` (`f_id`, `password`) VALUES
('f1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `loginfcord`
--

CREATE TABLE `loginfcord` (
  `fc_id` varchar(30) NOT NULL,
  `school_id` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginfcord`
--

INSERT INTO `loginfcord` (`fc_id`, `school_id`, `password`) VALUES
('fc1', 'SET', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `loginStudent`
--

CREATE TABLE `loginStudent` (
  `sid` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginStudent`
--

INSERT INTO `loginStudent` (`sid`, `password`) VALUES
('s1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `loginucord`
--

CREATE TABLE `loginucord` (
  `uc_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginucord`
--

INSERT INTO `loginucord` (`uc_id`, `password`) VALUES
('u1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `schoolinfo`
--

CREATE TABLE `schoolinfo` (
  `school_id` varchar(50) NOT NULL,
  `schoolname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolinfo`
--

INSERT INTO `schoolinfo` (`school_id`, `schoolname`) VALUES
('sh01', 'engineering & tech');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` varchar(25) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `semester` int(5) NOT NULL,
  `school_id` text NOT NULL,
  `tdlcourse` text NOT NULL,
  `mobile_no` bigint(15) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `lname`, `semester`, `school_id`, `tdlcourse`, `mobile_no`, `email_id`) VALUES
('s1', 'kunal', 'Acharya', 6, 'SET', 'cyber crime', 9865432901, 'kunal@gmail.com'),
('s4', 'vinayyak', 'vajpaye', 6, 'B.Tech', 'Culinary', 9876543234, 'v@gmail.com'),
('s7', 'g', 's', 5, 'Vatel', 'Corporate', 7865432456, 'k@h'),
('s2', 'Pankaj', 'Singh', 8, 'SET', 'Baking', 9056342189, 'Pankaj@gmail.com'),
('s7', 'k', 'h', 4, 'hyun', 'off', 9806754367, 'k@g'),
('s8', 'hardik', 'sharma', 6, 'SET', 'CANTEEN', 9076453678, 'hardik@f');

-- --------------------------------------------------------

--
-- Table structure for table `TDL`
--

CREATE TABLE `TDL` (
  `t_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TDLCod`
--

CREATE TABLE `TDLCod` (
  `cid` varchar(30) NOT NULL,
  `f_name` text NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TDLCod`
--

INSERT INTO `TDLCod` (`cid`, `f_name`, `s_id`, `mobile`, `email_id`) VALUES
('c01', 'ranjit', 'sh01', 8954954279, 'ranjit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `TDLHistory`
--

CREATE TABLE `TDLHistory` (
  `t_id` varchar(30) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TDL_details`
--

CREATE TABLE `TDL_details` (
  `t_id` varchar(30) NOT NULL,
  `f_id` varchar(20) NOT NULL,
  `subject_name` varchar(70) NOT NULL,
  `school_id` text NOT NULL,
  `vacancy` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TDL_details`
--

INSERT INTO `TDL_details` (`t_id`, `f_id`, `subject_name`, `school_id`, `vacancy`) VALUES
('t1', 'f1', 'cyber crime', 'SET', 40),
('t2', 'f2', 'Cooking', 'HM', 40),
('t4', 'f5', 'hio', 'SSD', 30),
('t8', 'f8', 'food', 'HM', 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
