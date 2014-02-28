-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2014 at 10:02 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vitali`
--

-- --------------------------------------------------------

--
-- Table structure for table `Managers`
--

CREATE TABLE IF NOT EXISTS `Managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Pass` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Managers`
--

INSERT INTO `Managers` (`id`, `Name`, `Pass`, `Email`) VALUES
(1, 'adrivanrex', 'rexadrivan', 'adrivanrex@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Notes`
--

CREATE TABLE IF NOT EXISTS `Notes` (
  `Direction` tinyint(1) NOT NULL,
  `Label` text NOT NULL,
  `Fee` tinyint(1) NOT NULL,
  `Content` text NOT NULL,
  `Created_time` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Notes`
--

INSERT INTO `Notes` (`Direction`, `Label`, `Fee`, `Content`, `Created_time`, `id`) VALUES
(1, 'asdasa', 0, 'asdasd', '2014-02-27 00:00:00', 1),
(1, 'asdas', 1, 'assasd', '2014-02-27 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` text NOT NULL,
  `Pass` text NOT NULL,
  `Email` text NOT NULL,
  `Tel` text NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FriendsAdded` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Pass`, `Email`, `Tel`, `Created_date`, `FriendsAdded`, `id`) VALUES
('rex', 'rex', 'rex', 'rex', '2014-02-26 18:25:25', '', 1),
('rexz', 'rexz', 'rexz', 'rexz', '2014-02-26 18:25:36', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
