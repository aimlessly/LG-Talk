-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 03 ธ.ค. 2013  11:01น.
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12
-- รุ่นของ PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `LGChat`
--
CREATE DATABASE IF NOT EXISTS `LGChat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `LGChat`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('01b3835d34339813003f1c2b2ef31603', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36', 1386059574, ''),
('f42b01b47e0ccbdfac3c39c650800e6a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36', 1386064733, 'a:5:{s:4:"name";s:3:"aim";s:5:"email";s:3:"aaa";s:6:"avatar";s:15:"gradmale_avatar";s:7:"tagline";s:16:"<i>.. hey ..</i>";s:10:"isLoggedIn";b:1;}');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contactname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contactstatuscode` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'w',
  PRIMARY KEY (`username`,`contactname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `contact`
--

INSERT INTO `contact` (`username`, `contactname`, `contactstatuscode`) VALUES
('a', '', 'w'),
('aa', '', 'w'),
('aimmm', '', 'w'),
('สองตาราง', '', 'w');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `senderName` varchar(45) NOT NULL DEFAULT '',
  `receiverName` varchar(45) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `body` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`senderName`,`receiverName`,`createdDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `post`
--

INSERT INTO `post` (`senderName`, `receiverName`, `createdDate`, `body`) VALUES
('1', '', '2013-11-26 08:39:37', 'hi'),
('1', '', '2013-11-26 16:02:27', 'ไทย'),
('1', '', '2013-11-29 06:16:56', 'www'),
('1', '', '2013-11-29 06:17:55', 'สสสส'),
('2', '', '2013-11-26 08:54:56', '1234'),
('2', '', '2013-11-27 08:42:53', 'hey'),
('aim', '', '2013-12-02 07:39:57', 'hiii'),
('aim', '', '2013-12-02 07:40:12', 'hello'),
('aim', '', '2013-12-02 16:14:25', 'blah444'),
('aim', '', '2013-12-03 09:01:28', 'พพพ'),
('ยายแม้น', '', '2013-12-02 07:49:57', 'qqq');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `avatar`, `tagline`, `admin`) VALUES
('aim', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'aaa', 'gradmale_avatar', '<i>.. hey ..</i>', '0'),
('pim', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'pimjangka@hotmail.com', 'sexy_avatar', 'yo', NULL),
('tor', '011c945f30ce2cbafc452f39840f025693339c42', 'tor@aa.com', 'fireman_avatar', 'Click here to edit tagline.', NULL),
('ยายแม้น', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'admin@example.com', 'a1', '<em>yoohooo</em>', '1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `imei` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `user1`
--

INSERT INTO `user1` (`username`, `password`, `email`, `telephone`, `imei`) VALUES
('aimmm', '12345', 'aa@ol.th', '', ''),
('amika', '12345', 'aiminggg@gmail.com', '0801234567', '123456789102345'),
('pim', '1234', 'pimjangka@hotmail.com', '0859351614', '356409044465725'),
('สองตาราง', '3456', 'waser@GAR.hg', '', ''),
('เอม', 'เอม35', 'aim@gmail.com', '0801235678', '123456789012345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
