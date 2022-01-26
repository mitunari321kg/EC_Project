-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-20 02:29:45
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `82`
--

-- --------------------------------------------------------
INSERT INTO `category` (`category_id`, `name`, `registration_date`, `emp_id`, `delete_flag`) VALUES
(1, 'ラーメン', '2022-01-12', 'test01', 0),
(2, 'サイドメニュー', '2022-01-13', 'test01', 0),
(3, 'おすすめ商品', '2022-01-12', 'test01', 0),
(4, '健康食品', '2022-01-12', 'test01', 0);

