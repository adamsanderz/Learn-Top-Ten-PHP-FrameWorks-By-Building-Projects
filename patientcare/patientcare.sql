-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 12:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `patientcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
`id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `appointment_date`, `created`, `modified`) VALUES
(1, 1, 1, '2016-06-20 09:15:00', '2016-06-18 20:05:08', '2016-06-18 20:05:08'),
(2, 2, 2, '2016-06-24 06:10:00', '2016-06-18 20:05:48', '2016-06-18 20:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE IF NOT EXISTS `carriers` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `carrier_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `name`, `carrier_code`, `created`, `modified`) VALUES
(1, 'Blue Cross Blue Shiled', '07SG', '2016-06-18 20:00:05', '2016-06-18 20:00:05'),
(2, 'Mass Health', '09S3D', '2016-06-18 20:00:27', '2016-06-18 20:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accepting_patients` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `accepting_patients`, `created`, `modified`) VALUES
(1, 'Dr Mess Right', 1, '2016-06-18 20:03:35', '2016-06-18 20:03:35'),
(2, 'Dr Thomas ', 1, '2016-06-18 20:04:06', '2016-06-18 20:04:06'),
(3, 'Dr Shelly Smith', 0, '2016-06-18 20:04:18', '2016-06-18 20:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
`id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `services` varchar(255) NOT NULL,
  `due` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `patient_id`, `amount`, `services`, `due`, `created`, `modified`) VALUES
(1, 1, '200', 'Physical', '2016-05-18', '2016-06-18 20:41:53', '2016-06-18 20:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`id` int(11) NOT NULL,
  `carrier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `carrier_id`, `name`, `street_address`, `city`, `state`, `zipcode`, `email`, `phone`, `created`, `modified`) VALUES
(1, 1, 'John Doe', '31/a', 'Patiala', 'Punjab', '147001', 'roneysanger@gmail.com', '989998889', '2016-06-18 20:01:18', '2016-06-18 20:01:18'),
(2, 2, 'Shanrjit', '88A', 'Chandigarh', 'Chandigarh', '120023', 'shiviacca7@yahoo.com', '989998333', '2016-06-18 20:01:55', '2016-06-18 20:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(1, 'admin', 'montystar0@gmail.com', '$2y$10$iDtSiYzzvjYYjW9NcyXYE.OxSm55lvlnNECAvQ8GbD9mdY78hooLW', '2016-06-18 20:55:16', '2016-06-18 20:55:16'),
(2, 'hacker', 'hacker@gmail.com', '$2y$10$MtcRLpFXKgmF7sG/GlXRkuA9BJBPImvZrwjEX4xaODn4wawhXYsIy', '2016-06-18 21:48:23', '2016-06-18 21:48:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
