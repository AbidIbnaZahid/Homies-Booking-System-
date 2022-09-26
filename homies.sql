-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 07:29 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'wityg@mailinator.com', 'fawojulohi@mailinator.com', '89', 'ac748cb38ff28d1ea984'),
(2, 'abid', 'abid@live.com', '570', '7110eda4d09e062aa5e4'),
(3, 'zuwepa@mailinator.com', 'r@live.com', '444', '6216f8a75fd5bb3d5f22'),
(4, 's', 's@live.com', '111', '6216f8a75fd5bb3d5f22'),
(5, 'zaviv', 'lurevavy@mailinator.com', 'lahi@mailin', 'c83bfaab82e87c6ae388'),
(6, 'xubepobel@mailinator.com', 'a@live.com', 'xagade@mail', '81dc9bdb52d04dc20036'),
(7, 'vadaki', 'vamave@mailinator.com', 'gini@mailin', 'f96b83e1bc36b3371d0f8da214a07884'),
(8, 'xepu@mailinator.com', 'tiqigider@mailinator.com', '312', '61ae20d72007249bf84b277dceb065bd'),
(9, 'wohyh@mailinator.com', 'noresic@mailinator.com', '136', 'cb4f9aafb404106a65c8ce6647cb8c13'),
(10, 'setatezefy@mailinator.com', 'vosabyb@mailinator.com', '747', '50e4d05f7cd73728875ab9cbbf7a36a4'),
(11, 'byryrec@mailinator.com', 'dubo@mailinator.com', 'syjehivot@m', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(12, 'tiwetiluqu@mailinator.com', 'xope@mailinator.com', 'kivyluh@mai', '7d262ba7885d21367bf1fd2f56677bb5'),
(13, 'qimyfyseku@mailinator.com', 'qadyzopupe@mailinator.com', 'toqujidi@ma', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(14, 'qovirecu@mailinator.com', 'zadypumo@mailinator.com', 'fohabuver@m', '8f17d63033f83cf9e4129a06b3e1eb62'),
(15, 'toxura@mailinator.com', 'loxinulu@mailinator.com', 'beruberyta@', 'b042f06a06e8d0d9625eea7fdd71cd85'),
(16, 'tinufitu@mailinator.com', 'julecojum@mailinator.com', 'huxevo@mail', '20e52eb3ad2acb267b7bd2621c2413e2'),
(17, 'wapyvyn@mailinator.com', 'sapocuxo@mailinator.com', 'jytivakasi@', '6263882e7ae49d09bae622cfc704c778'),
(18, 'jocysu@mailinator.com', 'mofiri@mailinator.com', 'kexax@maili', '02cb3e7141bdf8d8c4b2fdb67f4e28ca'),
(19, 'futukuhus@mailinator.com', 'dafurabudi@mailinator.com', 'recuco@mail', '016b0ce5c2414653adb39ed37896dd32'),
(20, 'xudemeno@mailinator.com', 'gapy@mailinator.com', 'kadeq@maili', '2012ad91c628b31c9086a4b7a5ab3412'),
(21, 'megefed@mailinator.com', 'vatydasyg@mailinator.com', 'bodarina@ma', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(22, 'tyfyl@mailinator.com', 'sobumu@mailinator.com', 'haqojitu@ma', '46df9d38494dab3641daa140c7b2c73e'),
(23, 'soxifyk@mailinator.com', 'qyxodajiho@mailinator.com', 'misi@mailin', 'b2766393b9e62a63c68b0c86ebd188d2'),
(24, 'nijutob@mailinator.com', 'rexodamobo@mailinator.com', 'jahiba@mail', '46a1b02426444edea4e7aa1ef0b7ee95'),
(25, 'zimi@mailinator.com', 'mydorog@mailinator.com', 'tijos@maili', 'd29e0c704b825de862125a23e956ad79'),
(26, 'ferof@mailinator.com', 'kune@mailinator.com', 'zepe@mailin', '4fd3d57d4b2b379f92389db38b8d29f6'),
(27, 'ruvyhutu@mailinator.com', 'wizaximyr@mailinator.com', 'ricuhazo@ma', '96b9ec41d7cdca347b1881dea03c5f86');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nidorpassport` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'book'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `home_id`, `name`, `email`, `phone`, `nidorpassport`, `status`) VALUES
(45, 39, 'wegyzet@mailinator.com', 'hisucorexi@mailinator.com', '579', 'bovalu@mailinator.com', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `locataion_id` int(3) NOT NULL,
  `sublocation` varchar(30) NOT NULL,
  `home_type` varchar(50) NOT NULL,
  `number_of_rooms` int(3) NOT NULL,
  `number_of_belcuni` int(3) NOT NULL,
  `number_of_bathroom` int(3) NOT NULL,
  `room_price` int(5) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unbooked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `locataion_id`, `sublocation`, `home_type`, `number_of_rooms`, `number_of_belcuni`, `number_of_bathroom`, `room_price`, `image`, `status`) VALUES
(34, 38, 'Mirpur', 'hgfhg', 797, 539, 371, 594, 'img/home/1640246668-78239362.jpg', 'unbooked'),
(38, 38, '455', '349', 640, 271, 122, 270, 'img/home/1640525060-66837967.jpg', 'unbooked');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(3) NOT NULL,
  `location_name` varchar(30) NOT NULL,
  `location_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`, `location_photo`) VALUES
(38, 'Dhaka', 'img/location/1640246655-75394892.jpg'),
(41, 'Comilla', 'img/location/1640428926-74390184.jpg'),
(42, 'chittagong', 'img/location/1640429046-78662648.jpg'),
(43, 'Rangpur', 'img/location/1640442422-88407800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'jozoq@mailinator.com', 'myresawido@mailinator.com', '261', 'ac748cb38ff28d'),
(2, 'dsfg', 'abid@live.com', '56767', '9fc0ffe95de960'),
(3, 'lyqyqinu@mailinator.com', 'vedojylufo@mailinator.com', '123', 'ac748cb38ff28d'),
(4, 'shaji@mailinator.com', 'daxil@mailinator.com', '110', 'ac748cb38ff28d'),
(5, 'qavojymuf@mailinator.com', 'hiqoxib@mailinator.com', '762', 'ac748cb38ff28d'),
(7, 'farabi', 'farabi.alam@northsouth.edu', '123456', '6eb7d86752a0a3'),
(8, 'lebesutuky@mailinator.com', 'birenyz@mailinator.com', '688', 'ac748cb38ff28d'),
(9, 'wedok@mailinator.com', 'lilazeba@mailinator.com', '158', 'ac748cb38ff28d'),
(10, 's', 's@live.com', '222', '1c6637a8f2e1f7'),
(11, 'gapod@mailinator.com', 'xyhenycad@mailinator.com', '361', '328aaa78623e4e'),
(12, 'butowovo@mailinator.com', 'xypydi@mailinator.com', '174', '354b511553e771'),
(13, 'fyxijy@mailinator.com', 'kitydivy@mailinator.com', '404', '66f3763553b87b'),
(14, 'gozihidan', 'ryci@mailinator.com', '384', 'bbfdf32f3c3e2d'),
(15, 'tagudap', 'fazaremo@mailinator.com', '654', '3835b3806208e7'),
(16, 'cuhe', 'zoqe@mailinator.com', 'sapadeguxa@mailinato', '16f93cdc3892f7'),
(17, 'xobice', 'zybe@mailinator.com', 'bifu@mailinator.com', '27be8ba915758c'),
(18, 'quton@mailinator.com', 'kekocybuje@mailinator.com', '195', '0f29e5e895b8f92b7f2ef9df1577d63b54349dc6'),
(19, 'xepu@mailinator.com', 'tiqigider@mailinator.com', '312', 'tiqigider@mailinator.com'),
(20, 'ciqura@mailinator.com', 'daso@mailinator.com', '1', 'ede8e12d5415d791a72664615eabd1aa'),
(21, 'leme@mailinator.com', 'buxorytu@mailinator.com', '27', '72d80be8710ac8a1dd2aa92f71b55a4b'),
(22, 'varito@mailinator.com', 'culup@mailinator.com', '483', '68bde99715bd65cb2f8c64c27d06053a'),
(23, 'dicu@mailinator.com', 'telip@mailinator.com', '60', 'f109e93034675d96a5e2f77a91ae7389'),
(24, 'balepewuj@mailinator.com', 'pabanow@mailinator.com', '92', 'b6b92a3ef7baa05f6f18a379474280c5'),
(25, 'mywukar@mailinator.com', 'piwybikif@mailinator.com', '547', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(26, 'zelewyt@mailinator.com', 'suro@mailinator.com', '990', 'c0136b69e7f4027efa3f0a2af4e21138'),
(27, 'giwigapuj@mailinator.com', 'hapata@mailinator.com', '434', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(28, 'fyhit@mailinator.com', 'tomoko@mailinator.com', '546', 'ae1041a5f74d8fe2e6a209ee353ba262'),
(29, 'vinomodah@mailinator.com', 'pubomevum@mailinator.com', '963', '906c06258a63a19abef9997fb37ef350'),
(30, 'qobeciji@mailinator.com', 'casim@mailinator.com', '458', 'baaf789a6eb44ee19bc577d4cc4b24c0'),
(31, 'dotynew@mailinator.com', 'huqek@mailinator.com', '662', 'f36d7473b016cff0b337d69ac3f60787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
