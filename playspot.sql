-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 06:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Sahil W', 'sahil@gmail.com', '8877665544', '$2y$10$gOWsJ/LVarysR6l/g3GHB.suPshWkot6HzEKlbS6v.967Qy9UG9mm'),
(3, 'Admin', 'admin@gmail.com', '9988776644', '$2y$10$wzklsz9a0y2B.W4GNxKVk.1sVqVcr.uw4jfNA/oVlk5oLWaKtFzh2'),
(4, 'Almirio', 'almiro@gmail.com', '9988884488', '$2y$10$D0zja.b9RZ6TmKPzQ6baRuEMIV85hEc84sH46dig42yYpKRwGbCmm');

-- --------------------------------------------------------

--
-- Table structure for table `turfs`
--

CREATE TABLE `turfs` (
  `tid` int(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_mobile` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offer price` int(255) NOT NULL,
  `initial price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turfs`
--

INSERT INTO `turfs` (`tid`, `tname`, `owner_email`, `location`, `owner`, `owner_mobile`, `rating`, `type`, `description`, `offer price`, `initial price`, `image`) VALUES
(18, 'Glory Arena', 'sahil@gmail.com', 'Vasco', 'Sahil W', '8877665544', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 1000, 1299, 'rosa.jpg'),
(19, 'Cota CinQo', 'sahil@gmail.com', 'Utorda', 'Sahil W', '8877665544', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 999, 1222, 'Cota CinQo.jpg'),
(20, 'Empire Sports', 'admin@gmail.com', 'Nuvem', 'Admin', '9988776644', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 899, 1999, 'Empire Sports.jpg'),
(21, 'L D silva', 'admin@gmail.com', 'Cortalim', 'Admin', '9988776644', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 1999, 1499, 'L d silva.jpg'),
(22, 'Rosa Arena', 'admin@gmail.com', 'Dabolim', 'Admin', '9988776644', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 1000, 1299, 'rosa.jpg'),
(24, 'Royals Arena', 'admin@gmail.com', 'Betalbatim', 'Admin', '9988776644', 0, 'football', 'The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. The turf ', 999, 1499, 'Royals Arena.jpg'),
(25, 'The Base', 'admin@gmail.com', 'Seraulim', 'Admin', '9988776644', 0, 'football', 'Seraulim The Glory Arena Football Turf is a state-of-the-art playing surface designed for high-performance football games. It is made from durable materials that can withstand intense wear and tear, ensuring that it can endure the rigors of frequent use. ', 1000, 1222, 'The Base.jpg'),
(27, 'Mangoor Sports Club', 'almiro@gmail.com', 'Vasco Da Gama', 'Almirio', '9988884488', 0, 'football', 'The Mangoor Sports Club Ground is a sports lovers paradise! Located in the scenic Mangoor hill, this lush green turf is perfect for cricket, football, and any other sports you fancy. Its spacious, has a great view, and is perfect for a casual game or a co', 999, 1299, 'Mangoor Sports Club.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'name', 'email', 'mobile', 'pass'),
(2, 'Sahil', 'walawalkarsahil25@gmail.com', '9403094516', '1234567'),
(18, 'Sahil Walawalkar', 'sam@gmail.com', '9403094516', ''),
(20, 'mohan', 'mohan@gmail.com', '9988776655', '233456789'),
(21, 'Sahil Walawalkar', 'tompatth@gmail.com', '9403094516', 'qwsdfty7656789'),
(22, 'pegan', 'pegan@gmail.com', '9988776655', '1234rtyujk'),
(23, '', '', '', ''),
(24, 'sharukh', 'sharukh@gmail.com', '9876543219', 'retryghjhkjk'),
(25, 'ram', 'ram@gmail.com', '7788996655', '$2y$10$v/acv4wyiOGvH.MsxjcjvuMlfWMm3lxfscaSucSRe3dQLtk8gV7f.'),
(26, 'max', 'max@gmail.com', '9955221166', '$2y$10$F.fhZDU4uTe8.wypy/PCD.U9XAtzAAh29agWbJRUJ.j/e2tYKfy4.'),
(27, 'krish', 'kri@gmail.com', '9988331144', '$2y$10$zxgAinMhj5JvKtaOVHdmLu8knKcKKDVmKeHTmJZTSNrhnx9vXrZP.'),
(28, 'Sahil', 'sahil@gmail.com', '9966554432', '$2y$10$VGmrCVz0kGr3Hn5jSKWkL.iZIS5oES15HzYuef2BF2TpUl1PB5Ks2'),
(29, 'sahil', 'sahil25@gmail.com', '9403094516', '$2y$10$DZ1j6whM1YikUs92xnAtG.MthbvmfbjteJ19rcaqkbPPExE.1ABXm'),
(30, 'Sahil W', 'sahil25@gmail.com', '8877665544', '$2y$10$cG7PnFsQ8IqmncIvrGY7f.inph6iIH6yQMdaJ1/ZEVrhr7h.atup6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turfs`
--
ALTER TABLE `turfs`
  ADD PRIMARY KEY (`tid`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turfs`
--
ALTER TABLE `turfs`
  MODIFY `tid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
