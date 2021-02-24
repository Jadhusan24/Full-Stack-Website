-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 02:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Samsung'),
(2, 'Oppo'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'Nokia'),
(6, 'Micromax'),
(7, 'Lenovo'),
(8, 'Red Mi'),
(9, 'Nexus'),
(10, 'Motorola'),
(11, 'One Plus');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CID` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `category_name`) VALUES
(1, 'Laptops'),
(2, 'Work PCs'),
(3, 'Gaming PCs'),
(4, 'Smartphones');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MID`, `name`, `email`, `password`) VALUES
(1, 'TEST', 'test@gmail.com', '$2y$10$OSffHxVg3.fsMEiMKbntCOSz7c3MVrKCu3btYHjNaqEjD2hYq1P7e'),
(2, 'TESTJ', 'user@gmail.co', '$2y$10$bE1IKtotNAPq0oa5rKseH.oCTXWxCth7U9nWYksncQFTjJU/rmzqO');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `order_date` date DEFAULT current_timestamp(),
  `shipping_addr` varchar(250) NOT NULL,
  `shipping_date` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL DEFAULT 'Card',
  `allowed` varchar(100) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `p_name`, `price`, `brand_id`, `cat_id`, `image`) VALUES
(1, 'Samsung Galaxy J7', 200, 1, 4, 'si1.jpg'),
(2, 'OPPO A37f', 230, 1, 4, 'm2.jpg'),
(3, 'Apple IPhone X', 280, 1, 4, 'm3.jpg'),
(4, 'Infinix Hot S3', 300, 1, 4, 'mk1.jpg'),
(5, 'Moto X4 (6GB)', 233, 1, 4, 'mk2.jpg'),
(6, 'iVooMi i series', 249, 1, 4, 'mk3.jpg'),
(7, 'IPhone', 252, 1, 4, 'mk7.jpg'),
(8, 'Iphone 5s', 240, 1, 4, 'mk6.jpg'),
(9, 'Sony', 300, 3, 4, 'mk9.jpg'),
(10, 'Samsung Galaxy S8 Edge', 100, 3, 4, 'mk5.jpg'),
(11, 'Samsung Galaxy Note 9', 243, 3, 4, 'mk8.jpg'),
(12, 'Nokia', 320, 6, 4, 'mk4.jpg'),
(13, 'Dell Inspiron i9', 320, 6, 1, 'mm5.jpg'),
(14, 'MSI Gl75 9SEK', 349, 11, 1, 'mm1.jpg'),
(15, 'Acer Nitro 5 Core i7 8750H Gaming Laptop', 249, 4, 1, 'mm6.jpg'),
(16, 'HP ProBook', 230, 5, 1, 'mm4.jpg'),
(17, 'Huawei MateBook', 180, 5, 1, 'mm7.jpg'),
(18, 'Lenovo Legion Y540', 199, 6, 1, 'mm11.jpg'),
(19, 'Dell Vostro Laptop', 252, 10, 1, 'mm5.jpg'),
(20, 'Acer Laptop', 240, 3, 1, 'mm3.jpg'),
(21, 'Lenovo', 300, 6, 3, 'off1.jpg'),
(22, 'New Razer Blade Pro 17', 449, 3, 1, 'mm6.jpg'),
(23, 'ASUS ZenBook S13 Ultra Thin & Light Laptop FHD', 145, 11, 3, 'mm12.jpg'),
(24, 'Apple Mac Book Air 13\" SPACE GRAY 128GB Laptop', 499, 3, 1, 'mm11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`MID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `products` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`CID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
