-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 07:26 AM
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
-- Database: `hungryeats`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `feedback` longtext NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `address`, `feedback`, `dt`) VALUES
(1, 'Rahul', 'rtaak786@gmail.com', 'Abohar District Fazilka', 'Very Good Taste', '2022-08-08 23:49:08'),
(2, 'Rahul', 'rtaak786@gmail.com', 'Abohar District Fazilka', 'Very Good Taste', '2022-08-08 23:49:56'),
(3, 'Deepak', 'deepak@gmail.com', 'patiala', 'Good.', '2022-08-09 11:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(55) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sizem` int(55) NOT NULL,
  `sizel` int(55) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `type`, `sizem`, `sizel`, `dt`) VALUES
(1, '🍕 Pizza', 'Cheese Pizza', 110, 150, '2022-08-09 23:40:11'),
(2, '🍕 Pizza', 'Corn Pizza', 120, 160, '2022-08-09 23:40:55'),
(3, '🍕 Pizza', 'Tomato Pizza', 120, 160, '2022-08-09 23:41:41'),
(4, '🍕 Pizza', 'Margreta Pizza', 130, 170, '2022-08-09 23:42:39'),
(5, '🍕 Pizza', 'Fresh Veggi Pizza', 140, 180, '2022-08-09 23:42:39'),
(6, '🍕 Pizza', 'Cottage Cheese Pizza', 150, 200, '2022-08-09 23:43:46'),
(7, '🍕 Pizza', 'Frizza Pizza', 180, 220, '2022-08-09 23:43:46'),
(8, '🍕 Pizza', 'Tangi Pizza', 180, 220, '2022-08-09 23:44:11'),
(9, '🍔 Burger', 'Aloo Tikki Burger', 30, 40, '2022-08-10 21:39:09'),
(10, '🍔 Burger', 'Veg Crispy Burger', 40, 50, '2022-08-10 21:39:09'),
(11, '🍔 Burger', 'Butter Disaster Burger', 50, 60, '2022-08-10 21:41:39'),
(12, '🍔 Burger', 'Cheese Burger', 50, 60, '2022-08-10 21:41:39'),
(13, '🍔 Burger', 'Chips Burger', 60, 70, '2022-08-10 21:42:44'),
(14, '🍔 Burger', 'Double Veg Burger', 60, 80, '2022-08-10 21:42:44'),
(15, '🍔 Burger', 'Decker Burger', 70, 80, '2022-08-10 21:44:03'),
(16, '🍔 Burger', 'Paneer Burger', 80, 100, '2022-08-10 21:44:03'),
(17, '🍔 Burger', 'Cheese Paneer Burger', 80, 95, '2022-08-10 21:44:58'),
(18, '🍔 Burger', 'Big Beng Burger', 90, 110, '2022-08-10 21:45:55'),
(19, '🍔 Burger', 'God Father Burger', 110, 130, '2022-08-10 21:45:55'),
(20, '🍟 Fries', 'Classic Fries', 40, 60, '2022-08-10 21:50:44'),
(21, '🍟 Fries', 'Peri Peri Fries', 50, 70, '2022-08-10 21:50:44'),
(22, '🍟 Fries', 'Cheese Fries', 70, 90, '2022-08-10 21:51:35'),
(23, '🍟 Fries', 'Peri Peri Cheese Fries', 80, 100, '2022-08-10 21:51:35'),
(24, '🍟 Fries', 'Masala Fries', 80, 100, '2022-08-10 21:52:52'),
(25, '🍟 Fries', 'Chilli Cheese Fries', 80, 100, '2022-08-10 21:52:52'),
(26, '🥪 Sandwich', 'Healthy Sandwich', 40, 60, '2022-08-10 22:03:08'),
(27, '🥪 Sandwich', 'Butter Sandwich', 50, 70, '2022-08-10 22:03:08'),
(28, '🥪 Sandwich', 'Aloo Tikki Sandwich', 60, 80, '2022-08-10 22:05:15'),
(29, '🥪 Sandwich', 'Pizza Sandwich', 80, 100, '2022-08-10 22:05:15'),
(30, '🥪 Sandwich', 'Paneer Sandwich', 80, 100, '2022-08-10 22:05:45'),
(31, '🥪 Sandwich', 'Angry Mozzarella Sandwich', 100, 120, '2022-08-10 22:06:44'),
(32, '🥪 Sandwich', 'Protein Sandwich', 100, 120, '2022-08-10 22:06:44'),
(33, '🌯 Wrap', 'Veg Wrap', 40, 60, '2022-08-10 22:24:40'),
(34, '🌯 Wrap', 'Cheese Wrap', 55, 75, '2022-08-10 22:24:40'),
(35, '🌯 Wrap', 'Paneer Wrap', 60, 80, '2022-08-10 22:25:28'),
(36, '🌯 Wrap', 'Cheese Paneer Wrap', 75, 95, '2022-08-10 22:25:28'),
(37, '🌯 Wrap', 'God Father Wrap', 85, 110, '2022-08-10 22:27:04'),
(38, '🌯 Wrap', 'Double Deluxe Wrap', 80, 120, '2022-08-10 22:27:04'),
(39, '🍝 Pasta', 'Red Pasta', 80, 120, '2022-08-10 22:30:36'),
(40, '🍝 Pasta', 'White Pasta', 90, 130, '2022-08-10 22:30:36'),
(41, '🍝 Pasta', '50-50 Pasta', 80, 140, '2022-08-10 22:31:31'),
(42, '🍝 Pasta', 'Indian Pasta', 80, 140, '2022-08-10 22:31:31'),
(43, '🍜 Noodles', 'Masala Cheese Noodles', 40, 60, '2022-08-10 22:34:29'),
(44, '🥗 Salad', 'Classic Salad', 80, 120, '2022-08-10 22:37:48'),
(45, '🥗 Salad', 'B.B.Q. Paneer Salad', 90, 140, '2022-08-10 22:37:48'),
(46, '🥗 Salad', 'Grilled Paneer Salad', 100, 150, '2022-08-10 22:38:41'),
(47, '🥗 Salad', 'Tandoori Paneer Salad', 100, 160, '2022-08-10 22:38:41'),
(48, '🍺 Shake', 'Cold Coffee', 40, 60, '2022-08-10 23:23:07'),
(49, '🍺 Shake', 'Vanila Shake', 50, 70, '2022-08-10 23:23:07'),
(50, '🍺 Shake', 'Strawberry Shake', 50, 70, '2022-08-10 23:23:57'),
(51, '🍺 Shake', 'Butter Scotch', 60, 80, '2022-08-10 23:23:57'),
(52, '🍺 Shake', 'Black Current', 60, 80, '2022-08-10 23:26:03'),
(53, '🍺 Shake', 'Oreo Shake', 50, 80, '2022-08-10 23:26:03'),
(54, '🍺 Shake', 'Chocolate Shake', 50, 80, '2022-08-10 23:27:22'),
(55, '🍺 Shake', 'Kit Kat Shake', 60, 90, '2022-08-10 23:27:22'),
(56, '🍺 Shake', 'Coffee Chocolate Shake', 60, 100, '2022-08-10 23:46:49'),
(57, '🍺 Shake', 'Carmal Shake', 60, 100, '2022-08-10 23:46:49'),
(58, '🍺 Shake', 'Coffee Carmal', 70, 110, '2022-08-10 23:47:43'),
(59, '🍺 Shake', 'Coffee Oreo', 70, 110, '2022-08-10 23:47:43'),
(60, '🍾 Beverages', 'Pepsi', 20, 40, '2022-08-10 23:51:27'),
(61, '🍾 Beverages', 'Sprite', 20, 40, '2022-08-10 23:51:27'),
(62, '🍾 Beverages', 'Slice', 20, 40, '2022-08-10 23:51:55'),
(63, '🍾 Beverages', 'Dew', 20, 40, '2022-08-10 23:51:55'),
(64, '🍾 Beverages', 'Water', 20, 30, '2022-08-10 23:52:47'),
(65, '🍾 Beverages', 'Soda', 10, 20, '2022-08-10 23:52:47'),
(66, '☕ Tea', 'Simple Tea', 10, 20, '2022-08-10 23:54:08'),
(67, '☕ Tea', 'Masala Tea', 20, 30, '2022-08-10 23:54:08'),
(68, '🍨 Ice Cream', 'Vanilla Ice Cream', 40, 60, '2022-08-10 23:56:49'),
(69, '🍨 Ice Cream', 'Strawberry Ice Cream', 50, 80, '2022-08-10 23:56:49'),
(70, '🍨 Ice Cream', 'Chocolate Ice Cream', 60, 100, '2022-08-10 23:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `orderkro`
--

CREATE TABLE `orderkro` (
  `id` int(55) NOT NULL,
  `uni` int(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `types` varchar(55) NOT NULL,
  `price` int(55) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderkro`
--

INSERT INTO `orderkro` (`id`, `uni`, `category`, `types`, `price`, `dt`) VALUES
(9, 3, 'Tomato Pizza', 'Medium', 120, '2022-08-10 20:02:28'),
(19, 24, 'Masala Fries', 'Medium', 80, '2022-08-10 21:55:25'),
(25, 17, 'Cheese Paneer Burger', 'Large', 95, '2022-08-10 22:21:46'),
(26, 41, '50-50 Pasta', 'Medium', 80, '2022-08-10 22:35:41'),
(31, 59, 'Coffee Oreo', 'Large', 110, '2022-08-10 23:48:17'),
(38, 1, 'Cheese Pizza', 'Medium', 110, '2022-08-13 01:05:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderkro`
--
ALTER TABLE `orderkro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orderkro`
--
ALTER TABLE `orderkro`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
