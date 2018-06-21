-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 05:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `postaladdress` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `studentid` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`name`, `fathername`, `postaladdress`, `city`, `state`, `gender`, `semester`, `branch`, `dob`, `mobileno`, `email`, `studentid`) VALUES
('Arunabh', 'Nikhil Pandey', 'Pilani', 'Sikar', 'Rajasthan', 'Male', 'Odd', 'CSE', '1997-10-28', '8875517770', 'arunabh.pandey@gmail.com', '2015kucp1002'),
('Megha Garg', 'Prem Kumar Garg', 'Mandi', 'Hindaun', 'Rajasthan', 'Female', 'Odd', 'CSE', '1998-08-21', '8696434609', 'megha.garg@gmail.com', '2015kucp1003'),
('Anita', 'MohanLal', 'Chaumu', 'Jaipur', 'Rajasthan', 'Female', 'Odd', 'CSE', '1996-08-18', '7023882123', 'anita.yadav@gmail.com', '2015kucp1006'),
('Vinita', 'Vedpal', 'Chirawa', 'Sikar', 'Rajasthan', 'Female', 'Odd', 'CSE', '1998-02-01', '7597251620', 'vinita.sihag@gmail.com', '2015kucp1010'),
('Nikhil', 'Nilesh', 'Sector 18', 'Chandigarh', 'Punjab', 'Male', 'Odd', 'CSE', '1997-01-29', '8696456312', 'nikhil.arya@gmail.com', '2015kucp1013'),
('Sakshi Jain', 'Sunil Jain', 'Mahesh Nagar', 'Ajmer', 'Rajasthan', 'Female', 'Odd', 'ECE', '1996-10-25', '8094443313', 'sakshi.jain@gmail.com', '2015kuec2036');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `studentid` varchar(255) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'Book Now',
  `issuedate` date NOT NULL,
  `returndate` date NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`studentid`, `bookid`, `bookname`, `author`, `status`, `issuedate`, `returndate`, `image`) VALUES
('2015kucp1013', 'ALT218', 'Initial Java', 'Harry Potter', 'Return', '2016-11-20', '2016-11-26', 'images/ja'),
('0', 'BST456', 'Higher Engineering Mathemetics', 'B.S.Grewal', 'Book Now', '0000-00-00', '0000-00-00', 'images/h'),
('0', 'CIT102', 'Two States', 'Chetan Bhagat', 'Book Now', '0000-00-00', '0000-00-00', 'images/a'),
('0', 'CIT103', 'Revolution 2020', 'Chetan Bhagat', 'Return', '2016-11-20', '2016-11-26', 'images/b'),
('0', 'CST103', 'Computer Added Engineering', 'Sumit Arora', 'Book Now', '0000-00-00', '0000-00-00', 'images/f'),
('0', 'DST236', 'Database Management System', 'Korth', 'Book Now', '0000-00-00', '0000-00-00', 'images/k'),
('0', 'DST345', 'DSA Java', 'Robert Tammasia', 'Book Now', '0000-00-00', '0000-00-00', 'images/ds'),
('0', 'HIT101', 'The Philosopher''s Stone', 'J.K.Rowling', 'Return', '2016-11-20', '2016-11-26', 'images/c'),
('0', 'HIT102', 'The Order of the Phoenix', 'J.K.Rowling', 'Book Now', '2016-11-20', '2016-11-26', 'images/d'),
('0', 'HIT105', 'The Order of the Phoenix\r\n', 'J.K.Rowling', 'Return', '2016-11-19', '2016-11-25', 'images/e'),
('2015kuec2036', 'IMT123', 'Immortals Of Meluha', 'Amish', 'Return', '2016-11-20', '2016-11-26', 'images/im'),
('2015kuec2036', 'IWT871', 'If there were none', 'Agatha Christie', 'Return', '2016-11-20', '2016-11-26', 'images/t');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `memberID` int(11) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`memberID`, `studentid`, `name`, `course`, `password`) VALUES
(12, '0', '0', '0', 'cfcd208495d565ef66e7dff9f98764da'),
(30, '2015kucp1003', 'Megha Garg', 'B.tech', '13e96516ed6773efbe6c51dadb8e2856'),
(31, '2015kucp1010', 'vinita', 'B.tech', '91565556484b7c2d85871a2130248fce'),
(32, '2015kucp1006', 'Anita', 'B.tech', '83349cbdac695f3943635a4fd1aaa7d0'),
(33, '2015kucp1002', 'Arunabh Pandey', 'B.Tech', '13e96516ed6773efbe6c51dadb8e2856'),
(34, '2015kuec2036', 'Sakshi', 'B.tech', 'b31e31dac8811d89bb1cbfc384414aaf'),
(35, '2015kucp1013', 'NIKHIL ARYA', 'B.tech', '350d89c1cd6592bbbd1ed2e8a4f3ddba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`memberID`),
  ADD UNIQUE KEY `studentid` (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional`
--
ALTER TABLE `additional`
  ADD CONSTRAINT `additional_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `info` (`studentid`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `info` (`studentid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
