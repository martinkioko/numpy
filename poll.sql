-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 08:59 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--
CREATE DATABASE IF NOT EXISTS `poll` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `poll`;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `cand_id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `fullname`, `position`, `about`, `votecount`) VALUES
(1, 'MOHAMMED HUSSEIN', 'Chairman', 'GREAT MINDS', 4),
(2, 'ABDI ODMAN', 'chairman', 'DREAM IT', 1),
(3, 'DUKE MAKANA', 'vice', 'VISIONARY', 2),
(4, 'NAFISA NOOR', 'vice', 'AM YOURS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'student',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `rank`, `status`) VALUES
(17, 'ifm', '0aeb58794c29d040e7da234b563a7574', 'student', 'ACTIVE'),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'ACTIVE'),
(31, 'Mercy', 'e10adc3949ba59abbe56e057f20f883e', 'candidate', 'ACTIVE'),
(30, 'martin', 'e10adc3949ba59abbe56e057f20f883e', 'candidate', 'ACTIVE'),
(29, 'Halake ', 'e10adc3949ba59abbe56e057f20f883e', 'candidate', 'ACTIVE'),
(25, 'kamau', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'ACTIVE'),
(26, 'joshua', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'ACTIVE'),
(32, 'James ', 'e10adc3949ba59abbe56e057f20f883e', 'candidate', 'ACTIVE'),
(33, 'ken', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'ACTIVE'),
(34, 'AMBASA', '733a96638a744da75e980e3a3e540c1e', 'student', 'ACTIVE'),
(35, 'job', '54a071d98d3a73ad903cf24f3c449efe', 'student', 'ACTIVE'),
(36, 'caleb', '65c95a67276bed0e39ae4315f521180c', 'student', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qn_id` int(255) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(255) NOT NULL,
  `cand_id` int(10) NOT NULL,
  `qn` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  PRIMARY KEY (`qn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qn_id`, `display_name`, `cand_id`, `qn`, `ans`) VALUES
(5, 'juma', 1, 'what  wil you improve in kemu', ''),
(6, 'ken', 2, 'what will you dofor us', 'improve your study');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yos` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `firstname`, `lastname`, `username`, `course`, `yos`, `status`) VALUES
('787988', 'Mercy ', ' mueni', 'Mercy', 'BCS', '2', 'NOTVOTED'),
('3556', 'caleb', 'ndemo', 'caleb', 'BCS', '2', 'VOTED'),
('684979484', 'Halake ', 'wako', 'Halake ', 'BCS', '3', 'NOTVOTED'),
('4321', 'Job', 'ndemo', 'job', 'IT', '4', 'VOTED'),
('1234', 'BEN', 'AMBASA', 'AMBASA', 'BCS', '1', 'VOTED'),
('56677', 'James ', ' mwangi', 'James ', 'BCS', '3', 'NOTVOTED'),
('13435', 'ken', 'kenn', 'ken', 'BCS', '1', 'NOTVOTED');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
