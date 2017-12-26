-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2017 at 01:43 AM
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
(90, 'East Java, Indonesia', 'Bhopal, Madhya Pradesh, India', '2017-12-01', '2017-12-27', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
