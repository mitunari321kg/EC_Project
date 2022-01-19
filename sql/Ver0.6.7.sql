-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-17 04:00:19
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `test003`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `an_order`
--

CREATE TABLE `an_order` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `delivery_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `order_total_fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `brack_list`
--

CREATE TABLE `brack_list` (
  `user_id` varchar(255) NOT NULL,
  `sin_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `contents` varchar(1020) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_furigana` varchar(255) DEFAULT NULL,
  `postal_code` char(7) NOT NULL,
  `prefactures` varchar(4) DEFAULT NULL,
  `address01` varchar(255) DEFAULT NULL,
  `address02` varchar(255) DEFAULT NULL,
  `address03` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_furigana` varchar(255) DEFAULT NULL,
  `first_furigana` varchar(255) DEFAULT NULL,
  `emp_authority` tinyint(1) DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `mail_certification`
--

CREATE TABLE `mail_certification` (
  `certification_id` int(11) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `urltoken` varchar(255) DEFAULT NULL,
  `request_time` date DEFAULT NULL,
  `certification_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `line_code` smallint(6) NOT NULL DEFAULT 1,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total_fee` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_detail` varchar(510) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_flag` tinyint(1) DEFAULT NULL,
  `quality_period` date DEFAULT NULL,
  `business_code` int(11) DEFAULT 456128416,
  `checkdigit` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `evaluation` char(1) DEFAULT '1',
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `product_category`
--

CREATE TABLE `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `product_image`
--

CREATE TABLE `product_image` (
  `line_code` smallint(6) NOT NULL DEFAULT 1,
  `product_id` int(11) NOT NULL,
  `img` varchar(510) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `stock`
--

CREATE TABLE `stock` (
  `product_id` int(11) NOT NULL,
  `made_date` date NOT NULL,
  `stock_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_furigana` varchar(255) DEFAULT NULL,
  `first_furigana` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` tinyint(2) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `prefactures` varchar(4) DEFAULT NULL,
  `address01` varchar(255) DEFAULT NULL,
  `address02` varchar(255) DEFAULT NULL,
  `address03` varchar(255) DEFAULT NULL,
  `tel` char(11) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `paid_menber_flag` tinyint(1) DEFAULT NULL,
  `brack_flag` tinyint(1) DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `an_order`
--
ALTER TABLE `an_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_an_order_0` (`user_id`),
  ADD KEY `FK_an_order_1` (`delivery_id`);

--
-- テーブルのインデックス `brack_list`
--
ALTER TABLE `brack_list`
  ADD PRIMARY KEY (`user_id`);

--
-- テーブルのインデックス `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `FK_category_0` (`emp_id`);

--
-- テーブルのインデックス `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- テーブルのインデックス `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `FK_delivery_0` (`user_id`);

--
-- テーブルのインデックス `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- テーブルのインデックス `mail_certification`
--
ALTER TABLE `mail_certification`
  ADD PRIMARY KEY (`certification_id`);

--
-- テーブルのインデックス `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`line_code`),
  ADD KEY `FK_order_detail_1` (`product_id`);

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_product_0` (`emp_id`);

--
-- テーブルのインデックス `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `FK_product_category_1` (`category_id`),
  ADD KEY `FK_product_category_0` (`product_id`);

--
-- テーブルのインデックス `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`line_code`,`product_id`),
  ADD KEY `FK_product_image_0` (`product_id`);

--
-- テーブルのインデックス `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`product_id`,`made_date`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `an_order`
--
ALTER TABLE `an_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `mail_certification`
--
ALTER TABLE `mail_certification`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `an_order`
--
ALTER TABLE `an_order`
  ADD CONSTRAINT `FK_an_order_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FK_an_order_1` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`);

--
-- テーブルの制約 `brack_list`
--
ALTER TABLE `brack_list`
  ADD CONSTRAINT `FK_brack_list_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- テーブルの制約 `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_category_0` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- テーブルの制約 `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `FK_delivery_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- テーブルの制約 `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_0` FOREIGN KEY (`order_id`) REFERENCES `an_order` (`order_id`),
  ADD CONSTRAINT `FK_order_detail_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- テーブルの制約 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_0` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- テーブルの制約 `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_product_category_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `FK_product_category_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- テーブルの制約 `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_product_image_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- テーブルの制約 `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_stock_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
