-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2016 at 09:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freshideas`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `body` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idea_id`, `name`, `email`, `body`, `create_date`) VALUES
(1, 1, 'sharnjit', 'montystar0@gmail.com', 'great idea dude', '2016-06-23 07:23:01'),
(2, 2, 'marry', 'monty.star@rediffmail.com', 'this is tottaly fucked up', '2016-06-23 11:41:46'),
(3, 2, 'jane', 'jane@xmail.com', 'this is cool', '2016-06-23 11:42:02'),
(4, 1, 'Gaming Conventions', 'shiviacca7@yahoo.com', 'nice', '2016-06-23 12:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE IF NOT EXISTS `ideas` (
`id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `time_estimate` varchar(222) NOT NULL,
  `cost_estimate` varchar(222) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `description`, `time_estimate`, `cost_estimate`, `create_date`) VALUES
(1, 'my great idea 1', 'i learn how to program', '2 months', '$1000', '2016-06-23 06:32:32'),
(2, 'my great idea 2', 'after framework i will switch to  angularjs', '1 month', '$200', '2016-06-23 06:32:32'),
(3, 'working on node', 'nodejs javascript ', '2 months', '$400', '2016-06-23 12:11:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `idea_id` (`idea_id`), ADD KEY `idea_id_2` (`idea_id`), ADD KEY `idea_id_3` (`idea_id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
