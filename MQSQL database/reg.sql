-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 02:22 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE IF NOT EXISTS `admindetails` (
  `adminID` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`adminID`, `uname`, `password`) VALUES
(1, 'admin', '123'),
(2, 'shan', '123455555'),
(7, 'janani', '111'),
(9, 'prabhath', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `appoimentID` int(20) NOT NULL AUTO_INCREMENT,
  `license_Plate` varchar(20) NOT NULL,
  `package` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `totalPrice` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`appoimentID`),
  KEY `license_Plate` (`license_Plate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoimentID`, `license_Plate`, `package`, `date`, `time`, `message`, `totalPrice`, `status`) VALUES
(5, 'CAA-7581', 'Basic Package Rs.4000.00', '2024-03-11', '5 (2.00 a.m - 3.00 p.m)', 'Tire replacement', '9050', 'completed'),
(6, 'CAL-9595', 'Standard Package Rs.10000.00', '2024-03-11', '4 (12.00 p.m - 1.00 p.m)', 'Engine tune-up', NULL, 'pending'),
(7, 'CAL-9595', 'Basic Package Rs.4000.00', '2024-03-12', '6 (3.00 a.m - 4.00 p.m)', 'good', '9550', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `NI` varchar(20) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `addre` varchar(300) NOT NULL,
  `num` varchar(20) NOT NULL,
  `em` varchar(100) NOT NULL,
  `pass1` varchar(50) NOT NULL,
  PRIMARY KEY (`NI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`NI`, `first`, `last`, `gen`, `addre`, `num`, `em`, `pass1`) VALUES
('991222065', 'prabhath', 'shanka', 'Male', 'Baddegama', '0916398091', 'shanka@gmail.com', '123'),
('991222065V', 'shanka', 'ashan', 'Male', 'mathara', '0776854210', 'shan@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `servicerecord`
--

CREATE TABLE IF NOT EXISTS `servicerecord` (
  `SRID` int(20) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `licensePlate` varchar(20) DEFAULT NULL,
  `serviceID` int(20) DEFAULT NULL,
  `appoimentID` int(20) DEFAULT NULL,
  PRIMARY KEY (`SRID`),
  KEY `licensePlate` (`licensePlate`),
  KEY `serviceID` (`serviceID`),
  KEY `appoimentID` (`appoimentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `servicerecord`
--

INSERT INTO `servicerecord` (`SRID`, `date`, `licensePlate`, `serviceID`, `appoimentID`) VALUES
(18, '2024-03-10', 'CAA-7581', 2, 5),
(19, '2024-03-10', 'CAA-7581', 3, 5),
(20, '2024-03-10', 'CAL-9595', 1, 7),
(21, '2024-03-10', 'CAL-9595', 2, 7),
(22, '2024-03-10', 'CAL-9595', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `serviceID` int(20) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(500) NOT NULL,
  `servicePrice` int(50) NOT NULL,
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `serviceName`, `servicePrice`) VALUES
(1, 'Body wash (All Cars)', 500),
(2, 'Interior wash (All cars)', 550),
(3, 'Engine oil (TOYOTA Car (4l))', 8500),
(4, 'Body wash (All Van)', 650),
(5, 'Interior wash (All Van)', 750),
(6, 'Wheel Alignment (car)', 1700),
(7, 'Wheel Alignment  (Van)', 1950);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `license_Plate` varchar(20) NOT NULL,
  `NI` varchar(20) NOT NULL,
  `model` varchar(100) NOT NULL,
  `manufacturedYear` int(10) NOT NULL,
  PRIMARY KEY (`license_Plate`),
  KEY `NI` (`NI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`license_Plate`, `NI`, `model`, `manufacturedYear`) VALUES
('CAA-7581', '991222065V', 'TOYOTA', 2019),
('CAD-9845', '991222065', 'MASDA', 2017),
('CAL-9595', '991222065V', 'PANDA', 2014),
('CBA-7581', '991222065V', 'ALTO', 2021),
('CVA-2531', '991222065', 'BMW', 2015);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`license_Plate`) REFERENCES `vehicle` (`license_Plate`);

--
-- Constraints for table `servicerecord`
--
ALTER TABLE `servicerecord`
  ADD CONSTRAINT `servicerecord_ibfk_1` FOREIGN KEY (`licensePlate`) REFERENCES `vehicle` (`license_Plate`),
  ADD CONSTRAINT `servicerecord_ibfk_2` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`),
  ADD CONSTRAINT `servicerecord_ibfk_3` FOREIGN KEY (`appoimentID`) REFERENCES `appoinment` (`appoimentID`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`NI`) REFERENCES `registration` (`NI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
