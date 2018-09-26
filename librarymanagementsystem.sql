-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 08:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- CREATE DATABASE librarymanagementsystem;


-- Database: `librarymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`admin_id`, `adminname`, `password`) VALUES
(1, 'harsha', '1234'),
(15, 'smruthi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookissues`
--

CREATE TABLE `bookissues` (
  `issue_id` int(11) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `Issues` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookslist`
--

CREATE TABLE `bookslist` (
  `id` int(11) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `category` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookslist`
--

INSERT INTO `bookslist` (`id`, `book_id`, `authorname`, `bookname`, `category`) VALUES
(1, '11112', 'qqqq', 'qqqq', 'Magazine'),
(2, '123452232', 'dsfgf', 'asdfg', 'Journal'),
(3, '1212', 'adad', 'asas', 'Novel'),
(9, '1212', 'xyz', 'xyz', 'Magazine'),
(10, '1122', 'xxa', 'xxa', 'Novel'),
(11, '1112', 'asd', 'asd', 'Journal'),
(12, '1221', 'qwert', 'qwert', 'Journal'),
(13, '12112', 'qserg', 'qserg', 'Magazine'),
(14, '2211', 'qaswse', 'qaswse', 'Journal'),
(15, '2212', 'qaswse', 'qaswse', 'Novel'),
(16, '2111', 'qaaae', 'qaaae', 'Novel'),
(17, '2222', 'wse', 'wse', 'Journal'),
(18, '122112', 'qwewq', 'qwewq', 'Journal'),
(19, '1222211', 'qaqsqa', 'qaqsqa', 'Magazine');

-- --------------------------------------------------------

--
-- Table structure for table `orderedbooks`
--

CREATE TABLE `orderedbooks` (
  `id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `mainname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `streetaddress` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE `userstable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `streetaddress` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`id`, `username`, `password`, `name`, `contact`, `streetaddress`, `landmark`, `postalcode`, `image`) VALUES
(1, 'harsha reddy', 'qwerty', 'harsha reddy', '9618797368', '001, ABC apartments', 'near XYZ hospital', '515002', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookslist`
--
ALTER TABLE `bookslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderedbooks`
--
ALTER TABLE `orderedbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookslist`
--
ALTER TABLE `bookslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderedbooks`
--
ALTER TABLE `orderedbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
