-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 06:58 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sumbong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(1, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-06', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'admin@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'minimalism-1644666519306-6515.jpg', '2022-04-17', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `complainants`
--

CREATE TABLE IF NOT EXISTS `complainants` (
`complainant_Id` int(11) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_mname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `date_registered` date NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Complainant'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `complainants`
--

INSERT INTO `complainants` (`complainant_Id`, `c_fname`, `c_mname`, `c_lname`, `c_suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(39, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-05-11', 21, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'complainants@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', '4297150.jpg', '2022-05-23', 'Complainant'),
(40, 'fdsfdsfdsfs', 'fds', 'dfs', '', 'Male', '2022-06-15', 2, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12dsfsf@gmail.com', '09359428963', '4124bc0a9335c27f086f24ba207a4912', 'minimalism-1644666519306-6515.jpg', '2022-06-03', 'Complainant'),
(41, 'Erwin', 'Cabag', 'Son', 's', 'Male', '2022-09-14', 34, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '09359428963', '3691308f2a4c2f6983f2880d32e29c84', 'user.png', '2022-09-14', 'Complainant'),
(42, 'Erwin', 'Cabag', 'Son', '43', 'Male', '2022-09-09', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '09359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'user.png', '2022-09-14', 'Complainant'),
(43, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-08-29', 3, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12dsadsada@gmail.com', '09359428963', '3691308f2a4c2f6983f2880d32e29c84', 'user.png', '2022-09-14', 'Complainant');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
`driver_Id` int(11) NOT NULL,
  `d_fname` varchar(255) NOT NULL,
  `d_mname` varchar(255) NOT NULL,
  `d_lname` varchar(255) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `d_license` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_Id`, `d_fname`, `d_mname`, `d_lname`, `d_address`, `d_license`, `qr_code`) VALUES
(1, 'Erwin', 'Cabag', 'Son', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '1234', '../images-qr-codes/632157ce0a4c4.png');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
`police_Id` int(11) NOT NULL,
  `p_fname` varchar(255) NOT NULL,
  `p_mname` varchar(255) NOT NULL,
  `p_lname` varchar(255) NOT NULL,
  `p_suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Police'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`police_Id`, `p_fname`, `p_mname`, `p_lname`, `p_suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(45, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-09-12', 1, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'police@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', '6207ad7e34af5.jpg', '2022-09-12', 'Police');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`report_Id` int(11) NOT NULL,
  `reporter_Id` int(11) NOT NULL,
  `report_topic` varchar(255) NOT NULL,
  `incident_address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `report_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `video_links`
--

CREATE TABLE IF NOT EXISTS `video_links` (
`link_Id` int(11) NOT NULL,
  `police_Id` int(11) NOT NULL,
  `complainant_Id` int(11) NOT NULL,
  `link_address` text NOT NULL,
  `time_sent` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not done'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `video_links`
--

INSERT INTO `video_links` (`link_Id`, `police_Id`, `complainant_Id`, `link_address`, `time_sent`, `status`) VALUES
(6, 45, 39, 'https://meet.jit.si/iX9lGvL9aVF73kXNPfyLmWsT0envhf', '16:27', 'Not done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `complainants`
--
ALTER TABLE `complainants`
 ADD PRIMARY KEY (`complainant_Id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
 ADD PRIMARY KEY (`driver_Id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
 ADD PRIMARY KEY (`police_Id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`report_Id`);

--
-- Indexes for table `video_links`
--
ALTER TABLE `video_links`
 ADD PRIMARY KEY (`link_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complainants`
--
ALTER TABLE `complainants`
MODIFY `complainant_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
MODIFY `driver_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
MODIFY `police_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `report_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `video_links`
--
ALTER TABLE `video_links`
MODIFY `link_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
