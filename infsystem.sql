-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 10:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_pass` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'markprnk@gmail.com', '12345'),
(2, 'mark@mail.ru', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'BlackGlama'),
(2, 'Marco Varni  ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(8, 'Норкові шуби'),
(9, 'Шуби з каракуля'),
(10, 'Шуби з мутона'),
(11, 'Шуби з нутрії');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_shop` int(100) NOT NULL,
  `product_title` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` mediumtext CHARACTER SET utf8mb4,
  `product_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_bg_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_keywords` mediumtext CHARACTER SET utf8mb4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_shop`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_bg_image`, `product_keywords`) VALUES
(11, 8, 1, 1, 'Норкова шуба з капюшоном поперечка ', 3200, '<p>Норкова шуба, поперечка з капюшоном, коричневий колір, шиється із норки BlackGlama, довжина 100-100см.</p>', 'poperechka_z_kapish.jpg', 'poper_z_kapish.jpg', 'Норкові шуби, поперечка, коричневий'),
(12, 8, 1, 2, 'Шуба із норки Блекглама, англійський комір, поперечка', 3000, '<p>Шуба із найкращого сорту американської норки Blackglama, поперечне пошиття, англійський комір</p>', 'fr_ang_k_poper.jpg', 'front_bl_p__b.jpg', 'Норкові шуби, поперечка, англійський комір'),
(13, 8, 1, 2, 'Довга шуба з капюшоном із норки Блекглама', 3300, '<p>Довга шуба з капюшоном, можливі варіанти як із поясом, так і без, блекглама.</p>', 'dovg_kap.jpg', 'dov_s_kap__b.jpg', 'Норкові шуби, довга, капюшон'),
(14, 9, 2, 2, 'Шуба із каракуля песцевий англійський комір', 950, '<p>Шуба фасон пальто, каракуль, англійський комір та манжети писець.</p>', 'pesceviy_ang_konir.jpg', 'pescev_ang_komir.jpg', 'Каракуль, англійський комір, пальто'),
(15, 9, 2, 2, 'Шуба із каракуля песцевий англійський комір', 950, '<p>Шуба фасон пальто, каракуль, англійський комір та манжети песець.</p>', 'pesc_an_kom_front.jpg', 'psc_ang_kom_front.jpg', 'Каракуль, англійський комір, пальто'),
(16, 10, 2, 2, 'Жилетка із овчини, мутон', 420, '<p>Жилет (безрукавка) &mdash; хутро мутон, пошиття поперечими пластинами із розшивкою.</p>', 'zhilet_z_ovcini_muton.jpg', 'zhil_z_ovch_mut.jpg', 'Мутон, жилет з овчини'),
(17, 10, 2, 1, 'Півшубок-безрукавка із мутону', 520, '<p>Півшубок-безрукавка із мутону, короткий рукав, поперечне пошиття, приталеність.</p>', 'pivsh_bezrukav.jpg', 'pivsh_bez.jpg', 'Мутон, півшубок-безрукавка'),
(18, 11, 1, 1, 'Шуба нутрія, приталений силует, пояс, комір песець', 580, '<p>Шуби із нутрії, пояс, англійський комір із песця, шліца, манжет.</p>', 'prital_siluet_komir_pisec.jpg', 'prital_sil_kom_pis.jpg', 'Шуба нутрія, комір песець');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(100) NOT NULL,
  `shop_title` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_title`) VALUES
(1, 'Hutro-Universe'),
(2, 'Tykafurlux');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
