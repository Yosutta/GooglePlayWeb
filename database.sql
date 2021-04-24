-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:09 PM
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
('g1', 'Genshin Impact', 'Mihoyo Inc', 'Game', 5, 1, 0, 1000000, './resources/Home/genshinimpact.jpg');
('g2', 'Pokemon Go', 'Niantic', 'Game', 4, 1, 0, 14434228, 'C:\\xampp\\htdocs\\GooglePlayWeb\\source\\resources\\Home'),
('g3', 'Youtube', 'Google LLC', 'Video', 4, 1, 0, 98659435, './resources/Home/Youtube.jpg'),
('g4', 'Spotify', 'Spotify Ltd', 'Music', 5, 1, 0, 22219764, '	./resources/Home/Spotify.jpg'),
('g5', 'Twitter', 'Twitter Ltd', 'Social Network', '5', '1', '0', '21505764', './resources/Home/twitter.jpg');
('g6', 'Netflix', 'Netflix, Inc', 'Movies', 5, 1, 0, 11429488, './resources/Home/Netflix.jpg'),
('g7', 'FPT Play', 'FPT Coop', 'Movies', 4, 1, 0, 158926, './resources/Home/fpt.jpg\r\n'),
('g8', 'PUBG', 'Tencent Game', 'Game', 5, 1, 0, 36410201, './resources/Home/Pubg.jpg\r\n'),
('g9', 'Money Lover', 'Finsify', 'Finance', 5, 1, 0, 177149, './resources/Home/MoneyLover.jpg\r\n'),
('g10', 'Facebook', 'Facebook', 'Social Network', 6, 1, 0, 109231519, './resources/Home/Facebook.jpg\r\n'),
('g11', 'Messenger', 'Facebook', 'Social Network', 5, 1, 0, 77498494, './resources/Home/mess.jpg\r\n'),
('g12', 'Instagram', 'Instagram', 'Social Network', 5, 1, 0, 116016818, './resources/Home/Ins.jpg\r\n'),
('g13', 'TikTok', 'TikTok Pte.Ltd', 'Social Network', 5, 1, 0, 33824669, './resources/Home/TikTok.jpg\r\n'),
('g14', 'Guitar Tuna', 'Your Musician Ltd', 'Music', 5, 1, 0, 1921019, './resources/Home/Guitar.jpg\r\n'),
('g15', 'Zalo', 'Zalo Group', 'Social Network', 5, 1, 0, 1631218, './resources/Home/zalo.jpg\r\n'),

-- --------------------------------------------------------

--
-- Table structure for table `emailverification`
--

CREATE TABLE `emailverification` (
  `email` varchar(64) NOT NULL,
  `code` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('yuuta', 'Arewedone', 'grafiticraft@gmail.com', 1, 3),
('tin', 'qwerty', 'phuphuongtin@gmail.com', 2, 2),
('jeff', '420', 'jeff@gmail.com', 3, 1),
('grafiticraft', 'Bbqyuming123', 'yuuta@gmail.com', 5, 1),
('phuong tin', 'yuuta123', 'phuongtin@yahoo.com', 6, 1);

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
(1, 'Togashi Yuuta', '0000-00-00', ''),
(2, 'Phu Phuong Tin', '0000-00-00', ''),
(3, 'Jeff Bezos', '0000-00-00', ''),
(6, 'Grafiti Craft', '2100-10-31', ''),
(7, 'Phù Phương Tín', '2000-10-13', ''),
(8, 'uzumaki ', '2000-08-08', '');

--
-- Indexes for dumped tables
--

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
