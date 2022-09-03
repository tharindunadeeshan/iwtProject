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
-- Table structure for table `event_in`
--

CREATE TABLE `event_in` (
  `id` int(50) NOT NULL,
  `e_date` varchar(50) NOT NULL,
  `e_time` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `n_person` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_in`
--

INSERT INTO `event_in` (`id`, `e_date`, `e_time`, `f_name`, `n_person`, `full_name`, `email`, `phone`) VALUES
(3, '2022-05-03', '23:41', 'birthday', 'Person 2', 'KONARA ', 'nadeeshant287@gmail.com', '0717108447');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_in`
--
ALTER TABLE `event_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_in`
--
ALTER TABLE `event_in`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
