-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 09:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email`, `user_type`) VALUES
(1, 'avinash', 'avinash123', 'avinash2488@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `hobby` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'inactive',
  `uni_id` varchar(32) NOT NULL,
  `activation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `gender`, `hobby`, `city`, `dob`, `address`, `pic`, `status`, `uni_id`, `activation_date`) VALUES
(1, 'avinash', 'avinash@gmail.com', '1234', 'male', 'coding,', 'cambodia', '2021-04-30', 'allahabd', '1619104413_4d0d0a3693d193f5cdee.jpg', 'inactive', 'kjnkjhbkjlbhhj', '2021-04-14 17:19:03'),
(2, 'aman', 'aman12@gmail.com', '12341', 'female', 'singing,coding,hunting,', 'Denmark', '2019-11-30', 'kmlk', '1619167351_834481801f49a259d414.jpeg', 'inactive', '4bc3f44a250f32db2de88d985bf0c087', '2021-04-22 10:14:48'),
(3, 'aman', 'aman5t@gmail.com', '2345', 'male', 'singing,playing,coding,hunting,', 'denmark', '2019-11-30', 'kmlk', '1619104517_010fa657d0761262e298.jpeg', 'inactive', 'fb219916c02bf24e6f336c4ac10852e9', '2021-04-22 10:15:17'),
(4, 'aman', 'amanre5t@gmail.com', '45', 'male', 'singing,playing,coding,hunting,', 'denmark', '2019-11-30', 'kmlk', '1619104527_9e10134a3c011811dc79.jpeg', 'inactive', 'ccbe58280537176dd349bbd7c6adc848', '2021-04-22 10:15:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
