-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-12-24 16:30:35
-- 伺服器版本: 10.1.26-MariaDB
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `frog`
--

-- --------------------------------------------------------

--
-- 資料表結構 `frogrecord`
--

CREATE TABLE `frogrecord` (
  `id` int(11) NOT NULL,
  `family` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genus` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `species` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `frogrecord`
--

INSERT INTO `frogrecord` (`id`, `family`, `genus`, `species`, `info`, `place`) VALUES
(1, '叉舌蛙科', '虎紋蛙屬', '虎皮蛙', '', ''),
(2, '叉舌蛙科', '陸蛙屬', '海蛙', '', ''),
(3, '叉舌蛙科', '陸蛙屬', '澤蛙', '', ''),
(4, '彩蛙科', '曼蛙屬', '馬達加斯加彩蛙', '', ''),
(5, '彩蛙科', '曼蛙屬', '金蛙', '', ''),
(6, '彩蛙科', '曼蛙屬', '綠彩蛙', '', ''),
(7, '樹蛙科', '原指樹蛙屬', '面天樹蛙', '', ''),
(8, '樹蛙科', '原指樹蛙屬', '艾氏樹蛙', '', ''),
(9, '樹蛙科', '樹蛙屬', '橙腹樹蛙', '', ''),
(10, '樹蛙科', '樹蛙屬', '台北樹蛙', '', ''),
(11, '樹蛙科', '樹蛙屬', '翡翠樹蛙', '', ''),
(12, '樹蛙科', '樹蛙屬', '諸羅樹蛙', '', ''),
(13, '樹蛙科', '樹蛙屬', '莫氏樹蛙', '', ''),
(14, '樹蛙科', '泛樹蛙屬', '布氏樹蛙', '', ''),
(15, '樹蛙科', '溪樹蛙屬', '褐樹蛙', '', ''),
(16, '樹蛙科', '溪樹蛙屬', '日本樹蛙', '', ''),
(17, '樹蟾科', '雨蛙屬', '中國樹蟾', '', ''),
(19, '狹口蛙科', '姬蛙屬', '黑蒙西氏小雨蛙', '', ''),
(20, '狹口蛙科', '姬蛙屬', '小雨蛙', '', ''),
(21, '狹口蛙科', '姬蛙屬', '巴氏小雨蛙', '', ''),
(22, '狹口蛙科', '小姬蛙屬', '史丹吉氏小雨蛙', '', ''),
(23, '盤舌蟾科', '鈴蟾屬', '朝鮮鈴蛙', '', ''),
(24, '細趾蟾科', '角花蟾屬', '蘇利南角蛙', '', ''),
(25, '細趾蟾科', '角花蟾屬', '南美角蛙', '', ''),
(26, '蟾蜍科', '蟾蜍屬', '盤古蟾蜍', '', ''),
(27, '蟾蜍科', '蟾蜍屬', '海蟾蜍', '', ''),
(28, '赤蛙科', '側褶蛙屬', '金線蛙', '', ''),
(29, '赤蛙科', '大頭蛙屬', '福建大頭蛙', '', ''),
(30, '赤蛙科', '拇棘蛙屬', '腹斑蛙', '', ''),
(31, '赤蛙科', '拇棘蛙屬', '豎琴蛙', '', ''),
(32, '赤蛙科', '水蛙屬', '台北赤蛙', '', ''),
(33, '赤蛙科', '水蛙屬', '拉都希氏蛙', '', ''),
(34, '赤蛙科', '水蛙屬', '貢德氏赤蛙', '', ''),
(39, '赤蛙科', '臭蛙屬', '斯文豪氏蛙', '', ''),
(40, '赤蛙科', '蛙屬', '長腳赤蛙', '', ''),
(41, '赤蛙科', '蛙屬', '梭德氏赤蛙', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `uid`, `password`, `name`, `role`) VALUES
(1, 'zz', '1234', 'zong', 1),
(2, 'marji', 'marji', 'marjiready', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `frogrecord`
--
ALTER TABLE `frogrecord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `frogrecord`
--
ALTER TABLE `frogrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
