-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 24, 2020 at 04:03 AM
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
  `account_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `account_password` varchar(50) NOT NULL,
  `user_level_id` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_password`, `user_level_id`) VALUES
('acc0001', 'demon', '74186adf7f381c816fbb8dab121a6973', '1'),
('acc0918', 'Kang', 'd41d8cd98f00b204e9800998ecf8427e', '3'),
('acc0924', 'dsa', 'd41d8cd98f00b204e9800998ecf8427e', '3'),
('acc2959', 'hivi', 'd41d8cd98f00b204e9800998ecf8427e', '3'),
('acc5974', 'AndiDemon', 'useitfree', '2'),
('acc8223', 'Andi', '872e8f531b03f28975948b039b11bf4b', '2'),
('acc8448', 'yes', 'd41d8cd98f00b204e9800998ecf8427e', '3'),
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
(4, 'general'),
(5, 'furniture'),
(8, 'book'),
(9, 'electronic'),
(10, 'shoes'),
(11, 'jacket'),
(12, 'futon'),
(13, 'daiso stuff'),
(14, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `available_date` date NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collection_id`, `user_id`, `item_id`, `available_date`, `expired_date`) VALUES
(1, 'usr0001', '1', '2020-07-20', '2020-07-27'),
(2, 'usr0002', '2', '2020-08-12', '2020-08-24'),
(7, 'usr2959', 'item54472020-08-1907:22:37', '2020-08-20', '2020-08-26'),
(9, 'usr0002', 'item11762020-08-2308:52:38', '2020-08-24', '2020-09-08'),
(10, 'usr0918', 'item12212020-08-2308:54:10', '2020-08-24', '2020-08-31'),
(11, 'usr0918', 'item69052020-08-2308:55:30', '2020-08-26', '2020-09-09'),
(12, 'usr0918', 'item1782020-08-2308:59:20', '2020-08-24', '2020-10-07'),
(13, 'usr0918', 'item90532020-08-2309:00:38', '2020-09-09', '2020-09-23'),
(14, 'usr0002', 'item17182020-08-2309:02:43', '2020-09-10', '2020-09-23'),
(15, 'usr0002', 'item99352020-08-2309:04:32', '2020-09-15', '2020-08-31'),
(16, 'usr0002', 'item3672020-08-2309:42:40', '2020-08-24', '2020-09-24'),
(17, 'usr0002', 'item72272020-08-2310:11:17', '2020-08-27', '2020-09-22');

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
(1, 1, '2020-07-22', 'usr0002', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_detail` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_qty`, `item_detail`, `category_id`) VALUES
('1', 'accoustic guitar', 1, 'honey bee acoustic guitar, blue, very good condition', 1),
('2', 'desk', 1, 'a wooden desk', 5),
('item11762020-08-2308:52:38', 'Formal shoes', 1, 'Very good quality of shoes. I will not use it anymore since I bought a new one.', 10),
('item12212020-08-2308:54:10', 'Cup', 1, 'I will move to the other city, I will not bring this cup.', 4),
('item17182020-08-2309:02:43', 'Laptop', 1, 'I sell this laptop for ¥30.000', 9),
('item1782020-08-2308:59:20', 'Soccer ball', 1, 'My friend just left the city, and gave me this ball. But, I do not play soccer. Anyone can take it for free. ', 14),
('item3672020-08-2309:42:40', 'Guitar', 1, 'Brand : Honey bee\r\nThe guitar quiality is still very good. like new.\r\nPlease use it properly. You can take it for free.', 1),
('item54472020-08-1907:22:37', 'hanger', 10, 'hangers, normal', 13),
('item69052020-08-2308:55:30', 'Plants', 2, 'I need to go back to my country, I can not bring these plants there. So please take care of them.', 13),
('item72272020-08-2310:11:17', 'Minna No Nihongo Book', 1, 'I will go back to my country soon, you can take my Minna No Nihongo book to learn Japanese.\r\nIt\'s all Japanese. I learn a lot from this book.', 8),
('item90532020-08-2309:00:38', 'Bag', 1, 'A spare bag that I got from a campaign in a festival. If you want please take it.', 4),
('item99352020-08-2309:04:32', 'Bike', 1, 'I will leave this city soon, if you want a bike. Please take mine. ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `item_image`
--

CREATE TABLE `item_image` (
  `item_image_id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `image` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_image`
--

INSERT INTO `item_image` (`item_image_id`, `item_id`, `image`) VALUES
(1, '1', 'guitar.jpg'),
(2, '2', 'desk.jpg'),
(3, '1', 'guitar2.jpg'),
(26, 'item54472020-08-1907:22:37', 'hangers.jpg'),
(28, 'item11762020-08-2308:52:38', 'item117612020-08-2308:52:38.jpg'),
(29, 'item12212020-08-2308:54:10', 'item122112020-08-2308:54:10.jpg'),
(30, 'item69052020-08-2308:55:30', 'item690512020-08-2308:55:30.jpg'),
(31, 'item1782020-08-2308:59:20', 'item17812020-08-2308:59:20.jpg'),
(32, 'item90532020-08-2309:00:38', 'item905312020-08-2309:00:38.jpg'),
(33, 'item17182020-08-2309:02:43', 'item171812020-08-2309:02:43.jpg'),
(34, 'item99352020-08-2309:04:32', 'item993512020-08-2309:04:32.jpg'),
(35, 'item3672020-08-2309:42:40', 'item36712020-08-2309:42:40.jpg'),
(36, 'item72272020-08-2310:11:17', 'item722712020-08-2310:11:17.jpg');

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
('usr0918', '', '', '', '', '2020-08-16 11:33:03', '2020-08-16 11:33:03', 'acc0918'),
('usr0924', '', '', '', '', '2020-08-16 11:33:54', '2020-08-16 11:33:54', 'acc0924'),
('usr2959', '', '', '', '', '2020-08-16 11:33:47', '2020-08-16 11:33:47', 'acc2959'),
('usr5974', 'demon@tsunagu.com', 'line : AndiDemon', 'Tsu Edobashi 1-123-1', '', '2020-07-21 17:51:48', '2020-07-21 17:51:48', 'acc5974'),
('usr8223', 'andi@tsunagu.com', 'Line : AndiDemon', 'Tsu Edobashi 1-123-1', '', '2020-07-21 17:54:04', '2020-07-21 17:54:04', 'acc8223'),
('usr8448', '', '', '', '', '2020-08-16 11:34:17', '2020-08-16 11:34:17', 'acc8448'),
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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dealing`
--
ALTER TABLE `dealing`
  MODIFY `dealing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_image`
--
ALTER TABLE `item_image`
  MODIFY `item_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
