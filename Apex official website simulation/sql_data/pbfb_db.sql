-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2025-06-16 06:17:03
-- 服务器版本： 9.1.0
-- PHP 版本： 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `pbfb_db`
--
CREATE DATABASE IF NOT EXISTS `pbfb_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pbfb_db`;

-- --------------------------------------------------------

--
-- 表的结构 `problems`
--

DROP TABLE IF EXISTS `problems`;
CREATE TABLE IF NOT EXISTS `problems` (
  `problem_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `problem_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`problem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `problems`
--

INSERT INTO `problems` (`problem_id`, `user_id`, `problem_type`, `content`, `create_time`, `status`) VALUES
(7, 4, '崩溃类Bug', '赛季更新后，使用Sparrow的终极技时会导致游戏崩溃，拾取死亡补给箱也可致崩溃。主机玩家常遇到赛后崩溃', '2025-06-16 00:46:01', 0),
(10, 4, '功能性Bug', '111', '2025-06-16 03:31:04', 0),
(11, 4, '崩溃类Bug', '11122', '2025-06-16 03:34:57', 0),
(12, 4, '功能性Bug', '“Party Not Ready”卡死：即使单人游戏中点击准备也一直显示“Party Not Ready”，角色头顶不显示用户名，导致无法进入比赛', '2025-06-16 14:08:53', 0),
(13, 4, '网络类Bug', '匹配随机掉线：多人报告匹配进行中突然“断开连接”，无法重新加入，而被扣除惩罚时间（尤其在排位或竞技场模式）。也有玩家发现区服质量波动明显：击杀回放（Kill Replay）功能有时会卡死或崩溃', '2025-06-16 14:09:58', 0),
(14, 4, '表现类Bug', '更新后 菜单弹窗过大、光标错位，鼠标悬停物品时提示框遮挡其他物品，拖动配件时选中项偏离鼠标位置，使得管理装备十分困难', '2025-06-16 14:10:42', 0),
(15, 4, '表现类Bug', '复古礼包进度条不更新就是已知的视觉Bug，虽然不影响玩法，但被记录在官方问题追踪板中.商店界面也曾出现加载异常：部分玩家在达成某些战斗通行证等级后，购买物品时商店一直“加载中”，无法看到材料或装备信息', '2025-06-16 14:12:04', 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, '', ''),
(4, 'admin', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
