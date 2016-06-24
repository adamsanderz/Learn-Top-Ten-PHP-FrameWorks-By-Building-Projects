-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 10:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `albumshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
`id` int(11) NOT NULL,
  `artist` varchar(222) NOT NULL,
  `genre` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `year_released` varchar(4) NOT NULL,
  `label` varchar(255) NOT NULL,
  `cover_url` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `artist`, `genre`, `title`, `year_released`, `label`, `cover_url`, `details`, `created`) VALUES
(1, 'Metallica', 'Rock', 'And Justice for All', '1988', 'And Justice for All', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQARSktxF-RzltMcprrm59XRLw8UHtq0arQOVZ-318r9bGkMDnb', 'And Justice for All is the fourth studio album by American heavy metal band Metallica, released on August 25, 1988, by Elektra Records. It was the band''s first studio album to feature bassist Jason Newsted after the death of Cliff Burton in 1986..', '2016-06-24 14:07:26'),
(2, 'The Notorious B.I.G.', 'Rap', 'Ready to Die', '1994', 'Ready to Die', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-k6MtC61EI6xKtnXfKjqdbDy8oD_6eEkd6_gq4WQam_X73HKgHw', 'Ready to Die is the debut studio album by American rapper The Notorious B.I.G.; it was released on September 13, 1994, by Bad Boy Records....', '2016-06-24 14:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
