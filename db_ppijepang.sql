-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 19, 2021 at 08:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_ppijepang`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `access_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(10) NOT NULL,
  `account_name` varchar(30) NOT NULL,
  `account_password` varchar(40) NOT NULL,
  `user_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_password`, `user_level_id`) VALUES
('0', 'yudi', 'yudi', 1),
('1', 'hokkaido', 'hokkaido', 3),
('2', 'sendai', 'sendai', 4),
('acc3248', 'Andi', 'Andi', 5),
('acc3423', 'Arya', '8f80598eaadc75b6b657fdca55cd8f96', 5),
('acc6288', 'Yui', '38f1aa1cc316cc55c0f2cfcf8d01dd03', 5),
('acc6638', 'Nurul', 'c99b5720821a2dccf5ffeb97d903e082', 5),
('acc9355', 'Pikachu', '4b576e26f68e1a0a5792019088bd0442', 5);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` varchar(10) NOT NULL,
  `country` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `details` text NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `afiliasi`
--

CREATE TABLE `afiliasi` (
  `afiliasi_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `degree` set('SMA','D1','D2','D3','S1','S2','S3','NihongoGakkou') DEFAULT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `laboratory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afiliasi`
--

INSERT INTO `afiliasi` (`afiliasi_id`, `school_id`, `degree`, `faculty`, `department`, `laboratory`) VALUES
(0, 1, 'S3', 'Engineering', 'IT', 'Human Information');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`, `description`) VALUES
(1, 'Japan', ''),
(2, 'Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(11) NOT NULL,
  `journal_name` varchar(200) NOT NULL,
  `journal_file` varchar(50) NOT NULL,
  `published_year` year(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `journal_name`, `journal_file`, `published_year`, `description`) VALUES
(1, 'Human Motion Prediction', 'journal_date_time.pdf', 2020, '');

-- --------------------------------------------------------

--
-- Table structure for table `komsat`
--

CREATE TABLE `komsat` (
  `komsat_id` int(11) NOT NULL,
  `komsat_name` varchar(15) NOT NULL,
  `description` varchar(50) NOT NULL,
  `korda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komsat`
--

INSERT INTO `komsat` (`komsat_id`, `komsat_name`, `description`, `korda_id`) VALUES
(1, 'Hokkaido', 'Only one komsat', 1),
(3, 'Sendai', '', 3),
(4, 'Aomori', '', 3),
(5, 'Akita', '', 3),
(6, 'Yamagata', '', 3),
(7, 'Ehime', '', 10),
(8, 'Kagawa', '', 10),
(9, 'Kochi', '', 10),
(10, 'Okinawa', '', 9),
(11, 'Kagoshima', '', 9),
(12, 'Fukuoka', '', 9),
(13, 'Miyazaki', '', 9),
(14, 'Miyazaki', '', 9),
(15, 'Kumamoto', '', 9),
(16, 'Saga', '', 9),
(17, 'Kitakyushu', '', 9),
(18, 'Oita', '', 9),
(19, 'Chiba', '', 8),
(20, 'GRIPS', '', 8),
(21, 'Gunma', '', 8),
(22, 'Ibaraki', '', 8),
(23, 'Kanagawa', '', 8),
(24, 'Keio', '', 8),
(25, 'Nodai', '', 8),
(26, 'Nokodai', '', 8),
(27, 'Takushoku', '', 8),
(28, 'TIU', '', 8),
(29, 'TMU', '', 8),
(30, 'Todai', '', 8),
(31, 'Tokodai', '', 8),
(32, 'Toyo', '', 8),
(33, 'Waseda', '', 8),
(34, 'Kobe', '', 7),
(35, 'Kyoto-Shiga', '', 7),
(36, 'Okayama', '', 7),
(37, 'Osaka-Nara', '', 7),
(38, 'Tokushima', '', 7),
(39, 'Fukui', '', 6),
(40, 'Ishikawa', '', 6),
(41, 'Niigata', '', 6),
(42, 'Toyama', '', 6),
(43, 'Hiroshima', '', 5),
(44, 'Shimane-Tottori', '', 5),
(45, 'Yamaguchi', '', 5),
(46, 'Gifu', '', 4),
(47, 'Mie', '', 4),
(48, 'Nagoya', '', 4),
(49, 'Shizuoka', '', 4),
(50, 'Toyohashi', '', 4),
(51, '-', 'Tidak ada Komsat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korda`
--

CREATE TABLE `korda` (
  `korda_id` int(11) NOT NULL,
  `korda_name` varchar(15) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korda`
--

INSERT INTO `korda` (`korda_id`, `korda_name`, `description`) VALUES
(1, 'Hokkaido', ''),
(3, 'Tohoku', ''),
(4, 'Chubu', ''),
(5, 'Chugoku', ''),
(6, 'Hokuriku', ''),
(7, 'Kansai', ''),
(8, 'Kanto', ''),
(9, 'Kyushu-Okinawa', ''),
(10, 'Shikoku', ''),
(11, '-', 'Tidak ada Korda');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `management_id` int(11) NOT NULL,
  `management_name` varchar(15) NOT NULL,
  `account_id` varchar(30) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` set('M','F') NOT NULL,
  `birthdate` date DEFAULT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `emergency_jp` varchar(15) NOT NULL,
  `emergency_id` varchar(15) NOT NULL,
  `address_jp` text NOT NULL,
  `address_id` text NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `description` text,
  `afiliasi_id` int(11) NOT NULL,
  `account_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fullname`, `email`, `sex`, `birthdate`, `place_of_birth`, `contact`, `emergency_jp`, `emergency_id`, `address_jp`, `address_id`, `avatar`, `description`, `afiliasi_id`, `account_id`) VALUES
('0', 'Yudi Ariesta Chandra', 'yudi@gmail.com', '', '2021-02-10', '', '09245141512', '21352154', '132464252', 'das', 'das', '', NULL, 0, '0'),
('usr3248', 'Andi', 'andi@hi.info.mie-u.ac.jp', '', NULL, '', '', '', '', '', '', '', NULL, 0, 'acc3248'),
('usr3423', 'Arya Permana', 'arya@gmail.com', '', NULL, '', '09063995288', '08114091048', '08114091048', 'Tsu', 'Sulawesi Tenggara', '', 'Write something here!', 0, 'acc3423'),
('usr6032', 'Muri', 'muri@gmail.com', '', NULL, '', '', '', '', '', '', '', NULL, 0, 'acc6032'),
('usr6111', 'Gita', 'gita@gmail.com', '', NULL, '', '', '', '', '', '', '', NULL, 0, 'acc6111'),
('usr6288', 'Yui', 'yui@gmail.com', '', NULL, '', '', '', '', '', '', '', NULL, 0, 'acc6288'),
('usr6638', '', 'nurul@gmail.com', '', NULL, '', '', '', '', '', '', 'default.png', '', 0, 'acc6638'),
('usr9355', '', 'pikachu@gmail.com', '', NULL, '', '', '', '', '', '', 'default.png', '', 0, 'acc9355');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province`, `description`, `country_id`) VALUES
(1, 'Hokkaido', '', 1),
(2, 'Aomori', '', 1),
(3, 'Iwate', '', 1),
(4, 'Miyagi', '', 1),
(5, 'Akita', '', 1),
(6, 'Yamagata', '', 1),
(7, 'Fukushima', '', 1),
(8, 'Ibaraki', '', 1),
(9, 'Tochigi', '', 1),
(10, 'Gunma', '', 1),
(11, 'Saitama', '', 1),
(12, 'Chiba', '', 1),
(13, 'Tokyo', '', 1),
(14, 'Kanagawa', '', 1),
(15, 'Niigata', '', 1),
(16, 'Toyama', '', 1),
(17, 'Ishikawa', '', 1),
(18, 'Fukui', '', 1),
(19, 'Yamanashi', '', 1),
(20, 'Nagano', '', 1),
(21, 'Gifu', '', 1),
(22, 'Shizuoka', '', 1),
(23, 'Aichi', '', 1),
(24, 'Mie', '', 1),
(25, 'Shiga', '', 1),
(26, 'Kyoto', '', 1),
(27, 'Osaka', '', 1),
(28, 'Hyogo', '', 1),
(29, 'Nara', '', 1),
(30, 'Wakayama', '', 1),
(31, 'Tottori', '', 1),
(32, 'Shimane', '', 1),
(33, 'Okayama', '', 1),
(34, 'Hiroshima', '', 1),
(35, 'Yamaguchi', '', 1),
(36, 'Tokushima', '', 1),
(37, 'Kagawa', '', 1),
(38, 'Ehime', '', 1),
(39, 'Kochi', '', 1),
(40, 'Fukuoka', '', 1),
(41, 'Saga', '', 1),
(42, 'Nagasaki', '', 1),
(43, 'Kumamoto', '', 1),
(44, 'Oita', '', 1),
(47, 'Miyazaki', '', 1),
(48, 'Kagoshima', '', 1),
(49, 'Okinawa', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `repository`
--

CREATE TABLE `repository` (
  `repository_id` int(11) NOT NULL,
  `member_id` varchar(30) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repository`
--

INSERT INTO `repository` (`repository_id`, `member_id`, `journal_id`, `description`) VALUES
(1, '0', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `komsat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `description`, `komsat_id`) VALUES
(0, '-', 'Tidak ada sekolah', 0),
(1, 'Hokkaido University', 'Sapporo', 1),
(4, 'Tokyo International University', '', 28),
(5, ' Osaka University', '', 37),
(6, ' Hiroshima University', '', 43),
(7, ' Kyushu University', '', 12),
(8, ' Kumamoto University', '', 15),
(9, 'Osaka City University', '', 37),
(10, 'Osaka Institute of Technology', '', 37),
(11, 'Osaka Institute of Tourism', '', 37),
(12, 'Osaka Prefecture University', '', 37),
(13, 'Osaka University of Economics ', '', 37),
(14, 'Kyoto Prefectural University o', '', 35),
(15, 'HAL Osaka', '', 37),
(16, 'Osaka Jogakuin University', '', 37),
(17, 'Osaka Sangyo University', '', 37),
(18, 'Kyoto University', '', 35),
(19, 'Kyushu Institute of Technology', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_name`) VALUES
(1, 'Superuser'),
(2, 'PPIJ'),
(3, 'Korda'),
(4, 'Komsat'),
(5, 'Anggota'),
(6, 'Alumni'),
(7, 'ATDIKBUD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`access_id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `afiliasi`
--
ALTER TABLE `afiliasi`
  ADD PRIMARY KEY (`afiliasi_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `komsat`
--
ALTER TABLE `komsat`
  ADD PRIMARY KEY (`komsat_id`);

--
-- Indexes for table `korda`
--
ALTER TABLE `korda`
  ADD PRIMARY KEY (`korda_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`management_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`repository_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afiliasi`
--
ALTER TABLE `afiliasi`
  MODIFY `afiliasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komsat`
--
ALTER TABLE `komsat`
  MODIFY `komsat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `korda`
--
ALTER TABLE `korda`
  MODIFY `korda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `management_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `repository`
--
ALTER TABLE `repository`
  MODIFY `repository_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
