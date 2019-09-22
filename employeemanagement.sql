-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2019 at 02:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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

DROP TABLE IF EXISTS `completed_projects`;
CREATE TABLE IF NOT EXISTS `completed_projects` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL,
  `project_manager_id` int(11) NOT NULL,
  `project_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_completed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`proj_id`),
  KEY `project_manager_id` (`project_manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `completed_projects`
--

INSERT INTO `completed_projects` (`proj_id`, `project_name`, `project_status`, `project_manager_id`, `project_start_date`, `project_completed_at`) VALUES
(4, 'Laravel Portal', 'ON TIME', 6, '2019-09-01 07:30:00', '2019-09-11 03:30:00'),
(5, 'DEVOPS', 'LATE', 6, '2019-09-04 00:30:00', '2019-09-19 13:17:00'),
(6, 'MACHINE LEARNING MODEL', 'ON TIME', 6, '2019-08-21 03:30:00', '2019-09-05 20:30:00'),
(7, 'HADOOP', 'LATE', 1, '2019-09-01 01:30:00', '2019-09-20 18:30:00'),
(8, 'PORTFOLIO WEBSITE', 'ON TIME', 1, '2019-09-02 18:30:00', '2019-09-07 02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `current_project`
--

DROP TABLE IF EXISTS `current_project`;
CREATE TABLE IF NOT EXISTS `current_project` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_manager_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`proj_id`),
  KEY `proj_manager_id` (`proj_manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `current_project`
--

INSERT INTO `current_project` (`proj_id`, `proj_manager_id`, `status`, `task_name`, `task_description`, `created_at`, `updated_at`) VALUES
(1, 6, 'ON TIME', 'Study CSS ', 'Study about CSS frameworks like Bootstrap, Materialize CSS and Bulma', '2019-09-20 01:30:00', '2019-09-21 18:30:00'),
(2, 6, 'ON TIME', 'Python libraries', 'Study in depth about Python libraries and packages like Tensorflow, Scikit-learn, Pygame and Pandas', '2019-09-20 18:30:00', '2019-09-22 13:37:13'),
(3, 1, 'RUNNING LATE', 'Scilab', 'Implementing Scilab application for easy and effective problem-solving.', '2019-09-15 18:30:00', '2019-09-22 02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `manager_team`
--

DROP TABLE IF EXISTS `manager_team`;
CREATE TABLE IF NOT EXISTS `manager_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`),
  KEY `manager_id` (`manager_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_for_id` int(11) NOT NULL,
  `r_by_id` int(11) NOT NULL,
  `punctuality` int(11) NOT NULL,
  `targets_acheived` int(11) NOT NULL,
  `behaviour` int(11) NOT NULL,
  `contribution` int(11) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `r_for_id` (`r_for_id`),
  KEY `r_by_id` (`r_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `r_for_id`, `r_by_id`, `punctuality`, `targets_acheived`, `behaviour`, `contribution`) VALUES
(1, 2, 1, 10, 6, 9, 8),
(2, 5, 1, 5, 9, 7, 3),
(3, 3, 6, 9, 5, 2, 7),
(4, 4, 6, 6, 5, 4, 5),
(5, 1, 7, 7, 10, 7, 4),
(6, 6, 7, 4, 8, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(11) NOT NULL,
  `current_project_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `projects_done` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `address`, `contact`, `current_project_id`, `salary`, `projects_done`) VALUES
(1, 'Yash Goyal', 'yashgoyal@gmail.com', '1234567890', 'Kharghar', '9876543210', 3, 15000, '7,8'),
(2, 'Abhay Tiwari', 'abhaytiwari@gmail.com', '1234567890', 'Chembur', '9729476491', 1, 13000, '7,8'),
(3, 'Alisha Punwani', 'alishapunwani@gmail.com', '1234567890', 'Mulund', '9838263816', 2, 18000, '4,6'),
(4, 'Prateek Mehta', 'prateekmehta@gmail.com', '1234567890', 'Gokuldham', '8362781820', 2, 14000, '5,6'),
(5, 'Heramb Kulkarni', 'herambkulkarni@gmail.com', '1234567890', 'Dadar TT', '8765543901', 3, 7300, '8'),
(6, 'Aditya Raute', 'adityaraute@gmail.com', '1234567890', 'Panvel', '9812763455', 1, 20000, '4,5,6'),
(7, 'Happy Singh', 'happysingh@gmail.com', '1234567890', 'Mumbai', '7937639312', 0, 30000, '4,5,6,7,8');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD CONSTRAINT `completed_projects_ibfk_1` FOREIGN KEY (`project_manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `current_project`
--
ALTER TABLE `current_project`
  ADD CONSTRAINT `current_project_ibfk_1` FOREIGN KEY (`proj_manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `manager_team`
--
ALTER TABLE `manager_team`
  ADD CONSTRAINT `manager_team_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `manager_team_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`r_for_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`r_by_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
