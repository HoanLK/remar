-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 03:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoanlk_remar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_parent`, `description`) VALUES
(1, 'Phòng ăn', 0, ''),
(2, 'Phòng khách', 0, ''),
(3, 'Phòng ngủ', 0, 'Phòng ngủ'),
(8, 'Phòng làm việc', 0, NULL),
(9, 'Bếp', 0, NULL),
(10, 'Trẻ em', 0, NULL),
(11, 'Quán Cafe', 0, NULL),
(12, 'Tủ', 0, NULL),
(13, 'Cửa', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2e9e4da632251f651b29f50cf1ce0d09', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1424919061, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `description` text,
  `gia` varchar(100) DEFAULT NULL,
  `giakm` varchar(100) DEFAULT NULL,
  `img_truoc` varchar(255) DEFAULT NULL,
  `img_sau` varchar(255) DEFAULT NULL,
  `img_trai` varchar(255) DEFAULT NULL,
  `img_phai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_category`, `description`, `gia`, `giakm`, `img_truoc`, `img_sau`, `img_trai`, `img_phai`) VALUES
(1, 'Phòng ăn 1', 1, NULL, '100000', NULL, NULL, NULL, NULL, NULL),
(2, 'Phòng ăn 2', 1, NULL, '200000', NULL, NULL, NULL, NULL, NULL),
(3, 'Phòng khách 1', 2, NULL, '1000000', NULL, 'public/images/product/noithat/phong-khach/1.jpg', NULL, NULL, NULL),
(4, 'Phòng khách 2', 2, NULL, '2500000', NULL, 'public/images/product/noithat/phong-khach/2.jpg', NULL, NULL, NULL),
(6, 'Phòng khách 3', 2, NULL, '0', NULL, 'public/images/product/noithat/phong-khach/3.jpg', NULL, NULL, NULL),
(7, 'Phòng khách 4', 2, NULL, '0', NULL, 'public/images/product/noithat/phong-khach/4.jpg', NULL, NULL, NULL),
(8, 'Phòng khách 5', 2, NULL, '0', NULL, 'public/images/product/noithat/phong-khach/5.jpg', NULL, NULL, NULL),
(9, 'Phòng khách 6', 2, NULL, NULL, NULL, 'public/images/product/noithat/phong-khach/6.jpg', NULL, NULL, NULL),
(10, 'Phòng khách 7', 2, NULL, NULL, NULL, 'public/images/product/noithat/phong-khach/7.jpg', NULL, NULL, NULL),
(11, 'Phòng khách 8', 2, NULL, NULL, NULL, 'public/images/product/noithat/phong-khach/8.jpg', NULL, NULL, NULL),
(12, 'Phòng ăn 3', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/3.jpg', NULL, NULL, NULL),
(13, 'Phòng ăn 4', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/4.jpg', NULL, NULL, NULL),
(14, 'Phòng ăn 5', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/5.jpg', NULL, NULL, NULL),
(15, 'Phòng ăn 6', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/6.jpg', NULL, NULL, NULL),
(16, 'Phòng ăn 7', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/7.jpg', NULL, NULL, NULL),
(17, 'Phòng ăn 8', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/8.jpg', NULL, NULL, NULL),
(18, 'Phòng ăn 9', 1, NULL, NULL, NULL, 'public/images/product/noithat/phong-an/9.jpg', NULL, NULL, NULL),
(19, 'Phòng ngủ 1', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/1.jpg', NULL, NULL, NULL),
(20, 'Phòng ngủ 2', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/2.jpg', NULL, NULL, NULL),
(21, 'Phòng ngủ 3', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/3.jpg', NULL, NULL, NULL),
(22, 'Phòng ngủ 4', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/4.jpg', NULL, NULL, NULL),
(23, 'Phòng ngủ 5', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/5.jpg', NULL, NULL, NULL),
(24, 'Phòng ngủ 6', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/6.jpg', NULL, NULL, NULL),
(25, 'Phòng ngủ 7', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/7.jpg', NULL, NULL, NULL),
(26, 'Phòng ngủ 8', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/8.jpg', NULL, NULL, NULL),
(27, 'Phòng ngủ 9', 3, NULL, NULL, NULL, 'public/images/product/noithat/phong-ngu/9.jpg', NULL, NULL, NULL),
(28, 'Phòng làm việc 1', 8, '', '', '', 'public/images/product/noithat/phong-lam-viec/1.jpg', NULL, NULL, NULL),
(29, 'Phòng làm việc 2', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/2.jpg', NULL, NULL, NULL),
(30, 'Phòng làm việc 8', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/3.jpg', NULL, NULL, NULL),
(31, 'Phòng làm việc 4', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/4.jpg', NULL, NULL, NULL),
(32, 'Phòng làm việc 5', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/5.jpg', NULL, NULL, NULL),
(33, 'Phòng làm việc 6', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/6.jpg', NULL, NULL, NULL),
(34, 'Phòng làm việc 7', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/7.jpg', NULL, NULL, NULL),
(35, 'Phòng làm việc 8', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/8.jpg', NULL, NULL, NULL),
(36, 'Phòng làm việc 9', 8, NULL, NULL, NULL, 'public/images/product/noithat/phong-lam-viec/9.jpg', NULL, NULL, NULL),
(37, 'Bếp 1', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/1.jpg', NULL, NULL, NULL),
(38, 'Bếp 2', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/2.jpg', NULL, NULL, NULL),
(39, 'Bếp 3', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/3.jpg', NULL, NULL, NULL),
(40, 'Bếp 4', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/4.jpg', NULL, NULL, NULL),
(41, 'Bếp 5', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/5.jpg', NULL, NULL, NULL),
(42, 'Bếp 6', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/6.jpg', NULL, NULL, NULL),
(43, 'Bếp 7', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/7.jpg', NULL, NULL, NULL),
(44, 'Bếp 8', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/8.jpg', NULL, NULL, NULL),
(45, 'Bếp 9', 9, NULL, NULL, NULL, 'public/images/product/noithat/bep/9.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ttkhachhang`
--

CREATE TABLE IF NOT EXISTS `ttkhachhang` (
`id` int(11) NOT NULL,
  `TenKhachHang` varchar(100) NOT NULL,
  `SDTKhachHang` varchar(100) NOT NULL,
  `DaDoc` tinyint(1) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ttkhachhang`
--

INSERT INTO `ttkhachhang` (`id`, `TenKhachHang`, `SDTKhachHang`, `DaDoc`, `id_product`, `time`) VALUES
(21, 'qqwe', 'qwe', 0, 20, '0000-00-00 00:00:00'),
(22, '123', '123', 0, 20, '0000-00-00 00:00:00'),
(23, 'qwe', 'qwe', 0, 20, 'Wed, 25 Feb 2015 15:'),
(24, 'Trần Công Hoan', '0988572821', 0, 13, 'Thu, 26 Feb 2015 02:19:28'),
(25, '111', '0988572821', 0, 10, 'Thu, 26 Feb 2015 02:41:15'),
(26, '111', '0988572821', 0, 10, 'Thu, 26 Feb 2015 02:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'Hoan LK', 'e1a7b66e4776e673099c5ef7b3094af5'),
(12, 'hoanlk', 'Trần Công Hoan', 'e1a7b66e4776e673099c5ef7b3094af5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttkhachhang`
--
ALTER TABLE `ttkhachhang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `ttkhachhang`
--
ALTER TABLE `ttkhachhang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
