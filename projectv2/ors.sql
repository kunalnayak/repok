-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 09:12 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('KUNAL NAYAK', 'kunal', 'kunal123'),
('ROHAN NETALKAR', 'rohan', 'rohan123'),
('ROHAN NETALKAR', 'rohan', 'rohan123'),
('ROHAN NETALKAR', 'rohan', 'rohan123'),
('SHREYAS PALVE', 'shreyas', 'shreyas123'),
('SHREYAS PALVE', 'shreyas', 'shreyas123');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone no` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobsearch`
--

CREATE TABLE `jobsearch` (
  `company_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobsearch`
--

INSERT INTO `jobsearch` (`company_name`, `designation`, `salary`, `exp`, `location`) VALUES
('L&T', 'MANAGER', 60000, 2, 'INDIA'),
('ACCENTURE', 'MANAGER', 56000, 3, 'INDIA'),
('NAYAK AND CO LTD', 'MANAGER', 100000, 10, 'INDIA'),
('MICROSOFT CORPORATION', 'PRESIDENT', 2000000, 15, 'DELHI,INDIA'),
('TCS', 'MANAGER', 50000, 5, 'INDIA'),
('TCS', 'PRESIDENT', 1000000, 15, 'INDIA'),
('APPLE', 'COUNTRY HEAD', 1500000, 10, 'INDIA'),
('INFOTECH', 'MANAGER', 70000, 2, 'INDIA'),
('TCS', 'MANAGER', 60000, 2, 'INDIA'),
('ACCENTURE', 'MANAGER', 70000, 2, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jid`, `name`, `dob`, `gender`, `address`, `phoneno`, `email`, `username`, `password`) VALUES
(1, 'ssf', 'fdvsf', 'male', 'dvfasfdf', 213123, 'fasfasf@fsf', 'dafsdf', '123'),
(2, 'kunal', '19/10/1996', 'male', 'sgdfnfsbfn czc\r\nasgdhdvd\r\ns\r\ngsdbd', 2147483647, 'na@khdkw', 'kunal', '123'),
(3, 'kunal', '19/10/1996', 'male', 'dwd', 13131, 'nayakkunal88@gmail.com', 'kunal', '123'),
(4, 'rohan', '12', 'male', '414', 24, 'etg@dv', 'rohan', '123'),
(5, 'rohan', '10/12/1995', 'male', 'fsdgdhdh', 98201654, 'qwee@sd.hdh', 'rohan', '123'),
(6, 'gjhgjk', '12', 'male', '12', 12, '12@12', '12', '123'),
(7, 'wxwxxw', 'fhfhj', 'male', 'egdewgdjg3ukedded', 2147483647, 'w2swe@fhgf.gg', 'kunalnayak_19', '123'),
(8, 'wxwxxw', 'fhfhj', 'male', 'egdewgdjg3ukedded', 2147483647, 'w2swe@fhgf.gg', 'kunalnayak_19', '123'),
(9, 'wedewf3rf', 'ederfrf', 'male', 'eferfefwg', 2147483647, 'qwsggh@fcgf.h', 'kkkunal', '123'),
(10, 'kkkk', 'kkkkk', 'male', 'gbfgbnfngnnhgnfg', 2147483647, 'vsdfvd@fcg.hjgfhf', 'kunalkk', '123'),
(11, 'lllll', 'llllll', 'male', 'ggjhgvukhukhkuhvsv', 2147483647, 'hjghjg@gfgd.ghfg', 'lion', '123'),
(12, 'LION', 'lion', 'male', 'lion', 2147483647, 'lion@lion', 'lion', 'lion'),
(13, 'cefvwfv', 'qqrefer', 'male', 'wecxevevwer', 2147483647, 'fdfvfv@fgcgc.f', '1233', '123'),
(14, 'dcedcedc', 'xwdcecd', 'male', 'vhfhgghfhgf', 2147483647, 'ffhff@cgcgh.ghf', '12345', '12345'),
(15, '123', '123', 'male', 'jhfsfkfwyf', 2147483647, 'klkljilj@gcghh.hghg', '1234', '123'),
(16, '1234', '1234', 'male', 'ghfjtdf', 2147483647, 'ghfhgfgf@gfcgcg.hgh', '123', '123'),
(17, 'fsaf', 'ad', 'male', 'sasas', 2147483647, 'as@sd', 'ds', '123'),
(18, '123', '122131345', 'male', 'sxdcvcfvafv', 2147483647, 'sxewdxwwq@fdfg', 'dwrfereg', '123'),
(19, 'hgffcydqjywdvyu', 'jhgyu2tdyu', 'male', 'xerferfqre', 2147483647, 'efqerfgtg@cc', '123344', '123'),
(20, 'vHJx', 'DA', 'male', 'DADA', 2147483647, 'AA@DGSD.FED', 'FAFDA', '123'),
(21, 'pooja', '19/10/1996', 'female', 'stark tower', 2147483647, 'pooja@dean.com', 'pooja', 'dean'),
(22, 'pooja', '21/3/1996', 'female', 'jhjfhfgh', 2147483647, 'cgfg@gfg.gg', 'kunal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `rid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`rid`, `name`, `phoneno`, `email`, `username`, `password`) VALUES
(1, 'kunal', 131232424, 'nayakkunal88@gmail.com', 'kunalnayak', '123'),
(2, 'kunal ', 2147483647, 'nayakkunal88@gmail.com', 'kunal', '123'),
(3, 'asdasafas1212', 2147483647, 'dsa@efw', 'as', '123'),
(4, 'DQ', 1212, '12@12.F', 'FSF', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `rid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
