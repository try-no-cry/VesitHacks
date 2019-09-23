-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 10:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
  `proj_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL,
  `project_manager_id` int(11) NOT NULL,
  `project_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_completed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `current_project` (
  `proj_id` int(11) NOT NULL,
  `proj_manager_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `manager_team` (
  `manager_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager_team`
--

INSERT INTO `manager_team` (`manager_id`, `member_id`) VALUES
(7, 2),
(7, 3),
(5, 4),
(5, 1),
(2, 1),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` text,
  `file_path` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `sender_id`, `receiver_id`, `title`, `message`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Promote this man.', NULL, 'abhaytiwari@gmail.com/Reportby21383871742.txt', '2019-09-22 17:17:23', '2019-09-22 17:38:27'),
(2, 2, 2, 'qewwehrjrh', NULL, 'abhaytiwari@gmail.com/Reportby21404908721.pdf', '2019-09-22 17:40:07', '2019-09-22 17:40:07'),
(3, 4, 6, 'test report', 'test message', 'prateekmehta@gmail.com/Reportby4284420477.jpg', '2019-09-23 05:04:23', '2019-09-23 05:04:23'),
(4, 7, 4, 'test1', 'testttttt', 'happysingh@gmail.com/Reportby71489824589.jpg', '2019-09-23 05:13:44', '2019-09-23 05:13:44'),
(5, 6, 7, 'Webpage complete', 'HTML and CSS used', 'abhaytiwari@gmail.com/Reportby21404908721.pdf', '2019-09-23 07:19:01', '2019-09-23 07:19:01'),
(6, 7, 3, 'sir demo', 'demo report', 'happysingh@gmail.com/Reportby71832104432.jpg', '2019-09-23 07:49:34', '2019-09-23 07:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `r_for_id` int(11) NOT NULL,
  `r_by_id` int(11) NOT NULL,
  `punctuality` int(11) NOT NULL,
  `targets_acheived` int(11) NOT NULL,
  `behaviour` int(11) NOT NULL,
  `contribution` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `r_for_id`, `r_by_id`, `punctuality`, `targets_acheived`, `behaviour`, `contribution`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 10, 6, 9, 8, '2019-09-23 00:40:53', '2019-09-23 00:40:53'),
(2, 5, 1, 5, 9, 7, 3, '2019-09-23 00:40:53', '2019-09-23 00:40:53'),
(3, 3, 6, 9, 5, 2, 7, '2019-09-23 00:40:53', '2019-09-23 00:40:53'),
(4, 4, 6, 6, 5, 4, 5, '2019-09-23 00:40:53', '2019-09-23 00:40:53'),
(5, 1, 7, 7, 10, 7, 4, '2019-09-23 00:40:53', '2019-09-23 00:40:53'),
(6, 6, 7, 4, 8, 10, 7, '2019-09-23 00:40:53', '2019-09-23 00:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `designation` varchar(256) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `address` text NOT NULL,
  `contact` varchar(11) NOT NULL,
  `current_project_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `projects_done` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `designation`, `role`, `address`, `contact`, `current_project_id`, `salary`, `projects_done`) VALUES
(1, 'Yash Goyal', 'yashgoyal@gmail.com', '1234567890', 'Frontend developer', 1, 'Kharghar', '9876543210', 3, 15000, '7,8'),
(2, 'Abhay Tiwari', 'abhaytiwari@gmail.com', '1234567890', 'DB admin', 1, 'Chembur', '9729476491', 1, 13000, '7,8'),
(3, 'Alisha Punwani', 'alishapunwani@gmail.com', '1234567890', 'UI/UX designer', 2, 'Mulund', '9838263816', 2, 18000, '4,6'),
(4, 'Prateek Mehta', 'prateekmehta@gmail.com', '1234567890', 'ML expert', 2, 'Gokuldham', '8362781820', 2, 14000, '5,6'),
(5, 'Heramb Kulkarni', 'herambkulkarni@gmail.com', '1234567890', 'Android ', 1, 'Dadar TT', '8765543901', 3, 7300, '8'),
(6, 'Aditya Raute', 'adityaraute@gmail.com', '1234567890', 'Web design ', 3, 'Panvel', '9812763455', 1, 20000, '4,5,6'),
(7, 'Happy Singh', 'happysingh@gmail.com', '1234567890', 'CTO', 4, 'Mumbai', '7937639312', 0, 30000, '4,5,6,7,8'),
(8, 'a', '11@11.11', '1', '11', 1, '11', '11111111111', 11, 11, '1'),
(9, 'Try', 't@t', '1234', 'DB', 2, 'Chembur', '1234567890', 1, 15000, '7,8'),
(10, '2', '2@2.2', '2', '2', 2, '2', '22222222222', 2, 2, '2'),
(11, '2', '2@2.2', '2', '2', 2, '2', '22222222222', 2, 2, '2'),
(12, 'ADMIN', 'admin@gmail.com', 'pass', 'admin', 100, 'Malad', '1234567890', 100, 100000, '2,3,4'),
(13, 'name', 'em@em', '1234567890', 'db', 2, 'chembur', '1234567890', 5, 20000, '1,2,3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD PRIMARY KEY (`proj_id`),
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
  ADD KEY `manager_id` (`manager_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_projects`
--
ALTER TABLE `completed_projects`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `current_project`
--
ALTER TABLE `current_project`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
