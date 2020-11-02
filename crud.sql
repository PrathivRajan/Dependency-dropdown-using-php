-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 06:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(40) NOT NULL,
  `state_id` int(40) NOT NULL,
  `city_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`) VALUES
(1, 1, 'Chennai'),
(2, 1, 'Trichy'),
(3, 2, 'Panaji'),
(4, 2, 'Velha Goa'),
(5, 4, 'Calgary'),
(6, 4, 'Red Deer'),
(7, 5, 'Vancouver'),
(8, 5, 'Victoria'),
(9, 6, 'Perth'),
(10, 6, 'Rockingham'),
(11, 7, 'Mount Gambier'),
(12, 7, 'Gawler');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(40) NOT NULL,
  `country_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'Canada'),
(4, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(40) NOT NULL,
  `img` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `education` varchar(40) NOT NULL,
  `language` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `tell_us_something` text NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `img`, `name`, `age`, `gender`, `email`, `education`, `language`, `country`, `state`, `city`, `tell_us_something`, `password`) VALUES
(2, '', 'Prathiv Rajan', 27, 'Male', 'rajanprathiv@gmail.com', 'PG', 'English,', '', '', '', 'NIC', '12345'),
(4, '', 'santhosh', 25, 'Male', 'rajna@gasmdasd.cas', 'PG', 'English,Tamil', '', '', '', 'chunma', ''),
(5, '', 'santhosh', 25, 'Male', 'rajna@gasmdasd.cas', 'PG', 'English,Hindi,', 'Australia', '', '', 'chunma', ''),
(7, '', 'santhosh', 25, 'Male', 'rajna@gasmdasd.cas', 'PG', 'English,Tamil,Hindi,', 'Australia', '', '', 'chunma', ''),
(8, '', 'santhosh', 34, 'Male', 'rajna@gasmdasd.cas', '12th', 'English,Tamil,Hindi,', 'Australia', '', '', 'sdfds', ''),
(9, '', 'santhosh', 34, 'Male', 'rajna@gasmdasd.cas', '12th', 'English,Tamil,Hindi,', 'Australia', '', '', 'sdfds', ''),
(10, '', 'santhosh', 34, 'Male', 'rajna@gasmdasd.cas', '12th', 'English,Tamil,Hindi,', 'Australia', '', '', 'sdfds', ''),
(11, '', 'santhosh', 34, 'Male', 'rajna@gasmdasd.cas', '12th', 'English,Tamil,Hindi,', 'Australia', '', '', 'sdfds', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(40) NOT NULL,
  `country_id` int(40) NOT NULL,
  `state` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state`) VALUES
(1, 1, 'Tamil Nadu'),
(2, 1, 'Goa'),
(4, 2, 'Alberta'),
(5, 2, 'British Columbia'),
(6, 4, 'Western Australia'),
(7, 4, 'South Australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
