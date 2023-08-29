-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 09:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '07-03-2020 10:30:06 PM');

-- --------------------------------------------------------

--
-- Table structure for table `all_booking`
--

CREATE TABLE `all_booking` (
  `pid` int(11) NOT NULL,
  `Category Name` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `PRESCRIPTION` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `total_Price` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `appartment` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Postal / Zip` varchar(20) NOT NULL,
  `Email Address` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Order Notes` varchar(50) NOT NULL,
  `reg_email` varchar(30) NOT NULL,
  `order_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_booking`
--

INSERT INTO `all_booking` (`pid`, `Category Name`, `Price`, `PRESCRIPTION`, `qty`, `total_Price`, `user_email`, `fname`, `last_name`, `Address`, `appartment`, `State`, `Postal / Zip`, `Email Address`, `Phone`, `Order Notes`, `reg_email`, `order_id`) VALUES
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1939792713143474563'),
(2, '		  Chanca Piedra', '200', ' admin/product/product_02.png', '1', '200', 'rathodhemant730@gmail.com', 'Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1939792713143474563'),
(3, '		  Umaka Cold Care', '400', ' admin/product/product_03.png', '1', '400', 'rathodhemant730@gmail.com', 'Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1939792713143474563'),
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1939792713143474563'),
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'jwjd', 'dd', 'dsd', 'sd', 'eded', '1223', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1467517195479647700'),
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1939792713143474563'),
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'jwjd', 'dd', 'dsd', 'sd', 'eded', '1223', ' rathodhemant730@gmail.com', '12345678901', '', ' rathodhemant730@gmail.com', '1467517195479647700'),
(1, 'Biodrama', '400', ' admin/product/product_01.png', '1', '400', 'rathodhemant730@gmail.com', 'frfff', 'efe', 'efe', 'fef', 'efef', '1111', ' rathodhemant730@gmail.com', '1234567890', '', ' rathodhemant730@gmail.com', '1053652842790738738');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `Category Name` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `PRESCRIPTION` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `total_Price` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_medicine`
--

CREATE TABLE `order_medicine` (
  `id` int(11) NOT NULL,
  `fname` varchar(23) NOT NULL,
  `lname` varchar(23) NOT NULL,
  `email` varchar(23) NOT NULL,
  `contact` varchar(23) NOT NULL,
  `country` varchar(23) NOT NULL,
  `state` varchar(23) NOT NULL,
  `city` varchar(23) NOT NULL,
  `address` varchar(23) NOT NULL,
  `postal_zip` varchar(23) NOT NULL,
  `image` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `joind` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pharma_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`pid`, `name`, `password`, `joind`, `email`, `contact`, `address`, `state`, `pharma_login`) VALUES
(102, 'hemant', 'hemant123', '2020-03-09 15:55:00', 'hrathod863@gmail.com', '8452953661', 'k.d compound , ram rahim seva ', 'Maharashtra', '2020-03-09 15:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Category Name` varchar(220) NOT NULL,
  `Description` varchar(22) NOT NULL,
  `Price` varchar(22) NOT NULL,
  `PRESCRIPTION` varchar(22) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Category Name`, `Description`, `Price`, `PRESCRIPTION`, `Stock`) VALUES
(1, 'Biodrama', 'Biodrama', '400', 'product_01.png', 100),
(2, '		  Chanca Piedra', '		  Chanca Piedra\r\n', '200', 'product_02.png', 100),
(3, '		  Umaka Cold Care', '		  Umaka Cold Care\r\n', '400', 'product_03.png', 100),
(4, 'CetylPure', 'CetylPure', '100', 'product_04.png', 100),
(5, '		  Cla Core', '		  Cla Core\r\n', '100', 'product_05.png', 100),
(6, '		  Poo Pourrt', '		  Poo Pourrt\r\n', '100', 'product_06.png', 100),
(7, 'IbuProfen', 'IbuProfen', '400', 'product_07_large.png', 100),
(8, '           Red Bull', '           Red Bull\r\n', '100', 'Red Bull.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Confirm Password:` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `email`, `password`, `Confirm Password:`) VALUES
(10, 'hemant', '1234567890', 'rathodhemant730@gmail.com', 'Hemant1234', 'Hemant1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `fname` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `appartment` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Postal / Zip` varchar(20) NOT NULL,
  `Email Address` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Order Notes` varchar(50) NOT NULL,
  `reg_email` varchar(30) NOT NULL,
  `order_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`fname`, `last_name`, `Address`, `appartment`, `State`, `Postal / Zip`, `Email Address`, `Phone`, `Order Notes`, `reg_email`, `order_id`) VALUES
('Hemant', 'Rathod', 'vfgogkpk', 'flgkplgtl', 'ogrokgpr', '12', 'rathodhemant730@gmail.com', '12345678901', '', 'rathodhemant730@gmail.com', '1939792713143474563'),
('jwjd', 'dd', 'dsd', 'sd', 'eded', '1223', 'rathodhemant730@gmail.com', '12345678901', '', 'rathodhemant730@gmail.com', '1467517195479647700'),
('frfff', 'efe', 'efe', 'fef', 'efef', '1111', 'rathodhemant730@gmail.com', '1234567890', '', 'rathodhemant730@gmail.com', '1053652842790738738');

-- --------------------------------------------------------

--
-- Table structure for table `user_response`
--

CREATE TABLE `user_response` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `massege` varchar(90) NOT NULL,
  `response_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_response`
--

INSERT INTO `user_response` (`id`, `first_name`, `last_name`, `email`, `subject`, `massege`, `response_date`, `contact`) VALUES
(1, 'hemant', 'rathod', 'hrathod863@gmail.com', 'Product-Tracking', 'hiiii iam hemant', '2020-03-06 20:17:15', '8452953661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_response`
--
ALTER TABLE `user_response`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_medicine`
--
ALTER TABLE `order_medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_response`
--
ALTER TABLE `user_response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
