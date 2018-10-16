-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 03:56 PM
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
(1, 'Hello Arab Tourism â€œmake travel remarkable\" is a Destination Management Company (Tour Operator) specialized in the creation, organization, and operation of tailor-made Incentive Programs across Abu Dhabi city and the wider emirates.    Hello Arab name came from travels over the world because what you always hear is HELLO almost more than 100 times on each trip and we decided to be the first who say HELLO to our guests. ARAB came from our region so we want all the world to know about our heritage, culture, and experience the true Arabian hospitality.   Hello Arab travelers will get the best of what can be achieved in the Travel & Tourism sector.   Inbound Tours Operating (Destination Management) is our main specialty in the Gulf Pride Abu Dhabi City Pearl of the Gulf with a team of local experts were our packages are designed by our Travel Consultants Team and customer self-planning in our website.  Services we provide is unique and needed to make travel remarkable.   Hello Arab is honored to be involved with travelers in their Arabian Experience.', 'To provide travelers with the best of what can be provided in the tourism sector. Developing and promoting tours and packages. Promoting the Desert Pearl Abu Dhabi City is our high priority mission. Spreading peace and love to the world.  (One world one love).', 'Hello Arab offers the services you looking for with true Arabian hospitality. Our travel consultant team and customer are involved in improving our services. Hello Arab was born and grown in the Gulf Pearl, therefore, the real tours and safaris with Hello Arab and nobody can make you live the adventure like we will. Our team have an excellent local and international knowledge and speak a variety of languages. We are not the best but sure we are different and unique in our services. Hello Arab Tourism will be honored by serving your travel and making it unforgettable. ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, '3 Days Tour Packages', 'dfsfgsdgdsfsdf'),
(2, '7 Days Tour Packages', 'sdfsdfsdfsdfsd'),
(5, '14 Days Tour Packages', 'asdfdsfsdf'),
(6, '30 Days Tour Packages', 'sdfsdfsdfsdf'),
(9, '90 days Tour Packages', 'dsfsdfsdfsdfsdf');

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
  `cat_id` int(11) NOT NULL,
  `cat_t_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `package_title` varchar(255) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_desc` longtext NOT NULL,
  `package_keywords` text NOT NULL,
  `addby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `cat_id`, `cat_t_id`, `start_date`, `end_date`, `package_title`, `img1`, `img2`, `img3`, `package_price`, `package_desc`, `package_keywords`, `addby`) VALUES
(4, 5, 2, '2018-12-02', '2018-12-15', 'Abu Dhabi National Day Package', 'aa1.jpg', 'aa2.jpg', 'aa3.jpg', 4000, 'dsfsdfsdfsd', '14 days package', '');

-- --------------------------------------------------------

--
-- Table structure for table `plantrip`
--

CREATE TABLE `plantrip` (
  `pTripID` int(11) NOT NULL,
  `tDesc` varchar(255) NOT NULL,
  `travelDateF` date NOT NULL,
  `travelDateT` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `infant` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantrip`
--

INSERT INTO `plantrip` (`pTripID`, `tDesc`, `travelDateF`, `travelDateT`, `name`, `email`, `contactno`, `adult`, `child`, `infant`, `services`, `message`, `status`) VALUES
(2, 'Canada', '2019-05-15', '2019-05-25', 'Salman Shabbir', 'salman@helloarabtourism.com', '+971554554994', 1, 0, 0, 'Visa, Air Ticket, Airport Tranport, Hotel, Car Rent', 'Please contact me as soon as possible.', 0),
(3, 'Germany', '2019-06-25', '2019-07-15', 'Salman Shabbir', 'salman@helloaabtourism.com', '0554554994', 1, 0, 0, 'Visa, Air Ticket, Airport Tranport, Hotel, Tour Guide, Car Rent', 'abcd', 0),
(4, 'Abu Dhabi', '2019-05-12', '2019-05-15', 'Salman Shabbir', 'salman.shabbir13@gmail.com', '0554554994', 1, 0, 0, 'Visa, Air Ticket, Airport Tranport, Hotel, Tour Guide, Car Rent', 'dfsdgdfgdfgdfgdfgdgdfgdfg', 0);

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
-- Table structure for table `tour_categories`
--

CREATE TABLE `tour_categories` (
  `cat_t_id` int(11) NOT NULL,
  `cat_t_title` varchar(255) NOT NULL,
  `cat_t_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_categories`
--

INSERT INTO `tour_categories` (`cat_t_id`, `cat_t_title`, `cat_t_desc`) VALUES
(1, 'HONEYMOON PACKAGES', 'asdasdasdas'),
(2, 'FRIEND AND FAMILY PACKAGES', 'asdfsdadasfdasfsd'),
(3, 'Adventure Packages', 'dsffsdfgsdfsdfsdfsd'),
(4, 'Solo Packages', 'dsfdgsdgsdgsdgsd'),
(5, 'Beach Packages', 'dsfsdfsdfsdf'),
(6, 'Abu Dhabi Packages', 'sdfsdfsdfsfsdf');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

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
-- Indexes for table `plantrip`
--
ALTER TABLE `plantrip`
  ADD PRIMARY KEY (`pTripID`);

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
-- Indexes for table `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD PRIMARY KEY (`cat_t_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plantrip`
--
ALTER TABLE `plantrip`
  MODIFY `pTripID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `tour_categories`
--
ALTER TABLE `tour_categories`
  MODIFY `cat_t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
