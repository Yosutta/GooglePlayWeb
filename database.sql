-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 06:04 PM
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
('f2', 'Momo', 23, 'M_Service JSC', 'Finance', 4, 0, 1000, 239717, './resources/apps/momo.jpg'),
('f3', 'Adobe Photoshop', 24, 'Adobe', 'Finance', 5, 0, 5000, 1677356, './resources/apps/adobephotoshop.jpg\r\n'),
('f4', 'Adobe Reader PDF', 24, 'Adobe', 'Finance', 5, 0, 10000, 4520986, './resources/apps/pdf.jpg\r\n'),
('f5', 'Adobe Lightroom', 24, 'Adobe', 'Finance', 5, 0, 3000, 985333, './resources/apps/lightroom.jpg\r\n'),
('g1', 'Genshin Impact', 9, 'Mihoyo Inc', 'Game', 5, 1, 0, 1411930, './resources/apps/genshinimpact.jpg'),
('g10', 'FIFA Online 4 M', 5, 'Garena Co.Ltd', 'Game', 5, 0, 15000, 41678, './resources/apps/fo4.jpg'),
('g11', 'Critical Strike', 17, 'Vertigo Games', 'Game', 4, 0, 10000, 393967, './resources/apps/cs.jpg'),
('g12', 'Free Fire', 5, 'Garena Co.Ltd', 'Game', 5, 1, 0, 84137447, './resources/apps/freefire.jpg'),
('g13', 'Infinite Flight ', 21, 'Infinite Flight LLC', 'Game', 5, 0, 20000, 71535, './resources/apps/flight.png\r\n'),
('g14', 'Gunny Mobi', 14, 'VNG', 'Game', 4, 0, 5000, 201817, './resources/apps/gunny.png'),
('g15', 'Flappy Bird', 25, 'TGame Studio', 'Game', 3, 0, 50000, 1446, './resources/apps/flappy.jpg\r\n'),
('g16', 'Kahoot!', 22, 'Kahoot', 'Game', 5, 0, 2000, 303960, './resources/apps/kahoot.jpg\r\n'),
('g2', 'Pokemon Go', 12, 'Niantic, Inc', 'Game', 4, 1, 0, 14453953, './resources/apps/pokemongo.jpg'),
('g21', 'Bandori', 26, 'grafiticraft', 'Game', 5, 0, 10000, 0, 'resources/pendingapps/bandori.png'),
('g3', 'PUBG', 14, 'VNG', 'Game', 5, 1, 0, 884560, './resources/apps/pubgmobile.jpg'),
('g4', 'Azur Lane', 19, 'Yostar Limited.\r\n', 'Game', 5, 1, 0, 114856, './resources/apps/azurlane.jpg'),
('g5', 'Liên quan Mobile', 5, 'Garena Co.Ltd', 'Game', 4, 1, 0, 4475522, './resources/apps/lienquan.jpg'),
('g6', 'Neko Atsume: Kitty Collector', 7, 'Hit-Point Co.,Ltd', 'Game', 5, 1, 0, 339918, './resources/apps/nekoatsume.jpg'),
('g7', 'Tik Tac Toe', 1, 'Arcline', 'Game', 3, 0, 2000, 673896, './resources/apps/ttt.jpg'),
('g8', 'Shadow Fight 2', 10, 'Nekki', 'Game', 5, 0, 6000, 14150446, './resources/apps/sf.jpg'),
('g9', 'COD: Call Of Duty', 14, 'VNG', 'Game', 4, 0, 20000, 224994, './resources/apps/cod.jpg'),
('m1', 'Spotify', 13, 'Spotify Ltd', 'Music', 5, 0, 22000, 22271176, './resources/apps/spotify.jpg'),
('m2', 'Guitar Tuna', 20, 'Your Musician Ltd', 'Music', 5, 1, 0, 1923265, './resources/apps/guitar.jpg\r\n'),
('mo1', 'Netflix', 11, 'Netflix, Inc', 'Movies', 5, 0, 16000, 11455775, './resources/apps/netflix.jpg'),
('mo2', 'FPT Play', 4, 'FPT Coop', 'Movies', 4, 1, 0, 159257, './resources/apps/fptplay.jpg'),
('s1', 'Twitter', 16, 'Twitter Ltd', 'Social', 5, 1, 0, 17521324, './resources/apps/twitter.jpg'),
('s2', 'Facebook', 2, 'Facebook', 'Social', 5, 1, 0, 109385285, './resources/apps/facebook.jpg'),
('s3', 'Messenger', 2, 'Facebook', 'Social', 5, 1, 0, 77573840, './resources/apps/mess.jpg\r\n'),
('s4', 'Instagram', 8, 'Instagram', 'Social', 5, 1, 0, 116316888, './resources/apps/ins.jpg\r\n'),
('s5', 'TikTok', 15, 'TikTok Pte.Ltd', 'Social', 5, 1, 0, 9649418, './resources/apps/tiktok.jpg\r\n'),
('s6', 'Zalo', 18, 'Zalo Group', 'Social', 5, 1, 0, 1634141, './resources/apps/zalo.jpg\r\n'),
('s7', 'Phuc Long', 26, 'grafiticraft', 'Social', 4, 0, 0, 0, 'resources/pendingapps/phuclong.jpg'),
('v1', 'Youtube', 6, 'Google LLC', 'Video', 4, 1, 0, 98986136, './resources/apps/youtube.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catename` varchar(32) NOT NULL,
  `cateid` varchar(4) NOT NULL,
  `apps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catename`, `cateid`, `apps`) VALUES
('Education', 'e', 1),
('Finance', 'f', 6),
('Game', 'g', 21),
('Music', 'm', 3),
('Movies', 'mo', 2),
('Social', 's', 9),
('Video', 'v', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `appid` varchar(16) COLLATE utf8_vietnamese_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` varchar(128) COLLATE utf8_vietnamese_ci NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Aland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bonaire, Sint Eustatius and Saba'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo, Democratic Republic of the Congo'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Cote D\'Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curacao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and Mcdonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran, Islamic Republic of'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea, Democratic People\'s Republic of'),
(119, 'Korea, Republic of'),
(120, 'Kosovo'),
(121, 'Kuwait'),
(122, 'Kyrgyzstan'),
(123, 'Lao People\'s Democratic Republic'),
(124, 'Latvia'),
(125, 'Lebanon'),
(126, 'Lesotho'),
(127, 'Liberia'),
(128, 'Libyan Arab Jamahiriya'),
(129, 'Liechtenstein'),
(130, 'Lithuania'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Macedonia, the Former Yugoslav Republic of'),
(134, 'Madagascar'),
(135, 'Malawi'),
(136, 'Malaysia'),
(137, 'Maldives'),
(138, 'Mali'),
(139, 'Malta'),
(140, 'Marshall Islands'),
(141, 'Martinique'),
(142, 'Mauritania'),
(143, 'Mauritius'),
(144, 'Mayotte'),
(145, 'Mexico'),
(146, 'Micronesia, Federated States of'),
(147, 'Moldova, Republic of'),
(148, 'Monaco'),
(149, 'Mongolia'),
(150, 'Montenegro'),
(151, 'Montserrat'),
(152, 'Morocco'),
(153, 'Mozambique'),
(154, 'Myanmar'),
(155, 'Namibia'),
(156, 'Nauru'),
(157, 'Nepal'),
(158, 'Netherlands'),
(159, 'Netherlands Antilles'),
(160, 'New Caledonia'),
(161, 'New Zealand'),
(162, 'Nicaragua'),
(163, 'Niger'),
(164, 'Nigeria'),
(165, 'Niue'),
(166, 'Norfolk Island'),
(167, 'Northern Mariana Islands'),
(168, 'Norway'),
(169, 'Oman'),
(170, 'Pakistan'),
(171, 'Palau'),
(172, 'Palestinian Territory, Occupied'),
(173, 'Panama'),
(174, 'Papua New Guinea'),
(175, 'Paraguay'),
(176, 'Peru'),
(177, 'Philippines'),
(178, 'Pitcairn'),
(179, 'Poland'),
(180, 'Portugal'),
(181, 'Puerto Rico'),
(182, 'Qatar'),
(183, 'Reunion'),
(184, 'Romania'),
(185, 'Russian Federation'),
(186, 'Rwanda'),
(187, 'Saint Barthelemy'),
(188, 'Saint Helena'),
(189, 'Saint Kitts and Nevis'),
(190, 'Saint Lucia'),
(191, 'Saint Martin'),
(192, 'Saint Pierre and Miquelon'),
(193, 'Saint Vincent and the Grenadines'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'Sao Tome and Principe'),
(197, 'Saudi Arabia'),
(198, 'Senegal'),
(199, 'Serbia'),
(200, 'Serbia and Montenegro'),
(201, 'Seychelles'),
(202, 'Sierra Leone'),
(203, 'Singapore'),
(204, 'Sint Maarten'),
(205, 'Slovakia'),
(206, 'Slovenia'),
(207, 'Solomon Islands'),
(208, 'Somalia'),
(209, 'South Africa'),
(210, 'South Georgia and the South Sandwich Islands'),
(211, 'South Sudan'),
(212, 'Spain'),
(213, 'Sri Lanka'),
(214, 'Sudan'),
(215, 'Suriname'),
(216, 'Svalbard and Jan Mayen'),
(217, 'Swaziland'),
(218, 'Sweden'),
(219, 'Switzerland'),
(220, 'Syrian Arab Republic'),
(221, 'Taiwan, Province of China'),
(222, 'Tajikistan'),
(223, 'Tanzania, United Republic of'),
(224, 'Thailand'),
(225, 'Timor-Leste'),
(226, 'Togo'),
(227, 'Tokelau'),
(228, 'Tonga'),
(229, 'Trinidad and Tobago'),
(230, 'Tunisia'),
(231, 'Turkey'),
(232, 'Turkmenistan'),
(233, 'Turks and Caicos Islands'),
(234, 'Tuvalu'),
(235, 'Uganda'),
(236, 'Ukraine'),
(237, 'United Arab Emirates'),
(238, 'United Kingdom'),
(239, 'United States'),
(240, 'United States Minor Outlying Islands'),
(241, 'Uruguay'),
(242, 'Uzbekistan'),
(243, 'Vanuatu'),
(244, 'Venezuela'),
(245, 'Viet Nam'),
(246, 'Virgin Islands, British'),
(247, 'Virgin Islands, U.s.'),
(248, 'Wallis and Futuna'),
(249, 'Western Sahara'),
(250, 'Yemen'),
(251, 'Zambia'),
(252, 'Zimbabwe');

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
('Your Musician Ltd', 20, 'Yousician reimagined how to learn an instrument making it fun, fast and easy to play your favorite songs. Now on piano, guitar, '),
('Infinite Flight LLC', 21, 'Discover the sky with our VR'),
('Kahoot', 22, 'Kahoot! makes it easy to create, share and play fun learning games or trivia quizzes in minutes. Make learning awesome!\r\n'),
('M_Service JSC', 23, 'Online wallet make you don\'t need cash anymore'),
('Adobe', 24, 'Great ideas can happen anywhere. With Adobe apps for creativity and productivity, great work can too.\r\n'),
('TGame Studio', 25, 'Thank you for playing my games..\r\n');

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
('grafiticraft@gmail.com', '6bea7db14a928a7713980abc7c3bcd55');

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
('7151LFF3', 500000),
('76LQL9P9', 500000),
('GMN908WG', 500000),
('O0NZYKZP', 500000),
('SZGSHMYC', 500000);

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
('g12'),
('g2'),
('g5'),
('m2'),
('s2'),
('s3'),
('s4'),
('s5'),
('s6'),
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
('f2'),
('f3'),
('f4'),
('f5'),
('g11'),
('g16'),
('g7'),
('g8'),
('m1'),
('mo1');

-- --------------------------------------------------------

--
-- Table structure for table `pendingapp`
--

CREATE TABLE `pendingapp` (
  `appname` varchar(64) NOT NULL,
  `appid` varchar(8) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `creatorname` varchar(64) NOT NULL,
  `catename` varchar(16) NOT NULL,
  `price` int(11) NOT NULL,
  `pictureLink` varchar(128) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingapp`
--

INSERT INTO `pendingapp` (`appname`, `appid`, `creatorid`, `creatorname`, `catename`, `price`, `pictureLink`, `status`) VALUES
('Mazii', 'e1', 26, 'grafiticraft', 'Education', 54000, 'resources/pendingapps/mazii.png', 0),
('Bitcoin', 'f6', 1, 'grafiticraft', 'Finance', 0, 'resources/pendingapps/bitcoin.png', 0),
('Vsmart Aris', 'g17', 1, 'grafiticraft', 'Game', 0, 'resources/pendingapps/vsmartaris.jpg', 0),
('Get free Robux', 'g18', 1, 'grafiticraft', 'Game', 0, 'resources/pendingapps/getfreerobux.jpg', 2),
('Logitech gaming', 'g19', 1, 'grafiticraft', 'Game', 0, 'resources/pendingapps/logitechgaming.png', 1),
('Epic Games', 'g20', 1, 'grafiticraft', 'Game', 0, 'resources/pendingapps/epicgames.png', 0),
('Bandori', 'g21', 1, 'grafiticraft', 'Game', 10000, 'resources/pendingapps/bandori.png', 0),
('Soundcloud', 'm3', 1, 'grafiticraft', 'Music', 0, 'resources/pendingapps/soundcloud.png', 0),
('Phuc Long', 's7', 1, 'grafiticraft', 'Social', 0, 'resources/pendingapps/phuclong.jpg', 0),
('Snapchat', 's8', 1, 'grafiticraft', 'Social', 0, 'resources/pendingapps/snapchat.png', 0),
('WhatsApp', 's9', 1, 'grafiticraft', 'Social', 0, 'resources/pendingapps/whatsapp.png', 0),
('Twitch', 'v2', 1, 'grafiticraft', 'Video', 0, 'resources/pendingapps/twitch.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recentlyadded`
--

CREATE TABLE `recentlyadded` (
  `appid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recentlyadded`
--

INSERT INTO `recentlyadded` (`appid`) VALUES
('e1'),
('f6'),
('g17'),
('g18'),
('g19'),
('g20'),
('g21'),
('m3'),
('s7'),
('s8'),
('s9'),
('v2');

-- --------------------------------------------------------

--
-- Table structure for table `userbalance`
--

CREATE TABLE `userbalance` (
  `serial` varchar(16) COLLATE utf8_vietnamese_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usercoderedeemhistory`
--

CREATE TABLE `usercoderedeemhistory` (
  `serial` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `userid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `userid`, `creatorid`, `level`) VALUES
('grafiticraft', 'qwerty123', 'grafiticraft@gmail.com', 1, 26, 2),
('qwerty', '123', 'astoroicom@gmail.com', 2, 0, 1),
('nath', 'nath123', 'nath@gmail.com', 3, 0, 1),
('astoroicom', 'iop', 'phuphuongtin@gmail.com', 4, 0, 1),
('cunt', 'cunt123', 'cunt@gmai.com', 5, 0, 1),
('awdawdaw', 'qwerty123', 'dawdaw@gmail.com', 6, 0, 1),
('hahaha', '12345', 'hahaha@gmail.coom', 7, 0, 1),
('ba', 'hai', 'ffvvfvfvfvf@fjvfvfvfhvf', 8, 0, 1),
('Bynivh', '3', 'huubinh1823@gmail.com', 9, 0, 2),
('admin', 'admin', '', 10, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(64) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `country` varchar(32) NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `balance` int(11) NOT NULL,
  `pictureLink` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`userid`, `fullName`, `birthDate`, `gender`, `country`, `phoneNumber`, `balance`, `pictureLink`) VALUES
(1, 'Phu Phuong Tin', '2000-10-13', 0, 'Viet Nam', '0932956893', 300000, 'resources/account/grafiticraft.jpg'),
(3, 'Nath Bhagawan', '2021-03-10', 0, '', '', 69000, 'resources/account/nath.jpg'),
(4, 'adwd', '2021-03-31', 0, '', '', 0, 'resources/account/astoroicom.jpg'),
(5, 'bitch ass', '2021-04-14', 0, '', '', 0, 'resources/account/cunt.jpg'),
(6, 'Phù Phương Tuấn', '2021-04-15', 0, '', '', 0, 'resources/account/awdawdaw.jpg'),
(7, 'hahaha', '2021-04-09', 0, '', '', 0, 'resources/account/hahaha.jpg'),
(8, 'blabla', '2021-04-23', 0, '', '', 0, 'resources/account/ba.jpg'),
(9, 'Pháº¡m Há»¯u BÃ¬nh', '2000-10-20', 0, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`appid`,`creatorid`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cateid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`userid`,`appid`) USING BTREE;

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `giftcode`
--
ALTER TABLE `giftcode`
  ADD PRIMARY KEY (`serial`);

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
-- Indexes for table `pendingapp`
--
ALTER TABLE `pendingapp`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `recentlyadded`
--
ALTER TABLE `recentlyadded`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `userbalance`
--
ALTER TABLE `userbalance`
  ADD PRIMARY KEY (`userid`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `userbalance`
--
ALTER TABLE `userbalance`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
