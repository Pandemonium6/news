-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 01 月 02 日 08:26
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `class`
--
CREATE DATABASE IF NOT EXISTS `class` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `class`;

-- --------------------------------------------------------

--
-- 表的结构 `id5`
--

CREATE TABLE IF NOT EXISTS `id5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `id5`
--

INSERT INTO `id5` (`id`, `name`, `comment`) VALUES
(12, 'wlf1803', '111'),
(13, 'wlf1803', '-comment-'),
(20, '123', '-comment-');

-- --------------------------------------------------------

--
-- 表的结构 `id6`
--

CREATE TABLE IF NOT EXISTS `id6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `id6`
--

INSERT INTO `id6` (`id`, `name`, `comment`) VALUES
(1, '123', '123'),
(10, '123456', '-comment-'),
(11, '123456', '-comment-'),
(17, 'wlf1803', '-comment-');

-- --------------------------------------------------------

--
-- 表的结构 `id7`
--

CREATE TABLE IF NOT EXISTS `id7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `id7`
--

INSERT INTO `id7` (`id`, `name`, `comment`) VALUES
(1, '123', '-comment-\r\n'),
(2, '123', '-comment-');

-- --------------------------------------------------------

--
-- 表的结构 `id8`
--

CREATE TABLE IF NOT EXISTS `id8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(450) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `id8`
--

INSERT INTO `id8` (`id`, `name`, `comment`) VALUES
(1, '123', '-comment-'),
(2, 'wlf1803', '-comment-');

-- --------------------------------------------------------

--
-- 表的结构 `id9`
--

CREATE TABLE IF NOT EXISTS `id9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(450) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `id10`
--

CREATE TABLE IF NOT EXISTS `id10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(450) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `id10`
--

INSERT INTO `id10` (`id`, `name`, `comment`) VALUES
(1, '123456', 'This song is very emotional,'),
(2, 'wlf', 'smooth rhythm, fresh and crisp text '),
(3, 'lhy', 'This song is very emotional,'),
(4, 'ljl', 'expressions is this song always have'),
(5, 'yxc', '-expressions is thi'),
(6, 'wlf1803', 'smooth rhythm, fresh and crisp text'),
(7, 'wlf1803', '-comment-'),
(10, '', '-comment-'),
(11, '', '-comment-'),
(12, '', '-comment-');

-- --------------------------------------------------------

--
-- 表的结构 `id26`
--

CREATE TABLE IF NOT EXISTS `id26` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(450) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `email`, `tel`) VALUES
(8, 'stuudent2', '123', '136@163.com', '15158282636'),
(10, '525563', '123', '136@163.com', '15906757853'),
(12, '123', '123', '123@163.com', '19857186305'),
(26, 'lollllll', '1', '3148068255@qq.com', '13906757853');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`, `email`, `tel`) VALUES
(1, 'admin1', '123', '1234@163.com', '15906757853'),
(2, '12306852', '11', '1234@163.com', '13906757853'),
(3, 'lhy1803', '123', '163@163.com', '12345678900'),
(4, 'wlf1803', '123', '159@163.com', '15158686363'),
(5, '12306852525', '1', '136@163.com', '15906757853'),
(6, '12dewsf', '1', '3148068255@qq.com', 'null');

-- --------------------------------------------------------

--
-- 表的结构 `title`
--

CREATE TABLE IF NOT EXISTS `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `contain` mediumtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `title`
--

INSERT INTO `title` (`id`, `title`, `name`, `contain`) VALUES
(5, 'The Amazing Voice', '12306852 ', '   I. She is younger than me. My sister has a special talent. She sings very well. Every time when she  to sing, people will be quiet and listen to her singing. Sometimes I feel jealous, but I have to admit that her voice is so nice. I am so proud of being her sister, because we share the same famil'),
(6, 'The Lake', 'admin1 ', '   There is a small lake in my hometown, which is one of my favorite place. I always go to the lake with my friends. We swim and play a lot there. Sometimes we will go boating and enjoy the quiet moment. Now the lake is not that clean because of the pollution. I realize the importance of protecting the environment.'),
(7, 'The Way to Keep Fit', 'admin1 ', '      For the big festival like Chinese New Year, the families will get together and have a big meal. The food like chicken and pork is necessary. It is easy to get fat as eating them for many days. So when people get to work, the first thing they do is to lose weight and keep fit. They often eat more vegetables and less meat, so as to control the fat. Then doing regular exercise is very important  For the big festival like Chinese New Year, the families will get together and have a big meal. The food like chicken and pork is necessary. It is easy to get fat as eating them for many days. So when people get to work, the first thing they do is to lose weight and keep fit. They often eat more vegetables and less meat, so as to control the fat. Then doing regular exercise is very important  For the big festival like Chinese New Year, the families will get together and have a big meal. The food like chicken and pork is necessary. It is easy to get fat as eating them for many days. So when people get to work, the first thing they do is to lose weight and keep fit. They often eat more vegetables and less meat, so as to control the fat. Then doing regular exercise is very important  For the big festival like Chinese New Year, the families will get together and have a big meal. The food like chicken and pork is necessary. It is easy to get fat as eating them for many days. So when people get to work, the first thing they do is to lose weight and keep fit. They often eat more vegetables and less meat, so as to control the fat. Then doing regular exercise is very important  For the big festival like Chinese New Year, the families will get together and have a big meal. The food like chicken and pork is necessary. It is easy to get fat as eating them for many days. So when people get to work, the first thing they do is to lose weight and keep fit. They often eat more vegetables and less meat, so as to control the fat. Then doing regular exercise is very important'),
(8, 'The Fortune that Rich People Leave', 'admin1 ', 'There is a small lake in my hometown, which is one of my favorite place. I always go to the lake with my friends. We swim and play a lot there. Sometimes we will go boating and enjoy the quiet moment. Now the lake is not that clean because of the pollution. I realize the importance of protecting the environment.'),
(9, 'Online Learning', 'wlf1803 ', '  Nevertheless, learning online has some disadvantages. First of all, for teenagers, it is inappropriate for them to contract the Internet too early. They were likely to be affected by complex information. Secondly, learning online may distract our attentions as there are games or other temptations along us when we are studying.'),
(10, 'Qixi Festival', 'wlf1803 ', '  he origin of Qixi Festival is about a romantic story. It was said that in the ancient time, a beautiful young l in love with an ordinary man. But there was limitation between immortal ae separated by the lake'),
(26, '1111111111', 'wlf1803', 'kkkkkkkkkk');

-- --------------------------------------------------------

--
-- 表的结构 `tobe`
--

CREATE TABLE IF NOT EXISTS `tobe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tobe`
--

INSERT INTO `tobe` (`id`, `name`, `password`, `email`, `tel`) VALUES
(11, '12dewsf', '1', '3148068255@qq.com', 'null'),
(12, '12dewsf', '1', '3148068255@qq.com', 'null'),
(15, '1234fffff', '1234', '1234@163.com', '15906757853');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
