-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2017 at 11:00 PM
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
(77, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Eefa,+Belgaum/@15.8584565,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66ae79c86fc5:0xeb692048b4492231!8m2!3d15.868097!4d74.508962', 'Hotel Eefa, Belgaum', '3935 Club Road, Kallehol, Camp, Belagavi, Karnataka 590001', '08312498777', 'http://www.eefahotels.com/', '4.0/5'),
(78, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Sankam+Residency/@15.8585377,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66c5dc2d2ac9:0x317050ba130f7cde!8m2!3d15.8624292!4d74.5294633', 'Hotel Sankam Residency', 'Airport Road, Off National Highway 4, Gandhinagar, Azad Nagar, Belagavi, Karnataka 590016', '08314207888', 'http://sankam.in/', '4.0/5'),
(79, 2, 90, 'https://www.google.co.in/maps/place/Hotel+Adarsha+Palace/@15.8586188,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf669f5095362f:0xc888250c3ed94c48!8m2!3d15.8638421!4d74.5081404', 'Hotel Adarsha Palace', '#3360/2B,College Road, Opp. Lingaraj College, Khade Bazar, Raviwar Peth, Belagavi, Karnataka 590001', '08312435777', 'http://hoteladarshapalace.com/', '3.5/5'),
(80, 2, 90, 'https://www.google.co.in/maps/place/The+Leela+Goa/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x0:0xc023d7efb70a49a2!8m2!3d15.156808!4d73.9486313', 'The Leela Goa', 'Mobor, Cavelossim, Salcette, Goa 403731', '08326621234', 'http://theleela.com/', '4.3/5'),
(81, 2, 90, 'https://www.google.co.in/maps/place/Varanda+Do+Mar/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc0c30b94e0b9:0x47711930073f99e4!8m2!3d15.476667!4d73.809269', 'Varanda Do Mar', 'Near Goa Science Center, Miramar, Panjim, Goa 403002', '08322464400', 'http://varandadomar.com/', '4.1/5'),
(82, 2, 90, 'https://www.google.co.in/maps/place/Taj+Fort+Aguada+Resort+%26+Spa,+Goa/@15.8593414,73.978395,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc175b543664d:0xc2b14e0b1a4873ef!8m2!3d15.4974484!4d73.7669604', 'Taj Fort Aguada Resort and Spa, Goa', 'Sinquerim, Candolim, Bardez, Goa 403515', '08326645858', 'http://taj.tajhotels.com/', '4.5/5');

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
  ADD UNIQUE KEY `link` (`link`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
