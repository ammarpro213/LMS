-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2019 at 11:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helal`
--

-- --------------------------------------------------------

--
-- Table structure for table `da`
--

DROP TABLE IF EXISTS `da`;
CREATE TABLE IF NOT EXISTS `da` (
  `uid` int(11) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `da`
--

INSERT INTO `da` (`uid`, `day`) VALUES
(2, '12-10-2020'),
(1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

DROP TABLE IF EXISTS `logdata`;
CREATE TABLE IF NOT EXISTS `logdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdata`
--

INSERT INTO `logdata` (`id`, `email`, `password`, `type`) VALUES
(1, 'f@f', 'f', 1),
(2, 'fadi@gmail.com', '111', 1),
(3, 'admin@admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taker`
--

DROP TABLE IF EXISTS `taker`;
CREATE TABLE IF NOT EXISTS `taker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `iden` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taker`
--

INSERT INTO `taker` (`id`, `uid`, `uname`, `mothername`, `iden`, `city`, `type`) VALUES
(1, 2, 'ee', 'e', 222, '', 'Ø¬Ø±Ø­Ù‰'),
(2, 1, 'sqsq', 'sqqs', 1212, '', 'Ø´Ù‡Ø¯Ø§Ø¡');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
