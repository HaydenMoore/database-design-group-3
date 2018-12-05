-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 11:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(6) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`) VALUES
(1007800, 'Clyde Bell'),
(1109900, 'Sharon Blaire'),
(1122000, 'Kelly Malone'),
(1990100, 'Andrew Canigan'),
(2500000, 'Samantha Michaels'),
(2877200, 'Brevin Shannon'),
(3321100, 'Kennedy Miles'),
(6889100, 'Holly Brown');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_name`) VALUES
('Clothing'),
('Electronics'),
('Food'),
('Home and Gardening'),
('Household Essentials'),
('Literature'),
('Pets'),
('Sports and Outdoors'),
('Toys');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(6) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `positition` varchar(20) DEFAULT NULL,
  `dept_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `positition`, `dept_name`) VALUES
(1000, 'Anne Bedford', 'Store Manager', NULL),
(1050, 'Michael Bull', 'Warehouse Manager', NULL),
(1111, 'Becky Style', 'Casier', NULL),
(1112, 'Trevor Calli', 'Cashier', NULL),
(1113, 'Ben Trips', 'Cashier', NULL),
(2100, 'Jack Boltor', 'Manager', 'Clothing'),
(2111, 'Brian Callaway', 'Stock Clerk', 'Clothing'),
(2112, 'Catherine Love', 'Stock Cleark', 'Clothing'),
(3100, 'Dianne Shoots', 'Manager', 'Food'),
(3111, 'Katy Green', 'Stock Clerk', 'Food'),
(3112, 'Hunter Critz', 'Customer Service', 'Food'),
(4100, 'Kendrick Bahner', 'Manager', 'Home and Gardening'),
(4111, 'Penelope Knox', 'Stock Clerk', 'Home and Gardening'),
(4112, 'Oliver Biny', 'Cashier', 'Home and Gardening'),
(5100, 'Mark Doren', 'Manager', 'Household Essentials'),
(5111, 'Will Beckem', 'Stock Clerk', 'Household Essentials'),
(6100, 'Carly Anderson', 'Manager', 'Pets'),
(6111, 'Rachel Miller', 'Stock Clerk', 'Pets'),
(7100, 'Ronald McGuillivan', 'Manager', 'Sports and Outdoors'),
(7111, 'Johnson Johnson', 'Stock Clerk', 'Sports and Outdoors'),
(8100, 'Brandy Connor', 'Manager', 'Toys'),
(8111, 'Elizabeth Conner', 'Stock Clerk', 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `UPC` bigint(16) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `supplier_id` int(10) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`UPC`, `dept_name`, `supplier_id`, `quantity`) VALUES
(1092547875, 'Food', 10001, 300),
(1187609822, 'Food', 22113, 75),
(1981276335, 'Clothing', 50002, 300),
(2093746371, 'Toys', 12121, 150),
(2245656531, 'Household Essentials', 46766, 40),
(2878934256, 'Clothing', 55005, 150),
(3552668549, 'Sports and Outdoors', 36321, 180),
(5116255899, 'Home and Gardening', 39000, 100),
(5463897280, 'Pets', 31130, 100),
(5524133278, 'Sports and Outdoors', 36321, 60),
(7265567811, 'Pets', 31130, 200),
(7625148975, 'Household Essentials', 46766, 85),
(8576451287, 'Food', 10001, 500),
(8766755134, 'Home and Gardening', 25559, 200),
(9909664573, 'Toys', 12121, 75);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) NOT NULL,
  `UPC` bigint(16) NOT NULL,
  `customer_id` int(6) DEFAULT NULL,
  `employee_id` int(6) DEFAULT NULL,
  `quanity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `UPC`, `customer_id`, `employee_id`, `quanity`) VALUES
(10001001, 1092547875, 1007800, 1111, 3),
(11011011, 1981276335, 1109900, 1112, 2),
(11111111, 2093746371, 1122000, 1113, 1),
(21112100, 2245656531, 1990100, 1111, 1),
(23323390, 3552668549, 2500000, 1113, 1),
(31233303, 5463897280, 3321100, 1111, 2),
(33927726, 5116255899, 2877200, 4112, 1),
(44454447, 9909664573, 6889100, 1113, 1),
(66776336, 7625148975, 1122000, 1113, 1),
(88987767, 8766755134, 2877200, 4112, 1);

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `return_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `UPC` bigint(16) NOT NULL,
  `customer_id` int(6) DEFAULT NULL,
  `employee_id` int(6) DEFAULT NULL,
  `quanity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`return_id`, `order_id`, `UPC`, `customer_id`, `employee_id`, `quanity`) VALUES
(119, 23323390, 3552668549, 2500000, 1113, 1),
(315, 66776336, 7625148975, 1122000, 1113, 1),
(887, 31233303, 5463897280, 3321100, 1111, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`) VALUES
(10001, 'Foods Co.'),
(12121, 'Big Tot\'s Toys'),
(22113, 'BetterBakery'),
(25559, 'IsLandscaping'),
(31130, 'Pet Love'),
(36321, 'Sports 4 More'),
(39000, 'Outdoor Floors'),
(46766, 'Less Mattress'),
(50002, 'ElecticSlides'),
(55005, 'Allen Linens');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`UPC`),
  ADD KEY `dept_name` (`dept_name`,`supplier_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`UPC`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `UPC` (`UPC`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`return_id`,`UPC`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `UPC` (`UPC`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `departments` (`dept_name`) ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `departments` (`dept_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`UPC`) REFERENCES `inventory` (`UPC`) ON UPDATE CASCADE;

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_ibfk_3` FOREIGN KEY (`UPC`) REFERENCES `inventory` (`UPC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_ibfk_4` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
