-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2021 at 12:37 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volten_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `stid` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` char(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` char(11) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventapprove`
--

DROP TABLE IF EXISTS `eventapprove`;
CREATE TABLE IF NOT EXISTS `eventapprove` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `stime` varchar(20) NOT NULL,
  `etime` varchar(20) NOT NULL,
  `content` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `stime` varchar(20) DEFAULT NULL,
  `etime` varchar(20) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_history`
--

DROP TABLE IF EXISTS `event_history`;
CREATE TABLE IF NOT EXISTS `event_history` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `stime` varchar(20) DEFAULT NULL,
  `etime` varchar(20) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

DROP TABLE IF EXISTS `organizers`;
CREATE TABLE IF NOT EXISTS `organizers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` char(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orgapprove`
--

DROP TABLE IF EXISTS `orgapprove`;
CREATE TABLE IF NOT EXISTS `orgapprove` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` char(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contactno` char(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
