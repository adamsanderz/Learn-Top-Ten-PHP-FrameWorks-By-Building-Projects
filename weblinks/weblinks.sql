-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 05:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weblinks`
--

-- --------------------------------------------------------

--
-- Table structure for table `weblinks`
--

CREATE TABLE IF NOT EXISTS `weblinks` (
`id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `category` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weblinks`
--

INSERT INTO `weblinks` (`id`, `title`, `url`, `category`, `username`, `description`, `create_date`) VALUES
(1, 'Gmail', 'http://www.gmail.com', 'Email', 'sharnjit', '    This is a link for google email service..', '2016-06-24 04:55:13'),
(2, 'Facebook', 'http://www.facebook.com', 'Social Network', 'Mark', '        This is a social network website .. ', '2016-06-24 04:56:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weblinks`
--
ALTER TABLE `weblinks`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weblinks`
--
ALTER TABLE `weblinks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
