-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2021 at 05:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pwd`) VALUES
('admin', '123'),
('owner', '123');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE IF NOT EXISTS `apartment` (
  `apartment_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `apartment_address` varchar(80) NOT NULL,
  `apartment_contact` bigint(20) NOT NULL,
  `builder_name` varchar(30) NOT NULL,
  `apartment_desc` longtext NOT NULL,
  `num_floor` int(11) NOT NULL,
  `num_slot_parking` int(11) NOT NULL,
  PRIMARY KEY (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_id`, `apartment_name`, `image`, `apartment_address`, `apartment_contact`, `builder_name`, `apartment_desc`, `num_floor`, `num_slot_parking`) VALUES
(1, 'skyhigh', '76749-g6.jpg', 'kankanady', 7894561230, 'raj', 'located near father muller hospital', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE IF NOT EXISTS `floor` (
  `floor_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `total_shop` int(11) NOT NULL,
  `floor_status` varchar(20) NOT NULL,
  PRIMARY KEY (`floor_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`floor_id`, `apartment_id`, `floor_no`, `total_shop`, `floor_status`) VALUES
(1, 1, 0, 3, 'full');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `maintenance_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `purchase_charge` double NOT NULL,
  `per_sq_feet_charge` double NOT NULL,
  `up_date` date NOT NULL,
  PRIMARY KEY (`maintenance_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenance_id`, `apartment_id`, `purchase_charge`, `per_sq_feet_charge`, `up_date`) VALUES
(1, 1, 20.5, 10.5, '2021-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE IF NOT EXISTS `parking` (
  `park_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `vehicle_number` varchar(15) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`park_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`park_id`, `apartment_id`, `vehicle_number`, `check_in`, `check_out`, `status`) VALUES
(1, 1, 'KA19MD5419', '2021-07-07 19:54:48', '2021-07-07 20:27:47', 'checkout');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `sent_by` varchar(30) NOT NULL,
  `query` longtext NOT NULL,
  `sent_date` datetime NOT NULL,
  `query_status` varchar(20) NOT NULL,
  `reply` longtext NOT NULL,
  `reply_date` datetime NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`q_id`, `apartment_id`, `sent_by`, `query`, `sent_date`, `query_status`, `reply`, `reply_date`) VALUES
(2, 1, 'reliance', 'LIFT PROBLEM', '2021-07-07 20:19:03', 'replied', 'LIFT IS WORKING FINE', '2021-07-07 20:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `shop_no` varchar(20) NOT NULL,
  `sq-feet` varchar(10) NOT NULL,
  `shop_cost` double NOT NULL,
  `shop_status` varchar(20) NOT NULL,
  PRIMARY KEY (`shop_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `apartment_id`, `floor`, `shop_no`, `sq-feet`, `shop_cost`, `shop_status`) VALUES
(1, 1, '0', 'SHOP001', '800', 16400, 'allocated'),
(2, 1, '0', 'SHOP002', '678', 13899, 'allocated'),
(3, 1, '0', 'SHOP003', '689', 14124.5, 'allocated');

-- --------------------------------------------------------

--
-- Table structure for table `shop_owners`
--

CREATE TABLE IF NOT EXISTS `shop_owners` (
  `shop_o_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `shop_type` varchar(30) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `owner_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `shop_cat` varchar(30) NOT NULL,
  `other_info` varchar(20) NOT NULL,
  `occ_date` date NOT NULL,
  `shop_desc` longtext NOT NULL,
  `con_enddate` date NOT NULL,
  `shop_status` varchar(20) NOT NULL,
  PRIMARY KEY (`shop_o_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_owners`
--

INSERT INTO `shop_owners` (`shop_o_id`, `shop_id`, `shop_type`, `shop_name`, `owner`, `owner_contact`, `email`, `pwd`, `shop_cat`, `other_info`, `occ_date`, `shop_desc`, `con_enddate`, `shop_status`) VALUES
(1, 1, 'OWNED', 'Reliance', 'Marterd', 9638527410, 'max@gmail.com', '123', 'Showroom', '', '2021-07-04', 'Jewelry Shop', '2023-11-25', 'occupied'),
(2, 2, 'RENT', 'Happy Feet', 'Joseph', 7410258963, 'jos@yahoo.in', 'jose', 'Showroom', '', '2021-05-23', 'avaliable all type of foot wear to all type of people', '2023-10-16', 'occupied'),
(3, 3, 'LEASE', 'JJ Stores', 'Tom', 7893210456, 'tom@gmail.com', 'tom', 'Others', 'StationaryShop', '2021-05-02', 'all types of stationaries are available for all the people', '2024-09-25', 'occupied');

-- --------------------------------------------------------

--
-- Table structure for table `shop_rent`
--

CREATE TABLE IF NOT EXISTS `shop_rent` (
  `shop_r_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_o_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `agree_type` varchar(30) NOT NULL,
  `per_month_rent` double NOT NULL,
  `total_lease` double NOT NULL,
  `advance` double NOT NULL,
  `agree_sdate` date NOT NULL,
  `agree_edate` date NOT NULL,
  PRIMARY KEY (`shop_r_id`),
  KEY `shop_o_id` (`shop_o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop_rent`
--

INSERT INTO `shop_rent` (`shop_r_id`, `shop_o_id`, `name`, `contact`, `email`, `agree_type`, `per_month_rent`, `total_lease`, `advance`, `agree_sdate`, `agree_edate`) VALUES
(1, 2, 'James', 7539126840, 'jam@gmail.com', 'RENT', 12000, 0, 50000, '2021-06-03', '2022-05-18'),
(2, 3, 'Sam', 8523697410, 'sam@yahoo.in', 'LEASE', 0, 100000, 50000, '2021-06-22', '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `apartment_id`, `username`, `pwd`) VALUES
(1, 1, 'manager', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `floor`
--
ALTER TABLE `floor`
  ADD CONSTRAINT `floor_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `parking_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_owners`
--
ALTER TABLE `shop_owners`
  ADD CONSTRAINT `shop_owners_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_rent`
--
ALTER TABLE `shop_rent`
  ADD CONSTRAINT `shop_rent_ibfk_1` FOREIGN KEY (`shop_o_id`) REFERENCES `shop_owners` (`shop_o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
