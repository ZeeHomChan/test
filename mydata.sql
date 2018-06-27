-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?06 �?05 �?16:16
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydata`
--

-- --------------------------------------------------------

--
-- 表的结构 `mobileclassify`
--

CREATE TABLE IF NOT EXISTS `mobileclassify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobileClassify` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `mobileclassify`
--

INSERT INTO `mobileclassify` (`id`, `mobileClassify`) VALUES
(1, '苹果'),
(2, '三星'),
(3, '华为');

-- --------------------------------------------------------

--
-- 表的结构 `mobileform`
--

CREATE TABLE IF NOT EXISTS `mobileform` (
  `mobile_version` varchar(10) NOT NULL,
  `mobile_name` varchar(50) NOT NULL,
  `mobile_made` varchar(100) NOT NULL,
  `mobile_price` decimal(10,0) NOT NULL,
  `mobile_mess` text NOT NULL,
  `mobile_pic` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`mobile_version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mobileform`
--

INSERT INTO `mobileform` (`mobile_version`, `mobile_name`, `mobile_made`, `mobile_price`, `mobile_mess`, `mobile_pic`, `id`) VALUES
('C555', '苹果9999手机', '中兴公司', '3567', '热点：指纹识别，Apple Pay', 'aa.jpg', 1),
('DD111', '2016苹果新款', '苹果公司', '9987', '热点：指纹识别，Apple Pay', 'bb.jpg', 1),
('DD897', '苹果98手机', '苹果公司', '1999', '热点：指纹识别，Apple Pay', 'apple.jpg', 1),
('B8978', '三星A98手机', '三星公司', '8976', '热点：指纹识别，Apple Pay', 'cc.jpg', 2),
('A666', '华为A666手机', '华为公司', '2999', '热点：指纹识别，Apple Pay', 'uu.jpg', 3);

-- --------------------------------------------------------

--
-- 表的结构 `orderform`
--

CREATE TABLE IF NOT EXISTS `orderform` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `logname` varchar(50) NOT NULL,
  `mess` text NOT NULL,
  `sum` decimal(10,0) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `orderform`
--

INSERT INTO `orderform` (`o_id`, `logname`, `mess`, `sum`) VALUES
(2, 'yby', 'DD111	2016苹果新款	9987	1\nB8978	三星A98手机	8976	2\n', '27939');

-- --------------------------------------------------------

--
-- 表的结构 `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `mobile_version` varchar(50) NOT NULL,
  `mobile_name` varchar(50) NOT NULL,
  `mobile_price` decimal(10,0) NOT NULL,
  `num` int(20) NOT NULL,
  `logname` varchar(50) NOT NULL,
  PRIMARY KEY (`mobile_version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `logname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` char(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `realname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`logname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`logname`, `password`, `phone`, `address`, `realname`) VALUES
('xm', 'xm123456', '13430220196', '华夏', '徐淼'),
('yby', 'yby123456', '13430220196', '纬创', '姚冰莹'),
('xjy', '12345678', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
