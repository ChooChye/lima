-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2013 at 06:31 PM
-- Server version: 5.5.32-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbmasiap_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dailyreports`
--

CREATE TABLE IF NOT EXISTS `Dailyreports` (
  `ProgramCode` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `VNos` varchar(100) NOT NULL,
  `VGross` varchar(100) NOT NULL,
  `VLBCom` varchar(100) NOT NULL,
  `VNet` varchar(100) NOT NULL,
  `MNos` varchar(100) NOT NULL,
  `MGross` varchar(100) NOT NULL,
  `MLBCom` varchar(100) NOT NULL,
  `MNet` varchar(100) NOT NULL,
  `ANos` varchar(100) NOT NULL,
  `AGross` varchar(100) NOT NULL,
  `ALBCom` varchar(100) NOT NULL,
  `ANet` varchar(100) NOT NULL,
  `DNos` varchar(100) NOT NULL,
  `DGross` varchar(100) NOT NULL,
  `DLBCom` varchar(100) NOT NULL,
  `DNet` varchar(100) NOT NULL,
  `CHNos` varchar(100) NOT NULL,
  `CHGross` varchar(100) NOT NULL,
  `CHLBCom` varchar(100) NOT NULL,
  `CHNet` varchar(100) NOT NULL,
  `CANos` varchar(100) NOT NULL,
  `CAGross` varchar(100) NOT NULL,
  `CALBCom` varchar(100) NOT NULL,
  `CANet` varchar(100) NOT NULL,
  `TNos` varchar(100) NOT NULL,
  `TGross` varchar(100) NOT NULL,
  `TLBCom` varchar(100) NOT NULL,
  `TNet` varchar(100) NOT NULL,
  `Verified` varchar(100) NOT NULL,
  `Approved` varchar(100) NOT NULL,
  PRIMARY KEY (`ProgramCode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dailyreports`
--

INSERT INTO `Dailyreports` (`ProgramCode`, `Date`, `VNos`, `VGross`, `VLBCom`, `VNet`, `MNos`, `MGross`, `MLBCom`, `MNet`, `ANos`, `AGross`, `ALBCom`, `ANet`, `DNos`, `DGross`, `DLBCom`, `DNet`, `CHNos`, `CHGross`, `CHLBCom`, `CHNet`, `CANos`, `CAGross`, `CALBCom`, `CANet`, `TNos`, `TGross`, `TLBCom`, `TNet`, `Verified`, `Approved`) VALUES
('3010', '01/01/2011', '2', '1056', '26.4', '1029.6', '1', '528', '13.2', '514.8', '0', '0', '0', '0', '0', '0', '0', '0', '1', '528', '0', '528', '1', '528', '0', '528', '5', '2640', '39.6', '2600.4', 'My Assistant', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `passwd`) VALUES
(3, 'Lim', 'CS', 'cslimadmin', '39cde7417695b769be460d682a2ae48d'),
(2, 'Muhammad Asim', 'Mughal', 'asim', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Nathan', 'Lim', 'nathan', 'fa7baea6d4614895e0aa7193563da8c7'),
(6, 'Mehroz', 'Qadri', 'mehroz', 'e6ee62cae4cff889ccdc7e4651ea833b'),
(7, 'Muhammad', 'Arsalan', 'arsalan', '1807ff58c4ae5257553c9f741d89b207');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `ProgramCode` varchar(100) NOT NULL,
  `MembershipNo` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Senton` varchar(100) NOT NULL,
  `Rate` varchar(100) NOT NULL,
  `Office` varchar(100) NOT NULL,
  `Home` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postcode` varchar(100) NOT NULL,
  `Manager` varchar(100) NOT NULL,
  `SalesPerson` varchar(100) NOT NULL,
  `SName` varchar(100) NOT NULL,
  `CNo` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `VCCNo` varchar(100) NOT NULL,
  `VExp` varchar(100) NOT NULL,
  `VCVV` varchar(100) NOT NULL,
  `MCCNo` varchar(100) NOT NULL,
  `MExp` varchar(100) NOT NULL,
  `MCVV` varchar(100) NOT NULL,
  `ACCNo` varchar(100) NOT NULL,
  `AExp` varchar(100) NOT NULL,
  `ACVV` varchar(100) NOT NULL,
  `CName` varchar(100) NOT NULL,
  `Cash` varchar(100) NOT NULL,
  `CHName` varchar(100) NOT NULL,
  `Cheque` varchar(100) NOT NULL,
  PRIMARY KEY (`ProgramCode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`ProgramCode`, `MembershipNo`, `Name`, `Date`, `Senton`, `Rate`, `Office`, `Home`, `Address`, `City`, `Postcode`, `Manager`, `SalesPerson`, `SName`, `CNo`, `type`, `VCCNo`, `VExp`, `VCVV`, `MCCNo`, `MExp`, `MCVV`, `ACCNo`, `AExp`, `ACVV`, `CName`, `Cash`, `CHName`, `Cheque`) VALUES
('888', '888', 'Mughal', '1-1-2013', '1-1-2013', '4', '', 'Home', 'Cheras', 'Cheras', '56100', 'Asim', 'Maaz', 'Ibrahim', '123456789987', 'Visa', '0000123400001234', '10/14', '123', '', '', '', '', '', '', '', '', '', ''),
('1234', '005', 'test', '18-11-2013', '21-11-2-13', '4', '', 'Home', 'test1', 'test', '123', 'maaz', 'jackie', 'asim', '1234567890', 'Visa', '1234567890123456', '10/13', '008', '', '', '', '', '', '', '', '', '', ''),
('111', '009', 'Asim', '18-11-2013', '21-11-2-13', '4', 'Office', '', 'test', 'test', '123', 'maaz', 'jackie', 'asim', '1234567890', 'Visa', '1111222233334444', '10/14', '880', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `plus_key`
--

CREATE TABLE IF NOT EXISTS `plus_key` (
  `userid` varchar(10) NOT NULL,
  `pkey` varchar(32) NOT NULL,
  `time` varchar(10) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plus_key`
--

INSERT INTO `plus_key` (`userid`, `pkey`, `time`, `status`) VALUES
('darvesh786', '451207bddeca3663d3109dfca0686007', '1385029698', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `plus_login`
--

CREATE TABLE IF NOT EXISTS `plus_login` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `userid` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tm` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(3) NOT NULL DEFAULT 'ON'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plus_signup`
--

CREATE TABLE IF NOT EXISTS `plus_signup` (
  `mem_id` int(3) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `sex` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `plus_signup`
--

INSERT INTO `plus_signup` (`mem_id`, `userid`, `password`, `email`, `name`, `sex`) VALUES
(2, 'asim', 'e10adc3949ba59abbe56e057f20f883e', 'asim_kdu@yahoo.com', 'Darvesh', 'male'),
(3, 'asim123', '827ccb0eea8a706c4c34a16891f84e7b', 'asim.pwsb@gmail.com', 'asim', 'male'),
(4, 'darvesh786', '81dc9bdb52d04dc20036dbd8313ed055', 'asim@bbm-asiapacific.com', 'Asim786', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `WeeklyReports`
--

CREATE TABLE IF NOT EXISTS `WeeklyReports` (
  `WeekNo` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Fr` varchar(100) NOT NULL,
  `T` varchar(100) NOT NULL,
  `ProgramCode` varchar(100) NOT NULL,
  `VNos` varchar(100) NOT NULL,
  `VGross` varchar(100) NOT NULL,
  `VDed` varchar(100) NOT NULL,
  `VNet` varchar(100) NOT NULL,
  `MNos` varchar(100) NOT NULL,
  `MGross` varchar(100) NOT NULL,
  `MDed` varchar(100) NOT NULL,
  `MNet` varchar(100) NOT NULL,
  `ANos` varchar(100) NOT NULL,
  `AGross` varchar(100) NOT NULL,
  `ADed` varchar(100) NOT NULL,
  `ANet` varchar(100) NOT NULL,
  `DNos` varchar(100) NOT NULL,
  `DGross` varchar(100) NOT NULL,
  `DDed` varchar(100) NOT NULL,
  `DNet` varchar(100) NOT NULL,
  `CHNos` varchar(100) NOT NULL,
  `CHGross` varchar(100) NOT NULL,
  `CHDed` varchar(100) NOT NULL,
  `CHNet` varchar(100) NOT NULL,
  `CANos` varchar(100) NOT NULL,
  `CAGross` varchar(100) NOT NULL,
  `CADed` varchar(100) NOT NULL,
  `CANet` varchar(100) NOT NULL,
  `ONos` varchar(100) NOT NULL,
  `OGross` varchar(100) NOT NULL,
  `ODed` varchar(100) NOT NULL,
  `ONet` varchar(100) NOT NULL,
  `TNos` varchar(100) NOT NULL,
  `TGross` varchar(100) NOT NULL,
  `TDed` varchar(100) NOT NULL,
  `TNet` varchar(100) NOT NULL,
  `Verified` varchar(100) NOT NULL,
  `Approved` varchar(100) NOT NULL,
  PRIMARY KEY (`ProgramCode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WeeklyReports`
--

INSERT INTO `WeeklyReports` (`WeekNo`, `Date`, `Fr`, `T`, `ProgramCode`, `VNos`, `VGross`, `VDed`, `VNet`, `MNos`, `MGross`, `MDed`, `MNet`, `ANos`, `AGross`, `ADed`, `ANet`, `DNos`, `DGross`, `DDed`, `DNet`, `CHNos`, `CHGross`, `CHDed`, `CHNet`, `CANos`, `CAGross`, `CADed`, `CANet`, `ONos`, `OGross`, `ODed`, `ONet`, `TNos`, `TGross`, `TDed`, `TNet`, `Verified`, `Approved`) VALUES
('1', '08/01/2011', '01/01/2011', '06/01/200', '3010', '10', '5280', '132', '5148', '10', '5280', '132', '5148', '2', '1056', '26.4', '1029.6', '1', '528', '13.2', '514.8', '2', '1056', '0', '1056', '5', '2640', '0', '2640', 'Nil', '-', '-', '0', '30', '15840', '303.6', '15536.4', 'Assistant', 'Program Manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
