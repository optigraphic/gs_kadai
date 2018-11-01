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
-- テーブルの構造 `gs_route_ikiru`
--

CREATE TABLE IF NOT EXISTS `gs_route_ikiru` (
`id` int(12) NOT NULL,
  `idnum` int(64) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add1` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add2` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `13_1230` int(3) DEFAULT NULL,
  `14_1230` int(3) DEFAULT NULL,
  `11_1330` int(3) DEFAULT NULL,
  `12_1330` int(3) DEFAULT NULL,
  `16_1330` int(3) DEFAULT NULL,
  `17_1330` int(3) DEFAULT NULL,
  `18_1330` int(3) DEFAULT NULL,
  `08_1500` int(3) DEFAULT NULL,
  `09_1500` int(3) DEFAULT NULL,
  `13_1730` int(3) DEFAULT NULL,
  `07_1830` int(3) DEFAULT NULL,
  `11_1830` int(3) DEFAULT NULL,
  `16_1830` int(3) DEFAULT NULL,
  `18_1830` int(3) DEFAULT NULL,
  `20_1230` int(3) DEFAULT NULL,
  `21_1230` int(3) DEFAULT NULL,
  `27_1230` int(3) DEFAULT NULL,
  `28_1230` int(3) DEFAULT NULL,
  `19_1330` int(3) DEFAULT NULL,
  `23_1330` int(3) DEFAULT NULL,
  `24_1330` int(3) DEFAULT NULL,
  `25_1330` int(3) DEFAULT NULL,
  `26_1330` int(3) DEFAULT NULL,
  `20_1730` int(3) DEFAULT NULL,
  `27_1730` int(3) DEFAULT NULL,
  `23_1830` int(3) DEFAULT NULL,
  `25_1830` int(3) DEFAULT NULL,
  `ttlcnt` int(3) NOT NULL,
  `ttlchrg` int(10) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gs_route_ikiru`
--

INSERT INTO `gs_route_ikiru` (`id`, `idnum`, `name`, `email`, `tel`, `zip`, `add1`, `add2`, `13_1230`, `14_1230`, `11_1330`, `12_1330`, `16_1330`, `17_1330`, `18_1330`, `08_1500`, `09_1500`, `13_1730`, `07_1830`, `11_1830`, `16_1830`, `18_1830`, `20_1230`, `21_1230`, `27_1230`, `28_1230`, `19_1330`, `23_1330`, `24_1330`, `25_1330`, `26_1330`, `20_1730`, `27_1730`, `23_1830`, `25_1830`, `ttlcnt`, `ttlchrg`, `datetime`) VALUES
(43, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都世田谷区', '世田谷１−１−１', 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 30000, '2018-10-31 00:35:42'),
(44, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都世田谷区', '世田谷１−１−１', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 10000, '2018-10-31 00:37:51'),
(45, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都世田谷区', '世田谷１−１−１', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 3, 30000, '2018-10-31 00:40:45'),
(46, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都世田谷区', '世田谷１−１−１', 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4, 40000, '2018-10-31 00:42:14'),
(47, 1111, '山田二郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '神奈川県神奈川区', '神奈川2-2-2', 0, 0, 0, 1, 5, 6, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 18, 180000, '2018-10-31 02:30:59'),
(48, 2323, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都東京区', '東京町１−１−１', 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0, 0, 0, 1, 0, 2, 0, 0, 0, 8, 80000, '2018-10-31 04:02:22'),
(49, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都東京区', '東京町１−１−１', 0, 0, 0, 1, 0, 0, 2, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 60000, '2018-10-31 05:07:34'),
(50, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都東京区', '東京町１−１−１', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 0, 3, 30000, '2018-11-01 22:45:04'),
(51, 0, '山田太郎', 'dono_m@yahoo.co.jp', '09032110334', '1234567', '東京都東京区', '東京町１−１−１', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 10000, '2018-11-01 23:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_route_ikiru`
--
ALTER TABLE `gs_route_ikiru`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_route_ikiru`
--
ALTER TABLE `gs_route_ikiru`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
