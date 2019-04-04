-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 03:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wil`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `dob` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `favBike` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `dob`, `email`, `favBike`, `firstname`, `lastname`) VALUES
(10, 'puneet', '123', 'male', '17-10-1989', 'puneetsharma137@gmail.com', 'BMW-K1600', '', ''),
(11, 'Amit', '123', 'male', '23-5-1956', 'puneet.pyt@gmail.com', 'TRIUMP TIGER 800 XC', '', ''),
(12, 'Raj', '123456789', 'male', '1-1-1947', 'raj@gmail.com', 'KAWASAKI Z900RS', '', ''),
(13, 'simran', '1414', 'female', '1-1-1947', 'simi@gmail.com', 'TRIUMP TIGER 800 XC', '', ''),
(14, 'rahul', '142563', 'male', '11-4-1962', 'rainyboy@gmail.com', 'CONTINENTAL GT', '', ''),
(15, 'sumiit sharma', '123', 'male', '1-1-1947', 'sumit@gmail.com', 'APRILIA-RSV4 RF', 'sumiit', 'sharma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
