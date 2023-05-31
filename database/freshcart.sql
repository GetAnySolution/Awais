-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `picture`) VALUES
(1, 'Hassan', 'hassan@gmail.com', 'hassan123', 'picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `name`, `description`, `date`, `status`) VALUES
(5, 'bakery.svg', 'bakery', 'bakery products', '2023-05-29', 1),
(6, 'petfoods.svg', 'Pet Foods ', 'Pet Products', '2023-05-29', 1),
(7, 'dairy.svg', 'Dairy', 'Dairy Products', '2023-05-30', 0),
(8, 'snacks.svg', 'Snacks ', 'Snacks Products', '2023-05-31', 1),
(9, 'fruit.svg', 'Fruits & Vegetables', 'Fruits & Vegetables', '2023-05-31', 1),
(10, 'fish.svg', 'Fish', 'Fish', '2023-05-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `catid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL,
  `inStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `catid`, `status`, `price`, `createdAt`, `img`, `inStock`) VALUES
(1, '5 Star Chocolate', '5 Star Chocolate', 8, 1, 22, '2023-05-29 07:17:29', 'product-img-3.jpg', 1),
(2, 'Butter', 'Butter', 7, 1, 22, '2023-05-29 07:17:29', 'product-img-10.jpg', 1),
(3, 'Cat Feed', 'Pet Food', 6, 1, 50, '2023-05-29 07:09:59', 'product-img-9.jpg', 0),
(4, 'Lays', 'Snacks', 8, 1, 50, '2023-05-29 07:17:29', 'product-img-4.jpg', 1),
(5, 'Pop Corn', 'Snacks', 8, 1, 50, '2023-05-29 07:16:32', 'product-img-5.jpg', 1),
(6, 'Biscuits', 'Biscuits', 5, 0, 20, '2023-05-29 08:02:49', 'product-img-2.jpg', 0),
(7, 'Chocolate', 'Chocolate', 8, 1, 10, '2023-05-29 08:03:26', 'product-img-9.jpg', 0),
(8, 'Corn Flakes', 'Corn Flakes', 8, 1, 55, '2023-05-29 08:04:24', 'product-img-8.jpg', 0),
(9, 'Pineapple', 'Pineapple', 9, 1, 10, '2023-05-31 07:19:20', 'product-img-16.jpg', 1),
(10, 'Amul Butter', 'Amul Butter', 5, 1, 11, '2023-05-31 07:21:32', 'product-img-10.jpg', 1),
(11, 'Machli Palla', 'Machli Palla', 10, 1, 11, '2023-05-31 08:00:15', 'product-single-img-4.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catid` (`catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
