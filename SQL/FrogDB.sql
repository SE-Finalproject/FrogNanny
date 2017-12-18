-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 12 月 18 日 16:24
-- 伺服器版本: 10.1.25-MariaDB
-- PHP 版本： 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `FrogDB`
--

-- --------------------------------------------------------

--
-- 資料表結構 `frogRecord`
--

CREATE TABLE `frogRecord` (
  `id` int(11) NOT NULL,
  `family` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genus` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `species` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `frogRecord`
--

INSERT INTO `frogRecord` (`id`, `family`, `genus`, `species`, `info`, `place`) VALUES
(1, '樹蛙科', '樹蛙數', '莫氏樹蛙', '小小的', '濕濕的'),
(2, '蟾蜍科', '蟾蜍屬', '海蟾蜍', '大大的', '海海的'),
(3, '赤蛙科', '側褶蛙屬', '金線蛙', '金金的', '水水的');

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
(1, 'zz', '1234', 'zong', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `frogRecord`
--
ALTER TABLE `frogRecord`
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
-- 使用資料表 AUTO_INCREMENT `frogRecord`
--
ALTER TABLE `frogRecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
