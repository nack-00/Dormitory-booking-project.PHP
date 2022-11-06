-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 05:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group work`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `name`, `user`) VALUES
(25, 'โต๊ะ', '63410075'),
(26, 'ตู้', '63410075'),
(27, 'เตียง', '63410075');

-- --------------------------------------------------------

--
-- Table structure for table `dorm`
--

CREATE TABLE `dorm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `user1` varchar(255) NOT NULL,
  `user2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dorm`
--

INSERT INTO `dorm` (`id`, `name`, `type`, `room`, `user1`, `user2`) VALUES
(4, 'หอพักชาย', 'ห้องธรรมดา', 'r5', '63410043', '63410075'),
(5, 'หอพักชาย', 'ห้องธรรมดา', 'r3', 'ว่าง', 'ว่าง'),
(6, 'หอพักหญิง', 'ห้องปรับอาการ', 'r1', '63410076', '63410108'),
(7, 'หอพักหญิง', 'ห้องปรับอาการ', 'r2', 'ว่าง', 'ว่าง'),
(8, 'หอพักหญิง', 'ห้องธรรมดา', 'r3', 'ว่าง', 'ว่าง'),
(10, 'หอพักชาย', 'ห้องปรับอาการ', 'r4', 'ว่าง', 'ว่าง'),
(16, 'หอพักชาย', 'ห้องปรับอาการ', 'r5', 'ว่าง', 'ว่าง'),
(17, 'หอพักชาย', 'ห้องปรับอาการ', 'r5457', 'ว่าง', 'ว่าง'),
(18, 'หอพักชาย', 'ห้องธรรมดา', 'r5123', 'ว่าง', 'ว่าง'),
(19, 'หอพักชาย', 'ห้องธรรมดา', 'r551', 'ว่าง', 'ว่าง'),
(20, 'หอพักหญิง', 'ห้องปรับอาการ', 'r112', 'ว่าง', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`id`, `name`, `username`) VALUES
(1, 'โต๊ะ', ''),
(3, 'ตู้', ''),
(4, 'เตียง', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phonenumber`, `sex`, `status`, `created_at`) VALUES
(6, 'กษิดิ์พัฒน์', 'จันทร์สูรย์', 'user1', '123456', '0891435383', 'ชาย', 'user', '2022-10-30 17:00:00'),
(12, 'AdminPao', 'jansoon', 'admin', '123456', '0891423754', 'ชาย', 'admin', '2022-10-31 12:58:04'),
(13, 'สาวกชกร', ' บ้านเมือง', 'supervisor1', '123456', '0891582755', 'หญิง', 'supervisor', '2022-10-31 13:04:58'),
(28, 'กชกร', 'บ้านเมือง', '63410108', '123456', '0123456789', 'หญิง', 'user', '2022-10-31 17:00:00'),
(29, 'นหฤทัย', 'บุญชู', '63410076', '123456', '0123456789', 'หญิง', 'user', '2022-11-01 02:26:04'),
(30, 'กษิดิ์พัฒน์', 'จันทร์สูรย์', '63410075', '123456', '0123456789', 'ชาย', 'user', '2022-10-31 17:00:00'),
(31, 'สุธนัย', 'วันมหาชัย', '63410077', '123456', '0123456789', 'ชาย', 'user', '2022-10-31 17:00:00'),
(32, 'รัชภูมิพงค์', 'พรไทย', '63410156', '123456', '0123456789', 'ชาย', 'user', '2022-10-31 17:00:00'),
(33, 'เชษฐมาส', 'ไผ่จันทร์', '63410043', '123456', '0123456789', 'ชาย', 'user', '2022-10-31 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorm`
--
ALTER TABLE `dorm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
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
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dorm`
--
ALTER TABLE `dorm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
