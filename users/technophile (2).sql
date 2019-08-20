-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2019 at 04:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technophile`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardgames`
--

CREATE TABLE `boardgames` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(6) NOT NULL,
  `Image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardgames`
--

INSERT INTO `boardgames` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Image`) VALUES
(12, 'Funskool Game of Life Board Game', 3, 100, 300, 600, '', 'yes', '../images/technophilerentalimages/life.jpg'),
(13, 'Hasbro Games Taboo Board Game', 2, 150, 500, 750, '', 'yes', '../images/technophilerentalimages/taboo.jpg'),
(14, 'Simba Squap Catch Ball Game', 2, 150, 500, 1500, '', 'yes', '../images/technophilerentalimages/squap.jpg'),
(19, 'Mattel UNO Spin', 2, 150, 400, 1200, '', 'yes', '../images/technophilerentalimages/unospin.jpg'),
(20, 'Monopoly Board Game', 3, 300, 600, 1500, '', 'yes', '../images/technophilerentalimages/monopoly.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Email` varchar(50) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Perday` int(11) NOT NULL,
  `Image` varchar(70) NOT NULL,
  `Maxquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `terms` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`terms`) VALUES
('ORDER CONFIRMATION DATE: The date that TECHNOPHILE_RENTAL confirms Job pricing and\r\navailability in writing to Customer with a Job status as “CONFIRMED”, generally via a confirmation\r\nemail with Job attachment.\r\nDELIVERY, SETUP, OPERATION AND PICKUP BY TECHNOPHILE_RENTAL : If applicable, Customer\r\nagrees to be available during the Delivery/Setup and Pickup Time window described on Job.\r\nRedelivery or repickup due to Customer not being present for delivery or pickup is subject to\r\nadditional delivery charges.\r\nPAYMENT: TECHNOPHILE_RENTAL standard policy is to reserve Equipment for Customer by charging\r\n100% of the particular gadget and payment which is through cash.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `pid` int(11) NOT NULL,
  `description` varchar(800) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`pid`, `description`) VALUES
(1, 'The big, bold, beautiful sound of UE ROLL 2 gives adventure a soundtrack. Sound so loud, you’ll have to shout to be heard. It’s an ultra-portable wireless Bluetooth speaker that goes where you go with a stretchy, attachable bungee. You can even attach it to a kayak – it’s totally waterproof.'),
(2, 'The rugged, water-resistant SOL Republic Punk Wireless Speaker is an attractively designed portable Bluetooth speaker that can get quite loud for its very modest frame.'),
(3, 'The Monster Clarity Designer Series delivers rich sound with clarity '),
(4, 'The best in the business'),
(5, 'Marshall Stanmore is a compact active stereo speaker with wireless      bluetooth connectivity as well as analogue interaction knobs.'),
(7, 'Our most luxurious headphones – H9i combine ANC, wireless, an innovative aluminium touch interface and Bang & Olufsen Signature Sound\r\n	Advanced Active Noise Cancellation\r\n	Transparency Mode\r\n'),
(15, 'Beats mixr headphones are built to withstand the rigors of DJ life, which means creating a housing flexible and tough enough to take a beating. The ultra-flexible headband was also crafted to be super lightweight and easily foldable for jetting off to your next destination'),
(16, 'a speaker that can go anywhere! Splashproof and extra rugged the Flasko is perfect for camping, hiking, gardens, music festivals and for kids prone to breaking things! Not only can Flasko withstand the rain and any knocks and bumps that may come its way, it packs a serious punch sound wise with a crisp base sound. Equipped with a carry clip and bottle opener, the Flasko is designed for those that love to be outdoors, making it the perfect companion to enhance your music sharing moments.'),
(17, 'The BoomBox is a legendary piece of music history that made portable sound a part of urban lifestyle. It took music to the streets and helped shape hip hop as we know it today. The Monster Blaster celebrates the classic BoomBox with a modern design and the latest in wireless technology. With deep pounding bass, the Monster Blaster has the power to bring music to life indoors and out. You\'ve never heard anything like this before, but don\'t take our word for it....Because the Music Matters.'),
(9, 'hoverboard two-wheel self balancing electric scooter is UL 2272 Certified\r\nA POWERFUL RIDE - Cruising speed of 7.5+mph with 2 powerful 250 Watt motors offering you a wonderful riding experience\r\nEquipped with a 25.2V / 4A battery you can hit max speed of up to 7.5 MPH\r\n6.5 inch tires, east to control and ride'),
(10, 'BLUETOOTH ENABLED -Change modes, access map function, check batteries & play music during rides via the app & speakers\r\nPOWERFUL PERFORMANCE -Race up to 7.5 mph and climb inclines of up to 30 Degree with the electric smart hoverboard\'s 150W dual motors\r\nFOR ALL RIDERS -Using 3 modes, this sport hoverboard travels up to 8 miles per charge & carries riders between 44 -220 lbs\r\nTACKLES ALL ADVENTURES -UL-approved materials & 6.5\" hard rubber tires deliver increased durability and ensure smooth ride'),
(11, 'umping Sumo, More than a drone – a connected robot Quick, sturdy and agile, the Jumping Sumo transforms your environment into a giant playground. With it, everything becomes an excuse for stories and adventures. Chases, slaloms, acrobatics, obstacle jumps, photos or videos – you\'ve got plenty of choices! What\'s more, with its on-board camera, you can follow it as if you were there. Experience the amazing sensations in real time! SPEED: 7 km/h JUMPS: up to 80 cm STABILISATION: 360° VIDEO: Wide angle camera Marvel at its acrobatics With its ability to take sudden 90° and 180° turns, your Parrot Jumping Sumo can radically change direction! Whatever you subject it to, the Jumping Sumo retains excellent grip and road-holding. It\'s easy – control it with your fingertips '),
(18, ' Jumping Night MiniDrone from Parrot! Agile and lightweight, it leaps and dashes through the dark with an embedded VGA (480X640) mini camera that sends photos and videos directly to your smartphone or tablet. Program sound and light choreography to create a show for your friends and family. Download the Freeflight 3 app to live stream your video experience on your smartphone or tablet\'s piloting screen. Spin, jump, rock and roll Your MiniDrone offers three modes to help you customize your adventure. In Jumper Mode, it leaps up to 2.5 feet and still lands wheels first. In Kicker Mode, your MiniDrone uses springs to push objects out of its path. In Auto-Balance Mode, your MiniDrone remains perfectly balanced on both wheels.'),
(12, 'The Game of Life by Funskool India Ltd. is a fun game of choice and chance. Spinning the wheel of fortune gives a chance to experience the entire course of life, from education to retirement. It is a great way to instill good values in children and teach them about helping others, getting educated, making career choices, the importance of insurance and money management. The game also throws some light on the stock market, which is a good way to introduce children to making investments and calculating risks. The Game of Life is one of those board games for kids that will instill a winning spirit within each player. Introducing this game at the right age can help in shaping young minds, making them more focused in life.'),
(13, 'Have a blast playing the  Taboo board game. Suitable for teens and adults, Taboo is a fun guessing game based on clues. The team must guess the secret word on the card with clues given by a teammate. Beware, the forbidden words must not be used as clues or the opposing team will gain points. To add to the fun, the opposite team also gets to press the signature squeaker for each mistake made. Easy to learn, this game provides loads of entertainment with friends and family. Break the ice at picnics with this fun-filled game that will surely tickle your funny bone.\r\n\r\nFeatures/Specifications'),
(14, 'Squap Resembles The Catch Ball Game\r\n\r\nThe squap toy is designed taking an inspiration from the traditional way of playing a catch ball game.\r\n\r\nIncludes Behind The Back Shot, Over The Shoulder Shot, Turn Around And Jump Shot	'),
(19, 'Mattel UNO Spin'),
(20, 'Monopoly is the world\'s favorite family brand. The classic, fast-dealing property trading game welcomes the Cat into its family of tokens. After an online vote, fans around the globe decided the Cat would be the purr-fect addition to the Monopoly game. Put your token on the Go space and roll the dice to own it all in the fast-paced world of real estate. Make a move, make a deal and make a fortune to win it all. There can be only one winner in the Monopoly game; will it be you?.'),
(25, 'Powered by Frostbite, EA Sports FIFA 18 blurs the line between the virtual and real worlds, bringing to life the heroes, teams and atmospheres of the world\'s game.'),
(26, 'Uncharted 4: A Thief\'s End\r\nSeveral years after his last adventure, retired fortune hunter, Nathan Drake, is forced back into the world of thieves.|With the stakes much more personal, Drake embarks on a globe-trotting journey in pursuit of a historical conspiracy behind a fabled pirate treasure.\r\nHis greatest adventure will test his physical limits, his resolve, and ultimately what he\'s willing to sacrifice to save the ones he loves.\r\n\r\n\r\n'),
(21, 'How about a surprise Karaoke evening with friends? Too lazy to head out? Well, Karaoke Magic Sing ET- 25 K is the key solution. All you need is a TV to connect to and you are good to go for a musical evening.This Karaoke microphone has all the controls of volume, echo, tempo and even the countdown timer, so just sit, dance, stand, run and JUST sing. This microphone is very easy to set up .This Magic device comes with 3806 inbuilt songs with a collection of 1509 Hindi + 2001 English +198 Marathi and 98 Punjabi songs. Have a party with cultural diversity and just create the sense of unity amongst your friends. The songs are easy to read and You can search the songs on screen or refer to the hand book in which the songs are arranged in an alphabetical order. This was for the music lovers.'),
(22, 'What\'s new in \"Symphony\" - 1st time in India Android karaoke player. Make your phone the remote of system. Recorded files can be directly extracted to mobile. Lightweight to use and easy to carry. Connect webcam and see yourself while singing. e-Manual to save paper features 2.4GHz wireless microphone i-Fun Android karaoke player. Works direct with your TV and can be connected through Wi-Fi. HDMI output. Can install application from play store. Pen drive can be attached for playing video/audio/image in your TV. 16GB in built memory. Track pad on the microphone to navigate through the system song reserves song favorite up to 150 songs. Song recording up to 150 songs. Select song list by alphabet, word or singer.'),
(24, 'Did you miss a chance to own one of the limited production Ford GT racing machines when they launched in 2005? Here\'s an opportunity to own the same gorgeous car, in a beautiful red, in a much smaller scale. This remote control car is manufactured in a 1:18 scale and is an accurate replica of the real deal. Impress your friends and have hours of fun racing at a fraction of the cost of the real car. It operates with 4 AA batteries for the car and one 9V battery for the remote control, not included. Model is 10 inches long by 4 inches wide, 2 inches high. For ages 8 and up, adult supervision required. Product color may vary.');

-- --------------------------------------------------------

--
-- Table structure for table `hoveranddrone`
--

CREATE TABLE `hoveranddrone` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(5) NOT NULL,
  `Image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoveranddrone`
--

INSERT INTO `hoveranddrone` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Image`) VALUES
(9, 'Hoverboard Self Balance Scooter 2 ', 2, 500, 1200, 12000, '2/7/15/30', 'yes', '../images/technophilerentalimages/hover.jpg'),
(10, 'SWAGTRON T580 Bluetooth Hoverboard', 1, 700, 2500, 15000, '2/7/15/30', 'yes', '../images/technophilerentalimages/hover 2.jpg'),
(11, 'Parrot Mini Drone Jumping Sumo - White', 1, 1000, 7000, 30000, '2/7/15/30', 'no', '../images/technophilerentalimages/jumping.jpg'),
(18, 'Parrot Jumping Night MiniDrone - Diesel (Blue)', 1, 700, 2000, 12550, '2/7/15/30', 'no', '../images/technophilerentalimages/drone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karoke`
--

CREATE TABLE `karoke` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(6) NOT NULL,
  `Image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karoke`
--

INSERT INTO `karoke` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Image`) VALUES
(21, 'Karaoke Magic Sing ET-25 K', 2, 1500, 4000, 10000, '', 'no', '../images/technophilerentalimages/magic.jpg'),
(22, 'Persang Karaoke Symphony PK-8080', 1, 4000, 18000, 45000, '', 'no', '../images/technophilerentalimages/download.jpg'),
(24, 'Mustang GT Vehicle, Red with Black Stripes', 1, 1000, 3000, 8000, '', 'no', '../images/technophilerentalimages/car1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('priyamvora99@gmail.com', '5d41402abc4b2a76b9719d911017c592'),
('yashvora99@gmail.com', 'dc06698f0e2e75751545455899adccc3');

-- --------------------------------------------------------

--
-- Table structure for table `playstation`
--

CREATE TABLE `playstation` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(6) NOT NULL,
  `Image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playstation`
--

INSERT INTO `playstation` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Image`) VALUES
(25, 'FIFA 18  (for PS4)', 3, 350, 1000, 3000, '', 'yes', '../images/technophilerentalimages/fifa.jpg'),
(26, 'Uncharted 4:A thiefs end', 2, 400, 800, 2500, '', 'yes', '../images/technophilerentalimages/uncharted.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `procorder`
--

CREATE TABLE `procorder` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantityod` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `perday` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procorder`
--

INSERT INTO `procorder` (`fname`, `lname`, `address`, `phone`, `email`, `pid`, `quantityod`, `name`, `perday`, `date`) VALUES
('Priyam', 'Vora', '2/21 shaparia bldg', 9029287010, 'priyamvora99@gmail.com', 21, 1, 'Karaoke Magic Sing ET-25 K\r\n', 1500, '13/04/2018'),
('Yash', 'Vora', '2/21 shaparia bldg, 74 new charni road ,prathna samaj', 9920096026, 'yashvora99@gmail.com', 1, 1, 'Ultimate Ears Roll 2\r\n', 450, '30/07/2019'),
('Yash', 'Vora', '2/21 shaparia bldg, 74 new charni road ,prathna samaj', 9920096026, 'yashvora99@gmail.com', 10, 1, 'SWAGTRON T580 Bluetooth Hoverboard', 700, '30/07/2019'),
('Yash', 'Vora', '2/21 shaparia bldg, 74 new charni road ,prathna samaj', 9920096026, 'yashvora99@gmail.com', 2, 1, 'Sol Punk\r\n', 500, '30/07/2019');

-- --------------------------------------------------------

--
-- Table structure for table `product_catalogue`
--

CREATE TABLE `product_catalogue` (
  `Pid` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_catalogue`
--

INSERT INTO `product_catalogue` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Description`, `Image`) VALUES
(1, 'Ultimate Ears Roll 2', 1, 450, 2000, 8500, '2', 'yes', 'Some text', '../images/technophilerentalimages/ue roll 22.jpg'),
(2, 'Sol Punk', 3, 500, 2000, 6750, '2/7/15/30', 'yes', 'some text', '../images/technophilerentalimages/punk.jpg'),
(3, 'Monster Clarity Hd', 2, 400, 3000, 8750, '2/7/15/30', 'yes', 'Some Text', '../images/technophilerentalimages/monster2.jpg'),
(4, 'Bose L1 compact', 1, 700, 5000, 86540, '2/7/15/30', 'yes', 'some text', '../images/technophilerentalimages/bose.jpg'),
(5, 'Marshall Kilburn', 3, 700, 4000, 37000, '2/7/15/30', 'No', 'Some text', '../images/technophilerentalimages/marshall.jpg'),
(7, 'Beoplay', 1, 600, 2500, 10000, '2/7/15/30', 'yes', 'Some text', '../images/technophilerentalimages/bo.jpg'),
(9, 'Hoverboard Self Balance Scooter 2 ', 2, 500, 1200, 12000, '2/7/15/30', 'yes', 'Some text', '../images/technophilerentalimages/hover.jpg'),
(10, 'SWAGTRON T580 Bluetooth Hoverboard', 1, 700, 2500, 12000, '2/7/15/30', 'yes', 'Some text', '../images/technophilerentalimages/hover 2.jpg'),
(11, 'Parrot Mini Drone Jumping Sumo - White\r\n', 1, 1000, 7000, 30000, '2/7/15/30', 'no', 'Some text', '../images/technophilerentalimages/jumping.jpg'),
(12, 'Funskool Game of Life Board Game', 3, 100, 1000, 600, '', 'yes', 'Some text', '../images/technophilerentalimages/life.jpg'),
(13, 'Hasbro Games Taboo Board Game', 2, 150, 500, 750, '', 'yes', 'Some text', '../images/technophilerentalimages/taboo.jpg'),
(14, 'Simba Squap Catch Ball Game\r\n', 2, 150, 500, 1500, '', 'yes', 'Some text', '../images/technophilerentalimages/squap.jpg'),
(15, 'Beats By Dr.Dre Mixr Headphone\r\n', 2, 600, 1500, 22080, '2/7/15/30', 'yes', 'Some Text', '../images/technophilerentalimages/beats mixr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `tab` varchar(50) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`Pid`, `Name`, `tab`, `Quantity`, `Perday`, `Deposit`, `Image`) VALUES
(1, 'Ultimate Ears 2', 'speaker', 1, 450, 2000, '../images/technophilerentalimages/ue roll 22.jpg'),
(2, 'Sol Punk\r\n', 'speaker', 3, 500, 2000, '../images/technophilerentalimages/punk.jpg'),
(3, 'Monster Clarity Hd', 'speaker', 2, 400, 3000, '../images/technophilerentalimages/monster2.jpg'),
(4, 'Bose L1 compact\r\n', 'speaker', 1, 700, 5000, '../images/technophilerentalimages/bose.jpg'),
(5, 'Marshall Kilburn\r\n', 'speaker', 3, 700, 4000, '../images/technophilerentalimages/marshall.jpg'),
(7, 'Beoplay', 'speaker', 1, 600, 2500, '../images/technophilerentalimages/bo.jpg'),
(9, 'Hoverboard Self Balance Scooter 2 ', 'hoveranddrone', 2, 500, 1200, '../images/technophilerentalimages/hover.jpg'),
(10, 'SWAGTRON T580 Bluetooth Hoverboard', 'hoveranddrone', 1, 700, 2500, '../images/technophilerentalimages/hover 2.jpg'),
(11, 'Parrot Mini Drone Jumping Sumo - White\r\n', 'hoveranddrone', 1, 1000, 7000, '../images/technophilerentalimages/jumping.jpg'),
(12, 'Funskool Game of Life Board Game', 'boardgames', 3, 100, 1000, '../images/technophilerentalimages/life.jpg'),
(13, 'Hasbro Games Taboo Board Game', 'boardgames', 2, 150, 500, '../images/technophilerentalimages/taboo.jpg'),
(14, 'Simba Squap Catch Ball Game\r\n', 'boardgames', 2, 150, 500, '../images/technophilerentalimages/squap.jpg'),
(15, 'Beats By Dr.Dre Mixr Headphone\r\n', 'speaker', 2, 600, 1500, '../images/technophilerentalimages/beats mixr.jpg'),
(16, 'STK Flasko Splashproof Bluetooth Speaker\r\n', 'speaker', 3, 300, 800, '../images/technophilerentalimages/flasko.jpg'),
(17, 'Monster Blaster Boombox Wireless Speaker\r\n', 'speaker', 2, 1500, 6000, '../images/technophilerentalimages/monster.jpg\r\n'),
(18, 'Parrot Jumping Night MiniDrone - Diesel (Blue)\r\n', 'hoveranddrone', 1, 700, 2000, '../images/technophilerentalimages/drone.jpg\r\n'),
(19, 'Mattel UNO Spin\r\n', 'boardgames', 2, 150, 400, '../images/technophilerentalimages/unospin.jpg\r\n'),
(20, 'Monopoly Board Game\r\n', 'boardgames', 3, 300, 600, '../images/technophilerentalimages/monopoly.jpg '),
(21, 'Karaoke Magic Sing ET-25 K\r\n', 'karoke', 2, 1500, 4000, '../images/technophilerentalimages/magic.jpg '),
(22, 'Persang Karaoke Symphony PK-8080\r\n', 'karoke', 1, 400, 800, '../images/technophilerentalimages/download.jpg'),
(24, 'Mustang GT Vehicle, Red with Black Stripes\r\n', 'karoke', 1, 1000, 3000, '../images/technophilerentalimages/car1.jpg '),
(25, 'FIFA 18  (for PS4)\r\n', 'playstation', 3, 350, 1000, '../images/technophilerentalimages/fifa.jpg\r\n'),
(26, 'Uncharted 4:A thiefs end\r\n', 'playstation', 2, 400, 800, '../images/technophilerentalimages/uncharted.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `name`, `address`, `phone`, `lname`) VALUES
('priyamvora99@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'Priyam', '2/21 shaparia bldg, 74 new charni road ,prathna samaj', 9029287010, 'Vora'),
('yashvora99@gmail.com', 'dc06698f0e2e75751545455899adccc3', 'Yash', '2/21 shaparia bldg, 74 new charni road ,prathna samaj', 9920096026, 'Vora');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Perday` int(6) NOT NULL,
  `Deposit` int(6) NOT NULL,
  `Mrp` int(6) NOT NULL,
  `DaysOption` varchar(10) NOT NULL,
  `Demo` varchar(5) NOT NULL,
  `Image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`Pid`, `Name`, `Quantity`, `Perday`, `Deposit`, `Mrp`, `DaysOption`, `Demo`, `Image`) VALUES
(1, 'Ultimate Ears 2', 1, 450, 2000, 8500, '2/7/15/30', 'yes', '../images/technophilerentalimages/ue roll 22.jpg'),
(2, 'Sol Punk', 3, 500, 2000, 6750, '2/7/15/30', 'yes', '../images/technophilerentalimages/punk.jpg'),
(3, 'Monster Clarity Hd', 2, 400, 3000, 8750, '2/7/15/30', 'yes', '../images/technophilerentalimages/monster2.jpg'),
(4, 'Bose L1 compact', 1, 700, 5000, 86540, '2/7/15/30', 'yes', '../images/technophilerentalimages/bose.jpg'),
(5, 'Marshall Kilburn', 3, 700, 4000, 37000, '2/7/15/30', 'no', '../images/technophilerentalimages/marshall.jpg'),
(7, 'Beoplay', 1, 600, 2500, 10000, '2/7/15/30', 'yes', '../images/technophilerentalimages/bo.jpg'),
(15, 'Beats By Dr.Dre Mixr Headphone', 2, 600, 1500, 22080, '2/7/15/30', 'yes', '../images/technophilerentalimages/beats mixr.jpg'),
(16, 'STK Flasko Splashproof Bluetooth Speaker', 3, 300, 800, 3500, '2/7/15/30', 'yes', '../images/technophilerentalimages/flasko.jpg'),
(17, 'Monster Blaster Boombox Wireless Speaker', 2, 1500, 6000, 40000, '2/7/15/30', 'yes', '../images/technophilerentalimages/monster.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `OrderDate` varchar(350) NOT NULL,
  `Refund` varchar(350) NOT NULL,
  `Damage` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`OrderDate`, `Refund`, `Damage`) VALUES
('The date that TECHNOPHILE_RENTAL confirms Job pricing and\r\navailability in writing to Customer with a Job status as “CONFIRMED”, generally via a confirmation\r\nemail with Job attachment.', 'TECHNOPHILE_RENTAL provided free 24/7 telephone tech\r\nsupport and will make every effort to immediately replace Equipment that is malfunctioning.', 'Customer is responsible for all damage to Equipment from any cause\r\nwhatsoever incurred while in possession of Equipment. TECHNOPHILE_RENTAL will inspect all\r\nEquipment returned from Customer and will notify Customer of any charges within 24 hours of Job\r\nEnd.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  ADD PRIMARY KEY (`Pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
