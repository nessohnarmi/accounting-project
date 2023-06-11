-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE `exports` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `buy_rate` varchar(50) NOT NULL,
  `initial_quantity` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exports`
--

INSERT INTO `exports` (`id`, `name`, `product_id`, `date`, `buy_rate`, `initial_quantity`, `description`, `image`) VALUES
(1, 'Loptop', '45 ', '2023-06-19', '45000 ', '1', 'good', ''),
(2, 'Monitor', '75 ', '2023-12-05', '25000 ', '1', 'good', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `buy_rate` varchar(500) NOT NULL,
  `initial_quantity` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `product_id`, `buy_rate`, `initial_quantity`, `description`, `date`) VALUES
(49, 'computer', '', '78 ', '50000 ', '3', 'good', '2023-06-07'),
(51, 'Mouse', '', '464 ', '500 ', '4', 'good', '2023-06-08'),
(52, 'SSD', '', '95 ', '2000 ', '2', 'good', '2023-06-09'),
(76, 'Hard dive', '', '45 ', '4500 ', '2', 'good', '2023-06-10'),
(77, 'Cable', '', '48 ', '200 ', '1', 'good', '2023-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_no`) VALUES
(3, 'Monayem Chowdhury', 'monayemcpi@gmail.com', '12345678', '01823949999'),
(4, 'Durjoy Dey', 'durjoydey663@gmail.com', '590229', '01823657845');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exports`
--
ALTER TABLE `exports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
