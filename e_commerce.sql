-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2021 at 12:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` smallint(4) NOT NULL,
  `location_id` char(3) DEFAULT NULL,
  `payment_id` char(1) DEFAULT NULL,
  `customer_firstName` varchar(25) NOT NULL,
  `customer_lastName` varchar(25) NOT NULL,
  `customer_email` varchar(32) NOT NULL,
  `customer_phone_number` bigint(11) NOT NULL,
  `customer_address` varchar(52) NOT NULL,
  `customer_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `location_id`, `payment_id`, `customer_firstName`, `customer_lastName`, `customer_email`, `customer_phone_number`, `customer_address`, `customer_password`) VALUES
(2, 'ctg', 'c', 'soumik', 'Sarker', 'sss@gmail.com', 1111111111, 'sss', 'ss'),
(3, 'ctg', 'c', 'Rahim', 'Saleh', 'rs@gmail.com', 1111111111, 'hsjsdhwdsc', 'sd'),
(4, 'khl', 'b', 'BB', 'CC', 'bbcc@gmail.com', 1234332521, 'sdasdasd', 'bc'),
(5, 'ctg', 'c', 'Jannatul Mawa', 'Khan', 'jmk@gmail.com', 1923412211, '80/D, Shamsun Nahar Villa, Ratan Road, Dhaka', 'sss'),
(6, 'khl', 'c', 'Ratul', 'Shoeb', 'ratul@gmail.com', 1293847621, 'sssssss', 'ad'),
(7, 'dhk', 'c', 'Faiza', 'Anjum', 'fa@gmail.com', 1284927483, 'asdasddfgdfg', 'cv'),
(8, 'dhk', 'c', 'Atia', 'Khan', 'ak@gmail.com', 1234567897, 'edevdgb', 'z'),
(9, 'bar', 'c', 'bu', 'mm', 'gf@gmail.com', 1232423565, 'hfhh', 'm'),
(10, 'dhk', 'b', 'sd', 'ds', 'sds@gmail.com', 1976865789, 'hfaksd', 'aa'),
(11, 'bar', 'c', 'Babul', 'Hassan', 'babul.hassan@gmail.com', 1827389372, '100/F, Jamuna Villa, Bashundhara, Barisal', 'sa');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_dashboard`
-- (See below for the actual view)
--
CREATE TABLE `customer_dashboard` (
`consignment_id` bigint(20) unsigned
,`product_name` varchar(20)
,`confirmation_date` timestamp
,`estimated_delivery` date
,`NAME` varchar(15)
,`location_name` varchar(12)
,`deliveryman_firstName` varchar(12)
,`deliveryman_lastName` varchar(12)
,`status_name` varchar(9)
,`deliveryman_phone_number` bigint(11)
,`customer_email` varchar(32)
);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `deliveryman_id` smallint(4) NOT NULL,
  `manager_id` smallint(4) DEFAULT NULL,
  `location_id` char(3) DEFAULT NULL,
  `deliveryman_firstName` varchar(12) NOT NULL,
  `deliveryman_lastName` varchar(12) NOT NULL,
  `deliveryman_phone_number` bigint(11) NOT NULL,
  `deliveryman_address` varchar(52) NOT NULL,
  `deliveryman_password` varchar(52) NOT NULL,
  `dmstatus_id` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`deliveryman_id`, `manager_id`, `location_id`, `deliveryman_firstName`, `deliveryman_lastName`, `deliveryman_phone_number`, `deliveryman_address`, `deliveryman_password`, `dmstatus_id`) VALUES
(1, 1, 'dhk', 'A', 'B', 1212221324, 'DHAKA', '1', 'Y'),
(2, 2, 'ctg', 'C', 'D', 1223232121, 'CHITTAGONG', '2', 'Y'),
(3, 3, 'khl', 'E', 'F', 1223214331, 'adsfdsaf', '3', 'Y'),
(4, 1, 'dhk', 'Rahat', 'Ahmed', 1283472833, '43/A, asdasd, Dhaka', 'as', 'Y'),
(5, 2, 'ctg', 'Farukh', 'Uddin', 1927347298, 'asfasfasf', 'df', 'Y'),
(6, 3, 'khl', 'Fakhrul', 'Abedin', 1237482973, 'asdfwefdvvc ', 'drg', 'Y'),
(7, 4, 'bar', 'Karim', 'Shahrier', 1283947822, 'dhasifjasf', 'hj', 'Y'),
(8, 4, 'bar', 'Kalam', 'Hassan', 1928374612, 'asdasdasdqwe', 'vb', 'Y'),
(9, 1, 'dhk', 'Rahin', 'Hossain', 1238479765, 'dasdasdasd', 'we', 'Y'),
(10, 2, 'ctg', 'Rajin', 'Salauddin', 1293847322, 'asdaerajsczxov', 'vb', 'Y'),
(11, 1, 'dhk', 'VO', 'VO', 1293889462, 'asdasd', '3', 'Y'),
(12, 1, 'dhk', 'eee', 'use', 1265764875, 'Nsu', 'xx', 'Y'),
(13, 4, 'bar', 'Rahul', 'Singh', 1821938474, 'Nougapara, Barisal', 'aa', 'Y');

-- --------------------------------------------------------

--
-- Stand-in structure for view `deliveryman_dashboard`
-- (See below for the actual view)
--
CREATE TABLE `deliveryman_dashboard` (
`consignment_id` bigint(20) unsigned
,`product_price` decimal(10,2)
,`confirmation_date` timestamp
,`estimated_delivery` date
,`NAME` varchar(15)
,`location_name` varchar(12)
,`customer_firstName` varchar(25)
,`customer_lastName` varchar(25)
,`customer_phone_number` bigint(11)
,`customer_address` varchar(52)
,`deliveryman_firstName` varchar(12)
,`deliveryman_lastName` varchar(12)
,`status_name` varchar(9)
,`deliveryman_phone_number` bigint(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `consignment_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` char(1) DEFAULT NULL,
  `confirmation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estimated_delivery` date NOT NULL,
  `product_id` smallint(5) DEFAULT NULL,
  `customer_id` smallint(4) DEFAULT NULL,
  `merchant_id` smallint(4) UNSIGNED DEFAULT NULL,
  `manager_id` smallint(4) DEFAULT NULL,
  `deliveryman_id` smallint(4) DEFAULT NULL,
  `location_id` char(3) DEFAULT NULL,
  `payment_id` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`consignment_id`, `status_id`, `confirmation_date`, `estimated_delivery`, `product_id`, `customer_id`, `merchant_id`, `manager_id`, `deliveryman_id`, `location_id`, `payment_id`) VALUES
(1, 'd', '2021-01-20 15:24:51', '2021-03-18', 1, 2, 3, 1, 1, 'ctg', 'b'),
(2, 'p', '2021-01-18 19:29:29', '2021-01-22', 5, 3, 3, 2, 1, 'ctg', 'c'),
(3, 'p', '2021-01-19 07:18:57', '2021-01-23', 4, 6, 2, 3, 3, 'khl', 'c'),
(4, 'p', '2021-01-19 07:19:54', '2021-01-23', 4, 6, 2, 3, 6, 'khl', 'c'),
(5, 'p', '2021-01-19 07:37:26', '2021-01-23', 3, 3, 1, 2, 10, 'ctg', 'c'),
(6, 'd', '2021-01-19 09:36:06', '2021-01-23', 2, 7, 1, 1, 11, 'dhk', 'c'),
(7, 'd', '2021-01-19 10:04:36', '2021-01-23', 4, 8, 2, 1, 1, 'dhk', 'c'),
(8, 'd', '2021-01-19 16:48:30', '2021-01-23', 3, 9, 1, 4, 8, 'bar', 'c'),
(9, 'd', '2021-01-20 14:22:09', '2021-01-24', 2, 10, 1, 1, 12, 'dhk', 'b'),
(10, 'd', '2021-01-21 06:06:25', '2021-01-25', 1, 11, 1, 4, 13, 'bar', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `status_id` char(1) NOT NULL,
  `status_name` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`status_id`, `status_name`) VALUES
('d', 'delivered'),
('p', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `dm_status`
--

CREATE TABLE `dm_status` (
  `dmstatus_id` char(1) NOT NULL,
  `status_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_status`
--

INSERT INTO `dm_status` (`dmstatus_id`, `status_name`) VALUES
('N', 'NotAvailable'),
('Y', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` smallint(4) NOT NULL,
  `location_id` char(3) DEFAULT NULL,
  `manager_firstName` varchar(12) NOT NULL,
  `manager_lastName` varchar(12) NOT NULL,
  `manager_email` varchar(32) NOT NULL,
  `manager_password` varchar(32) NOT NULL,
  `manager_phone_number` bigint(11) NOT NULL,
  `manager_address` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `location_id`, `manager_firstName`, `manager_lastName`, `manager_email`, `manager_password`, `manager_phone_number`, `manager_address`) VALUES
(1, 'dhk', 'Aman Ullah', 'Chowdhury', 'ullah.aman@gmail.com', '1002', 174912354, 'Dhaka'),
(2, 'ctg', 'Mushfiq', 'Ahmed', 'mushfiq123@gmail.com', '1001', 179106813, 'Chittagong'),
(3, 'khl', 'Ishtiak', 'Hussain', 'ishtiak343@gmail.com', '1003', 1456278923, 'Khulna'),
(4, 'bar', 'Hasnain', 'Ahmed', 'hasnain123@gmail.com', '1554', 1478523692, 'Barisal');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `merchant_id` smallint(4) UNSIGNED NOT NULL,
  `merchant_firstName` varchar(12) NOT NULL,
  `merchant_lastName` varchar(12) NOT NULL,
  `merchant_email` varchar(32) NOT NULL,
  `merchant_password` varchar(32) NOT NULL,
  `merchant_phone_number` bigint(11) NOT NULL,
  `merchant_address` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`merchant_id`, `merchant_firstName`, `merchant_lastName`, `merchant_email`, `merchant_password`, `merchant_phone_number`, `merchant_address`) VALUES
(1, 'Tasin', 'Zaman', 'tz@gmail.com', 'tz', 1111111111, 'Flat B, Canada'),
(2, 'Soumik', 'Sarker', 'ss@gmail.com', 'ss', 1111111111, 'Flat C, Canada'),
(3, 'Shahrin', 'Riana', 'sr@gmail.com', 'sr', 1124232311, 'salads'),
(4, 'bn', 'nn', 'bn@gmail.com', 'a', 1342576986, 'hhg');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `payment_id` char(1) NOT NULL,
  `NAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`payment_id`, `NAME`) VALUES
('b', 'BKash'),
('c', 'CashOnDelivery');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point`
--

CREATE TABLE `pickup_point` (
  `location_id` char(3) NOT NULL,
  `location_name` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_point`
--

INSERT INTO `pickup_point` (`location_id`, `location_name`) VALUES
('bar', 'Barisal'),
('ctg', 'Chittagong'),
('dhk', 'Dhaka'),
('khl', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` smallint(5) NOT NULL,
  `product_picture` varchar(1000) NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `description` varchar(100) NOT NULL,
  `merchant_id` smallint(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_picture`, `product_name`, `category`, `product_price`, `description`, `merchant_id`) VALUES
(1, 'customer_profile_bg.jpg', 'Tablet', 'Electonics', '15000.00', 'It is a fast device. You can buy it.', 1),
(2, 'daisy flat.JPG', 'Messenger bag', 'Bag', '210.00', 'Its a good product', 1),
(3, 'IMG-60048bc4b08823.46036696.jpg', 'Messenger bag(Green)', 'Bag', '105.00', 'Its a good product', 1),
(4, 'Red.JPG', 'Messenger bag(Red)', 'Bag', '210.00', 'Its a good product', 2),
(5, 'royal blue flat2.JPG', 'Messenger bag(Blue)', 'Bag', '210.00', 'Its a good product', 3),
(6, 'shirt.jpeg', 'Shirt', 'Fashion', '525.00', 'This is a great shirt.', 2);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `add_commision` BEFORE INSERT ON `product` FOR EACH ROW SET new.product_price=new.product_price*1.05
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `customer_dashboard`
--
DROP TABLE IF EXISTS `customer_dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_dashboard`  AS SELECT `dd`.`consignment_id` AS `consignment_id`, `p`.`product_name` AS `product_name`, `dd`.`confirmation_date` AS `confirmation_date`, `dd`.`estimated_delivery` AS `estimated_delivery`, `pm`.`NAME` AS `NAME`, `pp`.`location_name` AS `location_name`, `d`.`deliveryman_firstName` AS `deliveryman_firstName`, `d`.`deliveryman_lastName` AS `deliveryman_lastName`, `ds`.`status_name` AS `status_name`, `d`.`deliveryman_phone_number` AS `deliveryman_phone_number`, `c`.`customer_email` AS `customer_email` FROM (((((((`delivery_details` `dd` join `customer` `c` on(`dd`.`customer_id` = `c`.`customer_id`)) join `paymentmethod` `pm` on(`dd`.`payment_id` = `pm`.`payment_id`)) left join `deliveryman` `d` on(`d`.`deliveryman_id` = `dd`.`deliveryman_id`)) left join `delivery_status` `ds` on(`ds`.`status_id` = `dd`.`status_id`)) join `pickup_point` `pp` on(`dd`.`location_id` = `pp`.`location_id`)) join `product` `p` on(`dd`.`product_id` = `p`.`product_id`)) join `manager` `m` on(`m`.`manager_id` = `dd`.`manager_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `deliveryman_dashboard`
--
DROP TABLE IF EXISTS `deliveryman_dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `deliveryman_dashboard`  AS SELECT `dd`.`consignment_id` AS `consignment_id`, `p`.`product_price` AS `product_price`, `dd`.`confirmation_date` AS `confirmation_date`, `dd`.`estimated_delivery` AS `estimated_delivery`, `pm`.`NAME` AS `NAME`, `pp`.`location_name` AS `location_name`, `c`.`customer_firstName` AS `customer_firstName`, `c`.`customer_lastName` AS `customer_lastName`, `c`.`customer_phone_number` AS `customer_phone_number`, `c`.`customer_address` AS `customer_address`, `d`.`deliveryman_firstName` AS `deliveryman_firstName`, `d`.`deliveryman_lastName` AS `deliveryman_lastName`, `ds`.`status_name` AS `status_name`, `d`.`deliveryman_phone_number` AS `deliveryman_phone_number` FROM (((((((`delivery_details` `dd` join `customer` `c` on(`dd`.`customer_id` = `c`.`customer_id`)) join `paymentmethod` `pm` on(`dd`.`payment_id` = `pm`.`payment_id`)) left join `deliveryman` `d` on(`d`.`deliveryman_id` = `dd`.`deliveryman_id`)) left join `delivery_status` `ds` on(`ds`.`status_id` = `dd`.`status_id`)) join `pickup_point` `pp` on(`dd`.`location_id` = `pp`.`location_id`)) join `product` `p` on(`dd`.`product_id` = `p`.`product_id`)) join `manager` `m` on(`m`.`manager_id` = `dd`.`manager_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`deliveryman_id`),
  ADD KEY `manager_id` (`manager_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `dmstatus_id` (`dmstatus_id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`consignment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `manager_id` (`manager_id`),
  ADD KEY `deliveryman_id` (`deliveryman_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `dm_status`
--
ALTER TABLE `dm_status`
  ADD PRIMARY KEY (`dmstatus_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pickup_point`
--
ALTER TABLE `pickup_point`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `deliveryman_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `consignment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `merchant_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `pickup_point` (`location_id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `paymentmethod` (`payment_id`);

--
-- Constraints for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD CONSTRAINT `deliveryman_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`),
  ADD CONSTRAINT `deliveryman_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `pickup_point` (`location_id`),
  ADD CONSTRAINT `deliveryman_ibfk_3` FOREIGN KEY (`dmstatus_id`) REFERENCES `dm_status` (`dmstatus_id`);

--
-- Constraints for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD CONSTRAINT `delivery_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `delivery_details_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `delivery_details_ibfk_3` FOREIGN KEY (`merchant_id`) REFERENCES `merchant` (`merchant_id`),
  ADD CONSTRAINT `delivery_details_ibfk_4` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`),
  ADD CONSTRAINT `delivery_details_ibfk_5` FOREIGN KEY (`deliveryman_id`) REFERENCES `deliveryman` (`deliveryman_id`),
  ADD CONSTRAINT `delivery_details_ibfk_6` FOREIGN KEY (`location_id`) REFERENCES `pickup_point` (`location_id`),
  ADD CONSTRAINT `delivery_details_ibfk_7` FOREIGN KEY (`payment_id`) REFERENCES `paymentmethod` (`payment_id`),
  ADD CONSTRAINT `delivery_details_ibfk_8` FOREIGN KEY (`status_id`) REFERENCES `delivery_status` (`status_id`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `pickup_point` (`location_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchant` (`merchant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
