-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 23, 2020 at 12:58 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_rollit`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(10) NOT NULL,
  `account_name` varchar(30) NOT NULL,
  `account_password` varchar(50) NOT NULL,
  `user_level_id` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_password`, `user_level_id`) VALUES
('acc0001', 'demon', '74186adf7f381c816fbb8dab121a6973', '1'),
('acc0002', 'andi', '', '3'),
('acc5974', 'AndiDemon', 'useitfree', '2'),
('acc8223', 'Andi', '872e8f531b03f28975948b039b11bf4b', '2'),
('acc9400', 'AndiPrademon', '872e8f531b03f28975948b039b11bf4b', '2');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'musical instrument'),
(3, 'bike'),
(4, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `item_id` int(11) NOT NULL,
  `available_data` date NOT NULL,
  `expired_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collection_id`, `user_id`, `item_id`, `available_data`, `expired_data`) VALUES
(1, 'usr001', 1, '2020-07-20', '2020-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `dealing`
--

CREATE TABLE `dealing` (
  `dealing_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `dealing_date` date NOT NULL,
  `taken_by` varchar(10) NOT NULL COMMENT 'user_id',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dealing`
--

INSERT INTO `dealing` (`dealing_id`, `collection_id`, `dealing_date`, `taken_by`, `description`) VALUES
(1, 1, '2020-07-22', 'usr002', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_detail` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_qty`, `item_detail`, `category_id`) VALUES
(1, 'accoustic guitar', 1, 'honey bee acoustic guitar, blue, very good condition', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_image`
--

CREATE TABLE `item_image` (
  `item_image_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_image`
--

INSERT INTO `item_image` (`item_image_id`, `item_id`, `image`) VALUES
(1, 1, 'guitar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `avatar` varchar(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `account_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `contact`, `address`, `avatar`, `created`, `updated`, `account_id`) VALUES
('usr0001', 'demon.yunus666@gmail.com', '09063995288', 'tsu', '', '2020-07-20 06:21:08', '2020-07-20 06:21:08', 'acc0001'),
('usr0002', 'whoiam@gmail.com', 'line:andidemon', 'tsu', '', '2020-07-20 06:21:08', '2020-07-20 06:21:08', 'acc0002'),
('usr5974', 'demon@tsunagu.com', 'line : AndiDemon', 'Tsu Edobashi 1-123-1', '', '2020-07-21 17:51:48', '2020-07-21 17:51:48', 'acc5974'),
('usr8223', 'andi@tsunagu.com', 'Line : AndiDemon', 'Tsu Edobashi 1-123-1', '', '2020-07-21 17:54:04', '2020-07-21 17:54:04', 'acc8223'),
('usr9400', 'AndiPrademon@tsunagu.com', 'Line : AndiDemon', 'Tsu Edobashi', '', '2020-07-21 17:55:44', '2020-07-21 17:55:44', 'acc9400');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` enum('1','2','3') NOT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level`) VALUES
('1', 'Superuser'),
('2', 'Verified Account'),
('3', 'Unverified Account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `dealing`
--
ALTER TABLE `dealing`
  ADD PRIMARY KEY (`dealing_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_image`
--
ALTER TABLE `item_image`
  ADD PRIMARY KEY (`item_image_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dealing`
--
ALTER TABLE `dealing`
  MODIFY `dealing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_image`
--
ALTER TABLE `item_image`
  MODIFY `item_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
