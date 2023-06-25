-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 04:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurements`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(50) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `empid`, `emailid`, `password`) VALUES
('Example 1', 'example1_id', 'example1@gmail.com', 'password@example1'),
('Akhil', '12010', 'punnaakhil33@gmail.com', '12010'),
('Gopi', '780098', 'gopi@gmail.com', '780098'),
('murali', '43728', 'murali@gmail.com', '43728'),
('Arjun', '354424', 'arjun@gmail.com', '354424');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `email` varchar(50) NOT NULL,
  `tenderid` int(10) NOT NULL,
  `estamount` int(20) NOT NULL,
  `startdate` varchar(10) NOT NULL,
  `enddate` varchar(10) NOT NULL,
  `esttime` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`email`, `tenderid`, `estamount`, `startdate`, `enddate`, `esttime`) VALUES
('punnaakhil33@gmail.com', 7, 99999, '2023', '2023', 20),
('murali@gmail.com', 7, 38748373, '2023', '2023', 30),
('gopi@gmail.com', 3, 84594892, '2023-05-31', '2023-06-30', 90),
('gopi@gmail.com', 6, 394793834, '2023-06-07', '2023-06-09', 30),
('gopi@gmail.com', 7, 4567899, '2023-06-01', '2023-06-09', 9),
('murali@gmail.com', 3, 453343, '8398-03-31', '2023-06-14', 30),
('murali@gmail.com', 6, 567645, '2023-06-01', '2023-06-13', 56),
('punnaakhil33@gmail.com', 3, 678765, '2023-06-01', '2023-06-23', 34),
('punnaakhil33@gmail.com', 6, 868688, '2023-06-01', '2023-06-15', 35),
('punnaakhil33@gmail.com', 3, 983498, '2023-06-02', '2023-06-16', 987),
('punnaakhil33@gmail.com', 6, 8764, '2023-05-31', '2023-06-16', 98),
('gopi@gmail.com', 6, 98678, '2023-06-01', '2023-06-09', 6798),
('gopi@gmail.com', 6, 93892, '2023-06-02', '2023-06-16', 897),
('gopi@gmail.com', 7, 68688, '2023-06-17', '2023-06-19', 787),
('murali@gmail.com', 3, 8978, '2023-06-02', '2023-06-09', 897),
('murali@gmail.com', 6, 7897, '2023-06-01', '2023-06-02', 986),
('murali@gmail.com', 6, 78787, '2023-06-02', '2023-06-17', 676),
('punnaakhil33@gmail.com', 6, 7969, '2023-06-01', '2023-06-16', 676);

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `estimated_cost` int(10) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `name`, `department`, `description`, `estimated_cost`, `location`) VALUES
(3, 'Huts for rural people', 'dept of rural development', 'Provide shelter for poor', 3000000, 'Hyderabad 500038'),
(6, 'Water supply', 'PHMED warangal', 'supply water for the phmed', 300000, 'warangal 402030'),
(7, 'PROCUREMENT OF TOOL KIT MATERIAL EARTH RODS, GLOUS', 'cooperative electric supply society ltd-Cooperativ', 'supply products', 300000, '400098'),
(9, 'Water Supply Projects in 9 ULBs', 'PHMED - TELANGANA', 'Water Supply Projects in 9 ULBs ((i)Wyra (ii) Madhira (iii) Sathupally (iv)Dornakal (v) Marripeda (vi) Thorruru ((vii) Mahaboobabad (viii) Kothagudem and (ix)Manuguru ) in Package-IV under AMRUT 2.0 of Khammam Division', 2266409, 'warangal 402030');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Fullname` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `exp` int(2) NOT NULL,
  `ptender` varchar(100) NOT NULL,
  `pan` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fullname`, `emailid`, `password`, `cpassword`, `exp`, `ptender`, `pan`, `amount`) VALUES
('Akhil', 'punnaakhil33@gmail.com', 'dijdj', 'kdjs', 9, 'dksj', 0, 9),
('Akhil', 'punnaakhil33@gmail.com', 'Akhil', 'Akhil', 5, 'akhil', 83833, 93939),
('Gopi', 'gopi@gmail.com', 'gopi', 'gopi', 9, 'kkkkkkkkkkkk', 0, 980394),
('murali', 'murali@gmail.com', 'murali', 'murali', 90, 'dddddddd', 9999999, 34451344),
('', '', '', '', 0, '', 0, 0),
('Arjun', 'arjun@gmail.com', 'arjun', 'arjun', 9, 'xyz', 9382, 5098998),
('venkat', 'venkat@gmail.com', 'venkat', 'venkat', 9, 'abc', 93829, 849382),
('vinay', 'vinay@gmail.com', 'vinay', 'vinay', 8, 'kjkdkdk', 349299, 940390);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
