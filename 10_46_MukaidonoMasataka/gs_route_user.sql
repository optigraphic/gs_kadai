-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 11 月 01 日 23:36
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_route_user`
--

CREATE TABLE IF NOT EXISTS `gs_route_user` (
`id` int(11) NOT NULL,
  `life_flg` int(1) NOT NULL DEFAULT '1',
  `idnum` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `add1` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `add2` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `life_date` int(4) NOT NULL,
  `join_year` int(4) NOT NULL,
  `birth-year` int(4) NOT NULL,
  `birthday` int(4) NOT NULL,
  `rank` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_route_user`
--

INSERT INTO `gs_route_user` (`id`, `life_flg`, `idnum`, `name`, `add1`, `add2`, `life_date`, `join_year`, `birth-year`, `birthday`, `rank`) VALUES
(1, 1, '0000', '山田太郎', '東京都東京区', '東京町１−１−１', 1010, 2010, 1980, 702, 4),
(2, 1, '1111', '山田二郎', '神奈川県神奈川区', '神奈川2-2-2', 101, 2000, 2000, 101, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_route_user`
--
ALTER TABLE `gs_route_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_route_user`
--
ALTER TABLE `gs_route_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
