-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 07:06 PM
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
  `description` varchar(2048) NOT NULL,
  `updatedate` datetime NOT NULL DEFAULT current_timestamp(),
  `capacity` int(10) NOT NULL,
  `link` varchar(128) NOT NULL,
  `screenshotlink` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`appid`, `appname`, `creatorid`, `creator`, `category`, `ranking`, `free`, `cost`, `downloads`, `description`, `updatedate`, `capacity`, `link`, `screenshotlink`) VALUES
('g1', 'Cytus II', 1, 'Rayark', 'Game', 5, 0, 54000, 111141, 'Cytus II is a music rhythm game created by Rayark Games. Its our fourth rhythm game title, following the footsteps of three global successes, Cytus, DEEMO and VOEZ. This sequel to Cytus brings back the original staff and is a product of hardwork and devotion.', '2021-05-15 22:11:27', 0, 'resources/apps/cytusii.png', '[\"resources/apps/screenshots/cytusii/cytusii0.png\",\"resources/apps/screenshots/cytusii/cytusii1.png\",\"resources/apps/screenshots/cytusii/cytusii2.png\"]'),
('g2', 'DEEMO', 1, 'Rayark', 'Game', 5, 1, 0, 552118, 'Never Left Without Saying Goodbye.', '2021-05-15 22:16:04', 0, 'resources/apps/deemo.png', '[\"resources/apps/screenshots/deemo/deemo0.png\",\"resources/apps/screenshots/deemo/deemo1.png\",\"resources/apps/screenshots/deemo/deemo2.png\"]'),
('g3', 'VOEZ', 1, 'Rayark', 'Game', 4, 1, 0, 107144, 'VOEZ invites you to embark on the remarkable journey of teenage dreams,\r\nFollowing after Cytus and Deemo, two titles that took the world by storm,\r\nRayark’s remarkable rhythm game, VOEZ, has officially arrived!', '2021-05-15 23:03:17', 0, 'resources/apps/voez.png', '[\"resources/apps/screenshots/voez/voez0.png\",\"resources/apps/screenshots/voez/voez1.png\",\"resources/apps/screenshots/voez/voez2.png\"]');

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
('Education', 'e', 0),
('Finance', 'f', 0),
('Game', 'g', 4),
('Music', 'm', 0),
('Movies', 'mo', 0),
('Social', 's', 0),
('Video', 'v', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `appid` varchar(16) COLLATE utf8_vietnamese_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` varchar(128) COLLATE utf8_vietnamese_ci NOT NULL,
  `ranking` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
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
  `tittle` varchar(2048) NOT NULL,
  `backgroundlink` varchar(128) NOT NULL,
  `iconlink` varchar(128) NOT NULL,
  `feature` varchar(16) NOT NULL,
  `appquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`name`, `id`, `tittle`, `backgroundlink`, `iconlink`, `feature`, `appquantity`) VALUES
('Rayark', 1, 'A team of passionate game developers dedicated to creating\r\nhigh-quality gaming experiences and digital contents on various platforms.', 'resources/creator/background/rayark.png', 'resources/creator/icon/rayark.png', 'g1', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `mostdownloadspaid`
--

CREATE TABLE `mostdownloadspaid` (
  `appid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendingapp`
--

CREATE TABLE `pendingapp` (
  `appname` varchar(64) NOT NULL,
  `appid` varchar(8) NOT NULL,
  `appdescription` varchar(2048) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `creatorname` varchar(64) NOT NULL,
  `catename` varchar(16) NOT NULL,
  `price` int(11) NOT NULL,
  `appdownloads` int(11) NOT NULL,
  `appranking` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `pictureLink` varchar(128) NOT NULL,
  `screenshotslink` varchar(256) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingapp`
--

INSERT INTO `pendingapp` (`appname`, `appid`, `appdescription`, `creatorid`, `creatorname`, `catename`, `price`, `appdownloads`, `appranking`, `date_added`, `pictureLink`, `screenshotslink`, `status`) VALUES
('Cytus II', 'g1', 'Cytus II is a music rhythm game created by Rayark Games. Its our fourth rhythm game title, following the footsteps of three global successes, Cytus, DEEMO and VOEZ. This sequel to Cytus brings back the original staff and is a product of hardwork and devotion.', 1, 'Rayark', 'Game', 54000, 111141, 5, '2021-05-15 22:09:50', 'resources/pendingapps/cytusii.png', '[\"resources/pendingapps/screenshots/cytusii/cytusii0.png\",\"resources/pendingapps/screenshots/cytusii/cytusii1.png\",\"resources/pendingapps/screenshots/cytusii/cytusii2.png\"]', 1),
('DEEMO', 'g2', 'Never Left Without Saying Goodbye.', 1, 'Rayark', 'Game', 0, 552118, 5, '2021-05-15 22:15:00', 'resources/pendingapps/deemo.png', '[\"resources/pendingapps/screenshots/deemo/deemo0.png\",\"resources/pendingapps/screenshots/deemo/deemo1.png\",\"resources/pendingapps/screenshots/deemo/deemo2.png\"]', 1),
('VOEZ', 'g3', 'VOEZ invites you to embark on the remarkable journey of teenage dreams,\r\nFollowing after Cytus and Deemo, two titles that took the world by storm,\r\nRayark’s remarkable rhythm game, VOEZ, has officially arrived!', 1, 'Rayark', 'Game', 0, 107144, 4, '2021-05-15 23:03:09', 'resources/pendingapps/voez.png', '[\"resources/pendingapps/screenshots/voez/voez0.png\",\"resources/pendingapps/screenshots/voez/voez1.png\",\"resources/pendingapps/screenshots/voez/voez2.png\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recentlyadded`
--

CREATE TABLE `recentlyadded` (
  `appid` varchar(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recentlyadded`
--

INSERT INTO `recentlyadded` (`appid`, `date_added`) VALUES
('g1', '2021-05-15 22:09:50'),
('g2', '2021-05-15 22:15:00'),
('g3', '2021-05-15 23:03:09');

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
('astoroicom', 'iop', 'phuphuongtin@gmail.com', 3, 0, 1),
('Bynivh', '3', 'huubinh1823@gmail.com', 4, 0, 2),
('admin', 'admin', '', 5, 0, 3);

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
(2, 'hahaha', '2021-04-09', 0, '', '', 0, 'resources/account/hahaha.jpg'),
(3, 'blabla', '2021-04-23', 0, '', '', 0, 'resources/account/ba.jpg'),
(4, 'Phạm Hữu Bình', '2000-10-11', 1, 'Viet Nam', '04735083', 510000, 'resources/account/Bynivh.jpg');

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
