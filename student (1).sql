-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 07:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `State` varchar(25) NOT NULL,
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `MObileNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Fname`, `Address`, `Gender`, `State`, `District`, `City`, `pincode`, `Course`, `Email`, `Dob`, `MObileNo`) VALUES
(4, 'demo', 'demo', 'demo', '	Female', 'Gujrat', 'Ahmedabad', 'Gujrat', 2020, 'MCA', 'demo@gmail.com', '2021-03-26', 202020201),
(5, 'LJMCA', 'LJCAMPUS', 'Sarkhej', '	male', 'Gujrat', 'Ahmedabad', 'Rajsthan', 382415, 'MCOM', 'ravi@gmail.com', '2021-03-30', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
