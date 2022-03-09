-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 05, 2016 at 01:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agmasiag_bbmasiap_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE IF NOT EXISTS `client_login` (
  `mem_id` int(3) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`mem_id`, `userid`, `password`, `email`, `name`, `gender`) VALUES
(1, 'master', '81dc9bdb52d04dc20036dbd8313ed055', 'choochye9@gmail.com', 'WebMaster', 'male'),
(2, 'ricky', 'e10adc3949ba59abbe56e057f20f883e', 'rickylim@agm-asiagroup.com', 'Ricky ', 'male'),
(3, 'webmaster', '4e64950ce14238073260b82500b1c4d0', 'jonathan@corporate-worldclub.com', 'Jonathan', 'male'),
(4, 'demo', 'cce04cc42c214bd10033bc10d0da508e', 'demo@demo.com', 'Demo User', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `Dailyreports`
--

CREATE TABLE IF NOT EXISTS `Dailyreports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Dailyreports`
--

INSERT INTO `Dailyreports` (`id`, `ProgramCode`, `Date`, `VNos`, `VGross`, `VLBCom`, `VNet`, `MNos`, `MGross`, `MLBCom`, `MNet`, `ANos`, `AGross`, `ALBCom`, `ANet`, `DNos`, `DGross`, `DLBCom`, `DNet`, `CHNos`, `CHGross`, `CHLBCom`, `CHNet`, `CANos`, `CAGross`, `CALBCom`, `CANet`, `TNos`, `TGross`, `TLBCom`, `TNet`, `Verified`, `Approved`) VALUES
(3, '3010', '1/1/2011', '2', '1056', '26.4', '1029.6', '1', '528', '13.2', '514.8', '0', '0', '0', '0', '0', '0', '0', '0', '1', '528', '0', '528', '1', '528', '0', '528', '5', '2640', '39.6', '2600.4', 'My Assistant', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `positionapply` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `m` varchar(100) NOT NULL,
  `f` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `citi` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mstat` varchar(100) NOT NULL,
  `hpno` varchar(100) NOT NULL,
  `telno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tnone` varchar(100) NOT NULL,
  `tmoto` varchar(100) NOT NULL,
  `tcar` varchar(100) NOT NULL,
  `tothers` varchar(100) NOT NULL,
  `lclass` varchar(100) NOT NULL,
  `wy` varchar(100) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `edu1` varchar(100) NOT NULL,
  `edu2` varchar(100) NOT NULL,
  `edu3` varchar(100) NOT NULL,
  `edu4` varchar(100) NOT NULL,
  `eng` varchar(100) NOT NULL,
  `my` varchar(100) NOT NULL,
  `ch` varchar(100) NOT NULL,
  `ind` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `ncompany` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `lea` varchar(100) NOT NULL,
  `ncompany1` varchar(100) NOT NULL,
  `position1` varchar(100) NOT NULL,
  `year1` varchar(100) NOT NULL,
  `leave1` varchar(100) NOT NULL,
  `ncompany2` varchar(100) NOT NULL,
  `position2` varchar(100) NOT NULL,
  `year2` varchar(100) NOT NULL,
  `leave2` varchar(100) NOT NULL,
  `ncompany3` varchar(100) NOT NULL,
  `position3` varchar(100) NOT NULL,
  `year3` varchar(100) NOT NULL,
  `leave3` varchar(100) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rposition` varchar(100) NOT NULL,
  `rhpno` varchar(100) NOT NULL,
  `rname1` varchar(100) NOT NULL,
  `rposition1` varchar(100) NOT NULL,
  `rhpno1` varchar(100) NOT NULL,
  `rname2` varchar(100) NOT NULL,
  `rposition2` varchar(100) NOT NULL,
  `rhpno2` varchar(100) NOT NULL,
  `rname3` varchar(100) NOT NULL,
  `rposition3` varchar(100) NOT NULL,
  `rhpno3` varchar(100) NOT NULL,
  `expsal` varchar(100) NOT NULL,
  `startwork` varchar(100) NOT NULL,
  `erelationship1` varchar(100) NOT NULL,
  `ehpno1` varchar(100) NOT NULL,
  `erelationship2` varchar(100) NOT NULL,
  `ehpno2` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`positionapply`, `name`, `address`, `address1`, `address2`, `no`, `m`, `f`, `age`, `dob`, `race`, `citi`, `religion`, `mstat`, `hpno`, `telno`, `email`, `tnone`, `tmoto`, `tcar`, `tothers`, `lclass`, `wy`, `wn`, `edu1`, `edu2`, `edu3`, `edu4`, `eng`, `my`, `ch`, `ind`, `other`, `ncompany`, `position`, `year`, `lea`, `ncompany1`, `position1`, `year1`, `leave1`, `ncompany2`, `position2`, `year2`, `leave2`, `ncompany3`, `position3`, `year3`, `leave3`, `rname`, `rposition`, `rhpno`, `rname1`, `rposition1`, `rhpno1`, `rname2`, `rposition2`, `rhpno2`, `rname3`, `rposition3`, `rhpno3`, `expsal`, `startwork`, `erelationship1`, `ehpno1`, `erelationship2`, `ehpno2`) VALUES
('Software Developer', 'Muhammad Asim Mughal', 'KL', 'KL', 'KL', '1234567', 'male', '', '30', '16/04/1983', 'Pakistan', 'Pakistan', 'Islam', 'Single', '01126756560', '01126756560', 'asim@bbm-asiapacific.com', '', '', 'Car', '', 'D', 'Yes', '', 'B.Sc. (Computing)', 'B.Sc. (Computing)', 'B.Sc. (Computing)', 'B.Sc.  (Computing)', 'English', '', '', '', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'tes', 'test', '5000', '01/02/2014', 'friend', '01254325432', 'test', '1234543233'),
('Programmer', 'Muhammad Asim Mughal', 'KL', 'KL', 'KL', '000111', 'male', '', '29', '16/04/1984', 'Asian', 'Pakistan', 'Islam', 'Single', '0176377756', '0176377756', 'asim@explorasia-group.com', '', '', 'Car', '', 'D', 'Yes', '', 'Masters', '', '', '', '', '', '', '', '', 'test', 'test', 'test', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '4000', '01/01/2014', 'test', 'test', 'test', 'test'),
('Admin', 'test', 'KL', 'KL', 'KL', '0001112', 'male', '', '28', '16/04/1984', 'Asian', 'Pakistan', 'Islam', 'Single', '0176377756', '0176377756', 'asim@explorasia-group.com', '', 'Motocycle', '', '', 'D', 'Yes', '', 'Masters', '', '', '', 'English', '', '', '', '', 'test', 'test', 'test', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '4000', '01/01/2014', 'test', 'test', 'test', 'test'),
('Admin', 'Joanna lim Gek Choo', 'Pd Perdana', 'Jalan Pantai', 'Port Dickson', '951106046620', 'male', 'female', '18', '06111995', 'Chinese', 'Malaysian', 'budda ', 'married', '0192890024', '0192890024', 'jennylim1726@gmail.com', '', '', 'Car', '', 'B10', 'Yes', '', 'SPM', '', '', '', '', '', '', '', '', 'BBM Niaga', 'Admin', '2011', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Asim', 'IT', '0192106620', '', '', '', '', '', '', '', '', '', '100000', 'anytime', 'Husband', '0123413044', '', '');

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
('darvesh786', '451207bddeca3663d3109dfca0686007', '1385029698', 'pending'),
('ricky', '3819808e81e02c9169d1323ee3360fe2', '1410319016', 'done'),
('master', '960e60276a5a31a390ca58ecfedcf3d1', '1410342471', 'done'),
('master', '892f0bbd029bdb31212c70ca6688d3da', '1419583175', 'done');

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
  `authority` varchar(10) DEFAULT NULL,
  `userid` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `sex` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `plus_signup`
--

INSERT INTO `plus_signup` (`mem_id`, `authority`, `userid`, `password`, `email`, `name`, `sex`) VALUES
(7, 'clerk', 'demo', 'cce04cc42c214bd10033bc10d0da508e', 'demo@demo.com', 'Demo User', 'male'),
(6, 'admin', 'ricky', 'e10adc3949ba59abbe56e057f20f883e', 'contact@agm-asiagroup.com', 'Ricky ', 'male'),
(5, 'master', 'master', '4e64950ce14238073260b82500b1c4d0', 'choochye9@gmail.com', 'Master', 'male'),
(9, 'clerk', 'jonathan', '4e64950ce14238073260b82500b1c4d0', 'jonathan@corporate-worldclub.com', 'Jonathan', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

CREATE TABLE IF NOT EXISTS `wages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_code` varchar(11) DEFAULT NULL,
  `week_no` int(11) DEFAULT NULL,
  `w_from` varchar(15) DEFAULT NULL,
  `w_to` varchar(15) DEFAULT NULL,
  `serial_no` varchar(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `hrs` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `wages` int(11) DEFAULT NULL,
  `incentive` int(11) DEFAULT NULL,
  `subtotal` varchar(10) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `remarks` text,
  `date_inserted` timestamp NULL DEFAULT NULL,
  `name_inserted` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `WeeklyReports`
--

CREATE TABLE IF NOT EXISTS `WeeklyReports` (
  `WeekNo` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Fr` varchar(100) NOT NULL,
  `T` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `WeeklyReports`
--

INSERT INTO `WeeklyReports` (`WeekNo`, `Date`, `Fr`, `T`, `id`, `ProgramCode`, `VNos`, `VGross`, `VDed`, `VNet`, `MNos`, `MGross`, `MDed`, `MNet`, `ANos`, `AGross`, `ADed`, `ANet`, `DNos`, `DGross`, `DDed`, `DNet`, `CHNos`, `CHGross`, `CHDed`, `CHNet`, `CANos`, `CAGross`, `CADed`, `CANet`, `ONos`, `OGross`, `ODed`, `ONet`, `TNos`, `TGross`, `TDed`, `TNet`, `Verified`, `Approved`) VALUES
('1', '8/1/2011', '1/1/2011', '6/1/2011', 3, '3010', '10', '5280', '132', '5148', '10', '5280', '132', '5148', '2', '1056', '26.4', '1029.6', '1', '528', '13.2', '514.8', '2', '1056', '0', '2640', '5', '2640', '0', '2640', '-', '-', '-', '-', '30', '15840', '303.6', '15536.4', 'My Assistant', 'PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
