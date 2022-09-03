-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:26 AM
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
-- Database: `iwthotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `a_date` varchar(50) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `n_gest` varchar(50) NOT NULL,
  `s_request` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`id`, `firstname`, `lastname`, `email`, `phone`, `r_type`, `a_date`, `d_date`, `n_gest`, `s_request`) VALUES
(2, 'tharindu nadeeshan', 'nadeeshan', 'nadeeshant287@gmail.com', '0717108447', 'Type2', '2022-05-19', '2022-05-25', '01', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
