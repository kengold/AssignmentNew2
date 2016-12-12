-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 01:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `dob` date NOT NULL,
  `yearsOfExperience` varchar(15) DEFAULT NULL,
  `industry` varchar(150) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `aboutMe` varchar(150) DEFAULT NULL,
  `professionalTitle` varchar(150) NOT NULL,
  `careerLevel` float DEFAULT NULL,
  `communicationLevel` float DEFAULT NULL,
  `organizationLevel` float DEFAULT NULL,
  `jobLevel` float DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phoneNumber` varchar(150) NOT NULL,
  `webSite` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `image`, `fullname`, `gender`, `dob`, `yearsOfExperience`, `industry`, `location`, `aboutMe`, `professionalTitle`, `careerLevel`, `communicationLevel`, `organizationLevel`, `jobLevel`, `address`, `phoneNumber`, `webSite`, `email`) VALUES
(13, 'uploads/profile/13ken.png', 'Kennard Goldson', 'Male', '2016-12-27', '5-10 Years', 'Information Technology', 'Kingston', '', 'CCNP', 100, NULL, NULL, NULL, '21 Giltress Street, Rollington Town', '18763671090', '', 'kennardgoldson@gmail.com'),
(14, NULL, 'r', 'Female', '2016-12-27', '1-4 Years', 'Medical', 'St. Mary', '', 'dsfdsg', NULL, NULL, NULL, NULL, '', '5247874', '', 'r@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
