-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 10:02 PM
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
  `artdate` date DEFAULT NULL,
  `popularity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_replies`
--

CREATE TABLE `forum_discussion_replies` (
  `dnum` int(11) DEFAULT NULL,
  `unum` int(11) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `is_newest` varchar(5) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion_topics`
--

CREATE TABLE `forum_discussion_topics` (
  `dnum` int(11) NOT NULL,
  `unum` int(11) DEFAULT NULL,
  `dsub` varchar(50) DEFAULT NULL,
  `ddate` date DEFAULT NULL,
  `popularity` int(11) DEFAULT NULL,
  `ddesc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE `forum_users` (
  `unum` int(11) NOT NULL,
  `uemail` varchar(30) DEFAULT NULL,
  `upw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Regular Sambhar', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 20, 0, 'YES', '1,2,3,4,5,6,7,8,9,10,11,12', '2018-10-03'),
(2, 'Idli', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 10, 0, 'YES', '13', '2018-10-03'),
(3, 'Dosa', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 10, 0, 'YES', '13', '2018-10-03'),
(4, 'Cheesy Uttapam', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 20, 0, 'YES', '13,2,3,14,15', '2018-10-07'),
(5, 'Veggie Poha', 'Everyday Cooking', 'Breakfast & All-Day', NULL, 15, 0, 'YES', '35,36,37,2,38,39,5,6,40', '2018-11-04'),
(6, 'Kheer', 'Weekend Mania', 'Dessert', 'Indian', 30, 0, 'YES', '24,25,26,27,28,50', '2018-11-04'),
(7, 'Assorted Layered Delicacy', 'Weekend Mania', 'Dessert', 'Indian', 5, 0, 'YES', '29,30,31,32,33,34', '2018-11-04'),
(8, 'Chicken Saagwala', 'Weekend Mania', 'Lunch & Dinner', 'Indian', 30, 0, 'NO', '18,19,20,2,21,22,10,11,23', '2018-10-07'),
(9, 'Delhi Butter Chicken', 'Weekend Mania', 'Lunch & Dinner', 'Indian', 40, 0, 'NO', '18,43,23,10,44,45,3,2,21,46,47,22,48,49', '2018-11-04');

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
-- Indexes for table `forum_discussion_topics`
--
ALTER TABLE `forum_discussion_topics`
  ADD PRIMARY KEY (`dnum`),
  ADD UNIQUE KEY `dsub` (`dsub`);

--
-- Indexes for table `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`unum`),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
