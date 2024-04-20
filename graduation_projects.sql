-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 02:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '0111111111');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `gpa` float NOT NULL,
  `report` varchar(255) NOT NULL,
  `github_link` text DEFAULT NULL,
  `important_topics` text NOT NULL,
  `approved` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `user_id`, `college`, `team_name`, `field`, `supervisor_name`, `gpa`, `report`, `github_link`, `important_topics`, `approved`) VALUES
(9, 'sara ahmed', 2, 'Commerce', 'fffffffffffff', 'engineering', 'fffffffffffffff', 2.8, '489675figure-65.png', 'ffffff', 'jjjjjjjjjjjjjj', 1),
(10, 'sara ahmed', 0, 'Commerce', 'fffffffffffff', 'ffffffffffffff', 'fffffffffffffff', 3.2, '556675figure-65.png', 'jjjjjjjjjjjjjjjjjjjjj', 'cfffffffffffffffff', 2),
(11, 'sara ahmed', 8, 'Commerce', 'fffffffffffff', 'engineering', 'fffffffffffffff', 3.4, '955675figure-65.png', 'jjjjjjjjjjjjjjjjjjjjj', 'ffffffffffffff', 0),
(12, 'sara ahmed', 0, 'ffffffffffffff', 'fffffffffffff', 'computer science', 'fffffffffffffff', 3, '209675figure-65.png', 'ffffff', 'vbbbbbbbbbbbbbbbb', 1),
(13, 'sara ahmed', 9, 'Commerce', 'fffffffffffff', 'ffffffffffffff', 'fffffffffffffff', 3, '838994figure-65.png', 'ffffff', 'aaaaaaaaaaaaaaaaaaaaaa', 1),
(14, 'Userrr', 10, 'Engineering', 'fffffffffffff', 'engineering', 'fffffffffffffff', 3, '618994figure-65.png', 'https://github.com/', 'sss ssssssssss', 1),
(15, 'sara ahmed', 0, 'ffffffffffffff', 'fffffffffffff', 'computer science', 'fffffffffffffff', 3, '398209675figure-65.png', 'https://github.com/', 'ssssssssssssssssssss', 2),
(16, 'sara ahmed', 0, 'ffffffffffffff', 'fffffffffffff', 'ffffffffffffff', 'fffffffffffffff', 3, '19232-1370x550a.png', 'sss', 'ssssssssssssss', 0),
(17, 'sss', 0, 'sssssssssss', 'ssssssssss', 'sssssssss', 'ssssssssss', 2, '83232-1370x550a.png', 'd', 'dddddddddddd', 0),
(18, 'sara ahmeddddddddddd', 0, 'ddddddddddddddd', 'dddddddddd', 'dddddddddd', 'ddddddddddd', 2, '22132-1370x550a.png', 'dddddd', 'dddddddddd ddddddddddd dddddddddddd', 0),
(19, 'User', 0, 'ffffffffffffff', 'fffffffffffff', 'ffffffffffffff', 'fffffffffffffff', 3, '598Document1 - Word 4_14_2024 9_01_12 PM.png', 'https://github.com/ffffff', 'fffffffffffffff', 0),
(20, 'sara ahmed', 0, 'ffffffffffffff', 'fffffffffffff', 'ffff', 'ffffff', 2, '642الإشتراكات _ Hostinger - Google Chrome 3_7_2024 8_11_06 PM.png', 'https://github.com/', 'ffffffffffff', 0),
(21, 'User', 0, 'ffffffffffffff', 'fffffffffffff', 'dddddddddd', 'fffffffffffffff', 2, '633الإشتراكات _ Hostinger - Google Chrome 3_7_2024 8_11_06 PM.png', 'jjjjjjjjjjjjjjjjjjjjj', 'ddddddddddddd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `verified` int(1) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `s_name`, `email`, `password`, `address`, `phone`, `code`, `verified`, `project_id`) VALUES
(2, 'sara', 'ahmed', 'aisha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Moshtohor', '01032185301', 'f2c2d46f', 1, 9),
(8, 'sara', 'ahmed', 'aishatarek83@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Moshtohor', '01032185301', '0ccc9bf5', 1, 11),
(9, 'sara', 'ahmed', 'aisha123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Moshtohor', '01032185301', '8c98fe40', 1, 13),
(10, 'sara', 'ahmed', 'aishatarik54@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Moshtohor', '01032185301', '9b5cab60', 1, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
