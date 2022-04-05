-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 09:44 PM
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
(1, 'barcode', '4', 'Sing\n', 'can\n', 50, '11/03/2022', '18:10:00'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:03:54'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:06:23'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:11:23'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:11:51'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:12:31'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:15:39'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:16:20'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:17:01'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:17:25'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:17:59'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:19:33'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:20:04'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:20:22'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:20:41'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:21:38'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:22:39'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:23:14'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:23:35'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:23:59'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:24:22'),
(66, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '20/03/2022', '11:24:41'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:26:23'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:27:22'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:28:33'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:29:12'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:29:54'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:30:47'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:31:13'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:31:35'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:32:00'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:32:25'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:32:48'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:34:17'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:34:45'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:35:06'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:35:26'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:35:52'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:36:12'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:36:30'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:36:51'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:37:09'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:37:57'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:38:43'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:39:10'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:39:57'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:41:39'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:42:14'),
(66, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '11:42:34'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:43:18'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:43:40'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:44:04'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:44:26'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:44:46'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:45:07'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:45:28'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:45:50'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:46:11'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:47:52'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:48:11'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:48:28'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:48:47'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:49:06'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:49:25'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:49:46'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:50:05'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:50:24'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:50:43'),
(66, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '20/03/2022', '11:51:03'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '20/03/2022', '12:03:11'),
(66, 'barcode', '20', 'Meji Strawberry\n', 'opaque\n', 10, '20/03/2022', '12:15:28'),
(66, 'barcode', '23', 'Dutch Mill 4in1\n', 'opaque\n', 10, '20/03/2022', '12:16:18'),
(66, 'barcode', '25', 'Namthip\n', 'clear\n', 20, '20/03/2022', '12:17:01'),
(66, 'barcode', '28', 'Purra\n', 'clear\n', 20, '20/03/2022', '12:17:26'),
(66, 'barcode', '16', 'Coca Cola\n', 'can\n', 50, '20/03/2022', '12:17:47'),
(66, 'barcode', '24', 'Aura\n', 'clear\n', 20, '20/03/2022', '12:18:08'),
(66, 'barcode', '19', 'Coconut Juice with nata de coco\n', 'opaque\n', 10, '20/03/2022', '12:20:05'),
(66, 'barcode', '18', 'VITADAY\n', 'opaque\n', 10, '20/03/2022', '12:20:53'),
(66, 'barcode', '22', 'Meiji Live\n', 'opaque\n', 10, '20/03/2022', '12:21:12'),
(66, 'barcode', '21', 'Dutch Mill Selected\n', 'opaque\n', 10, '20/03/2022', '12:21:32'),
(66, 'barcode', '12', 'Double C\n', 'can\n', 50, '20/03/2022', '12:22:19'),
(66, 'barcode', '11', 'pepsi\n', 'can\n', 50, '20/03/2022', '12:22:39'),
(66, 'barcode', '15', 'Calpis lacto soda\n', 'can\n', 50, '20/03/2022', '12:23:00'),
(66, 'barcode', '13', 'Sponsor\n', 'can\n', 50, '20/03/2022', '12:23:22'),
(66, 'barcode', '17', 'SANTORY\n', 'can\n', 50, '20/03/2022', '12:23:43'),
(66, 'barcode', '26', 'Mont Fleur\n', 'clear\n', 20, '20/03/2022', '12:24:02'),
(66, 'barcode', '27', 'Coke Cola\n', 'clear\n', 20, '20/03/2022', '12:24:25'),
(59, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '21/03/2022', '17:52:48'),
(59, 'barcode', '10', 'Peach Soju Can \n', 'can\n', 50, '21/03/2022', '17:53:28'),
(59, 'barcode', '11', 'pepsi\n', 'can\n', 50, '21/03/2022', '17:54:23'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '17:55:04'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '17:55:37'),
(59, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '21/03/2022', '17:56:00'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '17:57:26'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '18:02:03'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '18:02:22'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '21/03/2022', '18:02:41'),
(1, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '23/03/2022', '12:31:07'),
(1, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '23/03/2022', '12:32:01'),
(1, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '23/03/2022', '12:32:31'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '23/03/2022', '14:50:30'),
(59, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '23/03/2022', '14:52:12'),
(67, 'Sensor', 'Unknow', 'Unknow', 'clear', 20, '23/03/2022', '15:00:02'),
(59, 'Sensor', 'Unknow', 'Unknow', 'opaque', 10, '23/03/2022', '15:09:17'),
(59, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '23/03/2022', '15:09:57'),
(1, 'Sensor', 'Unknow', 'Unknow', 'can', 50, '25/03/2022', '09:43:32'),
(1, 'barcode', '4', 'Sing', 'can', 50, '06/04/2022', '02:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `log_exchange_reward`
--

CREATE TABLE `log_exchange_reward` (
  `id_ex_reward` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `name_user_ex` varchar(255) NOT NULL,
  `name_reward_ex` varchar(255) NOT NULL,
  `address_user_ex` varchar(255) NOT NULL,
  `track_number_ex` varchar(14) NOT NULL,
  `status_ex` int(2) NOT NULL,
  `date_ex` varchar(15) NOT NULL,
  `time_ex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_exchange_reward`
--

INSERT INTO `log_exchange_reward` (`id_ex_reward`, `id_user`, `name_user_ex`, `name_reward_ex`, `address_user_ex`, `track_number_ex`, `status_ex`, `date_ex`, `time_ex`) VALUES
(9, 59, 'singha manowang', 'bag bear hug', '-', '', 1, '02/04/2022', '17:48:10'),
(10, 59, 'singha manowang', 'teddy bear hug', '-', ' 1234567890123', 2, '02/04/2022', '17:48:13'),
(11, 75, 'test1 test1', 'teddy bear hug', '', ' 5555555555555', 2, '02/04/2022', '17:48:40');

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
(4, '8850999016863', '', 'Sing', '-', '330', 3),
(5, '8850393800013', 'บีทาเก้น', 'Betagen', '-', '140', 2),
(9, '8851959158364', 'สไปรท์', 'Sprite', 'Cocacola', '450', 1),
(10, '8801048311002', 'โซจูพีช', 'Peach Soju Can ', 'Jinro', '350', 3),
(11, '8858998581139', 'เป๊ปซี่', 'pepsi', '-', '245', 3),
(12, '8859077831237', 'ดับเบิ้ลซี', 'Double C', '-', '330', 3),
(13, '8850228000588', 'สปอนเซอร์', 'Sponsor', '-', '325', 3),
(14, '8850999016863', 'สิงห์โซดา', 'SINGHA SODA', '-', '330', 3),
(15, '8859183522715', 'คาลพิสแลคโตะ โซดา', 'Calpis lacto soda', '-', '245', 3),
(16, '8851959108079', 'โคคาโคล่า', 'Coca Cola', '-', '180', 3),
(17, '4901777210912', 'ซันโตริ', 'SANTORY', '-', '350', 3),
(18, '8859015703220', 'วิตอะเดย์ วิตามิน C', 'VITADAY', '-', '310', 2),
(19, '8850157550819', 'น้ำมะพร้าวผสมวุุ้น', 'Coconut Juice with nata de coco', 'Magic Farm', '240', 2),
(20, '8850329120611', 'ซีพี-เมจิ', 'Meji Strawberry', '-', '200', 2),
(21, '8851717060076', 'ดัชมิลท์ ซีเลคเต๊ด', 'Dutch Mill Selected', '-', '200', 2),
(22, '8850329846139', 'เมจิ ไลฟ์', 'Meiji Live', '-', '155', 2),
(23, '8851717030079', 'ดัชมิลท์ 4 ใน 1', 'Dutch Mill 4in1', '-', '100', 2),
(24, '8850779555995', 'น้ำแร่ ออรา', 'Aura', '-', '500', 1),
(25, '8851959139714', 'น้ำทิพย์', 'Namthip', '-', '550', 1),
(26, '8851530132004', 'มองต์ เฟลอ', 'Mont Fleur', '-', '1500', 1),
(27, '8851959143018', 'โคคาโคล่า ออริจินัล', 'Coke Cola', '-', '1500', 1),
(28, '8850999001449', 'เพอร์ร่า', 'Purra', '-', '600', 1),
(29, '8854641002709', 'น้ำดื่ม', 'Drinking water', '-', '350', 1),
(30, '8858638003571', 'น้ำดื่ม', 'Drinking water', '-', '1500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id_reward` int(2) NOT NULL,
  `description_reward` text NOT NULL,
  `name_reward` varchar(255) NOT NULL,
  `point_exchange_reward` int(5) NOT NULL,
  `stock_reward` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id_reward`, `description_reward`, `name_reward`, `point_exchange_reward`, `stock_reward`) VALUES
(1, '', 'teddy bear hug', 10, 8),
(2, '', 'bag bear hug', 50, 4),
(3, '', 'bear cap', 200, 5);

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
(1, 32),
(2, 42),
(3, 41);

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
(1, 'clear', 'ขวดพลาสติกใส', 25),
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
  `id_permission_user` int(1) NOT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `phone_user`, `password_user`, `firstname_user`, `lastname_user`, `address_user`, `email_user`, `total_point_user`, `id_permission_user`) VALUES
(1, '0827585492', 'admin', 'thitiya', 'manowang', '55 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200', 'thitiya861@gmail.com', 430, 1),
(44, '0932746116', '1234', 'test1', 'test1', '46 หมู่13 Lampang ', 'thitiya035.7@gmail.com', 920, 2),
(59, '0861177428', '5555', 'singha', 'manowang', 'Lampang', 'singha@gmail.com', 165, 2),
(75, '0811111111', 'test1', 'test1', 'test1', 'test1', 'test1@hotmail.com', 15, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_exchange_reward`
--
ALTER TABLE `log_exchange_reward`
  ADD PRIMARY KEY (`id_ex_reward`);

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
-- AUTO_INCREMENT for table `log_exchange_reward`
--
ALTER TABLE `log_exchange_reward`
  MODIFY `id_ex_reward` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(20) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id_reward` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=78;

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
