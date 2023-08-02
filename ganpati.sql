-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 08:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganpati`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(9) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_age` int(9) NOT NULL,
  `c_date` varchar(255) NOT NULL,
  `c_dropdown` varchar(255) NOT NULL,
  `c_cont` bigint(15) NOT NULL,
  `c_pass` varchar(255) NOT NULL,
  `c_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_age`, `c_date`, `c_dropdown`, `c_cont`, `c_pass`, `c_flag`) VALUES
(1, 'Yash ', 45, '2023-03-01', 'Pune', 9898989898, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'Soham', 20, '2023-03-23', 'Pune', 4545454545, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(3, 'Yash ', 21, '2023-04-09', 'Solapur', 9898989898, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, 'Yash ', 23, '2023-07-31', 'Pune', 1234567891, '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `d_id` int(9) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_age` int(9) NOT NULL,
  `d_date` varchar(255) NOT NULL,
  `d_dropdown` varchar(255) NOT NULL,
  `d_cont` bigint(15) NOT NULL,
  `d_pass` varchar(255) NOT NULL,
  `d_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`d_id`, `d_name`, `d_age`, `d_date`, `d_dropdown`, `d_cont`, `d_pass`, `d_flag`) VALUES
(1, 'Soham', 22, '2023-03-30', 'Solapur', 9898989898, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'Om', 22, '2023-03-29', 'Pune', 7878787878, 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(3, 'Yash ', 21, '2023-03-29', 'Pune', 1234567899, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, '', 0, '', 'Goa', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(5, '', 0, '', 'Goa', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(6, '', 0, '', 'Goa', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(7, 'Suhani', 21, '2023-03-09', 'Pune', 4545454545, 'e10adc3949ba59abbe56e057f20f883e', 0),
(8, 'Sakharam', 45, '2023-03-29', 'Pune', 1234567891, 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'Suhani', 23, '2023-03-31', 'Solapur', 1234567899, 'e10adc3949ba59abbe56e057f20f883e', 0),
(10, '', 0, '', 'Goa', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(11, 'Soham', 45, '2023-04-09', 'Goa', 7878787878, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(12, 'Soham', 22, '2023-05-24', 'Solapur', 7878787878, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(13, 'Soham', 22, '2023-05-24', 'Solapur', 7878787878, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(14, 'Suhani', 21, '2023-07-31', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(15, 'Prathmesh', 45, '2023-08-09', 'place2', 7878787878, '25f9e794323b453885f5181f1b624d0b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ganesh_details`
--

CREATE TABLE `ganesh_details` (
  `g_id` int(9) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `g_hight` varchar(255) NOT NULL,
  `g_weight` varchar(255) NOT NULL,
  `g_colour` varchar(255) NOT NULL,
  `g_price` int(9) NOT NULL,
  `g_image` varchar(255) NOT NULL,
  `g_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganesh_details`
--

INSERT INTO `ganesh_details` (`g_id`, `g_name`, `g_hight`, `g_weight`, `g_colour`, `g_price`, `g_image`, `g_flag`) VALUES
(1, 'Soham', '50cm', '10kg', 'golden', 500, '1680200164img1.jpeg', 0),
(2, 'Sakharam', '100cm', '50kg', 'orange', 200, '1680202599mohnish-landge-fNAsME3HEZI-unsplash.jpg', 0),
(3, 'Suhani', '50cm', '10kg', 'orange', 200, '1680264410img2.jpeg', 0),
(4, 'Soham', '50cm', '10kg', 'golden', 500, '1681047742img1.jpeg', 0),
(5, 'Soham', '50cm', '10kg', 'orange', 200, '1684922325CG project output.jpeg', 0),
(6, 'shan', '50cm', '5kg', 'golden', 500, '1690902650jpgtopngconverter-com.png', 0),
(7, 'Om', '50cm', '5kg', 'golden', 500, '1690903112jpgtopngconverter-com.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(9) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_date` varchar(255) NOT NULL,
  `o_dropdown` varchar(255) NOT NULL,
  `o_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `o_name`, `o_date`, `o_dropdown`, `o_flag`) VALUES
(1, 'Soham', '2023-03-30', 'Pune', 0),
(2, 'Soham', '2023-03-30', 'Solapur', 0),
(3, 'Soham', '2023-04-09', 'Pune', 0),
(4, 'Soham', '2023-08-02', 'Pune', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `ganesh_details`
--
ALTER TABLE `ganesh_details`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ganesh_details`
--
ALTER TABLE `ganesh_details`
  MODIFY `g_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
