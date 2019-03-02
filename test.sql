-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 12:46 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quoteID` int(11) NOT NULL AUTO_INCREMENT,
  `Author` text NOT NULL,
  `Text` text NOT NULL,
  PRIMARY KEY (`quoteID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quoteID`, `Author`, `Text`) VALUES
(1, 'James Brown', 'I know what I learn.'),
(2, 'Jakob Srumpf', 'To je easy.'),
(5, 'Jože Golob', 'Rad jem zelenjavo.'),
(6, 'George Black', 'Universe is always expanding.'),
(7, 'Khalifatul Masih III', 'Love For All, Hatred For None.'),
(8, 'Amy Poehler', 'Change the world by being yourself.'),
(9, 'Buddha', 'What we think, we become.'),
(10, 'Filip Senekovi&#269;', 'I am better then all you shits.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `UserPass` text NOT NULL,
  `UserMail` text NOT NULL,
  `UserType` int(11) NOT NULL,
  `UserLastVisit` text NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserPass`, `UserMail`, `UserType`, `UserLastVisit`) VALUES
(1, 'Admin', 'admin', 'admin@mail.com', 3, '03/02/2019, 13:36:54'),
(2, 'User', 'admin', 'user@sers.si', 1, '03/02/2019, 13:34:46'),
(3, 'Test', 'geslo123', 'test@ragdoll.com', 1, '03/02/2019, 11:18:09'),
(5, 'privelage', '123', 'neki@normi.si', 1, '03/02/2019, 11:15:03'),
(6, 'drugi test', 'as', 'a@s.s', 1, '03/02/2019, 11:24:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
