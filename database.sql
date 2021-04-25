-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 11:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `appid` varchar(16) NOT NULL,
  `appname` varchar(64) NOT NULL,
  `creator` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `ranking` int(11) NOT NULL,
  `free` tinyint(1) NOT NULL,
  `cost` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`appid`, `appname`, `creator`, `category`, `ranking`, `free`, `cost`, `downloads`, `link`) VALUES
('f1', 'Money Lover', 'Finsify', 'Finance', 5, 1, 0, 177149, './resources/apps/moneylover.jpg'),
('g1', 'Genshin Impact', 'Mihoyo Inc', 'Game', 5, 1, 0, 1000000, './resources/apps/genshinimpact.jpg'),
('g2', 'Pokemon Go', 'Niantic', 'Game', 4, 1, 0, 14434228, './resources/apps/pokemongo.jpg'),
('g3', 'PUBG', 'Tencent Game', 'Game', 5, 1, 0, 36410201, './resources/apps/pubgmobile.jpg'),
('g4', 'Azur Lane', 'Yostar', 'Game', 5, 1, 0, 1000000, './resources/apps/azurlane.jpg'),
('g5', 'Liên quan Mobile', 'Garena Mobile Private', 'Game', 4, 1, 0, 1000000, './resources/apps/lienquan.jpg'),
('g6', 'Neko Atsume: Kitty Collector', 'Hit-Point Co.,Ltd', 'Game', 5, 1, 0, 50000, './resources/apps/nekoatsume.jpg'),
('m1', 'Spotify', 'Spotify Ltd', 'Music', 5, 1, 0, 22219764, '	./resources/apps/spotify.jpg'),
('m2', 'Guitar Tuna', 'Your Musician Ltd', 'Music', 5, 1, 0, 1921019, './resources/apps/guitar.jpg\r\n'),
('mo1', 'Netflix', 'Netflix, Inc', 'Movies', 5, 1, 0, 11429488, './resources/apps/netflix.jpg'),
('mo2', 'FPT Play', 'FPT Coop', 'Movies', 4, 1, 0, 158926, './resources/apps/fptplay.jpg'),
('s1', 'Twitter', 'Twitter Ltd', 'Social', 5, 1, 0, 21505764, './resources/apps/twitter.jpg'),
('s2', 'Facebook', 'Facebook', 'Social', 6, 1, 0, 109231519, './resources/apps/facebook.jpg'),
('s3', 'Messenger', 'Facebook', 'Social', 5, 1, 0, 77498494, './resources/apps/mess.jpg\r\n'),
('s4', 'Instagram', 'Instagram', 'Social', 5, 1, 0, 116016818, './resources/apps/ins.jpg\r\n'),
('s5', 'TikTok', 'TikTok Pte.Ltd', 'Social', 5, 1, 0, 33824669, './resources/apps/tiktok.jpg\r\n'),
('s6', 'Zalo', 'Zalo Group', 'Social', 5, 1, 0, 1631218, './resources/apps/zalo.jpg\r\n'),
('v1', 'Youtube', 'Google LLC', 'Video', 4, 1, 0, 98659435, './resources/apps/youtube.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emailverification`
--

CREATE TABLE `emailverification` (
  `email` varchar(64) NOT NULL,
  `code` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailverification`
--

INSERT INTO `emailverification` (`email`, `code`) VALUES
('phuphuongtin@gmail.com', '6dba1dcd42c7e334ff25ec50746702c1');

-- --------------------------------------------------------

--
-- Table structure for table `mostdownloadsfree`
--

CREATE TABLE `mostdownloadsfree` (
  `appid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostdownloadsfree`
--

INSERT INTO `mostdownloadsfree` (`appid`) VALUES
('g5'),
('mo1'),
('s2'),
('s3'),
('s5'),
('v1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `userid` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `userid`, `level`) VALUES
('grafiticraft', 'qwerty123', 'grafiticraft@gmail.com', 1, 1),
('qwerty', '123', 'astoroicom@gmail.com', 2, 1),
('nath', 'nath123', 'nath@gmail.com', 3, 1),
('astoroicom', 'iop', 'phuphuongtin@gmail.com', 4, 1),
('cunt', 'cunt123', 'cunt@gmai.com', 5, 1),
('awdawdaw', 'qwerty123', 'dawdaw@gmail.com', 6, 1),
('hahaha', '12345', 'hahaha@gmail.coom', 7, 1),
('ba', 'hai', 'ffvvfvfvfvf@fjvfvfvfhvf', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(64) NOT NULL,
  `birthDate` date NOT NULL,
  `pictureLink` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`userid`, `fullName`, `birthDate`, `pictureLink`) VALUES
(1, 'phu phuong tin', '2021-04-13', 'resources/account/grafiticraft.jpg'),
(3, 'Nath Bhagawan', '2021-03-10', 'resources/account/nath.jpg'),
(4, 'adwd', '2021-03-31', 'resources/account/astoroicom.jpg'),
(5, 'bitch ass', '2021-04-14', 'resources/account/cunt.jpg'),
(6, 'Phù Phương Tuấn', '2021-04-15', 'resources/account/awdawdaw.jpg'),
(7, 'hahaha', '2021-04-09', 'resources/account/hahaha.jpg'),
(8, 'blabla', '2021-04-23', 'resources/account/ba.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `mostdownloadsfree`
--
ALTER TABLE `mostdownloadsfree`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
