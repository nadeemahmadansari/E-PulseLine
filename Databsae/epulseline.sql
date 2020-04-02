-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 06:59 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epulseline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `quesid` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ansid`, `quesid`, `patid`, `answer`, `date`) VALUES
(1, 1, 1, 'Scripting Language', '2019-07-22'),
(2, 1, 1, 'Server Side', '2019-07-22'),
(3, 2, 1, 'Programming Language', '2019-07-22'),
(4, 4, 1, 'Rasmus Lerdorf', '2019-07-22'),
(5, 1, 5, 'Server side', '2019-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appid`, `patid`, `docid`, `date`, `status`) VALUES
(1, 5, 1, '2019-07-20', 'y'),
(2, 1, 2, '2019-07-23', 'n'),
(3, 1, 1, '2019-07-26', 'y'),
(4, 1, 3, '2019-07-21', 'y'),
(5, 1, 6, '2019-07-25', 'y'),
(6, 1, 6, '2019-07-27', 'y'),
(7, 1, 6, '2019-07-31', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `conid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`conid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`conid`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'Nadeem', 'nadeem@gmail.com', '99182133', 'dhusadysardyasdy', '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `fees` int(11) NOT NULL,
  `speciality` varchar(20) NOT NULL,
  `timing` varchar(15) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`docid`, `name`, `gender`, `email`, `password`, `address`, `mobile`, `fees`, `speciality`, `timing`, `pic`, `date`, `status`) VALUES
(1, 'Dr.Nadeem Ansari', 'Male', 'nadeem@gmail.com', '12345', 'Kursi Road Aliganj', '8115718157', 200, 'Opthomologist', '10 AM to 5PM', 'Doctor.jpg', '2019-07-18', 'y'),
(2, 'Dr.Abhishek Singh', 'Male', 'abhishek@gmail.com', 'abhishek', 'Sultanpur', '9450949754', 120, 'Physician', '10 AM to 1 PM', 'Doctor4.jpg', '2019-07-18', 'y'),
(3, 'Dr.Shriyansh Shukla', 'Male', 'shriyansh@gmail.com', 'shriyansh', 'Lucknow', '7007710063', 250, 'Neuorlogist', '12 PM to 5PM', 'Doctor2.jpg', '2019-07-18', 'n'),
(7, 'Dr.Faiza', 'Female', 'faiza@gmail.com', 'faiza', 'Lucknow', '9866532477', 200, 'Cardiologist', '10 AM to 12 PM', 'Doctor3.jpg', '2019-07-18', 'n'),
(6, 'Dr.Abid', 'Male', 'abid@gmail.com', 'abid', 'Aminabad', '9886453215', 220, 'Orthopedic', '12 PM to 2 PM', 'Doctor5.jpg', '2019-07-18', 'n'),
(9, 'DR.Nitin', 'Male', 'nitin@gmail.com', 'nitin', 'Delhi', '9765432187', 210, 'Opthomologist', '10 AM to 5PM', 'Doctor4.jpg', '2019-07-23', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fieldid`, `patid`, `feedback`, `date`) VALUES
(1, 1, 'Good', '2019-07-17'),
(2, 1, 'Very Good', '2019-07-17'),
(3, 5, 'very very very very good', '2019-07-21'),
(4, 1, 'nadeem', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`patid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `age`, `address`, `date`, `status`) VALUES
(1, 'Nadeem', 'i a ansari', 'Male', 'nadeem@gmail.com', '123', '991827897', 20, 'Kursi road ALignaj', '2019-07-15', 'y'),
(4, 'Yousuf', 'i a ansari', 'Male', 'yousuf@gmail.com', 'yousuf', '123644789', 14, 'Lucknow', '2019-07-16', 'y'),
(5, 'Abhishek', 'Vijai Kumar Singh', 'Male', 'abhishek@gmail.com', 'abhishek', '45612398', 20, 'Sultanpur', '2019-07-16', 'y'),
(6, 'Abid', 'A.Ansari', 'Male', 'abid@gmail.com', 'abid', '987654321', 22, 'Aminabad', '2019-07-16', 'y'),
(7, 'Osama', 'Qamar', 'Male', 'osama@gmail.com', 'osama', '987654321', 21, 'Muradabad', '2019-07-16', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `quesid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `question` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`quesid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`quesid`, `patid`, `question`, `date`) VALUES
(1, 1, 'What is PHP?', '2019-07-22'),
(2, 1, 'What is JAVA?', '2019-07-22'),
(3, 5, 'What is JavaScript?', '2019-07-22'),
(4, 5, 'Father of PHP?', '2019-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remark`
--

CREATE TABLE IF NOT EXISTS `tbl_remark` (
  `remid` int(11) NOT NULL AUTO_INCREMENT,
  `repid` int(11) NOT NULL,
  `remark` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`remid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_remark`
--

INSERT INTO `tbl_remark` (`remid`, `repid`, `remark`, `date`) VALUES
(1, 1, 'nadeem', '2019-07-23'),
(2, 2, 'jasidjaskdjaskl', '2019-07-23'),
(3, 0, '', '2019-07-23'),
(4, 6, 'dasjkdj', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE IF NOT EXISTS `tbl_report` (
  `repid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  `report` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`repid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`repid`, `patid`, `docid`, `report`, `date`) VALUES
(1, 1, 1, 'CT20192629363_Application.pdf', '2019-07-23'),
(2, 1, 1, 'Nadeem_CV.pdf', '2019-07-23'),
(6, 1, 1, 'Microsoft Word - Database Task_02.docx.pdf', '2019-07-23');
