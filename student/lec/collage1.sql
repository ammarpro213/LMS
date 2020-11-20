-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2019 at 12:23 PM
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
-- Database: `collage1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adver`
--

DROP TABLE IF EXISTS `adver`;
CREATE TABLE IF NOT EXISTS `adver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `auther` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adver`
--

INSERT INTO `adver` (`id`, `title`, `post`, `auther`) VALUES
(1, 'fadi', '', 'admin'),
(2, 'dsadsada', '', 'admin'),
(3, 'ali', 'aaaa', 'admin'),
(4, 'wwwwwwwwwwwwwwww', 'sssssssssssssssssssssssssss', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `prof_name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `section` varchar(255) NOT NULL,
  `lecture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `prof_name`, `title`, `year`, `sem`, `section`, `lecture`) VALUES
(24, 'Ø£Ø³Ø³ Ù…ÙŠÙƒØ§Ù†ÙŠÙƒÙŠØ©', 'Ø±Ø´Ø§', 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© Ø§Ù„Ø£ÙˆÙ„Ù‰', '1', '2', '8', 'download (2).jpg'),
(20, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª2', 'Ù‡Ø¯Ù‰', 'Ø§Ù„Ù…Ø¹Ø§Ø¯Ù„Ø§Øª Ø§Ù„ØªÙØ§Ø¶Ù„ÙŠØ©', '1', '2', '1', 'AVR_Programming_Training_Course_02.1.pdf'),
(21, 'Ù…ØªØ±Ø¬Ù…Ø§Øª', 'ÙØ§ØªÙ†', 'Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ù‚ÙˆØ§Ø¹Ø¯ÙŠ', '4', '2', '1', 'images (7).jpg'),
(22, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª2', 'Ø­Ø³Ù†', 'Ø§Ù„Ù…Ø¹Ø§Ø¯Ù„Ø§Øª Ø§Ù„ØªÙØ§Ø¶Ù„ÙŠØ©', '1', '1', '8', '23425-laptop-screen.jpg'),
(23, 'Ø¯Ø§Ø±Ø§Øª Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©', 'ÙØ§Ø¯ÙŠ', 'Ø§Ù„ØªØ±Ø§Ù†Ø²Ø³ØªÙˆØ±Ø§Øª', '1', '1', '2', '1.jfif'),
(19, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª1', 'Ù‡Ø¯Ù‰', 'Ø§Ù„ØªÙƒØ§Ù…Ù„Ø§Øª', '1', '1', '1', 'lect_timer 0(m32).pdf'),
(25, 'Ù…ØªØ±Ø¬Ù…Ø§Øª', 'ÙØ§ØªÙ†', 'Ø§Ù„Ù…Ø¹Ø±Ø¨Ø§Øª Ù…Ù† Ø§Ù„Ø£Ø¹Ù„Ù‰ Ø¥Ù„Ù‰ Ø§Ù„Ø£Ø³ÙÙ„', '4', '2', '1', '23425-laptop-screen.jpg'),
(26, 'fadi', 'fadi', 'fadi', '3', '1', '8', 'collage1.sql');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `id_sec` int(11) NOT NULL,
  `mark1` int(11) NOT NULL,
  `mark2` int(11) DEFAULT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `num`, `name`, `year`, `course_name`, `id_sec`, `mark1`, `mark2`, `mark`) VALUES
(5, 2333, 'نور رياض أبو علي', 1, 'رياضيات1', 1, 70, 20, 90),
(6, 2333, 'نور رياض أبو علي', 1, 'لغة1', 1, 90, NULL, 90),
(7, 212, 'sss', 2, 'ss', 5, 33, 44, 77);

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

DROP TABLE IF EXISTS `sec`;
CREATE TABLE IF NOT EXISTS `sec` (
  `id_sec` int(11) NOT NULL,
  `sec_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec`
--

INSERT INTO `sec` (`id_sec`, `sec_name`) VALUES
(1, 'حاسبات وتحكم آلي'),
(2, 'اتصالات'),
(3, 'طبية'),
(4, 'ميكاترونيك'),
(5, 'قوى'),
(6, 'تصميم وإنتاج'),
(7, 'طاقة'),
(8, 'بحرية');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `section` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  UNIQUE KEY `id_2` (`id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `section`, `type`) VALUES
(2, 'karam', 'k@k.com', 'k', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(3, 'maha al saad', 'maha@maha.com', 'maha', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(32, 'rania', 'rania@rania.com', '123', '456123', 'اللاذقية', 'computer', 4),
(33, 'Ù‡Ø´Ø§Ù… Ù…Ø­Ù…Ø¯', 'he@he.com', '123', '1235688', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Computer', 2),
(30, 'Ù‡Ù„Ø§', 'hla@3.com', '3', '1235688', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'communication', 3),
(8, 'admin', 'admin@admin.com', '123', '123', 'lattakia', '', 0),
(13, 'gawad ali', 'gawad@g.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(14, 'dima', 'dima@dima.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(28, 'ALI', 'ali@a.com', '123', '123', 'gg', 'computer', 1),
(24, 'Ø³Ø§Ù…Ø±', 'q@a.om', '123', '123', 'lattakia', 'comunication', 3),
(34, 'Ø³Ø§Ù„Ù… ÙƒÙ†Ø¹Ø§Ù†', 'sa@sa.com', '123', '4326578', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Mechanical Power', 3),
(29, 'Ø£Ø­Ù…Ø¯', 'ah@ah.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Medical', 1),
(31, 'galal', 'ga@ga.com', '123', '1235678', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Mechatronic', 1),
(35, 'Ø±Ø§Ù…ÙŠ Ù„Ø§ÙŠÙ‚Ø©', 'rami@rami.com', '123', '3245643', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Mechatronic', 3),
(36, 'Ø¯ÙŠØ§Ù†Ø§ Ø¹Ø¨ÙˆØ¯', 'diana@diana.com', '123', '543217', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Medical', 3),
(37, 'Ø¹Ù…Ø§Ø± ÙÙ‡Ø¯', 'am@am.com', '123', '5632189', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Electric Power', 3),
(38, 'Ø³Ù…ÙŠØ± Ø­Ø³Ù†', 'sam@sam.com', '123', '3421325', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Marine', 3),
(40, 'Ù†ÙˆØ± Ø£Ø¨Ùˆ Ø¹Ù„ÙŠ', 'n@n.com', 'n', '4326578', 'Ø¬Ø¨Ù„Ø©', 'Computer', 3),
(41, 'talal', 't@t.com', '123', '321345', 'Ø¬Ø¨Ù„Ø©', 'Computer', 3),
(42, 'b', 'b5@b5.com', '123', '123', 'Ø¬Ø¨Ù„Ø©', 'Computer', 3),
(43, 'Ù†ÙˆØ± Ø¹Ù„ÙŠ', 'nn@nn.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'communication', 3),
(44, 'jjj', 'jjj@jjj.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Electric Power', 3),
(45, 'fff', 'fff@fff.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Computer', 3),
(46, 'hhh', 'hhh@hhh.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Mechatronic', 3),
(47, 'nour ali', 'nour@ali.com', 'nour', '996913151', 'lattakia', 'Electric Power', 3),
(48, 'Ø³Ø§Ù„ÙŠ Ø¹Ø¨Ø§Ø³', 'saly@saly.com', '123', '123', 'Ø¨Ø§Ù†ÙŠØ§Ø³', 'Electric Power', 3),
(51, 'Ø¹Ù…Ø§Ø¯', 'im@im.com', '123', '32146543', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Computer', 3),
(50, 'yamin', 'ya@ya.com', '123', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'Mechatronic', 3),
(52, 'f', 'f@f', 'f', '2', 'f', 'Marine', 3),
(53, 'q', 'q@q', 'q', 'q', 'q', 'Comunication', 3),
(54, 'd', 'd@d', 'd', 'd', 'd', 'Electric Power', 3),
(55, 'ssasa', 'ss@ss.com', 'ss', 'ss', 'ss', 'Comunication', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
