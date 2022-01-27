-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 04:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `log_exchange_point`
--

CREATE TABLE `log_exchange_point` (
  `id_user` int(10) NOT NULL,
  `id_product` int(20) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `type_product` varchar(255) NOT NULL,
  `size_product` varchar(255) NOT NULL,
  `point_product` int(2) NOT NULL,
  `date_exchange_point` date NOT NULL,
  `time_exchange_point` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_exchange_point`
--

INSERT INTO `log_exchange_point` (`id_user`, `id_product`, `name_product`, `type_product`, `size_product`, `point_product`, `date_exchange_point`, `time_exchange_point`) VALUES
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'L', 3, '2021-06-08', '05:27:09'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'L', 2, '2021-06-08', '05:31:42'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 2, '2021-06-09', '06:36:02'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'L', 3, '2021-06-09', '05:27:09'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 1, '2021-06-09', '05:31:42'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'M', 2, '2021-06-09', '05:27:09'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'L', 2, '2021-06-09', '05:31:42'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 2, '2021-07-09', '06:36:02'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'L', 3, '2021-07-09', '05:27:09'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 1, '2021-07-09', '05:31:42'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'M', 2, '2021-07-09', '05:27:09'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'L', 2, '2021-07-09', '05:31:42'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 1, '2021-08-09', '06:36:02'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'L', 2, '2021-08-09', '05:27:09'),
(1, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 1, '2021-08-10', '05:31:42'),
(2, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'M', 2, '2021-08-10', '05:27:09'),
(3, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'L', 3, '2021-08-09', '05:31:42'),
(3, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'M', 3, '2021-08-10', '05:31:42'),
(3, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'M', 3, '2021-08-11', '05:27:09');

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
-- Table structure for table `log_temp_exchange_point`
--

CREATE TABLE `log_temp_exchange_point` (
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `type_product` varchar(255) NOT NULL,
  `size_product` varchar(255) NOT NULL,
  `point_product` int(2) NOT NULL,
  `date_exchange_point` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_temp_exchange_point`
--

INSERT INTO `log_temp_exchange_point` (`id_user`, `id_product`, `name_product`, `type_product`, `size_product`, `point_product`, `date_exchange_point`) VALUES
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'S', 2, '2021-06-09 15:30:02'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'S', 3, '2021-06-09 15:30:20'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'S', 2, '2021-06-09 15:30:21'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'S', 2, '2021-06-09 17:02:16'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกขุ่น', 'S', 3, '2021-06-09 17:02:22'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'S', 2, '2021-06-09 17:02:25'),
(38, 99, 'ขวดพลาสติก', 'ขวดพลาสติกใส', 'S', 2, '2021-06-10 03:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(20) NOT NULL COMMENT 'primary key',
  `id_barcode_product` varchar(13) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `name_product_eng` varchar(50) NOT NULL,
  `brand_product` varchar(50) NOT NULL,
  `id_type_product` int(2) NOT NULL COMMENT 'foreign key',
  `size_product` varchar(10) NOT NULL,
  `point_product` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_barcode_product`, `name_product`, `name_product_eng`, `brand_product`, `id_type_product`, `size_product`, `point_product`) VALUES
(1, '8854698005043', 'ชาเขียวรสน้ำผึ้งผสมมะนาว', 'GreenTea Honey Lemon', 'โออิชิกรีนที', 1, '500', 20),
(2, '8858891300073', 'ชาเขียวรสน้ำผึ้งผสมมะนาว', 'GreenTea Honey Lemon', 'อิชิตัน', 1, '420', 20),
(3, '8858891302619', 'ชาเขียวรสน้ำผึ้งผสมมะนาว', 'GreenTea Honey Lemon', 'อิชิตัน', 1, '600', 20),
(4, '8851959132364', 'สไปรท์', 'Sprite', 'CocaCola', 3, '325', 50);

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
(8, '', 'car', '', 100),
(9, '', 'motorcycle', '', 101);

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `id_size_product` int(2) NOT NULL,
  `size_product` varchar(3) NOT NULL,
  `description_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`id_size_product`, `size_product`, `description_size`) VALUES
(2, 'S', '150-500ml'),
(3, 'M', '500-900ml'),
(4, 'L', '900-1500ml');

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
(1, 10),
(2, 20),
(3, 30);

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
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL COMMENT 'primary key',
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `id_permission_user` int(1) NOT NULL COMMENT 'foreign key',
  `img_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `address_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `tel_user` varchar(10) NOT NULL,
  `total_point_user` int(5) NOT NULL,
  `user_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `id_permission_user`, `img_user`, `name_user`, `address_user`, `email_user`, `tel_user`, `total_point_user`, `user_active`) VALUES
(2, 'field', '123456789', 1, '', 'chonnikan wannawong', 'rongkun', 'chonnikan@gmail.com', '0659322359', 2, 0),
(38, 'jimmie', 'jirakangwan41', 1, 'rati.jpg', 'nutdanai jirakangwan', 'chiang mai', 'jimmie.nutdanai41@gmail.com', '0901325797', 5, 0),
(43, 'thitiya68', '1234', 2, 'none-img.png', 'thitiya manowang', '55 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200', 'thitiya861@gmail.com', '0827585492', 300, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`id_size_product`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_type_product`);

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
  MODIFY `id_product` int(20) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id_reward` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `id_size_product` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;