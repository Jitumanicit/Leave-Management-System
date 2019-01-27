-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:05 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `empl_id` varchar(15) NOT NULL,
  `name` varchar(111) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `image` varchar(111) DEFAULT NULL,
  `thumb_image` varchar(111) DEFAULT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `empl_id`, `name`, `department`, `designation`, `address`, `phone`, `username`, `email`, `password`, `image`, `thumb_image`, `role`) VALUES
(2, '111', 'Jitumani Bhagawati', 'Admin', '', 'Guwahati assam India 781310', '8876072223', 'Admin', 'jitumani@cit.ac.com', 'jitumani', 'profile_pic/1511277359.jpg', 'profile_pic/thumb_1511277359.jpg', 'admin'),
(21, '123', 'Amlan Jyoti Roy', 'CSE', '', 'Central Institute of Technology', '9435352914', 'Amlan', 'amlan@cit.ac.com', 'amlan', 'profile_pic/1511722694.jpg', 'profile_pic/thumb_1511722694.jpg', 'hod'),
(22, '124', 'Harsha Jit Singha', 'ECE', '', 'Central Institute of Technology', '8876072223', 'Harsha', 'harsha@cit.ac.in', 'harsha', 'profile_pic/1511723374.jpg', 'profile_pic/thumb_1511723374.jpg', 'faculty'),
(23, '1234562', 'newuser', 'CSE', '', '', '', 'neeww', 'new@git.com', 'password', NULL, NULL, 'hod'),
(24, '84468', 'user54', 'ECE', '', '', '', '5400', 'hgg@jn.com', 'password', NULL, NULL, 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `time` varchar(22) DEFAULT NULL,
  `start_date` varchar(111) DEFAULT NULL,
  `end_date` varchar(111) DEFAULT NULL,
  `no_of_days` varchar(11) DEFAULT NULL,
  `holidays` varchar(11) DEFAULT NULL,
  `totel_leave` varchar(11) DEFAULT NULL,
  `leave_type` varchar(11) DEFAULT NULL,
  `apply_date` varchar(20) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `status` varchar(12) NOT NULL,
  `token_id` varchar(111) DEFAULT NULL,
  `empl_id` varchar(22) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `department`, `time`, `start_date`, `end_date`, `no_of_days`, `holidays`, `totel_leave`, `leave_type`, `apply_date`, `reason`, `status`, `token_id`, `empl_id`) VALUES
(70, 'Anupam Sharma', 'CSE', NULL, '2017-11-21', '2017-11-24', '8', '2', '6', 'CL', '2017-11-21', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'Approved', NULL, '123'),
(71, 'Harsha Jit Singha', 'ECE', NULL, '2017-11-22', '2017-11-24', '4', '0', '4', 'CL', '2017-11-21', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'Reject', NULL, '124'),
(72, 'Harsha Jit Singha', 'ECE', NULL, '2017-11-21', '2017-11-24', '4', '0', '4', 'CL', '2017-11-21', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'approved', NULL, '124'),
(73, 'Anupam Sharma', 'CSE', NULL, '2017-11-21', '2017-11-24', '8', '2', '6', 'CL', '2017-11-21', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passa', 'Approved', NULL, '123'),
(74, 'Harsha Jit Singha', 'ECE', NULL, '2017-11-22', '2017-11-24', '5', '2', '3', 'EL', '2022-11-15', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages', 'Approved', NULL, '124'),
(75, 'Harsha Jit Singha', 'ECE', NULL, '2017-11-23', '2017-11-30', '7', '2', '5', 'CL', '2017-11-23', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door ', 'approved', NULL, '124'),
(76, 'Jitumani Bhagabati', 'CSE', NULL, '2017-11-23', '2017-11-25', '3', '0', '4', 'SL', '2017-11-23', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals A', 'Approved', NULL, '159'),
(77, 'Jitumani Bhagabati', 'CSE', NULL, '2017-11-23', '2017-11-30', '7', '2', '5', 'SL', '2017-11-23', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Al', '', NULL, '159'),
(83, 'Jitumani Bhagabati', 'CSE', NULL, '2017-11-23', '2017-11-30', '6', '2', '4', 'HPL', '2017-11-23', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', '', NULL, '159');

-- --------------------------------------------------------

--
-- Table structure for table `emi_table`
--

CREATE TABLE IF NOT EXISTS `emi_table` (
`id` int(11) NOT NULL,
  `empl_id` varchar(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `department` varchar(111) DEFAULT NULL,
  `leave_type` varchar(11) DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(111) DEFAULT NULL,
  `no_of_days` varchar(11) DEFAULT NULL,
  `holidays` varchar(11) DEFAULT NULL,
  `totel_leave` varchar(11) DEFAULT NULL,
  `apply_date` varchar(15) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `token_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `emi_table`
--

INSERT INTO `emi_table` (`id`, `empl_id`, `name`, `department`, `leave_type`, `start_date`, `end_date`, `no_of_days`, `holidays`, `totel_leave`, `apply_date`, `reason`, `status`, `token_id`) VALUES
(6, '123', 'Anupam Sharma', 'CSE', 'CL', '2017-11-21', '2017-11-24', '8', '2', '6', '2017-11-21', 'Bamar', '', NULL),
(7, '123', 'Anupam Sharma', 'CSE', 'CL', '2017-11-21', '2017-11-24', '8', '2', '6', '2017-11-21', 'Bamar', '', NULL),
(8, '124', 'Harsha Jit Singha', 'MCD', 'CL', '2017-11-22', '2017-11-24', '4', '0', '4', '2017-11-21', 'Bamar', '', NULL),
(9, '124', 'Harsha Jit Singha', 'MCD', 'CL', '2017-11-21', '2017-11-24', '4', '0', '4', '2017-11-21', 'Bamar', '', NULL),
(10, '123', 'Anupam Sharma', 'ME', 'SL', '2017-11-21', '2017-11-24', '8', '2', '6', '2017-11-21', 'Bamar', '', NULL),
(11, '124', 'Harsha Jit Singha', 'ME', 'EL', '2017-11-22', '2017-11-24', '5', '2', '3', '2022-11-15', 'Bamar', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emi_table`
--
ALTER TABLE `emi_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `emi_table`
--
ALTER TABLE `emi_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
