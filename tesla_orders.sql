-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 11:36 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesla_orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Drive_Train` varchar(255) NOT NULL,
  `Interior_Trim` varchar(255) NOT NULL,
  `Mile_Range` int(255) NOT NULL,
  `Charger` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Name`, `Email`, `Address`, `Model`, `Color`, `Drive_Train`, `Interior_Trim`, `Mile_Range`, `Charger`) VALUES
(2, 'Ali hussain Khan', 'Ali@gmail.com', 'Rana complex, abasia town', 'Model S', 'Red ', '4wd', 'White', 500, 'Fast'),
(3, 'Azeem', 'Azeem@gmail.com', '45, Nishat colony', 'Model 3', 'Black ', '2wd', 'black', 320, 'Normal'),
(4, 'Jameel', 'Jameel@gmail.com', 'Abcd', 'Model Y', 'Yello ', '2wd', 'White', 500, 'Fast'),
(5, 'kareem', 'kareem@gmail.com', 'ght', 'Model S', 'Grey ', '4wd', 'brown', 320, 'Normal'),
(6, 'Haseeb', 'Haseeb@gmail.com', 'ghk', 'Model Y', 'Blue ', '4wd', 'black', 500, 'Fast'),
(7, 'qasim', 'qasim@gmail.com', 'wqe', 'Model 3', 'Grey ', '4wd', 'black', 320, 'Fast'),
(8, 'Ajeeb', 'Ajeeb@gmail.com', 'try', 'Model S', 'Red ', '2wd', 'black', 320, 'Fast'),
(9, 'Shahdab', 'SH@gmail.com', 'qwe', 'Model X', 'Black ', '2wd', 'black', 500, 'Fast'),
(10, 'usama', 'usama@gmail.com', 'Islamia colony', 'Model S', 'Black ', '2wd', 'Brown', 500, 'Fast'),
(13, 'Shoaib', 'shoaib@gmail.com', 'Sanjar pur', 'Model S', 'Blue ', '4wd', 'black', 500, 'Fast'),
(17, 'Aleem', 'Aleem@gmail.com', 'Aleem Street 5', 'Model S', 'Black ', '4wd', 'White', 500, 'Fast'),
(18, 'Nazar', 'Nazar@gmail.com', 'Nazar Street 6', 'Model X', 'Red ', '4wd', 'white', 320, 'Normal'),
(19, 'Kamil', 'Kamil@gmail.com', 'Kamil street 5', 'Model Y', 'Grey ', '2wd', 'Black', 500, ''),
(20, 'Aun Muhammad', 'Aun@gmail.com', 'Aun street 4', 'Model X', 'Black ', '4wd', 'Black', 500, 'Fast'),
(21, 'Asfund', 'Asfund@gmail.com', 'Street #6', 'Model S', 'Black ', '4wd', 'Brown', 500, 'Fast');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
