-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2021 at 05:13 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moomsabai`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL,
  `id_table` int(11) NOT NULL,
  `number_table` int(11) NOT NULL,
  `sum` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `id_table`, `number_table`, `sum`) VALUES
(6, 74587000, 0, ''),
(7, 74586999, 0, ''),
(8, 74587004, 0, ''),
(9, 74587005, 0, ''),
(10, 74587008, 0, ''),
(11, 74586998, 0, ''),
(12, 74587003, 0, ''),
(13, 74587001, 0, ''),
(14, 74587007, 0, ''),
(15, 74587002, 0, ''),
(16, 74587010, 0, ''),
(17, 74587017, 0, ''),
(18, 74587019, 0, ''),
(19, 74587018, 0, ''),
(20, 74587016, 0, ''),
(21, 74587015, 0, ''),
(22, 74587011, 0, ''),
(23, 74587006, 0, ''),
(24, 74587009, 0, ''),
(25, 74587012, 0, ''),
(26, 74587013, 0, ''),
(27, 74587021, 0, ''),
(28, 74587024, 0, ''),
(29, 74587026, 0, ''),
(30, 74587025, 0, ''),
(31, 74587023, 0, ''),
(32, 74587028, 0, ''),
(33, 74587029, 0, ''),
(34, 74587014, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `list`, `total`, `date`) VALUES
(1, 'ເງິນເດືອນພະນັກງານ', 800000, '2021-08-14 14:31:37'),
(2, 'ຊື່ຜັກ', 40000, '2021-08-15 16:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `list_product`
--

CREATE TABLE `list_product` (
  `id` int(11) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `name_product` varchar(9999) NOT NULL,
  `price` varchar(20) NOT NULL,
  `inventory` int(11) NOT NULL,
  `about_the_product` text NOT NULL,
  `product_type` text NOT NULL,
  `product_status` text NOT NULL,
  `revision_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_product`
--

INSERT INTO `list_product` (`id`, `barcode`, `name_product`, `price`, `inventory`, `about_the_product`, `product_type`, `product_status`, `revision_date`, `product_picture`) VALUES
(50, '', 'ຊີ້ນເສືອຮ້ອງໃຫ້', '50000', 90, 'ເປັນຊີ້ນງົວແບບພິເສດມີໄຂມັນຕິດເລັກໜ້ອຍ ມີ ລົດຊາດທີແຊບກົມກ່ອມ', '', '', '2021-08-15 15:49:44', 'img/20210815054944.jpg'),
(51, '', 'ຊີ້ນດາດລວມ', '60000', 87, 'ເປັນລວມຊີ້ນແບບພິເສດມີໄຂມັນຕິດເລັກໜ້ອຍ ມີ ລົດຊາດທີແຊບກົມກ່ອມ', '', '', '2021-08-15 15:52:03', 'img/20210815055203.jpg'),
(52, '', 'ຊີ້ນງົວ', '50000', 80, 'ເປັນຊີ້ນງົວແບບພິເສດມີໄຂມັນຕິດເລັກໜ້ອຍ ມີ ລົດຊາດທີແຊບກົມກ່ອມ', '', '', '2021-08-15 16:06:53', 'img/20210815060653.jpg'),
(53, '', 'ຊີ້ນໝູ3ຊັ້ນ', '50000', 89, 'ເປັນຊີ້ນໝູແບບພິເສດມີໄຂມັນຕິດເລັກໜ້ອຍ ມີ ລົດຊາດທີແຊບກົມກ່ອມ', '', '', '2021-08-15 16:10:03', 'img/20210815061003.jpg'),
(54, '', 'ຊີ້ນໝູ', '50000', 90, 'ເປັນຊີ້ນໝູແບບພິເສດ ມີ ລົດຊາດທີແຊບກົມກ່ອມ', '', '', '2021-08-15 16:14:17', 'img/20210815061417.jpg'),
(55, '', 'ນ້ຳຫົວເສື່ອ', '5000', 90, 'ນ້ຳທີໄດ້ມາດຕະຖານປອດໄພ', '', '', '2021-08-15 16:32:03', 'img/20210815063203.jpg'),
(56, '', 'ໂອອິຊິ', '7000', 90, 'ຊາທີ່ໄດ້ຮັບຄວາມນິຍົມໄປທົ່ວໂລກ', '', '', '2021-08-15 16:33:57', 'img/20210815063357.jpg'),
(57, '', 'ເຂົ້າຜັດກຸ້ງ', '25000', 90, 'ເຂົ້າຜັດກຸ້ງ ເຮັດ ດ້ວຍກຸ້ງຈາກທະເລແທ້', '', '', '2021-08-15 16:40:56', 'img/20210815064056.jpg'),
(58, '', 'ທາດໄຂ່', '10000', 90, 'ຂອງຫວານ ຫຼັງອາຫານ', '', '', '2021-08-15 16:48:06', 'img/20210815064806.jpg'),
(59, '', 'ເບຍລາວ', '12000', 90, 'ເຄື່ອງດື່ມເພື່ອສຸຂະພາບ', 'ເຄື່ອງດື່ມ', '', '2021-09-14 05:11:26', 'img/20210914071126.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_table` int(11) NOT NULL,
  `price` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `id_table`, `price`, `amount`) VALUES
(159, 'ໂອອິຊິ', 74587028, '7000', 1),
(161, 'ໂອອິຊິ', 74587029, '7000', 6),
(125, 'ຈຸ່ມປາເຄິງ', 74587000, '120000', 1),
(158, 'ຊີ້ນງົວ', 74587027, '50000', 1),
(157, 'ຊີ້ນດາດລວມ', 74587027, '60000', 1),
(156, 'ທາດໄຂ່', 74587027, '10000', 1),
(155, 'ເຂົ້າຜັດກຸ້ງ', 74587020, '25000', 1),
(154, 'ນ້ຳຫົວເສື່ອ', 74587020, '5000', 1),
(153, 'ຊີ້ນງົວ', 74587020, '50000', 1),
(152, 'ຊີ້ນເສືອຮ້ອງໃຫ້', 74587020, '50000', 1),
(151, 'ໂອອິຊິ', 74587022, '7000', 1),
(150, 'ເຂົ້າຜັດກຸ້ງ', 74587022, '25000', 1),
(149, 'ຊີ້ນເສືອຮ້ອງໃຫ້', 74587022, '50000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `total` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `name`, `mail`, `phone`, `address`, `total`, `c_name`) VALUES
(30, '2021-09-10 04:17:56', 'therd', 'gg@gmail.com', '2097015341', 'savannakhet', 450000, 'therd'),
(29, '2021-09-09 23:07:49', 'therd', 'gg@gmail.com', '2097015341', 'savannakhet', 280000, 'therd');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`detail_id`, `order_id`, `product_id`, `qty`, `total`) VALUES
(23, 18, 50, 1, 50000),
(22, 18, 51, 2, 120000),
(21, 18, 52, 1, 50000),
(20, 18, 55, 2, 10000),
(19, 17, 50, 1, 50000),
(18, 17, 52, 2, 100000),
(17, 16, 48, 2, 70000),
(16, 16, 49, 1, 65000),
(15, 15, 48, 1, 35000),
(10, 12, 48, 2, 70000),
(11, 13, 49, 1, 65000),
(12, 13, 48, 2, 70000),
(13, 14, 48, 4, 140000),
(14, 14, 49, 2, 130000),
(24, 18, 56, 2, 14000),
(25, 19, 53, 1, 50000),
(26, 19, 52, 1, 50000),
(27, 20, 56, 1, 7000),
(28, 20, 54, 1, 50000),
(29, 21, 53, 1, 50000),
(30, 22, 53, 1, 50000),
(31, 23, 52, 1, 50000),
(32, 24, 53, 1, 50000),
(33, 25, 54, 1, 50000),
(34, 25, 56, 1, 7000),
(35, 25, 57, 1, 25000),
(36, 25, 58, 1, 10000),
(37, 25, 51, 1, 60000),
(38, 25, 52, 1, 50000),
(39, 25, 50, 1, 50000),
(40, 25, 53, 1, 50000),
(41, 26, 50, 1, 50000),
(42, 27, 50, 1, 50000),
(43, 28, 50, 4, 200000),
(44, 29, 52, 1, 50000),
(45, 29, 53, 1, 50000),
(46, 29, 51, 3, 180000),
(47, 30, 52, 9, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id_table` int(11) NOT NULL,
  `number_table` text NOT NULL,
  `in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `list` int(11) NOT NULL,
  `price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id_table`, `number_table`, `in`, `list`, `price`) VALUES
(74587020, '4', '2021-08-13 06:20:57', 4, '130000'),
(74587022, '6', '2021-08-13 06:21:01', 3, '82000'),
(74587027, '11', '2021-08-13 06:21:19', 3, '120000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `mail` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `name`, `user`, `pass`, `mail`, `address`, `phone`) VALUES
(1, 'therd', 'therd', '1234', 'gg@gmail.com', 'savannakhet', 2097015341),
(5, 'joy', 'joy', 'joy1234', 'joy@gmail.com', 'ບ້ານໂພນສະຫວັນ', 209705341);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_product`
--
ALTER TABLE `list_product`
  ADD PRIMARY KEY (`id`,`barcode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id_table`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_product`
--
ALTER TABLE `list_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74587030;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
