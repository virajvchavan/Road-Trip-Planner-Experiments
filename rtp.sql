-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2017 at 06:20 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `link` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(400) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `user_id`, `trip_id`, `link`, `name`, `address`, `phone`, `website`, `rating`) VALUES
(83, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Eefa,+Belgaum/@15.8584565,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66ae79c86fc5:0xeb692048b4492231!8m2!3d15.868097!4d74.508962', 'Hotel Eefa, Belgaum', '3935 Club Road, Kallehol, Camp, Belagavi, Karnataka 590001', '08312498777', 'http://www.eefahotels.com/', '4.0/5'),
(84, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Sankam+Residency/@15.8585377,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66c5dc2d2ac9:0x317050ba130f7cde!8m2!3d15.8624292!4d74.5294633', 'Hotel Sankam Residency', 'Airport Road, Off National Highway 4, Gandhinagar, Azad Nagar, Belagavi, Karnataka 590016', '08314207888', 'http://sankam.in/', '4.0/5'),
(85, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Adarsha+Palace/@15.8586188,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf669f5095362f:0xc888250c3ed94c48!8m2!3d15.8638421!4d74.5081404', 'Hotel Adarsha Palace', '#3360/2B,College Road, Opp. Lingaraj College, Khade Bazar, Raviwar Peth, Belagavi, Karnataka 590001', '08312435777', 'http://hoteladarshapalace.com/', '3.5/5'),
(87, 2, 99, 'https://www.google.co.in/maps/place/Hotel+Eefa,+Belgaum/@15.8584565,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66ae79c86fc5:0xeb692048b4492231!8m2!3d15.868097!4d74.508962', 'Hotel Eefa, Belgaum', '3935 Club Road, Kallehol, Camp, Belagavi, Karnataka 590001', '08312498777', 'http://www.eefahotels.com/', '4.0/5');

-- --------------------------------------------------------

--
-- Table structure for table `petrol`
--

CREATE TABLE `petrol` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `link` varchar(400) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petrol`
--

INSERT INTO `petrol` (`id`, `name`, `addr`, `link`, `trip_id`, `user_id`) VALUES
(2, 'Indian Oil Petrol Pump', 'Pune-Bangalore Road, Belagavi, Karnataka 591243', 'https://www.google.co.in/maps/place/Indian+Oil+Petrol+Pump/@16.042578,74.3484574,10.92z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xf97584620ee21fda!8m2!3d16.0235408!4d74.5231819', 6, 2),
(3, 'Bharat Petroleum Petrol Pump', 'Vyankatesh Nagar, Sangli, Maharashtra 416416', 'https://www.google.co.in/maps/place/Bharat+Petroleum+Petrol+Pump/@16.8423452,74.5898734,12.54z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xa939d5550fd8ff9!8m2!3d16.8630954!4d74.576633', 6, 2),
(4, 'HP PETROL PUMP - SHRI SAHIL FUEL STATION', 'NH-4 Golden Quadilateral) Hanchanal Village Yamkanmardi, Belgaum, Karnataka 591246', 'https://www.google.co.in/maps/place/HP+PETROL+PUMP+-+SHRI+SAHIL+FUEL+STATION/@16.042578,74.3484574,10.92z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0x23fbd4b12398d026!8m2!3d16.1545013!4d74.5174313', 6, 2),
(5, 'Bharat Petrolium', 'Auto Nagar, Ramteerth Nagar, Lakshmipuri Layout, Auto Nagar, Belagavi, Karnataka 590015', 'https://www.google.co.in/maps/place/Bharat+Petroleum/@15.8987423,74.5428857,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf612019d16b99:0x2ce8e996273b13a8!8m2!3d15.8987372!4d74.5450744', 6, 2),
(6, 'Honda Petrol Pump', 'Honda, Goa 403530', 'https://www.google.co.in/maps/place/Honda+Petrol+Pump/@15.5601129,74.0324991,11.62z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0x5050393997b930d8!8m2!3d15.5485057!4d74.0439034', 6, 2),
(7, 'Hare Krishna Petrol Pump', 'Hpcl Dealer, Survey NO.78/1-A, Tulshimala, Poriem, Sanquelim, Tehsil Sattari, Vasco, Goa 403505', 'https://www.google.co.in/maps/place/Hare+Krishna+Petrol+Pump/@15.65874,74.0845915,11.62z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x3bbf97e4eec5fef1:0xef7b6b6480e7f45c!8m2!3d15.5718306!4d74.0161002', 6, 2),
(13, 'Bharat Petroleum Petrol Pump', 'Vyankatesh Nagar, Sangli, Maharashtra 416416', 'https://www.google.co.in/maps/place/Bharat+Petroleum+Petrol+Pump/@16.8423452,74.5898734,12.54z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xa939d5550fd8ff9!8m2!3d16.8630954!4d74.576633', 69, 2),
(14, 'Indian Oil Petrol Pump', 'Pune-Bangalore Road, Belagavi, Karnataka 591243', 'https://www.google.co.in/maps/place/Indian+Oil+Petrol+Pump/@16.042578,74.3484574,10.92z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xf97584620ee21fda!8m2!3d16.0235408!4d74.5231819', 69, 2),
(15, 'Bharat Petrolium', 'Auto Nagar, Ramteerth Nagar, Lakshmipuri Layout, Auto Nagar, Belagavi, Karnataka 590015', 'https://www.google.co.in/maps/place/Bharat+Petroleum/@15.8987423,74.5428857,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf612019d16b99:0x2ce8e996273b13a8!8m2!3d15.8987372!4d74.5450744', 69, 2);

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `trip_id`, `link`, `user_id`, `name`, `descr`, `addr`, `rating`) VALUES
(2, 6, 'https://www.google.co.in/maps/place/Belagavi,+Karnataka/@15.866867,74.4383994,12z/data=!3m1!4b1!4m5!3m4!1s0x3bbf669f5095362f:0x7e34b31edcdefb5f!8m2!3d15.8496953!4d74.4976741', 2, 'Belagavi, Karnataka', 'Belgaum is a city in the Indian state of Karnataka located in its northern part along the Western Ghats. It is the administrative headquarters of the eponymous Belgaum division and Belgaum district.', 'Belagavi, Karnatakaa', ''),
(3, 6, 'https://www.google.co.in/maps/place/Kopeshwar+Temple./@16.6159102,74.6832043,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc0dc00bfffffff:0x58f412d9875c44ec!8m2!3d16.6159051!4d74.685393', 2, 'Kopeshwar Temple', '', 'Rajapur Main Rd, Khidrapur, Karnataka 416108', '4.9/5'),
(4, 6, 'https://www.google.co.in/maps/place/Vasco+da+Gama,+Goa/@15.3930202,73.7995848,14z/data=!3m1!4b1!4m5!3m4!1s0x3bbfc7f3635e9997:0x5f896b7ce330450e!8m2!3d15.3860329!4d73.8440398', 2, 'Vasco da Gama', 'Vasco da Gama is a city on the Mormugao peninsula in Goa, western India. The coast is dotted with beaches like Baina Beach, and has a natural harbor. On the headland, overlooking Varca Beach, 17th-century Mormugao Fort has 2 fountains. Dating from the 16th century, St. Andrew’s Church has gilded altars.', '', ''),
(5, 6, 'https://www.google.co.in/maps/place/Ancestral+Goa/@15.3398295,73.9842235,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbfb054f7d4e441:0x5cd3e1ecd2f5bf60!8m2!3d15.3398243!4d73.9864122', 2, 'Ancestral Goa', 'Outdoor cultural museum featuring a recreated ancient Goa village, with pottery making and dancing.', 'Near Saviour of the World Church, Loutolim, Loutolim, Goa, Goa 403718', '3.9/5'),
(6, 6, 'https://www.google.co.in/maps/place/Varanda+Do+Mar/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc0c30b94e0b9:0x47711930073f99e4!8m2!3d15.476667!4d73.809269', 2, 'Varanda Do Mar', '', 'Near Goa Science Center, Miramar, Panjim, Goa 403002', '4.1/5'),
(7, 6, 'https://www.google.co.in/maps/place/Bhimgad+Adventure+Camp/@15.7217254,74.4791182,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf6ed09fc890c1:0x35171c2a32eb9d7e!8m2!3d15.7217202!4d74.4813069', 2, 'Bhimgad Adventure Camp', '', 'Opposite Belgaum Golf Course, Katgali Road, Desur, Khanapur, Belgaum, Karnataka 590014', '5.0/5');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `start_addr` varchar(200) NOT NULL,
  `end_addr` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `start_addr`, `end_addr`, `start_date`, `end_date`, `user_id`) VALUES
(81, 'Kmart Tyre & Auto Service Broadway, Glebe, New South Wales, Australia', 'West Bengal, India', '2017-12-14', '2017-12-11', 2),
(82, 'Kmart Tyre & Auto Service Broadway, Glebe, New South Wales, Australia', 'West Bengal, India', '2017-12-14', '2017-12-11', 2),
(83, 'Kjerag, Forsand, Norway', 'Jersey City, NJ, United States', '2017-12-21', '2017-12-13', 2),
(84, 'Playa del Carmen, Mexico', 'Qwa-Qwa, Free State, South Africa', '2017-12-08', '2017-12-21', 2),
(85, 'Recife - State of Pernambuco, Brazil', 'JNTU Bus Stop, Hyderabad, Telangana, India', '2017-12-08', '2017-12-27', 2),
(86, 'JK Temple, Govind Nagar Road, Sarvodaya Nagar, Kanpur, Uttar Pradesh, India', 'Ho Chi Minh City, Ho Chi Minh, Vietnam', '2017-12-23', '2018-01-03', 2),
(87, 'Jhotwara, Jaipur, Rajasthan, India', 'Bhopal, Madhya Pradesh, India', '2017-12-22', '2017-12-28', 2),
(88, 'Webster, TX, United States', 'JioGarden, Mumbai, Maharashtra, India', '2017-12-09', '2017-12-28', 2),
(89, 'Webster, TX, United States', 'JioGarden, Mumbai, Maharashtra, India', '2017-12-09', '2017-12-28', 2),
(90, 'East Java, Indonesia', 'Bhopal, Madhya Pradesh, India', '2017-12-01', '2017-12-27', 2),
(91, 'Nowy Sacz, Poland', 'Jharkhand, India', '2017-11-28', '2018-01-03', 2),
(92, 'Santos Dumont Airport - Praça Senador Salgado Filho - Centro, Rio de Janeiro - State of Rio de Janeiro, Brazil', 'New York, NY, United States', '2017-12-04', '2017-12-14', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `trip_id` (`trip_id`,`link`);

--
-- Indexes for table `petrol`
--
ALTER TABLE `petrol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`,`trip_id`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trip_id` (`trip_id`,`link`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `petrol`
--
ALTER TABLE `petrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `spots`
--
ALTER TABLE `spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
