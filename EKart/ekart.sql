-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 01:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `email`, `username`, `password`) VALUES
(1, 'abc@admin.com', 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `placed_order`
--

CREATE TABLE `placed_order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placed_order`
--

INSERT INTO `placed_order` (`id`, `name`, `phone`, `address1`, `address2`, `city`, `state`, `product_id`) VALUES
(2, 'ayush', '9997863298', 'E-14', 'sector 55', 'noida', 'uttarakhand', 20),
(3, 'ayush', '9997863298', 'E-14', 'sector 55', 'noida', 'uttarakhand', 20),
(4, 'ayush sachdev', '9997863298', 'sachdeva ready made center, NDT market opp. govind vallabh school', 's', 'ssss', 'ssddds', 20),
(5, 'ayush sachdev', '9997863298', 'sachdeva ready made center, NDT market opp. govind vallabh school', 's', 'ssss', 'ssddds', 20),
(6, 'asach', '9720588990', 'NSEZ phase 2', 'proprofs.com', 'Noida', 'UP', 21),
(7, 'Chetan', '8273241498', 'abc', 'adx', 'dehradun', 'U.K', 21),
(8, 'Sohil', '7877185854', 'qwe', 'qwe', 'qwe', 'qwe', 21),
(9, 'Sohil Sundaram', '7877185854', 'DUN', 'CT', 'Dehradun', 'UK', 21),
(10, 'qwerrrrrrrrrrrrty', '12345678', 'qwd', 'q23', 'qwer', 'qwert', 20),
(11, 'ddcdd', '123434', 'ddd', 'ffffdsssss', 'fgg', 'jsh', 20),
(12, 'aastha ', '637839434774', 'gshssh', 'ssjs', 'ddn', 'UK', 20),
(13, 'Sohil', '7877185854', 'DUN', 'DUN', 'DUN', 'UK', 25),
(14, 'kritika', '123345467', 'ddn', 'ddn', 'Dehradun', 'UK', 25),
(15, 'www', '1222222', 'www', 'xxx', 'dd', 'dd', 24),
(16, 'dhdjd', '344f', 'fffffff', 'fff', 'vvv', 'jjj', 20),
(17, 'ttttt', '45678', 'hjj', 'mnn', 'ss', 'pp', 20),
(18, 'mm', '123456766', 'qq', 'aa', 'ff', 'zz', 26),
(19, 'bb', '123456', 'nn', 'mm', 'ww', 'bb', 26),
(20, 'kk', '12345678', 'xx', 'mm', 'ff', 'tt', 24),
(21, 'kittu', '1234567', 'ddn', 'DUN', 'sre', 'up', 23),
(22, 'dfgh', '4567890', 'wedfghjkl', '34r5t6y7u8io', 'dfghj', 'tghjk', 24),
(23, 'pooja', '12345678', 'ddd', 'q23', 'ff', 'UK', 23),
(24, 'qwerrrrrrrrrrrrty', '7877185854', 'ddd', 'DUN', 'Dehradun', 'UK', 22),
(25, 'aastha ', '4567', 'ddd', 'DUN', 'Dehradun', 'UK', 24);

-- --------------------------------------------------------

--
-- Table structure for table `product_catalogue`
--

CREATE TABLE `product_catalogue` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_catalogue`
--

INSERT INTO `product_catalogue` (`id`, `name`, `slug`, `price`, `category`, `image`, `type`, `quantity`) VALUES
(20, 'Roadster Shirt', 'roadster_shirt', '1200', 10, 'shirts.jpg', 'men', 4),
(21, 'Round Neck T-Shirt ', 'roadster_shirt1', '799', 11, 'tshirt.jpg', 'men', 5),
(22, 'Kid Jacket', 'kids_jac', '599', 12, 'kidjc.jpg', 'kids', 5),
(23, 'Kid Shirt', 'kid_shirt', '499', 13, 'kidsh.jpg', 'kids', 4),
(24, 'Kid T-Shirt', 'kid_tsh', '359', 14, 'kidtsh.jfif', 'kids', 7),
(25, 'Woman Shirt', 'wm_shirt', '899', 15, 'wmshirt.jpg', 'women', 4),
(26, 'Woman T-Shirt', 'wm_tsh', '699', 16, 'wmtsh.jfif', 'women', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `slug`, `cat_image`) VALUES
(10, 'shirts', 'shirts', 'shirts.jpg'),
(11, 't-shirts', 't_shirts', 'tshirt.jpg'),
(12, 'Kid Jacket', 'kids_jac', 'kidjc.jpg'),
(13, 'Kid Shirt', 'kid_shirt', 'kidsh.jpg'),
(14, 'Kid T_Shirt', 'kid_tsh', 'kidtsh.jfif'),
(15, 'Woman Shirt', 'wm_shirt', 'wmshirt.jpg'),
(16, 'Woman T-Shirt', 'wm_tsh', 'wmtsh.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Name` text NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Name`, `UserName`, `Email`, `Password`, `Mobile`) VALUES
('Kritika', 'kutti', 'kritikaagarwal696@gmail.com', '123', '9634034043'),
('Aman', 'qwerty', 'amanaman@aman.aman', '12345', '1234567890'),
('kritika agarwal', 'kritika', 'kritikaagarwal696@gmail.com', '123', '123456789098'),
('viru', 'viru', 'viru12@gmail.com', '1234567', '12345678'),
('harshi', 'harshi', 'harshi@gmail.com', '1234', '12345678907'),
('aastha ', 'aasthaaggarwal', 'qsmlqsl@gmail.com', 'aa', '12345678'),
('pooja', 'pooja', 'pooja/////////@gmail.com', '1234', '123456789088'),
('', '', '', '', ''),
('kittu1', 'kittu', 'kittu@gmail.com', '123', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placed_order`
--
ALTER TABLE `placed_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `placed_order`
--
ALTER TABLE `placed_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
