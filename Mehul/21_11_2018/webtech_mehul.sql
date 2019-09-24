-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 11:32 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
  `artdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `popularity` int(11) DEFAULT NULL,
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_articles`
--

INSERT INTO `blog_articles` (`artnum`, `artname`, `artdate`, `popularity`, `content`) VALUES
(1, 'A Small Prep â€“ Just ahead of time', '2018-11-21 03:30:00', 16, '<br>When it comes to arranging food for the family cooking something, you know the worst part!<br><br> \r\n    What Do I cook?<br><br>\r\n    Everyone is just so bogged on by this thought day in a day out. Whether you cook yourself, or you have a domestic help for doing it. The fact that we have to get something good and satisfying every time on a plate sometimes gets too much overwhelming!<br><br>\r\n    What to serve for breakfast?<br><br>\r\n    What to pack for lunch box to work?<br><br>\r\n    Is there something to snack on for the evening?<br><br> \r\n    Oh ! nothing nice to have when the whole family dines together â€¦ <br><br>\r\n    \r\n    Yeah! familiar things huh â€¦Let me share some planning and organizing tips so that next time you a just not fretting over these non-trivial matters. I am a true believer in â€˜Planningâ€™ for every small bit of work you do saves you from all the chaos and hustle bustle of busy life. We have only 24 hours. Its how you organize your work and manage your time makes all the difference. Does it sound like a corporate management funda ? What else can you expect from a person who has spend a good 15 to 20 years in managing projects ðŸ˜Š ðŸ˜Š But believe me, a small preparation, a small amount of pre -thinking and working out things in the head makes your everyday life so manageable and easy.<br><br> \r\n    Some food for thought\r\n    <ul><li>There are some standard recipes which your family likes. For weekdays its good to stick to those items. For e.g breakfast items like poha, dosa, idli, uttapam, upma, stuffed paranthas, bread omelette etc are things which generally people like to eat. What is your list? Same applies to lunch and dinner items. The list generally is very specific to a particular household.<br>\r\n    Here comes the trick:<br>\r\n    Based on your list, the weekend shopping should be tailored to stock up the necessary raw materials. Before stepping out for shopping do a quick inventory check. Itâ€™s advised NOT to think of buying stuff when you are actually about to cook a particular meal. It is time consuming and unproductive.</li> \r\n    <li>Have some standard stuff which are required as base for any kind of cooking always available.<br>\r\n    For e.g In Veggies, we have potato, onion, tomato, ginger, garlic which when available can be used to cook up anything in a jiffy.<br>\r\n    Then there are some spices, which can be stocked based on your food palette. For e.g Dhaniya, Jeera, Chilli powder, Turmeric for any north Indian veggies is a standard</li><br>\r\n    \r\n    Just have some pre-thought and preparation around these things will help you save a lot of time on the weekdays where you are always in a rush and have other important things to attend to. You donâ€™t have to compromise on the home food and quality and also be happy doing things which desire your utmost attention !<br><br>\r\n    \r\n    <i>Will keep sharing â€¦till next ..byee</i>'),
(2, 'The Fetish for Indian Dessert', '2018-11-21 05:08:24', 14, '<br>I just canâ€™t get over my love for desserts! <br><br>\r\n    Being a true bong at heart â€˜Mishtiâ€™ is an integral part of my foodie journey â€¦ And Indian sweets and the variety which it offers across the Indian geography is something to swear by. With Malpuaâ€™s, Halwaâ€™s, Ladoos, Barfiâ€™s, Rosogollaâ€™s, Sandesh, Puran Poli, Kheer, Payasam, Sheera, â€¦the list goes endless.<br><br> \r\n    To my surprise, and little sadness which creeps in everytime I checkout the dessert menu these days at any restaurant ! Its just chocolate, chocolate and chocolateâ€¦though great, I fail to understand why it is so overrated at every eating joint â€¦From sizzling brownies to chocolate mousse to chocolate icecream, these just seem to be everywhere. <br><br>\r\n    Personally, I would love to have Shahi toast with rabdi or a hot jalebi after a super scrumptious Indian meal. End with a Meetha Pan ! and voila â€¦you are all set after a super satisfied weekend dinner. Rearing to get into the weekday sagaa...   ');

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_replies`
--

CREATE TABLE `forum_discussion_replies` (
  `dnum` int(11) DEFAULT NULL,
  `unum` int(11) DEFAULT NULL,
  `rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reply` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_discussion_replies`
--

INSERT INTO `forum_discussion_replies` (`dnum`, `unum`, `rdate`, `reply`) VALUES
(1, 0, '2018-11-21 09:12:14', '            Boil water for 2 minutes'),
(1, 0, '2018-11-21 10:05:31', '            Put maggie masala magic'),
(1, 0, '2018-11-21 10:20:32', 'sarthak');

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_topics`
--

CREATE TABLE `forum_discussion_topics` (
  `dnum` int(11) NOT NULL,
  `unum` int(11) DEFAULT NULL,
  `dsub` varchar(50) DEFAULT NULL,
  `ddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `popularity` int(11) DEFAULT NULL,
  `ddesc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_discussion_topics`
--

INSERT INTO `forum_discussion_topics` (`dnum`, `unum`, `dsub`, `ddate`, `popularity`, `ddesc`) VALUES
(1, 1, 'Maggie cooking instructions', '2018-11-21 06:26:46', 15, 'Can anyone help me by providing maggie cooking instructions.');

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE `forum_users` (
  `unum` int(11) NOT NULL,
  `uemail` varchar(30) DEFAULT NULL,
  `upw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_users`
--

INSERT INTO `forum_users` (`unum`, `uemail`, `upw`) VALUES
(1, 'xyz@gmail.com', 'xyz'),
(2, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(8, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(9, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(10, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(11, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(12, 'mehul.thakral@gmail.com', 'Mmehul2018'),
(14, 'sarthak', 'abc123Sart'),
(15, 'mehul.thakral@gmail.com', 'Mmehul2018');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `inum` int(11) NOT NULL,
  `iname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`inum`, `iname`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rnum` int(11) DEFAULT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `meal` varchar(40) DEFAULT NULL,
  `cuisine` varchar(20) DEFAULT NULL,
  `cooktime` int(11) DEFAULT NULL,
  `popularity` int(11) DEFAULT NULL,
  `veg` varchar(5) DEFAULT NULL,
  `ingredients` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rnum`, `rname`, `category`, `meal`, `cuisine`, `cooktime`, `popularity`, `veg`, `ingredients`) VALUES
(1, 'Regular Sambhar', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 20, 0, 'YES', '1,2,3,4,5,6,7,8,9,10,11,12'),
(2, 'Idli', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 10, 0, 'YES', '13'),
(3, 'Dosa', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 10, 0, 'YES', '13'),
(4, 'Cheesy Uttapam', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 20, 0, 'YES', '13,2,3,14,15'),
(5, 'Veggie Poha', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 15, 0, 'YES', '35,36,37,2,38,39,5,6,40'),
(6, 'Kheer', 'Weekend Mania', 'Dessert', 'Indian', 30, 0, 'YES', '24,25,26,27,28,50'),
(7, 'Assorted Layered Delicacy', 'Weekend Mania', 'Dessert', 'Indian', 5, 0, 'YES', '29,30,31,32,33,34'),
(8, 'Chicken Saagwala', 'Weekend Mania', 'Lunch & Dinner', 'Indian', 30, 0, 'NO', '18,19,20,2,21,22,10,11,23'),
(9, 'Delhi Butter Chicken', 'Weekend Mania', 'Lunch & Dinner', 'Indian', 40, 0, 'NO', '18,43,23,10,44,45,3,2,21,46,47,22,48,49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`artnum`);

--
-- Indexes for table `forum_discussion_topics`
--
ALTER TABLE `forum_discussion_topics`
  ADD PRIMARY KEY (`dnum`);

--
-- Indexes for table `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`unum`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`inum`) USING BTREE,
  ADD UNIQUE KEY `iname` (`iname`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD UNIQUE KEY `rnum` (`rnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `artnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum_discussion_topics`
--
ALTER TABLE `forum_discussion_topics`
  MODIFY `dnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum_users`
--
ALTER TABLE `forum_users`
  MODIFY `unum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
