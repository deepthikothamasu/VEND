-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 06:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_mobile` varchar(15) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `admin_fullname` varchar(255) DEFAULT NULL,
  `admin_image` varchar(255) DEFAULT NULL,
  `admin_type` varchar(225) DEFAULT NULL,
  `admin_status` int(11) DEFAULT '1',
  `admin_logintime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_email`, `admin_mobile`, `admin_password`, `admin_fullname`, `admin_image`, `admin_type`, `admin_status`, `admin_logintime`) VALUES
(1, 'admin', 'admin@gmail.com', '9988776655', 'admin123', 'admin', 'avatar.png', 'Admin', 2, '2018-03-09 10:08:46'),
(2, 'admin1', 'admin@gmail.com', '9988665544', 'admin', 'admin', '28122017avatar3.png', 'Admin', 2, '2018-03-03 19:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `pro_prise` int(11) DEFAULT NULL,
  `pro_start_time` varchar(255) DEFAULT NULL,
  `pro_end_time` varchar(255) DEFAULT NULL,
  `pro_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pro_name`, `pro_image`, `pro_prise`, `pro_start_time`, `pro_end_time`, `pro_status`) VALUES
(4, 'Keyboard', '20180307171710.jpg', 1500, '2018-03-08', '2018-03-09 12:12:10', 1),
(5, 'Joystick', '20180307171757.jpg', 1000, '2018-03-08', '2018-03-11 18:10:22', 1),
(6, 'Moniter', '20180307171902.jpg', 6000, '2018-03-09', '2018-03-12 20:20:20', 1),
(7, 'aa', '20180309100944.jpg', 1200, '2018-03-09', '2018-03-10 12:12:00', 1),
(8, 'bbbb', '20180309101018.jpg', 1234, '2018-03-08', '2018-03-09 10:10:10', 1),
(9, 'ccc', '20180309101050.jpg', 2586, '2018-03-09', '2018-03-09 10:15:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(255) DEFAULT NULL,
  `reg_email` varchar(255) DEFAULT NULL,
  `reg_phone` varchar(255) DEFAULT NULL,
  `reg_gender` varchar(255) DEFAULT NULL,
  `reg_password` varchar(255) DEFAULT NULL,
  `reg_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `reg_name`, `reg_email`, `reg_phone`, `reg_gender`, `reg_password`, `reg_address`) VALUES
(1, 'nani', 'nani@gmail.com', '9441504657', 'Male', 'nani', 'guntur'),
(2, 'kumar', 'manohar.itsdesigner@gmail.com', '8919583265', 'Male', 'kumar', 'sampathnager'),
(3, 'sai', 'sai@gmail.com', '9966332211', 'Male', 'sai', 'viji');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_bid`
--

CREATE TABLE `user_product_bid` (
  `up_id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_price` int(11) NOT NULL,
  `reg_name` varchar(255) DEFAULT NULL,
  `reg_email` varchar(255) DEFAULT NULL,
  `bid_amt` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product_bid`
--

INSERT INTO `user_product_bid` (`up_id`, `pid`, `pro_name`, `pro_price`, `reg_name`, `reg_email`, `bid_amt`) VALUES
(1, 4, 'Keyboard', 1500, 'nani', 'nani@gmail.com', '1600'),
(2, 6, 'Moniter', 6000, 'nani', 'nani@gmail.com', '7500'),
(3, 5, 'Joystick', 1000, 'sai', 'sai@gmail.com', '1100'),
(4, 6, 'Moniter', 6000, 'sai', 'sai@gmail.com', '7200'),
(5, 5, 'Joystick', 1000, 'sai', 'sai@gmail.com', '1250'),
(6, 5, 'Joystick', 1000, 'nani', 'nani@gmail.com', '1500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `user_product_bid`
--
ALTER TABLE `user_product_bid`
  ADD PRIMARY KEY (`up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_product_bid`
--
ALTER TABLE `user_product_bid`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
