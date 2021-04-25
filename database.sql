-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:52 AM
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
  `creatorid` int(11) NOT NULL,
  `creator` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `ranking` float NOT NULL,
  `free` tinyint(1) NOT NULL,
  `cost` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`appid`, `appname`, `creatorid`, `creator`, `category`, `ranking`, `free`, `cost`, `downloads`, `link`) VALUES
('f1', 'Money Lover', 3, 'Finsify', 'Finance', 5, 1, 0, 177149, './resources/apps/moneylover.jpg'),
('g1', 'Genshin Impact', 9, 'Mihoyo Inc', 'Game', 5, 1, 0, 1408331, './resources/apps/genshinimpact.jpg'),
('g10', 'Fo4', 5, 'Garena Co.Ltd', 'Game', 5, 0, 15000, 114292482, './resources/apps/fo4.jpg'),
('g11', 'Critical Strike', 17, 'Vertigo Games', 'Game', 4, 0, 10000, 2314532, './resources/apps/cs.jpg'),
('g12', 'Free Fire', 5, 'Garena Co.Ltd', 'Game', 5, 1, 0, 2314252, './resources/apps/freefire.jpg'),
('g2', 'Pokemon Go', 12, 'Niantic, Inc', 'Game', 4, 1, 0, 14434228, './resources/apps/pokemongo.jpg'),
('g3', 'PUBG', 14, 'VNG', 'Game', 5, 1, 0, 36410201, './resources/apps/pubgmobile.jpg'),
('g4', 'Azur Lane', 19, 'Yostar Limited.\r\n', 'Game', 5, 1, 0, 1000000, './resources/apps/azurlane.jpg'),
('g5', 'Liên quan Mobile', 5, 'Garena Co.Ltd', 'Game', 4, 1, 0, 1000000, './resources/apps/lienquan.jpg'),
('g6', 'Neko Atsume: Kitty Collector', 7, 'Hit-Point Co.,Ltd', 'Game', 5, 1, 0, 50000, './resources/apps/nekoatsume.jpg'),
('g7', 'Tik Tac Toe', 1, 'Arcline', 'Game', 3, 0, 2000, 19208, './resources/apps/ttt.jpg'),
('g8', 'Shadow Fight', 10, 'Nekki', 'Game', 5, 0, 6000, 1233124, './resources/apps/sf.jpg'),
('g9', 'COD: Call Of Duty', 14, 'VNG', 'Game', 4, 0, 20000, 3527582, './resources/apps/cod.jpg'),
('m1', 'Spotify', 13, 'Spotify Ltd', 'Music', 5, 0, 22000, 22219764, '	./resources/apps/spotify.jpg'),
('m2', 'Guitar Tuna', 20, 'Your Musician Ltd', 'Music', 5, 1, 0, 1921019, './resources/apps/guitar.jpg\r\n'),
('mo1', 'Netflix', 11, 'Netflix, Inc', 'Movies', 5, 0, 16000, 11429488, './resources/apps/netflix.jpg'),
('mo2', 'FPT Play', 4, 'FPT Coop', 'Movies', 4, 1, 0, 158926, './resources/apps/fptplay.jpg'),
('s1', 'Twitter', 16, 'Twitter Ltd', 'Social', 5, 1, 0, 21505764, './resources/apps/twitter.jpg'),
('s2', 'Facebook', 2, 'Facebook', 'Social', 5, 1, 0, 109231519, './resources/apps/facebook.jpg'),
('s3', 'Messenger', 2, 'Facebook', 'Social', 5, 1, 0, 77498494, './resources/apps/mess.jpg\r\n'),
('s4', 'Instagram', 8, 'Instagram', 'Social', 5, 1, 0, 116016818, './resources/apps/ins.jpg\r\n'),
('s5', 'TikTok', 15, 'TikTok Pte.Ltd', 'Social', 5, 1, 0, 33824669, './resources/apps/tiktok.jpg\r\n'),
('s6', 'Zalo', 18, 'Zalo Group', 'Social', 5, 1, 0, 1631218, './resources/apps/zalo.jpg\r\n'),
('v1', 'Youtube', 6, 'Google LLC', 'Video', 4, 1, 0, 98659435, './resources/apps/youtube.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `name` varchar(64) NOT NULL,
  `id` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`name`, `id`, `tittle`) VALUES
('Arcline', 1, 'We are passionate game developers behind the games like Tic Tac Toe Glow, Spot It, Decrypto and many more!\r\n'),
('Facebook', 2, 'Best social media in the world.'),
('Finsify', 3, 'Bring personal financial management solutions and products to Vietnamese people. '),
('FPT Coop', 4, 'Work for your best experience for watching.'),
('Garena', 5, 'We will try our best to bloodsucking your wallet.'),
('Google LLC', 6, 'We help you search the world'),
('Hit-Point Co.,Ltd', 7, 'A game company operating in Nagoya and Kyoto.\r\nWe distribute apps such as \"Neko Atsume\", \"Narumonoka\" and \"Henri\". '),
('Instagram', 8, 'Saving the beautiful pictures with your life'),
('Mihoyo Inc', 9, 'Our game will take you to the fairy world'),
('Nekki', 10, 'Cool and epic action fighting games, multiplayer games with top 3D graphics featuring online and offline brawl and fun battles w'),
('Netflix, Inc', 11, 'Signing with us to seeing all movies in the world'),
('Niantic, Inc', 12, 'Joining imagination world with us'),
('Spotify Ltd', 13, 'Best music\'s app in the world'),
('VNG', 14, 'VNG GAMES - BY GAMERS, FOR GAMERS\r\n'),
('TikTok Pte.Ltd', 15, 'Saving your memory'),
('Twitter Ltd', 16, 'Flying with your chatting'),
('Vertigo Games', 17, 'Vertigo Games is the developer and publisher of free-to-play mobile shooter games.\r\n'),
('Zalo Group', 18, 'World in your hand\r\n'),
('Yostar Limited.\r\n', 19, 'YOSTAR LIMITED is dedicated in our creation and publication of anime-style games from PC to the mobile platform.\r\n'),
('Your Musician Ltd', 20, 'Yousician reimagined how to learn an instrument making it fun, fast and easy to play your favorite songs. Now on piano, guitar, ');

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
-- Table structure for table `giftcode`
--

CREATE TABLE `giftcode` (
  `serial` varchar(8) NOT NULL,
  `price` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giftcode`
--

INSERT INTO `giftcode` (`serial`, `price`) VALUES
('PX2ZSWYE', 20000),
('YV5YHUIN', 20000),
('JLJPJ1G6', 20000),
('U44JP5I7', 20000),
('Y08OKCM2', 20000),
('1MRL9ZJA', 20000),
('D51X07RW', 20000),
('ZS539HIO', 20000),
('YK5DRJ1K', 20000),
('N99NA2TX', 20000),
('ZR4PKGKK', 20000);

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
('g10'),
('g11'),
('g2'),
('g3'),
('g5'),
('m1'),
('mo1'),
('s1'),
('s2'),
('s3'),
('s4'),
('s5'),
('v1');

-- --------------------------------------------------------

--
-- Table structure for table `mostdownloadspaid`
--

CREATE TABLE `mostdownloadspaid` (
  `appid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostdownloadspaid`
--

INSERT INTO `mostdownloadspaid` (`appid`) VALUES
('g1'),
('g10'),
('g11'),
('g7'),
('g8'),
('g9'),
('m1'),
('m2'),
('mo1');

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
  ADD PRIMARY KEY (`appid`,`creatorid`) USING BTREE;

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `mostdownloadsfree`
--
ALTER TABLE `mostdownloadsfree`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `mostdownloadspaid`
--
ALTER TABLE `mostdownloadspaid`
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
