-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 03:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helloarabtourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `includes` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `active` tinyint(4) NOT NULL,
  `addby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `packageName`, `price`, `discount`, `includes`, `photo`, `description`, `date`, `active`, `addby`) VALUES
(14, 'Bosnia and Herzegovina Holiday Packages\r\n', '8285', '6527', 'Air Ticket, Hotel, Tour Guide', 'upload/package/Screenshot (1)_1533212546.png', 'Return economy class air ticket on Turkish Airlines, Ex Abu Dhabi with 30K baggage\r\nMeet and Assist at Sarajevo International Airport\r\n3 Nights accommodation in Hayat Hills at Sarajevo\r\nSarajevo City Tour\r\nMeals mentioned as per hotel Inclusions.\r\nRound-t', '2018-08-02', 1, 'salman.shabbir13@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_key` varchar(255) NOT NULL,
  `forget_status` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img_location`, `password`, `verification_key`, `forget_status`, `active`) VALUES
(32, 'Salman Shabbir', 'salman.shabbir13@gmail.com', 'upload/20180708_123255_1532768843.jpg', 'a8751bb481c068b9c0e5ad40dccf6cab', '8eaaed6ca976f4a0635b2026dbe347fa', 0, 1),
(34, 'Ahmed', 'ahmed@helloarabtourism.com', 'upload/20180708_123255_1532768843.jpg', 'a8751bb481c068b9c0e5ad40dccf6cab', 'cbaedfaf30c8859efb28c3543421112b', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
