-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-20 01:30:16
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

INSERT INTO `product_image` (`line_code`, `product_id`, `img`) VALUES
(1, 1, '../img/ramen_sapporo.png'),
(2, 2, '../img/ramen_asahikawa.png'),
(3, 3, '../img/ramen_hakodate.png'),
(4, 4, '../img/ramen_aomorimiso.png'),
(5, 5, '../img/ramen_jumonzi.png'),
(6, 6, '../img/ramen_sakata.png'),
(7, 7, '../img/ramen_sendai.png'),
(8, 8, '../img/ramen_kitakata.png'),
(9, 9, '../img/ramen_sirakawa.png'),
(10, 10, '../img/ramen_hatiouzi.png'),
(11, 11, '../img/ramen_yokozuna.png'),
(12, 12, '../img/ramen_sanma.png'),
(13, 13, '../img/ramen_takeokasiki.png'),
(14, 14, '../img/ramen_katuura.png'),
(15, 15, '../img/ramen_sutamina.png'),
(16, 16, '../img/ramen_mito.png'),
(17, 17, '../img/ramen_sano.png'),
(18, 18, '../img/ramen_takazaki.png'),
(19, 19, '../img/ramen_huzioka.png'),
(20, 20, '../img/ramen_tubame.png'),
(21, 21, '../img/ramen_toyama.png'),
(22, 22, '../img/ramen_taiwan.png'),
(23, 23, '../img/ramen_hida.png'),
(24, 24, '../img/ramen_kameyama.png'),
(25, 25, '../img/ramen_sekiho.png'),
(26, 26, '../img/ramen_kyoto.png'),
(27, 27, '../img/ramen_tenri.png'),
(28, 28, '../img/ramen_wakayama.png'),
(29, 29, '../img/ramen_okayama.png'),
(30, 30, '../img/ramen_kasaoka.png'),
(31, 31, '../img/ramen_omiti.png'),
(32, 32, '../img/ramen_hirosima.png'),
(33, 33, '../img/ramen_tottori.png'),
(34, 34, '../img/ramen_tokusima.png'),
(35, 35, '../img/ramen_nabeyaki.png'),
(36, 36, '../img/ramen_hakata.png'),
(37, 37, '../img/ramen_kuryuumai.png'),
(38, 38, '../img/ramen_nagahama.png'),
(39, 39, '../img/ramen_tamana.png'),
(40, 40, '../img/ramen_miyazaki.png'),
(41, 41, '../img/ramen_remon.png'),
(42, 42, '../img/sab_menma.png'),
(43, 43, '../img/sab_negi.png'),
(44, 44, '../img/sab_sironegi.png'),
(45, 45, '../img/sab_tamago.png'),
(46, 46, '../img/sab_nori.png'),
(47, 47, '../img/sab_yasai.png'),
(48, 48, '../img/sab_ko-n.png'),
(49, 49, '../img/sab_moyasi.png'),
(50, 50, '../img/sab_tya-syu-.png'),
(52, 51, '../img/sab_karaage.png'),
(53, 52, '../img/sab_gyouza.png'),
(54, 53, '../img/sab_tya-han.png'),
(57, 54, '../img/sab_gohan.png'),
(58, 55, '../img/sab_kimuti.png'),
(59, 56, '../img/sab_ko-ra.png'),
(60, 57, '../img/sab_orange.png'),
(61, 58, '../img/sab_u-ron.png'),
(62, 59, '../img/sab_anin.png');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `product_img_table`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`line_code`),
  ADD KEY `FK_product_img_table_0` (`product_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `product_img_table`
--
ALTER TABLE `product_image`
  MODIFY `line_code` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `product_img_table`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_product_img_table_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
