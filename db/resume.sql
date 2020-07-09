-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-10 01:11:53
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobfn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `jobfn`, `period`, `description`, `sh`) VALUES
(1, '(接案)工業設計', '2019/9~2019/11', '與上市公司雷虎集團合作，參與電競PUBG(絕地求生)遙控模型車製作。期間參與車體外觀3D塑膠配件的機構設計與建模、資料蒐集分析、三視圖繪製、俄羅斯軍卡3D車殼造型正向建模，並密集與該專案窗口做可行性討論、模型修改、提供基本排模圖等設計諮詢。', 1),
(2, '工業設計師', '2016/12~2019/9', '視覺規劃、圖像化組裝說明書，並提供基礎CMF、噴漆、包裝設計。研調競爭者的定位，做出市場區隔並提供未來趨勢的電繪造型提案，或者根據客戶明確指出的風格趨向作提案設計。正向A級曲面建模、3D逆向工程建模。兼顧車殼及塑膠配件的尺寸搭配，建構車殼模具。並與廠商密切配合後續打樣、問題解決。兼顧製造生產與玩家對產品外觀、造形、色彩、結構、功能及安全性等方面要求條件下，從事大量生產產品之設計及開發。', 1),
(3, '專案管理', '2015/8~2016/11', '研究客戶開發方向。整合開發文件、電子規格等。執行新產品開發專案之規劃、執行、設計及發展進度掌控、成本控制及結案程序。協助各部門及廠處推動專案。協調新產品導入量產與上市。進行客戶溝通及訴願處理。', 1),
(4, '立體造型工業設計師', '2013/8~2015/8', '研調競爭對手的定位，做出市場區隔的電繪造型提案，或者根據客戶明確指出的風格趨向作提案設計。正向A級曲面建模、3D逆向工程建模。兼顧車殼及塑膠配件的尺寸搭配，建構車殼模具。並與廠商密切配合後續打樣、問題解決。兼顧製造生產與玩家對產品外觀、造形、色彩、結構、功能及安全性等方面要求條件下，從事大量生產產品之設計及開發。', 1),
(7, '視覺傳達設計師', '2012/6~2013/8', '從事專業遙控模型車的產品視覺包裝、各式車殼貼紙、內襯結構設計、圖像化組裝說明書等設計工作，以強化商品的視覺形象。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `intro`
--

CREATE TABLE `intro` (
  `id` int(10) UNSIGNED NOT NULL,
  `intro` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `intro`
--

INSERT INTO `intro` (`id`, `intro`, `sh`) VALUES
(1, '網頁設計是現在的趨勢，我學習專業網頁設計相關技術\r\n', 1),
(3, '並有5年工業設計師及1.5年專案管理能力，能與客戶直接溝通並提供網頁、工業、商業、平面設計整合服務，並且具有手繪能力。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `msg`
--

CREATE TABLE `msg` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eng` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `birthday` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `msg`
--

INSERT INTO `msg` (`id`, `name`, `eng`, `address`, `tel`, `email`, `sh`, `birthday`) VALUES
(1, '簡志瀚', 'Zidan Chien', '台北市士林區', '0960533', 'ttshpigbrain@gmail.com', 0, '1986-07-02'),
(3, 'linsu', '', '新竹市', '0905505', 'linsu@gmail.com', 1, '1988-8-2');

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `file`, `text`, `sh`) VALUES
(1, 'personal.jpg', '個人頭像', 1),
(2, 'personal_half.jpg', '個人半身照', 0),
(4, 'test_upload.jpg', '測試', 0),
(5, 'image-03.jpg', '老梅', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `sh` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `skill`, `type`, `sh`) VALUES
(1, 'HTML, CSS, Javascript, JQuery', 3, 1),
(2, 'RWD, Bootstrap,', 3, 1),
(3, 'PHP, MySQL,', 3, 1),
(4, 'Git - File Version Management', 3, 1),
(5, '繪製2D／3D模具設計圖、產品外型設計、曲面、實體3D軟體操作、繪圖工具與軟體操作、電腦基礎動畫設計、專案溝通╱整合管理', 1, 1),
(6, '使用者介面設計、產品包裝設計、設計印刷基本認知、各式封面設計、色彩應用繪製、素材辨識與處理、視覺設計相關知識、電腦排版設計、電腦繪圖軟體操作、產品介紹及解說銷售', 2, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_time` timestamp NULL DEFAULT current_timestamp(),
  `upd_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `email`, `reg_time`, `upd_time`) VALUES
(2, 'hanhan', '456456', 'hanhan@gmail.com', '2020-07-08 11:16:50', '0000-00-00 00:00:00'),
(17, 'guest', '456456', 'guest@gmail.com', '2020-07-09 12:52:55', '2020-07-09 12:52:55');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
