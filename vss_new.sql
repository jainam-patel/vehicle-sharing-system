-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 10:12 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vss_new`
--
CREATE DATABASE IF NOT EXISTS `vss_new` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vss_new`;

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE IF NOT EXISTS `reg_user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Department` text NOT NULL,
  `Gender` text NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`User_ID`, `Name`, `Phone`, `Email`, `Password`, `Department`, `Gender`) VALUES
(8, 'Elvis Russo', '1', 'abc@123.com', '1', 'Testing', 'male'),
(22, 'jeel', '1111111111', 'abc@abc.com', '11111111', 'Devops', 'female'),
(28, 'Jin Romero', '+1 (606) 845-5816', 'rolu@mailinator', 'Pa$$w0rd!', 'Devops', 'female'),
(29, 'Vaughan Pollard', '+1 (976) 549-7919', 'lyjekizaj@maili', 'Pa$$w0rd!', 'Devops', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
