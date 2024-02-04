-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 01:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
('', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `catigories`
--

CREATE TABLE `catigories` (
  `catid` varchar(255) NOT NULL,
  `catigoryname` varchar(255) NOT NULL,
  `catigory_image` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catigories`
--

INSERT INTO `catigories` (`catid`, `catigoryname`, `catigory_image`, `add_date`) VALUES
('cat/64ae35cc7ffce', 'clothin', 'zichaelmen~p~CXIyF39tX_t~1-1-1.jpg', '2023-07-12 05:10:36'),
('cat/64ae35d6df24d', 'textile', 'FB_IMG_16670646663860299.jpg', '2023-07-12 05:10:46'),
('cat/64ae38709fae8', 'hmmm', 'FB_IMG_16851681696978778.jpg', '2023-07-12 05:21:52'),
('cat/64ae38b1caeea', 'games', 'gta5 (3).jpg', '2023-07-12 05:22:57'),
('cat/64ae38f8d11ac', 'fruits', 'http___d.jijia_co.com_nav_20230519_lockimage_20230519_515f0ecd_d29f_419b_b882_c26c94db10a6.webp_720x1280.png', '2023-07-12 05:24:08'),
('cat/64ae3916d5130', 'sport ware', 'IMG-20230512-WA0069.jpg', '2023-07-12 05:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `name`, `email`, `mobile`, `password`, `address`, `registered_date`) VALUES
(1, 'customer/64ae35a952564', 'isah abdulhameed haruna', 'isahck@gmail.com', '09134585734', 'isahck', 'arawa quaters', '2023-07-12 05:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_cat` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_cat`, `item_id`, `item_name`, `discription`, `photo`, `add_date`) VALUES
('cat/64ae35d6df24d', 'items/64ae370bda606', 'atampa', 'ingattacen atampha superwax', 'Screenshot_20230401-110436.png', '2023-07-12 05:29:09'),
('cat/64ae35d6df24d', 'items/64ae372ced1a9', 'atampa', 'ingattacen atampha superwax', 'Screenshot_20230402_130326.jpg', '2023-07-12 05:29:09'),
('cat/64ae35d6df24d', 'items/64ae3742385d8', 'atampah', 'ingattacen atampha superwax', 'FB_IMG_16802378320987180.jpg', '2023-07-12 05:29:09'),
('cat/64ae35d6df24d', 'items/64ae37572b3e2', 'atampah', 'ingattacen atampha superwax', 'FB_IMG_16670648277571520.jpg', '2023-07-12 05:29:09'),
('cat/64ae35d6df24d', 'items/64ae377276205', 'name', 'ingattacen atampha superwax', 'FB_IMG_16802378509747917.jpg', '2023-07-12 05:29:09'),
('cat/64ae35d6df24d', 'items/64ae3789a92a7', 'name', 'ingattacen atampha superwax', 'FB_IMG_16670647810036639.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae37a5a9d84', 'name', 'ingattacen atampha superwax', 'marmara_design~p~Ca6vzr5OR_T~1.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae37bb7a481', 'name', 'description', 'FB_IMG_16365724386827644-1.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae37d5093c9', 'name', 'description', 'FB_IMG_16370920729190938-1.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae37f8b8026', 'name', 'description', 'FB_IMG_16380347532621381-1.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae38121fc96', 'name', 'description', 'FB_IMG_16420729966343036-1.jpg', '2023-07-12 05:29:09'),
('cat/64ae35cc7ffce', 'items/64ae38286e28f', 'games', 'description', 'FB_IMG_16265046307616530-1-1.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae394347909', 'name', 'description', '2349037594426_status_6824dbfd8973482cad3e74323089eb5b.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae395ac475d', 'name', 'description 55', '2349037594426_status_d32458f266974c78ab9267d4da742b85.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae3979d7c0f', 'name', 'description', '2349037594426_status_c24d6b553ad54487a4262a022ce421a3.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae39a3d0d56', 'name', 'description', 'IMG-20230512-WA0067.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae39b88dd27', 'name', 'description 2', 'IMG-20230512-WA0020.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae39ce32d84', 'name', 'description', 'IMG-20230512-WA0051.jpg', '2023-07-12 05:29:09'),
('cat/64ae3916d5130', 'items/64ae3af628273', 'games', 'description gg', 'IMG-20230513-WA0006.jpg', '2023-07-12 05:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `buyitem` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `order_quality` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status1` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `customer_id`, `orderid`, `buyitem`, `address`, `mobile`, `order_quality`, `status`, `status1`, `regdate`) VALUES
(1, 'isah abdulhameed haruna', 'customer/64ae35a952564', 'trace_order/64ae3cd6b5c7d', 'items/64ae39b88dd27', 'paris', '09134585734', '89', 'pending', 'hh', '2023-07-12 05:40:38'),
(2, 'isah abdulhameed haruna', 'customer/64ae35a952564', 'trace_order/64ae3d18dacef', 'items/64ae37572b3e2', 'waila', '08543212', '67', 'pending', '98778678', '2023-07-12 05:41:44'),
(3, 'isah abdulhameed haruna', 'customer/64ae35a952564', 'trace_order/64afa9c582048', 'items/64ae3af628273', 'waila', '08543212', '65', 'pending', 'kokk', '2023-07-13 07:37:41'),
(4, 'isah abdulhameed haruna', 'customer/64ae35a952564', 'trace_order/64afab3b95339', 'items/64ae38121fc96', 'paris', '09134585734', '100', 'pending', 'yana abuja', '2023-07-13 07:43:55'),
(5, 'isah abdulhameed haruna', 'customer/64ae35a952564', 'trace_order/64b3303669710', 'items/64ae3af628273', 'atc', '893389', '12', 'pending', 'pending', '2023-07-15 23:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestid` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_request` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestid`, `customer_id`, `discription`, `photo`, `date_request`) VALUES
('requestid/64afa94490dde', 'isah abdulhameed haruna', 'ina bukatan kayam wiwi', 'http___d.jijia_co.com_nav_20230511_lockimage_20230511_305fa05a_510a_4b20_9653_82dd1f4aa399.webp_720x1280.png', '2023-07-13 07:35:32'),
('requestid/64afa968b32d8', 'isah abdulhameed haruna', 'da kayan taba', 'http___d.jijia_co.com_nav_20230519_lockimage_20230519_c807bdde_9dc3_4ee2_ad72_69204506053c.webp_720x1280.png', '2023-07-13 07:36:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
