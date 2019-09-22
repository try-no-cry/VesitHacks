-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 12:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed_projects`
--

CREATE TABLE `completed_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL,
  `project_manager_id` int(11) NOT NULL,
  `project_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_completed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `current_project`
--

CREATE TABLE `current_project` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_manager_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manager_team`
--

CREATE TABLE `manager_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_for_id` int(11) NOT NULL,
  `r_by_id` int(11) NOT NULL,
  `puctuality` int(11) NOT NULL,
  `targets_achieved` int(11) NOT NULL,
  `behaviour` int(11) NOT NULL,
  `contribution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `current_project_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `projects_done` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_manager_id` (`project_manager_id`);

--
-- Indexes for table `current_project`
--
ALTER TABLE `current_project`
  ADD PRIMARY KEY (`proj_id`),
  ADD KEY `proj_manager_id` (`proj_manager_id`);

--
-- Indexes for table `manager_team`
--
ALTER TABLE `manager_team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `r_for_id` (`r_for_id`),
  ADD KEY `r_by_id` (`r_by_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD CONSTRAINT `completed_projects_ibfk_1` FOREIGN KEY (`project_manager_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `current_project`
--
ALTER TABLE `current_project`
  ADD CONSTRAINT `current_project_ibfk_1` FOREIGN KEY (`proj_manager_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `manager_team`
--
ALTER TABLE `manager_team`
  ADD CONSTRAINT `manager_team_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `manager_team_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`r_for_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`r_by_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
