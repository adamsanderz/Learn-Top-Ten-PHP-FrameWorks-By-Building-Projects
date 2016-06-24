-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 07:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `create_date`) VALUES
(1, 'Accounting', '2016-06-19 05:28:31'),
(2, 'bussiness', '2016-06-19 05:28:31'),
(3, 'Finance', '2016-06-19 07:41:46'),
(4, 'Fashion', '2016-06-19 07:46:41'),
(5, 'Technolgoy', '2016-06-19 07:48:58'),
(6, 'Programmer', '2016-06-19 07:49:27'),
(7, 'Retail', '2016-06-19 07:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `salary_range` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  ` create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `category_id`, `user_id`, `title`, `description`, `type`, `requirements`, `salary_range`, `city`, `state`, `zipcode`, `contact_email`, `contact_phone`, `is_published`, ` create_date`) VALUES
(1, 5, 1, 'Database Administrator', 'we are looking for experienced db admin', 'full_time', 'high school diploma or GD ', '$60k to $80k', 'Boston', 'NA', '01102', 'montystar0@gmail.com', '555-555-5555', 1, '2016-06-19 07:58:50'),
(4, 4, 7, 'Fashion Desinger', 'Urgently needed experience fashion clothes designer', 'full_time', 'Need relevant Degree', '$80k - $100k', 'NewYork', 'NA', '12233', 'monty@gamil.com', '888-888-8888', 1, '2016-06-19 23:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `username`, `email`, `password`, `auth_key`, `create_date`) VALUES
(7, 'Sharnjit singh', 'sharnjit', 'montystar0@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ZZ-K8iDT6qZq7TjRkUIxIHqM319EUmuF', '2016-06-19 22:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
