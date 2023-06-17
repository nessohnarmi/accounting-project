-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 04:50 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `account_book` text NOT NULL,
  `debit` int(255) NOT NULL,
  `credit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `date`, `description`, `account_book`, `debit`, `credit`) VALUES
(6, '2023-06-13', 'LUX sale', ' ', 50, 0),
(7, '2023-06-20', 'LUX Purchase', ' ', 0, 45);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `initial_quantity` int(255) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `status` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `initial_quantity`, `purchase_price`, `sale_price`, `status`, `description`) VALUES
(136, 'LUX', 'images/products/Lux_Soap.jpg', 1, 45, 50, 'In Stock', ''),
(140, 'Lifebuoy', 'images/products/Lifebuoy.jpg', 1, 50, 53, 'In Stock', ''),
(141, 'Foog Perfume', 'images/products/Foog Perfume.jpg', 1, 225, 240, 'In Stock', ''),
(144, 'Ice cool powder', 'images/products/Ice cool powder.jpg', 1, 45, 55, 'In Stock', ''),
(145, 'Vaseline ', 'images/products/Vaseline.png', 1, 250, 260, 'In Stock', ''),
(146, 'Meril Lip gel', 'images/products/Meril Lip gel.jpg', 1, 45, 50, 'In Stock', ''),
(147, 'Bady Lotion', 'images/products/Bady Lotion.jpg', 1, 220, 230, 'In Stock', ''),
(148, 'Dove Shampoo', 'images/products/Dove Shampoo.jpg', 1, 200, 210, 'In Stock', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `product_name` text NOT NULL,
  `qty` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `date`, `product_name`, `qty`, `price`, `status`) VALUES
(7, '2023-06-13', 'LUX ', 1, 39, 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `product_name` text NOT NULL,
  `qty` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `date`, `product_name`, `qty`, `price`, `status`) VALUES
(1, '2023-06-19', 'LUX ', 1, 50, 'Out Stock');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `purchase_product_price` int(255) NOT NULL,
  `purchase_qty` int(255) NOT NULL,
  `purchase_price` int(255) NOT NULL,
  `sale_product_price` int(255) NOT NULL,
  `sale_qty` int(255) NOT NULL,
  `sale_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_name`, `purchase_product_price`, `purchase_qty`, `purchase_price`, `sale_product_price`, `sale_qty`, `sale_price`) VALUES
(1, 'LUX ', 45, 1, 45, 50, 1, 50);

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
(4, 'Durjoy Dey', 'durjoydey663@gmail.com', '590229', '01823657845'),
(5, 'Dabi Rani Dey', 'dabirani12@gmail.com', '590227', '01845789658');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
