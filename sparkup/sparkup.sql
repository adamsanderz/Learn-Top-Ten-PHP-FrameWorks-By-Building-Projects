-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 01:12 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkup`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `resource_id`, `type`, `action`, `user_id`, `message`, `create_date`) VALUES
(1, 1, 'subject', 'added', 1, 'A new Subject was created (Company)', '2016-02-21 17:02:27'),
(2, 0, 'subject', 'updated', 1, 'A Subject (Company) was renamed to (CompanyMula)', '2016-02-21 17:38:49'),
(3, 2, 'subject', 'added', 1, 'A new Subject was created (Test)', '2016-02-21 17:45:15'),
(4, 0, 'subject', 'deleted', 1, 'A Subject (CompanyMula) was deleted', '2016-02-21 17:45:49'),
(5, 0, 'subject', 'deleted', 1, 'A Subject (CompanyMula) was deleted', '2016-02-21 17:46:48'),
(6, 0, 'subject', 'deleted', 1, 'A Subject (CompanyMula) was deleted', '2016-02-21 17:48:17'),
(7, 1, 'page', 'added', 1, 'A new Page was created (Meet the Team)', '2016-02-21 19:11:27'),
(8, 2, 'page', 'added', 1, 'A new Page was created (FQA)', '2016-02-21 23:15:33'),
(9, 2, 'subject', 'added', 1, 'A new Subject was created (CompanyTest)', '2016-02-21 23:35:39'),
(10, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated to (Meet the Team)', '2016-02-21 23:36:45'),
(11, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated to (Meet the Team)', '2016-02-21 23:37:46'),
(12, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated to (Meet the Team)', '2016-02-21 23:37:52'),
(13, 0, 'page', 'deleted', 1, 'A Page (Meet the Team) was deleted', '2016-02-21 23:40:23'),
(14, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated to (Meet the Team)', '2016-02-21 23:40:30'),
(15, 1, 'user', 'added', 1, 'A new User was created (Shine)', '2016-02-22 00:23:32'),
(16, 0, 'user', 'updated', 1, 'The User (Shine) has been updated', '2016-02-22 00:44:51'),
(17, 2, 'user', 'added', 1, 'A new User was created (Test)', '2016-02-22 00:47:27'),
(18, 0, 'page', 'deleted', 1, 'A User () was deleted', '2016-02-22 00:47:34'),
(19, 2, 'page', 'added', 1, 'A new Page was created (Another Page)', '2016-02-23 09:40:26'),
(20, 3, 'subject', 'added', 1, 'A new Subject was created (Test Subject)', '2016-02-23 09:48:11'),
(21, 0, 'subject', 'updated', 1, 'A Subject (CompanyMula) was renamed to (CompanyMula)', '2016-02-23 09:58:28'),
(22, 0, 'subject', 'updated', 1, 'A Subject (CompanyMula) was renamed to (CompanyMula2)', '2016-02-23 09:58:39'),
(23, 2, 'user', 'added', 1, 'A new User was created (SHine123)', '2016-02-23 10:08:05'),
(24, 0, 'subject', 'updated', 1, 'A Subject (Test Subject) was renamed to (Test Subject TEst)', '2016-02-23 10:18:45'),
(25, 0, 'subject', 'updated', 1, 'A Subject (Test Subject TEst) was renamed to (Test Subject Test)', '2016-02-23 10:23:03'),
(26, 0, 'subject', 'updated', 1, 'A Subject (CompanyTest) was renamed to (Company Test)', '2016-02-23 10:27:11'),
(27, 0, 'page', 'update', 1, 'The Page (Another Page) was updated to (Another Page)', '2016-02-23 11:41:08'),
(28, 0, 'page', 'update', 1, 'The Page (Another Page) was updated!', '2016-02-23 11:43:12'),
(29, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated!', '2016-02-23 11:44:10'),
(30, 0, 'page', 'update', 1, 'The Page (Meet the Team) was updated!', '2016-02-23 12:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `in_menu` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `subject_id`, `user_id`, `slug`, `title`, `body`, `is_published`, `is_featured`, `in_menu`, `order`, `create_date`) VALUES
(1, 2, 1, 'meet-the-team', 'Meet the Team', 'Meet with the team -- HELLO', 1, 0, 1, 1, '2016-02-21 19:11:27'),
(2, 2, 1, 'another-page', 'Another Page', 'THis is a body Test', 1, 0, 1, 2, '2016-02-23 09:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `create_date`) VALUES
(1, 'CompanyMula2', '2016-02-21 17:02:27'),
(2, 'Company Test', '2016-02-21 23:35:39'),
(3, 'Test Subject Test', '2016-02-23 09:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `create_date`) VALUES
(1, 'Shkëlqim', 'Mula', 'Shine', 'shine@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-02-22 00:23:32'),
(2, 'Shine', 'Mula', 'SHine123', 'test@test.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-02-23 10:08:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
