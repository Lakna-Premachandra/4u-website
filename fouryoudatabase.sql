-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 06:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fouryoudatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `cat_added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `cat_added_date`) VALUES
(1, 'Electronics', '2023-11-01 09:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `actual_price` double NOT NULL,
  `discount` double NOT NULL,
  `total_price` double NOT NULL,
  `in_stock` int(11) NOT NULL,
  `out_stock` int(11) NOT NULL,
  `remaining_stock` int(11) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `sub_category_id`, `product_name`, `product_description`, `actual_price`, `discount`, `total_price`, `in_stock`, `out_stock`, `remaining_stock`, `stock`, `added_date`) VALUES
(1, 1, 'Airpod Pro 2nd Gen', 'The H2-powered AirPods Pro now feature Adaptive Audio, 2 automatically prioritizing sounds that need your attention as you move through the world. By seamlessly blending Active Noise Cancellation with Transparency mode when you need it, Adaptive Audio magically delivers the right mix of sound for any environment.', 78500, 8500, 70000, 10, 3, 7, 'In Stock', '2023-11-01 09:38:17'),
(2, 1, 'Beats Fit Pro', 'Beats Fit Pro supports Spatial Audio with dynamic head tracking for immersive music, movies, and games². Dynamic head tracking uses gyroscopes and accelerometers to adjust the sound as you turn your head, for a multi-dimensional experience that makes you feel like you\'re inside of it.', 57990, 7990, 50000, 10, 5, 5, 'In Stock', '2023-11-01 09:39:58'),
(3, 2, 'TK13 Mini Smartwatch', 'Device Name: Tk13 Mini\r\nType: Smartwatch\r\nDisplay: Amoled\r\nBattery: 1 Week\r\nGender: Ladies\r\nStarp: Ocean Band\r\nGift: Analogue Watch+ Ladies Bracelet\r\nThe Perfect Gift For Elegance And Functionality Looking For The Ideal Gift\r\nIt Comes Equipped With Advanced Health Monitoring Features, Including Heart Rate Tracking, Sleep Analysis, And Step Counting. With These Insights, She Can Make Informed Decisions About Her Health And Fitness Goals.', 18999, 3999, 15000, 10, 4, 6, 'In Stock', '2023-11-01 09:41:51'),
(4, 2, 'HK10 Pro Max Smartwatch', 'The HK10 Pro Max Smart Watch, brought to you by OpenAI, is a multifunctional and cutting-edge timepiece that boasts a wide array of features. Crafted with precision and designed for ultimate convenience, this smartwatch is a testament to innovation.\r\nEmbedded within the sleek and stylish exterior lies a multitude of functionalities, making it an ideal companion for tech enthusiasts and fitness aficionados alike. Seamlessly blending technology and fashion, the HK10 Pro Max Smart Watch sets new standards in the world of wearable gadgets.', 15000, 2000, 13000, 10, 6, 4, 'In Stock', '2023-11-01 09:43:38'),
(5, 3, 'Google Chromecast 3', 'Expand your home entertainment without buying a new TV; Google Chromecast [1] lets you stream your favorites from your phone, tablet, or laptop; no remote needed [2]\r\nChromecast is easy to set up up; just plug it in, connect to Wi-Fi, and start streaming [2] to turn your TV into a smart TV; it works with almost any TV that has an HDMI port\r\nWorks with the apps you already know and love; enjoy shows, movies, music, games, sports, photos, live TV, and more from over 2,000 streaming apps in up to 1080p [2,3]\r\nWith Chromecast, you can stream, pause, play, or adjust the volume right from your phone with just a tap; while you’re streaming, you can still use your phone as you normally do\r\nMirror your laptop screen or turn your tablet into an even better entertainment system; surf the web or see your media on the big screen [2,3]\r\nSee what’s happening at home; with Chromecast and the Google Home app [1], you can check your Nest cameras or Nest video doorbell [4] right from your couch\r\nChromecast supports most wireless networks with Wi-Fi 802.11ac (2.4GHz/5GHz)', 18500, 3500, 15000, 10, 3, 7, 'In Stock', '2023-11-01 09:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_id` int(11) NOT NULL,
  `color1` varchar(50) DEFAULT NULL,
  `color2` varchar(50) DEFAULT NULL,
  `color3` varchar(50) DEFAULT NULL,
  `color4` varchar(50) DEFAULT NULL,
  `color5` varchar(50) DEFAULT NULL,
  `color6` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`product_id`, `color1`, `color2`, `color3`, `color4`, `color5`, `color6`) VALUES
(1, 'Black', 'White', 'Pink', 'Grey', NULL, NULL),
(2, 'Black', 'Blue', 'Pink', 'White', NULL, NULL),
(3, 'Pink', 'Blue', 'White', 'Grey', NULL, NULL),
(4, 'Black', 'White', 'Brown', 'Grey', NULL, NULL),
(5, 'Black', 'White', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_id` int(11) NOT NULL,
  `img1` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text DEFAULT NULL,
  `img5` text DEFAULT NULL,
  `img6` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'IMG-6541d48e50f131.01362928.jpg', 'IMG-6541d4f33e9028.13571690.jpg', 'IMG-6541d504b71230.38358506.jpg', 'IMG-6541d50d6f99f1.93268359.jpg', 'IMG-6541d51c24cce7.71984875.jpg', 'IMG-6541d522017525.83862609.jpg'),
(2, 'IMG-6541d541075505.73459670.jpg', 'IMG-6541d5470c2822.94168610.jpg', 'IMG-6541d54b4da2a7.71694142.jpg', 'IMG-6541d550505345.04905767.jpg', 'IMG-6541d555763e69.26202783.jpg', 'IMG-6541d55c0996e7.54295480.jpg'),
(3, 'IMG-6541d589c7a797.47319528.jpg', 'IMG-6541d592e7b354.48207472.jpg', 'IMG-6541d59b0ba933.26429139.jpg', 'IMG-6541d5a44be774.58105119.jpg', 'IMG-6541d5ac81ad92.83246660.jpg', NULL),
(4, 'IMG-6541d5d453ac40.13513834.jpg', 'IMG-6541d5ea9d9c32.47143553.jpg', 'IMG-6541d5f65db3f0.29822591.jpg', 'IMG-6541d5fe75af28.37646790.jpg', 'IMG-6541d604c65a28.23249620.jpg', NULL),
(5, 'IMG-6541d62608fd41.90204522.jpg', 'IMG-6541d6319239e1.99125074.jpg', 'IMG-6541d637dffb75.02619330.jpg', 'IMG-6541d63fd21768.11527530.jpg', 'IMG-6541d64651efa7.84661014.jpg', 'IMG-6541d64a541796.29815475.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_cat_added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `sub_cat_added_date`) VALUES
(1, 1, 'Earphones', '2023-11-01 09:35:22'),
(2, 1, 'Smart Watch', '2023-11-01 09:35:49'),
(3, 1, 'Chromecast', '2023-11-01 09:36:28');
(3, 1, 'Chromecast', '2023-11-01 09:36:28');
(3, 1, 'Chromecast', '2023-11-01 09:36:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_subcat_id` (`sub_category_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_subcat_id` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`sub_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `fk_product_id1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_product_id2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
