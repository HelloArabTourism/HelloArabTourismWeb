-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 05:40 PM
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(11) NOT NULL,
  `about_us` varchar(8000) NOT NULL,
  `our_mission` varchar(8000) NOT NULL,
  `why_us` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_us`, `our_mission`, `why_us`) VALUES
(1, 'Hello Arab Tourism is travel an tourism agency. We make travel remarkable . We provide affordable tour packages across the globe. Our head office in beautiful capital of United Arab Emirates Abu Dhabi city of Arabic culture and modern skyscrapers and branch office in Bosnia & Herzegovina country of medieval villages, rivers and lakes, plus the craggy Dinaric Alps', 'Hello Arab Tourism is travel an tourism agency. We make travel remarkable . We provide affordable tour packages across the globe. Our head office in beautiful capital of United Arab Emirates Abu Dhabi city of Arabic culture and modern skyscrapers and branch office in Bosnia & Herzegovina country of medieval villages, rivers and lakes, plus the craggy Dinaric Alps', 'Hello Arab Tourism is travel an tourism agency. We make travel remarkable . We provide affordable tour packages across the globe. Our head office in beautiful capital of United Arab Emirates Abu Dhabi city of Arabic culture and modern skyscrapers and branch office in Bosnia & Herzegovina country of medieval villages, rivers and lakes, plus the craggy Dinaric Alps');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mapURL` varchar(255) NOT NULL,
  `fbURL` varchar(255) NOT NULL,
  `twURL` varchar(255) NOT NULL,
  `snpURL` varchar(255) NOT NULL,
  `instaURL` varchar(255) NOT NULL,
  `linkURL` varchar(255) NOT NULL,
  `waURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `web`, `location`, `mapURL`, `fbURL`, `twURL`, `snpURL`, `instaURL`, `linkURL`, `waURL`) VALUES
(1, '+971503338879,  +971554554994', 'info@helloarabtourism.com', 'https://www.helloarabtourism.com', 'Al Ahalia Tower Block-A M Floor Office A7 Al Khalidiya - 315 Zayed The First StAbu Dhabi 136046, UAE', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAot2fgi5npA_GhLlOr4-YAd4MQlSPp_yk', 'https://www.facebook.com/HelloArabTourism', 'https://twitter.com/helloarabtours', 'https://www.snapchat.com/helloarabtours', 'https://www.instagram.com/helloarabtourism/', 'https://www.linkedin.com/company/helloarabtourism/', 'https://wa.me/+971554554994');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packageDes` varchar(255) NOT NULL,
  `tourDuration` varchar(255) NOT NULL,
  `nPerson` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sDate` date NOT NULL,
  `eDate` date NOT NULL,
  `includes` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `addby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `packageName`, `packageDes`, `tourDuration`, `nPerson`, `price`, `sDate`, `eDate`, `includes`, `photo`, `description`, `active`, `addby`) VALUES
(16, 'Azerbijan Package', 'Azerbijan', '6 nights 7 days', 2, 2500, '2018-09-03', '2018-09-10', '', 'upload/Azerbaijan_1535981009.jpg', '6 nights/ 7 days :ðŸ‘‡\r\n\r\n3 days Baku (Rich Hotel )\r\n2 days Gabala (Qabala Resort  Hotel ) \r\n1 day  Guba   (Quba Shahdag Hotel )\r\nâ–ª2 persons\r\nâ–ª1 room \r\nTransfer from airport + Hotel + Car + Tour everywhere \r\nTotally :  5000 AED\r\nTour time : \r\nBAKU --f', 1, 'salman.shabbir13@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_order`
--

CREATE TABLE `table_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_price` decimal(10,2) NOT NULL,
  `order_datetime` datetime NOT NULL,
  `operate_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_order`
--

INSERT INTO `table_order` (`order_id`, `order_no`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_price`, `order_datetime`, `operate_by`) VALUES
(1, '1', '2018-08-15', 'Salman Shabbir', 'Abu Dhabi UAE', '3300.00', '2018-08-15 08:00:00', 'salman.shabbir13@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_amount` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(34, 'Ahmed', 'ahmed@helloarabtourism.com', 'upload/20180708_123255_1532768843.jpg', 'a8751bb481c068b9c0e5ad40dccf6cab', 'cbaedfaf30c8859efb28c3543421112b', 0, 1),
(35, 'Mohamed Al Hashmi', 'mohamed@helloarabtourism.com', 'upload/Screenshot (4)_1533219514.png', 'b680bd7b6900158517498780d2f117b0', '29197b1e9ffc150a15482332eba46ad5', 0, 0),
(36, 'Ghassan Al Hashmi', 'ghassan@helloarabtourism.com', 'upload/_1535282609.', 'b680bd7b6900158517498780d2f117b0', '7266a836f8d0990664af83a7015af919', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_order`
--
ALTER TABLE `table_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
