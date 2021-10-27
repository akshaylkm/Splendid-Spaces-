-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2019 at 04:34 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `splendid`
--

-- --------------------------------------------------------

--
-- Table structure for table `3dfront`
--

CREATE TABLE IF NOT EXISTS `3dfront` (
  `frontid` int(11) NOT NULL AUTO_INCREMENT,
  `planname` varchar(50) NOT NULL,
  `plotsize` int(11) NOT NULL,
  `dimension` varchar(10) NOT NULL,
  `floor` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  PRIMARY KEY (`frontid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `3dfront`
--

INSERT INTO `3dfront` (`frontid`, `planname`, `plotsize`, `dimension`, `floor`, `bedroom`, `plan`) VALUES
(1, 'Double Storey Elevation', 2000, '40*50', 2, 5, '8373Modern_Double.jpg'),
(2, 'Double Storey Elevation', 1000, '25*40', 4, 2, '9645Double_storey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `3d_cust_order`
--

CREATE TABLE IF NOT EXISTS `3d_cust_order` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `planid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `3d_cust_order`
--

INSERT INTO `3d_cust_order` (`oid`, `planid`, `cid`, `status`) VALUES
(2, 2, 1, 'Booked'),
(3, 1, 1, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE IF NOT EXISTS `customer_reg` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`cid`, `cname`, `address`, `district`, `phone`, `email`, `password`) VALUES
(1, 'Nevin', 'Nevin Home', '7', '9638527410', 'nevin@gmail.com', '123456'),
(3, 'safrin', 'pazh house', '11', '8547532288', 'safrin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customizedplan`
--

CREATE TABLE IF NOT EXISTS `customizedplan` (
  `customid` int(11) NOT NULL AUTO_INCREMENT,
  `plotsize` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `query` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`customid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customizedplan`
--

INSERT INTO `customizedplan` (`customid`, `plotsize`, `plan`, `query`, `cid`, `status`) VALUES
(2, 2000, 'inner-banner.jpg', 'I have required 4 bhk', 1, 'uploaded');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(15) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `dname`) VALUES
(1, 'Trivandrum'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkadu'),
(10, 'Malappuram'),
(11, 'Kozhikkode'),
(12, 'Wayanadu'),
(13, 'Kannur'),
(14, 'Kasargode');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `fdate` varchar(15) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`, `utype`) VALUES
('nevin@gmail.com', '123456', 'Customer'),
('admin@gmail.com', 'admin', 'Admin'),
('architect@gmail.com', '1234567', 'Staff'),
('architect@gmail.com', '123456', 'Customer'),
('safrin@gmail.com', '123456', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `readymadeplan`
--

CREATE TABLE IF NOT EXISTS `readymadeplan` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `planname` varchar(50) NOT NULL,
  `plotsize` int(11) NOT NULL,
  `dimension` varchar(10) NOT NULL,
  `floor` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `readymadeplan`
--

INSERT INTO `readymadeplan` (`rid`, `planname`, `plotsize`, `dimension`, `floor`, `bedroom`, `plan`) VALUES
(2, 'Triple storey floor plan', 1000, '25*40', 2, 5, '8285Triple_storey.jpg'),
(3, 'Commercial  Floor Plan', 8400, '70*120', 0, 2, '2324Commercial_floor_.jpg'),
(4, 'Apartment Floor Plan', 4800, '80x60', 5, 1, '7253Appartment_Floor_Plan.jpg'),
(5, 'Simplex Floor Plan', 2400, '40X60', 1, 1, '2773Simplex_Floor_Plan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ready_cust_order`
--

CREATE TABLE IF NOT EXISTS `ready_cust_order` (
  `roid` int(11) NOT NULL AUTO_INCREMENT,
  `planid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`roid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ready_cust_order`
--

INSERT INTO `ready_cust_order` (`roid`, `planid`, `cid`, `status`) VALUES
(4, 2, 1, 'Booked'),
(5, 2, 1, 'Booked'),
(7, 2, 1, 'Booked'),
(8, 2, 3, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`) VALUES
(1, 'Readymade Floor Plans'),
(2, '3D Front Elevation'),
(3, 'Customized Floor Plans'),
(4, 'Vaastu Consultancy');

-- --------------------------------------------------------

--
-- Table structure for table `staff_allot`
--

CREATE TABLE IF NOT EXISTS `staff_allot` (
  `allot_id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`allot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_allot`
--

INSERT INTO `staff_allot` (`allot_id`, `bid`, `sid`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_custom_plan`
--

CREATE TABLE IF NOT EXISTS `staff_custom_plan` (
  `scustid` int(11) NOT NULL AUTO_INCREMENT,
  `customid` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `query` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`scustid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_custom_plan`
--

INSERT INTO `staff_custom_plan` (`scustid`, `customid`, `plan`, `query`, `sid`, `cid`) VALUES
(1, 2, 'a2.png', 'asvsfvev', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE IF NOT EXISTS `staff_reg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`sid`, `sname`, `email`, `phone`, `password`) VALUES
(1, 'architect one', 'architect@gmail.com', '7907664456', '1234567');
