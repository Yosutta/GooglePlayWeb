-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 04:52 PM
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
('bs3', 'Adobe Scan', 3, 'Adobe', 'Business', 5, 1, 0, 1483272, 'Turn your device into a powerful, portable document scanner, complete with OCR text recognition capabilities, with the free-to-use Adobe Scan app.\r\n\r\nUse the Adobe Scan mobile document scanner to turn anything â€” receipts, notes, documents, photos, business cards, whiteboards â€” into an Adobe PDF or JPEG file with content you can reuse from each PDF and photo scan.', '2021-05-16 13:19:33', 0, 'resources/apps/adobescan.png', '[\"resources/apps/screenshots/adobescan/adobescan0.png\",\"resources/apps/screenshots/adobescan/adobescan1.png\",\"resources/apps/screenshots/adobescan/adobescan2.png\"]'),
('bs4', 'Adobe XD', 3, 'Adobe', 'Business', 4, 1, 0, 9295, 'Cover art	\r\nAdobe XD\r\nAdobeTools\r\nRated for 3+\r\n9,295\r\nThis app is not available for your device\r\nAdd to wishlist	\r\nScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot Image\r\nEliminate the guesswork by previewing your Adobe XD designs complete with transitions on native devices, in real time via USB (macOS only) or by loading them as cloud documents.\r\n\r\nIf you enjoy using Adobe XD, please share a nice review. It really helps!\r\n\r\nAdobe Terms of Use: http://www.adobe.com/go/terms\r\nAdobe Privacy Policy: https://www.adobe.com/go/privacy_policy\r\nDo not sell my information: https://www.adobe.com/privacy/ca-rights.html', '2021-05-16 13:33:11', 0, 'resources/apps/adobexd.png', '[\"resources/apps/screenshots/adobexd/adobexd0.png\",\"resources/apps/screenshots/adobexd/adobexd1.png\",\"resources/apps/screenshots/adobexd/adobexd2.png\"]'),
('bs5', 'Adobe Sign', 3, 'Adobe', 'Business', 4, 1, 0, 2210, 'This app is a mobile companion for the Adobe Sign e-signature service. With it, you can e-sign documents and forms, send them to others for e-signature, track your documents and get signatures instantly with in-person signing.\r\n\r\nAdobe Sign is the electronic signature solution you can trust, from the global leader in secure digital documents for over 25 years. Adobe Sign is used by businesses of all sizes â€” including Fortune 1000 companies, healthcare organizations and financial institutions â€” to accelerate critical business processes in Sales, HR, Legal and Operations.', '2021-05-16 13:37:12', 0, 'resources/apps/adobesign.png', '[\"resources/apps/screenshots/adobesign/adobesign0.png\",\"resources/apps/screenshots/adobesign/adobesign1.png\",\"resources/apps/screenshots/adobesign/adobesign2.png\"]'),
('da1', 'Fika', 7, 'Fika', 'Dating', 3, 0, 2000, 1254, 'You will have girlfriend or boyfriend in one day', '2021-05-16 14:32:03', 0, 'resources/apps/fika.png', '[\"resources/apps/screenshots/fika/fika0.png\"]'),
('da2', 'Bumble ', 8, 'Bumble', 'Dating', 4, 1, 0, 237566, 'Million people have registered on Bumble to create meaningful relationships, find friends and make purposeful connections. Bumble is the dating app that allows you to make new connections, whether youâ€™re looking for a partner, to make new friends, or to expand your professional network.\r\n\r\nMaking the first move on Bumble could change your life!', '2021-05-16 14:35:46', 0, 'resources/apps/bumble.png', '[\"resources/apps/screenshots/bumble/bumble0.png\",\"resources/apps/screenshots/bumble/bumble1.png\"]'),
('dd1', 'Pinterest', 15, 'Pinterest', 'Daydream', 5, 1, 0, 7897149, 'Looking for creative ideas? Whether youâ€™re planning your next big travel adventure, searching for home design concepts, looking for fashion & fitness tips or checking out new recipes, find lifestyle inspiration on Pinterest. Good ideas start here!\r\n', '2021-05-16 15:10:11', 0, 'resources/apps/pinterest.png', '[\"resources/apps/screenshots/pinterest/pinterest0.png\",\"resources/apps/screenshots/pinterest/pinterest1.png\"]'),
('dd2', 'Expeditions', 14, 'Google', 'Daydream', 4, 1, 0, 5218, 'Google Expeditions is an immersive learning and teaching tool that lets you go on VR trips or explore AR objects. Explore historical landmarks, go down to the atomic level, get up close with sharks, even visit outer space!\r\n', '2021-05-16 15:10:10', 0, 'resources/apps/expeditions.png', '[\"resources/apps/screenshots/expeditions/expeditions0.png\",\"resources/apps/screenshots/expeditions/expeditions1.png\"]'),
('e1', 'HiEdu Scientific Calculator', 13, 'HiEdu', 'Education', 5, 1, 0, 64581, 'HiEdu Scientific Calculator: He-570: A powerful calculator app that includes calculator for math, calculator for money, calculator equation... This is a calculator app which has a lot of features such as: scientific calculator, standard calculator, complex, programmer, table, matrix, vector, graph, solve the equation, converter, math formulas, physical formulas, chemistry. It is a very useful tool for education to help complete complex math, algebra, or geometry problems.', '2021-05-16 14:53:53', 0, 'resources/apps/hieduscientificcalculator.png', '[\"resources/apps/screenshots/hieduscientificcalculator/hieduscientificcalculator0.png\",\"resources/apps/screenshots/hieduscientificcalculator/hieduscientificcalculator1.png\"]'),
('e3', 'Google Classroom', 14, 'Google', 'Education', 5, 1, 0, 1527856, 'Classroom is a free service for schools, non-profits and anyone with a personal Google Account. Classroom makes it easy for learners and instructors to connect â€“ inside and outside of schools. Classroom saves time and paper and makes it easy to create classes, distribute assignments, communicate and stay organised.\r\n', '2021-05-16 14:58:07', 0, 'resources/apps/googleclassroom.png', '[\"resources/apps/screenshots/googleclassroom/googleclassroom0.png\",\"resources/apps/screenshots/googleclassroom/googleclassroom1.png\"]'),
('f1', 'Adobe Reader PDF', 3, 'Adobe', 'Finance', 5, 1, 0, 4551330, 'Do you need to work with documents on the go? Get the Adobe Acrobat Reader mobile app, the worldâ€™s most trusted PDF viewer, with more than 635 million installs. Store your files online and read PDF files anywhere with this leading, free PDF reader and file manager. You can also view, share, annotate, and add e-signatures to PDF documents.\r\n\r\nSubscribe to Adobe Acrobat if you need a PDF editor to edit text and images, a PDF converter to export to and from PDF, or more advanced features to create PDFs, combine PDF documents, organize PDFs, and more.\r\n\r\nVIEW AND PRINT PDFs\r\nâ€¢ Open and view PDFs with the free Adobe PDF viewer app.\r\nâ€¢ Choose Single Page or Continuous scroll mode.\r\nâ€¢ Help save battery with dark mode.\r\nâ€¢ Print documents directly from your device.\r\n\r\nREAD PDFs MORE EASILY\r\nâ€¢ Get the best PDF reading experience with Liquid Mode.\r\nâ€¢ Content in your PDF document reflows to fit your screen.\r\nâ€¢ Use the Liquid Mode outline for quick navigation.\r\nâ€¢ Search to find text fast in your PDF documents', '2021-05-16 13:12:52', 0, 'resources/apps/adobereaderpdf.png', '[\"resources/apps/screenshots/adobereaderpdf/adobereaderpdf0.png\",\"resources/apps/screenshots/adobereaderpdf/adobereaderpdf1.png\",\"resources/apps/screenshots/adobereaderpdf/adobereaderpdf2.png\"]'),
('f2', 'Momo', 10, 'M_SERVICE JSC', 'Finance', 5, 1, 0, 247043, 'Take care of your money', '2021-05-16 14:42:01', 0, 'resources/apps/momo.png', '[\"resources/apps/screenshots/momo/momo0.png\",\"resources/apps/screenshots/momo/momo1.png\"]'),
('f3', 'VietinBank iPay', 11, 'VietinBank', 'Finance', 4, 1, 0, 33932, 'Link to bank', '2021-05-16 14:44:39', 0, 'resources/apps/vietinbankipay.png', '[\"resources/apps/screenshots/vietinbankipay/vietinbankipay0.png\",\"resources/apps/screenshots/vietinbankipay/vietinbankipay1.png\"]'),
('f4', 'VietinBank OTP', 11, 'VietinBank', 'Finance', 3, 1, 0, 1575, 'VietinBank OTP application exclusively for VietinBank Corporate Customers.\r\nVietinBank OTP is an advanced authentication solution with the highest level of security developed by Vietnam Joint Stock Commercial Bank for Industry and Trade and the leading security partners. VietinBank OTP is installed on mobile devices to get one-time password (OTP) code when customers make transactions on online banking service VietinBank eFAST.', '2021-05-16 14:47:05', 0, 'resources/apps/vietinbankotp.png', '[\"resources/apps/screenshots/vietinbankotp/vietinbankotp0.png\",\"resources/apps/screenshots/vietinbankotp/vietinbankotp1.png\"]'),
('f5', 'CryptoRocket PRO Bitcoin', 12, 'Nikita', 'Finance', 4, 0, 57000, 90, 'Crypto Rocket is a real-time Bitcoin and cryptocurrency tracker. Keep track of all cryptocurrencies, including Bitcoin, Ethereum, Ripple, Litecoin and over 2000+ altcoins. Use Crypto Rocket to get the latest cryptocurrency prices, news and market charts.', '2021-05-16 14:50:18', 0, 'resources/apps/cryptorocketprobitcoin.png', '[\"resources/apps/screenshots/cryptorocketprobitcoin/cryptorocketprobitcoin0.png\",\"resources/apps/screenshots/cryptorocketprobitcoin/cryptorocketprobitcoin1.png\"]'),
('g1', 'Cytus II', 1, 'Rayark', 'Game', 5, 0, 54000, 111141, 'Cytus II is a music rhythm game created by Rayark Games. Its our fourth rhythm game title, following the footsteps of three global successes, Cytus, DEEMO and VOEZ. This sequel to Cytus brings back the original staff and is a product of hardwork and devotion.', '2021-05-15 22:11:27', 0, 'resources/apps/cytusii.png', '[\"resources/apps/screenshots/cytusii/cytusii0.png\",\"resources/apps/screenshots/cytusii/cytusii1.png\",\"resources/apps/screenshots/cytusii/cytusii2.png\"]'),
('g12', 'PUBG', 6, 'VNG', 'Game', 5, 1, 0, 891897, 'Best game of VNG ', '2021-05-16 14:22:35', 0, 'resources/apps/pubg.png', '[\"resources/apps/screenshots/pubg/pubg0.png\",\"resources/apps/screenshots/pubg/pubg1.png\",\"resources/apps/screenshots/pubg/pubg2.png\"]'),
('g13', 'Zing Speed', 6, 'VNG', 'Game', 5, 1, 0, 343159, 'Have a best race', '2021-05-16 14:24:49', 0, 'resources/apps/zingspeed.png', '[\"resources/apps/screenshots/zingspeed/zingspeed0.png\"]'),
('g14', 'Gunny', 6, 'VNG', 'Game', 3, 1, 0, 202132, 'Shooting chicken\r\n', '2021-05-16 14:26:27', 0, 'resources/apps/gunny.png', '[\"resources/apps/screenshots/gunny/gunny0.png\",\"resources/apps/screenshots/gunny/gunny1.png\"]'),
('g15', 'Thien Nu', 6, 'VNG', 'Game', 5, 0, 3000, 50055, 'Good Girl!!!', '2021-05-16 14:28:18', 0, 'resources/apps/thiennu.png', '[\"resources/apps/screenshots/thiennu/thiennu0.png\",\"resources/apps/screenshots/thiennu/thiennu1.png\"]'),
('g16', 'Genshin Impact', 17, 'miHoYo Limited', 'Game', 5, 1, 0, 1501123, 'Step into Teyvat, a vast world teeming with life and flowing with elemental energy.\r\n\r\nYou and your sibling arrived here from another world. Separated by an unknown god, stripped of your powers, and cast into a deep slumber, you now awake to a world very different from when you first arrived.', '2021-05-16 17:22:33', 0, 'resources/apps/genshinimpact.png', '[\"resources/apps/screenshots/genshinimpact/genshinimpact0.png\",\"resources/apps/screenshots/genshinimpact/genshinimpact1.png\",\"resources/apps/screenshots/genshinimpact/genshinimpact2.png\"]'),
('g18', 'Honkai Impact 3', 17, 'miHoYo Limited', 'Game', 4, 1, 0, 380576, 'New SP battlesuit [Haxxor Bunny] debuts! Login rewards 5 Supply Cards!\r\nExplore the map in the battlesuit event to unlock Twilight Paladins new outfit and new battlesuit fragments!', '2021-05-16 21:30:37', 0, 'resources/apps/honkaiimpact3.png', '[\"resources/apps/screenshots/honkaiimpact3/honkaiimpact30.png\",\"resources/apps/screenshots/honkaiimpact3/honkaiimpact31.png\",\"resources/apps/screenshots/honkaiimpact3/honkaiimpact32.png\"]'),
('g19', 'Among Us', 27, 'Innersloth LLC', 'Game', 4, 1, 0, 11838515, 'Play online or over local WiFi with 4-10 players as you attempt to prep your spaceship for departure, but beware as one will be an impostor bent on killing everyone!', '2021-05-16 21:35:58', 0, 'resources/apps/amongus.png', '[\"resources/apps/screenshots/amongus/amongus0.png\",\"resources/apps/screenshots/amongus/amongus1.png\",\"resources/apps/screenshots/amongus/amongus2.png\"]'),
('g2', 'DEEMO', 1, 'Rayark', 'Game', 5, 1, 0, 552118, 'Never Left Without Saying Goodbye.', '2021-05-15 22:16:04', 0, 'resources/apps/deemo.png', '[\"resources/apps/screenshots/deemo/deemo0.png\",\"resources/apps/screenshots/deemo/deemo1.png\",\"resources/apps/screenshots/deemo/deemo2.png\"]'),
('g20', 'Candy Crush Soda Saga', 28, 'King', 'Game', 5, 1, 0, 8054046, 'Download Candy Crush Soda Saga now!\r\n\r\nFrom the makers of the legendary Candy Crush Saga comes Candy Crush Soda Saga! Unique candies, more divine matching combinations and challenging game modes brimming with purple soda and fun!', '2021-05-16 21:38:18', 0, 'resources/apps/candycrushsodasaga.png', '[\"resources/apps/screenshots/candycrushsodasaga/candycrushsodasaga0.png\",\"resources/apps/screenshots/candycrushsodasaga/candycrushsodasaga1.png\",\"resources/apps/screenshots/candycrushsodasaga/candycrushsodasaga2.png\"]'),
('g21', 'Shadow Fight Arena', 29, 'Nekki', 'Game', 5, 1, 0, 391340, 'BECOME THE SHADOW FIGHT HERO IN A NEW MULTIPLAYER FIGHTING GAME!', '2021-05-16 21:41:48', 0, 'resources/apps/shadowfightarena.png', '[\"resources/apps/screenshots/shadowfightarena/shadowfightarena0.png\",\"resources/apps/screenshots/shadowfightarena/shadowfightarena1.png\",\"resources/apps/screenshots/shadowfightarena/shadowfightarena2.png\"]'),
('g3', 'VOEZ', 1, 'Rayark', 'Game', 4, 1, 0, 107144, 'VOEZ invites you to embark on the remarkable journey of teenage dreams,\r\nFollowing after Cytus and Deemo, two titles that took the world by storm,\r\nRayark’s remarkable rhythm game, VOEZ, has officially arrived!', '2021-05-15 23:03:17', 0, 'resources/apps/voez.png', '[\"resources/apps/screenshots/voez/voez0.png\",\"resources/apps/screenshots/voez/voez1.png\",\"resources/apps/screenshots/voez/voez2.png\"]'),
('g6', 'Flappy Bird', 4, 'TGame Studio', 'Game', 5, 0, 2000, 14232, 'You are a bird try to go home. \r\nHave funs!!!', '2021-05-16 13:42:02', 0, 'resources/apps/flappybird.png', '[\"resources/apps/screenshots/flappybird/flappybird0.png\",\"resources/apps/screenshots/flappybird/flappybird1.png\",\"resources/apps/screenshots/flappybird/flappybird2.png\"]'),
('g7', 'Sudoku', 4, 'TGame Studio', 'Game', 4, 0, 5000, 150000, 'Try to solve!!!\r\n', '2021-05-16 13:44:08', 0, 'resources/apps/sudoku.png', '[\"resources/apps/screenshots/sudoku/sudoku0.png\",\"resources/apps/screenshots/sudoku/sudoku1.png\"]'),
('g8', 'Lien Quan Mobile', 5, 'Garena', 'Game', 5, 0, 300000, 45398412, 'Best game on mobile.\r\nYou cannot skip this game.', '2021-05-16 13:48:31', 0, 'resources/apps/lienquanmobile.png', '[\"resources/apps/screenshots/lienquanmobile/lienquanmobile0.png\",\"resources/apps/screenshots/lienquanmobile/lienquanmobile1.png\",\"resources/apps/screenshots/lienquanmobile/lienquanmobile2.png\"]'),
('h1', 'Room Planner', 18, 'iCanDesign LLC', 'Houses', 5, 1, 0, 89805, 'Decorate your house or apartment and furnish it with the best floor plan creator and homestyler app. Get inspiration from predesigned layouts for your bedroom, bathroom, living room, etc. Our room designer gives you home interior decor ideas to start your project.', '2021-05-16 20:47:23', 0, 'resources/apps/roomplanner.png', '[\"resources/apps/screenshots/roomplanner/roomplanner0.png\",\"resources/apps/screenshots/roomplanner/roomplanner1.png\",\"resources/apps/screenshots/roomplanner/roomplanner2.png\"]'),
('h2', 'Planner 5D', 19, 'Planner 5D', 'Houses', 4, 1, 0, 304290, 'Planner 5D is a simple-to-use app that enables anyone to create beautiful and realistic interior and exterior designs in 2D and 3D modes.\r\n', '2021-05-16 20:47:24', 0, 'resources/apps/planner5d.png', '[\"resources/apps/screenshots/planner5d/planner5d0.png\",\"resources/apps/screenshots/planner5d/planner5d1.png\",\"resources/apps/screenshots/planner5d/planner5d2.png\",\"resources/apps/screenshots/planner5d/planner5d3.png\"]'),
('h3', 'Zigbang', 20, 'ZIGBANG', 'Houses', 4, 1, 0, 74066, '1st-ranked real estate app in Korea, Zigbang!\r\n- The winner of 2015 Best of the best brand awards\r\n- The winner of 2014 Korea mobile app award', '2021-05-16 20:47:24', 0, 'resources/apps/zigbang.png', '[\"resources/apps/screenshots/zigbang/zigbang0.png\",\"resources/apps/screenshots/zigbang/zigbang1.png\",\"resources/apps/screenshots/zigbang/zigbang2.png\"]'),
('l1', 'Google Home', 14, 'Google', 'Lifestyle', 4, 1, 0, 1084451, 'Set up, manage, and control your Google Home, Google Nest, and Chromecast devices, plus thousands of connected home products like lights, cameras, thermostats, and more â€“ all from the Google Home app.\r\n', '2021-05-16 15:05:45', 0, 'resources/apps/googlehome.png', '[\"resources/apps/screenshots/googlehome/googlehome0.png\",\"resources/apps/screenshots/googlehome/googlehome1.png\"]'),
('l2', 'Lich Van Nien 2021', 16, 'Zego Game', 'Lifestyle', 4, 0, 41000, 48098, 'Vietnamese calendar', '2021-05-16 15:13:37', 0, 'resources/apps/lichvannien2021.png', '[\"resources/apps/screenshots/lichvannien2021/lichvannien20210.png\",\"resources/apps/screenshots/lichvannien2021/lichvannien20211.png\"]'),
('l3', 'Mooda', 21, 'Mooda', 'Lifestyle', 4, 0, 25000, 510, 'Keep track of your moods to understand yourself better.\r\nThe most simple way to improve your emotional wellbeing is here.', '2021-05-16 20:47:25', 0, 'resources/apps/mooda.png', '[\"resources/apps/screenshots/mooda/mooda0.png\",\"resources/apps/screenshots/mooda/mooda1.png\",\"resources/apps/screenshots/mooda/mooda2.png\"]'),
('l4', 'Mi Home', 22, 'Xiaomi Inc', 'Lifestyle', 5, 1, 0, 613014, 'Manage and communicate to devices.\r\nConnect devices to network.\r\nConnect devices to each other.', '2021-05-16 21:06:54', 0, 'resources/apps/mihome.png', '[\"resources/apps/screenshots/mihome/mihome0.png\",\"resources/apps/screenshots/mihome/mihome1.png\",\"resources/apps/screenshots/mihome/mihome2.png\"]'),
('m1', 'Zing mp3', 23, 'Zalo Group', 'Music', 4, 1, 0, 1105319, 'Vietnamese most popular application for cloud music. ', '2021-05-16 21:06:54', 0, 'resources/apps/zingmp3.png', '[\"resources/apps/screenshots/zingmp3/zingmp30.png\",\"resources/apps/screenshots/zingmp3/zingmp31.png\",\"resources/apps/screenshots/zingmp3/zingmp32.png\"]'),
('m2', 'Spotify', 24, 'Spotify Ltd', 'Music', 5, 1, 0, 22454343, 'With Spotify, you can listen to music and play millions of songs and podcasts for free. Stream music and podcasts you love and find music - or your next favorite song - from all over the world.', '2021-05-16 21:06:55', 0, 'resources/apps/spotify.png', '[\"resources/apps/screenshots/spotify/spotify0.png\",\"resources/apps/screenshots/spotify/spotify1.png\",\"resources/apps/screenshots/spotify/spotify2.png\"]'),
('m3', 'Soundcloud', 25, 'Soundcloud', 'Music', 5, 1, 0, 4758631, 'SoundCloud is more than a streaming service, it’s an open global community for anyone to upload any sound for immediate discovery.', '2021-05-16 21:06:55', 0, 'resources/apps/soundcloud.png', '[\"resources/apps/screenshots/soundcloud/soundcloud0.png\",\"resources/apps/screenshots/soundcloud/soundcloud1.png\",\"resources/apps/screenshots/soundcloud/soundcloud2.png\"]'),
('mo1', 'Netflix', 25, 'Netflix Inc', 'Movies', 5, 1, 0, 11556159, 'Looking for the most talked about TV shows and movies from the around the world? They’re all on Netflix.', '2021-05-16 21:14:07', 0, 'resources/apps/netflix.png', '[\"resources/apps/screenshots/netflix/netflix0.png\",\"resources/apps/screenshots/netflix/netflix1.png\",\"resources/apps/screenshots/netflix/netflix2.png\"]'),
('mo2', 'Google Play Movies n TV', 14, 'Google', 'Movies', 4, 1, 0, 1794977, 'Google Play makes finding and watching movies & TV shows easier than ever.', '2021-05-16 21:14:08', 0, 'resources/apps/googleplaymoviesntv.png', '[\"resources/apps/screenshots/googleplaymoviesntv/googleplaymoviesntv0.png\",\"resources/apps/screenshots/googleplaymoviesntv/googleplaymoviesntv1.png\",\"resources/apps/screenshots/googleplaymoviesntv/googleplaymoviesntv2.png\"]'),
('mo3', 'IMDb', 26, 'IMDb', 'Movies', 5, 1, 0, 796461, 'Stay up to date with entertainment news, awards, and events.', '2021-05-16 21:21:45', 0, 'resources/apps/imdb.png', '[\"resources/apps/screenshots/imdb/imdb0.png\",\"resources/apps/screenshots/imdb/imdb1.png\",\"resources/apps/screenshots/imdb/imdb2.png\"]'),
('p1', 'Adobe Lightroom', 3, 'Adobe', 'Photography', 4, 1, 0, 999924, 'Adobe Photoshop Lightroom is a free, powerful photo editor and camera app that empowers your photography, helping you capture and edit stunning images.\r\n\r\nEasy image editing tools like sliders and filters for pictures simplify photo editing. Retouch full-resolution photos, apply photo filters, or start photo editing wherever you are.\r\n\r\nEDIT PHOTOS ANYWHERE\r\nTransform raw photos with one of the worldâ€™s most intuitive photo editing apps. Tap and drag sliders to improve light and colour, apply photo filters for pictures, and more. Breathe life into your photo editing with leading photography tools.\r\n\r\nRetouch light and colour to make photos pop. Easy sliders let you control photo properties from your phone screen.\r\n\r\nCrop and Rotate tools find the right size and aspect ratio to best show off your camera work. Create clean shots with straight lines by adjusting the perspective with powerful upright, guided upright, and Geometry sliders.\r\n\r\nExperiment and compare different photo versions without losing the original and pick your favourite look.\r\n\r\nAccess all your presets anywhere. Image edits on one device are automatically applied everywhere else.\r\n\r\nEDIT THE FINE DETAILS\r\nFinesse details with the advanced picture editor. Control images with selective adjustments. Remove almost anything with a touch of the Healing Brush. Local Hue Adjustments as part of selective edits let you alter hue and saturation with precision and elevate your photos. Have more control with advanced colour grading and achieve stunning effects. Import your own graphical watermarks and apply your personal touch.\r\n\r\nEasy, interactive tutorials from fellow photographers teach you to use the photo editor to its potential.\r\n', '2021-05-16 13:07:07', 0, 'resources/apps/adobelightroom.png', '[\"resources/apps/screenshots/adobelightroom/adobelightroom0.png\",\"resources/apps/screenshots/adobelightroom/adobelightroom1.png\",\"resources/apps/screenshots/adobelightroom/adobelightroom2.png\"]'),
('p2', 'Adobe Photoshop', 3, 'Adobe', 'Photography', 4, 1, 0, 1685658, 'ENHANCE, STYLIZE AND SHARE YOUR PHOTOS WITH EASE.\r\nTap into your creativity on the go with Photoshop Expressâ€“the standard for fast and easy photo editingâ€“used by millions of creative individuals. Enhance photos like the pros with an easy-to-use digital studio full of editing features on your mobile device.\r\n\r\nPhotoshop Express delivers a full spectrum of fun tools and effects at your fingertips. Personalize your experiences with borders and text, enhance color and imagery, create collages, make quick fixes and enhance your share-worthy moments for free.', '2021-05-16 13:21:44', 0, 'resources/apps/adobephotoshop.png', '[\"resources/apps/screenshots/adobephotoshop/adobephotoshop0.png\",\"resources/apps/screenshots/adobephotoshop/adobephotoshop1.png\",\"resources/apps/screenshots/adobephotoshop/adobephotoshop2.png\"]'),
('p3', 'Adobe Draw', 3, 'Adobe', 'Photography', 5, 1, 0, 120794, 'Winner of the Tabby Award for Creation, Design and Editing and PlayStore Editorâ€™s Choice Award!\r\n\r\nCreate vector artwork with image and drawing layers you can send to Adobe Illustrator or to Photoshop.\r\n\r\nIllustrators, graphic designers and artists can:\r\nâ€¢ Zoom up to 64x to apply finer details.\r\nâ€¢ Sketch with five different pen tips with adjustable opacity, size and color.\r\nâ€¢ Work with multiple image and drawing layers.\r\nâ€¢ Rename, duplicate, merge and adjust each individual layer.\r\nâ€¢ Insert basic shape stencils or new vector shapes from Capture.\r\nâ€¢ Send an editable native file to Illustrator or a PSD to Photoshop that automatically opens on your desktop.', '2021-05-16 13:27:09', 0, 'resources/apps/adobedraw.png', '[\"resources/apps/screenshots/adobedraw/adobedraw0.png\",\"resources/apps/screenshots/adobedraw/adobedraw1.png\",\"resources/apps/screenshots/adobedraw/adobedraw2.png\"]'),
('p4', 'Snapseed', 14, 'Google', 'Photography', 4, 1, 0, 1366081, '', '2021-05-16 15:02:02', 0, 'resources/apps/snapseed.png', '[\"resources/apps/screenshots/snapseed/snapseed0.png\",\"resources/apps/screenshots/snapseed/snapseed1.png\"]'),
('p5', 'Google Photos', 14, 'Google', 'Photography', 4, 1, 0, 34395697, 'Google Photos is the home for all your photos and videos, automatically organized and easy to share.\r\n\r\n- â€œThe best photo product on Earthâ€ â€“ The Verge\r\n\r\n- â€œGoogle Photos is your new essential picture appâ€ â€“ Wired', '2021-05-16 15:03:24', 0, 'resources/apps/googlephotos.png', '[\"resources/apps/screenshots/googlephotos/googlephotos0.png\",\"resources/apps/screenshots/googlephotos/googlephotos1.png\"]'),
('s1', 'TikTok', 2, 'TikTok Pte', 'Social', 5, 1, 0, 1234567, 'The best trend', '2021-05-16 02:34:41', 0, 'resources/apps/tiktok.png', '[\"resources/apps/screenshots/tiktok/tiktok0.png\",\"resources/apps/screenshots/tiktok/tiktok1.png\",\"resources/apps/screenshots/tiktok/tiktok2.png\",\"resources/apps/screenshots/tiktok/tiktok3.png\"]'),
('s2', 'TikTokWall', 2, 'TikTok Pte', 'Social', 3, 1, 0, 444123, 'Best wall in the world', '2021-05-16 02:34:41', 0, 'resources/apps/tiktokwall.png', '[\"resources/apps/screenshots/tiktokwall/tiktokwall0.png\",\"resources/apps/screenshots/tiktokwall/tiktokwall1.png\"]'),
('v1', 'Adobe Premiere Rush', 3, 'Adobe', 'Video', 4, 1, 0, 22101, 'Shoot, edit, and share online videos anywhere.\r\n\r\nFeed your channels a steady stream of awesome with Adobe Premiere Rush, the all-in-one, cross-device video editor. Powerful tools let you quickly create videos that look and sound professional, just how you want. Share to your favourite social sites right from the app and work across devices. Use it for free as long as you want with unlimited exportsâ€”or upgrade to access all premium features and hundreds of soundtracks, sound effects, loops, animated titles, overlays, and graphics.', '2021-05-16 13:30:31', 0, 'resources/apps/adobepremiererush.png', '[\"resources/apps/screenshots/adobepremiererush/adobepremiererush0.png\",\"resources/apps/screenshots/adobepremiererush/adobepremiererush1.png\",\"resources/apps/screenshots/adobepremiererush/adobepremiererush2.png\"]'),
('v2', 'Youtube', 14, 'Google', 'Video', 5, 1, 0, 100268185, 'Get the official YouTube app on Android phones and tablets. See what the world is watching -- from the hottest music videos to whatâ€™s popular in gaming, fashion, beauty, news, learning and more. Subscribe to channels you love, create content of your own, share with friends, and watch on any device.\r\n', '2021-05-16 15:00:32', 0, 'resources/apps/youtube.png', '[\"resources/apps/screenshots/youtube/youtube0.png\",\"resources/apps/screenshots/youtube/youtube1.png\"]');

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
('Business', 'bs', 5),
('Dating', 'da', 4),
('Daydream', 'dd', 2),
('Education', 'e', 3),
('Finance', 'f', 5),
('Game', 'g', 21),
('Houses', 'h', 3),
('Lifestyle', 'l', 4),
('Music', 'm', 3),
('Movies', 'mo', 3),
('Photography', 'p', 5),
('Social', 's', 2),
('Shopping', 'sh', 0),
('Traveling', 't', 0),
('Video', 'v', 2);

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
('Rayark', 1, 'A team of passionate game developers dedicated to creating\r\nhigh-quality gaming experiences and digital contents on various platforms.', 'resources/creator/background/rayark.png', 'resources/creator/icon/rayark.png', 'g1', 0),
('TikTok Pte', 2, 'Wonderful girl', 'resources/creator/background/tiktokpte.png', 'resources/creator/icon/tiktokpte.png', 's1', 0),
('Adobe', 3, 'Great ideas can happen anywhere. With Adobe apps for creativity and productivity, great work can too.\r\n', 'resources/creator/background/adobe.png', 'resources/creator/icon/adobe.png', 'p1', 0),
('TGame Studio', 4, 'Thank you for playing my games..\r\n', 'resources/creator/background/tgamestudio.png', 'resources/creator/icon/tgamestudio.png', 'g5', 0),
('Garena', 5, 'We will try our best to bloodsucking your wallet!!!! ', 'resources/creator/background/garena.png', 'resources/creator/icon/garena.png', 'g8', 0),
('VNG', 6, 'VNG GAMES - BY GAMERS, FOR GAMERS\r\n', 'resources/creator/background/vng.png', 'resources/creator/icon/vng.png', 'g12', 0),
('Fika', 7, 'For every people.', 'resources/creator/background/fika.png', 'resources/creator/icon/fika.png', 'da1', 0),
('Bumble', 8, 'Lifeâ€™s short. Make the first move.\r\n', 'resources/creator/background/bumble.png', 'resources/creator/icon/bumble.png', 'da2', 0),
('Badoo', 9, 'Join the worldâ€™s largest location-based social network for meeting new people!\r\n', 'resources/creator/background/badoo.png', 'resources/creator/icon/badoo.png', 'da3', 0),
('M_SERVICE JSC', 10, 'Saving Money', 'resources/creator/background/m_servicejsc.png', 'resources/creator/icon/m_servicejsc.png', 'f2', 0),
('VietinBank', 11, 'Bank of world!!', 'resources/creator/background/vietinbank.png', 'resources/creator/icon/vietinbank.png', 'f3', 0),
('Nikita', 12, 'Android Application Development\r\n', 'resources/creator/background/nikita.png', 'resources/creator/icon/nikita.png', 'f5', 0),
('HiEdu', 13, 'Higher the quality of education.\r\n', 'resources/creator/background/hiedu.png', 'resources/creator/icon/hiedu.png', 'e1', 0),
('Google', 14, 'Apps from Google to help you get the most out of your day, across all your devices.\r\n', 'resources/creator/background/google.png', 'resources/creator/icon/google.png', 'e3', 0),
('Pinterest', 15, 'Beauty Picture', 'resources/creator/background/pinterest.png', 'resources/creator/icon/pinterest.png', 'dd1', 0),
('Zego Game', 16, 'For all everything we do', 'resources/creator/background/zegogame.png', 'resources/creator/icon/zegogame.png', 'l2', 0),
('miHoYo Limited', 17, 'TECH OTAKUS SAVE THE WORLD', 'resources/creator/background/mihoyolimited.png', 'resources/creator/icon/mihoyolimited.png', 'g16', 0),
('iCanDesign LLC', 18, '', 'resources/creator/background/icandesignllc.png', 'resources/creator/icon/icandesignllc.png', 'h1', 0),
('Planner 5D', 19, '', 'resources/creator/background/planner5d.png', 'resources/creator/icon/planner5d.png', 'h2', 0),
('ZIGBANG', 20, 'Looking for your studio apartment, one-bedroom flat, two-bedroom flat for rent in Korea? Try the dedicated rentals app, Zigbang. Zigbang’s 1st-ranked real estate app in instantly shows you a map for rent. With our simple-to-use filters, you can find real estate listings that match your specific search criteria.', 'resources/creator/background/zigbang.png', 'resources/creator/icon/zigbang.png', 'h3', 0),
('Mooda', 21, 'Features\r\n- How are you feelings? Select the right mood for your day.\r\n- You can also upload one picture in a polaroid frame.\r\n- When you select the mood and write a journal, you can edit the date to record for the previous days.\r\n- If you dont want to keep a specific log, press long to delete it.\r\n- Shake your phone, you can find out the dominant feelings in your daily life.\r\n- Share your feelings with your friends if you want.\r\n- Also, various font styles are provided.\r\n- Data back-up is provided through Google Drive.', 'resources/creator/background/mooda.png', 'resources/creator/icon/mooda.png', 'l3', 0),
('Xiaomi Inc', 22, 'Apps from Xiaomi to help you work smartly and make your life easier.', 'resources/creator/background/xiaomiinc.png', 'resources/creator/icon/xiaomiinc.png', 'l4', 0),
('Zalo Group', 23, 'ZALO GROUP', 'resources/creator/background/zalogroup.png', 'resources/creator/icon/zalogroup.png', 'm1', 0),
('Spotify Ltd', 24, 'With Spotify, you have access to a world of free music, curated playlists, artists, and podcasts you love. Discover new music, podcasts, top songs or listen to your favorite artists, albums. Create your own music playlists with the latest songs to suit your mood.', 'resources/creator/background/spotifyltd.png', 'resources/creator/icon/spotifyltd.png', 'm2', 0),
('Netflix Inc', 25, 'We’ve got award-winning series, movies, documentaries, and stand-up specials. And with the mobile app, you get Netflix while you travel, commute, or just take a break.', 'resources/creator/background/netflixinc.png', 'resources/creator/icon/netflixinc.png', 'mo1', 0),
('IMDb', 26, 'IMDb is available worldwide in English (US/UK), Spanish, German, French, Portuguese, Italian, Japanese, Korean, Chinese, Turkish, and Hindi.', 'resources/creator/background/imdb.png', 'resources/creator/icon/imdb.png', 'mo3', 0),
('Innersloth LLC', 27, 'amogus', 'resources/creator/background/innerslothllc.png', 'resources/creator/icon/innerslothllc.png', 'g19', 0),
('King', 28, 'Our games are packed full of fun for you to enjoy with your friends or with other players!', 'resources/creator/background/king.png', 'resources/creator/icon/king.png', 'g20', 0),
('Nekki', 29, 'Cool and epic action fighting games, multiplayer games with top 3D graphics featuring online and offline brawl and fun battles with friends.', 'resources/creator/background/nekki.png', 'resources/creator/icon/nekki.png', 'g21', 0);

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
  `appid` varchar(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostdownloadsfree`
--

INSERT INTO `mostdownloadsfree` (`appid`, `downloads`) VALUES
('dd1', 7897149),
('f1', 4551330),
('g19', 11838515),
('g20', 8054046),
('m2', 22454343),
('m3', 4758631),
('mo1', 11556159),
('p5', 34395697),
('v2', 100268185);

-- --------------------------------------------------------

--
-- Table structure for table `mostdownloadspaid`
--

CREATE TABLE `mostdownloadspaid` (
  `appid` varchar(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostdownloadspaid`
--

INSERT INTO `mostdownloadspaid` (`appid`, `downloads`, `cost`) VALUES
('da1', 1254, 2000),
('f5', 90, 57000),
('g1', 111141, 54000),
('g15', 50055, 3000),
('g6', 14232, 2000),
('g7', 150000, 5000),
('g8', 45398412, 300000),
('l2', 48098, 41000),
('l3', 510, 25000);

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
('Adobe Scan', 'bs3', 'Turn your device into a powerful, portable document scanner, complete with OCR text recognition capabilities, with the free-to-use Adobe Scan app.\r\n\r\nUse the Adobe Scan mobile document scanner to turn anything â€” receipts, notes, documents, photos, business cards, whiteboards â€” into an Adobe PDF or JPEG file with content you can reuse from each PDF and photo scan.', 3, 'Adobe', 'Business', 0, 1483272, 5, '2021-05-16 13:19:22', 'resources/pendingapps/adobescan.png', '[\"resources/pendingapps/screenshots/adobescan/adobescan0.png\",\"resources/pendingapps/screenshots/adobescan/adobescan1.png\",\"resources/pendingapps/screenshots/adobescan/adobescan2.png\"]', 1),
('Adobe XD', 'bs4', 'Cover art	\r\nAdobe XD\r\nAdobeTools\r\nRated for 3+\r\n9,295\r\nThis app is not available for your device\r\nAdd to wishlist	\r\nScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot ImageScreenshot Image\r\nEliminate the guesswork by previewing your Adobe XD designs complete with transitions on native devices, in real time via USB (macOS only) or by loading them as cloud documents.\r\n\r\nIf you enjoy using Adobe XD, please share a nice review. It really helps!\r\n\r\nAdobe Terms of Use: http://www.adobe.com/go/terms\r\nAdobe Privacy Policy: https://www.adobe.com/go/privacy_policy\r\nDo not sell my information: https://www.adobe.com/privacy/ca-rights.html', 3, 'Adobe', 'Business', 0, 9295, 4, '2021-05-16 13:32:27', 'resources/pendingapps/adobexd.png', '[\"resources/pendingapps/screenshots/adobexd/adobexd0.png\",\"resources/pendingapps/screenshots/adobexd/adobexd1.png\",\"resources/pendingapps/screenshots/adobexd/adobexd2.png\"]', 1),
('Adobe Sign', 'bs5', 'This app is a mobile companion for the Adobe Sign e-signature service. With it, you can e-sign documents and forms, send them to others for e-signature, track your documents and get signatures instantly with in-person signing.\r\n\r\nAdobe Sign is the electronic signature solution you can trust, from the global leader in secure digital documents for over 25 years. Adobe Sign is used by businesses of all sizes â€” including Fortune 1000 companies, healthcare organizations and financial institutions â€” to accelerate critical business processes in Sales, HR, Legal and Operations.', 3, 'Adobe', 'Business', 0, 2210, 4, '2021-05-16 13:37:09', 'resources/pendingapps/adobesign.png', '[\"resources/pendingapps/screenshots/adobesign/adobesign0.png\",\"resources/pendingapps/screenshots/adobesign/adobesign1.png\",\"resources/pendingapps/screenshots/adobesign/adobesign2.png\"]', 1),
('Fika', 'da1', 'You will have girlfriend or boyfriend in one day', 7, 'Fika', 'Dating', 2000, 1254, 3, '2021-05-16 14:31:59', 'resources/pendingapps/fika.png', '[\"resources/pendingapps/screenshots/fika/fika0.png\"]', 1),
('Bumble ', 'da2', 'Million people have registered on Bumble to create meaningful relationships, find friends and make purposeful connections. Bumble is the dating app that allows you to make new connections, whether youâ€™re looking for a partner, to make new friends, or to expand your professional network.\r\n\r\nMaking the first move on Bumble could change your life!', 8, 'Bumble', 'Dating', 0, 237566, 4, '2021-05-16 14:33:55', 'resources/pendingapps/bumble.png', '[\"resources/pendingapps/screenshots/bumble/bumble0.png\",\"resources/pendingapps/screenshots/bumble/bumble1.png\"]', 1),
('Pinterest', 'dd1', 'Looking for creative ideas? Whether youâ€™re planning your next big travel adventure, searching for home design concepts, looking for fashion & fitness tips or checking out new recipes, find lifestyle inspiration on Pinterest. Good ideas start here!\r\n', 15, 'Pinterest', 'Daydream', 0, 7897149, 5, '2021-05-16 15:08:08', 'resources/pendingapps/pinterest.png', '[\"resources/pendingapps/screenshots/pinterest/pinterest0.png\",\"resources/pendingapps/screenshots/pinterest/pinterest1.png\"]', 1),
('Expeditions', 'dd2', 'Google Expeditions is an immersive learning and teaching tool that lets you go on VR trips or explore AR objects. Explore historical landmarks, go down to the atomic level, get up close with sharks, even visit outer space!\r\n', 14, 'Google', 'Daydream', 0, 5218, 4, '2021-05-16 15:10:00', 'resources/pendingapps/expeditions.png', '[\"resources/pendingapps/screenshots/expeditions/expeditions0.png\",\"resources/pendingapps/screenshots/expeditions/expeditions1.png\"]', 1),
('HiEdu Scientific Calculator', 'e1', 'HiEdu Scientific Calculator: He-570: A powerful calculator app that includes calculator for math, calculator for money, calculator equation... This is a calculator app which has a lot of features such as: scientific calculator, standard calculator, complex, programmer, table, matrix, vector, graph, solve the equation, converter, math formulas, physical formulas, chemistry. It is a very useful tool for education to help complete complex math, algebra, or geometry problems.', 13, 'HiEdu', 'Education', 0, 64581, 5, '2021-05-16 14:53:50', 'resources/pendingapps/hieduscientificcalculator.png', '[\"resources/pendingapps/screenshots/hieduscientificcalculator/hieduscientificcalculator0.png\",\"resources/pendingapps/screenshots/hieduscientificcalculator/hieduscientificcalculator1.png\"]', 1),
('Google Classroom', 'e3', 'Classroom is a free service for schools, non-profits and anyone with a personal Google Account. Classroom makes it easy for learners and instructors to connect â€“ inside and outside of schools. Classroom saves time and paper and makes it easy to create classes, distribute assignments, communicate and stay organised.\r\n', 14, 'Google', 'Education', 0, 1527856, 5, '2021-05-16 14:58:04', 'resources/pendingapps/googleclassroom.png', '[\"resources/pendingapps/screenshots/googleclassroom/googleclassroom0.png\",\"resources/pendingapps/screenshots/googleclassroom/googleclassroom1.png\"]', 1),
('Adobe Reader PDF', 'f1', 'Do you need to work with documents on the go? Get the Adobe Acrobat Reader mobile app, the worldâ€™s most trusted PDF viewer, with more than 635 million installs. Store your files online and read PDF files anywhere with this leading, free PDF reader and file manager. You can also view, share, annotate, and add e-signatures to PDF documents.\r\n\r\nSubscribe to Adobe Acrobat if you need a PDF editor to edit text and images, a PDF converter to export to and from PDF, or more advanced features to create PDFs, combine PDF documents, organize PDFs, and more.\r\n\r\nVIEW AND PRINT PDFs\r\nâ€¢ Open and view PDFs with the free Adobe PDF viewer app.\r\nâ€¢ Choose Single Page or Continuous scroll mode.\r\nâ€¢ Help save battery with dark mode.\r\nâ€¢ Print documents directly from your device.\r\n\r\nREAD PDFs MORE EASILY\r\nâ€¢ Get the best PDF reading experience with Liquid Mode.\r\nâ€¢ Content in your PDF document reflows to fit your screen.\r\nâ€¢ Use the Liquid Mode outline for quick navigation.\r\nâ€¢ Search to find text fast in your PDF documents', 3, 'Adobe', 'Finance', 0, 4551330, 5, '2021-05-16 13:11:50', 'resources/pendingapps/adobereaderpdf.png', '[\"resources/pendingapps/screenshots/adobereaderpdf/adobereaderpdf0.png\",\"resources/pendingapps/screenshots/adobereaderpdf/adobereaderpdf1.png\",\"resources/pendingapps/screenshots/adobereaderpdf/adobereaderpdf2.png\"]', 1),
('Momo', 'f2', 'Take care of your money', 10, 'M_SERVICE JSC', 'Finance', 0, 247043, 5, '2021-05-16 14:41:59', 'resources/pendingapps/momo.png', '[\"resources/pendingapps/screenshots/momo/momo0.png\",\"resources/pendingapps/screenshots/momo/momo1.png\"]', 1),
('VietinBank iPay', 'f3', 'Link to bank', 11, 'VietinBank', 'Finance', 0, 33932, 4, '2021-05-16 14:44:36', 'resources/pendingapps/vietinbankipay.png', '[\"resources/pendingapps/screenshots/vietinbankipay/vietinbankipay0.png\",\"resources/pendingapps/screenshots/vietinbankipay/vietinbankipay1.png\"]', 1),
('VietinBank OTP', 'f4', 'VietinBank OTP application exclusively for VietinBank Corporate Customers.\r\nVietinBank OTP is an advanced authentication solution with the highest level of security developed by Vietnam Joint Stock Commercial Bank for Industry and Trade and the leading security partners. VietinBank OTP is installed on mobile devices to get one-time password (OTP) code when customers make transactions on online banking service VietinBank eFAST.', 11, 'VietinBank', 'Finance', 0, 1575, 3, '2021-05-16 14:47:02', 'resources/pendingapps/vietinbankotp.png', '[\"resources/pendingapps/screenshots/vietinbankotp/vietinbankotp0.png\",\"resources/pendingapps/screenshots/vietinbankotp/vietinbankotp1.png\"]', 1),
('CryptoRocket PRO Bitcoin', 'f5', 'Crypto Rocket is a real-time Bitcoin and cryptocurrency tracker. Keep track of all cryptocurrencies, including Bitcoin, Ethereum, Ripple, Litecoin and over 2000+ altcoins. Use Crypto Rocket to get the latest cryptocurrency prices, news and market charts.', 12, 'Nikita', 'Finance', 57000, 90, 4, '2021-05-16 14:50:07', 'resources/pendingapps/cryptorocketprobitcoin.png', '[\"resources/pendingapps/screenshots/cryptorocketprobitcoin/cryptorocketprobitcoin0.png\",\"resources/pendingapps/screenshots/cryptorocketprobitcoin/cryptorocketprobitcoin1.png\"]', 1),
('Cytus II', 'g1', 'Cytus II is a music rhythm game created by Rayark Games. Its our fourth rhythm game title, following the footsteps of three global successes, Cytus, DEEMO and VOEZ. This sequel to Cytus brings back the original staff and is a product of hardwork and devotion.', 1, 'Rayark', 'Game', 54000, 111141, 5, '2021-05-15 22:09:50', 'resources/pendingapps/cytusii.png', '[\"resources/pendingapps/screenshots/cytusii/cytusii0.png\",\"resources/pendingapps/screenshots/cytusii/cytusii1.png\",\"resources/pendingapps/screenshots/cytusii/cytusii2.png\"]', 1),
('PUBG', 'g12', 'Best game of VNG ', 6, 'VNG', 'Game', 0, 891897, 5, '2021-05-16 14:22:28', 'resources/pendingapps/pubg.png', '[\"resources/pendingapps/screenshots/pubg/pubg0.png\",\"resources/pendingapps/screenshots/pubg/pubg1.png\",\"resources/pendingapps/screenshots/pubg/pubg2.png\"]', 1),
('Zing Speed', 'g13', 'Have a best race', 6, 'VNG', 'Game', 0, 343159, 5, '2021-05-16 14:24:45', 'resources/pendingapps/zingspeed.png', '[\"resources/pendingapps/screenshots/zingspeed/zingspeed0.png\"]', 1),
('Gunny', 'g14', 'Shooting chicken\r\n', 6, 'VNG', 'Game', 0, 202132, 3, '2021-05-16 14:26:24', 'resources/pendingapps/gunny.png', '[\"resources/pendingapps/screenshots/gunny/gunny0.png\",\"resources/pendingapps/screenshots/gunny/gunny1.png\"]', 1),
('Thien Nu', 'g15', 'Good Girl!!!', 6, 'VNG', 'Game', 3000, 50055, 5, '2021-05-16 14:28:15', 'resources/pendingapps/thiennu.png', '[\"resources/pendingapps/screenshots/thiennu/thiennu0.png\",\"resources/pendingapps/screenshots/thiennu/thiennu1.png\"]', 1),
('Genshin Impact', 'g16', 'Step into Teyvat, a vast world teeming with life and flowing with elemental energy.\r\n\r\nYou and your sibling arrived here from another world. Separated by an unknown god, stripped of your powers, and cast into a deep slumber, you now awake to a world very different from when you first arrived.', 17, 'miHoYo Limited', 'Game', 0, 1501123, 5, '2021-05-16 16:02:34', 'resources/pendingapps/genshinimpact.png', '[\"resources/pendingapps/screenshots/genshinimpact/genshinimpact0.png\",\"resources/pendingapps/screenshots/genshinimpact/genshinimpact1.png\",\"resources/pendingapps/screenshots/genshinimpact/genshinimpact2.png\"]', 1),
('Honkai Impact 3', 'g18', 'New SP battlesuit [Haxxor Bunny] debuts! Login rewards 5 Supply Cards!\r\nExplore the map in the battlesuit event to unlock Twilight Paladins new outfit and new battlesuit fragments!', 17, 'miHoYo Limited', 'Game', 0, 380576, 4, '2021-05-16 21:27:33', 'resources/pendingapps/honkaiimpact3.png', '[\"resources/pendingapps/screenshots/honkaiimpact3/honkaiimpact30.png\",\"resources/pendingapps/screenshots/honkaiimpact3/honkaiimpact31.png\",\"resources/pendingapps/screenshots/honkaiimpact3/honkaiimpact32.png\"]', 1),
('Among Us', 'g19', 'Play online or over local WiFi with 4-10 players as you attempt to prep your spaceship for departure, but beware as one will be an impostor bent on killing everyone!', 27, 'Innersloth LLC', 'Game', 0, 11838515, 4, '2021-05-16 21:35:47', 'resources/pendingapps/amongus.png', '[\"resources/pendingapps/screenshots/amongus/amongus0.png\",\"resources/pendingapps/screenshots/amongus/amongus1.png\",\"resources/pendingapps/screenshots/amongus/amongus2.png\"]', 1),
('DEEMO', 'g2', 'Never Left Without Saying Goodbye.', 1, 'Rayark', 'Game', 0, 552118, 5, '2021-05-15 22:15:00', 'resources/pendingapps/deemo.png', '[\"resources/pendingapps/screenshots/deemo/deemo0.png\",\"resources/pendingapps/screenshots/deemo/deemo1.png\",\"resources/pendingapps/screenshots/deemo/deemo2.png\"]', 1),
('Candy Crush Soda Saga', 'g20', 'Download Candy Crush Soda Saga now!\r\n\r\nFrom the makers of the legendary Candy Crush Saga comes Candy Crush Soda Saga! Unique candies, more divine matching combinations and challenging game modes brimming with purple soda and fun!', 28, 'King', 'Game', 0, 8054046, 5, '2021-05-16 21:38:14', 'resources/pendingapps/candycrushsodasaga.png', '[\"resources/pendingapps/screenshots/candycrushsodasaga/candycrushsodasaga0.png\",\"resources/pendingapps/screenshots/candycrushsodasaga/candycrushsodasaga1.png\",\"resources/pendingapps/screenshots/candycrushsodasaga/candycrushsodasaga2.png\"]', 1),
('Shadow Fight Arena', 'g21', 'BECOME THE SHADOW FIGHT HERO IN A NEW MULTIPLAYER FIGHTING GAME!', 29, 'Nekki', 'Game', 0, 391340, 5, '2021-05-16 21:41:44', 'resources/pendingapps/shadowfightarena.png', '[\"resources/pendingapps/screenshots/shadowfightarena/shadowfightarena0.png\",\"resources/pendingapps/screenshots/shadowfightarena/shadowfightarena1.png\",\"resources/pendingapps/screenshots/shadowfightarena/shadowfightarena2.png\"]', 1),
('VOEZ', 'g3', 'VOEZ invites you to embark on the remarkable journey of teenage dreams,\r\nFollowing after Cytus and Deemo, two titles that took the world by storm,\r\nRayark’s remarkable rhythm game, VOEZ, has officially arrived!', 1, 'Rayark', 'Game', 0, 107144, 4, '2021-05-15 23:03:09', 'resources/pendingapps/voez.png', '[\"resources/pendingapps/screenshots/voez/voez0.png\",\"resources/pendingapps/screenshots/voez/voez1.png\",\"resources/pendingapps/screenshots/voez/voez2.png\"]', 1),
('Flappy Bird', 'g6', 'You are a bird try to go home. \r\nHave funs!!!', 4, 'TGame Studio', 'Game', 2000, 14232, 5, '2021-05-16 13:41:57', 'resources/pendingapps/flappybird.png', '[\"resources/pendingapps/screenshots/flappybird/flappybird0.png\",\"resources/pendingapps/screenshots/flappybird/flappybird1.png\",\"resources/pendingapps/screenshots/flappybird/flappybird2.png\"]', 1),
('Sudoku', 'g7', 'Try to solve!!!\r\n', 4, 'TGame Studio', 'Game', 5000, 150000, 4, '2021-05-16 13:44:04', 'resources/pendingapps/sudoku.png', '[\"resources/pendingapps/screenshots/sudoku/sudoku0.png\",\"resources/pendingapps/screenshots/sudoku/sudoku1.png\"]', 1),
('Lien Quan Mobile', 'g8', 'Best game on mobile.\r\nYou cannot skip this game.', 5, 'Garena', 'Game', 300000, 45398412, 5, '2021-05-16 13:48:23', 'resources/pendingapps/lienquanmobile.png', '[\"resources/pendingapps/screenshots/lienquanmobile/lienquanmobile0.png\",\"resources/pendingapps/screenshots/lienquanmobile/lienquanmobile1.png\",\"resources/pendingapps/screenshots/lienquanmobile/lienquanmobile2.png\"]', 1),
('Room Planner', 'h1', 'Decorate your house or apartment and furnish it with the best floor plan creator and homestyler app. Get inspiration from predesigned layouts for your bedroom, bathroom, living room, etc. Our room designer gives you home interior decor ideas to start your project.', 18, 'iCanDesign LLC', 'Houses', 0, 89805, 5, '2021-05-16 20:34:51', 'resources/pendingapps/roomplanner.png', '[\"resources/pendingapps/screenshots/roomplanner/roomplanner0.png\",\"resources/pendingapps/screenshots/roomplanner/roomplanner1.png\",\"resources/pendingapps/screenshots/roomplanner/roomplanner2.png\"]', 1),
('Planner 5D', 'h2', 'Planner 5D is a simple-to-use app that enables anyone to create beautiful and realistic interior and exterior designs in 2D and 3D modes.\r\n', 19, 'Planner 5D', 'Houses', 0, 304290, 4, '2021-05-16 20:37:40', 'resources/pendingapps/planner5d.png', '[\"resources/pendingapps/screenshots/planner5d/planner5d0.png\",\"resources/pendingapps/screenshots/planner5d/planner5d1.png\",\"resources/pendingapps/screenshots/planner5d/planner5d2.png\",\"resources/pendingapps/screenshots/planner5d/planner5d3.png\"]', 1),
('Zigbang', 'h3', '1st-ranked real estate app in Korea, Zigbang!\r\n- The winner of 2015 Best of the best brand awards\r\n- The winner of 2014 Korea mobile app award', 20, 'ZIGBANG', 'Houses', 0, 74066, 4, '2021-05-16 20:40:57', 'resources/pendingapps/zigbang.png', '[\"resources/pendingapps/screenshots/zigbang/zigbang0.png\",\"resources/pendingapps/screenshots/zigbang/zigbang1.png\",\"resources/pendingapps/screenshots/zigbang/zigbang2.png\"]', 1),
('Google Home', 'l1', 'Set up, manage, and control your Google Home, Google Nest, and Chromecast devices, plus thousands of connected home products like lights, cameras, thermostats, and more â€“ all from the Google Home app.\r\n', 14, 'Google', 'Lifestyle', 0, 1084451, 4, '2021-05-16 15:05:40', 'resources/pendingapps/googlehome.png', '[\"resources/pendingapps/screenshots/googlehome/googlehome0.png\",\"resources/pendingapps/screenshots/googlehome/googlehome1.png\"]', 1),
('Lich Van Nien 2021', 'l2', 'Vietnamese calendar', 16, 'Zego Game', 'Lifestyle', 41000, 48098, 4, '2021-05-16 15:13:33', 'resources/pendingapps/lichvannien2021.png', '[\"resources/pendingapps/screenshots/lichvannien2021/lichvannien20210.png\",\"resources/pendingapps/screenshots/lichvannien2021/lichvannien20211.png\"]', 1),
('Mooda', 'l3', 'Keep track of your moods to understand yourself better.\r\nThe most simple way to improve your emotional wellbeing is here.', 21, 'Mooda', 'Lifestyle', 25000, 510, 4, '2021-05-16 20:46:23', 'resources/pendingapps/mooda.png', '[\"resources/pendingapps/screenshots/mooda/mooda0.png\",\"resources/pendingapps/screenshots/mooda/mooda1.png\",\"resources/pendingapps/screenshots/mooda/mooda2.png\"]', 1),
('Mi Home', 'l4', 'Manage and communicate to devices.\r\nConnect devices to network.\r\nConnect devices to each other.', 22, 'Xiaomi Inc', 'Lifestyle', 0, 613014, 5, '2021-05-16 20:50:54', 'resources/pendingapps/mihome.png', '[\"resources/pendingapps/screenshots/mihome/mihome0.png\",\"resources/pendingapps/screenshots/mihome/mihome1.png\",\"resources/pendingapps/screenshots/mihome/mihome2.png\"]', 1),
('Zing mp3', 'm1', 'Vietnamese most popular application for cloud music. ', 23, 'Zalo Group', 'Music', 0, 1105319, 4, '2021-05-16 20:55:41', 'resources/pendingapps/zingmp3.png', '[\"resources/pendingapps/screenshots/zingmp3/zingmp30.png\",\"resources/pendingapps/screenshots/zingmp3/zingmp31.png\",\"resources/pendingapps/screenshots/zingmp3/zingmp32.png\"]', 1),
('Spotify', 'm2', 'With Spotify, you can listen to music and play millions of songs and podcasts for free. Stream music and podcasts you love and find music - or your next favorite song - from all over the world.', 24, 'Spotify Ltd', 'Music', 0, 22454343, 5, '2021-05-16 20:58:56', 'resources/pendingapps/spotify.png', '[\"resources/pendingapps/screenshots/spotify/spotify0.png\",\"resources/pendingapps/screenshots/spotify/spotify1.png\",\"resources/pendingapps/screenshots/spotify/spotify2.png\"]', 1),
('Soundcloud', 'm3', 'SoundCloud is more than a streaming service, it’s an open global community for anyone to upload any sound for immediate discovery.', 25, 'Soundcloud', 'Music', 0, 4758631, 5, '2021-05-16 21:01:30', 'resources/pendingapps/soundcloud.png', '[\"resources/pendingapps/screenshots/soundcloud/soundcloud0.png\",\"resources/pendingapps/screenshots/soundcloud/soundcloud1.png\",\"resources/pendingapps/screenshots/soundcloud/soundcloud2.png\"]', 1),
('Netflix', 'mo1', 'Looking for the most talked about TV shows and movies from the around the world? They’re all on Netflix.', 25, 'Netflix Inc', 'Movies', 0, 11556159, 5, '2021-05-16 21:11:38', 'resources/pendingapps/netflix.png', '[\"resources/pendingapps/screenshots/netflix/netflix0.png\",\"resources/pendingapps/screenshots/netflix/netflix1.png\",\"resources/pendingapps/screenshots/netflix/netflix2.png\"]', 1),
('Google Play Movies n TV', 'mo2', 'Google Play makes finding and watching movies & TV shows easier than ever.', 14, 'Google', 'Movies', 0, 1794977, 4, '2021-05-16 21:13:52', 'resources/pendingapps/googleplaymoviesntv.png', '[\"resources/pendingapps/screenshots/googleplaymoviesntv/googleplaymoviesntv0.png\",\"resources/pendingapps/screenshots/googleplaymoviesntv/googleplaymoviesntv1.png\",\"resources/pendingapps/screenshots/googleplaymoviesntv/googleplaymoviesntv2.png\"]', 1),
('IMDb', 'mo3', 'Stay up to date with entertainment news, awards, and events.', 26, 'IMDb', 'Movies', 0, 796461, 5, '2021-05-16 21:21:41', 'resources/pendingapps/imdb.png', '[\"resources/pendingapps/screenshots/imdb/imdb0.png\",\"resources/pendingapps/screenshots/imdb/imdb1.png\",\"resources/pendingapps/screenshots/imdb/imdb2.png\"]', 1),
('Adobe Lightroom', 'p1', 'Adobe Photoshop Lightroom is a free, powerful photo editor and camera app that empowers your photography, helping you capture and edit stunning images.\r\n\r\nEasy image editing tools like sliders and filters for pictures simplify photo editing. Retouch full-resolution photos, apply photo filters, or start photo editing wherever you are.\r\n\r\nEDIT PHOTOS ANYWHERE\r\nTransform raw photos with one of the worldâ€™s most intuitive photo editing apps. Tap and drag sliders to improve light and colour, apply photo filters for pictures, and more. Breathe life into your photo editing with leading photography tools.\r\n\r\nRetouch light and colour to make photos pop. Easy sliders let you control photo properties from your phone screen.\r\n\r\nCrop and Rotate tools find the right size and aspect ratio to best show off your camera work. Create clean shots with straight lines by adjusting the perspective with powerful upright, guided upright, and Geometry sliders.\r\n\r\nExperiment and compare different photo versions without losing the original and pick your favourite look.\r\n\r\nAccess all your presets anywhere. Image edits on one device are automatically applied everywhere else.\r\n\r\nEDIT THE FINE DETAILS\r\nFinesse details with the advanced picture editor. Control images with selective adjustments. Remove almost anything with a touch of the Healing Brush. Local Hue Adjustments as part of selective edits let you alter hue and saturation with precision and elevate your photos. Have more control with advanced colour grading and achieve stunning effects. Import your own graphical watermarks and apply your personal touch.\r\n\r\nEasy, interactive tutorials from fellow photographers teach you to use the photo editor to its potential.\r\n', 3, 'Adobe', 'Photography', 0, 999924, 4, '2021-05-16 13:06:54', 'resources/pendingapps/adobelightroom.png', '[\"resources/pendingapps/screenshots/adobelightroom/adobelightroom0.png\",\"resources/pendingapps/screenshots/adobelightroom/adobelightroom1.png\",\"resources/pendingapps/screenshots/adobelightroom/adobelightroom2.png\"]', 1),
('Adobe Photoshop', 'p2', 'ENHANCE, STYLIZE AND SHARE YOUR PHOTOS WITH EASE.\r\nTap into your creativity on the go with Photoshop Expressâ€“the standard for fast and easy photo editingâ€“used by millions of creative individuals. Enhance photos like the pros with an easy-to-use digital studio full of editing features on your mobile device.\r\n\r\nPhotoshop Express delivers a full spectrum of fun tools and effects at your fingertips. Personalize your experiences with borders and text, enhance color and imagery, create collages, make quick fixes and enhance your share-worthy moments for free.', 3, 'Adobe', 'Photography', 0, 1685658, 4, '2021-05-16 13:21:40', 'resources/pendingapps/adobephotoshop.png', '[\"resources/pendingapps/screenshots/adobephotoshop/adobephotoshop0.png\",\"resources/pendingapps/screenshots/adobephotoshop/adobephotoshop1.png\",\"resources/pendingapps/screenshots/adobephotoshop/adobephotoshop2.png\"]', 1),
('Adobe Draw', 'p3', 'Winner of the Tabby Award for Creation, Design and Editing and PlayStore Editorâ€™s Choice Award!\r\n\r\nCreate vector artwork with image and drawing layers you can send to Adobe Illustrator or to Photoshop.\r\n\r\nIllustrators, graphic designers and artists can:\r\nâ€¢ Zoom up to 64x to apply finer details.\r\nâ€¢ Sketch with five different pen tips with adjustable opacity, size and color.\r\nâ€¢ Work with multiple image and drawing layers.\r\nâ€¢ Rename, duplicate, merge and adjust each individual layer.\r\nâ€¢ Insert basic shape stencils or new vector shapes from Capture.\r\nâ€¢ Send an editable native file to Illustrator or a PSD to Photoshop that automatically opens on your desktop.', 3, 'Adobe', 'Photography', 0, 120794, 5, '2021-05-16 13:27:06', 'resources/pendingapps/adobedraw.png', '[\"resources/pendingapps/screenshots/adobedraw/adobedraw0.png\",\"resources/pendingapps/screenshots/adobedraw/adobedraw1.png\",\"resources/pendingapps/screenshots/adobedraw/adobedraw2.png\"]', 1),
('Snapseed', 'p4', '', 14, 'Google', 'Photography', 0, 1366081, 4, '2021-05-16 15:01:58', 'resources/pendingapps/snapseed.png', '[\"resources/pendingapps/screenshots/snapseed/snapseed0.png\",\"resources/pendingapps/screenshots/snapseed/snapseed1.png\"]', 1),
('Google Photos', 'p5', 'Google Photos is the home for all your photos and videos, automatically organized and easy to share.\r\n\r\n- â€œThe best photo product on Earthâ€ â€“ The Verge\r\n\r\n- â€œGoogle Photos is your new essential picture appâ€ â€“ Wired', 14, 'Google', 'Photography', 0, 34395697, 4, '2021-05-16 15:03:21', 'resources/pendingapps/googlephotos.png', '[\"resources/pendingapps/screenshots/googlephotos/googlephotos0.png\",\"resources/pendingapps/screenshots/googlephotos/googlephotos1.png\"]', 1),
('TikTok', 's1', 'The best trend', 2, 'TikTok Pte', 'Social', 0, 1234567, 5, '2021-05-16 02:31:21', 'resources/pendingapps/tiktok.png', '[\"resources/pendingapps/screenshots/tiktok/tiktok0.png\",\"resources/pendingapps/screenshots/tiktok/tiktok1.png\",\"resources/pendingapps/screenshots/tiktok/tiktok2.png\",\"resources/pendingapps/screenshots/tiktok/tiktok3.png\"]', 1),
('TikTokWall', 's2', 'Best wall in the world', 2, 'TikTok Pte', 'Social', 0, 444123, 3, '2021-05-16 02:33:56', 'resources/pendingapps/tiktokwall.png', '[\"resources/pendingapps/screenshots/tiktokwall/tiktokwall0.png\",\"resources/pendingapps/screenshots/tiktokwall/tiktokwall1.png\"]', 1),
('Adobe Premiere Rush', 'v1', 'Shoot, edit, and share online videos anywhere.\r\n\r\nFeed your channels a steady stream of awesome with Adobe Premiere Rush, the all-in-one, cross-device video editor. Powerful tools let you quickly create videos that look and sound professional, just how you want. Share to your favourite social sites right from the app and work across devices. Use it for free as long as you want with unlimited exportsâ€”or upgrade to access all premium features and hundreds of soundtracks, sound effects, loops, animated titles, overlays, and graphics.', 3, 'Adobe', 'Video', 0, 22101, 4, '2021-05-16 13:30:26', 'resources/pendingapps/adobepremiererush.png', '[\"resources/pendingapps/screenshots/adobepremiererush/adobepremiererush0.png\",\"resources/pendingapps/screenshots/adobepremiererush/adobepremiererush1.png\",\"resources/pendingapps/screenshots/adobepremiererush/adobepremiererush2.png\"]', 1),
('Youtube', 'v2', 'Get the official YouTube app on Android phones and tablets. See what the world is watching -- from the hottest music videos to whatâ€™s popular in gaming, fashion, beauty, news, learning and more. Subscribe to channels you love, create content of your own, share with friends, and watch on any device.\r\n', 14, 'Google', 'Video', 0, 100268185, 5, '2021-05-16 15:00:28', 'resources/pendingapps/youtube.png', '[\"resources/pendingapps/screenshots/youtube/youtube0.png\",\"resources/pendingapps/screenshots/youtube/youtube1.png\"]', 1);

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
('dd1', '2021-05-16 15:08:08'),
('dd2', '2021-05-16 15:10:01'),
('e1', '2021-05-16 14:53:50'),
('e3', '2021-05-16 14:58:04'),
('g1', '2021-05-15 22:09:50'),
('g16', '2021-05-16 17:22:33'),
('g18', '2021-05-16 21:30:37'),
('g19', '2021-05-16 21:35:58'),
('g2', '2021-05-15 22:15:00'),
('g20', '2021-05-16 21:38:18'),
('g21', '2021-05-16 21:41:48'),
('g3', '2021-05-15 23:03:09'),
('h1', '2021-05-16 20:47:23'),
('h2', '2021-05-16 20:47:24'),
('h3', '2021-05-16 20:47:24'),
('l1', '2021-05-16 15:05:40'),
('l2', '2021-05-16 15:13:33'),
('l3', '2021-05-16 20:47:25'),
('l4', '2021-05-16 21:06:54'),
('m1', '2021-05-16 21:06:54'),
('m2', '2021-05-16 21:06:55'),
('m3', '2021-05-16 21:06:55'),
('mo1', '2021-05-16 21:14:07'),
('mo2', '2021-05-16 21:14:08'),
('mo3', '2021-05-16 21:21:45'),
('p4', '2021-05-16 15:01:59'),
('p5', '2021-05-16 15:03:21'),
('v2', '2021-05-16 15:00:28');

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
