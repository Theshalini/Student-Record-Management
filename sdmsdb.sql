-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 08:09 AM
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
-- Database: `sdmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentName` text DEFAULT NULL,
  `dob` varchar(255) NOT NULL,
  `emisno` varchar(255) NOT NULL,
  `aadhaarno` varchar(255) DEFAULT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `religion` text NOT NULL,
  `caste` text NOT NULL,
  `firstgraduate` text NOT NULL,
  `dabled` text NOT NULL,
  `community` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `annualincome` varchar(20) DEFAULT NULL,
  `studentpno` varchar(20) NOT NULL,
  `ctype` varchar(10) DEFAULT NULL,
  `yearjoin` varchar(25) DEFAULT NULL,
  `course` varchar(25) DEFAULT NULL,
  `dept` text NOT NULL,
  `medium` text NOT NULL,
  `mode` text NOT NULL,
  `doa` varchar(25) NOT NULL,
  `tenregno` varchar(25) NOT NULL,
  `tenmark` int(10) NOT NULL,
  `tregno` varchar(25) NOT NULL,
  `tmark` int(10) NOT NULL,
  `ugregno` varchar(20) NOT NULL,
  `dsh` text NOT NULL,
  `scholarship` text NOT NULL,
  `caddress` varchar(255) DEFAULT NULL,
  `paddress` varchar(255) NOT NULL,
  `bankname` text NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `micr` varchar(50) NOT NULL,
  `studentImage` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `mothername` varchar(30) NOT NULL,
  `guardianname` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `moccupation` varchar(255) NOT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `class`, `studentno`, `studentName`, `dob`, `emisno`, `aadhaarno`, `bloodgroup`, `religion`, `caste`, `firstgraduate`, `dabled`, `community`, `email`, `contactno`, `annualincome`, `studentpno`, `ctype`, `yearjoin`, `course`, `dept`, `medium`, `mode`, `doa`, `tenregno`, `tenmark`, `tregno`, `tmark`, `ugregno`, `dsh`, `scholarship`, `caddress`, `paddress`, `bankname`, `branchname`, `ifsc`, `accno`, `micr`, `studentImage`, `parentName`, `mothername`, `guardianname`, `occupation`, `moccupation`, `postingDate`, `updationDate`) VALUES
(41, 'III BSc CS S-1', '047', 'Zubeida Begum', '15.03.2003', '54126544534', '789456123', 'AB+', 'Muslim', 'xxxxxxxxxxx', 'No', 'No', 'MBC', 'thesha@gmail.com', '344011325', '70,000', '9344011325', 'UG', '2021-2022', 'B.Sc', 'Computer Science', 'English', '', '', '', 0, '', 0, '', '', '', '112 /33,\r\nbig street, \r\nkumbakonam.', '112 /33,\r\nbig street, \r\nkumbakonam.', 'Indian bank', 'Kumbakonam ', 'a1b2c3d4e5', '789456123789', 'abc123def456', 'WhatsApp Image 2020-12-03 at 17.17.56 (4).jpeg', 'xxxx', 'xxxx', 'nil', 'business ', 'house wife', '2024-01-29 17:38:33', NULL),
(42, 'III BSc CS S-1', '123', 'Lilia ', '14.11.2008', '54126544534', '78541236945', 'O+', 'Christian', 'xxxxxxxxxxx', 'Yes', 'No', 'BC', 'lilia@gmail.com', '9345112126', '75,000', '9344011325', 'UG', '2021-2022', 'B.Sc', 'Computer Science', 'English', 'Regular', '24.06.2021', '123456987', 0, '', 0, '', '', '', '112 /33,\r\nxxxxxx,\r\nbig street, \r\nkumbakonam.', '112 /33,\r\nxxxxxx,\r\nbig street, \r\nkumbakonam.', 'Bank of baroda', 'Kumbakonam ', 'a1b2c3d4e5', '789456123789', 'abc123def456', 'WhatsApp Image 2020-12-23 at 11.40.04 (20).jpeg', 'xxxx', 'xxxx', 'nil', 'business ', 'house wife', '2024-01-30 03:18:41', NULL),
(43, 'III BSc CS S-1', 'U0047', 'Thesha', '15.03.2003', '54126544534', '78541236945', 'B-', 'Hindu', 'xxxxxxxxxxx', 'No', 'No', 'MBC', 'theshaliniv@gmail.com', '9344011325', '75,000', '9345112126', 'UG', '2021-2022', 'B.Sc', 'Computer Science', 'English', 'Regular', '24.06.2021', '56489', 447, '598745', 553, '0047', 'DayScholar', '', '112 /33,\r\nxxxxxx,\r\nbig street, \r\nkumbakonam.', '112 /33,\r\nxxxxxx,\r\nbig street, \r\nkumbakonam.', 'Bank of baroda', 'Kumbakonam ', 'a1b2c3d4e5', '789456123789', 'abc123def456', 'WhatsApp Image 2020-12-23 at 11.42.06 (1).jpeg', 'Vijayakumar', 'Sharmiladhevi', 'nil', 'business ', 'house wife', '2024-01-30 04:09:22', NULL),
(44, 'III BSc CS S-1', 'U21CS1E047', 'Theshalini.V', '15.03.2003', '54126544534', '321654987', 'B-', 'Hindu', 'xxxxxxxxxxx', 'No', 'No', 'MBC', 'shalini@gmail.com', '9344011325', '75,000', '01234567890', 'UG', '2021-2022', 'B.Sc', 'Computer Science', 'English', 'Regular', '24.06.2021', '56489', 447, '598745', 553, '0047', 'DayScholar', 'Merit Scholarship', 'sardhar residence,2nd vallabai street near kumbakonam', 'sardhar residence,2nd vallabai street near kumbakonam', 'Bank of baroda', 'Kumbakonam ', 'a1b2c3d4e5', '789456123789', 'abc123def456', '1418267_v9_aa.jpg', 'Vijayakumar', 'Sharmiladhevi', 'nil', 'business ', 'house wife', '2024-01-30 04:28:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `permission`, `password`, `userimage`, `status`) VALUES
(21, 'GCWK', 'College User ', 'GCWK', 'gcwk@gmail.com', 'Super User', '4cd7b0f43182daabef4dbc433ef969f4', 'female icon.jfif', 1),
(23, 'Tamil', 'Department', 'Tamil2024', 'tamildept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(24, 'English', 'Department', 'English2024', 'englishdept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(25, 'History', 'Department', 'History2024', 'historydept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(26, 'CS', 'Department', 'CS2024', 'csdept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(27, 'Economics', 'Department', 'Economics2024', 'economicsdept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(28, 'Zoology', 'Department', 'Zoology2024', 'zoologydept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(29, 'Physics', 'Department', 'Physics2024', 'physicsdept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(30, 'Chemistry', 'Department', 'Chemistry2024', 'chemistrydept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(31, 'Maths', 'Department', 'Maths2024', 'mathsdept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(32, 'Botany', 'Department', 'Botany2024', 'botanydept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(33, 'Commerce', 'Department', 'Commerce2024', 'commercedept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1),
(34, 'Geography', 'Department', 'Geography2024', 'geographydept@gmail.com', 'Admin', 'c28344c2ff39a395954a1cb77e6c0854', 'but.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(255, 'GCWK', 'GCWK', 'College User ', 'gcwk@gmail.com', 0x3a3a3100000000000000000000000000, '2024-02-02 06:39:09', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
