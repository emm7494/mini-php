-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 22, 2020 at 11:39 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `category` text NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `image` varchar(128) NOT NULL DEFAULT 'default_image.jpg',
  `tags` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `quantity`, `image`, `tags`, `created`) VALUES
(1, 'Nokia 3310', 'Feature phone', 110.99, 18, 'Nokia_3310.jpeg', '#Discount#LongBatteryLife', '2020-08-02 12:04:03'),
(2, 'Beats', 'Headphone', 950.99, 6, 'Beats.jpeg', '#Discount', '2020-08-02 12:14:29'),
(3, 'Nokia 8 Sirocco', 'Smartphone', 1200.99, 12, 'Nokia 8 Sirocco.jpeg', '#Featured#BestSelling', '2020-08-02 12:15:04'),
(4, 'Samsung Galaxy s8', 'Smartphone', 1250.99, 14, 'Samsung Galaxy s8.jpeg', '#Featured#Discount', '2020-02-01 12:16:08'),
(5, 'Apple Watch', 'Smart Watch', 11.99, 4, 'Apple Watch.jpeg', '#Clearance#Discount#Featured', '2020-08-02 12:17:58'),
(6, 'Samsung Galaxy Watch', 'Smart Watch', 12.99, 8, 'Samsung Galaxy Watch.jpeg', '#Clearance#Featured', '2020-08-02 12:18:21'),
(7, 'HP Pavilion Power', 'Laptop', 3100.99, 3, 'HP Pavilion Power.jpeg', '#BestSelling#Discount#Featured', '2020-08-02 12:18:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
