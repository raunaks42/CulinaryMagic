-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 04:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `artnum` int(11) NOT NULL,
  `artname` varchar(50) DEFAULT NULL,
  `artdate` timestamp NULL DEFAULT NULL,
  `content` longtext,
  `popularity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_articles`
--

INSERT INTO `blog_articles` (`artnum`, `artname`, `artdate`, `content`, `popularity`) VALUES
(1, 'The Fetish for Indian Dessert', '2018-11-21 14:33:44', '<p>I just can\'t get over my love for desserts!</p> <p>Being a true bong at heart \'Mishti\' is an integral part of my foodie journey... And Indian sweets and the variety which it offers across the Indian geography is something to swear by. With Malpua\'s, Halwa\'s, Ladoos, Barfi\'s, Rosogolla\'s, Sandesh, Puran Poli, Kheer, Payasam, Sheera,... the list goes endless.</p> <p>To my surprise, and little sadness which creeps in everytime I checkout the dessert menu these days at any restaurant ! Its just chocolate, chocolate and chocolate... though great, I fail to understand why it is so overrated at every eating joint... From sizzling brownies to chocolate mousse to chocolate icecream, these just seem to be everywhere.</p> <p>Personally, I would love to have Shahi toast with rabdi or a hot jalebi after a super scrumptious Indian meal. End with a Meetha Pan ! and voila... you are all set after a super satisfied weekend dinner. Rearing to get into the weekday sagaa...</p>', 21),
(2, 'A Small Prep - Just ahead of time', '2018-11-21 14:30:44', '<p> When it comes to arranging food for the family cooking something, you know the worst part! </p>\r\n<p> What Do I cook? </p>\r\n<p> Everyone is just so bogged on by this thought day in a day out. Whether you cook yourself, or you  have a domestic help for doing it. The fact that we have to get something good and satisfying every  time on a plate sometimes gets too much overwhelming! </p>\r\n<p> What to serve for breakfast? </p>\r\n<p> What to pack for lunch box to work? </p>\r\n<p> Is there something to snack on for the evening? </p>\r\n<p> Oh! nothing nice to have when the whole family dines together... </p>\r\n<p> Yeah! familiar things huh... Let me share some planning and organizing tips so that next time you a just not\r\n    fretting over these non-trivial matters. I am a true believer in \'Planning\' for every small bit of work you do\r\n    saves you from all the chaos and hustle bustle of busy life. We have only 24 hours. Its how you organize your work\r\n    and manage your time makes all the difference. Does it sound like a corporate management funda ? What else can you\r\n    expect from a person who has spend a good 15 to 20 years in managing projects :-) :-) But believe me, a small\r\n    preparation, a small amount of pre - thinking and working out things in the head makes your everyday life so\r\n    manageable and easy. </p>\r\n<p> Some food for thought <ul>\r\n        <li> There are some standard recipes which your family likes. For weekdays its good to stick to those items.\r\n            For e.g breakfast items like poha, dosa, idli, uttapam, upma, stuffed paranthas, bread omelette etc are\r\n            things which generally people like to eat. What is your list? Same applies to lunch and dinner items. The\r\n            list generally is very specific to a particular household.<br /> Here comes the trick:<br /> Based on your\r\n            list, the weekend shopping should be tailored to stock up the necessary raw materials. Before stepping out\r\n            for shopping do a quick inventory check. It\'s advised NOT to think of buying stuff when you are actually\r\n            about to cook a particular meal. It is time consuming and unproductive. </li>\r\n        <li> Have some standard stuff which are required as base for any kind of cooking always available. For e.g In\r\n            Veggies, we have potato, onion, tomato, ginger, garlic which when available can be used to cook up anything\r\n            in a jiffy. Then there are some spices, which can be stocked based on your food palette. For e.g Dhaniya,\r\n            Jeera, Chilli powder, Turmeric for any north Indian veggies is a standard </li>\r\n    </ul>\r\n</p>\r\n<p> Just have some pre-thought and preparation around these things will help you save a lot of time on the weekdays\r\n    where you are always in a rush and have other important things to attend to. You don\'t have to compromise on the\r\n    home food and quality and also be happy doing things which desire your utmost attention ! </p>\r\n<p> Will keep sharing... till next.. Byee </p>', 33);

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_replies`
--

CREATE TABLE `forum_discussion_replies` (
  `id` int(11) NOT NULL,
  `dnum` int(11) DEFAULT NULL,
  `unum` int(11) DEFAULT NULL,
  `rdate` timestamp NULL DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_discussion_replies`
--

INSERT INTO `forum_discussion_replies` (`id`, `dnum`, `unum`, `rdate`, `reply`) VALUES
(3, 14595, 3, '2018-11-21 14:52:12', 'Like salt bae'),
(4, 14595, 3, '2018-11-21 14:50:26', 'Ask your mom'),
(5, 14596, 3, '2018-11-21 16:10:22', 'Tumse na ho pai.');

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_topics`
--

CREATE TABLE `forum_discussion_topics` (
  `dnum` int(11) NOT NULL,
  `unum` int(11) DEFAULT NULL,
  `dsub` text,
  `ddate` timestamp NULL DEFAULT NULL,
  `popularity` int(11) DEFAULT NULL,
  `ddesc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_discussion_topics`
--

INSERT INTO `forum_discussion_topics` (`dnum`, `unum`, `dsub`, `ddate`, `popularity`, `ddesc`) VALUES
(14595, 3, 'How to add Salt?', '2018-11-21 13:58:25', 18, 'Pliz halp me to lern to salt'),
(14596, 3, 'How to spoon?', '2018-11-21 13:59:33', 3, 'Me wife tell me lern spooning. Plis halp');

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE `forum_users` (
  `id` int(11) NOT NULL,
  `uemail` varchar(30) DEFAULT NULL,
  `upw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_users`
--

INSERT INTO `forum_users` (`id`, `uemail`, `upw`) VALUES
(1, 'rsarthakgupta@gmail.com', '1amBatman'),
(2, 'raunaks42@gmail.com', 'Hello123'),
(3, 'batman@wayne.org', 'Iambatman7');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rnum` int(11) NOT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `meal` varchar(40) DEFAULT NULL,
  `cuisine` varchar(20) DEFAULT NULL,
  `cooktime` int(11) DEFAULT NULL,
  `popularity` int(11) DEFAULT NULL,
  `veg` varchar(5) DEFAULT NULL,
  `ingredients` varchar(60) DEFAULT NULL,
  `rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rnum`, `rname`, `category`, `meal`, `cuisine`, `cooktime`, `popularity`, `veg`, `ingredients`, `rdate`) VALUES
(1, 'Regular Sambhar', 'EC', 'BAAD', NULL, 20, 0, 'YES', '1,2,3,4,5,6,7,8,9,10,11,12', '2018-10-03'),
(2, 'Idli', 'EC', 'BAAD', NULL, 10, 0, 'YES', '13', '2018-10-03'),
(3, 'Dosa', 'EC', 'BAAD', NULL, 10, 0, 'YES', '13', '2018-10-03'),
(4, 'Cheesy Uttapam', 'EC', 'BAAD', NULL, 20, 0, 'YES', '13,2,3,14,15', '2018-10-07'),
(5, 'Veggie Poha', 'EC', 'BAAD', NULL, 15, 0, 'YES', '35,36,37,2,38,39,5,6,40', '2018-11-04'),
(6, 'Kheer', 'WM', 'Des', 'IND', 30, 0, 'YES', '24,25,26,27,28,50', '2018-11-04'),
(7, 'Assorted Layered Delicacy', 'WM', 'Des', 'IND', 5, 0, 'YES', '29,30,31,32,33,34', '2018-11-04'),
(8, 'Chicken Saagwala', 'WM', 'LAD', 'IND', 30, 0, 'NO', '18,19,20,2,21,22,10,11,23', '2018-10-07'),
(9, 'Delhi Butter Chicken', 'WM', 'LAD', 'IND', 40, 0, 'NO', '18,43,23,10,44,45,3,2,21,46,47,22,48,49', '2018-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `inum` int(11) NOT NULL,
  `iname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`inum`, `iname`) VALUES
(24, 'Basmati Rice'),
(48, 'Bayleaf'),
(38, 'Beans'),
(33, 'Brownie Crumble'),
(46, 'Butter'),
(28, 'Cardamom Powder'),
(37, 'Carrot'),
(17, 'Cheese'),
(18, 'Chicken'),
(34, 'Chocolate Sauce'),
(15, 'Coriander'),
(5, 'Curry Leaves'),
(22, 'Dhaniya Powder'),
(50, 'Dried Apricot'),
(4, 'Drumstick'),
(40, 'Fennel Seeds'),
(49, 'Fresh Cream'),
(25, 'Full Cream Milk'),
(23, 'Garam Masala'),
(21, 'Ginger-Garlic Paste'),
(14, 'Green Chilli'),
(7, 'Heeng/Asefoitida'),
(43, 'Hung Curd'),
(13, 'Idly/Dosa Batter'),
(12, 'Jaggery'),
(16, 'Jeera'),
(44, 'Kasoori Methi'),
(42, 'Lemon Juice'),
(20, 'Methi'),
(31, 'Mixed Fruit Crush'),
(45, 'Mustard Oil'),
(6, 'Mustard Seeds'),
(47, 'Oil'),
(2, 'Onion'),
(32, 'Oreo Crumble'),
(39, 'Peas'),
(35, 'Poha'),
(36, 'Potato'),
(10, 'Red Chilli Powder'),
(26, 'Saffron'),
(9, 'Sambhar Powder'),
(41, 'Sev'),
(19, 'Spinach'),
(30, 'Strawberry Crush'),
(27, 'Sugar'),
(8, 'Tamarind Pulp'),
(3, 'Tomato'),
(1, 'Toor Dal'),
(11, 'Turmeric Powder'),
(29, 'Vanilla Icecream');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`artnum`),
  ADD UNIQUE KEY `artname` (`artname`);

--
-- Indexes for table `forum_discussion_replies`
--
ALTER TABLE `forum_discussion_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_discussion_topics`
--
ALTER TABLE `forum_discussion_topics`
  ADD PRIMARY KEY (`dnum`);

--
-- Indexes for table `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`rnum`),
  ADD UNIQUE KEY `rnum` (`rnum`),
  ADD UNIQUE KEY `rname` (`rname`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`inum`) USING BTREE,
  ADD UNIQUE KEY `iname` (`iname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `artnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum_discussion_replies`
--
ALTER TABLE `forum_discussion_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forum_discussion_topics`
--
ALTER TABLE `forum_discussion_topics`
  MODIFY `dnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14597;

--
-- AUTO_INCREMENT for table `forum_users`
--
ALTER TABLE `forum_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
