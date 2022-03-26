-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `component`
--

CREATE TABLE `component` (
  `token_line` varchar(255) NOT NULL,
  `code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `component`
--

INSERT INTO `component` (`token_line`, `code`) VALUES
('m8Z43Fezsdws0Pkyz84VWvcRr6cHSbe1UTgc3AeexeN', '1997');

-- --------------------------------------------------------

--
-- Table structure for table `log_exchange_point`
--

CREATE TABLE `log_exchange_point` (
  `id_user` int(10) NOT NULL,
  `group_step` varchar(50) NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `type_product` varchar(255) NOT NULL,
  `point_product` int(4) NOT NULL,
  `date_exchange_point` varchar(255) NOT NULL,
  `time_exchange_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_exchange_point`
--

INSERT INTO `log_exchange_point` (`id_user`, `group_step`, `id_product`, `name_product`, `type_product`, `point_product`, `date_exchange_point`, `time_exchange_point`) VALUES
(1, 'barcode', '4', 'Sing\n', 'can\n', 50, '11/03/2022', '17:37:57'),
(65, 'barcode', '10', 'Peach Soju Can \n', 'can\n', 50, '11/03/2022', '17:48:44'),
(1, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '11/03/2022', '18:04:38'),
(1, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '11/03/2022', '18:09:36'),
(1, 'barcode', '4', 'Sing\n', 'can\n', 50, '11/03/2022', '18:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_exchange_reward`
--

CREATE TABLE `log_exchange_reward` (
  `id_user` int(10) NOT NULL,
  `id_reward` int(2) NOT NULL,
  `date_exchange_reward` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_exchange_reward`
--

INSERT INTO `log_exchange_reward` (`id_user`, `id_reward`, `date_exchange_reward`) VALUES
(39, 1, '2020-07-25 15:39:54'),
(39, 3, '2020-07-25 15:51:05'),
(39, 1, '2020-07-25 15:53:09'),
(39, 2, '2020-07-25 15:53:11'),
(39, 1, '2020-07-25 15:53:59'),
(39, 1, '2020-07-25 16:12:17'),
(39, 3, '2020-07-25 16:12:21'),
(39, 1, '2020-07-27 15:24:49'),
(39, 2, '2020-07-27 15:24:51'),
(39, 3, '2020-07-27 15:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `log_login`
--

CREATE TABLE `log_login` (
  `id_user` int(5) NOT NULL COMMENT 'foreign key',
  `date_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(20) NOT NULL COMMENT 'primary key',
  `id_barcode_product` varchar(13) NOT NULL,
  `name_product_thai` varchar(255) NOT NULL,
  `name_product_eng` varchar(50) NOT NULL,
  `brand_product` varchar(50) NOT NULL,
  `size_product` varchar(10) NOT NULL,
  `id_type_product` int(10) NOT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_barcode_product`, `name_product_thai`, `name_product_eng`, `brand_product`, `size_product`, `id_type_product`) VALUES
(1, '8854698005043', 'ชาเขียวรสน้ำผึ้งผสมมะนาว', 'GreenTea Honey Lemon', 'โออิชิกรีนที', '500', 1),
(3, '8858998584093', 'ชาอู่หลง', 'Oolong TEA', 'โตโย', '490', 1),
(4, '8850999016863', '', 'Sing', '', '330', 3),
(5, '8850393800013', 'บีทาเก้น', 'Betagen', '', '140', 2),
(9, '8851959158364', 'สไปรท์', 'Sprite', 'Cocacola', '450', 1),
(10, '8801048311002', 'โซจูพีช', 'Peach Soju Can ', 'Jinro', '350', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id_reward` int(2) NOT NULL,
  `description_reward` text NOT NULL,
  `name_reward` varchar(255) NOT NULL,
  `img_reward` varchar(255) NOT NULL,
  `point_exchange_reward` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id_reward`, `description_reward`, `name_reward`, `img_reward`, `point_exchange_reward`) VALUES
(1, '', 'teddy bear hug', '', 10),
(2, '', 'bag bear hug', '', 20),
(3, '', 'car bear hug', '', 30),
(9, '', 'motorcycle', '', 101),
(21, '', 'test1', '', 111);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_type_product` int(3) NOT NULL,
  `number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_type_product`, `number`) VALUES
(1, 2),
(2, 2),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `token_line`
--

CREATE TABLE `token_line` (
  `id_admin` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token_line`
--

INSERT INTO `token_line` (`id_admin`, `token`) VALUES
('1', 'f7ChVANJchxKCa2OdGAOWGsNF7UGLpGMK1KsZloqoJ4');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id_type_product` int(11) NOT NULL COMMENT 'primary key',
  `name_eng_type_product` varchar(255) NOT NULL,
  `name_th_type_product` varchar(255) NOT NULL,
  `point_of_type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id_type_product`, `name_eng_type_product`, `name_th_type_product`, `point_of_type`) VALUES
(1, 'clear', 'ขวดพลาสติกใส', 20),
(2, 'opaque', 'ขวดพลาสติกขุ่น', 10),
(3, 'can', 'กระป๋องอะลุมิเนียม', 50);

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

CREATE TABLE `type_user` (
  `id_permission_user` int(1) NOT NULL COMMENT 'primary key',
  `name_permission_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`id_permission_user`, `name_permission_user`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL COMMENT 'primary key',
  `phone_user` varchar(10) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `firstname_user` varchar(255) NOT NULL,
  `lastname_user` varchar(255) NOT NULL,
  `address_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `total_point_user` int(5) NOT NULL,
  `img_user` varchar(255) NOT NULL,
  `id_permission_user` int(1) NOT NULL COMMENT 'foreign key',
  `user_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `phone_user`, `password_user`, `firstname_user`, `lastname_user`, `address_user`, `email_user`, `total_point_user`, `img_user`, `id_permission_user`, `user_active`) VALUES
(1, '0827585492', '1234', 'thitiya', 'manowang', '55 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200', 'thitiya861@gmail.com', 380, '', 1, 0),
(44, '0932746116', 'pass', 'test', 'test1', '46 หมู่13 Lampang', 'thitiya861@gmail.com', 1130, '', 2, 0),
(59, '0861177428', '5555', 'singha', 'manowang', '', 'singha@gmail.com', 170, '', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `Foreign key type product` (`id_type_product`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Indexes for table `token_line`
--
ALTER TABLE `token_line`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Indexes for table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_permission_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(20) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id_reward` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Foreign key type product` FOREIGN KEY (`id_type_product`) REFERENCES `type_product` (`id_type_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
