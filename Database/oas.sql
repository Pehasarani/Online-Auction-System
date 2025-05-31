-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2025 at 05:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_no` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_id`, `Name`, `Email`, `Contact_no`, `Password`) VALUES
(1, 'Vishwa Perera', 'it23439078@my.sliit.lk', '0772397767', 'it23439078'),
(2, 'Sarala Rathnayake', 'it23289420@my.sliit.lk', '0775501184', 'it23289420'),
(5, 'Dillon Jayatilake', 'it23279698@my.sliit.lk', '0715906673', 'it23279698'),
(6, 'Pehasarani Gamage', 'it23263208@my.sliit.lk', '0742505717', 'it23263208'),
(7, 'Kavishna De Alwis', 'it23307544@my.sliit.lk', '0712190869', 'it23307544');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bid_amount` decimal(10,2) NOT NULL,
  `bid_time` datetime DEFAULT current_timestamp(),
  `auction_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `item_id`, `user_id`, `bid_amount`, `bid_time`, `auction_id`) VALUES
(2, 5, NULL, 1000.00, NULL, NULL),
(3, 5, NULL, 1000.00, NULL, NULL),
(4, 5, NULL, 100.00, NULL, NULL),
(6, 7, NULL, 2000.00, NULL, NULL),
(7, 7, NULL, 1000.00, NULL, NULL),
(8, 7, NULL, 1000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bid2`
--

CREATE TABLE `bid2` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `bid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid2`
--

INSERT INTO `bid2` (`id`, `email`, `bid`, `date`) VALUES
(1, '', 0, '2024-05-08'),
(2, '', 0, '2024-05-08'),
(3, '', 0, '2024-05-08'),
(4, '', 0, '2024-05-08'),
(5, 'test@gmail.com', 1222, '2024-05-08'),
(6, 'test1@gmail.com', 100, '2024-05-08'),
(7, 'test@gmail.com', 2000, '2024-05-08'),
(8, 'test1@gmail.com', 1000, '2024-05-08'),
(9, 'test@gmail.com', 12000, '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(20) NOT NULL,
  `Category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_Id` int(11) NOT NULL,
  `Item_name` int(11) NOT NULL,
  `Item_Description` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `Fullname` text NOT NULL,
  `Email` text NOT NULL,
  `Adress` text NOT NULL,
  `Postcode` int(11) NOT NULL,
  `Paymentmethod` text NOT NULL,
  `Cardnumber` int(11) NOT NULL,
  `Nameoncard` text NOT NULL,
  `Expirydate` text NOT NULL,
  `Securitycode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Fullname`, `Email`, `Adress`, `Postcode`, `Paymentmethod`, `Cardnumber`, `Nameoncard`, `Expirydate`, `Securitycode`) VALUES
(1, '', '', 'fvgbhn', 0, '', 0, 'fvgbhnj', '2024-05-07', 0),
(2, '', '', 'vbnm', 45678, 'PayPal', 456789, 'dftgyhuj', '2024-05-21', 0),
(3, 'hihihi', '', '126aosihdasln', 20000, 'Bank transfer', 58264380, 'pafdew', '2024-06-05', 0),
(4, 'ihf', 'pju@sofj', 'sofj', 934, 'PayPal', 32748, 'apdfj', '2024-04-30', 0),
(5, 'ihf', 'pju@sofj', 'sofj', 934, 'PayPal', 32748, 'apdfj', '2024-04-30', 0),
(6, 'Pehasarani Gamage', 'ubicu@gmail.com', 'tvdf97ldkjb', 5678, 'PayPal', 234567890, 'dfghjkl', '2024-05-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`User_Id`, `Name`, `Email`, `Address`, `Phone_number`, `Password`) VALUES
(2, 'Shenal Dias', 'shenaldias936@gmail.com', '851/3 Sarasavi Mawatha, Ragama.', '0701644164', 'natalie<3'),
(3, 'sachithra', 'sachithrakaushika@yahoo.com', '1166/11 park road, katukurunda, kottawa', '0779214221', '12345678'),
(5, 'kumodh dilnuka', 'shainipunsara123@gmail.com', '223,nugegoda,kandy', '0783457843', '12345678'),
(8, 'Vishwa', 'perera.vishwa03@gmail.com', '851/3 Sarasavi Mawatha, Ragama.', '0772397767', 'Vish4717'),
(11, 'kavindu', 'kaviya3@gmail.com', '126/2 pattiwila gonawala', '0772678783', 'kaviya@123'),
(12, 'Poojana', 'janudahewa@gmail.com', 'No.888/6,Temple Road,Ella', '0715359228', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ItemTitle` varchar(10) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `AucDurationHrs` int(24) NOT NULL,
  `AucDurationMin` int(60) NOT NULL,
  `StartingBid` int(100) NOT NULL,
  `ShippingMethod` varchar(10) NOT NULL,
  `Condition` varchar(10) NOT NULL,
  `height` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ItemTitle`, `Description`, `Category`, `Quantity`, `AucDurationHrs`, `AucDurationMin`, `StartingBid`, `ShippingMethod`, `Condition`, `height`, `length`, `width`, `weight`) VALUES
('guitar', 'in good condition', 'category2', 1, 3, 45, 12, 'Pickup', 'used', 11, 11, 22, 22),
('Sony WH-10', 'Sony WH-1000XM6 Noise-Canceling Wireless Over-Ear Headphones (Black) with Free Portable Headphone Stand', 'category1', 1, 0, 20, 80000, 'Express', 'new', 15, 7, 3, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid2`
--
ALTER TABLE `bid2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bid2`
--
ALTER TABLE `bid2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
